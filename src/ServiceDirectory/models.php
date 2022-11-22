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

namespace Google\Service\ServiceDirectory;

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
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
}

class Endpoint extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var int */
  public $port;
  /** @var string */
  public $uid;

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
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
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
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
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
}

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
  /** @var string */
  public $title;

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
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
  }
}

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class ListEndpointsResponse extends \Google\Collection
{
  /** @var Endpoint[] */
  public $endpoints;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'endpoints';
  protected $endpointsType = Endpoint::class;
  protected $endpointsDataType = 'array';
  /** @param Endpoint[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return Endpoint[] */
  public function getEndpoints()
  {
    return $this->endpoints;
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

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
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

class ListNamespacesResponse extends \Google\Collection
{
  /** @var ServicedirectoryNamespace[] */
  public $namespaces;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'namespaces';
  protected $namespacesType = ServicedirectoryNamespace::class;
  protected $namespacesDataType = 'array';
  /** @param ServicedirectoryNamespace[] */
  public function setNamespaces($namespaces)
  {
    $this->namespaces = $namespaces;
  }
  /** @return ServicedirectoryNamespace[] */
  public function getNamespaces()
  {
    return $this->namespaces;
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

class ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Service[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = Service::class;
  protected $servicesDataType = 'array';
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
  /** @param Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return Service[] */
  public function getServices()
  {
    return $this->services;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

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
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class Policy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class ResolveServiceRequest extends \Google\Model
{
  /** @var string */
  public $endpointFilter;
  /** @var int */
  public $maxEndpoints;

  /** @param string */
  public function setEndpointFilter($endpointFilter)
  {
    $this->endpointFilter = $endpointFilter;
  }
  /** @return string */
  public function getEndpointFilter()
  {
    return $this->endpointFilter;
  }
  /** @param int */
  public function setMaxEndpoints($maxEndpoints)
  {
    $this->maxEndpoints = $maxEndpoints;
  }
  /** @return int */
  public function getMaxEndpoints()
  {
    return $this->maxEndpoints;
  }
}

class ResolveServiceResponse extends \Google\Model
{
  /** @var Service */
  public $service;
  protected $serviceType = Service::class;
  protected $serviceDataType = '';
  /** @param Service */
  public function setService(Service $service)
  {
    $this->service = $service;
  }
  /** @return Service */
  public function getService()
  {
    return $this->service;
  }
}

class Service extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var Endpoint[] */
  public $endpoints;
  /** @var string */
  public $name;
  /** @var string */
  public $uid;
  protected $collection_key = 'endpoints';
  protected $endpointsType = Endpoint::class;
  protected $endpointsDataType = 'array';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param Endpoint[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return Endpoint[] */
  public function getEndpoints()
  {
    return $this->endpoints;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class ServicedirectoryEmpty extends \Google\Model
{
}

class ServicedirectoryNamespace extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $uid;

  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Binding::class, 'Google_Service_ServiceDirectory_Binding');
class_alias(Endpoint::class, 'Google_Service_ServiceDirectory_Endpoint');
class_alias(Expr::class, 'Google_Service_ServiceDirectory_Expr');
class_alias(GetIamPolicyRequest::class, 'Google_Service_ServiceDirectory_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_ServiceDirectory_GetPolicyOptions');
class_alias(ListEndpointsResponse::class, 'Google_Service_ServiceDirectory_ListEndpointsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_ServiceDirectory_ListLocationsResponse');
class_alias(ListNamespacesResponse::class, 'Google_Service_ServiceDirectory_ListNamespacesResponse');
class_alias(ListServicesResponse::class, 'Google_Service_ServiceDirectory_ListServicesResponse');
class_alias(Location::class, 'Google_Service_ServiceDirectory_Location');
class_alias(Policy::class, 'Google_Service_ServiceDirectory_Policy');
class_alias(ResolveServiceRequest::class, 'Google_Service_ServiceDirectory_ResolveServiceRequest');
class_alias(ResolveServiceResponse::class, 'Google_Service_ServiceDirectory_ResolveServiceResponse');
class_alias(Service::class, 'Google_Service_ServiceDirectory_Service');
class_alias(ServicedirectoryEmpty::class, 'Google_Service_ServiceDirectory_ServicedirectoryEmpty');
class_alias(ServicedirectoryNamespace::class, 'Google_Service_ServiceDirectory_ServicedirectoryNamespace');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ServiceDirectory_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ServiceDirectory_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ServiceDirectory_TestIamPermissionsResponse');
