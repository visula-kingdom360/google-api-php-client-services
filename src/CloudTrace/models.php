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

namespace Google\Service\CloudTrace;

class Annotation extends \Google\Model
{
  /** @var Attributes */
  public $attributes;
  /** @var TruncatableString */
  public $description;
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  protected $descriptionType = TruncatableString::class;
  protected $descriptionDataType = '';
  /** @param Attributes */
  public function setAttributes(Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return Attributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param TruncatableString */
  public function setDescription(TruncatableString $description)
  {
    $this->description = $description;
  }
  /** @return TruncatableString */
  public function getDescription()
  {
    return $this->description;
  }
}

class AttributeValue extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $intValue;
  /** @var TruncatableString */
  public $stringValue;
  protected $stringValueType = TruncatableString::class;
  protected $stringValueDataType = '';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param TruncatableString */
  public function setStringValue(TruncatableString $stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return TruncatableString */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class Attributes extends \Google\Model
{
  /** @var AttributeValue[] */
  public $attributeMap;
  /** @var int */
  public $droppedAttributesCount;
  protected $attributeMapType = AttributeValue::class;
  protected $attributeMapDataType = 'map';
  /** @param AttributeValue[] */
  public function setAttributeMap($attributeMap)
  {
    $this->attributeMap = $attributeMap;
  }
  /** @return AttributeValue[] */
  public function getAttributeMap()
  {
    return $this->attributeMap;
  }
  /** @param int */
  public function setDroppedAttributesCount($droppedAttributesCount)
  {
    $this->droppedAttributesCount = $droppedAttributesCount;
  }
  /** @return int */
  public function getDroppedAttributesCount()
  {
    return $this->droppedAttributesCount;
  }
}

class BatchWriteSpansRequest extends \Google\Collection
{
  /** @var Span[] */
  public $spans;
  protected $collection_key = 'spans';
  protected $spansType = Span::class;
  protected $spansDataType = 'array';
  /** @param Span[] */
  public function setSpans($spans)
  {
    $this->spans = $spans;
  }
  /** @return Span[] */
  public function getSpans()
  {
    return $this->spans;
  }
}

class CloudtraceEmpty extends \Google\Model
{
}

class Link extends \Google\Model
{
  /** @var Attributes */
  public $attributes;
  /** @var string */
  public $spanId;
  /** @var string */
  public $traceId;
  /** @var string */
  public $type;
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  /** @param Attributes */
  public function setAttributes(Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return Attributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  /** @return string */
  public function getSpanId()
  {
    return $this->spanId;
  }
  /** @param string */
  public function setTraceId($traceId)
  {
    $this->traceId = $traceId;
  }
  /** @return string */
  public function getTraceId()
  {
    return $this->traceId;
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

class Links extends \Google\Collection
{
  /** @var int */
  public $droppedLinksCount;
  /** @var Link[] */
  public $link;
  protected $collection_key = 'link';
  protected $linkType = Link::class;
  protected $linkDataType = 'array';
  /** @param int */
  public function setDroppedLinksCount($droppedLinksCount)
  {
    $this->droppedLinksCount = $droppedLinksCount;
  }
  /** @return int */
  public function getDroppedLinksCount()
  {
    return $this->droppedLinksCount;
  }
  /** @param Link[] */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return Link[] */
  public function getLink()
  {
    return $this->link;
  }
}

class MessageEvent extends \Google\Model
{
  /** @var string */
  public $compressedSizeBytes;
  /** @var string */
  public $id;
  /** @var string */
  public $type;
  /** @var string */
  public $uncompressedSizeBytes;

  /** @param string */
  public function setCompressedSizeBytes($compressedSizeBytes)
  {
    $this->compressedSizeBytes = $compressedSizeBytes;
  }
  /** @return string */
  public function getCompressedSizeBytes()
  {
    return $this->compressedSizeBytes;
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
  public function setUncompressedSizeBytes($uncompressedSizeBytes)
  {
    $this->uncompressedSizeBytes = $uncompressedSizeBytes;
  }
  /** @return string */
  public function getUncompressedSizeBytes()
  {
    return $this->uncompressedSizeBytes;
  }
}

class Module extends \Google\Model
{
  /** @var TruncatableString */
  public $buildId;
  /** @var TruncatableString */
  public $module;
  protected $buildIdType = TruncatableString::class;
  protected $buildIdDataType = '';
  protected $moduleType = TruncatableString::class;
  protected $moduleDataType = '';
  /** @param TruncatableString */
  public function setBuildId(TruncatableString $buildId)
  {
    $this->buildId = $buildId;
  }
  /** @return TruncatableString */
  public function getBuildId()
  {
    return $this->buildId;
  }
  /** @param TruncatableString */
  public function setModule(TruncatableString $module)
  {
    $this->module = $module;
  }
  /** @return TruncatableString */
  public function getModule()
  {
    return $this->module;
  }
}

class Span extends \Google\Model
{
  /** @var Attributes */
  public $attributes;
  /** @var int */
  public $childSpanCount;
  /** @var TruncatableString */
  public $displayName;
  /** @var string */
  public $endTime;
  /** @var Links */
  public $links;
  /** @var string */
  public $name;
  /** @var string */
  public $parentSpanId;
  /** @var bool */
  public $sameProcessAsParentSpan;
  /** @var string */
  public $spanId;
  /** @var string */
  public $spanKind;
  /** @var StackTrace */
  public $stackTrace;
  /** @var string */
  public $startTime;
  /** @var Status */
  public $status;
  /** @var TimeEvents */
  public $timeEvents;
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  protected $displayNameType = TruncatableString::class;
  protected $displayNameDataType = '';
  protected $linksType = Links::class;
  protected $linksDataType = '';
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  protected $timeEventsType = TimeEvents::class;
  protected $timeEventsDataType = '';
  /** @param Attributes */
  public function setAttributes(Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return Attributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param int */
  public function setChildSpanCount($childSpanCount)
  {
    $this->childSpanCount = $childSpanCount;
  }
  /** @return int */
  public function getChildSpanCount()
  {
    return $this->childSpanCount;
  }
  /** @param TruncatableString */
  public function setDisplayName(TruncatableString $displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return TruncatableString */
  public function getDisplayName()
  {
    return $this->displayName;
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
  /** @param Links */
  public function setLinks(Links $links)
  {
    $this->links = $links;
  }
  /** @return Links */
  public function getLinks()
  {
    return $this->links;
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
  public function setParentSpanId($parentSpanId)
  {
    $this->parentSpanId = $parentSpanId;
  }
  /** @return string */
  public function getParentSpanId()
  {
    return $this->parentSpanId;
  }
  /** @param bool */
  public function setSameProcessAsParentSpan($sameProcessAsParentSpan)
  {
    $this->sameProcessAsParentSpan = $sameProcessAsParentSpan;
  }
  /** @return bool */
  public function getSameProcessAsParentSpan()
  {
    return $this->sameProcessAsParentSpan;
  }
  /** @param string */
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  /** @return string */
  public function getSpanId()
  {
    return $this->spanId;
  }
  /** @param string */
  public function setSpanKind($spanKind)
  {
    $this->spanKind = $spanKind;
  }
  /** @return string */
  public function getSpanKind()
  {
    return $this->spanKind;
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
  /** @param TimeEvents */
  public function setTimeEvents(TimeEvents $timeEvents)
  {
    $this->timeEvents = $timeEvents;
  }
  /** @return TimeEvents */
  public function getTimeEvents()
  {
    return $this->timeEvents;
  }
}

class StackFrame extends \Google\Model
{
  /** @var string */
  public $columnNumber;
  /** @var TruncatableString */
  public $fileName;
  /** @var TruncatableString */
  public $functionName;
  /** @var string */
  public $lineNumber;
  /** @var Module */
  public $loadModule;
  /** @var TruncatableString */
  public $originalFunctionName;
  /** @var TruncatableString */
  public $sourceVersion;
  protected $fileNameType = TruncatableString::class;
  protected $fileNameDataType = '';
  protected $functionNameType = TruncatableString::class;
  protected $functionNameDataType = '';
  protected $loadModuleType = Module::class;
  protected $loadModuleDataType = '';
  protected $originalFunctionNameType = TruncatableString::class;
  protected $originalFunctionNameDataType = '';
  protected $sourceVersionType = TruncatableString::class;
  protected $sourceVersionDataType = '';
  /** @param string */
  public function setColumnNumber($columnNumber)
  {
    $this->columnNumber = $columnNumber;
  }
  /** @return string */
  public function getColumnNumber()
  {
    return $this->columnNumber;
  }
  /** @param TruncatableString */
  public function setFileName(TruncatableString $fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return TruncatableString */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param TruncatableString */
  public function setFunctionName(TruncatableString $functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return TruncatableString */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /** @param string */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return string */
  public function getLineNumber()
  {
    return $this->lineNumber;
  }
  /** @param Module */
  public function setLoadModule(Module $loadModule)
  {
    $this->loadModule = $loadModule;
  }
  /** @return Module */
  public function getLoadModule()
  {
    return $this->loadModule;
  }
  /** @param TruncatableString */
  public function setOriginalFunctionName(TruncatableString $originalFunctionName)
  {
    $this->originalFunctionName = $originalFunctionName;
  }
  /** @return TruncatableString */
  public function getOriginalFunctionName()
  {
    return $this->originalFunctionName;
  }
  /** @param TruncatableString */
  public function setSourceVersion(TruncatableString $sourceVersion)
  {
    $this->sourceVersion = $sourceVersion;
  }
  /** @return TruncatableString */
  public function getSourceVersion()
  {
    return $this->sourceVersion;
  }
}

class StackFrames extends \Google\Collection
{
  /** @var int */
  public $droppedFramesCount;
  /** @var StackFrame[] */
  public $frame;
  protected $collection_key = 'frame';
  protected $frameType = StackFrame::class;
  protected $frameDataType = 'array';
  /** @param int */
  public function setDroppedFramesCount($droppedFramesCount)
  {
    $this->droppedFramesCount = $droppedFramesCount;
  }
  /** @return int */
  public function getDroppedFramesCount()
  {
    return $this->droppedFramesCount;
  }
  /** @param StackFrame[] */
  public function setFrame($frame)
  {
    $this->frame = $frame;
  }
  /** @return StackFrame[] */
  public function getFrame()
  {
    return $this->frame;
  }
}

class StackTrace extends \Google\Model
{
  /** @var StackFrames */
  public $stackFrames;
  /** @var string */
  public $stackTraceHashId;
  protected $stackFramesType = StackFrames::class;
  protected $stackFramesDataType = '';
  /** @param StackFrames */
  public function setStackFrames(StackFrames $stackFrames)
  {
    $this->stackFrames = $stackFrames;
  }
  /** @return StackFrames */
  public function getStackFrames()
  {
    return $this->stackFrames;
  }
  /** @param string */
  public function setStackTraceHashId($stackTraceHashId)
  {
    $this->stackTraceHashId = $stackTraceHashId;
  }
  /** @return string */
  public function getStackTraceHashId()
  {
    return $this->stackTraceHashId;
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

class TimeEvent extends \Google\Model
{
  /** @var Annotation */
  public $annotation;
  /** @var MessageEvent */
  public $messageEvent;
  /** @var string */
  public $time;
  protected $annotationType = Annotation::class;
  protected $annotationDataType = '';
  protected $messageEventType = MessageEvent::class;
  protected $messageEventDataType = '';
  /** @param Annotation */
  public function setAnnotation(Annotation $annotation)
  {
    $this->annotation = $annotation;
  }
  /** @return Annotation */
  public function getAnnotation()
  {
    return $this->annotation;
  }
  /** @param MessageEvent */
  public function setMessageEvent(MessageEvent $messageEvent)
  {
    $this->messageEvent = $messageEvent;
  }
  /** @return MessageEvent */
  public function getMessageEvent()
  {
    return $this->messageEvent;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class TimeEvents extends \Google\Collection
{
  /** @var int */
  public $droppedAnnotationsCount;
  /** @var int */
  public $droppedMessageEventsCount;
  /** @var TimeEvent[] */
  public $timeEvent;
  protected $collection_key = 'timeEvent';
  protected $timeEventType = TimeEvent::class;
  protected $timeEventDataType = 'array';
  /** @param int */
  public function setDroppedAnnotationsCount($droppedAnnotationsCount)
  {
    $this->droppedAnnotationsCount = $droppedAnnotationsCount;
  }
  /** @return int */
  public function getDroppedAnnotationsCount()
  {
    return $this->droppedAnnotationsCount;
  }
  /** @param int */
  public function setDroppedMessageEventsCount($droppedMessageEventsCount)
  {
    $this->droppedMessageEventsCount = $droppedMessageEventsCount;
  }
  /** @return int */
  public function getDroppedMessageEventsCount()
  {
    return $this->droppedMessageEventsCount;
  }
  /** @param TimeEvent[] */
  public function setTimeEvent($timeEvent)
  {
    $this->timeEvent = $timeEvent;
  }
  /** @return TimeEvent[] */
  public function getTimeEvent()
  {
    return $this->timeEvent;
  }
}

class TruncatableString extends \Google\Model
{
  /** @var int */
  public $truncatedByteCount;
  /** @var string */
  public $value;

  /** @param int */
  public function setTruncatedByteCount($truncatedByteCount)
  {
    $this->truncatedByteCount = $truncatedByteCount;
  }
  /** @return int */
  public function getTruncatedByteCount()
  {
    return $this->truncatedByteCount;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Annotation::class, 'Google_Service_CloudTrace_Annotation');
class_alias(AttributeValue::class, 'Google_Service_CloudTrace_AttributeValue');
class_alias(Attributes::class, 'Google_Service_CloudTrace_Attributes');
class_alias(BatchWriteSpansRequest::class, 'Google_Service_CloudTrace_BatchWriteSpansRequest');
class_alias(CloudtraceEmpty::class, 'Google_Service_CloudTrace_CloudtraceEmpty');
class_alias(Link::class, 'Google_Service_CloudTrace_Link');
class_alias(Links::class, 'Google_Service_CloudTrace_Links');
class_alias(MessageEvent::class, 'Google_Service_CloudTrace_MessageEvent');
class_alias(Module::class, 'Google_Service_CloudTrace_Module');
class_alias(Span::class, 'Google_Service_CloudTrace_Span');
class_alias(StackFrame::class, 'Google_Service_CloudTrace_StackFrame');
class_alias(StackFrames::class, 'Google_Service_CloudTrace_StackFrames');
class_alias(StackTrace::class, 'Google_Service_CloudTrace_StackTrace');
class_alias(Status::class, 'Google_Service_CloudTrace_Status');
class_alias(TimeEvent::class, 'Google_Service_CloudTrace_TimeEvent');
class_alias(TimeEvents::class, 'Google_Service_CloudTrace_TimeEvents');
class_alias(TruncatableString::class, 'Google_Service_CloudTrace_TruncatableString');
