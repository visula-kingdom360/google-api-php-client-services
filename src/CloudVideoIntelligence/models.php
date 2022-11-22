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

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1AnnotateVideoProgress extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1VideoAnnotationProgress[] */
  public $annotationProgress;
  protected $collection_key = 'annotationProgress';
  protected $annotationProgressType = GoogleCloudVideointelligenceV1VideoAnnotationProgress::class;
  protected $annotationProgressDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1VideoAnnotationProgress[] */
  public function setAnnotationProgress($annotationProgress)
  {
    $this->annotationProgress = $annotationProgress;
  }
  /** @return GoogleCloudVideointelligenceV1VideoAnnotationProgress[] */
  public function getAnnotationProgress()
  {
    return $this->annotationProgress;
  }
}

class GoogleCloudVideointelligenceV1AnnotateVideoRequest extends \Google\Collection
{
  /** @var string[] */
  public $features;
  /** @var string */
  public $inputContent;
  /** @var string */
  public $inputUri;
  /** @var string */
  public $locationId;
  /** @var string */
  public $outputUri;
  /** @var GoogleCloudVideointelligenceV1VideoContext */
  public $videoContext;
  protected $collection_key = 'features';
  protected $videoContextType = GoogleCloudVideointelligenceV1VideoContext::class;
  protected $videoContextDataType = '';
  /** @param string[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return string[] */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param string */
  public function setInputContent($inputContent)
  {
    $this->inputContent = $inputContent;
  }
  /** @return string */
  public function getInputContent()
  {
    return $this->inputContent;
  }
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
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
  /** @param GoogleCloudVideointelligenceV1VideoContext */
  public function setVideoContext(GoogleCloudVideointelligenceV1VideoContext $videoContext)
  {
    $this->videoContext = $videoContext;
  }
  /** @return GoogleCloudVideointelligenceV1VideoContext */
  public function getVideoContext()
  {
    return $this->videoContext;
  }
}

class GoogleCloudVideointelligenceV1AnnotateVideoResponse extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1VideoAnnotationResults[] */
  public $annotationResults;
  protected $collection_key = 'annotationResults';
  protected $annotationResultsType = GoogleCloudVideointelligenceV1VideoAnnotationResults::class;
  protected $annotationResultsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1VideoAnnotationResults[] */
  public function setAnnotationResults($annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1VideoAnnotationResults[] */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
}

