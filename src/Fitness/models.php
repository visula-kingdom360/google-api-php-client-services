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

namespace Google\Service\Fitness;

class AggregateBucket extends \Google\Collection
{
  /** @var int */
  public $activity;
  /** @var Dataset[] */
  public $dataset;
  /** @var string */
  public $endTimeMillis;
  /** @var Session */
  public $session;
  /** @var string */
  public $startTimeMillis;
  /** @var string */
  public $type;
  protected $collection_key = 'dataset';
  protected $datasetType = Dataset::class;
  protected $datasetDataType = 'array';
  protected $sessionType = Session::class;
  protected $sessionDataType = '';
  /** @param int */
  public function setActivity($activity)
  {
    $this->activity = $activity;
  }
  /** @return int */
  public function getActivity()
  {
    return $this->activity;
  }
  /** @param Dataset[] */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return Dataset[] */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param string */
  public function setEndTimeMillis($endTimeMillis)
  {
    $this->endTimeMillis = $endTimeMillis;
  }
  /** @return string */
  public function getEndTimeMillis()
  {
    return $this->endTimeMillis;
  }
  /** @param Session */
  public function setSession(Session $session)
  {
    $this->session = $session;
  }
  /** @return Session */
  public function getSession()
  {
    return $this->session;
  }
  /** @param string */
  public function setStartTimeMillis($startTimeMillis)
  {
    $this->startTimeMillis = $startTimeMillis;
  }
  /** @return string */
  public function getStartTimeMillis()
  {
    return $this->startTimeMillis;
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

class AggregateBy extends \Google\Model
{
  /** @var string */
  public $dataSourceId;
  /** @var string */
  public $dataTypeName;

  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param string */
  public function setDataTypeName($dataTypeName)
  {
    $this->dataTypeName = $dataTypeName;
  }
  /** @return string */
  public function getDataTypeName()
  {
    return $this->dataTypeName;
  }
}

class AggregateRequest extends \Google\Collection
{
  /** @var AggregateBy[] */
  public $aggregateBy;
  /** @var BucketByActivity */
  public $bucketByActivitySegment;
  /** @var BucketByActivity */
  public $bucketByActivityType;
  /** @var BucketBySession */
  public $bucketBySession;
  /** @var BucketByTime */
  public $bucketByTime;
  /** @var string */
  public $endTimeMillis;
  /** @var string[] */
  public $filteredDataQualityStandard;
  /** @var string */
  public $startTimeMillis;
  protected $collection_key = 'filteredDataQualityStandard';
  protected $aggregateByType = AggregateBy::class;
  protected $aggregateByDataType = 'array';
  protected $bucketByActivitySegmentType = BucketByActivity::class;
  protected $bucketByActivitySegmentDataType = '';
  protected $bucketByActivityTypeType = BucketByActivity::class;
  protected $bucketByActivityTypeDataType = '';
  protected $bucketBySessionType = BucketBySession::class;
  protected $bucketBySessionDataType = '';
  protected $bucketByTimeType = BucketByTime::class;
  protected $bucketByTimeDataType = '';
  /** @param AggregateBy[] */
  public function setAggregateBy($aggregateBy)
  {
    $this->aggregateBy = $aggregateBy;
  }
  /** @return AggregateBy[] */
  public function getAggregateBy()
  {
    return $this->aggregateBy;
  }
  /** @param BucketByActivity */
  public function setBucketByActivitySegment(BucketByActivity $bucketByActivitySegment)
  {
    $this->bucketByActivitySegment = $bucketByActivitySegment;
  }
  /** @return BucketByActivity */
  public function getBucketByActivitySegment()
  {
    return $this->bucketByActivitySegment;
  }
  /** @param BucketByActivity */
  public function setBucketByActivityType(BucketByActivity $bucketByActivityType)
  {
    $this->bucketByActivityType = $bucketByActivityType;
  }
  /** @return BucketByActivity */
  public function getBucketByActivityType()
  {
    return $this->bucketByActivityType;
  }
  /** @param BucketBySession */
  public function setBucketBySession(BucketBySession $bucketBySession)
  {
    $this->bucketBySession = $bucketBySession;
  }
  /** @return BucketBySession */
  public function getBucketBySession()
  {
    return $this->bucketBySession;
  }
  /** @param BucketByTime */
  public function setBucketByTime(BucketByTime $bucketByTime)
  {
    $this->bucketByTime = $bucketByTime;
  }
  /** @return BucketByTime */
  public function getBucketByTime()
  {
    return $this->bucketByTime;
  }
  /** @param string */
  public function setEndTimeMillis($endTimeMillis)
  {
    $this->endTimeMillis = $endTimeMillis;
  }
  /** @return string */
  public function getEndTimeMillis()
  {
    return $this->endTimeMillis;
  }
  /** @param string[] */
  public function setFilteredDataQualityStandard($filteredDataQualityStandard)
  {
    $this->filteredDataQualityStandard = $filteredDataQualityStandard;
  }
  /** @return string[] */
  public function getFilteredDataQualityStandard()
  {
    return $this->filteredDataQualityStandard;
  }
  /** @param string */
  public function setStartTimeMillis($startTimeMillis)
  {
    $this->startTimeMillis = $startTimeMillis;
  }
  /** @return string */
  public function getStartTimeMillis()
  {
    return $this->startTimeMillis;
  }
}

class AggregateResponse extends \Google\Collection
{
  /** @var AggregateBucket[] */
  public $bucket;
  protected $collection_key = 'bucket';
  protected $bucketType = AggregateBucket::class;
  protected $bucketDataType = 'array';
  /** @param AggregateBucket[] */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return AggregateBucket[] */
  public function getBucket()
  {
    return $this->bucket;
  }
}

class Application extends \Google\Model
{
  /** @var string */
  public $detailsUrl;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $version;

  /** @param string */
  public function setDetailsUrl($detailsUrl)
  {
    $this->detailsUrl = $detailsUrl;
  }
  /** @return string */
  public function getDetailsUrl()
  {
    return $this->detailsUrl;
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

class BucketByActivity extends \Google\Model
{
  /** @var string */
  public $activityDataSourceId;
  /** @var string */
  public $minDurationMillis;

  /** @param string */
  public function setActivityDataSourceId($activityDataSourceId)
  {
    $this->activityDataSourceId = $activityDataSourceId;
  }
  /** @return string */
  public function getActivityDataSourceId()
  {
    return $this->activityDataSourceId;
  }
  /** @param string */
  public function setMinDurationMillis($minDurationMillis)
  {
    $this->minDurationMillis = $minDurationMillis;
  }
  /** @return string */
  public function getMinDurationMillis()
  {
    return $this->minDurationMillis;
  }
}

class BucketBySession extends \Google\Model
{
  /** @var string */
  public $minDurationMillis;

  /** @param string */
  public function setMinDurationMillis($minDurationMillis)
  {
    $this->minDurationMillis = $minDurationMillis;
  }
  /** @return string */
  public function getMinDurationMillis()
  {
    return $this->minDurationMillis;
  }
}

class BucketByTime extends \Google\Model
{
  /** @var string */
  public $durationMillis;
  /** @var BucketByTimePeriod */
  public $period;
  protected $periodType = BucketByTimePeriod::class;
  protected $periodDataType = '';
  /** @param string */
  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
  }
  /** @return string */
  public function getDurationMillis()
  {
    return $this->durationMillis;
  }
  /** @param BucketByTimePeriod */
  public function setPeriod(BucketByTimePeriod $period)
  {
    $this->period = $period;
  }
  /** @return BucketByTimePeriod */
  public function getPeriod()
  {
    return $this->period;
  }
}

class BucketByTimePeriod extends \Google\Model
{
  /** @var string */
  public $timeZoneId;
  /** @var string */
  public $type;
  /** @var int */
  public $value;

  /** @param string */
  public function setTimeZoneId($timeZoneId)
  {
    $this->timeZoneId = $timeZoneId;
  }
  /** @return string */
  public function getTimeZoneId()
  {
    return $this->timeZoneId;
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
  /** @param int */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return int */
  public function getValue()
  {
    return $this->value;
  }
}

class DataPoint extends \Google\Collection
{
  /** @var string */
  public $computationTimeMillis;
  /** @var string */
  public $dataTypeName;
  /** @var string */
  public $endTimeNanos;
  /** @var string */
  public $modifiedTimeMillis;
  /** @var string */
  public $originDataSourceId;
  /** @var string */
  public $rawTimestampNanos;
  /** @var string */
  public $startTimeNanos;
  /** @var Value[] */
  public $value;
  protected $collection_key = 'value';
  protected $valueType = Value::class;
  protected $valueDataType = 'array';
  /** @param string */
  public function setComputationTimeMillis($computationTimeMillis)
  {
    $this->computationTimeMillis = $computationTimeMillis;
  }
  /** @return string */
  public function getComputationTimeMillis()
  {
    return $this->computationTimeMillis;
  }
  /** @param string */
  public function setDataTypeName($dataTypeName)
  {
    $this->dataTypeName = $dataTypeName;
  }
  /** @return string */
  public function getDataTypeName()
  {
    return $this->dataTypeName;
  }
  /** @param string */
  public function setEndTimeNanos($endTimeNanos)
  {
    $this->endTimeNanos = $endTimeNanos;
  }
  /** @return string */
  public function getEndTimeNanos()
  {
    return $this->endTimeNanos;
  }
  /** @param string */
  public function setModifiedTimeMillis($modifiedTimeMillis)
  {
    $this->modifiedTimeMillis = $modifiedTimeMillis;
  }
  /** @return string */
  public function getModifiedTimeMillis()
  {
    return $this->modifiedTimeMillis;
  }
  /** @param string */
  public function setOriginDataSourceId($originDataSourceId)
  {
    $this->originDataSourceId = $originDataSourceId;
  }
  /** @return string */
  public function getOriginDataSourceId()
  {
    return $this->originDataSourceId;
  }
  /** @param string */
  public function setRawTimestampNanos($rawTimestampNanos)
  {
    $this->rawTimestampNanos = $rawTimestampNanos;
  }
  /** @return string */
  public function getRawTimestampNanos()
  {
    return $this->rawTimestampNanos;
  }
  /** @param string */
  public function setStartTimeNanos($startTimeNanos)
  {
    $this->startTimeNanos = $startTimeNanos;
  }
  /** @return string */
  public function getStartTimeNanos()
  {
    return $this->startTimeNanos;
  }
  /** @param Value[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return Value[] */
  public function getValue()
  {
    return $this->value;
  }
}

class DataSource extends \Google\Collection
{
  /** @var Application */
  public $application;
  /** @var string[] */
  public $dataQualityStandard;
  /** @var string */
  public $dataStreamId;
  /** @var string */
  public $dataStreamName;
  /** @var DataType */
  public $dataType;
  /** @var Device */
  public $device;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  protected $collection_key = 'dataQualityStandard';
  protected $applicationType = Application::class;
  protected $applicationDataType = '';
  protected $dataTypeType = DataType::class;
  protected $dataTypeDataType = '';
  protected $deviceType = Device::class;
  protected $deviceDataType = '';
  /** @param Application */
  public function setApplication(Application $application)
  {
    $this->application = $application;
  }
  /** @return Application */
  public function getApplication()
  {
    return $this->application;
  }
  /** @param string[] */
  public function setDataQualityStandard($dataQualityStandard)
  {
    $this->dataQualityStandard = $dataQualityStandard;
  }
  /** @return string[] */
  public function getDataQualityStandard()
  {
    return $this->dataQualityStandard;
  }
  /** @param string */
  public function setDataStreamId($dataStreamId)
  {
    $this->dataStreamId = $dataStreamId;
  }
  /** @return string */
  public function getDataStreamId()
  {
    return $this->dataStreamId;
  }
  /** @param string */
  public function setDataStreamName($dataStreamName)
  {
    $this->dataStreamName = $dataStreamName;
  }
  /** @return string */
  public function getDataStreamName()
  {
    return $this->dataStreamName;
  }
  /** @param DataType */
  public function setDataType(DataType $dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return DataType */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param Device */
  public function setDevice(Device $device)
  {
    $this->device = $device;
  }
  /** @return Device */
  public function getDevice()
  {
    return $this->device;
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

class DataType extends \Google\Collection
{
  /** @var DataTypeField[] */
  public $field;
  /** @var string */
  public $name;
  protected $collection_key = 'field';
  protected $fieldType = DataTypeField::class;
  protected $fieldDataType = 'array';
  /** @param DataTypeField[] */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return DataTypeField[] */
  public function getField()
  {
    return $this->field;
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

class DataTypeField extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $name;
  /** @var bool */
  public $optional;

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
  public function setOptional($optional)
  {
    $this->optional = $optional;
  }
  /** @return bool */
  public function getOptional()
  {
    return $this->optional;
  }
}

class Dataset extends \Google\Collection
{
  /** @var string */
  public $dataSourceId;
  /** @var string */
  public $maxEndTimeNs;
  /** @var string */
  public $minStartTimeNs;
  /** @var string */
  public $nextPageToken;
  /** @var DataPoint[] */
  public $point;
  protected $collection_key = 'point';
  protected $pointType = DataPoint::class;
  protected $pointDataType = 'array';
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param string */
  public function setMaxEndTimeNs($maxEndTimeNs)
  {
    $this->maxEndTimeNs = $maxEndTimeNs;
  }
  /** @return string */
  public function getMaxEndTimeNs()
  {
    return $this->maxEndTimeNs;
  }
  /** @param string */
  public function setMinStartTimeNs($minStartTimeNs)
  {
    $this->minStartTimeNs = $minStartTimeNs;
  }
  /** @return string */
  public function getMinStartTimeNs()
  {
    return $this->minStartTimeNs;
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
  /** @param DataPoint[] */
  public function setPoint($point)
  {
    $this->point = $point;
  }
  /** @return DataPoint[] */
  public function getPoint()
  {
    return $this->point;
  }
}

class Device extends \Google\Model
{
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $model;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $version;

  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
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

class ListDataPointChangesResponse extends \Google\Collection
{
  /** @var string */
  public $dataSourceId;
  /** @var DataPoint[] */
  public $deletedDataPoint;
  /** @var DataPoint[] */
  public $insertedDataPoint;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'insertedDataPoint';
  protected $deletedDataPointType = DataPoint::class;
  protected $deletedDataPointDataType = 'array';
  protected $insertedDataPointType = DataPoint::class;
  protected $insertedDataPointDataType = 'array';
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param DataPoint[] */
  public function setDeletedDataPoint($deletedDataPoint)
  {
    $this->deletedDataPoint = $deletedDataPoint;
  }
  /** @return DataPoint[] */
  public function getDeletedDataPoint()
  {
    return $this->deletedDataPoint;
  }
  /** @param DataPoint[] */
  public function setInsertedDataPoint($insertedDataPoint)
  {
    $this->insertedDataPoint = $insertedDataPoint;
  }
  /** @return DataPoint[] */
  public function getInsertedDataPoint()
  {
    return $this->insertedDataPoint;
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

class ListDataSourcesResponse extends \Google\Collection
{
  /** @var DataSource[] */
  public $dataSource;
  protected $collection_key = 'dataSource';
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = 'array';
  /** @param DataSource[] */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return DataSource[] */
  public function getDataSource()
  {
    return $this->dataSource;
  }
}

class ListSessionsResponse extends \Google\Collection
{
  /** @var Session[] */
  public $deletedSession;
  /** @var bool */
  public $hasMoreData;
  /** @var string */
  public $nextPageToken;
  /** @var Session[] */
  public $session;
  protected $collection_key = 'session';
  protected $deletedSessionType = Session::class;
  protected $deletedSessionDataType = 'array';
  protected $sessionType = Session::class;
  protected $sessionDataType = 'array';
  /** @param Session[] */
  public function setDeletedSession($deletedSession)
  {
    $this->deletedSession = $deletedSession;
  }
  /** @return Session[] */
  public function getDeletedSession()
  {
    return $this->deletedSession;
  }
  /** @param bool */
  public function setHasMoreData($hasMoreData)
  {
    $this->hasMoreData = $hasMoreData;
  }
  /** @return bool */
  public function getHasMoreData()
  {
    return $this->hasMoreData;
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
  /** @param Session[] */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return Session[] */
  public function getSession()
  {
    return $this->session;
  }
}

class MapValue extends \Google\Model
{
  public $fpVal;

  public function setFpVal($fpVal)
  {
    $this->fpVal = $fpVal;
  }
  public function getFpVal()
  {
    return $this->fpVal;
  }
}

class Session extends \Google\Model
{
  /** @var string */
  public $activeTimeMillis;
  /** @var int */
  public $activityType;
  /** @var Application */
  public $application;
  /** @var string */
  public $description;
  /** @var string */
  public $endTimeMillis;
  /** @var string */
  public $id;
  /** @var string */
  public $modifiedTimeMillis;
  /** @var string */
  public $name;
  /** @var string */
  public $startTimeMillis;
  protected $applicationType = Application::class;
  protected $applicationDataType = '';
  /** @param string */
  public function setActiveTimeMillis($activeTimeMillis)
  {
    $this->activeTimeMillis = $activeTimeMillis;
  }
  /** @return string */
  public function getActiveTimeMillis()
  {
    return $this->activeTimeMillis;
  }
  /** @param int */
  public function setActivityType($activityType)
  {
    $this->activityType = $activityType;
  }
  /** @return int */
  public function getActivityType()
  {
    return $this->activityType;
  }
  /** @param Application */
  public function setApplication(Application $application)
  {
    $this->application = $application;
  }
  /** @return Application */
  public function getApplication()
  {
    return $this->application;
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
  public function setEndTimeMillis($endTimeMillis)
  {
    $this->endTimeMillis = $endTimeMillis;
  }
  /** @return string */
  public function getEndTimeMillis()
  {
    return $this->endTimeMillis;
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
  public function setModifiedTimeMillis($modifiedTimeMillis)
  {
    $this->modifiedTimeMillis = $modifiedTimeMillis;
  }
  /** @return string */
  public function getModifiedTimeMillis()
  {
    return $this->modifiedTimeMillis;
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
  public function setStartTimeMillis($startTimeMillis)
  {
    $this->startTimeMillis = $startTimeMillis;
  }
  /** @return string */
  public function getStartTimeMillis()
  {
    return $this->startTimeMillis;
  }
}

class Value extends \Google\Collection
{
  public $fpVal;
  /** @var int */
  public $intVal;
  /** @var ValueMapValEntry[] */
  public $mapVal;
  /** @var string */
  public $stringVal;
  protected $collection_key = 'mapVal';
  protected $mapValType = ValueMapValEntry::class;
  protected $mapValDataType = 'array';
  public function setFpVal($fpVal)
  {
    $this->fpVal = $fpVal;
  }
  public function getFpVal()
  {
    return $this->fpVal;
  }
  /** @param int */
  public function setIntVal($intVal)
  {
    $this->intVal = $intVal;
  }
  /** @return int */
  public function getIntVal()
  {
    return $this->intVal;
  }
  /** @param ValueMapValEntry[] */
  public function setMapVal($mapVal)
  {
    $this->mapVal = $mapVal;
  }
  /** @return ValueMapValEntry[] */
  public function getMapVal()
  {
    return $this->mapVal;
  }
  /** @param string */
  public function setStringVal($stringVal)
  {
    $this->stringVal = $stringVal;
  }
  /** @return string */
  public function getStringVal()
  {
    return $this->stringVal;
  }
}

class ValueMapValEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var MapValue */
  public $value;
  protected $valueType = MapValue::class;
  protected $valueDataType = '';
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
  /** @param MapValue */
  public function setValue(MapValue $value)
  {
    $this->value = $value;
  }
  /** @return MapValue */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateBucket::class, 'Google_Service_Fitness_AggregateBucket');
class_alias(AggregateBy::class, 'Google_Service_Fitness_AggregateBy');
class_alias(AggregateRequest::class, 'Google_Service_Fitness_AggregateRequest');
class_alias(AggregateResponse::class, 'Google_Service_Fitness_AggregateResponse');
class_alias(Application::class, 'Google_Service_Fitness_Application');
class_alias(BucketByActivity::class, 'Google_Service_Fitness_BucketByActivity');
class_alias(BucketBySession::class, 'Google_Service_Fitness_BucketBySession');
class_alias(BucketByTime::class, 'Google_Service_Fitness_BucketByTime');
class_alias(BucketByTimePeriod::class, 'Google_Service_Fitness_BucketByTimePeriod');
class_alias(DataPoint::class, 'Google_Service_Fitness_DataPoint');
class_alias(DataSource::class, 'Google_Service_Fitness_DataSource');
class_alias(DataType::class, 'Google_Service_Fitness_DataType');
class_alias(DataTypeField::class, 'Google_Service_Fitness_DataTypeField');
class_alias(Dataset::class, 'Google_Service_Fitness_Dataset');
class_alias(Device::class, 'Google_Service_Fitness_Device');
class_alias(ListDataPointChangesResponse::class, 'Google_Service_Fitness_ListDataPointChangesResponse');
class_alias(ListDataSourcesResponse::class, 'Google_Service_Fitness_ListDataSourcesResponse');
class_alias(ListSessionsResponse::class, 'Google_Service_Fitness_ListSessionsResponse');
class_alias(MapValue::class, 'Google_Service_Fitness_MapValue');
class_alias(Session::class, 'Google_Service_Fitness_Session');
class_alias(Value::class, 'Google_Service_Fitness_Value');
class_alias(ValueMapValEntry::class, 'Google_Service_Fitness_ValueMapValEntry');
