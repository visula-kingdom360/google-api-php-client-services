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

namespace Google\Service\PolicyAnalyzer;

class GoogleCloudPolicyanalyzerV1Activity extends \Google\Model
{
  /** @var array[] */
  public $activity;
  /** @var string */
  public $activityType;
  /** @var string */
  public $fullResourceName;
  /** @var GoogleCloudPolicyanalyzerV1ObservationPeriod */
  public $observationPeriod;
  protected $observationPeriodType = GoogleCloudPolicyanalyzerV1ObservationPeriod::class;
  protected $observationPeriodDataType = '';
  /** @param array[] */
  public function setActivity($activity)
  {
    $this->activity = $activity;
  }
  /** @return array[] */
  public function getActivity()
  {
    return $this->activity;
  }
  /** @param string */
  public function setActivityType($activityType)
  {
    $this->activityType = $activityType;
  }
  /** @return string */
  public function getActivityType()
  {
    return $this->activityType;
  }
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /** @param GoogleCloudPolicyanalyzerV1ObservationPeriod */
  public function setObservationPeriod(GoogleCloudPolicyanalyzerV1ObservationPeriod $observationPeriod)
  {
    $this->observationPeriod = $observationPeriod;
  }
  /** @return GoogleCloudPolicyanalyzerV1ObservationPeriod */
  public function getObservationPeriod()
  {
    return $this->observationPeriod;
  }
}

class GoogleCloudPolicyanalyzerV1ObservationPeriod extends \Google\Model
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

class GoogleCloudPolicyanalyzerV1QueryActivityResponse extends \Google\Collection
{
  /** @var GoogleCloudPolicyanalyzerV1Activity[] */
  public $activities;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'activities';
  protected $activitiesType = GoogleCloudPolicyanalyzerV1Activity::class;
  protected $activitiesDataType = 'array';
  /** @param GoogleCloudPolicyanalyzerV1Activity[] */
  public function setActivities($activities)
  {
    $this->activities = $activities;
  }
  /** @return GoogleCloudPolicyanalyzerV1Activity[] */
  public function getActivities()
  {
    return $this->activities;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudPolicyanalyzerV1Activity::class, 'Google_Service_PolicyAnalyzer_GoogleCloudPolicyanalyzerV1Activity');
class_alias(GoogleCloudPolicyanalyzerV1ObservationPeriod::class, 'Google_Service_PolicyAnalyzer_GoogleCloudPolicyanalyzerV1ObservationPeriod');
class_alias(GoogleCloudPolicyanalyzerV1QueryActivityResponse::class, 'Google_Service_PolicyAnalyzer_GoogleCloudPolicyanalyzerV1QueryActivityResponse');
