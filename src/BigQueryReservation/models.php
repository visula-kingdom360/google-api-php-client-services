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

namespace Google\Service\BigQueryReservation;

class Assignment extends \Google\Model
{
  /** @var string */
  public $assignee;
  /** @var string */
  public $jobType;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

  /** @param string */
  public function setAssignee($assignee)
  {
    $this->assignee = $assignee;
  }
  /** @return string */
  public function getAssignee()
  {
    return $this->assignee;
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

class BiReservation extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var TableReference[] */
  public $preferredTables;
  /** @var string */
  public $size;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'preferredTables';
  protected $preferredTablesType = TableReference::class;
  protected $preferredTablesDataType = 'array';
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
  /** @param TableReference[] */
  public function setPreferredTables($preferredTables)
  {
    $this->preferredTables = $preferredTables;
  }
  /** @return TableReference[] */
  public function getPreferredTables()
  {
    return $this->preferredTables;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class BigqueryreservationEmpty extends \Google\Model
{
}

class CapacityCommitment extends \Google\Model
{
  /** @var string */
  public $commitmentEndTime;
  /** @var string */
  public $commitmentStartTime;
  /** @var Status */
  public $failureStatus;
  /** @var bool */
  public $multiRegionAuxiliary;
  /** @var string */
  public $name;
  /** @var string */
  public $plan;
  /** @var string */
  public $renewalPlan;
  /** @var string */
  public $slotCount;
  /** @var string */
  public $state;
  protected $failureStatusType = Status::class;
  protected $failureStatusDataType = '';
  /** @param string */
  public function setCommitmentEndTime($commitmentEndTime)
  {
    $this->commitmentEndTime = $commitmentEndTime;
  }
  /** @return string */
  public function getCommitmentEndTime()
  {
    return $this->commitmentEndTime;
  }
  /** @param string */
  public function setCommitmentStartTime($commitmentStartTime)
  {
    $this->commitmentStartTime = $commitmentStartTime;
  }
  /** @return string */
  public function getCommitmentStartTime()
  {
    return $this->commitmentStartTime;
  }
  /** @param Status */
  public function setFailureStatus(Status $failureStatus)
  {
    $this->failureStatus = $failureStatus;
  }
  /** @return Status */
  public function getFailureStatus()
  {
    return $this->failureStatus;
  }
  /** @param bool */
  public function setMultiRegionAuxiliary($multiRegionAuxiliary)
  {
    $this->multiRegionAuxiliary = $multiRegionAuxiliary;
  }
  /** @return bool */
  public function getMultiRegionAuxiliary()
  {
    return $this->multiRegionAuxiliary;
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
  public function setPlan($plan)
  {
    $this->plan = $plan;
  }
  /** @return string */
  public function getPlan()
  {
    return $this->plan;
  }
  /** @param string */
  public function setRenewalPlan($renewalPlan)
  {
    $this->renewalPlan = $renewalPlan;
  }
  /** @return string */
  public function getRenewalPlan()
  {
    return $this->renewalPlan;
  }
  /** @param string */
  public function setSlotCount($slotCount)
  {
    $this->slotCount = $slotCount;
  }
  /** @return string */
  public function getSlotCount()
  {
    return $this->slotCount;
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

class ListAssignmentsResponse extends \Google\Collection
{
  /** @var Assignment[] */
  public $assignments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignments';
  protected $assignmentsType = Assignment::class;
  protected $assignmentsDataType = 'array';
  /** @param Assignment[] */
  public function setAssignments($assignments)
  {
    $this->assignments = $assignments;
  }
  /** @return Assignment[] */
  public function getAssignments()
  {
    return $this->assignments;
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

class ListCapacityCommitmentsResponse extends \Google\Collection
{
  /** @var CapacityCommitment[] */
  public $capacityCommitments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'capacityCommitments';
  protected $capacityCommitmentsType = CapacityCommitment::class;
  protected $capacityCommitmentsDataType = 'array';
  /** @param CapacityCommitment[] */
  public function setCapacityCommitments($capacityCommitments)
  {
    $this->capacityCommitments = $capacityCommitments;
  }
  /** @return CapacityCommitment[] */
  public function getCapacityCommitments()
  {
    return $this->capacityCommitments;
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

class MergeCapacityCommitmentsRequest extends \Google\Collection
{
  /** @var string[] */
  public $capacityCommitmentIds;
  protected $collection_key = 'capacityCommitmentIds';
  /** @param string[] */
  public function setCapacityCommitmentIds($capacityCommitmentIds)
  {
    $this->capacityCommitmentIds = $capacityCommitmentIds;
  }
  /** @return string[] */
  public function getCapacityCommitmentIds()
  {
    return $this->capacityCommitmentIds;
  }
}

class MoveAssignmentRequest extends \Google\Model
{
  /** @var string */
  public $destinationId;

  /** @param string */
  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  /** @return string */
  public function getDestinationId()
  {
    return $this->destinationId;
  }
}

class Reservation extends \Google\Model
{
  /** @var string */
  public $concurrency;
  /** @var string */
  public $creationTime;
  /** @var bool */
  public $ignoreIdleSlots;
  /** @var bool */
  public $multiRegionAuxiliary;
  /** @var string */
  public $name;
  /** @var string */
  public $slotCapacity;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setConcurrency($concurrency)
  {
    $this->concurrency = $concurrency;
  }
  /** @return string */
  public function getConcurrency()
  {
    return $this->concurrency;
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
  /** @param bool */
  public function setIgnoreIdleSlots($ignoreIdleSlots)
  {
    $this->ignoreIdleSlots = $ignoreIdleSlots;
  }
  /** @return bool */
  public function getIgnoreIdleSlots()
  {
    return $this->ignoreIdleSlots;
  }
  /** @param bool */
  public function setMultiRegionAuxiliary($multiRegionAuxiliary)
  {
    $this->multiRegionAuxiliary = $multiRegionAuxiliary;
  }
  /** @return bool */
  public function getMultiRegionAuxiliary()
  {
    return $this->multiRegionAuxiliary;
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
  public function setSlotCapacity($slotCapacity)
  {
    $this->slotCapacity = $slotCapacity;
  }
  /** @return string */
  public function getSlotCapacity()
  {
    return $this->slotCapacity;
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

class SearchAllAssignmentsResponse extends \Google\Collection
{
  /** @var Assignment[] */
  public $assignments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignments';
  protected $assignmentsType = Assignment::class;
  protected $assignmentsDataType = 'array';
  /** @param Assignment[] */
  public function setAssignments($assignments)
  {
    $this->assignments = $assignments;
  }
  /** @return Assignment[] */
  public function getAssignments()
  {
    return $this->assignments;
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

class SearchAssignmentsResponse extends \Google\Collection
{
  /** @var Assignment[] */
  public $assignments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignments';
  protected $assignmentsType = Assignment::class;
  protected $assignmentsDataType = 'array';
  /** @param Assignment[] */
  public function setAssignments($assignments)
  {
    $this->assignments = $assignments;
  }
  /** @return Assignment[] */
  public function getAssignments()
  {
    return $this->assignments;
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

class SplitCapacityCommitmentRequest extends \Google\Model
{
  /** @var string */
  public $slotCount;

  /** @param string */
  public function setSlotCount($slotCount)
  {
    $this->slotCount = $slotCount;
  }
  /** @return string */
  public function getSlotCount()
  {
    return $this->slotCount;
  }
}

class SplitCapacityCommitmentResponse extends \Google\Model
{
  /** @var CapacityCommitment */
  public $first;
  /** @var CapacityCommitment */
  public $second;
  protected $firstType = CapacityCommitment::class;
  protected $firstDataType = '';
  protected $secondType = CapacityCommitment::class;
  protected $secondDataType = '';
  /** @param CapacityCommitment */
  public function setFirst(CapacityCommitment $first)
  {
    $this->first = $first;
  }
  /** @return CapacityCommitment */
  public function getFirst()
  {
    return $this->first;
  }
  /** @param CapacityCommitment */
  public function setSecond(CapacityCommitment $second)
  {
    $this->second = $second;
  }
  /** @return CapacityCommitment */
  public function getSecond()
  {
    return $this->second;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Assignment::class, 'Google_Service_BigQueryReservation_Assignment');
class_alias(BiReservation::class, 'Google_Service_BigQueryReservation_BiReservation');
class_alias(BigqueryreservationEmpty::class, 'Google_Service_BigQueryReservation_BigqueryreservationEmpty');
class_alias(CapacityCommitment::class, 'Google_Service_BigQueryReservation_CapacityCommitment');
class_alias(ListAssignmentsResponse::class, 'Google_Service_BigQueryReservation_ListAssignmentsResponse');
class_alias(ListCapacityCommitmentsResponse::class, 'Google_Service_BigQueryReservation_ListCapacityCommitmentsResponse');
class_alias(ListReservationsResponse::class, 'Google_Service_BigQueryReservation_ListReservationsResponse');
class_alias(MergeCapacityCommitmentsRequest::class, 'Google_Service_BigQueryReservation_MergeCapacityCommitmentsRequest');
class_alias(MoveAssignmentRequest::class, 'Google_Service_BigQueryReservation_MoveAssignmentRequest');
class_alias(Reservation::class, 'Google_Service_BigQueryReservation_Reservation');
class_alias(SearchAllAssignmentsResponse::class, 'Google_Service_BigQueryReservation_SearchAllAssignmentsResponse');
class_alias(SearchAssignmentsResponse::class, 'Google_Service_BigQueryReservation_SearchAssignmentsResponse');
class_alias(SplitCapacityCommitmentRequest::class, 'Google_Service_BigQueryReservation_SplitCapacityCommitmentRequest');
class_alias(SplitCapacityCommitmentResponse::class, 'Google_Service_BigQueryReservation_SplitCapacityCommitmentResponse');
class_alias(Status::class, 'Google_Service_BigQueryReservation_Status');
class_alias(TableReference::class, 'Google_Service_BigQueryReservation_TableReference');
