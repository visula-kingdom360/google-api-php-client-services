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

namespace Google\Service\Books;

class Annotation extends \Google\Collection
{
  /** @var string */
  public $afterSelectedText;
  /** @var string */
  public $beforeSelectedText;
  /** @var AnnotationClientVersionRanges */
  public $clientVersionRanges;
  /** @var string */
  public $created;
  /** @var AnnotationCurrentVersionRanges */
  public $currentVersionRanges;
  /** @var string */
  public $data;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $highlightStyle;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $layerId;
  /** @var AnnotationLayerSummary */
  public $layerSummary;
  /** @var string[] */
  public $pageIds;
  /** @var string */
  public $selectedText;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeId;
  protected $collection_key = 'pageIds';
  protected $clientVersionRangesType = AnnotationClientVersionRanges::class;
  protected $clientVersionRangesDataType = '';
  protected $currentVersionRangesType = AnnotationCurrentVersionRanges::class;
  protected $currentVersionRangesDataType = '';
  protected $layerSummaryType = AnnotationLayerSummary::class;
  protected $layerSummaryDataType = '';
  /** @param string */
  public function setAfterSelectedText($afterSelectedText)
  {
    $this->afterSelectedText = $afterSelectedText;
  }
  /** @return string */
  public function getAfterSelectedText()
  {
    return $this->afterSelectedText;
  }
  /** @param string */
  public function setBeforeSelectedText($beforeSelectedText)
  {
    $this->beforeSelectedText = $beforeSelectedText;
  }
  /** @return string */
  public function getBeforeSelectedText()
  {
    return $this->beforeSelectedText;
  }
  /** @param AnnotationClientVersionRanges */
  public function setClientVersionRanges(AnnotationClientVersionRanges $clientVersionRanges)
  {
    $this->clientVersionRanges = $clientVersionRanges;
  }
  /** @return AnnotationClientVersionRanges */
  public function getClientVersionRanges()
  {
    return $this->clientVersionRanges;
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
  /** @param AnnotationCurrentVersionRanges */
  public function setCurrentVersionRanges(AnnotationCurrentVersionRanges $currentVersionRanges)
  {
    $this->currentVersionRanges = $currentVersionRanges;
  }
  /** @return AnnotationCurrentVersionRanges */
  public function getCurrentVersionRanges()
  {
    return $this->currentVersionRanges;
  }
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string */
  public function setHighlightStyle($highlightStyle)
  {
    $this->highlightStyle = $highlightStyle;
  }
  /** @return string */
  public function getHighlightStyle()
  {
    return $this->highlightStyle;
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
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
  }
  /** @param AnnotationLayerSummary */
  public function setLayerSummary(AnnotationLayerSummary $layerSummary)
  {
    $this->layerSummary = $layerSummary;
  }
  /** @return AnnotationLayerSummary */
  public function getLayerSummary()
  {
    return $this->layerSummary;
  }
  /** @param string[] */
  public function setPageIds($pageIds)
  {
    $this->pageIds = $pageIds;
  }
  /** @return string[] */
  public function getPageIds()
  {
    return $this->pageIds;
  }
  /** @param string */
  public function setSelectedText($selectedText)
  {
    $this->selectedText = $selectedText;
  }
  /** @return string */
  public function getSelectedText()
  {
    return $this->selectedText;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class AnnotationClientVersionRanges extends \Google\Model
{
  /** @var BooksAnnotationsRange */
  public $cfiRange;
  /** @var string */
  public $contentVersion;
  /** @var BooksAnnotationsRange */
  public $gbImageRange;
  /** @var BooksAnnotationsRange */
  public $gbTextRange;
  /** @var BooksAnnotationsRange */
  public $imageCfiRange;
  protected $cfiRangeType = BooksAnnotationsRange::class;
  protected $cfiRangeDataType = '';
  protected $gbImageRangeType = BooksAnnotationsRange::class;
  protected $gbImageRangeDataType = '';
  protected $gbTextRangeType = BooksAnnotationsRange::class;
  protected $gbTextRangeDataType = '';
  protected $imageCfiRangeType = BooksAnnotationsRange::class;
  protected $imageCfiRangeDataType = '';
  /** @param BooksAnnotationsRange */
  public function setCfiRange(BooksAnnotationsRange $cfiRange)
  {
    $this->cfiRange = $cfiRange;
  }
  /** @return BooksAnnotationsRange */
  public function getCfiRange()
  {
    return $this->cfiRange;
  }
  /** @param string */
  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }
  /** @return string */
  public function getContentVersion()
  {
    return $this->contentVersion;
  }
  /** @param BooksAnnotationsRange */
  public function setGbImageRange(BooksAnnotationsRange $gbImageRange)
  {
    $this->gbImageRange = $gbImageRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbImageRange()
  {
    return $this->gbImageRange;
  }
  /** @param BooksAnnotationsRange */
  public function setGbTextRange(BooksAnnotationsRange $gbTextRange)
  {
    $this->gbTextRange = $gbTextRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbTextRange()
  {
    return $this->gbTextRange;
  }
  /** @param BooksAnnotationsRange */
  public function setImageCfiRange(BooksAnnotationsRange $imageCfiRange)
  {
    $this->imageCfiRange = $imageCfiRange;
  }
  /** @return BooksAnnotationsRange */
  public function getImageCfiRange()
  {
    return $this->imageCfiRange;
  }
}

class AnnotationCurrentVersionRanges extends \Google\Model
{
  /** @var BooksAnnotationsRange */
  public $cfiRange;
  /** @var string */
  public $contentVersion;
  /** @var BooksAnnotationsRange */
  public $gbImageRange;
  /** @var BooksAnnotationsRange */
  public $gbTextRange;
  /** @var BooksAnnotationsRange */
  public $imageCfiRange;
  protected $cfiRangeType = BooksAnnotationsRange::class;
  protected $cfiRangeDataType = '';
  protected $gbImageRangeType = BooksAnnotationsRange::class;
  protected $gbImageRangeDataType = '';
  protected $gbTextRangeType = BooksAnnotationsRange::class;
  protected $gbTextRangeDataType = '';
  protected $imageCfiRangeType = BooksAnnotationsRange::class;
  protected $imageCfiRangeDataType = '';
  /** @param BooksAnnotationsRange */
  public function setCfiRange(BooksAnnotationsRange $cfiRange)
  {
    $this->cfiRange = $cfiRange;
  }
  /** @return BooksAnnotationsRange */
  public function getCfiRange()
  {
    return $this->cfiRange;
  }
  /** @param string */
  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }
  /** @return string */
  public function getContentVersion()
  {
    return $this->contentVersion;
  }
  /** @param BooksAnnotationsRange */
  public function setGbImageRange(BooksAnnotationsRange $gbImageRange)
  {
    $this->gbImageRange = $gbImageRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbImageRange()
  {
    return $this->gbImageRange;
  }
  /** @param BooksAnnotationsRange */
  public function setGbTextRange(BooksAnnotationsRange $gbTextRange)
  {
    $this->gbTextRange = $gbTextRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbTextRange()
  {
    return $this->gbTextRange;
  }
  /** @param BooksAnnotationsRange */
  public function setImageCfiRange(BooksAnnotationsRange $imageCfiRange)
  {
    $this->imageCfiRange = $imageCfiRange;
  }
  /** @return BooksAnnotationsRange */
  public function getImageCfiRange()
  {
    return $this->imageCfiRange;
  }
}

class AnnotationLayerSummary extends \Google\Model
{
  /** @var int */
  public $allowedCharacterCount;
  /** @var string */
  public $limitType;
  /** @var int */
  public $remainingCharacterCount;

  /** @param int */
  public function setAllowedCharacterCount($allowedCharacterCount)
  {
    $this->allowedCharacterCount = $allowedCharacterCount;
  }
  /** @return int */
  public function getAllowedCharacterCount()
  {
    return $this->allowedCharacterCount;
  }
  /** @param string */
  public function setLimitType($limitType)
  {
    $this->limitType = $limitType;
  }
  /** @return string */
  public function getLimitType()
  {
    return $this->limitType;
  }
  /** @param int */
  public function setRemainingCharacterCount($remainingCharacterCount)
  {
    $this->remainingCharacterCount = $remainingCharacterCount;
  }
  /** @return int */
  public function getRemainingCharacterCount()
  {
    return $this->remainingCharacterCount;
  }
}

class Annotations extends \Google\Collection
{
  /** @var Annotation[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = Annotation::class;
  protected $itemsDataType = 'array';
  /** @param Annotation[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Annotation[] */
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
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class AnnotationsSummary extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var AnnotationsSummaryLayers[] */
  public $layers;
  protected $collection_key = 'layers';
  protected $layersType = AnnotationsSummaryLayers::class;
  protected $layersDataType = 'array';
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
  /** @param AnnotationsSummaryLayers[] */
  public function setLayers($layers)
  {
    $this->layers = $layers;
  }
  /** @return AnnotationsSummaryLayers[] */
  public function getLayers()
  {
    return $this->layers;
  }
}

class AnnotationsSummaryLayers extends \Google\Model
{
  /** @var int */
  public $allowedCharacterCount;
  /** @var string */
  public $layerId;
  /** @var string */
  public $limitType;
  /** @var int */
  public $remainingCharacterCount;
  /** @var string */
  public $updated;

  /** @param int */
  public function setAllowedCharacterCount($allowedCharacterCount)
  {
    $this->allowedCharacterCount = $allowedCharacterCount;
  }
  /** @return int */
  public function getAllowedCharacterCount()
  {
    return $this->allowedCharacterCount;
  }
  /** @param string */
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
  }
  /** @param string */
  public function setLimitType($limitType)
  {
    $this->limitType = $limitType;
  }
  /** @return string */
  public function getLimitType()
  {
    return $this->limitType;
  }
  /** @param int */
  public function setRemainingCharacterCount($remainingCharacterCount)
  {
    $this->remainingCharacterCount = $remainingCharacterCount;
  }
  /** @return int */
  public function getRemainingCharacterCount()
  {
    return $this->remainingCharacterCount;
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

class Annotationsdata extends \Google\Collection
{
  /** @var GeoAnnotationdata[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = GeoAnnotationdata::class;
  protected $itemsDataType = 'array';
  /** @param GeoAnnotationdata[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GeoAnnotationdata[] */
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
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class BooksAnnotationsRange extends \Google\Model
{
  /** @var string */
  public $endOffset;
  /** @var string */
  public $endPosition;
  /** @var string */
  public $startOffset;
  /** @var string */
  public $startPosition;

  /** @param string */
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /** @return string */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  /** @param string */
  public function setEndPosition($endPosition)
  {
    $this->endPosition = $endPosition;
  }
  /** @return string */
  public function getEndPosition()
  {
    return $this->endPosition;
  }
  /** @param string */
  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }
  /** @return string */
  public function getStartOffset()
  {
    return $this->startOffset;
  }
  /** @param string */
  public function setStartPosition($startPosition)
  {
    $this->startPosition = $startPosition;
  }
  /** @return string */
  public function getStartPosition()
  {
    return $this->startPosition;
  }
}

class BooksCloudloadingResource extends \Google\Model
{
  /** @var string */
  public $author;
  /** @var string */
  public $processingState;
  /** @var string */
  public $title;
  /** @var string */
  public $volumeId;

  /** @param string */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /** @return string */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param string */
  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }
  /** @return string */
  public function getProcessingState()
  {
    return $this->processingState;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class BooksEmpty extends \Google\Model
{
}

class BooksVolumesRecommendedRateResponse extends \Google\Model
{
  /** @var string */
  public $consistencyToken;
  protected $internal_gapi_mappings = [
        "consistencyToken" => "consistency_token",
  ];
  /** @param string */
  public function setConsistencyToken($consistencyToken)
  {
    $this->consistencyToken = $consistencyToken;
  }
  /** @return string */
  public function getConsistencyToken()
  {
    return $this->consistencyToken;
  }
}

class Bookshelf extends \Google\Model
{
  /** @var string */
  public $access;
  /** @var string */
  public $created;
  /** @var string */
  public $description;
  /** @var int */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $title;
  /** @var string */
  public $updated;
  /** @var int */
  public $volumeCount;
  /** @var string */
  public $volumesLastUpdated;

  /** @param string */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return string */
  public function getAccess()
  {
    return $this->access;
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
  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
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
  /** @param int */
  public function setVolumeCount($volumeCount)
  {
    $this->volumeCount = $volumeCount;
  }
  /** @return int */
  public function getVolumeCount()
  {
    return $this->volumeCount;
  }
  /** @param string */
  public function setVolumesLastUpdated($volumesLastUpdated)
  {
    $this->volumesLastUpdated = $volumesLastUpdated;
  }
  /** @return string */
  public function getVolumesLastUpdated()
  {
    return $this->volumesLastUpdated;
  }
}

class Bookshelves extends \Google\Collection
{
  /** @var Bookshelf[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Bookshelf::class;
  protected $itemsDataType = 'array';
  /** @param Bookshelf[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Bookshelf[] */
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

class Category extends \Google\Collection
{
  /** @var CategoryItems[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = CategoryItems::class;
  protected $itemsDataType = 'array';
  /** @param CategoryItems[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CategoryItems[] */
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

class CategoryItems extends \Google\Model
{
  /** @var string */
  public $badgeUrl;
  /** @var string */
  public $categoryId;
  /** @var string */
  public $name;

  /** @param string */
  public function setBadgeUrl($badgeUrl)
  {
    $this->badgeUrl = $badgeUrl;
  }
  /** @return string */
  public function getBadgeUrl()
  {
    return $this->badgeUrl;
  }
  /** @param string */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /** @return string */
  public function getCategoryId()
  {
    return $this->categoryId;
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

class ConcurrentAccessRestriction extends \Google\Model
{
  /** @var bool */
  public $deviceAllowed;
  /** @var string */
  public $kind;
  /** @var int */
  public $maxConcurrentDevices;
  /** @var string */
  public $message;
  /** @var string */
  public $nonce;
  /** @var string */
  public $reasonCode;
  /** @var bool */
  public $restricted;
  /** @var string */
  public $signature;
  /** @var string */
  public $source;
  /** @var int */
  public $timeWindowSeconds;
  /** @var string */
  public $volumeId;

  /** @param bool */
  public function setDeviceAllowed($deviceAllowed)
  {
    $this->deviceAllowed = $deviceAllowed;
  }
  /** @return bool */
  public function getDeviceAllowed()
  {
    return $this->deviceAllowed;
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
  public function setMaxConcurrentDevices($maxConcurrentDevices)
  {
    $this->maxConcurrentDevices = $maxConcurrentDevices;
  }
  /** @return int */
  public function getMaxConcurrentDevices()
  {
    return $this->maxConcurrentDevices;
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
  /** @param string */
  public function setNonce($nonce)
  {
    $this->nonce = $nonce;
  }
  /** @return string */
  public function getNonce()
  {
    return $this->nonce;
  }
  /** @param string */
  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }
  /** @return string */
  public function getReasonCode()
  {
    return $this->reasonCode;
  }
  /** @param bool */
  public function setRestricted($restricted)
  {
    $this->restricted = $restricted;
  }
  /** @return bool */
  public function getRestricted()
  {
    return $this->restricted;
  }
  /** @param string */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /** @return string */
  public function getSignature()
  {
    return $this->signature;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param int */
  public function setTimeWindowSeconds($timeWindowSeconds)
  {
    $this->timeWindowSeconds = $timeWindowSeconds;
  }
  /** @return int */
  public function getTimeWindowSeconds()
  {
    return $this->timeWindowSeconds;
  }
  /** @param string */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class DictionaryAnnotationdata extends \Google\Model
{
  /** @var string */
  public $annotationType;
  /** @var Dictlayerdata */
  public $data;
  /** @var string */
  public $encodedData;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $layerId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeId;
  protected $dataType = Dictlayerdata::class;
  protected $dataDataType = '';
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param Dictlayerdata */
  public function setData(Dictlayerdata $data)
  {
    $this->data = $data;
  }
  /** @return Dictlayerdata */
  public function getData()
  {
    return $this->data;
  }
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
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class Dictlayerdata extends \Google\Model
{
  /** @var DictlayerdataCommon */
  public $common;
  /** @var DictlayerdataDict */
  public $dict;
  /** @var string */
  public $kind;
  protected $commonType = DictlayerdataCommon::class;
  protected $commonDataType = '';
  protected $dictType = DictlayerdataDict::class;
  protected $dictDataType = '';
  /** @param DictlayerdataCommon */
  public function setCommon(DictlayerdataCommon $common)
  {
    $this->common = $common;
  }
  /** @return DictlayerdataCommon */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param DictlayerdataDict */
  public function setDict(DictlayerdataDict $dict)
  {
    $this->dict = $dict;
  }
  /** @return DictlayerdataDict */
  public function getDict()
  {
    return $this->dict;
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

class DictlayerdataCommon extends \Google\Model
{
  /** @var string */
  public $title;

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

class DictlayerdataDict extends \Google\Collection
{
  /** @var DictlayerdataDictSource */
  public $source;
  /** @var DictlayerdataDictWords[] */
  public $words;
  protected $collection_key = 'words';
  protected $sourceType = DictlayerdataDictSource::class;
  protected $sourceDataType = '';
  protected $wordsType = DictlayerdataDictWords::class;
  protected $wordsDataType = 'array';
  /** @param DictlayerdataDictSource */
  public function setSource(DictlayerdataDictSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param DictlayerdataDictWords[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return DictlayerdataDictWords[] */
  public function getWords()
  {
    return $this->words;
  }
}

class DictlayerdataDictSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWords extends \Google\Collection
{
  /** @var DictlayerdataDictWordsDerivatives[] */
  public $derivatives;
  /** @var DictlayerdataDictWordsExamples[] */
  public $examples;
  /** @var DictlayerdataDictWordsSenses[] */
  public $senses;
  /** @var DictlayerdataDictWordsSource */
  public $source;
  protected $collection_key = 'senses';
  protected $derivativesType = DictlayerdataDictWordsDerivatives::class;
  protected $derivativesDataType = 'array';
  protected $examplesType = DictlayerdataDictWordsExamples::class;
  protected $examplesDataType = 'array';
  protected $sensesType = DictlayerdataDictWordsSenses::class;
  protected $sensesDataType = 'array';
  protected $sourceType = DictlayerdataDictWordsSource::class;
  protected $sourceDataType = '';
  /** @param DictlayerdataDictWordsDerivatives[] */
  public function setDerivatives($derivatives)
  {
    $this->derivatives = $derivatives;
  }
  /** @return DictlayerdataDictWordsDerivatives[] */
  public function getDerivatives()
  {
    return $this->derivatives;
  }
  /** @param DictlayerdataDictWordsExamples[] */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /** @return DictlayerdataDictWordsExamples[] */
  public function getExamples()
  {
    return $this->examples;
  }
  /** @param DictlayerdataDictWordsSenses[] */
  public function setSenses($senses)
  {
    $this->senses = $senses;
  }
  /** @return DictlayerdataDictWordsSenses[] */
  public function getSenses()
  {
    return $this->senses;
  }
  /** @param DictlayerdataDictWordsSource */
  public function setSource(DictlayerdataDictWordsSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsSource */
  public function getSource()
  {
    return $this->source;
  }
}

class DictlayerdataDictWordsDerivatives extends \Google\Model
{
  /** @var DictlayerdataDictWordsDerivativesSource */
  public $source;
  /** @var string */
  public $text;
  protected $sourceType = DictlayerdataDictWordsDerivativesSource::class;
  protected $sourceDataType = '';
  /** @param DictlayerdataDictWordsDerivativesSource */
  public function setSource(DictlayerdataDictWordsDerivativesSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsDerivativesSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class DictlayerdataDictWordsDerivativesSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWordsExamples extends \Google\Model
{
  /** @var DictlayerdataDictWordsExamplesSource */
  public $source;
  /** @var string */
  public $text;
  protected $sourceType = DictlayerdataDictWordsExamplesSource::class;
  protected $sourceDataType = '';
  /** @param DictlayerdataDictWordsExamplesSource */
  public function setSource(DictlayerdataDictWordsExamplesSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsExamplesSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class DictlayerdataDictWordsExamplesSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWordsSenses extends \Google\Collection
{
  /** @var DictlayerdataDictWordsSensesConjugations[] */
  public $conjugations;
  /** @var DictlayerdataDictWordsSensesDefinitions[] */
  public $definitions;
  /** @var string */
  public $partOfSpeech;
  /** @var string */
  public $pronunciation;
  /** @var string */
  public $pronunciationUrl;
  /** @var DictlayerdataDictWordsSensesSource */
  public $source;
  /** @var string */
  public $syllabification;
  /** @var DictlayerdataDictWordsSensesSynonyms[] */
  public $synonyms;
  protected $collection_key = 'synonyms';
  protected $conjugationsType = DictlayerdataDictWordsSensesConjugations::class;
  protected $conjugationsDataType = 'array';
  protected $definitionsType = DictlayerdataDictWordsSensesDefinitions::class;
  protected $definitionsDataType = 'array';
  protected $sourceType = DictlayerdataDictWordsSensesSource::class;
  protected $sourceDataType = '';
  protected $synonymsType = DictlayerdataDictWordsSensesSynonyms::class;
  protected $synonymsDataType = 'array';
  /** @param DictlayerdataDictWordsSensesConjugations[] */
  public function setConjugations($conjugations)
  {
    $this->conjugations = $conjugations;
  }
  /** @return DictlayerdataDictWordsSensesConjugations[] */
  public function getConjugations()
  {
    return $this->conjugations;
  }
  /** @param DictlayerdataDictWordsSensesDefinitions[] */
  public function setDefinitions($definitions)
  {
    $this->definitions = $definitions;
  }
  /** @return DictlayerdataDictWordsSensesDefinitions[] */
  public function getDefinitions()
  {
    return $this->definitions;
  }
  /** @param string */
  public function setPartOfSpeech($partOfSpeech)
  {
    $this->partOfSpeech = $partOfSpeech;
  }
  /** @return string */
  public function getPartOfSpeech()
  {
    return $this->partOfSpeech;
  }
  /** @param string */
  public function setPronunciation($pronunciation)
  {
    $this->pronunciation = $pronunciation;
  }
  /** @return string */
  public function getPronunciation()
  {
    return $this->pronunciation;
  }
  /** @param string */
  public function setPronunciationUrl($pronunciationUrl)
  {
    $this->pronunciationUrl = $pronunciationUrl;
  }
  /** @return string */
  public function getPronunciationUrl()
  {
    return $this->pronunciationUrl;
  }
  /** @param DictlayerdataDictWordsSensesSource */
  public function setSource(DictlayerdataDictWordsSensesSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsSensesSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setSyllabification($syllabification)
  {
    $this->syllabification = $syllabification;
  }
  /** @return string */
  public function getSyllabification()
  {
    return $this->syllabification;
  }
  /** @param DictlayerdataDictWordsSensesSynonyms[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return DictlayerdataDictWordsSensesSynonyms[] */
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

class DictlayerdataDictWordsSensesConjugations extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class DictlayerdataDictWordsSensesDefinitions extends \Google\Collection
{
  /** @var string */
  public $definition;
  /** @var DictlayerdataDictWordsSensesDefinitionsExamples[] */
  public $examples;
  protected $collection_key = 'examples';
  protected $examplesType = DictlayerdataDictWordsSensesDefinitionsExamples::class;
  protected $examplesDataType = 'array';
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
  /** @param DictlayerdataDictWordsSensesDefinitionsExamples[] */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /** @return DictlayerdataDictWordsSensesDefinitionsExamples[] */
  public function getExamples()
  {
    return $this->examples;
  }
}

class DictlayerdataDictWordsSensesDefinitionsExamples extends \Google\Model
{
  /** @var DictlayerdataDictWordsSensesDefinitionsExamplesSource */
  public $source;
  /** @var string */
  public $text;
  protected $sourceType = DictlayerdataDictWordsSensesDefinitionsExamplesSource::class;
  protected $sourceDataType = '';
  /** @param DictlayerdataDictWordsSensesDefinitionsExamplesSource */
  public function setSource(DictlayerdataDictWordsSensesDefinitionsExamplesSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsSensesDefinitionsExamplesSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class DictlayerdataDictWordsSensesDefinitionsExamplesSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWordsSensesSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWordsSensesSynonyms extends \Google\Model
{
  /** @var DictlayerdataDictWordsSensesSynonymsSource */
  public $source;
  /** @var string */
  public $text;
  protected $sourceType = DictlayerdataDictWordsSensesSynonymsSource::class;
  protected $sourceDataType = '';
  /** @param DictlayerdataDictWordsSensesSynonymsSource */
  public function setSource(DictlayerdataDictWordsSensesSynonymsSource $source)
  {
    $this->source = $source;
  }
  /** @return DictlayerdataDictWordsSensesSynonymsSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class DictlayerdataDictWordsSensesSynonymsSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class DictlayerdataDictWordsSource extends \Google\Model
{
  /** @var string */
  public $attribution;
  /** @var string */
  public $url;

  /** @param string */
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  /** @return string */
  public function getAttribution()
  {
    return $this->attribution;
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

class Discoveryclusters extends \Google\Collection
{
  /** @var DiscoveryclustersClusters[] */
  public $clusters;
  /** @var string */
  public $kind;
  /** @var int */
  public $totalClusters;
  protected $collection_key = 'clusters';
  protected $clustersType = DiscoveryclustersClusters::class;
  protected $clustersDataType = 'array';
  /** @param DiscoveryclustersClusters[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return DiscoveryclustersClusters[] */
  public function getClusters()
  {
    return $this->clusters;
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
  public function setTotalClusters($totalClusters)
  {
    $this->totalClusters = $totalClusters;
  }
  /** @return int */
  public function getTotalClusters()
  {
    return $this->totalClusters;
  }
}

class DiscoveryclustersClusters extends \Google\Collection
{
  /** @var DiscoveryclustersClustersBannerWithContentContainer */
  public $bannerWithContentContainer;
  /** @var string */
  public $subTitle;
  /** @var string */
  public $title;
  /** @var int */
  public $totalVolumes;
  /** @var string */
  public $uid;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $internal_gapi_mappings = [
        "bannerWithContentContainer" => "banner_with_content_container",
  ];
  protected $bannerWithContentContainerType = DiscoveryclustersClustersBannerWithContentContainer::class;
  protected $bannerWithContentContainerDataType = '';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param DiscoveryclustersClustersBannerWithContentContainer */
  public function setBannerWithContentContainer(DiscoveryclustersClustersBannerWithContentContainer $bannerWithContentContainer)
  {
    $this->bannerWithContentContainer = $bannerWithContentContainer;
  }
  /** @return DiscoveryclustersClustersBannerWithContentContainer */
  public function getBannerWithContentContainer()
  {
    return $this->bannerWithContentContainer;
  }
  /** @param string */
  public function setSubTitle($subTitle)
  {
    $this->subTitle = $subTitle;
  }
  /** @return string */
  public function getSubTitle()
  {
    return $this->subTitle;
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
  /** @param int */
  public function setTotalVolumes($totalVolumes)
  {
    $this->totalVolumes = $totalVolumes;
  }
  /** @return int */
  public function getTotalVolumes()
  {
    return $this->totalVolumes;
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
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class DiscoveryclustersClustersBannerWithContentContainer extends \Google\Model
{
  /** @var string */
  public $fillColorArgb;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $maskColorArgb;
  /** @var string */
  public $moreButtonText;
  /** @var string */
  public $moreButtonUrl;
  /** @var string */
  public $textColorArgb;

  /** @param string */
  public function setFillColorArgb($fillColorArgb)
  {
    $this->fillColorArgb = $fillColorArgb;
  }
  /** @return string */
  public function getFillColorArgb()
  {
    return $this->fillColorArgb;
  }
  /** @param string */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /** @return string */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /** @param string */
  public function setMaskColorArgb($maskColorArgb)
  {
    $this->maskColorArgb = $maskColorArgb;
  }
  /** @return string */
  public function getMaskColorArgb()
  {
    return $this->maskColorArgb;
  }
  /** @param string */
  public function setMoreButtonText($moreButtonText)
  {
    $this->moreButtonText = $moreButtonText;
  }
  /** @return string */
  public function getMoreButtonText()
  {
    return $this->moreButtonText;
  }
  /** @param string */
  public function setMoreButtonUrl($moreButtonUrl)
  {
    $this->moreButtonUrl = $moreButtonUrl;
  }
  /** @return string */
  public function getMoreButtonUrl()
  {
    return $this->moreButtonUrl;
  }
  /** @param string */
  public function setTextColorArgb($textColorArgb)
  {
    $this->textColorArgb = $textColorArgb;
  }
  /** @return string */
  public function getTextColorArgb()
  {
    return $this->textColorArgb;
  }
}

class DownloadAccessRestriction extends \Google\Model
{
  /** @var bool */
  public $deviceAllowed;
  /** @var int */
  public $downloadsAcquired;
  /** @var bool */
  public $justAcquired;
  /** @var string */
  public $kind;
  /** @var int */
  public $maxDownloadDevices;
  /** @var string */
  public $message;
  /** @var string */
  public $nonce;
  /** @var string */
  public $reasonCode;
  /** @var bool */
  public $restricted;
  /** @var string */
  public $signature;
  /** @var string */
  public $source;
  /** @var string */
  public $volumeId;

  /** @param bool */
  public function setDeviceAllowed($deviceAllowed)
  {
    $this->deviceAllowed = $deviceAllowed;
  }
  /** @return bool */
  public function getDeviceAllowed()
  {
    return $this->deviceAllowed;
  }
  /** @param int */
  public function setDownloadsAcquired($downloadsAcquired)
  {
    $this->downloadsAcquired = $downloadsAcquired;
  }
  /** @return int */
  public function getDownloadsAcquired()
  {
    return $this->downloadsAcquired;
  }
  /** @param bool */
  public function setJustAcquired($justAcquired)
  {
    $this->justAcquired = $justAcquired;
  }
  /** @return bool */
  public function getJustAcquired()
  {
    return $this->justAcquired;
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
  public function setMaxDownloadDevices($maxDownloadDevices)
  {
    $this->maxDownloadDevices = $maxDownloadDevices;
  }
  /** @return int */
  public function getMaxDownloadDevices()
  {
    return $this->maxDownloadDevices;
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
  /** @param string */
  public function setNonce($nonce)
  {
    $this->nonce = $nonce;
  }
  /** @return string */
  public function getNonce()
  {
    return $this->nonce;
  }
  /** @param string */
  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }
  /** @return string */
  public function getReasonCode()
  {
    return $this->reasonCode;
  }
  /** @param bool */
  public function setRestricted($restricted)
  {
    $this->restricted = $restricted;
  }
  /** @return bool */
  public function getRestricted()
  {
    return $this->restricted;
  }
  /** @param string */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /** @return string */
  public function getSignature()
  {
    return $this->signature;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class DownloadAccesses extends \Google\Collection
{
  /** @var DownloadAccessRestriction[] */
  public $downloadAccessList;
  /** @var string */
  public $kind;
  protected $collection_key = 'downloadAccessList';
  protected $downloadAccessListType = DownloadAccessRestriction::class;
  protected $downloadAccessListDataType = 'array';
  /** @param DownloadAccessRestriction[] */
  public function setDownloadAccessList($downloadAccessList)
  {
    $this->downloadAccessList = $downloadAccessList;
  }
  /** @return DownloadAccessRestriction[] */
  public function getDownloadAccessList()
  {
    return $this->downloadAccessList;
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

class FamilyInfo extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var FamilyInfoMembership */
  public $membership;
  protected $membershipType = FamilyInfoMembership::class;
  protected $membershipDataType = '';
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
  /** @param FamilyInfoMembership */
  public function setMembership(FamilyInfoMembership $membership)
  {
    $this->membership = $membership;
  }
  /** @return FamilyInfoMembership */
  public function getMembership()
  {
    return $this->membership;
  }
}

class FamilyInfoMembership extends \Google\Model
{
  /** @var string */
  public $acquirePermission;
  /** @var string */
  public $ageGroup;
  /** @var string */
  public $allowedMaturityRating;
  /** @var bool */
  public $isInFamily;
  /** @var string */
  public $role;

  /** @param string */
  public function setAcquirePermission($acquirePermission)
  {
    $this->acquirePermission = $acquirePermission;
  }
  /** @return string */
  public function getAcquirePermission()
  {
    return $this->acquirePermission;
  }
  /** @param string */
  public function setAgeGroup($ageGroup)
  {
    $this->ageGroup = $ageGroup;
  }
  /** @return string */
  public function getAgeGroup()
  {
    return $this->ageGroup;
  }
  /** @param string */
  public function setAllowedMaturityRating($allowedMaturityRating)
  {
    $this->allowedMaturityRating = $allowedMaturityRating;
  }
  /** @return string */
  public function getAllowedMaturityRating()
  {
    return $this->allowedMaturityRating;
  }
  /** @param bool */
  public function setIsInFamily($isInFamily)
  {
    $this->isInFamily = $isInFamily;
  }
  /** @return bool */
  public function getIsInFamily()
  {
    return $this->isInFamily;
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

class GeoAnnotationdata extends \Google\Model
{
  /** @var string */
  public $annotationType;
  /** @var Geolayerdata */
  public $data;
  /** @var string */
  public $encodedData;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $layerId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeId;
  protected $dataType = Geolayerdata::class;
  protected $dataDataType = '';
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param Geolayerdata */
  public function setData(Geolayerdata $data)
  {
    $this->data = $data;
  }
  /** @return Geolayerdata */
  public function getData()
  {
    return $this->data;
  }
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
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class Geolayerdata extends \Google\Model
{
  /** @var GeolayerdataCommon */
  public $common;
  /** @var GeolayerdataGeo */
  public $geo;
  /** @var string */
  public $kind;
  protected $commonType = GeolayerdataCommon::class;
  protected $commonDataType = '';
  protected $geoType = GeolayerdataGeo::class;
  protected $geoDataType = '';
  /** @param GeolayerdataCommon */
  public function setCommon(GeolayerdataCommon $common)
  {
    $this->common = $common;
  }
  /** @return GeolayerdataCommon */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param GeolayerdataGeo */
  public function setGeo(GeolayerdataGeo $geo)
  {
    $this->geo = $geo;
  }
  /** @return GeolayerdataGeo */
  public function getGeo()
  {
    return $this->geo;
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

class GeolayerdataCommon extends \Google\Model
{
  /** @var string */
  public $lang;
  /** @var string */
  public $previewImageUrl;
  /** @var string */
  public $snippet;
  /** @var string */
  public $snippetUrl;
  /** @var string */
  public $title;

  /** @param string */
  public function setLang($lang)
  {
    $this->lang = $lang;
  }
  /** @return string */
  public function getLang()
  {
    return $this->lang;
  }
  /** @param string */
  public function setPreviewImageUrl($previewImageUrl)
  {
    $this->previewImageUrl = $previewImageUrl;
  }
  /** @return string */
  public function getPreviewImageUrl()
  {
    return $this->previewImageUrl;
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
  public function setSnippetUrl($snippetUrl)
  {
    $this->snippetUrl = $snippetUrl;
  }
  /** @return string */
  public function getSnippetUrl()
  {
    return $this->snippetUrl;
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

class GeolayerdataGeo extends \Google\Collection
{
  /** @var string[] */
  public $boundary;
  /** @var string */
  public $cachePolicy;
  /** @var string */
  public $countryCode;
  public $latitude;
  public $longitude;
  /** @var string */
  public $mapType;
  /** @var GeolayerdataGeoViewport */
  public $viewport;
  /** @var int */
  public $zoom;
  protected $collection_key = 'boundary';
  protected $viewportType = GeolayerdataGeoViewport::class;
  protected $viewportDataType = '';
  /** @param string[] */
  public function setBoundary($boundary)
  {
    $this->boundary = $boundary;
  }
  /** @return string[] */
  public function getBoundary()
  {
    return $this->boundary;
  }
  /** @param string */
  public function setCachePolicy($cachePolicy)
  {
    $this->cachePolicy = $cachePolicy;
  }
  /** @return string */
  public function getCachePolicy()
  {
    return $this->cachePolicy;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
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
  /** @param string */
  public function setMapType($mapType)
  {
    $this->mapType = $mapType;
  }
  /** @return string */
  public function getMapType()
  {
    return $this->mapType;
  }
  /** @param GeolayerdataGeoViewport */
  public function setViewport(GeolayerdataGeoViewport $viewport)
  {
    $this->viewport = $viewport;
  }
  /** @return GeolayerdataGeoViewport */
  public function getViewport()
  {
    return $this->viewport;
  }
  /** @param int */
  public function setZoom($zoom)
  {
    $this->zoom = $zoom;
  }
  /** @return int */
  public function getZoom()
  {
    return $this->zoom;
  }
}

class GeolayerdataGeoViewport extends \Google\Model
{
  /** @var GeolayerdataGeoViewportHi */
  public $hi;
  /** @var GeolayerdataGeoViewportLo */
  public $lo;
  protected $hiType = GeolayerdataGeoViewportHi::class;
  protected $hiDataType = '';
  protected $loType = GeolayerdataGeoViewportLo::class;
  protected $loDataType = '';
  /** @param GeolayerdataGeoViewportHi */
  public function setHi(GeolayerdataGeoViewportHi $hi)
  {
    $this->hi = $hi;
  }
  /** @return GeolayerdataGeoViewportHi */
  public function getHi()
  {
    return $this->hi;
  }
  /** @param GeolayerdataGeoViewportLo */
  public function setLo(GeolayerdataGeoViewportLo $lo)
  {
    $this->lo = $lo;
  }
  /** @return GeolayerdataGeoViewportLo */
  public function getLo()
  {
    return $this->lo;
  }
}

class GeolayerdataGeoViewportHi extends \Google\Model
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

class GeolayerdataGeoViewportLo extends \Google\Model
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

class Layersummaries extends \Google\Collection
{
  /** @var Layersummary[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = Layersummary::class;
  protected $itemsDataType = 'array';
  /** @param Layersummary[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Layersummary[] */
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
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class Layersummary extends \Google\Collection
{
  /** @var int */
  public $annotationCount;
  /** @var string[] */
  public $annotationTypes;
  /** @var string */
  public $annotationsDataLink;
  /** @var string */
  public $annotationsLink;
  /** @var string */
  public $contentVersion;
  /** @var int */
  public $dataCount;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $layerId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeAnnotationsVersion;
  /** @var string */
  public $volumeId;
  protected $collection_key = 'annotationTypes';
  /** @param int */
  public function setAnnotationCount($annotationCount)
  {
    $this->annotationCount = $annotationCount;
  }
  /** @return int */
  public function getAnnotationCount()
  {
    return $this->annotationCount;
  }
  /** @param string[] */
  public function setAnnotationTypes($annotationTypes)
  {
    $this->annotationTypes = $annotationTypes;
  }
  /** @return string[] */
  public function getAnnotationTypes()
  {
    return $this->annotationTypes;
  }
  /** @param string */
  public function setAnnotationsDataLink($annotationsDataLink)
  {
    $this->annotationsDataLink = $annotationsDataLink;
  }
  /** @return string */
  public function getAnnotationsDataLink()
  {
    return $this->annotationsDataLink;
  }
  /** @param string */
  public function setAnnotationsLink($annotationsLink)
  {
    $this->annotationsLink = $annotationsLink;
  }
  /** @return string */
  public function getAnnotationsLink()
  {
    return $this->annotationsLink;
  }
  /** @param string */
  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }
  /** @return string */
  public function getContentVersion()
  {
    return $this->contentVersion;
  }
  /** @param int */
  public function setDataCount($dataCount)
  {
    $this->dataCount = $dataCount;
  }
  /** @return int */
  public function getDataCount()
  {
    return $this->dataCount;
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
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
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
  public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
  {
    $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
  }
  /** @return string */
  public function getVolumeAnnotationsVersion()
  {
    return $this->volumeAnnotationsVersion;
  }
  /** @param string */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class Metadata extends \Google\Collection
{
  /** @var MetadataItems[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = MetadataItems::class;
  protected $itemsDataType = 'array';
  /** @param MetadataItems[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return MetadataItems[] */
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

class MetadataItems extends \Google\Model
{
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $encryptedKey;
  /** @var string */
  public $language;
  /** @var string */
  public $size;
  /** @var string */
  public $version;
  protected $internal_gapi_mappings = [
        "downloadUrl" => "download_url",
        "encryptedKey" => "encrypted_key",
  ];
  /** @param string */
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }
  /** @param string */
  public function setEncryptedKey($encryptedKey)
  {
    $this->encryptedKey = $encryptedKey;
  }
  /** @return string */
  public function getEncryptedKey()
  {
    return $this->encryptedKey;
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
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class Notification extends \Google\Collection
{
  /** @var string */
  public $body;
  /** @var string[] */
  public $crmExperimentIds;
  /** @var string */
  public $docId;
  /** @var string */
  public $docType;
  /** @var bool */
  public $dontShowNotification;
  /** @var string */
  public $iconUrl;
  /** @var bool */
  public $isDocumentMature;
  /** @var string */
  public $kind;
  /** @var string */
  public $notificationGroup;
  /** @var string */
  public $notificationType;
  /** @var string */
  public $pcampaignId;
  /** @var string */
  public $reason;
  /** @var bool */
  public $showNotificationSettingsAction;
  /** @var string */
  public $targetUrl;
  /** @var string */
  public $timeToExpireMs;
  /** @var string */
  public $title;
  protected $collection_key = 'crmExperimentIds';
  protected $internal_gapi_mappings = [
        "docId" => "doc_id",
        "docType" => "doc_type",
        "dontShowNotification" => "dont_show_notification",
        "isDocumentMature" => "is_document_mature",
        "notificationType" => "notification_type",
        "pcampaignId" => "pcampaign_id",
        "showNotificationSettingsAction" => "show_notification_settings_action",
  ];
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
  /** @param string[] */
  public function setCrmExperimentIds($crmExperimentIds)
  {
    $this->crmExperimentIds = $crmExperimentIds;
  }
  /** @return string[] */
  public function getCrmExperimentIds()
  {
    return $this->crmExperimentIds;
  }
  /** @param string */
  public function setDocId($docId)
  {
    $this->docId = $docId;
  }
  /** @return string */
  public function getDocId()
  {
    return $this->docId;
  }
  /** @param string */
  public function setDocType($docType)
  {
    $this->docType = $docType;
  }
  /** @return string */
  public function getDocType()
  {
    return $this->docType;
  }
  /** @param bool */
  public function setDontShowNotification($dontShowNotification)
  {
    $this->dontShowNotification = $dontShowNotification;
  }
  /** @return bool */
  public function getDontShowNotification()
  {
    return $this->dontShowNotification;
  }
  /** @param string */
  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }
  /** @return string */
  public function getIconUrl()
  {
    return $this->iconUrl;
  }
  /** @param bool */
  public function setIsDocumentMature($isDocumentMature)
  {
    $this->isDocumentMature = $isDocumentMature;
  }
  /** @return bool */
  public function getIsDocumentMature()
  {
    return $this->isDocumentMature;
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
  public function setNotificationGroup($notificationGroup)
  {
    $this->notificationGroup = $notificationGroup;
  }
  /** @return string */
  public function getNotificationGroup()
  {
    return $this->notificationGroup;
  }
  /** @param string */
  public function setNotificationType($notificationType)
  {
    $this->notificationType = $notificationType;
  }
  /** @return string */
  public function getNotificationType()
  {
    return $this->notificationType;
  }
  /** @param string */
  public function setPcampaignId($pcampaignId)
  {
    $this->pcampaignId = $pcampaignId;
  }
  /** @return string */
  public function getPcampaignId()
  {
    return $this->pcampaignId;
  }
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
  /** @param bool */
  public function setShowNotificationSettingsAction($showNotificationSettingsAction)
  {
    $this->showNotificationSettingsAction = $showNotificationSettingsAction;
  }
  /** @return bool */
  public function getShowNotificationSettingsAction()
  {
    return $this->showNotificationSettingsAction;
  }
  /** @param string */
  public function setTargetUrl($targetUrl)
  {
    $this->targetUrl = $targetUrl;
  }
  /** @return string */
  public function getTargetUrl()
  {
    return $this->targetUrl;
  }
  /** @param string */
  public function setTimeToExpireMs($timeToExpireMs)
  {
    $this->timeToExpireMs = $timeToExpireMs;
  }
  /** @return string */
  public function getTimeToExpireMs()
  {
    return $this->timeToExpireMs;
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

class Offers extends \Google\Collection
{
  /** @var OffersItems[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = OffersItems::class;
  protected $itemsDataType = 'array';
  /** @param OffersItems[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return OffersItems[] */
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

class OffersItems extends \Google\Collection
{
  /** @var string */
  public $artUrl;
  /** @var string */
  public $gservicesKey;
  /** @var string */
  public $id;
  /** @var OffersItemsItems[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = OffersItemsItems::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setArtUrl($artUrl)
  {
    $this->artUrl = $artUrl;
  }
  /** @return string */
  public function getArtUrl()
  {
    return $this->artUrl;
  }
  /** @param string */
  public function setGservicesKey($gservicesKey)
  {
    $this->gservicesKey = $gservicesKey;
  }
  /** @return string */
  public function getGservicesKey()
  {
    return $this->gservicesKey;
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
  /** @param OffersItemsItems[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return OffersItemsItems[] */
  public function getItems()
  {
    return $this->items;
  }
}

class OffersItemsItems extends \Google\Model
{
  /** @var string */
  public $author;
  /** @var string */
  public $canonicalVolumeLink;
  /** @var string */
  public $coverUrl;
  /** @var string */
  public $description;
  /** @var string */
  public $title;
  /** @var string */
  public $volumeId;

  /** @param string */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /** @return string */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param string */
  public function setCanonicalVolumeLink($canonicalVolumeLink)
  {
    $this->canonicalVolumeLink = $canonicalVolumeLink;
  }
  /** @return string */
  public function getCanonicalVolumeLink()
  {
    return $this->canonicalVolumeLink;
  }
  /** @param string */
  public function setCoverUrl($coverUrl)
  {
    $this->coverUrl = $coverUrl;
  }
  /** @return string */
  public function getCoverUrl()
  {
    return $this->coverUrl;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class ReadingPosition extends \Google\Model
{
  /** @var string */
  public $epubCfiPosition;
  /** @var string */
  public $gbImagePosition;
  /** @var string */
  public $gbTextPosition;
  /** @var string */
  public $kind;
  /** @var string */
  public $pdfPosition;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeId;

  /** @param string */
  public function setEpubCfiPosition($epubCfiPosition)
  {
    $this->epubCfiPosition = $epubCfiPosition;
  }
  /** @return string */
  public function getEpubCfiPosition()
  {
    return $this->epubCfiPosition;
  }
  /** @param string */
  public function setGbImagePosition($gbImagePosition)
  {
    $this->gbImagePosition = $gbImagePosition;
  }
  /** @return string */
  public function getGbImagePosition()
  {
    return $this->gbImagePosition;
  }
  /** @param string */
  public function setGbTextPosition($gbTextPosition)
  {
    $this->gbTextPosition = $gbTextPosition;
  }
  /** @return string */
  public function getGbTextPosition()
  {
    return $this->gbTextPosition;
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
  public function setPdfPosition($pdfPosition)
  {
    $this->pdfPosition = $pdfPosition;
  }
  /** @return string */
  public function getPdfPosition()
  {
    return $this->pdfPosition;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class RequestAccessData extends \Google\Model
{
  /** @var ConcurrentAccessRestriction */
  public $concurrentAccess;
  /** @var DownloadAccessRestriction */
  public $downloadAccess;
  /** @var string */
  public $kind;
  protected $concurrentAccessType = ConcurrentAccessRestriction::class;
  protected $concurrentAccessDataType = '';
  protected $downloadAccessType = DownloadAccessRestriction::class;
  protected $downloadAccessDataType = '';
  /** @param ConcurrentAccessRestriction */
  public function setConcurrentAccess(ConcurrentAccessRestriction $concurrentAccess)
  {
    $this->concurrentAccess = $concurrentAccess;
  }
  /** @return ConcurrentAccessRestriction */
  public function getConcurrentAccess()
  {
    return $this->concurrentAccess;
  }
  /** @param DownloadAccessRestriction */
  public function setDownloadAccess(DownloadAccessRestriction $downloadAccess)
  {
    $this->downloadAccess = $downloadAccess;
  }
  /** @return DownloadAccessRestriction */
  public function getDownloadAccess()
  {
    return $this->downloadAccess;
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

class Review extends \Google\Model
{
  /** @var ReviewAuthor */
  public $author;
  /** @var string */
  public $content;
  /** @var string */
  public $date;
  /** @var string */
  public $fullTextUrl;
  /** @var string */
  public $kind;
  /** @var string */
  public $rating;
  /** @var ReviewSource */
  public $source;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  /** @var string */
  public $volumeId;
  protected $authorType = ReviewAuthor::class;
  protected $authorDataType = '';
  protected $sourceType = ReviewSource::class;
  protected $sourceDataType = '';
  /** @param ReviewAuthor */
  public function setAuthor(ReviewAuthor $author)
  {
    $this->author = $author;
  }
  /** @return ReviewAuthor */
  public function getAuthor()
  {
    return $this->author;
  }
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
  public function setDate($date)
  {
    $this->date = $date;
  }
  /** @return string */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setFullTextUrl($fullTextUrl)
  {
    $this->fullTextUrl = $fullTextUrl;
  }
  /** @return string */
  public function getFullTextUrl()
  {
    return $this->fullTextUrl;
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
  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  /** @return string */
  public function getRating()
  {
    return $this->rating;
  }
  /** @param ReviewSource */
  public function setSource(ReviewSource $source)
  {
    $this->source = $source;
  }
  /** @return ReviewSource */
  public function getSource()
  {
    return $this->source;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class ReviewAuthor extends \Google\Model
{
  /** @var string */
  public $displayName;

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
}

class ReviewSource extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $extraDescription;
  /** @var string */
  public $url;

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
  public function setExtraDescription($extraDescription)
  {
    $this->extraDescription = $extraDescription;
  }
  /** @return string */
  public function getExtraDescription()
  {
    return $this->extraDescription;
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

class Series extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var SeriesSeries[] */
  public $series;
  protected $collection_key = 'series';
  protected $seriesType = SeriesSeries::class;
  protected $seriesDataType = 'array';
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
  /** @param SeriesSeries[] */
  public function setSeries($series)
  {
    $this->series = $series;
  }
  /** @return SeriesSeries[] */
  public function getSeries()
  {
    return $this->series;
  }
}

class SeriesSeries extends \Google\Model
{
  /** @var string */
  public $bannerImageUrl;
  /** @var bool */
  public $eligibleForSubscription;
  /** @var string */
  public $imageUrl;
  /** @var bool */
  public $isComplete;
  /** @var string */
  public $seriesFormatType;
  /** @var string */
  public $seriesId;
  /** @var SeriesSeriesSeriesSubscriptionReleaseInfo */
  public $seriesSubscriptionReleaseInfo;
  /** @var string */
  public $seriesType;
  /** @var string */
  public $subscriptionId;
  /** @var string */
  public $title;
  protected $seriesSubscriptionReleaseInfoType = SeriesSeriesSeriesSubscriptionReleaseInfo::class;
  protected $seriesSubscriptionReleaseInfoDataType = '';
  /** @param string */
  public function setBannerImageUrl($bannerImageUrl)
  {
    $this->bannerImageUrl = $bannerImageUrl;
  }
  /** @return string */
  public function getBannerImageUrl()
  {
    return $this->bannerImageUrl;
  }
  /** @param bool */
  public function setEligibleForSubscription($eligibleForSubscription)
  {
    $this->eligibleForSubscription = $eligibleForSubscription;
  }
  /** @return bool */
  public function getEligibleForSubscription()
  {
    return $this->eligibleForSubscription;
  }
  /** @param string */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /** @return string */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /** @param bool */
  public function setIsComplete($isComplete)
  {
    $this->isComplete = $isComplete;
  }
  /** @return bool */
  public function getIsComplete()
  {
    return $this->isComplete;
  }
  /** @param string */
  public function setSeriesFormatType($seriesFormatType)
  {
    $this->seriesFormatType = $seriesFormatType;
  }
  /** @return string */
  public function getSeriesFormatType()
  {
    return $this->seriesFormatType;
  }
  /** @param string */
  public function setSeriesId($seriesId)
  {
    $this->seriesId = $seriesId;
  }
  /** @return string */
  public function getSeriesId()
  {
    return $this->seriesId;
  }
  /** @param SeriesSeriesSeriesSubscriptionReleaseInfo */
  public function setSeriesSubscriptionReleaseInfo(SeriesSeriesSeriesSubscriptionReleaseInfo $seriesSubscriptionReleaseInfo)
  {
    $this->seriesSubscriptionReleaseInfo = $seriesSubscriptionReleaseInfo;
  }
  /** @return SeriesSeriesSeriesSubscriptionReleaseInfo */
  public function getSeriesSubscriptionReleaseInfo()
  {
    return $this->seriesSubscriptionReleaseInfo;
  }
  /** @param string */
  public function setSeriesType($seriesType)
  {
    $this->seriesType = $seriesType;
  }
  /** @return string */
  public function getSeriesType()
  {
    return $this->seriesType;
  }
  /** @param string */
  public function setSubscriptionId($subscriptionId)
  {
    $this->subscriptionId = $subscriptionId;
  }
  /** @return string */
  public function getSubscriptionId()
  {
    return $this->subscriptionId;
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

class SeriesSeriesSeriesSubscriptionReleaseInfo extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo */
  public $currentReleaseInfo;
  /** @var SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo */
  public $nextReleaseInfo;
  /** @var string */
  public $seriesSubscriptionType;
  protected $currentReleaseInfoType = SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo::class;
  protected $currentReleaseInfoDataType = '';
  protected $nextReleaseInfoType = SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo::class;
  protected $nextReleaseInfoDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
  }
  /** @param SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo */
  public function setCurrentReleaseInfo(SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo $currentReleaseInfo)
  {
    $this->currentReleaseInfo = $currentReleaseInfo;
  }
  /** @return SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo */
  public function getCurrentReleaseInfo()
  {
    return $this->currentReleaseInfo;
  }
  /** @param SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo */
  public function setNextReleaseInfo(SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo $nextReleaseInfo)
  {
    $this->nextReleaseInfo = $nextReleaseInfo;
  }
  /** @return SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo */
  public function getNextReleaseInfo()
  {
    return $this->nextReleaseInfo;
  }
  /** @param string */
  public function setSeriesSubscriptionType($seriesSubscriptionType)
  {
    $this->seriesSubscriptionType = $seriesSubscriptionType;
  }
  /** @return string */
  public function getSeriesSubscriptionType()
  {
    return $this->seriesSubscriptionType;
  }
}

class SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo extends \Google\Model
{
  public $amountInMicros;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $releaseNumber;
  /** @var string */
  public $releaseTime;

  public function setAmountInMicros($amountInMicros)
  {
    $this->amountInMicros = $amountInMicros;
  }
  public function getAmountInMicros()
  {
    return $this->amountInMicros;
  }
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
  /** @param string */
  public function setReleaseNumber($releaseNumber)
  {
    $this->releaseNumber = $releaseNumber;
  }
  /** @return string */
  public function getReleaseNumber()
  {
    return $this->releaseNumber;
  }
  /** @param string */
  public function setReleaseTime($releaseTime)
  {
    $this->releaseTime = $releaseTime;
  }
  /** @return string */
  public function getReleaseTime()
  {
    return $this->releaseTime;
  }
}

class SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo extends \Google\Model
{
  public $amountInMicros;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $releaseNumber;
  /** @var string */
  public $releaseTime;

  public function setAmountInMicros($amountInMicros)
  {
    $this->amountInMicros = $amountInMicros;
  }
  public function getAmountInMicros()
  {
    return $this->amountInMicros;
  }
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
  /** @param string */
  public function setReleaseNumber($releaseNumber)
  {
    $this->releaseNumber = $releaseNumber;
  }
  /** @return string */
  public function getReleaseNumber()
  {
    return $this->releaseNumber;
  }
  /** @param string */
  public function setReleaseTime($releaseTime)
  {
    $this->releaseTime = $releaseTime;
  }
  /** @return string */
  public function getReleaseTime()
  {
    return $this->releaseTime;
  }
}

class Seriesmembership extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Volume[] */
  public $member;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'member';
  protected $memberType = Volume::class;
  protected $memberDataType = 'array';
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
  /** @param Volume[] */
  public function setMember($member)
  {
    $this->member = $member;
  }
  /** @return Volume[] */
  public function getMember()
  {
    return $this->member;
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

class Usersettings extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var UsersettingsNotesExport */
  public $notesExport;
  /** @var UsersettingsNotification */
  public $notification;
  protected $notesExportType = UsersettingsNotesExport::class;
  protected $notesExportDataType = '';
  protected $notificationType = UsersettingsNotification::class;
  protected $notificationDataType = '';
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
  /** @param UsersettingsNotesExport */
  public function setNotesExport(UsersettingsNotesExport $notesExport)
  {
    $this->notesExport = $notesExport;
  }
  /** @return UsersettingsNotesExport */
  public function getNotesExport()
  {
    return $this->notesExport;
  }
  /** @param UsersettingsNotification */
  public function setNotification(UsersettingsNotification $notification)
  {
    $this->notification = $notification;
  }
  /** @return UsersettingsNotification */
  public function getNotification()
  {
    return $this->notification;
  }
}

class UsersettingsNotesExport extends \Google\Model
{
  /** @var string */
  public $folderName;
  /** @var bool */
  public $isEnabled;

  /** @param string */
  public function setFolderName($folderName)
  {
    $this->folderName = $folderName;
  }
  /** @return string */
  public function getFolderName()
  {
    return $this->folderName;
  }
  /** @param bool */
  public function setIsEnabled($isEnabled)
  {
    $this->isEnabled = $isEnabled;
  }
  /** @return bool */
  public function getIsEnabled()
  {
    return $this->isEnabled;
  }
}

class UsersettingsNotification extends \Google\Model
{
  /** @var UsersettingsNotificationMatchMyInterests */
  public $matchMyInterests;
  /** @var UsersettingsNotificationMoreFromAuthors */
  public $moreFromAuthors;
  /** @var UsersettingsNotificationMoreFromSeries */
  public $moreFromSeries;
  /** @var UsersettingsNotificationPriceDrop */
  public $priceDrop;
  /** @var UsersettingsNotificationRewardExpirations */
  public $rewardExpirations;
  protected $matchMyInterestsType = UsersettingsNotificationMatchMyInterests::class;
  protected $matchMyInterestsDataType = '';
  protected $moreFromAuthorsType = UsersettingsNotificationMoreFromAuthors::class;
  protected $moreFromAuthorsDataType = '';
  protected $moreFromSeriesType = UsersettingsNotificationMoreFromSeries::class;
  protected $moreFromSeriesDataType = '';
  protected $priceDropType = UsersettingsNotificationPriceDrop::class;
  protected $priceDropDataType = '';
  protected $rewardExpirationsType = UsersettingsNotificationRewardExpirations::class;
  protected $rewardExpirationsDataType = '';
  /** @param UsersettingsNotificationMatchMyInterests */
  public function setMatchMyInterests(UsersettingsNotificationMatchMyInterests $matchMyInterests)
  {
    $this->matchMyInterests = $matchMyInterests;
  }
  /** @return UsersettingsNotificationMatchMyInterests */
  public function getMatchMyInterests()
  {
    return $this->matchMyInterests;
  }
  /** @param UsersettingsNotificationMoreFromAuthors */
  public function setMoreFromAuthors(UsersettingsNotificationMoreFromAuthors $moreFromAuthors)
  {
    $this->moreFromAuthors = $moreFromAuthors;
  }
  /** @return UsersettingsNotificationMoreFromAuthors */
  public function getMoreFromAuthors()
  {
    return $this->moreFromAuthors;
  }
  /** @param UsersettingsNotificationMoreFromSeries */
  public function setMoreFromSeries(UsersettingsNotificationMoreFromSeries $moreFromSeries)
  {
    $this->moreFromSeries = $moreFromSeries;
  }
  /** @return UsersettingsNotificationMoreFromSeries */
  public function getMoreFromSeries()
  {
    return $this->moreFromSeries;
  }
  /** @param UsersettingsNotificationPriceDrop */
  public function setPriceDrop(UsersettingsNotificationPriceDrop $priceDrop)
  {
    $this->priceDrop = $priceDrop;
  }
  /** @return UsersettingsNotificationPriceDrop */
  public function getPriceDrop()
  {
    return $this->priceDrop;
  }
  /** @param UsersettingsNotificationRewardExpirations */
  public function setRewardExpirations(UsersettingsNotificationRewardExpirations $rewardExpirations)
  {
    $this->rewardExpirations = $rewardExpirations;
  }
  /** @return UsersettingsNotificationRewardExpirations */
  public function getRewardExpirations()
  {
    return $this->rewardExpirations;
  }
}

class UsersettingsNotificationMatchMyInterests extends \Google\Model
{
  /** @var string */
  public $optedState;
  protected $internal_gapi_mappings = [
        "optedState" => "opted_state",
  ];
  /** @param string */
  public function setOptedState($optedState)
  {
    $this->optedState = $optedState;
  }
  /** @return string */
  public function getOptedState()
  {
    return $this->optedState;
  }
}

class UsersettingsNotificationMoreFromAuthors extends \Google\Model
{
  /** @var string */
  public $optedState;
  protected $internal_gapi_mappings = [
        "optedState" => "opted_state",
  ];
  /** @param string */
  public function setOptedState($optedState)
  {
    $this->optedState = $optedState;
  }
  /** @return string */
  public function getOptedState()
  {
    return $this->optedState;
  }
}

class UsersettingsNotificationMoreFromSeries extends \Google\Model
{
  /** @var string */
  public $optedState;
  protected $internal_gapi_mappings = [
        "optedState" => "opted_state",
  ];
  /** @param string */
  public function setOptedState($optedState)
  {
    $this->optedState = $optedState;
  }
  /** @return string */
  public function getOptedState()
  {
    return $this->optedState;
  }
}

class UsersettingsNotificationPriceDrop extends \Google\Model
{
  /** @var string */
  public $optedState;
  protected $internal_gapi_mappings = [
        "optedState" => "opted_state",
  ];
  /** @param string */
  public function setOptedState($optedState)
  {
    $this->optedState = $optedState;
  }
  /** @return string */
  public function getOptedState()
  {
    return $this->optedState;
  }
}

class UsersettingsNotificationRewardExpirations extends \Google\Model
{
  /** @var string */
  public $optedState;
  protected $internal_gapi_mappings = [
        "optedState" => "opted_state",
  ];
  /** @param string */
  public function setOptedState($optedState)
  {
    $this->optedState = $optedState;
  }
  /** @return string */
  public function getOptedState()
  {
    return $this->optedState;
  }
}

class Volume extends \Google\Model
{
  /** @var VolumeAccessInfo */
  public $accessInfo;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var VolumeLayerInfo */
  public $layerInfo;
  /** @var VolumeRecommendedInfo */
  public $recommendedInfo;
  /** @var VolumeSaleInfo */
  public $saleInfo;
  /** @var VolumeSearchInfo */
  public $searchInfo;
  /** @var string */
  public $selfLink;
  /** @var VolumeUserInfo */
  public $userInfo;
  /** @var VolumeVolumeInfo */
  public $volumeInfo;
  protected $accessInfoType = VolumeAccessInfo::class;
  protected $accessInfoDataType = '';
  protected $layerInfoType = VolumeLayerInfo::class;
  protected $layerInfoDataType = '';
  protected $recommendedInfoType = VolumeRecommendedInfo::class;
  protected $recommendedInfoDataType = '';
  protected $saleInfoType = VolumeSaleInfo::class;
  protected $saleInfoDataType = '';
  protected $searchInfoType = VolumeSearchInfo::class;
  protected $searchInfoDataType = '';
  protected $userInfoType = VolumeUserInfo::class;
  protected $userInfoDataType = '';
  protected $volumeInfoType = VolumeVolumeInfo::class;
  protected $volumeInfoDataType = '';
  /** @param VolumeAccessInfo */
  public function setAccessInfo(VolumeAccessInfo $accessInfo)
  {
    $this->accessInfo = $accessInfo;
  }
  /** @return VolumeAccessInfo */
  public function getAccessInfo()
  {
    return $this->accessInfo;
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
  /** @param VolumeLayerInfo */
  public function setLayerInfo(VolumeLayerInfo $layerInfo)
  {
    $this->layerInfo = $layerInfo;
  }
  /** @return VolumeLayerInfo */
  public function getLayerInfo()
  {
    return $this->layerInfo;
  }
  /** @param VolumeRecommendedInfo */
  public function setRecommendedInfo(VolumeRecommendedInfo $recommendedInfo)
  {
    $this->recommendedInfo = $recommendedInfo;
  }
  /** @return VolumeRecommendedInfo */
  public function getRecommendedInfo()
  {
    return $this->recommendedInfo;
  }
  /** @param VolumeSaleInfo */
  public function setSaleInfo(VolumeSaleInfo $saleInfo)
  {
    $this->saleInfo = $saleInfo;
  }
  /** @return VolumeSaleInfo */
  public function getSaleInfo()
  {
    return $this->saleInfo;
  }
  /** @param VolumeSearchInfo */
  public function setSearchInfo(VolumeSearchInfo $searchInfo)
  {
    $this->searchInfo = $searchInfo;
  }
  /** @return VolumeSearchInfo */
  public function getSearchInfo()
  {
    return $this->searchInfo;
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
  /** @param VolumeUserInfo */
  public function setUserInfo(VolumeUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return VolumeUserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
  /** @param VolumeVolumeInfo */
  public function setVolumeInfo(VolumeVolumeInfo $volumeInfo)
  {
    $this->volumeInfo = $volumeInfo;
  }
  /** @return VolumeVolumeInfo */
  public function getVolumeInfo()
  {
    return $this->volumeInfo;
  }
}

class Volume2 extends \Google\Collection
{
  /** @var Volume[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Volume::class;
  protected $itemsDataType = 'array';
  /** @param Volume[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Volume[] */
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

class VolumeAccessInfo extends \Google\Model
{
  /** @var string */
  public $accessViewStatus;
  /** @var string */
  public $country;
  /** @var DownloadAccessRestriction */
  public $downloadAccess;
  /** @var string */
  public $driveImportedContentLink;
  /** @var bool */
  public $embeddable;
  /** @var VolumeAccessInfoEpub */
  public $epub;
  /** @var bool */
  public $explicitOfflineLicenseManagement;
  /** @var VolumeAccessInfoPdf */
  public $pdf;
  /** @var bool */
  public $publicDomain;
  /** @var bool */
  public $quoteSharingAllowed;
  /** @var string */
  public $textToSpeechPermission;
  /** @var string */
  public $viewOrderUrl;
  /** @var string */
  public $viewability;
  /** @var string */
  public $webReaderLink;
  protected $downloadAccessType = DownloadAccessRestriction::class;
  protected $downloadAccessDataType = '';
  protected $epubType = VolumeAccessInfoEpub::class;
  protected $epubDataType = '';
  protected $pdfType = VolumeAccessInfoPdf::class;
  protected $pdfDataType = '';
  /** @param string */
  public function setAccessViewStatus($accessViewStatus)
  {
    $this->accessViewStatus = $accessViewStatus;
  }
  /** @return string */
  public function getAccessViewStatus()
  {
    return $this->accessViewStatus;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param DownloadAccessRestriction */
  public function setDownloadAccess(DownloadAccessRestriction $downloadAccess)
  {
    $this->downloadAccess = $downloadAccess;
  }
  /** @return DownloadAccessRestriction */
  public function getDownloadAccess()
  {
    return $this->downloadAccess;
  }
  /** @param string */
  public function setDriveImportedContentLink($driveImportedContentLink)
  {
    $this->driveImportedContentLink = $driveImportedContentLink;
  }
  /** @return string */
  public function getDriveImportedContentLink()
  {
    return $this->driveImportedContentLink;
  }
  /** @param bool */
  public function setEmbeddable($embeddable)
  {
    $this->embeddable = $embeddable;
  }
  /** @return bool */
  public function getEmbeddable()
  {
    return $this->embeddable;
  }
  /** @param VolumeAccessInfoEpub */
  public function setEpub(VolumeAccessInfoEpub $epub)
  {
    $this->epub = $epub;
  }
  /** @return VolumeAccessInfoEpub */
  public function getEpub()
  {
    return $this->epub;
  }
  /** @param bool */
  public function setExplicitOfflineLicenseManagement($explicitOfflineLicenseManagement)
  {
    $this->explicitOfflineLicenseManagement = $explicitOfflineLicenseManagement;
  }
  /** @return bool */
  public function getExplicitOfflineLicenseManagement()
  {
    return $this->explicitOfflineLicenseManagement;
  }
  /** @param VolumeAccessInfoPdf */
  public function setPdf(VolumeAccessInfoPdf $pdf)
  {
    $this->pdf = $pdf;
  }
  /** @return VolumeAccessInfoPdf */
  public function getPdf()
  {
    return $this->pdf;
  }
  /** @param bool */
  public function setPublicDomain($publicDomain)
  {
    $this->publicDomain = $publicDomain;
  }
  /** @return bool */
  public function getPublicDomain()
  {
    return $this->publicDomain;
  }
  /** @param bool */
  public function setQuoteSharingAllowed($quoteSharingAllowed)
  {
    $this->quoteSharingAllowed = $quoteSharingAllowed;
  }
  /** @return bool */
  public function getQuoteSharingAllowed()
  {
    return $this->quoteSharingAllowed;
  }
  /** @param string */
  public function setTextToSpeechPermission($textToSpeechPermission)
  {
    $this->textToSpeechPermission = $textToSpeechPermission;
  }
  /** @return string */
  public function getTextToSpeechPermission()
  {
    return $this->textToSpeechPermission;
  }
  /** @param string */
  public function setViewOrderUrl($viewOrderUrl)
  {
    $this->viewOrderUrl = $viewOrderUrl;
  }
  /** @return string */
  public function getViewOrderUrl()
  {
    return $this->viewOrderUrl;
  }
  /** @param string */
  public function setViewability($viewability)
  {
    $this->viewability = $viewability;
  }
  /** @return string */
  public function getViewability()
  {
    return $this->viewability;
  }
  /** @param string */
  public function setWebReaderLink($webReaderLink)
  {
    $this->webReaderLink = $webReaderLink;
  }
  /** @return string */
  public function getWebReaderLink()
  {
    return $this->webReaderLink;
  }
}

class VolumeAccessInfoEpub extends \Google\Model
{
  /** @var string */
  public $acsTokenLink;
  /** @var string */
  public $downloadLink;
  /** @var bool */
  public $isAvailable;

  /** @param string */
  public function setAcsTokenLink($acsTokenLink)
  {
    $this->acsTokenLink = $acsTokenLink;
  }
  /** @return string */
  public function getAcsTokenLink()
  {
    return $this->acsTokenLink;
  }
  /** @param string */
  public function setDownloadLink($downloadLink)
  {
    $this->downloadLink = $downloadLink;
  }
  /** @return string */
  public function getDownloadLink()
  {
    return $this->downloadLink;
  }
  /** @param bool */
  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }
  /** @return bool */
  public function getIsAvailable()
  {
    return $this->isAvailable;
  }
}

class VolumeAccessInfoPdf extends \Google\Model
{
  /** @var string */
  public $acsTokenLink;
  /** @var string */
  public $downloadLink;
  /** @var bool */
  public $isAvailable;

  /** @param string */
  public function setAcsTokenLink($acsTokenLink)
  {
    $this->acsTokenLink = $acsTokenLink;
  }
  /** @return string */
  public function getAcsTokenLink()
  {
    return $this->acsTokenLink;
  }
  /** @param string */
  public function setDownloadLink($downloadLink)
  {
    $this->downloadLink = $downloadLink;
  }
  /** @return string */
  public function getDownloadLink()
  {
    return $this->downloadLink;
  }
  /** @param bool */
  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }
  /** @return bool */
  public function getIsAvailable()
  {
    return $this->isAvailable;
  }
}

class VolumeLayerInfo extends \Google\Collection
{
  /** @var VolumeLayerInfoLayers[] */
  public $layers;
  protected $collection_key = 'layers';
  protected $layersType = VolumeLayerInfoLayers::class;
  protected $layersDataType = 'array';
  /** @param VolumeLayerInfoLayers[] */
  public function setLayers($layers)
  {
    $this->layers = $layers;
  }
  /** @return VolumeLayerInfoLayers[] */
  public function getLayers()
  {
    return $this->layers;
  }
}

class VolumeLayerInfoLayers extends \Google\Model
{
  /** @var string */
  public $layerId;
  /** @var string */
  public $volumeAnnotationsVersion;

  /** @param string */
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
  }
  /** @param string */
  public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
  {
    $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
  }
  /** @return string */
  public function getVolumeAnnotationsVersion()
  {
    return $this->volumeAnnotationsVersion;
  }
}

class VolumeRecommendedInfo extends \Google\Model
{
  /** @var string */
  public $explanation;

  /** @param string */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /** @return string */
  public function getExplanation()
  {
    return $this->explanation;
  }
}

class VolumeSaleInfo extends \Google\Collection
{
  /** @var string */
  public $buyLink;
  /** @var string */
  public $country;
  /** @var bool */
  public $isEbook;
  /** @var VolumeSaleInfoListPrice */
  public $listPrice;
  /** @var VolumeSaleInfoOffers[] */
  public $offers;
  /** @var string */
  public $onSaleDate;
  /** @var VolumeSaleInfoRetailPrice */
  public $retailPrice;
  /** @var string */
  public $saleability;
  protected $collection_key = 'offers';
  protected $listPriceType = VolumeSaleInfoListPrice::class;
  protected $listPriceDataType = '';
  protected $offersType = VolumeSaleInfoOffers::class;
  protected $offersDataType = 'array';
  protected $retailPriceType = VolumeSaleInfoRetailPrice::class;
  protected $retailPriceDataType = '';
  /** @param string */
  public function setBuyLink($buyLink)
  {
    $this->buyLink = $buyLink;
  }
  /** @return string */
  public function getBuyLink()
  {
    return $this->buyLink;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param bool */
  public function setIsEbook($isEbook)
  {
    $this->isEbook = $isEbook;
  }
  /** @return bool */
  public function getIsEbook()
  {
    return $this->isEbook;
  }
  /** @param VolumeSaleInfoListPrice */
  public function setListPrice(VolumeSaleInfoListPrice $listPrice)
  {
    $this->listPrice = $listPrice;
  }
  /** @return VolumeSaleInfoListPrice */
  public function getListPrice()
  {
    return $this->listPrice;
  }
  /** @param VolumeSaleInfoOffers[] */
  public function setOffers($offers)
  {
    $this->offers = $offers;
  }
  /** @return VolumeSaleInfoOffers[] */
  public function getOffers()
  {
    return $this->offers;
  }
  /** @param string */
  public function setOnSaleDate($onSaleDate)
  {
    $this->onSaleDate = $onSaleDate;
  }
  /** @return string */
  public function getOnSaleDate()
  {
    return $this->onSaleDate;
  }
  /** @param VolumeSaleInfoRetailPrice */
  public function setRetailPrice(VolumeSaleInfoRetailPrice $retailPrice)
  {
    $this->retailPrice = $retailPrice;
  }
  /** @return VolumeSaleInfoRetailPrice */
  public function getRetailPrice()
  {
    return $this->retailPrice;
  }
  /** @param string */
  public function setSaleability($saleability)
  {
    $this->saleability = $saleability;
  }
  /** @return string */
  public function getSaleability()
  {
    return $this->saleability;
  }
}

class VolumeSaleInfoListPrice extends \Google\Model
{
  public $amount;
  /** @var string */
  public $currencyCode;

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
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
}

class VolumeSaleInfoOffers extends \Google\Model
{
  /** @var int */
  public $finskyOfferType;
  /** @var bool */
  public $giftable;
  /** @var VolumeSaleInfoOffersListPrice */
  public $listPrice;
  /** @var VolumeSaleInfoOffersRentalDuration */
  public $rentalDuration;
  /** @var VolumeSaleInfoOffersRetailPrice */
  public $retailPrice;
  protected $listPriceType = VolumeSaleInfoOffersListPrice::class;
  protected $listPriceDataType = '';
  protected $rentalDurationType = VolumeSaleInfoOffersRentalDuration::class;
  protected $rentalDurationDataType = '';
  protected $retailPriceType = VolumeSaleInfoOffersRetailPrice::class;
  protected $retailPriceDataType = '';
  /** @param int */
  public function setFinskyOfferType($finskyOfferType)
  {
    $this->finskyOfferType = $finskyOfferType;
  }
  /** @return int */
  public function getFinskyOfferType()
  {
    return $this->finskyOfferType;
  }
  /** @param bool */
  public function setGiftable($giftable)
  {
    $this->giftable = $giftable;
  }
  /** @return bool */
  public function getGiftable()
  {
    return $this->giftable;
  }
  /** @param VolumeSaleInfoOffersListPrice */
  public function setListPrice(VolumeSaleInfoOffersListPrice $listPrice)
  {
    $this->listPrice = $listPrice;
  }
  /** @return VolumeSaleInfoOffersListPrice */
  public function getListPrice()
  {
    return $this->listPrice;
  }
  /** @param VolumeSaleInfoOffersRentalDuration */
  public function setRentalDuration(VolumeSaleInfoOffersRentalDuration $rentalDuration)
  {
    $this->rentalDuration = $rentalDuration;
  }
  /** @return VolumeSaleInfoOffersRentalDuration */
  public function getRentalDuration()
  {
    return $this->rentalDuration;
  }
  /** @param VolumeSaleInfoOffersRetailPrice */
  public function setRetailPrice(VolumeSaleInfoOffersRetailPrice $retailPrice)
  {
    $this->retailPrice = $retailPrice;
  }
  /** @return VolumeSaleInfoOffersRetailPrice */
  public function getRetailPrice()
  {
    return $this->retailPrice;
  }
}

class VolumeSaleInfoOffersListPrice extends \Google\Model
{
  public $amountInMicros;
  /** @var string */
  public $currencyCode;

  public function setAmountInMicros($amountInMicros)
  {
    $this->amountInMicros = $amountInMicros;
  }
  public function getAmountInMicros()
  {
    return $this->amountInMicros;
  }
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
}

class VolumeSaleInfoOffersRentalDuration extends \Google\Model
{
  public $count;
  /** @var string */
  public $unit;

  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
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

class VolumeSaleInfoOffersRetailPrice extends \Google\Model
{
  public $amountInMicros;
  /** @var string */
  public $currencyCode;

  public function setAmountInMicros($amountInMicros)
  {
    $this->amountInMicros = $amountInMicros;
  }
  public function getAmountInMicros()
  {
    return $this->amountInMicros;
  }
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
}

class VolumeSaleInfoRetailPrice extends \Google\Model
{
  public $amount;
  /** @var string */
  public $currencyCode;

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
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
}

class VolumeSearchInfo extends \Google\Model
{
  /** @var string */
  public $textSnippet;

  /** @param string */
  public function setTextSnippet($textSnippet)
  {
    $this->textSnippet = $textSnippet;
  }
  /** @return string */
  public function getTextSnippet()
  {
    return $this->textSnippet;
  }
}

class VolumeUserInfo extends \Google\Model
{
  /** @var string */
  public $acquiredTime;
  /** @var int */
  public $acquisitionType;
  /** @var VolumeUserInfoCopy */
  public $copy;
  /** @var int */
  public $entitlementType;
  /** @var VolumeUserInfoFamilySharing */
  public $familySharing;
  /** @var bool */
  public $isFamilySharedFromUser;
  /** @var bool */
  public $isFamilySharedToUser;
  /** @var bool */
  public $isFamilySharingAllowed;
  /** @var bool */
  public $isFamilySharingDisabledByFop;
  /** @var bool */
  public $isInMyBooks;
  /** @var bool */
  public $isPreordered;
  /** @var bool */
  public $isPurchased;
  /** @var bool */
  public $isUploaded;
  /** @var ReadingPosition */
  public $readingPosition;
  /** @var VolumeUserInfoRentalPeriod */
  public $rentalPeriod;
  /** @var string */
  public $rentalState;
  /** @var Review */
  public $review;
  /** @var string */
  public $updated;
  /** @var VolumeUserInfoUserUploadedVolumeInfo */
  public $userUploadedVolumeInfo;
  protected $copyType = VolumeUserInfoCopy::class;
  protected $copyDataType = '';
  protected $familySharingType = VolumeUserInfoFamilySharing::class;
  protected $familySharingDataType = '';
  protected $readingPositionType = ReadingPosition::class;
  protected $readingPositionDataType = '';
  protected $rentalPeriodType = VolumeUserInfoRentalPeriod::class;
  protected $rentalPeriodDataType = '';
  protected $reviewType = Review::class;
  protected $reviewDataType = '';
  protected $userUploadedVolumeInfoType = VolumeUserInfoUserUploadedVolumeInfo::class;
  protected $userUploadedVolumeInfoDataType = '';
  /** @param string */
  public function setAcquiredTime($acquiredTime)
  {
    $this->acquiredTime = $acquiredTime;
  }
  /** @return string */
  public function getAcquiredTime()
  {
    return $this->acquiredTime;
  }
  /** @param int */
  public function setAcquisitionType($acquisitionType)
  {
    $this->acquisitionType = $acquisitionType;
  }
  /** @return int */
  public function getAcquisitionType()
  {
    return $this->acquisitionType;
  }
  /** @param VolumeUserInfoCopy */
  public function setCopy(VolumeUserInfoCopy $copy)
  {
    $this->copy = $copy;
  }
  /** @return VolumeUserInfoCopy */
  public function getCopy()
  {
    return $this->copy;
  }
  /** @param int */
  public function setEntitlementType($entitlementType)
  {
    $this->entitlementType = $entitlementType;
  }
  /** @return int */
  public function getEntitlementType()
  {
    return $this->entitlementType;
  }
  /** @param VolumeUserInfoFamilySharing */
  public function setFamilySharing(VolumeUserInfoFamilySharing $familySharing)
  {
    $this->familySharing = $familySharing;
  }
  /** @return VolumeUserInfoFamilySharing */
  public function getFamilySharing()
  {
    return $this->familySharing;
  }
  /** @param bool */
  public function setIsFamilySharedFromUser($isFamilySharedFromUser)
  {
    $this->isFamilySharedFromUser = $isFamilySharedFromUser;
  }
  /** @return bool */
  public function getIsFamilySharedFromUser()
  {
    return $this->isFamilySharedFromUser;
  }
  /** @param bool */
  public function setIsFamilySharedToUser($isFamilySharedToUser)
  {
    $this->isFamilySharedToUser = $isFamilySharedToUser;
  }
  /** @return bool */
  public function getIsFamilySharedToUser()
  {
    return $this->isFamilySharedToUser;
  }
  /** @param bool */
  public function setIsFamilySharingAllowed($isFamilySharingAllowed)
  {
    $this->isFamilySharingAllowed = $isFamilySharingAllowed;
  }
  /** @return bool */
  public function getIsFamilySharingAllowed()
  {
    return $this->isFamilySharingAllowed;
  }
  /** @param bool */
  public function setIsFamilySharingDisabledByFop($isFamilySharingDisabledByFop)
  {
    $this->isFamilySharingDisabledByFop = $isFamilySharingDisabledByFop;
  }
  /** @return bool */
  public function getIsFamilySharingDisabledByFop()
  {
    return $this->isFamilySharingDisabledByFop;
  }
  /** @param bool */
  public function setIsInMyBooks($isInMyBooks)
  {
    $this->isInMyBooks = $isInMyBooks;
  }
  /** @return bool */
  public function getIsInMyBooks()
  {
    return $this->isInMyBooks;
  }
  /** @param bool */
  public function setIsPreordered($isPreordered)
  {
    $this->isPreordered = $isPreordered;
  }
  /** @return bool */
  public function getIsPreordered()
  {
    return $this->isPreordered;
  }
  /** @param bool */
  public function setIsPurchased($isPurchased)
  {
    $this->isPurchased = $isPurchased;
  }
  /** @return bool */
  public function getIsPurchased()
  {
    return $this->isPurchased;
  }
  /** @param bool */
  public function setIsUploaded($isUploaded)
  {
    $this->isUploaded = $isUploaded;
  }
  /** @return bool */
  public function getIsUploaded()
  {
    return $this->isUploaded;
  }
  /** @param ReadingPosition */
  public function setReadingPosition(ReadingPosition $readingPosition)
  {
    $this->readingPosition = $readingPosition;
  }
  /** @return ReadingPosition */
  public function getReadingPosition()
  {
    return $this->readingPosition;
  }
  /** @param VolumeUserInfoRentalPeriod */
  public function setRentalPeriod(VolumeUserInfoRentalPeriod $rentalPeriod)
  {
    $this->rentalPeriod = $rentalPeriod;
  }
  /** @return VolumeUserInfoRentalPeriod */
  public function getRentalPeriod()
  {
    return $this->rentalPeriod;
  }
  /** @param string */
  public function setRentalState($rentalState)
  {
    $this->rentalState = $rentalState;
  }
  /** @return string */
  public function getRentalState()
  {
    return $this->rentalState;
  }
  /** @param Review */
  public function setReview(Review $review)
  {
    $this->review = $review;
  }
  /** @return Review */
  public function getReview()
  {
    return $this->review;
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
  /** @param VolumeUserInfoUserUploadedVolumeInfo */
  public function setUserUploadedVolumeInfo(VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo)
  {
    $this->userUploadedVolumeInfo = $userUploadedVolumeInfo;
  }
  /** @return VolumeUserInfoUserUploadedVolumeInfo */
  public function getUserUploadedVolumeInfo()
  {
    return $this->userUploadedVolumeInfo;
  }
}

class VolumeUserInfoCopy extends \Google\Model
{
  /** @var int */
  public $allowedCharacterCount;
  /** @var string */
  public $limitType;
  /** @var int */
  public $remainingCharacterCount;
  /** @var string */
  public $updated;

  /** @param int */
  public function setAllowedCharacterCount($allowedCharacterCount)
  {
    $this->allowedCharacterCount = $allowedCharacterCount;
  }
  /** @return int */
  public function getAllowedCharacterCount()
  {
    return $this->allowedCharacterCount;
  }
  /** @param string */
  public function setLimitType($limitType)
  {
    $this->limitType = $limitType;
  }
  /** @return string */
  public function getLimitType()
  {
    return $this->limitType;
  }
  /** @param int */
  public function setRemainingCharacterCount($remainingCharacterCount)
  {
    $this->remainingCharacterCount = $remainingCharacterCount;
  }
  /** @return int */
  public function getRemainingCharacterCount()
  {
    return $this->remainingCharacterCount;
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

class VolumeUserInfoFamilySharing extends \Google\Model
{
  /** @var string */
  public $familyRole;
  /** @var bool */
  public $isSharingAllowed;
  /** @var bool */
  public $isSharingDisabledByFop;

  /** @param string */
  public function setFamilyRole($familyRole)
  {
    $this->familyRole = $familyRole;
  }
  /** @return string */
  public function getFamilyRole()
  {
    return $this->familyRole;
  }
  /** @param bool */
  public function setIsSharingAllowed($isSharingAllowed)
  {
    $this->isSharingAllowed = $isSharingAllowed;
  }
  /** @return bool */
  public function getIsSharingAllowed()
  {
    return $this->isSharingAllowed;
  }
  /** @param bool */
  public function setIsSharingDisabledByFop($isSharingDisabledByFop)
  {
    $this->isSharingDisabledByFop = $isSharingDisabledByFop;
  }
  /** @return bool */
  public function getIsSharingDisabledByFop()
  {
    return $this->isSharingDisabledByFop;
  }
}

class VolumeUserInfoRentalPeriod extends \Google\Model
{
  /** @var string */
  public $endUtcSec;
  /** @var string */
  public $startUtcSec;

  /** @param string */
  public function setEndUtcSec($endUtcSec)
  {
    $this->endUtcSec = $endUtcSec;
  }
  /** @return string */
  public function getEndUtcSec()
  {
    return $this->endUtcSec;
  }
  /** @param string */
  public function setStartUtcSec($startUtcSec)
  {
    $this->startUtcSec = $startUtcSec;
  }
  /** @return string */
  public function getStartUtcSec()
  {
    return $this->startUtcSec;
  }
}

class VolumeUserInfoUserUploadedVolumeInfo extends \Google\Model
{
  /** @var string */
  public $processingState;

  /** @param string */
  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }
  /** @return string */
  public function getProcessingState()
  {
    return $this->processingState;
  }
}

class VolumeVolumeInfo extends \Google\Collection
{
  /** @var bool */
  public $allowAnonLogging;
  /** @var string[] */
  public $authors;
  public $averageRating;
  /** @var string */
  public $canonicalVolumeLink;
  /** @var string[] */
  public $categories;
  /** @var bool */
  public $comicsContent;
  /** @var string */
  public $contentVersion;
  /** @var string */
  public $description;
  /** @var VolumeVolumeInfoDimensions */
  public $dimensions;
  /** @var VolumeVolumeInfoImageLinks */
  public $imageLinks;
  /** @var VolumeVolumeInfoIndustryIdentifiers[] */
  public $industryIdentifiers;
  /** @var string */
  public $infoLink;
  /** @var string */
  public $language;
  /** @var string */
  public $mainCategory;
  /** @var string */
  public $maturityRating;
  /** @var int */
  public $pageCount;
  /** @var VolumeVolumeInfoPanelizationSummary */
  public $panelizationSummary;
  /** @var string */
  public $previewLink;
  /** @var string */
  public $printType;
  /** @var int */
  public $printedPageCount;
  /** @var string */
  public $publishedDate;
  /** @var string */
  public $publisher;
  /** @var int */
  public $ratingsCount;
  /** @var VolumeVolumeInfoReadingModes */
  public $readingModes;
  /** @var int */
  public $samplePageCount;
  /** @var Volumeseriesinfo */
  public $seriesInfo;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'industryIdentifiers';
  protected $dimensionsType = VolumeVolumeInfoDimensions::class;
  protected $dimensionsDataType = '';
  protected $imageLinksType = VolumeVolumeInfoImageLinks::class;
  protected $imageLinksDataType = '';
  protected $industryIdentifiersType = VolumeVolumeInfoIndustryIdentifiers::class;
  protected $industryIdentifiersDataType = 'array';
  protected $panelizationSummaryType = VolumeVolumeInfoPanelizationSummary::class;
  protected $panelizationSummaryDataType = '';
  protected $readingModesType = VolumeVolumeInfoReadingModes::class;
  protected $readingModesDataType = '';
  protected $seriesInfoType = Volumeseriesinfo::class;
  protected $seriesInfoDataType = '';
  /** @param bool */
  public function setAllowAnonLogging($allowAnonLogging)
  {
    $this->allowAnonLogging = $allowAnonLogging;
  }
  /** @return bool */
  public function getAllowAnonLogging()
  {
    return $this->allowAnonLogging;
  }
  /** @param string[] */
  public function setAuthors($authors)
  {
    $this->authors = $authors;
  }
  /** @return string[] */
  public function getAuthors()
  {
    return $this->authors;
  }
  public function setAverageRating($averageRating)
  {
    $this->averageRating = $averageRating;
  }
  public function getAverageRating()
  {
    return $this->averageRating;
  }
  /** @param string */
  public function setCanonicalVolumeLink($canonicalVolumeLink)
  {
    $this->canonicalVolumeLink = $canonicalVolumeLink;
  }
  /** @return string */
  public function getCanonicalVolumeLink()
  {
    return $this->canonicalVolumeLink;
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
  /** @param bool */
  public function setComicsContent($comicsContent)
  {
    $this->comicsContent = $comicsContent;
  }
  /** @return bool */
  public function getComicsContent()
  {
    return $this->comicsContent;
  }
  /** @param string */
  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }
  /** @return string */
  public function getContentVersion()
  {
    return $this->contentVersion;
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
  /** @param VolumeVolumeInfoDimensions */
  public function setDimensions(VolumeVolumeInfoDimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return VolumeVolumeInfoDimensions */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param VolumeVolumeInfoImageLinks */
  public function setImageLinks(VolumeVolumeInfoImageLinks $imageLinks)
  {
    $this->imageLinks = $imageLinks;
  }
  /** @return VolumeVolumeInfoImageLinks */
  public function getImageLinks()
  {
    return $this->imageLinks;
  }
  /** @param VolumeVolumeInfoIndustryIdentifiers[] */
  public function setIndustryIdentifiers($industryIdentifiers)
  {
    $this->industryIdentifiers = $industryIdentifiers;
  }
  /** @return VolumeVolumeInfoIndustryIdentifiers[] */
  public function getIndustryIdentifiers()
  {
    return $this->industryIdentifiers;
  }
  /** @param string */
  public function setInfoLink($infoLink)
  {
    $this->infoLink = $infoLink;
  }
  /** @return string */
  public function getInfoLink()
  {
    return $this->infoLink;
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
  /** @param string */
  public function setMainCategory($mainCategory)
  {
    $this->mainCategory = $mainCategory;
  }
  /** @return string */
  public function getMainCategory()
  {
    return $this->mainCategory;
  }
  /** @param string */
  public function setMaturityRating($maturityRating)
  {
    $this->maturityRating = $maturityRating;
  }
  /** @return string */
  public function getMaturityRating()
  {
    return $this->maturityRating;
  }
  /** @param int */
  public function setPageCount($pageCount)
  {
    $this->pageCount = $pageCount;
  }
  /** @return int */
  public function getPageCount()
  {
    return $this->pageCount;
  }
  /** @param VolumeVolumeInfoPanelizationSummary */
  public function setPanelizationSummary(VolumeVolumeInfoPanelizationSummary $panelizationSummary)
  {
    $this->panelizationSummary = $panelizationSummary;
  }
  /** @return VolumeVolumeInfoPanelizationSummary */
  public function getPanelizationSummary()
  {
    return $this->panelizationSummary;
  }
  /** @param string */
  public function setPreviewLink($previewLink)
  {
    $this->previewLink = $previewLink;
  }
  /** @return string */
  public function getPreviewLink()
  {
    return $this->previewLink;
  }
  /** @param string */
  public function setPrintType($printType)
  {
    $this->printType = $printType;
  }
  /** @return string */
  public function getPrintType()
  {
    return $this->printType;
  }
  /** @param int */
  public function setPrintedPageCount($printedPageCount)
  {
    $this->printedPageCount = $printedPageCount;
  }
  /** @return int */
  public function getPrintedPageCount()
  {
    return $this->printedPageCount;
  }
  /** @param string */
  public function setPublishedDate($publishedDate)
  {
    $this->publishedDate = $publishedDate;
  }
  /** @return string */
  public function getPublishedDate()
  {
    return $this->publishedDate;
  }
  /** @param string */
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return string */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param int */
  public function setRatingsCount($ratingsCount)
  {
    $this->ratingsCount = $ratingsCount;
  }
  /** @return int */
  public function getRatingsCount()
  {
    return $this->ratingsCount;
  }
  /** @param VolumeVolumeInfoReadingModes */
  public function setReadingModes(VolumeVolumeInfoReadingModes $readingModes)
  {
    $this->readingModes = $readingModes;
  }
  /** @return VolumeVolumeInfoReadingModes */
  public function getReadingModes()
  {
    return $this->readingModes;
  }
  /** @param int */
  public function setSamplePageCount($samplePageCount)
  {
    $this->samplePageCount = $samplePageCount;
  }
  /** @return int */
  public function getSamplePageCount()
  {
    return $this->samplePageCount;
  }
  /** @param Volumeseriesinfo */
  public function setSeriesInfo(Volumeseriesinfo $seriesInfo)
  {
    $this->seriesInfo = $seriesInfo;
  }
  /** @return Volumeseriesinfo */
  public function getSeriesInfo()
  {
    return $this->seriesInfo;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class VolumeVolumeInfoDimensions extends \Google\Model
{
  /** @var string */
  public $height;
  /** @var string */
  public $thickness;
  /** @var string */
  public $width;

  /** @param string */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return string */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setThickness($thickness)
  {
    $this->thickness = $thickness;
  }
  /** @return string */
  public function getThickness()
  {
    return $this->thickness;
  }
  /** @param string */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return string */
  public function getWidth()
  {
    return $this->width;
  }
}

class VolumeVolumeInfoImageLinks extends \Google\Model
{
  /** @var string */
  public $extraLarge;
  /** @var string */
  public $large;
  /** @var string */
  public $medium;
  /** @var string */
  public $small;
  /** @var string */
  public $smallThumbnail;
  /** @var string */
  public $thumbnail;

  /** @param string */
  public function setExtraLarge($extraLarge)
  {
    $this->extraLarge = $extraLarge;
  }
  /** @return string */
  public function getExtraLarge()
  {
    return $this->extraLarge;
  }
  /** @param string */
  public function setLarge($large)
  {
    $this->large = $large;
  }
  /** @return string */
  public function getLarge()
  {
    return $this->large;
  }
  /** @param string */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
  /** @param string */
  public function setSmall($small)
  {
    $this->small = $small;
  }
  /** @return string */
  public function getSmall()
  {
    return $this->small;
  }
  /** @param string */
  public function setSmallThumbnail($smallThumbnail)
  {
    $this->smallThumbnail = $smallThumbnail;
  }
  /** @return string */
  public function getSmallThumbnail()
  {
    return $this->smallThumbnail;
  }
  /** @param string */
  public function setThumbnail($thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return string */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
}

class VolumeVolumeInfoIndustryIdentifiers extends \Google\Model
{
  /** @var string */
  public $identifier;
  /** @var string */
  public $type;

  /** @param string */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /** @return string */
  public function getIdentifier()
  {
    return $this->identifier;
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

class VolumeVolumeInfoPanelizationSummary extends \Google\Model
{
  /** @var bool */
  public $containsEpubBubbles;
  /** @var bool */
  public $containsImageBubbles;
  /** @var string */
  public $epubBubbleVersion;
  /** @var string */
  public $imageBubbleVersion;

  /** @param bool */
  public function setContainsEpubBubbles($containsEpubBubbles)
  {
    $this->containsEpubBubbles = $containsEpubBubbles;
  }
  /** @return bool */
  public function getContainsEpubBubbles()
  {
    return $this->containsEpubBubbles;
  }
  /** @param bool */
  public function setContainsImageBubbles($containsImageBubbles)
  {
    $this->containsImageBubbles = $containsImageBubbles;
  }
  /** @return bool */
  public function getContainsImageBubbles()
  {
    return $this->containsImageBubbles;
  }
  /** @param string */
  public function setEpubBubbleVersion($epubBubbleVersion)
  {
    $this->epubBubbleVersion = $epubBubbleVersion;
  }
  /** @return string */
  public function getEpubBubbleVersion()
  {
    return $this->epubBubbleVersion;
  }
  /** @param string */
  public function setImageBubbleVersion($imageBubbleVersion)
  {
    $this->imageBubbleVersion = $imageBubbleVersion;
  }
  /** @return string */
  public function getImageBubbleVersion()
  {
    return $this->imageBubbleVersion;
  }
}

class VolumeVolumeInfoReadingModes extends \Google\Model
{
  /** @var bool */
  public $image;
  /** @var bool */
  public $text;

  /** @param bool */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return bool */
  public function getImage()
  {
    return $this->image;
  }
  /** @param bool */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return bool */
  public function getText()
  {
    return $this->text;
  }
}

class Volumeannotation extends \Google\Collection
{
  /** @var string */
  public $annotationDataId;
  /** @var string */
  public $annotationDataLink;
  /** @var string */
  public $annotationType;
  /** @var VolumeannotationContentRanges */
  public $contentRanges;
  /** @var string */
  public $data;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $layerId;
  /** @var string[] */
  public $pageIds;
  /** @var string */
  public $selectedText;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updated;
  /** @var string */
  public $volumeId;
  protected $collection_key = 'pageIds';
  protected $contentRangesType = VolumeannotationContentRanges::class;
  protected $contentRangesDataType = '';
  /** @param string */
  public function setAnnotationDataId($annotationDataId)
  {
    $this->annotationDataId = $annotationDataId;
  }
  /** @return string */
  public function getAnnotationDataId()
  {
    return $this->annotationDataId;
  }
  /** @param string */
  public function setAnnotationDataLink($annotationDataLink)
  {
    $this->annotationDataLink = $annotationDataLink;
  }
  /** @return string */
  public function getAnnotationDataLink()
  {
    return $this->annotationDataLink;
  }
  /** @param string */
  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }
  /** @return string */
  public function getAnnotationType()
  {
    return $this->annotationType;
  }
  /** @param VolumeannotationContentRanges */
  public function setContentRanges(VolumeannotationContentRanges $contentRanges)
  {
    $this->contentRanges = $contentRanges;
  }
  /** @return VolumeannotationContentRanges */
  public function getContentRanges()
  {
    return $this->contentRanges;
  }
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
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
  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }
  /** @return string */
  public function getLayerId()
  {
    return $this->layerId;
  }
  /** @param string[] */
  public function setPageIds($pageIds)
  {
    $this->pageIds = $pageIds;
  }
  /** @return string[] */
  public function getPageIds()
  {
    return $this->pageIds;
  }
  /** @param string */
  public function setSelectedText($selectedText)
  {
    $this->selectedText = $selectedText;
  }
  /** @return string */
  public function getSelectedText()
  {
    return $this->selectedText;
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
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class VolumeannotationContentRanges extends \Google\Model
{
  /** @var BooksAnnotationsRange */
  public $cfiRange;
  /** @var string */
  public $contentVersion;
  /** @var BooksAnnotationsRange */
  public $gbImageRange;
  /** @var BooksAnnotationsRange */
  public $gbTextRange;
  protected $cfiRangeType = BooksAnnotationsRange::class;
  protected $cfiRangeDataType = '';
  protected $gbImageRangeType = BooksAnnotationsRange::class;
  protected $gbImageRangeDataType = '';
  protected $gbTextRangeType = BooksAnnotationsRange::class;
  protected $gbTextRangeDataType = '';
  /** @param BooksAnnotationsRange */
  public function setCfiRange(BooksAnnotationsRange $cfiRange)
  {
    $this->cfiRange = $cfiRange;
  }
  /** @return BooksAnnotationsRange */
  public function getCfiRange()
  {
    return $this->cfiRange;
  }
  /** @param string */
  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }
  /** @return string */
  public function getContentVersion()
  {
    return $this->contentVersion;
  }
  /** @param BooksAnnotationsRange */
  public function setGbImageRange(BooksAnnotationsRange $gbImageRange)
  {
    $this->gbImageRange = $gbImageRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbImageRange()
  {
    return $this->gbImageRange;
  }
  /** @param BooksAnnotationsRange */
  public function setGbTextRange(BooksAnnotationsRange $gbTextRange)
  {
    $this->gbTextRange = $gbTextRange;
  }
  /** @return BooksAnnotationsRange */
  public function getGbTextRange()
  {
    return $this->gbTextRange;
  }
}

class Volumeannotations extends \Google\Collection
{
  /** @var Volumeannotation[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalItems;
  /** @var string */
  public $version;
  protected $collection_key = 'items';
  protected $itemsType = Volumeannotation::class;
  protected $itemsDataType = 'array';
  /** @param Volumeannotation[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Volumeannotation[] */
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
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
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

class Volumes extends \Google\Collection
{
  /** @var Volume[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = Volume::class;
  protected $itemsDataType = 'array';
  /** @param Volume[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Volume[] */
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
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class Volumeseriesinfo extends \Google\Collection
{
  /** @var string */
  public $bookDisplayNumber;
  /** @var string */
  public $kind;
  /** @var string */
  public $shortSeriesBookTitle;
  /** @var VolumeseriesinfoVolumeSeries[] */
  public $volumeSeries;
  protected $collection_key = 'volumeSeries';
  protected $volumeSeriesType = VolumeseriesinfoVolumeSeries::class;
  protected $volumeSeriesDataType = 'array';
  /** @param string */
  public function setBookDisplayNumber($bookDisplayNumber)
  {
    $this->bookDisplayNumber = $bookDisplayNumber;
  }
  /** @return string */
  public function getBookDisplayNumber()
  {
    return $this->bookDisplayNumber;
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
  public function setShortSeriesBookTitle($shortSeriesBookTitle)
  {
    $this->shortSeriesBookTitle = $shortSeriesBookTitle;
  }
  /** @return string */
  public function getShortSeriesBookTitle()
  {
    return $this->shortSeriesBookTitle;
  }
  /** @param VolumeseriesinfoVolumeSeries[] */
  public function setVolumeSeries($volumeSeries)
  {
    $this->volumeSeries = $volumeSeries;
  }
  /** @return VolumeseriesinfoVolumeSeries[] */
  public function getVolumeSeries()
  {
    return $this->volumeSeries;
  }
}

class VolumeseriesinfoVolumeSeries extends \Google\Collection
{
  /** @var VolumeseriesinfoVolumeSeriesIssue[] */
  public $issue;
  /** @var int */
  public $orderNumber;
  /** @var string */
  public $seriesBookType;
  /** @var string */
  public $seriesId;
  protected $collection_key = 'issue';
  protected $issueType = VolumeseriesinfoVolumeSeriesIssue::class;
  protected $issueDataType = 'array';
  /** @param VolumeseriesinfoVolumeSeriesIssue[] */
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /** @return VolumeseriesinfoVolumeSeriesIssue[] */
  public function getIssue()
  {
    return $this->issue;
  }
  /** @param int */
  public function setOrderNumber($orderNumber)
  {
    $this->orderNumber = $orderNumber;
  }
  /** @return int */
  public function getOrderNumber()
  {
    return $this->orderNumber;
  }
  /** @param string */
  public function setSeriesBookType($seriesBookType)
  {
    $this->seriesBookType = $seriesBookType;
  }
  /** @return string */
  public function getSeriesBookType()
  {
    return $this->seriesBookType;
  }
  /** @param string */
  public function setSeriesId($seriesId)
  {
    $this->seriesId = $seriesId;
  }
  /** @return string */
  public function getSeriesId()
  {
    return $this->seriesId;
  }
}

class VolumeseriesinfoVolumeSeriesIssue extends \Google\Model
{
  /** @var string */
  public $issueDisplayNumber;
  /** @var int */
  public $issueOrderNumber;

  /** @param string */
  public function setIssueDisplayNumber($issueDisplayNumber)
  {
    $this->issueDisplayNumber = $issueDisplayNumber;
  }
  /** @return string */
  public function getIssueDisplayNumber()
  {
    return $this->issueDisplayNumber;
  }
  /** @param int */
  public function setIssueOrderNumber($issueOrderNumber)
  {
    $this->issueOrderNumber = $issueOrderNumber;
  }
  /** @return int */
  public function getIssueOrderNumber()
  {
    return $this->issueOrderNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Annotation::class, 'Google_Service_Books_Annotation');
class_alias(AnnotationClientVersionRanges::class, 'Google_Service_Books_AnnotationClientVersionRanges');
class_alias(AnnotationCurrentVersionRanges::class, 'Google_Service_Books_AnnotationCurrentVersionRanges');
class_alias(AnnotationLayerSummary::class, 'Google_Service_Books_AnnotationLayerSummary');
class_alias(Annotations::class, 'Google_Service_Books_Annotations');
class_alias(AnnotationsSummary::class, 'Google_Service_Books_AnnotationsSummary');
class_alias(AnnotationsSummaryLayers::class, 'Google_Service_Books_AnnotationsSummaryLayers');
class_alias(Annotationsdata::class, 'Google_Service_Books_Annotationsdata');
class_alias(BooksAnnotationsRange::class, 'Google_Service_Books_BooksAnnotationsRange');
class_alias(BooksCloudloadingResource::class, 'Google_Service_Books_BooksCloudloadingResource');
class_alias(BooksEmpty::class, 'Google_Service_Books_BooksEmpty');
class_alias(BooksVolumesRecommendedRateResponse::class, 'Google_Service_Books_BooksVolumesRecommendedRateResponse');
class_alias(Bookshelf::class, 'Google_Service_Books_Bookshelf');
class_alias(Bookshelves::class, 'Google_Service_Books_Bookshelves');
class_alias(Category::class, 'Google_Service_Books_Category');
class_alias(CategoryItems::class, 'Google_Service_Books_CategoryItems');
class_alias(ConcurrentAccessRestriction::class, 'Google_Service_Books_ConcurrentAccessRestriction');
class_alias(DictionaryAnnotationdata::class, 'Google_Service_Books_DictionaryAnnotationdata');
class_alias(Dictlayerdata::class, 'Google_Service_Books_Dictlayerdata');
class_alias(DictlayerdataCommon::class, 'Google_Service_Books_DictlayerdataCommon');
class_alias(DictlayerdataDict::class, 'Google_Service_Books_DictlayerdataDict');
class_alias(DictlayerdataDictSource::class, 'Google_Service_Books_DictlayerdataDictSource');
class_alias(DictlayerdataDictWords::class, 'Google_Service_Books_DictlayerdataDictWords');
class_alias(DictlayerdataDictWordsDerivatives::class, 'Google_Service_Books_DictlayerdataDictWordsDerivatives');
class_alias(DictlayerdataDictWordsDerivativesSource::class, 'Google_Service_Books_DictlayerdataDictWordsDerivativesSource');
class_alias(DictlayerdataDictWordsExamples::class, 'Google_Service_Books_DictlayerdataDictWordsExamples');
class_alias(DictlayerdataDictWordsExamplesSource::class, 'Google_Service_Books_DictlayerdataDictWordsExamplesSource');
class_alias(DictlayerdataDictWordsSenses::class, 'Google_Service_Books_DictlayerdataDictWordsSenses');
class_alias(DictlayerdataDictWordsSensesConjugations::class, 'Google_Service_Books_DictlayerdataDictWordsSensesConjugations');
class_alias(DictlayerdataDictWordsSensesDefinitions::class, 'Google_Service_Books_DictlayerdataDictWordsSensesDefinitions');
class_alias(DictlayerdataDictWordsSensesDefinitionsExamples::class, 'Google_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamples');
class_alias(DictlayerdataDictWordsSensesDefinitionsExamplesSource::class, 'Google_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamplesSource');
class_alias(DictlayerdataDictWordsSensesSource::class, 'Google_Service_Books_DictlayerdataDictWordsSensesSource');
class_alias(DictlayerdataDictWordsSensesSynonyms::class, 'Google_Service_Books_DictlayerdataDictWordsSensesSynonyms');
class_alias(DictlayerdataDictWordsSensesSynonymsSource::class, 'Google_Service_Books_DictlayerdataDictWordsSensesSynonymsSource');
class_alias(DictlayerdataDictWordsSource::class, 'Google_Service_Books_DictlayerdataDictWordsSource');
class_alias(Discoveryclusters::class, 'Google_Service_Books_Discoveryclusters');
class_alias(DiscoveryclustersClusters::class, 'Google_Service_Books_DiscoveryclustersClusters');
class_alias(DiscoveryclustersClustersBannerWithContentContainer::class, 'Google_Service_Books_DiscoveryclustersClustersBannerWithContentContainer');
class_alias(DownloadAccessRestriction::class, 'Google_Service_Books_DownloadAccessRestriction');
class_alias(DownloadAccesses::class, 'Google_Service_Books_DownloadAccesses');
class_alias(FamilyInfo::class, 'Google_Service_Books_FamilyInfo');
class_alias(FamilyInfoMembership::class, 'Google_Service_Books_FamilyInfoMembership');
class_alias(GeoAnnotationdata::class, 'Google_Service_Books_GeoAnnotationdata');
class_alias(Geolayerdata::class, 'Google_Service_Books_Geolayerdata');
class_alias(GeolayerdataCommon::class, 'Google_Service_Books_GeolayerdataCommon');
class_alias(GeolayerdataGeo::class, 'Google_Service_Books_GeolayerdataGeo');
class_alias(GeolayerdataGeoViewport::class, 'Google_Service_Books_GeolayerdataGeoViewport');
class_alias(GeolayerdataGeoViewportHi::class, 'Google_Service_Books_GeolayerdataGeoViewportHi');
class_alias(GeolayerdataGeoViewportLo::class, 'Google_Service_Books_GeolayerdataGeoViewportLo');
class_alias(Layersummaries::class, 'Google_Service_Books_Layersummaries');
class_alias(Layersummary::class, 'Google_Service_Books_Layersummary');
class_alias(Metadata::class, 'Google_Service_Books_Metadata');
class_alias(MetadataItems::class, 'Google_Service_Books_MetadataItems');
class_alias(Notification::class, 'Google_Service_Books_Notification');
class_alias(Offers::class, 'Google_Service_Books_Offers');
class_alias(OffersItems::class, 'Google_Service_Books_OffersItems');
class_alias(OffersItemsItems::class, 'Google_Service_Books_OffersItemsItems');
class_alias(ReadingPosition::class, 'Google_Service_Books_ReadingPosition');
class_alias(RequestAccessData::class, 'Google_Service_Books_RequestAccessData');
class_alias(Review::class, 'Google_Service_Books_Review');
class_alias(ReviewAuthor::class, 'Google_Service_Books_ReviewAuthor');
class_alias(ReviewSource::class, 'Google_Service_Books_ReviewSource');
class_alias(Series::class, 'Google_Service_Books_Series');
class_alias(SeriesSeries::class, 'Google_Service_Books_SeriesSeries');
class_alias(SeriesSeriesSeriesSubscriptionReleaseInfo::class, 'Google_Service_Books_SeriesSeriesSeriesSubscriptionReleaseInfo');
class_alias(SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo::class, 'Google_Service_Books_SeriesSeriesSeriesSubscriptionReleaseInfoCurrentReleaseInfo');
class_alias(SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo::class, 'Google_Service_Books_SeriesSeriesSeriesSubscriptionReleaseInfoNextReleaseInfo');
class_alias(Seriesmembership::class, 'Google_Service_Books_Seriesmembership');
class_alias(Usersettings::class, 'Google_Service_Books_Usersettings');
class_alias(UsersettingsNotesExport::class, 'Google_Service_Books_UsersettingsNotesExport');
class_alias(UsersettingsNotification::class, 'Google_Service_Books_UsersettingsNotification');
class_alias(UsersettingsNotificationMatchMyInterests::class, 'Google_Service_Books_UsersettingsNotificationMatchMyInterests');
class_alias(UsersettingsNotificationMoreFromAuthors::class, 'Google_Service_Books_UsersettingsNotificationMoreFromAuthors');
class_alias(UsersettingsNotificationMoreFromSeries::class, 'Google_Service_Books_UsersettingsNotificationMoreFromSeries');
class_alias(UsersettingsNotificationPriceDrop::class, 'Google_Service_Books_UsersettingsNotificationPriceDrop');
class_alias(UsersettingsNotificationRewardExpirations::class, 'Google_Service_Books_UsersettingsNotificationRewardExpirations');
class_alias(Volume::class, 'Google_Service_Books_Volume');
class_alias(Volume2::class, 'Google_Service_Books_Volume2');
class_alias(VolumeAccessInfo::class, 'Google_Service_Books_VolumeAccessInfo');
class_alias(VolumeAccessInfoEpub::class, 'Google_Service_Books_VolumeAccessInfoEpub');
class_alias(VolumeAccessInfoPdf::class, 'Google_Service_Books_VolumeAccessInfoPdf');
class_alias(VolumeLayerInfo::class, 'Google_Service_Books_VolumeLayerInfo');
class_alias(VolumeLayerInfoLayers::class, 'Google_Service_Books_VolumeLayerInfoLayers');
class_alias(VolumeRecommendedInfo::class, 'Google_Service_Books_VolumeRecommendedInfo');
class_alias(VolumeSaleInfo::class, 'Google_Service_Books_VolumeSaleInfo');
class_alias(VolumeSaleInfoListPrice::class, 'Google_Service_Books_VolumeSaleInfoListPrice');
class_alias(VolumeSaleInfoOffers::class, 'Google_Service_Books_VolumeSaleInfoOffers');
class_alias(VolumeSaleInfoOffersListPrice::class, 'Google_Service_Books_VolumeSaleInfoOffersListPrice');
class_alias(VolumeSaleInfoOffersRentalDuration::class, 'Google_Service_Books_VolumeSaleInfoOffersRentalDuration');
class_alias(VolumeSaleInfoOffersRetailPrice::class, 'Google_Service_Books_VolumeSaleInfoOffersRetailPrice');
class_alias(VolumeSaleInfoRetailPrice::class, 'Google_Service_Books_VolumeSaleInfoRetailPrice');
class_alias(VolumeSearchInfo::class, 'Google_Service_Books_VolumeSearchInfo');
class_alias(VolumeUserInfo::class, 'Google_Service_Books_VolumeUserInfo');
class_alias(VolumeUserInfoCopy::class, 'Google_Service_Books_VolumeUserInfoCopy');
class_alias(VolumeUserInfoFamilySharing::class, 'Google_Service_Books_VolumeUserInfoFamilySharing');
class_alias(VolumeUserInfoRentalPeriod::class, 'Google_Service_Books_VolumeUserInfoRentalPeriod');
class_alias(VolumeUserInfoUserUploadedVolumeInfo::class, 'Google_Service_Books_VolumeUserInfoUserUploadedVolumeInfo');
class_alias(VolumeVolumeInfo::class, 'Google_Service_Books_VolumeVolumeInfo');
class_alias(VolumeVolumeInfoDimensions::class, 'Google_Service_Books_VolumeVolumeInfoDimensions');
class_alias(VolumeVolumeInfoImageLinks::class, 'Google_Service_Books_VolumeVolumeInfoImageLinks');
class_alias(VolumeVolumeInfoIndustryIdentifiers::class, 'Google_Service_Books_VolumeVolumeInfoIndustryIdentifiers');
class_alias(VolumeVolumeInfoPanelizationSummary::class, 'Google_Service_Books_VolumeVolumeInfoPanelizationSummary');
class_alias(VolumeVolumeInfoReadingModes::class, 'Google_Service_Books_VolumeVolumeInfoReadingModes');
class_alias(Volumeannotation::class, 'Google_Service_Books_Volumeannotation');
class_alias(VolumeannotationContentRanges::class, 'Google_Service_Books_VolumeannotationContentRanges');
class_alias(Volumeannotations::class, 'Google_Service_Books_Volumeannotations');
class_alias(Volumes::class, 'Google_Service_Books_Volumes');
class_alias(Volumeseriesinfo::class, 'Google_Service_Books_Volumeseriesinfo');
class_alias(VolumeseriesinfoVolumeSeries::class, 'Google_Service_Books_VolumeseriesinfoVolumeSeries');
class_alias(VolumeseriesinfoVolumeSeriesIssue::class, 'Google_Service_Books_VolumeseriesinfoVolumeSeriesIssue');
