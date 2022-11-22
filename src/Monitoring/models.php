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

namespace Google\Service\Monitoring;

class Aggregation extends \Google\Collection
{
  /** @var string */
  public $alignmentPeriod;
  /** @var string */
  public $crossSeriesReducer;
  /** @var string[] */
  public $groupByFields;
  /** @var string */
  public $perSeriesAligner;
  protected $collection_key = 'groupByFields';
  /** @param string */
  public function setAlignmentPeriod($alignmentPeriod)
  {
    $this->alignmentPeriod = $alignmentPeriod;
  }
  /** @return string */
  public function getAlignmentPeriod()
  {
    return $this->alignmentPeriod;
  }
  /** @param string */
  public function setCrossSeriesReducer($crossSeriesReducer)
  {
    $this->crossSeriesReducer = $crossSeriesReducer;
  }
  /** @return string */
  public function getCrossSeriesReducer()
  {
    return $this->crossSeriesReducer;
  }
  /** @param string[] */
  public function setGroupByFields($groupByFields)
  {
    $this->groupByFields = $groupByFields;
  }
  /** @return string[] */
  public function getGroupByFields()
  {
    return $this->groupByFields;
  }
  /** @param string */
  public function setPerSeriesAligner($perSeriesAligner)
  {
    $this->perSeriesAligner = $perSeriesAligner;
  }
  /** @return string */
  public function getPerSeriesAligner()
  {
    return $this->perSeriesAligner;
  }
}

