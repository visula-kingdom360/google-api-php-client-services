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

namespace Google\Service\Vault;

class AccountCount extends \Google\Model
{
  /** @var UserInfo */
  public $account;
  /** @var string */
  public $count;
  protected $accountType = UserInfo::class;
  protected $accountDataType = '';
  /** @param UserInfo */
  public function setAccount(UserInfo $account)
  {
    $this->account = $account;
  }
  /** @return UserInfo */
  public function getAccount()
  {
    return $this->account;
  }
  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
}

class AccountCountError extends \Google\Model
{
  /** @var UserInfo */
  public $account;
  /** @var string */
  public $errorType;
  protected $accountType = UserInfo::class;
  protected $accountDataType = '';
  /** @param UserInfo */
  public function setAccount(UserInfo $account)
  {
    $this->account = $account;
  }
  /** @return UserInfo */
  public function getAccount()
  {
    return $this->account;
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
}

class AccountInfo extends \Google\Collection
{
  /** @var string[] */
  public $emails;
  protected $collection_key = 'emails';
  /** @param string[] */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /** @return string[] */
  public function getEmails()
  {
    return $this->emails;
  }
}

class AddHeldAccountResult extends \Google\Model
{
  /** @var HeldAccount */
  public $account;
  /** @var Status */
  public $status;
  protected $accountType = HeldAccount::class;
  protected $accountDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param HeldAccount */
  public function setAccount(HeldAccount $account)
  {
    $this->account = $account;
  }
  /** @return HeldAccount */
  public function getAccount()
  {
    return $this->account;
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
}

class AddHeldAccountsRequest extends \Google\Collection
{
  /** @var string[] */
  public $accountIds;
  /** @var string[] */
  public $emails;
  protected $collection_key = 'emails';
  /** @param string[] */
  public function setAccountIds($accountIds)
  {
    $this->accountIds = $accountIds;
  }
  /** @return string[] */
  public function getAccountIds()
  {
    return $this->accountIds;
  }
  /** @param string[] */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /** @return string[] */
  public function getEmails()
  {
    return $this->emails;
  }
}

class AddHeldAccountsResponse extends \Google\Collection
{
  /** @var AddHeldAccountResult[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = AddHeldAccountResult::class;
  protected $responsesDataType = 'array';
  /** @param AddHeldAccountResult[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return AddHeldAccountResult[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class AddMatterPermissionsRequest extends \Google\Model
{
  /** @var bool */
  public $ccMe;
  /** @var MatterPermission */
  public $matterPermission;
  /** @var bool */
  public $sendEmails;
  protected $matterPermissionType = MatterPermission::class;
  protected $matterPermissionDataType = '';
  /** @param bool */
  public function setCcMe($ccMe)
  {
    $this->ccMe = $ccMe;
  }
  /** @return bool */
  public function getCcMe()
  {
    return $this->ccMe;
  }
  /** @param MatterPermission */
  public function setMatterPermission(MatterPermission $matterPermission)
  {
    $this->matterPermission = $matterPermission;
  }
  /** @return MatterPermission */
  public function getMatterPermission()
  {
    return $this->matterPermission;
  }
  /** @param bool */
  public function setSendEmails($sendEmails)
  {
    $this->sendEmails = $sendEmails;
  }
  /** @return bool */
  public function getSendEmails()
  {
    return $this->sendEmails;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CloseMatterRequest extends \Google\Model
{
}

class CloseMatterResponse extends \Google\Model
{
  /** @var Matter */
  public $matter;
  protected $matterType = Matter::class;
  protected $matterDataType = '';
  /** @param Matter */
  public function setMatter(Matter $matter)
  {
    $this->matter = $matter;
  }
  /** @return Matter */
  public function getMatter()
  {
    return $this->matter;
  }
}

class CloudStorageFile extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var string */
  public $md5Hash;
  /** @var string */
  public $objectName;
  /** @var string */
  public $size;

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
  public function setObjectName($objectName)
  {
    $this->objectName = $objectName;
  }
  /** @return string */
  public function getObjectName()
  {
    return $this->objectName;
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

class CloudStorageSink extends \Google\Collection
{
  /** @var CloudStorageFile[] */
  public $files;
  protected $collection_key = 'files';
  protected $filesType = CloudStorageFile::class;
  protected $filesDataType = 'array';
  /** @param CloudStorageFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return CloudStorageFile[] */
  public function getFiles()
  {
    return $this->files;
  }
}

class CorpusQuery extends \Google\Model
{
  /** @var HeldDriveQuery */
  public $driveQuery;
  /** @var HeldGroupsQuery */
  public $groupsQuery;
  /** @var HeldHangoutsChatQuery */
  public $hangoutsChatQuery;
  /** @var HeldMailQuery */
  public $mailQuery;
  /** @var HeldVoiceQuery */
  public $voiceQuery;
  protected $driveQueryType = HeldDriveQuery::class;
  protected $driveQueryDataType = '';
  protected $groupsQueryType = HeldGroupsQuery::class;
  protected $groupsQueryDataType = '';
  protected $hangoutsChatQueryType = HeldHangoutsChatQuery::class;
  protected $hangoutsChatQueryDataType = '';
  protected $mailQueryType = HeldMailQuery::class;
  protected $mailQueryDataType = '';
  protected $voiceQueryType = HeldVoiceQuery::class;
  protected $voiceQueryDataType = '';
  /** @param HeldDriveQuery */
  public function setDriveQuery(HeldDriveQuery $driveQuery)
  {
    $this->driveQuery = $driveQuery;
  }
  /** @return HeldDriveQuery */
  public function getDriveQuery()
  {
    return $this->driveQuery;
  }
  /** @param HeldGroupsQuery */
  public function setGroupsQuery(HeldGroupsQuery $groupsQuery)
  {
    $this->groupsQuery = $groupsQuery;
  }
  /** @return HeldGroupsQuery */
  public function getGroupsQuery()
  {
    return $this->groupsQuery;
  }
  /** @param HeldHangoutsChatQuery */
  public function setHangoutsChatQuery(HeldHangoutsChatQuery $hangoutsChatQuery)
  {
    $this->hangoutsChatQuery = $hangoutsChatQuery;
  }
  /** @return HeldHangoutsChatQuery */
  public function getHangoutsChatQuery()
  {
    return $this->hangoutsChatQuery;
  }
  /** @param HeldMailQuery */
  public function setMailQuery(HeldMailQuery $mailQuery)
  {
    $this->mailQuery = $mailQuery;
  }
  /** @return HeldMailQuery */
  public function getMailQuery()
  {
    return $this->mailQuery;
  }
  /** @param HeldVoiceQuery */
  public function setVoiceQuery(HeldVoiceQuery $voiceQuery)
  {
    $this->voiceQuery = $voiceQuery;
  }
  /** @return HeldVoiceQuery */
  public function getVoiceQuery()
  {
    return $this->voiceQuery;
  }
}

class CountArtifactsMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $matterId;
  /** @var Query */
  public $query;
  /** @var string */
  public $startTime;
  protected $queryType = Query::class;
  protected $queryDataType = '';
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
  public function setMatterId($matterId)
  {
    $this->matterId = $matterId;
  }
  /** @return string */
  public function getMatterId()
  {
    return $this->matterId;
  }
  /** @param Query */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /** @return Query */
  public function getQuery()
  {
    return $this->query;
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

class CountArtifactsRequest extends \Google\Model
{
  /** @var Query */
  public $query;
  /** @var string */
  public $view;
  protected $queryType = Query::class;
  protected $queryDataType = '';
  /** @param Query */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /** @return Query */
  public function getQuery()
  {
    return $this->query;
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

class CountArtifactsResponse extends \Google\Model
{
  /** @var GroupsCountResult */
  public $groupsCountResult;
  /** @var MailCountResult */
  public $mailCountResult;
  /** @var string */
  public $totalCount;
  protected $groupsCountResultType = GroupsCountResult::class;
  protected $groupsCountResultDataType = '';
  protected $mailCountResultType = MailCountResult::class;
  protected $mailCountResultDataType = '';
  /** @param GroupsCountResult */
  public function setGroupsCountResult(GroupsCountResult $groupsCountResult)
  {
    $this->groupsCountResult = $groupsCountResult;
  }
  /** @return GroupsCountResult */
  public function getGroupsCountResult()
  {
    return $this->groupsCountResult;
  }
  /** @param MailCountResult */
  public function setMailCountResult(MailCountResult $mailCountResult)
  {
    $this->mailCountResult = $mailCountResult;
  }
  /** @return MailCountResult */
  public function getMailCountResult()
  {
    return $this->mailCountResult;
  }
  /** @param string */
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /** @return string */
  public function getTotalCount()
  {
    return $this->totalCount;
  }
}

class DriveExportOptions extends \Google\Model
{
  /** @var bool */
  public $includeAccessInfo;

  /** @param bool */
  public function setIncludeAccessInfo($includeAccessInfo)
  {
    $this->includeAccessInfo = $includeAccessInfo;
  }
  /** @return bool */
  public function getIncludeAccessInfo()
  {
    return $this->includeAccessInfo;
  }
}

class DriveOptions extends \Google\Model
{
  /** @var string */
  public $clientSideEncryptedOption;
  /** @var bool */
  public $includeSharedDrives;
  /** @var bool */
  public $includeTeamDrives;
  /** @var string */
  public $versionDate;

  /** @param string */
  public function setClientSideEncryptedOption($clientSideEncryptedOption)
  {
    $this->clientSideEncryptedOption = $clientSideEncryptedOption;
  }
  /** @return string */
  public function getClientSideEncryptedOption()
  {
    return $this->clientSideEncryptedOption;
  }
  /** @param bool */
  public function setIncludeSharedDrives($includeSharedDrives)
  {
    $this->includeSharedDrives = $includeSharedDrives;
  }
  /** @return bool */
  public function getIncludeSharedDrives()
  {
    return $this->includeSharedDrives;
  }
  /** @param bool */
  public function setIncludeTeamDrives($includeTeamDrives)
  {
    $this->includeTeamDrives = $includeTeamDrives;
  }
  /** @return bool */
  public function getIncludeTeamDrives()
  {
    return $this->includeTeamDrives;
  }
  /** @param string */
  public function setVersionDate($versionDate)
  {
    $this->versionDate = $versionDate;
  }
  /** @return string */
  public function getVersionDate()
  {
    return $this->versionDate;
  }
}

class Export extends \Google\Model
{
  /** @var CloudStorageSink */
  public $cloudStorageSink;
  /** @var string */
  public $createTime;
  /** @var ExportOptions */
  public $exportOptions;
  /** @var string */
  public $id;
  /** @var string */
  public $matterId;
  /** @var string */
  public $name;
  /** @var Query */
  public $query;
  /** @var UserInfo */
  public $requester;
  /** @var ExportStats */
  public $stats;
  /** @var string */
  public $status;
  protected $cloudStorageSinkType = CloudStorageSink::class;
  protected $cloudStorageSinkDataType = '';
  protected $exportOptionsType = ExportOptions::class;
  protected $exportOptionsDataType = '';
  protected $queryType = Query::class;
  protected $queryDataType = '';
  protected $requesterType = UserInfo::class;
  protected $requesterDataType = '';
  protected $statsType = ExportStats::class;
  protected $statsDataType = '';
  /** @param CloudStorageSink */
  public function setCloudStorageSink(CloudStorageSink $cloudStorageSink)
  {
    $this->cloudStorageSink = $cloudStorageSink;
  }
  /** @return CloudStorageSink */
  public function getCloudStorageSink()
  {
    return $this->cloudStorageSink;
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
  /** @param ExportOptions */
  public function setExportOptions(ExportOptions $exportOptions)
  {
    $this->exportOptions = $exportOptions;
  }
  /** @return ExportOptions */
  public function getExportOptions()
  {
    return $this->exportOptions;
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
  public function setMatterId($matterId)
  {
    $this->matterId = $matterId;
  }
  /** @return string */
  public function getMatterId()
  {
    return $this->matterId;
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
  /** @param Query */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /** @return Query */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param UserInfo */
  public function setRequester(UserInfo $requester)
  {
    $this->requester = $requester;
  }
  /** @return UserInfo */
  public function getRequester()
  {
    return $this->requester;
  }
  /** @param ExportStats */
  public function setStats(ExportStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return ExportStats */
  public function getStats()
  {
    return $this->stats;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class ExportOptions extends \Google\Model
{
  /** @var DriveExportOptions */
  public $driveOptions;
  /** @var GroupsExportOptions */
  public $groupsOptions;
  /** @var HangoutsChatExportOptions */
  public $hangoutsChatOptions;
  /** @var MailExportOptions */
  public $mailOptions;
  /** @var string */
  public $region;
  /** @var VoiceExportOptions */
  public $voiceOptions;
  protected $driveOptionsType = DriveExportOptions::class;
  protected $driveOptionsDataType = '';
  protected $groupsOptionsType = GroupsExportOptions::class;
  protected $groupsOptionsDataType = '';
  protected $hangoutsChatOptionsType = HangoutsChatExportOptions::class;
  protected $hangoutsChatOptionsDataType = '';
  protected $mailOptionsType = MailExportOptions::class;
  protected $mailOptionsDataType = '';
  protected $voiceOptionsType = VoiceExportOptions::class;
  protected $voiceOptionsDataType = '';
  /** @param DriveExportOptions */
  public function setDriveOptions(DriveExportOptions $driveOptions)
  {
    $this->driveOptions = $driveOptions;
  }
  /** @return DriveExportOptions */
  public function getDriveOptions()
  {
    return $this->driveOptions;
  }
  /** @param GroupsExportOptions */
  public function setGroupsOptions(GroupsExportOptions $groupsOptions)
  {
    $this->groupsOptions = $groupsOptions;
  }
  /** @return GroupsExportOptions */
  public function getGroupsOptions()
  {
    return $this->groupsOptions;
  }
  /** @param HangoutsChatExportOptions */
  public function setHangoutsChatOptions(HangoutsChatExportOptions $hangoutsChatOptions)
  {
    $this->hangoutsChatOptions = $hangoutsChatOptions;
  }
  /** @return HangoutsChatExportOptions */
  public function getHangoutsChatOptions()
  {
    return $this->hangoutsChatOptions;
  }
  /** @param MailExportOptions */
  public function setMailOptions(MailExportOptions $mailOptions)
  {
    $this->mailOptions = $mailOptions;
  }
  /** @return MailExportOptions */
  public function getMailOptions()
  {
    return $this->mailOptions;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param VoiceExportOptions */
  public function setVoiceOptions(VoiceExportOptions $voiceOptions)
  {
    $this->voiceOptions = $voiceOptions;
  }
  /** @return VoiceExportOptions */
  public function getVoiceOptions()
  {
    return $this->voiceOptions;
  }
}

class ExportStats extends \Google\Model
{
  /** @var string */
  public $exportedArtifactCount;
  /** @var string */
  public $sizeInBytes;
  /** @var string */
  public $totalArtifactCount;

  /** @param string */
  public function setExportedArtifactCount($exportedArtifactCount)
  {
    $this->exportedArtifactCount = $exportedArtifactCount;
  }
  /** @return string */
  public function getExportedArtifactCount()
  {
    return $this->exportedArtifactCount;
  }
  /** @param string */
  public function setSizeInBytes($sizeInBytes)
  {
    $this->sizeInBytes = $sizeInBytes;
  }
  /** @return string */
  public function getSizeInBytes()
  {
    return $this->sizeInBytes;
  }
  /** @param string */
  public function setTotalArtifactCount($totalArtifactCount)
  {
    $this->totalArtifactCount = $totalArtifactCount;
  }
  /** @return string */
  public function getTotalArtifactCount()
  {
    return $this->totalArtifactCount;
  }
}

class GroupsCountResult extends \Google\Collection
{
  /** @var AccountCountError[] */
  public $accountCountErrors;
  /** @var AccountCount[] */
  public $accountCounts;
  /** @var string */
  public $matchingAccountsCount;
  /** @var string[] */
  public $nonQueryableAccounts;
  /** @var string */
  public $queriedAccountsCount;
  protected $collection_key = 'nonQueryableAccounts';
  protected $accountCountErrorsType = AccountCountError::class;
  protected $accountCountErrorsDataType = 'array';
  protected $accountCountsType = AccountCount::class;
  protected $accountCountsDataType = 'array';
  /** @param AccountCountError[] */
  public function setAccountCountErrors($accountCountErrors)
  {
    $this->accountCountErrors = $accountCountErrors;
  }
  /** @return AccountCountError[] */
  public function getAccountCountErrors()
  {
    return $this->accountCountErrors;
  }
  /** @param AccountCount[] */
  public function setAccountCounts($accountCounts)
  {
    $this->accountCounts = $accountCounts;
  }
  /** @return AccountCount[] */
  public function getAccountCounts()
  {
    return $this->accountCounts;
  }
  /** @param string */
  public function setMatchingAccountsCount($matchingAccountsCount)
  {
    $this->matchingAccountsCount = $matchingAccountsCount;
  }
  /** @return string */
  public function getMatchingAccountsCount()
  {
    return $this->matchingAccountsCount;
  }
  /** @param string[] */
  public function setNonQueryableAccounts($nonQueryableAccounts)
  {
    $this->nonQueryableAccounts = $nonQueryableAccounts;
  }
  /** @return string[] */
  public function getNonQueryableAccounts()
  {
    return $this->nonQueryableAccounts;
  }
  /** @param string */
  public function setQueriedAccountsCount($queriedAccountsCount)
  {
    $this->queriedAccountsCount = $queriedAccountsCount;
  }
  /** @return string */
  public function getQueriedAccountsCount()
  {
    return $this->queriedAccountsCount;
  }
}

class GroupsExportOptions extends \Google\Model
{
  /** @var string */
  public $exportFormat;

  /** @param string */
  public function setExportFormat($exportFormat)
  {
    $this->exportFormat = $exportFormat;
  }
  /** @return string */
  public function getExportFormat()
  {
    return $this->exportFormat;
  }
}

class HangoutsChatExportOptions extends \Google\Model
{
  /** @var string */
  public $exportFormat;

  /** @param string */
  public function setExportFormat($exportFormat)
  {
    $this->exportFormat = $exportFormat;
  }
  /** @return string */
  public function getExportFormat()
  {
    return $this->exportFormat;
  }
}

class HangoutsChatInfo extends \Google\Collection
{
  /** @var string[] */
  public $roomId;
  protected $collection_key = 'roomId';
  /** @param string[] */
  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }
  /** @return string[] */
  public function getRoomId()
  {
    return $this->roomId;
  }
}

class HangoutsChatOptions extends \Google\Model
{
  /** @var bool */
  public $includeRooms;

  /** @param bool */
  public function setIncludeRooms($includeRooms)
  {
    $this->includeRooms = $includeRooms;
  }
  /** @return bool */
  public function getIncludeRooms()
  {
    return $this->includeRooms;
  }
}

class HeldAccount extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $email;
  /** @var string */
  public $firstName;
  /** @var string */
  public $holdTime;
  /** @var string */
  public $lastName;

  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
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
  /** @param string */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  /** @return string */
  public function getFirstName()
  {
    return $this->firstName;
  }
  /** @param string */
  public function setHoldTime($holdTime)
  {
    $this->holdTime = $holdTime;
  }
  /** @return string */
  public function getHoldTime()
  {
    return $this->holdTime;
  }
  /** @param string */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /** @return string */
  public function getLastName()
  {
    return $this->lastName;
  }
}

class HeldDriveQuery extends \Google\Model
{
  /** @var bool */
  public $includeSharedDriveFiles;
  /** @var bool */
  public $includeTeamDriveFiles;

  /** @param bool */
  public function setIncludeSharedDriveFiles($includeSharedDriveFiles)
  {
    $this->includeSharedDriveFiles = $includeSharedDriveFiles;
  }
  /** @return bool */
  public function getIncludeSharedDriveFiles()
  {
    return $this->includeSharedDriveFiles;
  }
  /** @param bool */
  public function setIncludeTeamDriveFiles($includeTeamDriveFiles)
  {
    $this->includeTeamDriveFiles = $includeTeamDriveFiles;
  }
  /** @return bool */
  public function getIncludeTeamDriveFiles()
  {
    return $this->includeTeamDriveFiles;
  }
}

class HeldGroupsQuery extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $terms;

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
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return string */
  public function getTerms()
  {
    return $this->terms;
  }
}

class HeldHangoutsChatQuery extends \Google\Model
{
  /** @var bool */
  public $includeRooms;

  /** @param bool */
  public function setIncludeRooms($includeRooms)
  {
    $this->includeRooms = $includeRooms;
  }
  /** @return bool */
  public function getIncludeRooms()
  {
    return $this->includeRooms;
  }
}

class HeldMailQuery extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $terms;

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
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return string */
  public function getTerms()
  {
    return $this->terms;
  }
}

class HeldOrgUnit extends \Google\Model
{
  /** @var string */
  public $holdTime;
  /** @var string */
  public $orgUnitId;

  /** @param string */
  public function setHoldTime($holdTime)
  {
    $this->holdTime = $holdTime;
  }
  /** @return string */
  public function getHoldTime()
  {
    return $this->holdTime;
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
}

class HeldVoiceQuery extends \Google\Collection
{
  /** @var string[] */
  public $coveredData;
  protected $collection_key = 'coveredData';
  /** @param string[] */
  public function setCoveredData($coveredData)
  {
    $this->coveredData = $coveredData;
  }
  /** @return string[] */
  public function getCoveredData()
  {
    return $this->coveredData;
  }
}

class Hold extends \Google\Collection
{
  /** @var HeldAccount[] */
  public $accounts;
  /** @var string */
  public $corpus;
  /** @var string */
  public $holdId;
  /** @var string */
  public $name;
  /** @var HeldOrgUnit */
  public $orgUnit;
  /** @var CorpusQuery */
  public $query;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'accounts';
  protected $accountsType = HeldAccount::class;
  protected $accountsDataType = 'array';
  protected $orgUnitType = HeldOrgUnit::class;
  protected $orgUnitDataType = '';
  protected $queryType = CorpusQuery::class;
  protected $queryDataType = '';
  /** @param HeldAccount[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return HeldAccount[] */
  public function getAccounts()
  {
    return $this->accounts;
  }
  /** @param string */
  public function setCorpus($corpus)
  {
    $this->corpus = $corpus;
  }
  /** @return string */
  public function getCorpus()
  {
    return $this->corpus;
  }
  /** @param string */
  public function setHoldId($holdId)
  {
    $this->holdId = $holdId;
  }
  /** @return string */
  public function getHoldId()
  {
    return $this->holdId;
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
  /** @param HeldOrgUnit */
  public function setOrgUnit(HeldOrgUnit $orgUnit)
  {
    $this->orgUnit = $orgUnit;
  }
  /** @return HeldOrgUnit */
  public function getOrgUnit()
  {
    return $this->orgUnit;
  }
  /** @param CorpusQuery */
  public function setQuery(CorpusQuery $query)
  {
    $this->query = $query;
  }
  /** @return CorpusQuery */
  public function getQuery()
  {
    return $this->query;
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

class ListExportsResponse extends \Google\Collection
{
  /** @var Export[] */
  public $exports;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'exports';
  protected $exportsType = Export::class;
  protected $exportsDataType = 'array';
  /** @param Export[] */
  public function setExports($exports)
  {
    $this->exports = $exports;
  }
  /** @return Export[] */
  public function getExports()
  {
    return $this->exports;
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

class ListHeldAccountsResponse extends \Google\Collection
{
  /** @var HeldAccount[] */
  public $accounts;
  protected $collection_key = 'accounts';
  protected $accountsType = HeldAccount::class;
  protected $accountsDataType = 'array';
  /** @param HeldAccount[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return HeldAccount[] */
  public function getAccounts()
  {
    return $this->accounts;
  }
}

class ListHoldsResponse extends \Google\Collection
{
  /** @var Hold[] */
  public $holds;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'holds';
  protected $holdsType = Hold::class;
  protected $holdsDataType = 'array';
  /** @param Hold[] */
  public function setHolds($holds)
  {
    $this->holds = $holds;
  }
  /** @return Hold[] */
  public function getHolds()
  {
    return $this->holds;
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

class ListMattersResponse extends \Google\Collection
{
  /** @var Matter[] */
  public $matters;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'matters';
  protected $mattersType = Matter::class;
  protected $mattersDataType = 'array';
  /** @param Matter[] */
  public function setMatters($matters)
  {
    $this->matters = $matters;
  }
  /** @return Matter[] */
  public function getMatters()
  {
    return $this->matters;
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

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListSavedQueriesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SavedQuery[] */
  public $savedQueries;
  protected $collection_key = 'savedQueries';
  protected $savedQueriesType = SavedQuery::class;
  protected $savedQueriesDataType = 'array';
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
  /** @param SavedQuery[] */
  public function setSavedQueries($savedQueries)
  {
    $this->savedQueries = $savedQueries;
  }
  /** @return SavedQuery[] */
  public function getSavedQueries()
  {
    return $this->savedQueries;
  }
}

class MailCountResult extends \Google\Collection
{
  /** @var AccountCountError[] */
  public $accountCountErrors;
  /** @var AccountCount[] */
  public $accountCounts;
  /** @var string */
  public $matchingAccountsCount;
  /** @var string[] */
  public $nonQueryableAccounts;
  /** @var string */
  public $queriedAccountsCount;
  protected $collection_key = 'nonQueryableAccounts';
  protected $accountCountErrorsType = AccountCountError::class;
  protected $accountCountErrorsDataType = 'array';
  protected $accountCountsType = AccountCount::class;
  protected $accountCountsDataType = 'array';
  /** @param AccountCountError[] */
  public function setAccountCountErrors($accountCountErrors)
  {
    $this->accountCountErrors = $accountCountErrors;
  }
  /** @return AccountCountError[] */
  public function getAccountCountErrors()
  {
    return $this->accountCountErrors;
  }
  /** @param AccountCount[] */
  public function setAccountCounts($accountCounts)
  {
    $this->accountCounts = $accountCounts;
  }
  /** @return AccountCount[] */
  public function getAccountCounts()
  {
    return $this->accountCounts;
  }
  /** @param string */
  public function setMatchingAccountsCount($matchingAccountsCount)
  {
    $this->matchingAccountsCount = $matchingAccountsCount;
  }
  /** @return string */
  public function getMatchingAccountsCount()
  {
    return $this->matchingAccountsCount;
  }
  /** @param string[] */
  public function setNonQueryableAccounts($nonQueryableAccounts)
  {
    $this->nonQueryableAccounts = $nonQueryableAccounts;
  }
  /** @return string[] */
  public function getNonQueryableAccounts()
  {
    return $this->nonQueryableAccounts;
  }
  /** @param string */
  public function setQueriedAccountsCount($queriedAccountsCount)
  {
    $this->queriedAccountsCount = $queriedAccountsCount;
  }
  /** @return string */
  public function getQueriedAccountsCount()
  {
    return $this->queriedAccountsCount;
  }
}

class MailExportOptions extends \Google\Model
{
  /** @var string */
  public $exportFormat;
  /** @var bool */
  public $showConfidentialModeContent;
  /** @var bool */
  public $useNewExport;

  /** @param string */
  public function setExportFormat($exportFormat)
  {
    $this->exportFormat = $exportFormat;
  }
  /** @return string */
  public function getExportFormat()
  {
    return $this->exportFormat;
  }
  /** @param bool */
  public function setShowConfidentialModeContent($showConfidentialModeContent)
  {
    $this->showConfidentialModeContent = $showConfidentialModeContent;
  }
  /** @return bool */
  public function getShowConfidentialModeContent()
  {
    return $this->showConfidentialModeContent;
  }
  /** @param bool */
  public function setUseNewExport($useNewExport)
  {
    $this->useNewExport = $useNewExport;
  }
  /** @return bool */
  public function getUseNewExport()
  {
    return $this->useNewExport;
  }
}

class MailOptions extends \Google\Model
{
  /** @var bool */
  public $excludeDrafts;

  /** @param bool */
  public function setExcludeDrafts($excludeDrafts)
  {
    $this->excludeDrafts = $excludeDrafts;
  }
  /** @return bool */
  public function getExcludeDrafts()
  {
    return $this->excludeDrafts;
  }
}

class Matter extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $matterId;
  /** @var MatterPermission[] */
  public $matterPermissions;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  protected $collection_key = 'matterPermissions';
  protected $matterPermissionsType = MatterPermission::class;
  protected $matterPermissionsDataType = 'array';
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
  public function setMatterId($matterId)
  {
    $this->matterId = $matterId;
  }
  /** @return string */
  public function getMatterId()
  {
    return $this->matterId;
  }
  /** @param MatterPermission[] */
  public function setMatterPermissions($matterPermissions)
  {
    $this->matterPermissions = $matterPermissions;
  }
  /** @return MatterPermission[] */
  public function getMatterPermissions()
  {
    return $this->matterPermissions;
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

class MatterPermission extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $role;

  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
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

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param bool */
  public function setDone($done)
  {
    $this->done = $done;
  }
  /** @return bool */
  public function getDone()
  {
    return $this->done;
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
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
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
  /** @param array[] */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /** @return array[] */
  public function getResponse()
  {
    return $this->response;
  }
}

class OrgUnitInfo extends \Google\Model
{
  /** @var string */
  public $orgUnitId;

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
}

class Query extends \Google\Model
{
  /** @var AccountInfo */
  public $accountInfo;
  /** @var string */
  public $corpus;
  /** @var string */
  public $dataScope;
  /** @var DriveOptions */
  public $driveOptions;
  /** @var string */
  public $endTime;
  /** @var HangoutsChatInfo */
  public $hangoutsChatInfo;
  /** @var HangoutsChatOptions */
  public $hangoutsChatOptions;
  /** @var MailOptions */
  public $mailOptions;
  /** @var string */
  public $method;
  /** @var OrgUnitInfo */
  public $orgUnitInfo;
  /** @var string */
  public $searchMethod;
  /** @var SharedDriveInfo */
  public $sharedDriveInfo;
  /** @var SitesUrlInfo */
  public $sitesUrlInfo;
  /** @var string */
  public $startTime;
  /** @var TeamDriveInfo */
  public $teamDriveInfo;
  /** @var string */
  public $terms;
  /** @var string */
  public $timeZone;
  /** @var VoiceOptions */
  public $voiceOptions;
  protected $accountInfoType = AccountInfo::class;
  protected $accountInfoDataType = '';
  protected $driveOptionsType = DriveOptions::class;
  protected $driveOptionsDataType = '';
  protected $hangoutsChatInfoType = HangoutsChatInfo::class;
  protected $hangoutsChatInfoDataType = '';
  protected $hangoutsChatOptionsType = HangoutsChatOptions::class;
  protected $hangoutsChatOptionsDataType = '';
  protected $mailOptionsType = MailOptions::class;
  protected $mailOptionsDataType = '';
  protected $orgUnitInfoType = OrgUnitInfo::class;
  protected $orgUnitInfoDataType = '';
  protected $sharedDriveInfoType = SharedDriveInfo::class;
  protected $sharedDriveInfoDataType = '';
  protected $sitesUrlInfoType = SitesUrlInfo::class;
  protected $sitesUrlInfoDataType = '';
  protected $teamDriveInfoType = TeamDriveInfo::class;
  protected $teamDriveInfoDataType = '';
  protected $voiceOptionsType = VoiceOptions::class;
  protected $voiceOptionsDataType = '';
  /** @param AccountInfo */
  public function setAccountInfo(AccountInfo $accountInfo)
  {
    $this->accountInfo = $accountInfo;
  }
  /** @return AccountInfo */
  public function getAccountInfo()
  {
    return $this->accountInfo;
  }
  /** @param string */
  public function setCorpus($corpus)
  {
    $this->corpus = $corpus;
  }
  /** @return string */
  public function getCorpus()
  {
    return $this->corpus;
  }
  /** @param string */
  public function setDataScope($dataScope)
  {
    $this->dataScope = $dataScope;
  }
  /** @return string */
  public function getDataScope()
  {
    return $this->dataScope;
  }
  /** @param DriveOptions */
  public function setDriveOptions(DriveOptions $driveOptions)
  {
    $this->driveOptions = $driveOptions;
  }
  /** @return DriveOptions */
  public function getDriveOptions()
  {
    return $this->driveOptions;
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
  /** @param HangoutsChatInfo */
  public function setHangoutsChatInfo(HangoutsChatInfo $hangoutsChatInfo)
  {
    $this->hangoutsChatInfo = $hangoutsChatInfo;
  }
  /** @return HangoutsChatInfo */
  public function getHangoutsChatInfo()
  {
    return $this->hangoutsChatInfo;
  }
  /** @param HangoutsChatOptions */
  public function setHangoutsChatOptions(HangoutsChatOptions $hangoutsChatOptions)
  {
    $this->hangoutsChatOptions = $hangoutsChatOptions;
  }
  /** @return HangoutsChatOptions */
  public function getHangoutsChatOptions()
  {
    return $this->hangoutsChatOptions;
  }
  /** @param MailOptions */
  public function setMailOptions(MailOptions $mailOptions)
  {
    $this->mailOptions = $mailOptions;
  }
  /** @return MailOptions */
  public function getMailOptions()
  {
    return $this->mailOptions;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param OrgUnitInfo */
  public function setOrgUnitInfo(OrgUnitInfo $orgUnitInfo)
  {
    $this->orgUnitInfo = $orgUnitInfo;
  }
  /** @return OrgUnitInfo */
  public function getOrgUnitInfo()
  {
    return $this->orgUnitInfo;
  }
  /** @param string */
  public function setSearchMethod($searchMethod)
  {
    $this->searchMethod = $searchMethod;
  }
  /** @return string */
  public function getSearchMethod()
  {
    return $this->searchMethod;
  }
  /** @param SharedDriveInfo */
  public function setSharedDriveInfo(SharedDriveInfo $sharedDriveInfo)
  {
    $this->sharedDriveInfo = $sharedDriveInfo;
  }
  /** @return SharedDriveInfo */
  public function getSharedDriveInfo()
  {
    return $this->sharedDriveInfo;
  }
  /** @param SitesUrlInfo */
  public function setSitesUrlInfo(SitesUrlInfo $sitesUrlInfo)
  {
    $this->sitesUrlInfo = $sitesUrlInfo;
  }
  /** @return SitesUrlInfo */
  public function getSitesUrlInfo()
  {
    return $this->sitesUrlInfo;
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
  /** @param TeamDriveInfo */
  public function setTeamDriveInfo(TeamDriveInfo $teamDriveInfo)
  {
    $this->teamDriveInfo = $teamDriveInfo;
  }
  /** @return TeamDriveInfo */
  public function getTeamDriveInfo()
  {
    return $this->teamDriveInfo;
  }
  /** @param string */
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return string */
  public function getTerms()
  {
    return $this->terms;
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
  /** @param VoiceOptions */
  public function setVoiceOptions(VoiceOptions $voiceOptions)
  {
    $this->voiceOptions = $voiceOptions;
  }
  /** @return VoiceOptions */
  public function getVoiceOptions()
  {
    return $this->voiceOptions;
  }
}

class RemoveHeldAccountsRequest extends \Google\Collection
{
  /** @var string[] */
  public $accountIds;
  protected $collection_key = 'accountIds';
  /** @param string[] */
  public function setAccountIds($accountIds)
  {
    $this->accountIds = $accountIds;
  }
  /** @return string[] */
  public function getAccountIds()
  {
    return $this->accountIds;
  }
}

class RemoveHeldAccountsResponse extends \Google\Collection
{
  /** @var Status[] */
  public $statuses;
  protected $collection_key = 'statuses';
  protected $statusesType = Status::class;
  protected $statusesDataType = 'array';
  /** @param Status[] */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /** @return Status[] */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

class RemoveMatterPermissionsRequest extends \Google\Model
{
  /** @var string */
  public $accountId;

  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
  }
}

class ReopenMatterRequest extends \Google\Model
{
}

class ReopenMatterResponse extends \Google\Model
{
  /** @var Matter */
  public $matter;
  protected $matterType = Matter::class;
  protected $matterDataType = '';
  /** @param Matter */
  public function setMatter(Matter $matter)
  {
    $this->matter = $matter;
  }
  /** @return Matter */
  public function getMatter()
  {
    return $this->matter;
  }
}

class SavedQuery extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $matterId;
  /** @var Query */
  public $query;
  /** @var string */
  public $savedQueryId;
  protected $queryType = Query::class;
  protected $queryDataType = '';
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
  public function setMatterId($matterId)
  {
    $this->matterId = $matterId;
  }
  /** @return string */
  public function getMatterId()
  {
    return $this->matterId;
  }
  /** @param Query */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /** @return Query */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string */
  public function setSavedQueryId($savedQueryId)
  {
    $this->savedQueryId = $savedQueryId;
  }
  /** @return string */
  public function getSavedQueryId()
  {
    return $this->savedQueryId;
  }
}

class SharedDriveInfo extends \Google\Collection
{
  /** @var string[] */
  public $sharedDriveIds;
  protected $collection_key = 'sharedDriveIds';
  /** @param string[] */
  public function setSharedDriveIds($sharedDriveIds)
  {
    $this->sharedDriveIds = $sharedDriveIds;
  }
  /** @return string[] */
  public function getSharedDriveIds()
  {
    return $this->sharedDriveIds;
  }
}

class SitesUrlInfo extends \Google\Collection
{
  /** @var string[] */
  public $urls;
  protected $collection_key = 'urls';
  /** @param string[] */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return string[] */
  public function getUrls()
  {
    return $this->urls;
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

class TeamDriveInfo extends \Google\Collection
{
  /** @var string[] */
  public $teamDriveIds;
  protected $collection_key = 'teamDriveIds';
  /** @param string[] */
  public function setTeamDriveIds($teamDriveIds)
  {
    $this->teamDriveIds = $teamDriveIds;
  }
  /** @return string[] */
  public function getTeamDriveIds()
  {
    return $this->teamDriveIds;
  }
}

class UndeleteMatterRequest extends \Google\Model
{
}

class UserInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;

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
}

class VaultEmpty extends \Google\Model
{
}

class VoiceExportOptions extends \Google\Model
{
  /** @var string */
  public $exportFormat;

  /** @param string */
  public function setExportFormat($exportFormat)
  {
    $this->exportFormat = $exportFormat;
  }
  /** @return string */
  public function getExportFormat()
  {
    return $this->exportFormat;
  }
}

class VoiceOptions extends \Google\Collection
{
  /** @var string[] */
  public $coveredData;
  protected $collection_key = 'coveredData';
  /** @param string[] */
  public function setCoveredData($coveredData)
  {
    $this->coveredData = $coveredData;
  }
  /** @return string[] */
  public function getCoveredData()
  {
    return $this->coveredData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountCount::class, 'Google_Service_Vault_AccountCount');
class_alias(AccountCountError::class, 'Google_Service_Vault_AccountCountError');
class_alias(AccountInfo::class, 'Google_Service_Vault_AccountInfo');
class_alias(AddHeldAccountResult::class, 'Google_Service_Vault_AddHeldAccountResult');
class_alias(AddHeldAccountsRequest::class, 'Google_Service_Vault_AddHeldAccountsRequest');
class_alias(AddHeldAccountsResponse::class, 'Google_Service_Vault_AddHeldAccountsResponse');
class_alias(AddMatterPermissionsRequest::class, 'Google_Service_Vault_AddMatterPermissionsRequest');
class_alias(CancelOperationRequest::class, 'Google_Service_Vault_CancelOperationRequest');
class_alias(CloseMatterRequest::class, 'Google_Service_Vault_CloseMatterRequest');
class_alias(CloseMatterResponse::class, 'Google_Service_Vault_CloseMatterResponse');
class_alias(CloudStorageFile::class, 'Google_Service_Vault_CloudStorageFile');
class_alias(CloudStorageSink::class, 'Google_Service_Vault_CloudStorageSink');
class_alias(CorpusQuery::class, 'Google_Service_Vault_CorpusQuery');
class_alias(CountArtifactsMetadata::class, 'Google_Service_Vault_CountArtifactsMetadata');
class_alias(CountArtifactsRequest::class, 'Google_Service_Vault_CountArtifactsRequest');
class_alias(CountArtifactsResponse::class, 'Google_Service_Vault_CountArtifactsResponse');
class_alias(DriveExportOptions::class, 'Google_Service_Vault_DriveExportOptions');
class_alias(DriveOptions::class, 'Google_Service_Vault_DriveOptions');
class_alias(Export::class, 'Google_Service_Vault_Export');
class_alias(ExportOptions::class, 'Google_Service_Vault_ExportOptions');
class_alias(ExportStats::class, 'Google_Service_Vault_ExportStats');
class_alias(GroupsCountResult::class, 'Google_Service_Vault_GroupsCountResult');
class_alias(GroupsExportOptions::class, 'Google_Service_Vault_GroupsExportOptions');
class_alias(HangoutsChatExportOptions::class, 'Google_Service_Vault_HangoutsChatExportOptions');
class_alias(HangoutsChatInfo::class, 'Google_Service_Vault_HangoutsChatInfo');
class_alias(HangoutsChatOptions::class, 'Google_Service_Vault_HangoutsChatOptions');
class_alias(HeldAccount::class, 'Google_Service_Vault_HeldAccount');
class_alias(HeldDriveQuery::class, 'Google_Service_Vault_HeldDriveQuery');
class_alias(HeldGroupsQuery::class, 'Google_Service_Vault_HeldGroupsQuery');
class_alias(HeldHangoutsChatQuery::class, 'Google_Service_Vault_HeldHangoutsChatQuery');
class_alias(HeldMailQuery::class, 'Google_Service_Vault_HeldMailQuery');
class_alias(HeldOrgUnit::class, 'Google_Service_Vault_HeldOrgUnit');
class_alias(HeldVoiceQuery::class, 'Google_Service_Vault_HeldVoiceQuery');
class_alias(Hold::class, 'Google_Service_Vault_Hold');
class_alias(ListExportsResponse::class, 'Google_Service_Vault_ListExportsResponse');
class_alias(ListHeldAccountsResponse::class, 'Google_Service_Vault_ListHeldAccountsResponse');
class_alias(ListHoldsResponse::class, 'Google_Service_Vault_ListHoldsResponse');
class_alias(ListMattersResponse::class, 'Google_Service_Vault_ListMattersResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Vault_ListOperationsResponse');
class_alias(ListSavedQueriesResponse::class, 'Google_Service_Vault_ListSavedQueriesResponse');
class_alias(MailCountResult::class, 'Google_Service_Vault_MailCountResult');
class_alias(MailExportOptions::class, 'Google_Service_Vault_MailExportOptions');
class_alias(MailOptions::class, 'Google_Service_Vault_MailOptions');
class_alias(Matter::class, 'Google_Service_Vault_Matter');
class_alias(MatterPermission::class, 'Google_Service_Vault_MatterPermission');
class_alias(Operation::class, 'Google_Service_Vault_Operation');
class_alias(OrgUnitInfo::class, 'Google_Service_Vault_OrgUnitInfo');
class_alias(Query::class, 'Google_Service_Vault_Query');
class_alias(RemoveHeldAccountsRequest::class, 'Google_Service_Vault_RemoveHeldAccountsRequest');
class_alias(RemoveHeldAccountsResponse::class, 'Google_Service_Vault_RemoveHeldAccountsResponse');
class_alias(RemoveMatterPermissionsRequest::class, 'Google_Service_Vault_RemoveMatterPermissionsRequest');
class_alias(ReopenMatterRequest::class, 'Google_Service_Vault_ReopenMatterRequest');
class_alias(ReopenMatterResponse::class, 'Google_Service_Vault_ReopenMatterResponse');
class_alias(SavedQuery::class, 'Google_Service_Vault_SavedQuery');
class_alias(SharedDriveInfo::class, 'Google_Service_Vault_SharedDriveInfo');
class_alias(SitesUrlInfo::class, 'Google_Service_Vault_SitesUrlInfo');
class_alias(Status::class, 'Google_Service_Vault_Status');
class_alias(TeamDriveInfo::class, 'Google_Service_Vault_TeamDriveInfo');
class_alias(UndeleteMatterRequest::class, 'Google_Service_Vault_UndeleteMatterRequest');
class_alias(UserInfo::class, 'Google_Service_Vault_UserInfo');
class_alias(VaultEmpty::class, 'Google_Service_Vault_VaultEmpty');
class_alias(VoiceExportOptions::class, 'Google_Service_Vault_VoiceExportOptions');
class_alias(VoiceOptions::class, 'Google_Service_Vault_VoiceOptions');
