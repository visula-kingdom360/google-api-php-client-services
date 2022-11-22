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

namespace Google\Service\Forms;

class Answer extends \Google\Model
{
  /** @var FileUploadAnswers */
  public $fileUploadAnswers;
  /** @var Grade */
  public $grade;
  /** @var string */
  public $questionId;
  /** @var TextAnswers */
  public $textAnswers;
  protected $fileUploadAnswersType = FileUploadAnswers::class;
  protected $fileUploadAnswersDataType = '';
  protected $gradeType = Grade::class;
  protected $gradeDataType = '';
  protected $textAnswersType = TextAnswers::class;
  protected $textAnswersDataType = '';
  /** @param FileUploadAnswers */
  public function setFileUploadAnswers(FileUploadAnswers $fileUploadAnswers)
  {
    $this->fileUploadAnswers = $fileUploadAnswers;
  }
  /** @return FileUploadAnswers */
  public function getFileUploadAnswers()
  {
    return $this->fileUploadAnswers;
  }
  /** @param Grade */
  public function setGrade(Grade $grade)
  {
    $this->grade = $grade;
  }
  /** @return Grade */
  public function getGrade()
  {
    return $this->grade;
  }
  /** @param string */
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /** @return string */
  public function getQuestionId()
  {
    return $this->questionId;
  }
  /** @param TextAnswers */
  public function setTextAnswers(TextAnswers $textAnswers)
  {
    $this->textAnswers = $textAnswers;
  }
  /** @return TextAnswers */
  public function getTextAnswers()
  {
    return $this->textAnswers;
  }
}

class BatchUpdateFormRequest extends \Google\Collection
{
  /** @var bool */
  public $includeFormInResponse;
  /** @var Request[] */
  public $requests;
  /** @var WriteControl */
  public $writeControl;
  protected $collection_key = 'requests';
  protected $requestsType = Request::class;
  protected $requestsDataType = 'array';
  protected $writeControlType = WriteControl::class;
  protected $writeControlDataType = '';
  /** @param bool */
  public function setIncludeFormInResponse($includeFormInResponse)
  {
    $this->includeFormInResponse = $includeFormInResponse;
  }
  /** @return bool */
  public function getIncludeFormInResponse()
  {
    return $this->includeFormInResponse;
  }
  /** @param Request[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return Request[] */
  public function getRequests()
  {
    return $this->requests;
  }
  /** @param WriteControl */
  public function setWriteControl(WriteControl $writeControl)
  {
    $this->writeControl = $writeControl;
  }
  /** @return WriteControl */
  public function getWriteControl()
  {
    return $this->writeControl;
  }
}

class BatchUpdateFormResponse extends \Google\Collection
{
  /** @var Form */
  public $form;
  /** @var Response[] */
  public $replies;
  /** @var WriteControl */
  public $writeControl;
  protected $collection_key = 'replies';
  protected $formType = Form::class;
  protected $formDataType = '';
  protected $repliesType = Response::class;
  protected $repliesDataType = 'array';
  protected $writeControlType = WriteControl::class;
  protected $writeControlDataType = '';
  /** @param Form */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /** @return Form */
  public function getForm()
  {
    return $this->form;
  }
  /** @param Response[] */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /** @return Response[] */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param WriteControl */
  public function setWriteControl(WriteControl $writeControl)
  {
    $this->writeControl = $writeControl;
  }
  /** @return WriteControl */
  public function getWriteControl()
  {
    return $this->writeControl;
  }
}