class AlertPolicy extends \Google\Collection
{
  /** @var AlertStrategy */
  public $alertStrategy;
  /** @var string */
  public $combiner;
  /** @var Condition[] */
  public $conditions;
  /** @var MutationRecord */
  public $creationRecord;
  /** @var string */
  public $displayName;
  /** @var Documentation */
  public $documentation;
  /** @var bool */
  public $enabled;
  /** @var MutationRecord */
  public $mutationRecord;
  /** @var string */
  public $name;
  /** @var string[] */
  public $notificationChannels;
  /** @var string[] */
  public $userLabels;
  /** @var Status */
  public $validity;
  protected $collection_key = 'notificationChannels';
  protected $alertStrategyType = AlertStrategy::class;
  protected $alertStrategyDataType = '';
  protected $conditionsType = Condition::class;
  protected $conditionsDataType = 'array';
  protected $creationRecordType = MutationRecord::class;
  protected $creationRecordDataType = '';
  protected $documentationType = Documentation::class;
  protected $documentationDataType = '';
  protected $mutationRecordType = MutationRecord::class;
  protected $mutationRecordDataType = '';
  protected $validityType = Status::class;
  protected $validityDataType = '';
  /** @param AlertStrategy */
  public function setAlertStrategy(AlertStrategy $alertStrategy)
  {
    $this->alertStrategy = $alertStrategy;
  }
  /** @return AlertStrategy */
  public function getAlertStrategy()
  {
    return $this->alertStrategy;
  }
  /** @param string */
  public function setCombiner($combiner)
  {
    $this->combiner = $combiner;
  }
  /** @return string */
  public function getCombiner()
  {
    return $this->combiner;
  }
  /** @param Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return Condition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param MutationRecord */
  public function setCreationRecord(MutationRecord $creationRecord)
  {
    $this->creationRecord = $creationRecord;
  }
  /** @return MutationRecord */
  public function getCreationRecord()
  {
    return $this->creationRecord;
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
  /** @param Documentation */
  public function setDocumentation(Documentation $documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return Documentation */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param MutationRecord */
  public function setMutationRecord(MutationRecord $mutationRecord)
  {
    $this->mutationRecord = $mutationRecord;
  }
  /** @return MutationRecord */
  public function getMutationRecord()
  {
    return $this->mutationRecord;
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
  public function setNotificationChannels($notificationChannels)
  {
    $this->notificationChannels = $notificationChannels;
  }
  /** @return string[] */
  public function getNotificationChannels()
  {
    return $this->notificationChannels;
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
  /** @param Status */
  public function setValidity(Status $validity)
  {
    $this->validity = $validity;
  }
  /** @return Status */
  public function getValidity()
  {
    return $this->validity;
  }
}

class AlertStrategy extends \Google\Model
{
  /** @var string */
  public $autoClose;
  /** @var NotificationRateLimit */
  public $notificationRateLimit;
  protected $notificationRateLimitType = NotificationRateLimit::class;
  protected $notificationRateLimitDataType = '';
  /** @param string */
  public function setAutoClose($autoClose)
  {
    $this->autoClose = $autoClose;
  }
  /** @return string */
  public function getAutoClose()
  {
    return $this->autoClose;
  }
  /** @param NotificationRateLimit */
  public function setNotificationRateLimit(NotificationRateLimit $notificationRateLimit)
  {
    $this->notificationRateLimit = $notificationRateLimit;
  }
  /** @return NotificationRateLimit */
  public function getNotificationRateLimit()
  {
    return $this->notificationRateLimit;
  }
}

class AppEngine extends \Google\Model
{
  /** @var string */
  public $moduleId;

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
}

class AvailabilityCriteria extends \Google\Model
{
}

class BasicAuthentication extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var string */
  public $username;

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

class BasicService extends \Google\Model
{
  /** @var string[] */
  public $serviceLabels;
  /** @var string */
  public $serviceType;

  /** @param string[] */
  public function setServiceLabels($serviceLabels)
  {
    $this->serviceLabels = $serviceLabels;
  }
  /** @return string[] */
  public function getServiceLabels()
  {
    return $this->serviceLabels;
  }
  /** @param string */
  public function setServiceType($serviceType)
  {
    $this->serviceType = $serviceType;
  }
  /** @return string */
  public function getServiceType()
  {
    return $this->serviceType;
  }
}

class BasicSli extends \Google\Collection
{
  /** @var AvailabilityCriteria */
  public $availability;
  /** @var LatencyCriteria */
  public $latency;
  /** @var string[] */
  public $location;
  /** @var string[] */
  public $method;
  /** @var string[] */
  public $version;
  protected $collection_key = 'version';
  protected $availabilityType = AvailabilityCriteria::class;
  protected $availabilityDataType = '';
  protected $latencyType = LatencyCriteria::class;
  protected $latencyDataType = '';
  /** @param AvailabilityCriteria */
  public function setAvailability(AvailabilityCriteria $availability)
  {
    $this->availability = $availability;
  }
  /** @return AvailabilityCriteria */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param LatencyCriteria */
  public function setLatency(LatencyCriteria $latency)
  {
    $this->latency = $latency;
  }
  /** @return LatencyCriteria */
  public function getLatency()
  {
    return $this->latency;
  }
  /** @param string[] */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string[] */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string[] */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string[] */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string[] */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string[] */
  public function getVersion()
  {
    return $this->version;
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

class CloudEndpoints extends \Google\Model
{
  /** @var string */
  public $service;

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

class CloudRun extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $serviceName;

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

class ClusterIstio extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $location;
  /** @var string */
  public $serviceName;
  /** @var string */
  public $serviceNamespace;

  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
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
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
  /** @param string */
  public function setServiceNamespace($serviceNamespace)
  {
    $this->serviceNamespace = $serviceNamespace;
  }
  /** @return string */
  public function getServiceNamespace()
  {
    return $this->serviceNamespace;
  }
}

class CollectdPayload extends \Google\Collection
{
  /** @var string */
  public $endTime;
  /** @var TypedValue[] */
  public $metadata;
  /** @var string */
  public $plugin;
  /** @var string */
  public $pluginInstance;
  /** @var string */
  public $startTime;
  /** @var string */
  public $type;
  /** @var string */
  public $typeInstance;
  /** @var CollectdValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $metadataType = TypedValue::class;
  protected $metadataDataType = 'map';
  protected $valuesType = CollectdValue::class;
  protected $valuesDataType = 'array';
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
  /** @param TypedValue[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return TypedValue[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setPlugin($plugin)
  {
    $this->plugin = $plugin;
  }
  /** @return string */
  public function getPlugin()
  {
    return $this->plugin;
  }
  /** @param string */
  public function setPluginInstance($pluginInstance)
  {
    $this->pluginInstance = $pluginInstance;
  }
  /** @return string */
  public function getPluginInstance()
  {
    return $this->pluginInstance;
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
  public function setTypeInstance($typeInstance)
  {
    $this->typeInstance = $typeInstance;
  }
  /** @return string */
  public function getTypeInstance()
  {
    return $this->typeInstance;
  }
  /** @param CollectdValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return CollectdValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class CollectdPayloadError extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var int */
  public $index;
  /** @var CollectdValueError[] */
  public $valueErrors;
  protected $collection_key = 'valueErrors';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $valueErrorsType = CollectdValueError::class;
  protected $valueErrorsDataType = 'array';
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
  /** @param CollectdValueError[] */
  public function setValueErrors($valueErrors)
  {
    $this->valueErrors = $valueErrors;
  }
  /** @return CollectdValueError[] */
  public function getValueErrors()
  {
    return $this->valueErrors;
  }
}

class CollectdValue extends \Google\Model
{
  /** @var string */
  public $dataSourceName;
  /** @var string */
  public $dataSourceType;
  /** @var TypedValue */
  public $value;
  protected $valueType = TypedValue::class;
  protected $valueDataType = '';
  /** @param string */
  public function setDataSourceName($dataSourceName)
  {
    $this->dataSourceName = $dataSourceName;
  }
  /** @return string */
  public function getDataSourceName()
  {
    return $this->dataSourceName;
  }
  /** @param string */
  public function setDataSourceType($dataSourceType)
  {
    $this->dataSourceType = $dataSourceType;
  }
  /** @return string */
  public function getDataSourceType()
  {
    return $this->dataSourceType;
  }
  /** @param TypedValue */
  public function setValue(TypedValue $value)
  {
    $this->value = $value;
  }
  /** @return TypedValue */
  public function getValue()
  {
    return $this->value;
  }
}

class CollectdValueError extends \Google\Model
{
  /** @var Status */
  public $error;
  /** @var int */
  public $index;
  protected $errorType = Status::class;
  protected $errorDataType = '';
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
}

class Condition extends \Google\Model
{
  /** @var MetricAbsence */
  public $conditionAbsent;
  /** @var LogMatch */
  public $conditionMatchedLog;
  /** @var MonitoringQueryLanguageCondition */
  public $conditionMonitoringQueryLanguage;
  /** @var MetricThreshold */
  public $conditionThreshold;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $conditionAbsentType = MetricAbsence::class;
  protected $conditionAbsentDataType = '';
  protected $conditionMatchedLogType = LogMatch::class;
  protected $conditionMatchedLogDataType = '';
  protected $conditionMonitoringQueryLanguageType = MonitoringQueryLanguageCondition::class;
  protected $conditionMonitoringQueryLanguageDataType = '';
  protected $conditionThresholdType = MetricThreshold::class;
  protected $conditionThresholdDataType = '';
  /** @param MetricAbsence */
  public function setConditionAbsent(MetricAbsence $conditionAbsent)
  {
    $this->conditionAbsent = $conditionAbsent;
  }
  /** @return MetricAbsence */
  public function getConditionAbsent()
  {
    return $this->conditionAbsent;
  }
  /** @param LogMatch */
  public function setConditionMatchedLog(LogMatch $conditionMatchedLog)
  {
    $this->conditionMatchedLog = $conditionMatchedLog;
  }
  /** @return LogMatch */
  public function getConditionMatchedLog()
  {
    return $this->conditionMatchedLog;
  }
  /** @param MonitoringQueryLanguageCondition */
  public function setConditionMonitoringQueryLanguage(MonitoringQueryLanguageCondition $conditionMonitoringQueryLanguage)
  {
    $this->conditionMonitoringQueryLanguage = $conditionMonitoringQueryLanguage;
  }
  /** @return MonitoringQueryLanguageCondition */
  public function getConditionMonitoringQueryLanguage()
  {
    return $this->conditionMonitoringQueryLanguage;
  }
  /** @param MetricThreshold */
  public function setConditionThreshold(MetricThreshold $conditionThreshold)
  {
    $this->conditionThreshold = $conditionThreshold;
  }
  /** @return MetricThreshold */
  public function getConditionThreshold()
  {
    return $this->conditionThreshold;
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

class ContentMatcher extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var JsonPathMatcher */
  public $jsonPathMatcher;
  /** @var string */
  public $matcher;
  protected $jsonPathMatcherType = JsonPathMatcher::class;
  protected $jsonPathMatcherDataType = '';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param JsonPathMatcher */
  public function setJsonPathMatcher(JsonPathMatcher $jsonPathMatcher)
  {
    $this->jsonPathMatcher = $jsonPathMatcher;
  }
  /** @return JsonPathMatcher */
  public function getJsonPathMatcher()
  {
    return $this->jsonPathMatcher;
  }
  /** @param string */
  public function setMatcher($matcher)
  {
    $this->matcher = $matcher;
  }
  /** @return string */
  public function getMatcher()
  {
    return $this->matcher;
  }
}

class CreateCollectdTimeSeriesRequest extends \Google\Collection
{
  /** @var CollectdPayload[] */
  public $collectdPayloads;
  /** @var string */
  public $collectdVersion;
  /** @var MonitoredResource */
  public $resource;
  protected $collection_key = 'collectdPayloads';
  protected $collectdPayloadsType = CollectdPayload::class;
  protected $collectdPayloadsDataType = 'array';
  protected $resourceType = MonitoredResource::class;
  protected $resourceDataType = '';
  /** @param CollectdPayload[] */
  public function setCollectdPayloads($collectdPayloads)
  {
    $this->collectdPayloads = $collectdPayloads;
  }
  /** @return CollectdPayload[] */
  public function getCollectdPayloads()
  {
    return $this->collectdPayloads;
  }
  /** @param string */
  public function setCollectdVersion($collectdVersion)
  {
    $this->collectdVersion = $collectdVersion;
  }
  /** @return string */
  public function getCollectdVersion()
  {
    return $this->collectdVersion;
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

class CreateCollectdTimeSeriesResponse extends \Google\Collection
{
  /** @var CollectdPayloadError[] */
  public $payloadErrors;
  /** @var CreateTimeSeriesSummary */
  public $summary;
  protected $collection_key = 'payloadErrors';
  protected $payloadErrorsType = CollectdPayloadError::class;
  protected $payloadErrorsDataType = 'array';
  protected $summaryType = CreateTimeSeriesSummary::class;
  protected $summaryDataType = '';
  /** @param CollectdPayloadError[] */
  public function setPayloadErrors($payloadErrors)
  {
    $this->payloadErrors = $payloadErrors;
  }
  /** @return CollectdPayloadError[] */
  public function getPayloadErrors()
  {
    return $this->payloadErrors;
  }
  /** @param CreateTimeSeriesSummary */
  public function setSummary(CreateTimeSeriesSummary $summary)
  {
    $this->summary = $summary;
  }
  /** @return CreateTimeSeriesSummary */
  public function getSummary()
  {
    return $this->summary;
  }
}

class CreateTimeSeriesRequest extends \Google\Collection
{
  /** @var TimeSeries[] */
  public $timeSeries;
  protected $collection_key = 'timeSeries';
  protected $timeSeriesType = TimeSeries::class;
  protected $timeSeriesDataType = 'array';
  /** @param TimeSeries[] */
  public function setTimeSeries($timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /** @return TimeSeries[] */
  public function getTimeSeries()
  {
    return $this->timeSeries;
  }
}

class CreateTimeSeriesSummary extends \Google\Collection
{
  /** @var Error[] */
  public $errors;
  /** @var int */
  public $successPointCount;
  /** @var int */
  public $totalPointCount;
  protected $collection_key = 'errors';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param int */
  public function setSuccessPointCount($successPointCount)
  {
    $this->successPointCount = $successPointCount;
  }
  /** @return int */
  public function getSuccessPointCount()
  {
    return $this->successPointCount;
  }
  /** @param int */
  public function setTotalPointCount($totalPointCount)
  {
    $this->totalPointCount = $totalPointCount;
  }
  /** @return int */
  public function getTotalPointCount()
  {
    return $this->totalPointCount;
  }
}

class Custom extends \Google\Model
{
}

class Distribution extends \Google\Collection
{
  /** @var string[] */
  public $bucketCounts;
  /** @var BucketOptions */
  public $bucketOptions;
  /** @var string */
  public $count;
  /** @var Exemplar[] */
  public $exemplars;
  public $mean;
  /** @var Range */
  public $range;
  public $sumOfSquaredDeviation;
  protected $collection_key = 'exemplars';
  protected $bucketOptionsType = BucketOptions::class;
  protected $bucketOptionsDataType = '';
  protected $exemplarsType = Exemplar::class;
  protected $exemplarsDataType = 'array';
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  /** @param string[] */
  public function setBucketCounts($bucketCounts)
  {
    $this->bucketCounts = $bucketCounts;
  }
  /** @return string[] */
  public function getBucketCounts()
  {
    return $this->bucketCounts;
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
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
  /** @param Exemplar[] */
  public function setExemplars($exemplars)
  {
    $this->exemplars = $exemplars;
  }
  /** @return Exemplar[] */
  public function getExemplars()
  {
    return $this->exemplars;
  }
  public function setMean($mean)
  {
    $this->mean = $mean;
  }
  public function getMean()
  {
    return $this->mean;
  }
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
  public function setSumOfSquaredDeviation($sumOfSquaredDeviation)
  {
    $this->sumOfSquaredDeviation = $sumOfSquaredDeviation;
  }
  public function getSumOfSquaredDeviation()
  {
    return $this->sumOfSquaredDeviation;
  }
}

class DistributionCut extends \Google\Model
{
  /** @var string */
  public $distributionFilter;
  /** @var GoogleMonitoringV3Range */
  public $range;
  protected $rangeType = GoogleMonitoringV3Range::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setDistributionFilter($distributionFilter)
  {
    $this->distributionFilter = $distributionFilter;
  }
  /** @return string */
  public function getDistributionFilter()
  {
    return $this->distributionFilter;
  }
  /** @param GoogleMonitoringV3Range */
  public function setRange(GoogleMonitoringV3Range $range)
  {
    $this->range = $range;
  }
  /** @return GoogleMonitoringV3Range */
  public function getRange()
  {
    return $this->range;
  }
}

class Documentation extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
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
}

class DroppedLabels extends \Google\Model
{
  /** @var string[] */
  public $label;

  /** @param string[] */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string[] */
  public function getLabel()
  {
    return $this->label;
  }
}

class Error extends \Google\Model
{
  /** @var int */
  public $pointCount;
  /** @var Status */
  public $status;
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param int */
  public function setPointCount($pointCount)
  {
    $this->pointCount = $pointCount;
  }
  /** @return int */
  public function getPointCount()
  {
    return $this->pointCount;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class Exemplar extends \Google\Collection
{
  /** @var array[] */
  public $attachments;
  /** @var string */
  public $timestamp;
  public $value;
  protected $collection_key = 'attachments';
  /** @param array[] */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /** @return array[] */
  public function getAttachments()
  {
    return $this->attachments;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
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

class Field extends \Google\Collection
{
  /** @var string */
  public $cardinality;
  /** @var string */
  public $defaultValue;
  /** @var string */
  public $jsonName;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var int */
  public $number;
  /** @var int */
  public $oneofIndex;
  /** @var Option[] */
  public $options;
  /** @var bool */
  public $packed;
  /** @var string */
  public $typeUrl;
  protected $collection_key = 'options';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  /** @param string */
  public function setCardinality($cardinality)
  {
    $this->cardinality = $cardinality;
  }
  /** @return string */
  public function getCardinality()
  {
    return $this->cardinality;
  }
  /** @param string */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return string */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param string */
  public function setJsonName($jsonName)
  {
    $this->jsonName = $jsonName;
  }
  /** @return string */
  public function getJsonName()
  {
    return $this->jsonName;
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param int */
  public function setOneofIndex($oneofIndex)
  {
    $this->oneofIndex = $oneofIndex;
  }
  /** @return int */
  public function getOneofIndex()
  {
    return $this->oneofIndex;
  }
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param bool */
  public function setPacked($packed)
  {
    $this->packed = $packed;
  }
  /** @return bool */
  public function getPacked()
  {
    return $this->packed;
  }
  /** @param string */
  public function setTypeUrl($typeUrl)
  {
    $this->typeUrl = $typeUrl;
  }
  /** @return string */
  public function getTypeUrl()
  {
    return $this->typeUrl;
  }
}

class GetNotificationChannelVerificationCodeRequest extends \Google\Model
{
  /** @var string */
  public $expireTime;

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
}

class GetNotificationChannelVerificationCodeResponse extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $expireTime;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
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
}

class GkeNamespace extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $location;
  /** @var string */
  public $namespaceName;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
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
  public function setNamespaceName($namespaceName)
  {
    $this->namespaceName = $namespaceName;
  }
  /** @return string */
  public function getNamespaceName()
  {
    return $this->namespaceName;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class GkeService extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $location;
  /** @var string */
  public $namespaceName;
  /** @var string */
  public $projectId;
  /** @var string */
  public $serviceName;

  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
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
  public function setNamespaceName($namespaceName)
  {
    $this->namespaceName = $namespaceName;
  }
  /** @return string */
  public function getNamespaceName()
  {
    return $this->namespaceName;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class GkeWorkload extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $location;
  /** @var string */
  public $namespaceName;
  /** @var string */
  public $projectId;
  /** @var string */
  public $topLevelControllerName;
  /** @var string */
  public $topLevelControllerType;

  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
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
  public function setNamespaceName($namespaceName)
  {
    $this->namespaceName = $namespaceName;
  }
  /** @return string */
  public function getNamespaceName()
  {
    return $this->namespaceName;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string */
  public function setTopLevelControllerName($topLevelControllerName)
  {
    $this->topLevelControllerName = $topLevelControllerName;
  }
  /** @return string */
  public function getTopLevelControllerName()
  {
    return $this->topLevelControllerName;
  }
  /** @param string */
  public function setTopLevelControllerType($topLevelControllerType)
  {
    $this->topLevelControllerType = $topLevelControllerType;
  }
  /** @return string */
  public function getTopLevelControllerType()
  {
    return $this->topLevelControllerType;
  }
}

class GoogleMonitoringV3Range extends \Google\Model
{
  public $max;
  public $min;

  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class Group extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $filter;
  /** @var bool */
  public $isCluster;
  /** @var string */
  public $name;
  /** @var string */
  public $parentName;

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
  public function setIsCluster($isCluster)
  {
    $this->isCluster = $isCluster;
  }
  /** @return bool */
  public function getIsCluster()
  {
    return $this->isCluster;
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
  public function setParentName($parentName)
  {
    $this->parentName = $parentName;
  }
  /** @return string */
  public function getParentName()
  {
    return $this->parentName;
  }
}

class HttpCheck extends \Google\Collection
{
  /** @var ResponseStatusCode[] */
  public $acceptedResponseStatusCodes;
  /** @var BasicAuthentication */
  public $authInfo;
  /** @var string */
  public $body;
  /** @var string */
  public $contentType;
  /** @var string[] */
  public $headers;
  /** @var bool */
  public $maskHeaders;
  /** @var string */
  public $path;
  /** @var PingConfig */
  public $pingConfig;
  /** @var int */
  public $port;
  /** @var string */
  public $requestMethod;
  /** @var bool */
  public $useSsl;
  /** @var bool */
  public $validateSsl;
  protected $collection_key = 'acceptedResponseStatusCodes';
  protected $acceptedResponseStatusCodesType = ResponseStatusCode::class;
  protected $acceptedResponseStatusCodesDataType = 'array';
  protected $authInfoType = BasicAuthentication::class;
  protected $authInfoDataType = '';
  protected $pingConfigType = PingConfig::class;
  protected $pingConfigDataType = '';
  /** @param ResponseStatusCode[] */
  public function setAcceptedResponseStatusCodes($acceptedResponseStatusCodes)
  {
    $this->acceptedResponseStatusCodes = $acceptedResponseStatusCodes;
  }
  /** @return ResponseStatusCode[] */
  public function getAcceptedResponseStatusCodes()
  {
    return $this->acceptedResponseStatusCodes;
  }
  /** @param BasicAuthentication */
  public function setAuthInfo(BasicAuthentication $authInfo)
  {
    $this->authInfo = $authInfo;
  }
  /** @return BasicAuthentication */
  public function getAuthInfo()
  {
    return $this->authInfo;
  }
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
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
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param bool */
  public function setMaskHeaders($maskHeaders)
  {
    $this->maskHeaders = $maskHeaders;
  }
  /** @return bool */
  public function getMaskHeaders()
  {
    return $this->maskHeaders;
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
  /** @param PingConfig */
  public function setPingConfig(PingConfig $pingConfig)
  {
    $this->pingConfig = $pingConfig;
  }
  /** @return PingConfig */
  public function getPingConfig()
  {
    return $this->pingConfig;
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
  public function setRequestMethod($requestMethod)
  {
    $this->requestMethod = $requestMethod;
  }
  /** @return string */
  public function getRequestMethod()
  {
    return $this->requestMethod;
  }
  /** @param bool */
  public function setUseSsl($useSsl)
  {
    $this->useSsl = $useSsl;
  }
  /** @return bool */
  public function getUseSsl()
  {
    return $this->useSsl;
  }
  /** @param bool */
  public function setValidateSsl($validateSsl)
  {
    $this->validateSsl = $validateSsl;
  }
  /** @return bool */
  public function getValidateSsl()
  {
    return $this->validateSsl;
  }
}

class InternalChecker extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $gcpZone;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var string */
  public $peerProjectId;
  /** @var string */
  public $state;

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
  public function setGcpZone($gcpZone)
  {
    $this->gcpZone = $gcpZone;
  }
  /** @return string */
  public function getGcpZone()
  {
    return $this->gcpZone;
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
  /** @param string */
  public function setPeerProjectId($peerProjectId)
  {
    $this->peerProjectId = $peerProjectId;
  }
  /** @return string */
  public function getPeerProjectId()
  {
    return $this->peerProjectId;
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

class IstioCanonicalService extends \Google\Model
{
  /** @var string */
  public $canonicalService;
  /** @var string */
  public $canonicalServiceNamespace;
  /** @var string */
  public $meshUid;

  /** @param string */
  public function setCanonicalService($canonicalService)
  {
    $this->canonicalService = $canonicalService;
  }
  /** @return string */
  public function getCanonicalService()
  {
    return $this->canonicalService;
  }
  /** @param string */
  public function setCanonicalServiceNamespace($canonicalServiceNamespace)
  {
    $this->canonicalServiceNamespace = $canonicalServiceNamespace;
  }
  /** @return string */
  public function getCanonicalServiceNamespace()
  {
    return $this->canonicalServiceNamespace;
  }
  /** @param string */
  public function setMeshUid($meshUid)
  {
    $this->meshUid = $meshUid;
  }
  /** @return string */
  public function getMeshUid()
  {
    return $this->meshUid;
  }
}

class JsonPathMatcher extends \Google\Model
{
  /** @var string */
  public $jsonMatcher;
  /** @var string */
  public $jsonPath;

  /** @param string */
  public function setJsonMatcher($jsonMatcher)
  {
    $this->jsonMatcher = $jsonMatcher;
  }
  /** @return string */
  public function getJsonMatcher()
  {
    return $this->jsonMatcher;
  }
  /** @param string */
  public function setJsonPath($jsonPath)
  {
    $this->jsonPath = $jsonPath;
  }
  /** @return string */
  public function getJsonPath()
  {
    return $this->jsonPath;
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

class LabelValue extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $int64Value;
  /** @var string */
  public $stringValue;

  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class LatencyCriteria extends \Google\Model
{
  /** @var string */
  public $threshold;

  /** @param string */
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  /** @return string */
  public function getThreshold()
  {
    return $this->threshold;
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

class ListAlertPoliciesResponse extends \Google\Collection
{
  /** @var AlertPolicy[] */
  public $alertPolicies;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'alertPolicies';
  protected $alertPoliciesType = AlertPolicy::class;
  protected $alertPoliciesDataType = 'array';
  /** @param AlertPolicy[] */
  public function setAlertPolicies($alertPolicies)
  {
    $this->alertPolicies = $alertPolicies;
  }
  /** @return AlertPolicy[] */
  public function getAlertPolicies()
  {
    return $this->alertPolicies;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListGroupMembersResponse extends \Google\Collection
{
  /** @var MonitoredResource[] */
  public $members;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'members';
  protected $membersType = MonitoredResource::class;
  protected $membersDataType = 'array';
  /** @param MonitoredResource[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return MonitoredResource[] */
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListGroupsResponse extends \Google\Collection
{
  /** @var Group[] */
  public $group;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'group';
  protected $groupType = Group::class;
  protected $groupDataType = 'array';
  /** @param Group[] */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return Group[] */
  public function getGroup()
  {
    return $this->group;
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

class ListMetricDescriptorsResponse extends \Google\Collection
{
  /** @var MetricDescriptor[] */
  public $metricDescriptors;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'metricDescriptors';
  protected $metricDescriptorsType = MetricDescriptor::class;
  protected $metricDescriptorsDataType = 'array';
  /** @param MetricDescriptor[] */
  public function setMetricDescriptors($metricDescriptors)
  {
    $this->metricDescriptors = $metricDescriptors;
  }
  /** @return MetricDescriptor[] */
  public function getMetricDescriptors()
  {
    return $this->metricDescriptors;
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

class ListNotificationChannelDescriptorsResponse extends \Google\Collection
{
  /** @var NotificationChannelDescriptor[] */
  public $channelDescriptors;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'channelDescriptors';
  protected $channelDescriptorsType = NotificationChannelDescriptor::class;
  protected $channelDescriptorsDataType = 'array';
  /** @param NotificationChannelDescriptor[] */
  public function setChannelDescriptors($channelDescriptors)
  {
    $this->channelDescriptors = $channelDescriptors;
  }
  /** @return NotificationChannelDescriptor[] */
  public function getChannelDescriptors()
  {
    return $this->channelDescriptors;
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

class ListNotificationChannelsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var NotificationChannel[] */
  public $notificationChannels;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'notificationChannels';
  protected $notificationChannelsType = NotificationChannel::class;
  protected $notificationChannelsDataType = 'array';
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
  /** @param NotificationChannel[] */
  public function setNotificationChannels($notificationChannels)
  {
    $this->notificationChannels = $notificationChannels;
  }
  /** @return NotificationChannel[] */
  public function getNotificationChannels()
  {
    return $this->notificationChannels;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListServiceLevelObjectivesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ServiceLevelObjective[] */
  public $serviceLevelObjectives;
  protected $collection_key = 'serviceLevelObjectives';
  protected $serviceLevelObjectivesType = ServiceLevelObjective::class;
  protected $serviceLevelObjectivesDataType = 'array';
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
  /** @param ServiceLevelObjective[] */
  public function setServiceLevelObjectives($serviceLevelObjectives)
  {
    $this->serviceLevelObjectives = $serviceLevelObjectives;
  }
  /** @return ServiceLevelObjective[] */
  public function getServiceLevelObjectives()
  {
    return $this->serviceLevelObjectives;
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

class ListTimeSeriesResponse extends \Google\Collection
{
  /** @var Status[] */
  public $executionErrors;
  /** @var string */
  public $nextPageToken;
  /** @var TimeSeries[] */
  public $timeSeries;
  /** @var string */
  public $unit;
  protected $collection_key = 'timeSeries';
  protected $executionErrorsType = Status::class;
  protected $executionErrorsDataType = 'array';
  protected $timeSeriesType = TimeSeries::class;
  protected $timeSeriesDataType = 'array';
  /** @param Status[] */
  public function setExecutionErrors($executionErrors)
  {
    $this->executionErrors = $executionErrors;
  }
  /** @return Status[] */
  public function getExecutionErrors()
  {
    return $this->executionErrors;
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
  /** @param TimeSeries[] */
  public function setTimeSeries($timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /** @return TimeSeries[] */
  public function getTimeSeries()
  {
    return $this->timeSeries;
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
}

class ListUptimeCheckConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  /** @var UptimeCheckConfig[] */
  public $uptimeCheckConfigs;
  protected $collection_key = 'uptimeCheckConfigs';
  protected $uptimeCheckConfigsType = UptimeCheckConfig::class;
  protected $uptimeCheckConfigsDataType = 'array';
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
  /** @param UptimeCheckConfig[] */
  public function setUptimeCheckConfigs($uptimeCheckConfigs)
  {
    $this->uptimeCheckConfigs = $uptimeCheckConfigs;
  }
  /** @return UptimeCheckConfig[] */
  public function getUptimeCheckConfigs()
  {
    return $this->uptimeCheckConfigs;
  }
}

class ListUptimeCheckIpsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UptimeCheckIp[] */
  public $uptimeCheckIps;
  protected $collection_key = 'uptimeCheckIps';
  protected $uptimeCheckIpsType = UptimeCheckIp::class;
  protected $uptimeCheckIpsDataType = 'array';
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
  /** @param UptimeCheckIp[] */
  public function setUptimeCheckIps($uptimeCheckIps)
  {
    $this->uptimeCheckIps = $uptimeCheckIps;
  }
  /** @return UptimeCheckIp[] */
  public function getUptimeCheckIps()
  {
    return $this->uptimeCheckIps;
  }
}

class LogMatch extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var string[] */
  public $labelExtractors;

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
}

class MeshIstio extends \Google\Model
{
  /** @var string */
  public $meshUid;
  /** @var string */
  public $serviceName;
  /** @var string */
  public $serviceNamespace;

  /** @param string */
  public function setMeshUid($meshUid)
  {
    $this->meshUid = $meshUid;
  }
  /** @return string */
  public function getMeshUid()
  {
    return $this->meshUid;
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
  /** @param string */
  public function setServiceNamespace($serviceNamespace)
  {
    $this->serviceNamespace = $serviceNamespace;
  }
  /** @return string */
  public function getServiceNamespace()
  {
    return $this->serviceNamespace;
  }
}

class Metric extends \Google\Model
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

class MetricAbsence extends \Google\Collection
{
  /** @var Aggregation[] */
  public $aggregations;
  /** @var string */
  public $duration;
  /** @var string */
  public $filter;
  /** @var Trigger */
  public $trigger;
  protected $collection_key = 'aggregations';
  protected $aggregationsType = Aggregation::class;
  protected $aggregationsDataType = 'array';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = '';
  /** @param Aggregation[] */
  public function setAggregations($aggregations)
  {
    $this->aggregations = $aggregations;
  }
  /** @return Aggregation[] */
  public function getAggregations()
  {
    return $this->aggregations;
  }
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
  /** @param Trigger */
  public function setTrigger(Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger */
  public function getTrigger()
  {
    return $this->trigger;
  }
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

class MetricRange extends \Google\Model
{
  /** @var GoogleMonitoringV3Range */
  public $range;
  /** @var string */
  public $timeSeries;
  protected $rangeType = GoogleMonitoringV3Range::class;
  protected $rangeDataType = '';
  /** @param GoogleMonitoringV3Range */
  public function setRange(GoogleMonitoringV3Range $range)
  {
    $this->range = $range;
  }
  /** @return GoogleMonitoringV3Range */
  public function getRange()
  {
    return $this->range;
  }
  /** @param string */
  public function setTimeSeries($timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /** @return string */
  public function getTimeSeries()
  {
    return $this->timeSeries;
  }
}

class MetricThreshold extends \Google\Collection
{
  /** @var Aggregation[] */
  public $aggregations;
  /** @var string */
  public $comparison;
  /** @var Aggregation[] */
  public $denominatorAggregations;
  /** @var string */
  public $denominatorFilter;
  /** @var string */
  public $duration;
  /** @var string */
  public $evaluationMissingData;
  /** @var string */
  public $filter;
  public $thresholdValue;
  /** @var Trigger */
  public $trigger;
  protected $collection_key = 'denominatorAggregations';
  protected $aggregationsType = Aggregation::class;
  protected $aggregationsDataType = 'array';
  protected $denominatorAggregationsType = Aggregation::class;
  protected $denominatorAggregationsDataType = 'array';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = '';
  /** @param Aggregation[] */
  public function setAggregations($aggregations)
  {
    $this->aggregations = $aggregations;
  }
  /** @return Aggregation[] */
  public function getAggregations()
  {
    return $this->aggregations;
  }
  /** @param string */
  public function setComparison($comparison)
  {
    $this->comparison = $comparison;
  }
  /** @return string */
  public function getComparison()
  {
    return $this->comparison;
  }
  /** @param Aggregation[] */
  public function setDenominatorAggregations($denominatorAggregations)
  {
    $this->denominatorAggregations = $denominatorAggregations;
  }
  /** @return Aggregation[] */
  public function getDenominatorAggregations()
  {
    return $this->denominatorAggregations;
  }
  /** @param string */
  public function setDenominatorFilter($denominatorFilter)
  {
    $this->denominatorFilter = $denominatorFilter;
  }
  /** @return string */
  public function getDenominatorFilter()
  {
    return $this->denominatorFilter;
  }
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setEvaluationMissingData($evaluationMissingData)
  {
    $this->evaluationMissingData = $evaluationMissingData;
  }
  /** @return string */
  public function getEvaluationMissingData()
  {
    return $this->evaluationMissingData;
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
  public function setThresholdValue($thresholdValue)
  {
    $this->thresholdValue = $thresholdValue;
  }
  public function getThresholdValue()
  {
    return $this->thresholdValue;
  }
  /** @param Trigger */
  public function setTrigger(Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger */
  public function getTrigger()
  {
    return $this->trigger;
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

class MonitoringEmpty extends \Google\Model
{
}

class MonitoringQueryLanguageCondition extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $evaluationMissingData;
  /** @var string */
  public $query;
  /** @var Trigger */
  public $trigger;
  protected $triggerType = Trigger::class;
  protected $triggerDataType = '';
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setEvaluationMissingData($evaluationMissingData)
  {
    $this->evaluationMissingData = $evaluationMissingData;
  }
  /** @return string */
  public function getEvaluationMissingData()
  {
    return $this->evaluationMissingData;
  }
  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param Trigger */
  public function setTrigger(Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

class MutationRecord extends \Google\Model
{
  /** @var string */
  public $mutateTime;
  /** @var string */
  public $mutatedBy;

  /** @param string */
  public function setMutateTime($mutateTime)
  {
    $this->mutateTime = $mutateTime;
  }
  /** @return string */
  public function getMutateTime()
  {
    return $this->mutateTime;
  }
  /** @param string */
  public function setMutatedBy($mutatedBy)
  {
    $this->mutatedBy = $mutatedBy;
  }
  /** @return string */
  public function getMutatedBy()
  {
    return $this->mutatedBy;
  }
}

class NotificationChannel extends \Google\Collection
{
  /** @var MutationRecord */
  public $creationRecord;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enabled;
  /** @var string[] */
  public $labels;
  /** @var MutationRecord[] */
  public $mutationRecords;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  /** @var string[] */
  public $userLabels;
  /** @var string */
  public $verificationStatus;
  protected $collection_key = 'mutationRecords';
  protected $creationRecordType = MutationRecord::class;
  protected $creationRecordDataType = '';
  protected $mutationRecordsType = MutationRecord::class;
  protected $mutationRecordsDataType = 'array';
  /** @param MutationRecord */
  public function setCreationRecord(MutationRecord $creationRecord)
  {
    $this->creationRecord = $creationRecord;
  }
  /** @return MutationRecord */
  public function getCreationRecord()
  {
    return $this->creationRecord;
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
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
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
  /** @param MutationRecord[] */
  public function setMutationRecords($mutationRecords)
  {
    $this->mutationRecords = $mutationRecords;
  }
  /** @return MutationRecord[] */
  public function getMutationRecords()
  {
    return $this->mutationRecords;
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
  /** @param string */
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  /** @return string */
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class NotificationChannelDescriptor extends \Google\Collection
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
  /** @var string[] */
  public $supportedTiers;
  /** @var string */
  public $type;
  protected $collection_key = 'supportedTiers';
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
  /** @param string[] */
  public function setSupportedTiers($supportedTiers)
  {
    $this->supportedTiers = $supportedTiers;
  }
  /** @return string[] */
  public function getSupportedTiers()
  {
    return $this->supportedTiers;
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

class NotificationRateLimit extends \Google\Model
{
  /** @var string */
  public $period;

  /** @param string */
  public function setPeriod($period)
  {
    $this->period = $period;
  }
  /** @return string */
  public function getPeriod()
  {
    return $this->period;
  }
}

class OperationMetadata extends \Google\Model
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

class Option extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var array[] */
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array[] */
  public function getValue()
  {
    return $this->value;
  }
}

class PerformanceThreshold extends \Google\Model
{
  /** @var BasicSli */
  public $basicSliPerformance;
  /** @var RequestBasedSli */
  public $performance;
  public $threshold;
  protected $basicSliPerformanceType = BasicSli::class;
  protected $basicSliPerformanceDataType = '';
  protected $performanceType = RequestBasedSli::class;
  protected $performanceDataType = '';
  /** @param BasicSli */
  public function setBasicSliPerformance(BasicSli $basicSliPerformance)
  {
    $this->basicSliPerformance = $basicSliPerformance;
  }
  /** @return BasicSli */
  public function getBasicSliPerformance()
  {
    return $this->basicSliPerformance;
  }
  /** @param RequestBasedSli */
  public function setPerformance(RequestBasedSli $performance)
  {
    $this->performance = $performance;
  }
  /** @return RequestBasedSli */
  public function getPerformance()
  {
    return $this->performance;
  }
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  public function getThreshold()
  {
    return $this->threshold;
  }
}

class PingConfig extends \Google\Model
{
  /** @var int */
  public $pingsCount;

  /** @param int */
  public function setPingsCount($pingsCount)
  {
    $this->pingsCount = $pingsCount;
  }
  /** @return int */
  public function getPingsCount()
  {
    return $this->pingsCount;
  }
}

class Point extends \Google\Model
{
  /** @var TimeInterval */
  public $interval;
  /** @var TypedValue */
  public $value;
  protected $intervalType = TimeInterval::class;
  protected $intervalDataType = '';
  protected $valueType = TypedValue::class;
  protected $valueDataType = '';
  /** @param TimeInterval */
  public function setInterval(TimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /** @return TimeInterval */
  public function getInterval()
  {
    return $this->interval;
  }
  /** @param TypedValue */
  public function setValue(TypedValue $value)
  {
    $this->value = $value;
  }
  /** @return TypedValue */
  public function getValue()
  {
    return $this->value;
  }
}

class PointData extends \Google\Collection
{
  /** @var TimeInterval */
  public $timeInterval;
  /** @var TypedValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $timeIntervalType = TimeInterval::class;
  protected $timeIntervalDataType = '';
  protected $valuesType = TypedValue::class;
  protected $valuesDataType = 'array';
  /** @param TimeInterval */
  public function setTimeInterval(TimeInterval $timeInterval)
  {
    $this->timeInterval = $timeInterval;
  }
  /** @return TimeInterval */
  public function getTimeInterval()
  {
    return $this->timeInterval;
  }
  /** @param TypedValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return TypedValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class QueryTimeSeriesRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $query;

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
  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
}

class QueryTimeSeriesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Status[] */
  public $partialErrors;
  /** @var TimeSeriesData[] */
  public $timeSeriesData;
  /** @var TimeSeriesDescriptor */
  public $timeSeriesDescriptor;
  protected $collection_key = 'timeSeriesData';
  protected $partialErrorsType = Status::class;
  protected $partialErrorsDataType = 'array';
  protected $timeSeriesDataType = TimeSeriesData::class;
  protected $timeSeriesDataDataType = 'array';
  protected $timeSeriesDescriptorType = TimeSeriesDescriptor::class;
  protected $timeSeriesDescriptorDataType = '';
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
  /** @param Status[] */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /** @return Status[] */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /** @param TimeSeriesData[] */
  public function setTimeSeriesData($timeSeriesData)
  {
    $this->timeSeriesData = $timeSeriesData;
  }
  /** @return TimeSeriesData[] */
  public function getTimeSeriesData()
  {
    return $this->timeSeriesData;
  }
  /** @param TimeSeriesDescriptor */
  public function setTimeSeriesDescriptor(TimeSeriesDescriptor $timeSeriesDescriptor)
  {
    $this->timeSeriesDescriptor = $timeSeriesDescriptor;
  }
  /** @return TimeSeriesDescriptor */
  public function getTimeSeriesDescriptor()
  {
    return $this->timeSeriesDescriptor;
  }
}

class Range extends \Google\Model
{
  public $max;
  public $min;

  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class RequestBasedSli extends \Google\Model
{
  /** @var DistributionCut */
  public $distributionCut;
  /** @var TimeSeriesRatio */
  public $goodTotalRatio;
  protected $distributionCutType = DistributionCut::class;
  protected $distributionCutDataType = '';
  protected $goodTotalRatioType = TimeSeriesRatio::class;
  protected $goodTotalRatioDataType = '';
  /** @param DistributionCut */
  public function setDistributionCut(DistributionCut $distributionCut)
  {
    $this->distributionCut = $distributionCut;
  }
  /** @return DistributionCut */
  public function getDistributionCut()
  {
    return $this->distributionCut;
  }
  /** @param TimeSeriesRatio */
  public function setGoodTotalRatio(TimeSeriesRatio $goodTotalRatio)
  {
    $this->goodTotalRatio = $goodTotalRatio;
  }
  /** @return TimeSeriesRatio */
  public function getGoodTotalRatio()
  {
    return $this->goodTotalRatio;
  }
}

class ResourceGroup extends \Google\Model
{
  /** @var string */
  public $groupId;
  /** @var string */
  public $resourceType;

  /** @param string */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return string */
  public function getGroupId()
  {
    return $this->groupId;
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
}

class ResponseStatusCode extends \Google\Model
{
  /** @var string */
  public $statusClass;
  /** @var int */
  public $statusValue;

  /** @param string */
  public function setStatusClass($statusClass)
  {
    $this->statusClass = $statusClass;
  }
  /** @return string */
  public function getStatusClass()
  {
    return $this->statusClass;
  }
  /** @param int */
  public function setStatusValue($statusValue)
  {
    $this->statusValue = $statusValue;
  }
  /** @return int */
  public function getStatusValue()
  {
    return $this->statusValue;
  }
}

class SendNotificationChannelVerificationCodeRequest extends \Google\Model
{
}

class Service extends \Google\Model
{
  /** @var AppEngine */
  public $appEngine;
  /** @var BasicService */
  public $basicService;
  /** @var CloudEndpoints */
  public $cloudEndpoints;
  /** @var CloudRun */
  public $cloudRun;
  /** @var ClusterIstio */
  public $clusterIstio;
  /** @var Custom */
  public $custom;
  /** @var string */
  public $displayName;
  /** @var GkeNamespace */
  public $gkeNamespace;
  /** @var GkeService */
  public $gkeService;
  /** @var GkeWorkload */
  public $gkeWorkload;
  /** @var IstioCanonicalService */
  public $istioCanonicalService;
  /** @var MeshIstio */
  public $meshIstio;
  /** @var string */
  public $name;
  /** @var Telemetry */
  public $telemetry;
  /** @var string[] */
  public $userLabels;
  protected $appEngineType = AppEngine::class;
  protected $appEngineDataType = '';
  protected $basicServiceType = BasicService::class;
  protected $basicServiceDataType = '';
  protected $cloudEndpointsType = CloudEndpoints::class;
  protected $cloudEndpointsDataType = '';
  protected $cloudRunType = CloudRun::class;
  protected $cloudRunDataType = '';
  protected $clusterIstioType = ClusterIstio::class;
  protected $clusterIstioDataType = '';
  protected $customType = Custom::class;
  protected $customDataType = '';
  protected $gkeNamespaceType = GkeNamespace::class;
  protected $gkeNamespaceDataType = '';
  protected $gkeServiceType = GkeService::class;
  protected $gkeServiceDataType = '';
  protected $gkeWorkloadType = GkeWorkload::class;
  protected $gkeWorkloadDataType = '';
  protected $istioCanonicalServiceType = IstioCanonicalService::class;
  protected $istioCanonicalServiceDataType = '';
  protected $meshIstioType = MeshIstio::class;
  protected $meshIstioDataType = '';
  protected $telemetryType = Telemetry::class;
  protected $telemetryDataType = '';
  /** @param AppEngine */
  public function setAppEngine(AppEngine $appEngine)
  {
    $this->appEngine = $appEngine;
  }
  /** @return AppEngine */
  public function getAppEngine()
  {
    return $this->appEngine;
  }
  /** @param BasicService */
  public function setBasicService(BasicService $basicService)
  {
    $this->basicService = $basicService;
  }
  /** @return BasicService */
  public function getBasicService()
  {
    return $this->basicService;
  }
  /** @param CloudEndpoints */
  public function setCloudEndpoints(CloudEndpoints $cloudEndpoints)
  {
    $this->cloudEndpoints = $cloudEndpoints;
  }
  /** @return CloudEndpoints */
  public function getCloudEndpoints()
  {
    return $this->cloudEndpoints;
  }
  /** @param CloudRun */
  public function setCloudRun(CloudRun $cloudRun)
  {
    $this->cloudRun = $cloudRun;
  }
  /** @return CloudRun */
  public function getCloudRun()
  {
    return $this->cloudRun;
  }
  /** @param ClusterIstio */
  public function setClusterIstio(ClusterIstio $clusterIstio)
  {
    $this->clusterIstio = $clusterIstio;
  }
  /** @return ClusterIstio */
  public function getClusterIstio()
  {
    return $this->clusterIstio;
  }
  /** @param Custom */
  public function setCustom(Custom $custom)
  {
    $this->custom = $custom;
  }
  /** @return Custom */
  public function getCustom()
  {
    return $this->custom;
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
  /** @param GkeNamespace */
  public function setGkeNamespace(GkeNamespace $gkeNamespace)
  {
    $this->gkeNamespace = $gkeNamespace;
  }
  /** @return GkeNamespace */
  public function getGkeNamespace()
  {
    return $this->gkeNamespace;
  }
  /** @param GkeService */
  public function setGkeService(GkeService $gkeService)
  {
    $this->gkeService = $gkeService;
  }
  /** @return GkeService */
  public function getGkeService()
  {
    return $this->gkeService;
  }
  /** @param GkeWorkload */
  public function setGkeWorkload(GkeWorkload $gkeWorkload)
  {
    $this->gkeWorkload = $gkeWorkload;
  }
  /** @return GkeWorkload */
  public function getGkeWorkload()
  {
    return $this->gkeWorkload;
  }
  /** @param IstioCanonicalService */
  public function setIstioCanonicalService(IstioCanonicalService $istioCanonicalService)
  {
    $this->istioCanonicalService = $istioCanonicalService;
  }
  /** @return IstioCanonicalService */
  public function getIstioCanonicalService()
  {
    return $this->istioCanonicalService;
  }
  /** @param MeshIstio */
  public function setMeshIstio(MeshIstio $meshIstio)
  {
    $this->meshIstio = $meshIstio;
  }
  /** @return MeshIstio */
  public function getMeshIstio()
  {
    return $this->meshIstio;
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
  /** @param Telemetry */
  public function setTelemetry(Telemetry $telemetry)
  {
    $this->telemetry = $telemetry;
  }
  /** @return Telemetry */
  public function getTelemetry()
  {
    return $this->telemetry;
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

class ServiceLevelIndicator extends \Google\Model
{
  /** @var BasicSli */
  public $basicSli;
  /** @var RequestBasedSli */
  public $requestBased;
  /** @var WindowsBasedSli */
  public $windowsBased;
  protected $basicSliType = BasicSli::class;
  protected $basicSliDataType = '';
  protected $requestBasedType = RequestBasedSli::class;
  protected $requestBasedDataType = '';
  protected $windowsBasedType = WindowsBasedSli::class;
  protected $windowsBasedDataType = '';
  /** @param BasicSli */
  public function setBasicSli(BasicSli $basicSli)
  {
    $this->basicSli = $basicSli;
  }
  /** @return BasicSli */
  public function getBasicSli()
  {
    return $this->basicSli;
  }
  /** @param RequestBasedSli */
  public function setRequestBased(RequestBasedSli $requestBased)
  {
    $this->requestBased = $requestBased;
  }
  /** @return RequestBasedSli */
  public function getRequestBased()
  {
    return $this->requestBased;
  }
  /** @param WindowsBasedSli */
  public function setWindowsBased(WindowsBasedSli $windowsBased)
  {
    $this->windowsBased = $windowsBased;
  }
  /** @return WindowsBasedSli */
  public function getWindowsBased()
  {
    return $this->windowsBased;
  }
}

class ServiceLevelObjective extends \Google\Model
{
  /** @var string */
  public $calendarPeriod;
  /** @var string */
  public $displayName;
  public $goal;
  /** @var string */
  public $name;
  /** @var string */
  public $rollingPeriod;
  /** @var ServiceLevelIndicator */
  public $serviceLevelIndicator;
  /** @var string[] */
  public $userLabels;
  protected $serviceLevelIndicatorType = ServiceLevelIndicator::class;
  protected $serviceLevelIndicatorDataType = '';
  /** @param string */
  public function setCalendarPeriod($calendarPeriod)
  {
    $this->calendarPeriod = $calendarPeriod;
  }
  /** @return string */
  public function getCalendarPeriod()
  {
    return $this->calendarPeriod;
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
  public function setGoal($goal)
  {
    $this->goal = $goal;
  }
  public function getGoal()
  {
    return $this->goal;
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
  public function setRollingPeriod($rollingPeriod)
  {
    $this->rollingPeriod = $rollingPeriod;
  }
  /** @return string */
  public function getRollingPeriod()
  {
    return $this->rollingPeriod;
  }
  /** @param ServiceLevelIndicator */
  public function setServiceLevelIndicator(ServiceLevelIndicator $serviceLevelIndicator)
  {
    $this->serviceLevelIndicator = $serviceLevelIndicator;
  }
  /** @return ServiceLevelIndicator */
  public function getServiceLevelIndicator()
  {
    return $this->serviceLevelIndicator;
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

class SourceContext extends \Google\Model
{
  /** @var string */
  public $fileName;

  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
}

class SpanContext extends \Google\Model
{
  /** @var string */
  public $spanName;

  /** @param string */
  public function setSpanName($spanName)
  {
    $this->spanName = $spanName;
  }
  /** @return string */
  public function getSpanName()
  {
    return $this->spanName;
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

class TcpCheck extends \Google\Model
{
  /** @var PingConfig */
  public $pingConfig;
  /** @var int */
  public $port;
  protected $pingConfigType = PingConfig::class;
  protected $pingConfigDataType = '';
  /** @param PingConfig */
  public function setPingConfig(PingConfig $pingConfig)
  {
    $this->pingConfig = $pingConfig;
  }
  /** @return PingConfig */
  public function getPingConfig()
  {
    return $this->pingConfig;
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

class Telemetry extends \Google\Model
{
  /** @var string */
  public $resourceName;

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
}

class TimeInterval extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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
}

class TimeSeries extends \Google\Collection
{
  /** @var MonitoredResourceMetadata */
  public $metadata;
  /** @var Metric */
  public $metric;
  /** @var string */
  public $metricKind;
  /** @var Point[] */
  public $points;
  /** @var MonitoredResource */
  public $resource;
  /** @var string */
  public $unit;
  /** @var string */
  public $valueType;
  protected $collection_key = 'points';
  protected $metadataType = MonitoredResourceMetadata::class;
  protected $metadataDataType = '';
  protected $metricType = Metric::class;
  protected $metricDataType = '';
  protected $pointsType = Point::class;
  protected $pointsDataType = 'array';
  protected $resourceType = MonitoredResource::class;
  protected $resourceDataType = '';
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
  /** @param Metric */
  public function setMetric(Metric $metric)
  {
    $this->metric = $metric;
  }
  /** @return Metric */
  public function getMetric()
  {
    return $this->metric;
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
  /** @param Point[] */
  public function setPoints($points)
  {
    $this->points = $points;
  }
  /** @return Point[] */
  public function getPoints()
  {
    return $this->points;
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

class TimeSeriesData extends \Google\Collection
{
  /** @var LabelValue[] */
  public $labelValues;
  /** @var PointData[] */
  public $pointData;
  protected $collection_key = 'pointData';
  protected $labelValuesType = LabelValue::class;
  protected $labelValuesDataType = 'array';
  protected $pointDataType = PointData::class;
  protected $pointDataDataType = 'array';
  /** @param LabelValue[] */
  public function setLabelValues($labelValues)
  {
    $this->labelValues = $labelValues;
  }
  /** @return LabelValue[] */
  public function getLabelValues()
  {
    return $this->labelValues;
  }
  /** @param PointData[] */
  public function setPointData($pointData)
  {
    $this->pointData = $pointData;
  }
  /** @return PointData[] */
  public function getPointData()
  {
    return $this->pointData;
  }
}

class TimeSeriesDescriptor extends \Google\Collection
{
  /** @var LabelDescriptor[] */
  public $labelDescriptors;
  /** @var ValueDescriptor[] */
  public $pointDescriptors;
  protected $collection_key = 'pointDescriptors';
  protected $labelDescriptorsType = LabelDescriptor::class;
  protected $labelDescriptorsDataType = 'array';
  protected $pointDescriptorsType = ValueDescriptor::class;
  protected $pointDescriptorsDataType = 'array';
  /** @param LabelDescriptor[] */
  public function setLabelDescriptors($labelDescriptors)
  {
    $this->labelDescriptors = $labelDescriptors;
  }
  /** @return LabelDescriptor[] */
  public function getLabelDescriptors()
  {
    return $this->labelDescriptors;
  }
  /** @param ValueDescriptor[] */
  public function setPointDescriptors($pointDescriptors)
  {
    $this->pointDescriptors = $pointDescriptors;
  }
  /** @return ValueDescriptor[] */
  public function getPointDescriptors()
  {
    return $this->pointDescriptors;
  }
}

class TimeSeriesRatio extends \Google\Model
{
  /** @var string */
  public $badServiceFilter;
  /** @var string */
  public $goodServiceFilter;
  /** @var string */
  public $totalServiceFilter;

  /** @param string */
  public function setBadServiceFilter($badServiceFilter)
  {
    $this->badServiceFilter = $badServiceFilter;
  }
  /** @return string */
  public function getBadServiceFilter()
  {
    return $this->badServiceFilter;
  }
  /** @param string */
  public function setGoodServiceFilter($goodServiceFilter)
  {
    $this->goodServiceFilter = $goodServiceFilter;
  }
  /** @return string */
  public function getGoodServiceFilter()
  {
    return $this->goodServiceFilter;
  }
  /** @param string */
  public function setTotalServiceFilter($totalServiceFilter)
  {
    $this->totalServiceFilter = $totalServiceFilter;
  }
  /** @return string */
  public function getTotalServiceFilter()
  {
    return $this->totalServiceFilter;
  }
}

class Trigger extends \Google\Model
{
  /** @var int */
  public $count;
  public $percent;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  public function setPercent($percent)
  {
    $this->percent = $percent;
  }
  public function getPercent()
  {
    return $this->percent;
  }
}

class Type extends \Google\Collection
{
  /** @var Field[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string[] */
  public $oneofs;
  /** @var Option[] */
  public $options;
  /** @var SourceContext */
  public $sourceContext;
  /** @var string */
  public $syntax;
  protected $collection_key = 'options';
  protected $fieldsType = Field::class;
  protected $fieldsDataType = 'array';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  protected $sourceContextType = SourceContext::class;
  protected $sourceContextDataType = '';
  /** @param Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Field[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setOneofs($oneofs)
  {
    $this->oneofs = $oneofs;
  }
  /** @return string[] */
  public function getOneofs()
  {
    return $this->oneofs;
  }
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param SourceContext */
  public function setSourceContext(SourceContext $sourceContext)
  {
    $this->sourceContext = $sourceContext;
  }
  /** @return SourceContext */
  public function getSourceContext()
  {
    return $this->sourceContext;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
  }
}

class TypedValue extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var Distribution */
  public $distributionValue;
  public $doubleValue;
  /** @var string */
  public $int64Value;
  /** @var string */
  public $stringValue;
  protected $distributionValueType = Distribution::class;
  protected $distributionValueDataType = '';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param Distribution */
  public function setDistributionValue(Distribution $distributionValue)
  {
    $this->distributionValue = $distributionValue;
  }
  /** @return Distribution */
  public function getDistributionValue()
  {
    return $this->distributionValue;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param string */
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class UptimeCheckConfig extends \Google\Collection
{
  /** @var string */
  public $checkerType;
  /** @var ContentMatcher[] */
  public $contentMatchers;
  /** @var string */
  public $displayName;
  /** @var HttpCheck */
  public $httpCheck;
  /** @var InternalChecker[] */
  public $internalCheckers;
  /** @var bool */
  public $isInternal;
  /** @var MonitoredResource */
  public $monitoredResource;
  /** @var string */
  public $name;
  /** @var string */
  public $period;
  /** @var ResourceGroup */
  public $resourceGroup;
  /** @var string[] */
  public $selectedRegions;
  /** @var TcpCheck */
  public $tcpCheck;
  /** @var string */
  public $timeout;
  /** @var string[] */
  public $userLabels;
  protected $collection_key = 'selectedRegions';
  protected $contentMatchersType = ContentMatcher::class;
  protected $contentMatchersDataType = 'array';
  protected $httpCheckType = HttpCheck::class;
  protected $httpCheckDataType = '';
  protected $internalCheckersType = InternalChecker::class;
  protected $internalCheckersDataType = 'array';
  protected $monitoredResourceType = MonitoredResource::class;
  protected $monitoredResourceDataType = '';
  protected $resourceGroupType = ResourceGroup::class;
  protected $resourceGroupDataType = '';
  protected $tcpCheckType = TcpCheck::class;
  protected $tcpCheckDataType = '';
  /** @param string */
  public function setCheckerType($checkerType)
  {
    $this->checkerType = $checkerType;
  }
  /** @return string */
  public function getCheckerType()
  {
    return $this->checkerType;
  }
  /** @param ContentMatcher[] */
  public function setContentMatchers($contentMatchers)
  {
    $this->contentMatchers = $contentMatchers;
  }
  /** @return ContentMatcher[] */
  public function getContentMatchers()
  {
    return $this->contentMatchers;
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
  /** @param HttpCheck */
  public function setHttpCheck(HttpCheck $httpCheck)
  {
    $this->httpCheck = $httpCheck;
  }
  /** @return HttpCheck */
  public function getHttpCheck()
  {
    return $this->httpCheck;
  }
  /** @param InternalChecker[] */
  public function setInternalCheckers($internalCheckers)
  {
    $this->internalCheckers = $internalCheckers;
  }
  /** @return InternalChecker[] */
  public function getInternalCheckers()
  {
    return $this->internalCheckers;
  }
  /** @param bool */
  public function setIsInternal($isInternal)
  {
    $this->isInternal = $isInternal;
  }
  /** @return bool */
  public function getIsInternal()
  {
    return $this->isInternal;
  }
  /** @param MonitoredResource */
  public function setMonitoredResource(MonitoredResource $monitoredResource)
  {
    $this->monitoredResource = $monitoredResource;
  }
  /** @return MonitoredResource */
  public function getMonitoredResource()
  {
    return $this->monitoredResource;
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
  public function setPeriod($period)
  {
    $this->period = $period;
  }
  /** @return string */
  public function getPeriod()
  {
    return $this->period;
  }
  /** @param ResourceGroup */
  public function setResourceGroup(ResourceGroup $resourceGroup)
  {
    $this->resourceGroup = $resourceGroup;
  }
  /** @return ResourceGroup */
  public function getResourceGroup()
  {
    return $this->resourceGroup;
  }
  /** @param string[] */
  public function setSelectedRegions($selectedRegions)
  {
    $this->selectedRegions = $selectedRegions;
  }
  /** @return string[] */
  public function getSelectedRegions()
  {
    return $this->selectedRegions;
  }
  /** @param TcpCheck */
  public function setTcpCheck(TcpCheck $tcpCheck)
  {
    $this->tcpCheck = $tcpCheck;
  }
  /** @return TcpCheck */
  public function getTcpCheck()
  {
    return $this->tcpCheck;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
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

class UptimeCheckIp extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $location;
  /** @var string */
  public $region;

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

class ValueDescriptor extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $metricKind;
  /** @var string */
  public $unit;
  /** @var string */
  public $valueType;

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
  public function setMetricKind($metricKind)
  {
    $this->metricKind = $metricKind;
  }
  /** @return string */
  public function getMetricKind()
  {
    return $this->metricKind;
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

class VerifyNotificationChannelRequest extends \Google\Model
{
  /** @var string */
  public $code;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
}

class WindowsBasedSli extends \Google\Model
{
  /** @var string */
  public $goodBadMetricFilter;
  /** @var PerformanceThreshold */
  public $goodTotalRatioThreshold;
  /** @var MetricRange */
  public $metricMeanInRange;
  /** @var MetricRange */
  public $metricSumInRange;
  /** @var string */
  public $windowPeriod;
  protected $goodTotalRatioThresholdType = PerformanceThreshold::class;
  protected $goodTotalRatioThresholdDataType = '';
  protected $metricMeanInRangeType = MetricRange::class;
  protected $metricMeanInRangeDataType = '';
  protected $metricSumInRangeType = MetricRange::class;
  protected $metricSumInRangeDataType = '';
  /** @param string */
  public function setGoodBadMetricFilter($goodBadMetricFilter)
  {
    $this->goodBadMetricFilter = $goodBadMetricFilter;
  }
  /** @return string */
  public function getGoodBadMetricFilter()
  {
    return $this->goodBadMetricFilter;
  }
  /** @param PerformanceThreshold */
  public function setGoodTotalRatioThreshold(PerformanceThreshold $goodTotalRatioThreshold)
  {
    $this->goodTotalRatioThreshold = $goodTotalRatioThreshold;
  }
  /** @return PerformanceThreshold */
  public function getGoodTotalRatioThreshold()
  {
    return $this->goodTotalRatioThreshold;
  }
  /** @param MetricRange */
  public function setMetricMeanInRange(MetricRange $metricMeanInRange)
  {
    $this->metricMeanInRange = $metricMeanInRange;
  }
  /** @return MetricRange */
  public function getMetricMeanInRange()
  {
    return $this->metricMeanInRange;
  }
  /** @param MetricRange */
  public function setMetricSumInRange(MetricRange $metricSumInRange)
  {
    $this->metricSumInRange = $metricSumInRange;
  }
  /** @return MetricRange */
  public function getMetricSumInRange()
  {
    return $this->metricSumInRange;
  }
  /** @param string */
  public function setWindowPeriod($windowPeriod)
  {
    $this->windowPeriod = $windowPeriod;
  }
  /** @return string */
  public function getWindowPeriod()
  {
    return $this->windowPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Aggregation::class, 'Google_Service_Monitoring_Aggregation');
class_alias(AlertPolicy::class, 'Google_Service_Monitoring_AlertPolicy');
class_alias(AlertStrategy::class, 'Google_Service_Monitoring_AlertStrategy');
class_alias(AppEngine::class, 'Google_Service_Monitoring_AppEngine');
class_alias(AvailabilityCriteria::class, 'Google_Service_Monitoring_AvailabilityCriteria');
class_alias(BasicAuthentication::class, 'Google_Service_Monitoring_BasicAuthentication');
class_alias(BasicService::class, 'Google_Service_Monitoring_BasicService');
class_alias(BasicSli::class, 'Google_Service_Monitoring_BasicSli');
class_alias(BucketOptions::class, 'Google_Service_Monitoring_BucketOptions');
class_alias(CloudEndpoints::class, 'Google_Service_Monitoring_CloudEndpoints');
class_alias(CloudRun::class, 'Google_Service_Monitoring_CloudRun');
class_alias(ClusterIstio::class, 'Google_Service_Monitoring_ClusterIstio');
class_alias(CollectdPayload::class, 'Google_Service_Monitoring_CollectdPayload');
class_alias(CollectdPayloadError::class, 'Google_Service_Monitoring_CollectdPayloadError');
class_alias(CollectdValue::class, 'Google_Service_Monitoring_CollectdValue');
class_alias(CollectdValueError::class, 'Google_Service_Monitoring_CollectdValueError');
class_alias(Condition::class, 'Google_Service_Monitoring_Condition');
class_alias(ContentMatcher::class, 'Google_Service_Monitoring_ContentMatcher');
class_alias(CreateCollectdTimeSeriesRequest::class, 'Google_Service_Monitoring_CreateCollectdTimeSeriesRequest');
class_alias(CreateCollectdTimeSeriesResponse::class, 'Google_Service_Monitoring_CreateCollectdTimeSeriesResponse');
class_alias(CreateTimeSeriesRequest::class, 'Google_Service_Monitoring_CreateTimeSeriesRequest');
class_alias(CreateTimeSeriesSummary::class, 'Google_Service_Monitoring_CreateTimeSeriesSummary');
class_alias(Custom::class, 'Google_Service_Monitoring_Custom');
class_alias(Distribution::class, 'Google_Service_Monitoring_Distribution');
class_alias(DistributionCut::class, 'Google_Service_Monitoring_DistributionCut');
class_alias(Documentation::class, 'Google_Service_Monitoring_Documentation');
class_alias(DroppedLabels::class, 'Google_Service_Monitoring_DroppedLabels');
class_alias(Error::class, 'Google_Service_Monitoring_Error');
class_alias(Exemplar::class, 'Google_Service_Monitoring_Exemplar');
class_alias(Explicit::class, 'Google_Service_Monitoring_Explicit');
class_alias(Exponential::class, 'Google_Service_Monitoring_Exponential');
class_alias(Field::class, 'Google_Service_Monitoring_Field');
class_alias(GetNotificationChannelVerificationCodeRequest::class, 'Google_Service_Monitoring_GetNotificationChannelVerificationCodeRequest');
class_alias(GetNotificationChannelVerificationCodeResponse::class, 'Google_Service_Monitoring_GetNotificationChannelVerificationCodeResponse');
class_alias(GkeNamespace::class, 'Google_Service_Monitoring_GkeNamespace');
class_alias(GkeService::class, 'Google_Service_Monitoring_GkeService');
class_alias(GkeWorkload::class, 'Google_Service_Monitoring_GkeWorkload');
class_alias(GoogleMonitoringV3Range::class, 'Google_Service_Monitoring_GoogleMonitoringV3Range');
class_alias(Group::class, 'Google_Service_Monitoring_Group');
class_alias(HttpCheck::class, 'Google_Service_Monitoring_HttpCheck');
class_alias(InternalChecker::class, 'Google_Service_Monitoring_InternalChecker');
class_alias(IstioCanonicalService::class, 'Google_Service_Monitoring_IstioCanonicalService');
class_alias(JsonPathMatcher::class, 'Google_Service_Monitoring_JsonPathMatcher');
class_alias(LabelDescriptor::class, 'Google_Service_Monitoring_LabelDescriptor');
class_alias(LabelValue::class, 'Google_Service_Monitoring_LabelValue');
class_alias(LatencyCriteria::class, 'Google_Service_Monitoring_LatencyCriteria');
class_alias(Linear::class, 'Google_Service_Monitoring_Linear');
class_alias(ListAlertPoliciesResponse::class, 'Google_Service_Monitoring_ListAlertPoliciesResponse');
class_alias(ListGroupMembersResponse::class, 'Google_Service_Monitoring_ListGroupMembersResponse');
class_alias(ListGroupsResponse::class, 'Google_Service_Monitoring_ListGroupsResponse');
class_alias(ListMetricDescriptorsResponse::class, 'Google_Service_Monitoring_ListMetricDescriptorsResponse');
class_alias(ListMonitoredResourceDescriptorsResponse::class, 'Google_Service_Monitoring_ListMonitoredResourceDescriptorsResponse');
class_alias(ListNotificationChannelDescriptorsResponse::class, 'Google_Service_Monitoring_ListNotificationChannelDescriptorsResponse');
class_alias(ListNotificationChannelsResponse::class, 'Google_Service_Monitoring_ListNotificationChannelsResponse');
class_alias(ListServiceLevelObjectivesResponse::class, 'Google_Service_Monitoring_ListServiceLevelObjectivesResponse');
class_alias(ListServicesResponse::class, 'Google_Service_Monitoring_ListServicesResponse');
class_alias(ListTimeSeriesResponse::class, 'Google_Service_Monitoring_ListTimeSeriesResponse');
class_alias(ListUptimeCheckConfigsResponse::class, 'Google_Service_Monitoring_ListUptimeCheckConfigsResponse');
class_alias(ListUptimeCheckIpsResponse::class, 'Google_Service_Monitoring_ListUptimeCheckIpsResponse');
class_alias(LogMatch::class, 'Google_Service_Monitoring_LogMatch');
class_alias(MeshIstio::class, 'Google_Service_Monitoring_MeshIstio');
class_alias(Metric::class, 'Google_Service_Monitoring_Metric');
class_alias(MetricAbsence::class, 'Google_Service_Monitoring_MetricAbsence');
class_alias(MetricDescriptor::class, 'Google_Service_Monitoring_MetricDescriptor');
class_alias(MetricDescriptorMetadata::class, 'Google_Service_Monitoring_MetricDescriptorMetadata');
class_alias(MetricRange::class, 'Google_Service_Monitoring_MetricRange');
class_alias(MetricThreshold::class, 'Google_Service_Monitoring_MetricThreshold');
class_alias(MonitoredResource::class, 'Google_Service_Monitoring_MonitoredResource');
class_alias(MonitoredResourceDescriptor::class, 'Google_Service_Monitoring_MonitoredResourceDescriptor');
class_alias(MonitoredResourceMetadata::class, 'Google_Service_Monitoring_MonitoredResourceMetadata');
class_alias(MonitoringEmpty::class, 'Google_Service_Monitoring_MonitoringEmpty');
class_alias(MonitoringQueryLanguageCondition::class, 'Google_Service_Monitoring_MonitoringQueryLanguageCondition');
class_alias(MutationRecord::class, 'Google_Service_Monitoring_MutationRecord');
class_alias(NotificationChannel::class, 'Google_Service_Monitoring_NotificationChannel');
class_alias(NotificationChannelDescriptor::class, 'Google_Service_Monitoring_NotificationChannelDescriptor');
class_alias(NotificationRateLimit::class, 'Google_Service_Monitoring_NotificationRateLimit');
class_alias(OperationMetadata::class, 'Google_Service_Monitoring_OperationMetadata');
class_alias(Option::class, 'Google_Service_Monitoring_Option');
class_alias(PerformanceThreshold::class, 'Google_Service_Monitoring_PerformanceThreshold');
class_alias(PingConfig::class, 'Google_Service_Monitoring_PingConfig');
class_alias(Point::class, 'Google_Service_Monitoring_Point');
class_alias(PointData::class, 'Google_Service_Monitoring_PointData');
class_alias(QueryTimeSeriesRequest::class, 'Google_Service_Monitoring_QueryTimeSeriesRequest');
class_alias(QueryTimeSeriesResponse::class, 'Google_Service_Monitoring_QueryTimeSeriesResponse');
class_alias(Range::class, 'Google_Service_Monitoring_Range');
class_alias(RequestBasedSli::class, 'Google_Service_Monitoring_RequestBasedSli');
class_alias(ResourceGroup::class, 'Google_Service_Monitoring_ResourceGroup');
class_alias(ResponseStatusCode::class, 'Google_Service_Monitoring_ResponseStatusCode');
class_alias(SendNotificationChannelVerificationCodeRequest::class, 'Google_Service_Monitoring_SendNotificationChannelVerificationCodeRequest');
class_alias(Service::class, 'Google_Service_Monitoring_Service');
class_alias(ServiceLevelIndicator::class, 'Google_Service_Monitoring_ServiceLevelIndicator');
class_alias(ServiceLevelObjective::class, 'Google_Service_Monitoring_ServiceLevelObjective');
class_alias(SourceContext::class, 'Google_Service_Monitoring_SourceContext');
class_alias(SpanContext::class, 'Google_Service_Monitoring_SpanContext');
class_alias(Status::class, 'Google_Service_Monitoring_Status');
class_alias(TcpCheck::class, 'Google_Service_Monitoring_TcpCheck');
class_alias(Telemetry::class, 'Google_Service_Monitoring_Telemetry');
class_alias(TimeInterval::class, 'Google_Service_Monitoring_TimeInterval');
class_alias(TimeSeries::class, 'Google_Service_Monitoring_TimeSeries');
class_alias(TimeSeriesData::class, 'Google_Service_Monitoring_TimeSeriesData');
class_alias(TimeSeriesDescriptor::class, 'Google_Service_Monitoring_TimeSeriesDescriptor');
class_alias(TimeSeriesRatio::class, 'Google_Service_Monitoring_TimeSeriesRatio');
class_alias(Trigger::class, 'Google_Service_Monitoring_Trigger');
class_alias(Type::class, 'Google_Service_Monitoring_Type');
class_alias(TypedValue::class, 'Google_Service_Monitoring_TypedValue');
class_alias(UptimeCheckConfig::class, 'Google_Service_Monitoring_UptimeCheckConfig');
class_alias(UptimeCheckIp::class, 'Google_Service_Monitoring_UptimeCheckIp');
class_alias(ValueDescriptor::class, 'Google_Service_Monitoring_ValueDescriptor');
class_alias(VerifyNotificationChannelRequest::class, 'Google_Service_Monitoring_VerifyNotificationChannelRequest');
class_alias(WindowsBasedSli::class, 'Google_Service_Monitoring_WindowsBasedSli');
