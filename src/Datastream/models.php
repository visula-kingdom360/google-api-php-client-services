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

namespace Google\Service\Datastream;

class AvroFileFormat extends \Google\Model
{
}

class BackfillAllStrategy extends \Google\Model
{
  /** @var MysqlRdbms */
  public $mysqlExcludedObjects;
  /** @var OracleRdbms */
  public $oracleExcludedObjects;
  /** @var PostgresqlRdbms */
  public $postgresqlExcludedObjects;
  protected $mysqlExcludedObjectsType = MysqlRdbms::class;
  protected $mysqlExcludedObjectsDataType = '';
  protected $oracleExcludedObjectsType = OracleRdbms::class;
  protected $oracleExcludedObjectsDataType = '';
  protected $postgresqlExcludedObjectsType = PostgresqlRdbms::class;
  protected $postgresqlExcludedObjectsDataType = '';
  /** @param MysqlRdbms */
  public function setMysqlExcludedObjects(MysqlRdbms $mysqlExcludedObjects)
  {
    $this->mysqlExcludedObjects = $mysqlExcludedObjects;
  }
  /** @return MysqlRdbms */
  public function getMysqlExcludedObjects()
  {
    return $this->mysqlExcludedObjects;
  }
  /** @param OracleRdbms */
  public function setOracleExcludedObjects(OracleRdbms $oracleExcludedObjects)
  {
    $this->oracleExcludedObjects = $oracleExcludedObjects;
  }
  /** @return OracleRdbms */
  public function getOracleExcludedObjects()
  {
    return $this->oracleExcludedObjects;
  }
  /** @param PostgresqlRdbms */
  public function setPostgresqlExcludedObjects(PostgresqlRdbms $postgresqlExcludedObjects)
  {
    $this->postgresqlExcludedObjects = $postgresqlExcludedObjects;
  }
  /** @return PostgresqlRdbms */
  public function getPostgresqlExcludedObjects()
  {
    return $this->postgresqlExcludedObjects;
  }
}

