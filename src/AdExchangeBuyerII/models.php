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

namespace Google\Service\AdExchangeBuyerII;

class AbsoluteDateRange extends \Google\Model
{
  /** @var Date */
  public $endDate;
  /** @var Date */
  public $startDate;
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
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

class AcceptProposalRequest extends \Google\Model
{
  /** @var string */
  public $proposalRevision;

  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
}

class AdSize extends \Google\Model
{
  /** @var string */
  public $height;
  /** @var string */
  public $sizeType;
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
  public function setSizeType($sizeType)
  {
    $this->sizeType = $sizeType;
  }
  /** @return string */
  public function getSizeType()
  {
    return $this->sizeType;
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

class AdTechnologyProviders extends \Google\Collection
{
  /** @var string[] */
  public $detectedProviderIds;
  /** @var bool */
  public $hasUnidentifiedProvider;
  protected $collection_key = 'detectedProviderIds';
  /** @param string[] */
  public function setDetectedProviderIds($detectedProviderIds)
  {
    $this->detectedProviderIds = $detectedProviderIds;
  }
  /** @return string[] */
  public function getDetectedProviderIds()
  {
    return $this->detectedProviderIds;
  }
  /** @param bool */
  public function setHasUnidentifiedProvider($hasUnidentifiedProvider)
  {
    $this->hasUnidentifiedProvider = $hasUnidentifiedProvider;
  }
  /** @return bool */
  public function getHasUnidentifiedProvider()
  {
    return $this->hasUnidentifiedProvider;
  }
}

class AddDealAssociationRequest extends \Google\Model
{
  /** @var CreativeDealAssociation */
  public $association;
  protected $associationType = CreativeDealAssociation::class;
  protected $associationDataType = '';
  /** @param CreativeDealAssociation */
  public function setAssociation(CreativeDealAssociation $association)
  {
    $this->association = $association;
  }
  /** @return CreativeDealAssociation */
  public function getAssociation()
  {
    return $this->association;
  }
}

class AddNoteRequest extends \Google\Model
{
  /** @var Note */
  public $note;
  protected $noteType = Note::class;
  protected $noteDataType = '';
  /** @param Note */
  public function setNote(Note $note)
  {
    $this->note = $note;
  }
  /** @return Note */
  public function getNote()
  {
    return $this->note;
  }
}

class Adexchangebuyer2Empty extends \Google\Model
{
}

class AppContext extends \Google\Collection
{
  /** @var string[] */
  public $appTypes;
  protected $collection_key = 'appTypes';
  /** @param string[] */
  public function setAppTypes($appTypes)
  {
    $this->appTypes = $appTypes;
  }
  /** @return string[] */
  public function getAppTypes()
  {
    return $this->appTypes;
  }
}

class AuctionContext extends \Google\Collection
{
  /** @var string[] */
  public $auctionTypes;
  protected $collection_key = 'auctionTypes';
  /** @param string[] */
  public function setAuctionTypes($auctionTypes)
  {
    $this->auctionTypes = $auctionTypes;
  }
  /** @return string[] */
  public function getAuctionTypes()
  {
    return $this->auctionTypes;
  }
}

class BidMetricsRow extends \Google\Model
{
  /** @var MetricValue */
  public $bids;
  /** @var MetricValue */
  public $bidsInAuction;
  /** @var MetricValue */
  public $billedImpressions;
  /** @var MetricValue */
  public $impressionsWon;
  /** @var MetricValue */
  public $measurableImpressions;
  /** @var MetricValue */
  public $reachedQueries;
  /** @var RowDimensions */
  public $rowDimensions;
  /** @var MetricValue */
  public $viewableImpressions;
  protected $bidsType = MetricValue::class;
  protected $bidsDataType = '';
  protected $bidsInAuctionType = MetricValue::class;
  protected $bidsInAuctionDataType = '';
  protected $billedImpressionsType = MetricValue::class;
  protected $billedImpressionsDataType = '';
  protected $impressionsWonType = MetricValue::class;
  protected $impressionsWonDataType = '';
  protected $measurableImpressionsType = MetricValue::class;
  protected $measurableImpressionsDataType = '';
  protected $reachedQueriesType = MetricValue::class;
  protected $reachedQueriesDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  protected $viewableImpressionsType = MetricValue::class;
  protected $viewableImpressionsDataType = '';
  /** @param MetricValue */
  public function setBids(MetricValue $bids)
  {
    $this->bids = $bids;
  }
  /** @return MetricValue */
  public function getBids()
  {
    return $this->bids;
  }
  /** @param MetricValue */
  public function setBidsInAuction(MetricValue $bidsInAuction)
  {
    $this->bidsInAuction = $bidsInAuction;
  }
  /** @return MetricValue */
  public function getBidsInAuction()
  {
    return $this->bidsInAuction;
  }
  /** @param MetricValue */
  public function setBilledImpressions(MetricValue $billedImpressions)
  {
    $this->billedImpressions = $billedImpressions;
  }
  /** @return MetricValue */
  public function getBilledImpressions()
  {
    return $this->billedImpressions;
  }
  /** @param MetricValue */
  public function setImpressionsWon(MetricValue $impressionsWon)
  {
    $this->impressionsWon = $impressionsWon;
  }
  /** @return MetricValue */
  public function getImpressionsWon()
  {
    return $this->impressionsWon;
  }
  /** @param MetricValue */
  public function setMeasurableImpressions(MetricValue $measurableImpressions)
  {
    $this->measurableImpressions = $measurableImpressions;
  }
  /** @return MetricValue */
  public function getMeasurableImpressions()
  {
    return $this->measurableImpressions;
  }
  /** @param MetricValue */
  public function setReachedQueries(MetricValue $reachedQueries)
  {
    $this->reachedQueries = $reachedQueries;
  }
  /** @return MetricValue */
  public function getReachedQueries()
  {
    return $this->reachedQueries;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
  /** @param MetricValue */
  public function setViewableImpressions(MetricValue $viewableImpressions)
  {
    $this->viewableImpressions = $viewableImpressions;
  }
  /** @return MetricValue */
  public function getViewableImpressions()
  {
    return $this->viewableImpressions;
  }
}

class BidResponseWithoutBidsStatusRow extends \Google\Model
{
  /** @var MetricValue */
  public $impressionCount;
  /** @var RowDimensions */
  public $rowDimensions;
  /** @var string */
  public $status;
  protected $impressionCountType = MetricValue::class;
  protected $impressionCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param MetricValue */
  public function setImpressionCount(MetricValue $impressionCount)
  {
    $this->impressionCount = $impressionCount;
  }
  /** @return MetricValue */
  public function getImpressionCount()
  {
    return $this->impressionCount;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
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

class Buyer extends \Google\Model
{
  /** @var string */
  public $accountId;

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
}

class CalloutStatusRow extends \Google\Model
{
  /** @var int */
  public $calloutStatusId;
  /** @var MetricValue */
  public $impressionCount;
  /** @var RowDimensions */
  public $rowDimensions;
  protected $impressionCountType = MetricValue::class;
  protected $impressionCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param int */
  public function setCalloutStatusId($calloutStatusId)
  {
    $this->calloutStatusId = $calloutStatusId;
  }
  /** @return int */
  public function getCalloutStatusId()
  {
    return $this->calloutStatusId;
  }
  /** @param MetricValue */
  public function setImpressionCount(MetricValue $impressionCount)
  {
    $this->impressionCount = $impressionCount;
  }
  /** @return MetricValue */
  public function getImpressionCount()
  {
    return $this->impressionCount;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}

class CancelNegotiationRequest extends \Google\Model
{
}

class Client extends \Google\Model
{
  /** @var string */
  public $clientAccountId;
  /** @var string */
  public $clientName;
  /** @var string */
  public $entityId;
  /** @var string */
  public $entityName;
  /** @var string */
  public $entityType;
  /** @var string */
  public $partnerClientId;
  /** @var string */
  public $role;
  /** @var string */
  public $status;
  /** @var bool */
  public $visibleToSeller;

  /** @param string */
  public function setClientAccountId($clientAccountId)
  {
    $this->clientAccountId = $clientAccountId;
  }
  /** @return string */
  public function getClientAccountId()
  {
    return $this->clientAccountId;
  }
  /** @param string */
  public function setClientName($clientName)
  {
    $this->clientName = $clientName;
  }
  /** @return string */
  public function getClientName()
  {
    return $this->clientName;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param string */
  public function setEntityName($entityName)
  {
    $this->entityName = $entityName;
  }
  /** @return string */
  public function getEntityName()
  {
    return $this->entityName;
  }
  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /** @param string */
  public function setPartnerClientId($partnerClientId)
  {
    $this->partnerClientId = $partnerClientId;
  }
  /** @return string */
  public function getPartnerClientId()
  {
    return $this->partnerClientId;
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
  /** @param bool */
  public function setVisibleToSeller($visibleToSeller)
  {
    $this->visibleToSeller = $visibleToSeller;
  }
  /** @return bool */
  public function getVisibleToSeller()
  {
    return $this->visibleToSeller;
  }
}

class ClientUser extends \Google\Model
{
  /** @var string */
  public $clientAccountId;
  /** @var string */
  public $email;
  /** @var string */
  public $status;
  /** @var string */
  public $userId;

  /** @param string */
  public function setClientAccountId($clientAccountId)
  {
    $this->clientAccountId = $clientAccountId;
  }
  /** @return string */
  public function getClientAccountId()
  {
    return $this->clientAccountId;
  }
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

class ClientUserInvitation extends \Google\Model
{
  /** @var string */
  public $clientAccountId;
  /** @var string */
  public $email;
  /** @var string */
  public $invitationId;

  /** @param string */
  public function setClientAccountId($clientAccountId)
  {
    $this->clientAccountId = $clientAccountId;
  }
  /** @return string */
  public function getClientAccountId()
  {
    return $this->clientAccountId;
  }
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
  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }
  /** @return string */
  public function getInvitationId()
  {
    return $this->invitationId;
  }
}

class CompleteSetupRequest extends \Google\Model
{
}

class ContactInformation extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $name;

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

class Correction extends \Google\Collection
{
  /** @var ServingContext[] */
  public $contexts;
  /** @var string[] */
  public $details;
  /** @var string */
  public $type;
  protected $collection_key = 'details';
  protected $contextsType = ServingContext::class;
  protected $contextsDataType = 'array';
  /** @param ServingContext[] */
  public function setContexts($contexts)
  {
    $this->contexts = $contexts;
  }
  /** @return ServingContext[] */
  public function getContexts()
  {
    return $this->contexts;
  }
  /** @param string[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string[] */
  public function getDetails()
  {
    return $this->details;
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

class Creative extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $adChoicesDestinationUrl;
  /** @var AdTechnologyProviders */
  public $adTechnologyProviders;
  /** @var string */
  public $advertiserName;
  /** @var string */
  public $agencyId;
  /** @var string */
  public $apiUpdateTime;
  /** @var string[] */
  public $attributes;
  /** @var string[] */
  public $clickThroughUrls;
  /** @var Correction[] */
  public $corrections;
  /** @var string */
  public $creativeId;
  /** @var string */
  public $dealsStatus;
  /** @var string[] */
  public $declaredClickThroughUrls;
  /** @var string[] */
  public $detectedAdvertiserIds;
  /** @var string[] */
  public $detectedDomains;
  /** @var string[] */
  public $detectedLanguages;
  /** @var int[] */
  public $detectedProductCategories;
  /** @var int[] */
  public $detectedSensitiveCategories;
  /** @var HtmlContent */
  public $html;
  /** @var string[] */
  public $impressionTrackingUrls;
  /** @var NativeContent */
  public $native;
  /** @var string */
  public $openAuctionStatus;
  /** @var string[] */
  public $restrictedCategories;
  /** @var ServingRestriction[] */
  public $servingRestrictions;
  /** @var int[] */
  public $vendorIds;
  /** @var int */
  public $version;
  /** @var VideoContent */
  public $video;
  protected $collection_key = 'vendorIds';
  protected $adTechnologyProvidersType = AdTechnologyProviders::class;
  protected $adTechnologyProvidersDataType = '';
  protected $correctionsType = Correction::class;
  protected $correctionsDataType = 'array';
  protected $htmlType = HtmlContent::class;
  protected $htmlDataType = '';
  protected $nativeType = NativeContent::class;
  protected $nativeDataType = '';
  protected $servingRestrictionsType = ServingRestriction::class;
  protected $servingRestrictionsDataType = 'array';
  protected $videoType = VideoContent::class;
  protected $videoDataType = '';
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
  public function setAdChoicesDestinationUrl($adChoicesDestinationUrl)
  {
    $this->adChoicesDestinationUrl = $adChoicesDestinationUrl;
  }
  /** @return string */
  public function getAdChoicesDestinationUrl()
  {
    return $this->adChoicesDestinationUrl;
  }
  /** @param AdTechnologyProviders */
  public function setAdTechnologyProviders(AdTechnologyProviders $adTechnologyProviders)
  {
    $this->adTechnologyProviders = $adTechnologyProviders;
  }
  /** @return AdTechnologyProviders */
  public function getAdTechnologyProviders()
  {
    return $this->adTechnologyProviders;
  }
  /** @param string */
  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  /** @return string */
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  /** @param string */
  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }
  /** @return string */
  public function getAgencyId()
  {
    return $this->agencyId;
  }
  /** @param string */
  public function setApiUpdateTime($apiUpdateTime)
  {
    $this->apiUpdateTime = $apiUpdateTime;
  }
  /** @return string */
  public function getApiUpdateTime()
  {
    return $this->apiUpdateTime;
  }
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
  /** @param string[] */
  public function setClickThroughUrls($clickThroughUrls)
  {
    $this->clickThroughUrls = $clickThroughUrls;
  }
  /** @return string[] */
  public function getClickThroughUrls()
  {
    return $this->clickThroughUrls;
  }
  /** @param Correction[] */
  public function setCorrections($corrections)
  {
    $this->corrections = $corrections;
  }
  /** @return Correction[] */
  public function getCorrections()
  {
    return $this->corrections;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param string */
  public function setDealsStatus($dealsStatus)
  {
    $this->dealsStatus = $dealsStatus;
  }
  /** @return string */
  public function getDealsStatus()
  {
    return $this->dealsStatus;
  }
  /** @param string[] */
  public function setDeclaredClickThroughUrls($declaredClickThroughUrls)
  {
    $this->declaredClickThroughUrls = $declaredClickThroughUrls;
  }
  /** @return string[] */
  public function getDeclaredClickThroughUrls()
  {
    return $this->declaredClickThroughUrls;
  }
  /** @param string[] */
  public function setDetectedAdvertiserIds($detectedAdvertiserIds)
  {
    $this->detectedAdvertiserIds = $detectedAdvertiserIds;
  }
  /** @return string[] */
  public function getDetectedAdvertiserIds()
  {
    return $this->detectedAdvertiserIds;
  }
  /** @param string[] */
  public function setDetectedDomains($detectedDomains)
  {
    $this->detectedDomains = $detectedDomains;
  }
  /** @return string[] */
  public function getDetectedDomains()
  {
    return $this->detectedDomains;
  }
  /** @param string[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return string[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param int[] */
  public function setDetectedProductCategories($detectedProductCategories)
  {
    $this->detectedProductCategories = $detectedProductCategories;
  }
  /** @return int[] */
  public function getDetectedProductCategories()
  {
    return $this->detectedProductCategories;
  }
  /** @param int[] */
  public function setDetectedSensitiveCategories($detectedSensitiveCategories)
  {
    $this->detectedSensitiveCategories = $detectedSensitiveCategories;
  }
  /** @return int[] */
  public function getDetectedSensitiveCategories()
  {
    return $this->detectedSensitiveCategories;
  }
  /** @param HtmlContent */
  public function setHtml(HtmlContent $html)
  {
    $this->html = $html;
  }
  /** @return HtmlContent */
  public function getHtml()
  {
    return $this->html;
  }
  /** @param string[] */
  public function setImpressionTrackingUrls($impressionTrackingUrls)
  {
    $this->impressionTrackingUrls = $impressionTrackingUrls;
  }
  /** @return string[] */
  public function getImpressionTrackingUrls()
  {
    return $this->impressionTrackingUrls;
  }
  /** @param NativeContent */
  public function setNative(NativeContent $native)
  {
    $this->native = $native;
  }
  /** @return NativeContent */
  public function getNative()
  {
    return $this->native;
  }
  /** @param string */
  public function setOpenAuctionStatus($openAuctionStatus)
  {
    $this->openAuctionStatus = $openAuctionStatus;
  }
  /** @return string */
  public function getOpenAuctionStatus()
  {
    return $this->openAuctionStatus;
  }
  /** @param string[] */
  public function setRestrictedCategories($restrictedCategories)
  {
    $this->restrictedCategories = $restrictedCategories;
  }
  /** @return string[] */
  public function getRestrictedCategories()
  {
    return $this->restrictedCategories;
  }
  /** @param ServingRestriction[] */
  public function setServingRestrictions($servingRestrictions)
  {
    $this->servingRestrictions = $servingRestrictions;
  }
  /** @return ServingRestriction[] */
  public function getServingRestrictions()
  {
    return $this->servingRestrictions;
  }
  /** @param int[] */
  public function setVendorIds($vendorIds)
  {
    $this->vendorIds = $vendorIds;
  }
  /** @return int[] */
  public function getVendorIds()
  {
    return $this->vendorIds;
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
  /** @param VideoContent */
  public function setVideo(VideoContent $video)
  {
    $this->video = $video;
  }
  /** @return VideoContent */
  public function getVideo()
  {
    return $this->video;
  }
}

class CreativeDealAssociation extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $creativeId;
  /** @var string */
  public $dealsId;

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
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param string */
  public function setDealsId($dealsId)
  {
    $this->dealsId = $dealsId;
  }
  /** @return string */
  public function getDealsId()
  {
    return $this->dealsId;
  }
}

class CreativeRestrictions extends \Google\Collection
{
  /** @var string */
  public $creativeFormat;
  /** @var CreativeSpecification[] */
  public $creativeSpecifications;
  /** @var string */
  public $skippableAdType;
  protected $collection_key = 'creativeSpecifications';
  protected $creativeSpecificationsType = CreativeSpecification::class;
  protected $creativeSpecificationsDataType = 'array';
  /** @param string */
  public function setCreativeFormat($creativeFormat)
  {
    $this->creativeFormat = $creativeFormat;
  }
  /** @return string */
  public function getCreativeFormat()
  {
    return $this->creativeFormat;
  }
  /** @param CreativeSpecification[] */
  public function setCreativeSpecifications($creativeSpecifications)
  {
    $this->creativeSpecifications = $creativeSpecifications;
  }
  /** @return CreativeSpecification[] */
  public function getCreativeSpecifications()
  {
    return $this->creativeSpecifications;
  }
  /** @param string */
  public function setSkippableAdType($skippableAdType)
  {
    $this->skippableAdType = $skippableAdType;
  }
  /** @return string */
  public function getSkippableAdType()
  {
    return $this->skippableAdType;
  }
}

class CreativeSize extends \Google\Collection
{
  /** @var string[] */
  public $allowedFormats;
  /** @var Size[] */
  public $companionSizes;
  /** @var string */
  public $creativeSizeType;
  /** @var string */
  public $nativeTemplate;
  /** @var Size */
  public $size;
  /** @var string */
  public $skippableAdType;
  protected $collection_key = 'companionSizes';
  protected $companionSizesType = Size::class;
  protected $companionSizesDataType = 'array';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  /** @param string[] */
  public function setAllowedFormats($allowedFormats)
  {
    $this->allowedFormats = $allowedFormats;
  }
  /** @return string[] */
  public function getAllowedFormats()
  {
    return $this->allowedFormats;
  }
  /** @param Size[] */
  public function setCompanionSizes($companionSizes)
  {
    $this->companionSizes = $companionSizes;
  }
  /** @return Size[] */
  public function getCompanionSizes()
  {
    return $this->companionSizes;
  }
  /** @param string */
  public function setCreativeSizeType($creativeSizeType)
  {
    $this->creativeSizeType = $creativeSizeType;
  }
  /** @return string */
  public function getCreativeSizeType()
  {
    return $this->creativeSizeType;
  }
  /** @param string */
  public function setNativeTemplate($nativeTemplate)
  {
    $this->nativeTemplate = $nativeTemplate;
  }
  /** @return string */
  public function getNativeTemplate()
  {
    return $this->nativeTemplate;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setSkippableAdType($skippableAdType)
  {
    $this->skippableAdType = $skippableAdType;
  }
  /** @return string */
  public function getSkippableAdType()
  {
    return $this->skippableAdType;
  }
}

class CreativeSpecification extends \Google\Collection
{
  /** @var AdSize[] */
  public $creativeCompanionSizes;
  /** @var AdSize */
  public $creativeSize;
  protected $collection_key = 'creativeCompanionSizes';
  protected $creativeCompanionSizesType = AdSize::class;
  protected $creativeCompanionSizesDataType = 'array';
  protected $creativeSizeType = AdSize::class;
  protected $creativeSizeDataType = '';
  /** @param AdSize[] */
  public function setCreativeCompanionSizes($creativeCompanionSizes)
  {
    $this->creativeCompanionSizes = $creativeCompanionSizes;
  }
  /** @return AdSize[] */
  public function getCreativeCompanionSizes()
  {
    return $this->creativeCompanionSizes;
  }
  /** @param AdSize */
  public function setCreativeSize(AdSize $creativeSize)
  {
    $this->creativeSize = $creativeSize;
  }
  /** @return AdSize */
  public function getCreativeSize()
  {
    return $this->creativeSize;
  }
}

class CreativeStatusRow extends \Google\Model
{
  /** @var MetricValue */
  public $bidCount;
  /** @var int */
  public $creativeStatusId;
  /** @var RowDimensions */
  public $rowDimensions;
  protected $bidCountType = MetricValue::class;
  protected $bidCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param MetricValue */
  public function setBidCount(MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  /** @return MetricValue */
  public function getBidCount()
  {
    return $this->bidCount;
  }
  /** @param int */
  public function setCreativeStatusId($creativeStatusId)
  {
    $this->creativeStatusId = $creativeStatusId;
  }
  /** @return int */
  public function getCreativeStatusId()
  {
    return $this->creativeStatusId;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}

class CriteriaTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedCriteriaIds;
  /** @var string[] */
  public $targetedCriteriaIds;
  protected $collection_key = 'targetedCriteriaIds';
  /** @param string[] */
  public function setExcludedCriteriaIds($excludedCriteriaIds)
  {
    $this->excludedCriteriaIds = $excludedCriteriaIds;
  }
  /** @return string[] */
  public function getExcludedCriteriaIds()
  {
    return $this->excludedCriteriaIds;
  }
  /** @param string[] */
  public function setTargetedCriteriaIds($targetedCriteriaIds)
  {
    $this->targetedCriteriaIds = $targetedCriteriaIds;
  }
  /** @return string[] */
  public function getTargetedCriteriaIds()
  {
    return $this->targetedCriteriaIds;
  }
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

class DayPart extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;
  /** @var TimeOfDay */
  public $endTime;
  /** @var TimeOfDay */
  public $startTime;
  protected $endTimeType = TimeOfDay::class;
  protected $endTimeDataType = '';
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /** @param TimeOfDay */
  public function setEndTime(TimeOfDay $endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return TimeOfDay */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class DayPartTargeting extends \Google\Collection
{
  /** @var DayPart[] */
  public $dayParts;
  /** @var string */
  public $timeZoneType;
  protected $collection_key = 'dayParts';
  protected $dayPartsType = DayPart::class;
  protected $dayPartsDataType = 'array';
  /** @param DayPart[] */
  public function setDayParts($dayParts)
  {
    $this->dayParts = $dayParts;
  }
  /** @return DayPart[] */
  public function getDayParts()
  {
    return $this->dayParts;
  }
  /** @param string */
  public function setTimeZoneType($timeZoneType)
  {
    $this->timeZoneType = $timeZoneType;
  }
  /** @return string */
  public function getTimeZoneType()
  {
    return $this->timeZoneType;
  }
}

class Deal extends \Google\Collection
{
  /** @var string */
  public $availableEndTime;
  /** @var string */
  public $availableStartTime;
  /** @var PrivateData */
  public $buyerPrivateData;
  /** @var string */
  public $createProductId;
  /** @var string */
  public $createProductRevision;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creativePreApprovalPolicy;
  /** @var CreativeRestrictions */
  public $creativeRestrictions;
  /** @var string */
  public $creativeSafeFrameCompatibility;
  /** @var string */
  public $dealId;
  /** @var DealServingMetadata */
  public $dealServingMetadata;
  /** @var DealTerms */
  public $dealTerms;
  /** @var DeliveryControl */
  public $deliveryControl;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $externalDealId;
  /** @var bool */
  public $isSetupComplete;
  /** @var string */
  public $programmaticCreativeSource;
  /** @var string */
  public $proposalId;
  /** @var ContactInformation[] */
  public $sellerContacts;
  /** @var string */
  public $syndicationProduct;
  /** @var MarketplaceTargeting */
  public $targeting;
  /** @var TargetingCriteria[] */
  public $targetingCriterion;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $webPropertyCode;
  protected $collection_key = 'targetingCriterion';
  protected $buyerPrivateDataType = PrivateData::class;
  protected $buyerPrivateDataDataType = '';
  protected $creativeRestrictionsType = CreativeRestrictions::class;
  protected $creativeRestrictionsDataType = '';
  protected $dealServingMetadataType = DealServingMetadata::class;
  protected $dealServingMetadataDataType = '';
  protected $dealTermsType = DealTerms::class;
  protected $dealTermsDataType = '';
  protected $deliveryControlType = DeliveryControl::class;
  protected $deliveryControlDataType = '';
  protected $sellerContactsType = ContactInformation::class;
  protected $sellerContactsDataType = 'array';
  protected $targetingType = MarketplaceTargeting::class;
  protected $targetingDataType = '';
  protected $targetingCriterionType = TargetingCriteria::class;
  protected $targetingCriterionDataType = 'array';
  /** @param string */
  public function setAvailableEndTime($availableEndTime)
  {
    $this->availableEndTime = $availableEndTime;
  }
  /** @return string */
  public function getAvailableEndTime()
  {
    return $this->availableEndTime;
  }
  /** @param string */
  public function setAvailableStartTime($availableStartTime)
  {
    $this->availableStartTime = $availableStartTime;
  }
  /** @return string */
  public function getAvailableStartTime()
  {
    return $this->availableStartTime;
  }
  /** @param PrivateData */
  public function setBuyerPrivateData(PrivateData $buyerPrivateData)
  {
    $this->buyerPrivateData = $buyerPrivateData;
  }
  /** @return PrivateData */
  public function getBuyerPrivateData()
  {
    return $this->buyerPrivateData;
  }
  /** @param string */
  public function setCreateProductId($createProductId)
  {
    $this->createProductId = $createProductId;
  }
  /** @return string */
  public function getCreateProductId()
  {
    return $this->createProductId;
  }
  /** @param string */
  public function setCreateProductRevision($createProductRevision)
  {
    $this->createProductRevision = $createProductRevision;
  }
  /** @return string */
  public function getCreateProductRevision()
  {
    return $this->createProductRevision;
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
  public function setCreativePreApprovalPolicy($creativePreApprovalPolicy)
  {
    $this->creativePreApprovalPolicy = $creativePreApprovalPolicy;
  }
  /** @return string */
  public function getCreativePreApprovalPolicy()
  {
    return $this->creativePreApprovalPolicy;
  }
  /** @param CreativeRestrictions */
  public function setCreativeRestrictions(CreativeRestrictions $creativeRestrictions)
  {
    $this->creativeRestrictions = $creativeRestrictions;
  }
  /** @return CreativeRestrictions */
  public function getCreativeRestrictions()
  {
    return $this->creativeRestrictions;
  }
  /** @param string */
  public function setCreativeSafeFrameCompatibility($creativeSafeFrameCompatibility)
  {
    $this->creativeSafeFrameCompatibility = $creativeSafeFrameCompatibility;
  }
  /** @return string */
  public function getCreativeSafeFrameCompatibility()
  {
    return $this->creativeSafeFrameCompatibility;
  }
  /** @param string */
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  /** @return string */
  public function getDealId()
  {
    return $this->dealId;
  }
  /** @param DealServingMetadata */
  public function setDealServingMetadata(DealServingMetadata $dealServingMetadata)
  {
    $this->dealServingMetadata = $dealServingMetadata;
  }
  /** @return DealServingMetadata */
  public function getDealServingMetadata()
  {
    return $this->dealServingMetadata;
  }
  /** @param DealTerms */
  public function setDealTerms(DealTerms $dealTerms)
  {
    $this->dealTerms = $dealTerms;
  }
  /** @return DealTerms */
  public function getDealTerms()
  {
    return $this->dealTerms;
  }
  /** @param DeliveryControl */
  public function setDeliveryControl(DeliveryControl $deliveryControl)
  {
    $this->deliveryControl = $deliveryControl;
  }
  /** @return DeliveryControl */
  public function getDeliveryControl()
  {
    return $this->deliveryControl;
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
  public function setExternalDealId($externalDealId)
  {
    $this->externalDealId = $externalDealId;
  }
  /** @return string */
  public function getExternalDealId()
  {
    return $this->externalDealId;
  }
  /** @param bool */
  public function setIsSetupComplete($isSetupComplete)
  {
    $this->isSetupComplete = $isSetupComplete;
  }
  /** @return bool */
  public function getIsSetupComplete()
  {
    return $this->isSetupComplete;
  }
  /** @param string */
  public function setProgrammaticCreativeSource($programmaticCreativeSource)
  {
    $this->programmaticCreativeSource = $programmaticCreativeSource;
  }
  /** @return string */
  public function getProgrammaticCreativeSource()
  {
    return $this->programmaticCreativeSource;
  }
  /** @param string */
  public function setProposalId($proposalId)
  {
    $this->proposalId = $proposalId;
  }
  /** @return string */
  public function getProposalId()
  {
    return $this->proposalId;
  }
  /** @param ContactInformation[] */
  public function setSellerContacts($sellerContacts)
  {
    $this->sellerContacts = $sellerContacts;
  }
  /** @return ContactInformation[] */
  public function getSellerContacts()
  {
    return $this->sellerContacts;
  }
  /** @param string */
  public function setSyndicationProduct($syndicationProduct)
  {
    $this->syndicationProduct = $syndicationProduct;
  }
  /** @return string */
  public function getSyndicationProduct()
  {
    return $this->syndicationProduct;
  }
  /** @param MarketplaceTargeting */
  public function setTargeting(MarketplaceTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /** @return MarketplaceTargeting */
  public function getTargeting()
  {
    return $this->targeting;
  }
  /** @param TargetingCriteria[] */
  public function setTargetingCriterion($targetingCriterion)
  {
    $this->targetingCriterion = $targetingCriterion;
  }
  /** @return TargetingCriteria[] */
  public function getTargetingCriterion()
  {
    return $this->targetingCriterion;
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
  public function setWebPropertyCode($webPropertyCode)
  {
    $this->webPropertyCode = $webPropertyCode;
  }
  /** @return string */
  public function getWebPropertyCode()
  {
    return $this->webPropertyCode;
  }
}

class DealPauseStatus extends \Google\Model
{
  /** @var string */
  public $buyerPauseReason;
  /** @var string */
  public $firstPausedBy;
  /** @var bool */
  public $hasBuyerPaused;
  /** @var bool */
  public $hasSellerPaused;
  /** @var string */
  public $sellerPauseReason;

  /** @param string */
  public function setBuyerPauseReason($buyerPauseReason)
  {
    $this->buyerPauseReason = $buyerPauseReason;
  }
  /** @return string */
  public function getBuyerPauseReason()
  {
    return $this->buyerPauseReason;
  }
  /** @param string */
  public function setFirstPausedBy($firstPausedBy)
  {
    $this->firstPausedBy = $firstPausedBy;
  }
  /** @return string */
  public function getFirstPausedBy()
  {
    return $this->firstPausedBy;
  }
  /** @param bool */
  public function setHasBuyerPaused($hasBuyerPaused)
  {
    $this->hasBuyerPaused = $hasBuyerPaused;
  }
  /** @return bool */
  public function getHasBuyerPaused()
  {
    return $this->hasBuyerPaused;
  }
  /** @param bool */
  public function setHasSellerPaused($hasSellerPaused)
  {
    $this->hasSellerPaused = $hasSellerPaused;
  }
  /** @return bool */
  public function getHasSellerPaused()
  {
    return $this->hasSellerPaused;
  }
  /** @param string */
  public function setSellerPauseReason($sellerPauseReason)
  {
    $this->sellerPauseReason = $sellerPauseReason;
  }
  /** @return string */
  public function getSellerPauseReason()
  {
    return $this->sellerPauseReason;
  }
}

class DealServingMetadata extends \Google\Model
{
  /** @var DealPauseStatus */
  public $dealPauseStatus;
  protected $dealPauseStatusType = DealPauseStatus::class;
  protected $dealPauseStatusDataType = '';
  /** @param DealPauseStatus */
  public function setDealPauseStatus(DealPauseStatus $dealPauseStatus)
  {
    $this->dealPauseStatus = $dealPauseStatus;
  }
  /** @return DealPauseStatus */
  public function getDealPauseStatus()
  {
    return $this->dealPauseStatus;
  }
}

class DealTerms extends \Google\Model
{
  /** @var string */
  public $brandingType;
  /** @var string */
  public $description;
  /** @var Price */
  public $estimatedGrossSpend;
  /** @var string */
  public $estimatedImpressionsPerDay;
  /** @var GuaranteedFixedPriceTerms */
  public $guaranteedFixedPriceTerms;
  /** @var NonGuaranteedAuctionTerms */
  public $nonGuaranteedAuctionTerms;
  /** @var NonGuaranteedFixedPriceTerms */
  public $nonGuaranteedFixedPriceTerms;
  /** @var string */
  public $sellerTimeZone;
  protected $estimatedGrossSpendType = Price::class;
  protected $estimatedGrossSpendDataType = '';
  protected $guaranteedFixedPriceTermsType = GuaranteedFixedPriceTerms::class;
  protected $guaranteedFixedPriceTermsDataType = '';
  protected $nonGuaranteedAuctionTermsType = NonGuaranteedAuctionTerms::class;
  protected $nonGuaranteedAuctionTermsDataType = '';
  protected $nonGuaranteedFixedPriceTermsType = NonGuaranteedFixedPriceTerms::class;
  protected $nonGuaranteedFixedPriceTermsDataType = '';
  /** @param string */
  public function setBrandingType($brandingType)
  {
    $this->brandingType = $brandingType;
  }
  /** @return string */
  public function getBrandingType()
  {
    return $this->brandingType;
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
  /** @param Price */
  public function setEstimatedGrossSpend(Price $estimatedGrossSpend)
  {
    $this->estimatedGrossSpend = $estimatedGrossSpend;
  }
  /** @return Price */
  public function getEstimatedGrossSpend()
  {
    return $this->estimatedGrossSpend;
  }
  /** @param string */
  public function setEstimatedImpressionsPerDay($estimatedImpressionsPerDay)
  {
    $this->estimatedImpressionsPerDay = $estimatedImpressionsPerDay;
  }
  /** @return string */
  public function getEstimatedImpressionsPerDay()
  {
    return $this->estimatedImpressionsPerDay;
  }
  /** @param GuaranteedFixedPriceTerms */
  public function setGuaranteedFixedPriceTerms(GuaranteedFixedPriceTerms $guaranteedFixedPriceTerms)
  {
    $this->guaranteedFixedPriceTerms = $guaranteedFixedPriceTerms;
  }
  /** @return GuaranteedFixedPriceTerms */
  public function getGuaranteedFixedPriceTerms()
  {
    return $this->guaranteedFixedPriceTerms;
  }
  /** @param NonGuaranteedAuctionTerms */
  public function setNonGuaranteedAuctionTerms(NonGuaranteedAuctionTerms $nonGuaranteedAuctionTerms)
  {
    $this->nonGuaranteedAuctionTerms = $nonGuaranteedAuctionTerms;
  }
  /** @return NonGuaranteedAuctionTerms */
  public function getNonGuaranteedAuctionTerms()
  {
    return $this->nonGuaranteedAuctionTerms;
  }
  /** @param NonGuaranteedFixedPriceTerms */
  public function setNonGuaranteedFixedPriceTerms(NonGuaranteedFixedPriceTerms $nonGuaranteedFixedPriceTerms)
  {
    $this->nonGuaranteedFixedPriceTerms = $nonGuaranteedFixedPriceTerms;
  }
  /** @return NonGuaranteedFixedPriceTerms */
  public function getNonGuaranteedFixedPriceTerms()
  {
    return $this->nonGuaranteedFixedPriceTerms;
  }
  /** @param string */
  public function setSellerTimeZone($sellerTimeZone)
  {
    $this->sellerTimeZone = $sellerTimeZone;
  }
  /** @return string */
  public function getSellerTimeZone()
  {
    return $this->sellerTimeZone;
  }
}

class DeliveryControl extends \Google\Collection
{
  /** @var string */
  public $creativeBlockingLevel;
  /** @var string */
  public $deliveryRateType;
  /** @var FrequencyCap[] */
  public $frequencyCaps;
  protected $collection_key = 'frequencyCaps';
  protected $frequencyCapsType = FrequencyCap::class;
  protected $frequencyCapsDataType = 'array';
  /** @param string */
  public function setCreativeBlockingLevel($creativeBlockingLevel)
  {
    $this->creativeBlockingLevel = $creativeBlockingLevel;
  }
  /** @return string */
  public function getCreativeBlockingLevel()
  {
    return $this->creativeBlockingLevel;
  }
  /** @param string */
  public function setDeliveryRateType($deliveryRateType)
  {
    $this->deliveryRateType = $deliveryRateType;
  }
  /** @return string */
  public function getDeliveryRateType()
  {
    return $this->deliveryRateType;
  }
  /** @param FrequencyCap[] */
  public function setFrequencyCaps($frequencyCaps)
  {
    $this->frequencyCaps = $frequencyCaps;
  }
  /** @return FrequencyCap[] */
  public function getFrequencyCaps()
  {
    return $this->frequencyCaps;
  }
}

class Disapproval extends \Google\Collection
{
  /** @var string[] */
  public $details;
  /** @var string */
  public $reason;
  protected $collection_key = 'details';
  /** @param string[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string[] */
  public function getDetails()
  {
    return $this->details;
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
}

class FilterSet extends \Google\Collection
{
  /** @var AbsoluteDateRange */
  public $absoluteDateRange;
  /** @var string[] */
  public $breakdownDimensions;
  /** @var string */
  public $creativeId;
  /** @var string */
  public $dealId;
  /** @var string */
  public $environment;
  /** @var string */
  public $format;
  /** @var string[] */
  public $formats;
  /** @var string */
  public $name;
  /** @var string[] */
  public $platforms;
  /** @var string[] */
  public $publisherIdentifiers;
  /** @var RealtimeTimeRange */
  public $realtimeTimeRange;
  /** @var RelativeDateRange */
  public $relativeDateRange;
  /** @var int[] */
  public $sellerNetworkIds;
  /** @var string */
  public $timeSeriesGranularity;
  protected $collection_key = 'sellerNetworkIds';
  protected $absoluteDateRangeType = AbsoluteDateRange::class;
  protected $absoluteDateRangeDataType = '';
  protected $realtimeTimeRangeType = RealtimeTimeRange::class;
  protected $realtimeTimeRangeDataType = '';
  protected $relativeDateRangeType = RelativeDateRange::class;
  protected $relativeDateRangeDataType = '';
  /** @param AbsoluteDateRange */
  public function setAbsoluteDateRange(AbsoluteDateRange $absoluteDateRange)
  {
    $this->absoluteDateRange = $absoluteDateRange;
  }
  /** @return AbsoluteDateRange */
  public function getAbsoluteDateRange()
  {
    return $this->absoluteDateRange;
  }
  /** @param string[] */
  public function setBreakdownDimensions($breakdownDimensions)
  {
    $this->breakdownDimensions = $breakdownDimensions;
  }
  /** @return string[] */
  public function getBreakdownDimensions()
  {
    return $this->breakdownDimensions;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param string */
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  /** @return string */
  public function getDealId()
  {
    return $this->dealId;
  }
  /** @param string */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
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
  /** @param string[] */
  public function setFormats($formats)
  {
    $this->formats = $formats;
  }
  /** @return string[] */
  public function getFormats()
  {
    return $this->formats;
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
  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }
  /** @return string[] */
  public function getPlatforms()
  {
    return $this->platforms;
  }
  /** @param string[] */
  public function setPublisherIdentifiers($publisherIdentifiers)
  {
    $this->publisherIdentifiers = $publisherIdentifiers;
  }
  /** @return string[] */
  public function getPublisherIdentifiers()
  {
    return $this->publisherIdentifiers;
  }
  /** @param RealtimeTimeRange */
  public function setRealtimeTimeRange(RealtimeTimeRange $realtimeTimeRange)
  {
    $this->realtimeTimeRange = $realtimeTimeRange;
  }
  /** @return RealtimeTimeRange */
  public function getRealtimeTimeRange()
  {
    return $this->realtimeTimeRange;
  }
  /** @param RelativeDateRange */
  public function setRelativeDateRange(RelativeDateRange $relativeDateRange)
  {
    $this->relativeDateRange = $relativeDateRange;
  }
  /** @return RelativeDateRange */
  public function getRelativeDateRange()
  {
    return $this->relativeDateRange;
  }
  /** @param int[] */
  public function setSellerNetworkIds($sellerNetworkIds)
  {
    $this->sellerNetworkIds = $sellerNetworkIds;
  }
  /** @return int[] */
  public function getSellerNetworkIds()
  {
    return $this->sellerNetworkIds;
  }
  /** @param string */
  public function setTimeSeriesGranularity($timeSeriesGranularity)
  {
    $this->timeSeriesGranularity = $timeSeriesGranularity;
  }
  /** @return string */
  public function getTimeSeriesGranularity()
  {
    return $this->timeSeriesGranularity;
  }
}

class FilteredBidCreativeRow extends \Google\Model
{
  /** @var MetricValue */
  public $bidCount;
  /** @var string */
  public $creativeId;
  /** @var RowDimensions */
  public $rowDimensions;
  protected $bidCountType = MetricValue::class;
  protected $bidCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param MetricValue */
  public function setBidCount(MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  /** @return MetricValue */
  public function getBidCount()
  {
    return $this->bidCount;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}

class FilteredBidDetailRow extends \Google\Model
{
  /** @var MetricValue */
  public $bidCount;
  /** @var string */
  public $detail;
  /** @var int */
  public $detailId;
  /** @var RowDimensions */
  public $rowDimensions;
  protected $bidCountType = MetricValue::class;
  protected $bidCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param MetricValue */
  public function setBidCount(MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  /** @return MetricValue */
  public function getBidCount()
  {
    return $this->bidCount;
  }
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param int */
  public function setDetailId($detailId)
  {
    $this->detailId = $detailId;
  }
  /** @return int */
  public function getDetailId()
  {
    return $this->detailId;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}

class FirstPartyMobileApplicationTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedAppIds;
  /** @var string[] */
  public $targetedAppIds;
  protected $collection_key = 'targetedAppIds';
  /** @param string[] */
  public function setExcludedAppIds($excludedAppIds)
  {
    $this->excludedAppIds = $excludedAppIds;
  }
  /** @return string[] */
  public function getExcludedAppIds()
  {
    return $this->excludedAppIds;
  }
  /** @param string[] */
  public function setTargetedAppIds($targetedAppIds)
  {
    $this->targetedAppIds = $targetedAppIds;
  }
  /** @return string[] */
  public function getTargetedAppIds()
  {
    return $this->targetedAppIds;
  }
}

class FrequencyCap extends \Google\Model
{
  /** @var int */
  public $maxImpressions;
  /** @var int */
  public $numTimeUnits;
  /** @var string */
  public $timeUnitType;

  /** @param int */
  public function setMaxImpressions($maxImpressions)
  {
    $this->maxImpressions = $maxImpressions;
  }
  /** @return int */
  public function getMaxImpressions()
  {
    return $this->maxImpressions;
  }
  /** @param int */
  public function setNumTimeUnits($numTimeUnits)
  {
    $this->numTimeUnits = $numTimeUnits;
  }
  /** @return int */
  public function getNumTimeUnits()
  {
    return $this->numTimeUnits;
  }
  /** @param string */
  public function setTimeUnitType($timeUnitType)
  {
    $this->timeUnitType = $timeUnitType;
  }
  /** @return string */
  public function getTimeUnitType()
  {
    return $this->timeUnitType;
  }
}

class GuaranteedFixedPriceTerms extends \Google\Collection
{
  /** @var PricePerBuyer[] */
  public $fixedPrices;
  /** @var string */
  public $guaranteedImpressions;
  /** @var string */
  public $guaranteedLooks;
  /** @var string */
  public $impressionCap;
  /** @var string */
  public $minimumDailyLooks;
  /** @var string */
  public $percentShareOfVoice;
  /** @var string */
  public $reservationType;
  protected $collection_key = 'fixedPrices';
  protected $fixedPricesType = PricePerBuyer::class;
  protected $fixedPricesDataType = 'array';
  /** @param PricePerBuyer[] */
  public function setFixedPrices($fixedPrices)
  {
    $this->fixedPrices = $fixedPrices;
  }
  /** @return PricePerBuyer[] */
  public function getFixedPrices()
  {
    return $this->fixedPrices;
  }
  /** @param string */
  public function setGuaranteedImpressions($guaranteedImpressions)
  {
    $this->guaranteedImpressions = $guaranteedImpressions;
  }
  /** @return string */
  public function getGuaranteedImpressions()
  {
    return $this->guaranteedImpressions;
  }
  /** @param string */
  public function setGuaranteedLooks($guaranteedLooks)
  {
    $this->guaranteedLooks = $guaranteedLooks;
  }
  /** @return string */
  public function getGuaranteedLooks()
  {
    return $this->guaranteedLooks;
  }
  /** @param string */
  public function setImpressionCap($impressionCap)
  {
    $this->impressionCap = $impressionCap;
  }
  /** @return string */
  public function getImpressionCap()
  {
    return $this->impressionCap;
  }
  /** @param string */
  public function setMinimumDailyLooks($minimumDailyLooks)
  {
    $this->minimumDailyLooks = $minimumDailyLooks;
  }
  /** @return string */
  public function getMinimumDailyLooks()
  {
    return $this->minimumDailyLooks;
  }
  /** @param string */
  public function setPercentShareOfVoice($percentShareOfVoice)
  {
    $this->percentShareOfVoice = $percentShareOfVoice;
  }
  /** @return string */
  public function getPercentShareOfVoice()
  {
    return $this->percentShareOfVoice;
  }
  /** @param string */
  public function setReservationType($reservationType)
  {
    $this->reservationType = $reservationType;
  }
  /** @return string */
  public function getReservationType()
  {
    return $this->reservationType;
  }
}

class HtmlContent extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $snippet;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
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
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class Image extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $url;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
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
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class ImpressionMetricsRow extends \Google\Model
{
  /** @var MetricValue */
  public $availableImpressions;
  /** @var MetricValue */
  public $bidRequests;
  /** @var MetricValue */
  public $inventoryMatches;
  /** @var MetricValue */
  public $responsesWithBids;
  /** @var RowDimensions */
  public $rowDimensions;
  /** @var MetricValue */
  public $successfulResponses;
  protected $availableImpressionsType = MetricValue::class;
  protected $availableImpressionsDataType = '';
  protected $bidRequestsType = MetricValue::class;
  protected $bidRequestsDataType = '';
  protected $inventoryMatchesType = MetricValue::class;
  protected $inventoryMatchesDataType = '';
  protected $responsesWithBidsType = MetricValue::class;
  protected $responsesWithBidsDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  protected $successfulResponsesType = MetricValue::class;
  protected $successfulResponsesDataType = '';
  /** @param MetricValue */
  public function setAvailableImpressions(MetricValue $availableImpressions)
  {
    $this->availableImpressions = $availableImpressions;
  }
  /** @return MetricValue */
  public function getAvailableImpressions()
  {
    return $this->availableImpressions;
  }
  /** @param MetricValue */
  public function setBidRequests(MetricValue $bidRequests)
  {
    $this->bidRequests = $bidRequests;
  }
  /** @return MetricValue */
  public function getBidRequests()
  {
    return $this->bidRequests;
  }
  /** @param MetricValue */
  public function setInventoryMatches(MetricValue $inventoryMatches)
  {
    $this->inventoryMatches = $inventoryMatches;
  }
  /** @return MetricValue */
  public function getInventoryMatches()
  {
    return $this->inventoryMatches;
  }
  /** @param MetricValue */
  public function setResponsesWithBids(MetricValue $responsesWithBids)
  {
    $this->responsesWithBids = $responsesWithBids;
  }
  /** @return MetricValue */
  public function getResponsesWithBids()
  {
    return $this->responsesWithBids;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
  /** @param MetricValue */
  public function setSuccessfulResponses(MetricValue $successfulResponses)
  {
    $this->successfulResponses = $successfulResponses;
  }
  /** @return MetricValue */
  public function getSuccessfulResponses()
  {
    return $this->successfulResponses;
  }
}

class InventorySizeTargeting extends \Google\Collection
{
  /** @var AdSize[] */
  public $excludedInventorySizes;
  /** @var AdSize[] */
  public $targetedInventorySizes;
  protected $collection_key = 'targetedInventorySizes';
  protected $excludedInventorySizesType = AdSize::class;
  protected $excludedInventorySizesDataType = 'array';
  protected $targetedInventorySizesType = AdSize::class;
  protected $targetedInventorySizesDataType = 'array';
  /** @param AdSize[] */
  public function setExcludedInventorySizes($excludedInventorySizes)
  {
    $this->excludedInventorySizes = $excludedInventorySizes;
  }
  /** @return AdSize[] */
  public function getExcludedInventorySizes()
  {
    return $this->excludedInventorySizes;
  }
  /** @param AdSize[] */
  public function setTargetedInventorySizes($targetedInventorySizes)
  {
    $this->targetedInventorySizes = $targetedInventorySizes;
  }
  /** @return AdSize[] */
  public function getTargetedInventorySizes()
  {
    return $this->targetedInventorySizes;
  }
}

class ListBidMetricsResponse extends \Google\Collection
{
  /** @var BidMetricsRow[] */
  public $bidMetricsRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bidMetricsRows';
  protected $bidMetricsRowsType = BidMetricsRow::class;
  protected $bidMetricsRowsDataType = 'array';
  /** @param BidMetricsRow[] */
  public function setBidMetricsRows($bidMetricsRows)
  {
    $this->bidMetricsRows = $bidMetricsRows;
  }
  /** @return BidMetricsRow[] */
  public function getBidMetricsRows()
  {
    return $this->bidMetricsRows;
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

class ListBidResponseErrorsResponse extends \Google\Collection
{
  /** @var CalloutStatusRow[] */
  public $calloutStatusRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'calloutStatusRows';
  protected $calloutStatusRowsType = CalloutStatusRow::class;
  protected $calloutStatusRowsDataType = 'array';
  /** @param CalloutStatusRow[] */
  public function setCalloutStatusRows($calloutStatusRows)
  {
    $this->calloutStatusRows = $calloutStatusRows;
  }
  /** @return CalloutStatusRow[] */
  public function getCalloutStatusRows()
  {
    return $this->calloutStatusRows;
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

class ListBidResponsesWithoutBidsResponse extends \Google\Collection
{
  /** @var BidResponseWithoutBidsStatusRow[] */
  public $bidResponseWithoutBidsStatusRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bidResponseWithoutBidsStatusRows';
  protected $bidResponseWithoutBidsStatusRowsType = BidResponseWithoutBidsStatusRow::class;
  protected $bidResponseWithoutBidsStatusRowsDataType = 'array';
  /** @param BidResponseWithoutBidsStatusRow[] */
  public function setBidResponseWithoutBidsStatusRows($bidResponseWithoutBidsStatusRows)
  {
    $this->bidResponseWithoutBidsStatusRows = $bidResponseWithoutBidsStatusRows;
  }
  /** @return BidResponseWithoutBidsStatusRow[] */
  public function getBidResponseWithoutBidsStatusRows()
  {
    return $this->bidResponseWithoutBidsStatusRows;
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

class ListClientUserInvitationsResponse extends \Google\Collection
{
  /** @var ClientUserInvitation[] */
  public $invitations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'invitations';
  protected $invitationsType = ClientUserInvitation::class;
  protected $invitationsDataType = 'array';
  /** @param ClientUserInvitation[] */
  public function setInvitations($invitations)
  {
    $this->invitations = $invitations;
  }
  /** @return ClientUserInvitation[] */
  public function getInvitations()
  {
    return $this->invitations;
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

class ListClientUsersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ClientUser[] */
  public $users;
  protected $collection_key = 'users';
  protected $usersType = ClientUser::class;
  protected $usersDataType = 'array';
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
  /** @param ClientUser[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return ClientUser[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class ListClientsResponse extends \Google\Collection
{
  /** @var Client[] */
  public $clients;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clients';
  protected $clientsType = Client::class;
  protected $clientsDataType = 'array';
  /** @param Client[] */
  public function setClients($clients)
  {
    $this->clients = $clients;
  }
  /** @return Client[] */
  public function getClients()
  {
    return $this->clients;
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

class ListCreativeStatusBreakdownByCreativeResponse extends \Google\Collection
{
  /** @var FilteredBidCreativeRow[] */
  public $filteredBidCreativeRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'filteredBidCreativeRows';
  protected $filteredBidCreativeRowsType = FilteredBidCreativeRow::class;
  protected $filteredBidCreativeRowsDataType = 'array';
  /** @param FilteredBidCreativeRow[] */
  public function setFilteredBidCreativeRows($filteredBidCreativeRows)
  {
    $this->filteredBidCreativeRows = $filteredBidCreativeRows;
  }
  /** @return FilteredBidCreativeRow[] */
  public function getFilteredBidCreativeRows()
  {
    return $this->filteredBidCreativeRows;
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

class ListCreativeStatusBreakdownByDetailResponse extends \Google\Collection
{
  /** @var string */
  public $detailType;
  /** @var FilteredBidDetailRow[] */
  public $filteredBidDetailRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'filteredBidDetailRows';
  protected $filteredBidDetailRowsType = FilteredBidDetailRow::class;
  protected $filteredBidDetailRowsDataType = 'array';
  /** @param string */
  public function setDetailType($detailType)
  {
    $this->detailType = $detailType;
  }
  /** @return string */
  public function getDetailType()
  {
    return $this->detailType;
  }
  /** @param FilteredBidDetailRow[] */
  public function setFilteredBidDetailRows($filteredBidDetailRows)
  {
    $this->filteredBidDetailRows = $filteredBidDetailRows;
  }
  /** @return FilteredBidDetailRow[] */
  public function getFilteredBidDetailRows()
  {
    return $this->filteredBidDetailRows;
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

class ListCreativesResponse extends \Google\Collection
{
  /** @var Creative[] */
  public $creatives;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creatives';
  protected $creativesType = Creative::class;
  protected $creativesDataType = 'array';
  /** @param Creative[] */
  public function setCreatives($creatives)
  {
    $this->creatives = $creatives;
  }
  /** @return Creative[] */
  public function getCreatives()
  {
    return $this->creatives;
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

class ListDealAssociationsResponse extends \Google\Collection
{
  /** @var CreativeDealAssociation[] */
  public $associations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'associations';
  protected $associationsType = CreativeDealAssociation::class;
  protected $associationsDataType = 'array';
  /** @param CreativeDealAssociation[] */
  public function setAssociations($associations)
  {
    $this->associations = $associations;
  }
  /** @return CreativeDealAssociation[] */
  public function getAssociations()
  {
    return $this->associations;
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

class ListFilterSetsResponse extends \Google\Collection
{
  /** @var FilterSet[] */
  public $filterSets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'filterSets';
  protected $filterSetsType = FilterSet::class;
  protected $filterSetsDataType = 'array';
  /** @param FilterSet[] */
  public function setFilterSets($filterSets)
  {
    $this->filterSets = $filterSets;
  }
  /** @return FilterSet[] */
  public function getFilterSets()
  {
    return $this->filterSets;
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

class ListFilteredBidRequestsResponse extends \Google\Collection
{
  /** @var CalloutStatusRow[] */
  public $calloutStatusRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'calloutStatusRows';
  protected $calloutStatusRowsType = CalloutStatusRow::class;
  protected $calloutStatusRowsDataType = 'array';
  /** @param CalloutStatusRow[] */
  public function setCalloutStatusRows($calloutStatusRows)
  {
    $this->calloutStatusRows = $calloutStatusRows;
  }
  /** @return CalloutStatusRow[] */
  public function getCalloutStatusRows()
  {
    return $this->calloutStatusRows;
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

class ListFilteredBidsResponse extends \Google\Collection
{
  /** @var CreativeStatusRow[] */
  public $creativeStatusRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creativeStatusRows';
  protected $creativeStatusRowsType = CreativeStatusRow::class;
  protected $creativeStatusRowsDataType = 'array';
  /** @param CreativeStatusRow[] */
  public function setCreativeStatusRows($creativeStatusRows)
  {
    $this->creativeStatusRows = $creativeStatusRows;
  }
  /** @return CreativeStatusRow[] */
  public function getCreativeStatusRows()
  {
    return $this->creativeStatusRows;
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

class ListImpressionMetricsResponse extends \Google\Collection
{
  /** @var ImpressionMetricsRow[] */
  public $impressionMetricsRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'impressionMetricsRows';
  protected $impressionMetricsRowsType = ImpressionMetricsRow::class;
  protected $impressionMetricsRowsDataType = 'array';
  /** @param ImpressionMetricsRow[] */
  public function setImpressionMetricsRows($impressionMetricsRows)
  {
    $this->impressionMetricsRows = $impressionMetricsRows;
  }
  /** @return ImpressionMetricsRow[] */
  public function getImpressionMetricsRows()
  {
    return $this->impressionMetricsRows;
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

class ListLosingBidsResponse extends \Google\Collection
{
  /** @var CreativeStatusRow[] */
  public $creativeStatusRows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creativeStatusRows';
  protected $creativeStatusRowsType = CreativeStatusRow::class;
  protected $creativeStatusRowsDataType = 'array';
  /** @param CreativeStatusRow[] */
  public function setCreativeStatusRows($creativeStatusRows)
  {
    $this->creativeStatusRows = $creativeStatusRows;
  }
  /** @return CreativeStatusRow[] */
  public function getCreativeStatusRows()
  {
    return $this->creativeStatusRows;
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

class ListNonBillableWinningBidsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var NonBillableWinningBidStatusRow[] */
  public $nonBillableWinningBidStatusRows;
  protected $collection_key = 'nonBillableWinningBidStatusRows';
  protected $nonBillableWinningBidStatusRowsType = NonBillableWinningBidStatusRow::class;
  protected $nonBillableWinningBidStatusRowsDataType = 'array';
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
  /** @param NonBillableWinningBidStatusRow[] */
  public function setNonBillableWinningBidStatusRows($nonBillableWinningBidStatusRows)
  {
    $this->nonBillableWinningBidStatusRows = $nonBillableWinningBidStatusRows;
  }
  /** @return NonBillableWinningBidStatusRow[] */
  public function getNonBillableWinningBidStatusRows()
  {
    return $this->nonBillableWinningBidStatusRows;
  }
}

class ListProductsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = Product::class;
  protected $productsDataType = 'array';
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
  /** @param Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class ListProposalsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Proposal[] */
  public $proposals;
  protected $collection_key = 'proposals';
  protected $proposalsType = Proposal::class;
  protected $proposalsDataType = 'array';
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
  /** @param Proposal[] */
  public function setProposals($proposals)
  {
    $this->proposals = $proposals;
  }
  /** @return Proposal[] */
  public function getProposals()
  {
    return $this->proposals;
  }
}

class ListPublisherProfilesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PublisherProfile[] */
  public $publisherProfiles;
  protected $collection_key = 'publisherProfiles';
  protected $publisherProfilesType = PublisherProfile::class;
  protected $publisherProfilesDataType = 'array';
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
  /** @param PublisherProfile[] */
  public function setPublisherProfiles($publisherProfiles)
  {
    $this->publisherProfiles = $publisherProfiles;
  }
  /** @return PublisherProfile[] */
  public function getPublisherProfiles()
  {
    return $this->publisherProfiles;
  }
}

class LocationContext extends \Google\Collection
{
  /** @var int[] */
  public $geoCriteriaIds;
  protected $collection_key = 'geoCriteriaIds';
  /** @param int[] */
  public function setGeoCriteriaIds($geoCriteriaIds)
  {
    $this->geoCriteriaIds = $geoCriteriaIds;
  }
  /** @return int[] */
  public function getGeoCriteriaIds()
  {
    return $this->geoCriteriaIds;
  }
}

class MarketplaceTargeting extends \Google\Model
{
  /** @var CriteriaTargeting */
  public $geoTargeting;
  /** @var InventorySizeTargeting */
  public $inventorySizeTargeting;
  /** @var PlacementTargeting */
  public $placementTargeting;
  /** @var TechnologyTargeting */
  public $technologyTargeting;
  /** @var VideoTargeting */
  public $videoTargeting;
  protected $geoTargetingType = CriteriaTargeting::class;
  protected $geoTargetingDataType = '';
  protected $inventorySizeTargetingType = InventorySizeTargeting::class;
  protected $inventorySizeTargetingDataType = '';
  protected $placementTargetingType = PlacementTargeting::class;
  protected $placementTargetingDataType = '';
  protected $technologyTargetingType = TechnologyTargeting::class;
  protected $technologyTargetingDataType = '';
  protected $videoTargetingType = VideoTargeting::class;
  protected $videoTargetingDataType = '';
  /** @param CriteriaTargeting */
  public function setGeoTargeting(CriteriaTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return CriteriaTargeting */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
  }
  /** @param InventorySizeTargeting */
  public function setInventorySizeTargeting(InventorySizeTargeting $inventorySizeTargeting)
  {
    $this->inventorySizeTargeting = $inventorySizeTargeting;
  }
  /** @return InventorySizeTargeting */
  public function getInventorySizeTargeting()
  {
    return $this->inventorySizeTargeting;
  }
  /** @param PlacementTargeting */
  public function setPlacementTargeting(PlacementTargeting $placementTargeting)
  {
    $this->placementTargeting = $placementTargeting;
  }
  /** @return PlacementTargeting */
  public function getPlacementTargeting()
  {
    return $this->placementTargeting;
  }
  /** @param TechnologyTargeting */
  public function setTechnologyTargeting(TechnologyTargeting $technologyTargeting)
  {
    $this->technologyTargeting = $technologyTargeting;
  }
  /** @return TechnologyTargeting */
  public function getTechnologyTargeting()
  {
    return $this->technologyTargeting;
  }
  /** @param VideoTargeting */
  public function setVideoTargeting(VideoTargeting $videoTargeting)
  {
    $this->videoTargeting = $videoTargeting;
  }
  /** @return VideoTargeting */
  public function getVideoTargeting()
  {
    return $this->videoTargeting;
  }
}

class MetricValue extends \Google\Model
{
  /** @var string */
  public $value;
  /** @var string */
  public $variance;

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
  /** @param string */
  public function setVariance($variance)
  {
    $this->variance = $variance;
  }
  /** @return string */
  public function getVariance()
  {
    return $this->variance;
  }
}

class MobileApplicationTargeting extends \Google\Model
{
  /** @var FirstPartyMobileApplicationTargeting */
  public $firstPartyTargeting;
  protected $firstPartyTargetingType = FirstPartyMobileApplicationTargeting::class;
  protected $firstPartyTargetingDataType = '';
  /** @param FirstPartyMobileApplicationTargeting */
  public function setFirstPartyTargeting(FirstPartyMobileApplicationTargeting $firstPartyTargeting)
  {
    $this->firstPartyTargeting = $firstPartyTargeting;
  }
  /** @return FirstPartyMobileApplicationTargeting */
  public function getFirstPartyTargeting()
  {
    return $this->firstPartyTargeting;
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

class NativeContent extends \Google\Model
{
  /** @var string */
  public $advertiserName;
  /** @var Image */
  public $appIcon;
  /** @var string */
  public $body;
  /** @var string */
  public $callToAction;
  /** @var string */
  public $clickLinkUrl;
  /** @var string */
  public $clickTrackingUrl;
  /** @var string */
  public $headline;
  /** @var Image */
  public $image;
  /** @var Image */
  public $logo;
  /** @var string */
  public $priceDisplayText;
  public $starRating;
  /** @var string */
  public $storeUrl;
  /** @var string */
  public $videoUrl;
  protected $appIconType = Image::class;
  protected $appIconDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $logoType = Image::class;
  protected $logoDataType = '';
  /** @param string */
  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  /** @return string */
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  /** @param Image */
  public function setAppIcon(Image $appIcon)
  {
    $this->appIcon = $appIcon;
  }
  /** @return Image */
  public function getAppIcon()
  {
    return $this->appIcon;
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
  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /** @return string */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /** @param string */
  public function setClickLinkUrl($clickLinkUrl)
  {
    $this->clickLinkUrl = $clickLinkUrl;
  }
  /** @return string */
  public function getClickLinkUrl()
  {
    return $this->clickLinkUrl;
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
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /** @return string */
  public function getHeadline()
  {
    return $this->headline;
  }
  /** @param Image */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /** @return Image */
  public function getImage()
  {
    return $this->image;
  }
  /** @param Image */
  public function setLogo(Image $logo)
  {
    $this->logo = $logo;
  }
  /** @return Image */
  public function getLogo()
  {
    return $this->logo;
  }
  /** @param string */
  public function setPriceDisplayText($priceDisplayText)
  {
    $this->priceDisplayText = $priceDisplayText;
  }
  /** @return string */
  public function getPriceDisplayText()
  {
    return $this->priceDisplayText;
  }
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  public function getStarRating()
  {
    return $this->starRating;
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
  /** @param string */
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  /** @return string */
  public function getVideoUrl()
  {
    return $this->videoUrl;
  }
}

class NonBillableWinningBidStatusRow extends \Google\Model
{
  /** @var MetricValue */
  public $bidCount;
  /** @var RowDimensions */
  public $rowDimensions;
  /** @var string */
  public $status;
  protected $bidCountType = MetricValue::class;
  protected $bidCountDataType = '';
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';
  /** @param MetricValue */
  public function setBidCount(MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  /** @return MetricValue */
  public function getBidCount()
  {
    return $this->bidCount;
  }
  /** @param RowDimensions */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /** @return RowDimensions */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
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

class NonGuaranteedAuctionTerms extends \Google\Collection
{
  /** @var bool */
  public $autoOptimizePrivateAuction;
  /** @var PricePerBuyer[] */
  public $reservePricesPerBuyer;
  protected $collection_key = 'reservePricesPerBuyer';
  protected $reservePricesPerBuyerType = PricePerBuyer::class;
  protected $reservePricesPerBuyerDataType = 'array';
  /** @param bool */
  public function setAutoOptimizePrivateAuction($autoOptimizePrivateAuction)
  {
    $this->autoOptimizePrivateAuction = $autoOptimizePrivateAuction;
  }
  /** @return bool */
  public function getAutoOptimizePrivateAuction()
  {
    return $this->autoOptimizePrivateAuction;
  }
  /** @param PricePerBuyer[] */
  public function setReservePricesPerBuyer($reservePricesPerBuyer)
  {
    $this->reservePricesPerBuyer = $reservePricesPerBuyer;
  }
  /** @return PricePerBuyer[] */
  public function getReservePricesPerBuyer()
  {
    return $this->reservePricesPerBuyer;
  }
}

class NonGuaranteedFixedPriceTerms extends \Google\Collection
{
  /** @var PricePerBuyer[] */
  public $fixedPrices;
  protected $collection_key = 'fixedPrices';
  protected $fixedPricesType = PricePerBuyer::class;
  protected $fixedPricesDataType = 'array';
  /** @param PricePerBuyer[] */
  public function setFixedPrices($fixedPrices)
  {
    $this->fixedPrices = $fixedPrices;
  }
  /** @return PricePerBuyer[] */
  public function getFixedPrices()
  {
    return $this->fixedPrices;
  }
}

class Note extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorRole;
  /** @var string */
  public $note;
  /** @var string */
  public $noteId;
  /** @var string */
  public $proposalRevision;

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
  public function setCreatorRole($creatorRole)
  {
    $this->creatorRole = $creatorRole;
  }
  /** @return string */
  public function getCreatorRole()
  {
    return $this->creatorRole;
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
  public function setNoteId($noteId)
  {
    $this->noteId = $noteId;
  }
  /** @return string */
  public function getNoteId()
  {
    return $this->noteId;
  }
  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
}

class OperatingSystemTargeting extends \Google\Model
{
  /** @var CriteriaTargeting */
  public $operatingSystemCriteria;
  /** @var CriteriaTargeting */
  public $operatingSystemVersionCriteria;
  protected $operatingSystemCriteriaType = CriteriaTargeting::class;
  protected $operatingSystemCriteriaDataType = '';
  protected $operatingSystemVersionCriteriaType = CriteriaTargeting::class;
  protected $operatingSystemVersionCriteriaDataType = '';
  /** @param CriteriaTargeting */
  public function setOperatingSystemCriteria(CriteriaTargeting $operatingSystemCriteria)
  {
    $this->operatingSystemCriteria = $operatingSystemCriteria;
  }
  /** @return CriteriaTargeting */
  public function getOperatingSystemCriteria()
  {
    return $this->operatingSystemCriteria;
  }
  /** @param CriteriaTargeting */
  public function setOperatingSystemVersionCriteria(CriteriaTargeting $operatingSystemVersionCriteria)
  {
    $this->operatingSystemVersionCriteria = $operatingSystemVersionCriteria;
  }
  /** @return CriteriaTargeting */
  public function getOperatingSystemVersionCriteria()
  {
    return $this->operatingSystemVersionCriteria;
  }
}

class PauseProposalDealsRequest extends \Google\Collection
{
  /** @var string[] */
  public $externalDealIds;
  /** @var string */
  public $reason;
  protected $collection_key = 'externalDealIds';
  /** @param string[] */
  public function setExternalDealIds($externalDealIds)
  {
    $this->externalDealIds = $externalDealIds;
  }
  /** @return string[] */
  public function getExternalDealIds()
  {
    return $this->externalDealIds;
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
}

class PauseProposalRequest extends \Google\Model
{
  /** @var string */
  public $reason;

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
}

class PlacementTargeting extends \Google\Model
{
  /** @var MobileApplicationTargeting */
  public $mobileApplicationTargeting;
  /** @var UrlTargeting */
  public $urlTargeting;
  protected $mobileApplicationTargetingType = MobileApplicationTargeting::class;
  protected $mobileApplicationTargetingDataType = '';
  protected $urlTargetingType = UrlTargeting::class;
  protected $urlTargetingDataType = '';
  /** @param MobileApplicationTargeting */
  public function setMobileApplicationTargeting(MobileApplicationTargeting $mobileApplicationTargeting)
  {
    $this->mobileApplicationTargeting = $mobileApplicationTargeting;
  }
  /** @return MobileApplicationTargeting */
  public function getMobileApplicationTargeting()
  {
    return $this->mobileApplicationTargeting;
  }
  /** @param UrlTargeting */
  public function setUrlTargeting(UrlTargeting $urlTargeting)
  {
    $this->urlTargeting = $urlTargeting;
  }
  /** @return UrlTargeting */
  public function getUrlTargeting()
  {
    return $this->urlTargeting;
  }
}

class PlatformContext extends \Google\Collection
{
  /** @var string[] */
  public $platforms;
  protected $collection_key = 'platforms';
  /** @param string[] */
  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }
  /** @return string[] */
  public function getPlatforms()
  {
    return $this->platforms;
  }
}

class Price extends \Google\Model
{
  /** @var Money */
  public $amount;
  /** @var string */
  public $pricingType;
  protected $amountType = Money::class;
  protected $amountDataType = '';
  /** @param Money */
  public function setAmount(Money $amount)
  {
    $this->amount = $amount;
  }
  /** @return Money */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setPricingType($pricingType)
  {
    $this->pricingType = $pricingType;
  }
  /** @return string */
  public function getPricingType()
  {
    return $this->pricingType;
  }
}

class PricePerBuyer extends \Google\Collection
{
  /** @var string[] */
  public $advertiserIds;
  /** @var Buyer */
  public $buyer;
  /** @var Price */
  public $price;
  protected $collection_key = 'advertiserIds';
  protected $buyerType = Buyer::class;
  protected $buyerDataType = '';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string[] */
  public function setAdvertiserIds($advertiserIds)
  {
    $this->advertiserIds = $advertiserIds;
  }
  /** @return string[] */
  public function getAdvertiserIds()
  {
    return $this->advertiserIds;
  }
  /** @param Buyer */
  public function setBuyer(Buyer $buyer)
  {
    $this->buyer = $buyer;
  }
  /** @return Buyer */
  public function getBuyer()
  {
    return $this->buyer;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
}

class PrivateData extends \Google\Model
{
  /** @var string */
  public $referenceId;

  /** @param string */
  public function setReferenceId($referenceId)
  {
    $this->referenceId = $referenceId;
  }
  /** @return string */
  public function getReferenceId()
  {
    return $this->referenceId;
  }
}

class Product extends \Google\Collection
{
  /** @var string */
  public $availableEndTime;
  /** @var string */
  public $availableStartTime;
  /** @var string */
  public $createTime;
  /** @var ContactInformation[] */
  public $creatorContacts;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $hasCreatorSignedOff;
  /** @var string */
  public $productId;
  /** @var string */
  public $productRevision;
  /** @var string */
  public $publisherProfileId;
  /** @var Seller */
  public $seller;
  /** @var string */
  public $syndicationProduct;
  /** @var TargetingCriteria[] */
  public $targetingCriterion;
  /** @var DealTerms */
  public $terms;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $webPropertyCode;
  protected $collection_key = 'targetingCriterion';
  protected $creatorContactsType = ContactInformation::class;
  protected $creatorContactsDataType = 'array';
  protected $sellerType = Seller::class;
  protected $sellerDataType = '';
  protected $targetingCriterionType = TargetingCriteria::class;
  protected $targetingCriterionDataType = 'array';
  protected $termsType = DealTerms::class;
  protected $termsDataType = '';
  /** @param string */
  public function setAvailableEndTime($availableEndTime)
  {
    $this->availableEndTime = $availableEndTime;
  }
  /** @return string */
  public function getAvailableEndTime()
  {
    return $this->availableEndTime;
  }
  /** @param string */
  public function setAvailableStartTime($availableStartTime)
  {
    $this->availableStartTime = $availableStartTime;
  }
  /** @return string */
  public function getAvailableStartTime()
  {
    return $this->availableStartTime;
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
  /** @param ContactInformation[] */
  public function setCreatorContacts($creatorContacts)
  {
    $this->creatorContacts = $creatorContacts;
  }
  /** @return ContactInformation[] */
  public function getCreatorContacts()
  {
    return $this->creatorContacts;
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
  public function setHasCreatorSignedOff($hasCreatorSignedOff)
  {
    $this->hasCreatorSignedOff = $hasCreatorSignedOff;
  }
  /** @return bool */
  public function getHasCreatorSignedOff()
  {
    return $this->hasCreatorSignedOff;
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
  public function setProductRevision($productRevision)
  {
    $this->productRevision = $productRevision;
  }
  /** @return string */
  public function getProductRevision()
  {
    return $this->productRevision;
  }
  /** @param string */
  public function setPublisherProfileId($publisherProfileId)
  {
    $this->publisherProfileId = $publisherProfileId;
  }
  /** @return string */
  public function getPublisherProfileId()
  {
    return $this->publisherProfileId;
  }
  /** @param Seller */
  public function setSeller(Seller $seller)
  {
    $this->seller = $seller;
  }
  /** @return Seller */
  public function getSeller()
  {
    return $this->seller;
  }
  /** @param string */
  public function setSyndicationProduct($syndicationProduct)
  {
    $this->syndicationProduct = $syndicationProduct;
  }
  /** @return string */
  public function getSyndicationProduct()
  {
    return $this->syndicationProduct;
  }
  /** @param TargetingCriteria[] */
  public function setTargetingCriterion($targetingCriterion)
  {
    $this->targetingCriterion = $targetingCriterion;
  }
  /** @return TargetingCriteria[] */
  public function getTargetingCriterion()
  {
    return $this->targetingCriterion;
  }
  /** @param DealTerms */
  public function setTerms(DealTerms $terms)
  {
    $this->terms = $terms;
  }
  /** @return DealTerms */
  public function getTerms()
  {
    return $this->terms;
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
  public function setWebPropertyCode($webPropertyCode)
  {
    $this->webPropertyCode = $webPropertyCode;
  }
  /** @return string */
  public function getWebPropertyCode()
  {
    return $this->webPropertyCode;
  }
}

class Proposal extends \Google\Collection
{
  /** @var Buyer */
  public $billedBuyer;
  /** @var Buyer */
  public $buyer;
  /** @var ContactInformation[] */
  public $buyerContacts;
  /** @var PrivateData */
  public $buyerPrivateData;
  /** @var Deal[] */
  public $deals;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isRenegotiating;
  /** @var bool */
  public $isSetupComplete;
  /** @var string */
  public $lastUpdaterOrCommentorRole;
  /** @var Note[] */
  public $notes;
  /** @var string */
  public $originatorRole;
  /** @var string */
  public $privateAuctionId;
  /** @var string */
  public $proposalId;
  /** @var string */
  public $proposalRevision;
  /** @var string */
  public $proposalState;
  /** @var Seller */
  public $seller;
  /** @var ContactInformation[] */
  public $sellerContacts;
  /** @var string */
  public $termsAndConditions;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'sellerContacts';
  protected $billedBuyerType = Buyer::class;
  protected $billedBuyerDataType = '';
  protected $buyerType = Buyer::class;
  protected $buyerDataType = '';
  protected $buyerContactsType = ContactInformation::class;
  protected $buyerContactsDataType = 'array';
  protected $buyerPrivateDataType = PrivateData::class;
  protected $buyerPrivateDataDataType = '';
  protected $dealsType = Deal::class;
  protected $dealsDataType = 'array';
  protected $notesType = Note::class;
  protected $notesDataType = 'array';
  protected $sellerType = Seller::class;
  protected $sellerDataType = '';
  protected $sellerContactsType = ContactInformation::class;
  protected $sellerContactsDataType = 'array';
  /** @param Buyer */
  public function setBilledBuyer(Buyer $billedBuyer)
  {
    $this->billedBuyer = $billedBuyer;
  }
  /** @return Buyer */
  public function getBilledBuyer()
  {
    return $this->billedBuyer;
  }
  /** @param Buyer */
  public function setBuyer(Buyer $buyer)
  {
    $this->buyer = $buyer;
  }
  /** @return Buyer */
  public function getBuyer()
  {
    return $this->buyer;
  }
  /** @param ContactInformation[] */
  public function setBuyerContacts($buyerContacts)
  {
    $this->buyerContacts = $buyerContacts;
  }
  /** @return ContactInformation[] */
  public function getBuyerContacts()
  {
    return $this->buyerContacts;
  }
  /** @param PrivateData */
  public function setBuyerPrivateData(PrivateData $buyerPrivateData)
  {
    $this->buyerPrivateData = $buyerPrivateData;
  }
  /** @return PrivateData */
  public function getBuyerPrivateData()
  {
    return $this->buyerPrivateData;
  }
  /** @param Deal[] */
  public function setDeals($deals)
  {
    $this->deals = $deals;
  }
  /** @return Deal[] */
  public function getDeals()
  {
    return $this->deals;
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
  public function setIsRenegotiating($isRenegotiating)
  {
    $this->isRenegotiating = $isRenegotiating;
  }
  /** @return bool */
  public function getIsRenegotiating()
  {
    return $this->isRenegotiating;
  }
  /** @param bool */
  public function setIsSetupComplete($isSetupComplete)
  {
    $this->isSetupComplete = $isSetupComplete;
  }
  /** @return bool */
  public function getIsSetupComplete()
  {
    return $this->isSetupComplete;
  }
  /** @param string */
  public function setLastUpdaterOrCommentorRole($lastUpdaterOrCommentorRole)
  {
    $this->lastUpdaterOrCommentorRole = $lastUpdaterOrCommentorRole;
  }
  /** @return string */
  public function getLastUpdaterOrCommentorRole()
  {
    return $this->lastUpdaterOrCommentorRole;
  }
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setOriginatorRole($originatorRole)
  {
    $this->originatorRole = $originatorRole;
  }
  /** @return string */
  public function getOriginatorRole()
  {
    return $this->originatorRole;
  }
  /** @param string */
  public function setPrivateAuctionId($privateAuctionId)
  {
    $this->privateAuctionId = $privateAuctionId;
  }
  /** @return string */
  public function getPrivateAuctionId()
  {
    return $this->privateAuctionId;
  }
  /** @param string */
  public function setProposalId($proposalId)
  {
    $this->proposalId = $proposalId;
  }
  /** @return string */
  public function getProposalId()
  {
    return $this->proposalId;
  }
  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
  /** @param string */
  public function setProposalState($proposalState)
  {
    $this->proposalState = $proposalState;
  }
  /** @return string */
  public function getProposalState()
  {
    return $this->proposalState;
  }
  /** @param Seller */
  public function setSeller(Seller $seller)
  {
    $this->seller = $seller;
  }
  /** @return Seller */
  public function getSeller()
  {
    return $this->seller;
  }
  /** @param ContactInformation[] */
  public function setSellerContacts($sellerContacts)
  {
    $this->sellerContacts = $sellerContacts;
  }
  /** @return ContactInformation[] */
  public function getSellerContacts()
  {
    return $this->sellerContacts;
  }
  /** @param string */
  public function setTermsAndConditions($termsAndConditions)
  {
    $this->termsAndConditions = $termsAndConditions;
  }
  /** @return string */
  public function getTermsAndConditions()
  {
    return $this->termsAndConditions;
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

class PublisherProfile extends \Google\Collection
{
  /** @var string */
  public $audienceDescription;
  /** @var string */
  public $buyerPitchStatement;
  /** @var string */
  public $directDealsContact;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $domains;
  /** @var string */
  public $googlePlusUrl;
  /** @var bool */
  public $isParent;
  /** @var string */
  public $logoUrl;
  /** @var string */
  public $mediaKitUrl;
  /** @var PublisherProfileMobileApplication[] */
  public $mobileApps;
  /** @var string */
  public $overview;
  /** @var string */
  public $programmaticDealsContact;
  /** @var string */
  public $publisherProfileId;
  /** @var string */
  public $rateCardInfoUrl;
  /** @var string */
  public $samplePageUrl;
  /** @var Seller */
  public $seller;
  /** @var string[] */
  public $topHeadlines;
  protected $collection_key = 'topHeadlines';
  protected $mobileAppsType = PublisherProfileMobileApplication::class;
  protected $mobileAppsDataType = 'array';
  protected $sellerType = Seller::class;
  protected $sellerDataType = '';
  /** @param string */
  public function setAudienceDescription($audienceDescription)
  {
    $this->audienceDescription = $audienceDescription;
  }
  /** @return string */
  public function getAudienceDescription()
  {
    return $this->audienceDescription;
  }
  /** @param string */
  public function setBuyerPitchStatement($buyerPitchStatement)
  {
    $this->buyerPitchStatement = $buyerPitchStatement;
  }
  /** @return string */
  public function getBuyerPitchStatement()
  {
    return $this->buyerPitchStatement;
  }
  /** @param string */
  public function setDirectDealsContact($directDealsContact)
  {
    $this->directDealsContact = $directDealsContact;
  }
  /** @return string */
  public function getDirectDealsContact()
  {
    return $this->directDealsContact;
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
  /** @param string[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return string[] */
  public function getDomains()
  {
    return $this->domains;
  }
  /** @param string */
  public function setGooglePlusUrl($googlePlusUrl)
  {
    $this->googlePlusUrl = $googlePlusUrl;
  }
  /** @return string */
  public function getGooglePlusUrl()
  {
    return $this->googlePlusUrl;
  }
  /** @param bool */
  public function setIsParent($isParent)
  {
    $this->isParent = $isParent;
  }
  /** @return bool */
  public function getIsParent()
  {
    return $this->isParent;
  }
  /** @param string */
  public function setLogoUrl($logoUrl)
  {
    $this->logoUrl = $logoUrl;
  }
  /** @return string */
  public function getLogoUrl()
  {
    return $this->logoUrl;
  }
  /** @param string */
  public function setMediaKitUrl($mediaKitUrl)
  {
    $this->mediaKitUrl = $mediaKitUrl;
  }
  /** @return string */
  public function getMediaKitUrl()
  {
    return $this->mediaKitUrl;
  }
  /** @param PublisherProfileMobileApplication[] */
  public function setMobileApps($mobileApps)
  {
    $this->mobileApps = $mobileApps;
  }
  /** @return PublisherProfileMobileApplication[] */
  public function getMobileApps()
  {
    return $this->mobileApps;
  }
  /** @param string */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /** @return string */
  public function getOverview()
  {
    return $this->overview;
  }
  /** @param string */
  public function setProgrammaticDealsContact($programmaticDealsContact)
  {
    $this->programmaticDealsContact = $programmaticDealsContact;
  }
  /** @return string */
  public function getProgrammaticDealsContact()
  {
    return $this->programmaticDealsContact;
  }
  /** @param string */
  public function setPublisherProfileId($publisherProfileId)
  {
    $this->publisherProfileId = $publisherProfileId;
  }
  /** @return string */
  public function getPublisherProfileId()
  {
    return $this->publisherProfileId;
  }
  /** @param string */
  public function setRateCardInfoUrl($rateCardInfoUrl)
  {
    $this->rateCardInfoUrl = $rateCardInfoUrl;
  }
  /** @return string */
  public function getRateCardInfoUrl()
  {
    return $this->rateCardInfoUrl;
  }
  /** @param string */
  public function setSamplePageUrl($samplePageUrl)
  {
    $this->samplePageUrl = $samplePageUrl;
  }
  /** @return string */
  public function getSamplePageUrl()
  {
    return $this->samplePageUrl;
  }
  /** @param Seller */
  public function setSeller(Seller $seller)
  {
    $this->seller = $seller;
  }
  /** @return Seller */
  public function getSeller()
  {
    return $this->seller;
  }
  /** @param string[] */
  public function setTopHeadlines($topHeadlines)
  {
    $this->topHeadlines = $topHeadlines;
  }
  /** @return string[] */
  public function getTopHeadlines()
  {
    return $this->topHeadlines;
  }
}

class PublisherProfileMobileApplication extends \Google\Model
{
  /** @var string */
  public $appStore;
  /** @var string */
  public $externalAppId;
  /** @var string */
  public $name;

  /** @param string */
  public function setAppStore($appStore)
  {
    $this->appStore = $appStore;
  }
  /** @return string */
  public function getAppStore()
  {
    return $this->appStore;
  }
  /** @param string */
  public function setExternalAppId($externalAppId)
  {
    $this->externalAppId = $externalAppId;
  }
  /** @return string */
  public function getExternalAppId()
  {
    return $this->externalAppId;
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

class RealtimeTimeRange extends \Google\Model
{
  /** @var string */
  public $startTimestamp;

  /** @param string */
  public function setStartTimestamp($startTimestamp)
  {
    $this->startTimestamp = $startTimestamp;
  }
  /** @return string */
  public function getStartTimestamp()
  {
    return $this->startTimestamp;
  }
}

class RelativeDateRange extends \Google\Model
{
  /** @var int */
  public $durationDays;
  /** @var int */
  public $offsetDays;

  /** @param int */
  public function setDurationDays($durationDays)
  {
    $this->durationDays = $durationDays;
  }
  /** @return int */
  public function getDurationDays()
  {
    return $this->durationDays;
  }
  /** @param int */
  public function setOffsetDays($offsetDays)
  {
    $this->offsetDays = $offsetDays;
  }
  /** @return int */
  public function getOffsetDays()
  {
    return $this->offsetDays;
  }
}

class RemoveDealAssociationRequest extends \Google\Model
{
  /** @var CreativeDealAssociation */
  public $association;
  protected $associationType = CreativeDealAssociation::class;
  protected $associationDataType = '';
  /** @param CreativeDealAssociation */
  public function setAssociation(CreativeDealAssociation $association)
  {
    $this->association = $association;
  }
  /** @return CreativeDealAssociation */
  public function getAssociation()
  {
    return $this->association;
  }
}

class ResumeProposalDealsRequest extends \Google\Collection
{
  /** @var string[] */
  public $externalDealIds;
  protected $collection_key = 'externalDealIds';
  /** @param string[] */
  public function setExternalDealIds($externalDealIds)
  {
    $this->externalDealIds = $externalDealIds;
  }
  /** @return string[] */
  public function getExternalDealIds()
  {
    return $this->externalDealIds;
  }
}

class ResumeProposalRequest extends \Google\Model
{
}

class RowDimensions extends \Google\Model
{
  /** @var string */
  public $publisherIdentifier;
  /** @var TimeInterval */
  public $timeInterval;
  protected $timeIntervalType = TimeInterval::class;
  protected $timeIntervalDataType = '';
  /** @param string */
  public function setPublisherIdentifier($publisherIdentifier)
  {
    $this->publisherIdentifier = $publisherIdentifier;
  }
  /** @return string */
  public function getPublisherIdentifier()
  {
    return $this->publisherIdentifier;
  }
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
}

class SecurityContext extends \Google\Collection
{
  /** @var string[] */
  public $securities;
  protected $collection_key = 'securities';
  /** @param string[] */
  public function setSecurities($securities)
  {
    $this->securities = $securities;
  }
  /** @return string[] */
  public function getSecurities()
  {
    return $this->securities;
  }
}

class Seller extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $subAccountId;

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
  public function setSubAccountId($subAccountId)
  {
    $this->subAccountId = $subAccountId;
  }
  /** @return string */
  public function getSubAccountId()
  {
    return $this->subAccountId;
  }
}

class ServingContext extends \Google\Model
{
  /** @var string */
  public $all;
  /** @var AppContext */
  public $appType;
  /** @var AuctionContext */
  public $auctionType;
  /** @var LocationContext */
  public $location;
  /** @var PlatformContext */
  public $platform;
  /** @var SecurityContext */
  public $securityType;
  protected $appTypeType = AppContext::class;
  protected $appTypeDataType = '';
  protected $auctionTypeType = AuctionContext::class;
  protected $auctionTypeDataType = '';
  protected $locationType = LocationContext::class;
  protected $locationDataType = '';
  protected $platformType = PlatformContext::class;
  protected $platformDataType = '';
  protected $securityTypeType = SecurityContext::class;
  protected $securityTypeDataType = '';
  /** @param string */
  public function setAll($all)
  {
    $this->all = $all;
  }
  /** @return string */
  public function getAll()
  {
    return $this->all;
  }
  /** @param AppContext */
  public function setAppType(AppContext $appType)
  {
    $this->appType = $appType;
  }
  /** @return AppContext */
  public function getAppType()
  {
    return $this->appType;
  }
  /** @param AuctionContext */
  public function setAuctionType(AuctionContext $auctionType)
  {
    $this->auctionType = $auctionType;
  }
  /** @return AuctionContext */
  public function getAuctionType()
  {
    return $this->auctionType;
  }
  /** @param LocationContext */
  public function setLocation(LocationContext $location)
  {
    $this->location = $location;
  }
  /** @return LocationContext */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param PlatformContext */
  public function setPlatform(PlatformContext $platform)
  {
    $this->platform = $platform;
  }
  /** @return PlatformContext */
  public function getPlatform()
  {
    return $this->platform;
  }
  /** @param SecurityContext */
  public function setSecurityType(SecurityContext $securityType)
  {
    $this->securityType = $securityType;
  }
  /** @return SecurityContext */
  public function getSecurityType()
  {
    return $this->securityType;
  }
}

class ServingRestriction extends \Google\Collection
{
  /** @var ServingContext[] */
  public $contexts;
  /** @var Disapproval */
  public $disapproval;
  /** @var Disapproval[] */
  public $disapprovalReasons;
  /** @var string */
  public $status;
  protected $collection_key = 'disapprovalReasons';
  protected $contextsType = ServingContext::class;
  protected $contextsDataType = 'array';
  protected $disapprovalType = Disapproval::class;
  protected $disapprovalDataType = '';
  protected $disapprovalReasonsType = Disapproval::class;
  protected $disapprovalReasonsDataType = 'array';
  /** @param ServingContext[] */
  public function setContexts($contexts)
  {
    $this->contexts = $contexts;
  }
  /** @return ServingContext[] */
  public function getContexts()
  {
    return $this->contexts;
  }
  /** @param Disapproval */
  public function setDisapproval(Disapproval $disapproval)
  {
    $this->disapproval = $disapproval;
  }
  /** @return Disapproval */
  public function getDisapproval()
  {
    return $this->disapproval;
  }
  /** @param Disapproval[] */
  public function setDisapprovalReasons($disapprovalReasons)
  {
    $this->disapprovalReasons = $disapprovalReasons;
  }
  /** @return Disapproval[] */
  public function getDisapprovalReasons()
  {
    return $this->disapprovalReasons;
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

class Size extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class StopWatchingCreativeRequest extends \Google\Model
{
}

class TargetingCriteria extends \Google\Collection
{
  /** @var TargetingValue[] */
  public $exclusions;
  /** @var TargetingValue[] */
  public $inclusions;
  /** @var string */
  public $key;
  protected $collection_key = 'inclusions';
  protected $exclusionsType = TargetingValue::class;
  protected $exclusionsDataType = 'array';
  protected $inclusionsType = TargetingValue::class;
  protected $inclusionsDataType = 'array';
  /** @param TargetingValue[] */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /** @return TargetingValue[] */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  /** @param TargetingValue[] */
  public function setInclusions($inclusions)
  {
    $this->inclusions = $inclusions;
  }
  /** @return TargetingValue[] */
  public function getInclusions()
  {
    return $this->inclusions;
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
}

class TargetingValue extends \Google\Model
{
  /** @var CreativeSize */
  public $creativeSizeValue;
  /** @var DayPartTargeting */
  public $dayPartTargetingValue;
  /** @var string */
  public $longValue;
  /** @var string */
  public $stringValue;
  protected $creativeSizeValueType = CreativeSize::class;
  protected $creativeSizeValueDataType = '';
  protected $dayPartTargetingValueType = DayPartTargeting::class;
  protected $dayPartTargetingValueDataType = '';
  /** @param CreativeSize */
  public function setCreativeSizeValue(CreativeSize $creativeSizeValue)
  {
    $this->creativeSizeValue = $creativeSizeValue;
  }
  /** @return CreativeSize */
  public function getCreativeSizeValue()
  {
    return $this->creativeSizeValue;
  }
  /** @param DayPartTargeting */
  public function setDayPartTargetingValue(DayPartTargeting $dayPartTargetingValue)
  {
    $this->dayPartTargetingValue = $dayPartTargetingValue;
  }
  /** @return DayPartTargeting */
  public function getDayPartTargetingValue()
  {
    return $this->dayPartTargetingValue;
  }
  /** @param string */
  public function setLongValue($longValue)
  {
    $this->longValue = $longValue;
  }
  /** @return string */
  public function getLongValue()
  {
    return $this->longValue;
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

class TechnologyTargeting extends \Google\Model
{
  /** @var CriteriaTargeting */
  public $deviceCapabilityTargeting;
  /** @var CriteriaTargeting */
  public $deviceCategoryTargeting;
  /** @var OperatingSystemTargeting */
  public $operatingSystemTargeting;
  protected $deviceCapabilityTargetingType = CriteriaTargeting::class;
  protected $deviceCapabilityTargetingDataType = '';
  protected $deviceCategoryTargetingType = CriteriaTargeting::class;
  protected $deviceCategoryTargetingDataType = '';
  protected $operatingSystemTargetingType = OperatingSystemTargeting::class;
  protected $operatingSystemTargetingDataType = '';
  /** @param CriteriaTargeting */
  public function setDeviceCapabilityTargeting(CriteriaTargeting $deviceCapabilityTargeting)
  {
    $this->deviceCapabilityTargeting = $deviceCapabilityTargeting;
  }
  /** @return CriteriaTargeting */
  public function getDeviceCapabilityTargeting()
  {
    return $this->deviceCapabilityTargeting;
  }
  /** @param CriteriaTargeting */
  public function setDeviceCategoryTargeting(CriteriaTargeting $deviceCategoryTargeting)
  {
    $this->deviceCategoryTargeting = $deviceCategoryTargeting;
  }
  /** @return CriteriaTargeting */
  public function getDeviceCategoryTargeting()
  {
    return $this->deviceCategoryTargeting;
  }
  /** @param OperatingSystemTargeting */
  public function setOperatingSystemTargeting(OperatingSystemTargeting $operatingSystemTargeting)
  {
    $this->operatingSystemTargeting = $operatingSystemTargeting;
  }
  /** @return OperatingSystemTargeting */
  public function getOperatingSystemTargeting()
  {
    return $this->operatingSystemTargeting;
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

class UrlTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedUrls;
  /** @var string[] */
  public $targetedUrls;
  protected $collection_key = 'targetedUrls';
  /** @param string[] */
  public function setExcludedUrls($excludedUrls)
  {
    $this->excludedUrls = $excludedUrls;
  }
  /** @return string[] */
  public function getExcludedUrls()
  {
    return $this->excludedUrls;
  }
  /** @param string[] */
  public function setTargetedUrls($targetedUrls)
  {
    $this->targetedUrls = $targetedUrls;
  }
  /** @return string[] */
  public function getTargetedUrls()
  {
    return $this->targetedUrls;
  }
}

class VideoContent extends \Google\Model
{
  /** @var string */
  public $videoUrl;
  /** @var string */
  public $videoVastXml;

  /** @param string */
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  /** @return string */
  public function getVideoUrl()
  {
    return $this->videoUrl;
  }
  /** @param string */
  public function setVideoVastXml($videoVastXml)
  {
    $this->videoVastXml = $videoVastXml;
  }
  /** @return string */
  public function getVideoVastXml()
  {
    return $this->videoVastXml;
  }
}

class VideoTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedPositionTypes;
  /** @var string[] */
  public $targetedPositionTypes;
  protected $collection_key = 'targetedPositionTypes';
  /** @param string[] */
  public function setExcludedPositionTypes($excludedPositionTypes)
  {
    $this->excludedPositionTypes = $excludedPositionTypes;
  }
  /** @return string[] */
  public function getExcludedPositionTypes()
  {
    return $this->excludedPositionTypes;
  }
  /** @param string[] */
  public function setTargetedPositionTypes($targetedPositionTypes)
  {
    $this->targetedPositionTypes = $targetedPositionTypes;
  }
  /** @return string[] */
  public function getTargetedPositionTypes()
  {
    return $this->targetedPositionTypes;
  }
}

class WatchCreativeRequest extends \Google\Model
{
  /** @var string */
  public $topic;

  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbsoluteDateRange::class, 'Google_Service_AdExchangeBuyerII_AbsoluteDateRange');
class_alias(AcceptProposalRequest::class, 'Google_Service_AdExchangeBuyerII_AcceptProposalRequest');
class_alias(AdSize::class, 'Google_Service_AdExchangeBuyerII_AdSize');
class_alias(AdTechnologyProviders::class, 'Google_Service_AdExchangeBuyerII_AdTechnologyProviders');
class_alias(AddDealAssociationRequest::class, 'Google_Service_AdExchangeBuyerII_AddDealAssociationRequest');
class_alias(AddNoteRequest::class, 'Google_Service_AdExchangeBuyerII_AddNoteRequest');
class_alias(Adexchangebuyer2Empty::class, 'Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty');
class_alias(AppContext::class, 'Google_Service_AdExchangeBuyerII_AppContext');
class_alias(AuctionContext::class, 'Google_Service_AdExchangeBuyerII_AuctionContext');
class_alias(BidMetricsRow::class, 'Google_Service_AdExchangeBuyerII_BidMetricsRow');
class_alias(BidResponseWithoutBidsStatusRow::class, 'Google_Service_AdExchangeBuyerII_BidResponseWithoutBidsStatusRow');
class_alias(Buyer::class, 'Google_Service_AdExchangeBuyerII_Buyer');
class_alias(CalloutStatusRow::class, 'Google_Service_AdExchangeBuyerII_CalloutStatusRow');
class_alias(CancelNegotiationRequest::class, 'Google_Service_AdExchangeBuyerII_CancelNegotiationRequest');
class_alias(Client::class, 'Google_Service_AdExchangeBuyerII_Client');
class_alias(ClientUser::class, 'Google_Service_AdExchangeBuyerII_ClientUser');
class_alias(ClientUserInvitation::class, 'Google_Service_AdExchangeBuyerII_ClientUserInvitation');
class_alias(CompleteSetupRequest::class, 'Google_Service_AdExchangeBuyerII_CompleteSetupRequest');
class_alias(ContactInformation::class, 'Google_Service_AdExchangeBuyerII_ContactInformation');
class_alias(Correction::class, 'Google_Service_AdExchangeBuyerII_Correction');
class_alias(Creative::class, 'Google_Service_AdExchangeBuyerII_Creative');
class_alias(CreativeDealAssociation::class, 'Google_Service_AdExchangeBuyerII_CreativeDealAssociation');
class_alias(CreativeRestrictions::class, 'Google_Service_AdExchangeBuyerII_CreativeRestrictions');
class_alias(CreativeSize::class, 'Google_Service_AdExchangeBuyerII_CreativeSize');
class_alias(CreativeSpecification::class, 'Google_Service_AdExchangeBuyerII_CreativeSpecification');
class_alias(CreativeStatusRow::class, 'Google_Service_AdExchangeBuyerII_CreativeStatusRow');
class_alias(CriteriaTargeting::class, 'Google_Service_AdExchangeBuyerII_CriteriaTargeting');
class_alias(Date::class, 'Google_Service_AdExchangeBuyerII_Date');
class_alias(DayPart::class, 'Google_Service_AdExchangeBuyerII_DayPart');
class_alias(DayPartTargeting::class, 'Google_Service_AdExchangeBuyerII_DayPartTargeting');
class_alias(Deal::class, 'Google_Service_AdExchangeBuyerII_Deal');
class_alias(DealPauseStatus::class, 'Google_Service_AdExchangeBuyerII_DealPauseStatus');
class_alias(DealServingMetadata::class, 'Google_Service_AdExchangeBuyerII_DealServingMetadata');
class_alias(DealTerms::class, 'Google_Service_AdExchangeBuyerII_DealTerms');
class_alias(DeliveryControl::class, 'Google_Service_AdExchangeBuyerII_DeliveryControl');
class_alias(Disapproval::class, 'Google_Service_AdExchangeBuyerII_Disapproval');
class_alias(FilterSet::class, 'Google_Service_AdExchangeBuyerII_FilterSet');
class_alias(FilteredBidCreativeRow::class, 'Google_Service_AdExchangeBuyerII_FilteredBidCreativeRow');
class_alias(FilteredBidDetailRow::class, 'Google_Service_AdExchangeBuyerII_FilteredBidDetailRow');
class_alias(FirstPartyMobileApplicationTargeting::class, 'Google_Service_AdExchangeBuyerII_FirstPartyMobileApplicationTargeting');
class_alias(FrequencyCap::class, 'Google_Service_AdExchangeBuyerII_FrequencyCap');
class_alias(GuaranteedFixedPriceTerms::class, 'Google_Service_AdExchangeBuyerII_GuaranteedFixedPriceTerms');
class_alias(HtmlContent::class, 'Google_Service_AdExchangeBuyerII_HtmlContent');
class_alias(Image::class, 'Google_Service_AdExchangeBuyerII_Image');
class_alias(ImpressionMetricsRow::class, 'Google_Service_AdExchangeBuyerII_ImpressionMetricsRow');
class_alias(InventorySizeTargeting::class, 'Google_Service_AdExchangeBuyerII_InventorySizeTargeting');
class_alias(ListBidMetricsResponse::class, 'Google_Service_AdExchangeBuyerII_ListBidMetricsResponse');
class_alias(ListBidResponseErrorsResponse::class, 'Google_Service_AdExchangeBuyerII_ListBidResponseErrorsResponse');
class_alias(ListBidResponsesWithoutBidsResponse::class, 'Google_Service_AdExchangeBuyerII_ListBidResponsesWithoutBidsResponse');
class_alias(ListClientUserInvitationsResponse::class, 'Google_Service_AdExchangeBuyerII_ListClientUserInvitationsResponse');
class_alias(ListClientUsersResponse::class, 'Google_Service_AdExchangeBuyerII_ListClientUsersResponse');
class_alias(ListClientsResponse::class, 'Google_Service_AdExchangeBuyerII_ListClientsResponse');
class_alias(ListCreativeStatusBreakdownByCreativeResponse::class, 'Google_Service_AdExchangeBuyerII_ListCreativeStatusBreakdownByCreativeResponse');
class_alias(ListCreativeStatusBreakdownByDetailResponse::class, 'Google_Service_AdExchangeBuyerII_ListCreativeStatusBreakdownByDetailResponse');
class_alias(ListCreativesResponse::class, 'Google_Service_AdExchangeBuyerII_ListCreativesResponse');
class_alias(ListDealAssociationsResponse::class, 'Google_Service_AdExchangeBuyerII_ListDealAssociationsResponse');
class_alias(ListFilterSetsResponse::class, 'Google_Service_AdExchangeBuyerII_ListFilterSetsResponse');
class_alias(ListFilteredBidRequestsResponse::class, 'Google_Service_AdExchangeBuyerII_ListFilteredBidRequestsResponse');
class_alias(ListFilteredBidsResponse::class, 'Google_Service_AdExchangeBuyerII_ListFilteredBidsResponse');
class_alias(ListImpressionMetricsResponse::class, 'Google_Service_AdExchangeBuyerII_ListImpressionMetricsResponse');
class_alias(ListLosingBidsResponse::class, 'Google_Service_AdExchangeBuyerII_ListLosingBidsResponse');
class_alias(ListNonBillableWinningBidsResponse::class, 'Google_Service_AdExchangeBuyerII_ListNonBillableWinningBidsResponse');
class_alias(ListProductsResponse::class, 'Google_Service_AdExchangeBuyerII_ListProductsResponse');
class_alias(ListProposalsResponse::class, 'Google_Service_AdExchangeBuyerII_ListProposalsResponse');
class_alias(ListPublisherProfilesResponse::class, 'Google_Service_AdExchangeBuyerII_ListPublisherProfilesResponse');
class_alias(LocationContext::class, 'Google_Service_AdExchangeBuyerII_LocationContext');
class_alias(MarketplaceTargeting::class, 'Google_Service_AdExchangeBuyerII_MarketplaceTargeting');
class_alias(MetricValue::class, 'Google_Service_AdExchangeBuyerII_MetricValue');
class_alias(MobileApplicationTargeting::class, 'Google_Service_AdExchangeBuyerII_MobileApplicationTargeting');
class_alias(Money::class, 'Google_Service_AdExchangeBuyerII_Money');
class_alias(NativeContent::class, 'Google_Service_AdExchangeBuyerII_NativeContent');
class_alias(NonBillableWinningBidStatusRow::class, 'Google_Service_AdExchangeBuyerII_NonBillableWinningBidStatusRow');
class_alias(NonGuaranteedAuctionTerms::class, 'Google_Service_AdExchangeBuyerII_NonGuaranteedAuctionTerms');
class_alias(NonGuaranteedFixedPriceTerms::class, 'Google_Service_AdExchangeBuyerII_NonGuaranteedFixedPriceTerms');
class_alias(Note::class, 'Google_Service_AdExchangeBuyerII_Note');
class_alias(OperatingSystemTargeting::class, 'Google_Service_AdExchangeBuyerII_OperatingSystemTargeting');
class_alias(PauseProposalDealsRequest::class, 'Google_Service_AdExchangeBuyerII_PauseProposalDealsRequest');
class_alias(PauseProposalRequest::class, 'Google_Service_AdExchangeBuyerII_PauseProposalRequest');
class_alias(PlacementTargeting::class, 'Google_Service_AdExchangeBuyerII_PlacementTargeting');
class_alias(PlatformContext::class, 'Google_Service_AdExchangeBuyerII_PlatformContext');
class_alias(Price::class, 'Google_Service_AdExchangeBuyerII_Price');
class_alias(PricePerBuyer::class, 'Google_Service_AdExchangeBuyerII_PricePerBuyer');
class_alias(PrivateData::class, 'Google_Service_AdExchangeBuyerII_PrivateData');
class_alias(Product::class, 'Google_Service_AdExchangeBuyerII_Product');
class_alias(Proposal::class, 'Google_Service_AdExchangeBuyerII_Proposal');
class_alias(PublisherProfile::class, 'Google_Service_AdExchangeBuyerII_PublisherProfile');
class_alias(PublisherProfileMobileApplication::class, 'Google_Service_AdExchangeBuyerII_PublisherProfileMobileApplication');
class_alias(RealtimeTimeRange::class, 'Google_Service_AdExchangeBuyerII_RealtimeTimeRange');
class_alias(RelativeDateRange::class, 'Google_Service_AdExchangeBuyerII_RelativeDateRange');
class_alias(RemoveDealAssociationRequest::class, 'Google_Service_AdExchangeBuyerII_RemoveDealAssociationRequest');
class_alias(ResumeProposalDealsRequest::class, 'Google_Service_AdExchangeBuyerII_ResumeProposalDealsRequest');
class_alias(ResumeProposalRequest::class, 'Google_Service_AdExchangeBuyerII_ResumeProposalRequest');
class_alias(RowDimensions::class, 'Google_Service_AdExchangeBuyerII_RowDimensions');
class_alias(SecurityContext::class, 'Google_Service_AdExchangeBuyerII_SecurityContext');
class_alias(Seller::class, 'Google_Service_AdExchangeBuyerII_Seller');
class_alias(ServingContext::class, 'Google_Service_AdExchangeBuyerII_ServingContext');
class_alias(ServingRestriction::class, 'Google_Service_AdExchangeBuyerII_ServingRestriction');
class_alias(Size::class, 'Google_Service_AdExchangeBuyerII_Size');
class_alias(StopWatchingCreativeRequest::class, 'Google_Service_AdExchangeBuyerII_StopWatchingCreativeRequest');
class_alias(TargetingCriteria::class, 'Google_Service_AdExchangeBuyerII_TargetingCriteria');
class_alias(TargetingValue::class, 'Google_Service_AdExchangeBuyerII_TargetingValue');
class_alias(TechnologyTargeting::class, 'Google_Service_AdExchangeBuyerII_TechnologyTargeting');
class_alias(TimeInterval::class, 'Google_Service_AdExchangeBuyerII_TimeInterval');
class_alias(TimeOfDay::class, 'Google_Service_AdExchangeBuyerII_TimeOfDay');
class_alias(UrlTargeting::class, 'Google_Service_AdExchangeBuyerII_UrlTargeting');
class_alias(VideoContent::class, 'Google_Service_AdExchangeBuyerII_VideoContent');
class_alias(VideoTargeting::class, 'Google_Service_AdExchangeBuyerII_VideoTargeting');
class_alias(WatchCreativeRequest::class, 'Google_Service_AdExchangeBuyerII_WatchCreativeRequest');
