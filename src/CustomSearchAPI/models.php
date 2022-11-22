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

namespace Google\Service\CustomSearchAPI;

class Promotion extends \Google\Collection
{
  /** @var PromotionBodyLines[] */
  public $bodyLines;
  /** @var string */
  public $displayLink;
  /** @var string */
  public $htmlTitle;
  /** @var PromotionImage */
  public $image;
  /** @var string */
  public $link;
  /** @var string */
  public $title;
  protected $collection_key = 'bodyLines';
  protected $bodyLinesType = PromotionBodyLines::class;
  protected $bodyLinesDataType = 'array';
  protected $imageType = PromotionImage::class;
  protected $imageDataType = '';
  /** @param PromotionBodyLines[] */
  public function setBodyLines($bodyLines)
  {
    $this->bodyLines = $bodyLines;
  }
  /** @return PromotionBodyLines[] */
  public function getBodyLines()
  {
    return $this->bodyLines;
  }
  /** @param string */
  public function setDisplayLink($displayLink)
  {
    $this->displayLink = $displayLink;
  }
  /** @return string */
  public function getDisplayLink()
  {
    return $this->displayLink;
  }
  /** @param string */
  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }
  /** @return string */
  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }
  /** @param PromotionImage */
  public function setImage(PromotionImage $image)
  {
    $this->image = $image;
  }
  /** @return PromotionImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
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

class PromotionBodyLines extends \Google\Model
{
  /** @var string */
  public $htmlTitle;
  /** @var string */
  public $link;
  /** @var string */
  public $title;
  /** @var string */
  public $url;

  /** @param string */
  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }
  /** @return string */
  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
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

class PromotionImage extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $source;
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

