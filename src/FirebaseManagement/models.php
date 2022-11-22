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

namespace Google\Service\FirebaseManagement;

class AddFirebaseRequest extends \Google\Model
{
  /** @var string */
  public $locationId;

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
}

class AddGoogleAnalyticsRequest extends \Google\Model
{
  /** @var string */
  public $analyticsAccountId;
  /** @var string */
  public $analyticsPropertyId;

  /** @param string */
  public function setAnalyticsAccountId($analyticsAccountId)
  {
    $this->analyticsAccountId = $analyticsAccountId;
  }
  /** @return string */
  public function getAnalyticsAccountId()
  {
    return $this->analyticsAccountId;
  }
  /** @param string */
  public function setAnalyticsPropertyId($analyticsPropertyId)
  {
    $this->analyticsPropertyId = $analyticsPropertyId;
  }
  /** @return string */
  public function getAnalyticsPropertyId()
  {
    return $this->analyticsPropertyId;
  }
}

class AdminSdkConfig extends \Google\Model
{
  /** @var string */
  public $databaseURL;
  /** @var string */
  public $locationId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $storageBucket;

  /** @param string */
  public function setDatabaseURL($databaseURL)
  {
    $this->databaseURL = $databaseURL;
  }
  /** @return string */
  public function getDatabaseURL()
  {
    return $this->databaseURL;
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
  /** @param string */
  public function setStorageBucket($storageBucket)
  {
    $this->storageBucket = $storageBucket;
  }
  /** @return string */
  public function getStorageBucket()
  {
    return $this->storageBucket;
  }
}

class AnalyticsDetails extends \Google\Collection
{
  /** @var AnalyticsProperty */
  public $analyticsProperty;
  /** @var StreamMapping[] */
  public $streamMappings;
  protected $collection_key = 'streamMappings';
  protected $analyticsPropertyType = AnalyticsProperty::class;
  protected $analyticsPropertyDataType = '';
  protected $streamMappingsType = StreamMapping::class;
  protected $streamMappingsDataType = 'array';
  /** @param AnalyticsProperty */
  public function setAnalyticsProperty(AnalyticsProperty $analyticsProperty)
  {
    $this->analyticsProperty = $analyticsProperty;
  }
  /** @return AnalyticsProperty */
  public function getAnalyticsProperty()
  {
    return $this->analyticsProperty;
  }
  /** @param StreamMapping[] */
  public function setStreamMappings($streamMappings)
  {
    $this->streamMappings = $streamMappings;
  }
  /** @return StreamMapping[] */
  public function getStreamMappings()
  {
    return $this->streamMappings;
  }
}

class AnalyticsProperty extends \Google\Model
{
  /** @var string */
  public $analyticsAccountId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;

