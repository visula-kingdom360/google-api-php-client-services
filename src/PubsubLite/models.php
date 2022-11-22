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

namespace Google\Service\PubsubLite;

class CancelOperationRequest extends \Google\Model
{
}

class Capacity extends \Google\Model
{
  /** @var int */
  public $publishMibPerSec;
  /** @var int */
  public $subscribeMibPerSec;

  /** @param int */
  public function setPublishMibPerSec($publishMibPerSec)
  {
    $this->publishMibPerSec = $publishMibPerSec;
  }
  /** @return int */
  public function getPublishMibPerSec()
  {
    return $this->publishMibPerSec;
  }
  /** @param int */
  public function setSubscribeMibPerSec($subscribeMibPerSec)
  {
    $this->subscribeMibPerSec = $subscribeMibPerSec;
  }
  /** @return int */
  public function getSubscribeMibPerSec()
  {
    return $this->subscribeMibPerSec;
  }
}

class CommitCursorRequest extends \Google\Model
{
  /** @var Cursor */
  public $cursor;
  /** @var string */
  public $partition;
  protected $cursorType = Cursor::class;
  protected $cursorDataType = '';
  /** @param Cursor */
  public function setCursor(Cursor $cursor)
  {
    $this->cursor = $cursor;
  }
  /** @return Cursor */
  public function getCursor()
  {
    return $this->cursor;
  }
  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
}

class CommitCursorResponse extends \Google\Model
{
}

class ComputeHeadCursorRequest extends \Google\Model
{
  /** @var string */
  public $partition;

  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
}

class ComputeHeadCursorResponse extends \Google\Model
{
  /** @var Cursor */
  public $headCursor;
  protected $headCursorType = Cursor::class;
  protected $headCursorDataType = '';
  /** @param Cursor */
  public function setHeadCursor(Cursor $headCursor)
  {
    $this->headCursor = $headCursor;
  }
  /** @return Cursor */
  public function getHeadCursor()
  {
    return $this->headCursor;
  }
}

class ComputeMessageStatsRequest extends \Google\Model
{
  /** @var Cursor */
  public $endCursor;
  /** @var string */
  public $partition;
  /** @var Cursor */
  public $startCursor;
  protected $endCursorType = Cursor::class;
  protected $endCursorDataType = '';
  protected $startCursorType = Cursor::class;
  protected $startCursorDataType = '';
  /** @param Cursor */
  public function setEndCursor(Cursor $endCursor)
  {
    $this->endCursor = $endCursor;
  }
  /** @return Cursor */
  public function getEndCursor()
  {
    return $this->endCursor;
  }
  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
  /** @param Cursor */
  public function setStartCursor(Cursor $startCursor)
  {
    $this->startCursor = $startCursor;
  }
  /** @return Cursor */
  public function getStartCursor()
  {
    return $this->startCursor;
  }
}

class ComputeMessageStatsResponse extends \Google\Model
{
  /** @var string */
  public $messageBytes;
  /** @var string */
  public $messageCount;
  /** @var string */
  public $minimumEventTime;
  /** @var string */
  public $minimumPublishTime;

  /** @param string */
  public function setMessageBytes($messageBytes)
  {
    $this->messageBytes = $messageBytes;
  }
  /** @return string */
  public function getMessageBytes()
  {
    return $this->messageBytes;
  }
  /** @param string */
  public function setMessageCount($messageCount)
  {
    $this->messageCount = $messageCount;
  }
  /** @return string */
  public function getMessageCount()
  {
    return $this->messageCount;
  }
  /** @param string */
  public function setMinimumEventTime($minimumEventTime)
  {
    $this->minimumEventTime = $minimumEventTime;
  }
  /** @return string */
  public function getMinimumEventTime()
  {
    return $this->minimumEventTime;
  }
  /** @param string */
  public function setMinimumPublishTime($minimumPublishTime)
  {
    $this->minimumPublishTime = $minimumPublishTime;
  }
  /** @return string */
  public function getMinimumPublishTime()
  {
    return $this->minimumPublishTime;
  }
}

