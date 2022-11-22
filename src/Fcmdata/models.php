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

namespace Google\Service\Fcmdata;

class GoogleFirebaseFcmDataV1beta1AndroidDeliveryData extends \Google\Model
{
  /** @var string */
  public $analyticsLabel;
  /** @var string */
  public $appId;
  /** @var GoogleFirebaseFcmDataV1beta1Data */
  public $data;
  /** @var GoogleTypeDate */
  public $date;
  protected $dataType = GoogleFirebaseFcmDataV1beta1Data::class;
  protected $dataDataType = '';
  protected $dateType = GoogleTypeDate::class;
  protected $dateDataType = '';
  /** @param string */
  public function setAnalyticsLabel($analyticsLabel)
  {
    $this->analyticsLabel = $analyticsLabel;
  }
  /** @return string */
  public function getAnalyticsLabel()
  {
    return $this->analyticsLabel;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param GoogleFirebaseFcmDataV1beta1Data */
  public function setData(GoogleFirebaseFcmDataV1beta1Data $data)
  {
    $this->data = $data;
  }
  /** @return GoogleFirebaseFcmDataV1beta1Data */
  public function getData()
  {
    return $this->data;
  }
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
}

class GoogleFirebaseFcmDataV1beta1Data extends \Google\Model
{
  /** @var string */
  public $countMessagesAccepted;
  /** @var GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents */
  public $deliveryPerformancePercents;
  /** @var GoogleFirebaseFcmDataV1beta1MessageInsightPercents */
  public $messageInsightPercents;
  /** @var GoogleFirebaseFcmDataV1beta1MessageOutcomePercents */
  public $messageOutcomePercents;
  protected $deliveryPerformancePercentsType = GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents::class;
  protected $deliveryPerformancePercentsDataType = '';
  protected $messageInsightPercentsType = GoogleFirebaseFcmDataV1beta1MessageInsightPercents::class;
  protected $messageInsightPercentsDataType = '';
  protected $messageOutcomePercentsType = GoogleFirebaseFcmDataV1beta1MessageOutcomePercents::class;
  protected $messageOutcomePercentsDataType = '';
  /** @param string */
  public function setCountMessagesAccepted($countMessagesAccepted)
  {
    $this->countMessagesAccepted = $countMessagesAccepted;
  }
  /** @return string */
  public function getCountMessagesAccepted()
  {
    return $this->countMessagesAccepted;
  }
  /** @param GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents */
  public function setDeliveryPerformancePercents(GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents $deliveryPerformancePercents)
  {
    $this->deliveryPerformancePercents = $deliveryPerformancePercents;
  }
  /** @return GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents */
  public function getDeliveryPerformancePercents()
  {
    return $this->deliveryPerformancePercents;
  }
  /** @param GoogleFirebaseFcmDataV1beta1MessageInsightPercents */
  public function setMessageInsightPercents(GoogleFirebaseFcmDataV1beta1MessageInsightPercents $messageInsightPercents)
  {
    $this->messageInsightPercents = $messageInsightPercents;
  }
  /** @return GoogleFirebaseFcmDataV1beta1MessageInsightPercents */
  public function getMessageInsightPercents()
  {
    return $this->messageInsightPercents;
  }
  /** @param GoogleFirebaseFcmDataV1beta1MessageOutcomePercents */
  public function setMessageOutcomePercents(GoogleFirebaseFcmDataV1beta1MessageOutcomePercents $messageOutcomePercents)
  {
    $this->messageOutcomePercents = $messageOutcomePercents;
  }
  /** @return GoogleFirebaseFcmDataV1beta1MessageOutcomePercents */
  public function getMessageOutcomePercents()
  {
    return $this->messageOutcomePercents;
  }
}

class GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents extends \Google\Model
{
  /** @var float */
  public $delayedDeviceDoze;
  /** @var float */
  public $delayedDeviceOffline;
  /** @var float */
  public $delayedMessageThrottled;
  /** @var float */
  public $delayedUserStopped;
  /** @var float */
  public $deliveredNoDelay;

