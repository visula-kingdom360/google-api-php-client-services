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

namespace Google\Service\Drive;

class About extends \Google\Collection
{
  /** @var bool */
  public $appInstalled;
  /** @var bool */
  public $canCreateDrives;
  /** @var bool */
  public $canCreateTeamDrives;
  /** @var AboutDriveThemes[] */
  public $driveThemes;
  /** @var string[] */
  public $exportFormats;
  /** @var string[] */
  public $folderColorPalette;
  /** @var string[] */
  public $importFormats;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $maxImportSizes;
  /** @var string */
  public $maxUploadSize;
  /** @var AboutStorageQuota */
  public $storageQuota;
  /** @var AboutTeamDriveThemes[] */
  public $teamDriveThemes;
  /** @var User */
  public $user;
  protected $collection_key = 'teamDriveThemes';
  protected $driveThemesType = AboutDriveThemes::class;
  protected $driveThemesDataType = 'array';
  protected $storageQuotaType = AboutStorageQuota::class;
  protected $storageQuotaDataType = '';
  protected $teamDriveThemesType = AboutTeamDriveThemes::class;
  protected $teamDriveThemesDataType = 'array';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param bool */
  public function setAppInstalled($appInstalled)
  {
    $this->appInstalled = $appInstalled;
  }
  /** @return bool */
  public function getAppInstalled()
  {
    return $this->appInstalled;
  }
  /** @param bool */
  public function setCanCreateDrives($canCreateDrives)
  {
    $this->canCreateDrives = $canCreateDrives;
  }
  /** @return bool */
  public function getCanCreateDrives()
  {
    return $this->canCreateDrives;
  }
  /** @param bool */
  public function setCanCreateTeamDrives($canCreateTeamDrives)
  {
    $this->canCreateTeamDrives = $canCreateTeamDrives;
  }
  /** @return bool */
  public function getCanCreateTeamDrives()
  {
    return $this->canCreateTeamDrives;
  }
  /** @param AboutDriveThemes[] */
  public function setDriveThemes($driveThemes)
  {
    $this->driveThemes = $driveThemes;
  }
  /** @return AboutDriveThemes[] */
  public function getDriveThemes()
  {
    return $this->driveThemes;
  }
  /** @param string[] */
  public function setExportFormats($exportFormats)
  {
    $this->exportFormats = $exportFormats;
  }
  /** @return string[] */
  public function getExportFormats()
  {
    return $this->exportFormats;
  }
  /** @param string[] */
  public function setFolderColorPalette($folderColorPalette)
  {
    $this->folderColorPalette = $folderColorPalette;
  }
  /** @return string[] */
  public function getFolderColorPalette()
  {
    return $this->folderColorPalette;
  }
  /** @param string[] */
  public function setImportFormats($importFormats)
  {
    $this->importFormats = $importFormats;
  }
  /** @return string[] */
  public function getImportFormats()
  {
    return $this->importFormats;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setMaxImportSizes($maxImportSizes)
  {
    $this->maxImportSizes = $maxImportSizes;
  }
  /** @return string[] */
  public function getMaxImportSizes()
  {
    return $this->maxImportSizes;
  }
  /** @param string */
  public function setMaxUploadSize($maxUploadSize)
  {
    $this->maxUploadSize = $maxUploadSize;
  }
  /** @return string */
  public function getMaxUploadSize()
  {
    return $this->maxUploadSize;
  }
  /** @param AboutStorageQuota */
  public function setStorageQuota(AboutStorageQuota $storageQuota)
  {
    $this->storageQuota = $storageQuota;
  }
  /** @return AboutStorageQuota */
  public function getStorageQuota()
  {
    return $this->storageQuota;
  }
  /** @param AboutTeamDriveThemes[] */
  public function setTeamDriveThemes($teamDriveThemes)
  {
    $this->teamDriveThemes = $teamDriveThemes;
  }
  /** @return AboutTeamDriveThemes[] */
  public function getTeamDriveThemes()
  {
    return $this->teamDriveThemes;
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

class AboutDriveThemes extends \Google\Model
{
  /** @var string */
  public $backgroundImageLink;
  /** @var string */
  public $colorRgb;
  /** @var string */
  public $id;

  /** @param string */
  public function setBackgroundImageLink($backgroundImageLink)
  {
    $this->backgroundImageLink = $backgroundImageLink;
  }
  /** @return string */
  public function getBackgroundImageLink()
  {
    return $this->backgroundImageLink;
  }
  /** @param string */
  public function setColorRgb($colorRgb)
  {
    $this->colorRgb = $colorRgb;
  }
  /** @return string */
  public function getColorRgb()
  {
    return $this->colorRgb;
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

class AboutStorageQuota extends \Google\Model
{
  /** @var string */
  public $limit;
  /** @var string */
  public $usage;
  /** @var string */
  public $usageInDrive;
  /** @var string */
  public $usageInDriveTrash;

  /** @param string */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return string */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param string */
  public function setUsage($usage)
  {
    $this->usage = $usage;
  }
  /** @return string */
  public function getUsage()
  {
    return $this->usage;
  }
  /** @param string */
  public function setUsageInDrive($usageInDrive)
  {
    $this->usageInDrive = $usageInDrive;
  }
  /** @return string */
  public function getUsageInDrive()
  {
    return $this->usageInDrive;
  }
  /** @param string */
  public function setUsageInDriveTrash($usageInDriveTrash)
  {
    $this->usageInDriveTrash = $usageInDriveTrash;
  }
  /** @return string */
  public function getUsageInDriveTrash()
  {
    return $this->usageInDriveTrash;
  }
}

class AboutTeamDriveThemes extends \Google\Model
{
  /** @var string */
  public $backgroundImageLink;
  /** @var string */
  public $colorRgb;
  /** @var string */
  public $id;

  /** @param string */
  public function setBackgroundImageLink($backgroundImageLink)
  {
    $this->backgroundImageLink = $backgroundImageLink;
  }
  /** @return string */
  public function getBackgroundImageLink()
  {
    return $this->backgroundImageLink;
  }
  /** @param string */
  public function setColorRgb($colorRgb)
  {
    $this->colorRgb = $colorRgb;
  }
  /** @return string */
  public function getColorRgb()
  {
    return $this->colorRgb;
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

class Change extends \Google\Model
{
  /** @var string */
  public $changeType;
  /** @var Drive */
  public $drive;
  /** @var string */
  public $driveId;
  /** @var DriveFile */
  public $file;
  /** @var string */
  public $fileId;
  /** @var string */
  public $kind;
  /** @var bool */
  public $removed;
  /** @var TeamDrive */
  public $teamDrive;
  /** @var string */
  public $teamDriveId;
  /** @var string */
  public $time;
  /** @var string */
  public $type;
  protected $driveType = Drive::class;
  protected $driveDataType = '';
  protected $fileType = DriveFile::class;
  protected $fileDataType = '';
  protected $teamDriveType = TeamDrive::class;
  protected $teamDriveDataType = '';
  /** @param string */
  public function setChangeType($changeType)
  {
    $this->changeType = $changeType;
  }
  /** @return string */
  public function getChangeType()
  {
    return $this->changeType;
  }
  /** @param Drive */
  public function setDrive(Drive $drive)
  {
    $this->drive = $drive;
  }
  /** @return Drive */
  public function getDrive()
  {
    return $this->drive;
  }
  /** @param string */
  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }
  /** @return string */
  public function getDriveId()
  {
    return $this->driveId;
  }
  /** @param DriveFile */
  public function setFile(DriveFile $file)
  {
    $this->file = $file;
  }
  /** @return DriveFile */
  public function getFile()
  {
    return $this->file;
  }
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param bool */
  public function setRemoved($removed)
  {
    $this->removed = $removed;
  }
  /** @return bool */
  public function getRemoved()
  {
    return $this->removed;
  }
  /** @param TeamDrive */
  public function setTeamDrive(TeamDrive $teamDrive)
  {
    $this->teamDrive = $teamDrive;
  }
  /** @return TeamDrive */
  public function getTeamDrive()
  {
    return $this->teamDrive;
  }
  /** @param string */
  public function setTeamDriveId($teamDriveId)
  {
    $this->teamDriveId = $teamDriveId;
  }
  /** @return string */
  public function getTeamDriveId()
  {
    return $this->teamDriveId;
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

class ChangeList extends \Google\Collection
{
  /** @var Change[] */
  public $changes;
  /** @var string */
  public $kind;
  /** @var string */
  public $newStartPageToken;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'changes';
  protected $changesType = Change::class;
  protected $changesDataType = 'array';
  /** @param Change[] */
  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  /** @return Change[] */
  public function getChanges()
  {
    return $this->changes;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setNewStartPageToken($newStartPageToken)
  {
    $this->newStartPageToken = $newStartPageToken;
  }
  /** @return string */
  public function getNewStartPageToken()
  {
    return $this->newStartPageToken;
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

class Channel extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $expiration;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $params;
  /** @var bool */
  public $payload;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $token;
  /** @var string */
  public $type;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return string[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param bool */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return bool */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
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
}

class Comment extends \Google\Collection
{
  /** @var string */
  public $anchor;
  /** @var User */
  public $author;
  /** @var string */
  public $content;
  /** @var string */
  public $createdTime;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $htmlContent;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $modifiedTime;
  /** @var CommentQuotedFileContent */
  public $quotedFileContent;
  /** @var Reply[] */
  public $replies;
  /** @var bool */
  public $resolved;
  protected $collection_key = 'replies';
  protected $authorType = User::class;
  protected $authorDataType = '';
  protected $quotedFileContentType = CommentQuotedFileContent::class;
  protected $quotedFileContentDataType = '';
  protected $repliesType = Reply::class;
  protected $repliesDataType = 'array';
  /** @param string */
  public function setAnchor($anchor)
  {
    $this->anchor = $anchor;
  }
  /** @return string */
  public function getAnchor()
  {
    return $this->anchor;
  }
  /** @param User */
  public function setAuthor(User $author)
  {
    $this->author = $author;
  }
  /** @return User */
  public function getAuthor()
  {
    return $this->author;
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
  /** @param string */
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  /** @return string */
  public function getCreatedTime()
  {
    return $this->createdTime;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string */
  public function setHtmlContent($htmlContent)
  {
    $this->htmlContent = $htmlContent;
  }
  /** @return string */
  public function getHtmlContent()
  {
    return $this->htmlContent;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
  /** @return string */
  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }
  /** @param CommentQuotedFileContent */
  public function setQuotedFileContent(CommentQuotedFileContent $quotedFileContent)
  {
    $this->quotedFileContent = $quotedFileContent;
  }
  /** @return CommentQuotedFileContent */
  public function getQuotedFileContent()
  {
    return $this->quotedFileContent;
  }
  /** @param Reply[] */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /** @return Reply[] */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param bool */
  public function setResolved($resolved)
  {
    $this->resolved = $resolved;
  }
  /** @return bool */
  public function getResolved()
  {
    return $this->resolved;
  }
}

class CommentList extends \Google\Collection
{
  /** @var Comment[] */
  public $comments;
  /** @var string */
  public $kind;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class CommentQuotedFileContent extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $value;

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

class ContentRestriction extends \Google\Model
{
  /** @var bool */
  public $readOnly;
  /** @var string */
  public $reason;
  /** @var User */
  public $restrictingUser;
  /** @var string */
  public $restrictionTime;
  /** @var string */
  public $type;
  protected $restrictingUserType = User::class;
  protected $restrictingUserDataType = '';
  /** @param bool */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return bool */
  public function getReadOnly()
  {
    return $this->readOnly;
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
  /** @param User */
  public function setRestrictingUser(User $restrictingUser)
  {
    $this->restrictingUser = $restrictingUser;
  }
  /** @return User */
  public function getRestrictingUser()
  {
    return $this->restrictingUser;
  }
  /** @param string */
  public function setRestrictionTime($restrictionTime)
  {
    $this->restrictionTime = $restrictionTime;
  }
  /** @return string */
  public function getRestrictionTime()
  {
    return $this->restrictionTime;
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

class Drive extends \Google\Model
{
  /** @var DriveBackgroundImageFile */
  public $backgroundImageFile;
  /** @var string */
  public $backgroundImageLink;
  /** @var DriveCapabilities */
  public $capabilities;
  /** @var string */
  public $colorRgb;
  /** @var string */
  public $createdTime;
  /** @var bool */
  public $hidden;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $orgUnitId;
  /** @var DriveRestrictions */
  public $restrictions;
  /** @var string */
  public $themeId;
  protected $backgroundImageFileType = DriveBackgroundImageFile::class;
  protected $backgroundImageFileDataType = '';
  protected $capabilitiesType = DriveCapabilities::class;
  protected $capabilitiesDataType = '';
  protected $restrictionsType = DriveRestrictions::class;
  protected $restrictionsDataType = '';
  /** @param DriveBackgroundImageFile */
  public function setBackgroundImageFile(DriveBackgroundImageFile $backgroundImageFile)
  {
    $this->backgroundImageFile = $backgroundImageFile;
  }
  /** @return DriveBackgroundImageFile */
  public function getBackgroundImageFile()
  {
    return $this->backgroundImageFile;
  }
  /** @param string */
  public function setBackgroundImageLink($backgroundImageLink)
  {
    $this->backgroundImageLink = $backgroundImageLink;
  }
  /** @return string */
  public function getBackgroundImageLink()
  {
    return $this->backgroundImageLink;
  }
  /** @param DriveCapabilities */
  public function setCapabilities(DriveCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /** @return DriveCapabilities */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /** @param string */
  public function setColorRgb($colorRgb)
  {
    $this->colorRgb = $colorRgb;
  }
  /** @return string */
  public function getColorRgb()
  {
    return $this->colorRgb;
  }
  /** @param string */
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  /** @return string */
  public function getCreatedTime()
  {
    return $this->createdTime;
  }
  /** @param bool */
  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }
  /** @return bool */
  public function getHidden()
  {
    return $this->hidden;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param DriveRestrictions */
  public function setRestrictions(DriveRestrictions $restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /** @return DriveRestrictions */
  public function getRestrictions()
  {
    return $this->restrictions;
  }
  /** @param string */
  public function setThemeId($themeId)
  {
    $this->themeId = $themeId;
  }
  /** @return string */
  public function getThemeId()
  {
    return $this->themeId;
  }
}

class DriveBackgroundImageFile extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var float */
  public $width;
  /** @var float */
  public $xCoordinate;
  /** @var float */
  public $yCoordinate;

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
  /** @param float */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return float */
  public function getWidth()
  {
    return $this->width;
  }
  /** @param float */
  public function setXCoordinate($xCoordinate)
  {
    $this->xCoordinate = $xCoordinate;
  }
  /** @return float */
  public function getXCoordinate()
  {
    return $this->xCoordinate;
  }
  /** @param float */
  public function setYCoordinate($yCoordinate)
  {
    $this->yCoordinate = $yCoordinate;
  }
  /** @return float */
  public function getYCoordinate()
  {
    return $this->yCoordinate;
  }
}

class DriveCapabilities extends \Google\Model
{
  /** @var bool */
  public $canAddChildren;
  /** @var bool */
  public $canChangeCopyRequiresWriterPermissionRestriction;
  /** @var bool */
  public $canChangeDomainUsersOnlyRestriction;
  /** @var bool */
  public $canChangeDriveBackground;
  /** @var bool */
  public $canChangeDriveMembersOnlyRestriction;
  /** @var bool */
  public $canComment;
  /** @var bool */
  public $canCopy;
  /** @var bool */
  public $canDeleteChildren;
  /** @var bool */
  public $canDeleteDrive;
  /** @var bool */
  public $canDownload;
  /** @var bool */
  public $canEdit;
  /** @var bool */
  public $canListChildren;
  /** @var bool */
  public $canManageMembers;
  /** @var bool */
  public $canReadRevisions;
  /** @var bool */
  public $canRename;
  /** @var bool */
  public $canRenameDrive;
  /** @var bool */
  public $canResetDriveRestrictions;
  /** @var bool */
  public $canShare;
  /** @var bool */
  public $canTrashChildren;

  /** @param bool */
  public function setCanAddChildren($canAddChildren)
  {
    $this->canAddChildren = $canAddChildren;
  }
  /** @return bool */
  public function getCanAddChildren()
  {
    return $this->canAddChildren;
  }
  /** @param bool */
  public function setCanChangeCopyRequiresWriterPermissionRestriction($canChangeCopyRequiresWriterPermissionRestriction)
  {
    $this->canChangeCopyRequiresWriterPermissionRestriction = $canChangeCopyRequiresWriterPermissionRestriction;
  }
  /** @return bool */
  public function getCanChangeCopyRequiresWriterPermissionRestriction()
  {
    return $this->canChangeCopyRequiresWriterPermissionRestriction;
  }
  /** @param bool */
  public function setCanChangeDomainUsersOnlyRestriction($canChangeDomainUsersOnlyRestriction)
  {
    $this->canChangeDomainUsersOnlyRestriction = $canChangeDomainUsersOnlyRestriction;
  }
  /** @return bool */
  public function getCanChangeDomainUsersOnlyRestriction()
  {
    return $this->canChangeDomainUsersOnlyRestriction;
  }
  /** @param bool */
  public function setCanChangeDriveBackground($canChangeDriveBackground)
  {
    $this->canChangeDriveBackground = $canChangeDriveBackground;
  }
  /** @return bool */
  public function getCanChangeDriveBackground()
  {
    return $this->canChangeDriveBackground;
  }
  /** @param bool */
  public function setCanChangeDriveMembersOnlyRestriction($canChangeDriveMembersOnlyRestriction)
  {
    $this->canChangeDriveMembersOnlyRestriction = $canChangeDriveMembersOnlyRestriction;
  }
  /** @return bool */
  public function getCanChangeDriveMembersOnlyRestriction()
  {
    return $this->canChangeDriveMembersOnlyRestriction;
  }
  /** @param bool */
  public function setCanComment($canComment)
  {
    $this->canComment = $canComment;
  }
  /** @return bool */
  public function getCanComment()
  {
    return $this->canComment;
  }
  /** @param bool */
  public function setCanCopy($canCopy)
  {
    $this->canCopy = $canCopy;
  }
  /** @return bool */
  public function getCanCopy()
  {
    return $this->canCopy;
  }
  /** @param bool */
  public function setCanDeleteChildren($canDeleteChildren)
  {
    $this->canDeleteChildren = $canDeleteChildren;
  }
  /** @return bool */
  public function getCanDeleteChildren()
  {
    return $this->canDeleteChildren;
  }
  /** @param bool */
  public function setCanDeleteDrive($canDeleteDrive)
  {
    $this->canDeleteDrive = $canDeleteDrive;
  }
  /** @return bool */
  public function getCanDeleteDrive()
  {
    return $this->canDeleteDrive;
  }
  /** @param bool */
  public function setCanDownload($canDownload)
  {
    $this->canDownload = $canDownload;
  }
  /** @return bool */
  public function getCanDownload()
  {
    return $this->canDownload;
  }
  /** @param bool */
  public function setCanEdit($canEdit)
  {
    $this->canEdit = $canEdit;
  }
  /** @return bool */
  public function getCanEdit()
  {
    return $this->canEdit;
  }
  /** @param bool */
  public function setCanListChildren($canListChildren)
  {
    $this->canListChildren = $canListChildren;
  }
  /** @return bool */
  public function getCanListChildren()
  {
    return $this->canListChildren;
  }
  /** @param bool */
  public function setCanManageMembers($canManageMembers)
  {
    $this->canManageMembers = $canManageMembers;
  }
  /** @return bool */
  public function getCanManageMembers()
  {
    return $this->canManageMembers;
  }
  /** @param bool */
  public function setCanReadRevisions($canReadRevisions)
  {
    $this->canReadRevisions = $canReadRevisions;
  }
  /** @return bool */
  public function getCanReadRevisions()
  {
    return $this->canReadRevisions;
  }
  /** @param bool */
  public function setCanRename($canRename)
  {
    $this->canRename = $canRename;
  }
  /** @return bool */
  public function getCanRename()
  {
    return $this->canRename;
  }
  /** @param bool */
  public function setCanRenameDrive($canRenameDrive)
  {
    $this->canRenameDrive = $canRenameDrive;
  }
  /** @return bool */
  public function getCanRenameDrive()
  {
    return $this->canRenameDrive;
  }
  /** @param bool */
  public function setCanResetDriveRestrictions($canResetDriveRestrictions)
  {
    $this->canResetDriveRestrictions = $canResetDriveRestrictions;
  }
  /** @return bool */
  public function getCanResetDriveRestrictions()
  {
    return $this->canResetDriveRestrictions;
  }
  /** @param bool */
  public function setCanShare($canShare)
  {
    $this->canShare = $canShare;
  }
  /** @return bool */
  public function getCanShare()
  {
    return $this->canShare;
  }
  /** @param bool */
  public function setCanTrashChildren($canTrashChildren)
  {
    $this->canTrashChildren = $canTrashChildren;
  }
  /** @return bool */
  public function getCanTrashChildren()
  {
    return $this->canTrashChildren;
  }
}

class DriveFile extends \Google\Collection
{
  /** @var string[] */
  public $appProperties;
  /** @var DriveFileCapabilities */
  public $capabilities;
  /** @var DriveFileContentHints */
  public $contentHints;
  /** @var ContentRestriction[] */
  public $contentRestrictions;
  /** @var bool */
  public $copyRequiresWriterPermission;
  /** @var string */
  public $createdTime;
  /** @var string */
  public $description;
  /** @var string */
  public $driveId;
  /** @var bool */
  public $explicitlyTrashed;
  /** @var string[] */
  public $exportLinks;
  /** @var string */
  public $fileExtension;
  /** @var string */
  public $folderColorRgb;
  /** @var string */
  public $fullFileExtension;
  /** @var bool */
  public $hasAugmentedPermissions;
  /** @var bool */
  public $hasThumbnail;
  /** @var string */
  public $headRevisionId;
  /** @var string */
  public $iconLink;
  /** @var string */
  public $id;
  /** @var DriveFileImageMediaMetadata */
  public $imageMediaMetadata;
  /** @var bool */
  public $isAppAuthorized;
  /** @var string */
  public $kind;
  /** @var DriveFileLabelInfo */
  public $labelInfo;
  /** @var User */
  public $lastModifyingUser;
  /** @var DriveFileLinkShareMetadata */
  public $linkShareMetadata;
  /** @var string */
  public $md5Checksum;
  /** @var string */
  public $mimeType;
  /** @var bool */
  public $modifiedByMe;
  /** @var string */
  public $modifiedByMeTime;
  /** @var string */
  public $modifiedTime;
  /** @var string */
  public $name;
  /** @var string */
  public $originalFilename;
  /** @var bool */
  public $ownedByMe;
  /** @var User[] */
  public $owners;
  /** @var string[] */
  public $parents;
  /** @var string[] */
  public $permissionIds;
  /** @var Permission[] */
  public $permissions;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $quotaBytesUsed;
  /** @var string */
  public $resourceKey;
  /** @var string */
  public $sha1Checksum;
  /** @var string */
  public $sha256Checksum;
  /** @var bool */
  public $shared;
  /** @var string */
  public $sharedWithMeTime;
  /** @var User */
  public $sharingUser;
  /** @var DriveFileShortcutDetails */
  public $shortcutDetails;
  /** @var string */
  public $size;
  /** @var string[] */
  public $spaces;
  /** @var bool */
  public $starred;
  /** @var string */
  public $teamDriveId;
  /** @var string */
  public $thumbnailLink;
  /** @var string */
  public $thumbnailVersion;
  /** @var bool */
  public $trashed;
  /** @var string */
  public $trashedTime;
  /** @var User */
  public $trashingUser;
  /** @var string */
  public $version;
  /** @var DriveFileVideoMediaMetadata */
  public $videoMediaMetadata;
  /** @var bool */
  public $viewedByMe;
  /** @var string */
  public $viewedByMeTime;
  /** @var bool */
  public $viewersCanCopyContent;
  /** @var string */
  public $webContentLink;
  /** @var string */
  public $webViewLink;
  /** @var bool */
  public $writersCanShare;
  protected $collection_key = 'spaces';
  protected $capabilitiesType = DriveFileCapabilities::class;
  protected $capabilitiesDataType = '';
  protected $contentHintsType = DriveFileContentHints::class;
  protected $contentHintsDataType = '';
  protected $contentRestrictionsType = ContentRestriction::class;
  protected $contentRestrictionsDataType = 'array';
  protected $imageMediaMetadataType = DriveFileImageMediaMetadata::class;
  protected $imageMediaMetadataDataType = '';
  protected $labelInfoType = DriveFileLabelInfo::class;
  protected $labelInfoDataType = '';
  protected $lastModifyingUserType = User::class;
  protected $lastModifyingUserDataType = '';
  protected $linkShareMetadataType = DriveFileLinkShareMetadata::class;
  protected $linkShareMetadataDataType = '';
  protected $ownersType = User::class;
  protected $ownersDataType = 'array';
  protected $permissionsType = Permission::class;
  protected $permissionsDataType = 'array';
  protected $sharingUserType = User::class;
  protected $sharingUserDataType = '';
  protected $shortcutDetailsType = DriveFileShortcutDetails::class;
  protected $shortcutDetailsDataType = '';
  protected $trashingUserType = User::class;
  protected $trashingUserDataType = '';
  protected $videoMediaMetadataType = DriveFileVideoMediaMetadata::class;
  protected $videoMediaMetadataDataType = '';
  /** @param string[] */
  public function setAppProperties($appProperties)
  {
    $this->appProperties = $appProperties;
  }
  /** @return string[] */
  public function getAppProperties()
  {
    return $this->appProperties;
  }
  /** @param DriveFileCapabilities */
  public function setCapabilities(DriveFileCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /** @return DriveFileCapabilities */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /** @param DriveFileContentHints */
  public function setContentHints(DriveFileContentHints $contentHints)
  {
    $this->contentHints = $contentHints;
  }
  /** @return DriveFileContentHints */
  public function getContentHints()
  {
    return $this->contentHints;
  }
  /** @param ContentRestriction[] */
  public function setContentRestrictions($contentRestrictions)
  {
    $this->contentRestrictions = $contentRestrictions;
  }
  /** @return ContentRestriction[] */
  public function getContentRestrictions()
  {
    return $this->contentRestrictions;
  }
  /** @param bool */
  public function setCopyRequiresWriterPermission($copyRequiresWriterPermission)
  {
    $this->copyRequiresWriterPermission = $copyRequiresWriterPermission;
  }
  /** @return bool */
  public function getCopyRequiresWriterPermission()
  {
    return $this->copyRequiresWriterPermission;
  }
  /** @param string */
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  /** @return string */
  public function getCreatedTime()
  {
    return $this->createdTime;
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
  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }
  /** @return string */
  public function getDriveId()
  {
    return $this->driveId;
  }
  /** @param bool */
  public function setExplicitlyTrashed($explicitlyTrashed)
  {
    $this->explicitlyTrashed = $explicitlyTrashed;
  }
  /** @return bool */
  public function getExplicitlyTrashed()
  {
    return $this->explicitlyTrashed;
  }
  /** @param string[] */
  public function setExportLinks($exportLinks)
  {
    $this->exportLinks = $exportLinks;
  }
  /** @return string[] */
  public function getExportLinks()
  {
    return $this->exportLinks;
  }
  /** @param string */
  public function setFileExtension($fileExtension)
  {
    $this->fileExtension = $fileExtension;
  }
  /** @return string */
  public function getFileExtension()
  {
    return $this->fileExtension;
  }
  /** @param string */
  public function setFolderColorRgb($folderColorRgb)
  {
    $this->folderColorRgb = $folderColorRgb;
  }
  /** @return string */
  public function getFolderColorRgb()
  {
    return $this->folderColorRgb;
  }
  /** @param string */
  public function setFullFileExtension($fullFileExtension)
  {
    $this->fullFileExtension = $fullFileExtension;
  }
  /** @return string */
  public function getFullFileExtension()
  {
    return $this->fullFileExtension;
  }
  /** @param bool */
  public function setHasAugmentedPermissions($hasAugmentedPermissions)
  {
    $this->hasAugmentedPermissions = $hasAugmentedPermissions;
  }
  /** @return bool */
  public function getHasAugmentedPermissions()
  {
    return $this->hasAugmentedPermissions;
  }
  /** @param bool */
  public function setHasThumbnail($hasThumbnail)
  {
    $this->hasThumbnail = $hasThumbnail;
  }
  /** @return bool */
  public function getHasThumbnail()
  {
    return $this->hasThumbnail;
  }
  /** @param string */
  public function setHeadRevisionId($headRevisionId)
  {
    $this->headRevisionId = $headRevisionId;
  }
  /** @return string */
  public function getHeadRevisionId()
  {
    return $this->headRevisionId;
  }
  /** @param string */
  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }
  /** @return string */
  public function getIconLink()
  {
    return $this->iconLink;
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
  /** @param DriveFileImageMediaMetadata */
  public function setImageMediaMetadata(DriveFileImageMediaMetadata $imageMediaMetadata)
  {
    $this->imageMediaMetadata = $imageMediaMetadata;
  }
  /** @return DriveFileImageMediaMetadata */
  public function getImageMediaMetadata()
  {
    return $this->imageMediaMetadata;
  }
  /** @param bool */
  public function setIsAppAuthorized($isAppAuthorized)
  {
    $this->isAppAuthorized = $isAppAuthorized;
  }
  /** @return bool */
  public function getIsAppAuthorized()
  {
    return $this->isAppAuthorized;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param DriveFileLabelInfo */
  public function setLabelInfo(DriveFileLabelInfo $labelInfo)
  {
    $this->labelInfo = $labelInfo;
  }
  /** @return DriveFileLabelInfo */
  public function getLabelInfo()
  {
    return $this->labelInfo;
  }
  /** @param User */
  public function setLastModifyingUser(User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }
  /** @return User */
  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }
  /** @param DriveFileLinkShareMetadata */
  public function setLinkShareMetadata(DriveFileLinkShareMetadata $linkShareMetadata)
  {
    $this->linkShareMetadata = $linkShareMetadata;
  }
  /** @return DriveFileLinkShareMetadata */
  public function getLinkShareMetadata()
  {
    return $this->linkShareMetadata;
  }
  /** @param string */
  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }
  /** @return string */
  public function getMd5Checksum()
  {
    return $this->md5Checksum;
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
  /** @param bool */
  public function setModifiedByMe($modifiedByMe)
  {
    $this->modifiedByMe = $modifiedByMe;
  }
  /** @return bool */
  public function getModifiedByMe()
  {
    return $this->modifiedByMe;
  }
  /** @param string */
  public function setModifiedByMeTime($modifiedByMeTime)
  {
    $this->modifiedByMeTime = $modifiedByMeTime;
  }
  /** @return string */
  public function getModifiedByMeTime()
  {
    return $this->modifiedByMeTime;
  }
  /** @param string */
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
  /** @return string */
  public function getModifiedTime()
  {
    return $this->modifiedTime;
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
  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }
  /** @return string */
  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }
  /** @param bool */
  public function setOwnedByMe($ownedByMe)
  {
    $this->ownedByMe = $ownedByMe;
  }
  /** @return bool */
  public function getOwnedByMe()
  {
    return $this->ownedByMe;
  }
  /** @param User[] */
  public function setOwners($owners)
  {
    $this->owners = $owners;
  }
  /** @return User[] */
  public function getOwners()
  {
    return $this->owners;
  }
  /** @param string[] */
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  /** @return string[] */
  public function getParents()
  {
    return $this->parents;
  }
  /** @param string[] */
  public function setPermissionIds($permissionIds)
  {
    $this->permissionIds = $permissionIds;
  }
  /** @return string[] */
  public function getPermissionIds()
  {
    return $this->permissionIds;
  }
  /** @param Permission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return Permission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQuotaBytesUsed($quotaBytesUsed)
  {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  /** @return string */
  public function getQuotaBytesUsed()
  {
    return $this->quotaBytesUsed;
  }
  /** @param string */
  public function setResourceKey($resourceKey)
  {
    $this->resourceKey = $resourceKey;
  }
  /** @return string */
  public function getResourceKey()
  {
    return $this->resourceKey;
  }
  /** @param string */
  public function setSha1Checksum($sha1Checksum)
  {
    $this->sha1Checksum = $sha1Checksum;
  }
  /** @return string */
  public function getSha1Checksum()
  {
    return $this->sha1Checksum;
  }
  /** @param string */
  public function setSha256Checksum($sha256Checksum)
  {
    $this->sha256Checksum = $sha256Checksum;
  }
  /** @return string */
  public function getSha256Checksum()
  {
    return $this->sha256Checksum;
  }
  /** @param bool */
  public function setShared($shared)
  {
    $this->shared = $shared;
  }
  /** @return bool */
  public function getShared()
  {
    return $this->shared;
  }
  /** @param string */
  public function setSharedWithMeTime($sharedWithMeTime)
  {
    $this->sharedWithMeTime = $sharedWithMeTime;
  }
  /** @return string */
  public function getSharedWithMeTime()
  {
    return $this->sharedWithMeTime;
  }
  /** @param User */
  public function setSharingUser(User $sharingUser)
  {
    $this->sharingUser = $sharingUser;
  }
  /** @return User */
  public function getSharingUser()
  {
    return $this->sharingUser;
  }
  /** @param DriveFileShortcutDetails */
  public function setShortcutDetails(DriveFileShortcutDetails $shortcutDetails)
  {
    $this->shortcutDetails = $shortcutDetails;
  }
  /** @return DriveFileShortcutDetails */
  public function getShortcutDetails()
  {
    return $this->shortcutDetails;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string[] */
  public function setSpaces($spaces)
  {
    $this->spaces = $spaces;
  }
  /** @return string[] */
  public function getSpaces()
  {
    return $this->spaces;
  }
  /** @param bool */
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  /** @return bool */
  public function getStarred()
  {
    return $this->starred;
  }
  /** @param string */
  public function setTeamDriveId($teamDriveId)
  {
    $this->teamDriveId = $teamDriveId;
  }
  /** @return string */
  public function getTeamDriveId()
  {
    return $this->teamDriveId;
  }
  /** @param string */
  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }
  /** @return string */
  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
  }
  /** @param string */
  public function setThumbnailVersion($thumbnailVersion)
  {
    $this->thumbnailVersion = $thumbnailVersion;
  }
  /** @return string */
  public function getThumbnailVersion()
  {
    return $this->thumbnailVersion;
  }
  /** @param bool */
  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }
  /** @return bool */
  public function getTrashed()
  {
    return $this->trashed;
  }
  /** @param string */
  public function setTrashedTime($trashedTime)
  {
    $this->trashedTime = $trashedTime;
  }
  /** @return string */
  public function getTrashedTime()
  {
    return $this->trashedTime;
  }
  /** @param User */
  public function setTrashingUser(User $trashingUser)
  {
    $this->trashingUser = $trashingUser;
  }
  /** @return User */
  public function getTrashingUser()
  {
    return $this->trashingUser;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
  /** @param DriveFileVideoMediaMetadata */
  public function setVideoMediaMetadata(DriveFileVideoMediaMetadata $videoMediaMetadata)
  {
    $this->videoMediaMetadata = $videoMediaMetadata;
  }
  /** @return DriveFileVideoMediaMetadata */
  public function getVideoMediaMetadata()
  {
    return $this->videoMediaMetadata;
  }
  /** @param bool */
  public function setViewedByMe($viewedByMe)
  {
    $this->viewedByMe = $viewedByMe;
  }
  /** @return bool */
  public function getViewedByMe()
  {
    return $this->viewedByMe;
  }
  /** @param string */
  public function setViewedByMeTime($viewedByMeTime)
  {
    $this->viewedByMeTime = $viewedByMeTime;
  }
  /** @return string */
  public function getViewedByMeTime()
  {
    return $this->viewedByMeTime;
  }
  /** @param bool */
  public function setViewersCanCopyContent($viewersCanCopyContent)
  {
    $this->viewersCanCopyContent = $viewersCanCopyContent;
  }
  /** @return bool */
  public function getViewersCanCopyContent()
  {
    return $this->viewersCanCopyContent;
  }
  /** @param string */
  public function setWebContentLink($webContentLink)
  {
    $this->webContentLink = $webContentLink;
  }
  /** @return string */
  public function getWebContentLink()
  {
    return $this->webContentLink;
  }
  /** @param string */
  public function setWebViewLink($webViewLink)
  {
    $this->webViewLink = $webViewLink;
  }
  /** @return string */
  public function getWebViewLink()
  {
    return $this->webViewLink;
  }
  /** @param bool */
  public function setWritersCanShare($writersCanShare)
  {
    $this->writersCanShare = $writersCanShare;
  }
  /** @return bool */
  public function getWritersCanShare()
  {
    return $this->writersCanShare;
  }
}

class DriveFileCapabilities extends \Google\Model
{
  /** @var bool */
  public $canAcceptOwnership;
  /** @var bool */
  public $canAddChildren;
  /** @var bool */
  public $canAddFolderFromAnotherDrive;
  /** @var bool */
  public $canAddMyDriveParent;
  /** @var bool */
  public $canChangeCopyRequiresWriterPermission;
  /** @var bool */
  public $canChangeSecurityUpdateEnabled;
  /** @var bool */
  public $canChangeViewersCanCopyContent;
  /** @var bool */
  public $canComment;
  /** @var bool */
  public $canCopy;
  /** @var bool */
  public $canDelete;
  /** @var bool */
  public $canDeleteChildren;
  /** @var bool */
  public $canDownload;
  /** @var bool */
  public $canEdit;
  /** @var bool */
  public $canListChildren;
  /** @var bool */
  public $canModifyContent;
  /** @var bool */
  public $canModifyContentRestriction;
  /** @var bool */
  public $canModifyLabels;
  /** @var bool */
  public $canMoveChildrenOutOfDrive;
  /** @var bool */
  public $canMoveChildrenOutOfTeamDrive;
  /** @var bool */
  public $canMoveChildrenWithinDrive;
  /** @var bool */
  public $canMoveChildrenWithinTeamDrive;
  /** @var bool */
  public $canMoveItemIntoTeamDrive;
  /** @var bool */
  public $canMoveItemOutOfDrive;
  /** @var bool */
  public $canMoveItemOutOfTeamDrive;
  /** @var bool */
  public $canMoveItemWithinDrive;
  /** @var bool */
  public $canMoveItemWithinTeamDrive;
  /** @var bool */
  public $canMoveTeamDriveItem;
  /** @var bool */
  public $canReadDrive;
  /** @var bool */
  public $canReadLabels;
  /** @var bool */
  public $canReadRevisions;
  /** @var bool */
  public $canReadTeamDrive;
  /** @var bool */
  public $canRemoveChildren;
  /** @var bool */
  public $canRemoveMyDriveParent;
  /** @var bool */
  public $canRename;
  /** @var bool */
  public $canShare;
  /** @var bool */
  public $canTrash;
  /** @var bool */
  public $canTrashChildren;
  /** @var bool */
  public $canUntrash;

  /** @param bool */
  public function setCanAcceptOwnership($canAcceptOwnership)
  {
    $this->canAcceptOwnership = $canAcceptOwnership;
  }
  /** @return bool */
  public function getCanAcceptOwnership()
  {
    return $this->canAcceptOwnership;
  }
  /** @param bool */
  public function setCanAddChildren($canAddChildren)
  {
    $this->canAddChildren = $canAddChildren;
  }
  /** @return bool */
  public function getCanAddChildren()
  {
    return $this->canAddChildren;
  }
  /** @param bool */
  public function setCanAddFolderFromAnotherDrive($canAddFolderFromAnotherDrive)
  {
    $this->canAddFolderFromAnotherDrive = $canAddFolderFromAnotherDrive;
  }
  /** @return bool */
  public function getCanAddFolderFromAnotherDrive()
  {
    return $this->canAddFolderFromAnotherDrive;
  }
  /** @param bool */
  public function setCanAddMyDriveParent($canAddMyDriveParent)
  {
    $this->canAddMyDriveParent = $canAddMyDriveParent;
  }
  /** @return bool */
  public function getCanAddMyDriveParent()
  {
    return $this->canAddMyDriveParent;
  }
  /** @param bool */
  public function setCanChangeCopyRequiresWriterPermission($canChangeCopyRequiresWriterPermission)
  {
    $this->canChangeCopyRequiresWriterPermission = $canChangeCopyRequiresWriterPermission;
  }
  /** @return bool */
  public function getCanChangeCopyRequiresWriterPermission()
  {
    return $this->canChangeCopyRequiresWriterPermission;
  }
  /** @param bool */
  public function setCanChangeSecurityUpdateEnabled($canChangeSecurityUpdateEnabled)
  {
    $this->canChangeSecurityUpdateEnabled = $canChangeSecurityUpdateEnabled;
  }
  /** @return bool */
  public function getCanChangeSecurityUpdateEnabled()
  {
    return $this->canChangeSecurityUpdateEnabled;
  }
  /** @param bool */
  public function setCanChangeViewersCanCopyContent($canChangeViewersCanCopyContent)
  {
    $this->canChangeViewersCanCopyContent = $canChangeViewersCanCopyContent;
  }
  /** @return bool */
  public function getCanChangeViewersCanCopyContent()
  {
    return $this->canChangeViewersCanCopyContent;
  }
  /** @param bool */
  public function setCanComment($canComment)
  {
    $this->canComment = $canComment;
  }
  /** @return bool */
  public function getCanComment()
  {
    return $this->canComment;
  }
  /** @param bool */
  public function setCanCopy($canCopy)
  {
    $this->canCopy = $canCopy;
  }
  /** @return bool */
  public function getCanCopy()
  {
    return $this->canCopy;
  }
  /** @param bool */
  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  /** @return bool */
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  /** @param bool */
  public function setCanDeleteChildren($canDeleteChildren)
  {
    $this->canDeleteChildren = $canDeleteChildren;
  }
  /** @return bool */
  public function getCanDeleteChildren()
  {
    return $this->canDeleteChildren;
  }
  /** @param bool */
  public function setCanDownload($canDownload)
  {
    $this->canDownload = $canDownload;
  }
  /** @return bool */
  public function getCanDownload()
  {
    return $this->canDownload;
  }
  /** @param bool */
  public function setCanEdit($canEdit)
  {
    $this->canEdit = $canEdit;
  }
  /** @return bool */
  public function getCanEdit()
  {
    return $this->canEdit;
  }
  /** @param bool */
  public function setCanListChildren($canListChildren)
  {
    $this->canListChildren = $canListChildren;
  }
  /** @return bool */
  public function getCanListChildren()
  {
    return $this->canListChildren;
  }
  /** @param bool */
  public function setCanModifyContent($canModifyContent)
  {
    $this->canModifyContent = $canModifyContent;
  }
  /** @return bool */
  public function getCanModifyContent()
  {
    return $this->canModifyContent;
  }
  /** @param bool */
  public function setCanModifyContentRestriction($canModifyContentRestriction)
  {
    $this->canModifyContentRestriction = $canModifyContentRestriction;
  }
  /** @return bool */
  public function getCanModifyContentRestriction()
  {
    return $this->canModifyContentRestriction;
  }
  /** @param bool */
  public function setCanModifyLabels($canModifyLabels)
  {
    $this->canModifyLabels = $canModifyLabels;
  }
  /** @return bool */
  public function getCanModifyLabels()
  {
    return $this->canModifyLabels;
  }
  /** @param bool */
  public function setCanMoveChildrenOutOfDrive($canMoveChildrenOutOfDrive)
  {
    $this->canMoveChildrenOutOfDrive = $canMoveChildrenOutOfDrive;
  }
  /** @return bool */
  public function getCanMoveChildrenOutOfDrive()
  {
    return $this->canMoveChildrenOutOfDrive;
  }
  /** @param bool */
  public function setCanMoveChildrenOutOfTeamDrive($canMoveChildrenOutOfTeamDrive)
  {
    $this->canMoveChildrenOutOfTeamDrive = $canMoveChildrenOutOfTeamDrive;
  }
  /** @return bool */
  public function getCanMoveChildrenOutOfTeamDrive()
  {
    return $this->canMoveChildrenOutOfTeamDrive;
  }
  /** @param bool */
  public function setCanMoveChildrenWithinDrive($canMoveChildrenWithinDrive)
  {
    $this->canMoveChildrenWithinDrive = $canMoveChildrenWithinDrive;
  }
  /** @return bool */
  public function getCanMoveChildrenWithinDrive()
  {
    return $this->canMoveChildrenWithinDrive;
  }
  /** @param bool */
  public function setCanMoveChildrenWithinTeamDrive($canMoveChildrenWithinTeamDrive)
  {
    $this->canMoveChildrenWithinTeamDrive = $canMoveChildrenWithinTeamDrive;
  }
  /** @return bool */
  public function getCanMoveChildrenWithinTeamDrive()
  {
    return $this->canMoveChildrenWithinTeamDrive;
  }
  /** @param bool */
  public function setCanMoveItemIntoTeamDrive($canMoveItemIntoTeamDrive)
  {
    $this->canMoveItemIntoTeamDrive = $canMoveItemIntoTeamDrive;
  }
  /** @return bool */
  public function getCanMoveItemIntoTeamDrive()
  {
    return $this->canMoveItemIntoTeamDrive;
  }
  /** @param bool */
  public function setCanMoveItemOutOfDrive($canMoveItemOutOfDrive)
  {
    $this->canMoveItemOutOfDrive = $canMoveItemOutOfDrive;
  }
  /** @return bool */
  public function getCanMoveItemOutOfDrive()
  {
    return $this->canMoveItemOutOfDrive;
  }
  /** @param bool */
  public function setCanMoveItemOutOfTeamDrive($canMoveItemOutOfTeamDrive)
  {
    $this->canMoveItemOutOfTeamDrive = $canMoveItemOutOfTeamDrive;
  }
  /** @return bool */
  public function getCanMoveItemOutOfTeamDrive()
  {
    return $this->canMoveItemOutOfTeamDrive;
  }
  /** @param bool */
  public function setCanMoveItemWithinDrive($canMoveItemWithinDrive)
  {
    $this->canMoveItemWithinDrive = $canMoveItemWithinDrive;
  }
  /** @return bool */
  public function getCanMoveItemWithinDrive()
  {
    return $this->canMoveItemWithinDrive;
  }
  /** @param bool */
  public function setCanMoveItemWithinTeamDrive($canMoveItemWithinTeamDrive)
  {
    $this->canMoveItemWithinTeamDrive = $canMoveItemWithinTeamDrive;
  }
  /** @return bool */
  public function getCanMoveItemWithinTeamDrive()
  {
    return $this->canMoveItemWithinTeamDrive;
  }
  /** @param bool */
  public function setCanMoveTeamDriveItem($canMoveTeamDriveItem)
  {
    $this->canMoveTeamDriveItem = $canMoveTeamDriveItem;
  }
  /** @return bool */
  public function getCanMoveTeamDriveItem()
  {
    return $this->canMoveTeamDriveItem;
  }
  /** @param bool */
  public function setCanReadDrive($canReadDrive)
  {
    $this->canReadDrive = $canReadDrive;
  }
  /** @return bool */
  public function getCanReadDrive()
  {
    return $this->canReadDrive;
  }
  /** @param bool */
  public function setCanReadLabels($canReadLabels)
  {
    $this->canReadLabels = $canReadLabels;
  }
  /** @return bool */
  public function getCanReadLabels()
  {
    return $this->canReadLabels;
  }
  /** @param bool */
  public function setCanReadRevisions($canReadRevisions)
  {
    $this->canReadRevisions = $canReadRevisions;
  }
  /** @return bool */
  public function getCanReadRevisions()
  {
    return $this->canReadRevisions;
  }
  /** @param bool */
  public function setCanReadTeamDrive($canReadTeamDrive)
  {
    $this->canReadTeamDrive = $canReadTeamDrive;
  }
  /** @return bool */
  public function getCanReadTeamDrive()
  {
    return $this->canReadTeamDrive;
  }
  /** @param bool */
  public function setCanRemoveChildren($canRemoveChildren)
  {
    $this->canRemoveChildren = $canRemoveChildren;
  }
  /** @return bool */
  public function getCanRemoveChildren()
  {
    return $this->canRemoveChildren;
  }
  /** @param bool */
  public function setCanRemoveMyDriveParent($canRemoveMyDriveParent)
  {
    $this->canRemoveMyDriveParent = $canRemoveMyDriveParent;
  }
  /** @return bool */
  public function getCanRemoveMyDriveParent()
  {
    return $this->canRemoveMyDriveParent;
  }
  /** @param bool */
  public function setCanRename($canRename)
  {
    $this->canRename = $canRename;
  }
  /** @return bool */
  public function getCanRename()
  {
    return $this->canRename;
  }
  /** @param bool */
  public function setCanShare($canShare)
  {
    $this->canShare = $canShare;
  }
  /** @return bool */
  public function getCanShare()
  {
    return $this->canShare;
  }
  /** @param bool */
  public function setCanTrash($canTrash)
  {
    $this->canTrash = $canTrash;
  }
  /** @return bool */
  public function getCanTrash()
  {
    return $this->canTrash;
  }
  /** @param bool */
  public function setCanTrashChildren($canTrashChildren)
  {
    $this->canTrashChildren = $canTrashChildren;
  }
  /** @return bool */
  public function getCanTrashChildren()
  {
    return $this->canTrashChildren;
  }
  /** @param bool */
  public function setCanUntrash($canUntrash)
  {
    $this->canUntrash = $canUntrash;
  }
  /** @return bool */
  public function getCanUntrash()
  {
    return $this->canUntrash;
  }
}

class DriveFileContentHints extends \Google\Model
{
  /** @var string */
  public $indexableText;
  /** @var DriveFileContentHintsThumbnail */
  public $thumbnail;
  protected $thumbnailType = DriveFileContentHintsThumbnail::class;
  protected $thumbnailDataType = '';
  /** @param string */
  public function setIndexableText($indexableText)
  {
    $this->indexableText = $indexableText;
  }
  /** @return string */
  public function getIndexableText()
  {
    return $this->indexableText;
  }
  /** @param DriveFileContentHintsThumbnail */
  public function setThumbnail(DriveFileContentHintsThumbnail $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return DriveFileContentHintsThumbnail */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
}

class DriveFileContentHintsThumbnail extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
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

class DriveFileImageMediaMetadata extends \Google\Model
{
  /** @var float */
  public $aperture;
  /** @var string */
  public $cameraMake;
  /** @var string */
  public $cameraModel;
  /** @var string */
  public $colorSpace;
  /** @var float */
  public $exposureBias;
  /** @var string */
  public $exposureMode;
  /** @var float */
  public $exposureTime;
  /** @var bool */
  public $flashUsed;
  /** @var float */
  public $focalLength;
  /** @var int */
  public $height;
  /** @var int */
  public $isoSpeed;
  /** @var string */
  public $lens;
  /** @var DriveFileImageMediaMetadataLocation */
  public $location;
  /** @var float */
  public $maxApertureValue;
  /** @var string */
  public $meteringMode;
  /** @var int */
  public $rotation;
  /** @var string */
  public $sensor;
  /** @var int */
  public $subjectDistance;
  /** @var string */
  public $time;
  /** @var string */
  public $whiteBalance;
  /** @var int */
  public $width;
  protected $locationType = DriveFileImageMediaMetadataLocation::class;
  protected $locationDataType = '';
  /** @param float */
  public function setAperture($aperture)
  {
    $this->aperture = $aperture;
  }
  /** @return float */
  public function getAperture()
  {
    return $this->aperture;
  }
  /** @param string */
  public function setCameraMake($cameraMake)
  {
    $this->cameraMake = $cameraMake;
  }
  /** @return string */
  public function getCameraMake()
  {
    return $this->cameraMake;
  }
  /** @param string */
  public function setCameraModel($cameraModel)
  {
    $this->cameraModel = $cameraModel;
  }
  /** @return string */
  public function getCameraModel()
  {
    return $this->cameraModel;
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
  /** @param float */
  public function setExposureBias($exposureBias)
  {
    $this->exposureBias = $exposureBias;
  }
  /** @return float */
  public function getExposureBias()
  {
    return $this->exposureBias;
  }
  /** @param string */
  public function setExposureMode($exposureMode)
  {
    $this->exposureMode = $exposureMode;
  }
  /** @return string */
  public function getExposureMode()
  {
    return $this->exposureMode;
  }
  /** @param float */
  public function setExposureTime($exposureTime)
  {
    $this->exposureTime = $exposureTime;
  }
  /** @return float */
  public function getExposureTime()
  {
    return $this->exposureTime;
  }
  /** @param bool */
  public function setFlashUsed($flashUsed)
  {
    $this->flashUsed = $flashUsed;
  }
  /** @return bool */
  public function getFlashUsed()
  {
    return $this->flashUsed;
  }
  /** @param float */
  public function setFocalLength($focalLength)
  {
    $this->focalLength = $focalLength;
  }
  /** @return float */
  public function getFocalLength()
  {
    return $this->focalLength;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param int */
  public function setIsoSpeed($isoSpeed)
  {
    $this->isoSpeed = $isoSpeed;
  }
  /** @return int */
  public function getIsoSpeed()
  {
    return $this->isoSpeed;
  }
  /** @param string */
  public function setLens($lens)
  {
    $this->lens = $lens;
  }
  /** @return string */
  public function getLens()
  {
    return $this->lens;
  }
  /** @param DriveFileImageMediaMetadataLocation */
  public function setLocation(DriveFileImageMediaMetadataLocation $location)
  {
    $this->location = $location;
  }
  /** @return DriveFileImageMediaMetadataLocation */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param float */
  public function setMaxApertureValue($maxApertureValue)
  {
    $this->maxApertureValue = $maxApertureValue;
  }
  /** @return float */
  public function getMaxApertureValue()
  {
    return $this->maxApertureValue;
  }
  /** @param string */
  public function setMeteringMode($meteringMode)
  {
    $this->meteringMode = $meteringMode;
  }
  /** @return string */
  public function getMeteringMode()
  {
    return $this->meteringMode;
  }
  /** @param int */
  public function setRotation($rotation)
  {
    $this->rotation = $rotation;
  }
  /** @return int */
  public function getRotation()
  {
    return $this->rotation;
  }
  /** @param string */
  public function setSensor($sensor)
  {
    $this->sensor = $sensor;
  }
  /** @return string */
  public function getSensor()
  {
    return $this->sensor;
  }
  /** @param int */
  public function setSubjectDistance($subjectDistance)
  {
    $this->subjectDistance = $subjectDistance;
  }
  /** @return int */
  public function getSubjectDistance()
  {
    return $this->subjectDistance;
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
  /** @param string */
  public function setWhiteBalance($whiteBalance)
  {
    $this->whiteBalance = $whiteBalance;
  }
  /** @return string */
  public function getWhiteBalance()
  {
    return $this->whiteBalance;
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

class DriveFileImageMediaMetadataLocation extends \Google\Model
{
  public $altitude;
  public $latitude;
  public $longitude;

  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }
  public function getAltitude()
  {
    return $this->altitude;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class DriveFileLabelInfo extends \Google\Collection
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

class DriveFileLinkShareMetadata extends \Google\Model
{
  /** @var bool */
  public $securityUpdateEligible;
  /** @var bool */
  public $securityUpdateEnabled;

  /** @param bool */
  public function setSecurityUpdateEligible($securityUpdateEligible)
  {
    $this->securityUpdateEligible = $securityUpdateEligible;
  }
  /** @return bool */
  public function getSecurityUpdateEligible()
  {
    return $this->securityUpdateEligible;
  }
  /** @param bool */
  public function setSecurityUpdateEnabled($securityUpdateEnabled)
  {
    $this->securityUpdateEnabled = $securityUpdateEnabled;
  }
  /** @return bool */
  public function getSecurityUpdateEnabled()
  {
    return $this->securityUpdateEnabled;
  }
}

class DriveFileShortcutDetails extends \Google\Model
{
  /** @var string */
  public $targetId;
  /** @var string */
  public $targetMimeType;
  /** @var string */
  public $targetResourceKey;

  /** @param string */
  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  /** @return string */
  public function getTargetId()
  {
    return $this->targetId;
  }
  /** @param string */
  public function setTargetMimeType($targetMimeType)
  {
    $this->targetMimeType = $targetMimeType;
  }
  /** @return string */
  public function getTargetMimeType()
  {
    return $this->targetMimeType;
  }
  /** @param string */
  public function setTargetResourceKey($targetResourceKey)
  {
    $this->targetResourceKey = $targetResourceKey;
  }
  /** @return string */
  public function getTargetResourceKey()
  {
    return $this->targetResourceKey;
  }
}

class DriveFileVideoMediaMetadata extends \Google\Model
{
  /** @var string */
  public $durationMillis;
  /** @var int */
  public $height;
  /** @var int */
  public $width;

  /** @param string */
  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
  }
  /** @return string */
  public function getDurationMillis()
  {
    return $this->durationMillis;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
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

class DriveList extends \Google\Collection
{
  /** @var Drive[] */
  public $drives;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'drives';
  protected $drivesType = Drive::class;
  protected $drivesDataType = 'array';
  /** @param Drive[] */
  public function setDrives($drives)
  {
    $this->drives = $drives;
  }
  /** @return Drive[] */
  public function getDrives()
  {
    return $this->drives;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class DriveRestrictions extends \Google\Model
{
  /** @var bool */
  public $adminManagedRestrictions;
  /** @var bool */
  public $copyRequiresWriterPermission;
  /** @var bool */
  public $domainUsersOnly;
  /** @var bool */
  public $driveMembersOnly;

  /** @param bool */
  public function setAdminManagedRestrictions($adminManagedRestrictions)
  {
    $this->adminManagedRestrictions = $adminManagedRestrictions;
  }
  /** @return bool */
  public function getAdminManagedRestrictions()
  {
    return $this->adminManagedRestrictions;
  }
  /** @param bool */
  public function setCopyRequiresWriterPermission($copyRequiresWriterPermission)
  {
    $this->copyRequiresWriterPermission = $copyRequiresWriterPermission;
  }
  /** @return bool */
  public function getCopyRequiresWriterPermission()
  {
    return $this->copyRequiresWriterPermission;
  }
  /** @param bool */
  public function setDomainUsersOnly($domainUsersOnly)
  {
    $this->domainUsersOnly = $domainUsersOnly;
  }
  /** @return bool */
  public function getDomainUsersOnly()
  {
    return $this->domainUsersOnly;
  }
  /** @param bool */
  public function setDriveMembersOnly($driveMembersOnly)
  {
    $this->driveMembersOnly = $driveMembersOnly;
  }
  /** @return bool */
  public function getDriveMembersOnly()
  {
    return $this->driveMembersOnly;
  }
}

class FileList extends \Google\Collection
{
  /** @var DriveFile[] */
  public $files;
  /** @var bool */
  public $incompleteSearch;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'files';
  protected $filesType = DriveFile::class;
  protected $filesDataType = 'array';
  /** @param DriveFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return DriveFile[] */
  public function getFiles()
  {
    return $this->files;
  }
  /** @param bool */
  public function setIncompleteSearch($incompleteSearch)
  {
    $this->incompleteSearch = $incompleteSearch;
  }
  /** @return bool */
  public function getIncompleteSearch()
  {
    return $this->incompleteSearch;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class GeneratedIds extends \Google\Collection
{
  /** @var string[] */
  public $ids;
  /** @var string */
  public $kind;
  /** @var string */
  public $space;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setSpace($space)
  {
    $this->space = $space;
  }
  /** @return string */
  public function getSpace()
  {
    return $this->space;
  }
}

class Label extends \Google\Model
{
  /** @var LabelField[] */
  public $fields;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $revisionId;
  protected $fieldsType = LabelField::class;
  protected $fieldsDataType = 'map';
  /** @param LabelField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return LabelField[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
}

class LabelField extends \Google\Collection
{
  /** @var string[] */
  public $dateString;
  /** @var string */
  public $id;
  /** @var string[] */
  public $integer;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $selection;
  /** @var string[] */
  public $text;
  /** @var User[] */
  public $user;
  /** @var string */
  public $valueType;
  protected $collection_key = 'user';
  protected $userType = User::class;
  protected $userDataType = 'array';
  /** @param string[] */
  public function setDateString($dateString)
  {
    $this->dateString = $dateString;
  }
  /** @return string[] */
  public function getDateString()
  {
    return $this->dateString;
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
  /** @param string[] */
  public function setInteger($integer)
  {
    $this->integer = $integer;
  }
  /** @return string[] */
  public function getInteger()
  {
    return $this->integer;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setSelection($selection)
  {
    $this->selection = $selection;
  }
  /** @return string[] */
  public function getSelection()
  {
    return $this->selection;
  }
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
  /** @param User[] */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return User[] */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class LabelFieldModification extends \Google\Collection
{
  /** @var string */
  public $fieldId;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $setDateValues;
  /** @var string[] */
  public $setIntegerValues;
  /** @var string[] */
  public $setSelectionValues;
  /** @var string[] */
  public $setTextValues;
  /** @var string[] */
  public $setUserValues;
  /** @var bool */
  public $unsetValues;
  protected $collection_key = 'setUserValues';
  /** @param string */
  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /** @return string */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setSetDateValues($setDateValues)
  {
    $this->setDateValues = $setDateValues;
  }
  /** @return string[] */
  public function getSetDateValues()
  {
    return $this->setDateValues;
  }
  /** @param string[] */
  public function setSetIntegerValues($setIntegerValues)
  {
    $this->setIntegerValues = $setIntegerValues;
  }
  /** @return string[] */
  public function getSetIntegerValues()
  {
    return $this->setIntegerValues;
  }
  /** @param string[] */
  public function setSetSelectionValues($setSelectionValues)
  {
    $this->setSelectionValues = $setSelectionValues;
  }
  /** @return string[] */
  public function getSetSelectionValues()
  {
    return $this->setSelectionValues;
  }
  /** @param string[] */
  public function setSetTextValues($setTextValues)
  {
    $this->setTextValues = $setTextValues;
  }
  /** @return string[] */
  public function getSetTextValues()
  {
    return $this->setTextValues;
  }
  /** @param string[] */
  public function setSetUserValues($setUserValues)
  {
    $this->setUserValues = $setUserValues;
  }
  /** @return string[] */
  public function getSetUserValues()
  {
    return $this->setUserValues;
  }
  /** @param bool */
  public function setUnsetValues($unsetValues)
  {
    $this->unsetValues = $unsetValues;
  }
  /** @return bool */
  public function getUnsetValues()
  {
    return $this->unsetValues;
  }
}

class LabelList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Label[] */
  public $labels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'labels';
  protected $labelsType = Label::class;
  protected $labelsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
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

class LabelModification extends \Google\Collection
{
  /** @var LabelFieldModification[] */
  public $fieldModifications;
  /** @var string */
  public $kind;
  /** @var string */
  public $labelId;
  /** @var bool */
  public $removeLabel;
  protected $collection_key = 'fieldModifications';
  protected $fieldModificationsType = LabelFieldModification::class;
  protected $fieldModificationsDataType = 'array';
  /** @param LabelFieldModification[] */
  public function setFieldModifications($fieldModifications)
  {
    $this->fieldModifications = $fieldModifications;
  }
  /** @return LabelFieldModification[] */
  public function getFieldModifications()
  {
    return $this->fieldModifications;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLabelId($labelId)
  {
    $this->labelId = $labelId;
  }
  /** @return string */
  public function getLabelId()
  {
    return $this->labelId;
  }
  /** @param bool */
  public function setRemoveLabel($removeLabel)
  {
    $this->removeLabel = $removeLabel;
  }
  /** @return bool */
  public function getRemoveLabel()
  {
    return $this->removeLabel;
  }
}

class ModifyLabelsRequest extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var LabelModification[] */
  public $labelModifications;
  protected $collection_key = 'labelModifications';
  protected $labelModificationsType = LabelModification::class;
  protected $labelModificationsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param LabelModification[] */
  public function setLabelModifications($labelModifications)
  {
    $this->labelModifications = $labelModifications;
  }
  /** @return LabelModification[] */
  public function getLabelModifications()
  {
    return $this->labelModifications;
  }
}

class ModifyLabelsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Label[] */
  public $modifiedLabels;
  protected $collection_key = 'modifiedLabels';
  protected $modifiedLabelsType = Label::class;
  protected $modifiedLabelsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Label[] */
  public function setModifiedLabels($modifiedLabels)
  {
    $this->modifiedLabels = $modifiedLabels;
  }
  /** @return Label[] */
  public function getModifiedLabels()
  {
    return $this->modifiedLabels;
  }
}

class Permission extends \Google\Collection
{
  /** @var bool */
  public $allowFileDiscovery;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $displayName;
  /** @var string */
  public $domain;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var bool */
  public $pendingOwner;
  /** @var PermissionPermissionDetails[] */
  public $permissionDetails;
  /** @var string */
  public $photoLink;
  /** @var string */
  public $role;
  /** @var PermissionTeamDrivePermissionDetails[] */
  public $teamDrivePermissionDetails;
  /** @var string */
  public $type;
  /** @var string */
  public $view;
  protected $collection_key = 'teamDrivePermissionDetails';
  protected $permissionDetailsType = PermissionPermissionDetails::class;
  protected $permissionDetailsDataType = 'array';
  protected $teamDrivePermissionDetailsType = PermissionTeamDrivePermissionDetails::class;
  protected $teamDrivePermissionDetailsDataType = 'array';
  /** @param bool */
  public function setAllowFileDiscovery($allowFileDiscovery)
  {
    $this->allowFileDiscovery = $allowFileDiscovery;
  }
  /** @return bool */
  public function getAllowFileDiscovery()
  {
    return $this->allowFileDiscovery;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
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
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
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
  /** @param string */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param bool */
  public function setPendingOwner($pendingOwner)
  {
    $this->pendingOwner = $pendingOwner;
  }
  /** @return bool */
  public function getPendingOwner()
  {
    return $this->pendingOwner;
  }
  /** @param PermissionPermissionDetails[] */
  public function setPermissionDetails($permissionDetails)
  {
    $this->permissionDetails = $permissionDetails;
  }
  /** @return PermissionPermissionDetails[] */
  public function getPermissionDetails()
  {
    return $this->permissionDetails;
  }
  /** @param string */
  public function setPhotoLink($photoLink)
  {
    $this->photoLink = $photoLink;
  }
  /** @return string */
  public function getPhotoLink()
  {
    return $this->photoLink;
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
  /** @param PermissionTeamDrivePermissionDetails[] */
  public function setTeamDrivePermissionDetails($teamDrivePermissionDetails)
  {
    $this->teamDrivePermissionDetails = $teamDrivePermissionDetails;
  }
  /** @return PermissionTeamDrivePermissionDetails[] */
  public function getTeamDrivePermissionDetails()
  {
    return $this->teamDrivePermissionDetails;
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
  public function setView($view)
  {
    $this->view = $view;
  }
  /** @return string */
  public function getView()
  {
    return $this->view;
  }
}

class PermissionList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Permission[] */
  public $permissions;
  protected $collection_key = 'permissions';
  protected $permissionsType = Permission::class;
  protected $permissionsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param Permission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return Permission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class PermissionPermissionDetails extends \Google\Model
{
  /** @var bool */
  public $inherited;
  /** @var string */
  public $inheritedFrom;
  /** @var string */
  public $permissionType;
  /** @var string */
  public $role;

  /** @param bool */
  public function setInherited($inherited)
  {
    $this->inherited = $inherited;
  }
  /** @return bool */
  public function getInherited()
  {
    return $this->inherited;
  }
  /** @param string */
  public function setInheritedFrom($inheritedFrom)
  {
    $this->inheritedFrom = $inheritedFrom;
  }
  /** @return string */
  public function getInheritedFrom()
  {
    return $this->inheritedFrom;
  }
  /** @param string */
  public function setPermissionType($permissionType)
  {
    $this->permissionType = $permissionType;
  }
  /** @return string */
  public function getPermissionType()
  {
    return $this->permissionType;
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
}

class PermissionTeamDrivePermissionDetails extends \Google\Model
{
  /** @var bool */
  public $inherited;
  /** @var string */
  public $inheritedFrom;
  /** @var string */
  public $role;
  /** @var string */
  public $teamDrivePermissionType;

  /** @param bool */
  public function setInherited($inherited)
  {
    $this->inherited = $inherited;
  }
  /** @return bool */
  public function getInherited()
  {
    return $this->inherited;
  }
  /** @param string */
  public function setInheritedFrom($inheritedFrom)
  {
    $this->inheritedFrom = $inheritedFrom;
  }
  /** @return string */
  public function getInheritedFrom()
  {
    return $this->inheritedFrom;
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
  public function setTeamDrivePermissionType($teamDrivePermissionType)
  {
    $this->teamDrivePermissionType = $teamDrivePermissionType;
  }
  /** @return string */
  public function getTeamDrivePermissionType()
  {
    return $this->teamDrivePermissionType;
  }
}

class Reply extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var User */
  public $author;
  /** @var string */
  public $content;
  /** @var string */
  public $createdTime;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $htmlContent;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $modifiedTime;
  protected $authorType = User::class;
  protected $authorDataType = '';
  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param User */
  public function setAuthor(User $author)
  {
    $this->author = $author;
  }
  /** @return User */
  public function getAuthor()
  {
    return $this->author;
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
  /** @param string */
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  /** @return string */
  public function getCreatedTime()
  {
    return $this->createdTime;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string */
  public function setHtmlContent($htmlContent)
  {
    $this->htmlContent = $htmlContent;
  }
  /** @return string */
  public function getHtmlContent()
  {
    return $this->htmlContent;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
  /** @return string */
  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }
}

class ReplyList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Reply[] */
  public $replies;
  protected $collection_key = 'replies';
  protected $repliesType = Reply::class;
  protected $repliesDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param Reply[] */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /** @return Reply[] */
  public function getReplies()
  {
    return $this->replies;
  }
}

class Revision extends \Google\Model
{
  /** @var string[] */
  public $exportLinks;
  /** @var string */
  public $id;
  /** @var bool */
  public $keepForever;
  /** @var string */
  public $kind;
  /** @var User */
  public $lastModifyingUser;
  /** @var string */
  public $md5Checksum;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $modifiedTime;
  /** @var string */
  public $originalFilename;
  /** @var bool */
  public $publishAuto;
  /** @var bool */
  public $published;
  /** @var string */
  public $publishedLink;
  /** @var bool */
  public $publishedOutsideDomain;
  /** @var string */
  public $size;
  protected $lastModifyingUserType = User::class;
  protected $lastModifyingUserDataType = '';
  /** @param string[] */
  public function setExportLinks($exportLinks)
  {
    $this->exportLinks = $exportLinks;
  }
  /** @return string[] */
  public function getExportLinks()
  {
    return $this->exportLinks;
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
  public function setKeepForever($keepForever)
  {
    $this->keepForever = $keepForever;
  }
  /** @return bool */
  public function getKeepForever()
  {
    return $this->keepForever;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param User */
  public function setLastModifyingUser(User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }
  /** @return User */
  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }
  /** @param string */
  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }
  /** @return string */
  public function getMd5Checksum()
  {
    return $this->md5Checksum;
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
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
  /** @return string */
  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }
  /** @param string */
  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }
  /** @return string */
  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }
  /** @param bool */
  public function setPublishAuto($publishAuto)
  {
    $this->publishAuto = $publishAuto;
  }
  /** @return bool */
  public function getPublishAuto()
  {
    return $this->publishAuto;
  }
  /** @param bool */
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /** @return bool */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setPublishedLink($publishedLink)
  {
    $this->publishedLink = $publishedLink;
  }
  /** @return string */
  public function getPublishedLink()
  {
    return $this->publishedLink;
  }
  /** @param bool */
  public function setPublishedOutsideDomain($publishedOutsideDomain)
  {
    $this->publishedOutsideDomain = $publishedOutsideDomain;
  }
  /** @return bool */
  public function getPublishedOutsideDomain()
  {
    return $this->publishedOutsideDomain;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
}

class RevisionList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Revision[] */
  public $revisions;
  protected $collection_key = 'revisions';
  protected $revisionsType = Revision::class;
  protected $revisionsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param Revision[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return Revision[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
}

class StartPageToken extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $startPageToken;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setStartPageToken($startPageToken)
  {
    $this->startPageToken = $startPageToken;
  }
  /** @return string */
  public function getStartPageToken()
  {
    return $this->startPageToken;
  }
}

class TeamDrive extends \Google\Model
{
  /** @var TeamDriveBackgroundImageFile */
  public $backgroundImageFile;
  /** @var string */
  public $backgroundImageLink;
  /** @var TeamDriveCapabilities */
  public $capabilities;
  /** @var string */
  public $colorRgb;
  /** @var string */
  public $createdTime;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $orgUnitId;
  /** @var TeamDriveRestrictions */
  public $restrictions;
  /** @var string */
  public $themeId;
  protected $backgroundImageFileType = TeamDriveBackgroundImageFile::class;
  protected $backgroundImageFileDataType = '';
  protected $capabilitiesType = TeamDriveCapabilities::class;
  protected $capabilitiesDataType = '';
  protected $restrictionsType = TeamDriveRestrictions::class;
  protected $restrictionsDataType = '';
  /** @param TeamDriveBackgroundImageFile */
  public function setBackgroundImageFile(TeamDriveBackgroundImageFile $backgroundImageFile)
  {
    $this->backgroundImageFile = $backgroundImageFile;
  }
  /** @return TeamDriveBackgroundImageFile */
  public function getBackgroundImageFile()
  {
    return $this->backgroundImageFile;
  }
  /** @param string */
  public function setBackgroundImageLink($backgroundImageLink)
  {
    $this->backgroundImageLink = $backgroundImageLink;
  }
  /** @return string */
  public function getBackgroundImageLink()
  {
    return $this->backgroundImageLink;
  }
  /** @param TeamDriveCapabilities */
  public function setCapabilities(TeamDriveCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /** @return TeamDriveCapabilities */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /** @param string */
  public function setColorRgb($colorRgb)
  {
    $this->colorRgb = $colorRgb;
  }
  /** @return string */
  public function getColorRgb()
  {
    return $this->colorRgb;
  }
  /** @param string */
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  /** @return string */
  public function getCreatedTime()
  {
    return $this->createdTime;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param TeamDriveRestrictions */
  public function setRestrictions(TeamDriveRestrictions $restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /** @return TeamDriveRestrictions */
  public function getRestrictions()
  {
    return $this->restrictions;
  }
  /** @param string */
  public function setThemeId($themeId)
  {
    $this->themeId = $themeId;
  }
  /** @return string */
  public function getThemeId()
  {
    return $this->themeId;
  }
}

class TeamDriveBackgroundImageFile extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var float */
  public $width;
  /** @var float */
  public $xCoordinate;
  /** @var float */
  public $yCoordinate;

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
  /** @param float */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return float */
  public function getWidth()
  {
    return $this->width;
  }
  /** @param float */
  public function setXCoordinate($xCoordinate)
  {
    $this->xCoordinate = $xCoordinate;
  }
  /** @return float */
  public function getXCoordinate()
  {
    return $this->xCoordinate;
  }
  /** @param float */
  public function setYCoordinate($yCoordinate)
  {
    $this->yCoordinate = $yCoordinate;
  }
  /** @return float */
  public function getYCoordinate()
  {
    return $this->yCoordinate;
  }
}

class TeamDriveCapabilities extends \Google\Model
{
  /** @var bool */
  public $canAddChildren;
  /** @var bool */
  public $canChangeCopyRequiresWriterPermissionRestriction;
  /** @var bool */
  public $canChangeDomainUsersOnlyRestriction;
  /** @var bool */
  public $canChangeTeamDriveBackground;
  /** @var bool */
  public $canChangeTeamMembersOnlyRestriction;
  /** @var bool */
  public $canComment;
  /** @var bool */
  public $canCopy;
  /** @var bool */
  public $canDeleteChildren;
  /** @var bool */
  public $canDeleteTeamDrive;
  /** @var bool */
  public $canDownload;
  /** @var bool */
  public $canEdit;
  /** @var bool */
  public $canListChildren;
  /** @var bool */
  public $canManageMembers;
  /** @var bool */
  public $canReadRevisions;
  /** @var bool */
  public $canRemoveChildren;
  /** @var bool */
  public $canRename;
  /** @var bool */
  public $canRenameTeamDrive;
  /** @var bool */
  public $canResetTeamDriveRestrictions;
  /** @var bool */
  public $canShare;
  /** @var bool */
  public $canTrashChildren;

  /** @param bool */
  public function setCanAddChildren($canAddChildren)
  {
    $this->canAddChildren = $canAddChildren;
  }
  /** @return bool */
  public function getCanAddChildren()
  {
    return $this->canAddChildren;
  }
  /** @param bool */
  public function setCanChangeCopyRequiresWriterPermissionRestriction($canChangeCopyRequiresWriterPermissionRestriction)
  {
    $this->canChangeCopyRequiresWriterPermissionRestriction = $canChangeCopyRequiresWriterPermissionRestriction;
  }
  /** @return bool */
  public function getCanChangeCopyRequiresWriterPermissionRestriction()
  {
    return $this->canChangeCopyRequiresWriterPermissionRestriction;
  }
  /** @param bool */
  public function setCanChangeDomainUsersOnlyRestriction($canChangeDomainUsersOnlyRestriction)
  {
    $this->canChangeDomainUsersOnlyRestriction = $canChangeDomainUsersOnlyRestriction;
  }
  /** @return bool */
  public function getCanChangeDomainUsersOnlyRestriction()
  {
    return $this->canChangeDomainUsersOnlyRestriction;
  }
  /** @param bool */
  public function setCanChangeTeamDriveBackground($canChangeTeamDriveBackground)
  {
    $this->canChangeTeamDriveBackground = $canChangeTeamDriveBackground;
  }
  /** @return bool */
  public function getCanChangeTeamDriveBackground()
  {
    return $this->canChangeTeamDriveBackground;
  }
  /** @param bool */
  public function setCanChangeTeamMembersOnlyRestriction($canChangeTeamMembersOnlyRestriction)
  {
    $this->canChangeTeamMembersOnlyRestriction = $canChangeTeamMembersOnlyRestriction;
  }
  /** @return bool */
  public function getCanChangeTeamMembersOnlyRestriction()
  {
    return $this->canChangeTeamMembersOnlyRestriction;
  }
  /** @param bool */
  public function setCanComment($canComment)
  {
    $this->canComment = $canComment;
  }
  /** @return bool */
  public function getCanComment()
  {
    return $this->canComment;
  }
  /** @param bool */
  public function setCanCopy($canCopy)
  {
    $this->canCopy = $canCopy;
  }
  /** @return bool */
  public function getCanCopy()
  {
    return $this->canCopy;
  }
  /** @param bool */
  public function setCanDeleteChildren($canDeleteChildren)
  {
    $this->canDeleteChildren = $canDeleteChildren;
  }
  /** @return bool */
  public function getCanDeleteChildren()
  {
    return $this->canDeleteChildren;
  }
  /** @param bool */
  public function setCanDeleteTeamDrive($canDeleteTeamDrive)
  {
    $this->canDeleteTeamDrive = $canDeleteTeamDrive;
  }
  /** @return bool */
  public function getCanDeleteTeamDrive()
  {
    return $this->canDeleteTeamDrive;
  }
  /** @param bool */
  public function setCanDownload($canDownload)
  {
    $this->canDownload = $canDownload;
  }
  /** @return bool */
  public function getCanDownload()
  {
    return $this->canDownload;
  }
  /** @param bool */
  public function setCanEdit($canEdit)
  {
    $this->canEdit = $canEdit;
  }
  /** @return bool */
  public function getCanEdit()
  {
    return $this->canEdit;
  }
  /** @param bool */
  public function setCanListChildren($canListChildren)
  {
    $this->canListChildren = $canListChildren;
  }
  /** @return bool */
  public function getCanListChildren()
  {
    return $this->canListChildren;
  }
  /** @param bool */
  public function setCanManageMembers($canManageMembers)
  {
    $this->canManageMembers = $canManageMembers;
  }
  /** @return bool */
  public function getCanManageMembers()
  {
    return $this->canManageMembers;
  }
  /** @param bool */
  public function setCanReadRevisions($canReadRevisions)
  {
    $this->canReadRevisions = $canReadRevisions;
  }
  /** @return bool */
  public function getCanReadRevisions()
  {
    return $this->canReadRevisions;
  }
  /** @param bool */
  public function setCanRemoveChildren($canRemoveChildren)
  {
    $this->canRemoveChildren = $canRemoveChildren;
  }
  /** @return bool */
  public function getCanRemoveChildren()
  {
    return $this->canRemoveChildren;
  }
  /** @param bool */
  public function setCanRename($canRename)
  {
    $this->canRename = $canRename;
  }
  /** @return bool */
  public function getCanRename()
  {
    return $this->canRename;
  }
  /** @param bool */
  public function setCanRenameTeamDrive($canRenameTeamDrive)
  {
    $this->canRenameTeamDrive = $canRenameTeamDrive;
  }
  /** @return bool */
  public function getCanRenameTeamDrive()
  {
    return $this->canRenameTeamDrive;
  }
  /** @param bool */
  public function setCanResetTeamDriveRestrictions($canResetTeamDriveRestrictions)
  {
    $this->canResetTeamDriveRestrictions = $canResetTeamDriveRestrictions;
  }
  /** @return bool */
  public function getCanResetTeamDriveRestrictions()
  {
    return $this->canResetTeamDriveRestrictions;
  }
  /** @param bool */
  public function setCanShare($canShare)
  {
    $this->canShare = $canShare;
  }
  /** @return bool */
  public function getCanShare()
  {
    return $this->canShare;
  }
  /** @param bool */
  public function setCanTrashChildren($canTrashChildren)
  {
    $this->canTrashChildren = $canTrashChildren;
  }
  /** @return bool */
  public function getCanTrashChildren()
  {
    return $this->canTrashChildren;
  }
}

class TeamDriveList extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var TeamDrive[] */
  public $teamDrives;
  protected $collection_key = 'teamDrives';
  protected $teamDrivesType = TeamDrive::class;
  protected $teamDrivesDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param TeamDrive[] */
  public function setTeamDrives($teamDrives)
  {
    $this->teamDrives = $teamDrives;
  }
  /** @return TeamDrive[] */
  public function getTeamDrives()
  {
    return $this->teamDrives;
  }
}

class TeamDriveRestrictions extends \Google\Model
{
  /** @var bool */
  public $adminManagedRestrictions;
  /** @var bool */
  public $copyRequiresWriterPermission;
  /** @var bool */
  public $domainUsersOnly;
  /** @var bool */
  public $teamMembersOnly;

  /** @param bool */
  public function setAdminManagedRestrictions($adminManagedRestrictions)
  {
    $this->adminManagedRestrictions = $adminManagedRestrictions;
  }
  /** @return bool */
  public function getAdminManagedRestrictions()
  {
    return $this->adminManagedRestrictions;
  }
  /** @param bool */
  public function setCopyRequiresWriterPermission($copyRequiresWriterPermission)
  {
    $this->copyRequiresWriterPermission = $copyRequiresWriterPermission;
  }
  /** @return bool */
  public function getCopyRequiresWriterPermission()
  {
    return $this->copyRequiresWriterPermission;
  }
  /** @param bool */
  public function setDomainUsersOnly($domainUsersOnly)
  {
    $this->domainUsersOnly = $domainUsersOnly;
  }
  /** @return bool */
  public function getDomainUsersOnly()
  {
    return $this->domainUsersOnly;
  }
  /** @param bool */
  public function setTeamMembersOnly($teamMembersOnly)
  {
    $this->teamMembersOnly = $teamMembersOnly;
  }
  /** @return bool */
  public function getTeamMembersOnly()
  {
    return $this->teamMembersOnly;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $kind;
  /** @var bool */
  public $me;
  /** @var string */
  public $permissionId;
  /** @var string */
  public $photoLink;

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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param bool */
  public function setMe($me)
  {
    $this->me = $me;
  }
  /** @return bool */
  public function getMe()
  {
    return $this->me;
  }
  /** @param string */
  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }
  /** @return string */
  public function getPermissionId()
  {
    return $this->permissionId;
  }
  /** @param string */
  public function setPhotoLink($photoLink)
  {
    $this->photoLink = $photoLink;
  }
  /** @return string */
  public function getPhotoLink()
  {
    return $this->photoLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(About::class, 'Google_Service_Drive_About');
class_alias(AboutDriveThemes::class, 'Google_Service_Drive_AboutDriveThemes');
class_alias(AboutStorageQuota::class, 'Google_Service_Drive_AboutStorageQuota');
class_alias(AboutTeamDriveThemes::class, 'Google_Service_Drive_AboutTeamDriveThemes');
class_alias(Change::class, 'Google_Service_Drive_Change');
class_alias(ChangeList::class, 'Google_Service_Drive_ChangeList');
class_alias(Channel::class, 'Google_Service_Drive_Channel');
class_alias(Comment::class, 'Google_Service_Drive_Comment');
class_alias(CommentList::class, 'Google_Service_Drive_CommentList');
class_alias(CommentQuotedFileContent::class, 'Google_Service_Drive_CommentQuotedFileContent');
class_alias(ContentRestriction::class, 'Google_Service_Drive_ContentRestriction');
class_alias(Drive::class, 'Google_Service_Drive_Drive');
class_alias(DriveBackgroundImageFile::class, 'Google_Service_Drive_DriveBackgroundImageFile');
class_alias(DriveCapabilities::class, 'Google_Service_Drive_DriveCapabilities');
class_alias(DriveFile::class, 'Google_Service_Drive_DriveFile');
class_alias(DriveFileCapabilities::class, 'Google_Service_Drive_DriveFileCapabilities');
class_alias(DriveFileContentHints::class, 'Google_Service_Drive_DriveFileContentHints');
class_alias(DriveFileContentHintsThumbnail::class, 'Google_Service_Drive_DriveFileContentHintsThumbnail');
class_alias(DriveFileImageMediaMetadata::class, 'Google_Service_Drive_DriveFileImageMediaMetadata');
class_alias(DriveFileImageMediaMetadataLocation::class, 'Google_Service_Drive_DriveFileImageMediaMetadataLocation');
class_alias(DriveFileLabelInfo::class, 'Google_Service_Drive_DriveFileLabelInfo');
class_alias(DriveFileLinkShareMetadata::class, 'Google_Service_Drive_DriveFileLinkShareMetadata');
class_alias(DriveFileShortcutDetails::class, 'Google_Service_Drive_DriveFileShortcutDetails');
class_alias(DriveFileVideoMediaMetadata::class, 'Google_Service_Drive_DriveFileVideoMediaMetadata');
class_alias(DriveList::class, 'Google_Service_Drive_DriveList');
class_alias(DriveRestrictions::class, 'Google_Service_Drive_DriveRestrictions');
class_alias(FileList::class, 'Google_Service_Drive_FileList');
class_alias(GeneratedIds::class, 'Google_Service_Drive_GeneratedIds');
class_alias(Label::class, 'Google_Service_Drive_Label');
class_alias(LabelField::class, 'Google_Service_Drive_LabelField');
class_alias(LabelFieldModification::class, 'Google_Service_Drive_LabelFieldModification');
class_alias(LabelList::class, 'Google_Service_Drive_LabelList');
class_alias(LabelModification::class, 'Google_Service_Drive_LabelModification');
class_alias(ModifyLabelsRequest::class, 'Google_Service_Drive_ModifyLabelsRequest');
class_alias(ModifyLabelsResponse::class, 'Google_Service_Drive_ModifyLabelsResponse');
class_alias(Permission::class, 'Google_Service_Drive_Permission');
class_alias(PermissionList::class, 'Google_Service_Drive_PermissionList');
class_alias(PermissionPermissionDetails::class, 'Google_Service_Drive_PermissionPermissionDetails');
class_alias(PermissionTeamDrivePermissionDetails::class, 'Google_Service_Drive_PermissionTeamDrivePermissionDetails');
class_alias(Reply::class, 'Google_Service_Drive_Reply');
class_alias(ReplyList::class, 'Google_Service_Drive_ReplyList');
class_alias(Revision::class, 'Google_Service_Drive_Revision');
class_alias(RevisionList::class, 'Google_Service_Drive_RevisionList');
class_alias(StartPageToken::class, 'Google_Service_Drive_StartPageToken');
class_alias(TeamDrive::class, 'Google_Service_Drive_TeamDrive');
class_alias(TeamDriveBackgroundImageFile::class, 'Google_Service_Drive_TeamDriveBackgroundImageFile');
class_alias(TeamDriveCapabilities::class, 'Google_Service_Drive_TeamDriveCapabilities');
class_alias(TeamDriveList::class, 'Google_Service_Drive_TeamDriveList');
class_alias(TeamDriveRestrictions::class, 'Google_Service_Drive_TeamDriveRestrictions');
class_alias(User::class, 'Google_Service_Drive_User');
