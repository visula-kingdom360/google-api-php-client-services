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

namespace Google\Service\AnalyticsHub;

class AnalyticshubEmpty extends \Google\Model
{
}

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
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

class AuditLogConfig extends \Google\Collection
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

class BigQueryDatasetSource extends \Google\Model
{
  /** @var string */
  public $dataset;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
}

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

class DataExchange extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $documentation;
  /** @var string */
  public $icon;
  /** @var int */
  public $listingCount;
  /** @var string */
  public $name;
  /** @var string */
  public $primaryContact;

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
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param string */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /** @return string */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param int */
  public function setListingCount($listingCount)
  {
    $this->listingCount = $listingCount;
  }
  /** @return int */
  public function getListingCount()
  {
    return $this->listingCount;
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
  public function setPrimaryContact($primaryContact)
  {
    $this->primaryContact = $primaryContact;
  }
  /** @return string */
  public function getPrimaryContact()
  {
    return $this->primaryContact;
  }
}

class DataProvider extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $primaryContact;

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
  public function setPrimaryContact($primaryContact)
  {
    $this->primaryContact = $primaryContact;
  }
  /** @return string */
  public function getPrimaryContact()
  {
    return $this->primaryContact;
  }
}

class DestinationDataset extends \Google\Model
{
  /** @var DestinationDatasetReference */
  public $datasetReference;
  /** @var string */
  public $description;
  /** @var string */
  public $friendlyName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  protected $datasetReferenceType = DestinationDatasetReference::class;
  protected $datasetReferenceDataType = '';
  /** @param DestinationDatasetReference */
  public function setDatasetReference(DestinationDatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }
  /** @return DestinationDatasetReference */
  public function getDatasetReference()
  {
    return $this->datasetReference;
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
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
}

class DestinationDatasetReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
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

class ListDataExchangesResponse extends \Google\Collection
{
  /** @var DataExchange[] */
  public $dataExchanges;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataExchanges';
  protected $dataExchangesType = DataExchange::class;
  protected $dataExchangesDataType = 'array';
  /** @param DataExchange[] */
  public function setDataExchanges($dataExchanges)
  {
    $this->dataExchanges = $dataExchanges;
  }
  /** @return DataExchange[] */
  public function getDataExchanges()
  {
    return $this->dataExchanges;
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

class ListListingsResponse extends \Google\Collection
{
  /** @var Listing[] */
  public $listings;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'listings';
  protected $listingsType = Listing::class;
  protected $listingsDataType = 'array';
  /** @param Listing[] */
  public function setListings($listings)
  {
    $this->listings = $listings;
  }
  /** @return Listing[] */
  public function getListings()
  {
    return $this->listings;
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

class ListOrgDataExchangesResponse extends \Google\Collection
{
  /** @var DataExchange[] */
  public $dataExchanges;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataExchanges';
  protected $dataExchangesType = DataExchange::class;
  protected $dataExchangesDataType = 'array';
  /** @param DataExchange[] */
  public function setDataExchanges($dataExchanges)
  {
    $this->dataExchanges = $dataExchanges;
  }
  /** @return DataExchange[] */
  public function getDataExchanges()
  {
    return $this->dataExchanges;
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

class Listing extends \Google\Collection
{
  /** @var BigQueryDatasetSource */
  public $bigqueryDataset;
  /** @var string[] */
  public $categories;
  /** @var DataProvider */
  public $dataProvider;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $documentation;
  /** @var string */
  public $icon;
  /** @var string */
  public $name;
  /** @var string */
  public $primaryContact;
  /** @var Publisher */
  public $publisher;
  /** @var string */
  public $requestAccess;
  /** @var string */
  public $state;
  protected $collection_key = 'categories';
  protected $bigqueryDatasetType = BigQueryDatasetSource::class;
  protected $bigqueryDatasetDataType = '';
  protected $dataProviderType = DataProvider::class;
  protected $dataProviderDataType = '';
  protected $publisherType = Publisher::class;
  protected $publisherDataType = '';
  /** @param BigQueryDatasetSource */
  public function setBigqueryDataset(BigQueryDatasetSource $bigqueryDataset)
  {
    $this->bigqueryDataset = $bigqueryDataset;
  }
  /** @return BigQueryDatasetSource */
  public function getBigqueryDataset()
  {
    return $this->bigqueryDataset;
  }
  /** @param string[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return string[] */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param DataProvider */
  public function setDataProvider(DataProvider $dataProvider)
  {
    $this->dataProvider = $dataProvider;
  }
  /** @return DataProvider */
  public function getDataProvider()
  {
    return $this->dataProvider;
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
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param string */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /** @return string */
  public function getIcon()
  {
    return $this->icon;
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
  public function setPrimaryContact($primaryContact)
  {
    $this->primaryContact = $primaryContact;
  }
  /** @return string */
  public function getPrimaryContact()
  {
    return $this->primaryContact;
  }
  /** @param Publisher */
  public function setPublisher(Publisher $publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return Publisher */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param string */
  public function setRequestAccess($requestAccess)
  {
    $this->requestAccess = $requestAccess;
  }
  /** @return string */
  public function getRequestAccess()
  {
    return $this->requestAccess;
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
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
  /** @param bool */
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /** @return bool */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
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
  /** @param string */
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
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

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
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

class Publisher extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $primaryContact;

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
  public function setPrimaryContact($primaryContact)
  {
    $this->primaryContact = $primaryContact;
  }
  /** @return string */
  public function getPrimaryContact()
  {
    return $this->primaryContact;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
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

class SubscribeListingRequest extends \Google\Model
{
  /** @var DestinationDataset */
  public $destinationDataset;
  protected $destinationDatasetType = DestinationDataset::class;
  protected $destinationDatasetDataType = '';
  /** @param DestinationDataset */
  public function setDestinationDataset(DestinationDataset $destinationDataset)
  {
    $this->destinationDataset = $destinationDataset;
  }
  /** @return DestinationDataset */
  public function getDestinationDataset()
  {
    return $this->destinationDataset;
  }
}

class SubscribeListingResponse extends \Google\Model
{
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
class_alias(AnalyticshubEmpty::class, 'Google_Service_AnalyticsHub_AnalyticshubEmpty');
class_alias(AuditConfig::class, 'Google_Service_AnalyticsHub_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_AnalyticsHub_AuditLogConfig');
class_alias(BigQueryDatasetSource::class, 'Google_Service_AnalyticsHub_BigQueryDatasetSource');
class_alias(Binding::class, 'Google_Service_AnalyticsHub_Binding');
class_alias(DataExchange::class, 'Google_Service_AnalyticsHub_DataExchange');
class_alias(DataProvider::class, 'Google_Service_AnalyticsHub_DataProvider');
class_alias(DestinationDataset::class, 'Google_Service_AnalyticsHub_DestinationDataset');
class_alias(DestinationDatasetReference::class, 'Google_Service_AnalyticsHub_DestinationDatasetReference');
class_alias(Expr::class, 'Google_Service_AnalyticsHub_Expr');
class_alias(GetIamPolicyRequest::class, 'Google_Service_AnalyticsHub_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_AnalyticsHub_GetPolicyOptions');
class_alias(ListDataExchangesResponse::class, 'Google_Service_AnalyticsHub_ListDataExchangesResponse');
class_alias(ListListingsResponse::class, 'Google_Service_AnalyticsHub_ListListingsResponse');
class_alias(ListOrgDataExchangesResponse::class, 'Google_Service_AnalyticsHub_ListOrgDataExchangesResponse');
class_alias(Listing::class, 'Google_Service_AnalyticsHub_Listing');
class_alias(OperationMetadata::class, 'Google_Service_AnalyticsHub_OperationMetadata');
class_alias(Policy::class, 'Google_Service_AnalyticsHub_Policy');
class_alias(Publisher::class, 'Google_Service_AnalyticsHub_Publisher');
class_alias(SetIamPolicyRequest::class, 'Google_Service_AnalyticsHub_SetIamPolicyRequest');
class_alias(SubscribeListingRequest::class, 'Google_Service_AnalyticsHub_SubscribeListingRequest');
class_alias(SubscribeListingResponse::class, 'Google_Service_AnalyticsHub_SubscribeListingResponse');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_AnalyticsHub_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_AnalyticsHub_TestIamPermissionsResponse');
