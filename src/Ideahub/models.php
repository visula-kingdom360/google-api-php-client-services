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

namespace Google\Service\Ideahub;

class GoogleSearchIdeahubV1betaAvailableLocale extends \Google\Model
{
  /** @var string */
  public $locale;
  /** @var string */
  public $name;

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

class GoogleSearchIdeahubV1betaIdea extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $text;
  /** @var GoogleSearchIdeahubV1betaTopic[] */
  public $topics;
  protected $collection_key = 'topics';
  protected $topicsType = GoogleSearchIdeahubV1betaTopic::class;
  protected $topicsDataType = 'array';
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
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
  /** @param GoogleSearchIdeahubV1betaTopic[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return GoogleSearchIdeahubV1betaTopic[] */
  public function getTopics()
  {
    return $this->topics;
  }
}

class GoogleSearchIdeahubV1betaIdeaActivity extends \Google\Collection
{
  /** @var string[] */
  public $ideas;
  /** @var string */
  public $name;
  /** @var string[] */
  public $topics;
  /** @var string */
  public $type;
  /** @var string */
  public $uri;
  protected $collection_key = 'topics';
  /** @param string[] */
  public function setIdeas($ideas)
  {
    $this->ideas = $ideas;
  }
  /** @return string[] */
  public function getIdeas()
  {
    return $this->ideas;
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
  /** @param string[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return string[] */
  public function getTopics()
  {
    return $this->topics;
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

class GoogleSearchIdeahubV1betaIdeaState extends \Google\Model
{
  /** @var bool */
  public $dismissed;
  /** @var string */
  public $name;
  /** @var bool */
  public $saved;

  /** @param bool */
  public function setDismissed($dismissed)
  {
    $this->dismissed = $dismissed;
  }
  /** @return bool */
  public function getDismissed()
  {
    return $this->dismissed;
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
  /** @param bool */
  public function setSaved($saved)
  {
    $this->saved = $saved;
  }
  /** @return bool */
  public function getSaved()
  {
    return $this->saved;
  }
}

class GoogleSearchIdeahubV1betaListAvailableLocalesResponse extends \Google\Collection
{
  /** @var GoogleSearchIdeahubV1betaAvailableLocale[] */
  public $availableLocales;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'availableLocales';
  protected $availableLocalesType = GoogleSearchIdeahubV1betaAvailableLocale::class;
  protected $availableLocalesDataType = 'array';
  /** @param GoogleSearchIdeahubV1betaAvailableLocale[] */
  public function setAvailableLocales($availableLocales)
  {
    $this->availableLocales = $availableLocales;
  }
  /** @return GoogleSearchIdeahubV1betaAvailableLocale[] */
  public function getAvailableLocales()
  {
    return $this->availableLocales;
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

class GoogleSearchIdeahubV1betaListIdeasResponse extends \Google\Collection
{
  /** @var GoogleSearchIdeahubV1betaIdea[] */
  public $ideas;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'ideas';
  protected $ideasType = GoogleSearchIdeahubV1betaIdea::class;
  protected $ideasDataType = 'array';
  /** @param GoogleSearchIdeahubV1betaIdea[] */
  public function setIdeas($ideas)
  {
    $this->ideas = $ideas;
  }
  /** @return GoogleSearchIdeahubV1betaIdea[] */
  public function getIdeas()
  {
    return $this->ideas;
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

class GoogleSearchIdeahubV1betaTopic extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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

class GoogleSearchIdeahubV1betaTopicState extends \Google\Model
{
  /** @var bool */
  public $dismissed;
  /** @var string */
  public $name;
  /** @var bool */
  public $saved;

  /** @param bool */
  public function setDismissed($dismissed)
  {
    $this->dismissed = $dismissed;
  }
  /** @return bool */
  public function getDismissed()
  {
    return $this->dismissed;
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
  /** @param bool */
  public function setSaved($saved)
  {
    $this->saved = $saved;
  }
  /** @return bool */
  public function getSaved()
  {
    return $this->saved;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleSearchIdeahubV1betaAvailableLocale::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaAvailableLocale');
class_alias(GoogleSearchIdeahubV1betaIdea::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaIdea');
class_alias(GoogleSearchIdeahubV1betaIdeaActivity::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaIdeaActivity');
class_alias(GoogleSearchIdeahubV1betaIdeaState::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaIdeaState');
class_alias(GoogleSearchIdeahubV1betaListAvailableLocalesResponse::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaListAvailableLocalesResponse');
class_alias(GoogleSearchIdeahubV1betaListIdeasResponse::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaListIdeasResponse');
class_alias(GoogleSearchIdeahubV1betaTopic::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaTopic');
class_alias(GoogleSearchIdeahubV1betaTopicState::class, 'Google_Service_Ideahub_GoogleSearchIdeahubV1betaTopicState');
