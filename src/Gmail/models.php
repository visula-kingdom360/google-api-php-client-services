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

namespace Google\Service\Gmail;

class AutoForwarding extends \Google\Model
{
  /** @var string */
  public $disposition;
  /** @var string */
  public $emailAddress;
  /** @var bool */
  public $enabled;

  /** @param string */
  public function setDisposition($disposition)
  {
    $this->disposition = $disposition;
  }
  /** @return string */
  public function getDisposition()
  {
    return $this->disposition;
  }
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
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
}

class BatchDeleteMessagesRequest extends \Google\Collection
{
  /** @var string[] */
  public $ids;
  protected $collection_key = 'ids';
  /** @param string[] */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string[] */
  public function getIds()
  {
    return $this->ids;
  }
}

class BatchModifyMessagesRequest extends \Google\Collection
{
  /** @var string[] */
  public $addLabelIds;
  /** @var string[] */
  public $ids;
  /** @var string[] */
  public $removeLabelIds;
  protected $collection_key = 'removeLabelIds';
  /** @param string[] */
  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  /** @return string[] */
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  /** @param string[] */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string[] */
  public function getIds()
  {
    return $this->ids;
  }
  /** @param string[] */
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  /** @return string[] */
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class Delegate extends \Google\Model
{
  /** @var string */
  public $delegateEmail;
  /** @var string */
  public $verificationStatus;

  /** @param string */
  public function setDelegateEmail($delegateEmail)
  {
    $this->delegateEmail = $delegateEmail;
  }
  /** @return string */
  public function getDelegateEmail()
  {
    return $this->delegateEmail;
  }
  /** @param string */
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  /** @return string */
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class Draft extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
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
}

class Filter extends \Google\Model
{
  /** @var FilterAction */
  public $action;
  /** @var FilterCriteria */
  public $criteria;
  /** @var string */
  public $id;
  protected $actionType = FilterAction::class;
  protected $actionDataType = '';
  protected $criteriaType = FilterCriteria::class;
  protected $criteriaDataType = '';
  /** @param FilterAction */
  public function setAction(FilterAction $action)
  {
    $this->action = $action;
  }
  /** @return FilterAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param FilterCriteria */
  public function setCriteria(FilterCriteria $criteria)
  {
    $this->criteria = $criteria;
  }
  /** @return FilterCriteria */
  public function getCriteria()
  {
    return $this->criteria;
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
}

class FilterAction extends \Google\Collection
{
  /** @var string[] */
  public $addLabelIds;
  /** @var string */
  public $forward;
  /** @var string[] */
  public $removeLabelIds;
  protected $collection_key = 'removeLabelIds';
  /** @param string[] */
  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  /** @return string[] */
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  /** @param string */
  public function setForward($forward)
  {
    $this->forward = $forward;
  }
  /** @return string */
  public function getForward()
  {
    return $this->forward;
  }
  /** @param string[] */
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  /** @return string[] */
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class FilterCriteria extends \Google\Model
{
  /** @var bool */
  public $excludeChats;
  /** @var string */
  public $from;
  /** @var bool */
  public $hasAttachment;
  /** @var string */
  public $negatedQuery;
  /** @var string */
  public $query;
  /** @var int */
  public $size;
  /** @var string */
  public $sizeComparison;
  /** @var string */
  public $subject;
  /** @var string */
  public $to;

  /** @param bool */
  public function setExcludeChats($excludeChats)
  {
    $this->excludeChats = $excludeChats;
  }
  /** @return bool */
  public function getExcludeChats()
  {
    return $this->excludeChats;
  }
  /** @param string */
  public function setFrom($from)
  {
    $this->from = $from;
  }
  /** @return string */
  public function getFrom()
  {
    return $this->from;
  }
  /** @param bool */
  public function setHasAttachment($hasAttachment)
  {
    $this->hasAttachment = $hasAttachment;
  }
  /** @return bool */
  public function getHasAttachment()
  {
    return $this->hasAttachment;
  }
  /** @param string */
  public function setNegatedQuery($negatedQuery)
  {
    $this->negatedQuery = $negatedQuery;
  }
  /** @return string */
  public function getNegatedQuery()
  {
    return $this->negatedQuery;
  }
  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param int */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return int */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setSizeComparison($sizeComparison)
  {
    $this->sizeComparison = $sizeComparison;
  }
  /** @return string */
  public function getSizeComparison()
  {
    return $this->sizeComparison;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param string */
  public function setTo($to)
  {
    $this->to = $to;
  }
  /** @return string */
  public function getTo()
  {
    return $this->to;
  }
}

class ForwardingAddress extends \Google\Model
{
  /** @var string */
  public $forwardingEmail;
  /** @var string */
  public $verificationStatus;

  /** @param string */
  public function setForwardingEmail($forwardingEmail)
  {
    $this->forwardingEmail = $forwardingEmail;
  }
  /** @return string */
  public function getForwardingEmail()
  {
    return $this->forwardingEmail;
  }
  /** @param string */
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  /** @return string */
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class History extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var HistoryLabelAdded[] */
  public $labelsAdded;
  /** @var HistoryLabelRemoved[] */
  public $labelsRemoved;
  /** @var Message[] */
  public $messages;
  /** @var HistoryMessageAdded[] */
  public $messagesAdded;
  /** @var HistoryMessageDeleted[] */
  public $messagesDeleted;
  protected $collection_key = 'messagesDeleted';
  protected $labelsAddedType = HistoryLabelAdded::class;
  protected $labelsAddedDataType = 'array';
  protected $labelsRemovedType = HistoryLabelRemoved::class;
  protected $labelsRemovedDataType = 'array';
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  protected $messagesAddedType = HistoryMessageAdded::class;
  protected $messagesAddedDataType = 'array';
  protected $messagesDeletedType = HistoryMessageDeleted::class;
  protected $messagesDeletedDataType = 'array';
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
  /** @param HistoryLabelAdded[] */
  public function setLabelsAdded($labelsAdded)
  {
    $this->labelsAdded = $labelsAdded;
  }
  /** @return HistoryLabelAdded[] */
  public function getLabelsAdded()
  {
    return $this->labelsAdded;
  }
  /** @param HistoryLabelRemoved[] */
  public function setLabelsRemoved($labelsRemoved)
  {
    $this->labelsRemoved = $labelsRemoved;
  }
  /** @return HistoryLabelRemoved[] */
  public function getLabelsRemoved()
  {
    return $this->labelsRemoved;
  }
  /** @param Message[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return Message[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param HistoryMessageAdded[] */
  public function setMessagesAdded($messagesAdded)
  {
    $this->messagesAdded = $messagesAdded;
  }
  /** @return HistoryMessageAdded[] */
  public function getMessagesAdded()
  {
    return $this->messagesAdded;
  }
  /** @param HistoryMessageDeleted[] */
  public function setMessagesDeleted($messagesDeleted)
  {
    $this->messagesDeleted = $messagesDeleted;
  }
  /** @return HistoryMessageDeleted[] */
  public function getMessagesDeleted()
  {
    return $this->messagesDeleted;
  }
}

class HistoryLabelAdded extends \Google\Collection
{
  /** @var string[] */
  public $labelIds;
  /** @var Message */
  public $message;
  protected $collection_key = 'labelIds';
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
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
}

class HistoryLabelRemoved extends \Google\Collection
{
  /** @var string[] */
  public $labelIds;
  /** @var Message */
  public $message;
  protected $collection_key = 'labelIds';
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
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
}

class HistoryMessageAdded extends \Google\Model
{
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
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
}

class HistoryMessageDeleted extends \Google\Model
{
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
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
}

class ImapSettings extends \Google\Model
{
  /** @var bool */
  public $autoExpunge;
  /** @var bool */
  public $enabled;
  /** @var string */
  public $expungeBehavior;
  /** @var int */
  public $maxFolderSize;

  /** @param bool */
  public function setAutoExpunge($autoExpunge)
  {
    $this->autoExpunge = $autoExpunge;
  }
  /** @return bool */
  public function getAutoExpunge()
  {
    return $this->autoExpunge;
  }
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
  /** @param string */
  public function setExpungeBehavior($expungeBehavior)
  {
    $this->expungeBehavior = $expungeBehavior;
  }
  /** @return string */
  public function getExpungeBehavior()
  {
    return $this->expungeBehavior;
  }
  /** @param int */
  public function setMaxFolderSize($maxFolderSize)
  {
    $this->maxFolderSize = $maxFolderSize;
  }
  /** @return int */
  public function getMaxFolderSize()
  {
    return $this->maxFolderSize;
  }
}

class Label extends \Google\Model
{
  /** @var LabelColor */
  public $color;
  /** @var string */
  public $id;
  /** @var string */
  public $labelListVisibility;
  /** @var string */
  public $messageListVisibility;
  /** @var int */
  public $messagesTotal;
  /** @var int */
  public $messagesUnread;
  /** @var string */
  public $name;
  /** @var int */
  public $threadsTotal;
  /** @var int */
  public $threadsUnread;
  /** @var string */
  public $type;
  protected $colorType = LabelColor::class;
  protected $colorDataType = '';
  /** @param LabelColor */
  public function setColor(LabelColor $color)
  {
    $this->color = $color;
  }
  /** @return LabelColor */
  public function getColor()
  {
    return $this->color;
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
  public function setLabelListVisibility($labelListVisibility)
  {
    $this->labelListVisibility = $labelListVisibility;
  }
  /** @return string */
  public function getLabelListVisibility()
  {
    return $this->labelListVisibility;
  }
  /** @param string */
  public function setMessageListVisibility($messageListVisibility)
  {
    $this->messageListVisibility = $messageListVisibility;
  }
  /** @return string */
  public function getMessageListVisibility()
  {
    return $this->messageListVisibility;
  }
  /** @param int */
  public function setMessagesTotal($messagesTotal)
  {
    $this->messagesTotal = $messagesTotal;
  }
  /** @return int */
  public function getMessagesTotal()
  {
    return $this->messagesTotal;
  }
  /** @param int */
  public function setMessagesUnread($messagesUnread)
  {
    $this->messagesUnread = $messagesUnread;
  }
  /** @return int */
  public function getMessagesUnread()
  {
    return $this->messagesUnread;
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
  public function setThreadsTotal($threadsTotal)
  {
    $this->threadsTotal = $threadsTotal;
  }
  /** @return int */
  public function getThreadsTotal()
  {
    return $this->threadsTotal;
  }
  /** @param int */
  public function setThreadsUnread($threadsUnread)
  {
    $this->threadsUnread = $threadsUnread;
  }
  /** @return int */
  public function getThreadsUnread()
  {
    return $this->threadsUnread;
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

class LabelColor extends \Google\Model
{
  /** @var string */
  public $backgroundColor;
  /** @var string */
  public $textColor;

  /** @param string */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return string */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param string */
  public function setTextColor($textColor)
  {
    $this->textColor = $textColor;
  }
  /** @return string */
  public function getTextColor()
  {
    return $this->textColor;
  }
}

class LanguageSettings extends \Google\Model
{
  /** @var string */
  public $displayLanguage;

  /** @param string */
  public function setDisplayLanguage($displayLanguage)
  {
    $this->displayLanguage = $displayLanguage;
  }
  /** @return string */
  public function getDisplayLanguage()
  {
    return $this->displayLanguage;
  }
}

class ListDelegatesResponse extends \Google\Collection
{
  /** @var Delegate[] */
  public $delegates;
  protected $collection_key = 'delegates';
  protected $delegatesType = Delegate::class;
  protected $delegatesDataType = 'array';
  /** @param Delegate[] */
  public function setDelegates($delegates)
  {
    $this->delegates = $delegates;
  }
  /** @return Delegate[] */
  public function getDelegates()
  {
    return $this->delegates;
  }
}

class ListDraftsResponse extends \Google\Collection
{
  /** @var Draft[] */
  public $drafts;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $resultSizeEstimate;
  protected $collection_key = 'drafts';
  protected $draftsType = Draft::class;
  protected $draftsDataType = 'array';
  /** @param Draft[] */
  public function setDrafts($drafts)
  {
    $this->drafts = $drafts;
  }
  /** @return Draft[] */
  public function getDrafts()
  {
    return $this->drafts;
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
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  /** @return string */
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
}

class ListFiltersResponse extends \Google\Collection
{
  /** @var Filter[] */
  public $filter;
  protected $collection_key = 'filter';
  protected $filterType = Filter::class;
  protected $filterDataType = 'array';
  /** @param Filter[] */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter[] */
  public function getFilter()
  {
    return $this->filter;
  }
}

class ListForwardingAddressesResponse extends \Google\Collection
{
  /** @var ForwardingAddress[] */
  public $forwardingAddresses;
  protected $collection_key = 'forwardingAddresses';
  protected $forwardingAddressesType = ForwardingAddress::class;
  protected $forwardingAddressesDataType = 'array';
  /** @param ForwardingAddress[] */
  public function setForwardingAddresses($forwardingAddresses)
  {
    $this->forwardingAddresses = $forwardingAddresses;
  }
  /** @return ForwardingAddress[] */
  public function getForwardingAddresses()
  {
    return $this->forwardingAddresses;
  }
}

class ListHistoryResponse extends \Google\Collection
{
  /** @var History[] */
  public $history;
  /** @var string */
  public $historyId;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'history';
  protected $historyType = History::class;
  protected $historyDataType = 'array';
  /** @param History[] */
  public function setHistory($history)
  {
    $this->history = $history;
  }
  /** @return History[] */
  public function getHistory()
  {
    return $this->history;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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

class ListLabelsResponse extends \Google\Collection
{
  /** @var Label[] */
  public $labels;
  protected $collection_key = 'labels';
  protected $labelsType = Label::class;
  protected $labelsDataType = 'array';
  /** @param Label[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return Label[] */
  public function getLabels()
  {
    return $this->labels;
  }
}

class ListMessagesResponse extends \Google\Collection
{
  /** @var Message[] */
  public $messages;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $resultSizeEstimate;
  protected $collection_key = 'messages';
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /** @param Message[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return Message[] */
  public function getMessages()
  {
    return $this->messages;
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
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  /** @return string */
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
}

class ListSendAsResponse extends \Google\Collection
{
  /** @var SendAs[] */
  public $sendAs;
  protected $collection_key = 'sendAs';
  protected $sendAsType = SendAs::class;
  protected $sendAsDataType = 'array';
  /** @param SendAs[] */
  public function setSendAs($sendAs)
  {
    $this->sendAs = $sendAs;
  }
  /** @return SendAs[] */
  public function getSendAs()
  {
    return $this->sendAs;
  }
}

class ListSmimeInfoResponse extends \Google\Collection
{
  /** @var SmimeInfo[] */
  public $smimeInfo;
  protected $collection_key = 'smimeInfo';
  protected $smimeInfoType = SmimeInfo::class;
  protected $smimeInfoDataType = 'array';
  /** @param SmimeInfo[] */
  public function setSmimeInfo($smimeInfo)
  {
    $this->smimeInfo = $smimeInfo;
  }
  /** @return SmimeInfo[] */
  public function getSmimeInfo()
  {
    return $this->smimeInfo;
  }
}

class ListThreadsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $resultSizeEstimate;
  /** @var Thread[] */
  public $threads;
  protected $collection_key = 'threads';
  protected $threadsType = Thread::class;
  protected $threadsDataType = 'array';
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
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  /** @return string */
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
  /** @param Thread[] */
  public function setThreads($threads)
  {
    $this->threads = $threads;
  }
  /** @return Thread[] */
  public function getThreads()
  {
    return $this->threads;
  }
}

class Message extends \Google\Collection
{
  /** @var string */
  public $historyId;
  /** @var string */
  public $id;
  /** @var string */
  public $internalDate;
  /** @var string[] */
  public $labelIds;
  /** @var MessagePart */
  public $payload;
  /** @var string */
  public $raw;
  /** @var int */
  public $sizeEstimate;
  /** @var string */
  public $snippet;
  /** @var string */
  public $threadId;
  protected $collection_key = 'labelIds';
  protected $payloadType = MessagePart::class;
  protected $payloadDataType = '';
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  public function setInternalDate($internalDate)
  {
    $this->internalDate = $internalDate;
  }
  /** @return string */
  public function getInternalDate()
  {
    return $this->internalDate;
  }
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  /** @param MessagePart */
  public function setPayload(MessagePart $payload)
  {
    $this->payload = $payload;
  }
  /** @return MessagePart */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setRaw($raw)
  {
    $this->raw = $raw;
  }
  /** @return string */
  public function getRaw()
  {
    return $this->raw;
  }
  /** @param int */
  public function setSizeEstimate($sizeEstimate)
  {
    $this->sizeEstimate = $sizeEstimate;
  }
  /** @return int */
  public function getSizeEstimate()
  {
    return $this->sizeEstimate;
  }
  /** @param string */
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return string */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /** @param string */
  public function setThreadId($threadId)
  {
    $this->threadId = $threadId;
  }
  /** @return string */
  public function getThreadId()
  {
    return $this->threadId;
  }
}

class MessagePart extends \Google\Collection
{
  /** @var MessagePartBody */
  public $body;
  /** @var string */
  public $filename;
  /** @var MessagePartHeader[] */
  public $headers;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $partId;
  /** @var MessagePart[] */
  public $parts;
  protected $collection_key = 'parts';
  protected $bodyType = MessagePartBody::class;
  protected $bodyDataType = '';
  protected $headersType = MessagePartHeader::class;
  protected $headersDataType = 'array';
  protected $partsType = MessagePart::class;
  protected $partsDataType = 'array';
  /** @param MessagePartBody */
  public function setBody(MessagePartBody $body)
  {
    $this->body = $body;
  }
  /** @return MessagePartBody */
  public function getBody()
  {
    return $this->body;
  }
  /** @param string */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
  /** @param MessagePartHeader[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return MessagePartHeader[] */
  public function getHeaders()
  {
    return $this->headers;
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
  public function setPartId($partId)
  {
    $this->partId = $partId;
  }
  /** @return string */
  public function getPartId()
  {
    return $this->partId;
  }
  /** @param MessagePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return MessagePart[] */
  public function getParts()
  {
    return $this->parts;
  }
}

class MessagePartBody extends \Google\Model
{
  /** @var string */
  public $attachmentId;
  /** @var string */
  public $data;
  /** @var int */
  public $size;

  /** @param string */
  public function setAttachmentId($attachmentId)
  {
    $this->attachmentId = $attachmentId;
  }
  /** @return string */
  public function getAttachmentId()
  {
    return $this->attachmentId;
  }
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param int */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return int */
  public function getSize()
  {
    return $this->size;
  }
}

class MessagePartHeader extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class ModifyMessageRequest extends \Google\Collection
{
  /** @var string[] */
  public $addLabelIds;
  /** @var string[] */
  public $removeLabelIds;
  protected $collection_key = 'removeLabelIds';
  /** @param string[] */
  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  /** @return string[] */
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  /** @param string[] */
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  /** @return string[] */
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class ModifyThreadRequest extends \Google\Collection
{
  /** @var string[] */
  public $addLabelIds;
  /** @var string[] */
  public $removeLabelIds;
  protected $collection_key = 'removeLabelIds';
  /** @param string[] */
  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  /** @return string[] */
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  /** @param string[] */
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  /** @return string[] */
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class PopSettings extends \Google\Model
{
  /** @var string */
  public $accessWindow;
  /** @var string */
  public $disposition;

  /** @param string */
  public function setAccessWindow($accessWindow)
  {
    $this->accessWindow = $accessWindow;
  }
  /** @return string */
  public function getAccessWindow()
  {
    return $this->accessWindow;
  }
  /** @param string */
  public function setDisposition($disposition)
  {
    $this->disposition = $disposition;
  }
  /** @return string */
  public function getDisposition()
  {
    return $this->disposition;
  }
}

class Profile extends \Google\Model
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $historyId;
  /** @var int */
  public $messagesTotal;
  /** @var int */
  public $threadsTotal;

  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
  }
  /** @param int */
  public function setMessagesTotal($messagesTotal)
  {
    $this->messagesTotal = $messagesTotal;
  }
  /** @return int */
  public function getMessagesTotal()
  {
    return $this->messagesTotal;
  }
  /** @param int */
  public function setThreadsTotal($threadsTotal)
  {
    $this->threadsTotal = $threadsTotal;
  }
  /** @return int */
  public function getThreadsTotal()
  {
    return $this->threadsTotal;
  }
}

class SendAs extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isDefault;
  /** @var bool */
  public $isPrimary;
  /** @var string */
  public $replyToAddress;
  /** @var string */
  public $sendAsEmail;
  /** @var string */
  public $signature;
  /** @var SmtpMsa */
  public $smtpMsa;
  /** @var bool */
  public $treatAsAlias;
  /** @var string */
  public $verificationStatus;
  protected $smtpMsaType = SmtpMsa::class;
  protected $smtpMsaDataType = '';
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
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
  }
  /** @param bool */
  public function setIsPrimary($isPrimary)
  {
    $this->isPrimary = $isPrimary;
  }
  /** @return bool */
  public function getIsPrimary()
  {
    return $this->isPrimary;
  }
  /** @param string */
  public function setReplyToAddress($replyToAddress)
  {
    $this->replyToAddress = $replyToAddress;
  }
  /** @return string */
  public function getReplyToAddress()
  {
    return $this->replyToAddress;
  }
  /** @param string */
  public function setSendAsEmail($sendAsEmail)
  {
    $this->sendAsEmail = $sendAsEmail;
  }
  /** @return string */
  public function getSendAsEmail()
  {
    return $this->sendAsEmail;
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
  /** @param SmtpMsa */
  public function setSmtpMsa(SmtpMsa $smtpMsa)
  {
    $this->smtpMsa = $smtpMsa;
  }
  /** @return SmtpMsa */
  public function getSmtpMsa()
  {
    return $this->smtpMsa;
  }
  /** @param bool */
  public function setTreatAsAlias($treatAsAlias)
  {
    $this->treatAsAlias = $treatAsAlias;
  }
  /** @return bool */
  public function getTreatAsAlias()
  {
    return $this->treatAsAlias;
  }
  /** @param string */
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  /** @return string */
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class SmimeInfo extends \Google\Model
{
  /** @var string */
  public $encryptedKeyPassword;
  /** @var string */
  public $expiration;
  /** @var string */
  public $id;
  /** @var bool */
  public $isDefault;
  /** @var string */
  public $issuerCn;
  /** @var string */
  public $pem;
  /** @var string */
  public $pkcs12;

  /** @param string */
  public function setEncryptedKeyPassword($encryptedKeyPassword)
  {
    $this->encryptedKeyPassword = $encryptedKeyPassword;
  }
  /** @return string */
  public function getEncryptedKeyPassword()
  {
    return $this->encryptedKeyPassword;
  }
  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
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
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
  }
  /** @param string */
  public function setIssuerCn($issuerCn)
  {
    $this->issuerCn = $issuerCn;
  }
  /** @return string */
  public function getIssuerCn()
  {
    return $this->issuerCn;
  }
  /** @param string */
  public function setPem($pem)
  {
    $this->pem = $pem;
  }
  /** @return string */
  public function getPem()
  {
    return $this->pem;
  }
  /** @param string */
  public function setPkcs12($pkcs12)
  {
    $this->pkcs12 = $pkcs12;
  }
  /** @return string */
  public function getPkcs12()
  {
    return $this->pkcs12;
  }
}

class SmtpMsa extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var string */
  public $password;
  /** @var int */
  public $port;
  /** @var string */
  public $securityMode;
  /** @var string */
  public $username;

  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
  /** @param string */
  public function setSecurityMode($securityMode)
  {
    $this->securityMode = $securityMode;
  }
  /** @return string */
  public function getSecurityMode()
  {
    return $this->securityMode;
  }
  /** @param string */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
}

class Thread extends \Google\Collection
{
  /** @var string */
  public $historyId;
  /** @var string */
  public $id;
  /** @var Message[] */
  public $messages;
  /** @var string */
  public $snippet;
  protected $collection_key = 'messages';
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  /** @param Message[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return Message[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param string */
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return string */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class VacationSettings extends \Google\Model
{
  /** @var bool */
  public $enableAutoReply;
  /** @var string */
  public $endTime;
  /** @var string */
  public $responseBodyHtml;
  /** @var string */
  public $responseBodyPlainText;
  /** @var string */
  public $responseSubject;
  /** @var bool */
  public $restrictToContacts;
  /** @var bool */
  public $restrictToDomain;
  /** @var string */
  public $startTime;

  /** @param bool */
  public function setEnableAutoReply($enableAutoReply)
  {
    $this->enableAutoReply = $enableAutoReply;
  }
  /** @return bool */
  public function getEnableAutoReply()
  {
    return $this->enableAutoReply;
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
  /** @param string */
  public function setResponseBodyHtml($responseBodyHtml)
  {
    $this->responseBodyHtml = $responseBodyHtml;
  }
  /** @return string */
  public function getResponseBodyHtml()
  {
    return $this->responseBodyHtml;
  }
  /** @param string */
  public function setResponseBodyPlainText($responseBodyPlainText)
  {
    $this->responseBodyPlainText = $responseBodyPlainText;
  }
  /** @return string */
  public function getResponseBodyPlainText()
  {
    return $this->responseBodyPlainText;
  }
  /** @param string */
  public function setResponseSubject($responseSubject)
  {
    $this->responseSubject = $responseSubject;
  }
  /** @return string */
  public function getResponseSubject()
  {
    return $this->responseSubject;
  }
  /** @param bool */
  public function setRestrictToContacts($restrictToContacts)
  {
    $this->restrictToContacts = $restrictToContacts;
  }
  /** @return bool */
  public function getRestrictToContacts()
  {
    return $this->restrictToContacts;
  }
  /** @param bool */
  public function setRestrictToDomain($restrictToDomain)
  {
    $this->restrictToDomain = $restrictToDomain;
  }
  /** @return bool */
  public function getRestrictToDomain()
  {
    return $this->restrictToDomain;
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

class WatchRequest extends \Google\Collection
{
  /** @var string */
  public $labelFilterAction;
  /** @var string[] */
  public $labelIds;
  /** @var string */
  public $topicName;
  protected $collection_key = 'labelIds';
  /** @param string */
  public function setLabelFilterAction($labelFilterAction)
  {
    $this->labelFilterAction = $labelFilterAction;
  }
  /** @return string */
  public function getLabelFilterAction()
  {
    return $this->labelFilterAction;
  }
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
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

class WatchResponse extends \Google\Model
{
  /** @var string */
  public $expiration;
  /** @var string */
  public $historyId;

  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoForwarding::class, 'Google_Service_Gmail_AutoForwarding');
class_alias(BatchDeleteMessagesRequest::class, 'Google_Service_Gmail_BatchDeleteMessagesRequest');
class_alias(BatchModifyMessagesRequest::class, 'Google_Service_Gmail_BatchModifyMessagesRequest');
class_alias(Delegate::class, 'Google_Service_Gmail_Delegate');
class_alias(Draft::class, 'Google_Service_Gmail_Draft');
class_alias(Filter::class, 'Google_Service_Gmail_Filter');
class_alias(FilterAction::class, 'Google_Service_Gmail_FilterAction');
class_alias(FilterCriteria::class, 'Google_Service_Gmail_FilterCriteria');
class_alias(ForwardingAddress::class, 'Google_Service_Gmail_ForwardingAddress');
class_alias(History::class, 'Google_Service_Gmail_History');
class_alias(HistoryLabelAdded::class, 'Google_Service_Gmail_HistoryLabelAdded');
class_alias(HistoryLabelRemoved::class, 'Google_Service_Gmail_HistoryLabelRemoved');
class_alias(HistoryMessageAdded::class, 'Google_Service_Gmail_HistoryMessageAdded');
class_alias(HistoryMessageDeleted::class, 'Google_Service_Gmail_HistoryMessageDeleted');
class_alias(ImapSettings::class, 'Google_Service_Gmail_ImapSettings');
class_alias(Label::class, 'Google_Service_Gmail_Label');
class_alias(LabelColor::class, 'Google_Service_Gmail_LabelColor');
class_alias(LanguageSettings::class, 'Google_Service_Gmail_LanguageSettings');
class_alias(ListDelegatesResponse::class, 'Google_Service_Gmail_ListDelegatesResponse');
class_alias(ListDraftsResponse::class, 'Google_Service_Gmail_ListDraftsResponse');
class_alias(ListFiltersResponse::class, 'Google_Service_Gmail_ListFiltersResponse');
class_alias(ListForwardingAddressesResponse::class, 'Google_Service_Gmail_ListForwardingAddressesResponse');
class_alias(ListHistoryResponse::class, 'Google_Service_Gmail_ListHistoryResponse');
class_alias(ListLabelsResponse::class, 'Google_Service_Gmail_ListLabelsResponse');
class_alias(ListMessagesResponse::class, 'Google_Service_Gmail_ListMessagesResponse');
class_alias(ListSendAsResponse::class, 'Google_Service_Gmail_ListSendAsResponse');
class_alias(ListSmimeInfoResponse::class, 'Google_Service_Gmail_ListSmimeInfoResponse');
class_alias(ListThreadsResponse::class, 'Google_Service_Gmail_ListThreadsResponse');
class_alias(Message::class, 'Google_Service_Gmail_Message');
class_alias(MessagePart::class, 'Google_Service_Gmail_MessagePart');
class_alias(MessagePartBody::class, 'Google_Service_Gmail_MessagePartBody');
class_alias(MessagePartHeader::class, 'Google_Service_Gmail_MessagePartHeader');
class_alias(ModifyMessageRequest::class, 'Google_Service_Gmail_ModifyMessageRequest');
class_alias(ModifyThreadRequest::class, 'Google_Service_Gmail_ModifyThreadRequest');
class_alias(PopSettings::class, 'Google_Service_Gmail_PopSettings');
class_alias(Profile::class, 'Google_Service_Gmail_Profile');
class_alias(SendAs::class, 'Google_Service_Gmail_SendAs');
class_alias(SmimeInfo::class, 'Google_Service_Gmail_SmimeInfo');
class_alias(SmtpMsa::class, 'Google_Service_Gmail_SmtpMsa');
class_alias(Thread::class, 'Google_Service_Gmail_Thread');
class_alias(VacationSettings::class, 'Google_Service_Gmail_VacationSettings');
class_alias(WatchRequest::class, 'Google_Service_Gmail_WatchRequest');
class_alias(WatchResponse::class, 'Google_Service_Gmail_WatchResponse');
