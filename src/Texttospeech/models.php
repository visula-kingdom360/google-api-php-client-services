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

namespace Google\Service\Texttospeech;

class AudioConfig extends \Google\Collection
{
  /** @var string */
  public $audioEncoding;
  /** @var string[] */
  public $effectsProfileId;
  public $pitch;
  /** @var int */
  public $sampleRateHertz;
  public $speakingRate;
  public $volumeGainDb;
  protected $collection_key = 'effectsProfileId';
  /** @param string */
  public function setAudioEncoding($audioEncoding)
  {
    $this->audioEncoding = $audioEncoding;
  }
  /** @return string */
  public function getAudioEncoding()
  {
    return $this->audioEncoding;
  }
  /** @param string[] */
  public function setEffectsProfileId($effectsProfileId)
  {
    $this->effectsProfileId = $effectsProfileId;
  }
  /** @return string[] */
  public function getEffectsProfileId()
  {
    return $this->effectsProfileId;
  }
  public function setPitch($pitch)
  {
    $this->pitch = $pitch;
  }
  public function getPitch()
  {
    return $this->pitch;
  }
  /** @param int */
  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }
  /** @return int */
  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }
  public function setSpeakingRate($speakingRate)
  {
    $this->speakingRate = $speakingRate;
  }
  public function getSpeakingRate()
  {
    return $this->speakingRate;
  }
  public function setVolumeGainDb($volumeGainDb)
  {
    $this->volumeGainDb = $volumeGainDb;
  }
  public function getVolumeGainDb()
  {
    return $this->volumeGainDb;
  }
}

class CustomVoiceParams extends \Google\Model
{
  /** @var string */
  public $model;
  /** @var string */
  public $reportedUsage;

  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setReportedUsage($reportedUsage)
  {
    $this->reportedUsage = $reportedUsage;
  }
  /** @return string */
  public function getReportedUsage()
  {
    return $this->reportedUsage;
  }
}

class ListVoicesResponse extends \Google\Collection
{
  /** @var Voice[] */
  public $voices;
  protected $collection_key = 'voices';
  protected $voicesType = Voice::class;
  protected $voicesDataType = 'array';
  /** @param Voice[] */
  public function setVoices($voices)
  {
    $this->voices = $voices;
  }
  /** @return Voice[] */
  public function getVoices()
  {
    return $this->voices;
  }
}

class SynthesisInput extends \Google\Model
{
  /** @var string */
  public $ssml;
  /** @var string */
  public $text;

  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
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

class SynthesizeSpeechRequest extends \Google\Model
{
  /** @var AudioConfig */
  public $audioConfig;
  /** @var SynthesisInput */
  public $input;
  /** @var VoiceSelectionParams */
  public $voice;
  protected $audioConfigType = AudioConfig::class;
  protected $audioConfigDataType = '';
  protected $inputType = SynthesisInput::class;
  protected $inputDataType = '';
  protected $voiceType = VoiceSelectionParams::class;
  protected $voiceDataType = '';
  /** @param AudioConfig */
  public function setAudioConfig(AudioConfig $audioConfig)
  {
    $this->audioConfig = $audioConfig;
  }
  /** @return AudioConfig */
  public function getAudioConfig()
  {
    return $this->audioConfig;
  }
  /** @param SynthesisInput */
  public function setInput(SynthesisInput $input)
  {
    $this->input = $input;
  }
  /** @return SynthesisInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param VoiceSelectionParams */
  public function setVoice(VoiceSelectionParams $voice)
  {
    $this->voice = $voice;
  }
  /** @return VoiceSelectionParams */
  public function getVoice()
  {
    return $this->voice;
  }
}

class SynthesizeSpeechResponse extends \Google\Model
{
  /** @var string */
  public $audioContent;

  /** @param string */
  public function setAudioContent($audioContent)
  {
    $this->audioContent = $audioContent;
  }
  /** @return string */
  public function getAudioContent()
  {
    return $this->audioContent;
  }
}

class Voice extends \Google\Collection
{
  /** @var string[] */
  public $languageCodes;
  /** @var string */
  public $name;
  /** @var int */
  public $naturalSampleRateHertz;
  /** @var string */
  public $ssmlGender;
  protected $collection_key = 'languageCodes';
  /** @param string[] */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /** @return string[] */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
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
  /** @param int */
  public function setNaturalSampleRateHertz($naturalSampleRateHertz)
  {
    $this->naturalSampleRateHertz = $naturalSampleRateHertz;
  }
  /** @return int */
  public function getNaturalSampleRateHertz()
  {
    return $this->naturalSampleRateHertz;
  }
  /** @param string */
  public function setSsmlGender($ssmlGender)
  {
    $this->ssmlGender = $ssmlGender;
  }
  /** @return string */
  public function getSsmlGender()
  {
    return $this->ssmlGender;
  }
}

class VoiceSelectionParams extends \Google\Model
{
  /** @var CustomVoiceParams */
  public $customVoice;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string */
  public $ssmlGender;
  protected $customVoiceType = CustomVoiceParams::class;
  protected $customVoiceDataType = '';
  /** @param CustomVoiceParams */
  public function setCustomVoice(CustomVoiceParams $customVoice)
  {
    $this->customVoice = $customVoice;
  }
  /** @return CustomVoiceParams */
  public function getCustomVoice()
  {
    return $this->customVoice;
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
  public function setSsmlGender($ssmlGender)
  {
    $this->ssmlGender = $ssmlGender;
  }
  /** @return string */
  public function getSsmlGender()
  {
    return $this->ssmlGender;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudioConfig::class, 'Google_Service_Texttospeech_AudioConfig');
class_alias(CustomVoiceParams::class, 'Google_Service_Texttospeech_CustomVoiceParams');
class_alias(ListVoicesResponse::class, 'Google_Service_Texttospeech_ListVoicesResponse');
class_alias(SynthesisInput::class, 'Google_Service_Texttospeech_SynthesisInput');
class_alias(SynthesizeSpeechRequest::class, 'Google_Service_Texttospeech_SynthesizeSpeechRequest');
class_alias(SynthesizeSpeechResponse::class, 'Google_Service_Texttospeech_SynthesizeSpeechResponse');
class_alias(Voice::class, 'Google_Service_Texttospeech_Voice');
class_alias(VoiceSelectionParams::class, 'Google_Service_Texttospeech_VoiceSelectionParams');
