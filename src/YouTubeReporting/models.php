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

namespace Google\Service\YouTubeReporting;

class GdataBlobstore2Info extends \Google\Model
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

class GdataCompositeMedia extends \Google\Model
{
  /** @var string */
  public $blobRef;
  /** @var GdataBlobstore2Info */
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
  /** @var GdataObjectId */
  public $objectId;
  /** @var string */
  public $path;
  /** @var string */
  public $referenceType;
  /** @var string */
  public $sha1Hash;
  protected $blobstore2InfoType = GdataBlobstore2Info::class;
  protected $blobstore2InfoDataType = '';
  protected $objectIdType = GdataObjectId::class;
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
  /** @param GdataBlobstore2Info */
  public function setBlobstore2Info(GdataBlobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  /** @return GdataBlobstore2Info */
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
  /** @param GdataObjectId */
  public function setObjectId(GdataObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return GdataObjectId */
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

class GdataContentTypeInfo extends \Google\Model
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

class GdataDiffChecksumsResponse extends \Google\Model
{
  /** @var GdataCompositeMedia */
  public $checksumsLocation;
  /** @var string */
  public $chunkSizeBytes;
  /** @var GdataCompositeMedia */
  public $objectLocation;
  /** @var string */
  public $objectSizeBytes;
  /** @var string */
  public $objectVersion;
  protected $checksumsLocationType = GdataCompositeMedia::class;
  protected $checksumsLocationDataType = '';
  protected $objectLocationType = GdataCompositeMedia::class;
  protected $objectLocationDataType = '';
  /** @param GdataCompositeMedia */
  public function setChecksumsLocation(GdataCompositeMedia $checksumsLocation)
  {
    $this->checksumsLocation = $checksumsLocation;
  }
  /** @return GdataCompositeMedia */
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
  /** @param GdataCompositeMedia */
  public function setObjectLocation(GdataCompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  /** @return GdataCompositeMedia */
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

class GdataDiffDownloadResponse extends \Google\Model
{
  /** @var GdataCompositeMedia */
  public $objectLocation;
  protected $objectLocationType = GdataCompositeMedia::class;
  protected $objectLocationDataType = '';
  /** @param GdataCompositeMedia */
  public function setObjectLocation(GdataCompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  /** @return GdataCompositeMedia */
  public function getObjectLocation()
  {
    return $this->objectLocation;
  }
}

class GdataDiffUploadRequest extends \Google\Model
{
  /** @var GdataCompositeMedia */
  public $checksumsInfo;
  /** @var GdataCompositeMedia */
  public $objectInfo;
  /** @var string */
  public $objectVersion;
  protected $checksumsInfoType = GdataCompositeMedia::class;
  protected $checksumsInfoDataType = '';
  protected $objectInfoType = GdataCompositeMedia::class;
  protected $objectInfoDataType = '';
  /** @param GdataCompositeMedia */
  public function setChecksumsInfo(GdataCompositeMedia $checksumsInfo)
  {
    $this->checksumsInfo = $checksumsInfo;
  }
  /** @return GdataCompositeMedia */
  public function getChecksumsInfo()
  {
    return $this->checksumsInfo;
  }
  /** @param GdataCompositeMedia */
  public function setObjectInfo(GdataCompositeMedia $objectInfo)
  {
    $this->objectInfo = $objectInfo;
  }
  /** @return GdataCompositeMedia */
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

class GdataDiffUploadResponse extends \Google\Model
{
  /** @var string */
  public $objectVersion;
  /** @var GdataCompositeMedia */
  public $originalObject;
  protected $originalObjectType = GdataCompositeMedia::class;
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
  /** @param GdataCompositeMedia */
  public function setOriginalObject(GdataCompositeMedia $originalObject)
  {
    $this->originalObject = $originalObject;
  }
  /** @return GdataCompositeMedia */
  public function getOriginalObject()
  {
    return $this->originalObject;
  }
}

class GdataDiffVersionResponse extends \Google\Model
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

class GdataDownloadParameters extends \Google\Model
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

class GdataMedia extends \Google\Collection
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $bigstoreObjectRef;
  /** @var string */
  public $blobRef;
  /** @var GdataBlobstore2Info */
  public $blobstore2Info;
  /** @var GdataCompositeMedia[] */
  public $compositeMedia;
  /** @var string */
  public $contentType;
  /** @var GdataContentTypeInfo */
  public $contentTypeInfo;
  /** @var string */
  public $cosmoBinaryReference;
  /** @var string */
  public $crc32cHash;
  /** @var GdataDiffChecksumsResponse */
  public $diffChecksumsResponse;
  /** @var GdataDiffDownloadResponse */
  public $diffDownloadResponse;
  /** @var GdataDiffUploadRequest */
  public $diffUploadRequest;
  /** @var GdataDiffUploadResponse */
  public $diffUploadResponse;
  /** @var GdataDiffVersionResponse */
  public $diffVersionResponse;
  /** @var GdataDownloadParameters */
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
  /** @var GdataObjectId */
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
  protected $blobstore2InfoType = GdataBlobstore2Info::class;
  protected $blobstore2InfoDataType = '';
  protected $compositeMediaType = GdataCompositeMedia::class;
  protected $compositeMediaDataType = 'array';
  protected $contentTypeInfoType = GdataContentTypeInfo::class;
  protected $contentTypeInfoDataType = '';
  protected $diffChecksumsResponseType = GdataDiffChecksumsResponse::class;
  protected $diffChecksumsResponseDataType = '';
  protected $diffDownloadResponseType = GdataDiffDownloadResponse::class;
  protected $diffDownloadResponseDataType = '';
  protected $diffUploadRequestType = GdataDiffUploadRequest::class;
  protected $diffUploadRequestDataType = '';
  protected $diffUploadResponseType = GdataDiffUploadResponse::class;
  protected $diffUploadResponseDataType = '';
  protected $diffVersionResponseType = GdataDiffVersionResponse::class;
  protected $diffVersionResponseDataType = '';
  protected $downloadParametersType = GdataDownloadParameters::class;
  protected $downloadParametersDataType = '';
  protected $objectIdType = GdataObjectId::class;
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
  /** @param GdataBlobstore2Info */
  public function setBlobstore2Info(GdataBlobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  /** @return GdataBlobstore2Info */
  public function getBlobstore2Info()
  {
    return $this->blobstore2Info;
  }
  /** @param GdataCompositeMedia[] */
  public function setCompositeMedia($compositeMedia)
  {
    $this->compositeMedia = $compositeMedia;
  }
  /** @return GdataCompositeMedia[] */
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
  /** @param GdataContentTypeInfo */
  public function setContentTypeInfo(GdataContentTypeInfo $contentTypeInfo)
  {
    $this->contentTypeInfo = $contentTypeInfo;
  }
  /** @return GdataContentTypeInfo */
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
  /** @param GdataDiffChecksumsResponse */
  public function setDiffChecksumsResponse(GdataDiffChecksumsResponse $diffChecksumsResponse)
  {
    $this->diffChecksumsResponse = $diffChecksumsResponse;
  }
  /** @return GdataDiffChecksumsResponse */
  public function getDiffChecksumsResponse()
  {
    return $this->diffChecksumsResponse;
  }
  /** @param GdataDiffDownloadResponse */
  public function setDiffDownloadResponse(GdataDiffDownloadResponse $diffDownloadResponse)
  {
    $this->diffDownloadResponse = $diffDownloadResponse;
  }
  /** @return GdataDiffDownloadResponse */
  public function getDiffDownloadResponse()
  {
    return $this->diffDownloadResponse;
  }
  /** @param GdataDiffUploadRequest */
  public function setDiffUploadRequest(GdataDiffUploadRequest $diffUploadRequest)
  {
    $this->diffUploadRequest = $diffUploadRequest;
  }
  /** @return GdataDiffUploadRequest */
  public function getDiffUploadRequest()
  {
    return $this->diffUploadRequest;
  }
  /** @param GdataDiffUploadResponse */
  public function setDiffUploadResponse(GdataDiffUploadResponse $diffUploadResponse)
  {
    $this->diffUploadResponse = $diffUploadResponse;
  }
  /** @return GdataDiffUploadResponse */
  public function getDiffUploadResponse()
  {
    return $this->diffUploadResponse;
  }
  /** @param GdataDiffVersionResponse */
  public function setDiffVersionResponse(GdataDiffVersionResponse $diffVersionResponse)
  {
    $this->diffVersionResponse = $diffVersionResponse;
  }
  /** @return GdataDiffVersionResponse */
  public function getDiffVersionResponse()
  {
    return $this->diffVersionResponse;
  }
  /** @param GdataDownloadParameters */
  public function setDownloadParameters(GdataDownloadParameters $downloadParameters)
  {
    $this->downloadParameters = $downloadParameters;
  }
  /** @return GdataDownloadParameters */
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
  /** @param GdataObjectId */
  public function setObjectId(GdataObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return GdataObjectId */
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

class GdataObjectId extends \Google\Model
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

class Job extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $reportTypeId;
  /** @var bool */
  public $systemManaged;

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
  public function setReportTypeId($reportTypeId)
  {
    $this->reportTypeId = $reportTypeId;
  }
  /** @return string */
  public function getReportTypeId()
  {
    return $this->reportTypeId;
  }
  /** @param bool */
  public function setSystemManaged($systemManaged)
  {
    $this->systemManaged = $systemManaged;
  }
  /** @return bool */
  public function getSystemManaged()
  {
    return $this->systemManaged;
  }
}

class ListJobsResponse extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
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
}

class ListReportTypesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ReportType[] */
  public $reportTypes;
  protected $collection_key = 'reportTypes';
  protected $reportTypesType = ReportType::class;
  protected $reportTypesDataType = 'array';
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
  /** @param ReportType[] */
  public function setReportTypes($reportTypes)
  {
    $this->reportTypes = $reportTypes;
  }
  /** @return ReportType[] */
  public function getReportTypes()
  {
    return $this->reportTypes;
  }
}

class ListReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Report[] */
  public $reports;
  protected $collection_key = 'reports';
  protected $reportsType = Report::class;
  protected $reportsDataType = 'array';
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
  /** @param Report[] */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /** @return Report[] */
  public function getReports()
  {
    return $this->reports;
  }
}

class Report extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $endTime;
  /** @var string */
  public $id;
  /** @var string */
  public $jobExpireTime;
  /** @var string */
  public $jobId;
  /** @var string */
  public $startTime;

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
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
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
  public function setJobExpireTime($jobExpireTime)
  {
    $this->jobExpireTime = $jobExpireTime;
  }
  /** @return string */
  public function getJobExpireTime()
  {
    return $this->jobExpireTime;
  }
  /** @param string */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
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

class ReportType extends \Google\Model
{
  /** @var string */
  public $deprecateTime;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var bool */
  public $systemManaged;

  /** @param string */
  public function setDeprecateTime($deprecateTime)
  {
    $this->deprecateTime = $deprecateTime;
  }
  /** @return string */
  public function getDeprecateTime()
  {
    return $this->deprecateTime;
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
  public function setSystemManaged($systemManaged)
  {
    $this->systemManaged = $systemManaged;
  }
  /** @return bool */
  public function getSystemManaged()
  {
    return $this->systemManaged;
  }
}

class YoutubereportingEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GdataBlobstore2Info::class, 'Google_Service_YouTubeReporting_GdataBlobstore2Info');
class_alias(GdataCompositeMedia::class, 'Google_Service_YouTubeReporting_GdataCompositeMedia');
class_alias(GdataContentTypeInfo::class, 'Google_Service_YouTubeReporting_GdataContentTypeInfo');
class_alias(GdataDiffChecksumsResponse::class, 'Google_Service_YouTubeReporting_GdataDiffChecksumsResponse');
class_alias(GdataDiffDownloadResponse::class, 'Google_Service_YouTubeReporting_GdataDiffDownloadResponse');
class_alias(GdataDiffUploadRequest::class, 'Google_Service_YouTubeReporting_GdataDiffUploadRequest');
class_alias(GdataDiffUploadResponse::class, 'Google_Service_YouTubeReporting_GdataDiffUploadResponse');
class_alias(GdataDiffVersionResponse::class, 'Google_Service_YouTubeReporting_GdataDiffVersionResponse');
class_alias(GdataDownloadParameters::class, 'Google_Service_YouTubeReporting_GdataDownloadParameters');
class_alias(GdataMedia::class, 'Google_Service_YouTubeReporting_GdataMedia');
class_alias(GdataObjectId::class, 'Google_Service_YouTubeReporting_GdataObjectId');
class_alias(Job::class, 'Google_Service_YouTubeReporting_Job');
class_alias(ListJobsResponse::class, 'Google_Service_YouTubeReporting_ListJobsResponse');
class_alias(ListReportTypesResponse::class, 'Google_Service_YouTubeReporting_ListReportTypesResponse');
class_alias(ListReportsResponse::class, 'Google_Service_YouTubeReporting_ListReportsResponse');
class_alias(Report::class, 'Google_Service_YouTubeReporting_Report');
class_alias(ReportType::class, 'Google_Service_YouTubeReporting_ReportType');
class_alias(YoutubereportingEmpty::class, 'Google_Service_YouTubeReporting_YoutubereportingEmpty');
