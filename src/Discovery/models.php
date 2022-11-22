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

namespace Google\Service\Discovery;

class DirectoryList extends \Google\Collection
{
  /** @var string */
  public $discoveryVersion;
  /** @var DirectoryListItems[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = DirectoryListItems::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setDiscoveryVersion($discoveryVersion)
  {
    $this->discoveryVersion = $discoveryVersion;
  }
  /** @return string */
  public function getDiscoveryVersion()
  {
    return $this->discoveryVersion;
  }
  /** @param DirectoryListItems[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return DirectoryListItems[] */
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
}

class DirectoryListItems extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $discoveryLink;
  /** @var string */
  public $discoveryRestUrl;
  /** @var string */
  public $documentationLink;
  /** @var DirectoryListItemsIcons */
  public $icons;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var bool */
  public $preferred;
  /** @var string */
  public $title;
  /** @var string */
  public $version;
  protected $collection_key = 'labels';
  protected $iconsType = DirectoryListItemsIcons::class;
  protected $iconsDataType = '';
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
  public function setDiscoveryLink($discoveryLink)
  {
    $this->discoveryLink = $discoveryLink;
  }
  /** @return string */
  public function getDiscoveryLink()
  {
    return $this->discoveryLink;
  }
  /** @param string */
  public function setDiscoveryRestUrl($discoveryRestUrl)
  {
    $this->discoveryRestUrl = $discoveryRestUrl;
  }
  /** @return string */
  public function getDiscoveryRestUrl()
  {
    return $this->discoveryRestUrl;
  }
  /** @param string */
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  /** @return string */
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  /** @param DirectoryListItemsIcons */
  public function setIcons(DirectoryListItemsIcons $icons)
  {
    $this->icons = $icons;
  }
  /** @return DirectoryListItemsIcons */
  public function getIcons()
  {
    return $this->icons;
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
  /** @param bool */
  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
  /** @return bool */
  public function getPreferred()
  {
    return $this->preferred;
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

class DirectoryListItemsIcons extends \Google\Model
{
  /** @var string */
  public $x16;
  /** @var string */
  public $x32;

  /** @param string */
  public function setX16($x16)
  {
    $this->x16 = $x16;
  }
  /** @return string */
  public function getX16()
  {
    return $this->x16;
  }
  /** @param string */
  public function setX32($x32)
  {
    $this->x32 = $x32;
  }
  /** @return string */
  public function getX32()
  {
    return $this->x32;
  }
}

class JsonSchema extends \Google\Collection
{
  /** @var string */
  public $ref;
  /** @var JsonSchema */
  public $additionalProperties;
  /** @var JsonSchemaAnnotations */
  public $annotations;
  /** @var string */
  public $default;
  /** @var string */
  public $description;
  /** @var string[] */
  public $enum;
  /** @var string[] */
  public $enumDescriptions;
  /** @var string */
  public $format;
  /** @var string */
  public $id;
  /** @var JsonSchema */
  public $items;
  /** @var string */
  public $location;
  /** @var string */
  public $maximum;
  /** @var string */
  public $minimum;
  /** @var string */
  public $pattern;
  /** @var JsonSchema[] */
  public $properties;
  /** @var bool */
  public $readOnly;
  /** @var bool */
  public $repeated;
  /** @var bool */
  public $required;
  /** @var string */
  public $type;
  /** @var JsonSchemaVariant */
  public $variant;
  protected $collection_key = 'enumDescriptions';
  protected $internal_gapi_mappings = [
        "ref" => "$ref",
  ];
  protected $additionalPropertiesType = JsonSchema::class;
  protected $additionalPropertiesDataType = '';
  protected $annotationsType = JsonSchemaAnnotations::class;
  protected $annotationsDataType = '';
  protected $itemsType = JsonSchema::class;
  protected $itemsDataType = '';
  protected $propertiesType = JsonSchema::class;
  protected $propertiesDataType = 'map';
  protected $variantType = JsonSchemaVariant::class;
  protected $variantDataType = '';
  /** @param string */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /** @return string */
  public function getRef()
  {
    return $this->ref;
  }
  /** @param JsonSchema */
  public function setAdditionalProperties(JsonSchema $additionalProperties)
  {
    $this->additionalProperties = $additionalProperties;
  }
  /** @return JsonSchema */
  public function getAdditionalProperties()
  {
    return $this->additionalProperties;
  }
  /** @param JsonSchemaAnnotations */
  public function setAnnotations(JsonSchemaAnnotations $annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return JsonSchemaAnnotations */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param string */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /** @return string */
  public function getDefault()
  {
    return $this->default;
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
  /** @param string[] */
  public function setEnum($enum)
  {
    $this->enum = $enum;
  }
  /** @return string[] */
  public function getEnum()
  {
    return $this->enum;
  }
  /** @param string[] */
  public function setEnumDescriptions($enumDescriptions)
  {
    $this->enumDescriptions = $enumDescriptions;
  }
  /** @return string[] */
  public function getEnumDescriptions()
  {
    return $this->enumDescriptions;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param JsonSchema */
  public function setItems(JsonSchema $items)
  {
    $this->items = $items;
  }
  /** @return JsonSchema */
  public function getItems()
  {
    return $this->items;
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
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  /** @return string */
  public function getMaximum()
  {
    return $this->maximum;
  }
  /** @param string */
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  /** @return string */
  public function getMinimum()
  {
    return $this->minimum;
  }
  /** @param string */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /** @return string */
  public function getPattern()
  {
    return $this->pattern;
  }
  /** @param JsonSchema[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return JsonSchema[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param bool */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return bool */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /** @param bool */
  public function setRepeated($repeated)
  {
    $this->repeated = $repeated;
  }
  /** @return bool */
  public function getRepeated()
  {
    return $this->repeated;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
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
  /** @param JsonSchemaVariant */
  public function setVariant(JsonSchemaVariant $variant)
  {
    $this->variant = $variant;
  }
  /** @return JsonSchemaVariant */
  public function getVariant()
  {
    return $this->variant;
  }
}

class JsonSchemaAnnotations extends \Google\Collection
{
  /** @var string[] */
  public $required;
  protected $collection_key = 'required';
  /** @param string[] */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return string[] */
  public function getRequired()
  {
    return $this->required;
  }
}

class JsonSchemaVariant extends \Google\Collection
{
  /** @var string */
  public $discriminant;
  /** @var JsonSchemaVariantMap[] */
  public $map;
  protected $collection_key = 'map';
  protected $mapType = JsonSchemaVariantMap::class;
  protected $mapDataType = 'array';
  /** @param string */
  public function setDiscriminant($discriminant)
  {
    $this->discriminant = $discriminant;
  }
  /** @return string */
  public function getDiscriminant()
  {
    return $this->discriminant;
  }
  /** @param JsonSchemaVariantMap[] */
  public function setMap($map)
  {
    $this->map = $map;
  }
  /** @return JsonSchemaVariantMap[] */
  public function getMap()
  {
    return $this->map;
  }
}

class JsonSchemaVariantMap extends \Google\Model
{
  /** @var string */
  public $ref;
  /** @var string */
  public $typeValue;
  protected $internal_gapi_mappings = [
        "ref" => "$ref",
        "typeValue" => "type_value",
  ];
  /** @param string */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /** @return string */
  public function getRef()
  {
    return $this->ref;
  }
  /** @param string */
  public function setTypeValue($typeValue)
  {
    $this->typeValue = $typeValue;
  }
  /** @return string */
  public function getTypeValue()
  {
    return $this->typeValue;
  }
}

class RestDescription extends \Google\Collection
{
  /** @var RestDescriptionAuth */
  public $auth;
  /** @var string */
  public $basePath;
  /** @var string */
  public $baseUrl;
  /** @var string */
  public $batchPath;
  /** @var string */
  public $canonicalName;
  /** @var string */
  public $description;
  /** @var string */
  public $discoveryVersion;
  /** @var string */
  public $documentationLink;
  /** @var string */
  public $etag;
  /** @var bool */
  public $exponentialBackoffDefault;
  /** @var string[] */
  public $features;
  /** @var RestDescriptionIcons */
  public $icons;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var RestMethod[] */
  public $methods;
  /** @var string */
  public $name;
  /** @var string */
  public $ownerDomain;
  /** @var string */
  public $ownerName;
  /** @var string */
  public $packagePath;
  /** @var JsonSchema[] */
  public $parameters;
  /** @var string */
  public $protocol;
  /** @var RestResource[] */
  public $resources;
  /** @var string */
  public $revision;
  /** @var string */
  public $rootUrl;
  /** @var JsonSchema[] */
  public $schemas;
  /** @var string */
  public $servicePath;
  /** @var string */
  public $title;
  /** @var string */
  public $version;
  /** @var bool */
  public $versionModule;
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = [
        "versionModule" => "version_module",
  ];
  protected $authType = RestDescriptionAuth::class;
  protected $authDataType = '';
  protected $iconsType = RestDescriptionIcons::class;
  protected $iconsDataType = '';
  protected $methodsType = RestMethod::class;
  protected $methodsDataType = 'map';
  protected $parametersType = JsonSchema::class;
  protected $parametersDataType = 'map';
  protected $resourcesType = RestResource::class;
  protected $resourcesDataType = 'map';
  protected $schemasType = JsonSchema::class;
  protected $schemasDataType = 'map';
  /** @param RestDescriptionAuth */
  public function setAuth(RestDescriptionAuth $auth)
  {
    $this->auth = $auth;
  }
  /** @return RestDescriptionAuth */
  public function getAuth()
  {
    return $this->auth;
  }
  /** @param string */
  public function setBasePath($basePath)
  {
    $this->basePath = $basePath;
  }
  /** @return string */
  public function getBasePath()
  {
    return $this->basePath;
  }
  /** @param string */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /** @return string */
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  /** @param string */
  public function setBatchPath($batchPath)
  {
    $this->batchPath = $batchPath;
  }
  /** @return string */
  public function getBatchPath()
  {
    return $this->batchPath;
  }
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
  public function setDiscoveryVersion($discoveryVersion)
  {
    $this->discoveryVersion = $discoveryVersion;
  }
  /** @return string */
  public function getDiscoveryVersion()
  {
    return $this->discoveryVersion;
  }
  /** @param string */
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  /** @return string */
  public function getDocumentationLink()
  {
    return $this->documentationLink;
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
  public function setExponentialBackoffDefault($exponentialBackoffDefault)
  {
    $this->exponentialBackoffDefault = $exponentialBackoffDefault;
  }
  /** @return bool */
  public function getExponentialBackoffDefault()
  {
    return $this->exponentialBackoffDefault;
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
  /** @param RestDescriptionIcons */
  public function setIcons(RestDescriptionIcons $icons)
  {
    $this->icons = $icons;
  }
  /** @return RestDescriptionIcons */
  public function getIcons()
  {
    return $this->icons;
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
  /** @param RestMethod[] */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /** @return RestMethod[] */
  public function getMethods()
  {
    return $this->methods;
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
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }
  /** @return string */
  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
  /** @param string */
  public function setOwnerName($ownerName)
  {
    $this->ownerName = $ownerName;
  }
  /** @return string */
  public function getOwnerName()
  {
    return $this->ownerName;
  }
  /** @param string */
  public function setPackagePath($packagePath)
  {
    $this->packagePath = $packagePath;
  }
  /** @return string */
  public function getPackagePath()
  {
    return $this->packagePath;
  }
  /** @param JsonSchema[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return JsonSchema[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param RestResource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return RestResource[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setRootUrl($rootUrl)
  {
    $this->rootUrl = $rootUrl;
  }
  /** @return string */
  public function getRootUrl()
  {
    return $this->rootUrl;
  }
  /** @param JsonSchema[] */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /** @return JsonSchema[] */
  public function getSchemas()
  {
    return $this->schemas;
  }
  /** @param string */
  public function setServicePath($servicePath)
  {
    $this->servicePath = $servicePath;
  }
  /** @return string */
  public function getServicePath()
  {
    return $this->servicePath;
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
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
  /** @param bool */
  public function setVersionModule($versionModule)
  {
    $this->versionModule = $versionModule;
  }
  /** @return bool */
  public function getVersionModule()
  {
    return $this->versionModule;
  }
}

class RestDescriptionAuth extends \Google\Model
{
  /** @var RestDescriptionAuthOauth2 */
  public $oauth2;
  protected $oauth2Type = RestDescriptionAuthOauth2::class;
  protected $oauth2DataType = '';
  /** @param RestDescriptionAuthOauth2 */
  public function setOauth2(RestDescriptionAuthOauth2 $oauth2)
  {
    $this->oauth2 = $oauth2;
  }
  /** @return RestDescriptionAuthOauth2 */
  public function getOauth2()
  {
    return $this->oauth2;
  }
}

class RestDescriptionAuthOauth2 extends \Google\Model
{
  /** @var RestDescriptionAuthOauth2ScopesElement[] */
  public $scopes;
  protected $scopesType = RestDescriptionAuthOauth2ScopesElement::class;
  protected $scopesDataType = 'map';
  /** @param RestDescriptionAuthOauth2ScopesElement[] */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return RestDescriptionAuthOauth2ScopesElement[] */
  public function getScopes()
  {
    return $this->scopes;
  }
}

class RestDescriptionAuthOauth2ScopesElement extends \Google\Model
{
  /** @var string */
  public $description;

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
}

class RestDescriptionIcons extends \Google\Model
{
  /** @var string */
  public $x16;
  /** @var string */
  public $x32;

  /** @param string */
  public function setX16($x16)
  {
    $this->x16 = $x16;
  }
  /** @return string */
  public function getX16()
  {
    return $this->x16;
  }
  /** @param string */
  public function setX32($x32)
  {
    $this->x32 = $x32;
  }
  /** @return string */
  public function getX32()
  {
    return $this->x32;
  }
}

class RestMethod extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var bool */
  public $etagRequired;
  /** @var string */
  public $flatPath;
  /** @var string */
  public $httpMethod;
  /** @var string */
  public $id;
  /** @var RestMethodMediaUpload */
  public $mediaUpload;
  /** @var string[] */
  public $parameterOrder;
  /** @var JsonSchema[] */
  public $parameters;
  /** @var string */
  public $path;
  /** @var RestMethodRequest */
  public $request;
  /** @var RestMethodResponse */
  public $response;
  /** @var string[] */
  public $scopes;
  /** @var bool */
  public $supportsMediaDownload;
  /** @var bool */
  public $supportsMediaUpload;
  /** @var bool */
  public $supportsSubscription;
  /** @var bool */
  public $useMediaDownloadService;
  protected $collection_key = 'scopes';
  protected $mediaUploadType = RestMethodMediaUpload::class;
  protected $mediaUploadDataType = '';
  protected $parametersType = JsonSchema::class;
  protected $parametersDataType = 'map';
  protected $requestType = RestMethodRequest::class;
  protected $requestDataType = '';
  protected $responseType = RestMethodResponse::class;
  protected $responseDataType = '';
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
  /** @param bool */
  public function setEtagRequired($etagRequired)
  {
    $this->etagRequired = $etagRequired;
  }
  /** @return bool */
  public function getEtagRequired()
  {
    return $this->etagRequired;
  }
  /** @param string */
  public function setFlatPath($flatPath)
  {
    $this->flatPath = $flatPath;
  }
  /** @return string */
  public function getFlatPath()
  {
    return $this->flatPath;
  }
  /** @param string */
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /** @return string */
  public function getHttpMethod()
  {
    return $this->httpMethod;
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
  /** @param RestMethodMediaUpload */
  public function setMediaUpload(RestMethodMediaUpload $mediaUpload)
  {
    $this->mediaUpload = $mediaUpload;
  }
  /** @return RestMethodMediaUpload */
  public function getMediaUpload()
  {
    return $this->mediaUpload;
  }
  /** @param string[] */
  public function setParameterOrder($parameterOrder)
  {
    $this->parameterOrder = $parameterOrder;
  }
  /** @return string[] */
  public function getParameterOrder()
  {
    return $this->parameterOrder;
  }
  /** @param JsonSchema[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return JsonSchema[] */
  public function getParameters()
  {
    return $this->parameters;
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
  /** @param RestMethodRequest */
  public function setRequest(RestMethodRequest $request)
  {
    $this->request = $request;
  }
  /** @return RestMethodRequest */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param RestMethodResponse */
  public function setResponse(RestMethodResponse $response)
  {
    $this->response = $response;
  }
  /** @return RestMethodResponse */
  public function getResponse()
  {
    return $this->response;
  }
  /** @param string[] */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string[] */
  public function getScopes()
  {
    return $this->scopes;
  }
  /** @param bool */
  public function setSupportsMediaDownload($supportsMediaDownload)
  {
    $this->supportsMediaDownload = $supportsMediaDownload;
  }
  /** @return bool */
  public function getSupportsMediaDownload()
  {
    return $this->supportsMediaDownload;
  }
  /** @param bool */
  public function setSupportsMediaUpload($supportsMediaUpload)
  {
    $this->supportsMediaUpload = $supportsMediaUpload;
  }
  /** @return bool */
  public function getSupportsMediaUpload()
  {
    return $this->supportsMediaUpload;
  }
  /** @param bool */
  public function setSupportsSubscription($supportsSubscription)
  {
    $this->supportsSubscription = $supportsSubscription;
  }
  /** @return bool */
  public function getSupportsSubscription()
  {
    return $this->supportsSubscription;
  }
  /** @param bool */
  public function setUseMediaDownloadService($useMediaDownloadService)
  {
    $this->useMediaDownloadService = $useMediaDownloadService;
  }
  /** @return bool */
  public function getUseMediaDownloadService()
  {
    return $this->useMediaDownloadService;
  }
}

class RestMethodMediaUpload extends \Google\Collection
{
  /** @var string[] */
  public $accept;
  /** @var string */
  public $maxSize;
  /** @var RestMethodMediaUploadProtocols */
  public $protocols;
  protected $collection_key = 'accept';
  protected $protocolsType = RestMethodMediaUploadProtocols::class;
  protected $protocolsDataType = '';
  /** @param string[] */
  public function setAccept($accept)
  {
    $this->accept = $accept;
  }
  /** @return string[] */
  public function getAccept()
  {
    return $this->accept;
  }
  /** @param string */
  public function setMaxSize($maxSize)
  {
    $this->maxSize = $maxSize;
  }
  /** @return string */
  public function getMaxSize()
  {
    return $this->maxSize;
  }
  /** @param RestMethodMediaUploadProtocols */
  public function setProtocols(RestMethodMediaUploadProtocols $protocols)
  {
    $this->protocols = $protocols;
  }
  /** @return RestMethodMediaUploadProtocols */
  public function getProtocols()
  {
    return $this->protocols;
  }
}

class RestMethodMediaUploadProtocols extends \Google\Model
{
  /** @var RestMethodMediaUploadProtocolsResumable */
  public $resumable;
  /** @var RestMethodMediaUploadProtocolsSimple */
  public $simple;
  protected $resumableType = RestMethodMediaUploadProtocolsResumable::class;
  protected $resumableDataType = '';
  protected $simpleType = RestMethodMediaUploadProtocolsSimple::class;
  protected $simpleDataType = '';
  /** @param RestMethodMediaUploadProtocolsResumable */
  public function setResumable(RestMethodMediaUploadProtocolsResumable $resumable)
  {
    $this->resumable = $resumable;
  }
  /** @return RestMethodMediaUploadProtocolsResumable */
  public function getResumable()
  {
    return $this->resumable;
  }
  /** @param RestMethodMediaUploadProtocolsSimple */
  public function setSimple(RestMethodMediaUploadProtocolsSimple $simple)
  {
    $this->simple = $simple;
  }
  /** @return RestMethodMediaUploadProtocolsSimple */
  public function getSimple()
  {
    return $this->simple;
  }
}

class RestMethodMediaUploadProtocolsResumable extends \Google\Model
{
  /** @var bool */
  public $multipart;
  /** @var string */
  public $path;

  /** @param bool */
  public function setMultipart($multipart)
  {
    $this->multipart = $multipart;
  }
  /** @return bool */
  public function getMultipart()
  {
    return $this->multipart;
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

class RestMethodMediaUploadProtocolsSimple extends \Google\Model
{
  /** @var bool */
  public $multipart;
  /** @var string */
  public $path;

  /** @param bool */
  public function setMultipart($multipart)
  {
    $this->multipart = $multipart;
  }
  /** @return bool */
  public function getMultipart()
  {
    return $this->multipart;
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

class RestMethodRequest extends \Google\Model
{
  /** @var string */
  public $ref;
  /** @var string */
  public $parameterName;
  protected $internal_gapi_mappings = [
        "ref" => "$ref",
  ];
  /** @param string */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /** @return string */
  public function getRef()
  {
    return $this->ref;
  }
  /** @param string */
  public function setParameterName($parameterName)
  {
    $this->parameterName = $parameterName;
  }
  /** @return string */
  public function getParameterName()
  {
    return $this->parameterName;
  }
}

class RestMethodResponse extends \Google\Model
{
  /** @var string */
  public $ref;
  protected $internal_gapi_mappings = [
        "ref" => "$ref",
  ];
  /** @param string */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /** @return string */
  public function getRef()
  {
    return $this->ref;
  }
}

class RestResource extends \Google\Model
{
  /** @var RestMethod[] */
  public $methods;
  /** @var RestResource[] */
  public $resources;
  protected $methodsType = RestMethod::class;
  protected $methodsDataType = 'map';
  protected $resourcesType = RestResource::class;
  protected $resourcesDataType = 'map';
  /** @param RestMethod[] */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /** @return RestMethod[] */
  public function getMethods()
  {
    return $this->methods;
  }
  /** @param RestResource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return RestResource[] */
  public function getResources()
  {
    return $this->resources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DirectoryList::class, 'Google_Service_Discovery_DirectoryList');
class_alias(DirectoryListItems::class, 'Google_Service_Discovery_DirectoryListItems');
class_alias(DirectoryListItemsIcons::class, 'Google_Service_Discovery_DirectoryListItemsIcons');
class_alias(JsonSchema::class, 'Google_Service_Discovery_JsonSchema');
class_alias(JsonSchemaAnnotations::class, 'Google_Service_Discovery_JsonSchemaAnnotations');
class_alias(JsonSchemaVariant::class, 'Google_Service_Discovery_JsonSchemaVariant');
class_alias(JsonSchemaVariantMap::class, 'Google_Service_Discovery_JsonSchemaVariantMap');
class_alias(RestDescription::class, 'Google_Service_Discovery_RestDescription');
class_alias(RestDescriptionAuth::class, 'Google_Service_Discovery_RestDescriptionAuth');
class_alias(RestDescriptionAuthOauth2::class, 'Google_Service_Discovery_RestDescriptionAuthOauth2');
class_alias(RestDescriptionAuthOauth2ScopesElement::class, 'Google_Service_Discovery_RestDescriptionAuthOauth2ScopesElement');
class_alias(RestDescriptionIcons::class, 'Google_Service_Discovery_RestDescriptionIcons');
class_alias(RestMethod::class, 'Google_Service_Discovery_RestMethod');
class_alias(RestMethodMediaUpload::class, 'Google_Service_Discovery_RestMethodMediaUpload');
class_alias(RestMethodMediaUploadProtocols::class, 'Google_Service_Discovery_RestMethodMediaUploadProtocols');
class_alias(RestMethodMediaUploadProtocolsResumable::class, 'Google_Service_Discovery_RestMethodMediaUploadProtocolsResumable');
class_alias(RestMethodMediaUploadProtocolsSimple::class, 'Google_Service_Discovery_RestMethodMediaUploadProtocolsSimple');
class_alias(RestMethodRequest::class, 'Google_Service_Discovery_RestMethodRequest');
class_alias(RestMethodResponse::class, 'Google_Service_Discovery_RestMethodResponse');
class_alias(RestResource::class, 'Google_Service_Discovery_RestResource');
