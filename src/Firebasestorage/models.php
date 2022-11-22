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

namespace Google\Service\Firebasestorage;

class AddFirebaseRequest extends \Google\Model
{
}

class Bucket extends \Google\Model
{
  /** @var string */
  public $name;

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

class FirebasestorageEmpty extends \Google\Model
{
}

class GoogleFirebaseStorageControlplaneV1alphaMigrateLocationDestructivelyMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $state;

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
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
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

class GoogleFirebaseStorageControlplaneV1betaMigrateLocationDestructivelyMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $state;

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
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
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

class ListBucketsResponse extends \Google\Collection
{
  /** @var Bucket[] */
  public $buckets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'buckets';
  protected $bucketsType = Bucket::class;
  protected $bucketsDataType = 'array';
  /** @param Bucket[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return Bucket[] */
  public function getBuckets()
  {
    return $this->buckets;
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

class RemoveFirebaseRequest extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddFirebaseRequest::class, 'Google_Service_Firebasestorage_AddFirebaseRequest');
class_alias(Bucket::class, 'Google_Service_Firebasestorage_Bucket');
class_alias(FirebasestorageEmpty::class, 'Google_Service_Firebasestorage_FirebasestorageEmpty');
class_alias(GoogleFirebaseStorageControlplaneV1alphaMigrateLocationDestructivelyMetadata::class, 'Google_Service_Firebasestorage_GoogleFirebaseStorageControlplaneV1alphaMigrateLocationDestructivelyMetadata');
class_alias(GoogleFirebaseStorageControlplaneV1betaMigrateLocationDestructivelyMetadata::class, 'Google_Service_Firebasestorage_GoogleFirebaseStorageControlplaneV1betaMigrateLocationDestructivelyMetadata');
class_alias(ListBucketsResponse::class, 'Google_Service_Firebasestorage_ListBucketsResponse');
class_alias(RemoveFirebaseRequest::class, 'Google_Service_Firebasestorage_RemoveFirebaseRequest');
