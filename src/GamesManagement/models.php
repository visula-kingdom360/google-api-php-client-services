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

namespace Google\Service\GamesManagement;

class AchievementResetAllResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var AchievementResetResponse[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = AchievementResetResponse::class;
  protected $resultsDataType = 'array';
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
  /** @param AchievementResetResponse[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return AchievementResetResponse[] */
  public function getResults()
  {
    return $this->results;
  }
}

class AchievementResetMultipleForAllRequest extends \Google\Collection
{
  /** @var string[] */
  public $achievementIds;
  /** @var string */
  public $kind;
  protected $collection_key = 'achievement_ids';
  protected $internal_gapi_mappings = [
        "achievementIds" => "achievement_ids",
  ];
  /** @param string[] */
  public function setAchievementIds($achievementIds)
  {
    $this->achievementIds = $achievementIds;
  }
  /** @return string[] */
  public function getAchievementIds()
  {
    return $this->achievementIds;
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

class AchievementResetResponse extends \Google\Model
{
  /** @var string */
  public $currentState;
  /** @var string */
  public $definitionId;
  /** @var string */
  public $kind;
  /** @var bool */
  public $updateOccurred;

  /** @param string */
  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  /** @return string */
  public function getCurrentState()
  {
    return $this->currentState;
  }
  /** @param string */
  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }
  /** @return string */
  public function getDefinitionId()
  {
    return $this->definitionId;
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
  /** @param bool */
  public function setUpdateOccurred($updateOccurred)
  {
    $this->updateOccurred = $updateOccurred;
  }
  /** @return bool */
  public function getUpdateOccurred()
  {
    return $this->updateOccurred;
  }
}

class EventsResetMultipleForAllRequest extends \Google\Collection
{
  /** @var string[] */
  public $eventIds;
  /** @var string */
  public $kind;
  protected $collection_key = 'event_ids';
  protected $internal_gapi_mappings = [
        "eventIds" => "event_ids",
  ];
  /** @param string[] */
  public function setEventIds($eventIds)
  {
    $this->eventIds = $eventIds;
  }
  /** @return string[] */
  public function getEventIds()
  {
    return $this->eventIds;
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

class GamesPlayerExperienceInfoResource extends \Google\Model
{
  /** @var string */
  public $currentExperiencePoints;
  /** @var GamesPlayerLevelResource */
  public $currentLevel;
  /** @var string */
  public $lastLevelUpTimestampMillis;
  /** @var GamesPlayerLevelResource */
  public $nextLevel;
  protected $currentLevelType = GamesPlayerLevelResource::class;
  protected $currentLevelDataType = '';
  protected $nextLevelType = GamesPlayerLevelResource::class;
  protected $nextLevelDataType = '';
  /** @param string */
  public function setCurrentExperiencePoints($currentExperiencePoints)
  {
    $this->currentExperiencePoints = $currentExperiencePoints;
  }
  /** @return string */
  public function getCurrentExperiencePoints()
  {
    return $this->currentExperiencePoints;
  }
  /** @param GamesPlayerLevelResource */
  public function setCurrentLevel(GamesPlayerLevelResource $currentLevel)
  {
    $this->currentLevel = $currentLevel;
  }
  /** @return GamesPlayerLevelResource */
  public function getCurrentLevel()
  {
    return $this->currentLevel;
  }
  /** @param string */
  public function setLastLevelUpTimestampMillis($lastLevelUpTimestampMillis)
  {
    $this->lastLevelUpTimestampMillis = $lastLevelUpTimestampMillis;
  }
  /** @return string */
  public function getLastLevelUpTimestampMillis()
  {
    return $this->lastLevelUpTimestampMillis;
  }
  /** @param GamesPlayerLevelResource */
  public function setNextLevel(GamesPlayerLevelResource $nextLevel)
  {
    $this->nextLevel = $nextLevel;
  }
  /** @return GamesPlayerLevelResource */
  public function getNextLevel()
  {
    return $this->nextLevel;
  }
}

class GamesPlayerLevelResource extends \Google\Model
{
  /** @var int */
  public $level;
  /** @var string */
  public $maxExperiencePoints;
  /** @var string */
  public $minExperiencePoints;

  /** @param int */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return int */
  public function getLevel()
  {
    return $this->level;
  }
  /** @param string */
  public function setMaxExperiencePoints($maxExperiencePoints)
  {
    $this->maxExperiencePoints = $maxExperiencePoints;
  }
  /** @return string */
  public function getMaxExperiencePoints()
  {
    return $this->maxExperiencePoints;
  }
  /** @param string */
  public function setMinExperiencePoints($minExperiencePoints)
  {
    $this->minExperiencePoints = $minExperiencePoints;
  }
  /** @return string */
  public function getMinExperiencePoints()
  {
    return $this->minExperiencePoints;
  }
}

class HiddenPlayer extends \Google\Model
{
  /** @var string */
  public $hiddenTimeMillis;
  /** @var string */
  public $kind;
  /** @var Player */
  public $player;
  protected $playerType = Player::class;
  protected $playerDataType = '';
  /** @param string */
  public function setHiddenTimeMillis($hiddenTimeMillis)
  {
    $this->hiddenTimeMillis = $hiddenTimeMillis;
  }
  /** @return string */
  public function getHiddenTimeMillis()
  {
    return $this->hiddenTimeMillis;
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
  /** @param Player */
  public function setPlayer(Player $player)
  {
    $this->player = $player;
  }
  /** @return Player */
  public function getPlayer()
  {
    return $this->player;
  }
}

class HiddenPlayerList extends \Google\Collection
{
  /** @var HiddenPlayer[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = HiddenPlayer::class;
  protected $itemsDataType = 'array';
  /** @param HiddenPlayer[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return HiddenPlayer[] */
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

class Player extends \Google\Model
{
  /** @var string */
  public $avatarImageUrl;
  /** @var string */
  public $bannerUrlLandscape;
  /** @var string */
  public $bannerUrlPortrait;
  /** @var string */
  public $displayName;
  /** @var GamesPlayerExperienceInfoResource */
  public $experienceInfo;
  /** @var string */
  public $kind;
  /** @var PlayerName */
  public $name;
  /** @var string */
  public $originalPlayerId;
  /** @var string */
  public $playerId;
  /** @var ProfileSettings */
  public $profileSettings;
  /** @var string */
  public $title;
  protected $experienceInfoType = GamesPlayerExperienceInfoResource::class;
  protected $experienceInfoDataType = '';
  protected $nameType = PlayerName::class;
  protected $nameDataType = '';
  protected $profileSettingsType = ProfileSettings::class;
  protected $profileSettingsDataType = '';
  /** @param string */
  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }
  /** @return string */
  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }
  /** @param string */
  public function setBannerUrlLandscape($bannerUrlLandscape)
  {
    $this->bannerUrlLandscape = $bannerUrlLandscape;
  }
  /** @return string */
  public function getBannerUrlLandscape()
  {
    return $this->bannerUrlLandscape;
  }
  /** @param string */
  public function setBannerUrlPortrait($bannerUrlPortrait)
  {
    $this->bannerUrlPortrait = $bannerUrlPortrait;
  }
  /** @return string */
  public function getBannerUrlPortrait()
  {
    return $this->bannerUrlPortrait;
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
  /** @param GamesPlayerExperienceInfoResource */
  public function setExperienceInfo(GamesPlayerExperienceInfoResource $experienceInfo)
  {
    $this->experienceInfo = $experienceInfo;
  }
  /** @return GamesPlayerExperienceInfoResource */
  public function getExperienceInfo()
  {
    return $this->experienceInfo;
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
  /** @param PlayerName */
  public function setName(PlayerName $name)
  {
    $this->name = $name;
  }
  /** @return PlayerName */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setOriginalPlayerId($originalPlayerId)
  {
    $this->originalPlayerId = $originalPlayerId;
  }
  /** @return string */
  public function getOriginalPlayerId()
  {
    return $this->originalPlayerId;
  }
  /** @param string */
  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }
  /** @return string */
  public function getPlayerId()
  {
    return $this->playerId;
  }
  /** @param ProfileSettings */
  public function setProfileSettings(ProfileSettings $profileSettings)
  {
    $this->profileSettings = $profileSettings;
  }
  /** @return ProfileSettings */
  public function getProfileSettings()
  {
    return $this->profileSettings;
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

class PlayerName extends \Google\Model
{
  /** @var string */
  public $familyName;
  /** @var string */
  public $givenName;

  /** @param string */
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /** @return string */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /** @param string */
  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
  /** @return string */
  public function getGivenName()
  {
    return $this->givenName;
  }
}

class PlayerScoreResetAllResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PlayerScoreResetResponse[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = PlayerScoreResetResponse::class;
  protected $resultsDataType = 'array';
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
  /** @param PlayerScoreResetResponse[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return PlayerScoreResetResponse[] */
  public function getResults()
  {
    return $this->results;
  }
}

class PlayerScoreResetResponse extends \Google\Collection
{
  /** @var string */
  public $definitionId;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $resetScoreTimeSpans;
  protected $collection_key = 'resetScoreTimeSpans';
  /** @param string */
  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }
  /** @return string */
  public function getDefinitionId()
  {
    return $this->definitionId;
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
  /** @param string[] */
  public function setResetScoreTimeSpans($resetScoreTimeSpans)
  {
    $this->resetScoreTimeSpans = $resetScoreTimeSpans;
  }
  /** @return string[] */
  public function getResetScoreTimeSpans()
  {
    return $this->resetScoreTimeSpans;
  }
}

class ProfileSettings extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var bool */
  public $profileVisible;

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
  /** @param bool */
  public function setProfileVisible($profileVisible)
  {
    $this->profileVisible = $profileVisible;
  }
  /** @return bool */
  public function getProfileVisible()
  {
    return $this->profileVisible;
  }
}

class ScoresResetMultipleForAllRequest extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string[] */
  public $leaderboardIds;
  protected $collection_key = 'leaderboard_ids';
  protected $internal_gapi_mappings = [
        "leaderboardIds" => "leaderboard_ids",
  ];
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
  /** @param string[] */
  public function setLeaderboardIds($leaderboardIds)
  {
    $this->leaderboardIds = $leaderboardIds;
  }
  /** @return string[] */
  public function getLeaderboardIds()
  {
    return $this->leaderboardIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AchievementResetAllResponse::class, 'Google_Service_GamesManagement_AchievementResetAllResponse');
class_alias(AchievementResetMultipleForAllRequest::class, 'Google_Service_GamesManagement_AchievementResetMultipleForAllRequest');
class_alias(AchievementResetResponse::class, 'Google_Service_GamesManagement_AchievementResetResponse');
class_alias(EventsResetMultipleForAllRequest::class, 'Google_Service_GamesManagement_EventsResetMultipleForAllRequest');
class_alias(GamesPlayerExperienceInfoResource::class, 'Google_Service_GamesManagement_GamesPlayerExperienceInfoResource');
class_alias(GamesPlayerLevelResource::class, 'Google_Service_GamesManagement_GamesPlayerLevelResource');
class_alias(HiddenPlayer::class, 'Google_Service_GamesManagement_HiddenPlayer');
class_alias(HiddenPlayerList::class, 'Google_Service_GamesManagement_HiddenPlayerList');
class_alias(Player::class, 'Google_Service_GamesManagement_Player');
class_alias(PlayerName::class, 'Google_Service_GamesManagement_PlayerName');
class_alias(PlayerScoreResetAllResponse::class, 'Google_Service_GamesManagement_PlayerScoreResetAllResponse');
class_alias(PlayerScoreResetResponse::class, 'Google_Service_GamesManagement_PlayerScoreResetResponse');
class_alias(ProfileSettings::class, 'Google_Service_GamesManagement_ProfileSettings');
class_alias(ScoresResetMultipleForAllRequest::class, 'Google_Service_GamesManagement_ScoresResetMultipleForAllRequest');
