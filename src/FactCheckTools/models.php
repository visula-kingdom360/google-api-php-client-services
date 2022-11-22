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

namespace Google\Service\FactCheckTools;

class GoogleFactcheckingFactchecktoolsV1alpha1Claim extends \Google\Collection
{
  /** @var string */
  public $claimDate;
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview[] */
  public $claimReview;
  /** @var string */
  public $claimant;
  /** @var string */
  public $text;
  protected $collection_key = 'claimReview';
  protected $claimReviewType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview::class;
  protected $claimReviewDataType = 'array';
  /** @param string */
  public function setClaimDate($claimDate)
  {
    $this->claimDate = $claimDate;
  }
  /** @return string */
  public function getClaimDate()
  {
    return $this->claimDate;
  }
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview[] */
  public function setClaimReview($claimReview)
  {
    $this->claimReview = $claimReview;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview[] */
  public function getClaimReview()
  {
    return $this->claimReview;
  }
  /** @param string */
  public function setClaimant($claimant)
  {
    $this->claimant = $claimant;
  }
  /** @return string */
  public function getClaimant()
  {
    return $this->claimant;
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

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor extends \Google\Model
{
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $jobTitle;
  /** @var string */
  public $name;
  /** @var string */
  public $sameAs;

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
  public function setJobTitle($jobTitle)
  {
    $this->jobTitle = $jobTitle;
  }
  /** @return string */
  public function getJobTitle()
  {
    return $this->jobTitle;
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
  public function setSameAs($sameAs)
  {
    $this->sameAs = $sameAs;
  }
  /** @return string */
  public function getSameAs()
  {
    return $this->sameAs;
  }
}

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating extends \Google\Model
{
  /** @var int */
  public $bestRating;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $ratingExplanation;
  /** @var int */
  public $ratingValue;
  /** @var string */
  public $textualRating;
  /** @var int */
  public $worstRating;

  /** @param int */
  public function setBestRating($bestRating)
  {
    $this->bestRating = $bestRating;
  }
  /** @return int */
  public function getBestRating()
  {
    return $this->bestRating;
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
  public function setRatingExplanation($ratingExplanation)
  {
    $this->ratingExplanation = $ratingExplanation;
  }
  /** @return string */
  public function getRatingExplanation()
  {
    return $this->ratingExplanation;
  }
  /** @param int */
  public function setRatingValue($ratingValue)
  {
    $this->ratingValue = $ratingValue;
  }
  /** @return int */
  public function getRatingValue()
  {
    return $this->ratingValue;
  }
  /** @param string */
  public function setTextualRating($textualRating)
  {
    $this->textualRating = $textualRating;
  }
  /** @return string */
  public function getTextualRating()
  {
    return $this->textualRating;
  }
  /** @param int */
  public function setWorstRating($worstRating)
  {
    $this->worstRating = $worstRating;
  }
  /** @return int */
  public function getWorstRating()
  {
    return $this->worstRating;
  }
}

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1Publisher */
  public $publisher;
  /** @var string */
  public $reviewDate;
  /** @var string */
  public $textualRating;
  /** @var string */
  public $title;
  /** @var string */
  public $url;
  protected $publisherType = GoogleFactcheckingFactchecktoolsV1alpha1Publisher::class;
  protected $publisherDataType = '';
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
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1Publisher */
  public function setPublisher(GoogleFactcheckingFactchecktoolsV1alpha1Publisher $publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1Publisher */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param string */
  public function setReviewDate($reviewDate)
  {
    $this->reviewDate = $reviewDate;
  }
  /** @return string */
  public function getReviewDate()
  {
    return $this->reviewDate;
  }
  /** @param string */
  public function setTextualRating($textualRating)
  {
    $this->textualRating = $textualRating;
  }
  /** @return string */
  public function getTextualRating()
  {
    return $this->textualRating;
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

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor extends \Google\Model
{
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $name;

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

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup extends \Google\Collection
{
  /** @var string[] */
  public $claimAppearances;
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor */
  public $claimAuthor;
  /** @var string */
  public $claimDate;
  /** @var string */
  public $claimFirstAppearance;
  /** @var string */
  public $claimLocation;
  /** @var string */
  public $claimReviewed;
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating */
  public $rating;
  /** @var string */
  public $url;
  protected $collection_key = 'claimAppearances';
  protected $claimAuthorType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor::class;
  protected $claimAuthorDataType = '';
  protected $ratingType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating::class;
  protected $ratingDataType = '';
  /** @param string[] */
  public function setClaimAppearances($claimAppearances)
  {
    $this->claimAppearances = $claimAppearances;
  }
  /** @return string[] */
  public function getClaimAppearances()
  {
    return $this->claimAppearances;
  }
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor */
  public function setClaimAuthor(GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor $claimAuthor)
  {
    $this->claimAuthor = $claimAuthor;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor */
  public function getClaimAuthor()
  {
    return $this->claimAuthor;
  }
  /** @param string */
  public function setClaimDate($claimDate)
  {
    $this->claimDate = $claimDate;
  }
  /** @return string */
  public function getClaimDate()
  {
    return $this->claimDate;
  }
  /** @param string */
  public function setClaimFirstAppearance($claimFirstAppearance)
  {
    $this->claimFirstAppearance = $claimFirstAppearance;
  }
  /** @return string */
  public function getClaimFirstAppearance()
  {
    return $this->claimFirstAppearance;
  }
  /** @param string */
  public function setClaimLocation($claimLocation)
  {
    $this->claimLocation = $claimLocation;
  }
  /** @return string */
  public function getClaimLocation()
  {
    return $this->claimLocation;
  }
  /** @param string */
  public function setClaimReviewed($claimReviewed)
  {
    $this->claimReviewed = $claimReviewed;
  }
  /** @return string */
  public function getClaimReviewed()
  {
    return $this->claimReviewed;
  }
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating */
  public function setRating(GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating $rating)
  {
    $this->rating = $rating;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating */
  public function getRating()
  {
    return $this->rating;
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

class GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage extends \Google\Collection
{
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor */
  public $claimReviewAuthor;
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup[] */
  public $claimReviewMarkups;
  /** @var string */
  public $name;
  /** @var string */
  public $pageUrl;
  /** @var string */
  public $publishDate;
  /** @var string */
  public $versionId;
  protected $collection_key = 'claimReviewMarkups';
  protected $claimReviewAuthorType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor::class;
  protected $claimReviewAuthorDataType = '';
  protected $claimReviewMarkupsType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup::class;
  protected $claimReviewMarkupsDataType = 'array';
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor */
  public function setClaimReviewAuthor(GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor $claimReviewAuthor)
  {
    $this->claimReviewAuthor = $claimReviewAuthor;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor */
  public function getClaimReviewAuthor()
  {
    return $this->claimReviewAuthor;
  }
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup[] */
  public function setClaimReviewMarkups($claimReviewMarkups)
  {
    $this->claimReviewMarkups = $claimReviewMarkups;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup[] */
  public function getClaimReviewMarkups()
  {
    return $this->claimReviewMarkups;
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
  public function setPageUrl($pageUrl)
  {
    $this->pageUrl = $pageUrl;
  }
  /** @return string */
  public function getPageUrl()
  {
    return $this->pageUrl;
  }
  /** @param string */
  public function setPublishDate($publishDate)
  {
    $this->publishDate = $publishDate;
  }
  /** @return string */
  public function getPublishDate()
  {
    return $this->publishDate;
  }
  /** @param string */
  public function setVersionId($versionId)
  {
    $this->versionId = $versionId;
  }
  /** @return string */
  public function getVersionId()
  {
    return $this->versionId;
  }
}

class GoogleFactcheckingFactchecktoolsV1alpha1FactCheckedClaimSearchResponse extends \Google\Collection
{
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1Claim[] */
  public $claims;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'claims';
  protected $claimsType = GoogleFactcheckingFactchecktoolsV1alpha1Claim::class;
  protected $claimsDataType = 'array';
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1Claim[] */
  public function setClaims($claims)
  {
    $this->claims = $claims;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1Claim[] */
  public function getClaims()
  {
    return $this->claims;
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

class GoogleFactcheckingFactchecktoolsV1alpha1ListClaimReviewMarkupPagesResponse extends \Google\Collection
{
  /** @var GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage[] */
  public $claimReviewMarkupPages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'claimReviewMarkupPages';
  protected $claimReviewMarkupPagesType = GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage::class;
  protected $claimReviewMarkupPagesDataType = 'array';
  /** @param GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage[] */
  public function setClaimReviewMarkupPages($claimReviewMarkupPages)
  {
    $this->claimReviewMarkupPages = $claimReviewMarkupPages;
  }
  /** @return GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage[] */
  public function getClaimReviewMarkupPages()
  {
    return $this->claimReviewMarkupPages;
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

class GoogleFactcheckingFactchecktoolsV1alpha1Publisher extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $site;

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
  public function setSite($site)
  {
    $this->site = $site;
  }
  /** @return string */
  public function getSite()
  {
    return $this->site;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1Claim::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1Claim');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimAuthor');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimRating');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimReview');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewAuthor');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkup');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ClaimReviewMarkupPage');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1FactCheckedClaimSearchResponse::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1FactCheckedClaimSearchResponse');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1ListClaimReviewMarkupPagesResponse::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1ListClaimReviewMarkupPagesResponse');
class_alias(GoogleFactcheckingFactchecktoolsV1alpha1Publisher::class, 'Google_Service_FactCheckTools_GoogleFactcheckingFactchecktoolsV1alpha1Publisher');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_FactCheckTools_GoogleProtobufEmpty');