class ChoiceQuestion extends \Google\Collection
{
  /** @var Option[] */
  public $options;
  /** @var bool */
  public $shuffle;
  /** @var string */
  public $type;
  protected $collection_key = 'options';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param bool */
  public function setShuffle($shuffle)
  {
    $this->shuffle = $shuffle;
  }
  /** @return bool */
  public function getShuffle()
  {
    return $this->shuffle;
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

class CloudPubsubTopic extends \Google\Model
{
  /** @var string */
  public $topicName;

  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class CorrectAnswer extends \Google\Model
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

class CorrectAnswers extends \Google\Collection
{
  /** @var CorrectAnswer[] */
  public $answers;
  protected $collection_key = 'answers';
  protected $answersType = CorrectAnswer::class;
  protected $answersDataType = 'array';
  /** @param CorrectAnswer[] */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /** @return CorrectAnswer[] */
  public function getAnswers()
  {
    return $this->answers;
  }
}

class CreateItemRequest extends \Google\Model
{
  /** @var Item */
  public $item;
  /** @var Location */
  public $location;
  protected $itemType = Item::class;
  protected $itemDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Item */
  public function setItem(Item $item)
  {
    $this->item = $item;
  }
  /** @return Item */
  public function getItem()
  {
    return $this->item;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
}

class CreateItemResponse extends \Google\Collection
{
  /** @var string */
  public $itemId;
  /** @var string[] */
  public $questionId;
  protected $collection_key = 'questionId';
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param string[] */
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /** @return string[] */
  public function getQuestionId()
  {
    return $this->questionId;
  }
}

class CreateWatchRequest extends \Google\Model
{
  /** @var Watch */
  public $watch;
  /** @var string */
  public $watchId;
  protected $watchType = Watch::class;
  protected $watchDataType = '';
  /** @param Watch */
  public function setWatch(Watch $watch)
  {
    $this->watch = $watch;
  }
  /** @return Watch */
  public function getWatch()
  {
    return $this->watch;
  }
  /** @param string */
  public function setWatchId($watchId)
  {
    $this->watchId = $watchId;
  }
  /** @return string */
  public function getWatchId()
  {
    return $this->watchId;
  }
}

class DateQuestion extends \Google\Model
{
  /** @var bool */
  public $includeTime;
  /** @var bool */
  public $includeYear;

  /** @param bool */
  public function setIncludeTime($includeTime)
  {
    $this->includeTime = $includeTime;
  }
  /** @return bool */
  public function getIncludeTime()
  {
    return $this->includeTime;
  }
  /** @param bool */
  public function setIncludeYear($includeYear)
  {
    $this->includeYear = $includeYear;
  }
  /** @return bool */
  public function getIncludeYear()
  {
    return $this->includeYear;
  }
}

class DeleteItemRequest extends \Google\Model
{
  /** @var Location */
  public $location;
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
}

class ExtraMaterial extends \Google\Model
{
  /** @var TextLink */
  public $link;
  /** @var VideoLink */
  public $video;
  protected $linkType = TextLink::class;
  protected $linkDataType = '';
  protected $videoType = VideoLink::class;
  protected $videoDataType = '';
  /** @param TextLink */
  public function setLink(TextLink $link)
  {
    $this->link = $link;
  }
  /** @return TextLink */
  public function getLink()
  {
    return $this->link;
  }
  /** @param VideoLink */
  public function setVideo(VideoLink $video)
  {
    $this->video = $video;
  }
  /** @return VideoLink */
  public function getVideo()
  {
    return $this->video;
  }
}

class Feedback extends \Google\Collection
{
  /** @var ExtraMaterial[] */
  public $material;
  /** @var string */
  public $text;
  protected $collection_key = 'material';
  protected $materialType = ExtraMaterial::class;
  protected $materialDataType = 'array';
  /** @param ExtraMaterial[] */
  public function setMaterial($material)
  {
    $this->material = $material;
  }
  /** @return ExtraMaterial[] */
  public function getMaterial()
  {
    return $this->material;
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

class FileUploadAnswer extends \Google\Model
{
  /** @var string */
  public $fileId;
  /** @var string */
  public $fileName;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }
  /** @return string */
  public function getFileId()
  {
    return $this->fileId;
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class FileUploadAnswers extends \Google\Collection
{
  /** @var FileUploadAnswer[] */
  public $answers;
  protected $collection_key = 'answers';
  protected $answersType = FileUploadAnswer::class;
  protected $answersDataType = 'array';
  /** @param FileUploadAnswer[] */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /** @return FileUploadAnswer[] */
  public function getAnswers()
  {
    return $this->answers;
  }
}

class FileUploadQuestion extends \Google\Collection
{
  /** @var string */
  public $folderId;
  /** @var string */
  public $maxFileSize;
  /** @var int */
  public $maxFiles;
  /** @var string[] */
  public $types;
  protected $collection_key = 'types';
  /** @param string */
  public function setFolderId($folderId)
  {
    $this->folderId = $folderId;
  }
  /** @return string */
  public function getFolderId()
  {
    return $this->folderId;
  }
  /** @param string */
  public function setMaxFileSize($maxFileSize)
  {
    $this->maxFileSize = $maxFileSize;
  }
  /** @return string */
  public function getMaxFileSize()
  {
    return $this->maxFileSize;
  }
  /** @param int */
  public function setMaxFiles($maxFiles)
  {
    $this->maxFiles = $maxFiles;
  }
  /** @return int */
  public function getMaxFiles()
  {
    return $this->maxFiles;
  }
  /** @param string[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return string[] */
  public function getTypes()
  {
    return $this->types;
  }
}

class Form extends \Google\Collection
{
  /** @var string */
  public $formId;
  /** @var Info */
  public $info;
  /** @var Item[] */
  public $items;
  /** @var string */
  public $linkedSheetId;
  /** @var string */
  public $responderUri;
  /** @var string */
  public $revisionId;
  /** @var FormSettings */
  public $settings;
  protected $collection_key = 'items';
  protected $infoType = Info::class;
  protected $infoDataType = '';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
  protected $settingsType = FormSettings::class;
  protected $settingsDataType = '';
  /** @param string */
  public function setFormId($formId)
  {
    $this->formId = $formId;
  }
  /** @return string */
  public function getFormId()
  {
    return $this->formId;
  }
  /** @param Info */
  public function setInfo(Info $info)
  {
    $this->info = $info;
  }
  /** @return Info */
  public function getInfo()
  {
    return $this->info;
  }
  /** @param Item[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Item[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setLinkedSheetId($linkedSheetId)
  {
    $this->linkedSheetId = $linkedSheetId;
  }
  /** @return string */
  public function getLinkedSheetId()
  {
    return $this->linkedSheetId;
  }
  /** @param string */
  public function setResponderUri($responderUri)
  {
    $this->responderUri = $responderUri;
  }
  /** @return string */
  public function getResponderUri()
  {
    return $this->responderUri;
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
  /** @param FormSettings */
  public function setSettings(FormSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return FormSettings */
  public function getSettings()
  {
    return $this->settings;
  }
}

class FormResponse extends \Google\Model
{
  /** @var Answer[] */
  public $answers;
  /** @var string */
  public $createTime;
  /** @var string */
  public $formId;
  /** @var string */
  public $lastSubmittedTime;
  /** @var string */
  public $respondentEmail;
  /** @var string */
  public $responseId;
  public $totalScore;
  protected $answersType = Answer::class;
  protected $answersDataType = 'map';
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
  public function setFormId($formId)
  {
    $this->formId = $formId;
  }
  /** @return string */
  public function getFormId()
  {
    return $this->formId;
  }
  /** @param string */
  public function setLastSubmittedTime($lastSubmittedTime)
  {
    $this->lastSubmittedTime = $lastSubmittedTime;
  }
  /** @return string */
  public function getLastSubmittedTime()
  {
    return $this->lastSubmittedTime;
  }
  /** @param string */
  public function setRespondentEmail($respondentEmail)
  {
    $this->respondentEmail = $respondentEmail;
  }
  /** @return string */
  public function getRespondentEmail()
  {
    return $this->respondentEmail;
  }
  /** @param string */
  public function setResponseId($responseId)
  {
    $this->responseId = $responseId;
  }
  /** @return string */
  public function getResponseId()
  {
    return $this->responseId;
  }
  public function setTotalScore($totalScore)
  {
    $this->totalScore = $totalScore;
  }
  public function getTotalScore()
  {
    return $this->totalScore;
  }
}

class FormSettings extends \Google\Model
{
  /** @var QuizSettings */
  public $quizSettings;
  protected $quizSettingsType = QuizSettings::class;
  protected $quizSettingsDataType = '';
  /** @param QuizSettings */
  public function setQuizSettings(QuizSettings $quizSettings)
  {
    $this->quizSettings = $quizSettings;
  }
  /** @return QuizSettings */
  public function getQuizSettings()
  {
    return $this->quizSettings;
  }
}

class FormsEmpty extends \Google\Model
{
}

class Grade extends \Google\Model
{
  /** @var bool */
  public $correct;
  /** @var Feedback */
  public $feedback;
  public $score;
  protected $feedbackType = Feedback::class;
  protected $feedbackDataType = '';
  /** @param bool */
  public function setCorrect($correct)
  {
    $this->correct = $correct;
  }
  /** @return bool */
  public function getCorrect()
  {
    return $this->correct;
  }
  /** @param Feedback */
  public function setFeedback(Feedback $feedback)
  {
    $this->feedback = $feedback;
  }
  /** @return Feedback */
  public function getFeedback()
  {
    return $this->feedback;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
}

class Grading extends \Google\Model
{
  /** @var CorrectAnswers */
  public $correctAnswers;
  /** @var Feedback */
  public $generalFeedback;
  /** @var int */
  public $pointValue;
  /** @var Feedback */
  public $whenRight;
  /** @var Feedback */
  public $whenWrong;
  protected $correctAnswersType = CorrectAnswers::class;
  protected $correctAnswersDataType = '';
  protected $generalFeedbackType = Feedback::class;
  protected $generalFeedbackDataType = '';
  protected $whenRightType = Feedback::class;
  protected $whenRightDataType = '';
  protected $whenWrongType = Feedback::class;
  protected $whenWrongDataType = '';
  /** @param CorrectAnswers */
  public function setCorrectAnswers(CorrectAnswers $correctAnswers)
  {
    $this->correctAnswers = $correctAnswers;
  }
  /** @return CorrectAnswers */
  public function getCorrectAnswers()
  {
    return $this->correctAnswers;
  }
  /** @param Feedback */
  public function setGeneralFeedback(Feedback $generalFeedback)
  {
    $this->generalFeedback = $generalFeedback;
  }
  /** @return Feedback */
  public function getGeneralFeedback()
  {
    return $this->generalFeedback;
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
  /** @param Feedback */
  public function setWhenRight(Feedback $whenRight)
  {
    $this->whenRight = $whenRight;
  }
  /** @return Feedback */
  public function getWhenRight()
  {
    return $this->whenRight;
  }
  /** @param Feedback */
  public function setWhenWrong(Feedback $whenWrong)
  {
    $this->whenWrong = $whenWrong;
  }
  /** @return Feedback */
  public function getWhenWrong()
  {
    return $this->whenWrong;
  }
}

class Grid extends \Google\Model
{
  /** @var ChoiceQuestion */
  public $columns;
  /** @var bool */
  public $shuffleQuestions;
  protected $columnsType = ChoiceQuestion::class;
  protected $columnsDataType = '';
  /** @param ChoiceQuestion */
  public function setColumns(ChoiceQuestion $columns)
  {
    $this->columns = $columns;
  }
  /** @return ChoiceQuestion */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param bool */
  public function setShuffleQuestions($shuffleQuestions)
  {
    $this->shuffleQuestions = $shuffleQuestions;
  }
  /** @return bool */
  public function getShuffleQuestions()
  {
    return $this->shuffleQuestions;
  }
}

class Image extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $contentUri;
  /** @var MediaProperties */
  public $properties;
  /** @var string */
  public $sourceUri;
  protected $propertiesType = MediaProperties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setAltText($altText)
  {
    $this->altText = $altText;
  }
  /** @return string */
  public function getAltText()
  {
    return $this->altText;
  }
  /** @param string */
  public function setContentUri($contentUri)
  {
    $this->contentUri = $contentUri;
  }
  /** @return string */
  public function getContentUri()
  {
    return $this->contentUri;
  }
  /** @param MediaProperties */
  public function setProperties(MediaProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return MediaProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /** @return string */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

class ImageItem extends \Google\Model
{
  /** @var Image */
  public $image;
  protected $imageType = Image::class;
  protected $imageDataType = '';
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

class Info extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $documentTitle;
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
  public function setDocumentTitle($documentTitle)
  {
    $this->documentTitle = $documentTitle;
  }
  /** @return string */
  public function getDocumentTitle()
  {
    return $this->documentTitle;
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

class Item extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var ImageItem */
  public $imageItem;
  /** @var string */
  public $itemId;
  /** @var PageBreakItem */
  public $pageBreakItem;
  /** @var QuestionGroupItem */
  public $questionGroupItem;
  /** @var QuestionItem */
  public $questionItem;
  /** @var TextItem */
  public $textItem;
  /** @var string */
  public $title;
  /** @var VideoItem */
  public $videoItem;
  protected $imageItemType = ImageItem::class;
  protected $imageItemDataType = '';
  protected $pageBreakItemType = PageBreakItem::class;
  protected $pageBreakItemDataType = '';
  protected $questionGroupItemType = QuestionGroupItem::class;
  protected $questionGroupItemDataType = '';
  protected $questionItemType = QuestionItem::class;
  protected $questionItemDataType = '';
  protected $textItemType = TextItem::class;
  protected $textItemDataType = '';
  protected $videoItemType = VideoItem::class;
  protected $videoItemDataType = '';
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
  /** @param ImageItem */
  public function setImageItem(ImageItem $imageItem)
  {
    $this->imageItem = $imageItem;
  }
  /** @return ImageItem */
  public function getImageItem()
  {
    return $this->imageItem;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param PageBreakItem */
  public function setPageBreakItem(PageBreakItem $pageBreakItem)
  {
    $this->pageBreakItem = $pageBreakItem;
  }
  /** @return PageBreakItem */
  public function getPageBreakItem()
  {
    return $this->pageBreakItem;
  }
  /** @param QuestionGroupItem */
  public function setQuestionGroupItem(QuestionGroupItem $questionGroupItem)
  {
    $this->questionGroupItem = $questionGroupItem;
  }
  /** @return QuestionGroupItem */
  public function getQuestionGroupItem()
  {
    return $this->questionGroupItem;
  }
  /** @param QuestionItem */
  public function setQuestionItem(QuestionItem $questionItem)
  {
    $this->questionItem = $questionItem;
  }
  /** @return QuestionItem */
  public function getQuestionItem()
  {
    return $this->questionItem;
  }
  /** @param TextItem */
  public function setTextItem(TextItem $textItem)
  {
    $this->textItem = $textItem;
  }
  /** @return TextItem */
  public function getTextItem()
  {
    return $this->textItem;
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
  /** @param VideoItem */
  public function setVideoItem(VideoItem $videoItem)
  {
    $this->videoItem = $videoItem;
  }
  /** @return VideoItem */
  public function getVideoItem()
  {
    return $this->videoItem;
  }
}

class ListFormResponsesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var FormResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = FormResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param FormResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return FormResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class ListWatchesResponse extends \Google\Collection
{
  /** @var Watch[] */
  public $watches;
  protected $collection_key = 'watches';
  protected $watchesType = Watch::class;
  protected $watchesDataType = 'array';
  /** @param Watch[] */
  public function setWatches($watches)
  {
    $this->watches = $watches;
  }
  /** @return Watch[] */
  public function getWatches()
  {
    return $this->watches;
  }
}

class Location extends \Google\Model
{
  /** @var int */
  public $index;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
}

class MediaProperties extends \Google\Model
{
  /** @var string */
  public $alignment;
  /** @var int */
  public $width;

  /** @param string */
  public function setAlignment($alignment)
  {
    $this->alignment = $alignment;
  }
  /** @return string */
  public function getAlignment()
  {
    return $this->alignment;
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

class MoveItemRequest extends \Google\Model
{
  /** @var Location */
  public $newLocation;
  /** @var Location */
  public $originalLocation;
  protected $newLocationType = Location::class;
  protected $newLocationDataType = '';
  protected $originalLocationType = Location::class;
  protected $originalLocationDataType = '';
  /** @param Location */
  public function setNewLocation(Location $newLocation)
  {
    $this->newLocation = $newLocation;
  }
  /** @return Location */
  public function getNewLocation()
  {
    return $this->newLocation;
  }
  /** @param Location */
  public function setOriginalLocation(Location $originalLocation)
  {
    $this->originalLocation = $originalLocation;
  }
  /** @return Location */
  public function getOriginalLocation()
  {
    return $this->originalLocation;
  }
}

class Option extends \Google\Model
{
  /** @var string */
  public $goToAction;
  /** @var string */
  public $goToSectionId;
  /** @var Image */
  public $image;
  /** @var bool */
  public $isOther;
  /** @var string */
  public $value;
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /** @param string */
  public function setGoToAction($goToAction)
  {
    $this->goToAction = $goToAction;
  }
  /** @return string */
  public function getGoToAction()
  {
    return $this->goToAction;
  }
  /** @param string */
  public function setGoToSectionId($goToSectionId)
  {
    $this->goToSectionId = $goToSectionId;
  }
  /** @return string */
  public function getGoToSectionId()
  {
    return $this->goToSectionId;
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
  /** @param bool */
  public function setIsOther($isOther)
  {
    $this->isOther = $isOther;
  }
  /** @return bool */
  public function getIsOther()
  {
    return $this->isOther;
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

class PageBreakItem extends \Google\Model
{
}

class Question extends \Google\Model
{
  /** @var ChoiceQuestion */
  public $choiceQuestion;
  /** @var DateQuestion */
  public $dateQuestion;
  /** @var FileUploadQuestion */
  public $fileUploadQuestion;
  /** @var Grading */
  public $grading;
  /** @var string */
  public $questionId;
  /** @var bool */
  public $required;
  /** @var RowQuestion */
  public $rowQuestion;
  /** @var ScaleQuestion */
  public $scaleQuestion;
  /** @var TextQuestion */
  public $textQuestion;
  /** @var TimeQuestion */
  public $timeQuestion;
  protected $choiceQuestionType = ChoiceQuestion::class;
  protected $choiceQuestionDataType = '';
  protected $dateQuestionType = DateQuestion::class;
  protected $dateQuestionDataType = '';
  protected $fileUploadQuestionType = FileUploadQuestion::class;
  protected $fileUploadQuestionDataType = '';
  protected $gradingType = Grading::class;
  protected $gradingDataType = '';
  protected $rowQuestionType = RowQuestion::class;
  protected $rowQuestionDataType = '';
  protected $scaleQuestionType = ScaleQuestion::class;
  protected $scaleQuestionDataType = '';
  protected $textQuestionType = TextQuestion::class;
  protected $textQuestionDataType = '';
  protected $timeQuestionType = TimeQuestion::class;
  protected $timeQuestionDataType = '';
  /** @param ChoiceQuestion */
  public function setChoiceQuestion(ChoiceQuestion $choiceQuestion)
  {
    $this->choiceQuestion = $choiceQuestion;
  }
  /** @return ChoiceQuestion */
  public function getChoiceQuestion()
  {
    return $this->choiceQuestion;
  }
  /** @param DateQuestion */
  public function setDateQuestion(DateQuestion $dateQuestion)
  {
    $this->dateQuestion = $dateQuestion;
  }
  /** @return DateQuestion */
  public function getDateQuestion()
  {
    return $this->dateQuestion;
  }
  /** @param FileUploadQuestion */
  public function setFileUploadQuestion(FileUploadQuestion $fileUploadQuestion)
  {
    $this->fileUploadQuestion = $fileUploadQuestion;
  }
  /** @return FileUploadQuestion */
  public function getFileUploadQuestion()
  {
    return $this->fileUploadQuestion;
  }
  /** @param Grading */
  public function setGrading(Grading $grading)
  {
    $this->grading = $grading;
  }
  /** @return Grading */
  public function getGrading()
  {
    return $this->grading;
  }
  /** @param string */
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /** @return string */
  public function getQuestionId()
  {
    return $this->questionId;
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
  /** @param RowQuestion */
  public function setRowQuestion(RowQuestion $rowQuestion)
  {
    $this->rowQuestion = $rowQuestion;
  }
  /** @return RowQuestion */
  public function getRowQuestion()
  {
    return $this->rowQuestion;
  }
  /** @param ScaleQuestion */
  public function setScaleQuestion(ScaleQuestion $scaleQuestion)
  {
    $this->scaleQuestion = $scaleQuestion;
  }
  /** @return ScaleQuestion */
  public function getScaleQuestion()
  {
    return $this->scaleQuestion;
  }
  /** @param TextQuestion */
  public function setTextQuestion(TextQuestion $textQuestion)
  {
    $this->textQuestion = $textQuestion;
  }
  /** @return TextQuestion */
  public function getTextQuestion()
  {
    return $this->textQuestion;
  }
  /** @param TimeQuestion */
  public function setTimeQuestion(TimeQuestion $timeQuestion)
  {
    $this->timeQuestion = $timeQuestion;
  }
  /** @return TimeQuestion */
  public function getTimeQuestion()
  {
    return $this->timeQuestion;
  }
}

class QuestionGroupItem extends \Google\Collection
{
  /** @var Grid */
  public $grid;
  /** @var Image */
  public $image;
  /** @var Question[] */
  public $questions;
  protected $collection_key = 'questions';
  protected $gridType = Grid::class;
  protected $gridDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $questionsType = Question::class;
  protected $questionsDataType = 'array';
  /** @param Grid */
  public function setGrid(Grid $grid)
  {
    $this->grid = $grid;
  }
  /** @return Grid */
  public function getGrid()
  {
    return $this->grid;
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
}

class QuestionItem extends \Google\Model
{
  /** @var Image */
  public $image;
  /** @var Question */
  public $question;
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $questionType = Question::class;
  protected $questionDataType = '';
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
  /** @param Question */
  public function setQuestion(Question $question)
  {
    $this->question = $question;
  }
  /** @return Question */
  public function getQuestion()
  {
    return $this->question;
  }
}

class QuizSettings extends \Google\Model
{
  /** @var bool */
  public $isQuiz;

  /** @param bool */
  public function setIsQuiz($isQuiz)
  {
    $this->isQuiz = $isQuiz;
  }
  /** @return bool */
  public function getIsQuiz()
  {
    return $this->isQuiz;
  }
}

class RenewWatchRequest extends \Google\Model
{
}

class Request extends \Google\Model
{
  /** @var CreateItemRequest */
  public $createItem;
  /** @var DeleteItemRequest */
  public $deleteItem;
  /** @var MoveItemRequest */
  public $moveItem;
  /** @var UpdateFormInfoRequest */
  public $updateFormInfo;
  /** @var UpdateItemRequest */
  public $updateItem;
  /** @var UpdateSettingsRequest */
  public $updateSettings;
  protected $createItemType = CreateItemRequest::class;
  protected $createItemDataType = '';
  protected $deleteItemType = DeleteItemRequest::class;
  protected $deleteItemDataType = '';
  protected $moveItemType = MoveItemRequest::class;
  protected $moveItemDataType = '';
  protected $updateFormInfoType = UpdateFormInfoRequest::class;
  protected $updateFormInfoDataType = '';
  protected $updateItemType = UpdateItemRequest::class;
  protected $updateItemDataType = '';
  protected $updateSettingsType = UpdateSettingsRequest::class;
  protected $updateSettingsDataType = '';
  /** @param CreateItemRequest */
  public function setCreateItem(CreateItemRequest $createItem)
  {
    $this->createItem = $createItem;
  }
  /** @return CreateItemRequest */
  public function getCreateItem()
  {
    return $this->createItem;
  }
  /** @param DeleteItemRequest */
  public function setDeleteItem(DeleteItemRequest $deleteItem)
  {
    $this->deleteItem = $deleteItem;
  }
  /** @return DeleteItemRequest */
  public function getDeleteItem()
  {
    return $this->deleteItem;
  }
  /** @param MoveItemRequest */
  public function setMoveItem(MoveItemRequest $moveItem)
  {
    $this->moveItem = $moveItem;
  }
  /** @return MoveItemRequest */
  public function getMoveItem()
  {
    return $this->moveItem;
  }
  /** @param UpdateFormInfoRequest */
  public function setUpdateFormInfo(UpdateFormInfoRequest $updateFormInfo)
  {
    $this->updateFormInfo = $updateFormInfo;
  }
  /** @return UpdateFormInfoRequest */
  public function getUpdateFormInfo()
  {
    return $this->updateFormInfo;
  }
  /** @param UpdateItemRequest */
  public function setUpdateItem(UpdateItemRequest $updateItem)
  {
    $this->updateItem = $updateItem;
  }
  /** @return UpdateItemRequest */
  public function getUpdateItem()
  {
    return $this->updateItem;
  }
  /** @param UpdateSettingsRequest */
  public function setUpdateSettings(UpdateSettingsRequest $updateSettings)
  {
    $this->updateSettings = $updateSettings;
  }
  /** @return UpdateSettingsRequest */
  public function getUpdateSettings()
  {
    return $this->updateSettings;
  }
}

class Response extends \Google\Model
{
  /** @var CreateItemResponse */
  public $createItem;
  protected $createItemType = CreateItemResponse::class;
  protected $createItemDataType = '';
  /** @param CreateItemResponse */
  public function setCreateItem(CreateItemResponse $createItem)
  {
    $this->createItem = $createItem;
  }
  /** @return CreateItemResponse */
  public function getCreateItem()
  {
    return $this->createItem;
  }
}

class RowQuestion extends \Google\Model
{
  /** @var string */
  public $title;

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

class ScaleQuestion extends \Google\Model
{
  /** @var int */
  public $high;
  /** @var string */
  public $highLabel;
  /** @var int */
  public $low;
  /** @var string */
  public $lowLabel;

  /** @param int */
  public function setHigh($high)
  {
    $this->high = $high;
  }
  /** @return int */
  public function getHigh()
  {
    return $this->high;
  }
  /** @param string */
  public function setHighLabel($highLabel)
  {
    $this->highLabel = $highLabel;
  }
  /** @return string */
  public function getHighLabel()
  {
    return $this->highLabel;
  }
  /** @param int */
  public function setLow($low)
  {
    $this->low = $low;
  }
  /** @return int */
  public function getLow()
  {
    return $this->low;
  }
  /** @param string */
  public function setLowLabel($lowLabel)
  {
    $this->lowLabel = $lowLabel;
  }
  /** @return string */
  public function getLowLabel()
  {
    return $this->lowLabel;
  }
}

class TextAnswer extends \Google\Model
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

class TextAnswers extends \Google\Collection
{
  /** @var TextAnswer[] */
  public $answers;
  protected $collection_key = 'answers';
  protected $answersType = TextAnswer::class;
  protected $answersDataType = 'array';
  /** @param TextAnswer[] */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /** @return TextAnswer[] */
  public function getAnswers()
  {
    return $this->answers;
  }
}

class TextItem extends \Google\Model
{
}

class TextLink extends \Google\Model
{
  /** @var string */
  public $displayText;
  /** @var string */
  public $uri;

  /** @param string */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /** @return string */
  public function getDisplayText()
  {
    return $this->displayText;
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

class TextQuestion extends \Google\Model
{
  /** @var bool */
  public $paragraph;

  /** @param bool */
  public function setParagraph($paragraph)
  {
    $this->paragraph = $paragraph;
  }
  /** @return bool */
  public function getParagraph()
  {
    return $this->paragraph;
  }
}

class TimeQuestion extends \Google\Model
{
  /** @var bool */
  public $duration;

  /** @param bool */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return bool */
  public function getDuration()
  {
    return $this->duration;
  }
}

class UpdateFormInfoRequest extends \Google\Model
{
  /** @var Info */
  public $info;
  /** @var string */
  public $updateMask;
  protected $infoType = Info::class;
  protected $infoDataType = '';
  /** @param Info */
  public function setInfo(Info $info)
  {
    $this->info = $info;
  }
  /** @return Info */
  public function getInfo()
  {
    return $this->info;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class UpdateItemRequest extends \Google\Model
{
  /** @var Item */
  public $item;
  /** @var Location */
  public $location;
  /** @var string */
  public $updateMask;
  protected $itemType = Item::class;
  protected $itemDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Item */
  public function setItem(Item $item)
  {
    $this->item = $item;
  }
  /** @return Item */
  public function getItem()
  {
    return $this->item;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class UpdateSettingsRequest extends \Google\Model
{
  /** @var FormSettings */
  public $settings;
  /** @var string */
  public $updateMask;
  protected $settingsType = FormSettings::class;
  protected $settingsDataType = '';
  /** @param FormSettings */
  public function setSettings(FormSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return FormSettings */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class Video extends \Google\Model
{
  /** @var MediaProperties */
  public $properties;
  /** @var string */
  public $youtubeUri;
  protected $propertiesType = MediaProperties::class;
  protected $propertiesDataType = '';
  /** @param MediaProperties */
  public function setProperties(MediaProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return MediaProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setYoutubeUri($youtubeUri)
  {
    $this->youtubeUri = $youtubeUri;
  }
  /** @return string */
  public function getYoutubeUri()
  {
    return $this->youtubeUri;
  }
}

class VideoItem extends \Google\Model
{
  /** @var string */
  public $caption;
  /** @var Video */
  public $video;
  protected $videoType = Video::class;
  protected $videoDataType = '';
  /** @param string */
  public function setCaption($caption)
  {
    $this->caption = $caption;
  }
  /** @return string */
  public function getCaption()
  {
    return $this->caption;
  }
  /** @param Video */
  public function setVideo(Video $video)
  {
    $this->video = $video;
  }
  /** @return Video */
  public function getVideo()
  {
    return $this->video;
  }
}

class VideoLink extends \Google\Model
{
  /** @var string */
  public $displayText;
  /** @var string */
  public $youtubeUri;

  /** @param string */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /** @return string */
  public function getDisplayText()
  {
    return $this->displayText;
  }
  /** @param string */
  public function setYoutubeUri($youtubeUri)
  {
    $this->youtubeUri = $youtubeUri;
  }
  /** @return string */
  public function getYoutubeUri()
  {
    return $this->youtubeUri;
  }
}

class Watch extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $errorType;
  /** @var string */
  public $eventType;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $id;
  /** @var string */
  public $state;
  /** @var WatchTarget */
  public $target;
  protected $targetType = WatchTarget::class;
  protected $targetDataType = '';
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
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /** @return string */
  public function getErrorType()
  {
    return $this->errorType;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param WatchTarget */
  public function setTarget(WatchTarget $target)
  {
    $this->target = $target;
  }
  /** @return WatchTarget */
  public function getTarget()
  {
    return $this->target;
  }
}

class WatchTarget extends \Google\Model
{
  /** @var CloudPubsubTopic */
  public $topic;
  protected $topicType = CloudPubsubTopic::class;
  protected $topicDataType = '';
  /** @param CloudPubsubTopic */
  public function setTopic(CloudPubsubTopic $topic)
  {
    $this->topic = $topic;
  }
  /** @return CloudPubsubTopic */
  public function getTopic()
  {
    return $this->topic;
  }
}

class WriteControl extends \Google\Model
{
  /** @var string */
  public $requiredRevisionId;
  /** @var string */
  public $targetRevisionId;

  /** @param string */
  public function setRequiredRevisionId($requiredRevisionId)
  {
    $this->requiredRevisionId = $requiredRevisionId;
  }
  /** @return string */
  public function getRequiredRevisionId()
  {
    return $this->requiredRevisionId;
  }
  /** @param string */
  public function setTargetRevisionId($targetRevisionId)
  {
    $this->targetRevisionId = $targetRevisionId;
  }
  /** @return string */
  public function getTargetRevisionId()
  {
    return $this->targetRevisionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Answer::class, 'Google_Service_Forms_Answer');
class_alias(BatchUpdateFormRequest::class, 'Google_Service_Forms_BatchUpdateFormRequest');
class_alias(BatchUpdateFormResponse::class, 'Google_Service_Forms_BatchUpdateFormResponse');
class_alias(ChoiceQuestion::class, 'Google_Service_Forms_ChoiceQuestion');
class_alias(CloudPubsubTopic::class, 'Google_Service_Forms_CloudPubsubTopic');
class_alias(CorrectAnswer::class, 'Google_Service_Forms_CorrectAnswer');
class_alias(CorrectAnswers::class, 'Google_Service_Forms_CorrectAnswers');
class_alias(CreateItemRequest::class, 'Google_Service_Forms_CreateItemRequest');
class_alias(CreateItemResponse::class, 'Google_Service_Forms_CreateItemResponse');
class_alias(CreateWatchRequest::class, 'Google_Service_Forms_CreateWatchRequest');
class_alias(DateQuestion::class, 'Google_Service_Forms_DateQuestion');
class_alias(DeleteItemRequest::class, 'Google_Service_Forms_DeleteItemRequest');
class_alias(ExtraMaterial::class, 'Google_Service_Forms_ExtraMaterial');
class_alias(Feedback::class, 'Google_Service_Forms_Feedback');
class_alias(FileUploadAnswer::class, 'Google_Service_Forms_FileUploadAnswer');
class_alias(FileUploadAnswers::class, 'Google_Service_Forms_FileUploadAnswers');
class_alias(FileUploadQuestion::class, 'Google_Service_Forms_FileUploadQuestion');
class_alias(Form::class, 'Google_Service_Forms_Form');
class_alias(FormResponse::class, 'Google_Service_Forms_FormResponse');
class_alias(FormSettings::class, 'Google_Service_Forms_FormSettings');
class_alias(FormsEmpty::class, 'Google_Service_Forms_FormsEmpty');
class_alias(Grade::class, 'Google_Service_Forms_Grade');
class_alias(Grading::class, 'Google_Service_Forms_Grading');
class_alias(Grid::class, 'Google_Service_Forms_Grid');
class_alias(Image::class, 'Google_Service_Forms_Image');
class_alias(ImageItem::class, 'Google_Service_Forms_ImageItem');
class_alias(Info::class, 'Google_Service_Forms_Info');
class_alias(Item::class, 'Google_Service_Forms_Item');
class_alias(ListFormResponsesResponse::class, 'Google_Service_Forms_ListFormResponsesResponse');
class_alias(ListWatchesResponse::class, 'Google_Service_Forms_ListWatchesResponse');
class_alias(Location::class, 'Google_Service_Forms_Location');
class_alias(MediaProperties::class, 'Google_Service_Forms_MediaProperties');
class_alias(MoveItemRequest::class, 'Google_Service_Forms_MoveItemRequest');
class_alias(Option::class, 'Google_Service_Forms_Option');
class_alias(PageBreakItem::class, 'Google_Service_Forms_PageBreakItem');
class_alias(Question::class, 'Google_Service_Forms_Question');
class_alias(QuestionGroupItem::class, 'Google_Service_Forms_QuestionGroupItem');
class_alias(QuestionItem::class, 'Google_Service_Forms_QuestionItem');
class_alias(QuizSettings::class, 'Google_Service_Forms_QuizSettings');
class_alias(RenewWatchRequest::class, 'Google_Service_Forms_RenewWatchRequest');
class_alias(Request::class, 'Google_Service_Forms_Request');
class_alias(Response::class, 'Google_Service_Forms_Response');
class_alias(RowQuestion::class, 'Google_Service_Forms_RowQuestion');
class_alias(ScaleQuestion::class, 'Google_Service_Forms_ScaleQuestion');
class_alias(TextAnswer::class, 'Google_Service_Forms_TextAnswer');
class_alias(TextAnswers::class, 'Google_Service_Forms_TextAnswers');
class_alias(TextItem::class, 'Google_Service_Forms_TextItem');
class_alias(TextLink::class, 'Google_Service_Forms_TextLink');
class_alias(TextQuestion::class, 'Google_Service_Forms_TextQuestion');
class_alias(TimeQuestion::class, 'Google_Service_Forms_TimeQuestion');
class_alias(UpdateFormInfoRequest::class, 'Google_Service_Forms_UpdateFormInfoRequest');
class_alias(UpdateItemRequest::class, 'Google_Service_Forms_UpdateItemRequest');
class_alias(UpdateSettingsRequest::class, 'Google_Service_Forms_UpdateSettingsRequest');
class_alias(Video::class, 'Google_Service_Forms_Video');
class_alias(VideoItem::class, 'Google_Service_Forms_VideoItem');
class_alias(VideoLink::class, 'Google_Service_Forms_VideoLink');
class_alias(Watch::class, 'Google_Service_Forms_Watch');
class_alias(WatchTarget::class, 'Google_Service_Forms_WatchTarget');
class_alias(WriteControl::class, 'Google_Service_Forms_WriteControl');
