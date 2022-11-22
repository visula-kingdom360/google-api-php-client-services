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

namespace Google\Service\HangoutsChat;

class ActionParameter extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class ActionResponse extends \Google\Model
{
  /** @var DialogAction */
  public $dialogAction;
  /** @var string */
  public $type;
  /** @var string */
  public $url;
  protected $dialogActionType = DialogAction::class;
  protected $dialogActionDataType = '';
  /** @param DialogAction */
  public function setDialogAction(DialogAction $dialogAction)
  {
    $this->dialogAction = $dialogAction;
  }
  /** @return DialogAction */
  public function getDialogAction()
  {
    return $this->dialogAction;
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

class ActionStatus extends \Google\Model
{
  /** @var string */
  public $statusCode;
  /** @var string */
  public $userFacingMessage;

  /** @param string */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /** @return string */
  public function getStatusCode()
  {
    return $this->statusCode;
  }
  /** @param string */
  public function setUserFacingMessage($userFacingMessage)
  {
    $this->userFacingMessage = $userFacingMessage;
  }
  /** @return string */
  public function getUserFacingMessage()
  {
    return $this->userFacingMessage;
  }
}

class Annotation extends \Google\Model
{
  /** @var int */
  public $length;
  /** @var SlashCommandMetadata */
  public $slashCommand;
  /** @var int */
  public $startIndex;
  /** @var string */
  public $type;
  /** @var UserMentionMetadata */
  public $userMention;
  protected $slashCommandType = SlashCommandMetadata::class;
  protected $slashCommandDataType = '';
  protected $userMentionType = UserMentionMetadata::class;
  protected $userMentionDataType = '';
  /** @param int */
  public function setLength($length)
  {
    $this->length = $length;
  }
  /** @return int */
  public function getLength()
  {
    return $this->length;
  }
  /** @param SlashCommandMetadata */
  public function setSlashCommand(SlashCommandMetadata $slashCommand)
  {
    $this->slashCommand = $slashCommand;
  }
  /** @return SlashCommandMetadata */
  public function getSlashCommand()
  {
    return $this->slashCommand;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
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
  /** @param UserMentionMetadata */
  public function setUserMention(UserMentionMetadata $userMention)
  {
    $this->userMention = $userMention;
  }
  /** @return UserMentionMetadata */
  public function getUserMention()
  {
    return $this->userMention;
  }
}

class Attachment extends \Google\Model
{
  /** @var AttachmentDataRef */
  public $attachmentDataRef;
  /** @var string */
  public $contentName;
  /** @var string */
  public $contentType;
  /** @var string */
  public $downloadUri;
  /** @var DriveDataRef */
  public $driveDataRef;
  /** @var string */
  public $name;
  /** @var string */
  public $source;
  /** @var string */
  public $thumbnailUri;
  protected $attachmentDataRefType = AttachmentDataRef::class;
  protected $attachmentDataRefDataType = '';
  protected $driveDataRefType = DriveDataRef::class;
  protected $driveDataRefDataType = '';
  /** @param AttachmentDataRef */
  public function setAttachmentDataRef(AttachmentDataRef $attachmentDataRef)
  {
    $this->attachmentDataRef = $attachmentDataRef;
  }
  /** @return AttachmentDataRef */
  public function getAttachmentDataRef()
  {
    return $this->attachmentDataRef;
  }
  /** @param string */
  public function setContentName($contentName)
  {
    $this->contentName = $contentName;
  }
  /** @return string */
  public function getContentName()
  {
    return $this->contentName;
  }
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
  /** @param string */
  public function setDownloadUri($downloadUri)
  {
    $this->downloadUri = $downloadUri;
  }
  /** @return string */
  public function getDownloadUri()
  {
    return $this->downloadUri;
  }
  /** @param DriveDataRef */
  public function setDriveDataRef(DriveDataRef $driveDataRef)
  {
    $this->driveDataRef = $driveDataRef;
  }
  /** @return DriveDataRef */
  public function getDriveDataRef()
  {
    return $this->driveDataRef;
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
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setThumbnailUri($thumbnailUri)
  {
    $this->thumbnailUri = $thumbnailUri;
  }
  /** @return string */
  public function getThumbnailUri()
  {
    return $this->thumbnailUri;
  }
}

class AttachmentDataRef extends \Google\Model
{
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class Button extends \Google\Model
{
  /** @var ImageButton */
  public $imageButton;
  /** @var TextButton */
  public $textButton;
  protected $imageButtonType = ImageButton::class;
  protected $imageButtonDataType = '';
  protected $textButtonType = TextButton::class;
  protected $textButtonDataType = '';
  /** @param ImageButton */
  public function setImageButton(ImageButton $imageButton)
  {
    $this->imageButton = $imageButton;
  }
  /** @return ImageButton */
  public function getImageButton()
  {
    return $this->imageButton;
  }
  /** @param TextButton */
  public function setTextButton(TextButton $textButton)
  {
    $this->textButton = $textButton;
  }
  /** @return TextButton */
  public function getTextButton()
  {
    return $this->textButton;
  }
}

class Card extends \Google\Collection
{
  /** @var CardAction[] */
  public $cardActions;
  /** @var CardHeader */
  public $header;
  /** @var string */
  public $name;
  /** @var Section[] */
  public $sections;
  protected $collection_key = 'sections';
  protected $cardActionsType = CardAction::class;
  protected $cardActionsDataType = 'array';
  protected $headerType = CardHeader::class;
  protected $headerDataType = '';
  protected $sectionsType = Section::class;
  protected $sectionsDataType = 'array';
  /** @param CardAction[] */
  public function setCardActions($cardActions)
  {
    $this->cardActions = $cardActions;
  }
  /** @return CardAction[] */
  public function getCardActions()
  {
    return $this->cardActions;
  }
  /** @param CardHeader */
  public function setHeader(CardHeader $header)
  {
    $this->header = $header;
  }
  /** @return CardHeader */
  public function getHeader()
  {
    return $this->header;
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
  /** @param Section[] */
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  /** @return Section[] */
  public function getSections()
  {
    return $this->sections;
  }
}

class CardAction extends \Google\Model
{
  /** @var string */
  public $actionLabel;
  /** @var OnClick */
  public $onClick;
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  /** @param string */
  public function setActionLabel($actionLabel)
  {
    $this->actionLabel = $actionLabel;
  }
  /** @return string */
  public function getActionLabel()
  {
    return $this->actionLabel;
  }
  /** @param OnClick */
  public function setOnClick(OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class CardHeader extends \Google\Model
{
  /** @var string */
  public $imageStyle;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;

  /** @param string */
  public function setImageStyle($imageStyle)
  {
    $this->imageStyle = $imageStyle;
  }
  /** @return string */
  public function getImageStyle()
  {
    return $this->imageStyle;
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
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class CardWithId extends \Google\Model
{
  /** @var GoogleAppsCardV1Card */
  public $card;
  /** @var string */
  public $cardId;
  protected $cardType = GoogleAppsCardV1Card::class;
  protected $cardDataType = '';
  /** @param GoogleAppsCardV1Card */
  public function setCard(GoogleAppsCardV1Card $card)
  {
    $this->card = $card;
  }
  /** @return GoogleAppsCardV1Card */
  public function getCard()
  {
    return $this->card;
  }
  /** @param string */
  public function setCardId($cardId)
  {
    $this->cardId = $cardId;
  }
  /** @return string */
  public function getCardId()
  {
    return $this->cardId;
  }
}

class ChatAppLogEntry extends \Google\Model
{
  /** @var string */
  public $deployment;
  /** @var string */
  public $deploymentFunction;
  /** @var Status */
  public $error;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param string */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return string */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param string */
  public function setDeploymentFunction($deploymentFunction)
  {
    $this->deploymentFunction = $deploymentFunction;
  }
  /** @return string */
  public function getDeploymentFunction()
  {
    return $this->deploymentFunction;
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
}

class ChatEmpty extends \Google\Model
{
}

class Color extends \Google\Model
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

class CommonEventObject extends \Google\Model
{
  /** @var Inputs[] */
  public $formInputs;
  /** @var string */
  public $hostApp;
  /** @var string */
  public $invokedFunction;
  /** @var string[] */
  public $parameters;
  /** @var string */
  public $platform;
  /** @var TimeZone */
  public $timeZone;
  /** @var string */
  public $userLocale;
  protected $formInputsType = Inputs::class;
  protected $formInputsDataType = 'map';
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';
  /** @param Inputs[] */
  public function setFormInputs($formInputs)
  {
    $this->formInputs = $formInputs;
  }
  /** @return Inputs[] */
  public function getFormInputs()
  {
    return $this->formInputs;
  }
  /** @param string */
  public function setHostApp($hostApp)
  {
    $this->hostApp = $hostApp;
  }
  /** @return string */
  public function getHostApp()
  {
    return $this->hostApp;
  }
  /** @param string */
  public function setInvokedFunction($invokedFunction)
  {
    $this->invokedFunction = $invokedFunction;
  }
  /** @return string */
  public function getInvokedFunction()
  {
    return $this->invokedFunction;
  }
  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
  }
  /** @param TimeZone */
  public function setTimeZone(TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return TimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string */
  public function setUserLocale($userLocale)
  {
    $this->userLocale = $userLocale;
  }
  /** @return string */
  public function getUserLocale()
  {
    return $this->userLocale;
  }
}

class DateInput extends \Google\Model
{
  /** @var string */
  public $msSinceEpoch;

  /** @param string */
  public function setMsSinceEpoch($msSinceEpoch)
  {
    $this->msSinceEpoch = $msSinceEpoch;
  }
  /** @return string */
  public function getMsSinceEpoch()
  {
    return $this->msSinceEpoch;
  }
}

class DateTimeInput extends \Google\Model
{
  /** @var bool */
  public $hasDate;
  /** @var bool */
  public $hasTime;
  /** @var string */
  public $msSinceEpoch;

  /** @param bool */
  public function setHasDate($hasDate)
  {
    $this->hasDate = $hasDate;
  }
  /** @return bool */
  public function getHasDate()
  {
    return $this->hasDate;
  }
  /** @param bool */
  public function setHasTime($hasTime)
  {
    $this->hasTime = $hasTime;
  }
  /** @return bool */
  public function getHasTime()
  {
    return $this->hasTime;
  }
  /** @param string */
  public function setMsSinceEpoch($msSinceEpoch)
  {
    $this->msSinceEpoch = $msSinceEpoch;
  }
  /** @return string */
  public function getMsSinceEpoch()
  {
    return $this->msSinceEpoch;
  }
}

class DeprecatedEvent extends \Google\Model
{
  /** @var FormAction */
  public $action;
  /** @var CommonEventObject */
  public $common;
  /** @var string */
  public $configCompleteRedirectUrl;
  /** @var string */
  public $dialogEventType;
  /** @var string */
  public $eventTime;
  /** @var bool */
  public $isDialogEvent;
  /** @var Message */
  public $message;
  /** @var Space */
  public $space;
  /** @var string */
  public $threadKey;
  /** @var string */
  public $token;
  /** @var string */
  public $type;
  /** @var User */
  public $user;
  protected $actionType = FormAction::class;
  protected $actionDataType = '';
  protected $commonType = CommonEventObject::class;
  protected $commonDataType = '';
  protected $messageType = Message::class;
  protected $messageDataType = '';
  protected $spaceType = Space::class;
  protected $spaceDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param FormAction */
  public function setAction(FormAction $action)
  {
    $this->action = $action;
  }
  /** @return FormAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param CommonEventObject */
  public function setCommon(CommonEventObject $common)
  {
    $this->common = $common;
  }
  /** @return CommonEventObject */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param string */
  public function setConfigCompleteRedirectUrl($configCompleteRedirectUrl)
  {
    $this->configCompleteRedirectUrl = $configCompleteRedirectUrl;
  }
  /** @return string */
  public function getConfigCompleteRedirectUrl()
  {
    return $this->configCompleteRedirectUrl;
  }
  /** @param string */
  public function setDialogEventType($dialogEventType)
  {
    $this->dialogEventType = $dialogEventType;
  }
  /** @return string */
  public function getDialogEventType()
  {
    return $this->dialogEventType;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param bool */
  public function setIsDialogEvent($isDialogEvent)
  {
    $this->isDialogEvent = $isDialogEvent;
  }
  /** @return bool */
  public function getIsDialogEvent()
  {
    return $this->isDialogEvent;
  }
  /** @param Message */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /** @return Message */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param Space */
  public function setSpace(Space $space)
  {
    $this->space = $space;
  }
  /** @return Space */
  public function getSpace()
  {
    return $this->space;
  }
  /** @param string */
  public function setThreadKey($threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return string */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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
  /** @param User */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /** @return User */
  public function getUser()
  {
    return $this->user;
  }
}

class Dialog extends \Google\Model
{
  /** @var GoogleAppsCardV1Card */
  public $body;
  protected $bodyType = GoogleAppsCardV1Card::class;
  protected $bodyDataType = '';
  /** @param GoogleAppsCardV1Card */
  public function setBody(GoogleAppsCardV1Card $body)
  {
    $this->body = $body;
  }
  /** @return GoogleAppsCardV1Card */
  public function getBody()
  {
    return $this->body;
  }
}

class DialogAction extends \Google\Model
{
  /** @var ActionStatus */
  public $actionStatus;
  /** @var Dialog */
  public $dialog;
  protected $actionStatusType = ActionStatus::class;
  protected $actionStatusDataType = '';
  protected $dialogType = Dialog::class;
  protected $dialogDataType = '';
  /** @param ActionStatus */
  public function setActionStatus(ActionStatus $actionStatus)
  {
    $this->actionStatus = $actionStatus;
  }
  /** @return ActionStatus */
  public function getActionStatus()
  {
    return $this->actionStatus;
  }
  /** @param Dialog */
  public function setDialog(Dialog $dialog)
  {
    $this->dialog = $dialog;
  }
  /** @return Dialog */
  public function getDialog()
  {
    return $this->dialog;
  }
}

class DriveDataRef extends \Google\Model
{
  /** @var string */
  public $driveFileId;

  /** @param string */
  public function setDriveFileId($driveFileId)
  {
    $this->driveFileId = $driveFileId;
  }
  /** @return string */
  public function getDriveFileId()
  {
    return $this->driveFileId;
  }
}

class FormAction extends \Google\Collection
{
  /** @var string */
  public $actionMethodName;
  /** @var ActionParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = ActionParameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setActionMethodName($actionMethodName)
  {
    $this->actionMethodName = $actionMethodName;
  }
  /** @return string */
  public function getActionMethodName()
  {
    return $this->actionMethodName;
  }
  /** @param ActionParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return ActionParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleAppsCardV1Action extends \Google\Collection
{
  /** @var string */
  public $function;
  /** @var string */
  public $interaction;
  /** @var string */
  public $loadIndicator;
  /** @var GoogleAppsCardV1ActionParameter[] */
  public $parameters;
  /** @var bool */
  public $persistValues;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleAppsCardV1ActionParameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
  /** @param string */
  public function setInteraction($interaction)
  {
    $this->interaction = $interaction;
  }
  /** @return string */
  public function getInteraction()
  {
    return $this->interaction;
  }
  /** @param string */
  public function setLoadIndicator($loadIndicator)
  {
    $this->loadIndicator = $loadIndicator;
  }
  /** @return string */
  public function getLoadIndicator()
  {
    return $this->loadIndicator;
  }
  /** @param GoogleAppsCardV1ActionParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleAppsCardV1ActionParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param bool */
  public function setPersistValues($persistValues)
  {
    $this->persistValues = $persistValues;
  }
  /** @return bool */
  public function getPersistValues()
  {
    return $this->persistValues;
  }
}

class GoogleAppsCardV1ActionParameter extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class GoogleAppsCardV1BorderStyle extends \Google\Model
{
  /** @var int */
  public $cornerRadius;
  /** @var Color */
  public $strokeColor;
  /** @var string */
  public $type;
  protected $strokeColorType = Color::class;
  protected $strokeColorDataType = '';
  /** @param int */
  public function setCornerRadius($cornerRadius)
  {
    $this->cornerRadius = $cornerRadius;
  }
  /** @return int */
  public function getCornerRadius()
  {
    return $this->cornerRadius;
  }
  /** @param Color */
  public function setStrokeColor(Color $strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }
  /** @return Color */
  public function getStrokeColor()
  {
    return $this->strokeColor;
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

class GoogleAppsCardV1Button extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var Color */
  public $color;
  /** @var bool */
  public $disabled;
  /** @var GoogleAppsCardV1Icon */
  public $icon;
  /** @var GoogleAppsCardV1OnClick */
  public $onClick;
  /** @var string */
  public $text;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $iconType = GoogleAppsCardV1Icon::class;
  protected $iconDataType = '';
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
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
  /** @param GoogleAppsCardV1Icon */
  public function setIcon(GoogleAppsCardV1Icon $icon)
  {
    $this->icon = $icon;
  }
  /** @return GoogleAppsCardV1Icon */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param GoogleAppsCardV1OnClick */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleAppsCardV1OnClick */
  public function getOnClick()
  {
    return $this->onClick;
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

class GoogleAppsCardV1ButtonList extends \Google\Collection
{
  /** @var GoogleAppsCardV1Button[] */
  public $buttons;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleAppsCardV1Button::class;
  protected $buttonsDataType = 'array';
  /** @param GoogleAppsCardV1Button[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleAppsCardV1Button[] */
  public function getButtons()
  {
    return $this->buttons;
  }
}

class GoogleAppsCardV1Card extends \Google\Collection
{
  /** @var GoogleAppsCardV1CardAction[] */
  public $cardActions;
  /** @var string */
  public $displayStyle;
  /** @var GoogleAppsCardV1CardFixedFooter */
  public $fixedFooter;
  /** @var GoogleAppsCardV1CardHeader */
  public $header;
  /** @var string */
  public $name;
  /** @var GoogleAppsCardV1CardHeader */
  public $peekCardHeader;
  /** @var GoogleAppsCardV1Section[] */
  public $sections;
  protected $collection_key = 'sections';
  protected $cardActionsType = GoogleAppsCardV1CardAction::class;
  protected $cardActionsDataType = 'array';
  protected $fixedFooterType = GoogleAppsCardV1CardFixedFooter::class;
  protected $fixedFooterDataType = '';
  protected $headerType = GoogleAppsCardV1CardHeader::class;
  protected $headerDataType = '';
  protected $peekCardHeaderType = GoogleAppsCardV1CardHeader::class;
  protected $peekCardHeaderDataType = '';
  protected $sectionsType = GoogleAppsCardV1Section::class;
  protected $sectionsDataType = 'array';
  /** @param GoogleAppsCardV1CardAction[] */
  public function setCardActions($cardActions)
  {
    $this->cardActions = $cardActions;
  }
  /** @return GoogleAppsCardV1CardAction[] */
  public function getCardActions()
  {
    return $this->cardActions;
  }
  /** @param string */
  public function setDisplayStyle($displayStyle)
  {
    $this->displayStyle = $displayStyle;
  }
  /** @return string */
  public function getDisplayStyle()
  {
    return $this->displayStyle;
  }
  /** @param GoogleAppsCardV1CardFixedFooter */
  public function setFixedFooter(GoogleAppsCardV1CardFixedFooter $fixedFooter)
  {
    $this->fixedFooter = $fixedFooter;
  }
  /** @return GoogleAppsCardV1CardFixedFooter */
  public function getFixedFooter()
  {
    return $this->fixedFooter;
  }
  /** @param GoogleAppsCardV1CardHeader */
  public function setHeader(GoogleAppsCardV1CardHeader $header)
  {
    $this->header = $header;
  }
  /** @return GoogleAppsCardV1CardHeader */
  public function getHeader()
  {
    return $this->header;
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
  /** @param GoogleAppsCardV1CardHeader */
  public function setPeekCardHeader(GoogleAppsCardV1CardHeader $peekCardHeader)
  {
    $this->peekCardHeader = $peekCardHeader;
  }
  /** @return GoogleAppsCardV1CardHeader */
  public function getPeekCardHeader()
  {
    return $this->peekCardHeader;
  }
  /** @param GoogleAppsCardV1Section[] */
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  /** @return GoogleAppsCardV1Section[] */
  public function getSections()
  {
    return $this->sections;
  }
}

class GoogleAppsCardV1CardAction extends \Google\Model
{
  /** @var string */
  public $actionLabel;
  /** @var GoogleAppsCardV1OnClick */
  public $onClick;
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
  /** @param string */
  public function setActionLabel($actionLabel)
  {
    $this->actionLabel = $actionLabel;
  }
  /** @return string */
  public function getActionLabel()
  {
    return $this->actionLabel;
  }
  /** @param GoogleAppsCardV1OnClick */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleAppsCardV1OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class GoogleAppsCardV1CardFixedFooter extends \Google\Model
{
  /** @var GoogleAppsCardV1Button */
  public $primaryButton;
  /** @var GoogleAppsCardV1Button */
  public $secondaryButton;
  protected $primaryButtonType = GoogleAppsCardV1Button::class;
  protected $primaryButtonDataType = '';
  protected $secondaryButtonType = GoogleAppsCardV1Button::class;
  protected $secondaryButtonDataType = '';
  /** @param GoogleAppsCardV1Button */
  public function setPrimaryButton(GoogleAppsCardV1Button $primaryButton)
  {
    $this->primaryButton = $primaryButton;
  }
  /** @return GoogleAppsCardV1Button */
  public function getPrimaryButton()
  {
    return $this->primaryButton;
  }
  /** @param GoogleAppsCardV1Button */
  public function setSecondaryButton(GoogleAppsCardV1Button $secondaryButton)
  {
    $this->secondaryButton = $secondaryButton;
  }
  /** @return GoogleAppsCardV1Button */
  public function getSecondaryButton()
  {
    return $this->secondaryButton;
  }
}

class GoogleAppsCardV1CardHeader extends \Google\Model
{
  /** @var string */
  public $imageAltText;
  /** @var string */
  public $imageType;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;

  /** @param string */
  public function setImageAltText($imageAltText)
  {
    $this->imageAltText = $imageAltText;
  }
  /** @return string */
  public function getImageAltText()
  {
    return $this->imageAltText;
  }
  /** @param string */
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
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
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleAppsCardV1DateTimePicker extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var GoogleAppsCardV1Action */
  public $onChangeAction;
  /** @var int */
  public $timezoneOffsetDate;
  /** @var string */
  public $type;
  /** @var string */
  public $valueMsEpoch;
  protected $onChangeActionType = GoogleAppsCardV1Action::class;
  protected $onChangeActionDataType = '';
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  /** @param GoogleAppsCardV1Action */
  public function setOnChangeAction(GoogleAppsCardV1Action $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getOnChangeAction()
  {
    return $this->onChangeAction;
  }
  /** @param int */
  public function setTimezoneOffsetDate($timezoneOffsetDate)
  {
    $this->timezoneOffsetDate = $timezoneOffsetDate;
  }
  /** @return int */
  public function getTimezoneOffsetDate()
  {
    return $this->timezoneOffsetDate;
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
  public function setValueMsEpoch($valueMsEpoch)
  {
    $this->valueMsEpoch = $valueMsEpoch;
  }
  /** @return string */
  public function getValueMsEpoch()
  {
    return $this->valueMsEpoch;
  }
}

class GoogleAppsCardV1DecoratedText extends \Google\Model
{
  /** @var string */
  public $bottomLabel;
  /** @var GoogleAppsCardV1Button */
  public $button;
  /** @var GoogleAppsCardV1Icon */
  public $endIcon;
  /** @var GoogleAppsCardV1Icon */
  public $icon;
  /** @var GoogleAppsCardV1OnClick */
  public $onClick;
  /** @var GoogleAppsCardV1Icon */
  public $startIcon;
  /** @var GoogleAppsCardV1SwitchControl */
  public $switchControl;
  /** @var string */
  public $text;
  /** @var string */
  public $topLabel;
  /** @var bool */
  public $wrapText;
  protected $buttonType = GoogleAppsCardV1Button::class;
  protected $buttonDataType = '';
  protected $endIconType = GoogleAppsCardV1Icon::class;
  protected $endIconDataType = '';
  protected $iconType = GoogleAppsCardV1Icon::class;
  protected $iconDataType = '';
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
  protected $startIconType = GoogleAppsCardV1Icon::class;
  protected $startIconDataType = '';
  protected $switchControlType = GoogleAppsCardV1SwitchControl::class;
  protected $switchControlDataType = '';
  /** @param string */
  public function setBottomLabel($bottomLabel)
  {
    $this->bottomLabel = $bottomLabel;
  }
  /** @return string */
  public function getBottomLabel()
  {
    return $this->bottomLabel;
  }
  /** @param GoogleAppsCardV1Button */
  public function setButton(GoogleAppsCardV1Button $button)
  {
    $this->button = $button;
  }
  /** @return GoogleAppsCardV1Button */
  public function getButton()
  {
    return $this->button;
  }
  /** @param GoogleAppsCardV1Icon */
  public function setEndIcon(GoogleAppsCardV1Icon $endIcon)
  {
    $this->endIcon = $endIcon;
  }
  /** @return GoogleAppsCardV1Icon */
  public function getEndIcon()
  {
    return $this->endIcon;
  }
  /** @param GoogleAppsCardV1Icon */
  public function setIcon(GoogleAppsCardV1Icon $icon)
  {
    $this->icon = $icon;
  }
  /** @return GoogleAppsCardV1Icon */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param GoogleAppsCardV1OnClick */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleAppsCardV1OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
  /** @param GoogleAppsCardV1Icon */
  public function setStartIcon(GoogleAppsCardV1Icon $startIcon)
  {
    $this->startIcon = $startIcon;
  }
  /** @return GoogleAppsCardV1Icon */
  public function getStartIcon()
  {
    return $this->startIcon;
  }
  /** @param GoogleAppsCardV1SwitchControl */
  public function setSwitchControl(GoogleAppsCardV1SwitchControl $switchControl)
  {
    $this->switchControl = $switchControl;
  }
  /** @return GoogleAppsCardV1SwitchControl */
  public function getSwitchControl()
  {
    return $this->switchControl;
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
  public function setTopLabel($topLabel)
  {
    $this->topLabel = $topLabel;
  }
  /** @return string */
  public function getTopLabel()
  {
    return $this->topLabel;
  }
  /** @param bool */
  public function setWrapText($wrapText)
  {
    $this->wrapText = $wrapText;
  }
  /** @return bool */
  public function getWrapText()
  {
    return $this->wrapText;
  }
}

class GoogleAppsCardV1Divider extends \Google\Model
{
}

class GoogleAppsCardV1Grid extends \Google\Collection
{
  /** @var GoogleAppsCardV1BorderStyle */
  public $borderStyle;
  /** @var int */
  public $columnCount;
  /** @var GoogleAppsCardV1GridItem[] */
  public $items;
  /** @var GoogleAppsCardV1OnClick */
  public $onClick;
  /** @var string */
  public $title;
  protected $collection_key = 'items';
  protected $borderStyleType = GoogleAppsCardV1BorderStyle::class;
  protected $borderStyleDataType = '';
  protected $itemsType = GoogleAppsCardV1GridItem::class;
  protected $itemsDataType = 'array';
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
  /** @param GoogleAppsCardV1BorderStyle */
  public function setBorderStyle(GoogleAppsCardV1BorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return GoogleAppsCardV1BorderStyle */
  public function getBorderStyle()
  {
    return $this->borderStyle;
  }
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
  /** @param GoogleAppsCardV1GridItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleAppsCardV1GridItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param GoogleAppsCardV1OnClick */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleAppsCardV1OnClick */
  public function getOnClick()
  {
    return $this->onClick;
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

class GoogleAppsCardV1GridItem extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var GoogleAppsCardV1ImageComponent */
  public $image;
  /** @var string */
  public $layout;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $imageType = GoogleAppsCardV1ImageComponent::class;
  protected $imageDataType = '';
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
  /** @param GoogleAppsCardV1ImageComponent */
  public function setImage(GoogleAppsCardV1ImageComponent $image)
  {
    $this->image = $image;
  }
  /** @return GoogleAppsCardV1ImageComponent */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setLayout($layout)
  {
    $this->layout = $layout;
  }
  /** @return string */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleAppsCardV1Icon extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $imageType;
  /** @var string */
  public $knownIcon;

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
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
  }
  /** @param string */
  public function setKnownIcon($knownIcon)
  {
    $this->knownIcon = $knownIcon;
  }
  /** @return string */
  public function getKnownIcon()
  {
    return $this->knownIcon;
  }
}

class GoogleAppsCardV1Image extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $imageUrl;
  /** @var GoogleAppsCardV1OnClick */
  public $onClick;
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
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
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /** @return string */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /** @param GoogleAppsCardV1OnClick */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleAppsCardV1OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class GoogleAppsCardV1ImageComponent extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var GoogleAppsCardV1BorderStyle */
  public $borderStyle;
  /** @var GoogleAppsCardV1ImageCropStyle */
  public $cropStyle;
  /** @var string */
  public $imageUri;
  protected $borderStyleType = GoogleAppsCardV1BorderStyle::class;
  protected $borderStyleDataType = '';
  protected $cropStyleType = GoogleAppsCardV1ImageCropStyle::class;
  protected $cropStyleDataType = '';
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
  /** @param GoogleAppsCardV1BorderStyle */
  public function setBorderStyle(GoogleAppsCardV1BorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return GoogleAppsCardV1BorderStyle */
  public function getBorderStyle()
  {
    return $this->borderStyle;
  }
  /** @param GoogleAppsCardV1ImageCropStyle */
  public function setCropStyle(GoogleAppsCardV1ImageCropStyle $cropStyle)
  {
    $this->cropStyle = $cropStyle;
  }
  /** @return GoogleAppsCardV1ImageCropStyle */
  public function getCropStyle()
  {
    return $this->cropStyle;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class GoogleAppsCardV1ImageCropStyle extends \Google\Model
{
  public $aspectRatio;
  /** @var string */
  public $type;

  public function setAspectRatio($aspectRatio)
  {
    $this->aspectRatio = $aspectRatio;
  }
  public function getAspectRatio()
  {
    return $this->aspectRatio;
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

class GoogleAppsCardV1OnClick extends \Google\Model
{
  /** @var GoogleAppsCardV1Action */
  public $action;
  /** @var GoogleAppsCardV1Card */
  public $card;
  /** @var GoogleAppsCardV1Action */
  public $openDynamicLinkAction;
  /** @var GoogleAppsCardV1OpenLink */
  public $openLink;
  protected $actionType = GoogleAppsCardV1Action::class;
  protected $actionDataType = '';
  protected $cardType = GoogleAppsCardV1Card::class;
  protected $cardDataType = '';
  protected $openDynamicLinkActionType = GoogleAppsCardV1Action::class;
  protected $openDynamicLinkActionDataType = '';
  protected $openLinkType = GoogleAppsCardV1OpenLink::class;
  protected $openLinkDataType = '';
  /** @param GoogleAppsCardV1Action */
  public function setAction(GoogleAppsCardV1Action $action)
  {
    $this->action = $action;
  }
  /** @return GoogleAppsCardV1Action */
  public function getAction()
  {
    return $this->action;
  }
  /** @param GoogleAppsCardV1Card */
  public function setCard(GoogleAppsCardV1Card $card)
  {
    $this->card = $card;
  }
  /** @return GoogleAppsCardV1Card */
  public function getCard()
  {
    return $this->card;
  }
  /** @param GoogleAppsCardV1Action */
  public function setOpenDynamicLinkAction(GoogleAppsCardV1Action $openDynamicLinkAction)
  {
    $this->openDynamicLinkAction = $openDynamicLinkAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getOpenDynamicLinkAction()
  {
    return $this->openDynamicLinkAction;
  }
  /** @param GoogleAppsCardV1OpenLink */
  public function setOpenLink(GoogleAppsCardV1OpenLink $openLink)
  {
    $this->openLink = $openLink;
  }
  /** @return GoogleAppsCardV1OpenLink */
  public function getOpenLink()
  {
    return $this->openLink;
  }
}

class GoogleAppsCardV1OpenLink extends \Google\Model
{
  /** @var string */
  public $onClose;
  /** @var string */
  public $openAs;
  /** @var string */
  public $url;

  /** @param string */
  public function setOnClose($onClose)
  {
    $this->onClose = $onClose;
  }
  /** @return string */
  public function getOnClose()
  {
    return $this->onClose;
  }
  /** @param string */
  public function setOpenAs($openAs)
  {
    $this->openAs = $openAs;
  }
  /** @return string */
  public function getOpenAs()
  {
    return $this->openAs;
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
}

class GoogleAppsCardV1Section extends \Google\Collection
{
  /** @var bool */
  public $collapsible;
  /** @var string */
  public $header;
  /** @var int */
  public $uncollapsibleWidgetsCount;
  /** @var GoogleAppsCardV1Widget[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = GoogleAppsCardV1Widget::class;
  protected $widgetsDataType = 'array';
  /** @param bool */
  public function setCollapsible($collapsible)
  {
    $this->collapsible = $collapsible;
  }
  /** @return bool */
  public function getCollapsible()
  {
    return $this->collapsible;
  }
  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param int */
  public function setUncollapsibleWidgetsCount($uncollapsibleWidgetsCount)
  {
    $this->uncollapsibleWidgetsCount = $uncollapsibleWidgetsCount;
  }
  /** @return int */
  public function getUncollapsibleWidgetsCount()
  {
    return $this->uncollapsibleWidgetsCount;
  }
  /** @param GoogleAppsCardV1Widget[] */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /** @return GoogleAppsCardV1Widget[] */
  public function getWidgets()
  {
    return $this->widgets;
  }
}

class GoogleAppsCardV1SelectionInput extends \Google\Collection
{
  /** @var GoogleAppsCardV1SelectionItem[] */
  public $items;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var GoogleAppsCardV1Action */
  public $onChangeAction;
  /** @var string */
  public $type;
  protected $collection_key = 'items';
  protected $itemsType = GoogleAppsCardV1SelectionItem::class;
  protected $itemsDataType = 'array';
  protected $onChangeActionType = GoogleAppsCardV1Action::class;
  protected $onChangeActionDataType = '';
  /** @param GoogleAppsCardV1SelectionItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleAppsCardV1SelectionItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  /** @param GoogleAppsCardV1Action */
  public function setOnChangeAction(GoogleAppsCardV1Action $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getOnChangeAction()
  {
    return $this->onChangeAction;
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

class GoogleAppsCardV1SelectionItem extends \Google\Model
{
  /** @var bool */
  public $selected;
  /** @var string */
  public $text;
  /** @var string */
  public $value;

  /** @param bool */
  public function setSelected($selected)
  {
    $this->selected = $selected;
  }
  /** @return bool */
  public function getSelected()
  {
    return $this->selected;
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

class GoogleAppsCardV1SuggestionItem extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleAppsCardV1Suggestions extends \Google\Collection
{
  /** @var GoogleAppsCardV1SuggestionItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GoogleAppsCardV1SuggestionItem::class;
  protected $itemsDataType = 'array';
  /** @param GoogleAppsCardV1SuggestionItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleAppsCardV1SuggestionItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class GoogleAppsCardV1SwitchControl extends \Google\Model
{
  /** @var string */
  public $controlType;
  /** @var string */
  public $name;
  /** @var GoogleAppsCardV1Action */
  public $onChangeAction;
  /** @var bool */
  public $selected;
  /** @var string */
  public $value;
  protected $onChangeActionType = GoogleAppsCardV1Action::class;
  protected $onChangeActionDataType = '';
  /** @param string */
  public function setControlType($controlType)
  {
    $this->controlType = $controlType;
  }
  /** @return string */
  public function getControlType()
  {
    return $this->controlType;
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
  /** @param GoogleAppsCardV1Action */
  public function setOnChangeAction(GoogleAppsCardV1Action $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getOnChangeAction()
  {
    return $this->onChangeAction;
  }
  /** @param bool */
  public function setSelected($selected)
  {
    $this->selected = $selected;
  }
  /** @return bool */
  public function getSelected()
  {
    return $this->selected;
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

class GoogleAppsCardV1TextInput extends \Google\Model
{
  /** @var GoogleAppsCardV1Action */
  public $autoCompleteAction;
  /** @var string */
  public $hintText;
  /** @var GoogleAppsCardV1Suggestions */
  public $initialSuggestions;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var GoogleAppsCardV1Action */
  public $onChangeAction;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $autoCompleteActionType = GoogleAppsCardV1Action::class;
  protected $autoCompleteActionDataType = '';
  protected $initialSuggestionsType = GoogleAppsCardV1Suggestions::class;
  protected $initialSuggestionsDataType = '';
  protected $onChangeActionType = GoogleAppsCardV1Action::class;
  protected $onChangeActionDataType = '';
  /** @param GoogleAppsCardV1Action */
  public function setAutoCompleteAction(GoogleAppsCardV1Action $autoCompleteAction)
  {
    $this->autoCompleteAction = $autoCompleteAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getAutoCompleteAction()
  {
    return $this->autoCompleteAction;
  }
  /** @param string */
  public function setHintText($hintText)
  {
    $this->hintText = $hintText;
  }
  /** @return string */
  public function getHintText()
  {
    return $this->hintText;
  }
  /** @param GoogleAppsCardV1Suggestions */
  public function setInitialSuggestions(GoogleAppsCardV1Suggestions $initialSuggestions)
  {
    $this->initialSuggestions = $initialSuggestions;
  }
  /** @return GoogleAppsCardV1Suggestions */
  public function getInitialSuggestions()
  {
    return $this->initialSuggestions;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  /** @param GoogleAppsCardV1Action */
  public function setOnChangeAction(GoogleAppsCardV1Action $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return GoogleAppsCardV1Action */
  public function getOnChangeAction()
  {
    return $this->onChangeAction;
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

class GoogleAppsCardV1TextParagraph extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleAppsCardV1Widget extends \Google\Model
{
  /** @var GoogleAppsCardV1ButtonList */
  public $buttonList;
  /** @var GoogleAppsCardV1DateTimePicker */
  public $dateTimePicker;
  /** @var GoogleAppsCardV1DecoratedText */
  public $decoratedText;
  /** @var GoogleAppsCardV1Divider */
  public $divider;
  /** @var GoogleAppsCardV1Grid */
  public $grid;
  /** @var GoogleAppsCardV1Image */
  public $image;
  /** @var GoogleAppsCardV1SelectionInput */
  public $selectionInput;
  /** @var GoogleAppsCardV1TextInput */
  public $textInput;
  /** @var GoogleAppsCardV1TextParagraph */
  public $textParagraph;
  protected $buttonListType = GoogleAppsCardV1ButtonList::class;
  protected $buttonListDataType = '';
  protected $dateTimePickerType = GoogleAppsCardV1DateTimePicker::class;
  protected $dateTimePickerDataType = '';
  protected $decoratedTextType = GoogleAppsCardV1DecoratedText::class;
  protected $decoratedTextDataType = '';
  protected $dividerType = GoogleAppsCardV1Divider::class;
  protected $dividerDataType = '';
  protected $gridType = GoogleAppsCardV1Grid::class;
  protected $gridDataType = '';
  protected $imageType = GoogleAppsCardV1Image::class;
  protected $imageDataType = '';
  protected $selectionInputType = GoogleAppsCardV1SelectionInput::class;
  protected $selectionInputDataType = '';
  protected $textInputType = GoogleAppsCardV1TextInput::class;
  protected $textInputDataType = '';
  protected $textParagraphType = GoogleAppsCardV1TextParagraph::class;
  protected $textParagraphDataType = '';
  /** @param GoogleAppsCardV1ButtonList */
  public function setButtonList(GoogleAppsCardV1ButtonList $buttonList)
  {
    $this->buttonList = $buttonList;
  }
  /** @return GoogleAppsCardV1ButtonList */
  public function getButtonList()
  {
    return $this->buttonList;
  }
  /** @param GoogleAppsCardV1DateTimePicker */
  public function setDateTimePicker(GoogleAppsCardV1DateTimePicker $dateTimePicker)
  {
    $this->dateTimePicker = $dateTimePicker;
  }
  /** @return GoogleAppsCardV1DateTimePicker */
  public function getDateTimePicker()
  {
    return $this->dateTimePicker;
  }
  /** @param GoogleAppsCardV1DecoratedText */
  public function setDecoratedText(GoogleAppsCardV1DecoratedText $decoratedText)
  {
    $this->decoratedText = $decoratedText;
  }
  /** @return GoogleAppsCardV1DecoratedText */
  public function getDecoratedText()
  {
    return $this->decoratedText;
  }
  /** @param GoogleAppsCardV1Divider */
  public function setDivider(GoogleAppsCardV1Divider $divider)
  {
    $this->divider = $divider;
  }
  /** @return GoogleAppsCardV1Divider */
  public function getDivider()
  {
    return $this->divider;
  }
  /** @param GoogleAppsCardV1Grid */
  public function setGrid(GoogleAppsCardV1Grid $grid)
  {
    $this->grid = $grid;
  }
  /** @return GoogleAppsCardV1Grid */
  public function getGrid()
  {
    return $this->grid;
  }
  /** @param GoogleAppsCardV1Image */
  public function setImage(GoogleAppsCardV1Image $image)
  {
    $this->image = $image;
  }
  /** @return GoogleAppsCardV1Image */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleAppsCardV1SelectionInput */
  public function setSelectionInput(GoogleAppsCardV1SelectionInput $selectionInput)
  {
    $this->selectionInput = $selectionInput;
  }
  /** @return GoogleAppsCardV1SelectionInput */
  public function getSelectionInput()
  {
    return $this->selectionInput;
  }
  /** @param GoogleAppsCardV1TextInput */
  public function setTextInput(GoogleAppsCardV1TextInput $textInput)
  {
    $this->textInput = $textInput;
  }
  /** @return GoogleAppsCardV1TextInput */
  public function getTextInput()
  {
    return $this->textInput;
  }
  /** @param GoogleAppsCardV1TextParagraph */
  public function setTextParagraph(GoogleAppsCardV1TextParagraph $textParagraph)
  {
    $this->textParagraph = $textParagraph;
  }
  /** @return GoogleAppsCardV1TextParagraph */
  public function getTextParagraph()
  {
    return $this->textParagraph;
  }
}

class Image extends \Google\Model
{
  public $aspectRatio;
  /** @var string */
  public $imageUrl;
  /** @var OnClick */
  public $onClick;
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  public function setAspectRatio($aspectRatio)
  {
    $this->aspectRatio = $aspectRatio;
  }
  public function getAspectRatio()
  {
    return $this->aspectRatio;
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
  /** @param OnClick */
  public function setOnClick(OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class ImageButton extends \Google\Model
{
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $name;
  /** @var OnClick */
  public $onClick;
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  /** @param string */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /** @return string */
  public function getIcon()
  {
    return $this->icon;
  }
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param OnClick */
  public function setOnClick(OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class Inputs extends \Google\Model
{
  /** @var DateInput */
  public $dateInput;
  /** @var DateTimeInput */
  public $dateTimeInput;
  /** @var StringInputs */
  public $stringInputs;
  /** @var TimeInput */
  public $timeInput;
  protected $dateInputType = DateInput::class;
  protected $dateInputDataType = '';
  protected $dateTimeInputType = DateTimeInput::class;
  protected $dateTimeInputDataType = '';
  protected $stringInputsType = StringInputs::class;
  protected $stringInputsDataType = '';
  protected $timeInputType = TimeInput::class;
  protected $timeInputDataType = '';
  /** @param DateInput */
  public function setDateInput(DateInput $dateInput)
  {
    $this->dateInput = $dateInput;
  }
  /** @return DateInput */
  public function getDateInput()
  {
    return $this->dateInput;
  }
  /** @param DateTimeInput */
  public function setDateTimeInput(DateTimeInput $dateTimeInput)
  {
    $this->dateTimeInput = $dateTimeInput;
  }
  /** @return DateTimeInput */
  public function getDateTimeInput()
  {
    return $this->dateTimeInput;
  }
  /** @param StringInputs */
  public function setStringInputs(StringInputs $stringInputs)
  {
    $this->stringInputs = $stringInputs;
  }
  /** @return StringInputs */
  public function getStringInputs()
  {
    return $this->stringInputs;
  }
  /** @param TimeInput */
  public function setTimeInput(TimeInput $timeInput)
  {
    $this->timeInput = $timeInput;
  }
  /** @return TimeInput */
  public function getTimeInput()
  {
    return $this->timeInput;
  }
}

class KeyValue extends \Google\Model
{
  /** @var string */
  public $bottomLabel;
  /** @var Button */
  public $button;
  /** @var string */
  public $content;
  /** @var bool */
  public $contentMultiline;
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $topLabel;
  protected $buttonType = Button::class;
  protected $buttonDataType = '';
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  /** @param string */
  public function setBottomLabel($bottomLabel)
  {
    $this->bottomLabel = $bottomLabel;
  }
  /** @return string */
  public function getBottomLabel()
  {
    return $this->bottomLabel;
  }
  /** @param Button */
  public function setButton(Button $button)
  {
    $this->button = $button;
  }
  /** @return Button */
  public function getButton()
  {
    return $this->button;
  }
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param bool */
  public function setContentMultiline($contentMultiline)
  {
    $this->contentMultiline = $contentMultiline;
  }
  /** @return bool */
  public function getContentMultiline()
  {
    return $this->contentMultiline;
  }
  /** @param string */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /** @return string */
  public function getIcon()
  {
    return $this->icon;
  }
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
  /** @param OnClick */
  public function setOnClick(OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return OnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
  /** @param string */
  public function setTopLabel($topLabel)
  {
    $this->topLabel = $topLabel;
  }
  /** @return string */
  public function getTopLabel()
  {
    return $this->topLabel;
  }
}

class ListMembershipsResponse extends \Google\Collection
{
  /** @var Membership[] */
  public $memberships;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'memberships';
  protected $membershipsType = Membership::class;
  protected $membershipsDataType = 'array';
  /** @param Membership[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return Membership[] */
  public function getMemberships()
  {
    return $this->memberships;
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

class ListSpacesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Space[] */
  public $spaces;
  protected $collection_key = 'spaces';
  protected $spacesType = Space::class;
  protected $spacesDataType = 'array';
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
  /** @param Space[] */
  public function setSpaces($spaces)
  {
    $this->spaces = $spaces;
  }
  /** @return Space[] */
  public function getSpaces()
  {
    return $this->spaces;
  }
}

class MatchedUrl extends \Google\Model
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

class Media extends \Google\Model
{
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class Membership extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var User */
  public $member;
  /** @var string */
  public $name;
  /** @var string */
  public $role;
  /** @var string */
  public $state;
  protected $memberType = User::class;
  protected $memberDataType = '';
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
  /** @param User */
  public function setMember(User $member)
  {
    $this->member = $member;
  }
  /** @return User */
  public function getMember()
  {
    return $this->member;
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
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
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

class Message extends \Google\Collection
{
  /** @var ActionResponse */
  public $actionResponse;
  /** @var Annotation[] */
  public $annotations;
  /** @var string */
  public $argumentText;
  /** @var Attachment[] */
  public $attachment;
  /** @var Card[] */
  public $cards;
  /** @var CardWithId[] */
  public $cardsV2;
  /** @var string */
  public $clientAssignedMessageId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $fallbackText;
  /** @var string */
  public $lastUpdateTime;
  /** @var MatchedUrl */
  public $matchedUrl;
  /** @var string */
  public $name;
  /** @var User */
  public $sender;
  /** @var SlashCommand */
  public $slashCommand;
  /** @var Space */
  public $space;
  /** @var string */
  public $text;
  /** @var Thread */
  public $thread;
  /** @var bool */
  public $threadReply;
  protected $collection_key = 'cardsV2';
  protected $actionResponseType = ActionResponse::class;
  protected $actionResponseDataType = '';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  protected $attachmentType = Attachment::class;
  protected $attachmentDataType = 'array';
  protected $cardsType = Card::class;
  protected $cardsDataType = 'array';
  protected $cardsV2Type = CardWithId::class;
  protected $cardsV2DataType = 'array';
  protected $matchedUrlType = MatchedUrl::class;
  protected $matchedUrlDataType = '';
  protected $senderType = User::class;
  protected $senderDataType = '';
  protected $slashCommandType = SlashCommand::class;
  protected $slashCommandDataType = '';
  protected $spaceType = Space::class;
  protected $spaceDataType = '';
  protected $threadType = Thread::class;
  protected $threadDataType = '';
  /** @param ActionResponse */
  public function setActionResponse(ActionResponse $actionResponse)
  {
    $this->actionResponse = $actionResponse;
  }
  /** @return ActionResponse */
  public function getActionResponse()
  {
    return $this->actionResponse;
  }
  /** @param Annotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return Annotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param string */
  public function setArgumentText($argumentText)
  {
    $this->argumentText = $argumentText;
  }
  /** @return string */
  public function getArgumentText()
  {
    return $this->argumentText;
  }
  /** @param Attachment[] */
  public function setAttachment($attachment)
  {
    $this->attachment = $attachment;
  }
  /** @return Attachment[] */
  public function getAttachment()
  {
    return $this->attachment;
  }
  /** @param Card[] */
  public function setCards($cards)
  {
    $this->cards = $cards;
  }
  /** @return Card[] */
  public function getCards()
  {
    return $this->cards;
  }
  /** @param CardWithId[] */
  public function setCardsV2($cardsV2)
  {
    $this->cardsV2 = $cardsV2;
  }
  /** @return CardWithId[] */
  public function getCardsV2()
  {
    return $this->cardsV2;
  }
  /** @param string */
  public function setClientAssignedMessageId($clientAssignedMessageId)
  {
    $this->clientAssignedMessageId = $clientAssignedMessageId;
  }
  /** @return string */
  public function getClientAssignedMessageId()
  {
    return $this->clientAssignedMessageId;
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
  public function setFallbackText($fallbackText)
  {
    $this->fallbackText = $fallbackText;
  }
  /** @return string */
  public function getFallbackText()
  {
    return $this->fallbackText;
  }
  /** @param string */
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /** @param MatchedUrl */
  public function setMatchedUrl(MatchedUrl $matchedUrl)
  {
    $this->matchedUrl = $matchedUrl;
  }
  /** @return MatchedUrl */
  public function getMatchedUrl()
  {
    return $this->matchedUrl;
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
  /** @param User */
  public function setSender(User $sender)
  {
    $this->sender = $sender;
  }
  /** @return User */
  public function getSender()
  {
    return $this->sender;
  }
  /** @param SlashCommand */
  public function setSlashCommand(SlashCommand $slashCommand)
  {
    $this->slashCommand = $slashCommand;
  }
  /** @return SlashCommand */
  public function getSlashCommand()
  {
    return $this->slashCommand;
  }
  /** @param Space */
  public function setSpace(Space $space)
  {
    $this->space = $space;
  }
  /** @return Space */
  public function getSpace()
  {
    return $this->space;
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
  /** @param Thread */
  public function setThread(Thread $thread)
  {
    $this->thread = $thread;
  }
  /** @return Thread */
  public function getThread()
  {
    return $this->thread;
  }
  /** @param bool */
  public function setThreadReply($threadReply)
  {
    $this->threadReply = $threadReply;
  }
  /** @return bool */
  public function getThreadReply()
  {
    return $this->threadReply;
  }
}

class OnClick extends \Google\Model
{
  /** @var FormAction */
  public $action;
  /** @var OpenLink */
  public $openLink;
  protected $actionType = FormAction::class;
  protected $actionDataType = '';
  protected $openLinkType = OpenLink::class;
  protected $openLinkDataType = '';
  /** @param FormAction */
  public function setAction(FormAction $action)
  {
    $this->action = $action;
  }
  /** @return FormAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param OpenLink */
  public function setOpenLink(OpenLink $openLink)
  {
    $this->openLink = $openLink;
  }
  /** @return OpenLink */
  public function getOpenLink()
  {
    return $this->openLink;
  }
}

class OpenLink extends \Google\Model
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

class Section extends \Google\Collection
{
  /** @var string */
  public $header;
  /** @var WidgetMarkup[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = WidgetMarkup::class;
  protected $widgetsDataType = 'array';
  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param WidgetMarkup[] */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /** @return WidgetMarkup[] */
  public function getWidgets()
  {
    return $this->widgets;
  }
}

class SlashCommand extends \Google\Model
{
  /** @var string */
  public $commandId;

  /** @param string */
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  /** @return string */
  public function getCommandId()
  {
    return $this->commandId;
  }
}

class SlashCommandMetadata extends \Google\Model
{
  /** @var User */
  public $bot;
  /** @var string */
  public $commandId;
  /** @var string */
  public $commandName;
  /** @var bool */
  public $triggersDialog;
  /** @var string */
  public $type;
  protected $botType = User::class;
  protected $botDataType = '';
  /** @param User */
  public function setBot(User $bot)
  {
    $this->bot = $bot;
  }
  /** @return User */
  public function getBot()
  {
    return $this->bot;
  }
  /** @param string */
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  /** @return string */
  public function getCommandId()
  {
    return $this->commandId;
  }
  /** @param string */
  public function setCommandName($commandName)
  {
    $this->commandName = $commandName;
  }
  /** @return string */
  public function getCommandName()
  {
    return $this->commandName;
  }
  /** @param bool */
  public function setTriggersDialog($triggersDialog)
  {
    $this->triggersDialog = $triggersDialog;
  }
  /** @return bool */
  public function getTriggersDialog()
  {
    return $this->triggersDialog;
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

class Space extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var bool */
  public $singleUserBotDm;
  /** @var SpaceDetails */
  public $spaceDetails;
  /** @var string */
  public $spaceThreadingState;
  /** @var bool */
  public $threaded;
  /** @var string */
  public $type;
  protected $spaceDetailsType = SpaceDetails::class;
  protected $spaceDetailsDataType = '';
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
  public function setSingleUserBotDm($singleUserBotDm)
  {
    $this->singleUserBotDm = $singleUserBotDm;
  }
  /** @return bool */
  public function getSingleUserBotDm()
  {
    return $this->singleUserBotDm;
  }
  /** @param SpaceDetails */
  public function setSpaceDetails(SpaceDetails $spaceDetails)
  {
    $this->spaceDetails = $spaceDetails;
  }
  /** @return SpaceDetails */
  public function getSpaceDetails()
  {
    return $this->spaceDetails;
  }
  /** @param string */
  public function setSpaceThreadingState($spaceThreadingState)
  {
    $this->spaceThreadingState = $spaceThreadingState;
  }
  /** @return string */
  public function getSpaceThreadingState()
  {
    return $this->spaceThreadingState;
  }
  /** @param bool */
  public function setThreaded($threaded)
  {
    $this->threaded = $threaded;
  }
  /** @return bool */
  public function getThreaded()
  {
    return $this->threaded;
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

class SpaceDetails extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $guidelines;

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
  public function setGuidelines($guidelines)
  {
    $this->guidelines = $guidelines;
  }
  /** @return string */
  public function getGuidelines()
  {
    return $this->guidelines;
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

class StringInputs extends \Google\Collection
{
  /** @var string[] */
  public $value;
  protected $collection_key = 'value';
  /** @param string[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string[] */
  public function getValue()
  {
    return $this->value;
  }
}

class TextButton extends \Google\Model
{
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $text;
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  /** @param OnClick */
  public function setOnClick(OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return OnClick */
  public function getOnClick()
  {
    return $this->onClick;
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

class TextParagraph extends \Google\Model
{
  /** @var string */
  public $text;

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

class Thread extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $threadKey;

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
  public function setThreadKey($threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return string */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
}

class TimeInput extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
  }
}

class TimeZone extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var int */
  public $offset;

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
  /** @param int */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return int */
  public function getOffset()
  {
    return $this->offset;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $domainId;
  /** @var bool */
  public $isAnonymous;
  /** @var string */
  public $name;
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
  public function setDomainId($domainId)
  {
    $this->domainId = $domainId;
  }
  /** @return string */
  public function getDomainId()
  {
    return $this->domainId;
  }
  /** @param bool */
  public function setIsAnonymous($isAnonymous)
  {
    $this->isAnonymous = $isAnonymous;
  }
  /** @return bool */
  public function getIsAnonymous()
  {
    return $this->isAnonymous;
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

class UserMentionMetadata extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var User */
  public $user;
  protected $userType = User::class;
  protected $userDataType = '';
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
  /** @param User */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /** @return User */
  public function getUser()
  {
    return $this->user;
  }
}

class WidgetMarkup extends \Google\Collection
{
  /** @var Button[] */
  public $buttons;
  /** @var Image */
  public $image;
  /** @var KeyValue */
  public $keyValue;
  /** @var TextParagraph */
  public $textParagraph;
  protected $collection_key = 'buttons';
  protected $buttonsType = Button::class;
  protected $buttonsDataType = 'array';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $keyValueType = KeyValue::class;
  protected $keyValueDataType = '';
  protected $textParagraphType = TextParagraph::class;
  protected $textParagraphDataType = '';
  /** @param Button[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return Button[] */
  public function getButtons()
  {
    return $this->buttons;
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
  /** @param KeyValue */
  public function setKeyValue(KeyValue $keyValue)
  {
    $this->keyValue = $keyValue;
  }
  /** @return KeyValue */
  public function getKeyValue()
  {
    return $this->keyValue;
  }
  /** @param TextParagraph */
  public function setTextParagraph(TextParagraph $textParagraph)
  {
    $this->textParagraph = $textParagraph;
  }
  /** @return TextParagraph */
  public function getTextParagraph()
  {
    return $this->textParagraph;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActionParameter::class, 'Google_Service_HangoutsChat_ActionParameter');
class_alias(ActionResponse::class, 'Google_Service_HangoutsChat_ActionResponse');
class_alias(ActionStatus::class, 'Google_Service_HangoutsChat_ActionStatus');
class_alias(Annotation::class, 'Google_Service_HangoutsChat_Annotation');
class_alias(Attachment::class, 'Google_Service_HangoutsChat_Attachment');
class_alias(AttachmentDataRef::class, 'Google_Service_HangoutsChat_AttachmentDataRef');
class_alias(Button::class, 'Google_Service_HangoutsChat_Button');
class_alias(Card::class, 'Google_Service_HangoutsChat_Card');
class_alias(CardAction::class, 'Google_Service_HangoutsChat_CardAction');
class_alias(CardHeader::class, 'Google_Service_HangoutsChat_CardHeader');
class_alias(CardWithId::class, 'Google_Service_HangoutsChat_CardWithId');
class_alias(ChatAppLogEntry::class, 'Google_Service_HangoutsChat_ChatAppLogEntry');
class_alias(ChatEmpty::class, 'Google_Service_HangoutsChat_ChatEmpty');
class_alias(Color::class, 'Google_Service_HangoutsChat_Color');
class_alias(CommonEventObject::class, 'Google_Service_HangoutsChat_CommonEventObject');
class_alias(DateInput::class, 'Google_Service_HangoutsChat_DateInput');
class_alias(DateTimeInput::class, 'Google_Service_HangoutsChat_DateTimeInput');
class_alias(DeprecatedEvent::class, 'Google_Service_HangoutsChat_DeprecatedEvent');
class_alias(Dialog::class, 'Google_Service_HangoutsChat_Dialog');
class_alias(DialogAction::class, 'Google_Service_HangoutsChat_DialogAction');
class_alias(DriveDataRef::class, 'Google_Service_HangoutsChat_DriveDataRef');
class_alias(FormAction::class, 'Google_Service_HangoutsChat_FormAction');
class_alias(GoogleAppsCardV1Action::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Action');
class_alias(GoogleAppsCardV1ActionParameter::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1ActionParameter');
class_alias(GoogleAppsCardV1BorderStyle::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1BorderStyle');
class_alias(GoogleAppsCardV1Button::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Button');
class_alias(GoogleAppsCardV1ButtonList::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1ButtonList');
class_alias(GoogleAppsCardV1Card::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Card');
class_alias(GoogleAppsCardV1CardAction::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1CardAction');
class_alias(GoogleAppsCardV1CardFixedFooter::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1CardFixedFooter');
class_alias(GoogleAppsCardV1CardHeader::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1CardHeader');
class_alias(GoogleAppsCardV1DateTimePicker::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1DateTimePicker');
class_alias(GoogleAppsCardV1DecoratedText::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1DecoratedText');
class_alias(GoogleAppsCardV1Divider::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Divider');
class_alias(GoogleAppsCardV1Grid::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Grid');
class_alias(GoogleAppsCardV1GridItem::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1GridItem');
class_alias(GoogleAppsCardV1Icon::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Icon');
class_alias(GoogleAppsCardV1Image::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Image');
class_alias(GoogleAppsCardV1ImageComponent::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1ImageComponent');
class_alias(GoogleAppsCardV1ImageCropStyle::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1ImageCropStyle');
class_alias(GoogleAppsCardV1OnClick::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1OnClick');
class_alias(GoogleAppsCardV1OpenLink::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1OpenLink');
class_alias(GoogleAppsCardV1Section::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Section');
class_alias(GoogleAppsCardV1SelectionInput::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1SelectionInput');
class_alias(GoogleAppsCardV1SelectionItem::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1SelectionItem');
class_alias(GoogleAppsCardV1SuggestionItem::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1SuggestionItem');
class_alias(GoogleAppsCardV1Suggestions::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Suggestions');
class_alias(GoogleAppsCardV1SwitchControl::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1SwitchControl');
class_alias(GoogleAppsCardV1TextInput::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1TextInput');
class_alias(GoogleAppsCardV1TextParagraph::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1TextParagraph');
class_alias(GoogleAppsCardV1Widget::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1Widget');
class_alias(Image::class, 'Google_Service_HangoutsChat_Image');
class_alias(ImageButton::class, 'Google_Service_HangoutsChat_ImageButton');
class_alias(Inputs::class, 'Google_Service_HangoutsChat_Inputs');
class_alias(KeyValue::class, 'Google_Service_HangoutsChat_KeyValue');
class_alias(ListMembershipsResponse::class, 'Google_Service_HangoutsChat_ListMembershipsResponse');
class_alias(ListSpacesResponse::class, 'Google_Service_HangoutsChat_ListSpacesResponse');
class_alias(MatchedUrl::class, 'Google_Service_HangoutsChat_MatchedUrl');
class_alias(Media::class, 'Google_Service_HangoutsChat_Media');
class_alias(Membership::class, 'Google_Service_HangoutsChat_Membership');
class_alias(Message::class, 'Google_Service_HangoutsChat_Message');
class_alias(OnClick::class, 'Google_Service_HangoutsChat_OnClick');
class_alias(OpenLink::class, 'Google_Service_HangoutsChat_OpenLink');
class_alias(Section::class, 'Google_Service_HangoutsChat_Section');
class_alias(SlashCommand::class, 'Google_Service_HangoutsChat_SlashCommand');
class_alias(SlashCommandMetadata::class, 'Google_Service_HangoutsChat_SlashCommandMetadata');
class_alias(Space::class, 'Google_Service_HangoutsChat_Space');
class_alias(SpaceDetails::class, 'Google_Service_HangoutsChat_SpaceDetails');
class_alias(Status::class, 'Google_Service_HangoutsChat_Status');
class_alias(StringInputs::class, 'Google_Service_HangoutsChat_StringInputs');
class_alias(TextButton::class, 'Google_Service_HangoutsChat_TextButton');
class_alias(TextParagraph::class, 'Google_Service_HangoutsChat_TextParagraph');
class_alias(Thread::class, 'Google_Service_HangoutsChat_Thread');
class_alias(TimeInput::class, 'Google_Service_HangoutsChat_TimeInput');
class_alias(TimeZone::class, 'Google_Service_HangoutsChat_TimeZone');
class_alias(User::class, 'Google_Service_HangoutsChat_User');
class_alias(UserMentionMetadata::class, 'Google_Service_HangoutsChat_UserMentionMetadata');
class_alias(WidgetMarkup::class, 'Google_Service_HangoutsChat_WidgetMarkup');
