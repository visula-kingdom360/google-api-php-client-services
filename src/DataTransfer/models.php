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

namespace Google\Service\DataTransfer;

class Application extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var ApplicationTransferParam[] */
  public $transferParams;
  protected $collection_key = 'transferParams';
  protected $transferParamsType = ApplicationTransferParam::class;
  protected $transferParamsDataType = 'array';
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param ApplicationTransferParam[] */
  public function setTransferParams($transferParams)
  {
    $this->transferParams = $transferParams;
  }
  /** @return ApplicationTransferParam[] */
  public function getTransferParams()
  {
    return $this->transferParams;
  }
}

class ApplicationDataTransfer extends \Google\Collection
{
  /** @var string */
  public $applicationId;
  /** @var ApplicationTransferParam[] */
  public $applicationTransferParams;
  /** @var string */
  public $applicationTransferStatus;
  protected $collection_key = 'applicationTransferParams';
  protected $applicationTransferParamsType = ApplicationTransferParam::class;
  protected $applicationTransferParamsDataType = 'array';
  /** @param string */
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  /** @return string */
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  /** @param ApplicationTransferParam[] */
  public function setApplicationTransferParams($applicationTransferParams)
  {
    $this->applicationTransferParams = $applicationTransferParams;
  }
  /** @return ApplicationTransferParam[] */
  public function getApplicationTransferParams()
  {
    return $this->applicationTransferParams;
  }
  /** @param string */
  public function setApplicationTransferStatus($applicationTransferStatus)
  {
    $this->applicationTransferStatus = $applicationTransferStatus;
  }
  /** @return string */
  public function getApplicationTransferStatus()
  {
    return $this->applicationTransferStatus;
  }
}

class ApplicationTransferParam extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var string[] */
  public $value;
  protected $collection_key = 'value';
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
  /** @param string[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string[] */
  public function getValue()
  {
    return $this->value;
  }
}

class ApplicationsListResponse extends \Google\Collection
{
  /** @var Application[] */
  public $applications;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'applications';
  protected $applicationsType = Application::class;
  protected $applicationsDataType = 'array';
  /** @param Application[] */
  public function setApplications($applications)
  {
    $this->applications = $applications;
  }
  /** @return Application[] */
  public function getApplications()
  {
    return $this->applications;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class DataTransfer extends \Google\Collection
{
  /** @var ApplicationDataTransfer[] */
  public $applicationDataTransfers;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $newOwnerUserId;
  /** @var string */
  public $oldOwnerUserId;
  /** @var string */
  public $overallTransferStatusCode;
  /** @var string */
  public $requestTime;
  protected $collection_key = 'applicationDataTransfers';
  protected $applicationDataTransfersType = ApplicationDataTransfer::class;
  protected $applicationDataTransfersDataType = 'array';
  /** @param ApplicationDataTransfer[] */
  public function setApplicationDataTransfers($applicationDataTransfers)
  {
    $this->applicationDataTransfers = $applicationDataTransfers;
  }
  /** @return ApplicationDataTransfer[] */
  public function getApplicationDataTransfers()
  {
    return $this->applicationDataTransfers;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setNewOwnerUserId($newOwnerUserId)
  {
    $this->newOwnerUserId = $newOwnerUserId;
  }
  /** @return string */
  public function getNewOwnerUserId()
  {
    return $this->newOwnerUserId;
  }
  /** @param string */
  public function setOldOwnerUserId($oldOwnerUserId)
  {
    $this->oldOwnerUserId = $oldOwnerUserId;
  }
  /** @return string */
  public function getOldOwnerUserId()
  {
    return $this->oldOwnerUserId;
  }
  /** @param string */
  public function setOverallTransferStatusCode($overallTransferStatusCode)
  {
    $this->overallTransferStatusCode = $overallTransferStatusCode;
  }
  /** @return string */
  public function getOverallTransferStatusCode()
  {
    return $this->overallTransferStatusCode;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class DataTransfersListResponse extends \Google\Collection
{
  /** @var DataTransfer[] */
  public $dataTransfers;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataTransfers';
  protected $dataTransfersType = DataTransfer::class;
  protected $dataTransfersDataType = 'array';
  /** @param DataTransfer[] */
  public function setDataTransfers($dataTransfers)
  {
    $this->dataTransfers = $dataTransfers;
  }
  /** @return DataTransfer[] */
  public function getDataTransfers()
  {
    return $this->dataTransfers;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
class_alias(Application::class, 'Google_Service_DataTransfer_Application');
class_alias(ApplicationDataTransfer::class, 'Google_Service_DataTransfer_ApplicationDataTransfer');
class_alias(ApplicationTransferParam::class, 'Google_Service_DataTransfer_ApplicationTransferParam');
class_alias(ApplicationsListResponse::class, 'Google_Service_DataTransfer_ApplicationsListResponse');
class_alias(DataTransfer::class, 'Google_Service_DataTransfer_DataTransfer');
class_alias(DataTransfersListResponse::class, 'Google_Service_DataTransfer_DataTransfersListResponse');
