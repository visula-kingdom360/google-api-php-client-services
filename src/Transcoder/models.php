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

namespace Google\Service\Transcoder;

class AdBreak extends \Google\Model
{
  /** @var string */
  public $startTimeOffset;

  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
}

class Animation extends \Google\Model
{
  /** @var AnimationEnd */
  public $animationEnd;
  /** @var AnimationFade */
  public $animationFade;
  /** @var AnimationStatic */
  public $animationStatic;
  protected $animationEndType = AnimationEnd::class;
  protected $animationEndDataType = '';
  protected $animationFadeType = AnimationFade::class;
  protected $animationFadeDataType = '';
  protected $animationStaticType = AnimationStatic::class;
  protected $animationStaticDataType = '';
  /** @param AnimationEnd */
  public function setAnimationEnd(AnimationEnd $animationEnd)
  {
    $this->animationEnd = $animationEnd;
  }
  /** @return AnimationEnd */
  public function getAnimationEnd()
  {
    return $this->animationEnd;
  }
  /** @param AnimationFade */
  public function setAnimationFade(AnimationFade $animationFade)
  {
    $this->animationFade = $animationFade;
  }
  /** @return AnimationFade */
  public function getAnimationFade()
  {
    return $this->animationFade;
  }
  /** @param AnimationStatic */
  public function setAnimationStatic(AnimationStatic $animationStatic)
  {
    $this->animationStatic = $animationStatic;
  }
  /** @return AnimationStatic */
  public function getAnimationStatic()
  {
    return $this->animationStatic;
  }
}

class AnimationEnd extends \Google\Model
{
  /** @var string */
  public $startTimeOffset;

  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
}

class AnimationFade extends \Google\Model
{
  /** @var string */
  public $endTimeOffset;
  /** @var string */
  public $fadeType;
  /** @var string */
  public $startTimeOffset;
  /** @var NormalizedCoordinate */
  public $xy;
  protected $xyType = NormalizedCoordinate::class;
  protected $xyDataType = '';
  /** @param string */
  public function setEndTimeOffset($endTimeOffset)
  {
    $this->endTimeOffset = $endTimeOffset;
  }
  /** @return string */
  public function getEndTimeOffset()
  {
    return $this->endTimeOffset;
  }
  /** @param string */
  public function setFadeType($fadeType)
  {
    $this->fadeType = $fadeType;
  }
  /** @return string */
  public function getFadeType()
  {
    return $this->fadeType;
  }
  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
  /** @param NormalizedCoordinate */
  public function setXy(NormalizedCoordinate $xy)
  {
    $this->xy = $xy;
  }
  /** @return NormalizedCoordinate */
  public function getXy()
  {
    return $this->xy;
  }
}

class AnimationStatic extends \Google\Model
{
  /** @var string */
  public $startTimeOffset;
  /** @var NormalizedCoordinate */
  public $xy;
  protected $xyType = NormalizedCoordinate::class;
  protected $xyDataType = '';
  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
  /** @param NormalizedCoordinate */
  public function setXy(NormalizedCoordinate $xy)
  {
    $this->xy = $xy;
  }
  /** @return NormalizedCoordinate */
  public function getXy()
  {
    return $this->xy;
  }
}

class Audio extends \Google\Model
{
  /** @var bool */
  public $highBoost;
  /** @var bool */
  public $lowBoost;
  public $lufs;

  /** @param bool */
  public function setHighBoost($highBoost)
  {
    $this->highBoost = $highBoost;
  }
  /** @return bool */
  public function getHighBoost()
  {
    return $this->highBoost;
  }
  /** @param bool */
  public function setLowBoost($lowBoost)
  {
    $this->lowBoost = $lowBoost;
  }
  /** @return bool */
  public function getLowBoost()
  {
    return $this->lowBoost;
  }
  public function setLufs($lufs)
  {
    $this->lufs = $lufs;
  }
  public function getLufs()
  {
    return $this->lufs;
  }
}

class AudioMapping extends \Google\Model
{
  /** @var string */
  public $atomKey;
  public $gainDb;
  /** @var int */
  public $inputChannel;
  /** @var string */
  public $inputKey;
  /** @var int */
  public $inputTrack;
  /** @var int */
  public $outputChannel;

  /** @param string */
  public function setAtomKey($atomKey)
  {
    $this->atomKey = $atomKey;
  }
  /** @return string */
  public function getAtomKey()
  {
    return $this->atomKey;
  }
  public function setGainDb($gainDb)
  {
    $this->gainDb = $gainDb;
  }
  public function getGainDb()
  {
    return $this->gainDb;
  }
  /** @param int */
  public function setInputChannel($inputChannel)
  {
    $this->inputChannel = $inputChannel;
  }
  /** @return int */
  public function getInputChannel()
  {
    return $this->inputChannel;
  }
  /** @param string */
  public function setInputKey($inputKey)
  {
    $this->inputKey = $inputKey;
  }
  /** @return string */
  public function getInputKey()
  {
    return $this->inputKey;
  }
  /** @param int */
  public function setInputTrack($inputTrack)
  {
    $this->inputTrack = $inputTrack;
  }
  /** @return int */
  public function getInputTrack()
  {
    return $this->inputTrack;
  }
  /** @param int */
  public function setOutputChannel($outputChannel)
  {
    $this->outputChannel = $outputChannel;
  }
  /** @return int */
  public function getOutputChannel()
  {
    return $this->outputChannel;
  }
}

