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

namespace Google\Service\FirebaseRealtimeDatabase;

class DatabaseInstance extends \Google\Model
{
  /** @var string */
  public $databaseUrl;
  /** @var string */
  public $name;
  /** @var string */
  public $project;
  /** @var string */
  public $state;
  /** @var string */
  public $type;

  /** @param string */
  public function setDatabaseUrl($databaseUrl)
  {
    $this->databaseUrl = $databaseUrl;
  }
  /** @return string */
  public function getDatabaseUrl()
  {
    return $this->databaseUrl;
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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
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

class DisableDatabaseInstanceRequest extends \Google\Model
{
}

class ListDatabaseInstancesResponse extends \Google\Collection
{
  /** @var DatabaseInstance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instances';
  protected $instancesType = DatabaseInstance::class;
  protected $instancesDataType = 'array';
  /** @param DatabaseInstance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return DatabaseInstance[] */
  public function getInstances()
  {
    return $this->instances;
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

class ReenableDatabaseInstanceRequest extends \Google\Model
{
}

class UndeleteDatabaseInstanceRequest extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseInstance::class, 'Google_Service_FirebaseRealtimeDatabase_DatabaseInstance');
class_alias(DisableDatabaseInstanceRequest::class, 'Google_Service_FirebaseRealtimeDatabase_DisableDatabaseInstanceRequest');
class_alias(ListDatabaseInstancesResponse::class, 'Google_Service_FirebaseRealtimeDatabase_ListDatabaseInstancesResponse');
class_alias(ReenableDatabaseInstanceRequest::class, 'Google_Service_FirebaseRealtimeDatabase_ReenableDatabaseInstanceRequest');
class_alias(UndeleteDatabaseInstanceRequest::class, 'Google_Service_FirebaseRealtimeDatabase_UndeleteDatabaseInstanceRequest');
