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

namespace Google\Service\Analytics;

class Account extends \Google\Model
{
  /** @var AccountChildLink */
  public $childLink;
  /** @var string */
  public $created;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var AccountPermissions */
  public $permissions;
  /** @var string */
  public $selfLink;
  /** @var bool */
  public $starred;
  /** @var string */
  public $updated;
  protected $childLinkType = AccountChildLink::class;
  protected $childLinkDataType = '';
  protected $permissionsType = AccountPermissions::class;
  protected $permissionsDataType = '';
  /** @param AccountChildLink */
  public function setChildLink(AccountChildLink $childLink)
  {
    $this->childLink = $childLink;
  }
  /** @return AccountChildLink */
  public function getChildLink()
  {
    return $this->childLink;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  /** @param AccountPermissions */
  public function setPermissions(AccountPermissions $permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return AccountPermissions */
  public function getPermissions()
  {
    return $this->permissions;
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
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class AccountChildLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class AccountPermissions extends \Google\Collection
{
  /** @var string[] */
  public $effective;
  protected $collection_key = 'effective';
  /** @param string[] */
  public function setEffective($effective)
  {
    $this->effective = $effective;
  }
  /** @return string[] */
  public function getEffective()
  {
    return $this->effective;
  }
}

class AccountRef extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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
}

class AccountSummaries extends \Google\Collection
{
  /** @var AccountSummary[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = AccountSummary::class;
  protected $itemsDataType = 'array';
  /** @param AccountSummary[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AccountSummary[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class AccountSummary extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var bool */
  public $starred;
  /** @var WebPropertySummary[] */
  public $webProperties;
  protected $collection_key = 'webProperties';
  protected $webPropertiesType = WebPropertySummary::class;
  protected $webPropertiesDataType = 'array';
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
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param WebPropertySummary[] */
  public function setWebProperties($webProperties)
  {
    $this->webProperties = $webProperties;
  }
  /** @return WebPropertySummary[] */
  public function getWebProperties()
  {
    return $this->webProperties;
  }
}

class AccountTicket extends \Google\Model
{
  /** @var Account */
  public $account;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var Profile */
  public $profile;
  /** @var string */
  public $redirectUri;
  /** @var Webproperty */
  public $webproperty;
  protected $accountType = Account::class;
  protected $accountDataType = '';
  protected $profileType = Profile::class;
  protected $profileDataType = '';
  protected $webpropertyType = Webproperty::class;
  protected $webpropertyDataType = '';
  /** @param Account */
  public function setAccount(Account $account)
  {
    $this->account = $account;
  }
  /** @return Account */
  public function getAccount()
  {
    return $this->account;
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
  /** @param string */
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  /** @return string */
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
  /** @param Webproperty */
  public function setWebproperty(Webproperty $webproperty)
  {
    $this->webproperty = $webproperty;
  }
  /** @return Webproperty */
  public function getWebproperty()
  {
    return $this->webproperty;
  }
}

class AccountTreeRequest extends \Google\Model
{
  /** @var string */
  public $accountName;
  /** @var string */
  public $kind;
  /** @var string */
  public $profileName;
  /** @var string */
  public $timezone;
  /** @var string */
  public $webpropertyName;
  /** @var string */
  public $websiteUrl;

  /** @param string */
  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  /** @return string */
  public function getAccountName()
  {
    return $this->accountName;
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
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /** @param string */
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }
  /** @return string */
  public function getTimezone()
  {
    return $this->timezone;
  }
  /** @param string */
  public function setWebpropertyName($webpropertyName)
  {
    $this->webpropertyName = $webpropertyName;
  }
  /** @return string */
  public function getWebpropertyName()
  {
    return $this->webpropertyName;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class AccountTreeResponse extends \Google\Model
{
  /** @var Account */
  public $account;
  /** @var string */
  public $kind;
  /** @var Profile */
  public $profile;
  /** @var Webproperty */
  public $webproperty;
  protected $accountType = Account::class;
  protected $accountDataType = '';
  protected $profileType = Profile::class;
  protected $profileDataType = '';
  protected $webpropertyType = Webproperty::class;
  protected $webpropertyDataType = '';
  /** @param Account */
  public function setAccount(Account $account)
  {
    $this->account = $account;
  }
  /** @return Account */
  public function getAccount()
  {
    return $this->account;
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
  /** @param Webproperty */
  public function setWebproperty(Webproperty $webproperty)
  {
    $this->webproperty = $webproperty;
  }
  /** @return Webproperty */
  public function getWebproperty()
  {
    return $this->webproperty;
  }
}

class Accounts extends \Google\Collection
{
  /** @var Account[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Account::class;
  protected $itemsDataType = 'array';
  /** @param Account[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Account[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class AdWordsAccount extends \Google\Model
{
  /** @var bool */
  public $autoTaggingEnabled;
  /** @var string */
  public $customerId;
  /** @var string */
  public $kind;

  /** @param bool */
  public function setAutoTaggingEnabled($autoTaggingEnabled)
  {
    $this->autoTaggingEnabled = $autoTaggingEnabled;
  }
  /** @return bool */
  public function getAutoTaggingEnabled()
  {
    return $this->autoTaggingEnabled;
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

class AnalyticsDataimportDeleteUploadDataRequest extends \Google\Collection
{
  /** @var string[] */
  public $customDataImportUids;
  protected $collection_key = 'customDataImportUids';
  /** @param string[] */
  public function setCustomDataImportUids($customDataImportUids)
  {
    $this->customDataImportUids = $customDataImportUids;
  }
  /** @return string[] */
  public function getCustomDataImportUids()
  {
    return $this->customDataImportUids;
  }
}

class Column extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
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
}

class Columns extends \Google\Collection
{
  /** @var string[] */
  public $attributeNames;
  /** @var string */
  public $etag;
  /** @var Column[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var int */
  public $totalResults;
  protected $collection_key = 'items';
  protected $itemsType = Column::class;
  protected $itemsDataType = 'array';
  /** @param string[] */
  public function setAttributeNames($attributeNames)
  {
    $this->attributeNames = $attributeNames;
  }
  /** @return string[] */
  public function getAttributeNames()
  {
    return $this->attributeNames;
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
  /** @param Column[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Column[] */
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
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class CustomDataSource extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var CustomDataSourceChildLink */
  public $childLink;
  /** @var string */
  public $created;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $importBehavior;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var CustomDataSourceParentLink */
  public $parentLink;
  /** @var string[] */
  public $profilesLinked;
  /** @var string[] */
  public $schema;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;
  /** @var string */
  public $uploadType;
  /** @var string */
  public $webPropertyId;
  protected $collection_key = 'schema';
  protected $childLinkType = CustomDataSourceChildLink::class;
  protected $childLinkDataType = '';
  protected $parentLinkType = CustomDataSourceParentLink::class;
  protected $parentLinkDataType = '';
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
  /** @param CustomDataSourceChildLink */
  public function setChildLink(CustomDataSourceChildLink $childLink)
  {
    $this->childLink = $childLink;
  }
  /** @return CustomDataSourceChildLink */
  public function getChildLink()
  {
    return $this->childLink;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  public function setImportBehavior($importBehavior)
  {
    $this->importBehavior = $importBehavior;
  }
  /** @return string */
  public function getImportBehavior()
  {
    return $this->importBehavior;
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
  /** @param CustomDataSourceParentLink */
  public function setParentLink(CustomDataSourceParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return CustomDataSourceParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param string[] */
  public function setProfilesLinked($profilesLinked)
  {
    $this->profilesLinked = $profilesLinked;
  }
  /** @return string[] */
  public function getProfilesLinked()
  {
    return $this->profilesLinked;
  }
  /** @param string[] */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /** @return string[] */
  public function getSchema()
  {
    return $this->schema;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setUploadType($uploadType)
  {
    $this->uploadType = $uploadType;
  }
  /** @return string */
  public function getUploadType()
  {
    return $this->uploadType;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class CustomDataSourceChildLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class CustomDataSourceParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class CustomDataSources extends \Google\Collection
{
  /** @var CustomDataSource[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = CustomDataSource::class;
  protected $itemsDataType = 'array';
  /** @param CustomDataSource[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CustomDataSource[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class CustomDimension extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $created;
  /** @var string */
  public $id;
  /** @var int */
  public $index;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var CustomDimensionParentLink */
  public $parentLink;
  /** @var string */
  public $scope;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $webPropertyId;
  protected $parentLinkType = CustomDimensionParentLink::class;
  protected $parentLinkDataType = '';
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
  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  /** @param CustomDimensionParentLink */
  public function setParentLink(CustomDimensionParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return CustomDimensionParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class CustomDimensionParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class CustomDimensions extends \Google\Collection
{
  /** @var CustomDimension[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = CustomDimension::class;
  protected $itemsDataType = 'array';
  /** @param CustomDimension[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CustomDimension[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class CustomMetric extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $created;
  /** @var string */
  public $id;
  /** @var int */
  public $index;
  /** @var string */
  public $kind;
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;
  /** @var string */
  public $name;
  /** @var CustomMetricParentLink */
  public $parentLink;
  /** @var string */
  public $scope;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;
  /** @var string */
  public $webPropertyId;
  protected $internal_gapi_mappings = [
        "maxValue" => "max_value",
        "minValue" => "min_value",
  ];
  protected $parentLinkType = CustomMetricParentLink::class;
  protected $parentLinkDataType = '';
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
  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
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
  /** @param CustomMetricParentLink */
  public function setParentLink(CustomMetricParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return CustomMetricParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class CustomMetricParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class CustomMetrics extends \Google\Collection
{
  /** @var CustomMetric[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = CustomMetric::class;
  protected $itemsDataType = 'array';
  /** @param CustomMetric[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CustomMetric[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class EntityAdWordsLink extends \Google\Collection
{
  /** @var AdWordsAccount[] */
  public $adWordsAccounts;
  /** @var EntityAdWordsLinkEntity */
  public $entity;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string[] */
  public $profileIds;
  /** @var string */
  public $selfLink;
  protected $collection_key = 'profileIds';
  protected $adWordsAccountsType = AdWordsAccount::class;
  protected $adWordsAccountsDataType = 'array';
  protected $entityType = EntityAdWordsLinkEntity::class;
  protected $entityDataType = '';
  /** @param AdWordsAccount[] */
  public function setAdWordsAccounts($adWordsAccounts)
  {
    $this->adWordsAccounts = $adWordsAccounts;
  }
  /** @return AdWordsAccount[] */
  public function getAdWordsAccounts()
  {
    return $this->adWordsAccounts;
  }
  /** @param EntityAdWordsLinkEntity */
  public function setEntity(EntityAdWordsLinkEntity $entity)
  {
    $this->entity = $entity;
  }
  /** @return EntityAdWordsLinkEntity */
  public function getEntity()
  {
    return $this->entity;
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
  public function setProfileIds($profileIds)
  {
    $this->profileIds = $profileIds;
  }
  /** @return string[] */
  public function getProfileIds()
  {
    return $this->profileIds;
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
}

class EntityAdWordsLinkEntity extends \Google\Model
{
  /** @var WebPropertyRef */
  public $webPropertyRef;
  protected $webPropertyRefType = WebPropertyRef::class;
  protected $webPropertyRefDataType = '';
  /** @param WebPropertyRef */
  public function setWebPropertyRef(WebPropertyRef $webPropertyRef)
  {
    $this->webPropertyRef = $webPropertyRef;
  }
  /** @return WebPropertyRef */
  public function getWebPropertyRef()
  {
    return $this->webPropertyRef;
  }
}

class EntityAdWordsLinks extends \Google\Collection
{
  /** @var EntityAdWordsLink[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  protected $collection_key = 'items';
  protected $itemsType = EntityAdWordsLink::class;
  protected $itemsDataType = 'array';
  /** @param EntityAdWordsLink[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return EntityAdWordsLink[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class EntityUserLink extends \Google\Model
{
  /** @var EntityUserLinkEntity */
  public $entity;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var EntityUserLinkPermissions */
  public $permissions;
  /** @var string */
  public $selfLink;
  /** @var UserRef */
  public $userRef;
  protected $entityType = EntityUserLinkEntity::class;
  protected $entityDataType = '';
  protected $permissionsType = EntityUserLinkPermissions::class;
  protected $permissionsDataType = '';
  protected $userRefType = UserRef::class;
  protected $userRefDataType = '';
  /** @param EntityUserLinkEntity */
  public function setEntity(EntityUserLinkEntity $entity)
  {
    $this->entity = $entity;
  }
  /** @return EntityUserLinkEntity */
  public function getEntity()
  {
    return $this->entity;
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
  /** @param EntityUserLinkPermissions */
  public function setPermissions(EntityUserLinkPermissions $permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return EntityUserLinkPermissions */
  public function getPermissions()
  {
    return $this->permissions;
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
  /** @param UserRef */
  public function setUserRef(UserRef $userRef)
  {
    $this->userRef = $userRef;
  }
  /** @return UserRef */
  public function getUserRef()
  {
    return $this->userRef;
  }
}

class EntityUserLinkEntity extends \Google\Model
{
  /** @var AccountRef */
  public $accountRef;
  /** @var ProfileRef */
  public $profileRef;
  /** @var WebPropertyRef */
  public $webPropertyRef;
  protected $accountRefType = AccountRef::class;
  protected $accountRefDataType = '';
  protected $profileRefType = ProfileRef::class;
  protected $profileRefDataType = '';
  protected $webPropertyRefType = WebPropertyRef::class;
  protected $webPropertyRefDataType = '';
  /** @param AccountRef */
  public function setAccountRef(AccountRef $accountRef)
  {
    $this->accountRef = $accountRef;
  }
  /** @return AccountRef */
  public function getAccountRef()
  {
    return $this->accountRef;
  }
  /** @param ProfileRef */
  public function setProfileRef(ProfileRef $profileRef)
  {
    $this->profileRef = $profileRef;
  }
  /** @return ProfileRef */
  public function getProfileRef()
  {
    return $this->profileRef;
  }
  /** @param WebPropertyRef */
  public function setWebPropertyRef(WebPropertyRef $webPropertyRef)
  {
    $this->webPropertyRef = $webPropertyRef;
  }
  /** @return WebPropertyRef */
  public function getWebPropertyRef()
  {
    return $this->webPropertyRef;
  }
}

class EntityUserLinkPermissions extends \Google\Collection
{
  /** @var string[] */
  public $effective;
  /** @var string[] */
  public $local;
  protected $collection_key = 'local';
  /** @param string[] */
  public function setEffective($effective)
  {
    $this->effective = $effective;
  }
  /** @return string[] */
  public function getEffective()
  {
    return $this->effective;
  }
  /** @param string[] */
  public function setLocal($local)
  {
    $this->local = $local;
  }
  /** @return string[] */
  public function getLocal()
  {
    return $this->local;
  }
}

class EntityUserLinks extends \Google\Collection
{
  /** @var EntityUserLink[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  protected $collection_key = 'items';
  protected $itemsType = EntityUserLink::class;
  protected $itemsDataType = 'array';
  /** @param EntityUserLink[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return EntityUserLink[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class Experiment extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $created;
  /** @var string */
  public $description;
  /** @var bool */
  public $editableInGaUi;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $equalWeighting;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var int */
  public $minimumExperimentLengthInDays;
  /** @var string */
  public $name;
  /** @var string */
  public $objectiveMetric;
  /** @var string */
  public $optimizationType;
  /** @var ExperimentParentLink */
  public $parentLink;
  /** @var string */
  public $profileId;
  /** @var string */
  public $reasonExperimentEnded;
  /** @var bool */
  public $rewriteVariationUrlsAsOriginal;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $servingFramework;
  /** @var string */
  public $snippet;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  public $trafficCoverage;
  /** @var string */
  public $updated;
  /** @var ExperimentVariations[] */
  public $variations;
  /** @var string */
  public $webPropertyId;
  public $winnerConfidenceLevel;
  /** @var bool */
  public $winnerFound;
  protected $collection_key = 'variations';
  protected $parentLinkType = ExperimentParentLink::class;
  protected $parentLinkDataType = '';
  protected $variationsType = ExperimentVariations::class;
  protected $variationsDataType = 'array';
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
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  public function setEditableInGaUi($editableInGaUi)
  {
    $this->editableInGaUi = $editableInGaUi;
  }
  /** @return bool */
  public function getEditableInGaUi()
  {
    return $this->editableInGaUi;
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
  public function setEqualWeighting($equalWeighting)
  {
    $this->equalWeighting = $equalWeighting;
  }
  /** @return bool */
  public function getEqualWeighting()
  {
    return $this->equalWeighting;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  /** @param int */
  public function setMinimumExperimentLengthInDays($minimumExperimentLengthInDays)
  {
    $this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
  }
  /** @return int */
  public function getMinimumExperimentLengthInDays()
  {
    return $this->minimumExperimentLengthInDays;
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
  public function setObjectiveMetric($objectiveMetric)
  {
    $this->objectiveMetric = $objectiveMetric;
  }
  /** @return string */
  public function getObjectiveMetric()
  {
    return $this->objectiveMetric;
  }
  /** @param string */
  public function setOptimizationType($optimizationType)
  {
    $this->optimizationType = $optimizationType;
  }
  /** @return string */
  public function getOptimizationType()
  {
    return $this->optimizationType;
  }
  /** @param ExperimentParentLink */
  public function setParentLink(ExperimentParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return ExperimentParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setReasonExperimentEnded($reasonExperimentEnded)
  {
    $this->reasonExperimentEnded = $reasonExperimentEnded;
  }
  /** @return string */
  public function getReasonExperimentEnded()
  {
    return $this->reasonExperimentEnded;
  }
  /** @param bool */
  public function setRewriteVariationUrlsAsOriginal($rewriteVariationUrlsAsOriginal)
  {
    $this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
  }
  /** @return bool */
  public function getRewriteVariationUrlsAsOriginal()
  {
    return $this->rewriteVariationUrlsAsOriginal;
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
  public function setServingFramework($servingFramework)
  {
    $this->servingFramework = $servingFramework;
  }
  /** @return string */
  public function getServingFramework()
  {
    return $this->servingFramework;
  }
  /** @param string */
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return string */
  public function getSnippet()
  {
    return $this->snippet;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  public function setTrafficCoverage($trafficCoverage)
  {
    $this->trafficCoverage = $trafficCoverage;
  }
  public function getTrafficCoverage()
  {
    return $this->trafficCoverage;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param ExperimentVariations[] */
  public function setVariations($variations)
  {
    $this->variations = $variations;
  }
  /** @return ExperimentVariations[] */
  public function getVariations()
  {
    return $this->variations;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
  public function setWinnerConfidenceLevel($winnerConfidenceLevel)
  {
    $this->winnerConfidenceLevel = $winnerConfidenceLevel;
  }
  public function getWinnerConfidenceLevel()
  {
    return $this->winnerConfidenceLevel;
  }
  /** @param bool */
  public function setWinnerFound($winnerFound)
  {
    $this->winnerFound = $winnerFound;
  }
  /** @return bool */
  public function getWinnerFound()
  {
    return $this->winnerFound;
  }
}

class ExperimentParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class ExperimentVariations extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  /** @var string */
  public $url;
  public $weight;
  /** @var bool */
  public $won;

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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  public function getWeight()
  {
    return $this->weight;
  }
  /** @param bool */
  public function setWon($won)
  {
    $this->won = $won;
  }
  /** @return bool */
  public function getWon()
  {
    return $this->won;
  }
}

class Experiments extends \Google\Collection
{
  /** @var Experiment[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Experiment::class;
  protected $itemsDataType = 'array';
  /** @param Experiment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Experiment[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class Filter extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var FilterAdvancedDetails */
  public $advancedDetails;
  /** @var string */
  public $created;
  /** @var FilterExpression */
  public $excludeDetails;
  /** @var string */
  public $id;
  /** @var FilterExpression */
  public $includeDetails;
  /** @var string */
  public $kind;
  /** @var FilterLowercaseDetails */
  public $lowercaseDetails;
  /** @var string */
  public $name;
  /** @var FilterParentLink */
  public $parentLink;
  /** @var FilterSearchAndReplaceDetails */
  public $searchAndReplaceDetails;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;
  /** @var FilterUppercaseDetails */
  public $uppercaseDetails;
  protected $advancedDetailsType = FilterAdvancedDetails::class;
  protected $advancedDetailsDataType = '';
  protected $excludeDetailsType = FilterExpression::class;
  protected $excludeDetailsDataType = '';
  protected $includeDetailsType = FilterExpression::class;
  protected $includeDetailsDataType = '';
  protected $lowercaseDetailsType = FilterLowercaseDetails::class;
  protected $lowercaseDetailsDataType = '';
  protected $parentLinkType = FilterParentLink::class;
  protected $parentLinkDataType = '';
  protected $searchAndReplaceDetailsType = FilterSearchAndReplaceDetails::class;
  protected $searchAndReplaceDetailsDataType = '';
  protected $uppercaseDetailsType = FilterUppercaseDetails::class;
  protected $uppercaseDetailsDataType = '';
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
  /** @param FilterAdvancedDetails */
  public function setAdvancedDetails(FilterAdvancedDetails $advancedDetails)
  {
    $this->advancedDetails = $advancedDetails;
  }
  /** @return FilterAdvancedDetails */
  public function getAdvancedDetails()
  {
    return $this->advancedDetails;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param FilterExpression */
  public function setExcludeDetails(FilterExpression $excludeDetails)
  {
    $this->excludeDetails = $excludeDetails;
  }
  /** @return FilterExpression */
  public function getExcludeDetails()
  {
    return $this->excludeDetails;
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
  /** @param FilterExpression */
  public function setIncludeDetails(FilterExpression $includeDetails)
  {
    $this->includeDetails = $includeDetails;
  }
  /** @return FilterExpression */
  public function getIncludeDetails()
  {
    return $this->includeDetails;
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
  /** @param FilterLowercaseDetails */
  public function setLowercaseDetails(FilterLowercaseDetails $lowercaseDetails)
  {
    $this->lowercaseDetails = $lowercaseDetails;
  }
  /** @return FilterLowercaseDetails */
  public function getLowercaseDetails()
  {
    return $this->lowercaseDetails;
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
  /** @param FilterParentLink */
  public function setParentLink(FilterParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return FilterParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param FilterSearchAndReplaceDetails */
  public function setSearchAndReplaceDetails(FilterSearchAndReplaceDetails $searchAndReplaceDetails)
  {
    $this->searchAndReplaceDetails = $searchAndReplaceDetails;
  }
  /** @return FilterSearchAndReplaceDetails */
  public function getSearchAndReplaceDetails()
  {
    return $this->searchAndReplaceDetails;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param FilterUppercaseDetails */
  public function setUppercaseDetails(FilterUppercaseDetails $uppercaseDetails)
  {
    $this->uppercaseDetails = $uppercaseDetails;
  }
  /** @return FilterUppercaseDetails */
  public function getUppercaseDetails()
  {
    return $this->uppercaseDetails;
  }
}

class FilterAdvancedDetails extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $extractA;
  /** @var string */
  public $extractB;
  /** @var string */
  public $fieldA;
  /** @var int */
  public $fieldAIndex;
  /** @var bool */
  public $fieldARequired;
  /** @var string */
  public $fieldB;
  /** @var int */
  public $fieldBIndex;
  /** @var bool */
  public $fieldBRequired;
  /** @var string */
  public $outputConstructor;
  /** @var string */
  public $outputToField;
  /** @var int */
  public $outputToFieldIndex;
  /** @var bool */
  public $overrideOutputField;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param string */
  public function setExtractA($extractA)
  {
    $this->extractA = $extractA;
  }
  /** @return string */
  public function getExtractA()
  {
    return $this->extractA;
  }
  /** @param string */
  public function setExtractB($extractB)
  {
    $this->extractB = $extractB;
  }
  /** @return string */
  public function getExtractB()
  {
    return $this->extractB;
  }
  /** @param string */
  public function setFieldA($fieldA)
  {
    $this->fieldA = $fieldA;
  }
  /** @return string */
  public function getFieldA()
  {
    return $this->fieldA;
  }
  /** @param int */
  public function setFieldAIndex($fieldAIndex)
  {
    $this->fieldAIndex = $fieldAIndex;
  }
  /** @return int */
  public function getFieldAIndex()
  {
    return $this->fieldAIndex;
  }
  /** @param bool */
  public function setFieldARequired($fieldARequired)
  {
    $this->fieldARequired = $fieldARequired;
  }
  /** @return bool */
  public function getFieldARequired()
  {
    return $this->fieldARequired;
  }
  /** @param string */
  public function setFieldB($fieldB)
  {
    $this->fieldB = $fieldB;
  }
  /** @return string */
  public function getFieldB()
  {
    return $this->fieldB;
  }
  /** @param int */
  public function setFieldBIndex($fieldBIndex)
  {
    $this->fieldBIndex = $fieldBIndex;
  }
  /** @return int */
  public function getFieldBIndex()
  {
    return $this->fieldBIndex;
  }
  /** @param bool */
  public function setFieldBRequired($fieldBRequired)
  {
    $this->fieldBRequired = $fieldBRequired;
  }
  /** @return bool */
  public function getFieldBRequired()
  {
    return $this->fieldBRequired;
  }
  /** @param string */
  public function setOutputConstructor($outputConstructor)
  {
    $this->outputConstructor = $outputConstructor;
  }
  /** @return string */
  public function getOutputConstructor()
  {
    return $this->outputConstructor;
  }
  /** @param string */
  public function setOutputToField($outputToField)
  {
    $this->outputToField = $outputToField;
  }
  /** @return string */
  public function getOutputToField()
  {
    return $this->outputToField;
  }
  /** @param int */
  public function setOutputToFieldIndex($outputToFieldIndex)
  {
    $this->outputToFieldIndex = $outputToFieldIndex;
  }
  /** @return int */
  public function getOutputToFieldIndex()
  {
    return $this->outputToFieldIndex;
  }
  /** @param bool */
  public function setOverrideOutputField($overrideOutputField)
  {
    $this->overrideOutputField = $overrideOutputField;
  }
  /** @return bool */
  public function getOverrideOutputField()
  {
    return $this->overrideOutputField;
  }
}

class FilterExpression extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $expressionValue;
  /** @var string */
  public $field;
  /** @var int */
  public $fieldIndex;
  /** @var string */
  public $kind;
  /** @var string */
  public $matchType;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param string */
  public function setExpressionValue($expressionValue)
  {
    $this->expressionValue = $expressionValue;
  }
  /** @return string */
  public function getExpressionValue()
  {
    return $this->expressionValue;
  }
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param int */
  public function setFieldIndex($fieldIndex)
  {
    $this->fieldIndex = $fieldIndex;
  }
  /** @return int */
  public function getFieldIndex()
  {
    return $this->fieldIndex;
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
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
  }
}

class FilterLowercaseDetails extends \Google\Model
{
  /** @var string */
  public $field;
  /** @var int */
  public $fieldIndex;

  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param int */
  public function setFieldIndex($fieldIndex)
  {
    $this->fieldIndex = $fieldIndex;
  }
  /** @return int */
  public function getFieldIndex()
  {
    return $this->fieldIndex;
  }
}

class FilterParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class FilterRef extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $href;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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
}

class FilterSearchAndReplaceDetails extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $field;
  /** @var int */
  public $fieldIndex;
  /** @var string */
  public $replaceString;
  /** @var string */
  public $searchString;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param int */
  public function setFieldIndex($fieldIndex)
  {
    $this->fieldIndex = $fieldIndex;
  }
  /** @return int */
  public function getFieldIndex()
  {
    return $this->fieldIndex;
  }
  /** @param string */
  public function setReplaceString($replaceString)
  {
    $this->replaceString = $replaceString;
  }
  /** @return string */
  public function getReplaceString()
  {
    return $this->replaceString;
  }
  /** @param string */
  public function setSearchString($searchString)
  {
    $this->searchString = $searchString;
  }
  /** @return string */
  public function getSearchString()
  {
    return $this->searchString;
  }
}

class FilterUppercaseDetails extends \Google\Model
{
  /** @var string */
  public $field;
  /** @var int */
  public $fieldIndex;

  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param int */
  public function setFieldIndex($fieldIndex)
  {
    $this->fieldIndex = $fieldIndex;
  }
  /** @return int */
  public function getFieldIndex()
  {
    return $this->fieldIndex;
  }
}

class Filters extends \Google\Collection
{
  /** @var Filter[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Filter::class;
  protected $itemsDataType = 'array';
  /** @param Filter[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Filter[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class GaData extends \Google\Collection
{
  /** @var GaDataColumnHeaders[] */
  public $columnHeaders;
  /** @var bool */
  public $containsSampledData;
  /** @var string */
  public $dataLastRefreshed;
  /** @var GaDataDataTable */
  public $dataTable;
  /** @var string */
  public $id;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var GaDataProfileInfo */
  public $profileInfo;
  /** @var GaDataQuery */
  public $query;
  /** @var string[] */
  public $rows;
  /** @var string */
  public $sampleSize;
  /** @var string */
  public $sampleSpace;
  /** @var string */
  public $selfLink;
  /** @var int */
  public $totalResults;
  /** @var string[] */
  public $totalsForAllResults;
  protected $collection_key = 'rows';
  protected $columnHeadersType = GaDataColumnHeaders::class;
  protected $columnHeadersDataType = 'array';
  protected $dataTableType = GaDataDataTable::class;
  protected $dataTableDataType = '';
  protected $profileInfoType = GaDataProfileInfo::class;
  protected $profileInfoDataType = '';
  protected $queryType = GaDataQuery::class;
  protected $queryDataType = '';
  /** @param GaDataColumnHeaders[] */
  public function setColumnHeaders($columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /** @return GaDataColumnHeaders[] */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  /** @param bool */
  public function setContainsSampledData($containsSampledData)
  {
    $this->containsSampledData = $containsSampledData;
  }
  /** @return bool */
  public function getContainsSampledData()
  {
    return $this->containsSampledData;
  }
  /** @param string */
  public function setDataLastRefreshed($dataLastRefreshed)
  {
    $this->dataLastRefreshed = $dataLastRefreshed;
  }
  /** @return string */
  public function getDataLastRefreshed()
  {
    return $this->dataLastRefreshed;
  }
  /** @param GaDataDataTable */
  public function setDataTable(GaDataDataTable $dataTable)
  {
    $this->dataTable = $dataTable;
  }
  /** @return GaDataDataTable */
  public function getDataTable()
  {
    return $this->dataTable;
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
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param GaDataProfileInfo */
  public function setProfileInfo(GaDataProfileInfo $profileInfo)
  {
    $this->profileInfo = $profileInfo;
  }
  /** @return GaDataProfileInfo */
  public function getProfileInfo()
  {
    return $this->profileInfo;
  }
  /** @param GaDataQuery */
  public function setQuery(GaDataQuery $query)
  {
    $this->query = $query;
  }
  /** @return GaDataQuery */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return string[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setSampleSize($sampleSize)
  {
    $this->sampleSize = $sampleSize;
  }
  /** @return string */
  public function getSampleSize()
  {
    return $this->sampleSize;
  }
  /** @param string */
  public function setSampleSpace($sampleSpace)
  {
    $this->sampleSpace = $sampleSpace;
  }
  /** @return string */
  public function getSampleSpace()
  {
    return $this->sampleSpace;
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
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
  /** @param string[] */
  public function setTotalsForAllResults($totalsForAllResults)
  {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  /** @return string[] */
  public function getTotalsForAllResults()
  {
    return $this->totalsForAllResults;
  }
}

class GaDataColumnHeaders extends \Google\Model
{
  /** @var string */
  public $columnType;
  /** @var string */
  public $dataType;
  /** @var string */
  public $name;

  /** @param string */
  public function setColumnType($columnType)
  {
    $this->columnType = $columnType;
  }
  /** @return string */
  public function getColumnType()
  {
    return $this->columnType;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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

class GaDataDataTable extends \Google\Collection
{
  /** @var GaDataDataTableCols[] */
  public $cols;
  /** @var GaDataDataTableRows[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $colsType = GaDataDataTableCols::class;
  protected $colsDataType = 'array';
  protected $rowsType = GaDataDataTableRows::class;
  protected $rowsDataType = 'array';
  /** @param GaDataDataTableCols[] */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }
  /** @return GaDataDataTableCols[] */
  public function getCols()
  {
    return $this->cols;
  }
  /** @param GaDataDataTableRows[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GaDataDataTableRows[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GaDataDataTableCols extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $label;
  /** @var string */
  public $type;

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
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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

class GaDataDataTableRows extends \Google\Collection
{
  /** @var GaDataDataTableRowsC[] */
  public $c;
  protected $collection_key = 'c';
  protected $cType = GaDataDataTableRowsC::class;
  protected $cDataType = 'array';
  /** @param GaDataDataTableRowsC[] */
  public function setC($c)
  {
    $this->c = $c;
  }
  /** @return GaDataDataTableRowsC[] */
  public function getC()
  {
    return $this->c;
  }
}

class GaDataDataTableRowsC extends \Google\Model
{
  /** @var string */
  public $v;

  /** @param string */
  public function setV($v)
  {
    $this->v = $v;
  }
  /** @return string */
  public function getV()
  {
    return $this->v;
  }
}

class GaDataProfileInfo extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $profileId;
  /** @var string */
  public $profileName;
  /** @var string */
  public $tableId;
  /** @var string */
  public $webPropertyId;

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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /** @param string */
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class GaDataQuery extends \Google\Collection
{
  /** @var string */
  public $dimensions;
  /** @var string */
  public $endDate;
  /** @var string */
  public $filters;
  /** @var string */
  public $ids;
  /** @var int */
  public $maxResults;
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $samplingLevel;
  /** @var string */
  public $segment;
  /** @var string[] */
  public $sort;
  /** @var string */
  public $startDate;
  /** @var int */
  public $startIndex;
  protected $collection_key = 'sort';
  protected $internal_gapi_mappings = [
        "endDate" => "end-date",
        "maxResults" => "max-results",
        "startDate" => "start-date",
        "startIndex" => "start-index",
  ];
  /** @param string */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return string */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string */
  public function getIds()
  {
    return $this->ids;
  }
  /** @param int */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return int */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setSamplingLevel($samplingLevel)
  {
    $this->samplingLevel = $samplingLevel;
  }
  /** @return string */
  public function getSamplingLevel()
  {
    return $this->samplingLevel;
  }
  /** @param string */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return string */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string[] */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string[] */
  public function getSort()
  {
    return $this->sort;
  }
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class Goal extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $created;
  /** @var GoalEventDetails */
  public $eventDetails;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var GoalParentLink */
  public $parentLink;
  /** @var string */
  public $profileId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;
  /** @var GoalUrlDestinationDetails */
  public $urlDestinationDetails;
  /** @var float */
  public $value;
  /** @var GoalVisitNumPagesDetails */
  public $visitNumPagesDetails;
  /** @var GoalVisitTimeOnSiteDetails */
  public $visitTimeOnSiteDetails;
  /** @var string */
  public $webPropertyId;
  protected $eventDetailsType = GoalEventDetails::class;
  protected $eventDetailsDataType = '';
  protected $parentLinkType = GoalParentLink::class;
  protected $parentLinkDataType = '';
  protected $urlDestinationDetailsType = GoalUrlDestinationDetails::class;
  protected $urlDestinationDetailsDataType = '';
  protected $visitNumPagesDetailsType = GoalVisitNumPagesDetails::class;
  protected $visitNumPagesDetailsDataType = '';
  protected $visitTimeOnSiteDetailsType = GoalVisitTimeOnSiteDetails::class;
  protected $visitTimeOnSiteDetailsDataType = '';
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
  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param GoalEventDetails */
  public function setEventDetails(GoalEventDetails $eventDetails)
  {
    $this->eventDetails = $eventDetails;
  }
  /** @return GoalEventDetails */
  public function getEventDetails()
  {
    return $this->eventDetails;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  /** @param GoalParentLink */
  public function setParentLink(GoalParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return GoalParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param GoalUrlDestinationDetails */
  public function setUrlDestinationDetails(GoalUrlDestinationDetails $urlDestinationDetails)
  {
    $this->urlDestinationDetails = $urlDestinationDetails;
  }
  /** @return GoalUrlDestinationDetails */
  public function getUrlDestinationDetails()
  {
    return $this->urlDestinationDetails;
  }
  /** @param float */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return float */
  public function getValue()
  {
    return $this->value;
  }
  /** @param GoalVisitNumPagesDetails */
  public function setVisitNumPagesDetails(GoalVisitNumPagesDetails $visitNumPagesDetails)
  {
    $this->visitNumPagesDetails = $visitNumPagesDetails;
  }
  /** @return GoalVisitNumPagesDetails */
  public function getVisitNumPagesDetails()
  {
    return $this->visitNumPagesDetails;
  }
  /** @param GoalVisitTimeOnSiteDetails */
  public function setVisitTimeOnSiteDetails(GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails)
  {
    $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
  }
  /** @return GoalVisitTimeOnSiteDetails */
  public function getVisitTimeOnSiteDetails()
  {
    return $this->visitTimeOnSiteDetails;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class GoalEventDetails extends \Google\Collection
{
  /** @var GoalEventDetailsEventConditions[] */
  public $eventConditions;
  /** @var bool */
  public $useEventValue;
  protected $collection_key = 'eventConditions';
  protected $eventConditionsType = GoalEventDetailsEventConditions::class;
  protected $eventConditionsDataType = 'array';
  /** @param GoalEventDetailsEventConditions[] */
  public function setEventConditions($eventConditions)
  {
    $this->eventConditions = $eventConditions;
  }
  /** @return GoalEventDetailsEventConditions[] */
  public function getEventConditions()
  {
    return $this->eventConditions;
  }
  /** @param bool */
  public function setUseEventValue($useEventValue)
  {
    $this->useEventValue = $useEventValue;
  }
  /** @return bool */
  public function getUseEventValue()
  {
    return $this->useEventValue;
  }
}

class GoalEventDetailsEventConditions extends \Google\Model
{
  /** @var string */
  public $comparisonType;
  /** @var string */
  public $comparisonValue;
  /** @var string */
  public $expression;
  /** @var string */
  public $matchType;
  /** @var string */
  public $type;

  /** @param string */
  public function setComparisonType($comparisonType)
  {
    $this->comparisonType = $comparisonType;
  }
  /** @return string */
  public function getComparisonType()
  {
    return $this->comparisonType;
  }
  /** @param string */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /** @return string */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
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
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
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

class GoalParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class GoalUrlDestinationDetails extends \Google\Collection
{
  /** @var bool */
  public $caseSensitive;
  /** @var bool */
  public $firstStepRequired;
  /** @var string */
  public $matchType;
  /** @var GoalUrlDestinationDetailsSteps[] */
  public $steps;
  /** @var string */
  public $url;
  protected $collection_key = 'steps';
  protected $stepsType = GoalUrlDestinationDetailsSteps::class;
  protected $stepsDataType = 'array';
  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param bool */
  public function setFirstStepRequired($firstStepRequired)
  {
    $this->firstStepRequired = $firstStepRequired;
  }
  /** @return bool */
  public function getFirstStepRequired()
  {
    return $this->firstStepRequired;
  }
  /** @param string */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
  }
  /** @param GoalUrlDestinationDetailsSteps[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return GoalUrlDestinationDetailsSteps[] */
  public function getSteps()
  {
    return $this->steps;
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

class GoalUrlDestinationDetailsSteps extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var int */
  public $number;
  /** @var string */
  public $url;

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

class GoalVisitNumPagesDetails extends \Google\Model
{
  /** @var string */
  public $comparisonType;
  /** @var string */
  public $comparisonValue;

  /** @param string */
  public function setComparisonType($comparisonType)
  {
    $this->comparisonType = $comparisonType;
  }
  /** @return string */
  public function getComparisonType()
  {
    return $this->comparisonType;
  }
  /** @param string */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /** @return string */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
}

class GoalVisitTimeOnSiteDetails extends \Google\Model
{
  /** @var string */
  public $comparisonType;
  /** @var string */
  public $comparisonValue;

  /** @param string */
  public function setComparisonType($comparisonType)
  {
    $this->comparisonType = $comparisonType;
  }
  /** @return string */
  public function getComparisonType()
  {
    return $this->comparisonType;
  }
  /** @param string */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /** @return string */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
}

class Goals extends \Google\Collection
{
  /** @var Goal[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Goal::class;
  protected $itemsDataType = 'array';
  /** @param Goal[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Goal[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class HashClientIdRequest extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $kind;
  /** @var string */
  public $webPropertyId;

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
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class HashClientIdResponse extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $hashedClientId;
  /** @var string */
  public $kind;
  /** @var string */
  public $webPropertyId;

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
  public function setHashedClientId($hashedClientId)
  {
    $this->hashedClientId = $hashedClientId;
  }
  /** @return string */
  public function getHashedClientId()
  {
    return $this->hashedClientId;
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
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class IncludeConditions extends \Google\Model
{
  /** @var int */
  public $daysToLookBack;
  /** @var bool */
  public $isSmartList;
  /** @var string */
  public $kind;
  /** @var int */
  public $membershipDurationDays;
  /** @var string */
  public $segment;

  /** @param int */
  public function setDaysToLookBack($daysToLookBack)
  {
    $this->daysToLookBack = $daysToLookBack;
  }
  /** @return int */
  public function getDaysToLookBack()
  {
    return $this->daysToLookBack;
  }
  /** @param bool */
  public function setIsSmartList($isSmartList)
  {
    $this->isSmartList = $isSmartList;
  }
  /** @return bool */
  public function getIsSmartList()
  {
    return $this->isSmartList;
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
  /** @param int */
  public function setMembershipDurationDays($membershipDurationDays)
  {
    $this->membershipDurationDays = $membershipDurationDays;
  }
  /** @return int */
  public function getMembershipDurationDays()
  {
    return $this->membershipDurationDays;
  }
  /** @param string */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return string */
  public function getSegment()
  {
    return $this->segment;
  }
}

class LinkedForeignAccount extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $eligibleForSearch;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $linkedAccountId;
  /** @var string */
  public $remarketingAudienceId;
  /** @var string */
  public $status;
  /** @var string */
  public $type;
  /** @var string */
  public $webPropertyId;

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
  /** @param bool */
  public function setEligibleForSearch($eligibleForSearch)
  {
    $this->eligibleForSearch = $eligibleForSearch;
  }
  /** @return bool */
  public function getEligibleForSearch()
  {
    return $this->eligibleForSearch;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  public function setLinkedAccountId($linkedAccountId)
  {
    $this->linkedAccountId = $linkedAccountId;
  }
  /** @return string */
  public function getLinkedAccountId()
  {
    return $this->linkedAccountId;
  }
  /** @param string */
  public function setRemarketingAudienceId($remarketingAudienceId)
  {
    $this->remarketingAudienceId = $remarketingAudienceId;
  }
  /** @return string */
  public function getRemarketingAudienceId()
  {
    return $this->remarketingAudienceId;
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
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class McfData extends \Google\Collection
{
  /** @var McfDataColumnHeaders[] */
  public $columnHeaders;
  /** @var bool */
  public $containsSampledData;
  /** @var string */
  public $id;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var McfDataProfileInfo */
  public $profileInfo;
  /** @var McfDataQuery */
  public $query;
  /** @var McfDataRows[] */
  public $rows;
  /** @var string */
  public $sampleSize;
  /** @var string */
  public $sampleSpace;
  /** @var string */
  public $selfLink;
  /** @var int */
  public $totalResults;
  /** @var string[] */
  public $totalsForAllResults;
  protected $collection_key = 'rows';
  protected $columnHeadersType = McfDataColumnHeaders::class;
  protected $columnHeadersDataType = 'array';
  protected $profileInfoType = McfDataProfileInfo::class;
  protected $profileInfoDataType = '';
  protected $queryType = McfDataQuery::class;
  protected $queryDataType = '';
  protected $rowsType = McfDataRows::class;
  protected $rowsDataType = 'array';
  /** @param McfDataColumnHeaders[] */
  public function setColumnHeaders($columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /** @return McfDataColumnHeaders[] */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  /** @param bool */
  public function setContainsSampledData($containsSampledData)
  {
    $this->containsSampledData = $containsSampledData;
  }
  /** @return bool */
  public function getContainsSampledData()
  {
    return $this->containsSampledData;
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
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param McfDataProfileInfo */
  public function setProfileInfo(McfDataProfileInfo $profileInfo)
  {
    $this->profileInfo = $profileInfo;
  }
  /** @return McfDataProfileInfo */
  public function getProfileInfo()
  {
    return $this->profileInfo;
  }
  /** @param McfDataQuery */
  public function setQuery(McfDataQuery $query)
  {
    $this->query = $query;
  }
  /** @return McfDataQuery */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param McfDataRows[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return McfDataRows[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setSampleSize($sampleSize)
  {
    $this->sampleSize = $sampleSize;
  }
  /** @return string */
  public function getSampleSize()
  {
    return $this->sampleSize;
  }
  /** @param string */
  public function setSampleSpace($sampleSpace)
  {
    $this->sampleSpace = $sampleSpace;
  }
  /** @return string */
  public function getSampleSpace()
  {
    return $this->sampleSpace;
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
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
  /** @param string[] */
  public function setTotalsForAllResults($totalsForAllResults)
  {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  /** @return string[] */
  public function getTotalsForAllResults()
  {
    return $this->totalsForAllResults;
  }
}

class McfDataColumnHeaders extends \Google\Model
{
  /** @var string */
  public $columnType;
  /** @var string */
  public $dataType;
  /** @var string */
  public $name;

  /** @param string */
  public function setColumnType($columnType)
  {
    $this->columnType = $columnType;
  }
  /** @return string */
  public function getColumnType()
  {
    return $this->columnType;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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

class McfDataProfileInfo extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $profileId;
  /** @var string */
  public $profileName;
  /** @var string */
  public $tableId;
  /** @var string */
  public $webPropertyId;

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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /** @param string */
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class McfDataQuery extends \Google\Collection
{
  /** @var string */
  public $dimensions;
  /** @var string */
  public $endDate;
  /** @var string */
  public $filters;
  /** @var string */
  public $ids;
  /** @var int */
  public $maxResults;
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $samplingLevel;
  /** @var string */
  public $segment;
  /** @var string[] */
  public $sort;
  /** @var string */
  public $startDate;
  /** @var int */
  public $startIndex;
  protected $collection_key = 'sort';
  protected $internal_gapi_mappings = [
        "endDate" => "end-date",
        "maxResults" => "max-results",
        "startDate" => "start-date",
        "startIndex" => "start-index",
  ];
  /** @param string */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return string */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string */
  public function getIds()
  {
    return $this->ids;
  }
  /** @param int */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return int */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setSamplingLevel($samplingLevel)
  {
    $this->samplingLevel = $samplingLevel;
  }
  /** @return string */
  public function getSamplingLevel()
  {
    return $this->samplingLevel;
  }
  /** @param string */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return string */
  public function getSegment()
  {
    return $this->segment;
  }
  /** @param string[] */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string[] */
  public function getSort()
  {
    return $this->sort;
  }
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class McfDataRows extends \Google\Collection
{
  /** @var McfDataRowsConversionPathValue[] */
  public $conversionPathValue;
  /** @var string */
  public $primitiveValue;
  protected $collection_key = 'conversionPathValue';
  protected $conversionPathValueType = McfDataRowsConversionPathValue::class;
  protected $conversionPathValueDataType = 'array';
  /** @param McfDataRowsConversionPathValue[] */
  public function setConversionPathValue($conversionPathValue)
  {
    $this->conversionPathValue = $conversionPathValue;
  }
  /** @return McfDataRowsConversionPathValue[] */
  public function getConversionPathValue()
  {
    return $this->conversionPathValue;
  }
  /** @param string */
  public function setPrimitiveValue($primitiveValue)
  {
    $this->primitiveValue = $primitiveValue;
  }
  /** @return string */
  public function getPrimitiveValue()
  {
    return $this->primitiveValue;
  }
}

class McfDataRowsConversionPathValue extends \Google\Model
{
  /** @var string */
  public $interactionType;
  /** @var string */
  public $nodeValue;

  /** @param string */
  public function setInteractionType($interactionType)
  {
    $this->interactionType = $interactionType;
  }
  /** @return string */
  public function getInteractionType()
  {
    return $this->interactionType;
  }
  /** @param string */
  public function setNodeValue($nodeValue)
  {
    $this->nodeValue = $nodeValue;
  }
  /** @return string */
  public function getNodeValue()
  {
    return $this->nodeValue;
  }
}

class Profile extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $botFilteringEnabled;
  /** @var ProfileChildLink */
  public $childLink;
  /** @var string */
  public $created;
  /** @var string */
  public $currency;
  /** @var string */
  public $defaultPage;
  /** @var bool */
  public $eCommerceTracking;
  /** @var bool */
  public $enhancedECommerceTracking;
  /** @var string */
  public $excludeQueryParameters;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var ProfileParentLink */
  public $parentLink;
  /** @var ProfilePermissions */
  public $permissions;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $siteSearchCategoryParameters;
  /** @var string */
  public $siteSearchQueryParameters;
  /** @var bool */
  public $starred;
  /** @var bool */
  public $stripSiteSearchCategoryParameters;
  /** @var bool */
  public $stripSiteSearchQueryParameters;
  /** @var string */
  public $timezone;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;
  /** @var string */
  public $webPropertyId;
  /** @var string */
  public $websiteUrl;
  protected $childLinkType = ProfileChildLink::class;
  protected $childLinkDataType = '';
  protected $parentLinkType = ProfileParentLink::class;
  protected $parentLinkDataType = '';
  protected $permissionsType = ProfilePermissions::class;
  protected $permissionsDataType = '';
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
  /** @param bool */
  public function setBotFilteringEnabled($botFilteringEnabled)
  {
    $this->botFilteringEnabled = $botFilteringEnabled;
  }
  /** @return bool */
  public function getBotFilteringEnabled()
  {
    return $this->botFilteringEnabled;
  }
  /** @param ProfileChildLink */
  public function setChildLink(ProfileChildLink $childLink)
  {
    $this->childLink = $childLink;
  }
  /** @return ProfileChildLink */
  public function getChildLink()
  {
    return $this->childLink;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
  }
  /** @param string */
  public function setDefaultPage($defaultPage)
  {
    $this->defaultPage = $defaultPage;
  }
  /** @return string */
  public function getDefaultPage()
  {
    return $this->defaultPage;
  }
  /** @param bool */
  public function setECommerceTracking($eCommerceTracking)
  {
    $this->eCommerceTracking = $eCommerceTracking;
  }
  /** @return bool */
  public function getECommerceTracking()
  {
    return $this->eCommerceTracking;
  }
  /** @param bool */
  public function setEnhancedECommerceTracking($enhancedECommerceTracking)
  {
    $this->enhancedECommerceTracking = $enhancedECommerceTracking;
  }
  /** @return bool */
  public function getEnhancedECommerceTracking()
  {
    return $this->enhancedECommerceTracking;
  }
  /** @param string */
  public function setExcludeQueryParameters($excludeQueryParameters)
  {
    $this->excludeQueryParameters = $excludeQueryParameters;
  }
  /** @return string */
  public function getExcludeQueryParameters()
  {
    return $this->excludeQueryParameters;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  /** @param ProfileParentLink */
  public function setParentLink(ProfileParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return ProfileParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param ProfilePermissions */
  public function setPermissions(ProfilePermissions $permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return ProfilePermissions */
  public function getPermissions()
  {
    return $this->permissions;
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
  public function setSiteSearchCategoryParameters($siteSearchCategoryParameters)
  {
    $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
  }
  /** @return string */
  public function getSiteSearchCategoryParameters()
  {
    return $this->siteSearchCategoryParameters;
  }
  /** @param string */
  public function setSiteSearchQueryParameters($siteSearchQueryParameters)
  {
    $this->siteSearchQueryParameters = $siteSearchQueryParameters;
  }
  /** @return string */
  public function getSiteSearchQueryParameters()
  {
    return $this->siteSearchQueryParameters;
  }
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param bool */
  public function setStripSiteSearchCategoryParameters($stripSiteSearchCategoryParameters)
  {
    $this->stripSiteSearchCategoryParameters = $stripSiteSearchCategoryParameters;
  }
  /** @return bool */
  public function getStripSiteSearchCategoryParameters()
  {
    return $this->stripSiteSearchCategoryParameters;
  }
  /** @param bool */
  public function setStripSiteSearchQueryParameters($stripSiteSearchQueryParameters)
  {
    $this->stripSiteSearchQueryParameters = $stripSiteSearchQueryParameters;
  }
  /** @return bool */
  public function getStripSiteSearchQueryParameters()
  {
    return $this->stripSiteSearchQueryParameters;
  }
  /** @param string */
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }
  /** @return string */
  public function getTimezone()
  {
    return $this->timezone;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class ProfileChildLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class ProfileFilterLink extends \Google\Model
{
  /** @var FilterRef */
  public $filterRef;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var ProfileRef */
  public $profileRef;
  /** @var int */
  public $rank;
  /** @var string */
  public $selfLink;
  protected $filterRefType = FilterRef::class;
  protected $filterRefDataType = '';
  protected $profileRefType = ProfileRef::class;
  protected $profileRefDataType = '';
  /** @param FilterRef */
  public function setFilterRef(FilterRef $filterRef)
  {
    $this->filterRef = $filterRef;
  }
  /** @return FilterRef */
  public function getFilterRef()
  {
    return $this->filterRef;
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
  /** @param ProfileRef */
  public function setProfileRef(ProfileRef $profileRef)
  {
    $this->profileRef = $profileRef;
  }
  /** @return ProfileRef */
  public function getProfileRef()
  {
    return $this->profileRef;
  }
  /** @param int */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /** @return int */
  public function getRank()
  {
    return $this->rank;
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
}

class ProfileFilterLinks extends \Google\Collection
{
  /** @var ProfileFilterLink[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = ProfileFilterLink::class;
  protected $itemsDataType = 'array';
  /** @param ProfileFilterLink[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ProfileFilterLink[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class ProfileParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class ProfilePermissions extends \Google\Collection
{
  /** @var string[] */
  public $effective;
  protected $collection_key = 'effective';
  /** @param string[] */
  public function setEffective($effective)
  {
    $this->effective = $effective;
  }
  /** @return string[] */
  public function getEffective()
  {
    return $this->effective;
  }
}

class ProfileRef extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $href;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $webPropertyId;

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
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class ProfileSummary extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var bool */
  public $starred;
  /** @var string */
  public $type;

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
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
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

class Profiles extends \Google\Collection
{
  /** @var Profile[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Profile::class;
  protected $itemsDataType = 'array';
  /** @param Profile[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Profile[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class RealtimeData extends \Google\Collection
{
  /** @var RealtimeDataColumnHeaders[] */
  public $columnHeaders;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var RealtimeDataProfileInfo */
  public $profileInfo;
  /** @var RealtimeDataQuery */
  public $query;
  /** @var string[] */
  public $rows;
  /** @var string */
  public $selfLink;
  /** @var int */
  public $totalResults;
  /** @var string[] */
  public $totalsForAllResults;
  protected $collection_key = 'rows';
  protected $columnHeadersType = RealtimeDataColumnHeaders::class;
  protected $columnHeadersDataType = 'array';
  protected $profileInfoType = RealtimeDataProfileInfo::class;
  protected $profileInfoDataType = '';
  protected $queryType = RealtimeDataQuery::class;
  protected $queryDataType = '';
  /** @param RealtimeDataColumnHeaders[] */
  public function setColumnHeaders($columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /** @return RealtimeDataColumnHeaders[] */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
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
  /** @param RealtimeDataProfileInfo */
  public function setProfileInfo(RealtimeDataProfileInfo $profileInfo)
  {
    $this->profileInfo = $profileInfo;
  }
  /** @return RealtimeDataProfileInfo */
  public function getProfileInfo()
  {
    return $this->profileInfo;
  }
  /** @param RealtimeDataQuery */
  public function setQuery(RealtimeDataQuery $query)
  {
    $this->query = $query;
  }
  /** @return RealtimeDataQuery */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return string[] */
  public function getRows()
  {
    return $this->rows;
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
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
  /** @param string[] */
  public function setTotalsForAllResults($totalsForAllResults)
  {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  /** @return string[] */
  public function getTotalsForAllResults()
  {
    return $this->totalsForAllResults;
  }
}

class RealtimeDataColumnHeaders extends \Google\Model
{
  /** @var string */
  public $columnType;
  /** @var string */
  public $dataType;
  /** @var string */
  public $name;

  /** @param string */
  public function setColumnType($columnType)
  {
    $this->columnType = $columnType;
  }
  /** @return string */
  public function getColumnType()
  {
    return $this->columnType;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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

class RealtimeDataProfileInfo extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $profileId;
  /** @var string */
  public $profileName;
  /** @var string */
  public $tableId;
  /** @var string */
  public $webPropertyId;

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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /** @param string */
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class RealtimeDataQuery extends \Google\Collection
{
  /** @var string */
  public $dimensions;
  /** @var string */
  public $filters;
  /** @var string */
  public $ids;
  /** @var int */
  public $maxResults;
  /** @var string[] */
  public $metrics;
  /** @var string[] */
  public $sort;
  protected $collection_key = 'sort';
  protected $internal_gapi_mappings = [
        "maxResults" => "max-results",
  ];
  /** @param string */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return string */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string */
  public function getIds()
  {
    return $this->ids;
  }
  /** @param int */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return int */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string[] */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string[] */
  public function getSort()
  {
    return $this->sort;
  }
}

class RemarketingAudience extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var RemarketingAudienceAudienceDefinition */
  public $audienceDefinition;
  /** @var string */
  public $audienceType;
  /** @var string */
  public $created;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var LinkedForeignAccount[] */
  public $linkedAdAccounts;
  /** @var string[] */
  public $linkedViews;
  /** @var string */
  public $name;
  /** @var RemarketingAudienceStateBasedAudienceDefinition */
  public $stateBasedAudienceDefinition;
  /** @var string */
  public $updated;
  /** @var string */
  public $webPropertyId;
  protected $collection_key = 'linkedViews';
  protected $audienceDefinitionType = RemarketingAudienceAudienceDefinition::class;
  protected $audienceDefinitionDataType = '';
  protected $linkedAdAccountsType = LinkedForeignAccount::class;
  protected $linkedAdAccountsDataType = 'array';
  protected $stateBasedAudienceDefinitionType = RemarketingAudienceStateBasedAudienceDefinition::class;
  protected $stateBasedAudienceDefinitionDataType = '';
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
  /** @param RemarketingAudienceAudienceDefinition */
  public function setAudienceDefinition(RemarketingAudienceAudienceDefinition $audienceDefinition)
  {
    $this->audienceDefinition = $audienceDefinition;
  }
  /** @return RemarketingAudienceAudienceDefinition */
  public function getAudienceDefinition()
  {
    return $this->audienceDefinition;
  }
  /** @param string */
  public function setAudienceType($audienceType)
  {
    $this->audienceType = $audienceType;
  }
  /** @return string */
  public function getAudienceType()
  {
    return $this->audienceType;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  /** @param LinkedForeignAccount[] */
  public function setLinkedAdAccounts($linkedAdAccounts)
  {
    $this->linkedAdAccounts = $linkedAdAccounts;
  }
  /** @return LinkedForeignAccount[] */
  public function getLinkedAdAccounts()
  {
    return $this->linkedAdAccounts;
  }
  /** @param string[] */
  public function setLinkedViews($linkedViews)
  {
    $this->linkedViews = $linkedViews;
  }
  /** @return string[] */
  public function getLinkedViews()
  {
    return $this->linkedViews;
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
  /** @param RemarketingAudienceStateBasedAudienceDefinition */
  public function setStateBasedAudienceDefinition(RemarketingAudienceStateBasedAudienceDefinition $stateBasedAudienceDefinition)
  {
    $this->stateBasedAudienceDefinition = $stateBasedAudienceDefinition;
  }
  /** @return RemarketingAudienceStateBasedAudienceDefinition */
  public function getStateBasedAudienceDefinition()
  {
    return $this->stateBasedAudienceDefinition;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class RemarketingAudienceAudienceDefinition extends \Google\Model
{
  /** @var IncludeConditions */
  public $includeConditions;
  protected $includeConditionsType = IncludeConditions::class;
  protected $includeConditionsDataType = '';
  /** @param IncludeConditions */
  public function setIncludeConditions(IncludeConditions $includeConditions)
  {
    $this->includeConditions = $includeConditions;
  }
  /** @return IncludeConditions */
  public function getIncludeConditions()
  {
    return $this->includeConditions;
  }
}

class RemarketingAudienceStateBasedAudienceDefinition extends \Google\Model
{
  /** @var RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions */
  public $excludeConditions;
  /** @var IncludeConditions */
  public $includeConditions;
  protected $excludeConditionsType = RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions::class;
  protected $excludeConditionsDataType = '';
  protected $includeConditionsType = IncludeConditions::class;
  protected $includeConditionsDataType = '';
  /** @param RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions */
  public function setExcludeConditions(RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions $excludeConditions)
  {
    $this->excludeConditions = $excludeConditions;
  }
  /** @return RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions */
  public function getExcludeConditions()
  {
    return $this->excludeConditions;
  }
  /** @param IncludeConditions */
  public function setIncludeConditions(IncludeConditions $includeConditions)
  {
    $this->includeConditions = $includeConditions;
  }
  /** @return IncludeConditions */
  public function getIncludeConditions()
  {
    return $this->includeConditions;
  }
}

class RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions extends \Google\Model
{
  /** @var string */
  public $exclusionDuration;
  /** @var string */
  public $segment;

  /** @param string */
  public function setExclusionDuration($exclusionDuration)
  {
    $this->exclusionDuration = $exclusionDuration;
  }
  /** @return string */
  public function getExclusionDuration()
  {
    return $this->exclusionDuration;
  }
  /** @param string */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return string */
  public function getSegment()
  {
    return $this->segment;
  }
}

class RemarketingAudiences extends \Google\Collection
{
  /** @var RemarketingAudience[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = RemarketingAudience::class;
  protected $itemsDataType = 'array';
  /** @param RemarketingAudience[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return RemarketingAudience[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class Segment extends \Google\Model
{
  /** @var string */
  public $created;
  /** @var string */
  public $definition;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $segmentId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $type;
  /** @var string */
  public $updated;

  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param string */
  public function setDefinition($definition)
  {
    $this->definition = $definition;
  }
  /** @return string */
  public function getDefinition()
  {
    return $this->definition;
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
  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class Segments extends \Google\Collection
{
  /** @var Segment[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Segment::class;
  protected $itemsDataType = 'array';
  /** @param Segment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Segment[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class UnsampledReport extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var UnsampledReportCloudStorageDownloadDetails */
  public $cloudStorageDownloadDetails;
  /** @var string */
  public $created;
  /** @var string */
  public $dimensions;
  /** @var string */
  public $downloadType;
  /** @var UnsampledReportDriveDownloadDetails */
  public $driveDownloadDetails;
  /** @var string */
  public $endDate;
  /** @var string */
  public $filters;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $metrics;
  /** @var string */
  public $profileId;
  /** @var string */
  public $segment;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $startDate;
  /** @var string */
  public $status;
  /** @var string */
  public $title;
  /** @var string */
  public $updated;
  /** @var string */
  public $webPropertyId;
  protected $internal_gapi_mappings = [
        "endDate" => "end-date",
        "startDate" => "start-date",
  ];
  protected $cloudStorageDownloadDetailsType = UnsampledReportCloudStorageDownloadDetails::class;
  protected $cloudStorageDownloadDetailsDataType = '';
  protected $driveDownloadDetailsType = UnsampledReportDriveDownloadDetails::class;
  protected $driveDownloadDetailsDataType = '';
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
  /** @param UnsampledReportCloudStorageDownloadDetails */
  public function setCloudStorageDownloadDetails(UnsampledReportCloudStorageDownloadDetails $cloudStorageDownloadDetails)
  {
    $this->cloudStorageDownloadDetails = $cloudStorageDownloadDetails;
  }
  /** @return UnsampledReportCloudStorageDownloadDetails */
  public function getCloudStorageDownloadDetails()
  {
    return $this->cloudStorageDownloadDetails;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param string */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setDownloadType($downloadType)
  {
    $this->downloadType = $downloadType;
  }
  /** @return string */
  public function getDownloadType()
  {
    return $this->downloadType;
  }
  /** @param UnsampledReportDriveDownloadDetails */
  public function setDriveDownloadDetails(UnsampledReportDriveDownloadDetails $driveDownloadDetails)
  {
    $this->driveDownloadDetails = $driveDownloadDetails;
  }
  /** @return UnsampledReportDriveDownloadDetails */
  public function getDriveDownloadDetails()
  {
    return $this->driveDownloadDetails;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return string */
  public function getFilters()
  {
    return $this->filters;
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
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return string */
  public function getSegment()
  {
    return $this->segment;
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
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class UnsampledReportCloudStorageDownloadDetails extends \Google\Model
{
  /** @var string */
  public $bucketId;
  /** @var string */
  public $objectId;

  /** @param string */
  public function setBucketId($bucketId)
  {
    $this->bucketId = $bucketId;
  }
  /** @return string */
  public function getBucketId()
  {
    return $this->bucketId;
  }
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class UnsampledReportDriveDownloadDetails extends \Google\Model
{
  /** @var string */
  public $documentId;

  /** @param string */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return string */
  public function getDocumentId()
  {
    return $this->documentId;
  }
}

class UnsampledReports extends \Google\Collection
{
  /** @var UnsampledReport[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = UnsampledReport::class;
  protected $itemsDataType = 'array';
  /** @param UnsampledReport[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return UnsampledReport[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class Upload extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $customDataSourceId;
  /** @var string[] */
  public $errors;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $status;
  /** @var string */
  public $uploadTime;
  protected $collection_key = 'errors';
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
  public function setCustomDataSourceId($customDataSourceId)
  {
    $this->customDataSourceId = $customDataSourceId;
  }
  /** @return string */
  public function getCustomDataSourceId()
  {
    return $this->customDataSourceId;
  }
  /** @param string[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return string[] */
  public function getErrors()
  {
    return $this->errors;
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
  public function setUploadTime($uploadTime)
  {
    $this->uploadTime = $uploadTime;
  }
  /** @return string */
  public function getUploadTime()
  {
    return $this->uploadTime;
  }
}

class Uploads extends \Google\Collection
{
  /** @var Upload[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  protected $collection_key = 'items';
  protected $itemsType = Upload::class;
  protected $itemsDataType = 'array';
  /** @param Upload[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Upload[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class UserDeletionRequest extends \Google\Model
{
  /** @var string */
  public $deletionRequestTime;
  /** @var string */
  public $firebaseProjectId;
  /** @var UserDeletionRequestId */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $propertyId;
  /** @var string */
  public $webPropertyId;
  protected $idType = UserDeletionRequestId::class;
  protected $idDataType = '';
  /** @param string */
  public function setDeletionRequestTime($deletionRequestTime)
  {
    $this->deletionRequestTime = $deletionRequestTime;
  }
  /** @return string */
  public function getDeletionRequestTime()
  {
    return $this->deletionRequestTime;
  }
  /** @param string */
  public function setFirebaseProjectId($firebaseProjectId)
  {
    $this->firebaseProjectId = $firebaseProjectId;
  }
  /** @return string */
  public function getFirebaseProjectId()
  {
    return $this->firebaseProjectId;
  }
  /** @param UserDeletionRequestId */
  public function setId(UserDeletionRequestId $id)
  {
    $this->id = $id;
  }
  /** @return UserDeletionRequestId */
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
  public function setPropertyId($propertyId)
  {
    $this->propertyId = $propertyId;
  }
  /** @return string */
  public function getPropertyId()
  {
    return $this->propertyId;
  }
  /** @param string */
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }
  /** @return string */
  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}

class UserDeletionRequestId extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $userId;

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

class UserRef extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;

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
}

class WebPropertyRef extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $href;
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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

class WebPropertySummary extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $level;
  /** @var string */
  public $name;
  /** @var ProfileSummary[] */
  public $profiles;
  /** @var bool */
  public $starred;
  /** @var string */
  public $websiteUrl;
  protected $collection_key = 'profiles';
  protected $profilesType = ProfileSummary::class;
  protected $profilesDataType = 'array';
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
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string */
  public function getLevel()
  {
    return $this->level;
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
  /** @param ProfileSummary[] */
  public function setProfiles($profiles)
  {
    $this->profiles = $profiles;
  }
  /** @return ProfileSummary[] */
  public function getProfiles()
  {
    return $this->profiles;
  }
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class Webproperties extends \Google\Collection
{
  /** @var Webproperty[] */
  public $items;
  /** @var int */
  public $itemsPerPage;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextLink;
  /** @var string */
  public $previousLink;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;
  /** @var string */
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = Webproperty::class;
  protected $itemsDataType = 'array';
  /** @param Webproperty[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Webproperty[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  /** @return int */
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  /** @return string */
  public function getNextLink()
  {
    return $this->nextLink;
  }
  /** @param string */
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  /** @return string */
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
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

class Webproperty extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var WebpropertyChildLink */
  public $childLink;
  /** @var string */
  public $created;
  /** @var bool */
  public $dataRetentionResetOnNewActivity;
  /** @var string */
  public $dataRetentionTtl;
  /** @var string */
  public $defaultProfileId;
  /** @var string */
  public $id;
  /** @var string */
  public $industryVertical;
  /** @var string */
  public $internalWebPropertyId;
  /** @var string */
  public $kind;
  /** @var string */
  public $level;
  /** @var string */
  public $name;
  /** @var WebpropertyParentLink */
  public $parentLink;
  /** @var WebpropertyPermissions */
  public $permissions;
  /** @var int */
  public $profileCount;
  /** @var string */
  public $selfLink;
  /** @var bool */
  public $starred;
  /** @var string */
  public $updated;
  /** @var string */
  public $websiteUrl;
  protected $childLinkType = WebpropertyChildLink::class;
  protected $childLinkDataType = '';
  protected $parentLinkType = WebpropertyParentLink::class;
  protected $parentLinkDataType = '';
  protected $permissionsType = WebpropertyPermissions::class;
  protected $permissionsDataType = '';
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
  /** @param WebpropertyChildLink */
  public function setChildLink(WebpropertyChildLink $childLink)
  {
    $this->childLink = $childLink;
  }
  /** @return WebpropertyChildLink */
  public function getChildLink()
  {
    return $this->childLink;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param bool */
  public function setDataRetentionResetOnNewActivity($dataRetentionResetOnNewActivity)
  {
    $this->dataRetentionResetOnNewActivity = $dataRetentionResetOnNewActivity;
  }
  /** @return bool */
  public function getDataRetentionResetOnNewActivity()
  {
    return $this->dataRetentionResetOnNewActivity;
  }
  /** @param string */
  public function setDataRetentionTtl($dataRetentionTtl)
  {
    $this->dataRetentionTtl = $dataRetentionTtl;
  }
  /** @return string */
  public function getDataRetentionTtl()
  {
    return $this->dataRetentionTtl;
  }
  /** @param string */
  public function setDefaultProfileId($defaultProfileId)
  {
    $this->defaultProfileId = $defaultProfileId;
  }
  /** @return string */
  public function getDefaultProfileId()
  {
    return $this->defaultProfileId;
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
  public function setIndustryVertical($industryVertical)
  {
    $this->industryVertical = $industryVertical;
  }
  /** @return string */
  public function getIndustryVertical()
  {
    return $this->industryVertical;
  }
  /** @param string */
  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  /** @return string */
  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
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
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string */
  public function getLevel()
  {
    return $this->level;
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
  /** @param WebpropertyParentLink */
  public function setParentLink(WebpropertyParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }
  /** @return WebpropertyParentLink */
  public function getParentLink()
  {
    return $this->parentLink;
  }
  /** @param WebpropertyPermissions */
  public function setPermissions(WebpropertyPermissions $permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return WebpropertyPermissions */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param int */
  public function setProfileCount($profileCount)
  {
    $this->profileCount = $profileCount;
  }
  /** @return int */
  public function getProfileCount()
  {
    return $this->profileCount;
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
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class WebpropertyChildLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class WebpropertyParentLink extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $type;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
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

class WebpropertyPermissions extends \Google\Collection
{
  /** @var string[] */
  public $effective;
  protected $collection_key = 'effective';
  /** @param string[] */
  public function setEffective($effective)
  {
    $this->effective = $effective;
  }
  /** @return string[] */
  public function getEffective()
  {
    return $this->effective;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_Analytics_Account');
class_alias(AccountChildLink::class, 'Google_Service_Analytics_AccountChildLink');
class_alias(AccountPermissions::class, 'Google_Service_Analytics_AccountPermissions');
class_alias(AccountRef::class, 'Google_Service_Analytics_AccountRef');
class_alias(AccountSummaries::class, 'Google_Service_Analytics_AccountSummaries');
class_alias(AccountSummary::class, 'Google_Service_Analytics_AccountSummary');
class_alias(AccountTicket::class, 'Google_Service_Analytics_AccountTicket');
class_alias(AccountTreeRequest::class, 'Google_Service_Analytics_AccountTreeRequest');
class_alias(AccountTreeResponse::class, 'Google_Service_Analytics_AccountTreeResponse');
class_alias(Accounts::class, 'Google_Service_Analytics_Accounts');
class_alias(AdWordsAccount::class, 'Google_Service_Analytics_AdWordsAccount');
class_alias(AnalyticsDataimportDeleteUploadDataRequest::class, 'Google_Service_Analytics_AnalyticsDataimportDeleteUploadDataRequest');
class_alias(Column::class, 'Google_Service_Analytics_Column');
class_alias(Columns::class, 'Google_Service_Analytics_Columns');
class_alias(CustomDataSource::class, 'Google_Service_Analytics_CustomDataSource');
class_alias(CustomDataSourceChildLink::class, 'Google_Service_Analytics_CustomDataSourceChildLink');
class_alias(CustomDataSourceParentLink::class, 'Google_Service_Analytics_CustomDataSourceParentLink');
class_alias(CustomDataSources::class, 'Google_Service_Analytics_CustomDataSources');
class_alias(CustomDimension::class, 'Google_Service_Analytics_CustomDimension');
class_alias(CustomDimensionParentLink::class, 'Google_Service_Analytics_CustomDimensionParentLink');
class_alias(CustomDimensions::class, 'Google_Service_Analytics_CustomDimensions');
class_alias(CustomMetric::class, 'Google_Service_Analytics_CustomMetric');
class_alias(CustomMetricParentLink::class, 'Google_Service_Analytics_CustomMetricParentLink');
class_alias(CustomMetrics::class, 'Google_Service_Analytics_CustomMetrics');
class_alias(EntityAdWordsLink::class, 'Google_Service_Analytics_EntityAdWordsLink');
class_alias(EntityAdWordsLinkEntity::class, 'Google_Service_Analytics_EntityAdWordsLinkEntity');
class_alias(EntityAdWordsLinks::class, 'Google_Service_Analytics_EntityAdWordsLinks');
class_alias(EntityUserLink::class, 'Google_Service_Analytics_EntityUserLink');
class_alias(EntityUserLinkEntity::class, 'Google_Service_Analytics_EntityUserLinkEntity');
class_alias(EntityUserLinkPermissions::class, 'Google_Service_Analytics_EntityUserLinkPermissions');
class_alias(EntityUserLinks::class, 'Google_Service_Analytics_EntityUserLinks');
class_alias(Experiment::class, 'Google_Service_Analytics_Experiment');
class_alias(ExperimentParentLink::class, 'Google_Service_Analytics_ExperimentParentLink');
class_alias(ExperimentVariations::class, 'Google_Service_Analytics_ExperimentVariations');
class_alias(Experiments::class, 'Google_Service_Analytics_Experiments');
class_alias(Filter::class, 'Google_Service_Analytics_Filter');
class_alias(FilterAdvancedDetails::class, 'Google_Service_Analytics_FilterAdvancedDetails');
class_alias(FilterExpression::class, 'Google_Service_Analytics_FilterExpression');
class_alias(FilterLowercaseDetails::class, 'Google_Service_Analytics_FilterLowercaseDetails');
class_alias(FilterParentLink::class, 'Google_Service_Analytics_FilterParentLink');
class_alias(FilterRef::class, 'Google_Service_Analytics_FilterRef');
class_alias(FilterSearchAndReplaceDetails::class, 'Google_Service_Analytics_FilterSearchAndReplaceDetails');
class_alias(FilterUppercaseDetails::class, 'Google_Service_Analytics_FilterUppercaseDetails');
class_alias(Filters::class, 'Google_Service_Analytics_Filters');
class_alias(GaData::class, 'Google_Service_Analytics_GaData');
class_alias(GaDataColumnHeaders::class, 'Google_Service_Analytics_GaDataColumnHeaders');
class_alias(GaDataDataTable::class, 'Google_Service_Analytics_GaDataDataTable');
class_alias(GaDataDataTableCols::class, 'Google_Service_Analytics_GaDataDataTableCols');
class_alias(GaDataDataTableRows::class, 'Google_Service_Analytics_GaDataDataTableRows');
class_alias(GaDataDataTableRowsC::class, 'Google_Service_Analytics_GaDataDataTableRowsC');
class_alias(GaDataProfileInfo::class, 'Google_Service_Analytics_GaDataProfileInfo');
class_alias(GaDataQuery::class, 'Google_Service_Analytics_GaDataQuery');
class_alias(Goal::class, 'Google_Service_Analytics_Goal');
class_alias(GoalEventDetails::class, 'Google_Service_Analytics_GoalEventDetails');
class_alias(GoalEventDetailsEventConditions::class, 'Google_Service_Analytics_GoalEventDetailsEventConditions');
class_alias(GoalParentLink::class, 'Google_Service_Analytics_GoalParentLink');
class_alias(GoalUrlDestinationDetails::class, 'Google_Service_Analytics_GoalUrlDestinationDetails');
class_alias(GoalUrlDestinationDetailsSteps::class, 'Google_Service_Analytics_GoalUrlDestinationDetailsSteps');
class_alias(GoalVisitNumPagesDetails::class, 'Google_Service_Analytics_GoalVisitNumPagesDetails');
class_alias(GoalVisitTimeOnSiteDetails::class, 'Google_Service_Analytics_GoalVisitTimeOnSiteDetails');
class_alias(Goals::class, 'Google_Service_Analytics_Goals');
class_alias(HashClientIdRequest::class, 'Google_Service_Analytics_HashClientIdRequest');
class_alias(HashClientIdResponse::class, 'Google_Service_Analytics_HashClientIdResponse');
class_alias(IncludeConditions::class, 'Google_Service_Analytics_IncludeConditions');
class_alias(LinkedForeignAccount::class, 'Google_Service_Analytics_LinkedForeignAccount');
class_alias(McfData::class, 'Google_Service_Analytics_McfData');
class_alias(McfDataColumnHeaders::class, 'Google_Service_Analytics_McfDataColumnHeaders');
class_alias(McfDataProfileInfo::class, 'Google_Service_Analytics_McfDataProfileInfo');
class_alias(McfDataQuery::class, 'Google_Service_Analytics_McfDataQuery');
class_alias(McfDataRows::class, 'Google_Service_Analytics_McfDataRows');
class_alias(McfDataRowsConversionPathValue::class, 'Google_Service_Analytics_McfDataRowsConversionPathValue');
class_alias(Profile::class, 'Google_Service_Analytics_Profile');
class_alias(ProfileChildLink::class, 'Google_Service_Analytics_ProfileChildLink');
class_alias(ProfileFilterLink::class, 'Google_Service_Analytics_ProfileFilterLink');
class_alias(ProfileFilterLinks::class, 'Google_Service_Analytics_ProfileFilterLinks');
class_alias(ProfileParentLink::class, 'Google_Service_Analytics_ProfileParentLink');
class_alias(ProfilePermissions::class, 'Google_Service_Analytics_ProfilePermissions');
class_alias(ProfileRef::class, 'Google_Service_Analytics_ProfileRef');
class_alias(ProfileSummary::class, 'Google_Service_Analytics_ProfileSummary');
class_alias(Profiles::class, 'Google_Service_Analytics_Profiles');
class_alias(RealtimeData::class, 'Google_Service_Analytics_RealtimeData');
class_alias(RealtimeDataColumnHeaders::class, 'Google_Service_Analytics_RealtimeDataColumnHeaders');
class_alias(RealtimeDataProfileInfo::class, 'Google_Service_Analytics_RealtimeDataProfileInfo');
class_alias(RealtimeDataQuery::class, 'Google_Service_Analytics_RealtimeDataQuery');
class_alias(RemarketingAudience::class, 'Google_Service_Analytics_RemarketingAudience');
class_alias(RemarketingAudienceAudienceDefinition::class, 'Google_Service_Analytics_RemarketingAudienceAudienceDefinition');
class_alias(RemarketingAudienceStateBasedAudienceDefinition::class, 'Google_Service_Analytics_RemarketingAudienceStateBasedAudienceDefinition');
class_alias(RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions::class, 'Google_Service_Analytics_RemarketingAudienceStateBasedAudienceDefinitionExcludeConditions');
class_alias(RemarketingAudiences::class, 'Google_Service_Analytics_RemarketingAudiences');
class_alias(Segment::class, 'Google_Service_Analytics_Segment');
class_alias(Segments::class, 'Google_Service_Analytics_Segments');
class_alias(UnsampledReport::class, 'Google_Service_Analytics_UnsampledReport');
class_alias(UnsampledReportCloudStorageDownloadDetails::class, 'Google_Service_Analytics_UnsampledReportCloudStorageDownloadDetails');
class_alias(UnsampledReportDriveDownloadDetails::class, 'Google_Service_Analytics_UnsampledReportDriveDownloadDetails');
class_alias(UnsampledReports::class, 'Google_Service_Analytics_UnsampledReports');
class_alias(Upload::class, 'Google_Service_Analytics_Upload');
class_alias(Uploads::class, 'Google_Service_Analytics_Uploads');
class_alias(UserDeletionRequest::class, 'Google_Service_Analytics_UserDeletionRequest');
class_alias(UserDeletionRequestId::class, 'Google_Service_Analytics_UserDeletionRequestId');
class_alias(UserRef::class, 'Google_Service_Analytics_UserRef');
class_alias(WebPropertyRef::class, 'Google_Service_Analytics_WebPropertyRef');
class_alias(WebPropertySummary::class, 'Google_Service_Analytics_WebPropertySummary');
class_alias(Webproperties::class, 'Google_Service_Analytics_Webproperties');
class_alias(Webproperty::class, 'Google_Service_Analytics_Webproperty');
class_alias(WebpropertyChildLink::class, 'Google_Service_Analytics_WebpropertyChildLink');
class_alias(WebpropertyParentLink::class, 'Google_Service_Analytics_WebpropertyParentLink');
class_alias(WebpropertyPermissions::class, 'Google_Service_Analytics_WebpropertyPermissions');
