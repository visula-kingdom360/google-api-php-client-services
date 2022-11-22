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

namespace Google\Service\Licensing;

class LicenseAssignment extends \Google\Model
{
  /** @var string */
  public $etags;
  /** @var string */
  public $kind;
  /** @var string */
  public $productId;
  /** @var string */
  public $productName;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $skuId;
  /** @var string */
  public $skuName;
  /** @var string */
  public $userId;

  /** @param string */
  public function setEtags($etags)
  {
    $this->etags = $etags;
  }
  /** @return string */
  public function getEtags()
  {
    return $this->etags;
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
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /** @return string */
  public function getProductName()
  {
    return $this->productName;
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
  public function setSkuId($skuId)
  {
    $this->skuId = $skuId;
  }
  /** @return string */
  public function getSkuId()
  {
    return $this->skuId;
  }
  /** @param string */
  public function setSkuName($skuName)
  {
    $this->skuName = $skuName;
  }
  /** @return string */
  public function getSkuName()
  {
    return $this->skuName;
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

class LicenseAssignmentInsert extends \Google\Model
{
  /** @var string */
  public $userId;

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

class LicenseAssignmentList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var LicenseAssignment[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = LicenseAssignment::class;
  protected $itemsDataType = 'array';
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
  /** @param LicenseAssignment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LicenseAssignment[] */
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

class LicensingEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LicenseAssignment::class, 'Google_Service_Licensing_LicenseAssignment');
class_alias(LicenseAssignmentInsert::class, 'Google_Service_Licensing_LicenseAssignmentInsert');
class_alias(LicenseAssignmentList::class, 'Google_Service_Licensing_LicenseAssignmentList');
class_alias(LicensingEmpty::class, 'Google_Service_Licensing_LicensingEmpty');
