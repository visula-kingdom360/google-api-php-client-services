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

namespace Google\Service\Document;

class GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadata extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var int */
  public $errorDocumentCount;
  /** @var GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus[] */
  public $individualBatchDeleteStatuses;
  /** @var int */
  public $totalDocumentCount;
  protected $collection_key = 'individualBatchDeleteStatuses';
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $individualBatchDeleteStatusesType = GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus::class;
  protected $individualBatchDeleteStatusesDataType = 'array';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param int */
  public function setErrorDocumentCount($errorDocumentCount)
  {
    $this->errorDocumentCount = $errorDocumentCount;
  }
  /** @return int */
  public function getErrorDocumentCount()
  {
    return $this->errorDocumentCount;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus[] */
  public function setIndividualBatchDeleteStatuses($individualBatchDeleteStatuses)
  {
    $this->individualBatchDeleteStatuses = $individualBatchDeleteStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus[] */
  public function getIndividualBatchDeleteStatuses()
  {
    return $this->individualBatchDeleteStatuses;
  }
  /** @param int */
  public function setTotalDocumentCount($totalDocumentCount)
  {
    $this->totalDocumentCount = $totalDocumentCount;
  }
  /** @return int */
  public function getTotalDocumentCount()
  {
    return $this->totalDocumentCount;
  }
}

class GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3DocumentId */
  public $documentId;
  /** @var GoogleRpcStatus */
  public $status;
  protected $documentIdType = GoogleCloudDocumentaiUiv1beta3DocumentId::class;
  protected $documentIdDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function setDocumentId(GoogleCloudDocumentaiUiv1beta3DocumentId $documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function getDocumentId()
  {
    return $this->documentId;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadata extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var string */
  public $destDatasetType;
  /** @var string */
  public $destSplitType;
  /** @var GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus[] */
  public $individualBatchMoveStatuses;
  protected $collection_key = 'individualBatchMoveStatuses';
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $individualBatchMoveStatusesType = GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus::class;
  protected $individualBatchMoveStatusesDataType = 'array';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param string */
  public function setDestDatasetType($destDatasetType)
  {
    $this->destDatasetType = $destDatasetType;
  }
  /** @return string */
  public function getDestDatasetType()
  {
    return $this->destDatasetType;
  }
  /** @param string */
  public function setDestSplitType($destSplitType)
  {
    $this->destSplitType = $destSplitType;
  }
  /** @return string */
  public function getDestSplitType()
  {
    return $this->destSplitType;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus[] */
  public function setIndividualBatchMoveStatuses($individualBatchMoveStatuses)
  {
    $this->individualBatchMoveStatuses = $individualBatchMoveStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus[] */
  public function getIndividualBatchMoveStatuses()
  {
    return $this->individualBatchMoveStatuses;
  }
}

class GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3DocumentId */
  public $documentId;
  /** @var GoogleRpcStatus */
  public $status;
  protected $documentIdType = GoogleCloudDocumentaiUiv1beta3DocumentId::class;
  protected $documentIdDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function setDocumentId(GoogleCloudDocumentaiUiv1beta3DocumentId $documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function getDocumentId()
  {
    return $this->documentId;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resource;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiUiv1beta3CreateLabelerPoolOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeleteDataLabelingJobOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeleteLabelerPoolOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeleteProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeleteProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3DisableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3DisableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3DocumentId extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId */
  public $gcsManagedDocId;
  /** @var GoogleCloudDocumentaiUiv1beta3RevisionReference */
  public $revisionReference;
  protected $gcsManagedDocIdType = GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId::class;
  protected $gcsManagedDocIdDataType = '';
  protected $revisionReferenceType = GoogleCloudDocumentaiUiv1beta3RevisionReference::class;
  protected $revisionReferenceDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId */
  public function setGcsManagedDocId(GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId $gcsManagedDocId)
  {
    $this->gcsManagedDocId = $gcsManagedDocId;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId */
  public function getGcsManagedDocId()
  {
    return $this->gcsManagedDocId;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3RevisionReference */
  public function setRevisionReference(GoogleCloudDocumentaiUiv1beta3RevisionReference $revisionReference)
  {
    $this->revisionReference = $revisionReference;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3RevisionReference */
  public function getRevisionReference()
  {
    return $this->revisionReference;
  }
}

class GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId extends \Google\Model
{
  /** @var string */
  public $cwDocId;
  /** @var string */
  public $gcsUri;

  /** @param string */
  public function setCwDocId($cwDocId)
  {
    $this->cwDocId = $cwDocId;
  }
  /** @return string */
  public function getCwDocId()
  {
    return $this->cwDocId;
  }
  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDocumentaiUiv1beta3EnableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3EnableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionResponse extends \Google\Model
{
  /** @var string */
  public $evaluation;

  /** @param string */
  public function setEvaluation($evaluation)
  {
    $this->evaluation = $evaluation;
  }
  /** @return string */
  public function getEvaluation()
  {
    return $this->evaluation;
  }
}

class GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadata extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus[] */
  public $individualExportStatuses;
  /** @var GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat[] */
  public $splitExportStats;
  protected $collection_key = 'splitExportStats';
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $individualExportStatusesType = GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus::class;
  protected $individualExportStatusesDataType = 'array';
  protected $splitExportStatsType = GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat::class;
  protected $splitExportStatsDataType = 'array';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus[] */
  public function setIndividualExportStatuses($individualExportStatuses)
  {
    $this->individualExportStatuses = $individualExportStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus[] */
  public function getIndividualExportStatuses()
  {
    return $this->individualExportStatuses;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat[] */
  public function setSplitExportStats($splitExportStats)
  {
    $this->splitExportStats = $splitExportStats;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat[] */
  public function getSplitExportStats()
  {
    return $this->splitExportStats;
  }
}

class GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3DocumentId */
  public $documentId;
  /** @var string */
  public $outputGcsDestination;
  /** @var GoogleRpcStatus */
  public $status;
  protected $documentIdType = GoogleCloudDocumentaiUiv1beta3DocumentId::class;
  protected $documentIdDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function setDocumentId(GoogleCloudDocumentaiUiv1beta3DocumentId $documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /** @param string */
  public function setOutputGcsDestination($outputGcsDestination)
  {
    $this->outputGcsDestination = $outputGcsDestination;
  }
  /** @return string */
  public function getOutputGcsDestination()
  {
    return $this->outputGcsDestination;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat extends \Google\Model
{
  /** @var string */
  public $splitType;
  /** @var int */
  public $totalDocumentCount;

  /** @param string */
  public function setSplitType($splitType)
  {
    $this->splitType = $splitType;
  }
  /** @return string */
  public function getSplitType()
  {
    return $this->splitType;
  }
  /** @param int */
  public function setTotalDocumentCount($totalDocumentCount)
  {
    $this->totalDocumentCount = $totalDocumentCount;
  }
  /** @return int */
  public function getTotalDocumentCount()
  {
    return $this->totalDocumentCount;
  }
}

class GoogleCloudDocumentaiUiv1beta3ExportDocumentsResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionResponse extends \Google\Model
{
  /** @var string */
  public $gcsUri;

  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadata extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult[] */
  public $importConfigValidationResults;
  /** @var GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus[] */
  public $individualImportStatuses;
  /** @var int */
  public $totalDocumentCount;
  protected $collection_key = 'individualImportStatuses';
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $importConfigValidationResultsType = GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult::class;
  protected $importConfigValidationResultsDataType = 'array';
  protected $individualImportStatusesType = GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus::class;
  protected $individualImportStatusesDataType = 'array';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult[] */
  public function setImportConfigValidationResults($importConfigValidationResults)
  {
    $this->importConfigValidationResults = $importConfigValidationResults;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult[] */
  public function getImportConfigValidationResults()
  {
    return $this->importConfigValidationResults;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus[] */
  public function setIndividualImportStatuses($individualImportStatuses)
  {
    $this->individualImportStatuses = $individualImportStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus[] */
  public function getIndividualImportStatuses()
  {
    return $this->individualImportStatuses;
  }
  /** @param int */
  public function setTotalDocumentCount($totalDocumentCount)
  {
    $this->totalDocumentCount = $totalDocumentCount;
  }
  /** @return int */
  public function getTotalDocumentCount()
  {
    return $this->totalDocumentCount;
  }
}

class GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult extends \Google\Model
{
  /** @var string */
  public $inputGcsSource;
  /** @var GoogleRpcStatus */
  public $status;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setInputGcsSource($inputGcsSource)
  {
    $this->inputGcsSource = $inputGcsSource;
  }
  /** @return string */
  public function getInputGcsSource()
  {
    return $this->inputGcsSource;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus extends \Google\Model
{
  /** @var string */
  public $inputGcsSource;
  /** @var string */
  public $outputGcsDestination;
  /** @var GoogleRpcStatus */
  public $status;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setInputGcsSource($inputGcsSource)
  {
    $this->inputGcsSource = $inputGcsSource;
  }
  /** @return string */
  public function getInputGcsSource()
  {
    return $this->inputGcsSource;
  }
  /** @param string */
  public function setOutputGcsDestination($outputGcsDestination)
  {
    $this->outputGcsDestination = $outputGcsDestination;
  }
  /** @return string */
  public function getOutputGcsDestination()
  {
    return $this->outputGcsDestination;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3ImportDocumentsResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadata extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus[] */
  public $datasetResyncStatuses;
  /** @var GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus[] */
  public $individualDocumentResyncStatuses;
  protected $collection_key = 'individualDocumentResyncStatuses';
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $datasetResyncStatusesType = GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus::class;
  protected $datasetResyncStatusesDataType = 'array';
  protected $individualDocumentResyncStatusesType = GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus::class;
  protected $individualDocumentResyncStatusesDataType = 'array';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus[] */
  public function setDatasetResyncStatuses($datasetResyncStatuses)
  {
    $this->datasetResyncStatuses = $datasetResyncStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus[] */
  public function getDatasetResyncStatuses()
  {
    return $this->datasetResyncStatuses;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus[] */
  public function setIndividualDocumentResyncStatuses($individualDocumentResyncStatuses)
  {
    $this->individualDocumentResyncStatuses = $individualDocumentResyncStatuses;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus[] */
  public function getIndividualDocumentResyncStatuses()
  {
    return $this->individualDocumentResyncStatuses;
  }
}

class GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus extends \Google\Model
{
  /** @var string */
  public $datasetInconsistencyType;
  /** @var GoogleRpcStatus */
  public $status;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setDatasetInconsistencyType($datasetInconsistencyType)
  {
    $this->datasetInconsistencyType = $datasetInconsistencyType;
  }
  /** @return string */
  public function getDatasetInconsistencyType()
  {
    return $this->datasetInconsistencyType;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3DocumentId */
  public $documentId;
  /** @var string */
  public $documentInconsistencyType;
  /** @var GoogleRpcStatus */
  public $status;
  protected $documentIdType = GoogleCloudDocumentaiUiv1beta3DocumentId::class;
  protected $documentIdDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function setDocumentId(GoogleCloudDocumentaiUiv1beta3DocumentId $documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3DocumentId */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /** @param string */
  public function setDocumentInconsistencyType($documentInconsistencyType)
  {
    $this->documentInconsistencyType = $documentInconsistencyType;
  }
  /** @return string */
  public function getDocumentInconsistencyType()
  {
    return $this->documentInconsistencyType;
  }
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
}

class GoogleCloudDocumentaiUiv1beta3ResyncDatasetResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3RevisionReference extends \Google\Model
{
  /** @var string */
  public $latestProcessorVersion;
  /** @var string */
  public $revisionCase;
  /** @var string */
  public $revisionId;

  /** @param string */
  public function setLatestProcessorVersion($latestProcessorVersion)
  {
    $this->latestProcessorVersion = $latestProcessorVersion;
  }
  /** @return string */
  public function getLatestProcessorVersion()
  {
    return $this->latestProcessorVersion;
  }
  /** @param string */
  public function setRevisionCase($revisionCase)
  {
    $this->revisionCase = $revisionCase;
  }
  /** @return string */
  public function getRevisionCase()
  {
    return $this->revisionCase;
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

class GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public $testDatasetValidation;
  /** @var GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public $trainingDatasetValidation;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $testDatasetValidationType = GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $testDatasetValidationDataType = '';
  protected $trainingDatasetValidationType = GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $trainingDatasetValidationDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function setTestDatasetValidation(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation $testDatasetValidation)
  {
    $this->testDatasetValidation = $testDatasetValidation;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function getTestDatasetValidation()
  {
    return $this->testDatasetValidation;
  }
  /** @param GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function setTrainingDatasetValidation(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation $trainingDatasetValidation)
  {
    $this->trainingDatasetValidation = $trainingDatasetValidation;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function getTrainingDatasetValidation()
  {
    return $this->trainingDatasetValidation;
  }
}

class GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation extends \Google\Collection
{
  /** @var int */
  public $datasetErrorCount;
  /** @var GoogleRpcStatus[] */
  public $datasetErrors;
  /** @var int */
  public $documentErrorCount;
  /** @var GoogleRpcStatus[] */
  public $documentErrors;
  protected $collection_key = 'documentErrors';
  protected $datasetErrorsType = GoogleRpcStatus::class;
  protected $datasetErrorsDataType = 'array';
  protected $documentErrorsType = GoogleRpcStatus::class;
  protected $documentErrorsDataType = 'array';
  /** @param int */
  public function setDatasetErrorCount($datasetErrorCount)
  {
    $this->datasetErrorCount = $datasetErrorCount;
  }
  /** @return int */
  public function getDatasetErrorCount()
  {
    return $this->datasetErrorCount;
  }
  /** @param GoogleRpcStatus[] */
  public function setDatasetErrors($datasetErrors)
  {
    $this->datasetErrors = $datasetErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getDatasetErrors()
  {
    return $this->datasetErrors;
  }
  /** @param int */
  public function setDocumentErrorCount($documentErrorCount)
  {
    $this->documentErrorCount = $documentErrorCount;
  }
  /** @return int */
  public function getDocumentErrorCount()
  {
    return $this->documentErrorCount;
  }
  /** @param GoogleRpcStatus[] */
  public function setDocumentErrors($documentErrors)
  {
    $this->documentErrors = $documentErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getDocumentErrors()
  {
    return $this->documentErrors;
  }
}

class GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionResponse extends \Google\Model
{
  /** @var string */
  public $processorVersion;

  /** @param string */
  public function setProcessorVersion($processorVersion)
  {
    $this->processorVersion = $processorVersion;
  }
  /** @return string */
  public function getProcessorVersion()
  {
    return $this->processorVersion;
  }
}

class GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiUiv1beta3UpdateDatasetOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3UpdateHumanReviewConfigMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiUiv1beta3UpdateLabelerPoolOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1Barcode extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $rawValue;
  /** @var string */
  public $valueFormat;

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
  /** @param string */
  public function setRawValue($rawValue)
  {
    $this->rawValue = $rawValue;
  }
  /** @return string */
  public function getRawValue()
  {
    return $this->rawValue;
  }
  /** @param string */
  public function setValueFormat($valueFormat)
  {
    $this->valueFormat = $valueFormat;
  }
  /** @return string */
  public function getValueFormat()
  {
    return $this->valueFormat;
  }
}

class GoogleCloudDocumentaiV1BatchDocumentsInputConfig extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1GcsDocuments */
  public $gcsDocuments;
  /** @var GoogleCloudDocumentaiV1GcsPrefix */
  public $gcsPrefix;
  protected $gcsDocumentsType = GoogleCloudDocumentaiV1GcsDocuments::class;
  protected $gcsDocumentsDataType = '';
  protected $gcsPrefixType = GoogleCloudDocumentaiV1GcsPrefix::class;
  protected $gcsPrefixDataType = '';
  /** @param GoogleCloudDocumentaiV1GcsDocuments */
  public function setGcsDocuments(GoogleCloudDocumentaiV1GcsDocuments $gcsDocuments)
  {
    $this->gcsDocuments = $gcsDocuments;
  }
  /** @return GoogleCloudDocumentaiV1GcsDocuments */
  public function getGcsDocuments()
  {
    return $this->gcsDocuments;
  }
  /** @param GoogleCloudDocumentaiV1GcsPrefix */
  public function setGcsPrefix(GoogleCloudDocumentaiV1GcsPrefix $gcsPrefix)
  {
    $this->gcsPrefix = $gcsPrefix;
  }
  /** @return GoogleCloudDocumentaiV1GcsPrefix */
  public function getGcsPrefix()
  {
    return $this->gcsPrefix;
  }
}

class GoogleCloudDocumentaiV1BatchProcessMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus[] */
  public $individualProcessStatuses;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'individualProcessStatuses';
  protected $individualProcessStatusesType = GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus::class;
  protected $individualProcessStatusesDataType = 'array';
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
  /** @param GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus[] */
  public function setIndividualProcessStatuses($individualProcessStatuses)
  {
    $this->individualProcessStatuses = $individualProcessStatuses;
  }
  /** @return GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus[] */
  public function getIndividualProcessStatuses()
  {
    return $this->individualProcessStatuses;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1HumanReviewStatus */
  public $humanReviewStatus;
  /** @var string */
  public $inputGcsSource;
  /** @var string */
  public $outputGcsDestination;
  /** @var GoogleRpcStatus */
  public $status;
  protected $humanReviewStatusType = GoogleCloudDocumentaiV1HumanReviewStatus::class;
  protected $humanReviewStatusDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudDocumentaiV1HumanReviewStatus */
  public function setHumanReviewStatus(GoogleCloudDocumentaiV1HumanReviewStatus $humanReviewStatus)
  {
    $this->humanReviewStatus = $humanReviewStatus;
  }
  /** @return GoogleCloudDocumentaiV1HumanReviewStatus */
  public function getHumanReviewStatus()
  {
    return $this->humanReviewStatus;
  }
  /** @param string */
  public function setInputGcsSource($inputGcsSource)
  {
    $this->inputGcsSource = $inputGcsSource;
  }
  /** @return string */
  public function getInputGcsSource()
  {
    return $this->inputGcsSource;
  }
  /** @param string */
  public function setOutputGcsDestination($outputGcsDestination)
  {
    $this->outputGcsDestination = $outputGcsDestination;
  }
  /** @return string */
  public function getOutputGcsDestination()
  {
    return $this->outputGcsDestination;
  }
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
}

class GoogleCloudDocumentaiV1BatchProcessRequest extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1DocumentOutputConfig */
  public $documentOutputConfig;
  /** @var GoogleCloudDocumentaiV1BatchDocumentsInputConfig */
  public $inputDocuments;
  /** @var bool */
  public $skipHumanReview;
  protected $documentOutputConfigType = GoogleCloudDocumentaiV1DocumentOutputConfig::class;
  protected $documentOutputConfigDataType = '';
  protected $inputDocumentsType = GoogleCloudDocumentaiV1BatchDocumentsInputConfig::class;
  protected $inputDocumentsDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentOutputConfig */
  public function setDocumentOutputConfig(GoogleCloudDocumentaiV1DocumentOutputConfig $documentOutputConfig)
  {
    $this->documentOutputConfig = $documentOutputConfig;
  }
  /** @return GoogleCloudDocumentaiV1DocumentOutputConfig */
  public function getDocumentOutputConfig()
  {
    return $this->documentOutputConfig;
  }
  /** @param GoogleCloudDocumentaiV1BatchDocumentsInputConfig */
  public function setInputDocuments(GoogleCloudDocumentaiV1BatchDocumentsInputConfig $inputDocuments)
  {
    $this->inputDocuments = $inputDocuments;
  }
  /** @return GoogleCloudDocumentaiV1BatchDocumentsInputConfig */
  public function getInputDocuments()
  {
    return $this->inputDocuments;
  }
  /** @param bool */
  public function setSkipHumanReview($skipHumanReview)
  {
    $this->skipHumanReview = $skipHumanReview;
  }
  /** @return bool */
  public function getSkipHumanReview()
  {
    return $this->skipHumanReview;
  }
}

class GoogleCloudDocumentaiV1BatchProcessResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudDocumentaiV1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudDocumentaiV1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudDocumentaiV1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudDocumentaiV1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudDocumentaiV1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudDocumentaiV1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudDocumentaiV1CommonOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resource;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1DeleteProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1DeleteProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1DeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1DeployProcessorVersionRequest extends \Google\Model
{
}

class GoogleCloudDocumentaiV1DeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1DisableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1DisableProcessorRequest extends \Google\Model
{
}

class GoogleCloudDocumentaiV1DisableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1Document extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1DocumentEntity[] */
  public $entities;
  /** @var GoogleCloudDocumentaiV1DocumentEntityRelation[] */
  public $entityRelations;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var string */
  public $mimeType;
  /** @var GoogleCloudDocumentaiV1DocumentPage[] */
  public $pages;
  /** @var GoogleCloudDocumentaiV1DocumentRevision[] */
  public $revisions;
  /** @var GoogleCloudDocumentaiV1DocumentShardInfo */
  public $shardInfo;
  /** @var string */
  public $text;
  /** @var GoogleCloudDocumentaiV1DocumentTextChange[] */
  public $textChanges;
  /** @var GoogleCloudDocumentaiV1DocumentStyle[] */
  public $textStyles;
  /** @var string */
  public $uri;
  protected $collection_key = 'textStyles';
  protected $entitiesType = GoogleCloudDocumentaiV1DocumentEntity::class;
  protected $entitiesDataType = 'array';
  protected $entityRelationsType = GoogleCloudDocumentaiV1DocumentEntityRelation::class;
  protected $entityRelationsDataType = 'array';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $pagesType = GoogleCloudDocumentaiV1DocumentPage::class;
  protected $pagesDataType = 'array';
  protected $revisionsType = GoogleCloudDocumentaiV1DocumentRevision::class;
  protected $revisionsDataType = 'array';
  protected $shardInfoType = GoogleCloudDocumentaiV1DocumentShardInfo::class;
  protected $shardInfoDataType = '';
  protected $textChangesType = GoogleCloudDocumentaiV1DocumentTextChange::class;
  protected $textChangesDataType = 'array';
  protected $textStylesType = GoogleCloudDocumentaiV1DocumentStyle::class;
  protected $textStylesDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1DocumentEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDocumentaiV1DocumentEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param GoogleCloudDocumentaiV1DocumentEntityRelation[] */
  public function setEntityRelations($entityRelations)
  {
    $this->entityRelations = $entityRelations;
  }
  /** @return GoogleCloudDocumentaiV1DocumentEntityRelation[] */
  public function getEntityRelations()
  {
    return $this->entityRelations;
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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPage[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPage[] */
  public function getPages()
  {
    return $this->pages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentRevision[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return GoogleCloudDocumentaiV1DocumentRevision[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
  /** @param GoogleCloudDocumentaiV1DocumentShardInfo */
  public function setShardInfo(GoogleCloudDocumentaiV1DocumentShardInfo $shardInfo)
  {
    $this->shardInfo = $shardInfo;
  }
  /** @return GoogleCloudDocumentaiV1DocumentShardInfo */
  public function getShardInfo()
  {
    return $this->shardInfo;
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
  /** @param GoogleCloudDocumentaiV1DocumentTextChange[] */
  public function setTextChanges($textChanges)
  {
    $this->textChanges = $textChanges;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextChange[] */
  public function getTextChanges()
  {
    return $this->textChanges;
  }
  /** @param GoogleCloudDocumentaiV1DocumentStyle[] */
  public function setTextStyles($textStyles)
  {
    $this->textStyles = $textStyles;
  }
  /** @return GoogleCloudDocumentaiV1DocumentStyle[] */
  public function getTextStyles()
  {
    return $this->textStyles;
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

class GoogleCloudDocumentaiV1DocumentEntity extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $id;
  /** @var string */
  public $mentionId;
  /** @var string */
  public $mentionText;
  /** @var GoogleCloudDocumentaiV1DocumentEntityNormalizedValue */
  public $normalizedValue;
  /** @var GoogleCloudDocumentaiV1DocumentPageAnchor */
  public $pageAnchor;
  /** @var GoogleCloudDocumentaiV1DocumentEntity[] */
  public $properties;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  /** @var bool */
  public $redacted;
  /** @var GoogleCloudDocumentaiV1DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $type;
  protected $collection_key = 'properties';
  protected $normalizedValueType = GoogleCloudDocumentaiV1DocumentEntityNormalizedValue::class;
  protected $normalizedValueDataType = '';
  protected $pageAnchorType = GoogleCloudDocumentaiV1DocumentPageAnchor::class;
  protected $pageAnchorDataType = '';
  protected $propertiesType = GoogleCloudDocumentaiV1DocumentEntity::class;
  protected $propertiesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setMentionId($mentionId)
  {
    $this->mentionId = $mentionId;
  }
  /** @return string */
  public function getMentionId()
  {
    return $this->mentionId;
  }
  /** @param string */
  public function setMentionText($mentionText)
  {
    $this->mentionText = $mentionText;
  }
  /** @return string */
  public function getMentionText()
  {
    return $this->mentionText;
  }
  /** @param GoogleCloudDocumentaiV1DocumentEntityNormalizedValue */
  public function setNormalizedValue(GoogleCloudDocumentaiV1DocumentEntityNormalizedValue $normalizedValue)
  {
    $this->normalizedValue = $normalizedValue;
  }
  /** @return GoogleCloudDocumentaiV1DocumentEntityNormalizedValue */
  public function getNormalizedValue()
  {
    return $this->normalizedValue;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageAnchor */
  public function setPageAnchor(GoogleCloudDocumentaiV1DocumentPageAnchor $pageAnchor)
  {
    $this->pageAnchor = $pageAnchor;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageAnchor */
  public function getPageAnchor()
  {
    return $this->pageAnchor;
  }
  /** @param GoogleCloudDocumentaiV1DocumentEntity[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudDocumentaiV1DocumentEntity[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param bool */
  public function setRedacted($redacted)
  {
    $this->redacted = $redacted;
  }
  /** @return bool */
  public function getRedacted()
  {
    return $this->redacted;
  }
  /** @param GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
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

class GoogleCloudDocumentaiV1DocumentEntityNormalizedValue extends \Google\Model
{
  /** @var GoogleTypePostalAddress */
  public $addressValue;
  /** @var bool */
  public $booleanValue;
  /** @var GoogleTypeDate */
  public $dateValue;
  /** @var GoogleTypeDateTime */
  public $datetimeValue;
  /** @var float */
  public $floatValue;
  /** @var int */
  public $integerValue;
  /** @var GoogleTypeMoney */
  public $moneyValue;
  /** @var string */
  public $text;
  protected $addressValueType = GoogleTypePostalAddress::class;
  protected $addressValueDataType = '';
  protected $dateValueType = GoogleTypeDate::class;
  protected $dateValueDataType = '';
  protected $datetimeValueType = GoogleTypeDateTime::class;
  protected $datetimeValueDataType = '';
  protected $moneyValueType = GoogleTypeMoney::class;
  protected $moneyValueDataType = '';
  /** @param GoogleTypePostalAddress */
  public function setAddressValue(GoogleTypePostalAddress $addressValue)
  {
    $this->addressValue = $addressValue;
  }
  /** @return GoogleTypePostalAddress */
  public function getAddressValue()
  {
    return $this->addressValue;
  }
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
  /** @param GoogleTypeDateTime */
  public function setDatetimeValue(GoogleTypeDateTime $datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  /** @return GoogleTypeDateTime */
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
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
  /** @param int */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return int */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param GoogleTypeMoney */
  public function setMoneyValue(GoogleTypeMoney $moneyValue)
  {
    $this->moneyValue = $moneyValue;
  }
  /** @return GoogleTypeMoney */
  public function getMoneyValue()
  {
    return $this->moneyValue;
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

class GoogleCloudDocumentaiV1DocumentEntityRelation extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var string */
  public $relation;
  /** @var string */
  public $subjectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setRelation($relation)
  {
    $this->relation = $relation;
  }
  /** @return string */
  public function getRelation()
  {
    return $this->relation;
  }
  /** @param string */
  public function setSubjectId($subjectId)
  {
    $this->subjectId = $subjectId;
  }
  /** @return string */
  public function getSubjectId()
  {
    return $this->subjectId;
  }
}

class GoogleCloudDocumentaiV1DocumentOutputConfig extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig */
  public $gcsOutputConfig;
  protected $gcsOutputConfigType = GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig::class;
  protected $gcsOutputConfigDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig */
  public function setGcsOutputConfig(GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig $gcsOutputConfig)
  {
    $this->gcsOutputConfig = $gcsOutputConfig;
  }
  /** @return GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig */
  public function getGcsOutputConfig()
  {
    return $this->gcsOutputConfig;
  }
}

class GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig extends \Google\Model
{
  /** @var string */
  public $fieldMask;
  /** @var string */
  public $gcsUri;

  /** @param string */
  public function setFieldMask($fieldMask)
  {
    $this->fieldMask = $fieldMask;
  }
  /** @return string */
  public function getFieldMask()
  {
    return $this->fieldMask;
  }
  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDocumentaiV1DocumentPage extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageBlock[] */
  public $blocks;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedBarcode[] */
  public $detectedBarcodes;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageDimension */
  public $dimension;
  /** @var GoogleCloudDocumentaiV1DocumentPageFormField[] */
  public $formFields;
  /** @var GoogleCloudDocumentaiV1DocumentPageImage */
  public $image;
  /** @var GoogleCloudDocumentaiV1DocumentPageImageQualityScores */
  public $imageQualityScores;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentPageLine[] */
  public $lines;
  /** @var int */
  public $pageNumber;
  /** @var GoogleCloudDocumentaiV1DocumentPageParagraph[] */
  public $paragraphs;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1DocumentPageSymbol[] */
  public $symbols;
  /** @var GoogleCloudDocumentaiV1DocumentPageTable[] */
  public $tables;
  /** @var GoogleCloudDocumentaiV1DocumentPageToken[] */
  public $tokens;
  /** @var GoogleCloudDocumentaiV1DocumentPageMatrix[] */
  public $transforms;
  /** @var GoogleCloudDocumentaiV1DocumentPageVisualElement[] */
  public $visualElements;
  protected $collection_key = 'visualElements';
  protected $blocksType = GoogleCloudDocumentaiV1DocumentPageBlock::class;
  protected $blocksDataType = 'array';
  protected $detectedBarcodesType = GoogleCloudDocumentaiV1DocumentPageDetectedBarcode::class;
  protected $detectedBarcodesDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $dimensionType = GoogleCloudDocumentaiV1DocumentPageDimension::class;
  protected $dimensionDataType = '';
  protected $formFieldsType = GoogleCloudDocumentaiV1DocumentPageFormField::class;
  protected $formFieldsDataType = 'array';
  protected $imageType = GoogleCloudDocumentaiV1DocumentPageImage::class;
  protected $imageDataType = '';
  protected $imageQualityScoresType = GoogleCloudDocumentaiV1DocumentPageImageQualityScores::class;
  protected $imageQualityScoresDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $linesType = GoogleCloudDocumentaiV1DocumentPageLine::class;
  protected $linesDataType = 'array';
  protected $paragraphsType = GoogleCloudDocumentaiV1DocumentPageParagraph::class;
  protected $paragraphsDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $symbolsType = GoogleCloudDocumentaiV1DocumentPageSymbol::class;
  protected $symbolsDataType = 'array';
  protected $tablesType = GoogleCloudDocumentaiV1DocumentPageTable::class;
  protected $tablesDataType = 'array';
  protected $tokensType = GoogleCloudDocumentaiV1DocumentPageToken::class;
  protected $tokensDataType = 'array';
  protected $transformsType = GoogleCloudDocumentaiV1DocumentPageMatrix::class;
  protected $transformsDataType = 'array';
  protected $visualElementsType = GoogleCloudDocumentaiV1DocumentPageVisualElement::class;
  protected $visualElementsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1DocumentPageBlock[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageBlock[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedBarcode[] */
  public function setDetectedBarcodes($detectedBarcodes)
  {
    $this->detectedBarcodes = $detectedBarcodes;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedBarcode[] */
  public function getDetectedBarcodes()
  {
    return $this->detectedBarcodes;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDimension */
  public function setDimension(GoogleCloudDocumentaiV1DocumentPageDimension $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDimension */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageFormField[] */
  public function setFormFields($formFields)
  {
    $this->formFields = $formFields;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageFormField[] */
  public function getFormFields()
  {
    return $this->formFields;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageImage */
  public function setImage(GoogleCloudDocumentaiV1DocumentPageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageImageQualityScores */
  public function setImageQualityScores(GoogleCloudDocumentaiV1DocumentPageImageQualityScores $imageQualityScores)
  {
    $this->imageQualityScores = $imageQualityScores;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageImageQualityScores */
  public function getImageQualityScores()
  {
    return $this->imageQualityScores;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLine[] */
  public function setLines($lines)
  {
    $this->lines = $lines;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLine[] */
  public function getLines()
  {
    return $this->lines;
  }
  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageParagraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageParagraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageSymbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageSymbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageTable[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageTable[] */
  public function getTables()
  {
    return $this->tables;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageToken[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageToken[] */
  public function getTokens()
  {
    return $this->tokens;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageMatrix[] */
  public function setTransforms($transforms)
  {
    $this->transforms = $transforms;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageMatrix[] */
  public function getTransforms()
  {
    return $this->transforms;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageVisualElement[] */
  public function setVisualElements($visualElements)
  {
    $this->visualElements = $visualElements;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageVisualElement[] */
  public function getVisualElements()
  {
    return $this->visualElements;
  }
}

class GoogleCloudDocumentaiV1DocumentPageAnchor extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageAnchorPageRef[] */
  public $pageRefs;
  protected $collection_key = 'pageRefs';
  protected $pageRefsType = GoogleCloudDocumentaiV1DocumentPageAnchorPageRef::class;
  protected $pageRefsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1DocumentPageAnchorPageRef[] */
  public function setPageRefs($pageRefs)
  {
    $this->pageRefs = $pageRefs;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageAnchorPageRef[] */
  public function getPageRefs()
  {
    return $this->pageRefs;
  }
}

class GoogleCloudDocumentaiV1DocumentPageAnchorPageRef extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $layoutId;
  /** @var string */
  public $layoutType;
  /** @var string */
  public $page;
  protected $boundingPolyType = GoogleCloudDocumentaiV1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudDocumentaiV1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLayoutId($layoutId)
  {
    $this->layoutId = $layoutId;
  }
  /** @return string */
  public function getLayoutId()
  {
    return $this->layoutId;
  }
  /** @param string */
  public function setLayoutType($layoutType)
  {
    $this->layoutType = $layoutType;
  }
  /** @return string */
  public function getLayoutType()
  {
    return $this->layoutType;
  }
  /** @param string */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return string */
  public function getPage()
  {
    return $this->page;
  }
}

class GoogleCloudDocumentaiV1DocumentPageBlock extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1DocumentPageDetectedBarcode extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1Barcode */
  public $barcode;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  protected $barcodeType = GoogleCloudDocumentaiV1Barcode::class;
  protected $barcodeDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1Barcode */
  public function setBarcode(GoogleCloudDocumentaiV1Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  /** @return GoogleCloudDocumentaiV1Barcode */
  public function getBarcode()
  {
    return $this->barcode;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1DocumentPageDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudDocumentaiV1DocumentPageDimension extends \Google\Model
{
  /** @var float */
  public $height;
  /** @var string */
  public $unit;
  /** @var float */
  public $width;

  /** @param float */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return float */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param float */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return float */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudDocumentaiV1DocumentPageFormField extends \Google\Collection
{
  /** @var string */
  public $correctedKeyText;
  /** @var string */
  public $correctedValueText;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $fieldName;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $fieldValue;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $nameDetectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $valueDetectedLanguages;
  /** @var string */
  public $valueType;
  protected $collection_key = 'valueDetectedLanguages';
  protected $fieldNameType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $fieldNameDataType = '';
  protected $fieldValueType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $fieldValueDataType = '';
  protected $nameDetectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $nameDetectedLanguagesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $valueDetectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $valueDetectedLanguagesDataType = 'array';
  /** @param string */
  public function setCorrectedKeyText($correctedKeyText)
  {
    $this->correctedKeyText = $correctedKeyText;
  }
  /** @return string */
  public function getCorrectedKeyText()
  {
    return $this->correctedKeyText;
  }
  /** @param string */
  public function setCorrectedValueText($correctedValueText)
  {
    $this->correctedValueText = $correctedValueText;
  }
  /** @return string */
  public function getCorrectedValueText()
  {
    return $this->correctedValueText;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setFieldName(GoogleCloudDocumentaiV1DocumentPageLayout $fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setFieldValue(GoogleCloudDocumentaiV1DocumentPageLayout $fieldValue)
  {
    $this->fieldValue = $fieldValue;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getFieldValue()
  {
    return $this->fieldValue;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setNameDetectedLanguages($nameDetectedLanguages)
  {
    $this->nameDetectedLanguages = $nameDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getNameDetectedLanguages()
  {
    return $this->nameDetectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setValueDetectedLanguages($valueDetectedLanguages)
  {
    $this->valueDetectedLanguages = $valueDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getValueDetectedLanguages()
  {
    return $this->valueDetectedLanguages;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class GoogleCloudDocumentaiV1DocumentPageImage extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var int */
  public $height;
  /** @var string */
  public $mimeType;
  /** @var int */
  public $width;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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

class GoogleCloudDocumentaiV1DocumentPageImageQualityScores extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect[] */
  public $detectedDefects;
  /** @var float */
  public $qualityScore;
  protected $collection_key = 'detectedDefects';
  protected $detectedDefectsType = GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect::class;
  protected $detectedDefectsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect[] */
  public function setDetectedDefects($detectedDefects)
  {
    $this->detectedDefects = $detectedDefects;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect[] */
  public function getDetectedDefects()
  {
    return $this->detectedDefects;
  }
  /** @param float */
  public function setQualityScore($qualityScore)
  {
    $this->qualityScore = $qualityScore;
  }
  /** @return float */
  public function getQualityScore()
  {
    return $this->qualityScore;
  }
}

class GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $type;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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

class GoogleCloudDocumentaiV1DocumentPageLayout extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $orientation;
  /** @var GoogleCloudDocumentaiV1DocumentTextAnchor */
  public $textAnchor;
  protected $boundingPolyType = GoogleCloudDocumentaiV1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleCloudDocumentaiV1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1DocumentPageLine extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1DocumentPageMatrix extends \Google\Model
{
  /** @var int */
  public $cols;
  /** @var string */
  public $data;
  /** @var int */
  public $rows;
  /** @var int */
  public $type;

  /** @param int */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }
  /** @return int */
  public function getCols()
  {
    return $this->cols;
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
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return int */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param int */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return int */
  public function getType()
  {
    return $this->type;
  }
}

class GoogleCloudDocumentaiV1DocumentPageParagraph extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1DocumentPageSymbol extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1DocumentPageTable extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public $bodyRows;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public $headerRows;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'headerRows';
  protected $bodyRowsType = GoogleCloudDocumentaiV1DocumentPageTableTableRow::class;
  protected $bodyRowsDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $headerRowsType = GoogleCloudDocumentaiV1DocumentPageTableTableRow::class;
  protected $headerRowsDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public function setBodyRows($bodyRows)
  {
    $this->bodyRows = $bodyRows;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public function getBodyRows()
  {
    return $this->bodyRows;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageTableTableRow[] */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1DocumentPageTableTableCell extends \Google\Collection
{
  /** @var int */
  public $colSpan;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var int */
  public $rowSpan;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param int */
  public function setColSpan($colSpan)
  {
    $this->colSpan = $colSpan;
  }
  /** @return int */
  public function getColSpan()
  {
    return $this->colSpan;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param int */
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  /** @return int */
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
}

class GoogleCloudDocumentaiV1DocumentPageTableTableRow extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageTableTableCell[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = GoogleCloudDocumentaiV1DocumentPageTableTableCell::class;
  protected $cellsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1DocumentPageTableTableCell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageTableTableCell[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class GoogleCloudDocumentaiV1DocumentPageToken extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak */
  public function setDetectedBreak(GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak extends \Google\Model
{
  /** @var string */
  public $type;

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

class GoogleCloudDocumentaiV1DocumentPageVisualElement extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1DocumentPageLayout */
  public $layout;
  /** @var string */
  public $type;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
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

class GoogleCloudDocumentaiV1DocumentProvenance extends \Google\Collection
{
  /** @var int */
  public $id;
  /** @var GoogleCloudDocumentaiV1DocumentProvenanceParent[] */
  public $parents;
  /** @var int */
  public $revision;
  /** @var string */
  public $type;
  protected $collection_key = 'parents';
  protected $parentsType = GoogleCloudDocumentaiV1DocumentProvenanceParent::class;
  protected $parentsDataType = 'array';
  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenanceParent[] */
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenanceParent[] */
  public function getParents()
  {
    return $this->parents;
  }
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

class GoogleCloudDocumentaiV1DocumentProvenanceParent extends \Google\Model
{
  /** @var int */
  public $id;
  /** @var int */
  public $index;
  /** @var int */
  public $revision;

  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
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
}

class GoogleCloudDocumentaiV1DocumentRevision extends \Google\Collection
{
  /** @var string */
  public $agent;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1DocumentRevisionHumanReview */
  public $humanReview;
  /** @var string */
  public $id;
  /** @var int[] */
  public $parent;
  /** @var string[] */
  public $parentIds;
  /** @var string */
  public $processor;
  protected $collection_key = 'parentIds';
  protected $humanReviewType = GoogleCloudDocumentaiV1DocumentRevisionHumanReview::class;
  protected $humanReviewDataType = '';
  /** @param string */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /** @return string */
  public function getAgent()
  {
    return $this->agent;
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
  /** @param GoogleCloudDocumentaiV1DocumentRevisionHumanReview */
  public function setHumanReview(GoogleCloudDocumentaiV1DocumentRevisionHumanReview $humanReview)
  {
    $this->humanReview = $humanReview;
  }
  /** @return GoogleCloudDocumentaiV1DocumentRevisionHumanReview */
  public function getHumanReview()
  {
    return $this->humanReview;
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
  /** @param int[] */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return int[] */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string[] */
  public function setParentIds($parentIds)
  {
    $this->parentIds = $parentIds;
  }
  /** @return string[] */
  public function getParentIds()
  {
    return $this->parentIds;
  }
  /** @param string */
  public function setProcessor($processor)
  {
    $this->processor = $processor;
  }
  /** @return string */
  public function getProcessor()
  {
    return $this->processor;
  }
}

class GoogleCloudDocumentaiV1DocumentRevisionHumanReview extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;

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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

class GoogleCloudDocumentaiV1DocumentSchema extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDocumentaiV1DocumentSchemaEntityType[] */
  public $entityTypes;
  /** @var GoogleCloudDocumentaiV1DocumentSchemaMetadata */
  public $metadata;
  protected $collection_key = 'entityTypes';
  protected $entityTypesType = GoogleCloudDocumentaiV1DocumentSchemaEntityType::class;
  protected $entityTypesDataType = 'array';
  protected $metadataType = GoogleCloudDocumentaiV1DocumentSchemaMetadata::class;
  protected $metadataDataType = '';
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
  /** @param GoogleCloudDocumentaiV1DocumentSchemaEntityType[] */
  public function setEntityTypes($entityTypes)
  {
    $this->entityTypes = $entityTypes;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchemaEntityType[] */
  public function getEntityTypes()
  {
    return $this->entityTypes;
  }
  /** @param GoogleCloudDocumentaiV1DocumentSchemaMetadata */
  public function setMetadata(GoogleCloudDocumentaiV1DocumentSchemaMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchemaMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class GoogleCloudDocumentaiV1DocumentSchemaEntityType extends \Google\Collection
{
  /** @var string[] */
  public $baseTypes;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues */
  public $enumValues;
  /** @var string */
  public $name;
  /** @var GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty[] */
  public $properties;
  protected $collection_key = 'properties';
  protected $enumValuesType = GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues::class;
  protected $enumValuesDataType = '';
  protected $propertiesType = GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty::class;
  protected $propertiesDataType = 'array';
  /** @param string[] */
  public function setBaseTypes($baseTypes)
  {
    $this->baseTypes = $baseTypes;
  }
  /** @return string[] */
  public function getBaseTypes()
  {
    return $this->baseTypes;
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
  /** @param GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues */
  public function setEnumValues(GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues $enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues */
  public function getEnumValues()
  {
    return $this->enumValues;
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
  /** @param GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues extends \Google\Collection
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

class GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $occurrenceType;
  /** @var string */
  public $valueType;

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
  public function setOccurrenceType($occurrenceType)
  {
    $this->occurrenceType = $occurrenceType;
  }
  /** @return string */
  public function getOccurrenceType()
  {
    return $this->occurrenceType;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class GoogleCloudDocumentaiV1DocumentSchemaMetadata extends \Google\Model
{
  /** @var bool */
  public $documentAllowMultipleLabels;
  /** @var bool */
  public $documentSplitter;
  /** @var bool */
  public $prefixedNamingOnProperties;
  /** @var bool */
  public $skipNamingValidation;

  /** @param bool */
  public function setDocumentAllowMultipleLabels($documentAllowMultipleLabels)
  {
    $this->documentAllowMultipleLabels = $documentAllowMultipleLabels;
  }
  /** @return bool */
  public function getDocumentAllowMultipleLabels()
  {
    return $this->documentAllowMultipleLabels;
  }
  /** @param bool */
  public function setDocumentSplitter($documentSplitter)
  {
    $this->documentSplitter = $documentSplitter;
  }
  /** @return bool */
  public function getDocumentSplitter()
  {
    return $this->documentSplitter;
  }
  /** @param bool */
  public function setPrefixedNamingOnProperties($prefixedNamingOnProperties)
  {
    $this->prefixedNamingOnProperties = $prefixedNamingOnProperties;
  }
  /** @return bool */
  public function getPrefixedNamingOnProperties()
  {
    return $this->prefixedNamingOnProperties;
  }
  /** @param bool */
  public function setSkipNamingValidation($skipNamingValidation)
  {
    $this->skipNamingValidation = $skipNamingValidation;
  }
  /** @return bool */
  public function getSkipNamingValidation()
  {
    return $this->skipNamingValidation;
  }
}

class GoogleCloudDocumentaiV1DocumentShardInfo extends \Google\Model
{
  /** @var string */
  public $shardCount;
  /** @var string */
  public $shardIndex;
  /** @var string */
  public $textOffset;

  /** @param string */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /** @return string */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  /** @param string */
  public function setShardIndex($shardIndex)
  {
    $this->shardIndex = $shardIndex;
  }
  /** @return string */
  public function getShardIndex()
  {
    return $this->shardIndex;
  }
  /** @param string */
  public function setTextOffset($textOffset)
  {
    $this->textOffset = $textOffset;
  }
  /** @return string */
  public function getTextOffset()
  {
    return $this->textOffset;
  }
}

class GoogleCloudDocumentaiV1DocumentStyle extends \Google\Model
{
  /** @var GoogleTypeColor */
  public $backgroundColor;
  /** @var GoogleTypeColor */
  public $color;
  /** @var string */
  public $fontFamily;
  /** @var GoogleCloudDocumentaiV1DocumentStyleFontSize */
  public $fontSize;
  /** @var string */
  public $fontWeight;
  /** @var GoogleCloudDocumentaiV1DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $textDecoration;
  /** @var string */
  public $textStyle;
  protected $backgroundColorType = GoogleTypeColor::class;
  protected $backgroundColorDataType = '';
  protected $colorType = GoogleTypeColor::class;
  protected $colorDataType = '';
  protected $fontSizeType = GoogleCloudDocumentaiV1DocumentStyleFontSize::class;
  protected $fontSizeDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleTypeColor */
  public function setBackgroundColor(GoogleTypeColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return GoogleTypeColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param GoogleTypeColor */
  public function setColor(GoogleTypeColor $color)
  {
    $this->color = $color;
  }
  /** @return GoogleTypeColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /** @return string */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /** @param GoogleCloudDocumentaiV1DocumentStyleFontSize */
  public function setFontSize(GoogleCloudDocumentaiV1DocumentStyleFontSize $fontSize)
  {
    $this->fontSize = $fontSize;
  }
  /** @return GoogleCloudDocumentaiV1DocumentStyleFontSize */
  public function getFontSize()
  {
    return $this->fontSize;
  }
  /** @param string */
  public function setFontWeight($fontWeight)
  {
    $this->fontWeight = $fontWeight;
  }
  /** @return string */
  public function getFontWeight()
  {
    return $this->fontWeight;
  }
  /** @param GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
  /** @param string */
  public function setTextDecoration($textDecoration)
  {
    $this->textDecoration = $textDecoration;
  }
  /** @return string */
  public function getTextDecoration()
  {
    return $this->textDecoration;
  }
  /** @param string */
  public function setTextStyle($textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return string */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class GoogleCloudDocumentaiV1DocumentStyleFontSize extends \Google\Model
{
  /** @var float */
  public $size;
  /** @var string */
  public $unit;

  /** @param float */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return float */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class GoogleCloudDocumentaiV1DocumentTextAnchor extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment[] */
  public $textSegments;
  protected $collection_key = 'textSegments';
  protected $textSegmentsType = GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment::class;
  protected $textSegmentsDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment[] */
  public function setTextSegments($textSegments)
  {
    $this->textSegments = $textSegments;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment[] */
  public function getTextSegments()
  {
    return $this->textSegments;
  }
}

class GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment extends \Google\Model
{
  /** @var string */
  public $endIndex;
  /** @var string */
  public $startIndex;

  /** @param string */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return string */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param string */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return string */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class GoogleCloudDocumentaiV1DocumentTextChange extends \Google\Collection
{
  /** @var string */
  public $changedText;
  /** @var GoogleCloudDocumentaiV1DocumentProvenance[] */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1DocumentTextAnchor */
  public $textAnchor;
  protected $collection_key = 'provenance';
  protected $provenanceType = GoogleCloudDocumentaiV1DocumentProvenance::class;
  protected $provenanceDataType = 'array';
  protected $textAnchorType = GoogleCloudDocumentaiV1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param string */
  public function setChangedText($changedText)
  {
    $this->changedText = $changedText;
  }
  /** @return string */
  public function getChangedText()
  {
    return $this->changedText;
  }
  /** @param GoogleCloudDocumentaiV1DocumentProvenance[] */
  public function setProvenance($provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1DocumentProvenance[] */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1EnableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1EnableProcessorRequest extends \Google\Model
{
}

class GoogleCloudDocumentaiV1EnableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1FetchProcessorTypesResponse extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1ProcessorType[] */
  public $processorTypes;
  protected $collection_key = 'processorTypes';
  protected $processorTypesType = GoogleCloudDocumentaiV1ProcessorType::class;
  protected $processorTypesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1ProcessorType[] */
  public function setProcessorTypes($processorTypes)
  {
    $this->processorTypes = $processorTypes;
  }
  /** @return GoogleCloudDocumentaiV1ProcessorType[] */
  public function getProcessorTypes()
  {
    return $this->processorTypes;
  }
}

class GoogleCloudDocumentaiV1GcsDocument extends \Google\Model
{
  /** @var string */
  public $gcsUri;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class GoogleCloudDocumentaiV1GcsDocuments extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1GcsDocument[] */
  public $documents;
  protected $collection_key = 'documents';
  protected $documentsType = GoogleCloudDocumentaiV1GcsDocument::class;
  protected $documentsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1GcsDocument[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return GoogleCloudDocumentaiV1GcsDocument[] */
  public function getDocuments()
  {
    return $this->documents;
  }
}

class GoogleCloudDocumentaiV1GcsPrefix extends \Google\Model
{
  /** @var string */
  public $gcsUriPrefix;

  /** @param string */
  public function setGcsUriPrefix($gcsUriPrefix)
  {
    $this->gcsUriPrefix = $gcsUriPrefix;
  }
  /** @return string */
  public function getGcsUriPrefix()
  {
    return $this->gcsUriPrefix;
  }
}

class GoogleCloudDocumentaiV1HumanReviewStatus extends \Google\Model
{
  /** @var string */
  public $humanReviewOperation;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;

  /** @param string */
  public function setHumanReviewOperation($humanReviewOperation)
  {
    $this->humanReviewOperation = $humanReviewOperation;
  }
  /** @return string */
  public function getHumanReviewOperation()
  {
    return $this->humanReviewOperation;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

class GoogleCloudDocumentaiV1ListProcessorTypesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDocumentaiV1ProcessorType[] */
  public $processorTypes;
  protected $collection_key = 'processorTypes';
  protected $processorTypesType = GoogleCloudDocumentaiV1ProcessorType::class;
  protected $processorTypesDataType = 'array';
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
  /** @param GoogleCloudDocumentaiV1ProcessorType[] */
  public function setProcessorTypes($processorTypes)
  {
    $this->processorTypes = $processorTypes;
  }
  /** @return GoogleCloudDocumentaiV1ProcessorType[] */
  public function getProcessorTypes()
  {
    return $this->processorTypes;
  }
}

class GoogleCloudDocumentaiV1ListProcessorVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDocumentaiV1ProcessorVersion[] */
  public $processorVersions;
  protected $collection_key = 'processorVersions';
  protected $processorVersionsType = GoogleCloudDocumentaiV1ProcessorVersion::class;
  protected $processorVersionsDataType = 'array';
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
  /** @param GoogleCloudDocumentaiV1ProcessorVersion[] */
  public function setProcessorVersions($processorVersions)
  {
    $this->processorVersions = $processorVersions;
  }
  /** @return GoogleCloudDocumentaiV1ProcessorVersion[] */
  public function getProcessorVersions()
  {
    return $this->processorVersions;
  }
}

class GoogleCloudDocumentaiV1ListProcessorsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDocumentaiV1Processor[] */
  public $processors;
  protected $collection_key = 'processors';
  protected $processorsType = GoogleCloudDocumentaiV1Processor::class;
  protected $processorsDataType = 'array';
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
  /** @param GoogleCloudDocumentaiV1Processor[] */
  public function setProcessors($processors)
  {
    $this->processors = $processors;
  }
  /** @return GoogleCloudDocumentaiV1Processor[] */
  public function getProcessors()
  {
    return $this->processors;
  }
}

class GoogleCloudDocumentaiV1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1ProcessRequest extends \Google\Model
{
  /** @var string */
  public $fieldMask;
  /** @var GoogleCloudDocumentaiV1Document */
  public $inlineDocument;
  /** @var GoogleCloudDocumentaiV1RawDocument */
  public $rawDocument;
  /** @var bool */
  public $skipHumanReview;
  protected $inlineDocumentType = GoogleCloudDocumentaiV1Document::class;
  protected $inlineDocumentDataType = '';
  protected $rawDocumentType = GoogleCloudDocumentaiV1RawDocument::class;
  protected $rawDocumentDataType = '';
  /** @param string */
  public function setFieldMask($fieldMask)
  {
    $this->fieldMask = $fieldMask;
  }
  /** @return string */
  public function getFieldMask()
  {
    return $this->fieldMask;
  }
  /** @param GoogleCloudDocumentaiV1Document */
  public function setInlineDocument(GoogleCloudDocumentaiV1Document $inlineDocument)
  {
    $this->inlineDocument = $inlineDocument;
  }
  /** @return GoogleCloudDocumentaiV1Document */
  public function getInlineDocument()
  {
    return $this->inlineDocument;
  }
  /** @param GoogleCloudDocumentaiV1RawDocument */
  public function setRawDocument(GoogleCloudDocumentaiV1RawDocument $rawDocument)
  {
    $this->rawDocument = $rawDocument;
  }
  /** @return GoogleCloudDocumentaiV1RawDocument */
  public function getRawDocument()
  {
    return $this->rawDocument;
  }
  /** @param bool */
  public function setSkipHumanReview($skipHumanReview)
  {
    $this->skipHumanReview = $skipHumanReview;
  }
  /** @return bool */
  public function getSkipHumanReview()
  {
    return $this->skipHumanReview;
  }
}

class GoogleCloudDocumentaiV1ProcessResponse extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1Document */
  public $document;
  /** @var GoogleCloudDocumentaiV1HumanReviewStatus */
  public $humanReviewStatus;
  protected $documentType = GoogleCloudDocumentaiV1Document::class;
  protected $documentDataType = '';
  protected $humanReviewStatusType = GoogleCloudDocumentaiV1HumanReviewStatus::class;
  protected $humanReviewStatusDataType = '';
  /** @param GoogleCloudDocumentaiV1Document */
  public function setDocument(GoogleCloudDocumentaiV1Document $document)
  {
    $this->document = $document;
  }
  /** @return GoogleCloudDocumentaiV1Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param GoogleCloudDocumentaiV1HumanReviewStatus */
  public function setHumanReviewStatus(GoogleCloudDocumentaiV1HumanReviewStatus $humanReviewStatus)
  {
    $this->humanReviewStatus = $humanReviewStatus;
  }
  /** @return GoogleCloudDocumentaiV1HumanReviewStatus */
  public function getHumanReviewStatus()
  {
    return $this->humanReviewStatus;
  }
}

class GoogleCloudDocumentaiV1Processor extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $defaultProcessorVersion;
  /** @var string */
  public $displayName;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $name;
  /** @var string */
  public $processEndpoint;
  /** @var string */
  public $state;
  /** @var string */
  public $type;

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
  public function setDefaultProcessorVersion($defaultProcessorVersion)
  {
    $this->defaultProcessorVersion = $defaultProcessorVersion;
  }
  /** @return string */
  public function getDefaultProcessorVersion()
  {
    return $this->defaultProcessorVersion;
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
  public function setProcessEndpoint($processEndpoint)
  {
    $this->processEndpoint = $processEndpoint;
  }
  /** @return string */
  public function getProcessEndpoint()
  {
    return $this->processEndpoint;
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

class GoogleCloudDocumentaiV1ProcessorType extends \Google\Collection
{
  /** @var bool */
  public $allowCreation;
  /** @var GoogleCloudDocumentaiV1ProcessorTypeLocationInfo[] */
  public $availableLocations;
  /** @var string */
  public $category;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  protected $collection_key = 'availableLocations';
  protected $availableLocationsType = GoogleCloudDocumentaiV1ProcessorTypeLocationInfo::class;
  protected $availableLocationsDataType = 'array';
  /** @param bool */
  public function setAllowCreation($allowCreation)
  {
    $this->allowCreation = $allowCreation;
  }
  /** @return bool */
  public function getAllowCreation()
  {
    return $this->allowCreation;
  }
  /** @param GoogleCloudDocumentaiV1ProcessorTypeLocationInfo[] */
  public function setAvailableLocations($availableLocations)
  {
    $this->availableLocations = $availableLocations;
  }
  /** @return GoogleCloudDocumentaiV1ProcessorTypeLocationInfo[] */
  public function getAvailableLocations()
  {
    return $this->availableLocations;
  }
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
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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

class GoogleCloudDocumentaiV1ProcessorTypeLocationInfo extends \Google\Model
{
  /** @var string */
  public $locationId;

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

class GoogleCloudDocumentaiV1ProcessorVersion extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo */
  public $deprecationInfo;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDocumentaiV1DocumentSchema */
  public $documentSchema;
  /** @var bool */
  public $googleManaged;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $kmsKeyVersionName;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  protected $deprecationInfoType = GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo::class;
  protected $deprecationInfoDataType = '';
  protected $documentSchemaType = GoogleCloudDocumentaiV1DocumentSchema::class;
  protected $documentSchemaDataType = '';
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
  /** @param GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo */
  public function setDeprecationInfo(GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo $deprecationInfo)
  {
    $this->deprecationInfo = $deprecationInfo;
  }
  /** @return GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo */
  public function getDeprecationInfo()
  {
    return $this->deprecationInfo;
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
  /** @param GoogleCloudDocumentaiV1DocumentSchema */
  public function setDocumentSchema(GoogleCloudDocumentaiV1DocumentSchema $documentSchema)
  {
    $this->documentSchema = $documentSchema;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchema */
  public function getDocumentSchema()
  {
    return $this->documentSchema;
  }
  /** @param bool */
  public function setGoogleManaged($googleManaged)
  {
    $this->googleManaged = $googleManaged;
  }
  /** @return bool */
  public function getGoogleManaged()
  {
    return $this->googleManaged;
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
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /** @return string */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
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
}

class GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo extends \Google\Model
{
  /** @var string */
  public $deprecationTime;
  /** @var string */
  public $replacementProcessorVersion;

  /** @param string */
  public function setDeprecationTime($deprecationTime)
  {
    $this->deprecationTime = $deprecationTime;
  }
  /** @return string */
  public function getDeprecationTime()
  {
    return $this->deprecationTime;
  }
  /** @param string */
  public function setReplacementProcessorVersion($replacementProcessorVersion)
  {
    $this->replacementProcessorVersion = $replacementProcessorVersion;
  }
  /** @return string */
  public function getReplacementProcessorVersion()
  {
    return $this->replacementProcessorVersion;
  }
}

class GoogleCloudDocumentaiV1RawDocument extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class GoogleCloudDocumentaiV1ReviewDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  /** @var string */
  public $questionId;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param string */
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /** @return string */
  public function getQuestionId()
  {
    return $this->questionId;
  }
}

class GoogleCloudDocumentaiV1ReviewDocumentRequest extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1DocumentSchema */
  public $documentSchema;
  /** @var bool */
  public $enableSchemaValidation;
  /** @var GoogleCloudDocumentaiV1Document */
  public $inlineDocument;
  /** @var string */
  public $priority;
  protected $documentSchemaType = GoogleCloudDocumentaiV1DocumentSchema::class;
  protected $documentSchemaDataType = '';
  protected $inlineDocumentType = GoogleCloudDocumentaiV1Document::class;
  protected $inlineDocumentDataType = '';
  /** @param GoogleCloudDocumentaiV1DocumentSchema */
  public function setDocumentSchema(GoogleCloudDocumentaiV1DocumentSchema $documentSchema)
  {
    $this->documentSchema = $documentSchema;
  }
  /** @return GoogleCloudDocumentaiV1DocumentSchema */
  public function getDocumentSchema()
  {
    return $this->documentSchema;
  }
  /** @param bool */
  public function setEnableSchemaValidation($enableSchemaValidation)
  {
    $this->enableSchemaValidation = $enableSchemaValidation;
  }
  /** @return bool */
  public function getEnableSchemaValidation()
  {
    return $this->enableSchemaValidation;
  }
  /** @param GoogleCloudDocumentaiV1Document */
  public function setInlineDocument(GoogleCloudDocumentaiV1Document $inlineDocument)
  {
    $this->inlineDocument = $inlineDocument;
  }
  /** @return GoogleCloudDocumentaiV1Document */
  public function getInlineDocument()
  {
    return $this->inlineDocument;
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
}

class GoogleCloudDocumentaiV1ReviewDocumentResponse extends \Google\Model
{
  /** @var string */
  public $gcsDestination;
  /** @var string */
  public $rejectionReason;
  /** @var string */
  public $state;

  /** @param string */
  public function setGcsDestination($gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return string */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param string */
  public function setRejectionReason($rejectionReason)
  {
    $this->rejectionReason = $rejectionReason;
  }
  /** @return string */
  public function getRejectionReason()
  {
    return $this->rejectionReason;
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

class GoogleCloudDocumentaiV1SetDefaultProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1SetDefaultProcessorVersionRequest extends \Google\Model
{
  /** @var string */
  public $defaultProcessorVersion;

  /** @param string */
  public function setDefaultProcessorVersion($defaultProcessorVersion)
  {
    $this->defaultProcessorVersion = $defaultProcessorVersion;
  }
  /** @return string */
  public function getDefaultProcessorVersion()
  {
    return $this->defaultProcessorVersion;
  }
}

class GoogleCloudDocumentaiV1SetDefaultProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1UndeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1UndeployProcessorVersionRequest extends \Google\Model
{
}

class GoogleCloudDocumentaiV1UndeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1alpha1AnalyzeHitlDataMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1alpha1CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1alpha1CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1alpha1CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1alpha1CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1alpha1CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1alpha1CommonOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resource;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta1Barcode extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $rawValue;
  /** @var string */
  public $valueFormat;

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
  /** @param string */
  public function setRawValue($rawValue)
  {
    $this->rawValue = $rawValue;
  }
  /** @return string */
  public function getRawValue()
  {
    return $this->rawValue;
  }
  /** @param string */
  public function setValueFormat($valueFormat)
  {
    $this->valueFormat = $valueFormat;
  }
  /** @return string */
  public function getValueFormat()
  {
    return $this->valueFormat;
  }
}

class GoogleCloudDocumentaiV1beta1BatchProcessDocumentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1ProcessDocumentResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudDocumentaiV1beta1ProcessDocumentResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1ProcessDocumentResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudDocumentaiV1beta1ProcessDocumentResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudDocumentaiV1beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudDocumentaiV1beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudDocumentaiV1beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudDocumentaiV1beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudDocumentaiV1beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudDocumentaiV1beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudDocumentaiV1beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudDocumentaiV1beta1Document extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public $entities;
  /** @var GoogleCloudDocumentaiV1beta1DocumentEntityRelation[] */
  public $entityRelations;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var string */
  public $mimeType;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPage[] */
  public $pages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentRevision[] */
  public $revisions;
  /** @var GoogleCloudDocumentaiV1beta1DocumentShardInfo */
  public $shardInfo;
  /** @var string */
  public $text;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextChange[] */
  public $textChanges;
  /** @var GoogleCloudDocumentaiV1beta1DocumentStyle[] */
  public $textStyles;
  /** @var string */
  public $uri;
  protected $collection_key = 'textStyles';
  protected $entitiesType = GoogleCloudDocumentaiV1beta1DocumentEntity::class;
  protected $entitiesDataType = 'array';
  protected $entityRelationsType = GoogleCloudDocumentaiV1beta1DocumentEntityRelation::class;
  protected $entityRelationsDataType = 'array';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $pagesType = GoogleCloudDocumentaiV1beta1DocumentPage::class;
  protected $pagesDataType = 'array';
  protected $revisionsType = GoogleCloudDocumentaiV1beta1DocumentRevision::class;
  protected $revisionsDataType = 'array';
  protected $shardInfoType = GoogleCloudDocumentaiV1beta1DocumentShardInfo::class;
  protected $shardInfoDataType = '';
  protected $textChangesType = GoogleCloudDocumentaiV1beta1DocumentTextChange::class;
  protected $textChangesDataType = 'array';
  protected $textStylesType = GoogleCloudDocumentaiV1beta1DocumentStyle::class;
  protected $textStylesDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentEntityRelation[] */
  public function setEntityRelations($entityRelations)
  {
    $this->entityRelations = $entityRelations;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentEntityRelation[] */
  public function getEntityRelations()
  {
    return $this->entityRelations;
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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPage[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPage[] */
  public function getPages()
  {
    return $this->pages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentRevision[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentRevision[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentShardInfo */
  public function setShardInfo(GoogleCloudDocumentaiV1beta1DocumentShardInfo $shardInfo)
  {
    $this->shardInfo = $shardInfo;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentShardInfo */
  public function getShardInfo()
  {
    return $this->shardInfo;
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
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextChange[] */
  public function setTextChanges($textChanges)
  {
    $this->textChanges = $textChanges;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextChange[] */
  public function getTextChanges()
  {
    return $this->textChanges;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentStyle[] */
  public function setTextStyles($textStyles)
  {
    $this->textStyles = $textStyles;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentStyle[] */
  public function getTextStyles()
  {
    return $this->textStyles;
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

class GoogleCloudDocumentaiV1beta1DocumentEntity extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $id;
  /** @var string */
  public $mentionId;
  /** @var string */
  public $mentionText;
  /** @var GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue */
  public $normalizedValue;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageAnchor */
  public $pageAnchor;
  /** @var GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public $properties;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  /** @var bool */
  public $redacted;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $type;
  protected $collection_key = 'properties';
  protected $normalizedValueType = GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue::class;
  protected $normalizedValueDataType = '';
  protected $pageAnchorType = GoogleCloudDocumentaiV1beta1DocumentPageAnchor::class;
  protected $pageAnchorDataType = '';
  protected $propertiesType = GoogleCloudDocumentaiV1beta1DocumentEntity::class;
  protected $propertiesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setMentionId($mentionId)
  {
    $this->mentionId = $mentionId;
  }
  /** @return string */
  public function getMentionId()
  {
    return $this->mentionId;
  }
  /** @param string */
  public function setMentionText($mentionText)
  {
    $this->mentionText = $mentionText;
  }
  /** @return string */
  public function getMentionText()
  {
    return $this->mentionText;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue */
  public function setNormalizedValue(GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue $normalizedValue)
  {
    $this->normalizedValue = $normalizedValue;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue */
  public function getNormalizedValue()
  {
    return $this->normalizedValue;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageAnchor */
  public function setPageAnchor(GoogleCloudDocumentaiV1beta1DocumentPageAnchor $pageAnchor)
  {
    $this->pageAnchor = $pageAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageAnchor */
  public function getPageAnchor()
  {
    return $this->pageAnchor;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentEntity[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param bool */
  public function setRedacted($redacted)
  {
    $this->redacted = $redacted;
  }
  /** @return bool */
  public function getRedacted()
  {
    return $this->redacted;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
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

class GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue extends \Google\Model
{
  /** @var GoogleTypePostalAddress */
  public $addressValue;
  /** @var bool */
  public $booleanValue;
  /** @var GoogleTypeDate */
  public $dateValue;
  /** @var GoogleTypeDateTime */
  public $datetimeValue;
  /** @var float */
  public $floatValue;
  /** @var int */
  public $integerValue;
  /** @var GoogleTypeMoney */
  public $moneyValue;
  /** @var string */
  public $text;
  protected $addressValueType = GoogleTypePostalAddress::class;
  protected $addressValueDataType = '';
  protected $dateValueType = GoogleTypeDate::class;
  protected $dateValueDataType = '';
  protected $datetimeValueType = GoogleTypeDateTime::class;
  protected $datetimeValueDataType = '';
  protected $moneyValueType = GoogleTypeMoney::class;
  protected $moneyValueDataType = '';
  /** @param GoogleTypePostalAddress */
  public function setAddressValue(GoogleTypePostalAddress $addressValue)
  {
    $this->addressValue = $addressValue;
  }
  /** @return GoogleTypePostalAddress */
  public function getAddressValue()
  {
    return $this->addressValue;
  }
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
  /** @param GoogleTypeDateTime */
  public function setDatetimeValue(GoogleTypeDateTime $datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  /** @return GoogleTypeDateTime */
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
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
  /** @param int */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return int */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param GoogleTypeMoney */
  public function setMoneyValue(GoogleTypeMoney $moneyValue)
  {
    $this->moneyValue = $moneyValue;
  }
  /** @return GoogleTypeMoney */
  public function getMoneyValue()
  {
    return $this->moneyValue;
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

class GoogleCloudDocumentaiV1beta1DocumentEntityRelation extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var string */
  public $relation;
  /** @var string */
  public $subjectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setRelation($relation)
  {
    $this->relation = $relation;
  }
  /** @return string */
  public function getRelation()
  {
    return $this->relation;
  }
  /** @param string */
  public function setSubjectId($subjectId)
  {
    $this->subjectId = $subjectId;
  }
  /** @return string */
  public function getSubjectId()
  {
    return $this->subjectId;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPage extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageBlock[] */
  public $blocks;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode[] */
  public $detectedBarcodes;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDimension */
  public $dimension;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageFormField[] */
  public $formFields;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageImage */
  public $image;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores */
  public $imageQualityScores;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLine[] */
  public $lines;
  /** @var int */
  public $pageNumber;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageParagraph[] */
  public $paragraphs;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageSymbol[] */
  public $symbols;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageTable[] */
  public $tables;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageToken[] */
  public $tokens;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageMatrix[] */
  public $transforms;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageVisualElement[] */
  public $visualElements;
  protected $collection_key = 'visualElements';
  protected $blocksType = GoogleCloudDocumentaiV1beta1DocumentPageBlock::class;
  protected $blocksDataType = 'array';
  protected $detectedBarcodesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode::class;
  protected $detectedBarcodesDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $dimensionType = GoogleCloudDocumentaiV1beta1DocumentPageDimension::class;
  protected $dimensionDataType = '';
  protected $formFieldsType = GoogleCloudDocumentaiV1beta1DocumentPageFormField::class;
  protected $formFieldsDataType = 'array';
  protected $imageType = GoogleCloudDocumentaiV1beta1DocumentPageImage::class;
  protected $imageDataType = '';
  protected $imageQualityScoresType = GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores::class;
  protected $imageQualityScoresDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $linesType = GoogleCloudDocumentaiV1beta1DocumentPageLine::class;
  protected $linesDataType = 'array';
  protected $paragraphsType = GoogleCloudDocumentaiV1beta1DocumentPageParagraph::class;
  protected $paragraphsDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $symbolsType = GoogleCloudDocumentaiV1beta1DocumentPageSymbol::class;
  protected $symbolsDataType = 'array';
  protected $tablesType = GoogleCloudDocumentaiV1beta1DocumentPageTable::class;
  protected $tablesDataType = 'array';
  protected $tokensType = GoogleCloudDocumentaiV1beta1DocumentPageToken::class;
  protected $tokensDataType = 'array';
  protected $transformsType = GoogleCloudDocumentaiV1beta1DocumentPageMatrix::class;
  protected $transformsDataType = 'array';
  protected $visualElementsType = GoogleCloudDocumentaiV1beta1DocumentPageVisualElement::class;
  protected $visualElementsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageBlock[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageBlock[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode[] */
  public function setDetectedBarcodes($detectedBarcodes)
  {
    $this->detectedBarcodes = $detectedBarcodes;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode[] */
  public function getDetectedBarcodes()
  {
    return $this->detectedBarcodes;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDimension */
  public function setDimension(GoogleCloudDocumentaiV1beta1DocumentPageDimension $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDimension */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageFormField[] */
  public function setFormFields($formFields)
  {
    $this->formFields = $formFields;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageFormField[] */
  public function getFormFields()
  {
    return $this->formFields;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageImage */
  public function setImage(GoogleCloudDocumentaiV1beta1DocumentPageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores */
  public function setImageQualityScores(GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores $imageQualityScores)
  {
    $this->imageQualityScores = $imageQualityScores;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores */
  public function getImageQualityScores()
  {
    return $this->imageQualityScores;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLine[] */
  public function setLines($lines)
  {
    $this->lines = $lines;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLine[] */
  public function getLines()
  {
    return $this->lines;
  }
  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageParagraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageParagraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageSymbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageSymbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageTable[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageTable[] */
  public function getTables()
  {
    return $this->tables;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageToken[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageToken[] */
  public function getTokens()
  {
    return $this->tokens;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageMatrix[] */
  public function setTransforms($transforms)
  {
    $this->transforms = $transforms;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageMatrix[] */
  public function getTransforms()
  {
    return $this->transforms;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageVisualElement[] */
  public function setVisualElements($visualElements)
  {
    $this->visualElements = $visualElements;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageVisualElement[] */
  public function getVisualElements()
  {
    return $this->visualElements;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageAnchor extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef[] */
  public $pageRefs;
  protected $collection_key = 'pageRefs';
  protected $pageRefsType = GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef::class;
  protected $pageRefsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef[] */
  public function setPageRefs($pageRefs)
  {
    $this->pageRefs = $pageRefs;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef[] */
  public function getPageRefs()
  {
    return $this->pageRefs;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $layoutId;
  /** @var string */
  public $layoutType;
  /** @var string */
  public $page;
  protected $boundingPolyType = GoogleCloudDocumentaiV1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLayoutId($layoutId)
  {
    $this->layoutId = $layoutId;
  }
  /** @return string */
  public function getLayoutId()
  {
    return $this->layoutId;
  }
  /** @param string */
  public function setLayoutType($layoutType)
  {
    $this->layoutType = $layoutType;
  }
  /** @return string */
  public function getLayoutType()
  {
    return $this->layoutType;
  }
  /** @param string */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return string */
  public function getPage()
  {
    return $this->page;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageBlock extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1Barcode */
  public $barcode;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  protected $barcodeType = GoogleCloudDocumentaiV1beta1Barcode::class;
  protected $barcodeDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1Barcode */
  public function setBarcode(GoogleCloudDocumentaiV1beta1Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  /** @return GoogleCloudDocumentaiV1beta1Barcode */
  public function getBarcode()
  {
    return $this->barcode;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageDimension extends \Google\Model
{
  /** @var float */
  public $height;
  /** @var string */
  public $unit;
  /** @var float */
  public $width;

  /** @param float */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return float */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param float */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return float */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageFormField extends \Google\Collection
{
  /** @var string */
  public $correctedKeyText;
  /** @var string */
  public $correctedValueText;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $fieldName;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $fieldValue;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $nameDetectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $valueDetectedLanguages;
  /** @var string */
  public $valueType;
  protected $collection_key = 'valueDetectedLanguages';
  protected $fieldNameType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $fieldNameDataType = '';
  protected $fieldValueType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $fieldValueDataType = '';
  protected $nameDetectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $nameDetectedLanguagesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $valueDetectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $valueDetectedLanguagesDataType = 'array';
  /** @param string */
  public function setCorrectedKeyText($correctedKeyText)
  {
    $this->correctedKeyText = $correctedKeyText;
  }
  /** @return string */
  public function getCorrectedKeyText()
  {
    return $this->correctedKeyText;
  }
  /** @param string */
  public function setCorrectedValueText($correctedValueText)
  {
    $this->correctedValueText = $correctedValueText;
  }
  /** @return string */
  public function getCorrectedValueText()
  {
    return $this->correctedValueText;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setFieldName(GoogleCloudDocumentaiV1beta1DocumentPageLayout $fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setFieldValue(GoogleCloudDocumentaiV1beta1DocumentPageLayout $fieldValue)
  {
    $this->fieldValue = $fieldValue;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getFieldValue()
  {
    return $this->fieldValue;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setNameDetectedLanguages($nameDetectedLanguages)
  {
    $this->nameDetectedLanguages = $nameDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getNameDetectedLanguages()
  {
    return $this->nameDetectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setValueDetectedLanguages($valueDetectedLanguages)
  {
    $this->valueDetectedLanguages = $valueDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getValueDetectedLanguages()
  {
    return $this->valueDetectedLanguages;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageImage extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var int */
  public $height;
  /** @var string */
  public $mimeType;
  /** @var int */
  public $width;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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

class GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect[] */
  public $detectedDefects;
  /** @var float */
  public $qualityScore;
  protected $collection_key = 'detectedDefects';
  protected $detectedDefectsType = GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect::class;
  protected $detectedDefectsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect[] */
  public function setDetectedDefects($detectedDefects)
  {
    $this->detectedDefects = $detectedDefects;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect[] */
  public function getDetectedDefects()
  {
    return $this->detectedDefects;
  }
  /** @param float */
  public function setQualityScore($qualityScore)
  {
    $this->qualityScore = $qualityScore;
  }
  /** @return float */
  public function getQualityScore()
  {
    return $this->qualityScore;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $type;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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

class GoogleCloudDocumentaiV1beta1DocumentPageLayout extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $orientation;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public $textAnchor;
  protected $boundingPolyType = GoogleCloudDocumentaiV1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageLine extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageMatrix extends \Google\Model
{
  /** @var int */
  public $cols;
  /** @var string */
  public $data;
  /** @var int */
  public $rows;
  /** @var int */
  public $type;

  /** @param int */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }
  /** @return int */
  public function getCols()
  {
    return $this->cols;
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
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return int */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param int */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return int */
  public function getType()
  {
    return $this->type;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageParagraph extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageSymbol extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageTable extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public $bodyRows;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public $headerRows;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'headerRows';
  protected $bodyRowsType = GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow::class;
  protected $bodyRowsDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $headerRowsType = GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow::class;
  protected $headerRowsDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public function setBodyRows($bodyRows)
  {
    $this->bodyRows = $bodyRows;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public function getBodyRows()
  {
    return $this->bodyRows;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow[] */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell extends \Google\Collection
{
  /** @var int */
  public $colSpan;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var int */
  public $rowSpan;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param int */
  public function setColSpan($colSpan)
  {
    $this->colSpan = $colSpan;
  }
  /** @return int */
  public function getColSpan()
  {
    return $this->colSpan;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param int */
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  /** @return int */
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell::class;
  protected $cellsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageToken extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak */
  public function setDetectedBreak(GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta1DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak extends \Google\Model
{
  /** @var string */
  public $type;

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

class GoogleCloudDocumentaiV1beta1DocumentPageVisualElement extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public $layout;
  /** @var string */
  public $type;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta1DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta1DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
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

class GoogleCloudDocumentaiV1beta1DocumentProvenance extends \Google\Collection
{
  /** @var int */
  public $id;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenanceParent[] */
  public $parents;
  /** @var int */
  public $revision;
  /** @var string */
  public $type;
  protected $collection_key = 'parents';
  protected $parentsType = GoogleCloudDocumentaiV1beta1DocumentProvenanceParent::class;
  protected $parentsDataType = 'array';
  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenanceParent[] */
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenanceParent[] */
  public function getParents()
  {
    return $this->parents;
  }
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

class GoogleCloudDocumentaiV1beta1DocumentProvenanceParent extends \Google\Model
{
  /** @var int */
  public $id;
  /** @var int */
  public $index;
  /** @var int */
  public $revision;

  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
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
}

class GoogleCloudDocumentaiV1beta1DocumentRevision extends \Google\Collection
{
  /** @var string */
  public $agent;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview */
  public $humanReview;
  /** @var string */
  public $id;
  /** @var int[] */
  public $parent;
  /** @var string[] */
  public $parentIds;
  /** @var string */
  public $processor;
  protected $collection_key = 'parentIds';
  protected $humanReviewType = GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview::class;
  protected $humanReviewDataType = '';
  /** @param string */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /** @return string */
  public function getAgent()
  {
    return $this->agent;
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
  /** @param GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview */
  public function setHumanReview(GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview $humanReview)
  {
    $this->humanReview = $humanReview;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview */
  public function getHumanReview()
  {
    return $this->humanReview;
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
  /** @param int[] */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return int[] */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string[] */
  public function setParentIds($parentIds)
  {
    $this->parentIds = $parentIds;
  }
  /** @return string[] */
  public function getParentIds()
  {
    return $this->parentIds;
  }
  /** @param string */
  public function setProcessor($processor)
  {
    $this->processor = $processor;
  }
  /** @return string */
  public function getProcessor()
  {
    return $this->processor;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;

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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentShardInfo extends \Google\Model
{
  /** @var string */
  public $shardCount;
  /** @var string */
  public $shardIndex;
  /** @var string */
  public $textOffset;

  /** @param string */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /** @return string */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  /** @param string */
  public function setShardIndex($shardIndex)
  {
    $this->shardIndex = $shardIndex;
  }
  /** @return string */
  public function getShardIndex()
  {
    return $this->shardIndex;
  }
  /** @param string */
  public function setTextOffset($textOffset)
  {
    $this->textOffset = $textOffset;
  }
  /** @return string */
  public function getTextOffset()
  {
    return $this->textOffset;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentStyle extends \Google\Model
{
  /** @var GoogleTypeColor */
  public $backgroundColor;
  /** @var GoogleTypeColor */
  public $color;
  /** @var string */
  public $fontFamily;
  /** @var GoogleCloudDocumentaiV1beta1DocumentStyleFontSize */
  public $fontSize;
  /** @var string */
  public $fontWeight;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $textDecoration;
  /** @var string */
  public $textStyle;
  protected $backgroundColorType = GoogleTypeColor::class;
  protected $backgroundColorDataType = '';
  protected $colorType = GoogleTypeColor::class;
  protected $colorDataType = '';
  protected $fontSizeType = GoogleCloudDocumentaiV1beta1DocumentStyleFontSize::class;
  protected $fontSizeDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleTypeColor */
  public function setBackgroundColor(GoogleTypeColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return GoogleTypeColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param GoogleTypeColor */
  public function setColor(GoogleTypeColor $color)
  {
    $this->color = $color;
  }
  /** @return GoogleTypeColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /** @return string */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentStyleFontSize */
  public function setFontSize(GoogleCloudDocumentaiV1beta1DocumentStyleFontSize $fontSize)
  {
    $this->fontSize = $fontSize;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentStyleFontSize */
  public function getFontSize()
  {
    return $this->fontSize;
  }
  /** @param string */
  public function setFontWeight($fontWeight)
  {
    $this->fontWeight = $fontWeight;
  }
  /** @return string */
  public function getFontWeight()
  {
    return $this->fontWeight;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
  /** @param string */
  public function setTextDecoration($textDecoration)
  {
    $this->textDecoration = $textDecoration;
  }
  /** @return string */
  public function getTextDecoration()
  {
    return $this->textDecoration;
  }
  /** @param string */
  public function setTextStyle($textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return string */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentStyleFontSize extends \Google\Model
{
  /** @var float */
  public $size;
  /** @var string */
  public $unit;

  /** @param float */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return float */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentTextAnchor extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment[] */
  public $textSegments;
  protected $collection_key = 'textSegments';
  protected $textSegmentsType = GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment::class;
  protected $textSegmentsDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment[] */
  public function setTextSegments($textSegments)
  {
    $this->textSegments = $textSegments;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment[] */
  public function getTextSegments()
  {
    return $this->textSegments;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment extends \Google\Model
{
  /** @var string */
  public $endIndex;
  /** @var string */
  public $startIndex;

  /** @param string */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return string */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param string */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return string */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class GoogleCloudDocumentaiV1beta1DocumentTextChange extends \Google\Collection
{
  /** @var string */
  public $changedText;
  /** @var GoogleCloudDocumentaiV1beta1DocumentProvenance[] */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public $textAnchor;
  protected $collection_key = 'provenance';
  protected $provenanceType = GoogleCloudDocumentaiV1beta1DocumentProvenance::class;
  protected $provenanceDataType = 'array';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param string */
  public function setChangedText($changedText)
  {
    $this->changedText = $changedText;
  }
  /** @return string */
  public function getChangedText()
  {
    return $this->changedText;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentProvenance[] */
  public function setProvenance($provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentProvenance[] */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta1DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta1DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1beta1GcsDestination extends \Google\Model
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

class GoogleCloudDocumentaiV1beta1GcsSource extends \Google\Model
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

class GoogleCloudDocumentaiV1beta1InputConfig extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudDocumentaiV1beta1GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1GcsSource */
  public function setGcsSource(GoogleCloudDocumentaiV1beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudDocumentaiV1beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class GoogleCloudDocumentaiV1beta1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1beta1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta1OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1GcsDestination */
  public $gcsDestination;
  /** @var int */
  public $pagesPerShard;
  protected $gcsDestinationType = GoogleCloudDocumentaiV1beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1GcsDestination */
  public function setGcsDestination(GoogleCloudDocumentaiV1beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDocumentaiV1beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param int */
  public function setPagesPerShard($pagesPerShard)
  {
    $this->pagesPerShard = $pagesPerShard;
  }
  /** @return int */
  public function getPagesPerShard()
  {
    return $this->pagesPerShard;
  }
}

class GoogleCloudDocumentaiV1beta1ProcessDocumentResponse extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudDocumentaiV1beta1OutputConfig */
  public $outputConfig;
  protected $inputConfigType = GoogleCloudDocumentaiV1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $outputConfigType = GoogleCloudDocumentaiV1beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudDocumentaiV1beta1InputConfig */
  public function setInputConfig(GoogleCloudDocumentaiV1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudDocumentaiV1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudDocumentaiV1beta1OutputConfig */
  public function setOutputConfig(GoogleCloudDocumentaiV1beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDocumentaiV1beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudDocumentaiV1beta1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1beta2Barcode extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $rawValue;
  /** @var string */
  public $valueFormat;

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
  /** @param string */
  public function setRawValue($rawValue)
  {
    $this->rawValue = $rawValue;
  }
  /** @return string */
  public function getRawValue()
  {
    return $this->rawValue;
  }
  /** @param string */
  public function setValueFormat($valueFormat)
  {
    $this->valueFormat = $valueFormat;
  }
  /** @return string */
  public function getValueFormat()
  {
    return $this->valueFormat;
  }
}

class GoogleCloudDocumentaiV1beta2BatchProcessDocumentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2ProcessDocumentResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudDocumentaiV1beta2ProcessDocumentResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2ProcessDocumentResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudDocumentaiV1beta2ProcessDocumentResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudDocumentaiV1beta2BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudDocumentaiV1beta2Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudDocumentaiV1beta2NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudDocumentaiV1beta2Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudDocumentaiV1beta2NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudDocumentaiV1beta2Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudDocumentaiV1beta2Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudDocumentaiV1beta2Document extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public $entities;
  /** @var GoogleCloudDocumentaiV1beta2DocumentEntityRelation[] */
  public $entityRelations;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudDocumentaiV1beta2DocumentLabel[] */
  public $labels;
  /** @var string */
  public $mimeType;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPage[] */
  public $pages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentRevision[] */
  public $revisions;
  /** @var GoogleCloudDocumentaiV1beta2DocumentShardInfo */
  public $shardInfo;
  /** @var string */
  public $text;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextChange[] */
  public $textChanges;
  /** @var GoogleCloudDocumentaiV1beta2DocumentStyle[] */
  public $textStyles;
  /** @var string */
  public $uri;
  protected $collection_key = 'textStyles';
  protected $entitiesType = GoogleCloudDocumentaiV1beta2DocumentEntity::class;
  protected $entitiesDataType = 'array';
  protected $entityRelationsType = GoogleCloudDocumentaiV1beta2DocumentEntityRelation::class;
  protected $entityRelationsDataType = 'array';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $labelsType = GoogleCloudDocumentaiV1beta2DocumentLabel::class;
  protected $labelsDataType = 'array';
  protected $pagesType = GoogleCloudDocumentaiV1beta2DocumentPage::class;
  protected $pagesDataType = 'array';
  protected $revisionsType = GoogleCloudDocumentaiV1beta2DocumentRevision::class;
  protected $revisionsDataType = 'array';
  protected $shardInfoType = GoogleCloudDocumentaiV1beta2DocumentShardInfo::class;
  protected $shardInfoDataType = '';
  protected $textChangesType = GoogleCloudDocumentaiV1beta2DocumentTextChange::class;
  protected $textChangesDataType = 'array';
  protected $textStylesType = GoogleCloudDocumentaiV1beta2DocumentStyle::class;
  protected $textStylesDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentEntityRelation[] */
  public function setEntityRelations($entityRelations)
  {
    $this->entityRelations = $entityRelations;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentEntityRelation[] */
  public function getEntityRelations()
  {
    return $this->entityRelations;
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
  /** @param GoogleCloudDocumentaiV1beta2DocumentLabel[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentLabel[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPage[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPage[] */
  public function getPages()
  {
    return $this->pages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentRevision[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentRevision[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentShardInfo */
  public function setShardInfo(GoogleCloudDocumentaiV1beta2DocumentShardInfo $shardInfo)
  {
    $this->shardInfo = $shardInfo;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentShardInfo */
  public function getShardInfo()
  {
    return $this->shardInfo;
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
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextChange[] */
  public function setTextChanges($textChanges)
  {
    $this->textChanges = $textChanges;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextChange[] */
  public function getTextChanges()
  {
    return $this->textChanges;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentStyle[] */
  public function setTextStyles($textStyles)
  {
    $this->textStyles = $textStyles;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentStyle[] */
  public function getTextStyles()
  {
    return $this->textStyles;
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

class GoogleCloudDocumentaiV1beta2DocumentEntity extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $id;
  /** @var string */
  public $mentionId;
  /** @var string */
  public $mentionText;
  /** @var GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue */
  public $normalizedValue;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageAnchor */
  public $pageAnchor;
  /** @var GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public $properties;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  /** @var bool */
  public $redacted;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $type;
  protected $collection_key = 'properties';
  protected $normalizedValueType = GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue::class;
  protected $normalizedValueDataType = '';
  protected $pageAnchorType = GoogleCloudDocumentaiV1beta2DocumentPageAnchor::class;
  protected $pageAnchorDataType = '';
  protected $propertiesType = GoogleCloudDocumentaiV1beta2DocumentEntity::class;
  protected $propertiesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setMentionId($mentionId)
  {
    $this->mentionId = $mentionId;
  }
  /** @return string */
  public function getMentionId()
  {
    return $this->mentionId;
  }
  /** @param string */
  public function setMentionText($mentionText)
  {
    $this->mentionText = $mentionText;
  }
  /** @return string */
  public function getMentionText()
  {
    return $this->mentionText;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue */
  public function setNormalizedValue(GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue $normalizedValue)
  {
    $this->normalizedValue = $normalizedValue;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue */
  public function getNormalizedValue()
  {
    return $this->normalizedValue;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageAnchor */
  public function setPageAnchor(GoogleCloudDocumentaiV1beta2DocumentPageAnchor $pageAnchor)
  {
    $this->pageAnchor = $pageAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageAnchor */
  public function getPageAnchor()
  {
    return $this->pageAnchor;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentEntity[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param bool */
  public function setRedacted($redacted)
  {
    $this->redacted = $redacted;
  }
  /** @return bool */
  public function getRedacted()
  {
    return $this->redacted;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta2DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
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

class GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue extends \Google\Model
{
  /** @var GoogleTypePostalAddress */
  public $addressValue;
  /** @var bool */
  public $booleanValue;
  /** @var GoogleTypeDate */
  public $dateValue;
  /** @var GoogleTypeDateTime */
  public $datetimeValue;
  /** @var float */
  public $floatValue;
  /** @var int */
  public $integerValue;
  /** @var GoogleTypeMoney */
  public $moneyValue;
  /** @var string */
  public $text;
  protected $addressValueType = GoogleTypePostalAddress::class;
  protected $addressValueDataType = '';
  protected $dateValueType = GoogleTypeDate::class;
  protected $dateValueDataType = '';
  protected $datetimeValueType = GoogleTypeDateTime::class;
  protected $datetimeValueDataType = '';
  protected $moneyValueType = GoogleTypeMoney::class;
  protected $moneyValueDataType = '';
  /** @param GoogleTypePostalAddress */
  public function setAddressValue(GoogleTypePostalAddress $addressValue)
  {
    $this->addressValue = $addressValue;
  }
  /** @return GoogleTypePostalAddress */
  public function getAddressValue()
  {
    return $this->addressValue;
  }
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
  /** @param GoogleTypeDateTime */
  public function setDatetimeValue(GoogleTypeDateTime $datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  /** @return GoogleTypeDateTime */
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
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
  /** @param int */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return int */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param GoogleTypeMoney */
  public function setMoneyValue(GoogleTypeMoney $moneyValue)
  {
    $this->moneyValue = $moneyValue;
  }
  /** @return GoogleTypeMoney */
  public function getMoneyValue()
  {
    return $this->moneyValue;
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

class GoogleCloudDocumentaiV1beta2DocumentEntityRelation extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var string */
  public $relation;
  /** @var string */
  public $subjectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setRelation($relation)
  {
    $this->relation = $relation;
  }
  /** @return string */
  public function getRelation()
  {
    return $this->relation;
  }
  /** @param string */
  public function setSubjectId($subjectId)
  {
    $this->subjectId = $subjectId;
  }
  /** @return string */
  public function getSubjectId()
  {
    return $this->subjectId;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentLabel extends \Google\Model
{
  /** @var string */
  public $automlModel;
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;

  /** @param string */
  public function setAutomlModel($automlModel)
  {
    $this->automlModel = $automlModel;
  }
  /** @return string */
  public function getAutomlModel()
  {
    return $this->automlModel;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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

class GoogleCloudDocumentaiV1beta2DocumentPage extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageBlock[] */
  public $blocks;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode[] */
  public $detectedBarcodes;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDimension */
  public $dimension;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageFormField[] */
  public $formFields;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageImage */
  public $image;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores */
  public $imageQualityScores;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLine[] */
  public $lines;
  /** @var int */
  public $pageNumber;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageParagraph[] */
  public $paragraphs;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageSymbol[] */
  public $symbols;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageTable[] */
  public $tables;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageToken[] */
  public $tokens;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageMatrix[] */
  public $transforms;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageVisualElement[] */
  public $visualElements;
  protected $collection_key = 'visualElements';
  protected $blocksType = GoogleCloudDocumentaiV1beta2DocumentPageBlock::class;
  protected $blocksDataType = 'array';
  protected $detectedBarcodesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode::class;
  protected $detectedBarcodesDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $dimensionType = GoogleCloudDocumentaiV1beta2DocumentPageDimension::class;
  protected $dimensionDataType = '';
  protected $formFieldsType = GoogleCloudDocumentaiV1beta2DocumentPageFormField::class;
  protected $formFieldsDataType = 'array';
  protected $imageType = GoogleCloudDocumentaiV1beta2DocumentPageImage::class;
  protected $imageDataType = '';
  protected $imageQualityScoresType = GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores::class;
  protected $imageQualityScoresDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $linesType = GoogleCloudDocumentaiV1beta2DocumentPageLine::class;
  protected $linesDataType = 'array';
  protected $paragraphsType = GoogleCloudDocumentaiV1beta2DocumentPageParagraph::class;
  protected $paragraphsDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $symbolsType = GoogleCloudDocumentaiV1beta2DocumentPageSymbol::class;
  protected $symbolsDataType = 'array';
  protected $tablesType = GoogleCloudDocumentaiV1beta2DocumentPageTable::class;
  protected $tablesDataType = 'array';
  protected $tokensType = GoogleCloudDocumentaiV1beta2DocumentPageToken::class;
  protected $tokensDataType = 'array';
  protected $transformsType = GoogleCloudDocumentaiV1beta2DocumentPageMatrix::class;
  protected $transformsDataType = 'array';
  protected $visualElementsType = GoogleCloudDocumentaiV1beta2DocumentPageVisualElement::class;
  protected $visualElementsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageBlock[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageBlock[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode[] */
  public function setDetectedBarcodes($detectedBarcodes)
  {
    $this->detectedBarcodes = $detectedBarcodes;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode[] */
  public function getDetectedBarcodes()
  {
    return $this->detectedBarcodes;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDimension */
  public function setDimension(GoogleCloudDocumentaiV1beta2DocumentPageDimension $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDimension */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageFormField[] */
  public function setFormFields($formFields)
  {
    $this->formFields = $formFields;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageFormField[] */
  public function getFormFields()
  {
    return $this->formFields;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageImage */
  public function setImage(GoogleCloudDocumentaiV1beta2DocumentPageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores */
  public function setImageQualityScores(GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores $imageQualityScores)
  {
    $this->imageQualityScores = $imageQualityScores;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores */
  public function getImageQualityScores()
  {
    return $this->imageQualityScores;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLine[] */
  public function setLines($lines)
  {
    $this->lines = $lines;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLine[] */
  public function getLines()
  {
    return $this->lines;
  }
  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageParagraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageParagraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageSymbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageSymbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageTable[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageTable[] */
  public function getTables()
  {
    return $this->tables;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageToken[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageToken[] */
  public function getTokens()
  {
    return $this->tokens;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageMatrix[] */
  public function setTransforms($transforms)
  {
    $this->transforms = $transforms;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageMatrix[] */
  public function getTransforms()
  {
    return $this->transforms;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageVisualElement[] */
  public function setVisualElements($visualElements)
  {
    $this->visualElements = $visualElements;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageVisualElement[] */
  public function getVisualElements()
  {
    return $this->visualElements;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageAnchor extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef[] */
  public $pageRefs;
  protected $collection_key = 'pageRefs';
  protected $pageRefsType = GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef::class;
  protected $pageRefsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef[] */
  public function setPageRefs($pageRefs)
  {
    $this->pageRefs = $pageRefs;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef[] */
  public function getPageRefs()
  {
    return $this->pageRefs;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta2BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $layoutId;
  /** @var string */
  public $layoutType;
  /** @var string */
  public $page;
  protected $boundingPolyType = GoogleCloudDocumentaiV1beta2BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1beta2BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1beta2BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLayoutId($layoutId)
  {
    $this->layoutId = $layoutId;
  }
  /** @return string */
  public function getLayoutId()
  {
    return $this->layoutId;
  }
  /** @param string */
  public function setLayoutType($layoutType)
  {
    $this->layoutType = $layoutType;
  }
  /** @return string */
  public function getLayoutType()
  {
    return $this->layoutType;
  }
  /** @param string */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return string */
  public function getPage()
  {
    return $this->page;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageBlock extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta2Barcode */
  public $barcode;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  protected $barcodeType = GoogleCloudDocumentaiV1beta2Barcode::class;
  protected $barcodeDataType = '';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2Barcode */
  public function setBarcode(GoogleCloudDocumentaiV1beta2Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  /** @return GoogleCloudDocumentaiV1beta2Barcode */
  public function getBarcode()
  {
    return $this->barcode;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageDimension extends \Google\Model
{
  /** @var float */
  public $height;
  /** @var string */
  public $unit;
  /** @var float */
  public $width;

  /** @param float */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return float */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param float */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return float */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageFormField extends \Google\Collection
{
  /** @var string */
  public $correctedKeyText;
  /** @var string */
  public $correctedValueText;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $fieldName;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $fieldValue;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $nameDetectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $valueDetectedLanguages;
  /** @var string */
  public $valueType;
  protected $collection_key = 'valueDetectedLanguages';
  protected $fieldNameType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $fieldNameDataType = '';
  protected $fieldValueType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $fieldValueDataType = '';
  protected $nameDetectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $nameDetectedLanguagesDataType = 'array';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  protected $valueDetectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $valueDetectedLanguagesDataType = 'array';
  /** @param string */
  public function setCorrectedKeyText($correctedKeyText)
  {
    $this->correctedKeyText = $correctedKeyText;
  }
  /** @return string */
  public function getCorrectedKeyText()
  {
    return $this->correctedKeyText;
  }
  /** @param string */
  public function setCorrectedValueText($correctedValueText)
  {
    $this->correctedValueText = $correctedValueText;
  }
  /** @return string */
  public function getCorrectedValueText()
  {
    return $this->correctedValueText;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setFieldName(GoogleCloudDocumentaiV1beta2DocumentPageLayout $fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setFieldValue(GoogleCloudDocumentaiV1beta2DocumentPageLayout $fieldValue)
  {
    $this->fieldValue = $fieldValue;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getFieldValue()
  {
    return $this->fieldValue;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setNameDetectedLanguages($nameDetectedLanguages)
  {
    $this->nameDetectedLanguages = $nameDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getNameDetectedLanguages()
  {
    return $this->nameDetectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setValueDetectedLanguages($valueDetectedLanguages)
  {
    $this->valueDetectedLanguages = $valueDetectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getValueDetectedLanguages()
  {
    return $this->valueDetectedLanguages;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageImage extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var int */
  public $height;
  /** @var string */
  public $mimeType;
  /** @var int */
  public $width;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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

class GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect[] */
  public $detectedDefects;
  /** @var float */
  public $qualityScore;
  protected $collection_key = 'detectedDefects';
  protected $detectedDefectsType = GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect::class;
  protected $detectedDefectsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect[] */
  public function setDetectedDefects($detectedDefects)
  {
    $this->detectedDefects = $detectedDefects;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect[] */
  public function getDetectedDefects()
  {
    return $this->detectedDefects;
  }
  /** @param float */
  public function setQualityScore($qualityScore)
  {
    $this->qualityScore = $qualityScore;
  }
  /** @return float */
  public function getQualityScore()
  {
    return $this->qualityScore;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $type;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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

class GoogleCloudDocumentaiV1beta2DocumentPageLayout extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta2BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $orientation;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public $textAnchor;
  protected $boundingPolyType = GoogleCloudDocumentaiV1beta2BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2BoundingPoly */
  public function setBoundingPoly(GoogleCloudDocumentaiV1beta2BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDocumentaiV1beta2BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta2DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageLine extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageMatrix extends \Google\Model
{
  /** @var int */
  public $cols;
  /** @var string */
  public $data;
  /** @var int */
  public $rows;
  /** @var int */
  public $type;

  /** @param int */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }
  /** @return int */
  public function getCols()
  {
    return $this->cols;
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
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return int */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param int */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return int */
  public function getType()
  {
    return $this->type;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageParagraph extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageSymbol extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageTable extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public $bodyRows;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public $headerRows;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  protected $collection_key = 'headerRows';
  protected $bodyRowsType = GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow::class;
  protected $bodyRowsDataType = 'array';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $headerRowsType = GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow::class;
  protected $headerRowsDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public function setBodyRows($bodyRows)
  {
    $this->bodyRows = $bodyRows;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public function getBodyRows()
  {
    return $this->bodyRows;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow[] */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell extends \Google\Collection
{
  /** @var int */
  public $colSpan;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var int */
  public $rowSpan;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param int */
  public function setColSpan($colSpan)
  {
    $this->colSpan = $colSpan;
  }
  /** @return int */
  public function getColSpan()
  {
    return $this->colSpan;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param int */
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  /** @return int */
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell::class;
  protected $cellsDataType = 'array';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageToken extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public $provenance;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak */
  public function setDetectedBreak(GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak extends \Google\Model
{
  /** @var string */
  public $type;

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

class GoogleCloudDocumentaiV1beta2DocumentPageVisualElement extends \Google\Collection
{
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public $detectedLanguages;
  /** @var GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public $layout;
  /** @var string */
  public $type;
  protected $collection_key = 'detectedLanguages';
  protected $detectedLanguagesType = GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  protected $layoutType = GoogleCloudDocumentaiV1beta2DocumentPageLayout::class;
  protected $layoutDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function setLayout(GoogleCloudDocumentaiV1beta2DocumentPageLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentPageLayout */
  public function getLayout()
  {
    return $this->layout;
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

class GoogleCloudDocumentaiV1beta2DocumentProvenance extends \Google\Collection
{
  /** @var int */
  public $id;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenanceParent[] */
  public $parents;
  /** @var int */
  public $revision;
  /** @var string */
  public $type;
  protected $collection_key = 'parents';
  protected $parentsType = GoogleCloudDocumentaiV1beta2DocumentProvenanceParent::class;
  protected $parentsDataType = 'array';
  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenanceParent[] */
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenanceParent[] */
  public function getParents()
  {
    return $this->parents;
  }
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

class GoogleCloudDocumentaiV1beta2DocumentProvenanceParent extends \Google\Model
{
  /** @var int */
  public $id;
  /** @var int */
  public $index;
  /** @var int */
  public $revision;

  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
  public function getId()
  {
    return $this->id;
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
}

class GoogleCloudDocumentaiV1beta2DocumentRevision extends \Google\Collection
{
  /** @var string */
  public $agent;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview */
  public $humanReview;
  /** @var string */
  public $id;
  /** @var int[] */
  public $parent;
  /** @var string[] */
  public $parentIds;
  /** @var string */
  public $processor;
  protected $collection_key = 'parentIds';
  protected $humanReviewType = GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview::class;
  protected $humanReviewDataType = '';
  /** @param string */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /** @return string */
  public function getAgent()
  {
    return $this->agent;
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
  /** @param GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview */
  public function setHumanReview(GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview $humanReview)
  {
    $this->humanReview = $humanReview;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview */
  public function getHumanReview()
  {
    return $this->humanReview;
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
  /** @param int[] */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return int[] */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string[] */
  public function setParentIds($parentIds)
  {
    $this->parentIds = $parentIds;
  }
  /** @return string[] */
  public function getParentIds()
  {
    return $this->parentIds;
  }
  /** @param string */
  public function setProcessor($processor)
  {
    $this->processor = $processor;
  }
  /** @return string */
  public function getProcessor()
  {
    return $this->processor;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;

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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentShardInfo extends \Google\Model
{
  /** @var string */
  public $shardCount;
  /** @var string */
  public $shardIndex;
  /** @var string */
  public $textOffset;

  /** @param string */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /** @return string */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  /** @param string */
  public function setShardIndex($shardIndex)
  {
    $this->shardIndex = $shardIndex;
  }
  /** @return string */
  public function getShardIndex()
  {
    return $this->shardIndex;
  }
  /** @param string */
  public function setTextOffset($textOffset)
  {
    $this->textOffset = $textOffset;
  }
  /** @return string */
  public function getTextOffset()
  {
    return $this->textOffset;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentStyle extends \Google\Model
{
  /** @var GoogleTypeColor */
  public $backgroundColor;
  /** @var GoogleTypeColor */
  public $color;
  /** @var string */
  public $fontFamily;
  /** @var GoogleCloudDocumentaiV1beta2DocumentStyleFontSize */
  public $fontSize;
  /** @var string */
  public $fontWeight;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public $textAnchor;
  /** @var string */
  public $textDecoration;
  /** @var string */
  public $textStyle;
  protected $backgroundColorType = GoogleTypeColor::class;
  protected $backgroundColorDataType = '';
  protected $colorType = GoogleTypeColor::class;
  protected $colorDataType = '';
  protected $fontSizeType = GoogleCloudDocumentaiV1beta2DocumentStyleFontSize::class;
  protected $fontSizeDataType = '';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param GoogleTypeColor */
  public function setBackgroundColor(GoogleTypeColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return GoogleTypeColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param GoogleTypeColor */
  public function setColor(GoogleTypeColor $color)
  {
    $this->color = $color;
  }
  /** @return GoogleTypeColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /** @return string */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentStyleFontSize */
  public function setFontSize(GoogleCloudDocumentaiV1beta2DocumentStyleFontSize $fontSize)
  {
    $this->fontSize = $fontSize;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentStyleFontSize */
  public function getFontSize()
  {
    return $this->fontSize;
  }
  /** @param string */
  public function setFontWeight($fontWeight)
  {
    $this->fontWeight = $fontWeight;
  }
  /** @return string */
  public function getFontWeight()
  {
    return $this->fontWeight;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta2DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
  /** @param string */
  public function setTextDecoration($textDecoration)
  {
    $this->textDecoration = $textDecoration;
  }
  /** @return string */
  public function getTextDecoration()
  {
    return $this->textDecoration;
  }
  /** @param string */
  public function setTextStyle($textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return string */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentStyleFontSize extends \Google\Model
{
  /** @var float */
  public $size;
  /** @var string */
  public $unit;

  /** @param float */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return float */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentTextAnchor extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment[] */
  public $textSegments;
  protected $collection_key = 'textSegments';
  protected $textSegmentsType = GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment::class;
  protected $textSegmentsDataType = 'array';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment[] */
  public function setTextSegments($textSegments)
  {
    $this->textSegments = $textSegments;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment[] */
  public function getTextSegments()
  {
    return $this->textSegments;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment extends \Google\Model
{
  /** @var string */
  public $endIndex;
  /** @var string */
  public $startIndex;

  /** @param string */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return string */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param string */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return string */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class GoogleCloudDocumentaiV1beta2DocumentTextChange extends \Google\Collection
{
  /** @var string */
  public $changedText;
  /** @var GoogleCloudDocumentaiV1beta2DocumentProvenance[] */
  public $provenance;
  /** @var GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public $textAnchor;
  protected $collection_key = 'provenance';
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = 'array';
  protected $textAnchorType = GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /** @param string */
  public function setChangedText($changedText)
  {
    $this->changedText = $changedText;
  }
  /** @return string */
  public function getChangedText()
  {
    return $this->changedText;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentProvenance[] */
  public function setProvenance($provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentProvenance[] */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta2DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /** @return GoogleCloudDocumentaiV1beta2DocumentTextAnchor */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
}

class GoogleCloudDocumentaiV1beta2GcsDestination extends \Google\Model
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

class GoogleCloudDocumentaiV1beta2GcsSource extends \Google\Model
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

class GoogleCloudDocumentaiV1beta2InputConfig extends \Google\Model
{
  /** @var string */
  public $contents;
  /** @var GoogleCloudDocumentaiV1beta2GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudDocumentaiV1beta2GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param string */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string */
  public function getContents()
  {
    return $this->contents;
  }
  /** @param GoogleCloudDocumentaiV1beta2GcsSource */
  public function setGcsSource(GoogleCloudDocumentaiV1beta2GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudDocumentaiV1beta2GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class GoogleCloudDocumentaiV1beta2NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1beta2OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta2OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta2GcsDestination */
  public $gcsDestination;
  /** @var int */
  public $pagesPerShard;
  protected $gcsDestinationType = GoogleCloudDocumentaiV1beta2GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2GcsDestination */
  public function setGcsDestination(GoogleCloudDocumentaiV1beta2GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDocumentaiV1beta2GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param int */
  public function setPagesPerShard($pagesPerShard)
  {
    $this->pagesPerShard = $pagesPerShard;
  }
  /** @return int */
  public function getPagesPerShard()
  {
    return $this->pagesPerShard;
  }
}

class GoogleCloudDocumentaiV1beta2ProcessDocumentResponse extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta2InputConfig */
  public $inputConfig;
  /** @var GoogleCloudDocumentaiV1beta2OutputConfig */
  public $outputConfig;
  protected $inputConfigType = GoogleCloudDocumentaiV1beta2InputConfig::class;
  protected $inputConfigDataType = '';
  protected $outputConfigType = GoogleCloudDocumentaiV1beta2OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudDocumentaiV1beta2InputConfig */
  public function setInputConfig(GoogleCloudDocumentaiV1beta2InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudDocumentaiV1beta2InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudDocumentaiV1beta2OutputConfig */
  public function setOutputConfig(GoogleCloudDocumentaiV1beta2OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDocumentaiV1beta2OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudDocumentaiV1beta2Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudDocumentaiV1beta3BatchProcessMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus[] */
  public $individualProcessStatuses;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'individualProcessStatuses';
  protected $individualProcessStatusesType = GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus::class;
  protected $individualProcessStatusesDataType = 'array';
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
  /** @param GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus[] */
  public function setIndividualProcessStatuses($individualProcessStatuses)
  {
    $this->individualProcessStatuses = $individualProcessStatuses;
  }
  /** @return GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus[] */
  public function getIndividualProcessStatuses()
  {
    return $this->individualProcessStatuses;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus extends \Google\Model
{
  /** @var string */
  public $humanReviewOperation;
  /** @var GoogleCloudDocumentaiV1beta3HumanReviewStatus */
  public $humanReviewStatus;
  /** @var string */
  public $inputGcsSource;
  /** @var string */
  public $outputGcsDestination;
  /** @var GoogleRpcStatus */
  public $status;
  protected $humanReviewStatusType = GoogleCloudDocumentaiV1beta3HumanReviewStatus::class;
  protected $humanReviewStatusDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setHumanReviewOperation($humanReviewOperation)
  {
    $this->humanReviewOperation = $humanReviewOperation;
  }
  /** @return string */
  public function getHumanReviewOperation()
  {
    return $this->humanReviewOperation;
  }
  /** @param GoogleCloudDocumentaiV1beta3HumanReviewStatus */
  public function setHumanReviewStatus(GoogleCloudDocumentaiV1beta3HumanReviewStatus $humanReviewStatus)
  {
    $this->humanReviewStatus = $humanReviewStatus;
  }
  /** @return GoogleCloudDocumentaiV1beta3HumanReviewStatus */
  public function getHumanReviewStatus()
  {
    return $this->humanReviewStatus;
  }
  /** @param string */
  public function setInputGcsSource($inputGcsSource)
  {
    $this->inputGcsSource = $inputGcsSource;
  }
  /** @return string */
  public function getInputGcsSource()
  {
    return $this->inputGcsSource;
  }
  /** @param string */
  public function setOutputGcsDestination($outputGcsDestination)
  {
    $this->outputGcsDestination = $outputGcsDestination;
  }
  /** @return string */
  public function getOutputGcsDestination()
  {
    return $this->outputGcsDestination;
  }
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
}

class GoogleCloudDocumentaiV1beta3BatchProcessResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1beta3CommonOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resource;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;

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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta3DeleteProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3DeleteProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3DeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3DeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1beta3DisableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3DisableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1beta3EnableProcessorMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3EnableProcessorResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionResponse extends \Google\Model
{
  /** @var string */
  public $evaluation;

  /** @param string */
  public function setEvaluation($evaluation)
  {
    $this->evaluation = $evaluation;
  }
  /** @return string */
  public function getEvaluation()
  {
    return $this->evaluation;
  }
}

class GoogleCloudDocumentaiV1beta3HumanReviewStatus extends \Google\Model
{
  /** @var string */
  public $humanReviewOperation;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;

  /** @param string */
  public function setHumanReviewOperation($humanReviewOperation)
  {
    $this->humanReviewOperation = $humanReviewOperation;
  }
  /** @return string */
  public function getHumanReviewOperation()
  {
    return $this->humanReviewOperation;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

class GoogleCloudDocumentaiV1beta3ReviewDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var string */
  public $createTime;
  /** @var string */
  public $questionId;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
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
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /** @return string */
  public function getQuestionId()
  {
    return $this->questionId;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class GoogleCloudDocumentaiV1beta3ReviewDocumentResponse extends \Google\Model
{
  /** @var string */
  public $gcsDestination;
  /** @var string */
  public $rejectionReason;
  /** @var string */
  public $state;

  /** @param string */
  public function setGcsDestination($gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return string */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param string */
  public function setRejectionReason($rejectionReason)
  {
    $this->rejectionReason = $rejectionReason;
  }
  /** @return string */
  public function getRejectionReason()
  {
    return $this->rejectionReason;
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

class GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  /** @var GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public $testDatasetValidation;
  /** @var GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public $trainingDatasetValidation;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  protected $testDatasetValidationType = GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $testDatasetValidationDataType = '';
  protected $trainingDatasetValidationType = GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $trainingDatasetValidationDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /** @param GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function setTestDatasetValidation(GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation $testDatasetValidation)
  {
    $this->testDatasetValidation = $testDatasetValidation;
  }
  /** @return GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function getTestDatasetValidation()
  {
    return $this->testDatasetValidation;
  }
  /** @param GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function setTrainingDatasetValidation(GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation $trainingDatasetValidation)
  {
    $this->trainingDatasetValidation = $trainingDatasetValidation;
  }
  /** @return GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation */
  public function getTrainingDatasetValidation()
  {
    return $this->trainingDatasetValidation;
  }
}

class GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation extends \Google\Collection
{
  /** @var int */
  public $datasetErrorCount;
  /** @var GoogleRpcStatus[] */
  public $datasetErrors;
  /** @var int */
  public $documentErrorCount;
  /** @var GoogleRpcStatus[] */
  public $documentErrors;
  protected $collection_key = 'documentErrors';
  protected $datasetErrorsType = GoogleRpcStatus::class;
  protected $datasetErrorsDataType = 'array';
  protected $documentErrorsType = GoogleRpcStatus::class;
  protected $documentErrorsDataType = 'array';
  /** @param int */
  public function setDatasetErrorCount($datasetErrorCount)
  {
    $this->datasetErrorCount = $datasetErrorCount;
  }
  /** @return int */
  public function getDatasetErrorCount()
  {
    return $this->datasetErrorCount;
  }
  /** @param GoogleRpcStatus[] */
  public function setDatasetErrors($datasetErrors)
  {
    $this->datasetErrors = $datasetErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getDatasetErrors()
  {
    return $this->datasetErrors;
  }
  /** @param int */
  public function setDocumentErrorCount($documentErrorCount)
  {
    $this->documentErrorCount = $documentErrorCount;
  }
  /** @return int */
  public function getDocumentErrorCount()
  {
    return $this->documentErrorCount;
  }
  /** @param GoogleRpcStatus[] */
  public function setDocumentErrors($documentErrors)
  {
    $this->documentErrors = $documentErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getDocumentErrors()
  {
    return $this->documentErrors;
  }
}

class GoogleCloudDocumentaiV1beta3TrainProcessorVersionResponse extends \Google\Model
{
  /** @var string */
  public $processorVersion;

  /** @param string */
  public function setProcessorVersion($processorVersion)
  {
    $this->processorVersion = $processorVersion;
  }
  /** @return string */
  public function getProcessorVersion()
  {
    return $this->processorVersion;
  }
}

class GoogleCloudDocumentaiV1beta3UndeployProcessorVersionMetadata extends \Google\Model
{
  /** @var GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /** @param GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function setCommonMetadata(GoogleCloudDocumentaiV1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /** @return GoogleCloudDocumentaiV1beta3CommonOperationMetadata */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
}

class GoogleCloudDocumentaiV1beta3UndeployProcessorVersionResponse extends \Google\Model
{
}

class GoogleCloudLocationListLocationsResponse extends \Google\Collection
{
  /** @var GoogleCloudLocationLocation[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = GoogleCloudLocationLocation::class;
  protected $locationsDataType = 'array';
  /** @param GoogleCloudLocationLocation[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudLocationLocation[] */
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

class GoogleCloudLocationLocation extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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

class GoogleTypeColor extends \Google\Model
{
  /** @var float */
  public $alpha;
  /** @var float */
  public $blue;
  /** @var float */
  public $green;
  /** @var float */
  public $red;

  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
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

class GoogleTypeDateTime extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $month;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;
  /** @var GoogleTypeTimeZone */
  public $timeZone;
  /** @var string */
  public $utcOffset;
  /** @var int */
  public $year;
  protected $timeZoneType = GoogleTypeTimeZone::class;
  protected $timeZoneDataType = '';
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
  /** @param GoogleTypeTimeZone */
  public function setTimeZone(GoogleTypeTimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return GoogleTypeTimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /** @return string */
  public function getUtcOffset()
  {
    return $this->utcOffset;
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

class GoogleTypeMoney extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $nanos;
  /** @var string */
  public $units;

  /** @param string */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
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
  /** @param string */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string */
  public function getUnits()
  {
    return $this->units;
  }
}

class GoogleTypePostalAddress extends \Google\Collection
{
  /** @var string[] */
  public $addressLines;
  /** @var string */
  public $administrativeArea;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organization;
  /** @var string */
  public $postalCode;
  /** @var string[] */
  public $recipients;
  /** @var string */
  public $regionCode;
  /** @var int */
  public $revision;
  /** @var string */
  public $sortingCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'recipients';
  /** @param string[] */
  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  /** @return string[] */
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  /** @param string */
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  /** @return string */
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /** @return string */
  public function getLocality()
  {
    return $this->locality;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  /** @param string[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return string[] */
  public function getRecipients()
  {
    return $this->recipients;
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
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  /** @return string */
  public function getSortingCode()
  {
    return $this->sortingCode;
  }
  /** @param string */
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  /** @return string */
  public function getSublocality()
  {
    return $this->sublocality;
  }
}

class GoogleTypeTimeZone extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $version;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsMetadataIndividualBatchDeleteStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchDeleteDocumentsResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsMetadataIndividualBatchMoveStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3BatchMoveDocumentsResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3CreateLabelerPoolOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3CreateLabelerPoolOperationMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeleteDataLabelingJobOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeleteDataLabelingJobOperationMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeleteLabelerPoolOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeleteLabelerPoolOperationMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeleteProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeleteProcessorMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeleteProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeleteProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DeployProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3DisableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DisableProcessorMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3DisableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DisableProcessorResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3DocumentId::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DocumentId');
class_alias(GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3DocumentIdGCSManagedDocumentId');
class_alias(GoogleCloudDocumentaiUiv1beta3EnableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EnableProcessorMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3EnableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EnableProcessorResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataIndividualExportStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportDocumentsMetadataSplitExportStat');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportDocumentsResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ExportProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataImportConfigValidationResult');
class_alias(GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ImportDocumentsMetadataIndividualImportStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3ImportDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ImportDocumentsResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataDatasetResyncStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ResyncDatasetMetadataIndividualDocumentResyncStatus');
class_alias(GoogleCloudDocumentaiUiv1beta3ResyncDatasetResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ResyncDatasetResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3RevisionReference::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3RevisionReference');
class_alias(GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3SetDefaultProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation');
class_alias(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3UndeployProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiUiv1beta3UpdateDatasetOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3UpdateDatasetOperationMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3UpdateHumanReviewConfigMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3UpdateHumanReviewConfigMetadata');
class_alias(GoogleCloudDocumentaiUiv1beta3UpdateLabelerPoolOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3UpdateLabelerPoolOperationMetadata');
class_alias(GoogleCloudDocumentaiV1Barcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1Barcode');
class_alias(GoogleCloudDocumentaiV1BatchDocumentsInputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BatchDocumentsInputConfig');
class_alias(GoogleCloudDocumentaiV1BatchProcessMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BatchProcessMetadata');
class_alias(GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BatchProcessMetadataIndividualProcessStatus');
class_alias(GoogleCloudDocumentaiV1BatchProcessRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BatchProcessRequest');
class_alias(GoogleCloudDocumentaiV1BatchProcessResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BatchProcessResponse');
class_alias(GoogleCloudDocumentaiV1BoundingPoly::class, 'Google_Service_Document_GoogleCloudDocumentaiV1BoundingPoly');
class_alias(GoogleCloudDocumentaiV1CommonOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1CommonOperationMetadata');
class_alias(GoogleCloudDocumentaiV1DeleteProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DeleteProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1DeleteProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DeleteProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1DeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1DeployProcessorVersionRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DeployProcessorVersionRequest');
class_alias(GoogleCloudDocumentaiV1DeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DeployProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1DisableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DisableProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1DisableProcessorRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DisableProcessorRequest');
class_alias(GoogleCloudDocumentaiV1DisableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DisableProcessorResponse');
class_alias(GoogleCloudDocumentaiV1Document::class, 'Google_Service_Document_GoogleCloudDocumentaiV1Document');
class_alias(GoogleCloudDocumentaiV1DocumentEntity::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentEntity');
class_alias(GoogleCloudDocumentaiV1DocumentEntityNormalizedValue::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentEntityNormalizedValue');
class_alias(GoogleCloudDocumentaiV1DocumentEntityRelation::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentEntityRelation');
class_alias(GoogleCloudDocumentaiV1DocumentOutputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentOutputConfig');
class_alias(GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentOutputConfigGcsOutputConfig');
class_alias(GoogleCloudDocumentaiV1DocumentPage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPage');
class_alias(GoogleCloudDocumentaiV1DocumentPageAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageAnchor');
class_alias(GoogleCloudDocumentaiV1DocumentPageAnchorPageRef::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageAnchorPageRef');
class_alias(GoogleCloudDocumentaiV1DocumentPageBlock::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageBlock');
class_alias(GoogleCloudDocumentaiV1DocumentPageDetectedBarcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageDetectedBarcode');
class_alias(GoogleCloudDocumentaiV1DocumentPageDetectedLanguage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageDetectedLanguage');
class_alias(GoogleCloudDocumentaiV1DocumentPageDimension::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageDimension');
class_alias(GoogleCloudDocumentaiV1DocumentPageFormField::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageFormField');
class_alias(GoogleCloudDocumentaiV1DocumentPageImage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageImage');
class_alias(GoogleCloudDocumentaiV1DocumentPageImageQualityScores::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageImageQualityScores');
class_alias(GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageImageQualityScoresDetectedDefect');
class_alias(GoogleCloudDocumentaiV1DocumentPageLayout::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageLayout');
class_alias(GoogleCloudDocumentaiV1DocumentPageLine::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageLine');
class_alias(GoogleCloudDocumentaiV1DocumentPageMatrix::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageMatrix');
class_alias(GoogleCloudDocumentaiV1DocumentPageParagraph::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageParagraph');
class_alias(GoogleCloudDocumentaiV1DocumentPageSymbol::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageSymbol');
class_alias(GoogleCloudDocumentaiV1DocumentPageTable::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageTable');
class_alias(GoogleCloudDocumentaiV1DocumentPageTableTableCell::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageTableTableCell');
class_alias(GoogleCloudDocumentaiV1DocumentPageTableTableRow::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageTableTableRow');
class_alias(GoogleCloudDocumentaiV1DocumentPageToken::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageToken');
class_alias(GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageTokenDetectedBreak');
class_alias(GoogleCloudDocumentaiV1DocumentPageVisualElement::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentPageVisualElement');
class_alias(GoogleCloudDocumentaiV1DocumentProvenance::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentProvenance');
class_alias(GoogleCloudDocumentaiV1DocumentProvenanceParent::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentProvenanceParent');
class_alias(GoogleCloudDocumentaiV1DocumentRevision::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentRevision');
class_alias(GoogleCloudDocumentaiV1DocumentRevisionHumanReview::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentRevisionHumanReview');
class_alias(GoogleCloudDocumentaiV1DocumentSchema::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentSchema');
class_alias(GoogleCloudDocumentaiV1DocumentSchemaEntityType::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentSchemaEntityType');
class_alias(GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentSchemaEntityTypeEnumValues');
class_alias(GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentSchemaEntityTypeProperty');
class_alias(GoogleCloudDocumentaiV1DocumentSchemaMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentSchemaMetadata');
class_alias(GoogleCloudDocumentaiV1DocumentShardInfo::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentShardInfo');
class_alias(GoogleCloudDocumentaiV1DocumentStyle::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentStyle');
class_alias(GoogleCloudDocumentaiV1DocumentStyleFontSize::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentStyleFontSize');
class_alias(GoogleCloudDocumentaiV1DocumentTextAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentTextAnchor');
class_alias(GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentTextAnchorTextSegment');
class_alias(GoogleCloudDocumentaiV1DocumentTextChange::class, 'Google_Service_Document_GoogleCloudDocumentaiV1DocumentTextChange');
class_alias(GoogleCloudDocumentaiV1EnableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1EnableProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1EnableProcessorRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1EnableProcessorRequest');
class_alias(GoogleCloudDocumentaiV1EnableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1EnableProcessorResponse');
class_alias(GoogleCloudDocumentaiV1FetchProcessorTypesResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1FetchProcessorTypesResponse');
class_alias(GoogleCloudDocumentaiV1GcsDocument::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GcsDocument');
class_alias(GoogleCloudDocumentaiV1GcsDocuments::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GcsDocuments');
class_alias(GoogleCloudDocumentaiV1GcsPrefix::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GcsPrefix');
class_alias(GoogleCloudDocumentaiV1HumanReviewStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiV1HumanReviewStatus');
class_alias(GoogleCloudDocumentaiV1ListProcessorTypesResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ListProcessorTypesResponse');
class_alias(GoogleCloudDocumentaiV1ListProcessorVersionsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ListProcessorVersionsResponse');
class_alias(GoogleCloudDocumentaiV1ListProcessorsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ListProcessorsResponse');
class_alias(GoogleCloudDocumentaiV1NormalizedVertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1NormalizedVertex');
class_alias(GoogleCloudDocumentaiV1ProcessRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessRequest');
class_alias(GoogleCloudDocumentaiV1ProcessResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessResponse');
class_alias(GoogleCloudDocumentaiV1Processor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1Processor');
class_alias(GoogleCloudDocumentaiV1ProcessorType::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessorType');
class_alias(GoogleCloudDocumentaiV1ProcessorTypeLocationInfo::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessorTypeLocationInfo');
class_alias(GoogleCloudDocumentaiV1ProcessorVersion::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessorVersion');
class_alias(GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ProcessorVersionDeprecationInfo');
class_alias(GoogleCloudDocumentaiV1RawDocument::class, 'Google_Service_Document_GoogleCloudDocumentaiV1RawDocument');
class_alias(GoogleCloudDocumentaiV1ReviewDocumentOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ReviewDocumentOperationMetadata');
class_alias(GoogleCloudDocumentaiV1ReviewDocumentRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ReviewDocumentRequest');
class_alias(GoogleCloudDocumentaiV1ReviewDocumentResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1ReviewDocumentResponse');
class_alias(GoogleCloudDocumentaiV1SetDefaultProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1SetDefaultProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1SetDefaultProcessorVersionRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1SetDefaultProcessorVersionRequest');
class_alias(GoogleCloudDocumentaiV1SetDefaultProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1SetDefaultProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1UndeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1UndeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1UndeployProcessorVersionRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1UndeployProcessorVersionRequest');
class_alias(GoogleCloudDocumentaiV1UndeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1UndeployProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1Vertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1Vertex');
class_alias(GoogleCloudDocumentaiV1alpha1AnalyzeHitlDataMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1alpha1AnalyzeHitlDataMetadata');
class_alias(GoogleCloudDocumentaiV1alpha1CommonOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1alpha1CommonOperationMetadata');
class_alias(GoogleCloudDocumentaiV1beta1Barcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1Barcode');
class_alias(GoogleCloudDocumentaiV1beta1BatchProcessDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1BatchProcessDocumentsResponse');
class_alias(GoogleCloudDocumentaiV1beta1BoundingPoly::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1BoundingPoly');
class_alias(GoogleCloudDocumentaiV1beta1Document::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1Document');
class_alias(GoogleCloudDocumentaiV1beta1DocumentEntity::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentEntity');
class_alias(GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentEntityNormalizedValue');
class_alias(GoogleCloudDocumentaiV1beta1DocumentEntityRelation::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentEntityRelation');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPage');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageAnchor');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageAnchorPageRef');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageBlock::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageBlock');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageDetectedBarcode');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageDetectedLanguage');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageDimension::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageDimension');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageFormField::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageFormField');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageImage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageImage');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScores');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageImageQualityScoresDetectedDefect');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageLayout::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageLayout');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageLine::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageLine');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageMatrix::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageMatrix');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageParagraph::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageParagraph');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageSymbol::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageSymbol');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageTable::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageTable');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageTableTableCell');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageTableTableRow');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageToken::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageToken');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageTokenDetectedBreak');
class_alias(GoogleCloudDocumentaiV1beta1DocumentPageVisualElement::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentPageVisualElement');
class_alias(GoogleCloudDocumentaiV1beta1DocumentProvenance::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentProvenance');
class_alias(GoogleCloudDocumentaiV1beta1DocumentProvenanceParent::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentProvenanceParent');
class_alias(GoogleCloudDocumentaiV1beta1DocumentRevision::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentRevision');
class_alias(GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentRevisionHumanReview');
class_alias(GoogleCloudDocumentaiV1beta1DocumentShardInfo::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentShardInfo');
class_alias(GoogleCloudDocumentaiV1beta1DocumentStyle::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentStyle');
class_alias(GoogleCloudDocumentaiV1beta1DocumentStyleFontSize::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentStyleFontSize');
class_alias(GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentTextAnchor');
class_alias(GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentTextAnchorTextSegment');
class_alias(GoogleCloudDocumentaiV1beta1DocumentTextChange::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentTextChange');
class_alias(GoogleCloudDocumentaiV1beta1GcsDestination::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1GcsDestination');
class_alias(GoogleCloudDocumentaiV1beta1GcsSource::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1GcsSource');
class_alias(GoogleCloudDocumentaiV1beta1InputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1InputConfig');
class_alias(GoogleCloudDocumentaiV1beta1NormalizedVertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1NormalizedVertex');
class_alias(GoogleCloudDocumentaiV1beta1OperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1OperationMetadata');
class_alias(GoogleCloudDocumentaiV1beta1OutputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1OutputConfig');
class_alias(GoogleCloudDocumentaiV1beta1ProcessDocumentResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1ProcessDocumentResponse');
class_alias(GoogleCloudDocumentaiV1beta1Vertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1Vertex');
class_alias(GoogleCloudDocumentaiV1beta2Barcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2Barcode');
class_alias(GoogleCloudDocumentaiV1beta2BatchProcessDocumentsResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2BatchProcessDocumentsResponse');
class_alias(GoogleCloudDocumentaiV1beta2BoundingPoly::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2BoundingPoly');
class_alias(GoogleCloudDocumentaiV1beta2Document::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2Document');
class_alias(GoogleCloudDocumentaiV1beta2DocumentEntity::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentEntity');
class_alias(GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue');
class_alias(GoogleCloudDocumentaiV1beta2DocumentEntityRelation::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentEntityRelation');
class_alias(GoogleCloudDocumentaiV1beta2DocumentLabel::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentLabel');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPage');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageAnchor');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageAnchorPageRef');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageBlock::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageBlock');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageDetectedBarcode');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageDetectedLanguage');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageDimension::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageDimension');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageFormField::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageFormField');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageImage::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageImage');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScores');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageImageQualityScoresDetectedDefect');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageLayout::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageLayout');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageLine::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageLine');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageMatrix::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageMatrix');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageParagraph::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageParagraph');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageSymbol::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageSymbol');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageTable::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageTable');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageTableTableCell');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageTableTableRow');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageToken::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageToken');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageTokenDetectedBreak');
class_alias(GoogleCloudDocumentaiV1beta2DocumentPageVisualElement::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentPageVisualElement');
class_alias(GoogleCloudDocumentaiV1beta2DocumentProvenance::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentProvenance');
class_alias(GoogleCloudDocumentaiV1beta2DocumentProvenanceParent::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentProvenanceParent');
class_alias(GoogleCloudDocumentaiV1beta2DocumentRevision::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentRevision');
class_alias(GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentRevisionHumanReview');
class_alias(GoogleCloudDocumentaiV1beta2DocumentShardInfo::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentShardInfo');
class_alias(GoogleCloudDocumentaiV1beta2DocumentStyle::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentStyle');
class_alias(GoogleCloudDocumentaiV1beta2DocumentStyleFontSize::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentStyleFontSize');
class_alias(GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentTextAnchor');
class_alias(GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentTextAnchorTextSegment');
class_alias(GoogleCloudDocumentaiV1beta2DocumentTextChange::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentTextChange');
class_alias(GoogleCloudDocumentaiV1beta2GcsDestination::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2GcsDestination');
class_alias(GoogleCloudDocumentaiV1beta2GcsSource::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2GcsSource');
class_alias(GoogleCloudDocumentaiV1beta2InputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2InputConfig');
class_alias(GoogleCloudDocumentaiV1beta2NormalizedVertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2NormalizedVertex');
class_alias(GoogleCloudDocumentaiV1beta2OperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2OperationMetadata');
class_alias(GoogleCloudDocumentaiV1beta2OutputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2OutputConfig');
class_alias(GoogleCloudDocumentaiV1beta2ProcessDocumentResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2ProcessDocumentResponse');
class_alias(GoogleCloudDocumentaiV1beta2Vertex::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2Vertex');
class_alias(GoogleCloudDocumentaiV1beta3BatchProcessMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadata');
class_alias(GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus');
class_alias(GoogleCloudDocumentaiV1beta3BatchProcessResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessResponse');
class_alias(GoogleCloudDocumentaiV1beta3CommonOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3CommonOperationMetadata');
class_alias(GoogleCloudDocumentaiV1beta3DeleteProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DeleteProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1beta3DeleteProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DeleteProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3DeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3DeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DeployProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1beta3DisableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DisableProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1beta3DisableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DisableProcessorResponse');
class_alias(GoogleCloudDocumentaiV1beta3EnableProcessorMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3EnableProcessorMetadata');
class_alias(GoogleCloudDocumentaiV1beta3EnableProcessorResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3EnableProcessorResponse');
class_alias(GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3EvaluateProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1beta3HumanReviewStatus::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3HumanReviewStatus');
class_alias(GoogleCloudDocumentaiV1beta3ReviewDocumentOperationMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3ReviewDocumentOperationMetadata');
class_alias(GoogleCloudDocumentaiV1beta3ReviewDocumentResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3ReviewDocumentResponse');
class_alias(GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3SetDefaultProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3TrainProcessorVersionMetadataDatasetValidation');
class_alias(GoogleCloudDocumentaiV1beta3TrainProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3TrainProcessorVersionResponse');
class_alias(GoogleCloudDocumentaiV1beta3UndeployProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3UndeployProcessorVersionMetadata');
class_alias(GoogleCloudDocumentaiV1beta3UndeployProcessorVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3UndeployProcessorVersionResponse');
class_alias(GoogleCloudLocationListLocationsResponse::class, 'Google_Service_Document_GoogleCloudLocationListLocationsResponse');
class_alias(GoogleCloudLocationLocation::class, 'Google_Service_Document_GoogleCloudLocationLocation');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Document_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Document_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Document_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Document_GoogleRpcStatus');
class_alias(GoogleTypeColor::class, 'Google_Service_Document_GoogleTypeColor');
class_alias(GoogleTypeDate::class, 'Google_Service_Document_GoogleTypeDate');
class_alias(GoogleTypeDateTime::class, 'Google_Service_Document_GoogleTypeDateTime');
class_alias(GoogleTypeMoney::class, 'Google_Service_Document_GoogleTypeMoney');
class_alias(GoogleTypePostalAddress::class, 'Google_Service_Document_GoogleTypePostalAddress');
class_alias(GoogleTypeTimeZone::class, 'Google_Service_Document_GoogleTypeTimeZone');
