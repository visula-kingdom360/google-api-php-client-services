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

namespace Google\Service\GamesConfiguration;

class AchievementConfiguration extends \Google\Model
{
  /** @var string */
  public $achievementType;
  /** @var AchievementConfigurationDetail */
  public $draft;
  /** @var string */
  public $id;
  /** @var string */
  public $initialState;
  /** @var string */
  public $kind;
  /** @var AchievementConfigurationDetail */
  public $published;
  /** @var int */
  public $stepsToUnlock;
  /** @var string */
  public $token;
  protected $draftType = AchievementConfigurationDetail::class;
  protected $draftDataType = '';
  protected $publishedType = AchievementConfigurationDetail::class;
  protected $publishedDataType = '';
  /** @param string */
  public function setAchievementType($achievementType)
  {
    $this->achievementType = $achievementType;
  }
  /** @return string */
  public function getAchievementType()
  {
    return $this->achievementType;
  }
  /** @param AchievementConfigurationDetail */
  public function setDraft(AchievementConfigurationDetail $draft)
  {
    $this->draft = $draft;
  }
  /** @return AchievementConfigurationDetail */
  public function getDraft()
  {
    return $this->draft;
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
  public function setInitialState($initialState)
  {
    $this->initialState = $initialState;
  }
  /** @return string */
  public function getInitialState()
  {
    return $this->initialState;
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
  /** @param AchievementConfigurationDetail */
  public function setPublished(AchievementConfigurationDetail $published)
  {
    $this->published = $published;
  }
  /** @return AchievementConfigurationDetail */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param int */
  public function setStepsToUnlock($stepsToUnlock)
  {
    $this->stepsToUnlock = $stepsToUnlock;
  }
  /** @return int */
  public function getStepsToUnlock()
  {
    return $this->stepsToUnlock;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
}

class AchievementConfigurationDetail extends \Google\Model
{
  /** @var LocalizedStringBundle */
  public $description;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $kind;
  /** @var LocalizedStringBundle */
  public $name;
  /** @var int */
  public $pointValue;
  /** @var int */
  public $sortRank;
  protected $descriptionType = LocalizedStringBundle::class;
  protected $descriptionDataType = '';
  protected $nameType = LocalizedStringBundle::class;
  protected $nameDataType = '';
  /** @param LocalizedStringBundle */
  public function setDescription(LocalizedStringBundle $description)
  {
    $this->description = $description;
  }
  /** @return LocalizedStringBundle */
  public function getDescription()
  {
    return $this->description;
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
  /** @param LocalizedStringBundle */
  public function setName(LocalizedStringBundle $name)
  {
    $this->name = $name;
  }
  /** @return LocalizedStringBundle */
  public function getName()
  {
    return $this->name;
  }
  /** @param int */
  public function setPointValue($pointValue)
  {
    $this->pointValue = $pointValue;
  }
  /** @return int */
  public function getPointValue()
  {
    return $this->pointValue;
  }
  /** @param int */
  public function setSortRank($sortRank)
  {
    $this->sortRank = $sortRank;
  }
  /** @return int */
  public function getSortRank()
  {
    return $this->sortRank;
  }
}

class AchievementConfigurationListResponse extends \Google\Collection
{
  /** @var AchievementConfiguration[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = AchievementConfiguration::class;
  protected $itemsDataType = 'array';
  /** @param AchievementConfiguration[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AchievementConfiguration[] */
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

class GamesNumberAffixConfiguration extends \Google\Model
{
  /** @var LocalizedStringBundle */
  public $few;
  /** @var LocalizedStringBundle */
  public $many;
  /** @var LocalizedStringBundle */
  public $one;
  /** @var LocalizedStringBundle */
  public $other;
  /** @var LocalizedStringBundle */
  public $two;
  /** @var LocalizedStringBundle */
  public $zero;
  protected $fewType = LocalizedStringBundle::class;
  protected $fewDataType = '';
  protected $manyType = LocalizedStringBundle::class;
  protected $manyDataType = '';
  protected $oneType = LocalizedStringBundle::class;
  protected $oneDataType = '';
  protected $otherType = LocalizedStringBundle::class;
  protected $otherDataType = '';
  protected $twoType = LocalizedStringBundle::class;
  protected $twoDataType = '';
  protected $zeroType = LocalizedStringBundle::class;
  protected $zeroDataType = '';
  /** @param LocalizedStringBundle */
  public function setFew(LocalizedStringBundle $few)
  {
    $this->few = $few;
  }
  /** @return LocalizedStringBundle */
  public function getFew()
  {
    return $this->few;
  }
  /** @param LocalizedStringBundle */
  public function setMany(LocalizedStringBundle $many)
  {
    $this->many = $many;
  }
  /** @return LocalizedStringBundle */
  public function getMany()
  {
    return $this->many;
  }
  /** @param LocalizedStringBundle */
  public function setOne(LocalizedStringBundle $one)
  {
    $this->one = $one;
  }
  /** @return LocalizedStringBundle */
  public function getOne()
  {
    return $this->one;
  }
  /** @param LocalizedStringBundle */
  public function setOther(LocalizedStringBundle $other)
  {
    $this->other = $other;
  }
  /** @return LocalizedStringBundle */
  public function getOther()
  {
    return $this->other;
  }
  /** @param LocalizedStringBundle */
  public function setTwo(LocalizedStringBundle $two)
  {
    $this->two = $two;
  }
  /** @return LocalizedStringBundle */
  public function getTwo()
  {
    return $this->two;
  }
  /** @param LocalizedStringBundle */
  public function setZero(LocalizedStringBundle $zero)
  {
    $this->zero = $zero;
  }
  /** @return LocalizedStringBundle */
  public function getZero()
  {
    return $this->zero;
  }
}

class GamesNumberFormatConfiguration extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $numDecimalPlaces;
  /** @var string */
  public $numberFormatType;
  /** @var GamesNumberAffixConfiguration */
  public $suffix;
  protected $suffixType = GamesNumberAffixConfiguration::class;
  protected $suffixDataType = '';
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
  public function setNumDecimalPlaces($numDecimalPlaces)
  {
    $this->numDecimalPlaces = $numDecimalPlaces;
  }
  /** @return int */
  public function getNumDecimalPlaces()
  {
    return $this->numDecimalPlaces;
  }
  /** @param string */
  public function setNumberFormatType($numberFormatType)
  {
    $this->numberFormatType = $numberFormatType;
  }
  /** @return string */
  public function getNumberFormatType()
  {
    return $this->numberFormatType;
  }
  /** @param GamesNumberAffixConfiguration */
  public function setSuffix(GamesNumberAffixConfiguration $suffix)
  {
    $this->suffix = $suffix;
  }
  /** @return GamesNumberAffixConfiguration */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

class ImageConfiguration extends \Google\Model
{
  /** @var string */
  public $imageType;
  /** @var string */
  public $kind;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $url;

  /** @param string */
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
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
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
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

class LeaderboardConfiguration extends \Google\Model
{
  /** @var LeaderboardConfigurationDetail */
  public $draft;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LeaderboardConfigurationDetail */
  public $published;
  /** @var string */
  public $scoreMax;
  /** @var string */
  public $scoreMin;
  /** @var string */
  public $scoreOrder;
  /** @var string */
  public $token;
  protected $draftType = LeaderboardConfigurationDetail::class;
  protected $draftDataType = '';
  protected $publishedType = LeaderboardConfigurationDetail::class;
  protected $publishedDataType = '';
  /** @param LeaderboardConfigurationDetail */
  public function setDraft(LeaderboardConfigurationDetail $draft)
  {
    $this->draft = $draft;
  }
  /** @return LeaderboardConfigurationDetail */
  public function getDraft()
  {
    return $this->draft;
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
  /** @param LeaderboardConfigurationDetail */
  public function setPublished(LeaderboardConfigurationDetail $published)
  {
    $this->published = $published;
  }
  /** @return LeaderboardConfigurationDetail */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setScoreMax($scoreMax)
  {
    $this->scoreMax = $scoreMax;
  }
  /** @return string */
  public function getScoreMax()
  {
    return $this->scoreMax;
  }
  /** @param string */
  public function setScoreMin($scoreMin)
  {
    $this->scoreMin = $scoreMin;
  }
  /** @return string */
  public function getScoreMin()
  {
    return $this->scoreMin;
  }
  /** @param string */
  public function setScoreOrder($scoreOrder)
  {
    $this->scoreOrder = $scoreOrder;
  }
  /** @return string */
  public function getScoreOrder()
  {
    return $this->scoreOrder;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
}

class LeaderboardConfigurationDetail extends \Google\Model
{
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $kind;
  /** @var LocalizedStringBundle */
  public $name;
  /** @var GamesNumberFormatConfiguration */
  public $scoreFormat;
  /** @var int */
  public $sortRank;
  protected $nameType = LocalizedStringBundle::class;
  protected $nameDataType = '';
  protected $scoreFormatType = GamesNumberFormatConfiguration::class;
  protected $scoreFormatDataType = '';
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
  /** @param LocalizedStringBundle */
  public function setName(LocalizedStringBundle $name)
  {
    $this->name = $name;
  }
  /** @return LocalizedStringBundle */
  public function getName()
  {
    return $this->name;
  }
  /** @param GamesNumberFormatConfiguration */
  public function setScoreFormat(GamesNumberFormatConfiguration $scoreFormat)
  {
    $this->scoreFormat = $scoreFormat;
  }
  /** @return GamesNumberFormatConfiguration */
  public function getScoreFormat()
  {
    return $this->scoreFormat;
  }
  /** @param int */
  public function setSortRank($sortRank)
  {
    $this->sortRank = $sortRank;
  }
  /** @return int */
  public function getSortRank()
  {
    return $this->sortRank;
  }
}

class LeaderboardConfigurationListResponse extends \Google\Collection
{
  /** @var LeaderboardConfiguration[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = LeaderboardConfiguration::class;
  protected $itemsDataType = 'array';
  /** @param LeaderboardConfiguration[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LeaderboardConfiguration[] */
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

class LocalizedString extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $locale;
  /** @var string */
  public $value;

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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
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

class LocalizedStringBundle extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var LocalizedString[] */
  public $translations;
  protected $collection_key = 'translations';
  protected $translationsType = LocalizedString::class;
  protected $translationsDataType = 'array';
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
  /** @param LocalizedString[] */
  public function setTranslations($translations)
  {
    $this->translations = $translations;
  }
  /** @return LocalizedString[] */
  public function getTranslations()
  {
    return $this->translations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AchievementConfiguration::class, 'Google_Service_GamesConfiguration_AchievementConfiguration');
class_alias(AchievementConfigurationDetail::class, 'Google_Service_GamesConfiguration_AchievementConfigurationDetail');
class_alias(AchievementConfigurationListResponse::class, 'Google_Service_GamesConfiguration_AchievementConfigurationListResponse');
class_alias(GamesNumberAffixConfiguration::class, 'Google_Service_GamesConfiguration_GamesNumberAffixConfiguration');
class_alias(GamesNumberFormatConfiguration::class, 'Google_Service_GamesConfiguration_GamesNumberFormatConfiguration');
class_alias(ImageConfiguration::class, 'Google_Service_GamesConfiguration_ImageConfiguration');
class_alias(LeaderboardConfiguration::class, 'Google_Service_GamesConfiguration_LeaderboardConfiguration');
class_alias(LeaderboardConfigurationDetail::class, 'Google_Service_GamesConfiguration_LeaderboardConfigurationDetail');
class_alias(LeaderboardConfigurationListResponse::class, 'Google_Service_GamesConfiguration_LeaderboardConfigurationListResponse');
class_alias(LocalizedString::class, 'Google_Service_GamesConfiguration_LocalizedString');
class_alias(LocalizedStringBundle::class, 'Google_Service_GamesConfiguration_LocalizedStringBundle');