  /** @param string */
  public function setAnalyticsAccountId($analyticsAccountId)
  {
    $this->analyticsAccountId = $analyticsAccountId;
  }
  /** @return string */
  public function getAnalyticsAccountId()
  {
    return $this->analyticsAccountId;
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

class AndroidApp extends \Google\Collection
{
  /** @var string */
  public $apiKeyId;
  /** @var string */
  public $appId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $projectId;
  /** @var string[] */
  public $sha1Hashes;
  /** @var string[] */
  public $sha256Hashes;
  /** @var string */
  public $state;
  protected $collection_key = 'sha256Hashes';
  /** @param string */
  public function setApiKeyId($apiKeyId)
  {
    $this->apiKeyId = $apiKeyId;
  }
  /** @return string */
  public function getApiKeyId()
  {
    return $this->apiKeyId;
  }
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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
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
  /** @param string[] */
  public function setSha1Hashes($sha1Hashes)
  {
    $this->sha1Hashes = $sha1Hashes;
  }
  /** @return string[] */
  public function getSha1Hashes()
  {
    return $this->sha1Hashes;
  }
  /** @param string[] */
  public function setSha256Hashes($sha256Hashes)
  {
    $this->sha256Hashes = $sha256Hashes;
  }
  /** @return string[] */
  public function getSha256Hashes()
  {
    return $this->sha256Hashes;
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

class AndroidAppConfig extends \Google\Model
{
  /** @var string */
  public $configFileContents;
  /** @var string */
  public $configFilename;

  /** @param string */
  public function setConfigFileContents($configFileContents)
  {
    $this->configFileContents = $configFileContents;
  }
  /** @return string */
  public function getConfigFileContents()
  {
    return $this->configFileContents;
  }
  /** @param string */
  public function setConfigFilename($configFilename)
  {
    $this->configFilename = $configFilename;
  }
  /** @return string */
  public function getConfigFilename()
  {
    return $this->configFilename;
  }
}

class DefaultResources extends \Google\Model
{
  /** @var string */
  public $hostingSite;
  /** @var string */
  public $locationId;
  /** @var string */
  public $realtimeDatabaseInstance;
  /** @var string */
  public $storageBucket;

  /** @param string */
  public function setHostingSite($hostingSite)
  {
    $this->hostingSite = $hostingSite;
  }
  /** @return string */
  public function getHostingSite()
  {
    return $this->hostingSite;
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
  /** @param string */
  public function setRealtimeDatabaseInstance($realtimeDatabaseInstance)
  {
    $this->realtimeDatabaseInstance = $realtimeDatabaseInstance;
  }
  /** @return string */
  public function getRealtimeDatabaseInstance()
  {
    return $this->realtimeDatabaseInstance;
  }
  /** @param string */
  public function setStorageBucket($storageBucket)
  {
    $this->storageBucket = $storageBucket;
  }
  /** @return string */
  public function getStorageBucket()
  {
    return $this->storageBucket;
  }
}

class FinalizeDefaultLocationRequest extends \Google\Model
{
  /** @var string */
  public $locationId;

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
}

class FirebaseAppInfo extends \Google\Model
{
  /** @var string */
  public $apiKeyId;
  /** @var string */
  public $appId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $namespace;
  /** @var string */
  public $platform;
  /** @var string */
  public $state;

  /** @param string */
  public function setApiKeyId($apiKeyId)
  {
    $this->apiKeyId = $apiKeyId;
  }
  /** @return string */
  public function getApiKeyId()
  {
    return $this->apiKeyId;
  }
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
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
  }
  /** @param string */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
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

class FirebaseEmpty extends \Google\Model
{
}

class FirebaseProject extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $projectNumber;
  /** @var DefaultResources */
  public $resources;
  /** @var string */
  public $state;
  protected $resourcesType = DefaultResources::class;
  protected $resourcesDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
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
  /** @param DefaultResources */
  public function setResources(DefaultResources $resources)
  {
    $this->resources = $resources;
  }
  /** @return DefaultResources */
  public function getResources()
  {
    return $this->resources;
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

class IosApp extends \Google\Model
{
  /** @var string */
  public $apiKeyId;
  /** @var string */
  public $appId;
  /** @var string */
  public $appStoreId;
  /** @var string */
  public $bundleId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $state;
  /** @var string */
  public $teamId;

  /** @param string */
  public function setApiKeyId($apiKeyId)
  {
    $this->apiKeyId = $apiKeyId;
  }
  /** @return string */
  public function getApiKeyId()
  {
    return $this->apiKeyId;
  }
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
  /** @param string */
  public function setAppStoreId($appStoreId)
  {
    $this->appStoreId = $appStoreId;
  }
  /** @return string */
  public function getAppStoreId()
  {
    return $this->appStoreId;
  }
  /** @param string */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /** @return string */
  public function getBundleId()
  {
    return $this->bundleId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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
  public function setTeamId($teamId)
  {
    $this->teamId = $teamId;
  }
  /** @return string */
  public function getTeamId()
  {
    return $this->teamId;
  }
}

class IosAppConfig extends \Google\Model
{
  /** @var string */
  public $configFileContents;
  /** @var string */
  public $configFilename;

  /** @param string */
  public function setConfigFileContents($configFileContents)
  {
    $this->configFileContents = $configFileContents;
  }
  /** @return string */
  public function getConfigFileContents()
  {
    return $this->configFileContents;
  }
  /** @param string */
  public function setConfigFilename($configFilename)
  {
    $this->configFilename = $configFilename;
  }
  /** @return string */
  public function getConfigFilename()
  {
    return $this->configFilename;
  }
}

class ListAndroidAppsResponse extends \Google\Collection
{
  /** @var AndroidApp[] */
  public $apps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apps';
  protected $appsType = AndroidApp::class;
  protected $appsDataType = 'array';
  /** @param AndroidApp[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return AndroidApp[] */
  public function getApps()
  {
    return $this->apps;
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

class ListAvailableLocationsResponse extends \Google\Collection
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

class ListAvailableProjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ProjectInfo[] */
  public $projectInfo;
  protected $collection_key = 'projectInfo';
  protected $projectInfoType = ProjectInfo::class;
  protected $projectInfoDataType = 'array';
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
  /** @param ProjectInfo[] */
  public function setProjectInfo($projectInfo)
  {
    $this->projectInfo = $projectInfo;
  }
  /** @return ProjectInfo[] */
  public function getProjectInfo()
  {
    return $this->projectInfo;
  }
}

class ListFirebaseProjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var FirebaseProject[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = FirebaseProject::class;
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
  /** @param FirebaseProject[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return FirebaseProject[] */
  public function getResults()
  {
    return $this->results;
  }
}

class ListIosAppsResponse extends \Google\Collection
{
  /** @var IosApp[] */
  public $apps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apps';
  protected $appsType = IosApp::class;
  protected $appsDataType = 'array';
  /** @param IosApp[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return IosApp[] */
  public function getApps()
  {
    return $this->apps;
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

class ListShaCertificatesResponse extends \Google\Collection
{
  /** @var ShaCertificate[] */
  public $certificates;
  protected $collection_key = 'certificates';
  protected $certificatesType = ShaCertificate::class;
  protected $certificatesDataType = 'array';
  /** @param ShaCertificate[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return ShaCertificate[] */
  public function getCertificates()
  {
    return $this->certificates;
  }
}

class ListWebAppsResponse extends \Google\Collection
{
  /** @var WebApp[] */
  public $apps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apps';
  protected $appsType = WebApp::class;
  protected $appsDataType = 'array';
  /** @param WebApp[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return WebApp[] */
  public function getApps()
  {
    return $this->apps;
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

class Location extends \Google\Collection
{
  /** @var string[] */
  public $features;
  /** @var string */
  public $locationId;
  /** @var string */
  public $type;
  protected $collection_key = 'features';
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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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

class MessageSet extends \Google\Model
{
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

class ProjectInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $locationId;
  /** @var string */
  public $project;

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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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

class RemoveAnalyticsRequest extends \Google\Model
{
  /** @var string */
  public $analyticsPropertyId;

  /** @param string */
  public function setAnalyticsPropertyId($analyticsPropertyId)
  {
    $this->analyticsPropertyId = $analyticsPropertyId;
  }
  /** @return string */
  public function getAnalyticsPropertyId()
  {
    return $this->analyticsPropertyId;
  }
}

class RemoveAndroidAppRequest extends \Google\Model
{
  /** @var bool */
  public $allowMissing;
  /** @var string */
  public $etag;
  /** @var bool */
  public $immediate;
  /** @var bool */
  public $validateOnly;

  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
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
  public function setImmediate($immediate)
  {
    $this->immediate = $immediate;
  }
  /** @return bool */
  public function getImmediate()
  {
    return $this->immediate;
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

class RemoveIosAppRequest extends \Google\Model
{
  /** @var bool */
  public $allowMissing;
  /** @var string */
  public $etag;
  /** @var bool */
  public $immediate;
  /** @var bool */
  public $validateOnly;

  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
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
  public function setImmediate($immediate)
  {
    $this->immediate = $immediate;
  }
  /** @return bool */
  public function getImmediate()
  {
    return $this->immediate;
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

class RemoveWebAppRequest extends \Google\Model
{
  /** @var bool */
  public $allowMissing;
  /** @var string */
  public $etag;
  /** @var bool */
  public $immediate;
  /** @var bool */
  public $validateOnly;

  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
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
  public function setImmediate($immediate)
  {
    $this->immediate = $immediate;
  }
  /** @return bool */
  public function getImmediate()
  {
    return $this->immediate;
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

class SearchFirebaseAppsResponse extends \Google\Collection
{
  /** @var FirebaseAppInfo[] */
  public $apps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apps';
  protected $appsType = FirebaseAppInfo::class;
  protected $appsDataType = 'array';
  /** @param FirebaseAppInfo[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return FirebaseAppInfo[] */
  public function getApps()
  {
    return $this->apps;
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

class ShaCertificate extends \Google\Model
{
  /** @var string */
  public $certType;
  /** @var string */
  public $name;
  /** @var string */
  public $shaHash;

  /** @param string */
  public function setCertType($certType)
  {
    $this->certType = $certType;
  }
  /** @return string */
  public function getCertType()
  {
    return $this->certType;
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
  public function setShaHash($shaHash)
  {
    $this->shaHash = $shaHash;
  }
  /** @return string */
  public function getShaHash()
  {
    return $this->shaHash;
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

class StatusProto extends \Google\Model
{
  /** @var int */
  public $canonicalCode;
  /** @var int */
  public $code;
  /** @var string */
  public $message;
  /** @var MessageSet */
  public $messageSet;
  /** @var string */
  public $space;
  protected $messageSetType = MessageSet::class;
  protected $messageSetDataType = '';
  /** @param int */
  public function setCanonicalCode($canonicalCode)
  {
    $this->canonicalCode = $canonicalCode;
  }
  /** @return int */
  public function getCanonicalCode()
  {
    return $this->canonicalCode;
  }
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
  /** @param MessageSet */
  public function setMessageSet(MessageSet $messageSet)
  {
    $this->messageSet = $messageSet;
  }
  /** @return MessageSet */
  public function getMessageSet()
  {
    return $this->messageSet;
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

class StreamMapping extends \Google\Model
{
  /** @var string */
  public $app;
  /** @var string */
  public $measurementId;
  /** @var string */
  public $streamId;

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
  public function setMeasurementId($measurementId)
  {
    $this->measurementId = $measurementId;
  }
  /** @return string */
  public function getMeasurementId()
  {
    return $this->measurementId;
  }
  /** @param string */
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /** @return string */
  public function getStreamId()
  {
    return $this->streamId;
  }
}

class UndeleteAndroidAppRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $validateOnly;

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

class UndeleteIosAppRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $validateOnly;

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

class UndeleteWebAppRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $validateOnly;

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

class WebApp extends \Google\Collection
{
  /** @var string */
  public $apiKeyId;
  /** @var string */
  public $appId;
  /** @var string[] */
  public $appUrls;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $state;
  /** @var string */
  public $webId;
  protected $collection_key = 'appUrls';
  /** @param string */
  public function setApiKeyId($apiKeyId)
  {
    $this->apiKeyId = $apiKeyId;
  }
  /** @return string */
  public function getApiKeyId()
  {
    return $this->apiKeyId;
  }
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
  /** @param string[] */
  public function setAppUrls($appUrls)
  {
    $this->appUrls = $appUrls;
  }
  /** @return string[] */
  public function getAppUrls()
  {
    return $this->appUrls;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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
  public function setWebId($webId)
  {
    $this->webId = $webId;
  }
  /** @return string */
  public function getWebId()
  {
    return $this->webId;
  }
}

class WebAppConfig extends \Google\Model
{
  /** @var string */
  public $apiKey;
  /** @var string */
  public $appId;
  /** @var string */
  public $authDomain;
  /** @var string */
  public $databaseURL;
  /** @var string */
  public $locationId;
  /** @var string */
  public $measurementId;
  /** @var string */
  public $messagingSenderId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $storageBucket;

  /** @param string */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /** @return string */
  public function getApiKey()
  {
    return $this->apiKey;
  }
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
  /** @param string */
  public function setAuthDomain($authDomain)
  {
    $this->authDomain = $authDomain;
  }
  /** @return string */
  public function getAuthDomain()
  {
    return $this->authDomain;
  }
  /** @param string */
  public function setDatabaseURL($databaseURL)
  {
    $this->databaseURL = $databaseURL;
  }
  /** @return string */
  public function getDatabaseURL()
  {
    return $this->databaseURL;
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
  /** @param string */
  public function setMeasurementId($measurementId)
  {
    $this->measurementId = $measurementId;
  }
  /** @return string */
  public function getMeasurementId()
  {
    return $this->measurementId;
  }
  /** @param string */
  public function setMessagingSenderId($messagingSenderId)
  {
    $this->messagingSenderId = $messagingSenderId;
  }
  /** @return string */
  public function getMessagingSenderId()
  {
    return $this->messagingSenderId;
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
  /** @param string */
  public function setStorageBucket($storageBucket)
  {
    $this->storageBucket = $storageBucket;
  }
  /** @return string */
  public function getStorageBucket()
  {
    return $this->storageBucket;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddFirebaseRequest::class, 'Google_Service_FirebaseManagement_AddFirebaseRequest');
class_alias(AddGoogleAnalyticsRequest::class, 'Google_Service_FirebaseManagement_AddGoogleAnalyticsRequest');
class_alias(AdminSdkConfig::class, 'Google_Service_FirebaseManagement_AdminSdkConfig');
class_alias(AnalyticsDetails::class, 'Google_Service_FirebaseManagement_AnalyticsDetails');
class_alias(AnalyticsProperty::class, 'Google_Service_FirebaseManagement_AnalyticsProperty');
class_alias(AndroidApp::class, 'Google_Service_FirebaseManagement_AndroidApp');
class_alias(AndroidAppConfig::class, 'Google_Service_FirebaseManagement_AndroidAppConfig');
class_alias(DefaultResources::class, 'Google_Service_FirebaseManagement_DefaultResources');
class_alias(FinalizeDefaultLocationRequest::class, 'Google_Service_FirebaseManagement_FinalizeDefaultLocationRequest');
class_alias(FirebaseAppInfo::class, 'Google_Service_FirebaseManagement_FirebaseAppInfo');
class_alias(FirebaseEmpty::class, 'Google_Service_FirebaseManagement_FirebaseEmpty');
class_alias(FirebaseProject::class, 'Google_Service_FirebaseManagement_FirebaseProject');
class_alias(IosApp::class, 'Google_Service_FirebaseManagement_IosApp');
class_alias(IosAppConfig::class, 'Google_Service_FirebaseManagement_IosAppConfig');
class_alias(ListAndroidAppsResponse::class, 'Google_Service_FirebaseManagement_ListAndroidAppsResponse');
class_alias(ListAvailableLocationsResponse::class, 'Google_Service_FirebaseManagement_ListAvailableLocationsResponse');
class_alias(ListAvailableProjectsResponse::class, 'Google_Service_FirebaseManagement_ListAvailableProjectsResponse');
class_alias(ListFirebaseProjectsResponse::class, 'Google_Service_FirebaseManagement_ListFirebaseProjectsResponse');
class_alias(ListIosAppsResponse::class, 'Google_Service_FirebaseManagement_ListIosAppsResponse');
class_alias(ListShaCertificatesResponse::class, 'Google_Service_FirebaseManagement_ListShaCertificatesResponse');
class_alias(ListWebAppsResponse::class, 'Google_Service_FirebaseManagement_ListWebAppsResponse');
class_alias(Location::class, 'Google_Service_FirebaseManagement_Location');
class_alias(MessageSet::class, 'Google_Service_FirebaseManagement_MessageSet');
class_alias(Operation::class, 'Google_Service_FirebaseManagement_Operation');
class_alias(ProjectInfo::class, 'Google_Service_FirebaseManagement_ProjectInfo');
class_alias(RemoveAnalyticsRequest::class, 'Google_Service_FirebaseManagement_RemoveAnalyticsRequest');
class_alias(RemoveAndroidAppRequest::class, 'Google_Service_FirebaseManagement_RemoveAndroidAppRequest');
class_alias(RemoveIosAppRequest::class, 'Google_Service_FirebaseManagement_RemoveIosAppRequest');
class_alias(RemoveWebAppRequest::class, 'Google_Service_FirebaseManagement_RemoveWebAppRequest');
class_alias(SearchFirebaseAppsResponse::class, 'Google_Service_FirebaseManagement_SearchFirebaseAppsResponse');
class_alias(ShaCertificate::class, 'Google_Service_FirebaseManagement_ShaCertificate');
class_alias(Status::class, 'Google_Service_FirebaseManagement_Status');
class_alias(StatusProto::class, 'Google_Service_FirebaseManagement_StatusProto');
class_alias(StreamMapping::class, 'Google_Service_FirebaseManagement_StreamMapping');
class_alias(UndeleteAndroidAppRequest::class, 'Google_Service_FirebaseManagement_UndeleteAndroidAppRequest');
class_alias(UndeleteIosAppRequest::class, 'Google_Service_FirebaseManagement_UndeleteIosAppRequest');
class_alias(UndeleteWebAppRequest::class, 'Google_Service_FirebaseManagement_UndeleteWebAppRequest');
class_alias(WebApp::class, 'Google_Service_FirebaseManagement_WebApp');
class_alias(WebAppConfig::class, 'Google_Service_FirebaseManagement_WebAppConfig');
