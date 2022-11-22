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

namespace Google\Service\MyBusinessQA;

class Answer extends \Google\Model
{
  /** @var Author */
  public $author;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $text;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $upvoteCount;
  protected $authorType = Author::class;
  protected $authorDataType = '';
  /** @param Author */
  public function setAuthor(Author $author)
  {
    $this->author = $author;
  }
  /** @return Author */
  public function getAuthor()
  {
    return $this->author;
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
  /** @param int */
  public function setUpvoteCount($upvoteCount)
  {
    $this->upvoteCount = $upvoteCount;
  }
  /** @return int */
  public function getUpvoteCount()
  {
    return $this->upvoteCount;
  }
}

class Author extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $profilePhotoUri;
  /** @var string */
  public $type;

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
  public function setProfilePhotoUri($profilePhotoUri)
  {
    $this->profilePhotoUri = $profilePhotoUri;
  }
  /** @return string */
  public function getProfilePhotoUri()
  {
    return $this->profilePhotoUri;
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

class ListAnswersResponse extends \Google\Collection
{
  /** @var Answer[] */
  public $answers;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'answers';
  protected $answersType = Answer::class;
  protected $answersDataType = 'array';
  /** @param Answer[] */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /** @return Answer[] */
  public function getAnswers()
  {
    return $this->answers;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListQuestionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Question[] */
  public $questions;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'questions';
  protected $questionsType = Question::class;
  protected $questionsDataType = 'array';
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
  /** @param Question[] */
  public function setQuestions($questions)
  {
    $this->questions = $questions;
  }
  /** @return Question[] */
  public function getQuestions()
  {
    return $this->questions;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class MybusinessqandaEmpty extends \Google\Model
{
}

class Question extends \Google\Collection
{
  /** @var Author */
  public $author;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $text;
  /** @var Answer[] */
  public $topAnswers;
  /** @var int */
  public $totalAnswerCount;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $upvoteCount;
  protected $collection_key = 'topAnswers';
  protected $authorType = Author::class;
  protected $authorDataType = '';
  protected $topAnswersType = Answer::class;
  protected $topAnswersDataType = 'array';
  /** @param Author */
  public function setAuthor(Author $author)
  {
    $this->author = $author;
  }
  /** @return Author */
  public function getAuthor()
  {
    return $this->author;
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
  /** @param Answer[] */
  public function setTopAnswers($topAnswers)
  {
    $this->topAnswers = $topAnswers;
  }
  /** @return Answer[] */
  public function getTopAnswers()
  {
    return $this->topAnswers;
  }
  /** @param int */
  public function setTotalAnswerCount($totalAnswerCount)
  {
    $this->totalAnswerCount = $totalAnswerCount;
  }
  /** @return int */
  public function getTotalAnswerCount()
  {
    return $this->totalAnswerCount;
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
  /** @param int */
  public function setUpvoteCount($upvoteCount)
  {
    $this->upvoteCount = $upvoteCount;
  }
  /** @return int */
  public function getUpvoteCount()
  {
    return $this->upvoteCount;
  }
}

class UpsertAnswerRequest extends \Google\Model
{
  /** @var Answer */
  public $answer;
  protected $answerType = Answer::class;
  protected $answerDataType = '';
  /** @param Answer */
  public function setAnswer(Answer $answer)
  {
    $this->answer = $answer;
  }
  /** @return Answer */
  public function getAnswer()
  {
    return $this->answer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Answer::class, 'Google_Service_MyBusinessQA_Answer');
class_alias(Author::class, 'Google_Service_MyBusinessQA_Author');
class_alias(ListAnswersResponse::class, 'Google_Service_MyBusinessQA_ListAnswersResponse');
class_alias(ListQuestionsResponse::class, 'Google_Service_MyBusinessQA_ListQuestionsResponse');
class_alias(MybusinessqandaEmpty::class, 'Google_Service_MyBusinessQA_MybusinessqandaEmpty');
class_alias(Question::class, 'Google_Service_MyBusinessQA_Question');
class_alias(UpsertAnswerRequest::class, 'Google_Service_MyBusinessQA_UpsertAnswerRequest');
