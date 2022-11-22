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

namespace Google\Service\PolyService;

class Asset extends \Google\Collection
{
  /** @var string */
  public $authorName;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var Format[] */
  public $formats;
  /** @var bool */
  public $isCurated;
  /** @var string */
  public $license;
  /** @var string */
  public $metadata;
  /** @var string */
  public $name;
  /** @var PresentationParams */
  public $presentationParams;
  /** @var RemixInfo */
  public $remixInfo;
  /** @var PolyFile */
  public $thumbnail;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $visibility;
  protected $collection_key = 'formats';
  protected $formatsType = Format::class;
  protected $formatsDataType = 'array';
  protected $presentationParamsType = PresentationParams::class;
  protected $presentationParamsDataType = '';
  protected $remixInfoType = RemixInfo::class;
  protected $remixInfoDataType = '';
  protected $thumbnailType = PolyFile::class;
  protected $thumbnailDataType = '';
  /** @param string */
  public function setAuthorName($authorName)
  {
    $this->authorName = $authorName;
  }
  /** @return string */
  public function getAuthorName()
  {
    return $this->authorName;
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
  /** @param Format[] */
  public function setFormats($formats)
  {
    $this->formats = $formats;
  }
  /** @return Format[] */
  public function getFormats()
  {
    return $this->formats;
  }
  /** @param bool */
  public function setIsCurated($isCurated)
  {
    $this->isCurated = $isCurated;
  }
  /** @return bool */
  public function getIsCurated()
  {
    return $this->isCurated;
  }
  /** @param string */
  public function setLicense($license)
  {
    $this->license = $license;
  }
  /** @return string */
  public function getLicense()
  {
    return $this->license;
  }
  /** @param string */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @param PresentationParams */
  public function setPresentationParams(PresentationParams $presentationParams)
  {
    $this->presentationParams = $presentationParams;
  }
  /** @return PresentationParams */
  public function getPresentationParams()
  {
    return $this->presentationParams;
  }
  /** @param RemixInfo */
  public function setRemixInfo(RemixInfo $remixInfo)
  {
    $this->remixInfo = $remixInfo;
  }
  /** @return RemixInfo */
  public function getRemixInfo()
  {
    return $this->remixInfo;
  }
  /** @param PolyFile */
  public function setThumbnail(PolyFile $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return PolyFile */
  public function getThumbnail()
  {
    return $this->thumbnail;
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
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class AssetImportMessage extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $filePath;
  /** @var ImageError */
  public $imageError;
  /** @var ObjParseError */
  public $objParseError;
  protected $imageErrorType = ImageError::class;
  protected $imageErrorDataType = '';
  protected $objParseErrorType = ObjParseError::class;
  protected $objParseErrorDataType = '';
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
  /** @param ImageError */
  public function setImageError(ImageError $imageError)
  {
    $this->imageError = $imageError;
  }
  /** @return ImageError */
  public function getImageError()
  {
    return $this->imageError;
  }
  /** @param ObjParseError */
  public function setObjParseError(ObjParseError $objParseError)
  {
    $this->objParseError = $objParseError;
  }
  /** @return ObjParseError */
  public function getObjParseError()
  {
    return $this->objParseError;
  }
}

class Format extends \Google\Collection
{
  /** @var FormatComplexity */
  public $formatComplexity;
  /** @var string */
  public $formatType;
  /** @var PolyFile[] */
  public $resources;
  /** @var PolyFile */
  public $root;
  protected $collection_key = 'resources';
  protected $formatComplexityType = FormatComplexity::class;
  protected $formatComplexityDataType = '';
  protected $resourcesType = PolyFile::class;
  protected $resourcesDataType = 'array';
  protected $rootType = PolyFile::class;
  protected $rootDataType = '';
  /** @param FormatComplexity */
  public function setFormatComplexity(FormatComplexity $formatComplexity)
  {
    $this->formatComplexity = $formatComplexity;
  }
  /** @return FormatComplexity */
  public function getFormatComplexity()
  {
    return $this->formatComplexity;
  }
  /** @param string */
  public function setFormatType($formatType)
  {
    $this->formatType = $formatType;
  }
  /** @return string */
  public function getFormatType()
  {
    return $this->formatType;
  }
  /** @param PolyFile[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return PolyFile[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param PolyFile */
  public function setRoot(PolyFile $root)
  {
    $this->root = $root;
  }
  /** @return PolyFile */
  public function getRoot()
  {
    return $this->root;
  }
}

class FormatComplexity extends \Google\Model
{
  /** @var int */
  public $lodHint;
  /** @var string */
  public $triangleCount;

  /** @param int */
  public function setLodHint($lodHint)
  {
    $this->lodHint = $lodHint;
  }
  /** @return int */
  public function getLodHint()
  {
    return $this->lodHint;
  }
  /** @param string */
  public function setTriangleCount($triangleCount)
  {
    $this->triangleCount = $triangleCount;
  }
  /** @return string */
  public function getTriangleCount()
  {
    return $this->triangleCount;
  }
}

class ImageError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $filePath;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
}

class ListAssetsResponse extends \Google\Collection
{
  /** @var Asset[] */
  public $assets;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'assets';
  protected $assetsType = Asset::class;
  protected $assetsDataType = 'array';
  /** @param Asset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return Asset[] */
  public function getAssets()
  {
    return $this->assets;
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

class ListLikedAssetsResponse extends \Google\Collection
{
  /** @var Asset[] */
  public $assets;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'assets';
  protected $assetsType = Asset::class;
  protected $assetsDataType = 'array';
  /** @param Asset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return Asset[] */
  public function getAssets()
  {
    return $this->assets;
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

class ListUserAssetsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  /** @var UserAsset[] */
  public $userAssets;
  protected $collection_key = 'userAssets';
  protected $userAssetsType = UserAsset::class;
  protected $userAssetsDataType = 'array';
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
  /** @param UserAsset[] */
  public function setUserAssets($userAssets)
  {
    $this->userAssets = $userAssets;
  }
  /** @return UserAsset[] */
  public function getUserAssets()
  {
    return $this->userAssets;
  }
}

class ObjParseError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var int */
  public $endIndex;
  /** @var string */
  public $filePath;
  /** @var string */
  public $line;
  /** @var int */
  public $lineNumber;
  /** @var int */
  public $startIndex;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
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
  /** @param int */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return int */
  public function getLineNumber()
  {
    return $this->lineNumber;
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
}

class PolyFile extends \Google\Model
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $relativePath;
  /** @var string */
  public $url;

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
  public function setRelativePath($relativePath)
  {
    $this->relativePath = $relativePath;
  }
  /** @return string */
  public function getRelativePath()
  {
    return $this->relativePath;
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

class PresentationParams extends \Google\Model
{
  /** @var string */
  public $backgroundColor;
  /** @var string */
  public $colorSpace;
  /** @var Quaternion */
  public $orientingRotation;
  protected $orientingRotationType = Quaternion::class;
  protected $orientingRotationDataType = '';
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
  public function setColorSpace($colorSpace)
  {
    $this->colorSpace = $colorSpace;
  }
  /** @return string */
  public function getColorSpace()
  {
    return $this->colorSpace;
  }
  /** @param Quaternion */
  public function setOrientingRotation(Quaternion $orientingRotation)
  {
    $this->orientingRotation = $orientingRotation;
  }
  /** @return Quaternion */
  public function getOrientingRotation()
  {
    return $this->orientingRotation;
  }
}

class Quaternion extends \Google\Model
{
  public $w;
  public $x;
  public $y;
  public $z;

  public function setW($w)
  {
    $this->w = $w;
  }
  public function getW()
  {
    return $this->w;
  }
  public function setX($x)
  {
    $this->x = $x;
  }
  public function getX()
  {
    return $this->x;
  }
  public function setY($y)
  {
    $this->y = $y;
  }
  public function getY()
  {
    return $this->y;
  }
  public function setZ($z)
  {
    $this->z = $z;
  }
  public function getZ()
  {
    return $this->z;
  }
}

class RemixInfo extends \Google\Collection
{
  /** @var string[] */
  public $sourceAsset;
  protected $collection_key = 'sourceAsset';
  /** @param string[] */
  public function setSourceAsset($sourceAsset)
  {
    $this->sourceAsset = $sourceAsset;
  }
  /** @return string[] */
  public function getSourceAsset()
  {
    return $this->sourceAsset;
  }
}

class StartAssetImportResponse extends \Google\Collection
{
  /** @var string */
  public $assetId;
  /** @var string */
  public $assetImportId;
  /** @var AssetImportMessage[] */
  public $assetImportMessages;
  /** @var string */
  public $publishUrl;
  protected $collection_key = 'assetImportMessages';
  protected $assetImportMessagesType = AssetImportMessage::class;
  protected $assetImportMessagesDataType = 'array';
  /** @param string */
  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  /** @return string */
  public function getAssetId()
  {
    return $this->assetId;
  }
  /** @param string */
  public function setAssetImportId($assetImportId)
  {
    $this->assetImportId = $assetImportId;
  }
  /** @return string */
  public function getAssetImportId()
  {
    return $this->assetImportId;
  }
  /** @param AssetImportMessage[] */
  public function setAssetImportMessages($assetImportMessages)
  {
    $this->assetImportMessages = $assetImportMessages;
  }
  /** @return AssetImportMessage[] */
  public function getAssetImportMessages()
  {
    return $this->assetImportMessages;
  }
  /** @param string */
  public function setPublishUrl($publishUrl)
  {
    $this->publishUrl = $publishUrl;
  }
  /** @return string */
  public function getPublishUrl()
  {
    return $this->publishUrl;
  }
}

class UserAsset extends \Google\Model
{
  /** @var Asset */
  public $asset;
  protected $assetType = Asset::class;
  protected $assetDataType = '';
  /** @param Asset */
  public function setAsset(Asset $asset)
  {
    $this->asset = $asset;
  }
  /** @return Asset */
  public function getAsset()
  {
    return $this->asset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Asset::class, 'Google_Service_PolyService_Asset');
class_alias(AssetImportMessage::class, 'Google_Service_PolyService_AssetImportMessage');
class_alias(Format::class, 'Google_Service_PolyService_Format');
class_alias(FormatComplexity::class, 'Google_Service_PolyService_FormatComplexity');
class_alias(ImageError::class, 'Google_Service_PolyService_ImageError');
class_alias(ListAssetsResponse::class, 'Google_Service_PolyService_ListAssetsResponse');
class_alias(ListLikedAssetsResponse::class, 'Google_Service_PolyService_ListLikedAssetsResponse');
class_alias(ListUserAssetsResponse::class, 'Google_Service_PolyService_ListUserAssetsResponse');
class_alias(ObjParseError::class, 'Google_Service_PolyService_ObjParseError');
class_alias(PolyFile::class, 'Google_Service_PolyService_PolyFile');
class_alias(PresentationParams::class, 'Google_Service_PolyService_PresentationParams');
class_alias(Quaternion::class, 'Google_Service_PolyService_Quaternion');
class_alias(RemixInfo::class, 'Google_Service_PolyService_RemixInfo');
class_alias(StartAssetImportResponse::class, 'Google_Service_PolyService_StartAssetImportResponse');
class_alias(UserAsset::class, 'Google_Service_PolyService_UserAsset');
