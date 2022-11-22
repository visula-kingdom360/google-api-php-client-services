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

namespace Google\Service\SearchConsole;

class AmpInspectionResult extends \Google\Collection
{
  /** @var string */
  public $ampIndexStatusVerdict;
  /** @var string */
  public $ampUrl;
  /** @var string */
  public $indexingState;
  /** @var AmpIssue[] */
  public $issues;
  /** @var string */
  public $lastCrawlTime;
  /** @var string */
  public $pageFetchState;
  /** @var string */
  public $robotsTxtState;
  /** @var string */
  public $verdict;
  protected $collection_key = 'issues';
  protected $issuesType = AmpIssue::class;
  protected $issuesDataType = 'array';
  /** @param string */
  public function setAmpIndexStatusVerdict($ampIndexStatusVerdict)
  {
    $this->ampIndexStatusVerdict = $ampIndexStatusVerdict;
  }
  /** @return string */
  public function getAmpIndexStatusVerdict()
  {
    return $this->ampIndexStatusVerdict;
  }
  /** @param string */
  public function setAmpUrl($ampUrl)
  {
    $this->ampUrl = $ampUrl;
  }
  /** @return string */
  public function getAmpUrl()
  {
    return $this->ampUrl;
  }
  /** @param string */
  public function setIndexingState($indexingState)
  {
    $this->indexingState = $indexingState;
  }
  /** @return string */
  public function getIndexingState()
  {
    return $this->indexingState;
  }
  /** @param AmpIssue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return AmpIssue[] */
  public function getIssues()
  {
    return $this->issues;
  }
  /** @param string */
  public function setLastCrawlTime($lastCrawlTime)
  {
    $this->lastCrawlTime = $lastCrawlTime;
  }
  /** @return string */
  public function getLastCrawlTime()
  {
    return $this->lastCrawlTime;
  }
  /** @param string */
  public function setPageFetchState($pageFetchState)
  {
    $this->pageFetchState = $pageFetchState;
  }
  /** @return string */
  public function getPageFetchState()
  {
    return $this->pageFetchState;
  }
  /** @param string */
  public function setRobotsTxtState($robotsTxtState)
  {
    $this->robotsTxtState = $robotsTxtState;
  }
  /** @return string */
  public function getRobotsTxtState()
  {
    return $this->robotsTxtState;
  }
  /** @param string */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /** @return string */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

class AmpIssue extends \Google\Model
{
  /** @var string */
  public $issueMessage;
  /** @var string */
  public $severity;

