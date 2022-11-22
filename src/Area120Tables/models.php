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

namespace Google\Service\Area120Tables;

class Area120tablesEmpty extends \Google\Model
{
}

class BatchCreateRowsRequest extends \Google\Collection
{
  /** @var CreateRowRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreateRowRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreateRowRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreateRowRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreateRowsResponse extends \Google\Collection
{
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class BatchDeleteRowsRequest extends \Google\Collection
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

class BatchUpdateRowsRequest extends \Google\Collection
{
  /** @var UpdateRowRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = UpdateRowRequest::class;
  protected $requestsDataType = 'array';
  /** @param UpdateRowRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return UpdateRowRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchUpdateRowsResponse extends \Google\Collection
{
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class ColumnDescription extends \Google\Collection
{
  /** @var string */
  public $dataType;
  /** @var DateDetails */
  public $dateDetails;
  /** @var string */
  public $id;
  /** @var LabeledItem[] */
  public $labels;
  /** @var LookupDetails */
  public $lookupDetails;
  /** @var bool */
  public $multipleValuesDisallowed;
  /** @var string */
  public $name;
  /** @var bool */
  public $readonly;
  /** @var RelationshipDetails */
  public $relationshipDetails;
  protected $collection_key = 'labels';
  protected $dateDetailsType = DateDetails::class;
  protected $dateDetailsDataType = '';
  protected $labelsType = LabeledItem::class;
  protected $labelsDataType = 'array';
  protected $lookupDetailsType = LookupDetails::class;
  protected $lookupDetailsDataType = '';
  protected $relationshipDetailsType = RelationshipDetails::class;
  protected $relationshipDetailsDataType = '';
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param DateDetails */
  public function setDateDetails(DateDetails $dateDetails)
  {
    $this->dateDetails = $dateDetails;
  }
  /** @return DateDetails */
  public function getDateDetails()
  {
    return $this->dateDetails;
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
  /** @param LabeledItem[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabeledItem[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param LookupDetails */
  public function setLookupDetails(LookupDetails $lookupDetails)
  {
    $this->lookupDetails = $lookupDetails;
  }
  /** @return LookupDetails */
  public function getLookupDetails()
  {
    return $this->lookupDetails;
  }
  /** @param bool */
  public function setMultipleValuesDisallowed($multipleValuesDisallowed)
  {
    $this->multipleValuesDisallowed = $multipleValuesDisallowed;
  }
  /** @return bool */
  public function getMultipleValuesDisallowed()
  {
    return $this->multipleValuesDisallowed;
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
  public function setReadonly($readonly)
  {
    $this->readonly = $readonly;
  }
  /** @return bool */
  public function getReadonly()
  {
    return $this->readonly;
  }
  /** @param RelationshipDetails */
  public function setRelationshipDetails(RelationshipDetails $relationshipDetails)
  {
    $this->relationshipDetails = $relationshipDetails;
  }
  /** @return RelationshipDetails */
  public function getRelationshipDetails()
  {
    return $this->relationshipDetails;
  }
}

class CreateRowRequest extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var Row */
  public $row;
  /** @var string */
  public $view;
  protected $rowType = Row::class;
  protected $rowDataType = '';
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
  /** @param Row */
  public function setRow(Row $row)
  {
    $this->row = $row;
  }
  /** @return Row */
  public function getRow()
  {
    return $this->row;
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

class DateDetails extends \Google\Model
{
  /** @var bool */
  public $hasTime;

  /** @param bool */
  public function setHasTime($hasTime)
  {
    $this->hasTime = $hasTime;
  }
  /** @return bool */
  public function getHasTime()
  {
    return $this->hasTime;
  }
}

class LabeledItem extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;

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
}

class ListRowsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
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
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class ListTablesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Table[] */
  public $tables;
  protected $collection_key = 'tables';
  protected $tablesType = Table::class;
  protected $tablesDataType = 'array';
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
  /** @param Table[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return Table[] */
  public function getTables()
  {
    return $this->tables;
  }
}

class ListWorkspacesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Workspace[] */
  public $workspaces;
  protected $collection_key = 'workspaces';
  protected $workspacesType = Workspace::class;
  protected $workspacesDataType = 'array';
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
  /** @param Workspace[] */
  public function setWorkspaces($workspaces)
  {
    $this->workspaces = $workspaces;
  }
  /** @return Workspace[] */
  public function getWorkspaces()
  {
    return $this->workspaces;
  }
}

