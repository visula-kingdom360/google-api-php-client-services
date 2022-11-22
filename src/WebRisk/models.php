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

namespace Google\Service\WebRisk;

class GoogleCloudWebriskV1ComputeThreatListDiffResponse extends \Google\Model
{
  /** @var GoogleCloudWebriskV1ThreatEntryAdditions */
  public $additions;
  /** @var GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum */
  public $checksum;
  /** @var string */
  public $newVersionToken;
  /** @var string */
  public $recommendedNextDiff;
  /** @var GoogleCloudWebriskV1ThreatEntryRemovals */
  public $removals;
  /** @var string */
  public $responseType;
  protected $additionsType = GoogleCloudWebriskV1ThreatEntryAdditions::class;
  protected $additionsDataType = '';
  protected $checksumType = GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum::class;
  protected $checksumDataType = '';
  protected $removalsType = GoogleCloudWebriskV1ThreatEntryRemovals::class;
  protected $removalsDataType = '';
  /** @param GoogleCloudWebriskV1ThreatEntryAdditions */
  public function setAdditions(GoogleCloudWebriskV1ThreatEntryAdditions $additions)
  {
    $this->additions = $additions;
  }
  /** @return GoogleCloudWebriskV1ThreatEntryAdditions */
  public function getAdditions()
  {
    return $this->additions;
  }
  /** @param GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum */
  public function setChecksum(GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum $checksum)
  {
    $this->checksum = $checksum;
  }
  /** @return GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum */
  public function getChecksum()
  {
    return $this->checksum;
  }
  /** @param string */
  public function setNewVersionToken($newVersionToken)
  {
    $this->newVersionToken = $newVersionToken;
  }
  /** @return string */
  public function getNewVersionToken()
  {
    return $this->newVersionToken;
  }
  /** @param string */
  public function setRecommendedNextDiff($recommendedNextDiff)
  {
    $this->recommendedNextDiff = $recommendedNextDiff;
  }
  /** @return string */
  public function getRecommendedNextDiff()
  {
    return $this->recommendedNextDiff;
  }
  /** @param GoogleCloudWebriskV1ThreatEntryRemovals */
  public function setRemovals(GoogleCloudWebriskV1ThreatEntryRemovals $removals)
  {
    $this->removals = $removals;
  }
  /** @return GoogleCloudWebriskV1ThreatEntryRemovals */
  public function getRemovals()
  {
    return $this->removals;
  }
  /** @param string */
  public function setResponseType($responseType)
  {
    $this->responseType = $responseType;
  }
  /** @return string */
  public function getResponseType()
  {
    return $this->responseType;
  }
}

class GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum extends \Google\Model
{
  /** @var string */
  public $sha256;

  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
  }
}

class GoogleCloudWebriskV1RawHashes extends \Google\Model
{
  /** @var int */
  public $prefixSize;
  /** @var string */
  public $rawHashes;

  /** @param int */
  public function setPrefixSize($prefixSize)
  {
    $this->prefixSize = $prefixSize;
  }
  /** @return int */
  public function getPrefixSize()
  {
    return $this->prefixSize;
  }
  /** @param string */
  public function setRawHashes($rawHashes)
  {
    $this->rawHashes = $rawHashes;
  }
  /** @return string */
  public function getRawHashes()
  {
    return $this->rawHashes;
  }
}

class GoogleCloudWebriskV1RawIndices extends \Google\Collection
{
  /** @var int[] */
  public $indices;
  protected $collection_key = 'indices';
  /** @param int[] */
  public function setIndices($indices)
  {
    $this->indices = $indices;
  }
  /** @return int[] */
  public function getIndices()
  {
    return $this->indices;
  }
}

class GoogleCloudWebriskV1RiceDeltaEncoding extends \Google\Model
{
  /** @var string */
  public $encodedData;
  /** @var int */
  public $entryCount;
  /** @var string */
  public $firstValue;
  /** @var int */
  public $riceParameter;