  /** @param string */
  public function setIssueMessage($issueMessage)
  {
    $this->issueMessage = $issueMessage;
  }
  /** @return string */
  public function getIssueMessage()
  {
    return $this->issueMessage;
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
}

class ApiDataRow extends \Google\Collection
{
  public $clicks;
  public $ctr;
  public $impressions;
  /** @var string[] */
  public $keys;
  public $position;
  protected $collection_key = 'keys';
  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  public function getClicks()
  {
    return $this->clicks;
  }
  public function setCtr($ctr)
  {
    $this->ctr = $ctr;
  }
  public function getCtr()
  {
    return $this->ctr;
  }
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  public function getImpressions()
  {
    return $this->impressions;
  }
  /** @param string[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return string[] */
  public function getKeys()
  {
    return $this->keys;
  }
  public function setPosition($position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
}

class ApiDimensionFilter extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var string */
  public $expression;
  /** @var string */
  public $operator;

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
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
  }
}

class ApiDimensionFilterGroup extends \Google\Collection
{
  /** @var ApiDimensionFilter[] */
  public $filters;
  /** @var string */
  public $groupType;
  protected $collection_key = 'filters';
  protected $filtersType = ApiDimensionFilter::class;
  protected $filtersDataType = 'array';
  /** @param ApiDimensionFilter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return ApiDimensionFilter[] */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string */
  public function setGroupType($groupType)
  {
    $this->groupType = $groupType;
  }
  /** @return string */
  public function getGroupType()
  {
    return $this->groupType;
  }
}

class BlockedResource extends \Google\Model
{
  /** @var string */
  public $url;

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

class DetectedItems extends \Google\Collection
{
  /** @var Item[] */
  public $items;
  /** @var string */
  public $richResultType;
  protected $collection_key = 'items';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
  /** @param Item[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Item[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setRichResultType($richResultType)
  {
    $this->richResultType = $richResultType;
  }
  /** @return string */
  public function getRichResultType()
  {
    return $this->richResultType;
  }
}

class Image extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $mimeType;

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
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class IndexStatusInspectionResult extends \Google\Collection
{
  /** @var string */
  public $coverageState;
  /** @var string */
  public $crawledAs;
  /** @var string */
  public $googleCanonical;
  /** @var string */
  public $indexingState;
  /** @var string */
  public $lastCrawlTime;
  /** @var string */
  public $pageFetchState;
  /** @var string[] */
  public $referringUrls;
  /** @var string */
  public $robotsTxtState;
  /** @var string[] */
  public $sitemap;
  /** @var string */
  public $userCanonical;
  /** @var string */
  public $verdict;
  protected $collection_key = 'sitemap';
  /** @param string */
  public function setCoverageState($coverageState)
  {
    $this->coverageState = $coverageState;
  }
  /** @return string */
  public function getCoverageState()
  {
    return $this->coverageState;
  }
  /** @param string */
  public function setCrawledAs($crawledAs)
  {
    $this->crawledAs = $crawledAs;
  }
  /** @return string */
  public function getCrawledAs()
  {
    return $this->crawledAs;
  }
  /** @param string */
  public function setGoogleCanonical($googleCanonical)
  {
    $this->googleCanonical = $googleCanonical;
  }
  /** @return string */
  public function getGoogleCanonical()
  {
    return $this->googleCanonical;
  }
  /** @param string */
  public function setIndexingState($indexingState)
  {
    $this->indexingState = $indexingState;
  }
  /** @return string */
  public function getIndexingState()
  {
    return $this->indexingState;
  }
  /** @param string */
  public function setLastCrawlTime($lastCrawlTime)
  {
    $this->lastCrawlTime = $lastCrawlTime;
  }
  /** @return string */
  public function getLastCrawlTime()
  {
    return $this->lastCrawlTime;
  }
  /** @param string */
  public function setPageFetchState($pageFetchState)
  {
    $this->pageFetchState = $pageFetchState;
  }
  /** @return string */
  public function getPageFetchState()
  {
    return $this->pageFetchState;
  }
  /** @param string[] */
  public function setReferringUrls($referringUrls)
  {
    $this->referringUrls = $referringUrls;
  }
  /** @return string[] */
  public function getReferringUrls()
  {
    return $this->referringUrls;
  }
  /** @param string */
  public function setRobotsTxtState($robotsTxtState)
  {
    $this->robotsTxtState = $robotsTxtState;
  }
  /** @return string */
  public function getRobotsTxtState()
  {
    return $this->robotsTxtState;
  }
  /** @param string[] */
  public function setSitemap($sitemap)
  {
    $this->sitemap = $sitemap;
  }
  /** @return string[] */
  public function getSitemap()
  {
    return $this->sitemap;
  }
  /** @param string */
  public function setUserCanonical($userCanonical)
  {
    $this->userCanonical = $userCanonical;
  }
  /** @return string */
  public function getUserCanonical()
  {
    return $this->userCanonical;
  }
  /** @param string */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /** @return string */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

class InspectUrlIndexRequest extends \Google\Model
{
  /** @var string */
  public $inspectionUrl;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $siteUrl;

  /** @param string */
  public function setInspectionUrl($inspectionUrl)
  {
    $this->inspectionUrl = $inspectionUrl;
  }
  /** @return string */
  public function getInspectionUrl()
  {
    return $this->inspectionUrl;
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
  public function setSiteUrl($siteUrl)
  {
    $this->siteUrl = $siteUrl;
  }
  /** @return string */
  public function getSiteUrl()
  {
    return $this->siteUrl;
  }
}

class InspectUrlIndexResponse extends \Google\Model
{
  /** @var UrlInspectionResult */
  public $inspectionResult;
  protected $inspectionResultType = UrlInspectionResult::class;
  protected $inspectionResultDataType = '';
  /** @param UrlInspectionResult */
  public function setInspectionResult(UrlInspectionResult $inspectionResult)
  {
    $this->inspectionResult = $inspectionResult;
  }
  /** @return UrlInspectionResult */
  public function getInspectionResult()
  {
    return $this->inspectionResult;
  }
}

class Item extends \Google\Collection
{
  /** @var RichResultsIssue[] */
  public $issues;
  /** @var string */
  public $name;
  protected $collection_key = 'issues';
  protected $issuesType = RichResultsIssue::class;
  protected $issuesDataType = 'array';
  /** @param RichResultsIssue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return RichResultsIssue[] */
  public function getIssues()
  {
    return $this->issues;
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

class MobileFriendlyIssue extends \Google\Model
{
  /** @var string */
  public $rule;

  /** @param string */
  public function setRule($rule)
  {
    $this->rule = $rule;
  }
  /** @return string */
  public function getRule()
  {
    return $this->rule;
  }
}

class MobileUsabilityInspectionResult extends \Google\Collection
{
  /** @var MobileUsabilityIssue[] */
  public $issues;
  /** @var string */
  public $verdict;
  protected $collection_key = 'issues';
  protected $issuesType = MobileUsabilityIssue::class;
  protected $issuesDataType = 'array';
  /** @param MobileUsabilityIssue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return MobileUsabilityIssue[] */
  public function getIssues()
  {
    return $this->issues;
  }
  /** @param string */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /** @return string */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

class MobileUsabilityIssue extends \Google\Model
{
  /** @var string */
  public $issueType;
  /** @var string */
  public $message;
  /** @var string */
  public $severity;

  /** @param string */
  public function setIssueType($issueType)
  {
    $this->issueType = $issueType;
  }
  /** @return string */
  public function getIssueType()
  {
    return $this->issueType;
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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
}

class ResourceIssue extends \Google\Model
{
  /** @var BlockedResource */
  public $blockedResource;
  protected $blockedResourceType = BlockedResource::class;
  protected $blockedResourceDataType = '';
  /** @param BlockedResource */
  public function setBlockedResource(BlockedResource $blockedResource)
  {
    $this->blockedResource = $blockedResource;
  }
  /** @return BlockedResource */
  public function getBlockedResource()
  {
    return $this->blockedResource;
  }
}

class RichResultsInspectionResult extends \Google\Collection
{
  /** @var DetectedItems[] */
  public $detectedItems;
  /** @var string */
  public $verdict;
  protected $collection_key = 'detectedItems';
  protected $detectedItemsType = DetectedItems::class;
  protected $detectedItemsDataType = 'array';
  /** @param DetectedItems[] */
  public function setDetectedItems($detectedItems)
  {
    $this->detectedItems = $detectedItems;
  }
  /** @return DetectedItems[] */
  public function getDetectedItems()
  {
    return $this->detectedItems;
  }
  /** @param string */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /** @return string */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

class RichResultsIssue extends \Google\Model
{
  /** @var string */
  public $issueMessage;
  /** @var string */
  public $severity;

  /** @param string */
  public function setIssueMessage($issueMessage)
  {
    $this->issueMessage = $issueMessage;
  }
  /** @return string */
  public function getIssueMessage()
  {
    return $this->issueMessage;
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
}

class RunMobileFriendlyTestRequest extends \Google\Model
{
  /** @var bool */
  public $requestScreenshot;
  /** @var string */
  public $url;

  /** @param bool */
  public function setRequestScreenshot($requestScreenshot)
  {
    $this->requestScreenshot = $requestScreenshot;
  }
  /** @return bool */
  public function getRequestScreenshot()
  {
    return $this->requestScreenshot;
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

class RunMobileFriendlyTestResponse extends \Google\Collection
{
  /** @var string */
  public $mobileFriendliness;
  /** @var MobileFriendlyIssue[] */
  public $mobileFriendlyIssues;
  /** @var ResourceIssue[] */
  public $resourceIssues;
  /** @var Image */
  public $screenshot;
  /** @var TestStatus */
  public $testStatus;
  protected $collection_key = 'resourceIssues';
  protected $mobileFriendlyIssuesType = MobileFriendlyIssue::class;
  protected $mobileFriendlyIssuesDataType = 'array';
  protected $resourceIssuesType = ResourceIssue::class;
  protected $resourceIssuesDataType = 'array';
  protected $screenshotType = Image::class;
  protected $screenshotDataType = '';
  protected $testStatusType = TestStatus::class;
  protected $testStatusDataType = '';
  /** @param string */
  public function setMobileFriendliness($mobileFriendliness)
  {
    $this->mobileFriendliness = $mobileFriendliness;
  }
  /** @return string */
  public function getMobileFriendliness()
  {
    return $this->mobileFriendliness;
  }
  /** @param MobileFriendlyIssue[] */
  public function setMobileFriendlyIssues($mobileFriendlyIssues)
  {
    $this->mobileFriendlyIssues = $mobileFriendlyIssues;
  }
  /** @return MobileFriendlyIssue[] */
  public function getMobileFriendlyIssues()
  {
    return $this->mobileFriendlyIssues;
  }
  /** @param ResourceIssue[] */
  public function setResourceIssues($resourceIssues)
  {
    $this->resourceIssues = $resourceIssues;
  }
  /** @return ResourceIssue[] */
  public function getResourceIssues()
  {
    return $this->resourceIssues;
  }
  /** @param Image */
  public function setScreenshot(Image $screenshot)
  {
    $this->screenshot = $screenshot;
  }
  /** @return Image */
  public function getScreenshot()
  {
    return $this->screenshot;
  }
  /** @param TestStatus */
  public function setTestStatus(TestStatus $testStatus)
  {
    $this->testStatus = $testStatus;
  }
  /** @return TestStatus */
  public function getTestStatus()
  {
    return $this->testStatus;
  }
}

class SearchAnalyticsQueryRequest extends \Google\Collection
{
  /** @var string */
  public $aggregationType;
  /** @var string */
  public $dataState;
  /** @var ApiDimensionFilterGroup[] */
  public $dimensionFilterGroups;
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $endDate;
  /** @var int */
  public $rowLimit;
  /** @var string */
  public $searchType;
  /** @var string */
  public $startDate;
  /** @var int */
  public $startRow;
  /** @var string */
  public $type;
  protected $collection_key = 'dimensions';
  protected $dimensionFilterGroupsType = ApiDimensionFilterGroup::class;
  protected $dimensionFilterGroupsDataType = 'array';
  /** @param string */
  public function setAggregationType($aggregationType)
  {
    $this->aggregationType = $aggregationType;
  }
  /** @return string */
  public function getAggregationType()
  {
    return $this->aggregationType;
  }
  /** @param string */
  public function setDataState($dataState)
  {
    $this->dataState = $dataState;
  }
  /** @return string */
  public function getDataState()
  {
    return $this->dataState;
  }
  /** @param ApiDimensionFilterGroup[] */
  public function setDimensionFilterGroups($dimensionFilterGroups)
  {
    $this->dimensionFilterGroups = $dimensionFilterGroups;
  }
  /** @return ApiDimensionFilterGroup[] */
  public function getDimensionFilterGroups()
  {
    return $this->dimensionFilterGroups;
  }
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
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
  /** @param int */
  public function setRowLimit($rowLimit)
  {
    $this->rowLimit = $rowLimit;
  }
  /** @return int */
  public function getRowLimit()
  {
    return $this->rowLimit;
  }
  /** @param string */
  public function setSearchType($searchType)
  {
    $this->searchType = $searchType;
  }
  /** @return string */
  public function getSearchType()
  {
    return $this->searchType;
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
  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }
  /** @return int */
  public function getStartRow()
  {
    return $this->startRow;
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

class SearchAnalyticsQueryResponse extends \Google\Collection
{
  /** @var string */
  public $responseAggregationType;
  /** @var ApiDataRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = ApiDataRow::class;
  protected $rowsDataType = 'array';
  /** @param string */
  public function setResponseAggregationType($responseAggregationType)
  {
    $this->responseAggregationType = $responseAggregationType;
  }
  /** @return string */
  public function getResponseAggregationType()
  {
    return $this->responseAggregationType;
  }
  /** @param ApiDataRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return ApiDataRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class SitemapsListResponse extends \Google\Collection
{
  /** @var WmxSitemap[] */
  public $sitemap;
  protected $collection_key = 'sitemap';
  protected $sitemapType = WmxSitemap::class;
  protected $sitemapDataType = 'array';
  /** @param WmxSitemap[] */
  public function setSitemap($sitemap)
  {
    $this->sitemap = $sitemap;
  }
  /** @return WmxSitemap[] */
  public function getSitemap()
  {
    return $this->sitemap;
  }
}

class SitesListResponse extends \Google\Collection
{
  /** @var WmxSite[] */
  public $siteEntry;
  protected $collection_key = 'siteEntry';
  protected $siteEntryType = WmxSite::class;
  protected $siteEntryDataType = 'array';
  /** @param WmxSite[] */
  public function setSiteEntry($siteEntry)
  {
    $this->siteEntry = $siteEntry;
  }
  /** @return WmxSite[] */
  public function getSiteEntry()
  {
    return $this->siteEntry;
  }
}

class TestStatus extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $status;

  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
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

class UrlInspectionResult extends \Google\Model
{
  /** @var AmpInspectionResult */
  public $ampResult;
  /** @var IndexStatusInspectionResult */
  public $indexStatusResult;
  /** @var string */
  public $inspectionResultLink;
  /** @var MobileUsabilityInspectionResult */
  public $mobileUsabilityResult;
  /** @var RichResultsInspectionResult */
  public $richResultsResult;
  protected $ampResultType = AmpInspectionResult::class;
  protected $ampResultDataType = '';
  protected $indexStatusResultType = IndexStatusInspectionResult::class;
  protected $indexStatusResultDataType = '';
  protected $mobileUsabilityResultType = MobileUsabilityInspectionResult::class;
  protected $mobileUsabilityResultDataType = '';
  protected $richResultsResultType = RichResultsInspectionResult::class;
  protected $richResultsResultDataType = '';
  /** @param AmpInspectionResult */
  public function setAmpResult(AmpInspectionResult $ampResult)
  {
    $this->ampResult = $ampResult;
  }
  /** @return AmpInspectionResult */
  public function getAmpResult()
  {
    return $this->ampResult;
  }
  /** @param IndexStatusInspectionResult */
  public function setIndexStatusResult(IndexStatusInspectionResult $indexStatusResult)
  {
    $this->indexStatusResult = $indexStatusResult;
  }
  /** @return IndexStatusInspectionResult */
  public function getIndexStatusResult()
  {
    return $this->indexStatusResult;
  }
  /** @param string */
  public function setInspectionResultLink($inspectionResultLink)
  {
    $this->inspectionResultLink = $inspectionResultLink;
  }
  /** @return string */
  public function getInspectionResultLink()
  {
    return $this->inspectionResultLink;
  }
  /** @param MobileUsabilityInspectionResult */
  public function setMobileUsabilityResult(MobileUsabilityInspectionResult $mobileUsabilityResult)
  {
    $this->mobileUsabilityResult = $mobileUsabilityResult;
  }
  /** @return MobileUsabilityInspectionResult */
  public function getMobileUsabilityResult()
  {
    return $this->mobileUsabilityResult;
  }
  /** @param RichResultsInspectionResult */
  public function setRichResultsResult(RichResultsInspectionResult $richResultsResult)
  {
    $this->richResultsResult = $richResultsResult;
  }
  /** @return RichResultsInspectionResult */
  public function getRichResultsResult()
  {
    return $this->richResultsResult;
  }
}

class WmxSite extends \Google\Model
{
  /** @var string */
  public $permissionLevel;
  /** @var string */
  public $siteUrl;

  /** @param string */
  public function setPermissionLevel($permissionLevel)
  {
    $this->permissionLevel = $permissionLevel;
  }
  /** @return string */
  public function getPermissionLevel()
  {
    return $this->permissionLevel;
  }
  /** @param string */
  public function setSiteUrl($siteUrl)
  {
    $this->siteUrl = $siteUrl;
  }
  /** @return string */
  public function getSiteUrl()
  {
    return $this->siteUrl;
  }
}

class WmxSitemap extends \Google\Collection
{
  /** @var WmxSitemapContent[] */
  public $contents;
  /** @var string */
  public $errors;
  /** @var bool */
  public $isPending;
  /** @var bool */
  public $isSitemapsIndex;
  /** @var string */
  public $lastDownloaded;
  /** @var string */
  public $lastSubmitted;
  /** @var string */
  public $path;
  /** @var string */
  public $type;
  /** @var string */
  public $warnings;
  protected $collection_key = 'contents';
  protected $contentsType = WmxSitemapContent::class;
  protected $contentsDataType = 'array';
  /** @param WmxSitemapContent[] */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return WmxSitemapContent[] */
  public function getContents()
  {
    return $this->contents;
  }
  /** @param string */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return string */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param bool */
  public function setIsPending($isPending)
  {
    $this->isPending = $isPending;
  }
  /** @return bool */
  public function getIsPending()
  {
    return $this->isPending;
  }
  /** @param bool */
  public function setIsSitemapsIndex($isSitemapsIndex)
  {
    $this->isSitemapsIndex = $isSitemapsIndex;
  }
  /** @return bool */
  public function getIsSitemapsIndex()
  {
    return $this->isSitemapsIndex;
  }
  /** @param string */
  public function setLastDownloaded($lastDownloaded)
  {
    $this->lastDownloaded = $lastDownloaded;
  }
  /** @return string */
  public function getLastDownloaded()
  {
    return $this->lastDownloaded;
  }
  /** @param string */
  public function setLastSubmitted($lastSubmitted)
  {
    $this->lastSubmitted = $lastSubmitted;
  }
  /** @return string */
  public function getLastSubmitted()
  {
    return $this->lastSubmitted;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
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
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class WmxSitemapContent extends \Google\Model
{
  /** @var string */
  public $indexed;
  /** @var string */
  public $submitted;
  /** @var string */
  public $type;

  /** @param string */
  public function setIndexed($indexed)
  {
    $this->indexed = $indexed;
  }
  /** @return string */
  public function getIndexed()
  {
    return $this->indexed;
  }
  /** @param string */
  public function setSubmitted($submitted)
  {
    $this->submitted = $submitted;
  }
  /** @return string */
  public function getSubmitted()
  {
    return $this->submitted;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AmpInspectionResult::class, 'Google_Service_SearchConsole_AmpInspectionResult');
class_alias(AmpIssue::class, 'Google_Service_SearchConsole_AmpIssue');
class_alias(ApiDataRow::class, 'Google_Service_SearchConsole_ApiDataRow');
class_alias(ApiDimensionFilter::class, 'Google_Service_SearchConsole_ApiDimensionFilter');
class_alias(ApiDimensionFilterGroup::class, 'Google_Service_SearchConsole_ApiDimensionFilterGroup');
class_alias(BlockedResource::class, 'Google_Service_SearchConsole_BlockedResource');
class_alias(DetectedItems::class, 'Google_Service_SearchConsole_DetectedItems');
class_alias(Image::class, 'Google_Service_SearchConsole_Image');
class_alias(IndexStatusInspectionResult::class, 'Google_Service_SearchConsole_IndexStatusInspectionResult');
class_alias(InspectUrlIndexRequest::class, 'Google_Service_SearchConsole_InspectUrlIndexRequest');
class_alias(InspectUrlIndexResponse::class, 'Google_Service_SearchConsole_InspectUrlIndexResponse');
class_alias(Item::class, 'Google_Service_SearchConsole_Item');
class_alias(MobileFriendlyIssue::class, 'Google_Service_SearchConsole_MobileFriendlyIssue');
class_alias(MobileUsabilityInspectionResult::class, 'Google_Service_SearchConsole_MobileUsabilityInspectionResult');
class_alias(MobileUsabilityIssue::class, 'Google_Service_SearchConsole_MobileUsabilityIssue');
class_alias(ResourceIssue::class, 'Google_Service_SearchConsole_ResourceIssue');
class_alias(RichResultsInspectionResult::class, 'Google_Service_SearchConsole_RichResultsInspectionResult');
class_alias(RichResultsIssue::class, 'Google_Service_SearchConsole_RichResultsIssue');
class_alias(RunMobileFriendlyTestRequest::class, 'Google_Service_SearchConsole_RunMobileFriendlyTestRequest');
class_alias(RunMobileFriendlyTestResponse::class, 'Google_Service_SearchConsole_RunMobileFriendlyTestResponse');
class_alias(SearchAnalyticsQueryRequest::class, 'Google_Service_SearchConsole_SearchAnalyticsQueryRequest');
class_alias(SearchAnalyticsQueryResponse::class, 'Google_Service_SearchConsole_SearchAnalyticsQueryResponse');
class_alias(SitemapsListResponse::class, 'Google_Service_SearchConsole_SitemapsListResponse');
class_alias(SitesListResponse::class, 'Google_Service_SearchConsole_SitesListResponse');
class_alias(TestStatus::class, 'Google_Service_SearchConsole_TestStatus');
class_alias(UrlInspectionResult::class, 'Google_Service_SearchConsole_UrlInspectionResult');
class_alias(WmxSite::class, 'Google_Service_SearchConsole_WmxSite');
class_alias(WmxSitemap::class, 'Google_Service_SearchConsole_WmxSitemap');
class_alias(WmxSitemapContent::class, 'Google_Service_SearchConsole_WmxSitemapContent');
