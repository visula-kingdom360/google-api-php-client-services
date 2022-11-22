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

namespace Google\Service\ResourceSettings;

class GoogleCloudResourcesettingsV1ListSettingsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudResourcesettingsV1Setting[] */
  public $settings;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleCloudResourcesettingsV1Setting::class;
  protected $settingsDataType = 'array';
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
  /** @param GoogleCloudResourcesettingsV1Setting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleCloudResourcesettingsV1Setting[] */
  public function getSettings()
  {
    return $this->settings;
  }
}

class GoogleCloudResourcesettingsV1Setting extends \Google\Model
{
  /** @var GoogleCloudResourcesettingsV1Value */
  public $effectiveValue;
  /** @var string */
  public $etag;
  /** @var GoogleCloudResourcesettingsV1Value */
  public $localValue;
  /** @var GoogleCloudResourcesettingsV1SettingMetadata */
  public $metadata;
  /** @var string */
  public $name;
  protected $effectiveValueType = GoogleCloudResourcesettingsV1Value::class;
  protected $effectiveValueDataType = '';
  protected $localValueType = GoogleCloudResourcesettingsV1Value::class;
  protected $localValueDataType = '';
  protected $metadataType = GoogleCloudResourcesettingsV1SettingMetadata::class;
  protected $metadataDataType = '';
  /** @param GoogleCloudResourcesettingsV1Value */
  public function setEffectiveValue(GoogleCloudResourcesettingsV1Value $effectiveValue)
  {
    $this->effectiveValue = $effectiveValue;
  }
  /** @return GoogleCloudResourcesettingsV1Value */
  public function getEffectiveValue()
  {
    return $this->effectiveValue;
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
  /** @param GoogleCloudResourcesettingsV1Value */
  public function setLocalValue(GoogleCloudResourcesettingsV1Value $localValue)
  {
    $this->localValue = $localValue;
  }
  /** @return GoogleCloudResourcesettingsV1Value */
  public function getLocalValue()
  {
    return $this->localValue;
  }
  /** @param GoogleCloudResourcesettingsV1SettingMetadata */
  public function setMetadata(GoogleCloudResourcesettingsV1SettingMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GoogleCloudResourcesettingsV1SettingMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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

class GoogleCloudResourcesettingsV1SettingMetadata extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var GoogleCloudResourcesettingsV1Value */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $readOnly;
  protected $defaultValueType = GoogleCloudResourcesettingsV1Value::class;
  protected $defaultValueDataType = '';
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param GoogleCloudResourcesettingsV1Value */
  public function setDefaultValue(GoogleCloudResourcesettingsV1Value $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return GoogleCloudResourcesettingsV1Value */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  /** @param bool */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return bool */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
}

class GoogleCloudResourcesettingsV1Value extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var string */
  public $durationValue;
  /** @var GoogleCloudResourcesettingsV1ValueEnumValue */
  public $enumValue;
  /** @var GoogleCloudResourcesettingsV1ValueStringMap */
  public $stringMapValue;
  /** @var GoogleCloudResourcesettingsV1ValueStringSet */
  public $stringSetValue;
  /** @var string */
  public $stringValue;
  protected $enumValueType = GoogleCloudResourcesettingsV1ValueEnumValue::class;
  protected $enumValueDataType = '';
  protected $stringMapValueType = GoogleCloudResourcesettingsV1ValueStringMap::class;
  protected $stringMapValueDataType = '';
  protected $stringSetValueType = GoogleCloudResourcesettingsV1ValueStringSet::class;
  protected $stringSetValueDataType = '';
  /** @param bool */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /** @return bool */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /** @param string */
  public function setDurationValue($durationValue)
  {
    $this->durationValue = $durationValue;
  }
  /** @return string */
  public function getDurationValue()
  {
    return $this->durationValue;
  }
  /** @param GoogleCloudResourcesettingsV1ValueEnumValue */
  public function setEnumValue(GoogleCloudResourcesettingsV1ValueEnumValue $enumValue)
  {
    $this->enumValue = $enumValue;
  }
  /** @return GoogleCloudResourcesettingsV1ValueEnumValue */
  public function getEnumValue()
  {
    return $this->enumValue;
  }
  /** @param GoogleCloudResourcesettingsV1ValueStringMap */
  public function setStringMapValue(GoogleCloudResourcesettingsV1ValueStringMap $stringMapValue)
  {
    $this->stringMapValue = $stringMapValue;
  }
  /** @return GoogleCloudResourcesettingsV1ValueStringMap */
  public function getStringMapValue()
  {
    return $this->stringMapValue;
  }
  /** @param GoogleCloudResourcesettingsV1ValueStringSet */
  public function setStringSetValue(GoogleCloudResourcesettingsV1ValueStringSet $stringSetValue)
  {
    $this->stringSetValue = $stringSetValue;
  }
  /** @return GoogleCloudResourcesettingsV1ValueStringSet */
  public function getStringSetValue()
  {
    return $this->stringSetValue;
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

class GoogleCloudResourcesettingsV1ValueEnumValue extends \Google\Model
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

class GoogleCloudResourcesettingsV1ValueStringMap extends \Google\Model
{
  /** @var string[] */
  public $mappings;

  /** @param string[] */
  public function setMappings($mappings)
  {
    $this->mappings = $mappings;
  }
  /** @return string[] */
  public function getMappings()
  {
    return $this->mappings;
  }
}

class GoogleCloudResourcesettingsV1ValueStringSet extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudResourcesettingsV1ListSettingsResponse::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1ListSettingsResponse');
class_alias(GoogleCloudResourcesettingsV1Setting::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Setting');
class_alias(GoogleCloudResourcesettingsV1SettingMetadata::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata');
class_alias(GoogleCloudResourcesettingsV1Value::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value');
class_alias(GoogleCloudResourcesettingsV1ValueEnumValue::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1ValueEnumValue');
class_alias(GoogleCloudResourcesettingsV1ValueStringMap::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1ValueStringMap');
class_alias(GoogleCloudResourcesettingsV1ValueStringSet::class, 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1ValueStringSet');
