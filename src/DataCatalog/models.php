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

namespace Google\Service\DataCatalog;

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
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

class DatacatalogEmpty extends \Google\Model
{
}

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
  /** @var string */
  public $title;

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
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
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

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class GoogleCloudDatacatalogV1BigQueryConnectionSpec extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec */
  public $cloudSql;
  /** @var string */
  public $connectionType;
  /** @var bool */
  public $hasCredential;
  protected $cloudSqlType = GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec::class;
  protected $cloudSqlDataType = '';
  /** @param GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec */
  public function setCloudSql(GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec $cloudSql)
  {
    $this->cloudSql = $cloudSql;
  }
  /** @return GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec */
  public function getCloudSql()
  {
    return $this->cloudSql;
  }
  /** @param string */
  public function setConnectionType($connectionType)
  {
    $this->connectionType = $connectionType;
  }
  /** @return string */
  public function getConnectionType()
  {
    return $this->connectionType;
  }
  /** @param bool */
  public function setHasCredential($hasCredential)
  {
    $this->hasCredential = $hasCredential;
  }
  /** @return bool */
  public function getHasCredential()
  {
    return $this->hasCredential;
  }
}

class GoogleCloudDatacatalogV1BigQueryDateShardedSpec extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $latestShardResource;
  /** @var string */
  public $shardCount;
  /** @var string */
  public $tablePrefix;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param string */
  public function setLatestShardResource($latestShardResource)
  {
    $this->latestShardResource = $latestShardResource;
  }
  /** @return string */
  public function getLatestShardResource()
  {
    return $this->latestShardResource;
  }
  /** @param string */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /** @return string */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  /** @param string */
  public function setTablePrefix($tablePrefix)
  {
    $this->tablePrefix = $tablePrefix;
  }
  /** @return string */
  public function getTablePrefix()
  {
    return $this->tablePrefix;
  }
}

class GoogleCloudDatacatalogV1BigQueryRoutineSpec extends \Google\Collection
{
  /** @var string[] */
  public $importedLibraries;
  protected $collection_key = 'importedLibraries';
  /** @param string[] */
  public function setImportedLibraries($importedLibraries)
  {
    $this->importedLibraries = $importedLibraries;
  }
  /** @return string[] */
  public function getImportedLibraries()
  {
    return $this->importedLibraries;
  }
}

class GoogleCloudDatacatalogV1BigQueryTableSpec extends \Google\Model
{
  /** @var string */
  public $tableSourceType;
  /** @var GoogleCloudDatacatalogV1TableSpec */
  public $tableSpec;
  /** @var GoogleCloudDatacatalogV1ViewSpec */
  public $viewSpec;
  protected $tableSpecType = GoogleCloudDatacatalogV1TableSpec::class;
  protected $tableSpecDataType = '';
  protected $viewSpecType = GoogleCloudDatacatalogV1ViewSpec::class;
  protected $viewSpecDataType = '';
  /** @param string */
  public function setTableSourceType($tableSourceType)
  {
    $this->tableSourceType = $tableSourceType;
  }
  /** @return string */
  public function getTableSourceType()
  {
    return $this->tableSourceType;
  }
  /** @param GoogleCloudDatacatalogV1TableSpec */
  public function setTableSpec(GoogleCloudDatacatalogV1TableSpec $tableSpec)
  {
    $this->tableSpec = $tableSpec;
  }
  /** @return GoogleCloudDatacatalogV1TableSpec */
  public function getTableSpec()
  {
    return $this->tableSpec;
  }
  /** @param GoogleCloudDatacatalogV1ViewSpec */
  public function setViewSpec(GoogleCloudDatacatalogV1ViewSpec $viewSpec)
  {
    $this->viewSpec = $viewSpec;
  }
  /** @return GoogleCloudDatacatalogV1ViewSpec */
  public function getViewSpec()
  {
    return $this->viewSpec;
  }
}

class GoogleCloudDatacatalogV1BusinessContext extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1Contacts */
  public $contacts;
  /** @var GoogleCloudDatacatalogV1EntryOverview */
  public $entryOverview;
  protected $contactsType = GoogleCloudDatacatalogV1Contacts::class;
  protected $contactsDataType = '';
  protected $entryOverviewType = GoogleCloudDatacatalogV1EntryOverview::class;
  protected $entryOverviewDataType = '';
  /** @param GoogleCloudDatacatalogV1Contacts */
  public function setContacts(GoogleCloudDatacatalogV1Contacts $contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return GoogleCloudDatacatalogV1Contacts */
  public function getContacts()
  {
    return $this->contacts;
  }
  /** @param GoogleCloudDatacatalogV1EntryOverview */
  public function setEntryOverview(GoogleCloudDatacatalogV1EntryOverview $entryOverview)
  {
    $this->entryOverview = $entryOverview;
  }
  /** @return GoogleCloudDatacatalogV1EntryOverview */
  public function getEntryOverview()
  {
    return $this->entryOverview;
  }
}

class GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec extends \Google\Model
{
  /** @var string */
  public $database;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $type;

