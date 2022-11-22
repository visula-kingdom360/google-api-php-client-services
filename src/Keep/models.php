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

namespace Google\Service\Keep;

class Attachment extends \Google\Collection
{
  /** @var string[] */
  public $mimeType;
  /** @var string */
  public $name;
  protected $collection_key = 'mimeType';
  /** @param string[] */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string[] */
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
}

class BatchCreatePermissionsRequest extends \Google\Collection
{
  /** @var CreatePermissionRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreatePermissionRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreatePermissionRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreatePermissionRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreatePermissionsResponse extends \Google\Collection
{
  /** @var Permission[] */
  public $permissions;
  protected $collection_key = 'permissions';
  protected $permissionsType = Permission::class;
  protected $permissionsDataType = 'array';
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

class BatchDeletePermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
  /** @param string[] */
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return string[] */
  public function getNames()
  {
    return $this->names;
  }
}

class CreatePermissionRequest extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var Permission */
  public $permission;
  protected $permissionType = Permission::class;
  protected $permissionDataType = '';
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param Permission */
  public function setPermission(Permission $permission)
  {
    $this->permission = $permission;
  }
  /** @return Permission */
  public function getPermission()
  {
    return $this->permission;
  }
}

class Family extends \Google\Model
{
}

class Group extends \Google\Model
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

class KeepEmpty extends \Google\Model
{
}

class ListContent extends \Google\Collection
{
  /** @var ListItem[] */
  public $listItems;
  protected $collection_key = 'listItems';
  protected $listItemsType = ListItem::class;
  protected $listItemsDataType = 'array';
  /** @param ListItem[] */
  public function setListItems($listItems)
  {
    $this->listItems = $listItems;
  }
  /** @return ListItem[] */
  public function getListItems()
  {
    return $this->listItems;
  }
}

class ListItem extends \Google\Collection
{
  /** @var bool */
  public $checked;
  /** @var ListItem[] */
  public $childListItems;
  /** @var TextContent */
  public $text;
  protected $collection_key = 'childListItems';
  protected $childListItemsType = ListItem::class;
  protected $childListItemsDataType = 'array';
  protected $textType = TextContent::class;
  protected $textDataType = '';
  /** @param bool */
  public function setChecked($checked)
  {
    $this->checked = $checked;
  }
  /** @return bool */
  public function getChecked()
  {
    return $this->checked;
  }
  /** @param ListItem[] */
  public function setChildListItems($childListItems)
  {
    $this->childListItems = $childListItems;
  }
  /** @return ListItem[] */
  public function getChildListItems()
  {
    return $this->childListItems;
  }
  /** @param TextContent */
  public function setText(TextContent $text)
  {
    $this->text = $text;
  }
  /** @return TextContent */
  public function getText()
  {
    return $this->text;
  }
}

class ListNotesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Note[] */
  public $notes;
  protected $collection_key = 'notes';
  protected $notesType = Note::class;
  protected $notesDataType = 'array';
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
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
}

class Note extends \Google\Collection
{
  /** @var Attachment[] */
  public $attachments;
  /** @var Section */
  public $body;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var Permission[] */
  public $permissions;
  /** @var string */
  public $title;
  /** @var string */
  public $trashTime;
  /** @var bool */
  public $trashed;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'permissions';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  protected $bodyType = Section::class;
  protected $bodyDataType = '';
  protected $permissionsType = Permission::class;
  protected $permissionsDataType = 'array';
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
  /** @param Section */
  public function setBody(Section $body)
  {
    $this->body = $body;
  }
  /** @return Section */
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
  public function setTrashTime($trashTime)
  {
    $this->trashTime = $trashTime;
  }
  /** @return string */
  public function getTrashTime()
  {
    return $this->trashTime;
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

class Permission extends \Google\Model
{
  /** @var bool */
  public $deleted;
  /** @var string */
  public $email;
  /** @var Family */
  public $family;
  /** @var Group */
  public $group;
  /** @var string */
  public $name;
  /** @var string */
  public $role;
  /** @var User */
  public $user;
  protected $familyType = Family::class;
  protected $familyDataType = '';
  protected $groupType = Group::class;
  protected $groupDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
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
  /** @param Family */
  public function setFamily(Family $family)
  {
    $this->family = $family;
  }
  /** @return Family */
  public function getFamily()
  {
    return $this->family;
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

class Section extends \Google\Model
{
  /** @var ListContent */
  public $list;
  /** @var TextContent */
  public $text;
  protected $listType = ListContent::class;
  protected $listDataType = '';
  protected $textType = TextContent::class;
  protected $textDataType = '';
  /** @param ListContent */
  public function setList(ListContent $list)
  {
    $this->list = $list;
  }
  /** @return ListContent */
  public function getList()
  {
    return $this->list;
  }
  /** @param TextContent */
  public function setText(TextContent $text)
  {
    $this->text = $text;
  }
  /** @return TextContent */
  public function getText()
  {
    return $this->text;
  }
}

class TextContent extends \Google\Model
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

class User extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Attachment::class, 'Google_Service_Keep_Attachment');
class_alias(BatchCreatePermissionsRequest::class, 'Google_Service_Keep_BatchCreatePermissionsRequest');
class_alias(BatchCreatePermissionsResponse::class, 'Google_Service_Keep_BatchCreatePermissionsResponse');
class_alias(BatchDeletePermissionsRequest::class, 'Google_Service_Keep_BatchDeletePermissionsRequest');
class_alias(CreatePermissionRequest::class, 'Google_Service_Keep_CreatePermissionRequest');
class_alias(Family::class, 'Google_Service_Keep_Family');
class_alias(Group::class, 'Google_Service_Keep_Group');
class_alias(KeepEmpty::class, 'Google_Service_Keep_KeepEmpty');
class_alias(ListContent::class, 'Google_Service_Keep_ListContent');
class_alias(ListItem::class, 'Google_Service_Keep_ListItem');
class_alias(ListNotesResponse::class, 'Google_Service_Keep_ListNotesResponse');
class_alias(Note::class, 'Google_Service_Keep_Note');
class_alias(Permission::class, 'Google_Service_Keep_Permission');
class_alias(Section::class, 'Google_Service_Keep_Section');
class_alias(TextContent::class, 'Google_Service_Keep_TextContent');
class_alias(User::class, 'Google_Service_Keep_User');
