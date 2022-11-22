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

namespace Google\Service\ArtifactRegistry;

class AptArtifact extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $component;
  /** @var string */
  public $controlFile;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $packageType;

  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /** @param string */
  public function setComponent($component)
  {
    $this->component = $component;
  }
  /** @return string */
  public function getComponent()
  {
    return $this->component;
  }
  /** @param string */
  public function setControlFile($controlFile)
  {
    $this->controlFile = $controlFile;
  }
  /** @return string */
  public function getControlFile()
  {
    return $this->controlFile;
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
  public function setPackageType($packageType)
  {
    $this->packageType = $packageType;
  }
  /** @return string */
  public function getPackageType()
  {
    return $this->packageType;
  }
}

class ArtifactregistryEmpty extends \Google\Model
{
}

class BatchDeleteVersionsMetadata extends \Google\Collection
{
  /** @var string[] */
  public $failedVersions;
  protected $collection_key = 'failedVersions';
  /** @param string[] */
  public function setFailedVersions($failedVersions)
  {
    $this->failedVersions = $failedVersions;
  }
  /** @return string[] */
  public function getFailedVersions()
  {
    return $this->failedVersions;
  }
}

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

class DockerImage extends \Google\Collection
{
  /** @var string */
  public $buildTime;
  /** @var string */
  public $imageSizeBytes;
  /** @var string */
  public $mediaType;
  /** @var string */
  public $name;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uploadTime;
  /** @var string */
  public $uri;
  protected $collection_key = 'tags';
  /** @param string */
  public function setBuildTime($buildTime)
  {
    $this->buildTime = $buildTime;
  }
  /** @return string */
  public function getBuildTime()
  {
    return $this->buildTime;
  }
  /** @param string */
  public function setImageSizeBytes($imageSizeBytes)
  {
    $this->imageSizeBytes = $imageSizeBytes;
  }
  /** @return string */
  public function getImageSizeBytes()
  {
    return $this->imageSizeBytes;
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
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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
  /** @param string */
  public function setUploadTime($uploadTime)
  {
    $this->uploadTime = $uploadTime;
  }
  /** @return string */
  public function getUploadTime()
  {
    return $this->uploadTime;
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

class GoogleDevtoolsArtifactregistryV1File extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var Hash[] */
  public $hashes;
  /** @var string */
  public $name;
  /** @var string */
  public $owner;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'hashes';
  protected $hashesType = Hash::class;
  protected $hashesDataType = 'array';
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
  /** @param Hash[] */
  public function setHashes($hashes)
  {
    $this->hashes = $hashes;
  }
  /** @return Hash[] */
  public function getHashes()
  {
    return $this->hashes;
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
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /** @return string */
  public function getOwner()
  {
    return $this->owner;
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

class Hash extends \Google\Model
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

class ImportAptArtifactsErrorInfo extends \Google\Model
{
  /** @var Status */
  public $error;
  /** @var ImportAptArtifactsGcsSource */
  public $gcsSource;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $gcsSourceType = ImportAptArtifactsGcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param ImportAptArtifactsGcsSource */
  public function setGcsSource(ImportAptArtifactsGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return ImportAptArtifactsGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportAptArtifactsGcsSource extends \Google\Collection
{
  /** @var string[] */
  public $uris;
  /** @var bool */
  public $useWildcards;
  protected $collection_key = 'uris';
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
  /** @param bool */
  public function setUseWildcards($useWildcards)
  {
    $this->useWildcards = $useWildcards;
  }
  /** @return bool */
  public function getUseWildcards()
  {
    return $this->useWildcards;
  }
}

class ImportAptArtifactsMetadata extends \Google\Model
{
}

class ImportAptArtifactsRequest extends \Google\Model
{
  /** @var ImportAptArtifactsGcsSource */
  public $gcsSource;
  protected $gcsSourceType = ImportAptArtifactsGcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param ImportAptArtifactsGcsSource */
  public function setGcsSource(ImportAptArtifactsGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return ImportAptArtifactsGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportAptArtifactsResponse extends \Google\Collection
{
  /** @var AptArtifact[] */
  public $aptArtifacts;
  /** @var ImportAptArtifactsErrorInfo[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $aptArtifactsType = AptArtifact::class;
  protected $aptArtifactsDataType = 'array';
  protected $errorsType = ImportAptArtifactsErrorInfo::class;
  protected $errorsDataType = 'array';
  /** @param AptArtifact[] */
  public function setAptArtifacts($aptArtifacts)
  {
    $this->aptArtifacts = $aptArtifacts;
  }
  /** @return AptArtifact[] */
  public function getAptArtifacts()
  {
    return $this->aptArtifacts;
  }
  /** @param ImportAptArtifactsErrorInfo[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ImportAptArtifactsErrorInfo[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class ImportYumArtifactsErrorInfo extends \Google\Model
{
  /** @var Status */
  public $error;
  /** @var ImportYumArtifactsGcsSource */
  public $gcsSource;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $gcsSourceType = ImportYumArtifactsGcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param ImportYumArtifactsGcsSource */
  public function setGcsSource(ImportYumArtifactsGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return ImportYumArtifactsGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportYumArtifactsGcsSource extends \Google\Collection
{
  /** @var string[] */
  public $uris;
  /** @var bool */
  public $useWildcards;
  protected $collection_key = 'uris';
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
  /** @param bool */
  public function setUseWildcards($useWildcards)
  {
    $this->useWildcards = $useWildcards;
  }
  /** @return bool */
  public function getUseWildcards()
  {
    return $this->useWildcards;
  }
}

class ImportYumArtifactsMetadata extends \Google\Model
{
}

class ImportYumArtifactsRequest extends \Google\Model
{
  /** @var ImportYumArtifactsGcsSource */
  public $gcsSource;
  protected $gcsSourceType = ImportYumArtifactsGcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param ImportYumArtifactsGcsSource */
  public function setGcsSource(ImportYumArtifactsGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return ImportYumArtifactsGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportYumArtifactsResponse extends \Google\Collection
{
  /** @var ImportYumArtifactsErrorInfo[] */
  public $errors;
  /** @var YumArtifact[] */
  public $yumArtifacts;
  protected $collection_key = 'yumArtifacts';
  protected $errorsType = ImportYumArtifactsErrorInfo::class;
  protected $errorsDataType = 'array';
  protected $yumArtifactsType = YumArtifact::class;
  protected $yumArtifactsDataType = 'array';
  /** @param ImportYumArtifactsErrorInfo[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ImportYumArtifactsErrorInfo[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param YumArtifact[] */
  public function setYumArtifacts($yumArtifacts)
  {
    $this->yumArtifacts = $yumArtifacts;
  }
  /** @return YumArtifact[] */
  public function getYumArtifacts()
  {
    return $this->yumArtifacts;
  }
}

class KfpArtifact extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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

class ListDockerImagesResponse extends \Google\Collection
{
  /** @var DockerImage[] */
  public $dockerImages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dockerImages';
  protected $dockerImagesType = DockerImage::class;
  protected $dockerImagesDataType = 'array';
  /** @param DockerImage[] */
  public function setDockerImages($dockerImages)
  {
    $this->dockerImages = $dockerImages;
  }
  /** @return DockerImage[] */
  public function getDockerImages()
  {
    return $this->dockerImages;
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

class ListFilesResponse extends \Google\Collection
{
  /** @var GoogleDevtoolsArtifactregistryV1File[] */
  public $files;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'files';
  protected $filesType = GoogleDevtoolsArtifactregistryV1File::class;
  protected $filesDataType = 'array';
  /** @param GoogleDevtoolsArtifactregistryV1File[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return GoogleDevtoolsArtifactregistryV1File[] */
  public function getFiles()
  {
    return $this->files;
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

class ListMavenArtifactsResponse extends \Google\Collection
{
  /** @var MavenArtifact[] */
  public $mavenArtifacts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'mavenArtifacts';
  protected $mavenArtifactsType = MavenArtifact::class;
  protected $mavenArtifactsDataType = 'array';
  /** @param MavenArtifact[] */
  public function setMavenArtifacts($mavenArtifacts)
  {
    $this->mavenArtifacts = $mavenArtifacts;
  }
  /** @return MavenArtifact[] */
  public function getMavenArtifacts()
  {
    return $this->mavenArtifacts;
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

class ListNpmPackagesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var NpmPackage[] */
  public $npmPackages;
  protected $collection_key = 'npmPackages';
  protected $npmPackagesType = NpmPackage::class;
  protected $npmPackagesDataType = 'array';
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
  /** @param NpmPackage[] */
  public function setNpmPackages($npmPackages)
  {
    $this->npmPackages = $npmPackages;
  }
  /** @return NpmPackage[] */
  public function getNpmPackages()
  {
    return $this->npmPackages;
  }
}

class ListPackagesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Package[] */
  public $packages;
  protected $collection_key = 'packages';
  protected $packagesType = Package::class;
  protected $packagesDataType = 'array';
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
  /** @param Package[] */
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  /** @return Package[] */
  public function getPackages()
  {
    return $this->packages;
  }
}

class ListPythonPackagesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PythonPackage[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
  protected $pythonPackagesType = PythonPackage::class;
  protected $pythonPackagesDataType = 'array';
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
  /** @param PythonPackage[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return PythonPackage[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class ListRepositoriesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Repository[] */
  public $repositories;
  protected $collection_key = 'repositories';
  protected $repositoriesType = Repository::class;
  protected $repositoriesDataType = 'array';
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
  /** @param Repository[] */
  public function setRepositories($repositories)
  {
    $this->repositories = $repositories;
  }
  /** @return Repository[] */
  public function getRepositories()
  {
    return $this->repositories;
  }
}

class ListTagsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Tag[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $tagsType = Tag::class;
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
  /** @param Tag[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return Tag[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = Version::class;
  protected $versionsDataType = 'array';
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
  /** @param Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return Version[] */
  public function getVersions()
  {
    return $this->versions;
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

class MavenArtifact extends \Google\Model
{
  /** @var string */
  public $artifactId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $groupId;
  /** @var string */
  public $name;
  /** @var string */
  public $pomUri;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;

  /** @param string */
  public function setArtifactId($artifactId)
  {
    $this->artifactId = $artifactId;
  }
  /** @return string */
  public function getArtifactId()
  {
    return $this->artifactId;
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
  public function setPomUri($pomUri)
  {
    $this->pomUri = $pomUri;
  }
  /** @return string */
  public function getPomUri()
  {
    return $this->pomUri;
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

class MavenRepositoryConfig extends \Google\Model
{
  /** @var bool */
  public $allowSnapshotOverwrites;
  /** @var string */
  public $versionPolicy;

  /** @param bool */
  public function setAllowSnapshotOverwrites($allowSnapshotOverwrites)
  {
    $this->allowSnapshotOverwrites = $allowSnapshotOverwrites;
  }
  /** @return bool */
  public function getAllowSnapshotOverwrites()
  {
    return $this->allowSnapshotOverwrites;
  }
  /** @param string */
  public function setVersionPolicy($versionPolicy)
  {
    $this->versionPolicy = $versionPolicy;
  }
  /** @return string */
  public function getVersionPolicy()
  {
    return $this->versionPolicy;
  }
}

class NpmPackage extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;
  protected $collection_key = 'tags';
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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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
}

class Package extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
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

class ProjectSettings extends \Google\Model
{
  /** @var string */
  public $legacyRedirectionState;
  /** @var string */
  public $name;

  /** @param string */
  public function setLegacyRedirectionState($legacyRedirectionState)
  {
    $this->legacyRedirectionState = $legacyRedirectionState;
  }
  /** @return string */
  public function getLegacyRedirectionState()
  {
    return $this->legacyRedirectionState;
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

class PythonPackage extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uri;
  /** @var string */
  public $version;

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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
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

class Repository extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $format;
  /** @var string */
  public $kmsKeyName;
  /** @var string[] */
  public $labels;
  /** @var MavenRepositoryConfig */
  public $mavenConfig;
  /** @var string */
  public $name;
  /** @var bool */
  public $satisfiesPzs;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $updateTime;
  protected $mavenConfigType = MavenRepositoryConfig::class;
  protected $mavenConfigDataType = '';
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
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
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
  /** @param MavenRepositoryConfig */
  public function setMavenConfig(MavenRepositoryConfig $mavenConfig)
  {
    $this->mavenConfig = $mavenConfig;
  }
  /** @return MavenRepositoryConfig */
  public function getMavenConfig()
  {
    return $this->mavenConfig;
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
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /** @return bool */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
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

class Tag extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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

class UploadAptArtifactMediaResponse extends \Google\Model
{
  /** @var Operation */
  public $operation;
  protected $operationType = Operation::class;
  protected $operationDataType = '';
  /** @param Operation */
  public function setOperation(Operation $operation)
  {
    $this->operation = $operation;
  }
  /** @return Operation */
  public function getOperation()
  {
    return $this->operation;
  }
}

class UploadAptArtifactMetadata extends \Google\Model
{
}

class UploadAptArtifactRequest extends \Google\Model
{
}

class UploadAptArtifactResponse extends \Google\Collection
{
  /** @var AptArtifact[] */
  public $aptArtifacts;
  protected $collection_key = 'aptArtifacts';
  protected $aptArtifactsType = AptArtifact::class;
  protected $aptArtifactsDataType = 'array';
  /** @param AptArtifact[] */
  public function setAptArtifacts($aptArtifacts)
  {
    $this->aptArtifacts = $aptArtifacts;
  }
  /** @return AptArtifact[] */
  public function getAptArtifacts()
  {
    return $this->aptArtifacts;
  }
}

class UploadKfpArtifactMediaResponse extends \Google\Model
{
  /** @var Operation */
  public $operation;
  protected $operationType = Operation::class;
  protected $operationDataType = '';
  /** @param Operation */
  public function setOperation(Operation $operation)
  {
    $this->operation = $operation;
  }
  /** @return Operation */
  public function getOperation()
  {
    return $this->operation;
  }
}

class UploadKfpArtifactMetadata extends \Google\Model
{
}

class UploadKfpArtifactRequest extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
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
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class UploadYumArtifactMediaResponse extends \Google\Model
{
  /** @var Operation */
  public $operation;
  protected $operationType = Operation::class;
  protected $operationDataType = '';
  /** @param Operation */
  public function setOperation(Operation $operation)
  {
    $this->operation = $operation;
  }
  /** @return Operation */
  public function getOperation()
  {
    return $this->operation;
  }
}

class UploadYumArtifactMetadata extends \Google\Model
{
}

class UploadYumArtifactRequest extends \Google\Model
{
}

class UploadYumArtifactResponse extends \Google\Collection
{
  /** @var YumArtifact[] */
  public $yumArtifacts;
  protected $collection_key = 'yumArtifacts';
  protected $yumArtifactsType = YumArtifact::class;
  protected $yumArtifactsDataType = 'array';
  /** @param YumArtifact[] */
  public function setYumArtifacts($yumArtifacts)
  {
    $this->yumArtifacts = $yumArtifacts;
  }
  /** @return YumArtifact[] */
  public function getYumArtifacts()
  {
    return $this->yumArtifacts;
  }
}

class Version extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var Tag[] */
  public $relatedTags;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'relatedTags';
  protected $relatedTagsType = Tag::class;
  protected $relatedTagsDataType = 'array';
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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
  /** @param Tag[] */
  public function setRelatedTags($relatedTags)
  {
    $this->relatedTags = $relatedTags;
  }
  /** @return Tag[] */
  public function getRelatedTags()
  {
    return $this->relatedTags;
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

class YumArtifact extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $packageType;

  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
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
  public function setPackageType($packageType)
  {
    $this->packageType = $packageType;
  }
  /** @return string */
  public function getPackageType()
  {
    return $this->packageType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AptArtifact::class, 'Google_Service_ArtifactRegistry_AptArtifact');
class_alias(ArtifactregistryEmpty::class, 'Google_Service_ArtifactRegistry_ArtifactregistryEmpty');
class_alias(BatchDeleteVersionsMetadata::class, 'Google_Service_ArtifactRegistry_BatchDeleteVersionsMetadata');
class_alias(Binding::class, 'Google_Service_ArtifactRegistry_Binding');
class_alias(DockerImage::class, 'Google_Service_ArtifactRegistry_DockerImage');
class_alias(Expr::class, 'Google_Service_ArtifactRegistry_Expr');
class_alias(GoogleDevtoolsArtifactregistryV1File::class, 'Google_Service_ArtifactRegistry_GoogleDevtoolsArtifactregistryV1File');
class_alias(Hash::class, 'Google_Service_ArtifactRegistry_Hash');
class_alias(ImportAptArtifactsErrorInfo::class, 'Google_Service_ArtifactRegistry_ImportAptArtifactsErrorInfo');
class_alias(ImportAptArtifactsGcsSource::class, 'Google_Service_ArtifactRegistry_ImportAptArtifactsGcsSource');
class_alias(ImportAptArtifactsMetadata::class, 'Google_Service_ArtifactRegistry_ImportAptArtifactsMetadata');
class_alias(ImportAptArtifactsRequest::class, 'Google_Service_ArtifactRegistry_ImportAptArtifactsRequest');
class_alias(ImportAptArtifactsResponse::class, 'Google_Service_ArtifactRegistry_ImportAptArtifactsResponse');
class_alias(ImportYumArtifactsErrorInfo::class, 'Google_Service_ArtifactRegistry_ImportYumArtifactsErrorInfo');
class_alias(ImportYumArtifactsGcsSource::class, 'Google_Service_ArtifactRegistry_ImportYumArtifactsGcsSource');
class_alias(ImportYumArtifactsMetadata::class, 'Google_Service_ArtifactRegistry_ImportYumArtifactsMetadata');
class_alias(ImportYumArtifactsRequest::class, 'Google_Service_ArtifactRegistry_ImportYumArtifactsRequest');
class_alias(ImportYumArtifactsResponse::class, 'Google_Service_ArtifactRegistry_ImportYumArtifactsResponse');
class_alias(KfpArtifact::class, 'Google_Service_ArtifactRegistry_KfpArtifact');
class_alias(ListDockerImagesResponse::class, 'Google_Service_ArtifactRegistry_ListDockerImagesResponse');
class_alias(ListFilesResponse::class, 'Google_Service_ArtifactRegistry_ListFilesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_ArtifactRegistry_ListLocationsResponse');
class_alias(ListMavenArtifactsResponse::class, 'Google_Service_ArtifactRegistry_ListMavenArtifactsResponse');
class_alias(ListNpmPackagesResponse::class, 'Google_Service_ArtifactRegistry_ListNpmPackagesResponse');
class_alias(ListPackagesResponse::class, 'Google_Service_ArtifactRegistry_ListPackagesResponse');
class_alias(ListPythonPackagesResponse::class, 'Google_Service_ArtifactRegistry_ListPythonPackagesResponse');
class_alias(ListRepositoriesResponse::class, 'Google_Service_ArtifactRegistry_ListRepositoriesResponse');
class_alias(ListTagsResponse::class, 'Google_Service_ArtifactRegistry_ListTagsResponse');
class_alias(ListVersionsResponse::class, 'Google_Service_ArtifactRegistry_ListVersionsResponse');
class_alias(Location::class, 'Google_Service_ArtifactRegistry_Location');
class_alias(MavenArtifact::class, 'Google_Service_ArtifactRegistry_MavenArtifact');
class_alias(MavenRepositoryConfig::class, 'Google_Service_ArtifactRegistry_MavenRepositoryConfig');
class_alias(NpmPackage::class, 'Google_Service_ArtifactRegistry_NpmPackage');
class_alias(Operation::class, 'Google_Service_ArtifactRegistry_Operation');
class_alias(OperationMetadata::class, 'Google_Service_ArtifactRegistry_OperationMetadata');
class_alias(Package::class, 'Google_Service_ArtifactRegistry_Package');
class_alias(Policy::class, 'Google_Service_ArtifactRegistry_Policy');
class_alias(ProjectSettings::class, 'Google_Service_ArtifactRegistry_ProjectSettings');
class_alias(PythonPackage::class, 'Google_Service_ArtifactRegistry_PythonPackage');
class_alias(Repository::class, 'Google_Service_ArtifactRegistry_Repository');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ArtifactRegistry_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_ArtifactRegistry_Status');
class_alias(Tag::class, 'Google_Service_ArtifactRegistry_Tag');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ArtifactRegistry_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ArtifactRegistry_TestIamPermissionsResponse');
class_alias(UploadAptArtifactMediaResponse::class, 'Google_Service_ArtifactRegistry_UploadAptArtifactMediaResponse');
class_alias(UploadAptArtifactMetadata::class, 'Google_Service_ArtifactRegistry_UploadAptArtifactMetadata');
class_alias(UploadAptArtifactRequest::class, 'Google_Service_ArtifactRegistry_UploadAptArtifactRequest');
class_alias(UploadAptArtifactResponse::class, 'Google_Service_ArtifactRegistry_UploadAptArtifactResponse');
class_alias(UploadKfpArtifactMediaResponse::class, 'Google_Service_ArtifactRegistry_UploadKfpArtifactMediaResponse');
class_alias(UploadKfpArtifactMetadata::class, 'Google_Service_ArtifactRegistry_UploadKfpArtifactMetadata');
class_alias(UploadKfpArtifactRequest::class, 'Google_Service_ArtifactRegistry_UploadKfpArtifactRequest');
class_alias(UploadYumArtifactMediaResponse::class, 'Google_Service_ArtifactRegistry_UploadYumArtifactMediaResponse');
class_alias(UploadYumArtifactMetadata::class, 'Google_Service_ArtifactRegistry_UploadYumArtifactMetadata');
class_alias(UploadYumArtifactRequest::class, 'Google_Service_ArtifactRegistry_UploadYumArtifactRequest');
class_alias(UploadYumArtifactResponse::class, 'Google_Service_ArtifactRegistry_UploadYumArtifactResponse');
class_alias(Version::class, 'Google_Service_ArtifactRegistry_Version');
class_alias(YumArtifact::class, 'Google_Service_ArtifactRegistry_YumArtifact');