class GoogleCloudVideointelligenceV1DetectedAttribute extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class GoogleCloudVideointelligenceV1DetectedLandmark extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var GoogleCloudVideointelligenceV1NormalizedVertex */
  public $point;
  protected $pointType = GoogleCloudVideointelligenceV1NormalizedVertex::class;
  protected $pointDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1NormalizedVertex */
  public function setPoint(GoogleCloudVideointelligenceV1NormalizedVertex $point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedVertex */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudVideointelligenceV1Entity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var string */
  public $languageCode;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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

class GoogleCloudVideointelligenceV1ExplicitContentAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1ExplicitContentFrame[] */
  public $frames;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1ExplicitContentFrame::class;
  protected $framesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1ExplicitContentFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1ExplicitContentFrame[] */
  public function getFrames()
  {
    return $this->frames;
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

class GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig extends \Google\Model
{
  /** @var string */
  public $model;

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
}

class GoogleCloudVideointelligenceV1ExplicitContentFrame extends \Google\Model
{
  /** @var string */
  public $pornographyLikelihood;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setPornographyLikelihood($pornographyLikelihood)
  {
    $this->pornographyLikelihood = $pornographyLikelihood;
  }
  /** @return string */
  public function getPornographyLikelihood()
  {
    return $this->pornographyLikelihood;
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

class GoogleCloudVideointelligenceV1FaceAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1FaceFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1FaceSegment[] */
  public $segments;
  /** @var string */
  public $thumbnail;
  protected $collection_key = 'segments';
  protected $framesType = GoogleCloudVideointelligenceV1FaceFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1FaceSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1FaceFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1FaceFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1FaceSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1FaceSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1FaceDetectionAnnotation extends \Google\Collection
{
  /** @var string */
  public $thumbnail;
  /** @var GoogleCloudVideointelligenceV1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1Track::class;
  protected $tracksDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1FaceDetectionConfig extends \Google\Model
{
  /** @var bool */
  public $includeAttributes;
  /** @var bool */
  public $includeBoundingBoxes;
  /** @var string */
  public $model;

  /** @param bool */
  public function setIncludeAttributes($includeAttributes)
  {
    $this->includeAttributes = $includeAttributes;
  }
  /** @return bool */
  public function getIncludeAttributes()
  {
    return $this->includeAttributes;
  }
  /** @param bool */
  public function setIncludeBoundingBoxes($includeBoundingBoxes)
  {
    $this->includeBoundingBoxes = $includeBoundingBoxes;
  }
  /** @return bool */
  public function getIncludeBoundingBoxes()
  {
    return $this->includeBoundingBoxes;
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
}

class GoogleCloudVideointelligenceV1FaceFrame extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1NormalizedBoundingBox[] */
  public $normalizedBoundingBoxes;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'normalizedBoundingBoxes';
  protected $normalizedBoundingBoxesType = GoogleCloudVideointelligenceV1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1NormalizedBoundingBox[] */
  public function setNormalizedBoundingBoxes($normalizedBoundingBoxes)
  {
    $this->normalizedBoundingBoxes = $normalizedBoundingBoxes;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedBoundingBox[] */
  public function getNormalizedBoundingBoxes()
  {
    return $this->normalizedBoundingBoxes;
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

class GoogleCloudVideointelligenceV1FaceSegment extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1LabelAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1Entity[] */
  public $categoryEntities;
  /** @var GoogleCloudVideointelligenceV1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1LabelFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1LabelSegment[] */
  public $segments;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $categoryEntitiesType = GoogleCloudVideointelligenceV1Entity::class;
  protected $categoryEntitiesDataType = 'array';
  protected $entityType = GoogleCloudVideointelligenceV1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1LabelFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1LabelSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1Entity[] */
  public function setCategoryEntities($categoryEntities)
  {
    $this->categoryEntities = $categoryEntities;
  }
  /** @return GoogleCloudVideointelligenceV1Entity[] */
  public function getCategoryEntities()
  {
    return $this->categoryEntities;
  }
  /** @param GoogleCloudVideointelligenceV1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1LabelFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1LabelFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1LabelSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1LabelSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1LabelDetectionConfig extends \Google\Model
{
  /** @var float */
  public $frameConfidenceThreshold;
  /** @var string */
  public $labelDetectionMode;
  /** @var string */
  public $model;
  /** @var bool */
  public $stationaryCamera;
  /** @var float */
  public $videoConfidenceThreshold;

  /** @param float */
  public function setFrameConfidenceThreshold($frameConfidenceThreshold)
  {
    $this->frameConfidenceThreshold = $frameConfidenceThreshold;
  }
  /** @return float */
  public function getFrameConfidenceThreshold()
  {
    return $this->frameConfidenceThreshold;
  }
  /** @param string */
  public function setLabelDetectionMode($labelDetectionMode)
  {
    $this->labelDetectionMode = $labelDetectionMode;
  }
  /** @return string */
  public function getLabelDetectionMode()
  {
    return $this->labelDetectionMode;
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
  /** @param bool */
  public function setStationaryCamera($stationaryCamera)
  {
    $this->stationaryCamera = $stationaryCamera;
  }
  /** @return bool */
  public function getStationaryCamera()
  {
    return $this->stationaryCamera;
  }
  /** @param float */
  public function setVideoConfidenceThreshold($videoConfidenceThreshold)
  {
    $this->videoConfidenceThreshold = $videoConfidenceThreshold;
  }
  /** @return float */
  public function getVideoConfidenceThreshold()
  {
    return $this->videoConfidenceThreshold;
  }
}

class GoogleCloudVideointelligenceV1LabelFrame extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $timeOffset;

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

class GoogleCloudVideointelligenceV1LabelSegment extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1LogoRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $entityType = GoogleCloudVideointelligenceV1Entity::class;
  protected $entityDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $tracksType = GoogleCloudVideointelligenceV1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class GoogleCloudVideointelligenceV1NormalizedBoundingBox extends \Google\Model
{
  /** @var float */
  public $bottom;
  /** @var float */
  public $left;
  /** @var float */
  public $right;
  /** @var float */
  public $top;

  /** @param float */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return float */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param float */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return float */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param float */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return float */
  public function getRight()
  {
    return $this->right;
  }
  /** @param float */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return float */
  public function getTop()
  {
    return $this->top;
  }
}

class GoogleCloudVideointelligenceV1NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1NormalizedVertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudVideointelligenceV1NormalizedVertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1NormalizedVertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedVertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVideointelligenceV1NormalizedVertex extends \Google\Model
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

class GoogleCloudVideointelligenceV1ObjectTrackingAnnotation extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1ObjectTrackingFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  /** @var string */
  public $trackId;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $entityType = GoogleCloudVideointelligenceV1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1ObjectTrackingFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1ObjectTrackingFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1ObjectTrackingFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
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

class GoogleCloudVideointelligenceV1ObjectTrackingConfig extends \Google\Model
{
  /** @var string */
  public $model;

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
}

class GoogleCloudVideointelligenceV1ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1PersonDetectionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1PersonDetectionConfig extends \Google\Model
{
  /** @var bool */
  public $includeAttributes;
  /** @var bool */
  public $includeBoundingBoxes;
  /** @var bool */
  public $includePoseLandmarks;

  /** @param bool */
  public function setIncludeAttributes($includeAttributes)
  {
    $this->includeAttributes = $includeAttributes;
  }
  /** @return bool */
  public function getIncludeAttributes()
  {
    return $this->includeAttributes;
  }
  /** @param bool */
  public function setIncludeBoundingBoxes($includeBoundingBoxes)
  {
    $this->includeBoundingBoxes = $includeBoundingBoxes;
  }
  /** @return bool */
  public function getIncludeBoundingBoxes()
  {
    return $this->includeBoundingBoxes;
  }
  /** @param bool */
  public function setIncludePoseLandmarks($includePoseLandmarks)
  {
    $this->includePoseLandmarks = $includePoseLandmarks;
  }
  /** @return bool */
  public function getIncludePoseLandmarks()
  {
    return $this->includePoseLandmarks;
  }
}

class GoogleCloudVideointelligenceV1ShotChangeDetectionConfig extends \Google\Model
{
  /** @var string */
  public $model;

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
}

class GoogleCloudVideointelligenceV1SpeechContext extends \Google\Collection
{
  /** @var string[] */
  public $phrases;
  protected $collection_key = 'phrases';
  /** @param string[] */
  public function setPhrases($phrases)
  {
    $this->phrases = $phrases;
  }
  /** @return string[] */
  public function getPhrases()
  {
    return $this->phrases;
  }
}

class GoogleCloudVideointelligenceV1SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var GoogleCloudVideointelligenceV1WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = GoogleCloudVideointelligenceV1WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param GoogleCloudVideointelligenceV1WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVideointelligenceV1WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVideointelligenceV1SpeechTranscription extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var string */
  public $languageCode;
  protected $collection_key = 'alternatives';
  protected $alternativesType = GoogleCloudVideointelligenceV1SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return GoogleCloudVideointelligenceV1SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
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

class GoogleCloudVideointelligenceV1SpeechTranscriptionConfig extends \Google\Collection
{
  /** @var int[] */
  public $audioTracks;
  /** @var int */
  public $diarizationSpeakerCount;
  /** @var bool */
  public $enableAutomaticPunctuation;
  /** @var bool */
  public $enableSpeakerDiarization;
  /** @var bool */
  public $enableWordConfidence;
  /** @var bool */
  public $filterProfanity;
  /** @var string */
  public $languageCode;
  /** @var int */
  public $maxAlternatives;
  /** @var GoogleCloudVideointelligenceV1SpeechContext[] */
  public $speechContexts;
  protected $collection_key = 'speechContexts';
  protected $speechContextsType = GoogleCloudVideointelligenceV1SpeechContext::class;
  protected $speechContextsDataType = 'array';
  /** @param int[] */
  public function setAudioTracks($audioTracks)
  {
    $this->audioTracks = $audioTracks;
  }
  /** @return int[] */
  public function getAudioTracks()
  {
    return $this->audioTracks;
  }
  /** @param int */
  public function setDiarizationSpeakerCount($diarizationSpeakerCount)
  {
    $this->diarizationSpeakerCount = $diarizationSpeakerCount;
  }
  /** @return int */
  public function getDiarizationSpeakerCount()
  {
    return $this->diarizationSpeakerCount;
  }
  /** @param bool */
  public function setEnableAutomaticPunctuation($enableAutomaticPunctuation)
  {
    $this->enableAutomaticPunctuation = $enableAutomaticPunctuation;
  }
  /** @return bool */
  public function getEnableAutomaticPunctuation()
  {
    return $this->enableAutomaticPunctuation;
  }
  /** @param bool */
  public function setEnableSpeakerDiarization($enableSpeakerDiarization)
  {
    $this->enableSpeakerDiarization = $enableSpeakerDiarization;
  }
  /** @return bool */
  public function getEnableSpeakerDiarization()
  {
    return $this->enableSpeakerDiarization;
  }
  /** @param bool */
  public function setEnableWordConfidence($enableWordConfidence)
  {
    $this->enableWordConfidence = $enableWordConfidence;
  }
  /** @return bool */
  public function getEnableWordConfidence()
  {
    return $this->enableWordConfidence;
  }
  /** @param bool */
  public function setFilterProfanity($filterProfanity)
  {
    $this->filterProfanity = $filterProfanity;
  }
  /** @return bool */
  public function getFilterProfanity()
  {
    return $this->filterProfanity;
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
  /** @param int */
  public function setMaxAlternatives($maxAlternatives)
  {
    $this->maxAlternatives = $maxAlternatives;
  }
  /** @return int */
  public function getMaxAlternatives()
  {
    return $this->maxAlternatives;
  }
  /** @param GoogleCloudVideointelligenceV1SpeechContext[] */
  public function setSpeechContexts($speechContexts)
  {
    $this->speechContexts = $speechContexts;
  }
  /** @return GoogleCloudVideointelligenceV1SpeechContext[] */
  public function getSpeechContexts()
  {
    return $this->speechContexts;
  }
}

class GoogleCloudVideointelligenceV1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1TextSegment[] */
  public $segments;
  /** @var string */
  public $text;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudVideointelligenceV1TextSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1TextSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1TextSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1TextDetectionConfig extends \Google\Collection
{
  /** @var string[] */
  public $languageHints;
  /** @var string */
  public $model;
  protected $collection_key = 'languageHints';
  /** @param string[] */
  public function setLanguageHints($languageHints)
  {
    $this->languageHints = $languageHints;
  }
  /** @return string[] */
  public function getLanguageHints()
  {
    return $this->languageHints;
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
}

class GoogleCloudVideointelligenceV1TextFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1NormalizedBoundingPoly */
  public $rotatedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1NormalizedBoundingPoly */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedBoundingPoly */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
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

class GoogleCloudVideointelligenceV1TextSegment extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1TextFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1TextFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1TextFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1TextFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1TimestampedObject extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public $attributes;
  /** @var GoogleCloudVideointelligenceV1DetectedLandmark[] */
  public $landmarks;
  /** @var GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'landmarks';
  protected $attributesType = GoogleCloudVideointelligenceV1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $landmarksType = GoogleCloudVideointelligenceV1DetectedLandmark::class;
  protected $landmarksDataType = 'array';
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudVideointelligenceV1DetectedLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVideointelligenceV1DetectedLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1Track extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public $attributes;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1TimestampedObject[] */
  public $timestampedObjects;
  protected $collection_key = 'timestampedObjects';
  protected $attributesType = GoogleCloudVideointelligenceV1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
  protected $timestampedObjectsType = GoogleCloudVideointelligenceV1TimestampedObject::class;
  protected $timestampedObjectsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1TimestampedObject[] */
  public function setTimestampedObjects($timestampedObjects)
  {
    $this->timestampedObjects = $timestampedObjects;
  }
  /** @return GoogleCloudVideointelligenceV1TimestampedObject[] */
  public function getTimestampedObjects()
  {
    return $this->timestampedObjects;
  }
}

class GoogleCloudVideointelligenceV1VideoAnnotationProgress extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $inputUri;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  /** @var string */
  public $startTime;
  /** @var string */
  public $updateTime;
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
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

class GoogleCloudVideointelligenceV1VideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudVideointelligenceV1ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var GoogleCloudVideointelligenceV1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVideointelligenceV1FaceDetectionAnnotation[] */
  public $faceDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public $frameLabelAnnotations;
  /** @var string */
  public $inputUri;
  /** @var GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[] */
  public $logoRecognitionAnnotations;
  /** @var GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1PersonDetectionAnnotation[] */
  public $personDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public $segmentLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public $segmentPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1VideoSegment[] */
  public $shotAnnotations;
  /** @var GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public $shotLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public $shotPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1SpeechTranscription[] */
  public $speechTranscriptions;
  /** @var GoogleCloudVideointelligenceV1TextAnnotation[] */
  public $textAnnotations;
  protected $collection_key = 'textAnnotations';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param GoogleCloudVideointelligenceV1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1FaceDetectionAnnotation[] */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1FaceDetectionAnnotation[] */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
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
  /** @param GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[] */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[] */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1PersonDetectionAnnotation[] */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1PersonDetectionAnnotation[] */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1LabelAnnotation[] */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1SpeechTranscription[] */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /** @return GoogleCloudVideointelligenceV1SpeechTranscription[] */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /** @param GoogleCloudVideointelligenceV1TextAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1TextAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

class GoogleCloudVideointelligenceV1VideoContext extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig */
  public $explicitContentDetectionConfig;
  /** @var GoogleCloudVideointelligenceV1FaceDetectionConfig */
  public $faceDetectionConfig;
  /** @var GoogleCloudVideointelligenceV1LabelDetectionConfig */
  public $labelDetectionConfig;
  /** @var GoogleCloudVideointelligenceV1ObjectTrackingConfig */
  public $objectTrackingConfig;
  /** @var GoogleCloudVideointelligenceV1PersonDetectionConfig */
  public $personDetectionConfig;
  /** @var GoogleCloudVideointelligenceV1VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1ShotChangeDetectionConfig */
  public $shotChangeDetectionConfig;
  /** @var GoogleCloudVideointelligenceV1SpeechTranscriptionConfig */
  public $speechTranscriptionConfig;
  /** @var GoogleCloudVideointelligenceV1TextDetectionConfig */
  public $textDetectionConfig;
  protected $collection_key = 'segments';
  protected $explicitContentDetectionConfigType = GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig::class;
  protected $explicitContentDetectionConfigDataType = '';
  protected $faceDetectionConfigType = GoogleCloudVideointelligenceV1FaceDetectionConfig::class;
  protected $faceDetectionConfigDataType = '';
  protected $labelDetectionConfigType = GoogleCloudVideointelligenceV1LabelDetectionConfig::class;
  protected $labelDetectionConfigDataType = '';
  protected $objectTrackingConfigType = GoogleCloudVideointelligenceV1ObjectTrackingConfig::class;
  protected $objectTrackingConfigDataType = '';
  protected $personDetectionConfigType = GoogleCloudVideointelligenceV1PersonDetectionConfig::class;
  protected $personDetectionConfigDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $shotChangeDetectionConfigType = GoogleCloudVideointelligenceV1ShotChangeDetectionConfig::class;
  protected $shotChangeDetectionConfigDataType = '';
  protected $speechTranscriptionConfigType = GoogleCloudVideointelligenceV1SpeechTranscriptionConfig::class;
  protected $speechTranscriptionConfigDataType = '';
  protected $textDetectionConfigType = GoogleCloudVideointelligenceV1TextDetectionConfig::class;
  protected $textDetectionConfigDataType = '';
  /** @param GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig */
  public function setExplicitContentDetectionConfig(GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig $explicitContentDetectionConfig)
  {
    $this->explicitContentDetectionConfig = $explicitContentDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig */
  public function getExplicitContentDetectionConfig()
  {
    return $this->explicitContentDetectionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1FaceDetectionConfig */
  public function setFaceDetectionConfig(GoogleCloudVideointelligenceV1FaceDetectionConfig $faceDetectionConfig)
  {
    $this->faceDetectionConfig = $faceDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1FaceDetectionConfig */
  public function getFaceDetectionConfig()
  {
    return $this->faceDetectionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1LabelDetectionConfig */
  public function setLabelDetectionConfig(GoogleCloudVideointelligenceV1LabelDetectionConfig $labelDetectionConfig)
  {
    $this->labelDetectionConfig = $labelDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1LabelDetectionConfig */
  public function getLabelDetectionConfig()
  {
    return $this->labelDetectionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1ObjectTrackingConfig */
  public function setObjectTrackingConfig(GoogleCloudVideointelligenceV1ObjectTrackingConfig $objectTrackingConfig)
  {
    $this->objectTrackingConfig = $objectTrackingConfig;
  }
  /** @return GoogleCloudVideointelligenceV1ObjectTrackingConfig */
  public function getObjectTrackingConfig()
  {
    return $this->objectTrackingConfig;
  }
  /** @param GoogleCloudVideointelligenceV1PersonDetectionConfig */
  public function setPersonDetectionConfig(GoogleCloudVideointelligenceV1PersonDetectionConfig $personDetectionConfig)
  {
    $this->personDetectionConfig = $personDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1PersonDetectionConfig */
  public function getPersonDetectionConfig()
  {
    return $this->personDetectionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1ShotChangeDetectionConfig */
  public function setShotChangeDetectionConfig(GoogleCloudVideointelligenceV1ShotChangeDetectionConfig $shotChangeDetectionConfig)
  {
    $this->shotChangeDetectionConfig = $shotChangeDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1ShotChangeDetectionConfig */
  public function getShotChangeDetectionConfig()
  {
    return $this->shotChangeDetectionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1SpeechTranscriptionConfig */
  public function setSpeechTranscriptionConfig(GoogleCloudVideointelligenceV1SpeechTranscriptionConfig $speechTranscriptionConfig)
  {
    $this->speechTranscriptionConfig = $speechTranscriptionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1SpeechTranscriptionConfig */
  public function getSpeechTranscriptionConfig()
  {
    return $this->speechTranscriptionConfig;
  }
  /** @param GoogleCloudVideointelligenceV1TextDetectionConfig */
  public function setTextDetectionConfig(GoogleCloudVideointelligenceV1TextDetectionConfig $textDetectionConfig)
  {
    $this->textDetectionConfig = $textDetectionConfig;
  }
  /** @return GoogleCloudVideointelligenceV1TextDetectionConfig */
  public function getTextDetectionConfig()
  {
    return $this->textDetectionConfig;
  }
}

class GoogleCloudVideointelligenceV1VideoSegment extends \Google\Model
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

class GoogleCloudVideointelligenceV1WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class GoogleCloudVideointelligenceV1beta2AnnotateVideoProgress extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress[] */
  public $annotationProgress;
  protected $collection_key = 'annotationProgress';
  protected $annotationProgressType = GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress::class;
  protected $annotationProgressDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress[] */
  public function setAnnotationProgress($annotationProgress)
  {
    $this->annotationProgress = $annotationProgress;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress[] */
  public function getAnnotationProgress()
  {
    return $this->annotationProgress;
  }
}

class GoogleCloudVideointelligenceV1beta2AnnotateVideoResponse extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2VideoAnnotationResults[] */
  public $annotationResults;
  protected $collection_key = 'annotationResults';
  protected $annotationResultsType = GoogleCloudVideointelligenceV1beta2VideoAnnotationResults::class;
  protected $annotationResultsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2VideoAnnotationResults[] */
  public function setAnnotationResults($annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoAnnotationResults[] */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
}

class GoogleCloudVideointelligenceV1beta2DetectedAttribute extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class GoogleCloudVideointelligenceV1beta2DetectedLandmark extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedVertex */
  public $point;
  protected $pointType = GoogleCloudVideointelligenceV1beta2NormalizedVertex::class;
  protected $pointDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedVertex */
  public function setPoint(GoogleCloudVideointelligenceV1beta2NormalizedVertex $point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedVertex */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudVideointelligenceV1beta2Entity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var string */
  public $languageCode;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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

class GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2ExplicitContentFrame[] */
  public $frames;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1beta2ExplicitContentFrame::class;
  protected $framesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2ExplicitContentFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1beta2ExplicitContentFrame[] */
  public function getFrames()
  {
    return $this->frames;
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

class GoogleCloudVideointelligenceV1beta2ExplicitContentFrame extends \Google\Model
{
  /** @var string */
  public $pornographyLikelihood;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setPornographyLikelihood($pornographyLikelihood)
  {
    $this->pornographyLikelihood = $pornographyLikelihood;
  }
  /** @return string */
  public function getPornographyLikelihood()
  {
    return $this->pornographyLikelihood;
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

class GoogleCloudVideointelligenceV1beta2FaceAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2FaceFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1beta2FaceSegment[] */
  public $segments;
  /** @var string */
  public $thumbnail;
  protected $collection_key = 'segments';
  protected $framesType = GoogleCloudVideointelligenceV1beta2FaceFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1beta2FaceSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2FaceFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1beta2FaceFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1beta2FaceSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1beta2FaceSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation extends \Google\Collection
{
  /** @var string */
  public $thumbnail;
  /** @var GoogleCloudVideointelligenceV1beta2Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1beta2Track::class;
  protected $tracksDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1beta2Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1beta2FaceFrame extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox[] */
  public $normalizedBoundingBoxes;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'normalizedBoundingBoxes';
  protected $normalizedBoundingBoxesType = GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox[] */
  public function setNormalizedBoundingBoxes($normalizedBoundingBoxes)
  {
    $this->normalizedBoundingBoxes = $normalizedBoundingBoxes;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox[] */
  public function getNormalizedBoundingBoxes()
  {
    return $this->normalizedBoundingBoxes;
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

class GoogleCloudVideointelligenceV1beta2FaceSegment extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1beta2LabelAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2Entity[] */
  public $categoryEntities;
  /** @var GoogleCloudVideointelligenceV1beta2Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1beta2LabelFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1beta2LabelSegment[] */
  public $segments;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $categoryEntitiesType = GoogleCloudVideointelligenceV1beta2Entity::class;
  protected $categoryEntitiesDataType = 'array';
  protected $entityType = GoogleCloudVideointelligenceV1beta2Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1beta2LabelFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1beta2LabelSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2Entity[] */
  public function setCategoryEntities($categoryEntities)
  {
    $this->categoryEntities = $categoryEntities;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Entity[] */
  public function getCategoryEntities()
  {
    return $this->categoryEntities;
  }
  /** @param GoogleCloudVideointelligenceV1beta2Entity */
  public function setEntity(GoogleCloudVideointelligenceV1beta2Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1beta2LabelFrame extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $timeOffset;

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

class GoogleCloudVideointelligenceV1beta2LabelSegment extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1beta2Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $entityType = GoogleCloudVideointelligenceV1beta2Entity::class;
  protected $entityDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $tracksType = GoogleCloudVideointelligenceV1beta2Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2Entity */
  public function setEntity(GoogleCloudVideointelligenceV1beta2Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1beta2Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox extends \Google\Model
{
  /** @var float */
  public $bottom;
  /** @var float */
  public $left;
  /** @var float */
  public $right;
  /** @var float */
  public $top;

  /** @param float */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return float */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param float */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return float */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param float */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return float */
  public function getRight()
  {
    return $this->right;
  }
  /** @param float */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return float */
  public function getTop()
  {
    return $this->top;
  }
}

class GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedVertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudVideointelligenceV1beta2NormalizedVertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedVertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedVertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVideointelligenceV1beta2NormalizedVertex extends \Google\Model
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

class GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1beta2Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  /** @var string */
  public $trackId;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $entityType = GoogleCloudVideointelligenceV1beta2Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1beta2Entity */
  public function setEntity(GoogleCloudVideointelligenceV1beta2Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
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

class GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1beta2Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1beta2Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var GoogleCloudVideointelligenceV1beta2WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = GoogleCloudVideointelligenceV1beta2WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param GoogleCloudVideointelligenceV1beta2WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVideointelligenceV1beta2WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVideointelligenceV1beta2SpeechTranscription extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var string */
  public $languageCode;
  protected $collection_key = 'alternatives';
  protected $alternativesType = GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
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

class GoogleCloudVideointelligenceV1beta2TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2TextSegment[] */
  public $segments;
  /** @var string */
  public $text;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudVideointelligenceV1beta2TextSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2TextSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1beta2TextSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1beta2TextFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly */
  public $rotatedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
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

class GoogleCloudVideointelligenceV1beta2TextSegment extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1beta2TextFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1beta2TextFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1beta2TextFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1beta2TextFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1beta2TimestampedObject extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public $attributes;
  /** @var GoogleCloudVideointelligenceV1beta2DetectedLandmark[] */
  public $landmarks;
  /** @var GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'landmarks';
  protected $attributesType = GoogleCloudVideointelligenceV1beta2DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $landmarksType = GoogleCloudVideointelligenceV1beta2DetectedLandmark::class;
  protected $landmarksDataType = 'array';
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudVideointelligenceV1beta2DetectedLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVideointelligenceV1beta2DetectedLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1beta2Track extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public $attributes;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1beta2TimestampedObject[] */
  public $timestampedObjects;
  protected $collection_key = 'timestampedObjects';
  protected $attributesType = GoogleCloudVideointelligenceV1beta2DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
  protected $timestampedObjectsType = GoogleCloudVideointelligenceV1beta2TimestampedObject::class;
  protected $timestampedObjectsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1beta2DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1beta2TimestampedObject[] */
  public function setTimestampedObjects($timestampedObjects)
  {
    $this->timestampedObjects = $timestampedObjects;
  }
  /** @return GoogleCloudVideointelligenceV1beta2TimestampedObject[] */
  public function getTimestampedObjects()
  {
    return $this->timestampedObjects;
  }
}

class GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $inputUri;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  /** @var string */
  public $startTime;
  /** @var string */
  public $updateTime;
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
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

class GoogleCloudVideointelligenceV1beta2VideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var GoogleCloudVideointelligenceV1beta2FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation[] */
  public $faceDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public $frameLabelAnnotations;
  /** @var string */
  public $inputUri;
  /** @var GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation[] */
  public $logoRecognitionAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation[] */
  public $personDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public $segmentLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public $segmentPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public $shotAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public $shotLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public $shotPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1beta2SpeechTranscription[] */
  public $speechTranscriptions;
  /** @var GoogleCloudVideointelligenceV1beta2TextAnnotation[] */
  public $textAnnotations;
  protected $collection_key = 'textAnnotations';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1beta2FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1beta2LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $segmentDataType = '';
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1beta2LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1beta2LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1beta2VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1beta2LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1beta2LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1beta2SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1beta2TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param GoogleCloudVideointelligenceV1beta2FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation[] */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation[] */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
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
  /** @param GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation[] */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation[] */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation[] */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation[] */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1beta2VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2LabelAnnotation[] */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1beta2SpeechTranscription[] */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /** @return GoogleCloudVideointelligenceV1beta2SpeechTranscription[] */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /** @param GoogleCloudVideointelligenceV1beta2TextAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1beta2TextAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

class GoogleCloudVideointelligenceV1beta2VideoSegment extends \Google\Model
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

class GoogleCloudVideointelligenceV1beta2WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class GoogleCloudVideointelligenceV1p1beta1AnnotateVideoProgress extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress[] */
  public $annotationProgress;
  protected $collection_key = 'annotationProgress';
  protected $annotationProgressType = GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress::class;
  protected $annotationProgressDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress[] */
  public function setAnnotationProgress($annotationProgress)
  {
    $this->annotationProgress = $annotationProgress;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress[] */
  public function getAnnotationProgress()
  {
    return $this->annotationProgress;
  }
}

class GoogleCloudVideointelligenceV1p1beta1AnnotateVideoResponse extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults[] */
  public $annotationResults;
  protected $collection_key = 'annotationResults';
  protected $annotationResultsType = GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults::class;
  protected $annotationResultsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults[] */
  public function setAnnotationResults($annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults[] */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
}

class GoogleCloudVideointelligenceV1p1beta1DetectedAttribute extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class GoogleCloudVideointelligenceV1p1beta1DetectedLandmark extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedVertex */
  public $point;
  protected $pointType = GoogleCloudVideointelligenceV1p1beta1NormalizedVertex::class;
  protected $pointDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedVertex */
  public function setPoint(GoogleCloudVideointelligenceV1p1beta1NormalizedVertex $point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedVertex */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudVideointelligenceV1p1beta1Entity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var string */
  public $languageCode;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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

class GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame[] */
  public $frames;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame::class;
  protected $framesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame[] */
  public function getFrames()
  {
    return $this->frames;
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

class GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame extends \Google\Model
{
  /** @var string */
  public $pornographyLikelihood;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setPornographyLikelihood($pornographyLikelihood)
  {
    $this->pornographyLikelihood = $pornographyLikelihood;
  }
  /** @return string */
  public function getPornographyLikelihood()
  {
    return $this->pornographyLikelihood;
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

class GoogleCloudVideointelligenceV1p1beta1FaceAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1FaceFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p1beta1FaceSegment[] */
  public $segments;
  /** @var string */
  public $thumbnail;
  protected $collection_key = 'segments';
  protected $framesType = GoogleCloudVideointelligenceV1p1beta1FaceFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p1beta1FaceSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1FaceFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1FaceFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1FaceSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1FaceSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation extends \Google\Collection
{
  /** @var string */
  public $thumbnail;
  /** @var GoogleCloudVideointelligenceV1p1beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p1beta1Track::class;
  protected $tracksDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p1beta1FaceFrame extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox[] */
  public $normalizedBoundingBoxes;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'normalizedBoundingBoxes';
  protected $normalizedBoundingBoxesType = GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox[] */
  public function setNormalizedBoundingBoxes($normalizedBoundingBoxes)
  {
    $this->normalizedBoundingBoxes = $normalizedBoundingBoxes;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox[] */
  public function getNormalizedBoundingBoxes()
  {
    return $this->normalizedBoundingBoxes;
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

class GoogleCloudVideointelligenceV1p1beta1FaceSegment extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p1beta1LabelAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1Entity[] */
  public $categoryEntities;
  /** @var GoogleCloudVideointelligenceV1p1beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelSegment[] */
  public $segments;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $categoryEntitiesType = GoogleCloudVideointelligenceV1p1beta1Entity::class;
  protected $categoryEntitiesDataType = 'array';
  protected $entityType = GoogleCloudVideointelligenceV1p1beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p1beta1LabelFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p1beta1LabelSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1Entity[] */
  public function setCategoryEntities($categoryEntities)
  {
    $this->categoryEntities = $categoryEntities;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Entity[] */
  public function getCategoryEntities()
  {
    return $this->categoryEntities;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p1beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p1beta1LabelFrame extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $timeOffset;

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

class GoogleCloudVideointelligenceV1p1beta1LabelSegment extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1p1beta1Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $entityType = GoogleCloudVideointelligenceV1p1beta1Entity::class;
  protected $entityDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $tracksType = GoogleCloudVideointelligenceV1p1beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p1beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox extends \Google\Model
{
  /** @var float */
  public $bottom;
  /** @var float */
  public $left;
  /** @var float */
  public $right;
  /** @var float */
  public $top;

  /** @param float */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return float */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param float */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return float */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param float */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return float */
  public function getRight()
  {
    return $this->right;
  }
  /** @param float */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return float */
  public function getTop()
  {
    return $this->top;
  }
}

class GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedVertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudVideointelligenceV1p1beta1NormalizedVertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedVertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedVertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVideointelligenceV1p1beta1NormalizedVertex extends \Google\Model
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

class GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p1beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  /** @var string */
  public $trackId;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $entityType = GoogleCloudVideointelligenceV1p1beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p1beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
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

class GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p1beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var GoogleCloudVideointelligenceV1p1beta1WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = GoogleCloudVideointelligenceV1p1beta1WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVideointelligenceV1p1beta1SpeechTranscription extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var string */
  public $languageCode;
  protected $collection_key = 'alternatives';
  protected $alternativesType = GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
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

class GoogleCloudVideointelligenceV1p1beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1TextSegment[] */
  public $segments;
  /** @var string */
  public $text;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudVideointelligenceV1p1beta1TextSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1TextSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1TextSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p1beta1TextFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly */
  public $rotatedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
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

class GoogleCloudVideointelligenceV1p1beta1TextSegment extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p1beta1TextFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p1beta1TextFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1TextFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1TextFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p1beta1TimestampedObject extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public $attributes;
  /** @var GoogleCloudVideointelligenceV1p1beta1DetectedLandmark[] */
  public $landmarks;
  /** @var GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'landmarks';
  protected $attributesType = GoogleCloudVideointelligenceV1p1beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $landmarksType = GoogleCloudVideointelligenceV1p1beta1DetectedLandmark::class;
  protected $landmarksDataType = 'array';
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1DetectedLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1DetectedLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p1beta1Track extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public $attributes;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p1beta1TimestampedObject[] */
  public $timestampedObjects;
  protected $collection_key = 'timestampedObjects';
  protected $attributesType = GoogleCloudVideointelligenceV1p1beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $timestampedObjectsType = GoogleCloudVideointelligenceV1p1beta1TimestampedObject::class;
  protected $timestampedObjectsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1TimestampedObject[] */
  public function setTimestampedObjects($timestampedObjects)
  {
    $this->timestampedObjects = $timestampedObjects;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1TimestampedObject[] */
  public function getTimestampedObjects()
  {
    return $this->timestampedObjects;
  }
}

class GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $inputUri;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  /** @var string */
  public $startTime;
  /** @var string */
  public $updateTime;
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
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

class GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var GoogleCloudVideointelligenceV1p1beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation[] */
  public $faceDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public $frameLabelAnnotations;
  /** @var string */
  public $inputUri;
  /** @var GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation[] */
  public $logoRecognitionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation[] */
  public $personDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public $segmentLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public $segmentPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public $shotAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public $shotLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public $shotPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p1beta1SpeechTranscription[] */
  public $speechTranscriptions;
  /** @var GoogleCloudVideointelligenceV1p1beta1TextAnnotation[] */
  public $textAnnotations;
  protected $collection_key = 'textAnnotations';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1p1beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1p1beta1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1p1beta1SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1p1beta1TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation[] */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation[] */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
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
  /** @param GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation[] */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation[] */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation[] */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation[] */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p1beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1LabelAnnotation[] */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1SpeechTranscription[] */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1SpeechTranscription[] */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /** @param GoogleCloudVideointelligenceV1p1beta1TextAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p1beta1TextAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

class GoogleCloudVideointelligenceV1p1beta1VideoSegment extends \Google\Model
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

class GoogleCloudVideointelligenceV1p1beta1WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class GoogleCloudVideointelligenceV1p2beta1AnnotateVideoProgress extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress[] */
  public $annotationProgress;
  protected $collection_key = 'annotationProgress';
  protected $annotationProgressType = GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress::class;
  protected $annotationProgressDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress[] */
  public function setAnnotationProgress($annotationProgress)
  {
    $this->annotationProgress = $annotationProgress;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress[] */
  public function getAnnotationProgress()
  {
    return $this->annotationProgress;
  }
}

class GoogleCloudVideointelligenceV1p2beta1AnnotateVideoResponse extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults[] */
  public $annotationResults;
  protected $collection_key = 'annotationResults';
  protected $annotationResultsType = GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults::class;
  protected $annotationResultsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults[] */
  public function setAnnotationResults($annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults[] */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
}

class GoogleCloudVideointelligenceV1p2beta1DetectedAttribute extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class GoogleCloudVideointelligenceV1p2beta1DetectedLandmark extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedVertex */
  public $point;
  protected $pointType = GoogleCloudVideointelligenceV1p2beta1NormalizedVertex::class;
  protected $pointDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedVertex */
  public function setPoint(GoogleCloudVideointelligenceV1p2beta1NormalizedVertex $point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedVertex */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudVideointelligenceV1p2beta1Entity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var string */
  public $languageCode;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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

class GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame[] */
  public $frames;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame::class;
  protected $framesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame[] */
  public function getFrames()
  {
    return $this->frames;
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

class GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame extends \Google\Model
{
  /** @var string */
  public $pornographyLikelihood;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setPornographyLikelihood($pornographyLikelihood)
  {
    $this->pornographyLikelihood = $pornographyLikelihood;
  }
  /** @return string */
  public function getPornographyLikelihood()
  {
    return $this->pornographyLikelihood;
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

class GoogleCloudVideointelligenceV1p2beta1FaceAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1FaceFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p2beta1FaceSegment[] */
  public $segments;
  /** @var string */
  public $thumbnail;
  protected $collection_key = 'segments';
  protected $framesType = GoogleCloudVideointelligenceV1p2beta1FaceFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p2beta1FaceSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1FaceFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1FaceFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1FaceSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1FaceSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation extends \Google\Collection
{
  /** @var string */
  public $thumbnail;
  /** @var GoogleCloudVideointelligenceV1p2beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p2beta1Track::class;
  protected $tracksDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p2beta1FaceFrame extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox[] */
  public $normalizedBoundingBoxes;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'normalizedBoundingBoxes';
  protected $normalizedBoundingBoxesType = GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox[] */
  public function setNormalizedBoundingBoxes($normalizedBoundingBoxes)
  {
    $this->normalizedBoundingBoxes = $normalizedBoundingBoxes;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox[] */
  public function getNormalizedBoundingBoxes()
  {
    return $this->normalizedBoundingBoxes;
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

class GoogleCloudVideointelligenceV1p2beta1FaceSegment extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p2beta1LabelAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1Entity[] */
  public $categoryEntities;
  /** @var GoogleCloudVideointelligenceV1p2beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelSegment[] */
  public $segments;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $categoryEntitiesType = GoogleCloudVideointelligenceV1p2beta1Entity::class;
  protected $categoryEntitiesDataType = 'array';
  protected $entityType = GoogleCloudVideointelligenceV1p2beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p2beta1LabelFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p2beta1LabelSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1Entity[] */
  public function setCategoryEntities($categoryEntities)
  {
    $this->categoryEntities = $categoryEntities;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Entity[] */
  public function getCategoryEntities()
  {
    return $this->categoryEntities;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p2beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p2beta1LabelFrame extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $timeOffset;

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

class GoogleCloudVideointelligenceV1p2beta1LabelSegment extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1p2beta1Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $entityType = GoogleCloudVideointelligenceV1p2beta1Entity::class;
  protected $entityDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $tracksType = GoogleCloudVideointelligenceV1p2beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p2beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox extends \Google\Model
{
  /** @var float */
  public $bottom;
  /** @var float */
  public $left;
  /** @var float */
  public $right;
  /** @var float */
  public $top;

  /** @param float */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return float */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param float */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return float */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param float */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return float */
  public function getRight()
  {
    return $this->right;
  }
  /** @param float */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return float */
  public function getTop()
  {
    return $this->top;
  }
}

class GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudVideointelligenceV1p2beta1NormalizedVertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVideointelligenceV1p2beta1NormalizedVertex extends \Google\Model
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

class GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p2beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  /** @var string */
  public $trackId;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $entityType = GoogleCloudVideointelligenceV1p2beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p2beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
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

class GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p2beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var GoogleCloudVideointelligenceV1p2beta1WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = GoogleCloudVideointelligenceV1p2beta1WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVideointelligenceV1p2beta1SpeechTranscription extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var string */
  public $languageCode;
  protected $collection_key = 'alternatives';
  protected $alternativesType = GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
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

class GoogleCloudVideointelligenceV1p2beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1TextSegment[] */
  public $segments;
  /** @var string */
  public $text;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudVideointelligenceV1p2beta1TextSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1TextSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1TextSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p2beta1TextFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly */
  public $rotatedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
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

class GoogleCloudVideointelligenceV1p2beta1TextSegment extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p2beta1TextFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p2beta1TextFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1TextFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1TextFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p2beta1TimestampedObject extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public $attributes;
  /** @var GoogleCloudVideointelligenceV1p2beta1DetectedLandmark[] */
  public $landmarks;
  /** @var GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'landmarks';
  protected $attributesType = GoogleCloudVideointelligenceV1p2beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $landmarksType = GoogleCloudVideointelligenceV1p2beta1DetectedLandmark::class;
  protected $landmarksDataType = 'array';
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1DetectedLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1DetectedLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p2beta1Track extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public $attributes;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p2beta1TimestampedObject[] */
  public $timestampedObjects;
  protected $collection_key = 'timestampedObjects';
  protected $attributesType = GoogleCloudVideointelligenceV1p2beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $timestampedObjectsType = GoogleCloudVideointelligenceV1p2beta1TimestampedObject::class;
  protected $timestampedObjectsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1TimestampedObject[] */
  public function setTimestampedObjects($timestampedObjects)
  {
    $this->timestampedObjects = $timestampedObjects;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1TimestampedObject[] */
  public function getTimestampedObjects()
  {
    return $this->timestampedObjects;
  }
}

class GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $inputUri;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  /** @var string */
  public $startTime;
  /** @var string */
  public $updateTime;
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
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

class GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var GoogleCloudVideointelligenceV1p2beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation[] */
  public $faceDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public $frameLabelAnnotations;
  /** @var string */
  public $inputUri;
  /** @var GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation[] */
  public $logoRecognitionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation[] */
  public $personDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public $segmentLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public $segmentPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public $shotAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public $shotLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public $shotPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p2beta1SpeechTranscription[] */
  public $speechTranscriptions;
  /** @var GoogleCloudVideointelligenceV1p2beta1TextAnnotation[] */
  public $textAnnotations;
  protected $collection_key = 'textAnnotations';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1p2beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1p2beta1SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1p2beta1TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation[] */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation[] */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
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
  /** @param GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation[] */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation[] */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation[] */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation[] */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1LabelAnnotation[] */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1SpeechTranscription[] */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1SpeechTranscription[] */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /** @param GoogleCloudVideointelligenceV1p2beta1TextAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p2beta1TextAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

class GoogleCloudVideointelligenceV1p2beta1VideoSegment extends \Google\Model
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

class GoogleCloudVideointelligenceV1p2beta1WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class GoogleCloudVideointelligenceV1p3beta1AnnotateVideoProgress extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress[] */
  public $annotationProgress;
  protected $collection_key = 'annotationProgress';
  protected $annotationProgressType = GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress::class;
  protected $annotationProgressDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress[] */
  public function setAnnotationProgress($annotationProgress)
  {
    $this->annotationProgress = $annotationProgress;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress[] */
  public function getAnnotationProgress()
  {
    return $this->annotationProgress;
  }
}

class GoogleCloudVideointelligenceV1p3beta1AnnotateVideoResponse extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults[] */
  public $annotationResults;
  protected $collection_key = 'annotationResults';
  protected $annotationResultsType = GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults::class;
  protected $annotationResultsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults[] */
  public function setAnnotationResults($annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults[] */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
}

class GoogleCloudVideointelligenceV1p3beta1Celebrity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;

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

class GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1CelebrityTrack[] */
  public $celebrityTracks;
  /** @var string */
  public $version;
  protected $collection_key = 'celebrityTracks';
  protected $celebrityTracksType = GoogleCloudVideointelligenceV1p3beta1CelebrityTrack::class;
  protected $celebrityTracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1CelebrityTrack[] */
  public function setCelebrityTracks($celebrityTracks)
  {
    $this->celebrityTracks = $celebrityTracks;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1CelebrityTrack[] */
  public function getCelebrityTracks()
  {
    return $this->celebrityTracks;
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

class GoogleCloudVideointelligenceV1p3beta1CelebrityTrack extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity[] */
  public $celebrities;
  /** @var GoogleCloudVideointelligenceV1p3beta1Track */
  public $faceTrack;
  protected $collection_key = 'celebrities';
  protected $celebritiesType = GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity::class;
  protected $celebritiesDataType = 'array';
  protected $faceTrackType = GoogleCloudVideointelligenceV1p3beta1Track::class;
  protected $faceTrackDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity[] */
  public function setCelebrities($celebrities)
  {
    $this->celebrities = $celebrities;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity[] */
  public function getCelebrities()
  {
    return $this->celebrities;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1Track */
  public function setFaceTrack(GoogleCloudVideointelligenceV1p3beta1Track $faceTrack)
  {
    $this->faceTrack = $faceTrack;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Track */
  public function getFaceTrack()
  {
    return $this->faceTrack;
  }
}

class GoogleCloudVideointelligenceV1p3beta1DetectedAttribute extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class GoogleCloudVideointelligenceV1p3beta1DetectedLandmark extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedVertex */
  public $point;
  protected $pointType = GoogleCloudVideointelligenceV1p3beta1NormalizedVertex::class;
  protected $pointDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedVertex */
  public function setPoint(GoogleCloudVideointelligenceV1p3beta1NormalizedVertex $point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedVertex */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudVideointelligenceV1p3beta1Entity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var string */
  public $languageCode;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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

class GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame[] */
  public $frames;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame::class;
  protected $framesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame[] */
  public function getFrames()
  {
    return $this->frames;
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

class GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame extends \Google\Model
{
  /** @var string */
  public $pornographyLikelihood;
  /** @var string */
  public $timeOffset;

  /** @param string */
  public function setPornographyLikelihood($pornographyLikelihood)
  {
    $this->pornographyLikelihood = $pornographyLikelihood;
  }
  /** @return string */
  public function getPornographyLikelihood()
  {
    return $this->pornographyLikelihood;
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

class GoogleCloudVideointelligenceV1p3beta1FaceAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1FaceFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p3beta1FaceSegment[] */
  public $segments;
  /** @var string */
  public $thumbnail;
  protected $collection_key = 'segments';
  protected $framesType = GoogleCloudVideointelligenceV1p3beta1FaceFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p3beta1FaceSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1FaceFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1FaceFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1FaceSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1FaceSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation extends \Google\Collection
{
  /** @var string */
  public $thumbnail;
  /** @var GoogleCloudVideointelligenceV1p3beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p3beta1Track::class;
  protected $tracksDataType = 'array';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p3beta1FaceFrame extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox[] */
  public $normalizedBoundingBoxes;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'normalizedBoundingBoxes';
  protected $normalizedBoundingBoxesType = GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox[] */
  public function setNormalizedBoundingBoxes($normalizedBoundingBoxes)
  {
    $this->normalizedBoundingBoxes = $normalizedBoundingBoxes;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox[] */
  public function getNormalizedBoundingBoxes()
  {
    return $this->normalizedBoundingBoxes;
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

class GoogleCloudVideointelligenceV1p3beta1FaceSegment extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p3beta1LabelAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1Entity[] */
  public $categoryEntities;
  /** @var GoogleCloudVideointelligenceV1p3beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelSegment[] */
  public $segments;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $categoryEntitiesType = GoogleCloudVideointelligenceV1p3beta1Entity::class;
  protected $categoryEntitiesDataType = 'array';
  protected $entityType = GoogleCloudVideointelligenceV1p3beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p3beta1LabelFrame::class;
  protected $framesDataType = 'array';
  protected $segmentsType = GoogleCloudVideointelligenceV1p3beta1LabelSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1Entity[] */
  public function setCategoryEntities($categoryEntities)
  {
    $this->categoryEntities = $categoryEntities;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Entity[] */
  public function getCategoryEntities()
  {
    return $this->categoryEntities;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p3beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p3beta1LabelFrame extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $timeOffset;

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

class GoogleCloudVideointelligenceV1p3beta1LabelSegment extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public $segments;
  /** @var GoogleCloudVideointelligenceV1p3beta1Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $entityType = GoogleCloudVideointelligenceV1p3beta1Entity::class;
  protected $entityDataType = '';
  protected $segmentsType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentsDataType = 'array';
  protected $tracksType = GoogleCloudVideointelligenceV1p3beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p3beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox extends \Google\Model
{
  /** @var float */
  public $bottom;
  /** @var float */
  public $left;
  /** @var float */
  public $right;
  /** @var float */
  public $top;

  /** @param float */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return float */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param float */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return float */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param float */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return float */
  public function getRight()
  {
    return $this->right;
  }
  /** @param float */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return float */
  public function getTop()
  {
    return $this->top;
  }
}

class GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedVertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $verticesType = GoogleCloudVideointelligenceV1p3beta1NormalizedVertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedVertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedVertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVideointelligenceV1p3beta1NormalizedVertex extends \Google\Model
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

class GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p3beta1Entity */
  public $entity;
  /** @var GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  /** @var string */
  public $trackId;
  /** @var string */
  public $version;
  protected $collection_key = 'frames';
  protected $entityType = GoogleCloudVideointelligenceV1p3beta1Entity::class;
  protected $entityDataType = '';
  protected $framesType = GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1Entity */
  public function setEntity(GoogleCloudVideointelligenceV1p3beta1Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Entity */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
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

class GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1Track[] */
  public $tracks;
  /** @var string */
  public $version;
  protected $collection_key = 'tracks';
  protected $tracksType = GoogleCloudVideointelligenceV1p3beta1Track::class;
  protected $tracksDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Track[] */
  public function getTracks()
  {
    return $this->tracks;
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

class GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p3beta1Celebrity */
  public $celebrity;
  /** @var float */
  public $confidence;
  protected $celebrityType = GoogleCloudVideointelligenceV1p3beta1Celebrity::class;
  protected $celebrityDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1Celebrity */
  public function setCelebrity(GoogleCloudVideointelligenceV1p3beta1Celebrity $celebrity)
  {
    $this->celebrity = $celebrity;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1Celebrity */
  public function getCelebrity()
  {
    return $this->celebrity;
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
}

class GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var GoogleCloudVideointelligenceV1p3beta1WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = GoogleCloudVideointelligenceV1p3beta1WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVideointelligenceV1p3beta1SpeechTranscription extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var string */
  public $languageCode;
  protected $collection_key = 'alternatives';
  protected $alternativesType = GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
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

class GoogleCloudVideointelligenceV1p3beta1StreamingAnnotateVideoResponse extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults */
  public $annotationResults;
  /** @var string */
  public $annotationResultsUri;
  /** @var GoogleRpcStatus */
  public $error;
  protected $annotationResultsType = GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults::class;
  protected $annotationResultsDataType = '';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults */
  public function setAnnotationResults(GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults $annotationResults)
  {
    $this->annotationResults = $annotationResults;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults */
  public function getAnnotationResults()
  {
    return $this->annotationResults;
  }
  /** @param string */
  public function setAnnotationResultsUri($annotationResultsUri)
  {
    $this->annotationResultsUri = $annotationResultsUri;
  }
  /** @return string */
  public function getAnnotationResultsUri()
  {
    return $this->annotationResultsUri;
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
}

class GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var string */
  public $frameTimestamp;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $labelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public $shotAnnotations;
  protected $collection_key = 'shotAnnotations';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $labelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param string */
  public function setFrameTimestamp($frameTimestamp)
  {
    $this->frameTimestamp = $frameTimestamp;
  }
  /** @return string */
  public function getFrameTimestamp()
  {
    return $this->frameTimestamp;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
}

class GoogleCloudVideointelligenceV1p3beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1TextSegment[] */
  public $segments;
  /** @var string */
  public $text;
  /** @var string */
  public $version;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudVideointelligenceV1p3beta1TextSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1TextSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1TextSegment[] */
  public function getSegments()
  {
    return $this->segments;
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

class GoogleCloudVideointelligenceV1p3beta1TextFrame extends \Google\Model
{
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly */
  public $rotatedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
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

class GoogleCloudVideointelligenceV1p3beta1TextSegment extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p3beta1TextFrame[] */
  public $frames;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  protected $collection_key = 'frames';
  protected $framesType = GoogleCloudVideointelligenceV1p3beta1TextFrame::class;
  protected $framesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1TextFrame[] */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1TextFrame[] */
  public function getFrames()
  {
    return $this->frames;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class GoogleCloudVideointelligenceV1p3beta1TimestampedObject extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public $attributes;
  /** @var GoogleCloudVideointelligenceV1p3beta1DetectedLandmark[] */
  public $landmarks;
  /** @var GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public $normalizedBoundingBox;
  /** @var string */
  public $timeOffset;
  protected $collection_key = 'landmarks';
  protected $attributesType = GoogleCloudVideointelligenceV1p3beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $landmarksType = GoogleCloudVideointelligenceV1p3beta1DetectedLandmark::class;
  protected $landmarksDataType = 'array';
  protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox::class;
  protected $normalizedBoundingBoxDataType = '';
  /** @param GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1DetectedLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1DetectedLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox $normalizedBoundingBox)
  {
    $this->normalizedBoundingBox = $normalizedBoundingBox;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox */
  public function getNormalizedBoundingBox()
  {
    return $this->normalizedBoundingBox;
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

class GoogleCloudVideointelligenceV1p3beta1Track extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public $attributes;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p3beta1TimestampedObject[] */
  public $timestampedObjects;
  protected $collection_key = 'timestampedObjects';
  protected $attributesType = GoogleCloudVideointelligenceV1p3beta1DetectedAttribute::class;
  protected $attributesDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $timestampedObjectsType = GoogleCloudVideointelligenceV1p3beta1TimestampedObject::class;
  protected $timestampedObjectsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1DetectedAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1TimestampedObject[] */
  public function setTimestampedObjects($timestampedObjects)
  {
    $this->timestampedObjects = $timestampedObjects;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1TimestampedObject[] */
  public function getTimestampedObjects()
  {
    return $this->timestampedObjects;
  }
}

class GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $inputUri;
  /** @var int */
  public $progressPercent;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  /** @var string */
  public $startTime;
  /** @var string */
  public $updateTime;
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
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
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
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

class GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults extends \Google\Collection
{
  /** @var GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation */
  public $celebrityRecognitionAnnotations;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public $explicitAnnotation;
  /** @var GoogleCloudVideointelligenceV1p3beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation[] */
  public $faceDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $frameLabelAnnotations;
  /** @var string */
  public $inputUri;
  /** @var GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation[] */
  public $logoRecognitionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation[] */
  public $personDetectionAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public $segment;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $segmentLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $segmentPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public $shotAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $shotLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public $shotPresenceLabelAnnotations;
  /** @var GoogleCloudVideointelligenceV1p3beta1SpeechTranscription[] */
  public $speechTranscriptions;
  /** @var GoogleCloudVideointelligenceV1p3beta1TextAnnotation[] */
  public $textAnnotations;
  protected $collection_key = 'textAnnotations';
  protected $celebrityRecognitionAnnotationsType = GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation::class;
  protected $celebrityRecognitionAnnotationsDataType = '';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1p3beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  protected $segmentType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $segmentDataType = '';
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1p3beta1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1p3beta1SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1p3beta1TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  /** @param GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation */
  public function setCelebrityRecognitionAnnotations(GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation $celebrityRecognitionAnnotations)
  {
    $this->celebrityRecognitionAnnotations = $celebrityRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation */
  public function getCelebrityRecognitionAnnotations()
  {
    return $this->celebrityRecognitionAnnotations;
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
  /** @param GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation[] */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation[] */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
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
  /** @param GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation[] */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation[] */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation[] */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation[] */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function setSegment(GoogleCloudVideointelligenceV1p3beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1VideoSegment[] */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1LabelAnnotation[] */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1SpeechTranscription[] */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1SpeechTranscription[] */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /** @param GoogleCloudVideointelligenceV1p3beta1TextAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVideointelligenceV1p3beta1TextAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

class GoogleCloudVideointelligenceV1p3beta1VideoSegment extends \Google\Model
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

class GoogleCloudVideointelligenceV1p3beta1WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class GoogleLongrunningCancelOperationRequest extends \Google\Model
{
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
class_alias(GoogleCloudVideointelligenceV1AnnotateVideoProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1AnnotateVideoProgress');
class_alias(GoogleCloudVideointelligenceV1AnnotateVideoRequest::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1AnnotateVideoRequest');
class_alias(GoogleCloudVideointelligenceV1AnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1AnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1DetectedAttribute::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1DetectedAttribute');
class_alias(GoogleCloudVideointelligenceV1DetectedLandmark::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1DetectedLandmark');
class_alias(GoogleCloudVideointelligenceV1Entity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1Entity');
class_alias(GoogleCloudVideointelligenceV1ExplicitContentAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ExplicitContentAnnotation');
class_alias(GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ExplicitContentDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1ExplicitContentFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ExplicitContentFrame');
class_alias(GoogleCloudVideointelligenceV1FaceAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1FaceAnnotation');
class_alias(GoogleCloudVideointelligenceV1FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1FaceDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1FaceDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1FaceDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1FaceFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1FaceFrame');
class_alias(GoogleCloudVideointelligenceV1FaceSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1FaceSegment');
class_alias(GoogleCloudVideointelligenceV1LabelAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1LabelAnnotation');
class_alias(GoogleCloudVideointelligenceV1LabelDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1LabelDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1LabelFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1LabelFrame');
class_alias(GoogleCloudVideointelligenceV1LabelSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1LabelSegment');
class_alias(GoogleCloudVideointelligenceV1LogoRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1LogoRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1NormalizedBoundingBox::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1NormalizedBoundingBox');
class_alias(GoogleCloudVideointelligenceV1NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1NormalizedBoundingPoly');
class_alias(GoogleCloudVideointelligenceV1NormalizedVertex::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1NormalizedVertex');
class_alias(GoogleCloudVideointelligenceV1ObjectTrackingAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ObjectTrackingAnnotation');
class_alias(GoogleCloudVideointelligenceV1ObjectTrackingConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ObjectTrackingConfig');
class_alias(GoogleCloudVideointelligenceV1ObjectTrackingFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ObjectTrackingFrame');
class_alias(GoogleCloudVideointelligenceV1PersonDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1PersonDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1PersonDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1PersonDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1ShotChangeDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1ShotChangeDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1SpeechContext::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1SpeechContext');
class_alias(GoogleCloudVideointelligenceV1SpeechRecognitionAlternative::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1SpeechRecognitionAlternative');
class_alias(GoogleCloudVideointelligenceV1SpeechTranscription::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1SpeechTranscription');
class_alias(GoogleCloudVideointelligenceV1SpeechTranscriptionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1SpeechTranscriptionConfig');
class_alias(GoogleCloudVideointelligenceV1TextAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TextAnnotation');
class_alias(GoogleCloudVideointelligenceV1TextDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TextDetectionConfig');
class_alias(GoogleCloudVideointelligenceV1TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TextFrame');
class_alias(GoogleCloudVideointelligenceV1TextSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TextSegment');
class_alias(GoogleCloudVideointelligenceV1TimestampedObject::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TimestampedObject');
class_alias(GoogleCloudVideointelligenceV1Track::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1Track');
class_alias(GoogleCloudVideointelligenceV1VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1VideoAnnotationProgress');
class_alias(GoogleCloudVideointelligenceV1VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1VideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1VideoContext::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1VideoContext');
class_alias(GoogleCloudVideointelligenceV1VideoSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1VideoSegment');
class_alias(GoogleCloudVideointelligenceV1WordInfo::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1WordInfo');
class_alias(GoogleCloudVideointelligenceV1beta2AnnotateVideoProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2AnnotateVideoProgress');
class_alias(GoogleCloudVideointelligenceV1beta2AnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2AnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1beta2DetectedAttribute::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2DetectedAttribute');
class_alias(GoogleCloudVideointelligenceV1beta2DetectedLandmark::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2DetectedLandmark');
class_alias(GoogleCloudVideointelligenceV1beta2Entity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2Entity');
class_alias(GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2ExplicitContentFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentFrame');
class_alias(GoogleCloudVideointelligenceV1beta2FaceAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2FaceAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2FaceFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2FaceFrame');
class_alias(GoogleCloudVideointelligenceV1beta2FaceSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2FaceSegment');
class_alias(GoogleCloudVideointelligenceV1beta2LabelAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2LabelFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelFrame');
class_alias(GoogleCloudVideointelligenceV1beta2LabelSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelSegment');
class_alias(GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LogoRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox');
class_alias(GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2NormalizedBoundingPoly');
class_alias(GoogleCloudVideointelligenceV1beta2NormalizedVertex::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2NormalizedVertex');
class_alias(GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ObjectTrackingAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ObjectTrackingFrame');
class_alias(GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2PersonDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2SpeechRecognitionAlternative');
class_alias(GoogleCloudVideointelligenceV1beta2SpeechTranscription::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2SpeechTranscription');
class_alias(GoogleCloudVideointelligenceV1beta2TextAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2TextAnnotation');
class_alias(GoogleCloudVideointelligenceV1beta2TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2TextFrame');
class_alias(GoogleCloudVideointelligenceV1beta2TextSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2TextSegment');
class_alias(GoogleCloudVideointelligenceV1beta2TimestampedObject::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2TimestampedObject');
class_alias(GoogleCloudVideointelligenceV1beta2Track::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2Track');
class_alias(GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoAnnotationProgress');
class_alias(GoogleCloudVideointelligenceV1beta2VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1beta2VideoSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoSegment');
class_alias(GoogleCloudVideointelligenceV1beta2WordInfo::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2WordInfo');
class_alias(GoogleCloudVideointelligenceV1p1beta1AnnotateVideoProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1AnnotateVideoProgress');
class_alias(GoogleCloudVideointelligenceV1p1beta1AnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1AnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1p1beta1DetectedAttribute::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1DetectedAttribute');
class_alias(GoogleCloudVideointelligenceV1p1beta1DetectedLandmark::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1DetectedLandmark');
class_alias(GoogleCloudVideointelligenceV1p1beta1Entity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1Entity');
class_alias(GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1ExplicitContentAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1ExplicitContentFrame');
class_alias(GoogleCloudVideointelligenceV1p1beta1FaceAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1FaceAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1FaceDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1FaceFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1FaceFrame');
class_alias(GoogleCloudVideointelligenceV1p1beta1FaceSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1FaceSegment');
class_alias(GoogleCloudVideointelligenceV1p1beta1LabelAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1LabelAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1LabelFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1LabelFrame');
class_alias(GoogleCloudVideointelligenceV1p1beta1LabelSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1LabelSegment');
class_alias(GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1LogoRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingBox');
class_alias(GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1NormalizedBoundingPoly');
class_alias(GoogleCloudVideointelligenceV1p1beta1NormalizedVertex::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1NormalizedVertex');
class_alias(GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1ObjectTrackingAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1ObjectTrackingFrame');
class_alias(GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1PersonDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1SpeechRecognitionAlternative');
class_alias(GoogleCloudVideointelligenceV1p1beta1SpeechTranscription::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1SpeechTranscription');
class_alias(GoogleCloudVideointelligenceV1p1beta1TextAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1TextAnnotation');
class_alias(GoogleCloudVideointelligenceV1p1beta1TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1TextFrame');
class_alias(GoogleCloudVideointelligenceV1p1beta1TextSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1TextSegment');
class_alias(GoogleCloudVideointelligenceV1p1beta1TimestampedObject::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1TimestampedObject');
class_alias(GoogleCloudVideointelligenceV1p1beta1Track::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1Track');
class_alias(GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress');
class_alias(GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1VideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1p1beta1VideoSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1VideoSegment');
class_alias(GoogleCloudVideointelligenceV1p1beta1WordInfo::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1WordInfo');
class_alias(GoogleCloudVideointelligenceV1p2beta1AnnotateVideoProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1AnnotateVideoProgress');
class_alias(GoogleCloudVideointelligenceV1p2beta1AnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1AnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1p2beta1DetectedAttribute::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1DetectedAttribute');
class_alias(GoogleCloudVideointelligenceV1p2beta1DetectedLandmark::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1DetectedLandmark');
class_alias(GoogleCloudVideointelligenceV1p2beta1Entity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1Entity');
class_alias(GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1ExplicitContentAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1ExplicitContentFrame');
class_alias(GoogleCloudVideointelligenceV1p2beta1FaceAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1FaceAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1FaceDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1FaceFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1FaceFrame');
class_alias(GoogleCloudVideointelligenceV1p2beta1FaceSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1FaceSegment');
class_alias(GoogleCloudVideointelligenceV1p2beta1LabelAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1LabelAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1LabelFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1LabelFrame');
class_alias(GoogleCloudVideointelligenceV1p2beta1LabelSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1LabelSegment');
class_alias(GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1LogoRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingBox');
class_alias(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly');
class_alias(GoogleCloudVideointelligenceV1p2beta1NormalizedVertex::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1NormalizedVertex');
class_alias(GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1ObjectTrackingAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1ObjectTrackingFrame');
class_alias(GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1PersonDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1SpeechRecognitionAlternative');
class_alias(GoogleCloudVideointelligenceV1p2beta1SpeechTranscription::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1SpeechTranscription');
class_alias(GoogleCloudVideointelligenceV1p2beta1TextAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1TextAnnotation');
class_alias(GoogleCloudVideointelligenceV1p2beta1TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1TextFrame');
class_alias(GoogleCloudVideointelligenceV1p2beta1TextSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1TextSegment');
class_alias(GoogleCloudVideointelligenceV1p2beta1TimestampedObject::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1TimestampedObject');
class_alias(GoogleCloudVideointelligenceV1p2beta1Track::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1Track');
class_alias(GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress');
class_alias(GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1VideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1p2beta1VideoSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1VideoSegment');
class_alias(GoogleCloudVideointelligenceV1p2beta1WordInfo::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1WordInfo');
class_alias(GoogleCloudVideointelligenceV1p3beta1AnnotateVideoProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1AnnotateVideoProgress');
class_alias(GoogleCloudVideointelligenceV1p3beta1AnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1AnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1p3beta1Celebrity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1Celebrity');
class_alias(GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1CelebrityRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1CelebrityTrack::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1CelebrityTrack');
class_alias(GoogleCloudVideointelligenceV1p3beta1DetectedAttribute::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1DetectedAttribute');
class_alias(GoogleCloudVideointelligenceV1p3beta1DetectedLandmark::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1DetectedLandmark');
class_alias(GoogleCloudVideointelligenceV1p3beta1Entity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1Entity');
class_alias(GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1ExplicitContentAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1ExplicitContentFrame');
class_alias(GoogleCloudVideointelligenceV1p3beta1FaceAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1FaceAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1FaceDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1FaceFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1FaceFrame');
class_alias(GoogleCloudVideointelligenceV1p3beta1FaceSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1FaceSegment');
class_alias(GoogleCloudVideointelligenceV1p3beta1LabelAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1LabelAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1LabelFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1LabelFrame');
class_alias(GoogleCloudVideointelligenceV1p3beta1LabelSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1LabelSegment');
class_alias(GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1LogoRecognitionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingBox');
class_alias(GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1NormalizedBoundingPoly');
class_alias(GoogleCloudVideointelligenceV1p3beta1NormalizedVertex::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1NormalizedVertex');
class_alias(GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1ObjectTrackingAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1ObjectTrackingFrame');
class_alias(GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1PersonDetectionAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1RecognizedCelebrity');
class_alias(GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1SpeechRecognitionAlternative');
class_alias(GoogleCloudVideointelligenceV1p3beta1SpeechTranscription::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1SpeechTranscription');
class_alias(GoogleCloudVideointelligenceV1p3beta1StreamingAnnotateVideoResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1StreamingAnnotateVideoResponse');
class_alias(GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1StreamingVideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1p3beta1TextAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1TextAnnotation');
class_alias(GoogleCloudVideointelligenceV1p3beta1TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1TextFrame');
class_alias(GoogleCloudVideointelligenceV1p3beta1TextSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1TextSegment');
class_alias(GoogleCloudVideointelligenceV1p3beta1TimestampedObject::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1TimestampedObject');
class_alias(GoogleCloudVideointelligenceV1p3beta1Track::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1Track');
class_alias(GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1VideoAnnotationProgress');
class_alias(GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1VideoAnnotationResults');
class_alias(GoogleCloudVideointelligenceV1p3beta1VideoSegment::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1VideoSegment');
class_alias(GoogleCloudVideointelligenceV1p3beta1WordInfo::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1WordInfo');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_CloudVideoIntelligence_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_CloudVideoIntelligence_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_CloudVideoIntelligence_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_CloudVideoIntelligence_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_CloudVideoIntelligence_GoogleRpcStatus');
