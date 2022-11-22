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

namespace Google\Service\BeyondCorp;

class AllocatedConnection extends \Google\Model
{
  /** @var int */
  public $ingressPort;
  /** @var string */
  public $pscUri;

  /** @param int */
  public function setIngressPort($ingressPort)
  {
    $this->ingressPort = $ingressPort;
  }
  /** @return int */
  public function getIngressPort()
  {
    return $this->ingressPort;
  }
  /** @param string */
  public function setPscUri($pscUri)
  {
    $this->pscUri = $pscUri;
  }
  /** @return string */
  public function getPscUri()
  {
    return $this->pscUri;
  }
}

class AppGateway extends \Google\Collection
{
  /** @var AllocatedConnection[] */
  public $allocatedConnections;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $hostType;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uri;
  protected $collection_key = 'allocatedConnections';
  protected $allocatedConnectionsType = AllocatedConnection::class;
  protected $allocatedConnectionsDataType = 'array';
  /** @param AllocatedConnection[] */
  public function setAllocatedConnections($allocatedConnections)
  {
    $this->allocatedConnections = $allocatedConnections;
  }
  /** @return AllocatedConnection[] */
  public function getAllocatedConnections()
  {
    return $this->allocatedConnections;
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
  public function setHostType($hostType)
  {
    $this->hostType = $hostType;
  }
  /** @return string */
  public function getHostType()
  {
    return $this->hostType;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
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

class AppGatewayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class BeyondcorpEmpty extends \Google\Model
{
}

class ClientConnectorService extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var Egress */
  public $egress;
  /** @var Ingress */
  public $ingress;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $egressType = Egress::class;
  protected $egressDataType = '';
  protected $ingressType = Ingress::class;
  protected $ingressDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param Egress */
  public function setEgress(Egress $egress)
  {
    $this->egress = $egress;
  }
  /** @return Egress */
  public function getEgress()
  {
    return $this->egress;
  }
  /** @param Ingress */
  public function setIngress(Ingress $ingress)
  {
    $this->ingress = $ingress;
  }
  /** @return Ingress */
  public function getIngress()
  {
    return $this->ingress;
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

class ClientConnectorServiceOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class ClientGateway extends \Google\Model
{
  /** @var string */
  public $clientConnectorService;
  /** @var string */
  public $createTime;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setClientConnectorService($clientConnectorService)
  {
    $this->clientConnectorService = $clientConnectorService;
  }
  /** @return string */
  public function getClientConnectorService()
  {
    return $this->clientConnectorService;
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

class ClientGatewayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class CloudSecurityZerotrustApplinkAppConnectorProtoConnectionConfig extends \Google\Collection
{
  /** @var string */
  public $applicationEndpoint;
  /** @var string */
  public $applicationName;
  /** @var CloudSecurityZerotrustApplinkAppConnectorProtoGateway[] */
  public $gateway;
  /** @var string */
  public $name;
  /** @var string */
  public $project;
  /** @var string */
  public $tunnelsPerGateway;
  /** @var int */
  public $userPort;
  protected $collection_key = 'gateway';
  protected $gatewayType = CloudSecurityZerotrustApplinkAppConnectorProtoGateway::class;
  protected $gatewayDataType = 'array';
  /** @param string */
  public function setApplicationEndpoint($applicationEndpoint)
  {
    $this->applicationEndpoint = $applicationEndpoint;
  }
  /** @return string */
  public function getApplicationEndpoint()
  {
    return $this->applicationEndpoint;
  }
  /** @param string */
  public function setApplicationName($applicationName)
  {
    $this->applicationName = $applicationName;
  }
  /** @return string */
  public function getApplicationName()
  {
    return $this->applicationName;
  }
  /** @param CloudSecurityZerotrustApplinkAppConnectorProtoGateway[] */
  public function setGateway($gateway)
  {
    $this->gateway = $gateway;
  }
  /** @return CloudSecurityZerotrustApplinkAppConnectorProtoGateway[] */
  public function getGateway()
  {
    return $this->gateway;
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
  public function setTunnelsPerGateway($tunnelsPerGateway)
  {
    $this->tunnelsPerGateway = $tunnelsPerGateway;
  }
  /** @return string */
  public function getTunnelsPerGateway()
  {
    return $this->tunnelsPerGateway;
  }
  /** @param int */
  public function setUserPort($userPort)
  {
    $this->userPort = $userPort;
  }
  /** @return int */
  public function getUserPort()
  {
    return $this->userPort;
  }
}

class CloudSecurityZerotrustApplinkAppConnectorProtoConnectorDetails extends \Google\Model
{
}

class CloudSecurityZerotrustApplinkAppConnectorProtoGateway extends \Google\Model
{
  /** @var string */
  public $interface;
  /** @var string */
  public $name;
  /** @var string */
  public $port;
  /** @var string */
  public $project;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $zone;

  /** @param string */
  public function setInterface($interface)
  {
    $this->interface = $interface;
  }
  /** @return string */
  public function getInterface()
  {
    return $this->interface;
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
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return string */
  public function getPort()
  {
    return $this->port;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class CloudSecurityZerotrustApplinkLogagentProtoLogAgentDetails extends \Google\Model
{
}

class Config extends \Google\Collection
{
  /** @var DestinationRoute[] */
  public $destinationRoutes;
  /** @var string */
  public $transportProtocol;
  protected $collection_key = 'destinationRoutes';
  protected $destinationRoutesType = DestinationRoute::class;
  protected $destinationRoutesDataType = 'array';
  /** @param DestinationRoute[] */
  public function setDestinationRoutes($destinationRoutes)
  {
    $this->destinationRoutes = $destinationRoutes;
  }
  /** @return DestinationRoute[] */
  public function getDestinationRoutes()
  {
    return $this->destinationRoutes;
  }
  /** @param string */
  public function setTransportProtocol($transportProtocol)
  {
    $this->transportProtocol = $transportProtocol;
  }
  /** @return string */
  public function getTransportProtocol()
  {
    return $this->transportProtocol;
  }
}

class DestinationRoute extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $netmask;

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
  public function setNetmask($netmask)
  {
    $this->netmask = $netmask;
  }
  /** @return string */
  public function getNetmask()
  {
    return $this->netmask;
  }
}

class Egress extends \Google\Model
{
  /** @var PeeredVpc */
  public $peeredVpc;
  protected $peeredVpcType = PeeredVpc::class;
  protected $peeredVpcDataType = '';
  /** @param PeeredVpc */
  public function setPeeredVpc(PeeredVpc $peeredVpc)
  {
    $this->peeredVpc = $peeredVpc;
  }
  /** @return PeeredVpc */
  public function getPeeredVpc()
  {
    return $this->peeredVpc;
  }
}

class GoogleCloudBeyondcorpAppconnectionsV1AppConnection extends \Google\Collection
{
  /** @var GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint */
  public $applicationEndpoint;
  /** @var string[] */
  public $connectors;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway */
  public $gateway;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'connectors';
  protected $applicationEndpointType = GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint::class;
  protected $applicationEndpointDataType = '';
  protected $gatewayType = GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway::class;
  protected $gatewayDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint */
  public function setApplicationEndpoint(GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint $applicationEndpoint)
  {
    $this->applicationEndpoint = $applicationEndpoint;
  }
  /** @return GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint */
  public function getApplicationEndpoint()
  {
    return $this->applicationEndpoint;
  }
  /** @param string[] */
  public function setConnectors($connectors)
  {
    $this->connectors = $connectors;
  }
  /** @return string[] */
  public function getConnectors()
  {
    return $this->connectors;
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway */
  public function setGateway(GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway $gateway)
  {
    $this->gateway = $gateway;
  }
  /** @return GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway */
  public function getGateway()
  {
    return $this->gateway;
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

class GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var int */
  public $port;

  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
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
}

class GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway extends \Google\Model
{
  /** @var string */
  public $appGateway;
  /** @var int */
  public $ingressPort;
  /** @var string */
  public $l7psc;
  /** @var string */
  public $type;
  /** @var string */
  public $uri;

  /** @param string */
  public function setAppGateway($appGateway)
  {
    $this->appGateway = $appGateway;
  }
  /** @return string */
  public function getAppGateway()
  {
    return $this->appGateway;
  }
  /** @param int */
  public function setIngressPort($ingressPort)
  {
    $this->ingressPort = $ingressPort;
  }
  /** @return int */
  public function getIngressPort()
  {
    return $this->ingressPort;
  }
  /** @param string */
  public function setL7psc($l7psc)
  {
    $this->l7psc = $l7psc;
  }
  /** @return string */
  public function getL7psc()
  {
    return $this->l7psc;
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

class GoogleCloudBeyondcorpAppconnectionsV1AppConnectionOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpAppconnectionsV1ListAppConnectionsResponse extends \Google\Collection
{
  /** @var GoogleCloudBeyondcorpAppconnectionsV1AppConnection[] */
  public $appConnections;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $appConnectionsType = GoogleCloudBeyondcorpAppconnectionsV1AppConnection::class;
  protected $appConnectionsDataType = 'array';
  /** @param GoogleCloudBeyondcorpAppconnectionsV1AppConnection[] */
  public function setAppConnections($appConnections)
  {
    $this->appConnections = $appConnections;
  }
  /** @return GoogleCloudBeyondcorpAppconnectionsV1AppConnection[] */
  public function getAppConnections()
  {
    return $this->appConnections;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponse extends \Google\Collection
{
  /** @var GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails[] */
  public $appConnectionDetails;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $appConnectionDetailsType = GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails::class;
  protected $appConnectionDetailsDataType = 'array';
  /** @param GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails[] */
  public function setAppConnectionDetails($appConnectionDetails)
  {
    $this->appConnectionDetails = $appConnectionDetails;
  }
  /** @return GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails[] */
  public function getAppConnectionDetails()
  {
    return $this->appConnectionDetails;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails extends \Google\Collection
{
  /** @var GoogleCloudBeyondcorpAppconnectionsV1AppConnection */
  public $appConnection;
  /** @var string[] */
  public $recentMigVms;
  protected $collection_key = 'recentMigVms';
  protected $appConnectionType = GoogleCloudBeyondcorpAppconnectionsV1AppConnection::class;
  protected $appConnectionDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectionsV1AppConnection */
  public function setAppConnection(GoogleCloudBeyondcorpAppconnectionsV1AppConnection $appConnection)
  {
    $this->appConnection = $appConnection;
  }
  /** @return GoogleCloudBeyondcorpAppconnectionsV1AppConnection */
  public function getAppConnection()
  {
    return $this->appConnection;
  }
  /** @param string[] */
  public function setRecentMigVms($recentMigVms)
  {
    $this->recentMigVms = $recentMigVms;
  }
  /** @return string[] */
  public function getRecentMigVms()
  {
    return $this->recentMigVms;
  }
}

class GoogleCloudBeyondcorpAppconnectionsV1alphaAppConnectionOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1AppConnector extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo */
  public $principalInfo;
  /** @var GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public $resourceInfo;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $principalInfoType = GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo::class;
  protected $principalInfoDataType = '';
  protected $resourceInfoType = GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo::class;
  protected $resourceInfoDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo */
  public function setPrincipalInfo(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo $principalInfo)
  {
    $this->principalInfo = $principalInfo;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo */
  public function getPrincipalInfo()
  {
    return $this->principalInfo;
  }
  /** @param GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public function setResourceInfo(GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo $resourceInfo)
  {
    $this->resourceInfo = $resourceInfo;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public function getResourceInfo()
  {
    return $this->resourceInfo;
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

class GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig extends \Google\Model
{
  /** @var GoogleCloudBeyondcorpAppconnectorsV1ImageConfig */
  public $imageConfig;
  /** @var array[] */
  public $instanceConfig;
  /** @var GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig */
  public $notificationConfig;
  /** @var string */
  public $sequenceNumber;
  protected $imageConfigType = GoogleCloudBeyondcorpAppconnectorsV1ImageConfig::class;
  protected $imageConfigDataType = '';
  protected $notificationConfigType = GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig::class;
  protected $notificationConfigDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectorsV1ImageConfig */
  public function setImageConfig(GoogleCloudBeyondcorpAppconnectorsV1ImageConfig $imageConfig)
  {
    $this->imageConfig = $imageConfig;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1ImageConfig */
  public function getImageConfig()
  {
    return $this->imageConfig;
  }
  /** @param array[] */
  public function setInstanceConfig($instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return array[] */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
  }
  /** @param GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig */
  public function setNotificationConfig(GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
  }
  /** @param string */
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  /** @return string */
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1AppConnectorOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo extends \Google\Model
{
  /** @var GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount */
  public $serviceAccount;
  protected $serviceAccountType = GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount::class;
  protected $serviceAccountDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount */
  public function setServiceAccount(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount $serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount extends \Google\Model
{
  /** @var string */
  public $email;

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
}

class GoogleCloudBeyondcorpAppconnectorsV1ContainerHealthDetails extends \Google\Model
{
  /** @var string */
  public $currentConfigVersion;
  /** @var string */
  public $errorMsg;
  /** @var string */
  public $expectedConfigVersion;
  /** @var string[] */
  public $extendedStatus;

  /** @param string */
  public function setCurrentConfigVersion($currentConfigVersion)
  {
    $this->currentConfigVersion = $currentConfigVersion;
  }
  /** @return string */
  public function getCurrentConfigVersion()
  {
    return $this->currentConfigVersion;
  }
  /** @param string */
  public function setErrorMsg($errorMsg)
  {
    $this->errorMsg = $errorMsg;
  }
  /** @return string */
  public function getErrorMsg()
  {
    return $this->errorMsg;
  }
  /** @param string */
  public function setExpectedConfigVersion($expectedConfigVersion)
  {
    $this->expectedConfigVersion = $expectedConfigVersion;
  }
  /** @return string */
  public function getExpectedConfigVersion()
  {
    return $this->expectedConfigVersion;
  }
  /** @param string[] */
  public function setExtendedStatus($extendedStatus)
  {
    $this->extendedStatus = $extendedStatus;
  }
  /** @return string[] */
  public function getExtendedStatus()
  {
    return $this->extendedStatus;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1ImageConfig extends \Google\Model
{
  /** @var string */
  public $stableImage;
  /** @var string */
  public $targetImage;

  /** @param string */
  public function setStableImage($stableImage)
  {
    $this->stableImage = $stableImage;
  }
  /** @return string */
  public function getStableImage()
  {
    return $this->stableImage;
  }
  /** @param string */
  public function setTargetImage($targetImage)
  {
    $this->targetImage = $targetImage;
  }
  /** @return string */
  public function getTargetImage()
  {
    return $this->targetImage;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1ListAppConnectorsResponse extends \Google\Collection
{
  /** @var GoogleCloudBeyondcorpAppconnectorsV1AppConnector[] */
  public $appConnectors;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $appConnectorsType = GoogleCloudBeyondcorpAppconnectorsV1AppConnector::class;
  protected $appConnectorsDataType = 'array';
  /** @param GoogleCloudBeyondcorpAppconnectorsV1AppConnector[] */
  public function setAppConnectors($appConnectors)
  {
    $this->appConnectors = $appConnectors;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1AppConnector[] */
  public function getAppConnectors()
  {
    return $this->appConnectors;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig extends \Google\Model
{
  /** @var GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig */
  public $pubsubNotification;
  protected $pubsubNotificationType = GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig::class;
  protected $pubsubNotificationDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig */
  public function setPubsubNotification(GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig $pubsubNotification)
  {
    $this->pubsubNotification = $pubsubNotification;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig */
  public function getPubsubNotification()
  {
    return $this->pubsubNotification;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig extends \Google\Model
{
  /** @var string */
  public $pubsubSubscription;

  /** @param string */
  public function setPubsubSubscription($pubsubSubscription)
  {
    $this->pubsubSubscription = $pubsubSubscription;
  }
  /** @return string */
  public function getPubsubSubscription()
  {
    return $this->pubsubSubscription;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1RemoteAgentDetails extends \Google\Model
{
}

class GoogleCloudBeyondcorpAppconnectorsV1ReportStatusRequest extends \Google\Model
{
  /** @var string */
  public $requestId;
  /** @var GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public $resourceInfo;
  /** @var bool */
  public $validateOnly;
  protected $resourceInfoType = GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo::class;
  protected $resourceInfoDataType = '';
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
  /** @param GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public function setResourceInfo(GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo $resourceInfo)
  {
    $this->resourceInfo = $resourceInfo;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo */
  public function getResourceInfo()
  {
    return $this->resourceInfo;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1ResolveInstanceConfigResponse extends \Google\Model
{
  /** @var GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig */
  public $instanceConfig;
  protected $instanceConfigType = GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig::class;
  protected $instanceConfigDataType = '';
  /** @param GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig */
  public function setInstanceConfig(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig $instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var array[] */
  public $resource;
  /** @var string */
  public $status;
  /** @var GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo[] */
  public $sub;
  /** @var string */
  public $time;
  protected $collection_key = 'sub';
  protected $subType = GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo::class;
  protected $subDataType = 'array';
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
  /** @param array[] */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return array[] */
  public function getResource()
  {
    return $this->resource;
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
  /** @param GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo[] */
  public function setSub($sub)
  {
    $this->sub = $sub;
  }
  /** @return GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo[] */
  public function getSub()
  {
    return $this->sub;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1alphaAppConnectorOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1alphaContainerHealthDetails extends \Google\Model
{
  /** @var string */
  public $currentConfigVersion;
  /** @var string */
  public $errorMsg;
  /** @var string */
  public $expectedConfigVersion;
  /** @var string[] */
  public $extendedStatus;

  /** @param string */
  public function setCurrentConfigVersion($currentConfigVersion)
  {
    $this->currentConfigVersion = $currentConfigVersion;
  }
  /** @return string */
  public function getCurrentConfigVersion()
  {
    return $this->currentConfigVersion;
  }
  /** @param string */
  public function setErrorMsg($errorMsg)
  {
    $this->errorMsg = $errorMsg;
  }
  /** @return string */
  public function getErrorMsg()
  {
    return $this->errorMsg;
  }
  /** @param string */
  public function setExpectedConfigVersion($expectedConfigVersion)
  {
    $this->expectedConfigVersion = $expectedConfigVersion;
  }
  /** @return string */
  public function getExpectedConfigVersion()
  {
    return $this->expectedConfigVersion;
  }
  /** @param string[] */
  public function setExtendedStatus($extendedStatus)
  {
    $this->extendedStatus = $extendedStatus;
  }
  /** @return string[] */
  public function getExtendedStatus()
  {
    return $this->extendedStatus;
  }
}

class GoogleCloudBeyondcorpAppconnectorsV1alphaRemoteAgentDetails extends \Google\Model
{
}

class GoogleCloudBeyondcorpAppgatewaysV1alphaAppGatewayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpClientconnectorservicesV1alphaClientConnectorServiceOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpClientgatewaysV1alphaClientGatewayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpConnectionsV1alphaConnectionOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpConnectorsV1alphaConnectorOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class GoogleCloudBeyondcorpConnectorsV1alphaContainerHealthDetails extends \Google\Model
{
  /** @var string */
  public $currentConfigVersion;
  /** @var string */
  public $errorMsg;
  /** @var string */
  public $expectedConfigVersion;
  /** @var string[] */
  public $extendedStatus;

  /** @param string */
  public function setCurrentConfigVersion($currentConfigVersion)
  {
    $this->currentConfigVersion = $currentConfigVersion;
  }
  /** @return string */
  public function getCurrentConfigVersion()
  {
    return $this->currentConfigVersion;
  }
  /** @param string */
  public function setErrorMsg($errorMsg)
  {
    $this->errorMsg = $errorMsg;
  }
  /** @return string */
  public function getErrorMsg()
  {
    return $this->errorMsg;
  }
  /** @param string */
  public function setExpectedConfigVersion($expectedConfigVersion)
  {
    $this->expectedConfigVersion = $expectedConfigVersion;
  }
  /** @return string */
  public function getExpectedConfigVersion()
  {
    return $this->expectedConfigVersion;
  }
  /** @param string[] */
  public function setExtendedStatus($extendedStatus)
  {
    $this->extendedStatus = $extendedStatus;
  }
  /** @return string[] */
  public function getExtendedStatus()
  {
    return $this->extendedStatus;
  }
}

class GoogleCloudBeyondcorpConnectorsV1alphaRemoteAgentDetails extends \Google\Model
{
}

class GoogleCloudLocationListLocationsResponse extends \Google\Collection
{
  /** @var GoogleCloudLocationLocation[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = GoogleCloudLocationLocation::class;
  protected $locationsDataType = 'array';
  /** @param GoogleCloudLocationLocation[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudLocationLocation[] */
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

class GoogleCloudLocationLocation extends \Google\Model
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

class GoogleIamV1AuditConfig extends \Google\Collection
{
  /** @var GoogleIamV1AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = GoogleIamV1AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param GoogleIamV1AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return GoogleIamV1AuditLogConfig[] */
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class GoogleIamV1AuditLogConfig extends \Google\Collection
{
  /** @var string[] */
  public $exemptedMembers;
  /** @var string */
  public $logType;
  protected $collection_key = 'exemptedMembers';
  /** @param string[] */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /** @return string[] */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /** @param string */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string */
  public function getLogType()
  {
    return $this->logType;
  }
}

class GoogleIamV1Binding extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleIamV1Policy extends \Google\Collection
{
  /** @var GoogleIamV1AuditConfig[] */
  public $auditConfigs;
  /** @var GoogleIamV1Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = GoogleIamV1AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = GoogleIamV1Binding::class;
  protected $bindingsDataType = 'array';
  /** @param GoogleIamV1AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return GoogleIamV1AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param GoogleIamV1Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return GoogleIamV1Binding[] */
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

class GoogleIamV1SetIamPolicyRequest extends \Google\Model
{
  /** @var GoogleIamV1Policy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = GoogleIamV1Policy::class;
  protected $policyDataType = '';
  /** @param GoogleIamV1Policy */
  public function setPolicy(GoogleIamV1Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return GoogleIamV1Policy */
  public function getPolicy()
  {
    return $this->policy;
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

class GoogleIamV1TestIamPermissionsRequest extends \Google\Collection
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

class GoogleIamV1TestIamPermissionsResponse extends \Google\Collection
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

class GoogleTypeExpr extends \Google\Model
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

class Ingress extends \Google\Model
{
  /** @var Config */
  public $config;
  protected $configType = Config::class;
  protected $configDataType = '';
  /** @param Config */
  public function setConfig(Config $config)
  {
    $this->config = $config;
  }
  /** @return Config */
  public function getConfig()
  {
    return $this->config;
  }
}

class ListAppGatewaysResponse extends \Google\Collection
{
  /** @var AppGateway[] */
  public $appGateways;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $appGatewaysType = AppGateway::class;
  protected $appGatewaysDataType = 'array';
  /** @param AppGateway[] */
  public function setAppGateways($appGateways)
  {
    $this->appGateways = $appGateways;
  }
  /** @return AppGateway[] */
  public function getAppGateways()
  {
    return $this->appGateways;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListClientConnectorServicesResponse extends \Google\Collection
{
  /** @var ClientConnectorService[] */
  public $clientConnectorServices;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $clientConnectorServicesType = ClientConnectorService::class;
  protected $clientConnectorServicesDataType = 'array';
  /** @param ClientConnectorService[] */
  public function setClientConnectorServices($clientConnectorServices)
  {
    $this->clientConnectorServices = $clientConnectorServices;
  }
  /** @return ClientConnectorService[] */
  public function getClientConnectorServices()
  {
    return $this->clientConnectorServices;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListClientGatewaysResponse extends \Google\Collection
{
  /** @var ClientGateway[] */
  public $clientGateways;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $clientGatewaysType = ClientGateway::class;
  protected $clientGatewaysDataType = 'array';
  /** @param ClientGateway[] */
  public function setClientGateways($clientGateways)
  {
    $this->clientGateways = $clientGateways;
  }
  /** @return ClientGateway[] */
  public function getClientGateways()
  {
    return $this->clientGateways;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class PeeredVpc extends \Google\Model
{
  /** @var string */
  public $networkVpc;

  /** @param string */
  public function setNetworkVpc($networkVpc)
  {
    $this->networkVpc = $networkVpc;
  }
  /** @return string */
  public function getNetworkVpc()
  {
    return $this->networkVpc;
  }
}

class Tunnelv1ProtoTunnelerError extends \Google\Model
{
  /** @var string */
  public $err;
  /** @var bool */
  public $retryable;

  /** @param string */
  public function setErr($err)
  {
    $this->err = $err;
  }
  /** @return string */
  public function getErr()
  {
    return $this->err;
  }
  /** @param bool */
  public function setRetryable($retryable)
  {
    $this->retryable = $retryable;
  }
  /** @return bool */
  public function getRetryable()
  {
    return $this->retryable;
  }
}

class Tunnelv1ProtoTunnelerInfo extends \Google\Model
{
  /** @var string */
  public $backoffRetryCount;
  /** @var string */
  public $id;
  /** @var Tunnelv1ProtoTunnelerError */
  public $latestErr;
  /** @var string */
  public $latestRetryTime;
  /** @var string */
  public $totalRetryCount;
  protected $latestErrType = Tunnelv1ProtoTunnelerError::class;
  protected $latestErrDataType = '';
  /** @param string */
  public function setBackoffRetryCount($backoffRetryCount)
  {
    $this->backoffRetryCount = $backoffRetryCount;
  }
  /** @return string */
  public function getBackoffRetryCount()
  {
    return $this->backoffRetryCount;
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
  /** @param Tunnelv1ProtoTunnelerError */
  public function setLatestErr(Tunnelv1ProtoTunnelerError $latestErr)
  {
    $this->latestErr = $latestErr;
  }
  /** @return Tunnelv1ProtoTunnelerError */
  public function getLatestErr()
  {
    return $this->latestErr;
  }
  /** @param string */
  public function setLatestRetryTime($latestRetryTime)
  {
    $this->latestRetryTime = $latestRetryTime;
  }
  /** @return string */
  public function getLatestRetryTime()
  {
    return $this->latestRetryTime;
  }
  /** @param string */
  public function setTotalRetryCount($totalRetryCount)
  {
    $this->totalRetryCount = $totalRetryCount;
  }
  /** @return string */
  public function getTotalRetryCount()
  {
    return $this->totalRetryCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllocatedConnection::class, 'Google_Service_BeyondCorp_AllocatedConnection');
class_alias(AppGateway::class, 'Google_Service_BeyondCorp_AppGateway');
class_alias(AppGatewayOperationMetadata::class, 'Google_Service_BeyondCorp_AppGatewayOperationMetadata');
class_alias(BeyondcorpEmpty::class, 'Google_Service_BeyondCorp_BeyondcorpEmpty');
class_alias(ClientConnectorService::class, 'Google_Service_BeyondCorp_ClientConnectorService');
class_alias(ClientConnectorServiceOperationMetadata::class, 'Google_Service_BeyondCorp_ClientConnectorServiceOperationMetadata');
class_alias(ClientGateway::class, 'Google_Service_BeyondCorp_ClientGateway');
class_alias(ClientGatewayOperationMetadata::class, 'Google_Service_BeyondCorp_ClientGatewayOperationMetadata');
class_alias(CloudSecurityZerotrustApplinkAppConnectorProtoConnectionConfig::class, 'Google_Service_BeyondCorp_CloudSecurityZerotrustApplinkAppConnectorProtoConnectionConfig');
class_alias(CloudSecurityZerotrustApplinkAppConnectorProtoConnectorDetails::class, 'Google_Service_BeyondCorp_CloudSecurityZerotrustApplinkAppConnectorProtoConnectorDetails');
class_alias(CloudSecurityZerotrustApplinkAppConnectorProtoGateway::class, 'Google_Service_BeyondCorp_CloudSecurityZerotrustApplinkAppConnectorProtoGateway');
class_alias(CloudSecurityZerotrustApplinkLogagentProtoLogAgentDetails::class, 'Google_Service_BeyondCorp_CloudSecurityZerotrustApplinkLogagentProtoLogAgentDetails');
class_alias(Config::class, 'Google_Service_BeyondCorp_Config');
class_alias(DestinationRoute::class, 'Google_Service_BeyondCorp_DestinationRoute');
class_alias(Egress::class, 'Google_Service_BeyondCorp_Egress');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1AppConnection::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1AppConnection');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1AppConnectionApplicationEndpoint');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1AppConnectionGateway');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1AppConnectionOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1AppConnectionOperationMetadata');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1ListAppConnectionsResponse::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1ListAppConnectionsResponse');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponse::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponse');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1ResolveAppConnectionsResponseAppConnectionDetails');
class_alias(GoogleCloudBeyondcorpAppconnectionsV1alphaAppConnectionOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectionsV1alphaAppConnectionOperationMetadata');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1AppConnector::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1AppConnector');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1AppConnectorInstanceConfig');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1AppConnectorOperationMetadata');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfo');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1AppConnectorPrincipalInfoServiceAccount');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ContainerHealthDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ContainerHealthDetails');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ImageConfig::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ImageConfig');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ListAppConnectorsResponse::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ListAppConnectorsResponse');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1NotificationConfig');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1NotificationConfigCloudPubSubNotificationConfig');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1RemoteAgentDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1RemoteAgentDetails');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ReportStatusRequest::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ReportStatusRequest');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ResolveInstanceConfigResponse::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ResolveInstanceConfigResponse');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1ResourceInfo');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1alphaAppConnectorOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1alphaAppConnectorOperationMetadata');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1alphaContainerHealthDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1alphaContainerHealthDetails');
class_alias(GoogleCloudBeyondcorpAppconnectorsV1alphaRemoteAgentDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppconnectorsV1alphaRemoteAgentDetails');
class_alias(GoogleCloudBeyondcorpAppgatewaysV1alphaAppGatewayOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpAppgatewaysV1alphaAppGatewayOperationMetadata');
class_alias(GoogleCloudBeyondcorpClientconnectorservicesV1alphaClientConnectorServiceOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpClientconnectorservicesV1alphaClientConnectorServiceOperationMetadata');
class_alias(GoogleCloudBeyondcorpClientgatewaysV1alphaClientGatewayOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpClientgatewaysV1alphaClientGatewayOperationMetadata');
class_alias(GoogleCloudBeyondcorpConnectionsV1alphaConnectionOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpConnectionsV1alphaConnectionOperationMetadata');
class_alias(GoogleCloudBeyondcorpConnectorsV1alphaConnectorOperationMetadata::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpConnectorsV1alphaConnectorOperationMetadata');
class_alias(GoogleCloudBeyondcorpConnectorsV1alphaContainerHealthDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpConnectorsV1alphaContainerHealthDetails');
class_alias(GoogleCloudBeyondcorpConnectorsV1alphaRemoteAgentDetails::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpConnectorsV1alphaRemoteAgentDetails');
class_alias(GoogleCloudLocationListLocationsResponse::class, 'Google_Service_BeyondCorp_GoogleCloudLocationListLocationsResponse');
class_alias(GoogleCloudLocationLocation::class, 'Google_Service_BeyondCorp_GoogleCloudLocationLocation');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_BeyondCorp_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_BeyondCorp_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_BeyondCorp_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_BeyondCorp_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_BeyondCorp_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_BeyondCorp_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_BeyondCorp_GoogleIamV1TestIamPermissionsResponse');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_BeyondCorp_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_BeyondCorp_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_BeyondCorp_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_BeyondCorp_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_BeyondCorp_GoogleTypeExpr');
class_alias(Ingress::class, 'Google_Service_BeyondCorp_Ingress');
class_alias(ListAppGatewaysResponse::class, 'Google_Service_BeyondCorp_ListAppGatewaysResponse');
class_alias(ListClientConnectorServicesResponse::class, 'Google_Service_BeyondCorp_ListClientConnectorServicesResponse');
class_alias(ListClientGatewaysResponse::class, 'Google_Service_BeyondCorp_ListClientGatewaysResponse');
class_alias(PeeredVpc::class, 'Google_Service_BeyondCorp_PeeredVpc');
class_alias(Tunnelv1ProtoTunnelerError::class, 'Google_Service_BeyondCorp_Tunnelv1ProtoTunnelerError');
class_alias(Tunnelv1ProtoTunnelerInfo::class, 'Google_Service_BeyondCorp_Tunnelv1ProtoTunnelerInfo');
