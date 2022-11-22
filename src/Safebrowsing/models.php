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

namespace Google\Service\Safebrowsing;

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleSecuritySafebrowsingV4Checksum extends \Google\Model
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

class GoogleSecuritySafebrowsingV4ClientInfo extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientVersion;

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
  public function setClientVersion($clientVersion)
  {
    $this->clientVersion = $clientVersion;
  }
  /** @return string */
  public function getClientVersion()
  {
    return $this->clientVersion;
  }
}

class GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequest extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ClientInfo */
  public $client;
  /** @var GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest[] */
  public $listUpdateRequests;
  protected $collection_key = 'listUpdateRequests';
  protected $clientType = GoogleSecuritySafebrowsingV4ClientInfo::class;
  protected $clientDataType = '';
  protected $listUpdateRequestsType = GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest::class;
  protected $listUpdateRequestsDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ClientInfo */
  public function setClient(GoogleSecuritySafebrowsingV4ClientInfo $client)
  {
    $this->client = $client;
  }
  /** @return GoogleSecuritySafebrowsingV4ClientInfo */
  public function getClient()
  {
    return $this->client;
  }
  /** @param GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest[] */
  public function setListUpdateRequests($listUpdateRequests)
  {
    $this->listUpdateRequests = $listUpdateRequests;
  }
  /** @return GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest[] */
  public function getListUpdateRequests()
  {
    return $this->listUpdateRequests;
  }
}

class GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest extends \Google\Model
{
  /** @var GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints */
  public $constraints;
  /** @var string */
  public $platformType;
  /** @var string */
  public $state;
  /** @var string */
  public $threatEntryType;
  /** @var string */
  public $threatType;
  protected $constraintsType = GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints::class;
  protected $constraintsDataType = '';
  /** @param GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints */
  public function setConstraints(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints $constraints)
  {
    $this->constraints = $constraints;
  }
  /** @return GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints */
  public function getConstraints()
  {
    return $this->constraints;
  }
  /** @param string */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
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
  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }
  /** @return string */
  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }
  /** @param string */
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  /** @return string */
  public function getThreatType()
  {
    return $this->threatType;
  }
}

class GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints extends \Google\Collection
{
  /** @var string */
  public $deviceLocation;
  /** @var string */
  public $language;
  /** @var int */
  public $maxDatabaseEntries;
  /** @var int */
  public $maxUpdateEntries;
  /** @var string */
  public $region;
  /** @var string[] */
  public $supportedCompressions;
  protected $collection_key = 'supportedCompressions';
  /** @param string */
  public function setDeviceLocation($deviceLocation)
  {
    $this->deviceLocation = $deviceLocation;
  }
  /** @return string */
  public function getDeviceLocation()
  {
    return $this->deviceLocation;
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
  /** @param int */
  public function setMaxDatabaseEntries($maxDatabaseEntries)
  {
    $this->maxDatabaseEntries = $maxDatabaseEntries;
  }
  /** @return int */
  public function getMaxDatabaseEntries()
  {
    return $this->maxDatabaseEntries;
  }
  /** @param int */
  public function setMaxUpdateEntries($maxUpdateEntries)
  {
    $this->maxUpdateEntries = $maxUpdateEntries;
  }
  /** @return int */
  public function getMaxUpdateEntries()
  {
    return $this->maxUpdateEntries;
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
  /** @param string[] */
  public function setSupportedCompressions($supportedCompressions)
  {
    $this->supportedCompressions = $supportedCompressions;
  }
  /** @return string[] */
  public function getSupportedCompressions()
  {
    return $this->supportedCompressions;
  }
}

class GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponse extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse[] */
  public $listUpdateResponses;
  /** @var string */
  public $minimumWaitDuration;
  protected $collection_key = 'listUpdateResponses';
  protected $listUpdateResponsesType = GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse::class;
  protected $listUpdateResponsesDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse[] */
  public function setListUpdateResponses($listUpdateResponses)
  {
    $this->listUpdateResponses = $listUpdateResponses;
  }
  /** @return GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse[] */
  public function getListUpdateResponses()
  {
    return $this->listUpdateResponses;
  }
  /** @param string */
  public function setMinimumWaitDuration($minimumWaitDuration)
  {
    $this->minimumWaitDuration = $minimumWaitDuration;
  }
  /** @return string */
  public function getMinimumWaitDuration()
  {
    return $this->minimumWaitDuration;
  }
}

class GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
  public $additions;
  /** @var GoogleSecuritySafebrowsingV4Checksum */
  public $checksum;
  /** @var string */
  public $newClientState;
  /** @var string */
  public $platformType;
  /** @var GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
  public $removals;
  /** @var string */
  public $responseType;
  /** @var string */
  public $threatEntryType;
  /** @var string */
  public $threatType;
  protected $collection_key = 'removals';
  protected $additionsType = GoogleSecuritySafebrowsingV4ThreatEntrySet::class;
  protected $additionsDataType = 'array';
  protected $checksumType = GoogleSecuritySafebrowsingV4Checksum::class;
  protected $checksumDataType = '';
  protected $removalsType = GoogleSecuritySafebrowsingV4ThreatEntrySet::class;
  protected $removalsDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
  public function setAdditions($additions)
  {
    $this->additions = $additions;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
  public function getAdditions()
  {
    return $this->additions;
  }
  /** @param GoogleSecuritySafebrowsingV4Checksum */
  public function setChecksum(GoogleSecuritySafebrowsingV4Checksum $checksum)
  {
    $this->checksum = $checksum;
  }
  /** @return GoogleSecuritySafebrowsingV4Checksum */
  public function getChecksum()
  {
    return $this->checksum;
  }
  /** @param string */
  public function setNewClientState($newClientState)
  {
    $this->newClientState = $newClientState;
  }
  /** @return string */
  public function getNewClientState()
  {
    return $this->newClientState;
  }
  /** @param string */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
  public function setRemovals($removals)
  {
    $this->removals = $removals;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntrySet[] */
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
  /** @param string */
  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }
  /** @return string */
  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }
  /** @param string */
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  /** @return string */
  public function getThreatType()
  {
    return $this->threatType;
  }
}

class GoogleSecuritySafebrowsingV4FindFullHashesRequest extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ClientInfo */
  public $apiClient;
  /** @var GoogleSecuritySafebrowsingV4ClientInfo */
  public $client;
  /** @var string[] */
  public $clientStates;
  /** @var GoogleSecuritySafebrowsingV4ThreatInfo */
  public $threatInfo;
  protected $collection_key = 'clientStates';
  protected $apiClientType = GoogleSecuritySafebrowsingV4ClientInfo::class;
  protected $apiClientDataType = '';
  protected $clientType = GoogleSecuritySafebrowsingV4ClientInfo::class;
  protected $clientDataType = '';
  protected $threatInfoType = GoogleSecuritySafebrowsingV4ThreatInfo::class;
  protected $threatInfoDataType = '';
  /** @param GoogleSecuritySafebrowsingV4ClientInfo */
  public function setApiClient(GoogleSecuritySafebrowsingV4ClientInfo $apiClient)
  {
    $this->apiClient = $apiClient;
  }
  /** @return GoogleSecuritySafebrowsingV4ClientInfo */
  public function getApiClient()
  {
    return $this->apiClient;
  }
  /** @param GoogleSecuritySafebrowsingV4ClientInfo */
  public function setClient(GoogleSecuritySafebrowsingV4ClientInfo $client)
  {
    $this->client = $client;
  }
  /** @return GoogleSecuritySafebrowsingV4ClientInfo */
  public function getClient()
  {
    return $this->client;
  }
  /** @param string[] */
  public function setClientStates($clientStates)
  {
    $this->clientStates = $clientStates;
  }
  /** @return string[] */
  public function getClientStates()
  {
    return $this->clientStates;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatInfo */
  public function setThreatInfo(GoogleSecuritySafebrowsingV4ThreatInfo $threatInfo)
  {
    $this->threatInfo = $threatInfo;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatInfo */
  public function getThreatInfo()
  {
    return $this->threatInfo;
  }
}

class GoogleSecuritySafebrowsingV4FindFullHashesResponse extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public $matches;
  /** @var string */
  public $minimumWaitDuration;
  /** @var string */
  public $negativeCacheDuration;
  protected $collection_key = 'matches';
  protected $matchesType = GoogleSecuritySafebrowsingV4ThreatMatch::class;
  protected $matchesDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public function getMatches()
  {
    return $this->matches;
  }
  /** @param string */
  public function setMinimumWaitDuration($minimumWaitDuration)
  {
    $this->minimumWaitDuration = $minimumWaitDuration;
  }
  /** @return string */
  public function getMinimumWaitDuration()
  {
    return $this->minimumWaitDuration;
  }
  /** @param string */
  public function setNegativeCacheDuration($negativeCacheDuration)
  {
    $this->negativeCacheDuration = $negativeCacheDuration;
  }
  /** @return string */
  public function getNegativeCacheDuration()
  {
    return $this->negativeCacheDuration;
  }
}

