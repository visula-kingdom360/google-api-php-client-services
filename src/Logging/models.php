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

namespace Google\Service\Logging;

class BigQueryOptions extends \Google\Model
{
  /** @var bool */
  public $usePartitionedTables;
  /** @var bool */
  public $usesTimestampColumnPartitioning;

  /** @param bool */
  public function setUsePartitionedTables($usePartitionedTables)
  {
    $this->usePartitionedTables = $usePartitionedTables;
  }
  /** @return bool */
  public function getUsePartitionedTables()
  {
    return $this->usePartitionedTables;
  }
  /** @param bool */
  public function setUsesTimestampColumnPartitioning($usesTimestampColumnPartitioning)
  {
    $this->usesTimestampColumnPartitioning = $usesTimestampColumnPartitioning;
  }
  /** @return bool */
  public function getUsesTimestampColumnPartitioning()
  {
    return $this->usesTimestampColumnPartitioning;
  }
}

class BucketOptions extends \Google\Model
{
  /** @var Explicit */
  public $explicitBuckets;
  /** @var Exponential */
  public $exponentialBuckets;
  /** @var Linear */
  public $linearBuckets;
  protected $explicitBucketsType = Explicit::class;
  protected $explicitBucketsDataType = '';
  protected $exponentialBucketsType = Exponential::class;
  protected $exponentialBucketsDataType = '';
  protected $linearBucketsType = Linear::class;
  protected $linearBucketsDataType = '';
  /** @param Explicit */
  public function setExplicitBuckets(Explicit $explicitBuckets)
  {
    $this->explicitBuckets = $explicitBuckets;
  }
  /** @return Explicit */
  public function getExplicitBuckets()
  {
    return $this->explicitBuckets;
  }
  /** @param Exponential */
  public function setExponentialBuckets(Exponential $exponentialBuckets)
  {
    $this->exponentialBuckets = $exponentialBuckets;
  }
  /** @return Exponential */
  public function getExponentialBuckets()
  {
    return $this->exponentialBuckets;
  }
  /** @param Linear */
  public function setLinearBuckets(Linear $linearBuckets)
  {
    $this->linearBuckets = $linearBuckets;
  }
  /** @return Linear */
  public function getLinearBuckets()
  {
    return $this->linearBuckets;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CmekSettings extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $kmsKeyVersionName;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAccountId;

  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  /** @param string */
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /** @return string */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
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
  public function setServiceAccountId($serviceAccountId)
  {
    $this->serviceAccountId = $serviceAccountId;
  }
  /** @return string */
  public function getServiceAccountId()
  {
    return $this->serviceAccountId;
  }
}

class CopyLogEntriesMetadata extends \Google\Model
{
  /** @var bool */
  public $cancellationRequested;
  /** @var string */
  public $endTime;
  /** @var int */
  public $progress;
  /** @var CopyLogEntriesRequest */
  public $request;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $writerIdentity;
  protected $requestType = CopyLogEntriesRequest::class;
  protected $requestDataType = '';
  /** @param bool */
  public function setCancellationRequested($cancellationRequested)
  {
    $this->cancellationRequested = $cancellationRequested;
  }
  /** @return bool */
  public function getCancellationRequested()
  {
    return $this->cancellationRequested;
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
  /** @param int */
  public function setProgress($progress)
  {
    $this->progress = $progress;
  }
  /** @return int */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param CopyLogEntriesRequest */
  public function setRequest(CopyLogEntriesRequest $request)
  {
    $this->request = $request;
  }
  /** @return CopyLogEntriesRequest */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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
  public function setWriterIdentity($writerIdentity)
  {
    $this->writerIdentity = $writerIdentity;
  }
  /** @return string */
  public function getWriterIdentity()
  {
    return $this->writerIdentity;
  }
}

class CopyLogEntriesRequest extends \Google\Model
{
  /** @var string */
  public $destination;
  /** @var string */
  public $filter;
  /** @var string */
  public $name;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
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

class CopyLogEntriesResponse extends \Google\Model
{
  /** @var string */
  public $logEntriesCopiedCount;

  /** @param string */
  public function setLogEntriesCopiedCount($logEntriesCopiedCount)
  {
    $this->logEntriesCopiedCount = $logEntriesCopiedCount;
  }
  /** @return string */
  public function getLogEntriesCopiedCount()
  {
    return $this->logEntriesCopiedCount;
  }
}

class Explicit extends \Google\Collection
{
  public $bounds;
  protected $collection_key = 'bounds';
  public function setBounds($bounds)
  {
    $this->bounds = $bounds;
  }
  public function getBounds()
  {
    return $this->bounds;
  }
}

class Exponential extends \Google\Model
{
  public $growthFactor;
  /** @var int */
  public $numFiniteBuckets;
  public $scale;

