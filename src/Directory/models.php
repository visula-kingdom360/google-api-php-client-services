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

namespace Google\Service\Directory;

class AdminEmpty extends \Google\Model
{
}

class Alias extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $primaryEmail;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
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
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}

class Aliases extends \Google\Collection
{
  /** @var array[] */
  public $aliases;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  protected $collection_key = 'aliases';
  /** @param array[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return array[] */
  public function getAliases()
  {
    return $this->aliases;
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
}

class Asp extends \Google\Model
{
  /** @var int */
  public $codeId;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastTimeUsed;
  /** @var string */
  public $name;
  /** @var string */
  public $userKey;

  /** @param int */
  public function setCodeId($codeId)
  {
    $this->codeId = $codeId;
  }
  /** @return int */
  public function getCodeId()
  {
    return $this->codeId;
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
  public function setLastTimeUsed($lastTimeUsed)
  {
    $this->lastTimeUsed = $lastTimeUsed;
  }
  /** @return string */
  public function getLastTimeUsed()
  {
    return $this->lastTimeUsed;
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
  public function setUserKey($userKey)
  {
    $this->userKey = $userKey;
  }
  /** @return string */
  public function getUserKey()
  {
    return $this->userKey;
  }
}

class Asps extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Asp[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Asp::class;
  protected $itemsDataType = 'array';
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
  /** @param Asp[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Asp[] */
  public function getItems()
  {
    return $this->items;
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
}

class AuxiliaryMessage extends \Google\Model
{
  /** @var string */
  public $auxiliaryMessage;
  /** @var string */
  public $fieldMask;
  /** @var string */
  public $severity;

  /** @param string */
  public function setAuxiliaryMessage($auxiliaryMessage)
  {
    $this->auxiliaryMessage = $auxiliaryMessage;
  }
  /** @return string */
  public function getAuxiliaryMessage()
  {
    return $this->auxiliaryMessage;
  }
  /** @param string */
  public function setFieldMask($fieldMask)
  {
    $this->fieldMask = $fieldMask;
  }
  /** @return string */
  public function getFieldMask()
  {
    return $this->fieldMask;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
}

class BatchCreatePrintServersRequest extends \Google\Collection
{
  /** @var CreatePrintServerRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreatePrintServerRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreatePrintServerRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreatePrintServerRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreatePrintServersResponse extends \Google\Collection
{
  /** @var PrintServerFailureInfo[] */
  public $failures;
  /** @var PrintServer[] */
  public $printServers;
  protected $collection_key = 'printServers';
  protected $failuresType = PrintServerFailureInfo::class;
  protected $failuresDataType = 'array';
  protected $printServersType = PrintServer::class;
  protected $printServersDataType = 'array';
  /** @param PrintServerFailureInfo[] */
  public function setFailures($failures)
  {
    $this->failures = $failures;
  }
  /** @return PrintServerFailureInfo[] */
  public function getFailures()
  {
    return $this->failures;
  }
  /** @param PrintServer[] */
  public function setPrintServers($printServers)
  {
    $this->printServers = $printServers;
  }
  /** @return PrintServer[] */
  public function getPrintServers()
  {
    return $this->printServers;
  }
}

class BatchCreatePrintersRequest extends \Google\Collection
{
  /** @var CreatePrinterRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreatePrinterRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreatePrinterRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreatePrinterRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreatePrintersResponse extends \Google\Collection
{
  /** @var FailureInfo[] */
  public $failures;
  /** @var Printer[] */
  public $printers;
  protected $collection_key = 'printers';
  protected $failuresType = FailureInfo::class;
  protected $failuresDataType = 'array';
  protected $printersType = Printer::class;
  protected $printersDataType = 'array';
  /** @param FailureInfo[] */
  public function setFailures($failures)
  {
    $this->failures = $failures;
  }
  /** @return FailureInfo[] */
  public function getFailures()
  {
    return $this->failures;
  }
  /** @param Printer[] */
  public function setPrinters($printers)
  {
    $this->printers = $printers;
  }
  /** @return Printer[] */
  public function getPrinters()
  {
    return $this->printers;
  }
}

class BatchDeletePrintServersRequest extends \Google\Collection
{
  /** @var string[] */
  public $printServerIds;
  protected $collection_key = 'printServerIds';
  /** @param string[] */
  public function setPrintServerIds($printServerIds)
  {
    $this->printServerIds = $printServerIds;
  }
  /** @return string[] */
  public function getPrintServerIds()
  {
    return $this->printServerIds;
  }
}

class BatchDeletePrintServersResponse extends \Google\Collection
{
  /** @var PrintServerFailureInfo[] */
  public $failedPrintServers;
  /** @var string[] */
  public $printServerIds;
  protected $collection_key = 'printServerIds';
  protected $failedPrintServersType = PrintServerFailureInfo::class;
  protected $failedPrintServersDataType = 'array';
  /** @param PrintServerFailureInfo[] */
  public function setFailedPrintServers($failedPrintServers)
  {
    $this->failedPrintServers = $failedPrintServers;
  }
  /** @return PrintServerFailureInfo[] */
  public function getFailedPrintServers()
  {
    return $this->failedPrintServers;
  }
  /** @param string[] */
  public function setPrintServerIds($printServerIds)
  {
    $this->printServerIds = $printServerIds;
  }
  /** @return string[] */
  public function getPrintServerIds()
  {
    return $this->printServerIds;
  }
}

class BatchDeletePrintersRequest extends \Google\Collection
{
  /** @var string[] */
  public $printerIds;
  protected $collection_key = 'printerIds';
  /** @param string[] */
  public function setPrinterIds($printerIds)
  {
    $this->printerIds = $printerIds;
  }
  /** @return string[] */
  public function getPrinterIds()
  {
    return $this->printerIds;
  }
}

class BatchDeletePrintersResponse extends \Google\Collection
{
  /** @var FailureInfo[] */
  public $failedPrinters;
  /** @var string[] */
  public $printerIds;
  protected $collection_key = 'printerIds';
  protected $failedPrintersType = FailureInfo::class;
  protected $failedPrintersDataType = 'array';
  /** @param FailureInfo[] */
  public function setFailedPrinters($failedPrinters)
  {
    $this->failedPrinters = $failedPrinters;
  }
  /** @return FailureInfo[] */
  public function getFailedPrinters()
  {
    return $this->failedPrinters;
  }
  /** @param string[] */
  public function setPrinterIds($printerIds)
  {
    $this->printerIds = $printerIds;
  }
  /** @return string[] */
  public function getPrinterIds()
  {
    return $this->printerIds;
  }
}

class Building extends \Google\Collection
{
  /** @var BuildingAddress */
  public $address;
  /** @var string */
  public $buildingId;
  /** @var string */
  public $buildingName;
  /** @var BuildingCoordinates */
  public $coordinates;
  /** @var string */
  public $description;
  /** @var string */
  public $etags;
  /** @var string[] */
  public $floorNames;
  /** @var string */
  public $kind;
  protected $collection_key = 'floorNames';
  protected $addressType = BuildingAddress::class;
  protected $addressDataType = '';
  protected $coordinatesType = BuildingCoordinates::class;
  protected $coordinatesDataType = '';
  /** @param BuildingAddress */
  public function setAddress(BuildingAddress $address)
  {
    $this->address = $address;
  }
  /** @return BuildingAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }
  /** @return string */
  public function getBuildingId()
  {
    return $this->buildingId;
  }
  /** @param string */
  public function setBuildingName($buildingName)
  {
    $this->buildingName = $buildingName;
  }
  /** @return string */
  public function getBuildingName()
  {
    return $this->buildingName;
  }
  /** @param BuildingCoordinates */
  public function setCoordinates(BuildingCoordinates $coordinates)
  {
    $this->coordinates = $coordinates;
  }
  /** @return BuildingCoordinates */
  public function getCoordinates()
  {
    return $this->coordinates;
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
  /** @param string */
  public function setEtags($etags)
  {
    $this->etags = $etags;
  }
  /** @return string */
  public function getEtags()
  {
    return $this->etags;
  }
  /** @param string[] */
  public function setFloorNames($floorNames)
  {
    $this->floorNames = $floorNames;
  }
  /** @return string[] */
  public function getFloorNames()
  {
    return $this->floorNames;
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
}

class BuildingAddress extends \Google\Collection
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
  public $postalCode;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'addressLines';
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
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
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

class BuildingCoordinates extends \Google\Model
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

class Buildings extends \Google\Collection
{
  /** @var Building[] */
  public $buildings;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'buildings';
  protected $buildingsType = Building::class;
  protected $buildingsDataType = 'array';
  /** @param Building[] */
  public function setBuildings($buildings)
  {
    $this->buildings = $buildings;
  }
  /** @return Building[] */
  public function getBuildings()
  {
    return $this->buildings;
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

class CalendarResource extends \Google\Model
{
  /** @var string */
  public $buildingId;
  /** @var int */
  public $capacity;
  /** @var string */
  public $etags;
  /** @var array */
  public $featureInstances;
  /** @var string */
  public $floorName;
  /** @var string */
  public $floorSection;
  /** @var string */
  public $generatedResourceName;
  /** @var string */
  public $kind;
  /** @var string */
  public $resourceCategory;
  /** @var string */
  public $resourceDescription;
  /** @var string */
  public $resourceEmail;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceName;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $userVisibleDescription;

  /** @param string */
  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }
  /** @return string */
  public function getBuildingId()
  {
    return $this->buildingId;
  }
  /** @param int */
  public function setCapacity($capacity)
  {
    $this->capacity = $capacity;
  }
  /** @return int */
  public function getCapacity()
  {
    return $this->capacity;
  }
  /** @param string */
  public function setEtags($etags)
  {
    $this->etags = $etags;
  }
  /** @return string */
  public function getEtags()
  {
    return $this->etags;
  }
  /** @param array */
  public function setFeatureInstances($featureInstances)
  {
    $this->featureInstances = $featureInstances;
  }
  /** @return array */
  public function getFeatureInstances()
  {
    return $this->featureInstances;
  }
  /** @param string */
  public function setFloorName($floorName)
  {
    $this->floorName = $floorName;
  }
  /** @return string */
  public function getFloorName()
  {
    return $this->floorName;
  }
  /** @param string */
  public function setFloorSection($floorSection)
  {
    $this->floorSection = $floorSection;
  }
  /** @return string */
  public function getFloorSection()
  {
    return $this->floorSection;
  }
  /** @param string */
  public function setGeneratedResourceName($generatedResourceName)
  {
    $this->generatedResourceName = $generatedResourceName;
  }
  /** @return string */
  public function getGeneratedResourceName()
  {
    return $this->generatedResourceName;
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
  public function setResourceCategory($resourceCategory)
  {
    $this->resourceCategory = $resourceCategory;
  }
  /** @return string */
  public function getResourceCategory()
  {
    return $this->resourceCategory;
  }
  /** @param string */
  public function setResourceDescription($resourceDescription)
  {
    $this->resourceDescription = $resourceDescription;
  }
  /** @return string */
  public function getResourceDescription()
  {
    return $this->resourceDescription;
  }
  /** @param string */
  public function setResourceEmail($resourceEmail)
  {
    $this->resourceEmail = $resourceEmail;
  }
  /** @return string */
  public function getResourceEmail()
  {
    return $this->resourceEmail;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param string */
  public function setUserVisibleDescription($userVisibleDescription)
  {
    $this->userVisibleDescription = $userVisibleDescription;
  }
  /** @return string */
  public function getUserVisibleDescription()
  {
    return $this->userVisibleDescription;
  }
}

class CalendarResources extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var CalendarResource[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = CalendarResource::class;
  protected $itemsDataType = 'array';
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
  /** @param CalendarResource[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CalendarResource[] */
  public function getItems()
  {
    return $this->items;
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

class Channel extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $expiration;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $params;
  /** @var bool */
  public $payload;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $token;
  /** @var string */
  public $type;

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
  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
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
  /** @param string[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return string[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param bool */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return bool */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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

class ChromeOsDevice extends \Google\Collection
{
  /** @var ChromeOsDeviceActiveTimeRanges[] */
  public $activeTimeRanges;
  /** @var string */
  public $annotatedAssetId;
  /** @var string */
  public $annotatedLocation;
  /** @var string */
  public $annotatedUser;
  /** @var string */
  public $autoUpdateExpiration;
  /** @var string */
  public $bootMode;
  /** @var ChromeOsDeviceCpuInfo[] */
  public $cpuInfo;
  /** @var ChromeOsDeviceCpuStatusReports[] */
  public $cpuStatusReports;
  /** @var ChromeOsDeviceDeviceFiles[] */
  public $deviceFiles;
  /** @var string */
  public $deviceId;
  /** @var ChromeOsDeviceDiskVolumeReports[] */
  public $diskVolumeReports;
  /** @var string */
  public $dockMacAddress;
  /** @var string */
  public $etag;
  /** @var string */
  public $ethernetMacAddress;
  /** @var string */
  public $ethernetMacAddress0;
  /** @var string */
  public $firmwareVersion;
  /** @var string */
  public $firstEnrollmentTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastEnrollmentTime;
  /** @var ChromeOsDeviceLastKnownNetwork[] */
  public $lastKnownNetwork;
  /** @var string */
  public $lastSync;
  /** @var string */
  public $macAddress;
  /** @var string */
  public $manufactureDate;
  /** @var string */
  public $meid;
  /** @var string */
  public $model;
  /** @var string */
  public $notes;
  /** @var string */
  public $orderNumber;
  /** @var string */
  public $orgUnitId;
  /** @var string */
  public $orgUnitPath;
  /** @var OsUpdateStatus */
  public $osUpdateStatus;
  /** @var string */
  public $osVersion;
  /** @var string */
  public $platformVersion;
  /** @var ChromeOsDeviceRecentUsers[] */
  public $recentUsers;
  /** @var ChromeOsDeviceScreenshotFiles[] */
  public $screenshotFiles;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $status;
  /** @var string */
  public $supportEndDate;
  /** @var ChromeOsDeviceSystemRamFreeReports[] */
  public $systemRamFreeReports;
  /** @var string */
  public $systemRamTotal;
  /** @var ChromeOsDeviceTpmVersionInfo */
  public $tpmVersionInfo;
  /** @var bool */
  public $willAutoRenew;
  protected $collection_key = 'systemRamFreeReports';
  protected $activeTimeRangesType = ChromeOsDeviceActiveTimeRanges::class;
  protected $activeTimeRangesDataType = 'array';
  protected $cpuInfoType = ChromeOsDeviceCpuInfo::class;
  protected $cpuInfoDataType = 'array';
  protected $cpuStatusReportsType = ChromeOsDeviceCpuStatusReports::class;
  protected $cpuStatusReportsDataType = 'array';
  protected $deviceFilesType = ChromeOsDeviceDeviceFiles::class;
  protected $deviceFilesDataType = 'array';
  protected $diskVolumeReportsType = ChromeOsDeviceDiskVolumeReports::class;
  protected $diskVolumeReportsDataType = 'array';
  protected $lastKnownNetworkType = ChromeOsDeviceLastKnownNetwork::class;
  protected $lastKnownNetworkDataType = 'array';
  protected $osUpdateStatusType = OsUpdateStatus::class;
  protected $osUpdateStatusDataType = '';
  protected $recentUsersType = ChromeOsDeviceRecentUsers::class;
  protected $recentUsersDataType = 'array';
  protected $screenshotFilesType = ChromeOsDeviceScreenshotFiles::class;
  protected $screenshotFilesDataType = 'array';
  protected $systemRamFreeReportsType = ChromeOsDeviceSystemRamFreeReports::class;
  protected $systemRamFreeReportsDataType = 'array';
  protected $tpmVersionInfoType = ChromeOsDeviceTpmVersionInfo::class;
  protected $tpmVersionInfoDataType = '';
  /** @param ChromeOsDeviceActiveTimeRanges[] */
  public function setActiveTimeRanges($activeTimeRanges)
  {
    $this->activeTimeRanges = $activeTimeRanges;
  }
  /** @return ChromeOsDeviceActiveTimeRanges[] */
  public function getActiveTimeRanges()
  {
    return $this->activeTimeRanges;
  }
  /** @param string */
  public function setAnnotatedAssetId($annotatedAssetId)
  {
    $this->annotatedAssetId = $annotatedAssetId;
  }
  /** @return string */
  public function getAnnotatedAssetId()
  {
    return $this->annotatedAssetId;
  }
  /** @param string */
  public function setAnnotatedLocation($annotatedLocation)
  {
    $this->annotatedLocation = $annotatedLocation;
  }
  /** @return string */
  public function getAnnotatedLocation()
  {
    return $this->annotatedLocation;
  }
  /** @param string */
  public function setAnnotatedUser($annotatedUser)
  {
    $this->annotatedUser = $annotatedUser;
  }
  /** @return string */
  public function getAnnotatedUser()
  {
    return $this->annotatedUser;
  }
  /** @param string */
  public function setAutoUpdateExpiration($autoUpdateExpiration)
  {
    $this->autoUpdateExpiration = $autoUpdateExpiration;
  }
  /** @return string */
  public function getAutoUpdateExpiration()
  {
    return $this->autoUpdateExpiration;
  }
  /** @param string */
  public function setBootMode($bootMode)
  {
    $this->bootMode = $bootMode;
  }
  /** @return string */
  public function getBootMode()
  {
    return $this->bootMode;
  }
  /** @param ChromeOsDeviceCpuInfo[] */
  public function setCpuInfo($cpuInfo)
  {
    $this->cpuInfo = $cpuInfo;
  }
  /** @return ChromeOsDeviceCpuInfo[] */
  public function getCpuInfo()
  {
    return $this->cpuInfo;
  }
  /** @param ChromeOsDeviceCpuStatusReports[] */
  public function setCpuStatusReports($cpuStatusReports)
  {
    $this->cpuStatusReports = $cpuStatusReports;
  }
  /** @return ChromeOsDeviceCpuStatusReports[] */
  public function getCpuStatusReports()
  {
    return $this->cpuStatusReports;
  }
  /** @param ChromeOsDeviceDeviceFiles[] */
  public function setDeviceFiles($deviceFiles)
  {
    $this->deviceFiles = $deviceFiles;
  }
  /** @return ChromeOsDeviceDeviceFiles[] */
  public function getDeviceFiles()
  {
    return $this->deviceFiles;
  }
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param ChromeOsDeviceDiskVolumeReports[] */
  public function setDiskVolumeReports($diskVolumeReports)
  {
    $this->diskVolumeReports = $diskVolumeReports;
  }
  /** @return ChromeOsDeviceDiskVolumeReports[] */
  public function getDiskVolumeReports()
  {
    return $this->diskVolumeReports;
  }
  /** @param string */
  public function setDockMacAddress($dockMacAddress)
  {
    $this->dockMacAddress = $dockMacAddress;
  }
  /** @return string */
  public function getDockMacAddress()
  {
    return $this->dockMacAddress;
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
  public function setEthernetMacAddress($ethernetMacAddress)
  {
    $this->ethernetMacAddress = $ethernetMacAddress;
  }
  /** @return string */
  public function getEthernetMacAddress()
  {
    return $this->ethernetMacAddress;
  }
  /** @param string */
  public function setEthernetMacAddress0($ethernetMacAddress0)
  {
    $this->ethernetMacAddress0 = $ethernetMacAddress0;
  }
  /** @return string */
  public function getEthernetMacAddress0()
  {
    return $this->ethernetMacAddress0;
  }
  /** @param string */
  public function setFirmwareVersion($firmwareVersion)
  {
    $this->firmwareVersion = $firmwareVersion;
  }
  /** @return string */
  public function getFirmwareVersion()
  {
    return $this->firmwareVersion;
  }
  /** @param string */
  public function setFirstEnrollmentTime($firstEnrollmentTime)
  {
    $this->firstEnrollmentTime = $firstEnrollmentTime;
  }
  /** @return string */
  public function getFirstEnrollmentTime()
  {
    return $this->firstEnrollmentTime;
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
  public function setLastEnrollmentTime($lastEnrollmentTime)
  {
    $this->lastEnrollmentTime = $lastEnrollmentTime;
  }
  /** @return string */
  public function getLastEnrollmentTime()
  {
    return $this->lastEnrollmentTime;
  }
  /** @param ChromeOsDeviceLastKnownNetwork[] */
  public function setLastKnownNetwork($lastKnownNetwork)
  {
    $this->lastKnownNetwork = $lastKnownNetwork;
  }
  /** @return ChromeOsDeviceLastKnownNetwork[] */
  public function getLastKnownNetwork()
  {
    return $this->lastKnownNetwork;
  }
  /** @param string */
  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }
  /** @return string */
  public function getLastSync()
  {
    return $this->lastSync;
  }
  /** @param string */
  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
  }
  /** @return string */
  public function getMacAddress()
  {
    return $this->macAddress;
  }
  /** @param string */
  public function setManufactureDate($manufactureDate)
  {
    $this->manufactureDate = $manufactureDate;
  }
  /** @return string */
  public function getManufactureDate()
  {
    return $this->manufactureDate;
  }
  /** @param string */
  public function setMeid($meid)
  {
    $this->meid = $meid;
  }
  /** @return string */
  public function getMeid()
  {
    return $this->meid;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setOrderNumber($orderNumber)
  {
    $this->orderNumber = $orderNumber;
  }
  /** @return string */
  public function getOrderNumber()
  {
    return $this->orderNumber;
  }
  /** @param string */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param string */
  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }
  /** @return string */
  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }
  /** @param OsUpdateStatus */
  public function setOsUpdateStatus(OsUpdateStatus $osUpdateStatus)
  {
    $this->osUpdateStatus = $osUpdateStatus;
  }
  /** @return OsUpdateStatus */
  public function getOsUpdateStatus()
  {
    return $this->osUpdateStatus;
  }
  /** @param string */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return string */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /** @param string */
  public function setPlatformVersion($platformVersion)
  {
    $this->platformVersion = $platformVersion;
  }
  /** @return string */
  public function getPlatformVersion()
  {
    return $this->platformVersion;
  }
  /** @param ChromeOsDeviceRecentUsers[] */
  public function setRecentUsers($recentUsers)
  {
    $this->recentUsers = $recentUsers;
  }
  /** @return ChromeOsDeviceRecentUsers[] */
  public function getRecentUsers()
  {
    return $this->recentUsers;
  }
  /** @param ChromeOsDeviceScreenshotFiles[] */
  public function setScreenshotFiles($screenshotFiles)
  {
    $this->screenshotFiles = $screenshotFiles;
  }
  /** @return ChromeOsDeviceScreenshotFiles[] */
  public function getScreenshotFiles()
  {
    return $this->screenshotFiles;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setSupportEndDate($supportEndDate)
  {
    $this->supportEndDate = $supportEndDate;
  }
  /** @return string */
  public function getSupportEndDate()
  {
    return $this->supportEndDate;
  }
  /** @param ChromeOsDeviceSystemRamFreeReports[] */
  public function setSystemRamFreeReports($systemRamFreeReports)
  {
    $this->systemRamFreeReports = $systemRamFreeReports;
  }
  /** @return ChromeOsDeviceSystemRamFreeReports[] */
  public function getSystemRamFreeReports()
  {
    return $this->systemRamFreeReports;
  }
  /** @param string */
  public function setSystemRamTotal($systemRamTotal)
  {
    $this->systemRamTotal = $systemRamTotal;
  }
  /** @return string */
  public function getSystemRamTotal()
  {
    return $this->systemRamTotal;
  }
  /** @param ChromeOsDeviceTpmVersionInfo */
  public function setTpmVersionInfo(ChromeOsDeviceTpmVersionInfo $tpmVersionInfo)
  {
    $this->tpmVersionInfo = $tpmVersionInfo;
  }
  /** @return ChromeOsDeviceTpmVersionInfo */
  public function getTpmVersionInfo()
  {
    return $this->tpmVersionInfo;
  }
  /** @param bool */
  public function setWillAutoRenew($willAutoRenew)
  {
    $this->willAutoRenew = $willAutoRenew;
  }
  /** @return bool */
  public function getWillAutoRenew()
  {
    return $this->willAutoRenew;
  }
}

class ChromeOsDeviceAction extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $deprovisionReason;

  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setDeprovisionReason($deprovisionReason)
  {
    $this->deprovisionReason = $deprovisionReason;
  }
  /** @return string */
  public function getDeprovisionReason()
  {
    return $this->deprovisionReason;
  }
}

class ChromeOsDeviceActiveTimeRanges extends \Google\Model
{
  /** @var int */
  public $activeTime;
  /** @var string */
  public $date;

  /** @param int */
  public function setActiveTime($activeTime)
  {
    $this->activeTime = $activeTime;
  }
  /** @return int */
  public function getActiveTime()
  {
    return $this->activeTime;
  }
  /** @param string */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /** @return string */
  public function getDate()
  {
    return $this->date;
  }
}

class ChromeOsDeviceCpuInfo extends \Google\Collection
{
  /** @var string */
  public $architecture;
  /** @var ChromeOsDeviceCpuInfoLogicalCpus[] */
  public $logicalCpus;
  /** @var int */
  public $maxClockSpeedKhz;
  /** @var string */
  public $model;
  protected $collection_key = 'logicalCpus';
  protected $logicalCpusType = ChromeOsDeviceCpuInfoLogicalCpus::class;
  protected $logicalCpusDataType = 'array';
  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /** @param ChromeOsDeviceCpuInfoLogicalCpus[] */
  public function setLogicalCpus($logicalCpus)
  {
    $this->logicalCpus = $logicalCpus;
  }
  /** @return ChromeOsDeviceCpuInfoLogicalCpus[] */
  public function getLogicalCpus()
  {
    return $this->logicalCpus;
  }
  /** @param int */
  public function setMaxClockSpeedKhz($maxClockSpeedKhz)
  {
    $this->maxClockSpeedKhz = $maxClockSpeedKhz;
  }
  /** @return int */
  public function getMaxClockSpeedKhz()
  {
    return $this->maxClockSpeedKhz;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class ChromeOsDeviceCpuInfoLogicalCpus extends \Google\Collection
{
  /** @var ChromeOsDeviceCpuInfoLogicalCpusCStates[] */
  public $cStates;
  /** @var int */
  public $currentScalingFrequencyKhz;
  /** @var string */
  public $idleDuration;
  /** @var int */
  public $maxScalingFrequencyKhz;
  protected $collection_key = 'cStates';
  protected $cStatesType = ChromeOsDeviceCpuInfoLogicalCpusCStates::class;
  protected $cStatesDataType = 'array';
  /** @param ChromeOsDeviceCpuInfoLogicalCpusCStates[] */
  public function setCStates($cStates)
  {
    $this->cStates = $cStates;
  }
  /** @return ChromeOsDeviceCpuInfoLogicalCpusCStates[] */
  public function getCStates()
  {
    return $this->cStates;
  }
  /** @param int */
  public function setCurrentScalingFrequencyKhz($currentScalingFrequencyKhz)
  {
    $this->currentScalingFrequencyKhz = $currentScalingFrequencyKhz;
  }
  /** @return int */
  public function getCurrentScalingFrequencyKhz()
  {
    return $this->currentScalingFrequencyKhz;
  }
  /** @param string */
  public function setIdleDuration($idleDuration)
  {
    $this->idleDuration = $idleDuration;
  }
  /** @return string */
  public function getIdleDuration()
  {
    return $this->idleDuration;
  }
  /** @param int */
  public function setMaxScalingFrequencyKhz($maxScalingFrequencyKhz)
  {
    $this->maxScalingFrequencyKhz = $maxScalingFrequencyKhz;
  }
  /** @return int */
  public function getMaxScalingFrequencyKhz()
  {
    return $this->maxScalingFrequencyKhz;
  }
}

class ChromeOsDeviceCpuInfoLogicalCpusCStates extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $sessionDuration;

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
  public function setSessionDuration($sessionDuration)
  {
    $this->sessionDuration = $sessionDuration;
  }
  /** @return string */
  public function getSessionDuration()
  {
    return $this->sessionDuration;
  }
}

class ChromeOsDeviceCpuStatusReports extends \Google\Collection
{
  /** @var ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo[] */
  public $cpuTemperatureInfo;
  /** @var int[] */
  public $cpuUtilizationPercentageInfo;
  /** @var string */
  public $reportTime;
  protected $collection_key = 'cpuUtilizationPercentageInfo';
  protected $cpuTemperatureInfoType = ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo::class;
  protected $cpuTemperatureInfoDataType = 'array';
  /** @param ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo[] */
  public function setCpuTemperatureInfo($cpuTemperatureInfo)
  {
    $this->cpuTemperatureInfo = $cpuTemperatureInfo;
  }
  /** @return ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo[] */
  public function getCpuTemperatureInfo()
  {
    return $this->cpuTemperatureInfo;
  }
  /** @param int[] */
  public function setCpuUtilizationPercentageInfo($cpuUtilizationPercentageInfo)
  {
    $this->cpuUtilizationPercentageInfo = $cpuUtilizationPercentageInfo;
  }
  /** @return int[] */
  public function getCpuUtilizationPercentageInfo()
  {
    return $this->cpuUtilizationPercentageInfo;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

class ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var int */
  public $temperature;

  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
  }
  /** @param int */
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  /** @return int */
  public function getTemperature()
  {
    return $this->temperature;
  }
}

class ChromeOsDeviceDeviceFiles extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
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

class ChromeOsDeviceDiskVolumeReports extends \Google\Collection
{
  /** @var ChromeOsDeviceDiskVolumeReportsVolumeInfo[] */
  public $volumeInfo;
  protected $collection_key = 'volumeInfo';
  protected $volumeInfoType = ChromeOsDeviceDiskVolumeReportsVolumeInfo::class;
  protected $volumeInfoDataType = 'array';
  /** @param ChromeOsDeviceDiskVolumeReportsVolumeInfo[] */
  public function setVolumeInfo($volumeInfo)
  {
    $this->volumeInfo = $volumeInfo;
  }
  /** @return ChromeOsDeviceDiskVolumeReportsVolumeInfo[] */
  public function getVolumeInfo()
  {
    return $this->volumeInfo;
  }
}

class ChromeOsDeviceDiskVolumeReportsVolumeInfo extends \Google\Model
{
  /** @var string */
  public $storageFree;
  /** @var string */
  public $storageTotal;
  /** @var string */
  public $volumeId;

  /** @param string */
  public function setStorageFree($storageFree)
  {
    $this->storageFree = $storageFree;
  }
  /** @return string */
  public function getStorageFree()
  {
    return $this->storageFree;
  }
  /** @param string */
  public function setStorageTotal($storageTotal)
  {
    $this->storageTotal = $storageTotal;
  }
  /** @return string */
  public function getStorageTotal()
  {
    return $this->storageTotal;
  }
  /** @param string */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class ChromeOsDeviceLastKnownNetwork extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $wanIpAddress;

  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param string */
  public function setWanIpAddress($wanIpAddress)
  {
    $this->wanIpAddress = $wanIpAddress;
  }
  /** @return string */
  public function getWanIpAddress()
  {
    return $this->wanIpAddress;
  }
}

class ChromeOsDeviceRecentUsers extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $type;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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

class ChromeOsDeviceScreenshotFiles extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
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

class ChromeOsDeviceSystemRamFreeReports extends \Google\Collection
{
  /** @var string */
  public $reportTime;
  /** @var string[] */
  public $systemRamFreeInfo;
  protected $collection_key = 'systemRamFreeInfo';
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param string[] */
  public function setSystemRamFreeInfo($systemRamFreeInfo)
  {
    $this->systemRamFreeInfo = $systemRamFreeInfo;
  }
  /** @return string[] */
  public function getSystemRamFreeInfo()
  {
    return $this->systemRamFreeInfo;
  }
}

class ChromeOsDeviceTpmVersionInfo extends \Google\Model
{
  /** @var string */
  public $family;
  /** @var string */
  public $firmwareVersion;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $specLevel;
  /** @var string */
  public $tpmModel;
  /** @var string */
  public $vendorSpecific;

  /** @param string */
  public function setFamily($family)
  {
    $this->family = $family;
  }
  /** @return string */
  public function getFamily()
  {
    return $this->family;
  }
  /** @param string */
  public function setFirmwareVersion($firmwareVersion)
  {
    $this->firmwareVersion = $firmwareVersion;
  }
  /** @return string */
  public function getFirmwareVersion()
  {
    return $this->firmwareVersion;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setSpecLevel($specLevel)
  {
    $this->specLevel = $specLevel;
  }
  /** @return string */
  public function getSpecLevel()
  {
    return $this->specLevel;
  }
  /** @param string */
  public function setTpmModel($tpmModel)
  {
    $this->tpmModel = $tpmModel;
  }
  /** @return string */
  public function getTpmModel()
  {
    return $this->tpmModel;
  }
  /** @param string */
  public function setVendorSpecific($vendorSpecific)
  {
    $this->vendorSpecific = $vendorSpecific;
  }
  /** @return string */
  public function getVendorSpecific()
  {
    return $this->vendorSpecific;
  }
}

class ChromeOsDevices extends \Google\Collection
{
  /** @var ChromeOsDevice[] */
  public $chromeosdevices;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'chromeosdevices';
  protected $chromeosdevicesType = ChromeOsDevice::class;
  protected $chromeosdevicesDataType = 'array';
  /** @param ChromeOsDevice[] */
  public function setChromeosdevices($chromeosdevices)
  {
    $this->chromeosdevices = $chromeosdevices;
  }
  /** @return ChromeOsDevice[] */
  public function getChromeosdevices()
  {
    return $this->chromeosdevices;
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

class ChromeOsMoveDevicesToOu extends \Google\Collection
{
  /** @var string[] */
  public $deviceIds;
  protected $collection_key = 'deviceIds';
  /** @param string[] */
  public function setDeviceIds($deviceIds)
  {
    $this->deviceIds = $deviceIds;
  }
  /** @return string[] */
  public function getDeviceIds()
  {
    return $this->deviceIds;
  }
}

class CreatePrintServerRequest extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var PrintServer */
  public $printServer;
  protected $printServerType = PrintServer::class;
  protected $printServerDataType = '';
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
  /** @param PrintServer */
  public function setPrintServer(PrintServer $printServer)
  {
    $this->printServer = $printServer;
  }
  /** @return PrintServer */
  public function getPrintServer()
  {
    return $this->printServer;
  }
}

class CreatePrinterRequest extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var Printer */
  public $printer;
  protected $printerType = Printer::class;
  protected $printerDataType = '';
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
  /** @param Printer */
  public function setPrinter(Printer $printer)
  {
    $this->printer = $printer;
  }
  /** @return Printer */
  public function getPrinter()
  {
    return $this->printer;
  }
}

class Customer extends \Google\Model
{
  /** @var string */
  public $alternateEmail;
  /** @var string */
  public $customerCreationTime;
  /** @var string */
  public $customerDomain;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $language;
  /** @var string */
  public $phoneNumber;
  /** @var CustomerPostalAddress */
  public $postalAddress;
  protected $postalAddressType = CustomerPostalAddress::class;
  protected $postalAddressDataType = '';
  /** @param string */
  public function setAlternateEmail($alternateEmail)
  {
    $this->alternateEmail = $alternateEmail;
  }
  /** @return string */
  public function getAlternateEmail()
  {
    return $this->alternateEmail;
  }
  /** @param string */
  public function setCustomerCreationTime($customerCreationTime)
  {
    $this->customerCreationTime = $customerCreationTime;
  }
  /** @return string */
  public function getCustomerCreationTime()
  {
    return $this->customerCreationTime;
  }
  /** @param string */
  public function setCustomerDomain($customerDomain)
  {
    $this->customerDomain = $customerDomain;
  }
  /** @return string */
  public function getCustomerDomain()
  {
    return $this->customerDomain;
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
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param CustomerPostalAddress */
  public function setPostalAddress(CustomerPostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  /** @return CustomerPostalAddress */
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
}

class CustomerPostalAddress extends \Google\Model
{
  /** @var string */
  public $addressLine1;
  /** @var string */
  public $addressLine2;
  /** @var string */
  public $addressLine3;
  /** @var string */
  public $contactName;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organizationName;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $region;

  /** @param string */
  public function setAddressLine1($addressLine1)
  {
    $this->addressLine1 = $addressLine1;
  }
  /** @return string */
  public function getAddressLine1()
  {
    return $this->addressLine1;
  }
  /** @param string */
  public function setAddressLine2($addressLine2)
  {
    $this->addressLine2 = $addressLine2;
  }
  /** @return string */
  public function getAddressLine2()
  {
    return $this->addressLine2;
  }
  /** @param string */
  public function setAddressLine3($addressLine3)
  {
    $this->addressLine3 = $addressLine3;
  }
  /** @return string */
  public function getAddressLine3()
  {
    return $this->addressLine3;
  }
  /** @param string */
  public function setContactName($contactName)
  {
    $this->contactName = $contactName;
  }
  /** @return string */
  public function getContactName()
  {
    return $this->contactName;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
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
  public function setOrganizationName($organizationName)
  {
    $this->organizationName = $organizationName;
  }
  /** @return string */
  public function getOrganizationName()
  {
    return $this->organizationName;
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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
}

class DirectoryChromeosdevicesCommand extends \Google\Model
{
  /** @var string */
  public $commandExpireTime;
  /** @var string */
  public $commandId;
  /** @var DirectoryChromeosdevicesCommandResult */
  public $commandResult;
  /** @var string */
  public $issueTime;
  /** @var string */
  public $payload;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  protected $commandResultType = DirectoryChromeosdevicesCommandResult::class;
  protected $commandResultDataType = '';
  /** @param string */
  public function setCommandExpireTime($commandExpireTime)
  {
    $this->commandExpireTime = $commandExpireTime;
  }
  /** @return string */
  public function getCommandExpireTime()
  {
    return $this->commandExpireTime;
  }
  /** @param string */
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  /** @return string */
  public function getCommandId()
  {
    return $this->commandId;
  }
  /** @param DirectoryChromeosdevicesCommandResult */
  public function setCommandResult(DirectoryChromeosdevicesCommandResult $commandResult)
  {
    $this->commandResult = $commandResult;
  }
  /** @return DirectoryChromeosdevicesCommandResult */
  public function getCommandResult()
  {
    return $this->commandResult;
  }
  /** @param string */
  public function setIssueTime($issueTime)
  {
    $this->issueTime = $issueTime;
  }
  /** @return string */
  public function getIssueTime()
  {
    return $this->issueTime;
  }
  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
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

class DirectoryChromeosdevicesCommandResult extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $executeTime;
  /** @var string */
  public $result;

  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setExecuteTime($executeTime)
  {
    $this->executeTime = $executeTime;
  }
  /** @return string */
  public function getExecuteTime()
  {
    return $this->executeTime;
  }
  /** @param string */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
  }
}

class DirectoryChromeosdevicesIssueCommandRequest extends \Google\Model
{
  /** @var string */
  public $commandType;
  /** @var string */
  public $payload;

  /** @param string */
  public function setCommandType($commandType)
  {
    $this->commandType = $commandType;
  }
  /** @return string */
  public function getCommandType()
  {
    return $this->commandType;
  }
  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
  }
}

class DirectoryChromeosdevicesIssueCommandResponse extends \Google\Model
{
  /** @var string */
  public $commandId;

  /** @param string */
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  /** @return string */
  public function getCommandId()
  {
    return $this->commandId;
  }
}

class DomainAlias extends \Google\Model
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $domainAliasName;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $parentDomainName;
  /** @var bool */
  public $verified;

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
  /** @param string */
  public function setDomainAliasName($domainAliasName)
  {
    $this->domainAliasName = $domainAliasName;
  }
  /** @return string */
  public function getDomainAliasName()
  {
    return $this->domainAliasName;
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
  public function setParentDomainName($parentDomainName)
  {
    $this->parentDomainName = $parentDomainName;
  }
  /** @return string */
  public function getParentDomainName()
  {
    return $this->parentDomainName;
  }
  /** @param bool */
  public function setVerified($verified)
  {
    $this->verified = $verified;
  }
  /** @return bool */
  public function getVerified()
  {
    return $this->verified;
  }
}

class DomainAliases extends \Google\Collection
{
  /** @var DomainAlias[] */
  public $domainAliases;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  protected $collection_key = 'domainAliases';
  protected $domainAliasesType = DomainAlias::class;
  protected $domainAliasesDataType = 'array';
  /** @param DomainAlias[] */
  public function setDomainAliases($domainAliases)
  {
    $this->domainAliases = $domainAliases;
  }
  /** @return DomainAlias[] */
  public function getDomainAliases()
  {
    return $this->domainAliases;
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
}

class Domains extends \Google\Collection
{
  /** @var string */
  public $creationTime;
  /** @var DomainAlias[] */
  public $domainAliases;
  /** @var string */
  public $domainName;
  /** @var string */
  public $etag;
  /** @var bool */
  public $isPrimary;
  /** @var string */
  public $kind;
  /** @var bool */
  public $verified;
  protected $collection_key = 'domainAliases';
  protected $domainAliasesType = DomainAlias::class;
  protected $domainAliasesDataType = 'array';
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
  /** @param DomainAlias[] */
  public function setDomainAliases($domainAliases)
  {
    $this->domainAliases = $domainAliases;
  }
  /** @return DomainAlias[] */
  public function getDomainAliases()
  {
    return $this->domainAliases;
  }
  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
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
  /** @param bool */
  public function setIsPrimary($isPrimary)
  {
    $this->isPrimary = $isPrimary;
  }
  /** @return bool */
  public function getIsPrimary()
  {
    return $this->isPrimary;
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
  /** @param bool */
  public function setVerified($verified)
  {
    $this->verified = $verified;
  }
  /** @return bool */
  public function getVerified()
  {
    return $this->verified;
  }
}

class Domains2 extends \Google\Collection
{
  /** @var Domains[] */
  public $domains;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  protected $collection_key = 'domains';
  protected $domainsType = Domains::class;
  protected $domainsDataType = 'array';
  /** @param Domains[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return Domains[] */
  public function getDomains()
  {
    return $this->domains;
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
}

class FailureInfo extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var Printer */
  public $printer;
  /** @var string */
  public $printerId;
  protected $printerType = Printer::class;
  protected $printerDataType = '';
  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param Printer */
  public function setPrinter(Printer $printer)
  {
    $this->printer = $printer;
  }
  /** @return Printer */
  public function getPrinter()
  {
    return $this->printer;
  }
  /** @param string */
  public function setPrinterId($printerId)
  {
    $this->printerId = $printerId;
  }
  /** @return string */
  public function getPrinterId()
  {
    return $this->printerId;
  }
}

class Feature extends \Google\Model
{
  /** @var string */
  public $etags;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

  /** @param string */
  public function setEtags($etags)
  {
    $this->etags = $etags;
  }
  /** @return string */
  public function getEtags()
  {
    return $this->etags;
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
}

class FeatureInstance extends \Google\Model
{
  /** @var Feature */
  public $feature;
  protected $featureType = Feature::class;
  protected $featureDataType = '';
  /** @param Feature */
  public function setFeature(Feature $feature)
  {
    $this->feature = $feature;
  }
  /** @return Feature */
  public function getFeature()
  {
    return $this->feature;
  }
}

class FeatureRename extends \Google\Model
{
  /** @var string */
  public $newName;

  /** @param string */
  public function setNewName($newName)
  {
    $this->newName = $newName;
  }
  /** @return string */
  public function getNewName()
  {
    return $this->newName;
  }
}

class Features extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Feature[] */
  public $features;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'features';
  protected $featuresType = Feature::class;
  protected $featuresDataType = 'array';
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
  /** @param Feature[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return Feature[] */
  public function getFeatures()
  {
    return $this->features;
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

class Group extends \Google\Collection
{
  /** @var bool */
  public $adminCreated;
  /** @var string[] */
  public $aliases;
  /** @var string */
  public $description;
  /** @var string */
  public $directMembersCount;
  /** @var string */
  public $email;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string[] */
  public $nonEditableAliases;
  protected $collection_key = 'nonEditableAliases';
  /** @param bool */
  public function setAdminCreated($adminCreated)
  {
    $this->adminCreated = $adminCreated;
  }
  /** @return bool */
  public function getAdminCreated()
  {
    return $this->adminCreated;
  }
  /** @param string[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return string[] */
  public function getAliases()
  {
    return $this->aliases;
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
  /** @param string */
  public function setDirectMembersCount($directMembersCount)
  {
    $this->directMembersCount = $directMembersCount;
  }
  /** @return string */
  public function getDirectMembersCount()
  {
    return $this->directMembersCount;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string[] */
  public function setNonEditableAliases($nonEditableAliases)
  {
    $this->nonEditableAliases = $nonEditableAliases;
  }
  /** @return string[] */
  public function getNonEditableAliases()
  {
    return $this->nonEditableAliases;
  }
}

class GroupAlias extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $primaryEmail;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
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
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}

class Groups extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Group[] */
  public $groups;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'groups';
  protected $groupsType = Group::class;
  protected $groupsDataType = 'array';
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
  /** @param Group[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return Group[] */
  public function getGroups()
  {
    return $this->groups;
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

class ListPrintServersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PrintServer[] */
  public $printServers;
  protected $collection_key = 'printServers';
  protected $printServersType = PrintServer::class;
  protected $printServersDataType = 'array';
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
  /** @param PrintServer[] */
  public function setPrintServers($printServers)
  {
    $this->printServers = $printServers;
  }
  /** @return PrintServer[] */
  public function getPrintServers()
  {
    return $this->printServers;
  }
}

class ListPrinterModelsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PrinterModel[] */
  public $printerModels;
  protected $collection_key = 'printerModels';
  protected $printerModelsType = PrinterModel::class;
  protected $printerModelsDataType = 'array';
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
  /** @param PrinterModel[] */
  public function setPrinterModels($printerModels)
  {
    $this->printerModels = $printerModels;
  }
  /** @return PrinterModel[] */
  public function getPrinterModels()
  {
    return $this->printerModels;
  }
}

class ListPrintersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Printer[] */
  public $printers;
  protected $collection_key = 'printers';
  protected $printersType = Printer::class;
  protected $printersDataType = 'array';
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
  /** @param Printer[] */
  public function setPrinters($printers)
  {
    $this->printers = $printers;
  }
  /** @return Printer[] */
  public function getPrinters()
  {
    return $this->printers;
  }
}

class Member extends \Google\Model
{
  /** @var string */
  public $deliverySettings;
  /** @var string */
  public $email;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $role;
  /** @var string */
  public $status;
  /** @var string */
  public $type;
  protected $internal_gapi_mappings = [
        "deliverySettings" => "delivery_settings",
  ];
  /** @param string */
  public function setDeliverySettings($deliverySettings)
  {
    $this->deliverySettings = $deliverySettings;
  }
  /** @return string */
  public function getDeliverySettings()
  {
    return $this->deliverySettings;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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

class Members extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var Member[] */
  public $members;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'members';
  protected $membersType = Member::class;
  protected $membersDataType = 'array';
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
  /** @param Member[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return Member[] */
  public function getMembers()
  {
    return $this->members;
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

class MembersHasMember extends \Google\Model
{
  /** @var bool */
  public $isMember;

  /** @param bool */
  public function setIsMember($isMember)
  {
    $this->isMember = $isMember;
  }
  /** @return bool */
  public function getIsMember()
  {
    return $this->isMember;
  }
}

class MobileDevice extends \Google\Collection
{
  /** @var bool */
  public $adbStatus;
  /** @var MobileDeviceApplications[] */
  public $applications;
  /** @var string */
  public $basebandVersion;
  /** @var string */
  public $bootloaderVersion;
  /** @var string */
  public $brand;
  /** @var string */
  public $buildNumber;
  /** @var string */
  public $defaultLanguage;
  /** @var bool */
  public $developerOptionsStatus;
  /** @var string */
  public $deviceCompromisedStatus;
  /** @var string */
  public $deviceId;
  /** @var string */
  public $devicePasswordStatus;
  /** @var string[] */
  public $email;
  /** @var string */
  public $encryptionStatus;
  /** @var string */
  public $etag;
  /** @var string */
  public $firstSync;
  /** @var string */
  public $hardware;
  /** @var string */
  public $hardwareId;
  /** @var string */
  public $imei;
  /** @var string */
  public $kernelVersion;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastSync;
  /** @var bool */
  public $managedAccountIsOnOwnerProfile;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $meid;
  /** @var string */
  public $model;
  /** @var string[] */
  public $name;
  /** @var string */
  public $networkOperator;
  /** @var string */
  public $os;
  /** @var string[] */
  public $otherAccountsInfo;
  /** @var string */
  public $privilege;
  /** @var string */
  public $releaseVersion;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $securityPatchLevel;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $status;
  /** @var bool */
  public $supportsWorkProfile;
  /** @var string */
  public $type;
  /** @var bool */
  public $unknownSourcesStatus;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $wifiMacAddress;
  protected $collection_key = 'otherAccountsInfo';
  protected $applicationsType = MobileDeviceApplications::class;
  protected $applicationsDataType = 'array';
  /** @param bool */
  public function setAdbStatus($adbStatus)
  {
    $this->adbStatus = $adbStatus;
  }
  /** @return bool */
  public function getAdbStatus()
  {
    return $this->adbStatus;
  }
  /** @param MobileDeviceApplications[] */
  public function setApplications($applications)
  {
    $this->applications = $applications;
  }
  /** @return MobileDeviceApplications[] */
  public function getApplications()
  {
    return $this->applications;
  }
  /** @param string */
  public function setBasebandVersion($basebandVersion)
  {
    $this->basebandVersion = $basebandVersion;
  }
  /** @return string */
  public function getBasebandVersion()
  {
    return $this->basebandVersion;
  }
  /** @param string */
  public function setBootloaderVersion($bootloaderVersion)
  {
    $this->bootloaderVersion = $bootloaderVersion;
  }
  /** @return string */
  public function getBootloaderVersion()
  {
    return $this->bootloaderVersion;
  }
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setBuildNumber($buildNumber)
  {
    $this->buildNumber = $buildNumber;
  }
  /** @return string */
  public function getBuildNumber()
  {
    return $this->buildNumber;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  /** @param bool */
  public function setDeveloperOptionsStatus($developerOptionsStatus)
  {
    $this->developerOptionsStatus = $developerOptionsStatus;
  }
  /** @return bool */
  public function getDeveloperOptionsStatus()
  {
    return $this->developerOptionsStatus;
  }
  /** @param string */
  public function setDeviceCompromisedStatus($deviceCompromisedStatus)
  {
    $this->deviceCompromisedStatus = $deviceCompromisedStatus;
  }
  /** @return string */
  public function getDeviceCompromisedStatus()
  {
    return $this->deviceCompromisedStatus;
  }
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDevicePasswordStatus($devicePasswordStatus)
  {
    $this->devicePasswordStatus = $devicePasswordStatus;
  }
  /** @return string */
  public function getDevicePasswordStatus()
  {
    return $this->devicePasswordStatus;
  }
  /** @param string[] */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string[] */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setEncryptionStatus($encryptionStatus)
  {
    $this->encryptionStatus = $encryptionStatus;
  }
  /** @return string */
  public function getEncryptionStatus()
  {
    return $this->encryptionStatus;
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
  public function setFirstSync($firstSync)
  {
    $this->firstSync = $firstSync;
  }
  /** @return string */
  public function getFirstSync()
  {
    return $this->firstSync;
  }
  /** @param string */
  public function setHardware($hardware)
  {
    $this->hardware = $hardware;
  }
  /** @return string */
  public function getHardware()
  {
    return $this->hardware;
  }
  /** @param string */
  public function setHardwareId($hardwareId)
  {
    $this->hardwareId = $hardwareId;
  }
  /** @return string */
  public function getHardwareId()
  {
    return $this->hardwareId;
  }
  /** @param string */
  public function setImei($imei)
  {
    $this->imei = $imei;
  }
  /** @return string */
  public function getImei()
  {
    return $this->imei;
  }
  /** @param string */
  public function setKernelVersion($kernelVersion)
  {
    $this->kernelVersion = $kernelVersion;
  }
  /** @return string */
  public function getKernelVersion()
  {
    return $this->kernelVersion;
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
  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }
  /** @return string */
  public function getLastSync()
  {
    return $this->lastSync;
  }
  /** @param bool */
  public function setManagedAccountIsOnOwnerProfile($managedAccountIsOnOwnerProfile)
  {
    $this->managedAccountIsOnOwnerProfile = $managedAccountIsOnOwnerProfile;
  }
  /** @return bool */
  public function getManagedAccountIsOnOwnerProfile()
  {
    return $this->managedAccountIsOnOwnerProfile;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setMeid($meid)
  {
    $this->meid = $meid;
  }
  /** @return string */
  public function getMeid()
  {
    return $this->meid;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string[] */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string[] */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNetworkOperator($networkOperator)
  {
    $this->networkOperator = $networkOperator;
  }
  /** @return string */
  public function getNetworkOperator()
  {
    return $this->networkOperator;
  }
  /** @param string */
  public function setOs($os)
  {
    $this->os = $os;
  }
  /** @return string */
  public function getOs()
  {
    return $this->os;
  }
  /** @param string[] */
  public function setOtherAccountsInfo($otherAccountsInfo)
  {
    $this->otherAccountsInfo = $otherAccountsInfo;
  }
  /** @return string[] */
  public function getOtherAccountsInfo()
  {
    return $this->otherAccountsInfo;
  }
  /** @param string */
  public function setPrivilege($privilege)
  {
    $this->privilege = $privilege;
  }
  /** @return string */
  public function getPrivilege()
  {
    return $this->privilege;
  }
  /** @param string */
  public function setReleaseVersion($releaseVersion)
  {
    $this->releaseVersion = $releaseVersion;
  }
  /** @return string */
  public function getReleaseVersion()
  {
    return $this->releaseVersion;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setSecurityPatchLevel($securityPatchLevel)
  {
    $this->securityPatchLevel = $securityPatchLevel;
  }
  /** @return string */
  public function getSecurityPatchLevel()
  {
    return $this->securityPatchLevel;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param bool */
  public function setSupportsWorkProfile($supportsWorkProfile)
  {
    $this->supportsWorkProfile = $supportsWorkProfile;
  }
  /** @return bool */
  public function getSupportsWorkProfile()
  {
    return $this->supportsWorkProfile;
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
  /** @param bool */
  public function setUnknownSourcesStatus($unknownSourcesStatus)
  {
    $this->unknownSourcesStatus = $unknownSourcesStatus;
  }
  /** @return bool */
  public function getUnknownSourcesStatus()
  {
    return $this->unknownSourcesStatus;
  }
  /** @param string */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return string */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /** @param string */
  public function setWifiMacAddress($wifiMacAddress)
  {
    $this->wifiMacAddress = $wifiMacAddress;
  }
  /** @return string */
  public function getWifiMacAddress()
  {
    return $this->wifiMacAddress;
  }
}

class MobileDeviceAction extends \Google\Model
{
  /** @var string */
  public $action;

  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
}

class MobileDeviceApplications extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $packageName;
  /** @var string[] */
  public $permission;
  /** @var int */
  public $versionCode;
  /** @var string */
  public $versionName;
  protected $collection_key = 'permission';
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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string[] */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string[] */
  public function getPermission()
  {
    return $this->permission;
  }
  /** @param int */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return int */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /** @param string */
  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }
  /** @return string */
  public function getVersionName()
  {
    return $this->versionName;
  }
}

class MobileDevices extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var MobileDevice[] */
  public $mobiledevices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'mobiledevices';
  protected $mobiledevicesType = MobileDevice::class;
  protected $mobiledevicesDataType = 'array';
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
  /** @param MobileDevice[] */
  public function setMobiledevices($mobiledevices)
  {
    $this->mobiledevices = $mobiledevices;
  }
  /** @return MobileDevice[] */
  public function getMobiledevices()
  {
    return $this->mobiledevices;
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

class OrgUnit extends \Google\Model
{
  /** @var bool */
  public $blockInheritance;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $orgUnitId;
  /** @var string */
  public $orgUnitPath;
  /** @var string */
  public $parentOrgUnitId;
  /** @var string */
  public $parentOrgUnitPath;

  /** @param bool */
  public function setBlockInheritance($blockInheritance)
  {
    $this->blockInheritance = $blockInheritance;
  }
  /** @return bool */
  public function getBlockInheritance()
  {
    return $this->blockInheritance;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param string */
  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }
  /** @return string */
  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }
  /** @param string */
  public function setParentOrgUnitId($parentOrgUnitId)
  {
    $this->parentOrgUnitId = $parentOrgUnitId;
  }
  /** @return string */
  public function getParentOrgUnitId()
  {
    return $this->parentOrgUnitId;
  }
  /** @param string */
  public function setParentOrgUnitPath($parentOrgUnitPath)
  {
    $this->parentOrgUnitPath = $parentOrgUnitPath;
  }
  /** @return string */
  public function getParentOrgUnitPath()
  {
    return $this->parentOrgUnitPath;
  }
}

class OrgUnits extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var OrgUnit[] */
  public $organizationUnits;
  protected $collection_key = 'organizationUnits';
  protected $organizationUnitsType = OrgUnit::class;
  protected $organizationUnitsDataType = 'array';
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
  /** @param OrgUnit[] */
  public function setOrganizationUnits($organizationUnits)
  {
    $this->organizationUnits = $organizationUnits;
  }
  /** @return OrgUnit[] */
  public function getOrganizationUnits()
  {
    return $this->organizationUnits;
  }
}

class OsUpdateStatus extends \Google\Model
{
  /** @var string */
  public $rebootTime;
  /** @var string */
  public $state;
  /** @var string */
  public $targetKioskAppVersion;
  /** @var string */
  public $targetOsVersion;
  /** @var string */
  public $updateCheckTime;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setRebootTime($rebootTime)
  {
    $this->rebootTime = $rebootTime;
  }
  /** @return string */
  public function getRebootTime()
  {
    return $this->rebootTime;
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
  public function setTargetKioskAppVersion($targetKioskAppVersion)
  {
    $this->targetKioskAppVersion = $targetKioskAppVersion;
  }
  /** @return string */
  public function getTargetKioskAppVersion()
  {
    return $this->targetKioskAppVersion;
  }
  /** @param string */
  public function setTargetOsVersion($targetOsVersion)
  {
    $this->targetOsVersion = $targetOsVersion;
  }
  /** @return string */
  public function getTargetOsVersion()
  {
    return $this->targetOsVersion;
  }
  /** @param string */
  public function setUpdateCheckTime($updateCheckTime)
  {
    $this->updateCheckTime = $updateCheckTime;
  }
  /** @return string */
  public function getUpdateCheckTime()
  {
    return $this->updateCheckTime;
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

class PrintServer extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $orgUnitId;
  /** @var string */
  public $uri;

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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
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

class PrintServerFailureInfo extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var PrintServer */
  public $printServer;
  /** @var string */
  public $printServerId;
  protected $printServerType = PrintServer::class;
  protected $printServerDataType = '';
  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param PrintServer */
  public function setPrintServer(PrintServer $printServer)
  {
    $this->printServer = $printServer;
  }
  /** @return PrintServer */
  public function getPrintServer()
  {
    return $this->printServer;
  }
  /** @param string */
  public function setPrintServerId($printServerId)
  {
    $this->printServerId = $printServerId;
  }
  /** @return string */
  public function getPrintServerId()
  {
    return $this->printServerId;
  }
}

class Printer extends \Google\Collection
{
  /** @var AuxiliaryMessage[] */
  public $auxiliaryMessages;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var string */
  public $makeAndModel;
  /** @var string */
  public $name;
  /** @var string */
  public $orgUnitId;
  /** @var string */
  public $uri;
  /** @var bool */
  public $useDriverlessConfig;
  protected $collection_key = 'auxiliaryMessages';
  protected $auxiliaryMessagesType = AuxiliaryMessage::class;
  protected $auxiliaryMessagesDataType = 'array';
  /** @param AuxiliaryMessage[] */
  public function setAuxiliaryMessages($auxiliaryMessages)
  {
    $this->auxiliaryMessages = $auxiliaryMessages;
  }
  /** @return AuxiliaryMessage[] */
  public function getAuxiliaryMessages()
  {
    return $this->auxiliaryMessages;
  }
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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
  public function setMakeAndModel($makeAndModel)
  {
    $this->makeAndModel = $makeAndModel;
  }
  /** @return string */
  public function getMakeAndModel()
  {
    return $this->makeAndModel;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
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
  /** @param bool */
  public function setUseDriverlessConfig($useDriverlessConfig)
  {
    $this->useDriverlessConfig = $useDriverlessConfig;
  }
  /** @return bool */
  public function getUseDriverlessConfig()
  {
    return $this->useDriverlessConfig;
  }
}

class PrinterModel extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $makeAndModel;
  /** @var string */
  public $manufacturer;

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
  public function setMakeAndModel($makeAndModel)
  {
    $this->makeAndModel = $makeAndModel;
  }
  /** @return string */
  public function getMakeAndModel()
  {
    return $this->makeAndModel;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
}

class Privilege extends \Google\Collection
{
  /** @var Privilege[] */
  public $childPrivileges;
  /** @var string */
  public $etag;
  /** @var bool */
  public $isOuScopable;
  /** @var string */
  public $kind;
  /** @var string */
  public $privilegeName;
  /** @var string */
  public $serviceId;
  /** @var string */
  public $serviceName;
  protected $collection_key = 'childPrivileges';
  protected $childPrivilegesType = Privilege::class;
  protected $childPrivilegesDataType = 'array';
  /** @param Privilege[] */
  public function setChildPrivileges($childPrivileges)
  {
    $this->childPrivileges = $childPrivileges;
  }
  /** @return Privilege[] */
  public function getChildPrivileges()
  {
    return $this->childPrivileges;
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
  /** @param bool */
  public function setIsOuScopable($isOuScopable)
  {
    $this->isOuScopable = $isOuScopable;
  }
  /** @return bool */
  public function getIsOuScopable()
  {
    return $this->isOuScopable;
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
  public function setPrivilegeName($privilegeName)
  {
    $this->privilegeName = $privilegeName;
  }
  /** @return string */
  public function getPrivilegeName()
  {
    return $this->privilegeName;
  }
  /** @param string */
  public function setServiceId($serviceId)
  {
    $this->serviceId = $serviceId;
  }
  /** @return string */
  public function getServiceId()
  {
    return $this->serviceId;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
}

class Privileges extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Privilege[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Privilege::class;
  protected $itemsDataType = 'array';
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
  /** @param Privilege[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Privilege[] */
  public function getItems()
  {
    return $this->items;
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
}

class Role extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $isSuperAdminRole;
  /** @var bool */
  public $isSystemRole;
  /** @var string */
  public $kind;
  /** @var string */
  public $roleDescription;
  /** @var string */
  public $roleId;
  /** @var string */
  public $roleName;
  /** @var RoleRolePrivileges[] */
  public $rolePrivileges;
  protected $collection_key = 'rolePrivileges';
  protected $rolePrivilegesType = RoleRolePrivileges::class;
  protected $rolePrivilegesDataType = 'array';
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
  /** @param bool */
  public function setIsSuperAdminRole($isSuperAdminRole)
  {
    $this->isSuperAdminRole = $isSuperAdminRole;
  }
  /** @return bool */
  public function getIsSuperAdminRole()
  {
    return $this->isSuperAdminRole;
  }
  /** @param bool */
  public function setIsSystemRole($isSystemRole)
  {
    $this->isSystemRole = $isSystemRole;
  }
  /** @return bool */
  public function getIsSystemRole()
  {
    return $this->isSystemRole;
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
  public function setRoleDescription($roleDescription)
  {
    $this->roleDescription = $roleDescription;
  }
  /** @return string */
  public function getRoleDescription()
  {
    return $this->roleDescription;
  }
  /** @param string */
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;
  }
  /** @return string */
  public function getRoleId()
  {
    return $this->roleId;
  }
  /** @param string */
  public function setRoleName($roleName)
  {
    $this->roleName = $roleName;
  }
  /** @return string */
  public function getRoleName()
  {
    return $this->roleName;
  }
  /** @param RoleRolePrivileges[] */
  public function setRolePrivileges($rolePrivileges)
  {
    $this->rolePrivileges = $rolePrivileges;
  }
  /** @return RoleRolePrivileges[] */
  public function getRolePrivileges()
  {
    return $this->rolePrivileges;
  }
}

class RoleAssignment extends \Google\Model
{
  /** @var string */
  public $assignedTo;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $orgUnitId;
  /** @var string */
  public $roleAssignmentId;
  /** @var string */
  public $roleId;
  /** @var string */
  public $scopeType;

  /** @param string */
  public function setAssignedTo($assignedTo)
  {
    $this->assignedTo = $assignedTo;
  }
  /** @return string */
  public function getAssignedTo()
  {
    return $this->assignedTo;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param string */
  public function setRoleAssignmentId($roleAssignmentId)
  {
    $this->roleAssignmentId = $roleAssignmentId;
  }
  /** @return string */
  public function getRoleAssignmentId()
  {
    return $this->roleAssignmentId;
  }
  /** @param string */
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;
  }
  /** @return string */
  public function getRoleId()
  {
    return $this->roleId;
  }
  /** @param string */
  public function setScopeType($scopeType)
  {
    $this->scopeType = $scopeType;
  }
  /** @return string */
  public function getScopeType()
  {
    return $this->scopeType;
  }
}

class RoleAssignments extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var RoleAssignment[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = RoleAssignment::class;
  protected $itemsDataType = 'array';
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
  /** @param RoleAssignment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return RoleAssignment[] */
  public function getItems()
  {
    return $this->items;
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

class RoleRolePrivileges extends \Google\Model
{
  /** @var string */
  public $privilegeName;
  /** @var string */
  public $serviceId;

  /** @param string */
  public function setPrivilegeName($privilegeName)
  {
    $this->privilegeName = $privilegeName;
  }
  /** @return string */
  public function getPrivilegeName()
  {
    return $this->privilegeName;
  }
  /** @param string */
  public function setServiceId($serviceId)
  {
    $this->serviceId = $serviceId;
  }
  /** @return string */
  public function getServiceId()
  {
    return $this->serviceId;
  }
}

class Roles extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Role[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Role::class;
  protected $itemsDataType = 'array';
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
  /** @param Role[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Role[] */
  public function getItems()
  {
    return $this->items;
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

class Schema extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var SchemaFieldSpec[] */
  public $fields;
  /** @var string */
  public $kind;
  /** @var string */
  public $schemaId;
  /** @var string */
  public $schemaName;
  protected $collection_key = 'fields';
  protected $fieldsType = SchemaFieldSpec::class;
  protected $fieldsDataType = 'array';
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param SchemaFieldSpec[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return SchemaFieldSpec[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setSchemaId($schemaId)
  {
    $this->schemaId = $schemaId;
  }
  /** @return string */
  public function getSchemaId()
  {
    return $this->schemaId;
  }
  /** @param string */
  public function setSchemaName($schemaName)
  {
    $this->schemaName = $schemaName;
  }
  /** @return string */
  public function getSchemaName()
  {
    return $this->schemaName;
  }
}

class SchemaFieldSpec extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $fieldId;
  /** @var string */
  public $fieldName;
  /** @var string */
  public $fieldType;
  /** @var bool */
  public $indexed;
  /** @var string */
  public $kind;
  /** @var bool */
  public $multiValued;
  /** @var SchemaFieldSpecNumericIndexingSpec */
  public $numericIndexingSpec;
  /** @var string */
  public $readAccessType;
  protected $numericIndexingSpecType = SchemaFieldSpecNumericIndexingSpec::class;
  protected $numericIndexingSpecDataType = '';
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
  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /** @return string */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /** @param string */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return string */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param string */
  public function setFieldType($fieldType)
  {
    $this->fieldType = $fieldType;
  }
  /** @return string */
  public function getFieldType()
  {
    return $this->fieldType;
  }
  /** @param bool */
  public function setIndexed($indexed)
  {
    $this->indexed = $indexed;
  }
  /** @return bool */
  public function getIndexed()
  {
    return $this->indexed;
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
  /** @param bool */
  public function setMultiValued($multiValued)
  {
    $this->multiValued = $multiValued;
  }
  /** @return bool */
  public function getMultiValued()
  {
    return $this->multiValued;
  }
  /** @param SchemaFieldSpecNumericIndexingSpec */
  public function setNumericIndexingSpec(SchemaFieldSpecNumericIndexingSpec $numericIndexingSpec)
  {
    $this->numericIndexingSpec = $numericIndexingSpec;
  }
  /** @return SchemaFieldSpecNumericIndexingSpec */
  public function getNumericIndexingSpec()
  {
    return $this->numericIndexingSpec;
  }
  /** @param string */
  public function setReadAccessType($readAccessType)
  {
    $this->readAccessType = $readAccessType;
  }
  /** @return string */
  public function getReadAccessType()
  {
    return $this->readAccessType;
  }
}

class SchemaFieldSpecNumericIndexingSpec extends \Google\Model
{
  public $maxValue;
  public $minValue;

  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class Schemas extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var Schema[] */
  public $schemas;
  protected $collection_key = 'schemas';
  protected $schemasType = Schema::class;
  protected $schemasDataType = 'array';
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
  /** @param Schema[] */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /** @return Schema[] */
  public function getSchemas()
  {
    return $this->schemas;
  }
}

class Token extends \Google\Collection
{
  /** @var bool */
  public $anonymous;
  /** @var string */
  public $clientId;
  /** @var string */
  public $displayText;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var bool */
  public $nativeApp;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $userKey;
  protected $collection_key = 'scopes';
  /** @param bool */
  public function setAnonymous($anonymous)
  {
    $this->anonymous = $anonymous;
  }
  /** @return bool */
  public function getAnonymous()
  {
    return $this->anonymous;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /** @return string */
  public function getDisplayText()
  {
    return $this->displayText;
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
  /** @param bool */
  public function setNativeApp($nativeApp)
  {
    $this->nativeApp = $nativeApp;
  }
  /** @return bool */
  public function getNativeApp()
  {
    return $this->nativeApp;
  }
  /** @param string[] */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string[] */
  public function getScopes()
  {
    return $this->scopes;
  }
  /** @param string */
  public function setUserKey($userKey)
  {
    $this->userKey = $userKey;
  }
  /** @return string */
  public function getUserKey()
  {
    return $this->userKey;
  }
}

class Tokens extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Token[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Token::class;
  protected $itemsDataType = 'array';
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
  /** @param Token[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Token[] */
  public function getItems()
  {
    return $this->items;
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
}

class User extends \Google\Collection
{
  /** @var array */
  public $addresses;
  /** @var bool */
  public $agreedToTerms;
  /** @var string[] */
  public $aliases;
  /** @var bool */
  public $archived;
  /** @var bool */
  public $changePasswordAtNextLogin;
  /** @var string */
  public $creationTime;
  /** @var array[] */
  public $customSchemas;
  /** @var string */
  public $customerId;
  /** @var string */
  public $deletionTime;
  /** @var array */
  public $emails;
  /** @var string */
  public $etag;
  /** @var array */
  public $externalIds;
  /** @var array */
  public $gender;
  /** @var string */
  public $hashFunction;
  /** @var string */
  public $id;
  /** @var array */
  public $ims;
  /** @var bool */
  public $includeInGlobalAddressList;
  /** @var bool */
  public $ipWhitelisted;
  /** @var bool */
  public $isAdmin;
  /** @var bool */
  public $isDelegatedAdmin;
  /** @var bool */
  public $isEnforcedIn2Sv;
  /** @var bool */
  public $isEnrolledIn2Sv;
  /** @var bool */
  public $isMailboxSetup;
  /** @var array */
  public $keywords;
  /** @var string */
  public $kind;
  /** @var array */
  public $languages;
  /** @var string */
  public $lastLoginTime;
  /** @var array */
  public $locations;
  /** @var UserName */
  public $name;
  /** @var string[] */
  public $nonEditableAliases;
  /** @var array */
  public $notes;
  /** @var string */
  public $orgUnitPath;
  /** @var array */
  public $organizations;
  /** @var string */
  public $password;
  /** @var array */
  public $phones;
  /** @var array */
  public $posixAccounts;
  /** @var string */
  public $primaryEmail;
  /** @var string */
  public $recoveryEmail;
  /** @var string */
  public $recoveryPhone;
  /** @var array */
  public $relations;
  /** @var array */
  public $sshPublicKeys;
  /** @var bool */
  public $suspended;
  /** @var string */
  public $suspensionReason;
  /** @var string */
  public $thumbnailPhotoEtag;
  /** @var string */
  public $thumbnailPhotoUrl;
  /** @var array */
  public $websites;
  protected $collection_key = 'nonEditableAliases';
  protected $nameType = UserName::class;
  protected $nameDataType = '';
  /** @param array */
  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }
  /** @return array */
  public function getAddresses()
  {
    return $this->addresses;
  }
  /** @param bool */
  public function setAgreedToTerms($agreedToTerms)
  {
    $this->agreedToTerms = $agreedToTerms;
  }
  /** @return bool */
  public function getAgreedToTerms()
  {
    return $this->agreedToTerms;
  }
  /** @param string[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return string[] */
  public function getAliases()
  {
    return $this->aliases;
  }
  /** @param bool */
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param bool */
  public function setChangePasswordAtNextLogin($changePasswordAtNextLogin)
  {
    $this->changePasswordAtNextLogin = $changePasswordAtNextLogin;
  }
  /** @return bool */
  public function getChangePasswordAtNextLogin()
  {
    return $this->changePasswordAtNextLogin;
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
  /** @param array[] */
  public function setCustomSchemas($customSchemas)
  {
    $this->customSchemas = $customSchemas;
  }
  /** @return array[] */
  public function getCustomSchemas()
  {
    return $this->customSchemas;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setDeletionTime($deletionTime)
  {
    $this->deletionTime = $deletionTime;
  }
  /** @return string */
  public function getDeletionTime()
  {
    return $this->deletionTime;
  }
  /** @param array */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /** @return array */
  public function getEmails()
  {
    return $this->emails;
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
  /** @param array */
  public function setExternalIds($externalIds)
  {
    $this->externalIds = $externalIds;
  }
  /** @return array */
  public function getExternalIds()
  {
    return $this->externalIds;
  }
  /** @param array */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return array */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param string */
  public function setHashFunction($hashFunction)
  {
    $this->hashFunction = $hashFunction;
  }
  /** @return string */
  public function getHashFunction()
  {
    return $this->hashFunction;
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
  /** @param array */
  public function setIms($ims)
  {
    $this->ims = $ims;
  }
  /** @return array */
  public function getIms()
  {
    return $this->ims;
  }
  /** @param bool */
  public function setIncludeInGlobalAddressList($includeInGlobalAddressList)
  {
    $this->includeInGlobalAddressList = $includeInGlobalAddressList;
  }
  /** @return bool */
  public function getIncludeInGlobalAddressList()
  {
    return $this->includeInGlobalAddressList;
  }
  /** @param bool */
  public function setIpWhitelisted($ipWhitelisted)
  {
    $this->ipWhitelisted = $ipWhitelisted;
  }
  /** @return bool */
  public function getIpWhitelisted()
  {
    return $this->ipWhitelisted;
  }
  /** @param bool */
  public function setIsAdmin($isAdmin)
  {
    $this->isAdmin = $isAdmin;
  }
  /** @return bool */
  public function getIsAdmin()
  {
    return $this->isAdmin;
  }
  /** @param bool */
  public function setIsDelegatedAdmin($isDelegatedAdmin)
  {
    $this->isDelegatedAdmin = $isDelegatedAdmin;
  }
  /** @return bool */
  public function getIsDelegatedAdmin()
  {
    return $this->isDelegatedAdmin;
  }
  /** @param bool */
  public function setIsEnforcedIn2Sv($isEnforcedIn2Sv)
  {
    $this->isEnforcedIn2Sv = $isEnforcedIn2Sv;
  }
  /** @return bool */
  public function getIsEnforcedIn2Sv()
  {
    return $this->isEnforcedIn2Sv;
  }
  /** @param bool */
  public function setIsEnrolledIn2Sv($isEnrolledIn2Sv)
  {
    $this->isEnrolledIn2Sv = $isEnrolledIn2Sv;
  }
  /** @return bool */
  public function getIsEnrolledIn2Sv()
  {
    return $this->isEnrolledIn2Sv;
  }
  /** @param bool */
  public function setIsMailboxSetup($isMailboxSetup)
  {
    $this->isMailboxSetup = $isMailboxSetup;
  }
  /** @return bool */
  public function getIsMailboxSetup()
  {
    return $this->isMailboxSetup;
  }
  /** @param array */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /** @return array */
  public function getKeywords()
  {
    return $this->keywords;
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
  /** @param array */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return array */
  public function getLanguages()
  {
    return $this->languages;
  }
  /** @param string */
  public function setLastLoginTime($lastLoginTime)
  {
    $this->lastLoginTime = $lastLoginTime;
  }
  /** @return string */
  public function getLastLoginTime()
  {
    return $this->lastLoginTime;
  }
  /** @param array */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return array */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param UserName */
  public function setName(UserName $name)
  {
    $this->name = $name;
  }
  /** @return UserName */
  public function getName()
  {
    return $this->name;
  }
  /** @param string[] */
  public function setNonEditableAliases($nonEditableAliases)
  {
    $this->nonEditableAliases = $nonEditableAliases;
  }
  /** @return string[] */
  public function getNonEditableAliases()
  {
    return $this->nonEditableAliases;
  }
  /** @param array */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return array */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }
  /** @return string */
  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }
  /** @param array */
  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }
  /** @return array */
  public function getOrganizations()
  {
    return $this->organizations;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param array */
  public function setPhones($phones)
  {
    $this->phones = $phones;
  }
  /** @return array */
  public function getPhones()
  {
    return $this->phones;
  }
  /** @param array */
  public function setPosixAccounts($posixAccounts)
  {
    $this->posixAccounts = $posixAccounts;
  }
  /** @return array */
  public function getPosixAccounts()
  {
    return $this->posixAccounts;
  }
  /** @param string */
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
  /** @param string */
  public function setRecoveryEmail($recoveryEmail)
  {
    $this->recoveryEmail = $recoveryEmail;
  }
  /** @return string */
  public function getRecoveryEmail()
  {
    return $this->recoveryEmail;
  }
  /** @param string */
  public function setRecoveryPhone($recoveryPhone)
  {
    $this->recoveryPhone = $recoveryPhone;
  }
  /** @return string */
  public function getRecoveryPhone()
  {
    return $this->recoveryPhone;
  }
  /** @param array */
  public function setRelations($relations)
  {
    $this->relations = $relations;
  }
  /** @return array */
  public function getRelations()
  {
    return $this->relations;
  }
  /** @param array */
  public function setSshPublicKeys($sshPublicKeys)
  {
    $this->sshPublicKeys = $sshPublicKeys;
  }
  /** @return array */
  public function getSshPublicKeys()
  {
    return $this->sshPublicKeys;
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
  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /** @return string */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
  /** @param string */
  public function setThumbnailPhotoEtag($thumbnailPhotoEtag)
  {
    $this->thumbnailPhotoEtag = $thumbnailPhotoEtag;
  }
  /** @return string */
  public function getThumbnailPhotoEtag()
  {
    return $this->thumbnailPhotoEtag;
  }
  /** @param string */
  public function setThumbnailPhotoUrl($thumbnailPhotoUrl)
  {
    $this->thumbnailPhotoUrl = $thumbnailPhotoUrl;
  }
  /** @return string */
  public function getThumbnailPhotoUrl()
  {
    return $this->thumbnailPhotoUrl;
  }
  /** @param array */
  public function setWebsites($websites)
  {
    $this->websites = $websites;
  }
  /** @return array */
  public function getWebsites()
  {
    return $this->websites;
  }
}

class UserAbout extends \Google\Model
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $value;

  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserAddress extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $customType;
  /** @var string */
  public $extendedAddress;
  /** @var string */
  public $formatted;
  /** @var string */
  public $locality;
  /** @var string */
  public $poBox;
  /** @var string */
  public $postalCode;
  /** @var bool */
  public $primary;
  /** @var string */
  public $region;
  /** @var bool */
  public $sourceIsStructured;
  /** @var string */
  public $streetAddress;
  /** @var string */
  public $type;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param string */
  public function setExtendedAddress($extendedAddress)
  {
    $this->extendedAddress = $extendedAddress;
  }
  /** @return string */
  public function getExtendedAddress()
  {
    return $this->extendedAddress;
  }
  /** @param string */
  public function setFormatted($formatted)
  {
    $this->formatted = $formatted;
  }
  /** @return string */
  public function getFormatted()
  {
    return $this->formatted;
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
  public function setPoBox($poBox)
  {
    $this->poBox = $poBox;
  }
  /** @return string */
  public function getPoBox()
  {
    return $this->poBox;
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
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param bool */
  public function setSourceIsStructured($sourceIsStructured)
  {
    $this->sourceIsStructured = $sourceIsStructured;
  }
  /** @return bool */
  public function getSourceIsStructured()
  {
    return $this->sourceIsStructured;
  }
  /** @param string */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string */
  public function getStreetAddress()
  {
    return $this->streetAddress;
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

class UserAlias extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $primaryEmail;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
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
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}

class UserEmail extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $customType;
  /** @var bool */
  public $primary;
  /** @var string */
  public $type;

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
  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
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

class UserExternalId extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserGender extends \Google\Model
{
  /** @var string */
  public $addressMeAs;
  /** @var string */
  public $customGender;
  /** @var string */
  public $type;

  /** @param string */
  public function setAddressMeAs($addressMeAs)
  {
    $this->addressMeAs = $addressMeAs;
  }
  /** @return string */
  public function getAddressMeAs()
  {
    return $this->addressMeAs;
  }
  /** @param string */
  public function setCustomGender($customGender)
  {
    $this->customGender = $customGender;
  }
  /** @return string */
  public function getCustomGender()
  {
    return $this->customGender;
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

class UserIm extends \Google\Model
{
  /** @var string */
  public $customProtocol;
  /** @var string */
  public $customType;
  /** @var string */
  public $im;
  /** @var bool */
  public $primary;
  /** @var string */
  public $protocol;
  /** @var string */
  public $type;

  /** @param string */
  public function setCustomProtocol($customProtocol)
  {
    $this->customProtocol = $customProtocol;
  }
  /** @return string */
  public function getCustomProtocol()
  {
    return $this->customProtocol;
  }
  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param string */
  public function setIm($im)
  {
    $this->im = $im;
  }
  /** @return string */
  public function getIm()
  {
    return $this->im;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
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

class UserKeyword extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserLanguage extends \Google\Model
{
  /** @var string */
  public $customLanguage;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $preference;

  /** @param string */
  public function setCustomLanguage($customLanguage)
  {
    $this->customLanguage = $customLanguage;
  }
  /** @return string */
  public function getCustomLanguage()
  {
    return $this->customLanguage;
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
  public function setPreference($preference)
  {
    $this->preference = $preference;
  }
  /** @return string */
  public function getPreference()
  {
    return $this->preference;
  }
}

class UserLocation extends \Google\Model
{
  /** @var string */
  public $area;
  /** @var string */
  public $buildingId;
  /** @var string */
  public $customType;
  /** @var string */
  public $deskCode;
  /** @var string */
  public $floorName;
  /** @var string */
  public $floorSection;
  /** @var string */
  public $type;

  /** @param string */
  public function setArea($area)
  {
    $this->area = $area;
  }
  /** @return string */
  public function getArea()
  {
    return $this->area;
  }
  /** @param string */
  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }
  /** @return string */
  public function getBuildingId()
  {
    return $this->buildingId;
  }
  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param string */
  public function setDeskCode($deskCode)
  {
    $this->deskCode = $deskCode;
  }
  /** @return string */
  public function getDeskCode()
  {
    return $this->deskCode;
  }
  /** @param string */
  public function setFloorName($floorName)
  {
    $this->floorName = $floorName;
  }
  /** @return string */
  public function getFloorName()
  {
    return $this->floorName;
  }
  /** @param string */
  public function setFloorSection($floorSection)
  {
    $this->floorSection = $floorSection;
  }
  /** @return string */
  public function getFloorSection()
  {
    return $this->floorSection;
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

class UserMakeAdmin extends \Google\Model
{
  /** @var bool */
  public $status;

  /** @param bool */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return bool */
  public function getStatus()
  {
    return $this->status;
  }
}

class UserName extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $familyName;
  /** @var string */
  public $fullName;
  /** @var string */
  public $givenName;

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
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /** @return string */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
  /** @return string */
  public function getGivenName()
  {
    return $this->givenName;
  }
}

class UserOrganization extends \Google\Model
{
  /** @var string */
  public $costCenter;
  /** @var string */
  public $customType;
  /** @var string */
  public $department;
  /** @var string */
  public $description;
  /** @var string */
  public $domain;
  /** @var int */
  public $fullTimeEquivalent;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var bool */
  public $primary;
  /** @var string */
  public $symbol;
  /** @var string */
  public $title;
  /** @var string */
  public $type;

  /** @param string */
  public function setCostCenter($costCenter)
  {
    $this->costCenter = $costCenter;
  }
  /** @return string */
  public function getCostCenter()
  {
    return $this->costCenter;
  }
  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
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
  /** @param int */
  public function setFullTimeEquivalent($fullTimeEquivalent)
  {
    $this->fullTimeEquivalent = $fullTimeEquivalent;
  }
  /** @return int */
  public function getFullTimeEquivalent()
  {
    return $this->fullTimeEquivalent;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
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
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }
  /** @return string */
  public function getSymbol()
  {
    return $this->symbol;
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

class UserPhone extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var bool */
  public $primary;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserPhoto extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var int */
  public $height;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $photoData;
  /** @var string */
  public $primaryEmail;
  /** @var int */
  public $width;

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
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setPhotoData($photoData)
  {
    $this->photoData = $photoData;
  }
  /** @return string */
  public function getPhotoData()
  {
    return $this->photoData;
  }
  /** @param string */
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class UserPosixAccount extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $gecos;
  /** @var string */
  public $gid;
  /** @var string */
  public $homeDirectory;
  /** @var string */
  public $operatingSystemType;
  /** @var bool */
  public $primary;
  /** @var string */
  public $shell;
  /** @var string */
  public $systemId;
  /** @var string */
  public $uid;
  /** @var string */
  public $username;

  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /** @param string */
  public function setGecos($gecos)
  {
    $this->gecos = $gecos;
  }
  /** @return string */
  public function getGecos()
  {
    return $this->gecos;
  }
  /** @param string */
  public function setGid($gid)
  {
    $this->gid = $gid;
  }
  /** @return string */
  public function getGid()
  {
    return $this->gid;
  }
  /** @param string */
  public function setHomeDirectory($homeDirectory)
  {
    $this->homeDirectory = $homeDirectory;
  }
  /** @return string */
  public function getHomeDirectory()
  {
    return $this->homeDirectory;
  }
  /** @param string */
  public function setOperatingSystemType($operatingSystemType)
  {
    $this->operatingSystemType = $operatingSystemType;
  }
  /** @return string */
  public function getOperatingSystemType()
  {
    return $this->operatingSystemType;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setShell($shell)
  {
    $this->shell = $shell;
  }
  /** @return string */
  public function getShell()
  {
    return $this->shell;
  }
  /** @param string */
  public function setSystemId($systemId)
  {
    $this->systemId = $systemId;
  }
  /** @return string */
  public function getSystemId()
  {
    return $this->systemId;
  }
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
  /** @param string */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
}

class UserRelation extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserSshPublicKey extends \Google\Model
{
  /** @var string */
  public $expirationTimeUsec;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $key;

  /** @param string */
  public function setExpirationTimeUsec($expirationTimeUsec)
  {
    $this->expirationTimeUsec = $expirationTimeUsec;
  }
  /** @return string */
  public function getExpirationTimeUsec()
  {
    return $this->expirationTimeUsec;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
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
}

class UserUndelete extends \Google\Model
{
  /** @var string */
  public $orgUnitPath;

  /** @param string */
  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }
  /** @return string */
  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }
}

class UserWebsite extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var bool */
  public $primary;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Users extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $triggerEvent;
  /** @var User[] */
  public $users;
  protected $collection_key = 'users';
  protected $internal_gapi_mappings = [
        "triggerEvent" => "trigger_event",
  ];
  protected $usersType = User::class;
  protected $usersDataType = 'array';
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
  /** @param string */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /** @return string */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
  /** @param User[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return User[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class VerificationCode extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $userId;
  /** @var string */
  public $verificationCode;

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
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
  /** @param string */
  public function setVerificationCode($verificationCode)
  {
    $this->verificationCode = $verificationCode;
  }
  /** @return string */
  public function getVerificationCode()
  {
    return $this->verificationCode;
  }
}

class VerificationCodes extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var VerificationCode[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = VerificationCode::class;
  protected $itemsDataType = 'array';
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
  /** @param VerificationCode[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return VerificationCode[] */
  public function getItems()
  {
    return $this->items;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdminEmpty::class, 'Google_Service_Directory_AdminEmpty');
class_alias(Alias::class, 'Google_Service_Directory_Alias');
class_alias(Aliases::class, 'Google_Service_Directory_Aliases');
class_alias(Asp::class, 'Google_Service_Directory_Asp');
class_alias(Asps::class, 'Google_Service_Directory_Asps');
class_alias(AuxiliaryMessage::class, 'Google_Service_Directory_AuxiliaryMessage');
class_alias(BatchCreatePrintServersRequest::class, 'Google_Service_Directory_BatchCreatePrintServersRequest');
class_alias(BatchCreatePrintServersResponse::class, 'Google_Service_Directory_BatchCreatePrintServersResponse');
class_alias(BatchCreatePrintersRequest::class, 'Google_Service_Directory_BatchCreatePrintersRequest');
class_alias(BatchCreatePrintersResponse::class, 'Google_Service_Directory_BatchCreatePrintersResponse');
class_alias(BatchDeletePrintServersRequest::class, 'Google_Service_Directory_BatchDeletePrintServersRequest');
class_alias(BatchDeletePrintServersResponse::class, 'Google_Service_Directory_BatchDeletePrintServersResponse');
class_alias(BatchDeletePrintersRequest::class, 'Google_Service_Directory_BatchDeletePrintersRequest');
class_alias(BatchDeletePrintersResponse::class, 'Google_Service_Directory_BatchDeletePrintersResponse');
class_alias(Building::class, 'Google_Service_Directory_Building');
class_alias(BuildingAddress::class, 'Google_Service_Directory_BuildingAddress');
class_alias(BuildingCoordinates::class, 'Google_Service_Directory_BuildingCoordinates');
class_alias(Buildings::class, 'Google_Service_Directory_Buildings');
class_alias(CalendarResource::class, 'Google_Service_Directory_CalendarResource');
class_alias(CalendarResources::class, 'Google_Service_Directory_CalendarResources');
class_alias(Channel::class, 'Google_Service_Directory_Channel');
class_alias(ChromeOsDevice::class, 'Google_Service_Directory_ChromeOsDevice');
class_alias(ChromeOsDeviceAction::class, 'Google_Service_Directory_ChromeOsDeviceAction');
class_alias(ChromeOsDeviceActiveTimeRanges::class, 'Google_Service_Directory_ChromeOsDeviceActiveTimeRanges');
class_alias(ChromeOsDeviceCpuInfo::class, 'Google_Service_Directory_ChromeOsDeviceCpuInfo');
class_alias(ChromeOsDeviceCpuInfoLogicalCpus::class, 'Google_Service_Directory_ChromeOsDeviceCpuInfoLogicalCpus');
class_alias(ChromeOsDeviceCpuInfoLogicalCpusCStates::class, 'Google_Service_Directory_ChromeOsDeviceCpuInfoLogicalCpusCStates');
class_alias(ChromeOsDeviceCpuStatusReports::class, 'Google_Service_Directory_ChromeOsDeviceCpuStatusReports');
class_alias(ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo::class, 'Google_Service_Directory_ChromeOsDeviceCpuStatusReportsCpuTemperatureInfo');
class_alias(ChromeOsDeviceDeviceFiles::class, 'Google_Service_Directory_ChromeOsDeviceDeviceFiles');
class_alias(ChromeOsDeviceDiskVolumeReports::class, 'Google_Service_Directory_ChromeOsDeviceDiskVolumeReports');
class_alias(ChromeOsDeviceDiskVolumeReportsVolumeInfo::class, 'Google_Service_Directory_ChromeOsDeviceDiskVolumeReportsVolumeInfo');
class_alias(ChromeOsDeviceLastKnownNetwork::class, 'Google_Service_Directory_ChromeOsDeviceLastKnownNetwork');
class_alias(ChromeOsDeviceRecentUsers::class, 'Google_Service_Directory_ChromeOsDeviceRecentUsers');
class_alias(ChromeOsDeviceScreenshotFiles::class, 'Google_Service_Directory_ChromeOsDeviceScreenshotFiles');
class_alias(ChromeOsDeviceSystemRamFreeReports::class, 'Google_Service_Directory_ChromeOsDeviceSystemRamFreeReports');
class_alias(ChromeOsDeviceTpmVersionInfo::class, 'Google_Service_Directory_ChromeOsDeviceTpmVersionInfo');
class_alias(ChromeOsDevices::class, 'Google_Service_Directory_ChromeOsDevices');
class_alias(ChromeOsMoveDevicesToOu::class, 'Google_Service_Directory_ChromeOsMoveDevicesToOu');
class_alias(CreatePrintServerRequest::class, 'Google_Service_Directory_CreatePrintServerRequest');
class_alias(CreatePrinterRequest::class, 'Google_Service_Directory_CreatePrinterRequest');
class_alias(Customer::class, 'Google_Service_Directory_Customer');
class_alias(CustomerPostalAddress::class, 'Google_Service_Directory_CustomerPostalAddress');
class_alias(DirectoryChromeosdevicesCommand::class, 'Google_Service_Directory_DirectoryChromeosdevicesCommand');
class_alias(DirectoryChromeosdevicesCommandResult::class, 'Google_Service_Directory_DirectoryChromeosdevicesCommandResult');
class_alias(DirectoryChromeosdevicesIssueCommandRequest::class, 'Google_Service_Directory_DirectoryChromeosdevicesIssueCommandRequest');
class_alias(DirectoryChromeosdevicesIssueCommandResponse::class, 'Google_Service_Directory_DirectoryChromeosdevicesIssueCommandResponse');
class_alias(DomainAlias::class, 'Google_Service_Directory_DomainAlias');
class_alias(DomainAliases::class, 'Google_Service_Directory_DomainAliases');
class_alias(Domains::class, 'Google_Service_Directory_Domains');
class_alias(Domains2::class, 'Google_Service_Directory_Domains2');
class_alias(FailureInfo::class, 'Google_Service_Directory_FailureInfo');
class_alias(Feature::class, 'Google_Service_Directory_Feature');
class_alias(FeatureInstance::class, 'Google_Service_Directory_FeatureInstance');
class_alias(FeatureRename::class, 'Google_Service_Directory_FeatureRename');
class_alias(Features::class, 'Google_Service_Directory_Features');
class_alias(Group::class, 'Google_Service_Directory_Group');
class_alias(GroupAlias::class, 'Google_Service_Directory_GroupAlias');
class_alias(Groups::class, 'Google_Service_Directory_Groups');
class_alias(ListPrintServersResponse::class, 'Google_Service_Directory_ListPrintServersResponse');
class_alias(ListPrinterModelsResponse::class, 'Google_Service_Directory_ListPrinterModelsResponse');
class_alias(ListPrintersResponse::class, 'Google_Service_Directory_ListPrintersResponse');
class_alias(Member::class, 'Google_Service_Directory_Member');
class_alias(Members::class, 'Google_Service_Directory_Members');
class_alias(MembersHasMember::class, 'Google_Service_Directory_MembersHasMember');
class_alias(MobileDevice::class, 'Google_Service_Directory_MobileDevice');
class_alias(MobileDeviceAction::class, 'Google_Service_Directory_MobileDeviceAction');
class_alias(MobileDeviceApplications::class, 'Google_Service_Directory_MobileDeviceApplications');
class_alias(MobileDevices::class, 'Google_Service_Directory_MobileDevices');
class_alias(OrgUnit::class, 'Google_Service_Directory_OrgUnit');
class_alias(OrgUnits::class, 'Google_Service_Directory_OrgUnits');
class_alias(OsUpdateStatus::class, 'Google_Service_Directory_OsUpdateStatus');
class_alias(PrintServer::class, 'Google_Service_Directory_PrintServer');
class_alias(PrintServerFailureInfo::class, 'Google_Service_Directory_PrintServerFailureInfo');
class_alias(Printer::class, 'Google_Service_Directory_Printer');
class_alias(PrinterModel::class, 'Google_Service_Directory_PrinterModel');
class_alias(Privilege::class, 'Google_Service_Directory_Privilege');
class_alias(Privileges::class, 'Google_Service_Directory_Privileges');
class_alias(Role::class, 'Google_Service_Directory_Role');
class_alias(RoleAssignment::class, 'Google_Service_Directory_RoleAssignment');
class_alias(RoleAssignments::class, 'Google_Service_Directory_RoleAssignments');
class_alias(RoleRolePrivileges::class, 'Google_Service_Directory_RoleRolePrivileges');
class_alias(Roles::class, 'Google_Service_Directory_Roles');
class_alias(Schema::class, 'Google_Service_Directory_Schema');
class_alias(SchemaFieldSpec::class, 'Google_Service_Directory_SchemaFieldSpec');
class_alias(SchemaFieldSpecNumericIndexingSpec::class, 'Google_Service_Directory_SchemaFieldSpecNumericIndexingSpec');
class_alias(Schemas::class, 'Google_Service_Directory_Schemas');
class_alias(Token::class, 'Google_Service_Directory_Token');
class_alias(Tokens::class, 'Google_Service_Directory_Tokens');
class_alias(User::class, 'Google_Service_Directory_User');
class_alias(UserAbout::class, 'Google_Service_Directory_UserAbout');
class_alias(UserAddress::class, 'Google_Service_Directory_UserAddress');
class_alias(UserAlias::class, 'Google_Service_Directory_UserAlias');
class_alias(UserEmail::class, 'Google_Service_Directory_UserEmail');
class_alias(UserExternalId::class, 'Google_Service_Directory_UserExternalId');
class_alias(UserGender::class, 'Google_Service_Directory_UserGender');
class_alias(UserIm::class, 'Google_Service_Directory_UserIm');
class_alias(UserKeyword::class, 'Google_Service_Directory_UserKeyword');
class_alias(UserLanguage::class, 'Google_Service_Directory_UserLanguage');
class_alias(UserLocation::class, 'Google_Service_Directory_UserLocation');
class_alias(UserMakeAdmin::class, 'Google_Service_Directory_UserMakeAdmin');
class_alias(UserName::class, 'Google_Service_Directory_UserName');
class_alias(UserOrganization::class, 'Google_Service_Directory_UserOrganization');
class_alias(UserPhone::class, 'Google_Service_Directory_UserPhone');
class_alias(UserPhoto::class, 'Google_Service_Directory_UserPhoto');
class_alias(UserPosixAccount::class, 'Google_Service_Directory_UserPosixAccount');
class_alias(UserRelation::class, 'Google_Service_Directory_UserRelation');
class_alias(UserSshPublicKey::class, 'Google_Service_Directory_UserSshPublicKey');
class_alias(UserUndelete::class, 'Google_Service_Directory_UserUndelete');
class_alias(UserWebsite::class, 'Google_Service_Directory_UserWebsite');
class_alias(Users::class, 'Google_Service_Directory_Users');
class_alias(VerificationCode::class, 'Google_Service_Directory_VerificationCode');
class_alias(VerificationCodes::class, 'Google_Service_Directory_VerificationCodes');
