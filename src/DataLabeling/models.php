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

namespace Google\Service\DataLabeling;

class GoogleCloudDatalabelingV1alpha1CreateInstructionMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $instruction;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1alpha1ExportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1alpha1ExportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $dataset;
  /** @var int */
  public $exportCount;
  /** @var GoogleCloudDatalabelingV1alpha1LabelStats */
  public $labelStats;
  /** @var GoogleCloudDatalabelingV1alpha1OutputConfig */
  public $outputConfig;
  /** @var int */
  public $totalCount;
  protected $labelStatsType = GoogleCloudDatalabelingV1alpha1LabelStats::class;
  protected $labelStatsDataType = '';
  protected $outputConfigType = GoogleCloudDatalabelingV1alpha1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  /** @param int */
  public function setExportCount($exportCount)
  {
    $this->exportCount = $exportCount;
  }
  /** @return int */
  public function getExportCount()
  {
    return $this->exportCount;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelStats */
  public function setLabelStats(GoogleCloudDatalabelingV1alpha1LabelStats $labelStats)
  {
    $this->labelStats = $labelStats;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelStats */
  public function getLabelStats()
  {
    return $this->labelStats;
  }
  /** @param GoogleCloudDatalabelingV1alpha1OutputConfig */
  public function setOutputConfig(GoogleCloudDatalabelingV1alpha1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
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
}

class GoogleCloudDatalabelingV1alpha1GcsDestination extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $outputUri;

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
  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudDatalabelingV1alpha1GcsFolderDestination extends \Google\Model
{
  /** @var string */
  public $outputFolderUri;

  /** @param string */
  public function setOutputFolderUri($outputFolderUri)
  {
    $this->outputFolderUri = $outputFolderUri;
  }
  /** @return string */
  public function getOutputFolderUri()
  {
    return $this->outputFolderUri;
  }
}

class GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig extends \Google\Collection
{
  /** @var string */
  public $annotatedDatasetDescription;
  /** @var string */
  public $annotatedDatasetDisplayName;
  /** @var string[] */
  public $contributorEmails;
  /** @var string */
  public $instruction;
  /** @var string */
  public $labelGroup;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $questionDuration;
  /** @var int */
  public $replicaCount;
  /** @var string */
  public $userEmailAddress;
  protected $collection_key = 'contributorEmails';
  /** @param string */
  public function setAnnotatedDatasetDescription($annotatedDatasetDescription)
  {
    $this->annotatedDatasetDescription = $annotatedDatasetDescription;
  }
  /** @return string */
  public function getAnnotatedDatasetDescription()
  {
    return $this->annotatedDatasetDescription;
  }
  /** @param string */
  public function setAnnotatedDatasetDisplayName($annotatedDatasetDisplayName)
  {
    $this->annotatedDatasetDisplayName = $annotatedDatasetDisplayName;
  }
  /** @return string */
  public function getAnnotatedDatasetDisplayName()
  {
    return $this->annotatedDatasetDisplayName;
  }
  /** @param string[] */
  public function setContributorEmails($contributorEmails)
  {
    $this->contributorEmails = $contributorEmails;
  }
  /** @return string[] */
  public function getContributorEmails()
  {
    return $this->contributorEmails;
  }
  /** @param string */
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param string */
  public function setLabelGroup($labelGroup)
  {
    $this->labelGroup = $labelGroup;
  }
  /** @return string */
  public function getLabelGroup()
  {
    return $this->labelGroup;
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
  public function setQuestionDuration($questionDuration)
  {
    $this->questionDuration = $questionDuration;
  }
  /** @return string */
  public function getQuestionDuration()
  {
    return $this->questionDuration;
  }
  /** @param int */
  public function setReplicaCount($replicaCount)
  {
    $this->replicaCount = $replicaCount;
  }
  /** @return int */
  public function getReplicaCount()
  {
    return $this->replicaCount;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1alpha1ImportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1alpha1ImportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var int */
  public $importCount;
  /** @var int */
  public $totalCount;

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
  /** @param int */
  public function setImportCount($importCount)
  {
    $this->importCount = $importCount;
  }
  /** @return int */
  public function getImportCount()
  {
    return $this->importCount;
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
}

class GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata */
  public $imageBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata */
  public $imageBoundingPolyDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata */
  public $imageClassificationDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public $imageOrientedBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata */
  public $imagePolylineDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata */
  public $imageSegmentationDetails;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata */
  public $textClassificationDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata */
  public $textEntityExtractionDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata */
  public $videoClassificationDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata */
  public $videoEventDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata */
  public $videoObjectDetectionDetails;
  /** @var GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata */
  public $videoObjectTrackingDetails;
  protected $collection_key = 'partialFailures';
  protected $imageBoundingBoxDetailsType = GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata::class;
  protected $imageBoundingBoxDetailsDataType = '';
  protected $imageBoundingPolyDetailsType = GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata::class;
  protected $imageBoundingPolyDetailsDataType = '';
  protected $imageClassificationDetailsType = GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata::class;
  protected $imageClassificationDetailsDataType = '';
  protected $imageOrientedBoundingBoxDetailsType = GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata::class;
  protected $imageOrientedBoundingBoxDetailsDataType = '';
  protected $imagePolylineDetailsType = GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata::class;
  protected $imagePolylineDetailsDataType = '';
  protected $imageSegmentationDetailsType = GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata::class;
  protected $imageSegmentationDetailsDataType = '';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  protected $textClassificationDetailsType = GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata::class;
  protected $textClassificationDetailsDataType = '';
  protected $textEntityExtractionDetailsType = GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata::class;
  protected $textEntityExtractionDetailsDataType = '';
  protected $videoClassificationDetailsType = GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata::class;
  protected $videoClassificationDetailsDataType = '';
  protected $videoEventDetailsType = GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata::class;
  protected $videoEventDetailsDataType = '';
  protected $videoObjectDetectionDetailsType = GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata::class;
  protected $videoObjectDetectionDetailsDataType = '';
  protected $videoObjectTrackingDetailsType = GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata::class;
  protected $videoObjectTrackingDetailsDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata */
  public function setImageBoundingBoxDetails(GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata $imageBoundingBoxDetails)
  {
    $this->imageBoundingBoxDetails = $imageBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata */
  public function getImageBoundingBoxDetails()
  {
    return $this->imageBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata */
  public function setImageBoundingPolyDetails(GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata $imageBoundingPolyDetails)
  {
    $this->imageBoundingPolyDetails = $imageBoundingPolyDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata */
  public function getImageBoundingPolyDetails()
  {
    return $this->imageBoundingPolyDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata */
  public function setImageClassificationDetails(GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata $imageClassificationDetails)
  {
    $this->imageClassificationDetails = $imageClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata */
  public function getImageClassificationDetails()
  {
    return $this->imageClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function setImageOrientedBoundingBoxDetails(GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata $imageOrientedBoundingBoxDetails)
  {
    $this->imageOrientedBoundingBoxDetails = $imageOrientedBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function getImageOrientedBoundingBoxDetails()
  {
    return $this->imageOrientedBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata */
  public function setImagePolylineDetails(GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata $imagePolylineDetails)
  {
    $this->imagePolylineDetails = $imagePolylineDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata */
  public function getImagePolylineDetails()
  {
    return $this->imagePolylineDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata */
  public function setImageSegmentationDetails(GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata $imageSegmentationDetails)
  {
    $this->imageSegmentationDetails = $imageSegmentationDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata */
  public function getImageSegmentationDetails()
  {
    return $this->imageSegmentationDetails;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata */
  public function setTextClassificationDetails(GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata $textClassificationDetails)
  {
    $this->textClassificationDetails = $textClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata */
  public function getTextClassificationDetails()
  {
    return $this->textClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata */
  public function setTextEntityExtractionDetails(GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata $textEntityExtractionDetails)
  {
    $this->textEntityExtractionDetails = $textEntityExtractionDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata */
  public function getTextEntityExtractionDetails()
  {
    return $this->textEntityExtractionDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata */
  public function setVideoClassificationDetails(GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata $videoClassificationDetails)
  {
    $this->videoClassificationDetails = $videoClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata */
  public function getVideoClassificationDetails()
  {
    return $this->videoClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata */
  public function setVideoEventDetails(GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata $videoEventDetails)
  {
    $this->videoEventDetails = $videoEventDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata */
  public function getVideoEventDetails()
  {
    return $this->videoEventDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata */
  public function setVideoObjectDetectionDetails(GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata $videoObjectDetectionDetails)
  {
    $this->videoObjectDetectionDetails = $videoObjectDetectionDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata */
  public function getVideoObjectDetectionDetails()
  {
    return $this->videoObjectDetectionDetails;
  }
  /** @param GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata */
  public function setVideoObjectTrackingDetails(GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata $videoObjectTrackingDetails)
  {
    $this->videoObjectTrackingDetails = $videoObjectTrackingDetails;
  }
  /** @return GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata */
  public function getVideoObjectTrackingDetails()
  {
    return $this->videoObjectTrackingDetails;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelStats extends \Google\Model
{
  /** @var string[] */
  public $exampleCount;

  /** @param string[] */
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return string[] */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1alpha1OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1alpha1GcsDestination */
  public $gcsDestination;
  /** @var GoogleCloudDatalabelingV1alpha1GcsFolderDestination */
  public $gcsFolderDestination;
  protected $gcsDestinationType = GoogleCloudDatalabelingV1alpha1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $gcsFolderDestinationType = GoogleCloudDatalabelingV1alpha1GcsFolderDestination::class;
  protected $gcsFolderDestinationDataType = '';
  /** @param GoogleCloudDatalabelingV1alpha1GcsDestination */
  public function setGcsDestination(GoogleCloudDatalabelingV1alpha1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDatalabelingV1alpha1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param GoogleCloudDatalabelingV1alpha1GcsFolderDestination */
  public function setGcsFolderDestination(GoogleCloudDatalabelingV1alpha1GcsFolderDestination $gcsFolderDestination)
  {
    $this->gcsFolderDestination = $gcsFolderDestination;
  }
  /** @return GoogleCloudDatalabelingV1alpha1GcsFolderDestination */
  public function getGcsFolderDestination()
  {
    return $this->gcsFolderDestination;
  }
}

class GoogleCloudDatalabelingV1beta1AnnotatedDataset extends \Google\Collection
{
  /** @var string */
  public $annotationSource;
  /** @var string */
  public $annotationType;
  /** @var string[] */
  public $blockingResources;
  /** @var string */
  public $completedExampleCount;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $exampleCount;
  /** @var GoogleCloudDatalabelingV1beta1LabelStats */
  public $labelStats;
  /** @var GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata */
  public $metadata;
  /** @var string */
  public $name;
  protected $collection_key = 'blockingResources';
  protected $labelStatsType = GoogleCloudDatalabelingV1beta1LabelStats::class;
  protected $labelStatsDataType = '';
  protected $metadataType = GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setAnnotationSource($annotationSource)
  {
    $this->annotationSource = $annotationSource;
  }
  /** @return string */
  public function getAnnotationSource()
  {
    return $this->annotationSource;
  }
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param string[] */
  public function setBlockingResources($blockingResources)
  {
    $this->blockingResources = $blockingResources;
  }
  /** @return string[] */
  public function getBlockingResources()
  {
    return $this->blockingResources;
  }
  /** @param string */
  public function setCompletedExampleCount($completedExampleCount)
  {
    $this->completedExampleCount = $completedExampleCount;
  }
  /** @return string */
  public function getCompletedExampleCount()
  {
    return $this->completedExampleCount;
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
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return string */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelStats */
  public function setLabelStats(GoogleCloudDatalabelingV1beta1LabelStats $labelStats)
  {
    $this->labelStats = $labelStats;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelStats */
  public function getLabelStats()
  {
    return $this->labelStats;
  }
  /** @param GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata */
  public function setMetadata(GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata */
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

class GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public $boundingPolyConfig;
  /** @var GoogleCloudDatalabelingV1beta1EventConfig */
  public $eventConfig;
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $humanAnnotationConfig;
  /** @var GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public $imageClassificationConfig;
  /** @var GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public $objectDetectionConfig;
  /** @var GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public $objectTrackingConfig;
  /** @var GoogleCloudDatalabelingV1beta1PolylineConfig */
  public $polylineConfig;
  /** @var GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public $segmentationConfig;
  /** @var GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public $textClassificationConfig;
  /** @var GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public $textEntityExtractionConfig;
  /** @var GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public $videoClassificationConfig;
  protected $boundingPolyConfigType = GoogleCloudDatalabelingV1beta1BoundingPolyConfig::class;
  protected $boundingPolyConfigDataType = '';
  protected $eventConfigType = GoogleCloudDatalabelingV1beta1EventConfig::class;
  protected $eventConfigDataType = '';
  protected $humanAnnotationConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $humanAnnotationConfigDataType = '';
  protected $imageClassificationConfigType = GoogleCloudDatalabelingV1beta1ImageClassificationConfig::class;
  protected $imageClassificationConfigDataType = '';
  protected $objectDetectionConfigType = GoogleCloudDatalabelingV1beta1ObjectDetectionConfig::class;
  protected $objectDetectionConfigDataType = '';
  protected $objectTrackingConfigType = GoogleCloudDatalabelingV1beta1ObjectTrackingConfig::class;
  protected $objectTrackingConfigDataType = '';
  protected $polylineConfigType = GoogleCloudDatalabelingV1beta1PolylineConfig::class;
  protected $polylineConfigDataType = '';
  protected $segmentationConfigType = GoogleCloudDatalabelingV1beta1SegmentationConfig::class;
  protected $segmentationConfigDataType = '';
  protected $textClassificationConfigType = GoogleCloudDatalabelingV1beta1TextClassificationConfig::class;
  protected $textClassificationConfigDataType = '';
  protected $textEntityExtractionConfigType = GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig::class;
  protected $textEntityExtractionConfigDataType = '';
  protected $videoClassificationConfigType = GoogleCloudDatalabelingV1beta1VideoClassificationConfig::class;
  protected $videoClassificationConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function setBoundingPolyConfig(GoogleCloudDatalabelingV1beta1BoundingPolyConfig $boundingPolyConfig)
  {
    $this->boundingPolyConfig = $boundingPolyConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function getBoundingPolyConfig()
  {
    return $this->boundingPolyConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1EventConfig */
  public function setEventConfig(GoogleCloudDatalabelingV1beta1EventConfig $eventConfig)
  {
    $this->eventConfig = $eventConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1EventConfig */
  public function getEventConfig()
  {
    return $this->eventConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setHumanAnnotationConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $humanAnnotationConfig)
  {
    $this->humanAnnotationConfig = $humanAnnotationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getHumanAnnotationConfig()
  {
    return $this->humanAnnotationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function setImageClassificationConfig(GoogleCloudDatalabelingV1beta1ImageClassificationConfig $imageClassificationConfig)
  {
    $this->imageClassificationConfig = $imageClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function getImageClassificationConfig()
  {
    return $this->imageClassificationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public function setObjectDetectionConfig(GoogleCloudDatalabelingV1beta1ObjectDetectionConfig $objectDetectionConfig)
  {
    $this->objectDetectionConfig = $objectDetectionConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public function getObjectDetectionConfig()
  {
    return $this->objectDetectionConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public function setObjectTrackingConfig(GoogleCloudDatalabelingV1beta1ObjectTrackingConfig $objectTrackingConfig)
  {
    $this->objectTrackingConfig = $objectTrackingConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public function getObjectTrackingConfig()
  {
    return $this->objectTrackingConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1PolylineConfig */
  public function setPolylineConfig(GoogleCloudDatalabelingV1beta1PolylineConfig $polylineConfig)
  {
    $this->polylineConfig = $polylineConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1PolylineConfig */
  public function getPolylineConfig()
  {
    return $this->polylineConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public function setSegmentationConfig(GoogleCloudDatalabelingV1beta1SegmentationConfig $segmentationConfig)
  {
    $this->segmentationConfig = $segmentationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public function getSegmentationConfig()
  {
    return $this->segmentationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function setTextClassificationConfig(GoogleCloudDatalabelingV1beta1TextClassificationConfig $textClassificationConfig)
  {
    $this->textClassificationConfig = $textClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function getTextClassificationConfig()
  {
    return $this->textClassificationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public function setTextEntityExtractionConfig(GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig $textEntityExtractionConfig)
  {
    $this->textEntityExtractionConfig = $textEntityExtractionConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public function getTextEntityExtractionConfig()
  {
    return $this->textEntityExtractionConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public function setVideoClassificationConfig(GoogleCloudDatalabelingV1beta1VideoClassificationConfig $videoClassificationConfig)
  {
    $this->videoClassificationConfig = $videoClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public function getVideoClassificationConfig()
  {
    return $this->videoClassificationConfig;
  }
}

class GoogleCloudDatalabelingV1beta1Annotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationMetadata */
  public $annotationMetadata;
  /** @var string */
  public $annotationSentiment;
  /** @var string */
  public $annotationSource;
  /** @var GoogleCloudDatalabelingV1beta1AnnotationValue */
  public $annotationValue;
  /** @var string */
  public $name;
  protected $annotationMetadataType = GoogleCloudDatalabelingV1beta1AnnotationMetadata::class;
  protected $annotationMetadataDataType = '';
  protected $annotationValueType = GoogleCloudDatalabelingV1beta1AnnotationValue::class;
  protected $annotationValueDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationMetadata */
  public function setAnnotationMetadata(GoogleCloudDatalabelingV1beta1AnnotationMetadata $annotationMetadata)
  {
    $this->annotationMetadata = $annotationMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationMetadata */
  public function getAnnotationMetadata()
  {
    return $this->annotationMetadata;
  }
  /** @param string */
  public function setAnnotationSentiment($annotationSentiment)
  {
    $this->annotationSentiment = $annotationSentiment;
  }
  /** @return string */
  public function getAnnotationSentiment()
  {
    return $this->annotationSentiment;
  }
  /** @param string */
  public function setAnnotationSource($annotationSource)
  {
    $this->annotationSource = $annotationSource;
  }
  /** @return string */
  public function getAnnotationSource()
  {
    return $this->annotationSource;
  }
  /** @param GoogleCloudDatalabelingV1beta1AnnotationValue */
  public function setAnnotationValue(GoogleCloudDatalabelingV1beta1AnnotationValue $annotationValue)
  {
    $this->annotationValue = $annotationValue;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationValue */
  public function getAnnotationValue()
  {
    return $this->annotationValue;
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

class GoogleCloudDatalabelingV1beta1AnnotationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1OperatorMetadata */
  public $operatorMetadata;
  protected $operatorMetadataType = GoogleCloudDatalabelingV1beta1OperatorMetadata::class;
  protected $operatorMetadataDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1OperatorMetadata */
  public function setOperatorMetadata(GoogleCloudDatalabelingV1beta1OperatorMetadata $operatorMetadata)
  {
    $this->operatorMetadata = $operatorMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1OperatorMetadata */
  public function getOperatorMetadata()
  {
    return $this->operatorMetadata;
  }
}

class GoogleCloudDatalabelingV1beta1AnnotationSpec extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var int */
  public $index;

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
}

class GoogleCloudDatalabelingV1beta1AnnotationSpecSet extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public $annotationSpecs;
  /** @var string[] */
  public $blockingResources;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $collection_key = 'blockingResources';
  protected $annotationSpecsType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public function setAnnotationSpecs($annotationSpecs)
  {
    $this->annotationSpecs = $annotationSpecs;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public function getAnnotationSpecs()
  {
    return $this->annotationSpecs;
  }
  /** @param string[] */
  public function setBlockingResources($blockingResources)
  {
    $this->blockingResources = $blockingResources;
  }
  /** @return string[] */
  public function getBlockingResources()
  {
    return $this->blockingResources;
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
}

class GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig extends \Google\Model
{
  /** @var bool */
  public $allowMultiLabel;
  /** @var string */
  public $annotationSpecSet;

  /** @param bool */
  public function setAllowMultiLabel($allowMultiLabel)
  {
    $this->allowMultiLabel = $allowMultiLabel;
  }
  /** @return bool */
  public function getAllowMultiLabel()
  {
    return $this->allowMultiLabel;
  }
  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
}

class GoogleCloudDatalabelingV1beta1AnnotationValue extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation */
  public $imageBoundingPolyAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation */
  public $imageClassificationAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation */
  public $imagePolylineAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation */
  public $imageSegmentationAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1TextClassificationAnnotation */
  public $textClassificationAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation */
  public $textEntityExtractionAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation */
  public $videoClassificationAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1VideoEventAnnotation */
  public $videoEventAnnotation;
  /** @var GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation */
  public $videoObjectTrackingAnnotation;
  protected $imageBoundingPolyAnnotationType = GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation::class;
  protected $imageBoundingPolyAnnotationDataType = '';
  protected $imageClassificationAnnotationType = GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation::class;
  protected $imageClassificationAnnotationDataType = '';
  protected $imagePolylineAnnotationType = GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation::class;
  protected $imagePolylineAnnotationDataType = '';
  protected $imageSegmentationAnnotationType = GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation::class;
  protected $imageSegmentationAnnotationDataType = '';
  protected $textClassificationAnnotationType = GoogleCloudDatalabelingV1beta1TextClassificationAnnotation::class;
  protected $textClassificationAnnotationDataType = '';
  protected $textEntityExtractionAnnotationType = GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation::class;
  protected $textEntityExtractionAnnotationDataType = '';
  protected $videoClassificationAnnotationType = GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation::class;
  protected $videoClassificationAnnotationDataType = '';
  protected $videoEventAnnotationType = GoogleCloudDatalabelingV1beta1VideoEventAnnotation::class;
  protected $videoEventAnnotationDataType = '';
  protected $videoObjectTrackingAnnotationType = GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation::class;
  protected $videoObjectTrackingAnnotationDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation */
  public function setImageBoundingPolyAnnotation(GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation $imageBoundingPolyAnnotation)
  {
    $this->imageBoundingPolyAnnotation = $imageBoundingPolyAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation */
  public function getImageBoundingPolyAnnotation()
  {
    return $this->imageBoundingPolyAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation */
  public function setImageClassificationAnnotation(GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation $imageClassificationAnnotation)
  {
    $this->imageClassificationAnnotation = $imageClassificationAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation */
  public function getImageClassificationAnnotation()
  {
    return $this->imageClassificationAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation */
  public function setImagePolylineAnnotation(GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation $imagePolylineAnnotation)
  {
    $this->imagePolylineAnnotation = $imagePolylineAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation */
  public function getImagePolylineAnnotation()
  {
    return $this->imagePolylineAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation */
  public function setImageSegmentationAnnotation(GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation $imageSegmentationAnnotation)
  {
    $this->imageSegmentationAnnotation = $imageSegmentationAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation */
  public function getImageSegmentationAnnotation()
  {
    return $this->imageSegmentationAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextClassificationAnnotation */
  public function setTextClassificationAnnotation(GoogleCloudDatalabelingV1beta1TextClassificationAnnotation $textClassificationAnnotation)
  {
    $this->textClassificationAnnotation = $textClassificationAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextClassificationAnnotation */
  public function getTextClassificationAnnotation()
  {
    return $this->textClassificationAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation */
  public function setTextEntityExtractionAnnotation(GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation $textEntityExtractionAnnotation)
  {
    $this->textEntityExtractionAnnotation = $textEntityExtractionAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation */
  public function getTextEntityExtractionAnnotation()
  {
    return $this->textEntityExtractionAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation */
  public function setVideoClassificationAnnotation(GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation $videoClassificationAnnotation)
  {
    $this->videoClassificationAnnotation = $videoClassificationAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation */
  public function getVideoClassificationAnnotation()
  {
    return $this->videoClassificationAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoEventAnnotation */
  public function setVideoEventAnnotation(GoogleCloudDatalabelingV1beta1VideoEventAnnotation $videoEventAnnotation)
  {
    $this->videoEventAnnotation = $videoEventAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoEventAnnotation */
  public function getVideoEventAnnotation()
  {
    return $this->videoEventAnnotation;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation */
  public function setVideoObjectTrackingAnnotation(GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation $videoObjectTrackingAnnotation)
  {
    $this->videoObjectTrackingAnnotation = $videoObjectTrackingAnnotation;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation */
  public function getVideoObjectTrackingAnnotation()
  {
    return $this->videoObjectTrackingAnnotation;
  }
}

class GoogleCloudDatalabelingV1beta1Attempt extends \Google\Collection
{
  /** @var string */
  public $attemptTime;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setAttemptTime($attemptTime)
  {
    $this->attemptTime = $attemptTime;
  }
  /** @return string */
  public function getAttemptTime()
  {
    return $this->attemptTime;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1beta1BigQuerySource extends \Google\Model
{
  /** @var string */
  public $inputUri;

  /** @param string */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /** @return string */
  public function getInputUri()
  {
    return $this->inputUri;
  }
}

class GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions extends \Google\Model
{
  /** @var float */
  public $iouThreshold;

  /** @param float */
  public function setIouThreshold($iouThreshold)
  {
    $this->iouThreshold = $iouThreshold;
  }
  /** @return float */
  public function getIouThreshold()
  {
    return $this->iouThreshold;
  }
}

class GoogleCloudDatalabelingV1beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudDatalabelingV1beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudDatalabelingV1beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudDatalabelingV1beta1BoundingPolyConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;
  /** @var string */
  public $instructionMessage;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param string */
  public function setInstructionMessage($instructionMessage)
  {
    $this->instructionMessage = $instructionMessage;
  }
  /** @return string */
  public function getInstructionMessage()
  {
    return $this->instructionMessage;
  }
}

class GoogleCloudDatalabelingV1beta1ClassificationMetadata extends \Google\Model
{
  /** @var bool */
  public $isMultiLabel;

  /** @param bool */
  public function setIsMultiLabel($isMultiLabel)
  {
    $this->isMultiLabel = $isMultiLabel;
  }
  /** @return bool */
  public function getIsMultiLabel()
  {
    return $this->isMultiLabel;
  }
}

class GoogleCloudDatalabelingV1beta1ClassificationMetrics extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1ConfusionMatrix */
  public $confusionMatrix;
  /** @var GoogleCloudDatalabelingV1beta1PrCurve */
  public $prCurve;
  protected $confusionMatrixType = GoogleCloudDatalabelingV1beta1ConfusionMatrix::class;
  protected $confusionMatrixDataType = '';
  protected $prCurveType = GoogleCloudDatalabelingV1beta1PrCurve::class;
  protected $prCurveDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1ConfusionMatrix */
  public function setConfusionMatrix(GoogleCloudDatalabelingV1beta1ConfusionMatrix $confusionMatrix)
  {
    $this->confusionMatrix = $confusionMatrix;
  }
  /** @return GoogleCloudDatalabelingV1beta1ConfusionMatrix */
  public function getConfusionMatrix()
  {
    return $this->confusionMatrix;
  }
  /** @param GoogleCloudDatalabelingV1beta1PrCurve */
  public function setPrCurve(GoogleCloudDatalabelingV1beta1PrCurve $prCurve)
  {
    $this->prCurve = $prCurve;
  }
  /** @return GoogleCloudDatalabelingV1beta1PrCurve */
  public function getPrCurve()
  {
    return $this->prCurve;
  }
}

class GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry extends \Google\Model
{
  /** @var float */
  public $confidenceThreshold;
  /** @var float */
  public $f1Score;
  /** @var float */
  public $f1ScoreAt1;
  /** @var float */
  public $f1ScoreAt5;
  /** @var float */
  public $precision;
  /** @var float */
  public $precisionAt1;
  /** @var float */
  public $precisionAt5;
  /** @var float */
  public $recall;
  /** @var float */
  public $recallAt1;
  /** @var float */
  public $recallAt5;

  /** @param float */
  public function setConfidenceThreshold($confidenceThreshold)
  {
    $this->confidenceThreshold = $confidenceThreshold;
  }
  /** @return float */
  public function getConfidenceThreshold()
  {
    return $this->confidenceThreshold;
  }
  /** @param float */
  public function setF1Score($f1Score)
  {
    $this->f1Score = $f1Score;
  }
  /** @return float */
  public function getF1Score()
  {
    return $this->f1Score;
  }
  /** @param float */
  public function setF1ScoreAt1($f1ScoreAt1)
  {
    $this->f1ScoreAt1 = $f1ScoreAt1;
  }
  /** @return float */
  public function getF1ScoreAt1()
  {
    return $this->f1ScoreAt1;
  }
  /** @param float */
  public function setF1ScoreAt5($f1ScoreAt5)
  {
    $this->f1ScoreAt5 = $f1ScoreAt5;
  }
  /** @return float */
  public function getF1ScoreAt5()
  {
    return $this->f1ScoreAt5;
  }
  /** @param float */
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  /** @return float */
  public function getPrecision()
  {
    return $this->precision;
  }
  /** @param float */
  public function setPrecisionAt1($precisionAt1)
  {
    $this->precisionAt1 = $precisionAt1;
  }
  /** @return float */
  public function getPrecisionAt1()
  {
    return $this->precisionAt1;
  }
  /** @param float */
  public function setPrecisionAt5($precisionAt5)
  {
    $this->precisionAt5 = $precisionAt5;
  }
  /** @return float */
  public function getPrecisionAt5()
  {
    return $this->precisionAt5;
  }
  /** @param float */
  public function setRecall($recall)
  {
    $this->recall = $recall;
  }
  /** @return float */
  public function getRecall()
  {
    return $this->recall;
  }
  /** @param float */
  public function setRecallAt1($recallAt1)
  {
    $this->recallAt1 = $recallAt1;
  }
  /** @return float */
  public function getRecallAt1()
  {
    return $this->recallAt1;
  }
  /** @param float */
  public function setRecallAt5($recallAt5)
  {
    $this->recallAt5 = $recallAt5;
  }
  /** @return float */
  public function getRecallAt5()
  {
    return $this->recallAt5;
  }
}

class GoogleCloudDatalabelingV1beta1ConfusionMatrix extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Row[] */
  public $row;
  protected $collection_key = 'row';
  protected $rowType = GoogleCloudDatalabelingV1beta1Row::class;
  protected $rowDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Row[] */
  public function setRow($row)
  {
    $this->row = $row;
  }
  /** @return GoogleCloudDatalabelingV1beta1Row[] */
  public function getRow()
  {
    return $this->row;
  }
}

class GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var int */
  public $itemCount;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param int */
  public function setItemCount($itemCount)
  {
    $this->itemCount = $itemCount;
  }
  /** @return int */
  public function getItemCount()
  {
    return $this->itemCount;
  }
}

class GoogleCloudDatalabelingV1beta1CreateAnnotationSpecSetRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpecSet */
  public $annotationSpecSet;
  protected $annotationSpecSetType = GoogleCloudDatalabelingV1beta1AnnotationSpecSet::class;
  protected $annotationSpecSetDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpecSet */
  public function setAnnotationSpecSet(GoogleCloudDatalabelingV1beta1AnnotationSpecSet $annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpecSet */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
}

class GoogleCloudDatalabelingV1beta1CreateDatasetRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1Dataset */
  public $dataset;
  protected $datasetType = GoogleCloudDatalabelingV1beta1Dataset::class;
  protected $datasetDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1Dataset */
  public function setDataset(GoogleCloudDatalabelingV1beta1Dataset $dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return GoogleCloudDatalabelingV1beta1Dataset */
  public function getDataset()
  {
    return $this->dataset;
  }
}

class GoogleCloudDatalabelingV1beta1CreateEvaluationJobRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1EvaluationJob */
  public $job;
  protected $jobType = GoogleCloudDatalabelingV1beta1EvaluationJob::class;
  protected $jobDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1EvaluationJob */
  public function setJob(GoogleCloudDatalabelingV1beta1EvaluationJob $job)
  {
    $this->job = $job;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationJob */
  public function getJob()
  {
    return $this->job;
  }
}

class GoogleCloudDatalabelingV1beta1CreateInstructionMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $instruction;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1beta1CreateInstructionRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1Instruction */
  public $instruction;
  protected $instructionType = GoogleCloudDatalabelingV1beta1Instruction::class;
  protected $instructionDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1Instruction */
  public function setInstruction(GoogleCloudDatalabelingV1beta1Instruction $instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return GoogleCloudDatalabelingV1beta1Instruction */
  public function getInstruction()
  {
    return $this->instruction;
  }
}

class GoogleCloudDatalabelingV1beta1CsvInstruction extends \Google\Model
{
  /** @var string */
  public $gcsFileUri;

  /** @param string */
  public function setGcsFileUri($gcsFileUri)
  {
    $this->gcsFileUri = $gcsFileUri;
  }
  /** @return string */
  public function getGcsFileUri()
  {
    return $this->gcsFileUri;
  }
}

class GoogleCloudDatalabelingV1beta1DataItem extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1ImagePayload */
  public $imagePayload;
  /** @var string */
  public $name;
  /** @var GoogleCloudDatalabelingV1beta1TextPayload */
  public $textPayload;
  /** @var GoogleCloudDatalabelingV1beta1VideoPayload */
  public $videoPayload;
  protected $imagePayloadType = GoogleCloudDatalabelingV1beta1ImagePayload::class;
  protected $imagePayloadDataType = '';
  protected $textPayloadType = GoogleCloudDatalabelingV1beta1TextPayload::class;
  protected $textPayloadDataType = '';
  protected $videoPayloadType = GoogleCloudDatalabelingV1beta1VideoPayload::class;
  protected $videoPayloadDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1ImagePayload */
  public function setImagePayload(GoogleCloudDatalabelingV1beta1ImagePayload $imagePayload)
  {
    $this->imagePayload = $imagePayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImagePayload */
  public function getImagePayload()
  {
    return $this->imagePayload;
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
  /** @param GoogleCloudDatalabelingV1beta1TextPayload */
  public function setTextPayload(GoogleCloudDatalabelingV1beta1TextPayload $textPayload)
  {
    $this->textPayload = $textPayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextPayload */
  public function getTextPayload()
  {
    return $this->textPayload;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoPayload */
  public function setVideoPayload(GoogleCloudDatalabelingV1beta1VideoPayload $videoPayload)
  {
    $this->videoPayload = $videoPayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoPayload */
  public function getVideoPayload()
  {
    return $this->videoPayload;
  }
}

class GoogleCloudDatalabelingV1beta1Dataset extends \Google\Collection
{
  /** @var string[] */
  public $blockingResources;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataItemCount;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDatalabelingV1beta1InputConfig[] */
  public $inputConfigs;
  /** @var string */
  public $lastMigrateTime;
  /** @var string */
  public $name;
  protected $collection_key = 'inputConfigs';
  protected $inputConfigsType = GoogleCloudDatalabelingV1beta1InputConfig::class;
  protected $inputConfigsDataType = 'array';
  /** @param string[] */
  public function setBlockingResources($blockingResources)
  {
    $this->blockingResources = $blockingResources;
  }
  /** @return string[] */
  public function getBlockingResources()
  {
    return $this->blockingResources;
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
  public function setDataItemCount($dataItemCount)
  {
    $this->dataItemCount = $dataItemCount;
  }
  /** @return string */
  public function getDataItemCount()
  {
    return $this->dataItemCount;
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
  /** @param GoogleCloudDatalabelingV1beta1InputConfig[] */
  public function setInputConfigs($inputConfigs)
  {
    $this->inputConfigs = $inputConfigs;
  }
  /** @return GoogleCloudDatalabelingV1beta1InputConfig[] */
  public function getInputConfigs()
  {
    return $this->inputConfigs;
  }
  /** @param string */
  public function setLastMigrateTime($lastMigrateTime)
  {
    $this->lastMigrateTime = $lastMigrateTime;
  }
  /** @return string */
  public function getLastMigrateTime()
  {
    return $this->lastMigrateTime;
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

class GoogleCloudDatalabelingV1beta1Evaluation extends \Google\Model
{
  /** @var string */
  public $annotationType;
  /** @var GoogleCloudDatalabelingV1beta1EvaluationConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $evaluatedItemCount;
  /** @var string */
  public $evaluationJobRunTime;
  /** @var GoogleCloudDatalabelingV1beta1EvaluationMetrics */
  public $evaluationMetrics;
  /** @var string */
  public $name;
  protected $configType = GoogleCloudDatalabelingV1beta1EvaluationConfig::class;
  protected $configDataType = '';
  protected $evaluationMetricsType = GoogleCloudDatalabelingV1beta1EvaluationMetrics::class;
  protected $evaluationMetricsDataType = '';
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param GoogleCloudDatalabelingV1beta1EvaluationConfig */
  public function setConfig(GoogleCloudDatalabelingV1beta1EvaluationConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationConfig */
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
  /** @param string */
  public function setEvaluatedItemCount($evaluatedItemCount)
  {
    $this->evaluatedItemCount = $evaluatedItemCount;
  }
  /** @return string */
  public function getEvaluatedItemCount()
  {
    return $this->evaluatedItemCount;
  }
  /** @param string */
  public function setEvaluationJobRunTime($evaluationJobRunTime)
  {
    $this->evaluationJobRunTime = $evaluationJobRunTime;
  }
  /** @return string */
  public function getEvaluationJobRunTime()
  {
    return $this->evaluationJobRunTime;
  }
  /** @param GoogleCloudDatalabelingV1beta1EvaluationMetrics */
  public function setEvaluationMetrics(GoogleCloudDatalabelingV1beta1EvaluationMetrics $evaluationMetrics)
  {
    $this->evaluationMetrics = $evaluationMetrics;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationMetrics */
  public function getEvaluationMetrics()
  {
    return $this->evaluationMetrics;
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

class GoogleCloudDatalabelingV1beta1EvaluationConfig extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions */
  public $boundingBoxEvaluationOptions;
  protected $boundingBoxEvaluationOptionsType = GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions::class;
  protected $boundingBoxEvaluationOptionsDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions */
  public function setBoundingBoxEvaluationOptions(GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions $boundingBoxEvaluationOptions)
  {
    $this->boundingBoxEvaluationOptions = $boundingBoxEvaluationOptions;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions */
  public function getBoundingBoxEvaluationOptions()
  {
    return $this->boundingBoxEvaluationOptions;
  }
}

class GoogleCloudDatalabelingV1beta1EvaluationJob extends \Google\Collection
{
  /** @var string */
  public $annotationSpecSet;
  /** @var GoogleCloudDatalabelingV1beta1Attempt[] */
  public $attempts;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var GoogleCloudDatalabelingV1beta1EvaluationJobConfig */
  public $evaluationJobConfig;
  /** @var bool */
  public $labelMissingGroundTruth;
  /** @var string */
  public $modelVersion;
  /** @var string */
  public $name;
  /** @var string */
  public $schedule;
  /** @var string */
  public $state;
  protected $collection_key = 'attempts';
  protected $attemptsType = GoogleCloudDatalabelingV1beta1Attempt::class;
  protected $attemptsDataType = 'array';
  protected $evaluationJobConfigType = GoogleCloudDatalabelingV1beta1EvaluationJobConfig::class;
  protected $evaluationJobConfigDataType = '';
  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param GoogleCloudDatalabelingV1beta1Attempt[] */
  public function setAttempts($attempts)
  {
    $this->attempts = $attempts;
  }
  /** @return GoogleCloudDatalabelingV1beta1Attempt[] */
  public function getAttempts()
  {
    return $this->attempts;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param GoogleCloudDatalabelingV1beta1EvaluationJobConfig */
  public function setEvaluationJobConfig(GoogleCloudDatalabelingV1beta1EvaluationJobConfig $evaluationJobConfig)
  {
    $this->evaluationJobConfig = $evaluationJobConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationJobConfig */
  public function getEvaluationJobConfig()
  {
    return $this->evaluationJobConfig;
  }
  /** @param bool */
  public function setLabelMissingGroundTruth($labelMissingGroundTruth)
  {
    $this->labelMissingGroundTruth = $labelMissingGroundTruth;
  }
  /** @return bool */
  public function getLabelMissingGroundTruth()
  {
    return $this->labelMissingGroundTruth;
  }
  /** @param string */
  public function setModelVersion($modelVersion)
  {
    $this->modelVersion = $modelVersion;
  }
  /** @return string */
  public function getModelVersion()
  {
    return $this->modelVersion;
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
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
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

class GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig extends \Google\Model
{
  /** @var string */
  public $email;
  public $minAcceptableMeanAveragePrecision;

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
  public function setMinAcceptableMeanAveragePrecision($minAcceptableMeanAveragePrecision)
  {
    $this->minAcceptableMeanAveragePrecision = $minAcceptableMeanAveragePrecision;
  }
  public function getMinAcceptableMeanAveragePrecision()
  {
    return $this->minAcceptableMeanAveragePrecision;
  }
}

class GoogleCloudDatalabelingV1beta1EvaluationJobConfig extends \Google\Model
{
  /** @var string[] */
  public $bigqueryImportKeys;
  /** @var GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public $boundingPolyConfig;
  /** @var GoogleCloudDatalabelingV1beta1EvaluationConfig */
  public $evaluationConfig;
  /** @var GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig */
  public $evaluationJobAlertConfig;
  /** @var int */
  public $exampleCount;
  public $exampleSamplePercentage;
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $humanAnnotationConfig;
  /** @var GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public $imageClassificationConfig;
  /** @var GoogleCloudDatalabelingV1beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public $textClassificationConfig;
  protected $boundingPolyConfigType = GoogleCloudDatalabelingV1beta1BoundingPolyConfig::class;
  protected $boundingPolyConfigDataType = '';
  protected $evaluationConfigType = GoogleCloudDatalabelingV1beta1EvaluationConfig::class;
  protected $evaluationConfigDataType = '';
  protected $evaluationJobAlertConfigType = GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig::class;
  protected $evaluationJobAlertConfigDataType = '';
  protected $humanAnnotationConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $humanAnnotationConfigDataType = '';
  protected $imageClassificationConfigType = GoogleCloudDatalabelingV1beta1ImageClassificationConfig::class;
  protected $imageClassificationConfigDataType = '';
  protected $inputConfigType = GoogleCloudDatalabelingV1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $textClassificationConfigType = GoogleCloudDatalabelingV1beta1TextClassificationConfig::class;
  protected $textClassificationConfigDataType = '';
  /** @param string[] */
  public function setBigqueryImportKeys($bigqueryImportKeys)
  {
    $this->bigqueryImportKeys = $bigqueryImportKeys;
  }
  /** @return string[] */
  public function getBigqueryImportKeys()
  {
    return $this->bigqueryImportKeys;
  }
  /** @param GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function setBoundingPolyConfig(GoogleCloudDatalabelingV1beta1BoundingPolyConfig $boundingPolyConfig)
  {
    $this->boundingPolyConfig = $boundingPolyConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function getBoundingPolyConfig()
  {
    return $this->boundingPolyConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1EvaluationConfig */
  public function setEvaluationConfig(GoogleCloudDatalabelingV1beta1EvaluationConfig $evaluationConfig)
  {
    $this->evaluationConfig = $evaluationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationConfig */
  public function getEvaluationConfig()
  {
    return $this->evaluationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig */
  public function setEvaluationJobAlertConfig(GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig $evaluationJobAlertConfig)
  {
    $this->evaluationJobAlertConfig = $evaluationJobAlertConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig */
  public function getEvaluationJobAlertConfig()
  {
    return $this->evaluationJobAlertConfig;
  }
  /** @param int */
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return int */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
  public function setExampleSamplePercentage($exampleSamplePercentage)
  {
    $this->exampleSamplePercentage = $exampleSamplePercentage;
  }
  public function getExampleSamplePercentage()
  {
    return $this->exampleSamplePercentage;
  }
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setHumanAnnotationConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $humanAnnotationConfig)
  {
    $this->humanAnnotationConfig = $humanAnnotationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getHumanAnnotationConfig()
  {
    return $this->humanAnnotationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function setImageClassificationConfig(GoogleCloudDatalabelingV1beta1ImageClassificationConfig $imageClassificationConfig)
  {
    $this->imageClassificationConfig = $imageClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function getImageClassificationConfig()
  {
    return $this->imageClassificationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1InputConfig */
  public function setInputConfig(GoogleCloudDatalabelingV1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function setTextClassificationConfig(GoogleCloudDatalabelingV1beta1TextClassificationConfig $textClassificationConfig)
  {
    $this->textClassificationConfig = $textClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function getTextClassificationConfig()
  {
    return $this->textClassificationConfig;
  }
}

class GoogleCloudDatalabelingV1beta1EvaluationMetrics extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1ClassificationMetrics */
  public $classificationMetrics;
  /** @var GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics */
  public $objectDetectionMetrics;
  protected $classificationMetricsType = GoogleCloudDatalabelingV1beta1ClassificationMetrics::class;
  protected $classificationMetricsDataType = '';
  protected $objectDetectionMetricsType = GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics::class;
  protected $objectDetectionMetricsDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1ClassificationMetrics */
  public function setClassificationMetrics(GoogleCloudDatalabelingV1beta1ClassificationMetrics $classificationMetrics)
  {
    $this->classificationMetrics = $classificationMetrics;
  }
  /** @return GoogleCloudDatalabelingV1beta1ClassificationMetrics */
  public function getClassificationMetrics()
  {
    return $this->classificationMetrics;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics */
  public function setObjectDetectionMetrics(GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics $objectDetectionMetrics)
  {
    $this->objectDetectionMetrics = $objectDetectionMetrics;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics */
  public function getObjectDetectionMetrics()
  {
    return $this->objectDetectionMetrics;
  }
}

class GoogleCloudDatalabelingV1beta1EventConfig extends \Google\Collection
{
  /** @var string[] */
  public $annotationSpecSets;
  /** @var int */
  public $clipLength;
  /** @var int */
  public $overlapLength;
  protected $collection_key = 'annotationSpecSets';
  /** @param string[] */
  public function setAnnotationSpecSets($annotationSpecSets)
  {
    $this->annotationSpecSets = $annotationSpecSets;
  }
  /** @return string[] */
  public function getAnnotationSpecSets()
  {
    return $this->annotationSpecSets;
  }
  /** @param int */
  public function setClipLength($clipLength)
  {
    $this->clipLength = $clipLength;
  }
  /** @return int */
  public function getClipLength()
  {
    return $this->clipLength;
  }
  /** @param int */
  public function setOverlapLength($overlapLength)
  {
    $this->overlapLength = $overlapLength;
  }
  /** @return int */
  public function getOverlapLength()
  {
    return $this->overlapLength;
  }
}

class GoogleCloudDatalabelingV1beta1Example extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Annotation[] */
  public $annotations;
  /** @var GoogleCloudDatalabelingV1beta1ImagePayload */
  public $imagePayload;
  /** @var string */
  public $name;
  /** @var GoogleCloudDatalabelingV1beta1TextPayload */
  public $textPayload;
  /** @var GoogleCloudDatalabelingV1beta1VideoPayload */
  public $videoPayload;
  protected $collection_key = 'annotations';
  protected $annotationsType = GoogleCloudDatalabelingV1beta1Annotation::class;
  protected $annotationsDataType = 'array';
  protected $imagePayloadType = GoogleCloudDatalabelingV1beta1ImagePayload::class;
  protected $imagePayloadDataType = '';
  protected $textPayloadType = GoogleCloudDatalabelingV1beta1TextPayload::class;
  protected $textPayloadDataType = '';
  protected $videoPayloadType = GoogleCloudDatalabelingV1beta1VideoPayload::class;
  protected $videoPayloadDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1Annotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return GoogleCloudDatalabelingV1beta1Annotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImagePayload */
  public function setImagePayload(GoogleCloudDatalabelingV1beta1ImagePayload $imagePayload)
  {
    $this->imagePayload = $imagePayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImagePayload */
  public function getImagePayload()
  {
    return $this->imagePayload;
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
  /** @param GoogleCloudDatalabelingV1beta1TextPayload */
  public function setTextPayload(GoogleCloudDatalabelingV1beta1TextPayload $textPayload)
  {
    $this->textPayload = $textPayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextPayload */
  public function getTextPayload()
  {
    return $this->textPayload;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoPayload */
  public function setVideoPayload(GoogleCloudDatalabelingV1beta1VideoPayload $videoPayload)
  {
    $this->videoPayload = $videoPayload;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoPayload */
  public function getVideoPayload()
  {
    return $this->videoPayload;
  }
}

class GoogleCloudDatalabelingV1beta1ExampleComparison extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Example */
  public $groundTruthExample;
  /** @var GoogleCloudDatalabelingV1beta1Example[] */
  public $modelCreatedExamples;
  protected $collection_key = 'modelCreatedExamples';
  protected $groundTruthExampleType = GoogleCloudDatalabelingV1beta1Example::class;
  protected $groundTruthExampleDataType = '';
  protected $modelCreatedExamplesType = GoogleCloudDatalabelingV1beta1Example::class;
  protected $modelCreatedExamplesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Example */
  public function setGroundTruthExample(GoogleCloudDatalabelingV1beta1Example $groundTruthExample)
  {
    $this->groundTruthExample = $groundTruthExample;
  }
  /** @return GoogleCloudDatalabelingV1beta1Example */
  public function getGroundTruthExample()
  {
    return $this->groundTruthExample;
  }
  /** @param GoogleCloudDatalabelingV1beta1Example[] */
  public function setModelCreatedExamples($modelCreatedExamples)
  {
    $this->modelCreatedExamples = $modelCreatedExamples;
  }
  /** @return GoogleCloudDatalabelingV1beta1Example[] */
  public function getModelCreatedExamples()
  {
    return $this->modelCreatedExamples;
  }
}

class GoogleCloudDatalabelingV1beta1ExportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1beta1ExportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $dataset;
  /** @var int */
  public $exportCount;
  /** @var GoogleCloudDatalabelingV1beta1LabelStats */
  public $labelStats;
  /** @var GoogleCloudDatalabelingV1beta1OutputConfig */
  public $outputConfig;
  /** @var int */
  public $totalCount;
  protected $labelStatsType = GoogleCloudDatalabelingV1beta1LabelStats::class;
  protected $labelStatsDataType = '';
  protected $outputConfigType = GoogleCloudDatalabelingV1beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  /** @param int */
  public function setExportCount($exportCount)
  {
    $this->exportCount = $exportCount;
  }
  /** @return int */
  public function getExportCount()
  {
    return $this->exportCount;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelStats */
  public function setLabelStats(GoogleCloudDatalabelingV1beta1LabelStats $labelStats)
  {
    $this->labelStats = $labelStats;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelStats */
  public function getLabelStats()
  {
    return $this->labelStats;
  }
  /** @param GoogleCloudDatalabelingV1beta1OutputConfig */
  public function setOutputConfig(GoogleCloudDatalabelingV1beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
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
}

class GoogleCloudDatalabelingV1beta1ExportDataRequest extends \Google\Model
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $filter;
  /** @var GoogleCloudDatalabelingV1beta1OutputConfig */
  public $outputConfig;
  /** @var string */
  public $userEmailAddress;
  protected $outputConfigType = GoogleCloudDatalabelingV1beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param GoogleCloudDatalabelingV1beta1OutputConfig */
  public function setOutputConfig(GoogleCloudDatalabelingV1beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1beta1FeedbackMessage extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $createTime;
  /** @var string */
  public $image;
  /** @var string */
  public $name;
  /** @var GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata */
  public $operatorFeedbackMetadata;
  /** @var GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata */
  public $requesterFeedbackMetadata;
  protected $operatorFeedbackMetadataType = GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata::class;
  protected $operatorFeedbackMetadataDataType = '';
  protected $requesterFeedbackMetadataType = GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata::class;
  protected $requesterFeedbackMetadataDataType = '';
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata */
  public function setOperatorFeedbackMetadata(GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata $operatorFeedbackMetadata)
  {
    $this->operatorFeedbackMetadata = $operatorFeedbackMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata */
  public function getOperatorFeedbackMetadata()
  {
    return $this->operatorFeedbackMetadata;
  }
  /** @param GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata */
  public function setRequesterFeedbackMetadata(GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata $requesterFeedbackMetadata)
  {
    $this->requesterFeedbackMetadata = $requesterFeedbackMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata */
  public function getRequesterFeedbackMetadata()
  {
    return $this->requesterFeedbackMetadata;
  }
}

class GoogleCloudDatalabelingV1beta1FeedbackThread extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata */
  public $feedbackThreadMetadata;
  /** @var string */
  public $name;
  protected $feedbackThreadMetadataType = GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata::class;
  protected $feedbackThreadMetadataDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata */
  public function setFeedbackThreadMetadata(GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata $feedbackThreadMetadata)
  {
    $this->feedbackThreadMetadata = $feedbackThreadMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata */
  public function getFeedbackThreadMetadata()
  {
    return $this->feedbackThreadMetadata;
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

class GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $status;
  /** @var string */
  public $thumbnail;

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
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
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
  public function setThumbnail($thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return string */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
}

class GoogleCloudDatalabelingV1beta1GcsDestination extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $outputUri;

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
  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudDatalabelingV1beta1GcsFolderDestination extends \Google\Model
{
  /** @var string */
  public $outputFolderUri;

  /** @param string */
  public function setOutputFolderUri($outputFolderUri)
  {
    $this->outputFolderUri = $outputFolderUri;
  }
  /** @return string */
  public function getOutputFolderUri()
  {
    return $this->outputFolderUri;
  }
}

class GoogleCloudDatalabelingV1beta1GcsSource extends \Google\Model
{
  /** @var string */
  public $inputUri;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /** @return string */
  public function getInputUri()
  {
    return $this->inputUri;
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

class GoogleCloudDatalabelingV1beta1HumanAnnotationConfig extends \Google\Collection
{
  /** @var string */
  public $annotatedDatasetDescription;
  /** @var string */
  public $annotatedDatasetDisplayName;
  /** @var string[] */
  public $contributorEmails;
  /** @var string */
  public $instruction;
  /** @var string */
  public $labelGroup;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $questionDuration;
  /** @var int */
  public $replicaCount;
  /** @var string */
  public $userEmailAddress;
  protected $collection_key = 'contributorEmails';
  /** @param string */
  public function setAnnotatedDatasetDescription($annotatedDatasetDescription)
  {
    $this->annotatedDatasetDescription = $annotatedDatasetDescription;
  }
  /** @return string */
  public function getAnnotatedDatasetDescription()
  {
    return $this->annotatedDatasetDescription;
  }
  /** @param string */
  public function setAnnotatedDatasetDisplayName($annotatedDatasetDisplayName)
  {
    $this->annotatedDatasetDisplayName = $annotatedDatasetDisplayName;
  }
  /** @return string */
  public function getAnnotatedDatasetDisplayName()
  {
    return $this->annotatedDatasetDisplayName;
  }
  /** @param string[] */
  public function setContributorEmails($contributorEmails)
  {
    $this->contributorEmails = $contributorEmails;
  }
  /** @return string[] */
  public function getContributorEmails()
  {
    return $this->contributorEmails;
  }
  /** @param string */
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param string */
  public function setLabelGroup($labelGroup)
  {
    $this->labelGroup = $labelGroup;
  }
  /** @return string */
  public function getLabelGroup()
  {
    return $this->labelGroup;
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
  public function setQuestionDuration($questionDuration)
  {
    $this->questionDuration = $questionDuration;
  }
  /** @return string */
  public function getQuestionDuration()
  {
    return $this->questionDuration;
  }
  /** @param int */
  public function setReplicaCount($replicaCount)
  {
    $this->replicaCount = $replicaCount;
  }
  /** @return int */
  public function getReplicaCount()
  {
    return $this->replicaCount;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public $normalizedBoundingPoly;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $boundingPolyType = GoogleCloudDatalabelingV1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $normalizedBoundingPolyType = GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly::class;
  protected $normalizedBoundingPolyDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDatalabelingV1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public function setNormalizedBoundingPoly(GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly $normalizedBoundingPoly)
  {
    $this->normalizedBoundingPoly = $normalizedBoundingPoly;
  }
  /** @return GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public function getNormalizedBoundingPoly()
  {
    return $this->normalizedBoundingPoly;
  }
}

class GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
}

class GoogleCloudDatalabelingV1beta1ImageClassificationConfig extends \Google\Model
{
  /** @var bool */
  public $allowMultiLabel;
  /** @var string */
  public $annotationSpecSet;
  /** @var string */
  public $answerAggregationType;

  /** @param bool */
  public function setAllowMultiLabel($allowMultiLabel)
  {
    $this->allowMultiLabel = $allowMultiLabel;
  }
  /** @return bool */
  public function getAllowMultiLabel()
  {
    return $this->allowMultiLabel;
  }
  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param string */
  public function setAnswerAggregationType($answerAggregationType)
  {
    $this->answerAggregationType = $answerAggregationType;
  }
  /** @return string */
  public function getAnswerAggregationType()
  {
    return $this->answerAggregationType;
  }
}

class GoogleCloudDatalabelingV1beta1ImagePayload extends \Google\Model
{
  /** @var string */
  public $imageThumbnail;
  /** @var string */
  public $imageUri;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $signedUri;

  /** @param string */
  public function setImageThumbnail($imageThumbnail)
  {
    $this->imageThumbnail = $imageThumbnail;
  }
  /** @return string */
  public function getImageThumbnail()
  {
    return $this->imageThumbnail;
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setSignedUri($signedUri)
  {
    $this->signedUri = $signedUri;
  }
  /** @return string */
  public function getSignedUri()
  {
    return $this->signedUri;
  }
}

class GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1NormalizedPolyline */
  public $normalizedPolyline;
  /** @var GoogleCloudDatalabelingV1beta1Polyline */
  public $polyline;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $normalizedPolylineType = GoogleCloudDatalabelingV1beta1NormalizedPolyline::class;
  protected $normalizedPolylineDataType = '';
  protected $polylineType = GoogleCloudDatalabelingV1beta1Polyline::class;
  protected $polylineDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1NormalizedPolyline */
  public function setNormalizedPolyline(GoogleCloudDatalabelingV1beta1NormalizedPolyline $normalizedPolyline)
  {
    $this->normalizedPolyline = $normalizedPolyline;
  }
  /** @return GoogleCloudDatalabelingV1beta1NormalizedPolyline */
  public function getNormalizedPolyline()
  {
    return $this->normalizedPolyline;
  }
  /** @param GoogleCloudDatalabelingV1beta1Polyline */
  public function setPolyline(GoogleCloudDatalabelingV1beta1Polyline $polyline)
  {
    $this->polyline = $polyline;
  }
  /** @return GoogleCloudDatalabelingV1beta1Polyline */
  public function getPolyline()
  {
    return $this->polyline;
  }
}

class GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public $annotationColors;
  /** @var string */
  public $imageBytes;
  /** @var string */
  public $mimeType;
  protected $annotationColorsType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationColorsDataType = 'map';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public function setAnnotationColors($annotationColors)
  {
    $this->annotationColors = $annotationColors;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec[] */
  public function getAnnotationColors()
  {
    return $this->annotationColors;
  }
  /** @param string */
  public function setImageBytes($imageBytes)
  {
    $this->imageBytes = $imageBytes;
  }
  /** @return string */
  public function getImageBytes()
  {
    return $this->imageBytes;
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

class GoogleCloudDatalabelingV1beta1ImportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1beta1ImportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var int */
  public $importCount;
  /** @var int */
  public $totalCount;

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
  /** @param int */
  public function setImportCount($importCount)
  {
    $this->importCount = $importCount;
  }
  /** @return int */
  public function getImportCount()
  {
    return $this->importCount;
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
}

class GoogleCloudDatalabelingV1beta1ImportDataRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1InputConfig */
  public $inputConfig;
  /** @var string */
  public $userEmailAddress;
  protected $inputConfigType = GoogleCloudDatalabelingV1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1InputConfig */
  public function setInputConfig(GoogleCloudDatalabelingV1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1beta1InputConfig extends \Google\Model
{
  /** @var string */
  public $annotationType;
  /** @var GoogleCloudDatalabelingV1beta1BigQuerySource */
  public $bigquerySource;
  /** @var GoogleCloudDatalabelingV1beta1ClassificationMetadata */
  public $classificationMetadata;
  /** @var string */
  public $dataType;
  /** @var GoogleCloudDatalabelingV1beta1GcsSource */
  public $gcsSource;
  /** @var GoogleCloudDatalabelingV1beta1TextMetadata */
  public $textMetadata;
  protected $bigquerySourceType = GoogleCloudDatalabelingV1beta1BigQuerySource::class;
  protected $bigquerySourceDataType = '';
  protected $classificationMetadataType = GoogleCloudDatalabelingV1beta1ClassificationMetadata::class;
  protected $classificationMetadataDataType = '';
  protected $gcsSourceType = GoogleCloudDatalabelingV1beta1GcsSource::class;
  protected $gcsSourceDataType = '';
  protected $textMetadataType = GoogleCloudDatalabelingV1beta1TextMetadata::class;
  protected $textMetadataDataType = '';
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param GoogleCloudDatalabelingV1beta1BigQuerySource */
  public function setBigquerySource(GoogleCloudDatalabelingV1beta1BigQuerySource $bigquerySource)
  {
    $this->bigquerySource = $bigquerySource;
  }
  /** @return GoogleCloudDatalabelingV1beta1BigQuerySource */
  public function getBigquerySource()
  {
    return $this->bigquerySource;
  }
  /** @param GoogleCloudDatalabelingV1beta1ClassificationMetadata */
  public function setClassificationMetadata(GoogleCloudDatalabelingV1beta1ClassificationMetadata $classificationMetadata)
  {
    $this->classificationMetadata = $classificationMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1ClassificationMetadata */
  public function getClassificationMetadata()
  {
    return $this->classificationMetadata;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param GoogleCloudDatalabelingV1beta1GcsSource */
  public function setGcsSource(GoogleCloudDatalabelingV1beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudDatalabelingV1beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextMetadata */
  public function setTextMetadata(GoogleCloudDatalabelingV1beta1TextMetadata $textMetadata)
  {
    $this->textMetadata = $textMetadata;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextMetadata */
  public function getTextMetadata()
  {
    return $this->textMetadata;
  }
}

class GoogleCloudDatalabelingV1beta1Instruction extends \Google\Collection
{
  /** @var string[] */
  public $blockingResources;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDatalabelingV1beta1CsvInstruction */
  public $csvInstruction;
  /** @var string */
  public $dataType;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudDatalabelingV1beta1PdfInstruction */
  public $pdfInstruction;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'blockingResources';
  protected $csvInstructionType = GoogleCloudDatalabelingV1beta1CsvInstruction::class;
  protected $csvInstructionDataType = '';
  protected $pdfInstructionType = GoogleCloudDatalabelingV1beta1PdfInstruction::class;
  protected $pdfInstructionDataType = '';
  /** @param string[] */
  public function setBlockingResources($blockingResources)
  {
    $this->blockingResources = $blockingResources;
  }
  /** @return string[] */
  public function getBlockingResources()
  {
    return $this->blockingResources;
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
  /** @param GoogleCloudDatalabelingV1beta1CsvInstruction */
  public function setCsvInstruction(GoogleCloudDatalabelingV1beta1CsvInstruction $csvInstruction)
  {
    $this->csvInstruction = $csvInstruction;
  }
  /** @return GoogleCloudDatalabelingV1beta1CsvInstruction */
  public function getCsvInstruction()
  {
    return $this->csvInstruction;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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
  /** @param GoogleCloudDatalabelingV1beta1PdfInstruction */
  public function setPdfInstruction(GoogleCloudDatalabelingV1beta1PdfInstruction $pdfInstruction)
  {
    $this->pdfInstruction = $pdfInstruction;
  }
  /** @return GoogleCloudDatalabelingV1beta1PdfInstruction */
  public function getPdfInstruction()
  {
    return $this->pdfInstruction;
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

class GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImageRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  /** @var GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public $boundingPolyConfig;
  /** @var string */
  public $feature;
  /** @var GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public $imageClassificationConfig;
  /** @var GoogleCloudDatalabelingV1beta1PolylineConfig */
  public $polylineConfig;
  /** @var GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public $segmentationConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  protected $boundingPolyConfigType = GoogleCloudDatalabelingV1beta1BoundingPolyConfig::class;
  protected $boundingPolyConfigDataType = '';
  protected $imageClassificationConfigType = GoogleCloudDatalabelingV1beta1ImageClassificationConfig::class;
  protected $imageClassificationConfigDataType = '';
  protected $polylineConfigType = GoogleCloudDatalabelingV1beta1PolylineConfig::class;
  protected $polylineConfigDataType = '';
  protected $segmentationConfigType = GoogleCloudDatalabelingV1beta1SegmentationConfig::class;
  protected $segmentationConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function setBoundingPolyConfig(GoogleCloudDatalabelingV1beta1BoundingPolyConfig $boundingPolyConfig)
  {
    $this->boundingPolyConfig = $boundingPolyConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingPolyConfig */
  public function getBoundingPolyConfig()
  {
    return $this->boundingPolyConfig;
  }
  /** @param string */
  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  /** @return string */
  public function getFeature()
  {
    return $this->feature;
  }
  /** @param GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function setImageClassificationConfig(GoogleCloudDatalabelingV1beta1ImageClassificationConfig $imageClassificationConfig)
  {
    $this->imageClassificationConfig = $imageClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ImageClassificationConfig */
  public function getImageClassificationConfig()
  {
    return $this->imageClassificationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1PolylineConfig */
  public function setPolylineConfig(GoogleCloudDatalabelingV1beta1PolylineConfig $polylineConfig)
  {
    $this->polylineConfig = $polylineConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1PolylineConfig */
  public function getPolylineConfig()
  {
    return $this->polylineConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public function setSegmentationConfig(GoogleCloudDatalabelingV1beta1SegmentationConfig $segmentationConfig)
  {
    $this->segmentationConfig = $segmentationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1SegmentationConfig */
  public function getSegmentationConfig()
  {
    return $this->segmentationConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata */
  public $imageBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata */
  public $imageBoundingPolyDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata */
  public $imageClassificationDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata */
  public $imageOrientedBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata */
  public $imagePolylineDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata */
  public $imageSegmentationDetails;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata */
  public $textClassificationDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata */
  public $textEntityExtractionDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata */
  public $videoClassificationDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata */
  public $videoEventDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata */
  public $videoObjectDetectionDetails;
  /** @var GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata */
  public $videoObjectTrackingDetails;
  protected $collection_key = 'partialFailures';
  protected $imageBoundingBoxDetailsType = GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata::class;
  protected $imageBoundingBoxDetailsDataType = '';
  protected $imageBoundingPolyDetailsType = GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata::class;
  protected $imageBoundingPolyDetailsDataType = '';
  protected $imageClassificationDetailsType = GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata::class;
  protected $imageClassificationDetailsDataType = '';
  protected $imageOrientedBoundingBoxDetailsType = GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata::class;
  protected $imageOrientedBoundingBoxDetailsDataType = '';
  protected $imagePolylineDetailsType = GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata::class;
  protected $imagePolylineDetailsDataType = '';
  protected $imageSegmentationDetailsType = GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata::class;
  protected $imageSegmentationDetailsDataType = '';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  protected $textClassificationDetailsType = GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata::class;
  protected $textClassificationDetailsDataType = '';
  protected $textEntityExtractionDetailsType = GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata::class;
  protected $textEntityExtractionDetailsDataType = '';
  protected $videoClassificationDetailsType = GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata::class;
  protected $videoClassificationDetailsDataType = '';
  protected $videoEventDetailsType = GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata::class;
  protected $videoEventDetailsDataType = '';
  protected $videoObjectDetectionDetailsType = GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata::class;
  protected $videoObjectDetectionDetailsDataType = '';
  protected $videoObjectTrackingDetailsType = GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata::class;
  protected $videoObjectTrackingDetailsDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata */
  public function setImageBoundingBoxDetails(GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata $imageBoundingBoxDetails)
  {
    $this->imageBoundingBoxDetails = $imageBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata */
  public function getImageBoundingBoxDetails()
  {
    return $this->imageBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata */
  public function setImageBoundingPolyDetails(GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata $imageBoundingPolyDetails)
  {
    $this->imageBoundingPolyDetails = $imageBoundingPolyDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata */
  public function getImageBoundingPolyDetails()
  {
    return $this->imageBoundingPolyDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata */
  public function setImageClassificationDetails(GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata $imageClassificationDetails)
  {
    $this->imageClassificationDetails = $imageClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata */
  public function getImageClassificationDetails()
  {
    return $this->imageClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata */
  public function setImageOrientedBoundingBoxDetails(GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata $imageOrientedBoundingBoxDetails)
  {
    $this->imageOrientedBoundingBoxDetails = $imageOrientedBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata */
  public function getImageOrientedBoundingBoxDetails()
  {
    return $this->imageOrientedBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata */
  public function setImagePolylineDetails(GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata $imagePolylineDetails)
  {
    $this->imagePolylineDetails = $imagePolylineDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata */
  public function getImagePolylineDetails()
  {
    return $this->imagePolylineDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata */
  public function setImageSegmentationDetails(GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata $imageSegmentationDetails)
  {
    $this->imageSegmentationDetails = $imageSegmentationDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata */
  public function getImageSegmentationDetails()
  {
    return $this->imageSegmentationDetails;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata */
  public function setTextClassificationDetails(GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata $textClassificationDetails)
  {
    $this->textClassificationDetails = $textClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata */
  public function getTextClassificationDetails()
  {
    return $this->textClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata */
  public function setTextEntityExtractionDetails(GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata $textEntityExtractionDetails)
  {
    $this->textEntityExtractionDetails = $textEntityExtractionDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata */
  public function getTextEntityExtractionDetails()
  {
    return $this->textEntityExtractionDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata */
  public function setVideoClassificationDetails(GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata $videoClassificationDetails)
  {
    $this->videoClassificationDetails = $videoClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata */
  public function getVideoClassificationDetails()
  {
    return $this->videoClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata */
  public function setVideoEventDetails(GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata $videoEventDetails)
  {
    $this->videoEventDetails = $videoEventDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata */
  public function getVideoEventDetails()
  {
    return $this->videoEventDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata */
  public function setVideoObjectDetectionDetails(GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata $videoObjectDetectionDetails)
  {
    $this->videoObjectDetectionDetails = $videoObjectDetectionDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata */
  public function getVideoObjectDetectionDetails()
  {
    return $this->videoObjectDetectionDetails;
  }
  /** @param GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata */
  public function setVideoObjectTrackingDetails(GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata $videoObjectTrackingDetails)
  {
    $this->videoObjectTrackingDetails = $videoObjectTrackingDetails;
  }
  /** @return GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata */
  public function getVideoObjectTrackingDetails()
  {
    return $this->videoObjectTrackingDetails;
  }
}

class GoogleCloudDatalabelingV1beta1LabelStats extends \Google\Model
{
  /** @var string[] */
  public $exampleCount;

  /** @param string[] */
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return string[] */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
}

class GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelTextRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  /** @var string */
  public $feature;
  /** @var GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public $textClassificationConfig;
  /** @var GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public $textEntityExtractionConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  protected $textClassificationConfigType = GoogleCloudDatalabelingV1beta1TextClassificationConfig::class;
  protected $textClassificationConfigDataType = '';
  protected $textEntityExtractionConfigType = GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig::class;
  protected $textEntityExtractionConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
  /** @param string */
  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  /** @return string */
  public function getFeature()
  {
    return $this->feature;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function setTextClassificationConfig(GoogleCloudDatalabelingV1beta1TextClassificationConfig $textClassificationConfig)
  {
    $this->textClassificationConfig = $textClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextClassificationConfig */
  public function getTextClassificationConfig()
  {
    return $this->textClassificationConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public function setTextEntityExtractionConfig(GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig $textEntityExtractionConfig)
  {
    $this->textEntityExtractionConfig = $textEntityExtractionConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig */
  public function getTextEntityExtractionConfig()
  {
    return $this->textEntityExtractionConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1beta1LabelVideoRequest extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public $basicConfig;
  /** @var GoogleCloudDatalabelingV1beta1EventConfig */
  public $eventConfig;
  /** @var string */
  public $feature;
  /** @var GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public $objectDetectionConfig;
  /** @var GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public $objectTrackingConfig;
  /** @var GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public $videoClassificationConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  protected $eventConfigType = GoogleCloudDatalabelingV1beta1EventConfig::class;
  protected $eventConfigDataType = '';
  protected $objectDetectionConfigType = GoogleCloudDatalabelingV1beta1ObjectDetectionConfig::class;
  protected $objectDetectionConfigDataType = '';
  protected $objectTrackingConfigType = GoogleCloudDatalabelingV1beta1ObjectTrackingConfig::class;
  protected $objectTrackingConfigDataType = '';
  protected $videoClassificationConfigType = GoogleCloudDatalabelingV1beta1VideoClassificationConfig::class;
  protected $videoClassificationConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1EventConfig */
  public function setEventConfig(GoogleCloudDatalabelingV1beta1EventConfig $eventConfig)
  {
    $this->eventConfig = $eventConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1EventConfig */
  public function getEventConfig()
  {
    return $this->eventConfig;
  }
  /** @param string */
  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  /** @return string */
  public function getFeature()
  {
    return $this->feature;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public function setObjectDetectionConfig(GoogleCloudDatalabelingV1beta1ObjectDetectionConfig $objectDetectionConfig)
  {
    $this->objectDetectionConfig = $objectDetectionConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectDetectionConfig */
  public function getObjectDetectionConfig()
  {
    return $this->objectDetectionConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public function setObjectTrackingConfig(GoogleCloudDatalabelingV1beta1ObjectTrackingConfig $objectTrackingConfig)
  {
    $this->objectTrackingConfig = $objectTrackingConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectTrackingConfig */
  public function getObjectTrackingConfig()
  {
    return $this->objectTrackingConfig;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public function setVideoClassificationConfig(GoogleCloudDatalabelingV1beta1VideoClassificationConfig $videoClassificationConfig)
  {
    $this->videoClassificationConfig = $videoClassificationConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoClassificationConfig */
  public function getVideoClassificationConfig()
  {
    return $this->videoClassificationConfig;
  }
}

class GoogleCloudDatalabelingV1beta1ListAnnotatedDatasetsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotatedDataset[] */
  public $annotatedDatasets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'annotatedDatasets';
  protected $annotatedDatasetsType = GoogleCloudDatalabelingV1beta1AnnotatedDataset::class;
  protected $annotatedDatasetsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotatedDataset[] */
  public function setAnnotatedDatasets($annotatedDatasets)
  {
    $this->annotatedDatasets = $annotatedDatasets;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotatedDataset[] */
  public function getAnnotatedDatasets()
  {
    return $this->annotatedDatasets;
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

class GoogleCloudDatalabelingV1beta1ListAnnotationSpecSetsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpecSet[] */
  public $annotationSpecSets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'annotationSpecSets';
  protected $annotationSpecSetsType = GoogleCloudDatalabelingV1beta1AnnotationSpecSet::class;
  protected $annotationSpecSetsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpecSet[] */
  public function setAnnotationSpecSets($annotationSpecSets)
  {
    $this->annotationSpecSets = $annotationSpecSets;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpecSet[] */
  public function getAnnotationSpecSets()
  {
    return $this->annotationSpecSets;
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

class GoogleCloudDatalabelingV1beta1ListDataItemsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1DataItem[] */
  public $dataItems;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataItems';
  protected $dataItemsType = GoogleCloudDatalabelingV1beta1DataItem::class;
  protected $dataItemsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1DataItem[] */
  public function setDataItems($dataItems)
  {
    $this->dataItems = $dataItems;
  }
  /** @return GoogleCloudDatalabelingV1beta1DataItem[] */
  public function getDataItems()
  {
    return $this->dataItems;
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

class GoogleCloudDatalabelingV1beta1ListDatasetsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Dataset[] */
  public $datasets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'datasets';
  protected $datasetsType = GoogleCloudDatalabelingV1beta1Dataset::class;
  protected $datasetsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Dataset[] */
  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }
  /** @return GoogleCloudDatalabelingV1beta1Dataset[] */
  public function getDatasets()
  {
    return $this->datasets;
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

class GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1EvaluationJob[] */
  public $evaluationJobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'evaluationJobs';
  protected $evaluationJobsType = GoogleCloudDatalabelingV1beta1EvaluationJob::class;
  protected $evaluationJobsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1EvaluationJob[] */
  public function setEvaluationJobs($evaluationJobs)
  {
    $this->evaluationJobs = $evaluationJobs;
  }
  /** @return GoogleCloudDatalabelingV1beta1EvaluationJob[] */
  public function getEvaluationJobs()
  {
    return $this->evaluationJobs;
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

class GoogleCloudDatalabelingV1beta1ListExamplesResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Example[] */
  public $examples;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'examples';
  protected $examplesType = GoogleCloudDatalabelingV1beta1Example::class;
  protected $examplesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Example[] */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /** @return GoogleCloudDatalabelingV1beta1Example[] */
  public function getExamples()
  {
    return $this->examples;
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

class GoogleCloudDatalabelingV1beta1ListFeedbackMessagesResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1FeedbackMessage[] */
  public $feedbackMessages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'feedbackMessages';
  protected $feedbackMessagesType = GoogleCloudDatalabelingV1beta1FeedbackMessage::class;
  protected $feedbackMessagesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1FeedbackMessage[] */
  public function setFeedbackMessages($feedbackMessages)
  {
    $this->feedbackMessages = $feedbackMessages;
  }
  /** @return GoogleCloudDatalabelingV1beta1FeedbackMessage[] */
  public function getFeedbackMessages()
  {
    return $this->feedbackMessages;
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

class GoogleCloudDatalabelingV1beta1ListFeedbackThreadsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1FeedbackThread[] */
  public $feedbackThreads;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'feedbackThreads';
  protected $feedbackThreadsType = GoogleCloudDatalabelingV1beta1FeedbackThread::class;
  protected $feedbackThreadsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1FeedbackThread[] */
  public function setFeedbackThreads($feedbackThreads)
  {
    $this->feedbackThreads = $feedbackThreads;
  }
  /** @return GoogleCloudDatalabelingV1beta1FeedbackThread[] */
  public function getFeedbackThreads()
  {
    return $this->feedbackThreads;
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

class GoogleCloudDatalabelingV1beta1ListInstructionsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Instruction[] */
  public $instructions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instructions';
  protected $instructionsType = GoogleCloudDatalabelingV1beta1Instruction::class;
  protected $instructionsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Instruction[] */
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  /** @return GoogleCloudDatalabelingV1beta1Instruction[] */
  public function getInstructions()
  {
    return $this->instructions;
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

class GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public $normalizedVertices;
  protected $collection_key = 'normalizedVertices';
  protected $normalizedVerticesType = GoogleCloudDatalabelingV1beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
}

class GoogleCloudDatalabelingV1beta1NormalizedPolyline extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public $normalizedVertices;
  protected $collection_key = 'normalizedVertices';
  protected $normalizedVerticesType = GoogleCloudDatalabelingV1beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudDatalabelingV1beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
}

class GoogleCloudDatalabelingV1beta1NormalizedVertex extends \Google\Model
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

class GoogleCloudDatalabelingV1beta1ObjectDetectionConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;
  public $extractionFrameRate;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  public function setExtractionFrameRate($extractionFrameRate)
  {
    $this->extractionFrameRate = $extractionFrameRate;
  }
  public function getExtractionFrameRate()
  {
    return $this->extractionFrameRate;
  }
}

class GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1PrCurve */
  public $prCurve;
  protected $prCurveType = GoogleCloudDatalabelingV1beta1PrCurve::class;
  protected $prCurveDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1PrCurve */
  public function setPrCurve(GoogleCloudDatalabelingV1beta1PrCurve $prCurve)
  {
    $this->prCurve = $prCurve;
  }
  /** @return GoogleCloudDatalabelingV1beta1PrCurve */
  public function getPrCurve()
  {
    return $this->prCurve;
  }
}

class GoogleCloudDatalabelingV1beta1ObjectTrackingConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;
  /** @var int */
  public $clipLength;
  /** @var int */
  public $overlapLength;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param int */
  public function setClipLength($clipLength)
  {
    $this->clipLength = $clipLength;
  }
  /** @return int */
  public function getClipLength()
  {
    return $this->clipLength;
  }
  /** @param int */
  public function setOverlapLength($overlapLength)
  {
    $this->overlapLength = $overlapLength;
  }
  /** @return int */
  public function getOverlapLength()
  {
    return $this->overlapLength;
  }
}

class GoogleCloudDatalabelingV1beta1ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public $normalizedBoundingPoly;
  /** @var string */
  public $timeOffset;
  protected $boundingPolyType = GoogleCloudDatalabelingV1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $normalizedBoundingPolyType = GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly::class;
  protected $normalizedBoundingPolyDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudDatalabelingV1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudDatalabelingV1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public function setNormalizedBoundingPoly(GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly $normalizedBoundingPoly)
  {
    $this->normalizedBoundingPoly = $normalizedBoundingPoly;
  }
  /** @return GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly */
  public function getNormalizedBoundingPoly()
  {
    return $this->normalizedBoundingPoly;
  }
  /** @param string */
  public function setTimeOffset($timeOffset)
  {
    $this->timeOffset = $timeOffset;
  }
  /** @return string */
  public function getTimeOffset()
  {
    return $this->timeOffset;
  }
}

class GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata extends \Google\Model
{
}

class GoogleCloudDatalabelingV1beta1OperatorMetadata extends \Google\Collection
{
  /** @var string[] */
  public $comments;
  /** @var int */
  public $labelVotes;
  /** @var float */
  public $score;
  /** @var int */
  public $totalVotes;
  protected $collection_key = 'comments';
  /** @param string[] */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string[] */
  public function getComments()
  {
    return $this->comments;
  }
  /** @param int */
  public function setLabelVotes($labelVotes)
  {
    $this->labelVotes = $labelVotes;
  }
  /** @return int */
  public function getLabelVotes()
  {
    return $this->labelVotes;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param int */
  public function setTotalVotes($totalVotes)
  {
    $this->totalVotes = $totalVotes;
  }
  /** @return int */
  public function getTotalVotes()
  {
    return $this->totalVotes;
  }
}

class GoogleCloudDatalabelingV1beta1OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1GcsDestination */
  public $gcsDestination;
  /** @var GoogleCloudDatalabelingV1beta1GcsFolderDestination */
  public $gcsFolderDestination;
  protected $gcsDestinationType = GoogleCloudDatalabelingV1beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $gcsFolderDestinationType = GoogleCloudDatalabelingV1beta1GcsFolderDestination::class;
  protected $gcsFolderDestinationDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1GcsDestination */
  public function setGcsDestination(GoogleCloudDatalabelingV1beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDatalabelingV1beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param GoogleCloudDatalabelingV1beta1GcsFolderDestination */
  public function setGcsFolderDestination(GoogleCloudDatalabelingV1beta1GcsFolderDestination $gcsFolderDestination)
  {
    $this->gcsFolderDestination = $gcsFolderDestination;
  }
  /** @return GoogleCloudDatalabelingV1beta1GcsFolderDestination */
  public function getGcsFolderDestination()
  {
    return $this->gcsFolderDestination;
  }
}

class GoogleCloudDatalabelingV1beta1PauseEvaluationJobRequest extends \Google\Model
{
}

class GoogleCloudDatalabelingV1beta1PdfInstruction extends \Google\Model
{
  /** @var string */
  public $gcsFileUri;

  /** @param string */
  public function setGcsFileUri($gcsFileUri)
  {
    $this->gcsFileUri = $gcsFileUri;
  }
  /** @return string */
  public function getGcsFileUri()
  {
    return $this->gcsFileUri;
  }
}

class GoogleCloudDatalabelingV1beta1Polyline extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudDatalabelingV1beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudDatalabelingV1beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudDatalabelingV1beta1PolylineConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;
  /** @var string */
  public $instructionMessage;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param string */
  public function setInstructionMessage($instructionMessage)
  {
    $this->instructionMessage = $instructionMessage;
  }
  /** @return string */
  public function getInstructionMessage()
  {
    return $this->instructionMessage;
  }
}

class GoogleCloudDatalabelingV1beta1PrCurve extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var float */
  public $areaUnderCurve;
  /** @var GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry[] */
  public $confidenceMetricsEntries;
  /** @var float */
  public $meanAveragePrecision;
  protected $collection_key = 'confidenceMetricsEntries';
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $confidenceMetricsEntriesType = GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry::class;
  protected $confidenceMetricsEntriesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param float */
  public function setAreaUnderCurve($areaUnderCurve)
  {
    $this->areaUnderCurve = $areaUnderCurve;
  }
  /** @return float */
  public function getAreaUnderCurve()
  {
    return $this->areaUnderCurve;
  }
  /** @param GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry[] */
  public function setConfidenceMetricsEntries($confidenceMetricsEntries)
  {
    $this->confidenceMetricsEntries = $confidenceMetricsEntries;
  }
  /** @return GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry[] */
  public function getConfidenceMetricsEntries()
  {
    return $this->confidenceMetricsEntries;
  }
  /** @param float */
  public function setMeanAveragePrecision($meanAveragePrecision)
  {
    $this->meanAveragePrecision = $meanAveragePrecision;
  }
  /** @return float */
  public function getMeanAveragePrecision()
  {
    return $this->meanAveragePrecision;
  }
}

class GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata extends \Google\Model
{
}

class GoogleCloudDatalabelingV1beta1ResumeEvaluationJobRequest extends \Google\Model
{
}

class GoogleCloudDatalabelingV1beta1Row extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $entriesType = GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry::class;
  protected $entriesDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class GoogleCloudDatalabelingV1beta1SearchEvaluationsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1Evaluation[] */
  public $evaluations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'evaluations';
  protected $evaluationsType = GoogleCloudDatalabelingV1beta1Evaluation::class;
  protected $evaluationsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1Evaluation[] */
  public function setEvaluations($evaluations)
  {
    $this->evaluations = $evaluations;
  }
  /** @return GoogleCloudDatalabelingV1beta1Evaluation[] */
  public function getEvaluations()
  {
    return $this->evaluations;
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

class GoogleCloudDatalabelingV1beta1SearchExampleComparisonsRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
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
}

class GoogleCloudDatalabelingV1beta1SearchExampleComparisonsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1ExampleComparison[] */
  public $exampleComparisons;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'exampleComparisons';
  protected $exampleComparisonsType = GoogleCloudDatalabelingV1beta1ExampleComparison::class;
  protected $exampleComparisonsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1ExampleComparison[] */
  public function setExampleComparisons($exampleComparisons)
  {
    $this->exampleComparisons = $exampleComparisons;
  }
  /** @return GoogleCloudDatalabelingV1beta1ExampleComparison[] */
  public function getExampleComparisons()
  {
    return $this->exampleComparisons;
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

class GoogleCloudDatalabelingV1beta1SegmentationConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;
  /** @var string */
  public $instructionMessage;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param string */
  public function setInstructionMessage($instructionMessage)
  {
    $this->instructionMessage = $instructionMessage;
  }
  /** @return string */
  public function getInstructionMessage()
  {
    return $this->instructionMessage;
  }
}

class GoogleCloudDatalabelingV1beta1SentimentConfig extends \Google\Model
{
  /** @var bool */
  public $enableLabelSentimentSelection;

  /** @param bool */
  public function setEnableLabelSentimentSelection($enableLabelSentimentSelection)
  {
    $this->enableLabelSentimentSelection = $enableLabelSentimentSelection;
  }
  /** @return bool */
  public function getEnableLabelSentimentSelection()
  {
    return $this->enableLabelSentimentSelection;
  }
}

class GoogleCloudDatalabelingV1beta1SequentialSegment extends \Google\Model
{
  /** @var int */
  public $end;
  /** @var int */
  public $start;

  /** @param int */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return int */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param int */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return int */
  public function getStart()
  {
    return $this->start;
  }
}

class GoogleCloudDatalabelingV1beta1TextClassificationAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
}

class GoogleCloudDatalabelingV1beta1TextClassificationConfig extends \Google\Model
{
  /** @var bool */
  public $allowMultiLabel;
  /** @var string */
  public $annotationSpecSet;
  /** @var GoogleCloudDatalabelingV1beta1SentimentConfig */
  public $sentimentConfig;
  protected $sentimentConfigType = GoogleCloudDatalabelingV1beta1SentimentConfig::class;
  protected $sentimentConfigDataType = '';
  /** @param bool */
  public function setAllowMultiLabel($allowMultiLabel)
  {
    $this->allowMultiLabel = $allowMultiLabel;
  }
  /** @return bool */
  public function getAllowMultiLabel()
  {
    return $this->allowMultiLabel;
  }
  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
  /** @param GoogleCloudDatalabelingV1beta1SentimentConfig */
  public function setSentimentConfig(GoogleCloudDatalabelingV1beta1SentimentConfig $sentimentConfig)
  {
    $this->sentimentConfig = $sentimentConfig;
  }
  /** @return GoogleCloudDatalabelingV1beta1SentimentConfig */
  public function getSentimentConfig()
  {
    return $this->sentimentConfig;
  }
}

class GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1SequentialSegment */
  public $sequentialSegment;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $sequentialSegmentType = GoogleCloudDatalabelingV1beta1SequentialSegment::class;
  protected $sequentialSegmentDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1SequentialSegment */
  public function setSequentialSegment(GoogleCloudDatalabelingV1beta1SequentialSegment $sequentialSegment)
  {
    $this->sequentialSegment = $sequentialSegment;
  }
  /** @return GoogleCloudDatalabelingV1beta1SequentialSegment */
  public function getSequentialSegment()
  {
    return $this->sequentialSegment;
  }
}

class GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig extends \Google\Model
{
  /** @var string */
  public $annotationSpecSet;

  /** @param string */
  public function setAnnotationSpecSet($annotationSpecSet)
  {
    $this->annotationSpecSet = $annotationSpecSet;
  }
  /** @return string */
  public function getAnnotationSpecSet()
  {
    return $this->annotationSpecSet;
  }
}

class GoogleCloudDatalabelingV1beta1TextMetadata extends \Google\Model
{
  /** @var string */
  public $languageCode;

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

class GoogleCloudDatalabelingV1beta1TextPayload extends \Google\Model
{
  /** @var string */
  public $textContent;

  /** @param string */
  public function setTextContent($textContent)
  {
    $this->textContent = $textContent;
  }
  /** @return string */
  public function getTextContent()
  {
    return $this->textContent;
  }
}

class GoogleCloudDatalabelingV1beta1TimeSegment extends \Google\Model
{
  /** @var string */
  public $endTimeOffset;
  /** @var string */
  public $startTimeOffset;

  /** @param string */
  public function setEndTimeOffset($endTimeOffset)
  {
    $this->endTimeOffset = $endTimeOffset;
  }
  /** @return string */
  public function getEndTimeOffset()
  {
    return $this->endTimeOffset;
  }
  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
}

class GoogleCloudDatalabelingV1beta1Vertex extends \Google\Model
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

class GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1TimeSegment */
  public $timeSegment;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $timeSegmentType = GoogleCloudDatalabelingV1beta1TimeSegment::class;
  protected $timeSegmentDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1TimeSegment */
  public function setTimeSegment(GoogleCloudDatalabelingV1beta1TimeSegment $timeSegment)
  {
    $this->timeSegment = $timeSegment;
  }
  /** @return GoogleCloudDatalabelingV1beta1TimeSegment */
  public function getTimeSegment()
  {
    return $this->timeSegment;
  }
}

class GoogleCloudDatalabelingV1beta1VideoClassificationConfig extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig[] */
  public $annotationSpecSetConfigs;
  /** @var bool */
  public $applyShotDetection;
  protected $collection_key = 'annotationSpecSetConfigs';
  protected $annotationSpecSetConfigsType = GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig::class;
  protected $annotationSpecSetConfigsDataType = 'array';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig[] */
  public function setAnnotationSpecSetConfigs($annotationSpecSetConfigs)
  {
    $this->annotationSpecSetConfigs = $annotationSpecSetConfigs;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig[] */
  public function getAnnotationSpecSetConfigs()
  {
    return $this->annotationSpecSetConfigs;
  }
  /** @param bool */
  public function setApplyShotDetection($applyShotDetection)
  {
    $this->applyShotDetection = $applyShotDetection;
  }
  /** @return bool */
  public function getApplyShotDetection()
  {
    return $this->applyShotDetection;
  }
}

class GoogleCloudDatalabelingV1beta1VideoEventAnnotation extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1TimeSegment */
  public $timeSegment;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $timeSegmentType = GoogleCloudDatalabelingV1beta1TimeSegment::class;
  protected $timeSegmentDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1TimeSegment */
  public function setTimeSegment(GoogleCloudDatalabelingV1beta1TimeSegment $timeSegment)
  {
    $this->timeSegment = $timeSegment;
  }
  /** @return GoogleCloudDatalabelingV1beta1TimeSegment */
  public function getTimeSegment()
  {
    return $this->timeSegment;
  }
}

class GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation extends \Google\Collection
{
  /** @var GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public $annotationSpec;
  /** @var GoogleCloudDatalabelingV1beta1ObjectTrackingFrame[] */
  public $objectTrackingFrames;
  /** @var GoogleCloudDatalabelingV1beta1TimeSegment */
  public $timeSegment;
  protected $collection_key = 'objectTrackingFrames';
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  protected $objectTrackingFramesType = GoogleCloudDatalabelingV1beta1ObjectTrackingFrame::class;
  protected $objectTrackingFramesDataType = 'array';
  protected $timeSegmentType = GoogleCloudDatalabelingV1beta1TimeSegment::class;
  protected $timeSegmentDataType = '';
  /** @param GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /** @return GoogleCloudDatalabelingV1beta1AnnotationSpec */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /** @param GoogleCloudDatalabelingV1beta1ObjectTrackingFrame[] */
  public function setObjectTrackingFrames($objectTrackingFrames)
  {
    $this->objectTrackingFrames = $objectTrackingFrames;
  }
  /** @return GoogleCloudDatalabelingV1beta1ObjectTrackingFrame[] */
  public function getObjectTrackingFrames()
  {
    return $this->objectTrackingFrames;
  }
  /** @param GoogleCloudDatalabelingV1beta1TimeSegment */
  public function setTimeSegment(GoogleCloudDatalabelingV1beta1TimeSegment $timeSegment)
  {
    $this->timeSegment = $timeSegment;
  }
  /** @return GoogleCloudDatalabelingV1beta1TimeSegment */
  public function getTimeSegment()
  {
    return $this->timeSegment;
  }
}

class GoogleCloudDatalabelingV1beta1VideoPayload extends \Google\Collection
{
  /** @var float */
  public $frameRate;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $signedUri;
  /** @var GoogleCloudDatalabelingV1beta1VideoThumbnail[] */
  public $videoThumbnails;
  /** @var string */
  public $videoUri;
  protected $collection_key = 'videoThumbnails';
  protected $videoThumbnailsType = GoogleCloudDatalabelingV1beta1VideoThumbnail::class;
  protected $videoThumbnailsDataType = 'array';
  /** @param float */
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  /** @return float */
  public function getFrameRate()
  {
    return $this->frameRate;
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
  /** @param string */
  public function setSignedUri($signedUri)
  {
    $this->signedUri = $signedUri;
  }
  /** @return string */
  public function getSignedUri()
  {
    return $this->signedUri;
  }
  /** @param GoogleCloudDatalabelingV1beta1VideoThumbnail[] */
  public function setVideoThumbnails($videoThumbnails)
  {
    $this->videoThumbnails = $videoThumbnails;
  }
  /** @return GoogleCloudDatalabelingV1beta1VideoThumbnail[] */
  public function getVideoThumbnails()
  {
    return $this->videoThumbnails;
  }
  /** @param string */
  public function setVideoUri($videoUri)
  {
    $this->videoUri = $videoUri;
  }
  /** @return string */
  public function getVideoUri()
  {
    return $this->videoUri;
  }
}

class GoogleCloudDatalabelingV1beta1VideoThumbnail extends \Google\Model
{
  /** @var string */
  public $thumbnail;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setThumbnail($thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return string */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
  /** @param string */
  public function setTimeOffset($timeOffset)
  {
    $this->timeOffset = $timeOffset;
  }
  /** @return string */
  public function getTimeOffset()
  {
    return $this->timeOffset;
  }
}

class GoogleCloudDatalabelingV1p1alpha1CreateInstructionMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $instruction;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p1alpha1ExportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p1alpha1ExportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $dataset;
  /** @var int */
  public $exportCount;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelStats */
  public $labelStats;
  /** @var GoogleCloudDatalabelingV1p1alpha1OutputConfig */
  public $outputConfig;
  /** @var int */
  public $totalCount;
  protected $labelStatsType = GoogleCloudDatalabelingV1p1alpha1LabelStats::class;
  protected $labelStatsDataType = '';
  protected $outputConfigType = GoogleCloudDatalabelingV1p1alpha1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  /** @param int */
  public function setExportCount($exportCount)
  {
    $this->exportCount = $exportCount;
  }
  /** @return int */
  public function getExportCount()
  {
    return $this->exportCount;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelStats */
  public function setLabelStats(GoogleCloudDatalabelingV1p1alpha1LabelStats $labelStats)
  {
    $this->labelStats = $labelStats;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelStats */
  public function getLabelStats()
  {
    return $this->labelStats;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1OutputConfig */
  public function setOutputConfig(GoogleCloudDatalabelingV1p1alpha1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
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
}

class GoogleCloudDatalabelingV1p1alpha1GcsDestination extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $outputUri;

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
  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination extends \Google\Model
{
  /** @var string */
  public $outputFolderUri;

  /** @param string */
  public function setOutputFolderUri($outputFolderUri)
  {
    $this->outputFolderUri = $outputFolderUri;
  }
  /** @return string */
  public function getOutputFolderUri()
  {
    return $this->outputFolderUri;
  }
}

class GoogleCloudDatalabelingV1p1alpha1GenerateAnalysisReportOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;

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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
}

class GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig extends \Google\Collection
{
  /** @var string */
  public $annotatedDatasetDescription;
  /** @var string */
  public $annotatedDatasetDisplayName;
  /** @var string[] */
  public $contributorEmails;
  /** @var string */
  public $instruction;
  /** @var string */
  public $labelGroup;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $questionDuration;
  /** @var int */
  public $replicaCount;
  /** @var string */
  public $userEmailAddress;
  protected $collection_key = 'contributorEmails';
  /** @param string */
  public function setAnnotatedDatasetDescription($annotatedDatasetDescription)
  {
    $this->annotatedDatasetDescription = $annotatedDatasetDescription;
  }
  /** @return string */
  public function getAnnotatedDatasetDescription()
  {
    return $this->annotatedDatasetDescription;
  }
  /** @param string */
  public function setAnnotatedDatasetDisplayName($annotatedDatasetDisplayName)
  {
    $this->annotatedDatasetDisplayName = $annotatedDatasetDisplayName;
  }
  /** @return string */
  public function getAnnotatedDatasetDisplayName()
  {
    return $this->annotatedDatasetDisplayName;
  }
  /** @param string[] */
  public function setContributorEmails($contributorEmails)
  {
    $this->contributorEmails = $contributorEmails;
  }
  /** @return string[] */
  public function getContributorEmails()
  {
    return $this->contributorEmails;
  }
  /** @param string */
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param string */
  public function setLabelGroup($labelGroup)
  {
    $this->labelGroup = $labelGroup;
  }
  /** @return string */
  public function getLabelGroup()
  {
    return $this->labelGroup;
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
  public function setQuestionDuration($questionDuration)
  {
    $this->questionDuration = $questionDuration;
  }
  /** @return string */
  public function getQuestionDuration()
  {
    return $this->questionDuration;
  }
  /** @param int */
  public function setReplicaCount($replicaCount)
  {
    $this->replicaCount = $replicaCount;
  }
  /** @return int */
  public function getReplicaCount()
  {
    return $this->replicaCount;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1p1alpha1ImportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p1alpha1ImportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var int */
  public $importCount;
  /** @var int */
  public $totalCount;

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
  /** @param int */
  public function setImportCount($importCount)
  {
    $this->importCount = $importCount;
  }
  /** @return int */
  public function getImportCount()
  {
    return $this->importCount;
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
}

class GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata */
  public $imageBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata */
  public $imageBoundingPolyDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata */
  public $imageClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public $imageOrientedBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata */
  public $imagePolylineDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata */
  public $imageSegmentationDetails;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata */
  public $textClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata */
  public $textEntityExtractionDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata */
  public $videoClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata */
  public $videoEventDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata */
  public $videoObjectDetectionDetails;
  /** @var GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata */
  public $videoObjectTrackingDetails;
  protected $collection_key = 'partialFailures';
  protected $imageBoundingBoxDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata::class;
  protected $imageBoundingBoxDetailsDataType = '';
  protected $imageBoundingPolyDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata::class;
  protected $imageBoundingPolyDetailsDataType = '';
  protected $imageClassificationDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata::class;
  protected $imageClassificationDetailsDataType = '';
  protected $imageOrientedBoundingBoxDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata::class;
  protected $imageOrientedBoundingBoxDetailsDataType = '';
  protected $imagePolylineDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata::class;
  protected $imagePolylineDetailsDataType = '';
  protected $imageSegmentationDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata::class;
  protected $imageSegmentationDetailsDataType = '';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  protected $textClassificationDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata::class;
  protected $textClassificationDetailsDataType = '';
  protected $textEntityExtractionDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata::class;
  protected $textEntityExtractionDetailsDataType = '';
  protected $videoClassificationDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata::class;
  protected $videoClassificationDetailsDataType = '';
  protected $videoEventDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata::class;
  protected $videoEventDetailsDataType = '';
  protected $videoObjectDetectionDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata::class;
  protected $videoObjectDetectionDetailsDataType = '';
  protected $videoObjectTrackingDetailsType = GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata::class;
  protected $videoObjectTrackingDetailsDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata */
  public function setImageBoundingBoxDetails(GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata $imageBoundingBoxDetails)
  {
    $this->imageBoundingBoxDetails = $imageBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata */
  public function getImageBoundingBoxDetails()
  {
    return $this->imageBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata */
  public function setImageBoundingPolyDetails(GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata $imageBoundingPolyDetails)
  {
    $this->imageBoundingPolyDetails = $imageBoundingPolyDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata */
  public function getImageBoundingPolyDetails()
  {
    return $this->imageBoundingPolyDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata */
  public function setImageClassificationDetails(GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata $imageClassificationDetails)
  {
    $this->imageClassificationDetails = $imageClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata */
  public function getImageClassificationDetails()
  {
    return $this->imageClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function setImageOrientedBoundingBoxDetails(GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata $imageOrientedBoundingBoxDetails)
  {
    $this->imageOrientedBoundingBoxDetails = $imageOrientedBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function getImageOrientedBoundingBoxDetails()
  {
    return $this->imageOrientedBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata */
  public function setImagePolylineDetails(GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata $imagePolylineDetails)
  {
    $this->imagePolylineDetails = $imagePolylineDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata */
  public function getImagePolylineDetails()
  {
    return $this->imagePolylineDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata */
  public function setImageSegmentationDetails(GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata $imageSegmentationDetails)
  {
    $this->imageSegmentationDetails = $imageSegmentationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata */
  public function getImageSegmentationDetails()
  {
    return $this->imageSegmentationDetails;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata */
  public function setTextClassificationDetails(GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata $textClassificationDetails)
  {
    $this->textClassificationDetails = $textClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata */
  public function getTextClassificationDetails()
  {
    return $this->textClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata */
  public function setTextEntityExtractionDetails(GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata $textEntityExtractionDetails)
  {
    $this->textEntityExtractionDetails = $textEntityExtractionDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata */
  public function getTextEntityExtractionDetails()
  {
    return $this->textEntityExtractionDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata */
  public function setVideoClassificationDetails(GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata $videoClassificationDetails)
  {
    $this->videoClassificationDetails = $videoClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata */
  public function getVideoClassificationDetails()
  {
    return $this->videoClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata */
  public function setVideoEventDetails(GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata $videoEventDetails)
  {
    $this->videoEventDetails = $videoEventDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata */
  public function getVideoEventDetails()
  {
    return $this->videoEventDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata */
  public function setVideoObjectDetectionDetails(GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata $videoObjectDetectionDetails)
  {
    $this->videoObjectDetectionDetails = $videoObjectDetectionDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata */
  public function getVideoObjectDetectionDetails()
  {
    return $this->videoObjectDetectionDetails;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata */
  public function setVideoObjectTrackingDetails(GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata $videoObjectTrackingDetails)
  {
    $this->videoObjectTrackingDetails = $videoObjectTrackingDetails;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata */
  public function getVideoObjectTrackingDetails()
  {
    return $this->videoObjectTrackingDetails;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelStats extends \Google\Model
{
  /** @var string[] */
  public $exampleCount;

  /** @param string[] */
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return string[] */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p1alpha1OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p1alpha1GcsDestination */
  public $gcsDestination;
  /** @var GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination */
  public $gcsFolderDestination;
  protected $gcsDestinationType = GoogleCloudDatalabelingV1p1alpha1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $gcsFolderDestinationType = GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination::class;
  protected $gcsFolderDestinationDataType = '';
  /** @param GoogleCloudDatalabelingV1p1alpha1GcsDestination */
  public function setGcsDestination(GoogleCloudDatalabelingV1p1alpha1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination */
  public function setGcsFolderDestination(GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination $gcsFolderDestination)
  {
    $this->gcsFolderDestination = $gcsFolderDestination;
  }
  /** @return GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination */
  public function getGcsFolderDestination()
  {
    return $this->gcsFolderDestination;
  }
}

class GoogleCloudDatalabelingV1p2alpha1CreateInstructionMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $instruction;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p2alpha1ExportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p2alpha1ExportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $dataset;
  /** @var int */
  public $exportCount;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelStats */
  public $labelStats;
  /** @var GoogleCloudDatalabelingV1p2alpha1OutputConfig */
  public $outputConfig;
  /** @var int */
  public $totalCount;
  protected $labelStatsType = GoogleCloudDatalabelingV1p2alpha1LabelStats::class;
  protected $labelStatsDataType = '';
  protected $outputConfigType = GoogleCloudDatalabelingV1p2alpha1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  /** @param int */
  public function setExportCount($exportCount)
  {
    $this->exportCount = $exportCount;
  }
  /** @return int */
  public function getExportCount()
  {
    return $this->exportCount;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelStats */
  public function setLabelStats(GoogleCloudDatalabelingV1p2alpha1LabelStats $labelStats)
  {
    $this->labelStats = $labelStats;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelStats */
  public function getLabelStats()
  {
    return $this->labelStats;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1OutputConfig */
  public function setOutputConfig(GoogleCloudDatalabelingV1p2alpha1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
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
}

class GoogleCloudDatalabelingV1p2alpha1GcsDestination extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $outputUri;

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
  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination extends \Google\Model
{
  /** @var string */
  public $outputFolderUri;

  /** @param string */
  public function setOutputFolderUri($outputFolderUri)
  {
    $this->outputFolderUri = $outputFolderUri;
  }
  /** @return string */
  public function getOutputFolderUri()
  {
    return $this->outputFolderUri;
  }
}

class GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig extends \Google\Collection
{
  /** @var string */
  public $annotatedDatasetDescription;
  /** @var string */
  public $annotatedDatasetDisplayName;
  /** @var string[] */
  public $contributorEmails;
  /** @var string */
  public $instruction;
  /** @var string */
  public $labelGroup;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $questionDuration;
  /** @var int */
  public $replicaCount;
  /** @var string */
  public $userEmailAddress;
  protected $collection_key = 'contributorEmails';
  /** @param string */
  public function setAnnotatedDatasetDescription($annotatedDatasetDescription)
  {
    $this->annotatedDatasetDescription = $annotatedDatasetDescription;
  }
  /** @return string */
  public function getAnnotatedDatasetDescription()
  {
    return $this->annotatedDatasetDescription;
  }
  /** @param string */
  public function setAnnotatedDatasetDisplayName($annotatedDatasetDisplayName)
  {
    $this->annotatedDatasetDisplayName = $annotatedDatasetDisplayName;
  }
  /** @return string */
  public function getAnnotatedDatasetDisplayName()
  {
    return $this->annotatedDatasetDisplayName;
  }
  /** @param string[] */
  public function setContributorEmails($contributorEmails)
  {
    $this->contributorEmails = $contributorEmails;
  }
  /** @return string[] */
  public function getContributorEmails()
  {
    return $this->contributorEmails;
  }
  /** @param string */
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /** @return string */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /** @param string */
  public function setLabelGroup($labelGroup)
  {
    $this->labelGroup = $labelGroup;
  }
  /** @return string */
  public function getLabelGroup()
  {
    return $this->labelGroup;
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
  public function setQuestionDuration($questionDuration)
  {
    $this->questionDuration = $questionDuration;
  }
  /** @return string */
  public function getQuestionDuration()
  {
    return $this->questionDuration;
  }
  /** @param int */
  public function setReplicaCount($replicaCount)
  {
    $this->replicaCount = $replicaCount;
  }
  /** @return int */
  public function getReplicaCount()
  {
    return $this->replicaCount;
  }
  /** @param string */
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  /** @return string */
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}

class GoogleCloudDatalabelingV1p2alpha1ImportDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDatalabelingV1p2alpha1ImportDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var int */
  public $importCount;
  /** @var int */
  public $totalCount;

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
  /** @param int */
  public function setImportCount($importCount)
  {
    $this->importCount = $importCount;
  }
  /** @return int */
  public function getImportCount()
  {
    return $this->importCount;
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
}

class GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $annotatedDataset;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata */
  public $imageBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata */
  public $imageBoundingPolyDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata */
  public $imageClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public $imageOrientedBoundingBoxDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata */
  public $imagePolylineDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata */
  public $imageSegmentationDetails;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata */
  public $textClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata */
  public $textEntityExtractionDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata */
  public $videoClassificationDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata */
  public $videoEventDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata */
  public $videoObjectDetectionDetails;
  /** @var GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata */
  public $videoObjectTrackingDetails;
  protected $collection_key = 'partialFailures';
  protected $imageBoundingBoxDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata::class;
  protected $imageBoundingBoxDetailsDataType = '';
  protected $imageBoundingPolyDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata::class;
  protected $imageBoundingPolyDetailsDataType = '';
  protected $imageClassificationDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata::class;
  protected $imageClassificationDetailsDataType = '';
  protected $imageOrientedBoundingBoxDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata::class;
  protected $imageOrientedBoundingBoxDetailsDataType = '';
  protected $imagePolylineDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata::class;
  protected $imagePolylineDetailsDataType = '';
  protected $imageSegmentationDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata::class;
  protected $imageSegmentationDetailsDataType = '';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  protected $textClassificationDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata::class;
  protected $textClassificationDetailsDataType = '';
  protected $textEntityExtractionDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata::class;
  protected $textEntityExtractionDetailsDataType = '';
  protected $videoClassificationDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata::class;
  protected $videoClassificationDetailsDataType = '';
  protected $videoEventDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata::class;
  protected $videoEventDetailsDataType = '';
  protected $videoObjectDetectionDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata::class;
  protected $videoObjectDetectionDetailsDataType = '';
  protected $videoObjectTrackingDetailsType = GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata::class;
  protected $videoObjectTrackingDetailsDataType = '';
  /** @param string */
  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  /** @return string */
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata */
  public function setImageBoundingBoxDetails(GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata $imageBoundingBoxDetails)
  {
    $this->imageBoundingBoxDetails = $imageBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata */
  public function getImageBoundingBoxDetails()
  {
    return $this->imageBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata */
  public function setImageBoundingPolyDetails(GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata $imageBoundingPolyDetails)
  {
    $this->imageBoundingPolyDetails = $imageBoundingPolyDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata */
  public function getImageBoundingPolyDetails()
  {
    return $this->imageBoundingPolyDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata */
  public function setImageClassificationDetails(GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata $imageClassificationDetails)
  {
    $this->imageClassificationDetails = $imageClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata */
  public function getImageClassificationDetails()
  {
    return $this->imageClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function setImageOrientedBoundingBoxDetails(GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata $imageOrientedBoundingBoxDetails)
  {
    $this->imageOrientedBoundingBoxDetails = $imageOrientedBoundingBoxDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata */
  public function getImageOrientedBoundingBoxDetails()
  {
    return $this->imageOrientedBoundingBoxDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata */
  public function setImagePolylineDetails(GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata $imagePolylineDetails)
  {
    $this->imagePolylineDetails = $imagePolylineDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata */
  public function getImagePolylineDetails()
  {
    return $this->imagePolylineDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata */
  public function setImageSegmentationDetails(GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata $imageSegmentationDetails)
  {
    $this->imageSegmentationDetails = $imageSegmentationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata */
  public function getImageSegmentationDetails()
  {
    return $this->imageSegmentationDetails;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata */
  public function setTextClassificationDetails(GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata $textClassificationDetails)
  {
    $this->textClassificationDetails = $textClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata */
  public function getTextClassificationDetails()
  {
    return $this->textClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata */
  public function setTextEntityExtractionDetails(GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata $textEntityExtractionDetails)
  {
    $this->textEntityExtractionDetails = $textEntityExtractionDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata */
  public function getTextEntityExtractionDetails()
  {
    return $this->textEntityExtractionDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata */
  public function setVideoClassificationDetails(GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata $videoClassificationDetails)
  {
    $this->videoClassificationDetails = $videoClassificationDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata */
  public function getVideoClassificationDetails()
  {
    return $this->videoClassificationDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata */
  public function setVideoEventDetails(GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata $videoEventDetails)
  {
    $this->videoEventDetails = $videoEventDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata */
  public function getVideoEventDetails()
  {
    return $this->videoEventDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata */
  public function setVideoObjectDetectionDetails(GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata $videoObjectDetectionDetails)
  {
    $this->videoObjectDetectionDetails = $videoObjectDetectionDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata */
  public function getVideoObjectDetectionDetails()
  {
    return $this->videoObjectDetectionDetails;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata */
  public function setVideoObjectTrackingDetails(GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata $videoObjectTrackingDetails)
  {
    $this->videoObjectTrackingDetails = $videoObjectTrackingDetails;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata */
  public function getVideoObjectTrackingDetails()
  {
    return $this->videoObjectTrackingDetails;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelStats extends \Google\Model
{
  /** @var string[] */
  public $exampleCount;

  /** @param string[] */
  public function setExampleCount($exampleCount)
  {
    $this->exampleCount = $exampleCount;
  }
  /** @return string[] */
  public function getExampleCount()
  {
    return $this->exampleCount;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public $basicConfig;
  protected $basicConfigType = GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class;
  protected $basicConfigDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function setBasicConfig(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig $basicConfig)
  {
    $this->basicConfig = $basicConfig;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig */
  public function getBasicConfig()
  {
    return $this->basicConfig;
  }
}

class GoogleCloudDatalabelingV1p2alpha1OutputConfig extends \Google\Model
{
  /** @var GoogleCloudDatalabelingV1p2alpha1GcsDestination */
  public $gcsDestination;
  /** @var GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination */
  public $gcsFolderDestination;
  protected $gcsDestinationType = GoogleCloudDatalabelingV1p2alpha1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $gcsFolderDestinationType = GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination::class;
  protected $gcsFolderDestinationDataType = '';
  /** @param GoogleCloudDatalabelingV1p2alpha1GcsDestination */
  public function setGcsDestination(GoogleCloudDatalabelingV1p2alpha1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination */
  public function setGcsFolderDestination(GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination $gcsFolderDestination)
  {
    $this->gcsFolderDestination = $gcsFolderDestination;
  }
  /** @return GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination */
  public function getGcsFolderDestination()
  {
    return $this->gcsFolderDestination;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatalabelingV1alpha1CreateInstructionMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1CreateInstructionMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1ExportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1ExportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1ExportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1ExportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1alpha1GcsDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1GcsDestination');
class_alias(GoogleCloudDatalabelingV1alpha1GcsFolderDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1GcsFolderDestination');
class_alias(GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1HumanAnnotationConfig');
class_alias(GoogleCloudDatalabelingV1alpha1ImportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1ImportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1ImportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1ImportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImageBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImageBoundingPolyOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImageClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImageOrientedBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImagePolylineOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelImageSegmentationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelStats::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelStats');
class_alias(GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelTextClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelTextEntityExtractionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelVideoClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelVideoEventOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelVideoObjectDetectionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1LabelVideoObjectTrackingOperationMetadata');
class_alias(GoogleCloudDatalabelingV1alpha1OutputConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1OutputConfig');
class_alias(GoogleCloudDatalabelingV1beta1AnnotatedDataset::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotatedDataset');
class_alias(GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotatedDatasetMetadata');
class_alias(GoogleCloudDatalabelingV1beta1Annotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Annotation');
class_alias(GoogleCloudDatalabelingV1beta1AnnotationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1AnnotationSpec::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotationSpec');
class_alias(GoogleCloudDatalabelingV1beta1AnnotationSpecSet::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotationSpecSet');
class_alias(GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotationSpecSetConfig');
class_alias(GoogleCloudDatalabelingV1beta1AnnotationValue::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1AnnotationValue');
class_alias(GoogleCloudDatalabelingV1beta1Attempt::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Attempt');
class_alias(GoogleCloudDatalabelingV1beta1BigQuerySource::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1BigQuerySource');
class_alias(GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1BoundingBoxEvaluationOptions');
class_alias(GoogleCloudDatalabelingV1beta1BoundingPoly::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1BoundingPoly');
class_alias(GoogleCloudDatalabelingV1beta1BoundingPolyConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1BoundingPolyConfig');
class_alias(GoogleCloudDatalabelingV1beta1ClassificationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ClassificationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1ClassificationMetrics::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ClassificationMetrics');
class_alias(GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ConfidenceMetricsEntry');
class_alias(GoogleCloudDatalabelingV1beta1ConfusionMatrix::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ConfusionMatrix');
class_alias(GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry');
class_alias(GoogleCloudDatalabelingV1beta1CreateAnnotationSpecSetRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CreateAnnotationSpecSetRequest');
class_alias(GoogleCloudDatalabelingV1beta1CreateDatasetRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CreateDatasetRequest');
class_alias(GoogleCloudDatalabelingV1beta1CreateEvaluationJobRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CreateEvaluationJobRequest');
class_alias(GoogleCloudDatalabelingV1beta1CreateInstructionMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CreateInstructionMetadata');
class_alias(GoogleCloudDatalabelingV1beta1CreateInstructionRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CreateInstructionRequest');
class_alias(GoogleCloudDatalabelingV1beta1CsvInstruction::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1CsvInstruction');
class_alias(GoogleCloudDatalabelingV1beta1DataItem::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1DataItem');
class_alias(GoogleCloudDatalabelingV1beta1Dataset::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Dataset');
class_alias(GoogleCloudDatalabelingV1beta1Evaluation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Evaluation');
class_alias(GoogleCloudDatalabelingV1beta1EvaluationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EvaluationConfig');
class_alias(GoogleCloudDatalabelingV1beta1EvaluationJob::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EvaluationJob');
class_alias(GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EvaluationJobAlertConfig');
class_alias(GoogleCloudDatalabelingV1beta1EvaluationJobConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EvaluationJobConfig');
class_alias(GoogleCloudDatalabelingV1beta1EvaluationMetrics::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EvaluationMetrics');
class_alias(GoogleCloudDatalabelingV1beta1EventConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1EventConfig');
class_alias(GoogleCloudDatalabelingV1beta1Example::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Example');
class_alias(GoogleCloudDatalabelingV1beta1ExampleComparison::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ExampleComparison');
class_alias(GoogleCloudDatalabelingV1beta1ExportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ExportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1ExportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ExportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1beta1ExportDataRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ExportDataRequest');
class_alias(GoogleCloudDatalabelingV1beta1FeedbackMessage::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1FeedbackMessage');
class_alias(GoogleCloudDatalabelingV1beta1FeedbackThread::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1FeedbackThread');
class_alias(GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1FeedbackThreadMetadata');
class_alias(GoogleCloudDatalabelingV1beta1GcsDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1GcsDestination');
class_alias(GoogleCloudDatalabelingV1beta1GcsFolderDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1GcsFolderDestination');
class_alias(GoogleCloudDatalabelingV1beta1GcsSource::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1GcsSource');
class_alias(GoogleCloudDatalabelingV1beta1HumanAnnotationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1HumanAnnotationConfig');
class_alias(GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImageBoundingPolyAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImageClassificationAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1ImageClassificationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImageClassificationConfig');
class_alias(GoogleCloudDatalabelingV1beta1ImagePayload::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImagePayload');
class_alias(GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImagePolylineAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImageSegmentationAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1ImportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1ImportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1beta1ImportDataRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ImportDataRequest');
class_alias(GoogleCloudDatalabelingV1beta1InputConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1InputConfig');
class_alias(GoogleCloudDatalabelingV1beta1Instruction::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Instruction');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageBoundingPolyOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageOrientedBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImagePolylineOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageRequest');
class_alias(GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelImageSegmentationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelStats::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelStats');
class_alias(GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelTextClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelTextEntityExtractionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelTextRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelTextRequest');
class_alias(GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelVideoClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelVideoEventOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelVideoObjectDetectionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelVideoObjectTrackingOperationMetadata');
class_alias(GoogleCloudDatalabelingV1beta1LabelVideoRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1LabelVideoRequest');
class_alias(GoogleCloudDatalabelingV1beta1ListAnnotatedDatasetsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListAnnotatedDatasetsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListAnnotationSpecSetsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListAnnotationSpecSetsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListDataItemsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListDataItemsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListDatasetsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListDatasetsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListExamplesResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListExamplesResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListFeedbackMessagesResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListFeedbackMessagesResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListFeedbackThreadsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListFeedbackThreadsResponse');
class_alias(GoogleCloudDatalabelingV1beta1ListInstructionsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListInstructionsResponse');
class_alias(GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1NormalizedBoundingPoly');
class_alias(GoogleCloudDatalabelingV1beta1NormalizedPolyline::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1NormalizedPolyline');
class_alias(GoogleCloudDatalabelingV1beta1NormalizedVertex::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1NormalizedVertex');
class_alias(GoogleCloudDatalabelingV1beta1ObjectDetectionConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ObjectDetectionConfig');
class_alias(GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ObjectDetectionMetrics');
class_alias(GoogleCloudDatalabelingV1beta1ObjectTrackingConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ObjectTrackingConfig');
class_alias(GoogleCloudDatalabelingV1beta1ObjectTrackingFrame::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ObjectTrackingFrame');
class_alias(GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OperatorFeedbackMetadata');
class_alias(GoogleCloudDatalabelingV1beta1OperatorMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OperatorMetadata');
class_alias(GoogleCloudDatalabelingV1beta1OutputConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OutputConfig');
class_alias(GoogleCloudDatalabelingV1beta1PauseEvaluationJobRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1PauseEvaluationJobRequest');
class_alias(GoogleCloudDatalabelingV1beta1PdfInstruction::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1PdfInstruction');
class_alias(GoogleCloudDatalabelingV1beta1Polyline::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Polyline');
class_alias(GoogleCloudDatalabelingV1beta1PolylineConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1PolylineConfig');
class_alias(GoogleCloudDatalabelingV1beta1PrCurve::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1PrCurve');
class_alias(GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1RequesterFeedbackMetadata');
class_alias(GoogleCloudDatalabelingV1beta1ResumeEvaluationJobRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ResumeEvaluationJobRequest');
class_alias(GoogleCloudDatalabelingV1beta1Row::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Row');
class_alias(GoogleCloudDatalabelingV1beta1SearchEvaluationsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SearchEvaluationsResponse');
class_alias(GoogleCloudDatalabelingV1beta1SearchExampleComparisonsRequest::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SearchExampleComparisonsRequest');
class_alias(GoogleCloudDatalabelingV1beta1SearchExampleComparisonsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SearchExampleComparisonsResponse');
class_alias(GoogleCloudDatalabelingV1beta1SegmentationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SegmentationConfig');
class_alias(GoogleCloudDatalabelingV1beta1SentimentConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SentimentConfig');
class_alias(GoogleCloudDatalabelingV1beta1SequentialSegment::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1SequentialSegment');
class_alias(GoogleCloudDatalabelingV1beta1TextClassificationAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextClassificationAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1TextClassificationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextClassificationConfig');
class_alias(GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextEntityExtractionAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextEntityExtractionConfig');
class_alias(GoogleCloudDatalabelingV1beta1TextMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextMetadata');
class_alias(GoogleCloudDatalabelingV1beta1TextPayload::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TextPayload');
class_alias(GoogleCloudDatalabelingV1beta1TimeSegment::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1TimeSegment');
class_alias(GoogleCloudDatalabelingV1beta1Vertex::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Vertex');
class_alias(GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoClassificationAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1VideoClassificationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoClassificationConfig');
class_alias(GoogleCloudDatalabelingV1beta1VideoEventAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoEventAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoObjectTrackingAnnotation');
class_alias(GoogleCloudDatalabelingV1beta1VideoPayload::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoPayload');
class_alias(GoogleCloudDatalabelingV1beta1VideoThumbnail::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1VideoThumbnail');
class_alias(GoogleCloudDatalabelingV1p1alpha1CreateInstructionMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1CreateInstructionMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1ExportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1ExportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1ExportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1ExportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1p1alpha1GcsDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1GcsDestination');
class_alias(GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1GcsFolderDestination');
class_alias(GoogleCloudDatalabelingV1p1alpha1GenerateAnalysisReportOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1GenerateAnalysisReportOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1HumanAnnotationConfig');
class_alias(GoogleCloudDatalabelingV1p1alpha1ImportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1ImportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1ImportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1ImportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImageBoundingPolyOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImageClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImageOrientedBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImagePolylineOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelImageSegmentationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelStats::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelStats');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelTextClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelTextEntityExtractionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelVideoClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelVideoEventOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectDetectionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1LabelVideoObjectTrackingOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p1alpha1OutputConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p1alpha1OutputConfig');
class_alias(GoogleCloudDatalabelingV1p2alpha1CreateInstructionMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1CreateInstructionMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1ExportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1ExportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1ExportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1ExportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1p2alpha1GcsDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1GcsDestination');
class_alias(GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1GcsFolderDestination');
class_alias(GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1HumanAnnotationConfig');
class_alias(GoogleCloudDatalabelingV1p2alpha1ImportDataOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1ImportDataOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1ImportDataOperationResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1ImportDataOperationResponse');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImageBoundingPolyOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImageClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImageOrientedBoundingBoxOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImagePolylineOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelImageSegmentationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelStats::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelStats');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelTextClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelTextEntityExtractionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelVideoClassificationOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelVideoEventOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectDetectionOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1LabelVideoObjectTrackingOperationMetadata');
class_alias(GoogleCloudDatalabelingV1p2alpha1OutputConfig::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1p2alpha1OutputConfig');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_DataLabeling_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_DataLabeling_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_DataLabeling_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_DataLabeling_GoogleRpcStatus');
