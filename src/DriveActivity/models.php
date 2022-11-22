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

namespace Google\Service\DriveActivity;

class Action extends \Google\Model
{
  /** @var Actor */
  public $actor;
  /** @var ActionDetail */
  public $detail;
  /** @var Target */
  public $target;
  /** @var TimeRange */
  public $timeRange;
  /** @var string */
  public $timestamp;
  protected $actorType = Actor::class;
  protected $actorDataType = '';
  protected $detailType = ActionDetail::class;
  protected $detailDataType = '';
  protected $targetType = Target::class;
  protected $targetDataType = '';
  protected $timeRangeType = TimeRange::class;
  protected $timeRangeDataType = '';
  /** @param Actor */
  public function setActor(Actor $actor)
  {
    $this->actor = $actor;
  }
  /** @return Actor */
  public function getActor()
  {
    return $this->actor;
  }
  /** @param ActionDetail */
  public function setDetail(ActionDetail $detail)
  {
    $this->detail = $detail;
  }
  /** @return ActionDetail */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param Target */
  public function setTarget(Target $target)
  {
    $this->target = $target;
  }
  /** @return Target */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param TimeRange */
  public function setTimeRange(TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return TimeRange */
  public function getTimeRange()
  {
    return $this->timeRange;
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
}

class ActionDetail extends \Google\Model
{
  /** @var AppliedLabelChange */
  public $appliedLabelChange;
  /** @var Comment */
  public $comment;
  /** @var Create */
  public $create;
  /** @var Delete */
  public $delete;
  /** @var DataLeakPreventionChange */
  public $dlpChange;
  /** @var Edit */
  public $edit;
  /** @var Move */
  public $move;
  /** @var PermissionChange */
  public $permissionChange;
  /** @var ApplicationReference */
  public $reference;
  /** @var Rename */
  public $rename;
  /** @var Restore */
  public $restore;
  /** @var SettingsChange */
  public $settingsChange;
  protected $appliedLabelChangeType = AppliedLabelChange::class;
  protected $appliedLabelChangeDataType = '';
  protected $commentType = Comment::class;
  protected $commentDataType = '';
  protected $createType = Create::class;
  protected $createDataType = '';
  protected $deleteType = Delete::class;
  protected $deleteDataType = '';
  protected $dlpChangeType = DataLeakPreventionChange::class;
  protected $dlpChangeDataType = '';
  protected $editType = Edit::class;
  protected $editDataType = '';
  protected $moveType = Move::class;
  protected $moveDataType = '';
  protected $permissionChangeType = PermissionChange::class;
  protected $permissionChangeDataType = '';
  protected $referenceType = ApplicationReference::class;
  protected $referenceDataType = '';
  protected $renameType = Rename::class;
  protected $renameDataType = '';
  protected $restoreType = Restore::class;
  protected $restoreDataType = '';
  protected $settingsChangeType = SettingsChange::class;
  protected $settingsChangeDataType = '';
  /** @param AppliedLabelChange */
  public function setAppliedLabelChange(AppliedLabelChange $appliedLabelChange)
  {
    $this->appliedLabelChange = $appliedLabelChange;
  }
  /** @return AppliedLabelChange */
  public function getAppliedLabelChange()
  {
    return $this->appliedLabelChange;
  }
  /** @param Comment */
  public function setComment(Comment $comment)
  {
    $this->comment = $comment;
  }
  /** @return Comment */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param Create */
  public function setCreate(Create $create)
  {
    $this->create = $create;
  }
  /** @return Create */
  public function getCreate()
  {
    return $this->create;
  }
  /** @param Delete */
  public function setDelete(Delete $delete)
  {
    $this->delete = $delete;
  }
  /** @return Delete */
  public function getDelete()
  {
    return $this->delete;
  }
  /** @param DataLeakPreventionChange */
  public function setDlpChange(DataLeakPreventionChange $dlpChange)
  {
    $this->dlpChange = $dlpChange;
  }
  /** @return DataLeakPreventionChange */
  public function getDlpChange()
  {
    return $this->dlpChange;
  }
  /** @param Edit */
  public function setEdit(Edit $edit)
  {
    $this->edit = $edit;
  }
  /** @return Edit */
  public function getEdit()
  {
    return $this->edit;
  }
  /** @param Move */
  public function setMove(Move $move)
  {
    $this->move = $move;
  }
  /** @return Move */
  public function getMove()
  {
    return $this->move;
  }
  /** @param PermissionChange */
  public function setPermissionChange(PermissionChange $permissionChange)
  {
    $this->permissionChange = $permissionChange;
  }
  /** @return PermissionChange */
  public function getPermissionChange()
  {
    return $this->permissionChange;
  }
  /** @param ApplicationReference */
  public function setReference(ApplicationReference $reference)
  {
    $this->reference = $reference;
  }
  /** @return ApplicationReference */
  public function getReference()
  {
    return $this->reference;
  }
  /** @param Rename */
  public function setRename(Rename $rename)
  {
    $this->rename = $rename;
  }
  /** @return Rename */
  public function getRename()
  {
    return $this->rename;
  }
  /** @param Restore */
  public function setRestore(Restore $restore)
  {
    $this->restore = $restore;
  }
  /** @return Restore */
  public function getRestore()
  {
    return $this->restore;
  }
  /** @param SettingsChange */
  public function setSettingsChange(SettingsChange $settingsChange)
  {
    $this->settingsChange = $settingsChange;
  }
  /** @return SettingsChange */
  public function getSettingsChange()
  {
    return $this->settingsChange;
  }
}

class Actor extends \Google\Model
{
  /** @var Administrator */
  public $administrator;
  /** @var AnonymousUser */
  public $anonymous;
  /** @var Impersonation */
  public $impersonation;
  /** @var SystemEvent */
  public $system;
  /** @var User */
  public $user;
  protected $administratorType = Administrator::class;
  protected $administratorDataType = '';
  protected $anonymousType = AnonymousUser::class;
  protected $anonymousDataType = '';
  protected $impersonationType = Impersonation::class;
  protected $impersonationDataType = '';
  protected $systemType = SystemEvent::class;
  protected $systemDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param Administrator */
  public function setAdministrator(Administrator $administrator)
  {
    $this->administrator = $administrator;
  }
  /** @return Administrator */
  public function getAdministrator()
  {
    return $this->administrator;
  }
  /** @param AnonymousUser */
  public function setAnonymous(AnonymousUser $anonymous)
  {
    $this->anonymous = $anonymous;
  }
  /** @return AnonymousUser */
  public function getAnonymous()
  {
    return $this->anonymous;
  }
  /** @param Impersonation */
  public function setImpersonation(Impersonation $impersonation)
  {
    $this->impersonation = $impersonation;
  }
  /** @return Impersonation */
  public function getImpersonation()
  {
    return $this->impersonation;
  }
  /** @param SystemEvent */
  public function setSystem(SystemEvent $system)
  {
    $this->system = $system;
  }
  /** @return SystemEvent */
  public function getSystem()
  {
    return $this->system;
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

class Administrator extends \Google\Model
{
}

class AnonymousUser extends \Google\Model
{
}

class Anyone extends \Google\Model
{
}

class ApplicationReference extends \Google\Model
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

class AppliedLabelChange extends \Google\Collection
{
  /** @var AppliedLabelChangeDetail[] */
  public $changes;
  protected $collection_key = 'changes';
  protected $changesType = AppliedLabelChangeDetail::class;
  protected $changesDataType = 'array';
  /** @param AppliedLabelChangeDetail[] */
  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  /** @return AppliedLabelChangeDetail[] */
  public function getChanges()
  {
    return $this->changes;
  }
}

class AppliedLabelChangeDetail extends \Google\Collection
{
  /** @var FieldValueChange[] */
  public $fieldChanges;
  /** @var string */
  public $label;
  /** @var string */
  public $title;
  /** @var string[] */
  public $types;
  protected $collection_key = 'types';
  protected $fieldChangesType = FieldValueChange::class;
  protected $fieldChangesDataType = 'array';
  /** @param FieldValueChange[] */
  public function setFieldChanges($fieldChanges)
  {
    $this->fieldChanges = $fieldChanges;
  }
  /** @return FieldValueChange[] */
  public function getFieldChanges()
  {
    return $this->fieldChanges;
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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
  }
  /** @param string[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return string[] */
  public function getTypes()
  {
    return $this->types;
  }
}

class Assignment extends \Google\Model
{
  /** @var User */
  public $assignedUser;
  /** @var string */
  public $subtype;
  protected $assignedUserType = User::class;
  protected $assignedUserDataType = '';
  /** @param User */
  public function setAssignedUser(User $assignedUser)
  {
    $this->assignedUser = $assignedUser;
  }
  /** @return User */
  public function getAssignedUser()
  {
    return $this->assignedUser;
  }
  /** @param string */
  public function setSubtype($subtype)
  {
    $this->subtype = $subtype;
  }
  /** @return string */
  public function getSubtype()
  {
    return $this->subtype;
  }
}

class Comment extends \Google\Collection
{
  /** @var Assignment */
  public $assignment;
  /** @var User[] */
  public $mentionedUsers;
  /** @var Post */
  public $post;
  /** @var Suggestion */
  public $suggestion;
  protected $collection_key = 'mentionedUsers';
  protected $assignmentType = Assignment::class;
  protected $assignmentDataType = '';
  protected $mentionedUsersType = User::class;
  protected $mentionedUsersDataType = 'array';
  protected $postType = Post::class;
  protected $postDataType = '';
  protected $suggestionType = Suggestion::class;
  protected $suggestionDataType = '';
  /** @param Assignment */
  public function setAssignment(Assignment $assignment)
  {
    $this->assignment = $assignment;
  }
  /** @return Assignment */
  public function getAssignment()
  {
    return $this->assignment;
  }
  /** @param User[] */
  public function setMentionedUsers($mentionedUsers)
  {
    $this->mentionedUsers = $mentionedUsers;
  }
  /** @return User[] */
  public function getMentionedUsers()
  {
    return $this->mentionedUsers;
  }
  /** @param Post */
  public function setPost(Post $post)
  {
    $this->post = $post;
  }
  /** @return Post */
  public function getPost()
  {
    return $this->post;
  }
  /** @param Suggestion */
  public function setSuggestion(Suggestion $suggestion)
  {
    $this->suggestion = $suggestion;
  }
  /** @return Suggestion */
  public function getSuggestion()
  {
    return $this->suggestion;
  }
}

class ConsolidationStrategy extends \Google\Model
{
  /** @var Legacy */
  public $legacy;
  /** @var NoConsolidation */
  public $none;
  protected $legacyType = Legacy::class;
  protected $legacyDataType = '';
  protected $noneType = NoConsolidation::class;
  protected $noneDataType = '';
  /** @param Legacy */
  public function setLegacy(Legacy $legacy)
  {
    $this->legacy = $legacy;
  }
  /** @return Legacy */
  public function getLegacy()
  {
    return $this->legacy;
  }
  /** @param NoConsolidation */
  public function setNone(NoConsolidation $none)
  {
    $this->none = $none;
  }
  /** @return NoConsolidation */
  public function getNone()
  {
    return $this->none;
  }
}

class Copy extends \Google\Model
{
  /** @var TargetReference */
  public $originalObject;
  protected $originalObjectType = TargetReference::class;
  protected $originalObjectDataType = '';
  /** @param TargetReference */
  public function setOriginalObject(TargetReference $originalObject)
  {
    $this->originalObject = $originalObject;
  }
  /** @return TargetReference */
  public function getOriginalObject()
  {
    return $this->originalObject;
  }
}

class Create extends \Google\Model
{
  /** @var Copy */
  public $copy;
  /** @var DriveactivityNew */
  public $new;
  /** @var Upload */
  public $upload;
  protected $copyType = Copy::class;
  protected $copyDataType = '';
  protected $newType = DriveactivityNew::class;
  protected $newDataType = '';
  protected $uploadType = Upload::class;
  protected $uploadDataType = '';
  /** @param Copy */
  public function setCopy(Copy $copy)
  {
    $this->copy = $copy;
  }
  /** @return Copy */
  public function getCopy()
  {
    return $this->copy;
  }
  /** @param DriveactivityNew */
  public function setNew(DriveactivityNew $new)
  {
    $this->new = $new;
  }
  /** @return DriveactivityNew */
  public function getNew()
  {
    return $this->new;
  }
  /** @param Upload */
  public function setUpload(Upload $upload)
  {
    $this->upload = $upload;
  }
  /** @return Upload */
  public function getUpload()
  {
    return $this->upload;
  }
}

class DataLeakPreventionChange extends \Google\Model
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

class Date extends \Google\Model
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

class Delete extends \Google\Model
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

class DeletedUser extends \Google\Model
{
}

class Domain extends \Google\Model
{
  /** @var string */
  public $legacyId;
  /** @var string */
  public $name;

  /** @param string */
  public function setLegacyId($legacyId)
  {
    $this->legacyId = $legacyId;
  }
  /** @return string */
  public function getLegacyId()
  {
    return $this->legacyId;
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

class Drive extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var DriveItem */
  public $root;
  /** @var string */
  public $title;
  protected $rootType = DriveItem::class;
  protected $rootDataType = '';
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
  /** @param DriveItem */
  public function setRoot(DriveItem $root)
  {
    $this->root = $root;
  }
  /** @return DriveItem */
  public function getRoot()
  {
    return $this->root;
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

class DriveActivity extends \Google\Collection
{
  /** @var Action[] */
  public $actions;
  /** @var Actor[] */
  public $actors;
  /** @var ActionDetail */
  public $primaryActionDetail;
  /** @var Target[] */
  public $targets;
  /** @var TimeRange */
  public $timeRange;
  /** @var string */
  public $timestamp;
  protected $collection_key = 'targets';
  protected $actionsType = Action::class;
  protected $actionsDataType = 'array';
  protected $actorsType = Actor::class;
  protected $actorsDataType = 'array';
  protected $primaryActionDetailType = ActionDetail::class;
  protected $primaryActionDetailDataType = '';
  protected $targetsType = Target::class;
  protected $targetsDataType = 'array';
  protected $timeRangeType = TimeRange::class;
  protected $timeRangeDataType = '';
  /** @param Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return Action[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param Actor[] */
  public function setActors($actors)
  {
    $this->actors = $actors;
  }
  /** @return Actor[] */
  public function getActors()
  {
    return $this->actors;
  }
  /** @param ActionDetail */
  public function setPrimaryActionDetail(ActionDetail $primaryActionDetail)
  {
    $this->primaryActionDetail = $primaryActionDetail;
  }
  /** @return ActionDetail */
  public function getPrimaryActionDetail()
  {
    return $this->primaryActionDetail;
  }
  /** @param Target[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return Target[] */
  public function getTargets()
  {
    return $this->targets;
  }
  /** @param TimeRange */
  public function setTimeRange(TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return TimeRange */
  public function getTimeRange()
  {
    return $this->timeRange;
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
}

class DriveFile extends \Google\Model
{
}

class DriveFolder extends \Google\Model
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

class DriveItem extends \Google\Model
{
  /** @var DriveFile */
  public $driveFile;
  /** @var DriveFolder */
  public $driveFolder;
  /** @var DriveactivityFile */
  public $file;
  /** @var Folder */
  public $folder;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $name;
  /** @var Owner */
  public $owner;
  /** @var string */
  public $title;
  protected $driveFileType = DriveFile::class;
  protected $driveFileDataType = '';
  protected $driveFolderType = DriveFolder::class;
  protected $driveFolderDataType = '';
  protected $fileType = DriveactivityFile::class;
  protected $fileDataType = '';
  protected $folderType = Folder::class;
  protected $folderDataType = '';
  protected $ownerType = Owner::class;
  protected $ownerDataType = '';
  /** @param DriveFile */
  public function setDriveFile(DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return DriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param DriveFolder */
  public function setDriveFolder(DriveFolder $driveFolder)
  {
    $this->driveFolder = $driveFolder;
  }
  /** @return DriveFolder */
  public function getDriveFolder()
  {
    return $this->driveFolder;
  }
  /** @param DriveactivityFile */
  public function setFile(DriveactivityFile $file)
  {
    $this->file = $file;
  }
  /** @return DriveactivityFile */
  public function getFile()
  {
    return $this->file;
  }
  /** @param Folder */
  public function setFolder(Folder $folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder */
  public function getFolder()
  {
    return $this->folder;
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
  /** @param Owner */
  public function setOwner(Owner $owner)
  {
    $this->owner = $owner;
  }
  /** @return Owner */
  public function getOwner()
  {
    return $this->owner;
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

class DriveItemReference extends \Google\Model
{
  /** @var DriveFile */
  public $driveFile;
  /** @var DriveFolder */
  public $driveFolder;
  /** @var DriveactivityFile */
  public $file;
  /** @var Folder */
  public $folder;
  /** @var string */
  public $name;
  /** @var string */
  public $title;
  protected $driveFileType = DriveFile::class;
  protected $driveFileDataType = '';
  protected $driveFolderType = DriveFolder::class;
  protected $driveFolderDataType = '';
  protected $fileType = DriveactivityFile::class;
  protected $fileDataType = '';
  protected $folderType = Folder::class;
  protected $folderDataType = '';
  /** @param DriveFile */
  public function setDriveFile(DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return DriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param DriveFolder */
  public function setDriveFolder(DriveFolder $driveFolder)
  {
    $this->driveFolder = $driveFolder;
  }
  /** @return DriveFolder */
  public function getDriveFolder()
  {
    return $this->driveFolder;
  }
  /** @param DriveactivityFile */
  public function setFile(DriveactivityFile $file)
  {
    $this->file = $file;
  }
  /** @return DriveactivityFile */
  public function getFile()
  {
    return $this->file;
  }
  /** @param Folder */
  public function setFolder(Folder $folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder */
  public function getFolder()
  {
    return $this->folder;
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

class DriveReference extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $title;

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

class DriveactivityFile extends \Google\Model
{
}

class DriveactivityInteger extends \Google\Model
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

class DriveactivityNew extends \Google\Model
{
}

class Edit extends \Google\Model
{
}

class FieldValue extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var DriveactivityInteger */
  public $integer;
  /** @var Selection */
  public $selection;
  /** @var SelectionList */
  public $selectionList;
  /** @var Text */
  public $text;
  /** @var TextList */
  public $textList;
  /** @var SingleUser */
  public $user;
  /** @var UserList */
  public $userList;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $integerType = DriveactivityInteger::class;
  protected $integerDataType = '';
  protected $selectionType = Selection::class;
  protected $selectionDataType = '';
  protected $selectionListType = SelectionList::class;
  protected $selectionListDataType = '';
  protected $textType = Text::class;
  protected $textDataType = '';
  protected $textListType = TextList::class;
  protected $textListDataType = '';
  protected $userType = SingleUser::class;
  protected $userDataType = '';
  protected $userListType = UserList::class;
  protected $userListDataType = '';
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
  /** @param DriveactivityInteger */
  public function setInteger(DriveactivityInteger $integer)
  {
    $this->integer = $integer;
  }
  /** @return DriveactivityInteger */
  public function getInteger()
  {
    return $this->integer;
  }
  /** @param Selection */
  public function setSelection(Selection $selection)
  {
    $this->selection = $selection;
  }
  /** @return Selection */
  public function getSelection()
  {
    return $this->selection;
  }
  /** @param SelectionList */
  public function setSelectionList(SelectionList $selectionList)
  {
    $this->selectionList = $selectionList;
  }
  /** @return SelectionList */
  public function getSelectionList()
  {
    return $this->selectionList;
  }
  /** @param Text */
  public function setText(Text $text)
  {
    $this->text = $text;
  }
  /** @return Text */
  public function getText()
  {
    return $this->text;
  }
  /** @param TextList */
  public function setTextList(TextList $textList)
  {
    $this->textList = $textList;
  }
  /** @return TextList */
  public function getTextList()
  {
    return $this->textList;
  }
  /** @param SingleUser */
  public function setUser(SingleUser $user)
  {
    $this->user = $user;
  }
  /** @return SingleUser */
  public function getUser()
  {
    return $this->user;
  }
  /** @param UserList */
  public function setUserList(UserList $userList)
  {
    $this->userList = $userList;
  }
  /** @return UserList */
  public function getUserList()
  {
    return $this->userList;
  }
}

class FieldValueChange extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $fieldId;
  /** @var FieldValue */
  public $newValue;
  /** @var FieldValue */
  public $oldValue;
  protected $newValueType = FieldValue::class;
  protected $newValueDataType = '';
  protected $oldValueType = FieldValue::class;
  protected $oldValueDataType = '';
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
  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /** @return string */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /** @param FieldValue */
  public function setNewValue(FieldValue $newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return FieldValue */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param FieldValue */
  public function setOldValue(FieldValue $oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return FieldValue */
  public function getOldValue()
  {
    return $this->oldValue;
  }
}

class FileComment extends \Google\Model
{
  /** @var string */
  public $legacyCommentId;
  /** @var string */
  public $legacyDiscussionId;
  /** @var string */
  public $linkToDiscussion;
  /** @var DriveItem */
  public $parent;
  protected $parentType = DriveItem::class;
  protected $parentDataType = '';
  /** @param string */
  public function setLegacyCommentId($legacyCommentId)
  {
    $this->legacyCommentId = $legacyCommentId;
  }
  /** @return string */
  public function getLegacyCommentId()
  {
    return $this->legacyCommentId;
  }
  /** @param string */
  public function setLegacyDiscussionId($legacyDiscussionId)
  {
    $this->legacyDiscussionId = $legacyDiscussionId;
  }
  /** @return string */
  public function getLegacyDiscussionId()
  {
    return $this->legacyDiscussionId;
  }
  /** @param string */
  public function setLinkToDiscussion($linkToDiscussion)
  {
    $this->linkToDiscussion = $linkToDiscussion;
  }
  /** @return string */
  public function getLinkToDiscussion()
  {
    return $this->linkToDiscussion;
  }
  /** @param DriveItem */
  public function setParent(DriveItem $parent)
  {
    $this->parent = $parent;
  }
  /** @return DriveItem */
  public function getParent()
  {
    return $this->parent;
  }
}

class Folder extends \Google\Model
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

class Group extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $title;

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

class Impersonation extends \Google\Model
{
  /** @var User */
  public $impersonatedUser;
  protected $impersonatedUserType = User::class;
  protected $impersonatedUserDataType = '';
  /** @param User */
  public function setImpersonatedUser(User $impersonatedUser)
  {
    $this->impersonatedUser = $impersonatedUser;
  }
  /** @return User */
  public function getImpersonatedUser()
  {
    return $this->impersonatedUser;
  }
}

class KnownUser extends \Google\Model
{
  /** @var bool */
  public $isCurrentUser;
  /** @var string */
  public $personName;

  /** @param bool */
  public function setIsCurrentUser($isCurrentUser)
  {
    $this->isCurrentUser = $isCurrentUser;
  }
  /** @return bool */
  public function getIsCurrentUser()
  {
    return $this->isCurrentUser;
  }
  /** @param string */
  public function setPersonName($personName)
  {
    $this->personName = $personName;
  }
  /** @return string */
  public function getPersonName()
  {
    return $this->personName;
  }
}

class Legacy extends \Google\Model
{
}

class Move extends \Google\Collection
{
  /** @var TargetReference[] */
  public $addedParents;
  /** @var TargetReference[] */
  public $removedParents;
  protected $collection_key = 'removedParents';
  protected $addedParentsType = TargetReference::class;
  protected $addedParentsDataType = 'array';
  protected $removedParentsType = TargetReference::class;
  protected $removedParentsDataType = 'array';
  /** @param TargetReference[] */
  public function setAddedParents($addedParents)
  {
    $this->addedParents = $addedParents;
  }
  /** @return TargetReference[] */
  public function getAddedParents()
  {
    return $this->addedParents;
  }
  /** @param TargetReference[] */
  public function setRemovedParents($removedParents)
  {
    $this->removedParents = $removedParents;
  }
  /** @return TargetReference[] */
  public function getRemovedParents()
  {
    return $this->removedParents;
  }
}

class NoConsolidation extends \Google\Model
{
}

class Owner extends \Google\Model
{
  /** @var Domain */
  public $domain;
  /** @var DriveReference */
  public $drive;
  /** @var TeamDriveReference */
  public $teamDrive;
  /** @var User */
  public $user;
  protected $domainType = Domain::class;
  protected $domainDataType = '';
  protected $driveType = DriveReference::class;
  protected $driveDataType = '';
  protected $teamDriveType = TeamDriveReference::class;
  protected $teamDriveDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param Domain */
  public function setDomain(Domain $domain)
  {
    $this->domain = $domain;
  }
  /** @return Domain */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param DriveReference */
  public function setDrive(DriveReference $drive)
  {
    $this->drive = $drive;
  }
  /** @return DriveReference */
  public function getDrive()
  {
    return $this->drive;
  }
  /** @param TeamDriveReference */
  public function setTeamDrive(TeamDriveReference $teamDrive)
  {
    $this->teamDrive = $teamDrive;
  }
  /** @return TeamDriveReference */
  public function getTeamDrive()
  {
    return $this->teamDrive;
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

class Permission extends \Google\Model
{
  /** @var bool */
  public $allowDiscovery;
  /** @var Anyone */
  public $anyone;
  /** @var Domain */
  public $domain;
  /** @var Group */
  public $group;
  /** @var string */
  public $role;
  /** @var User */
  public $user;
  protected $anyoneType = Anyone::class;
  protected $anyoneDataType = '';
  protected $domainType = Domain::class;
  protected $domainDataType = '';
  protected $groupType = Group::class;
  protected $groupDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param bool */
  public function setAllowDiscovery($allowDiscovery)
  {
    $this->allowDiscovery = $allowDiscovery;
  }
  /** @return bool */
  public function getAllowDiscovery()
  {
    return $this->allowDiscovery;
  }
  /** @param Anyone */
  public function setAnyone(Anyone $anyone)
  {
    $this->anyone = $anyone;
  }
  /** @return Anyone */
  public function getAnyone()
  {
    return $this->anyone;
  }
  /** @param Domain */
  public function setDomain(Domain $domain)
  {
    $this->domain = $domain;
  }
  /** @return Domain */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param Group */
  public function setGroup(Group $group)
  {
    $this->group = $group;
  }
  /** @return Group */
  public function getGroup()
  {
    return $this->group;
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

class PermissionChange extends \Google\Collection
{
  /** @var Permission[] */
  public $addedPermissions;
  /** @var Permission[] */
  public $removedPermissions;
  protected $collection_key = 'removedPermissions';
  protected $addedPermissionsType = Permission::class;
  protected $addedPermissionsDataType = 'array';
  protected $removedPermissionsType = Permission::class;
  protected $removedPermissionsDataType = 'array';
  /** @param Permission[] */
  public function setAddedPermissions($addedPermissions)
  {
    $this->addedPermissions = $addedPermissions;
  }
  /** @return Permission[] */
  public function getAddedPermissions()
  {
    return $this->addedPermissions;
  }
  /** @param Permission[] */
  public function setRemovedPermissions($removedPermissions)
  {
    $this->removedPermissions = $removedPermissions;
  }
  /** @return Permission[] */
  public function getRemovedPermissions()
  {
    return $this->removedPermissions;
  }
}

class Post extends \Google\Model
{
  /** @var string */
  public $subtype;

  /** @param string */
  public function setSubtype($subtype)
  {
    $this->subtype = $subtype;
  }
  /** @return string */
  public function getSubtype()
  {
    return $this->subtype;
  }
}

class QueryDriveActivityRequest extends \Google\Model
{
  /** @var string */
  public $ancestorName;
  /** @var ConsolidationStrategy */
  public $consolidationStrategy;
  /** @var string */
  public $filter;
  /** @var string */
  public $itemName;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  protected $consolidationStrategyType = ConsolidationStrategy::class;
  protected $consolidationStrategyDataType = '';
  /** @param string */
  public function setAncestorName($ancestorName)
  {
    $this->ancestorName = $ancestorName;
  }
  /** @return string */
  public function getAncestorName()
  {
    return $this->ancestorName;
  }
  /** @param ConsolidationStrategy */
  public function setConsolidationStrategy(ConsolidationStrategy $consolidationStrategy)
  {
    $this->consolidationStrategy = $consolidationStrategy;
  }
  /** @return ConsolidationStrategy */
  public function getConsolidationStrategy()
  {
    return $this->consolidationStrategy;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setItemName($itemName)
  {
    $this->itemName = $itemName;
  }
  /** @return string */
  public function getItemName()
  {
    return $this->itemName;
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
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
}

class QueryDriveActivityResponse extends \Google\Collection
{
  /** @var DriveActivity[] */
  public $activities;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'activities';
  protected $activitiesType = DriveActivity::class;
  protected $activitiesDataType = 'array';
  /** @param DriveActivity[] */
  public function setActivities($activities)
  {
    $this->activities = $activities;
  }
  /** @return DriveActivity[] */
  public function getActivities()
  {
    return $this->activities;
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

class Rename extends \Google\Model
{
  /** @var string */
  public $newTitle;
  /** @var string */
  public $oldTitle;

  /** @param string */
  public function setNewTitle($newTitle)
  {
    $this->newTitle = $newTitle;
  }
  /** @return string */
  public function getNewTitle()
  {
    return $this->newTitle;
  }
  /** @param string */
  public function setOldTitle($oldTitle)
  {
    $this->oldTitle = $oldTitle;
  }
  /** @return string */
  public function getOldTitle()
  {
    return $this->oldTitle;
  }
}

class Restore extends \Google\Model
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

class RestrictionChange extends \Google\Model
{
  /** @var string */
  public $feature;
  /** @var string */
  public $newRestriction;

  /** @param string */
  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  /** @return string */
  public function getFeature()
  {
    return $this->feature;
  }
  /** @param string */
  public function setNewRestriction($newRestriction)
  {
    $this->newRestriction = $newRestriction;
  }
  /** @return string */
  public function getNewRestriction()
  {
    return $this->newRestriction;
  }
}

class Selection extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $value;

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

class SelectionList extends \Google\Collection
{
  /** @var Selection[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Selection::class;
  protected $valuesDataType = 'array';
  /** @param Selection[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return Selection[] */
  public function getValues()
  {
    return $this->values;
  }
}

class SettingsChange extends \Google\Collection
{
  /** @var RestrictionChange[] */
  public $restrictionChanges;
  protected $collection_key = 'restrictionChanges';
  protected $restrictionChangesType = RestrictionChange::class;
  protected $restrictionChangesDataType = 'array';
  /** @param RestrictionChange[] */
  public function setRestrictionChanges($restrictionChanges)
  {
    $this->restrictionChanges = $restrictionChanges;
  }
  /** @return RestrictionChange[] */
  public function getRestrictionChanges()
  {
    return $this->restrictionChanges;
  }
}

class SingleUser extends \Google\Model
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

class Suggestion extends \Google\Model
{
  /** @var string */
  public $subtype;

  /** @param string */
  public function setSubtype($subtype)
  {
    $this->subtype = $subtype;
  }
  /** @return string */
  public function getSubtype()
  {
    return $this->subtype;
  }
}

class SystemEvent extends \Google\Model
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

class Target extends \Google\Model
{
  /** @var Drive */
  public $drive;
  /** @var DriveItem */
  public $driveItem;
  /** @var FileComment */
  public $fileComment;
  /** @var TeamDrive */
  public $teamDrive;
  protected $driveType = Drive::class;
  protected $driveDataType = '';
  protected $driveItemType = DriveItem::class;
  protected $driveItemDataType = '';
  protected $fileCommentType = FileComment::class;
  protected $fileCommentDataType = '';
  protected $teamDriveType = TeamDrive::class;
  protected $teamDriveDataType = '';
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
  /** @param DriveItem */
  public function setDriveItem(DriveItem $driveItem)
  {
    $this->driveItem = $driveItem;
  }
  /** @return DriveItem */
  public function getDriveItem()
  {
    return $this->driveItem;
  }
  /** @param FileComment */
  public function setFileComment(FileComment $fileComment)
  {
    $this->fileComment = $fileComment;
  }
  /** @return FileComment */
  public function getFileComment()
  {
    return $this->fileComment;
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
}

class TargetReference extends \Google\Model
{
  /** @var DriveReference */
  public $drive;
  /** @var DriveItemReference */
  public $driveItem;
  /** @var TeamDriveReference */
  public $teamDrive;
  protected $driveType = DriveReference::class;
  protected $driveDataType = '';
  protected $driveItemType = DriveItemReference::class;
  protected $driveItemDataType = '';
  protected $teamDriveType = TeamDriveReference::class;
  protected $teamDriveDataType = '';
  /** @param DriveReference */
  public function setDrive(DriveReference $drive)
  {
    $this->drive = $drive;
  }
  /** @return DriveReference */
  public function getDrive()
  {
    return $this->drive;
  }
  /** @param DriveItemReference */
  public function setDriveItem(DriveItemReference $driveItem)
  {
    $this->driveItem = $driveItem;
  }
  /** @return DriveItemReference */
  public function getDriveItem()
  {
    return $this->driveItem;
  }
  /** @param TeamDriveReference */
  public function setTeamDrive(TeamDriveReference $teamDrive)
  {
    $this->teamDrive = $teamDrive;
  }
  /** @return TeamDriveReference */
  public function getTeamDrive()
  {
    return $this->teamDrive;
  }
}

class TeamDrive extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var DriveItem */
  public $root;
  /** @var string */
  public $title;
  protected $rootType = DriveItem::class;
  protected $rootDataType = '';
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
  /** @param DriveItem */
  public function setRoot(DriveItem $root)
  {
    $this->root = $root;
  }
  /** @return DriveItem */
  public function getRoot()
  {
    return $this->root;
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

class TeamDriveReference extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $title;

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

class Text extends \Google\Model
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

class TextList extends \Google\Collection
{
  /** @var Text[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Text::class;
  protected $valuesDataType = 'array';
  /** @param Text[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return Text[] */
  public function getValues()
  {
    return $this->values;
  }
}

class TimeRange extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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
}

class UnknownUser extends \Google\Model
{
}

class Upload extends \Google\Model
{
}

class User extends \Google\Model
{
  /** @var DeletedUser */
  public $deletedUser;
  /** @var KnownUser */
  public $knownUser;
  /** @var UnknownUser */
  public $unknownUser;
  protected $deletedUserType = DeletedUser::class;
  protected $deletedUserDataType = '';
  protected $knownUserType = KnownUser::class;
  protected $knownUserDataType = '';
  protected $unknownUserType = UnknownUser::class;
  protected $unknownUserDataType = '';
  /** @param DeletedUser */
  public function setDeletedUser(DeletedUser $deletedUser)
  {
    $this->deletedUser = $deletedUser;
  }
  /** @return DeletedUser */
  public function getDeletedUser()
  {
    return $this->deletedUser;
  }
  /** @param KnownUser */
  public function setKnownUser(KnownUser $knownUser)
  {
    $this->knownUser = $knownUser;
  }
  /** @return KnownUser */
  public function getKnownUser()
  {
    return $this->knownUser;
  }
  /** @param UnknownUser */
  public function setUnknownUser(UnknownUser $unknownUser)
  {
    $this->unknownUser = $unknownUser;
  }
  /** @return UnknownUser */
  public function getUnknownUser()
  {
    return $this->unknownUser;
  }
}

class UserList extends \Google\Collection
{
  /** @var SingleUser[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = SingleUser::class;
  protected $valuesDataType = 'array';
  /** @param SingleUser[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return SingleUser[] */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Action::class, 'Google_Service_DriveActivity_Action');
class_alias(ActionDetail::class, 'Google_Service_DriveActivity_ActionDetail');
class_alias(Actor::class, 'Google_Service_DriveActivity_Actor');
class_alias(Administrator::class, 'Google_Service_DriveActivity_Administrator');
class_alias(AnonymousUser::class, 'Google_Service_DriveActivity_AnonymousUser');
class_alias(Anyone::class, 'Google_Service_DriveActivity_Anyone');
class_alias(ApplicationReference::class, 'Google_Service_DriveActivity_ApplicationReference');
class_alias(AppliedLabelChange::class, 'Google_Service_DriveActivity_AppliedLabelChange');
class_alias(AppliedLabelChangeDetail::class, 'Google_Service_DriveActivity_AppliedLabelChangeDetail');
class_alias(Assignment::class, 'Google_Service_DriveActivity_Assignment');
class_alias(Comment::class, 'Google_Service_DriveActivity_Comment');
class_alias(ConsolidationStrategy::class, 'Google_Service_DriveActivity_ConsolidationStrategy');
class_alias(Copy::class, 'Google_Service_DriveActivity_Copy');
class_alias(Create::class, 'Google_Service_DriveActivity_Create');
class_alias(DataLeakPreventionChange::class, 'Google_Service_DriveActivity_DataLeakPreventionChange');
class_alias(Date::class, 'Google_Service_DriveActivity_Date');
class_alias(Delete::class, 'Google_Service_DriveActivity_Delete');
class_alias(DeletedUser::class, 'Google_Service_DriveActivity_DeletedUser');
class_alias(Domain::class, 'Google_Service_DriveActivity_Domain');
class_alias(Drive::class, 'Google_Service_DriveActivity_Drive');
class_alias(DriveActivity::class, 'Google_Service_DriveActivity_DriveActivity');
class_alias(DriveFile::class, 'Google_Service_DriveActivity_DriveFile');
class_alias(DriveFolder::class, 'Google_Service_DriveActivity_DriveFolder');
class_alias(DriveItem::class, 'Google_Service_DriveActivity_DriveItem');
class_alias(DriveItemReference::class, 'Google_Service_DriveActivity_DriveItemReference');
class_alias(DriveReference::class, 'Google_Service_DriveActivity_DriveReference');
class_alias(DriveactivityFile::class, 'Google_Service_DriveActivity_DriveactivityFile');
class_alias(DriveactivityInteger::class, 'Google_Service_DriveActivity_DriveactivityInteger');
class_alias(DriveactivityNew::class, 'Google_Service_DriveActivity_DriveactivityNew');
class_alias(Edit::class, 'Google_Service_DriveActivity_Edit');
class_alias(FieldValue::class, 'Google_Service_DriveActivity_FieldValue');
class_alias(FieldValueChange::class, 'Google_Service_DriveActivity_FieldValueChange');
class_alias(FileComment::class, 'Google_Service_DriveActivity_FileComment');
class_alias(Folder::class, 'Google_Service_DriveActivity_Folder');
class_alias(Group::class, 'Google_Service_DriveActivity_Group');
class_alias(Impersonation::class, 'Google_Service_DriveActivity_Impersonation');
class_alias(KnownUser::class, 'Google_Service_DriveActivity_KnownUser');
class_alias(Legacy::class, 'Google_Service_DriveActivity_Legacy');
class_alias(Move::class, 'Google_Service_DriveActivity_Move');
class_alias(NoConsolidation::class, 'Google_Service_DriveActivity_NoConsolidation');
class_alias(Owner::class, 'Google_Service_DriveActivity_Owner');
class_alias(Permission::class, 'Google_Service_DriveActivity_Permission');
class_alias(PermissionChange::class, 'Google_Service_DriveActivity_PermissionChange');
class_alias(Post::class, 'Google_Service_DriveActivity_Post');
class_alias(QueryDriveActivityRequest::class, 'Google_Service_DriveActivity_QueryDriveActivityRequest');
class_alias(QueryDriveActivityResponse::class, 'Google_Service_DriveActivity_QueryDriveActivityResponse');
class_alias(Rename::class, 'Google_Service_DriveActivity_Rename');
class_alias(Restore::class, 'Google_Service_DriveActivity_Restore');
class_alias(RestrictionChange::class, 'Google_Service_DriveActivity_RestrictionChange');
class_alias(Selection::class, 'Google_Service_DriveActivity_Selection');
class_alias(SelectionList::class, 'Google_Service_DriveActivity_SelectionList');
class_alias(SettingsChange::class, 'Google_Service_DriveActivity_SettingsChange');
class_alias(SingleUser::class, 'Google_Service_DriveActivity_SingleUser');
class_alias(Suggestion::class, 'Google_Service_DriveActivity_Suggestion');
class_alias(SystemEvent::class, 'Google_Service_DriveActivity_SystemEvent');
class_alias(Target::class, 'Google_Service_DriveActivity_Target');
class_alias(TargetReference::class, 'Google_Service_DriveActivity_TargetReference');
class_alias(TeamDrive::class, 'Google_Service_DriveActivity_TeamDrive');
class_alias(TeamDriveReference::class, 'Google_Service_DriveActivity_TeamDriveReference');
class_alias(Text::class, 'Google_Service_DriveActivity_Text');
class_alias(TextList::class, 'Google_Service_DriveActivity_TextList');
class_alias(TimeRange::class, 'Google_Service_DriveActivity_TimeRange');
class_alias(UnknownUser::class, 'Google_Service_DriveActivity_UnknownUser');
class_alias(Upload::class, 'Google_Service_DriveActivity_Upload');
class_alias(User::class, 'Google_Service_DriveActivity_User');
class_alias(UserList::class, 'Google_Service_DriveActivity_UserList');
