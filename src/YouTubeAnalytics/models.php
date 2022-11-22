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

namespace Google\Service\YouTubeAnalytics;

class EmptyResponse extends \Google\Model
{
  /** @var Errors */
  public $errors;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
}

class ErrorProto extends \Google\Collection
{
  /** @var string[] */
  public $argument;
  /** @var string */
  public $code;
  /** @var string */
  public $debugInfo;
  /** @var string */
  public $domain;
  /** @var string */
  public $externalErrorMessage;
  /** @var string */
  public $location;
  /** @var string */
  public $locationType;
  protected $collection_key = 'argument';
  /** @param string[] */
  public function setArgument($argument)
  {
    $this->argument = $argument;
  }
  /** @return string[] */
  public function getArgument()
  {
    return $this->argument;
  }
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
  public function setDebugInfo($debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }
  /** @return string */
  public function getDebugInfo()
  {
    return $this->debugInfo;
  }
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setExternalErrorMessage($externalErrorMessage)
  {
    $this->externalErrorMessage = $externalErrorMessage;
  }
  /** @return string */
  public function getExternalErrorMessage()
  {
    return $this->externalErrorMessage;
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
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
}

class Errors extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var ErrorProto[] */
  public $error;
  /** @var string */
  public $requestId;
  protected $collection_key = 'error';
  protected $errorType = ErrorProto::class;
  protected $errorDataType = 'array';
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
  /** @param ErrorProto[] */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return ErrorProto[] */
  public function getError()
  {
    return $this->error;
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
}

class Group extends \Google\Model
{
  /** @var GroupContentDetails */
  public $contentDetails;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var GroupSnippet */
  public $snippet;
  protected $contentDetailsType = GroupContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $snippetType = GroupSnippet::class;
  protected $snippetDataType = '';
  /** @param GroupContentDetails */
  public function setContentDetails(GroupContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return GroupContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param GroupSnippet */
  public function setSnippet(GroupSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return GroupSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class GroupContentDetails extends \Google\Model
{
  /** @var string */
  public $itemCount;
  /** @var string */
  public $itemType;

  /** @param string */
  public function setItemCount($itemCount)
  {
    $this->itemCount = $itemCount;
  }
  /** @return string */
  public function getItemCount()
  {
    return $this->itemCount;
  }
  /** @param string */
  public function setItemType($itemType)
  {
    $this->itemType = $itemType;
  }
  /** @return string */
  public function getItemType()
  {
    return $this->itemType;
  }
}

class GroupItem extends \Google\Model
{
  /** @var Errors */
  public $errors;
  /** @var string */
  public $etag;
  /** @var string */
  public $groupId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var GroupItemResource */
  public $resource;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $resourceType = GroupItemResource::class;
  protected $resourceDataType = '';
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param GroupItemResource */
  public function setResource(GroupItemResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return GroupItemResource */
  public function getResource()
  {
    return $this->resource;
  }
}

class GroupItemResource extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;

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

class GroupSnippet extends \Google\Model
{
  /** @var string */
  public $publishedAt;
  /** @var string */
  public $title;

  /** @param string */
  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }
  /** @return string */
  public function getPublishedAt()
  {
    return $this->publishedAt;
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

class ListGroupItemsResponse extends \Google\Collection
{
  /** @var Errors */
  public $errors;
  /** @var string */
  public $etag;
  /** @var GroupItem[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $itemsType = GroupItem::class;
  protected $itemsDataType = 'array';
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param GroupItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GroupItem[] */
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
}

class ListGroupsResponse extends \Google\Collection
{
  /** @var Errors */
  public $errors;
  /** @var string */
  public $etag;
  /** @var Group[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $itemsType = Group::class;
  protected $itemsDataType = 'array';
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param Group[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Group[] */
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

class QueryResponse extends \Google\Collection
{
  /** @var ResultTableColumnHeader[] */
  public $columnHeaders;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var array[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $columnHeadersType = ResultTableColumnHeader::class;
  protected $columnHeadersDataType = 'array';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param ResultTableColumnHeader[] */
  public function setColumnHeaders($columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /** @return ResultTableColumnHeader[] */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param array[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return array[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class ResultTableColumnHeader extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EmptyResponse::class, 'Google_Service_YouTubeAnalytics_EmptyResponse');
class_alias(ErrorProto::class, 'Google_Service_YouTubeAnalytics_ErrorProto');
class_alias(Errors::class, 'Google_Service_YouTubeAnalytics_Errors');
class_alias(Group::class, 'Google_Service_YouTubeAnalytics_Group');
class_alias(GroupContentDetails::class, 'Google_Service_YouTubeAnalytics_GroupContentDetails');
class_alias(GroupItem::class, 'Google_Service_YouTubeAnalytics_GroupItem');
class_alias(GroupItemResource::class, 'Google_Service_YouTubeAnalytics_GroupItemResource');
class_alias(GroupSnippet::class, 'Google_Service_YouTubeAnalytics_GroupSnippet');
class_alias(ListGroupItemsResponse::class, 'Google_Service_YouTubeAnalytics_ListGroupItemsResponse');
class_alias(ListGroupsResponse::class, 'Google_Service_YouTubeAnalytics_ListGroupsResponse');
class_alias(QueryResponse::class, 'Google_Service_YouTubeAnalytics_QueryResponse');
class_alias(ResultTableColumnHeader::class, 'Google_Service_YouTubeAnalytics_ResultTableColumnHeader');
