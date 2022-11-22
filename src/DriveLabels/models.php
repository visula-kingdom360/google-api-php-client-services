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

namespace Google\Service\DriveLabels;

class GoogleAppsDriveLabelsV2BadgeColors extends \Google\Model
{
  /** @var GoogleTypeColor */
  public $backgroundColor;
  /** @var GoogleTypeColor */
  public $foregroundColor;
  /** @var GoogleTypeColor */
  public $soloColor;
  protected $backgroundColorType = GoogleTypeColor::class;
  protected $backgroundColorDataType = '';
  protected $foregroundColorType = GoogleTypeColor::class;
  protected $foregroundColorDataType = '';
  protected $soloColorType = GoogleTypeColor::class;
  protected $soloColorDataType = '';
  /** @param GoogleTypeColor */
  public function setBackgroundColor(GoogleTypeColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return GoogleTypeColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param GoogleTypeColor */
  public function setForegroundColor(GoogleTypeColor $foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }
  /** @return GoogleTypeColor */
  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }
  /** @param GoogleTypeColor */
  public function setSoloColor(GoogleTypeColor $soloColor)
  {
    $this->soloColor = $soloColor;
  }
  /** @return GoogleTypeColor */
  public function getSoloColor()
  {
    return $this->soloColor;
  }
}

class GoogleAppsDriveLabelsV2BadgeConfig extends \Google\Model
{
  /** @var GoogleTypeColor */
  public $color;
  /** @var string */
  public $priorityOverride;
  protected $colorType = GoogleTypeColor::class;
  protected $colorDataType = '';
  /** @param GoogleTypeColor */
  public function setColor(GoogleTypeColor $color)
  {
    $this->color = $color;
  }
  /** @return GoogleTypeColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setPriorityOverride($priorityOverride)
  {
    $this->priorityOverride = $priorityOverride;
  }
  /** @return string */
  public function getPriorityOverride()
  {
    return $this->priorityOverride;
  }
}