class Result extends \Google\Collection
{
  /** @var string */
  public $cacheId;
  /** @var string */
  public $displayLink;
  /** @var string */
  public $fileFormat;
  /** @var string */
  public $formattedUrl;
  /** @var string */
  public $htmlFormattedUrl;
  /** @var string */
  public $htmlSnippet;
  /** @var string */
  public $htmlTitle;
  /** @var ResultImage */
  public $image;
  /** @var string */
  public $kind;
  /** @var ResultLabels[] */
  public $labels;
  /** @var string */
  public $link;
  /** @var string */
  public $mime;
  /** @var array[] */
  public $pagemap;
  /** @var string */
  public $snippet;
  /** @var string */
  public $title;
  protected $collection_key = 'labels';
  protected $imageType = ResultImage::class;
  protected $imageDataType = '';
  protected $labelsType = ResultLabels::class;
  protected $labelsDataType = 'array';
  /** @param string */
  public function setCacheId($cacheId)
  {
    $this->cacheId = $cacheId;
  }
  /** @return string */
  public function getCacheId()
  {
    return $this->cacheId;
  }
  /** @param string */
  public function setDisplayLink($displayLink)
  {
    $this->displayLink = $displayLink;
  }
  /** @return string */
  public function getDisplayLink()
  {
    return $this->displayLink;
  }
  /** @param string */
  public function setFileFormat($fileFormat)
  {
    $this->fileFormat = $fileFormat;
  }
  /** @return string */
  public function getFileFormat()
  {
    return $this->fileFormat;
  }
  /** @param string */
  public function setFormattedUrl($formattedUrl)
  {
    $this->formattedUrl = $formattedUrl;
  }
  /** @return string */
  public function getFormattedUrl()
  {
    return $this->formattedUrl;
  }
  /** @param string */
  public function setHtmlFormattedUrl($htmlFormattedUrl)
  {
    $this->htmlFormattedUrl = $htmlFormattedUrl;
  }
  /** @return string */
  public function getHtmlFormattedUrl()
  {
    return $this->htmlFormattedUrl;
  }
  /** @param string */
  public function setHtmlSnippet($htmlSnippet)
  {
    $this->htmlSnippet = $htmlSnippet;
  }
  /** @return string */
  public function getHtmlSnippet()
  {
    return $this->htmlSnippet;
  }
  /** @param string */
  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }
  /** @return string */
  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }
  /** @param ResultImage */
  public function setImage(ResultImage $image)
  {
    $this->image = $image;
  }
  /** @return ResultImage */
  public function getImage()
  {
    return $this->image;
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
  /** @param ResultLabels[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return ResultLabels[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
  /** @param string */
  public function setMime($mime)
  {
    $this->mime = $mime;
  }
  /** @return string */
  public function getMime()
  {
    return $this->mime;
  }
  /** @param array[] */
  public function setPagemap($pagemap)
  {
    $this->pagemap = $pagemap;
  }
  /** @return array[] */
  public function getPagemap()
  {
    return $this->pagemap;
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

class ResultImage extends \Google\Model
{
  /** @var int */
  public $byteSize;
  /** @var string */
  public $contextLink;
  /** @var int */
  public $height;
  /** @var int */
  public $thumbnailHeight;
  /** @var string */
  public $thumbnailLink;
  /** @var int */
  public $thumbnailWidth;
  /** @var int */
  public $width;

  /** @param int */
  public function setByteSize($byteSize)
  {
    $this->byteSize = $byteSize;
  }
  /** @return int */
  public function getByteSize()
  {
    return $this->byteSize;
  }
  /** @param string */
  public function setContextLink($contextLink)
  {
    $this->contextLink = $contextLink;
  }
  /** @return string */
  public function getContextLink()
  {
    return $this->contextLink;
  }
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
  public function setThumbnailHeight($thumbnailHeight)
  {
    $this->thumbnailHeight = $thumbnailHeight;
  }
  /** @return int */
  public function getThumbnailHeight()
  {
    return $this->thumbnailHeight;
  }
  /** @param string */
  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }
  /** @return string */
  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
  }
  /** @param int */
  public function setThumbnailWidth($thumbnailWidth)
  {
    $this->thumbnailWidth = $thumbnailWidth;
  }
  /** @return int */
  public function getThumbnailWidth()
  {
    return $this->thumbnailWidth;
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

class ResultLabels extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $labelWithOp;
  /** @var string */
  public $name;
  protected $internal_gapi_mappings = [
        "labelWithOp" => "label_with_op",
  ];
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
  public function setLabelWithOp($labelWithOp)
  {
    $this->labelWithOp = $labelWithOp;
  }
  /** @return string */
  public function getLabelWithOp()
  {
    return $this->labelWithOp;
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

class Search extends \Google\Collection
{
  /** @var array[] */
  public $context;
  /** @var Result[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var Promotion[] */
  public $promotions;
  /** @var SearchQueries */
  public $queries;
  /** @var SearchSearchInformation */
  public $searchInformation;
  /** @var SearchSpelling */
  public $spelling;
  /** @var SearchUrl */
  public $url;
  protected $collection_key = 'promotions';
  protected $itemsType = Result::class;
  protected $itemsDataType = 'array';
  protected $promotionsType = Promotion::class;
  protected $promotionsDataType = 'array';
  protected $queriesType = SearchQueries::class;
  protected $queriesDataType = '';
  protected $searchInformationType = SearchSearchInformation::class;
  protected $searchInformationDataType = '';
  protected $spellingType = SearchSpelling::class;
  protected $spellingDataType = '';
  protected $urlType = SearchUrl::class;
  protected $urlDataType = '';
  /** @param array[] */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return array[] */
  public function getContext()
  {
    return $this->context;
  }
  /** @param Result[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Result[] */
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
  /** @param Promotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return Promotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /** @param SearchQueries */
  public function setQueries(SearchQueries $queries)
  {
    $this->queries = $queries;
  }
  /** @return SearchQueries */
  public function getQueries()
  {
    return $this->queries;
  }
  /** @param SearchSearchInformation */
  public function setSearchInformation(SearchSearchInformation $searchInformation)
  {
    $this->searchInformation = $searchInformation;
  }
  /** @return SearchSearchInformation */
  public function getSearchInformation()
  {
    return $this->searchInformation;
  }
  /** @param SearchSpelling */
  public function setSpelling(SearchSpelling $spelling)
  {
    $this->spelling = $spelling;
  }
  /** @return SearchSpelling */
  public function getSpelling()
  {
    return $this->spelling;
  }
  /** @param SearchUrl */
  public function setUrl(SearchUrl $url)
  {
    $this->url = $url;
  }
  /** @return SearchUrl */
  public function getUrl()
  {
    return $this->url;
  }
}

class SearchQueries extends \Google\Collection
{
  /** @var SearchQueriesNextPage[] */
  public $nextPage;
  /** @var SearchQueriesPreviousPage[] */
  public $previousPage;
  /** @var SearchQueriesRequest[] */
  public $request;
  protected $collection_key = 'request';
  protected $nextPageType = SearchQueriesNextPage::class;
  protected $nextPageDataType = 'array';
  protected $previousPageType = SearchQueriesPreviousPage::class;
  protected $previousPageDataType = 'array';
  protected $requestType = SearchQueriesRequest::class;
  protected $requestDataType = 'array';
  /** @param SearchQueriesNextPage[] */
  public function setNextPage($nextPage)
  {
    $this->nextPage = $nextPage;
  }
  /** @return SearchQueriesNextPage[] */
  public function getNextPage()
  {
    return $this->nextPage;
  }
  /** @param SearchQueriesPreviousPage[] */
  public function setPreviousPage($previousPage)
  {
    $this->previousPage = $previousPage;
  }
  /** @return SearchQueriesPreviousPage[] */
  public function getPreviousPage()
  {
    return $this->previousPage;
  }
  /** @param SearchQueriesRequest[] */
  public function setRequest($request)
  {
    $this->request = $request;
  }
  /** @return SearchQueriesRequest[] */
  public function getRequest()
  {
    return $this->request;
  }
}

class SearchQueriesNextPage extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $cr;
  /** @var string */
  public $cx;
  /** @var string */
  public $dateRestrict;
  /** @var string */
  public $disableCnTwTranslation;
  /** @var string */
  public $exactTerms;
  /** @var string */
  public $excludeTerms;
  /** @var string */
  public $fileType;
  /** @var string */
  public $filter;
  /** @var string */
  public $gl;
  /** @var string */
  public $googleHost;
  /** @var string */
  public $highRange;
  /** @var string */
  public $hl;
  /** @var string */
  public $hq;
  /** @var string */
  public $imgColorType;
  /** @var string */
  public $imgDominantColor;
  /** @var string */
  public $imgSize;
  /** @var string */
  public $imgType;
  /** @var string */
  public $inputEncoding;
  /** @var string */
  public $language;
  /** @var string */
  public $linkSite;
  /** @var string */
  public $lowRange;
  /** @var string */
  public $orTerms;
  /** @var string */
  public $outputEncoding;
  /** @var string */
  public $relatedSite;
  /** @var string */
  public $rights;
  /** @var string */
  public $safe;
  /** @var string */
  public $searchTerms;
  /** @var string */
  public $searchType;
  /** @var string */
  public $siteSearch;
  /** @var string */
  public $siteSearchFilter;
  /** @var string */
  public $sort;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $startPage;
  /** @var string */
  public $title;
  /** @var string */
  public $totalResults;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setCr($cr)
  {
    $this->cr = $cr;
  }
  /** @return string */
  public function getCr()
  {
    return $this->cr;
  }
  /** @param string */
  public function setCx($cx)
  {
    $this->cx = $cx;
  }
  /** @return string */
  public function getCx()
  {
    return $this->cx;
  }
  /** @param string */
  public function setDateRestrict($dateRestrict)
  {
    $this->dateRestrict = $dateRestrict;
  }
  /** @return string */
  public function getDateRestrict()
  {
    return $this->dateRestrict;
  }
  /** @param string */
  public function setDisableCnTwTranslation($disableCnTwTranslation)
  {
    $this->disableCnTwTranslation = $disableCnTwTranslation;
  }
  /** @return string */
  public function getDisableCnTwTranslation()
  {
    return $this->disableCnTwTranslation;
  }
  /** @param string */
  public function setExactTerms($exactTerms)
  {
    $this->exactTerms = $exactTerms;
  }
  /** @return string */
  public function getExactTerms()
  {
    return $this->exactTerms;
  }
  /** @param string */
  public function setExcludeTerms($excludeTerms)
  {
    $this->excludeTerms = $excludeTerms;
  }
  /** @return string */
  public function getExcludeTerms()
  {
    return $this->excludeTerms;
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
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
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
  public function setGoogleHost($googleHost)
  {
    $this->googleHost = $googleHost;
  }
  /** @return string */
  public function getGoogleHost()
  {
    return $this->googleHost;
  }
  /** @param string */
  public function setHighRange($highRange)
  {
    $this->highRange = $highRange;
  }
  /** @return string */
  public function getHighRange()
  {
    return $this->highRange;
  }
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
  public function setHq($hq)
  {
    $this->hq = $hq;
  }
  /** @return string */
  public function getHq()
  {
    return $this->hq;
  }
  /** @param string */
  public function setImgColorType($imgColorType)
  {
    $this->imgColorType = $imgColorType;
  }
  /** @return string */
  public function getImgColorType()
  {
    return $this->imgColorType;
  }
  /** @param string */
  public function setImgDominantColor($imgDominantColor)
  {
    $this->imgDominantColor = $imgDominantColor;
  }
  /** @return string */
  public function getImgDominantColor()
  {
    return $this->imgDominantColor;
  }
  /** @param string */
  public function setImgSize($imgSize)
  {
    $this->imgSize = $imgSize;
  }
  /** @return string */
  public function getImgSize()
  {
    return $this->imgSize;
  }
  /** @param string */
  public function setImgType($imgType)
  {
    $this->imgType = $imgType;
  }
  /** @return string */
  public function getImgType()
  {
    return $this->imgType;
  }
  /** @param string */
  public function setInputEncoding($inputEncoding)
  {
    $this->inputEncoding = $inputEncoding;
  }
  /** @return string */
  public function getInputEncoding()
  {
    return $this->inputEncoding;
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
  public function setLinkSite($linkSite)
  {
    $this->linkSite = $linkSite;
  }
  /** @return string */
  public function getLinkSite()
  {
    return $this->linkSite;
  }
  /** @param string */
  public function setLowRange($lowRange)
  {
    $this->lowRange = $lowRange;
  }
  /** @return string */
  public function getLowRange()
  {
    return $this->lowRange;
  }
  /** @param string */
  public function setOrTerms($orTerms)
  {
    $this->orTerms = $orTerms;
  }
  /** @return string */
  public function getOrTerms()
  {
    return $this->orTerms;
  }
  /** @param string */
  public function setOutputEncoding($outputEncoding)
  {
    $this->outputEncoding = $outputEncoding;
  }
  /** @return string */
  public function getOutputEncoding()
  {
    return $this->outputEncoding;
  }
  /** @param string */
  public function setRelatedSite($relatedSite)
  {
    $this->relatedSite = $relatedSite;
  }
  /** @return string */
  public function getRelatedSite()
  {
    return $this->relatedSite;
  }
  /** @param string */
  public function setRights($rights)
  {
    $this->rights = $rights;
  }
  /** @return string */
  public function getRights()
  {
    return $this->rights;
  }
  /** @param string */
  public function setSafe($safe)
  {
    $this->safe = $safe;
  }
  /** @return string */
  public function getSafe()
  {
    return $this->safe;
  }
  /** @param string */
  public function setSearchTerms($searchTerms)
  {
    $this->searchTerms = $searchTerms;
  }
  /** @return string */
  public function getSearchTerms()
  {
    return $this->searchTerms;
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
  public function setSiteSearch($siteSearch)
  {
    $this->siteSearch = $siteSearch;
  }
  /** @return string */
  public function getSiteSearch()
  {
    return $this->siteSearch;
  }
  /** @param string */
  public function setSiteSearchFilter($siteSearchFilter)
  {
    $this->siteSearchFilter = $siteSearchFilter;
  }
  /** @return string */
  public function getSiteSearchFilter()
  {
    return $this->siteSearchFilter;
  }
  /** @param string */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string */
  public function getSort()
  {
    return $this->sort;
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
  public function setStartPage($startPage)
  {
    $this->startPage = $startPage;
  }
  /** @return int */
  public function getStartPage()
  {
    return $this->startPage;
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
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return string */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class SearchQueriesPreviousPage extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $cr;
  /** @var string */
  public $cx;
  /** @var string */
  public $dateRestrict;
  /** @var string */
  public $disableCnTwTranslation;
  /** @var string */
  public $exactTerms;
  /** @var string */
  public $excludeTerms;
  /** @var string */
  public $fileType;
  /** @var string */
  public $filter;
  /** @var string */
  public $gl;
  /** @var string */
  public $googleHost;
  /** @var string */
  public $highRange;
  /** @var string */
  public $hl;
  /** @var string */
  public $hq;
  /** @var string */
  public $imgColorType;
  /** @var string */
  public $imgDominantColor;
  /** @var string */
  public $imgSize;
  /** @var string */
  public $imgType;
  /** @var string */
  public $inputEncoding;
  /** @var string */
  public $language;
  /** @var string */
  public $linkSite;
  /** @var string */
  public $lowRange;
  /** @var string */
  public $orTerms;
  /** @var string */
  public $outputEncoding;
  /** @var string */
  public $relatedSite;
  /** @var string */
  public $rights;
  /** @var string */
  public $safe;
  /** @var string */
  public $searchTerms;
  /** @var string */
  public $searchType;
  /** @var string */
  public $siteSearch;
  /** @var string */
  public $siteSearchFilter;
  /** @var string */
  public $sort;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $startPage;
  /** @var string */
  public $title;
  /** @var string */
  public $totalResults;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setCr($cr)
  {
    $this->cr = $cr;
  }
  /** @return string */
  public function getCr()
  {
    return $this->cr;
  }
  /** @param string */
  public function setCx($cx)
  {
    $this->cx = $cx;
  }
  /** @return string */
  public function getCx()
  {
    return $this->cx;
  }
  /** @param string */
  public function setDateRestrict($dateRestrict)
  {
    $this->dateRestrict = $dateRestrict;
  }
  /** @return string */
  public function getDateRestrict()
  {
    return $this->dateRestrict;
  }
  /** @param string */
  public function setDisableCnTwTranslation($disableCnTwTranslation)
  {
    $this->disableCnTwTranslation = $disableCnTwTranslation;
  }
  /** @return string */
  public function getDisableCnTwTranslation()
  {
    return $this->disableCnTwTranslation;
  }
  /** @param string */
  public function setExactTerms($exactTerms)
  {
    $this->exactTerms = $exactTerms;
  }
  /** @return string */
  public function getExactTerms()
  {
    return $this->exactTerms;
  }
  /** @param string */
  public function setExcludeTerms($excludeTerms)
  {
    $this->excludeTerms = $excludeTerms;
  }
  /** @return string */
  public function getExcludeTerms()
  {
    return $this->excludeTerms;
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
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
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
  public function setGoogleHost($googleHost)
  {
    $this->googleHost = $googleHost;
  }
  /** @return string */
  public function getGoogleHost()
  {
    return $this->googleHost;
  }
  /** @param string */
  public function setHighRange($highRange)
  {
    $this->highRange = $highRange;
  }
  /** @return string */
  public function getHighRange()
  {
    return $this->highRange;
  }
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
  public function setHq($hq)
  {
    $this->hq = $hq;
  }
  /** @return string */
  public function getHq()
  {
    return $this->hq;
  }
  /** @param string */
  public function setImgColorType($imgColorType)
  {
    $this->imgColorType = $imgColorType;
  }
  /** @return string */
  public function getImgColorType()
  {
    return $this->imgColorType;
  }
  /** @param string */
  public function setImgDominantColor($imgDominantColor)
  {
    $this->imgDominantColor = $imgDominantColor;
  }
  /** @return string */
  public function getImgDominantColor()
  {
    return $this->imgDominantColor;
  }
  /** @param string */
  public function setImgSize($imgSize)
  {
    $this->imgSize = $imgSize;
  }
  /** @return string */
  public function getImgSize()
  {
    return $this->imgSize;
  }
  /** @param string */
  public function setImgType($imgType)
  {
    $this->imgType = $imgType;
  }
  /** @return string */
  public function getImgType()
  {
    return $this->imgType;
  }
  /** @param string */
  public function setInputEncoding($inputEncoding)
  {
    $this->inputEncoding = $inputEncoding;
  }
  /** @return string */
  public function getInputEncoding()
  {
    return $this->inputEncoding;
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
  public function setLinkSite($linkSite)
  {
    $this->linkSite = $linkSite;
  }
  /** @return string */
  public function getLinkSite()
  {
    return $this->linkSite;
  }
  /** @param string */
  public function setLowRange($lowRange)
  {
    $this->lowRange = $lowRange;
  }
  /** @return string */
  public function getLowRange()
  {
    return $this->lowRange;
  }
  /** @param string */
  public function setOrTerms($orTerms)
  {
    $this->orTerms = $orTerms;
  }
  /** @return string */
  public function getOrTerms()
  {
    return $this->orTerms;
  }
  /** @param string */
  public function setOutputEncoding($outputEncoding)
  {
    $this->outputEncoding = $outputEncoding;
  }
  /** @return string */
  public function getOutputEncoding()
  {
    return $this->outputEncoding;
  }
  /** @param string */
  public function setRelatedSite($relatedSite)
  {
    $this->relatedSite = $relatedSite;
  }
  /** @return string */
  public function getRelatedSite()
  {
    return $this->relatedSite;
  }
  /** @param string */
  public function setRights($rights)
  {
    $this->rights = $rights;
  }
  /** @return string */
  public function getRights()
  {
    return $this->rights;
  }
  /** @param string */
  public function setSafe($safe)
  {
    $this->safe = $safe;
  }
  /** @return string */
  public function getSafe()
  {
    return $this->safe;
  }
  /** @param string */
  public function setSearchTerms($searchTerms)
  {
    $this->searchTerms = $searchTerms;
  }
  /** @return string */
  public function getSearchTerms()
  {
    return $this->searchTerms;
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
  public function setSiteSearch($siteSearch)
  {
    $this->siteSearch = $siteSearch;
  }
  /** @return string */
  public function getSiteSearch()
  {
    return $this->siteSearch;
  }
  /** @param string */
  public function setSiteSearchFilter($siteSearchFilter)
  {
    $this->siteSearchFilter = $siteSearchFilter;
  }
  /** @return string */
  public function getSiteSearchFilter()
  {
    return $this->siteSearchFilter;
  }
  /** @param string */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string */
  public function getSort()
  {
    return $this->sort;
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
  public function setStartPage($startPage)
  {
    $this->startPage = $startPage;
  }
  /** @return int */
  public function getStartPage()
  {
    return $this->startPage;
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
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return string */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class SearchQueriesRequest extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $cr;
  /** @var string */
  public $cx;
  /** @var string */
  public $dateRestrict;
  /** @var string */
  public $disableCnTwTranslation;
  /** @var string */
  public $exactTerms;
  /** @var string */
  public $excludeTerms;
  /** @var string */
  public $fileType;
  /** @var string */
  public $filter;
  /** @var string */
  public $gl;
  /** @var string */
  public $googleHost;
  /** @var string */
  public $highRange;
  /** @var string */
  public $hl;
  /** @var string */
  public $hq;
  /** @var string */
  public $imgColorType;
  /** @var string */
  public $imgDominantColor;
  /** @var string */
  public $imgSize;
  /** @var string */
  public $imgType;
  /** @var string */
  public $inputEncoding;
  /** @var string */
  public $language;
  /** @var string */
  public $linkSite;
  /** @var string */
  public $lowRange;
  /** @var string */
  public $orTerms;
  /** @var string */
  public $outputEncoding;
  /** @var string */
  public $relatedSite;
  /** @var string */
  public $rights;
  /** @var string */
  public $safe;
  /** @var string */
  public $searchTerms;
  /** @var string */
  public $searchType;
  /** @var string */
  public $siteSearch;
  /** @var string */
  public $siteSearchFilter;
  /** @var string */
  public $sort;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $startPage;
  /** @var string */
  public $title;
  /** @var string */
  public $totalResults;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setCr($cr)
  {
    $this->cr = $cr;
  }
  /** @return string */
  public function getCr()
  {
    return $this->cr;
  }
  /** @param string */
  public function setCx($cx)
  {
    $this->cx = $cx;
  }
  /** @return string */
  public function getCx()
  {
    return $this->cx;
  }
  /** @param string */
  public function setDateRestrict($dateRestrict)
  {
    $this->dateRestrict = $dateRestrict;
  }
  /** @return string */
  public function getDateRestrict()
  {
    return $this->dateRestrict;
  }
  /** @param string */
  public function setDisableCnTwTranslation($disableCnTwTranslation)
  {
    $this->disableCnTwTranslation = $disableCnTwTranslation;
  }
  /** @return string */
  public function getDisableCnTwTranslation()
  {
    return $this->disableCnTwTranslation;
  }
  /** @param string */
  public function setExactTerms($exactTerms)
  {
    $this->exactTerms = $exactTerms;
  }
  /** @return string */
  public function getExactTerms()
  {
    return $this->exactTerms;
  }
  /** @param string */
  public function setExcludeTerms($excludeTerms)
  {
    $this->excludeTerms = $excludeTerms;
  }
  /** @return string */
  public function getExcludeTerms()
  {
    return $this->excludeTerms;
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
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
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
  public function setGoogleHost($googleHost)
  {
    $this->googleHost = $googleHost;
  }
  /** @return string */
  public function getGoogleHost()
  {
    return $this->googleHost;
  }
  /** @param string */
  public function setHighRange($highRange)
  {
    $this->highRange = $highRange;
  }
  /** @return string */
  public function getHighRange()
  {
    return $this->highRange;
  }
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
  public function setHq($hq)
  {
    $this->hq = $hq;
  }
  /** @return string */
  public function getHq()
  {
    return $this->hq;
  }
  /** @param string */
  public function setImgColorType($imgColorType)
  {
    $this->imgColorType = $imgColorType;
  }
  /** @return string */
  public function getImgColorType()
  {
    return $this->imgColorType;
  }
  /** @param string */
  public function setImgDominantColor($imgDominantColor)
  {
    $this->imgDominantColor = $imgDominantColor;
  }
  /** @return string */
  public function getImgDominantColor()
  {
    return $this->imgDominantColor;
  }
  /** @param string */
  public function setImgSize($imgSize)
  {
    $this->imgSize = $imgSize;
  }
  /** @return string */
  public function getImgSize()
  {
    return $this->imgSize;
  }
  /** @param string */
  public function setImgType($imgType)
  {
    $this->imgType = $imgType;
  }
  /** @return string */
  public function getImgType()
  {
    return $this->imgType;
  }
  /** @param string */
  public function setInputEncoding($inputEncoding)
  {
    $this->inputEncoding = $inputEncoding;
  }
  /** @return string */
  public function getInputEncoding()
  {
    return $this->inputEncoding;
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
  public function setLinkSite($linkSite)
  {
    $this->linkSite = $linkSite;
  }
  /** @return string */
  public function getLinkSite()
  {
    return $this->linkSite;
  }
  /** @param string */
  public function setLowRange($lowRange)
  {
    $this->lowRange = $lowRange;
  }
  /** @return string */
  public function getLowRange()
  {
    return $this->lowRange;
  }
  /** @param string */
  public function setOrTerms($orTerms)
  {
    $this->orTerms = $orTerms;
  }
  /** @return string */
  public function getOrTerms()
  {
    return $this->orTerms;
  }
  /** @param string */
  public function setOutputEncoding($outputEncoding)
  {
    $this->outputEncoding = $outputEncoding;
  }
  /** @return string */
  public function getOutputEncoding()
  {
    return $this->outputEncoding;
  }
  /** @param string */
  public function setRelatedSite($relatedSite)
  {
    $this->relatedSite = $relatedSite;
  }
  /** @return string */
  public function getRelatedSite()
  {
    return $this->relatedSite;
  }
  /** @param string */
  public function setRights($rights)
  {
    $this->rights = $rights;
  }
  /** @return string */
  public function getRights()
  {
    return $this->rights;
  }
  /** @param string */
  public function setSafe($safe)
  {
    $this->safe = $safe;
  }
  /** @return string */
  public function getSafe()
  {
    return $this->safe;
  }
  /** @param string */
  public function setSearchTerms($searchTerms)
  {
    $this->searchTerms = $searchTerms;
  }
  /** @return string */
  public function getSearchTerms()
  {
    return $this->searchTerms;
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
  public function setSiteSearch($siteSearch)
  {
    $this->siteSearch = $siteSearch;
  }
  /** @return string */
  public function getSiteSearch()
  {
    return $this->siteSearch;
  }
  /** @param string */
  public function setSiteSearchFilter($siteSearchFilter)
  {
    $this->siteSearchFilter = $siteSearchFilter;
  }
  /** @return string */
  public function getSiteSearchFilter()
  {
    return $this->siteSearchFilter;
  }
  /** @param string */
  public function setSort($sort)
  {
    $this->sort = $sort;
  }
  /** @return string */
  public function getSort()
  {
    return $this->sort;
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
  public function setStartPage($startPage)
  {
    $this->startPage = $startPage;
  }
  /** @return int */
  public function getStartPage()
  {
    return $this->startPage;
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
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return string */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class SearchSearchInformation extends \Google\Model
{
  /** @var string */
  public $formattedSearchTime;
  /** @var string */
  public $formattedTotalResults;
  public $searchTime;
  /** @var string */
  public $totalResults;

  /** @param string */
  public function setFormattedSearchTime($formattedSearchTime)
  {
    $this->formattedSearchTime = $formattedSearchTime;
  }
  /** @return string */
  public function getFormattedSearchTime()
  {
    return $this->formattedSearchTime;
  }
  /** @param string */
  public function setFormattedTotalResults($formattedTotalResults)
  {
    $this->formattedTotalResults = $formattedTotalResults;
  }
  /** @return string */
  public function getFormattedTotalResults()
  {
    return $this->formattedTotalResults;
  }
  public function setSearchTime($searchTime)
  {
    $this->searchTime = $searchTime;
  }
  public function getSearchTime()
  {
    return $this->searchTime;
  }
  /** @param string */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return string */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class SearchSpelling extends \Google\Model
{
  /** @var string */
  public $correctedQuery;
  /** @var string */
  public $htmlCorrectedQuery;

  /** @param string */
  public function setCorrectedQuery($correctedQuery)
  {
    $this->correctedQuery = $correctedQuery;
  }
  /** @return string */
  public function getCorrectedQuery()
  {
    return $this->correctedQuery;
  }
  /** @param string */
  public function setHtmlCorrectedQuery($htmlCorrectedQuery)
  {
    $this->htmlCorrectedQuery = $htmlCorrectedQuery;
  }
  /** @return string */
  public function getHtmlCorrectedQuery()
  {
    return $this->htmlCorrectedQuery;
  }
}

class SearchUrl extends \Google\Model
{
  /** @var string */
  public $template;
  /** @var string */
  public $type;

  /** @param string */
  public function setTemplate($template)
  {
    $this->template = $template;
  }
  /** @return string */
  public function getTemplate()
  {
    return $this->template;
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
class_alias(Promotion::class, 'Google_Service_CustomSearchAPI_Promotion');
class_alias(PromotionBodyLines::class, 'Google_Service_CustomSearchAPI_PromotionBodyLines');
class_alias(PromotionImage::class, 'Google_Service_CustomSearchAPI_PromotionImage');
class_alias(Result::class, 'Google_Service_CustomSearchAPI_Result');
class_alias(ResultImage::class, 'Google_Service_CustomSearchAPI_ResultImage');
class_alias(ResultLabels::class, 'Google_Service_CustomSearchAPI_ResultLabels');
class_alias(Search::class, 'Google_Service_CustomSearchAPI_Search');
class_alias(SearchQueries::class, 'Google_Service_CustomSearchAPI_SearchQueries');
class_alias(SearchQueriesNextPage::class, 'Google_Service_CustomSearchAPI_SearchQueriesNextPage');
class_alias(SearchQueriesPreviousPage::class, 'Google_Service_CustomSearchAPI_SearchQueriesPreviousPage');
class_alias(SearchQueriesRequest::class, 'Google_Service_CustomSearchAPI_SearchQueriesRequest');
class_alias(SearchSearchInformation::class, 'Google_Service_CustomSearchAPI_SearchSearchInformation');
class_alias(SearchSpelling::class, 'Google_Service_CustomSearchAPI_SearchSpelling');
class_alias(SearchUrl::class, 'Google_Service_CustomSearchAPI_SearchUrl');
