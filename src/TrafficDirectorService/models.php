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

namespace Google\Service\TrafficDirectorService;

class Address extends \Google\Model
{
  /** @var Pipe */
  public $pipe;
  /** @var SocketAddress */
  public $socketAddress;
  protected $pipeType = Pipe::class;
  protected $pipeDataType = '';
  protected $socketAddressType = SocketAddress::class;
  protected $socketAddressDataType = '';
  /** @param Pipe */
  public function setPipe(Pipe $pipe)
  {
    $this->pipe = $pipe;
  }
  /** @return Pipe */
  public function getPipe()
  {
    return $this->pipe;
  }
  /** @param SocketAddress */
  public function setSocketAddress(SocketAddress $socketAddress)
  {
    $this->socketAddress = $socketAddress;
  }
  /** @return SocketAddress */
  public function getSocketAddress()
  {
    return $this->socketAddress;
  }
}

class BuildVersion extends \Google\Model
{
  /** @var array[] */
  public $metadata;
  /** @var SemanticVersion */
  public $version;
  protected $versionType = SemanticVersion::class;
  protected $versionDataType = '';
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
  /** @param SemanticVersion */
  public function setVersion(SemanticVersion $version)
  {
    $this->version = $version;
  }
  /** @return SemanticVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class ClientConfig extends \Google\Collection
{
  /** @var Node */
  public $node;
  /** @var PerXdsConfig[] */
  public $xdsConfig;
  protected $collection_key = 'xdsConfig';
  protected $nodeType = Node::class;
  protected $nodeDataType = '';
  protected $xdsConfigType = PerXdsConfig::class;
  protected $xdsConfigDataType = 'array';
  /** @param Node */
  public function setNode(Node $node)
  {
    $this->node = $node;
  }
  /** @return Node */
  public function getNode()
  {
    return $this->node;
  }
  /** @param PerXdsConfig[] */
  public function setXdsConfig($xdsConfig)
  {
    $this->xdsConfig = $xdsConfig;
  }
  /** @return PerXdsConfig[] */
  public function getXdsConfig()
  {
    return $this->xdsConfig;
  }
}

class ClientStatusRequest extends \Google\Collection
{
  /** @var NodeMatcher[] */
  public $nodeMatchers;
  protected $collection_key = 'nodeMatchers';
  protected $nodeMatchersType = NodeMatcher::class;
  protected $nodeMatchersDataType = 'array';
  /** @param NodeMatcher[] */
  public function setNodeMatchers($nodeMatchers)
  {
    $this->nodeMatchers = $nodeMatchers;
  }
  /** @return NodeMatcher[] */
  public function getNodeMatchers()
  {
    return $this->nodeMatchers;
  }
}

class ClientStatusResponse extends \Google\Collection
{
  /** @var ClientConfig[] */
  public $config;
  protected $collection_key = 'config';
  protected $configType = ClientConfig::class;
  protected $configDataType = 'array';
  /** @param ClientConfig[] */
  public function setConfig($config)
  {
    $this->config = $config;
  }
  /** @return ClientConfig[] */
  public function getConfig()
  {
    return $this->config;
  }
}