class BackfillJob extends \Google\Collection
{
  /** @var Error[] */
  public $errors;
  /** @var string */
  public $lastEndTime;
  /** @var string */
  public $lastStartTime;
  /** @var string */
  public $state;
  /** @var string */
  public $trigger;
  protected $collection_key = 'errors';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setLastEndTime($lastEndTime)
  {
    $this->lastEndTime = $lastEndTime;
  }
  /** @return string */
  public function getLastEndTime()
  {
    return $this->lastEndTime;
  }
  /** @param string */
  public function setLastStartTime($lastStartTime)
  {
    $this->lastStartTime = $lastStartTime;
  }
  /** @return string */
  public function getLastStartTime()
  {
    return $this->lastStartTime;
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
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return string */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

class BackfillNoneStrategy extends \Google\Model
{
}

class BigQueryDestinationConfig extends \Google\Model
{
  /** @var string */
  public $dataFreshness;
  /** @var SingleTargetDataset */
  public $singleTargetDataset;
  /** @var SourceHierarchyDatasets */
  public $sourceHierarchyDatasets;
  protected $singleTargetDatasetType = SingleTargetDataset::class;
  protected $singleTargetDatasetDataType = '';
  protected $sourceHierarchyDatasetsType = SourceHierarchyDatasets::class;
  protected $sourceHierarchyDatasetsDataType = '';
  /** @param string */
  public function setDataFreshness($dataFreshness)
  {
    $this->dataFreshness = $dataFreshness;
  }
  /** @return string */
  public function getDataFreshness()
  {
    return $this->dataFreshness;
  }
  /** @param SingleTargetDataset */
  public function setSingleTargetDataset(SingleTargetDataset $singleTargetDataset)
  {
    $this->singleTargetDataset = $singleTargetDataset;
  }
  /** @return SingleTargetDataset */
  public function getSingleTargetDataset()
  {
    return $this->singleTargetDataset;
  }
  /** @param SourceHierarchyDatasets */
  public function setSourceHierarchyDatasets(SourceHierarchyDatasets $sourceHierarchyDatasets)
  {
    $this->sourceHierarchyDatasets = $sourceHierarchyDatasets;
  }
  /** @return SourceHierarchyDatasets */
  public function getSourceHierarchyDatasets()
  {
    return $this->sourceHierarchyDatasets;
  }
}

class BigQueryProfile extends \Google\Model
{
}

class CancelOperationRequest extends \Google\Model
{
}

class ConnectionProfile extends \Google\Model
{
  /** @var BigQueryProfile */
  public $bigqueryProfile;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var ForwardSshTunnelConnectivity */
  public $forwardSshConnectivity;
  /** @var GcsProfile */
  public $gcsProfile;
  /** @var string[] */
  public $labels;
  /** @var MysqlProfile */
  public $mysqlProfile;
  /** @var string */
  public $name;
  /** @var OracleProfile */
  public $oracleProfile;
  /** @var PostgresqlProfile */
  public $postgresqlProfile;
  /** @var PrivateConnectivity */
  public $privateConnectivity;
  /** @var StaticServiceIpConnectivity */
  public $staticServiceIpConnectivity;
  /** @var string */
  public $updateTime;
  protected $bigqueryProfileType = BigQueryProfile::class;
  protected $bigqueryProfileDataType = '';
  protected $forwardSshConnectivityType = ForwardSshTunnelConnectivity::class;
  protected $forwardSshConnectivityDataType = '';
  protected $gcsProfileType = GcsProfile::class;
  protected $gcsProfileDataType = '';
  protected $mysqlProfileType = MysqlProfile::class;
  protected $mysqlProfileDataType = '';
  protected $oracleProfileType = OracleProfile::class;
  protected $oracleProfileDataType = '';
  protected $postgresqlProfileType = PostgresqlProfile::class;
  protected $postgresqlProfileDataType = '';
  protected $privateConnectivityType = PrivateConnectivity::class;
  protected $privateConnectivityDataType = '';
  protected $staticServiceIpConnectivityType = StaticServiceIpConnectivity::class;
  protected $staticServiceIpConnectivityDataType = '';
  /** @param BigQueryProfile */
  public function setBigqueryProfile(BigQueryProfile $bigqueryProfile)
  {
    $this->bigqueryProfile = $bigqueryProfile;
  }
  /** @return BigQueryProfile */
  public function getBigqueryProfile()
  {
    return $this->bigqueryProfile;
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
  /** @param ForwardSshTunnelConnectivity */
  public function setForwardSshConnectivity(ForwardSshTunnelConnectivity $forwardSshConnectivity)
  {
    $this->forwardSshConnectivity = $forwardSshConnectivity;
  }
  /** @return ForwardSshTunnelConnectivity */
  public function getForwardSshConnectivity()
  {
    return $this->forwardSshConnectivity;
  }
  /** @param GcsProfile */
  public function setGcsProfile(GcsProfile $gcsProfile)
  {
    $this->gcsProfile = $gcsProfile;
  }
  /** @return GcsProfile */
  public function getGcsProfile()
  {
    return $this->gcsProfile;
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
  /** @param MysqlProfile */
  public function setMysqlProfile(MysqlProfile $mysqlProfile)
  {
    $this->mysqlProfile = $mysqlProfile;
  }
  /** @return MysqlProfile */
  public function getMysqlProfile()
  {
    return $this->mysqlProfile;
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
  /** @param OracleProfile */
  public function setOracleProfile(OracleProfile $oracleProfile)
  {
    $this->oracleProfile = $oracleProfile;
  }
  /** @return OracleProfile */
  public function getOracleProfile()
  {
    return $this->oracleProfile;
  }
  /** @param PostgresqlProfile */
  public function setPostgresqlProfile(PostgresqlProfile $postgresqlProfile)
  {
    $this->postgresqlProfile = $postgresqlProfile;
  }
  /** @return PostgresqlProfile */
  public function getPostgresqlProfile()
  {
    return $this->postgresqlProfile;
  }
  /** @param PrivateConnectivity */
  public function setPrivateConnectivity(PrivateConnectivity $privateConnectivity)
  {
    $this->privateConnectivity = $privateConnectivity;
  }
  /** @return PrivateConnectivity */
  public function getPrivateConnectivity()
  {
    return $this->privateConnectivity;
  }
  /** @param StaticServiceIpConnectivity */
  public function setStaticServiceIpConnectivity(StaticServiceIpConnectivity $staticServiceIpConnectivity)
  {
    $this->staticServiceIpConnectivity = $staticServiceIpConnectivity;
  }
  /** @return StaticServiceIpConnectivity */
  public function getStaticServiceIpConnectivity()
  {
    return $this->staticServiceIpConnectivity;
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

class DatasetTemplate extends \Google\Model
{
  /** @var string */
  public $datasetIdPrefix;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $location;

  /** @param string */
  public function setDatasetIdPrefix($datasetIdPrefix)
  {
    $this->datasetIdPrefix = $datasetIdPrefix;
  }
  /** @return string */
  public function getDatasetIdPrefix()
  {
    return $this->datasetIdPrefix;
  }
  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
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
}

class DatastreamEmpty extends \Google\Model
{
}

class DestinationConfig extends \Google\Model
{
  /** @var BigQueryDestinationConfig */
  public $bigqueryDestinationConfig;
  /** @var string */
  public $destinationConnectionProfile;
  /** @var GcsDestinationConfig */
  public $gcsDestinationConfig;
  protected $bigqueryDestinationConfigType = BigQueryDestinationConfig::class;
  protected $bigqueryDestinationConfigDataType = '';
  protected $gcsDestinationConfigType = GcsDestinationConfig::class;
  protected $gcsDestinationConfigDataType = '';
  /** @param BigQueryDestinationConfig */
  public function setBigqueryDestinationConfig(BigQueryDestinationConfig $bigqueryDestinationConfig)
  {
    $this->bigqueryDestinationConfig = $bigqueryDestinationConfig;
  }
  /** @return BigQueryDestinationConfig */
  public function getBigqueryDestinationConfig()
  {
    return $this->bigqueryDestinationConfig;
  }
  /** @param string */
  public function setDestinationConnectionProfile($destinationConnectionProfile)
  {
    $this->destinationConnectionProfile = $destinationConnectionProfile;
  }
  /** @return string */
  public function getDestinationConnectionProfile()
  {
    return $this->destinationConnectionProfile;
  }
  /** @param GcsDestinationConfig */
  public function setGcsDestinationConfig(GcsDestinationConfig $gcsDestinationConfig)
  {
    $this->gcsDestinationConfig = $gcsDestinationConfig;
  }
  /** @return GcsDestinationConfig */
  public function getGcsDestinationConfig()
  {
    return $this->gcsDestinationConfig;
  }
}

class DiscoverConnectionProfileRequest extends \Google\Model
{
  /** @var ConnectionProfile */
  public $connectionProfile;
  /** @var string */
  public $connectionProfileName;
  /** @var bool */
  public $fullHierarchy;
  /** @var int */
  public $hierarchyDepth;
  /** @var MysqlRdbms */
  public $mysqlRdbms;
  /** @var OracleRdbms */
  public $oracleRdbms;
  /** @var PostgresqlRdbms */
  public $postgresqlRdbms;
  protected $connectionProfileType = ConnectionProfile::class;
  protected $connectionProfileDataType = '';
  protected $mysqlRdbmsType = MysqlRdbms::class;
  protected $mysqlRdbmsDataType = '';
  protected $oracleRdbmsType = OracleRdbms::class;
  protected $oracleRdbmsDataType = '';
  protected $postgresqlRdbmsType = PostgresqlRdbms::class;
  protected $postgresqlRdbmsDataType = '';
  /** @param ConnectionProfile */
  public function setConnectionProfile(ConnectionProfile $connectionProfile)
  {
    $this->connectionProfile = $connectionProfile;
  }
  /** @return ConnectionProfile */
  public function getConnectionProfile()
  {
    return $this->connectionProfile;
  }
  /** @param string */
  public function setConnectionProfileName($connectionProfileName)
  {
    $this->connectionProfileName = $connectionProfileName;
  }
  /** @return string */
  public function getConnectionProfileName()
  {
    return $this->connectionProfileName;
  }
  /** @param bool */
  public function setFullHierarchy($fullHierarchy)
  {
    $this->fullHierarchy = $fullHierarchy;
  }
  /** @return bool */
  public function getFullHierarchy()
  {
    return $this->fullHierarchy;
  }
  /** @param int */
  public function setHierarchyDepth($hierarchyDepth)
  {
    $this->hierarchyDepth = $hierarchyDepth;
  }
  /** @return int */
  public function getHierarchyDepth()
  {
    return $this->hierarchyDepth;
  }
  /** @param MysqlRdbms */
  public function setMysqlRdbms(MysqlRdbms $mysqlRdbms)
  {
    $this->mysqlRdbms = $mysqlRdbms;
  }
  /** @return MysqlRdbms */
  public function getMysqlRdbms()
  {
    return $this->mysqlRdbms;
  }
  /** @param OracleRdbms */
  public function setOracleRdbms(OracleRdbms $oracleRdbms)
  {
    $this->oracleRdbms = $oracleRdbms;
  }
  /** @return OracleRdbms */
  public function getOracleRdbms()
  {
    return $this->oracleRdbms;
  }
  /** @param PostgresqlRdbms */
  public function setPostgresqlRdbms(PostgresqlRdbms $postgresqlRdbms)
  {
    $this->postgresqlRdbms = $postgresqlRdbms;
  }
  /** @return PostgresqlRdbms */
  public function getPostgresqlRdbms()
  {
    return $this->postgresqlRdbms;
  }
}

class DiscoverConnectionProfileResponse extends \Google\Model
{
  /** @var MysqlRdbms */
  public $mysqlRdbms;
  /** @var OracleRdbms */
  public $oracleRdbms;
  /** @var PostgresqlRdbms */
  public $postgresqlRdbms;
  protected $mysqlRdbmsType = MysqlRdbms::class;
  protected $mysqlRdbmsDataType = '';
  protected $oracleRdbmsType = OracleRdbms::class;
  protected $oracleRdbmsDataType = '';
  protected $postgresqlRdbmsType = PostgresqlRdbms::class;
  protected $postgresqlRdbmsDataType = '';
  /** @param MysqlRdbms */
  public function setMysqlRdbms(MysqlRdbms $mysqlRdbms)
  {
    $this->mysqlRdbms = $mysqlRdbms;
  }
  /** @return MysqlRdbms */
  public function getMysqlRdbms()
  {
    return $this->mysqlRdbms;
  }
  /** @param OracleRdbms */
  public function setOracleRdbms(OracleRdbms $oracleRdbms)
  {
    $this->oracleRdbms = $oracleRdbms;
  }
  /** @return OracleRdbms */
  public function getOracleRdbms()
  {
    return $this->oracleRdbms;
  }
  /** @param PostgresqlRdbms */
  public function setPostgresqlRdbms(PostgresqlRdbms $postgresqlRdbms)
  {
    $this->postgresqlRdbms = $postgresqlRdbms;
  }
  /** @return PostgresqlRdbms */
  public function getPostgresqlRdbms()
  {
    return $this->postgresqlRdbms;
  }
}

class DropLargeObjects extends \Google\Model
{
}

class Error extends \Google\Model
{
  /** @var string[] */
  public $details;
  /** @var string */
  public $errorTime;
  /** @var string */
  public $errorUuid;
  /** @var string */
  public $message;
  /** @var string */
  public $reason;

  /** @param string[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string[] */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setErrorTime($errorTime)
  {
    $this->errorTime = $errorTime;
  }
  /** @return string */
  public function getErrorTime()
  {
    return $this->errorTime;
  }
  /** @param string */
  public function setErrorUuid($errorUuid)
  {
    $this->errorUuid = $errorUuid;
  }
  /** @return string */
  public function getErrorUuid()
  {
    return $this->errorUuid;
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

class FetchStaticIpsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $staticIps;
  protected $collection_key = 'staticIps';
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
  /** @param string[] */
  public function setStaticIps($staticIps)
  {
    $this->staticIps = $staticIps;
  }
  /** @return string[] */
  public function getStaticIps()
  {
    return $this->staticIps;
  }
}

class ForwardSshTunnelConnectivity extends \Google\Model
{
  /** @var string */
  public $hostname;
  /** @var string */
  public $password;
  /** @var int */
  public $port;
  /** @var string */
  public $privateKey;
  /** @var string */
  public $username;

  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
  /** @param string */
  public function setPrivateKey($privateKey)
  {
    $this->privateKey = $privateKey;
  }
  /** @return string */
  public function getPrivateKey()
  {
    return $this->privateKey;
  }
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

class GcsDestinationConfig extends \Google\Model
{
  /** @var AvroFileFormat */
  public $avroFileFormat;
  /** @var string */
  public $fileRotationInterval;
  /** @var int */
  public $fileRotationMb;
  /** @var JsonFileFormat */
  public $jsonFileFormat;
  /** @var string */
  public $path;
  protected $avroFileFormatType = AvroFileFormat::class;
  protected $avroFileFormatDataType = '';
  protected $jsonFileFormatType = JsonFileFormat::class;
  protected $jsonFileFormatDataType = '';
  /** @param AvroFileFormat */
  public function setAvroFileFormat(AvroFileFormat $avroFileFormat)
  {
    $this->avroFileFormat = $avroFileFormat;
  }
  /** @return AvroFileFormat */
  public function getAvroFileFormat()
  {
    return $this->avroFileFormat;
  }
  /** @param string */
  public function setFileRotationInterval($fileRotationInterval)
  {
    $this->fileRotationInterval = $fileRotationInterval;
  }
  /** @return string */
  public function getFileRotationInterval()
  {
    return $this->fileRotationInterval;
  }
  /** @param int */
  public function setFileRotationMb($fileRotationMb)
  {
    $this->fileRotationMb = $fileRotationMb;
  }
  /** @return int */
  public function getFileRotationMb()
  {
    return $this->fileRotationMb;
  }
  /** @param JsonFileFormat */
  public function setJsonFileFormat(JsonFileFormat $jsonFileFormat)
  {
    $this->jsonFileFormat = $jsonFileFormat;
  }
  /** @return JsonFileFormat */
  public function getJsonFileFormat()
  {
    return $this->jsonFileFormat;
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
}

class GcsProfile extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $rootPath;

  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
  }
  /** @param string */
  public function setRootPath($rootPath)
  {
    $this->rootPath = $rootPath;
  }
  /** @return string */
  public function getRootPath()
  {
    return $this->rootPath;
  }
}

class JsonFileFormat extends \Google\Model
{
  /** @var string */
  public $compression;
  /** @var string */
  public $schemaFileFormat;

  /** @param string */
  public function setCompression($compression)
  {
    $this->compression = $compression;
  }
  /** @return string */
  public function getCompression()
  {
    return $this->compression;
  }
  /** @param string */
  public function setSchemaFileFormat($schemaFileFormat)
  {
    $this->schemaFileFormat = $schemaFileFormat;
  }
  /** @return string */
  public function getSchemaFileFormat()
  {
    return $this->schemaFileFormat;
  }
}

class ListConnectionProfilesResponse extends \Google\Collection
{
  /** @var ConnectionProfile[] */
  public $connectionProfiles;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $connectionProfilesType = ConnectionProfile::class;
  protected $connectionProfilesDataType = 'array';
  /** @param ConnectionProfile[] */
  public function setConnectionProfiles($connectionProfiles)
  {
    $this->connectionProfiles = $connectionProfiles;
  }
  /** @return ConnectionProfile[] */
  public function getConnectionProfiles()
  {
    return $this->connectionProfiles;
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

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
  public function getLocations()
  {
    return $this->locations;
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

class ListPrivateConnectionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PrivateConnection[] */
  public $privateConnections;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $privateConnectionsType = PrivateConnection::class;
  protected $privateConnectionsDataType = 'array';
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
  /** @param PrivateConnection[] */
  public function setPrivateConnections($privateConnections)
  {
    $this->privateConnections = $privateConnections;
  }
  /** @return PrivateConnection[] */
  public function getPrivateConnections()
  {
    return $this->privateConnections;
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

class ListRoutesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Route[] */
  public $routes;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $routesType = Route::class;
  protected $routesDataType = 'array';
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
  /** @param Route[] */
  public function setRoutes($routes)
  {
    $this->routes = $routes;
  }
  /** @return Route[] */
  public function getRoutes()
  {
    return $this->routes;
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

class ListStreamObjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var StreamObject[] */
  public $streamObjects;
  protected $collection_key = 'streamObjects';
  protected $streamObjectsType = StreamObject::class;
  protected $streamObjectsDataType = 'array';
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
  /** @param StreamObject[] */
  public function setStreamObjects($streamObjects)
  {
    $this->streamObjects = $streamObjects;
  }
  /** @return StreamObject[] */
  public function getStreamObjects()
  {
    return $this->streamObjects;
  }
}

class ListStreamsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Stream[] */
  public $streams;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $streamsType = Stream::class;
  protected $streamsDataType = 'array';
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
  /** @param Stream[] */
  public function setStreams($streams)
  {
    $this->streams = $streams;
  }
  /** @return Stream[] */
  public function getStreams()
  {
    return $this->streams;
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

class Location extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class LookupStreamObjectRequest extends \Google\Model
{
  /** @var SourceObjectIdentifier */
  public $sourceObjectIdentifier;
  protected $sourceObjectIdentifierType = SourceObjectIdentifier::class;
  protected $sourceObjectIdentifierDataType = '';
  /** @param SourceObjectIdentifier */
  public function setSourceObjectIdentifier(SourceObjectIdentifier $sourceObjectIdentifier)
  {
    $this->sourceObjectIdentifier = $sourceObjectIdentifier;
  }
  /** @return SourceObjectIdentifier */
  public function getSourceObjectIdentifier()
  {
    return $this->sourceObjectIdentifier;
  }
}

class MysqlColumn extends \Google\Model
{
  /** @var string */
  public $collation;
  /** @var string */
  public $column;
  /** @var string */
  public $dataType;
  /** @var int */
  public $length;
  /** @var bool */
  public $nullable;
  /** @var int */
  public $ordinalPosition;
  /** @var bool */
  public $primaryKey;

  /** @param string */
  public function setCollation($collation)
  {
    $this->collation = $collation;
  }
  /** @return string */
  public function getCollation()
  {
    return $this->collation;
  }
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
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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
  /** @param bool */
  public function setNullable($nullable)
  {
    $this->nullable = $nullable;
  }
  /** @return bool */
  public function getNullable()
  {
    return $this->nullable;
  }
  /** @param int */
  public function setOrdinalPosition($ordinalPosition)
  {
    $this->ordinalPosition = $ordinalPosition;
  }
  /** @return int */
  public function getOrdinalPosition()
  {
    return $this->ordinalPosition;
  }
  /** @param bool */
  public function setPrimaryKey($primaryKey)
  {
    $this->primaryKey = $primaryKey;
  }
  /** @return bool */
  public function getPrimaryKey()
  {
    return $this->primaryKey;
  }
}

class MysqlDatabase extends \Google\Collection
{
  /** @var string */
  public $database;
  /** @var MysqlTable[] */
  public $mysqlTables;
  protected $collection_key = 'mysqlTables';
  protected $mysqlTablesType = MysqlTable::class;
  protected $mysqlTablesDataType = 'array';
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
  /** @param MysqlTable[] */
  public function setMysqlTables($mysqlTables)
  {
    $this->mysqlTables = $mysqlTables;
  }
  /** @return MysqlTable[] */
  public function getMysqlTables()
  {
    return $this->mysqlTables;
  }
}

class MysqlObjectIdentifier extends \Google\Model
{
  /** @var string */
  public $database;
  /** @var string */
  public $table;

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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class MysqlProfile extends \Google\Model
{
  /** @var string */
  public $hostname;
  /** @var string */
  public $password;
  /** @var int */
  public $port;
  /** @var MysqlSslConfig */
  public $sslConfig;
  /** @var string */
  public $username;
  protected $sslConfigType = MysqlSslConfig::class;
  protected $sslConfigDataType = '';
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
  /** @param MysqlSslConfig */
  public function setSslConfig(MysqlSslConfig $sslConfig)
  {
    $this->sslConfig = $sslConfig;
  }
  /** @return MysqlSslConfig */
  public function getSslConfig()
  {
    return $this->sslConfig;
  }
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

class MysqlRdbms extends \Google\Collection
{
  /** @var MysqlDatabase[] */
  public $mysqlDatabases;
  protected $collection_key = 'mysqlDatabases';
  protected $mysqlDatabasesType = MysqlDatabase::class;
  protected $mysqlDatabasesDataType = 'array';
  /** @param MysqlDatabase[] */
  public function setMysqlDatabases($mysqlDatabases)
  {
    $this->mysqlDatabases = $mysqlDatabases;
  }
  /** @return MysqlDatabase[] */
  public function getMysqlDatabases()
  {
    return $this->mysqlDatabases;
  }
}

class MysqlSourceConfig extends \Google\Model
{
  /** @var MysqlRdbms */
  public $excludeObjects;
  /** @var MysqlRdbms */
  public $includeObjects;
  /** @var int */
  public $maxConcurrentCdcTasks;
  protected $excludeObjectsType = MysqlRdbms::class;
  protected $excludeObjectsDataType = '';
  protected $includeObjectsType = MysqlRdbms::class;
  protected $includeObjectsDataType = '';
  /** @param MysqlRdbms */
  public function setExcludeObjects(MysqlRdbms $excludeObjects)
  {
    $this->excludeObjects = $excludeObjects;
  }
  /** @return MysqlRdbms */
  public function getExcludeObjects()
  {
    return $this->excludeObjects;
  }
  /** @param MysqlRdbms */
  public function setIncludeObjects(MysqlRdbms $includeObjects)
  {
    $this->includeObjects = $includeObjects;
  }
  /** @return MysqlRdbms */
  public function getIncludeObjects()
  {
    return $this->includeObjects;
  }
  /** @param int */
  public function setMaxConcurrentCdcTasks($maxConcurrentCdcTasks)
  {
    $this->maxConcurrentCdcTasks = $maxConcurrentCdcTasks;
  }
  /** @return int */
  public function getMaxConcurrentCdcTasks()
  {
    return $this->maxConcurrentCdcTasks;
  }
}

class MysqlSslConfig extends \Google\Model
{
  /** @var string */
  public $caCertificate;
  /** @var bool */
  public $caCertificateSet;
  /** @var string */
  public $clientCertificate;
  /** @var bool */
  public $clientCertificateSet;
  /** @var string */
  public $clientKey;
  /** @var bool */
  public $clientKeySet;

  /** @param string */
  public function setCaCertificate($caCertificate)
  {
    $this->caCertificate = $caCertificate;
  }
  /** @return string */
  public function getCaCertificate()
  {
    return $this->caCertificate;
  }
  /** @param bool */
  public function setCaCertificateSet($caCertificateSet)
  {
    $this->caCertificateSet = $caCertificateSet;
  }
  /** @return bool */
  public function getCaCertificateSet()
  {
    return $this->caCertificateSet;
  }
  /** @param string */
  public function setClientCertificate($clientCertificate)
  {
    $this->clientCertificate = $clientCertificate;
  }
  /** @return string */
  public function getClientCertificate()
  {
    return $this->clientCertificate;
  }
  /** @param bool */
  public function setClientCertificateSet($clientCertificateSet)
  {
    $this->clientCertificateSet = $clientCertificateSet;
  }
  /** @return bool */
  public function getClientCertificateSet()
  {
    return $this->clientCertificateSet;
  }
  /** @param string */
  public function setClientKey($clientKey)
  {
    $this->clientKey = $clientKey;
  }
  /** @return string */
  public function getClientKey()
  {
    return $this->clientKey;
  }
  /** @param bool */
  public function setClientKeySet($clientKeySet)
  {
    $this->clientKeySet = $clientKeySet;
  }
  /** @return bool */
  public function getClientKeySet()
  {
    return $this->clientKeySet;
  }
}

class MysqlTable extends \Google\Collection
{
  /** @var MysqlColumn[] */
  public $mysqlColumns;
  /** @var string */
  public $table;
  protected $collection_key = 'mysqlColumns';
  protected $mysqlColumnsType = MysqlColumn::class;
  protected $mysqlColumnsDataType = 'array';
  /** @param MysqlColumn[] */
  public function setMysqlColumns($mysqlColumns)
  {
    $this->mysqlColumns = $mysqlColumns;
  }
  /** @return MysqlColumn[] */
  public function getMysqlColumns()
  {
    return $this->mysqlColumns;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var ValidationResult */
  public $validationResult;
  /** @var string */
  public $verb;
  protected $validationResultType = ValidationResult::class;
  protected $validationResultDataType = '';
  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param ValidationResult */
  public function setValidationResult(ValidationResult $validationResult)
  {
    $this->validationResult = $validationResult;
  }
  /** @return ValidationResult */
  public function getValidationResult()
  {
    return $this->validationResult;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class OracleColumn extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var string */
  public $dataType;
  /** @var string */
  public $encoding;
  /** @var int */
  public $length;
  /** @var bool */
  public $nullable;
  /** @var int */
  public $ordinalPosition;
  /** @var int */
  public $precision;
  /** @var bool */
  public $primaryKey;
  /** @var int */
  public $scale;

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
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
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
  /** @param bool */
  public function setNullable($nullable)
  {
    $this->nullable = $nullable;
  }
  /** @return bool */
  public function getNullable()
  {
    return $this->nullable;
  }
  /** @param int */
  public function setOrdinalPosition($ordinalPosition)
  {
    $this->ordinalPosition = $ordinalPosition;
  }
  /** @return int */
  public function getOrdinalPosition()
  {
    return $this->ordinalPosition;
  }
  /** @param int */
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  /** @return int */
  public function getPrecision()
  {
    return $this->precision;
  }
  /** @param bool */
  public function setPrimaryKey($primaryKey)
  {
    $this->primaryKey = $primaryKey;
  }
  /** @return bool */
  public function getPrimaryKey()
  {
    return $this->primaryKey;
  }
  /** @param int */
  public function setScale($scale)
  {
    $this->scale = $scale;
  }
  /** @return int */
  public function getScale()
  {
    return $this->scale;
  }
}

class OracleObjectIdentifier extends \Google\Model
{
  /** @var string */
  public $schema;
  /** @var string */
  public $table;

  /** @param string */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /** @return string */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class OracleProfile extends \Google\Model
{
  /** @var string[] */
  public $connectionAttributes;
  /** @var string */
  public $databaseService;
  /** @var string */
  public $hostname;
  /** @var string */
  public $password;
  /** @var int */
  public $port;
  /** @var string */
  public $username;

  /** @param string[] */
  public function setConnectionAttributes($connectionAttributes)
  {
    $this->connectionAttributes = $connectionAttributes;
  }
  /** @return string[] */
  public function getConnectionAttributes()
  {
    return $this->connectionAttributes;
  }
  /** @param string */
  public function setDatabaseService($databaseService)
  {
    $this->databaseService = $databaseService;
  }
  /** @return string */
  public function getDatabaseService()
  {
    return $this->databaseService;
  }
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
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

class OracleRdbms extends \Google\Collection
{
  /** @var OracleSchema[] */
  public $oracleSchemas;
  protected $collection_key = 'oracleSchemas';
  protected $oracleSchemasType = OracleSchema::class;
  protected $oracleSchemasDataType = 'array';
  /** @param OracleSchema[] */
  public function setOracleSchemas($oracleSchemas)
  {
    $this->oracleSchemas = $oracleSchemas;
  }
  /** @return OracleSchema[] */
  public function getOracleSchemas()
  {
    return $this->oracleSchemas;
  }
}

class OracleSchema extends \Google\Collection
{
  /** @var OracleTable[] */
  public $oracleTables;
  /** @var string */
  public $schema;
  protected $collection_key = 'oracleTables';
  protected $oracleTablesType = OracleTable::class;
  protected $oracleTablesDataType = 'array';
  /** @param OracleTable[] */
  public function setOracleTables($oracleTables)
  {
    $this->oracleTables = $oracleTables;
  }
  /** @return OracleTable[] */
  public function getOracleTables()
  {
    return $this->oracleTables;
  }
  /** @param string */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /** @return string */
  public function getSchema()
  {
    return $this->schema;
  }
}

class OracleSourceConfig extends \Google\Model
{
  /** @var DropLargeObjects */
  public $dropLargeObjects;
  /** @var OracleRdbms */
  public $excludeObjects;
  /** @var OracleRdbms */
  public $includeObjects;
  /** @var int */
  public $maxConcurrentCdcTasks;
  /** @var StreamLargeObjects */
  public $streamLargeObjects;
  protected $dropLargeObjectsType = DropLargeObjects::class;
  protected $dropLargeObjectsDataType = '';
  protected $excludeObjectsType = OracleRdbms::class;
  protected $excludeObjectsDataType = '';
  protected $includeObjectsType = OracleRdbms::class;
  protected $includeObjectsDataType = '';
  protected $streamLargeObjectsType = StreamLargeObjects::class;
  protected $streamLargeObjectsDataType = '';
  /** @param DropLargeObjects */
  public function setDropLargeObjects(DropLargeObjects $dropLargeObjects)
  {
    $this->dropLargeObjects = $dropLargeObjects;
  }
  /** @return DropLargeObjects */
  public function getDropLargeObjects()
  {
    return $this->dropLargeObjects;
  }
  /** @param OracleRdbms */
  public function setExcludeObjects(OracleRdbms $excludeObjects)
  {
    $this->excludeObjects = $excludeObjects;
  }
  /** @return OracleRdbms */
  public function getExcludeObjects()
  {
    return $this->excludeObjects;
  }
  /** @param OracleRdbms */
  public function setIncludeObjects(OracleRdbms $includeObjects)
  {
    $this->includeObjects = $includeObjects;
  }
  /** @return OracleRdbms */
  public function getIncludeObjects()
  {
    return $this->includeObjects;
  }
  /** @param int */
  public function setMaxConcurrentCdcTasks($maxConcurrentCdcTasks)
  {
    $this->maxConcurrentCdcTasks = $maxConcurrentCdcTasks;
  }
  /** @return int */
  public function getMaxConcurrentCdcTasks()
  {
    return $this->maxConcurrentCdcTasks;
  }
  /** @param StreamLargeObjects */
  public function setStreamLargeObjects(StreamLargeObjects $streamLargeObjects)
  {
    $this->streamLargeObjects = $streamLargeObjects;
  }
  /** @return StreamLargeObjects */
  public function getStreamLargeObjects()
  {
    return $this->streamLargeObjects;
  }
}

class OracleTable extends \Google\Collection
{
  /** @var OracleColumn[] */
  public $oracleColumns;
  /** @var string */
  public $table;
  protected $collection_key = 'oracleColumns';
  protected $oracleColumnsType = OracleColumn::class;
  protected $oracleColumnsDataType = 'array';
  /** @param OracleColumn[] */
  public function setOracleColumns($oracleColumns)
  {
    $this->oracleColumns = $oracleColumns;
  }
  /** @return OracleColumn[] */
  public function getOracleColumns()
  {
    return $this->oracleColumns;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class PostgresqlColumn extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var string */
  public $dataType;
  /** @var int */
  public $length;
  /** @var bool */
  public $nullable;
  /** @var int */
  public $ordinalPosition;
  /** @var int */
  public $precision;
  /** @var bool */
  public $primaryKey;
  /** @var int */
  public $scale;

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
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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
  /** @param bool */
  public function setNullable($nullable)
  {
    $this->nullable = $nullable;
  }
  /** @return bool */
  public function getNullable()
  {
    return $this->nullable;
  }
  /** @param int */
  public function setOrdinalPosition($ordinalPosition)
  {
    $this->ordinalPosition = $ordinalPosition;
  }
  /** @return int */
  public function getOrdinalPosition()
  {
    return $this->ordinalPosition;
  }
  /** @param int */
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  /** @return int */
  public function getPrecision()
  {
    return $this->precision;
  }
  /** @param bool */
  public function setPrimaryKey($primaryKey)
  {
    $this->primaryKey = $primaryKey;
  }
  /** @return bool */
  public function getPrimaryKey()
  {
    return $this->primaryKey;
  }
  /** @param int */
  public function setScale($scale)
  {
    $this->scale = $scale;
  }
  /** @return int */
  public function getScale()
  {
    return $this->scale;
  }
}

class PostgresqlObjectIdentifier extends \Google\Model
{
  /** @var string */
  public $schema;
  /** @var string */
  public $table;

  /** @param string */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /** @return string */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class PostgresqlProfile extends \Google\Model
{
  /** @var string */
  public $database;
  /** @var string */
  public $hostname;
  /** @var string */
  public $password;
  /** @var int */
  public $port;
  /** @var string */
  public $username;

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
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
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

class PostgresqlRdbms extends \Google\Collection
{
  /** @var PostgresqlSchema[] */
  public $postgresqlSchemas;
  protected $collection_key = 'postgresqlSchemas';
  protected $postgresqlSchemasType = PostgresqlSchema::class;
  protected $postgresqlSchemasDataType = 'array';
  /** @param PostgresqlSchema[] */
  public function setPostgresqlSchemas($postgresqlSchemas)
  {
    $this->postgresqlSchemas = $postgresqlSchemas;
  }
  /** @return PostgresqlSchema[] */
  public function getPostgresqlSchemas()
  {
    return $this->postgresqlSchemas;
  }
}

class PostgresqlSchema extends \Google\Collection
{
  /** @var PostgresqlTable[] */
  public $postgresqlTables;
  /** @var string */
  public $schema;
  protected $collection_key = 'postgresqlTables';
  protected $postgresqlTablesType = PostgresqlTable::class;
  protected $postgresqlTablesDataType = 'array';
  /** @param PostgresqlTable[] */
  public function setPostgresqlTables($postgresqlTables)
  {
    $this->postgresqlTables = $postgresqlTables;
  }
  /** @return PostgresqlTable[] */
  public function getPostgresqlTables()
  {
    return $this->postgresqlTables;
  }
  /** @param string */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /** @return string */
  public function getSchema()
  {
    return $this->schema;
  }
}

class PostgresqlSourceConfig extends \Google\Model
{
  /** @var PostgresqlRdbms */
  public $excludeObjects;
  /** @var PostgresqlRdbms */
  public $includeObjects;
  /** @var string */
  public $publication;
  /** @var string */
  public $replicationSlot;
  protected $excludeObjectsType = PostgresqlRdbms::class;
  protected $excludeObjectsDataType = '';
  protected $includeObjectsType = PostgresqlRdbms::class;
  protected $includeObjectsDataType = '';
  /** @param PostgresqlRdbms */
  public function setExcludeObjects(PostgresqlRdbms $excludeObjects)
  {
    $this->excludeObjects = $excludeObjects;
  }
  /** @return PostgresqlRdbms */
  public function getExcludeObjects()
  {
    return $this->excludeObjects;
  }
  /** @param PostgresqlRdbms */
  public function setIncludeObjects(PostgresqlRdbms $includeObjects)
  {
    $this->includeObjects = $includeObjects;
  }
  /** @return PostgresqlRdbms */
  public function getIncludeObjects()
  {
    return $this->includeObjects;
  }
  /** @param string */
  public function setPublication($publication)
  {
    $this->publication = $publication;
  }
  /** @return string */
  public function getPublication()
  {
    return $this->publication;
  }
  /** @param string */
  public function setReplicationSlot($replicationSlot)
  {
    $this->replicationSlot = $replicationSlot;
  }
  /** @return string */
  public function getReplicationSlot()
  {
    return $this->replicationSlot;
  }
}

class PostgresqlTable extends \Google\Collection
{
  /** @var PostgresqlColumn[] */
  public $postgresqlColumns;
  /** @var string */
  public $table;
  protected $collection_key = 'postgresqlColumns';
  protected $postgresqlColumnsType = PostgresqlColumn::class;
  protected $postgresqlColumnsDataType = 'array';
  /** @param PostgresqlColumn[] */
  public function setPostgresqlColumns($postgresqlColumns)
  {
    $this->postgresqlColumns = $postgresqlColumns;
  }
  /** @return PostgresqlColumn[] */
  public function getPostgresqlColumns()
  {
    return $this->postgresqlColumns;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class PrivateConnection extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var Error */
  public $error;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var VpcPeeringConfig */
  public $vpcPeeringConfig;
  protected $errorType = Error::class;
  protected $errorDataType = '';
  protected $vpcPeeringConfigType = VpcPeeringConfig::class;
  protected $vpcPeeringConfigDataType = '';
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
  /** @param Error */
  public function setError(Error $error)
  {
    $this->error = $error;
  }
  /** @return Error */
  public function getError()
  {
    return $this->error;
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
  /** @param VpcPeeringConfig */
  public function setVpcPeeringConfig(VpcPeeringConfig $vpcPeeringConfig)
  {
    $this->vpcPeeringConfig = $vpcPeeringConfig;
  }
  /** @return VpcPeeringConfig */
  public function getVpcPeeringConfig()
  {
    return $this->vpcPeeringConfig;
  }
}

class PrivateConnectivity extends \Google\Model
{
  /** @var string */
  public $privateConnection;

  /** @param string */
  public function setPrivateConnection($privateConnection)
  {
    $this->privateConnection = $privateConnection;
  }
  /** @return string */
  public function getPrivateConnection()
  {
    return $this->privateConnection;
  }
}

class Route extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $destinationAddress;
  /** @var int */
  public $destinationPort;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
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
  public function setDestinationAddress($destinationAddress)
  {
    $this->destinationAddress = $destinationAddress;
  }
  /** @return string */
  public function getDestinationAddress()
  {
    return $this->destinationAddress;
  }
  /** @param int */
  public function setDestinationPort($destinationPort)
  {
    $this->destinationPort = $destinationPort;
  }
  /** @return int */
  public function getDestinationPort()
  {
    return $this->destinationPort;
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
}

class SingleTargetDataset extends \Google\Model
{
  /** @var string */
  public $datasetId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
}

class SourceConfig extends \Google\Model
{
  /** @var MysqlSourceConfig */
  public $mysqlSourceConfig;
  /** @var OracleSourceConfig */
  public $oracleSourceConfig;
  /** @var PostgresqlSourceConfig */
  public $postgresqlSourceConfig;
  /** @var string */
  public $sourceConnectionProfile;
  protected $mysqlSourceConfigType = MysqlSourceConfig::class;
  protected $mysqlSourceConfigDataType = '';
  protected $oracleSourceConfigType = OracleSourceConfig::class;
  protected $oracleSourceConfigDataType = '';
  protected $postgresqlSourceConfigType = PostgresqlSourceConfig::class;
  protected $postgresqlSourceConfigDataType = '';
  /** @param MysqlSourceConfig */
  public function setMysqlSourceConfig(MysqlSourceConfig $mysqlSourceConfig)
  {
    $this->mysqlSourceConfig = $mysqlSourceConfig;
  }
  /** @return MysqlSourceConfig */
  public function getMysqlSourceConfig()
  {
    return $this->mysqlSourceConfig;
  }
  /** @param OracleSourceConfig */
  public function setOracleSourceConfig(OracleSourceConfig $oracleSourceConfig)
  {
    $this->oracleSourceConfig = $oracleSourceConfig;
  }
  /** @return OracleSourceConfig */
  public function getOracleSourceConfig()
  {
    return $this->oracleSourceConfig;
  }
  /** @param PostgresqlSourceConfig */
  public function setPostgresqlSourceConfig(PostgresqlSourceConfig $postgresqlSourceConfig)
  {
    $this->postgresqlSourceConfig = $postgresqlSourceConfig;
  }
  /** @return PostgresqlSourceConfig */
  public function getPostgresqlSourceConfig()
  {
    return $this->postgresqlSourceConfig;
  }
  /** @param string */
  public function setSourceConnectionProfile($sourceConnectionProfile)
  {
    $this->sourceConnectionProfile = $sourceConnectionProfile;
  }
  /** @return string */
  public function getSourceConnectionProfile()
  {
    return $this->sourceConnectionProfile;
  }
}

class SourceHierarchyDatasets extends \Google\Model
{
  /** @var DatasetTemplate */
  public $datasetTemplate;
  protected $datasetTemplateType = DatasetTemplate::class;
  protected $datasetTemplateDataType = '';
  /** @param DatasetTemplate */
  public function setDatasetTemplate(DatasetTemplate $datasetTemplate)
  {
    $this->datasetTemplate = $datasetTemplate;
  }
  /** @return DatasetTemplate */
  public function getDatasetTemplate()
  {
    return $this->datasetTemplate;
  }
}

class SourceObjectIdentifier extends \Google\Model
{
  /** @var MysqlObjectIdentifier */
  public $mysqlIdentifier;
  /** @var OracleObjectIdentifier */
  public $oracleIdentifier;
  /** @var PostgresqlObjectIdentifier */
  public $postgresqlIdentifier;
  protected $mysqlIdentifierType = MysqlObjectIdentifier::class;
  protected $mysqlIdentifierDataType = '';
  protected $oracleIdentifierType = OracleObjectIdentifier::class;
  protected $oracleIdentifierDataType = '';
  protected $postgresqlIdentifierType = PostgresqlObjectIdentifier::class;
  protected $postgresqlIdentifierDataType = '';
  /** @param MysqlObjectIdentifier */
  public function setMysqlIdentifier(MysqlObjectIdentifier $mysqlIdentifier)
  {
    $this->mysqlIdentifier = $mysqlIdentifier;
  }
  /** @return MysqlObjectIdentifier */
  public function getMysqlIdentifier()
  {
    return $this->mysqlIdentifier;
  }
  /** @param OracleObjectIdentifier */
  public function setOracleIdentifier(OracleObjectIdentifier $oracleIdentifier)
  {
    $this->oracleIdentifier = $oracleIdentifier;
  }
  /** @return OracleObjectIdentifier */
  public function getOracleIdentifier()
  {
    return $this->oracleIdentifier;
  }
  /** @param PostgresqlObjectIdentifier */
  public function setPostgresqlIdentifier(PostgresqlObjectIdentifier $postgresqlIdentifier)
  {
    $this->postgresqlIdentifier = $postgresqlIdentifier;
  }
  /** @return PostgresqlObjectIdentifier */
  public function getPostgresqlIdentifier()
  {
    return $this->postgresqlIdentifier;
  }
}

class StartBackfillJobRequest extends \Google\Model
{
}

class StartBackfillJobResponse extends \Google\Model
{
  /** @var StreamObject */
  public $object;
  protected $objectType = StreamObject::class;
  protected $objectDataType = '';
  /** @param StreamObject */
  public function setObject(StreamObject $object)
  {
    $this->object = $object;
  }
  /** @return StreamObject */
  public function getObject()
  {
    return $this->object;
  }
}

class StaticServiceIpConnectivity extends \Google\Model
{
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

class StopBackfillJobRequest extends \Google\Model
{
}

class StopBackfillJobResponse extends \Google\Model
{
  /** @var StreamObject */
  public $object;
  protected $objectType = StreamObject::class;
  protected $objectDataType = '';
  /** @param StreamObject */
  public function setObject(StreamObject $object)
  {
    $this->object = $object;
  }
  /** @return StreamObject */
  public function getObject()
  {
    return $this->object;
  }
}

class Stream extends \Google\Collection
{
  /** @var BackfillAllStrategy */
  public $backfillAll;
  /** @var BackfillNoneStrategy */
  public $backfillNone;
  /** @var string */
  public $createTime;
  /** @var string */
  public $customerManagedEncryptionKey;
  /** @var DestinationConfig */
  public $destinationConfig;
  /** @var string */
  public $displayName;
  /** @var Error[] */
  public $errors;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var SourceConfig */
  public $sourceConfig;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'errors';
  protected $backfillAllType = BackfillAllStrategy::class;
  protected $backfillAllDataType = '';
  protected $backfillNoneType = BackfillNoneStrategy::class;
  protected $backfillNoneDataType = '';
  protected $destinationConfigType = DestinationConfig::class;
  protected $destinationConfigDataType = '';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  protected $sourceConfigType = SourceConfig::class;
  protected $sourceConfigDataType = '';
  /** @param BackfillAllStrategy */
  public function setBackfillAll(BackfillAllStrategy $backfillAll)
  {
    $this->backfillAll = $backfillAll;
  }
  /** @return BackfillAllStrategy */
  public function getBackfillAll()
  {
    return $this->backfillAll;
  }
  /** @param BackfillNoneStrategy */
  public function setBackfillNone(BackfillNoneStrategy $backfillNone)
  {
    $this->backfillNone = $backfillNone;
  }
  /** @return BackfillNoneStrategy */
  public function getBackfillNone()
  {
    return $this->backfillNone;
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
  public function setCustomerManagedEncryptionKey($customerManagedEncryptionKey)
  {
    $this->customerManagedEncryptionKey = $customerManagedEncryptionKey;
  }
  /** @return string */
  public function getCustomerManagedEncryptionKey()
  {
    return $this->customerManagedEncryptionKey;
  }
  /** @param DestinationConfig */
  public function setDestinationConfig(DestinationConfig $destinationConfig)
  {
    $this->destinationConfig = $destinationConfig;
  }
  /** @return DestinationConfig */
  public function getDestinationConfig()
  {
    return $this->destinationConfig;
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
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param SourceConfig */
  public function setSourceConfig(SourceConfig $sourceConfig)
  {
    $this->sourceConfig = $sourceConfig;
  }
  /** @return SourceConfig */
  public function getSourceConfig()
  {
    return $this->sourceConfig;
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

class StreamLargeObjects extends \Google\Model
{
}

class StreamObject extends \Google\Collection
{
  /** @var BackfillJob */
  public $backfillJob;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var Error[] */
  public $errors;
  /** @var string */
  public $name;
  /** @var SourceObjectIdentifier */
  public $sourceObject;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'errors';
  protected $backfillJobType = BackfillJob::class;
  protected $backfillJobDataType = '';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  protected $sourceObjectType = SourceObjectIdentifier::class;
  protected $sourceObjectDataType = '';
  /** @param BackfillJob */
  public function setBackfillJob(BackfillJob $backfillJob)
  {
    $this->backfillJob = $backfillJob;
  }
  /** @return BackfillJob */
  public function getBackfillJob()
  {
    return $this->backfillJob;
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
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param SourceObjectIdentifier */
  public function setSourceObject(SourceObjectIdentifier $sourceObject)
  {
    $this->sourceObject = $sourceObject;
  }
  /** @return SourceObjectIdentifier */
  public function getSourceObject()
  {
    return $this->sourceObject;
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

class Validation extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var ValidationMessage[] */
  public $message;
  /** @var string */
  public $state;
  protected $collection_key = 'message';
  protected $messageType = ValidationMessage::class;
  protected $messageDataType = 'array';
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param ValidationMessage[] */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return ValidationMessage[] */
  public function getMessage()
  {
    return $this->message;
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

class ValidationMessage extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $level;
  /** @var string */
  public $message;
  /** @var string[] */
  public $metadata;

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
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string */
  public function getLevel()
  {
    return $this->level;
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
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class ValidationResult extends \Google\Collection
{
  /** @var Validation[] */
  public $validations;
  protected $collection_key = 'validations';
  protected $validationsType = Validation::class;
  protected $validationsDataType = 'array';
  /** @param Validation[] */
  public function setValidations($validations)
  {
    $this->validations = $validations;
  }
  /** @return Validation[] */
  public function getValidations()
  {
    return $this->validations;
  }
}

class VpcPeeringConfig extends \Google\Model
{
  /** @var string */
  public $subnet;
  /** @var string */
  public $vpc;

  /** @param string */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /** @return string */
  public function getSubnet()
  {
    return $this->subnet;
  }
  /** @param string */
  public function setVpc($vpc)
  {
    $this->vpc = $vpc;
  }
  /** @return string */
  public function getVpc()
  {
    return $this->vpc;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AvroFileFormat::class, 'Google_Service_Datastream_AvroFileFormat');
class_alias(BackfillAllStrategy::class, 'Google_Service_Datastream_BackfillAllStrategy');
class_alias(BackfillJob::class, 'Google_Service_Datastream_BackfillJob');
class_alias(BackfillNoneStrategy::class, 'Google_Service_Datastream_BackfillNoneStrategy');
class_alias(BigQueryDestinationConfig::class, 'Google_Service_Datastream_BigQueryDestinationConfig');
class_alias(BigQueryProfile::class, 'Google_Service_Datastream_BigQueryProfile');
class_alias(CancelOperationRequest::class, 'Google_Service_Datastream_CancelOperationRequest');
class_alias(ConnectionProfile::class, 'Google_Service_Datastream_ConnectionProfile');
class_alias(DatasetTemplate::class, 'Google_Service_Datastream_DatasetTemplate');
class_alias(DatastreamEmpty::class, 'Google_Service_Datastream_DatastreamEmpty');
class_alias(DestinationConfig::class, 'Google_Service_Datastream_DestinationConfig');
class_alias(DiscoverConnectionProfileRequest::class, 'Google_Service_Datastream_DiscoverConnectionProfileRequest');
class_alias(DiscoverConnectionProfileResponse::class, 'Google_Service_Datastream_DiscoverConnectionProfileResponse');
class_alias(DropLargeObjects::class, 'Google_Service_Datastream_DropLargeObjects');
class_alias(Error::class, 'Google_Service_Datastream_Error');
class_alias(FetchStaticIpsResponse::class, 'Google_Service_Datastream_FetchStaticIpsResponse');
class_alias(ForwardSshTunnelConnectivity::class, 'Google_Service_Datastream_ForwardSshTunnelConnectivity');
class_alias(GcsDestinationConfig::class, 'Google_Service_Datastream_GcsDestinationConfig');
class_alias(GcsProfile::class, 'Google_Service_Datastream_GcsProfile');
class_alias(JsonFileFormat::class, 'Google_Service_Datastream_JsonFileFormat');
class_alias(ListConnectionProfilesResponse::class, 'Google_Service_Datastream_ListConnectionProfilesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Datastream_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Datastream_ListOperationsResponse');
class_alias(ListPrivateConnectionsResponse::class, 'Google_Service_Datastream_ListPrivateConnectionsResponse');
class_alias(ListRoutesResponse::class, 'Google_Service_Datastream_ListRoutesResponse');
class_alias(ListStreamObjectsResponse::class, 'Google_Service_Datastream_ListStreamObjectsResponse');
class_alias(ListStreamsResponse::class, 'Google_Service_Datastream_ListStreamsResponse');
class_alias(Location::class, 'Google_Service_Datastream_Location');
class_alias(LookupStreamObjectRequest::class, 'Google_Service_Datastream_LookupStreamObjectRequest');
class_alias(MysqlColumn::class, 'Google_Service_Datastream_MysqlColumn');
class_alias(MysqlDatabase::class, 'Google_Service_Datastream_MysqlDatabase');
class_alias(MysqlObjectIdentifier::class, 'Google_Service_Datastream_MysqlObjectIdentifier');
class_alias(MysqlProfile::class, 'Google_Service_Datastream_MysqlProfile');
class_alias(MysqlRdbms::class, 'Google_Service_Datastream_MysqlRdbms');
class_alias(MysqlSourceConfig::class, 'Google_Service_Datastream_MysqlSourceConfig');
class_alias(MysqlSslConfig::class, 'Google_Service_Datastream_MysqlSslConfig');
class_alias(MysqlTable::class, 'Google_Service_Datastream_MysqlTable');
class_alias(Operation::class, 'Google_Service_Datastream_Operation');
class_alias(OperationMetadata::class, 'Google_Service_Datastream_OperationMetadata');
class_alias(OracleColumn::class, 'Google_Service_Datastream_OracleColumn');
class_alias(OracleObjectIdentifier::class, 'Google_Service_Datastream_OracleObjectIdentifier');
class_alias(OracleProfile::class, 'Google_Service_Datastream_OracleProfile');
class_alias(OracleRdbms::class, 'Google_Service_Datastream_OracleRdbms');
class_alias(OracleSchema::class, 'Google_Service_Datastream_OracleSchema');
class_alias(OracleSourceConfig::class, 'Google_Service_Datastream_OracleSourceConfig');
class_alias(OracleTable::class, 'Google_Service_Datastream_OracleTable');
class_alias(PostgresqlColumn::class, 'Google_Service_Datastream_PostgresqlColumn');
class_alias(PostgresqlObjectIdentifier::class, 'Google_Service_Datastream_PostgresqlObjectIdentifier');
class_alias(PostgresqlProfile::class, 'Google_Service_Datastream_PostgresqlProfile');
class_alias(PostgresqlRdbms::class, 'Google_Service_Datastream_PostgresqlRdbms');
class_alias(PostgresqlSchema::class, 'Google_Service_Datastream_PostgresqlSchema');
class_alias(PostgresqlSourceConfig::class, 'Google_Service_Datastream_PostgresqlSourceConfig');
class_alias(PostgresqlTable::class, 'Google_Service_Datastream_PostgresqlTable');
class_alias(PrivateConnection::class, 'Google_Service_Datastream_PrivateConnection');
class_alias(PrivateConnectivity::class, 'Google_Service_Datastream_PrivateConnectivity');
class_alias(Route::class, 'Google_Service_Datastream_Route');
class_alias(SingleTargetDataset::class, 'Google_Service_Datastream_SingleTargetDataset');
class_alias(SourceConfig::class, 'Google_Service_Datastream_SourceConfig');
class_alias(SourceHierarchyDatasets::class, 'Google_Service_Datastream_SourceHierarchyDatasets');
class_alias(SourceObjectIdentifier::class, 'Google_Service_Datastream_SourceObjectIdentifier');
class_alias(StartBackfillJobRequest::class, 'Google_Service_Datastream_StartBackfillJobRequest');
class_alias(StartBackfillJobResponse::class, 'Google_Service_Datastream_StartBackfillJobResponse');
class_alias(StaticServiceIpConnectivity::class, 'Google_Service_Datastream_StaticServiceIpConnectivity');
class_alias(Status::class, 'Google_Service_Datastream_Status');
class_alias(StopBackfillJobRequest::class, 'Google_Service_Datastream_StopBackfillJobRequest');
class_alias(StopBackfillJobResponse::class, 'Google_Service_Datastream_StopBackfillJobResponse');
class_alias(Stream::class, 'Google_Service_Datastream_Stream');
class_alias(StreamLargeObjects::class, 'Google_Service_Datastream_StreamLargeObjects');
class_alias(StreamObject::class, 'Google_Service_Datastream_StreamObject');
class_alias(Validation::class, 'Google_Service_Datastream_Validation');
class_alias(ValidationMessage::class, 'Google_Service_Datastream_ValidationMessage');
class_alias(ValidationResult::class, 'Google_Service_Datastream_ValidationResult');
class_alias(VpcPeeringConfig::class, 'Google_Service_Datastream_VpcPeeringConfig');
