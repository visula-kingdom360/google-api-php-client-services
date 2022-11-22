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

namespace Google\Service\CloudSearch;

class AbuseReportingConfig extends \Google\Model
{
  /** @var bool */
  public $recordingAllowed;
  /** @var bool */
  public $writtenUgcAllowed;

  /** @param bool */
  public function setRecordingAllowed($recordingAllowed)
  {
    $this->recordingAllowed = $recordingAllowed;
  }
  /** @return bool */
  public function getRecordingAllowed()
  {
    return $this->recordingAllowed;
  }
  /** @param bool */
  public function setWrittenUgcAllowed($writtenUgcAllowed)
  {
    $this->writtenUgcAllowed = $writtenUgcAllowed;
  }
  /** @return bool */
  public function getWrittenUgcAllowed()
  {
    return $this->writtenUgcAllowed;
  }
}

class AckInfo extends \Google\Collection
{
  /** @var int */
  public $unackedDeviceCount;
  /** @var string[] */
  public $unackedDeviceIds;
  protected $collection_key = 'unackedDeviceIds';
  /** @param int */
  public function setUnackedDeviceCount($unackedDeviceCount)
  {
    $this->unackedDeviceCount = $unackedDeviceCount;
  }
  /** @return int */
  public function getUnackedDeviceCount()
  {
    return $this->unackedDeviceCount;
  }
  /** @param string[] */
  public function setUnackedDeviceIds($unackedDeviceIds)
  {
    $this->unackedDeviceIds = $unackedDeviceIds;
  }
  /** @return string[] */
  public function getUnackedDeviceIds()
  {
    return $this->unackedDeviceIds;
  }
}

class AclFixRequest extends \Google\Collection
{
  /** @var string[] */
  public $recipientEmails;
  /** @var string */
  public $role;
  /** @var bool */
  public $shouldFix;
  protected $collection_key = 'recipientEmails';
  /** @param string[] */
  public function setRecipientEmails($recipientEmails)
  {
    $this->recipientEmails = $recipientEmails;
  }
  /** @return string[] */
  public function getRecipientEmails()
  {
    return $this->recipientEmails;
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
  /** @param bool */
  public function setShouldFix($shouldFix)
  {
    $this->shouldFix = $shouldFix;
  }
  /** @return bool */
  public function getShouldFix()
  {
    return $this->shouldFix;
  }
}

class AclFixStatus extends \Google\Collection
{
  /** @var string */
  public $fixability;
  /** @var string[] */
  public $fixableEmailAddress;
  /** @var string[] */
  public $outOfDomainWarningEmailAddress;
  protected $collection_key = 'outOfDomainWarningEmailAddress';
  /** @param string */
  public function setFixability($fixability)
  {
    $this->fixability = $fixability;
  }
  /** @return string */
  public function getFixability()
  {
    return $this->fixability;
  }
  /** @param string[] */
  public function setFixableEmailAddress($fixableEmailAddress)
  {
    $this->fixableEmailAddress = $fixableEmailAddress;
  }
  /** @return string[] */
  public function getFixableEmailAddress()
  {
    return $this->fixableEmailAddress;
  }
  /** @param string[] */
  public function setOutOfDomainWarningEmailAddress($outOfDomainWarningEmailAddress)
  {
    $this->outOfDomainWarningEmailAddress = $outOfDomainWarningEmailAddress;
  }
  /** @return string[] */
  public function getOutOfDomainWarningEmailAddress()
  {
    return $this->outOfDomainWarningEmailAddress;
  }
}

class AclInfo extends \Google\Model
{
  /** @var int */
  public $groupsCount;
  /** @var string */
  public $scope;
  /** @var int */
  public $usersCount;

  /** @param int */
  public function setGroupsCount($groupsCount)
  {
    $this->groupsCount = $groupsCount;
  }
  /** @return int */
  public function getGroupsCount()
  {
    return $this->groupsCount;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param int */
  public function setUsersCount($usersCount)
  {
    $this->usersCount = $usersCount;
  }
  /** @return int */
  public function getUsersCount()
  {
    return $this->usersCount;
  }
}

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

class AddonComposeUiActionMarkup extends \Google\Model
{
  /** @var string */
  public $type;

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

class AffectedMembership extends \Google\Model
{
  /** @var MemberId */
  public $affectedMember;
  /** @var string */
  public $priorMembershipRole;
  /** @var string */
  public $priorMembershipState;
  /** @var string */
  public $targetMembershipRole;
  protected $affectedMemberType = MemberId::class;
  protected $affectedMemberDataType = '';
  /** @param MemberId */
  public function setAffectedMember(MemberId $affectedMember)
  {
    $this->affectedMember = $affectedMember;
  }
  /** @return MemberId */
  public function getAffectedMember()
  {
    return $this->affectedMember;
  }
  /** @param string */
  public function setPriorMembershipRole($priorMembershipRole)
  {
    $this->priorMembershipRole = $priorMembershipRole;
  }
  /** @return string */
  public function getPriorMembershipRole()
  {
    return $this->priorMembershipRole;
  }
  /** @param string */
  public function setPriorMembershipState($priorMembershipState)
  {
    $this->priorMembershipState = $priorMembershipState;
  }
  /** @return string */
  public function getPriorMembershipState()
  {
    return $this->priorMembershipState;
  }
  /** @param string */
  public function setTargetMembershipRole($targetMembershipRole)
  {
    $this->targetMembershipRole = $targetMembershipRole;
  }
  /** @return string */
  public function getTargetMembershipRole()
  {
    return $this->targetMembershipRole;
  }
}

class AllAuthenticatedUsersProto extends \Google\Model
{
}

class Annotation extends \Google\Model
{
  /** @var BabelPlaceholderMetadata */
  public $babelPlaceholderMetadata;
  /** @var CardCapabilityMetadata */
  public $cardCapabilityMetadata;
  /** @var string */
  public $chipRenderType;
  /** @var ConsentedAppUnfurlMetadata */
  public $consentedAppUnfurlMetadata;
  /** @var CustomEmojiMetadata */
  public $customEmojiMetadata;
  /** @var DataLossPreventionMetadata */
  public $dataLossPreventionMetadata;
  /** @var DriveMetadata */
  public $driveMetadata;
  /** @var FormatMetadata */
  public $formatMetadata;
  /** @var GroupRetentionSettingsUpdatedMetaData */
  public $groupRetentionSettingsUpdated;
  /** @var GsuiteIntegrationMetadata */
  public $gsuiteIntegrationMetadata;
  /** @var IncomingWebhookChangedMetadata */
  public $incomingWebhookChangedMetadata;
  /** @var IntegrationConfigUpdatedMetadata */
  public $integrationConfigUpdated;
  /** @var int */
  public $length;
  /** @var string */
  public $localId;
  /** @var MembershipChangedMetadata */
  public $membershipChanged;
  /** @var ReadReceiptsSettingsUpdatedMetadata */
  public $readReceiptsSettingsMetadata;
  /** @var RequiredMessageFeaturesMetadata */
  public $requiredMessageFeaturesMetadata;
  /** @var RoomUpdatedMetadata */
  public $roomUpdated;
  /** @var bool */
  public $serverInvalidated;
  /** @var SlashCommandMetadata */
  public $slashCommandMetadata;
  /** @var int */
  public $startIndex;
  /** @var string */
  public $type;
  /** @var string */
  public $uniqueId;
  /** @var UploadMetadata */
  public $uploadMetadata;
  /** @var UrlMetadata */
  public $urlMetadata;
  /** @var UserMentionMetadata */
  public $userMentionMetadata;
  /** @var VideoCallMetadata */
  public $videoCallMetadata;
  /** @var YoutubeMetadata */
  public $youtubeMetadata;
  protected $babelPlaceholderMetadataType = BabelPlaceholderMetadata::class;
  protected $babelPlaceholderMetadataDataType = '';
  protected $cardCapabilityMetadataType = CardCapabilityMetadata::class;
  protected $cardCapabilityMetadataDataType = '';
  protected $consentedAppUnfurlMetadataType = ConsentedAppUnfurlMetadata::class;
  protected $consentedAppUnfurlMetadataDataType = '';
  protected $customEmojiMetadataType = CustomEmojiMetadata::class;
  protected $customEmojiMetadataDataType = '';
  protected $dataLossPreventionMetadataType = DataLossPreventionMetadata::class;
  protected $dataLossPreventionMetadataDataType = '';
  protected $driveMetadataType = DriveMetadata::class;
  protected $driveMetadataDataType = '';
  protected $formatMetadataType = FormatMetadata::class;
  protected $formatMetadataDataType = '';
  protected $groupRetentionSettingsUpdatedType = GroupRetentionSettingsUpdatedMetaData::class;
  protected $groupRetentionSettingsUpdatedDataType = '';
  protected $gsuiteIntegrationMetadataType = GsuiteIntegrationMetadata::class;
  protected $gsuiteIntegrationMetadataDataType = '';
  protected $incomingWebhookChangedMetadataType = IncomingWebhookChangedMetadata::class;
  protected $incomingWebhookChangedMetadataDataType = '';
  protected $integrationConfigUpdatedType = IntegrationConfigUpdatedMetadata::class;
  protected $integrationConfigUpdatedDataType = '';
  protected $membershipChangedType = MembershipChangedMetadata::class;
  protected $membershipChangedDataType = '';
  protected $readReceiptsSettingsMetadataType = ReadReceiptsSettingsUpdatedMetadata::class;
  protected $readReceiptsSettingsMetadataDataType = '';
  protected $requiredMessageFeaturesMetadataType = RequiredMessageFeaturesMetadata::class;
  protected $requiredMessageFeaturesMetadataDataType = '';
  protected $roomUpdatedType = RoomUpdatedMetadata::class;
  protected $roomUpdatedDataType = '';
  protected $slashCommandMetadataType = SlashCommandMetadata::class;
  protected $slashCommandMetadataDataType = '';
  protected $uploadMetadataType = UploadMetadata::class;
  protected $uploadMetadataDataType = '';
  protected $urlMetadataType = UrlMetadata::class;
  protected $urlMetadataDataType = '';
  protected $userMentionMetadataType = UserMentionMetadata::class;
  protected $userMentionMetadataDataType = '';
  protected $videoCallMetadataType = VideoCallMetadata::class;
  protected $videoCallMetadataDataType = '';
  protected $youtubeMetadataType = YoutubeMetadata::class;
  protected $youtubeMetadataDataType = '';
  /** @param BabelPlaceholderMetadata */
  public function setBabelPlaceholderMetadata(BabelPlaceholderMetadata $babelPlaceholderMetadata)
  {
    $this->babelPlaceholderMetadata = $babelPlaceholderMetadata;
  }
  /** @return BabelPlaceholderMetadata */
  public function getBabelPlaceholderMetadata()
  {
    return $this->babelPlaceholderMetadata;
  }
  /** @param CardCapabilityMetadata */
  public function setCardCapabilityMetadata(CardCapabilityMetadata $cardCapabilityMetadata)
  {
    $this->cardCapabilityMetadata = $cardCapabilityMetadata;
  }
  /** @return CardCapabilityMetadata */
  public function getCardCapabilityMetadata()
  {
    return $this->cardCapabilityMetadata;
  }
  /** @param string */
  public function setChipRenderType($chipRenderType)
  {
    $this->chipRenderType = $chipRenderType;
  }
  /** @return string */
  public function getChipRenderType()
  {
    return $this->chipRenderType;
  }
  /** @param ConsentedAppUnfurlMetadata */
  public function setConsentedAppUnfurlMetadata(ConsentedAppUnfurlMetadata $consentedAppUnfurlMetadata)
  {
    $this->consentedAppUnfurlMetadata = $consentedAppUnfurlMetadata;
  }
  /** @return ConsentedAppUnfurlMetadata */
  public function getConsentedAppUnfurlMetadata()
  {
    return $this->consentedAppUnfurlMetadata;
  }
  /** @param CustomEmojiMetadata */
  public function setCustomEmojiMetadata(CustomEmojiMetadata $customEmojiMetadata)
  {
    $this->customEmojiMetadata = $customEmojiMetadata;
  }
  /** @return CustomEmojiMetadata */
  public function getCustomEmojiMetadata()
  {
    return $this->customEmojiMetadata;
  }
  /** @param DataLossPreventionMetadata */
  public function setDataLossPreventionMetadata(DataLossPreventionMetadata $dataLossPreventionMetadata)
  {
    $this->dataLossPreventionMetadata = $dataLossPreventionMetadata;
  }
  /** @return DataLossPreventionMetadata */
  public function getDataLossPreventionMetadata()
  {
    return $this->dataLossPreventionMetadata;
  }
  /** @param DriveMetadata */
  public function setDriveMetadata(DriveMetadata $driveMetadata)
  {
    $this->driveMetadata = $driveMetadata;
  }
  /** @return DriveMetadata */
  public function getDriveMetadata()
  {
    return $this->driveMetadata;
  }
  /** @param FormatMetadata */
  public function setFormatMetadata(FormatMetadata $formatMetadata)
  {
    $this->formatMetadata = $formatMetadata;
  }
  /** @return FormatMetadata */
  public function getFormatMetadata()
  {
    return $this->formatMetadata;
  }
  /** @param GroupRetentionSettingsUpdatedMetaData */
  public function setGroupRetentionSettingsUpdated(GroupRetentionSettingsUpdatedMetaData $groupRetentionSettingsUpdated)
  {
    $this->groupRetentionSettingsUpdated = $groupRetentionSettingsUpdated;
  }
  /** @return GroupRetentionSettingsUpdatedMetaData */
  public function getGroupRetentionSettingsUpdated()
  {
    return $this->groupRetentionSettingsUpdated;
  }
  /** @param GsuiteIntegrationMetadata */
  public function setGsuiteIntegrationMetadata(GsuiteIntegrationMetadata $gsuiteIntegrationMetadata)
  {
    $this->gsuiteIntegrationMetadata = $gsuiteIntegrationMetadata;
  }
  /** @return GsuiteIntegrationMetadata */
  public function getGsuiteIntegrationMetadata()
  {
    return $this->gsuiteIntegrationMetadata;
  }
  /** @param IncomingWebhookChangedMetadata */
  public function setIncomingWebhookChangedMetadata(IncomingWebhookChangedMetadata $incomingWebhookChangedMetadata)
  {
    $this->incomingWebhookChangedMetadata = $incomingWebhookChangedMetadata;
  }
  /** @return IncomingWebhookChangedMetadata */
  public function getIncomingWebhookChangedMetadata()
  {
    return $this->incomingWebhookChangedMetadata;
  }
  /** @param IntegrationConfigUpdatedMetadata */
  public function setIntegrationConfigUpdated(IntegrationConfigUpdatedMetadata $integrationConfigUpdated)
  {
    $this->integrationConfigUpdated = $integrationConfigUpdated;
  }
  /** @return IntegrationConfigUpdatedMetadata */
  public function getIntegrationConfigUpdated()
  {
    return $this->integrationConfigUpdated;
  }
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
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param MembershipChangedMetadata */
  public function setMembershipChanged(MembershipChangedMetadata $membershipChanged)
  {
    $this->membershipChanged = $membershipChanged;
  }
  /** @return MembershipChangedMetadata */
  public function getMembershipChanged()
  {
    return $this->membershipChanged;
  }
  /** @param ReadReceiptsSettingsUpdatedMetadata */
  public function setReadReceiptsSettingsMetadata(ReadReceiptsSettingsUpdatedMetadata $readReceiptsSettingsMetadata)
  {
    $this->readReceiptsSettingsMetadata = $readReceiptsSettingsMetadata;
  }
  /** @return ReadReceiptsSettingsUpdatedMetadata */
  public function getReadReceiptsSettingsMetadata()
  {
    return $this->readReceiptsSettingsMetadata;
  }
  /** @param RequiredMessageFeaturesMetadata */
  public function setRequiredMessageFeaturesMetadata(RequiredMessageFeaturesMetadata $requiredMessageFeaturesMetadata)
  {
    $this->requiredMessageFeaturesMetadata = $requiredMessageFeaturesMetadata;
  }
  /** @return RequiredMessageFeaturesMetadata */
  public function getRequiredMessageFeaturesMetadata()
  {
    return $this->requiredMessageFeaturesMetadata;
  }
  /** @param RoomUpdatedMetadata */
  public function setRoomUpdated(RoomUpdatedMetadata $roomUpdated)
  {
    $this->roomUpdated = $roomUpdated;
  }
  /** @return RoomUpdatedMetadata */
  public function getRoomUpdated()
  {
    return $this->roomUpdated;
  }
  /** @param bool */
  public function setServerInvalidated($serverInvalidated)
  {
    $this->serverInvalidated = $serverInvalidated;
  }
  /** @return bool */
  public function getServerInvalidated()
  {
    return $this->serverInvalidated;
  }
  /** @param SlashCommandMetadata */
  public function setSlashCommandMetadata(SlashCommandMetadata $slashCommandMetadata)
  {
    $this->slashCommandMetadata = $slashCommandMetadata;
  }
  /** @return SlashCommandMetadata */
  public function getSlashCommandMetadata()
  {
    return $this->slashCommandMetadata;
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
  /** @param string */
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /** @return string */
  public function getUniqueId()
  {
    return $this->uniqueId;
  }
  /** @param UploadMetadata */
  public function setUploadMetadata(UploadMetadata $uploadMetadata)
  {
    $this->uploadMetadata = $uploadMetadata;
  }
  /** @return UploadMetadata */
  public function getUploadMetadata()
  {
    return $this->uploadMetadata;
  }
  /** @param UrlMetadata */
  public function setUrlMetadata(UrlMetadata $urlMetadata)
  {
    $this->urlMetadata = $urlMetadata;
  }
  /** @return UrlMetadata */
  public function getUrlMetadata()
  {
    return $this->urlMetadata;
  }
  /** @param UserMentionMetadata */
  public function setUserMentionMetadata(UserMentionMetadata $userMentionMetadata)
  {
    $this->userMentionMetadata = $userMentionMetadata;
  }
  /** @return UserMentionMetadata */
  public function getUserMentionMetadata()
  {
    return $this->userMentionMetadata;
  }
  /** @param VideoCallMetadata */
  public function setVideoCallMetadata(VideoCallMetadata $videoCallMetadata)
  {
    $this->videoCallMetadata = $videoCallMetadata;
  }
  /** @return VideoCallMetadata */
  public function getVideoCallMetadata()
  {
    return $this->videoCallMetadata;
  }
  /** @param YoutubeMetadata */
  public function setYoutubeMetadata(YoutubeMetadata $youtubeMetadata)
  {
    $this->youtubeMetadata = $youtubeMetadata;
  }
  /** @return YoutubeMetadata */
  public function getYoutubeMetadata()
  {
    return $this->youtubeMetadata;
  }
}

class AppId extends \Google\Model
{
  /** @var string */
  public $appType;
  /** @var string */
  public $gsuiteAppType;
  /** @var string */
  public $id;

  /** @param string */
  public function setAppType($appType)
  {
    $this->appType = $appType;
  }
  /** @return string */
  public function getAppType()
  {
    return $this->appType;
  }
  /** @param string */
  public function setGsuiteAppType($gsuiteAppType)
  {
    $this->gsuiteAppType = $gsuiteAppType;
  }
  /** @return string */
  public function getGsuiteAppType()
  {
    return $this->gsuiteAppType;
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

class AppsDynamiteSharedAction extends \Google\Collection
{
  /** @var string */
  public $function;
  /** @var string */
  public $interaction;
  /** @var string */
  public $loadIndicator;
  /** @var AppsDynamiteSharedActionActionParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = AppsDynamiteSharedActionActionParameter::class;
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
  /** @param AppsDynamiteSharedActionActionParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return AppsDynamiteSharedActionActionParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class AppsDynamiteSharedActionActionParameter extends \Google\Model
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

class AppsDynamiteSharedActivityFeedAnnotationData extends \Google\Model
{
  /** @var string */
  public $activityFeedMessageCreateTime;
  /** @var MessageId */
  public $activityFeedMessageId;
  /** @var AppsDynamiteSharedChatItem */
  public $chatItem;
  /** @var UserInfo */
  public $sharedUserInfo;
  /** @var AppsDynamiteSharedActivityFeedAnnotationDataUserInfo */
  public $userInfo;
  protected $activityFeedMessageIdType = MessageId::class;
  protected $activityFeedMessageIdDataType = '';
  protected $chatItemType = AppsDynamiteSharedChatItem::class;
  protected $chatItemDataType = '';
  protected $sharedUserInfoType = UserInfo::class;
  protected $sharedUserInfoDataType = '';
  protected $userInfoType = AppsDynamiteSharedActivityFeedAnnotationDataUserInfo::class;
  protected $userInfoDataType = '';
  /** @param string */
  public function setActivityFeedMessageCreateTime($activityFeedMessageCreateTime)
  {
    $this->activityFeedMessageCreateTime = $activityFeedMessageCreateTime;
  }
  /** @return string */
  public function getActivityFeedMessageCreateTime()
  {
    return $this->activityFeedMessageCreateTime;
  }
  /** @param MessageId */
  public function setActivityFeedMessageId(MessageId $activityFeedMessageId)
  {
    $this->activityFeedMessageId = $activityFeedMessageId;
  }
  /** @return MessageId */
  public function getActivityFeedMessageId()
  {
    return $this->activityFeedMessageId;
  }
  /** @param AppsDynamiteSharedChatItem */
  public function setChatItem(AppsDynamiteSharedChatItem $chatItem)
  {
    $this->chatItem = $chatItem;
  }
  /** @return AppsDynamiteSharedChatItem */
  public function getChatItem()
  {
    return $this->chatItem;
  }
  /** @param UserInfo */
  public function setSharedUserInfo(UserInfo $sharedUserInfo)
  {
    $this->sharedUserInfo = $sharedUserInfo;
  }
  /** @return UserInfo */
  public function getSharedUserInfo()
  {
    return $this->sharedUserInfo;
  }
  /** @param AppsDynamiteSharedActivityFeedAnnotationDataUserInfo */
  public function setUserInfo(AppsDynamiteSharedActivityFeedAnnotationDataUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return AppsDynamiteSharedActivityFeedAnnotationDataUserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
}

class AppsDynamiteSharedActivityFeedAnnotationDataUserInfo extends \Google\Model
{
  /** @var string */
  public $updaterCountDisplayType;
  /** @var int */
  public $updaterCountToShow;
  /** @var UserId */
  public $updaterToShow;
  protected $updaterToShowType = UserId::class;
  protected $updaterToShowDataType = '';
  /** @param string */
  public function setUpdaterCountDisplayType($updaterCountDisplayType)
  {
    $this->updaterCountDisplayType = $updaterCountDisplayType;
  }
  /** @return string */
  public function getUpdaterCountDisplayType()
  {
    return $this->updaterCountDisplayType;
  }
  /** @param int */
  public function setUpdaterCountToShow($updaterCountToShow)
  {
    $this->updaterCountToShow = $updaterCountToShow;
  }
  /** @return int */
  public function getUpdaterCountToShow()
  {
    return $this->updaterCountToShow;
  }
  /** @param UserId */
  public function setUpdaterToShow(UserId $updaterToShow)
  {
    $this->updaterToShow = $updaterToShow;
  }
  /** @return UserId */
  public function getUpdaterToShow()
  {
    return $this->updaterToShow;
  }
}

class AppsDynamiteSharedAppProfile extends \Google\Model
{
  /** @var string */
  public $avatarEmoji;
  /** @var string */
  public $avatarUrl;
  /** @var string */
  public $name;

  /** @param string */
  public function setAvatarEmoji($avatarEmoji)
  {
    $this->avatarEmoji = $avatarEmoji;
  }
  /** @return string */
  public function getAvatarEmoji()
  {
    return $this->avatarEmoji;
  }
  /** @param string */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /** @return string */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
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
}

class AppsDynamiteSharedAssistantAnnotationData extends \Google\Model
{
  /** @var AppsDynamiteSharedAssistantSuggestion */
  public $suggestion;
  /** @var AppsDynamiteSharedAssistantUnfulfillableRequest */
  public $unfulfillable;
  protected $suggestionType = AppsDynamiteSharedAssistantSuggestion::class;
  protected $suggestionDataType = '';
  protected $unfulfillableType = AppsDynamiteSharedAssistantUnfulfillableRequest::class;
  protected $unfulfillableDataType = '';
  /** @param AppsDynamiteSharedAssistantSuggestion */
  public function setSuggestion(AppsDynamiteSharedAssistantSuggestion $suggestion)
  {
    $this->suggestion = $suggestion;
  }
  /** @return AppsDynamiteSharedAssistantSuggestion */
  public function getSuggestion()
  {
    return $this->suggestion;
  }
  /** @param AppsDynamiteSharedAssistantUnfulfillableRequest */
  public function setUnfulfillable(AppsDynamiteSharedAssistantUnfulfillableRequest $unfulfillable)
  {
    $this->unfulfillable = $unfulfillable;
  }
  /** @return AppsDynamiteSharedAssistantUnfulfillableRequest */
  public function getUnfulfillable()
  {
    return $this->unfulfillable;
  }
}

class AppsDynamiteSharedAssistantDebugContext extends \Google\Model
{
  /** @var string */
  public $query;

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
}

class AppsDynamiteSharedAssistantFeedbackContext extends \Google\Collection
{
  /** @var AppsDynamiteSharedAssistantFeedbackContextFeedbackChip[] */
  public $feedbackChips;
  /** @var string */
  public $thumbsFeedback;
  protected $collection_key = 'feedbackChips';
  protected $feedbackChipsType = AppsDynamiteSharedAssistantFeedbackContextFeedbackChip::class;
  protected $feedbackChipsDataType = 'array';
  /** @param AppsDynamiteSharedAssistantFeedbackContextFeedbackChip[] */
  public function setFeedbackChips($feedbackChips)
  {
    $this->feedbackChips = $feedbackChips;
  }
  /** @return AppsDynamiteSharedAssistantFeedbackContextFeedbackChip[] */
  public function getFeedbackChips()
  {
    return $this->feedbackChips;
  }
  /** @param string */
  public function setThumbsFeedback($thumbsFeedback)
  {
    $this->thumbsFeedback = $thumbsFeedback;
  }
  /** @return string */
  public function getThumbsFeedback()
  {
    return $this->thumbsFeedback;
  }
}

class AppsDynamiteSharedAssistantFeedbackContextFeedbackChip extends \Google\Model
{
  /** @var string */
  public $feedbackChipType;
  /** @var string */
  public $state;

  /** @param string */
  public function setFeedbackChipType($feedbackChipType)
  {
    $this->feedbackChipType = $feedbackChipType;
  }
  /** @return string */
  public function getFeedbackChipType()
  {
    return $this->feedbackChipType;
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

class AppsDynamiteSharedAssistantSessionContext extends \Google\Model
{
  /** @var string */
  public $contextualSessionId;

  /** @param string */
  public function setContextualSessionId($contextualSessionId)
  {
    $this->contextualSessionId = $contextualSessionId;
  }
  /** @return string */
  public function getContextualSessionId()
  {
    return $this->contextualSessionId;
  }
}

class AppsDynamiteSharedAssistantSuggestion extends \Google\Model
{
  /** @var AppsDynamiteSharedAssistantDebugContext */
  public $debugContext;
  /** @var AppsDynamiteSharedAssistantFeedbackContext */
  public $feedbackContext;
  /** @var AppsDynamiteSharedFindDocumentSuggestion */
  public $findDocumentSuggestion;
  /** @var string */
  public $serializedSuggestions;
  /** @var AppsDynamiteSharedAssistantSessionContext */
  public $sessionContext;
  protected $debugContextType = AppsDynamiteSharedAssistantDebugContext::class;
  protected $debugContextDataType = '';
  protected $feedbackContextType = AppsDynamiteSharedAssistantFeedbackContext::class;
  protected $feedbackContextDataType = '';
  protected $findDocumentSuggestionType = AppsDynamiteSharedFindDocumentSuggestion::class;
  protected $findDocumentSuggestionDataType = '';
  protected $sessionContextType = AppsDynamiteSharedAssistantSessionContext::class;
  protected $sessionContextDataType = '';
  /** @param AppsDynamiteSharedAssistantDebugContext */
  public function setDebugContext(AppsDynamiteSharedAssistantDebugContext $debugContext)
  {
    $this->debugContext = $debugContext;
  }
  /** @return AppsDynamiteSharedAssistantDebugContext */
  public function getDebugContext()
  {
    return $this->debugContext;
  }
  /** @param AppsDynamiteSharedAssistantFeedbackContext */
  public function setFeedbackContext(AppsDynamiteSharedAssistantFeedbackContext $feedbackContext)
  {
    $this->feedbackContext = $feedbackContext;
  }
  /** @return AppsDynamiteSharedAssistantFeedbackContext */
  public function getFeedbackContext()
  {
    return $this->feedbackContext;
  }
  /** @param AppsDynamiteSharedFindDocumentSuggestion */
  public function setFindDocumentSuggestion(AppsDynamiteSharedFindDocumentSuggestion $findDocumentSuggestion)
  {
    $this->findDocumentSuggestion = $findDocumentSuggestion;
  }
  /** @return AppsDynamiteSharedFindDocumentSuggestion */
  public function getFindDocumentSuggestion()
  {
    return $this->findDocumentSuggestion;
  }
  /** @param string */
  public function setSerializedSuggestions($serializedSuggestions)
  {
    $this->serializedSuggestions = $serializedSuggestions;
  }
  /** @return string */
  public function getSerializedSuggestions()
  {
    return $this->serializedSuggestions;
  }
  /** @param AppsDynamiteSharedAssistantSessionContext */
  public function setSessionContext(AppsDynamiteSharedAssistantSessionContext $sessionContext)
  {
    $this->sessionContext = $sessionContext;
  }
  /** @return AppsDynamiteSharedAssistantSessionContext */
  public function getSessionContext()
  {
    return $this->sessionContext;
  }
}

class AppsDynamiteSharedAssistantUnfulfillableRequest extends \Google\Model
{
}

class AppsDynamiteSharedAvatarInfo extends \Google\Model
{
  /** @var AppsDynamiteSharedEmoji */
  public $emoji;
  protected $emojiType = AppsDynamiteSharedEmoji::class;
  protected $emojiDataType = '';
  /** @param AppsDynamiteSharedEmoji */
  public function setEmoji(AppsDynamiteSharedEmoji $emoji)
  {
    $this->emoji = $emoji;
  }
  /** @return AppsDynamiteSharedEmoji */
  public function getEmoji()
  {
    return $this->emoji;
  }
}

class AppsDynamiteSharedBackendUploadMetadata extends \Google\Model
{
  /** @var string */
  public $blobPath;
  /** @var string */
  public $contentName;
  /** @var string */
  public $contentSize;
  /** @var string */
  public $contentType;
  /** @var string */
  public $dlpScanOutcome;
  /** @var DlpScanSummary */
  public $dlpScanSummary;
  /** @var GroupId */
  public $groupId;
  /** @var AppsDynamiteSharedDimension */
  public $originalDimension;
  /** @var MessageId */
  public $quoteReplyMessageId;
  /** @var string */
  public $sha256;
  /** @var string */
  public $uploadIp;
  /** @var string */
  public $uploadTimestampUsec;
  /** @var string */
  public $videoId;
  /** @var string */
  public $videoThumbnailBlobId;
  /** @var string */
  public $virusScanResult;
  protected $dlpScanSummaryType = DlpScanSummary::class;
  protected $dlpScanSummaryDataType = '';
  protected $groupIdType = GroupId::class;
  protected $groupIdDataType = '';
  protected $originalDimensionType = AppsDynamiteSharedDimension::class;
  protected $originalDimensionDataType = '';
  protected $quoteReplyMessageIdType = MessageId::class;
  protected $quoteReplyMessageIdDataType = '';
  /** @param string */
  public function setBlobPath($blobPath)
  {
    $this->blobPath = $blobPath;
  }
  /** @return string */
  public function getBlobPath()
  {
    return $this->blobPath;
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
  public function setContentSize($contentSize)
  {
    $this->contentSize = $contentSize;
  }
  /** @return string */
  public function getContentSize()
  {
    return $this->contentSize;
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
  public function setDlpScanOutcome($dlpScanOutcome)
  {
    $this->dlpScanOutcome = $dlpScanOutcome;
  }
  /** @return string */
  public function getDlpScanOutcome()
  {
    return $this->dlpScanOutcome;
  }
  /** @param DlpScanSummary */
  public function setDlpScanSummary(DlpScanSummary $dlpScanSummary)
  {
    $this->dlpScanSummary = $dlpScanSummary;
  }
  /** @return DlpScanSummary */
  public function getDlpScanSummary()
  {
    return $this->dlpScanSummary;
  }
  /** @param GroupId */
  public function setGroupId(GroupId $groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return GroupId */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /** @param AppsDynamiteSharedDimension */
  public function setOriginalDimension(AppsDynamiteSharedDimension $originalDimension)
  {
    $this->originalDimension = $originalDimension;
  }
  /** @return AppsDynamiteSharedDimension */
  public function getOriginalDimension()
  {
    return $this->originalDimension;
  }
  /** @param MessageId */
  public function setQuoteReplyMessageId(MessageId $quoteReplyMessageId)
  {
    $this->quoteReplyMessageId = $quoteReplyMessageId;
  }
  /** @return MessageId */
  public function getQuoteReplyMessageId()
  {
    return $this->quoteReplyMessageId;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
  }
  /** @param string */
  public function setUploadIp($uploadIp)
  {
    $this->uploadIp = $uploadIp;
  }
  /** @return string */
  public function getUploadIp()
  {
    return $this->uploadIp;
  }
  /** @param string */
  public function setUploadTimestampUsec($uploadTimestampUsec)
  {
    $this->uploadTimestampUsec = $uploadTimestampUsec;
  }
  /** @return string */
  public function getUploadTimestampUsec()
  {
    return $this->uploadTimestampUsec;
  }
  /** @param string */
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  /** @return string */
  public function getVideoId()
  {
    return $this->videoId;
  }
  /** @param string */
  public function setVideoThumbnailBlobId($videoThumbnailBlobId)
  {
    $this->videoThumbnailBlobId = $videoThumbnailBlobId;
  }
  /** @return string */
  public function getVideoThumbnailBlobId()
  {
    return $this->videoThumbnailBlobId;
  }
  /** @param string */
  public function setVirusScanResult($virusScanResult)
  {
    $this->virusScanResult = $virusScanResult;
  }
  /** @return string */
  public function getVirusScanResult()
  {
    return $this->virusScanResult;
  }
}

class AppsDynamiteSharedBorderStyle extends \Google\Model
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

class AppsDynamiteSharedButton extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var Color */
  public $color;
  /** @var bool */
  public $disabled;
  /** @var AppsDynamiteSharedIcon */
  public $icon;
  /** @var AppsDynamiteSharedOnClick */
  public $onClick;
  /** @var string */
  public $text;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $iconType = AppsDynamiteSharedIcon::class;
  protected $iconDataType = '';
  protected $onClickType = AppsDynamiteSharedOnClick::class;
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
  /** @param AppsDynamiteSharedIcon */
  public function setIcon(AppsDynamiteSharedIcon $icon)
  {
    $this->icon = $icon;
  }
  /** @return AppsDynamiteSharedIcon */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param AppsDynamiteSharedOnClick */
  public function setOnClick(AppsDynamiteSharedOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return AppsDynamiteSharedOnClick */
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

class AppsDynamiteSharedButtonList extends \Google\Collection
{
  /** @var AppsDynamiteSharedButton[] */
  public $buttons;
  protected $collection_key = 'buttons';
  protected $buttonsType = AppsDynamiteSharedButton::class;
  protected $buttonsDataType = 'array';
  /** @param AppsDynamiteSharedButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return AppsDynamiteSharedButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
}

class AppsDynamiteSharedCalendarEventAnnotationData extends \Google\Model
{
  /** @var AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent */
  public $calendarEvent;
  /** @var AppsDynamiteSharedCalendarEventAnnotationDataEventCreation */
  public $eventCreation;
  protected $calendarEventType = AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent::class;
  protected $calendarEventDataType = '';
  protected $eventCreationType = AppsDynamiteSharedCalendarEventAnnotationDataEventCreation::class;
  protected $eventCreationDataType = '';
  /** @param AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent */
  public function setCalendarEvent(AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent $calendarEvent)
  {
    $this->calendarEvent = $calendarEvent;
  }
  /** @return AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent */
  public function getCalendarEvent()
  {
    return $this->calendarEvent;
  }
  /** @param AppsDynamiteSharedCalendarEventAnnotationDataEventCreation */
  public function setEventCreation(AppsDynamiteSharedCalendarEventAnnotationDataEventCreation $eventCreation)
  {
    $this->eventCreation = $eventCreation;
  }
  /** @return AppsDynamiteSharedCalendarEventAnnotationDataEventCreation */
  public function getEventCreation()
  {
    return $this->eventCreation;
  }
}

class AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent extends \Google\Model
{
  /** @var AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public $endTime;
  /** @var string */
  public $eventId;
  /** @var AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public $startTime;
  /** @var string */
  public $title;
  protected $endTimeType = AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime::class;
  protected $endTimeDataType = '';
  protected $startTimeType = AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime::class;
  protected $startTimeDataType = '';
  /** @param AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public function setEndTime(AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime $endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public function setStartTime(AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime */
  public function getStartTime()
  {
    return $this->startTime;
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

class AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime extends \Google\Model
{
  /** @var Date */
  public $allDay;
  /** @var string */
  public $timed;
  protected $allDayType = Date::class;
  protected $allDayDataType = '';
  /** @param Date */
  public function setAllDay(Date $allDay)
  {
    $this->allDay = $allDay;
  }
  /** @return Date */
  public function getAllDay()
  {
    return $this->allDay;
  }
  /** @param string */
  public function setTimed($timed)
  {
    $this->timed = $timed;
  }
  /** @return string */
  public function getTimed()
  {
    return $this->timed;
  }
}

class AppsDynamiteSharedCalendarEventAnnotationDataEventCreation extends \Google\Model
{
}

class AppsDynamiteSharedCallAnnotationData extends \Google\Model
{
  /** @var string */
  public $callEndedTimestamp;
  /** @var AppsDynamiteSharedCallMetadata */
  public $callMetadata;
  /** @var string */
  public $callStatus;
  protected $callMetadataType = AppsDynamiteSharedCallMetadata::class;
  protected $callMetadataDataType = '';
  /** @param string */
  public function setCallEndedTimestamp($callEndedTimestamp)
  {
    $this->callEndedTimestamp = $callEndedTimestamp;
  }
  /** @return string */
  public function getCallEndedTimestamp()
  {
    return $this->callEndedTimestamp;
  }
  /** @param AppsDynamiteSharedCallMetadata */
  public function setCallMetadata(AppsDynamiteSharedCallMetadata $callMetadata)
  {
    $this->callMetadata = $callMetadata;
  }
  /** @return AppsDynamiteSharedCallMetadata */
  public function getCallMetadata()
  {
    return $this->callMetadata;
  }
  /** @param string */
  public function setCallStatus($callStatus)
  {
    $this->callStatus = $callStatus;
  }
  /** @return string */
  public function getCallStatus()
  {
    return $this->callStatus;
  }
}

class AppsDynamiteSharedCallMetadata extends \Google\Model
{
  /** @var AppsDynamiteSharedMeetMetadata */
  public $meetMetadata;
  protected $meetMetadataType = AppsDynamiteSharedMeetMetadata::class;
  protected $meetMetadataDataType = '';
  /** @param AppsDynamiteSharedMeetMetadata */
  public function setMeetMetadata(AppsDynamiteSharedMeetMetadata $meetMetadata)
  {
    $this->meetMetadata = $meetMetadata;
  }
  /** @return AppsDynamiteSharedMeetMetadata */
  public function getMeetMetadata()
  {
    return $this->meetMetadata;
  }
}

class AppsDynamiteSharedCard extends \Google\Collection
{
  /** @var AppsDynamiteSharedCardCardAction[] */
  public $cardActions;
  /** @var AppsDynamiteSharedCardCardHeader */
  public $header;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedCardSection[] */
  public $sections;
  protected $collection_key = 'sections';
  protected $cardActionsType = AppsDynamiteSharedCardCardAction::class;
  protected $cardActionsDataType = 'array';
  protected $headerType = AppsDynamiteSharedCardCardHeader::class;
  protected $headerDataType = '';
  protected $sectionsType = AppsDynamiteSharedCardSection::class;
  protected $sectionsDataType = 'array';
  /** @param AppsDynamiteSharedCardCardAction[] */
  public function setCardActions($cardActions)
  {
    $this->cardActions = $cardActions;
  }
  /** @return AppsDynamiteSharedCardCardAction[] */
  public function getCardActions()
  {
    return $this->cardActions;
  }
  /** @param AppsDynamiteSharedCardCardHeader */
  public function setHeader(AppsDynamiteSharedCardCardHeader $header)
  {
    $this->header = $header;
  }
  /** @return AppsDynamiteSharedCardCardHeader */
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
  /** @param AppsDynamiteSharedCardSection[] */
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  /** @return AppsDynamiteSharedCardSection[] */
  public function getSections()
  {
    return $this->sections;
  }
}

class AppsDynamiteSharedCardCardAction extends \Google\Model
{
  /** @var string */
  public $actionLabel;
  /** @var AppsDynamiteSharedOnClick */
  public $onClick;
  protected $onClickType = AppsDynamiteSharedOnClick::class;
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
  /** @param AppsDynamiteSharedOnClick */
  public function setOnClick(AppsDynamiteSharedOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return AppsDynamiteSharedOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class AppsDynamiteSharedCardCardHeader extends \Google\Model
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

class AppsDynamiteSharedCardClickSuggestion extends \Google\Model
{
  /** @var string */
  public $actionId;
  /** @var MessageId */
  public $suggestionMessageId;
  protected $suggestionMessageIdType = MessageId::class;
  protected $suggestionMessageIdDataType = '';
  /** @param string */
  public function setActionId($actionId)
  {
    $this->actionId = $actionId;
  }
  /** @return string */
  public function getActionId()
  {
    return $this->actionId;
  }
  /** @param MessageId */
  public function setSuggestionMessageId(MessageId $suggestionMessageId)
  {
    $this->suggestionMessageId = $suggestionMessageId;
  }
  /** @return MessageId */
  public function getSuggestionMessageId()
  {
    return $this->suggestionMessageId;
  }
}

class AppsDynamiteSharedCardSection extends \Google\Collection
{
  /** @var bool */
  public $collapsible;
  /** @var string */
  public $header;
  /** @var int */
  public $uncollapsibleWidgetsCount;
  /** @var AppsDynamiteSharedWidget[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = AppsDynamiteSharedWidget::class;
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
  /** @param AppsDynamiteSharedWidget[] */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /** @return AppsDynamiteSharedWidget[] */
  public function getWidgets()
  {
    return $this->widgets;
  }
}

class AppsDynamiteSharedChatItem extends \Google\Collection
{
  /** @var AppsDynamiteSharedChatItemActivityInfo[] */
  public $activityInfo;
  /** @var AppsDynamiteSharedChatItemGroupInfo */
  public $groupInfo;
  /** @var AppsDynamiteSharedMessageInfo */
  public $messageInfo;
  protected $collection_key = 'activityInfo';
  protected $activityInfoType = AppsDynamiteSharedChatItemActivityInfo::class;
  protected $activityInfoDataType = 'array';
  protected $groupInfoType = AppsDynamiteSharedChatItemGroupInfo::class;
  protected $groupInfoDataType = '';
  protected $messageInfoType = AppsDynamiteSharedMessageInfo::class;
  protected $messageInfoDataType = '';
  /** @param AppsDynamiteSharedChatItemActivityInfo[] */
  public function setActivityInfo($activityInfo)
  {
    $this->activityInfo = $activityInfo;
  }
  /** @return AppsDynamiteSharedChatItemActivityInfo[] */
  public function getActivityInfo()
  {
    return $this->activityInfo;
  }
  /** @param AppsDynamiteSharedChatItemGroupInfo */
  public function setGroupInfo(AppsDynamiteSharedChatItemGroupInfo $groupInfo)
  {
    $this->groupInfo = $groupInfo;
  }
  /** @return AppsDynamiteSharedChatItemGroupInfo */
  public function getGroupInfo()
  {
    return $this->groupInfo;
  }
  /** @param AppsDynamiteSharedMessageInfo */
  public function setMessageInfo(AppsDynamiteSharedMessageInfo $messageInfo)
  {
    $this->messageInfo = $messageInfo;
  }
  /** @return AppsDynamiteSharedMessageInfo */
  public function getMessageInfo()
  {
    return $this->messageInfo;
  }
}

class AppsDynamiteSharedChatItemActivityInfo extends \Google\Model
{
  /** @var AppsDynamiteSharedChatItemActivityInfoFeedItemNudge */
  public $feedItemNudge;
  /** @var AppsDynamiteSharedChatItemActivityInfoFeedItemReactions */
  public $feedItemReactions;
  /** @var AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply */
  public $feedItemThreadReply;
  /** @var AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention */
  public $feedItemUserMention;
  protected $feedItemNudgeType = AppsDynamiteSharedChatItemActivityInfoFeedItemNudge::class;
  protected $feedItemNudgeDataType = '';
  protected $feedItemReactionsType = AppsDynamiteSharedChatItemActivityInfoFeedItemReactions::class;
  protected $feedItemReactionsDataType = '';
  protected $feedItemThreadReplyType = AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply::class;
  protected $feedItemThreadReplyDataType = '';
  protected $feedItemUserMentionType = AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention::class;
  protected $feedItemUserMentionDataType = '';
  /** @param AppsDynamiteSharedChatItemActivityInfoFeedItemNudge */
  public function setFeedItemNudge(AppsDynamiteSharedChatItemActivityInfoFeedItemNudge $feedItemNudge)
  {
    $this->feedItemNudge = $feedItemNudge;
  }
  /** @return AppsDynamiteSharedChatItemActivityInfoFeedItemNudge */
  public function getFeedItemNudge()
  {
    return $this->feedItemNudge;
  }
  /** @param AppsDynamiteSharedChatItemActivityInfoFeedItemReactions */
  public function setFeedItemReactions(AppsDynamiteSharedChatItemActivityInfoFeedItemReactions $feedItemReactions)
  {
    $this->feedItemReactions = $feedItemReactions;
  }
  /** @return AppsDynamiteSharedChatItemActivityInfoFeedItemReactions */
  public function getFeedItemReactions()
  {
    return $this->feedItemReactions;
  }
  /** @param AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply */
  public function setFeedItemThreadReply(AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply $feedItemThreadReply)
  {
    $this->feedItemThreadReply = $feedItemThreadReply;
  }
  /** @return AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply */
  public function getFeedItemThreadReply()
  {
    return $this->feedItemThreadReply;
  }
  /** @param AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention */
  public function setFeedItemUserMention(AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention $feedItemUserMention)
  {
    $this->feedItemUserMention = $feedItemUserMention;
  }
  /** @return AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention */
  public function getFeedItemUserMention()
  {
    return $this->feedItemUserMention;
  }
}

class AppsDynamiteSharedChatItemActivityInfoFeedItemNudge extends \Google\Model
{
  /** @var string */
  public $nudgeType;

  /** @param string */
  public function setNudgeType($nudgeType)
  {
    $this->nudgeType = $nudgeType;
  }
  /** @return string */
  public function getNudgeType()
  {
    return $this->nudgeType;
  }
}

class AppsDynamiteSharedChatItemActivityInfoFeedItemReactions extends \Google\Model
{
}

class AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply extends \Google\Model
{
  /** @var string */
  public $replyType;

  /** @param string */
  public function setReplyType($replyType)
  {
    $this->replyType = $replyType;
  }
  /** @return string */
  public function getReplyType()
  {
    return $this->replyType;
  }
}

class AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention extends \Google\Model
{
  /** @var string */
  public $type;

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

class AppsDynamiteSharedChatItemGroupInfo extends \Google\Model
{
  /** @var string */
  public $attributeCheckerGroupType;
  /** @var string */
  public $groupName;
  /** @var string */
  public $groupReadTimeUsec;
  /** @var bool */
  public $inlineThreadingEnabled;

  /** @param string */
  public function setAttributeCheckerGroupType($attributeCheckerGroupType)
  {
    $this->attributeCheckerGroupType = $attributeCheckerGroupType;
  }
  /** @return string */
  public function getAttributeCheckerGroupType()
  {
    return $this->attributeCheckerGroupType;
  }
  /** @param string */
  public function setGroupName($groupName)
  {
    $this->groupName = $groupName;
  }
  /** @return string */
  public function getGroupName()
  {
    return $this->groupName;
  }
  /** @param string */
  public function setGroupReadTimeUsec($groupReadTimeUsec)
  {
    $this->groupReadTimeUsec = $groupReadTimeUsec;
  }
  /** @return string */
  public function getGroupReadTimeUsec()
  {
    return $this->groupReadTimeUsec;
  }
  /** @param bool */
  public function setInlineThreadingEnabled($inlineThreadingEnabled)
  {
    $this->inlineThreadingEnabled = $inlineThreadingEnabled;
  }
  /** @return bool */
  public function getInlineThreadingEnabled()
  {
    return $this->inlineThreadingEnabled;
  }
}

class AppsDynamiteSharedColumns extends \Google\Collection
{
  /** @var AppsDynamiteSharedColumnsColumn[] */
  public $columnItems;
  /** @var string */
  public $wrapStyle;
  protected $collection_key = 'columnItems';
  protected $columnItemsType = AppsDynamiteSharedColumnsColumn::class;
  protected $columnItemsDataType = 'array';
  /** @param AppsDynamiteSharedColumnsColumn[] */
  public function setColumnItems($columnItems)
  {
    $this->columnItems = $columnItems;
  }
  /** @return AppsDynamiteSharedColumnsColumn[] */
  public function getColumnItems()
  {
    return $this->columnItems;
  }
  /** @param string */
  public function setWrapStyle($wrapStyle)
  {
    $this->wrapStyle = $wrapStyle;
  }
  /** @return string */
  public function getWrapStyle()
  {
    return $this->wrapStyle;
  }
}

class AppsDynamiteSharedColumnsColumn extends \Google\Collection
{
  /** @var string */
  public $horizontalAlignment;
  /** @var string */
  public $horizontalSizeStyle;
  /** @var string */
  public $verticalAlignment;
  /** @var AppsDynamiteSharedColumnsColumnWidgets[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = AppsDynamiteSharedColumnsColumnWidgets::class;
  protected $widgetsDataType = 'array';
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
  /** @param string */
  public function setHorizontalSizeStyle($horizontalSizeStyle)
  {
    $this->horizontalSizeStyle = $horizontalSizeStyle;
  }
  /** @return string */
  public function getHorizontalSizeStyle()
  {
    return $this->horizontalSizeStyle;
  }
  /** @param string */
  public function setVerticalAlignment($verticalAlignment)
  {
    $this->verticalAlignment = $verticalAlignment;
  }
  /** @return string */
  public function getVerticalAlignment()
  {
    return $this->verticalAlignment;
  }
  /** @param AppsDynamiteSharedColumnsColumnWidgets[] */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /** @return AppsDynamiteSharedColumnsColumnWidgets[] */
  public function getWidgets()
  {
    return $this->widgets;
  }
}

class AppsDynamiteSharedColumnsColumnWidgets extends \Google\Model
{
  /** @var AppsDynamiteSharedButtonList */
  public $buttonList;
  /** @var AppsDynamiteSharedDateTimePicker */
  public $dateTimePicker;
  /** @var AppsDynamiteSharedDecoratedText */
  public $decoratedText;
  /** @var AppsDynamiteSharedImage */
  public $image;
  /** @var AppsDynamiteSharedSelectionInput */
  public $selectionInput;
  /** @var AppsDynamiteSharedTextInput */
  public $textInput;
  /** @var AppsDynamiteSharedTextParagraph */
  public $textParagraph;
  protected $buttonListType = AppsDynamiteSharedButtonList::class;
  protected $buttonListDataType = '';
  protected $dateTimePickerType = AppsDynamiteSharedDateTimePicker::class;
  protected $dateTimePickerDataType = '';
  protected $decoratedTextType = AppsDynamiteSharedDecoratedText::class;
  protected $decoratedTextDataType = '';
  protected $imageType = AppsDynamiteSharedImage::class;
  protected $imageDataType = '';
  protected $selectionInputType = AppsDynamiteSharedSelectionInput::class;
  protected $selectionInputDataType = '';
  protected $textInputType = AppsDynamiteSharedTextInput::class;
  protected $textInputDataType = '';
  protected $textParagraphType = AppsDynamiteSharedTextParagraph::class;
  protected $textParagraphDataType = '';
  /** @param AppsDynamiteSharedButtonList */
  public function setButtonList(AppsDynamiteSharedButtonList $buttonList)
  {
    $this->buttonList = $buttonList;
  }
  /** @return AppsDynamiteSharedButtonList */
  public function getButtonList()
  {
    return $this->buttonList;
  }
  /** @param AppsDynamiteSharedDateTimePicker */
  public function setDateTimePicker(AppsDynamiteSharedDateTimePicker $dateTimePicker)
  {
    $this->dateTimePicker = $dateTimePicker;
  }
  /** @return AppsDynamiteSharedDateTimePicker */
  public function getDateTimePicker()
  {
    return $this->dateTimePicker;
  }
  /** @param AppsDynamiteSharedDecoratedText */
  public function setDecoratedText(AppsDynamiteSharedDecoratedText $decoratedText)
  {
    $this->decoratedText = $decoratedText;
  }
  /** @return AppsDynamiteSharedDecoratedText */
  public function getDecoratedText()
  {
    return $this->decoratedText;
  }
  /** @param AppsDynamiteSharedImage */
  public function setImage(AppsDynamiteSharedImage $image)
  {
    $this->image = $image;
  }
  /** @return AppsDynamiteSharedImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param AppsDynamiteSharedSelectionInput */
  public function setSelectionInput(AppsDynamiteSharedSelectionInput $selectionInput)
  {
    $this->selectionInput = $selectionInput;
  }
  /** @return AppsDynamiteSharedSelectionInput */
  public function getSelectionInput()
  {
    return $this->selectionInput;
  }
  /** @param AppsDynamiteSharedTextInput */
  public function setTextInput(AppsDynamiteSharedTextInput $textInput)
  {
    $this->textInput = $textInput;
  }
  /** @return AppsDynamiteSharedTextInput */
  public function getTextInput()
  {
    return $this->textInput;
  }
  /** @param AppsDynamiteSharedTextParagraph */
  public function setTextParagraph(AppsDynamiteSharedTextParagraph $textParagraph)
  {
    $this->textParagraph = $textParagraph;
  }
  /** @return AppsDynamiteSharedTextParagraph */
  public function getTextParagraph()
  {
    return $this->textParagraph;
  }
}

class AppsDynamiteSharedContentReportType extends \Google\Model
{
  /** @var string */
  public $systemViolation;

  /** @param string */
  public function setSystemViolation($systemViolation)
  {
    $this->systemViolation = $systemViolation;
  }
  /** @return string */
  public function getSystemViolation()
  {
    return $this->systemViolation;
  }
}

class AppsDynamiteSharedCustomEmoji extends \Google\Model
{
  /** @var string */
  public $blobId;
  /** @var string */
  public $contentType;
  /** @var string */
  public $createTimeMicros;
  /** @var UserId */
  public $creatorUserId;
  /** @var string */
  public $deleteTimeMicros;
  /** @var string */
  public $ephemeralUrl;
  /** @var CustomerId */
  public $ownerCustomerId;
  /** @var string */
  public $readToken;
  /** @var string */
  public $shortcode;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTimeMicros;
  /** @var string */
  public $uuid;
  protected $creatorUserIdType = UserId::class;
  protected $creatorUserIdDataType = '';
  protected $ownerCustomerIdType = CustomerId::class;
  protected $ownerCustomerIdDataType = '';
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
  public function setCreateTimeMicros($createTimeMicros)
  {
    $this->createTimeMicros = $createTimeMicros;
  }
  /** @return string */
  public function getCreateTimeMicros()
  {
    return $this->createTimeMicros;
  }
  /** @param UserId */
  public function setCreatorUserId(UserId $creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return UserId */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
  }
  /** @param string */
  public function setDeleteTimeMicros($deleteTimeMicros)
  {
    $this->deleteTimeMicros = $deleteTimeMicros;
  }
  /** @return string */
  public function getDeleteTimeMicros()
  {
    return $this->deleteTimeMicros;
  }
  /** @param string */
  public function setEphemeralUrl($ephemeralUrl)
  {
    $this->ephemeralUrl = $ephemeralUrl;
  }
  /** @return string */
  public function getEphemeralUrl()
  {
    return $this->ephemeralUrl;
  }
  /** @param CustomerId */
  public function setOwnerCustomerId(CustomerId $ownerCustomerId)
  {
    $this->ownerCustomerId = $ownerCustomerId;
  }
  /** @return CustomerId */
  public function getOwnerCustomerId()
  {
    return $this->ownerCustomerId;
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
  public function setShortcode($shortcode)
  {
    $this->shortcode = $shortcode;
  }
  /** @return string */
  public function getShortcode()
  {
    return $this->shortcode;
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
  /** @param string */
  public function setUpdateTimeMicros($updateTimeMicros)
  {
    $this->updateTimeMicros = $updateTimeMicros;
  }
  /** @return string */
  public function getUpdateTimeMicros()
  {
    return $this->updateTimeMicros;
  }
  /** @param string */
  public function setUuid($uuid)
  {
    $this->uuid = $uuid;
  }
  /** @return string */
  public function getUuid()
  {
    return $this->uuid;
  }
}

class AppsDynamiteSharedDateTimePicker extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedAction */
  public $onChangeAction;
  /** @var int */
  public $timezoneOffsetDate;
  /** @var string */
  public $type;
  /** @var string */
  public $valueMsEpoch;
  protected $onChangeActionType = AppsDynamiteSharedAction::class;
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
  /** @param AppsDynamiteSharedAction */
  public function setOnChangeAction(AppsDynamiteSharedAction $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return AppsDynamiteSharedAction */
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

class AppsDynamiteSharedDecoratedText extends \Google\Model
{
  /** @var string */
  public $bottomLabel;
  /** @var AppsDynamiteSharedButton */
  public $button;
  /** @var AppsDynamiteSharedIcon */
  public $endIcon;
  /** @var AppsDynamiteSharedIcon */
  public $icon;
  /** @var AppsDynamiteSharedOnClick */
  public $onClick;
  /** @var AppsDynamiteSharedIcon */
  public $startIcon;
  /** @var AppsDynamiteSharedDecoratedTextSwitchControl */
  public $switchControl;
  /** @var string */
  public $text;
  /** @var string */
  public $topLabel;
  /** @var bool */
  public $wrapText;
  protected $buttonType = AppsDynamiteSharedButton::class;
  protected $buttonDataType = '';
  protected $endIconType = AppsDynamiteSharedIcon::class;
  protected $endIconDataType = '';
  protected $iconType = AppsDynamiteSharedIcon::class;
  protected $iconDataType = '';
  protected $onClickType = AppsDynamiteSharedOnClick::class;
  protected $onClickDataType = '';
  protected $startIconType = AppsDynamiteSharedIcon::class;
  protected $startIconDataType = '';
  protected $switchControlType = AppsDynamiteSharedDecoratedTextSwitchControl::class;
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
  /** @param AppsDynamiteSharedButton */
  public function setButton(AppsDynamiteSharedButton $button)
  {
    $this->button = $button;
  }
  /** @return AppsDynamiteSharedButton */
  public function getButton()
  {
    return $this->button;
  }
  /** @param AppsDynamiteSharedIcon */
  public function setEndIcon(AppsDynamiteSharedIcon $endIcon)
  {
    $this->endIcon = $endIcon;
  }
  /** @return AppsDynamiteSharedIcon */
  public function getEndIcon()
  {
    return $this->endIcon;
  }
  /** @param AppsDynamiteSharedIcon */
  public function setIcon(AppsDynamiteSharedIcon $icon)
  {
    $this->icon = $icon;
  }
  /** @return AppsDynamiteSharedIcon */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param AppsDynamiteSharedOnClick */
  public function setOnClick(AppsDynamiteSharedOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return AppsDynamiteSharedOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
  /** @param AppsDynamiteSharedIcon */
  public function setStartIcon(AppsDynamiteSharedIcon $startIcon)
  {
    $this->startIcon = $startIcon;
  }
  /** @return AppsDynamiteSharedIcon */
  public function getStartIcon()
  {
    return $this->startIcon;
  }
  /** @param AppsDynamiteSharedDecoratedTextSwitchControl */
  public function setSwitchControl(AppsDynamiteSharedDecoratedTextSwitchControl $switchControl)
  {
    $this->switchControl = $switchControl;
  }
  /** @return AppsDynamiteSharedDecoratedTextSwitchControl */
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

class AppsDynamiteSharedDecoratedTextSwitchControl extends \Google\Model
{
  /** @var string */
  public $controlType;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedAction */
  public $onChangeAction;
  /** @var bool */
  public $selected;
  /** @var string */
  public $value;
  protected $onChangeActionType = AppsDynamiteSharedAction::class;
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
  /** @param AppsDynamiteSharedAction */
  public function setOnChangeAction(AppsDynamiteSharedAction $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return AppsDynamiteSharedAction */
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

class AppsDynamiteSharedDimension extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var int */
  public $width;

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

class AppsDynamiteSharedDivider extends \Google\Model
{
}

class AppsDynamiteSharedDlpMetricsMetadata extends \Google\Model
{
  /** @var string */
  public $dlpStatus;

  /** @param string */
  public function setDlpStatus($dlpStatus)
  {
    $this->dlpStatus = $dlpStatus;
  }
  /** @return string */
  public function getDlpStatus()
  {
    return $this->dlpStatus;
  }
}

class AppsDynamiteSharedDocument extends \Google\Model
{
  /** @var string */
  public $fileId;
  /** @var AppsDynamiteSharedJustification */
  public $justification;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $title;
  /** @var string */
  public $url;
  protected $justificationType = AppsDynamiteSharedJustification::class;
  protected $justificationDataType = '';
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
  /** @param AppsDynamiteSharedJustification */
  public function setJustification(AppsDynamiteSharedJustification $justification)
  {
    $this->justification = $justification;
  }
  /** @return AppsDynamiteSharedJustification */
  public function getJustification()
  {
    return $this->justification;
  }
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
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

class AppsDynamiteSharedEmoji extends \Google\Model
{
  /** @var AppsDynamiteSharedCustomEmoji */
  public $customEmoji;
  /** @var string */
  public $unicode;
  protected $customEmojiType = AppsDynamiteSharedCustomEmoji::class;
  protected $customEmojiDataType = '';
  /** @param AppsDynamiteSharedCustomEmoji */
  public function setCustomEmoji(AppsDynamiteSharedCustomEmoji $customEmoji)
  {
    $this->customEmoji = $customEmoji;
  }
  /** @return AppsDynamiteSharedCustomEmoji */
  public function getCustomEmoji()
  {
    return $this->customEmoji;
  }
  /** @param string */
  public function setUnicode($unicode)
  {
    $this->unicode = $unicode;
  }
  /** @return string */
  public function getUnicode()
  {
    return $this->unicode;
  }
}

class AppsDynamiteSharedFindDocumentSuggestion extends \Google\Collection
{
  /** @var AppsDynamiteSharedDocument[] */
  public $documentSuggestions;
  /** @var bool */
  public $showActionButtons;
  protected $collection_key = 'documentSuggestions';
  protected $documentSuggestionsType = AppsDynamiteSharedDocument::class;
  protected $documentSuggestionsDataType = 'array';
  /** @param AppsDynamiteSharedDocument[] */
  public function setDocumentSuggestions($documentSuggestions)
  {
    $this->documentSuggestions = $documentSuggestions;
  }
  /** @return AppsDynamiteSharedDocument[] */
  public function getDocumentSuggestions()
  {
    return $this->documentSuggestions;
  }
  /** @param bool */
  public function setShowActionButtons($showActionButtons)
  {
    $this->showActionButtons = $showActionButtons;
  }
  /** @return bool */
  public function getShowActionButtons()
  {
    return $this->showActionButtons;
  }
}

class AppsDynamiteSharedGrid extends \Google\Collection
{
  /** @var AppsDynamiteSharedBorderStyle */
  public $borderStyle;
  /** @var int */
  public $columnCount;
  /** @var AppsDynamiteSharedGridGridItem[] */
  public $items;
  /** @var AppsDynamiteSharedOnClick */
  public $onClick;
  /** @var string */
  public $title;
  protected $collection_key = 'items';
  protected $borderStyleType = AppsDynamiteSharedBorderStyle::class;
  protected $borderStyleDataType = '';
  protected $itemsType = AppsDynamiteSharedGridGridItem::class;
  protected $itemsDataType = 'array';
  protected $onClickType = AppsDynamiteSharedOnClick::class;
  protected $onClickDataType = '';
  /** @param AppsDynamiteSharedBorderStyle */
  public function setBorderStyle(AppsDynamiteSharedBorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return AppsDynamiteSharedBorderStyle */
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
  /** @param AppsDynamiteSharedGridGridItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AppsDynamiteSharedGridGridItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param AppsDynamiteSharedOnClick */
  public function setOnClick(AppsDynamiteSharedOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return AppsDynamiteSharedOnClick */
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

class AppsDynamiteSharedGridGridItem extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var AppsDynamiteSharedImageComponent */
  public $image;
  /** @var string */
  public $layout;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $textAlignment;
  /** @var string */
  public $title;
  protected $imageType = AppsDynamiteSharedImageComponent::class;
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
  /** @param AppsDynamiteSharedImageComponent */
  public function setImage(AppsDynamiteSharedImageComponent $image)
  {
    $this->image = $image;
  }
  /** @return AppsDynamiteSharedImageComponent */
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
  public function setTextAlignment($textAlignment)
  {
    $this->textAlignment = $textAlignment;
  }
  /** @return string */
  public function getTextAlignment()
  {
    return $this->textAlignment;
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

class AppsDynamiteSharedGroupDetails extends \Google\Model
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

class AppsDynamiteSharedGroupVisibility extends \Google\Model
{
  /** @var string */
  public $state;

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

class AppsDynamiteSharedIcon extends \Google\Model
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

class AppsDynamiteSharedImage extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $imageUrl;
  /** @var AppsDynamiteSharedOnClick */
  public $onClick;
  protected $onClickType = AppsDynamiteSharedOnClick::class;
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
  /** @param AppsDynamiteSharedOnClick */
  public function setOnClick(AppsDynamiteSharedOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return AppsDynamiteSharedOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class AppsDynamiteSharedImageComponent extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var AppsDynamiteSharedBorderStyle */
  public $borderStyle;
  /** @var AppsDynamiteSharedImageCropStyle */
  public $cropStyle;
  /** @var string */
  public $imageUri;
  protected $borderStyleType = AppsDynamiteSharedBorderStyle::class;
  protected $borderStyleDataType = '';
  protected $cropStyleType = AppsDynamiteSharedImageCropStyle::class;
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
  /** @param AppsDynamiteSharedBorderStyle */
  public function setBorderStyle(AppsDynamiteSharedBorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return AppsDynamiteSharedBorderStyle */
  public function getBorderStyle()
  {
    return $this->borderStyle;
  }
  /** @param AppsDynamiteSharedImageCropStyle */
  public function setCropStyle(AppsDynamiteSharedImageCropStyle $cropStyle)
  {
    $this->cropStyle = $cropStyle;
  }
  /** @return AppsDynamiteSharedImageCropStyle */
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

class AppsDynamiteSharedImageCropStyle extends \Google\Model
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

class AppsDynamiteSharedJustification extends \Google\Collection
{
  /** @var string */
  public $actionTime;
  /** @var string */
  public $actionType;
  /** @var AppsDynamiteSharedJustificationPerson */
  public $documentOwner;
  /** @var string[] */
  public $topics;
  protected $collection_key = 'topics';
  protected $documentOwnerType = AppsDynamiteSharedJustificationPerson::class;
  protected $documentOwnerDataType = '';
  /** @param string */
  public function setActionTime($actionTime)
  {
    $this->actionTime = $actionTime;
  }
  /** @return string */
  public function getActionTime()
  {
    return $this->actionTime;
  }
  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param AppsDynamiteSharedJustificationPerson */
  public function setDocumentOwner(AppsDynamiteSharedJustificationPerson $documentOwner)
  {
    $this->documentOwner = $documentOwner;
  }
  /** @return AppsDynamiteSharedJustificationPerson */
  public function getDocumentOwner()
  {
    return $this->documentOwner;
  }
  /** @param string[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return string[] */
  public function getTopics()
  {
    return $this->topics;
  }
}

class AppsDynamiteSharedJustificationPerson extends \Google\Model
{
  /** @var bool */
  public $isRecipient;
  /** @var UserId */
  public $user;
  protected $userType = UserId::class;
  protected $userDataType = '';
  /** @param bool */
  public function setIsRecipient($isRecipient)
  {
    $this->isRecipient = $isRecipient;
  }
  /** @return bool */
  public function getIsRecipient()
  {
    return $this->isRecipient;
  }
  /** @param UserId */
  public function setUser(UserId $user)
  {
    $this->user = $user;
  }
  /** @return UserId */
  public function getUser()
  {
    return $this->user;
  }
}

class AppsDynamiteSharedMeetMetadata extends \Google\Model
{
  /** @var string */
  public $meetingCode;
  /** @var string */
  public $meetingUrl;

  /** @param string */
  public function setMeetingCode($meetingCode)
  {
    $this->meetingCode = $meetingCode;
  }
  /** @return string */
  public function getMeetingCode()
  {
    return $this->meetingCode;
  }
  /** @param string */
  public function setMeetingUrl($meetingUrl)
  {
    $this->meetingUrl = $meetingUrl;
  }
  /** @return string */
  public function getMeetingUrl()
  {
    return $this->meetingUrl;
  }
}

class AppsDynamiteSharedMessageInfo extends \Google\Model
{
  /** @var MessageId */
  public $messageId;
  /** @var string */
  public $messageType;
  /** @var string */
  public $topicReadTimeUsec;
  protected $messageIdType = MessageId::class;
  protected $messageIdDataType = '';
  /** @param MessageId */
  public function setMessageId(MessageId $messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return MessageId */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  /** @return string */
  public function getMessageType()
  {
    return $this->messageType;
  }
  /** @param string */
  public function setTopicReadTimeUsec($topicReadTimeUsec)
  {
    $this->topicReadTimeUsec = $topicReadTimeUsec;
  }
  /** @return string */
  public function getTopicReadTimeUsec()
  {
    return $this->topicReadTimeUsec;
  }
}

class AppsDynamiteSharedMessageIntegrationPayload extends \Google\Model
{
  /** @var string */
  public $projectNumber;
  /** @var AppsDynamiteSharedTasksMessageIntegrationPayload */
  public $tasksMessageIntegrationPayload;
  /** @var string */
  public $type;
  protected $tasksMessageIntegrationPayloadType = AppsDynamiteSharedTasksMessageIntegrationPayload::class;
  protected $tasksMessageIntegrationPayloadDataType = '';
  /** @param string */
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  /** @return string */
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
  /** @param AppsDynamiteSharedTasksMessageIntegrationPayload */
  public function setTasksMessageIntegrationPayload(AppsDynamiteSharedTasksMessageIntegrationPayload $tasksMessageIntegrationPayload)
  {
    $this->tasksMessageIntegrationPayload = $tasksMessageIntegrationPayload;
  }
  /** @return AppsDynamiteSharedTasksMessageIntegrationPayload */
  public function getTasksMessageIntegrationPayload()
  {
    return $this->tasksMessageIntegrationPayload;
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

class AppsDynamiteSharedOnClick extends \Google\Model
{
  /** @var AppsDynamiteSharedAction */
  public $action;
  /** @var HostAppActionMarkup */
  public $hostAppAction;
  /** @var AppsDynamiteSharedAction */
  public $openDynamicLinkAction;
  /** @var AppsDynamiteSharedOpenLink */
  public $openLink;
  protected $actionType = AppsDynamiteSharedAction::class;
  protected $actionDataType = '';
  protected $hostAppActionType = HostAppActionMarkup::class;
  protected $hostAppActionDataType = '';
  protected $openDynamicLinkActionType = AppsDynamiteSharedAction::class;
  protected $openDynamicLinkActionDataType = '';
  protected $openLinkType = AppsDynamiteSharedOpenLink::class;
  protected $openLinkDataType = '';
  /** @param AppsDynamiteSharedAction */
  public function setAction(AppsDynamiteSharedAction $action)
  {
    $this->action = $action;
  }
  /** @return AppsDynamiteSharedAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param HostAppActionMarkup */
  public function setHostAppAction(HostAppActionMarkup $hostAppAction)
  {
    $this->hostAppAction = $hostAppAction;
  }
  /** @return HostAppActionMarkup */
  public function getHostAppAction()
  {
    return $this->hostAppAction;
  }
  /** @param AppsDynamiteSharedAction */
  public function setOpenDynamicLinkAction(AppsDynamiteSharedAction $openDynamicLinkAction)
  {
    $this->openDynamicLinkAction = $openDynamicLinkAction;
  }
  /** @return AppsDynamiteSharedAction */
  public function getOpenDynamicLinkAction()
  {
    return $this->openDynamicLinkAction;
  }
  /** @param AppsDynamiteSharedOpenLink */
  public function setOpenLink(AppsDynamiteSharedOpenLink $openLink)
  {
    $this->openLink = $openLink;
  }
  /** @return AppsDynamiteSharedOpenLink */
  public function getOpenLink()
  {
    return $this->openLink;
  }
}

class AppsDynamiteSharedOpenLink extends \Google\Model
{
  /** @var AppsDynamiteSharedOpenLinkAppUri */
  public $appUri;
  /** @var string */
  public $onClose;
  /** @var string */
  public $openAs;
  /** @var string */
  public $url;
  protected $appUriType = AppsDynamiteSharedOpenLinkAppUri::class;
  protected $appUriDataType = '';
  /** @param AppsDynamiteSharedOpenLinkAppUri */
  public function setAppUri(AppsDynamiteSharedOpenLinkAppUri $appUri)
  {
    $this->appUri = $appUri;
  }
  /** @return AppsDynamiteSharedOpenLinkAppUri */
  public function getAppUri()
  {
    return $this->appUri;
  }
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

class AppsDynamiteSharedOpenLinkAppUri extends \Google\Model
{
  /** @var AppsDynamiteSharedOpenLinkAppUriIntent */
  public $androidIntent;
  /** @var string */
  public $companionUri;
  /** @var string */
  public $iosUri;
  protected $androidIntentType = AppsDynamiteSharedOpenLinkAppUriIntent::class;
  protected $androidIntentDataType = '';
  /** @param AppsDynamiteSharedOpenLinkAppUriIntent */
  public function setAndroidIntent(AppsDynamiteSharedOpenLinkAppUriIntent $androidIntent)
  {
    $this->androidIntent = $androidIntent;
  }
  /** @return AppsDynamiteSharedOpenLinkAppUriIntent */
  public function getAndroidIntent()
  {
    return $this->androidIntent;
  }
  /** @param string */
  public function setCompanionUri($companionUri)
  {
    $this->companionUri = $companionUri;
  }
  /** @return string */
  public function getCompanionUri()
  {
    return $this->companionUri;
  }
  /** @param string */
  public function setIosUri($iosUri)
  {
    $this->iosUri = $iosUri;
  }
  /** @return string */
  public function getIosUri()
  {
    return $this->iosUri;
  }
}

class AppsDynamiteSharedOpenLinkAppUriIntent extends \Google\Collection
{
  /** @var AppsDynamiteSharedOpenLinkAppUriIntentExtraData[] */
  public $extraData;
  /** @var string */
  public $intentAction;
  protected $collection_key = 'extraData';
  protected $extraDataType = AppsDynamiteSharedOpenLinkAppUriIntentExtraData::class;
  protected $extraDataDataType = 'array';
  /** @param AppsDynamiteSharedOpenLinkAppUriIntentExtraData[] */
  public function setExtraData($extraData)
  {
    $this->extraData = $extraData;
  }
  /** @return AppsDynamiteSharedOpenLinkAppUriIntentExtraData[] */
  public function getExtraData()
  {
    return $this->extraData;
  }
  /** @param string */
  public function setIntentAction($intentAction)
  {
    $this->intentAction = $intentAction;
  }
  /** @return string */
  public function getIntentAction()
  {
    return $this->intentAction;
  }
}

class AppsDynamiteSharedOpenLinkAppUriIntentExtraData extends \Google\Model
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

class AppsDynamiteSharedOrganizationInfo extends \Google\Model
{
  /** @var AppsDynamiteSharedOrganizationInfoConsumerInfo */
  public $consumerInfo;
  /** @var AppsDynamiteSharedOrganizationInfoCustomerInfo */
  public $customerInfo;
  protected $consumerInfoType = AppsDynamiteSharedOrganizationInfoConsumerInfo::class;
  protected $consumerInfoDataType = '';
  protected $customerInfoType = AppsDynamiteSharedOrganizationInfoCustomerInfo::class;
  protected $customerInfoDataType = '';
  /** @param AppsDynamiteSharedOrganizationInfoConsumerInfo */
  public function setConsumerInfo(AppsDynamiteSharedOrganizationInfoConsumerInfo $consumerInfo)
  {
    $this->consumerInfo = $consumerInfo;
  }
  /** @return AppsDynamiteSharedOrganizationInfoConsumerInfo */
  public function getConsumerInfo()
  {
    return $this->consumerInfo;
  }
  /** @param AppsDynamiteSharedOrganizationInfoCustomerInfo */
  public function setCustomerInfo(AppsDynamiteSharedOrganizationInfoCustomerInfo $customerInfo)
  {
    $this->customerInfo = $customerInfo;
  }
  /** @return AppsDynamiteSharedOrganizationInfoCustomerInfo */
  public function getCustomerInfo()
  {
    return $this->customerInfo;
  }
}

class AppsDynamiteSharedOrganizationInfoConsumerInfo extends \Google\Model
{
}

class AppsDynamiteSharedOrganizationInfoCustomerInfo extends \Google\Model
{
  /** @var CustomerId */
  public $customerId;
  protected $customerIdType = CustomerId::class;
  protected $customerIdDataType = '';
  /** @param CustomerId */
  public function setCustomerId(CustomerId $customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return CustomerId */
  public function getCustomerId()
  {
    return $this->customerId;
  }
}

class AppsDynamiteSharedOriginAppSuggestion extends \Google\Model
{
  /** @var AppId */
  public $appId;
  /** @var AppsDynamiteSharedCardClickSuggestion */
  public $cardClickSuggestion;
  protected $appIdType = AppId::class;
  protected $appIdDataType = '';
  protected $cardClickSuggestionType = AppsDynamiteSharedCardClickSuggestion::class;
  protected $cardClickSuggestionDataType = '';
  /** @param AppId */
  public function setAppId(AppId $appId)
  {
    $this->appId = $appId;
  }
  /** @return AppId */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param AppsDynamiteSharedCardClickSuggestion */
  public function setCardClickSuggestion(AppsDynamiteSharedCardClickSuggestion $cardClickSuggestion)
  {
    $this->cardClickSuggestion = $cardClickSuggestion;
  }
  /** @return AppsDynamiteSharedCardClickSuggestion */
  public function getCardClickSuggestion()
  {
    return $this->cardClickSuggestion;
  }
}

class AppsDynamiteSharedPhoneNumber extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class AppsDynamiteSharedReaction extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $createTimestamp;
  /** @var bool */
  public $currentUserParticipated;
  /** @var AppsDynamiteSharedEmoji */
  public $emoji;
  protected $emojiType = AppsDynamiteSharedEmoji::class;
  protected $emojiDataType = '';
  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setCreateTimestamp($createTimestamp)
  {
    $this->createTimestamp = $createTimestamp;
  }
  /** @return string */
  public function getCreateTimestamp()
  {
    return $this->createTimestamp;
  }
  /** @param bool */
  public function setCurrentUserParticipated($currentUserParticipated)
  {
    $this->currentUserParticipated = $currentUserParticipated;
  }
  /** @return bool */
  public function getCurrentUserParticipated()
  {
    return $this->currentUserParticipated;
  }
  /** @param AppsDynamiteSharedEmoji */
  public function setEmoji(AppsDynamiteSharedEmoji $emoji)
  {
    $this->emoji = $emoji;
  }
  /** @return AppsDynamiteSharedEmoji */
  public function getEmoji()
  {
    return $this->emoji;
  }
}

class AppsDynamiteSharedRetentionSettings extends \Google\Model
{
  /** @var string */
  public $expiryTimestamp;
  /** @var string */
  public $state;

  /** @param string */
  public function setExpiryTimestamp($expiryTimestamp)
  {
    $this->expiryTimestamp = $expiryTimestamp;
  }
  /** @return string */
  public function getExpiryTimestamp()
  {
    return $this->expiryTimestamp;
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

class AppsDynamiteSharedSegmentedMembershipCount extends \Google\Model
{
  /** @var string */
  public $memberType;
  /** @var int */
  public $membershipCount;
  /** @var string */
  public $membershipState;

  /** @param string */
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  /** @return string */
  public function getMemberType()
  {
    return $this->memberType;
  }
  /** @param int */
  public function setMembershipCount($membershipCount)
  {
    $this->membershipCount = $membershipCount;
  }
  /** @return int */
  public function getMembershipCount()
  {
    return $this->membershipCount;
  }
  /** @param string */
  public function setMembershipState($membershipState)
  {
    $this->membershipState = $membershipState;
  }
  /** @return string */
  public function getMembershipState()
  {
    return $this->membershipState;
  }
}

class AppsDynamiteSharedSegmentedMembershipCounts extends \Google\Collection
{
  /** @var AppsDynamiteSharedSegmentedMembershipCount[] */
  public $value;
  protected $collection_key = 'value';
  protected $valueType = AppsDynamiteSharedSegmentedMembershipCount::class;
  protected $valueDataType = 'array';
  /** @param AppsDynamiteSharedSegmentedMembershipCount[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return AppsDynamiteSharedSegmentedMembershipCount[] */
  public function getValue()
  {
    return $this->value;
  }
}

class AppsDynamiteSharedSelectionInput extends \Google\Collection
{
  /** @var AppsDynamiteSharedSelectionInputSelectionItem[] */
  public $items;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedAction */
  public $onChangeAction;
  /** @var string */
  public $type;
  protected $collection_key = 'items';
  protected $itemsType = AppsDynamiteSharedSelectionInputSelectionItem::class;
  protected $itemsDataType = 'array';
  protected $onChangeActionType = AppsDynamiteSharedAction::class;
  protected $onChangeActionDataType = '';
  /** @param AppsDynamiteSharedSelectionInputSelectionItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AppsDynamiteSharedSelectionInputSelectionItem[] */
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
  /** @param AppsDynamiteSharedAction */
  public function setOnChangeAction(AppsDynamiteSharedAction $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return AppsDynamiteSharedAction */
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

class AppsDynamiteSharedSelectionInputSelectionItem extends \Google\Model
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

class AppsDynamiteSharedSpaceInfo extends \Google\Model
{
  /** @var AppsDynamiteSharedAvatarInfo */
  public $avatarInfo;
  /** @var string */
  public $avatarUrl;
  /** @var string */
  public $description;
  /** @var GroupId */
  public $groupId;
  /** @var string */
  public $inviterEmail;
  /** @var bool */
  public $isExternal;
  /** @var string */
  public $name;
  /** @var int */
  public $numMembers;
  /** @var string */
  public $userMembershipState;
  protected $avatarInfoType = AppsDynamiteSharedAvatarInfo::class;
  protected $avatarInfoDataType = '';
  protected $groupIdType = GroupId::class;
  protected $groupIdDataType = '';
  /** @param AppsDynamiteSharedAvatarInfo */
  public function setAvatarInfo(AppsDynamiteSharedAvatarInfo $avatarInfo)
  {
    $this->avatarInfo = $avatarInfo;
  }
  /** @return AppsDynamiteSharedAvatarInfo */
  public function getAvatarInfo()
  {
    return $this->avatarInfo;
  }
  /** @param string */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /** @return string */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
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
  /** @param GroupId */
  public function setGroupId(GroupId $groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return GroupId */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /** @param string */
  public function setInviterEmail($inviterEmail)
  {
    $this->inviterEmail = $inviterEmail;
  }
  /** @return string */
  public function getInviterEmail()
  {
    return $this->inviterEmail;
  }
  /** @param bool */
  public function setIsExternal($isExternal)
  {
    $this->isExternal = $isExternal;
  }
  /** @return bool */
  public function getIsExternal()
  {
    return $this->isExternal;
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
  public function setNumMembers($numMembers)
  {
    $this->numMembers = $numMembers;
  }
  /** @return int */
  public function getNumMembers()
  {
    return $this->numMembers;
  }
  /** @param string */
  public function setUserMembershipState($userMembershipState)
  {
    $this->userMembershipState = $userMembershipState;
  }
  /** @return string */
  public function getUserMembershipState()
  {
    return $this->userMembershipState;
  }
}

class AppsDynamiteSharedSuggestions extends \Google\Collection
{
  /** @var AppsDynamiteSharedSuggestionsSuggestionItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = AppsDynamiteSharedSuggestionsSuggestionItem::class;
  protected $itemsDataType = 'array';
  /** @param AppsDynamiteSharedSuggestionsSuggestionItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AppsDynamiteSharedSuggestionsSuggestionItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class AppsDynamiteSharedSuggestionsSuggestionItem extends \Google\Model
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

class AppsDynamiteSharedTasksAnnotationData extends \Google\Model
{
  /** @var AppsDynamiteSharedTasksAnnotationDataAssigneeChange */
  public $assigneeChange;
  /** @var AppsDynamiteSharedTasksAnnotationDataCompletionChange */
  public $completionChange;
  /** @var AppsDynamiteSharedTasksAnnotationDataCreation */
  public $creation;
  /** @var AppsDynamiteSharedTasksAnnotationDataDeletionChange */
  public $deletionChange;
  /** @var string */
  public $taskId;
  /** @var AppsDynamiteSharedTasksAnnotationDataTaskProperties */
  public $taskProperties;
  /** @var AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage */
  public $userDefinedMessage;
  protected $assigneeChangeType = AppsDynamiteSharedTasksAnnotationDataAssigneeChange::class;
  protected $assigneeChangeDataType = '';
  protected $completionChangeType = AppsDynamiteSharedTasksAnnotationDataCompletionChange::class;
  protected $completionChangeDataType = '';
  protected $creationType = AppsDynamiteSharedTasksAnnotationDataCreation::class;
  protected $creationDataType = '';
  protected $deletionChangeType = AppsDynamiteSharedTasksAnnotationDataDeletionChange::class;
  protected $deletionChangeDataType = '';
  protected $taskPropertiesType = AppsDynamiteSharedTasksAnnotationDataTaskProperties::class;
  protected $taskPropertiesDataType = '';
  protected $userDefinedMessageType = AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage::class;
  protected $userDefinedMessageDataType = '';
  /** @param AppsDynamiteSharedTasksAnnotationDataAssigneeChange */
  public function setAssigneeChange(AppsDynamiteSharedTasksAnnotationDataAssigneeChange $assigneeChange)
  {
    $this->assigneeChange = $assigneeChange;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataAssigneeChange */
  public function getAssigneeChange()
  {
    return $this->assigneeChange;
  }
  /** @param AppsDynamiteSharedTasksAnnotationDataCompletionChange */
  public function setCompletionChange(AppsDynamiteSharedTasksAnnotationDataCompletionChange $completionChange)
  {
    $this->completionChange = $completionChange;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataCompletionChange */
  public function getCompletionChange()
  {
    return $this->completionChange;
  }
  /** @param AppsDynamiteSharedTasksAnnotationDataCreation */
  public function setCreation(AppsDynamiteSharedTasksAnnotationDataCreation $creation)
  {
    $this->creation = $creation;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataCreation */
  public function getCreation()
  {
    return $this->creation;
  }
  /** @param AppsDynamiteSharedTasksAnnotationDataDeletionChange */
  public function setDeletionChange(AppsDynamiteSharedTasksAnnotationDataDeletionChange $deletionChange)
  {
    $this->deletionChange = $deletionChange;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataDeletionChange */
  public function getDeletionChange()
  {
    return $this->deletionChange;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
  /** @param AppsDynamiteSharedTasksAnnotationDataTaskProperties */
  public function setTaskProperties(AppsDynamiteSharedTasksAnnotationDataTaskProperties $taskProperties)
  {
    $this->taskProperties = $taskProperties;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataTaskProperties */
  public function getTaskProperties()
  {
    return $this->taskProperties;
  }
  /** @param AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage */
  public function setUserDefinedMessage(AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage $userDefinedMessage)
  {
    $this->userDefinedMessage = $userDefinedMessage;
  }
  /** @return AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage */
  public function getUserDefinedMessage()
  {
    return $this->userDefinedMessage;
  }
}

class AppsDynamiteSharedTasksAnnotationDataAssigneeChange extends \Google\Model
{
  /** @var UserId */
  public $oldAssignee;
  protected $oldAssigneeType = UserId::class;
  protected $oldAssigneeDataType = '';
  /** @param UserId */
  public function setOldAssignee(UserId $oldAssignee)
  {
    $this->oldAssignee = $oldAssignee;
  }
  /** @return UserId */
  public function getOldAssignee()
  {
    return $this->oldAssignee;
  }
}

class AppsDynamiteSharedTasksAnnotationDataCompletionChange extends \Google\Model
{
}

class AppsDynamiteSharedTasksAnnotationDataCreation extends \Google\Model
{
}

class AppsDynamiteSharedTasksAnnotationDataDeletionChange extends \Google\Model
{
}

class AppsDynamiteSharedTasksAnnotationDataTaskProperties extends \Google\Model
{
  /** @var UserId */
  public $assignee;
  /** @var bool */
  public $completed;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $description;
  /** @var Date */
  public $startDate;
  /** @var string */
  public $startTime;
  /** @var string */
  public $title;
  protected $assigneeType = UserId::class;
  protected $assigneeDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  /** @param UserId */
  public function setAssignee(UserId $assignee)
  {
    $this->assignee = $assignee;
  }
  /** @return UserId */
  public function getAssignee()
  {
    return $this->assignee;
  }
  /** @param bool */
  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  /** @return bool */
  public function getCompleted()
  {
    return $this->completed;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param Date */
  public function setStartDate(Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return Date */
  public function getStartDate()
  {
    return $this->startDate;
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

class AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage extends \Google\Model
{
}

class AppsDynamiteSharedTasksMessageIntegrationPayload extends \Google\Model
{
}

class AppsDynamiteSharedTextInput extends \Google\Model
{
  /** @var AppsDynamiteSharedAction */
  public $autoCompleteAction;
  /** @var string */
  public $hintText;
  /** @var AppsDynamiteSharedSuggestions */
  public $initialSuggestions;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedAction */
  public $onChangeAction;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $autoCompleteActionType = AppsDynamiteSharedAction::class;
  protected $autoCompleteActionDataType = '';
  protected $initialSuggestionsType = AppsDynamiteSharedSuggestions::class;
  protected $initialSuggestionsDataType = '';
  protected $onChangeActionType = AppsDynamiteSharedAction::class;
  protected $onChangeActionDataType = '';
  /** @param AppsDynamiteSharedAction */
  public function setAutoCompleteAction(AppsDynamiteSharedAction $autoCompleteAction)
  {
    $this->autoCompleteAction = $autoCompleteAction;
  }
  /** @return AppsDynamiteSharedAction */
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
  /** @param AppsDynamiteSharedSuggestions */
  public function setInitialSuggestions(AppsDynamiteSharedSuggestions $initialSuggestions)
  {
    $this->initialSuggestions = $initialSuggestions;
  }
  /** @return AppsDynamiteSharedSuggestions */
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
  /** @param AppsDynamiteSharedAction */
  public function setOnChangeAction(AppsDynamiteSharedAction $onChangeAction)
  {
    $this->onChangeAction = $onChangeAction;
  }
  /** @return AppsDynamiteSharedAction */
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

class AppsDynamiteSharedTextParagraph extends \Google\Model
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

class AppsDynamiteSharedUserBlockRelationship extends \Google\Model
{
  /** @var bool */
  public $hasBlockedRequester;
  /** @var bool */
  public $isBlockedByRequester;

  /** @param bool */
  public function setHasBlockedRequester($hasBlockedRequester)
  {
    $this->hasBlockedRequester = $hasBlockedRequester;
  }
  /** @return bool */
  public function getHasBlockedRequester()
  {
    return $this->hasBlockedRequester;
  }
  /** @param bool */
  public function setIsBlockedByRequester($isBlockedByRequester)
  {
    $this->isBlockedByRequester = $isBlockedByRequester;
  }
  /** @return bool */
  public function getIsBlockedByRequester()
  {
    return $this->isBlockedByRequester;
  }
}

class AppsDynamiteSharedVideoReference extends \Google\Collection
{
  /** @var int[] */
  public $format;
  /** @var string */
  public $status;
  protected $collection_key = 'format';
  /** @param int[] */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return int[] */
  public function getFormat()
  {
    return $this->format;
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

class AppsDynamiteSharedWidget extends \Google\Model
{
  /** @var AppsDynamiteSharedButtonList */
  public $buttonList;
  /** @var AppsDynamiteSharedColumns */
  public $columns;
  /** @var AppsDynamiteSharedDateTimePicker */
  public $dateTimePicker;
  /** @var AppsDynamiteSharedDecoratedText */
  public $decoratedText;
  /** @var AppsDynamiteSharedDivider */
  public $divider;
  /** @var AppsDynamiteSharedGrid */
  public $grid;
  /** @var string */
  public $horizontalAlignment;
  /** @var AppsDynamiteSharedImage */
  public $image;
  /** @var AppsDynamiteSharedSelectionInput */
  public $selectionInput;
  /** @var AppsDynamiteSharedTextInput */
  public $textInput;
  /** @var AppsDynamiteSharedTextParagraph */
  public $textParagraph;
  protected $buttonListType = AppsDynamiteSharedButtonList::class;
  protected $buttonListDataType = '';
  protected $columnsType = AppsDynamiteSharedColumns::class;
  protected $columnsDataType = '';
  protected $dateTimePickerType = AppsDynamiteSharedDateTimePicker::class;
  protected $dateTimePickerDataType = '';
  protected $decoratedTextType = AppsDynamiteSharedDecoratedText::class;
  protected $decoratedTextDataType = '';
  protected $dividerType = AppsDynamiteSharedDivider::class;
  protected $dividerDataType = '';
  protected $gridType = AppsDynamiteSharedGrid::class;
  protected $gridDataType = '';
  protected $imageType = AppsDynamiteSharedImage::class;
  protected $imageDataType = '';
  protected $selectionInputType = AppsDynamiteSharedSelectionInput::class;
  protected $selectionInputDataType = '';
  protected $textInputType = AppsDynamiteSharedTextInput::class;
  protected $textInputDataType = '';
  protected $textParagraphType = AppsDynamiteSharedTextParagraph::class;
  protected $textParagraphDataType = '';
  /** @param AppsDynamiteSharedButtonList */
  public function setButtonList(AppsDynamiteSharedButtonList $buttonList)
  {
    $this->buttonList = $buttonList;
  }
  /** @return AppsDynamiteSharedButtonList */
  public function getButtonList()
  {
    return $this->buttonList;
  }
  /** @param AppsDynamiteSharedColumns */
  public function setColumns(AppsDynamiteSharedColumns $columns)
  {
    $this->columns = $columns;
  }
  /** @return AppsDynamiteSharedColumns */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param AppsDynamiteSharedDateTimePicker */
  public function setDateTimePicker(AppsDynamiteSharedDateTimePicker $dateTimePicker)
  {
    $this->dateTimePicker = $dateTimePicker;
  }
  /** @return AppsDynamiteSharedDateTimePicker */
  public function getDateTimePicker()
  {
    return $this->dateTimePicker;
  }
  /** @param AppsDynamiteSharedDecoratedText */
  public function setDecoratedText(AppsDynamiteSharedDecoratedText $decoratedText)
  {
    $this->decoratedText = $decoratedText;
  }
  /** @return AppsDynamiteSharedDecoratedText */
  public function getDecoratedText()
  {
    return $this->decoratedText;
  }
  /** @param AppsDynamiteSharedDivider */
  public function setDivider(AppsDynamiteSharedDivider $divider)
  {
    $this->divider = $divider;
  }
  /** @return AppsDynamiteSharedDivider */
  public function getDivider()
  {
    return $this->divider;
  }
  /** @param AppsDynamiteSharedGrid */
  public function setGrid(AppsDynamiteSharedGrid $grid)
  {
    $this->grid = $grid;
  }
  /** @return AppsDynamiteSharedGrid */
  public function getGrid()
  {
    return $this->grid;
  }
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
  /** @param AppsDynamiteSharedImage */
  public function setImage(AppsDynamiteSharedImage $image)
  {
    $this->image = $image;
  }
  /** @return AppsDynamiteSharedImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param AppsDynamiteSharedSelectionInput */
  public function setSelectionInput(AppsDynamiteSharedSelectionInput $selectionInput)
  {
    $this->selectionInput = $selectionInput;
  }
  /** @return AppsDynamiteSharedSelectionInput */
  public function getSelectionInput()
  {
    return $this->selectionInput;
  }
  /** @param AppsDynamiteSharedTextInput */
  public function setTextInput(AppsDynamiteSharedTextInput $textInput)
  {
    $this->textInput = $textInput;
  }
  /** @return AppsDynamiteSharedTextInput */
  public function getTextInput()
  {
    return $this->textInput;
  }
  /** @param AppsDynamiteSharedTextParagraph */
  public function setTextParagraph(AppsDynamiteSharedTextParagraph $textParagraph)
  {
    $this->textParagraph = $textParagraph;
  }
  /** @return AppsDynamiteSharedTextParagraph */
  public function getTextParagraph()
  {
    return $this->textParagraph;
  }
}

class AppsDynamiteV1ApiCompatV1Action extends \Google\Model
{
  /** @var AppsDynamiteV1ApiCompatV1ActionConfirm */
  public $confirm;
  /** @var string */
  public $name;
  /** @var string */
  public $style;
  /** @var string */
  public $text;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $confirmType = AppsDynamiteV1ApiCompatV1ActionConfirm::class;
  protected $confirmDataType = '';
  /** @param AppsDynamiteV1ApiCompatV1ActionConfirm */
  public function setConfirm(AppsDynamiteV1ApiCompatV1ActionConfirm $confirm)
  {
    $this->confirm = $confirm;
  }
  /** @return AppsDynamiteV1ApiCompatV1ActionConfirm */
  public function getConfirm()
  {
    return $this->confirm;
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
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /** @return string */
  public function getStyle()
  {
    return $this->style;
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

class AppsDynamiteV1ApiCompatV1ActionConfirm extends \Google\Model
{
  /** @var string */
  public $dismissText;
  /** @var string */
  public $okText;
  /** @var string */
  public $text;
  /** @var string */
  public $title;
  protected $internal_gapi_mappings = [
        "dismissText" => "dismiss_text",
        "okText" => "ok_text",
  ];
  /** @param string */
  public function setDismissText($dismissText)
  {
    $this->dismissText = $dismissText;
  }
  /** @return string */
  public function getDismissText()
  {
    return $this->dismissText;
  }
  /** @param string */
  public function setOkText($okText)
  {
    $this->okText = $okText;
  }
  /** @return string */
  public function getOkText()
  {
    return $this->okText;
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

class AppsDynamiteV1ApiCompatV1Attachment extends \Google\Collection
{
  /** @var AppsDynamiteV1ApiCompatV1Action[] */
  public $actions;
  /** @var string */
  public $attachmentType;
  /** @var string */
  public $authorIcon;
  /** @var string */
  public $authorLink;
  /** @var string */
  public $authorName;
  /** @var string */
  public $callbackId;
  /** @var string */
  public $color;
  /** @var string */
  public $fallback;
  /** @var AppsDynamiteV1ApiCompatV1Field[] */
  public $fields;
  /** @var string */
  public $footer;
  /** @var string */
  public $footerIcon;
  /** @var string */
  public $imageUrl;
  /** @var string[] */
  public $mrkdwnIn;
  /** @var string */
  public $pretext;
  /** @var string */
  public $text;
  /** @var string */
  public $thumbUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $titleLink;
  /** @var int */
  public $ts;
  protected $collection_key = 'mrkdwn_in';
  protected $internal_gapi_mappings = [
        "attachmentType" => "attachment_type",
        "authorIcon" => "author_icon",
        "authorLink" => "author_link",
        "authorName" => "author_name",
        "callbackId" => "callback_id",
        "footerIcon" => "footer_icon",
        "imageUrl" => "image_url",
        "mrkdwnIn" => "mrkdwn_in",
        "thumbUrl" => "thumb_url",
        "titleLink" => "title_link",
  ];
  protected $actionsType = AppsDynamiteV1ApiCompatV1Action::class;
  protected $actionsDataType = 'array';
  protected $fieldsType = AppsDynamiteV1ApiCompatV1Field::class;
  protected $fieldsDataType = 'array';
  /** @param AppsDynamiteV1ApiCompatV1Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return AppsDynamiteV1ApiCompatV1Action[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param string */
  public function setAttachmentType($attachmentType)
  {
    $this->attachmentType = $attachmentType;
  }
  /** @return string */
  public function getAttachmentType()
  {
    return $this->attachmentType;
  }
  /** @param string */
  public function setAuthorIcon($authorIcon)
  {
    $this->authorIcon = $authorIcon;
  }
  /** @return string */
  public function getAuthorIcon()
  {
    return $this->authorIcon;
  }
  /** @param string */
  public function setAuthorLink($authorLink)
  {
    $this->authorLink = $authorLink;
  }
  /** @return string */
  public function getAuthorLink()
  {
    return $this->authorLink;
  }
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
  public function setCallbackId($callbackId)
  {
    $this->callbackId = $callbackId;
  }
  /** @return string */
  public function getCallbackId()
  {
    return $this->callbackId;
  }
  /** @param string */
  public function setColor($color)
  {
    $this->color = $color;
  }
  /** @return string */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setFallback($fallback)
  {
    $this->fallback = $fallback;
  }
  /** @return string */
  public function getFallback()
  {
    return $this->fallback;
  }
  /** @param AppsDynamiteV1ApiCompatV1Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return AppsDynamiteV1ApiCompatV1Field[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setFooter($footer)
  {
    $this->footer = $footer;
  }
  /** @return string */
  public function getFooter()
  {
    return $this->footer;
  }
  /** @param string */
  public function setFooterIcon($footerIcon)
  {
    $this->footerIcon = $footerIcon;
  }
  /** @return string */
  public function getFooterIcon()
  {
    return $this->footerIcon;
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
  /** @param string[] */
  public function setMrkdwnIn($mrkdwnIn)
  {
    $this->mrkdwnIn = $mrkdwnIn;
  }
  /** @return string[] */
  public function getMrkdwnIn()
  {
    return $this->mrkdwnIn;
  }
  /** @param string */
  public function setPretext($pretext)
  {
    $this->pretext = $pretext;
  }
  /** @return string */
  public function getPretext()
  {
    return $this->pretext;
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
  public function setThumbUrl($thumbUrl)
  {
    $this->thumbUrl = $thumbUrl;
  }
  /** @return string */
  public function getThumbUrl()
  {
    return $this->thumbUrl;
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
  /** @param string */
  public function setTitleLink($titleLink)
  {
    $this->titleLink = $titleLink;
  }
  /** @return string */
  public function getTitleLink()
  {
    return $this->titleLink;
  }
  /** @param int */
  public function setTs($ts)
  {
    $this->ts = $ts;
  }
  /** @return int */
  public function getTs()
  {
    return $this->ts;
  }
}

class AppsDynamiteV1ApiCompatV1Field extends \Google\Model
{
  /** @var bool */
  public $short;
  /** @var string */
  public $title;
  /** @var string */
  public $value;

  /** @param bool */
  public function setShort($short)
  {
    $this->short = $short;
  }
  /** @return bool */
  public function getShort()
  {
    return $this->short;
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

class AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup extends \Google\Collection
{
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment[] */
  public $addonAttachments;
  protected $collection_key = 'addonAttachments';
  protected $addonAttachmentsType = AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment::class;
  protected $addonAttachmentsDataType = 'array';
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment[] */
  public function setAddonAttachments($addonAttachments)
  {
    $this->addonAttachments = $addonAttachments;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment[] */
  public function getAddonAttachments()
  {
    return $this->addonAttachments;
  }
}

class AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment extends \Google\Model
{
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $resourceUrl;
  /** @var string */
  public $title;

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
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
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

class AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup extends \Google\Collection
{
  /** @var string */
  public $conferenceId;
  /** @var string */
  public $conferenceSolutionId;
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup[] */
  public $entryPoints;
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError */
  public $error;
  /** @var string */
  public $note;
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $entryPointsType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup::class;
  protected $entryPointsDataType = 'array';
  protected $errorType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError::class;
  protected $errorDataType = '';
  protected $parametersType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setConferenceId($conferenceId)
  {
    $this->conferenceId = $conferenceId;
  }
  /** @return string */
  public function getConferenceId()
  {
    return $this->conferenceId;
  }
  /** @param string */
  public function setConferenceSolutionId($conferenceSolutionId)
  {
    $this->conferenceSolutionId = $conferenceSolutionId;
  }
  /** @return string */
  public function getConferenceSolutionId()
  {
    return $this->conferenceSolutionId;
  }
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup[] */
  public function setEntryPoints($entryPoints)
  {
    $this->entryPoints = $entryPoints;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup[] */
  public function getEntryPoints()
  {
    return $this->entryPoints;
  }
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError */
  public function setError(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError $error)
  {
    $this->error = $error;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup extends \Google\Collection
{
  /** @var string */
  public $accessCode;
  /** @var string[] */
  public $features;
  /** @var string */
  public $label;
  /** @var string */
  public $meetingCode;
  /** @var string */
  public $passcode;
  /** @var string */
  public $password;
  /** @var string */
  public $pin;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $type;
  /** @var string */
  public $uri;
  protected $collection_key = 'features';
  /** @param string */
  public function setAccessCode($accessCode)
  {
    $this->accessCode = $accessCode;
  }
  /** @return string */
  public function getAccessCode()
  {
    return $this->accessCode;
  }
  /** @param string[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return string[] */
  public function getFeatures()
  {
    return $this->features;
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
  public function setMeetingCode($meetingCode)
  {
    $this->meetingCode = $meetingCode;
  }
  /** @return string */
  public function getMeetingCode()
  {
    return $this->meetingCode;
  }
  /** @param string */
  public function setPasscode($passcode)
  {
    $this->passcode = $passcode;
  }
  /** @return string */
  public function getPasscode()
  {
    return $this->passcode;
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
  /** @param string */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /** @return string */
  public function getPin()
  {
    return $this->pin;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
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

class AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError extends \Google\Model
{
  /** @var string */
  public $authenticationUrl;
  /** @var string */
  public $type;

  /** @param string */
  public function setAuthenticationUrl($authenticationUrl)
  {
    $this->authenticationUrl = $authenticationUrl;
  }
  /** @return string */
  public function getAuthenticationUrl()
  {
    return $this->authenticationUrl;
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

class AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter extends \Google\Model
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

class AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup extends \Google\Collection
{
  /** @var string[] */
  public $addAttendeeEmails;
  protected $collection_key = 'addAttendeeEmails';
  /** @param string[] */
  public function setAddAttendeeEmails($addAttendeeEmails)
  {
    $this->addAttendeeEmails = $addAttendeeEmails;
  }
  /** @return string[] */
  public function getAddAttendeeEmails()
  {
    return $this->addAttendeeEmails;
  }
}

class AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup extends \Google\Model
{
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup */
  public $conferenceData;
  protected $conferenceDataType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup::class;
  protected $conferenceDataDataType = '';
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup */
  public function setConferenceData(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup $conferenceData)
  {
    $this->conferenceData = $conferenceData;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup */
  public function getConferenceData()
  {
    return $this->conferenceData;
  }
}

class Attachment extends \Google\Model
{
  /** @var GoogleChatV1ContextualAddOnMarkup */
  public $addOnData;
  /** @var UserId */
  public $appId;
  /** @var string */
  public $attachmentId;
  /** @var AppsDynamiteSharedCard */
  public $cardAddOnData;
  /** @var ContextualAddOnMarkup */
  public $deprecatedAddOnData;
  /** @var AppsDynamiteV1ApiCompatV1Attachment */
  public $slackData;
  /** @var int */
  public $slackDataImageUrlHeight;
  protected $addOnDataType = GoogleChatV1ContextualAddOnMarkup::class;
  protected $addOnDataDataType = '';
  protected $appIdType = UserId::class;
  protected $appIdDataType = '';
  protected $cardAddOnDataType = AppsDynamiteSharedCard::class;
  protected $cardAddOnDataDataType = '';
  protected $deprecatedAddOnDataType = ContextualAddOnMarkup::class;
  protected $deprecatedAddOnDataDataType = '';
  protected $slackDataType = AppsDynamiteV1ApiCompatV1Attachment::class;
  protected $slackDataDataType = '';
  /** @param GoogleChatV1ContextualAddOnMarkup */
  public function setAddOnData(GoogleChatV1ContextualAddOnMarkup $addOnData)
  {
    $this->addOnData = $addOnData;
  }
  /** @return GoogleChatV1ContextualAddOnMarkup */
  public function getAddOnData()
  {
    return $this->addOnData;
  }
  /** @param UserId */
  public function setAppId(UserId $appId)
  {
    $this->appId = $appId;
  }
  /** @return UserId */
  public function getAppId()
  {
    return $this->appId;
  }
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
  /** @param AppsDynamiteSharedCard */
  public function setCardAddOnData(AppsDynamiteSharedCard $cardAddOnData)
  {
    $this->cardAddOnData = $cardAddOnData;
  }
  /** @return AppsDynamiteSharedCard */
  public function getCardAddOnData()
  {
    return $this->cardAddOnData;
  }
  /** @param ContextualAddOnMarkup */
  public function setDeprecatedAddOnData(ContextualAddOnMarkup $deprecatedAddOnData)
  {
    $this->deprecatedAddOnData = $deprecatedAddOnData;
  }
  /** @return ContextualAddOnMarkup */
  public function getDeprecatedAddOnData()
  {
    return $this->deprecatedAddOnData;
  }
  /** @param AppsDynamiteV1ApiCompatV1Attachment */
  public function setSlackData(AppsDynamiteV1ApiCompatV1Attachment $slackData)
  {
    $this->slackData = $slackData;
  }
  /** @return AppsDynamiteV1ApiCompatV1Attachment */
  public function getSlackData()
  {
    return $this->slackData;
  }
  /** @param int */
  public function setSlackDataImageUrlHeight($slackDataImageUrlHeight)
  {
    $this->slackDataImageUrlHeight = $slackDataImageUrlHeight;
  }
  /** @return int */
  public function getSlackDataImageUrlHeight()
  {
    return $this->slackDataImageUrlHeight;
  }
}

class Attribute extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var CaribouAttributeValue */
  public $value;
  protected $valueType = CaribouAttributeValue::class;
  protected $valueDataType = '';
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
  /** @param CaribouAttributeValue */
  public function setValue(CaribouAttributeValue $value)
  {
    $this->value = $value;
  }
  /** @return CaribouAttributeValue */
  public function getValue()
  {
    return $this->value;
  }
}

class AttributeRemoved extends \Google\Collection
{
  /** @var string */
  public $attributeId;
  /** @var MultiKey[] */
  public $messageKeys;
  protected $collection_key = 'messageKeys';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
  /** @param string */
  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  /** @return string */
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
}

class AttributeSet extends \Google\Collection
{
  /** @var string */
  public $attributeId;
  /** @var string */
  public $attributeValue;
  /** @var MultiKey[] */
  public $messageKeys;
  protected $collection_key = 'messageKeys';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
  /** @param string */
  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  /** @return string */
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  /** @param string */
  public function setAttributeValue($attributeValue)
  {
    $this->attributeValue = $attributeValue;
  }
  /** @return string */
  public function getAttributeValue()
  {
    return $this->attributeValue;
  }
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
}

class Attributes extends \Google\Collection
{
  /** @var Attribute[] */
  public $attribute;
  protected $collection_key = 'attribute';
  protected $attributeType = Attribute::class;
  protected $attributeDataType = 'array';
  /** @param Attribute[] */
  public function setAttribute($attribute)
  {
    $this->attribute = $attribute;
  }
  /** @return Attribute[] */
  public function getAttribute()
  {
    return $this->attribute;
  }
}

class AuditLoggingSettings extends \Google\Model
{
  /** @var bool */
  public $logAdminReadActions;
  /** @var bool */
  public $logDataReadActions;
  /** @var bool */
  public $logDataWriteActions;
  /** @var string */
  public $project;

  /** @param bool */
  public function setLogAdminReadActions($logAdminReadActions)
  {
    $this->logAdminReadActions = $logAdminReadActions;
  }
  /** @return bool */
  public function getLogAdminReadActions()
  {
    return $this->logAdminReadActions;
  }
  /** @param bool */
  public function setLogDataReadActions($logDataReadActions)
  {
    $this->logDataReadActions = $logDataReadActions;
  }
  /** @return bool */
  public function getLogDataReadActions()
  {
    return $this->logDataReadActions;
  }
  /** @param bool */
  public function setLogDataWriteActions($logDataWriteActions)
  {
    $this->logDataWriteActions = $logDataWriteActions;
  }
  /** @return bool */
  public function getLogDataWriteActions()
  {
    return $this->logDataWriteActions;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
}

class AuthorizedItemId extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $resourceKey;

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
  public function setResourceKey($resourceKey)
  {
    $this->resourceKey = $resourceKey;
  }
  /** @return string */
  public function getResourceKey()
  {
    return $this->resourceKey;
  }
}

class AutoComplete extends \Google\Collection
{
  /** @var AutoCompleteItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = AutoCompleteItem::class;
  protected $itemsDataType = 'array';
  /** @param AutoCompleteItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AutoCompleteItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class AutoCompleteItem extends \Google\Model
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

class BabelMessageProps extends \Google\Model
{
  /** @var string */
  public $clientGeneratedId;
  /** @var ChatContentExtension */
  public $contentExtension;
  /** @var DeliveryMedium */
  public $deliveryMedium;
  /** @var string */
  public $eventId;
  /** @var ChatConserverMessageContent */
  public $messageContent;
  /** @var bool */
  public $wasUpdatedByBackfill;
  protected $contentExtensionType = ChatContentExtension::class;
  protected $contentExtensionDataType = '';
  protected $deliveryMediumType = DeliveryMedium::class;
  protected $deliveryMediumDataType = '';
  protected $messageContentType = ChatConserverMessageContent::class;
  protected $messageContentDataType = '';
  /** @param string */
  public function setClientGeneratedId($clientGeneratedId)
  {
    $this->clientGeneratedId = $clientGeneratedId;
  }
  /** @return string */
  public function getClientGeneratedId()
  {
    return $this->clientGeneratedId;
  }
  /** @param ChatContentExtension */
  public function setContentExtension(ChatContentExtension $contentExtension)
  {
    $this->contentExtension = $contentExtension;
  }
  /** @return ChatContentExtension */
  public function getContentExtension()
  {
    return $this->contentExtension;
  }
  /** @param DeliveryMedium */
  public function setDeliveryMedium(DeliveryMedium $deliveryMedium)
  {
    $this->deliveryMedium = $deliveryMedium;
  }
  /** @return DeliveryMedium */
  public function getDeliveryMedium()
  {
    return $this->deliveryMedium;
  }
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param ChatConserverMessageContent */
  public function setMessageContent(ChatConserverMessageContent $messageContent)
  {
    $this->messageContent = $messageContent;
  }
  /** @return ChatConserverMessageContent */
  public function getMessageContent()
  {
    return $this->messageContent;
  }
  /** @param bool */
  public function setWasUpdatedByBackfill($wasUpdatedByBackfill)
  {
    $this->wasUpdatedByBackfill = $wasUpdatedByBackfill;
  }
  /** @return bool */
  public function getWasUpdatedByBackfill()
  {
    return $this->wasUpdatedByBackfill;
  }
}

class BabelPlaceholderMetadata extends \Google\Model
{
  /** @var DeleteMetadata */
  public $deleteMetadata;
  /** @var EditMetadata */
  public $editMetadata;
  /** @var HangoutVideoEventMetadata */
  public $hangoutVideoMetadata;
  protected $deleteMetadataType = DeleteMetadata::class;
  protected $deleteMetadataDataType = '';
  protected $editMetadataType = EditMetadata::class;
  protected $editMetadataDataType = '';
  protected $hangoutVideoMetadataType = HangoutVideoEventMetadata::class;
  protected $hangoutVideoMetadataDataType = '';
  /** @param DeleteMetadata */
  public function setDeleteMetadata(DeleteMetadata $deleteMetadata)
  {
    $this->deleteMetadata = $deleteMetadata;
  }
  /** @return DeleteMetadata */
  public function getDeleteMetadata()
  {
    return $this->deleteMetadata;
  }
  /** @param EditMetadata */
  public function setEditMetadata(EditMetadata $editMetadata)
  {
    $this->editMetadata = $editMetadata;
  }
  /** @return EditMetadata */
  public function getEditMetadata()
  {
    return $this->editMetadata;
  }
  /** @param HangoutVideoEventMetadata */
  public function setHangoutVideoMetadata(HangoutVideoEventMetadata $hangoutVideoMetadata)
  {
    $this->hangoutVideoMetadata = $hangoutVideoMetadata;
  }
  /** @return HangoutVideoEventMetadata */
  public function getHangoutVideoMetadata()
  {
    return $this->hangoutVideoMetadata;
  }
}

class BooleanOperatorOptions extends \Google\Model
{
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class BooleanPropertyOptions extends \Google\Model
{
  /** @var BooleanOperatorOptions */
  public $operatorOptions;
  protected $operatorOptionsType = BooleanOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  /** @param BooleanOperatorOptions */
  public function setOperatorOptions(BooleanOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return BooleanOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
}

class BorderStyle extends \Google\Model
{
  /** @var int */
  public $cornerRadius;
  /** @var string */
  public $strokeColor;
  /** @var string */
  public $type;

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
  /** @param string */
  public function setStrokeColor($strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }
  /** @return string */
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

class BotInfo extends \Google\Collection
{
  /** @var string */
  public $appAllowlistStatus;
  /** @var AppId */
  public $appId;
  /** @var string */
  public $botAvatarUrl;
  /** @var string */
  public $botName;
  /** @var string */
  public $description;
  /** @var string */
  public $developerName;
  /** @var string */
  public $marketPlaceBannerUrl;
  /** @var string */
  public $status;
  /** @var bool */
  public $supportHomeScreen;
  /** @var SupportUrls */
  public $supportUrls;
  /** @var string[] */
  public $supportedUses;
  protected $collection_key = 'supportedUses';
  protected $appIdType = AppId::class;
  protected $appIdDataType = '';
  protected $supportUrlsType = SupportUrls::class;
  protected $supportUrlsDataType = '';
  /** @param string */
  public function setAppAllowlistStatus($appAllowlistStatus)
  {
    $this->appAllowlistStatus = $appAllowlistStatus;
  }
  /** @return string */
  public function getAppAllowlistStatus()
  {
    return $this->appAllowlistStatus;
  }
  /** @param AppId */
  public function setAppId(AppId $appId)
  {
    $this->appId = $appId;
  }
  /** @return AppId */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param string */
  public function setBotAvatarUrl($botAvatarUrl)
  {
    $this->botAvatarUrl = $botAvatarUrl;
  }
  /** @return string */
  public function getBotAvatarUrl()
  {
    return $this->botAvatarUrl;
  }
  /** @param string */
  public function setBotName($botName)
  {
    $this->botName = $botName;
  }
  /** @return string */
  public function getBotName()
  {
    return $this->botName;
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
  public function setDeveloperName($developerName)
  {
    $this->developerName = $developerName;
  }
  /** @return string */
  public function getDeveloperName()
  {
    return $this->developerName;
  }
  /** @param string */
  public function setMarketPlaceBannerUrl($marketPlaceBannerUrl)
  {
    $this->marketPlaceBannerUrl = $marketPlaceBannerUrl;
  }
  /** @return string */
  public function getMarketPlaceBannerUrl()
  {
    return $this->marketPlaceBannerUrl;
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
  /** @param bool */
  public function setSupportHomeScreen($supportHomeScreen)
  {
    $this->supportHomeScreen = $supportHomeScreen;
  }
  /** @return bool */
  public function getSupportHomeScreen()
  {
    return $this->supportHomeScreen;
  }
  /** @param SupportUrls */
  public function setSupportUrls(SupportUrls $supportUrls)
  {
    $this->supportUrls = $supportUrls;
  }
  /** @return SupportUrls */
  public function getSupportUrls()
  {
    return $this->supportUrls;
  }
  /** @param string[] */
  public function setSupportedUses($supportedUses)
  {
    $this->supportedUses = $supportedUses;
  }
  /** @return string[] */
  public function getSupportedUses()
  {
    return $this->supportedUses;
  }
}

class BotResponse extends \Google\Model
{
  /** @var UserId */
  public $botId;
  /** @var string */
  public $requiredAction;
  /** @var string */
  public $responseType;
  /** @var string */
  public $setupUrl;
  protected $botIdType = UserId::class;
  protected $botIdDataType = '';
  /** @param UserId */
  public function setBotId(UserId $botId)
  {
    $this->botId = $botId;
  }
  /** @return UserId */
  public function getBotId()
  {
    return $this->botId;
  }
  /** @param string */
  public function setRequiredAction($requiredAction)
  {
    $this->requiredAction = $requiredAction;
  }
  /** @return string */
  public function getRequiredAction()
  {
    return $this->requiredAction;
  }
  /** @param string */
  public function setResponseType($responseType)
  {
    $this->responseType = $responseType;
  }
  /** @return string */
  public function getResponseType()
  {
    return $this->responseType;
  }
  /** @param string */
  public function setSetupUrl($setupUrl)
  {
    $this->setupUrl = $setupUrl;
  }
  /** @return string */
  public function getSetupUrl()
  {
    return $this->setupUrl;
  }
}

class BroadcastAccess extends \Google\Model
{
  /** @var string */
  public $accessPolicy;
  /** @var string */
  public $viewUrl;

  /** @param string */
  public function setAccessPolicy($accessPolicy)
  {
    $this->accessPolicy = $accessPolicy;
  }
  /** @return string */
  public function getAccessPolicy()
  {
    return $this->accessPolicy;
  }
  /** @param string */
  public function setViewUrl($viewUrl)
  {
    $this->viewUrl = $viewUrl;
  }
  /** @return string */
  public function getViewUrl()
  {
    return $this->viewUrl;
  }
}

class BroadcastSessionInfo extends \Google\Model
{
  /** @var string */
  public $broadcastSessionId;
  /** @var BroadcastStats */
  public $broadcastStats;
  /** @var string */
  public $ingestionId;
  /** @var SessionStateInfo */
  public $sessionStateInfo;
  protected $broadcastStatsType = BroadcastStats::class;
  protected $broadcastStatsDataType = '';
  protected $sessionStateInfoType = SessionStateInfo::class;
  protected $sessionStateInfoDataType = '';
  /** @param string */
  public function setBroadcastSessionId($broadcastSessionId)
  {
    $this->broadcastSessionId = $broadcastSessionId;
  }
  /** @return string */
  public function getBroadcastSessionId()
  {
    return $this->broadcastSessionId;
  }
  /** @param BroadcastStats */
  public function setBroadcastStats(BroadcastStats $broadcastStats)
  {
    $this->broadcastStats = $broadcastStats;
  }
  /** @return BroadcastStats */
  public function getBroadcastStats()
  {
    return $this->broadcastStats;
  }
  /** @param string */
  public function setIngestionId($ingestionId)
  {
    $this->ingestionId = $ingestionId;
  }
  /** @return string */
  public function getIngestionId()
  {
    return $this->ingestionId;
  }
  /** @param SessionStateInfo */
  public function setSessionStateInfo(SessionStateInfo $sessionStateInfo)
  {
    $this->sessionStateInfo = $sessionStateInfo;
  }
  /** @return SessionStateInfo */
  public function getSessionStateInfo()
  {
    return $this->sessionStateInfo;
  }
}

class BroadcastStats extends \Google\Model
{
  /** @var string */
  public $estimatedViewerCount;

  /** @param string */
  public function setEstimatedViewerCount($estimatedViewerCount)
  {
    $this->estimatedViewerCount = $estimatedViewerCount;
  }
  /** @return string */
  public function getEstimatedViewerCount()
  {
    return $this->estimatedViewerCount;
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

class CalendarClientActionMarkup extends \Google\Model
{
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup */
  public $addAttachmentsActionMarkup;
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup */
  public $editAttendeesActionMarkup;
  /** @var AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup */
  public $editConferenceDataActionMarkup;
  protected $addAttachmentsActionMarkupType = AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup::class;
  protected $addAttachmentsActionMarkupDataType = '';
  protected $editAttendeesActionMarkupType = AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup::class;
  protected $editAttendeesActionMarkupDataType = '';
  protected $editConferenceDataActionMarkupType = AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup::class;
  protected $editConferenceDataActionMarkupDataType = '';
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup */
  public function setAddAttachmentsActionMarkup(AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup $addAttachmentsActionMarkup)
  {
    $this->addAttachmentsActionMarkup = $addAttachmentsActionMarkup;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup */
  public function getAddAttachmentsActionMarkup()
  {
    return $this->addAttachmentsActionMarkup;
  }
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup */
  public function setEditAttendeesActionMarkup(AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup $editAttendeesActionMarkup)
  {
    $this->editAttendeesActionMarkup = $editAttendeesActionMarkup;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup */
  public function getEditAttendeesActionMarkup()
  {
    return $this->editAttendeesActionMarkup;
  }
  /** @param AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup */
  public function setEditConferenceDataActionMarkup(AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup $editConferenceDataActionMarkup)
  {
    $this->editConferenceDataActionMarkup = $editConferenceDataActionMarkup;
  }
  /** @return AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup */
  public function getEditConferenceDataActionMarkup()
  {
    return $this->editConferenceDataActionMarkup;
  }
}

class CallInfo extends \Google\Collection
{
  /** @var AbuseReportingConfig */
  public $abuseReportingConfig;
  /** @var UserDisplayInfo */
  public $artifactOwner;
  /** @var DocumentInfo[] */
  public $attachedDocuments;
  /** @var ReactionInfo[] */
  public $availableReactions;
  /** @var BroadcastSessionInfo */
  public $broadcastSessionInfo;
  /** @var string */
  public $calendarEventId;
  /** @var CoActivity */
  public $coActivity;
  /** @var Collaboration */
  public $collaboration;
  /** @var CseInfo */
  public $cseInfo;
  /** @var int */
  public $maxJoinedDevices;
  /** @var string */
  public $mediaBackendInfo;
  /** @var string */
  public $organizationName;
  /** @var PaygateInfo */
  public $paygateInfo;
  /** @var Presenter */
  public $presenter;
  /** @var RecordingInfo */
  public $recordingInfo;
  /** @var RecordingSessionInfo */
  public $recordingSessionInfo;
  /** @var CallSettings */
  public $settings;
  /** @var StreamingSessionInfo[] */
  public $streamingSessions;
  /** @var TranscriptionSessionInfo */
  public $transcriptionSessionInfo;
  /** @var int */
  public $viewerCount;
  /** @var YouTubeBroadcastSessionInfo[] */
  public $youTubeBroadcastSessionInfos;
  protected $collection_key = 'youTubeBroadcastSessionInfos';
  protected $abuseReportingConfigType = AbuseReportingConfig::class;
  protected $abuseReportingConfigDataType = '';
  protected $artifactOwnerType = UserDisplayInfo::class;
  protected $artifactOwnerDataType = '';
  protected $attachedDocumentsType = DocumentInfo::class;
  protected $attachedDocumentsDataType = 'array';
  protected $availableReactionsType = ReactionInfo::class;
  protected $availableReactionsDataType = 'array';
  protected $broadcastSessionInfoType = BroadcastSessionInfo::class;
  protected $broadcastSessionInfoDataType = '';
  protected $coActivityType = CoActivity::class;
  protected $coActivityDataType = '';
  protected $collaborationType = Collaboration::class;
  protected $collaborationDataType = '';
  protected $cseInfoType = CseInfo::class;
  protected $cseInfoDataType = '';
  protected $paygateInfoType = PaygateInfo::class;
  protected $paygateInfoDataType = '';
  protected $presenterType = Presenter::class;
  protected $presenterDataType = '';
  protected $recordingInfoType = RecordingInfo::class;
  protected $recordingInfoDataType = '';
  protected $recordingSessionInfoType = RecordingSessionInfo::class;
  protected $recordingSessionInfoDataType = '';
  protected $settingsType = CallSettings::class;
  protected $settingsDataType = '';
  protected $streamingSessionsType = StreamingSessionInfo::class;
  protected $streamingSessionsDataType = 'array';
  protected $transcriptionSessionInfoType = TranscriptionSessionInfo::class;
  protected $transcriptionSessionInfoDataType = '';
  protected $youTubeBroadcastSessionInfosType = YouTubeBroadcastSessionInfo::class;
  protected $youTubeBroadcastSessionInfosDataType = 'array';
  /** @param AbuseReportingConfig */
  public function setAbuseReportingConfig(AbuseReportingConfig $abuseReportingConfig)
  {
    $this->abuseReportingConfig = $abuseReportingConfig;
  }
  /** @return AbuseReportingConfig */
  public function getAbuseReportingConfig()
  {
    return $this->abuseReportingConfig;
  }
  /** @param UserDisplayInfo */
  public function setArtifactOwner(UserDisplayInfo $artifactOwner)
  {
    $this->artifactOwner = $artifactOwner;
  }
  /** @return UserDisplayInfo */
  public function getArtifactOwner()
  {
    return $this->artifactOwner;
  }
  /** @param DocumentInfo[] */
  public function setAttachedDocuments($attachedDocuments)
  {
    $this->attachedDocuments = $attachedDocuments;
  }
  /** @return DocumentInfo[] */
  public function getAttachedDocuments()
  {
    return $this->attachedDocuments;
  }
  /** @param ReactionInfo[] */
  public function setAvailableReactions($availableReactions)
  {
    $this->availableReactions = $availableReactions;
  }
  /** @return ReactionInfo[] */
  public function getAvailableReactions()
  {
    return $this->availableReactions;
  }
  /** @param BroadcastSessionInfo */
  public function setBroadcastSessionInfo(BroadcastSessionInfo $broadcastSessionInfo)
  {
    $this->broadcastSessionInfo = $broadcastSessionInfo;
  }
  /** @return BroadcastSessionInfo */
  public function getBroadcastSessionInfo()
  {
    return $this->broadcastSessionInfo;
  }
  /** @param string */
  public function setCalendarEventId($calendarEventId)
  {
    $this->calendarEventId = $calendarEventId;
  }
  /** @return string */
  public function getCalendarEventId()
  {
    return $this->calendarEventId;
  }
  /** @param CoActivity */
  public function setCoActivity(CoActivity $coActivity)
  {
    $this->coActivity = $coActivity;
  }
  /** @return CoActivity */
  public function getCoActivity()
  {
    return $this->coActivity;
  }
  /** @param Collaboration */
  public function setCollaboration(Collaboration $collaboration)
  {
    $this->collaboration = $collaboration;
  }
  /** @return Collaboration */
  public function getCollaboration()
  {
    return $this->collaboration;
  }
  /** @param CseInfo */
  public function setCseInfo(CseInfo $cseInfo)
  {
    $this->cseInfo = $cseInfo;
  }
  /** @return CseInfo */
  public function getCseInfo()
  {
    return $this->cseInfo;
  }
  /** @param int */
  public function setMaxJoinedDevices($maxJoinedDevices)
  {
    $this->maxJoinedDevices = $maxJoinedDevices;
  }
  /** @return int */
  public function getMaxJoinedDevices()
  {
    return $this->maxJoinedDevices;
  }
  /** @param string */
  public function setMediaBackendInfo($mediaBackendInfo)
  {
    $this->mediaBackendInfo = $mediaBackendInfo;
  }
  /** @return string */
  public function getMediaBackendInfo()
  {
    return $this->mediaBackendInfo;
  }
  /** @param string */
  public function setOrganizationName($organizationName)
  {
    $this->organizationName = $organizationName;
  }
  /** @return string */
  public function getOrganizationName()
  {
    return $this->organizationName;
  }
  /** @param PaygateInfo */
  public function setPaygateInfo(PaygateInfo $paygateInfo)
  {
    $this->paygateInfo = $paygateInfo;
  }
  /** @return PaygateInfo */
  public function getPaygateInfo()
  {
    return $this->paygateInfo;
  }
  /** @param Presenter */
  public function setPresenter(Presenter $presenter)
  {
    $this->presenter = $presenter;
  }
  /** @return Presenter */
  public function getPresenter()
  {
    return $this->presenter;
  }
  /** @param RecordingInfo */
  public function setRecordingInfo(RecordingInfo $recordingInfo)
  {
    $this->recordingInfo = $recordingInfo;
  }
  /** @return RecordingInfo */
  public function getRecordingInfo()
  {
    return $this->recordingInfo;
  }
  /** @param RecordingSessionInfo */
  public function setRecordingSessionInfo(RecordingSessionInfo $recordingSessionInfo)
  {
    $this->recordingSessionInfo = $recordingSessionInfo;
  }
  /** @return RecordingSessionInfo */
  public function getRecordingSessionInfo()
  {
    return $this->recordingSessionInfo;
  }
  /** @param CallSettings */
  public function setSettings(CallSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return CallSettings */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param StreamingSessionInfo[] */
  public function setStreamingSessions($streamingSessions)
  {
    $this->streamingSessions = $streamingSessions;
  }
  /** @return StreamingSessionInfo[] */
  public function getStreamingSessions()
  {
    return $this->streamingSessions;
  }
  /** @param TranscriptionSessionInfo */
  public function setTranscriptionSessionInfo(TranscriptionSessionInfo $transcriptionSessionInfo)
  {
    $this->transcriptionSessionInfo = $transcriptionSessionInfo;
  }
  /** @return TranscriptionSessionInfo */
  public function getTranscriptionSessionInfo()
  {
    return $this->transcriptionSessionInfo;
  }
  /** @param int */
  public function setViewerCount($viewerCount)
  {
    $this->viewerCount = $viewerCount;
  }
  /** @return int */
  public function getViewerCount()
  {
    return $this->viewerCount;
  }
  /** @param YouTubeBroadcastSessionInfo[] */
  public function setYouTubeBroadcastSessionInfos($youTubeBroadcastSessionInfos)
  {
    $this->youTubeBroadcastSessionInfos = $youTubeBroadcastSessionInfos;
  }
  /** @return YouTubeBroadcastSessionInfo[] */
  public function getYouTubeBroadcastSessionInfos()
  {
    return $this->youTubeBroadcastSessionInfos;
  }
}

class CallSettings extends \Google\Model
{
  /** @var bool */
  public $accessLock;
  /** @var string */
  public $accessType;
  /** @var bool */
  public $allowJoiningBeforeHost;
  /** @var bool */
  public $attendanceReportEnabled;
  /** @var bool */
  public $audioLock;
  /** @var bool */
  public $chatLock;
  /** @var bool */
  public $cseEnabled;
  /** @var bool */
  public $moderationEnabled;
  /** @var bool */
  public $presentLock;
  /** @var bool */
  public $reactionsLock;
  /** @var bool */
  public $videoLock;

  /** @param bool */
  public function setAccessLock($accessLock)
  {
    $this->accessLock = $accessLock;
  }
  /** @return bool */
  public function getAccessLock()
  {
    return $this->accessLock;
  }
  /** @param string */
  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }
  /** @return string */
  public function getAccessType()
  {
    return $this->accessType;
  }
  /** @param bool */
  public function setAllowJoiningBeforeHost($allowJoiningBeforeHost)
  {
    $this->allowJoiningBeforeHost = $allowJoiningBeforeHost;
  }
  /** @return bool */
  public function getAllowJoiningBeforeHost()
  {
    return $this->allowJoiningBeforeHost;
  }
  /** @param bool */
  public function setAttendanceReportEnabled($attendanceReportEnabled)
  {
    $this->attendanceReportEnabled = $attendanceReportEnabled;
  }
  /** @return bool */
  public function getAttendanceReportEnabled()
  {
    return $this->attendanceReportEnabled;
  }
  /** @param bool */
  public function setAudioLock($audioLock)
  {
    $this->audioLock = $audioLock;
  }
  /** @return bool */
  public function getAudioLock()
  {
    return $this->audioLock;
  }
  /** @param bool */
  public function setChatLock($chatLock)
  {
    $this->chatLock = $chatLock;
  }
  /** @return bool */
  public function getChatLock()
  {
    return $this->chatLock;
  }
  /** @param bool */
  public function setCseEnabled($cseEnabled)
  {
    $this->cseEnabled = $cseEnabled;
  }
  /** @return bool */
  public function getCseEnabled()
  {
    return $this->cseEnabled;
  }
  /** @param bool */
  public function setModerationEnabled($moderationEnabled)
  {
    $this->moderationEnabled = $moderationEnabled;
  }
  /** @return bool */
  public function getModerationEnabled()
  {
    return $this->moderationEnabled;
  }
  /** @param bool */
  public function setPresentLock($presentLock)
  {
    $this->presentLock = $presentLock;
  }
  /** @return bool */
  public function getPresentLock()
  {
    return $this->presentLock;
  }
  /** @param bool */
  public function setReactionsLock($reactionsLock)
  {
    $this->reactionsLock = $reactionsLock;
  }
  /** @return bool */
  public function getReactionsLock()
  {
    return $this->reactionsLock;
  }
  /** @param bool */
  public function setVideoLock($videoLock)
  {
    $this->videoLock = $videoLock;
  }
  /** @return bool */
  public function getVideoLock()
  {
    return $this->videoLock;
  }
}

class CapTokenHolderProto extends \Google\Model
{
  /** @var string */
  public $tokenHmacSha1Prefix;

  /** @param string */
  public function setTokenHmacSha1Prefix($tokenHmacSha1Prefix)
  {
    $this->tokenHmacSha1Prefix = $tokenHmacSha1Prefix;
  }
  /** @return string */
  public function getTokenHmacSha1Prefix()
  {
    return $this->tokenHmacSha1Prefix;
  }
}

class Card extends \Google\Collection
{
  /** @var CardAction[] */
  public $cardActions;
  /** @var string */
  public $displayStyle;
  /** @var FixedFooter */
  public $fixedFooter;
  /** @var CardHeader */
  public $header;
  /** @var string */
  public $name;
  /** @var CardHeader */
  public $peekCardHeader;
  /** @var Section[] */
  public $sections;
  protected $collection_key = 'sections';
  protected $cardActionsType = CardAction::class;
  protected $cardActionsDataType = 'array';
  protected $fixedFooterType = FixedFooter::class;
  protected $fixedFooterDataType = '';
  protected $headerType = CardHeader::class;
  protected $headerDataType = '';
  protected $peekCardHeaderType = CardHeader::class;
  protected $peekCardHeaderDataType = '';
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
  /** @param FixedFooter */
  public function setFixedFooter(FixedFooter $fixedFooter)
  {
    $this->fixedFooter = $fixedFooter;
  }
  /** @return FixedFooter */
  public function getFixedFooter()
  {
    return $this->fixedFooter;
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
  /** @param CardHeader */
  public function setPeekCardHeader(CardHeader $peekCardHeader)
  {
    $this->peekCardHeader = $peekCardHeader;
  }
  /** @return CardHeader */
  public function getPeekCardHeader()
  {
    return $this->peekCardHeader;
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

class CardCapabilityMetadata extends \Google\Collection
{
  /** @var string[] */
  public $requiredCapabilities;
  protected $collection_key = 'requiredCapabilities';
  /** @param string[] */
  public function setRequiredCapabilities($requiredCapabilities)
  {
    $this->requiredCapabilities = $requiredCapabilities;
  }
  /** @return string[] */
  public function getRequiredCapabilities()
  {
    return $this->requiredCapabilities;
  }
}

class CardHeader extends \Google\Model
{
  /** @var string */
  public $imageAltText;
  /** @var string */
  public $imageStyle;
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

class CaribouAttributeValue extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var int */
  public $intValue;
  /** @var string */
  public $longValue;
  /** @var string */
  public $rawByteValue;
  /** @var string */
  public $stringValue;

  /** @param bool */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /** @return bool */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /** @param int */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return int */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param string */
  public function setLongValue($longValue)
  {
    $this->longValue = $longValue;
  }
  /** @return string */
  public function getLongValue()
  {
    return $this->longValue;
  }
  /** @param string */
  public function setRawByteValue($rawByteValue)
  {
    $this->rawByteValue = $rawByteValue;
  }
  /** @return string */
  public function getRawByteValue()
  {
    return $this->rawByteValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class ChatClientActionMarkup extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadata extends \Google\Model
{
  /** @var ChatConserverDynamitePlaceholderMetadataAttachmentMetadata */
  public $attachmentMetadata;
  /** @var ChatConserverDynamitePlaceholderMetadataBotMessageMetadata */
  public $botMessageMetadata;
  /** @var ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata */
  public $calendarEventMetadata;
  /** @var ChatConserverDynamitePlaceholderMetadataDeleteMetadata */
  public $deleteMetadata;
  /** @var ChatConserverDynamitePlaceholderMetadataEditMetadata */
  public $editMetadata;
  /** @var string */
  public $spaceUrl;
  /** @var ChatConserverDynamitePlaceholderMetadataTasksMetadata */
  public $tasksMetadata;
  /** @var ChatConserverDynamitePlaceholderMetadataVideoCallMetadata */
  public $videoCallMetadata;
  protected $attachmentMetadataType = ChatConserverDynamitePlaceholderMetadataAttachmentMetadata::class;
  protected $attachmentMetadataDataType = '';
  protected $botMessageMetadataType = ChatConserverDynamitePlaceholderMetadataBotMessageMetadata::class;
  protected $botMessageMetadataDataType = '';
  protected $calendarEventMetadataType = ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata::class;
  protected $calendarEventMetadataDataType = '';
  protected $deleteMetadataType = ChatConserverDynamitePlaceholderMetadataDeleteMetadata::class;
  protected $deleteMetadataDataType = '';
  protected $editMetadataType = ChatConserverDynamitePlaceholderMetadataEditMetadata::class;
  protected $editMetadataDataType = '';
  protected $tasksMetadataType = ChatConserverDynamitePlaceholderMetadataTasksMetadata::class;
  protected $tasksMetadataDataType = '';
  protected $videoCallMetadataType = ChatConserverDynamitePlaceholderMetadataVideoCallMetadata::class;
  protected $videoCallMetadataDataType = '';
  /** @param ChatConserverDynamitePlaceholderMetadataAttachmentMetadata */
  public function setAttachmentMetadata(ChatConserverDynamitePlaceholderMetadataAttachmentMetadata $attachmentMetadata)
  {
    $this->attachmentMetadata = $attachmentMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataAttachmentMetadata */
  public function getAttachmentMetadata()
  {
    return $this->attachmentMetadata;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataBotMessageMetadata */
  public function setBotMessageMetadata(ChatConserverDynamitePlaceholderMetadataBotMessageMetadata $botMessageMetadata)
  {
    $this->botMessageMetadata = $botMessageMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataBotMessageMetadata */
  public function getBotMessageMetadata()
  {
    return $this->botMessageMetadata;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata */
  public function setCalendarEventMetadata(ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata $calendarEventMetadata)
  {
    $this->calendarEventMetadata = $calendarEventMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata */
  public function getCalendarEventMetadata()
  {
    return $this->calendarEventMetadata;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataDeleteMetadata */
  public function setDeleteMetadata(ChatConserverDynamitePlaceholderMetadataDeleteMetadata $deleteMetadata)
  {
    $this->deleteMetadata = $deleteMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataDeleteMetadata */
  public function getDeleteMetadata()
  {
    return $this->deleteMetadata;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataEditMetadata */
  public function setEditMetadata(ChatConserverDynamitePlaceholderMetadataEditMetadata $editMetadata)
  {
    $this->editMetadata = $editMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataEditMetadata */
  public function getEditMetadata()
  {
    return $this->editMetadata;
  }
  /** @param string */
  public function setSpaceUrl($spaceUrl)
  {
    $this->spaceUrl = $spaceUrl;
  }
  /** @return string */
  public function getSpaceUrl()
  {
    return $this->spaceUrl;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataTasksMetadata */
  public function setTasksMetadata(ChatConserverDynamitePlaceholderMetadataTasksMetadata $tasksMetadata)
  {
    $this->tasksMetadata = $tasksMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataTasksMetadata */
  public function getTasksMetadata()
  {
    return $this->tasksMetadata;
  }
  /** @param ChatConserverDynamitePlaceholderMetadataVideoCallMetadata */
  public function setVideoCallMetadata(ChatConserverDynamitePlaceholderMetadataVideoCallMetadata $videoCallMetadata)
  {
    $this->videoCallMetadata = $videoCallMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadataVideoCallMetadata */
  public function getVideoCallMetadata()
  {
    return $this->videoCallMetadata;
  }
}

class ChatConserverDynamitePlaceholderMetadataAttachmentMetadata extends \Google\Model
{
  /** @var string */
  public $filename;

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
}

class ChatConserverDynamitePlaceholderMetadataBotMessageMetadata extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadataDeleteMetadata extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadataEditMetadata extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadataTasksMetadata extends \Google\Model
{
}

class ChatConserverDynamitePlaceholderMetadataVideoCallMetadata extends \Google\Model
{
  /** @var string */
  public $meetingUrl;

  /** @param string */
  public function setMeetingUrl($meetingUrl)
  {
    $this->meetingUrl = $meetingUrl;
  }
  /** @return string */
  public function getMeetingUrl()
  {
    return $this->meetingUrl;
  }
}

class ChatConserverMessageContent extends \Google\Collection
{
  /** @var SocialCommonAttachmentAttachment[] */
  public $attachment;
  /** @var Segment[] */
  public $segment;
  protected $collection_key = 'segment';
  protected $attachmentType = SocialCommonAttachmentAttachment::class;
  protected $attachmentDataType = 'array';
  protected $segmentType = Segment::class;
  protected $segmentDataType = 'array';
  /** @param SocialCommonAttachmentAttachment[] */
  public function setAttachment($attachment)
  {
    $this->attachment = $attachment;
  }
  /** @return SocialCommonAttachmentAttachment[] */
  public function getAttachment()
  {
    return $this->attachment;
  }
  /** @param Segment[] */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /** @return Segment[] */
  public function getSegment()
  {
    return $this->segment;
  }
}

class ChatContentExtension extends \Google\Collection
{
  /** @var EventAnnotation[] */
  public $annotation;
  /** @var ChatConserverDynamitePlaceholderMetadata */
  public $dynamitePlaceholderMetadata;
  /** @var string */
  public $eventOtrStatus;
  /** @var GroupLinkSharingModificationEvent */
  public $groupLinkSharingModificationEvent;
  /** @var HangoutEvent */
  public $hangoutEvent;
  /** @var InviteAcceptedEvent */
  public $inviteAcceptedEvent;
  /** @var MembershipChangeEvent */
  public $membershipChangeEvent;
  /** @var OtrChatMessageEvent */
  public $otrChatMessageEvent;
  /** @var OtrModificationEvent */
  public $otrModificationEvent;
  /** @var RenameEvent */
  public $renameEvent;
  protected $collection_key = 'annotation';
  protected $annotationType = EventAnnotation::class;
  protected $annotationDataType = 'array';
  protected $dynamitePlaceholderMetadataType = ChatConserverDynamitePlaceholderMetadata::class;
  protected $dynamitePlaceholderMetadataDataType = '';
  protected $groupLinkSharingModificationEventType = GroupLinkSharingModificationEvent::class;
  protected $groupLinkSharingModificationEventDataType = '';
  protected $hangoutEventType = HangoutEvent::class;
  protected $hangoutEventDataType = '';
  protected $inviteAcceptedEventType = InviteAcceptedEvent::class;
  protected $inviteAcceptedEventDataType = '';
  protected $membershipChangeEventType = MembershipChangeEvent::class;
  protected $membershipChangeEventDataType = '';
  protected $otrChatMessageEventType = OtrChatMessageEvent::class;
  protected $otrChatMessageEventDataType = '';
  protected $otrModificationEventType = OtrModificationEvent::class;
  protected $otrModificationEventDataType = '';
  protected $renameEventType = RenameEvent::class;
  protected $renameEventDataType = '';
  /** @param EventAnnotation[] */
  public function setAnnotation($annotation)
  {
    $this->annotation = $annotation;
  }
  /** @return EventAnnotation[] */
  public function getAnnotation()
  {
    return $this->annotation;
  }
  /** @param ChatConserverDynamitePlaceholderMetadata */
  public function setDynamitePlaceholderMetadata(ChatConserverDynamitePlaceholderMetadata $dynamitePlaceholderMetadata)
  {
    $this->dynamitePlaceholderMetadata = $dynamitePlaceholderMetadata;
  }
  /** @return ChatConserverDynamitePlaceholderMetadata */
  public function getDynamitePlaceholderMetadata()
  {
    return $this->dynamitePlaceholderMetadata;
  }
  /** @param string */
  public function setEventOtrStatus($eventOtrStatus)
  {
    $this->eventOtrStatus = $eventOtrStatus;
  }
  /** @return string */
  public function getEventOtrStatus()
  {
    return $this->eventOtrStatus;
  }
  /** @param GroupLinkSharingModificationEvent */
  public function setGroupLinkSharingModificationEvent(GroupLinkSharingModificationEvent $groupLinkSharingModificationEvent)
  {
    $this->groupLinkSharingModificationEvent = $groupLinkSharingModificationEvent;
  }
  /** @return GroupLinkSharingModificationEvent */
  public function getGroupLinkSharingModificationEvent()
  {
    return $this->groupLinkSharingModificationEvent;
  }
  /** @param HangoutEvent */
  public function setHangoutEvent(HangoutEvent $hangoutEvent)
  {
    $this->hangoutEvent = $hangoutEvent;
  }
  /** @return HangoutEvent */
  public function getHangoutEvent()
  {
    return $this->hangoutEvent;
  }
  /** @param InviteAcceptedEvent */
  public function setInviteAcceptedEvent(InviteAcceptedEvent $inviteAcceptedEvent)
  {
    $this->inviteAcceptedEvent = $inviteAcceptedEvent;
  }
  /** @return InviteAcceptedEvent */
  public function getInviteAcceptedEvent()
  {
    return $this->inviteAcceptedEvent;
  }
  /** @param MembershipChangeEvent */
  public function setMembershipChangeEvent(MembershipChangeEvent $membershipChangeEvent)
  {
    $this->membershipChangeEvent = $membershipChangeEvent;
  }
  /** @return MembershipChangeEvent */
  public function getMembershipChangeEvent()
  {
    return $this->membershipChangeEvent;
  }
  /** @param OtrChatMessageEvent */
  public function setOtrChatMessageEvent(OtrChatMessageEvent $otrChatMessageEvent)
  {
    $this->otrChatMessageEvent = $otrChatMessageEvent;
  }
  /** @return OtrChatMessageEvent */
  public function getOtrChatMessageEvent()
  {
    return $this->otrChatMessageEvent;
  }
  /** @param OtrModificationEvent */
  public function setOtrModificationEvent(OtrModificationEvent $otrModificationEvent)
  {
    $this->otrModificationEvent = $otrModificationEvent;
  }
  /** @return OtrModificationEvent */
  public function getOtrModificationEvent()
  {
    return $this->otrModificationEvent;
  }
  /** @param RenameEvent */
  public function setRenameEvent(RenameEvent $renameEvent)
  {
    $this->renameEvent = $renameEvent;
  }
  /** @return RenameEvent */
  public function getRenameEvent()
  {
    return $this->renameEvent;
  }
}

class ChatProto extends \Google\Model
{
  /** @var string */
  public $chatId;
  /** @var int */
  public $memberType;

  /** @param string */
  public function setChatId($chatId)
  {
    $this->chatId = $chatId;
  }
  /** @return string */
  public function getChatId()
  {
    return $this->chatId;
  }
  /** @param int */
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  /** @return int */
  public function getMemberType()
  {
    return $this->memberType;
  }
}

class CheckAccessResponse extends \Google\Model
{
  /** @var bool */
  public $hasAccess;

  /** @param bool */
  public function setHasAccess($hasAccess)
  {
    $this->hasAccess = $hasAccess;
  }
  /** @return bool */
  public function getHasAccess()
  {
    return $this->hasAccess;
  }
}

class CircleProto extends \Google\Model
{
  /** @var string */
  public $circleId;
  /** @var string */
  public $ownerGaiaId;
  /** @var string */
  public $requiredConsistencyTimestampUsec;

  /** @param string */
  public function setCircleId($circleId)
  {
    $this->circleId = $circleId;
  }
  /** @return string */
  public function getCircleId()
  {
    return $this->circleId;
  }
  /** @param string */
  public function setOwnerGaiaId($ownerGaiaId)
  {
    $this->ownerGaiaId = $ownerGaiaId;
  }
  /** @return string */
  public function getOwnerGaiaId()
  {
    return $this->ownerGaiaId;
  }
  /** @param string */
  public function setRequiredConsistencyTimestampUsec($requiredConsistencyTimestampUsec)
  {
    $this->requiredConsistencyTimestampUsec = $requiredConsistencyTimestampUsec;
  }
  /** @return string */
  public function getRequiredConsistencyTimestampUsec()
  {
    return $this->requiredConsistencyTimestampUsec;
  }
}

class ClientContext extends \Google\Model
{
  /** @var string */
  public $clientOperationId;
  /** @var string */
  public $clientType;
  /** @var SessionContext */
  public $sessionContext;
  /** @var string */
  public $userIp;
  protected $sessionContextType = SessionContext::class;
  protected $sessionContextDataType = '';
  /** @param string */
  public function setClientOperationId($clientOperationId)
  {
    $this->clientOperationId = $clientOperationId;
  }
  /** @return string */
  public function getClientOperationId()
  {
    return $this->clientOperationId;
  }
  /** @param string */
  public function setClientType($clientType)
  {
    $this->clientType = $clientType;
  }
  /** @return string */
  public function getClientType()
  {
    return $this->clientType;
  }
  /** @param SessionContext */
  public function setSessionContext(SessionContext $sessionContext)
  {
    $this->sessionContext = $sessionContext;
  }
  /** @return SessionContext */
  public function getSessionContext()
  {
    return $this->sessionContext;
  }
  /** @param string */
  public function setUserIp($userIp)
  {
    $this->userIp = $userIp;
  }
  /** @return string */
  public function getUserIp()
  {
    return $this->userIp;
  }
}

class CloudPrincipalProto extends \Google\Model
{
  /** @var string */
  public $id;

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

class ClusterInfo extends \Google\Collection
{
  /** @var string[] */
  public $clusterId;
  /** @var bool */
  public $throttled;
  protected $collection_key = 'clusterId';
  /** @param string[] */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string[] */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param bool */
  public function setThrottled($throttled)
  {
    $this->throttled = $throttled;
  }
  /** @return bool */
  public function getThrottled()
  {
    return $this->throttled;
  }
}

class CoActivity extends \Google\Model
{
  /** @var string */
  public $activityTitle;
  /** @var string */
  public $coActivityApp;

  /** @param string */
  public function setActivityTitle($activityTitle)
  {
    $this->activityTitle = $activityTitle;
  }
  /** @return string */
  public function getActivityTitle()
  {
    return $this->activityTitle;
  }
  /** @param string */
  public function setCoActivityApp($coActivityApp)
  {
    $this->coActivityApp = $coActivityApp;
  }
  /** @return string */
  public function getCoActivityApp()
  {
    return $this->coActivityApp;
  }
}

class Collaboration extends \Google\Model
{
  /** @var string */
  public $attachmentId;
  /** @var UserDisplayInfo */
  public $initiator;
  /** @var string */
  public $uri;
  protected $initiatorType = UserDisplayInfo::class;
  protected $initiatorDataType = '';
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
  /** @param UserDisplayInfo */
  public function setInitiator(UserDisplayInfo $initiator)
  {
    $this->initiator = $initiator;
  }
  /** @return UserDisplayInfo */
  public function getInitiator()
  {
    return $this->initiator;
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

class CommunalLabelTag extends \Google\Model
{
  /** @var string */
  public $creatorUserId;
  /** @var string */
  public $labelId;

  /** @param string */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return string */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
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
}

class CompositeFilter extends \Google\Collection
{
  /** @var string */
  public $logicOperator;
  /** @var Filter[] */
  public $subFilters;
  protected $collection_key = 'subFilters';
  protected $subFiltersType = Filter::class;
  protected $subFiltersDataType = 'array';
  /** @param string */
  public function setLogicOperator($logicOperator)
  {
    $this->logicOperator = $logicOperator;
  }
  /** @return string */
  public function getLogicOperator()
  {
    return $this->logicOperator;
  }
  /** @param Filter[] */
  public function setSubFilters($subFilters)
  {
    $this->subFilters = $subFilters;
  }
  /** @return Filter[] */
  public function getSubFilters()
  {
    return $this->subFilters;
  }
}

class ConsentedAppUnfurlMetadata extends \Google\Model
{
  /** @var UserId */
  public $clientSpecifiedAppId;
  protected $clientSpecifiedAppIdType = UserId::class;
  protected $clientSpecifiedAppIdDataType = '';
  /** @param UserId */
  public function setClientSpecifiedAppId(UserId $clientSpecifiedAppId)
  {
    $this->clientSpecifiedAppId = $clientSpecifiedAppId;
  }
  /** @return UserId */
  public function getClientSpecifiedAppId()
  {
    return $this->clientSpecifiedAppId;
  }
}

class ContactGroupProto extends \Google\Model
{
  /** @var string */
  public $groupId;
  /** @var string */
  public $ownerGaiaId;
  /** @var string */
  public $requiredConsistencyTimestampUsec;

  /** @param string */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return string */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /** @param string */
  public function setOwnerGaiaId($ownerGaiaId)
  {
    $this->ownerGaiaId = $ownerGaiaId;
  }
  /** @return string */
  public function getOwnerGaiaId()
  {
    return $this->ownerGaiaId;
  }
  /** @param string */
  public function setRequiredConsistencyTimestampUsec($requiredConsistencyTimestampUsec)
  {
    $this->requiredConsistencyTimestampUsec = $requiredConsistencyTimestampUsec;
  }
  /** @return string */
  public function getRequiredConsistencyTimestampUsec()
  {
    return $this->requiredConsistencyTimestampUsec;
  }
}

class ContentReport extends \Google\Model
{
  /** @var string */
  public $reportCreateTimestamp;
  /** @var ContentReportJustification */
  public $reportJustification;
  /** @var AppsDynamiteSharedContentReportType */
  public $reportType;
  /** @var UserId */
  public $reporterUserId;
  /** @var string */
  public $revisionCreateTimestamp;
  protected $reportJustificationType = ContentReportJustification::class;
  protected $reportJustificationDataType = '';
  protected $reportTypeType = AppsDynamiteSharedContentReportType::class;
  protected $reportTypeDataType = '';
  protected $reporterUserIdType = UserId::class;
  protected $reporterUserIdDataType = '';
  /** @param string */
  public function setReportCreateTimestamp($reportCreateTimestamp)
  {
    $this->reportCreateTimestamp = $reportCreateTimestamp;
  }
  /** @return string */
  public function getReportCreateTimestamp()
  {
    return $this->reportCreateTimestamp;
  }
  /** @param ContentReportJustification */
  public function setReportJustification(ContentReportJustification $reportJustification)
  {
    $this->reportJustification = $reportJustification;
  }
  /** @return ContentReportJustification */
  public function getReportJustification()
  {
    return $this->reportJustification;
  }
  /** @param AppsDynamiteSharedContentReportType */
  public function setReportType(AppsDynamiteSharedContentReportType $reportType)
  {
    $this->reportType = $reportType;
  }
  /** @return AppsDynamiteSharedContentReportType */
  public function getReportType()
  {
    return $this->reportType;
  }
  /** @param UserId */
  public function setReporterUserId(UserId $reporterUserId)
  {
    $this->reporterUserId = $reporterUserId;
  }
  /** @return UserId */
  public function getReporterUserId()
  {
    return $this->reporterUserId;
  }
  /** @param string */
  public function setRevisionCreateTimestamp($revisionCreateTimestamp)
  {
    $this->revisionCreateTimestamp = $revisionCreateTimestamp;
  }
  /** @return string */
  public function getRevisionCreateTimestamp()
  {
    return $this->revisionCreateTimestamp;
  }
}

class ContentReportJustification extends \Google\Model
{
  /** @var string */
  public $userJustification;

  /** @param string */
  public function setUserJustification($userJustification)
  {
    $this->userJustification = $userJustification;
  }
  /** @return string */
  public function getUserJustification()
  {
    return $this->userJustification;
  }
}

class ContentReportSummary extends \Google\Model
{
  /** @var int */
  public $numberReports;
  /** @var int */
  public $numberReportsAllRevisions;

  /** @param int */
  public function setNumberReports($numberReports)
  {
    $this->numberReports = $numberReports;
  }
  /** @return int */
  public function getNumberReports()
  {
    return $this->numberReports;
  }
  /** @param int */
  public function setNumberReportsAllRevisions($numberReportsAllRevisions)
  {
    $this->numberReportsAllRevisions = $numberReportsAllRevisions;
  }
  /** @return int */
  public function getNumberReportsAllRevisions()
  {
    return $this->numberReportsAllRevisions;
  }
}

class ContextAttribute extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ContextualAddOnMarkup extends \Google\Collection
{
  /** @var Card[] */
  public $cards;
  /** @var Toolbar */
  public $toolbar;
  protected $collection_key = 'cards';
  protected $cardsType = Card::class;
  protected $cardsDataType = 'array';
  protected $toolbarType = Toolbar::class;
  protected $toolbarDataType = '';
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
  /** @param Toolbar */
  public function setToolbar(Toolbar $toolbar)
  {
    $this->toolbar = $toolbar;
  }
  /** @return Toolbar */
  public function getToolbar()
  {
    return $this->toolbar;
  }
}

class CseInfo extends \Google\Model
{
  /** @var string */
  public $cseDomain;
  /** @var string */
  public $wrappedKey;

  /** @param string */
  public function setCseDomain($cseDomain)
  {
    $this->cseDomain = $cseDomain;
  }
  /** @return string */
  public function getCseDomain()
  {
    return $this->cseDomain;
  }
  /** @param string */
  public function setWrappedKey($wrappedKey)
  {
    $this->wrappedKey = $wrappedKey;
  }
  /** @return string */
  public function getWrappedKey()
  {
    return $this->wrappedKey;
  }
}

class CustomEmojiMetadata extends \Google\Model
{
  /** @var AppsDynamiteSharedCustomEmoji */
  public $customEmoji;
  protected $customEmojiType = AppsDynamiteSharedCustomEmoji::class;
  protected $customEmojiDataType = '';
  /** @param AppsDynamiteSharedCustomEmoji */
  public function setCustomEmoji(AppsDynamiteSharedCustomEmoji $customEmoji)
  {
    $this->customEmoji = $customEmoji;
  }
  /** @return AppsDynamiteSharedCustomEmoji */
  public function getCustomEmoji()
  {
    return $this->customEmoji;
  }
}

class CustomFunctionReturnValueMarkup extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var array */
  public $value;

  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class CustomerId extends \Google\Model
{
  /** @var string */
  public $customerId;

  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
}

class CustomerIndexStats extends \Google\Collection
{
  /** @var Date */
  public $date;
  /** @var ItemCountByStatus[] */
  public $itemCountByStatus;
  protected $collection_key = 'itemCountByStatus';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $itemCountByStatusType = ItemCountByStatus::class;
  protected $itemCountByStatusDataType = 'array';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param ItemCountByStatus[] */
  public function setItemCountByStatus($itemCountByStatus)
  {
    $this->itemCountByStatus = $itemCountByStatus;
  }
  /** @return ItemCountByStatus[] */
  public function getItemCountByStatus()
  {
    return $this->itemCountByStatus;
  }
}

class CustomerQueryStats extends \Google\Collection
{
  /** @var Date */
  public $date;
  /** @var QueryCountByStatus[] */
  public $queryCountByStatus;
  protected $collection_key = 'queryCountByStatus';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $queryCountByStatusType = QueryCountByStatus::class;
  protected $queryCountByStatusDataType = 'array';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param QueryCountByStatus[] */
  public function setQueryCountByStatus($queryCountByStatus)
  {
    $this->queryCountByStatus = $queryCountByStatus;
  }
  /** @return QueryCountByStatus[] */
  public function getQueryCountByStatus()
  {
    return $this->queryCountByStatus;
  }
}

class CustomerSearchApplicationStats extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var Date */
  public $date;
  protected $dateType = Date::class;
  protected $dateDataType = '';
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
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
}

class CustomerSessionStats extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $searchSessionsCount;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setSearchSessionsCount($searchSessionsCount)
  {
    $this->searchSessionsCount = $searchSessionsCount;
  }
  /** @return string */
  public function getSearchSessionsCount()
  {
    return $this->searchSessionsCount;
  }
}

class CustomerSettings extends \Google\Model
{
  /** @var AuditLoggingSettings */
  public $auditLoggingSettings;
  /** @var VPCSettings */
  public $vpcSettings;
  protected $auditLoggingSettingsType = AuditLoggingSettings::class;
  protected $auditLoggingSettingsDataType = '';
  protected $vpcSettingsType = VPCSettings::class;
  protected $vpcSettingsDataType = '';
  /** @param AuditLoggingSettings */
  public function setAuditLoggingSettings(AuditLoggingSettings $auditLoggingSettings)
  {
    $this->auditLoggingSettings = $auditLoggingSettings;
  }
  /** @return AuditLoggingSettings */
  public function getAuditLoggingSettings()
  {
    return $this->auditLoggingSettings;
  }
  /** @param VPCSettings */
  public function setVpcSettings(VPCSettings $vpcSettings)
  {
    $this->vpcSettings = $vpcSettings;
  }
  /** @return VPCSettings */
  public function getVpcSettings()
  {
    return $this->vpcSettings;
  }
}

class CustomerUserStats extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $oneDayActiveUsersCount;
  /** @var string */
  public $sevenDaysActiveUsersCount;
  /** @var string */
  public $thirtyDaysActiveUsersCount;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setOneDayActiveUsersCount($oneDayActiveUsersCount)
  {
    $this->oneDayActiveUsersCount = $oneDayActiveUsersCount;
  }
  /** @return string */
  public function getOneDayActiveUsersCount()
  {
    return $this->oneDayActiveUsersCount;
  }
  /** @param string */
  public function setSevenDaysActiveUsersCount($sevenDaysActiveUsersCount)
  {
    $this->sevenDaysActiveUsersCount = $sevenDaysActiveUsersCount;
  }
  /** @return string */
  public function getSevenDaysActiveUsersCount()
  {
    return $this->sevenDaysActiveUsersCount;
  }
  /** @param string */
  public function setThirtyDaysActiveUsersCount($thirtyDaysActiveUsersCount)
  {
    $this->thirtyDaysActiveUsersCount = $thirtyDaysActiveUsersCount;
  }
  /** @return string */
  public function getThirtyDaysActiveUsersCount()
  {
    return $this->thirtyDaysActiveUsersCount;
  }
}

class DataLossPreventionMetadata extends \Google\Model
{
  /** @var DlpScanSummary */
  public $dlpScanSummary;
  /** @var bool */
  public $warnAcknowledged;
  protected $dlpScanSummaryType = DlpScanSummary::class;
  protected $dlpScanSummaryDataType = '';
  /** @param DlpScanSummary */
  public function setDlpScanSummary(DlpScanSummary $dlpScanSummary)
  {
    $this->dlpScanSummary = $dlpScanSummary;
  }
  /** @return DlpScanSummary */
  public function getDlpScanSummary()
  {
    return $this->dlpScanSummary;
  }
  /** @param bool */
  public function setWarnAcknowledged($warnAcknowledged)
  {
    $this->warnAcknowledged = $warnAcknowledged;
  }
  /** @return bool */
  public function getWarnAcknowledged()
  {
    return $this->warnAcknowledged;
  }
}

class DataSource extends \Google\Collection
{
  /** @var bool */
  public $disableModifications;
  /** @var bool */
  public $disableServing;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $indexingServiceAccounts;
  /** @var GSuitePrincipal[] */
  public $itemsVisibility;
  /** @var string */
  public $name;
  /** @var string[] */
  public $operationIds;
  /** @var bool */
  public $returnThumbnailUrls;
  /** @var string */
  public $shortName;
  protected $collection_key = 'operationIds';
  protected $itemsVisibilityType = GSuitePrincipal::class;
  protected $itemsVisibilityDataType = 'array';
  /** @param bool */
  public function setDisableModifications($disableModifications)
  {
    $this->disableModifications = $disableModifications;
  }
  /** @return bool */
  public function getDisableModifications()
  {
    return $this->disableModifications;
  }
  /** @param bool */
  public function setDisableServing($disableServing)
  {
    $this->disableServing = $disableServing;
  }
  /** @return bool */
  public function getDisableServing()
  {
    return $this->disableServing;
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
  /** @param string[] */
  public function setIndexingServiceAccounts($indexingServiceAccounts)
  {
    $this->indexingServiceAccounts = $indexingServiceAccounts;
  }
  /** @return string[] */
  public function getIndexingServiceAccounts()
  {
    return $this->indexingServiceAccounts;
  }
  /** @param GSuitePrincipal[] */
  public function setItemsVisibility($itemsVisibility)
  {
    $this->itemsVisibility = $itemsVisibility;
  }
  /** @return GSuitePrincipal[] */
  public function getItemsVisibility()
  {
    return $this->itemsVisibility;
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
  /** @param string[] */
  public function setOperationIds($operationIds)
  {
    $this->operationIds = $operationIds;
  }
  /** @return string[] */
  public function getOperationIds()
  {
    return $this->operationIds;
  }
  /** @param bool */
  public function setReturnThumbnailUrls($returnThumbnailUrls)
  {
    $this->returnThumbnailUrls = $returnThumbnailUrls;
  }
  /** @return bool */
  public function getReturnThumbnailUrls()
  {
    return $this->returnThumbnailUrls;
  }
  /** @param string */
  public function setShortName($shortName)
  {
    $this->shortName = $shortName;
  }
  /** @return string */
  public function getShortName()
  {
    return $this->shortName;
  }
}

class DataSourceIndexStats extends \Google\Collection
{
  /** @var Date */
  public $date;
  /** @var ItemCountByStatus[] */
  public $itemCountByStatus;
  protected $collection_key = 'itemCountByStatus';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $itemCountByStatusType = ItemCountByStatus::class;
  protected $itemCountByStatusDataType = 'array';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param ItemCountByStatus[] */
  public function setItemCountByStatus($itemCountByStatus)
  {
    $this->itemCountByStatus = $itemCountByStatus;
  }
  /** @return ItemCountByStatus[] */
  public function getItemCountByStatus()
  {
    return $this->itemCountByStatus;
  }
}

class DataSourceRestriction extends \Google\Collection
{
  /** @var FilterOptions[] */
  public $filterOptions;
  /** @var Source */
  public $source;
  protected $collection_key = 'filterOptions';
  protected $filterOptionsType = FilterOptions::class;
  protected $filterOptionsDataType = 'array';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param FilterOptions[] */
  public function setFilterOptions($filterOptions)
  {
    $this->filterOptions = $filterOptions;
  }
  /** @return FilterOptions[] */
  public function getFilterOptions()
  {
    return $this->filterOptions;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class DateOperatorOptions extends \Google\Model
{
  /** @var string */
  public $greaterThanOperatorName;
  /** @var string */
  public $lessThanOperatorName;
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setGreaterThanOperatorName($greaterThanOperatorName)
  {
    $this->greaterThanOperatorName = $greaterThanOperatorName;
  }
  /** @return string */
  public function getGreaterThanOperatorName()
  {
    return $this->greaterThanOperatorName;
  }
  /** @param string */
  public function setLessThanOperatorName($lessThanOperatorName)
  {
    $this->lessThanOperatorName = $lessThanOperatorName;
  }
  /** @return string */
  public function getLessThanOperatorName()
  {
    return $this->lessThanOperatorName;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class DatePropertyOptions extends \Google\Model
{
  /** @var DateOperatorOptions */
  public $operatorOptions;
  protected $operatorOptionsType = DateOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  /** @param DateOperatorOptions */
  public function setOperatorOptions(DateOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return DateOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
}

class DateTimePicker extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var FormAction */
  public $onChange;
  /** @var int */
  public $timezoneOffsetDate;
  /** @var string */
  public $type;
  /** @var string */
  public $valueMsEpoch;
  protected $onChangeType = FormAction::class;
  protected $onChangeDataType = '';
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
  /** @param FormAction */
  public function setOnChange(FormAction $onChange)
  {
    $this->onChange = $onChange;
  }
  /** @return FormAction */
  public function getOnChange()
  {
    return $this->onChange;
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

class DateValues extends \Google\Collection
{
  /** @var Date[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Date::class;
  protected $valuesDataType = 'array';
  /** @param Date[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return Date[] */
  public function getValues()
  {
    return $this->values;
  }
}

class DebugOptions extends \Google\Model
{
  /** @var bool */
  public $enableDebugging;

  /** @param bool */
  public function setEnableDebugging($enableDebugging)
  {
    $this->enableDebugging = $enableDebugging;
  }
  /** @return bool */
  public function getEnableDebugging()
  {
    return $this->enableDebugging;
  }
}

class DeepLinkData extends \Google\Collection
{
  /** @var string */
  public $appId;
  /** @var PackagingServiceClient[] */
  public $client;
  /** @var string */
  public $deepLinkId;
  /** @var string */
  public $url;
  protected $collection_key = 'client';
  protected $clientType = PackagingServiceClient::class;
  protected $clientDataType = 'array';
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param PackagingServiceClient[] */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return PackagingServiceClient[] */
  public function getClient()
  {
    return $this->client;
  }
  /** @param string */
  public function setDeepLinkId($deepLinkId)
  {
    $this->deepLinkId = $deepLinkId;
  }
  /** @return string */
  public function getDeepLinkId()
  {
    return $this->deepLinkId;
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

class DeleteMetadata extends \Google\Model
{
}

class DeleteQueueItemsRequest extends \Google\Model
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var string */
  public $queue;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param string */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /** @return string */
  public function getQueue()
  {
    return $this->queue;
  }
}

class DeliveryMedium extends \Google\Model
{
  /** @var string */
  public $mediumType;
  /** @var VoicePhoneNumber */
  public $selfPhone;
  protected $selfPhoneType = VoicePhoneNumber::class;
  protected $selfPhoneDataType = '';
  /** @param string */
  public function setMediumType($mediumType)
  {
    $this->mediumType = $mediumType;
  }
  /** @return string */
  public function getMediumType()
  {
    return $this->mediumType;
  }
  /** @param VoicePhoneNumber */
  public function setSelfPhone(VoicePhoneNumber $selfPhone)
  {
    $this->selfPhone = $selfPhone;
  }
  /** @return VoicePhoneNumber */
  public function getSelfPhone()
  {
    return $this->selfPhone;
  }
}

class DisplayedProperty extends \Google\Model
{
  /** @var string */
  public $propertyName;

  /** @param string */
  public function setPropertyName($propertyName)
  {
    $this->propertyName = $propertyName;
  }
  /** @return string */
  public function getPropertyName()
  {
    return $this->propertyName;
  }
}

class Divider extends \Google\Model
{
}

class DlpScanSummary extends \Google\Model
{
  /** @var string */
  public $scanId;
  /** @var bool */
  public $scanNotApplicableForContext;
  /** @var string */
  public $scanOutcome;

  /** @param string */
  public function setScanId($scanId)
  {
    $this->scanId = $scanId;
  }
  /** @return string */
  public function getScanId()
  {
    return $this->scanId;
  }
  /** @param bool */
  public function setScanNotApplicableForContext($scanNotApplicableForContext)
  {
    $this->scanNotApplicableForContext = $scanNotApplicableForContext;
  }
  /** @return bool */
  public function getScanNotApplicableForContext()
  {
    return $this->scanNotApplicableForContext;
  }
  /** @param string */
  public function setScanOutcome($scanOutcome)
  {
    $this->scanOutcome = $scanOutcome;
  }
  /** @return string */
  public function getScanOutcome()
  {
    return $this->scanOutcome;
  }
}

class DmId extends \Google\Model
{
  /** @var string */
  public $dmId;

  /** @param string */
  public function setDmId($dmId)
  {
    $this->dmId = $dmId;
  }
  /** @return string */
  public function getDmId()
  {
    return $this->dmId;
  }
}

class DocumentInfo extends \Google\Model
{
  /** @var WhiteboardInfo */
  public $whiteboardInfo;
  protected $whiteboardInfoType = WhiteboardInfo::class;
  protected $whiteboardInfoDataType = '';
  /** @param WhiteboardInfo */
  public function setWhiteboardInfo(WhiteboardInfo $whiteboardInfo)
  {
    $this->whiteboardInfo = $whiteboardInfo;
  }
  /** @return WhiteboardInfo */
  public function getWhiteboardInfo()
  {
    return $this->whiteboardInfo;
  }
}

class DoubleOperatorOptions extends \Google\Model
{
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class DoublePropertyOptions extends \Google\Model
{
  /** @var DoubleOperatorOptions */
  public $operatorOptions;
  protected $operatorOptionsType = DoubleOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  /** @param DoubleOperatorOptions */
  public function setOperatorOptions(DoubleOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return DoubleOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
}

class DoubleValues extends \Google\Collection
{
  public $values;
  protected $collection_key = 'values';
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class DriveClientActionMarkup extends \Google\Model
{
  /** @var RequestFileScope */
  public $requestFileScope;
  protected $requestFileScopeType = RequestFileScope::class;
  protected $requestFileScopeDataType = '';
  /** @param RequestFileScope */
  public function setRequestFileScope(RequestFileScope $requestFileScope)
  {
    $this->requestFileScope = $requestFileScope;
  }
  /** @return RequestFileScope */
  public function getRequestFileScope()
  {
    return $this->requestFileScope;
  }
}

class DriveFollowUpRestrict extends \Google\Model
{
  /** @var string */
  public $type;

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

class DriveLocationRestrict extends \Google\Model
{
  /** @var string */
  public $type;

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

class DriveMetadata extends \Google\Model
{
  /** @var AclFixRequest */
  public $aclFixRequest;
  /** @var AclFixStatus */
  public $aclFixStatus;
  /** @var bool */
  public $canEdit;
  /** @var bool */
  public $canShare;
  /** @var bool */
  public $canView;
  /** @var string */
  public $driveAction;
  /** @var string */
  public $driveState;
  /** @var TrustedResourceUrlProto */
  public $embedUrl;
  /** @var bool */
  public $encryptedDocId;
  /** @var string */
  public $encryptedResourceKey;
  /** @var string */
  public $externalMimetype;
  /** @var string */
  public $id;
  /** @var bool */
  public $isDownloadRestricted;
  /** @var bool */
  public $isOwner;
  /** @var LegacyUploadMetadata */
  public $legacyUploadMetadata;
  /** @var string */
  public $mimetype;
  /** @var string */
  public $organizationDisplayName;
  /** @var AuthorizedItemId */
  public $shortcutAuthorizedItemId;
  /** @var bool */
  public $shouldNotRender;
  /** @var int */
  public $thumbnailHeight;
  /** @var string */
  public $thumbnailUrl;
  /** @var int */
  public $thumbnailWidth;
  /** @var string */
  public $title;
  /** @var string */
  public $urlFragment;
  /** @var WrappedResourceKey */
  public $wrappedResourceKey;
  protected $aclFixRequestType = AclFixRequest::class;
  protected $aclFixRequestDataType = '';
  protected $aclFixStatusType = AclFixStatus::class;
  protected $aclFixStatusDataType = '';
  protected $embedUrlType = TrustedResourceUrlProto::class;
  protected $embedUrlDataType = '';
  protected $legacyUploadMetadataType = LegacyUploadMetadata::class;
  protected $legacyUploadMetadataDataType = '';
  protected $shortcutAuthorizedItemIdType = AuthorizedItemId::class;
  protected $shortcutAuthorizedItemIdDataType = '';
  protected $wrappedResourceKeyType = WrappedResourceKey::class;
  protected $wrappedResourceKeyDataType = '';
  /** @param AclFixRequest */
  public function setAclFixRequest(AclFixRequest $aclFixRequest)
  {
    $this->aclFixRequest = $aclFixRequest;
  }
  /** @return AclFixRequest */
  public function getAclFixRequest()
  {
    return $this->aclFixRequest;
  }
  /** @param AclFixStatus */
  public function setAclFixStatus(AclFixStatus $aclFixStatus)
  {
    $this->aclFixStatus = $aclFixStatus;
  }
  /** @return AclFixStatus */
  public function getAclFixStatus()
  {
    return $this->aclFixStatus;
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
  public function setCanView($canView)
  {
    $this->canView = $canView;
  }
  /** @return bool */
  public function getCanView()
  {
    return $this->canView;
  }
  /** @param string */
  public function setDriveAction($driveAction)
  {
    $this->driveAction = $driveAction;
  }
  /** @return string */
  public function getDriveAction()
  {
    return $this->driveAction;
  }
  /** @param string */
  public function setDriveState($driveState)
  {
    $this->driveState = $driveState;
  }
  /** @return string */
  public function getDriveState()
  {
    return $this->driveState;
  }
  /** @param TrustedResourceUrlProto */
  public function setEmbedUrl(TrustedResourceUrlProto $embedUrl)
  {
    $this->embedUrl = $embedUrl;
  }
  /** @return TrustedResourceUrlProto */
  public function getEmbedUrl()
  {
    return $this->embedUrl;
  }
  /** @param bool */
  public function setEncryptedDocId($encryptedDocId)
  {
    $this->encryptedDocId = $encryptedDocId;
  }
  /** @return bool */
  public function getEncryptedDocId()
  {
    return $this->encryptedDocId;
  }
  /** @param string */
  public function setEncryptedResourceKey($encryptedResourceKey)
  {
    $this->encryptedResourceKey = $encryptedResourceKey;
  }
  /** @return string */
  public function getEncryptedResourceKey()
  {
    return $this->encryptedResourceKey;
  }
  /** @param string */
  public function setExternalMimetype($externalMimetype)
  {
    $this->externalMimetype = $externalMimetype;
  }
  /** @return string */
  public function getExternalMimetype()
  {
    return $this->externalMimetype;
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
  public function setIsDownloadRestricted($isDownloadRestricted)
  {
    $this->isDownloadRestricted = $isDownloadRestricted;
  }
  /** @return bool */
  public function getIsDownloadRestricted()
  {
    return $this->isDownloadRestricted;
  }
  /** @param bool */
  public function setIsOwner($isOwner)
  {
    $this->isOwner = $isOwner;
  }
  /** @return bool */
  public function getIsOwner()
  {
    return $this->isOwner;
  }
  /** @param LegacyUploadMetadata */
  public function setLegacyUploadMetadata(LegacyUploadMetadata $legacyUploadMetadata)
  {
    $this->legacyUploadMetadata = $legacyUploadMetadata;
  }
  /** @return LegacyUploadMetadata */
  public function getLegacyUploadMetadata()
  {
    return $this->legacyUploadMetadata;
  }
  /** @param string */
  public function setMimetype($mimetype)
  {
    $this->mimetype = $mimetype;
  }
  /** @return string */
  public function getMimetype()
  {
    return $this->mimetype;
  }
  /** @param string */
  public function setOrganizationDisplayName($organizationDisplayName)
  {
    $this->organizationDisplayName = $organizationDisplayName;
  }
  /** @return string */
  public function getOrganizationDisplayName()
  {
    return $this->organizationDisplayName;
  }
  /** @param AuthorizedItemId */
  public function setShortcutAuthorizedItemId(AuthorizedItemId $shortcutAuthorizedItemId)
  {
    $this->shortcutAuthorizedItemId = $shortcutAuthorizedItemId;
  }
  /** @return AuthorizedItemId */
  public function getShortcutAuthorizedItemId()
  {
    return $this->shortcutAuthorizedItemId;
  }
  /** @param bool */
  public function setShouldNotRender($shouldNotRender)
  {
    $this->shouldNotRender = $shouldNotRender;
  }
  /** @return bool */
  public function getShouldNotRender()
  {
    return $this->shouldNotRender;
  }
  /** @param int */
  public function setThumbnailHeight($thumbnailHeight)
  {
    $this->thumbnailHeight = $thumbnailHeight;
  }
  /** @return int */
  public function getThumbnailHeight()
  {
    return $this->thumbnailHeight;
  }
  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
  /** @param int */
  public function setThumbnailWidth($thumbnailWidth)
  {
    $this->thumbnailWidth = $thumbnailWidth;
  }
  /** @return int */
  public function getThumbnailWidth()
  {
    return $this->thumbnailWidth;
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
  /** @param string */
  public function setUrlFragment($urlFragment)
  {
    $this->urlFragment = $urlFragment;
  }
  /** @return string */
  public function getUrlFragment()
  {
    return $this->urlFragment;
  }
  /** @param WrappedResourceKey */
  public function setWrappedResourceKey(WrappedResourceKey $wrappedResourceKey)
  {
    $this->wrappedResourceKey = $wrappedResourceKey;
  }
  /** @return WrappedResourceKey */
  public function getWrappedResourceKey()
  {
    return $this->wrappedResourceKey;
  }
}

class DriveMimeTypeRestrict extends \Google\Model
{
  /** @var string */
  public $type;

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

class DriveTimeSpanRestrict extends \Google\Model
{
  /** @var string */
  public $type;

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

class DynamiteSpacesScoringInfo extends \Google\Model
{
  public $affinityScore;
  public $commonContactCountAffinityScore;
  public $contactsIntersectionCount;
  public $finalScore;
  public $freshnessScore;
  public $joinedSpacesAffinityScore;
  /** @var string */
  public $lastMessagePostedTimestampSecs;
  /** @var string */
  public $lastReadTimestampSecs;
  public $memberMetadataCount;
  public $messageScore;
  /** @var string */
  public $numAucContacts;
  public $smallContactListAffinityScore;
  public $smallUnjoinedSpacesAffinityScore;
  public $spaceAgeInDays;
  /** @var string */
  public $spaceCreationTimestampSecs;
  public $topicalityScore;

  public function setAffinityScore($affinityScore)
  {
    $this->affinityScore = $affinityScore;
  }
  public function getAffinityScore()
  {
    return $this->affinityScore;
  }
  public function setCommonContactCountAffinityScore($commonContactCountAffinityScore)
  {
    $this->commonContactCountAffinityScore = $commonContactCountAffinityScore;
  }
  public function getCommonContactCountAffinityScore()
  {
    return $this->commonContactCountAffinityScore;
  }
  public function setContactsIntersectionCount($contactsIntersectionCount)
  {
    $this->contactsIntersectionCount = $contactsIntersectionCount;
  }
  public function getContactsIntersectionCount()
  {
    return $this->contactsIntersectionCount;
  }
  public function setFinalScore($finalScore)
  {
    $this->finalScore = $finalScore;
  }
  public function getFinalScore()
  {
    return $this->finalScore;
  }
  public function setFreshnessScore($freshnessScore)
  {
    $this->freshnessScore = $freshnessScore;
  }
  public function getFreshnessScore()
  {
    return $this->freshnessScore;
  }
  public function setJoinedSpacesAffinityScore($joinedSpacesAffinityScore)
  {
    $this->joinedSpacesAffinityScore = $joinedSpacesAffinityScore;
  }
  public function getJoinedSpacesAffinityScore()
  {
    return $this->joinedSpacesAffinityScore;
  }
  /** @param string */
  public function setLastMessagePostedTimestampSecs($lastMessagePostedTimestampSecs)
  {
    $this->lastMessagePostedTimestampSecs = $lastMessagePostedTimestampSecs;
  }
  /** @return string */
  public function getLastMessagePostedTimestampSecs()
  {
    return $this->lastMessagePostedTimestampSecs;
  }
  /** @param string */
  public function setLastReadTimestampSecs($lastReadTimestampSecs)
  {
    $this->lastReadTimestampSecs = $lastReadTimestampSecs;
  }
  /** @return string */
  public function getLastReadTimestampSecs()
  {
    return $this->lastReadTimestampSecs;
  }
  public function setMemberMetadataCount($memberMetadataCount)
  {
    $this->memberMetadataCount = $memberMetadataCount;
  }
  public function getMemberMetadataCount()
  {
    return $this->memberMetadataCount;
  }
  public function setMessageScore($messageScore)
  {
    $this->messageScore = $messageScore;
  }
  public function getMessageScore()
  {
    return $this->messageScore;
  }
  /** @param string */
  public function setNumAucContacts($numAucContacts)
  {
    $this->numAucContacts = $numAucContacts;
  }
  /** @return string */
  public function getNumAucContacts()
  {
    return $this->numAucContacts;
  }
  public function setSmallContactListAffinityScore($smallContactListAffinityScore)
  {
    $this->smallContactListAffinityScore = $smallContactListAffinityScore;
  }
  public function getSmallContactListAffinityScore()
  {
    return $this->smallContactListAffinityScore;
  }
  public function setSmallUnjoinedSpacesAffinityScore($smallUnjoinedSpacesAffinityScore)
  {
    $this->smallUnjoinedSpacesAffinityScore = $smallUnjoinedSpacesAffinityScore;
  }
  public function getSmallUnjoinedSpacesAffinityScore()
  {
    return $this->smallUnjoinedSpacesAffinityScore;
  }
  public function setSpaceAgeInDays($spaceAgeInDays)
  {
    $this->spaceAgeInDays = $spaceAgeInDays;
  }
  public function getSpaceAgeInDays()
  {
    return $this->spaceAgeInDays;
  }
  /** @param string */
  public function setSpaceCreationTimestampSecs($spaceCreationTimestampSecs)
  {
    $this->spaceCreationTimestampSecs = $spaceCreationTimestampSecs;
  }
  /** @return string */
  public function getSpaceCreationTimestampSecs()
  {
    return $this->spaceCreationTimestampSecs;
  }
  public function setTopicalityScore($topicalityScore)
  {
    $this->topicalityScore = $topicalityScore;
  }
  public function getTopicalityScore()
  {
    return $this->topicalityScore;
  }
}

class EditMetadata extends \Google\Model
{
}

class EditorClientActionMarkup extends \Google\Model
{
  /** @var RequestFileScopeForActiveDocument */
  public $requestFileScopeForActiveDocument;
  protected $requestFileScopeForActiveDocumentType = RequestFileScopeForActiveDocument::class;
  protected $requestFileScopeForActiveDocumentDataType = '';
  /** @param RequestFileScopeForActiveDocument */
  public function setRequestFileScopeForActiveDocument(RequestFileScopeForActiveDocument $requestFileScopeForActiveDocument)
  {
    $this->requestFileScopeForActiveDocument = $requestFileScopeForActiveDocument;
  }
  /** @return RequestFileScopeForActiveDocument */
  public function getRequestFileScopeForActiveDocument()
  {
    return $this->requestFileScopeForActiveDocument;
  }
}

class EmailAddress extends \Google\Model
{
  /** @var string */
  public $customType;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $emailUrl;
  /** @var bool */
  public $primary;
  /** @var string */
  public $type;

  /** @param string */
  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }
  /** @return string */
  public function getCustomType()
  {
    return $this->customType;
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
  public function setEmailUrl($emailUrl)
  {
    $this->emailUrl = $emailUrl;
  }
  /** @return string */
  public function getEmailUrl()
  {
    return $this->emailUrl;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
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

class EmailOwnerProto extends \Google\Model
{
  /** @var string */
  public $email;

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

class EmbedClientItem extends \Google\Collection
{
  /** @var string */
  public $canonicalId;
  /** @var DeepLinkData */
  public $deepLinkData;
  /** @var string */
  public $id;
  /** @var Provenance */
  public $provenance;
  /** @var string */
  public $renderId;
  /** @var string */
  public $signature;
  /** @var TransientData */
  public $transientData;
  /** @var string[] */
  public $type;
  protected $collection_key = 'type';
  protected $deepLinkDataType = DeepLinkData::class;
  protected $deepLinkDataDataType = '';
  protected $provenanceType = Provenance::class;
  protected $provenanceDataType = '';
  protected $transientDataType = TransientData::class;
  protected $transientDataDataType = '';
  /** @param string */
  public function setCanonicalId($canonicalId)
  {
    $this->canonicalId = $canonicalId;
  }
  /** @return string */
  public function getCanonicalId()
  {
    return $this->canonicalId;
  }
  /** @param DeepLinkData */
  public function setDeepLinkData(DeepLinkData $deepLinkData)
  {
    $this->deepLinkData = $deepLinkData;
  }
  /** @return DeepLinkData */
  public function getDeepLinkData()
  {
    return $this->deepLinkData;
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
  /** @param Provenance */
  public function setProvenance(Provenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return Provenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param string */
  public function setRenderId($renderId)
  {
    $this->renderId = $renderId;
  }
  /** @return string */
  public function getRenderId()
  {
    return $this->renderId;
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
  /** @param TransientData */
  public function setTransientData(TransientData $transientData)
  {
    $this->transientData = $transientData;
  }
  /** @return TransientData */
  public function getTransientData()
  {
    return $this->transientData;
  }
  /** @param string[] */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string[] */
  public function getType()
  {
    return $this->type;
  }
}

class EnumOperatorOptions extends \Google\Model
{
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class EnumPropertyOptions extends \Google\Collection
{
  /** @var EnumOperatorOptions */
  public $operatorOptions;
  /** @var string */
  public $orderedRanking;
  /** @var EnumValuePair[] */
  public $possibleValues;
  protected $collection_key = 'possibleValues';
  protected $operatorOptionsType = EnumOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  protected $possibleValuesType = EnumValuePair::class;
  protected $possibleValuesDataType = 'array';
  /** @param EnumOperatorOptions */
  public function setOperatorOptions(EnumOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return EnumOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
  /** @param string */
  public function setOrderedRanking($orderedRanking)
  {
    $this->orderedRanking = $orderedRanking;
  }
  /** @return string */
  public function getOrderedRanking()
  {
    return $this->orderedRanking;
  }
  /** @param EnumValuePair[] */
  public function setPossibleValues($possibleValues)
  {
    $this->possibleValues = $possibleValues;
  }
  /** @return EnumValuePair[] */
  public function getPossibleValues()
  {
    return $this->possibleValues;
  }
}

class EnumValuePair extends \Google\Model
{
  /** @var int */
  public $integerValue;
  /** @var string */
  public $stringValue;

  /** @param int */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return int */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class EnumValues extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ErrorInfo extends \Google\Collection
{
  /** @var ErrorMessage[] */
  public $errorMessages;
  protected $collection_key = 'errorMessages';
  protected $errorMessagesType = ErrorMessage::class;
  protected $errorMessagesDataType = 'array';
  /** @param ErrorMessage[] */
  public function setErrorMessages($errorMessages)
  {
    $this->errorMessages = $errorMessages;
  }
  /** @return ErrorMessage[] */
  public function getErrorMessages()
  {
    return $this->errorMessages;
  }
}

class ErrorMessage extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class EventAnnotation extends \Google\Model
{
  /** @var int */
  public $type;
  /** @var string */
  public $value;

  /** @param int */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return int */
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

class EventProto extends \Google\Model
{
  /** @var string */
  public $eventId;
  /** @var int */
  public $memberType;

  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param int */
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  /** @return int */
  public function getMemberType()
  {
    return $this->memberType;
  }
}

class FacetBucket extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var Filter */
  public $filter;
  /** @var int */
  public $percentage;
  /** @var Value */
  public $value;
  protected $filterType = Filter::class;
  protected $filterDataType = '';
  protected $valueType = Value::class;
  protected $valueDataType = '';
  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param Filter */
  public function setFilter(Filter $filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
  /** @param Value */
  public function setValue(Value $value)
  {
    $this->value = $value;
  }
  /** @return Value */
  public function getValue()
  {
    return $this->value;
  }
}

class FacetOptions extends \Google\Model
{
  /** @var IntegerFacetingOptions */
  public $integerFacetingOptions;
  /** @var int */
  public $numFacetBuckets;
  /** @var string */
  public $objectType;
  /** @var string */
  public $operatorName;
  /** @var string */
  public $sourceName;
  protected $integerFacetingOptionsType = IntegerFacetingOptions::class;
  protected $integerFacetingOptionsDataType = '';
  /** @param IntegerFacetingOptions */
  public function setIntegerFacetingOptions(IntegerFacetingOptions $integerFacetingOptions)
  {
    $this->integerFacetingOptions = $integerFacetingOptions;
  }
  /** @return IntegerFacetingOptions */
  public function getIntegerFacetingOptions()
  {
    return $this->integerFacetingOptions;
  }
  /** @param int */
  public function setNumFacetBuckets($numFacetBuckets)
  {
    $this->numFacetBuckets = $numFacetBuckets;
  }
  /** @return int */
  public function getNumFacetBuckets()
  {
    return $this->numFacetBuckets;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
  /** @param string */
  public function setSourceName($sourceName)
  {
    $this->sourceName = $sourceName;
  }
  /** @return string */
  public function getSourceName()
  {
    return $this->sourceName;
  }
}

class FacetResult extends \Google\Collection
{
  /** @var FacetBucket[] */
  public $buckets;
  /** @var string */
  public $objectType;
  /** @var string */
  public $operatorName;
  /** @var string */
  public $sourceName;
  protected $collection_key = 'buckets';
  protected $bucketsType = FacetBucket::class;
  protected $bucketsDataType = 'array';
  /** @param FacetBucket[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return FacetBucket[] */
  public function getBuckets()
  {
    return $this->buckets;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
  /** @param string */
  public function setSourceName($sourceName)
  {
    $this->sourceName = $sourceName;
  }
  /** @return string */
  public function getSourceName()
  {
    return $this->sourceName;
  }
}

class FieldViolation extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $field;

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
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
}

class Filter extends \Google\Model
{
  /** @var CompositeFilter */
  public $compositeFilter;
  /** @var ValueFilter */
  public $valueFilter;
  protected $compositeFilterType = CompositeFilter::class;
  protected $compositeFilterDataType = '';
  protected $valueFilterType = ValueFilter::class;
  protected $valueFilterDataType = '';
  /** @param CompositeFilter */
  public function setCompositeFilter(CompositeFilter $compositeFilter)
  {
    $this->compositeFilter = $compositeFilter;
  }
  /** @return CompositeFilter */
  public function getCompositeFilter()
  {
    return $this->compositeFilter;
  }
  /** @param ValueFilter */
  public function setValueFilter(ValueFilter $valueFilter)
  {
    $this->valueFilter = $valueFilter;
  }
  /** @return ValueFilter */
  public function getValueFilter()
  {
    return $this->valueFilter;
  }
}

class FilterCreated extends \Google\Model
{
}

class FilterDeleted extends \Google\Model
{
}

class FilterOptions extends \Google\Model
{
  /** @var Filter */
  public $filter;
  /** @var string */
  public $objectType;
  protected $filterType = Filter::class;
  protected $filterDataType = '';
  /** @param Filter */
  public function setFilter(Filter $filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
}

class FilterUpdate extends \Google\Model
{
  /** @var FilterCreated */
  public $filterCreated;
  /** @var FilterDeleted */
  public $filterDeleted;
  /** @var string */
  public $filterId;
  protected $filterCreatedType = FilterCreated::class;
  protected $filterCreatedDataType = '';
  protected $filterDeletedType = FilterDeleted::class;
  protected $filterDeletedDataType = '';
  /** @param FilterCreated */
  public function setFilterCreated(FilterCreated $filterCreated)
  {
    $this->filterCreated = $filterCreated;
  }
  /** @return FilterCreated */
  public function getFilterCreated()
  {
    return $this->filterCreated;
  }
  /** @param FilterDeleted */
  public function setFilterDeleted(FilterDeleted $filterDeleted)
  {
    $this->filterDeleted = $filterDeleted;
  }
  /** @return FilterDeleted */
  public function getFilterDeleted()
  {
    return $this->filterDeleted;
  }
  /** @param string */
  public function setFilterId($filterId)
  {
    $this->filterId = $filterId;
  }
  /** @return string */
  public function getFilterId()
  {
    return $this->filterId;
  }
}

class FixedFooter extends \Google\Collection
{
  /** @var Button[] */
  public $buttons;
  /** @var TextButton */
  public $primaryButton;
  /** @var TextButton */
  public $secondaryButton;
  protected $collection_key = 'buttons';
  protected $buttonsType = Button::class;
  protected $buttonsDataType = 'array';
  protected $primaryButtonType = TextButton::class;
  protected $primaryButtonDataType = '';
  protected $secondaryButtonType = TextButton::class;
  protected $secondaryButtonDataType = '';
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
  /** @param TextButton */
  public function setPrimaryButton(TextButton $primaryButton)
  {
    $this->primaryButton = $primaryButton;
  }
  /** @return TextButton */
  public function getPrimaryButton()
  {
    return $this->primaryButton;
  }
  /** @param TextButton */
  public function setSecondaryButton(TextButton $secondaryButton)
  {
    $this->secondaryButton = $secondaryButton;
  }
  /** @return TextButton */
  public function getSecondaryButton()
  {
    return $this->secondaryButton;
  }
}

class Folder extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var ImapsyncFolderAttributeFolderMessage[] */
  public $message;
  protected $collection_key = 'message';
  protected $messageType = ImapsyncFolderAttributeFolderMessage::class;
  protected $messageDataType = 'array';
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
  /** @param ImapsyncFolderAttributeFolderMessage[] */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return ImapsyncFolderAttributeFolderMessage[] */
  public function getMessage()
  {
    return $this->message;
  }
}

class FolderAttribute extends \Google\Collection
{
  /** @var Folder[] */
  public $folder;
  protected $collection_key = 'folder';
  protected $folderType = Folder::class;
  protected $folderDataType = 'array';
  /** @param Folder[] */
  public function setFolder($folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder[] */
  public function getFolder()
  {
    return $this->folder;
  }
}

class FormAction extends \Google\Collection
{
  /** @var string */
  public $actionMethodName;
  /** @var string */
  public $loadIndicator;
  /** @var ActionParameter[] */
  public $parameters;
  /** @var bool */
  public $persistValues;
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

class FormatMetadata extends \Google\Model
{
  /** @var string */
  public $fontColor;
  /** @var string */
  public $formatType;

  /** @param string */
  public function setFontColor($fontColor)
  {
    $this->fontColor = $fontColor;
  }
  /** @return string */
  public function getFontColor()
  {
    return $this->fontColor;
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
}

class Formatting extends \Google\Model
{
  /** @var bool */
  public $bold;
  /** @var bool */
  public $highlight;
  /** @var bool */
  public $italics;
  /** @var bool */
  public $strikethrough;
  /** @var string */
  public $style;
  /** @var bool */
  public $underline;

  /** @param bool */
  public function setBold($bold)
  {
    $this->bold = $bold;
  }
  /** @return bool */
  public function getBold()
  {
    return $this->bold;
  }
  /** @param bool */
  public function setHighlight($highlight)
  {
    $this->highlight = $highlight;
  }
  /** @return bool */
  public function getHighlight()
  {
    return $this->highlight;
  }
  /** @param bool */
  public function setItalics($italics)
  {
    $this->italics = $italics;
  }
  /** @return bool */
  public function getItalics()
  {
    return $this->italics;
  }
  /** @param bool */
  public function setStrikethrough($strikethrough)
  {
    $this->strikethrough = $strikethrough;
  }
  /** @return bool */
  public function getStrikethrough()
  {
    return $this->strikethrough;
  }
  /** @param string */
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /** @return string */
  public function getStyle()
  {
    return $this->style;
  }
  /** @param bool */
  public function setUnderline($underline)
  {
    $this->underline = $underline;
  }
  /** @return bool */
  public function getUnderline()
  {
    return $this->underline;
  }
}

class FreshnessOptions extends \Google\Model
{
  /** @var string */
  public $freshnessDuration;
  /** @var string */
  public $freshnessProperty;

  /** @param string */
  public function setFreshnessDuration($freshnessDuration)
  {
    $this->freshnessDuration = $freshnessDuration;
  }
  /** @return string */
  public function getFreshnessDuration()
  {
    return $this->freshnessDuration;
  }
  /** @param string */
  public function setFreshnessProperty($freshnessProperty)
  {
    $this->freshnessProperty = $freshnessProperty;
  }
  /** @return string */
  public function getFreshnessProperty()
  {
    return $this->freshnessProperty;
  }
}

class FuseboxItem extends \Google\Model
{
  /** @var Attributes */
  public $attributes;
  /** @var string */
  public $creationTimeMicroseconds;
  /** @var History */
  public $history;
  /** @var MultiKey */
  public $itemKey;
  /** @var Labels */
  public $labels;
  /** @var string */
  public $lastModificationTimeUs;
  /** @var References */
  public $lockerReferences;
  /** @var MatchInfo */
  public $matchInfo;
  /** @var ItemParts */
  public $parts;
  /** @var string */
  public $readTs;
  /** @var References */
  public $references;
  /** @var string */
  public $snippet;
  /** @var MultiKey */
  public $threadKey;
  /** @var string */
  public $threadLocator;
  /** @var Triggers */
  public $triggers;
  /** @var string */
  public $version;
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  protected $historyType = History::class;
  protected $historyDataType = '';
  protected $itemKeyType = MultiKey::class;
  protected $itemKeyDataType = '';
  protected $labelsType = Labels::class;
  protected $labelsDataType = '';
  protected $lockerReferencesType = References::class;
  protected $lockerReferencesDataType = '';
  protected $matchInfoType = MatchInfo::class;
  protected $matchInfoDataType = '';
  protected $partsType = ItemParts::class;
  protected $partsDataType = '';
  protected $referencesType = References::class;
  protected $referencesDataType = '';
  protected $threadKeyType = MultiKey::class;
  protected $threadKeyDataType = '';
  protected $triggersType = Triggers::class;
  protected $triggersDataType = '';
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
  public function setCreationTimeMicroseconds($creationTimeMicroseconds)
  {
    $this->creationTimeMicroseconds = $creationTimeMicroseconds;
  }
  /** @return string */
  public function getCreationTimeMicroseconds()
  {
    return $this->creationTimeMicroseconds;
  }
  /** @param History */
  public function setHistory(History $history)
  {
    $this->history = $history;
  }
  /** @return History */
  public function getHistory()
  {
    return $this->history;
  }
  /** @param MultiKey */
  public function setItemKey(MultiKey $itemKey)
  {
    $this->itemKey = $itemKey;
  }
  /** @return MultiKey */
  public function getItemKey()
  {
    return $this->itemKey;
  }
  /** @param Labels */
  public function setLabels(Labels $labels)
  {
    $this->labels = $labels;
  }
  /** @return Labels */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLastModificationTimeUs($lastModificationTimeUs)
  {
    $this->lastModificationTimeUs = $lastModificationTimeUs;
  }
  /** @return string */
  public function getLastModificationTimeUs()
  {
    return $this->lastModificationTimeUs;
  }
  /** @param References */
  public function setLockerReferences(References $lockerReferences)
  {
    $this->lockerReferences = $lockerReferences;
  }
  /** @return References */
  public function getLockerReferences()
  {
    return $this->lockerReferences;
  }
  /** @param MatchInfo */
  public function setMatchInfo(MatchInfo $matchInfo)
  {
    $this->matchInfo = $matchInfo;
  }
  /** @return MatchInfo */
  public function getMatchInfo()
  {
    return $this->matchInfo;
  }
  /** @param ItemParts */
  public function setParts(ItemParts $parts)
  {
    $this->parts = $parts;
  }
  /** @return ItemParts */
  public function getParts()
  {
    return $this->parts;
  }
  /** @param string */
  public function setReadTs($readTs)
  {
    $this->readTs = $readTs;
  }
  /** @return string */
  public function getReadTs()
  {
    return $this->readTs;
  }
  /** @param References */
  public function setReferences(References $references)
  {
    $this->references = $references;
  }
  /** @return References */
  public function getReferences()
  {
    return $this->references;
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
  /** @param MultiKey */
  public function setThreadKey(MultiKey $threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return MultiKey */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
  /** @param string */
  public function setThreadLocator($threadLocator)
  {
    $this->threadLocator = $threadLocator;
  }
  /** @return string */
  public function getThreadLocator()
  {
    return $this->threadLocator;
  }
  /** @param Triggers */
  public function setTriggers(Triggers $triggers)
  {
    $this->triggers = $triggers;
  }
  /** @return Triggers */
  public function getTriggers()
  {
    return $this->triggers;
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
}

class FuseboxItemThreadMatchInfo extends \Google\Collection
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $lastMatchingItemId;
  /** @var MultiKey */
  public $lastMatchingItemKey;
  /** @var MultiKey[] */
  public $matchingItemKey;
  /** @var Rank */
  public $rank;
  protected $collection_key = 'matchingItemKey';
  protected $lastMatchingItemKeyType = MultiKey::class;
  protected $lastMatchingItemKeyDataType = '';
  protected $matchingItemKeyType = MultiKey::class;
  protected $matchingItemKeyDataType = 'array';
  protected $rankType = Rank::class;
  protected $rankDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string */
  public function setLastMatchingItemId($lastMatchingItemId)
  {
    $this->lastMatchingItemId = $lastMatchingItemId;
  }
  /** @return string */
  public function getLastMatchingItemId()
  {
    return $this->lastMatchingItemId;
  }
  /** @param MultiKey */
  public function setLastMatchingItemKey(MultiKey $lastMatchingItemKey)
  {
    $this->lastMatchingItemKey = $lastMatchingItemKey;
  }
  /** @return MultiKey */
  public function getLastMatchingItemKey()
  {
    return $this->lastMatchingItemKey;
  }
  /** @param MultiKey[] */
  public function setMatchingItemKey($matchingItemKey)
  {
    $this->matchingItemKey = $matchingItemKey;
  }
  /** @return MultiKey[] */
  public function getMatchingItemKey()
  {
    return $this->matchingItemKey;
  }
  /** @param Rank */
  public function setRank(Rank $rank)
  {
    $this->rank = $rank;
  }
  /** @return Rank */
  public function getRank()
  {
    return $this->rank;
  }
}

class FuseboxPrefUpdatePreState extends \Google\Model
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

class GSuitePrincipal extends \Google\Model
{
  /** @var bool */
  public $gsuiteDomain;
  /** @var string */
  public $gsuiteGroupEmail;
  /** @var string */
  public $gsuiteUserEmail;

  /** @param bool */
  public function setGsuiteDomain($gsuiteDomain)
  {
    $this->gsuiteDomain = $gsuiteDomain;
  }
  /** @return bool */
  public function getGsuiteDomain()
  {
    return $this->gsuiteDomain;
  }
  /** @param string */
  public function setGsuiteGroupEmail($gsuiteGroupEmail)
  {
    $this->gsuiteGroupEmail = $gsuiteGroupEmail;
  }
  /** @return string */
  public function getGsuiteGroupEmail()
  {
    return $this->gsuiteGroupEmail;
  }
  /** @param string */
  public function setGsuiteUserEmail($gsuiteUserEmail)
  {
    $this->gsuiteUserEmail = $gsuiteUserEmail;
  }
  /** @return string */
  public function getGsuiteUserEmail()
  {
    return $this->gsuiteUserEmail;
  }
}

class GaiaGroupProto extends \Google\Model
{
  /** @var string */
  public $groupId;

  /** @param string */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return string */
  public function getGroupId()
  {
    return $this->groupId;
  }
}

class GaiaUserProto extends \Google\Model
{
  /** @var string */
  public $userId;

  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class GatewayAccess extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GatewaySipAccess extends \Google\Model
{
  /** @var string */
  public $sipAccessCode;
  /** @var string */
  public $uri;

  /** @param string */
  public function setSipAccessCode($sipAccessCode)
  {
    $this->sipAccessCode = $sipAccessCode;
  }
  /** @return string */
  public function getSipAccessCode()
  {
    return $this->sipAccessCode;
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

class GetCustomerIndexStatsResponse extends \Google\Collection
{
  /** @var string */
  public $averageIndexedItemCount;
  /** @var CustomerIndexStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = CustomerIndexStats::class;
  protected $statsDataType = 'array';
  /** @param string */
  public function setAverageIndexedItemCount($averageIndexedItemCount)
  {
    $this->averageIndexedItemCount = $averageIndexedItemCount;
  }
  /** @return string */
  public function getAverageIndexedItemCount()
  {
    return $this->averageIndexedItemCount;
  }
  /** @param CustomerIndexStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return CustomerIndexStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetCustomerQueryStatsResponse extends \Google\Collection
{
  /** @var CustomerQueryStats[] */
  public $stats;
  /** @var string */
  public $totalQueryCount;
  protected $collection_key = 'stats';
  protected $statsType = CustomerQueryStats::class;
  protected $statsDataType = 'array';
  /** @param CustomerQueryStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return CustomerQueryStats[] */
  public function getStats()
  {
    return $this->stats;
  }
  /** @param string */
  public function setTotalQueryCount($totalQueryCount)
  {
    $this->totalQueryCount = $totalQueryCount;
  }
  /** @return string */
  public function getTotalQueryCount()
  {
    return $this->totalQueryCount;
  }
}

class GetCustomerSearchApplicationStatsResponse extends \Google\Collection
{
  /** @var string */
  public $averageSearchApplicationCount;
  /** @var CustomerSearchApplicationStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = CustomerSearchApplicationStats::class;
  protected $statsDataType = 'array';
  /** @param string */
  public function setAverageSearchApplicationCount($averageSearchApplicationCount)
  {
    $this->averageSearchApplicationCount = $averageSearchApplicationCount;
  }
  /** @return string */
  public function getAverageSearchApplicationCount()
  {
    return $this->averageSearchApplicationCount;
  }
  /** @param CustomerSearchApplicationStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return CustomerSearchApplicationStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetCustomerSessionStatsResponse extends \Google\Collection
{
  /** @var CustomerSessionStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = CustomerSessionStats::class;
  protected $statsDataType = 'array';
  /** @param CustomerSessionStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return CustomerSessionStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetCustomerUserStatsResponse extends \Google\Collection
{
  /** @var CustomerUserStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = CustomerUserStats::class;
  protected $statsDataType = 'array';
  /** @param CustomerUserStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return CustomerUserStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetDataSourceIndexStatsResponse extends \Google\Collection
{
  /** @var string */
  public $averageIndexedItemCount;
  /** @var DataSourceIndexStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = DataSourceIndexStats::class;
  protected $statsDataType = 'array';
  /** @param string */
  public function setAverageIndexedItemCount($averageIndexedItemCount)
  {
    $this->averageIndexedItemCount = $averageIndexedItemCount;
  }
  /** @return string */
  public function getAverageIndexedItemCount()
  {
    return $this->averageIndexedItemCount;
  }
  /** @param DataSourceIndexStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return DataSourceIndexStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetSearchApplicationQueryStatsResponse extends \Google\Collection
{
  /** @var SearchApplicationQueryStats[] */
  public $stats;
  /** @var string */
  public $totalQueryCount;
  protected $collection_key = 'stats';
  protected $statsType = SearchApplicationQueryStats::class;
  protected $statsDataType = 'array';
  /** @param SearchApplicationQueryStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return SearchApplicationQueryStats[] */
  public function getStats()
  {
    return $this->stats;
  }
  /** @param string */
  public function setTotalQueryCount($totalQueryCount)
  {
    $this->totalQueryCount = $totalQueryCount;
  }
  /** @return string */
  public function getTotalQueryCount()
  {
    return $this->totalQueryCount;
  }
}

class GetSearchApplicationSessionStatsResponse extends \Google\Collection
{
  /** @var SearchApplicationSessionStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = SearchApplicationSessionStats::class;
  protected $statsDataType = 'array';
  /** @param SearchApplicationSessionStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return SearchApplicationSessionStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GetSearchApplicationUserStatsResponse extends \Google\Collection
{
  /** @var SearchApplicationUserStats[] */
  public $stats;
  protected $collection_key = 'stats';
  protected $statsType = SearchApplicationUserStats::class;
  protected $statsDataType = 'array';
  /** @param SearchApplicationUserStats[] */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /** @return SearchApplicationUserStats[] */
  public function getStats()
  {
    return $this->stats;
  }
}

class GmailClientActionMarkup extends \Google\Model
{
  /** @var AddonComposeUiActionMarkup */
  public $addonComposeUiActionMarkup;
  /** @var OpenCreatedDraftActionMarkup */
  public $openCreatedDraftActionMarkup;
  /** @var TaskActionMarkup */
  public $taskAction;
  /** @var UpdateDraftActionMarkup */
  public $updateDraftActionMarkup;
  protected $addonComposeUiActionMarkupType = AddonComposeUiActionMarkup::class;
  protected $addonComposeUiActionMarkupDataType = '';
  protected $openCreatedDraftActionMarkupType = OpenCreatedDraftActionMarkup::class;
  protected $openCreatedDraftActionMarkupDataType = '';
  protected $taskActionType = TaskActionMarkup::class;
  protected $taskActionDataType = '';
  protected $updateDraftActionMarkupType = UpdateDraftActionMarkup::class;
  protected $updateDraftActionMarkupDataType = '';
  /** @param AddonComposeUiActionMarkup */
  public function setAddonComposeUiActionMarkup(AddonComposeUiActionMarkup $addonComposeUiActionMarkup)
  {
    $this->addonComposeUiActionMarkup = $addonComposeUiActionMarkup;
  }
  /** @return AddonComposeUiActionMarkup */
  public function getAddonComposeUiActionMarkup()
  {
    return $this->addonComposeUiActionMarkup;
  }
  /** @param OpenCreatedDraftActionMarkup */
  public function setOpenCreatedDraftActionMarkup(OpenCreatedDraftActionMarkup $openCreatedDraftActionMarkup)
  {
    $this->openCreatedDraftActionMarkup = $openCreatedDraftActionMarkup;
  }
  /** @return OpenCreatedDraftActionMarkup */
  public function getOpenCreatedDraftActionMarkup()
  {
    return $this->openCreatedDraftActionMarkup;
  }
  /** @param TaskActionMarkup */
  public function setTaskAction(TaskActionMarkup $taskAction)
  {
    $this->taskAction = $taskAction;
  }
  /** @return TaskActionMarkup */
  public function getTaskAction()
  {
    return $this->taskAction;
  }
  /** @param UpdateDraftActionMarkup */
  public function setUpdateDraftActionMarkup(UpdateDraftActionMarkup $updateDraftActionMarkup)
  {
    $this->updateDraftActionMarkup = $updateDraftActionMarkup;
  }
  /** @return UpdateDraftActionMarkup */
  public function getUpdateDraftActionMarkup()
  {
    return $this->updateDraftActionMarkup;
  }
}

class GoogleChatV1ContextualAddOnMarkup extends \Google\Collection
{
  /** @var GoogleChatV1ContextualAddOnMarkupCard[] */
  public $cards;
  protected $collection_key = 'cards';
  protected $cardsType = GoogleChatV1ContextualAddOnMarkupCard::class;
  protected $cardsDataType = 'array';
  /** @param GoogleChatV1ContextualAddOnMarkupCard[] */
  public function setCards($cards)
  {
    $this->cards = $cards;
  }
  /** @return GoogleChatV1ContextualAddOnMarkupCard[] */
  public function getCards()
  {
    return $this->cards;
  }
}

class GoogleChatV1ContextualAddOnMarkupCard extends \Google\Collection
{
  /** @var GoogleChatV1ContextualAddOnMarkupCardCardAction[] */
  public $cardActions;
  /** @var GoogleChatV1ContextualAddOnMarkupCardCardHeader */
  public $header;
  /** @var string */
  public $name;
  /** @var GoogleChatV1ContextualAddOnMarkupCardSection[] */
  public $sections;
  protected $collection_key = 'sections';
  protected $cardActionsType = GoogleChatV1ContextualAddOnMarkupCardCardAction::class;
  protected $cardActionsDataType = 'array';
  protected $headerType = GoogleChatV1ContextualAddOnMarkupCardCardHeader::class;
  protected $headerDataType = '';
  protected $sectionsType = GoogleChatV1ContextualAddOnMarkupCardSection::class;
  protected $sectionsDataType = 'array';
  /** @param GoogleChatV1ContextualAddOnMarkupCardCardAction[] */
  public function setCardActions($cardActions)
  {
    $this->cardActions = $cardActions;
  }
  /** @return GoogleChatV1ContextualAddOnMarkupCardCardAction[] */
  public function getCardActions()
  {
    return $this->cardActions;
  }
  /** @param GoogleChatV1ContextualAddOnMarkupCardCardHeader */
  public function setHeader(GoogleChatV1ContextualAddOnMarkupCardCardHeader $header)
  {
    $this->header = $header;
  }
  /** @return GoogleChatV1ContextualAddOnMarkupCardCardHeader */
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
  /** @param GoogleChatV1ContextualAddOnMarkupCardSection[] */
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  /** @return GoogleChatV1ContextualAddOnMarkupCardSection[] */
  public function getSections()
  {
    return $this->sections;
  }
}

class GoogleChatV1ContextualAddOnMarkupCardCardAction extends \Google\Model
{
  /** @var string */
  public $actionLabel;
  /** @var GoogleChatV1WidgetMarkupOnClick */
  public $onClick;
  protected $onClickType = GoogleChatV1WidgetMarkupOnClick::class;
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
  /** @param GoogleChatV1WidgetMarkupOnClick */
  public function setOnClick(GoogleChatV1WidgetMarkupOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleChatV1WidgetMarkupOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class GoogleChatV1ContextualAddOnMarkupCardCardHeader extends \Google\Model
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

class GoogleChatV1ContextualAddOnMarkupCardSection extends \Google\Collection
{
  /** @var string */
  public $header;
  /** @var GoogleChatV1WidgetMarkup[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = GoogleChatV1WidgetMarkup::class;
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
  /** @param GoogleChatV1WidgetMarkup[] */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /** @return GoogleChatV1WidgetMarkup[] */
  public function getWidgets()
  {
    return $this->widgets;
  }
}

class GoogleChatV1WidgetMarkup extends \Google\Collection
{
  /** @var GoogleChatV1WidgetMarkupButton[] */
  public $buttons;
  /** @var GoogleChatV1WidgetMarkupImage */
  public $image;
  /** @var GoogleChatV1WidgetMarkupKeyValue */
  public $keyValue;
  /** @var GoogleChatV1WidgetMarkupTextParagraph */
  public $textParagraph;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleChatV1WidgetMarkupButton::class;
  protected $buttonsDataType = 'array';
  protected $imageType = GoogleChatV1WidgetMarkupImage::class;
  protected $imageDataType = '';
  protected $keyValueType = GoogleChatV1WidgetMarkupKeyValue::class;
  protected $keyValueDataType = '';
  protected $textParagraphType = GoogleChatV1WidgetMarkupTextParagraph::class;
  protected $textParagraphDataType = '';
  /** @param GoogleChatV1WidgetMarkupButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleChatV1WidgetMarkupButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param GoogleChatV1WidgetMarkupImage */
  public function setImage(GoogleChatV1WidgetMarkupImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleChatV1WidgetMarkupImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleChatV1WidgetMarkupKeyValue */
  public function setKeyValue(GoogleChatV1WidgetMarkupKeyValue $keyValue)
  {
    $this->keyValue = $keyValue;
  }
  /** @return GoogleChatV1WidgetMarkupKeyValue */
  public function getKeyValue()
  {
    return $this->keyValue;
  }
  /** @param GoogleChatV1WidgetMarkupTextParagraph */
  public function setTextParagraph(GoogleChatV1WidgetMarkupTextParagraph $textParagraph)
  {
    $this->textParagraph = $textParagraph;
  }
  /** @return GoogleChatV1WidgetMarkupTextParagraph */
  public function getTextParagraph()
  {
    return $this->textParagraph;
  }
}

class GoogleChatV1WidgetMarkupButton extends \Google\Model
{
  /** @var GoogleChatV1WidgetMarkupImageButton */
  public $imageButton;
  /** @var GoogleChatV1WidgetMarkupTextButton */
  public $textButton;
  protected $imageButtonType = GoogleChatV1WidgetMarkupImageButton::class;
  protected $imageButtonDataType = '';
  protected $textButtonType = GoogleChatV1WidgetMarkupTextButton::class;
  protected $textButtonDataType = '';
  /** @param GoogleChatV1WidgetMarkupImageButton */
  public function setImageButton(GoogleChatV1WidgetMarkupImageButton $imageButton)
  {
    $this->imageButton = $imageButton;
  }
  /** @return GoogleChatV1WidgetMarkupImageButton */
  public function getImageButton()
  {
    return $this->imageButton;
  }
  /** @param GoogleChatV1WidgetMarkupTextButton */
  public function setTextButton(GoogleChatV1WidgetMarkupTextButton $textButton)
  {
    $this->textButton = $textButton;
  }
  /** @return GoogleChatV1WidgetMarkupTextButton */
  public function getTextButton()
  {
    return $this->textButton;
  }
}

class GoogleChatV1WidgetMarkupFormAction extends \Google\Collection
{
  /** @var string */
  public $actionMethodName;
  /** @var GoogleChatV1WidgetMarkupFormActionActionParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleChatV1WidgetMarkupFormActionActionParameter::class;
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
  /** @param GoogleChatV1WidgetMarkupFormActionActionParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleChatV1WidgetMarkupFormActionActionParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleChatV1WidgetMarkupFormActionActionParameter extends \Google\Model
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

class GoogleChatV1WidgetMarkupImage extends \Google\Model
{
  public $aspectRatio;
  /** @var string */
  public $imageUrl;
  /** @var GoogleChatV1WidgetMarkupOnClick */
  public $onClick;
  protected $onClickType = GoogleChatV1WidgetMarkupOnClick::class;
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
  /** @param GoogleChatV1WidgetMarkupOnClick */
  public function setOnClick(GoogleChatV1WidgetMarkupOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleChatV1WidgetMarkupOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class GoogleChatV1WidgetMarkupImageButton extends \Google\Model
{
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $name;
  /** @var GoogleChatV1WidgetMarkupOnClick */
  public $onClick;
  protected $onClickType = GoogleChatV1WidgetMarkupOnClick::class;
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
  /** @param GoogleChatV1WidgetMarkupOnClick */
  public function setOnClick(GoogleChatV1WidgetMarkupOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleChatV1WidgetMarkupOnClick */
  public function getOnClick()
  {
    return $this->onClick;
  }
}

class GoogleChatV1WidgetMarkupKeyValue extends \Google\Model
{
  /** @var string */
  public $bottomLabel;
  /** @var GoogleChatV1WidgetMarkupButton */
  public $button;
  /** @var string */
  public $content;
  /** @var bool */
  public $contentMultiline;
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var GoogleChatV1WidgetMarkupOnClick */
  public $onClick;
  /** @var string */
  public $topLabel;
  protected $buttonType = GoogleChatV1WidgetMarkupButton::class;
  protected $buttonDataType = '';
  protected $onClickType = GoogleChatV1WidgetMarkupOnClick::class;
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
  /** @param GoogleChatV1WidgetMarkupButton */
  public function setButton(GoogleChatV1WidgetMarkupButton $button)
  {
    $this->button = $button;
  }
  /** @return GoogleChatV1WidgetMarkupButton */
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
  /** @param GoogleChatV1WidgetMarkupOnClick */
  public function setOnClick(GoogleChatV1WidgetMarkupOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleChatV1WidgetMarkupOnClick */
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

class GoogleChatV1WidgetMarkupOnClick extends \Google\Model
{
  /** @var GoogleChatV1WidgetMarkupFormAction */
  public $action;
  /** @var GoogleChatV1WidgetMarkupOpenLink */
  public $openLink;
  protected $actionType = GoogleChatV1WidgetMarkupFormAction::class;
  protected $actionDataType = '';
  protected $openLinkType = GoogleChatV1WidgetMarkupOpenLink::class;
  protected $openLinkDataType = '';
  /** @param GoogleChatV1WidgetMarkupFormAction */
  public function setAction(GoogleChatV1WidgetMarkupFormAction $action)
  {
    $this->action = $action;
  }
  /** @return GoogleChatV1WidgetMarkupFormAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param GoogleChatV1WidgetMarkupOpenLink */
  public function setOpenLink(GoogleChatV1WidgetMarkupOpenLink $openLink)
  {
    $this->openLink = $openLink;
  }
  /** @return GoogleChatV1WidgetMarkupOpenLink */
  public function getOpenLink()
  {
    return $this->openLink;
  }
}

class GoogleChatV1WidgetMarkupOpenLink extends \Google\Model
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

class GoogleChatV1WidgetMarkupTextButton extends \Google\Model
{
  /** @var GoogleChatV1WidgetMarkupOnClick */
  public $onClick;
  /** @var string */
  public $text;
  protected $onClickType = GoogleChatV1WidgetMarkupOnClick::class;
  protected $onClickDataType = '';
  /** @param GoogleChatV1WidgetMarkupOnClick */
  public function setOnClick(GoogleChatV1WidgetMarkupOnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /** @return GoogleChatV1WidgetMarkupOnClick */
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

class GoogleChatV1WidgetMarkupTextParagraph extends \Google\Model
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

class GoogleDocsMetadata extends \Google\Model
{
  /** @var AclInfo */
  public $aclInfo;
  /** @var string */
  public $documentType;
  /** @var string */
  public $fileExtension;
  /** @var string */
  public $lastContentModifiedTimestamp;
  /** @var int */
  public $numSubscribers;
  /** @var int */
  public $numViewers;
  /** @var GoogleDocsResultInfo */
  public $resultInfo;
  /** @var TypeInfo */
  public $typeInfo;
  protected $aclInfoType = AclInfo::class;
  protected $aclInfoDataType = '';
  protected $resultInfoType = GoogleDocsResultInfo::class;
  protected $resultInfoDataType = '';
  protected $typeInfoType = TypeInfo::class;
  protected $typeInfoDataType = '';
  /** @param AclInfo */
  public function setAclInfo(AclInfo $aclInfo)
  {
    $this->aclInfo = $aclInfo;
  }
  /** @return AclInfo */
  public function getAclInfo()
  {
    return $this->aclInfo;
  }
  /** @param string */
  public function setDocumentType($documentType)
  {
    $this->documentType = $documentType;
  }
  /** @return string */
  public function getDocumentType()
  {
    return $this->documentType;
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
  public function setLastContentModifiedTimestamp($lastContentModifiedTimestamp)
  {
    $this->lastContentModifiedTimestamp = $lastContentModifiedTimestamp;
  }
  /** @return string */
  public function getLastContentModifiedTimestamp()
  {
    return $this->lastContentModifiedTimestamp;
  }
  /** @param int */
  public function setNumSubscribers($numSubscribers)
  {
    $this->numSubscribers = $numSubscribers;
  }
  /** @return int */
  public function getNumSubscribers()
  {
    return $this->numSubscribers;
  }
  /** @param int */
  public function setNumViewers($numViewers)
  {
    $this->numViewers = $numViewers;
  }
  /** @return int */
  public function getNumViewers()
  {
    return $this->numViewers;
  }
  /** @param GoogleDocsResultInfo */
  public function setResultInfo(GoogleDocsResultInfo $resultInfo)
  {
    $this->resultInfo = $resultInfo;
  }
  /** @return GoogleDocsResultInfo */
  public function getResultInfo()
  {
    return $this->resultInfo;
  }
  /** @param TypeInfo */
  public function setTypeInfo(TypeInfo $typeInfo)
  {
    $this->typeInfo = $typeInfo;
  }
  /** @return TypeInfo */
  public function getTypeInfo()
  {
    return $this->typeInfo;
  }
}

class GoogleDocsResultInfo extends \Google\Model
{
  /** @var string */
  public $attachmentSha1;
  /** @var Id */
  public $cosmoId;
  /** @var int */
  public $cosmoNameSpace;
  /** @var string */
  public $encryptedId;
  /** @var string */
  public $mimeType;
  /** @var ShareScope */
  public $shareScope;
  protected $cosmoIdType = Id::class;
  protected $cosmoIdDataType = '';
  protected $shareScopeType = ShareScope::class;
  protected $shareScopeDataType = '';
  /** @param string */
  public function setAttachmentSha1($attachmentSha1)
  {
    $this->attachmentSha1 = $attachmentSha1;
  }
  /** @return string */
  public function getAttachmentSha1()
  {
    return $this->attachmentSha1;
  }
  /** @param Id */
  public function setCosmoId(Id $cosmoId)
  {
    $this->cosmoId = $cosmoId;
  }
  /** @return Id */
  public function getCosmoId()
  {
    return $this->cosmoId;
  }
  /** @param int */
  public function setCosmoNameSpace($cosmoNameSpace)
  {
    $this->cosmoNameSpace = $cosmoNameSpace;
  }
  /** @return int */
  public function getCosmoNameSpace()
  {
    return $this->cosmoNameSpace;
  }
  /** @param string */
  public function setEncryptedId($encryptedId)
  {
    $this->encryptedId = $encryptedId;
  }
  /** @return string */
  public function getEncryptedId()
  {
    return $this->encryptedId;
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
  /** @param ShareScope */
  public function setShareScope(ShareScope $shareScope)
  {
    $this->shareScope = $shareScope;
  }
  /** @return ShareScope */
  public function getShareScope()
  {
    return $this->shareScope;
  }
}

class Grid extends \Google\Collection
{
  /** @var BorderStyle */
  public $borderStyle;
  /** @var GridItem[] */
  public $items;
  /** @var int */
  public $numColumns;
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $title;
  protected $collection_key = 'items';
  protected $borderStyleType = BorderStyle::class;
  protected $borderStyleDataType = '';
  protected $itemsType = GridItem::class;
  protected $itemsDataType = 'array';
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  /** @param BorderStyle */
  public function setBorderStyle(BorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return BorderStyle */
  public function getBorderStyle()
  {
    return $this->borderStyle;
  }
  /** @param GridItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GridItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param int */
  public function setNumColumns($numColumns)
  {
    $this->numColumns = $numColumns;
  }
  /** @return int */
  public function getNumColumns()
  {
    return $this->numColumns;
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

class GridItem extends \Google\Model
{
  /** @var string */
  public $identifier;
  /** @var ImageComponent */
  public $image;
  /** @var string */
  public $layout;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $textAlignment;
  /** @var string */
  public $title;
  protected $imageType = ImageComponent::class;
  protected $imageDataType = '';
  /** @param string */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /** @return string */
  public function getIdentifier()
  {
    return $this->identifier;
  }
  /** @param ImageComponent */
  public function setImage(ImageComponent $image)
  {
    $this->image = $image;
  }
  /** @return ImageComponent */
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
  public function setTextAlignment($textAlignment)
  {
    $this->textAlignment = $textAlignment;
  }
  /** @return string */
  public function getTextAlignment()
  {
    return $this->textAlignment;
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

class GroupDetailsUpdatedMetadata extends \Google\Model
{
  /** @var AppsDynamiteSharedGroupDetails */
  public $newGroupDetails;
  /** @var AppsDynamiteSharedGroupDetails */
  public $prevGroupDetails;
  protected $newGroupDetailsType = AppsDynamiteSharedGroupDetails::class;
  protected $newGroupDetailsDataType = '';
  protected $prevGroupDetailsType = AppsDynamiteSharedGroupDetails::class;
  protected $prevGroupDetailsDataType = '';
  /** @param AppsDynamiteSharedGroupDetails */
  public function setNewGroupDetails(AppsDynamiteSharedGroupDetails $newGroupDetails)
  {
    $this->newGroupDetails = $newGroupDetails;
  }
  /** @return AppsDynamiteSharedGroupDetails */
  public function getNewGroupDetails()
  {
    return $this->newGroupDetails;
  }
  /** @param AppsDynamiteSharedGroupDetails */
  public function setPrevGroupDetails(AppsDynamiteSharedGroupDetails $prevGroupDetails)
  {
    $this->prevGroupDetails = $prevGroupDetails;
  }
  /** @return AppsDynamiteSharedGroupDetails */
  public function getPrevGroupDetails()
  {
    return $this->prevGroupDetails;
  }
}

class GroupId extends \Google\Model
{
  /** @var DmId */
  public $dmId;
  /** @var SpaceId */
  public $spaceId;
  protected $dmIdType = DmId::class;
  protected $dmIdDataType = '';
  protected $spaceIdType = SpaceId::class;
  protected $spaceIdDataType = '';
  /** @param DmId */
  public function setDmId(DmId $dmId)
  {
    $this->dmId = $dmId;
  }
  /** @return DmId */
  public function getDmId()
  {
    return $this->dmId;
  }
  /** @param SpaceId */
  public function setSpaceId(SpaceId $spaceId)
  {
    $this->spaceId = $spaceId;
  }
  /** @return SpaceId */
  public function getSpaceId()
  {
    return $this->spaceId;
  }
}

class GroupLinkSharingModificationEvent extends \Google\Model
{
  /** @var string */
  public $newStatus;

  /** @param string */
  public function setNewStatus($newStatus)
  {
    $this->newStatus = $newStatus;
  }
  /** @return string */
  public function getNewStatus()
  {
    return $this->newStatus;
  }
}

class GroupRetentionSettingsUpdatedMetaData extends \Google\Model
{
  /** @var UserId */
  public $initiator;
  /** @var AppsDynamiteSharedRetentionSettings */
  public $retentionSettings;
  protected $initiatorType = UserId::class;
  protected $initiatorDataType = '';
  protected $retentionSettingsType = AppsDynamiteSharedRetentionSettings::class;
  protected $retentionSettingsDataType = '';
  /** @param UserId */
  public function setInitiator(UserId $initiator)
  {
    $this->initiator = $initiator;
  }
  /** @return UserId */
  public function getInitiator()
  {
    return $this->initiator;
  }
  /** @param AppsDynamiteSharedRetentionSettings */
  public function setRetentionSettings(AppsDynamiteSharedRetentionSettings $retentionSettings)
  {
    $this->retentionSettings = $retentionSettings;
  }
  /** @return AppsDynamiteSharedRetentionSettings */
  public function getRetentionSettings()
  {
    return $this->retentionSettings;
  }
}

class GsuiteIntegrationMetadata extends \Google\Collection
{
  /** @var AppsDynamiteSharedActivityFeedAnnotationData */
  public $activityFeedData;
  /** @var AppsDynamiteSharedAssistantAnnotationData */
  public $assistantData;
  /** @var AppsDynamiteSharedCalendarEventAnnotationData */
  public $calendarEventData;
  /** @var AppsDynamiteSharedCallAnnotationData */
  public $callData;
  /** @var string */
  public $clientType;
  /** @var string[] */
  public $indexableTexts;
  /** @var AppsDynamiteSharedTasksAnnotationData */
  public $tasksData;
  protected $collection_key = 'indexableTexts';
  protected $activityFeedDataType = AppsDynamiteSharedActivityFeedAnnotationData::class;
  protected $activityFeedDataDataType = '';
  protected $assistantDataType = AppsDynamiteSharedAssistantAnnotationData::class;
  protected $assistantDataDataType = '';
  protected $calendarEventDataType = AppsDynamiteSharedCalendarEventAnnotationData::class;
  protected $calendarEventDataDataType = '';
  protected $callDataType = AppsDynamiteSharedCallAnnotationData::class;
  protected $callDataDataType = '';
  protected $tasksDataType = AppsDynamiteSharedTasksAnnotationData::class;
  protected $tasksDataDataType = '';
  /** @param AppsDynamiteSharedActivityFeedAnnotationData */
  public function setActivityFeedData(AppsDynamiteSharedActivityFeedAnnotationData $activityFeedData)
  {
    $this->activityFeedData = $activityFeedData;
  }
  /** @return AppsDynamiteSharedActivityFeedAnnotationData */
  public function getActivityFeedData()
  {
    return $this->activityFeedData;
  }
  /** @param AppsDynamiteSharedAssistantAnnotationData */
  public function setAssistantData(AppsDynamiteSharedAssistantAnnotationData $assistantData)
  {
    $this->assistantData = $assistantData;
  }
  /** @return AppsDynamiteSharedAssistantAnnotationData */
  public function getAssistantData()
  {
    return $this->assistantData;
  }
  /** @param AppsDynamiteSharedCalendarEventAnnotationData */
  public function setCalendarEventData(AppsDynamiteSharedCalendarEventAnnotationData $calendarEventData)
  {
    $this->calendarEventData = $calendarEventData;
  }
  /** @return AppsDynamiteSharedCalendarEventAnnotationData */
  public function getCalendarEventData()
  {
    return $this->calendarEventData;
  }
  /** @param AppsDynamiteSharedCallAnnotationData */
  public function setCallData(AppsDynamiteSharedCallAnnotationData $callData)
  {
    $this->callData = $callData;
  }
  /** @return AppsDynamiteSharedCallAnnotationData */
  public function getCallData()
  {
    return $this->callData;
  }
  /** @param string */
  public function setClientType($clientType)
  {
    $this->clientType = $clientType;
  }
  /** @return string */
  public function getClientType()
  {
    return $this->clientType;
  }
  /** @param string[] */
  public function setIndexableTexts($indexableTexts)
  {
    $this->indexableTexts = $indexableTexts;
  }
  /** @return string[] */
  public function getIndexableTexts()
  {
    return $this->indexableTexts;
  }
  /** @param AppsDynamiteSharedTasksAnnotationData */
  public function setTasksData(AppsDynamiteSharedTasksAnnotationData $tasksData)
  {
    $this->tasksData = $tasksData;
  }
  /** @return AppsDynamiteSharedTasksAnnotationData */
  public function getTasksData()
  {
    return $this->tasksData;
  }
}

class HangoutEvent extends \Google\Collection
{
  /** @var string */
  public $hangoutDurationSecs;
  /** @var string */
  public $mediaType;
  /** @var StoredParticipantId[] */
  public $participantId;
  /** @var string */
  public $type;
  protected $collection_key = 'participantId';
  protected $participantIdType = StoredParticipantId::class;
  protected $participantIdDataType = 'array';
  /** @param string */
  public function setHangoutDurationSecs($hangoutDurationSecs)
  {
    $this->hangoutDurationSecs = $hangoutDurationSecs;
  }
  /** @return string */
  public function getHangoutDurationSecs()
  {
    return $this->hangoutDurationSecs;
  }
  /** @param string */
  public function setMediaType($mediaType)
  {
    $this->mediaType = $mediaType;
  }
  /** @return string */
  public function getMediaType()
  {
    return $this->mediaType;
  }
  /** @param StoredParticipantId[] */
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
  /** @return StoredParticipantId[] */
  public function getParticipantId()
  {
    return $this->participantId;
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

class HangoutVideoEventMetadata extends \Google\Model
{
  /** @var string */
  public $hangoutVideoType;

  /** @param string */
  public function setHangoutVideoType($hangoutVideoType)
  {
    $this->hangoutVideoType = $hangoutVideoType;
  }
  /** @return string */
  public function getHangoutVideoType()
  {
    return $this->hangoutVideoType;
  }
}

class HashtagData extends \Google\Model
{
  /** @var string */
  public $searchText;

  /** @param string */
  public function setSearchText($searchText)
  {
    $this->searchText = $searchText;
  }
  /** @return string */
  public function getSearchText()
  {
    return $this->searchText;
  }
}

class History extends \Google\Collection
{
  /** @var HistoryRecord[] */
  public $record;
  protected $collection_key = 'record';
  protected $recordType = HistoryRecord::class;
  protected $recordDataType = 'array';
  /** @param HistoryRecord[] */
  public function setRecord($record)
  {
    $this->record = $record;
  }
  /** @return HistoryRecord[] */
  public function getRecord()
  {
    return $this->record;
  }
}

class HistoryRecord extends \Google\Model
{
  /** @var ClientContext */
  public $clientContext;
  /** @var FilterUpdate */
  public $filterUpdate;
  /** @var ImapUpdate */
  public $imapUpdate;
  /** @var LabelUpdate */
  public $labelUpdate;
  /** @var PrefUpdate */
  public $prefUpdate;
  /** @var string */
  public $recordId;
  /** @var ThreadUpdate */
  public $threadUpdate;
  /** @var TransactionContext */
  public $transactionContext;
  /** @var TransactionDebugInfo */
  public $txnDebugInfo;
  /** @var string */
  public $type;
  protected $clientContextType = ClientContext::class;
  protected $clientContextDataType = '';
  protected $filterUpdateType = FilterUpdate::class;
  protected $filterUpdateDataType = '';
  protected $imapUpdateType = ImapUpdate::class;
  protected $imapUpdateDataType = '';
  protected $labelUpdateType = LabelUpdate::class;
  protected $labelUpdateDataType = '';
  protected $prefUpdateType = PrefUpdate::class;
  protected $prefUpdateDataType = '';
  protected $threadUpdateType = ThreadUpdate::class;
  protected $threadUpdateDataType = '';
  protected $transactionContextType = TransactionContext::class;
  protected $transactionContextDataType = '';
  protected $txnDebugInfoType = TransactionDebugInfo::class;
  protected $txnDebugInfoDataType = '';
  /** @param ClientContext */
  public function setClientContext(ClientContext $clientContext)
  {
    $this->clientContext = $clientContext;
  }
  /** @return ClientContext */
  public function getClientContext()
  {
    return $this->clientContext;
  }
  /** @param FilterUpdate */
  public function setFilterUpdate(FilterUpdate $filterUpdate)
  {
    $this->filterUpdate = $filterUpdate;
  }
  /** @return FilterUpdate */
  public function getFilterUpdate()
  {
    return $this->filterUpdate;
  }
  /** @param ImapUpdate */
  public function setImapUpdate(ImapUpdate $imapUpdate)
  {
    $this->imapUpdate = $imapUpdate;
  }
  /** @return ImapUpdate */
  public function getImapUpdate()
  {
    return $this->imapUpdate;
  }
  /** @param LabelUpdate */
  public function setLabelUpdate(LabelUpdate $labelUpdate)
  {
    $this->labelUpdate = $labelUpdate;
  }
  /** @return LabelUpdate */
  public function getLabelUpdate()
  {
    return $this->labelUpdate;
  }
  /** @param PrefUpdate */
  public function setPrefUpdate(PrefUpdate $prefUpdate)
  {
    $this->prefUpdate = $prefUpdate;
  }
  /** @return PrefUpdate */
  public function getPrefUpdate()
  {
    return $this->prefUpdate;
  }
  /** @param string */
  public function setRecordId($recordId)
  {
    $this->recordId = $recordId;
  }
  /** @return string */
  public function getRecordId()
  {
    return $this->recordId;
  }
  /** @param ThreadUpdate */
  public function setThreadUpdate(ThreadUpdate $threadUpdate)
  {
    $this->threadUpdate = $threadUpdate;
  }
  /** @return ThreadUpdate */
  public function getThreadUpdate()
  {
    return $this->threadUpdate;
  }
  /** @param TransactionContext */
  public function setTransactionContext(TransactionContext $transactionContext)
  {
    $this->transactionContext = $transactionContext;
  }
  /** @return TransactionContext */
  public function getTransactionContext()
  {
    return $this->transactionContext;
  }
  /** @param TransactionDebugInfo */
  public function setTxnDebugInfo(TransactionDebugInfo $txnDebugInfo)
  {
    $this->txnDebugInfo = $txnDebugInfo;
  }
  /** @return TransactionDebugInfo */
  public function getTxnDebugInfo()
  {
    return $this->txnDebugInfo;
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

class HostAppActionMarkup extends \Google\Model
{
  /** @var CalendarClientActionMarkup */
  public $calendarAction;
  /** @var ChatClientActionMarkup */
  public $chatAction;
  /** @var DriveClientActionMarkup */
  public $driveAction;
  /** @var EditorClientActionMarkup */
  public $editorAction;
  /** @var GmailClientActionMarkup */
  public $gmailAction;
  /** @var SheetsClientActionMarkup */
  public $sheetsAction;
  protected $calendarActionType = CalendarClientActionMarkup::class;
  protected $calendarActionDataType = '';
  protected $chatActionType = ChatClientActionMarkup::class;
  protected $chatActionDataType = '';
  protected $driveActionType = DriveClientActionMarkup::class;
  protected $driveActionDataType = '';
  protected $editorActionType = EditorClientActionMarkup::class;
  protected $editorActionDataType = '';
  protected $gmailActionType = GmailClientActionMarkup::class;
  protected $gmailActionDataType = '';
  protected $sheetsActionType = SheetsClientActionMarkup::class;
  protected $sheetsActionDataType = '';
  /** @param CalendarClientActionMarkup */
  public function setCalendarAction(CalendarClientActionMarkup $calendarAction)
  {
    $this->calendarAction = $calendarAction;
  }
  /** @return CalendarClientActionMarkup */
  public function getCalendarAction()
  {
    return $this->calendarAction;
  }
  /** @param ChatClientActionMarkup */
  public function setChatAction(ChatClientActionMarkup $chatAction)
  {
    $this->chatAction = $chatAction;
  }
  /** @return ChatClientActionMarkup */
  public function getChatAction()
  {
    return $this->chatAction;
  }
  /** @param DriveClientActionMarkup */
  public function setDriveAction(DriveClientActionMarkup $driveAction)
  {
    $this->driveAction = $driveAction;
  }
  /** @return DriveClientActionMarkup */
  public function getDriveAction()
  {
    return $this->driveAction;
  }
  /** @param EditorClientActionMarkup */
  public function setEditorAction(EditorClientActionMarkup $editorAction)
  {
    $this->editorAction = $editorAction;
  }
  /** @return EditorClientActionMarkup */
  public function getEditorAction()
  {
    return $this->editorAction;
  }
  /** @param GmailClientActionMarkup */
  public function setGmailAction(GmailClientActionMarkup $gmailAction)
  {
    $this->gmailAction = $gmailAction;
  }
  /** @return GmailClientActionMarkup */
  public function getGmailAction()
  {
    return $this->gmailAction;
  }
  /** @param SheetsClientActionMarkup */
  public function setSheetsAction(SheetsClientActionMarkup $sheetsAction)
  {
    $this->sheetsAction = $sheetsAction;
  }
  /** @return SheetsClientActionMarkup */
  public function getSheetsAction()
  {
    return $this->sheetsAction;
  }
}

class HostProto extends \Google\Model
{
  /** @var string */
  public $hostName;
  /** @var string */
  public $hostOwner;

  /** @param string */
  public function setHostName($hostName)
  {
    $this->hostName = $hostName;
  }
  /** @return string */
  public function getHostName()
  {
    return $this->hostName;
  }
  /** @param string */
  public function setHostOwner($hostOwner)
  {
    $this->hostOwner = $hostOwner;
  }
  /** @return string */
  public function getHostOwner()
  {
    return $this->hostOwner;
  }
}

class HtmlOperatorOptions extends \Google\Model
{
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class HtmlPropertyOptions extends \Google\Model
{
  /** @var HtmlOperatorOptions */
  public $operatorOptions;
  /** @var RetrievalImportance */
  public $retrievalImportance;
  protected $operatorOptionsType = HtmlOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  protected $retrievalImportanceType = RetrievalImportance::class;
  protected $retrievalImportanceDataType = '';
  /** @param HtmlOperatorOptions */
  public function setOperatorOptions(HtmlOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return HtmlOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
  /** @param RetrievalImportance */
  public function setRetrievalImportance(RetrievalImportance $retrievalImportance)
  {
    $this->retrievalImportance = $retrievalImportance;
  }
  /** @return RetrievalImportance */
  public function getRetrievalImportance()
  {
    return $this->retrievalImportance;
  }
}

class HtmlValues extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class IconImage extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $imageStyle;

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
  public function setImageStyle($imageStyle)
  {
    $this->imageStyle = $imageStyle;
  }
  /** @return string */
  public function getImageStyle()
  {
    return $this->imageStyle;
  }
}

class Id extends \Google\Model
{
  /** @var string */
  public $creatorUserId;
  /** @var string */
  public $localId;
  /** @var int */
  public $nameSpace;

  /** @param string */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return string */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param int */
  public function setNameSpace($nameSpace)
  {
    $this->nameSpace = $nameSpace;
  }
  /** @return int */
  public function getNameSpace()
  {
    return $this->nameSpace;
  }
}

class Image extends \Google\Model
{
  /** @var string */
  public $altText;
  public $aspectRatio;
  /** @var string */
  public $imageUrl;
  /** @var OnClick */
  public $onClick;
  protected $onClickType = OnClick::class;
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

class ImageComponent extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var BorderStyle */
  public $borderStyle;
  /** @var ImageCropStyle */
  public $cropStyle;
  /** @var string */
  public $imageUrl;
  protected $borderStyleType = BorderStyle::class;
  protected $borderStyleDataType = '';
  protected $cropStyleType = ImageCropStyle::class;
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
  /** @param BorderStyle */
  public function setBorderStyle(BorderStyle $borderStyle)
  {
    $this->borderStyle = $borderStyle;
  }
  /** @return BorderStyle */
  public function getBorderStyle()
  {
    return $this->borderStyle;
  }
  /** @param ImageCropStyle */
  public function setCropStyle(ImageCropStyle $cropStyle)
  {
    $this->cropStyle = $cropStyle;
  }
  /** @return ImageCropStyle */
  public function getCropStyle()
  {
    return $this->cropStyle;
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
}

class ImageCropStyle extends \Google\Model
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

class ImageKeyValue extends \Google\Model
{
  /** @var string */
  public $icon;
  /** @var string */
  public $iconUrl;
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $text;
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

class ImapSessionContext extends \Google\Model
{
  /** @var string */
  public $app;
  /** @var string */
  public $deviceType;
  /** @var string */
  public $guidFingerprint;
  /** @var string */
  public $os;
  /** @var OsVersion */
  public $osVersion;
  /** @var PossiblyTrimmedModel */
  public $possiblyTrimmedModel;
  protected $osVersionType = OsVersion::class;
  protected $osVersionDataType = '';
  protected $possiblyTrimmedModelType = PossiblyTrimmedModel::class;
  protected $possiblyTrimmedModelDataType = '';
  /** @param string */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /** @return string */
  public function getApp()
  {
    return $this->app;
  }
  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /** @param string */
  public function setGuidFingerprint($guidFingerprint)
  {
    $this->guidFingerprint = $guidFingerprint;
  }
  /** @return string */
  public function getGuidFingerprint()
  {
    return $this->guidFingerprint;
  }
  /** @param string */
  public function setOs($os)
  {
    $this->os = $os;
  }
  /** @return string */
  public function getOs()
  {
    return $this->os;
  }
  /** @param OsVersion */
  public function setOsVersion(OsVersion $osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return OsVersion */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /** @param PossiblyTrimmedModel */
  public function setPossiblyTrimmedModel(PossiblyTrimmedModel $possiblyTrimmedModel)
  {
    $this->possiblyTrimmedModel = $possiblyTrimmedModel;
  }
  /** @return PossiblyTrimmedModel */
  public function getPossiblyTrimmedModel()
  {
    return $this->possiblyTrimmedModel;
  }
}

class ImapSyncDelete extends \Google\Model
{
  /** @var FolderAttribute */
  public $mappings;
  /** @var string */
  public $msgId;
  protected $mappingsType = FolderAttribute::class;
  protected $mappingsDataType = '';
  /** @param FolderAttribute */
  public function setMappings(FolderAttribute $mappings)
  {
    $this->mappings = $mappings;
  }
  /** @return FolderAttribute */
  public function getMappings()
  {
    return $this->mappings;
  }
  /** @param string */
  public function setMsgId($msgId)
  {
    $this->msgId = $msgId;
  }
  /** @return string */
  public function getMsgId()
  {
    return $this->msgId;
  }
}

class ImapUidsReassign extends \Google\Collection
{
  /** @var string */
  public $labelId;
  /** @var string[] */
  public $messageId;
  protected $collection_key = 'messageId';
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
  /** @param string[] */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string[] */
  public function getMessageId()
  {
    return $this->messageId;
  }
}

class ImapUpdate extends \Google\Model
{
  /** @var ImapUidsReassign */
  public $imapUidsReassign;
  protected $imapUidsReassignType = ImapUidsReassign::class;
  protected $imapUidsReassignDataType = '';
  /** @param ImapUidsReassign */
  public function setImapUidsReassign(ImapUidsReassign $imapUidsReassign)
  {
    $this->imapUidsReassign = $imapUidsReassign;
  }
  /** @return ImapUidsReassign */
  public function getImapUidsReassign()
  {
    return $this->imapUidsReassign;
  }
}

class ImapsyncFolderAttributeFolderMessage extends \Google\Model
{
  /** @var ImapsyncFolderAttributeFolderMessageFlags */
  public $flags;
  /** @var string */
  public $uid;
  protected $flagsType = ImapsyncFolderAttributeFolderMessageFlags::class;
  protected $flagsDataType = '';
  /** @param ImapsyncFolderAttributeFolderMessageFlags */
  public function setFlags(ImapsyncFolderAttributeFolderMessageFlags $flags)
  {
    $this->flags = $flags;
  }
  /** @return ImapsyncFolderAttributeFolderMessageFlags */
  public function getFlags()
  {
    return $this->flags;
  }
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class ImapsyncFolderAttributeFolderMessageFlags extends \Google\Model
{
  /** @var bool */
  public $flagged;
  /** @var bool */
  public $seen;

  /** @param bool */
  public function setFlagged($flagged)
  {
    $this->flagged = $flagged;
  }
  /** @return bool */
  public function getFlagged()
  {
    return $this->flagged;
  }
  /** @param bool */
  public function setSeen($seen)
  {
    $this->seen = $seen;
  }
  /** @return bool */
  public function getSeen()
  {
    return $this->seen;
  }
}

class IncomingWebhookChangedMetadata extends \Google\Model
{
  /** @var string */
  public $incomingWebhookName;
  /** @var UserId */
  public $initiatorId;
  /** @var User */
  public $initiatorProfile;
  /** @var string */
  public $obfuscatedIncomingWebhookId;
  /** @var string */
  public $oldIncomingWebhookName;
  /** @var string */
  public $type;
  protected $initiatorIdType = UserId::class;
  protected $initiatorIdDataType = '';
  protected $initiatorProfileType = User::class;
  protected $initiatorProfileDataType = '';
  /** @param string */
  public function setIncomingWebhookName($incomingWebhookName)
  {
    $this->incomingWebhookName = $incomingWebhookName;
  }
  /** @return string */
  public function getIncomingWebhookName()
  {
    return $this->incomingWebhookName;
  }
  /** @param UserId */
  public function setInitiatorId(UserId $initiatorId)
  {
    $this->initiatorId = $initiatorId;
  }
  /** @return UserId */
  public function getInitiatorId()
  {
    return $this->initiatorId;
  }
  /** @param User */
  public function setInitiatorProfile(User $initiatorProfile)
  {
    $this->initiatorProfile = $initiatorProfile;
  }
  /** @return User */
  public function getInitiatorProfile()
  {
    return $this->initiatorProfile;
  }
  /** @param string */
  public function setObfuscatedIncomingWebhookId($obfuscatedIncomingWebhookId)
  {
    $this->obfuscatedIncomingWebhookId = $obfuscatedIncomingWebhookId;
  }
  /** @return string */
  public function getObfuscatedIncomingWebhookId()
  {
    return $this->obfuscatedIncomingWebhookId;
  }
  /** @param string */
  public function setOldIncomingWebhookName($oldIncomingWebhookName)
  {
    $this->oldIncomingWebhookName = $oldIncomingWebhookName;
  }
  /** @return string */
  public function getOldIncomingWebhookName()
  {
    return $this->oldIncomingWebhookName;
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

class IndexItemOptions extends \Google\Model
{
  /** @var bool */
  public $allowUnknownGsuitePrincipals;

  /** @param bool */
  public function setAllowUnknownGsuitePrincipals($allowUnknownGsuitePrincipals)
  {
    $this->allowUnknownGsuitePrincipals = $allowUnknownGsuitePrincipals;
  }
  /** @return bool */
  public function getAllowUnknownGsuitePrincipals()
  {
    return $this->allowUnknownGsuitePrincipals;
  }
}

class IndexItemRequest extends \Google\Model
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var IndexItemOptions */
  public $indexItemOptions;
  /** @var Item */
  public $item;
  /** @var string */
  public $mode;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  protected $indexItemOptionsType = IndexItemOptions::class;
  protected $indexItemOptionsDataType = '';
  protected $itemType = Item::class;
  protected $itemDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param IndexItemOptions */
  public function setIndexItemOptions(IndexItemOptions $indexItemOptions)
  {
    $this->indexItemOptions = $indexItemOptions;
  }
  /** @return IndexItemOptions */
  public function getIndexItemOptions()
  {
    return $this->indexItemOptions;
  }
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
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
}

class InitializeCustomerRequest extends \Google\Model
{
}

class InsertContent extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $contentType;
  /** @var string */
  public $mimeType;

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

class IntegerFacetingOptions extends \Google\Collection
{
  /** @var string[] */
  public $integerBuckets;
  protected $collection_key = 'integerBuckets';
  /** @param string[] */
  public function setIntegerBuckets($integerBuckets)
  {
    $this->integerBuckets = $integerBuckets;
  }
  /** @return string[] */
  public function getIntegerBuckets()
  {
    return $this->integerBuckets;
  }
}

class IntegerOperatorOptions extends \Google\Model
{
  /** @var string */
  public $greaterThanOperatorName;
  /** @var string */
  public $lessThanOperatorName;
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setGreaterThanOperatorName($greaterThanOperatorName)
  {
    $this->greaterThanOperatorName = $greaterThanOperatorName;
  }
  /** @return string */
  public function getGreaterThanOperatorName()
  {
    return $this->greaterThanOperatorName;
  }
  /** @param string */
  public function setLessThanOperatorName($lessThanOperatorName)
  {
    $this->lessThanOperatorName = $lessThanOperatorName;
  }
  /** @return string */
  public function getLessThanOperatorName()
  {
    return $this->lessThanOperatorName;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class IntegerPropertyOptions extends \Google\Model
{
  /** @var IntegerFacetingOptions */
  public $integerFacetingOptions;
  /** @var string */
  public $maximumValue;
  /** @var string */
  public $minimumValue;
  /** @var IntegerOperatorOptions */
  public $operatorOptions;
  /** @var string */
  public $orderedRanking;
  protected $integerFacetingOptionsType = IntegerFacetingOptions::class;
  protected $integerFacetingOptionsDataType = '';
  protected $operatorOptionsType = IntegerOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  /** @param IntegerFacetingOptions */
  public function setIntegerFacetingOptions(IntegerFacetingOptions $integerFacetingOptions)
  {
    $this->integerFacetingOptions = $integerFacetingOptions;
  }
  /** @return IntegerFacetingOptions */
  public function getIntegerFacetingOptions()
  {
    return $this->integerFacetingOptions;
  }
  /** @param string */
  public function setMaximumValue($maximumValue)
  {
    $this->maximumValue = $maximumValue;
  }
  /** @return string */
  public function getMaximumValue()
  {
    return $this->maximumValue;
  }
  /** @param string */
  public function setMinimumValue($minimumValue)
  {
    $this->minimumValue = $minimumValue;
  }
  /** @return string */
  public function getMinimumValue()
  {
    return $this->minimumValue;
  }
  /** @param IntegerOperatorOptions */
  public function setOperatorOptions(IntegerOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return IntegerOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
  /** @param string */
  public function setOrderedRanking($orderedRanking)
  {
    $this->orderedRanking = $orderedRanking;
  }
  /** @return string */
  public function getOrderedRanking()
  {
    return $this->orderedRanking;
  }
}

class IntegerValues extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class IntegrationConfigMutation extends \Google\Model
{
  /** @var AppId */
  public $addApp;
  /** @var PinnedItemId */
  public $addPinnedItem;
  /** @var AppId */
  public $removeApp;
  /** @var PinnedItemId */
  public $removePinnedItem;
  protected $addAppType = AppId::class;
  protected $addAppDataType = '';
  protected $addPinnedItemType = PinnedItemId::class;
  protected $addPinnedItemDataType = '';
  protected $removeAppType = AppId::class;
  protected $removeAppDataType = '';
  protected $removePinnedItemType = PinnedItemId::class;
  protected $removePinnedItemDataType = '';
  /** @param AppId */
  public function setAddApp(AppId $addApp)
  {
    $this->addApp = $addApp;
  }
  /** @return AppId */
  public function getAddApp()
  {
    return $this->addApp;
  }
  /** @param PinnedItemId */
  public function setAddPinnedItem(PinnedItemId $addPinnedItem)
  {
    $this->addPinnedItem = $addPinnedItem;
  }
  /** @return PinnedItemId */
  public function getAddPinnedItem()
  {
    return $this->addPinnedItem;
  }
  /** @param AppId */
  public function setRemoveApp(AppId $removeApp)
  {
    $this->removeApp = $removeApp;
  }
  /** @return AppId */
  public function getRemoveApp()
  {
    return $this->removeApp;
  }
  /** @param PinnedItemId */
  public function setRemovePinnedItem(PinnedItemId $removePinnedItem)
  {
    $this->removePinnedItem = $removePinnedItem;
  }
  /** @return PinnedItemId */
  public function getRemovePinnedItem()
  {
    return $this->removePinnedItem;
  }
}

class IntegrationConfigUpdatedMetadata extends \Google\Collection
{
  /** @var UserId */
  public $initiatorId;
  /** @var IntegrationConfigMutation[] */
  public $mutations;
  protected $collection_key = 'mutations';
  protected $initiatorIdType = UserId::class;
  protected $initiatorIdDataType = '';
  protected $mutationsType = IntegrationConfigMutation::class;
  protected $mutationsDataType = 'array';
  /** @param UserId */
  public function setInitiatorId(UserId $initiatorId)
  {
    $this->initiatorId = $initiatorId;
  }
  /** @return UserId */
  public function getInitiatorId()
  {
    return $this->initiatorId;
  }
  /** @param IntegrationConfigMutation[] */
  public function setMutations($mutations)
  {
    $this->mutations = $mutations;
  }
  /** @return IntegrationConfigMutation[] */
  public function getMutations()
  {
    return $this->mutations;
  }
}

class Interaction extends \Google\Model
{
  /** @var string */
  public $interactionTime;
  /** @var Principal */
  public $principal;
  /** @var string */
  public $type;
  protected $principalType = Principal::class;
  protected $principalDataType = '';
  /** @param string */
  public function setInteractionTime($interactionTime)
  {
    $this->interactionTime = $interactionTime;
  }
  /** @return string */
  public function getInteractionTime()
  {
    return $this->interactionTime;
  }
  /** @param Principal */
  public function setPrincipal(Principal $principal)
  {
    $this->principal = $principal;
  }
  /** @return Principal */
  public function getPrincipal()
  {
    return $this->principal;
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

class InviteAcceptedEvent extends \Google\Collection
{
  /** @var StoredParticipantId[] */
  public $participantId;
  protected $collection_key = 'participantId';
  protected $participantIdType = StoredParticipantId::class;
  protected $participantIdDataType = 'array';
  /** @param StoredParticipantId[] */
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
  /** @return StoredParticipantId[] */
  public function getParticipantId()
  {
    return $this->participantId;
  }
}

class InviteeInfo extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var UserId */
  public $userId;
  protected $userIdType = UserId::class;
  protected $userIdDataType = '';
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
  /** @param UserId */
  public function setUserId(UserId $userId)
  {
    $this->userId = $userId;
  }
  /** @return UserId */
  public function getUserId()
  {
    return $this->userId;
  }
}

class Item extends \Google\Model
{
  /** @var ItemAcl */
  public $acl;
  /** @var ItemContent */
  public $content;
  /** @var string */
  public $itemType;
  /** @var ItemMetadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $payload;
  /** @var string */
  public $queue;
  /** @var ItemStatus */
  public $status;
  /** @var ItemStructuredData */
  public $structuredData;
  /** @var string */
  public $version;
  protected $aclType = ItemAcl::class;
  protected $aclDataType = '';
  protected $contentType = ItemContent::class;
  protected $contentDataType = '';
  protected $metadataType = ItemMetadata::class;
  protected $metadataDataType = '';
  protected $statusType = ItemStatus::class;
  protected $statusDataType = '';
  protected $structuredDataType = ItemStructuredData::class;
  protected $structuredDataDataType = '';
  /** @param ItemAcl */
  public function setAcl(ItemAcl $acl)
  {
    $this->acl = $acl;
  }
  /** @return ItemAcl */
  public function getAcl()
  {
    return $this->acl;
  }
  /** @param ItemContent */
  public function setContent(ItemContent $content)
  {
    $this->content = $content;
  }
  /** @return ItemContent */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setItemType($itemType)
  {
    $this->itemType = $itemType;
  }
  /** @return string */
  public function getItemType()
  {
    return $this->itemType;
  }
  /** @param ItemMetadata */
  public function setMetadata(ItemMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ItemMetadata */
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
  /** @param string */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /** @return string */
  public function getQueue()
  {
    return $this->queue;
  }
  /** @param ItemStatus */
  public function setStatus(ItemStatus $status)
  {
    $this->status = $status;
  }
  /** @return ItemStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param ItemStructuredData */
  public function setStructuredData(ItemStructuredData $structuredData)
  {
    $this->structuredData = $structuredData;
  }
  /** @return ItemStructuredData */
  public function getStructuredData()
  {
    return $this->structuredData;
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
}

class ItemAcl extends \Google\Collection
{
  /** @var string */
  public $aclInheritanceType;
  /** @var Principal[] */
  public $deniedReaders;
  /** @var string */
  public $inheritAclFrom;
  /** @var Principal[] */
  public $owners;
  /** @var Principal[] */
  public $readers;
  protected $collection_key = 'readers';
  protected $deniedReadersType = Principal::class;
  protected $deniedReadersDataType = 'array';
  protected $ownersType = Principal::class;
  protected $ownersDataType = 'array';
  protected $readersType = Principal::class;
  protected $readersDataType = 'array';
  /** @param string */
  public function setAclInheritanceType($aclInheritanceType)
  {
    $this->aclInheritanceType = $aclInheritanceType;
  }
  /** @return string */
  public function getAclInheritanceType()
  {
    return $this->aclInheritanceType;
  }
  /** @param Principal[] */
  public function setDeniedReaders($deniedReaders)
  {
    $this->deniedReaders = $deniedReaders;
  }
  /** @return Principal[] */
  public function getDeniedReaders()
  {
    return $this->deniedReaders;
  }
  /** @param string */
  public function setInheritAclFrom($inheritAclFrom)
  {
    $this->inheritAclFrom = $inheritAclFrom;
  }
  /** @return string */
  public function getInheritAclFrom()
  {
    return $this->inheritAclFrom;
  }
  /** @param Principal[] */
  public function setOwners($owners)
  {
    $this->owners = $owners;
  }
  /** @return Principal[] */
  public function getOwners()
  {
    return $this->owners;
  }
  /** @param Principal[] */
  public function setReaders($readers)
  {
    $this->readers = $readers;
  }
  /** @return Principal[] */
  public function getReaders()
  {
    return $this->readers;
  }
}

class ItemContent extends \Google\Model
{
  /** @var UploadItemRef */
  public $contentDataRef;
  /** @var string */
  public $contentFormat;
  /** @var string */
  public $hash;
  /** @var string */
  public $inlineContent;
  protected $contentDataRefType = UploadItemRef::class;
  protected $contentDataRefDataType = '';
  /** @param UploadItemRef */
  public function setContentDataRef(UploadItemRef $contentDataRef)
  {
    $this->contentDataRef = $contentDataRef;
  }
  /** @return UploadItemRef */
  public function getContentDataRef()
  {
    return $this->contentDataRef;
  }
  /** @param string */
  public function setContentFormat($contentFormat)
  {
    $this->contentFormat = $contentFormat;
  }
  /** @return string */
  public function getContentFormat()
  {
    return $this->contentFormat;
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
  /** @param string */
  public function setInlineContent($inlineContent)
  {
    $this->inlineContent = $inlineContent;
  }
  /** @return string */
  public function getInlineContent()
  {
    return $this->inlineContent;
  }
}

class ItemCountByStatus extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $indexedItemsCount;
  /** @var string */
  public $statusCode;

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
  /** @param string */
  public function setIndexedItemsCount($indexedItemsCount)
  {
    $this->indexedItemsCount = $indexedItemsCount;
  }
  /** @return string */
  public function getIndexedItemsCount()
  {
    return $this->indexedItemsCount;
  }
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
}

class ItemMetadata extends \Google\Collection
{
  /** @var string */
  public $containerName;
  /** @var string */
  public $contentLanguage;
  /** @var ContextAttribute[] */
  public $contextAttributes;
  /** @var string */
  public $createTime;
  /** @var string */
  public $hash;
  /** @var Interaction[] */
  public $interactions;
  /** @var string[] */
  public $keywords;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $objectType;
  /** @var SearchQualityMetadata */
  public $searchQualityMetadata;
  /** @var string */
  public $sourceRepositoryUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'keywords';
  protected $contextAttributesType = ContextAttribute::class;
  protected $contextAttributesDataType = 'array';
  protected $interactionsType = Interaction::class;
  protected $interactionsDataType = 'array';
  protected $searchQualityMetadataType = SearchQualityMetadata::class;
  protected $searchQualityMetadataDataType = '';
  /** @param string */
  public function setContainerName($containerName)
  {
    $this->containerName = $containerName;
  }
  /** @return string */
  public function getContainerName()
  {
    return $this->containerName;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param ContextAttribute[] */
  public function setContextAttributes($contextAttributes)
  {
    $this->contextAttributes = $contextAttributes;
  }
  /** @return ContextAttribute[] */
  public function getContextAttributes()
  {
    return $this->contextAttributes;
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
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
  }
  /** @param Interaction[] */
  public function setInteractions($interactions)
  {
    $this->interactions = $interactions;
  }
  /** @return Interaction[] */
  public function getInteractions()
  {
    return $this->interactions;
  }
  /** @param string[] */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /** @return string[] */
  public function getKeywords()
  {
    return $this->keywords;
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
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param SearchQualityMetadata */
  public function setSearchQualityMetadata(SearchQualityMetadata $searchQualityMetadata)
  {
    $this->searchQualityMetadata = $searchQualityMetadata;
  }
  /** @return SearchQualityMetadata */
  public function getSearchQualityMetadata()
  {
    return $this->searchQualityMetadata;
  }
  /** @param string */
  public function setSourceRepositoryUrl($sourceRepositoryUrl)
  {
    $this->sourceRepositoryUrl = $sourceRepositoryUrl;
  }
  /** @return string */
  public function getSourceRepositoryUrl()
  {
    return $this->sourceRepositoryUrl;
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

class ItemParts extends \Google\Model
{
}

class ItemStatus extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var ProcessingError[] */
  public $processingErrors;
  /** @var RepositoryError[] */
  public $repositoryErrors;
  protected $collection_key = 'repositoryErrors';
  protected $processingErrorsType = ProcessingError::class;
  protected $processingErrorsDataType = 'array';
  protected $repositoryErrorsType = RepositoryError::class;
  protected $repositoryErrorsDataType = 'array';
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
  /** @param ProcessingError[] */
  public function setProcessingErrors($processingErrors)
  {
    $this->processingErrors = $processingErrors;
  }
  /** @return ProcessingError[] */
  public function getProcessingErrors()
  {
    return $this->processingErrors;
  }
  /** @param RepositoryError[] */
  public function setRepositoryErrors($repositoryErrors)
  {
    $this->repositoryErrors = $repositoryErrors;
  }
  /** @return RepositoryError[] */
  public function getRepositoryErrors()
  {
    return $this->repositoryErrors;
  }
}

class ItemStructuredData extends \Google\Model
{
  /** @var string */
  public $hash;
  /** @var StructuredDataObject */
  public $object;
  protected $objectType = StructuredDataObject::class;
  protected $objectDataType = '';
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
  /** @param StructuredDataObject */
  public function setObject(StructuredDataObject $object)
  {
    $this->object = $object;
  }
  /** @return StructuredDataObject */
  public function getObject()
  {
    return $this->object;
  }
}

class ItemThread extends \Google\Collection
{
  /** @var ClusterInfo */
  public $clusterInfo;
  /** @var FuseboxItem[] */
  public $item;
  /** @var string */
  public $lastItemId;
  /** @var FuseboxItemThreadMatchInfo */
  public $matchInfo;
  /** @var string */
  public $snippet;
  /** @var MultiKey */
  public $threadKey;
  /** @var string */
  public $threadLocator;
  /** @var TopicState */
  public $topicState;
  /** @var string */
  public $version;
  protected $collection_key = 'item';
  protected $clusterInfoType = ClusterInfo::class;
  protected $clusterInfoDataType = '';
  protected $itemType = FuseboxItem::class;
  protected $itemDataType = 'array';
  protected $matchInfoType = FuseboxItemThreadMatchInfo::class;
  protected $matchInfoDataType = '';
  protected $threadKeyType = MultiKey::class;
  protected $threadKeyDataType = '';
  protected $topicStateType = TopicState::class;
  protected $topicStateDataType = '';
  /** @param ClusterInfo */
  public function setClusterInfo(ClusterInfo $clusterInfo)
  {
    $this->clusterInfo = $clusterInfo;
  }
  /** @return ClusterInfo */
  public function getClusterInfo()
  {
    return $this->clusterInfo;
  }
  /** @param FuseboxItem[] */
  public function setItem($item)
  {
    $this->item = $item;
  }
  /** @return FuseboxItem[] */
  public function getItem()
  {
    return $this->item;
  }
  /** @param string */
  public function setLastItemId($lastItemId)
  {
    $this->lastItemId = $lastItemId;
  }
  /** @return string */
  public function getLastItemId()
  {
    return $this->lastItemId;
  }
  /** @param FuseboxItemThreadMatchInfo */
  public function setMatchInfo(FuseboxItemThreadMatchInfo $matchInfo)
  {
    $this->matchInfo = $matchInfo;
  }
  /** @return FuseboxItemThreadMatchInfo */
  public function getMatchInfo()
  {
    return $this->matchInfo;
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
  /** @param MultiKey */
  public function setThreadKey(MultiKey $threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return MultiKey */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
  /** @param string */
  public function setThreadLocator($threadLocator)
  {
    $this->threadLocator = $threadLocator;
  }
  /** @return string */
  public function getThreadLocator()
  {
    return $this->threadLocator;
  }
  /** @param TopicState */
  public function setTopicState(TopicState $topicState)
  {
    $this->topicState = $topicState;
  }
  /** @return TopicState */
  public function getTopicState()
  {
    return $this->topicState;
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
}

class JobsettedServerSpec extends \Google\Model
{
  /** @var string */
  public $portName;
  /** @var string */
  public $serverName;

  /** @param string */
  public function setPortName($portName)
  {
    $this->portName = $portName;
  }
  /** @return string */
  public function getPortName()
  {
    return $this->portName;
  }
  /** @param string */
  public function setServerName($serverName)
  {
    $this->serverName = $serverName;
  }
  /** @return string */
  public function getServerName()
  {
    return $this->serverName;
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
  /** @var IconImage */
  public $endIcon;
  /** @var string */
  public $icon;
  /** @var string */
  public $iconAltText;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $imageStyle;
  /** @var OnClick */
  public $onClick;
  /** @var IconImage */
  public $startIcon;
  /** @var SwitchWidget */
  public $switchWidget;
  /** @var string */
  public $topLabel;
  protected $buttonType = Button::class;
  protected $buttonDataType = '';
  protected $endIconType = IconImage::class;
  protected $endIconDataType = '';
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
  protected $startIconType = IconImage::class;
  protected $startIconDataType = '';
  protected $switchWidgetType = SwitchWidget::class;
  protected $switchWidgetDataType = '';
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
  /** @param IconImage */
  public function setEndIcon(IconImage $endIcon)
  {
    $this->endIcon = $endIcon;
  }
  /** @return IconImage */
  public function getEndIcon()
  {
    return $this->endIcon;
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
  public function setIconAltText($iconAltText)
  {
    $this->iconAltText = $iconAltText;
  }
  /** @return string */
  public function getIconAltText()
  {
    return $this->iconAltText;
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
  public function setImageStyle($imageStyle)
  {
    $this->imageStyle = $imageStyle;
  }
  /** @return string */
  public function getImageStyle()
  {
    return $this->imageStyle;
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
  /** @param IconImage */
  public function setStartIcon(IconImage $startIcon)
  {
    $this->startIcon = $startIcon;
  }
  /** @return IconImage */
  public function getStartIcon()
  {
    return $this->startIcon;
  }
  /** @param SwitchWidget */
  public function setSwitchWidget(SwitchWidget $switchWidget)
  {
    $this->switchWidget = $switchWidget;
  }
  /** @return SwitchWidget */
  public function getSwitchWidget()
  {
    return $this->switchWidget;
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

class LabelAdded extends \Google\Collection
{
  /** @var string */
  public $labelId;
  /** @var string */
  public $labelName;
  /** @var MultiKey[] */
  public $messageKeys;
  /** @var string */
  public $syncId;
  protected $collection_key = 'messageKeys';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
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
  /** @param string */
  public function setLabelName($labelName)
  {
    $this->labelName = $labelName;
  }
  /** @return string */
  public function getLabelName()
  {
    return $this->labelName;
  }
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
  /** @param string */
  public function setSyncId($syncId)
  {
    $this->syncId = $syncId;
  }
  /** @return string */
  public function getSyncId()
  {
    return $this->syncId;
  }
}

class LabelCreated extends \Google\Model
{
}

class LabelDeleted extends \Google\Model
{
}

class LabelRemoved extends \Google\Collection
{
  /** @var string */
  public $labelId;
  /** @var string */
  public $labelName;
  /** @var MultiKey[] */
  public $messageKeys;
  /** @var string */
  public $syncId;
  protected $collection_key = 'messageKeys';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
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
  /** @param string */
  public function setLabelName($labelName)
  {
    $this->labelName = $labelName;
  }
  /** @return string */
  public function getLabelName()
  {
    return $this->labelName;
  }
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
  /** @param string */
  public function setSyncId($syncId)
  {
    $this->syncId = $syncId;
  }
  /** @return string */
  public function getSyncId()
  {
    return $this->syncId;
  }
}

class LabelRenamed extends \Google\Model
{
  /** @var string */
  public $oldCanonicalName;

  /** @param string */
  public function setOldCanonicalName($oldCanonicalName)
  {
    $this->oldCanonicalName = $oldCanonicalName;
  }
  /** @return string */
  public function getOldCanonicalName()
  {
    return $this->oldCanonicalName;
  }
}

class LabelUpdate extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var LabelCreated */
  public $labelCreated;
  /** @var LabelDeleted */
  public $labelDeleted;
  /** @var string */
  public $labelId;
  /** @var LabelRenamed */
  public $labelRenamed;
  /** @var LabelUpdated */
  public $labelUpdated;
  /** @var string */
  public $syncId;
  protected $labelCreatedType = LabelCreated::class;
  protected $labelCreatedDataType = '';
  protected $labelDeletedType = LabelDeleted::class;
  protected $labelDeletedDataType = '';
  protected $labelRenamedType = LabelRenamed::class;
  protected $labelRenamedDataType = '';
  protected $labelUpdatedType = LabelUpdated::class;
  protected $labelUpdatedDataType = '';
  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /** @param LabelCreated */
  public function setLabelCreated(LabelCreated $labelCreated)
  {
    $this->labelCreated = $labelCreated;
  }
  /** @return LabelCreated */
  public function getLabelCreated()
  {
    return $this->labelCreated;
  }
  /** @param LabelDeleted */
  public function setLabelDeleted(LabelDeleted $labelDeleted)
  {
    $this->labelDeleted = $labelDeleted;
  }
  /** @return LabelDeleted */
  public function getLabelDeleted()
  {
    return $this->labelDeleted;
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
  /** @param LabelRenamed */
  public function setLabelRenamed(LabelRenamed $labelRenamed)
  {
    $this->labelRenamed = $labelRenamed;
  }
  /** @return LabelRenamed */
  public function getLabelRenamed()
  {
    return $this->labelRenamed;
  }
  /** @param LabelUpdated */
  public function setLabelUpdated(LabelUpdated $labelUpdated)
  {
    $this->labelUpdated = $labelUpdated;
  }
  /** @return LabelUpdated */
  public function getLabelUpdated()
  {
    return $this->labelUpdated;
  }
  /** @param string */
  public function setSyncId($syncId)
  {
    $this->syncId = $syncId;
  }
  /** @return string */
  public function getSyncId()
  {
    return $this->syncId;
  }
}

class LabelUpdated extends \Google\Model
{
}

class Labels extends \Google\Collection
{
  /** @var string[] */
  public $displayName;
  /** @var string[] */
  public $id;
  protected $collection_key = 'id';
  /** @param string[] */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string[] */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param string[] */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string[] */
  public function getId()
  {
    return $this->id;
  }
}

class LanguageConfig extends \Google\Collection
{
  /** @var string[] */
  public $spokenLanguages;
  protected $collection_key = 'spokenLanguages';
  /** @param string[] */
  public function setSpokenLanguages($spokenLanguages)
  {
    $this->spokenLanguages = $spokenLanguages;
  }
  /** @return string[] */
  public function getSpokenLanguages()
  {
    return $this->spokenLanguages;
  }
}

class LdapGroupProto extends \Google\Model
{
  /** @var string */
  public $groupName;

  /** @param string */
  public function setGroupName($groupName)
  {
    $this->groupName = $groupName;
  }
  /** @return string */
  public function getGroupName()
  {
    return $this->groupName;
  }
}

class LdapUserProto extends \Google\Model
{
  /** @var string */
  public $userName;

  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class LegacyUploadMetadata extends \Google\Model
{
  /** @var string */
  public $legacyUniqueId;
  /** @var UploadMetadata */
  public $uploadMetadata;
  protected $uploadMetadataType = UploadMetadata::class;
  protected $uploadMetadataDataType = '';
  /** @param string */
  public function setLegacyUniqueId($legacyUniqueId)
  {
    $this->legacyUniqueId = $legacyUniqueId;
  }
  /** @return string */
  public function getLegacyUniqueId()
  {
    return $this->legacyUniqueId;
  }
  /** @param UploadMetadata */
  public function setUploadMetadata(UploadMetadata $uploadMetadata)
  {
    $this->uploadMetadata = $uploadMetadata;
  }
  /** @return UploadMetadata */
  public function getUploadMetadata()
  {
    return $this->uploadMetadata;
  }
}

class LinkData extends \Google\Model
{
  /** @var SocialCommonAttachmentAttachment */
  public $attachment;
  /** @var string */
  public $attachmentRenderHint;
  /** @var string */
  public $displayUrl;
  /** @var string */
  public $linkTarget;
  /** @var string */
  public $linkType;
  /** @var string */
  public $title;
  protected $attachmentType = SocialCommonAttachmentAttachment::class;
  protected $attachmentDataType = '';
  /** @param SocialCommonAttachmentAttachment */
  public function setAttachment(SocialCommonAttachmentAttachment $attachment)
  {
    $this->attachment = $attachment;
  }
  /** @return SocialCommonAttachmentAttachment */
  public function getAttachment()
  {
    return $this->attachment;
  }
  /** @param string */
  public function setAttachmentRenderHint($attachmentRenderHint)
  {
    $this->attachmentRenderHint = $attachmentRenderHint;
  }
  /** @return string */
  public function getAttachmentRenderHint()
  {
    return $this->attachmentRenderHint;
  }
  /** @param string */
  public function setDisplayUrl($displayUrl)
  {
    $this->displayUrl = $displayUrl;
  }
  /** @return string */
  public function getDisplayUrl()
  {
    return $this->displayUrl;
  }
  /** @param string */
  public function setLinkTarget($linkTarget)
  {
    $this->linkTarget = $linkTarget;
  }
  /** @return string */
  public function getLinkTarget()
  {
    return $this->linkTarget;
  }
  /** @param string */
  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }
  /** @return string */
  public function getLinkType()
  {
    return $this->linkType;
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

class ListDataSourceResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var DataSource[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = DataSource::class;
  protected $sourcesDataType = 'array';
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
  /** @param DataSource[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return DataSource[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class ListItemNamesForUnmappedIdentityResponse extends \Google\Collection
{
  /** @var string[] */
  public $itemNames;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'itemNames';
  /** @param string[] */
  public function setItemNames($itemNames)
  {
    $this->itemNames = $itemNames;
  }
  /** @return string[] */
  public function getItemNames()
  {
    return $this->itemNames;
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

class ListItemsResponse extends \Google\Collection
{
  /** @var Item[] */
  public $items;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
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

class ListQuerySourcesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var QuerySource[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = QuerySource::class;
  protected $sourcesDataType = 'array';
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
  /** @param QuerySource[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return QuerySource[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class ListSearchApplicationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SearchApplication[] */
  public $searchApplications;
  protected $collection_key = 'searchApplications';
  protected $searchApplicationsType = SearchApplication::class;
  protected $searchApplicationsDataType = 'array';
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
  /** @param SearchApplication[] */
  public function setSearchApplications($searchApplications)
  {
    $this->searchApplications = $searchApplications;
  }
  /** @return SearchApplication[] */
  public function getSearchApplications()
  {
    return $this->searchApplications;
  }
}

class ListUnmappedIdentitiesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UnmappedIdentity[] */
  public $unmappedIdentities;
  protected $collection_key = 'unmappedIdentities';
  protected $unmappedIdentitiesType = UnmappedIdentity::class;
  protected $unmappedIdentitiesDataType = 'array';
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
  /** @param UnmappedIdentity[] */
  public function setUnmappedIdentities($unmappedIdentities)
  {
    $this->unmappedIdentities = $unmappedIdentities;
  }
  /** @return UnmappedIdentity[] */
  public function getUnmappedIdentities()
  {
    return $this->unmappedIdentities;
  }
}

class MatchInfo extends \Google\Collection
{
  /** @var string[] */
  public $matchingImageReferenceKey;
  protected $collection_key = 'matchingImageReferenceKey';
  /** @param string[] */
  public function setMatchingImageReferenceKey($matchingImageReferenceKey)
  {
    $this->matchingImageReferenceKey = $matchingImageReferenceKey;
  }
  /** @return string[] */
  public function getMatchingImageReferenceKey()
  {
    return $this->matchingImageReferenceKey;
  }
}

class MatchRange extends \Google\Model
{
  /** @var int */
  public $end;
  /** @var int */
  public $start;

  /** @param int */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return int */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param int */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return int */
  public function getStart()
  {
    return $this->start;
  }
}

class MdbGroupProto extends \Google\Model
{
  /** @var string */
  public $groupName;

  /** @param string */
  public function setGroupName($groupName)
  {
    $this->groupName = $groupName;
  }
  /** @return string */
  public function getGroupName()
  {
    return $this->groupName;
  }
}

class MdbUserProto extends \Google\Model
{
  /** @var string */
  public $gaiaId;
  /** @var string */
  public $userName;

  /** @param string */
  public function setGaiaId($gaiaId)
  {
    $this->gaiaId = $gaiaId;
  }
  /** @return string */
  public function getGaiaId()
  {
    return $this->gaiaId;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
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

class MeetingSpace extends \Google\Collection
{
  /** @var string[] */
  public $acceptedNumberClass;
  /** @var BroadcastAccess */
  public $broadcastAccess;
  /** @var CallInfo */
  public $callInfo;
  /** @var GatewayAccess */
  public $gatewayAccess;
  /** @var GatewaySipAccess[] */
  public $gatewaySipAccess;
  /** @var string */
  public $meetingAlias;
  /** @var string */
  public $meetingCode;
  /** @var string */
  public $meetingSpaceId;
  /** @var string */
  public $meetingUrl;
  /** @var string */
  public $moreJoinUrl;
  /** @var PhoneAccess[] */
  public $phoneAccess;
  /** @var Settings */
  public $settings;
  /** @var UniversalPhoneAccess */
  public $universalPhoneAccess;
  protected $collection_key = 'phoneAccess';
  protected $broadcastAccessType = BroadcastAccess::class;
  protected $broadcastAccessDataType = '';
  protected $callInfoType = CallInfo::class;
  protected $callInfoDataType = '';
  protected $gatewayAccessType = GatewayAccess::class;
  protected $gatewayAccessDataType = '';
  protected $gatewaySipAccessType = GatewaySipAccess::class;
  protected $gatewaySipAccessDataType = 'array';
  protected $phoneAccessType = PhoneAccess::class;
  protected $phoneAccessDataType = 'array';
  protected $settingsType = Settings::class;
  protected $settingsDataType = '';
  protected $universalPhoneAccessType = UniversalPhoneAccess::class;
  protected $universalPhoneAccessDataType = '';
  /** @param string[] */
  public function setAcceptedNumberClass($acceptedNumberClass)
  {
    $this->acceptedNumberClass = $acceptedNumberClass;
  }
  /** @return string[] */
  public function getAcceptedNumberClass()
  {
    return $this->acceptedNumberClass;
  }
  /** @param BroadcastAccess */
  public function setBroadcastAccess(BroadcastAccess $broadcastAccess)
  {
    $this->broadcastAccess = $broadcastAccess;
  }
  /** @return BroadcastAccess */
  public function getBroadcastAccess()
  {
    return $this->broadcastAccess;
  }
  /** @param CallInfo */
  public function setCallInfo(CallInfo $callInfo)
  {
    $this->callInfo = $callInfo;
  }
  /** @return CallInfo */
  public function getCallInfo()
  {
    return $this->callInfo;
  }
  /** @param GatewayAccess */
  public function setGatewayAccess(GatewayAccess $gatewayAccess)
  {
    $this->gatewayAccess = $gatewayAccess;
  }
  /** @return GatewayAccess */
  public function getGatewayAccess()
  {
    return $this->gatewayAccess;
  }
  /** @param GatewaySipAccess[] */
  public function setGatewaySipAccess($gatewaySipAccess)
  {
    $this->gatewaySipAccess = $gatewaySipAccess;
  }
  /** @return GatewaySipAccess[] */
  public function getGatewaySipAccess()
  {
    return $this->gatewaySipAccess;
  }
  /** @param string */
  public function setMeetingAlias($meetingAlias)
  {
    $this->meetingAlias = $meetingAlias;
  }
  /** @return string */
  public function getMeetingAlias()
  {
    return $this->meetingAlias;
  }
  /** @param string */
  public function setMeetingCode($meetingCode)
  {
    $this->meetingCode = $meetingCode;
  }
  /** @return string */
  public function getMeetingCode()
  {
    return $this->meetingCode;
  }
  /** @param string */
  public function setMeetingSpaceId($meetingSpaceId)
  {
    $this->meetingSpaceId = $meetingSpaceId;
  }
  /** @return string */
  public function getMeetingSpaceId()
  {
    return $this->meetingSpaceId;
  }
  /** @param string */
  public function setMeetingUrl($meetingUrl)
  {
    $this->meetingUrl = $meetingUrl;
  }
  /** @return string */
  public function getMeetingUrl()
  {
    return $this->meetingUrl;
  }
  /** @param string */
  public function setMoreJoinUrl($moreJoinUrl)
  {
    $this->moreJoinUrl = $moreJoinUrl;
  }
  /** @return string */
  public function getMoreJoinUrl()
  {
    return $this->moreJoinUrl;
  }
  /** @param PhoneAccess[] */
  public function setPhoneAccess($phoneAccess)
  {
    $this->phoneAccess = $phoneAccess;
  }
  /** @return PhoneAccess[] */
  public function getPhoneAccess()
  {
    return $this->phoneAccess;
  }
  /** @param Settings */
  public function setSettings(Settings $settings)
  {
    $this->settings = $settings;
  }
  /** @return Settings */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param UniversalPhoneAccess */
  public function setUniversalPhoneAccess(UniversalPhoneAccess $universalPhoneAccess)
  {
    $this->universalPhoneAccess = $universalPhoneAccess;
  }
  /** @return UniversalPhoneAccess */
  public function getUniversalPhoneAccess()
  {
    return $this->universalPhoneAccess;
  }
}

class Member extends \Google\Model
{
  /** @var Roster */
  public $roster;
  /** @var User */
  public $user;
  protected $rosterType = Roster::class;
  protected $rosterDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param Roster */
  public function setRoster(Roster $roster)
  {
    $this->roster = $roster;
  }
  /** @return Roster */
  public function getRoster()
  {
    return $this->roster;
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

class MemberId extends \Google\Model
{
  /** @var RosterId */
  public $rosterId;
  /** @var UserId */
  public $userId;
  protected $rosterIdType = RosterId::class;
  protected $rosterIdDataType = '';
  protected $userIdType = UserId::class;
  protected $userIdDataType = '';
  /** @param RosterId */
  public function setRosterId(RosterId $rosterId)
  {
    $this->rosterId = $rosterId;
  }
  /** @return RosterId */
  public function getRosterId()
  {
    return $this->rosterId;
  }
  /** @param UserId */
  public function setUserId(UserId $userId)
  {
    $this->userId = $userId;
  }
  /** @return UserId */
  public function getUserId()
  {
    return $this->userId;
  }
}

class MembershipChangeEvent extends \Google\Collection
{
  /** @var string */
  public $leaveReason;
  /** @var StoredParticipantId[] */
  public $participantId;
  /** @var string */
  public $type;
  protected $collection_key = 'participantId';
  protected $participantIdType = StoredParticipantId::class;
  protected $participantIdDataType = 'array';
  /** @param string */
  public function setLeaveReason($leaveReason)
  {
    $this->leaveReason = $leaveReason;
  }
  /** @return string */
  public function getLeaveReason()
  {
    return $this->leaveReason;
  }
  /** @param StoredParticipantId[] */
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
  /** @return StoredParticipantId[] */
  public function getParticipantId()
  {
    return $this->participantId;
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

class MembershipChangedMetadata extends \Google\Collection
{
  /** @var Member[] */
  public $affectedMemberProfiles;
  /** @var MemberId[] */
  public $affectedMembers;
  /** @var AffectedMembership[] */
  public $affectedMemberships;
  /** @var UserId */
  public $initiator;
  /** @var User */
  public $initiatorProfile;
  /** @var string */
  public $initiatorType;
  /** @var string */
  public $type;
  protected $collection_key = 'affectedMemberships';
  protected $affectedMemberProfilesType = Member::class;
  protected $affectedMemberProfilesDataType = 'array';
  protected $affectedMembersType = MemberId::class;
  protected $affectedMembersDataType = 'array';
  protected $affectedMembershipsType = AffectedMembership::class;
  protected $affectedMembershipsDataType = 'array';
  protected $initiatorDataType = '';
  protected $initiatorProfileType = User::class;
  protected $initiatorProfileDataType = '';
  /** @param Member[] */
  public function setAffectedMemberProfiles($affectedMemberProfiles)
  {
    $this->affectedMemberProfiles = $affectedMemberProfiles;
  }
  /** @return Member[] */
  public function getAffectedMemberProfiles()
  {
    return $this->affectedMemberProfiles;
  }
  /** @param MemberId[] */
  public function setAffectedMembers($affectedMembers)
  {
    $this->affectedMembers = $affectedMembers;
  }
  /** @return MemberId[] */
  public function getAffectedMembers()
  {
    return $this->affectedMembers;
  }
  /** @param AffectedMembership[] */
  public function setAffectedMemberships($affectedMemberships)
  {
    $this->affectedMemberships = $affectedMemberships;
  }
  /** @return AffectedMembership[] */
  public function getAffectedMemberships()
  {
    return $this->affectedMemberships;
  }
  /** @param UserId */
  public function setInitiator(UserId $initiator)
  {
    $this->initiator = $initiator;
  }
  /** @return UserId */
  public function getInitiator()
  {
    return $this->initiator;
  }
  /** @param User */
  public function setInitiatorProfile(User $initiatorProfile)
  {
    $this->initiatorProfile = $initiatorProfile;
  }
  /** @return User */
  public function getInitiatorProfile()
  {
    return $this->initiatorProfile;
  }
  /** @param string */
  public function setInitiatorType($initiatorType)
  {
    $this->initiatorType = $initiatorType;
  }
  /** @return string */
  public function getInitiatorType()
  {
    return $this->initiatorType;
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

class Menu extends \Google\Collection
{
  /** @var MenuItem[] */
  public $items;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var FormAction */
  public $onChange;
  protected $collection_key = 'items';
  protected $itemsType = MenuItem::class;
  protected $itemsDataType = 'array';
  protected $onChangeType = FormAction::class;
  protected $onChangeDataType = '';
  /** @param MenuItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return MenuItem[] */
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
  /** @param FormAction */
  public function setOnChange(FormAction $onChange)
  {
    $this->onChange = $onChange;
  }
  /** @return FormAction */
  public function getOnChange()
  {
    return $this->onChange;
  }
}

class MenuItem extends \Google\Model
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

class Message extends \Google\Collection
{
  /** @var Annotation[] */
  public $annotations;
  /** @var AppsDynamiteSharedAppProfile */
  public $appProfile;
  /** @var Attachment[] */
  public $attachments;
  /** @var MessageAttributes */
  public $attributes;
  /** @var BotResponse[] */
  public $botResponses;
  /** @var CommunalLabelTag[] */
  public $communalLabels;
  /** @var ContentReportSummary */
  public $contentReportSummary;
  /** @var string */
  public $createTime;
  /** @var UserId */
  public $creatorId;
  /** @var string */
  public $deletableBy;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $deleteTimeForRequester;
  /** @var bool */
  public $deletedByVault;
  /** @var string */
  public $dlpScanOutcome;
  /** @var DlpScanSummary */
  public $dlpScanSummary;
  /** @var string */
  public $editableBy;
  /** @var string */
  public $fallbackText;
  /** @var MessageId */
  public $id;
  /** @var bool */
  public $isContentPurged;
  /** @var bool */
  public $isInlineReply;
  /** @var string */
  public $lastEditTime;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $localId;
  /** @var AppsDynamiteSharedMessageIntegrationPayload */
  public $messageIntegrationPayload;
  /** @var string */
  public $messageOrigin;
  /** @var string */
  public $messageState;
  /** @var AppsDynamiteSharedOriginAppSuggestion[] */
  public $originAppSuggestions;
  /** @var PersonalLabelTag[] */
  public $personalLabels;
  /** @var PrivateMessageInfo[] */
  public $privateMessageInfos;
  /** @var UserId */
  public $privateMessageViewer;
  /** @var MessageProps */
  public $props;
  /** @var string */
  public $quotedByState;
  /** @var QuotedMessageMetadata */
  public $quotedMessageMetadata;
  /** @var AppsDynamiteSharedReaction[] */
  public $reactions;
  /** @var ContentReport[] */
  public $reports;
  /** @var AppsDynamiteSharedRetentionSettings */
  public $retentionSettings;
  /** @var string */
  public $secondaryMessageKey;
  /** @var string */
  public $textBody;
  /** @var TombstoneMetadata */
  public $tombstoneMetadata;
  /** @var UserId */
  public $updaterId;
  /** @var UploadMetadata[] */
  public $uploadMetadata;
  protected $collection_key = 'uploadMetadata';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  protected $appProfileType = AppsDynamiteSharedAppProfile::class;
  protected $appProfileDataType = '';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  protected $attributesType = MessageAttributes::class;
  protected $attributesDataType = '';
  protected $botResponsesType = BotResponse::class;
  protected $botResponsesDataType = 'array';
  protected $communalLabelsType = CommunalLabelTag::class;
  protected $communalLabelsDataType = 'array';
  protected $contentReportSummaryType = ContentReportSummary::class;
  protected $contentReportSummaryDataType = '';
  protected $creatorIdType = UserId::class;
  protected $creatorIdDataType = '';
  protected $dlpScanSummaryType = DlpScanSummary::class;
  protected $dlpScanSummaryDataType = '';
  protected $idType = MessageId::class;
  protected $idDataType = '';
  protected $messageIntegrationPayloadType = AppsDynamiteSharedMessageIntegrationPayload::class;
  protected $messageIntegrationPayloadDataType = '';
  protected $originAppSuggestionsType = AppsDynamiteSharedOriginAppSuggestion::class;
  protected $originAppSuggestionsDataType = 'array';
  protected $personalLabelsType = PersonalLabelTag::class;
  protected $personalLabelsDataType = 'array';
  protected $privateMessageInfosType = PrivateMessageInfo::class;
  protected $privateMessageInfosDataType = 'array';
  protected $privateMessageViewerType = UserId::class;
  protected $privateMessageViewerDataType = '';
  protected $propsType = MessageProps::class;
  protected $propsDataType = '';
  protected $quotedMessageMetadataType = QuotedMessageMetadata::class;
  protected $quotedMessageMetadataDataType = '';
  protected $reactionsType = AppsDynamiteSharedReaction::class;
  protected $reactionsDataType = 'array';
  protected $reportsType = ContentReport::class;
  protected $reportsDataType = 'array';
  protected $retentionSettingsType = AppsDynamiteSharedRetentionSettings::class;
  protected $retentionSettingsDataType = '';
  protected $tombstoneMetadataType = TombstoneMetadata::class;
  protected $tombstoneMetadataDataType = '';
  protected $updaterIdType = UserId::class;
  protected $updaterIdDataType = '';
  protected $uploadMetadataType = UploadMetadata::class;
  protected $uploadMetadataDataType = 'array';
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
  /** @param AppsDynamiteSharedAppProfile */
  public function setAppProfile(AppsDynamiteSharedAppProfile $appProfile)
  {
    $this->appProfile = $appProfile;
  }
  /** @return AppsDynamiteSharedAppProfile */
  public function getAppProfile()
  {
    return $this->appProfile;
  }
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
  /** @param MessageAttributes */
  public function setAttributes(MessageAttributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return MessageAttributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param BotResponse[] */
  public function setBotResponses($botResponses)
  {
    $this->botResponses = $botResponses;
  }
  /** @return BotResponse[] */
  public function getBotResponses()
  {
    return $this->botResponses;
  }
  /** @param CommunalLabelTag[] */
  public function setCommunalLabels($communalLabels)
  {
    $this->communalLabels = $communalLabels;
  }
  /** @return CommunalLabelTag[] */
  public function getCommunalLabels()
  {
    return $this->communalLabels;
  }
  /** @param ContentReportSummary */
  public function setContentReportSummary(ContentReportSummary $contentReportSummary)
  {
    $this->contentReportSummary = $contentReportSummary;
  }
  /** @return ContentReportSummary */
  public function getContentReportSummary()
  {
    return $this->contentReportSummary;
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
  /** @param UserId */
  public function setCreatorId(UserId $creatorId)
  {
    $this->creatorId = $creatorId;
  }
  /** @return UserId */
  public function getCreatorId()
  {
    return $this->creatorId;
  }
  /** @param string */
  public function setDeletableBy($deletableBy)
  {
    $this->deletableBy = $deletableBy;
  }
  /** @return string */
  public function getDeletableBy()
  {
    return $this->deletableBy;
  }
  /** @param string */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /** @param string */
  public function setDeleteTimeForRequester($deleteTimeForRequester)
  {
    $this->deleteTimeForRequester = $deleteTimeForRequester;
  }
  /** @return string */
  public function getDeleteTimeForRequester()
  {
    return $this->deleteTimeForRequester;
  }
  /** @param bool */
  public function setDeletedByVault($deletedByVault)
  {
    $this->deletedByVault = $deletedByVault;
  }
  /** @return bool */
  public function getDeletedByVault()
  {
    return $this->deletedByVault;
  }
  /** @param string */
  public function setDlpScanOutcome($dlpScanOutcome)
  {
    $this->dlpScanOutcome = $dlpScanOutcome;
  }
  /** @return string */
  public function getDlpScanOutcome()
  {
    return $this->dlpScanOutcome;
  }
  /** @param DlpScanSummary */
  public function setDlpScanSummary(DlpScanSummary $dlpScanSummary)
  {
    $this->dlpScanSummary = $dlpScanSummary;
  }
  /** @return DlpScanSummary */
  public function getDlpScanSummary()
  {
    return $this->dlpScanSummary;
  }
  /** @param string */
  public function setEditableBy($editableBy)
  {
    $this->editableBy = $editableBy;
  }
  /** @return string */
  public function getEditableBy()
  {
    return $this->editableBy;
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
  /** @param MessageId */
  public function setId(MessageId $id)
  {
    $this->id = $id;
  }
  /** @return MessageId */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setIsContentPurged($isContentPurged)
  {
    $this->isContentPurged = $isContentPurged;
  }
  /** @return bool */
  public function getIsContentPurged()
  {
    return $this->isContentPurged;
  }
  /** @param bool */
  public function setIsInlineReply($isInlineReply)
  {
    $this->isInlineReply = $isInlineReply;
  }
  /** @return bool */
  public function getIsInlineReply()
  {
    return $this->isInlineReply;
  }
  /** @param string */
  public function setLastEditTime($lastEditTime)
  {
    $this->lastEditTime = $lastEditTime;
  }
  /** @return string */
  public function getLastEditTime()
  {
    return $this->lastEditTime;
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
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param AppsDynamiteSharedMessageIntegrationPayload */
  public function setMessageIntegrationPayload(AppsDynamiteSharedMessageIntegrationPayload $messageIntegrationPayload)
  {
    $this->messageIntegrationPayload = $messageIntegrationPayload;
  }
  /** @return AppsDynamiteSharedMessageIntegrationPayload */
  public function getMessageIntegrationPayload()
  {
    return $this->messageIntegrationPayload;
  }
  /** @param string */
  public function setMessageOrigin($messageOrigin)
  {
    $this->messageOrigin = $messageOrigin;
  }
  /** @return string */
  public function getMessageOrigin()
  {
    return $this->messageOrigin;
  }
  /** @param string */
  public function setMessageState($messageState)
  {
    $this->messageState = $messageState;
  }
  /** @return string */
  public function getMessageState()
  {
    return $this->messageState;
  }
  /** @param AppsDynamiteSharedOriginAppSuggestion[] */
  public function setOriginAppSuggestions($originAppSuggestions)
  {
    $this->originAppSuggestions = $originAppSuggestions;
  }
  /** @return AppsDynamiteSharedOriginAppSuggestion[] */
  public function getOriginAppSuggestions()
  {
    return $this->originAppSuggestions;
  }
  /** @param PersonalLabelTag[] */
  public function setPersonalLabels($personalLabels)
  {
    $this->personalLabels = $personalLabels;
  }
  /** @return PersonalLabelTag[] */
  public function getPersonalLabels()
  {
    return $this->personalLabels;
  }
  /** @param PrivateMessageInfo[] */
  public function setPrivateMessageInfos($privateMessageInfos)
  {
    $this->privateMessageInfos = $privateMessageInfos;
  }
  /** @return PrivateMessageInfo[] */
  public function getPrivateMessageInfos()
  {
    return $this->privateMessageInfos;
  }
  /** @param UserId */
  public function setPrivateMessageViewer(UserId $privateMessageViewer)
  {
    $this->privateMessageViewer = $privateMessageViewer;
  }
  /** @return UserId */
  public function getPrivateMessageViewer()
  {
    return $this->privateMessageViewer;
  }
  /** @param MessageProps */
  public function setProps(MessageProps $props)
  {
    $this->props = $props;
  }
  /** @return MessageProps */
  public function getProps()
  {
    return $this->props;
  }
  /** @param string */
  public function setQuotedByState($quotedByState)
  {
    $this->quotedByState = $quotedByState;
  }
  /** @return string */
  public function getQuotedByState()
  {
    return $this->quotedByState;
  }
  /** @param QuotedMessageMetadata */
  public function setQuotedMessageMetadata(QuotedMessageMetadata $quotedMessageMetadata)
  {
    $this->quotedMessageMetadata = $quotedMessageMetadata;
  }
  /** @return QuotedMessageMetadata */
  public function getQuotedMessageMetadata()
  {
    return $this->quotedMessageMetadata;
  }
  /** @param AppsDynamiteSharedReaction[] */
  public function setReactions($reactions)
  {
    $this->reactions = $reactions;
  }
  /** @return AppsDynamiteSharedReaction[] */
  public function getReactions()
  {
    return $this->reactions;
  }
  /** @param ContentReport[] */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /** @return ContentReport[] */
  public function getReports()
  {
    return $this->reports;
  }
  /** @param AppsDynamiteSharedRetentionSettings */
  public function setRetentionSettings(AppsDynamiteSharedRetentionSettings $retentionSettings)
  {
    $this->retentionSettings = $retentionSettings;
  }
  /** @return AppsDynamiteSharedRetentionSettings */
  public function getRetentionSettings()
  {
    return $this->retentionSettings;
  }
  /** @param string */
  public function setSecondaryMessageKey($secondaryMessageKey)
  {
    $this->secondaryMessageKey = $secondaryMessageKey;
  }
  /** @return string */
  public function getSecondaryMessageKey()
  {
    return $this->secondaryMessageKey;
  }
  /** @param string */
  public function setTextBody($textBody)
  {
    $this->textBody = $textBody;
  }
  /** @return string */
  public function getTextBody()
  {
    return $this->textBody;
  }
  /** @param TombstoneMetadata */
  public function setTombstoneMetadata(TombstoneMetadata $tombstoneMetadata)
  {
    $this->tombstoneMetadata = $tombstoneMetadata;
  }
  /** @return TombstoneMetadata */
  public function getTombstoneMetadata()
  {
    return $this->tombstoneMetadata;
  }
  /** @param UserId */
  public function setUpdaterId(UserId $updaterId)
  {
    $this->updaterId = $updaterId;
  }
  /** @return UserId */
  public function getUpdaterId()
  {
    return $this->updaterId;
  }
  /** @param UploadMetadata[] */
  public function setUploadMetadata($uploadMetadata)
  {
    $this->uploadMetadata = $uploadMetadata;
  }
  /** @return UploadMetadata[] */
  public function getUploadMetadata()
  {
    return $this->uploadMetadata;
  }
}

class MessageAdded extends \Google\Collection
{
  /** @var string[] */
  public $attributeIds;
  /** @var string[] */
  public $labelIds;
  /** @var MultiKey */
  public $messageKey;
  /** @var string[] */
  public $syncIds;
  protected $collection_key = 'syncIds';
  protected $messageKeyType = MultiKey::class;
  protected $messageKeyDataType = '';
  /** @param string[] */
  public function setAttributeIds($attributeIds)
  {
    $this->attributeIds = $attributeIds;
  }
  /** @return string[] */
  public function getAttributeIds()
  {
    return $this->attributeIds;
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
  /** @param MultiKey */
  public function setMessageKey(MultiKey $messageKey)
  {
    $this->messageKey = $messageKey;
  }
  /** @return MultiKey */
  public function getMessageKey()
  {
    return $this->messageKey;
  }
  /** @param string[] */
  public function setSyncIds($syncIds)
  {
    $this->syncIds = $syncIds;
  }
  /** @return string[] */
  public function getSyncIds()
  {
    return $this->syncIds;
  }
}

class MessageAttributes extends \Google\Model
{
  /** @var bool */
  public $isTombstone;

  /** @param bool */
  public function setIsTombstone($isTombstone)
  {
    $this->isTombstone = $isTombstone;
  }
  /** @return bool */
  public function getIsTombstone()
  {
    return $this->isTombstone;
  }
}

class MessageDeleted extends \Google\Collection
{
  /** @var ImapSyncDelete[] */
  public $imapSyncMappings;
  /** @var MultiKey[] */
  public $messageKeys;
  protected $collection_key = 'messageKeys';
  protected $imapSyncMappingsType = ImapSyncDelete::class;
  protected $imapSyncMappingsDataType = 'array';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
  /** @param ImapSyncDelete[] */
  public function setImapSyncMappings($imapSyncMappings)
  {
    $this->imapSyncMappings = $imapSyncMappings;
  }
  /** @return ImapSyncDelete[] */
  public function getImapSyncMappings()
  {
    return $this->imapSyncMappings;
  }
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
}

class MessageId extends \Google\Model
{
  /** @var string */
  public $messageId;
  /** @var MessageParentId */
  public $parentId;
  protected $parentIdType = MessageParentId::class;
  protected $parentIdDataType = '';
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
  /** @param MessageParentId */
  public function setParentId(MessageParentId $parentId)
  {
    $this->parentId = $parentId;
  }
  /** @return MessageParentId */
  public function getParentId()
  {
    return $this->parentId;
  }
}

class MessageInfo extends \Google\Model
{
  /** @var Message */
  public $message;
  /** @var string */
  public $searcherMembershipState;
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
  /** @param string */
  public function setSearcherMembershipState($searcherMembershipState)
  {
    $this->searcherMembershipState = $searcherMembershipState;
  }
  /** @return string */
  public function getSearcherMembershipState()
  {
    return $this->searcherMembershipState;
  }
}

class MessageParentId extends \Google\Model
{
  /** @var TopicId */
  public $topicId;
  protected $topicIdType = TopicId::class;
  protected $topicIdDataType = '';
  /** @param TopicId */
  public function setTopicId(TopicId $topicId)
  {
    $this->topicId = $topicId;
  }
  /** @return TopicId */
  public function getTopicId()
  {
    return $this->topicId;
  }
}

class MessageProps extends \Google\Model
{
  /** @var BabelMessageProps */
  public $babelProps;
  protected $babelPropsType = BabelMessageProps::class;
  protected $babelPropsDataType = '';
  /** @param BabelMessageProps */
  public function setBabelProps(BabelMessageProps $babelProps)
  {
    $this->babelProps = $babelProps;
  }
  /** @return BabelMessageProps */
  public function getBabelProps()
  {
    return $this->babelProps;
  }
}

class MessageSet extends \Google\Model
{
}

class Metadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var ResultDisplayMetadata */
  public $displayOptions;
  /** @var NamedProperty[] */
  public $fields;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $objectType;
  /** @var Person */
  public $owner;
  /** @var Source */
  public $source;
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'fields';
  protected $displayOptionsType = ResultDisplayMetadata::class;
  protected $displayOptionsDataType = '';
  protected $fieldsType = NamedProperty::class;
  protected $fieldsDataType = 'array';
  protected $ownerType = Person::class;
  protected $ownerDataType = '';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
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
  /** @param ResultDisplayMetadata */
  public function setDisplayOptions(ResultDisplayMetadata $displayOptions)
  {
    $this->displayOptions = $displayOptions;
  }
  /** @return ResultDisplayMetadata */
  public function getDisplayOptions()
  {
    return $this->displayOptions;
  }
  /** @param NamedProperty[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return NamedProperty[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param Person */
  public function setOwner(Person $owner)
  {
    $this->owner = $owner;
  }
  /** @return Person */
  public function getOwner()
  {
    return $this->owner;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
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

class Metaline extends \Google\Collection
{
  /** @var DisplayedProperty[] */
  public $properties;
  protected $collection_key = 'properties';
  protected $propertiesType = DisplayedProperty::class;
  protected $propertiesDataType = 'array';
  /** @param DisplayedProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return DisplayedProperty[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class MultiKey extends \Google\Model
{
  /** @var string */
  public $clientAssignedPermId;
  /** @var string */
  public $serverId;

  /** @param string */
  public function setClientAssignedPermId($clientAssignedPermId)
  {
    $this->clientAssignedPermId = $clientAssignedPermId;
  }
  /** @return string */
  public function getClientAssignedPermId()
  {
    return $this->clientAssignedPermId;
  }
  /** @param string */
  public function setServerId($serverId)
  {
    $this->serverId = $serverId;
  }
  /** @return string */
  public function getServerId()
  {
    return $this->serverId;
  }
}

class Name extends \Google\Model
{
  /** @var string */
  public $displayName;

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
}

class NamedProperty extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var DateValues */
  public $dateValues;
  /** @var DoubleValues */
  public $doubleValues;
  /** @var EnumValues */
  public $enumValues;
  /** @var HtmlValues */
  public $htmlValues;
  /** @var IntegerValues */
  public $integerValues;
  /** @var string */
  public $name;
  /** @var ObjectValues */
  public $objectValues;
  /** @var TextValues */
  public $textValues;
  /** @var TimestampValues */
  public $timestampValues;
  protected $dateValuesType = DateValues::class;
  protected $dateValuesDataType = '';
  protected $doubleValuesType = DoubleValues::class;
  protected $doubleValuesDataType = '';
  protected $enumValuesType = EnumValues::class;
  protected $enumValuesDataType = '';
  protected $htmlValuesType = HtmlValues::class;
  protected $htmlValuesDataType = '';
  protected $integerValuesType = IntegerValues::class;
  protected $integerValuesDataType = '';
  protected $objectValuesType = ObjectValues::class;
  protected $objectValuesDataType = '';
  protected $textValuesType = TextValues::class;
  protected $textValuesDataType = '';
  protected $timestampValuesType = TimestampValues::class;
  protected $timestampValuesDataType = '';
  /** @param bool */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /** @return bool */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /** @param DateValues */
  public function setDateValues(DateValues $dateValues)
  {
    $this->dateValues = $dateValues;
  }
  /** @return DateValues */
  public function getDateValues()
  {
    return $this->dateValues;
  }
  /** @param DoubleValues */
  public function setDoubleValues(DoubleValues $doubleValues)
  {
    $this->doubleValues = $doubleValues;
  }
  /** @return DoubleValues */
  public function getDoubleValues()
  {
    return $this->doubleValues;
  }
  /** @param EnumValues */
  public function setEnumValues(EnumValues $enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /** @return EnumValues */
  public function getEnumValues()
  {
    return $this->enumValues;
  }
  /** @param HtmlValues */
  public function setHtmlValues(HtmlValues $htmlValues)
  {
    $this->htmlValues = $htmlValues;
  }
  /** @return HtmlValues */
  public function getHtmlValues()
  {
    return $this->htmlValues;
  }
  /** @param IntegerValues */
  public function setIntegerValues(IntegerValues $integerValues)
  {
    $this->integerValues = $integerValues;
  }
  /** @return IntegerValues */
  public function getIntegerValues()
  {
    return $this->integerValues;
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
  /** @param ObjectValues */
  public function setObjectValues(ObjectValues $objectValues)
  {
    $this->objectValues = $objectValues;
  }
  /** @return ObjectValues */
  public function getObjectValues()
  {
    return $this->objectValues;
  }
  /** @param TextValues */
  public function setTextValues(TextValues $textValues)
  {
    $this->textValues = $textValues;
  }
  /** @return TextValues */
  public function getTextValues()
  {
    return $this->textValues;
  }
  /** @param TimestampValues */
  public function setTimestampValues(TimestampValues $timestampValues)
  {
    $this->timestampValues = $timestampValues;
  }
  /** @return TimestampValues */
  public function getTimestampValues()
  {
    return $this->timestampValues;
  }
}

class OAuthConsumerProto extends \Google\Model
{
  /** @var string */
  public $domain;

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
}

class ObjectDefinition extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var ObjectOptions */
  public $options;
  /** @var PropertyDefinition[] */
  public $propertyDefinitions;
  protected $collection_key = 'propertyDefinitions';
  protected $optionsType = ObjectOptions::class;
  protected $optionsDataType = '';
  protected $propertyDefinitionsType = PropertyDefinition::class;
  protected $propertyDefinitionsDataType = 'array';
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
  /** @param ObjectOptions */
  public function setOptions(ObjectOptions $options)
  {
    $this->options = $options;
  }
  /** @return ObjectOptions */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param PropertyDefinition[] */
  public function setPropertyDefinitions($propertyDefinitions)
  {
    $this->propertyDefinitions = $propertyDefinitions;
  }
  /** @return PropertyDefinition[] */
  public function getPropertyDefinitions()
  {
    return $this->propertyDefinitions;
  }
}

class ObjectDisplayOptions extends \Google\Collection
{
  /** @var Metaline[] */
  public $metalines;
  /** @var string */
  public $objectDisplayLabel;
  protected $collection_key = 'metalines';
  protected $metalinesType = Metaline::class;
  protected $metalinesDataType = 'array';
  /** @param Metaline[] */
  public function setMetalines($metalines)
  {
    $this->metalines = $metalines;
  }
  /** @return Metaline[] */
  public function getMetalines()
  {
    return $this->metalines;
  }
  /** @param string */
  public function setObjectDisplayLabel($objectDisplayLabel)
  {
    $this->objectDisplayLabel = $objectDisplayLabel;
  }
  /** @return string */
  public function getObjectDisplayLabel()
  {
    return $this->objectDisplayLabel;
  }
}

class ObjectOptions extends \Google\Collection
{
  /** @var ObjectDisplayOptions */
  public $displayOptions;
  /** @var FreshnessOptions */
  public $freshnessOptions;
  /** @var string[] */
  public $suggestionFilteringOperators;
  protected $collection_key = 'suggestionFilteringOperators';
  protected $displayOptionsType = ObjectDisplayOptions::class;
  protected $displayOptionsDataType = '';
  protected $freshnessOptionsType = FreshnessOptions::class;
  protected $freshnessOptionsDataType = '';
  /** @param ObjectDisplayOptions */
  public function setDisplayOptions(ObjectDisplayOptions $displayOptions)
  {
    $this->displayOptions = $displayOptions;
  }
  /** @return ObjectDisplayOptions */
  public function getDisplayOptions()
  {
    return $this->displayOptions;
  }
  /** @param FreshnessOptions */
  public function setFreshnessOptions(FreshnessOptions $freshnessOptions)
  {
    $this->freshnessOptions = $freshnessOptions;
  }
  /** @return FreshnessOptions */
  public function getFreshnessOptions()
  {
    return $this->freshnessOptions;
  }
  /** @param string[] */
  public function setSuggestionFilteringOperators($suggestionFilteringOperators)
  {
    $this->suggestionFilteringOperators = $suggestionFilteringOperators;
  }
  /** @return string[] */
  public function getSuggestionFilteringOperators()
  {
    return $this->suggestionFilteringOperators;
  }
}

class ObjectPropertyOptions extends \Google\Collection
{
  /** @var PropertyDefinition[] */
  public $subobjectProperties;
  protected $collection_key = 'subobjectProperties';
  protected $subobjectPropertiesType = PropertyDefinition::class;
  protected $subobjectPropertiesDataType = 'array';
  /** @param PropertyDefinition[] */
  public function setSubobjectProperties($subobjectProperties)
  {
    $this->subobjectProperties = $subobjectProperties;
  }
  /** @return PropertyDefinition[] */
  public function getSubobjectProperties()
  {
    return $this->subobjectProperties;
  }
}

class ObjectValues extends \Google\Collection
{
  /** @var StructuredDataObject[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = StructuredDataObject::class;
  protected $valuesDataType = 'array';
  /** @param StructuredDataObject[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return StructuredDataObject[] */
  public function getValues()
  {
    return $this->values;
  }
}

class OnClick extends \Google\Model
{
  /** @var FormAction */
  public $action;
  /** @var string */
  public $link;
  /** @var OpenLink */
  public $openLink;
  /** @var FormAction */
  public $openLinkAction;
  protected $actionType = FormAction::class;
  protected $actionDataType = '';
  protected $openLinkType = OpenLink::class;
  protected $openLinkDataType = '';
  protected $openLinkActionType = FormAction::class;
  protected $openLinkActionDataType = '';
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
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
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
  /** @param FormAction */
  public function setOpenLinkAction(FormAction $openLinkAction)
  {
    $this->openLinkAction = $openLinkAction;
  }
  /** @return FormAction */
  public function getOpenLinkAction()
  {
    return $this->openLinkAction;
  }
}

class OpenCreatedDraftActionMarkup extends \Google\Model
{
  /** @var string */
  public $draftId;
  /** @var string */
  public $draftStorageId;
  /** @var string */
  public $draftThreadId;
  /** @var string */
  public $draftThreadServerPermId;

  /** @param string */
  public function setDraftId($draftId)
  {
    $this->draftId = $draftId;
  }
  /** @return string */
  public function getDraftId()
  {
    return $this->draftId;
  }
  /** @param string */
  public function setDraftStorageId($draftStorageId)
  {
    $this->draftStorageId = $draftStorageId;
  }
  /** @return string */
  public function getDraftStorageId()
  {
    return $this->draftStorageId;
  }
  /** @param string */
  public function setDraftThreadId($draftThreadId)
  {
    $this->draftThreadId = $draftThreadId;
  }
  /** @return string */
  public function getDraftThreadId()
  {
    return $this->draftThreadId;
  }
  /** @param string */
  public function setDraftThreadServerPermId($draftThreadServerPermId)
  {
    $this->draftThreadServerPermId = $draftThreadServerPermId;
  }
  /** @return string */
  public function getDraftThreadServerPermId()
  {
    return $this->draftThreadServerPermId;
  }
}

class OpenLink extends \Google\Model
{
  /** @var string */
  public $loadIndicator;
  /** @var string */
  public $onClose;
  /** @var string */
  public $openAs;
  /** @var string */
  public $url;

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

class OsVersion extends \Google\Model
{
  /** @var int */
  public $majorVersion;
  /** @var int */
  public $minorVersion;
  /** @var int */
  public $tertiaryVersion;

  /** @param int */
  public function setMajorVersion($majorVersion)
  {
    $this->majorVersion = $majorVersion;
  }
  /** @return int */
  public function getMajorVersion()
  {
    return $this->majorVersion;
  }
  /** @param int */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /** @return int */
  public function getMinorVersion()
  {
    return $this->minorVersion;
  }
  /** @param int */
  public function setTertiaryVersion($tertiaryVersion)
  {
    $this->tertiaryVersion = $tertiaryVersion;
  }
  /** @return int */
  public function getTertiaryVersion()
  {
    return $this->tertiaryVersion;
  }
}

class OtrChatMessageEvent extends \Google\Model
{
  /** @var string */
  public $expirationTimestampUsec;
  /** @var string */
  public $kansasRowId;
  /** @var string */
  public $kansasVersionInfo;
  /** @var string */
  public $messageOtrStatus;

  /** @param string */
  public function setExpirationTimestampUsec($expirationTimestampUsec)
  {
    $this->expirationTimestampUsec = $expirationTimestampUsec;
  }
  /** @return string */
  public function getExpirationTimestampUsec()
  {
    return $this->expirationTimestampUsec;
  }
  /** @param string */
  public function setKansasRowId($kansasRowId)
  {
    $this->kansasRowId = $kansasRowId;
  }
  /** @return string */
  public function getKansasRowId()
  {
    return $this->kansasRowId;
  }
  /** @param string */
  public function setKansasVersionInfo($kansasVersionInfo)
  {
    $this->kansasVersionInfo = $kansasVersionInfo;
  }
  /** @return string */
  public function getKansasVersionInfo()
  {
    return $this->kansasVersionInfo;
  }
  /** @param string */
  public function setMessageOtrStatus($messageOtrStatus)
  {
    $this->messageOtrStatus = $messageOtrStatus;
  }
  /** @return string */
  public function getMessageOtrStatus()
  {
    return $this->messageOtrStatus;
  }
}

class OtrModificationEvent extends \Google\Model
{
  /** @var string */
  public $newOtrStatus;
  /** @var string */
  public $newOtrToggle;
  /** @var string */
  public $oldOtrStatus;
  /** @var string */
  public $oldOtrToggle;

  /** @param string */
  public function setNewOtrStatus($newOtrStatus)
  {
    $this->newOtrStatus = $newOtrStatus;
  }
  /** @return string */
  public function getNewOtrStatus()
  {
    return $this->newOtrStatus;
  }
  /** @param string */
  public function setNewOtrToggle($newOtrToggle)
  {
    $this->newOtrToggle = $newOtrToggle;
  }
  /** @return string */
  public function getNewOtrToggle()
  {
    return $this->newOtrToggle;
  }
  /** @param string */
  public function setOldOtrStatus($oldOtrStatus)
  {
    $this->oldOtrStatus = $oldOtrStatus;
  }
  /** @return string */
  public function getOldOtrStatus()
  {
    return $this->oldOtrStatus;
  }
  /** @param string */
  public function setOldOtrToggle($oldOtrToggle)
  {
    $this->oldOtrToggle = $oldOtrToggle;
  }
  /** @return string */
  public function getOldOtrToggle()
  {
    return $this->oldOtrToggle;
  }
}

class PackagingServiceClient extends \Google\Model
{
  /** @var string */
  public $androidPackageName;
  /** @var string */
  public $iosAppStoreId;
  /** @var string */
  public $iosBundleId;
  /** @var string */
  public $type;

  /** @param string */
  public function setAndroidPackageName($androidPackageName)
  {
    $this->androidPackageName = $androidPackageName;
  }
  /** @return string */
  public function getAndroidPackageName()
  {
    return $this->androidPackageName;
  }
  /** @param string */
  public function setIosAppStoreId($iosAppStoreId)
  {
    $this->iosAppStoreId = $iosAppStoreId;
  }
  /** @return string */
  public function getIosAppStoreId()
  {
    return $this->iosAppStoreId;
  }
  /** @param string */
  public function setIosBundleId($iosBundleId)
  {
    $this->iosBundleId = $iosBundleId;
  }
  /** @return string */
  public function getIosBundleId()
  {
    return $this->iosBundleId;
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

class PaygateInfo extends \Google\Model
{
  /** @var string */
  public $callEndingSoonWarningTime;
  /** @var string */
  public $callEndingTime;
  /** @var bool */
  public $showUpgradePromos;

  /** @param string */
  public function setCallEndingSoonWarningTime($callEndingSoonWarningTime)
  {
    $this->callEndingSoonWarningTime = $callEndingSoonWarningTime;
  }
  /** @return string */
  public function getCallEndingSoonWarningTime()
  {
    return $this->callEndingSoonWarningTime;
  }
  /** @param string */
  public function setCallEndingTime($callEndingTime)
  {
    $this->callEndingTime = $callEndingTime;
  }
  /** @return string */
  public function getCallEndingTime()
  {
    return $this->callEndingTime;
  }
  /** @param bool */
  public function setShowUpgradePromos($showUpgradePromos)
  {
    $this->showUpgradePromos = $showUpgradePromos;
  }
  /** @return bool */
  public function getShowUpgradePromos()
  {
    return $this->showUpgradePromos;
  }
}

class PeopleSuggestion extends \Google\Model
{
  /** @var Person */
  public $person;
  protected $personType = Person::class;
  protected $personDataType = '';
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
}

class Person extends \Google\Collection
{
  /** @var EmailAddress[] */
  public $emailAddresses;
  /** @var string */
  public $name;
  /** @var string */
  public $obfuscatedId;
  /** @var Name[] */
  public $personNames;
  /** @var PhoneNumber[] */
  public $phoneNumbers;
  /** @var Photo[] */
  public $photos;
  protected $collection_key = 'photos';
  protected $emailAddressesType = EmailAddress::class;
  protected $emailAddressesDataType = 'array';
  protected $personNamesType = Name::class;
  protected $personNamesDataType = 'array';
  protected $phoneNumbersType = PhoneNumber::class;
  protected $phoneNumbersDataType = 'array';
  protected $photosType = Photo::class;
  protected $photosDataType = 'array';
  /** @param EmailAddress[] */
  public function setEmailAddresses($emailAddresses)
  {
    $this->emailAddresses = $emailAddresses;
  }
  /** @return EmailAddress[] */
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
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
  public function setObfuscatedId($obfuscatedId)
  {
    $this->obfuscatedId = $obfuscatedId;
  }
  /** @return string */
  public function getObfuscatedId()
  {
    return $this->obfuscatedId;
  }
  /** @param Name[] */
  public function setPersonNames($personNames)
  {
    $this->personNames = $personNames;
  }
  /** @return Name[] */
  public function getPersonNames()
  {
    return $this->personNames;
  }
  /** @param PhoneNumber[] */
  public function setPhoneNumbers($phoneNumbers)
  {
    $this->phoneNumbers = $phoneNumbers;
  }
  /** @return PhoneNumber[] */
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
  /** @param Photo[] */
  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }
  /** @return Photo[] */
  public function getPhotos()
  {
    return $this->photos;
  }
}

class PersonalLabelTag extends \Google\Model
{
  /** @var string */
  public $labelId;

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
}

class PhoneAccess extends \Google\Model
{
  /** @var string */
  public $formattedPhoneNumber;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $pin;
  /** @var string */
  public $regionCode;

  /** @param string */
  public function setFormattedPhoneNumber($formattedPhoneNumber)
  {
    $this->formattedPhoneNumber = $formattedPhoneNumber;
  }
  /** @return string */
  public function getFormattedPhoneNumber()
  {
    return $this->formattedPhoneNumber;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /** @return string */
  public function getPin()
  {
    return $this->pin;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

class PhoneNumber extends \Google\Model
{
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $type;

  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
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

class Photo extends \Google\Model
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

class PinnedItemId extends \Google\Model
{
  /** @var string */
  public $driveId;

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
}

class PollItemsRequest extends \Google\Collection
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var int */
  public $limit;
  /** @var string */
  public $queue;
  /** @var string[] */
  public $statusCodes;
  protected $collection_key = 'statusCodes';
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param int */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return int */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param string */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /** @return string */
  public function getQueue()
  {
    return $this->queue;
  }
  /** @param string[] */
  public function setStatusCodes($statusCodes)
  {
    $this->statusCodes = $statusCodes;
  }
  /** @return string[] */
  public function getStatusCodes()
  {
    return $this->statusCodes;
  }
}

class PollItemsResponse extends \Google\Collection
{
  /** @var Item[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
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
}

class PossiblyTrimmedModel extends \Google\Model
{
  /** @var bool */
  public $isTrimmed;
  /** @var string */
  public $model;

  /** @param bool */
  public function setIsTrimmed($isTrimmed)
  {
    $this->isTrimmed = $isTrimmed;
  }
  /** @return bool */
  public function getIsTrimmed()
  {
    return $this->isTrimmed;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class PostiniUserProto extends \Google\Model
{
  /** @var string */
  public $postiniUserId;

  /** @param string */
  public function setPostiniUserId($postiniUserId)
  {
    $this->postiniUserId = $postiniUserId;
  }
  /** @return string */
  public function getPostiniUserId()
  {
    return $this->postiniUserId;
  }
}

class PreState extends \Google\Collection
{
  /** @var string[] */
  public $labelIds;
  /** @var MultiKey */
  public $messageKey;
  /** @var string[] */
  public $syncIds;
  /** @var MultiKey */
  public $threadKey;
  protected $collection_key = 'syncIds';
  protected $messageKeyType = MultiKey::class;
  protected $messageKeyDataType = '';
  protected $threadKeyType = MultiKey::class;
  protected $threadKeyDataType = '';
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
  /** @param MultiKey */
  public function setMessageKey(MultiKey $messageKey)
  {
    $this->messageKey = $messageKey;
  }
  /** @return MultiKey */
  public function getMessageKey()
  {
    return $this->messageKey;
  }
  /** @param string[] */
  public function setSyncIds($syncIds)
  {
    $this->syncIds = $syncIds;
  }
  /** @return string[] */
  public function getSyncIds()
  {
    return $this->syncIds;
  }
  /** @param MultiKey */
  public function setThreadKey(MultiKey $threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return MultiKey */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
}

class PrefDeleted extends \Google\Model
{
}

class PrefUpdate extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var FuseboxPrefUpdatePreState */
  public $preState;
  /** @var PrefDeleted */
  public $prefDeleted;
  /** @var PrefWritten */
  public $prefWritten;
  protected $preStateType = FuseboxPrefUpdatePreState::class;
  protected $preStateDataType = '';
  protected $prefDeletedType = PrefDeleted::class;
  protected $prefDeletedDataType = '';
  protected $prefWrittenType = PrefWritten::class;
  protected $prefWrittenDataType = '';
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
  /** @param FuseboxPrefUpdatePreState */
  public function setPreState(FuseboxPrefUpdatePreState $preState)
  {
    $this->preState = $preState;
  }
  /** @return FuseboxPrefUpdatePreState */
  public function getPreState()
  {
    return $this->preState;
  }
  /** @param PrefDeleted */
  public function setPrefDeleted(PrefDeleted $prefDeleted)
  {
    $this->prefDeleted = $prefDeleted;
  }
  /** @return PrefDeleted */
  public function getPrefDeleted()
  {
    return $this->prefDeleted;
  }
  /** @param PrefWritten */
  public function setPrefWritten(PrefWritten $prefWritten)
  {
    $this->prefWritten = $prefWritten;
  }
  /** @return PrefWritten */
  public function getPrefWritten()
  {
    return $this->prefWritten;
  }
}

class PrefWritten extends \Google\Model
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

class Presenter extends \Google\Collection
{
  /** @var string */
  public $byDeviceId;
  /** @var string[] */
  public $copresenterDeviceIds;
  /** @var string */
  public $presenterDeviceId;
  protected $collection_key = 'copresenterDeviceIds';
  /** @param string */
  public function setByDeviceId($byDeviceId)
  {
    $this->byDeviceId = $byDeviceId;
  }
  /** @return string */
  public function getByDeviceId()
  {
    return $this->byDeviceId;
  }
  /** @param string[] */
  public function setCopresenterDeviceIds($copresenterDeviceIds)
  {
    $this->copresenterDeviceIds = $copresenterDeviceIds;
  }
  /** @return string[] */
  public function getCopresenterDeviceIds()
  {
    return $this->copresenterDeviceIds;
  }
  /** @param string */
  public function setPresenterDeviceId($presenterDeviceId)
  {
    $this->presenterDeviceId = $presenterDeviceId;
  }
  /** @return string */
  public function getPresenterDeviceId()
  {
    return $this->presenterDeviceId;
  }
}

class Principal extends \Google\Model
{
  /** @var string */
  public $groupResourceName;
  /** @var GSuitePrincipal */
  public $gsuitePrincipal;
  /** @var string */
  public $userResourceName;
  protected $gsuitePrincipalType = GSuitePrincipal::class;
  protected $gsuitePrincipalDataType = '';
  /** @param string */
  public function setGroupResourceName($groupResourceName)
  {
    $this->groupResourceName = $groupResourceName;
  }
  /** @return string */
  public function getGroupResourceName()
  {
    return $this->groupResourceName;
  }
  /** @param GSuitePrincipal */
  public function setGsuitePrincipal(GSuitePrincipal $gsuitePrincipal)
  {
    $this->gsuitePrincipal = $gsuitePrincipal;
  }
  /** @return GSuitePrincipal */
  public function getGsuitePrincipal()
  {
    return $this->gsuitePrincipal;
  }
  /** @param string */
  public function setUserResourceName($userResourceName)
  {
    $this->userResourceName = $userResourceName;
  }
  /** @return string */
  public function getUserResourceName()
  {
    return $this->userResourceName;
  }
}

class PrincipalProto extends \Google\Model
{
  /** @var AllAuthenticatedUsersProto */
  public $allAuthenticatedUsers;
  /** @var CapTokenHolderProto */
  public $capTokenHolder;
  /** @var ChatProto */
  public $chat;
  /** @var CircleProto */
  public $circle;
  /** @var CloudPrincipalProto */
  public $cloudPrincipal;
  /** @var ContactGroupProto */
  public $contactGroup;
  /** @var EmailOwnerProto */
  public $emailOwner;
  /** @var EventProto */
  public $event;
  /** @var GaiaGroupProto */
  public $gaiaGroup;
  /** @var GaiaUserProto */
  public $gaiaUser;
  /** @var HostProto */
  public $host;
  /** @var LdapGroupProto */
  public $ldapGroup;
  /** @var LdapUserProto */
  public $ldapUser;
  /** @var MdbGroupProto */
  public $mdbGroup;
  /** @var MdbUserProto */
  public $mdbUser;
  /** @var OAuthConsumerProto */
  public $oauthConsumer;
  /** @var PostiniUserProto */
  public $postiniUser;
  /** @var RbacRoleProto */
  public $rbacRole;
  /** @var RbacSubjectProto */
  public $rbacSubject;
  /** @var ResourceRoleProto */
  public $resourceRole;
  /** @var string */
  public $scope;
  /** @var SigningKeyPossessorProto */
  public $signingKeyPossessor;
  /** @var SimpleSecretHolderProto */
  public $simpleSecretHolder;
  /** @var SocialGraphNodeProto */
  public $socialGraphNode;
  /** @var SquareProto */
  public $square;
  /** @var YoutubeUserProto */
  public $youtubeUser;
  /** @var ZwiebackSessionProto */
  public $zwiebackSession;
  protected $allAuthenticatedUsersType = AllAuthenticatedUsersProto::class;
  protected $allAuthenticatedUsersDataType = '';
  protected $capTokenHolderType = CapTokenHolderProto::class;
  protected $capTokenHolderDataType = '';
  protected $chatType = ChatProto::class;
  protected $chatDataType = '';
  protected $circleType = CircleProto::class;
  protected $circleDataType = '';
  protected $cloudPrincipalType = CloudPrincipalProto::class;
  protected $cloudPrincipalDataType = '';
  protected $contactGroupType = ContactGroupProto::class;
  protected $contactGroupDataType = '';
  protected $emailOwnerType = EmailOwnerProto::class;
  protected $emailOwnerDataType = '';
  protected $eventType = EventProto::class;
  protected $eventDataType = '';
  protected $gaiaGroupType = GaiaGroupProto::class;
  protected $gaiaGroupDataType = '';
  protected $gaiaUserType = GaiaUserProto::class;
  protected $gaiaUserDataType = '';
  protected $hostType = HostProto::class;
  protected $hostDataType = '';
  protected $ldapGroupType = LdapGroupProto::class;
  protected $ldapGroupDataType = '';
  protected $ldapUserType = LdapUserProto::class;
  protected $ldapUserDataType = '';
  protected $mdbGroupType = MdbGroupProto::class;
  protected $mdbGroupDataType = '';
  protected $mdbUserType = MdbUserProto::class;
  protected $mdbUserDataType = '';
  protected $oauthConsumerType = OAuthConsumerProto::class;
  protected $oauthConsumerDataType = '';
  protected $postiniUserType = PostiniUserProto::class;
  protected $postiniUserDataType = '';
  protected $rbacRoleType = RbacRoleProto::class;
  protected $rbacRoleDataType = '';
  protected $rbacSubjectType = RbacSubjectProto::class;
  protected $rbacSubjectDataType = '';
  protected $resourceRoleType = ResourceRoleProto::class;
  protected $resourceRoleDataType = '';
  protected $signingKeyPossessorType = SigningKeyPossessorProto::class;
  protected $signingKeyPossessorDataType = '';
  protected $simpleSecretHolderType = SimpleSecretHolderProto::class;
  protected $simpleSecretHolderDataType = '';
  protected $socialGraphNodeType = SocialGraphNodeProto::class;
  protected $socialGraphNodeDataType = '';
  protected $squareType = SquareProto::class;
  protected $squareDataType = '';
  protected $youtubeUserType = YoutubeUserProto::class;
  protected $youtubeUserDataType = '';
  protected $zwiebackSessionType = ZwiebackSessionProto::class;
  protected $zwiebackSessionDataType = '';
  /** @param AllAuthenticatedUsersProto */
  public function setAllAuthenticatedUsers(AllAuthenticatedUsersProto $allAuthenticatedUsers)
  {
    $this->allAuthenticatedUsers = $allAuthenticatedUsers;
  }
  /** @return AllAuthenticatedUsersProto */
  public function getAllAuthenticatedUsers()
  {
    return $this->allAuthenticatedUsers;
  }
  /** @param CapTokenHolderProto */
  public function setCapTokenHolder(CapTokenHolderProto $capTokenHolder)
  {
    $this->capTokenHolder = $capTokenHolder;
  }
  /** @return CapTokenHolderProto */
  public function getCapTokenHolder()
  {
    return $this->capTokenHolder;
  }
  /** @param ChatProto */
  public function setChat(ChatProto $chat)
  {
    $this->chat = $chat;
  }
  /** @return ChatProto */
  public function getChat()
  {
    return $this->chat;
  }
  /** @param CircleProto */
  public function setCircle(CircleProto $circle)
  {
    $this->circle = $circle;
  }
  /** @return CircleProto */
  public function getCircle()
  {
    return $this->circle;
  }
  /** @param CloudPrincipalProto */
  public function setCloudPrincipal(CloudPrincipalProto $cloudPrincipal)
  {
    $this->cloudPrincipal = $cloudPrincipal;
  }
  /** @return CloudPrincipalProto */
  public function getCloudPrincipal()
  {
    return $this->cloudPrincipal;
  }
  /** @param ContactGroupProto */
  public function setContactGroup(ContactGroupProto $contactGroup)
  {
    $this->contactGroup = $contactGroup;
  }
  /** @return ContactGroupProto */
  public function getContactGroup()
  {
    return $this->contactGroup;
  }
  /** @param EmailOwnerProto */
  public function setEmailOwner(EmailOwnerProto $emailOwner)
  {
    $this->emailOwner = $emailOwner;
  }
  /** @return EmailOwnerProto */
  public function getEmailOwner()
  {
    return $this->emailOwner;
  }
  /** @param EventProto */
  public function setEvent(EventProto $event)
  {
    $this->event = $event;
  }
  /** @return EventProto */
  public function getEvent()
  {
    return $this->event;
  }
  /** @param GaiaGroupProto */
  public function setGaiaGroup(GaiaGroupProto $gaiaGroup)
  {
    $this->gaiaGroup = $gaiaGroup;
  }
  /** @return GaiaGroupProto */
  public function getGaiaGroup()
  {
    return $this->gaiaGroup;
  }
  /** @param GaiaUserProto */
  public function setGaiaUser(GaiaUserProto $gaiaUser)
  {
    $this->gaiaUser = $gaiaUser;
  }
  /** @return GaiaUserProto */
  public function getGaiaUser()
  {
    return $this->gaiaUser;
  }
  /** @param HostProto */
  public function setHost(HostProto $host)
  {
    $this->host = $host;
  }
  /** @return HostProto */
  public function getHost()
  {
    return $this->host;
  }
  /** @param LdapGroupProto */
  public function setLdapGroup(LdapGroupProto $ldapGroup)
  {
    $this->ldapGroup = $ldapGroup;
  }
  /** @return LdapGroupProto */
  public function getLdapGroup()
  {
    return $this->ldapGroup;
  }
  /** @param LdapUserProto */
  public function setLdapUser(LdapUserProto $ldapUser)
  {
    $this->ldapUser = $ldapUser;
  }
  /** @return LdapUserProto */
  public function getLdapUser()
  {
    return $this->ldapUser;
  }
  /** @param MdbGroupProto */
  public function setMdbGroup(MdbGroupProto $mdbGroup)
  {
    $this->mdbGroup = $mdbGroup;
  }
  /** @return MdbGroupProto */
  public function getMdbGroup()
  {
    return $this->mdbGroup;
  }
  /** @param MdbUserProto */
  public function setMdbUser(MdbUserProto $mdbUser)
  {
    $this->mdbUser = $mdbUser;
  }
  /** @return MdbUserProto */
  public function getMdbUser()
  {
    return $this->mdbUser;
  }
  /** @param OAuthConsumerProto */
  public function setOauthConsumer(OAuthConsumerProto $oauthConsumer)
  {
    $this->oauthConsumer = $oauthConsumer;
  }
  /** @return OAuthConsumerProto */
  public function getOauthConsumer()
  {
    return $this->oauthConsumer;
  }
  /** @param PostiniUserProto */
  public function setPostiniUser(PostiniUserProto $postiniUser)
  {
    $this->postiniUser = $postiniUser;
  }
  /** @return PostiniUserProto */
  public function getPostiniUser()
  {
    return $this->postiniUser;
  }
  /** @param RbacRoleProto */
  public function setRbacRole(RbacRoleProto $rbacRole)
  {
    $this->rbacRole = $rbacRole;
  }
  /** @return RbacRoleProto */
  public function getRbacRole()
  {
    return $this->rbacRole;
  }
  /** @param RbacSubjectProto */
  public function setRbacSubject(RbacSubjectProto $rbacSubject)
  {
    $this->rbacSubject = $rbacSubject;
  }
  /** @return RbacSubjectProto */
  public function getRbacSubject()
  {
    return $this->rbacSubject;
  }
  /** @param ResourceRoleProto */
  public function setResourceRole(ResourceRoleProto $resourceRole)
  {
    $this->resourceRole = $resourceRole;
  }
  /** @return ResourceRoleProto */
  public function getResourceRole()
  {
    return $this->resourceRole;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param SigningKeyPossessorProto */
  public function setSigningKeyPossessor(SigningKeyPossessorProto $signingKeyPossessor)
  {
    $this->signingKeyPossessor = $signingKeyPossessor;
  }
  /** @return SigningKeyPossessorProto */
  public function getSigningKeyPossessor()
  {
    return $this->signingKeyPossessor;
  }
  /** @param SimpleSecretHolderProto */
  public function setSimpleSecretHolder(SimpleSecretHolderProto $simpleSecretHolder)
  {
    $this->simpleSecretHolder = $simpleSecretHolder;
  }
  /** @return SimpleSecretHolderProto */
  public function getSimpleSecretHolder()
  {
    return $this->simpleSecretHolder;
  }
  /** @param SocialGraphNodeProto */
  public function setSocialGraphNode(SocialGraphNodeProto $socialGraphNode)
  {
    $this->socialGraphNode = $socialGraphNode;
  }
  /** @return SocialGraphNodeProto */
  public function getSocialGraphNode()
  {
    return $this->socialGraphNode;
  }
  /** @param SquareProto */
  public function setSquare(SquareProto $square)
  {
    $this->square = $square;
  }
  /** @return SquareProto */
  public function getSquare()
  {
    return $this->square;
  }
  /** @param YoutubeUserProto */
  public function setYoutubeUser(YoutubeUserProto $youtubeUser)
  {
    $this->youtubeUser = $youtubeUser;
  }
  /** @return YoutubeUserProto */
  public function getYoutubeUser()
  {
    return $this->youtubeUser;
  }
  /** @param ZwiebackSessionProto */
  public function setZwiebackSession(ZwiebackSessionProto $zwiebackSession)
  {
    $this->zwiebackSession = $zwiebackSession;
  }
  /** @return ZwiebackSessionProto */
  public function getZwiebackSession()
  {
    return $this->zwiebackSession;
  }
}

class PrivateMessageInfo extends \Google\Collection
{
  /** @var Annotation[] */
  public $annotations;
  /** @var Attachment[] */
  public $attachments;
  /** @var GoogleChatV1ContextualAddOnMarkup[] */
  public $contextualAddOnMarkup;
  /** @var GsuiteIntegrationMetadata[] */
  public $gsuiteIntegrationMetadata;
  /** @var string */
  public $text;
  /** @var UserId */
  public $userId;
  protected $collection_key = 'gsuiteIntegrationMetadata';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  protected $contextualAddOnMarkupType = GoogleChatV1ContextualAddOnMarkup::class;
  protected $contextualAddOnMarkupDataType = 'array';
  protected $gsuiteIntegrationMetadataType = GsuiteIntegrationMetadata::class;
  protected $gsuiteIntegrationMetadataDataType = 'array';
  protected $userIdType = UserId::class;
  protected $userIdDataType = '';
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
  /** @param GoogleChatV1ContextualAddOnMarkup[] */
  public function setContextualAddOnMarkup($contextualAddOnMarkup)
  {
    $this->contextualAddOnMarkup = $contextualAddOnMarkup;
  }
  /** @return GoogleChatV1ContextualAddOnMarkup[] */
  public function getContextualAddOnMarkup()
  {
    return $this->contextualAddOnMarkup;
  }
  /** @param GsuiteIntegrationMetadata[] */
  public function setGsuiteIntegrationMetadata($gsuiteIntegrationMetadata)
  {
    $this->gsuiteIntegrationMetadata = $gsuiteIntegrationMetadata;
  }
  /** @return GsuiteIntegrationMetadata[] */
  public function getGsuiteIntegrationMetadata()
  {
    return $this->gsuiteIntegrationMetadata;
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
  /** @param UserId */
  public function setUserId(UserId $userId)
  {
    $this->userId = $userId;
  }
  /** @return UserId */
  public function getUserId()
  {
    return $this->userId;
  }
}

class ProcessingError extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var string */
  public $errorMessage;
  /** @var FieldViolation[] */
  public $fieldViolations;
  protected $collection_key = 'fieldViolations';
  protected $fieldViolationsType = FieldViolation::class;
  protected $fieldViolationsDataType = 'array';
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
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param FieldViolation[] */
  public function setFieldViolations($fieldViolations)
  {
    $this->fieldViolations = $fieldViolations;
  }
  /** @return FieldViolation[] */
  public function getFieldViolations()
  {
    return $this->fieldViolations;
  }
}

class PropertyDefinition extends \Google\Model
{
  /** @var BooleanPropertyOptions */
  public $booleanPropertyOptions;
  /** @var DatePropertyOptions */
  public $datePropertyOptions;
  /** @var PropertyDisplayOptions */
  public $displayOptions;
  /** @var DoublePropertyOptions */
  public $doublePropertyOptions;
  /** @var EnumPropertyOptions */
  public $enumPropertyOptions;
  /** @var HtmlPropertyOptions */
  public $htmlPropertyOptions;
  /** @var IntegerPropertyOptions */
  public $integerPropertyOptions;
  /** @var bool */
  public $isFacetable;
  /** @var bool */
  public $isRepeatable;
  /** @var bool */
  public $isReturnable;
  /** @var bool */
  public $isSortable;
  /** @var bool */
  public $isSuggestable;
  /** @var bool */
  public $isWildcardSearchable;
  /** @var string */
  public $name;
  /** @var ObjectPropertyOptions */
  public $objectPropertyOptions;
  /** @var TextPropertyOptions */
  public $textPropertyOptions;
  /** @var TimestampPropertyOptions */
  public $timestampPropertyOptions;
  protected $booleanPropertyOptionsType = BooleanPropertyOptions::class;
  protected $booleanPropertyOptionsDataType = '';
  protected $datePropertyOptionsType = DatePropertyOptions::class;
  protected $datePropertyOptionsDataType = '';
  protected $displayOptionsType = PropertyDisplayOptions::class;
  protected $displayOptionsDataType = '';
  protected $doublePropertyOptionsType = DoublePropertyOptions::class;
  protected $doublePropertyOptionsDataType = '';
  protected $enumPropertyOptionsType = EnumPropertyOptions::class;
  protected $enumPropertyOptionsDataType = '';
  protected $htmlPropertyOptionsType = HtmlPropertyOptions::class;
  protected $htmlPropertyOptionsDataType = '';
  protected $integerPropertyOptionsType = IntegerPropertyOptions::class;
  protected $integerPropertyOptionsDataType = '';
  protected $objectPropertyOptionsType = ObjectPropertyOptions::class;
  protected $objectPropertyOptionsDataType = '';
  protected $textPropertyOptionsType = TextPropertyOptions::class;
  protected $textPropertyOptionsDataType = '';
  protected $timestampPropertyOptionsType = TimestampPropertyOptions::class;
  protected $timestampPropertyOptionsDataType = '';
  /** @param BooleanPropertyOptions */
  public function setBooleanPropertyOptions(BooleanPropertyOptions $booleanPropertyOptions)
  {
    $this->booleanPropertyOptions = $booleanPropertyOptions;
  }
  /** @return BooleanPropertyOptions */
  public function getBooleanPropertyOptions()
  {
    return $this->booleanPropertyOptions;
  }
  /** @param DatePropertyOptions */
  public function setDatePropertyOptions(DatePropertyOptions $datePropertyOptions)
  {
    $this->datePropertyOptions = $datePropertyOptions;
  }
  /** @return DatePropertyOptions */
  public function getDatePropertyOptions()
  {
    return $this->datePropertyOptions;
  }
  /** @param PropertyDisplayOptions */
  public function setDisplayOptions(PropertyDisplayOptions $displayOptions)
  {
    $this->displayOptions = $displayOptions;
  }
  /** @return PropertyDisplayOptions */
  public function getDisplayOptions()
  {
    return $this->displayOptions;
  }
  /** @param DoublePropertyOptions */
  public function setDoublePropertyOptions(DoublePropertyOptions $doublePropertyOptions)
  {
    $this->doublePropertyOptions = $doublePropertyOptions;
  }
  /** @return DoublePropertyOptions */
  public function getDoublePropertyOptions()
  {
    return $this->doublePropertyOptions;
  }
  /** @param EnumPropertyOptions */
  public function setEnumPropertyOptions(EnumPropertyOptions $enumPropertyOptions)
  {
    $this->enumPropertyOptions = $enumPropertyOptions;
  }
  /** @return EnumPropertyOptions */
  public function getEnumPropertyOptions()
  {
    return $this->enumPropertyOptions;
  }
  /** @param HtmlPropertyOptions */
  public function setHtmlPropertyOptions(HtmlPropertyOptions $htmlPropertyOptions)
  {
    $this->htmlPropertyOptions = $htmlPropertyOptions;
  }
  /** @return HtmlPropertyOptions */
  public function getHtmlPropertyOptions()
  {
    return $this->htmlPropertyOptions;
  }
  /** @param IntegerPropertyOptions */
  public function setIntegerPropertyOptions(IntegerPropertyOptions $integerPropertyOptions)
  {
    $this->integerPropertyOptions = $integerPropertyOptions;
  }
  /** @return IntegerPropertyOptions */
  public function getIntegerPropertyOptions()
  {
    return $this->integerPropertyOptions;
  }
  /** @param bool */
  public function setIsFacetable($isFacetable)
  {
    $this->isFacetable = $isFacetable;
  }
  /** @return bool */
  public function getIsFacetable()
  {
    return $this->isFacetable;
  }
  /** @param bool */
  public function setIsRepeatable($isRepeatable)
  {
    $this->isRepeatable = $isRepeatable;
  }
  /** @return bool */
  public function getIsRepeatable()
  {
    return $this->isRepeatable;
  }
  /** @param bool */
  public function setIsReturnable($isReturnable)
  {
    $this->isReturnable = $isReturnable;
  }
  /** @return bool */
  public function getIsReturnable()
  {
    return $this->isReturnable;
  }
  /** @param bool */
  public function setIsSortable($isSortable)
  {
    $this->isSortable = $isSortable;
  }
  /** @return bool */
  public function getIsSortable()
  {
    return $this->isSortable;
  }
  /** @param bool */
  public function setIsSuggestable($isSuggestable)
  {
    $this->isSuggestable = $isSuggestable;
  }
  /** @return bool */
  public function getIsSuggestable()
  {
    return $this->isSuggestable;
  }
  /** @param bool */
  public function setIsWildcardSearchable($isWildcardSearchable)
  {
    $this->isWildcardSearchable = $isWildcardSearchable;
  }
  /** @return bool */
  public function getIsWildcardSearchable()
  {
    return $this->isWildcardSearchable;
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
  /** @param ObjectPropertyOptions */
  public function setObjectPropertyOptions(ObjectPropertyOptions $objectPropertyOptions)
  {
    $this->objectPropertyOptions = $objectPropertyOptions;
  }
  /** @return ObjectPropertyOptions */
  public function getObjectPropertyOptions()
  {
    return $this->objectPropertyOptions;
  }
  /** @param TextPropertyOptions */
  public function setTextPropertyOptions(TextPropertyOptions $textPropertyOptions)
  {
    $this->textPropertyOptions = $textPropertyOptions;
  }
  /** @return TextPropertyOptions */
  public function getTextPropertyOptions()
  {
    return $this->textPropertyOptions;
  }
  /** @param TimestampPropertyOptions */
  public function setTimestampPropertyOptions(TimestampPropertyOptions $timestampPropertyOptions)
  {
    $this->timestampPropertyOptions = $timestampPropertyOptions;
  }
  /** @return TimestampPropertyOptions */
  public function getTimestampPropertyOptions()
  {
    return $this->timestampPropertyOptions;
  }
}

class PropertyDisplayOptions extends \Google\Model
{
  /** @var string */
  public $displayLabel;

  /** @param string */
  public function setDisplayLabel($displayLabel)
  {
    $this->displayLabel = $displayLabel;
  }
  /** @return string */
  public function getDisplayLabel()
  {
    return $this->displayLabel;
  }
}

class Provenance extends \Google\Collection
{
  /** @var string */
  public $annotationBlob;
  /** @var string */
  public $canonicalUrl;
  /** @var string */
  public $inputUrl;
  /** @var string[] */
  public $itemtype;
  /** @var string */
  public $retrievedTimestampMsec;
  /** @var string */
  public $retrievedUrl;
  protected $collection_key = 'itemtype';
  /** @param string */
  public function setAnnotationBlob($annotationBlob)
  {
    $this->annotationBlob = $annotationBlob;
  }
  /** @return string */
  public function getAnnotationBlob()
  {
    return $this->annotationBlob;
  }
  /** @param string */
  public function setCanonicalUrl($canonicalUrl)
  {
    $this->canonicalUrl = $canonicalUrl;
  }
  /** @return string */
  public function getCanonicalUrl()
  {
    return $this->canonicalUrl;
  }
  /** @param string */
  public function setInputUrl($inputUrl)
  {
    $this->inputUrl = $inputUrl;
  }
  /** @return string */
  public function getInputUrl()
  {
    return $this->inputUrl;
  }
  /** @param string[] */
  public function setItemtype($itemtype)
  {
    $this->itemtype = $itemtype;
  }
  /** @return string[] */
  public function getItemtype()
  {
    return $this->itemtype;
  }
  /** @param string */
  public function setRetrievedTimestampMsec($retrievedTimestampMsec)
  {
    $this->retrievedTimestampMsec = $retrievedTimestampMsec;
  }
  /** @return string */
  public function getRetrievedTimestampMsec()
  {
    return $this->retrievedTimestampMsec;
  }
  /** @param string */
  public function setRetrievedUrl($retrievedUrl)
  {
    $this->retrievedUrl = $retrievedUrl;
  }
  /** @return string */
  public function getRetrievedUrl()
  {
    return $this->retrievedUrl;
  }
}

class PushItem extends \Google\Model
{
  /** @var string */
  public $contentHash;
  /** @var string */
  public $metadataHash;
  /** @var string */
  public $payload;
  /** @var string */
  public $queue;
  /** @var RepositoryError */
  public $repositoryError;
  /** @var string */
  public $structuredDataHash;
  /** @var string */
  public $type;
  protected $repositoryErrorType = RepositoryError::class;
  protected $repositoryErrorDataType = '';
  /** @param string */
  public function setContentHash($contentHash)
  {
    $this->contentHash = $contentHash;
  }
  /** @return string */
  public function getContentHash()
  {
    return $this->contentHash;
  }
  /** @param string */
  public function setMetadataHash($metadataHash)
  {
    $this->metadataHash = $metadataHash;
  }
  /** @return string */
  public function getMetadataHash()
  {
    return $this->metadataHash;
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
  /** @param string */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /** @return string */
  public function getQueue()
  {
    return $this->queue;
  }
  /** @param RepositoryError */
  public function setRepositoryError(RepositoryError $repositoryError)
  {
    $this->repositoryError = $repositoryError;
  }
  /** @return RepositoryError */
  public function getRepositoryError()
  {
    return $this->repositoryError;
  }
  /** @param string */
  public function setStructuredDataHash($structuredDataHash)
  {
    $this->structuredDataHash = $structuredDataHash;
  }
  /** @return string */
  public function getStructuredDataHash()
  {
    return $this->structuredDataHash;
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

class PushItemRequest extends \Google\Model
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var PushItem */
  public $item;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  protected $itemType = PushItem::class;
  protected $itemDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param PushItem */
  public function setItem(PushItem $item)
  {
    $this->item = $item;
  }
  /** @return PushItem */
  public function getItem()
  {
    return $this->item;
  }
}

class QueryCountByStatus extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var int */
  public $statusCode;

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
  /** @param int */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /** @return int */
  public function getStatusCode()
  {
    return $this->statusCode;
  }
}

class QueryInterpretation extends \Google\Model
{
  /** @var string */
  public $interpretationType;
  /** @var string */
  public $interpretedQuery;
  /** @var string */
  public $reason;

  /** @param string */
  public function setInterpretationType($interpretationType)
  {
    $this->interpretationType = $interpretationType;
  }
  /** @return string */
  public function getInterpretationType()
  {
    return $this->interpretationType;
  }
  /** @param string */
  public function setInterpretedQuery($interpretedQuery)
  {
    $this->interpretedQuery = $interpretedQuery;
  }
  /** @return string */
  public function getInterpretedQuery()
  {
    return $this->interpretedQuery;
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

class QueryInterpretationConfig extends \Google\Model
{
  /** @var bool */
  public $forceDisableSupplementalResults;
  /** @var bool */
  public $forceVerbatimMode;

  /** @param bool */
  public function setForceDisableSupplementalResults($forceDisableSupplementalResults)
  {
    $this->forceDisableSupplementalResults = $forceDisableSupplementalResults;
  }
  /** @return bool */
  public function getForceDisableSupplementalResults()
  {
    return $this->forceDisableSupplementalResults;
  }
  /** @param bool */
  public function setForceVerbatimMode($forceVerbatimMode)
  {
    $this->forceVerbatimMode = $forceVerbatimMode;
  }
  /** @return bool */
  public function getForceVerbatimMode()
  {
    return $this->forceVerbatimMode;
  }
}

class QueryInterpretationOptions extends \Google\Model
{
  /** @var bool */
  public $disableNlInterpretation;
  /** @var bool */
  public $disableSupplementalResults;
  /** @var bool */
  public $enableVerbatimMode;

  /** @param bool */
  public function setDisableNlInterpretation($disableNlInterpretation)
  {
    $this->disableNlInterpretation = $disableNlInterpretation;
  }
  /** @return bool */
  public function getDisableNlInterpretation()
  {
    return $this->disableNlInterpretation;
  }
  /** @param bool */
  public function setDisableSupplementalResults($disableSupplementalResults)
  {
    $this->disableSupplementalResults = $disableSupplementalResults;
  }
  /** @return bool */
  public function getDisableSupplementalResults()
  {
    return $this->disableSupplementalResults;
  }
  /** @param bool */
  public function setEnableVerbatimMode($enableVerbatimMode)
  {
    $this->enableVerbatimMode = $enableVerbatimMode;
  }
  /** @return bool */
  public function getEnableVerbatimMode()
  {
    return $this->enableVerbatimMode;
  }
}

class QueryItem extends \Google\Model
{
  /** @var bool */
  public $isSynthetic;

  /** @param bool */
  public function setIsSynthetic($isSynthetic)
  {
    $this->isSynthetic = $isSynthetic;
  }
  /** @return bool */
  public function getIsSynthetic()
  {
    return $this->isSynthetic;
  }
}

class QueryOperator extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $enumValues;
  /** @var string */
  public $greaterThanOperatorName;
  /** @var bool */
  public $isFacetable;
  /** @var bool */
  public $isRepeatable;
  /** @var bool */
  public $isReturnable;
  /** @var bool */
  public $isSortable;
  /** @var bool */
  public $isSuggestable;
  /** @var string */
  public $lessThanOperatorName;
  /** @var string */
  public $objectType;
  /** @var string */
  public $operatorName;
  /** @var string */
  public $type;
  protected $collection_key = 'enumValues';
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
  /** @param string[] */
  public function setEnumValues($enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /** @return string[] */
  public function getEnumValues()
  {
    return $this->enumValues;
  }
  /** @param string */
  public function setGreaterThanOperatorName($greaterThanOperatorName)
  {
    $this->greaterThanOperatorName = $greaterThanOperatorName;
  }
  /** @return string */
  public function getGreaterThanOperatorName()
  {
    return $this->greaterThanOperatorName;
  }
  /** @param bool */
  public function setIsFacetable($isFacetable)
  {
    $this->isFacetable = $isFacetable;
  }
  /** @return bool */
  public function getIsFacetable()
  {
    return $this->isFacetable;
  }
  /** @param bool */
  public function setIsRepeatable($isRepeatable)
  {
    $this->isRepeatable = $isRepeatable;
  }
  /** @return bool */
  public function getIsRepeatable()
  {
    return $this->isRepeatable;
  }
  /** @param bool */
  public function setIsReturnable($isReturnable)
  {
    $this->isReturnable = $isReturnable;
  }
  /** @return bool */
  public function getIsReturnable()
  {
    return $this->isReturnable;
  }
  /** @param bool */
  public function setIsSortable($isSortable)
  {
    $this->isSortable = $isSortable;
  }
  /** @return bool */
  public function getIsSortable()
  {
    return $this->isSortable;
  }
  /** @param bool */
  public function setIsSuggestable($isSuggestable)
  {
    $this->isSuggestable = $isSuggestable;
  }
  /** @return bool */
  public function getIsSuggestable()
  {
    return $this->isSuggestable;
  }
  /** @param string */
  public function setLessThanOperatorName($lessThanOperatorName)
  {
    $this->lessThanOperatorName = $lessThanOperatorName;
  }
  /** @return string */
  public function getLessThanOperatorName()
  {
    return $this->lessThanOperatorName;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
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

class QuerySource extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var QueryOperator[] */
  public $operators;
  /** @var string */
  public $shortName;
  /** @var Source */
  public $source;
  protected $collection_key = 'operators';
  protected $operatorsType = QueryOperator::class;
  protected $operatorsDataType = 'array';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
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
  /** @param QueryOperator[] */
  public function setOperators($operators)
  {
    $this->operators = $operators;
  }
  /** @return QueryOperator[] */
  public function getOperators()
  {
    return $this->operators;
  }
  /** @param string */
  public function setShortName($shortName)
  {
    $this->shortName = $shortName;
  }
  /** @return string */
  public function getShortName()
  {
    return $this->shortName;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class QuerySuggestion extends \Google\Model
{
}

class QuotedMessageMetadata extends \Google\Collection
{
  /** @var Annotation[] */
  public $annotations;
  /** @var AppsDynamiteSharedAppProfile */
  public $appProfile;
  /** @var string */
  public $botAttachmentState;
  /** @var string */
  public $createTimeMicros;
  /** @var UserId */
  public $creatorId;
  /** @var string */
  public $lastEditTimeMicros;
  /** @var string */
  public $lastUpdateTimeWhenQuotedMicros;
  /** @var MessageId */
  public $messageId;
  /** @var string */
  public $messageState;
  /** @var AppsDynamiteSharedRetentionSettings */
  public $retentionSettings;
  /** @var string */
  public $textBody;
  /** @var UserId */
  public $updaterId;
  /** @var UploadMetadata[] */
  public $uploadMetadata;
  protected $collection_key = 'uploadMetadata';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  protected $appProfileType = AppsDynamiteSharedAppProfile::class;
  protected $appProfileDataType = '';
  protected $creatorIdType = UserId::class;
  protected $creatorIdDataType = '';
  protected $messageIdType = MessageId::class;
  protected $messageIdDataType = '';
  protected $retentionSettingsType = AppsDynamiteSharedRetentionSettings::class;
  protected $retentionSettingsDataType = '';
  protected $updaterIdType = UserId::class;
  protected $updaterIdDataType = '';
  protected $uploadMetadataType = UploadMetadata::class;
  protected $uploadMetadataDataType = 'array';
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
  /** @param AppsDynamiteSharedAppProfile */
  public function setAppProfile(AppsDynamiteSharedAppProfile $appProfile)
  {
    $this->appProfile = $appProfile;
  }
  /** @return AppsDynamiteSharedAppProfile */
  public function getAppProfile()
  {
    return $this->appProfile;
  }
  /** @param string */
  public function setBotAttachmentState($botAttachmentState)
  {
    $this->botAttachmentState = $botAttachmentState;
  }
  /** @return string */
  public function getBotAttachmentState()
  {
    return $this->botAttachmentState;
  }
  /** @param string */
  public function setCreateTimeMicros($createTimeMicros)
  {
    $this->createTimeMicros = $createTimeMicros;
  }
  /** @return string */
  public function getCreateTimeMicros()
  {
    return $this->createTimeMicros;
  }
  /** @param UserId */
  public function setCreatorId(UserId $creatorId)
  {
    $this->creatorId = $creatorId;
  }
  /** @return UserId */
  public function getCreatorId()
  {
    return $this->creatorId;
  }
  /** @param string */
  public function setLastEditTimeMicros($lastEditTimeMicros)
  {
    $this->lastEditTimeMicros = $lastEditTimeMicros;
  }
  /** @return string */
  public function getLastEditTimeMicros()
  {
    return $this->lastEditTimeMicros;
  }
  /** @param string */
  public function setLastUpdateTimeWhenQuotedMicros($lastUpdateTimeWhenQuotedMicros)
  {
    $this->lastUpdateTimeWhenQuotedMicros = $lastUpdateTimeWhenQuotedMicros;
  }
  /** @return string */
  public function getLastUpdateTimeWhenQuotedMicros()
  {
    return $this->lastUpdateTimeWhenQuotedMicros;
  }
  /** @param MessageId */
  public function setMessageId(MessageId $messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return MessageId */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setMessageState($messageState)
  {
    $this->messageState = $messageState;
  }
  /** @return string */
  public function getMessageState()
  {
    return $this->messageState;
  }
  /** @param AppsDynamiteSharedRetentionSettings */
  public function setRetentionSettings(AppsDynamiteSharedRetentionSettings $retentionSettings)
  {
    $this->retentionSettings = $retentionSettings;
  }
  /** @return AppsDynamiteSharedRetentionSettings */
  public function getRetentionSettings()
  {
    return $this->retentionSettings;
  }
  /** @param string */
  public function setTextBody($textBody)
  {
    $this->textBody = $textBody;
  }
  /** @return string */
  public function getTextBody()
  {
    return $this->textBody;
  }
  /** @param UserId */
  public function setUpdaterId(UserId $updaterId)
  {
    $this->updaterId = $updaterId;
  }
  /** @return UserId */
  public function getUpdaterId()
  {
    return $this->updaterId;
  }
  /** @param UploadMetadata[] */
  public function setUploadMetadata($uploadMetadata)
  {
    $this->uploadMetadata = $uploadMetadata;
  }
  /** @return UploadMetadata[] */
  public function getUploadMetadata()
  {
    return $this->uploadMetadata;
  }
}

class Rank extends \Google\Model
{
  /** @var string */
  public $primary;
  /** @var string */
  public $secondary;

  /** @param string */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return string */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setSecondary($secondary)
  {
    $this->secondary = $secondary;
  }
  /** @return string */
  public function getSecondary()
  {
    return $this->secondary;
  }
}

class RbacRoleProto extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $objectId;
  /** @var string */
  public $rbacNamespace;
  /** @var string */
  public $rbacRoleName;

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
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setRbacNamespace($rbacNamespace)
  {
    $this->rbacNamespace = $rbacNamespace;
  }
  /** @return string */
  public function getRbacNamespace()
  {
    return $this->rbacNamespace;
  }
  /** @param string */
  public function setRbacRoleName($rbacRoleName)
  {
    $this->rbacRoleName = $rbacRoleName;
  }
  /** @return string */
  public function getRbacRoleName()
  {
    return $this->rbacRoleName;
  }
}

class RbacSubjectProto extends \Google\Model
{
  /** @var string */
  public $username;

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

class ReactionInfo extends \Google\Model
{
  /** @var string */
  public $emoji;

  /** @param string */
  public function setEmoji($emoji)
  {
    $this->emoji = $emoji;
  }
  /** @return string */
  public function getEmoji()
  {
    return $this->emoji;
  }
}

class ReadReceiptsSettingsUpdatedMetadata extends \Google\Model
{
  /** @var bool */
  public $readReceiptsEnabled;

  /** @param bool */
  public function setReadReceiptsEnabled($readReceiptsEnabled)
  {
    $this->readReceiptsEnabled = $readReceiptsEnabled;
  }
  /** @return bool */
  public function getReadReceiptsEnabled()
  {
    return $this->readReceiptsEnabled;
  }
}

class Recipient extends \Google\Model
{
  /** @var string */
  public $email;

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

class RecordingEvent extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $type;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
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

class RecordingInfo extends \Google\Model
{
  /** @var RecordingEvent */
  public $latestRecordingEvent;
  /** @var string */
  public $ownerDisplayName;
  /** @var string */
  public $producerDeviceId;
  /** @var string */
  public $recordingApplicationType;
  /** @var string */
  public $recordingId;
  /** @var string */
  public $recordingStatus;
  protected $latestRecordingEventType = RecordingEvent::class;
  protected $latestRecordingEventDataType = '';
  /** @param RecordingEvent */
  public function setLatestRecordingEvent(RecordingEvent $latestRecordingEvent)
  {
    $this->latestRecordingEvent = $latestRecordingEvent;
  }
  /** @return RecordingEvent */
  public function getLatestRecordingEvent()
  {
    return $this->latestRecordingEvent;
  }
  /** @param string */
  public function setOwnerDisplayName($ownerDisplayName)
  {
    $this->ownerDisplayName = $ownerDisplayName;
  }
  /** @return string */
  public function getOwnerDisplayName()
  {
    return $this->ownerDisplayName;
  }
  /** @param string */
  public function setProducerDeviceId($producerDeviceId)
  {
    $this->producerDeviceId = $producerDeviceId;
  }
  /** @return string */
  public function getProducerDeviceId()
  {
    return $this->producerDeviceId;
  }
  /** @param string */
  public function setRecordingApplicationType($recordingApplicationType)
  {
    $this->recordingApplicationType = $recordingApplicationType;
  }
  /** @return string */
  public function getRecordingApplicationType()
  {
    return $this->recordingApplicationType;
  }
  /** @param string */
  public function setRecordingId($recordingId)
  {
    $this->recordingId = $recordingId;
  }
  /** @return string */
  public function getRecordingId()
  {
    return $this->recordingId;
  }
  /** @param string */
  public function setRecordingStatus($recordingStatus)
  {
    $this->recordingStatus = $recordingStatus;
  }
  /** @return string */
  public function getRecordingStatus()
  {
    return $this->recordingStatus;
  }
}

class RecordingSessionInfo extends \Google\Model
{
  /** @var string */
  public $ownerEmail;
  /** @var string */
  public $recordingSessionId;
  /** @var SessionStateInfo */
  public $sessionStateInfo;
  protected $sessionStateInfoType = SessionStateInfo::class;
  protected $sessionStateInfoDataType = '';
  /** @param string */
  public function setOwnerEmail($ownerEmail)
  {
    $this->ownerEmail = $ownerEmail;
  }
  /** @return string */
  public function getOwnerEmail()
  {
    return $this->ownerEmail;
  }
  /** @param string */
  public function setRecordingSessionId($recordingSessionId)
  {
    $this->recordingSessionId = $recordingSessionId;
  }
  /** @return string */
  public function getRecordingSessionId()
  {
    return $this->recordingSessionId;
  }
  /** @param SessionStateInfo */
  public function setSessionStateInfo(SessionStateInfo $sessionStateInfo)
  {
    $this->sessionStateInfo = $sessionStateInfo;
  }
  /** @return SessionStateInfo */
  public function getSessionStateInfo()
  {
    return $this->sessionStateInfo;
  }
}

class Reference extends \Google\Model
{
  /** @var string */
  public $blobId;
  /** @var string */
  public $contentType;
  /** @var string */
  public $hash;
  /** @var string */
  public $key;
  /** @var string */
  public $name;
  /** @var string */
  public $size;

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
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
  }
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

class References extends \Google\Collection
{
  /** @var Reference[] */
  public $references;
  protected $collection_key = 'references';
  protected $referencesType = Reference::class;
  protected $referencesDataType = 'array';
  /** @param Reference[] */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /** @return Reference[] */
  public function getReferences()
  {
    return $this->references;
  }
}

class RenameEvent extends \Google\Model
{
  /** @var string */
  public $newName;
  /** @var string */
  public $originalName;

  /** @param string */
  public function setNewName($newName)
  {
    $this->newName = $newName;
  }
  /** @return string */
  public function getNewName()
  {
    return $this->newName;
  }
  /** @param string */
  public function setOriginalName($originalName)
  {
    $this->originalName = $originalName;
  }
  /** @return string */
  public function getOriginalName()
  {
    return $this->originalName;
  }
}

class RepositoryError extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var int */
  public $httpStatusCode;
  /** @var string */
  public $type;

  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param int */
  public function setHttpStatusCode($httpStatusCode)
  {
    $this->httpStatusCode = $httpStatusCode;
  }
  /** @return int */
  public function getHttpStatusCode()
  {
    return $this->httpStatusCode;
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

class RequestFileScope extends \Google\Model
{
  /** @var string */
  public $itemId;

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
}

class RequestFileScopeForActiveDocument extends \Google\Model
{
}

class RequestOptions extends \Google\Model
{
  /** @var DebugOptions */
  public $debugOptions;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $searchApplicationId;
  /** @var string */
  public $timeZone;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setSearchApplicationId($searchApplicationId)
  {
    $this->searchApplicationId = $searchApplicationId;
  }
  /** @return string */
  public function getSearchApplicationId()
  {
    return $this->searchApplicationId;
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
}

class RequiredMessageFeaturesMetadata extends \Google\Collection
{
  /** @var string[] */
  public $requiredFeatures;
  protected $collection_key = 'requiredFeatures';
  /** @param string[] */
  public function setRequiredFeatures($requiredFeatures)
  {
    $this->requiredFeatures = $requiredFeatures;
  }
  /** @return string[] */
  public function getRequiredFeatures()
  {
    return $this->requiredFeatures;
  }
}

class ResetSearchApplicationRequest extends \Google\Model
{
  /** @var DebugOptions */
  public $debugOptions;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
}

class ResourceRoleProto extends \Google\Model
{
  /** @var string */
  public $applicationId;
  /** @var string */
  public $objectId;
  /** @var string */
  public $objectPart;
  /** @var int */
  public $roleId;

  /** @param string */
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  /** @return string */
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setObjectPart($objectPart)
  {
    $this->objectPart = $objectPart;
  }
  /** @return string */
  public function getObjectPart()
  {
    return $this->objectPart;
  }
  /** @param int */
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;
  }
  /** @return int */
  public function getRoleId()
  {
    return $this->roleId;
  }
}

class ResponseDebugInfo extends \Google\Model
{
  /** @var string */
  public $formattedDebugInfo;

  /** @param string */
  public function setFormattedDebugInfo($formattedDebugInfo)
  {
    $this->formattedDebugInfo = $formattedDebugInfo;
  }
  /** @return string */
  public function getFormattedDebugInfo()
  {
    return $this->formattedDebugInfo;
  }
}

class RestrictItem extends \Google\Model
{
  /** @var DriveFollowUpRestrict */
  public $driveFollowUpRestrict;
  /** @var DriveLocationRestrict */
  public $driveLocationRestrict;
  /** @var DriveMimeTypeRestrict */
  public $driveMimeTypeRestrict;
  /** @var DriveTimeSpanRestrict */
  public $driveTimeSpanRestrict;
  /** @var string */
  public $searchOperator;
  protected $driveFollowUpRestrictType = DriveFollowUpRestrict::class;
  protected $driveFollowUpRestrictDataType = '';
  protected $driveLocationRestrictType = DriveLocationRestrict::class;
  protected $driveLocationRestrictDataType = '';
  protected $driveMimeTypeRestrictType = DriveMimeTypeRestrict::class;
  protected $driveMimeTypeRestrictDataType = '';
  protected $driveTimeSpanRestrictType = DriveTimeSpanRestrict::class;
  protected $driveTimeSpanRestrictDataType = '';
  /** @param DriveFollowUpRestrict */
  public function setDriveFollowUpRestrict(DriveFollowUpRestrict $driveFollowUpRestrict)
  {
    $this->driveFollowUpRestrict = $driveFollowUpRestrict;
  }
  /** @return DriveFollowUpRestrict */
  public function getDriveFollowUpRestrict()
  {
    return $this->driveFollowUpRestrict;
  }
  /** @param DriveLocationRestrict */
  public function setDriveLocationRestrict(DriveLocationRestrict $driveLocationRestrict)
  {
    $this->driveLocationRestrict = $driveLocationRestrict;
  }
  /** @return DriveLocationRestrict */
  public function getDriveLocationRestrict()
  {
    return $this->driveLocationRestrict;
  }
  /** @param DriveMimeTypeRestrict */
  public function setDriveMimeTypeRestrict(DriveMimeTypeRestrict $driveMimeTypeRestrict)
  {
    $this->driveMimeTypeRestrict = $driveMimeTypeRestrict;
  }
  /** @return DriveMimeTypeRestrict */
  public function getDriveMimeTypeRestrict()
  {
    return $this->driveMimeTypeRestrict;
  }
  /** @param DriveTimeSpanRestrict */
  public function setDriveTimeSpanRestrict(DriveTimeSpanRestrict $driveTimeSpanRestrict)
  {
    $this->driveTimeSpanRestrict = $driveTimeSpanRestrict;
  }
  /** @return DriveTimeSpanRestrict */
  public function getDriveTimeSpanRestrict()
  {
    return $this->driveTimeSpanRestrict;
  }
  /** @param string */
  public function setSearchOperator($searchOperator)
  {
    $this->searchOperator = $searchOperator;
  }
  /** @return string */
  public function getSearchOperator()
  {
    return $this->searchOperator;
  }
}

class ResultCounts extends \Google\Collection
{
  /** @var SourceResultCount[] */
  public $sourceResultCounts;
  protected $collection_key = 'sourceResultCounts';
  protected $sourceResultCountsType = SourceResultCount::class;
  protected $sourceResultCountsDataType = 'array';
  /** @param SourceResultCount[] */
  public function setSourceResultCounts($sourceResultCounts)
  {
    $this->sourceResultCounts = $sourceResultCounts;
  }
  /** @return SourceResultCount[] */
  public function getSourceResultCounts()
  {
    return $this->sourceResultCounts;
  }
}

class ResultDebugInfo extends \Google\Model
{
  /** @var string */
  public $formattedDebugInfo;

  /** @param string */
  public function setFormattedDebugInfo($formattedDebugInfo)
  {
    $this->formattedDebugInfo = $formattedDebugInfo;
  }
  /** @return string */
  public function getFormattedDebugInfo()
  {
    return $this->formattedDebugInfo;
  }
}

class ResultDisplayField extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $operatorName;
  /** @var NamedProperty */
  public $property;
  protected $propertyType = NamedProperty::class;
  protected $propertyDataType = '';
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
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
  /** @param NamedProperty */
  public function setProperty(NamedProperty $property)
  {
    $this->property = $property;
  }
  /** @return NamedProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class ResultDisplayLine extends \Google\Collection
{
  /** @var ResultDisplayField[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = ResultDisplayField::class;
  protected $fieldsDataType = 'array';
  /** @param ResultDisplayField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return ResultDisplayField[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class ResultDisplayMetadata extends \Google\Collection
{
  /** @var ResultDisplayLine[] */
  public $metalines;
  /** @var string */
  public $objectTypeLabel;
  protected $collection_key = 'metalines';
  protected $metalinesType = ResultDisplayLine::class;
  protected $metalinesDataType = 'array';
  /** @param ResultDisplayLine[] */
  public function setMetalines($metalines)
  {
    $this->metalines = $metalines;
  }
  /** @return ResultDisplayLine[] */
  public function getMetalines()
  {
    return $this->metalines;
  }
  /** @param string */
  public function setObjectTypeLabel($objectTypeLabel)
  {
    $this->objectTypeLabel = $objectTypeLabel;
  }
  /** @return string */
  public function getObjectTypeLabel()
  {
    return $this->objectTypeLabel;
  }
}

class RetrievalImportance extends \Google\Model
{
  /** @var string */
  public $importance;

  /** @param string */
  public function setImportance($importance)
  {
    $this->importance = $importance;
  }
  /** @return string */
  public function getImportance()
  {
    return $this->importance;
  }
}

class RoomRenameMetadata extends \Google\Model
{
  /** @var string */
  public $newName;
  /** @var string */
  public $prevName;

  /** @param string */
  public function setNewName($newName)
  {
    $this->newName = $newName;
  }
  /** @return string */
  public function getNewName()
  {
    return $this->newName;
  }
  /** @param string */
  public function setPrevName($prevName)
  {
    $this->prevName = $prevName;
  }
  /** @return string */
  public function getPrevName()
  {
    return $this->prevName;
  }
}

class RoomUpdatedMetadata extends \Google\Model
{
  /** @var GroupDetailsUpdatedMetadata */
  public $groupDetailsMetadata;
  /** @var bool */
  public $groupLinkSharingEnabled;
  /** @var User */
  public $initiator;
  /** @var string */
  public $initiatorType;
  /** @var string */
  public $name;
  /** @var RoomRenameMetadata */
  public $renameMetadata;
  /** @var AppsDynamiteSharedGroupVisibility */
  public $visibility;
  protected $groupDetailsMetadataType = GroupDetailsUpdatedMetadata::class;
  protected $groupDetailsMetadataDataType = '';
  protected $initiatorDataType = '';
  protected $renameMetadataType = RoomRenameMetadata::class;
  protected $renameMetadataDataType = '';
  protected $visibilityType = AppsDynamiteSharedGroupVisibility::class;
  protected $visibilityDataType = '';
  /** @param GroupDetailsUpdatedMetadata */
  public function setGroupDetailsMetadata(GroupDetailsUpdatedMetadata $groupDetailsMetadata)
  {
    $this->groupDetailsMetadata = $groupDetailsMetadata;
  }
  /** @return GroupDetailsUpdatedMetadata */
  public function getGroupDetailsMetadata()
  {
    return $this->groupDetailsMetadata;
  }
  /** @param bool */
  public function setGroupLinkSharingEnabled($groupLinkSharingEnabled)
  {
    $this->groupLinkSharingEnabled = $groupLinkSharingEnabled;
  }
  /** @return bool */
  public function getGroupLinkSharingEnabled()
  {
    return $this->groupLinkSharingEnabled;
  }
  /** @param User */
  public function setInitiator(User $initiator)
  {
    $this->initiator = $initiator;
  }
  /** @return User */
  public function getInitiator()
  {
    return $this->initiator;
  }
  /** @param string */
  public function setInitiatorType($initiatorType)
  {
    $this->initiatorType = $initiatorType;
  }
  /** @return string */
  public function getInitiatorType()
  {
    return $this->initiatorType;
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
  /** @param RoomRenameMetadata */
  public function setRenameMetadata(RoomRenameMetadata $renameMetadata)
  {
    $this->renameMetadata = $renameMetadata;
  }
  /** @return RoomRenameMetadata */
  public function getRenameMetadata()
  {
    return $this->renameMetadata;
  }
  /** @param AppsDynamiteSharedGroupVisibility */
  public function setVisibility(AppsDynamiteSharedGroupVisibility $visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return AppsDynamiteSharedGroupVisibility */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class Roster extends \Google\Model
{
  /** @var string */
  public $avatarUrl;
  /** @var RosterId */
  public $id;
  /** @var bool */
  public $isMembershipVisibleToCaller;
  /** @var int */
  public $membershipCount;
  /** @var string */
  public $name;
  /** @var string */
  public $rosterGaiaKey;
  /** @var string */
  public $rosterState;
  /** @var AppsDynamiteSharedSegmentedMembershipCounts */
  public $segmentedMembershipCounts;
  protected $idType = RosterId::class;
  protected $idDataType = '';
  protected $segmentedMembershipCountsType = AppsDynamiteSharedSegmentedMembershipCounts::class;
  protected $segmentedMembershipCountsDataType = '';
  /** @param string */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /** @return string */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
  }
  /** @param RosterId */
  public function setId(RosterId $id)
  {
    $this->id = $id;
  }
  /** @return RosterId */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setIsMembershipVisibleToCaller($isMembershipVisibleToCaller)
  {
    $this->isMembershipVisibleToCaller = $isMembershipVisibleToCaller;
  }
  /** @return bool */
  public function getIsMembershipVisibleToCaller()
  {
    return $this->isMembershipVisibleToCaller;
  }
  /** @param int */
  public function setMembershipCount($membershipCount)
  {
    $this->membershipCount = $membershipCount;
  }
  /** @return int */
  public function getMembershipCount()
  {
    return $this->membershipCount;
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
  public function setRosterGaiaKey($rosterGaiaKey)
  {
    $this->rosterGaiaKey = $rosterGaiaKey;
  }
  /** @return string */
  public function getRosterGaiaKey()
  {
    return $this->rosterGaiaKey;
  }
  /** @param string */
  public function setRosterState($rosterState)
  {
    $this->rosterState = $rosterState;
  }
  /** @return string */
  public function getRosterState()
  {
    return $this->rosterState;
  }
  /** @param AppsDynamiteSharedSegmentedMembershipCounts */
  public function setSegmentedMembershipCounts(AppsDynamiteSharedSegmentedMembershipCounts $segmentedMembershipCounts)
  {
    $this->segmentedMembershipCounts = $segmentedMembershipCounts;
  }
  /** @return AppsDynamiteSharedSegmentedMembershipCounts */
  public function getSegmentedMembershipCounts()
  {
    return $this->segmentedMembershipCounts;
  }
}

class RosterId extends \Google\Model
{
  /** @var string */
  public $id;

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

class RpcOptions extends \Google\Model
{
  /** @var MessageSet */
  public $requestExtensions;
  protected $requestExtensionsType = MessageSet::class;
  protected $requestExtensionsDataType = '';
  /** @param MessageSet */
  public function setRequestExtensions(MessageSet $requestExtensions)
  {
    $this->requestExtensions = $requestExtensions;
  }
  /** @return MessageSet */
  public function getRequestExtensions()
  {
    return $this->requestExtensions;
  }
}

class SafeUrlProto extends \Google\Model
{
  /** @var string */
  public $privateDoNotAccessOrElseSafeUrlWrappedValue;

  /** @param string */
  public function setPrivateDoNotAccessOrElseSafeUrlWrappedValue($privateDoNotAccessOrElseSafeUrlWrappedValue)
  {
    $this->privateDoNotAccessOrElseSafeUrlWrappedValue = $privateDoNotAccessOrElseSafeUrlWrappedValue;
  }
  /** @return string */
  public function getPrivateDoNotAccessOrElseSafeUrlWrappedValue()
  {
    return $this->privateDoNotAccessOrElseSafeUrlWrappedValue;
  }
}

class Schema extends \Google\Collection
{
  /** @var ObjectDefinition[] */
  public $objectDefinitions;
  /** @var string[] */
  public $operationIds;
  protected $collection_key = 'operationIds';
  protected $objectDefinitionsType = ObjectDefinition::class;
  protected $objectDefinitionsDataType = 'array';
  /** @param ObjectDefinition[] */
  public function setObjectDefinitions($objectDefinitions)
  {
    $this->objectDefinitions = $objectDefinitions;
  }
  /** @return ObjectDefinition[] */
  public function getObjectDefinitions()
  {
    return $this->objectDefinitions;
  }
  /** @param string[] */
  public function setOperationIds($operationIds)
  {
    $this->operationIds = $operationIds;
  }
  /** @return string[] */
  public function getOperationIds()
  {
    return $this->operationIds;
  }
}

class ScoringConfig extends \Google\Model
{
  /** @var bool */
  public $disableFreshness;
  /** @var bool */
  public $disablePersonalization;

  /** @param bool */
  public function setDisableFreshness($disableFreshness)
  {
    $this->disableFreshness = $disableFreshness;
  }
  /** @return bool */
  public function getDisableFreshness()
  {
    return $this->disableFreshness;
  }
  /** @param bool */
  public function setDisablePersonalization($disablePersonalization)
  {
    $this->disablePersonalization = $disablePersonalization;
  }
  /** @return bool */
  public function getDisablePersonalization()
  {
    return $this->disablePersonalization;
  }
}

class SearchApplication extends \Google\Collection
{
  /** @var DataSourceRestriction[] */
  public $dataSourceRestrictions;
  /** @var FacetOptions[] */
  public $defaultFacetOptions;
  /** @var SortOptions */
  public $defaultSortOptions;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableAuditLog;
  /** @var string */
  public $name;
  /** @var string[] */
  public $operationIds;
  /** @var QueryInterpretationConfig */
  public $queryInterpretationConfig;
  /** @var bool */
  public $returnResultThumbnailUrls;
  /** @var ScoringConfig */
  public $scoringConfig;
  /** @var SourceConfig[] */
  public $sourceConfig;
  protected $collection_key = 'sourceConfig';
  protected $dataSourceRestrictionsType = DataSourceRestriction::class;
  protected $dataSourceRestrictionsDataType = 'array';
  protected $defaultFacetOptionsType = FacetOptions::class;
  protected $defaultFacetOptionsDataType = 'array';
  protected $defaultSortOptionsType = SortOptions::class;
  protected $defaultSortOptionsDataType = '';
  protected $queryInterpretationConfigType = QueryInterpretationConfig::class;
  protected $queryInterpretationConfigDataType = '';
  protected $scoringConfigType = ScoringConfig::class;
  protected $scoringConfigDataType = '';
  protected $sourceConfigType = SourceConfig::class;
  protected $sourceConfigDataType = 'array';
  /** @param DataSourceRestriction[] */
  public function setDataSourceRestrictions($dataSourceRestrictions)
  {
    $this->dataSourceRestrictions = $dataSourceRestrictions;
  }
  /** @return DataSourceRestriction[] */
  public function getDataSourceRestrictions()
  {
    return $this->dataSourceRestrictions;
  }
  /** @param FacetOptions[] */
  public function setDefaultFacetOptions($defaultFacetOptions)
  {
    $this->defaultFacetOptions = $defaultFacetOptions;
  }
  /** @return FacetOptions[] */
  public function getDefaultFacetOptions()
  {
    return $this->defaultFacetOptions;
  }
  /** @param SortOptions */
  public function setDefaultSortOptions(SortOptions $defaultSortOptions)
  {
    $this->defaultSortOptions = $defaultSortOptions;
  }
  /** @return SortOptions */
  public function getDefaultSortOptions()
  {
    return $this->defaultSortOptions;
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
  public function setEnableAuditLog($enableAuditLog)
  {
    $this->enableAuditLog = $enableAuditLog;
  }
  /** @return bool */
  public function getEnableAuditLog()
  {
    return $this->enableAuditLog;
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
  /** @param string[] */
  public function setOperationIds($operationIds)
  {
    $this->operationIds = $operationIds;
  }
  /** @return string[] */
  public function getOperationIds()
  {
    return $this->operationIds;
  }
  /** @param QueryInterpretationConfig */
  public function setQueryInterpretationConfig(QueryInterpretationConfig $queryInterpretationConfig)
  {
    $this->queryInterpretationConfig = $queryInterpretationConfig;
  }
  /** @return QueryInterpretationConfig */
  public function getQueryInterpretationConfig()
  {
    return $this->queryInterpretationConfig;
  }
  /** @param bool */
  public function setReturnResultThumbnailUrls($returnResultThumbnailUrls)
  {
    $this->returnResultThumbnailUrls = $returnResultThumbnailUrls;
  }
  /** @return bool */
  public function getReturnResultThumbnailUrls()
  {
    return $this->returnResultThumbnailUrls;
  }
  /** @param ScoringConfig */
  public function setScoringConfig(ScoringConfig $scoringConfig)
  {
    $this->scoringConfig = $scoringConfig;
  }
  /** @return ScoringConfig */
  public function getScoringConfig()
  {
    return $this->scoringConfig;
  }
  /** @param SourceConfig[] */
  public function setSourceConfig($sourceConfig)
  {
    $this->sourceConfig = $sourceConfig;
  }
  /** @return SourceConfig[] */
  public function getSourceConfig()
  {
    return $this->sourceConfig;
  }
}

class SearchApplicationQueryStats extends \Google\Collection
{
  /** @var Date */
  public $date;
  /** @var QueryCountByStatus[] */
  public $queryCountByStatus;
  protected $collection_key = 'queryCountByStatus';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $queryCountByStatusType = QueryCountByStatus::class;
  protected $queryCountByStatusDataType = 'array';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param QueryCountByStatus[] */
  public function setQueryCountByStatus($queryCountByStatus)
  {
    $this->queryCountByStatus = $queryCountByStatus;
  }
  /** @return QueryCountByStatus[] */
  public function getQueryCountByStatus()
  {
    return $this->queryCountByStatus;
  }
}

class SearchApplicationSessionStats extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $searchSessionsCount;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setSearchSessionsCount($searchSessionsCount)
  {
    $this->searchSessionsCount = $searchSessionsCount;
  }
  /** @return string */
  public function getSearchSessionsCount()
  {
    return $this->searchSessionsCount;
  }
}

class SearchApplicationUserStats extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $oneDayActiveUsersCount;
  /** @var string */
  public $sevenDaysActiveUsersCount;
  /** @var string */
  public $thirtyDaysActiveUsersCount;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setOneDayActiveUsersCount($oneDayActiveUsersCount)
  {
    $this->oneDayActiveUsersCount = $oneDayActiveUsersCount;
  }
  /** @return string */
  public function getOneDayActiveUsersCount()
  {
    return $this->oneDayActiveUsersCount;
  }
  /** @param string */
  public function setSevenDaysActiveUsersCount($sevenDaysActiveUsersCount)
  {
    $this->sevenDaysActiveUsersCount = $sevenDaysActiveUsersCount;
  }
  /** @return string */
  public function getSevenDaysActiveUsersCount()
  {
    return $this->sevenDaysActiveUsersCount;
  }
  /** @param string */
  public function setThirtyDaysActiveUsersCount($thirtyDaysActiveUsersCount)
  {
    $this->thirtyDaysActiveUsersCount = $thirtyDaysActiveUsersCount;
  }
  /** @return string */
  public function getThirtyDaysActiveUsersCount()
  {
    return $this->thirtyDaysActiveUsersCount;
  }
}

class SearchItemsByViewUrlRequest extends \Google\Model
{
  /** @var DebugOptions */
  public $debugOptions;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $viewUrl;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string */
  public function setViewUrl($viewUrl)
  {
    $this->viewUrl = $viewUrl;
  }
  /** @return string */
  public function getViewUrl()
  {
    return $this->viewUrl;
  }
}

class SearchItemsByViewUrlResponse extends \Google\Collection
{
  /** @var Item[] */
  public $items;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
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

class SearchQualityMetadata extends \Google\Model
{
  public $quality;

  public function setQuality($quality)
  {
    $this->quality = $quality;
  }
  public function getQuality()
  {
    return $this->quality;
  }
}

class SearchRequest extends \Google\Collection
{
  /** @var ContextAttribute[] */
  public $contextAttributes;
  /** @var DataSourceRestriction[] */
  public $dataSourceRestrictions;
  /** @var FacetOptions[] */
  public $facetOptions;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $query;
  /** @var QueryInterpretationOptions */
  public $queryInterpretationOptions;
  /** @var RequestOptions */
  public $requestOptions;
  /** @var SortOptions */
  public $sortOptions;
  /** @var int */
  public $start;
  protected $collection_key = 'facetOptions';
  protected $contextAttributesType = ContextAttribute::class;
  protected $contextAttributesDataType = 'array';
  protected $dataSourceRestrictionsType = DataSourceRestriction::class;
  protected $dataSourceRestrictionsDataType = 'array';
  protected $facetOptionsType = FacetOptions::class;
  protected $facetOptionsDataType = 'array';
  protected $queryInterpretationOptionsType = QueryInterpretationOptions::class;
  protected $queryInterpretationOptionsDataType = '';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $sortOptionsType = SortOptions::class;
  protected $sortOptionsDataType = '';
  /** @param ContextAttribute[] */
  public function setContextAttributes($contextAttributes)
  {
    $this->contextAttributes = $contextAttributes;
  }
  /** @return ContextAttribute[] */
  public function getContextAttributes()
  {
    return $this->contextAttributes;
  }
  /** @param DataSourceRestriction[] */
  public function setDataSourceRestrictions($dataSourceRestrictions)
  {
    $this->dataSourceRestrictions = $dataSourceRestrictions;
  }
  /** @return DataSourceRestriction[] */
  public function getDataSourceRestrictions()
  {
    return $this->dataSourceRestrictions;
  }
  /** @param FacetOptions[] */
  public function setFacetOptions($facetOptions)
  {
    $this->facetOptions = $facetOptions;
  }
  /** @return FacetOptions[] */
  public function getFacetOptions()
  {
    return $this->facetOptions;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
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
  /** @param QueryInterpretationOptions */
  public function setQueryInterpretationOptions(QueryInterpretationOptions $queryInterpretationOptions)
  {
    $this->queryInterpretationOptions = $queryInterpretationOptions;
  }
  /** @return QueryInterpretationOptions */
  public function getQueryInterpretationOptions()
  {
    return $this->queryInterpretationOptions;
  }
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /** @param SortOptions */
  public function setSortOptions(SortOptions $sortOptions)
  {
    $this->sortOptions = $sortOptions;
  }
  /** @return SortOptions */
  public function getSortOptions()
  {
    return $this->sortOptions;
  }
  /** @param int */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return int */
  public function getStart()
  {
    return $this->start;
  }
}

class SearchResponse extends \Google\Collection
{
  /** @var ResponseDebugInfo */
  public $debugInfo;
  /** @var ErrorInfo */
  public $errorInfo;
  /** @var FacetResult[] */
  public $facetResults;
  /** @var bool */
  public $hasMoreResults;
  /** @var QueryInterpretation */
  public $queryInterpretation;
  /** @var string */
  public $resultCountEstimate;
  /** @var string */
  public $resultCountExact;
  /** @var ResultCounts */
  public $resultCounts;
  /** @var SearchResult[] */
  public $results;
  /** @var SpellResult[] */
  public $spellResults;
  /** @var StructuredResult[] */
  public $structuredResults;
  protected $collection_key = 'structuredResults';
  protected $debugInfoType = ResponseDebugInfo::class;
  protected $debugInfoDataType = '';
  protected $errorInfoType = ErrorInfo::class;
  protected $errorInfoDataType = '';
  protected $facetResultsType = FacetResult::class;
  protected $facetResultsDataType = 'array';
  protected $queryInterpretationType = QueryInterpretation::class;
  protected $queryInterpretationDataType = '';
  protected $resultCountsType = ResultCounts::class;
  protected $resultCountsDataType = '';
  protected $resultsType = SearchResult::class;
  protected $resultsDataType = 'array';
  protected $spellResultsType = SpellResult::class;
  protected $spellResultsDataType = 'array';
  protected $structuredResultsType = StructuredResult::class;
  protected $structuredResultsDataType = 'array';
  /** @param ResponseDebugInfo */
  public function setDebugInfo(ResponseDebugInfo $debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }
  /** @return ResponseDebugInfo */
  public function getDebugInfo()
  {
    return $this->debugInfo;
  }
  /** @param ErrorInfo */
  public function setErrorInfo(ErrorInfo $errorInfo)
  {
    $this->errorInfo = $errorInfo;
  }
  /** @return ErrorInfo */
  public function getErrorInfo()
  {
    return $this->errorInfo;
  }
  /** @param FacetResult[] */
  public function setFacetResults($facetResults)
  {
    $this->facetResults = $facetResults;
  }
  /** @return FacetResult[] */
  public function getFacetResults()
  {
    return $this->facetResults;
  }
  /** @param bool */
  public function setHasMoreResults($hasMoreResults)
  {
    $this->hasMoreResults = $hasMoreResults;
  }
  /** @return bool */
  public function getHasMoreResults()
  {
    return $this->hasMoreResults;
  }
  /** @param QueryInterpretation */
  public function setQueryInterpretation(QueryInterpretation $queryInterpretation)
  {
    $this->queryInterpretation = $queryInterpretation;
  }
  /** @return QueryInterpretation */
  public function getQueryInterpretation()
  {
    return $this->queryInterpretation;
  }
  /** @param string */
  public function setResultCountEstimate($resultCountEstimate)
  {
    $this->resultCountEstimate = $resultCountEstimate;
  }
  /** @return string */
  public function getResultCountEstimate()
  {
    return $this->resultCountEstimate;
  }
  /** @param string */
  public function setResultCountExact($resultCountExact)
  {
    $this->resultCountExact = $resultCountExact;
  }
  /** @return string */
  public function getResultCountExact()
  {
    return $this->resultCountExact;
  }
  /** @param ResultCounts */
  public function setResultCounts(ResultCounts $resultCounts)
  {
    $this->resultCounts = $resultCounts;
  }
  /** @return ResultCounts */
  public function getResultCounts()
  {
    return $this->resultCounts;
  }
  /** @param SearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return SearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param SpellResult[] */
  public function setSpellResults($spellResults)
  {
    $this->spellResults = $spellResults;
  }
  /** @return SpellResult[] */
  public function getSpellResults()
  {
    return $this->spellResults;
  }
  /** @param StructuredResult[] */
  public function setStructuredResults($structuredResults)
  {
    $this->structuredResults = $structuredResults;
  }
  /** @return StructuredResult[] */
  public function getStructuredResults()
  {
    return $this->structuredResults;
  }
}

class SearchResult extends \Google\Collection
{
  /** @var SearchResult[] */
  public $clusteredResults;
  /** @var ResultDebugInfo */
  public $debugInfo;
  /** @var Metadata */
  public $metadata;
  /** @var Snippet */
  public $snippet;
  /** @var string */
  public $title;
  /** @var string */
  public $url;
  protected $collection_key = 'clusteredResults';
  protected $clusteredResultsType = SearchResult::class;
  protected $clusteredResultsDataType = 'array';
  protected $debugInfoType = ResultDebugInfo::class;
  protected $debugInfoDataType = '';
  protected $metadataType = Metadata::class;
  protected $metadataDataType = '';
  protected $snippetType = Snippet::class;
  protected $snippetDataType = '';
  /** @param SearchResult[] */
  public function setClusteredResults($clusteredResults)
  {
    $this->clusteredResults = $clusteredResults;
  }
  /** @return SearchResult[] */
  public function getClusteredResults()
  {
    return $this->clusteredResults;
  }
  /** @param ResultDebugInfo */
  public function setDebugInfo(ResultDebugInfo $debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }
  /** @return ResultDebugInfo */
  public function getDebugInfo()
  {
    return $this->debugInfo;
  }
  /** @param Metadata */
  public function setMetadata(Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param Snippet */
  public function setSnippet(Snippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return Snippet */
  public function getSnippet()
  {
    return $this->snippet;
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
  /** @var bool */
  public $collapsable;
  /** @var string */
  public $description;
  /** @var int */
  public $numUncollapsableWidgets;
  /** @var WidgetMarkup[] */
  public $widgets;
  protected $collection_key = 'widgets';
  protected $widgetsType = WidgetMarkup::class;
  protected $widgetsDataType = 'array';
  /** @param bool */
  public function setCollapsable($collapsable)
  {
    $this->collapsable = $collapsable;
  }
  /** @return bool */
  public function getCollapsable()
  {
    return $this->collapsable;
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
  /** @param int */
  public function setNumUncollapsableWidgets($numUncollapsableWidgets)
  {
    $this->numUncollapsableWidgets = $numUncollapsableWidgets;
  }
  /** @return int */
  public function getNumUncollapsableWidgets()
  {
    return $this->numUncollapsableWidgets;
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

class Segment extends \Google\Model
{
  /** @var Formatting */
  public $formatting;
  /** @var HashtagData */
  public $hashtagData;
  /** @var LinkData */
  public $linkData;
  /** @var string */
  public $text;
  /** @var string */
  public $type;
  /** @var UserMentionData */
  public $userMentionData;
  protected $formattingType = Formatting::class;
  protected $formattingDataType = '';
  protected $hashtagDataType = HashtagData::class;
  protected $hashtagDataDataType = '';
  protected $linkDataType = LinkData::class;
  protected $linkDataDataType = '';
  protected $userMentionDataType = UserMentionData::class;
  protected $userMentionDataDataType = '';
  /** @param Formatting */
  public function setFormatting(Formatting $formatting)
  {
    $this->formatting = $formatting;
  }
  /** @return Formatting */
  public function getFormatting()
  {
    return $this->formatting;
  }
  /** @param HashtagData */
  public function setHashtagData(HashtagData $hashtagData)
  {
    $this->hashtagData = $hashtagData;
  }
  /** @return HashtagData */
  public function getHashtagData()
  {
    return $this->hashtagData;
  }
  /** @param LinkData */
  public function setLinkData(LinkData $linkData)
  {
    $this->linkData = $linkData;
  }
  /** @return LinkData */
  public function getLinkData()
  {
    return $this->linkData;
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
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param UserMentionData */
  public function setUserMentionData(UserMentionData $userMentionData)
  {
    $this->userMentionData = $userMentionData;
  }
  /** @return UserMentionData */
  public function getUserMentionData()
  {
    return $this->userMentionData;
  }
}

class SelectionControl extends \Google\Collection
{
  /** @var SelectionItem[] */
  public $items;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var FormAction */
  public $onChange;
  /** @var string */
  public $type;
  protected $collection_key = 'items';
  protected $itemsType = SelectionItem::class;
  protected $itemsDataType = 'array';
  protected $onChangeType = FormAction::class;
  protected $onChangeDataType = '';
  /** @param SelectionItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SelectionItem[] */
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
  /** @param FormAction */
  public function setOnChange(FormAction $onChange)
  {
    $this->onChange = $onChange;
  }
  /** @return FormAction */
  public function getOnChange()
  {
    return $this->onChange;
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

class SelectionItem extends \Google\Model
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

class SessionContext extends \Google\Model
{
  /** @var string */
  public $authTime;
  /** @var string */
  public $delegateUserId;
  /** @var string */
  public $dusi;
  /** @var ImapSessionContext */
  public $imapSessionContext;
  /** @var int */
  public $oauthLoginId;
  /** @var string */
  public $oauthProjectId;
  protected $imapSessionContextType = ImapSessionContext::class;
  protected $imapSessionContextDataType = '';
  /** @param string */
  public function setAuthTime($authTime)
  {
    $this->authTime = $authTime;
  }
  /** @return string */
  public function getAuthTime()
  {
    return $this->authTime;
  }
  /** @param string */
  public function setDelegateUserId($delegateUserId)
  {
    $this->delegateUserId = $delegateUserId;
  }
  /** @return string */
  public function getDelegateUserId()
  {
    return $this->delegateUserId;
  }
  /** @param string */
  public function setDusi($dusi)
  {
    $this->dusi = $dusi;
  }
  /** @return string */
  public function getDusi()
  {
    return $this->dusi;
  }
  /** @param ImapSessionContext */
  public function setImapSessionContext(ImapSessionContext $imapSessionContext)
  {
    $this->imapSessionContext = $imapSessionContext;
  }
  /** @return ImapSessionContext */
  public function getImapSessionContext()
  {
    return $this->imapSessionContext;
  }
  /** @param int */
  public function setOauthLoginId($oauthLoginId)
  {
    $this->oauthLoginId = $oauthLoginId;
  }
  /** @return int */
  public function getOauthLoginId()
  {
    return $this->oauthLoginId;
  }
  /** @param string */
  public function setOauthProjectId($oauthProjectId)
  {
    $this->oauthProjectId = $oauthProjectId;
  }
  /** @return string */
  public function getOauthProjectId()
  {
    return $this->oauthProjectId;
  }
}

class SessionEvent extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $type;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
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

class SessionStateInfo extends \Google\Model
{
  /** @var AckInfo */
  public $ackInfo;
  /** @var LanguageConfig */
  public $languageConfig;
  /** @var string */
  public $lastActorDeviceId;
  /** @var string */
  public $maxEndTime;
  /** @var string */
  public $sessionState;
  /** @var string */
  public $sessionStopReason;
  protected $ackInfoType = AckInfo::class;
  protected $ackInfoDataType = '';
  protected $languageConfigType = LanguageConfig::class;
  protected $languageConfigDataType = '';
  /** @param AckInfo */
  public function setAckInfo(AckInfo $ackInfo)
  {
    $this->ackInfo = $ackInfo;
  }
  /** @return AckInfo */
  public function getAckInfo()
  {
    return $this->ackInfo;
  }
  /** @param LanguageConfig */
  public function setLanguageConfig(LanguageConfig $languageConfig)
  {
    $this->languageConfig = $languageConfig;
  }
  /** @return LanguageConfig */
  public function getLanguageConfig()
  {
    return $this->languageConfig;
  }
  /** @param string */
  public function setLastActorDeviceId($lastActorDeviceId)
  {
    $this->lastActorDeviceId = $lastActorDeviceId;
  }
  /** @return string */
  public function getLastActorDeviceId()
  {
    return $this->lastActorDeviceId;
  }
  /** @param string */
  public function setMaxEndTime($maxEndTime)
  {
    $this->maxEndTime = $maxEndTime;
  }
  /** @return string */
  public function getMaxEndTime()
  {
    return $this->maxEndTime;
  }
  /** @param string */
  public function setSessionState($sessionState)
  {
    $this->sessionState = $sessionState;
  }
  /** @return string */
  public function getSessionState()
  {
    return $this->sessionState;
  }
  /** @param string */
  public function setSessionStopReason($sessionStopReason)
  {
    $this->sessionStopReason = $sessionStopReason;
  }
  /** @return string */
  public function getSessionStopReason()
  {
    return $this->sessionStopReason;
  }
}

class Settings extends \Google\Model
{
  /** @var bool */
  public $accessLock;
  /** @var string */
  public $accessType;
  /** @var bool */
  public $allowJoiningBeforeHost;
  /** @var bool */
  public $attendanceReportEnabled;
  /** @var bool */
  public $chatLock;
  /** @var bool */
  public $cohostArtifactSharingEnabled;
  /** @var bool */
  public $cseEnabled;
  /** @var bool */
  public $defaultAsViewer;
  /** @var bool */
  public $moderationEnabled;
  /** @var bool */
  public $presentLock;
  /** @var bool */
  public $reactionsLock;

  /** @param bool */
  public function setAccessLock($accessLock)
  {
    $this->accessLock = $accessLock;
  }
  /** @return bool */
  public function getAccessLock()
  {
    return $this->accessLock;
  }
  /** @param string */
  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }
  /** @return string */
  public function getAccessType()
  {
    return $this->accessType;
  }
  /** @param bool */
  public function setAllowJoiningBeforeHost($allowJoiningBeforeHost)
  {
    $this->allowJoiningBeforeHost = $allowJoiningBeforeHost;
  }
  /** @return bool */
  public function getAllowJoiningBeforeHost()
  {
    return $this->allowJoiningBeforeHost;
  }
  /** @param bool */
  public function setAttendanceReportEnabled($attendanceReportEnabled)
  {
    $this->attendanceReportEnabled = $attendanceReportEnabled;
  }
  /** @return bool */
  public function getAttendanceReportEnabled()
  {
    return $this->attendanceReportEnabled;
  }
  /** @param bool */
  public function setChatLock($chatLock)
  {
    $this->chatLock = $chatLock;
  }
  /** @return bool */
  public function getChatLock()
  {
    return $this->chatLock;
  }
  /** @param bool */
  public function setCohostArtifactSharingEnabled($cohostArtifactSharingEnabled)
  {
    $this->cohostArtifactSharingEnabled = $cohostArtifactSharingEnabled;
  }
  /** @return bool */
  public function getCohostArtifactSharingEnabled()
  {
    return $this->cohostArtifactSharingEnabled;
  }
  /** @param bool */
  public function setCseEnabled($cseEnabled)
  {
    $this->cseEnabled = $cseEnabled;
  }
  /** @return bool */
  public function getCseEnabled()
  {
    return $this->cseEnabled;
  }
  /** @param bool */
  public function setDefaultAsViewer($defaultAsViewer)
  {
    $this->defaultAsViewer = $defaultAsViewer;
  }
  /** @return bool */
  public function getDefaultAsViewer()
  {
    return $this->defaultAsViewer;
  }
  /** @param bool */
  public function setModerationEnabled($moderationEnabled)
  {
    $this->moderationEnabled = $moderationEnabled;
  }
  /** @return bool */
  public function getModerationEnabled()
  {
    return $this->moderationEnabled;
  }
  /** @param bool */
  public function setPresentLock($presentLock)
  {
    $this->presentLock = $presentLock;
  }
  /** @return bool */
  public function getPresentLock()
  {
    return $this->presentLock;
  }
  /** @param bool */
  public function setReactionsLock($reactionsLock)
  {
    $this->reactionsLock = $reactionsLock;
  }
  /** @return bool */
  public function getReactionsLock()
  {
    return $this->reactionsLock;
  }
}

class ShareScope extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $scope;

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
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
}

class SheetsClientActionMarkup extends \Google\Model
{
  /** @var CustomFunctionReturnValueMarkup */
  public $customFunctionReturnValueMarkup;
  protected $customFunctionReturnValueMarkupType = CustomFunctionReturnValueMarkup::class;
  protected $customFunctionReturnValueMarkupDataType = '';
  /** @param CustomFunctionReturnValueMarkup */
  public function setCustomFunctionReturnValueMarkup(CustomFunctionReturnValueMarkup $customFunctionReturnValueMarkup)
  {
    $this->customFunctionReturnValueMarkup = $customFunctionReturnValueMarkup;
  }
  /** @return CustomFunctionReturnValueMarkup */
  public function getCustomFunctionReturnValueMarkup()
  {
    return $this->customFunctionReturnValueMarkup;
  }
}

class SigningKeyPossessorProto extends \Google\Model
{
  /** @var int */
  public $keymasterKeyType;
  /** @var string */
  public $serializedVerificationKey;
  /** @var string */
  public $serializedVerificationKeyset;

  /** @param int */
  public function setKeymasterKeyType($keymasterKeyType)
  {
    $this->keymasterKeyType = $keymasterKeyType;
  }
  /** @return int */
  public function getKeymasterKeyType()
  {
    return $this->keymasterKeyType;
  }
  /** @param string */
  public function setSerializedVerificationKey($serializedVerificationKey)
  {
    $this->serializedVerificationKey = $serializedVerificationKey;
  }
  /** @return string */
  public function getSerializedVerificationKey()
  {
    return $this->serializedVerificationKey;
  }
  /** @param string */
  public function setSerializedVerificationKeyset($serializedVerificationKeyset)
  {
    $this->serializedVerificationKeyset = $serializedVerificationKeyset;
  }
  /** @return string */
  public function getSerializedVerificationKeyset()
  {
    return $this->serializedVerificationKeyset;
  }
}

class SimpleSecretHolderProto extends \Google\Model
{
  /** @var SimpleSecretLabelProto */
  public $label;
  protected $labelType = SimpleSecretLabelProto::class;
  protected $labelDataType = '';
  /** @param SimpleSecretLabelProto */
  public function setLabel(SimpleSecretLabelProto $label)
  {
    $this->label = $label;
  }
  /** @return SimpleSecretLabelProto */
  public function getLabel()
  {
    return $this->label;
  }
}

class SimpleSecretLabelProto extends \Google\Model
{
  /** @var int */
  public $capabilityId;
  /** @var string */
  public $genericLabel;
  /** @var string */
  public $inviteId;
  /** @var string */
  public $type;

  /** @param int */
  public function setCapabilityId($capabilityId)
  {
    $this->capabilityId = $capabilityId;
  }
  /** @return int */
  public function getCapabilityId()
  {
    return $this->capabilityId;
  }
  /** @param string */
  public function setGenericLabel($genericLabel)
  {
    $this->genericLabel = $genericLabel;
  }
  /** @return string */
  public function getGenericLabel()
  {
    return $this->genericLabel;
  }
  /** @param string */
  public function setInviteId($inviteId)
  {
    $this->inviteId = $inviteId;
  }
  /** @return string */
  public function getInviteId()
  {
    return $this->inviteId;
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

class SlashCommandMetadata extends \Google\Model
{
  /** @var string */
  public $argumentsHint;
  /** @var string */
  public $commandId;
  /** @var string */
  public $commandName;
  /** @var UserId */
  public $id;
  /** @var bool */
  public $triggersDialog;
  /** @var string */
  public $type;
  protected $idType = UserId::class;
  protected $idDataType = '';
  /** @param string */
  public function setArgumentsHint($argumentsHint)
  {
    $this->argumentsHint = $argumentsHint;
  }
  /** @return string */
  public function getArgumentsHint()
  {
    return $this->argumentsHint;
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
  /** @param UserId */
  public function setId(UserId $id)
  {
    $this->id = $id;
  }
  /** @return UserId */
  public function getId()
  {
    return $this->id;
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

class Snippet extends \Google\Collection
{
  /** @var MatchRange[] */
  public $matchRanges;
  /** @var string */
  public $snippet;
  protected $collection_key = 'matchRanges';
  protected $matchRangesType = MatchRange::class;
  protected $matchRangesDataType = 'array';
  /** @param MatchRange[] */
  public function setMatchRanges($matchRanges)
  {
    $this->matchRanges = $matchRanges;
  }
  /** @return MatchRange[] */
  public function getMatchRanges()
  {
    return $this->matchRanges;
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

class SocialCommonAttachmentAttachment extends \Google\Model
{
  /** @var EmbedClientItem */
  public $embedItem;
  /** @var string */
  public $id;
  protected $embedItemType = EmbedClientItem::class;
  protected $embedItemDataType = '';
  /** @param EmbedClientItem */
  public function setEmbedItem(EmbedClientItem $embedItem)
  {
    $this->embedItem = $embedItem;
  }
  /** @return EmbedClientItem */
  public function getEmbedItem()
  {
    return $this->embedItem;
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

class SocialGraphNodeProto extends \Google\Model
{
  /** @var string */
  public $sgnDomain;
  /** @var string */
  public $sgnPk;

  /** @param string */
  public function setSgnDomain($sgnDomain)
  {
    $this->sgnDomain = $sgnDomain;
  }
  /** @return string */
  public function getSgnDomain()
  {
    return $this->sgnDomain;
  }
  /** @param string */
  public function setSgnPk($sgnPk)
  {
    $this->sgnPk = $sgnPk;
  }
  /** @return string */
  public function getSgnPk()
  {
    return $this->sgnPk;
  }
}

class SortOptions extends \Google\Model
{
  /** @var string */
  public $operatorName;
  /** @var string */
  public $sortOrder;

  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
  /** @param string */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /** @return string */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}

class Source extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $predefinedSource;

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
  public function setPredefinedSource($predefinedSource)
  {
    $this->predefinedSource = $predefinedSource;
  }
  /** @return string */
  public function getPredefinedSource()
  {
    return $this->predefinedSource;
  }
}

class SourceConfig extends \Google\Model
{
  /** @var SourceCrowdingConfig */
  public $crowdingConfig;
  /** @var SourceScoringConfig */
  public $scoringConfig;
  /** @var Source */
  public $source;
  protected $crowdingConfigType = SourceCrowdingConfig::class;
  protected $crowdingConfigDataType = '';
  protected $scoringConfigType = SourceScoringConfig::class;
  protected $scoringConfigDataType = '';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param SourceCrowdingConfig */
  public function setCrowdingConfig(SourceCrowdingConfig $crowdingConfig)
  {
    $this->crowdingConfig = $crowdingConfig;
  }
  /** @return SourceCrowdingConfig */
  public function getCrowdingConfig()
  {
    return $this->crowdingConfig;
  }
  /** @param SourceScoringConfig */
  public function setScoringConfig(SourceScoringConfig $scoringConfig)
  {
    $this->scoringConfig = $scoringConfig;
  }
  /** @return SourceScoringConfig */
  public function getScoringConfig()
  {
    return $this->scoringConfig;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class SourceCrowdingConfig extends \Google\Model
{
  /** @var int */
  public $numResults;
  /** @var int */
  public $numSuggestions;

  /** @param int */
  public function setNumResults($numResults)
  {
    $this->numResults = $numResults;
  }
  /** @return int */
  public function getNumResults()
  {
    return $this->numResults;
  }
  /** @param int */
  public function setNumSuggestions($numSuggestions)
  {
    $this->numSuggestions = $numSuggestions;
  }
  /** @return int */
  public function getNumSuggestions()
  {
    return $this->numSuggestions;
  }
}

class SourceResultCount extends \Google\Model
{
  /** @var bool */
  public $hasMoreResults;
  /** @var string */
  public $resultCountEstimate;
  /** @var string */
  public $resultCountExact;
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param bool */
  public function setHasMoreResults($hasMoreResults)
  {
    $this->hasMoreResults = $hasMoreResults;
  }
  /** @return bool */
  public function getHasMoreResults()
  {
    return $this->hasMoreResults;
  }
  /** @param string */
  public function setResultCountEstimate($resultCountEstimate)
  {
    $this->resultCountEstimate = $resultCountEstimate;
  }
  /** @return string */
  public function getResultCountEstimate()
  {
    return $this->resultCountEstimate;
  }
  /** @param string */
  public function setResultCountExact($resultCountExact)
  {
    $this->resultCountExact = $resultCountExact;
  }
  /** @return string */
  public function getResultCountExact()
  {
    return $this->resultCountExact;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class SourceScoringConfig extends \Google\Model
{
  /** @var string */
  public $sourceImportance;

  /** @param string */
  public function setSourceImportance($sourceImportance)
  {
    $this->sourceImportance = $sourceImportance;
  }
  /** @return string */
  public function getSourceImportance()
  {
    return $this->sourceImportance;
  }
}

class SpaceId extends \Google\Model
{
  /** @var string */
  public $spaceId;

  /** @param string */
  public function setSpaceId($spaceId)
  {
    $this->spaceId = $spaceId;
  }
  /** @return string */
  public function getSpaceId()
  {
    return $this->spaceId;
  }
}

class SpellResult extends \Google\Model
{
  /** @var string */
  public $suggestedQuery;

  /** @param string */
  public function setSuggestedQuery($suggestedQuery)
  {
    $this->suggestedQuery = $suggestedQuery;
  }
  /** @return string */
  public function getSuggestedQuery()
  {
    return $this->suggestedQuery;
  }
}

class SquareProto extends \Google\Model
{
  /** @var int */
  public $memberType;
  /** @var string */
  public $squareId;

  /** @param int */
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  /** @return int */
  public function getMemberType()
  {
    return $this->memberType;
  }
  /** @param string */
  public function setSquareId($squareId)
  {
    $this->squareId = $squareId;
  }
  /** @return string */
  public function getSquareId()
  {
    return $this->squareId;
  }
}

class StartUploadItemRequest extends \Google\Model
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
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

class StoredParticipantId extends \Google\Model
{
  /** @var string */
  public $gaiaId;

  /** @param string */
  public function setGaiaId($gaiaId)
  {
    $this->gaiaId = $gaiaId;
  }
  /** @return string */
  public function getGaiaId()
  {
    return $this->gaiaId;
  }
}

class StreamViewerStats extends \Google\Model
{
  /** @var string */
  public $estimatedViewerCount;

  /** @param string */
  public function setEstimatedViewerCount($estimatedViewerCount)
  {
    $this->estimatedViewerCount = $estimatedViewerCount;
  }
  /** @return string */
  public function getEstimatedViewerCount()
  {
    return $this->estimatedViewerCount;
  }
}

class StreamingSessionInfo extends \Google\Model
{
  /** @var string */
  public $applicationType;
  /** @var SessionEvent */
  public $latestSessionEvent;
  /** @var string */
  public $ownerDisplayName;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $status;
  /** @var bool */
  public $trainingEnabled;
  /** @var string */
  public $viewerAccessPolicy;
  /** @var StreamViewerStats */
  public $viewerStats;
  protected $latestSessionEventType = SessionEvent::class;
  protected $latestSessionEventDataType = '';
  protected $viewerStatsType = StreamViewerStats::class;
  protected $viewerStatsDataType = '';
  /** @param string */
  public function setApplicationType($applicationType)
  {
    $this->applicationType = $applicationType;
  }
  /** @return string */
  public function getApplicationType()
  {
    return $this->applicationType;
  }
  /** @param SessionEvent */
  public function setLatestSessionEvent(SessionEvent $latestSessionEvent)
  {
    $this->latestSessionEvent = $latestSessionEvent;
  }
  /** @return SessionEvent */
  public function getLatestSessionEvent()
  {
    return $this->latestSessionEvent;
  }
  /** @param string */
  public function setOwnerDisplayName($ownerDisplayName)
  {
    $this->ownerDisplayName = $ownerDisplayName;
  }
  /** @return string */
  public function getOwnerDisplayName()
  {
    return $this->ownerDisplayName;
  }
  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
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
  /** @param bool */
  public function setTrainingEnabled($trainingEnabled)
  {
    $this->trainingEnabled = $trainingEnabled;
  }
  /** @return bool */
  public function getTrainingEnabled()
  {
    return $this->trainingEnabled;
  }
  /** @param string */
  public function setViewerAccessPolicy($viewerAccessPolicy)
  {
    $this->viewerAccessPolicy = $viewerAccessPolicy;
  }
  /** @return string */
  public function getViewerAccessPolicy()
  {
    return $this->viewerAccessPolicy;
  }
  /** @param StreamViewerStats */
  public function setViewerStats(StreamViewerStats $viewerStats)
  {
    $this->viewerStats = $viewerStats;
  }
  /** @return StreamViewerStats */
  public function getViewerStats()
  {
    return $this->viewerStats;
  }
}

class StructuredDataObject extends \Google\Collection
{
  /** @var NamedProperty[] */
  public $properties;
  protected $collection_key = 'properties';
  protected $propertiesType = NamedProperty::class;
  protected $propertiesDataType = 'array';
  /** @param NamedProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return NamedProperty[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class StructuredResult extends \Google\Model
{
  /** @var Person */
  public $person;
  protected $personType = Person::class;
  protected $personDataType = '';
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
}

class SuggestRequest extends \Google\Collection
{
  /** @var DataSourceRestriction[] */
  public $dataSourceRestrictions;
  /** @var string */
  public $query;
  /** @var RequestOptions */
  public $requestOptions;
  protected $collection_key = 'dataSourceRestrictions';
  protected $dataSourceRestrictionsType = DataSourceRestriction::class;
  protected $dataSourceRestrictionsDataType = 'array';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  /** @param DataSourceRestriction[] */
  public function setDataSourceRestrictions($dataSourceRestrictions)
  {
    $this->dataSourceRestrictions = $dataSourceRestrictions;
  }
  /** @return DataSourceRestriction[] */
  public function getDataSourceRestrictions()
  {
    return $this->dataSourceRestrictions;
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
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
}

class SuggestResponse extends \Google\Collection
{
  /** @var SuggestResult[] */
  public $suggestResults;
  protected $collection_key = 'suggestResults';
  protected $suggestResultsType = SuggestResult::class;
  protected $suggestResultsDataType = 'array';
  /** @param SuggestResult[] */
  public function setSuggestResults($suggestResults)
  {
    $this->suggestResults = $suggestResults;
  }
  /** @return SuggestResult[] */
  public function getSuggestResults()
  {
    return $this->suggestResults;
  }
}

class SuggestResult extends \Google\Model
{
  /** @var PeopleSuggestion */
  public $peopleSuggestion;
  /** @var QuerySuggestion */
  public $querySuggestion;
  /** @var Source */
  public $source;
  /** @var string */
  public $suggestedQuery;
  protected $peopleSuggestionType = PeopleSuggestion::class;
  protected $peopleSuggestionDataType = '';
  protected $querySuggestionType = QuerySuggestion::class;
  protected $querySuggestionDataType = '';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param PeopleSuggestion */
  public function setPeopleSuggestion(PeopleSuggestion $peopleSuggestion)
  {
    $this->peopleSuggestion = $peopleSuggestion;
  }
  /** @return PeopleSuggestion */
  public function getPeopleSuggestion()
  {
    return $this->peopleSuggestion;
  }
  /** @param QuerySuggestion */
  public function setQuerySuggestion(QuerySuggestion $querySuggestion)
  {
    $this->querySuggestion = $querySuggestion;
  }
  /** @return QuerySuggestion */
  public function getQuerySuggestion()
  {
    return $this->querySuggestion;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setSuggestedQuery($suggestedQuery)
  {
    $this->suggestedQuery = $suggestedQuery;
  }
  /** @return string */
  public function getSuggestedQuery()
  {
    return $this->suggestedQuery;
  }
}

class SupportUrls extends \Google\Model
{
  /** @var string */
  public $adminConfigUrl;
  /** @var string */
  public $deletionPolicyUrl;
  /** @var string */
  public $privacyPolicyUrl;
  /** @var string */
  public $setupUrl;
  /** @var string */
  public $supportUrl;
  /** @var string */
  public $tosUrl;

  /** @param string */
  public function setAdminConfigUrl($adminConfigUrl)
  {
    $this->adminConfigUrl = $adminConfigUrl;
  }
  /** @return string */
  public function getAdminConfigUrl()
  {
    return $this->adminConfigUrl;
  }
  /** @param string */
  public function setDeletionPolicyUrl($deletionPolicyUrl)
  {
    $this->deletionPolicyUrl = $deletionPolicyUrl;
  }
  /** @return string */
  public function getDeletionPolicyUrl()
  {
    return $this->deletionPolicyUrl;
  }
  /** @param string */
  public function setPrivacyPolicyUrl($privacyPolicyUrl)
  {
    $this->privacyPolicyUrl = $privacyPolicyUrl;
  }
  /** @return string */
  public function getPrivacyPolicyUrl()
  {
    return $this->privacyPolicyUrl;
  }
  /** @param string */
  public function setSetupUrl($setupUrl)
  {
    $this->setupUrl = $setupUrl;
  }
  /** @return string */
  public function getSetupUrl()
  {
    return $this->setupUrl;
  }
  /** @param string */
  public function setSupportUrl($supportUrl)
  {
    $this->supportUrl = $supportUrl;
  }
  /** @return string */
  public function getSupportUrl()
  {
    return $this->supportUrl;
  }
  /** @param string */
  public function setTosUrl($tosUrl)
  {
    $this->tosUrl = $tosUrl;
  }
  /** @return string */
  public function getTosUrl()
  {
    return $this->tosUrl;
  }
}

class SwitchWidget extends \Google\Model
{
  /** @var string */
  public $controlType;
  /** @var string */
  public $name;
  /** @var FormAction */
  public $onChange;
  /** @var bool */
  public $selected;
  /** @var string */
  public $value;
  protected $onChangeType = FormAction::class;
  protected $onChangeDataType = '';
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
  /** @param FormAction */
  public function setOnChange(FormAction $onChange)
  {
    $this->onChange = $onChange;
  }
  /** @return FormAction */
  public function getOnChange()
  {
    return $this->onChange;
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

class TaskActionMarkup extends \Google\Model
{
  /** @var bool */
  public $reloadTasks;

  /** @param bool */
  public function setReloadTasks($reloadTasks)
  {
    $this->reloadTasks = $reloadTasks;
  }
  /** @return bool */
  public function getReloadTasks()
  {
    return $this->reloadTasks;
  }
}

class TextButton extends \Google\Model
{
  /** @var string */
  public $altText;
  /** @var string */
  public $backgroundColor;
  /** @var bool */
  public $disabled;
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $style;
  /** @var string */
  public $text;
  protected $onClickType = OnClick::class;
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
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return string */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
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
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /** @return string */
  public function getStyle()
  {
    return $this->style;
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

class TextField extends \Google\Model
{
  /** @var AutoComplete */
  public $autoComplete;
  /** @var FormAction */
  public $autoCompleteCallback;
  /** @var bool */
  public $autoCompleteMultipleSelections;
  /** @var string */
  public $hintText;
  /** @var string */
  public $label;
  /** @var int */
  public $maxLines;
  /** @var string */
  public $name;
  /** @var FormAction */
  public $onChange;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $autoCompleteType = AutoComplete::class;
  protected $autoCompleteDataType = '';
  protected $autoCompleteCallbackType = FormAction::class;
  protected $autoCompleteCallbackDataType = '';
  protected $onChangeType = FormAction::class;
  protected $onChangeDataType = '';
  /** @param AutoComplete */
  public function setAutoComplete(AutoComplete $autoComplete)
  {
    $this->autoComplete = $autoComplete;
  }
  /** @return AutoComplete */
  public function getAutoComplete()
  {
    return $this->autoComplete;
  }
  /** @param FormAction */
  public function setAutoCompleteCallback(FormAction $autoCompleteCallback)
  {
    $this->autoCompleteCallback = $autoCompleteCallback;
  }
  /** @return FormAction */
  public function getAutoCompleteCallback()
  {
    return $this->autoCompleteCallback;
  }
  /** @param bool */
  public function setAutoCompleteMultipleSelections($autoCompleteMultipleSelections)
  {
    $this->autoCompleteMultipleSelections = $autoCompleteMultipleSelections;
  }
  /** @return bool */
  public function getAutoCompleteMultipleSelections()
  {
    return $this->autoCompleteMultipleSelections;
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
  /** @param int */
  public function setMaxLines($maxLines)
  {
    $this->maxLines = $maxLines;
  }
  /** @return int */
  public function getMaxLines()
  {
    return $this->maxLines;
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
  /** @param FormAction */
  public function setOnChange(FormAction $onChange)
  {
    $this->onChange = $onChange;
  }
  /** @return FormAction */
  public function getOnChange()
  {
    return $this->onChange;
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

class TextKeyValue extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var OnClick */
  public $onClick;
  /** @var string */
  public $text;
  protected $onClickType = OnClick::class;
  protected $onClickDataType = '';
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

class TextOperatorOptions extends \Google\Model
{
  /** @var bool */
  public $exactMatchWithOperator;
  /** @var string */
  public $operatorName;

  /** @param bool */
  public function setExactMatchWithOperator($exactMatchWithOperator)
  {
    $this->exactMatchWithOperator = $exactMatchWithOperator;
  }
  /** @return bool */
  public function getExactMatchWithOperator()
  {
    return $this->exactMatchWithOperator;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
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

class TextPropertyOptions extends \Google\Model
{
  /** @var TextOperatorOptions */
  public $operatorOptions;
  /** @var RetrievalImportance */
  public $retrievalImportance;
  protected $operatorOptionsType = TextOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  protected $retrievalImportanceType = RetrievalImportance::class;
  protected $retrievalImportanceDataType = '';
  /** @param TextOperatorOptions */
  public function setOperatorOptions(TextOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return TextOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
  /** @param RetrievalImportance */
  public function setRetrievalImportance(RetrievalImportance $retrievalImportance)
  {
    $this->retrievalImportance = $retrievalImportance;
  }
  /** @return RetrievalImportance */
  public function getRetrievalImportance()
  {
    return $this->retrievalImportance;
  }
}

class TextValues extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ThreadKeySet extends \Google\Collection
{
  /** @var MultiKey[] */
  public $messageKeys;
  /** @var MultiKey */
  public $newThreadKey;
  protected $collection_key = 'messageKeys';
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
  protected $newThreadKeyType = MultiKey::class;
  protected $newThreadKeyDataType = '';
  /** @param MultiKey[] */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /** @return MultiKey[] */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
  /** @param MultiKey */
  public function setNewThreadKey(MultiKey $newThreadKey)
  {
    $this->newThreadKey = $newThreadKey;
  }
  /** @return MultiKey */
  public function getNewThreadKey()
  {
    return $this->newThreadKey;
  }
}

class ThreadUpdate extends \Google\Collection
{
  /** @var AttributeRemoved */
  public $attributeRemoved;
  /** @var AttributeSet */
  public $attributeSet;
  /** @var LabelAdded */
  public $labelAdded;
  /** @var LabelRemoved */
  public $labelRemoved;
  /** @var string */
  public $lastHistoryRecordId;
  /** @var MessageAdded */
  public $messageAdded;
  /** @var MessageDeleted */
  public $messageDeleted;
  /** @var MultiKey */
  public $originalThreadKey;
  /** @var PreState[] */
  public $preState;
  /** @var MultiKey */
  public $threadKey;
  /** @var ThreadKeySet */
  public $threadKeySet;
  /** @var string */
  public $threadLocator;
  /** @var TopicStateUpdate */
  public $topicStateUpdate;
  protected $collection_key = 'preState';
  protected $attributeRemovedType = AttributeRemoved::class;
  protected $attributeRemovedDataType = '';
  protected $attributeSetType = AttributeSet::class;
  protected $attributeSetDataType = '';
  protected $labelAddedType = LabelAdded::class;
  protected $labelAddedDataType = '';
  protected $labelRemovedType = LabelRemoved::class;
  protected $labelRemovedDataType = '';
  protected $messageAddedType = MessageAdded::class;
  protected $messageAddedDataType = '';
  protected $messageDeletedType = MessageDeleted::class;
  protected $messageDeletedDataType = '';
  protected $originalThreadKeyType = MultiKey::class;
  protected $originalThreadKeyDataType = '';
  protected $preStateType = PreState::class;
  protected $preStateDataType = 'array';
  protected $threadKeyType = MultiKey::class;
  protected $threadKeyDataType = '';
  protected $threadKeySetType = ThreadKeySet::class;
  protected $threadKeySetDataType = '';
  protected $topicStateUpdateType = TopicStateUpdate::class;
  protected $topicStateUpdateDataType = '';
  /** @param AttributeRemoved */
  public function setAttributeRemoved(AttributeRemoved $attributeRemoved)
  {
    $this->attributeRemoved = $attributeRemoved;
  }
  /** @return AttributeRemoved */
  public function getAttributeRemoved()
  {
    return $this->attributeRemoved;
  }
  /** @param AttributeSet */
  public function setAttributeSet(AttributeSet $attributeSet)
  {
    $this->attributeSet = $attributeSet;
  }
  /** @return AttributeSet */
  public function getAttributeSet()
  {
    return $this->attributeSet;
  }
  /** @param LabelAdded */
  public function setLabelAdded(LabelAdded $labelAdded)
  {
    $this->labelAdded = $labelAdded;
  }
  /** @return LabelAdded */
  public function getLabelAdded()
  {
    return $this->labelAdded;
  }
  /** @param LabelRemoved */
  public function setLabelRemoved(LabelRemoved $labelRemoved)
  {
    $this->labelRemoved = $labelRemoved;
  }
  /** @return LabelRemoved */
  public function getLabelRemoved()
  {
    return $this->labelRemoved;
  }
  /** @param string */
  public function setLastHistoryRecordId($lastHistoryRecordId)
  {
    $this->lastHistoryRecordId = $lastHistoryRecordId;
  }
  /** @return string */
  public function getLastHistoryRecordId()
  {
    return $this->lastHistoryRecordId;
  }
  /** @param MessageAdded */
  public function setMessageAdded(MessageAdded $messageAdded)
  {
    $this->messageAdded = $messageAdded;
  }
  /** @return MessageAdded */
  public function getMessageAdded()
  {
    return $this->messageAdded;
  }
  /** @param MessageDeleted */
  public function setMessageDeleted(MessageDeleted $messageDeleted)
  {
    $this->messageDeleted = $messageDeleted;
  }
  /** @return MessageDeleted */
  public function getMessageDeleted()
  {
    return $this->messageDeleted;
  }
  /** @param MultiKey */
  public function setOriginalThreadKey(MultiKey $originalThreadKey)
  {
    $this->originalThreadKey = $originalThreadKey;
  }
  /** @return MultiKey */
  public function getOriginalThreadKey()
  {
    return $this->originalThreadKey;
  }
  /** @param PreState[] */
  public function setPreState($preState)
  {
    $this->preState = $preState;
  }
  /** @return PreState[] */
  public function getPreState()
  {
    return $this->preState;
  }
  /** @param MultiKey */
  public function setThreadKey(MultiKey $threadKey)
  {
    $this->threadKey = $threadKey;
  }
  /** @return MultiKey */
  public function getThreadKey()
  {
    return $this->threadKey;
  }
  /** @param ThreadKeySet */
  public function setThreadKeySet(ThreadKeySet $threadKeySet)
  {
    $this->threadKeySet = $threadKeySet;
  }
  /** @return ThreadKeySet */
  public function getThreadKeySet()
  {
    return $this->threadKeySet;
  }
  /** @param string */
  public function setThreadLocator($threadLocator)
  {
    $this->threadLocator = $threadLocator;
  }
  /** @return string */
  public function getThreadLocator()
  {
    return $this->threadLocator;
  }
  /** @param TopicStateUpdate */
  public function setTopicStateUpdate(TopicStateUpdate $topicStateUpdate)
  {
    $this->topicStateUpdate = $topicStateUpdate;
  }
  /** @return TopicStateUpdate */
  public function getTopicStateUpdate()
  {
    return $this->topicStateUpdate;
  }
}

class TimestampOperatorOptions extends \Google\Model
{
  /** @var string */
  public $greaterThanOperatorName;
  /** @var string */
  public $lessThanOperatorName;
  /** @var string */
  public $operatorName;

  /** @param string */
  public function setGreaterThanOperatorName($greaterThanOperatorName)
  {
    $this->greaterThanOperatorName = $greaterThanOperatorName;
  }
  /** @return string */
  public function getGreaterThanOperatorName()
  {
    return $this->greaterThanOperatorName;
  }
  /** @param string */
  public function setLessThanOperatorName($lessThanOperatorName)
  {
    $this->lessThanOperatorName = $lessThanOperatorName;
  }
  /** @return string */
  public function getLessThanOperatorName()
  {
    return $this->lessThanOperatorName;
  }
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
}

class TimestampPropertyOptions extends \Google\Model
{
  /** @var TimestampOperatorOptions */
  public $operatorOptions;
  protected $operatorOptionsType = TimestampOperatorOptions::class;
  protected $operatorOptionsDataType = '';
  /** @param TimestampOperatorOptions */
  public function setOperatorOptions(TimestampOperatorOptions $operatorOptions)
  {
    $this->operatorOptions = $operatorOptions;
  }
  /** @return TimestampOperatorOptions */
  public function getOperatorOptions()
  {
    return $this->operatorOptions;
  }
}

class TimestampValues extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class TombstoneMetadata extends \Google\Model
{
  /** @var string */
  public $tombstoneType;

  /** @param string */
  public function setTombstoneType($tombstoneType)
  {
    $this->tombstoneType = $tombstoneType;
  }
  /** @return string */
  public function getTombstoneType()
  {
    return $this->tombstoneType;
  }
}

class Toolbar extends \Google\Model
{
  /** @var string */
  public $color;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $name;

  /** @param string */
  public function setColor($color)
  {
    $this->color = $color;
  }
  /** @return string */
  public function getColor()
  {
    return $this->color;
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
}

class TopicId extends \Google\Model
{
  /** @var GroupId */
  public $groupId;
  /** @var string */
  public $topicId;
  protected $groupIdType = GroupId::class;
  protected $groupIdDataType = '';
  /** @param GroupId */
  public function setGroupId(GroupId $groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return GroupId */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /** @param string */
  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
  }
  /** @return string */
  public function getTopicId()
  {
    return $this->topicId;
  }
}

class TopicState extends \Google\Model
{
  /** @var int[] */
  public $labelIdMessageCount;
  /** @var int */
  public $numConstituents;

  /** @param int[] */
  public function setLabelIdMessageCount($labelIdMessageCount)
  {
    $this->labelIdMessageCount = $labelIdMessageCount;
  }
  /** @return int[] */
  public function getLabelIdMessageCount()
  {
    return $this->labelIdMessageCount;
  }
  /** @param int */
  public function setNumConstituents($numConstituents)
  {
    $this->numConstituents = $numConstituents;
  }
  /** @return int */
  public function getNumConstituents()
  {
    return $this->numConstituents;
  }
}

class TopicStateUpdate extends \Google\Model
{
  /** @var TopicState */
  public $topicState;
  protected $topicStateType = TopicState::class;
  protected $topicStateDataType = '';
  /** @param TopicState */
  public function setTopicState(TopicState $topicState)
  {
    $this->topicState = $topicState;
  }
  /** @return TopicState */
  public function getTopicState()
  {
    return $this->topicState;
  }
}

class TransactionContext extends \Google\Model
{
  /** @var string */
  public $endingRecordId;
  /** @var string */
  public $startingRecordId;
  /** @var string */
  public $writeTimestampUs;

  /** @param string */
  public function setEndingRecordId($endingRecordId)
  {
    $this->endingRecordId = $endingRecordId;
  }
  /** @return string */
  public function getEndingRecordId()
  {
    return $this->endingRecordId;
  }
  /** @param string */
  public function setStartingRecordId($startingRecordId)
  {
    $this->startingRecordId = $startingRecordId;
  }
  /** @return string */
  public function getStartingRecordId()
  {
    return $this->startingRecordId;
  }
  /** @param string */
  public function setWriteTimestampUs($writeTimestampUs)
  {
    $this->writeTimestampUs = $writeTimestampUs;
  }
  /** @return string */
  public function getWriteTimestampUs()
  {
    return $this->writeTimestampUs;
  }
}

class TransactionDebugInfo extends \Google\Model
{
}

class TranscriptionSessionInfo extends \Google\Model
{
  /** @var SessionStateInfo */
  public $sessionStateInfo;
  /** @var string */
  public $transcriptionSessionId;
  protected $sessionStateInfoType = SessionStateInfo::class;
  protected $sessionStateInfoDataType = '';
  /** @param SessionStateInfo */
  public function setSessionStateInfo(SessionStateInfo $sessionStateInfo)
  {
    $this->sessionStateInfo = $sessionStateInfo;
  }
  /** @return SessionStateInfo */
  public function getSessionStateInfo()
  {
    return $this->sessionStateInfo;
  }
  /** @param string */
  public function setTranscriptionSessionId($transcriptionSessionId)
  {
    $this->transcriptionSessionId = $transcriptionSessionId;
  }
  /** @return string */
  public function getTranscriptionSessionId()
  {
    return $this->transcriptionSessionId;
  }
}

class TransientData extends \Google\Model
{
}

class Trigger extends \Google\Model
{
  /** @var string */
  public $actionType;
  /** @var string */
  public $batchTimeUs;
  /** @var string */
  public $dispatchId;
  /** @var string */
  public $dispatcher;
  /** @var string */
  public $fireTimeUs;
  /** @var JobsettedServerSpec */
  public $jobsettedServerSpec;
  /** @var string */
  public $key;
  /** @var RpcOptions */
  public $rpcOptions;
  /** @var string */
  public $sliceFireTimeUs;
  /** @var TriggerAction */
  public $triggerAction;
  /** @var TriggerKey */
  public $triggerKey;
  protected $jobsettedServerSpecType = JobsettedServerSpec::class;
  protected $jobsettedServerSpecDataType = '';
  protected $rpcOptionsType = RpcOptions::class;
  protected $rpcOptionsDataType = '';
  protected $triggerActionType = TriggerAction::class;
  protected $triggerActionDataType = '';
  protected $triggerKeyType = TriggerKey::class;
  protected $triggerKeyDataType = '';
  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param string */
  public function setBatchTimeUs($batchTimeUs)
  {
    $this->batchTimeUs = $batchTimeUs;
  }
  /** @return string */
  public function getBatchTimeUs()
  {
    return $this->batchTimeUs;
  }
  /** @param string */
  public function setDispatchId($dispatchId)
  {
    $this->dispatchId = $dispatchId;
  }
  /** @return string */
  public function getDispatchId()
  {
    return $this->dispatchId;
  }
  /** @param string */
  public function setDispatcher($dispatcher)
  {
    $this->dispatcher = $dispatcher;
  }
  /** @return string */
  public function getDispatcher()
  {
    return $this->dispatcher;
  }
  /** @param string */
  public function setFireTimeUs($fireTimeUs)
  {
    $this->fireTimeUs = $fireTimeUs;
  }
  /** @return string */
  public function getFireTimeUs()
  {
    return $this->fireTimeUs;
  }
  /** @param JobsettedServerSpec */
  public function setJobsettedServerSpec(JobsettedServerSpec $jobsettedServerSpec)
  {
    $this->jobsettedServerSpec = $jobsettedServerSpec;
  }
  /** @return JobsettedServerSpec */
  public function getJobsettedServerSpec()
  {
    return $this->jobsettedServerSpec;
  }
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
  /** @param RpcOptions */
  public function setRpcOptions(RpcOptions $rpcOptions)
  {
    $this->rpcOptions = $rpcOptions;
  }
  /** @return RpcOptions */
  public function getRpcOptions()
  {
    return $this->rpcOptions;
  }
  /** @param string */
  public function setSliceFireTimeUs($sliceFireTimeUs)
  {
    $this->sliceFireTimeUs = $sliceFireTimeUs;
  }
  /** @return string */
  public function getSliceFireTimeUs()
  {
    return $this->sliceFireTimeUs;
  }
  /** @param TriggerAction */
  public function setTriggerAction(TriggerAction $triggerAction)
  {
    $this->triggerAction = $triggerAction;
  }
  /** @return TriggerAction */
  public function getTriggerAction()
  {
    return $this->triggerAction;
  }
  /** @param TriggerKey */
  public function setTriggerKey(TriggerKey $triggerKey)
  {
    $this->triggerKey = $triggerKey;
  }
  /** @return TriggerKey */
  public function getTriggerKey()
  {
    return $this->triggerKey;
  }
}

class TriggerAction extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $data;
  /** @var string */
  public $dataInt;

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
  public function setDataInt($dataInt)
  {
    $this->dataInt = $dataInt;
  }
  /** @return string */
  public function getDataInt()
  {
    return $this->dataInt;
  }
}

class TriggerKey extends \Google\Model
{
  /** @var string */
  public $instanceId;
  /** @var string */
  public $type;

  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
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

class Triggers extends \Google\Collection
{
  /** @var Trigger[] */
  public $triggers;
  protected $collection_key = 'triggers';
  protected $triggersType = Trigger::class;
  protected $triggersDataType = 'array';
  /** @param Trigger[] */
  public function setTriggers($triggers)
  {
    $this->triggers = $triggers;
  }
  /** @return Trigger[] */
  public function getTriggers()
  {
    return $this->triggers;
  }
}

class TrustedResourceUrlProto extends \Google\Model
{
  /** @var string */
  public $privateDoNotAccessOrElseTrustedResourceUrlWrappedValue;

  /** @param string */
  public function setPrivateDoNotAccessOrElseTrustedResourceUrlWrappedValue($privateDoNotAccessOrElseTrustedResourceUrlWrappedValue)
  {
    $this->privateDoNotAccessOrElseTrustedResourceUrlWrappedValue = $privateDoNotAccessOrElseTrustedResourceUrlWrappedValue;
  }
  /** @return string */
  public function getPrivateDoNotAccessOrElseTrustedResourceUrlWrappedValue()
  {
    return $this->privateDoNotAccessOrElseTrustedResourceUrlWrappedValue;
  }
}

class TypeInfo extends \Google\Model
{
  /** @var VideoInfo */
  public $videoInfo;
  protected $videoInfoType = VideoInfo::class;
  protected $videoInfoDataType = '';
  /** @param VideoInfo */
  public function setVideoInfo(VideoInfo $videoInfo)
  {
    $this->videoInfo = $videoInfo;
  }
  /** @return VideoInfo */
  public function getVideoInfo()
  {
    return $this->videoInfo;
  }
}

class UniversalPhoneAccess extends \Google\Model
{
  /** @var string */
  public $pin;
  /** @var string */
  public $pstnInfoUrl;

  /** @param string */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /** @return string */
  public function getPin()
  {
    return $this->pin;
  }
  /** @param string */
  public function setPstnInfoUrl($pstnInfoUrl)
  {
    $this->pstnInfoUrl = $pstnInfoUrl;
  }
  /** @return string */
  public function getPstnInfoUrl()
  {
    return $this->pstnInfoUrl;
  }
}

class UnmappedIdentity extends \Google\Model
{
  /** @var Principal */
  public $externalIdentity;
  /** @var string */
  public $resolutionStatusCode;
  protected $externalIdentityType = Principal::class;
  protected $externalIdentityDataType = '';
  /** @param Principal */
  public function setExternalIdentity(Principal $externalIdentity)
  {
    $this->externalIdentity = $externalIdentity;
  }
  /** @return Principal */
  public function getExternalIdentity()
  {
    return $this->externalIdentity;
  }
  /** @param string */
  public function setResolutionStatusCode($resolutionStatusCode)
  {
    $this->resolutionStatusCode = $resolutionStatusCode;
  }
  /** @return string */
  public function getResolutionStatusCode()
  {
    return $this->resolutionStatusCode;
  }
}

class UnreserveItemsRequest extends \Google\Model
{
  /** @var string */
  public $connectorName;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var string */
  public $queue;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  /** @param string */
  public function setConnectorName($connectorName)
  {
    $this->connectorName = $connectorName;
  }
  /** @return string */
  public function getConnectorName()
  {
    return $this->connectorName;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param string */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /** @return string */
  public function getQueue()
  {
    return $this->queue;
  }
}

class UpdateBccRecipients extends \Google\Collection
{
  /** @var Recipient[] */
  public $bccRecipients;
  protected $collection_key = 'bccRecipients';
  protected $bccRecipientsType = Recipient::class;
  protected $bccRecipientsDataType = 'array';
  /** @param Recipient[] */
  public function setBccRecipients($bccRecipients)
  {
    $this->bccRecipients = $bccRecipients;
  }
  /** @return Recipient[] */
  public function getBccRecipients()
  {
    return $this->bccRecipients;
  }
}

class UpdateBody extends \Google\Collection
{
  /** @var InsertContent[] */
  public $insertContents;
  /** @var string */
  public $type;
  protected $collection_key = 'insertContents';
  protected $insertContentsType = InsertContent::class;
  protected $insertContentsDataType = 'array';
  /** @param InsertContent[] */
  public function setInsertContents($insertContents)
  {
    $this->insertContents = $insertContents;
  }
  /** @return InsertContent[] */
  public function getInsertContents()
  {
    return $this->insertContents;
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

class UpdateCcRecipients extends \Google\Collection
{
  /** @var Recipient[] */
  public $ccRecipients;
  protected $collection_key = 'ccRecipients';
  protected $ccRecipientsType = Recipient::class;
  protected $ccRecipientsDataType = 'array';
  /** @param Recipient[] */
  public function setCcRecipients($ccRecipients)
  {
    $this->ccRecipients = $ccRecipients;
  }
  /** @return Recipient[] */
  public function getCcRecipients()
  {
    return $this->ccRecipients;
  }
}

class UpdateDataSourceRequest extends \Google\Model
{
  /** @var DebugOptions */
  public $debugOptions;
  /** @var DataSource */
  public $source;
  /** @var string */
  public $updateMask;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  protected $sourceType = DataSource::class;
  protected $sourceDataType = '';
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param DataSource */
  public function setSource(DataSource $source)
  {
    $this->source = $source;
  }
  /** @return DataSource */
  public function getSource()
  {
    return $this->source;
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

class UpdateDraftActionMarkup extends \Google\Model
{
  /** @var UpdateBccRecipients */
  public $updateBccRecipients;
  /** @var UpdateBody */
  public $updateBody;
  /** @var UpdateCcRecipients */
  public $updateCcRecipients;
  /** @var UpdateSubject */
  public $updateSubject;
  /** @var UpdateToRecipients */
  public $updateToRecipients;
  protected $updateBccRecipientsType = UpdateBccRecipients::class;
  protected $updateBccRecipientsDataType = '';
  protected $updateBodyType = UpdateBody::class;
  protected $updateBodyDataType = '';
  protected $updateCcRecipientsType = UpdateCcRecipients::class;
  protected $updateCcRecipientsDataType = '';
  protected $updateSubjectType = UpdateSubject::class;
  protected $updateSubjectDataType = '';
  protected $updateToRecipientsType = UpdateToRecipients::class;
  protected $updateToRecipientsDataType = '';
  /** @param UpdateBccRecipients */
  public function setUpdateBccRecipients(UpdateBccRecipients $updateBccRecipients)
  {
    $this->updateBccRecipients = $updateBccRecipients;
  }
  /** @return UpdateBccRecipients */
  public function getUpdateBccRecipients()
  {
    return $this->updateBccRecipients;
  }
  /** @param UpdateBody */
  public function setUpdateBody(UpdateBody $updateBody)
  {
    $this->updateBody = $updateBody;
  }
  /** @return UpdateBody */
  public function getUpdateBody()
  {
    return $this->updateBody;
  }
  /** @param UpdateCcRecipients */
  public function setUpdateCcRecipients(UpdateCcRecipients $updateCcRecipients)
  {
    $this->updateCcRecipients = $updateCcRecipients;
  }
  /** @return UpdateCcRecipients */
  public function getUpdateCcRecipients()
  {
    return $this->updateCcRecipients;
  }
  /** @param UpdateSubject */
  public function setUpdateSubject(UpdateSubject $updateSubject)
  {
    $this->updateSubject = $updateSubject;
  }
  /** @return UpdateSubject */
  public function getUpdateSubject()
  {
    return $this->updateSubject;
  }
  /** @param UpdateToRecipients */
  public function setUpdateToRecipients(UpdateToRecipients $updateToRecipients)
  {
    $this->updateToRecipients = $updateToRecipients;
  }
  /** @return UpdateToRecipients */
  public function getUpdateToRecipients()
  {
    return $this->updateToRecipients;
  }
}

class UpdateSchemaRequest extends \Google\Model
{
  /** @var DebugOptions */
  public $debugOptions;
  /** @var Schema */
  public $schema;
  /** @var bool */
  public $validateOnly;
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  protected $schemaType = Schema::class;
  protected $schemaDataType = '';
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param Schema */
  public function setSchema(Schema $schema)
  {
    $this->schema = $schema;
  }
  /** @return Schema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class UpdateSubject extends \Google\Model
{
  /** @var string */
  public $subject;

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
}

class UpdateToRecipients extends \Google\Collection
{
  /** @var Recipient[] */
  public $toRecipients;
  protected $collection_key = 'toRecipients';
  protected $toRecipientsType = Recipient::class;
  protected $toRecipientsDataType = 'array';
  /** @param Recipient[] */
  public function setToRecipients($toRecipients)
  {
    $this->toRecipients = $toRecipients;
  }
  /** @return Recipient[] */
  public function getToRecipients()
  {
    return $this->toRecipients;
  }
}

class UploadItemRef extends \Google\Model
{
  /** @var string */
  public $name;

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
}

class UploadMetadata extends \Google\Model
{
  /** @var string */
  public $attachmentToken;
  /** @var AppsDynamiteSharedBackendUploadMetadata */
  public $backendUploadMetadata;
  /** @var AuthorizedItemId */
  public $clonedAuthorizedItemId;
  /** @var string */
  public $clonedDriveAction;
  /** @var string */
  public $clonedDriveId;
  /** @var string */
  public $contentName;
  /** @var string */
  public $contentType;
  /** @var AppsDynamiteSharedDlpMetricsMetadata */
  public $dlpMetricsMetadata;
  /** @var string */
  public $latestVirusScanTimestamp;
  /** @var string */
  public $localId;
  /** @var AppsDynamiteSharedDimension */
  public $originalDimension;
  /** @var AppsDynamiteSharedVideoReference */
  public $videoReference;
  /** @var string */
  public $virusScanResult;
  protected $backendUploadMetadataType = AppsDynamiteSharedBackendUploadMetadata::class;
  protected $backendUploadMetadataDataType = '';
  protected $clonedAuthorizedItemIdType = AuthorizedItemId::class;
  protected $clonedAuthorizedItemIdDataType = '';
  protected $dlpMetricsMetadataType = AppsDynamiteSharedDlpMetricsMetadata::class;
  protected $dlpMetricsMetadataDataType = '';
  protected $originalDimensionType = AppsDynamiteSharedDimension::class;
  protected $originalDimensionDataType = '';
  protected $videoReferenceType = AppsDynamiteSharedVideoReference::class;
  protected $videoReferenceDataType = '';
  /** @param string */
  public function setAttachmentToken($attachmentToken)
  {
    $this->attachmentToken = $attachmentToken;
  }
  /** @return string */
  public function getAttachmentToken()
  {
    return $this->attachmentToken;
  }
  /** @param AppsDynamiteSharedBackendUploadMetadata */
  public function setBackendUploadMetadata(AppsDynamiteSharedBackendUploadMetadata $backendUploadMetadata)
  {
    $this->backendUploadMetadata = $backendUploadMetadata;
  }
  /** @return AppsDynamiteSharedBackendUploadMetadata */
  public function getBackendUploadMetadata()
  {
    return $this->backendUploadMetadata;
  }
  /** @param AuthorizedItemId */
  public function setClonedAuthorizedItemId(AuthorizedItemId $clonedAuthorizedItemId)
  {
    $this->clonedAuthorizedItemId = $clonedAuthorizedItemId;
  }
  /** @return AuthorizedItemId */
  public function getClonedAuthorizedItemId()
  {
    return $this->clonedAuthorizedItemId;
  }
  /** @param string */
  public function setClonedDriveAction($clonedDriveAction)
  {
    $this->clonedDriveAction = $clonedDriveAction;
  }
  /** @return string */
  public function getClonedDriveAction()
  {
    return $this->clonedDriveAction;
  }
  /** @param string */
  public function setClonedDriveId($clonedDriveId)
  {
    $this->clonedDriveId = $clonedDriveId;
  }
  /** @return string */
  public function getClonedDriveId()
  {
    return $this->clonedDriveId;
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
  /** @param AppsDynamiteSharedDlpMetricsMetadata */
  public function setDlpMetricsMetadata(AppsDynamiteSharedDlpMetricsMetadata $dlpMetricsMetadata)
  {
    $this->dlpMetricsMetadata = $dlpMetricsMetadata;
  }
  /** @return AppsDynamiteSharedDlpMetricsMetadata */
  public function getDlpMetricsMetadata()
  {
    return $this->dlpMetricsMetadata;
  }
  /** @param string */
  public function setLatestVirusScanTimestamp($latestVirusScanTimestamp)
  {
    $this->latestVirusScanTimestamp = $latestVirusScanTimestamp;
  }
  /** @return string */
  public function getLatestVirusScanTimestamp()
  {
    return $this->latestVirusScanTimestamp;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param AppsDynamiteSharedDimension */
  public function setOriginalDimension(AppsDynamiteSharedDimension $originalDimension)
  {
    $this->originalDimension = $originalDimension;
  }
  /** @return AppsDynamiteSharedDimension */
  public function getOriginalDimension()
  {
    return $this->originalDimension;
  }
  /** @param AppsDynamiteSharedVideoReference */
  public function setVideoReference(AppsDynamiteSharedVideoReference $videoReference)
  {
    $this->videoReference = $videoReference;
  }
  /** @return AppsDynamiteSharedVideoReference */
  public function getVideoReference()
  {
    return $this->videoReference;
  }
  /** @param string */
  public function setVirusScanResult($virusScanResult)
  {
    $this->virusScanResult = $virusScanResult;
  }
  /** @return string */
  public function getVirusScanResult()
  {
    return $this->virusScanResult;
  }
}

class UrlMetadata extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var SafeUrlProto */
  public $gwsUrl;
  /** @var string */
  public $gwsUrlExpirationTimestamp;
  /** @var string */
  public $imageHeight;
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $imageWidth;
  /** @var int */
  public $intImageHeight;
  /** @var int */
  public $intImageWidth;
  /** @var string */
  public $linkType;
  /** @var string */
  public $mimeType;
  /** @var SafeUrlProto */
  public $redirectUrl;
  /** @var bool */
  public $shouldNotRender;
  /** @var string */
  public $snippet;
  /** @var string */
  public $title;
  /** @var SafeUrlProto */
  public $url;
  /** @var string */
  public $urlSource;
  protected $gwsUrlType = SafeUrlProto::class;
  protected $gwsUrlDataType = '';
  protected $redirectUrlType = SafeUrlProto::class;
  protected $redirectUrlDataType = '';
  protected $urlType = SafeUrlProto::class;
  protected $urlDataType = '';
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
  /** @param SafeUrlProto */
  public function setGwsUrl(SafeUrlProto $gwsUrl)
  {
    $this->gwsUrl = $gwsUrl;
  }
  /** @return SafeUrlProto */
  public function getGwsUrl()
  {
    return $this->gwsUrl;
  }
  /** @param string */
  public function setGwsUrlExpirationTimestamp($gwsUrlExpirationTimestamp)
  {
    $this->gwsUrlExpirationTimestamp = $gwsUrlExpirationTimestamp;
  }
  /** @return string */
  public function getGwsUrlExpirationTimestamp()
  {
    return $this->gwsUrlExpirationTimestamp;
  }
  /** @param string */
  public function setImageHeight($imageHeight)
  {
    $this->imageHeight = $imageHeight;
  }
  /** @return string */
  public function getImageHeight()
  {
    return $this->imageHeight;
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
  public function setImageWidth($imageWidth)
  {
    $this->imageWidth = $imageWidth;
  }
  /** @return string */
  public function getImageWidth()
  {
    return $this->imageWidth;
  }
  /** @param int */
  public function setIntImageHeight($intImageHeight)
  {
    $this->intImageHeight = $intImageHeight;
  }
  /** @return int */
  public function getIntImageHeight()
  {
    return $this->intImageHeight;
  }
  /** @param int */
  public function setIntImageWidth($intImageWidth)
  {
    $this->intImageWidth = $intImageWidth;
  }
  /** @return int */
  public function getIntImageWidth()
  {
    return $this->intImageWidth;
  }
  /** @param string */
  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }
  /** @return string */
  public function getLinkType()
  {
    return $this->linkType;
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
  /** @param SafeUrlProto */
  public function setRedirectUrl(SafeUrlProto $redirectUrl)
  {
    $this->redirectUrl = $redirectUrl;
  }
  /** @return SafeUrlProto */
  public function getRedirectUrl()
  {
    return $this->redirectUrl;
  }
  /** @param bool */
  public function setShouldNotRender($shouldNotRender)
  {
    $this->shouldNotRender = $shouldNotRender;
  }
  /** @return bool */
  public function getShouldNotRender()
  {
    return $this->shouldNotRender;
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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
  }
  /** @param SafeUrlProto */
  public function setUrl(SafeUrlProto $url)
  {
    $this->url = $url;
  }
  /** @return SafeUrlProto */
  public function getUrl()
  {
    return $this->url;
  }
  /** @param string */
  public function setUrlSource($urlSource)
  {
    $this->urlSource = $urlSource;
  }
  /** @return string */
  public function getUrlSource()
  {
    return $this->urlSource;
  }
}

class User extends \Google\Collection
{
  /** @var string */
  public $avatarUrl;
  /** @var AppsDynamiteSharedUserBlockRelationship */
  public $blockRelationship;
  /** @var BotInfo */
  public $botInfo;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $email;
  /** @var string */
  public $firstName;
  /** @var string */
  public $gender;
  /** @var UserId */
  public $id;
  /** @var bool */
  public $isAnonymous;
  /** @var string */
  public $lastName;
  /** @var string */
  public $name;
  /** @var AppsDynamiteSharedOrganizationInfo */
  public $organizationInfo;
  /** @var AppsDynamiteSharedPhoneNumber[] */
  public $phoneNumber;
  /** @var string */
  public $userAccountState;
  /** @var string */
  public $userProfileVisibility;
  protected $collection_key = 'phoneNumber';
  protected $blockRelationshipType = AppsDynamiteSharedUserBlockRelationship::class;
  protected $blockRelationshipDataType = '';
  protected $botInfoType = BotInfo::class;
  protected $botInfoDataType = '';
  protected $idType = UserId::class;
  protected $idDataType = '';
  protected $organizationInfoType = AppsDynamiteSharedOrganizationInfo::class;
  protected $organizationInfoDataType = '';
  protected $phoneNumberType = AppsDynamiteSharedPhoneNumber::class;
  protected $phoneNumberDataType = 'array';
  /** @param string */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /** @return string */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
  }
  /** @param AppsDynamiteSharedUserBlockRelationship */
  public function setBlockRelationship(AppsDynamiteSharedUserBlockRelationship $blockRelationship)
  {
    $this->blockRelationship = $blockRelationship;
  }
  /** @return AppsDynamiteSharedUserBlockRelationship */
  public function getBlockRelationship()
  {
    return $this->blockRelationship;
  }
  /** @param BotInfo */
  public function setBotInfo(BotInfo $botInfo)
  {
    $this->botInfo = $botInfo;
  }
  /** @return BotInfo */
  public function getBotInfo()
  {
    return $this->botInfo;
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
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return string */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param UserId */
  public function setId(UserId $id)
  {
    $this->id = $id;
  }
  /** @return UserId */
  public function getId()
  {
    return $this->id;
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
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /** @return string */
  public function getLastName()
  {
    return $this->lastName;
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
  /** @param AppsDynamiteSharedOrganizationInfo */
  public function setOrganizationInfo(AppsDynamiteSharedOrganizationInfo $organizationInfo)
  {
    $this->organizationInfo = $organizationInfo;
  }
  /** @return AppsDynamiteSharedOrganizationInfo */
  public function getOrganizationInfo()
  {
    return $this->organizationInfo;
  }
  /** @param AppsDynamiteSharedPhoneNumber[] */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return AppsDynamiteSharedPhoneNumber[] */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setUserAccountState($userAccountState)
  {
    $this->userAccountState = $userAccountState;
  }
  /** @return string */
  public function getUserAccountState()
  {
    return $this->userAccountState;
  }
  /** @param string */
  public function setUserProfileVisibility($userProfileVisibility)
  {
    $this->userProfileVisibility = $userProfileVisibility;
  }
  /** @return string */
  public function getUserProfileVisibility()
  {
    return $this->userProfileVisibility;
  }
}

class UserDisplayInfo extends \Google\Model
{
  /** @var string */
  public $avatarUrl;
  /** @var string */
  public $displayName;

  /** @param string */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /** @return string */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
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
}

class UserId extends \Google\Model
{
  /** @var string */
  public $actingUserId;
  /** @var string */
  public $id;
  /** @var AppId */
  public $originAppId;
  /** @var string */
  public $type;
  protected $originAppIdType = AppId::class;
  protected $originAppIdDataType = '';
  /** @param string */
  public function setActingUserId($actingUserId)
  {
    $this->actingUserId = $actingUserId;
  }
  /** @return string */
  public function getActingUserId()
  {
    return $this->actingUserId;
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
  /** @param AppId */
  public function setOriginAppId(AppId $originAppId)
  {
    $this->originAppId = $originAppId;
  }
  /** @return AppId */
  public function getOriginAppId()
  {
    return $this->originAppId;
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

class UserInfo extends \Google\Model
{
  /** @var string */
  public $driveNotificationAvatarUrl;
  /** @var string */
  public $updaterCountDisplayType;
  /** @var int */
  public $updaterCountToShow;
  /** @var string */
  public $updaterToShowEmail;
  /** @var string */
  public $updaterToShowGaiaId;
  /** @var string */
  public $updaterToShowName;
  /** @var UserId */
  public $updaterToShowUserId;
  protected $updaterToShowUserIdType = UserId::class;
  protected $updaterToShowUserIdDataType = '';
  /** @param string */
  public function setDriveNotificationAvatarUrl($driveNotificationAvatarUrl)
  {
    $this->driveNotificationAvatarUrl = $driveNotificationAvatarUrl;
  }
  /** @return string */
  public function getDriveNotificationAvatarUrl()
  {
    return $this->driveNotificationAvatarUrl;
  }
  /** @param string */
  public function setUpdaterCountDisplayType($updaterCountDisplayType)
  {
    $this->updaterCountDisplayType = $updaterCountDisplayType;
  }
  /** @return string */
  public function getUpdaterCountDisplayType()
  {
    return $this->updaterCountDisplayType;
  }
  /** @param int */
  public function setUpdaterCountToShow($updaterCountToShow)
  {
    $this->updaterCountToShow = $updaterCountToShow;
  }
  /** @return int */
  public function getUpdaterCountToShow()
  {
    return $this->updaterCountToShow;
  }
  /** @param string */
  public function setUpdaterToShowEmail($updaterToShowEmail)
  {
    $this->updaterToShowEmail = $updaterToShowEmail;
  }
  /** @return string */
  public function getUpdaterToShowEmail()
  {
    return $this->updaterToShowEmail;
  }
  /** @param string */
  public function setUpdaterToShowGaiaId($updaterToShowGaiaId)
  {
    $this->updaterToShowGaiaId = $updaterToShowGaiaId;
  }
  /** @return string */
  public function getUpdaterToShowGaiaId()
  {
    return $this->updaterToShowGaiaId;
  }
  /** @param string */
  public function setUpdaterToShowName($updaterToShowName)
  {
    $this->updaterToShowName = $updaterToShowName;
  }
  /** @return string */
  public function getUpdaterToShowName()
  {
    return $this->updaterToShowName;
  }
  /** @param UserId */
  public function setUpdaterToShowUserId(UserId $updaterToShowUserId)
  {
    $this->updaterToShowUserId = $updaterToShowUserId;
  }
  /** @return UserId */
  public function getUpdaterToShowUserId()
  {
    return $this->updaterToShowUserId;
  }
}

class UserMentionData extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var PrincipalProto */
  public $user;
  /** @var string */
  public $userGaiaId;
  /** @var string */
  public $userId;
  protected $userType = PrincipalProto::class;
  protected $userDataType = '';
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
  /** @param PrincipalProto */
  public function setUser(PrincipalProto $user)
  {
    $this->user = $user;
  }
  /** @return PrincipalProto */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string */
  public function setUserGaiaId($userGaiaId)
  {
    $this->userGaiaId = $userGaiaId;
  }
  /** @return string */
  public function getUserGaiaId()
  {
    return $this->userGaiaId;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class UserMentionMetadata extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $gender;
  /** @var UserId */
  public $id;
  /** @var InviteeInfo */
  public $inviteeInfo;
  /** @var string */
  public $type;
  protected $idType = UserId::class;
  protected $idDataType = '';
  protected $inviteeInfoType = InviteeInfo::class;
  protected $inviteeInfoDataType = '';
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
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return string */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param UserId */
  public function setId(UserId $id)
  {
    $this->id = $id;
  }
  /** @return UserId */
  public function getId()
  {
    return $this->id;
  }
  /** @param InviteeInfo */
  public function setInviteeInfo(InviteeInfo $inviteeInfo)
  {
    $this->inviteeInfo = $inviteeInfo;
  }
  /** @return InviteeInfo */
  public function getInviteeInfo()
  {
    return $this->inviteeInfo;
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

class VPCSettings extends \Google\Model
{
  /** @var string */
  public $project;

  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
}

class Value extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var Date */
  public $dateValue;
  public $doubleValue;
  /** @var string */
  public $integerValue;
  /** @var string */
  public $stringValue;
  /** @var string */
  public $timestampValue;
  protected $dateValueType = Date::class;
  protected $dateValueDataType = '';
  /** @param bool */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /** @return bool */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /** @param Date */
  public function setDateValue(Date $dateValue)
  {
    $this->dateValue = $dateValue;
  }
  /** @return Date */
  public function getDateValue()
  {
    return $this->dateValue;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param string */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return string */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /** @param string */
  public function setTimestampValue($timestampValue)
  {
    $this->timestampValue = $timestampValue;
  }
  /** @return string */
  public function getTimestampValue()
  {
    return $this->timestampValue;
  }
}

class ValueFilter extends \Google\Model
{
  /** @var string */
  public $operatorName;
  /** @var Value */
  public $value;
  protected $valueType = Value::class;
  protected $valueDataType = '';
  /** @param string */
  public function setOperatorName($operatorName)
  {
    $this->operatorName = $operatorName;
  }
  /** @return string */
  public function getOperatorName()
  {
    return $this->operatorName;
  }
  /** @param Value */
  public function setValue(Value $value)
  {
    $this->value = $value;
  }
  /** @return Value */
  public function getValue()
  {
    return $this->value;
  }
}

class VideoCallMetadata extends \Google\Model
{
  /** @var MeetingSpace */
  public $meetingSpace;
  /** @var bool */
  public $shouldNotRender;
  /** @var bool */
  public $wasCreatedInCurrentGroup;
  protected $meetingSpaceType = MeetingSpace::class;
  protected $meetingSpaceDataType = '';
  /** @param MeetingSpace */
  public function setMeetingSpace(MeetingSpace $meetingSpace)
  {
    $this->meetingSpace = $meetingSpace;
  }
  /** @return MeetingSpace */
  public function getMeetingSpace()
  {
    return $this->meetingSpace;
  }
  /** @param bool */
  public function setShouldNotRender($shouldNotRender)
  {
    $this->shouldNotRender = $shouldNotRender;
  }
  /** @return bool */
  public function getShouldNotRender()
  {
    return $this->shouldNotRender;
  }
  /** @param bool */
  public function setWasCreatedInCurrentGroup($wasCreatedInCurrentGroup)
  {
    $this->wasCreatedInCurrentGroup = $wasCreatedInCurrentGroup;
  }
  /** @return bool */
  public function getWasCreatedInCurrentGroup()
  {
    return $this->wasCreatedInCurrentGroup;
  }
}

class VideoInfo extends \Google\Model
{
  /** @var int */
  public $duration;

  /** @param int */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return int */
  public function getDuration()
  {
    return $this->duration;
  }
}

class VoicePhoneNumber extends \Google\Model
{
  /** @var string */
  public $e164;
  /** @var VoicePhoneNumberI18nData */
  public $i18nData;
  protected $i18nDataType = VoicePhoneNumberI18nData::class;
  protected $i18nDataDataType = '';
  /** @param string */
  public function setE164($e164)
  {
    $this->e164 = $e164;
  }
  /** @return string */
  public function getE164()
  {
    return $this->e164;
  }
  /** @param VoicePhoneNumberI18nData */
  public function setI18nData(VoicePhoneNumberI18nData $i18nData)
  {
    $this->i18nData = $i18nData;
  }
  /** @return VoicePhoneNumberI18nData */
  public function getI18nData()
  {
    return $this->i18nData;
  }
}

class VoicePhoneNumberI18nData extends \Google\Model
{
  /** @var int */
  public $countryCode;
  /** @var string */
  public $internationalNumber;
  /** @var bool */
  public $isValid;
  /** @var string */
  public $nationalNumber;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $validationResult;

  /** @param int */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return int */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /** @param string */
  public function setInternationalNumber($internationalNumber)
  {
    $this->internationalNumber = $internationalNumber;
  }
  /** @return string */
  public function getInternationalNumber()
  {
    return $this->internationalNumber;
  }
  /** @param bool */
  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }
  /** @return bool */
  public function getIsValid()
  {
    return $this->isValid;
  }
  /** @param string */
  public function setNationalNumber($nationalNumber)
  {
    $this->nationalNumber = $nationalNumber;
  }
  /** @return string */
  public function getNationalNumber()
  {
    return $this->nationalNumber;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /** @param string */
  public function setValidationResult($validationResult)
  {
    $this->validationResult = $validationResult;
  }
  /** @return string */
  public function getValidationResult()
  {
    return $this->validationResult;
  }
}

class WhiteboardInfo extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $title;
  /** @var string */
  public $uri;

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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
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

class WidgetMarkup extends \Google\Collection
{
  /** @var Button[] */
  public $buttons;
  /** @var DateTimePicker */
  public $dateTimePicker;
  /** @var Divider */
  public $divider;
  /** @var Grid */
  public $grid;
  /** @var string */
  public $horizontalAlignment;
  /** @var Image */
  public $image;
  /** @var ImageKeyValue */
  public $imageKeyValue;
  /** @var KeyValue */
  public $keyValue;
  /** @var Menu */
  public $menu;
  /** @var SelectionControl */
  public $selectionControl;
  /** @var TextField */
  public $textField;
  /** @var TextKeyValue */
  public $textKeyValue;
  /** @var TextParagraph */
  public $textParagraph;
  protected $collection_key = 'buttons';
  protected $buttonsType = Button::class;
  protected $buttonsDataType = 'array';
  protected $dateTimePickerType = DateTimePicker::class;
  protected $dateTimePickerDataType = '';
  protected $dividerType = Divider::class;
  protected $dividerDataType = '';
  protected $gridType = Grid::class;
  protected $gridDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $imageKeyValueType = ImageKeyValue::class;
  protected $imageKeyValueDataType = '';
  protected $keyValueType = KeyValue::class;
  protected $keyValueDataType = '';
  protected $menuType = Menu::class;
  protected $menuDataType = '';
  protected $selectionControlType = SelectionControl::class;
  protected $selectionControlDataType = '';
  protected $textFieldType = TextField::class;
  protected $textFieldDataType = '';
  protected $textKeyValueType = TextKeyValue::class;
  protected $textKeyValueDataType = '';
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
  /** @param DateTimePicker */
  public function setDateTimePicker(DateTimePicker $dateTimePicker)
  {
    $this->dateTimePicker = $dateTimePicker;
  }
  /** @return DateTimePicker */
  public function getDateTimePicker()
  {
    return $this->dateTimePicker;
  }
  /** @param Divider */
  public function setDivider(Divider $divider)
  {
    $this->divider = $divider;
  }
  /** @return Divider */
  public function getDivider()
  {
    return $this->divider;
  }
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
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
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
  /** @param ImageKeyValue */
  public function setImageKeyValue(ImageKeyValue $imageKeyValue)
  {
    $this->imageKeyValue = $imageKeyValue;
  }
  /** @return ImageKeyValue */
  public function getImageKeyValue()
  {
    return $this->imageKeyValue;
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
  /** @param Menu */
  public function setMenu(Menu $menu)
  {
    $this->menu = $menu;
  }
  /** @return Menu */
  public function getMenu()
  {
    return $this->menu;
  }
  /** @param SelectionControl */
  public function setSelectionControl(SelectionControl $selectionControl)
  {
    $this->selectionControl = $selectionControl;
  }
  /** @return SelectionControl */
  public function getSelectionControl()
  {
    return $this->selectionControl;
  }
  /** @param TextField */
  public function setTextField(TextField $textField)
  {
    $this->textField = $textField;
  }
  /** @return TextField */
  public function getTextField()
  {
    return $this->textField;
  }
  /** @param TextKeyValue */
  public function setTextKeyValue(TextKeyValue $textKeyValue)
  {
    $this->textKeyValue = $textKeyValue;
  }
  /** @return TextKeyValue */
  public function getTextKeyValue()
  {
    return $this->textKeyValue;
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

class WrappedResourceKey extends \Google\Model
{
  /** @var string */
  public $resourceKey;

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
}

class YouTubeBroadcastSessionInfo extends \Google\Model
{
  /** @var YouTubeBroadcastStats */
  public $broadcastStats;
  /** @var SessionStateInfo */
  public $sessionStateInfo;
  /** @var string */
  public $youTubeBroadcastSessionId;
  /** @var YouTubeLiveBroadcastEvent */
  public $youTubeLiveBroadcastEvent;
  protected $broadcastStatsType = YouTubeBroadcastStats::class;
  protected $broadcastStatsDataType = '';
  protected $sessionStateInfoType = SessionStateInfo::class;
  protected $sessionStateInfoDataType = '';
  protected $youTubeLiveBroadcastEventType = YouTubeLiveBroadcastEvent::class;
  protected $youTubeLiveBroadcastEventDataType = '';
  /** @param YouTubeBroadcastStats */
  public function setBroadcastStats(YouTubeBroadcastStats $broadcastStats)
  {
    $this->broadcastStats = $broadcastStats;
  }
  /** @return YouTubeBroadcastStats */
  public function getBroadcastStats()
  {
    return $this->broadcastStats;
  }
  /** @param SessionStateInfo */
  public function setSessionStateInfo(SessionStateInfo $sessionStateInfo)
  {
    $this->sessionStateInfo = $sessionStateInfo;
  }
  /** @return SessionStateInfo */
  public function getSessionStateInfo()
  {
    return $this->sessionStateInfo;
  }
  /** @param string */
  public function setYouTubeBroadcastSessionId($youTubeBroadcastSessionId)
  {
    $this->youTubeBroadcastSessionId = $youTubeBroadcastSessionId;
  }
  /** @return string */
  public function getYouTubeBroadcastSessionId()
  {
    return $this->youTubeBroadcastSessionId;
  }
  /** @param YouTubeLiveBroadcastEvent */
  public function setYouTubeLiveBroadcastEvent(YouTubeLiveBroadcastEvent $youTubeLiveBroadcastEvent)
  {
    $this->youTubeLiveBroadcastEvent = $youTubeLiveBroadcastEvent;
  }
  /** @return YouTubeLiveBroadcastEvent */
  public function getYouTubeLiveBroadcastEvent()
  {
    return $this->youTubeLiveBroadcastEvent;
  }
}

class YouTubeBroadcastStats extends \Google\Model
{
  /** @var string */
  public $estimatedViewerCount;

  /** @param string */
  public function setEstimatedViewerCount($estimatedViewerCount)
  {
    $this->estimatedViewerCount = $estimatedViewerCount;
  }
  /** @return string */
  public function getEstimatedViewerCount()
  {
    return $this->estimatedViewerCount;
  }
}

class YouTubeLiveBroadcastEvent extends \Google\Model
{
  /** @var string */
  public $broadcastId;
  /** @var string */
  public $channelId;
  /** @var string */
  public $viewUrl;

  /** @param string */
  public function setBroadcastId($broadcastId)
  {
    $this->broadcastId = $broadcastId;
  }
  /** @return string */
  public function getBroadcastId()
  {
    return $this->broadcastId;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setViewUrl($viewUrl)
  {
    $this->viewUrl = $viewUrl;
  }
  /** @return string */
  public function getViewUrl()
  {
    return $this->viewUrl;
  }
}

class YoutubeMetadata extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var bool */
  public $shouldNotRender;
  /** @var int */
  public $startTime;

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
  public function setShouldNotRender($shouldNotRender)
  {
    $this->shouldNotRender = $shouldNotRender;
  }
  /** @return bool */
  public function getShouldNotRender()
  {
    return $this->shouldNotRender;
  }
  /** @param int */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return int */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class YoutubeUserProto extends \Google\Model
{
  /** @var string */
  public $youtubeUserId;

  /** @param string */
  public function setYoutubeUserId($youtubeUserId)
  {
    $this->youtubeUserId = $youtubeUserId;
  }
  /** @return string */
  public function getYoutubeUserId()
  {
    return $this->youtubeUserId;
  }
}

class ZwiebackSessionProto extends \Google\Model
{
  /** @var string */
  public $zwiebackSessionId;

  /** @param string */
  public function setZwiebackSessionId($zwiebackSessionId)
  {
    $this->zwiebackSessionId = $zwiebackSessionId;
  }
  /** @return string */
  public function getZwiebackSessionId()
  {
    return $this->zwiebackSessionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbuseReportingConfig::class, 'Google_Service_CloudSearch_AbuseReportingConfig');
class_alias(AckInfo::class, 'Google_Service_CloudSearch_AckInfo');
class_alias(AclFixRequest::class, 'Google_Service_CloudSearch_AclFixRequest');
class_alias(AclFixStatus::class, 'Google_Service_CloudSearch_AclFixStatus');
class_alias(AclInfo::class, 'Google_Service_CloudSearch_AclInfo');
class_alias(ActionParameter::class, 'Google_Service_CloudSearch_ActionParameter');
class_alias(AddonComposeUiActionMarkup::class, 'Google_Service_CloudSearch_AddonComposeUiActionMarkup');
class_alias(AffectedMembership::class, 'Google_Service_CloudSearch_AffectedMembership');
class_alias(AllAuthenticatedUsersProto::class, 'Google_Service_CloudSearch_AllAuthenticatedUsersProto');
class_alias(Annotation::class, 'Google_Service_CloudSearch_Annotation');
class_alias(AppId::class, 'Google_Service_CloudSearch_AppId');
class_alias(AppsDynamiteSharedAction::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAction');
class_alias(AppsDynamiteSharedActionActionParameter::class, 'Google_Service_CloudSearch_AppsDynamiteSharedActionActionParameter');
class_alias(AppsDynamiteSharedActivityFeedAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedActivityFeedAnnotationData');
class_alias(AppsDynamiteSharedActivityFeedAnnotationDataUserInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedActivityFeedAnnotationDataUserInfo');
class_alias(AppsDynamiteSharedAppProfile::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAppProfile');
class_alias(AppsDynamiteSharedAssistantAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantAnnotationData');
class_alias(AppsDynamiteSharedAssistantDebugContext::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantDebugContext');
class_alias(AppsDynamiteSharedAssistantFeedbackContext::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantFeedbackContext');
class_alias(AppsDynamiteSharedAssistantFeedbackContextFeedbackChip::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantFeedbackContextFeedbackChip');
class_alias(AppsDynamiteSharedAssistantSessionContext::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantSessionContext');
class_alias(AppsDynamiteSharedAssistantSuggestion::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantSuggestion');
class_alias(AppsDynamiteSharedAssistantUnfulfillableRequest::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantUnfulfillableRequest');
class_alias(AppsDynamiteSharedAvatarInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAvatarInfo');
class_alias(AppsDynamiteSharedBackendUploadMetadata::class, 'Google_Service_CloudSearch_AppsDynamiteSharedBackendUploadMetadata');
class_alias(AppsDynamiteSharedBorderStyle::class, 'Google_Service_CloudSearch_AppsDynamiteSharedBorderStyle');
class_alias(AppsDynamiteSharedButton::class, 'Google_Service_CloudSearch_AppsDynamiteSharedButton');
class_alias(AppsDynamiteSharedButtonList::class, 'Google_Service_CloudSearch_AppsDynamiteSharedButtonList');
class_alias(AppsDynamiteSharedCalendarEventAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCalendarEventAnnotationData');
class_alias(AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCalendarEventAnnotationDataCalendarEvent');
class_alias(AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCalendarEventAnnotationDataCalendarEventTime');
class_alias(AppsDynamiteSharedCalendarEventAnnotationDataEventCreation::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCalendarEventAnnotationDataEventCreation');
class_alias(AppsDynamiteSharedCallAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCallAnnotationData');
class_alias(AppsDynamiteSharedCallMetadata::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCallMetadata');
class_alias(AppsDynamiteSharedCard::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCard');
class_alias(AppsDynamiteSharedCardCardAction::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCardCardAction');
class_alias(AppsDynamiteSharedCardCardHeader::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCardCardHeader');
class_alias(AppsDynamiteSharedCardClickSuggestion::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCardClickSuggestion');
class_alias(AppsDynamiteSharedCardSection::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCardSection');
class_alias(AppsDynamiteSharedChatItem::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItem');
class_alias(AppsDynamiteSharedChatItemActivityInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemActivityInfo');
class_alias(AppsDynamiteSharedChatItemActivityInfoFeedItemNudge::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemActivityInfoFeedItemNudge');
class_alias(AppsDynamiteSharedChatItemActivityInfoFeedItemReactions::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemActivityInfoFeedItemReactions');
class_alias(AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemActivityInfoFeedItemThreadReply');
class_alias(AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemActivityInfoFeedItemUserMention');
class_alias(AppsDynamiteSharedChatItemGroupInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedChatItemGroupInfo');
class_alias(AppsDynamiteSharedColumns::class, 'Google_Service_CloudSearch_AppsDynamiteSharedColumns');
class_alias(AppsDynamiteSharedColumnsColumn::class, 'Google_Service_CloudSearch_AppsDynamiteSharedColumnsColumn');
class_alias(AppsDynamiteSharedColumnsColumnWidgets::class, 'Google_Service_CloudSearch_AppsDynamiteSharedColumnsColumnWidgets');
class_alias(AppsDynamiteSharedContentReportType::class, 'Google_Service_CloudSearch_AppsDynamiteSharedContentReportType');
class_alias(AppsDynamiteSharedCustomEmoji::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCustomEmoji');
class_alias(AppsDynamiteSharedDateTimePicker::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDateTimePicker');
class_alias(AppsDynamiteSharedDecoratedText::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDecoratedText');
class_alias(AppsDynamiteSharedDecoratedTextSwitchControl::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDecoratedTextSwitchControl');
class_alias(AppsDynamiteSharedDimension::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDimension');
class_alias(AppsDynamiteSharedDivider::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDivider');
class_alias(AppsDynamiteSharedDlpMetricsMetadata::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDlpMetricsMetadata');
class_alias(AppsDynamiteSharedDocument::class, 'Google_Service_CloudSearch_AppsDynamiteSharedDocument');
class_alias(AppsDynamiteSharedEmoji::class, 'Google_Service_CloudSearch_AppsDynamiteSharedEmoji');
class_alias(AppsDynamiteSharedFindDocumentSuggestion::class, 'Google_Service_CloudSearch_AppsDynamiteSharedFindDocumentSuggestion');
class_alias(AppsDynamiteSharedGrid::class, 'Google_Service_CloudSearch_AppsDynamiteSharedGrid');
class_alias(AppsDynamiteSharedGridGridItem::class, 'Google_Service_CloudSearch_AppsDynamiteSharedGridGridItem');
class_alias(AppsDynamiteSharedGroupDetails::class, 'Google_Service_CloudSearch_AppsDynamiteSharedGroupDetails');
class_alias(AppsDynamiteSharedGroupVisibility::class, 'Google_Service_CloudSearch_AppsDynamiteSharedGroupVisibility');
class_alias(AppsDynamiteSharedIcon::class, 'Google_Service_CloudSearch_AppsDynamiteSharedIcon');
class_alias(AppsDynamiteSharedImage::class, 'Google_Service_CloudSearch_AppsDynamiteSharedImage');
class_alias(AppsDynamiteSharedImageComponent::class, 'Google_Service_CloudSearch_AppsDynamiteSharedImageComponent');
class_alias(AppsDynamiteSharedImageCropStyle::class, 'Google_Service_CloudSearch_AppsDynamiteSharedImageCropStyle');
class_alias(AppsDynamiteSharedJustification::class, 'Google_Service_CloudSearch_AppsDynamiteSharedJustification');
class_alias(AppsDynamiteSharedJustificationPerson::class, 'Google_Service_CloudSearch_AppsDynamiteSharedJustificationPerson');
class_alias(AppsDynamiteSharedMeetMetadata::class, 'Google_Service_CloudSearch_AppsDynamiteSharedMeetMetadata');
class_alias(AppsDynamiteSharedMessageInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedMessageInfo');
class_alias(AppsDynamiteSharedMessageIntegrationPayload::class, 'Google_Service_CloudSearch_AppsDynamiteSharedMessageIntegrationPayload');
class_alias(AppsDynamiteSharedOnClick::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOnClick');
class_alias(AppsDynamiteSharedOpenLink::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOpenLink');
class_alias(AppsDynamiteSharedOpenLinkAppUri::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOpenLinkAppUri');
class_alias(AppsDynamiteSharedOpenLinkAppUriIntent::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOpenLinkAppUriIntent');
class_alias(AppsDynamiteSharedOpenLinkAppUriIntentExtraData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOpenLinkAppUriIntentExtraData');
class_alias(AppsDynamiteSharedOrganizationInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOrganizationInfo');
class_alias(AppsDynamiteSharedOrganizationInfoConsumerInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOrganizationInfoConsumerInfo');
class_alias(AppsDynamiteSharedOrganizationInfoCustomerInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOrganizationInfoCustomerInfo');
class_alias(AppsDynamiteSharedOriginAppSuggestion::class, 'Google_Service_CloudSearch_AppsDynamiteSharedOriginAppSuggestion');
class_alias(AppsDynamiteSharedPhoneNumber::class, 'Google_Service_CloudSearch_AppsDynamiteSharedPhoneNumber');
class_alias(AppsDynamiteSharedReaction::class, 'Google_Service_CloudSearch_AppsDynamiteSharedReaction');
class_alias(AppsDynamiteSharedRetentionSettings::class, 'Google_Service_CloudSearch_AppsDynamiteSharedRetentionSettings');
class_alias(AppsDynamiteSharedSegmentedMembershipCount::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSegmentedMembershipCount');
class_alias(AppsDynamiteSharedSegmentedMembershipCounts::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSegmentedMembershipCounts');
class_alias(AppsDynamiteSharedSelectionInput::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSelectionInput');
class_alias(AppsDynamiteSharedSelectionInputSelectionItem::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSelectionInputSelectionItem');
class_alias(AppsDynamiteSharedSpaceInfo::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSpaceInfo');
class_alias(AppsDynamiteSharedSuggestions::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSuggestions');
class_alias(AppsDynamiteSharedSuggestionsSuggestionItem::class, 'Google_Service_CloudSearch_AppsDynamiteSharedSuggestionsSuggestionItem');
class_alias(AppsDynamiteSharedTasksAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationData');
class_alias(AppsDynamiteSharedTasksAnnotationDataAssigneeChange::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataAssigneeChange');
class_alias(AppsDynamiteSharedTasksAnnotationDataCompletionChange::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataCompletionChange');
class_alias(AppsDynamiteSharedTasksAnnotationDataCreation::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataCreation');
class_alias(AppsDynamiteSharedTasksAnnotationDataDeletionChange::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataDeletionChange');
class_alias(AppsDynamiteSharedTasksAnnotationDataTaskProperties::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataTaskProperties');
class_alias(AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksAnnotationDataUserDefinedMessage');
class_alias(AppsDynamiteSharedTasksMessageIntegrationPayload::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTasksMessageIntegrationPayload');
class_alias(AppsDynamiteSharedTextInput::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTextInput');
class_alias(AppsDynamiteSharedTextParagraph::class, 'Google_Service_CloudSearch_AppsDynamiteSharedTextParagraph');
class_alias(AppsDynamiteSharedUserBlockRelationship::class, 'Google_Service_CloudSearch_AppsDynamiteSharedUserBlockRelationship');
class_alias(AppsDynamiteSharedVideoReference::class, 'Google_Service_CloudSearch_AppsDynamiteSharedVideoReference');
class_alias(AppsDynamiteSharedWidget::class, 'Google_Service_CloudSearch_AppsDynamiteSharedWidget');
class_alias(AppsDynamiteV1ApiCompatV1Action::class, 'Google_Service_CloudSearch_AppsDynamiteV1ApiCompatV1Action');
class_alias(AppsDynamiteV1ApiCompatV1ActionConfirm::class, 'Google_Service_CloudSearch_AppsDynamiteV1ApiCompatV1ActionConfirm');
class_alias(AppsDynamiteV1ApiCompatV1Attachment::class, 'Google_Service_CloudSearch_AppsDynamiteV1ApiCompatV1Attachment');
class_alias(AppsDynamiteV1ApiCompatV1Field::class, 'Google_Service_CloudSearch_AppsDynamiteV1ApiCompatV1Field');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkup');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupAddAttachmentsActionMarkupAddonAttachment');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupEditAttendeesActionMarkup');
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupEditConferenceDataActionMarkup');
class_alias(Attachment::class, 'Google_Service_CloudSearch_Attachment');
class_alias(Attribute::class, 'Google_Service_CloudSearch_Attribute');
class_alias(AttributeRemoved::class, 'Google_Service_CloudSearch_AttributeRemoved');
class_alias(AttributeSet::class, 'Google_Service_CloudSearch_AttributeSet');
class_alias(Attributes::class, 'Google_Service_CloudSearch_Attributes');
class_alias(AuditLoggingSettings::class, 'Google_Service_CloudSearch_AuditLoggingSettings');
class_alias(AuthorizedItemId::class, 'Google_Service_CloudSearch_AuthorizedItemId');
class_alias(AutoComplete::class, 'Google_Service_CloudSearch_AutoComplete');
class_alias(AutoCompleteItem::class, 'Google_Service_CloudSearch_AutoCompleteItem');
class_alias(BabelMessageProps::class, 'Google_Service_CloudSearch_BabelMessageProps');
class_alias(BabelPlaceholderMetadata::class, 'Google_Service_CloudSearch_BabelPlaceholderMetadata');
class_alias(BooleanOperatorOptions::class, 'Google_Service_CloudSearch_BooleanOperatorOptions');
class_alias(BooleanPropertyOptions::class, 'Google_Service_CloudSearch_BooleanPropertyOptions');
class_alias(BorderStyle::class, 'Google_Service_CloudSearch_BorderStyle');
class_alias(BotInfo::class, 'Google_Service_CloudSearch_BotInfo');
class_alias(BotResponse::class, 'Google_Service_CloudSearch_BotResponse');
class_alias(BroadcastAccess::class, 'Google_Service_CloudSearch_BroadcastAccess');
class_alias(BroadcastSessionInfo::class, 'Google_Service_CloudSearch_BroadcastSessionInfo');
class_alias(BroadcastStats::class, 'Google_Service_CloudSearch_BroadcastStats');
class_alias(Button::class, 'Google_Service_CloudSearch_Button');
class_alias(CalendarClientActionMarkup::class, 'Google_Service_CloudSearch_CalendarClientActionMarkup');
class_alias(CallInfo::class, 'Google_Service_CloudSearch_CallInfo');
class_alias(CallSettings::class, 'Google_Service_CloudSearch_CallSettings');
class_alias(CapTokenHolderProto::class, 'Google_Service_CloudSearch_CapTokenHolderProto');
class_alias(Card::class, 'Google_Service_CloudSearch_Card');
class_alias(CardAction::class, 'Google_Service_CloudSearch_CardAction');
class_alias(CardCapabilityMetadata::class, 'Google_Service_CloudSearch_CardCapabilityMetadata');
class_alias(CardHeader::class, 'Google_Service_CloudSearch_CardHeader');
class_alias(CaribouAttributeValue::class, 'Google_Service_CloudSearch_CaribouAttributeValue');
class_alias(ChatClientActionMarkup::class, 'Google_Service_CloudSearch_ChatClientActionMarkup');
class_alias(ChatConserverDynamitePlaceholderMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataAttachmentMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataAttachmentMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataBotMessageMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataBotMessageMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataCalendarEventMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataDeleteMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataDeleteMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataEditMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataEditMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataTasksMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataTasksMetadata');
class_alias(ChatConserverDynamitePlaceholderMetadataVideoCallMetadata::class, 'Google_Service_CloudSearch_ChatConserverDynamitePlaceholderMetadataVideoCallMetadata');
class_alias(ChatConserverMessageContent::class, 'Google_Service_CloudSearch_ChatConserverMessageContent');
class_alias(ChatContentExtension::class, 'Google_Service_CloudSearch_ChatContentExtension');
class_alias(ChatProto::class, 'Google_Service_CloudSearch_ChatProto');
class_alias(CheckAccessResponse::class, 'Google_Service_CloudSearch_CheckAccessResponse');
class_alias(CircleProto::class, 'Google_Service_CloudSearch_CircleProto');
class_alias(ClientContext::class, 'Google_Service_CloudSearch_ClientContext');
class_alias(CloudPrincipalProto::class, 'Google_Service_CloudSearch_CloudPrincipalProto');
class_alias(ClusterInfo::class, 'Google_Service_CloudSearch_ClusterInfo');
class_alias(CoActivity::class, 'Google_Service_CloudSearch_CoActivity');
class_alias(Collaboration::class, 'Google_Service_CloudSearch_Collaboration');
class_alias(Color::class, 'Google_Service_CloudSearch_Color');
class_alias(CommunalLabelTag::class, 'Google_Service_CloudSearch_CommunalLabelTag');
class_alias(CompositeFilter::class, 'Google_Service_CloudSearch_CompositeFilter');
class_alias(ConsentedAppUnfurlMetadata::class, 'Google_Service_CloudSearch_ConsentedAppUnfurlMetadata');
class_alias(ContactGroupProto::class, 'Google_Service_CloudSearch_ContactGroupProto');
class_alias(ContentReport::class, 'Google_Service_CloudSearch_ContentReport');
class_alias(ContentReportJustification::class, 'Google_Service_CloudSearch_ContentReportJustification');
class_alias(ContentReportSummary::class, 'Google_Service_CloudSearch_ContentReportSummary');
class_alias(ContextAttribute::class, 'Google_Service_CloudSearch_ContextAttribute');
class_alias(ContextualAddOnMarkup::class, 'Google_Service_CloudSearch_ContextualAddOnMarkup');
class_alias(CseInfo::class, 'Google_Service_CloudSearch_CseInfo');
class_alias(CustomEmojiMetadata::class, 'Google_Service_CloudSearch_CustomEmojiMetadata');
class_alias(CustomFunctionReturnValueMarkup::class, 'Google_Service_CloudSearch_CustomFunctionReturnValueMarkup');
class_alias(CustomerId::class, 'Google_Service_CloudSearch_CustomerId');
class_alias(CustomerIndexStats::class, 'Google_Service_CloudSearch_CustomerIndexStats');
class_alias(CustomerQueryStats::class, 'Google_Service_CloudSearch_CustomerQueryStats');
class_alias(CustomerSearchApplicationStats::class, 'Google_Service_CloudSearch_CustomerSearchApplicationStats');
class_alias(CustomerSessionStats::class, 'Google_Service_CloudSearch_CustomerSessionStats');
class_alias(CustomerSettings::class, 'Google_Service_CloudSearch_CustomerSettings');
class_alias(CustomerUserStats::class, 'Google_Service_CloudSearch_CustomerUserStats');
class_alias(DataLossPreventionMetadata::class, 'Google_Service_CloudSearch_DataLossPreventionMetadata');
class_alias(DataSource::class, 'Google_Service_CloudSearch_DataSource');
class_alias(DataSourceIndexStats::class, 'Google_Service_CloudSearch_DataSourceIndexStats');
class_alias(DataSourceRestriction::class, 'Google_Service_CloudSearch_DataSourceRestriction');
class_alias(Date::class, 'Google_Service_CloudSearch_Date');
class_alias(DateOperatorOptions::class, 'Google_Service_CloudSearch_DateOperatorOptions');
class_alias(DatePropertyOptions::class, 'Google_Service_CloudSearch_DatePropertyOptions');
class_alias(DateTimePicker::class, 'Google_Service_CloudSearch_DateTimePicker');
class_alias(DateValues::class, 'Google_Service_CloudSearch_DateValues');
class_alias(DebugOptions::class, 'Google_Service_CloudSearch_DebugOptions');
class_alias(DeepLinkData::class, 'Google_Service_CloudSearch_DeepLinkData');
class_alias(DeleteMetadata::class, 'Google_Service_CloudSearch_DeleteMetadata');
class_alias(DeleteQueueItemsRequest::class, 'Google_Service_CloudSearch_DeleteQueueItemsRequest');
class_alias(DeliveryMedium::class, 'Google_Service_CloudSearch_DeliveryMedium');
class_alias(DisplayedProperty::class, 'Google_Service_CloudSearch_DisplayedProperty');
class_alias(Divider::class, 'Google_Service_CloudSearch_Divider');
class_alias(DlpScanSummary::class, 'Google_Service_CloudSearch_DlpScanSummary');
class_alias(DmId::class, 'Google_Service_CloudSearch_DmId');
class_alias(DocumentInfo::class, 'Google_Service_CloudSearch_DocumentInfo');
class_alias(DoubleOperatorOptions::class, 'Google_Service_CloudSearch_DoubleOperatorOptions');
class_alias(DoublePropertyOptions::class, 'Google_Service_CloudSearch_DoublePropertyOptions');
class_alias(DoubleValues::class, 'Google_Service_CloudSearch_DoubleValues');
class_alias(DriveClientActionMarkup::class, 'Google_Service_CloudSearch_DriveClientActionMarkup');
class_alias(DriveFollowUpRestrict::class, 'Google_Service_CloudSearch_DriveFollowUpRestrict');
class_alias(DriveLocationRestrict::class, 'Google_Service_CloudSearch_DriveLocationRestrict');
class_alias(DriveMetadata::class, 'Google_Service_CloudSearch_DriveMetadata');
class_alias(DriveMimeTypeRestrict::class, 'Google_Service_CloudSearch_DriveMimeTypeRestrict');
class_alias(DriveTimeSpanRestrict::class, 'Google_Service_CloudSearch_DriveTimeSpanRestrict');
class_alias(DynamiteSpacesScoringInfo::class, 'Google_Service_CloudSearch_DynamiteSpacesScoringInfo');
class_alias(EditMetadata::class, 'Google_Service_CloudSearch_EditMetadata');
class_alias(EditorClientActionMarkup::class, 'Google_Service_CloudSearch_EditorClientActionMarkup');
class_alias(EmailAddress::class, 'Google_Service_CloudSearch_EmailAddress');
class_alias(EmailOwnerProto::class, 'Google_Service_CloudSearch_EmailOwnerProto');
class_alias(EmbedClientItem::class, 'Google_Service_CloudSearch_EmbedClientItem');
class_alias(EnumOperatorOptions::class, 'Google_Service_CloudSearch_EnumOperatorOptions');
class_alias(EnumPropertyOptions::class, 'Google_Service_CloudSearch_EnumPropertyOptions');
class_alias(EnumValuePair::class, 'Google_Service_CloudSearch_EnumValuePair');
class_alias(EnumValues::class, 'Google_Service_CloudSearch_EnumValues');
class_alias(ErrorInfo::class, 'Google_Service_CloudSearch_ErrorInfo');
class_alias(ErrorMessage::class, 'Google_Service_CloudSearch_ErrorMessage');
class_alias(EventAnnotation::class, 'Google_Service_CloudSearch_EventAnnotation');
class_alias(EventProto::class, 'Google_Service_CloudSearch_EventProto');
class_alias(FacetBucket::class, 'Google_Service_CloudSearch_FacetBucket');
class_alias(FacetOptions::class, 'Google_Service_CloudSearch_FacetOptions');
class_alias(FacetResult::class, 'Google_Service_CloudSearch_FacetResult');
class_alias(FieldViolation::class, 'Google_Service_CloudSearch_FieldViolation');
class_alias(Filter::class, 'Google_Service_CloudSearch_Filter');
class_alias(FilterCreated::class, 'Google_Service_CloudSearch_FilterCreated');
class_alias(FilterDeleted::class, 'Google_Service_CloudSearch_FilterDeleted');
class_alias(FilterOptions::class, 'Google_Service_CloudSearch_FilterOptions');
class_alias(FilterUpdate::class, 'Google_Service_CloudSearch_FilterUpdate');
class_alias(FixedFooter::class, 'Google_Service_CloudSearch_FixedFooter');
class_alias(Folder::class, 'Google_Service_CloudSearch_Folder');
class_alias(FolderAttribute::class, 'Google_Service_CloudSearch_FolderAttribute');
class_alias(FormAction::class, 'Google_Service_CloudSearch_FormAction');
class_alias(FormatMetadata::class, 'Google_Service_CloudSearch_FormatMetadata');
class_alias(Formatting::class, 'Google_Service_CloudSearch_Formatting');
class_alias(FreshnessOptions::class, 'Google_Service_CloudSearch_FreshnessOptions');
class_alias(FuseboxItem::class, 'Google_Service_CloudSearch_FuseboxItem');
class_alias(FuseboxItemThreadMatchInfo::class, 'Google_Service_CloudSearch_FuseboxItemThreadMatchInfo');
class_alias(FuseboxPrefUpdatePreState::class, 'Google_Service_CloudSearch_FuseboxPrefUpdatePreState');
class_alias(GSuitePrincipal::class, 'Google_Service_CloudSearch_GSuitePrincipal');
class_alias(GaiaGroupProto::class, 'Google_Service_CloudSearch_GaiaGroupProto');
class_alias(GaiaUserProto::class, 'Google_Service_CloudSearch_GaiaUserProto');
class_alias(GatewayAccess::class, 'Google_Service_CloudSearch_GatewayAccess');
class_alias(GatewaySipAccess::class, 'Google_Service_CloudSearch_GatewaySipAccess');
class_alias(GetCustomerIndexStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerIndexStatsResponse');
class_alias(GetCustomerQueryStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerQueryStatsResponse');
class_alias(GetCustomerSearchApplicationStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerSearchApplicationStatsResponse');
class_alias(GetCustomerSessionStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerSessionStatsResponse');
class_alias(GetCustomerUserStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerUserStatsResponse');
class_alias(GetDataSourceIndexStatsResponse::class, 'Google_Service_CloudSearch_GetDataSourceIndexStatsResponse');
class_alias(GetSearchApplicationQueryStatsResponse::class, 'Google_Service_CloudSearch_GetSearchApplicationQueryStatsResponse');
class_alias(GetSearchApplicationSessionStatsResponse::class, 'Google_Service_CloudSearch_GetSearchApplicationSessionStatsResponse');
class_alias(GetSearchApplicationUserStatsResponse::class, 'Google_Service_CloudSearch_GetSearchApplicationUserStatsResponse');
class_alias(GmailClientActionMarkup::class, 'Google_Service_CloudSearch_GmailClientActionMarkup');
class_alias(GoogleChatV1ContextualAddOnMarkup::class, 'Google_Service_CloudSearch_GoogleChatV1ContextualAddOnMarkup');
class_alias(GoogleChatV1ContextualAddOnMarkupCard::class, 'Google_Service_CloudSearch_GoogleChatV1ContextualAddOnMarkupCard');
class_alias(GoogleChatV1ContextualAddOnMarkupCardCardAction::class, 'Google_Service_CloudSearch_GoogleChatV1ContextualAddOnMarkupCardCardAction');
class_alias(GoogleChatV1ContextualAddOnMarkupCardCardHeader::class, 'Google_Service_CloudSearch_GoogleChatV1ContextualAddOnMarkupCardCardHeader');
class_alias(GoogleChatV1ContextualAddOnMarkupCardSection::class, 'Google_Service_CloudSearch_GoogleChatV1ContextualAddOnMarkupCardSection');
class_alias(GoogleChatV1WidgetMarkup::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkup');
class_alias(GoogleChatV1WidgetMarkupButton::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupButton');
class_alias(GoogleChatV1WidgetMarkupFormAction::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupFormAction');
class_alias(GoogleChatV1WidgetMarkupFormActionActionParameter::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupFormActionActionParameter');
class_alias(GoogleChatV1WidgetMarkupImage::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupImage');
class_alias(GoogleChatV1WidgetMarkupImageButton::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupImageButton');
class_alias(GoogleChatV1WidgetMarkupKeyValue::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupKeyValue');
class_alias(GoogleChatV1WidgetMarkupOnClick::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupOnClick');
class_alias(GoogleChatV1WidgetMarkupOpenLink::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupOpenLink');
class_alias(GoogleChatV1WidgetMarkupTextButton::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupTextButton');
class_alias(GoogleChatV1WidgetMarkupTextParagraph::class, 'Google_Service_CloudSearch_GoogleChatV1WidgetMarkupTextParagraph');
class_alias(GoogleDocsMetadata::class, 'Google_Service_CloudSearch_GoogleDocsMetadata');
class_alias(GoogleDocsResultInfo::class, 'Google_Service_CloudSearch_GoogleDocsResultInfo');
class_alias(Grid::class, 'Google_Service_CloudSearch_Grid');
class_alias(GridItem::class, 'Google_Service_CloudSearch_GridItem');
class_alias(GroupDetailsUpdatedMetadata::class, 'Google_Service_CloudSearch_GroupDetailsUpdatedMetadata');
class_alias(GroupId::class, 'Google_Service_CloudSearch_GroupId');
class_alias(GroupLinkSharingModificationEvent::class, 'Google_Service_CloudSearch_GroupLinkSharingModificationEvent');
class_alias(GroupRetentionSettingsUpdatedMetaData::class, 'Google_Service_CloudSearch_GroupRetentionSettingsUpdatedMetaData');
class_alias(GsuiteIntegrationMetadata::class, 'Google_Service_CloudSearch_GsuiteIntegrationMetadata');
class_alias(HangoutEvent::class, 'Google_Service_CloudSearch_HangoutEvent');
class_alias(HangoutVideoEventMetadata::class, 'Google_Service_CloudSearch_HangoutVideoEventMetadata');
class_alias(HashtagData::class, 'Google_Service_CloudSearch_HashtagData');
class_alias(History::class, 'Google_Service_CloudSearch_History');
class_alias(HistoryRecord::class, 'Google_Service_CloudSearch_HistoryRecord');
class_alias(HostAppActionMarkup::class, 'Google_Service_CloudSearch_HostAppActionMarkup');
class_alias(HostProto::class, 'Google_Service_CloudSearch_HostProto');
class_alias(HtmlOperatorOptions::class, 'Google_Service_CloudSearch_HtmlOperatorOptions');
class_alias(HtmlPropertyOptions::class, 'Google_Service_CloudSearch_HtmlPropertyOptions');
class_alias(HtmlValues::class, 'Google_Service_CloudSearch_HtmlValues');
class_alias(IconImage::class, 'Google_Service_CloudSearch_IconImage');
class_alias(Id::class, 'Google_Service_CloudSearch_Id');
class_alias(Image::class, 'Google_Service_CloudSearch_Image');
class_alias(ImageButton::class, 'Google_Service_CloudSearch_ImageButton');
class_alias(ImageComponent::class, 'Google_Service_CloudSearch_ImageComponent');
class_alias(ImageCropStyle::class, 'Google_Service_CloudSearch_ImageCropStyle');
class_alias(ImageKeyValue::class, 'Google_Service_CloudSearch_ImageKeyValue');
class_alias(ImapSessionContext::class, 'Google_Service_CloudSearch_ImapSessionContext');
class_alias(ImapSyncDelete::class, 'Google_Service_CloudSearch_ImapSyncDelete');
class_alias(ImapUidsReassign::class, 'Google_Service_CloudSearch_ImapUidsReassign');
class_alias(ImapUpdate::class, 'Google_Service_CloudSearch_ImapUpdate');
class_alias(ImapsyncFolderAttributeFolderMessage::class, 'Google_Service_CloudSearch_ImapsyncFolderAttributeFolderMessage');
class_alias(ImapsyncFolderAttributeFolderMessageFlags::class, 'Google_Service_CloudSearch_ImapsyncFolderAttributeFolderMessageFlags');
class_alias(IncomingWebhookChangedMetadata::class, 'Google_Service_CloudSearch_IncomingWebhookChangedMetadata');
class_alias(IndexItemOptions::class, 'Google_Service_CloudSearch_IndexItemOptions');
class_alias(IndexItemRequest::class, 'Google_Service_CloudSearch_IndexItemRequest');
class_alias(InitializeCustomerRequest::class, 'Google_Service_CloudSearch_InitializeCustomerRequest');
class_alias(InsertContent::class, 'Google_Service_CloudSearch_InsertContent');
class_alias(IntegerFacetingOptions::class, 'Google_Service_CloudSearch_IntegerFacetingOptions');
class_alias(IntegerOperatorOptions::class, 'Google_Service_CloudSearch_IntegerOperatorOptions');
class_alias(IntegerPropertyOptions::class, 'Google_Service_CloudSearch_IntegerPropertyOptions');
class_alias(IntegerValues::class, 'Google_Service_CloudSearch_IntegerValues');
class_alias(IntegrationConfigMutation::class, 'Google_Service_CloudSearch_IntegrationConfigMutation');
class_alias(IntegrationConfigUpdatedMetadata::class, 'Google_Service_CloudSearch_IntegrationConfigUpdatedMetadata');
class_alias(Interaction::class, 'Google_Service_CloudSearch_Interaction');
class_alias(InviteAcceptedEvent::class, 'Google_Service_CloudSearch_InviteAcceptedEvent');
class_alias(InviteeInfo::class, 'Google_Service_CloudSearch_InviteeInfo');
class_alias(Item::class, 'Google_Service_CloudSearch_Item');
class_alias(ItemAcl::class, 'Google_Service_CloudSearch_ItemAcl');
class_alias(ItemContent::class, 'Google_Service_CloudSearch_ItemContent');
class_alias(ItemCountByStatus::class, 'Google_Service_CloudSearch_ItemCountByStatus');
class_alias(ItemMetadata::class, 'Google_Service_CloudSearch_ItemMetadata');
class_alias(ItemParts::class, 'Google_Service_CloudSearch_ItemParts');
class_alias(ItemStatus::class, 'Google_Service_CloudSearch_ItemStatus');
class_alias(ItemStructuredData::class, 'Google_Service_CloudSearch_ItemStructuredData');
class_alias(ItemThread::class, 'Google_Service_CloudSearch_ItemThread');
class_alias(JobsettedServerSpec::class, 'Google_Service_CloudSearch_JobsettedServerSpec');
class_alias(KeyValue::class, 'Google_Service_CloudSearch_KeyValue');
class_alias(LabelAdded::class, 'Google_Service_CloudSearch_LabelAdded');
class_alias(LabelCreated::class, 'Google_Service_CloudSearch_LabelCreated');
class_alias(LabelDeleted::class, 'Google_Service_CloudSearch_LabelDeleted');
class_alias(LabelRemoved::class, 'Google_Service_CloudSearch_LabelRemoved');
class_alias(LabelRenamed::class, 'Google_Service_CloudSearch_LabelRenamed');
class_alias(LabelUpdate::class, 'Google_Service_CloudSearch_LabelUpdate');
class_alias(LabelUpdated::class, 'Google_Service_CloudSearch_LabelUpdated');
class_alias(Labels::class, 'Google_Service_CloudSearch_Labels');
class_alias(LanguageConfig::class, 'Google_Service_CloudSearch_LanguageConfig');
class_alias(LdapGroupProto::class, 'Google_Service_CloudSearch_LdapGroupProto');
class_alias(LdapUserProto::class, 'Google_Service_CloudSearch_LdapUserProto');
class_alias(LegacyUploadMetadata::class, 'Google_Service_CloudSearch_LegacyUploadMetadata');
class_alias(LinkData::class, 'Google_Service_CloudSearch_LinkData');
class_alias(ListDataSourceResponse::class, 'Google_Service_CloudSearch_ListDataSourceResponse');
class_alias(ListItemNamesForUnmappedIdentityResponse::class, 'Google_Service_CloudSearch_ListItemNamesForUnmappedIdentityResponse');
class_alias(ListItemsResponse::class, 'Google_Service_CloudSearch_ListItemsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudSearch_ListOperationsResponse');
class_alias(ListQuerySourcesResponse::class, 'Google_Service_CloudSearch_ListQuerySourcesResponse');
class_alias(ListSearchApplicationsResponse::class, 'Google_Service_CloudSearch_ListSearchApplicationsResponse');
class_alias(ListUnmappedIdentitiesResponse::class, 'Google_Service_CloudSearch_ListUnmappedIdentitiesResponse');
class_alias(MatchInfo::class, 'Google_Service_CloudSearch_MatchInfo');
class_alias(MatchRange::class, 'Google_Service_CloudSearch_MatchRange');
class_alias(MdbGroupProto::class, 'Google_Service_CloudSearch_MdbGroupProto');
class_alias(MdbUserProto::class, 'Google_Service_CloudSearch_MdbUserProto');
class_alias(Media::class, 'Google_Service_CloudSearch_Media');
class_alias(MeetingSpace::class, 'Google_Service_CloudSearch_MeetingSpace');
class_alias(Member::class, 'Google_Service_CloudSearch_Member');
class_alias(MemberId::class, 'Google_Service_CloudSearch_MemberId');
class_alias(MembershipChangeEvent::class, 'Google_Service_CloudSearch_MembershipChangeEvent');
class_alias(MembershipChangedMetadata::class, 'Google_Service_CloudSearch_MembershipChangedMetadata');
class_alias(Menu::class, 'Google_Service_CloudSearch_Menu');
class_alias(MenuItem::class, 'Google_Service_CloudSearch_MenuItem');
class_alias(Message::class, 'Google_Service_CloudSearch_Message');
class_alias(MessageAdded::class, 'Google_Service_CloudSearch_MessageAdded');
class_alias(MessageAttributes::class, 'Google_Service_CloudSearch_MessageAttributes');
class_alias(MessageDeleted::class, 'Google_Service_CloudSearch_MessageDeleted');
class_alias(MessageId::class, 'Google_Service_CloudSearch_MessageId');
class_alias(MessageInfo::class, 'Google_Service_CloudSearch_MessageInfo');
class_alias(MessageParentId::class, 'Google_Service_CloudSearch_MessageParentId');
class_alias(MessageProps::class, 'Google_Service_CloudSearch_MessageProps');
class_alias(MessageSet::class, 'Google_Service_CloudSearch_MessageSet');
class_alias(Metadata::class, 'Google_Service_CloudSearch_Metadata');
class_alias(Metaline::class, 'Google_Service_CloudSearch_Metaline');
class_alias(MultiKey::class, 'Google_Service_CloudSearch_MultiKey');
class_alias(Name::class, 'Google_Service_CloudSearch_Name');
class_alias(NamedProperty::class, 'Google_Service_CloudSearch_NamedProperty');
class_alias(OAuthConsumerProto::class, 'Google_Service_CloudSearch_OAuthConsumerProto');
class_alias(ObjectDefinition::class, 'Google_Service_CloudSearch_ObjectDefinition');
class_alias(ObjectDisplayOptions::class, 'Google_Service_CloudSearch_ObjectDisplayOptions');
class_alias(ObjectOptions::class, 'Google_Service_CloudSearch_ObjectOptions');
class_alias(ObjectPropertyOptions::class, 'Google_Service_CloudSearch_ObjectPropertyOptions');
class_alias(ObjectValues::class, 'Google_Service_CloudSearch_ObjectValues');
class_alias(OnClick::class, 'Google_Service_CloudSearch_OnClick');
class_alias(OpenCreatedDraftActionMarkup::class, 'Google_Service_CloudSearch_OpenCreatedDraftActionMarkup');
class_alias(OpenLink::class, 'Google_Service_CloudSearch_OpenLink');
class_alias(Operation::class, 'Google_Service_CloudSearch_Operation');
class_alias(OsVersion::class, 'Google_Service_CloudSearch_OsVersion');
class_alias(OtrChatMessageEvent::class, 'Google_Service_CloudSearch_OtrChatMessageEvent');
class_alias(OtrModificationEvent::class, 'Google_Service_CloudSearch_OtrModificationEvent');
class_alias(PackagingServiceClient::class, 'Google_Service_CloudSearch_PackagingServiceClient');
class_alias(PaygateInfo::class, 'Google_Service_CloudSearch_PaygateInfo');
class_alias(PeopleSuggestion::class, 'Google_Service_CloudSearch_PeopleSuggestion');
class_alias(Person::class, 'Google_Service_CloudSearch_Person');
class_alias(PersonalLabelTag::class, 'Google_Service_CloudSearch_PersonalLabelTag');
class_alias(PhoneAccess::class, 'Google_Service_CloudSearch_PhoneAccess');
class_alias(PhoneNumber::class, 'Google_Service_CloudSearch_PhoneNumber');
class_alias(Photo::class, 'Google_Service_CloudSearch_Photo');
class_alias(PinnedItemId::class, 'Google_Service_CloudSearch_PinnedItemId');
class_alias(PollItemsRequest::class, 'Google_Service_CloudSearch_PollItemsRequest');
class_alias(PollItemsResponse::class, 'Google_Service_CloudSearch_PollItemsResponse');
class_alias(PossiblyTrimmedModel::class, 'Google_Service_CloudSearch_PossiblyTrimmedModel');
class_alias(PostiniUserProto::class, 'Google_Service_CloudSearch_PostiniUserProto');
class_alias(PreState::class, 'Google_Service_CloudSearch_PreState');
class_alias(PrefDeleted::class, 'Google_Service_CloudSearch_PrefDeleted');
class_alias(PrefUpdate::class, 'Google_Service_CloudSearch_PrefUpdate');
class_alias(PrefWritten::class, 'Google_Service_CloudSearch_PrefWritten');
class_alias(Presenter::class, 'Google_Service_CloudSearch_Presenter');
class_alias(Principal::class, 'Google_Service_CloudSearch_Principal');
class_alias(PrincipalProto::class, 'Google_Service_CloudSearch_PrincipalProto');
class_alias(PrivateMessageInfo::class, 'Google_Service_CloudSearch_PrivateMessageInfo');
class_alias(ProcessingError::class, 'Google_Service_CloudSearch_ProcessingError');
class_alias(PropertyDefinition::class, 'Google_Service_CloudSearch_PropertyDefinition');
class_alias(PropertyDisplayOptions::class, 'Google_Service_CloudSearch_PropertyDisplayOptions');
class_alias(Provenance::class, 'Google_Service_CloudSearch_Provenance');
class_alias(PushItem::class, 'Google_Service_CloudSearch_PushItem');
class_alias(PushItemRequest::class, 'Google_Service_CloudSearch_PushItemRequest');
class_alias(QueryCountByStatus::class, 'Google_Service_CloudSearch_QueryCountByStatus');
class_alias(QueryInterpretation::class, 'Google_Service_CloudSearch_QueryInterpretation');
class_alias(QueryInterpretationConfig::class, 'Google_Service_CloudSearch_QueryInterpretationConfig');
class_alias(QueryInterpretationOptions::class, 'Google_Service_CloudSearch_QueryInterpretationOptions');
class_alias(QueryItem::class, 'Google_Service_CloudSearch_QueryItem');
class_alias(QueryOperator::class, 'Google_Service_CloudSearch_QueryOperator');
class_alias(QuerySource::class, 'Google_Service_CloudSearch_QuerySource');
class_alias(QuerySuggestion::class, 'Google_Service_CloudSearch_QuerySuggestion');
class_alias(QuotedMessageMetadata::class, 'Google_Service_CloudSearch_QuotedMessageMetadata');
class_alias(Rank::class, 'Google_Service_CloudSearch_Rank');
class_alias(RbacRoleProto::class, 'Google_Service_CloudSearch_RbacRoleProto');
class_alias(RbacSubjectProto::class, 'Google_Service_CloudSearch_RbacSubjectProto');
class_alias(ReactionInfo::class, 'Google_Service_CloudSearch_ReactionInfo');
class_alias(ReadReceiptsSettingsUpdatedMetadata::class, 'Google_Service_CloudSearch_ReadReceiptsSettingsUpdatedMetadata');
class_alias(Recipient::class, 'Google_Service_CloudSearch_Recipient');
class_alias(RecordingEvent::class, 'Google_Service_CloudSearch_RecordingEvent');
class_alias(RecordingInfo::class, 'Google_Service_CloudSearch_RecordingInfo');
class_alias(RecordingSessionInfo::class, 'Google_Service_CloudSearch_RecordingSessionInfo');
class_alias(Reference::class, 'Google_Service_CloudSearch_Reference');
class_alias(References::class, 'Google_Service_CloudSearch_References');
class_alias(RenameEvent::class, 'Google_Service_CloudSearch_RenameEvent');
class_alias(RepositoryError::class, 'Google_Service_CloudSearch_RepositoryError');
class_alias(RequestFileScope::class, 'Google_Service_CloudSearch_RequestFileScope');
class_alias(RequestFileScopeForActiveDocument::class, 'Google_Service_CloudSearch_RequestFileScopeForActiveDocument');
class_alias(RequestOptions::class, 'Google_Service_CloudSearch_RequestOptions');
class_alias(RequiredMessageFeaturesMetadata::class, 'Google_Service_CloudSearch_RequiredMessageFeaturesMetadata');
class_alias(ResetSearchApplicationRequest::class, 'Google_Service_CloudSearch_ResetSearchApplicationRequest');
class_alias(ResourceRoleProto::class, 'Google_Service_CloudSearch_ResourceRoleProto');
class_alias(ResponseDebugInfo::class, 'Google_Service_CloudSearch_ResponseDebugInfo');
class_alias(RestrictItem::class, 'Google_Service_CloudSearch_RestrictItem');
class_alias(ResultCounts::class, 'Google_Service_CloudSearch_ResultCounts');
class_alias(ResultDebugInfo::class, 'Google_Service_CloudSearch_ResultDebugInfo');
class_alias(ResultDisplayField::class, 'Google_Service_CloudSearch_ResultDisplayField');
class_alias(ResultDisplayLine::class, 'Google_Service_CloudSearch_ResultDisplayLine');
class_alias(ResultDisplayMetadata::class, 'Google_Service_CloudSearch_ResultDisplayMetadata');
class_alias(RetrievalImportance::class, 'Google_Service_CloudSearch_RetrievalImportance');
class_alias(RoomRenameMetadata::class, 'Google_Service_CloudSearch_RoomRenameMetadata');
class_alias(RoomUpdatedMetadata::class, 'Google_Service_CloudSearch_RoomUpdatedMetadata');
class_alias(Roster::class, 'Google_Service_CloudSearch_Roster');
class_alias(RosterId::class, 'Google_Service_CloudSearch_RosterId');
class_alias(RpcOptions::class, 'Google_Service_CloudSearch_RpcOptions');
class_alias(SafeUrlProto::class, 'Google_Service_CloudSearch_SafeUrlProto');
class_alias(Schema::class, 'Google_Service_CloudSearch_Schema');
class_alias(ScoringConfig::class, 'Google_Service_CloudSearch_ScoringConfig');
class_alias(SearchApplication::class, 'Google_Service_CloudSearch_SearchApplication');
class_alias(SearchApplicationQueryStats::class, 'Google_Service_CloudSearch_SearchApplicationQueryStats');
class_alias(SearchApplicationSessionStats::class, 'Google_Service_CloudSearch_SearchApplicationSessionStats');
class_alias(SearchApplicationUserStats::class, 'Google_Service_CloudSearch_SearchApplicationUserStats');
class_alias(SearchItemsByViewUrlRequest::class, 'Google_Service_CloudSearch_SearchItemsByViewUrlRequest');
class_alias(SearchItemsByViewUrlResponse::class, 'Google_Service_CloudSearch_SearchItemsByViewUrlResponse');
class_alias(SearchQualityMetadata::class, 'Google_Service_CloudSearch_SearchQualityMetadata');
class_alias(SearchRequest::class, 'Google_Service_CloudSearch_SearchRequest');
class_alias(SearchResponse::class, 'Google_Service_CloudSearch_SearchResponse');
class_alias(SearchResult::class, 'Google_Service_CloudSearch_SearchResult');
class_alias(Section::class, 'Google_Service_CloudSearch_Section');
class_alias(Segment::class, 'Google_Service_CloudSearch_Segment');
class_alias(SelectionControl::class, 'Google_Service_CloudSearch_SelectionControl');
class_alias(SelectionItem::class, 'Google_Service_CloudSearch_SelectionItem');
class_alias(SessionContext::class, 'Google_Service_CloudSearch_SessionContext');
class_alias(SessionEvent::class, 'Google_Service_CloudSearch_SessionEvent');
class_alias(SessionStateInfo::class, 'Google_Service_CloudSearch_SessionStateInfo');
class_alias(Settings::class, 'Google_Service_CloudSearch_Settings');
class_alias(ShareScope::class, 'Google_Service_CloudSearch_ShareScope');
class_alias(SheetsClientActionMarkup::class, 'Google_Service_CloudSearch_SheetsClientActionMarkup');
class_alias(SigningKeyPossessorProto::class, 'Google_Service_CloudSearch_SigningKeyPossessorProto');
class_alias(SimpleSecretHolderProto::class, 'Google_Service_CloudSearch_SimpleSecretHolderProto');
class_alias(SimpleSecretLabelProto::class, 'Google_Service_CloudSearch_SimpleSecretLabelProto');
class_alias(SlashCommandMetadata::class, 'Google_Service_CloudSearch_SlashCommandMetadata');
class_alias(Snippet::class, 'Google_Service_CloudSearch_Snippet');
class_alias(SocialCommonAttachmentAttachment::class, 'Google_Service_CloudSearch_SocialCommonAttachmentAttachment');
class_alias(SocialGraphNodeProto::class, 'Google_Service_CloudSearch_SocialGraphNodeProto');
class_alias(SortOptions::class, 'Google_Service_CloudSearch_SortOptions');
class_alias(Source::class, 'Google_Service_CloudSearch_Source');
class_alias(SourceConfig::class, 'Google_Service_CloudSearch_SourceConfig');
class_alias(SourceCrowdingConfig::class, 'Google_Service_CloudSearch_SourceCrowdingConfig');
class_alias(SourceResultCount::class, 'Google_Service_CloudSearch_SourceResultCount');
class_alias(SourceScoringConfig::class, 'Google_Service_CloudSearch_SourceScoringConfig');
class_alias(SpaceId::class, 'Google_Service_CloudSearch_SpaceId');
class_alias(SpellResult::class, 'Google_Service_CloudSearch_SpellResult');
class_alias(SquareProto::class, 'Google_Service_CloudSearch_SquareProto');
class_alias(StartUploadItemRequest::class, 'Google_Service_CloudSearch_StartUploadItemRequest');
class_alias(Status::class, 'Google_Service_CloudSearch_Status');
class_alias(StoredParticipantId::class, 'Google_Service_CloudSearch_StoredParticipantId');
class_alias(StreamViewerStats::class, 'Google_Service_CloudSearch_StreamViewerStats');
class_alias(StreamingSessionInfo::class, 'Google_Service_CloudSearch_StreamingSessionInfo');
class_alias(StructuredDataObject::class, 'Google_Service_CloudSearch_StructuredDataObject');
class_alias(StructuredResult::class, 'Google_Service_CloudSearch_StructuredResult');
class_alias(SuggestRequest::class, 'Google_Service_CloudSearch_SuggestRequest');
class_alias(SuggestResponse::class, 'Google_Service_CloudSearch_SuggestResponse');
class_alias(SuggestResult::class, 'Google_Service_CloudSearch_SuggestResult');
class_alias(SupportUrls::class, 'Google_Service_CloudSearch_SupportUrls');
class_alias(SwitchWidget::class, 'Google_Service_CloudSearch_SwitchWidget');
class_alias(TaskActionMarkup::class, 'Google_Service_CloudSearch_TaskActionMarkup');
class_alias(TextButton::class, 'Google_Service_CloudSearch_TextButton');
class_alias(TextField::class, 'Google_Service_CloudSearch_TextField');
class_alias(TextKeyValue::class, 'Google_Service_CloudSearch_TextKeyValue');
class_alias(TextOperatorOptions::class, 'Google_Service_CloudSearch_TextOperatorOptions');
class_alias(TextParagraph::class, 'Google_Service_CloudSearch_TextParagraph');
class_alias(TextPropertyOptions::class, 'Google_Service_CloudSearch_TextPropertyOptions');
class_alias(TextValues::class, 'Google_Service_CloudSearch_TextValues');
class_alias(ThreadKeySet::class, 'Google_Service_CloudSearch_ThreadKeySet');
class_alias(ThreadUpdate::class, 'Google_Service_CloudSearch_ThreadUpdate');
class_alias(TimestampOperatorOptions::class, 'Google_Service_CloudSearch_TimestampOperatorOptions');
class_alias(TimestampPropertyOptions::class, 'Google_Service_CloudSearch_TimestampPropertyOptions');
class_alias(TimestampValues::class, 'Google_Service_CloudSearch_TimestampValues');
class_alias(TombstoneMetadata::class, 'Google_Service_CloudSearch_TombstoneMetadata');
class_alias(Toolbar::class, 'Google_Service_CloudSearch_Toolbar');
class_alias(TopicId::class, 'Google_Service_CloudSearch_TopicId');
class_alias(TopicState::class, 'Google_Service_CloudSearch_TopicState');
class_alias(TopicStateUpdate::class, 'Google_Service_CloudSearch_TopicStateUpdate');
class_alias(TransactionContext::class, 'Google_Service_CloudSearch_TransactionContext');
class_alias(TransactionDebugInfo::class, 'Google_Service_CloudSearch_TransactionDebugInfo');
class_alias(TranscriptionSessionInfo::class, 'Google_Service_CloudSearch_TranscriptionSessionInfo');
class_alias(TransientData::class, 'Google_Service_CloudSearch_TransientData');
class_alias(Trigger::class, 'Google_Service_CloudSearch_Trigger');
class_alias(TriggerAction::class, 'Google_Service_CloudSearch_TriggerAction');
class_alias(TriggerKey::class, 'Google_Service_CloudSearch_TriggerKey');
class_alias(Triggers::class, 'Google_Service_CloudSearch_Triggers');
class_alias(TrustedResourceUrlProto::class, 'Google_Service_CloudSearch_TrustedResourceUrlProto');
class_alias(TypeInfo::class, 'Google_Service_CloudSearch_TypeInfo');
class_alias(UniversalPhoneAccess::class, 'Google_Service_CloudSearch_UniversalPhoneAccess');
class_alias(UnmappedIdentity::class, 'Google_Service_CloudSearch_UnmappedIdentity');
class_alias(UnreserveItemsRequest::class, 'Google_Service_CloudSearch_UnreserveItemsRequest');
class_alias(UpdateBccRecipients::class, 'Google_Service_CloudSearch_UpdateBccRecipients');
class_alias(UpdateBody::class, 'Google_Service_CloudSearch_UpdateBody');
class_alias(UpdateCcRecipients::class, 'Google_Service_CloudSearch_UpdateCcRecipients');
class_alias(UpdateDataSourceRequest::class, 'Google_Service_CloudSearch_UpdateDataSourceRequest');
class_alias(UpdateDraftActionMarkup::class, 'Google_Service_CloudSearch_UpdateDraftActionMarkup');
class_alias(UpdateSchemaRequest::class, 'Google_Service_CloudSearch_UpdateSchemaRequest');
class_alias(UpdateSubject::class, 'Google_Service_CloudSearch_UpdateSubject');
class_alias(UpdateToRecipients::class, 'Google_Service_CloudSearch_UpdateToRecipients');
class_alias(UploadItemRef::class, 'Google_Service_CloudSearch_UploadItemRef');
class_alias(UploadMetadata::class, 'Google_Service_CloudSearch_UploadMetadata');
class_alias(UrlMetadata::class, 'Google_Service_CloudSearch_UrlMetadata');
class_alias(User::class, 'Google_Service_CloudSearch_User');
class_alias(UserDisplayInfo::class, 'Google_Service_CloudSearch_UserDisplayInfo');
class_alias(UserId::class, 'Google_Service_CloudSearch_UserId');
class_alias(UserInfo::class, 'Google_Service_CloudSearch_UserInfo');
class_alias(UserMentionData::class, 'Google_Service_CloudSearch_UserMentionData');
class_alias(UserMentionMetadata::class, 'Google_Service_CloudSearch_UserMentionMetadata');
class_alias(VPCSettings::class, 'Google_Service_CloudSearch_VPCSettings');
class_alias(Value::class, 'Google_Service_CloudSearch_Value');
class_alias(ValueFilter::class, 'Google_Service_CloudSearch_ValueFilter');
class_alias(VideoCallMetadata::class, 'Google_Service_CloudSearch_VideoCallMetadata');
class_alias(VideoInfo::class, 'Google_Service_CloudSearch_VideoInfo');
class_alias(VoicePhoneNumber::class, 'Google_Service_CloudSearch_VoicePhoneNumber');
class_alias(VoicePhoneNumberI18nData::class, 'Google_Service_CloudSearch_VoicePhoneNumberI18nData');
class_alias(WhiteboardInfo::class, 'Google_Service_CloudSearch_WhiteboardInfo');
class_alias(WidgetMarkup::class, 'Google_Service_CloudSearch_WidgetMarkup');
class_alias(WrappedResourceKey::class, 'Google_Service_CloudSearch_WrappedResourceKey');
class_alias(YouTubeBroadcastSessionInfo::class, 'Google_Service_CloudSearch_YouTubeBroadcastSessionInfo');
class_alias(YouTubeBroadcastStats::class, 'Google_Service_CloudSearch_YouTubeBroadcastStats');
class_alias(YouTubeLiveBroadcastEvent::class, 'Google_Service_CloudSearch_YouTubeLiveBroadcastEvent');
class_alias(YoutubeMetadata::class, 'Google_Service_CloudSearch_YoutubeMetadata');
class_alias(YoutubeUserProto::class, 'Google_Service_CloudSearch_YoutubeUserProto');
class_alias(ZwiebackSessionProto::class, 'Google_Service_CloudSearch_ZwiebackSessionProto');
