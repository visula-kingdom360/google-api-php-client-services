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

namespace Google\Service\Tasks;

class Task extends \Google\Collection
{
  /** @var string */
  public $completed;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $due;
  /** @var string */
  public $etag;
  /** @var bool */
  public $hidden;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var TaskLinks[] */
  public $links;
  /** @var string */
  public $notes;
  /** @var string */
  public $parent;
  /** @var string */
  public $position;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $title;
  /** @var string */
  public $updated;
  protected $collection_key = 'links';
  protected $linksType = TaskLinks::class;
  protected $linksDataType = 'array';
  /** @param string */
  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  /** @return string */
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
  public function setDue($due)
  {
    $this->due = $due;
  }
  /** @return string */
  public function getDue()
  {
    return $this->due;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  /** @param TaskLinks[] */
  public function setLinks($links)
  {
    $this->links = $links;
  }
  /** @return TaskLinks[] */
  public function getLinks()
  {
    return $this->links;
  }
  /** @param string */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
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
  /** @param string */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return string */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class TaskLinks extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $link;
  /** @var string */
  public $type;

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
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
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

class TaskList extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $title;
  /** @var string */
  public $updated;

  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class TaskLists extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var TaskList[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = TaskList::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param TaskList[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return TaskList[] */
  public function getItems()
  {
    return $this->items;
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

class Tasks extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Task[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Task::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param Task[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Task[] */
  public function getItems()
  {
    return $this->items;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Task::class, 'Google_Service_Tasks_Task');
class_alias(TaskLinks::class, 'Google_Service_Tasks_TaskLinks');
class_alias(TaskList::class, 'Google_Service_Tasks_TaskList');
class_alias(TaskLists::class, 'Google_Service_Tasks_TaskLists');
class_alias(Tasks::class, 'Google_Service_Tasks_Tasks');
