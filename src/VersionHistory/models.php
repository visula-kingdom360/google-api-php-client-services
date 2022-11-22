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

namespace Google\Service\VersionHistory;

class Channel extends \Google\Model
{
  /** @var string */
  public $channelType;
  /** @var string */
  public $name;

  /** @param string */
  public function setChannelType($channelType)
  {
    $this->channelType = $channelType;
  }
  /** @return string */
  public function getChannelType()
  {
    return $this->channelType;
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

class Interval extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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
}

class ListChannelsResponse extends \Google\Collection
{
  /** @var Channel[] */
  public $channels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'channels';
  protected $channelsType = Channel::class;
  protected $channelsDataType = 'array';
  /** @param Channel[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return Channel[] */
  public function getChannels()
  {
    return $this->channels;
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

class ListPlatformsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Platform[] */
  public $platforms;
  protected $collection_key = 'platforms';
  protected $platformsType = Platform::class;
  protected $platformsDataType = 'array';
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
  /** @param Platform[] */
  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }
  /** @return Platform[] */
  public function getPlatforms()
  {
    return $this->platforms;
  }
}

class ListReleasesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Release[] */
  public $releases;
  protected $collection_key = 'releases';
  protected $releasesType = Release::class;
  protected $releasesDataType = 'array';
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
  /** @param Release[] */
  public function setReleases($releases)
  {
    $this->releases = $releases;
  }
  /** @return Release[] */
  public function getReleases()
  {
    return $this->releases;
  }
}

class ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = Version::class;
  protected $versionsDataType = 'array';
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
  /** @param Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return Version[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class Platform extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $platformType;

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
}

class Release extends \Google\Model
{
  public $fraction;
  /** @var string */
  public $fractionGroup;
  /** @var string */
  public $name;
  /** @var Interval */
  public $serving;
  /** @var string */
  public $version;
  protected $servingType = Interval::class;
  protected $servingDataType = '';
  public function setFraction($fraction)
  {
    $this->fraction = $fraction;
  }
  public function getFraction()
  {
    return $this->fraction;
  }
  /** @param string */
  public function setFractionGroup($fractionGroup)
  {
    $this->fractionGroup = $fractionGroup;
  }
  /** @return string */
  public function getFractionGroup()
  {
    return $this->fractionGroup;
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
  /** @param Interval */
  public function setServing(Interval $serving)
  {
    $this->serving = $serving;
  }
  /** @return Interval */
  public function getServing()
  {
    return $this->serving;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class Version extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Channel::class, 'Google_Service_VersionHistory_Channel');
class_alias(Interval::class, 'Google_Service_VersionHistory_Interval');
class_alias(ListChannelsResponse::class, 'Google_Service_VersionHistory_ListChannelsResponse');
class_alias(ListPlatformsResponse::class, 'Google_Service_VersionHistory_ListPlatformsResponse');
class_alias(ListReleasesResponse::class, 'Google_Service_VersionHistory_ListReleasesResponse');
class_alias(ListVersionsResponse::class, 'Google_Service_VersionHistory_ListVersionsResponse');
class_alias(Platform::class, 'Google_Service_VersionHistory_Platform');
class_alias(Release::class, 'Google_Service_VersionHistory_Release');
class_alias(Version::class, 'Google_Service_VersionHistory_Version');
