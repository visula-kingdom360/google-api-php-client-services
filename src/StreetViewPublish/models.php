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

namespace Google\Service\StreetViewPublish;

class BatchDeletePhotosRequest extends \Google\Collection
{
  /** @var string[] */
  public $photoIds;
  protected $collection_key = 'photoIds';
  /** @param string[] */
  public function setPhotoIds($photoIds)
  {
    $this->photoIds = $photoIds;
  }
  /** @return string[] */
  public function getPhotoIds()
  {
    return $this->photoIds;
  }
}

class BatchDeletePhotosResponse extends \Google\Collection
{
  /** @var Status[] */
  public $status;
  protected $collection_key = 'status';
  protected $statusType = Status::class;
  protected $statusDataType = 'array';
  /** @param Status[] */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return Status[] */
  public function getStatus()
  {
    return $this->status;
  }
}

class BatchGetPhotosResponse extends \Google\Collection
{
  /** @var PhotoResponse[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = PhotoResponse::class;
  protected $resultsDataType = 'array';
  /** @param PhotoResponse[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return PhotoResponse[] */
  public function getResults()
  {
    return $this->results;
  }
}

class BatchUpdatePhotosRequest extends \Google\Collection
{
  /** @var UpdatePhotoRequest[] */
  public $updatePhotoRequests;
  protected $collection_key = 'updatePhotoRequests';
  protected $updatePhotoRequestsType = UpdatePhotoRequest::class;
  protected $updatePhotoRequestsDataType = 'array';
  /** @param UpdatePhotoRequest[] */
  public function setUpdatePhotoRequests($updatePhotoRequests)
  {
    $this->updatePhotoRequests = $updatePhotoRequests;
  }
  /** @return UpdatePhotoRequest[] */
  public function getUpdatePhotoRequests()
  {
    return $this->updatePhotoRequests;
  }
}

class BatchUpdatePhotosResponse extends \Google\Collection
{
  /** @var PhotoResponse[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = PhotoResponse::class;
  protected $resultsDataType = 'array';
  /** @param PhotoResponse[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return PhotoResponse[] */
  public function getResults()
  {
    return $this->results;
  }
}

class Connection extends \Google\Model
{
  /** @var PhotoId */
  public $target;
  protected $targetType = PhotoId::class;
  protected $targetDataType = '';
  /** @param PhotoId */
  public function setTarget(PhotoId $target)
  {
    $this->target = $target;
  }
  /** @return PhotoId */
  public function getTarget()
  {
    return $this->target;
  }
}

class GpsDataGapFailureDetails extends \Google\Model
{
  /** @var string */
  public $gapDuration;
  /** @var string */
  public $gapStartTime;

  /** @param string */
  public function setGapDuration($gapDuration)
  {
    $this->gapDuration = $gapDuration;
  }
  /** @return string */
  public function getGapDuration()
  {
    return $this->gapDuration;
  }
  /** @param string */
  public function setGapStartTime($gapStartTime)
  {
    $this->gapStartTime = $gapStartTime;
  }
  /** @return string */
  public function getGapStartTime()
  {
    return $this->gapStartTime;
  }
}

class Imu extends \Google\Collection
{
  /** @var Measurement3d[] */
  public $accelMpsps;
  /** @var Measurement3d[] */
  public $gyroRps;
  /** @var Measurement3d[] */
  public $magUt;
  protected $collection_key = 'magUt';
  protected $accelMpspsType = Measurement3d::class;
  protected $accelMpspsDataType = 'array';
  protected $gyroRpsType = Measurement3d::class;
  protected $gyroRpsDataType = 'array';
  protected $magUtType = Measurement3d::class;
  protected $magUtDataType = 'array';
  /** @param Measurement3d[] */
  public function setAccelMpsps($accelMpsps)
  {
    $this->accelMpsps = $accelMpsps;
  }
  /** @return Measurement3d[] */
  public function getAccelMpsps()
  {
    return $this->accelMpsps;
  }
  /** @param Measurement3d[] */
  public function setGyroRps($gyroRps)
  {
    $this->gyroRps = $gyroRps;
  }
  /** @return Measurement3d[] */
  public function getGyroRps()
  {
    return $this->gyroRps;
  }
  /** @param Measurement3d[] */
  public function setMagUt($magUt)
  {
    $this->magUt = $magUt;
  }
  /** @return Measurement3d[] */
  public function getMagUt()
  {
    return $this->magUt;
  }
}