  /** @param string */
  public function setEncodedData($encodedData)
  {
    $this->encodedData = $encodedData;
  }
  /** @return string */
  public function getEncodedData()
  {
    return $this->encodedData;
  }
  /** @param int */
  public function setEntryCount($entryCount)
  {
    $this->entryCount = $entryCount;
  }
  /** @return int */
  public function getEntryCount()
  {
    return $this->entryCount;
  }
  /** @param string */
  public function setFirstValue($firstValue)
  {
    $this->firstValue = $firstValue;
  }
  /** @return string */
  public function getFirstValue()
  {
    return $this->firstValue;
  }
  /** @param int */
  public function setRiceParameter($riceParameter)
  {
    $this->riceParameter = $riceParameter;
  }
  /** @return int */
  public function getRiceParameter()
  {
    return $this->riceParameter;
  }
}

class GoogleCloudWebriskV1SearchHashesResponse extends \Google\Collection
{
  /** @var string */
  public $negativeExpireTime;
  /** @var GoogleCloudWebriskV1SearchHashesResponseThreatHash[] */
  public $threats;
  protected $collection_key = 'threats';
  protected $threatsType = GoogleCloudWebriskV1SearchHashesResponseThreatHash::class;
  protected $threatsDataType = 'array';
  /** @param string */
  public function setNegativeExpireTime($negativeExpireTime)
  {
    $this->negativeExpireTime = $negativeExpireTime;
  }
  /** @return string */
  public function getNegativeExpireTime()
  {
    return $this->negativeExpireTime;
  }
  /** @param GoogleCloudWebriskV1SearchHashesResponseThreatHash[] */
  public function setThreats($threats)
  {
    $this->threats = $threats;
  }
  /** @return GoogleCloudWebriskV1SearchHashesResponseThreatHash[] */
  public function getThreats()
  {
    return $this->threats;
  }
}

class GoogleCloudWebriskV1SearchHashesResponseThreatHash extends \Google\Collection
{
  /** @var string */
  public $expireTime;
  /** @var string */
  public $hash;
  /** @var string[] */
  public $threatTypes;
  protected $collection_key = 'threatTypes';
  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
  }
  /** @param string[] */
  public function setThreatTypes($threatTypes)
  {
    $this->threatTypes = $threatTypes;
  }
  /** @return string[] */
  public function getThreatTypes()
  {
    return $this->threatTypes;
  }
}

class GoogleCloudWebriskV1SearchUrisResponse extends \Google\Model
{
  /** @var GoogleCloudWebriskV1SearchUrisResponseThreatUri */
  public $threat;
  protected $threatType = GoogleCloudWebriskV1SearchUrisResponseThreatUri::class;
  protected $threatDataType = '';
  /** @param GoogleCloudWebriskV1SearchUrisResponseThreatUri */
  public function setThreat(GoogleCloudWebriskV1SearchUrisResponseThreatUri $threat)
  {
    $this->threat = $threat;
  }
  /** @return GoogleCloudWebriskV1SearchUrisResponseThreatUri */
  public function getThreat()
  {
    return $this->threat;
  }
}

class GoogleCloudWebriskV1SearchUrisResponseThreatUri extends \Google\Collection
{
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $threatTypes;
  protected $collection_key = 'threatTypes';
  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string[] */
  public function setThreatTypes($threatTypes)
  {
    $this->threatTypes = $threatTypes;
  }
  /** @return string[] */
  public function getThreatTypes()
  {
    return $this->threatTypes;
  }
}