class AudioStream extends \Google\Collection
{
  /** @var int */
  public $bitrateBps;
  /** @var int */
  public $channelCount;
  /** @var string[] */
  public $channelLayout;
  /** @var string */
  public $codec;
  /** @var AudioMapping[] */
  public $mapping;
  /** @var int */
  public $sampleRateHertz;
  protected $collection_key = 'mapping';
  protected $mappingType = AudioMapping::class;
  protected $mappingDataType = 'array';
  /** @param int */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return int */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param int */
  public function setChannelCount($channelCount)
  {
    $this->channelCount = $channelCount;
  }
  /** @return int */
  public function getChannelCount()
  {
    return $this->channelCount;
  }
  /** @param string[] */
  public function setChannelLayout($channelLayout)
  {
    $this->channelLayout = $channelLayout;
  }
  /** @return string[] */
  public function getChannelLayout()
  {
    return $this->channelLayout;
  }
  /** @param string */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return string */
  public function getCodec()
  {
    return $this->codec;
  }
  /** @param AudioMapping[] */
  public function setMapping($mapping)
  {
    $this->mapping = $mapping;
  }
  /** @return AudioMapping[] */
  public function getMapping()
  {
    return $this->mapping;
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
}

class BwdifConfig extends \Google\Model
{
  /** @var bool */
  public $deinterlaceAllFrames;
  /** @var string */
  public $mode;
  /** @var string */
  public $parity;

  /** @param bool */
  public function setDeinterlaceAllFrames($deinterlaceAllFrames)
  {
    $this->deinterlaceAllFrames = $deinterlaceAllFrames;
  }
  /** @return bool */
  public function getDeinterlaceAllFrames()
  {
    return $this->deinterlaceAllFrames;
  }
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param string */
  public function setParity($parity)
  {
    $this->parity = $parity;
  }
  /** @return string */
  public function getParity()
  {
    return $this->parity;
  }
}

class Color extends \Google\Model
{
  public $brightness;
  public $contrast;
  public $saturation;

  public function setBrightness($brightness)
  {
    $this->brightness = $brightness;
  }
  public function getBrightness()
  {
    return $this->brightness;
  }
  public function setContrast($contrast)
  {
    $this->contrast = $contrast;
  }
  public function getContrast()
  {
    return $this->contrast;
  }
  public function setSaturation($saturation)
  {
    $this->saturation = $saturation;
  }
  public function getSaturation()
  {
    return $this->saturation;
  }
}

class Crop extends \Google\Model
{
  /** @var int */
  public $bottomPixels;
  /** @var int */
  public $leftPixels;
  /** @var int */
  public $rightPixels;
  /** @var int */
  public $topPixels;

  /** @param int */
  public function setBottomPixels($bottomPixels)
  {
    $this->bottomPixels = $bottomPixels;
  }
  /** @return int */
  public function getBottomPixels()
  {
    return $this->bottomPixels;
  }
  /** @param int */
  public function setLeftPixels($leftPixels)
  {
    $this->leftPixels = $leftPixels;
  }
  /** @return int */
  public function getLeftPixels()
  {
    return $this->leftPixels;
  }
  /** @param int */
  public function setRightPixels($rightPixels)
  {
    $this->rightPixels = $rightPixels;
  }
  /** @return int */
  public function getRightPixels()
  {
    return $this->rightPixels;
  }
  /** @param int */
  public function setTopPixels($topPixels)
  {
    $this->topPixels = $topPixels;
  }
  /** @return int */
  public function getTopPixels()
  {
    return $this->topPixels;
  }
}

class Deblock extends \Google\Model
{
  /** @var bool */
  public $enabled;
  public $strength;

  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  public function setStrength($strength)
  {
    $this->strength = $strength;
  }
  public function getStrength()
  {
    return $this->strength;
  }
}

class Deinterlace extends \Google\Model
{
  /** @var BwdifConfig */
  public $bwdif;
  /** @var YadifConfig */
  public $yadif;
  protected $bwdifType = BwdifConfig::class;
  protected $bwdifDataType = '';
  protected $yadifType = YadifConfig::class;
  protected $yadifDataType = '';
  /** @param BwdifConfig */
  public function setBwdif(BwdifConfig $bwdif)
  {
    $this->bwdif = $bwdif;
  }
  /** @return BwdifConfig */
  public function getBwdif()
  {
    return $this->bwdif;
  }
  /** @param YadifConfig */
  public function setYadif(YadifConfig $yadif)
  {
    $this->yadif = $yadif;
  }
  /** @return YadifConfig */
  public function getYadif()
  {
    return $this->yadif;
  }
}

class Denoise extends \Google\Model
{
  public $strength;
  /** @var string */
  public $tune;

