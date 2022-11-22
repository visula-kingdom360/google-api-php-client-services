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

namespace Google\Service\SmartDeviceManagement;

class GoogleHomeEnterpriseSdmV1Device extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var GoogleHomeEnterpriseSdmV1ParentRelation[] */
  public $parentRelations;
  /** @var array[] */
  public $traits;
  /** @var string */
  public $type;
  protected $collection_key = 'parentRelations';
  protected $parentRelationsType = GoogleHomeEnterpriseSdmV1ParentRelation::class;
  protected $parentRelationsDataType = 'array';
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
  /** @param GoogleHomeEnterpriseSdmV1ParentRelation[] */
  public function setParentRelations($parentRelations)
  {
    $this->parentRelations = $parentRelations;
  }
  /** @return GoogleHomeEnterpriseSdmV1ParentRelation[] */
  public function getParentRelations()
  {
    return $this->parentRelations;
  }
  /** @param array[] */
  public function setTraits($traits)
  {
    $this->traits = $traits;
  }
  /** @return array[] */
  public function getTraits()
  {
    return $this->traits;
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

class GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandRequest extends \Google\Model
{
  /** @var string */
  public $command;
  /** @var array[] */
  public $params;

  /** @param string */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /** @return string */
  public function getCommand()
  {
    return $this->command;
  }
  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
}

class GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandResponse extends \Google\Model
{
  /** @var array[] */
  public $results;

  /** @param array[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return array[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleHomeEnterpriseSdmV1ListDevicesResponse extends \Google\Collection
{
  /** @var GoogleHomeEnterpriseSdmV1Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = GoogleHomeEnterpriseSdmV1Device::class;
  protected $devicesDataType = 'array';
  /** @param GoogleHomeEnterpriseSdmV1Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return GoogleHomeEnterpriseSdmV1Device[] */
  public function getDevices()
  {
    return $this->devices;
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

class GoogleHomeEnterpriseSdmV1ListRoomsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleHomeEnterpriseSdmV1Room[] */
  public $rooms;
  protected $collection_key = 'rooms';
  protected $roomsType = GoogleHomeEnterpriseSdmV1Room::class;
  protected $roomsDataType = 'array';
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
  /** @param GoogleHomeEnterpriseSdmV1Room[] */
  public function setRooms($rooms)
  {
    $this->rooms = $rooms;
  }
  /** @return GoogleHomeEnterpriseSdmV1Room[] */
  public function getRooms()
  {
    return $this->rooms;
  }
}

class GoogleHomeEnterpriseSdmV1ListStructuresResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleHomeEnterpriseSdmV1Structure[] */
  public $structures;
  protected $collection_key = 'structures';
  protected $structuresType = GoogleHomeEnterpriseSdmV1Structure::class;
  protected $structuresDataType = 'array';
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
  /** @param GoogleHomeEnterpriseSdmV1Structure[] */
  public function setStructures($structures)
  {
    $this->structures = $structures;
  }
  /** @return GoogleHomeEnterpriseSdmV1Structure[] */
  public function getStructures()
  {
    return $this->structures;
  }
}

class GoogleHomeEnterpriseSdmV1ParentRelation extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $parent;

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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class GoogleHomeEnterpriseSdmV1Room extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var array[] */
  public $traits;

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
  public function setTraits($traits)
  {
    $this->traits = $traits;
  }
  /** @return array[] */
  public function getTraits()
  {
    return $this->traits;
  }
}

class GoogleHomeEnterpriseSdmV1Structure extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var array[] */
  public $traits;

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
  public function setTraits($traits)
  {
    $this->traits = $traits;
  }
  /** @return array[] */
  public function getTraits()
  {
    return $this->traits;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleHomeEnterpriseSdmV1Device::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1Device');
class_alias(GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandRequest::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandRequest');
class_alias(GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandResponse::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ExecuteDeviceCommandResponse');
class_alias(GoogleHomeEnterpriseSdmV1ListDevicesResponse::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ListDevicesResponse');
class_alias(GoogleHomeEnterpriseSdmV1ListRoomsResponse::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ListRoomsResponse');
class_alias(GoogleHomeEnterpriseSdmV1ListStructuresResponse::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ListStructuresResponse');
class_alias(GoogleHomeEnterpriseSdmV1ParentRelation::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ParentRelation');
class_alias(GoogleHomeEnterpriseSdmV1Room::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1Room');
class_alias(GoogleHomeEnterpriseSdmV1Structure::class, 'Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1Structure');
