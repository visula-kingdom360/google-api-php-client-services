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

namespace Google\Service\WorkflowExecutions;

class CancelExecutionRequest extends \Google\Model
{
}

class Error extends \Google\Model
{
  /** @var string */
  public $context;
  /** @var string */
  public $payload;
  /** @var StackTrace */
  public $stackTrace;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  /** @param string */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return string */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
  }
}

class Execution extends \Google\Model
{
  /** @var string */
  public $argument;
  /** @var string */
  public $callLogLevel;
  /** @var string */
  public $endTime;
  /** @var Error */
  public $error;
  /** @var string */
  public $name;
  /** @var string */
  public $result;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var Status */
  public $status;
  /** @var string */
  public $workflowRevisionId;
  protected $errorType = Error::class;
  protected $errorDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param string */
  public function setArgument($argument)
  {
    $this->argument = $argument;
  }
  /** @return string */
  public function getArgument()
  {
    return $this->argument;
  }
  /** @param string */
  public function setCallLogLevel($callLogLevel)
  {
    $this->callLogLevel = $callLogLevel;
  }
  /** @return string */
  public function getCallLogLevel()
  {
    return $this->callLogLevel;
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
  /** @param Error */
  public function setError(Error $error)
  {
    $this->error = $error;
  }
  /** @return Error */
  public function getError()
  {
    return $this->error;
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
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
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
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setWorkflowRevisionId($workflowRevisionId)
  {
    $this->workflowRevisionId = $workflowRevisionId;
  }
  /** @return string */
  public function getWorkflowRevisionId()
  {
    return $this->workflowRevisionId;
  }
}

class ListExecutionsResponse extends \Google\Collection
{
  /** @var Execution[] */
  public $executions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'executions';
  protected $executionsType = Execution::class;
  protected $executionsDataType = 'array';
  /** @param Execution[] */
  public function setExecutions($executions)
  {
    $this->executions = $executions;
  }
  /** @return Execution[] */
  public function getExecutions()
  {
    return $this->executions;
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

class Position extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var string */
  public $length;
  /** @var string */
  public $line;

  /** @param string */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return string */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param string */
  public function setLength($length)
  {
    $this->length = $length;
  }
  /** @return string */
  public function getLength()
  {
    return $this->length;
  }
  /** @param string */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return string */
  public function getLine()
  {
    return $this->line;
  }
}

class PubsubMessage extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $data;
  /** @var string */
  public $messageId;
  /** @var string */
  public $orderingKey;
  /** @var string */
  public $publishTime;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param string */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setOrderingKey($orderingKey)
  {
    $this->orderingKey = $orderingKey;
  }
  /** @return string */
  public function getOrderingKey()
  {
    return $this->orderingKey;
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
}

class StackTrace extends \Google\Collection
{
  /** @var StackTraceElement[] */
  public $elements;
  protected $collection_key = 'elements';
  protected $elementsType = StackTraceElement::class;
  protected $elementsDataType = 'array';
  /** @param StackTraceElement[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return StackTraceElement[] */
  public function getElements()
  {
    return $this->elements;
  }
}

class StackTraceElement extends \Google\Model
{
  /** @var Position */
  public $position;
  /** @var string */
  public $routine;
  /** @var string */
  public $step;
  protected $positionType = Position::class;
  protected $positionDataType = '';
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setRoutine($routine)
  {
    $this->routine = $routine;
  }
  /** @return string */
  public function getRoutine()
  {
    return $this->routine;
  }
  /** @param string */
  public function setStep($step)
  {
    $this->step = $step;
  }
  /** @return string */
  public function getStep()
  {
    return $this->step;
  }
}

class Status extends \Google\Collection
{
  /** @var Step[] */
  public $currentSteps;
  protected $collection_key = 'currentSteps';
  protected $currentStepsType = Step::class;
  protected $currentStepsDataType = 'array';
  /** @param Step[] */
  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  /** @return Step[] */
  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }
}

class Step extends \Google\Model
{
  /** @var string */
  public $routine;
  /** @var string */
  public $step;

  /** @param string */
  public function setRoutine($routine)
  {
    $this->routine = $routine;
  }
  /** @return string */
  public function getRoutine()
  {
    return $this->routine;
  }
  /** @param string */
  public function setStep($step)
  {
    $this->step = $step;
  }
  /** @return string */
  public function getStep()
  {
    return $this->step;
  }
}

class TriggerPubsubExecutionRequest extends \Google\Model
{
  /** @var string */
  public $gCPCloudEventsMode;
  /** @var PubsubMessage */
  public $message;
  /** @var string */
  public $subscription;
  protected $internal_gapi_mappings = [
        "gCPCloudEventsMode" => "GCPCloudEventsMode",
  ];
  protected $messageType = PubsubMessage::class;
  protected $messageDataType = '';
  /** @param string */
  public function setGCPCloudEventsMode($gCPCloudEventsMode)
  {
    $this->gCPCloudEventsMode = $gCPCloudEventsMode;
  }
  /** @return string */
  public function getGCPCloudEventsMode()
  {
    return $this->gCPCloudEventsMode;
  }
  /** @param PubsubMessage */
  public function setMessage(PubsubMessage $message)
  {
    $this->message = $message;
  }
  /** @return PubsubMessage */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param string */
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return string */
  public function getSubscription()
  {
    return $this->subscription;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelExecutionRequest::class, 'Google_Service_WorkflowExecutions_CancelExecutionRequest');
class_alias(Error::class, 'Google_Service_WorkflowExecutions_Error');
class_alias(Execution::class, 'Google_Service_WorkflowExecutions_Execution');
class_alias(ListExecutionsResponse::class, 'Google_Service_WorkflowExecutions_ListExecutionsResponse');
class_alias(Position::class, 'Google_Service_WorkflowExecutions_Position');
class_alias(PubsubMessage::class, 'Google_Service_WorkflowExecutions_PubsubMessage');
class_alias(StackTrace::class, 'Google_Service_WorkflowExecutions_StackTrace');
class_alias(StackTraceElement::class, 'Google_Service_WorkflowExecutions_StackTraceElement');
class_alias(Status::class, 'Google_Service_WorkflowExecutions_Status');
class_alias(Step::class, 'Google_Service_WorkflowExecutions_Step');
class_alias(TriggerPubsubExecutionRequest::class, 'Google_Service_WorkflowExecutions_TriggerPubsubExecutionRequest');