  public function setStrength($strength)
  {
    $this->strength = $strength;
  }
  public function getStrength()
  {
    return $this->strength;
  }
  /** @param string */
  public function setTune($tune)
  {
    $this->tune = $tune;
  }
  /** @return string */
  public function getTune()
  {
    return $this->tune;
  }
}

class EditAtom extends \Google\Collection
{
  /** @var string */
  public $endTimeOffset;
  /** @var string[] */
  public $inputs;
  /** @var string */
  public $key;
  /** @var string */
  public $startTimeOffset;
  protected $collection_key = 'inputs';
  /** @param string */
  public function setEndTimeOffset($endTimeOffset)
  {
    $this->endTimeOffset = $endTimeOffset;
  }
  /** @return string */
  public function getEndTimeOffset()
  {
    return $this->endTimeOffset;
  }
  /** @param string[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return string[] */
  public function getInputs()
  {
    return $this->inputs;
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
  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
}

class ElementaryStream extends \Google\Model
{
  /** @var AudioStream */
  public $audioStream;
  /** @var string */
  public $key;
  /** @var TextStream */
  public $textStream;
  /** @var VideoStream */
  public $videoStream;
  protected $audioStreamType = AudioStream::class;
  protected $audioStreamDataType = '';
  protected $textStreamType = TextStream::class;
  protected $textStreamDataType = '';
  protected $videoStreamType = VideoStream::class;
  protected $videoStreamDataType = '';
  /** @param AudioStream */
  public function setAudioStream(AudioStream $audioStream)
  {
    $this->audioStream = $audioStream;
  }
  /** @return AudioStream */
  public function getAudioStream()
  {
    return $this->audioStream;
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
  /** @param TextStream */
  public function setTextStream(TextStream $textStream)
  {
    $this->textStream = $textStream;
  }
  /** @return TextStream */
  public function getTextStream()
  {
    return $this->textStream;
  }
  /** @param VideoStream */
  public function setVideoStream(VideoStream $videoStream)
  {
    $this->videoStream = $videoStream;
  }
  /** @return VideoStream */
  public function getVideoStream()
  {
    return $this->videoStream;
  }
}

class H264CodecSettings extends \Google\Model
{
  /** @var bool */
  public $allowOpenGop;
  public $aqStrength;
  /** @var int */
  public $bFrameCount;
  /** @var bool */
  public $bPyramid;
  /** @var int */
  public $bitrateBps;
  /** @var int */
  public $crfLevel;
  /** @var bool */
  public $enableTwoPass;
  /** @var string */
  public $entropyCoder;
  public $frameRate;
  /** @var string */
  public $gopDuration;
  /** @var int */
  public $gopFrameCount;
  /** @var int */
  public $heightPixels;
  /** @var string */
  public $pixelFormat;
  /** @var string */
  public $preset;
  /** @var string */
  public $profile;
  /** @var string */
  public $rateControlMode;
  /** @var string */
  public $tune;
  /** @var int */
  public $vbvFullnessBits;
  /** @var int */
  public $vbvSizeBits;
  /** @var int */
  public $widthPixels;

