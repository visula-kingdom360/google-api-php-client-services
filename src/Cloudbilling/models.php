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

namespace Google\Service\Cloudbilling;

class AggregationInfo extends \Google\Model
{
  /** @var int */
  public $aggregationCount;
  /** @var string */
  public $aggregationInterval;
  /** @var string */
  public $aggregationLevel;

  /** @param int */
  public function setAggregationCount($aggregationCount)
  {
    $this->aggregationCount = $aggregationCount;
  }
  /** @return int */
  public function getAggregationCount()
  {
    return $this->aggregationCount;
  }
  /** @param string */
  public function setAggregationInterval($aggregationInterval)
  {
    $this->aggregationInterval = $aggregationInterval;
  }
  /** @return string */
  public function getAggregationInterval()
  {
    return $this->aggregationInterval;
  }
  /** @param string */
  public function setAggregationLevel($aggregationLevel)
  {
    $this->aggregationLevel = $aggregationLevel;
  }
  /** @return string */
  public function getAggregationLevel()
  {
    return $this->aggregationLevel;
  }
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

class BillingAccount extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $masterBillingAccount;
  /** @var string */
  public $name;
  /** @var bool */
  public $open;

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
  public function setMasterBillingAccount($masterBillingAccount)
  {
    $this->masterBillingAccount = $masterBillingAccount;
  }
  /** @return string */
  public function getMasterBillingAccount()
  {
    return $this->masterBillingAccount;
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
  public function setOpen($open)
  {
    $this->open = $open;
  }
  /** @return bool */
  public function getOpen()
  {
    return $this->open;
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

class Category extends \Google\Model
{
  /** @var string */
  public $resourceFamily;
  /** @var string */
  public $resourceGroup;
  /** @var string */
  public $serviceDisplayName;
  /** @var string */
  public $usageType;

  /** @param string */
  public function setResourceFamily($resourceFamily)
  {
    $this->resourceFamily = $resourceFamily;
  }
  /** @return string */
  public function getResourceFamily()
  {
    return $this->resourceFamily;
  }
  /** @param string */
  public function setResourceGroup($resourceGroup)
  {
    $this->resourceGroup = $resourceGroup;
  }
  /** @return string */
  public function getResourceGroup()
  {
    return $this->resourceGroup;
  }
  /** @param string */
  public function setServiceDisplayName($serviceDisplayName)
  {
    $this->serviceDisplayName = $serviceDisplayName;
  }
  /** @return string */
  public function getServiceDisplayName()
  {
    return $this->serviceDisplayName;
  }
  /** @param string */
  public function setUsageType($usageType)
  {
    $this->usageType = $usageType;
  }
  /** @return string */
  public function getUsageType()
  {
    return $this->usageType;
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

class GeoTaxonomy extends \Google\Collection
{
  /** @var string[] */
  public $regions;
  /** @var string */
  public $type;
  protected $collection_key = 'regions';
  /** @param string[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return string[] */
  public function getRegions()
  {
    return $this->regions;
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

class ListBillingAccountsResponse extends \Google\Collection
{
  /** @var BillingAccount[] */
  public $billingAccounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'billingAccounts';
  protected $billingAccountsType = BillingAccount::class;
  protected $billingAccountsDataType = 'array';
  /** @param BillingAccount[] */
  public function setBillingAccounts($billingAccounts)
  {
    $this->billingAccounts = $billingAccounts;
  }
  /** @return BillingAccount[] */
  public function getBillingAccounts()
  {
    return $this->billingAccounts;
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

class ListProjectBillingInfoResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ProjectBillingInfo[] */
  public $projectBillingInfo;
  protected $collection_key = 'projectBillingInfo';
  protected $projectBillingInfoType = ProjectBillingInfo::class;
  protected $projectBillingInfoDataType = 'array';
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
  /** @param ProjectBillingInfo[] */
  public function setProjectBillingInfo($projectBillingInfo)
  {
    $this->projectBillingInfo = $projectBillingInfo;
  }
  /** @return ProjectBillingInfo[] */
  public function getProjectBillingInfo()
  {
    return $this->projectBillingInfo;
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

class ListSkusResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Sku[] */
  public $skus;
  protected $collection_key = 'skus';
  protected $skusType = Sku::class;
  protected $skusDataType = 'array';
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
  /** @param Sku[] */
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  /** @return Sku[] */
  public function getSkus()
  {
    return $this->skus;
  }
}

class Money extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $nanos;
  /** @var string */
  public $units;

  /** @param string */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param string */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string */
  public function getUnits()
  {
    return $this->units;
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

class PricingExpression extends \Google\Collection
{
  /** @var string */
  public $baseUnit;
  public $baseUnitConversionFactor;
  /** @var string */
  public $baseUnitDescription;
  public $displayQuantity;
  /** @var TierRate[] */
  public $tieredRates;
  /** @var string */
  public $usageUnit;
  /** @var string */
  public $usageUnitDescription;
  protected $collection_key = 'tieredRates';
  protected $tieredRatesType = TierRate::class;
  protected $tieredRatesDataType = 'array';
  /** @param string */
  public function setBaseUnit($baseUnit)
  {
    $this->baseUnit = $baseUnit;
  }
  /** @return string */
  public function getBaseUnit()
  {
    return $this->baseUnit;
  }
  public function setBaseUnitConversionFactor($baseUnitConversionFactor)
  {
    $this->baseUnitConversionFactor = $baseUnitConversionFactor;
  }
  public function getBaseUnitConversionFactor()
  {
    return $this->baseUnitConversionFactor;
  }
  /** @param string */
  public function setBaseUnitDescription($baseUnitDescription)
  {
    $this->baseUnitDescription = $baseUnitDescription;
  }
  /** @return string */
  public function getBaseUnitDescription()
  {
    return $this->baseUnitDescription;
  }
  public function setDisplayQuantity($displayQuantity)
  {
    $this->displayQuantity = $displayQuantity;
  }
  public function getDisplayQuantity()
  {
    return $this->displayQuantity;
  }
  /** @param TierRate[] */
  public function setTieredRates($tieredRates)
  {
    $this->tieredRates = $tieredRates;
  }
  /** @return TierRate[] */
  public function getTieredRates()
  {
    return $this->tieredRates;
  }
  /** @param string */
  public function setUsageUnit($usageUnit)
  {
    $this->usageUnit = $usageUnit;
  }
  /** @return string */
  public function getUsageUnit()
  {
    return $this->usageUnit;
  }
  /** @param string */
  public function setUsageUnitDescription($usageUnitDescription)
  {
    $this->usageUnitDescription = $usageUnitDescription;
  }
  /** @return string */
  public function getUsageUnitDescription()
  {
    return $this->usageUnitDescription;
  }
}

class PricingInfo extends \Google\Model
{
  /** @var AggregationInfo */
  public $aggregationInfo;
  public $currencyConversionRate;
  /** @var string */
  public $effectiveTime;
  /** @var PricingExpression */
  public $pricingExpression;
  /** @var string */
  public $summary;
  protected $aggregationInfoType = AggregationInfo::class;
  protected $aggregationInfoDataType = '';
  protected $pricingExpressionType = PricingExpression::class;
  protected $pricingExpressionDataType = '';
  /** @param AggregationInfo */
  public function setAggregationInfo(AggregationInfo $aggregationInfo)
  {
    $this->aggregationInfo = $aggregationInfo;
  }
  /** @return AggregationInfo */
  public function getAggregationInfo()
  {
    return $this->aggregationInfo;
  }
  public function setCurrencyConversionRate($currencyConversionRate)
  {
    $this->currencyConversionRate = $currencyConversionRate;
  }
  public function getCurrencyConversionRate()
  {
    return $this->currencyConversionRate;
  }
  /** @param string */
  public function setEffectiveTime($effectiveTime)
  {
    $this->effectiveTime = $effectiveTime;
  }
  /** @return string */
  public function getEffectiveTime()
  {
    return $this->effectiveTime;
  }
  /** @param PricingExpression */
  public function setPricingExpression(PricingExpression $pricingExpression)
  {
    $this->pricingExpression = $pricingExpression;
  }
  /** @return PricingExpression */
  public function getPricingExpression()
  {
    return $this->pricingExpression;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
}

class ProjectBillingInfo extends \Google\Model
{
  /** @var string */
  public $billingAccountName;
  /** @var bool */
  public $billingEnabled;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setBillingAccountName($billingAccountName)
  {
    $this->billingAccountName = $billingAccountName;
  }
  /** @return string */
  public function getBillingAccountName()
  {
    return $this->billingAccountName;
  }
  /** @param bool */
  public function setBillingEnabled($billingEnabled)
  {
    $this->billingEnabled = $billingEnabled;
  }
  /** @return bool */
  public function getBillingEnabled()
  {
    return $this->billingEnabled;
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

class Service extends \Google\Model
{
  /** @var string */
  public $businessEntityName;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceId;

  /** @param string */
  public function setBusinessEntityName($businessEntityName)
  {
    $this->businessEntityName = $businessEntityName;
  }
  /** @return string */
  public function getBusinessEntityName()
  {
    return $this->businessEntityName;
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

class Sku extends \Google\Collection
{
  /** @var Category */
  public $category;
  /** @var string */
  public $description;
  /** @var GeoTaxonomy */
  public $geoTaxonomy;
  /** @var string */
  public $name;
  /** @var PricingInfo[] */
  public $pricingInfo;
  /** @var string */
  public $serviceProviderName;
  /** @var string[] */
  public $serviceRegions;
  /** @var string */
  public $skuId;
  protected $collection_key = 'serviceRegions';
  protected $categoryType = Category::class;
  protected $categoryDataType = '';
  protected $geoTaxonomyType = GeoTaxonomy::class;
  protected $geoTaxonomyDataType = '';
  protected $pricingInfoType = PricingInfo::class;
  protected $pricingInfoDataType = 'array';
  /** @param Category */
  public function setCategory(Category $category)
  {
    $this->category = $category;
  }
  /** @return Category */
  public function getCategory()
  {
    return $this->category;
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
  /** @param GeoTaxonomy */
  public function setGeoTaxonomy(GeoTaxonomy $geoTaxonomy)
  {
    $this->geoTaxonomy = $geoTaxonomy;
  }
  /** @return GeoTaxonomy */
  public function getGeoTaxonomy()
  {
    return $this->geoTaxonomy;
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
  /** @param PricingInfo[] */
  public function setPricingInfo($pricingInfo)
  {
    $this->pricingInfo = $pricingInfo;
  }
  /** @return PricingInfo[] */
  public function getPricingInfo()
  {
    return $this->pricingInfo;
  }
  /** @param string */
  public function setServiceProviderName($serviceProviderName)
  {
    $this->serviceProviderName = $serviceProviderName;
  }
  /** @return string */
  public function getServiceProviderName()
  {
    return $this->serviceProviderName;
  }
  /** @param string[] */
  public function setServiceRegions($serviceRegions)
  {
    $this->serviceRegions = $serviceRegions;
  }
  /** @return string[] */
  public function getServiceRegions()
  {
    return $this->serviceRegions;
  }
  /** @param string */
  public function setSkuId($skuId)
  {
    $this->skuId = $skuId;
  }
  /** @return string */
  public function getSkuId()
  {
    return $this->skuId;
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

class TierRate extends \Google\Model
{
  public $startUsageAmount;
  /** @var Money */
  public $unitPrice;
  protected $unitPriceType = Money::class;
  protected $unitPriceDataType = '';
  public function setStartUsageAmount($startUsageAmount)
  {
    $this->startUsageAmount = $startUsageAmount;
  }
  public function getStartUsageAmount()
  {
    return $this->startUsageAmount;
  }
  /** @param Money */
  public function setUnitPrice(Money $unitPrice)
  {
    $this->unitPrice = $unitPrice;
  }
  /** @return Money */
  public function getUnitPrice()
  {
    return $this->unitPrice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregationInfo::class, 'Google_Service_Cloudbilling_AggregationInfo');
class_alias(AuditConfig::class, 'Google_Service_Cloudbilling_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_Cloudbilling_AuditLogConfig');
class_alias(BillingAccount::class, 'Google_Service_Cloudbilling_BillingAccount');
class_alias(Binding::class, 'Google_Service_Cloudbilling_Binding');
class_alias(Category::class, 'Google_Service_Cloudbilling_Category');
class_alias(Expr::class, 'Google_Service_Cloudbilling_Expr');
class_alias(GeoTaxonomy::class, 'Google_Service_Cloudbilling_GeoTaxonomy');
class_alias(ListBillingAccountsResponse::class, 'Google_Service_Cloudbilling_ListBillingAccountsResponse');
class_alias(ListProjectBillingInfoResponse::class, 'Google_Service_Cloudbilling_ListProjectBillingInfoResponse');
class_alias(ListServicesResponse::class, 'Google_Service_Cloudbilling_ListServicesResponse');
class_alias(ListSkusResponse::class, 'Google_Service_Cloudbilling_ListSkusResponse');
class_alias(Money::class, 'Google_Service_Cloudbilling_Money');
class_alias(Policy::class, 'Google_Service_Cloudbilling_Policy');
class_alias(PricingExpression::class, 'Google_Service_Cloudbilling_PricingExpression');
class_alias(PricingInfo::class, 'Google_Service_Cloudbilling_PricingInfo');
class_alias(ProjectBillingInfo::class, 'Google_Service_Cloudbilling_ProjectBillingInfo');
class_alias(Service::class, 'Google_Service_Cloudbilling_Service');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Cloudbilling_SetIamPolicyRequest');
class_alias(Sku::class, 'Google_Service_Cloudbilling_Sku');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Cloudbilling_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Cloudbilling_TestIamPermissionsResponse');
class_alias(TierRate::class, 'Google_Service_Cloudbilling_TierRate');