  public function setGrowthFactor($growthFactor)
  {
    $this->growthFactor = $growthFactor;
  }
  public function getGrowthFactor()
  {
    return $this->growthFactor;
  }
  /** @param int */
  public function setNumFiniteBuckets($numFiniteBuckets)
  {
    $this->numFiniteBuckets = $numFiniteBuckets;
  }
  /** @return int */
  public function getNumFiniteBuckets()
  {
    return $this->numFiniteBuckets;
  }
  public function setScale($scale)
  {
    $this->scale = $scale;
  }
  public function getScale()
  {
    return $this->scale;
  }
}

class HttpRequest extends \Google\Model
{
  /** @var string */
  public $cacheFillBytes;
  /** @var bool */
  public $cacheHit;
  /** @var bool */
  public $cacheLookup;
  /** @var bool */
  public $cacheValidatedWithOriginServer;
  /** @var string */
  public $latency;
  /** @var string */
  public $protocol;
  /** @var string */
  public $referer;
  /** @var string */
  public $remoteIp;
  /** @var string */
  public $requestMethod;
  /** @var string */
  public $requestSize;
  /** @var string */
  public $requestUrl;
  /** @var string */
  public $responseSize;
  /** @var string */
  public $serverIp;
  /** @var int */
  public $status;
  /** @var string */
  public $userAgent;