  /** @param float */
  public function setDelayedDeviceDoze($delayedDeviceDoze)
  {
    $this->delayedDeviceDoze = $delayedDeviceDoze;
  }
  /** @return float */
  public function getDelayedDeviceDoze()
  {
    return $this->delayedDeviceDoze;
  }
  /** @param float */
  public function setDelayedDeviceOffline($delayedDeviceOffline)
  {
    $this->delayedDeviceOffline = $delayedDeviceOffline;
  }
  /** @return float */
  public function getDelayedDeviceOffline()
  {
    return $this->delayedDeviceOffline;
  }
  /** @param float */
  public function setDelayedMessageThrottled($delayedMessageThrottled)
  {
    $this->delayedMessageThrottled = $delayedMessageThrottled;
  }
  /** @return float */
  public function getDelayedMessageThrottled()
  {
    return $this->delayedMessageThrottled;
  }
  /** @param float */
  public function setDelayedUserStopped($delayedUserStopped)
  {
    $this->delayedUserStopped = $delayedUserStopped;
  }
  /** @return float */
  public function getDelayedUserStopped()
  {
    return $this->delayedUserStopped;
  }
  /** @param float */
  public function setDeliveredNoDelay($deliveredNoDelay)
  {
    $this->deliveredNoDelay = $deliveredNoDelay;
  }
  /** @return float */
  public function getDeliveredNoDelay()
  {
    return $this->deliveredNoDelay;
  }
}

class GoogleFirebaseFcmDataV1beta1ListAndroidDeliveryDataResponse extends \Google\Collection
{
  /** @var GoogleFirebaseFcmDataV1beta1AndroidDeliveryData[] */
  public $androidDeliveryData;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'androidDeliveryData';
  protected $androidDeliveryDataType = GoogleFirebaseFcmDataV1beta1AndroidDeliveryData::class;
  protected $androidDeliveryDataDataType = 'array';
  /** @param GoogleFirebaseFcmDataV1beta1AndroidDeliveryData[] */
  public function setAndroidDeliveryData($androidDeliveryData)
  {
    $this->androidDeliveryData = $androidDeliveryData;
  }
  /** @return GoogleFirebaseFcmDataV1beta1AndroidDeliveryData[] */
  public function getAndroidDeliveryData()
  {
    return $this->androidDeliveryData;
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

class GoogleFirebaseFcmDataV1beta1MessageInsightPercents extends \Google\Model
{
  /** @var float */
  public $priorityLowered;

  /** @param float */
  public function setPriorityLowered($priorityLowered)
  {
    $this->priorityLowered = $priorityLowered;
  }
  /** @return float */
  public function getPriorityLowered()
  {
    return $this->priorityLowered;
  }
}

class GoogleFirebaseFcmDataV1beta1MessageOutcomePercents extends \Google\Model
{
  /** @var float */
  public $delivered;
  /** @var float */
  public $droppedAppForceStopped;
  /** @var float */
  public $droppedDeviceInactive;
  /** @var float */
  public $droppedTooManyPendingMessages;
  /** @var float */
  public $pending;

  /** @param float */
  public function setDelivered($delivered)
  {
    $this->delivered = $delivered;
  }
  /** @return float */
  public function getDelivered()
  {
    return $this->delivered;
  }
  /** @param float */
  public function setDroppedAppForceStopped($droppedAppForceStopped)
  {
    $this->droppedAppForceStopped = $droppedAppForceStopped;
  }
  /** @return float */
  public function getDroppedAppForceStopped()
  {
    return $this->droppedAppForceStopped;
  }
  /** @param float */
  public function setDroppedDeviceInactive($droppedDeviceInactive)
  {
    $this->droppedDeviceInactive = $droppedDeviceInactive;
  }
  /** @return float */
  public function getDroppedDeviceInactive()
  {
    return $this->droppedDeviceInactive;
  }
  /** @param float */
  public function setDroppedTooManyPendingMessages($droppedTooManyPendingMessages)
  {
    $this->droppedTooManyPendingMessages = $droppedTooManyPendingMessages;
  }
  /** @return float */
  public function getDroppedTooManyPendingMessages()
  {
    return $this->droppedTooManyPendingMessages;
  }
  /** @param float */
  public function setPending($pending)
  {
    $this->pending = $pending;
  }
  /** @return float */
  public function getPending()
  {
    return $this->pending;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseFcmDataV1beta1AndroidDeliveryData::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1AndroidDeliveryData');
class_alias(GoogleFirebaseFcmDataV1beta1Data::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1Data');
class_alias(GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1DeliveryPerformancePercents');
class_alias(GoogleFirebaseFcmDataV1beta1ListAndroidDeliveryDataResponse::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1ListAndroidDeliveryDataResponse');
class_alias(GoogleFirebaseFcmDataV1beta1MessageInsightPercents::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1MessageInsightPercents');
class_alias(GoogleFirebaseFcmDataV1beta1MessageOutcomePercents::class, 'Google_Service_Fcmdata_GoogleFirebaseFcmDataV1beta1MessageOutcomePercents');
class_alias(GoogleTypeDate::class, 'Google_Service_Fcmdata_GoogleTypeDate');