class ImuDataGapFailureDetails extends \Google\Model
{
  /** @var string */
  public $gapDuration;
  /** @var string */
  public $gapStartTime;

  /** @param string */
  public function setGapDuration($gapDuration)
  {
    $this->gapDuration = $gapDuration;
  }
  /** @return string */
  public function getGapDuration()
  {
    return $this->gapDuration;
  }
  /** @param string */
  public function setGapStartTime($gapStartTime)
  {
    $this->gapStartTime = $gapStartTime;
  }
  /** @return string */
  public function getGapStartTime()
  {
    return $this->gapStartTime;
  }
}

class InsufficientGpsFailureDetails extends \Google\Model
{
  /** @var int */
  public $gpsPointsFound;

  /** @param int */
  public function setGpsPointsFound($gpsPointsFound)
  {
    $this->gpsPointsFound = $gpsPointsFound;
  }
  /** @return int */
  public function getGpsPointsFound()
  {
    return $this->gpsPointsFound;
  }
}

class LatLng extends \Google\Model
{
  public $latitude;
  public $longitude;

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class LatLngBounds extends \Google\Model
{
  /** @var LatLng */
  public $northeast;
  /** @var LatLng */
  public $southwest;
  protected $northeastType = LatLng::class;
  protected $northeastDataType = '';
  protected $southwestType = LatLng::class;
  protected $southwestDataType = '';
  /** @param LatLng */
  public function setNortheast(LatLng $northeast)
  {
    $this->northeast = $northeast;
  }
  /** @return LatLng */
  public function getNortheast()
  {
    return $this->northeast;
  }
  /** @param LatLng */
  public function setSouthwest(LatLng $southwest)
  {
    $this->southwest = $southwest;
  }
  /** @return LatLng */
  public function getSouthwest()
  {
    return $this->southwest;
  }
}

class Level extends \Google\Model
{
  /** @var string */
  public $name;
  public $number;

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
  public function setNumber($number)
  {
    $this->number = $number;
  }
  public function getNumber()
  {
    return $this->number;
  }
}

class ListPhotoSequencesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $photoSequences;
  protected $collection_key = 'photoSequences';
  protected $photoSequencesType = Operation::class;
  protected $photoSequencesDataType = 'array';
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
  /** @param Operation[] */
  public function setPhotoSequences($photoSequences)
  {
    $this->photoSequences = $photoSequences;
  }
  /** @return Operation[] */
  public function getPhotoSequences()
  {
    return $this->photoSequences;
  }
}

class ListPhotosResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Photo[] */
  public $photos;
  protected $collection_key = 'photos';
  protected $photosType = Photo::class;
  protected $photosDataType = 'array';
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
  /** @param Photo[] */
  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }
  /** @return Photo[] */
  public function getPhotos()
  {
    return $this->photos;
  }
}