  /** @param string */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /** @return string */
  public function getDatabase()
  {
    return $this->database;
  }
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

class GoogleCloudDatacatalogV1ColumnSchema extends \Google\Collection
{
  /** @var string */
  public $column;
  /** @var string */
  public $description;
  /** @var string */
  public $gcRule;
  /** @var string */
  public $mode;
  /** @var GoogleCloudDatacatalogV1ColumnSchema[] */
  public $subcolumns;
  /** @var string */
  public $type;
  protected $collection_key = 'subcolumns';
  protected $subcolumnsType = GoogleCloudDatacatalogV1ColumnSchema::class;
  protected $subcolumnsDataType = 'array';
  /** @param string */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return string */
  public function getColumn()
  {
    return $this->column;
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
  public function setGcRule($gcRule)
  {
    $this->gcRule = $gcRule;
  }
  /** @return string */
  public function getGcRule()
  {
    return $this->gcRule;
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
  /** @param GoogleCloudDatacatalogV1ColumnSchema[] */
  public function setSubcolumns($subcolumns)
  {
    $this->subcolumns = $subcolumns;
  }
  /** @return GoogleCloudDatacatalogV1ColumnSchema[] */
  public function getSubcolumns()
  {
    return $this->subcolumns;
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

class GoogleCloudDatacatalogV1Contacts extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1ContactsPerson[] */
  public $people;
  protected $collection_key = 'people';
  protected $peopleType = GoogleCloudDatacatalogV1ContactsPerson::class;
  protected $peopleDataType = 'array';
  /** @param GoogleCloudDatacatalogV1ContactsPerson[] */
  public function setPeople($people)
  {
    $this->people = $people;
  }
  /** @return GoogleCloudDatacatalogV1ContactsPerson[] */
  public function getPeople()
  {
    return $this->people;
  }
}

class GoogleCloudDatacatalogV1ContactsPerson extends \Google\Model
{
  /** @var string */
  public $designation;
  /** @var string */
  public $email;

  /** @param string */
  public function setDesignation($designation)
  {
    $this->designation = $designation;
  }
  /** @return string */
  public function getDesignation()
  {
    return $this->designation;
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

class GoogleCloudDatacatalogV1CrossRegionalSource extends \Google\Model
{
  /** @var string */
  public $taxonomy;

  /** @param string */
  public function setTaxonomy($taxonomy)
  {
    $this->taxonomy = $taxonomy;
  }
  /** @return string */
  public function getTaxonomy()
  {
    return $this->taxonomy;
  }
}

class GoogleCloudDatacatalogV1DataSource extends \Google\Model
{
  /** @var string */
  public $resource;
  /** @var string */
  public $service;
  /** @var string */
  public $sourceEntry;
  /** @var GoogleCloudDatacatalogV1StorageProperties */
  public $storageProperties;
  protected $storagePropertiesType = GoogleCloudDatacatalogV1StorageProperties::class;
  protected $storagePropertiesDataType = '';
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
  /** @param string */
  public function setSourceEntry($sourceEntry)
  {
    $this->sourceEntry = $sourceEntry;
  }
  /** @return string */
  public function getSourceEntry()
  {
    return $this->sourceEntry;
  }
  /** @param GoogleCloudDatacatalogV1StorageProperties */
  public function setStorageProperties(GoogleCloudDatacatalogV1StorageProperties $storageProperties)
  {
    $this->storageProperties = $storageProperties;
  }
  /** @return GoogleCloudDatacatalogV1StorageProperties */
  public function getStorageProperties()
  {
    return $this->storageProperties;
  }
}

class GoogleCloudDatacatalogV1DataSourceConnectionSpec extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1BigQueryConnectionSpec */
  public $bigqueryConnectionSpec;
  protected $bigqueryConnectionSpecType = GoogleCloudDatacatalogV1BigQueryConnectionSpec::class;
  protected $bigqueryConnectionSpecDataType = '';
  /** @param GoogleCloudDatacatalogV1BigQueryConnectionSpec */
  public function setBigqueryConnectionSpec(GoogleCloudDatacatalogV1BigQueryConnectionSpec $bigqueryConnectionSpec)
  {
    $this->bigqueryConnectionSpec = $bigqueryConnectionSpec;
  }
  /** @return GoogleCloudDatacatalogV1BigQueryConnectionSpec */
  public function getBigqueryConnectionSpec()
  {
    return $this->bigqueryConnectionSpec;
  }
}

class GoogleCloudDatacatalogV1DatabaseTableSpec extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1DataplexTableSpec */
  public $dataplexTable;
  /** @var string */
  public $type;
  protected $dataplexTableType = GoogleCloudDatacatalogV1DataplexTableSpec::class;
  protected $dataplexTableDataType = '';
  /** @param GoogleCloudDatacatalogV1DataplexTableSpec */
  public function setDataplexTable(GoogleCloudDatacatalogV1DataplexTableSpec $dataplexTable)
  {
    $this->dataplexTable = $dataplexTable;
  }
  /** @return GoogleCloudDatacatalogV1DataplexTableSpec */
  public function getDataplexTable()
  {
    return $this->dataplexTable;
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

class GoogleCloudDatacatalogV1DataplexExternalTable extends \Google\Model
{
  /** @var string */
  public $dataCatalogEntry;
  /** @var string */
  public $fullyQualifiedName;
  /** @var string */
  public $googleCloudResource;
  /** @var string */
  public $system;

  /** @param string */
  public function setDataCatalogEntry($dataCatalogEntry)
  {
    $this->dataCatalogEntry = $dataCatalogEntry;
  }
  /** @return string */
  public function getDataCatalogEntry()
  {
    return $this->dataCatalogEntry;
  }
  /** @param string */
  public function setFullyQualifiedName($fullyQualifiedName)
  {
    $this->fullyQualifiedName = $fullyQualifiedName;
  }
  /** @return string */
  public function getFullyQualifiedName()
  {
    return $this->fullyQualifiedName;
  }
  /** @param string */
  public function setGoogleCloudResource($googleCloudResource)
  {
    $this->googleCloudResource = $googleCloudResource;
  }
  /** @return string */
  public function getGoogleCloudResource()
  {
    return $this->googleCloudResource;
  }
  /** @param string */
  public function setSystem($system)
  {
    $this->system = $system;
  }
  /** @return string */
  public function getSystem()
  {
    return $this->system;
  }
}

class GoogleCloudDatacatalogV1DataplexFilesetSpec extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1DataplexSpec */
  public $dataplexSpec;
  protected $dataplexSpecType = GoogleCloudDatacatalogV1DataplexSpec::class;
  protected $dataplexSpecDataType = '';
  /** @param GoogleCloudDatacatalogV1DataplexSpec */
  public function setDataplexSpec(GoogleCloudDatacatalogV1DataplexSpec $dataplexSpec)
  {
    $this->dataplexSpec = $dataplexSpec;
  }
  /** @return GoogleCloudDatacatalogV1DataplexSpec */
  public function getDataplexSpec()
  {
    return $this->dataplexSpec;
  }
}

class GoogleCloudDatacatalogV1DataplexSpec extends \Google\Model
{
  /** @var string */
  public $asset;
  /** @var string */
  public $compressionFormat;
  /** @var GoogleCloudDatacatalogV1PhysicalSchema */
  public $dataFormat;
  /** @var string */
  public $projectId;
  protected $dataFormatType = GoogleCloudDatacatalogV1PhysicalSchema::class;
  protected $dataFormatDataType = '';
  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setCompressionFormat($compressionFormat)
  {
    $this->compressionFormat = $compressionFormat;
  }
  /** @return string */
  public function getCompressionFormat()
  {
    return $this->compressionFormat;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchema */
  public function setDataFormat(GoogleCloudDatacatalogV1PhysicalSchema $dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchema */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class GoogleCloudDatacatalogV1DataplexTableSpec extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1DataplexSpec */
  public $dataplexSpec;
  /** @var GoogleCloudDatacatalogV1DataplexExternalTable[] */
  public $externalTables;
  /** @var bool */
  public $userManaged;
  protected $collection_key = 'externalTables';
  protected $dataplexSpecType = GoogleCloudDatacatalogV1DataplexSpec::class;
  protected $dataplexSpecDataType = '';
  protected $externalTablesType = GoogleCloudDatacatalogV1DataplexExternalTable::class;
  protected $externalTablesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1DataplexSpec */
  public function setDataplexSpec(GoogleCloudDatacatalogV1DataplexSpec $dataplexSpec)
  {
    $this->dataplexSpec = $dataplexSpec;
  }
  /** @return GoogleCloudDatacatalogV1DataplexSpec */
  public function getDataplexSpec()
  {
    return $this->dataplexSpec;
  }
  /** @param GoogleCloudDatacatalogV1DataplexExternalTable[] */
  public function setExternalTables($externalTables)
  {
    $this->externalTables = $externalTables;
  }
  /** @return GoogleCloudDatacatalogV1DataplexExternalTable[] */
  public function getExternalTables()
  {
    return $this->externalTables;
  }
  /** @param bool */
  public function setUserManaged($userManaged)
  {
    $this->userManaged = $userManaged;
  }
  /** @return bool */
  public function getUserManaged()
  {
    return $this->userManaged;
  }
}

class GoogleCloudDatacatalogV1Entry extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1BigQueryDateShardedSpec */
  public $bigqueryDateShardedSpec;
  /** @var GoogleCloudDatacatalogV1BigQueryTableSpec */
  public $bigqueryTableSpec;
  /** @var GoogleCloudDatacatalogV1BusinessContext */
  public $businessContext;
  /** @var GoogleCloudDatacatalogV1DataSource */
  public $dataSource;
  /** @var GoogleCloudDatacatalogV1DataSourceConnectionSpec */
  public $dataSourceConnectionSpec;
  /** @var GoogleCloudDatacatalogV1DatabaseTableSpec */
  public $databaseTableSpec;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDatacatalogV1FilesetSpec */
  public $filesetSpec;
  /** @var string */
  public $fullyQualifiedName;
  /** @var GoogleCloudDatacatalogV1GcsFilesetSpec */
  public $gcsFilesetSpec;
  /** @var string */
  public $integratedSystem;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $linkedResource;
  /** @var string */
  public $name;
  /** @var GoogleCloudDatacatalogV1PersonalDetails */
  public $personalDetails;
  /** @var GoogleCloudDatacatalogV1RoutineSpec */
  public $routineSpec;
  /** @var GoogleCloudDatacatalogV1Schema */
  public $schema;
  /** @var GoogleCloudDatacatalogV1SystemTimestamps */
  public $sourceSystemTimestamps;
  /** @var string */
  public $type;
  /** @var GoogleCloudDatacatalogV1UsageSignal */
  public $usageSignal;
  /** @var string */
  public $userSpecifiedSystem;
  /** @var string */
  public $userSpecifiedType;
  protected $bigqueryDateShardedSpecType = GoogleCloudDatacatalogV1BigQueryDateShardedSpec::class;
  protected $bigqueryDateShardedSpecDataType = '';
  protected $bigqueryTableSpecType = GoogleCloudDatacatalogV1BigQueryTableSpec::class;
  protected $bigqueryTableSpecDataType = '';
  protected $businessContextType = GoogleCloudDatacatalogV1BusinessContext::class;
  protected $businessContextDataType = '';
  protected $dataSourceType = GoogleCloudDatacatalogV1DataSource::class;
  protected $dataSourceDataType = '';
  protected $dataSourceConnectionSpecType = GoogleCloudDatacatalogV1DataSourceConnectionSpec::class;
  protected $dataSourceConnectionSpecDataType = '';
  protected $databaseTableSpecType = GoogleCloudDatacatalogV1DatabaseTableSpec::class;
  protected $databaseTableSpecDataType = '';
  protected $filesetSpecType = GoogleCloudDatacatalogV1FilesetSpec::class;
  protected $filesetSpecDataType = '';
  protected $gcsFilesetSpecType = GoogleCloudDatacatalogV1GcsFilesetSpec::class;
  protected $gcsFilesetSpecDataType = '';
  protected $personalDetailsType = GoogleCloudDatacatalogV1PersonalDetails::class;
  protected $personalDetailsDataType = '';
  protected $routineSpecType = GoogleCloudDatacatalogV1RoutineSpec::class;
  protected $routineSpecDataType = '';
  protected $schemaType = GoogleCloudDatacatalogV1Schema::class;
  protected $schemaDataType = '';
  protected $sourceSystemTimestampsType = GoogleCloudDatacatalogV1SystemTimestamps::class;
  protected $sourceSystemTimestampsDataType = '';
  protected $usageSignalType = GoogleCloudDatacatalogV1UsageSignal::class;
  protected $usageSignalDataType = '';
  /** @param GoogleCloudDatacatalogV1BigQueryDateShardedSpec */
  public function setBigqueryDateShardedSpec(GoogleCloudDatacatalogV1BigQueryDateShardedSpec $bigqueryDateShardedSpec)
  {
    $this->bigqueryDateShardedSpec = $bigqueryDateShardedSpec;
  }
  /** @return GoogleCloudDatacatalogV1BigQueryDateShardedSpec */
  public function getBigqueryDateShardedSpec()
  {
    return $this->bigqueryDateShardedSpec;
  }
  /** @param GoogleCloudDatacatalogV1BigQueryTableSpec */
  public function setBigqueryTableSpec(GoogleCloudDatacatalogV1BigQueryTableSpec $bigqueryTableSpec)
  {
    $this->bigqueryTableSpec = $bigqueryTableSpec;
  }
  /** @return GoogleCloudDatacatalogV1BigQueryTableSpec */
  public function getBigqueryTableSpec()
  {
    return $this->bigqueryTableSpec;
  }
  /** @param GoogleCloudDatacatalogV1BusinessContext */
  public function setBusinessContext(GoogleCloudDatacatalogV1BusinessContext $businessContext)
  {
    $this->businessContext = $businessContext;
  }
  /** @return GoogleCloudDatacatalogV1BusinessContext */
  public function getBusinessContext()
  {
    return $this->businessContext;
  }
  /** @param GoogleCloudDatacatalogV1DataSource */
  public function setDataSource(GoogleCloudDatacatalogV1DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return GoogleCloudDatacatalogV1DataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /** @param GoogleCloudDatacatalogV1DataSourceConnectionSpec */
  public function setDataSourceConnectionSpec(GoogleCloudDatacatalogV1DataSourceConnectionSpec $dataSourceConnectionSpec)
  {
    $this->dataSourceConnectionSpec = $dataSourceConnectionSpec;
  }
  /** @return GoogleCloudDatacatalogV1DataSourceConnectionSpec */
  public function getDataSourceConnectionSpec()
  {
    return $this->dataSourceConnectionSpec;
  }
  /** @param GoogleCloudDatacatalogV1DatabaseTableSpec */
  public function setDatabaseTableSpec(GoogleCloudDatacatalogV1DatabaseTableSpec $databaseTableSpec)
  {
    $this->databaseTableSpec = $databaseTableSpec;
  }
  /** @return GoogleCloudDatacatalogV1DatabaseTableSpec */
  public function getDatabaseTableSpec()
  {
    return $this->databaseTableSpec;
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
  /** @param GoogleCloudDatacatalogV1FilesetSpec */
  public function setFilesetSpec(GoogleCloudDatacatalogV1FilesetSpec $filesetSpec)
  {
    $this->filesetSpec = $filesetSpec;
  }
  /** @return GoogleCloudDatacatalogV1FilesetSpec */
  public function getFilesetSpec()
  {
    return $this->filesetSpec;
  }
  /** @param string */
  public function setFullyQualifiedName($fullyQualifiedName)
  {
    $this->fullyQualifiedName = $fullyQualifiedName;
  }
  /** @return string */
  public function getFullyQualifiedName()
  {
    return $this->fullyQualifiedName;
  }
  /** @param GoogleCloudDatacatalogV1GcsFilesetSpec */
  public function setGcsFilesetSpec(GoogleCloudDatacatalogV1GcsFilesetSpec $gcsFilesetSpec)
  {
    $this->gcsFilesetSpec = $gcsFilesetSpec;
  }
  /** @return GoogleCloudDatacatalogV1GcsFilesetSpec */
  public function getGcsFilesetSpec()
  {
    return $this->gcsFilesetSpec;
  }
  /** @param string */
  public function setIntegratedSystem($integratedSystem)
  {
    $this->integratedSystem = $integratedSystem;
  }
  /** @return string */
  public function getIntegratedSystem()
  {
    return $this->integratedSystem;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLinkedResource($linkedResource)
  {
    $this->linkedResource = $linkedResource;
  }
  /** @return string */
  public function getLinkedResource()
  {
    return $this->linkedResource;
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
  /** @param GoogleCloudDatacatalogV1PersonalDetails */
  public function setPersonalDetails(GoogleCloudDatacatalogV1PersonalDetails $personalDetails)
  {
    $this->personalDetails = $personalDetails;
  }
  /** @return GoogleCloudDatacatalogV1PersonalDetails */
  public function getPersonalDetails()
  {
    return $this->personalDetails;
  }
  /** @param GoogleCloudDatacatalogV1RoutineSpec */
  public function setRoutineSpec(GoogleCloudDatacatalogV1RoutineSpec $routineSpec)
  {
    $this->routineSpec = $routineSpec;
  }
  /** @return GoogleCloudDatacatalogV1RoutineSpec */
  public function getRoutineSpec()
  {
    return $this->routineSpec;
  }
  /** @param GoogleCloudDatacatalogV1Schema */
  public function setSchema(GoogleCloudDatacatalogV1Schema $schema)
  {
    $this->schema = $schema;
  }
  /** @return GoogleCloudDatacatalogV1Schema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param GoogleCloudDatacatalogV1SystemTimestamps */
  public function setSourceSystemTimestamps(GoogleCloudDatacatalogV1SystemTimestamps $sourceSystemTimestamps)
  {
    $this->sourceSystemTimestamps = $sourceSystemTimestamps;
  }
  /** @return GoogleCloudDatacatalogV1SystemTimestamps */
  public function getSourceSystemTimestamps()
  {
    return $this->sourceSystemTimestamps;
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
  /** @param GoogleCloudDatacatalogV1UsageSignal */
  public function setUsageSignal(GoogleCloudDatacatalogV1UsageSignal $usageSignal)
  {
    $this->usageSignal = $usageSignal;
  }
  /** @return GoogleCloudDatacatalogV1UsageSignal */
  public function getUsageSignal()
  {
    return $this->usageSignal;
  }
  /** @param string */
  public function setUserSpecifiedSystem($userSpecifiedSystem)
  {
    $this->userSpecifiedSystem = $userSpecifiedSystem;
  }
  /** @return string */
  public function getUserSpecifiedSystem()
  {
    return $this->userSpecifiedSystem;
  }
  /** @param string */
  public function setUserSpecifiedType($userSpecifiedType)
  {
    $this->userSpecifiedType = $userSpecifiedType;
  }
  /** @return string */
  public function getUserSpecifiedType()
  {
    return $this->userSpecifiedType;
  }
}

class GoogleCloudDatacatalogV1EntryGroup extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1SystemTimestamps */
  public $dataCatalogTimestamps;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $dataCatalogTimestampsType = GoogleCloudDatacatalogV1SystemTimestamps::class;
  protected $dataCatalogTimestampsDataType = '';
  /** @param GoogleCloudDatacatalogV1SystemTimestamps */
  public function setDataCatalogTimestamps(GoogleCloudDatacatalogV1SystemTimestamps $dataCatalogTimestamps)
  {
    $this->dataCatalogTimestamps = $dataCatalogTimestamps;
  }
  /** @return GoogleCloudDatacatalogV1SystemTimestamps */
  public function getDataCatalogTimestamps()
  {
    return $this->dataCatalogTimestamps;
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

class GoogleCloudDatacatalogV1EntryOverview extends \Google\Model
{
  /** @var string */
  public $overview;

  /** @param string */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /** @return string */
  public function getOverview()
  {
    return $this->overview;
  }
}

class GoogleCloudDatacatalogV1ExportTaxonomiesResponse extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public $taxonomies;
  protected $collection_key = 'taxonomies';
  protected $taxonomiesType = GoogleCloudDatacatalogV1SerializedTaxonomy::class;
  protected $taxonomiesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public function setTaxonomies($taxonomies)
  {
    $this->taxonomies = $taxonomies;
  }
  /** @return GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public function getTaxonomies()
  {
    return $this->taxonomies;
  }
}

class GoogleCloudDatacatalogV1FieldType extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1FieldTypeEnumType */
  public $enumType;
  /** @var string */
  public $primitiveType;
  protected $enumTypeType = GoogleCloudDatacatalogV1FieldTypeEnumType::class;
  protected $enumTypeDataType = '';
  /** @param GoogleCloudDatacatalogV1FieldTypeEnumType */
  public function setEnumType(GoogleCloudDatacatalogV1FieldTypeEnumType $enumType)
  {
    $this->enumType = $enumType;
  }
  /** @return GoogleCloudDatacatalogV1FieldTypeEnumType */
  public function getEnumType()
  {
    return $this->enumType;
  }
  /** @param string */
  public function setPrimitiveType($primitiveType)
  {
    $this->primitiveType = $primitiveType;
  }
  /** @return string */
  public function getPrimitiveType()
  {
    return $this->primitiveType;
  }
}

class GoogleCloudDatacatalogV1FieldTypeEnumType extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue[] */
  public $allowedValues;
  protected $collection_key = 'allowedValues';
  protected $allowedValuesType = GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue::class;
  protected $allowedValuesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
}

class GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue extends \Google\Model
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

class GoogleCloudDatacatalogV1FilesetSpec extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1DataplexFilesetSpec */
  public $dataplexFileset;
  protected $dataplexFilesetType = GoogleCloudDatacatalogV1DataplexFilesetSpec::class;
  protected $dataplexFilesetDataType = '';
  /** @param GoogleCloudDatacatalogV1DataplexFilesetSpec */
  public function setDataplexFileset(GoogleCloudDatacatalogV1DataplexFilesetSpec $dataplexFileset)
  {
    $this->dataplexFileset = $dataplexFileset;
  }
  /** @return GoogleCloudDatacatalogV1DataplexFilesetSpec */
  public function getDataplexFileset()
  {
    return $this->dataplexFileset;
  }
}

class GoogleCloudDatacatalogV1GcsFileSpec extends \Google\Model
{
  /** @var string */
  public $filePath;
  /** @var GoogleCloudDatacatalogV1SystemTimestamps */
  public $gcsTimestamps;
  /** @var string */
  public $sizeBytes;
  protected $gcsTimestampsType = GoogleCloudDatacatalogV1SystemTimestamps::class;
  protected $gcsTimestampsDataType = '';
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
  /** @param GoogleCloudDatacatalogV1SystemTimestamps */
  public function setGcsTimestamps(GoogleCloudDatacatalogV1SystemTimestamps $gcsTimestamps)
  {
    $this->gcsTimestamps = $gcsTimestamps;
  }
  /** @return GoogleCloudDatacatalogV1SystemTimestamps */
  public function getGcsTimestamps()
  {
    return $this->gcsTimestamps;
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

class GoogleCloudDatacatalogV1GcsFilesetSpec extends \Google\Collection
{
  /** @var string[] */
  public $filePatterns;
  /** @var GoogleCloudDatacatalogV1GcsFileSpec[] */
  public $sampleGcsFileSpecs;
  protected $collection_key = 'sampleGcsFileSpecs';
  protected $sampleGcsFileSpecsType = GoogleCloudDatacatalogV1GcsFileSpec::class;
  protected $sampleGcsFileSpecsDataType = 'array';
  /** @param string[] */
  public function setFilePatterns($filePatterns)
  {
    $this->filePatterns = $filePatterns;
  }
  /** @return string[] */
  public function getFilePatterns()
  {
    return $this->filePatterns;
  }
  /** @param GoogleCloudDatacatalogV1GcsFileSpec[] */
  public function setSampleGcsFileSpecs($sampleGcsFileSpecs)
  {
    $this->sampleGcsFileSpecs = $sampleGcsFileSpecs;
  }
  /** @return GoogleCloudDatacatalogV1GcsFileSpec[] */
  public function getSampleGcsFileSpecs()
  {
    return $this->sampleGcsFileSpecs;
  }
}

class GoogleCloudDatacatalogV1ImportTaxonomiesRequest extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1CrossRegionalSource */
  public $crossRegionalSource;
  /** @var GoogleCloudDatacatalogV1InlineSource */
  public $inlineSource;
  protected $crossRegionalSourceType = GoogleCloudDatacatalogV1CrossRegionalSource::class;
  protected $crossRegionalSourceDataType = '';
  protected $inlineSourceType = GoogleCloudDatacatalogV1InlineSource::class;
  protected $inlineSourceDataType = '';
  /** @param GoogleCloudDatacatalogV1CrossRegionalSource */
  public function setCrossRegionalSource(GoogleCloudDatacatalogV1CrossRegionalSource $crossRegionalSource)
  {
    $this->crossRegionalSource = $crossRegionalSource;
  }
  /** @return GoogleCloudDatacatalogV1CrossRegionalSource */
  public function getCrossRegionalSource()
  {
    return $this->crossRegionalSource;
  }
  /** @param GoogleCloudDatacatalogV1InlineSource */
  public function setInlineSource(GoogleCloudDatacatalogV1InlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /** @return GoogleCloudDatacatalogV1InlineSource */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
}

class GoogleCloudDatacatalogV1ImportTaxonomiesResponse extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1Taxonomy[] */
  public $taxonomies;
  protected $collection_key = 'taxonomies';
  protected $taxonomiesType = GoogleCloudDatacatalogV1Taxonomy::class;
  protected $taxonomiesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1Taxonomy[] */
  public function setTaxonomies($taxonomies)
  {
    $this->taxonomies = $taxonomies;
  }
  /** @return GoogleCloudDatacatalogV1Taxonomy[] */
  public function getTaxonomies()
  {
    return $this->taxonomies;
  }
}

class GoogleCloudDatacatalogV1InlineSource extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public $taxonomies;
  protected $collection_key = 'taxonomies';
  protected $taxonomiesType = GoogleCloudDatacatalogV1SerializedTaxonomy::class;
  protected $taxonomiesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public function setTaxonomies($taxonomies)
  {
    $this->taxonomies = $taxonomies;
  }
  /** @return GoogleCloudDatacatalogV1SerializedTaxonomy[] */
  public function getTaxonomies()
  {
    return $this->taxonomies;
  }
}

class GoogleCloudDatacatalogV1ListEntriesResponse extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1Entry[] */
  public $entries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entries';
  protected $entriesType = GoogleCloudDatacatalogV1Entry::class;
  protected $entriesDataType = 'array';
  /** @param GoogleCloudDatacatalogV1Entry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return GoogleCloudDatacatalogV1Entry[] */
  public function getEntries()
  {
    return $this->entries;
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

class GoogleCloudDatacatalogV1ListEntryGroupsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1EntryGroup[] */
  public $entryGroups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entryGroups';
  protected $entryGroupsType = GoogleCloudDatacatalogV1EntryGroup::class;
  protected $entryGroupsDataType = 'array';
  /** @param GoogleCloudDatacatalogV1EntryGroup[] */
  public function setEntryGroups($entryGroups)
  {
    $this->entryGroups = $entryGroups;
  }
  /** @return GoogleCloudDatacatalogV1EntryGroup[] */
  public function getEntryGroups()
  {
    return $this->entryGroups;
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

class GoogleCloudDatacatalogV1ListPolicyTagsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDatacatalogV1PolicyTag[] */
  public $policyTags;
  protected $collection_key = 'policyTags';
  protected $policyTagsType = GoogleCloudDatacatalogV1PolicyTag::class;
  protected $policyTagsDataType = 'array';
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
  /** @param GoogleCloudDatacatalogV1PolicyTag[] */
  public function setPolicyTags($policyTags)
  {
    $this->policyTags = $policyTags;
  }
  /** @return GoogleCloudDatacatalogV1PolicyTag[] */
  public function getPolicyTags()
  {
    return $this->policyTags;
  }
}

class GoogleCloudDatacatalogV1ListTagsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDatacatalogV1Tag[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $tagsType = GoogleCloudDatacatalogV1Tag::class;
  protected $tagsDataType = 'array';
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
  /** @param GoogleCloudDatacatalogV1Tag[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return GoogleCloudDatacatalogV1Tag[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class GoogleCloudDatacatalogV1ListTaxonomiesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDatacatalogV1Taxonomy[] */
  public $taxonomies;
  protected $collection_key = 'taxonomies';
  protected $taxonomiesType = GoogleCloudDatacatalogV1Taxonomy::class;
  protected $taxonomiesDataType = 'array';
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
  /** @param GoogleCloudDatacatalogV1Taxonomy[] */
  public function setTaxonomies($taxonomies)
  {
    $this->taxonomies = $taxonomies;
  }
  /** @return GoogleCloudDatacatalogV1Taxonomy[] */
  public function getTaxonomies()
  {
    return $this->taxonomies;
  }
}

class GoogleCloudDatacatalogV1ModifyEntryContactsRequest extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1Contacts */
  public $contacts;
  protected $contactsType = GoogleCloudDatacatalogV1Contacts::class;
  protected $contactsDataType = '';
  /** @param GoogleCloudDatacatalogV1Contacts */
  public function setContacts(GoogleCloudDatacatalogV1Contacts $contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return GoogleCloudDatacatalogV1Contacts */
  public function getContacts()
  {
    return $this->contacts;
  }
}

class GoogleCloudDatacatalogV1ModifyEntryOverviewRequest extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1EntryOverview */
  public $entryOverview;
  protected $entryOverviewType = GoogleCloudDatacatalogV1EntryOverview::class;
  protected $entryOverviewDataType = '';
  /** @param GoogleCloudDatacatalogV1EntryOverview */
  public function setEntryOverview(GoogleCloudDatacatalogV1EntryOverview $entryOverview)
  {
    $this->entryOverview = $entryOverview;
  }
  /** @return GoogleCloudDatacatalogV1EntryOverview */
  public function getEntryOverview()
  {
    return $this->entryOverview;
  }
}

class GoogleCloudDatacatalogV1PersonalDetails extends \Google\Model
{
  /** @var string */
  public $starTime;
  /** @var bool */
  public $starred;

  /** @param string */
  public function setStarTime($starTime)
  {
    $this->starTime = $starTime;
  }
  /** @return string */
  public function getStarTime()
  {
    return $this->starTime;
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
}

class GoogleCloudDatacatalogV1PhysicalSchema extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema */
  public $avro;
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema */
  public $csv;
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema */
  public $orc;
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema */
  public $parquet;
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema */
  public $protobuf;
  /** @var GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema */
  public $thrift;
  protected $avroType = GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema::class;
  protected $avroDataType = '';
  protected $csvType = GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema::class;
  protected $csvDataType = '';
  protected $orcType = GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema::class;
  protected $orcDataType = '';
  protected $parquetType = GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema::class;
  protected $parquetDataType = '';
  protected $protobufType = GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema::class;
  protected $protobufDataType = '';
  protected $thriftType = GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema::class;
  protected $thriftDataType = '';
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema */
  public function setAvro(GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema $avro)
  {
    $this->avro = $avro;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema */
  public function getAvro()
  {
    return $this->avro;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema */
  public function setCsv(GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema $csv)
  {
    $this->csv = $csv;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema */
  public function getCsv()
  {
    return $this->csv;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema */
  public function setOrc(GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema $orc)
  {
    $this->orc = $orc;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema */
  public function getOrc()
  {
    return $this->orc;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema */
  public function setParquet(GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema $parquet)
  {
    $this->parquet = $parquet;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema */
  public function getParquet()
  {
    return $this->parquet;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema */
  public function setProtobuf(GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema $protobuf)
  {
    $this->protobuf = $protobuf;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema */
  public function getProtobuf()
  {
    return $this->protobuf;
  }
  /** @param GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema */
  public function setThrift(GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema $thrift)
  {
    $this->thrift = $thrift;
  }
  /** @return GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema */
  public function getThrift()
  {
    return $this->thrift;
  }
}

class GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema extends \Google\Model
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

class GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema extends \Google\Model
{
}

class GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema extends \Google\Model
{
}

class GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema extends \Google\Model
{
}

class GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema extends \Google\Model
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

class GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema extends \Google\Model
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

class GoogleCloudDatacatalogV1PolicyTag extends \Google\Collection
{
  /** @var string[] */
  public $childPolicyTags;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $parentPolicyTag;
  protected $collection_key = 'childPolicyTags';
  /** @param string[] */
  public function setChildPolicyTags($childPolicyTags)
  {
    $this->childPolicyTags = $childPolicyTags;
  }
  /** @return string[] */
  public function getChildPolicyTags()
  {
    return $this->childPolicyTags;
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
  public function setParentPolicyTag($parentPolicyTag)
  {
    $this->parentPolicyTag = $parentPolicyTag;
  }
  /** @return string */
  public function getParentPolicyTag()
  {
    return $this->parentPolicyTag;
  }
}

class GoogleCloudDatacatalogV1RenameTagTemplateFieldEnumValueRequest extends \Google\Model
{
  /** @var string */
  public $newEnumValueDisplayName;

  /** @param string */
  public function setNewEnumValueDisplayName($newEnumValueDisplayName)
  {
    $this->newEnumValueDisplayName = $newEnumValueDisplayName;
  }
  /** @return string */
  public function getNewEnumValueDisplayName()
  {
    return $this->newEnumValueDisplayName;
  }
}

class GoogleCloudDatacatalogV1RenameTagTemplateFieldRequest extends \Google\Model
{
  /** @var string */
  public $newTagTemplateFieldId;

  /** @param string */
  public function setNewTagTemplateFieldId($newTagTemplateFieldId)
  {
    $this->newTagTemplateFieldId = $newTagTemplateFieldId;
  }
  /** @return string */
  public function getNewTagTemplateFieldId()
  {
    return $this->newTagTemplateFieldId;
  }
}

class GoogleCloudDatacatalogV1ReplaceTaxonomyRequest extends \Google\Model
{
  /** @var GoogleCloudDatacatalogV1SerializedTaxonomy */
  public $serializedTaxonomy;
  protected $serializedTaxonomyType = GoogleCloudDatacatalogV1SerializedTaxonomy::class;
  protected $serializedTaxonomyDataType = '';
  /** @param GoogleCloudDatacatalogV1SerializedTaxonomy */
  public function setSerializedTaxonomy(GoogleCloudDatacatalogV1SerializedTaxonomy $serializedTaxonomy)
  {
    $this->serializedTaxonomy = $serializedTaxonomy;
  }
  /** @return GoogleCloudDatacatalogV1SerializedTaxonomy */
  public function getSerializedTaxonomy()
  {
    return $this->serializedTaxonomy;
  }
}

class GoogleCloudDatacatalogV1RoutineSpec extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1BigQueryRoutineSpec */
  public $bigqueryRoutineSpec;
  /** @var string */
  public $definitionBody;
  /** @var string */
  public $language;
  /** @var string */
  public $returnType;
  /** @var GoogleCloudDatacatalogV1RoutineSpecArgument[] */
  public $routineArguments;
  /** @var string */
  public $routineType;
  protected $collection_key = 'routineArguments';
  protected $bigqueryRoutineSpecType = GoogleCloudDatacatalogV1BigQueryRoutineSpec::class;
  protected $bigqueryRoutineSpecDataType = '';
  protected $routineArgumentsType = GoogleCloudDatacatalogV1RoutineSpecArgument::class;
  protected $routineArgumentsDataType = 'array';
  /** @param GoogleCloudDatacatalogV1BigQueryRoutineSpec */
  public function setBigqueryRoutineSpec(GoogleCloudDatacatalogV1BigQueryRoutineSpec $bigqueryRoutineSpec)
  {
    $this->bigqueryRoutineSpec = $bigqueryRoutineSpec;
  }
  /** @return GoogleCloudDatacatalogV1BigQueryRoutineSpec */
  public function getBigqueryRoutineSpec()
  {
    return $this->bigqueryRoutineSpec;
  }
  /** @param string */
  public function setDefinitionBody($definitionBody)
  {
    $this->definitionBody = $definitionBody;
  }
  /** @return string */
  public function getDefinitionBody()
  {
    return $this->definitionBody;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setReturnType($returnType)
  {
    $this->returnType = $returnType;
  }
  /** @return string */
  public function getReturnType()
  {
    return $this->returnType;
  }
  /** @param GoogleCloudDatacatalogV1RoutineSpecArgument[] */
  public function setRoutineArguments($routineArguments)
  {
    $this->routineArguments = $routineArguments;
  }
  /** @return GoogleCloudDatacatalogV1RoutineSpecArgument[] */
  public function getRoutineArguments()
  {
    return $this->routineArguments;
  }
  /** @param string */
  public function setRoutineType($routineType)
  {
    $this->routineType = $routineType;
  }
  /** @return string */
  public function getRoutineType()
  {
    return $this->routineType;
  }
}

class GoogleCloudDatacatalogV1RoutineSpecArgument extends \Google\Model
{
  /** @var string */
  public $mode;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class GoogleCloudDatacatalogV1Schema extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1ColumnSchema[] */
  public $columns;
  protected $collection_key = 'columns';
  protected $columnsType = GoogleCloudDatacatalogV1ColumnSchema::class;
  protected $columnsDataType = 'array';
  /** @param GoogleCloudDatacatalogV1ColumnSchema[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return GoogleCloudDatacatalogV1ColumnSchema[] */
  public function getColumns()
  {
    return $this->columns;
  }
}

class GoogleCloudDatacatalogV1SearchCatalogRequest extends \Google\Model
{
  /** @var string */
  public $orderBy;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $query;
  /** @var GoogleCloudDatacatalogV1SearchCatalogRequestScope */
  public $scope;
  protected $scopeType = GoogleCloudDatacatalogV1SearchCatalogRequestScope::class;
  protected $scopeDataType = '';
  /** @param string */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return string */
  public function getOrderBy()
  {
    return $this->orderBy;
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
  /** @param GoogleCloudDatacatalogV1SearchCatalogRequestScope */
  public function setScope(GoogleCloudDatacatalogV1SearchCatalogRequestScope $scope)
  {
    $this->scope = $scope;
  }
  /** @return GoogleCloudDatacatalogV1SearchCatalogRequestScope */
  public function getScope()
  {
    return $this->scope;
  }
}

class GoogleCloudDatacatalogV1SearchCatalogRequestScope extends \Google\Collection
{
  /** @var bool */
  public $includeGcpPublicDatasets;
  /** @var string[] */
  public $includeOrgIds;
  /** @var string[] */
  public $includeProjectIds;
  /** @var bool */
  public $includePublicTagTemplates;
  /** @var string[] */
  public $restrictedLocations;
  /** @var bool */
  public $starredOnly;
  protected $collection_key = 'restrictedLocations';
  /** @param bool */
  public function setIncludeGcpPublicDatasets($includeGcpPublicDatasets)
  {
    $this->includeGcpPublicDatasets = $includeGcpPublicDatasets;
  }
  /** @return bool */
  public function getIncludeGcpPublicDatasets()
  {
    return $this->includeGcpPublicDatasets;
  }
  /** @param string[] */
  public function setIncludeOrgIds($includeOrgIds)
  {
    $this->includeOrgIds = $includeOrgIds;
  }
  /** @return string[] */
  public function getIncludeOrgIds()
  {
    return $this->includeOrgIds;
  }
  /** @param string[] */
  public function setIncludeProjectIds($includeProjectIds)
  {
    $this->includeProjectIds = $includeProjectIds;
  }
  /** @return string[] */
  public function getIncludeProjectIds()
  {
    return $this->includeProjectIds;
  }
  /** @param bool */
  public function setIncludePublicTagTemplates($includePublicTagTemplates)
  {
    $this->includePublicTagTemplates = $includePublicTagTemplates;
  }
  /** @return bool */
  public function getIncludePublicTagTemplates()
  {
    return $this->includePublicTagTemplates;
  }
  /** @param string[] */
  public function setRestrictedLocations($restrictedLocations)
  {
    $this->restrictedLocations = $restrictedLocations;
  }
  /** @return string[] */
  public function getRestrictedLocations()
  {
    return $this->restrictedLocations;
  }
  /** @param bool */
  public function setStarredOnly($starredOnly)
  {
    $this->starredOnly = $starredOnly;
  }
  /** @return bool */
  public function getStarredOnly()
  {
    return $this->starredOnly;
  }
}

class GoogleCloudDatacatalogV1SearchCatalogResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDatacatalogV1SearchCatalogResult[] */
  public $results;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $resultsType = GoogleCloudDatacatalogV1SearchCatalogResult::class;
  protected $resultsDataType = 'array';
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
  /** @param GoogleCloudDatacatalogV1SearchCatalogResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudDatacatalogV1SearchCatalogResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class GoogleCloudDatacatalogV1SearchCatalogResult extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $fullyQualifiedName;
  /** @var string */
  public $integratedSystem;
  /** @var string */
  public $linkedResource;
  /** @var string */
  public $modifyTime;
  /** @var string */
  public $relativeResourceName;
  /** @var string */
  public $searchResultSubtype;
  /** @var string */
  public $searchResultType;
  /** @var string */
  public $userSpecifiedSystem;

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
  /** @param string */
  public function setFullyQualifiedName($fullyQualifiedName)
  {
    $this->fullyQualifiedName = $fullyQualifiedName;
  }
  /** @return string */
  public function getFullyQualifiedName()
  {
    return $this->fullyQualifiedName;
  }
  /** @param string */
  public function setIntegratedSystem($integratedSystem)
  {
    $this->integratedSystem = $integratedSystem;
  }
  /** @return string */
  public function getIntegratedSystem()
  {
    return $this->integratedSystem;
  }
  /** @param string */
  public function setLinkedResource($linkedResource)
  {
    $this->linkedResource = $linkedResource;
  }
  /** @return string */
  public function getLinkedResource()
  {
    return $this->linkedResource;
  }
  /** @param string */
  public function setModifyTime($modifyTime)
  {
    $this->modifyTime = $modifyTime;
  }
  /** @return string */
  public function getModifyTime()
  {
    return $this->modifyTime;
  }
  /** @param string */
  public function setRelativeResourceName($relativeResourceName)
  {
    $this->relativeResourceName = $relativeResourceName;
  }
  /** @return string */
  public function getRelativeResourceName()
  {
    return $this->relativeResourceName;
  }
  /** @param string */
  public function setSearchResultSubtype($searchResultSubtype)
  {
    $this->searchResultSubtype = $searchResultSubtype;
  }
  /** @return string */
  public function getSearchResultSubtype()
  {
    return $this->searchResultSubtype;
  }
  /** @param string */
  public function setSearchResultType($searchResultType)
  {
    $this->searchResultType = $searchResultType;
  }
  /** @return string */
  public function getSearchResultType()
  {
    return $this->searchResultType;
  }
  /** @param string */
  public function setUserSpecifiedSystem($userSpecifiedSystem)
  {
    $this->userSpecifiedSystem = $userSpecifiedSystem;
  }
  /** @return string */
  public function getUserSpecifiedSystem()
  {
    return $this->userSpecifiedSystem;
  }
}

class GoogleCloudDatacatalogV1SerializedPolicyTag extends \Google\Collection
{
  /** @var GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public $childPolicyTags;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $policyTag;
  protected $collection_key = 'childPolicyTags';
  protected $childPolicyTagsType = GoogleCloudDatacatalogV1SerializedPolicyTag::class;
  protected $childPolicyTagsDataType = 'array';
  /** @param GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public function setChildPolicyTags($childPolicyTags)
  {
    $this->childPolicyTags = $childPolicyTags;
  }
  /** @return GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public function getChildPolicyTags()
  {
    return $this->childPolicyTags;
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
  /** @param string */
  public function setPolicyTag($policyTag)
  {
    $this->policyTag = $policyTag;
  }
  /** @return string */
  public function getPolicyTag()
  {
    return $this->policyTag;
  }
}

class GoogleCloudDatacatalogV1SerializedTaxonomy extends \Google\Collection
{
  /** @var string[] */
  public $activatedPolicyTypes;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public $policyTags;
  protected $collection_key = 'policyTags';
  protected $policyTagsType = GoogleCloudDatacatalogV1SerializedPolicyTag::class;
  protected $policyTagsDataType = 'array';
  /** @param string[] */
  public function setActivatedPolicyTypes($activatedPolicyTypes)
  {
    $this->activatedPolicyTypes = $activatedPolicyTypes;
  }
  /** @return string[] */
  public function getActivatedPolicyTypes()
  {
    return $this->activatedPolicyTypes;
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
  /** @param GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public function setPolicyTags($policyTags)
  {
    $this->policyTags = $policyTags;
  }
  /** @return GoogleCloudDatacatalogV1SerializedPolicyTag[] */
  public function getPolicyTags()
  {
    return $this->policyTags;
  }
}

class GoogleCloudDatacatalogV1StarEntryRequest extends \Google\Model
{
}

class GoogleCloudDatacatalogV1StarEntryResponse extends \Google\Model
{
}

class GoogleCloudDatacatalogV1StorageProperties extends \Google\Collection
{
  /** @var string[] */
  public $filePattern;
  /** @var string */
  public $fileType;
  protected $collection_key = 'filePattern';
  /** @param string[] */
  public function setFilePattern($filePattern)
  {
    $this->filePattern = $filePattern;
  }
  /** @return string[] */
  public function getFilePattern()
  {
    return $this->filePattern;
  }
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
}

class GoogleCloudDatacatalogV1SystemTimestamps extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $updateTime;

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

class GoogleCloudDatacatalogV1TableSpec extends \Google\Model
{
  /** @var string */
  public $groupedEntry;

  /** @param string */
  public function setGroupedEntry($groupedEntry)
  {
    $this->groupedEntry = $groupedEntry;
  }
  /** @return string */
  public function getGroupedEntry()
  {
    return $this->groupedEntry;
  }
}

class GoogleCloudDatacatalogV1Tag extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var GoogleCloudDatacatalogV1TagField[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string */
  public $template;
  /** @var string */
  public $templateDisplayName;
  protected $fieldsType = GoogleCloudDatacatalogV1TagField::class;
  protected $fieldsDataType = 'map';
  /** @param string */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return string */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param GoogleCloudDatacatalogV1TagField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDatacatalogV1TagField[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setTemplate($template)
  {
    $this->template = $template;
  }
  /** @return string */
  public function getTemplate()
  {
    return $this->template;
  }
  /** @param string */
  public function setTemplateDisplayName($templateDisplayName)
  {
    $this->templateDisplayName = $templateDisplayName;
  }
  /** @return string */
  public function getTemplateDisplayName()
  {
    return $this->templateDisplayName;
  }
}

class GoogleCloudDatacatalogV1TagField extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $displayName;
  public $doubleValue;
  /** @var GoogleCloudDatacatalogV1TagFieldEnumValue */
  public $enumValue;
  /** @var int */
  public $order;
  /** @var string */
  public $richtextValue;
  /** @var string */
  public $stringValue;
  /** @var string */
  public $timestampValue;
  protected $enumValueType = GoogleCloudDatacatalogV1TagFieldEnumValue::class;
  protected $enumValueDataType = '';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
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
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param GoogleCloudDatacatalogV1TagFieldEnumValue */
  public function setEnumValue(GoogleCloudDatacatalogV1TagFieldEnumValue $enumValue)
  {
    $this->enumValue = $enumValue;
  }
  /** @return GoogleCloudDatacatalogV1TagFieldEnumValue */
  public function getEnumValue()
  {
    return $this->enumValue;
  }
  /** @param int */
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return int */
  public function getOrder()
  {
    return $this->order;
  }
  /** @param string */
  public function setRichtextValue($richtextValue)
  {
    $this->richtextValue = $richtextValue;
  }
  /** @return string */
  public function getRichtextValue()
  {
    return $this->richtextValue;
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

class GoogleCloudDatacatalogV1TagFieldEnumValue extends \Google\Model
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

class GoogleCloudDatacatalogV1TagTemplate extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDatacatalogV1TagTemplateField[] */
  public $fields;
  /** @var bool */
  public $isPubliclyReadable;
  /** @var string */
  public $name;
  protected $fieldsType = GoogleCloudDatacatalogV1TagTemplateField::class;
  protected $fieldsDataType = 'map';
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
  /** @param GoogleCloudDatacatalogV1TagTemplateField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDatacatalogV1TagTemplateField[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param bool */
  public function setIsPubliclyReadable($isPubliclyReadable)
  {
    $this->isPubliclyReadable = $isPubliclyReadable;
  }
  /** @return bool */
  public function getIsPubliclyReadable()
  {
    return $this->isPubliclyReadable;
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

class GoogleCloudDatacatalogV1TagTemplateField extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isRequired;
  /** @var string */
  public $name;
  /** @var int */
  public $order;
  /** @var GoogleCloudDatacatalogV1FieldType */
  public $type;
  protected $typeType = GoogleCloudDatacatalogV1FieldType::class;
  protected $typeDataType = '';
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
  public function setIsRequired($isRequired)
  {
    $this->isRequired = $isRequired;
  }
  /** @return bool */
  public function getIsRequired()
  {
    return $this->isRequired;
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
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return int */
  public function getOrder()
  {
    return $this->order;
  }
  /** @param GoogleCloudDatacatalogV1FieldType */
  public function setType(GoogleCloudDatacatalogV1FieldType $type)
  {
    $this->type = $type;
  }
  /** @return GoogleCloudDatacatalogV1FieldType */
  public function getType()
  {
    return $this->type;
  }
}

class GoogleCloudDatacatalogV1Taxonomy extends \Google\Collection
{
  /** @var string[] */
  public $activatedPolicyTypes;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var int */
  public $policyTagCount;
  /** @var GoogleCloudDatacatalogV1SystemTimestamps */
  public $taxonomyTimestamps;
  protected $collection_key = 'activatedPolicyTypes';
  protected $taxonomyTimestampsType = GoogleCloudDatacatalogV1SystemTimestamps::class;
  protected $taxonomyTimestampsDataType = '';
  /** @param string[] */
  public function setActivatedPolicyTypes($activatedPolicyTypes)
  {
    $this->activatedPolicyTypes = $activatedPolicyTypes;
  }
  /** @return string[] */
  public function getActivatedPolicyTypes()
  {
    return $this->activatedPolicyTypes;
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
  public function setPolicyTagCount($policyTagCount)
  {
    $this->policyTagCount = $policyTagCount;
  }
  /** @return int */
  public function getPolicyTagCount()
  {
    return $this->policyTagCount;
  }
  /** @param GoogleCloudDatacatalogV1SystemTimestamps */
  public function setTaxonomyTimestamps(GoogleCloudDatacatalogV1SystemTimestamps $taxonomyTimestamps)
  {
    $this->taxonomyTimestamps = $taxonomyTimestamps;
  }
  /** @return GoogleCloudDatacatalogV1SystemTimestamps */
  public function getTaxonomyTimestamps()
  {
    return $this->taxonomyTimestamps;
  }
}

class GoogleCloudDatacatalogV1UnstarEntryRequest extends \Google\Model
{
}

class GoogleCloudDatacatalogV1UnstarEntryResponse extends \Google\Model
{
}

class GoogleCloudDatacatalogV1UsageSignal extends \Google\Model
{
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudDatacatalogV1UsageStats[] */
  public $usageWithinTimeRange;
  protected $usageWithinTimeRangeType = GoogleCloudDatacatalogV1UsageStats::class;
  protected $usageWithinTimeRangeDataType = 'map';
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
  /** @param GoogleCloudDatacatalogV1UsageStats[] */
  public function setUsageWithinTimeRange($usageWithinTimeRange)
  {
    $this->usageWithinTimeRange = $usageWithinTimeRange;
  }
  /** @return GoogleCloudDatacatalogV1UsageStats[] */
  public function getUsageWithinTimeRange()
  {
    return $this->usageWithinTimeRange;
  }
}

class GoogleCloudDatacatalogV1UsageStats extends \Google\Model
{
  /** @var float */
  public $totalCancellations;
  /** @var float */
  public $totalCompletions;
  /** @var float */
  public $totalExecutionTimeForCompletionsMillis;
  /** @var float */
  public $totalFailures;

  /** @param float */
  public function setTotalCancellations($totalCancellations)
  {
    $this->totalCancellations = $totalCancellations;
  }
  /** @return float */
  public function getTotalCancellations()
  {
    return $this->totalCancellations;
  }
  /** @param float */
  public function setTotalCompletions($totalCompletions)
  {
    $this->totalCompletions = $totalCompletions;
  }
  /** @return float */
  public function getTotalCompletions()
  {
    return $this->totalCompletions;
  }
  /** @param float */
  public function setTotalExecutionTimeForCompletionsMillis($totalExecutionTimeForCompletionsMillis)
  {
    $this->totalExecutionTimeForCompletionsMillis = $totalExecutionTimeForCompletionsMillis;
  }
  /** @return float */
  public function getTotalExecutionTimeForCompletionsMillis()
  {
    return $this->totalExecutionTimeForCompletionsMillis;
  }
  /** @param float */
  public function setTotalFailures($totalFailures)
  {
    $this->totalFailures = $totalFailures;
  }
  /** @return float */
  public function getTotalFailures()
  {
    return $this->totalFailures;
  }
}

class GoogleCloudDatacatalogV1ViewSpec extends \Google\Model
{
  /** @var string */
  public $viewQuery;

  /** @param string */
  public function setViewQuery($viewQuery)
  {
    $this->viewQuery = $viewQuery;
  }
  /** @return string */
  public function getViewQuery()
  {
    return $this->viewQuery;
  }
}

class Policy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Binding::class, 'Google_Service_DataCatalog_Binding');
class_alias(DatacatalogEmpty::class, 'Google_Service_DataCatalog_DatacatalogEmpty');
class_alias(Expr::class, 'Google_Service_DataCatalog_Expr');
class_alias(GetIamPolicyRequest::class, 'Google_Service_DataCatalog_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_DataCatalog_GetPolicyOptions');
class_alias(GoogleCloudDatacatalogV1BigQueryConnectionSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1BigQueryConnectionSpec');
class_alias(GoogleCloudDatacatalogV1BigQueryDateShardedSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1BigQueryDateShardedSpec');
class_alias(GoogleCloudDatacatalogV1BigQueryRoutineSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1BigQueryRoutineSpec');
class_alias(GoogleCloudDatacatalogV1BigQueryTableSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1BigQueryTableSpec');
class_alias(GoogleCloudDatacatalogV1BusinessContext::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1BusinessContext');
class_alias(GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1CloudSqlBigQueryConnectionSpec');
class_alias(GoogleCloudDatacatalogV1ColumnSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ColumnSchema');
class_alias(GoogleCloudDatacatalogV1Contacts::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1Contacts');
class_alias(GoogleCloudDatacatalogV1ContactsPerson::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ContactsPerson');
class_alias(GoogleCloudDatacatalogV1CrossRegionalSource::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1CrossRegionalSource');
class_alias(GoogleCloudDatacatalogV1DataSource::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataSource');
class_alias(GoogleCloudDatacatalogV1DataSourceConnectionSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataSourceConnectionSpec');
class_alias(GoogleCloudDatacatalogV1DatabaseTableSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DatabaseTableSpec');
class_alias(GoogleCloudDatacatalogV1DataplexExternalTable::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataplexExternalTable');
class_alias(GoogleCloudDatacatalogV1DataplexFilesetSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataplexFilesetSpec');
class_alias(GoogleCloudDatacatalogV1DataplexSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataplexSpec');
class_alias(GoogleCloudDatacatalogV1DataplexTableSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataplexTableSpec');
class_alias(GoogleCloudDatacatalogV1Entry::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1Entry');
class_alias(GoogleCloudDatacatalogV1EntryGroup::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1EntryGroup');
class_alias(GoogleCloudDatacatalogV1EntryOverview::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1EntryOverview');
class_alias(GoogleCloudDatacatalogV1ExportTaxonomiesResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ExportTaxonomiesResponse');
class_alias(GoogleCloudDatacatalogV1FieldType::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1FieldType');
class_alias(GoogleCloudDatacatalogV1FieldTypeEnumType::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1FieldTypeEnumType');
class_alias(GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1FieldTypeEnumTypeEnumValue');
class_alias(GoogleCloudDatacatalogV1FilesetSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1FilesetSpec');
class_alias(GoogleCloudDatacatalogV1GcsFileSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1GcsFileSpec');
class_alias(GoogleCloudDatacatalogV1GcsFilesetSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1GcsFilesetSpec');
class_alias(GoogleCloudDatacatalogV1ImportTaxonomiesRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ImportTaxonomiesRequest');
class_alias(GoogleCloudDatacatalogV1ImportTaxonomiesResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ImportTaxonomiesResponse');
class_alias(GoogleCloudDatacatalogV1InlineSource::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1InlineSource');
class_alias(GoogleCloudDatacatalogV1ListEntriesResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ListEntriesResponse');
class_alias(GoogleCloudDatacatalogV1ListEntryGroupsResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ListEntryGroupsResponse');
class_alias(GoogleCloudDatacatalogV1ListPolicyTagsResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ListPolicyTagsResponse');
class_alias(GoogleCloudDatacatalogV1ListTagsResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ListTagsResponse');
class_alias(GoogleCloudDatacatalogV1ListTaxonomiesResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ListTaxonomiesResponse');
class_alias(GoogleCloudDatacatalogV1ModifyEntryContactsRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ModifyEntryContactsRequest');
class_alias(GoogleCloudDatacatalogV1ModifyEntryOverviewRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ModifyEntryOverviewRequest');
class_alias(GoogleCloudDatacatalogV1PersonalDetails::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PersonalDetails');
class_alias(GoogleCloudDatacatalogV1PhysicalSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaAvroSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaCsvSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaOrcSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaParquetSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaProtobufSchema');
class_alias(GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PhysicalSchemaThriftSchema');
class_alias(GoogleCloudDatacatalogV1PolicyTag::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1PolicyTag');
class_alias(GoogleCloudDatacatalogV1RenameTagTemplateFieldEnumValueRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1RenameTagTemplateFieldEnumValueRequest');
class_alias(GoogleCloudDatacatalogV1RenameTagTemplateFieldRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1RenameTagTemplateFieldRequest');
class_alias(GoogleCloudDatacatalogV1ReplaceTaxonomyRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ReplaceTaxonomyRequest');
class_alias(GoogleCloudDatacatalogV1RoutineSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1RoutineSpec');
class_alias(GoogleCloudDatacatalogV1RoutineSpecArgument::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1RoutineSpecArgument');
class_alias(GoogleCloudDatacatalogV1Schema::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1Schema');
class_alias(GoogleCloudDatacatalogV1SearchCatalogRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SearchCatalogRequest');
class_alias(GoogleCloudDatacatalogV1SearchCatalogRequestScope::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SearchCatalogRequestScope');
class_alias(GoogleCloudDatacatalogV1SearchCatalogResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SearchCatalogResponse');
class_alias(GoogleCloudDatacatalogV1SearchCatalogResult::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SearchCatalogResult');
class_alias(GoogleCloudDatacatalogV1SerializedPolicyTag::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SerializedPolicyTag');
class_alias(GoogleCloudDatacatalogV1SerializedTaxonomy::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SerializedTaxonomy');
class_alias(GoogleCloudDatacatalogV1StarEntryRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1StarEntryRequest');
class_alias(GoogleCloudDatacatalogV1StarEntryResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1StarEntryResponse');
class_alias(GoogleCloudDatacatalogV1StorageProperties::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1StorageProperties');
class_alias(GoogleCloudDatacatalogV1SystemTimestamps::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1SystemTimestamps');
class_alias(GoogleCloudDatacatalogV1TableSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1TableSpec');
class_alias(GoogleCloudDatacatalogV1Tag::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1Tag');
class_alias(GoogleCloudDatacatalogV1TagField::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1TagField');
class_alias(GoogleCloudDatacatalogV1TagFieldEnumValue::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1TagFieldEnumValue');
class_alias(GoogleCloudDatacatalogV1TagTemplate::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1TagTemplate');
class_alias(GoogleCloudDatacatalogV1TagTemplateField::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1TagTemplateField');
class_alias(GoogleCloudDatacatalogV1Taxonomy::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1Taxonomy');
class_alias(GoogleCloudDatacatalogV1UnstarEntryRequest::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1UnstarEntryRequest');
class_alias(GoogleCloudDatacatalogV1UnstarEntryResponse::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1UnstarEntryResponse');
class_alias(GoogleCloudDatacatalogV1UsageSignal::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1UsageSignal');
class_alias(GoogleCloudDatacatalogV1UsageStats::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1UsageStats');
class_alias(GoogleCloudDatacatalogV1ViewSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1ViewSpec');
class_alias(Policy::class, 'Google_Service_DataCatalog_Policy');
class_alias(SetIamPolicyRequest::class, 'Google_Service_DataCatalog_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_DataCatalog_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_DataCatalog_TestIamPermissionsResponse');