class GoogleAppsDriveLabelsV2Field extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2FieldAppliedCapabilities */
  public $appliedCapabilities;
  /** @var string */
  public $createTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $creator;
  /** @var GoogleAppsDriveLabelsV2FieldDateOptions */
  public $dateOptions;
  /** @var string */
  public $disableTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $disabler;
  /** @var GoogleAppsDriveLabelsV2FieldDisplayHints */
  public $displayHints;
  /** @var string */
  public $id;
  /** @var GoogleAppsDriveLabelsV2FieldIntegerOptions */
  public $integerOptions;
  /** @var GoogleAppsDriveLabelsV2Lifecycle */
  public $lifecycle;
  /** @var GoogleAppsDriveLabelsV2LockStatus */
  public $lockStatus;
  /** @var GoogleAppsDriveLabelsV2FieldProperties */
  public $properties;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $publisher;
  /** @var string */
  public $queryKey;
  /** @var GoogleAppsDriveLabelsV2FieldSchemaCapabilities */
  public $schemaCapabilities;
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptions */
  public $selectionOptions;
  /** @var GoogleAppsDriveLabelsV2FieldTextOptions */
  public $textOptions;
  /** @var string */
  public $updateTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $updater;
  /** @var GoogleAppsDriveLabelsV2FieldUserOptions */
  public $userOptions;
  protected $appliedCapabilitiesType = GoogleAppsDriveLabelsV2FieldAppliedCapabilities::class;
  protected $appliedCapabilitiesDataType = '';
  protected $creatorType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $creatorDataType = '';
  protected $dateOptionsType = GoogleAppsDriveLabelsV2FieldDateOptions::class;
  protected $dateOptionsDataType = '';
  protected $disablerType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $disablerDataType = '';
  protected $displayHintsType = GoogleAppsDriveLabelsV2FieldDisplayHints::class;
  protected $displayHintsDataType = '';
  protected $integerOptionsType = GoogleAppsDriveLabelsV2FieldIntegerOptions::class;
  protected $integerOptionsDataType = '';
  protected $lifecycleType = GoogleAppsDriveLabelsV2Lifecycle::class;
  protected $lifecycleDataType = '';
  protected $lockStatusType = GoogleAppsDriveLabelsV2LockStatus::class;
  protected $lockStatusDataType = '';
  protected $propertiesType = GoogleAppsDriveLabelsV2FieldProperties::class;
  protected $propertiesDataType = '';
  protected $publisherType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $publisherDataType = '';
  protected $schemaCapabilitiesType = GoogleAppsDriveLabelsV2FieldSchemaCapabilities::class;
  protected $schemaCapabilitiesDataType = '';
  protected $selectionOptionsType = GoogleAppsDriveLabelsV2FieldSelectionOptions::class;
  protected $selectionOptionsDataType = '';
  protected $textOptionsType = GoogleAppsDriveLabelsV2FieldTextOptions::class;
  protected $textOptionsDataType = '';
  protected $updaterType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $updaterDataType = '';
  protected $userOptionsType = GoogleAppsDriveLabelsV2FieldUserOptions::class;
  protected $userOptionsDataType = '';
  /** @param GoogleAppsDriveLabelsV2FieldAppliedCapabilities */
  public function setAppliedCapabilities(GoogleAppsDriveLabelsV2FieldAppliedCapabilities $appliedCapabilities)
  {
    $this->appliedCapabilities = $appliedCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2FieldAppliedCapabilities */
  public function getAppliedCapabilities()
  {
    return $this->appliedCapabilities;
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
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setCreator(GoogleAppsDriveLabelsV2UserInfo $creator)
  {
    $this->creator = $creator;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param GoogleAppsDriveLabelsV2FieldDateOptions */
  public function setDateOptions(GoogleAppsDriveLabelsV2FieldDateOptions $dateOptions)
  {
    $this->dateOptions = $dateOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldDateOptions */
  public function getDateOptions()
  {
    return $this->dateOptions;
  }
  /** @param string */
  public function setDisableTime($disableTime)
  {
    $this->disableTime = $disableTime;
  }
  /** @return string */
  public function getDisableTime()
  {
    return $this->disableTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setDisabler(GoogleAppsDriveLabelsV2UserInfo $disabler)
  {
    $this->disabler = $disabler;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getDisabler()
  {
    return $this->disabler;
  }
  /** @param GoogleAppsDriveLabelsV2FieldDisplayHints */
  public function setDisplayHints(GoogleAppsDriveLabelsV2FieldDisplayHints $displayHints)
  {
    $this->displayHints = $displayHints;
  }
  /** @return GoogleAppsDriveLabelsV2FieldDisplayHints */
  public function getDisplayHints()
  {
    return $this->displayHints;
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
  /** @param GoogleAppsDriveLabelsV2FieldIntegerOptions */
  public function setIntegerOptions(GoogleAppsDriveLabelsV2FieldIntegerOptions $integerOptions)
  {
    $this->integerOptions = $integerOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldIntegerOptions */
  public function getIntegerOptions()
  {
    return $this->integerOptions;
  }
  /** @param GoogleAppsDriveLabelsV2Lifecycle */
  public function setLifecycle(GoogleAppsDriveLabelsV2Lifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /** @return GoogleAppsDriveLabelsV2Lifecycle */
  public function getLifecycle()
  {
    return $this->lifecycle;
  }
  /** @param GoogleAppsDriveLabelsV2LockStatus */
  public function setLockStatus(GoogleAppsDriveLabelsV2LockStatus $lockStatus)
  {
    $this->lockStatus = $lockStatus;
  }
  /** @return GoogleAppsDriveLabelsV2LockStatus */
  public function getLockStatus()
  {
    return $this->lockStatus;
  }
  /** @param GoogleAppsDriveLabelsV2FieldProperties */
  public function setProperties(GoogleAppsDriveLabelsV2FieldProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleAppsDriveLabelsV2FieldProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setPublisher(GoogleAppsDriveLabelsV2UserInfo $publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param string */
  public function setQueryKey($queryKey)
  {
    $this->queryKey = $queryKey;
  }
  /** @return string */
  public function getQueryKey()
  {
    return $this->queryKey;
  }
  /** @param GoogleAppsDriveLabelsV2FieldSchemaCapabilities */
  public function setSchemaCapabilities(GoogleAppsDriveLabelsV2FieldSchemaCapabilities $schemaCapabilities)
  {
    $this->schemaCapabilities = $schemaCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSchemaCapabilities */
  public function getSchemaCapabilities()
  {
    return $this->schemaCapabilities;
  }
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptions */
  public function setSelectionOptions(GoogleAppsDriveLabelsV2FieldSelectionOptions $selectionOptions)
  {
    $this->selectionOptions = $selectionOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptions */
  public function getSelectionOptions()
  {
    return $this->selectionOptions;
  }
  /** @param GoogleAppsDriveLabelsV2FieldTextOptions */
  public function setTextOptions(GoogleAppsDriveLabelsV2FieldTextOptions $textOptions)
  {
    $this->textOptions = $textOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldTextOptions */
  public function getTextOptions()
  {
    return $this->textOptions;
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
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setUpdater(GoogleAppsDriveLabelsV2UserInfo $updater)
  {
    $this->updater = $updater;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getUpdater()
  {
    return $this->updater;
  }
  /** @param GoogleAppsDriveLabelsV2FieldUserOptions */
  public function setUserOptions(GoogleAppsDriveLabelsV2FieldUserOptions $userOptions)
  {
    $this->userOptions = $userOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldUserOptions */
  public function getUserOptions()
  {
    return $this->userOptions;
  }
}

class GoogleAppsDriveLabelsV2FieldAppliedCapabilities extends \Google\Model
{
  /** @var bool */
  public $canRead;
  /** @var bool */
  public $canSearch;
  /** @var bool */
  public $canWrite;

  /** @param bool */
  public function setCanRead($canRead)
  {
    $this->canRead = $canRead;
  }
  /** @return bool */
  public function getCanRead()
  {
    return $this->canRead;
  }
  /** @param bool */
  public function setCanSearch($canSearch)
  {
    $this->canSearch = $canSearch;
  }
  /** @return bool */
  public function getCanSearch()
  {
    return $this->canSearch;
  }
  /** @param bool */
  public function setCanWrite($canWrite)
  {
    $this->canWrite = $canWrite;
  }
  /** @return bool */
  public function getCanWrite()
  {
    return $this->canWrite;
  }
}

class GoogleAppsDriveLabelsV2FieldDateOptions extends \Google\Model
{
  /** @var string */
  public $dateFormat;
  /** @var string */
  public $dateFormatType;
  /** @var GoogleTypeDate */
  public $maxValue;
  /** @var GoogleTypeDate */
  public $minValue;
  protected $maxValueType = GoogleTypeDate::class;
  protected $maxValueDataType = '';
  protected $minValueType = GoogleTypeDate::class;
  protected $minValueDataType = '';
  /** @param string */
  public function setDateFormat($dateFormat)
  {
    $this->dateFormat = $dateFormat;
  }
  /** @return string */
  public function getDateFormat()
  {
    return $this->dateFormat;
  }
  /** @param string */
  public function setDateFormatType($dateFormatType)
  {
    $this->dateFormatType = $dateFormatType;
  }
  /** @return string */
  public function getDateFormatType()
  {
    return $this->dateFormatType;
  }
  /** @param GoogleTypeDate */
  public function setMaxValue(GoogleTypeDate $maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return GoogleTypeDate */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param GoogleTypeDate */
  public function setMinValue(GoogleTypeDate $minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return GoogleTypeDate */
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class GoogleAppsDriveLabelsV2FieldDisplayHints extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var bool */
  public $hiddenInSearch;
  /** @var bool */
  public $required;
  /** @var bool */
  public $shownInApply;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param bool */
  public function setHiddenInSearch($hiddenInSearch)
  {
    $this->hiddenInSearch = $hiddenInSearch;
  }
  /** @return bool */
  public function getHiddenInSearch()
  {
    return $this->hiddenInSearch;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
  /** @param bool */
  public function setShownInApply($shownInApply)
  {
    $this->shownInApply = $shownInApply;
  }
  /** @return bool */
  public function getShownInApply()
  {
    return $this->shownInApply;
  }
}

class GoogleAppsDriveLabelsV2FieldIntegerOptions extends \Google\Model
{
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;

  /** @param string */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class GoogleAppsDriveLabelsV2FieldListOptions extends \Google\Model
{
  /** @var int */
  public $maxEntries;

  /** @param int */
  public function setMaxEntries($maxEntries)
  {
    $this->maxEntries = $maxEntries;
  }
  /** @return int */
  public function getMaxEntries()
  {
    return $this->maxEntries;
  }
}

class GoogleAppsDriveLabelsV2FieldProperties extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $insertBeforeField;
  /** @var bool */
  public $required;

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
  public function setInsertBeforeField($insertBeforeField)
  {
    $this->insertBeforeField = $insertBeforeField;
  }
  /** @return string */
  public function getInsertBeforeField()
  {
    return $this->insertBeforeField;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
}

class GoogleAppsDriveLabelsV2FieldSchemaCapabilities extends \Google\Model
{
  /** @var bool */
  public $canDelete;
  /** @var bool */
  public $canDisable;
  /** @var bool */
  public $canEnable;
  /** @var bool */
  public $canUpdate;

  /** @param bool */
  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  /** @return bool */
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  /** @param bool */
  public function setCanDisable($canDisable)
  {
    $this->canDisable = $canDisable;
  }
  /** @return bool */
  public function getCanDisable()
  {
    return $this->canDisable;
  }
  /** @param bool */
  public function setCanEnable($canEnable)
  {
    $this->canEnable = $canEnable;
  }
  /** @return bool */
  public function getCanEnable()
  {
    return $this->canEnable;
  }
  /** @param bool */
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  /** @return bool */
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptions extends \Google\Collection
{
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice[] */
  public $choices;
  /** @var GoogleAppsDriveLabelsV2FieldListOptions */
  public $listOptions;
  protected $collection_key = 'choices';
  protected $choicesType = GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice::class;
  protected $choicesDataType = 'array';
  protected $listOptionsType = GoogleAppsDriveLabelsV2FieldListOptions::class;
  protected $listOptionsDataType = '';
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice[] */
  public function setChoices($choices)
  {
    $this->choices = $choices;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice[] */
  public function getChoices()
  {
    return $this->choices;
  }
  /** @param GoogleAppsDriveLabelsV2FieldListOptions */
  public function setListOptions(GoogleAppsDriveLabelsV2FieldListOptions $listOptions)
  {
    $this->listOptions = $listOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldListOptions */
  public function getListOptions()
  {
    return $this->listOptions;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities */
  public $appliedCapabilities;
  /** @var string */
  public $createTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $creator;
  /** @var string */
  public $disableTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $disabler;
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints */
  public $displayHints;
  /** @var string */
  public $id;
  /** @var GoogleAppsDriveLabelsV2Lifecycle */
  public $lifecycle;
  /** @var GoogleAppsDriveLabelsV2LockStatus */
  public $lockStatus;
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties */
  public $properties;
  /** @var string */
  public $publishTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $publisher;
  /** @var GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities */
  public $schemaCapabilities;
  /** @var string */
  public $updateTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $updater;
  protected $appliedCapabilitiesType = GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities::class;
  protected $appliedCapabilitiesDataType = '';
  protected $creatorType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $creatorDataType = '';
  protected $disablerType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $disablerDataType = '';
  protected $displayHintsType = GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints::class;
  protected $displayHintsDataType = '';
  protected $lifecycleType = GoogleAppsDriveLabelsV2Lifecycle::class;
  protected $lifecycleDataType = '';
  protected $lockStatusType = GoogleAppsDriveLabelsV2LockStatus::class;
  protected $lockStatusDataType = '';
  protected $propertiesType = GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties::class;
  protected $propertiesDataType = '';
  protected $publisherType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $publisherDataType = '';
  protected $schemaCapabilitiesType = GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities::class;
  protected $schemaCapabilitiesDataType = '';
  protected $updaterType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $updaterDataType = '';
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities */
  public function setAppliedCapabilities(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities $appliedCapabilities)
  {
    $this->appliedCapabilities = $appliedCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities */
  public function getAppliedCapabilities()
  {
    return $this->appliedCapabilities;
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
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setCreator(GoogleAppsDriveLabelsV2UserInfo $creator)
  {
    $this->creator = $creator;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param string */
  public function setDisableTime($disableTime)
  {
    $this->disableTime = $disableTime;
  }
  /** @return string */
  public function getDisableTime()
  {
    return $this->disableTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setDisabler(GoogleAppsDriveLabelsV2UserInfo $disabler)
  {
    $this->disabler = $disabler;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getDisabler()
  {
    return $this->disabler;
  }
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints */
  public function setDisplayHints(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints $displayHints)
  {
    $this->displayHints = $displayHints;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints */
  public function getDisplayHints()
  {
    return $this->displayHints;
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
  /** @param GoogleAppsDriveLabelsV2Lifecycle */
  public function setLifecycle(GoogleAppsDriveLabelsV2Lifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /** @return GoogleAppsDriveLabelsV2Lifecycle */
  public function getLifecycle()
  {
    return $this->lifecycle;
  }
  /** @param GoogleAppsDriveLabelsV2LockStatus */
  public function setLockStatus(GoogleAppsDriveLabelsV2LockStatus $lockStatus)
  {
    $this->lockStatus = $lockStatus;
  }
  /** @return GoogleAppsDriveLabelsV2LockStatus */
  public function getLockStatus()
  {
    return $this->lockStatus;
  }
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties */
  public function setProperties(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setPublisher(GoogleAppsDriveLabelsV2UserInfo $publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities */
  public function setSchemaCapabilities(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities $schemaCapabilities)
  {
    $this->schemaCapabilities = $schemaCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities */
  public function getSchemaCapabilities()
  {
    return $this->schemaCapabilities;
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
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setUpdater(GoogleAppsDriveLabelsV2UserInfo $updater)
  {
    $this->updater = $updater;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getUpdater()
  {
    return $this->updater;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities extends \Google\Model
{
  /** @var bool */
  public $canRead;
  /** @var bool */
  public $canSearch;
  /** @var bool */
  public $canSelect;

  /** @param bool */
  public function setCanRead($canRead)
  {
    $this->canRead = $canRead;
  }
  /** @return bool */
  public function getCanRead()
  {
    return $this->canRead;
  }
  /** @param bool */
  public function setCanSearch($canSearch)
  {
    $this->canSearch = $canSearch;
  }
  /** @return bool */
  public function getCanSearch()
  {
    return $this->canSearch;
  }
  /** @param bool */
  public function setCanSelect($canSelect)
  {
    $this->canSelect = $canSelect;
  }
  /** @return bool */
  public function getCanSelect()
  {
    return $this->canSelect;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2BadgeColors */
  public $badgeColors;
  /** @var string */
  public $badgePriority;
  /** @var GoogleAppsDriveLabelsV2BadgeColors */
  public $darkBadgeColors;
  /** @var bool */
  public $disabled;
  /** @var bool */
  public $hiddenInSearch;
  /** @var bool */
  public $shownInApply;
  protected $badgeColorsType = GoogleAppsDriveLabelsV2BadgeColors::class;
  protected $badgeColorsDataType = '';
  protected $darkBadgeColorsType = GoogleAppsDriveLabelsV2BadgeColors::class;
  protected $darkBadgeColorsDataType = '';
  /** @param GoogleAppsDriveLabelsV2BadgeColors */
  public function setBadgeColors(GoogleAppsDriveLabelsV2BadgeColors $badgeColors)
  {
    $this->badgeColors = $badgeColors;
  }
  /** @return GoogleAppsDriveLabelsV2BadgeColors */
  public function getBadgeColors()
  {
    return $this->badgeColors;
  }
  /** @param string */
  public function setBadgePriority($badgePriority)
  {
    $this->badgePriority = $badgePriority;
  }
  /** @return string */
  public function getBadgePriority()
  {
    return $this->badgePriority;
  }
  /** @param GoogleAppsDriveLabelsV2BadgeColors */
  public function setDarkBadgeColors(GoogleAppsDriveLabelsV2BadgeColors $darkBadgeColors)
  {
    $this->darkBadgeColors = $darkBadgeColors;
  }
  /** @return GoogleAppsDriveLabelsV2BadgeColors */
  public function getDarkBadgeColors()
  {
    return $this->darkBadgeColors;
  }
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param bool */
  public function setHiddenInSearch($hiddenInSearch)
  {
    $this->hiddenInSearch = $hiddenInSearch;
  }
  /** @return bool */
  public function getHiddenInSearch()
  {
    return $this->hiddenInSearch;
  }
  /** @param bool */
  public function setShownInApply($shownInApply)
  {
    $this->shownInApply = $shownInApply;
  }
  /** @return bool */
  public function getShownInApply()
  {
    return $this->shownInApply;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2BadgeConfig */
  public $badgeConfig;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $insertBeforeChoice;
  protected $badgeConfigType = GoogleAppsDriveLabelsV2BadgeConfig::class;
  protected $badgeConfigDataType = '';
  /** @param GoogleAppsDriveLabelsV2BadgeConfig */
  public function setBadgeConfig(GoogleAppsDriveLabelsV2BadgeConfig $badgeConfig)
  {
    $this->badgeConfig = $badgeConfig;
  }
  /** @return GoogleAppsDriveLabelsV2BadgeConfig */
  public function getBadgeConfig()
  {
    return $this->badgeConfig;
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
  public function setInsertBeforeChoice($insertBeforeChoice)
  {
    $this->insertBeforeChoice = $insertBeforeChoice;
  }
  /** @return string */
  public function getInsertBeforeChoice()
  {
    return $this->insertBeforeChoice;
  }
}

class GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities extends \Google\Model
{
  /** @var bool */
  public $canDelete;
  /** @var bool */
  public $canDisable;
  /** @var bool */
  public $canEnable;
  /** @var bool */
  public $canUpdate;

  /** @param bool */
  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  /** @return bool */
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  /** @param bool */
  public function setCanDisable($canDisable)
  {
    $this->canDisable = $canDisable;
  }
  /** @return bool */
  public function getCanDisable()
  {
    return $this->canDisable;
  }
  /** @param bool */
  public function setCanEnable($canEnable)
  {
    $this->canEnable = $canEnable;
  }
  /** @return bool */
  public function getCanEnable()
  {
    return $this->canEnable;
  }
  /** @param bool */
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  /** @return bool */
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
}

class GoogleAppsDriveLabelsV2FieldTextOptions extends \Google\Model
{
  /** @var int */
  public $maxLength;
  /** @var int */
  public $minLength;

  /** @param int */
  public function setMaxLength($maxLength)
  {
    $this->maxLength = $maxLength;
  }
  /** @return int */
  public function getMaxLength()
  {
    return $this->maxLength;
  }
  /** @param int */
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  /** @return int */
  public function getMinLength()
  {
    return $this->minLength;
  }
}

class GoogleAppsDriveLabelsV2FieldUserOptions extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2FieldListOptions */
  public $listOptions;
  protected $listOptionsType = GoogleAppsDriveLabelsV2FieldListOptions::class;
  protected $listOptionsDataType = '';
  /** @param GoogleAppsDriveLabelsV2FieldListOptions */
  public function setListOptions(GoogleAppsDriveLabelsV2FieldListOptions $listOptions)
  {
    $this->listOptions = $listOptions;
  }
  /** @return GoogleAppsDriveLabelsV2FieldListOptions */
  public function getListOptions()
  {
    return $this->listOptions;
  }
}

class GoogleAppsDriveLabelsV2Label extends \Google\Collection
{
  /** @var GoogleAppsDriveLabelsV2LabelAppliedCapabilities */
  public $appliedCapabilities;
  /** @var GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy */
  public $appliedLabelPolicy;
  /** @var string */
  public $createTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $creator;
  /** @var string */
  public $disableTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $disabler;
  /** @var GoogleAppsDriveLabelsV2LabelDisplayHints */
  public $displayHints;
  /** @var GoogleAppsDriveLabelsV2Field[] */
  public $fields;
  /** @var string */
  public $id;
  /** @var string */
  public $labelType;
  /** @var string */
  public $learnMoreUri;
  /** @var GoogleAppsDriveLabelsV2Lifecycle */
  public $lifecycle;
  /** @var GoogleAppsDriveLabelsV2LockStatus */
  public $lockStatus;
  /** @var string */
  public $name;
  /** @var GoogleAppsDriveLabelsV2LabelProperties */
  public $properties;
  /** @var string */
  public $publishTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $publisher;
  /** @var string */
  public $revisionCreateTime;
  /** @var GoogleAppsDriveLabelsV2UserInfo */
  public $revisionCreator;
  /** @var string */
  public $revisionId;
  /** @var GoogleAppsDriveLabelsV2LabelSchemaCapabilities */
  public $schemaCapabilities;
  protected $collection_key = 'fields';
  protected $appliedCapabilitiesType = GoogleAppsDriveLabelsV2LabelAppliedCapabilities::class;
  protected $appliedCapabilitiesDataType = '';
  protected $appliedLabelPolicyType = GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy::class;
  protected $appliedLabelPolicyDataType = '';
  protected $creatorType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $creatorDataType = '';
  protected $disablerType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $disablerDataType = '';
  protected $displayHintsType = GoogleAppsDriveLabelsV2LabelDisplayHints::class;
  protected $displayHintsDataType = '';
  protected $fieldsType = GoogleAppsDriveLabelsV2Field::class;
  protected $fieldsDataType = 'array';
  protected $lifecycleType = GoogleAppsDriveLabelsV2Lifecycle::class;
  protected $lifecycleDataType = '';
  protected $lockStatusType = GoogleAppsDriveLabelsV2LockStatus::class;
  protected $lockStatusDataType = '';
  protected $propertiesType = GoogleAppsDriveLabelsV2LabelProperties::class;
  protected $propertiesDataType = '';
  protected $publisherType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $publisherDataType = '';
  protected $revisionCreatorType = GoogleAppsDriveLabelsV2UserInfo::class;
  protected $revisionCreatorDataType = '';
  protected $schemaCapabilitiesType = GoogleAppsDriveLabelsV2LabelSchemaCapabilities::class;
  protected $schemaCapabilitiesDataType = '';
  /** @param GoogleAppsDriveLabelsV2LabelAppliedCapabilities */
  public function setAppliedCapabilities(GoogleAppsDriveLabelsV2LabelAppliedCapabilities $appliedCapabilities)
  {
    $this->appliedCapabilities = $appliedCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2LabelAppliedCapabilities */
  public function getAppliedCapabilities()
  {
    return $this->appliedCapabilities;
  }
  /** @param GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy */
  public function setAppliedLabelPolicy(GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy $appliedLabelPolicy)
  {
    $this->appliedLabelPolicy = $appliedLabelPolicy;
  }
  /** @return GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy */
  public function getAppliedLabelPolicy()
  {
    return $this->appliedLabelPolicy;
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
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setCreator(GoogleAppsDriveLabelsV2UserInfo $creator)
  {
    $this->creator = $creator;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param string */
  public function setDisableTime($disableTime)
  {
    $this->disableTime = $disableTime;
  }
  /** @return string */
  public function getDisableTime()
  {
    return $this->disableTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setDisabler(GoogleAppsDriveLabelsV2UserInfo $disabler)
  {
    $this->disabler = $disabler;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getDisabler()
  {
    return $this->disabler;
  }
  /** @param GoogleAppsDriveLabelsV2LabelDisplayHints */
  public function setDisplayHints(GoogleAppsDriveLabelsV2LabelDisplayHints $displayHints)
  {
    $this->displayHints = $displayHints;
  }
  /** @return GoogleAppsDriveLabelsV2LabelDisplayHints */
  public function getDisplayHints()
  {
    return $this->displayHints;
  }
  /** @param GoogleAppsDriveLabelsV2Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleAppsDriveLabelsV2Field[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setLabelType($labelType)
  {
    $this->labelType = $labelType;
  }
  /** @return string */
  public function getLabelType()
  {
    return $this->labelType;
  }
  /** @param string */
  public function setLearnMoreUri($learnMoreUri)
  {
    $this->learnMoreUri = $learnMoreUri;
  }
  /** @return string */
  public function getLearnMoreUri()
  {
    return $this->learnMoreUri;
  }
  /** @param GoogleAppsDriveLabelsV2Lifecycle */
  public function setLifecycle(GoogleAppsDriveLabelsV2Lifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /** @return GoogleAppsDriveLabelsV2Lifecycle */
  public function getLifecycle()
  {
    return $this->lifecycle;
  }
  /** @param GoogleAppsDriveLabelsV2LockStatus */
  public function setLockStatus(GoogleAppsDriveLabelsV2LockStatus $lockStatus)
  {
    $this->lockStatus = $lockStatus;
  }
  /** @return GoogleAppsDriveLabelsV2LockStatus */
  public function getLockStatus()
  {
    return $this->lockStatus;
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
  /** @param GoogleAppsDriveLabelsV2LabelProperties */
  public function setProperties(GoogleAppsDriveLabelsV2LabelProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleAppsDriveLabelsV2LabelProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setPublisher(GoogleAppsDriveLabelsV2UserInfo $publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /** @param string */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param GoogleAppsDriveLabelsV2UserInfo */
  public function setRevisionCreator(GoogleAppsDriveLabelsV2UserInfo $revisionCreator)
  {
    $this->revisionCreator = $revisionCreator;
  }
  /** @return GoogleAppsDriveLabelsV2UserInfo */
  public function getRevisionCreator()
  {
    return $this->revisionCreator;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param GoogleAppsDriveLabelsV2LabelSchemaCapabilities */
  public function setSchemaCapabilities(GoogleAppsDriveLabelsV2LabelSchemaCapabilities $schemaCapabilities)
  {
    $this->schemaCapabilities = $schemaCapabilities;
  }
  /** @return GoogleAppsDriveLabelsV2LabelSchemaCapabilities */
  public function getSchemaCapabilities()
  {
    return $this->schemaCapabilities;
  }
}

class GoogleAppsDriveLabelsV2LabelAppliedCapabilities extends \Google\Model
{
  /** @var bool */
  public $canApply;
  /** @var bool */
  public $canRead;
  /** @var bool */
  public $canRemove;

  /** @param bool */
  public function setCanApply($canApply)
  {
    $this->canApply = $canApply;
  }
  /** @return bool */
  public function getCanApply()
  {
    return $this->canApply;
  }
  /** @param bool */
  public function setCanRead($canRead)
  {
    $this->canRead = $canRead;
  }
  /** @return bool */
  public function getCanRead()
  {
    return $this->canRead;
  }
  /** @param bool */
  public function setCanRemove($canRemove)
  {
    $this->canRemove = $canRemove;
  }
  /** @return bool */
  public function getCanRemove()
  {
    return $this->canRemove;
  }
}

class GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy extends \Google\Model
{
  /** @var string */
  public $copyMode;

  /** @param string */
  public function setCopyMode($copyMode)
  {
    $this->copyMode = $copyMode;
  }
  /** @return string */
  public function getCopyMode()
  {
    return $this->copyMode;
  }
}

class GoogleAppsDriveLabelsV2LabelDisplayHints extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var bool */
  public $hiddenInSearch;
  /** @var string */
  public $priority;
  /** @var bool */
  public $shownInApply;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param bool */
  public function setHiddenInSearch($hiddenInSearch)
  {
    $this->hiddenInSearch = $hiddenInSearch;
  }
  /** @return bool */
  public function getHiddenInSearch()
  {
    return $this->hiddenInSearch;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param bool */
  public function setShownInApply($shownInApply)
  {
    $this->shownInApply = $shownInApply;
  }
  /** @return bool */
  public function getShownInApply()
  {
    return $this->shownInApply;
  }
}

class GoogleAppsDriveLabelsV2LabelProperties extends \Google\Model
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

class GoogleAppsDriveLabelsV2LabelSchemaCapabilities extends \Google\Model
{
  /** @var bool */
  public $canDelete;
  /** @var bool */
  public $canDisable;
  /** @var bool */
  public $canEnable;
  /** @var bool */
  public $canUpdate;

  /** @param bool */
  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  /** @return bool */
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  /** @param bool */
  public function setCanDisable($canDisable)
  {
    $this->canDisable = $canDisable;
  }
  /** @return bool */
  public function getCanDisable()
  {
    return $this->canDisable;
  }
  /** @param bool */
  public function setCanEnable($canEnable)
  {
    $this->canEnable = $canEnable;
  }
  /** @return bool */
  public function getCanEnable()
  {
    return $this->canEnable;
  }
  /** @param bool */
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  /** @return bool */
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
}

class GoogleAppsDriveLabelsV2Lifecycle extends \Google\Model
{
  /** @var GoogleAppsDriveLabelsV2LifecycleDisabledPolicy */
  public $disabledPolicy;
  /** @var bool */
  public $hasUnpublishedChanges;
  /** @var string */
  public $state;
  protected $disabledPolicyType = GoogleAppsDriveLabelsV2LifecycleDisabledPolicy::class;
  protected $disabledPolicyDataType = '';
  /** @param GoogleAppsDriveLabelsV2LifecycleDisabledPolicy */
  public function setDisabledPolicy(GoogleAppsDriveLabelsV2LifecycleDisabledPolicy $disabledPolicy)
  {
    $this->disabledPolicy = $disabledPolicy;
  }
  /** @return GoogleAppsDriveLabelsV2LifecycleDisabledPolicy */
  public function getDisabledPolicy()
  {
    return $this->disabledPolicy;
  }
  /** @param bool */
  public function setHasUnpublishedChanges($hasUnpublishedChanges)
  {
    $this->hasUnpublishedChanges = $hasUnpublishedChanges;
  }
  /** @return bool */
  public function getHasUnpublishedChanges()
  {
    return $this->hasUnpublishedChanges;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
}

class GoogleAppsDriveLabelsV2LifecycleDisabledPolicy extends \Google\Model
{
  /** @var bool */
  public $hideInSearch;
  /** @var bool */
  public $showInApply;

  /** @param bool */
  public function setHideInSearch($hideInSearch)
  {
    $this->hideInSearch = $hideInSearch;
  }
  /** @return bool */
  public function getHideInSearch()
  {
    return $this->hideInSearch;
  }
  /** @param bool */
  public function setShowInApply($showInApply)
  {
    $this->showInApply = $showInApply;
  }
  /** @return bool */
  public function getShowInApply()
  {
    return $this->showInApply;
  }
}

class GoogleAppsDriveLabelsV2ListLabelsResponse extends \Google\Collection
{
  /** @var GoogleAppsDriveLabelsV2Label[] */
  public $labels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'labels';
  protected $labelsType = GoogleAppsDriveLabelsV2Label::class;
  protected $labelsDataType = 'array';
  /** @param GoogleAppsDriveLabelsV2Label[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return GoogleAppsDriveLabelsV2Label[] */
  public function getLabels()
  {
    return $this->labels;
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

class GoogleAppsDriveLabelsV2LockStatus extends \Google\Model
{
  /** @var bool */
  public $locked;

  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
  }
}

class GoogleAppsDriveLabelsV2UserInfo extends \Google\Model
{
  /** @var string */
  public $person;

  /** @param string */
  public function setPerson($person)
  {
    $this->person = $person;
  }
  /** @return string */
  public function getPerson()
  {
    return $this->person;
  }
}

class GoogleTypeColor extends \Google\Model
{
  /** @var float */
  public $alpha;
  /** @var float */
  public $blue;
  /** @var float */
  public $green;
  /** @var float */
  public $red;

  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param float */
  public function setBlue($blue)
  {
    $this->blue = $blue;
  }
  /** @return float */
  public function getBlue()
  {
    return $this->blue;
  }
  /** @param float */
  public function setGreen($green)
  {
    $this->green = $green;
  }
  /** @return float */
  public function getGreen()
  {
    return $this->green;
  }
  /** @param float */
  public function setRed($red)
  {
    $this->red = $red;
  }
  /** @return float */
  public function getRed()
  {
    return $this->red;
  }
}

class GoogleTypeDate extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAppsDriveLabelsV2BadgeColors::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2BadgeColors');
class_alias(GoogleAppsDriveLabelsV2BadgeConfig::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2BadgeConfig');
class_alias(GoogleAppsDriveLabelsV2Field::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2Field');
class_alias(GoogleAppsDriveLabelsV2FieldAppliedCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldAppliedCapabilities');
class_alias(GoogleAppsDriveLabelsV2FieldDateOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldDateOptions');
class_alias(GoogleAppsDriveLabelsV2FieldDisplayHints::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldDisplayHints');
class_alias(GoogleAppsDriveLabelsV2FieldIntegerOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldIntegerOptions');
class_alias(GoogleAppsDriveLabelsV2FieldListOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldListOptions');
class_alias(GoogleAppsDriveLabelsV2FieldProperties::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldProperties');
class_alias(GoogleAppsDriveLabelsV2FieldSchemaCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSchemaCapabilities');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptions');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptionsChoice');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceAppliedCapabilities');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceDisplayHints');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceProperties');
class_alias(GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldSelectionOptionsChoiceSchemaCapabilities');
class_alias(GoogleAppsDriveLabelsV2FieldTextOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldTextOptions');
class_alias(GoogleAppsDriveLabelsV2FieldUserOptions::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2FieldUserOptions');
class_alias(GoogleAppsDriveLabelsV2Label::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2Label');
class_alias(GoogleAppsDriveLabelsV2LabelAppliedCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LabelAppliedCapabilities');
class_alias(GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LabelAppliedLabelPolicy');
class_alias(GoogleAppsDriveLabelsV2LabelDisplayHints::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LabelDisplayHints');
class_alias(GoogleAppsDriveLabelsV2LabelProperties::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LabelProperties');
class_alias(GoogleAppsDriveLabelsV2LabelSchemaCapabilities::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LabelSchemaCapabilities');
class_alias(GoogleAppsDriveLabelsV2Lifecycle::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2Lifecycle');
class_alias(GoogleAppsDriveLabelsV2LifecycleDisabledPolicy::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LifecycleDisabledPolicy');
class_alias(GoogleAppsDriveLabelsV2ListLabelsResponse::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2ListLabelsResponse');
class_alias(GoogleAppsDriveLabelsV2LockStatus::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2LockStatus');
class_alias(GoogleAppsDriveLabelsV2UserInfo::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2UserInfo');
class_alias(GoogleTypeColor::class, 'Google_Service_DriveLabels_GoogleTypeColor');
class_alias(GoogleTypeDate::class, 'Google_Service_DriveLabels_GoogleTypeDate');