class ClustersConfigDump extends \Google\Collection
{
  /** @var DynamicCluster[] */
  public $dynamicActiveClusters;
  /** @var DynamicCluster[] */
  public $dynamicWarmingClusters;
  /** @var StaticCluster[] */
  public $staticClusters;
  /** @var string */
  public $versionInfo;
  protected $collection_key = 'staticClusters';
  protected $dynamicActiveClustersType = DynamicCluster::class;
  protected $dynamicActiveClustersDataType = 'array';
  protected $dynamicWarmingClustersType = DynamicCluster::class;
  protected $dynamicWarmingClustersDataType = 'array';
  protected $staticClustersType = StaticCluster::class;
  protected $staticClustersDataType = 'array';
  /** @param DynamicCluster[] */
  public function setDynamicActiveClusters($dynamicActiveClusters)
  {
    $this->dynamicActiveClusters = $dynamicActiveClusters;
  }
  /** @return DynamicCluster[] */
  public function getDynamicActiveClusters()
  {
    return $this->dynamicActiveClusters;
  }
  /** @param DynamicCluster[] */
  public function setDynamicWarmingClusters($dynamicWarmingClusters)
  {
    $this->dynamicWarmingClusters = $dynamicWarmingClusters;
  }
  /** @return DynamicCluster[] */
  public function getDynamicWarmingClusters()
  {
    return $this->dynamicWarmingClusters;
  }
  /** @param StaticCluster[] */
  public function setStaticClusters($staticClusters)
  {
    $this->staticClusters = $staticClusters;
  }
  /** @return StaticCluster[] */
  public function getStaticClusters()
  {
    return $this->staticClusters;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class DoubleMatcher extends \Google\Model
{
  public $exact;
  /** @var DoubleRange */
  public $range;
  protected $rangeType = DoubleRange::class;
  protected $rangeDataType = '';
  public function setExact($exact)
  {
    $this->exact = $exact;
  }
  public function getExact()
  {
    return $this->exact;
  }
  /** @param DoubleRange */
  public function setRange(DoubleRange $range)
  {
    $this->range = $range;
  }
  /** @return DoubleRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DoubleRange extends \Google\Model
{
  public $end;
  public $start;

  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class DynamicCluster extends \Google\Model
{
  /** @var array[] */
  public $cluster;
  /** @var string */
  public $lastUpdated;
  /** @var string */
  public $versionInfo;

  /** @param array[] */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return array[] */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class DynamicListener extends \Google\Model
{
  /** @var DynamicListenerState */
  public $activeState;
  /** @var DynamicListenerState */
  public $drainingState;
  /** @var UpdateFailureState */
  public $errorState;
  /** @var string */
  public $name;
  /** @var DynamicListenerState */
  public $warmingState;
  protected $activeStateType = DynamicListenerState::class;
  protected $activeStateDataType = '';
  protected $drainingStateType = DynamicListenerState::class;
  protected $drainingStateDataType = '';
  protected $errorStateType = UpdateFailureState::class;
  protected $errorStateDataType = '';
  protected $warmingStateType = DynamicListenerState::class;
  protected $warmingStateDataType = '';
  /** @param DynamicListenerState */
  public function setActiveState(DynamicListenerState $activeState)
  {
    $this->activeState = $activeState;
  }
  /** @return DynamicListenerState */
  public function getActiveState()
  {
    return $this->activeState;
  }
  /** @param DynamicListenerState */
  public function setDrainingState(DynamicListenerState $drainingState)
  {
    $this->drainingState = $drainingState;
  }
  /** @return DynamicListenerState */
  public function getDrainingState()
  {
    return $this->drainingState;
  }
  /** @param UpdateFailureState */
  public function setErrorState(UpdateFailureState $errorState)
  {
    $this->errorState = $errorState;
  }
  /** @return UpdateFailureState */
  public function getErrorState()
  {
    return $this->errorState;
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
  /** @param DynamicListenerState */
  public function setWarmingState(DynamicListenerState $warmingState)
  {
    $this->warmingState = $warmingState;
  }
  /** @return DynamicListenerState */
  public function getWarmingState()
  {
    return $this->warmingState;
  }
}

class DynamicListenerState extends \Google\Model
{
  /** @var string */
  public $lastUpdated;
  /** @var array[] */
  public $listener;
  /** @var string */
  public $versionInfo;

  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /** @param array[] */
  public function setListener($listener)
  {
    $this->listener = $listener;
  }
  /** @return array[] */
  public function getListener()
  {
    return $this->listener;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class DynamicRouteConfig extends \Google\Model
{
  /** @var string */
  public $lastUpdated;
  /** @var array[] */
  public $routeConfig;
  /** @var string */
  public $versionInfo;

  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /** @param array[] */
  public function setRouteConfig($routeConfig)
  {
    $this->routeConfig = $routeConfig;
  }
  /** @return array[] */
  public function getRouteConfig()
  {
    return $this->routeConfig;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class DynamicScopedRouteConfigs extends \Google\Collection
{
  /** @var string */
  public $lastUpdated;
  /** @var string */
  public $name;
  /** @var array[] */
  public $scopedRouteConfigs;
  /** @var string */
  public $versionInfo;
  protected $collection_key = 'scopedRouteConfigs';
  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
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
  public function setScopedRouteConfigs($scopedRouteConfigs)
  {
    $this->scopedRouteConfigs = $scopedRouteConfigs;
  }
  /** @return array[] */
  public function getScopedRouteConfigs()
  {
    return $this->scopedRouteConfigs;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class Extension extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $name;
  /** @var string */
  public $typeDescriptor;
  /** @var BuildVersion */
  public $version;
  protected $versionType = BuildVersion::class;
  protected $versionDataType = '';
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
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
  public function setTypeDescriptor($typeDescriptor)
  {
    $this->typeDescriptor = $typeDescriptor;
  }
  /** @return string */
  public function getTypeDescriptor()
  {
    return $this->typeDescriptor;
  }
  /** @param BuildVersion */
  public function setVersion(BuildVersion $version)
  {
    $this->version = $version;
  }
  /** @return BuildVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class GoogleRE2 extends \Google\Model
{
  /** @var string */
  public $maxProgramSize;

  /** @param string */
  public function setMaxProgramSize($maxProgramSize)
  {
    $this->maxProgramSize = $maxProgramSize;
  }
  /** @return string */
  public function getMaxProgramSize()
  {
    return $this->maxProgramSize;
  }
}

class InlineScopedRouteConfigs extends \Google\Collection
{
  /** @var string */
  public $lastUpdated;
  /** @var string */
  public $name;
  /** @var array[] */
  public $scopedRouteConfigs;
  protected $collection_key = 'scopedRouteConfigs';
  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
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
  public function setScopedRouteConfigs($scopedRouteConfigs)
  {
    $this->scopedRouteConfigs = $scopedRouteConfigs;
  }
  /** @return array[] */
  public function getScopedRouteConfigs()
  {
    return $this->scopedRouteConfigs;
  }
}

class ListMatcher extends \Google\Model
{
  /** @var ValueMatcher */
  public $oneOf;
  protected $oneOfType = ValueMatcher::class;
  protected $oneOfDataType = '';
  /** @param ValueMatcher */
  public function setOneOf(ValueMatcher $oneOf)
  {
    $this->oneOf = $oneOf;
  }
  /** @return ValueMatcher */
  public function getOneOf()
  {
    return $this->oneOf;
  }
}

class ListenersConfigDump extends \Google\Collection
{
  /** @var DynamicListener[] */
  public $dynamicListeners;
  /** @var StaticListener[] */
  public $staticListeners;
  /** @var string */
  public $versionInfo;
  protected $collection_key = 'staticListeners';
  protected $dynamicListenersType = DynamicListener::class;
  protected $dynamicListenersDataType = 'array';
  protected $staticListenersType = StaticListener::class;
  protected $staticListenersDataType = 'array';
  /** @param DynamicListener[] */
  public function setDynamicListeners($dynamicListeners)
  {
    $this->dynamicListeners = $dynamicListeners;
  }
  /** @return DynamicListener[] */
  public function getDynamicListeners()
  {
    return $this->dynamicListeners;
  }
  /** @param StaticListener[] */
  public function setStaticListeners($staticListeners)
  {
    $this->staticListeners = $staticListeners;
  }
  /** @return StaticListener[] */
  public function getStaticListeners()
  {
    return $this->staticListeners;
  }
  /** @param string */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /** @return string */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

class Locality extends \Google\Model
{
  /** @var string */
  public $region;
  /** @var string */
  public $subZone;
  /** @var string */
  public $zone;

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
  /** @param string */
  public function setSubZone($subZone)
  {
    $this->subZone = $subZone;
  }
  /** @return string */
  public function getSubZone()
  {
    return $this->subZone;
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

class Node extends \Google\Collection
{
  /** @var string */
  public $buildVersion;
  /** @var string[] */
  public $clientFeatures;
  /** @var string */
  public $cluster;
  /** @var Extension[] */
  public $extensions;
  /** @var string */
  public $id;
  /** @var Address[] */
  public $listeningAddresses;
  /** @var Locality */
  public $locality;
  /** @var array[] */
  public $metadata;
  /** @var BuildVersion */
  public $userAgentBuildVersion;
  /** @var string */
  public $userAgentName;
  /** @var string */
  public $userAgentVersion;
  protected $collection_key = 'listeningAddresses';
  protected $extensionsType = Extension::class;
  protected $extensionsDataType = 'array';
  protected $listeningAddressesType = Address::class;
  protected $listeningAddressesDataType = 'array';
  protected $localityType = Locality::class;
  protected $localityDataType = '';
  protected $userAgentBuildVersionType = BuildVersion::class;
  protected $userAgentBuildVersionDataType = '';
  /** @param string */
  public function setBuildVersion($buildVersion)
  {
    $this->buildVersion = $buildVersion;
  }
  /** @return string */
  public function getBuildVersion()
  {
    return $this->buildVersion;
  }
  /** @param string[] */
  public function setClientFeatures($clientFeatures)
  {
    $this->clientFeatures = $clientFeatures;
  }
  /** @return string[] */
  public function getClientFeatures()
  {
    return $this->clientFeatures;
  }
  /** @param string */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param Extension[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return Extension[] */
  public function getExtensions()
  {
    return $this->extensions;
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
  /** @param Address[] */
  public function setListeningAddresses($listeningAddresses)
  {
    $this->listeningAddresses = $listeningAddresses;
  }
  /** @return Address[] */
  public function getListeningAddresses()
  {
    return $this->listeningAddresses;
  }
  /** @param Locality */
  public function setLocality(Locality $locality)
  {
    $this->locality = $locality;
  }
  /** @return Locality */
  public function getLocality()
  {
    return $this->locality;
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
  /** @param BuildVersion */
  public function setUserAgentBuildVersion(BuildVersion $userAgentBuildVersion)
  {
    $this->userAgentBuildVersion = $userAgentBuildVersion;
  }
  /** @return BuildVersion */
  public function getUserAgentBuildVersion()
  {
    return $this->userAgentBuildVersion;
  }
  /** @param string */
  public function setUserAgentName($userAgentName)
  {
    $this->userAgentName = $userAgentName;
  }
  /** @return string */
  public function getUserAgentName()
  {
    return $this->userAgentName;
  }
  /** @param string */
  public function setUserAgentVersion($userAgentVersion)
  {
    $this->userAgentVersion = $userAgentVersion;
  }
  /** @return string */
  public function getUserAgentVersion()
  {
    return $this->userAgentVersion;
  }
}

class NodeMatcher extends \Google\Collection
{
  /** @var StringMatcher */
  public $nodeId;
  /** @var StructMatcher[] */
  public $nodeMetadatas;
  protected $collection_key = 'nodeMetadatas';
  protected $nodeIdType = StringMatcher::class;
  protected $nodeIdDataType = '';
  protected $nodeMetadatasType = StructMatcher::class;
  protected $nodeMetadatasDataType = 'array';
  /** @param StringMatcher */
  public function setNodeId(StringMatcher $nodeId)
  {
    $this->nodeId = $nodeId;
  }
  /** @return StringMatcher */
  public function getNodeId()
  {
    return $this->nodeId;
  }
  /** @param StructMatcher[] */
  public function setNodeMetadatas($nodeMetadatas)
  {
    $this->nodeMetadatas = $nodeMetadatas;
  }
  /** @return StructMatcher[] */
  public function getNodeMetadatas()
  {
    return $this->nodeMetadatas;
  }
}

class NullMatch extends \Google\Model
{
}

class PathSegment extends \Google\Model
{
  /** @var string */
  public $key;

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

class PerXdsConfig extends \Google\Model
{
  /** @var ClustersConfigDump */
  public $clusterConfig;
  /** @var ListenersConfigDump */
  public $listenerConfig;
  /** @var RoutesConfigDump */
  public $routeConfig;
  /** @var ScopedRoutesConfigDump */
  public $scopedRouteConfig;
  /** @var string */
  public $status;
  protected $clusterConfigType = ClustersConfigDump::class;
  protected $clusterConfigDataType = '';
  protected $listenerConfigType = ListenersConfigDump::class;
  protected $listenerConfigDataType = '';
  protected $routeConfigType = RoutesConfigDump::class;
  protected $routeConfigDataType = '';
  protected $scopedRouteConfigType = ScopedRoutesConfigDump::class;
  protected $scopedRouteConfigDataType = '';
  /** @param ClustersConfigDump */
  public function setClusterConfig(ClustersConfigDump $clusterConfig)
  {
    $this->clusterConfig = $clusterConfig;
  }
  /** @return ClustersConfigDump */
  public function getClusterConfig()
  {
    return $this->clusterConfig;
  }
  /** @param ListenersConfigDump */
  public function setListenerConfig(ListenersConfigDump $listenerConfig)
  {
    $this->listenerConfig = $listenerConfig;
  }
  /** @return ListenersConfigDump */
  public function getListenerConfig()
  {
    return $this->listenerConfig;
  }
  /** @param RoutesConfigDump */
  public function setRouteConfig(RoutesConfigDump $routeConfig)
  {
    $this->routeConfig = $routeConfig;
  }
  /** @return RoutesConfigDump */
  public function getRouteConfig()
  {
    return $this->routeConfig;
  }
  /** @param ScopedRoutesConfigDump */
  public function setScopedRouteConfig(ScopedRoutesConfigDump $scopedRouteConfig)
  {
    $this->scopedRouteConfig = $scopedRouteConfig;
  }
  /** @return ScopedRoutesConfigDump */
  public function getScopedRouteConfig()
  {
    return $this->scopedRouteConfig;
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
}

class Pipe extends \Google\Model
{
  /** @var string */
  public $mode;
  /** @var string */
  public $path;

  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
}

class RegexMatcher extends \Google\Model
{
  /** @var GoogleRE2 */
  public $googleRe2;
  /** @var string */
  public $regex;
  protected $googleRe2Type = GoogleRE2::class;
  protected $googleRe2DataType = '';
  /** @param GoogleRE2 */
  public function setGoogleRe2(GoogleRE2 $googleRe2)
  {
    $this->googleRe2 = $googleRe2;
  }
  /** @return GoogleRE2 */
  public function getGoogleRe2()
  {
    return $this->googleRe2;
  }
  /** @param string */
  public function setRegex($regex)
  {
    $this->regex = $regex;
  }
  /** @return string */
  public function getRegex()
  {
    return $this->regex;
  }
}

class RoutesConfigDump extends \Google\Collection
{
  /** @var DynamicRouteConfig[] */
  public $dynamicRouteConfigs;
  /** @var StaticRouteConfig[] */
  public $staticRouteConfigs;
  protected $collection_key = 'staticRouteConfigs';
  protected $dynamicRouteConfigsType = DynamicRouteConfig::class;
  protected $dynamicRouteConfigsDataType = 'array';
  protected $staticRouteConfigsType = StaticRouteConfig::class;
  protected $staticRouteConfigsDataType = 'array';
  /** @param DynamicRouteConfig[] */
  public function setDynamicRouteConfigs($dynamicRouteConfigs)
  {
    $this->dynamicRouteConfigs = $dynamicRouteConfigs;
  }
  /** @return DynamicRouteConfig[] */
  public function getDynamicRouteConfigs()
  {
    return $this->dynamicRouteConfigs;
  }
  /** @param StaticRouteConfig[] */
  public function setStaticRouteConfigs($staticRouteConfigs)
  {
    $this->staticRouteConfigs = $staticRouteConfigs;
  }
  /** @return StaticRouteConfig[] */
  public function getStaticRouteConfigs()
  {
    return $this->staticRouteConfigs;
  }
}

class ScopedRoutesConfigDump extends \Google\Collection
{
  /** @var DynamicScopedRouteConfigs[] */
  public $dynamicScopedRouteConfigs;
  /** @var InlineScopedRouteConfigs[] */
  public $inlineScopedRouteConfigs;
  protected $collection_key = 'inlineScopedRouteConfigs';
  protected $dynamicScopedRouteConfigsType = DynamicScopedRouteConfigs::class;
  protected $dynamicScopedRouteConfigsDataType = 'array';
  protected $inlineScopedRouteConfigsType = InlineScopedRouteConfigs::class;
  protected $inlineScopedRouteConfigsDataType = 'array';
  /** @param DynamicScopedRouteConfigs[] */
  public function setDynamicScopedRouteConfigs($dynamicScopedRouteConfigs)
  {
    $this->dynamicScopedRouteConfigs = $dynamicScopedRouteConfigs;
  }
  /** @return DynamicScopedRouteConfigs[] */
  public function getDynamicScopedRouteConfigs()
  {
    return $this->dynamicScopedRouteConfigs;
  }
  /** @param InlineScopedRouteConfigs[] */
  public function setInlineScopedRouteConfigs($inlineScopedRouteConfigs)
  {
    $this->inlineScopedRouteConfigs = $inlineScopedRouteConfigs;
  }
  /** @return InlineScopedRouteConfigs[] */
  public function getInlineScopedRouteConfigs()
  {
    return $this->inlineScopedRouteConfigs;
  }
}

class SemanticVersion extends \Google\Model
{
  /** @var string */
  public $majorNumber;
  /** @var string */
  public $minorNumber;
  /** @var string */
  public $patch;

  /** @param string */
  public function setMajorNumber($majorNumber)
  {
    $this->majorNumber = $majorNumber;
  }
  /** @return string */
  public function getMajorNumber()
  {
    return $this->majorNumber;
  }
  /** @param string */
  public function setMinorNumber($minorNumber)
  {
    $this->minorNumber = $minorNumber;
  }
  /** @return string */
  public function getMinorNumber()
  {
    return $this->minorNumber;
  }
  /** @param string */
  public function setPatch($patch)
  {
    $this->patch = $patch;
  }
  /** @return string */
  public function getPatch()
  {
    return $this->patch;
  }
}

class SocketAddress extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var bool */
  public $ipv4Compat;
  /** @var string */
  public $namedPort;
  /** @var string */
  public $portValue;
  /** @var string */
  public $protocol;
  /** @var string */
  public $resolverName;

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
  /** @param bool */
  public function setIpv4Compat($ipv4Compat)
  {
    $this->ipv4Compat = $ipv4Compat;
  }
  /** @return bool */
  public function getIpv4Compat()
  {
    return $this->ipv4Compat;
  }
  /** @param string */
  public function setNamedPort($namedPort)
  {
    $this->namedPort = $namedPort;
  }
  /** @return string */
  public function getNamedPort()
  {
    return $this->namedPort;
  }
  /** @param string */
  public function setPortValue($portValue)
  {
    $this->portValue = $portValue;
  }
  /** @return string */
  public function getPortValue()
  {
    return $this->portValue;
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
  public function setResolverName($resolverName)
  {
    $this->resolverName = $resolverName;
  }
  /** @return string */
  public function getResolverName()
  {
    return $this->resolverName;
  }
}

class StaticCluster extends \Google\Model
{
  /** @var array[] */
  public $cluster;
  /** @var string */
  public $lastUpdated;

  /** @param array[] */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return array[] */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
}

class StaticListener extends \Google\Model
{
  /** @var string */
  public $lastUpdated;
  /** @var array[] */
  public $listener;

  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /** @param array[] */
  public function setListener($listener)
  {
    $this->listener = $listener;
  }
  /** @return array[] */
  public function getListener()
  {
    return $this->listener;
  }
}

class StaticRouteConfig extends \Google\Model
{
  /** @var string */
  public $lastUpdated;
  /** @var array[] */
  public $routeConfig;

  /** @param string */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /** @param array[] */
  public function setRouteConfig($routeConfig)
  {
    $this->routeConfig = $routeConfig;
  }
  /** @return array[] */
  public function getRouteConfig()
  {
    return $this->routeConfig;
  }
}

class StringMatcher extends \Google\Model
{
  /** @var string */
  public $exact;
  /** @var bool */
  public $ignoreCase;
  /** @var string */
  public $prefix;
  /** @var string */
  public $regex;
  /** @var RegexMatcher */
  public $safeRegex;
  /** @var string */
  public $suffix;
  protected $safeRegexType = RegexMatcher::class;
  protected $safeRegexDataType = '';
  /** @param string */
  public function setExact($exact)
  {
    $this->exact = $exact;
  }
  /** @return string */
  public function getExact()
  {
    return $this->exact;
  }
  /** @param bool */
  public function setIgnoreCase($ignoreCase)
  {
    $this->ignoreCase = $ignoreCase;
  }
  /** @return bool */
  public function getIgnoreCase()
  {
    return $this->ignoreCase;
  }
  /** @param string */
  public function setPrefix($prefix)
  {
    $this->prefix = $prefix;
  }
  /** @return string */
  public function getPrefix()
  {
    return $this->prefix;
  }
  /** @param string */
  public function setRegex($regex)
  {
    $this->regex = $regex;
  }
  /** @return string */
  public function getRegex()
  {
    return $this->regex;
  }
  /** @param RegexMatcher */
  public function setSafeRegex(RegexMatcher $safeRegex)
  {
    $this->safeRegex = $safeRegex;
  }
  /** @return RegexMatcher */
  public function getSafeRegex()
  {
    return $this->safeRegex;
  }
  /** @param string */
  public function setSuffix($suffix)
  {
    $this->suffix = $suffix;
  }
  /** @return string */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

class StructMatcher extends \Google\Collection
{
  /** @var PathSegment[] */
  public $path;
  /** @var ValueMatcher */
  public $value;
  protected $collection_key = 'path';
  protected $pathType = PathSegment::class;
  protected $pathDataType = 'array';
  protected $valueType = ValueMatcher::class;
  protected $valueDataType = '';
  /** @param PathSegment[] */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return PathSegment[] */
  public function getPath()
  {
    return $this->path;
  }
  /** @param ValueMatcher */
  public function setValue(ValueMatcher $value)
  {
    $this->value = $value;
  }
  /** @return ValueMatcher */
  public function getValue()
  {
    return $this->value;
  }
}

class UpdateFailureState extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var array[] */
  public $failedConfiguration;
  /** @var string */
  public $lastUpdateAttempt;

  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param array[] */
  public function setFailedConfiguration($failedConfiguration)
  {
    $this->failedConfiguration = $failedConfiguration;
  }
  /** @return array[] */
  public function getFailedConfiguration()
  {
    return $this->failedConfiguration;
  }
  /** @param string */
  public function setLastUpdateAttempt($lastUpdateAttempt)
  {
    $this->lastUpdateAttempt = $lastUpdateAttempt;
  }
  /** @return string */
  public function getLastUpdateAttempt()
  {
    return $this->lastUpdateAttempt;
  }
}

class ValueMatcher extends \Google\Model
{
  /** @var bool */
  public $boolMatch;
  /** @var DoubleMatcher */
  public $doubleMatch;
  /** @var ListMatcher */
  public $listMatch;
  /** @var NullMatch */
  public $nullMatch;
  /** @var bool */
  public $presentMatch;
  /** @var StringMatcher */
  public $stringMatch;
  protected $doubleMatchType = DoubleMatcher::class;
  protected $doubleMatchDataType = '';
  protected $listMatchType = ListMatcher::class;
  protected $listMatchDataType = '';
  protected $nullMatchType = NullMatch::class;
  protected $nullMatchDataType = '';
  protected $stringMatchType = StringMatcher::class;
  protected $stringMatchDataType = '';
  /** @param bool */
  public function setBoolMatch($boolMatch)
  {
    $this->boolMatch = $boolMatch;
  }
  /** @return bool */
  public function getBoolMatch()
  {
    return $this->boolMatch;
  }
  /** @param DoubleMatcher */
  public function setDoubleMatch(DoubleMatcher $doubleMatch)
  {
    $this->doubleMatch = $doubleMatch;
  }
  /** @return DoubleMatcher */
  public function getDoubleMatch()
  {
    return $this->doubleMatch;
  }
  /** @param ListMatcher */
  public function setListMatch(ListMatcher $listMatch)
  {
    $this->listMatch = $listMatch;
  }
  /** @return ListMatcher */
  public function getListMatch()
  {
    return $this->listMatch;
  }
  /** @param NullMatch */
  public function setNullMatch(NullMatch $nullMatch)
  {
    $this->nullMatch = $nullMatch;
  }
  /** @return NullMatch */
  public function getNullMatch()
  {
    return $this->nullMatch;
  }
  /** @param bool */
  public function setPresentMatch($presentMatch)
  {
    $this->presentMatch = $presentMatch;
  }
  /** @return bool */
  public function getPresentMatch()
  {
    return $this->presentMatch;
  }
  /** @param StringMatcher */
  public function setStringMatch(StringMatcher $stringMatch)
  {
    $this->stringMatch = $stringMatch;
  }
  /** @return StringMatcher */
  public function getStringMatch()
  {
    return $this->stringMatch;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Address::class, 'Google_Service_TrafficDirectorService_Address');
class_alias(BuildVersion::class, 'Google_Service_TrafficDirectorService_BuildVersion');
class_alias(ClientConfig::class, 'Google_Service_TrafficDirectorService_ClientConfig');
class_alias(ClientStatusRequest::class, 'Google_Service_TrafficDirectorService_ClientStatusRequest');
class_alias(ClientStatusResponse::class, 'Google_Service_TrafficDirectorService_ClientStatusResponse');
class_alias(ClustersConfigDump::class, 'Google_Service_TrafficDirectorService_ClustersConfigDump');
class_alias(DoubleMatcher::class, 'Google_Service_TrafficDirectorService_DoubleMatcher');
class_alias(DoubleRange::class, 'Google_Service_TrafficDirectorService_DoubleRange');
class_alias(DynamicCluster::class, 'Google_Service_TrafficDirectorService_DynamicCluster');
class_alias(DynamicListener::class, 'Google_Service_TrafficDirectorService_DynamicListener');
class_alias(DynamicListenerState::class, 'Google_Service_TrafficDirectorService_DynamicListenerState');
class_alias(DynamicRouteConfig::class, 'Google_Service_TrafficDirectorService_DynamicRouteConfig');
class_alias(DynamicScopedRouteConfigs::class, 'Google_Service_TrafficDirectorService_DynamicScopedRouteConfigs');
class_alias(Extension::class, 'Google_Service_TrafficDirectorService_Extension');
class_alias(GoogleRE2::class, 'Google_Service_TrafficDirectorService_GoogleRE2');
class_alias(InlineScopedRouteConfigs::class, 'Google_Service_TrafficDirectorService_InlineScopedRouteConfigs');
class_alias(ListMatcher::class, 'Google_Service_TrafficDirectorService_ListMatcher');
class_alias(ListenersConfigDump::class, 'Google_Service_TrafficDirectorService_ListenersConfigDump');
class_alias(Locality::class, 'Google_Service_TrafficDirectorService_Locality');
class_alias(Node::class, 'Google_Service_TrafficDirectorService_Node');
class_alias(NodeMatcher::class, 'Google_Service_TrafficDirectorService_NodeMatcher');
class_alias(NullMatch::class, 'Google_Service_TrafficDirectorService_NullMatch');
class_alias(PathSegment::class, 'Google_Service_TrafficDirectorService_PathSegment');
class_alias(PerXdsConfig::class, 'Google_Service_TrafficDirectorService_PerXdsConfig');
class_alias(Pipe::class, 'Google_Service_TrafficDirectorService_Pipe');
class_alias(RegexMatcher::class, 'Google_Service_TrafficDirectorService_RegexMatcher');
class_alias(RoutesConfigDump::class, 'Google_Service_TrafficDirectorService_RoutesConfigDump');
class_alias(ScopedRoutesConfigDump::class, 'Google_Service_TrafficDirectorService_ScopedRoutesConfigDump');
class_alias(SemanticVersion::class, 'Google_Service_TrafficDirectorService_SemanticVersion');
class_alias(SocketAddress::class, 'Google_Service_TrafficDirectorService_SocketAddress');
class_alias(StaticCluster::class, 'Google_Service_TrafficDirectorService_StaticCluster');
class_alias(StaticListener::class, 'Google_Service_TrafficDirectorService_StaticListener');
class_alias(StaticRouteConfig::class, 'Google_Service_TrafficDirectorService_StaticRouteConfig');
class_alias(StringMatcher::class, 'Google_Service_TrafficDirectorService_StringMatcher');
class_alias(StructMatcher::class, 'Google_Service_TrafficDirectorService_StructMatcher');
class_alias(UpdateFailureState::class, 'Google_Service_TrafficDirectorService_UpdateFailureState');
class_alias(ValueMatcher::class, 'Google_Service_TrafficDirectorService_ValueMatcher');
