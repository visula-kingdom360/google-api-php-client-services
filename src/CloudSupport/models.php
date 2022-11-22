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

namespace Google\Service\CloudSupport;

class Actor extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $googleSupport;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setGoogleSupport($googleSupport)
  {
    $this->googleSupport = $googleSupport;
  }
  /** @return bool */
  public function getGoogleSupport()
  {
    return $this->googleSupport;
  }
}

class Attachment extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var Actor */
  public $creator;
  /** @var string */
  public $filename;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $name;
  /** @var string */
  public $sizeBytes;
  protected $creatorType = Actor::class;
  protected $creatorDataType = '';
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
  /** @param Actor */
  public function setCreator(Actor $creator)
  {
    $this->creator = $creator;
  }
  /** @return Actor */
  public function getCreator()
  {
    return $this->creator;
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
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return string */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
}

class Blobstore2Info extends \Google\Model
{
  /** @var string */
  public $blobGeneration;
  /** @var string */
  public $blobId;
  /** @var string */
  public $downloadReadHandle;
  /** @var string */
  public $readToken;
  /** @var string */
  public $uploadMetadataContainer;

  /** @param string */
  public function setBlobGeneration($blobGeneration)
  {
    $this->blobGeneration = $blobGeneration;
  }
  /** @return string */
  public function getBlobGeneration()
  {
    return $this->blobGeneration;
  }
  /** @param string */
  public function setBlobId($blobId)
  {
    $this->blobId = $blobId;
  }
  /** @return string */
  public function getBlobId()
  {
    return $this->blobId;
  }
  /** @param string */
  public function setDownloadReadHandle($downloadReadHandle)
  {
    $this->downloadReadHandle = $downloadReadHandle;
  }
  /** @return string */
  public function getDownloadReadHandle()
  {
    return $this->downloadReadHandle;
  }
  /** @param string */
  public function setReadToken($readToken)
  {
    $this->readToken = $readToken;
  }
  /** @return string */
  public function getReadToken()
  {
    return $this->readToken;
  }
  /** @param string */
  public function setUploadMetadataContainer($uploadMetadataContainer)
  {
    $this->uploadMetadataContainer = $uploadMetadataContainer;
  }
  /** @return string */
  public function getUploadMetadataContainer()
  {
    return $this->uploadMetadataContainer;
  }
}

class CaseClassification extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;

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

class CloseCaseRequest extends \Google\Model
{
}