class LookupDetails extends \Google\Model
{
  /** @var string */
  public $relationshipColumn;
  /** @var string */
  public $relationshipColumnId;

  /** @param string */
  public function setRelationshipColumn($relationshipColumn)
  {
    $this->relationshipColumn = $relationshipColumn;
  }
  /** @return string */
  public function getRelationshipColumn()
  {
    return $this->relationshipColumn;
  }
  /** @param string */
  public function setRelationshipColumnId($relationshipColumnId)
  {
    $this->relationshipColumnId = $relationshipColumnId;
  }
  /** @return string */
  public function getRelationshipColumnId()
  {
    return $this->relationshipColumnId;
  }
}

class RelationshipDetails extends \Google\Model
{
  /** @var string */
  public $linkedTable;

  /** @param string */
  public function setLinkedTable($linkedTable)
  {
    $this->linkedTable = $linkedTable;
  }
  /** @return string */
  public function getLinkedTable()
  {
    return $this->linkedTable;
  }
}

class Row extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var array[] */
  public $values;

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
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class SavedView extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;

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
}

class Table extends \Google\Collection
{
  /** @var ColumnDescription[] */
  public $columns;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var SavedView[] */
  public $savedViews;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'savedViews';
  protected $columnsType = ColumnDescription::class;
  protected $columnsDataType = 'array';
  protected $savedViewsType = SavedView::class;
  protected $savedViewsDataType = 'array';
  /** @param ColumnDescription[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return ColumnDescription[] */
  public function getColumns()
  {
    return $this->columns;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param SavedView[] */
  public function setSavedViews($savedViews)
  {
    $this->savedViews = $savedViews;
  }
  /** @return SavedView[] */
  public function getSavedViews()
  {
    return $this->savedViews;
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

class UpdateRowRequest extends \Google\Model
{
  /** @var Row */
  public $row;
  /** @var string */
  public $updateMask;
  /** @var string */
  public $view;
  protected $rowType = Row::class;
  protected $rowDataType = '';
  /** @param Row */
  public function setRow(Row $row)
  {
    $this->row = $row;
  }
  /** @return Row */
  public function getRow()
  {
    return $this->row;
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

class Workspace extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var Table[] */
  public $tables;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'tables';
  protected $tablesType = Table::class;
  protected $tablesDataType = 'array';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param Table[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return Table[] */
  public function getTables()
  {
    return $this->tables;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Area120tablesEmpty::class, 'Google_Service_Area120Tables_Area120tablesEmpty');
class_alias(BatchCreateRowsRequest::class, 'Google_Service_Area120Tables_BatchCreateRowsRequest');
class_alias(BatchCreateRowsResponse::class, 'Google_Service_Area120Tables_BatchCreateRowsResponse');
class_alias(BatchDeleteRowsRequest::class, 'Google_Service_Area120Tables_BatchDeleteRowsRequest');
class_alias(BatchUpdateRowsRequest::class, 'Google_Service_Area120Tables_BatchUpdateRowsRequest');
class_alias(BatchUpdateRowsResponse::class, 'Google_Service_Area120Tables_BatchUpdateRowsResponse');
class_alias(ColumnDescription::class, 'Google_Service_Area120Tables_ColumnDescription');
class_alias(CreateRowRequest::class, 'Google_Service_Area120Tables_CreateRowRequest');
class_alias(DateDetails::class, 'Google_Service_Area120Tables_DateDetails');
class_alias(LabeledItem::class, 'Google_Service_Area120Tables_LabeledItem');
class_alias(ListRowsResponse::class, 'Google_Service_Area120Tables_ListRowsResponse');
class_alias(ListTablesResponse::class, 'Google_Service_Area120Tables_ListTablesResponse');
class_alias(ListWorkspacesResponse::class, 'Google_Service_Area120Tables_ListWorkspacesResponse');
class_alias(LookupDetails::class, 'Google_Service_Area120Tables_LookupDetails');
class_alias(RelationshipDetails::class, 'Google_Service_Area120Tables_RelationshipDetails');
class_alias(Row::class, 'Google_Service_Area120Tables_Row');
class_alias(SavedView::class, 'Google_Service_Area120Tables_SavedView');
class_alias(Table::class, 'Google_Service_Area120Tables_Table');
class_alias(UpdateRowRequest::class, 'Google_Service_Area120Tables_UpdateRowRequest');
class_alias(Workspace::class, 'Google_Service_Area120Tables_Workspace');