class GoogleCloudWebriskV1Submission extends \Google\Collection
{
  /** @var string[] */
  public $threatTypes;
  /** @var string */
  public $uri;
  protected $collection_key = 'threatTypes';
  /** @param string[] */
  public function setThreatTypes($threatTypes)
  {
    $this->threatTypes = $threatTypes;
  }
  /** @return string[] */
  public function getThreatTypes()
  {
    return $this->threatTypes;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GoogleCloudWebriskV1SubmitUriMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
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

class GoogleCloudWebriskV1SubmitUriRequest extends \Google\Model
{
  /** @var GoogleCloudWebriskV1Submission */
  public $submission;
  protected $submissionType = GoogleCloudWebriskV1Submission::class;
  protected $submissionDataType = '';
  /** @param GoogleCloudWebriskV1Submission */
  public function setSubmission(GoogleCloudWebriskV1Submission $submission)
  {
    $this->submission = $submission;
  }
  /** @return GoogleCloudWebriskV1Submission */
  public function getSubmission()
  {
    return $this->submission;
  }
}

class GoogleCloudWebriskV1ThreatEntryAdditions extends \Google\Collection
{
  /** @var GoogleCloudWebriskV1RawHashes[] */
  public $rawHashes;
  /** @var GoogleCloudWebriskV1RiceDeltaEncoding */
  public $riceHashes;
  protected $collection_key = 'rawHashes';
  protected $rawHashesType = GoogleCloudWebriskV1RawHashes::class;
  protected $rawHashesDataType = 'array';
  protected $riceHashesType = GoogleCloudWebriskV1RiceDeltaEncoding::class;
  protected $riceHashesDataType = '';
  /** @param GoogleCloudWebriskV1RawHashes[] */
  public function setRawHashes($rawHashes)
  {
    $this->rawHashes = $rawHashes;
  }
  /** @return GoogleCloudWebriskV1RawHashes[] */
  public function getRawHashes()
  {
    return $this->rawHashes;
  }
  /** @param GoogleCloudWebriskV1RiceDeltaEncoding */
  public function setRiceHashes(GoogleCloudWebriskV1RiceDeltaEncoding $riceHashes)
  {
    $this->riceHashes = $riceHashes;
  }
  /** @return GoogleCloudWebriskV1RiceDeltaEncoding */
  public function getRiceHashes()
  {
    return $this->riceHashes;
  }
}

class GoogleCloudWebriskV1ThreatEntryRemovals extends \Google\Model
{
  /** @var GoogleCloudWebriskV1RawIndices */
  public $rawIndices;
  /** @var GoogleCloudWebriskV1RiceDeltaEncoding */
  public $riceIndices;
  protected $rawIndicesType = GoogleCloudWebriskV1RawIndices::class;
  protected $rawIndicesDataType = '';
  protected $riceIndicesType = GoogleCloudWebriskV1RiceDeltaEncoding::class;
  protected $riceIndicesDataType = '';
  /** @param GoogleCloudWebriskV1RawIndices */
  public function setRawIndices(GoogleCloudWebriskV1RawIndices $rawIndices)
  {
    $this->rawIndices = $rawIndices;
  }
  /** @return GoogleCloudWebriskV1RawIndices */
  public function getRawIndices()
  {
    return $this->rawIndices;
  }
  /** @param GoogleCloudWebriskV1RiceDeltaEncoding */
  public function setRiceIndices(GoogleCloudWebriskV1RiceDeltaEncoding $riceIndices)
  {
    $this->riceIndices = $riceIndices;
  }
  /** @return GoogleCloudWebriskV1RiceDeltaEncoding */
  public function getRiceIndices()
  {
    return $this->riceIndices;
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
class_alias(GoogleCloudWebriskV1ComputeThreatListDiffResponse::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1ComputeThreatListDiffResponse');
class_alias(GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1ComputeThreatListDiffResponseChecksum');
class_alias(GoogleCloudWebriskV1RawHashes::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1RawHashes');
class_alias(GoogleCloudWebriskV1RawIndices::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1RawIndices');
class_alias(GoogleCloudWebriskV1RiceDeltaEncoding::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1RiceDeltaEncoding');
class_alias(GoogleCloudWebriskV1SearchHashesResponse::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SearchHashesResponse');
class_alias(GoogleCloudWebriskV1SearchHashesResponseThreatHash::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SearchHashesResponseThreatHash');
class_alias(GoogleCloudWebriskV1SearchUrisResponse::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SearchUrisResponse');
class_alias(GoogleCloudWebriskV1SearchUrisResponseThreatUri::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SearchUrisResponseThreatUri');
class_alias(GoogleCloudWebriskV1Submission::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1Submission');
class_alias(GoogleCloudWebriskV1SubmitUriMetadata::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SubmitUriMetadata');
class_alias(GoogleCloudWebriskV1SubmitUriRequest::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1SubmitUriRequest');
class_alias(GoogleCloudWebriskV1ThreatEntryAdditions::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1ThreatEntryAdditions');
class_alias(GoogleCloudWebriskV1ThreatEntryRemovals::class, 'Google_Service_WebRisk_GoogleCloudWebriskV1ThreatEntryRemovals');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_WebRisk_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_WebRisk_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_WebRisk_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_WebRisk_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_WebRisk_GoogleRpcStatus');