class GoogleSecuritySafebrowsingV4FindThreatMatchesRequest extends \Google\Model
{
  /** @var GoogleSecuritySafebrowsingV4ClientInfo */
  public $client;
  /** @var GoogleSecuritySafebrowsingV4ThreatInfo */
  public $threatInfo;
  protected $clientType = GoogleSecuritySafebrowsingV4ClientInfo::class;
  protected $clientDataType = '';
  protected $threatInfoType = GoogleSecuritySafebrowsingV4ThreatInfo::class;
  protected $threatInfoDataType = '';
  /** @param GoogleSecuritySafebrowsingV4ClientInfo */
  public function setClient(GoogleSecuritySafebrowsingV4ClientInfo $client)
  {
    $this->client = $client;
  }
  /** @return GoogleSecuritySafebrowsingV4ClientInfo */
  public function getClient()
  {
    return $this->client;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatInfo */
  public function setThreatInfo(GoogleSecuritySafebrowsingV4ThreatInfo $threatInfo)
  {
    $this->threatInfo = $threatInfo;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatInfo */
  public function getThreatInfo()
  {
    return $this->threatInfo;
  }
}

class GoogleSecuritySafebrowsingV4FindThreatMatchesResponse extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public $matches;
  protected $collection_key = 'matches';
  protected $matchesType = GoogleSecuritySafebrowsingV4ThreatMatch::class;
  protected $matchesDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatMatch[] */
  public function getMatches()
  {
    return $this->matches;
  }
}

class GoogleSecuritySafebrowsingV4ListThreatListsResponse extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ThreatListDescriptor[] */
  public $threatLists;
  protected $collection_key = 'threatLists';
  protected $threatListsType = GoogleSecuritySafebrowsingV4ThreatListDescriptor::class;
  protected $threatListsDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ThreatListDescriptor[] */
  public function setThreatLists($threatLists)
  {
    $this->threatLists = $threatLists;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatListDescriptor[] */
  public function getThreatLists()
  {
    return $this->threatLists;
  }
}

class GoogleSecuritySafebrowsingV4RawHashes extends \Google\Model
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

class GoogleSecuritySafebrowsingV4RawIndices extends \Google\Collection
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

class GoogleSecuritySafebrowsingV4RiceDeltaEncoding extends \Google\Model
{
  /** @var string */
  public $encodedData;
  /** @var string */
  public $firstValue;
  /** @var int */
  public $numEntries;
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
  public function setNumEntries($numEntries)
  {
    $this->numEntries = $numEntries;
  }
  /** @return int */
  public function getNumEntries()
  {
    return $this->numEntries;
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

class GoogleSecuritySafebrowsingV4ThreatEntry extends \Google\Model
{
  /** @var string */
  public $digest;
  /** @var string */
  public $hash;
  /** @var string */
  public $url;

  /** @param string */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string */
  public function getDigest()
  {
    return $this->digest;
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
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class GoogleSecuritySafebrowsingV4ThreatEntryMetadata extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry::class;
  protected $entriesDataType = 'array';
  /** @param GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class GoogleSecuritySafebrowsingV4ThreatEntrySet extends \Google\Model
{
  /** @var string */
  public $compressionType;
  /** @var GoogleSecuritySafebrowsingV4RawHashes */
  public $rawHashes;
  /** @var GoogleSecuritySafebrowsingV4RawIndices */
  public $rawIndices;
  /** @var GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public $riceHashes;
  /** @var GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public $riceIndices;
  protected $rawHashesType = GoogleSecuritySafebrowsingV4RawHashes::class;
  protected $rawHashesDataType = '';
  protected $rawIndicesType = GoogleSecuritySafebrowsingV4RawIndices::class;
  protected $rawIndicesDataType = '';
  protected $riceHashesType = GoogleSecuritySafebrowsingV4RiceDeltaEncoding::class;
  protected $riceHashesDataType = '';
  protected $riceIndicesType = GoogleSecuritySafebrowsingV4RiceDeltaEncoding::class;
  protected $riceIndicesDataType = '';
  /** @param string */
  public function setCompressionType($compressionType)
  {
    $this->compressionType = $compressionType;
  }
  /** @return string */
  public function getCompressionType()
  {
    return $this->compressionType;
  }
  /** @param GoogleSecuritySafebrowsingV4RawHashes */
  public function setRawHashes(GoogleSecuritySafebrowsingV4RawHashes $rawHashes)
  {
    $this->rawHashes = $rawHashes;
  }
  /** @return GoogleSecuritySafebrowsingV4RawHashes */
  public function getRawHashes()
  {
    return $this->rawHashes;
  }
  /** @param GoogleSecuritySafebrowsingV4RawIndices */
  public function setRawIndices(GoogleSecuritySafebrowsingV4RawIndices $rawIndices)
  {
    $this->rawIndices = $rawIndices;
  }
  /** @return GoogleSecuritySafebrowsingV4RawIndices */
  public function getRawIndices()
  {
    return $this->rawIndices;
  }
  /** @param GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public function setRiceHashes(GoogleSecuritySafebrowsingV4RiceDeltaEncoding $riceHashes)
  {
    $this->riceHashes = $riceHashes;
  }
  /** @return GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public function getRiceHashes()
  {
    return $this->riceHashes;
  }
  /** @param GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public function setRiceIndices(GoogleSecuritySafebrowsingV4RiceDeltaEncoding $riceIndices)
  {
    $this->riceIndices = $riceIndices;
  }
  /** @return GoogleSecuritySafebrowsingV4RiceDeltaEncoding */
  public function getRiceIndices()
  {
    return $this->riceIndices;
  }
}

class GoogleSecuritySafebrowsingV4ThreatHit extends \Google\Collection
{
  /** @var GoogleSecuritySafebrowsingV4ClientInfo */
  public $clientInfo;
  /** @var GoogleSecuritySafebrowsingV4ThreatEntry */
  public $entry;
  /** @var string */
  public $platformType;
  /** @var GoogleSecuritySafebrowsingV4ThreatHitThreatSource[] */
  public $resources;
  /** @var string */
  public $threatType;
  /** @var GoogleSecuritySafebrowsingV4ThreatHitUserInfo */
  public $userInfo;
  protected $collection_key = 'resources';
  protected $clientInfoType = GoogleSecuritySafebrowsingV4ClientInfo::class;
  protected $clientInfoDataType = '';
  protected $entryType = GoogleSecuritySafebrowsingV4ThreatEntry::class;
  protected $entryDataType = '';
  protected $resourcesType = GoogleSecuritySafebrowsingV4ThreatHitThreatSource::class;
  protected $resourcesDataType = 'array';
  protected $userInfoType = GoogleSecuritySafebrowsingV4ThreatHitUserInfo::class;
  protected $userInfoDataType = '';
  /** @param GoogleSecuritySafebrowsingV4ClientInfo */
  public function setClientInfo(GoogleSecuritySafebrowsingV4ClientInfo $clientInfo)
  {
    $this->clientInfo = $clientInfo;
  }
  /** @return GoogleSecuritySafebrowsingV4ClientInfo */
  public function getClientInfo()
  {
    return $this->clientInfo;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatEntry */
  public function setEntry(GoogleSecuritySafebrowsingV4ThreatEntry $entry)
  {
    $this->entry = $entry;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntry */
  public function getEntry()
  {
    return $this->entry;
  }
  /** @param string */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatHitThreatSource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatHitThreatSource[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  /** @return string */
  public function getThreatType()
  {
    return $this->threatType;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatHitUserInfo */
  public function setUserInfo(GoogleSecuritySafebrowsingV4ThreatHitUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatHitUserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
}

class GoogleSecuritySafebrowsingV4ThreatHitThreatSource extends \Google\Model
{
  /** @var string */
  public $referrer;
  /** @var string */
  public $remoteIp;
  /** @var string */
  public $type;
  /** @var string */
  public $url;

  /** @param string */
  public function setReferrer($referrer)
  {
    $this->referrer = $referrer;
  }
  /** @return string */
  public function getReferrer()
  {
    return $this->referrer;
  }
  /** @param string */
  public function setRemoteIp($remoteIp)
  {
    $this->remoteIp = $remoteIp;
  }
  /** @return string */
  public function getRemoteIp()
  {
    return $this->remoteIp;
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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class GoogleSecuritySafebrowsingV4ThreatHitUserInfo extends \Google\Model
{
  /** @var string */
  public $regionCode;
  /** @var string */
  public $userId;

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
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class GoogleSecuritySafebrowsingV4ThreatInfo extends \Google\Collection
{
  /** @var string[] */
  public $platformTypes;
  /** @var GoogleSecuritySafebrowsingV4ThreatEntry[] */
  public $threatEntries;
  /** @var string[] */
  public $threatEntryTypes;
  /** @var string[] */
  public $threatTypes;
  protected $collection_key = 'threatTypes';
  protected $threatEntriesType = GoogleSecuritySafebrowsingV4ThreatEntry::class;
  protected $threatEntriesDataType = 'array';
  /** @param string[] */
  public function setPlatformTypes($platformTypes)
  {
    $this->platformTypes = $platformTypes;
  }
  /** @return string[] */
  public function getPlatformTypes()
  {
    return $this->platformTypes;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatEntry[] */
  public function setThreatEntries($threatEntries)
  {
    $this->threatEntries = $threatEntries;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntry[] */
  public function getThreatEntries()
  {
    return $this->threatEntries;
  }
  /** @param string[] */
  public function setThreatEntryTypes($threatEntryTypes)
  {
    $this->threatEntryTypes = $threatEntryTypes;
  }
  /** @return string[] */
  public function getThreatEntryTypes()
  {
    return $this->threatEntryTypes;
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

class GoogleSecuritySafebrowsingV4ThreatListDescriptor extends \Google\Model
{
  /** @var string */
  public $platformType;
  /** @var string */
  public $threatEntryType;
  /** @var string */
  public $threatType;

  /** @param string */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /** @param string */
  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }
  /** @return string */
  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }
  /** @param string */
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  /** @return string */
  public function getThreatType()
  {
    return $this->threatType;
  }
}

class GoogleSecuritySafebrowsingV4ThreatMatch extends \Google\Model
{
  /** @var string */
  public $cacheDuration;
  /** @var string */
  public $platformType;
  /** @var GoogleSecuritySafebrowsingV4ThreatEntry */
  public $threat;
  /** @var GoogleSecuritySafebrowsingV4ThreatEntryMetadata */
  public $threatEntryMetadata;
  /** @var string */
  public $threatEntryType;
  /** @var string */
  public $threatType;
  protected $threatDataType = '';
  protected $threatEntryMetadataType = GoogleSecuritySafebrowsingV4ThreatEntryMetadata::class;
  protected $threatEntryMetadataDataType = '';
  /** @param string */
  public function setCacheDuration($cacheDuration)
  {
    $this->cacheDuration = $cacheDuration;
  }
  /** @return string */
  public function getCacheDuration()
  {
    return $this->cacheDuration;
  }
  /** @param string */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatEntry */
  public function setThreat(GoogleSecuritySafebrowsingV4ThreatEntry $threat)
  {
    $this->threat = $threat;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntry */
  public function getThreat()
  {
    return $this->threat;
  }
  /** @param GoogleSecuritySafebrowsingV4ThreatEntryMetadata */
  public function setThreatEntryMetadata(GoogleSecuritySafebrowsingV4ThreatEntryMetadata $threatEntryMetadata)
  {
    $this->threatEntryMetadata = $threatEntryMetadata;
  }
  /** @return GoogleSecuritySafebrowsingV4ThreatEntryMetadata */
  public function getThreatEntryMetadata()
  {
    return $this->threatEntryMetadata;
  }
  /** @param string */
  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }
  /** @return string */
  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }
  /** @param string */
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  /** @return string */
  public function getThreatType()
  {
    return $this->threatType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Safebrowsing_GoogleProtobufEmpty');
class_alias(GoogleSecuritySafebrowsingV4Checksum::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4Checksum');
class_alias(GoogleSecuritySafebrowsingV4ClientInfo::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ClientInfo');
class_alias(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequest::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequest');
class_alias(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequest');
class_alias(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FetchThreatListUpdatesRequestListUpdateRequestConstraints');
class_alias(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponse::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponse');
class_alias(GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FetchThreatListUpdatesResponseListUpdateResponse');
class_alias(GoogleSecuritySafebrowsingV4FindFullHashesRequest::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FindFullHashesRequest');
class_alias(GoogleSecuritySafebrowsingV4FindFullHashesResponse::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FindFullHashesResponse');
class_alias(GoogleSecuritySafebrowsingV4FindThreatMatchesRequest::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FindThreatMatchesRequest');
class_alias(GoogleSecuritySafebrowsingV4FindThreatMatchesResponse::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4FindThreatMatchesResponse');
class_alias(GoogleSecuritySafebrowsingV4ListThreatListsResponse::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ListThreatListsResponse');
class_alias(GoogleSecuritySafebrowsingV4RawHashes::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4RawHashes');
class_alias(GoogleSecuritySafebrowsingV4RawIndices::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4RawIndices');
class_alias(GoogleSecuritySafebrowsingV4RiceDeltaEncoding::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4RiceDeltaEncoding');
class_alias(GoogleSecuritySafebrowsingV4ThreatEntry::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatEntry');
class_alias(GoogleSecuritySafebrowsingV4ThreatEntryMetadata::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatEntryMetadata');
class_alias(GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatEntryMetadataMetadataEntry');
class_alias(GoogleSecuritySafebrowsingV4ThreatEntrySet::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatEntrySet');
class_alias(GoogleSecuritySafebrowsingV4ThreatHit::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatHit');
class_alias(GoogleSecuritySafebrowsingV4ThreatHitThreatSource::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatHitThreatSource');
class_alias(GoogleSecuritySafebrowsingV4ThreatHitUserInfo::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatHitUserInfo');
class_alias(GoogleSecuritySafebrowsingV4ThreatInfo::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatInfo');
class_alias(GoogleSecuritySafebrowsingV4ThreatListDescriptor::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatListDescriptor');
class_alias(GoogleSecuritySafebrowsingV4ThreatMatch::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ThreatMatch');
