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

namespace Google\Service\YouTube;

class AbuseReport extends \Google\Collection
{
  /** @var AbuseType[] */
  public $abuseTypes;
  /** @var string */
  public $description;
  /** @var RelatedEntity[] */
  public $relatedEntities;
  /** @var Entity */
  public $subject;
  protected $collection_key = 'relatedEntities';
  protected $abuseTypesType = AbuseType::class;
  protected $abuseTypesDataType = 'array';
  protected $relatedEntitiesType = RelatedEntity::class;
  protected $relatedEntitiesDataType = 'array';
  protected $subjectType = Entity::class;
  protected $subjectDataType = '';
  /** @param AbuseType[] */
  public function setAbuseTypes($abuseTypes)
  {
    $this->abuseTypes = $abuseTypes;
  }
  /** @return AbuseType[] */
  public function getAbuseTypes()
  {
    return $this->abuseTypes;
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
  /** @param RelatedEntity[] */
  public function setRelatedEntities($relatedEntities)
  {
    $this->relatedEntities = $relatedEntities;
  }
  /** @return RelatedEntity[] */
  public function getRelatedEntities()
  {
    return $this->relatedEntities;
  }
  /** @param Entity */
  public function setSubject(Entity $subject)
  {
    $this->subject = $subject;
  }
  /** @return Entity */
  public function getSubject()
  {
    return $this->subject;
  }
}

class AbuseType extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class AccessPolicy extends \Google\Collection
{
  /** @var bool */
  public $allowed;
  /** @var string[] */
  public $exception;
  protected $collection_key = 'exception';
  /** @param bool */
  public function setAllowed($allowed)
  {
    $this->allowed = $allowed;
  }
  /** @return bool */
  public function getAllowed()
  {
    return $this->allowed;
  }
  /** @param string[] */
  public function setException($exception)
  {
    $this->exception = $exception;
  }
  /** @return string[] */
  public function getException()
  {
    return $this->exception;
  }
}

class Activity extends \Google\Model
{
  /** @var ActivityContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var ActivitySnippet */
  public $snippet;
  protected $contentDetailsType = ActivityContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $snippetType = ActivitySnippet::class;
  protected $snippetDataType = '';
  /** @param ActivityContentDetails */
  public function setContentDetails(ActivityContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return ActivityContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param ActivitySnippet */
  public function setSnippet(ActivitySnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return ActivitySnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class ActivityContentDetails extends \Google\Model
{
  /** @var ActivityContentDetailsBulletin */
  public $bulletin;
  /** @var ActivityContentDetailsChannelItem */
  public $channelItem;
  /** @var ActivityContentDetailsComment */
  public $comment;
  /** @var ActivityContentDetailsFavorite */
  public $favorite;
  /** @var ActivityContentDetailsLike */
  public $like;
  /** @var ActivityContentDetailsPlaylistItem */
  public $playlistItem;
  /** @var ActivityContentDetailsPromotedItem */
  public $promotedItem;
  /** @var ActivityContentDetailsRecommendation */
  public $recommendation;
  /** @var ActivityContentDetailsSocial */
  public $social;
  /** @var ActivityContentDetailsSubscription */
  public $subscription;
  /** @var ActivityContentDetailsUpload */
  public $upload;
  protected $bulletinType = ActivityContentDetailsBulletin::class;
  protected $bulletinDataType = '';
  protected $channelItemType = ActivityContentDetailsChannelItem::class;
  protected $channelItemDataType = '';
  protected $commentType = ActivityContentDetailsComment::class;
  protected $commentDataType = '';
  protected $favoriteType = ActivityContentDetailsFavorite::class;
  protected $favoriteDataType = '';
  protected $likeType = ActivityContentDetailsLike::class;
  protected $likeDataType = '';
  protected $playlistItemType = ActivityContentDetailsPlaylistItem::class;
  protected $playlistItemDataType = '';
  protected $promotedItemType = ActivityContentDetailsPromotedItem::class;
  protected $promotedItemDataType = '';
  protected $recommendationType = ActivityContentDetailsRecommendation::class;
  protected $recommendationDataType = '';
  protected $socialType = ActivityContentDetailsSocial::class;
  protected $socialDataType = '';
  protected $subscriptionType = ActivityContentDetailsSubscription::class;
  protected $subscriptionDataType = '';
  protected $uploadType = ActivityContentDetailsUpload::class;
  protected $uploadDataType = '';
  /** @param ActivityContentDetailsBulletin */
  public function setBulletin(ActivityContentDetailsBulletin $bulletin)
  {
    $this->bulletin = $bulletin;
  }
  /** @return ActivityContentDetailsBulletin */
  public function getBulletin()
  {
    return $this->bulletin;
  }
  /** @param ActivityContentDetailsChannelItem */
  public function setChannelItem(ActivityContentDetailsChannelItem $channelItem)
  {
    $this->channelItem = $channelItem;
  }
  /** @return ActivityContentDetailsChannelItem */
  public function getChannelItem()
  {
    return $this->channelItem;
  }
  /** @param ActivityContentDetailsComment */
  public function setComment(ActivityContentDetailsComment $comment)
  {
    $this->comment = $comment;
  }
  /** @return ActivityContentDetailsComment */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param ActivityContentDetailsFavorite */
  public function setFavorite(ActivityContentDetailsFavorite $favorite)
  {
    $this->favorite = $favorite;
  }
  /** @return ActivityContentDetailsFavorite */
  public function getFavorite()
  {
    return $this->favorite;
  }
  /** @param ActivityContentDetailsLike */
  public function setLike(ActivityContentDetailsLike $like)
  {
    $this->like = $like;
  }
  /** @return ActivityContentDetailsLike */
  public function getLike()
  {
    return $this->like;
  }
  /** @param ActivityContentDetailsPlaylistItem */
  public function setPlaylistItem(ActivityContentDetailsPlaylistItem $playlistItem)
  {
    $this->playlistItem = $playlistItem;
  }
  /** @return ActivityContentDetailsPlaylistItem */
  public function getPlaylistItem()
  {
    return $this->playlistItem;
  }
  /** @param ActivityContentDetailsPromotedItem */
  public function setPromotedItem(ActivityContentDetailsPromotedItem $promotedItem)
  {
    $this->promotedItem = $promotedItem;
  }
  /** @return ActivityContentDetailsPromotedItem */
  public function getPromotedItem()
  {
    return $this->promotedItem;
  }
  /** @param ActivityContentDetailsRecommendation */
  public function setRecommendation(ActivityContentDetailsRecommendation $recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /** @return ActivityContentDetailsRecommendation */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
  /** @param ActivityContentDetailsSocial */
  public function setSocial(ActivityContentDetailsSocial $social)
  {
    $this->social = $social;
  }
  /** @return ActivityContentDetailsSocial */
  public function getSocial()
  {
    return $this->social;
  }
  /** @param ActivityContentDetailsSubscription */
  public function setSubscription(ActivityContentDetailsSubscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return ActivityContentDetailsSubscription */
  public function getSubscription()
  {
    return $this->subscription;
  }
  /** @param ActivityContentDetailsUpload */
  public function setUpload(ActivityContentDetailsUpload $upload)
  {
    $this->upload = $upload;
  }
  /** @return ActivityContentDetailsUpload */
  public function getUpload()
  {
    return $this->upload;
  }
}

class ActivityContentDetailsBulletin extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsChannelItem extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsComment extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsFavorite extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsLike extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsPlaylistItem extends \Google\Model
{
  /** @var string */
  public $playlistId;
  /** @var string */
  public $playlistItemId;
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param string */
  public function setPlaylistId($playlistId)
  {
    $this->playlistId = $playlistId;
  }
  /** @return string */
  public function getPlaylistId()
  {
    return $this->playlistId;
  }
  /** @param string */
  public function setPlaylistItemId($playlistItemId)
  {
    $this->playlistItemId = $playlistItemId;
  }
  /** @return string */
  public function getPlaylistItemId()
  {
    return $this->playlistItemId;
  }
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsPromotedItem extends \Google\Collection
{
  /** @var string */
  public $adTag;
  /** @var string */
  public $clickTrackingUrl;
  /** @var string */
  public $creativeViewUrl;
  /** @var string */
  public $ctaType;
  /** @var string */
  public $customCtaButtonText;
  /** @var string */
  public $descriptionText;
  /** @var string */
  public $destinationUrl;
  /** @var string[] */
  public $forecastingUrl;
  /** @var string[] */
  public $impressionUrl;
  /** @var string */
  public $videoId;
  protected $collection_key = 'impressionUrl';
  /** @param string */
  public function setAdTag($adTag)
  {
    $this->adTag = $adTag;
  }
  /** @return string */
  public function getAdTag()
  {
    return $this->adTag;
  }
  /** @param string */
  public function setClickTrackingUrl($clickTrackingUrl)
  {
    $this->clickTrackingUrl = $clickTrackingUrl;
  }
  /** @return string */
  public function getClickTrackingUrl()
  {
    return $this->clickTrackingUrl;
  }
  /** @param string */
  public function setCreativeViewUrl($creativeViewUrl)
  {
    $this->creativeViewUrl = $creativeViewUrl;
  }
  /** @return string */
  public function getCreativeViewUrl()
  {
    return $this->creativeViewUrl;
  }
  /** @param string */
  public function setCtaType($ctaType)
  {
    $this->ctaType = $ctaType;
  }
  /** @return string */
  public function getCtaType()
  {
    return $this->ctaType;
  }
  /** @param string */
  public function setCustomCtaButtonText($customCtaButtonText)
  {
    $this->customCtaButtonText = $customCtaButtonText;
  }
  /** @return string */
  public function getCustomCtaButtonText()
  {
    return $this->customCtaButtonText;
  }
  /** @param string */
  public function setDescriptionText($descriptionText)
  {
    $this->descriptionText = $descriptionText;
  }
  /** @return string */
  public function getDescriptionText()
  {
    return $this->descriptionText;
  }
  /** @param string */
  public function setDestinationUrl($destinationUrl)
  {
    $this->destinationUrl = $destinationUrl;
  }
  /** @return string */
  public function getDestinationUrl()
  {
    return $this->destinationUrl;
  }
  /** @param string[] */
  public function setForecastingUrl($forecastingUrl)
  {
    $this->forecastingUrl = $forecastingUrl;
  }
  /** @return string[] */
  public function getForecastingUrl()
  {
    return $this->forecastingUrl;
  }
  /** @param string[] */
  public function setImpressionUrl($impressionUrl)
  {
    $this->impressionUrl = $impressionUrl;
  }
  /** @return string[] */
  public function getImpressionUrl()
  {
    return $this->impressionUrl;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class ActivityContentDetailsRecommendation extends \Google\Model
{
  /** @var string */
  public $reason;
  /** @var ResourceId */
  public $resourceId;
  /** @var ResourceId */
  public $seedResourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  protected $seedResourceIdType = ResourceId::class;
  protected $seedResourceIdDataType = '';
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
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param ResourceId */
  public function setSeedResourceId(ResourceId $seedResourceId)
  {
    $this->seedResourceId = $seedResourceId;
  }
  /** @return ResourceId */
  public function getSeedResourceId()
  {
    return $this->seedResourceId;
  }
}

class ActivityContentDetailsSocial extends \Google\Model
{
  /** @var string */
  public $author;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $referenceUrl;
  /** @var ResourceId */
  public $resourceId;
  /** @var string */
  public $type;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
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
  public function setReferenceUrl($referenceUrl)
  {
    $this->referenceUrl = $referenceUrl;
  }
  /** @return string */
  public function getReferenceUrl()
  {
    return $this->referenceUrl;
  }
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
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

class ActivityContentDetailsSubscription extends \Google\Model
{
  /** @var ResourceId */
  public $resourceId;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

class ActivityContentDetailsUpload extends \Google\Model
{
  /** @var string */
  public $videoId;

  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class ActivityListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Activity[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Activity::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Activity[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Activity[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class ActivitySnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $description;
  /** @var string */
  public $groupId;
  /** @var string */
  public $publishedAt;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
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
  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }
  /** @return string */
  public function getPublishedAt()
  {
    return $this->publishedAt;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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
}

class Caption extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var CaptionSnippet */
  public $snippet;
  protected $snippetType = CaptionSnippet::class;
  protected $snippetDataType = '';
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
  /** @param CaptionSnippet */
  public function setSnippet(CaptionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return CaptionSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class CaptionListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Caption[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Caption::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Caption[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Caption[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class CaptionSnippet extends \Google\Model
{
  /** @var string */
  public $audioTrackType;
  /** @var string */
  public $failureReason;
  /** @var bool */
  public $isAutoSynced;
  /** @var bool */
  public $isCC;
  /** @var bool */
  public $isDraft;
  /** @var bool */
  public $isEasyReader;
  /** @var bool */
  public $isLarge;
  /** @var string */
  public $language;
  /** @var string */
  public $lastUpdated;
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  /** @var string */
  public $trackKind;
  /** @var string */
  public $videoId;

  /** @param string */
  public function setAudioTrackType($audioTrackType)
  {
    $this->audioTrackType = $audioTrackType;
  }
  /** @return string */
  public function getAudioTrackType()
  {
    return $this->audioTrackType;
  }
  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /** @param bool */
  public function setIsAutoSynced($isAutoSynced)
  {
    $this->isAutoSynced = $isAutoSynced;
  }
  /** @return bool */
  public function getIsAutoSynced()
  {
    return $this->isAutoSynced;
  }
  /** @param bool */
  public function setIsCC($isCC)
  {
    $this->isCC = $isCC;
  }
  /** @return bool */
  public function getIsCC()
  {
    return $this->isCC;
  }
  /** @param bool */
  public function setIsDraft($isDraft)
  {
    $this->isDraft = $isDraft;
  }
  /** @return bool */
  public function getIsDraft()
  {
    return $this->isDraft;
  }
  /** @param bool */
  public function setIsEasyReader($isEasyReader)
  {
    $this->isEasyReader = $isEasyReader;
  }
  /** @return bool */
  public function getIsEasyReader()
  {
    return $this->isEasyReader;
  }
  /** @param bool */
  public function setIsLarge($isLarge)
  {
    $this->isLarge = $isLarge;
  }
  /** @return bool */
  public function getIsLarge()
  {
    return $this->isLarge;
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
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /** @return string */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
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
  public function setTrackKind($trackKind)
  {
    $this->trackKind = $trackKind;
  }
  /** @return string */
  public function getTrackKind()
  {
    return $this->trackKind;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class CdnSettings extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $frameRate;
  /** @var IngestionInfo */
  public $ingestionInfo;
  /** @var string */
  public $ingestionType;
  /** @var string */
  public $resolution;
  protected $ingestionInfoType = IngestionInfo::class;
  protected $ingestionInfoDataType = '';
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string */
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  /** @return string */
  public function getFrameRate()
  {
    return $this->frameRate;
  }
  /** @param IngestionInfo */
  public function setIngestionInfo(IngestionInfo $ingestionInfo)
  {
    $this->ingestionInfo = $ingestionInfo;
  }
  /** @return IngestionInfo */
  public function getIngestionInfo()
  {
    return $this->ingestionInfo;
  }
  /** @param string */
  public function setIngestionType($ingestionType)
  {
    $this->ingestionType = $ingestionType;
  }
  /** @return string */
  public function getIngestionType()
  {
    return $this->ingestionType;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
  }
}

class Channel extends \Google\Model
{
  /** @var ChannelAuditDetails */
  public $auditDetails;
  /** @var ChannelBrandingSettings */
  public $brandingSettings;
  /** @var ChannelContentDetails */
  public $contentDetails;
  /** @var ChannelContentOwnerDetails */
  public $contentOwnerDetails;
  /** @var ChannelConversionPings */
  public $conversionPings;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var ChannelLocalization[] */
  public $localizations;
  /** @var ChannelSnippet */
  public $snippet;
  /** @var ChannelStatistics */
  public $statistics;
  /** @var ChannelStatus */
  public $status;
  /** @var ChannelTopicDetails */
  public $topicDetails;
  protected $auditDetailsType = ChannelAuditDetails::class;
  protected $auditDetailsDataType = '';
  protected $brandingSettingsType = ChannelBrandingSettings::class;
  protected $brandingSettingsDataType = '';
  protected $contentDetailsType = ChannelContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $contentOwnerDetailsType = ChannelContentOwnerDetails::class;
  protected $contentOwnerDetailsDataType = '';
  protected $conversionPingsType = ChannelConversionPings::class;
  protected $conversionPingsDataType = '';
  protected $localizationsType = ChannelLocalization::class;
  protected $localizationsDataType = 'map';
  protected $snippetType = ChannelSnippet::class;
  protected $snippetDataType = '';
  protected $statisticsType = ChannelStatistics::class;
  protected $statisticsDataType = '';
  protected $statusType = ChannelStatus::class;
  protected $statusDataType = '';
  protected $topicDetailsType = ChannelTopicDetails::class;
  protected $topicDetailsDataType = '';
  /** @param ChannelAuditDetails */
  public function setAuditDetails(ChannelAuditDetails $auditDetails)
  {
    $this->auditDetails = $auditDetails;
  }
  /** @return ChannelAuditDetails */
  public function getAuditDetails()
  {
    return $this->auditDetails;
  }
  /** @param ChannelBrandingSettings */
  public function setBrandingSettings(ChannelBrandingSettings $brandingSettings)
  {
    $this->brandingSettings = $brandingSettings;
  }
  /** @return ChannelBrandingSettings */
  public function getBrandingSettings()
  {
    return $this->brandingSettings;
  }
  /** @param ChannelContentDetails */
  public function setContentDetails(ChannelContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return ChannelContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
  }
  /** @param ChannelContentOwnerDetails */
  public function setContentOwnerDetails(ChannelContentOwnerDetails $contentOwnerDetails)
  {
    $this->contentOwnerDetails = $contentOwnerDetails;
  }
  /** @return ChannelContentOwnerDetails */
  public function getContentOwnerDetails()
  {
    return $this->contentOwnerDetails;
  }
  /** @param ChannelConversionPings */
  public function setConversionPings(ChannelConversionPings $conversionPings)
  {
    $this->conversionPings = $conversionPings;
  }
  /** @return ChannelConversionPings */
  public function getConversionPings()
  {
    return $this->conversionPings;
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
  /** @param ChannelLocalization[] */
  public function setLocalizations($localizations)
  {
    $this->localizations = $localizations;
  }
  /** @return ChannelLocalization[] */
  public function getLocalizations()
  {
    return $this->localizations;
  }
  /** @param ChannelSnippet */
  public function setSnippet(ChannelSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return ChannelSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param ChannelStatistics */
  public function setStatistics(ChannelStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return ChannelStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
  /** @param ChannelStatus */
  public function setStatus(ChannelStatus $status)
  {
    $this->status = $status;
  }
  /** @return ChannelStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param ChannelTopicDetails */
  public function setTopicDetails(ChannelTopicDetails $topicDetails)
  {
    $this->topicDetails = $topicDetails;
  }
  /** @return ChannelTopicDetails */
  public function getTopicDetails()
  {
    return $this->topicDetails;
  }
}

class ChannelAuditDetails extends \Google\Model
{
  /** @var bool */
  public $communityGuidelinesGoodStanding;
  /** @var bool */
  public $contentIdClaimsGoodStanding;
  /** @var bool */
  public $copyrightStrikesGoodStanding;

  /** @param bool */
  public function setCommunityGuidelinesGoodStanding($communityGuidelinesGoodStanding)
  {
    $this->communityGuidelinesGoodStanding = $communityGuidelinesGoodStanding;
  }
  /** @return bool */
  public function getCommunityGuidelinesGoodStanding()
  {
    return $this->communityGuidelinesGoodStanding;
  }
  /** @param bool */
  public function setContentIdClaimsGoodStanding($contentIdClaimsGoodStanding)
  {
    $this->contentIdClaimsGoodStanding = $contentIdClaimsGoodStanding;
  }
  /** @return bool */
  public function getContentIdClaimsGoodStanding()
  {
    return $this->contentIdClaimsGoodStanding;
  }
  /** @param bool */
  public function setCopyrightStrikesGoodStanding($copyrightStrikesGoodStanding)
  {
    $this->copyrightStrikesGoodStanding = $copyrightStrikesGoodStanding;
  }
  /** @return bool */
  public function getCopyrightStrikesGoodStanding()
  {
    return $this->copyrightStrikesGoodStanding;
  }
}

class ChannelBannerResource extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $url;

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

class ChannelBrandingSettings extends \Google\Collection
{
  /** @var ChannelSettings */
  public $channel;
  /** @var PropertyValue[] */
  public $hints;
  /** @var ImageSettings */
  public $image;
  /** @var WatchSettings */
  public $watch;
  protected $collection_key = 'hints';
  protected $channelType = ChannelSettings::class;
  protected $channelDataType = '';
  protected $hintsType = PropertyValue::class;
  protected $hintsDataType = 'array';
  protected $imageType = ImageSettings::class;
  protected $imageDataType = '';
  protected $watchType = WatchSettings::class;
  protected $watchDataType = '';
  /** @param ChannelSettings */
  public function setChannel(ChannelSettings $channel)
  {
    $this->channel = $channel;
  }
  /** @return ChannelSettings */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param PropertyValue[] */
  public function setHints($hints)
  {
    $this->hints = $hints;
  }
  /** @return PropertyValue[] */
  public function getHints()
  {
    return $this->hints;
  }
  /** @param ImageSettings */
  public function setImage(ImageSettings $image)
  {
    $this->image = $image;
  }
  /** @return ImageSettings */
  public function getImage()
  {
    return $this->image;
  }
  /** @param WatchSettings */
  public function setWatch(WatchSettings $watch)
  {
    $this->watch = $watch;
  }
  /** @return WatchSettings */
  public function getWatch()
  {
    return $this->watch;
  }
}

class ChannelContentDetails extends \Google\Model
{
  /** @var ChannelContentDetailsRelatedPlaylists */
  public $relatedPlaylists;
  protected $relatedPlaylistsType = ChannelContentDetailsRelatedPlaylists::class;
  protected $relatedPlaylistsDataType = '';
  /** @param ChannelContentDetailsRelatedPlaylists */
  public function setRelatedPlaylists(ChannelContentDetailsRelatedPlaylists $relatedPlaylists)
  {
    $this->relatedPlaylists = $relatedPlaylists;
  }
  /** @return ChannelContentDetailsRelatedPlaylists */
  public function getRelatedPlaylists()
  {
    return $this->relatedPlaylists;
  }
}

class ChannelContentDetailsRelatedPlaylists extends \Google\Model
{
  /** @var string */
  public $favorites;
  /** @var string */
  public $likes;
  /** @var string */
  public $uploads;
  /** @var string */
  public $watchHistory;
  /** @var string */
  public $watchLater;

  /** @param string */
  public function setFavorites($favorites)
  {
    $this->favorites = $favorites;
  }
  /** @return string */
  public function getFavorites()
  {
    return $this->favorites;
  }
  /** @param string */
  public function setLikes($likes)
  {
    $this->likes = $likes;
  }
  /** @return string */
  public function getLikes()
  {
    return $this->likes;
  }
  /** @param string */
  public function setUploads($uploads)
  {
    $this->uploads = $uploads;
  }
  /** @return string */
  public function getUploads()
  {
    return $this->uploads;
  }
  /** @param string */
  public function setWatchHistory($watchHistory)
  {
    $this->watchHistory = $watchHistory;
  }
  /** @return string */
  public function getWatchHistory()
  {
    return $this->watchHistory;
  }
  /** @param string */
  public function setWatchLater($watchLater)
  {
    $this->watchLater = $watchLater;
  }
  /** @return string */
  public function getWatchLater()
  {
    return $this->watchLater;
  }
}

class ChannelContentOwnerDetails extends \Google\Model
{
  /** @var string */
  public $contentOwner;
  /** @var string */
  public $timeLinked;

  /** @param string */
  public function setContentOwner($contentOwner)
  {
    $this->contentOwner = $contentOwner;
  }
  /** @return string */
  public function getContentOwner()
  {
    return $this->contentOwner;
  }
  /** @param string */
  public function setTimeLinked($timeLinked)
  {
    $this->timeLinked = $timeLinked;
  }
  /** @return string */
  public function getTimeLinked()
  {
    return $this->timeLinked;
  }
}

class ChannelConversionPing extends \Google\Model
{
  /** @var string */
  public $context;
  /** @var string */
  public $conversionUrl;

  /** @param string */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return string */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setConversionUrl($conversionUrl)
  {
    $this->conversionUrl = $conversionUrl;
  }
  /** @return string */
  public function getConversionUrl()
  {
    return $this->conversionUrl;
  }
}

class ChannelConversionPings extends \Google\Collection
{
  /** @var ChannelConversionPing[] */
  public $pings;
  protected $collection_key = 'pings';
  protected $pingsType = ChannelConversionPing::class;
  protected $pingsDataType = 'array';
  /** @param ChannelConversionPing[] */
  public function setPings($pings)
  {
    $this->pings = $pings;
  }
  /** @return ChannelConversionPing[] */
  public function getPings()
  {
    return $this->pings;
  }
}

class ChannelListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Channel[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Channel::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Channel[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Channel[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class ChannelLocalization extends \Google\Model
{
  /** @var string */
  public $description;
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

class ChannelProfileDetails extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelUrl;
  /** @var string */
  public $displayName;
  /** @var string */
  public $profileImageUrl;

  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelUrl($channelUrl)
  {
    $this->channelUrl = $channelUrl;
  }
  /** @return string */
  public function getChannelUrl()
  {
    return $this->channelUrl;
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
  public function setProfileImageUrl($profileImageUrl)
  {
    $this->profileImageUrl = $profileImageUrl;
  }
  /** @return string */
  public function getProfileImageUrl()
  {
    return $this->profileImageUrl;
  }
}

class ChannelSection extends \Google\Model
{
  /** @var ChannelSectionContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var ChannelSectionLocalization[] */
  public $localizations;
  /** @var ChannelSectionSnippet */
  public $snippet;
  /** @var ChannelSectionTargeting */
  public $targeting;
  protected $contentDetailsType = ChannelSectionContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $localizationsType = ChannelSectionLocalization::class;
  protected $localizationsDataType = 'map';
  protected $snippetType = ChannelSectionSnippet::class;
  protected $snippetDataType = '';
  protected $targetingType = ChannelSectionTargeting::class;
  protected $targetingDataType = '';
  /** @param ChannelSectionContentDetails */
  public function setContentDetails(ChannelSectionContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return ChannelSectionContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param ChannelSectionLocalization[] */
  public function setLocalizations($localizations)
  {
    $this->localizations = $localizations;
  }
  /** @return ChannelSectionLocalization[] */
  public function getLocalizations()
  {
    return $this->localizations;
  }
  /** @param ChannelSectionSnippet */
  public function setSnippet(ChannelSectionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return ChannelSectionSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param ChannelSectionTargeting */
  public function setTargeting(ChannelSectionTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /** @return ChannelSectionTargeting */
  public function getTargeting()
  {
    return $this->targeting;
  }
}

class ChannelSectionContentDetails extends \Google\Collection
{
  /** @var string[] */
  public $channels;
  /** @var string[] */
  public $playlists;
  protected $collection_key = 'playlists';
  /** @param string[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return string[] */
  public function getChannels()
  {
    return $this->channels;
  }
  /** @param string[] */
  public function setPlaylists($playlists)
  {
    $this->playlists = $playlists;
  }
  /** @return string[] */
  public function getPlaylists()
  {
    return $this->playlists;
  }
}

class ChannelSectionListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var ChannelSection[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = ChannelSection::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param ChannelSection[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ChannelSection[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class ChannelSectionLocalization extends \Google\Model
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

class ChannelSectionSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $defaultLanguage;
  /** @var ChannelSectionLocalization */
  public $localized;
  /** @var string */
  public $position;
  /** @var string */
  public $style;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $localizedType = ChannelSectionLocalization::class;
  protected $localizedDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  /** @param ChannelSectionLocalization */
  public function setLocalized(ChannelSectionLocalization $localized)
  {
    $this->localized = $localized;
  }
  /** @return ChannelSectionLocalization */
  public function getLocalized()
  {
    return $this->localized;
  }
  /** @param string */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return string */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /** @return string */
  public function getStyle()
  {
    return $this->style;
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
}

class ChannelSectionTargeting extends \Google\Collection
{
  /** @var string[] */
  public $countries;
  /** @var string[] */
  public $languages;
  /** @var string[] */
  public $regions;
  protected $collection_key = 'regions';
  /** @param string[] */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /** @return string[] */
  public function getCountries()
  {
    return $this->countries;
  }
  /** @param string[] */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return string[] */
  public function getLanguages()
  {
    return $this->languages;
  }
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
}

class ChannelSettings extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string */
  public $defaultLanguage;
  /** @var string */
  public $defaultTab;
  /** @var string */
  public $description;
  /** @var string */
  public $featuredChannelsTitle;
  /** @var string[] */
  public $featuredChannelsUrls;
  /** @var string */
  public $keywords;
  /** @var bool */
  public $moderateComments;
  /** @var string */
  public $profileColor;
  /** @var bool */
  public $showBrowseView;
  /** @var bool */
  public $showRelatedChannels;
  /** @var string */
  public $title;
  /** @var string */
  public $trackingAnalyticsAccountId;
  /** @var string */
  public $unsubscribedTrailer;
  protected $collection_key = 'featuredChannelsUrls';
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
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  /** @param string */
  public function setDefaultTab($defaultTab)
  {
    $this->defaultTab = $defaultTab;
  }
  /** @return string */
  public function getDefaultTab()
  {
    return $this->defaultTab;
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
  public function setFeaturedChannelsTitle($featuredChannelsTitle)
  {
    $this->featuredChannelsTitle = $featuredChannelsTitle;
  }
  /** @return string */
  public function getFeaturedChannelsTitle()
  {
    return $this->featuredChannelsTitle;
  }
  /** @param string[] */
  public function setFeaturedChannelsUrls($featuredChannelsUrls)
  {
    $this->featuredChannelsUrls = $featuredChannelsUrls;
  }
  /** @return string[] */
  public function getFeaturedChannelsUrls()
  {
    return $this->featuredChannelsUrls;
  }
  /** @param string */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /** @return string */
  public function getKeywords()
  {
    return $this->keywords;
  }
  /** @param bool */
  public function setModerateComments($moderateComments)
  {
    $this->moderateComments = $moderateComments;
  }
  /** @return bool */
  public function getModerateComments()
  {
    return $this->moderateComments;
  }
  /** @param string */
  public function setProfileColor($profileColor)
  {
    $this->profileColor = $profileColor;
  }
  /** @return string */
  public function getProfileColor()
  {
    return $this->profileColor;
  }
  /** @param bool */
  public function setShowBrowseView($showBrowseView)
  {
    $this->showBrowseView = $showBrowseView;
  }
  /** @return bool */
  public function getShowBrowseView()
  {
    return $this->showBrowseView;
  }
  /** @param bool */
  public function setShowRelatedChannels($showRelatedChannels)
  {
    $this->showRelatedChannels = $showRelatedChannels;
  }
  /** @return bool */
  public function getShowRelatedChannels()
  {
    return $this->showRelatedChannels;
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
  public function setTrackingAnalyticsAccountId($trackingAnalyticsAccountId)
  {
    $this->trackingAnalyticsAccountId = $trackingAnalyticsAccountId;
  }
  /** @return string */
  public function getTrackingAnalyticsAccountId()
  {
    return $this->trackingAnalyticsAccountId;
  }
  /** @param string */
  public function setUnsubscribedTrailer($unsubscribedTrailer)
  {
    $this->unsubscribedTrailer = $unsubscribedTrailer;
  }
  /** @return string */
  public function getUnsubscribedTrailer()
  {
    return $this->unsubscribedTrailer;
  }
}

class ChannelSnippet extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $customUrl;
  /** @var string */
  public $defaultLanguage;
  /** @var string */
  public $description;
  /** @var ChannelLocalization */
  public $localized;
  /** @var string */
  public $publishedAt;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $localizedType = ChannelLocalization::class;
  protected $localizedDataType = '';
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
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
  /** @param string */
  public function setCustomUrl($customUrl)
  {
    $this->customUrl = $customUrl;
  }
  /** @return string */
  public function getCustomUrl()
  {
    return $this->customUrl;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
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
  /** @param ChannelLocalization */
  public function setLocalized(ChannelLocalization $localized)
  {
    $this->localized = $localized;
  }
  /** @return ChannelLocalization */
  public function getLocalized()
  {
    return $this->localized;
  }
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
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class ChannelStatistics extends \Google\Model
{
  /** @var string */
  public $commentCount;
  /** @var bool */
  public $hiddenSubscriberCount;
  /** @var string */
  public $subscriberCount;
  /** @var string */
  public $videoCount;
  /** @var string */
  public $viewCount;

  /** @param string */
  public function setCommentCount($commentCount)
  {
    $this->commentCount = $commentCount;
  }
  /** @return string */
  public function getCommentCount()
  {
    return $this->commentCount;
  }
  /** @param bool */
  public function setHiddenSubscriberCount($hiddenSubscriberCount)
  {
    $this->hiddenSubscriberCount = $hiddenSubscriberCount;
  }
  /** @return bool */
  public function getHiddenSubscriberCount()
  {
    return $this->hiddenSubscriberCount;
  }
  /** @param string */
  public function setSubscriberCount($subscriberCount)
  {
    $this->subscriberCount = $subscriberCount;
  }
  /** @return string */
  public function getSubscriberCount()
  {
    return $this->subscriberCount;
  }
  /** @param string */
  public function setVideoCount($videoCount)
  {
    $this->videoCount = $videoCount;
  }
  /** @return string */
  public function getVideoCount()
  {
    return $this->videoCount;
  }
  /** @param string */
  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  /** @return string */
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

class ChannelStatus extends \Google\Model
{
  /** @var bool */
  public $isLinked;
  /** @var string */
  public $longUploadsStatus;
  /** @var bool */
  public $madeForKids;
  /** @var string */
  public $privacyStatus;
  /** @var bool */
  public $selfDeclaredMadeForKids;

  /** @param bool */
  public function setIsLinked($isLinked)
  {
    $this->isLinked = $isLinked;
  }
  /** @return bool */
  public function getIsLinked()
  {
    return $this->isLinked;
  }
  /** @param string */
  public function setLongUploadsStatus($longUploadsStatus)
  {
    $this->longUploadsStatus = $longUploadsStatus;
  }
  /** @return string */
  public function getLongUploadsStatus()
  {
    return $this->longUploadsStatus;
  }
  /** @param bool */
  public function setMadeForKids($madeForKids)
  {
    $this->madeForKids = $madeForKids;
  }
  /** @return bool */
  public function getMadeForKids()
  {
    return $this->madeForKids;
  }
  /** @param string */
  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }
  /** @return string */
  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
  /** @param bool */
  public function setSelfDeclaredMadeForKids($selfDeclaredMadeForKids)
  {
    $this->selfDeclaredMadeForKids = $selfDeclaredMadeForKids;
  }
  /** @return bool */
  public function getSelfDeclaredMadeForKids()
  {
    return $this->selfDeclaredMadeForKids;
  }
}

class ChannelToStoreLinkDetails extends \Google\Model
{
  /** @var string */
  public $merchantId;
  /** @var string */
  public $storeName;
  /** @var string */
  public $storeUrl;

  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setStoreName($storeName)
  {
    $this->storeName = $storeName;
  }
  /** @return string */
  public function getStoreName()
  {
    return $this->storeName;
  }
  /** @param string */
  public function setStoreUrl($storeUrl)
  {
    $this->storeUrl = $storeUrl;
  }
  /** @return string */
  public function getStoreUrl()
  {
    return $this->storeUrl;
  }
}

class ChannelTopicDetails extends \Google\Collection
{
  /** @var string[] */
  public $topicCategories;
  /** @var string[] */
  public $topicIds;
  protected $collection_key = 'topicIds';
  /** @param string[] */
  public function setTopicCategories($topicCategories)
  {
    $this->topicCategories = $topicCategories;
  }
  /** @return string[] */
  public function getTopicCategories()
  {
    return $this->topicCategories;
  }
  /** @param string[] */
  public function setTopicIds($topicIds)
  {
    $this->topicIds = $topicIds;
  }
  /** @return string[] */
  public function getTopicIds()
  {
    return $this->topicIds;
  }
}

class Comment extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var CommentSnippet */
  public $snippet;
  protected $snippetType = CommentSnippet::class;
  protected $snippetDataType = '';
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
  /** @param CommentSnippet */
  public function setSnippet(CommentSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return CommentSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class CommentListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Comment[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Comment::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Comment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Comment[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class CommentSnippet extends \Google\Model
{
  /** @var CommentSnippetAuthorChannelId */
  public $authorChannelId;
  /** @var string */
  public $authorChannelUrl;
  /** @var string */
  public $authorDisplayName;
  /** @var string */
  public $authorProfileImageUrl;
  /** @var bool */
  public $canRate;
  /** @var string */
  public $channelId;
  /** @var string */
  public $likeCount;
  /** @var string */
  public $moderationStatus;
  /** @var string */
  public $parentId;
  /** @var string */
  public $publishedAt;
  /** @var string */
  public $textDisplay;
  /** @var string */
  public $textOriginal;
  /** @var string */
  public $updatedAt;
  /** @var string */
  public $videoId;
  /** @var string */
  public $viewerRating;
  protected $authorChannelIdType = CommentSnippetAuthorChannelId::class;
  protected $authorChannelIdDataType = '';
  /** @param CommentSnippetAuthorChannelId */
  public function setAuthorChannelId(CommentSnippetAuthorChannelId $authorChannelId)
  {
    $this->authorChannelId = $authorChannelId;
  }
  /** @return CommentSnippetAuthorChannelId */
  public function getAuthorChannelId()
  {
    return $this->authorChannelId;
  }
  /** @param string */
  public function setAuthorChannelUrl($authorChannelUrl)
  {
    $this->authorChannelUrl = $authorChannelUrl;
  }
  /** @return string */
  public function getAuthorChannelUrl()
  {
    return $this->authorChannelUrl;
  }
  /** @param string */
  public function setAuthorDisplayName($authorDisplayName)
  {
    $this->authorDisplayName = $authorDisplayName;
  }
  /** @return string */
  public function getAuthorDisplayName()
  {
    return $this->authorDisplayName;
  }
  /** @param string */
  public function setAuthorProfileImageUrl($authorProfileImageUrl)
  {
    $this->authorProfileImageUrl = $authorProfileImageUrl;
  }
  /** @return string */
  public function getAuthorProfileImageUrl()
  {
    return $this->authorProfileImageUrl;
  }
  /** @param bool */
  public function setCanRate($canRate)
  {
    $this->canRate = $canRate;
  }
  /** @return bool */
  public function getCanRate()
  {
    return $this->canRate;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setLikeCount($likeCount)
  {
    $this->likeCount = $likeCount;
  }
  /** @return string */
  public function getLikeCount()
  {
    return $this->likeCount;
  }
  /** @param string */
  public function setModerationStatus($moderationStatus)
  {
    $this->moderationStatus = $moderationStatus;
  }
  /** @return string */
  public function getModerationStatus()
  {
    return $this->moderationStatus;
  }
  /** @param string */
  public function setParentId($parentId)
  {
    $this->parentId = $parentId;
  }
  /** @return string */
  public function getParentId()
  {
    return $this->parentId;
  }
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
  public function setTextDisplay($textDisplay)
  {
    $this->textDisplay = $textDisplay;
  }
  /** @return string */
  public function getTextDisplay()
  {
    return $this->textDisplay;
  }
  /** @param string */
  public function setTextOriginal($textOriginal)
  {
    $this->textOriginal = $textOriginal;
  }
  /** @return string */
  public function getTextOriginal()
  {
    return $this->textOriginal;
  }
  /** @param string */
  public function setUpdatedAt($updatedAt)
  {
    $this->updatedAt = $updatedAt;
  }
  /** @return string */
  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
  /** @param string */
  public function setViewerRating($viewerRating)
  {
    $this->viewerRating = $viewerRating;
  }
  /** @return string */
  public function getViewerRating()
  {
    return $this->viewerRating;
  }
}

class CommentSnippetAuthorChannelId extends \Google\Model
{
  /** @var string */
  public $value;

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

class CommentThread extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var CommentThreadReplies */
  public $replies;
  /** @var CommentThreadSnippet */
  public $snippet;
  protected $repliesType = CommentThreadReplies::class;
  protected $repliesDataType = '';
  protected $snippetType = CommentThreadSnippet::class;
  protected $snippetDataType = '';
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
  /** @param CommentThreadReplies */
  public function setReplies(CommentThreadReplies $replies)
  {
    $this->replies = $replies;
  }
  /** @return CommentThreadReplies */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param CommentThreadSnippet */
  public function setSnippet(CommentThreadSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return CommentThreadSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class CommentThreadListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var CommentThread[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = CommentThread::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param CommentThread[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CommentThread[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class CommentThreadReplies extends \Google\Collection
{
  /** @var Comment[] */
  public $comments;
  protected $collection_key = 'comments';
  protected $commentsType = Comment::class;
  protected $commentsDataType = 'array';
  /** @param Comment[] */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return Comment[] */
  public function getComments()
  {
    return $this->comments;
  }
}

class CommentThreadSnippet extends \Google\Model
{
  /** @var bool */
  public $canReply;
  /** @var string */
  public $channelId;
  /** @var bool */
  public $isPublic;
  /** @var Comment */
  public $topLevelComment;
  /** @var string */
  public $totalReplyCount;
  /** @var string */
  public $videoId;
  protected $topLevelCommentType = Comment::class;
  protected $topLevelCommentDataType = '';
  /** @param bool */
  public function setCanReply($canReply)
  {
    $this->canReply = $canReply;
  }
  /** @return bool */
  public function getCanReply()
  {
    return $this->canReply;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param bool */
  public function setIsPublic($isPublic)
  {
    $this->isPublic = $isPublic;
  }
  /** @return bool */
  public function getIsPublic()
  {
    return $this->isPublic;
  }
  /** @param Comment */
  public function setTopLevelComment(Comment $topLevelComment)
  {
    $this->topLevelComment = $topLevelComment;
  }
  /** @return Comment */
  public function getTopLevelComment()
  {
    return $this->topLevelComment;
  }
  /** @param string */
  public function setTotalReplyCount($totalReplyCount)
  {
    $this->totalReplyCount = $totalReplyCount;
  }
  /** @return string */
  public function getTotalReplyCount()
  {
    return $this->totalReplyCount;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class ContentRating extends \Google\Collection
{
  /** @var string */
  public $acbRating;
  /** @var string */
  public $agcomRating;
  /** @var string */
  public $anatelRating;
  /** @var string */
  public $bbfcRating;
  /** @var string */
  public $bfvcRating;
  /** @var string */
  public $bmukkRating;
  /** @var string */
  public $catvRating;
  /** @var string */
  public $catvfrRating;
  /** @var string */
  public $cbfcRating;
  /** @var string */
  public $cccRating;
  /** @var string */
  public $cceRating;
  /** @var string */
  public $chfilmRating;
  /** @var string */
  public $chvrsRating;
  /** @var string */
  public $cicfRating;
  /** @var string */
  public $cnaRating;
  /** @var string */
  public $cncRating;
  /** @var string */
  public $csaRating;
  /** @var string */
  public $cscfRating;
  /** @var string */
  public $czfilmRating;
  /** @var string */
  public $djctqRating;
  /** @var string[] */
  public $djctqRatingReasons;
  /** @var string */
  public $ecbmctRating;
  /** @var string */
  public $eefilmRating;
  /** @var string */
  public $egfilmRating;
  /** @var string */
  public $eirinRating;
  /** @var string */
  public $fcbmRating;
  /** @var string */
  public $fcoRating;
  /** @var string */
  public $fmocRating;
  /** @var string */
  public $fpbRating;
  /** @var string[] */
  public $fpbRatingReasons;
  /** @var string */
  public $fskRating;
  /** @var string */
  public $grfilmRating;
  /** @var string */
  public $icaaRating;
  /** @var string */
  public $ifcoRating;
  /** @var string */
  public $ilfilmRating;
  /** @var string */
  public $incaaRating;
  /** @var string */
  public $kfcbRating;
  /** @var string */
  public $kijkwijzerRating;
  /** @var string */
  public $kmrbRating;
  /** @var string */
  public $lsfRating;
  /** @var string */
  public $mccaaRating;
  /** @var string */
  public $mccypRating;
  /** @var string */
  public $mcstRating;
  /** @var string */
  public $mdaRating;
  /** @var string */
  public $medietilsynetRating;
  /** @var string */
  public $mekuRating;
  /** @var string */
  public $menaMpaaRating;
  /** @var string */
  public $mibacRating;
  /** @var string */
  public $mocRating;
  /** @var string */
  public $moctwRating;
  /** @var string */
  public $mpaaRating;
  /** @var string */
  public $mpaatRating;
  /** @var string */
  public $mtrcbRating;
  /** @var string */
  public $nbcRating;
  /** @var string */
  public $nbcplRating;
  /** @var string */
  public $nfrcRating;
  /** @var string */
  public $nfvcbRating;
  /** @var string */
  public $nkclvRating;
  /** @var string */
  public $nmcRating;
  /** @var string */
  public $oflcRating;
  /** @var string */
  public $pefilmRating;
  /** @var string */
  public $rcnofRating;
  /** @var string */
  public $resorteviolenciaRating;
  /** @var string */
  public $rtcRating;
  /** @var string */
  public $rteRating;
  /** @var string */
  public $russiaRating;
  /** @var string */
  public $skfilmRating;
  /** @var string */
  public $smaisRating;
  /** @var string */
  public $smsaRating;
  /** @var string */
  public $tvpgRating;
  /** @var string */
  public $ytRating;
  protected $collection_key = 'fpbRatingReasons';
  /** @param string */
  public function setAcbRating($acbRating)
  {
    $this->acbRating = $acbRating;
  }
  /** @return string */
  public function getAcbRating()
  {
    return $this->acbRating;
  }
  /** @param string */
  public function setAgcomRating($agcomRating)
  {
    $this->agcomRating = $agcomRating;
  }
  /** @return string */
  public function getAgcomRating()
  {
    return $this->agcomRating;
  }
  /** @param string */
  public function setAnatelRating($anatelRating)
  {
    $this->anatelRating = $anatelRating;
  }
  /** @return string */
  public function getAnatelRating()
  {
    return $this->anatelRating;
  }
  /** @param string */
  public function setBbfcRating($bbfcRating)
  {
    $this->bbfcRating = $bbfcRating;
  }
  /** @return string */
  public function getBbfcRating()
  {
    return $this->bbfcRating;
  }
  /** @param string */
  public function setBfvcRating($bfvcRating)
  {
    $this->bfvcRating = $bfvcRating;
  }
  /** @return string */
  public function getBfvcRating()
  {
    return $this->bfvcRating;
  }
  /** @param string */
  public function setBmukkRating($bmukkRating)
  {
    $this->bmukkRating = $bmukkRating;
  }
  /** @return string */
  public function getBmukkRating()
  {
    return $this->bmukkRating;
  }
  /** @param string */
  public function setCatvRating($catvRating)
  {
    $this->catvRating = $catvRating;
  }
  /** @return string */
  public function getCatvRating()
  {
    return $this->catvRating;
  }
  /** @param string */
  public function setCatvfrRating($catvfrRating)
  {
    $this->catvfrRating = $catvfrRating;
  }
  /** @return string */
  public function getCatvfrRating()
  {
    return $this->catvfrRating;
  }
  /** @param string */
  public function setCbfcRating($cbfcRating)
  {
    $this->cbfcRating = $cbfcRating;
  }
  /** @return string */
  public function getCbfcRating()
  {
    return $this->cbfcRating;
  }
  /** @param string */
  public function setCccRating($cccRating)
  {
    $this->cccRating = $cccRating;
  }
  /** @return string */
  public function getCccRating()
  {
    return $this->cccRating;
  }
  /** @param string */
  public function setCceRating($cceRating)
  {
    $this->cceRating = $cceRating;
  }
  /** @return string */
  public function getCceRating()
  {
    return $this->cceRating;
  }
  /** @param string */
  public function setChfilmRating($chfilmRating)
  {
    $this->chfilmRating = $chfilmRating;
  }
  /** @return string */
  public function getChfilmRating()
  {
    return $this->chfilmRating;
  }
  /** @param string */
  public function setChvrsRating($chvrsRating)
  {
    $this->chvrsRating = $chvrsRating;
  }
  /** @return string */
  public function getChvrsRating()
  {
    return $this->chvrsRating;
  }
  /** @param string */
  public function setCicfRating($cicfRating)
  {
    $this->cicfRating = $cicfRating;
  }
  /** @return string */
  public function getCicfRating()
  {
    return $this->cicfRating;
  }
  /** @param string */
  public function setCnaRating($cnaRating)
  {
    $this->cnaRating = $cnaRating;
  }
  /** @return string */
  public function getCnaRating()
  {
    return $this->cnaRating;
  }
  /** @param string */
  public function setCncRating($cncRating)
  {
    $this->cncRating = $cncRating;
  }
  /** @return string */
  public function getCncRating()
  {
    return $this->cncRating;
  }
  /** @param string */
  public function setCsaRating($csaRating)
  {
    $this->csaRating = $csaRating;
  }
  /** @return string */
  public function getCsaRating()
  {
    return $this->csaRating;
  }
  /** @param string */
  public function setCscfRating($cscfRating)
  {
    $this->cscfRating = $cscfRating;
  }
  /** @return string */
  public function getCscfRating()
  {
    return $this->cscfRating;
  }
  /** @param string */
  public function setCzfilmRating($czfilmRating)
  {
    $this->czfilmRating = $czfilmRating;
  }
  /** @return string */
  public function getCzfilmRating()
  {
    return $this->czfilmRating;
  }
  /** @param string */
  public function setDjctqRating($djctqRating)
  {
    $this->djctqRating = $djctqRating;
  }
  /** @return string */
  public function getDjctqRating()
  {
    return $this->djctqRating;
  }
  /** @param string[] */
  public function setDjctqRatingReasons($djctqRatingReasons)
  {
    $this->djctqRatingReasons = $djctqRatingReasons;
  }
  /** @return string[] */
  public function getDjctqRatingReasons()
  {
    return $this->djctqRatingReasons;
  }
  /** @param string */
  public function setEcbmctRating($ecbmctRating)
  {
    $this->ecbmctRating = $ecbmctRating;
  }
  /** @return string */
  public function getEcbmctRating()
  {
    return $this->ecbmctRating;
  }
  /** @param string */
  public function setEefilmRating($eefilmRating)
  {
    $this->eefilmRating = $eefilmRating;
  }
  /** @return string */
  public function getEefilmRating()
  {
    return $this->eefilmRating;
  }
  /** @param string */
  public function setEgfilmRating($egfilmRating)
  {
    $this->egfilmRating = $egfilmRating;
  }
  /** @return string */
  public function getEgfilmRating()
  {
    return $this->egfilmRating;
  }
  /** @param string */
  public function setEirinRating($eirinRating)
  {
    $this->eirinRating = $eirinRating;
  }
  /** @return string */
  public function getEirinRating()
  {
    return $this->eirinRating;
  }
  /** @param string */
  public function setFcbmRating($fcbmRating)
  {
    $this->fcbmRating = $fcbmRating;
  }
  /** @return string */
  public function getFcbmRating()
  {
    return $this->fcbmRating;
  }
  /** @param string */
  public function setFcoRating($fcoRating)
  {
    $this->fcoRating = $fcoRating;
  }
  /** @return string */
  public function getFcoRating()
  {
    return $this->fcoRating;
  }
  /** @param string */
  public function setFmocRating($fmocRating)
  {
    $this->fmocRating = $fmocRating;
  }
  /** @return string */
  public function getFmocRating()
  {
    return $this->fmocRating;
  }
  /** @param string */
  public function setFpbRating($fpbRating)
  {
    $this->fpbRating = $fpbRating;
  }
  /** @return string */
  public function getFpbRating()
  {
    return $this->fpbRating;
  }
  /** @param string[] */
  public function setFpbRatingReasons($fpbRatingReasons)
  {
    $this->fpbRatingReasons = $fpbRatingReasons;
  }
  /** @return string[] */
  public function getFpbRatingReasons()
  {
    return $this->fpbRatingReasons;
  }
  /** @param string */
  public function setFskRating($fskRating)
  {
    $this->fskRating = $fskRating;
  }
  /** @return string */
  public function getFskRating()
  {
    return $this->fskRating;
  }
  /** @param string */
  public function setGrfilmRating($grfilmRating)
  {
    $this->grfilmRating = $grfilmRating;
  }
  /** @return string */
  public function getGrfilmRating()
  {
    return $this->grfilmRating;
  }
  /** @param string */
  public function setIcaaRating($icaaRating)
  {
    $this->icaaRating = $icaaRating;
  }
  /** @return string */
  public function getIcaaRating()
  {
    return $this->icaaRating;
  }
  /** @param string */
  public function setIfcoRating($ifcoRating)
  {
    $this->ifcoRating = $ifcoRating;
  }
  /** @return string */
  public function getIfcoRating()
  {
    return $this->ifcoRating;
  }
  /** @param string */
  public function setIlfilmRating($ilfilmRating)
  {
    $this->ilfilmRating = $ilfilmRating;
  }
  /** @return string */
  public function getIlfilmRating()
  {
    return $this->ilfilmRating;
  }
  /** @param string */
  public function setIncaaRating($incaaRating)
  {
    $this->incaaRating = $incaaRating;
  }
  /** @return string */
  public function getIncaaRating()
  {
    return $this->incaaRating;
  }
  /** @param string */
  public function setKfcbRating($kfcbRating)
  {
    $this->kfcbRating = $kfcbRating;
  }
  /** @return string */
  public function getKfcbRating()
  {
    return $this->kfcbRating;
  }
  /** @param string */
  public function setKijkwijzerRating($kijkwijzerRating)
  {
    $this->kijkwijzerRating = $kijkwijzerRating;
  }
  /** @return string */
  public function getKijkwijzerRating()
  {
    return $this->kijkwijzerRating;
  }
  /** @param string */
  public function setKmrbRating($kmrbRating)
  {
    $this->kmrbRating = $kmrbRating;
  }
  /** @return string */
  public function getKmrbRating()
  {
    return $this->kmrbRating;
  }
  /** @param string */
  public function setLsfRating($lsfRating)
  {
    $this->lsfRating = $lsfRating;
  }
  /** @return string */
  public function getLsfRating()
  {
    return $this->lsfRating;
  }
  /** @param string */
  public function setMccaaRating($mccaaRating)
  {
    $this->mccaaRating = $mccaaRating;
  }
  /** @return string */
  public function getMccaaRating()
  {
    return $this->mccaaRating;
  }
  /** @param string */
  public function setMccypRating($mccypRating)
  {
    $this->mccypRating = $mccypRating;
  }
  /** @return string */
  public function getMccypRating()
  {
    return $this->mccypRating;
  }
  /** @param string */
  public function setMcstRating($mcstRating)
  {
    $this->mcstRating = $mcstRating;
  }
  /** @return string */
  public function getMcstRating()
  {
    return $this->mcstRating;
  }
  /** @param string */
  public function setMdaRating($mdaRating)
  {
    $this->mdaRating = $mdaRating;
  }
  /** @return string */
  public function getMdaRating()
  {
    return $this->mdaRating;
  }
  /** @param string */
  public function setMedietilsynetRating($medietilsynetRating)
  {
    $this->medietilsynetRating = $medietilsynetRating;
  }
  /** @return string */
  public function getMedietilsynetRating()
  {
    return $this->medietilsynetRating;
  }
  /** @param string */
  public function setMekuRating($mekuRating)
  {
    $this->mekuRating = $mekuRating;
  }
  /** @return string */
  public function getMekuRating()
  {
    return $this->mekuRating;
  }
  /** @param string */
  public function setMenaMpaaRating($menaMpaaRating)
  {
    $this->menaMpaaRating = $menaMpaaRating;
  }
  /** @return string */
  public function getMenaMpaaRating()
  {
    return $this->menaMpaaRating;
  }
  /** @param string */
  public function setMibacRating($mibacRating)
  {
    $this->mibacRating = $mibacRating;
  }
  /** @return string */
  public function getMibacRating()
  {
    return $this->mibacRating;
  }
  /** @param string */
  public function setMocRating($mocRating)
  {
    $this->mocRating = $mocRating;
  }
  /** @return string */
  public function getMocRating()
  {
    return $this->mocRating;
  }
  /** @param string */
  public function setMoctwRating($moctwRating)
  {
    $this->moctwRating = $moctwRating;
  }
  /** @return string */
  public function getMoctwRating()
  {
    return $this->moctwRating;
  }
  /** @param string */
  public function setMpaaRating($mpaaRating)
  {
    $this->mpaaRating = $mpaaRating;
  }
  /** @return string */
  public function getMpaaRating()
  {
    return $this->mpaaRating;
  }
  /** @param string */
  public function setMpaatRating($mpaatRating)
  {
    $this->mpaatRating = $mpaatRating;
  }
  /** @return string */
  public function getMpaatRating()
  {
    return $this->mpaatRating;
  }
  /** @param string */
  public function setMtrcbRating($mtrcbRating)
  {
    $this->mtrcbRating = $mtrcbRating;
  }
  /** @return string */
  public function getMtrcbRating()
  {
    return $this->mtrcbRating;
  }
  /** @param string */
  public function setNbcRating($nbcRating)
  {
    $this->nbcRating = $nbcRating;
  }
  /** @return string */
  public function getNbcRating()
  {
    return $this->nbcRating;
  }
  /** @param string */
  public function setNbcplRating($nbcplRating)
  {
    $this->nbcplRating = $nbcplRating;
  }
  /** @return string */
  public function getNbcplRating()
  {
    return $this->nbcplRating;
  }
  /** @param string */
  public function setNfrcRating($nfrcRating)
  {
    $this->nfrcRating = $nfrcRating;
  }
  /** @return string */
  public function getNfrcRating()
  {
    return $this->nfrcRating;
  }
  /** @param string */
  public function setNfvcbRating($nfvcbRating)
  {
    $this->nfvcbRating = $nfvcbRating;
  }
  /** @return string */
  public function getNfvcbRating()
  {
    return $this->nfvcbRating;
  }
  /** @param string */
  public function setNkclvRating($nkclvRating)
  {
    $this->nkclvRating = $nkclvRating;
  }
  /** @return string */
  public function getNkclvRating()
  {
    return $this->nkclvRating;
  }
  /** @param string */
  public function setNmcRating($nmcRating)
  {
    $this->nmcRating = $nmcRating;
  }
  /** @return string */
  public function getNmcRating()
  {
    return $this->nmcRating;
  }
  /** @param string */
  public function setOflcRating($oflcRating)
  {
    $this->oflcRating = $oflcRating;
  }
  /** @return string */
  public function getOflcRating()
  {
    return $this->oflcRating;
  }
  /** @param string */
  public function setPefilmRating($pefilmRating)
  {
    $this->pefilmRating = $pefilmRating;
  }
  /** @return string */
  public function getPefilmRating()
  {
    return $this->pefilmRating;
  }
  /** @param string */
  public function setRcnofRating($rcnofRating)
  {
    $this->rcnofRating = $rcnofRating;
  }
  /** @return string */
  public function getRcnofRating()
  {
    return $this->rcnofRating;
  }
  /** @param string */
  public function setResorteviolenciaRating($resorteviolenciaRating)
  {
    $this->resorteviolenciaRating = $resorteviolenciaRating;
  }
  /** @return string */
  public function getResorteviolenciaRating()
  {
    return $this->resorteviolenciaRating;
  }
  /** @param string */
  public function setRtcRating($rtcRating)
  {
    $this->rtcRating = $rtcRating;
  }
  /** @return string */
  public function getRtcRating()
  {
    return $this->rtcRating;
  }
  /** @param string */
  public function setRteRating($rteRating)
  {
    $this->rteRating = $rteRating;
  }
  /** @return string */
  public function getRteRating()
  {
    return $this->rteRating;
  }
  /** @param string */
  public function setRussiaRating($russiaRating)
  {
    $this->russiaRating = $russiaRating;
  }
  /** @return string */
  public function getRussiaRating()
  {
    return $this->russiaRating;
  }
  /** @param string */
  public function setSkfilmRating($skfilmRating)
  {
    $this->skfilmRating = $skfilmRating;
  }
  /** @return string */
  public function getSkfilmRating()
  {
    return $this->skfilmRating;
  }
  /** @param string */
  public function setSmaisRating($smaisRating)
  {
    $this->smaisRating = $smaisRating;
  }
  /** @return string */
  public function getSmaisRating()
  {
    return $this->smaisRating;
  }
  /** @param string */
  public function setSmsaRating($smsaRating)
  {
    $this->smsaRating = $smsaRating;
  }
  /** @return string */
  public function getSmsaRating()
  {
    return $this->smsaRating;
  }
  /** @param string */
  public function setTvpgRating($tvpgRating)
  {
    $this->tvpgRating = $tvpgRating;
  }
  /** @return string */
  public function getTvpgRating()
  {
    return $this->tvpgRating;
  }
  /** @param string */
  public function setYtRating($ytRating)
  {
    $this->ytRating = $ytRating;
  }
  /** @return string */
  public function getYtRating()
  {
    return $this->ytRating;
  }
}

class Cuepoint extends \Google\Model
{
  /** @var string */
  public $cueType;
  /** @var string */
  public $durationSecs;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $insertionOffsetTimeMs;
  /** @var string */
  public $walltimeMs;

  /** @param string */
  public function setCueType($cueType)
  {
    $this->cueType = $cueType;
  }
  /** @return string */
  public function getCueType()
  {
    return $this->cueType;
  }
  /** @param string */
  public function setDurationSecs($durationSecs)
  {
    $this->durationSecs = $durationSecs;
  }
  /** @return string */
  public function getDurationSecs()
  {
    return $this->durationSecs;
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
  public function setInsertionOffsetTimeMs($insertionOffsetTimeMs)
  {
    $this->insertionOffsetTimeMs = $insertionOffsetTimeMs;
  }
  /** @return string */
  public function getInsertionOffsetTimeMs()
  {
    return $this->insertionOffsetTimeMs;
  }
  /** @param string */
  public function setWalltimeMs($walltimeMs)
  {
    $this->walltimeMs = $walltimeMs;
  }
  /** @return string */
  public function getWalltimeMs()
  {
    return $this->walltimeMs;
  }
}

class Entity extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $typeId;
  /** @var string */
  public $url;

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
  public function setTypeId($typeId)
  {
    $this->typeId = $typeId;
  }
  /** @return string */
  public function getTypeId()
  {
    return $this->typeId;
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

class GeoPoint extends \Google\Model
{
  public $altitude;
  public $latitude;
  public $longitude;

  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }
  public function getAltitude()
  {
    return $this->altitude;
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
}

class I18nLanguage extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var I18nLanguageSnippet */
  public $snippet;
  protected $snippetType = I18nLanguageSnippet::class;
  protected $snippetDataType = '';
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
  /** @param I18nLanguageSnippet */
  public function setSnippet(I18nLanguageSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return I18nLanguageSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class I18nLanguageListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var I18nLanguage[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = I18nLanguage::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param I18nLanguage[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return I18nLanguage[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class I18nLanguageSnippet extends \Google\Model
{
  /** @var string */
  public $hl;
  /** @var string */
  public $name;

  /** @param string */
  public function setHl($hl)
  {
    $this->hl = $hl;
  }
  /** @return string */
  public function getHl()
  {
    return $this->hl;
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

class I18nRegion extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var I18nRegionSnippet */
  public $snippet;
  protected $snippetType = I18nRegionSnippet::class;
  protected $snippetDataType = '';
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
  /** @param I18nRegionSnippet */
  public function setSnippet(I18nRegionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return I18nRegionSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class I18nRegionListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var I18nRegion[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = I18nRegion::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param I18nRegion[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return I18nRegion[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class I18nRegionSnippet extends \Google\Model
{
  /** @var string */
  public $gl;
  /** @var string */
  public $name;

  /** @param string */
  public function setGl($gl)
  {
    $this->gl = $gl;
  }
  /** @return string */
  public function getGl()
  {
    return $this->gl;
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

class ImageSettings extends \Google\Model
{
  /** @var LocalizedProperty */
  public $backgroundImageUrl;
  /** @var string */
  public $bannerExternalUrl;
  /** @var string */
  public $bannerImageUrl;
  /** @var string */
  public $bannerMobileExtraHdImageUrl;
  /** @var string */
  public $bannerMobileHdImageUrl;
  /** @var string */
  public $bannerMobileImageUrl;
  /** @var string */
  public $bannerMobileLowImageUrl;
  /** @var string */
  public $bannerMobileMediumHdImageUrl;
  /** @var string */
  public $bannerTabletExtraHdImageUrl;
  /** @var string */
  public $bannerTabletHdImageUrl;
  /** @var string */
  public $bannerTabletImageUrl;
  /** @var string */
  public $bannerTabletLowImageUrl;
  /** @var string */
  public $bannerTvHighImageUrl;
  /** @var string */
  public $bannerTvImageUrl;
  /** @var string */
  public $bannerTvLowImageUrl;
  /** @var string */
  public $bannerTvMediumImageUrl;
  /** @var LocalizedProperty */
  public $largeBrandedBannerImageImapScript;
  /** @var LocalizedProperty */
  public $largeBrandedBannerImageUrl;
  /** @var LocalizedProperty */
  public $smallBrandedBannerImageImapScript;
  /** @var LocalizedProperty */
  public $smallBrandedBannerImageUrl;
  /** @var string */
  public $trackingImageUrl;
  /** @var string */
  public $watchIconImageUrl;
  protected $backgroundImageUrlType = LocalizedProperty::class;
  protected $backgroundImageUrlDataType = '';
  protected $largeBrandedBannerImageImapScriptType = LocalizedProperty::class;
  protected $largeBrandedBannerImageImapScriptDataType = '';
  protected $largeBrandedBannerImageUrlType = LocalizedProperty::class;
  protected $largeBrandedBannerImageUrlDataType = '';
  protected $smallBrandedBannerImageImapScriptType = LocalizedProperty::class;
  protected $smallBrandedBannerImageImapScriptDataType = '';
  protected $smallBrandedBannerImageUrlType = LocalizedProperty::class;
  protected $smallBrandedBannerImageUrlDataType = '';
  /** @param LocalizedProperty */
  public function setBackgroundImageUrl(LocalizedProperty $backgroundImageUrl)
  {
    $this->backgroundImageUrl = $backgroundImageUrl;
  }
  /** @return LocalizedProperty */
  public function getBackgroundImageUrl()
  {
    return $this->backgroundImageUrl;
  }
  /** @param string */
  public function setBannerExternalUrl($bannerExternalUrl)
  {
    $this->bannerExternalUrl = $bannerExternalUrl;
  }
  /** @return string */
  public function getBannerExternalUrl()
  {
    return $this->bannerExternalUrl;
  }
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
  /** @param string */
  public function setBannerMobileExtraHdImageUrl($bannerMobileExtraHdImageUrl)
  {
    $this->bannerMobileExtraHdImageUrl = $bannerMobileExtraHdImageUrl;
  }
  /** @return string */
  public function getBannerMobileExtraHdImageUrl()
  {
    return $this->bannerMobileExtraHdImageUrl;
  }
  /** @param string */
  public function setBannerMobileHdImageUrl($bannerMobileHdImageUrl)
  {
    $this->bannerMobileHdImageUrl = $bannerMobileHdImageUrl;
  }
  /** @return string */
  public function getBannerMobileHdImageUrl()
  {
    return $this->bannerMobileHdImageUrl;
  }
  /** @param string */
  public function setBannerMobileImageUrl($bannerMobileImageUrl)
  {
    $this->bannerMobileImageUrl = $bannerMobileImageUrl;
  }
  /** @return string */
  public function getBannerMobileImageUrl()
  {
    return $this->bannerMobileImageUrl;
  }
  /** @param string */
  public function setBannerMobileLowImageUrl($bannerMobileLowImageUrl)
  {
    $this->bannerMobileLowImageUrl = $bannerMobileLowImageUrl;
  }
  /** @return string */
  public function getBannerMobileLowImageUrl()
  {
    return $this->bannerMobileLowImageUrl;
  }
  /** @param string */
  public function setBannerMobileMediumHdImageUrl($bannerMobileMediumHdImageUrl)
  {
    $this->bannerMobileMediumHdImageUrl = $bannerMobileMediumHdImageUrl;
  }
  /** @return string */
  public function getBannerMobileMediumHdImageUrl()
  {
    return $this->bannerMobileMediumHdImageUrl;
  }
  /** @param string */
  public function setBannerTabletExtraHdImageUrl($bannerTabletExtraHdImageUrl)
  {
    $this->bannerTabletExtraHdImageUrl = $bannerTabletExtraHdImageUrl;
  }
  /** @return string */
  public function getBannerTabletExtraHdImageUrl()
  {
    return $this->bannerTabletExtraHdImageUrl;
  }
  /** @param string */
  public function setBannerTabletHdImageUrl($bannerTabletHdImageUrl)
  {
    $this->bannerTabletHdImageUrl = $bannerTabletHdImageUrl;
  }
  /** @return string */
  public function getBannerTabletHdImageUrl()
  {
    return $this->bannerTabletHdImageUrl;
  }
  /** @param string */
  public function setBannerTabletImageUrl($bannerTabletImageUrl)
  {
    $this->bannerTabletImageUrl = $bannerTabletImageUrl;
  }
  /** @return string */
  public function getBannerTabletImageUrl()
  {
    return $this->bannerTabletImageUrl;
  }
  /** @param string */
  public function setBannerTabletLowImageUrl($bannerTabletLowImageUrl)
  {
    $this->bannerTabletLowImageUrl = $bannerTabletLowImageUrl;
  }
  /** @return string */
  public function getBannerTabletLowImageUrl()
  {
    return $this->bannerTabletLowImageUrl;
  }
  /** @param string */
  public function setBannerTvHighImageUrl($bannerTvHighImageUrl)
  {
    $this->bannerTvHighImageUrl = $bannerTvHighImageUrl;
  }
  /** @return string */
  public function getBannerTvHighImageUrl()
  {
    return $this->bannerTvHighImageUrl;
  }
  /** @param string */
  public function setBannerTvImageUrl($bannerTvImageUrl)
  {
    $this->bannerTvImageUrl = $bannerTvImageUrl;
  }
  /** @return string */
  public function getBannerTvImageUrl()
  {
    return $this->bannerTvImageUrl;
  }
  /** @param string */
  public function setBannerTvLowImageUrl($bannerTvLowImageUrl)
  {
    $this->bannerTvLowImageUrl = $bannerTvLowImageUrl;
  }
  /** @return string */
  public function getBannerTvLowImageUrl()
  {
    return $this->bannerTvLowImageUrl;
  }
  /** @param string */
  public function setBannerTvMediumImageUrl($bannerTvMediumImageUrl)
  {
    $this->bannerTvMediumImageUrl = $bannerTvMediumImageUrl;
  }
  /** @return string */
  public function getBannerTvMediumImageUrl()
  {
    return $this->bannerTvMediumImageUrl;
  }
  /** @param LocalizedProperty */
  public function setLargeBrandedBannerImageImapScript(LocalizedProperty $largeBrandedBannerImageImapScript)
  {
    $this->largeBrandedBannerImageImapScript = $largeBrandedBannerImageImapScript;
  }
  /** @return LocalizedProperty */
  public function getLargeBrandedBannerImageImapScript()
  {
    return $this->largeBrandedBannerImageImapScript;
  }
  /** @param LocalizedProperty */
  public function setLargeBrandedBannerImageUrl(LocalizedProperty $largeBrandedBannerImageUrl)
  {
    $this->largeBrandedBannerImageUrl = $largeBrandedBannerImageUrl;
  }
  /** @return LocalizedProperty */
  public function getLargeBrandedBannerImageUrl()
  {
    return $this->largeBrandedBannerImageUrl;
  }
  /** @param LocalizedProperty */
  public function setSmallBrandedBannerImageImapScript(LocalizedProperty $smallBrandedBannerImageImapScript)
  {
    $this->smallBrandedBannerImageImapScript = $smallBrandedBannerImageImapScript;
  }
  /** @return LocalizedProperty */
  public function getSmallBrandedBannerImageImapScript()
  {
    return $this->smallBrandedBannerImageImapScript;
  }
  /** @param LocalizedProperty */
  public function setSmallBrandedBannerImageUrl(LocalizedProperty $smallBrandedBannerImageUrl)
  {
    $this->smallBrandedBannerImageUrl = $smallBrandedBannerImageUrl;
  }
  /** @return LocalizedProperty */
  public function getSmallBrandedBannerImageUrl()
  {
    return $this->smallBrandedBannerImageUrl;
  }
  /** @param string */
  public function setTrackingImageUrl($trackingImageUrl)
  {
    $this->trackingImageUrl = $trackingImageUrl;
  }
  /** @return string */
  public function getTrackingImageUrl()
  {
    return $this->trackingImageUrl;
  }
  /** @param string */
  public function setWatchIconImageUrl($watchIconImageUrl)
  {
    $this->watchIconImageUrl = $watchIconImageUrl;
  }
  /** @return string */
  public function getWatchIconImageUrl()
  {
    return $this->watchIconImageUrl;
  }
}

class IngestionInfo extends \Google\Model
{
  /** @var string */
  public $backupIngestionAddress;
  /** @var string */
  public $ingestionAddress;
  /** @var string */
  public $rtmpsBackupIngestionAddress;
  /** @var string */
  public $rtmpsIngestionAddress;
  /** @var string */
  public $streamName;

  /** @param string */
  public function setBackupIngestionAddress($backupIngestionAddress)
  {
    $this->backupIngestionAddress = $backupIngestionAddress;
  }
  /** @return string */
  public function getBackupIngestionAddress()
  {
    return $this->backupIngestionAddress;
  }
  /** @param string */
  public function setIngestionAddress($ingestionAddress)
  {
    $this->ingestionAddress = $ingestionAddress;
  }
  /** @return string */
  public function getIngestionAddress()
  {
    return $this->ingestionAddress;
  }
  /** @param string */
  public function setRtmpsBackupIngestionAddress($rtmpsBackupIngestionAddress)
  {
    $this->rtmpsBackupIngestionAddress = $rtmpsBackupIngestionAddress;
  }
  /** @return string */
  public function getRtmpsBackupIngestionAddress()
  {
    return $this->rtmpsBackupIngestionAddress;
  }
  /** @param string */
  public function setRtmpsIngestionAddress($rtmpsIngestionAddress)
  {
    $this->rtmpsIngestionAddress = $rtmpsIngestionAddress;
  }
  /** @return string */
  public function getRtmpsIngestionAddress()
  {
    return $this->rtmpsIngestionAddress;
  }
  /** @param string */
  public function setStreamName($streamName)
  {
    $this->streamName = $streamName;
  }
  /** @return string */
  public function getStreamName()
  {
    return $this->streamName;
  }
}

class InvideoBranding extends \Google\Model
{
  /** @var string */
  public $imageBytes;
  /** @var string */
  public $imageUrl;
  /** @var InvideoPosition */
  public $position;
  /** @var string */
  public $targetChannelId;
  /** @var InvideoTiming */
  public $timing;
  protected $positionType = InvideoPosition::class;
  protected $positionDataType = '';
  protected $timingType = InvideoTiming::class;
  protected $timingDataType = '';
  /** @param string */
  public function setImageBytes($imageBytes)
  {
    $this->imageBytes = $imageBytes;
  }
  /** @return string */
  public function getImageBytes()
  {
    return $this->imageBytes;
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
  /** @param InvideoPosition */
  public function setPosition(InvideoPosition $position)
  {
    $this->position = $position;
  }
  /** @return InvideoPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setTargetChannelId($targetChannelId)
  {
    $this->targetChannelId = $targetChannelId;
  }
  /** @return string */
  public function getTargetChannelId()
  {
    return $this->targetChannelId;
  }
  /** @param InvideoTiming */
  public function setTiming(InvideoTiming $timing)
  {
    $this->timing = $timing;
  }
  /** @return InvideoTiming */
  public function getTiming()
  {
    return $this->timing;
  }
}

class InvideoPosition extends \Google\Model
{
  /** @var string */
  public $cornerPosition;
  /** @var string */
  public $type;

  /** @param string */
  public function setCornerPosition($cornerPosition)
  {
    $this->cornerPosition = $cornerPosition;
  }
  /** @return string */
  public function getCornerPosition()
  {
    return $this->cornerPosition;
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

class InvideoTiming extends \Google\Model
{
  /** @var string */
  public $durationMs;
  /** @var string */
  public $offsetMs;
  /** @var string */
  public $type;

  /** @param string */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /** @return string */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
  /** @param string */
  public function setOffsetMs($offsetMs)
  {
    $this->offsetMs = $offsetMs;
  }
  /** @return string */
  public function getOffsetMs()
  {
    return $this->offsetMs;
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

class LanguageTag extends \Google\Model
{
  /** @var string */
  public $value;

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

class LevelDetails extends \Google\Model
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

class LiveBroadcast extends \Google\Model
{
  /** @var LiveBroadcastContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LiveBroadcastSnippet */
  public $snippet;
  /** @var LiveBroadcastStatistics */
  public $statistics;
  /** @var LiveBroadcastStatus */
  public $status;
  protected $contentDetailsType = LiveBroadcastContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $snippetType = LiveBroadcastSnippet::class;
  protected $snippetDataType = '';
  protected $statisticsType = LiveBroadcastStatistics::class;
  protected $statisticsDataType = '';
  protected $statusType = LiveBroadcastStatus::class;
  protected $statusDataType = '';
  /** @param LiveBroadcastContentDetails */
  public function setContentDetails(LiveBroadcastContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return LiveBroadcastContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param LiveBroadcastSnippet */
  public function setSnippet(LiveBroadcastSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return LiveBroadcastSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param LiveBroadcastStatistics */
  public function setStatistics(LiveBroadcastStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return LiveBroadcastStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
  /** @param LiveBroadcastStatus */
  public function setStatus(LiveBroadcastStatus $status)
  {
    $this->status = $status;
  }
  /** @return LiveBroadcastStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class LiveBroadcastContentDetails extends \Google\Model
{
  /** @var string */
  public $boundStreamId;
  /** @var string */
  public $boundStreamLastUpdateTimeMs;
  /** @var string */
  public $closedCaptionsType;
  /** @var bool */
  public $enableAutoStart;
  /** @var bool */
  public $enableAutoStop;
  /** @var bool */
  public $enableClosedCaptions;
  /** @var bool */
  public $enableContentEncryption;
  /** @var bool */
  public $enableDvr;
  /** @var bool */
  public $enableEmbed;
  /** @var bool */
  public $enableLowLatency;
  /** @var string */
  public $latencyPreference;
  /** @var string */
  public $mesh;
  /** @var MonitorStreamInfo */
  public $monitorStream;
  /** @var string */
  public $projection;
  /** @var bool */
  public $recordFromStart;
  /** @var bool */
  public $startWithSlate;
  /** @var string */
  public $stereoLayout;
  protected $monitorStreamType = MonitorStreamInfo::class;
  protected $monitorStreamDataType = '';
  /** @param string */
  public function setBoundStreamId($boundStreamId)
  {
    $this->boundStreamId = $boundStreamId;
  }
  /** @return string */
  public function getBoundStreamId()
  {
    return $this->boundStreamId;
  }
  /** @param string */
  public function setBoundStreamLastUpdateTimeMs($boundStreamLastUpdateTimeMs)
  {
    $this->boundStreamLastUpdateTimeMs = $boundStreamLastUpdateTimeMs;
  }
  /** @return string */
  public function getBoundStreamLastUpdateTimeMs()
  {
    return $this->boundStreamLastUpdateTimeMs;
  }
  /** @param string */
  public function setClosedCaptionsType($closedCaptionsType)
  {
    $this->closedCaptionsType = $closedCaptionsType;
  }
  /** @return string */
  public function getClosedCaptionsType()
  {
    return $this->closedCaptionsType;
  }
  /** @param bool */
  public function setEnableAutoStart($enableAutoStart)
  {
    $this->enableAutoStart = $enableAutoStart;
  }
  /** @return bool */
  public function getEnableAutoStart()
  {
    return $this->enableAutoStart;
  }
  /** @param bool */
  public function setEnableAutoStop($enableAutoStop)
  {
    $this->enableAutoStop = $enableAutoStop;
  }
  /** @return bool */
  public function getEnableAutoStop()
  {
    return $this->enableAutoStop;
  }
  /** @param bool */
  public function setEnableClosedCaptions($enableClosedCaptions)
  {
    $this->enableClosedCaptions = $enableClosedCaptions;
  }
  /** @return bool */
  public function getEnableClosedCaptions()
  {
    return $this->enableClosedCaptions;
  }
  /** @param bool */
  public function setEnableContentEncryption($enableContentEncryption)
  {
    $this->enableContentEncryption = $enableContentEncryption;
  }
  /** @return bool */
  public function getEnableContentEncryption()
  {
    return $this->enableContentEncryption;
  }
  /** @param bool */
  public function setEnableDvr($enableDvr)
  {
    $this->enableDvr = $enableDvr;
  }
  /** @return bool */
  public function getEnableDvr()
  {
    return $this->enableDvr;
  }
  /** @param bool */
  public function setEnableEmbed($enableEmbed)
  {
    $this->enableEmbed = $enableEmbed;
  }
  /** @return bool */
  public function getEnableEmbed()
  {
    return $this->enableEmbed;
  }
  /** @param bool */
  public function setEnableLowLatency($enableLowLatency)
  {
    $this->enableLowLatency = $enableLowLatency;
  }
  /** @return bool */
  public function getEnableLowLatency()
  {
    return $this->enableLowLatency;
  }
  /** @param string */
  public function setLatencyPreference($latencyPreference)
  {
    $this->latencyPreference = $latencyPreference;
  }
  /** @return string */
  public function getLatencyPreference()
  {
    return $this->latencyPreference;
  }
  /** @param string */
  public function setMesh($mesh)
  {
    $this->mesh = $mesh;
  }
  /** @return string */
  public function getMesh()
  {
    return $this->mesh;
  }
  /** @param MonitorStreamInfo */
  public function setMonitorStream(MonitorStreamInfo $monitorStream)
  {
    $this->monitorStream = $monitorStream;
  }
  /** @return MonitorStreamInfo */
  public function getMonitorStream()
  {
    return $this->monitorStream;
  }
  /** @param string */
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  /** @return string */
  public function getProjection()
  {
    return $this->projection;
  }
  /** @param bool */
  public function setRecordFromStart($recordFromStart)
  {
    $this->recordFromStart = $recordFromStart;
  }
  /** @return bool */
  public function getRecordFromStart()
  {
    return $this->recordFromStart;
  }
  /** @param bool */
  public function setStartWithSlate($startWithSlate)
  {
    $this->startWithSlate = $startWithSlate;
  }
  /** @return bool */
  public function getStartWithSlate()
  {
    return $this->startWithSlate;
  }
  /** @param string */
  public function setStereoLayout($stereoLayout)
  {
    $this->stereoLayout = $stereoLayout;
  }
  /** @return string */
  public function getStereoLayout()
  {
    return $this->stereoLayout;
  }
}

class LiveBroadcastListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var LiveBroadcast[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = LiveBroadcast::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param LiveBroadcast[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LiveBroadcast[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class LiveBroadcastSnippet extends \Google\Model
{
  /** @var string */
  public $actualEndTime;
  /** @var string */
  public $actualStartTime;
  /** @var string */
  public $channelId;
  /** @var string */
  public $description;
  /** @var bool */
  public $isDefaultBroadcast;
  /** @var string */
  public $liveChatId;
  /** @var string */
  public $publishedAt;
  /** @var string */
  public $scheduledEndTime;
  /** @var string */
  public $scheduledStartTime;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setActualEndTime($actualEndTime)
  {
    $this->actualEndTime = $actualEndTime;
  }
  /** @return string */
  public function getActualEndTime()
  {
    return $this->actualEndTime;
  }
  /** @param string */
  public function setActualStartTime($actualStartTime)
  {
    $this->actualStartTime = $actualStartTime;
  }
  /** @return string */
  public function getActualStartTime()
  {
    return $this->actualStartTime;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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
  public function setIsDefaultBroadcast($isDefaultBroadcast)
  {
    $this->isDefaultBroadcast = $isDefaultBroadcast;
  }
  /** @return bool */
  public function getIsDefaultBroadcast()
  {
    return $this->isDefaultBroadcast;
  }
  /** @param string */
  public function setLiveChatId($liveChatId)
  {
    $this->liveChatId = $liveChatId;
  }
  /** @return string */
  public function getLiveChatId()
  {
    return $this->liveChatId;
  }
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
  public function setScheduledEndTime($scheduledEndTime)
  {
    $this->scheduledEndTime = $scheduledEndTime;
  }
  /** @return string */
  public function getScheduledEndTime()
  {
    return $this->scheduledEndTime;
  }
  /** @param string */
  public function setScheduledStartTime($scheduledStartTime)
  {
    $this->scheduledStartTime = $scheduledStartTime;
  }
  /** @return string */
  public function getScheduledStartTime()
  {
    return $this->scheduledStartTime;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class LiveBroadcastStatistics extends \Google\Model
{
  /** @var string */
  public $concurrentViewers;
  /** @var string */
  public $totalChatCount;

  /** @param string */
  public function setConcurrentViewers($concurrentViewers)
  {
    $this->concurrentViewers = $concurrentViewers;
  }
  /** @return string */
  public function getConcurrentViewers()
  {
    return $this->concurrentViewers;
  }
  /** @param string */
  public function setTotalChatCount($totalChatCount)
  {
    $this->totalChatCount = $totalChatCount;
  }
  /** @return string */
  public function getTotalChatCount()
  {
    return $this->totalChatCount;
  }
}

class LiveBroadcastStatus extends \Google\Model
{
  /** @var string */
  public $lifeCycleStatus;
  /** @var string */
  public $liveBroadcastPriority;
  /** @var bool */
  public $madeForKids;
  /** @var string */
  public $privacyStatus;
  /** @var string */
  public $recordingStatus;
  /** @var bool */
  public $selfDeclaredMadeForKids;

  /** @param string */
  public function setLifeCycleStatus($lifeCycleStatus)
  {
    $this->lifeCycleStatus = $lifeCycleStatus;
  }
  /** @return string */
  public function getLifeCycleStatus()
  {
    return $this->lifeCycleStatus;
  }
  /** @param string */
  public function setLiveBroadcastPriority($liveBroadcastPriority)
  {
    $this->liveBroadcastPriority = $liveBroadcastPriority;
  }
  /** @return string */
  public function getLiveBroadcastPriority()
  {
    return $this->liveBroadcastPriority;
  }
  /** @param bool */
  public function setMadeForKids($madeForKids)
  {
    $this->madeForKids = $madeForKids;
  }
  /** @return bool */
  public function getMadeForKids()
  {
    return $this->madeForKids;
  }
  /** @param string */
  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }
  /** @return string */
  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
  /** @param string */
  public function setRecordingStatus($recordingStatus)
  {
    $this->recordingStatus = $recordingStatus;
  }
  /** @return string */
  public function getRecordingStatus()
  {
    return $this->recordingStatus;
  }
  /** @param bool */
  public function setSelfDeclaredMadeForKids($selfDeclaredMadeForKids)
  {
    $this->selfDeclaredMadeForKids = $selfDeclaredMadeForKids;
  }
  /** @return bool */
  public function getSelfDeclaredMadeForKids()
  {
    return $this->selfDeclaredMadeForKids;
  }
}

class LiveChatBan extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LiveChatBanSnippet */
  public $snippet;
  protected $snippetType = LiveChatBanSnippet::class;
  protected $snippetDataType = '';
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
  /** @param LiveChatBanSnippet */
  public function setSnippet(LiveChatBanSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return LiveChatBanSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class LiveChatBanSnippet extends \Google\Model
{
  /** @var string */
  public $banDurationSeconds;
  /** @var ChannelProfileDetails */
  public $bannedUserDetails;
  /** @var string */
  public $liveChatId;
  /** @var string */
  public $type;
  protected $bannedUserDetailsType = ChannelProfileDetails::class;
  protected $bannedUserDetailsDataType = '';
  /** @param string */
  public function setBanDurationSeconds($banDurationSeconds)
  {
    $this->banDurationSeconds = $banDurationSeconds;
  }
  /** @return string */
  public function getBanDurationSeconds()
  {
    return $this->banDurationSeconds;
  }
  /** @param ChannelProfileDetails */
  public function setBannedUserDetails(ChannelProfileDetails $bannedUserDetails)
  {
    $this->bannedUserDetails = $bannedUserDetails;
  }
  /** @return ChannelProfileDetails */
  public function getBannedUserDetails()
  {
    return $this->bannedUserDetails;
  }
  /** @param string */
  public function setLiveChatId($liveChatId)
  {
    $this->liveChatId = $liveChatId;
  }
  /** @return string */
  public function getLiveChatId()
  {
    return $this->liveChatId;
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

class LiveChatFanFundingEventDetails extends \Google\Model
{
  /** @var string */
  public $amountDisplayString;
  /** @var string */
  public $amountMicros;
  /** @var string */
  public $currency;
  /** @var string */
  public $userComment;

  /** @param string */
  public function setAmountDisplayString($amountDisplayString)
  {
    $this->amountDisplayString = $amountDisplayString;
  }
  /** @return string */
  public function getAmountDisplayString()
  {
    return $this->amountDisplayString;
  }
  /** @param string */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /** @return string */
  public function getAmountMicros()
  {
    return $this->amountMicros;
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
  public function setUserComment($userComment)
  {
    $this->userComment = $userComment;
  }
  /** @return string */
  public function getUserComment()
  {
    return $this->userComment;
  }
}

class LiveChatGiftMembershipReceivedDetails extends \Google\Model
{
  /** @var string */
  public $associatedMembershipGiftingMessageId;
  /** @var string */
  public $gifterChannelId;
  /** @var string */
  public $memberLevelName;

  /** @param string */
  public function setAssociatedMembershipGiftingMessageId($associatedMembershipGiftingMessageId)
  {
    $this->associatedMembershipGiftingMessageId = $associatedMembershipGiftingMessageId;
  }
  /** @return string */
  public function getAssociatedMembershipGiftingMessageId()
  {
    return $this->associatedMembershipGiftingMessageId;
  }
  /** @param string */
  public function setGifterChannelId($gifterChannelId)
  {
    $this->gifterChannelId = $gifterChannelId;
  }
  /** @return string */
  public function getGifterChannelId()
  {
    return $this->gifterChannelId;
  }
  /** @param string */
  public function setMemberLevelName($memberLevelName)
  {
    $this->memberLevelName = $memberLevelName;
  }
  /** @return string */
  public function getMemberLevelName()
  {
    return $this->memberLevelName;
  }
}

class LiveChatMemberMilestoneChatDetails extends \Google\Model
{
  /** @var string */
  public $memberLevelName;
  /** @var string */
  public $memberMonth;
  /** @var string */
  public $userComment;

  /** @param string */
  public function setMemberLevelName($memberLevelName)
  {
    $this->memberLevelName = $memberLevelName;
  }
  /** @return string */
  public function getMemberLevelName()
  {
    return $this->memberLevelName;
  }
  /** @param string */
  public function setMemberMonth($memberMonth)
  {
    $this->memberMonth = $memberMonth;
  }
  /** @return string */
  public function getMemberMonth()
  {
    return $this->memberMonth;
  }
  /** @param string */
  public function setUserComment($userComment)
  {
    $this->userComment = $userComment;
  }
  /** @return string */
  public function getUserComment()
  {
    return $this->userComment;
  }
}

class LiveChatMembershipGiftingDetails extends \Google\Model
{
  /** @var int */
  public $giftMembershipsCount;
  /** @var string */
  public $giftMembershipsLevelName;

  /** @param int */
  public function setGiftMembershipsCount($giftMembershipsCount)
  {
    $this->giftMembershipsCount = $giftMembershipsCount;
  }
  /** @return int */
  public function getGiftMembershipsCount()
  {
    return $this->giftMembershipsCount;
  }
  /** @param string */
  public function setGiftMembershipsLevelName($giftMembershipsLevelName)
  {
    $this->giftMembershipsLevelName = $giftMembershipsLevelName;
  }
  /** @return string */
  public function getGiftMembershipsLevelName()
  {
    return $this->giftMembershipsLevelName;
  }
}

class LiveChatMessage extends \Google\Model
{
  /** @var LiveChatMessageAuthorDetails */
  public $authorDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LiveChatMessageSnippet */
  public $snippet;
  protected $authorDetailsType = LiveChatMessageAuthorDetails::class;
  protected $authorDetailsDataType = '';
  protected $snippetType = LiveChatMessageSnippet::class;
  protected $snippetDataType = '';
  /** @param LiveChatMessageAuthorDetails */
  public function setAuthorDetails(LiveChatMessageAuthorDetails $authorDetails)
  {
    $this->authorDetails = $authorDetails;
  }
  /** @return LiveChatMessageAuthorDetails */
  public function getAuthorDetails()
  {
    return $this->authorDetails;
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
  /** @param LiveChatMessageSnippet */
  public function setSnippet(LiveChatMessageSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return LiveChatMessageSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class LiveChatMessageAuthorDetails extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelUrl;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isChatModerator;
  /** @var bool */
  public $isChatOwner;
  /** @var bool */
  public $isChatSponsor;
  /** @var bool */
  public $isVerified;
  /** @var string */
  public $profileImageUrl;

  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelUrl($channelUrl)
  {
    $this->channelUrl = $channelUrl;
  }
  /** @return string */
  public function getChannelUrl()
  {
    return $this->channelUrl;
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
  public function setIsChatModerator($isChatModerator)
  {
    $this->isChatModerator = $isChatModerator;
  }
  /** @return bool */
  public function getIsChatModerator()
  {
    return $this->isChatModerator;
  }
  /** @param bool */
  public function setIsChatOwner($isChatOwner)
  {
    $this->isChatOwner = $isChatOwner;
  }
  /** @return bool */
  public function getIsChatOwner()
  {
    return $this->isChatOwner;
  }
  /** @param bool */
  public function setIsChatSponsor($isChatSponsor)
  {
    $this->isChatSponsor = $isChatSponsor;
  }
  /** @return bool */
  public function getIsChatSponsor()
  {
    return $this->isChatSponsor;
  }
  /** @param bool */
  public function setIsVerified($isVerified)
  {
    $this->isVerified = $isVerified;
  }
  /** @return bool */
  public function getIsVerified()
  {
    return $this->isVerified;
  }
  /** @param string */
  public function setProfileImageUrl($profileImageUrl)
  {
    $this->profileImageUrl = $profileImageUrl;
  }
  /** @return string */
  public function getProfileImageUrl()
  {
    return $this->profileImageUrl;
  }
}

class LiveChatMessageDeletedDetails extends \Google\Model
{
  /** @var string */
  public $deletedMessageId;

  /** @param string */
  public function setDeletedMessageId($deletedMessageId)
  {
    $this->deletedMessageId = $deletedMessageId;
  }
  /** @return string */
  public function getDeletedMessageId()
  {
    return $this->deletedMessageId;
  }
}

class LiveChatMessageListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var LiveChatMessage[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $offlineAt;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $pollingIntervalMillis;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = LiveChatMessage::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param LiveChatMessage[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LiveChatMessage[] */
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
  /** @param string */
  public function setOfflineAt($offlineAt)
  {
    $this->offlineAt = $offlineAt;
  }
  /** @return string */
  public function getOfflineAt()
  {
    return $this->offlineAt;
  }
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPollingIntervalMillis($pollingIntervalMillis)
  {
    $this->pollingIntervalMillis = $pollingIntervalMillis;
  }
  /** @return string */
  public function getPollingIntervalMillis()
  {
    return $this->pollingIntervalMillis;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class LiveChatMessageRetractedDetails extends \Google\Model
{
  /** @var string */
  public $retractedMessageId;

  /** @param string */
  public function setRetractedMessageId($retractedMessageId)
  {
    $this->retractedMessageId = $retractedMessageId;
  }
  /** @return string */
  public function getRetractedMessageId()
  {
    return $this->retractedMessageId;
  }
}

class LiveChatMessageSnippet extends \Google\Model
{
  /** @var string */
  public $authorChannelId;
  /** @var string */
  public $displayMessage;
  /** @var LiveChatFanFundingEventDetails */
  public $fanFundingEventDetails;
  /** @var LiveChatGiftMembershipReceivedDetails */
  public $giftMembershipReceivedDetails;
  /** @var bool */
  public $hasDisplayContent;
  /** @var string */
  public $liveChatId;
  /** @var LiveChatMemberMilestoneChatDetails */
  public $memberMilestoneChatDetails;
  /** @var LiveChatMembershipGiftingDetails */
  public $membershipGiftingDetails;
  /** @var LiveChatMessageDeletedDetails */
  public $messageDeletedDetails;
  /** @var LiveChatMessageRetractedDetails */
  public $messageRetractedDetails;
  /** @var LiveChatNewSponsorDetails */
  public $newSponsorDetails;
  /** @var string */
  public $publishedAt;
  /** @var LiveChatSuperChatDetails */
  public $superChatDetails;
  /** @var LiveChatSuperStickerDetails */
  public $superStickerDetails;
  /** @var LiveChatTextMessageDetails */
  public $textMessageDetails;
  /** @var string */
  public $type;
  /** @var LiveChatUserBannedMessageDetails */
  public $userBannedDetails;
  protected $fanFundingEventDetailsType = LiveChatFanFundingEventDetails::class;
  protected $fanFundingEventDetailsDataType = '';
  protected $giftMembershipReceivedDetailsType = LiveChatGiftMembershipReceivedDetails::class;
  protected $giftMembershipReceivedDetailsDataType = '';
  protected $memberMilestoneChatDetailsType = LiveChatMemberMilestoneChatDetails::class;
  protected $memberMilestoneChatDetailsDataType = '';
  protected $membershipGiftingDetailsType = LiveChatMembershipGiftingDetails::class;
  protected $membershipGiftingDetailsDataType = '';
  protected $messageDeletedDetailsType = LiveChatMessageDeletedDetails::class;
  protected $messageDeletedDetailsDataType = '';
  protected $messageRetractedDetailsType = LiveChatMessageRetractedDetails::class;
  protected $messageRetractedDetailsDataType = '';
  protected $newSponsorDetailsType = LiveChatNewSponsorDetails::class;
  protected $newSponsorDetailsDataType = '';
  protected $superChatDetailsType = LiveChatSuperChatDetails::class;
  protected $superChatDetailsDataType = '';
  protected $superStickerDetailsType = LiveChatSuperStickerDetails::class;
  protected $superStickerDetailsDataType = '';
  protected $textMessageDetailsType = LiveChatTextMessageDetails::class;
  protected $textMessageDetailsDataType = '';
  protected $userBannedDetailsType = LiveChatUserBannedMessageDetails::class;
  protected $userBannedDetailsDataType = '';
  /** @param string */
  public function setAuthorChannelId($authorChannelId)
  {
    $this->authorChannelId = $authorChannelId;
  }
  /** @return string */
  public function getAuthorChannelId()
  {
    return $this->authorChannelId;
  }
  /** @param string */
  public function setDisplayMessage($displayMessage)
  {
    $this->displayMessage = $displayMessage;
  }
  /** @return string */
  public function getDisplayMessage()
  {
    return $this->displayMessage;
  }
  /** @param LiveChatFanFundingEventDetails */
  public function setFanFundingEventDetails(LiveChatFanFundingEventDetails $fanFundingEventDetails)
  {
    $this->fanFundingEventDetails = $fanFundingEventDetails;
  }
  /** @return LiveChatFanFundingEventDetails */
  public function getFanFundingEventDetails()
  {
    return $this->fanFundingEventDetails;
  }
  /** @param LiveChatGiftMembershipReceivedDetails */
  public function setGiftMembershipReceivedDetails(LiveChatGiftMembershipReceivedDetails $giftMembershipReceivedDetails)
  {
    $this->giftMembershipReceivedDetails = $giftMembershipReceivedDetails;
  }
  /** @return LiveChatGiftMembershipReceivedDetails */
  public function getGiftMembershipReceivedDetails()
  {
    return $this->giftMembershipReceivedDetails;
  }
  /** @param bool */
  public function setHasDisplayContent($hasDisplayContent)
  {
    $this->hasDisplayContent = $hasDisplayContent;
  }
  /** @return bool */
  public function getHasDisplayContent()
  {
    return $this->hasDisplayContent;
  }
  /** @param string */
  public function setLiveChatId($liveChatId)
  {
    $this->liveChatId = $liveChatId;
  }
  /** @return string */
  public function getLiveChatId()
  {
    return $this->liveChatId;
  }
  /** @param LiveChatMemberMilestoneChatDetails */
  public function setMemberMilestoneChatDetails(LiveChatMemberMilestoneChatDetails $memberMilestoneChatDetails)
  {
    $this->memberMilestoneChatDetails = $memberMilestoneChatDetails;
  }
  /** @return LiveChatMemberMilestoneChatDetails */
  public function getMemberMilestoneChatDetails()
  {
    return $this->memberMilestoneChatDetails;
  }
  /** @param LiveChatMembershipGiftingDetails */
  public function setMembershipGiftingDetails(LiveChatMembershipGiftingDetails $membershipGiftingDetails)
  {
    $this->membershipGiftingDetails = $membershipGiftingDetails;
  }
  /** @return LiveChatMembershipGiftingDetails */
  public function getMembershipGiftingDetails()
  {
    return $this->membershipGiftingDetails;
  }
  /** @param LiveChatMessageDeletedDetails */
  public function setMessageDeletedDetails(LiveChatMessageDeletedDetails $messageDeletedDetails)
  {
    $this->messageDeletedDetails = $messageDeletedDetails;
  }
  /** @return LiveChatMessageDeletedDetails */
  public function getMessageDeletedDetails()
  {
    return $this->messageDeletedDetails;
  }
  /** @param LiveChatMessageRetractedDetails */
  public function setMessageRetractedDetails(LiveChatMessageRetractedDetails $messageRetractedDetails)
  {
    $this->messageRetractedDetails = $messageRetractedDetails;
  }
  /** @return LiveChatMessageRetractedDetails */
  public function getMessageRetractedDetails()
  {
    return $this->messageRetractedDetails;
  }
  /** @param LiveChatNewSponsorDetails */
  public function setNewSponsorDetails(LiveChatNewSponsorDetails $newSponsorDetails)
  {
    $this->newSponsorDetails = $newSponsorDetails;
  }
  /** @return LiveChatNewSponsorDetails */
  public function getNewSponsorDetails()
  {
    return $this->newSponsorDetails;
  }
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
  /** @param LiveChatSuperChatDetails */
  public function setSuperChatDetails(LiveChatSuperChatDetails $superChatDetails)
  {
    $this->superChatDetails = $superChatDetails;
  }
  /** @return LiveChatSuperChatDetails */
  public function getSuperChatDetails()
  {
    return $this->superChatDetails;
  }
  /** @param LiveChatSuperStickerDetails */
  public function setSuperStickerDetails(LiveChatSuperStickerDetails $superStickerDetails)
  {
    $this->superStickerDetails = $superStickerDetails;
  }
  /** @return LiveChatSuperStickerDetails */
  public function getSuperStickerDetails()
  {
    return $this->superStickerDetails;
  }
  /** @param LiveChatTextMessageDetails */
  public function setTextMessageDetails(LiveChatTextMessageDetails $textMessageDetails)
  {
    $this->textMessageDetails = $textMessageDetails;
  }
  /** @return LiveChatTextMessageDetails */
  public function getTextMessageDetails()
  {
    return $this->textMessageDetails;
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
  /** @param LiveChatUserBannedMessageDetails */
  public function setUserBannedDetails(LiveChatUserBannedMessageDetails $userBannedDetails)
  {
    $this->userBannedDetails = $userBannedDetails;
  }
  /** @return LiveChatUserBannedMessageDetails */
  public function getUserBannedDetails()
  {
    return $this->userBannedDetails;
  }
}

class LiveChatModerator extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LiveChatModeratorSnippet */
  public $snippet;
  protected $snippetType = LiveChatModeratorSnippet::class;
  protected $snippetDataType = '';
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
  /** @param LiveChatModeratorSnippet */
  public function setSnippet(LiveChatModeratorSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return LiveChatModeratorSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class LiveChatModeratorListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var LiveChatModerator[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = LiveChatModerator::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param LiveChatModerator[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LiveChatModerator[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class LiveChatModeratorSnippet extends \Google\Model
{
  /** @var string */
  public $liveChatId;
  /** @var ChannelProfileDetails */
  public $moderatorDetails;
  protected $moderatorDetailsType = ChannelProfileDetails::class;
  protected $moderatorDetailsDataType = '';
  /** @param string */
  public function setLiveChatId($liveChatId)
  {
    $this->liveChatId = $liveChatId;
  }
  /** @return string */
  public function getLiveChatId()
  {
    return $this->liveChatId;
  }
  /** @param ChannelProfileDetails */
  public function setModeratorDetails(ChannelProfileDetails $moderatorDetails)
  {
    $this->moderatorDetails = $moderatorDetails;
  }
  /** @return ChannelProfileDetails */
  public function getModeratorDetails()
  {
    return $this->moderatorDetails;
  }
}

class LiveChatNewSponsorDetails extends \Google\Model
{
  /** @var bool */
  public $isUpgrade;
  /** @var string */
  public $memberLevelName;

  /** @param bool */
  public function setIsUpgrade($isUpgrade)
  {
    $this->isUpgrade = $isUpgrade;
  }
  /** @return bool */
  public function getIsUpgrade()
  {
    return $this->isUpgrade;
  }
  /** @param string */
  public function setMemberLevelName($memberLevelName)
  {
    $this->memberLevelName = $memberLevelName;
  }
  /** @return string */
  public function getMemberLevelName()
  {
    return $this->memberLevelName;
  }
}

class LiveChatSuperChatDetails extends \Google\Model
{
  /** @var string */
  public $amountDisplayString;
  /** @var string */
  public $amountMicros;
  /** @var string */
  public $currency;
  /** @var string */
  public $tier;
  /** @var string */
  public $userComment;

  /** @param string */
  public function setAmountDisplayString($amountDisplayString)
  {
    $this->amountDisplayString = $amountDisplayString;
  }
  /** @return string */
  public function getAmountDisplayString()
  {
    return $this->amountDisplayString;
  }
  /** @param string */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /** @return string */
  public function getAmountMicros()
  {
    return $this->amountMicros;
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
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
  /** @param string */
  public function setUserComment($userComment)
  {
    $this->userComment = $userComment;
  }
  /** @return string */
  public function getUserComment()
  {
    return $this->userComment;
  }
}

class LiveChatSuperStickerDetails extends \Google\Model
{
  /** @var string */
  public $amountDisplayString;
  /** @var string */
  public $amountMicros;
  /** @var string */
  public $currency;
  /** @var SuperStickerMetadata */
  public $superStickerMetadata;
  /** @var string */
  public $tier;
  protected $superStickerMetadataType = SuperStickerMetadata::class;
  protected $superStickerMetadataDataType = '';
  /** @param string */
  public function setAmountDisplayString($amountDisplayString)
  {
    $this->amountDisplayString = $amountDisplayString;
  }
  /** @return string */
  public function getAmountDisplayString()
  {
    return $this->amountDisplayString;
  }
  /** @param string */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /** @return string */
  public function getAmountMicros()
  {
    return $this->amountMicros;
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
  /** @param SuperStickerMetadata */
  public function setSuperStickerMetadata(SuperStickerMetadata $superStickerMetadata)
  {
    $this->superStickerMetadata = $superStickerMetadata;
  }
  /** @return SuperStickerMetadata */
  public function getSuperStickerMetadata()
  {
    return $this->superStickerMetadata;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
}

class LiveChatTextMessageDetails extends \Google\Model
{
  /** @var string */
  public $messageText;

  /** @param string */
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  /** @return string */
  public function getMessageText()
  {
    return $this->messageText;
  }
}

class LiveChatUserBannedMessageDetails extends \Google\Model
{
  /** @var string */
  public $banDurationSeconds;
  /** @var string */
  public $banType;
  /** @var ChannelProfileDetails */
  public $bannedUserDetails;
  protected $bannedUserDetailsType = ChannelProfileDetails::class;
  protected $bannedUserDetailsDataType = '';
  /** @param string */
  public function setBanDurationSeconds($banDurationSeconds)
  {
    $this->banDurationSeconds = $banDurationSeconds;
  }
  /** @return string */
  public function getBanDurationSeconds()
  {
    return $this->banDurationSeconds;
  }
  /** @param string */
  public function setBanType($banType)
  {
    $this->banType = $banType;
  }
  /** @return string */
  public function getBanType()
  {
    return $this->banType;
  }
  /** @param ChannelProfileDetails */
  public function setBannedUserDetails(ChannelProfileDetails $bannedUserDetails)
  {
    $this->bannedUserDetails = $bannedUserDetails;
  }
  /** @return ChannelProfileDetails */
  public function getBannedUserDetails()
  {
    return $this->bannedUserDetails;
  }
}

class LiveStream extends \Google\Model
{
  /** @var CdnSettings */
  public $cdn;
  /** @var LiveStreamContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LiveStreamSnippet */
  public $snippet;
  /** @var LiveStreamStatus */
  public $status;
  protected $cdnType = CdnSettings::class;
  protected $cdnDataType = '';
  protected $contentDetailsType = LiveStreamContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $snippetType = LiveStreamSnippet::class;
  protected $snippetDataType = '';
  protected $statusType = LiveStreamStatus::class;
  protected $statusDataType = '';
  /** @param CdnSettings */
  public function setCdn(CdnSettings $cdn)
  {
    $this->cdn = $cdn;
  }
  /** @return CdnSettings */
  public function getCdn()
  {
    return $this->cdn;
  }
  /** @param LiveStreamContentDetails */
  public function setContentDetails(LiveStreamContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return LiveStreamContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param LiveStreamSnippet */
  public function setSnippet(LiveStreamSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return LiveStreamSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param LiveStreamStatus */
  public function setStatus(LiveStreamStatus $status)
  {
    $this->status = $status;
  }
  /** @return LiveStreamStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class LiveStreamConfigurationIssue extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reason;
  /** @var string */
  public $severity;
  /** @var string */
  public $type;

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
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
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

class LiveStreamContentDetails extends \Google\Model
{
  /** @var string */
  public $closedCaptionsIngestionUrl;
  /** @var bool */
  public $isReusable;

  /** @param string */
  public function setClosedCaptionsIngestionUrl($closedCaptionsIngestionUrl)
  {
    $this->closedCaptionsIngestionUrl = $closedCaptionsIngestionUrl;
  }
  /** @return string */
  public function getClosedCaptionsIngestionUrl()
  {
    return $this->closedCaptionsIngestionUrl;
  }
  /** @param bool */
  public function setIsReusable($isReusable)
  {
    $this->isReusable = $isReusable;
  }
  /** @return bool */
  public function getIsReusable()
  {
    return $this->isReusable;
  }
}

class LiveStreamHealthStatus extends \Google\Collection
{
  /** @var LiveStreamConfigurationIssue[] */
  public $configurationIssues;
  /** @var string */
  public $lastUpdateTimeSeconds;
  /** @var string */
  public $status;
  protected $collection_key = 'configurationIssues';
  protected $configurationIssuesType = LiveStreamConfigurationIssue::class;
  protected $configurationIssuesDataType = 'array';
  /** @param LiveStreamConfigurationIssue[] */
  public function setConfigurationIssues($configurationIssues)
  {
    $this->configurationIssues = $configurationIssues;
  }
  /** @return LiveStreamConfigurationIssue[] */
  public function getConfigurationIssues()
  {
    return $this->configurationIssues;
  }
  /** @param string */
  public function setLastUpdateTimeSeconds($lastUpdateTimeSeconds)
  {
    $this->lastUpdateTimeSeconds = $lastUpdateTimeSeconds;
  }
  /** @return string */
  public function getLastUpdateTimeSeconds()
  {
    return $this->lastUpdateTimeSeconds;
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

class LiveStreamListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var LiveStream[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = LiveStream::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param LiveStream[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LiveStream[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class LiveStreamSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $description;
  /** @var bool */
  public $isDefaultStream;
  /** @var string */
  public $publishedAt;
  /** @var string */
  public $title;

  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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
  public function setIsDefaultStream($isDefaultStream)
  {
    $this->isDefaultStream = $isDefaultStream;
  }
  /** @return bool */
  public function getIsDefaultStream()
  {
    return $this->isDefaultStream;
  }
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

class LiveStreamStatus extends \Google\Model
{
  /** @var LiveStreamHealthStatus */
  public $healthStatus;
  /** @var string */
  public $streamStatus;
  protected $healthStatusType = LiveStreamHealthStatus::class;
  protected $healthStatusDataType = '';
  /** @param LiveStreamHealthStatus */
  public function setHealthStatus(LiveStreamHealthStatus $healthStatus)
  {
    $this->healthStatus = $healthStatus;
  }
  /** @return LiveStreamHealthStatus */
  public function getHealthStatus()
  {
    return $this->healthStatus;
  }
  /** @param string */
  public function setStreamStatus($streamStatus)
  {
    $this->streamStatus = $streamStatus;
  }
  /** @return string */
  public function getStreamStatus()
  {
    return $this->streamStatus;
  }
}

class LocalizedProperty extends \Google\Collection
{
  /** @var string */
  public $default;
  /** @var LanguageTag */
  public $defaultLanguage;
  /** @var LocalizedString[] */
  public $localized;
  protected $collection_key = 'localized';
  protected $defaultLanguageType = LanguageTag::class;
  protected $defaultLanguageDataType = '';
  protected $localizedType = LocalizedString::class;
  protected $localizedDataType = 'array';
  /** @param string */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /** @return string */
  public function getDefault()
  {
    return $this->default;
  }
  /** @param LanguageTag */
  public function setDefaultLanguage(LanguageTag $defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return LanguageTag */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  /** @param LocalizedString[] */
  public function setLocalized($localized)
  {
    $this->localized = $localized;
  }
  /** @return LocalizedString[] */
  public function getLocalized()
  {
    return $this->localized;
  }
}

class LocalizedString extends \Google\Model
{
  /** @var string */
  public $language;
  /** @var string */
  public $value;

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

class Member extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var MemberSnippet */
  public $snippet;
  protected $snippetType = MemberSnippet::class;
  protected $snippetDataType = '';
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param MemberSnippet */
  public function setSnippet(MemberSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return MemberSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class MemberListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Member[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Member::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Member[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Member[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class MemberSnippet extends \Google\Model
{
  /** @var string */
  public $creatorChannelId;
  /** @var ChannelProfileDetails */
  public $memberDetails;
  /** @var MembershipsDetails */
  public $membershipsDetails;
  protected $memberDetailsType = ChannelProfileDetails::class;
  protected $memberDetailsDataType = '';
  protected $membershipsDetailsType = MembershipsDetails::class;
  protected $membershipsDetailsDataType = '';
  /** @param string */
  public function setCreatorChannelId($creatorChannelId)
  {
    $this->creatorChannelId = $creatorChannelId;
  }
  /** @return string */
  public function getCreatorChannelId()
  {
    return $this->creatorChannelId;
  }
  /** @param ChannelProfileDetails */
  public function setMemberDetails(ChannelProfileDetails $memberDetails)
  {
    $this->memberDetails = $memberDetails;
  }
  /** @return ChannelProfileDetails */
  public function getMemberDetails()
  {
    return $this->memberDetails;
  }
  /** @param MembershipsDetails */
  public function setMembershipsDetails(MembershipsDetails $membershipsDetails)
  {
    $this->membershipsDetails = $membershipsDetails;
  }
  /** @return MembershipsDetails */
  public function getMembershipsDetails()
  {
    return $this->membershipsDetails;
  }
}

class MembershipsDetails extends \Google\Collection
{
  /** @var string[] */
  public $accessibleLevels;
  /** @var string */
  public $highestAccessibleLevel;
  /** @var string */
  public $highestAccessibleLevelDisplayName;
  /** @var MembershipsDuration */
  public $membershipsDuration;
  /** @var MembershipsDurationAtLevel[] */
  public $membershipsDurationAtLevels;
  protected $collection_key = 'membershipsDurationAtLevels';
  protected $membershipsDurationType = MembershipsDuration::class;
  protected $membershipsDurationDataType = '';
  protected $membershipsDurationAtLevelsType = MembershipsDurationAtLevel::class;
  protected $membershipsDurationAtLevelsDataType = 'array';
  /** @param string[] */
  public function setAccessibleLevels($accessibleLevels)
  {
    $this->accessibleLevels = $accessibleLevels;
  }
  /** @return string[] */
  public function getAccessibleLevels()
  {
    return $this->accessibleLevels;
  }
  /** @param string */
  public function setHighestAccessibleLevel($highestAccessibleLevel)
  {
    $this->highestAccessibleLevel = $highestAccessibleLevel;
  }
  /** @return string */
  public function getHighestAccessibleLevel()
  {
    return $this->highestAccessibleLevel;
  }
  /** @param string */
  public function setHighestAccessibleLevelDisplayName($highestAccessibleLevelDisplayName)
  {
    $this->highestAccessibleLevelDisplayName = $highestAccessibleLevelDisplayName;
  }
  /** @return string */
  public function getHighestAccessibleLevelDisplayName()
  {
    return $this->highestAccessibleLevelDisplayName;
  }
  /** @param MembershipsDuration */
  public function setMembershipsDuration(MembershipsDuration $membershipsDuration)
  {
    $this->membershipsDuration = $membershipsDuration;
  }
  /** @return MembershipsDuration */
  public function getMembershipsDuration()
  {
    return $this->membershipsDuration;
  }
  /** @param MembershipsDurationAtLevel[] */
  public function setMembershipsDurationAtLevels($membershipsDurationAtLevels)
  {
    $this->membershipsDurationAtLevels = $membershipsDurationAtLevels;
  }
  /** @return MembershipsDurationAtLevel[] */
  public function getMembershipsDurationAtLevels()
  {
    return $this->membershipsDurationAtLevels;
  }
}

class MembershipsDuration extends \Google\Model
{
  /** @var string */
  public $memberSince;
  /** @var int */
  public $memberTotalDurationMonths;

  /** @param string */
  public function setMemberSince($memberSince)
  {
    $this->memberSince = $memberSince;
  }
  /** @return string */
  public function getMemberSince()
  {
    return $this->memberSince;
  }
  /** @param int */
  public function setMemberTotalDurationMonths($memberTotalDurationMonths)
  {
    $this->memberTotalDurationMonths = $memberTotalDurationMonths;
  }
  /** @return int */
  public function getMemberTotalDurationMonths()
  {
    return $this->memberTotalDurationMonths;
  }
}

class MembershipsDurationAtLevel extends \Google\Model
{
  /** @var string */
  public $level;
  /** @var string */
  public $memberSince;
  /** @var int */
  public $memberTotalDurationMonths;

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
  public function setMemberSince($memberSince)
  {
    $this->memberSince = $memberSince;
  }
  /** @return string */
  public function getMemberSince()
  {
    return $this->memberSince;
  }
  /** @param int */
  public function setMemberTotalDurationMonths($memberTotalDurationMonths)
  {
    $this->memberTotalDurationMonths = $memberTotalDurationMonths;
  }
  /** @return int */
  public function getMemberTotalDurationMonths()
  {
    return $this->memberTotalDurationMonths;
  }
}

class MembershipsLevel extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var MembershipsLevelSnippet */
  public $snippet;
  protected $snippetType = MembershipsLevelSnippet::class;
  protected $snippetDataType = '';
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
  /** @param MembershipsLevelSnippet */
  public function setSnippet(MembershipsLevelSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return MembershipsLevelSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class MembershipsLevelListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var MembershipsLevel[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = MembershipsLevel::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param MembershipsLevel[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return MembershipsLevel[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class MembershipsLevelSnippet extends \Google\Model
{
  /** @var string */
  public $creatorChannelId;
  /** @var LevelDetails */
  public $levelDetails;
  protected $levelDetailsType = LevelDetails::class;
  protected $levelDetailsDataType = '';
  /** @param string */
  public function setCreatorChannelId($creatorChannelId)
  {
    $this->creatorChannelId = $creatorChannelId;
  }
  /** @return string */
  public function getCreatorChannelId()
  {
    return $this->creatorChannelId;
  }
  /** @param LevelDetails */
  public function setLevelDetails(LevelDetails $levelDetails)
  {
    $this->levelDetails = $levelDetails;
  }
  /** @return LevelDetails */
  public function getLevelDetails()
  {
    return $this->levelDetails;
  }
}

class MonitorStreamInfo extends \Google\Model
{
  /** @var string */
  public $broadcastStreamDelayMs;
  /** @var string */
  public $embedHtml;
  /** @var bool */
  public $enableMonitorStream;

  /** @param string */
  public function setBroadcastStreamDelayMs($broadcastStreamDelayMs)
  {
    $this->broadcastStreamDelayMs = $broadcastStreamDelayMs;
  }
  /** @return string */
  public function getBroadcastStreamDelayMs()
  {
    return $this->broadcastStreamDelayMs;
  }
  /** @param string */
  public function setEmbedHtml($embedHtml)
  {
    $this->embedHtml = $embedHtml;
  }
  /** @return string */
  public function getEmbedHtml()
  {
    return $this->embedHtml;
  }
  /** @param bool */
  public function setEnableMonitorStream($enableMonitorStream)
  {
    $this->enableMonitorStream = $enableMonitorStream;
  }
  /** @return bool */
  public function getEnableMonitorStream()
  {
    return $this->enableMonitorStream;
  }
}

class PageInfo extends \Google\Model
{
  /** @var int */
  public $resultsPerPage;
  /** @var int */
  public $totalResults;

  /** @param int */
  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }
  /** @return int */
  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
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

class Playlist extends \Google\Model
{
  /** @var PlaylistContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var PlaylistLocalization[] */
  public $localizations;
  /** @var PlaylistPlayer */
  public $player;
  /** @var PlaylistSnippet */
  public $snippet;
  /** @var PlaylistStatus */
  public $status;
  protected $contentDetailsType = PlaylistContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $localizationsType = PlaylistLocalization::class;
  protected $localizationsDataType = 'map';
  protected $playerType = PlaylistPlayer::class;
  protected $playerDataType = '';
  protected $snippetType = PlaylistSnippet::class;
  protected $snippetDataType = '';
  protected $statusType = PlaylistStatus::class;
  protected $statusDataType = '';
  /** @param PlaylistContentDetails */
  public function setContentDetails(PlaylistContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return PlaylistContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param PlaylistLocalization[] */
  public function setLocalizations($localizations)
  {
    $this->localizations = $localizations;
  }
  /** @return PlaylistLocalization[] */
  public function getLocalizations()
  {
    return $this->localizations;
  }
  /** @param PlaylistPlayer */
  public function setPlayer(PlaylistPlayer $player)
  {
    $this->player = $player;
  }
  /** @return PlaylistPlayer */
  public function getPlayer()
  {
    return $this->player;
  }
  /** @param PlaylistSnippet */
  public function setSnippet(PlaylistSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return PlaylistSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param PlaylistStatus */
  public function setStatus(PlaylistStatus $status)
  {
    $this->status = $status;
  }
  /** @return PlaylistStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class PlaylistContentDetails extends \Google\Model
{
  /** @var string */
  public $itemCount;

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
}

class PlaylistItem extends \Google\Model
{
  /** @var PlaylistItemContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var PlaylistItemSnippet */
  public $snippet;
  /** @var PlaylistItemStatus */
  public $status;
  protected $contentDetailsType = PlaylistItemContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $snippetType = PlaylistItemSnippet::class;
  protected $snippetDataType = '';
  protected $statusType = PlaylistItemStatus::class;
  protected $statusDataType = '';
  /** @param PlaylistItemContentDetails */
  public function setContentDetails(PlaylistItemContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return PlaylistItemContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param PlaylistItemSnippet */
  public function setSnippet(PlaylistItemSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return PlaylistItemSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param PlaylistItemStatus */
  public function setStatus(PlaylistItemStatus $status)
  {
    $this->status = $status;
  }
  /** @return PlaylistItemStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class PlaylistItemContentDetails extends \Google\Model
{
  /** @var string */
  public $endAt;
  /** @var string */
  public $note;
  /** @var string */
  public $startAt;
  /** @var string */
  public $videoId;
  /** @var string */
  public $videoPublishedAt;

  /** @param string */
  public function setEndAt($endAt)
  {
    $this->endAt = $endAt;
  }
  /** @return string */
  public function getEndAt()
  {
    return $this->endAt;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param string */
  public function setStartAt($startAt)
  {
    $this->startAt = $startAt;
  }
  /** @return string */
  public function getStartAt()
  {
    return $this->startAt;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
  /** @param string */
  public function setVideoPublishedAt($videoPublishedAt)
  {
    $this->videoPublishedAt = $videoPublishedAt;
  }
  /** @return string */
  public function getVideoPublishedAt()
  {
    return $this->videoPublishedAt;
  }
}

class PlaylistItemListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var PlaylistItem[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = PlaylistItem::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param PlaylistItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return PlaylistItem[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class PlaylistItemSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $description;
  /** @var string */
  public $playlistId;
  /** @var string */
  public $position;
  /** @var string */
  public $publishedAt;
  /** @var ResourceId */
  public $resourceId;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  /** @var string */
  public $videoOwnerChannelId;
  /** @var string */
  public $videoOwnerChannelTitle;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
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
  public function setPlaylistId($playlistId)
  {
    $this->playlistId = $playlistId;
  }
  /** @return string */
  public function getPlaylistId()
  {
    return $this->playlistId;
  }
  /** @param string */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return string */
  public function getPosition()
  {
    return $this->position;
  }
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
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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
  public function setVideoOwnerChannelId($videoOwnerChannelId)
  {
    $this->videoOwnerChannelId = $videoOwnerChannelId;
  }
  /** @return string */
  public function getVideoOwnerChannelId()
  {
    return $this->videoOwnerChannelId;
  }
  /** @param string */
  public function setVideoOwnerChannelTitle($videoOwnerChannelTitle)
  {
    $this->videoOwnerChannelTitle = $videoOwnerChannelTitle;
  }
  /** @return string */
  public function getVideoOwnerChannelTitle()
  {
    return $this->videoOwnerChannelTitle;
  }
}

class PlaylistItemStatus extends \Google\Model
{
  /** @var string */
  public $privacyStatus;

  /** @param string */
  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }
  /** @return string */
  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
}

class PlaylistListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Playlist[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Playlist::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Playlist[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Playlist[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class PlaylistLocalization extends \Google\Model
{
  /** @var string */
  public $description;
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

class PlaylistPlayer extends \Google\Model
{
  /** @var string */
  public $embedHtml;

  /** @param string */
  public function setEmbedHtml($embedHtml)
  {
    $this->embedHtml = $embedHtml;
  }
  /** @return string */
  public function getEmbedHtml()
  {
    return $this->embedHtml;
  }
}

class PlaylistSnippet extends \Google\Collection
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $defaultLanguage;
  /** @var string */
  public $description;
  /** @var PlaylistLocalization */
  public $localized;
  /** @var string */
  public $publishedAt;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $thumbnailVideoId;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $collection_key = 'tags';
  protected $localizedType = PlaylistLocalization::class;
  protected $localizedDataType = '';
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
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
  /** @param PlaylistLocalization */
  public function setLocalized(PlaylistLocalization $localized)
  {
    $this->localized = $localized;
  }
  /** @return PlaylistLocalization */
  public function getLocalized()
  {
    return $this->localized;
  }
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
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param string */
  public function setThumbnailVideoId($thumbnailVideoId)
  {
    $this->thumbnailVideoId = $thumbnailVideoId;
  }
  /** @return string */
  public function getThumbnailVideoId()
  {
    return $this->thumbnailVideoId;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class PlaylistStatus extends \Google\Model
{
  /** @var string */
  public $privacyStatus;

  /** @param string */
  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }
  /** @return string */
  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
}

class PropertyValue extends \Google\Model
{
  /** @var string */
  public $property;
  /** @var string */
  public $value;

  /** @param string */
  public function setProperty($property)
  {
    $this->property = $property;
  }
  /** @return string */
  public function getProperty()
  {
    return $this->property;
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

class RelatedEntity extends \Google\Model
{
  /** @var Entity */
  public $entity;
  protected $entityType = Entity::class;
  protected $entityDataType = '';
  /** @param Entity */
  public function setEntity(Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return Entity */
  public function getEntity()
  {
    return $this->entity;
  }
}

class ResourceId extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $kind;
  /** @var string */
  public $playlistId;
  /** @var string */
  public $videoId;

  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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
  public function setPlaylistId($playlistId)
  {
    $this->playlistId = $playlistId;
  }
  /** @return string */
  public function getPlaylistId()
  {
    return $this->playlistId;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class SearchListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var SearchResult[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var string */
  public $regionCode;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = SearchResult::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param SearchResult[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SearchResult[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
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
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class SearchResult extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var ResourceId */
  public $id;
  /** @var string */
  public $kind;
  /** @var SearchResultSnippet */
  public $snippet;
  protected $idType = ResourceId::class;
  protected $idDataType = '';
  protected $snippetType = SearchResultSnippet::class;
  protected $snippetDataType = '';
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
  /** @param ResourceId */
  public function setId(ResourceId $id)
  {
    $this->id = $id;
  }
  /** @return ResourceId */
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
  /** @param SearchResultSnippet */
  public function setSnippet(SearchResultSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return SearchResultSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class SearchResultSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $description;
  /** @var string */
  public $liveBroadcastContent;
  /** @var string */
  public $publishedAt;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
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
  public function setLiveBroadcastContent($liveBroadcastContent)
  {
    $this->liveBroadcastContent = $liveBroadcastContent;
  }
  /** @return string */
  public function getLiveBroadcastContent()
  {
    return $this->liveBroadcastContent;
  }
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
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class Subscription extends \Google\Model
{
  /** @var SubscriptionContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var SubscriptionSnippet */
  public $snippet;
  /** @var SubscriptionSubscriberSnippet */
  public $subscriberSnippet;
  protected $contentDetailsType = SubscriptionContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $snippetType = SubscriptionSnippet::class;
  protected $snippetDataType = '';
  protected $subscriberSnippetType = SubscriptionSubscriberSnippet::class;
  protected $subscriberSnippetDataType = '';
  /** @param SubscriptionContentDetails */
  public function setContentDetails(SubscriptionContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return SubscriptionContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param SubscriptionSnippet */
  public function setSnippet(SubscriptionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return SubscriptionSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param SubscriptionSubscriberSnippet */
  public function setSubscriberSnippet(SubscriptionSubscriberSnippet $subscriberSnippet)
  {
    $this->subscriberSnippet = $subscriberSnippet;
  }
  /** @return SubscriptionSubscriberSnippet */
  public function getSubscriberSnippet()
  {
    return $this->subscriberSnippet;
  }
}

class SubscriptionContentDetails extends \Google\Model
{
  /** @var string */
  public $activityType;
  /** @var string */
  public $newItemCount;
  /** @var string */
  public $totalItemCount;

  /** @param string */
  public function setActivityType($activityType)
  {
    $this->activityType = $activityType;
  }
  /** @return string */
  public function getActivityType()
  {
    return $this->activityType;
  }
  /** @param string */
  public function setNewItemCount($newItemCount)
  {
    $this->newItemCount = $newItemCount;
  }
  /** @return string */
  public function getNewItemCount()
  {
    return $this->newItemCount;
  }
  /** @param string */
  public function setTotalItemCount($totalItemCount)
  {
    $this->totalItemCount = $totalItemCount;
  }
  /** @return string */
  public function getTotalItemCount()
  {
    return $this->totalItemCount;
  }
}

class SubscriptionListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Subscription[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Subscription::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Subscription[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Subscription[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class SubscriptionSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $description;
  /** @var string */
  public $publishedAt;
  /** @var ResourceId */
  public $resourceId;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
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
  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }
  /** @return string */
  public function getPublishedAt()
  {
    return $this->publishedAt;
  }
  /** @param ResourceId */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return ResourceId */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class SubscriptionSubscriberSnippet extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $description;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class SuperChatEvent extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var SuperChatEventSnippet */
  public $snippet;
  protected $snippetType = SuperChatEventSnippet::class;
  protected $snippetDataType = '';
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
  /** @param SuperChatEventSnippet */
  public function setSnippet(SuperChatEventSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return SuperChatEventSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class SuperChatEventListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var SuperChatEvent[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = SuperChatEvent::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param SuperChatEvent[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SuperChatEvent[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class SuperChatEventSnippet extends \Google\Model
{
  /** @var string */
  public $amountMicros;
  /** @var string */
  public $channelId;
  /** @var string */
  public $commentText;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $currency;
  /** @var string */
  public $displayString;
  /** @var bool */
  public $isSuperStickerEvent;
  /** @var string */
  public $messageType;
  /** @var SuperStickerMetadata */
  public $superStickerMetadata;
  /** @var ChannelProfileDetails */
  public $supporterDetails;
  protected $superStickerMetadataType = SuperStickerMetadata::class;
  protected $superStickerMetadataDataType = '';
  protected $supporterDetailsType = ChannelProfileDetails::class;
  protected $supporterDetailsDataType = '';
  /** @param string */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /** @return string */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setCommentText($commentText)
  {
    $this->commentText = $commentText;
  }
  /** @return string */
  public function getCommentText()
  {
    return $this->commentText;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  public function setDisplayString($displayString)
  {
    $this->displayString = $displayString;
  }
  /** @return string */
  public function getDisplayString()
  {
    return $this->displayString;
  }
  /** @param bool */
  public function setIsSuperStickerEvent($isSuperStickerEvent)
  {
    $this->isSuperStickerEvent = $isSuperStickerEvent;
  }
  /** @return bool */
  public function getIsSuperStickerEvent()
  {
    return $this->isSuperStickerEvent;
  }
  /** @param string */
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  /** @return string */
  public function getMessageType()
  {
    return $this->messageType;
  }
  /** @param SuperStickerMetadata */
  public function setSuperStickerMetadata(SuperStickerMetadata $superStickerMetadata)
  {
    $this->superStickerMetadata = $superStickerMetadata;
  }
  /** @return SuperStickerMetadata */
  public function getSuperStickerMetadata()
  {
    return $this->superStickerMetadata;
  }
  /** @param ChannelProfileDetails */
  public function setSupporterDetails(ChannelProfileDetails $supporterDetails)
  {
    $this->supporterDetails = $supporterDetails;
  }
  /** @return ChannelProfileDetails */
  public function getSupporterDetails()
  {
    return $this->supporterDetails;
  }
}

class SuperStickerMetadata extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $altTextLanguage;
  /** @var string */
  public $stickerId;

  /** @param string */
  public function setAltText($altText)
  {
    $this->altText = $altText;
  }
  /** @return string */
  public function getAltText()
  {
    return $this->altText;
  }
  /** @param string */
  public function setAltTextLanguage($altTextLanguage)
  {
    $this->altTextLanguage = $altTextLanguage;
  }
  /** @return string */
  public function getAltTextLanguage()
  {
    return $this->altTextLanguage;
  }
  /** @param string */
  public function setStickerId($stickerId)
  {
    $this->stickerId = $stickerId;
  }
  /** @return string */
  public function getStickerId()
  {
    return $this->stickerId;
  }
}

class TestItem extends \Google\Model
{
  /** @var bool */
  public $featuredPart;
  /** @var string */
  public $gaia;
  /** @var string */
  public $id;
  /** @var TestItemTestItemSnippet */
  public $snippet;
  protected $snippetType = TestItemTestItemSnippet::class;
  protected $snippetDataType = '';
  /** @param bool */
  public function setFeaturedPart($featuredPart)
  {
    $this->featuredPart = $featuredPart;
  }
  /** @return bool */
  public function getFeaturedPart()
  {
    return $this->featuredPart;
  }
  /** @param string */
  public function setGaia($gaia)
  {
    $this->gaia = $gaia;
  }
  /** @return string */
  public function getGaia()
  {
    return $this->gaia;
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
  /** @param TestItemTestItemSnippet */
  public function setSnippet(TestItemTestItemSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return TestItemTestItemSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class TestItemTestItemSnippet extends \Google\Model
{
}

class ThirdPartyLink extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $linkingToken;
  /** @var ThirdPartyLinkSnippet */
  public $snippet;
  /** @var ThirdPartyLinkStatus */
  public $status;
  protected $snippetType = ThirdPartyLinkSnippet::class;
  protected $snippetDataType = '';
  protected $statusType = ThirdPartyLinkStatus::class;
  protected $statusDataType = '';
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
  public function setLinkingToken($linkingToken)
  {
    $this->linkingToken = $linkingToken;
  }
  /** @return string */
  public function getLinkingToken()
  {
    return $this->linkingToken;
  }
  /** @param ThirdPartyLinkSnippet */
  public function setSnippet(ThirdPartyLinkSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return ThirdPartyLinkSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param ThirdPartyLinkStatus */
  public function setStatus(ThirdPartyLinkStatus $status)
  {
    $this->status = $status;
  }
  /** @return ThirdPartyLinkStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class ThirdPartyLinkListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var ThirdPartyLink[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = ThirdPartyLink::class;
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
  /** @param ThirdPartyLink[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ThirdPartyLink[] */
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

class ThirdPartyLinkSnippet extends \Google\Model
{
  /** @var ChannelToStoreLinkDetails */
  public $channelToStoreLink;
  /** @var string */
  public $type;
  protected $channelToStoreLinkType = ChannelToStoreLinkDetails::class;
  protected $channelToStoreLinkDataType = '';
  /** @param ChannelToStoreLinkDetails */
  public function setChannelToStoreLink(ChannelToStoreLinkDetails $channelToStoreLink)
  {
    $this->channelToStoreLink = $channelToStoreLink;
  }
  /** @return ChannelToStoreLinkDetails */
  public function getChannelToStoreLink()
  {
    return $this->channelToStoreLink;
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

class ThirdPartyLinkStatus extends \Google\Model
{
  /** @var string */
  public $linkStatus;

  /** @param string */
  public function setLinkStatus($linkStatus)
  {
    $this->linkStatus = $linkStatus;
  }
  /** @return string */
  public function getLinkStatus()
  {
    return $this->linkStatus;
  }
}

class Thumbnail extends \Google\Model
{
  /** @var string */
  public $height;
  /** @var string */
  public $url;
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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
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

class ThumbnailDetails extends \Google\Model
{
  /** @var Thumbnail */
  public $default;
  /** @var Thumbnail */
  public $high;
  /** @var Thumbnail */
  public $maxres;
  /** @var Thumbnail */
  public $medium;
  /** @var Thumbnail */
  public $standard;
  protected $defaultType = Thumbnail::class;
  protected $defaultDataType = '';
  protected $highType = Thumbnail::class;
  protected $highDataType = '';
  protected $maxresType = Thumbnail::class;
  protected $maxresDataType = '';
  protected $mediumType = Thumbnail::class;
  protected $mediumDataType = '';
  protected $standardType = Thumbnail::class;
  protected $standardDataType = '';
  /** @param Thumbnail */
  public function setDefault(Thumbnail $default)
  {
    $this->default = $default;
  }
  /** @return Thumbnail */
  public function getDefault()
  {
    return $this->default;
  }
  /** @param Thumbnail */
  public function setHigh(Thumbnail $high)
  {
    $this->high = $high;
  }
  /** @return Thumbnail */
  public function getHigh()
  {
    return $this->high;
  }
  /** @param Thumbnail */
  public function setMaxres(Thumbnail $maxres)
  {
    $this->maxres = $maxres;
  }
  /** @return Thumbnail */
  public function getMaxres()
  {
    return $this->maxres;
  }
  /** @param Thumbnail */
  public function setMedium(Thumbnail $medium)
  {
    $this->medium = $medium;
  }
  /** @return Thumbnail */
  public function getMedium()
  {
    return $this->medium;
  }
  /** @param Thumbnail */
  public function setStandard(Thumbnail $standard)
  {
    $this->standard = $standard;
  }
  /** @return Thumbnail */
  public function getStandard()
  {
    return $this->standard;
  }
}

class ThumbnailSetResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var ThumbnailDetails[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = ThumbnailDetails::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param ThumbnailDetails[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ThumbnailDetails[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class TokenPagination extends \Google\Model
{
}

class Video extends \Google\Model
{
  /** @var VideoAgeGating */
  public $ageGating;
  /** @var VideoContentDetails */
  public $contentDetails;
  /** @var string */
  public $etag;
  /** @var VideoFileDetails */
  public $fileDetails;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var VideoLiveStreamingDetails */
  public $liveStreamingDetails;
  /** @var VideoLocalization[] */
  public $localizations;
  /** @var VideoMonetizationDetails */
  public $monetizationDetails;
  /** @var VideoPlayer */
  public $player;
  /** @var VideoProcessingDetails */
  public $processingDetails;
  /** @var VideoProjectDetails */
  public $projectDetails;
  /** @var VideoRecordingDetails */
  public $recordingDetails;
  /** @var VideoSnippet */
  public $snippet;
  /** @var VideoStatistics */
  public $statistics;
  /** @var VideoStatus */
  public $status;
  /** @var VideoSuggestions */
  public $suggestions;
  /** @var VideoTopicDetails */
  public $topicDetails;
  protected $ageGatingType = VideoAgeGating::class;
  protected $ageGatingDataType = '';
  protected $contentDetailsType = VideoContentDetails::class;
  protected $contentDetailsDataType = '';
  protected $fileDetailsType = VideoFileDetails::class;
  protected $fileDetailsDataType = '';
  protected $liveStreamingDetailsType = VideoLiveStreamingDetails::class;
  protected $liveStreamingDetailsDataType = '';
  protected $localizationsType = VideoLocalization::class;
  protected $localizationsDataType = 'map';
  protected $monetizationDetailsType = VideoMonetizationDetails::class;
  protected $monetizationDetailsDataType = '';
  protected $playerType = VideoPlayer::class;
  protected $playerDataType = '';
  protected $processingDetailsType = VideoProcessingDetails::class;
  protected $processingDetailsDataType = '';
  protected $projectDetailsType = VideoProjectDetails::class;
  protected $projectDetailsDataType = '';
  protected $recordingDetailsType = VideoRecordingDetails::class;
  protected $recordingDetailsDataType = '';
  protected $snippetType = VideoSnippet::class;
  protected $snippetDataType = '';
  protected $statisticsType = VideoStatistics::class;
  protected $statisticsDataType = '';
  protected $statusType = VideoStatus::class;
  protected $statusDataType = '';
  protected $suggestionsType = VideoSuggestions::class;
  protected $suggestionsDataType = '';
  protected $topicDetailsType = VideoTopicDetails::class;
  protected $topicDetailsDataType = '';
  /** @param VideoAgeGating */
  public function setAgeGating(VideoAgeGating $ageGating)
  {
    $this->ageGating = $ageGating;
  }
  /** @return VideoAgeGating */
  public function getAgeGating()
  {
    return $this->ageGating;
  }
  /** @param VideoContentDetails */
  public function setContentDetails(VideoContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /** @return VideoContentDetails */
  public function getContentDetails()
  {
    return $this->contentDetails;
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
  /** @param VideoFileDetails */
  public function setFileDetails(VideoFileDetails $fileDetails)
  {
    $this->fileDetails = $fileDetails;
  }
  /** @return VideoFileDetails */
  public function getFileDetails()
  {
    return $this->fileDetails;
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
  /** @param VideoLiveStreamingDetails */
  public function setLiveStreamingDetails(VideoLiveStreamingDetails $liveStreamingDetails)
  {
    $this->liveStreamingDetails = $liveStreamingDetails;
  }
  /** @return VideoLiveStreamingDetails */
  public function getLiveStreamingDetails()
  {
    return $this->liveStreamingDetails;
  }
  /** @param VideoLocalization[] */
  public function setLocalizations($localizations)
  {
    $this->localizations = $localizations;
  }
  /** @return VideoLocalization[] */
  public function getLocalizations()
  {
    return $this->localizations;
  }
  /** @param VideoMonetizationDetails */
  public function setMonetizationDetails(VideoMonetizationDetails $monetizationDetails)
  {
    $this->monetizationDetails = $monetizationDetails;
  }
  /** @return VideoMonetizationDetails */
  public function getMonetizationDetails()
  {
    return $this->monetizationDetails;
  }
  /** @param VideoPlayer */
  public function setPlayer(VideoPlayer $player)
  {
    $this->player = $player;
  }
  /** @return VideoPlayer */
  public function getPlayer()
  {
    return $this->player;
  }
  /** @param VideoProcessingDetails */
  public function setProcessingDetails(VideoProcessingDetails $processingDetails)
  {
    $this->processingDetails = $processingDetails;
  }
  /** @return VideoProcessingDetails */
  public function getProcessingDetails()
  {
    return $this->processingDetails;
  }
  /** @param VideoProjectDetails */
  public function setProjectDetails(VideoProjectDetails $projectDetails)
  {
    $this->projectDetails = $projectDetails;
  }
  /** @return VideoProjectDetails */
  public function getProjectDetails()
  {
    return $this->projectDetails;
  }
  /** @param VideoRecordingDetails */
  public function setRecordingDetails(VideoRecordingDetails $recordingDetails)
  {
    $this->recordingDetails = $recordingDetails;
  }
  /** @return VideoRecordingDetails */
  public function getRecordingDetails()
  {
    return $this->recordingDetails;
  }
  /** @param VideoSnippet */
  public function setSnippet(VideoSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return VideoSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param VideoStatistics */
  public function setStatistics(VideoStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return VideoStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
  /** @param VideoStatus */
  public function setStatus(VideoStatus $status)
  {
    $this->status = $status;
  }
  /** @return VideoStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param VideoSuggestions */
  public function setSuggestions(VideoSuggestions $suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return VideoSuggestions */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
  /** @param VideoTopicDetails */
  public function setTopicDetails(VideoTopicDetails $topicDetails)
  {
    $this->topicDetails = $topicDetails;
  }
  /** @return VideoTopicDetails */
  public function getTopicDetails()
  {
    return $this->topicDetails;
  }
}

class VideoAbuseReport extends \Google\Model
{
  /** @var string */
  public $comments;
  /** @var string */
  public $language;
  /** @var string */
  public $reasonId;
  /** @var string */
  public $secondaryReasonId;
  /** @var string */
  public $videoId;

  /** @param string */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string */
  public function getComments()
  {
    return $this->comments;
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
  public function setReasonId($reasonId)
  {
    $this->reasonId = $reasonId;
  }
  /** @return string */
  public function getReasonId()
  {
    return $this->reasonId;
  }
  /** @param string */
  public function setSecondaryReasonId($secondaryReasonId)
  {
    $this->secondaryReasonId = $secondaryReasonId;
  }
  /** @return string */
  public function getSecondaryReasonId()
  {
    return $this->secondaryReasonId;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class VideoAbuseReportReason extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var VideoAbuseReportReasonSnippet */
  public $snippet;
  protected $snippetType = VideoAbuseReportReasonSnippet::class;
  protected $snippetDataType = '';
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
  /** @param VideoAbuseReportReasonSnippet */
  public function setSnippet(VideoAbuseReportReasonSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return VideoAbuseReportReasonSnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class VideoAbuseReportReasonListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var VideoAbuseReportReason[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = VideoAbuseReportReason::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param VideoAbuseReportReason[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return VideoAbuseReportReason[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class VideoAbuseReportReasonSnippet extends \Google\Collection
{
  /** @var string */
  public $label;
  /** @var VideoAbuseReportSecondaryReason[] */
  public $secondaryReasons;
  protected $collection_key = 'secondaryReasons';
  protected $secondaryReasonsType = VideoAbuseReportSecondaryReason::class;
  protected $secondaryReasonsDataType = 'array';
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
  /** @param VideoAbuseReportSecondaryReason[] */
  public function setSecondaryReasons($secondaryReasons)
  {
    $this->secondaryReasons = $secondaryReasons;
  }
  /** @return VideoAbuseReportSecondaryReason[] */
  public function getSecondaryReasons()
  {
    return $this->secondaryReasons;
  }
}

class VideoAbuseReportSecondaryReason extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $label;

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
}

class VideoAgeGating extends \Google\Model
{
  /** @var bool */
  public $alcoholContent;
  /** @var bool */
  public $restricted;
  /** @var string */
  public $videoGameRating;

  /** @param bool */
  public function setAlcoholContent($alcoholContent)
  {
    $this->alcoholContent = $alcoholContent;
  }
  /** @return bool */
  public function getAlcoholContent()
  {
    return $this->alcoholContent;
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
  public function setVideoGameRating($videoGameRating)
  {
    $this->videoGameRating = $videoGameRating;
  }
  /** @return string */
  public function getVideoGameRating()
  {
    return $this->videoGameRating;
  }
}

class VideoCategory extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var VideoCategorySnippet */
  public $snippet;
  protected $snippetType = VideoCategorySnippet::class;
  protected $snippetDataType = '';
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
  /** @param VideoCategorySnippet */
  public function setSnippet(VideoCategorySnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return VideoCategorySnippet */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class VideoCategoryListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var VideoCategory[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = VideoCategory::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param VideoCategory[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return VideoCategory[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class VideoCategorySnippet extends \Google\Model
{
  /** @var bool */
  public $assignable;
  /** @var string */
  public $channelId;
  /** @var string */
  public $title;

  /** @param bool */
  public function setAssignable($assignable)
  {
    $this->assignable = $assignable;
  }
  /** @return bool */
  public function getAssignable()
  {
    return $this->assignable;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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

class VideoContentDetails extends \Google\Model
{
  /** @var string */
  public $caption;
  /** @var ContentRating */
  public $contentRating;
  /** @var AccessPolicy */
  public $countryRestriction;
  /** @var string */
  public $definition;
  /** @var string */
  public $dimension;
  /** @var string */
  public $duration;
  /** @var bool */
  public $hasCustomThumbnail;
  /** @var bool */
  public $licensedContent;
  /** @var string */
  public $projection;
  /** @var VideoContentDetailsRegionRestriction */
  public $regionRestriction;
  protected $contentRatingType = ContentRating::class;
  protected $contentRatingDataType = '';
  protected $countryRestrictionType = AccessPolicy::class;
  protected $countryRestrictionDataType = '';
  protected $regionRestrictionType = VideoContentDetailsRegionRestriction::class;
  protected $regionRestrictionDataType = '';
  /** @param string */
  public function setCaption($caption)
  {
    $this->caption = $caption;
  }
  /** @return string */
  public function getCaption()
  {
    return $this->caption;
  }
  /** @param ContentRating */
  public function setContentRating(ContentRating $contentRating)
  {
    $this->contentRating = $contentRating;
  }
  /** @return ContentRating */
  public function getContentRating()
  {
    return $this->contentRating;
  }
  /** @param AccessPolicy */
  public function setCountryRestriction(AccessPolicy $countryRestriction)
  {
    $this->countryRestriction = $countryRestriction;
  }
  /** @return AccessPolicy */
  public function getCountryRestriction()
  {
    return $this->countryRestriction;
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
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return string */
  public function getDimension()
  {
    return $this->dimension;
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
  /** @param bool */
  public function setHasCustomThumbnail($hasCustomThumbnail)
  {
    $this->hasCustomThumbnail = $hasCustomThumbnail;
  }
  /** @return bool */
  public function getHasCustomThumbnail()
  {
    return $this->hasCustomThumbnail;
  }
  /** @param bool */
  public function setLicensedContent($licensedContent)
  {
    $this->licensedContent = $licensedContent;
  }
  /** @return bool */
  public function getLicensedContent()
  {
    return $this->licensedContent;
  }
  /** @param string */
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  /** @return string */
  public function getProjection()
  {
    return $this->projection;
  }
  /** @param VideoContentDetailsRegionRestriction */
  public function setRegionRestriction(VideoContentDetailsRegionRestriction $regionRestriction)
  {
    $this->regionRestriction = $regionRestriction;
  }
  /** @return VideoContentDetailsRegionRestriction */
  public function getRegionRestriction()
  {
    return $this->regionRestriction;
  }
}

class VideoContentDetailsRegionRestriction extends \Google\Collection
{
  /** @var string[] */
  public $allowed;
  /** @var string[] */
  public $blocked;
  protected $collection_key = 'blocked';
  /** @param string[] */
  public function setAllowed($allowed)
  {
    $this->allowed = $allowed;
  }
  /** @return string[] */
  public function getAllowed()
  {
    return $this->allowed;
  }
  /** @param string[] */
  public function setBlocked($blocked)
  {
    $this->blocked = $blocked;
  }
  /** @return string[] */
  public function getBlocked()
  {
    return $this->blocked;
  }
}

class VideoFileDetails extends \Google\Collection
{
  /** @var VideoFileDetailsAudioStream[] */
  public $audioStreams;
  /** @var string */
  public $bitrateBps;
  /** @var string */
  public $container;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $durationMs;
  /** @var string */
  public $fileName;
  /** @var string */
  public $fileSize;
  /** @var string */
  public $fileType;
  /** @var VideoFileDetailsVideoStream[] */
  public $videoStreams;
  protected $collection_key = 'videoStreams';
  protected $audioStreamsType = VideoFileDetailsAudioStream::class;
  protected $audioStreamsDataType = 'array';
  protected $videoStreamsType = VideoFileDetailsVideoStream::class;
  protected $videoStreamsDataType = 'array';
  /** @param VideoFileDetailsAudioStream[] */
  public function setAudioStreams($audioStreams)
  {
    $this->audioStreams = $audioStreams;
  }
  /** @return VideoFileDetailsAudioStream[] */
  public function getAudioStreams()
  {
    return $this->audioStreams;
  }
  /** @param string */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return string */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param string */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /** @return string */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /** @return string */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
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
  /** @param string */
  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }
  /** @return string */
  public function getFileSize()
  {
    return $this->fileSize;
  }
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
  /** @param VideoFileDetailsVideoStream[] */
  public function setVideoStreams($videoStreams)
  {
    $this->videoStreams = $videoStreams;
  }
  /** @return VideoFileDetailsVideoStream[] */
  public function getVideoStreams()
  {
    return $this->videoStreams;
  }
}

class VideoFileDetailsAudioStream extends \Google\Model
{
  /** @var string */
  public $bitrateBps;
  /** @var string */
  public $channelCount;
  /** @var string */
  public $codec;
  /** @var string */
  public $vendor;

  /** @param string */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return string */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param string */
  public function setChannelCount($channelCount)
  {
    $this->channelCount = $channelCount;
  }
  /** @return string */
  public function getChannelCount()
  {
    return $this->channelCount;
  }
  /** @param string */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return string */
  public function getCodec()
  {
    return $this->codec;
  }
  /** @param string */
  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }
  /** @return string */
  public function getVendor()
  {
    return $this->vendor;
  }
}

class VideoFileDetailsVideoStream extends \Google\Model
{
  public $aspectRatio;
  /** @var string */
  public $bitrateBps;
  /** @var string */
  public $codec;
  public $frameRateFps;
  /** @var string */
  public $heightPixels;
  /** @var string */
  public $rotation;
  /** @var string */
  public $vendor;
  /** @var string */
  public $widthPixels;

  public function setAspectRatio($aspectRatio)
  {
    $this->aspectRatio = $aspectRatio;
  }
  public function getAspectRatio()
  {
    return $this->aspectRatio;
  }
  /** @param string */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return string */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param string */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return string */
  public function getCodec()
  {
    return $this->codec;
  }
  public function setFrameRateFps($frameRateFps)
  {
    $this->frameRateFps = $frameRateFps;
  }
  public function getFrameRateFps()
  {
    return $this->frameRateFps;
  }
  /** @param string */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return string */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param string */
  public function setRotation($rotation)
  {
    $this->rotation = $rotation;
  }
  /** @return string */
  public function getRotation()
  {
    return $this->rotation;
  }
  /** @param string */
  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }
  /** @return string */
  public function getVendor()
  {
    return $this->vendor;
  }
  /** @param string */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return string */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class VideoGetRatingResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var VideoRating[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = VideoRating::class;
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
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param VideoRating[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return VideoRating[] */
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
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class VideoListResponse extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $eventId;
  /** @var Video[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PageInfo */
  public $pageInfo;
  /** @var string */
  public $prevPageToken;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'items';
  protected $itemsType = Video::class;
  protected $itemsDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
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
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param Video[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Video[] */
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
  }
}

class VideoLiveStreamingDetails extends \Google\Model
{
  /** @var string */
  public $activeLiveChatId;
  /** @var string */
  public $actualEndTime;
  /** @var string */
  public $actualStartTime;
  /** @var string */
  public $concurrentViewers;
  /** @var string */
  public $scheduledEndTime;
  /** @var string */
  public $scheduledStartTime;

  /** @param string */
  public function setActiveLiveChatId($activeLiveChatId)
  {
    $this->activeLiveChatId = $activeLiveChatId;
  }
  /** @return string */
  public function getActiveLiveChatId()
  {
    return $this->activeLiveChatId;
  }
  /** @param string */
  public function setActualEndTime($actualEndTime)
  {
    $this->actualEndTime = $actualEndTime;
  }
  /** @return string */
  public function getActualEndTime()
  {
    return $this->actualEndTime;
  }
  /** @param string */
  public function setActualStartTime($actualStartTime)
  {
    $this->actualStartTime = $actualStartTime;
  }
  /** @return string */
  public function getActualStartTime()
  {
    return $this->actualStartTime;
  }
  /** @param string */
  public function setConcurrentViewers($concurrentViewers)
  {
    $this->concurrentViewers = $concurrentViewers;
  }
  /** @return string */
  public function getConcurrentViewers()
  {
    return $this->concurrentViewers;
  }
  /** @param string */
  public function setScheduledEndTime($scheduledEndTime)
  {
    $this->scheduledEndTime = $scheduledEndTime;
  }
  /** @return string */
  public function getScheduledEndTime()
  {
    return $this->scheduledEndTime;
  }
  /** @param string */
  public function setScheduledStartTime($scheduledStartTime)
  {
    $this->scheduledStartTime = $scheduledStartTime;
  }
  /** @return string */
  public function getScheduledStartTime()
  {
    return $this->scheduledStartTime;
  }
}

class VideoLocalization extends \Google\Model
{
  /** @var string */
  public $description;
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

class VideoMonetizationDetails extends \Google\Model
{
  /** @var AccessPolicy */
  public $access;
  protected $accessType = AccessPolicy::class;
  protected $accessDataType = '';
  /** @param AccessPolicy */
  public function setAccess(AccessPolicy $access)
  {
    $this->access = $access;
  }
  /** @return AccessPolicy */
  public function getAccess()
  {
    return $this->access;
  }
}

class VideoPlayer extends \Google\Model
{
  /** @var string */
  public $embedHeight;
  /** @var string */
  public $embedHtml;
  /** @var string */
  public $embedWidth;

  /** @param string */
  public function setEmbedHeight($embedHeight)
  {
    $this->embedHeight = $embedHeight;
  }
  /** @return string */
  public function getEmbedHeight()
  {
    return $this->embedHeight;
  }
  /** @param string */
  public function setEmbedHtml($embedHtml)
  {
    $this->embedHtml = $embedHtml;
  }
  /** @return string */
  public function getEmbedHtml()
  {
    return $this->embedHtml;
  }
  /** @param string */
  public function setEmbedWidth($embedWidth)
  {
    $this->embedWidth = $embedWidth;
  }
  /** @return string */
  public function getEmbedWidth()
  {
    return $this->embedWidth;
  }
}

class VideoProcessingDetails extends \Google\Model
{
  /** @var string */
  public $editorSuggestionsAvailability;
  /** @var string */
  public $fileDetailsAvailability;
  /** @var string */
  public $processingFailureReason;
  /** @var string */
  public $processingIssuesAvailability;
  /** @var VideoProcessingDetailsProcessingProgress */
  public $processingProgress;
  /** @var string */
  public $processingStatus;
  /** @var string */
  public $tagSuggestionsAvailability;
  /** @var string */
  public $thumbnailsAvailability;
  protected $processingProgressType = VideoProcessingDetailsProcessingProgress::class;
  protected $processingProgressDataType = '';
  /** @param string */
  public function setEditorSuggestionsAvailability($editorSuggestionsAvailability)
  {
    $this->editorSuggestionsAvailability = $editorSuggestionsAvailability;
  }
  /** @return string */
  public function getEditorSuggestionsAvailability()
  {
    return $this->editorSuggestionsAvailability;
  }
  /** @param string */
  public function setFileDetailsAvailability($fileDetailsAvailability)
  {
    $this->fileDetailsAvailability = $fileDetailsAvailability;
  }
  /** @return string */
  public function getFileDetailsAvailability()
  {
    return $this->fileDetailsAvailability;
  }
  /** @param string */
  public function setProcessingFailureReason($processingFailureReason)
  {
    $this->processingFailureReason = $processingFailureReason;
  }
  /** @return string */
  public function getProcessingFailureReason()
  {
    return $this->processingFailureReason;
  }
  /** @param string */
  public function setProcessingIssuesAvailability($processingIssuesAvailability)
  {
    $this->processingIssuesAvailability = $processingIssuesAvailability;
  }
  /** @return string */
  public function getProcessingIssuesAvailability()
  {
    return $this->processingIssuesAvailability;
  }
  /** @param VideoProcessingDetailsProcessingProgress */
  public function setProcessingProgress(VideoProcessingDetailsProcessingProgress $processingProgress)
  {
    $this->processingProgress = $processingProgress;
  }
  /** @return VideoProcessingDetailsProcessingProgress */
  public function getProcessingProgress()
  {
    return $this->processingProgress;
  }
  /** @param string */
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  /** @return string */
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  /** @param string */
  public function setTagSuggestionsAvailability($tagSuggestionsAvailability)
  {
    $this->tagSuggestionsAvailability = $tagSuggestionsAvailability;
  }
  /** @return string */
  public function getTagSuggestionsAvailability()
  {
    return $this->tagSuggestionsAvailability;
  }
  /** @param string */
  public function setThumbnailsAvailability($thumbnailsAvailability)
  {
    $this->thumbnailsAvailability = $thumbnailsAvailability;
  }
  /** @return string */
  public function getThumbnailsAvailability()
  {
    return $this->thumbnailsAvailability;
  }
}

class VideoProcessingDetailsProcessingProgress extends \Google\Model
{
  /** @var string */
  public $partsProcessed;
  /** @var string */
  public $partsTotal;
  /** @var string */
  public $timeLeftMs;

  /** @param string */
  public function setPartsProcessed($partsProcessed)
  {
    $this->partsProcessed = $partsProcessed;
  }
  /** @return string */
  public function getPartsProcessed()
  {
    return $this->partsProcessed;
  }
  /** @param string */
  public function setPartsTotal($partsTotal)
  {
    $this->partsTotal = $partsTotal;
  }
  /** @return string */
  public function getPartsTotal()
  {
    return $this->partsTotal;
  }
  /** @param string */
  public function setTimeLeftMs($timeLeftMs)
  {
    $this->timeLeftMs = $timeLeftMs;
  }
  /** @return string */
  public function getTimeLeftMs()
  {
    return $this->timeLeftMs;
  }
}

class VideoProjectDetails extends \Google\Model
{
}

class VideoRating extends \Google\Model
{
  /** @var string */
  public $rating;
  /** @var string */
  public $videoId;

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
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class VideoRecordingDetails extends \Google\Model
{
  /** @var GeoPoint */
  public $location;
  /** @var string */
  public $locationDescription;
  /** @var string */
  public $recordingDate;
  protected $locationType = GeoPoint::class;
  protected $locationDataType = '';
  /** @param GeoPoint */
  public function setLocation(GeoPoint $location)
  {
    $this->location = $location;
  }
  /** @return GeoPoint */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setLocationDescription($locationDescription)
  {
    $this->locationDescription = $locationDescription;
  }
  /** @return string */
  public function getLocationDescription()
  {
    return $this->locationDescription;
  }
  /** @param string */
  public function setRecordingDate($recordingDate)
  {
    $this->recordingDate = $recordingDate;
  }
  /** @return string */
  public function getRecordingDate()
  {
    return $this->recordingDate;
  }
}

class VideoSnippet extends \Google\Collection
{
  /** @var string */
  public $categoryId;
  /** @var string */
  public $channelId;
  /** @var string */
  public $channelTitle;
  /** @var string */
  public $defaultAudioLanguage;
  /** @var string */
  public $defaultLanguage;
  /** @var string */
  public $description;
  /** @var string */
  public $liveBroadcastContent;
  /** @var VideoLocalization */
  public $localized;
  /** @var string */
  public $publishedAt;
  /** @var string[] */
  public $tags;
  /** @var ThumbnailDetails */
  public $thumbnails;
  /** @var string */
  public $title;
  protected $collection_key = 'tags';
  protected $localizedType = VideoLocalization::class;
  protected $localizedDataType = '';
  protected $thumbnailsType = ThumbnailDetails::class;
  protected $thumbnailsDataType = '';
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
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }
  /** @return string */
  public function getChannelTitle()
  {
    return $this->channelTitle;
  }
  /** @param string */
  public function setDefaultAudioLanguage($defaultAudioLanguage)
  {
    $this->defaultAudioLanguage = $defaultAudioLanguage;
  }
  /** @return string */
  public function getDefaultAudioLanguage()
  {
    return $this->defaultAudioLanguage;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
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
  public function setLiveBroadcastContent($liveBroadcastContent)
  {
    $this->liveBroadcastContent = $liveBroadcastContent;
  }
  /** @return string */
  public function getLiveBroadcastContent()
  {
    return $this->liveBroadcastContent;
  }
  /** @param VideoLocalization */
  public function setLocalized(VideoLocalization $localized)
  {
    $this->localized = $localized;
  }
  /** @return VideoLocalization */
  public function getLocalized()
  {
    return $this->localized;
  }
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
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param ThumbnailDetails */
  public function setThumbnails(ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return ThumbnailDetails */
  public function getThumbnails()
  {
    return $this->thumbnails;
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

class VideoStatistics extends \Google\Model
{
  /** @var string */
  public $commentCount;
  /** @var string */
  public $dislikeCount;
  /** @var string */
  public $favoriteCount;
  /** @var string */
  public $likeCount;
  /** @var string */
  public $viewCount;

  /** @param string */
  public function setCommentCount($commentCount)
  {
    $this->commentCount = $commentCount;
  }
  /** @return string */
  public function getCommentCount()
  {
    return $this->commentCount;
  }
  /** @param string */
  public function setDislikeCount($dislikeCount)
  {
    $this->dislikeCount = $dislikeCount;
  }
  /** @return string */
  public function getDislikeCount()
  {
    return $this->dislikeCount;
  }
  /** @param string */
  public function setFavoriteCount($favoriteCount)
  {
    $this->favoriteCount = $favoriteCount;
  }
  /** @return string */
  public function getFavoriteCount()
  {
    return $this->favoriteCount;
  }
  /** @param string */
  public function setLikeCount($likeCount)
  {
    $this->likeCount = $likeCount;
  }
  /** @return string */
  public function getLikeCount()
  {
    return $this->likeCount;
  }
  /** @param string */
  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  /** @return string */
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

class VideoStatus extends \Google\Model
{
  /** @var bool */
  public $embeddable;
  /** @var string */
  public $failureReason;
  /** @var string */
  public $license;
  /** @var bool */
  public $madeForKids;
  /** @var string */
  public $privacyStatus;
  /** @var bool */
  public $publicStatsViewable;
  /** @var string */
  public $publishAt;
  /** @var string */
  public $rejectionReason;
  /** @var bool */
  public $selfDeclaredMadeForKids;
  /** @var string */
  public $uploadStatus;

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
  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /** @param string */
  public function setLicense($license)
  {
    $this->license = $license;
  }
  /** @return string */
  public function getLicense()
  {
    return $this->license;
  }
  /** @param bool */
  public function setMadeForKids($madeForKids)
  {
    $this->madeForKids = $madeForKids;
  }
  /** @return bool */
  public function getMadeForKids()
  {
    return $this->madeForKids;
  }
  /** @param string */
  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }
  /** @return string */
  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
  /** @param bool */
  public function setPublicStatsViewable($publicStatsViewable)
  {
    $this->publicStatsViewable = $publicStatsViewable;
  }
  /** @return bool */
  public function getPublicStatsViewable()
  {
    return $this->publicStatsViewable;
  }
  /** @param string */
  public function setPublishAt($publishAt)
  {
    $this->publishAt = $publishAt;
  }
  /** @return string */
  public function getPublishAt()
  {
    return $this->publishAt;
  }
  /** @param string */
  public function setRejectionReason($rejectionReason)
  {
    $this->rejectionReason = $rejectionReason;
  }
  /** @return string */
  public function getRejectionReason()
  {
    return $this->rejectionReason;
  }
  /** @param bool */
  public function setSelfDeclaredMadeForKids($selfDeclaredMadeForKids)
  {
    $this->selfDeclaredMadeForKids = $selfDeclaredMadeForKids;
  }
  /** @return bool */
  public function getSelfDeclaredMadeForKids()
  {
    return $this->selfDeclaredMadeForKids;
  }
  /** @param string */
  public function setUploadStatus($uploadStatus)
  {
    $this->uploadStatus = $uploadStatus;
  }
  /** @return string */
  public function getUploadStatus()
  {
    return $this->uploadStatus;
  }
}

class VideoSuggestions extends \Google\Collection
{
  /** @var string[] */
  public $editorSuggestions;
  /** @var string[] */
  public $processingErrors;
  /** @var string[] */
  public $processingHints;
  /** @var string[] */
  public $processingWarnings;
  /** @var VideoSuggestionsTagSuggestion[] */
  public $tagSuggestions;
  protected $collection_key = 'tagSuggestions';
  protected $tagSuggestionsType = VideoSuggestionsTagSuggestion::class;
  protected $tagSuggestionsDataType = 'array';
  /** @param string[] */
  public function setEditorSuggestions($editorSuggestions)
  {
    $this->editorSuggestions = $editorSuggestions;
  }
  /** @return string[] */
  public function getEditorSuggestions()
  {
    return $this->editorSuggestions;
  }
  /** @param string[] */
  public function setProcessingErrors($processingErrors)
  {
    $this->processingErrors = $processingErrors;
  }
  /** @return string[] */
  public function getProcessingErrors()
  {
    return $this->processingErrors;
  }
  /** @param string[] */
  public function setProcessingHints($processingHints)
  {
    $this->processingHints = $processingHints;
  }
  /** @return string[] */
  public function getProcessingHints()
  {
    return $this->processingHints;
  }
  /** @param string[] */
  public function setProcessingWarnings($processingWarnings)
  {
    $this->processingWarnings = $processingWarnings;
  }
  /** @return string[] */
  public function getProcessingWarnings()
  {
    return $this->processingWarnings;
  }
  /** @param VideoSuggestionsTagSuggestion[] */
  public function setTagSuggestions($tagSuggestions)
  {
    $this->tagSuggestions = $tagSuggestions;
  }
  /** @return VideoSuggestionsTagSuggestion[] */
  public function getTagSuggestions()
  {
    return $this->tagSuggestions;
  }
}

class VideoSuggestionsTagSuggestion extends \Google\Collection
{
  /** @var string[] */
  public $categoryRestricts;
  /** @var string */
  public $tag;
  protected $collection_key = 'categoryRestricts';
  /** @param string[] */
  public function setCategoryRestricts($categoryRestricts)
  {
    $this->categoryRestricts = $categoryRestricts;
  }
  /** @return string[] */
  public function getCategoryRestricts()
  {
    return $this->categoryRestricts;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
}

class VideoTopicDetails extends \Google\Collection
{
  /** @var string[] */
  public $relevantTopicIds;
  /** @var string[] */
  public $topicCategories;
  /** @var string[] */
  public $topicIds;
  protected $collection_key = 'topicIds';
  /** @param string[] */
  public function setRelevantTopicIds($relevantTopicIds)
  {
    $this->relevantTopicIds = $relevantTopicIds;
  }
  /** @return string[] */
  public function getRelevantTopicIds()
  {
    return $this->relevantTopicIds;
  }
  /** @param string[] */
  public function setTopicCategories($topicCategories)
  {
    $this->topicCategories = $topicCategories;
  }
  /** @return string[] */
  public function getTopicCategories()
  {
    return $this->topicCategories;
  }
  /** @param string[] */
  public function setTopicIds($topicIds)
  {
    $this->topicIds = $topicIds;
  }
  /** @return string[] */
  public function getTopicIds()
  {
    return $this->topicIds;
  }
}

class WatchSettings extends \Google\Model
{
  /** @var string */
  public $backgroundColor;
  /** @var string */
  public $featuredPlaylistId;
  /** @var string */
  public $textColor;

  /** @param string */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return string */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param string */
  public function setFeaturedPlaylistId($featuredPlaylistId)
  {
    $this->featuredPlaylistId = $featuredPlaylistId;
  }
  /** @return string */
  public function getFeaturedPlaylistId()
  {
    return $this->featuredPlaylistId;
  }
  /** @param string */
  public function setTextColor($textColor)
  {
    $this->textColor = $textColor;
  }
  /** @return string */
  public function getTextColor()
  {
    return $this->textColor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbuseReport::class, 'Google_Service_YouTube_AbuseReport');
class_alias(AbuseType::class, 'Google_Service_YouTube_AbuseType');
class_alias(AccessPolicy::class, 'Google_Service_YouTube_AccessPolicy');
class_alias(Activity::class, 'Google_Service_YouTube_Activity');
class_alias(ActivityContentDetails::class, 'Google_Service_YouTube_ActivityContentDetails');
class_alias(ActivityContentDetailsBulletin::class, 'Google_Service_YouTube_ActivityContentDetailsBulletin');
class_alias(ActivityContentDetailsChannelItem::class, 'Google_Service_YouTube_ActivityContentDetailsChannelItem');
class_alias(ActivityContentDetailsComment::class, 'Google_Service_YouTube_ActivityContentDetailsComment');
class_alias(ActivityContentDetailsFavorite::class, 'Google_Service_YouTube_ActivityContentDetailsFavorite');
class_alias(ActivityContentDetailsLike::class, 'Google_Service_YouTube_ActivityContentDetailsLike');
class_alias(ActivityContentDetailsPlaylistItem::class, 'Google_Service_YouTube_ActivityContentDetailsPlaylistItem');
class_alias(ActivityContentDetailsPromotedItem::class, 'Google_Service_YouTube_ActivityContentDetailsPromotedItem');
class_alias(ActivityContentDetailsRecommendation::class, 'Google_Service_YouTube_ActivityContentDetailsRecommendation');
class_alias(ActivityContentDetailsSocial::class, 'Google_Service_YouTube_ActivityContentDetailsSocial');
class_alias(ActivityContentDetailsSubscription::class, 'Google_Service_YouTube_ActivityContentDetailsSubscription');
class_alias(ActivityContentDetailsUpload::class, 'Google_Service_YouTube_ActivityContentDetailsUpload');
class_alias(ActivityListResponse::class, 'Google_Service_YouTube_ActivityListResponse');
class_alias(ActivitySnippet::class, 'Google_Service_YouTube_ActivitySnippet');
class_alias(Caption::class, 'Google_Service_YouTube_Caption');
class_alias(CaptionListResponse::class, 'Google_Service_YouTube_CaptionListResponse');
class_alias(CaptionSnippet::class, 'Google_Service_YouTube_CaptionSnippet');
class_alias(CdnSettings::class, 'Google_Service_YouTube_CdnSettings');
class_alias(Channel::class, 'Google_Service_YouTube_Channel');
class_alias(ChannelAuditDetails::class, 'Google_Service_YouTube_ChannelAuditDetails');
class_alias(ChannelBannerResource::class, 'Google_Service_YouTube_ChannelBannerResource');
class_alias(ChannelBrandingSettings::class, 'Google_Service_YouTube_ChannelBrandingSettings');
class_alias(ChannelContentDetails::class, 'Google_Service_YouTube_ChannelContentDetails');
class_alias(ChannelContentDetailsRelatedPlaylists::class, 'Google_Service_YouTube_ChannelContentDetailsRelatedPlaylists');
class_alias(ChannelContentOwnerDetails::class, 'Google_Service_YouTube_ChannelContentOwnerDetails');
class_alias(ChannelConversionPing::class, 'Google_Service_YouTube_ChannelConversionPing');
class_alias(ChannelConversionPings::class, 'Google_Service_YouTube_ChannelConversionPings');
class_alias(ChannelListResponse::class, 'Google_Service_YouTube_ChannelListResponse');
class_alias(ChannelLocalization::class, 'Google_Service_YouTube_ChannelLocalization');
class_alias(ChannelProfileDetails::class, 'Google_Service_YouTube_ChannelProfileDetails');
class_alias(ChannelSection::class, 'Google_Service_YouTube_ChannelSection');
class_alias(ChannelSectionContentDetails::class, 'Google_Service_YouTube_ChannelSectionContentDetails');
class_alias(ChannelSectionListResponse::class, 'Google_Service_YouTube_ChannelSectionListResponse');
class_alias(ChannelSectionLocalization::class, 'Google_Service_YouTube_ChannelSectionLocalization');
class_alias(ChannelSectionSnippet::class, 'Google_Service_YouTube_ChannelSectionSnippet');
class_alias(ChannelSectionTargeting::class, 'Google_Service_YouTube_ChannelSectionTargeting');
class_alias(ChannelSettings::class, 'Google_Service_YouTube_ChannelSettings');
class_alias(ChannelSnippet::class, 'Google_Service_YouTube_ChannelSnippet');
class_alias(ChannelStatistics::class, 'Google_Service_YouTube_ChannelStatistics');
class_alias(ChannelStatus::class, 'Google_Service_YouTube_ChannelStatus');
class_alias(ChannelToStoreLinkDetails::class, 'Google_Service_YouTube_ChannelToStoreLinkDetails');
class_alias(ChannelTopicDetails::class, 'Google_Service_YouTube_ChannelTopicDetails');
class_alias(Comment::class, 'Google_Service_YouTube_Comment');
class_alias(CommentListResponse::class, 'Google_Service_YouTube_CommentListResponse');
class_alias(CommentSnippet::class, 'Google_Service_YouTube_CommentSnippet');
class_alias(CommentSnippetAuthorChannelId::class, 'Google_Service_YouTube_CommentSnippetAuthorChannelId');
class_alias(CommentThread::class, 'Google_Service_YouTube_CommentThread');
class_alias(CommentThreadListResponse::class, 'Google_Service_YouTube_CommentThreadListResponse');
class_alias(CommentThreadReplies::class, 'Google_Service_YouTube_CommentThreadReplies');
class_alias(CommentThreadSnippet::class, 'Google_Service_YouTube_CommentThreadSnippet');
class_alias(ContentRating::class, 'Google_Service_YouTube_ContentRating');
class_alias(Cuepoint::class, 'Google_Service_YouTube_Cuepoint');
class_alias(Entity::class, 'Google_Service_YouTube_Entity');
class_alias(GeoPoint::class, 'Google_Service_YouTube_GeoPoint');
class_alias(I18nLanguage::class, 'Google_Service_YouTube_I18nLanguage');
class_alias(I18nLanguageListResponse::class, 'Google_Service_YouTube_I18nLanguageListResponse');
class_alias(I18nLanguageSnippet::class, 'Google_Service_YouTube_I18nLanguageSnippet');
class_alias(I18nRegion::class, 'Google_Service_YouTube_I18nRegion');
class_alias(I18nRegionListResponse::class, 'Google_Service_YouTube_I18nRegionListResponse');
class_alias(I18nRegionSnippet::class, 'Google_Service_YouTube_I18nRegionSnippet');
class_alias(ImageSettings::class, 'Google_Service_YouTube_ImageSettings');
class_alias(IngestionInfo::class, 'Google_Service_YouTube_IngestionInfo');
class_alias(InvideoBranding::class, 'Google_Service_YouTube_InvideoBranding');
class_alias(InvideoPosition::class, 'Google_Service_YouTube_InvideoPosition');
class_alias(InvideoTiming::class, 'Google_Service_YouTube_InvideoTiming');
class_alias(LanguageTag::class, 'Google_Service_YouTube_LanguageTag');
class_alias(LevelDetails::class, 'Google_Service_YouTube_LevelDetails');
class_alias(LiveBroadcast::class, 'Google_Service_YouTube_LiveBroadcast');
class_alias(LiveBroadcastContentDetails::class, 'Google_Service_YouTube_LiveBroadcastContentDetails');
class_alias(LiveBroadcastListResponse::class, 'Google_Service_YouTube_LiveBroadcastListResponse');
class_alias(LiveBroadcastSnippet::class, 'Google_Service_YouTube_LiveBroadcastSnippet');
class_alias(LiveBroadcastStatistics::class, 'Google_Service_YouTube_LiveBroadcastStatistics');
class_alias(LiveBroadcastStatus::class, 'Google_Service_YouTube_LiveBroadcastStatus');
class_alias(LiveChatBan::class, 'Google_Service_YouTube_LiveChatBan');
class_alias(LiveChatBanSnippet::class, 'Google_Service_YouTube_LiveChatBanSnippet');
class_alias(LiveChatFanFundingEventDetails::class, 'Google_Service_YouTube_LiveChatFanFundingEventDetails');
class_alias(LiveChatGiftMembershipReceivedDetails::class, 'Google_Service_YouTube_LiveChatGiftMembershipReceivedDetails');
class_alias(LiveChatMemberMilestoneChatDetails::class, 'Google_Service_YouTube_LiveChatMemberMilestoneChatDetails');
class_alias(LiveChatMembershipGiftingDetails::class, 'Google_Service_YouTube_LiveChatMembershipGiftingDetails');
class_alias(LiveChatMessage::class, 'Google_Service_YouTube_LiveChatMessage');
class_alias(LiveChatMessageAuthorDetails::class, 'Google_Service_YouTube_LiveChatMessageAuthorDetails');
class_alias(LiveChatMessageDeletedDetails::class, 'Google_Service_YouTube_LiveChatMessageDeletedDetails');
class_alias(LiveChatMessageListResponse::class, 'Google_Service_YouTube_LiveChatMessageListResponse');
class_alias(LiveChatMessageRetractedDetails::class, 'Google_Service_YouTube_LiveChatMessageRetractedDetails');
class_alias(LiveChatMessageSnippet::class, 'Google_Service_YouTube_LiveChatMessageSnippet');
class_alias(LiveChatModerator::class, 'Google_Service_YouTube_LiveChatModerator');
class_alias(LiveChatModeratorListResponse::class, 'Google_Service_YouTube_LiveChatModeratorListResponse');
class_alias(LiveChatModeratorSnippet::class, 'Google_Service_YouTube_LiveChatModeratorSnippet');
class_alias(LiveChatNewSponsorDetails::class, 'Google_Service_YouTube_LiveChatNewSponsorDetails');
class_alias(LiveChatSuperChatDetails::class, 'Google_Service_YouTube_LiveChatSuperChatDetails');
class_alias(LiveChatSuperStickerDetails::class, 'Google_Service_YouTube_LiveChatSuperStickerDetails');
class_alias(LiveChatTextMessageDetails::class, 'Google_Service_YouTube_LiveChatTextMessageDetails');
class_alias(LiveChatUserBannedMessageDetails::class, 'Google_Service_YouTube_LiveChatUserBannedMessageDetails');
class_alias(LiveStream::class, 'Google_Service_YouTube_LiveStream');
class_alias(LiveStreamConfigurationIssue::class, 'Google_Service_YouTube_LiveStreamConfigurationIssue');
class_alias(LiveStreamContentDetails::class, 'Google_Service_YouTube_LiveStreamContentDetails');
class_alias(LiveStreamHealthStatus::class, 'Google_Service_YouTube_LiveStreamHealthStatus');
class_alias(LiveStreamListResponse::class, 'Google_Service_YouTube_LiveStreamListResponse');
class_alias(LiveStreamSnippet::class, 'Google_Service_YouTube_LiveStreamSnippet');
class_alias(LiveStreamStatus::class, 'Google_Service_YouTube_LiveStreamStatus');
class_alias(LocalizedProperty::class, 'Google_Service_YouTube_LocalizedProperty');
class_alias(LocalizedString::class, 'Google_Service_YouTube_LocalizedString');
class_alias(Member::class, 'Google_Service_YouTube_Member');
class_alias(MemberListResponse::class, 'Google_Service_YouTube_MemberListResponse');
class_alias(MemberSnippet::class, 'Google_Service_YouTube_MemberSnippet');
class_alias(MembershipsDetails::class, 'Google_Service_YouTube_MembershipsDetails');
class_alias(MembershipsDuration::class, 'Google_Service_YouTube_MembershipsDuration');
class_alias(MembershipsDurationAtLevel::class, 'Google_Service_YouTube_MembershipsDurationAtLevel');
class_alias(MembershipsLevel::class, 'Google_Service_YouTube_MembershipsLevel');
class_alias(MembershipsLevelListResponse::class, 'Google_Service_YouTube_MembershipsLevelListResponse');
class_alias(MembershipsLevelSnippet::class, 'Google_Service_YouTube_MembershipsLevelSnippet');
class_alias(MonitorStreamInfo::class, 'Google_Service_YouTube_MonitorStreamInfo');
class_alias(PageInfo::class, 'Google_Service_YouTube_PageInfo');
class_alias(Playlist::class, 'Google_Service_YouTube_Playlist');
class_alias(PlaylistContentDetails::class, 'Google_Service_YouTube_PlaylistContentDetails');
class_alias(PlaylistItem::class, 'Google_Service_YouTube_PlaylistItem');
class_alias(PlaylistItemContentDetails::class, 'Google_Service_YouTube_PlaylistItemContentDetails');
class_alias(PlaylistItemListResponse::class, 'Google_Service_YouTube_PlaylistItemListResponse');
class_alias(PlaylistItemSnippet::class, 'Google_Service_YouTube_PlaylistItemSnippet');
class_alias(PlaylistItemStatus::class, 'Google_Service_YouTube_PlaylistItemStatus');
class_alias(PlaylistListResponse::class, 'Google_Service_YouTube_PlaylistListResponse');
class_alias(PlaylistLocalization::class, 'Google_Service_YouTube_PlaylistLocalization');
class_alias(PlaylistPlayer::class, 'Google_Service_YouTube_PlaylistPlayer');
class_alias(PlaylistSnippet::class, 'Google_Service_YouTube_PlaylistSnippet');
class_alias(PlaylistStatus::class, 'Google_Service_YouTube_PlaylistStatus');
class_alias(PropertyValue::class, 'Google_Service_YouTube_PropertyValue');
class_alias(RelatedEntity::class, 'Google_Service_YouTube_RelatedEntity');
class_alias(ResourceId::class, 'Google_Service_YouTube_ResourceId');
class_alias(SearchListResponse::class, 'Google_Service_YouTube_SearchListResponse');
class_alias(SearchResult::class, 'Google_Service_YouTube_SearchResult');
class_alias(SearchResultSnippet::class, 'Google_Service_YouTube_SearchResultSnippet');
class_alias(Subscription::class, 'Google_Service_YouTube_Subscription');
class_alias(SubscriptionContentDetails::class, 'Google_Service_YouTube_SubscriptionContentDetails');
class_alias(SubscriptionListResponse::class, 'Google_Service_YouTube_SubscriptionListResponse');
class_alias(SubscriptionSnippet::class, 'Google_Service_YouTube_SubscriptionSnippet');
class_alias(SubscriptionSubscriberSnippet::class, 'Google_Service_YouTube_SubscriptionSubscriberSnippet');
class_alias(SuperChatEvent::class, 'Google_Service_YouTube_SuperChatEvent');
class_alias(SuperChatEventListResponse::class, 'Google_Service_YouTube_SuperChatEventListResponse');
class_alias(SuperChatEventSnippet::class, 'Google_Service_YouTube_SuperChatEventSnippet');
class_alias(SuperStickerMetadata::class, 'Google_Service_YouTube_SuperStickerMetadata');
class_alias(TestItem::class, 'Google_Service_YouTube_TestItem');
class_alias(TestItemTestItemSnippet::class, 'Google_Service_YouTube_TestItemTestItemSnippet');
class_alias(ThirdPartyLink::class, 'Google_Service_YouTube_ThirdPartyLink');
class_alias(ThirdPartyLinkListResponse::class, 'Google_Service_YouTube_ThirdPartyLinkListResponse');
class_alias(ThirdPartyLinkSnippet::class, 'Google_Service_YouTube_ThirdPartyLinkSnippet');
class_alias(ThirdPartyLinkStatus::class, 'Google_Service_YouTube_ThirdPartyLinkStatus');
class_alias(Thumbnail::class, 'Google_Service_YouTube_Thumbnail');
class_alias(ThumbnailDetails::class, 'Google_Service_YouTube_ThumbnailDetails');
class_alias(ThumbnailSetResponse::class, 'Google_Service_YouTube_ThumbnailSetResponse');
class_alias(TokenPagination::class, 'Google_Service_YouTube_TokenPagination');
class_alias(Video::class, 'Google_Service_YouTube_Video');
class_alias(VideoAbuseReport::class, 'Google_Service_YouTube_VideoAbuseReport');
class_alias(VideoAbuseReportReason::class, 'Google_Service_YouTube_VideoAbuseReportReason');
class_alias(VideoAbuseReportReasonListResponse::class, 'Google_Service_YouTube_VideoAbuseReportReasonListResponse');
class_alias(VideoAbuseReportReasonSnippet::class, 'Google_Service_YouTube_VideoAbuseReportReasonSnippet');
class_alias(VideoAbuseReportSecondaryReason::class, 'Google_Service_YouTube_VideoAbuseReportSecondaryReason');
class_alias(VideoAgeGating::class, 'Google_Service_YouTube_VideoAgeGating');
class_alias(VideoCategory::class, 'Google_Service_YouTube_VideoCategory');
class_alias(VideoCategoryListResponse::class, 'Google_Service_YouTube_VideoCategoryListResponse');
class_alias(VideoCategorySnippet::class, 'Google_Service_YouTube_VideoCategorySnippet');
class_alias(VideoContentDetails::class, 'Google_Service_YouTube_VideoContentDetails');
class_alias(VideoContentDetailsRegionRestriction::class, 'Google_Service_YouTube_VideoContentDetailsRegionRestriction');
class_alias(VideoFileDetails::class, 'Google_Service_YouTube_VideoFileDetails');
class_alias(VideoFileDetailsAudioStream::class, 'Google_Service_YouTube_VideoFileDetailsAudioStream');
class_alias(VideoFileDetailsVideoStream::class, 'Google_Service_YouTube_VideoFileDetailsVideoStream');
class_alias(VideoGetRatingResponse::class, 'Google_Service_YouTube_VideoGetRatingResponse');
class_alias(VideoListResponse::class, 'Google_Service_YouTube_VideoListResponse');
class_alias(VideoLiveStreamingDetails::class, 'Google_Service_YouTube_VideoLiveStreamingDetails');
class_alias(VideoLocalization::class, 'Google_Service_YouTube_VideoLocalization');
class_alias(VideoMonetizationDetails::class, 'Google_Service_YouTube_VideoMonetizationDetails');
class_alias(VideoPlayer::class, 'Google_Service_YouTube_VideoPlayer');
class_alias(VideoProcessingDetails::class, 'Google_Service_YouTube_VideoProcessingDetails');
class_alias(VideoProcessingDetailsProcessingProgress::class, 'Google_Service_YouTube_VideoProcessingDetailsProcessingProgress');
class_alias(VideoProjectDetails::class, 'Google_Service_YouTube_VideoProjectDetails');
class_alias(VideoRating::class, 'Google_Service_YouTube_VideoRating');
class_alias(VideoRecordingDetails::class, 'Google_Service_YouTube_VideoRecordingDetails');
class_alias(VideoSnippet::class, 'Google_Service_YouTube_VideoSnippet');
class_alias(VideoStatistics::class, 'Google_Service_YouTube_VideoStatistics');
class_alias(VideoStatus::class, 'Google_Service_YouTube_VideoStatus');
class_alias(VideoSuggestions::class, 'Google_Service_YouTube_VideoSuggestions');
class_alias(VideoSuggestionsTagSuggestion::class, 'Google_Service_YouTube_VideoSuggestionsTagSuggestion');
class_alias(VideoTopicDetails::class, 'Google_Service_YouTube_VideoTopicDetails');
class_alias(WatchSettings::class, 'Google_Service_YouTube_WatchSettings');