class ComputeTimeCursorRequest extends \Google\Model
{
  /** @var string */
  public $partition;
  /** @var TimeTarget */
  public $target;
  protected $targetType = TimeTarget::class;
  protected $targetDataType = '';
  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
  /** @param TimeTarget */
  public function setTarget(TimeTarget $target)
  {
    $this->target = $target;
  }
  /** @return TimeTarget */
  public function getTarget()
  {
    return $this->target;
  }
}

class ComputeTimeCursorResponse extends \Google\Model
{
  /** @var Cursor */
  public $cursor;
  protected $cursorType = Cursor::class;
  protected $cursorDataType = '';
  /** @param Cursor */
  public function setCursor(Cursor $cursor)
  {
    $this->cursor = $cursor;
  }
  /** @return Cursor */
  public function getCursor()
  {
    return $this->cursor;
  }
}

class Cursor extends \Google\Model
{
  /** @var string */
  public $offset;

  /** @param string */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return string */
  public function getOffset()
  {
    return $this->offset;
  }
}

class DeliveryConfig extends \Google\Model
{
  /** @var string */
  public $deliveryRequirement;

  /** @param string */
  public function setDeliveryRequirement($deliveryRequirement)
  {
    $this->deliveryRequirement = $deliveryRequirement;
  }
  /** @return string */
  public function getDeliveryRequirement()
  {
    return $this->deliveryRequirement;
  }
}

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListPartitionCursorsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PartitionCursor[] */
  public $partitionCursors;
  protected $collection_key = 'partitionCursors';
  protected $partitionCursorsType = PartitionCursor::class;
  protected $partitionCursorsDataType = 'array';
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
  /** @param PartitionCursor[] */
  public function setPartitionCursors($partitionCursors)
  {
    $this->partitionCursors = $partitionCursors;
  }
  /** @return PartitionCursor[] */
  public function getPartitionCursors()
  {
    return $this->partitionCursors;
  }
}

class ListReservationTopicsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $topics;
  protected $collection_key = 'topics';
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
  /** @param string[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return string[] */
  public function getTopics()
  {
    return $this->topics;
  }
}

class ListReservationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Reservation[] */
  public $reservations;
  protected $collection_key = 'reservations';
  protected $reservationsType = Reservation::class;
  protected $reservationsDataType = 'array';
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
  /** @param Reservation[] */
  public function setReservations($reservations)
  {
    $this->reservations = $reservations;
  }
  /** @return Reservation[] */
  public function getReservations()
  {
    return $this->reservations;
  }
}

class ListSubscriptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Subscription[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
  protected $subscriptionsType = Subscription::class;
  protected $subscriptionsDataType = 'array';
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
  /** @param Subscription[] */
  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }
  /** @return Subscription[] */
  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}

class ListTopicSubscriptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
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
  /** @param string[] */
  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }
  /** @return string[] */
  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}

class ListTopicsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Topic[] */
  public $topics;
  protected $collection_key = 'topics';
  protected $topicsType = Topic::class;
  protected $topicsDataType = 'array';
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
  /** @param Topic[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return Topic[] */
  public function getTopics()
  {
    return $this->topics;
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

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
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class PartitionConfig extends \Google\Model
{
  /** @var Capacity */
  public $capacity;
  /** @var string */
  public $count;
  /** @var int */
  public $scale;
  protected $capacityType = Capacity::class;
  protected $capacityDataType = '';
  /** @param Capacity */
  public function setCapacity(Capacity $capacity)
  {
    $this->capacity = $capacity;
  }
  /** @return Capacity */
  public function getCapacity()
  {
    return $this->capacity;
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
  /** @param int */
  public function setScale($scale)
  {
    $this->scale = $scale;
  }
  /** @return int */
  public function getScale()
  {
    return $this->scale;
  }
}

class PartitionCursor extends \Google\Model
{
  /** @var Cursor */
  public $cursor;
  /** @var string */
  public $partition;
  protected $cursorType = Cursor::class;
  protected $cursorDataType = '';
  /** @param Cursor */
  public function setCursor(Cursor $cursor)
  {
    $this->cursor = $cursor;
  }
  /** @return Cursor */
  public function getCursor()
  {
    return $this->cursor;
  }
  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
}

class PubsubliteEmpty extends \Google\Model
{
}

class Reservation extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $throughputCapacity;

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
  public function setThroughputCapacity($throughputCapacity)
  {
    $this->throughputCapacity = $throughputCapacity;
  }
  /** @return string */
  public function getThroughputCapacity()
  {
    return $this->throughputCapacity;
  }
}

class ReservationConfig extends \Google\Model
{
  /** @var string */
  public $throughputReservation;

  /** @param string */
  public function setThroughputReservation($throughputReservation)
  {
    $this->throughputReservation = $throughputReservation;
  }
  /** @return string */
  public function getThroughputReservation()
  {
    return $this->throughputReservation;
  }
}

class RetentionConfig extends \Google\Model
{
  /** @var string */
  public $perPartitionBytes;
  /** @var string */
  public $period;

  /** @param string */
  public function setPerPartitionBytes($perPartitionBytes)
  {
    $this->perPartitionBytes = $perPartitionBytes;
  }
  /** @return string */
  public function getPerPartitionBytes()
  {
    return $this->perPartitionBytes;
  }
  /** @param string */
  public function setPeriod($period)
  {
    $this->period = $period;
  }
  /** @return string */
  public function getPeriod()
  {
    return $this->period;
  }
}

class SeekSubscriptionRequest extends \Google\Model
{
  /** @var string */
  public $namedTarget;
  /** @var TimeTarget */
  public $timeTarget;
  protected $timeTargetType = TimeTarget::class;
  protected $timeTargetDataType = '';
  /** @param string */
  public function setNamedTarget($namedTarget)
  {
    $this->namedTarget = $namedTarget;
  }
  /** @return string */
  public function getNamedTarget()
  {
    return $this->namedTarget;
  }
  /** @param TimeTarget */
  public function setTimeTarget(TimeTarget $timeTarget)
  {
    $this->timeTarget = $timeTarget;
  }
  /** @return TimeTarget */
  public function getTimeTarget()
  {
    return $this->timeTarget;
  }
}

class SeekSubscriptionResponse extends \Google\Model
{
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

class Subscription extends \Google\Model
{
  /** @var DeliveryConfig */
  public $deliveryConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $topic;
  protected $deliveryConfigType = DeliveryConfig::class;
  protected $deliveryConfigDataType = '';
  /** @param DeliveryConfig */
  public function setDeliveryConfig(DeliveryConfig $deliveryConfig)
  {
    $this->deliveryConfig = $deliveryConfig;
  }
  /** @return DeliveryConfig */
  public function getDeliveryConfig()
  {
    return $this->deliveryConfig;
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

class TimeTarget extends \Google\Model
{
  /** @var string */
  public $eventTime;
  /** @var string */
  public $publishTime;

  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
}

class Topic extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var PartitionConfig */
  public $partitionConfig;
  /** @var ReservationConfig */
  public $reservationConfig;
  /** @var RetentionConfig */
  public $retentionConfig;
  protected $partitionConfigType = PartitionConfig::class;
  protected $partitionConfigDataType = '';
  protected $reservationConfigType = ReservationConfig::class;
  protected $reservationConfigDataType = '';
  protected $retentionConfigType = RetentionConfig::class;
  protected $retentionConfigDataType = '';
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
  /** @param PartitionConfig */
  public function setPartitionConfig(PartitionConfig $partitionConfig)
  {
    $this->partitionConfig = $partitionConfig;
  }
  /** @return PartitionConfig */
  public function getPartitionConfig()
  {
    return $this->partitionConfig;
  }
  /** @param ReservationConfig */
  public function setReservationConfig(ReservationConfig $reservationConfig)
  {
    $this->reservationConfig = $reservationConfig;
  }
  /** @return ReservationConfig */
  public function getReservationConfig()
  {
    return $this->reservationConfig;
  }
  /** @param RetentionConfig */
  public function setRetentionConfig(RetentionConfig $retentionConfig)
  {
    $this->retentionConfig = $retentionConfig;
  }
  /** @return RetentionConfig */
  public function getRetentionConfig()
  {
    return $this->retentionConfig;
  }
}

class TopicPartitions extends \Google\Model
{
  /** @var string */
  public $partitionCount;

  /** @param string */
  public function setPartitionCount($partitionCount)
  {
    $this->partitionCount = $partitionCount;
  }
  /** @return string */
  public function getPartitionCount()
  {
    return $this->partitionCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelOperationRequest::class, 'Google_Service_PubsubLite_CancelOperationRequest');
class_alias(Capacity::class, 'Google_Service_PubsubLite_Capacity');
class_alias(CommitCursorRequest::class, 'Google_Service_PubsubLite_CommitCursorRequest');
class_alias(CommitCursorResponse::class, 'Google_Service_PubsubLite_CommitCursorResponse');
class_alias(ComputeHeadCursorRequest::class, 'Google_Service_PubsubLite_ComputeHeadCursorRequest');
class_alias(ComputeHeadCursorResponse::class, 'Google_Service_PubsubLite_ComputeHeadCursorResponse');
class_alias(ComputeMessageStatsRequest::class, 'Google_Service_PubsubLite_ComputeMessageStatsRequest');
class_alias(ComputeMessageStatsResponse::class, 'Google_Service_PubsubLite_ComputeMessageStatsResponse');
class_alias(ComputeTimeCursorRequest::class, 'Google_Service_PubsubLite_ComputeTimeCursorRequest');
class_alias(ComputeTimeCursorResponse::class, 'Google_Service_PubsubLite_ComputeTimeCursorResponse');
class_alias(Cursor::class, 'Google_Service_PubsubLite_Cursor');
class_alias(DeliveryConfig::class, 'Google_Service_PubsubLite_DeliveryConfig');
class_alias(ListOperationsResponse::class, 'Google_Service_PubsubLite_ListOperationsResponse');
class_alias(ListPartitionCursorsResponse::class, 'Google_Service_PubsubLite_ListPartitionCursorsResponse');
class_alias(ListReservationTopicsResponse::class, 'Google_Service_PubsubLite_ListReservationTopicsResponse');
class_alias(ListReservationsResponse::class, 'Google_Service_PubsubLite_ListReservationsResponse');
class_alias(ListSubscriptionsResponse::class, 'Google_Service_PubsubLite_ListSubscriptionsResponse');
class_alias(ListTopicSubscriptionsResponse::class, 'Google_Service_PubsubLite_ListTopicSubscriptionsResponse');
class_alias(ListTopicsResponse::class, 'Google_Service_PubsubLite_ListTopicsResponse');
class_alias(Operation::class, 'Google_Service_PubsubLite_Operation');
class_alias(OperationMetadata::class, 'Google_Service_PubsubLite_OperationMetadata');
class_alias(PartitionConfig::class, 'Google_Service_PubsubLite_PartitionConfig');
class_alias(PartitionCursor::class, 'Google_Service_PubsubLite_PartitionCursor');
class_alias(PubsubliteEmpty::class, 'Google_Service_PubsubLite_PubsubliteEmpty');
class_alias(Reservation::class, 'Google_Service_PubsubLite_Reservation');
class_alias(ReservationConfig::class, 'Google_Service_PubsubLite_ReservationConfig');
class_alias(RetentionConfig::class, 'Google_Service_PubsubLite_RetentionConfig');
class_alias(SeekSubscriptionRequest::class, 'Google_Service_PubsubLite_SeekSubscriptionRequest');
class_alias(SeekSubscriptionResponse::class, 'Google_Service_PubsubLite_SeekSubscriptionResponse');
class_alias(Status::class, 'Google_Service_PubsubLite_Status');
class_alias(Subscription::class, 'Google_Service_PubsubLite_Subscription');
class_alias(TimeTarget::class, 'Google_Service_PubsubLite_TimeTarget');
class_alias(Topic::class, 'Google_Service_PubsubLite_Topic');
class_alias(TopicPartitions::class, 'Google_Service_PubsubLite_TopicPartitions');