class Measurement3d extends \Google\Model
{
  /** @var string */
  public $captureTime;
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param string */
  public function setCaptureTime($captureTime)
  {
    $this->captureTime = $captureTime;
  }
  /** @return string */
  public function getCaptureTime()
  {
    return $this->captureTime;
  }
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
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class NotOutdoorsFailureDetails extends \Google\Model
{
  /** @var string */
  public $startTime;

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

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
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

class Photo extends \Google\Collection
{
  /** @var string */
  public $captureTime;
  /** @var Connection[] */
  public $connections;
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $mapsPublishStatus;
  /** @var PhotoId */
  public $photoId;
  /** @var Place[] */
  public $places;
  /** @var Pose */
  public $pose;
  /** @var string */
  public $shareLink;
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $transferStatus;
  /** @var UploadRef */
  public $uploadReference;
  /** @var string */
  public $uploadTime;
  /** @var string */
  public $viewCount;
  protected $collection_key = 'places';
  protected $connectionsType = Connection::class;
  protected $connectionsDataType = 'array';
  protected $photoIdType = PhotoId::class;
  protected $photoIdDataType = '';
  protected $placesType = Place::class;
  protected $placesDataType = 'array';
  protected $poseType = Pose::class;
  protected $poseDataType = '';
  protected $uploadReferenceType = UploadRef::class;
  protected $uploadReferenceDataType = '';
  /** @param string */
  public function setCaptureTime($captureTime)
  {
    $this->captureTime = $captureTime;
  }
  /** @return string */
  public function getCaptureTime()
  {
    return $this->captureTime;
  }
  /** @param Connection[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return Connection[] */
  public function getConnections()
  {
    return $this->connections;
  }
  /** @param string */
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }
  /** @param string */
  public function setMapsPublishStatus($mapsPublishStatus)
  {
    $this->mapsPublishStatus = $mapsPublishStatus;
  }
  /** @return string */
  public function getMapsPublishStatus()
  {
    return $this->mapsPublishStatus;
  }
  /** @param PhotoId */
  public function setPhotoId(PhotoId $photoId)
  {
    $this->photoId = $photoId;
  }
  /** @return PhotoId */
  public function getPhotoId()
  {
    return $this->photoId;
  }
  /** @param Place[] */
  public function setPlaces($places)
  {
    $this->places = $places;
  }
  /** @return Place[] */
  public function getPlaces()
  {
    return $this->places;
  }
  /** @param Pose */
  public function setPose(Pose $pose)
  {
    $this->pose = $pose;
  }
  /** @return Pose */
  public function getPose()
  {
    return $this->pose;
  }
  /** @param string */
  public function setShareLink($shareLink)
  {
    $this->shareLink = $shareLink;
  }
  /** @return string */
  public function getShareLink()
  {
    return $this->shareLink;
  }
  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
  /** @param string */
  public function setTransferStatus($transferStatus)
  {
    $this->transferStatus = $transferStatus;
  }
  /** @return string */
  public function getTransferStatus()
  {
    return $this->transferStatus;
  }
  /** @param UploadRef */
  public function setUploadReference(UploadRef $uploadReference)
  {
    $this->uploadReference = $uploadReference;
  }
  /** @return UploadRef */
  public function getUploadReference()
  {
    return $this->uploadReference;
  }
  /** @param string */
  public function setUploadTime($uploadTime)
  {
    $this->uploadTime = $uploadTime;
  }
  /** @return string */
  public function getUploadTime()
  {
    return $this->uploadTime;
  }
  /** @param string */
  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  /** @return string */
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

class PhotoId extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class PhotoResponse extends \Google\Model
{
  /** @var Photo */
  public $photo;
  /** @var Status */
  public $status;
  protected $photoType = Photo::class;
  protected $photoDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param Photo */
  public function setPhoto(Photo $photo)
  {
    $this->photo = $photo;
  }
  /** @return Photo */
  public function getPhoto()
  {
    return $this->photo;
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
}

class PhotoSequence extends \Google\Collection
{
  /** @var string */
  public $captureTimeOverride;
  public $distanceMeters;
  /** @var ProcessingFailureDetails */
  public $failureDetails;
  /** @var string */
  public $failureReason;
  /** @var string */
  public $filename;
  /** @var string */
  public $gpsSource;
  /** @var string */
  public $id;
  /** @var Imu */
  public $imu;
  /** @var Photo[] */
  public $photos;
  /** @var string */
  public $processingState;
  /** @var Pose[] */
  public $rawGpsTimeline;
  /** @var LatLngBounds */
  public $sequenceBounds;
  /** @var UploadRef */
  public $uploadReference;
  /** @var string */
  public $uploadTime;
  /** @var string */
  public $viewCount;
  protected $collection_key = 'rawGpsTimeline';
  protected $failureDetailsType = ProcessingFailureDetails::class;
  protected $failureDetailsDataType = '';
  protected $imuType = Imu::class;
  protected $imuDataType = '';
  protected $photosType = Photo::class;
  protected $photosDataType = 'array';
  protected $rawGpsTimelineType = Pose::class;
  protected $rawGpsTimelineDataType = 'array';
  protected $sequenceBoundsType = LatLngBounds::class;
  protected $sequenceBoundsDataType = '';
  protected $uploadReferenceType = UploadRef::class;
  protected $uploadReferenceDataType = '';
  /** @param string */
  public function setCaptureTimeOverride($captureTimeOverride)
  {
    $this->captureTimeOverride = $captureTimeOverride;
  }
  /** @return string */
  public function getCaptureTimeOverride()
  {
    return $this->captureTimeOverride;
  }
  public function setDistanceMeters($distanceMeters)
  {
    $this->distanceMeters = $distanceMeters;
  }
  public function getDistanceMeters()
  {
    return $this->distanceMeters;
  }
  /** @param ProcessingFailureDetails */
  public function setFailureDetails(ProcessingFailureDetails $failureDetails)
  {
    $this->failureDetails = $failureDetails;
  }
  /** @return ProcessingFailureDetails */
  public function getFailureDetails()
  {
    return $this->failureDetails;
  }
  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /** @param string */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
  /** @param string */
  public function setGpsSource($gpsSource)
  {
    $this->gpsSource = $gpsSource;
  }
  /** @return string */
  public function getGpsSource()
  {
    return $this->gpsSource;
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
  /** @param Imu */
  public function setImu(Imu $imu)
  {
    $this->imu = $imu;
  }
  /** @return Imu */
  public function getImu()
  {
    return $this->imu;
  }
  /** @param Photo[] */
  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }
  /** @return Photo[] */
  public function getPhotos()
  {
    return $this->photos;
  }
  /** @param string */
  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }
  /** @return string */
  public function getProcessingState()
  {
    return $this->processingState;
  }
  /** @param Pose[] */
  public function setRawGpsTimeline($rawGpsTimeline)
  {
    $this->rawGpsTimeline = $rawGpsTimeline;
  }
  /** @return Pose[] */
  public function getRawGpsTimeline()
  {
    return $this->rawGpsTimeline;
  }
  /** @param LatLngBounds */
  public function setSequenceBounds(LatLngBounds $sequenceBounds)
  {
    $this->sequenceBounds = $sequenceBounds;
  }
  /** @return LatLngBounds */
  public function getSequenceBounds()
  {
    return $this->sequenceBounds;
  }
  /** @param UploadRef */
  public function setUploadReference(UploadRef $uploadReference)
  {
    $this->uploadReference = $uploadReference;
  }
  /** @return UploadRef */
  public function getUploadReference()
  {
    return $this->uploadReference;
  }
  /** @param string */
  public function setUploadTime($uploadTime)
  {
    $this->uploadTime = $uploadTime;
  }
  /** @return string */
  public function getUploadTime()
  {
    return $this->uploadTime;
  }
  /** @param string */
  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  /** @return string */
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

class Place extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string */
  public $placeId;

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
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Pose extends \Google\Model
{
  /** @var float */
  public $accuracyMeters;
  public $altitude;
  /** @var string */
  public $gpsRecordTimestampUnixEpoch;
  public $heading;
  /** @var LatLng */
  public $latLngPair;
  /** @var Level */
  public $level;
  public $pitch;
  public $roll;
  protected $latLngPairType = LatLng::class;
  protected $latLngPairDataType = '';
  protected $levelType = Level::class;
  protected $levelDataType = '';
  /** @param float */
  public function setAccuracyMeters($accuracyMeters)
  {
    $this->accuracyMeters = $accuracyMeters;
  }
  /** @return float */
  public function getAccuracyMeters()
  {
    return $this->accuracyMeters;
  }
  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }
  public function getAltitude()
  {
    return $this->altitude;
  }
  /** @param string */
  public function setGpsRecordTimestampUnixEpoch($gpsRecordTimestampUnixEpoch)
  {
    $this->gpsRecordTimestampUnixEpoch = $gpsRecordTimestampUnixEpoch;
  }
  /** @return string */
  public function getGpsRecordTimestampUnixEpoch()
  {
    return $this->gpsRecordTimestampUnixEpoch;
  }
  public function setHeading($heading)
  {
    $this->heading = $heading;
  }
  public function getHeading()
  {
    return $this->heading;
  }
  /** @param LatLng */
  public function setLatLngPair(LatLng $latLngPair)
  {
    $this->latLngPair = $latLngPair;
  }
  /** @return LatLng */
  public function getLatLngPair()
  {
    return $this->latLngPair;
  }
  /** @param Level */
  public function setLevel(Level $level)
  {
    $this->level = $level;
  }
  /** @return Level */
  public function getLevel()
  {
    return $this->level;
  }
  public function setPitch($pitch)
  {
    $this->pitch = $pitch;
  }
  public function getPitch()
  {
    return $this->pitch;
  }
  public function setRoll($roll)
  {
    $this->roll = $roll;
  }
  public function getRoll()
  {
    return $this->roll;
  }
}

class ProcessingFailureDetails extends \Google\Model
{
  /** @var GpsDataGapFailureDetails */
  public $gpsDataGapDetails;
  /** @var ImuDataGapFailureDetails */
  public $imuDataGapDetails;
  /** @var InsufficientGpsFailureDetails */
  public $insufficientGpsDetails;
  /** @var NotOutdoorsFailureDetails */
  public $notOutdoorsDetails;
  protected $gpsDataGapDetailsType = GpsDataGapFailureDetails::class;
  protected $gpsDataGapDetailsDataType = '';
  protected $imuDataGapDetailsType = ImuDataGapFailureDetails::class;
  protected $imuDataGapDetailsDataType = '';
  protected $insufficientGpsDetailsType = InsufficientGpsFailureDetails::class;
  protected $insufficientGpsDetailsDataType = '';
  protected $notOutdoorsDetailsType = NotOutdoorsFailureDetails::class;
  protected $notOutdoorsDetailsDataType = '';
  /** @param GpsDataGapFailureDetails */
  public function setGpsDataGapDetails(GpsDataGapFailureDetails $gpsDataGapDetails)
  {
    $this->gpsDataGapDetails = $gpsDataGapDetails;
  }
  /** @return GpsDataGapFailureDetails */
  public function getGpsDataGapDetails()
  {
    return $this->gpsDataGapDetails;
  }
  /** @param ImuDataGapFailureDetails */
  public function setImuDataGapDetails(ImuDataGapFailureDetails $imuDataGapDetails)
  {
    $this->imuDataGapDetails = $imuDataGapDetails;
  }
  /** @return ImuDataGapFailureDetails */
  public function getImuDataGapDetails()
  {
    return $this->imuDataGapDetails;
  }
  /** @param InsufficientGpsFailureDetails */
  public function setInsufficientGpsDetails(InsufficientGpsFailureDetails $insufficientGpsDetails)
  {
    $this->insufficientGpsDetails = $insufficientGpsDetails;
  }
  /** @return InsufficientGpsFailureDetails */
  public function getInsufficientGpsDetails()
  {
    return $this->insufficientGpsDetails;
  }
  /** @param NotOutdoorsFailureDetails */
  public function setNotOutdoorsDetails(NotOutdoorsFailureDetails $notOutdoorsDetails)
  {
    $this->notOutdoorsDetails = $notOutdoorsDetails;
  }
  /** @return NotOutdoorsFailureDetails */
  public function getNotOutdoorsDetails()
  {
    return $this->notOutdoorsDetails;
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

class StreetviewpublishEmpty extends \Google\Model
{
}

class UpdatePhotoRequest extends \Google\Model
{
  /** @var Photo */
  public $photo;
  /** @var string */
  public $updateMask;
  protected $photoType = Photo::class;
  protected $photoDataType = '';
  /** @param Photo */
  public function setPhoto(Photo $photo)
  {
    $this->photo = $photo;
  }
  /** @return Photo */
  public function getPhoto()
  {
    return $this->photo;
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

class UploadRef extends \Google\Model
{
  /** @var string */
  public $uploadUrl;

  /** @param string */
  public function setUploadUrl($uploadUrl)
  {
    $this->uploadUrl = $uploadUrl;
  }
  /** @return string */
  public function getUploadUrl()
  {
    return $this->uploadUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchDeletePhotosRequest::class, 'Google_Service_StreetViewPublish_BatchDeletePhotosRequest');
class_alias(BatchDeletePhotosResponse::class, 'Google_Service_StreetViewPublish_BatchDeletePhotosResponse');
class_alias(BatchGetPhotosResponse::class, 'Google_Service_StreetViewPublish_BatchGetPhotosResponse');
class_alias(BatchUpdatePhotosRequest::class, 'Google_Service_StreetViewPublish_BatchUpdatePhotosRequest');
class_alias(BatchUpdatePhotosResponse::class, 'Google_Service_StreetViewPublish_BatchUpdatePhotosResponse');
class_alias(Connection::class, 'Google_Service_StreetViewPublish_Connection');
class_alias(GpsDataGapFailureDetails::class, 'Google_Service_StreetViewPublish_GpsDataGapFailureDetails');
class_alias(Imu::class, 'Google_Service_StreetViewPublish_Imu');
class_alias(ImuDataGapFailureDetails::class, 'Google_Service_StreetViewPublish_ImuDataGapFailureDetails');
class_alias(InsufficientGpsFailureDetails::class, 'Google_Service_StreetViewPublish_InsufficientGpsFailureDetails');
class_alias(LatLng::class, 'Google_Service_StreetViewPublish_LatLng');
class_alias(LatLngBounds::class, 'Google_Service_StreetViewPublish_LatLngBounds');
class_alias(Level::class, 'Google_Service_StreetViewPublish_Level');
class_alias(ListPhotoSequencesResponse::class, 'Google_Service_StreetViewPublish_ListPhotoSequencesResponse');
class_alias(ListPhotosResponse::class, 'Google_Service_StreetViewPublish_ListPhotosResponse');
class_alias(Measurement3d::class, 'Google_Service_StreetViewPublish_Measurement3d');
class_alias(NotOutdoorsFailureDetails::class, 'Google_Service_StreetViewPublish_NotOutdoorsFailureDetails');
class_alias(Operation::class, 'Google_Service_StreetViewPublish_Operation');
class_alias(Photo::class, 'Google_Service_StreetViewPublish_Photo');
class_alias(PhotoId::class, 'Google_Service_StreetViewPublish_PhotoId');
class_alias(PhotoResponse::class, 'Google_Service_StreetViewPublish_PhotoResponse');
class_alias(PhotoSequence::class, 'Google_Service_StreetViewPublish_PhotoSequence');
class_alias(Place::class, 'Google_Service_StreetViewPublish_Place');
class_alias(Pose::class, 'Google_Service_StreetViewPublish_Pose');
class_alias(ProcessingFailureDetails::class, 'Google_Service_StreetViewPublish_ProcessingFailureDetails');
class_alias(Status::class, 'Google_Service_StreetViewPublish_Status');
class_alias(StreetviewpublishEmpty::class, 'Google_Service_StreetViewPublish_StreetviewpublishEmpty');
class_alias(UpdatePhotoRequest::class, 'Google_Service_StreetViewPublish_UpdatePhotoRequest');
class_alias(UploadRef::class, 'Google_Service_StreetViewPublish_UploadRef');