  /** @param bool */
  public function setAllowOpenGop($allowOpenGop)
  {
    $this->allowOpenGop = $allowOpenGop;
  }
  /** @return bool */
  public function getAllowOpenGop()
  {
    return $this->allowOpenGop;
  }
  public function setAqStrength($aqStrength)
  {
    $this->aqStrength = $aqStrength;
  }
  public function getAqStrength()
  {
    return $this->aqStrength;
  }
  /** @param int */
  public function setBFrameCount($bFrameCount)
  {
    $this->bFrameCount = $bFrameCount;
  }
  /** @return int */
  public function getBFrameCount()
  {
    return $this->bFrameCount;
  }
  /** @param bool */
  public function setBPyramid($bPyramid)
  {
    $this->bPyramid = $bPyramid;
  }
  /** @return bool */
  public function getBPyramid()
  {
    return $this->bPyramid;
  }
  /** @param int */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return int */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param int */
  public function setCrfLevel($crfLevel)
  {
    $this->crfLevel = $crfLevel;
  }
  /** @return int */
  public function getCrfLevel()
  {
    return $this->crfLevel;
  }
  /** @param bool */
  public function setEnableTwoPass($enableTwoPass)
  {
    $this->enableTwoPass = $enableTwoPass;
  }
  /** @return bool */
  public function getEnableTwoPass()
  {
    return $this->enableTwoPass;
  }
  /** @param string */
  public function setEntropyCoder($entropyCoder)
  {
    $this->entropyCoder = $entropyCoder;
  }
  /** @return string */
  public function getEntropyCoder()
  {
    return $this->entropyCoder;
  }
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  public function getFrameRate()
  {
    return $this->frameRate;
  }
  /** @param string */
  public function setGopDuration($gopDuration)
  {
    $this->gopDuration = $gopDuration;
  }
  /** @return string */
  public function getGopDuration()
  {
    return $this->gopDuration;
  }
  /** @param int */
  public function setGopFrameCount($gopFrameCount)
  {
    $this->gopFrameCount = $gopFrameCount;
  }
  /** @return int */
  public function getGopFrameCount()
  {
    return $this->gopFrameCount;
  }
  /** @param int */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return int */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param string */
  public function setPixelFormat($pixelFormat)
  {
    $this->pixelFormat = $pixelFormat;
  }
  /** @return string */
  public function getPixelFormat()
  {
    return $this->pixelFormat;
  }
  /** @param string */
  public function setPreset($preset)
  {
    $this->preset = $preset;
  }
  /** @return string */
  public function getPreset()
  {
    return $this->preset;
  }
  /** @param string */
  public function setProfile($profile)
  {
    $this->profile = $profile;
  }
  /** @return string */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param string */
  public function setRateControlMode($rateControlMode)
  {
    $this->rateControlMode = $rateControlMode;
  }
  /** @return string */
  public function getRateControlMode()
  {
    return $this->rateControlMode;
  }
  /** @param string */
  public function setTune($tune)
  {
    $this->tune = $tune;
  }
  /** @return string */
  public function getTune()
  {
    return $this->tune;
  }
  /** @param int */
  public function setVbvFullnessBits($vbvFullnessBits)
  {
    $this->vbvFullnessBits = $vbvFullnessBits;
  }
  /** @return int */
  public function getVbvFullnessBits()
  {
    return $this->vbvFullnessBits;
  }
  /** @param int */
  public function setVbvSizeBits($vbvSizeBits)
  {
    $this->vbvSizeBits = $vbvSizeBits;
  }
  /** @return int */
  public function getVbvSizeBits()
  {
    return $this->vbvSizeBits;
  }
  /** @param int */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return int */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class H265CodecSettings extends \Google\Model
{
  /** @var bool */
  public $allowOpenGop;
  public $aqStrength;
  /** @var int */
  public $bFrameCount;
  /** @var bool */
  public $bPyramid;
  /** @var int */
  public $bitrateBps;
  /** @var int */
  public $crfLevel;
  /** @var bool */
  public $enableTwoPass;
  public $frameRate;
  /** @var string */
  public $gopDuration;
  /** @var int */
  public $gopFrameCount;
  /** @var int */
  public $heightPixels;
  /** @var string */
  public $pixelFormat;
  /** @var string */
  public $preset;
  /** @var string */
  public $profile;
  /** @var string */
  public $rateControlMode;
  /** @var string */
  public $tune;
  /** @var int */
  public $vbvFullnessBits;
  /** @var int */
  public $vbvSizeBits;
  /** @var int */
  public $widthPixels;

  /** @param bool */
  public function setAllowOpenGop($allowOpenGop)
  {
    $this->allowOpenGop = $allowOpenGop;
  }
  /** @return bool */
  public function getAllowOpenGop()
  {
    return $this->allowOpenGop;
  }
  public function setAqStrength($aqStrength)
  {
    $this->aqStrength = $aqStrength;
  }
  public function getAqStrength()
  {
    return $this->aqStrength;
  }
  /** @param int */
  public function setBFrameCount($bFrameCount)
  {
    $this->bFrameCount = $bFrameCount;
  }
  /** @return int */
  public function getBFrameCount()
  {
    return $this->bFrameCount;
  }
  /** @param bool */
  public function setBPyramid($bPyramid)
  {
    $this->bPyramid = $bPyramid;
  }
  /** @return bool */
  public function getBPyramid()
  {
    return $this->bPyramid;
  }
  /** @param int */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return int */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param int */
  public function setCrfLevel($crfLevel)
  {
    $this->crfLevel = $crfLevel;
  }
  /** @return int */
  public function getCrfLevel()
  {
    return $this->crfLevel;
  }
  /** @param bool */
  public function setEnableTwoPass($enableTwoPass)
  {
    $this->enableTwoPass = $enableTwoPass;
  }
  /** @return bool */
  public function getEnableTwoPass()
  {
    return $this->enableTwoPass;
  }
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  public function getFrameRate()
  {
    return $this->frameRate;
  }
  /** @param string */
  public function setGopDuration($gopDuration)
  {
    $this->gopDuration = $gopDuration;
  }
  /** @return string */
  public function getGopDuration()
  {
    return $this->gopDuration;
  }
  /** @param int */
  public function setGopFrameCount($gopFrameCount)
  {
    $this->gopFrameCount = $gopFrameCount;
  }
  /** @return int */
  public function getGopFrameCount()
  {
    return $this->gopFrameCount;
  }
  /** @param int */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return int */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param string */
  public function setPixelFormat($pixelFormat)
  {
    $this->pixelFormat = $pixelFormat;
  }
  /** @return string */
  public function getPixelFormat()
  {
    return $this->pixelFormat;
  }
  /** @param string */
  public function setPreset($preset)
  {
    $this->preset = $preset;
  }
  /** @return string */
  public function getPreset()
  {
    return $this->preset;
  }
  /** @param string */
  public function setProfile($profile)
  {
    $this->profile = $profile;
  }
  /** @return string */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param string */
  public function setRateControlMode($rateControlMode)
  {
    $this->rateControlMode = $rateControlMode;
  }
  /** @return string */
  public function getRateControlMode()
  {
    return $this->rateControlMode;
  }
  /** @param string */
  public function setTune($tune)
  {
    $this->tune = $tune;
  }
  /** @return string */
  public function getTune()
  {
    return $this->tune;
  }
  /** @param int */
  public function setVbvFullnessBits($vbvFullnessBits)
  {
    $this->vbvFullnessBits = $vbvFullnessBits;
  }
  /** @return int */
  public function getVbvFullnessBits()
  {
    return $this->vbvFullnessBits;
  }
  /** @param int */
  public function setVbvSizeBits($vbvSizeBits)
  {
    $this->vbvSizeBits = $vbvSizeBits;
  }
  /** @return int */
  public function getVbvSizeBits()
  {
    return $this->vbvSizeBits;
  }
  /** @param int */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return int */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class Image extends \Google\Model
{
  public $alpha;
  /** @var NormalizedCoordinate */
  public $resolution;
  /** @var string */
  public $uri;
  protected $resolutionType = NormalizedCoordinate::class;
  protected $resolutionDataType = '';
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param NormalizedCoordinate */
  public function setResolution(NormalizedCoordinate $resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return NormalizedCoordinate */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Input extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var PreprocessingConfig */
  public $preprocessingConfig;
  /** @var string */
  public $uri;
  protected $preprocessingConfigType = PreprocessingConfig::class;
  protected $preprocessingConfigDataType = '';
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
  /** @param PreprocessingConfig */
  public function setPreprocessingConfig(PreprocessingConfig $preprocessingConfig)
  {
    $this->preprocessingConfig = $preprocessingConfig;
  }
  /** @return PreprocessingConfig */
  public function getPreprocessingConfig()
  {
    return $this->preprocessingConfig;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Job extends \Google\Model
{
  /** @var JobConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $inputUri;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $outputUri;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $templateId;
  /** @var int */
  public $ttlAfterCompletionDays;
  protected $configType = JobConfig::class;
  protected $configDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param JobConfig */
  public function setConfig(JobConfig $config)
  {
    $this->config = $config;
  }
  /** @return JobConfig */
  public function getConfig()
  {
    return $this->config;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /** @return string */
  public function getInputUri()
  {
    return $this->inputUri;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
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
  /** @param string */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /** @return string */
  public function getTemplateId()
  {
    return $this->templateId;
  }
  /** @param int */
  public function setTtlAfterCompletionDays($ttlAfterCompletionDays)
  {
    $this->ttlAfterCompletionDays = $ttlAfterCompletionDays;
  }
  /** @return int */
  public function getTtlAfterCompletionDays()
  {
    return $this->ttlAfterCompletionDays;
  }
}

class JobConfig extends \Google\Collection
{
  /** @var AdBreak[] */
  public $adBreaks;
  /** @var EditAtom[] */
  public $editList;
  /** @var ElementaryStream[] */
  public $elementaryStreams;
  /** @var Input[] */
  public $inputs;
  /** @var Manifest[] */
  public $manifests;
  /** @var MuxStream[] */
  public $muxStreams;
  /** @var Output */
  public $output;
  /** @var Overlay[] */
  public $overlays;
  /** @var PubsubDestination */
  public $pubsubDestination;
  /** @var SpriteSheet[] */
  public $spriteSheets;
  protected $collection_key = 'spriteSheets';
  protected $adBreaksType = AdBreak::class;
  protected $adBreaksDataType = 'array';
  protected $editListType = EditAtom::class;
  protected $editListDataType = 'array';
  protected $elementaryStreamsType = ElementaryStream::class;
  protected $elementaryStreamsDataType = 'array';
  protected $inputsType = Input::class;
  protected $inputsDataType = 'array';
  protected $manifestsType = Manifest::class;
  protected $manifestsDataType = 'array';
  protected $muxStreamsType = MuxStream::class;
  protected $muxStreamsDataType = 'array';
  protected $outputType = Output::class;
  protected $outputDataType = '';
  protected $overlaysType = Overlay::class;
  protected $overlaysDataType = 'array';
  protected $pubsubDestinationType = PubsubDestination::class;
  protected $pubsubDestinationDataType = '';
  protected $spriteSheetsType = SpriteSheet::class;
  protected $spriteSheetsDataType = 'array';
  /** @param AdBreak[] */
  public function setAdBreaks($adBreaks)
  {
    $this->adBreaks = $adBreaks;
  }
  /** @return AdBreak[] */
  public function getAdBreaks()
  {
    return $this->adBreaks;
  }
  /** @param EditAtom[] */
  public function setEditList($editList)
  {
    $this->editList = $editList;
  }
  /** @return EditAtom[] */
  public function getEditList()
  {
    return $this->editList;
  }
  /** @param ElementaryStream[] */
  public function setElementaryStreams($elementaryStreams)
  {
    $this->elementaryStreams = $elementaryStreams;
  }
  /** @return ElementaryStream[] */
  public function getElementaryStreams()
  {
    return $this->elementaryStreams;
  }
  /** @param Input[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return Input[] */
  public function getInputs()
  {
    return $this->inputs;
  }
  /** @param Manifest[] */
  public function setManifests($manifests)
  {
    $this->manifests = $manifests;
  }
  /** @return Manifest[] */
  public function getManifests()
  {
    return $this->manifests;
  }
  /** @param MuxStream[] */
  public function setMuxStreams($muxStreams)
  {
    $this->muxStreams = $muxStreams;
  }
  /** @return MuxStream[] */
  public function getMuxStreams()
  {
    return $this->muxStreams;
  }
  /** @param Output */
  public function setOutput(Output $output)
  {
    $this->output = $output;
  }
  /** @return Output */
  public function getOutput()
  {
    return $this->output;
  }
  /** @param Overlay[] */
  public function setOverlays($overlays)
  {
    $this->overlays = $overlays;
  }
  /** @return Overlay[] */
  public function getOverlays()
  {
    return $this->overlays;
  }
  /** @param PubsubDestination */
  public function setPubsubDestination(PubsubDestination $pubsubDestination)
  {
    $this->pubsubDestination = $pubsubDestination;
  }
  /** @return PubsubDestination */
  public function getPubsubDestination()
  {
    return $this->pubsubDestination;
  }
  /** @param SpriteSheet[] */
  public function setSpriteSheets($spriteSheets)
  {
    $this->spriteSheets = $spriteSheets;
  }
  /** @return SpriteSheet[] */
  public function getSpriteSheets()
  {
    return $this->spriteSheets;
  }
}

class JobTemplate extends \Google\Model
{
  /** @var JobConfig */
  public $config;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  protected $configType = JobConfig::class;
  protected $configDataType = '';
  /** @param JobConfig */
  public function setConfig(JobConfig $config)
  {
    $this->config = $config;
  }
  /** @return JobConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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

class ListJobTemplatesResponse extends \Google\Collection
{
  /** @var JobTemplate[] */
  public $jobTemplates;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $jobTemplatesType = JobTemplate::class;
  protected $jobTemplatesDataType = 'array';
  /** @param JobTemplate[] */
  public function setJobTemplates($jobTemplates)
  {
    $this->jobTemplates = $jobTemplates;
  }
  /** @return JobTemplate[] */
  public function getJobTemplates()
  {
    return $this->jobTemplates;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListJobsResponse extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  /** @param Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return Job[] */
  public function getJobs()
  {
    return $this->jobs;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class Manifest extends \Google\Collection
{
  /** @var string */
  public $fileName;
  /** @var string[] */
  public $muxStreams;
  /** @var string */
  public $type;
  protected $collection_key = 'muxStreams';
  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param string[] */
  public function setMuxStreams($muxStreams)
  {
    $this->muxStreams = $muxStreams;
  }
  /** @return string[] */
  public function getMuxStreams()
  {
    return $this->muxStreams;
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

class MuxStream extends \Google\Collection
{
  /** @var string */
  public $container;
  /** @var string[] */
  public $elementaryStreams;
  /** @var string */
  public $fileName;
  /** @var string */
  public $key;
  /** @var SegmentSettings */
  public $segmentSettings;
  protected $collection_key = 'elementaryStreams';
  protected $segmentSettingsType = SegmentSettings::class;
  protected $segmentSettingsDataType = '';
  /** @param string */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /** @return string */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param string[] */
  public function setElementaryStreams($elementaryStreams)
  {
    $this->elementaryStreams = $elementaryStreams;
  }
  /** @return string[] */
  public function getElementaryStreams()
  {
    return $this->elementaryStreams;
  }
  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
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
  /** @param SegmentSettings */
  public function setSegmentSettings(SegmentSettings $segmentSettings)
  {
    $this->segmentSettings = $segmentSettings;
  }
  /** @return SegmentSettings */
  public function getSegmentSettings()
  {
    return $this->segmentSettings;
  }
}

class NormalizedCoordinate extends \Google\Model
{
  public $x;
  public $y;

  public function setX($x)
  {
    $this->x = $x;
  }
  public function getX()
  {
    return $this->x;
  }
  public function setY($y)
  {
    $this->y = $y;
  }
  public function getY()
  {
    return $this->y;
  }
}

class Output extends \Google\Model
{
  /** @var string */
  public $uri;

  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Overlay extends \Google\Collection
{
  /** @var Animation[] */
  public $animations;
  /** @var Image */
  public $image;
  protected $collection_key = 'animations';
  protected $animationsType = Animation::class;
  protected $animationsDataType = 'array';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /** @param Animation[] */
  public function setAnimations($animations)
  {
    $this->animations = $animations;
  }
  /** @return Animation[] */
  public function getAnimations()
  {
    return $this->animations;
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
}

class Pad extends \Google\Model
{
  /** @var int */
  public $bottomPixels;
  /** @var int */
  public $leftPixels;
  /** @var int */
  public $rightPixels;
  /** @var int */
  public $topPixels;

  /** @param int */
  public function setBottomPixels($bottomPixels)
  {
    $this->bottomPixels = $bottomPixels;
  }
  /** @return int */
  public function getBottomPixels()
  {
    return $this->bottomPixels;
  }
  /** @param int */
  public function setLeftPixels($leftPixels)
  {
    $this->leftPixels = $leftPixels;
  }
  /** @return int */
  public function getLeftPixels()
  {
    return $this->leftPixels;
  }
  /** @param int */
  public function setRightPixels($rightPixels)
  {
    $this->rightPixels = $rightPixels;
  }
  /** @return int */
  public function getRightPixels()
  {
    return $this->rightPixels;
  }
  /** @param int */
  public function setTopPixels($topPixels)
  {
    $this->topPixels = $topPixels;
  }
  /** @return int */
  public function getTopPixels()
  {
    return $this->topPixels;
  }
}

class PreprocessingConfig extends \Google\Model
{
  /** @var Audio */
  public $audio;
  /** @var Color */
  public $color;
  /** @var Crop */
  public $crop;
  /** @var Deblock */
  public $deblock;
  /** @var Deinterlace */
  public $deinterlace;
  /** @var Denoise */
  public $denoise;
  /** @var Pad */
  public $pad;
  protected $audioType = Audio::class;
  protected $audioDataType = '';
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $cropType = Crop::class;
  protected $cropDataType = '';
  protected $deblockType = Deblock::class;
  protected $deblockDataType = '';
  protected $deinterlaceType = Deinterlace::class;
  protected $deinterlaceDataType = '';
  protected $denoiseType = Denoise::class;
  protected $denoiseDataType = '';
  protected $padType = Pad::class;
  protected $padDataType = '';
  /** @param Audio */
  public function setAudio(Audio $audio)
  {
    $this->audio = $audio;
  }
  /** @return Audio */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param Crop */
  public function setCrop(Crop $crop)
  {
    $this->crop = $crop;
  }
  /** @return Crop */
  public function getCrop()
  {
    return $this->crop;
  }
  /** @param Deblock */
  public function setDeblock(Deblock $deblock)
  {
    $this->deblock = $deblock;
  }
  /** @return Deblock */
  public function getDeblock()
  {
    return $this->deblock;
  }
  /** @param Deinterlace */
  public function setDeinterlace(Deinterlace $deinterlace)
  {
    $this->deinterlace = $deinterlace;
  }
  /** @return Deinterlace */
  public function getDeinterlace()
  {
    return $this->deinterlace;
  }
  /** @param Denoise */
  public function setDenoise(Denoise $denoise)
  {
    $this->denoise = $denoise;
  }
  /** @return Denoise */
  public function getDenoise()
  {
    return $this->denoise;
  }
  /** @param Pad */
  public function setPad(Pad $pad)
  {
    $this->pad = $pad;
  }
  /** @return Pad */
  public function getPad()
  {
    return $this->pad;
  }
}

class PubsubDestination extends \Google\Model
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

class SegmentSettings extends \Google\Model
{
  /** @var bool */
  public $individualSegments;
  /** @var string */
  public $segmentDuration;

  /** @param bool */
  public function setIndividualSegments($individualSegments)
  {
    $this->individualSegments = $individualSegments;
  }
  /** @return bool */
  public function getIndividualSegments()
  {
    return $this->individualSegments;
  }
  /** @param string */
  public function setSegmentDuration($segmentDuration)
  {
    $this->segmentDuration = $segmentDuration;
  }
  /** @return string */
  public function getSegmentDuration()
  {
    return $this->segmentDuration;
  }
}

class SpriteSheet extends \Google\Model
{
  /** @var int */
  public $columnCount;
  /** @var string */
  public $endTimeOffset;
  /** @var string */
  public $filePrefix;
  /** @var string */
  public $format;
  /** @var string */
  public $interval;
  /** @var int */
  public $quality;
  /** @var int */
  public $rowCount;
  /** @var int */
  public $spriteHeightPixels;
  /** @var int */
  public $spriteWidthPixels;
  /** @var string */
  public $startTimeOffset;
  /** @var int */
  public $totalCount;

  /** @param int */
  public function setColumnCount($columnCount)
  {
    $this->columnCount = $columnCount;
  }
  /** @return int */
  public function getColumnCount()
  {
    return $this->columnCount;
  }
  /** @param string */
  public function setEndTimeOffset($endTimeOffset)
  {
    $this->endTimeOffset = $endTimeOffset;
  }
  /** @return string */
  public function getEndTimeOffset()
  {
    return $this->endTimeOffset;
  }
  /** @param string */
  public function setFilePrefix($filePrefix)
  {
    $this->filePrefix = $filePrefix;
  }
  /** @return string */
  public function getFilePrefix()
  {
    return $this->filePrefix;
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
  /** @param string */
  public function setInterval($interval)
  {
    $this->interval = $interval;
  }
  /** @return string */
  public function getInterval()
  {
    return $this->interval;
  }
  /** @param int */
  public function setQuality($quality)
  {
    $this->quality = $quality;
  }
  /** @return int */
  public function getQuality()
  {
    return $this->quality;
  }
  /** @param int */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return int */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param int */
  public function setSpriteHeightPixels($spriteHeightPixels)
  {
    $this->spriteHeightPixels = $spriteHeightPixels;
  }
  /** @return int */
  public function getSpriteHeightPixels()
  {
    return $this->spriteHeightPixels;
  }
  /** @param int */
  public function setSpriteWidthPixels($spriteWidthPixels)
  {
    $this->spriteWidthPixels = $spriteWidthPixels;
  }
  /** @return int */
  public function getSpriteWidthPixels()
  {
    return $this->spriteWidthPixels;
  }
  /** @param string */
  public function setStartTimeOffset($startTimeOffset)
  {
    $this->startTimeOffset = $startTimeOffset;
  }
  /** @return string */
  public function getStartTimeOffset()
  {
    return $this->startTimeOffset;
  }
  /** @param int */
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /** @return int */
  public function getTotalCount()
  {
    return $this->totalCount;
  }
}

class Status extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var array[] */
  public $details;
  /** @var string */
  public $message;
  protected $collection_key = 'details';
  /** @param int */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return int */
  public function getCode()
  {
    return $this->code;
  }
  /** @param array[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return array[] */
  public function getDetails()
  {
    return $this->details;
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
}

class TextMapping extends \Google\Model
{
  /** @var string */
  public $atomKey;
  /** @var string */
  public $inputKey;
  /** @var int */
  public $inputTrack;

  /** @param string */
  public function setAtomKey($atomKey)
  {
    $this->atomKey = $atomKey;
  }
  /** @return string */
  public function getAtomKey()
  {
    return $this->atomKey;
  }
  /** @param string */
  public function setInputKey($inputKey)
  {
    $this->inputKey = $inputKey;
  }
  /** @return string */
  public function getInputKey()
  {
    return $this->inputKey;
  }
  /** @param int */
  public function setInputTrack($inputTrack)
  {
    $this->inputTrack = $inputTrack;
  }
  /** @return int */
  public function getInputTrack()
  {
    return $this->inputTrack;
  }
}

class TextStream extends \Google\Collection
{
  /** @var string */
  public $codec;
  /** @var TextMapping[] */
  public $mapping;
  protected $collection_key = 'mapping';
  protected $mappingType = TextMapping::class;
  protected $mappingDataType = 'array';
  /** @param string */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return string */
  public function getCodec()
  {
    return $this->codec;
  }
  /** @param TextMapping[] */
  public function setMapping($mapping)
  {
    $this->mapping = $mapping;
  }
  /** @return TextMapping[] */
  public function getMapping()
  {
    return $this->mapping;
  }
}

class TranscoderEmpty extends \Google\Model
{
}

class VideoStream extends \Google\Model
{
  /** @var H264CodecSettings */
  public $h264;
  /** @var H265CodecSettings */
  public $h265;
  /** @var Vp9CodecSettings */
  public $vp9;
  protected $h264Type = H264CodecSettings::class;
  protected $h264DataType = '';
  protected $h265Type = H265CodecSettings::class;
  protected $h265DataType = '';
  protected $vp9Type = Vp9CodecSettings::class;
  protected $vp9DataType = '';
  /** @param H264CodecSettings */
  public function setH264(H264CodecSettings $h264)
  {
    $this->h264 = $h264;
  }
  /** @return H264CodecSettings */
  public function getH264()
  {
    return $this->h264;
  }
  /** @param H265CodecSettings */
  public function setH265(H265CodecSettings $h265)
  {
    $this->h265 = $h265;
  }
  /** @return H265CodecSettings */
  public function getH265()
  {
    return $this->h265;
  }
  /** @param Vp9CodecSettings */
  public function setVp9(Vp9CodecSettings $vp9)
  {
    $this->vp9 = $vp9;
  }
  /** @return Vp9CodecSettings */
  public function getVp9()
  {
    return $this->vp9;
  }
}

class Vp9CodecSettings extends \Google\Model
{
  /** @var int */
  public $bitrateBps;
  /** @var int */
  public $crfLevel;
  public $frameRate;
  /** @var string */
  public $gopDuration;
  /** @var int */
  public $gopFrameCount;
  /** @var int */
  public $heightPixels;
  /** @var string */
  public $pixelFormat;
  /** @var string */
  public $profile;
  /** @var string */
  public $rateControlMode;
  /** @var int */
  public $widthPixels;

  /** @param int */
  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }
  /** @return int */
  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }
  /** @param int */
  public function setCrfLevel($crfLevel)
  {
    $this->crfLevel = $crfLevel;
  }
  /** @return int */
  public function getCrfLevel()
  {
    return $this->crfLevel;
  }
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  public function getFrameRate()
  {
    return $this->frameRate;
  }
  /** @param string */
  public function setGopDuration($gopDuration)
  {
    $this->gopDuration = $gopDuration;
  }
  /** @return string */
  public function getGopDuration()
  {
    return $this->gopDuration;
  }
  /** @param int */
  public function setGopFrameCount($gopFrameCount)
  {
    $this->gopFrameCount = $gopFrameCount;
  }
  /** @return int */
  public function getGopFrameCount()
  {
    return $this->gopFrameCount;
  }
  /** @param int */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return int */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param string */
  public function setPixelFormat($pixelFormat)
  {
    $this->pixelFormat = $pixelFormat;
  }
  /** @return string */
  public function getPixelFormat()
  {
    return $this->pixelFormat;
  }
  /** @param string */
  public function setProfile($profile)
  {
    $this->profile = $profile;
  }
  /** @return string */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param string */
  public function setRateControlMode($rateControlMode)
  {
    $this->rateControlMode = $rateControlMode;
  }
  /** @return string */
  public function getRateControlMode()
  {
    return $this->rateControlMode;
  }
  /** @param int */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return int */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class YadifConfig extends \Google\Model
{
  /** @var bool */
  public $deinterlaceAllFrames;
  /** @var bool */
  public $disableSpatialInterlacing;
  /** @var string */
  public $mode;
  /** @var string */
  public $parity;

  /** @param bool */
  public function setDeinterlaceAllFrames($deinterlaceAllFrames)
  {
    $this->deinterlaceAllFrames = $deinterlaceAllFrames;
  }
  /** @return bool */
  public function getDeinterlaceAllFrames()
  {
    return $this->deinterlaceAllFrames;
  }
  /** @param bool */
  public function setDisableSpatialInterlacing($disableSpatialInterlacing)
  {
    $this->disableSpatialInterlacing = $disableSpatialInterlacing;
  }
  /** @return bool */
  public function getDisableSpatialInterlacing()
  {
    return $this->disableSpatialInterlacing;
  }
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param string */
  public function setParity($parity)
  {
    $this->parity = $parity;
  }
  /** @return string */
  public function getParity()
  {
    return $this->parity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdBreak::class, 'Google_Service_Transcoder_AdBreak');
class_alias(Animation::class, 'Google_Service_Transcoder_Animation');
class_alias(AnimationEnd::class, 'Google_Service_Transcoder_AnimationEnd');
class_alias(AnimationFade::class, 'Google_Service_Transcoder_AnimationFade');
class_alias(AnimationStatic::class, 'Google_Service_Transcoder_AnimationStatic');
class_alias(Audio::class, 'Google_Service_Transcoder_Audio');
class_alias(AudioMapping::class, 'Google_Service_Transcoder_AudioMapping');
class_alias(AudioStream::class, 'Google_Service_Transcoder_AudioStream');
class_alias(BwdifConfig::class, 'Google_Service_Transcoder_BwdifConfig');
class_alias(Color::class, 'Google_Service_Transcoder_Color');
class_alias(Crop::class, 'Google_Service_Transcoder_Crop');
class_alias(Deblock::class, 'Google_Service_Transcoder_Deblock');
class_alias(Deinterlace::class, 'Google_Service_Transcoder_Deinterlace');
class_alias(Denoise::class, 'Google_Service_Transcoder_Denoise');
class_alias(EditAtom::class, 'Google_Service_Transcoder_EditAtom');
class_alias(ElementaryStream::class, 'Google_Service_Transcoder_ElementaryStream');
class_alias(H264CodecSettings::class, 'Google_Service_Transcoder_H264CodecSettings');
class_alias(H265CodecSettings::class, 'Google_Service_Transcoder_H265CodecSettings');
class_alias(Image::class, 'Google_Service_Transcoder_Image');
class_alias(Input::class, 'Google_Service_Transcoder_Input');
class_alias(Job::class, 'Google_Service_Transcoder_Job');
class_alias(JobConfig::class, 'Google_Service_Transcoder_JobConfig');
class_alias(JobTemplate::class, 'Google_Service_Transcoder_JobTemplate');
class_alias(ListJobTemplatesResponse::class, 'Google_Service_Transcoder_ListJobTemplatesResponse');
class_alias(ListJobsResponse::class, 'Google_Service_Transcoder_ListJobsResponse');
class_alias(Manifest::class, 'Google_Service_Transcoder_Manifest');
class_alias(MuxStream::class, 'Google_Service_Transcoder_MuxStream');
class_alias(NormalizedCoordinate::class, 'Google_Service_Transcoder_NormalizedCoordinate');
class_alias(Output::class, 'Google_Service_Transcoder_Output');
class_alias(Overlay::class, 'Google_Service_Transcoder_Overlay');
class_alias(Pad::class, 'Google_Service_Transcoder_Pad');
class_alias(PreprocessingConfig::class, 'Google_Service_Transcoder_PreprocessingConfig');
class_alias(PubsubDestination::class, 'Google_Service_Transcoder_PubsubDestination');
class_alias(SegmentSettings::class, 'Google_Service_Transcoder_SegmentSettings');
class_alias(SpriteSheet::class, 'Google_Service_Transcoder_SpriteSheet');
class_alias(Status::class, 'Google_Service_Transcoder_Status');
class_alias(TextMapping::class, 'Google_Service_Transcoder_TextMapping');
class_alias(TextStream::class, 'Google_Service_Transcoder_TextStream');
class_alias(TranscoderEmpty::class, 'Google_Service_Transcoder_TranscoderEmpty');
class_alias(VideoStream::class, 'Google_Service_Transcoder_VideoStream');
class_alias(Vp9CodecSettings::class, 'Google_Service_Transcoder_Vp9CodecSettings');
class_alias(YadifConfig::class, 'Google_Service_Transcoder_YadifConfig');