  /** @param string */
  public function setCacheFillBytes($cacheFillBytes)
  {
    $this->cacheFillBytes = $cacheFillBytes;
  }
  /** @return string */
  public function getCacheFillBytes()
  {
    return $this->cacheFillBytes;
  }
  /** @param bool */
  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  /** @return bool */
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  /** @param bool */
  public function setCacheLookup($cacheLookup)
  {
    $this->cacheLookup = $cacheLookup;
  }
  /** @return bool */
  public function getCacheLookup()
  {
    return $this->cacheLookup;
  }
  /** @param bool */
  public function setCacheValidatedWithOriginServer($cacheValidatedWithOriginServer)
  {
    $this->cacheValidatedWithOriginServer = $cacheValidatedWithOriginServer;
  }
  /** @return bool */
  public function getCacheValidatedWithOriginServer()
  {
    return $this->cacheValidatedWithOriginServer;
  }
  /** @param string */
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  /** @return string */
  public function getLatency()
  {
    return $this->latency;
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
  public function setReferer($referer)
  {
    $this->referer = $referer;
  }
  /** @return string */
  public function getReferer()
  {
    return $this->referer;
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
  public function setRequestMethod($requestMethod)
  {
    $this->requestMethod = $requestMethod;
  }
  /** @return string */
  public function getRequestMethod()
  {
    return $this->requestMethod;
  }
  /** @param string */
  public function setRequestSize($requestSize)
  {
    $this->requestSize = $requestSize;
  }
  /** @return string */
  public function getRequestSize()
  {
    return $this->requestSize;
  }
  /** @param string */
  public function setRequestUrl($requestUrl)
  {
    $this->requestUrl = $requestUrl;
  }
  /** @return string */
  public function getRequestUrl()
  {
    return $this->requestUrl;
  }
  /** @param string */
  public function setResponseSize($responseSize)
  {
    $this->responseSize = $responseSize;
  }
  /** @return string */
  public function getResponseSize()
  {
    return $this->responseSize;
  }
  /** @param string */
  public function setServerIp($serverIp)
  {
    $this->serverIp = $serverIp;
  }
  /** @return string */
  public function getServerIp()
  {
    return $this->serverIp;
  }
  /** @param int */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return int */
  public function getStatus()
  {
    return $this->status;
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
}

class IndexConfig extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $fieldPath;
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
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  /** @return string */
  public function getFieldPath()
  {
    return $this->fieldPath;
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

class LabelDescriptor extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $key;
  /** @var string */
  public $valueType;

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
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class Linear extends \Google\Model
{
  /** @var int */
  public $numFiniteBuckets;
  public $offset;
  public $width;

  /** @param int */
  public function setNumFiniteBuckets($numFiniteBuckets)
  {
    $this->numFiniteBuckets = $numFiniteBuckets;
  }
  /** @return int */
  public function getNumFiniteBuckets()
  {
    return $this->numFiniteBuckets;
  }
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  public function getOffset()
  {
    return $this->offset;
  }
  public function setWidth($width)
  {
    $this->width = $width;
  }
  public function getWidth()
  {
    return $this->width;
  }
}

class ListBucketsResponse extends \Google\Collection
{
  /** @var LogBucket[] */
  public $buckets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'buckets';
  protected $bucketsType = LogBucket::class;
  protected $bucketsDataType = 'array';
  /** @param LogBucket[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return LogBucket[] */
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

class ListExclusionsResponse extends \Google\Collection
{
  /** @var LogExclusion[] */
  public $exclusions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'exclusions';
  protected $exclusionsType = LogExclusion::class;
  protected $exclusionsDataType = 'array';
  /** @param LogExclusion[] */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /** @return LogExclusion[] */
  public function getExclusions()
  {
    return $this->exclusions;
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

class ListLogEntriesRequest extends \Google\Collection
{
  /** @var string */
  public $filter;
  /** @var string */
  public $orderBy;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string[] */
  public $projectIds;
  /** @var string[] */
  public $resourceNames;
  protected $collection_key = 'resourceNames';
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return string */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string[] */
  public function setProjectIds($projectIds)
  {
    $this->projectIds = $projectIds;
  }
  /** @return string[] */
  public function getProjectIds()
  {
    return $this->projectIds;
  }
  /** @param string[] */
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  /** @return string[] */
  public function getResourceNames()
  {
    return $this->resourceNames;
  }
}

class ListLogEntriesResponse extends \Google\Collection
{
  /** @var LogEntry[] */
  public $entries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entries';
  protected $entriesType = LogEntry::class;
  protected $entriesDataType = 'array';
  /** @param LogEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LogEntry[] */
  public function getEntries()
  {
    return $this->entries;
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

class ListLogMetricsResponse extends \Google\Collection
{
  /** @var LogMetric[] */
  public $metrics;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'metrics';
  protected $metricsType = LogMetric::class;
  protected $metricsDataType = 'array';
  /** @param LogMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return LogMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
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

class ListLogsResponse extends \Google\Collection
{
  /** @var string[] */
  public $logNames;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'logNames';
  /** @param string[] */
  public function setLogNames($logNames)
  {
    $this->logNames = $logNames;
  }
  /** @return string[] */
  public function getLogNames()
  {
    return $this->logNames;
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

class ListMonitoredResourceDescriptorsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var MonitoredResourceDescriptor[] */
  public $resourceDescriptors;
  protected $collection_key = 'resourceDescriptors';
  protected $resourceDescriptorsType = MonitoredResourceDescriptor::class;
  protected $resourceDescriptorsDataType = 'array';
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
  /** @param MonitoredResourceDescriptor[] */
  public function setResourceDescriptors($resourceDescriptors)
  {
    $this->resourceDescriptors = $resourceDescriptors;
  }
  /** @return MonitoredResourceDescriptor[] */
  public function getResourceDescriptors()
  {
    return $this->resourceDescriptors;
  }
}

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListSinksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var LogSink[] */
  public $sinks;
  protected $collection_key = 'sinks';
  protected $sinksType = LogSink::class;
  protected $sinksDataType = 'array';
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
  /** @param LogSink[] */
  public function setSinks($sinks)
  {
    $this->sinks = $sinks;
  }
  /** @return LogSink[] */
  public function getSinks()
  {
    return $this->sinks;
  }
}

class ListViewsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var LogView[] */
  public $views;
  protected $collection_key = 'views';
  protected $viewsType = LogView::class;
  protected $viewsDataType = 'array';
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
  /** @param LogView[] */
  public function setViews($views)
  {
    $this->views = $views;
  }
  /** @return LogView[] */
  public function getViews()
  {
    return $this->views;
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

class LogBucket extends \Google\Collection
{
  /** @var CmekSettings */
  public $cmekSettings;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var IndexConfig[] */
  public $indexConfigs;
  /** @var string */
  public $lifecycleState;
  /** @var bool */
  public $locked;
  /** @var string */
  public $name;
  /** @var string[] */
  public $restrictedFields;
  /** @var int */
  public $retentionDays;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'restrictedFields';
  protected $cmekSettingsType = CmekSettings::class;
  protected $cmekSettingsDataType = '';
  protected $indexConfigsType = IndexConfig::class;
  protected $indexConfigsDataType = 'array';
  /** @param CmekSettings */
  public function setCmekSettings(CmekSettings $cmekSettings)
  {
    $this->cmekSettings = $cmekSettings;
  }
  /** @return CmekSettings */
  public function getCmekSettings()
  {
    return $this->cmekSettings;
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
  /** @param IndexConfig[] */
  public function setIndexConfigs($indexConfigs)
  {
    $this->indexConfigs = $indexConfigs;
  }
  /** @return IndexConfig[] */
  public function getIndexConfigs()
  {
    return $this->indexConfigs;
  }
  /** @param string */
  public function setLifecycleState($lifecycleState)
  {
    $this->lifecycleState = $lifecycleState;
  }
  /** @return string */
  public function getLifecycleState()
  {
    return $this->lifecycleState;
  }
  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
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
  public function setRestrictedFields($restrictedFields)
  {
    $this->restrictedFields = $restrictedFields;
  }
  /** @return string[] */
  public function getRestrictedFields()
  {
    return $this->restrictedFields;
  }
  /** @param int */
  public function setRetentionDays($retentionDays)
  {
    $this->retentionDays = $retentionDays;
  }
  /** @return int */
  public function getRetentionDays()
  {
    return $this->retentionDays;
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

class LogEntry extends \Google\Model
{
  /** @var HttpRequest */
  public $httpRequest;
  /** @var string */
  public $insertId;
  /** @var array[] */
  public $jsonPayload;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $logName;
  /** @var MonitoredResourceMetadata */
  public $metadata;
  /** @var LogEntryOperation */
  public $operation;
  /** @var array[] */
  public $protoPayload;
  /** @var string */
  public $receiveTimestamp;
  /** @var MonitoredResource */
  public $resource;
  /** @var string */
  public $severity;
  /** @var LogEntrySourceLocation */
  public $sourceLocation;
  /** @var string */
  public $spanId;
  /** @var LogSplit */
  public $split;
  /** @var string */
  public $textPayload;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $trace;
  /** @var bool */
  public $traceSampled;
  protected $httpRequestType = HttpRequest::class;
  protected $httpRequestDataType = '';
  protected $metadataType = MonitoredResourceMetadata::class;
  protected $metadataDataType = '';
  protected $operationType = LogEntryOperation::class;
  protected $operationDataType = '';
  protected $resourceType = MonitoredResource::class;
  protected $resourceDataType = '';
  protected $sourceLocationType = LogEntrySourceLocation::class;
  protected $sourceLocationDataType = '';
  protected $splitType = LogSplit::class;
  protected $splitDataType = '';
  /** @param HttpRequest */
  public function setHttpRequest(HttpRequest $httpRequest)
  {
    $this->httpRequest = $httpRequest;
  }
  /** @return HttpRequest */
  public function getHttpRequest()
  {
    return $this->httpRequest;
  }
  /** @param string */
  public function setInsertId($insertId)
  {
    $this->insertId = $insertId;
  }
  /** @return string */
  public function getInsertId()
  {
    return $this->insertId;
  }
  /** @param array[] */
  public function setJsonPayload($jsonPayload)
  {
    $this->jsonPayload = $jsonPayload;
  }
  /** @return array[] */
  public function getJsonPayload()
  {
    return $this->jsonPayload;
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
  public function setLogName($logName)
  {
    $this->logName = $logName;
  }
  /** @return string */
  public function getLogName()
  {
    return $this->logName;
  }
  /** @param MonitoredResourceMetadata */
  public function setMetadata(MonitoredResourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return MonitoredResourceMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param LogEntryOperation */
  public function setOperation(LogEntryOperation $operation)
  {
    $this->operation = $operation;
  }
  /** @return LogEntryOperation */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param array[] */
  public function setProtoPayload($protoPayload)
  {
    $this->protoPayload = $protoPayload;
  }
  /** @return array[] */
  public function getProtoPayload()
  {
    return $this->protoPayload;
  }
  /** @param string */
  public function setReceiveTimestamp($receiveTimestamp)
  {
    $this->receiveTimestamp = $receiveTimestamp;
  }
  /** @return string */
  public function getReceiveTimestamp()
  {
    return $this->receiveTimestamp;
  }
  /** @param MonitoredResource */
  public function setResource(MonitoredResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return MonitoredResource */
  public function getResource()
  {
    return $this->resource;
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
  /** @param LogEntrySourceLocation */
  public function setSourceLocation(LogEntrySourceLocation $sourceLocation)
  {
    $this->sourceLocation = $sourceLocation;
  }
  /** @return LogEntrySourceLocation */
  public function getSourceLocation()
  {
    return $this->sourceLocation;
  }
  /** @param string */
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  /** @return string */
  public function getSpanId()
  {
    return $this->spanId;
  }
  /** @param LogSplit */
  public function setSplit(LogSplit $split)
  {
    $this->split = $split;
  }
  /** @return LogSplit */
  public function getSplit()
  {
    return $this->split;
  }
  /** @param string */
  public function setTextPayload($textPayload)
  {
    $this->textPayload = $textPayload;
  }
  /** @return string */
  public function getTextPayload()
  {
    return $this->textPayload;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param string */
  public function setTrace($trace)
  {
    $this->trace = $trace;
  }
  /** @return string */
  public function getTrace()
  {
    return $this->trace;
  }
  /** @param bool */
  public function setTraceSampled($traceSampled)
  {
    $this->traceSampled = $traceSampled;
  }
  /** @return bool */
  public function getTraceSampled()
  {
    return $this->traceSampled;
  }
}

class LogEntryOperation extends \Google\Model
{
  /** @var bool */
  public $first;
  /** @var string */
  public $id;
  /** @var bool */
  public $last;
  /** @var string */
  public $producer;

  /** @param bool */
  public function setFirst($first)
  {
    $this->first = $first;
  }
  /** @return bool */
  public function getFirst()
  {
    return $this->first;
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
  /** @param bool */
  public function setLast($last)
  {
    $this->last = $last;
  }
  /** @return bool */
  public function getLast()
  {
    return $this->last;
  }
  /** @param string */
  public function setProducer($producer)
  {
    $this->producer = $producer;
  }
  /** @return string */
  public function getProducer()
  {
    return $this->producer;
  }
}

class LogEntrySourceLocation extends \Google\Model
{
  /** @var string */
  public $file;
  /** @var string */
  public $function;
  /** @var string */
  public $line;

  /** @param string */
  public function setFile($file)
  {
    $this->file = $file;
  }
  /** @return string */
  public function getFile()
  {
    return $this->file;
  }
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
  /** @param string */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return string */
  public function getLine()
  {
    return $this->line;
  }
}

class LogExclusion extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $filter;
  /** @var string */
  public $name;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
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

class LogLine extends \Google\Model
{
  /** @var string */
  public $logMessage;
  /** @var string */
  public $severity;
  /** @var SourceLocation */
  public $sourceLocation;
  /** @var string */
  public $time;
  protected $sourceLocationType = SourceLocation::class;
  protected $sourceLocationDataType = '';
  /** @param string */
  public function setLogMessage($logMessage)
  {
    $this->logMessage = $logMessage;
  }
  /** @return string */
  public function getLogMessage()
  {
    return $this->logMessage;
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
  /** @param SourceLocation */
  public function setSourceLocation(SourceLocation $sourceLocation)
  {
    $this->sourceLocation = $sourceLocation;
  }
  /** @return SourceLocation */
  public function getSourceLocation()
  {
    return $this->sourceLocation;
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

class LogMetric extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var BucketOptions */
  public $bucketOptions;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $labelExtractors;
  /** @var MetricDescriptor */
  public $metricDescriptor;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $valueExtractor;
  /** @var string */
  public $version;
  protected $bucketOptionsType = BucketOptions::class;
  protected $bucketOptionsDataType = '';
  protected $metricDescriptorType = MetricDescriptor::class;
  protected $metricDescriptorDataType = '';
  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /** @param BucketOptions */
  public function setBucketOptions(BucketOptions $bucketOptions)
  {
    $this->bucketOptions = $bucketOptions;
  }
  /** @return BucketOptions */
  public function getBucketOptions()
  {
    return $this->bucketOptions;
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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string[] */
  public function setLabelExtractors($labelExtractors)
  {
    $this->labelExtractors = $labelExtractors;
  }
  /** @return string[] */
  public function getLabelExtractors()
  {
    return $this->labelExtractors;
  }
  /** @param MetricDescriptor */
  public function setMetricDescriptor(MetricDescriptor $metricDescriptor)
  {
    $this->metricDescriptor = $metricDescriptor;
  }
  /** @return MetricDescriptor */
  public function getMetricDescriptor()
  {
    return $this->metricDescriptor;
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
  public function setValueExtractor($valueExtractor)
  {
    $this->valueExtractor = $valueExtractor;
  }
  /** @return string */
  public function getValueExtractor()
  {
    return $this->valueExtractor;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class LogSink extends \Google\Collection
{
  /** @var BigQueryOptions */
  public $bigqueryOptions;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $destination;
  /** @var bool */
  public $disabled;
  /** @var LogExclusion[] */
  public $exclusions;
  /** @var string */
  public $filter;
  /** @var bool */
  public $includeChildren;
  /** @var string */
  public $name;
  /** @var string */
  public $outputVersionFormat;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $writerIdentity;
  protected $collection_key = 'exclusions';
  protected $bigqueryOptionsType = BigQueryOptions::class;
  protected $bigqueryOptionsDataType = '';
  protected $exclusionsType = LogExclusion::class;
  protected $exclusionsDataType = 'array';
  /** @param BigQueryOptions */
  public function setBigqueryOptions(BigQueryOptions $bigqueryOptions)
  {
    $this->bigqueryOptions = $bigqueryOptions;
  }
  /** @return BigQueryOptions */
  public function getBigqueryOptions()
  {
    return $this->bigqueryOptions;
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
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
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
  /** @param LogExclusion[] */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /** @return LogExclusion[] */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param bool */
  public function setIncludeChildren($includeChildren)
  {
    $this->includeChildren = $includeChildren;
  }
  /** @return bool */
  public function getIncludeChildren()
  {
    return $this->includeChildren;
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
  public function setOutputVersionFormat($outputVersionFormat)
  {
    $this->outputVersionFormat = $outputVersionFormat;
  }
  /** @return string */
  public function getOutputVersionFormat()
  {
    return $this->outputVersionFormat;
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
  public function setWriterIdentity($writerIdentity)
  {
    $this->writerIdentity = $writerIdentity;
  }
  /** @return string */
  public function getWriterIdentity()
  {
    return $this->writerIdentity;
  }
}

class LogSplit extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var int */
  public $totalSplits;
  /** @var string */
  public $uid;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param int */
  public function setTotalSplits($totalSplits)
  {
    $this->totalSplits = $totalSplits;
  }
  /** @return int */
  public function getTotalSplits()
  {
    return $this->totalSplits;
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

class LogView extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $filter;
  /** @var string */
  public $name;
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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
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

class LoggingEmpty extends \Google\Model
{
}

class MetricDescriptor extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var LabelDescriptor[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var MetricDescriptorMetadata */
  public $metadata;
  /** @var string */
  public $metricKind;
  /** @var string[] */
  public $monitoredResourceTypes;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  /** @var string */
  public $unit;
  /** @var string */
  public $valueType;
  protected $collection_key = 'monitoredResourceTypes';
  protected $labelsType = LabelDescriptor::class;
  protected $labelsDataType = 'array';
  protected $metadataType = MetricDescriptorMetadata::class;
  protected $metadataDataType = '';
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
  /** @param LabelDescriptor[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabelDescriptor[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /** @param MetricDescriptorMetadata */
  public function setMetadata(MetricDescriptorMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return MetricDescriptorMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setMetricKind($metricKind)
  {
    $this->metricKind = $metricKind;
  }
  /** @return string */
  public function getMetricKind()
  {
    return $this->metricKind;
  }
  /** @param string[] */
  public function setMonitoredResourceTypes($monitoredResourceTypes)
  {
    $this->monitoredResourceTypes = $monitoredResourceTypes;
  }
  /** @return string[] */
  public function getMonitoredResourceTypes()
  {
    return $this->monitoredResourceTypes;
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
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class MetricDescriptorMetadata extends \Google\Model
{
  /** @var string */
  public $ingestDelay;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $samplePeriod;

  /** @param string */
  public function setIngestDelay($ingestDelay)
  {
    $this->ingestDelay = $ingestDelay;
  }
  /** @return string */
  public function getIngestDelay()
  {
    return $this->ingestDelay;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /** @param string */
  public function setSamplePeriod($samplePeriod)
  {
    $this->samplePeriod = $samplePeriod;
  }
  /** @return string */
  public function getSamplePeriod()
  {
    return $this->samplePeriod;
  }
}

class MonitoredResource extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $type;

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

class MonitoredResourceDescriptor extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var LabelDescriptor[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  protected $collection_key = 'labels';
  protected $labelsType = LabelDescriptor::class;
  protected $labelsDataType = 'array';
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
  /** @param LabelDescriptor[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabelDescriptor[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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

class MonitoredResourceMetadata extends \Google\Model
{
  /** @var array[] */
  public $systemLabels;
  /** @var string[] */
  public $userLabels;

  /** @param array[] */
  public function setSystemLabels($systemLabels)
  {
    $this->systemLabels = $systemLabels;
  }
  /** @return array[] */
  public function getSystemLabels()
  {
    return $this->systemLabels;
  }
  /** @param string[] */
  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
  /** @return string[] */
  public function getUserLabels()
  {
    return $this->userLabels;
  }
}

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
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
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
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

class RequestLog extends \Google\Collection
{
  /** @var string */
  public $appEngineRelease;
  /** @var string */
  public $appId;
  public $cost;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $finished;
  /** @var bool */
  public $first;
  /** @var string */
  public $host;
  /** @var string */
  public $httpVersion;
  /** @var string */
  public $instanceId;
  /** @var int */
  public $instanceIndex;
  /** @var string */
  public $ip;
  /** @var string */
  public $latency;
  /** @var LogLine[] */
  public $line;
  /** @var string */
  public $megaCycles;
  /** @var string */
  public $method;
  /** @var string */
  public $moduleId;
  /** @var string */
  public $nickname;
  /** @var string */
  public $pendingTime;
  /** @var string */
  public $referrer;
  /** @var string */
  public $requestId;
  /** @var string */
  public $resource;
  /** @var string */
  public $responseSize;
  /** @var SourceReference[] */
  public $sourceReference;
  /** @var string */
  public $spanId;
  /** @var string */
  public $startTime;
  /** @var int */
  public $status;
  /** @var string */
  public $taskName;
  /** @var string */
  public $taskQueueName;
  /** @var string */
  public $traceId;
  /** @var bool */
  public $traceSampled;
  /** @var string */
  public $urlMapEntry;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $versionId;
  /** @var bool */
  public $wasLoadingRequest;
  protected $collection_key = 'sourceReference';
  protected $lineType = LogLine::class;
  protected $lineDataType = 'array';
  protected $sourceReferenceType = SourceReference::class;
  protected $sourceReferenceDataType = 'array';
  /** @param string */
  public function setAppEngineRelease($appEngineRelease)
  {
    $this->appEngineRelease = $appEngineRelease;
  }
  /** @return string */
  public function getAppEngineRelease()
  {
    return $this->appEngineRelease;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  public function setCost($cost)
  {
    $this->cost = $cost;
  }
  public function getCost()
  {
    return $this->cost;
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
  public function setFinished($finished)
  {
    $this->finished = $finished;
  }
  /** @return bool */
  public function getFinished()
  {
    return $this->finished;
  }
  /** @param bool */
  public function setFirst($first)
  {
    $this->first = $first;
  }
  /** @return bool */
  public function getFirst()
  {
    return $this->first;
  }
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
  /** @param string */
  public function setHttpVersion($httpVersion)
  {
    $this->httpVersion = $httpVersion;
  }
  /** @return string */
  public function getHttpVersion()
  {
    return $this->httpVersion;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param int */
  public function setInstanceIndex($instanceIndex)
  {
    $this->instanceIndex = $instanceIndex;
  }
  /** @return int */
  public function getInstanceIndex()
  {
    return $this->instanceIndex;
  }
  /** @param string */
  public function setIp($ip)
  {
    $this->ip = $ip;
  }
  /** @return string */
  public function getIp()
  {
    return $this->ip;
  }
  /** @param string */
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  /** @return string */
  public function getLatency()
  {
    return $this->latency;
  }
  /** @param LogLine[] */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return LogLine[] */
  public function getLine()
  {
    return $this->line;
  }
  /** @param string */
  public function setMegaCycles($megaCycles)
  {
    $this->megaCycles = $megaCycles;
  }
  /** @return string */
  public function getMegaCycles()
  {
    return $this->megaCycles;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setModuleId($moduleId)
  {
    $this->moduleId = $moduleId;
  }
  /** @return string */
  public function getModuleId()
  {
    return $this->moduleId;
  }
  /** @param string */
  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }
  /** @return string */
  public function getNickname()
  {
    return $this->nickname;
  }
  /** @param string */
  public function setPendingTime($pendingTime)
  {
    $this->pendingTime = $pendingTime;
  }
  /** @return string */
  public function getPendingTime()
  {
    return $this->pendingTime;
  }
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
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResponseSize($responseSize)
  {
    $this->responseSize = $responseSize;
  }
  /** @return string */
  public function getResponseSize()
  {
    return $this->responseSize;
  }
  /** @param SourceReference[] */
  public function setSourceReference($sourceReference)
  {
    $this->sourceReference = $sourceReference;
  }
  /** @return SourceReference[] */
  public function getSourceReference()
  {
    return $this->sourceReference;
  }
  /** @param string */
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  /** @return string */
  public function getSpanId()
  {
    return $this->spanId;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param int */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return int */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
  /** @param string */
  public function setTaskQueueName($taskQueueName)
  {
    $this->taskQueueName = $taskQueueName;
  }
  /** @return string */
  public function getTaskQueueName()
  {
    return $this->taskQueueName;
  }
  /** @param string */
  public function setTraceId($traceId)
  {
    $this->traceId = $traceId;
  }
  /** @return string */
  public function getTraceId()
  {
    return $this->traceId;
  }
  /** @param bool */
  public function setTraceSampled($traceSampled)
  {
    $this->traceSampled = $traceSampled;
  }
  /** @return bool */
  public function getTraceSampled()
  {
    return $this->traceSampled;
  }
  /** @param string */
  public function setUrlMapEntry($urlMapEntry)
  {
    $this->urlMapEntry = $urlMapEntry;
  }
  /** @return string */
  public function getUrlMapEntry()
  {
    return $this->urlMapEntry;
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
  public function setVersionId($versionId)
  {
    $this->versionId = $versionId;
  }
  /** @return string */
  public function getVersionId()
  {
    return $this->versionId;
  }
  /** @param bool */
  public function setWasLoadingRequest($wasLoadingRequest)
  {
    $this->wasLoadingRequest = $wasLoadingRequest;
  }
  /** @return bool */
  public function getWasLoadingRequest()
  {
    return $this->wasLoadingRequest;
  }
}

class Settings extends \Google\Model
{
  /** @var bool */
  public $disableDefaultSink;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $kmsServiceAccountId;
  /** @var string */
  public $name;
  /** @var string */
  public $storageLocation;

  /** @param bool */
  public function setDisableDefaultSink($disableDefaultSink)
  {
    $this->disableDefaultSink = $disableDefaultSink;
  }
  /** @return bool */
  public function getDisableDefaultSink()
  {
    return $this->disableDefaultSink;
  }
  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  /** @param string */
  public function setKmsServiceAccountId($kmsServiceAccountId)
  {
    $this->kmsServiceAccountId = $kmsServiceAccountId;
  }
  /** @return string */
  public function getKmsServiceAccountId()
  {
    return $this->kmsServiceAccountId;
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
  public function setStorageLocation($storageLocation)
  {
    $this->storageLocation = $storageLocation;
  }
  /** @return string */
  public function getStorageLocation()
  {
    return $this->storageLocation;
  }
}

class SourceLocation extends \Google\Model
{
  /** @var string */
  public $file;
  /** @var string */
  public $functionName;
  /** @var string */
  public $line;

  /** @param string */
  public function setFile($file)
  {
    $this->file = $file;
  }
  /** @return string */
  public function getFile()
  {
    return $this->file;
  }
  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /** @param string */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return string */
  public function getLine()
  {
    return $this->line;
  }
}

class SourceReference extends \Google\Model
{
  /** @var string */
  public $repository;
  /** @var string */
  public $revisionId;

  /** @param string */
  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  /** @return string */
  public function getRepository()
  {
    return $this->repository;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

class Status extends \Google\Collection
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

class SuppressionInfo extends \Google\Model
{
  /** @var string */
  public $reason;
  /** @var int */
  public $suppressedCount;

  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
  /** @param int */
  public function setSuppressedCount($suppressedCount)
  {
    $this->suppressedCount = $suppressedCount;
  }
  /** @return int */
  public function getSuppressedCount()
  {
    return $this->suppressedCount;
  }
}

class TailLogEntriesRequest extends \Google\Collection
{
  /** @var string */
  public $bufferWindow;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $resourceNames;
  protected $collection_key = 'resourceNames';
  /** @param string */
  public function setBufferWindow($bufferWindow)
  {
    $this->bufferWindow = $bufferWindow;
  }
  /** @return string */
  public function getBufferWindow()
  {
    return $this->bufferWindow;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string[] */
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  /** @return string[] */
  public function getResourceNames()
  {
    return $this->resourceNames;
  }
}

class TailLogEntriesResponse extends \Google\Collection
{
  /** @var LogEntry[] */
  public $entries;
  /** @var SuppressionInfo[] */
  public $suppressionInfo;
  protected $collection_key = 'suppressionInfo';
  protected $entriesType = LogEntry::class;
  protected $entriesDataType = 'array';
  protected $suppressionInfoType = SuppressionInfo::class;
  protected $suppressionInfoDataType = 'array';
  /** @param LogEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LogEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
  /** @param SuppressionInfo[] */
  public function setSuppressionInfo($suppressionInfo)
  {
    $this->suppressionInfo = $suppressionInfo;
  }
  /** @return SuppressionInfo[] */
  public function getSuppressionInfo()
  {
    return $this->suppressionInfo;
  }
}

class UndeleteBucketRequest extends \Google\Model
{
}

class WriteLogEntriesRequest extends \Google\Collection
{
  /** @var bool */
  public $dryRun;
  /** @var LogEntry[] */
  public $entries;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $logName;
  /** @var bool */
  public $partialSuccess;
  /** @var MonitoredResource */
  public $resource;
  protected $collection_key = 'entries';
  protected $entriesType = LogEntry::class;
  protected $entriesDataType = 'array';
  protected $resourceType = MonitoredResource::class;
  protected $resourceDataType = '';
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /** @param LogEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LogEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
  public function setLogName($logName)
  {
    $this->logName = $logName;
  }
  /** @return string */
  public function getLogName()
  {
    return $this->logName;
  }
  /** @param bool */
  public function setPartialSuccess($partialSuccess)
  {
    $this->partialSuccess = $partialSuccess;
  }
  /** @return bool */
  public function getPartialSuccess()
  {
    return $this->partialSuccess;
  }
  /** @param MonitoredResource */
  public function setResource(MonitoredResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return MonitoredResource */
  public function getResource()
  {
    return $this->resource;
  }
}

class WriteLogEntriesResponse extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryOptions::class, 'Google_Service_Logging_BigQueryOptions');
class_alias(BucketOptions::class, 'Google_Service_Logging_BucketOptions');
class_alias(CancelOperationRequest::class, 'Google_Service_Logging_CancelOperationRequest');
class_alias(CmekSettings::class, 'Google_Service_Logging_CmekSettings');
class_alias(CopyLogEntriesMetadata::class, 'Google_Service_Logging_CopyLogEntriesMetadata');
class_alias(CopyLogEntriesRequest::class, 'Google_Service_Logging_CopyLogEntriesRequest');
class_alias(CopyLogEntriesResponse::class, 'Google_Service_Logging_CopyLogEntriesResponse');
class_alias(Explicit::class, 'Google_Service_Logging_Explicit');
class_alias(Exponential::class, 'Google_Service_Logging_Exponential');
class_alias(HttpRequest::class, 'Google_Service_Logging_HttpRequest');
class_alias(IndexConfig::class, 'Google_Service_Logging_IndexConfig');
class_alias(LabelDescriptor::class, 'Google_Service_Logging_LabelDescriptor');
class_alias(Linear::class, 'Google_Service_Logging_Linear');
class_alias(ListBucketsResponse::class, 'Google_Service_Logging_ListBucketsResponse');
class_alias(ListExclusionsResponse::class, 'Google_Service_Logging_ListExclusionsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Logging_ListLocationsResponse');
class_alias(ListLogEntriesRequest::class, 'Google_Service_Logging_ListLogEntriesRequest');
class_alias(ListLogEntriesResponse::class, 'Google_Service_Logging_ListLogEntriesResponse');
class_alias(ListLogMetricsResponse::class, 'Google_Service_Logging_ListLogMetricsResponse');
class_alias(ListLogsResponse::class, 'Google_Service_Logging_ListLogsResponse');
class_alias(ListMonitoredResourceDescriptorsResponse::class, 'Google_Service_Logging_ListMonitoredResourceDescriptorsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Logging_ListOperationsResponse');
class_alias(ListSinksResponse::class, 'Google_Service_Logging_ListSinksResponse');
class_alias(ListViewsResponse::class, 'Google_Service_Logging_ListViewsResponse');
class_alias(Location::class, 'Google_Service_Logging_Location');
class_alias(LogBucket::class, 'Google_Service_Logging_LogBucket');
class_alias(LogEntry::class, 'Google_Service_Logging_LogEntry');
class_alias(LogEntryOperation::class, 'Google_Service_Logging_LogEntryOperation');
class_alias(LogEntrySourceLocation::class, 'Google_Service_Logging_LogEntrySourceLocation');
class_alias(LogExclusion::class, 'Google_Service_Logging_LogExclusion');
class_alias(LogLine::class, 'Google_Service_Logging_LogLine');
class_alias(LogMetric::class, 'Google_Service_Logging_LogMetric');
class_alias(LogSink::class, 'Google_Service_Logging_LogSink');
class_alias(LogSplit::class, 'Google_Service_Logging_LogSplit');
class_alias(LogView::class, 'Google_Service_Logging_LogView');
class_alias(LoggingEmpty::class, 'Google_Service_Logging_LoggingEmpty');
class_alias(MetricDescriptor::class, 'Google_Service_Logging_MetricDescriptor');
class_alias(MetricDescriptorMetadata::class, 'Google_Service_Logging_MetricDescriptorMetadata');
class_alias(MonitoredResource::class, 'Google_Service_Logging_MonitoredResource');
class_alias(MonitoredResourceDescriptor::class, 'Google_Service_Logging_MonitoredResourceDescriptor');
class_alias(MonitoredResourceMetadata::class, 'Google_Service_Logging_MonitoredResourceMetadata');
class_alias(Operation::class, 'Google_Service_Logging_Operation');
class_alias(RequestLog::class, 'Google_Service_Logging_RequestLog');
class_alias(Settings::class, 'Google_Service_Logging_Settings');
class_alias(SourceLocation::class, 'Google_Service_Logging_SourceLocation');
class_alias(SourceReference::class, 'Google_Service_Logging_SourceReference');
class_alias(Status::class, 'Google_Service_Logging_Status');
class_alias(SuppressionInfo::class, 'Google_Service_Logging_SuppressionInfo');
class_alias(TailLogEntriesRequest::class, 'Google_Service_Logging_TailLogEntriesRequest');
class_alias(TailLogEntriesResponse::class, 'Google_Service_Logging_TailLogEntriesResponse');
class_alias(UndeleteBucketRequest::class, 'Google_Service_Logging_UndeleteBucketRequest');
class_alias(WriteLogEntriesRequest::class, 'Google_Service_Logging_WriteLogEntriesRequest');
class_alias(WriteLogEntriesResponse::class, 'Google_Service_Logging_WriteLogEntriesResponse');
