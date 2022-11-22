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

namespace Google\Service\MyBusinessPlaceActions;

class ListPlaceActionLinksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PlaceActionLink[] */
  public $placeActionLinks;
  protected $collection_key = 'placeActionLinks';
  protected $placeActionLinksType = PlaceActionLink::class;
  protected $placeActionLinksDataType = 'array';
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
  /** @param PlaceActionLink[] */
  public function setPlaceActionLinks($placeActionLinks)
  {
    $this->placeActionLinks = $placeActionLinks;
  }
  /** @return PlaceActionLink[] */
  public function getPlaceActionLinks()
  {
    return $this->placeActionLinks;
  }
}

class ListPlaceActionTypeMetadataResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PlaceActionTypeMetadata[] */
  public $placeActionTypeMetadata;
  protected $collection_key = 'placeActionTypeMetadata';
  protected $placeActionTypeMetadataType = PlaceActionTypeMetadata::class;
  protected $placeActionTypeMetadataDataType = 'array';
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
  /** @param PlaceActionTypeMetadata[] */
  public function setPlaceActionTypeMetadata($placeActionTypeMetadata)
  {
    $this->placeActionTypeMetadata = $placeActionTypeMetadata;
  }
  /** @return PlaceActionTypeMetadata[] */
  public function getPlaceActionTypeMetadata()
  {
    return $this->placeActionTypeMetadata;
  }
}

class MybusinessplaceactionsEmpty extends \Google\Model
{
}

class PlaceActionLink extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $isEditable;
  /** @var bool */
  public $isPreferred;
  /** @var string */
  public $name;
  /** @var string */
  public $placeActionType;
  /** @var string */
  public $providerType;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uri;

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
  /** @param bool */
  public function setIsEditable($isEditable)
  {
    $this->isEditable = $isEditable;
  }
  /** @return bool */
  public function getIsEditable()
  {
    return $this->isEditable;
  }
  /** @param bool */
  public function setIsPreferred($isPreferred)
  {
    $this->isPreferred = $isPreferred;
  }
  /** @return bool */
  public function getIsPreferred()
  {
    return $this->isPreferred;
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
  public function setPlaceActionType($placeActionType)
  {
    $this->placeActionType = $placeActionType;
  }
  /** @return string */
  public function getPlaceActionType()
  {
    return $this->placeActionType;
  }
  /** @param string */
  public function setProviderType($providerType)
  {
    $this->providerType = $providerType;
  }
  /** @return string */
  public function getProviderType()
  {
    return $this->providerType;
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

class PlaceActionTypeMetadata extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $placeActionType;

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
  public function setPlaceActionType($placeActionType)
  {
    $this->placeActionType = $placeActionType;
  }
  /** @return string */
  public function getPlaceActionType()
  {
    return $this->placeActionType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListPlaceActionLinksResponse::class, 'Google_Service_MyBusinessPlaceActions_ListPlaceActionLinksResponse');
class_alias(ListPlaceActionTypeMetadataResponse::class, 'Google_Service_MyBusinessPlaceActions_ListPlaceActionTypeMetadataResponse');
class_alias(MybusinessplaceactionsEmpty::class, 'Google_Service_MyBusinessPlaceActions_MybusinessplaceactionsEmpty');
class_alias(PlaceActionLink::class, 'Google_Service_MyBusinessPlaceActions_PlaceActionLink');
class_alias(PlaceActionTypeMetadata::class, 'Google_Service_MyBusinessPlaceActions_PlaceActionTypeMetadata');
