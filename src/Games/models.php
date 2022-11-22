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

namespace Google\Service\Games;

class AchievementDefinition extends \Google\Model
{
  /** @var string */
  public $achievementType;
  /** @var string */
  public $description;
  /** @var string */
  public $experiencePoints;
  /** @var string */
  public $formattedTotalSteps;
  /** @var string */
  public $id;
  /** @var string */
  public $initialState;
  /** @var bool */
  public $isRevealedIconUrlDefault;
  /** @var bool */
  public $isUnlockedIconUrlDefault;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $revealedIconUrl;
  /** @var int */
  public $totalSteps;
  /** @var string */
  public $unlockedIconUrl;

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
  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }
  /** @return string */
  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }
  /** @param string */
  public function setFormattedTotalSteps($formattedTotalSteps)
  {
    $this->formattedTotalSteps = $formattedTotalSteps;
  }
  /** @return string */
  public function getFormattedTotalSteps()
  {
    return $this->formattedTotalSteps;
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
  /** @param bool */
  public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
  {
    $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
  }
  /** @return bool */
  public function getIsRevealedIconUrlDefault()
  {
    return $this->isRevealedIconUrlDefault;
  }
  /** @param bool */
  public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
  {
    $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
  }
  /** @return bool */
  public function getIsUnlockedIconUrlDefault()
  {
    return $this->isUnlockedIconUrlDefault;
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
  public function setRevealedIconUrl($revealedIconUrl)
  {
    $this->revealedIconUrl = $revealedIconUrl;
  }
  /** @return string */
  public function getRevealedIconUrl()
  {
    return $this->revealedIconUrl;
  }
  /** @param int */
  public function setTotalSteps($totalSteps)
  {
    $this->totalSteps = $totalSteps;
  }
  /** @return int */
  public function getTotalSteps()
  {
    return $this->totalSteps;
  }
  /** @param string */
  public function setUnlockedIconUrl($unlockedIconUrl)
  {
    $this->unlockedIconUrl = $unlockedIconUrl;
  }
  /** @return string */
  public function getUnlockedIconUrl()
  {
    return $this->unlockedIconUrl;
  }
}

class AchievementDefinitionsListResponse extends \Google\Collection
{
  /** @var AchievementDefinition[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = AchievementDefinition::class;
  protected $itemsDataType = 'array';
  /** @param AchievementDefinition[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AchievementDefinition[] */
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

class AchievementIncrementResponse extends \Google\Model
{
  /** @var int */
  public $currentSteps;
  /** @var string */
  public $kind;
  /** @var bool */
  public $newlyUnlocked;

  /** @param int */
  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  /** @return int */
  public function getCurrentSteps()
  {
    return $this->currentSteps;
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
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  /** @return bool */
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class AchievementRevealResponse extends \Google\Model
{
  /** @var string */
  public $currentState;
  /** @var string */
  public $kind;

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

class AchievementSetStepsAtLeastResponse extends \Google\Model
{
  /** @var int */
  public $currentSteps;
  /** @var string */
  public $kind;
  /** @var bool */
  public $newlyUnlocked;

  /** @param int */
  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  /** @return int */
  public function getCurrentSteps()
  {
    return $this->currentSteps;
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
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  /** @return bool */
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class AchievementUnlockResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var bool */
  public $newlyUnlocked;

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
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  /** @return bool */
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class AchievementUpdateMultipleRequest extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var AchievementUpdateRequest[] */
  public $updates;
  protected $collection_key = 'updates';
  protected $updatesType = AchievementUpdateRequest::class;
  protected $updatesDataType = 'array';
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
  /** @param AchievementUpdateRequest[] */
  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  /** @return AchievementUpdateRequest[] */
  public function getUpdates()
  {
    return $this->updates;
  }
}

class AchievementUpdateMultipleResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var AchievementUpdateResponse[] */
  public $updatedAchievements;
  protected $collection_key = 'updatedAchievements';
  protected $updatedAchievementsType = AchievementUpdateResponse::class;
  protected $updatedAchievementsDataType = 'array';
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
  /** @param AchievementUpdateResponse[] */
  public function setUpdatedAchievements($updatedAchievements)
  {
    $this->updatedAchievements = $updatedAchievements;
  }
  /** @return AchievementUpdateResponse[] */
  public function getUpdatedAchievements()
  {
    return $this->updatedAchievements;
  }
}

class AchievementUpdateRequest extends \Google\Model
{
  /** @var string */
  public $achievementId;
  /** @var GamesAchievementIncrement */
  public $incrementPayload;
  /** @var string */
  public $kind;
  /** @var GamesAchievementSetStepsAtLeast */
  public $setStepsAtLeastPayload;
  /** @var string */
  public $updateType;
  protected $incrementPayloadType = GamesAchievementIncrement::class;
  protected $incrementPayloadDataType = '';
  protected $setStepsAtLeastPayloadType = GamesAchievementSetStepsAtLeast::class;
  protected $setStepsAtLeastPayloadDataType = '';
  /** @param string */
  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }
  /** @return string */
  public function getAchievementId()
  {
    return $this->achievementId;
  }
  /** @param GamesAchievementIncrement */
  public function setIncrementPayload(GamesAchievementIncrement $incrementPayload)
  {
    $this->incrementPayload = $incrementPayload;
  }
  /** @return GamesAchievementIncrement */
  public function getIncrementPayload()
  {
    return $this->incrementPayload;
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
  /** @param GamesAchievementSetStepsAtLeast */
  public function setSetStepsAtLeastPayload(GamesAchievementSetStepsAtLeast $setStepsAtLeastPayload)
  {
    $this->setStepsAtLeastPayload = $setStepsAtLeastPayload;
  }
  /** @return GamesAchievementSetStepsAtLeast */
  public function getSetStepsAtLeastPayload()
  {
    return $this->setStepsAtLeastPayload;
  }
  /** @param string */
  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }
  /** @return string */
  public function getUpdateType()
  {
    return $this->updateType;
  }
}

class AchievementUpdateResponse extends \Google\Model
{
  /** @var string */
  public $achievementId;
  /** @var string */
  public $currentState;
  /** @var int */
  public $currentSteps;
  /** @var string */
  public $kind;
  /** @var bool */
  public $newlyUnlocked;
  /** @var bool */
  public $updateOccurred;

  /** @param string */
  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }
  /** @return string */
  public function getAchievementId()
  {
    return $this->achievementId;
  }
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
  /** @param int */
  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  /** @return int */
  public function getCurrentSteps()
  {
    return $this->currentSteps;
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
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  /** @return bool */
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
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

class Application extends \Google\Collection
{
  /** @var int */
  public $achievementCount;
  /** @var ImageAsset[] */
  public $assets;
  /** @var string */
  public $author;
  /** @var ApplicationCategory */
  public $category;
  /** @var string */
  public $description;
  /** @var string[] */
  public $enabledFeatures;
  /** @var string */
  public $id;
  /** @var Instance[] */
  public $instances;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastUpdatedTimestamp;
  /** @var int */
  public $leaderboardCount;
  /** @var string */
  public $name;
  /** @var string */
  public $themeColor;
  protected $collection_key = 'instances';
  protected $internal_gapi_mappings = [
        "achievementCount" => "achievement_count",
        "leaderboardCount" => "leaderboard_count",
  ];
  protected $assetsType = ImageAsset::class;
  protected $assetsDataType = 'array';
  protected $categoryType = ApplicationCategory::class;
  protected $categoryDataType = '';
  protected $instancesType = Instance::class;
  protected $instancesDataType = 'array';
  /** @param int */
  public function setAchievementCount($achievementCount)
  {
    $this->achievementCount = $achievementCount;
  }
  /** @return int */
  public function getAchievementCount()
  {
    return $this->achievementCount;
  }
  /** @param ImageAsset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return ImageAsset[] */
  public function getAssets()
  {
    return $this->assets;
  }
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
  /** @param ApplicationCategory */
  public function setCategory(ApplicationCategory $category)
  {
    $this->category = $category;
  }
  /** @return ApplicationCategory */
  public function getCategory()
  {
    return $this->category;
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
  /** @param string[] */
  public function setEnabledFeatures($enabledFeatures)
  {
    $this->enabledFeatures = $enabledFeatures;
  }
  /** @return string[] */
  public function getEnabledFeatures()
  {
    return $this->enabledFeatures;
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
  /** @param Instance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return Instance[] */
  public function getInstances()
  {
    return $this->instances;
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
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
  /** @return string */
  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
  /** @param int */
  public function setLeaderboardCount($leaderboardCount)
  {
    $this->leaderboardCount = $leaderboardCount;
  }
  /** @return int */
  public function getLeaderboardCount()
  {
    return $this->leaderboardCount;
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
  public function setThemeColor($themeColor)
  {
    $this->themeColor = $themeColor;
  }
  /** @return string */
  public function getThemeColor()
  {
    return $this->themeColor;
  }
}

class ApplicationCategory extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $primary;
  /** @var string */
  public $secondary;

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
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return string */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setSecondary($secondary)
  {
    $this->secondary = $secondary;
  }
  /** @return string */
  public function getSecondary()
  {
    return $this->secondary;
  }
}

class ApplicationVerifyResponse extends \Google\Model
{
  /** @var string */
  public $alternatePlayerId;
  /** @var string */
  public $kind;
  /** @var string */
  public $playerId;
  protected $internal_gapi_mappings = [
        "alternatePlayerId" => "alternate_player_id",
        "playerId" => "player_id",
  ];
  /** @param string */
  public function setAlternatePlayerId($alternatePlayerId)
  {
    $this->alternatePlayerId = $alternatePlayerId;
  }
  /** @return string */
  public function getAlternatePlayerId()
  {
    return $this->alternatePlayerId;
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
  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }
  /** @return string */
  public function getPlayerId()
  {
    return $this->playerId;
  }
}

class Category extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var string */
  public $experiencePoints;
  /** @var string */
  public $kind;

  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string */
  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }
  /** @return string */
  public function getExperiencePoints()
  {
    return $this->experiencePoints;
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

class CategoryListResponse extends \Google\Collection
{
  /** @var Category[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Category::class;
  protected $itemsDataType = 'array';
  /** @param Category[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Category[] */
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

class EndPoint extends \Google\Model
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

class EventBatchRecordFailure extends \Google\Model
{
  /** @var string */
  public $failureCause;
  /** @var string */
  public $kind;
  /** @var EventPeriodRange */
  public $range;
  protected $rangeType = EventPeriodRange::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /** @return string */
  public function getFailureCause()
  {
    return $this->failureCause;
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
  /** @param EventPeriodRange */
  public function setRange(EventPeriodRange $range)
  {
    $this->range = $range;
  }
  /** @return EventPeriodRange */
  public function getRange()
  {
    return $this->range;
  }
}

class EventChild extends \Google\Model
{
  /** @var string */
  public $childId;
  /** @var string */
  public $kind;

  /** @param string */
  public function setChildId($childId)
  {
    $this->childId = $childId;
  }
  /** @return string */
  public function getChildId()
  {
    return $this->childId;
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

class EventDefinition extends \Google\Collection
{
  /** @var EventChild[] */
  public $childEvents;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var string */
  public $imageUrl;
  /** @var bool */
  public $isDefaultImageUrl;
  /** @var string */
  public $kind;
  /** @var string */
  public $visibility;
  protected $collection_key = 'childEvents';
  protected $childEventsType = EventChild::class;
  protected $childEventsDataType = 'array';
  /** @param EventChild[] */
  public function setChildEvents($childEvents)
  {
    $this->childEvents = $childEvents;
  }
  /** @return EventChild[] */
  public function getChildEvents()
  {
    return $this->childEvents;
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
  public function setIsDefaultImageUrl($isDefaultImageUrl)
  {
    $this->isDefaultImageUrl = $isDefaultImageUrl;
  }
  /** @return bool */
  public function getIsDefaultImageUrl()
  {
    return $this->isDefaultImageUrl;
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
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class EventDefinitionListResponse extends \Google\Collection
{
  /** @var EventDefinition[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = EventDefinition::class;
  protected $itemsDataType = 'array';
  /** @param EventDefinition[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return EventDefinition[] */
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

class EventPeriodRange extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $periodEndMillis;
  /** @var string */
  public $periodStartMillis;

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
  public function setPeriodEndMillis($periodEndMillis)
  {
    $this->periodEndMillis = $periodEndMillis;
  }
  /** @return string */
  public function getPeriodEndMillis()
  {
    return $this->periodEndMillis;
  }
  /** @param string */
  public function setPeriodStartMillis($periodStartMillis)
  {
    $this->periodStartMillis = $periodStartMillis;
  }
  /** @return string */
  public function getPeriodStartMillis()
  {
    return $this->periodStartMillis;
  }
}

class EventPeriodUpdate extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var EventPeriodRange */
  public $timePeriod;
  /** @var EventUpdateRequest[] */
  public $updates;
  protected $collection_key = 'updates';
  protected $timePeriodType = EventPeriodRange::class;
  protected $timePeriodDataType = '';
  protected $updatesType = EventUpdateRequest::class;
  protected $updatesDataType = 'array';
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
  /** @param EventPeriodRange */
  public function setTimePeriod(EventPeriodRange $timePeriod)
  {
    $this->timePeriod = $timePeriod;
  }
  /** @return EventPeriodRange */
  public function getTimePeriod()
  {
    return $this->timePeriod;
  }
  /** @param EventUpdateRequest[] */
  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  /** @return EventUpdateRequest[] */
  public function getUpdates()
  {
    return $this->updates;
  }
}

class EventRecordFailure extends \Google\Model
{
  /** @var string */
  public $eventId;
  /** @var string */
  public $failureCause;
  /** @var string */
  public $kind;

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
  /** @param string */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /** @return string */
  public function getFailureCause()
  {
    return $this->failureCause;
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

class EventRecordRequest extends \Google\Collection
{
  /** @var string */
  public $currentTimeMillis;
  /** @var string */
  public $kind;
  /** @var string */
  public $requestId;
  /** @var EventPeriodUpdate[] */
  public $timePeriods;
  protected $collection_key = 'timePeriods';
  protected $timePeriodsType = EventPeriodUpdate::class;
  protected $timePeriodsDataType = 'array';
  /** @param string */
  public function setCurrentTimeMillis($currentTimeMillis)
  {
    $this->currentTimeMillis = $currentTimeMillis;
  }
  /** @return string */
  public function getCurrentTimeMillis()
  {
    return $this->currentTimeMillis;
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
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param EventPeriodUpdate[] */
  public function setTimePeriods($timePeriods)
  {
    $this->timePeriods = $timePeriods;
  }
  /** @return EventPeriodUpdate[] */
  public function getTimePeriods()
  {
    return $this->timePeriods;
  }
}

class EventUpdateRequest extends \Google\Model
{
  /** @var string */
  public $definitionId;
  /** @var string */
  public $kind;
  /** @var string */
  public $updateCount;

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
  /** @param string */
  public function setUpdateCount($updateCount)
  {
    $this->updateCount = $updateCount;
  }
  /** @return string */
  public function getUpdateCount()
  {
    return $this->updateCount;
  }
}

class EventUpdateResponse extends \Google\Collection
{
  /** @var EventBatchRecordFailure[] */
  public $batchFailures;
  /** @var EventRecordFailure[] */
  public $eventFailures;
  /** @var string */
  public $kind;
  /** @var PlayerEvent[] */
  public $playerEvents;
  protected $collection_key = 'playerEvents';
  protected $batchFailuresType = EventBatchRecordFailure::class;
  protected $batchFailuresDataType = 'array';
  protected $eventFailuresType = EventRecordFailure::class;
  protected $eventFailuresDataType = 'array';
  protected $playerEventsType = PlayerEvent::class;
  protected $playerEventsDataType = 'array';
  /** @param EventBatchRecordFailure[] */
  public function setBatchFailures($batchFailures)
  {
    $this->batchFailures = $batchFailures;
  }
  /** @return EventBatchRecordFailure[] */
  public function getBatchFailures()
  {
    return $this->batchFailures;
  }
  /** @param EventRecordFailure[] */
  public function setEventFailures($eventFailures)
  {
    $this->eventFailures = $eventFailures;
  }
  /** @return EventRecordFailure[] */
  public function getEventFailures()
  {
    return $this->eventFailures;
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
  /** @param PlayerEvent[] */
  public function setPlayerEvents($playerEvents)
  {
    $this->playerEvents = $playerEvents;
  }
  /** @return PlayerEvent[] */
  public function getPlayerEvents()
  {
    return $this->playerEvents;
  }
}

class GamesAchievementIncrement extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $requestId;
  /** @var int */
  public $steps;

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
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param int */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return int */
  public function getSteps()
  {
    return $this->steps;
  }
}

class GamesAchievementSetStepsAtLeast extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var int */
  public $steps;

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
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return int */
  public function getSteps()
  {
    return $this->steps;
  }
}

class ImageAsset extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
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

class Instance extends \Google\Model
{
  /** @var string */
  public $acquisitionUri;
  /** @var InstanceAndroidDetails */
  public $androidInstance;
  /** @var InstanceIosDetails */
  public $iosInstance;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $platformType;
  /** @var bool */
  public $realtimePlay;
  /** @var bool */
  public $turnBasedPlay;
  /** @var InstanceWebDetails */
  public $webInstance;
  protected $androidInstanceType = InstanceAndroidDetails::class;
  protected $androidInstanceDataType = '';
  protected $iosInstanceType = InstanceIosDetails::class;
  protected $iosInstanceDataType = '';
  protected $webInstanceType = InstanceWebDetails::class;
  protected $webInstanceDataType = '';
  /** @param string */
  public function setAcquisitionUri($acquisitionUri)
  {
    $this->acquisitionUri = $acquisitionUri;
  }
  /** @return string */
  public function getAcquisitionUri()
  {
    return $this->acquisitionUri;
  }
  /** @param InstanceAndroidDetails */
  public function setAndroidInstance(InstanceAndroidDetails $androidInstance)
  {
    $this->androidInstance = $androidInstance;
  }
  /** @return InstanceAndroidDetails */
  public function getAndroidInstance()
  {
    return $this->androidInstance;
  }
  /** @param InstanceIosDetails */
  public function setIosInstance(InstanceIosDetails $iosInstance)
  {
    $this->iosInstance = $iosInstance;
  }
  /** @return InstanceIosDetails */
  public function getIosInstance()
  {
    return $this->iosInstance;
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
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /** @return string */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /** @param bool */
  public function setRealtimePlay($realtimePlay)
  {
    $this->realtimePlay = $realtimePlay;
  }
  /** @return bool */
  public function getRealtimePlay()
  {
    return $this->realtimePlay;
  }
  /** @param bool */
  public function setTurnBasedPlay($turnBasedPlay)
  {
    $this->turnBasedPlay = $turnBasedPlay;
  }
  /** @return bool */
  public function getTurnBasedPlay()
  {
    return $this->turnBasedPlay;
  }
  /** @param InstanceWebDetails */
  public function setWebInstance(InstanceWebDetails $webInstance)
  {
    $this->webInstance = $webInstance;
  }
  /** @return InstanceWebDetails */
  public function getWebInstance()
  {
    return $this->webInstance;
  }
}

class InstanceAndroidDetails extends \Google\Model
{
  /** @var bool */
  public $enablePiracyCheck;
  /** @var string */
  public $kind;
  /** @var string */
  public $packageName;
  /** @var bool */
  public $preferred;

  /** @param bool */
  public function setEnablePiracyCheck($enablePiracyCheck)
  {
    $this->enablePiracyCheck = $enablePiracyCheck;
  }
  /** @return bool */
  public function getEnablePiracyCheck()
  {
    return $this->enablePiracyCheck;
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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param bool */
  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
  /** @return bool */
  public function getPreferred()
  {
    return $this->preferred;
  }
}

class InstanceIosDetails extends \Google\Model
{
  /** @var string */
  public $bundleIdentifier;
  /** @var string */
  public $itunesAppId;
  /** @var string */
  public $kind;
  /** @var bool */
  public $preferredForIpad;
  /** @var bool */
  public $preferredForIphone;
  /** @var bool */
  public $supportIpad;
  /** @var bool */
  public $supportIphone;

  /** @param string */
  public function setBundleIdentifier($bundleIdentifier)
  {
    $this->bundleIdentifier = $bundleIdentifier;
  }
  /** @return string */
  public function getBundleIdentifier()
  {
    return $this->bundleIdentifier;
  }
  /** @param string */
  public function setItunesAppId($itunesAppId)
  {
    $this->itunesAppId = $itunesAppId;
  }
  /** @return string */
  public function getItunesAppId()
  {
    return $this->itunesAppId;
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
  public function setPreferredForIpad($preferredForIpad)
  {
    $this->preferredForIpad = $preferredForIpad;
  }
  /** @return bool */
  public function getPreferredForIpad()
  {
    return $this->preferredForIpad;
  }
  /** @param bool */
  public function setPreferredForIphone($preferredForIphone)
  {
    $this->preferredForIphone = $preferredForIphone;
  }
  /** @return bool */
  public function getPreferredForIphone()
  {
    return $this->preferredForIphone;
  }
  /** @param bool */
  public function setSupportIpad($supportIpad)
  {
    $this->supportIpad = $supportIpad;
  }
  /** @return bool */
  public function getSupportIpad()
  {
    return $this->supportIpad;
  }
  /** @param bool */
  public function setSupportIphone($supportIphone)
  {
    $this->supportIphone = $supportIphone;
  }
  /** @return bool */
  public function getSupportIphone()
  {
    return $this->supportIphone;
  }
}

class InstanceWebDetails extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $launchUrl;
  /** @var bool */
  public $preferred;

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
  public function setLaunchUrl($launchUrl)
  {
    $this->launchUrl = $launchUrl;
  }
  /** @return string */
  public function getLaunchUrl()
  {
    return $this->launchUrl;
  }
  /** @param bool */
  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
  /** @return bool */
  public function getPreferred()
  {
    return $this->preferred;
  }
}

class Leaderboard extends \Google\Model
{
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $id;
  /** @var bool */
  public $isIconUrlDefault;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $order;

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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setIsIconUrlDefault($isIconUrlDefault)
  {
    $this->isIconUrlDefault = $isIconUrlDefault;
  }
  /** @return bool */
  public function getIsIconUrlDefault()
  {
    return $this->isIconUrlDefault;
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
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return string */
  public function getOrder()
  {
    return $this->order;
  }
}

class LeaderboardEntry extends \Google\Model
{
  /** @var string */
  public $formattedScore;
  /** @var string */
  public $formattedScoreRank;
  /** @var string */
  public $kind;
  /** @var Player */
  public $player;
  /** @var string */
  public $scoreRank;
  /** @var string */
  public $scoreTag;
  /** @var string */
  public $scoreValue;
  /** @var string */
  public $timeSpan;
  /** @var string */
  public $writeTimestampMillis;
  protected $playerType = Player::class;
  protected $playerDataType = '';
  /** @param string */
  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }
  /** @return string */
  public function getFormattedScore()
  {
    return $this->formattedScore;
  }
  /** @param string */
  public function setFormattedScoreRank($formattedScoreRank)
  {
    $this->formattedScoreRank = $formattedScoreRank;
  }
  /** @return string */
  public function getFormattedScoreRank()
  {
    return $this->formattedScoreRank;
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
  /** @param string */
  public function setScoreRank($scoreRank)
  {
    $this->scoreRank = $scoreRank;
  }
  /** @return string */
  public function getScoreRank()
  {
    return $this->scoreRank;
  }
  /** @param string */
  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }
  /** @return string */
  public function getScoreTag()
  {
    return $this->scoreTag;
  }
  /** @param string */
  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }
  /** @return string */
  public function getScoreValue()
  {
    return $this->scoreValue;
  }
  /** @param string */
  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }
  /** @return string */
  public function getTimeSpan()
  {
    return $this->timeSpan;
  }
  /** @param string */
  public function setWriteTimestampMillis($writeTimestampMillis)
  {
    $this->writeTimestampMillis = $writeTimestampMillis;
  }
  /** @return string */
  public function getWriteTimestampMillis()
  {
    return $this->writeTimestampMillis;
  }
}

class LeaderboardListResponse extends \Google\Collection
{
  /** @var Leaderboard[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Leaderboard::class;
  protected $itemsDataType = 'array';
  /** @param Leaderboard[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Leaderboard[] */
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

class LeaderboardScoreRank extends \Google\Model
{
  /** @var string */
  public $formattedNumScores;
  /** @var string */
  public $formattedRank;
  /** @var string */
  public $kind;
  /** @var string */
  public $numScores;
  /** @var string */
  public $rank;

  /** @param string */
  public function setFormattedNumScores($formattedNumScores)
  {
    $this->formattedNumScores = $formattedNumScores;
  }
  /** @return string */
  public function getFormattedNumScores()
  {
    return $this->formattedNumScores;
  }
  /** @param string */
  public function setFormattedRank($formattedRank)
  {
    $this->formattedRank = $formattedRank;
  }
  /** @return string */
  public function getFormattedRank()
  {
    return $this->formattedRank;
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
  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }
  /** @return string */
  public function getNumScores()
  {
    return $this->numScores;
  }
  /** @param string */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /** @return string */
  public function getRank()
  {
    return $this->rank;
  }
}

class LeaderboardScores extends \Google\Collection
{
  /** @var LeaderboardEntry[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $numScores;
  /** @var LeaderboardEntry */
  public $playerScore;
  /** @var string */
  public $prevPageToken;
  protected $collection_key = 'items';
  protected $itemsType = LeaderboardEntry::class;
  protected $itemsDataType = 'array';
  protected $playerScoreType = LeaderboardEntry::class;
  protected $playerScoreDataType = '';
  /** @param LeaderboardEntry[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return LeaderboardEntry[] */
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
  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }
  /** @return string */
  public function getNumScores()
  {
    return $this->numScores;
  }
  /** @param LeaderboardEntry */
  public function setPlayerScore(LeaderboardEntry $playerScore)
  {
    $this->playerScore = $playerScore;
  }
  /** @return LeaderboardEntry */
  public function getPlayerScore()
  {
    return $this->playerScore;
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
}

class MetagameConfig extends \Google\Collection
{
  /** @var int */
  public $currentVersion;
  /** @var string */
  public $kind;
  /** @var PlayerLevel[] */
  public $playerLevels;
  protected $collection_key = 'playerLevels';
  protected $playerLevelsType = PlayerLevel::class;
  protected $playerLevelsDataType = 'array';
  /** @param int */
  public function setCurrentVersion($currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }
  /** @return int */
  public function getCurrentVersion()
  {
    return $this->currentVersion;
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
  /** @param PlayerLevel[] */
  public function setPlayerLevels($playerLevels)
  {
    $this->playerLevels = $playerLevels;
  }
  /** @return PlayerLevel[] */
  public function getPlayerLevels()
  {
    return $this->playerLevels;
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
  /** @var PlayerExperienceInfo */
  public $experienceInfo;
  /** @var string */
  public $friendStatus;
  /** @var string */
  public $gamePlayerId;
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
  protected $experienceInfoType = PlayerExperienceInfo::class;
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
  /** @param PlayerExperienceInfo */
  public function setExperienceInfo(PlayerExperienceInfo $experienceInfo)
  {
    $this->experienceInfo = $experienceInfo;
  }
  /** @return PlayerExperienceInfo */
  public function getExperienceInfo()
  {
    return $this->experienceInfo;
  }
  /** @param string */
  public function setFriendStatus($friendStatus)
  {
    $this->friendStatus = $friendStatus;
  }
  /** @return string */
  public function getFriendStatus()
  {
    return $this->friendStatus;
  }
  /** @param string */
  public function setGamePlayerId($gamePlayerId)
  {
    $this->gamePlayerId = $gamePlayerId;
  }
  /** @return string */
  public function getGamePlayerId()
  {
    return $this->gamePlayerId;
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

class PlayerAchievement extends \Google\Model
{
  /** @var string */
  public $achievementState;
  /** @var int */
  public $currentSteps;
  /** @var string */
  public $experiencePoints;
  /** @var string */
  public $formattedCurrentStepsString;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastUpdatedTimestamp;

  /** @param string */
  public function setAchievementState($achievementState)
  {
    $this->achievementState = $achievementState;
  }
  /** @return string */
  public function getAchievementState()
  {
    return $this->achievementState;
  }
  /** @param int */
  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  /** @return int */
  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }
  /** @param string */
  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }
  /** @return string */
  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }
  /** @param string */
  public function setFormattedCurrentStepsString($formattedCurrentStepsString)
  {
    $this->formattedCurrentStepsString = $formattedCurrentStepsString;
  }
  /** @return string */
  public function getFormattedCurrentStepsString()
  {
    return $this->formattedCurrentStepsString;
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
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
  /** @return string */
  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
}

class PlayerAchievementListResponse extends \Google\Collection
{
  /** @var PlayerAchievement[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = PlayerAchievement::class;
  protected $itemsDataType = 'array';
  /** @param PlayerAchievement[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return PlayerAchievement[] */
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

class PlayerEvent extends \Google\Model
{
  /** @var string */
  public $definitionId;
  /** @var string */
  public $formattedNumEvents;
  /** @var string */
  public $kind;
  /** @var string */
  public $numEvents;
  /** @var string */
  public $playerId;

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
  public function setFormattedNumEvents($formattedNumEvents)
  {
    $this->formattedNumEvents = $formattedNumEvents;
  }
  /** @return string */
  public function getFormattedNumEvents()
  {
    return $this->formattedNumEvents;
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
  public function setNumEvents($numEvents)
  {
    $this->numEvents = $numEvents;
  }
  /** @return string */
  public function getNumEvents()
  {
    return $this->numEvents;
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
}

class PlayerEventListResponse extends \Google\Collection
{
  /** @var PlayerEvent[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = PlayerEvent::class;
  protected $itemsDataType = 'array';
  /** @param PlayerEvent[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return PlayerEvent[] */
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

class PlayerExperienceInfo extends \Google\Model
{
  /** @var string */
  public $currentExperiencePoints;
  /** @var PlayerLevel */
  public $currentLevel;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastLevelUpTimestampMillis;
  /** @var PlayerLevel */
  public $nextLevel;
  protected $currentLevelType = PlayerLevel::class;
  protected $currentLevelDataType = '';
  protected $nextLevelType = PlayerLevel::class;
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
  /** @param PlayerLevel */
  public function setCurrentLevel(PlayerLevel $currentLevel)
  {
    $this->currentLevel = $currentLevel;
  }
  /** @return PlayerLevel */
  public function getCurrentLevel()
  {
    return $this->currentLevel;
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
  public function setLastLevelUpTimestampMillis($lastLevelUpTimestampMillis)
  {
    $this->lastLevelUpTimestampMillis = $lastLevelUpTimestampMillis;
  }
  /** @return string */
  public function getLastLevelUpTimestampMillis()
  {
    return $this->lastLevelUpTimestampMillis;
  }
  /** @param PlayerLevel */
  public function setNextLevel(PlayerLevel $nextLevel)
  {
    $this->nextLevel = $nextLevel;
  }
  /** @return PlayerLevel */
  public function getNextLevel()
  {
    return $this->nextLevel;
  }
}

class PlayerLeaderboardScore extends \Google\Model
{
  /** @var LeaderboardScoreRank */
  public $friendsRank;
  /** @var string */
  public $kind;
  /** @var string */
  public $leaderboardId;
  /** @var LeaderboardScoreRank */
  public $publicRank;
  /** @var string */
  public $scoreString;
  /** @var string */
  public $scoreTag;
  /** @var string */
  public $scoreValue;
  /** @var LeaderboardScoreRank */
  public $socialRank;
  /** @var string */
  public $timeSpan;
  /** @var string */
  public $writeTimestamp;
  protected $internal_gapi_mappings = [
        "leaderboardId" => "leaderboard_id",
  ];
  protected $friendsRankType = LeaderboardScoreRank::class;
  protected $friendsRankDataType = '';
  protected $publicRankType = LeaderboardScoreRank::class;
  protected $publicRankDataType = '';
  protected $socialRankType = LeaderboardScoreRank::class;
  protected $socialRankDataType = '';
  /** @param LeaderboardScoreRank */
  public function setFriendsRank(LeaderboardScoreRank $friendsRank)
  {
    $this->friendsRank = $friendsRank;
  }
  /** @return LeaderboardScoreRank */
  public function getFriendsRank()
  {
    return $this->friendsRank;
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
  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }
  /** @return string */
  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }
  /** @param LeaderboardScoreRank */
  public function setPublicRank(LeaderboardScoreRank $publicRank)
  {
    $this->publicRank = $publicRank;
  }
  /** @return LeaderboardScoreRank */
  public function getPublicRank()
  {
    return $this->publicRank;
  }
  /** @param string */
  public function setScoreString($scoreString)
  {
    $this->scoreString = $scoreString;
  }
  /** @return string */
  public function getScoreString()
  {
    return $this->scoreString;
  }
  /** @param string */
  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }
  /** @return string */
  public function getScoreTag()
  {
    return $this->scoreTag;
  }
  /** @param string */
  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }
  /** @return string */
  public function getScoreValue()
  {
    return $this->scoreValue;
  }
  /** @param LeaderboardScoreRank */
  public function setSocialRank(LeaderboardScoreRank $socialRank)
  {
    $this->socialRank = $socialRank;
  }
  /** @return LeaderboardScoreRank */
  public function getSocialRank()
  {
    return $this->socialRank;
  }
  /** @param string */
  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }
  /** @return string */
  public function getTimeSpan()
  {
    return $this->timeSpan;
  }
  /** @param string */
  public function setWriteTimestamp($writeTimestamp)
  {
    $this->writeTimestamp = $writeTimestamp;
  }
  /** @return string */
  public function getWriteTimestamp()
  {
    return $this->writeTimestamp;
  }
}

class PlayerLeaderboardScoreListResponse extends \Google\Collection
{
  /** @var PlayerLeaderboardScore[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Player */
  public $player;
  protected $collection_key = 'items';
  protected $itemsType = PlayerLeaderboardScore::class;
  protected $itemsDataType = 'array';
  protected $playerType = Player::class;
  protected $playerDataType = '';
  /** @param PlayerLeaderboardScore[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return PlayerLeaderboardScore[] */
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

class PlayerLevel extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var int */
  public $level;
  /** @var string */
  public $maxExperiencePoints;
  /** @var string */
  public $minExperiencePoints;

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

class PlayerListResponse extends \Google\Collection
{
  /** @var Player[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Player::class;
  protected $itemsDataType = 'array';
  /** @param Player[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Player[] */
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

class PlayerScore extends \Google\Model
{
  /** @var string */
  public $formattedScore;
  /** @var string */
  public $kind;
  /** @var string */
  public $score;
  /** @var string */
  public $scoreTag;
  /** @var string */
  public $timeSpan;

  /** @param string */
  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }
  /** @return string */
  public function getFormattedScore()
  {
    return $this->formattedScore;
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
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return string */
  public function getScore()
  {
    return $this->score;
  }
  /** @param string */
  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }
  /** @return string */
  public function getScoreTag()
  {
    return $this->scoreTag;
  }
  /** @param string */
  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }
  /** @return string */
  public function getTimeSpan()
  {
    return $this->timeSpan;
  }
}

class PlayerScoreListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PlayerScoreResponse[] */
  public $submittedScores;
  protected $collection_key = 'submittedScores';
  protected $submittedScoresType = PlayerScoreResponse::class;
  protected $submittedScoresDataType = 'array';
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
  /** @param PlayerScoreResponse[] */
  public function setSubmittedScores($submittedScores)
  {
    $this->submittedScores = $submittedScores;
  }
  /** @return PlayerScoreResponse[] */
  public function getSubmittedScores()
  {
    return $this->submittedScores;
  }
}

class PlayerScoreResponse extends \Google\Collection
{
  /** @var string[] */
  public $beatenScoreTimeSpans;
  /** @var string */
  public $formattedScore;
  /** @var string */
  public $kind;
  /** @var string */
  public $leaderboardId;
  /** @var string */
  public $scoreTag;
  /** @var PlayerScore[] */
  public $unbeatenScores;
  protected $collection_key = 'unbeatenScores';
  protected $unbeatenScoresType = PlayerScore::class;
  protected $unbeatenScoresDataType = 'array';
  /** @param string[] */
  public function setBeatenScoreTimeSpans($beatenScoreTimeSpans)
  {
    $this->beatenScoreTimeSpans = $beatenScoreTimeSpans;
  }
  /** @return string[] */
  public function getBeatenScoreTimeSpans()
  {
    return $this->beatenScoreTimeSpans;
  }
  /** @param string */
  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }
  /** @return string */
  public function getFormattedScore()
  {
    return $this->formattedScore;
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
  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }
  /** @return string */
  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }
  /** @param string */
  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }
  /** @return string */
  public function getScoreTag()
  {
    return $this->scoreTag;
  }
  /** @param PlayerScore[] */
  public function setUnbeatenScores($unbeatenScores)
  {
    $this->unbeatenScores = $unbeatenScores;
  }
  /** @return PlayerScore[] */
  public function getUnbeatenScores()
  {
    return $this->unbeatenScores;
  }
}

class PlayerScoreSubmissionList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var ScoreSubmission[] */
  public $scores;
  protected $collection_key = 'scores';
  protected $scoresType = ScoreSubmission::class;
  protected $scoresDataType = 'array';
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
  /** @param ScoreSubmission[] */
  public function setScores($scores)
  {
    $this->scores = $scores;
  }
  /** @return ScoreSubmission[] */
  public function getScores()
  {
    return $this->scores;
  }
}

class ProfileSettings extends \Google\Model
{
  /** @var string */
  public $friendsListVisibility;
  /** @var string */
  public $kind;
  /** @var bool */
  public $profileVisible;

  /** @param string */
  public function setFriendsListVisibility($friendsListVisibility)
  {
    $this->friendsListVisibility = $friendsListVisibility;
  }
  /** @return string */
  public function getFriendsListVisibility()
  {
    return $this->friendsListVisibility;
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

class RevisionCheckResponse extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $kind;
  /** @var string */
  public $revisionStatus;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setRevisionStatus($revisionStatus)
  {
    $this->revisionStatus = $revisionStatus;
  }
  /** @return string */
  public function getRevisionStatus()
  {
    return $this->revisionStatus;
  }
}

class ScopedPlayerIds extends \Google\Model
{
  /** @var string */
  public $developerPlayerKey;
  /** @var string */
  public $gamePlayerId;

  /** @param string */
  public function setDeveloperPlayerKey($developerPlayerKey)
  {
    $this->developerPlayerKey = $developerPlayerKey;
  }
  /** @return string */
  public function getDeveloperPlayerKey()
  {
    return $this->developerPlayerKey;
  }
  /** @param string */
  public function setGamePlayerId($gamePlayerId)
  {
    $this->gamePlayerId = $gamePlayerId;
  }
  /** @return string */
  public function getGamePlayerId()
  {
    return $this->gamePlayerId;
  }
}

class ScoreSubmission extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $leaderboardId;
  /** @var string */
  public $score;
  /** @var string */
  public $scoreTag;
  /** @var string */
  public $signature;

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
  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }
  /** @return string */
  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }
  /** @param string */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return string */
  public function getScore()
  {
    return $this->score;
  }
  /** @param string */
  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }
  /** @return string */
  public function getScoreTag()
  {
    return $this->scoreTag;
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
}

class Snapshot extends \Google\Model
{
  /** @var SnapshotImage */
  public $coverImage;
  /** @var string */
  public $description;
  /** @var string */
  public $driveId;
  /** @var string */
  public $durationMillis;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastModifiedMillis;
  /** @var string */
  public $progressValue;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  /** @var string */
  public $uniqueName;
  protected $coverImageType = SnapshotImage::class;
  protected $coverImageDataType = '';
  /** @param SnapshotImage */
  public function setCoverImage(SnapshotImage $coverImage)
  {
    $this->coverImage = $coverImage;
  }
  /** @return SnapshotImage */
  public function getCoverImage()
  {
    return $this->coverImage;
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
  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }
  /** @return string */
  public function getDriveId()
  {
    return $this->driveId;
  }
  /** @param string */
  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
  }
  /** @return string */
  public function getDurationMillis()
  {
    return $this->durationMillis;
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
  public function setLastModifiedMillis($lastModifiedMillis)
  {
    $this->lastModifiedMillis = $lastModifiedMillis;
  }
  /** @return string */
  public function getLastModifiedMillis()
  {
    return $this->lastModifiedMillis;
  }
  /** @param string */
  public function setProgressValue($progressValue)
  {
    $this->progressValue = $progressValue;
  }
  /** @return string */
  public function getProgressValue()
  {
    return $this->progressValue;
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
  public function setUniqueName($uniqueName)
  {
    $this->uniqueName = $uniqueName;
  }
  /** @return string */
  public function getUniqueName()
  {
    return $this->uniqueName;
  }
}

class SnapshotImage extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $kind;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $url;
  /** @var int */
  public $width;
  protected $internal_gapi_mappings = [
        "mimeType" => "mime_type",
  ];
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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

class SnapshotListResponse extends \Google\Collection
{
  /** @var Snapshot[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Snapshot::class;
  protected $itemsDataType = 'array';
  /** @param Snapshot[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Snapshot[] */
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

class StatsResponse extends \Google\Model
{
  /** @var float */
  public $avgSessionLengthMinutes;
  /** @var float */
  public $churnProbability;
  /** @var int */
  public $daysSinceLastPlayed;
  /** @var float */
  public $highSpenderProbability;
  /** @var string */
  public $kind;
  /** @var int */
  public $numPurchases;
  /** @var int */
  public $numSessions;
  /** @var float */
  public $numSessionsPercentile;
  /** @var float */
  public $spendPercentile;
  /** @var float */
  public $spendProbability;
  /** @var float */
  public $totalSpendNext28Days;
  protected $internal_gapi_mappings = [
        "avgSessionLengthMinutes" => "avg_session_length_minutes",
        "churnProbability" => "churn_probability",
        "daysSinceLastPlayed" => "days_since_last_played",
        "highSpenderProbability" => "high_spender_probability",
        "numPurchases" => "num_purchases",
        "numSessions" => "num_sessions",
        "numSessionsPercentile" => "num_sessions_percentile",
        "spendPercentile" => "spend_percentile",
        "spendProbability" => "spend_probability",
        "totalSpendNext28Days" => "total_spend_next_28_days",
  ];
  /** @param float */
  public function setAvgSessionLengthMinutes($avgSessionLengthMinutes)
  {
    $this->avgSessionLengthMinutes = $avgSessionLengthMinutes;
  }
  /** @return float */
  public function getAvgSessionLengthMinutes()
  {
    return $this->avgSessionLengthMinutes;
  }
  /** @param float */
  public function setChurnProbability($churnProbability)
  {
    $this->churnProbability = $churnProbability;
  }
  /** @return float */
  public function getChurnProbability()
  {
    return $this->churnProbability;
  }
  /** @param int */
  public function setDaysSinceLastPlayed($daysSinceLastPlayed)
  {
    $this->daysSinceLastPlayed = $daysSinceLastPlayed;
  }
  /** @return int */
  public function getDaysSinceLastPlayed()
  {
    return $this->daysSinceLastPlayed;
  }
  /** @param float */
  public function setHighSpenderProbability($highSpenderProbability)
  {
    $this->highSpenderProbability = $highSpenderProbability;
  }
  /** @return float */
  public function getHighSpenderProbability()
  {
    return $this->highSpenderProbability;
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
  public function setNumPurchases($numPurchases)
  {
    $this->numPurchases = $numPurchases;
  }
  /** @return int */
  public function getNumPurchases()
  {
    return $this->numPurchases;
  }
  /** @param int */
  public function setNumSessions($numSessions)
  {
    $this->numSessions = $numSessions;
  }
  /** @return int */
  public function getNumSessions()
  {
    return $this->numSessions;
  }
  /** @param float */
  public function setNumSessionsPercentile($numSessionsPercentile)
  {
    $this->numSessionsPercentile = $numSessionsPercentile;
  }
  /** @return float */
  public function getNumSessionsPercentile()
  {
    return $this->numSessionsPercentile;
  }
  /** @param float */
  public function setSpendPercentile($spendPercentile)
  {
    $this->spendPercentile = $spendPercentile;
  }
  /** @return float */
  public function getSpendPercentile()
  {
    return $this->spendPercentile;
  }
  /** @param float */
  public function setSpendProbability($spendProbability)
  {
    $this->spendProbability = $spendProbability;
  }
  /** @return float */
  public function getSpendProbability()
  {
    return $this->spendProbability;
  }
  /** @param float */
  public function setTotalSpendNext28Days($totalSpendNext28Days)
  {
    $this->totalSpendNext28Days = $totalSpendNext28Days;
  }
  /** @return float */
  public function getTotalSpendNext28Days()
  {
    return $this->totalSpendNext28Days;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AchievementDefinition::class, 'Google_Service_Games_AchievementDefinition');
class_alias(AchievementDefinitionsListResponse::class, 'Google_Service_Games_AchievementDefinitionsListResponse');
class_alias(AchievementIncrementResponse::class, 'Google_Service_Games_AchievementIncrementResponse');
class_alias(AchievementRevealResponse::class, 'Google_Service_Games_AchievementRevealResponse');
class_alias(AchievementSetStepsAtLeastResponse::class, 'Google_Service_Games_AchievementSetStepsAtLeastResponse');
class_alias(AchievementUnlockResponse::class, 'Google_Service_Games_AchievementUnlockResponse');
class_alias(AchievementUpdateMultipleRequest::class, 'Google_Service_Games_AchievementUpdateMultipleRequest');
class_alias(AchievementUpdateMultipleResponse::class, 'Google_Service_Games_AchievementUpdateMultipleResponse');
class_alias(AchievementUpdateRequest::class, 'Google_Service_Games_AchievementUpdateRequest');
class_alias(AchievementUpdateResponse::class, 'Google_Service_Games_AchievementUpdateResponse');
class_alias(Application::class, 'Google_Service_Games_Application');
class_alias(ApplicationCategory::class, 'Google_Service_Games_ApplicationCategory');
class_alias(ApplicationVerifyResponse::class, 'Google_Service_Games_ApplicationVerifyResponse');
class_alias(Category::class, 'Google_Service_Games_Category');
class_alias(CategoryListResponse::class, 'Google_Service_Games_CategoryListResponse');
class_alias(EndPoint::class, 'Google_Service_Games_EndPoint');
class_alias(EventBatchRecordFailure::class, 'Google_Service_Games_EventBatchRecordFailure');
class_alias(EventChild::class, 'Google_Service_Games_EventChild');
class_alias(EventDefinition::class, 'Google_Service_Games_EventDefinition');
class_alias(EventDefinitionListResponse::class, 'Google_Service_Games_EventDefinitionListResponse');
class_alias(EventPeriodRange::class, 'Google_Service_Games_EventPeriodRange');
class_alias(EventPeriodUpdate::class, 'Google_Service_Games_EventPeriodUpdate');
class_alias(EventRecordFailure::class, 'Google_Service_Games_EventRecordFailure');
class_alias(EventRecordRequest::class, 'Google_Service_Games_EventRecordRequest');
class_alias(EventUpdateRequest::class, 'Google_Service_Games_EventUpdateRequest');
class_alias(EventUpdateResponse::class, 'Google_Service_Games_EventUpdateResponse');
class_alias(GamesAchievementIncrement::class, 'Google_Service_Games_GamesAchievementIncrement');
class_alias(GamesAchievementSetStepsAtLeast::class, 'Google_Service_Games_GamesAchievementSetStepsAtLeast');
class_alias(ImageAsset::class, 'Google_Service_Games_ImageAsset');
class_alias(Instance::class, 'Google_Service_Games_Instance');
class_alias(InstanceAndroidDetails::class, 'Google_Service_Games_InstanceAndroidDetails');
class_alias(InstanceIosDetails::class, 'Google_Service_Games_InstanceIosDetails');
class_alias(InstanceWebDetails::class, 'Google_Service_Games_InstanceWebDetails');
class_alias(Leaderboard::class, 'Google_Service_Games_Leaderboard');
class_alias(LeaderboardEntry::class, 'Google_Service_Games_LeaderboardEntry');
class_alias(LeaderboardListResponse::class, 'Google_Service_Games_LeaderboardListResponse');
class_alias(LeaderboardScoreRank::class, 'Google_Service_Games_LeaderboardScoreRank');
class_alias(LeaderboardScores::class, 'Google_Service_Games_LeaderboardScores');
class_alias(MetagameConfig::class, 'Google_Service_Games_MetagameConfig');
class_alias(Player::class, 'Google_Service_Games_Player');
class_alias(PlayerAchievement::class, 'Google_Service_Games_PlayerAchievement');
class_alias(PlayerAchievementListResponse::class, 'Google_Service_Games_PlayerAchievementListResponse');
class_alias(PlayerEvent::class, 'Google_Service_Games_PlayerEvent');
class_alias(PlayerEventListResponse::class, 'Google_Service_Games_PlayerEventListResponse');
class_alias(PlayerExperienceInfo::class, 'Google_Service_Games_PlayerExperienceInfo');
class_alias(PlayerLeaderboardScore::class, 'Google_Service_Games_PlayerLeaderboardScore');
class_alias(PlayerLeaderboardScoreListResponse::class, 'Google_Service_Games_PlayerLeaderboardScoreListResponse');
class_alias(PlayerLevel::class, 'Google_Service_Games_PlayerLevel');
class_alias(PlayerListResponse::class, 'Google_Service_Games_PlayerListResponse');
class_alias(PlayerName::class, 'Google_Service_Games_PlayerName');
class_alias(PlayerScore::class, 'Google_Service_Games_PlayerScore');
class_alias(PlayerScoreListResponse::class, 'Google_Service_Games_PlayerScoreListResponse');
class_alias(PlayerScoreResponse::class, 'Google_Service_Games_PlayerScoreResponse');
class_alias(PlayerScoreSubmissionList::class, 'Google_Service_Games_PlayerScoreSubmissionList');
class_alias(ProfileSettings::class, 'Google_Service_Games_ProfileSettings');
class_alias(RevisionCheckResponse::class, 'Google_Service_Games_RevisionCheckResponse');
class_alias(ScopedPlayerIds::class, 'Google_Service_Games_ScopedPlayerIds');
class_alias(ScoreSubmission::class, 'Google_Service_Games_ScoreSubmission');
class_alias(Snapshot::class, 'Google_Service_Games_Snapshot');
class_alias(SnapshotImage::class, 'Google_Service_Games_SnapshotImage');
class_alias(SnapshotListResponse::class, 'Google_Service_Games_SnapshotListResponse');
class_alias(StatsResponse::class, 'Google_Service_Games_StatsResponse');