class CloudsupportCase extends \Google\Collection
{
  /** @var CaseClassification */
  public $classification;
  /** @var string */
  public $createTime;
  /** @var Actor */
  public $creator;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $escalated;
  /** @var string */
  public $name;
  /** @var string */
  public $priority;
  /** @var string */
  public $severity;
  /** @var string */
  public $state;
  /** @var string[] */
  public $subscriberEmailAddresses;
  /** @var bool */
  public $testCase;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'subscriberEmailAddresses';
  protected $classificationType = CaseClassification::class;
  protected $classificationDataType = '';
  protected $creatorType = Actor::class;
  protected $creatorDataType = '';
  /** @param CaseClassification */
  public function setClassification(CaseClassification $classification)
  {
    $this->classification = $classification;
  }
  /** @return CaseClassification */
  public function getClassification()
  {
    return $this->classification;
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
  /** @param Actor */
  public function setCreator(Actor $creator)
  {
    $this->creator = $creator;
  }
  /** @return Actor */
  public function getCreator()
  {
    return $this->creator;
  }
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
  public function setEscalated($escalated)
  {
    $this->escalated = $escalated;
  }
  /** @return bool */
  public function getEscalated()
  {
    return $this->escalated;
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
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
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
  /** @param string[] */
  public function setSubscriberEmailAddresses($subscriberEmailAddresses)
  {
    $this->subscriberEmailAddresses = $subscriberEmailAddresses;
  }
  /** @return string[] */
  public function getSubscriberEmailAddresses()
  {
    return $this->subscriberEmailAddresses;
  }
  /** @param bool */
  public function setTestCase($testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return bool */
  public function getTestCase()
  {
    return $this->testCase;
  }
  /** @param string */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
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
}

class Comment extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $createTime;
  /** @var Actor */
  public $creator;
  /** @var string */
  public $name;
  /** @var string */
  public $plainTextBody;
  protected $creatorType = Actor::class;
  protected $creatorDataType = '';
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
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
  /** @param Actor */
  public function setCreator(Actor $creator)
  {
    $this->creator = $creator;
  }
  /** @return Actor */
  public function getCreator()
  {
    return $this->creator;
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
  public function setPlainTextBody($plainTextBody)
  {
    $this->plainTextBody = $plainTextBody;
  }
  /** @return string */
  public function getPlainTextBody()
  {
    return $this->plainTextBody;
  }
}

class CompositeMedia extends \Google\Model
{
  /** @var string */
  public $blobRef;
  /** @var Blobstore2Info */
  public $blobstore2Info;
  /** @var string */
  public $cosmoBinaryReference;
  /** @var string */
  public $crc32cHash;
  /** @var string */
  public $inline;
  /** @var string */
  public $length;
  /** @var string */
  public $md5Hash;
  /** @var ObjectId */
  public $objectId;
  /** @var string */
  public $path;
  /** @var string */
  public $referenceType;
  /** @var string */
  public $sha1Hash;
  protected $blobstore2InfoType = Blobstore2Info::class;
  protected $blobstore2InfoDataType = '';
  protected $objectIdType = ObjectId::class;
  protected $objectIdDataType = '';
  /** @param string */
  public function setBlobRef($blobRef)
  {
    $this->blobRef = $blobRef;
  }
  /** @return string */
  public function getBlobRef()
  {
    return $this->blobRef;
  }
  /** @param Blobstore2Info */
  public function setBlobstore2Info(Blobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  /** @return Blobstore2Info */
  public function getBlobstore2Info()
  {
    return $this->blobstore2Info;
  }
  /** @param string */
  public function setCosmoBinaryReference($cosmoBinaryReference)
  {
    $this->cosmoBinaryReference = $cosmoBinaryReference;
  }
  /** @return string */
  public function getCosmoBinaryReference()
  {
    return $this->cosmoBinaryReference;
  }
  /** @param string */
  public function setCrc32cHash($crc32cHash)
  {
    $this->crc32cHash = $crc32cHash;
  }
  /** @return string */
  public function getCrc32cHash()
  {
    return $this->crc32cHash;
  }
  /** @param string */
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  /** @return string */
  public function getInline()
  {
    return $this->inline;
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
  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }
  /** @return string */
  public function getMd5Hash()
  {
    return $this->md5Hash;
  }
  /** @param ObjectId */
  public function setObjectId(ObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return ObjectId */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setReferenceType($referenceType)
  {
    $this->referenceType = $referenceType;
  }
  /** @return string */
  public function getReferenceType()
  {
    return $this->referenceType;
  }
  /** @param string */
  public function setSha1Hash($sha1Hash)
  {
    $this->sha1Hash = $sha1Hash;
  }
  /** @return string */
  public function getSha1Hash()
  {
    return $this->sha1Hash;
  }
}

class ContentTypeInfo extends \Google\Model
{
  /** @var string */
  public $bestGuess;
  /** @var string */
  public $fromBytes;
  /** @var string */
  public $fromFileName;
  /** @var string */
  public $fromHeader;
  /** @var string */
  public $fromUrlPath;

  /** @param string */
  public function setBestGuess($bestGuess)
  {
    $this->bestGuess = $bestGuess;
  }
  /** @return string */
  public function getBestGuess()
  {
    return $this->bestGuess;
  }
  /** @param string */
  public function setFromBytes($fromBytes)
  {
    $this->fromBytes = $fromBytes;
  }
  /** @return string */
  public function getFromBytes()
  {
    return $this->fromBytes;
  }
  /** @param string */
  public function setFromFileName($fromFileName)
  {
    $this->fromFileName = $fromFileName;
  }
  /** @return string */
  public function getFromFileName()
  {
    return $this->fromFileName;
  }
  /** @param string */
  public function setFromHeader($fromHeader)
  {
    $this->fromHeader = $fromHeader;
  }
  /** @return string */
  public function getFromHeader()
  {
    return $this->fromHeader;
  }
  /** @param string */
  public function setFromUrlPath($fromUrlPath)
  {
    $this->fromUrlPath = $fromUrlPath;
  }
  /** @return string */
  public function getFromUrlPath()
  {
    return $this->fromUrlPath;
  }
}

class CreateAttachmentRequest extends \Google\Model
{
  /** @var Attachment */
  public $attachment;
  protected $attachmentType = Attachment::class;
  protected $attachmentDataType = '';
  /** @param Attachment */
  public function setAttachment(Attachment $attachment)
  {
    $this->attachment = $attachment;
  }
  /** @return Attachment */
  public function getAttachment()
  {
    return $this->attachment;
  }
}

class DiffChecksumsResponse extends \Google\Model
{
  /** @var CompositeMedia */
  public $checksumsLocation;
  /** @var string */
  public $chunkSizeBytes;
  /** @var CompositeMedia */
  public $objectLocation;
  /** @var string */
  public $objectSizeBytes;
  /** @var string */
  public $objectVersion;
  protected $checksumsLocationType = CompositeMedia::class;
  protected $checksumsLocationDataType = '';
  protected $objectLocationType = CompositeMedia::class;
  protected $objectLocationDataType = '';
  /** @param CompositeMedia */
  public function setChecksumsLocation(CompositeMedia $checksumsLocation)
  {
    $this->checksumsLocation = $checksumsLocation;
  }
  /** @return CompositeMedia */
  public function getChecksumsLocation()
  {
    return $this->checksumsLocation;
  }
  /** @param string */
  public function setChunkSizeBytes($chunkSizeBytes)
  {
    $this->chunkSizeBytes = $chunkSizeBytes;
  }
  /** @return string */
  public function getChunkSizeBytes()
  {
    return $this->chunkSizeBytes;
  }
  /** @param CompositeMedia */
  public function setObjectLocation(CompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  /** @return CompositeMedia */
  public function getObjectLocation()
  {
    return $this->objectLocation;
  }
  /** @param string */
  public function setObjectSizeBytes($objectSizeBytes)
  {
    $this->objectSizeBytes = $objectSizeBytes;
  }
  /** @return string */
  public function getObjectSizeBytes()
  {
    return $this->objectSizeBytes;
  }
  /** @param string */
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  /** @return string */
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class DiffDownloadResponse extends \Google\Model
{
  /** @var CompositeMedia */
  public $objectLocation;
  protected $objectLocationType = CompositeMedia::class;
  protected $objectLocationDataType = '';
  /** @param CompositeMedia */
  public function setObjectLocation(CompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  /** @return CompositeMedia */
  public function getObjectLocation()
  {
    return $this->objectLocation;
  }
}

class DiffUploadRequest extends \Google\Model
{
  /** @var CompositeMedia */
  public $checksumsInfo;
  /** @var CompositeMedia */
  public $objectInfo;
  /** @var string */
  public $objectVersion;
  protected $checksumsInfoType = CompositeMedia::class;
  protected $checksumsInfoDataType = '';
  protected $objectInfoType = CompositeMedia::class;
  protected $objectInfoDataType = '';
  /** @param CompositeMedia */
  public function setChecksumsInfo(CompositeMedia $checksumsInfo)
  {
    $this->checksumsInfo = $checksumsInfo;
  }
  /** @return CompositeMedia */
  public function getChecksumsInfo()
  {
    return $this->checksumsInfo;
  }
  /** @param CompositeMedia */
  public function setObjectInfo(CompositeMedia $objectInfo)
  {
    $this->objectInfo = $objectInfo;
  }
  /** @return CompositeMedia */
  public function getObjectInfo()
  {
    return $this->objectInfo;
  }
  /** @param string */
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  /** @return string */
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class DiffUploadResponse extends \Google\Model
{
  /** @var string */
  public $objectVersion;
  /** @var CompositeMedia */
  public $originalObject;
  protected $originalObjectType = CompositeMedia::class;
  protected $originalObjectDataType = '';
  /** @param string */
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  /** @return string */
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
  /** @param CompositeMedia */
  public function setOriginalObject(CompositeMedia $originalObject)
  {
    $this->originalObject = $originalObject;
  }
  /** @return CompositeMedia */
  public function getOriginalObject()
  {
    return $this->originalObject;
  }
}

class DiffVersionResponse extends \Google\Model
{
  /** @var string */
  public $objectSizeBytes;
  /** @var string */
  public $objectVersion;

  /** @param string */
  public function setObjectSizeBytes($objectSizeBytes)
  {
    $this->objectSizeBytes = $objectSizeBytes;
  }
  /** @return string */
  public function getObjectSizeBytes()
  {
    return $this->objectSizeBytes;
  }
  /** @param string */
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  /** @return string */
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class DownloadParameters extends \Google\Model
{
  /** @var bool */
  public $allowGzipCompression;
  /** @var bool */
  public $ignoreRange;

  /** @param bool */
  public function setAllowGzipCompression($allowGzipCompression)
  {
    $this->allowGzipCompression = $allowGzipCompression;
  }
  /** @return bool */
  public function getAllowGzipCompression()
  {
    return $this->allowGzipCompression;
  }
  /** @param bool */
  public function setIgnoreRange($ignoreRange)
  {
    $this->ignoreRange = $ignoreRange;
  }
  /** @return bool */
  public function getIgnoreRange()
  {
    return $this->ignoreRange;
  }
}

class EscalateCaseRequest extends \Google\Model
{
  /** @var Escalation */
  public $escalation;
  protected $escalationType = Escalation::class;
  protected $escalationDataType = '';
  /** @param Escalation */
  public function setEscalation(Escalation $escalation)
  {
    $this->escalation = $escalation;
  }
  /** @return Escalation */
  public function getEscalation()
  {
    return $this->escalation;
  }
}

class Escalation extends \Google\Model
{
  /** @var string */
  public $justification;
  /** @var string */
  public $reason;

  /** @param string */
  public function setJustification($justification)
  {
    $this->justification = $justification;
  }
  /** @return string */
  public function getJustification()
  {
    return $this->justification;
  }
  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class ListAttachmentsResponse extends \Google\Collection
{
  /** @var Attachment[] */
  public $attachments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'attachments';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  /** @param Attachment[] */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /** @return Attachment[] */
  public function getAttachments()
  {
    return $this->attachments;
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

class ListCasesResponse extends \Google\Collection
{
  /** @var CloudsupportCase[] */
  public $cases;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'cases';
  protected $casesType = CloudsupportCase::class;
  protected $casesDataType = 'array';
  /** @param CloudsupportCase[] */
  public function setCases($cases)
  {
    $this->cases = $cases;
  }
  /** @return CloudsupportCase[] */
  public function getCases()
  {
    return $this->cases;
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

class ListCommentsResponse extends \Google\Collection
{
  /** @var Comment[] */
  public $comments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'comments';
  protected $commentsType = Comment::class;
  protected $commentsDataType = 'array';
  /** @param Comment[] */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return Comment[] */
  public function getComments()
  {
    return $this->comments;
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

class Media extends \Google\Collection
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $bigstoreObjectRef;
  /** @var string */
  public $blobRef;
  /** @var Blobstore2Info */
  public $blobstore2Info;
  /** @var CompositeMedia[] */
  public $compositeMedia;
  /** @var string */
  public $contentType;
  /** @var ContentTypeInfo */
  public $contentTypeInfo;
  /** @var string */
  public $cosmoBinaryReference;
  /** @var string */
  public $crc32cHash;
  /** @var DiffChecksumsResponse */
  public $diffChecksumsResponse;
  /** @var DiffDownloadResponse */
  public $diffDownloadResponse;
  /** @var DiffUploadRequest */
  public $diffUploadRequest;
  /** @var DiffUploadResponse */
  public $diffUploadResponse;
  /** @var DiffVersionResponse */
  public $diffVersionResponse;
  /** @var DownloadParameters */
  public $downloadParameters;
  /** @var string */
  public $filename;
  /** @var string */
  public $hash;
  /** @var bool */
  public $hashVerified;
  /** @var string */
  public $inline;
  /** @var bool */
  public $isPotentialRetry;
  /** @var string */
  public $length;
  /** @var string */
  public $md5Hash;
  /** @var string */
  public $mediaId;
  /** @var ObjectId */
  public $objectId;
  /** @var string */
  public $path;
  /** @var string */
  public $referenceType;
  /** @var string */
  public $sha1Hash;
  /** @var string */
  public $sha256Hash;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $token;
  protected $collection_key = 'compositeMedia';
  protected $blobstore2InfoType = Blobstore2Info::class;
  protected $blobstore2InfoDataType = '';
  protected $compositeMediaType = CompositeMedia::class;
  protected $compositeMediaDataType = 'array';
  protected $contentTypeInfoType = ContentTypeInfo::class;
  protected $contentTypeInfoDataType = '';
  protected $diffChecksumsResponseType = DiffChecksumsResponse::class;
  protected $diffChecksumsResponseDataType = '';
  protected $diffDownloadResponseType = DiffDownloadResponse::class;
  protected $diffDownloadResponseDataType = '';
  protected $diffUploadRequestType = DiffUploadRequest::class;
  protected $diffUploadRequestDataType = '';
  protected $diffUploadResponseType = DiffUploadResponse::class;
  protected $diffUploadResponseDataType = '';
  protected $diffVersionResponseType = DiffVersionResponse::class;
  protected $diffVersionResponseDataType = '';
  protected $downloadParametersType = DownloadParameters::class;
  protected $downloadParametersDataType = '';
  protected $objectIdType = ObjectId::class;
  protected $objectIdDataType = '';
  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param string */
  public function setBigstoreObjectRef($bigstoreObjectRef)
  {
    $this->bigstoreObjectRef = $bigstoreObjectRef;
  }
  /** @return string */
  public function getBigstoreObjectRef()
  {
    return $this->bigstoreObjectRef;
  }
  /** @param string */
  public function setBlobRef($blobRef)
  {
    $this->blobRef = $blobRef;
  }
  /** @return string */
  public function getBlobRef()
  {
    return $this->blobRef;
  }
  /** @param Blobstore2Info */
  public function setBlobstore2Info(Blobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  /** @return Blobstore2Info */
  public function getBlobstore2Info()
  {
    return $this->blobstore2Info;
  }
  /** @param CompositeMedia[] */
  public function setCompositeMedia($compositeMedia)
  {
    $this->compositeMedia = $compositeMedia;
  }
  /** @return CompositeMedia[] */
  public function getCompositeMedia()
  {
    return $this->compositeMedia;
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
  /** @param ContentTypeInfo */
  public function setContentTypeInfo(ContentTypeInfo $contentTypeInfo)
  {
    $this->contentTypeInfo = $contentTypeInfo;
  }
  /** @return ContentTypeInfo */
  public function getContentTypeInfo()
  {
    return $this->contentTypeInfo;
  }
  /** @param string */
  public function setCosmoBinaryReference($cosmoBinaryReference)
  {
    $this->cosmoBinaryReference = $cosmoBinaryReference;
  }
  /** @return string */
  public function getCosmoBinaryReference()
  {
    return $this->cosmoBinaryReference;
  }
  /** @param string */
  public function setCrc32cHash($crc32cHash)
  {
    $this->crc32cHash = $crc32cHash;
  }
  /** @return string */
  public function getCrc32cHash()
  {
    return $this->crc32cHash;
  }
  /** @param DiffChecksumsResponse */
  public function setDiffChecksumsResponse(DiffChecksumsResponse $diffChecksumsResponse)
  {
    $this->diffChecksumsResponse = $diffChecksumsResponse;
  }
  /** @return DiffChecksumsResponse */
  public function getDiffChecksumsResponse()
  {
    return $this->diffChecksumsResponse;
  }
  /** @param DiffDownloadResponse */
  public function setDiffDownloadResponse(DiffDownloadResponse $diffDownloadResponse)
  {
    $this->diffDownloadResponse = $diffDownloadResponse;
  }
  /** @return DiffDownloadResponse */
  public function getDiffDownloadResponse()
  {
    return $this->diffDownloadResponse;
  }
  /** @param DiffUploadRequest */
  public function setDiffUploadRequest(DiffUploadRequest $diffUploadRequest)
  {
    $this->diffUploadRequest = $diffUploadRequest;
  }
  /** @return DiffUploadRequest */
  public function getDiffUploadRequest()
  {
    return $this->diffUploadRequest;
  }
  /** @param DiffUploadResponse */
  public function setDiffUploadResponse(DiffUploadResponse $diffUploadResponse)
  {
    $this->diffUploadResponse = $diffUploadResponse;
  }
  /** @return DiffUploadResponse */
  public function getDiffUploadResponse()
  {
    return $this->diffUploadResponse;
  }
  /** @param DiffVersionResponse */
  public function setDiffVersionResponse(DiffVersionResponse $diffVersionResponse)
  {
    $this->diffVersionResponse = $diffVersionResponse;
  }
  /** @return DiffVersionResponse */
  public function getDiffVersionResponse()
  {
    return $this->diffVersionResponse;
  }
  /** @param DownloadParameters */
  public function setDownloadParameters(DownloadParameters $downloadParameters)
  {
    $this->downloadParameters = $downloadParameters;
  }
  /** @return DownloadParameters */
  public function getDownloadParameters()
  {
    return $this->downloadParameters;
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
  /** @param string */
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
  }
  /** @param bool */
  public function setHashVerified($hashVerified)
  {
    $this->hashVerified = $hashVerified;
  }
  /** @return bool */
  public function getHashVerified()
  {
    return $this->hashVerified;
  }
  /** @param string */
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  /** @return string */
  public function getInline()
  {
    return $this->inline;
  }
  /** @param bool */
  public function setIsPotentialRetry($isPotentialRetry)
  {
    $this->isPotentialRetry = $isPotentialRetry;
  }
  /** @return bool */
  public function getIsPotentialRetry()
  {
    return $this->isPotentialRetry;
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
  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }
  /** @return string */
  public function getMd5Hash()
  {
    return $this->md5Hash;
  }
  /** @param string */
  public function setMediaId($mediaId)
  {
    $this->mediaId = $mediaId;
  }
  /** @return string */
  public function getMediaId()
  {
    return $this->mediaId;
  }
  /** @param ObjectId */
  public function setObjectId(ObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return ObjectId */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setReferenceType($referenceType)
  {
    $this->referenceType = $referenceType;
  }
  /** @return string */
  public function getReferenceType()
  {
    return $this->referenceType;
  }
  /** @param string */
  public function setSha1Hash($sha1Hash)
  {
    $this->sha1Hash = $sha1Hash;
  }
  /** @return string */
  public function getSha1Hash()
  {
    return $this->sha1Hash;
  }
  /** @param string */
  public function setSha256Hash($sha256Hash)
  {
    $this->sha256Hash = $sha256Hash;
  }
  /** @return string */
  public function getSha256Hash()
  {
    return $this->sha256Hash;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
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
}

class ObjectId extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var string */
  public $generation;
  /** @var string */
  public $objectName;

  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /** @param string */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
  }
  /** @param string */
  public function setObjectName($objectName)
  {
    $this->objectName = $objectName;
  }
  /** @return string */
  public function getObjectName()
  {
    return $this->objectName;
  }
}

class SearchCaseClassificationsResponse extends \Google\Collection
{
  /** @var CaseClassification[] */
  public $caseClassifications;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'caseClassifications';
  protected $caseClassificationsType = CaseClassification::class;
  protected $caseClassificationsDataType = 'array';
  /** @param CaseClassification[] */
  public function setCaseClassifications($caseClassifications)
  {
    $this->caseClassifications = $caseClassifications;
  }
  /** @return CaseClassification[] */
  public function getCaseClassifications()
  {
    return $this->caseClassifications;
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

class SearchCasesResponse extends \Google\Collection
{
  /** @var CloudsupportCase[] */
  public $cases;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'cases';
  protected $casesType = CloudsupportCase::class;
  protected $casesDataType = 'array';
  /** @param CloudsupportCase[] */
  public function setCases($cases)
  {
    $this->cases = $cases;
  }
  /** @return CloudsupportCase[] */
  public function getCases()
  {
    return $this->cases;
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

class WorkflowOperationMetadata extends \Google\Model
{
  /** @var string */
  public $namespace;
  /** @var string */
  public $operationAction;
  /** @var string */
  public $workflowOperationType;

  /** @param string */
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
  }
  /** @param string */
  public function setOperationAction($operationAction)
  {
    $this->operationAction = $operationAction;
  }
  /** @return string */
  public function getOperationAction()
  {
    return $this->operationAction;
  }
  /** @param string */
  public function setWorkflowOperationType($workflowOperationType)
  {
    $this->workflowOperationType = $workflowOperationType;
  }
  /** @return string */
  public function getWorkflowOperationType()
  {
    return $this->workflowOperationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Actor::class, 'Google_Service_CloudSupport_Actor');
class_alias(Attachment::class, 'Google_Service_CloudSupport_Attachment');
class_alias(Blobstore2Info::class, 'Google_Service_CloudSupport_Blobstore2Info');
class_alias(CaseClassification::class, 'Google_Service_CloudSupport_CaseClassification');
class_alias(CloseCaseRequest::class, 'Google_Service_CloudSupport_CloseCaseRequest');
class_alias(CloudsupportCase::class, 'Google_Service_CloudSupport_CloudsupportCase');
class_alias(Comment::class, 'Google_Service_CloudSupport_Comment');
class_alias(CompositeMedia::class, 'Google_Service_CloudSupport_CompositeMedia');
class_alias(ContentTypeInfo::class, 'Google_Service_CloudSupport_ContentTypeInfo');
class_alias(CreateAttachmentRequest::class, 'Google_Service_CloudSupport_CreateAttachmentRequest');
class_alias(DiffChecksumsResponse::class, 'Google_Service_CloudSupport_DiffChecksumsResponse');
class_alias(DiffDownloadResponse::class, 'Google_Service_CloudSupport_DiffDownloadResponse');
class_alias(DiffUploadRequest::class, 'Google_Service_CloudSupport_DiffUploadRequest');
class_alias(DiffUploadResponse::class, 'Google_Service_CloudSupport_DiffUploadResponse');
class_alias(DiffVersionResponse::class, 'Google_Service_CloudSupport_DiffVersionResponse');
class_alias(DownloadParameters::class, 'Google_Service_CloudSupport_DownloadParameters');
class_alias(EscalateCaseRequest::class, 'Google_Service_CloudSupport_EscalateCaseRequest');
class_alias(Escalation::class, 'Google_Service_CloudSupport_Escalation');
class_alias(ListAttachmentsResponse::class, 'Google_Service_CloudSupport_ListAttachmentsResponse');
class_alias(ListCasesResponse::class, 'Google_Service_CloudSupport_ListCasesResponse');
class_alias(ListCommentsResponse::class, 'Google_Service_CloudSupport_ListCommentsResponse');
class_alias(Media::class, 'Google_Service_CloudSupport_Media');
class_alias(ObjectId::class, 'Google_Service_CloudSupport_ObjectId');
class_alias(SearchCaseClassificationsResponse::class, 'Google_Service_CloudSupport_SearchCaseClassificationsResponse');
class_alias(SearchCasesResponse::class, 'Google_Service_CloudSupport_SearchCasesResponse');
class_alias(WorkflowOperationMetadata::class, 'Google_Service_CloudSupport_WorkflowOperationMetadata');
