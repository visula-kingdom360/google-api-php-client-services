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

namespace Google\Service\MyBusinessBusinessInformation;

class AdWordsLocationExtensions extends \Google\Model
{
  /** @var string */
  public $adPhone;

  /** @param string */
  public function setAdPhone($adPhone)
  {
    $this->adPhone = $adPhone;
  }
  /** @return string */
  public function getAdPhone()
  {
    return $this->adPhone;
  }
}

class AssociateLocationRequest extends \Google\Model
{
  /** @var string */
  public $placeId;

  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Attribute extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var RepeatedEnumAttributeValue */
  public $repeatedEnumValue;
  /** @var UriAttributeValue[] */
  public $uriValues;
  /** @var string */
  public $valueType;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  protected $repeatedEnumValueType = RepeatedEnumAttributeValue::class;
  protected $repeatedEnumValueDataType = '';
  protected $uriValuesType = UriAttributeValue::class;
  protected $uriValuesDataType = 'array';
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
  /** @param RepeatedEnumAttributeValue */
  public function setRepeatedEnumValue(RepeatedEnumAttributeValue $repeatedEnumValue)
  {
    $this->repeatedEnumValue = $repeatedEnumValue;
  }
  /** @return RepeatedEnumAttributeValue */
  public function getRepeatedEnumValue()
  {
    return $this->repeatedEnumValue;
  }
  /** @param UriAttributeValue[] */
  public function setUriValues($uriValues)
  {
    $this->uriValues = $uriValues;
  }
  /** @return UriAttributeValue[] */
  public function getUriValues()
  {
    return $this->uriValues;
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
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class AttributeMetadata extends \Google\Collection
{
  /** @var bool */
  public $deprecated;
  /** @var string */
  public $displayName;
  /** @var string */
  public $groupDisplayName;
  /** @var string */
  public $parent;
  /** @var bool */
  public $repeatable;
  /** @var AttributeValueMetadata[] */
  public $valueMetadata;
  /** @var string */
  public $valueType;
  protected $collection_key = 'valueMetadata';
  protected $valueMetadataType = AttributeValueMetadata::class;
  protected $valueMetadataDataType = 'array';
  /** @param bool */
  public function setDeprecated($deprecated)
  {
    $this->deprecated = $deprecated;
  }
  /** @return bool */
  public function getDeprecated()
  {
    return $this->deprecated;
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
  public function setGroupDisplayName($groupDisplayName)
  {
    $this->groupDisplayName = $groupDisplayName;
  }
  /** @return string */
  public function getGroupDisplayName()
  {
    return $this->groupDisplayName;
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
  /** @param bool */
  public function setRepeatable($repeatable)
  {
    $this->repeatable = $repeatable;
  }
  /** @return bool */
  public function getRepeatable()
  {
    return $this->repeatable;
  }
  /** @param AttributeValueMetadata[] */
  public function setValueMetadata($valueMetadata)
  {
    $this->valueMetadata = $valueMetadata;
  }
  /** @return AttributeValueMetadata[] */
  public function getValueMetadata()
  {
    return $this->valueMetadata;
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

class AttributeValueMetadata extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var array */
  public $value;

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
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class Attributes extends \Google\Collection
{
  /** @var Attribute[] */
  public $attributes;
  /** @var string */
  public $name;
  protected $collection_key = 'attributes';
  protected $attributesType = Attribute::class;
  protected $attributesDataType = 'array';
  /** @param Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
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

class BatchGetCategoriesResponse extends \Google\Collection
{
  /** @var Category[] */
  public $categories;
  protected $collection_key = 'categories';
  protected $categoriesType = Category::class;
  protected $categoriesDataType = 'array';
  /** @param Category[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return Category[] */
  public function getCategories()
  {
    return $this->categories;
  }
}

class BusinessHours extends \Google\Collection
{
  /** @var TimePeriod[] */
  public $periods;
  protected $collection_key = 'periods';
  protected $periodsType = TimePeriod::class;
  protected $periodsDataType = 'array';
  /** @param TimePeriod[] */
  public function setPeriods($periods)
  {
    $this->periods = $periods;
  }
  /** @return TimePeriod[] */
  public function getPeriods()
  {
    return $this->periods;
  }
}

class Categories extends \Google\Collection
{
  /** @var Category[] */
  public $additionalCategories;
  /** @var Category */
  public $primaryCategory;
  protected $collection_key = 'additionalCategories';
  protected $additionalCategoriesType = Category::class;
  protected $additionalCategoriesDataType = 'array';
  protected $primaryCategoryType = Category::class;
  protected $primaryCategoryDataType = '';
  /** @param Category[] */
  public function setAdditionalCategories($additionalCategories)
  {
    $this->additionalCategories = $additionalCategories;
  }
  /** @return Category[] */
  public function getAdditionalCategories()
  {
    return $this->additionalCategories;
  }
  /** @param Category */
  public function setPrimaryCategory(Category $primaryCategory)
  {
    $this->primaryCategory = $primaryCategory;
  }
  /** @return Category */
  public function getPrimaryCategory()
  {
    return $this->primaryCategory;
  }
}

class Category extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var MoreHoursType[] */
  public $moreHoursTypes;
  /** @var string */
  public $name;
  /** @var ServiceType[] */
  public $serviceTypes;
  protected $collection_key = 'serviceTypes';
  protected $moreHoursTypesType = MoreHoursType::class;
  protected $moreHoursTypesDataType = 'array';
  protected $serviceTypesType = ServiceType::class;
  protected $serviceTypesDataType = 'array';
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
  /** @param MoreHoursType[] */
  public function setMoreHoursTypes($moreHoursTypes)
  {
    $this->moreHoursTypes = $moreHoursTypes;
  }
  /** @return MoreHoursType[] */
  public function getMoreHoursTypes()
  {
    return $this->moreHoursTypes;
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
  /** @param ServiceType[] */
  public function setServiceTypes($serviceTypes)
  {
    $this->serviceTypes = $serviceTypes;
  }
  /** @return ServiceType[] */
  public function getServiceTypes()
  {
    return $this->serviceTypes;
  }
}

class Chain extends \Google\Collection
{
  /** @var ChainName[] */
  public $chainNames;
  /** @var int */
  public $locationCount;
  /** @var string */
  public $name;
  /** @var ChainUri[] */
  public $websites;
  protected $collection_key = 'websites';
  protected $chainNamesType = ChainName::class;
  protected $chainNamesDataType = 'array';
  protected $websitesType = ChainUri::class;
  protected $websitesDataType = 'array';
  /** @param ChainName[] */
  public function setChainNames($chainNames)
  {
    $this->chainNames = $chainNames;
  }
  /** @return ChainName[] */
  public function getChainNames()
  {
    return $this->chainNames;
  }
  /** @param int */
  public function setLocationCount($locationCount)
  {
    $this->locationCount = $locationCount;
  }
  /** @return int */
  public function getLocationCount()
  {
    return $this->locationCount;
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
  /** @param ChainUri[] */
  public function setWebsites($websites)
  {
    $this->websites = $websites;
  }
  /** @return ChainUri[] */
  public function getWebsites()
  {
    return $this->websites;
  }
}

class ChainName extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class ChainUri extends \Google\Model
{
  /** @var string */
  public $uri;

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

class ClearLocationAssociationRequest extends \Google\Model
{
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class FreeFormServiceItem extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var Label */
  public $label;
  protected $labelType = Label::class;
  protected $labelDataType = '';
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
  /** @param Label */
  public function setLabel(Label $label)
  {
    $this->label = $label;
  }
  /** @return Label */
  public function getLabel()
  {
    return $this->label;
  }
}

class GoogleLocation extends \Google\Model
{
  /** @var Location */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $requestAdminRightsUri;
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
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
  /** @param string */
  public function setRequestAdminRightsUri($requestAdminRightsUri)
  {
    $this->requestAdminRightsUri = $requestAdminRightsUri;
  }
  /** @return string */
  public function getRequestAdminRightsUri()
  {
    return $this->requestAdminRightsUri;
  }
}

class GoogleUpdatedLocation extends \Google\Model
{
  /** @var string */
  public $diffMask;
  /** @var Location */
  public $location;
  /** @var string */
  public $pendingMask;
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param string */
  public function setDiffMask($diffMask)
  {
    $this->diffMask = $diffMask;
  }
  /** @return string */
  public function getDiffMask()
  {
    return $this->diffMask;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setPendingMask($pendingMask)
  {
    $this->pendingMask = $pendingMask;
  }
  /** @return string */
  public function getPendingMask()
  {
    return $this->pendingMask;
  }
}

class Label extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class LatLng extends \Google\Model
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

class ListAttributeMetadataResponse extends \Google\Collection
{
  /** @var AttributeMetadata[] */
  public $attributeMetadata;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'attributeMetadata';
  protected $attributeMetadataType = AttributeMetadata::class;
  protected $attributeMetadataDataType = 'array';
  /** @param AttributeMetadata[] */
  public function setAttributeMetadata($attributeMetadata)
  {
    $this->attributeMetadata = $attributeMetadata;
  }
  /** @return AttributeMetadata[] */
  public function getAttributeMetadata()
  {
    return $this->attributeMetadata;
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

class ListCategoriesResponse extends \Google\Collection
{
  /** @var Category[] */
  public $categories;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'categories';
  protected $categoriesType = Category::class;
  protected $categoriesDataType = 'array';
  /** @param Category[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return Category[] */
  public function getCategories()
  {
    return $this->categories;
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
  /** @var int */
  public $totalSize;
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

class Location extends \Google\Collection
{
  /** @var AdWordsLocationExtensions */
  public $adWordsLocationExtensions;
  /** @var Categories */
  public $categories;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $languageCode;
  /** @var LatLng */
  public $latlng;
  /** @var Metadata */
  public $metadata;
  /** @var MoreHours[] */
  public $moreHours;
  /** @var string */
  public $name;
  /** @var OpenInfo */
  public $openInfo;
  /** @var PhoneNumbers */
  public $phoneNumbers;
  /** @var Profile */
  public $profile;
  /** @var BusinessHours */
  public $regularHours;
  /** @var RelationshipData */
  public $relationshipData;
  /** @var ServiceAreaBusiness */
  public $serviceArea;
  /** @var ServiceItem[] */
  public $serviceItems;
  /** @var SpecialHours */
  public $specialHours;
  /** @var string */
  public $storeCode;
  /** @var PostalAddress */
  public $storefrontAddress;
  /** @var string */
  public $title;
  /** @var string */
  public $websiteUri;
  protected $collection_key = 'serviceItems';
  protected $adWordsLocationExtensionsType = AdWordsLocationExtensions::class;
  protected $adWordsLocationExtensionsDataType = '';
  protected $categoriesType = Categories::class;
  protected $categoriesDataType = '';
  protected $latlngType = LatLng::class;
  protected $latlngDataType = '';
  protected $metadataType = Metadata::class;
  protected $metadataDataType = '';
  protected $moreHoursType = MoreHours::class;
  protected $moreHoursDataType = 'array';
  protected $openInfoType = OpenInfo::class;
  protected $openInfoDataType = '';
  protected $phoneNumbersType = PhoneNumbers::class;
  protected $phoneNumbersDataType = '';
  protected $profileType = Profile::class;
  protected $profileDataType = '';
  protected $regularHoursType = BusinessHours::class;
  protected $regularHoursDataType = '';
  protected $relationshipDataType = RelationshipData::class;
  protected $relationshipDataDataType = '';
  protected $serviceAreaType = ServiceAreaBusiness::class;
  protected $serviceAreaDataType = '';
  protected $serviceItemsType = ServiceItem::class;
  protected $serviceItemsDataType = 'array';
  protected $specialHoursType = SpecialHours::class;
  protected $specialHoursDataType = '';
  protected $storefrontAddressType = PostalAddress::class;
  protected $storefrontAddressDataType = '';
  /** @param AdWordsLocationExtensions */
  public function setAdWordsLocationExtensions(AdWordsLocationExtensions $adWordsLocationExtensions)
  {
    $this->adWordsLocationExtensions = $adWordsLocationExtensions;
  }
  /** @return AdWordsLocationExtensions */
  public function getAdWordsLocationExtensions()
  {
    return $this->adWordsLocationExtensions;
  }
  /** @param Categories */
  public function setCategories(Categories $categories)
  {
    $this->categories = $categories;
  }
  /** @return Categories */
  public function getCategories()
  {
    return $this->categories;
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param LatLng */
  public function setLatlng(LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  /** @return LatLng */
  public function getLatlng()
  {
    return $this->latlng;
  }
  /** @param Metadata */
  public function setMetadata(Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param MoreHours[] */
  public function setMoreHours($moreHours)
  {
    $this->moreHours = $moreHours;
  }
  /** @return MoreHours[] */
  public function getMoreHours()
  {
    return $this->moreHours;
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
  /** @param OpenInfo */
  public function setOpenInfo(OpenInfo $openInfo)
  {
    $this->openInfo = $openInfo;
  }
  /** @return OpenInfo */
  public function getOpenInfo()
  {
    return $this->openInfo;
  }
  /** @param PhoneNumbers */
  public function setPhoneNumbers(PhoneNumbers $phoneNumbers)
  {
    $this->phoneNumbers = $phoneNumbers;
  }
  /** @return PhoneNumbers */
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
  /** @param Profile */
  public function setProfile(Profile $profile)
  {
    $this->profile = $profile;
  }
  /** @return Profile */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param BusinessHours */
  public function setRegularHours(BusinessHours $regularHours)
  {
    $this->regularHours = $regularHours;
  }
  /** @return BusinessHours */
  public function getRegularHours()
  {
    return $this->regularHours;
  }
  /** @param RelationshipData */
  public function setRelationshipData(RelationshipData $relationshipData)
  {
    $this->relationshipData = $relationshipData;
  }
  /** @return RelationshipData */
  public function getRelationshipData()
  {
    return $this->relationshipData;
  }
  /** @param ServiceAreaBusiness */
  public function setServiceArea(ServiceAreaBusiness $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  /** @return ServiceAreaBusiness */
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  /** @param ServiceItem[] */
  public function setServiceItems($serviceItems)
  {
    $this->serviceItems = $serviceItems;
  }
  /** @return ServiceItem[] */
  public function getServiceItems()
  {
    return $this->serviceItems;
  }
  /** @param SpecialHours */
  public function setSpecialHours(SpecialHours $specialHours)
  {
    $this->specialHours = $specialHours;
  }
  /** @return SpecialHours */
  public function getSpecialHours()
  {
    return $this->specialHours;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param PostalAddress */
  public function setStorefrontAddress(PostalAddress $storefrontAddress)
  {
    $this->storefrontAddress = $storefrontAddress;
  }
  /** @return PostalAddress */
  public function getStorefrontAddress()
  {
    return $this->storefrontAddress;
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
  public function setWebsiteUri($websiteUri)
  {
    $this->websiteUri = $websiteUri;
  }
  /** @return string */
  public function getWebsiteUri()
  {
    return $this->websiteUri;
  }
}

class Metadata extends \Google\Model
{
  /** @var bool */
  public $canDelete;
  /** @var bool */
  public $canHaveBusinessCalls;
  /** @var bool */
  public $canHaveFoodMenus;
  /** @var bool */
  public $canModifyServiceList;
  /** @var bool */
  public $canOperateHealthData;
  /** @var bool */
  public $canOperateLocalPost;
  /** @var bool */
  public $canOperateLodgingData;
  /** @var string */
  public $duplicateLocation;
  /** @var bool */
  public $hasGoogleUpdated;
  /** @var bool */
  public $hasPendingEdits;
  /** @var bool */
  public $hasVoiceOfMerchant;
  /** @var string */
  public $mapsUri;
  /** @var string */
  public $newReviewUri;
  /** @var string */
  public $placeId;

  /** @param bool */
  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  /** @return bool */
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  /** @param bool */
  public function setCanHaveBusinessCalls($canHaveBusinessCalls)
  {
    $this->canHaveBusinessCalls = $canHaveBusinessCalls;
  }
  /** @return bool */
  public function getCanHaveBusinessCalls()
  {
    return $this->canHaveBusinessCalls;
  }
  /** @param bool */
  public function setCanHaveFoodMenus($canHaveFoodMenus)
  {
    $this->canHaveFoodMenus = $canHaveFoodMenus;
  }
  /** @return bool */
  public function getCanHaveFoodMenus()
  {
    return $this->canHaveFoodMenus;
  }
  /** @param bool */
  public function setCanModifyServiceList($canModifyServiceList)
  {
    $this->canModifyServiceList = $canModifyServiceList;
  }
  /** @return bool */
  public function getCanModifyServiceList()
  {
    return $this->canModifyServiceList;
  }
  /** @param bool */
  public function setCanOperateHealthData($canOperateHealthData)
  {
    $this->canOperateHealthData = $canOperateHealthData;
  }
  /** @return bool */
  public function getCanOperateHealthData()
  {
    return $this->canOperateHealthData;
  }
  /** @param bool */
  public function setCanOperateLocalPost($canOperateLocalPost)
  {
    $this->canOperateLocalPost = $canOperateLocalPost;
  }
  /** @return bool */
  public function getCanOperateLocalPost()
  {
    return $this->canOperateLocalPost;
  }
  /** @param bool */
  public function setCanOperateLodgingData($canOperateLodgingData)
  {
    $this->canOperateLodgingData = $canOperateLodgingData;
  }
  /** @return bool */
  public function getCanOperateLodgingData()
  {
    return $this->canOperateLodgingData;
  }
  /** @param string */
  public function setDuplicateLocation($duplicateLocation)
  {
    $this->duplicateLocation = $duplicateLocation;
  }
  /** @return string */
  public function getDuplicateLocation()
  {
    return $this->duplicateLocation;
  }
  /** @param bool */
  public function setHasGoogleUpdated($hasGoogleUpdated)
  {
    $this->hasGoogleUpdated = $hasGoogleUpdated;
  }
  /** @return bool */
  public function getHasGoogleUpdated()
  {
    return $this->hasGoogleUpdated;
  }
  /** @param bool */
  public function setHasPendingEdits($hasPendingEdits)
  {
    $this->hasPendingEdits = $hasPendingEdits;
  }
  /** @return bool */
  public function getHasPendingEdits()
  {
    return $this->hasPendingEdits;
  }
  /** @param bool */
  public function setHasVoiceOfMerchant($hasVoiceOfMerchant)
  {
    $this->hasVoiceOfMerchant = $hasVoiceOfMerchant;
  }
  /** @return bool */
  public function getHasVoiceOfMerchant()
  {
    return $this->hasVoiceOfMerchant;
  }
  /** @param string */
  public function setMapsUri($mapsUri)
  {
    $this->mapsUri = $mapsUri;
  }
  /** @return string */
  public function getMapsUri()
  {
    return $this->mapsUri;
  }
  /** @param string */
  public function setNewReviewUri($newReviewUri)
  {
    $this->newReviewUri = $newReviewUri;
  }
  /** @return string */
  public function getNewReviewUri()
  {
    return $this->newReviewUri;
  }
  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
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

class MoreHours extends \Google\Collection
{
  /** @var string */
  public $hoursTypeId;
  /** @var TimePeriod[] */
  public $periods;
  protected $collection_key = 'periods';
  protected $periodsType = TimePeriod::class;
  protected $periodsDataType = 'array';
  /** @param string */
  public function setHoursTypeId($hoursTypeId)
  {
    $this->hoursTypeId = $hoursTypeId;
  }
  /** @return string */
  public function getHoursTypeId()
  {
    return $this->hoursTypeId;
  }
  /** @param TimePeriod[] */
  public function setPeriods($periods)
  {
    $this->periods = $periods;
  }
  /** @return TimePeriod[] */
  public function getPeriods()
  {
    return $this->periods;
  }
}

class MoreHoursType extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $hoursTypeId;
  /** @var string */
  public $localizedDisplayName;

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
  public function setHoursTypeId($hoursTypeId)
  {
    $this->hoursTypeId = $hoursTypeId;
  }
  /** @return string */
  public function getHoursTypeId()
  {
    return $this->hoursTypeId;
  }
  /** @param string */
  public function setLocalizedDisplayName($localizedDisplayName)
  {
    $this->localizedDisplayName = $localizedDisplayName;
  }
  /** @return string */
  public function getLocalizedDisplayName()
  {
    return $this->localizedDisplayName;
  }
}

class MybusinessbusinessinformationEmpty extends \Google\Model
{
}

class OpenInfo extends \Google\Model
{
  /** @var bool */
  public $canReopen;
  /** @var Date */
  public $openingDate;
  /** @var string */
  public $status;
  protected $openingDateType = Date::class;
  protected $openingDateDataType = '';
  /** @param bool */
  public function setCanReopen($canReopen)
  {
    $this->canReopen = $canReopen;
  }
  /** @return bool */
  public function getCanReopen()
  {
    return $this->canReopen;
  }
  /** @param Date */
  public function setOpeningDate(Date $openingDate)
  {
    $this->openingDate = $openingDate;
  }
  /** @return Date */
  public function getOpeningDate()
  {
    return $this->openingDate;
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

class PhoneNumbers extends \Google\Collection
{
  /** @var string[] */
  public $additionalPhones;
  /** @var string */
  public $primaryPhone;
  protected $collection_key = 'additionalPhones';
  /** @param string[] */
  public function setAdditionalPhones($additionalPhones)
  {
    $this->additionalPhones = $additionalPhones;
  }
  /** @return string[] */
  public function getAdditionalPhones()
  {
    return $this->additionalPhones;
  }
  /** @param string */
  public function setPrimaryPhone($primaryPhone)
  {
    $this->primaryPhone = $primaryPhone;
  }
  /** @return string */
  public function getPrimaryPhone()
  {
    return $this->primaryPhone;
  }
}

class PlaceInfo extends \Google\Model
{
  /** @var string */
  public $placeId;
  /** @var string */
  public $placeName;

  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /** @param string */
  public function setPlaceName($placeName)
  {
    $this->placeName = $placeName;
  }
  /** @return string */
  public function getPlaceName()
  {
    return $this->placeName;
  }
}

class Places extends \Google\Collection
{
  /** @var PlaceInfo[] */
  public $placeInfos;
  protected $collection_key = 'placeInfos';
  protected $placeInfosType = PlaceInfo::class;
  protected $placeInfosDataType = 'array';
  /** @param PlaceInfo[] */
  public function setPlaceInfos($placeInfos)
  {
    $this->placeInfos = $placeInfos;
  }
  /** @return PlaceInfo[] */
  public function getPlaceInfos()
  {
    return $this->placeInfos;
  }
}

class PostalAddress extends \Google\Collection
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
  public $organization;
  /** @var string */
  public $postalCode;
  /** @var string[] */
  public $recipients;
  /** @var string */
  public $regionCode;
  /** @var int */
  public $revision;
  /** @var string */
  public $sortingCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'recipients';
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
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
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
  /** @param string[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return string[] */
  public function getRecipients()
  {
    return $this->recipients;
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
  /** @param int */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return int */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  /** @return string */
  public function getSortingCode()
  {
    return $this->sortingCode;
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

class Profile extends \Google\Model
{
  /** @var string */
  public $description;

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
}

class RelationshipData extends \Google\Collection
{
  /** @var RelevantLocation[] */
  public $childrenLocations;
  /** @var string */
  public $parentChain;
  /** @var RelevantLocation */
  public $parentLocation;
  protected $collection_key = 'childrenLocations';
  protected $childrenLocationsType = RelevantLocation::class;
  protected $childrenLocationsDataType = 'array';
  protected $parentLocationType = RelevantLocation::class;
  protected $parentLocationDataType = '';
  /** @param RelevantLocation[] */
  public function setChildrenLocations($childrenLocations)
  {
    $this->childrenLocations = $childrenLocations;
  }
  /** @return RelevantLocation[] */
  public function getChildrenLocations()
  {
    return $this->childrenLocations;
  }
  /** @param string */
  public function setParentChain($parentChain)
  {
    $this->parentChain = $parentChain;
  }
  /** @return string */
  public function getParentChain()
  {
    return $this->parentChain;
  }
  /** @param RelevantLocation */
  public function setParentLocation(RelevantLocation $parentLocation)
  {
    $this->parentLocation = $parentLocation;
  }
  /** @return RelevantLocation */
  public function getParentLocation()
  {
    return $this->parentLocation;
  }
}

class RelevantLocation extends \Google\Model
{
  /** @var string */
  public $placeId;
  /** @var string */
  public $relationType;

  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /** @param string */
  public function setRelationType($relationType)
  {
    $this->relationType = $relationType;
  }
  /** @return string */
  public function getRelationType()
  {
    return $this->relationType;
  }
}

class RepeatedEnumAttributeValue extends \Google\Collection
{
  /** @var string[] */
  public $setValues;
  /** @var string[] */
  public $unsetValues;
  protected $collection_key = 'unsetValues';
  /** @param string[] */
  public function setSetValues($setValues)
  {
    $this->setValues = $setValues;
  }
  /** @return string[] */
  public function getSetValues()
  {
    return $this->setValues;
  }
  /** @param string[] */
  public function setUnsetValues($unsetValues)
  {
    $this->unsetValues = $unsetValues;
  }
  /** @return string[] */
  public function getUnsetValues()
  {
    return $this->unsetValues;
  }
}

class SearchChainsResponse extends \Google\Collection
{
  /** @var Chain[] */
  public $chains;
  protected $collection_key = 'chains';
  protected $chainsType = Chain::class;
  protected $chainsDataType = 'array';
  /** @param Chain[] */
  public function setChains($chains)
  {
    $this->chains = $chains;
  }
  /** @return Chain[] */
  public function getChains()
  {
    return $this->chains;
  }
}

class SearchGoogleLocationsRequest extends \Google\Model
{
  /** @var Location */
  public $location;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $query;
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
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

class SearchGoogleLocationsResponse extends \Google\Collection
{
  /** @var GoogleLocation[] */
  public $googleLocations;
  protected $collection_key = 'googleLocations';
  protected $googleLocationsType = GoogleLocation::class;
  protected $googleLocationsDataType = 'array';
  /** @param GoogleLocation[] */
  public function setGoogleLocations($googleLocations)
  {
    $this->googleLocations = $googleLocations;
  }
  /** @return GoogleLocation[] */
  public function getGoogleLocations()
  {
    return $this->googleLocations;
  }
}

class ServiceAreaBusiness extends \Google\Model
{
  /** @var string */
  public $businessType;
  /** @var Places */
  public $places;
  /** @var string */
  public $regionCode;
  protected $placesType = Places::class;
  protected $placesDataType = '';
  /** @param string */
  public function setBusinessType($businessType)
  {
    $this->businessType = $businessType;
  }
  /** @return string */
  public function getBusinessType()
  {
    return $this->businessType;
  }
  /** @param Places */
  public function setPlaces(Places $places)
  {
    $this->places = $places;
  }
  /** @return Places */
  public function getPlaces()
  {
    return $this->places;
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
}

class ServiceItem extends \Google\Model
{
  /** @var FreeFormServiceItem */
  public $freeFormServiceItem;
  /** @var Money */
  public $price;
  /** @var StructuredServiceItem */
  public $structuredServiceItem;
  protected $freeFormServiceItemType = FreeFormServiceItem::class;
  protected $freeFormServiceItemDataType = '';
  protected $priceType = Money::class;
  protected $priceDataType = '';
  protected $structuredServiceItemType = StructuredServiceItem::class;
  protected $structuredServiceItemDataType = '';
  /** @param FreeFormServiceItem */
  public function setFreeFormServiceItem(FreeFormServiceItem $freeFormServiceItem)
  {
    $this->freeFormServiceItem = $freeFormServiceItem;
  }
  /** @return FreeFormServiceItem */
  public function getFreeFormServiceItem()
  {
    return $this->freeFormServiceItem;
  }
  /** @param Money */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /** @return Money */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param StructuredServiceItem */
  public function setStructuredServiceItem(StructuredServiceItem $structuredServiceItem)
  {
    $this->structuredServiceItem = $structuredServiceItem;
  }
  /** @return StructuredServiceItem */
  public function getStructuredServiceItem()
  {
    return $this->structuredServiceItem;
  }
}

class ServiceType extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $serviceTypeId;

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
  public function setServiceTypeId($serviceTypeId)
  {
    $this->serviceTypeId = $serviceTypeId;
  }
  /** @return string */
  public function getServiceTypeId()
  {
    return $this->serviceTypeId;
  }
}

class SpecialHourPeriod extends \Google\Model
{
  /** @var TimeOfDay */
  public $closeTime;
  /** @var bool */
  public $closed;
  /** @var Date */
  public $endDate;
  /** @var TimeOfDay */
  public $openTime;
  /** @var Date */
  public $startDate;
  protected $closeTimeType = TimeOfDay::class;
  protected $closeTimeDataType = '';
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $openTimeType = TimeOfDay::class;
  protected $openTimeDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  /** @param TimeOfDay */
  public function setCloseTime(TimeOfDay $closeTime)
  {
    $this->closeTime = $closeTime;
  }
  /** @return TimeOfDay */
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  /** @param bool */
  public function setClosed($closed)
  {
    $this->closed = $closed;
  }
  /** @return bool */
  public function getClosed()
  {
    return $this->closed;
  }
  /** @param Date */
  public function setEndDate(Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return Date */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param TimeOfDay */
  public function setOpenTime(TimeOfDay $openTime)
  {
    $this->openTime = $openTime;
  }
  /** @return TimeOfDay */
  public function getOpenTime()
  {
    return $this->openTime;
  }
  /** @param Date */
  public function setStartDate(Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return Date */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class SpecialHours extends \Google\Collection
{
  /** @var SpecialHourPeriod[] */
  public $specialHourPeriods;
  protected $collection_key = 'specialHourPeriods';
  protected $specialHourPeriodsType = SpecialHourPeriod::class;
  protected $specialHourPeriodsDataType = 'array';
  /** @param SpecialHourPeriod[] */
  public function setSpecialHourPeriods($specialHourPeriods)
  {
    $this->specialHourPeriods = $specialHourPeriods;
  }
  /** @return SpecialHourPeriod[] */
  public function getSpecialHourPeriods()
  {
    return $this->specialHourPeriods;
  }
}

class StructuredServiceItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $serviceTypeId;

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
  public function setServiceTypeId($serviceTypeId)
  {
    $this->serviceTypeId = $serviceTypeId;
  }
  /** @return string */
  public function getServiceTypeId()
  {
    return $this->serviceTypeId;
  }
}

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
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
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class TimePeriod extends \Google\Model
{
  /** @var string */
  public $closeDay;
  /** @var TimeOfDay */
  public $closeTime;
  /** @var string */
  public $openDay;
  /** @var TimeOfDay */
  public $openTime;
  protected $closeTimeType = TimeOfDay::class;
  protected $closeTimeDataType = '';
  protected $openTimeType = TimeOfDay::class;
  protected $openTimeDataType = '';
  /** @param string */
  public function setCloseDay($closeDay)
  {
    $this->closeDay = $closeDay;
  }
  /** @return string */
  public function getCloseDay()
  {
    return $this->closeDay;
  }
  /** @param TimeOfDay */
  public function setCloseTime(TimeOfDay $closeTime)
  {
    $this->closeTime = $closeTime;
  }
  /** @return TimeOfDay */
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  /** @param string */
  public function setOpenDay($openDay)
  {
    $this->openDay = $openDay;
  }
  /** @return string */
  public function getOpenDay()
  {
    return $this->openDay;
  }
  /** @param TimeOfDay */
  public function setOpenTime(TimeOfDay $openTime)
  {
    $this->openTime = $openTime;
  }
  /** @return TimeOfDay */
  public function getOpenTime()
  {
    return $this->openTime;
  }
}

class UriAttributeValue extends \Google\Model
{
  /** @var string */
  public $uri;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdWordsLocationExtensions::class, 'Google_Service_MyBusinessBusinessInformation_AdWordsLocationExtensions');
class_alias(AssociateLocationRequest::class, 'Google_Service_MyBusinessBusinessInformation_AssociateLocationRequest');
class_alias(Attribute::class, 'Google_Service_MyBusinessBusinessInformation_Attribute');
class_alias(AttributeMetadata::class, 'Google_Service_MyBusinessBusinessInformation_AttributeMetadata');
class_alias(AttributeValueMetadata::class, 'Google_Service_MyBusinessBusinessInformation_AttributeValueMetadata');
class_alias(Attributes::class, 'Google_Service_MyBusinessBusinessInformation_Attributes');
class_alias(BatchGetCategoriesResponse::class, 'Google_Service_MyBusinessBusinessInformation_BatchGetCategoriesResponse');
class_alias(BusinessHours::class, 'Google_Service_MyBusinessBusinessInformation_BusinessHours');
class_alias(Categories::class, 'Google_Service_MyBusinessBusinessInformation_Categories');
class_alias(Category::class, 'Google_Service_MyBusinessBusinessInformation_Category');
class_alias(Chain::class, 'Google_Service_MyBusinessBusinessInformation_Chain');
class_alias(ChainName::class, 'Google_Service_MyBusinessBusinessInformation_ChainName');
class_alias(ChainUri::class, 'Google_Service_MyBusinessBusinessInformation_ChainUri');
class_alias(ClearLocationAssociationRequest::class, 'Google_Service_MyBusinessBusinessInformation_ClearLocationAssociationRequest');
class_alias(Date::class, 'Google_Service_MyBusinessBusinessInformation_Date');
class_alias(FreeFormServiceItem::class, 'Google_Service_MyBusinessBusinessInformation_FreeFormServiceItem');
class_alias(GoogleLocation::class, 'Google_Service_MyBusinessBusinessInformation_GoogleLocation');
class_alias(GoogleUpdatedLocation::class, 'Google_Service_MyBusinessBusinessInformation_GoogleUpdatedLocation');
class_alias(Label::class, 'Google_Service_MyBusinessBusinessInformation_Label');
class_alias(LatLng::class, 'Google_Service_MyBusinessBusinessInformation_LatLng');
class_alias(ListAttributeMetadataResponse::class, 'Google_Service_MyBusinessBusinessInformation_ListAttributeMetadataResponse');
class_alias(ListCategoriesResponse::class, 'Google_Service_MyBusinessBusinessInformation_ListCategoriesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_MyBusinessBusinessInformation_ListLocationsResponse');
class_alias(Location::class, 'Google_Service_MyBusinessBusinessInformation_Location');
class_alias(Metadata::class, 'Google_Service_MyBusinessBusinessInformation_Metadata');
class_alias(Money::class, 'Google_Service_MyBusinessBusinessInformation_Money');
class_alias(MoreHours::class, 'Google_Service_MyBusinessBusinessInformation_MoreHours');
class_alias(MoreHoursType::class, 'Google_Service_MyBusinessBusinessInformation_MoreHoursType');
class_alias(MybusinessbusinessinformationEmpty::class, 'Google_Service_MyBusinessBusinessInformation_MybusinessbusinessinformationEmpty');
class_alias(OpenInfo::class, 'Google_Service_MyBusinessBusinessInformation_OpenInfo');
class_alias(PhoneNumbers::class, 'Google_Service_MyBusinessBusinessInformation_PhoneNumbers');
class_alias(PlaceInfo::class, 'Google_Service_MyBusinessBusinessInformation_PlaceInfo');
class_alias(Places::class, 'Google_Service_MyBusinessBusinessInformation_Places');
class_alias(PostalAddress::class, 'Google_Service_MyBusinessBusinessInformation_PostalAddress');
class_alias(Profile::class, 'Google_Service_MyBusinessBusinessInformation_Profile');
class_alias(RelationshipData::class, 'Google_Service_MyBusinessBusinessInformation_RelationshipData');
class_alias(RelevantLocation::class, 'Google_Service_MyBusinessBusinessInformation_RelevantLocation');
class_alias(RepeatedEnumAttributeValue::class, 'Google_Service_MyBusinessBusinessInformation_RepeatedEnumAttributeValue');
class_alias(SearchChainsResponse::class, 'Google_Service_MyBusinessBusinessInformation_SearchChainsResponse');
class_alias(SearchGoogleLocationsRequest::class, 'Google_Service_MyBusinessBusinessInformation_SearchGoogleLocationsRequest');
class_alias(SearchGoogleLocationsResponse::class, 'Google_Service_MyBusinessBusinessInformation_SearchGoogleLocationsResponse');
class_alias(ServiceAreaBusiness::class, 'Google_Service_MyBusinessBusinessInformation_ServiceAreaBusiness');
class_alias(ServiceItem::class, 'Google_Service_MyBusinessBusinessInformation_ServiceItem');
class_alias(ServiceType::class, 'Google_Service_MyBusinessBusinessInformation_ServiceType');
class_alias(SpecialHourPeriod::class, 'Google_Service_MyBusinessBusinessInformation_SpecialHourPeriod');
class_alias(SpecialHours::class, 'Google_Service_MyBusinessBusinessInformation_SpecialHours');
class_alias(StructuredServiceItem::class, 'Google_Service_MyBusinessBusinessInformation_StructuredServiceItem');
class_alias(TimeOfDay::class, 'Google_Service_MyBusinessBusinessInformation_TimeOfDay');
class_alias(TimePeriod::class, 'Google_Service_MyBusinessBusinessInformation_TimePeriod');
class_alias(UriAttributeValue::class, 'Google_Service_MyBusinessBusinessInformation_UriAttributeValue');
