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

namespace Google\Service\CloudTalentSolution;

class ApplicationInfo extends \Google\Collection
{
  /** @var string[] */
  public $emails;
  /** @var string */
  public $instruction;
  /** @var string[] */
  public $uris;
  protected $collection_key = 'uris';
  /** @param string[] */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /** @return string[] */
  public function getEmails()
  {
    return $this->emails;
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
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
}

class BatchCreateJobsRequest extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  protected $collection_key = 'jobs';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
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
}

class BatchCreateJobsResponse extends \Google\Collection
{
  /** @var JobResult[] */
  public $jobResults;
  protected $collection_key = 'jobResults';
  protected $jobResultsType = JobResult::class;
  protected $jobResultsDataType = 'array';
  /** @param JobResult[] */
  public function setJobResults($jobResults)
  {
    $this->jobResults = $jobResults;
  }
  /** @return JobResult[] */
  public function getJobResults()
  {
    return $this->jobResults;
  }
}

class BatchDeleteJobsRequest extends \Google\Collection
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

class BatchDeleteJobsResponse extends \Google\Collection
{
  /** @var JobResult[] */
  public $jobResults;
  protected $collection_key = 'jobResults';
  protected $jobResultsType = JobResult::class;
  protected $jobResultsDataType = 'array';
  /** @param JobResult[] */
  public function setJobResults($jobResults)
  {
    $this->jobResults = $jobResults;
  }
  /** @return JobResult[] */
  public function getJobResults()
  {
    return $this->jobResults;
  }
}

class BatchOperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var int */
  public $failureCount;
  /** @var string */
  public $state;
  /** @var string */
  public $stateDescription;
  /** @var int */
  public $successCount;
  /** @var int */
  public $totalCount;
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
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return int */
  public function getFailureCount()
  {
    return $this->failureCount;
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
  public function setStateDescription($stateDescription)
  {
    $this->stateDescription = $stateDescription;
  }
  /** @return string */
  public function getStateDescription()
  {
    return $this->stateDescription;
  }
  /** @param int */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return int */
  public function getSuccessCount()
  {
    return $this->successCount;
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

class BatchUpdateJobsRequest extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $updateMask;
  protected $collection_key = 'jobs';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
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

class BatchUpdateJobsResponse extends \Google\Collection
{
  /** @var JobResult[] */
  public $jobResults;
  protected $collection_key = 'jobResults';
  protected $jobResultsType = JobResult::class;
  protected $jobResultsDataType = 'array';
  /** @param JobResult[] */
  public function setJobResults($jobResults)
  {
    $this->jobResults = $jobResults;
  }
  /** @return JobResult[] */
  public function getJobResults()
  {
    return $this->jobResults;
  }
}

class ClientEvent extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventId;
  /** @var string */
  public $eventNotes;
  /** @var JobEvent */
  public $jobEvent;
  /** @var string */
  public $requestId;
  protected $jobEventType = JobEvent::class;
  protected $jobEventDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param string */
  public function setEventNotes($eventNotes)
  {
    $this->eventNotes = $eventNotes;
  }
  /** @return string */
  public function getEventNotes()
  {
    return $this->eventNotes;
  }
  /** @param JobEvent */
  public function setJobEvent(JobEvent $jobEvent)
  {
    $this->jobEvent = $jobEvent;
  }
  /** @return JobEvent */
  public function getJobEvent()
  {
    return $this->jobEvent;
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
}

class CommuteFilter extends \Google\Model
{
  /** @var bool */
  public $allowImpreciseAddresses;
  /** @var string */
  public $commuteMethod;
  /** @var TimeOfDay */
  public $departureTime;
  /** @var string */
  public $roadTraffic;
  /** @var LatLng */
  public $startCoordinates;
  /** @var string */
  public $travelDuration;
  protected $departureTimeType = TimeOfDay::class;
  protected $departureTimeDataType = '';
  protected $startCoordinatesType = LatLng::class;
  protected $startCoordinatesDataType = '';
  /** @param bool */
  public function setAllowImpreciseAddresses($allowImpreciseAddresses)
  {
    $this->allowImpreciseAddresses = $allowImpreciseAddresses;
  }
  /** @return bool */
  public function getAllowImpreciseAddresses()
  {
    return $this->allowImpreciseAddresses;
  }
  /** @param string */
  public function setCommuteMethod($commuteMethod)
  {
    $this->commuteMethod = $commuteMethod;
  }
  /** @return string */
  public function getCommuteMethod()
  {
    return $this->commuteMethod;
  }
  /** @param TimeOfDay */
  public function setDepartureTime(TimeOfDay $departureTime)
  {
    $this->departureTime = $departureTime;
  }
  /** @return TimeOfDay */
  public function getDepartureTime()
  {
    return $this->departureTime;
  }
  /** @param string */
  public function setRoadTraffic($roadTraffic)
  {
    $this->roadTraffic = $roadTraffic;
  }
  /** @return string */
  public function getRoadTraffic()
  {
    return $this->roadTraffic;
  }
  /** @param LatLng */
  public function setStartCoordinates(LatLng $startCoordinates)
  {
    $this->startCoordinates = $startCoordinates;
  }
  /** @return LatLng */
  public function getStartCoordinates()
  {
    return $this->startCoordinates;
  }
  /** @param string */
  public function setTravelDuration($travelDuration)
  {
    $this->travelDuration = $travelDuration;
  }
  /** @return string */
  public function getTravelDuration()
  {
    return $this->travelDuration;
  }
}

class CommuteInfo extends \Google\Model
{
  /** @var Location */
  public $jobLocation;
  /** @var string */
  public $travelDuration;
  protected $jobLocationType = Location::class;
  protected $jobLocationDataType = '';
  /** @param Location */
  public function setJobLocation(Location $jobLocation)
  {
    $this->jobLocation = $jobLocation;
  }
  /** @return Location */
  public function getJobLocation()
  {
    return $this->jobLocation;
  }
  /** @param string */
  public function setTravelDuration($travelDuration)
  {
    $this->travelDuration = $travelDuration;
  }
  /** @return string */
  public function getTravelDuration()
  {
    return $this->travelDuration;
  }
}

class Company extends \Google\Collection
{
  /** @var string */
  public $careerSiteUri;
  /** @var CompanyDerivedInfo */
  public $derivedInfo;
  /** @var string */
  public $displayName;
  /** @var string */
  public $eeoText;
  /** @var string */
  public $externalId;
  /** @var string */
  public $headquartersAddress;
  /** @var bool */
  public $hiringAgency;
  /** @var string */
  public $imageUri;
  /** @var string[] */
  public $keywordSearchableJobCustomAttributes;
  /** @var string */
  public $name;
  /** @var string */
  public $size;
  /** @var bool */
  public $suspended;
  /** @var string */
  public $websiteUri;
  protected $collection_key = 'keywordSearchableJobCustomAttributes';
  protected $derivedInfoType = CompanyDerivedInfo::class;
  protected $derivedInfoDataType = '';
  /** @param string */
  public function setCareerSiteUri($careerSiteUri)
  {
    $this->careerSiteUri = $careerSiteUri;
  }
  /** @return string */
  public function getCareerSiteUri()
  {
    return $this->careerSiteUri;
  }
  /** @param CompanyDerivedInfo */
  public function setDerivedInfo(CompanyDerivedInfo $derivedInfo)
  {
    $this->derivedInfo = $derivedInfo;
  }
  /** @return CompanyDerivedInfo */
  public function getDerivedInfo()
  {
    return $this->derivedInfo;
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
  public function setEeoText($eeoText)
  {
    $this->eeoText = $eeoText;
  }
  /** @return string */
  public function getEeoText()
  {
    return $this->eeoText;
  }
  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
  }
  /** @param string */
  public function setHeadquartersAddress($headquartersAddress)
  {
    $this->headquartersAddress = $headquartersAddress;
  }
  /** @return string */
  public function getHeadquartersAddress()
  {
    return $this->headquartersAddress;
  }
  /** @param bool */
  public function setHiringAgency($hiringAgency)
  {
    $this->hiringAgency = $hiringAgency;
  }
  /** @return bool */
  public function getHiringAgency()
  {
    return $this->hiringAgency;
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
  /** @param string[] */
  public function setKeywordSearchableJobCustomAttributes($keywordSearchableJobCustomAttributes)
  {
    $this->keywordSearchableJobCustomAttributes = $keywordSearchableJobCustomAttributes;
  }
  /** @return string[] */
  public function getKeywordSearchableJobCustomAttributes()
  {
    return $this->keywordSearchableJobCustomAttributes;
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
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
  /** @param bool */
  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }
  /** @return bool */
  public function getSuspended()
  {
    return $this->suspended;
  }
  /** @param string */
  public function setWebsiteUri($websiteUri)
  {
    $this->websiteUri = $websiteUri;
  }
  /** @return string */
  public function getWebsiteUri()
  {
    return $this->websiteUri;
  }
}

class CompanyDerivedInfo extends \Google\Model
{
  /** @var Location */
  public $headquartersLocation;
  protected $headquartersLocationType = Location::class;
  protected $headquartersLocationDataType = '';
  /** @param Location */
  public function setHeadquartersLocation(Location $headquartersLocation)
  {
    $this->headquartersLocation = $headquartersLocation;
  }
  /** @return Location */
  public function getHeadquartersLocation()
  {
    return $this->headquartersLocation;
  }
}

class CompensationEntry extends \Google\Model
{
  /** @var Money */
  public $amount;
  /** @var string */
  public $description;
  public $expectedUnitsPerYear;
  /** @var CompensationRange */
  public $range;
  /** @var string */
  public $type;
  /** @var string */
  public $unit;
  protected $amountType = Money::class;
  protected $amountDataType = '';
  protected $rangeType = CompensationRange::class;
  protected $rangeDataType = '';
  /** @param Money */
  public function setAmount(Money $amount)
  {
    $this->amount = $amount;
  }
  /** @return Money */
  public function getAmount()
  {
    return $this->amount;
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
  public function setExpectedUnitsPerYear($expectedUnitsPerYear)
  {
    $this->expectedUnitsPerYear = $expectedUnitsPerYear;
  }
  public function getExpectedUnitsPerYear()
  {
    return $this->expectedUnitsPerYear;
  }
  /** @param CompensationRange */
  public function setRange(CompensationRange $range)
  {
    $this->range = $range;
  }
  /** @return CompensationRange */
  public function getRange()
  {
    return $this->range;
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

class CompensationFilter extends \Google\Collection
{
  /** @var bool */
  public $includeJobsWithUnspecifiedCompensationRange;
  /** @var CompensationRange */
  public $range;
  /** @var string */
  public $type;
  /** @var string[] */
  public $units;
  protected $collection_key = 'units';
  protected $rangeType = CompensationRange::class;
  protected $rangeDataType = '';
  /** @param bool */
  public function setIncludeJobsWithUnspecifiedCompensationRange($includeJobsWithUnspecifiedCompensationRange)
  {
    $this->includeJobsWithUnspecifiedCompensationRange = $includeJobsWithUnspecifiedCompensationRange;
  }
  /** @return bool */
  public function getIncludeJobsWithUnspecifiedCompensationRange()
  {
    return $this->includeJobsWithUnspecifiedCompensationRange;
  }
  /** @param CompensationRange */
  public function setRange(CompensationRange $range)
  {
    $this->range = $range;
  }
  /** @return CompensationRange */
  public function getRange()
  {
    return $this->range;
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
  /** @param string[] */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string[] */
  public function getUnits()
  {
    return $this->units;
  }
}

class CompensationInfo extends \Google\Collection
{
  /** @var CompensationRange */
  public $annualizedBaseCompensationRange;
  /** @var CompensationRange */
  public $annualizedTotalCompensationRange;
  /** @var CompensationEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $annualizedBaseCompensationRangeType = CompensationRange::class;
  protected $annualizedBaseCompensationRangeDataType = '';
  protected $annualizedTotalCompensationRangeType = CompensationRange::class;
  protected $annualizedTotalCompensationRangeDataType = '';
  protected $entriesType = CompensationEntry::class;
  protected $entriesDataType = 'array';
  /** @param CompensationRange */
  public function setAnnualizedBaseCompensationRange(CompensationRange $annualizedBaseCompensationRange)
  {
    $this->annualizedBaseCompensationRange = $annualizedBaseCompensationRange;
  }
  /** @return CompensationRange */
  public function getAnnualizedBaseCompensationRange()
  {
    return $this->annualizedBaseCompensationRange;
  }
  /** @param CompensationRange */
  public function setAnnualizedTotalCompensationRange(CompensationRange $annualizedTotalCompensationRange)
  {
    $this->annualizedTotalCompensationRange = $annualizedTotalCompensationRange;
  }
  /** @return CompensationRange */
  public function getAnnualizedTotalCompensationRange()
  {
    return $this->annualizedTotalCompensationRange;
  }
  /** @param CompensationEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return CompensationEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class CompensationRange extends \Google\Model
{
  /** @var Money */
  public $maxCompensation;
  /** @var Money */
  public $minCompensation;
  protected $maxCompensationType = Money::class;
  protected $maxCompensationDataType = '';
  protected $minCompensationType = Money::class;
  protected $minCompensationDataType = '';
  /** @param Money */
  public function setMaxCompensation(Money $maxCompensation)
  {
    $this->maxCompensation = $maxCompensation;
  }
  /** @return Money */
  public function getMaxCompensation()
  {
    return $this->maxCompensation;
  }
  /** @param Money */
  public function setMinCompensation(Money $minCompensation)
  {
    $this->minCompensation = $minCompensation;
  }
  /** @return Money */
  public function getMinCompensation()
  {
    return $this->minCompensation;
  }
}

class CompleteQueryResponse extends \Google\Collection
{
  /** @var CompletionResult[] */
  public $completionResults;
  /** @var ResponseMetadata */
  public $metadata;
  protected $collection_key = 'completionResults';
  protected $completionResultsType = CompletionResult::class;
  protected $completionResultsDataType = 'array';
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';
  /** @param CompletionResult[] */
  public function setCompletionResults($completionResults)
  {
    $this->completionResults = $completionResults;
  }
  /** @return CompletionResult[] */
  public function getCompletionResults()
  {
    return $this->completionResults;
  }
  /** @param ResponseMetadata */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class CompletionResult extends \Google\Model
{
  /** @var string */
  public $imageUri;
  /** @var string */
  public $suggestion;
  /** @var string */
  public $type;

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
  public function setSuggestion($suggestion)
  {
    $this->suggestion = $suggestion;
  }
  /** @return string */
  public function getSuggestion()
  {
    return $this->suggestion;
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

class CustomAttribute extends \Google\Collection
{
  /** @var bool */
  public $filterable;
  /** @var bool */
  public $keywordSearchable;
  /** @var string[] */
  public $longValues;
  /** @var string[] */
  public $stringValues;
  protected $collection_key = 'stringValues';
  /** @param bool */
  public function setFilterable($filterable)
  {
    $this->filterable = $filterable;
  }
  /** @return bool */
  public function getFilterable()
  {
    return $this->filterable;
  }
  /** @param bool */
  public function setKeywordSearchable($keywordSearchable)
  {
    $this->keywordSearchable = $keywordSearchable;
  }
  /** @return bool */
  public function getKeywordSearchable()
  {
    return $this->keywordSearchable;
  }
  /** @param string[] */
  public function setLongValues($longValues)
  {
    $this->longValues = $longValues;
  }
  /** @return string[] */
  public function getLongValues()
  {
    return $this->longValues;
  }
  /** @param string[] */
  public function setStringValues($stringValues)
  {
    $this->stringValues = $stringValues;
  }
  /** @return string[] */
  public function getStringValues()
  {
    return $this->stringValues;
  }
}

class CustomRankingInfo extends \Google\Model
{
  /** @var string */
  public $importanceLevel;
  /** @var string */
  public $rankingExpression;

  /** @param string */
  public function setImportanceLevel($importanceLevel)
  {
    $this->importanceLevel = $importanceLevel;
  }
  /** @return string */
  public function getImportanceLevel()
  {
    return $this->importanceLevel;
  }
  /** @param string */
  public function setRankingExpression($rankingExpression)
  {
    $this->rankingExpression = $rankingExpression;
  }
  /** @return string */
  public function getRankingExpression()
  {
    return $this->rankingExpression;
  }
}

class DeviceInfo extends \Google\Model
{
  /** @var string */
  public $deviceType;
  /** @var string */
  public $id;

  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
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
}

class HistogramQuery extends \Google\Model
{
  /** @var string */
  public $histogramQuery;

  /** @param string */
  public function setHistogramQuery($histogramQuery)
  {
    $this->histogramQuery = $histogramQuery;
  }
  /** @return string */
  public function getHistogramQuery()
  {
    return $this->histogramQuery;
  }
}

class HistogramQueryResult extends \Google\Model
{
  /** @var string[] */
  public $histogram;
  /** @var string */
  public $histogramQuery;

  /** @param string[] */
  public function setHistogram($histogram)
  {
    $this->histogram = $histogram;
  }
  /** @return string[] */
  public function getHistogram()
  {
    return $this->histogram;
  }
  /** @param string */
  public function setHistogramQuery($histogramQuery)
  {
    $this->histogramQuery = $histogramQuery;
  }
  /** @return string */
  public function getHistogramQuery()
  {
    return $this->histogramQuery;
  }
}

class Job extends \Google\Collection
{
  /** @var string[] */
  public $addresses;
  /** @var ApplicationInfo */
  public $applicationInfo;
  /** @var string */
  public $company;
  /** @var string */
  public $companyDisplayName;
  /** @var CompensationInfo */
  public $compensationInfo;
  /** @var CustomAttribute[] */
  public $customAttributes;
  /** @var string[] */
  public $degreeTypes;
  /** @var string */
  public $department;
  /** @var JobDerivedInfo */
  public $derivedInfo;
  /** @var string */
  public $description;
  /** @var string[] */
  public $employmentTypes;
  /** @var string */
  public $incentives;
  /** @var string[] */
  public $jobBenefits;
  /** @var string */
  public $jobEndTime;
  /** @var string */
  public $jobLevel;
  /** @var string */
  public $jobStartTime;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string */
  public $postingCreateTime;
  /** @var string */
  public $postingExpireTime;
  /** @var string */
  public $postingPublishTime;
  /** @var string */
  public $postingRegion;
  /** @var string */
  public $postingUpdateTime;
  /** @var ProcessingOptions */
  public $processingOptions;
  /** @var int */
  public $promotionValue;
  /** @var string */
  public $qualifications;
  /** @var string */
  public $requisitionId;
  /** @var string */
  public $responsibilities;
  /** @var string */
  public $title;
  /** @var string */
  public $visibility;
  protected $collection_key = 'jobBenefits';
  protected $applicationInfoType = ApplicationInfo::class;
  protected $applicationInfoDataType = '';
  protected $compensationInfoType = CompensationInfo::class;
  protected $compensationInfoDataType = '';
  protected $customAttributesType = CustomAttribute::class;
  protected $customAttributesDataType = 'map';
  protected $derivedInfoType = JobDerivedInfo::class;
  protected $derivedInfoDataType = '';
  protected $processingOptionsType = ProcessingOptions::class;
  protected $processingOptionsDataType = '';
  /** @param string[] */
  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }
  /** @return string[] */
  public function getAddresses()
  {
    return $this->addresses;
  }
  /** @param ApplicationInfo */
  public function setApplicationInfo(ApplicationInfo $applicationInfo)
  {
    $this->applicationInfo = $applicationInfo;
  }
  /** @return ApplicationInfo */
  public function getApplicationInfo()
  {
    return $this->applicationInfo;
  }
  /** @param string */
  public function setCompany($company)
  {
    $this->company = $company;
  }
  /** @return string */
  public function getCompany()
  {
    return $this->company;
  }
  /** @param string */
  public function setCompanyDisplayName($companyDisplayName)
  {
    $this->companyDisplayName = $companyDisplayName;
  }
  /** @return string */
  public function getCompanyDisplayName()
  {
    return $this->companyDisplayName;
  }
  /** @param CompensationInfo */
  public function setCompensationInfo(CompensationInfo $compensationInfo)
  {
    $this->compensationInfo = $compensationInfo;
  }
  /** @return CompensationInfo */
  public function getCompensationInfo()
  {
    return $this->compensationInfo;
  }
  /** @param CustomAttribute[] */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return CustomAttribute[] */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /** @param string[] */
  public function setDegreeTypes($degreeTypes)
  {
    $this->degreeTypes = $degreeTypes;
  }
  /** @return string[] */
  public function getDegreeTypes()
  {
    return $this->degreeTypes;
  }
  /** @param string */
  public function setDepartment($department)
  {
    $this->department = $department;
  }
  /** @return string */
  public function getDepartment()
  {
    return $this->department;
  }
  /** @param JobDerivedInfo */
  public function setDerivedInfo(JobDerivedInfo $derivedInfo)
  {
    $this->derivedInfo = $derivedInfo;
  }
  /** @return JobDerivedInfo */
  public function getDerivedInfo()
  {
    return $this->derivedInfo;
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
  /** @param string[] */
  public function setEmploymentTypes($employmentTypes)
  {
    $this->employmentTypes = $employmentTypes;
  }
  /** @return string[] */
  public function getEmploymentTypes()
  {
    return $this->employmentTypes;
  }
  /** @param string */
  public function setIncentives($incentives)
  {
    $this->incentives = $incentives;
  }
  /** @return string */
  public function getIncentives()
  {
    return $this->incentives;
  }
  /** @param string[] */
  public function setJobBenefits($jobBenefits)
  {
    $this->jobBenefits = $jobBenefits;
  }
  /** @return string[] */
  public function getJobBenefits()
  {
    return $this->jobBenefits;
  }
  /** @param string */
  public function setJobEndTime($jobEndTime)
  {
    $this->jobEndTime = $jobEndTime;
  }
  /** @return string */
  public function getJobEndTime()
  {
    return $this->jobEndTime;
  }
  /** @param string */
  public function setJobLevel($jobLevel)
  {
    $this->jobLevel = $jobLevel;
  }
  /** @return string */
  public function getJobLevel()
  {
    return $this->jobLevel;
  }
  /** @param string */
  public function setJobStartTime($jobStartTime)
  {
    $this->jobStartTime = $jobStartTime;
  }
  /** @return string */
  public function getJobStartTime()
  {
    return $this->jobStartTime;
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
  public function setPostingCreateTime($postingCreateTime)
  {
    $this->postingCreateTime = $postingCreateTime;
  }
  /** @return string */
  public function getPostingCreateTime()
  {
    return $this->postingCreateTime;
  }
  /** @param string */
  public function setPostingExpireTime($postingExpireTime)
  {
    $this->postingExpireTime = $postingExpireTime;
  }
  /** @return string */
  public function getPostingExpireTime()
  {
    return $this->postingExpireTime;
  }
  /** @param string */
  public function setPostingPublishTime($postingPublishTime)
  {
    $this->postingPublishTime = $postingPublishTime;
  }
  /** @return string */
  public function getPostingPublishTime()
  {
    return $this->postingPublishTime;
  }
  /** @param string */
  public function setPostingRegion($postingRegion)
  {
    $this->postingRegion = $postingRegion;
  }
  /** @return string */
  public function getPostingRegion()
  {
    return $this->postingRegion;
  }
  /** @param string */
  public function setPostingUpdateTime($postingUpdateTime)
  {
    $this->postingUpdateTime = $postingUpdateTime;
  }
  /** @return string */
  public function getPostingUpdateTime()
  {
    return $this->postingUpdateTime;
  }
  /** @param ProcessingOptions */
  public function setProcessingOptions(ProcessingOptions $processingOptions)
  {
    $this->processingOptions = $processingOptions;
  }
  /** @return ProcessingOptions */
  public function getProcessingOptions()
  {
    return $this->processingOptions;
  }
  /** @param int */
  public function setPromotionValue($promotionValue)
  {
    $this->promotionValue = $promotionValue;
  }
  /** @return int */
  public function getPromotionValue()
  {
    return $this->promotionValue;
  }
  /** @param string */
  public function setQualifications($qualifications)
  {
    $this->qualifications = $qualifications;
  }
  /** @return string */
  public function getQualifications()
  {
    return $this->qualifications;
  }
  /** @param string */
  public function setRequisitionId($requisitionId)
  {
    $this->requisitionId = $requisitionId;
  }
  /** @return string */
  public function getRequisitionId()
  {
    return $this->requisitionId;
  }
  /** @param string */
  public function setResponsibilities($responsibilities)
  {
    $this->responsibilities = $responsibilities;
  }
  /** @return string */
  public function getResponsibilities()
  {
    return $this->responsibilities;
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
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class JobDerivedInfo extends \Google\Collection
{
  /** @var string[] */
  public $jobCategories;
  /** @var Location[] */
  public $locations;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  /** @param string[] */
  public function setJobCategories($jobCategories)
  {
    $this->jobCategories = $jobCategories;
  }
  /** @return string[] */
  public function getJobCategories()
  {
    return $this->jobCategories;
  }
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
  public function getLocations()
  {
    return $this->locations;
  }
}

class JobEvent extends \Google\Collection
{
  /** @var string[] */
  public $jobs;
  /** @var string */
  public $type;
  protected $collection_key = 'jobs';
  /** @param string[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return string[] */
  public function getJobs()
  {
    return $this->jobs;
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

class JobQuery extends \Google\Collection
{
  /** @var CommuteFilter */
  public $commuteFilter;
  /** @var string[] */
  public $companies;
  /** @var string[] */
  public $companyDisplayNames;
  /** @var CompensationFilter */
  public $compensationFilter;
  /** @var string */
  public $customAttributeFilter;
  /** @var bool */
  public $disableSpellCheck;
  /** @var string[] */
  public $employmentTypes;
  /** @var string[] */
  public $excludedJobs;
  /** @var string[] */
  public $jobCategories;
  /** @var string[] */
  public $languageCodes;
  /** @var LocationFilter[] */
  public $locationFilters;
  /** @var TimestampRange */
  public $publishTimeRange;
  /** @var string */
  public $query;
  /** @var string */
  public $queryLanguageCode;
  protected $collection_key = 'locationFilters';
  protected $commuteFilterType = CommuteFilter::class;
  protected $commuteFilterDataType = '';
  protected $compensationFilterType = CompensationFilter::class;
  protected $compensationFilterDataType = '';
  protected $locationFiltersType = LocationFilter::class;
  protected $locationFiltersDataType = 'array';
  protected $publishTimeRangeType = TimestampRange::class;
  protected $publishTimeRangeDataType = '';
  /** @param CommuteFilter */
  public function setCommuteFilter(CommuteFilter $commuteFilter)
  {
    $this->commuteFilter = $commuteFilter;
  }
  /** @return CommuteFilter */
  public function getCommuteFilter()
  {
    return $this->commuteFilter;
  }
  /** @param string[] */
  public function setCompanies($companies)
  {
    $this->companies = $companies;
  }
  /** @return string[] */
  public function getCompanies()
  {
    return $this->companies;
  }
  /** @param string[] */
  public function setCompanyDisplayNames($companyDisplayNames)
  {
    $this->companyDisplayNames = $companyDisplayNames;
  }
  /** @return string[] */
  public function getCompanyDisplayNames()
  {
    return $this->companyDisplayNames;
  }
  /** @param CompensationFilter */
  public function setCompensationFilter(CompensationFilter $compensationFilter)
  {
    $this->compensationFilter = $compensationFilter;
  }
  /** @return CompensationFilter */
  public function getCompensationFilter()
  {
    return $this->compensationFilter;
  }
  /** @param string */
  public function setCustomAttributeFilter($customAttributeFilter)
  {
    $this->customAttributeFilter = $customAttributeFilter;
  }
  /** @return string */
  public function getCustomAttributeFilter()
  {
    return $this->customAttributeFilter;
  }
  /** @param bool */
  public function setDisableSpellCheck($disableSpellCheck)
  {
    $this->disableSpellCheck = $disableSpellCheck;
  }
  /** @return bool */
  public function getDisableSpellCheck()
  {
    return $this->disableSpellCheck;
  }
  /** @param string[] */
  public function setEmploymentTypes($employmentTypes)
  {
    $this->employmentTypes = $employmentTypes;
  }
  /** @return string[] */
  public function getEmploymentTypes()
  {
    return $this->employmentTypes;
  }
  /** @param string[] */
  public function setExcludedJobs($excludedJobs)
  {
    $this->excludedJobs = $excludedJobs;
  }
  /** @return string[] */
  public function getExcludedJobs()
  {
    return $this->excludedJobs;
  }
  /** @param string[] */
  public function setJobCategories($jobCategories)
  {
    $this->jobCategories = $jobCategories;
  }
  /** @return string[] */
  public function getJobCategories()
  {
    return $this->jobCategories;
  }
  /** @param string[] */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /** @return string[] */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }
  /** @param LocationFilter[] */
  public function setLocationFilters($locationFilters)
  {
    $this->locationFilters = $locationFilters;
  }
  /** @return LocationFilter[] */
  public function getLocationFilters()
  {
    return $this->locationFilters;
  }
  /** @param TimestampRange */
  public function setPublishTimeRange(TimestampRange $publishTimeRange)
  {
    $this->publishTimeRange = $publishTimeRange;
  }
  /** @return TimestampRange */
  public function getPublishTimeRange()
  {
    return $this->publishTimeRange;
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
  public function setQueryLanguageCode($queryLanguageCode)
  {
    $this->queryLanguageCode = $queryLanguageCode;
  }
  /** @return string */
  public function getQueryLanguageCode()
  {
    return $this->queryLanguageCode;
  }
}

class JobResult extends \Google\Model
{
  /** @var Job */
  public $job;
  /** @var Status */
  public $status;
  protected $jobType = Job::class;
  protected $jobDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
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

class JobsEmpty extends \Google\Model
{
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

class ListCompaniesResponse extends \Google\Collection
{
  /** @var Company[] */
  public $companies;
  /** @var ResponseMetadata */
  public $metadata;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'companies';
  protected $companiesType = Company::class;
  protected $companiesDataType = 'array';
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';
  /** @param Company[] */
  public function setCompanies($companies)
  {
    $this->companies = $companies;
  }
  /** @return Company[] */
  public function getCompanies()
  {
    return $this->companies;
  }
  /** @param ResponseMetadata */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @var Job[] */
  public $jobs;
  /** @var ResponseMetadata */
  public $metadata;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';
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
  /** @param ResponseMetadata */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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

class ListTenantsResponse extends \Google\Collection
{
  /** @var ResponseMetadata */
  public $metadata;
  /** @var string */
  public $nextPageToken;
  /** @var Tenant[] */
  public $tenants;
  protected $collection_key = 'tenants';
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';
  protected $tenantsType = Tenant::class;
  protected $tenantsDataType = 'array';
  /** @param ResponseMetadata */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @param Tenant[] */
  public function setTenants($tenants)
  {
    $this->tenants = $tenants;
  }
  /** @return Tenant[] */
  public function getTenants()
  {
    return $this->tenants;
  }
}

class Location extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  /** @var string */
  public $locationType;
  /** @var PostalAddress */
  public $postalAddress;
  public $radiusMiles;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  protected $postalAddressType = PostalAddress::class;
  protected $postalAddressDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
  /** @param string */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /** @param PostalAddress */
  public function setPostalAddress(PostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  /** @return PostalAddress */
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
  public function setRadiusMiles($radiusMiles)
  {
    $this->radiusMiles = $radiusMiles;
  }
  public function getRadiusMiles()
  {
    return $this->radiusMiles;
  }
}

class LocationFilter extends \Google\Model
{
  /** @var string */
  public $address;
  public $distanceInMiles;
  /** @var LatLng */
  public $latLng;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $telecommutePreference;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  public function setDistanceInMiles($distanceInMiles)
  {
    $this->distanceInMiles = $distanceInMiles;
  }
  public function getDistanceInMiles()
  {
    return $this->distanceInMiles;
  }
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
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
  /** @param string */
  public function setTelecommutePreference($telecommutePreference)
  {
    $this->telecommutePreference = $telecommutePreference;
  }
  /** @return string */
  public function getTelecommutePreference()
  {
    return $this->telecommutePreference;
  }
}

class MatchingJob extends \Google\Model
{
  /** @var CommuteInfo */
  public $commuteInfo;
  /** @var Job */
  public $job;
  /** @var string */
  public $jobSummary;
  /** @var string */
  public $jobTitleSnippet;
  /** @var string */
  public $searchTextSnippet;
  protected $commuteInfoType = CommuteInfo::class;
  protected $commuteInfoDataType = '';
  protected $jobType = Job::class;
  protected $jobDataType = '';
  /** @param CommuteInfo */
  public function setCommuteInfo(CommuteInfo $commuteInfo)
  {
    $this->commuteInfo = $commuteInfo;
  }
  /** @return CommuteInfo */
  public function getCommuteInfo()
  {
    return $this->commuteInfo;
  }
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
  public function setJobSummary($jobSummary)
  {
    $this->jobSummary = $jobSummary;
  }
  /** @return string */
  public function getJobSummary()
  {
    return $this->jobSummary;
  }
  /** @param string */
  public function setJobTitleSnippet($jobTitleSnippet)
  {
    $this->jobTitleSnippet = $jobTitleSnippet;
  }
  /** @return string */
  public function getJobTitleSnippet()
  {
    return $this->jobTitleSnippet;
  }
  /** @param string */
  public function setSearchTextSnippet($searchTextSnippet)
  {
    $this->searchTextSnippet = $searchTextSnippet;
  }
  /** @return string */
  public function getSearchTextSnippet()
  {
    return $this->searchTextSnippet;
  }
}

class MendelDebugInput extends \Google\Model
{
  /** @var NamespacedDebugInput[] */
  public $namespacedDebugInput;
  protected $namespacedDebugInputType = NamespacedDebugInput::class;
  protected $namespacedDebugInputDataType = 'map';
  /** @param NamespacedDebugInput[] */
  public function setNamespacedDebugInput($namespacedDebugInput)
  {
    $this->namespacedDebugInput = $namespacedDebugInput;
  }
  /** @return NamespacedDebugInput[] */
  public function getNamespacedDebugInput()
  {
    return $this->namespacedDebugInput;
  }
}

class Money extends \Google\Model
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

class NamespacedDebugInput extends \Google\Collection
{
  /** @var string[] */
  public $absolutelyForcedExpNames;
  /** @var string[] */
  public $absolutelyForcedExpTags;
  /** @var int[] */
  public $absolutelyForcedExps;
  /** @var string[] */
  public $conditionallyForcedExpNames;
  /** @var string[] */
  public $conditionallyForcedExpTags;
  /** @var int[] */
  public $conditionallyForcedExps;
  /** @var bool */
  public $disableAutomaticEnrollmentSelection;
  /** @var string[] */
  public $disableExpNames;
  /** @var string[] */
  public $disableExpTags;
  /** @var int[] */
  public $disableExps;
  /** @var bool */
  public $disableManualEnrollmentSelection;
  /** @var bool */
  public $disableOrganicSelection;
  /** @var string[] */
  public $forcedFlags;
  /** @var bool[] */
  public $forcedRollouts;
  /** @var string */
  public $testingMode;
  protected $collection_key = 'disableExps';
  /** @param string[] */
  public function setAbsolutelyForcedExpNames($absolutelyForcedExpNames)
  {
    $this->absolutelyForcedExpNames = $absolutelyForcedExpNames;
  }
  /** @return string[] */
  public function getAbsolutelyForcedExpNames()
  {
    return $this->absolutelyForcedExpNames;
  }
  /** @param string[] */
  public function setAbsolutelyForcedExpTags($absolutelyForcedExpTags)
  {
    $this->absolutelyForcedExpTags = $absolutelyForcedExpTags;
  }
  /** @return string[] */
  public function getAbsolutelyForcedExpTags()
  {
    return $this->absolutelyForcedExpTags;
  }
  /** @param int[] */
  public function setAbsolutelyForcedExps($absolutelyForcedExps)
  {
    $this->absolutelyForcedExps = $absolutelyForcedExps;
  }
  /** @return int[] */
  public function getAbsolutelyForcedExps()
  {
    return $this->absolutelyForcedExps;
  }
  /** @param string[] */
  public function setConditionallyForcedExpNames($conditionallyForcedExpNames)
  {
    $this->conditionallyForcedExpNames = $conditionallyForcedExpNames;
  }
  /** @return string[] */
  public function getConditionallyForcedExpNames()
  {
    return $this->conditionallyForcedExpNames;
  }
  /** @param string[] */
  public function setConditionallyForcedExpTags($conditionallyForcedExpTags)
  {
    $this->conditionallyForcedExpTags = $conditionallyForcedExpTags;
  }
  /** @return string[] */
  public function getConditionallyForcedExpTags()
  {
    return $this->conditionallyForcedExpTags;
  }
  /** @param int[] */
  public function setConditionallyForcedExps($conditionallyForcedExps)
  {
    $this->conditionallyForcedExps = $conditionallyForcedExps;
  }
  /** @return int[] */
  public function getConditionallyForcedExps()
  {
    return $this->conditionallyForcedExps;
  }
  /** @param bool */
  public function setDisableAutomaticEnrollmentSelection($disableAutomaticEnrollmentSelection)
  {
    $this->disableAutomaticEnrollmentSelection = $disableAutomaticEnrollmentSelection;
  }
  /** @return bool */
  public function getDisableAutomaticEnrollmentSelection()
  {
    return $this->disableAutomaticEnrollmentSelection;
  }
  /** @param string[] */
  public function setDisableExpNames($disableExpNames)
  {
    $this->disableExpNames = $disableExpNames;
  }
  /** @return string[] */
  public function getDisableExpNames()
  {
    return $this->disableExpNames;
  }
  /** @param string[] */
  public function setDisableExpTags($disableExpTags)
  {
    $this->disableExpTags = $disableExpTags;
  }
  /** @return string[] */
  public function getDisableExpTags()
  {
    return $this->disableExpTags;
  }
  /** @param int[] */
  public function setDisableExps($disableExps)
  {
    $this->disableExps = $disableExps;
  }
  /** @return int[] */
  public function getDisableExps()
  {
    return $this->disableExps;
  }
  /** @param bool */
  public function setDisableManualEnrollmentSelection($disableManualEnrollmentSelection)
  {
    $this->disableManualEnrollmentSelection = $disableManualEnrollmentSelection;
  }
  /** @return bool */
  public function getDisableManualEnrollmentSelection()
  {
    return $this->disableManualEnrollmentSelection;
  }
  /** @param bool */
  public function setDisableOrganicSelection($disableOrganicSelection)
  {
    $this->disableOrganicSelection = $disableOrganicSelection;
  }
  /** @return bool */
  public function getDisableOrganicSelection()
  {
    return $this->disableOrganicSelection;
  }
  /** @param string[] */
  public function setForcedFlags($forcedFlags)
  {
    $this->forcedFlags = $forcedFlags;
  }
  /** @return string[] */
  public function getForcedFlags()
  {
    return $this->forcedFlags;
  }
  /** @param bool[] */
  public function setForcedRollouts($forcedRollouts)
  {
    $this->forcedRollouts = $forcedRollouts;
  }
  /** @return bool[] */
  public function getForcedRollouts()
  {
    return $this->forcedRollouts;
  }
  /** @param string */
  public function setTestingMode($testingMode)
  {
    $this->testingMode = $testingMode;
  }
  /** @return string */
  public function getTestingMode()
  {
    return $this->testingMode;
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

class PostalAddress extends \Google\Collection
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

class ProcessingOptions extends \Google\Model
{
  /** @var bool */
  public $disableStreetAddressResolution;
  /** @var string */
  public $htmlSanitization;

  /** @param bool */
  public function setDisableStreetAddressResolution($disableStreetAddressResolution)
  {
    $this->disableStreetAddressResolution = $disableStreetAddressResolution;
  }
  /** @return bool */
  public function getDisableStreetAddressResolution()
  {
    return $this->disableStreetAddressResolution;
  }
  /** @param string */
  public function setHtmlSanitization($htmlSanitization)
  {
    $this->htmlSanitization = $htmlSanitization;
  }
  /** @return string */
  public function getHtmlSanitization()
  {
    return $this->htmlSanitization;
  }
}

class RequestMetadata extends \Google\Model
{
  /** @var bool */
  public $allowMissingIds;
  /** @var DeviceInfo */
  public $deviceInfo;
  /** @var string */
  public $domain;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $userId;
  protected $deviceInfoType = DeviceInfo::class;
  protected $deviceInfoDataType = '';
  /** @param bool */
  public function setAllowMissingIds($allowMissingIds)
  {
    $this->allowMissingIds = $allowMissingIds;
  }
  /** @return bool */
  public function getAllowMissingIds()
  {
    return $this->allowMissingIds;
  }
  /** @param DeviceInfo */
  public function setDeviceInfo(DeviceInfo $deviceInfo)
  {
    $this->deviceInfo = $deviceInfo;
  }
  /** @return DeviceInfo */
  public function getDeviceInfo()
  {
    return $this->deviceInfo;
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
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class ResponseMetadata extends \Google\Model
{
  /** @var string */
  public $requestId;

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
}

class SearchJobsRequest extends \Google\Collection
{
  /** @var CustomRankingInfo */
  public $customRankingInfo;
  /** @var bool */
  public $disableKeywordMatch;
  /** @var string */
  public $diversificationLevel;
  /** @var bool */
  public $enableBroadening;
  /** @var HistogramQuery[] */
  public $histogramQueries;
  /** @var JobQuery */
  public $jobQuery;
  /** @var string */
  public $jobView;
  /** @var string */
  public $keywordMatchMode;
  /** @var int */
  public $maxPageSize;
  /** @var int */
  public $offset;
  /** @var string */
  public $orderBy;
  /** @var string */
  public $pageToken;
  /** @var RequestMetadata */
  public $requestMetadata;
  /** @var string */
  public $searchMode;
  protected $collection_key = 'histogramQueries';
  protected $customRankingInfoType = CustomRankingInfo::class;
  protected $customRankingInfoDataType = '';
  protected $histogramQueriesType = HistogramQuery::class;
  protected $histogramQueriesDataType = 'array';
  protected $jobQueryType = JobQuery::class;
  protected $jobQueryDataType = '';
  protected $requestMetadataType = RequestMetadata::class;
  protected $requestMetadataDataType = '';
  /** @param CustomRankingInfo */
  public function setCustomRankingInfo(CustomRankingInfo $customRankingInfo)
  {
    $this->customRankingInfo = $customRankingInfo;
  }
  /** @return CustomRankingInfo */
  public function getCustomRankingInfo()
  {
    return $this->customRankingInfo;
  }
  /** @param bool */
  public function setDisableKeywordMatch($disableKeywordMatch)
  {
    $this->disableKeywordMatch = $disableKeywordMatch;
  }
  /** @return bool */
  public function getDisableKeywordMatch()
  {
    return $this->disableKeywordMatch;
  }
  /** @param string */
  public function setDiversificationLevel($diversificationLevel)
  {
    $this->diversificationLevel = $diversificationLevel;
  }
  /** @return string */
  public function getDiversificationLevel()
  {
    return $this->diversificationLevel;
  }
  /** @param bool */
  public function setEnableBroadening($enableBroadening)
  {
    $this->enableBroadening = $enableBroadening;
  }
  /** @return bool */
  public function getEnableBroadening()
  {
    return $this->enableBroadening;
  }
  /** @param HistogramQuery[] */
  public function setHistogramQueries($histogramQueries)
  {
    $this->histogramQueries = $histogramQueries;
  }
  /** @return HistogramQuery[] */
  public function getHistogramQueries()
  {
    return $this->histogramQueries;
  }
  /** @param JobQuery */
  public function setJobQuery(JobQuery $jobQuery)
  {
    $this->jobQuery = $jobQuery;
  }
  /** @return JobQuery */
  public function getJobQuery()
  {
    return $this->jobQuery;
  }
  /** @param string */
  public function setJobView($jobView)
  {
    $this->jobView = $jobView;
  }
  /** @return string */
  public function getJobView()
  {
    return $this->jobView;
  }
  /** @param string */
  public function setKeywordMatchMode($keywordMatchMode)
  {
    $this->keywordMatchMode = $keywordMatchMode;
  }
  /** @return string */
  public function getKeywordMatchMode()
  {
    return $this->keywordMatchMode;
  }
  /** @param int */
  public function setMaxPageSize($maxPageSize)
  {
    $this->maxPageSize = $maxPageSize;
  }
  /** @return int */
  public function getMaxPageSize()
  {
    return $this->maxPageSize;
  }
  /** @param int */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return int */
  public function getOffset()
  {
    return $this->offset;
  }
  /** @param string */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return string */
  public function getOrderBy()
  {
    return $this->orderBy;
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
  /** @param RequestMetadata */
  public function setRequestMetadata(RequestMetadata $requestMetadata)
  {
    $this->requestMetadata = $requestMetadata;
  }
  /** @return RequestMetadata */
  public function getRequestMetadata()
  {
    return $this->requestMetadata;
  }
  /** @param string */
  public function setSearchMode($searchMode)
  {
    $this->searchMode = $searchMode;
  }
  /** @return string */
  public function getSearchMode()
  {
    return $this->searchMode;
  }
}

class SearchJobsResponse extends \Google\Collection
{
  /** @var int */
  public $broadenedQueryJobsCount;
  /** @var HistogramQueryResult[] */
  public $histogramQueryResults;
  /** @var Location[] */
  public $locationFilters;
  /** @var MatchingJob[] */
  public $matchingJobs;
  /** @var ResponseMetadata */
  public $metadata;
  /** @var string */
  public $nextPageToken;
  /** @var SpellingCorrection */
  public $spellCorrection;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'matchingJobs';
  protected $histogramQueryResultsType = HistogramQueryResult::class;
  protected $histogramQueryResultsDataType = 'array';
  protected $locationFiltersType = Location::class;
  protected $locationFiltersDataType = 'array';
  protected $matchingJobsType = MatchingJob::class;
  protected $matchingJobsDataType = 'array';
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';
  protected $spellCorrectionType = SpellingCorrection::class;
  protected $spellCorrectionDataType = '';
  /** @param int */
  public function setBroadenedQueryJobsCount($broadenedQueryJobsCount)
  {
    $this->broadenedQueryJobsCount = $broadenedQueryJobsCount;
  }
  /** @return int */
  public function getBroadenedQueryJobsCount()
  {
    return $this->broadenedQueryJobsCount;
  }
  /** @param HistogramQueryResult[] */
  public function setHistogramQueryResults($histogramQueryResults)
  {
    $this->histogramQueryResults = $histogramQueryResults;
  }
  /** @return HistogramQueryResult[] */
  public function getHistogramQueryResults()
  {
    return $this->histogramQueryResults;
  }
  /** @param Location[] */
  public function setLocationFilters($locationFilters)
  {
    $this->locationFilters = $locationFilters;
  }
  /** @return Location[] */
  public function getLocationFilters()
  {
    return $this->locationFilters;
  }
  /** @param MatchingJob[] */
  public function setMatchingJobs($matchingJobs)
  {
    $this->matchingJobs = $matchingJobs;
  }
  /** @return MatchingJob[] */
  public function getMatchingJobs()
  {
    return $this->matchingJobs;
  }
  /** @param ResponseMetadata */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @param SpellingCorrection */
  public function setSpellCorrection(SpellingCorrection $spellCorrection)
  {
    $this->spellCorrection = $spellCorrection;
  }
  /** @return SpellingCorrection */
  public function getSpellCorrection()
  {
    return $this->spellCorrection;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class SpellingCorrection extends \Google\Model
{
  /** @var bool */
  public $corrected;
  /** @var string */
  public $correctedHtml;
  /** @var string */
  public $correctedText;

  /** @param bool */
  public function setCorrected($corrected)
  {
    $this->corrected = $corrected;
  }
  /** @return bool */
  public function getCorrected()
  {
    return $this->corrected;
  }
  /** @param string */
  public function setCorrectedHtml($correctedHtml)
  {
    $this->correctedHtml = $correctedHtml;
  }
  /** @return string */
  public function getCorrectedHtml()
  {
    return $this->correctedHtml;
  }
  /** @param string */
  public function setCorrectedText($correctedText)
  {
    $this->correctedText = $correctedText;
  }
  /** @return string */
  public function getCorrectedText()
  {
    return $this->correctedText;
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

class Tenant extends \Google\Model
{
  /** @var string */
  public $externalId;
  /** @var string */
  public $name;

  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
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

class TimeOfDay extends \Google\Model
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

class TimestampRange extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApplicationInfo::class, 'Google_Service_CloudTalentSolution_ApplicationInfo');
class_alias(BatchCreateJobsRequest::class, 'Google_Service_CloudTalentSolution_BatchCreateJobsRequest');
class_alias(BatchCreateJobsResponse::class, 'Google_Service_CloudTalentSolution_BatchCreateJobsResponse');
class_alias(BatchDeleteJobsRequest::class, 'Google_Service_CloudTalentSolution_BatchDeleteJobsRequest');
class_alias(BatchDeleteJobsResponse::class, 'Google_Service_CloudTalentSolution_BatchDeleteJobsResponse');
class_alias(BatchOperationMetadata::class, 'Google_Service_CloudTalentSolution_BatchOperationMetadata');
class_alias(BatchUpdateJobsRequest::class, 'Google_Service_CloudTalentSolution_BatchUpdateJobsRequest');
class_alias(BatchUpdateJobsResponse::class, 'Google_Service_CloudTalentSolution_BatchUpdateJobsResponse');
class_alias(ClientEvent::class, 'Google_Service_CloudTalentSolution_ClientEvent');
class_alias(CommuteFilter::class, 'Google_Service_CloudTalentSolution_CommuteFilter');
class_alias(CommuteInfo::class, 'Google_Service_CloudTalentSolution_CommuteInfo');
class_alias(Company::class, 'Google_Service_CloudTalentSolution_Company');
class_alias(CompanyDerivedInfo::class, 'Google_Service_CloudTalentSolution_CompanyDerivedInfo');
class_alias(CompensationEntry::class, 'Google_Service_CloudTalentSolution_CompensationEntry');
class_alias(CompensationFilter::class, 'Google_Service_CloudTalentSolution_CompensationFilter');
class_alias(CompensationInfo::class, 'Google_Service_CloudTalentSolution_CompensationInfo');
class_alias(CompensationRange::class, 'Google_Service_CloudTalentSolution_CompensationRange');
class_alias(CompleteQueryResponse::class, 'Google_Service_CloudTalentSolution_CompleteQueryResponse');
class_alias(CompletionResult::class, 'Google_Service_CloudTalentSolution_CompletionResult');
class_alias(CustomAttribute::class, 'Google_Service_CloudTalentSolution_CustomAttribute');
class_alias(CustomRankingInfo::class, 'Google_Service_CloudTalentSolution_CustomRankingInfo');
class_alias(DeviceInfo::class, 'Google_Service_CloudTalentSolution_DeviceInfo');
class_alias(HistogramQuery::class, 'Google_Service_CloudTalentSolution_HistogramQuery');
class_alias(HistogramQueryResult::class, 'Google_Service_CloudTalentSolution_HistogramQueryResult');
class_alias(Job::class, 'Google_Service_CloudTalentSolution_Job');
class_alias(JobDerivedInfo::class, 'Google_Service_CloudTalentSolution_JobDerivedInfo');
class_alias(JobEvent::class, 'Google_Service_CloudTalentSolution_JobEvent');
class_alias(JobQuery::class, 'Google_Service_CloudTalentSolution_JobQuery');
class_alias(JobResult::class, 'Google_Service_CloudTalentSolution_JobResult');
class_alias(JobsEmpty::class, 'Google_Service_CloudTalentSolution_JobsEmpty');
class_alias(LatLng::class, 'Google_Service_CloudTalentSolution_LatLng');
class_alias(ListCompaniesResponse::class, 'Google_Service_CloudTalentSolution_ListCompaniesResponse');
class_alias(ListJobsResponse::class, 'Google_Service_CloudTalentSolution_ListJobsResponse');
class_alias(ListTenantsResponse::class, 'Google_Service_CloudTalentSolution_ListTenantsResponse');
class_alias(Location::class, 'Google_Service_CloudTalentSolution_Location');
class_alias(LocationFilter::class, 'Google_Service_CloudTalentSolution_LocationFilter');
class_alias(MatchingJob::class, 'Google_Service_CloudTalentSolution_MatchingJob');
class_alias(MendelDebugInput::class, 'Google_Service_CloudTalentSolution_MendelDebugInput');
class_alias(Money::class, 'Google_Service_CloudTalentSolution_Money');
class_alias(NamespacedDebugInput::class, 'Google_Service_CloudTalentSolution_NamespacedDebugInput');
class_alias(Operation::class, 'Google_Service_CloudTalentSolution_Operation');
class_alias(PostalAddress::class, 'Google_Service_CloudTalentSolution_PostalAddress');
class_alias(ProcessingOptions::class, 'Google_Service_CloudTalentSolution_ProcessingOptions');
class_alias(RequestMetadata::class, 'Google_Service_CloudTalentSolution_RequestMetadata');
class_alias(ResponseMetadata::class, 'Google_Service_CloudTalentSolution_ResponseMetadata');
class_alias(SearchJobsRequest::class, 'Google_Service_CloudTalentSolution_SearchJobsRequest');
class_alias(SearchJobsResponse::class, 'Google_Service_CloudTalentSolution_SearchJobsResponse');
class_alias(SpellingCorrection::class, 'Google_Service_CloudTalentSolution_SpellingCorrection');
class_alias(Status::class, 'Google_Service_CloudTalentSolution_Status');
class_alias(Tenant::class, 'Google_Service_CloudTalentSolution_Tenant');
class_alias(TimeOfDay::class, 'Google_Service_CloudTalentSolution_TimeOfDay');
class_alias(TimestampRange::class, 'Google_Service_CloudTalentSolution_TimestampRange');
