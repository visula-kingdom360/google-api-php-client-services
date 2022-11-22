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

namespace Google\Service\Datapipelines;

class GoogleCloudDatapipelinesV1ArrayValue extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1FieldValue[] */
  public $elements;
  protected $collection_key = 'elements';
  protected $elementsType = GoogleCloudDatapipelinesV1FieldValue::class;
  protected $elementsDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1FieldValue[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return GoogleCloudDatapipelinesV1FieldValue[] */
  public function getElements()
  {
    return $this->elements;
  }
}

class GoogleCloudDatapipelinesV1AtomicValue extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var int */
  public $byteValue;
  /** @var string */
  public $bytesValue;
  /** @var GoogleTypeDateTime */
  public $datetimeValue;
  /** @var GoogleTypeDecimal */
  public $decimalValue;
  public $doubleValue;
  /** @var float */
  public $floatValue;
  /** @var int */
  public $int16Value;
  /** @var int */
  public $int32Value;
  /** @var string */
  public $int64Value;
  /** @var string */
  public $stringValue;
  protected $datetimeValueType = GoogleTypeDateTime::class;
  protected $datetimeValueDataType = '';
  protected $decimalValueType = GoogleTypeDecimal::class;
  protected $decimalValueDataType = '';
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
  public function setByteValue($byteValue)
  {
    $this->byteValue = $byteValue;
  }
  /** @return int */
  public function getByteValue()
  {
    return $this->byteValue;
  }
  /** @param string */
  public function setBytesValue($bytesValue)
  {
    $this->bytesValue = $bytesValue;
  }
  /** @return string */
  public function getBytesValue()
  {
    return $this->bytesValue;
  }
  /** @param GoogleTypeDateTime */
  public function setDatetimeValue(GoogleTypeDateTime $datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  /** @return GoogleTypeDateTime */
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
  }
  /** @param GoogleTypeDecimal */
  public function setDecimalValue(GoogleTypeDecimal $decimalValue)
  {
    $this->decimalValue = $decimalValue;
  }
  /** @return GoogleTypeDecimal */
  public function getDecimalValue()
  {
    return $this->decimalValue;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param float */
  public function setFloatValue($floatValue)
  {
    $this->floatValue = $floatValue;
  }
  /** @return float */
  public function getFloatValue()
  {
    return $this->floatValue;
  }
  /** @param int */
  public function setInt16Value($int16Value)
  {
    $this->int16Value = $int16Value;
  }
  /** @return int */
  public function getInt16Value()
  {
    return $this->int16Value;
  }
  /** @param int */
  public function setInt32Value($int32Value)
  {
    $this->int32Value = $int32Value;
  }
  /** @return int */
  public function getInt32Value()
  {
    return $this->int32Value;
  }
  /** @param string */
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
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

class GoogleCloudDatapipelinesV1BatchGetTransformDescriptionsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1TransformDescription[] */
  public $transformDescriptions;
  protected $collection_key = 'transformDescriptions';
  protected $transformDescriptionsType = GoogleCloudDatapipelinesV1TransformDescription::class;
  protected $transformDescriptionsDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1TransformDescription[] */
  public function setTransformDescriptions($transformDescriptions)
  {
    $this->transformDescriptions = $transformDescriptions;
  }
  /** @return GoogleCloudDatapipelinesV1TransformDescription[] */
  public function getTransformDescriptions()
  {
    return $this->transformDescriptions;
  }
}

class GoogleCloudDatapipelinesV1ComputeSchemaRequest extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1ConfiguredTransform */
  public $config;
  /** @var GoogleCloudDatapipelinesV1Schema[] */
  public $inputSchemas;
  /** @var GoogleCloudDatapipelinesV1RawSchemaInfo */
  public $rawSchema;
  protected $collection_key = 'inputSchemas';
  protected $configType = GoogleCloudDatapipelinesV1ConfiguredTransform::class;
  protected $configDataType = '';
  protected $inputSchemasType = GoogleCloudDatapipelinesV1Schema::class;
  protected $inputSchemasDataType = 'array';
  protected $rawSchemaType = GoogleCloudDatapipelinesV1RawSchemaInfo::class;
  protected $rawSchemaDataType = '';
  /** @param GoogleCloudDatapipelinesV1ConfiguredTransform */
  public function setConfig(GoogleCloudDatapipelinesV1ConfiguredTransform $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDatapipelinesV1ConfiguredTransform */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param GoogleCloudDatapipelinesV1Schema[] */
  public function setInputSchemas($inputSchemas)
  {
    $this->inputSchemas = $inputSchemas;
  }
  /** @return GoogleCloudDatapipelinesV1Schema[] */
  public function getInputSchemas()
  {
    return $this->inputSchemas;
  }
  /** @param GoogleCloudDatapipelinesV1RawSchemaInfo */
  public function setRawSchema(GoogleCloudDatapipelinesV1RawSchemaInfo $rawSchema)
  {
    $this->rawSchema = $rawSchema;
  }
  /** @return GoogleCloudDatapipelinesV1RawSchemaInfo */
  public function getRawSchema()
  {
    return $this->rawSchema;
  }
}

class GoogleCloudDatapipelinesV1ConfiguredTransform extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1Row */
  public $config;
  /** @var string */
  public $uniformResourceName;
  protected $configType = GoogleCloudDatapipelinesV1Row::class;
  protected $configDataType = '';
  /** @param GoogleCloudDatapipelinesV1Row */
  public function setConfig(GoogleCloudDatapipelinesV1Row $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDatapipelinesV1Row */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setUniformResourceName($uniformResourceName)
  {
    $this->uniformResourceName = $uniformResourceName;
  }
  /** @return string */
  public function getUniformResourceName()
  {
    return $this->uniformResourceName;
  }
}

class GoogleCloudDatapipelinesV1DataflowJobDetails extends \Google\Model
{
  /** @var int */
  public $currentWorkers;
  public $resourceInfo;
  /** @var GoogleCloudDatapipelinesV1SdkVersion */
  public $sdkVersion;
  protected $sdkVersionType = GoogleCloudDatapipelinesV1SdkVersion::class;
  protected $sdkVersionDataType = '';
  /** @param int */
  public function setCurrentWorkers($currentWorkers)
  {
    $this->currentWorkers = $currentWorkers;
  }
  /** @return int */
  public function getCurrentWorkers()
  {
    return $this->currentWorkers;
  }
  public function setResourceInfo($resourceInfo)
  {
    $this->resourceInfo = $resourceInfo;
  }
  public function getResourceInfo()
  {
    return $this->resourceInfo;
  }
  /** @param GoogleCloudDatapipelinesV1SdkVersion */
  public function setSdkVersion(GoogleCloudDatapipelinesV1SdkVersion $sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return GoogleCloudDatapipelinesV1SdkVersion */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
}

class GoogleCloudDatapipelinesV1EnumerationValue extends \Google\Model
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

class GoogleCloudDatapipelinesV1Field extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudDatapipelinesV1FieldType */
  public $type;
  protected $typeType = GoogleCloudDatapipelinesV1FieldType::class;
  protected $typeDataType = '';
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
  /** @param GoogleCloudDatapipelinesV1FieldType */
  public function setType(GoogleCloudDatapipelinesV1FieldType $type)
  {
    $this->type = $type;
  }
  /** @return GoogleCloudDatapipelinesV1FieldType */
  public function getType()
  {
    return $this->type;
  }
}

class GoogleCloudDatapipelinesV1FieldType extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1FieldType */
  public $collectionElementType;
  /** @var GoogleCloudDatapipelinesV1LogicalType */
  public $logicalType;
  /** @var GoogleCloudDatapipelinesV1MapType */
  public $mapType;
  /** @var bool */
  public $nullable;
  /** @var GoogleCloudDatapipelinesV1Schema */
  public $rowSchema;
  /** @var string */
  public $type;
  protected $collectionElementTypeType = GoogleCloudDatapipelinesV1FieldType::class;
  protected $collectionElementTypeDataType = '';
  protected $logicalTypeType = GoogleCloudDatapipelinesV1LogicalType::class;
  protected $logicalTypeDataType = '';
  protected $mapTypeType = GoogleCloudDatapipelinesV1MapType::class;
  protected $mapTypeDataType = '';
  protected $rowSchemaType = GoogleCloudDatapipelinesV1Schema::class;
  protected $rowSchemaDataType = '';
  /** @param GoogleCloudDatapipelinesV1FieldType */
  public function setCollectionElementType(GoogleCloudDatapipelinesV1FieldType $collectionElementType)
  {
    $this->collectionElementType = $collectionElementType;
  }
  /** @return GoogleCloudDatapipelinesV1FieldType */
  public function getCollectionElementType()
  {
    return $this->collectionElementType;
  }
  /** @param GoogleCloudDatapipelinesV1LogicalType */
  public function setLogicalType(GoogleCloudDatapipelinesV1LogicalType $logicalType)
  {
    $this->logicalType = $logicalType;
  }
  /** @return GoogleCloudDatapipelinesV1LogicalType */
  public function getLogicalType()
  {
    return $this->logicalType;
  }
  /** @param GoogleCloudDatapipelinesV1MapType */
  public function setMapType(GoogleCloudDatapipelinesV1MapType $mapType)
  {
    $this->mapType = $mapType;
  }
  /** @return GoogleCloudDatapipelinesV1MapType */
  public function getMapType()
  {
    return $this->mapType;
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
  /** @param GoogleCloudDatapipelinesV1Schema */
  public function setRowSchema(GoogleCloudDatapipelinesV1Schema $rowSchema)
  {
    $this->rowSchema = $rowSchema;
  }
  /** @return GoogleCloudDatapipelinesV1Schema */
  public function getRowSchema()
  {
    return $this->rowSchema;
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

class GoogleCloudDatapipelinesV1FieldValue extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1ArrayValue */
  public $arrayValue;
  /** @var GoogleCloudDatapipelinesV1AtomicValue */
  public $atomicValue;
  /** @var GoogleCloudDatapipelinesV1EnumerationValue */
  public $enumValue;
  /** @var GoogleCloudDatapipelinesV1FixedBytesValue */
  public $fixedBytesValue;
  /** @var GoogleCloudDatapipelinesV1IterableValue */
  public $iterableValue;
  /** @var GoogleCloudDatapipelinesV1MapValue */
  public $mapValue;
  /** @var GoogleCloudDatapipelinesV1Row */
  public $rowValue;
  protected $arrayValueType = GoogleCloudDatapipelinesV1ArrayValue::class;
  protected $arrayValueDataType = '';
  protected $atomicValueType = GoogleCloudDatapipelinesV1AtomicValue::class;
  protected $atomicValueDataType = '';
  protected $enumValueType = GoogleCloudDatapipelinesV1EnumerationValue::class;
  protected $enumValueDataType = '';
  protected $fixedBytesValueType = GoogleCloudDatapipelinesV1FixedBytesValue::class;
  protected $fixedBytesValueDataType = '';
  protected $iterableValueType = GoogleCloudDatapipelinesV1IterableValue::class;
  protected $iterableValueDataType = '';
  protected $mapValueType = GoogleCloudDatapipelinesV1MapValue::class;
  protected $mapValueDataType = '';
  protected $rowValueType = GoogleCloudDatapipelinesV1Row::class;
  protected $rowValueDataType = '';
  /** @param GoogleCloudDatapipelinesV1ArrayValue */
  public function setArrayValue(GoogleCloudDatapipelinesV1ArrayValue $arrayValue)
  {
    $this->arrayValue = $arrayValue;
  }
  /** @return GoogleCloudDatapipelinesV1ArrayValue */
  public function getArrayValue()
  {
    return $this->arrayValue;
  }
  /** @param GoogleCloudDatapipelinesV1AtomicValue */
  public function setAtomicValue(GoogleCloudDatapipelinesV1AtomicValue $atomicValue)
  {
    $this->atomicValue = $atomicValue;
  }
  /** @return GoogleCloudDatapipelinesV1AtomicValue */
  public function getAtomicValue()
  {
    return $this->atomicValue;
  }
  /** @param GoogleCloudDatapipelinesV1EnumerationValue */
  public function setEnumValue(GoogleCloudDatapipelinesV1EnumerationValue $enumValue)
  {
    $this->enumValue = $enumValue;
  }
  /** @return GoogleCloudDatapipelinesV1EnumerationValue */
  public function getEnumValue()
  {
    return $this->enumValue;
  }
  /** @param GoogleCloudDatapipelinesV1FixedBytesValue */
  public function setFixedBytesValue(GoogleCloudDatapipelinesV1FixedBytesValue $fixedBytesValue)
  {
    $this->fixedBytesValue = $fixedBytesValue;
  }
  /** @return GoogleCloudDatapipelinesV1FixedBytesValue */
  public function getFixedBytesValue()
  {
    return $this->fixedBytesValue;
  }
  /** @param GoogleCloudDatapipelinesV1IterableValue */
  public function setIterableValue(GoogleCloudDatapipelinesV1IterableValue $iterableValue)
  {
    $this->iterableValue = $iterableValue;
  }
  /** @return GoogleCloudDatapipelinesV1IterableValue */
  public function getIterableValue()
  {
    return $this->iterableValue;
  }
  /** @param GoogleCloudDatapipelinesV1MapValue */
  public function setMapValue(GoogleCloudDatapipelinesV1MapValue $mapValue)
  {
    $this->mapValue = $mapValue;
  }
  /** @return GoogleCloudDatapipelinesV1MapValue */
  public function getMapValue()
  {
    return $this->mapValue;
  }
  /** @param GoogleCloudDatapipelinesV1Row */
  public function setRowValue(GoogleCloudDatapipelinesV1Row $rowValue)
  {
    $this->rowValue = $rowValue;
  }
  /** @return GoogleCloudDatapipelinesV1Row */
  public function getRowValue()
  {
    return $this->rowValue;
  }
}

class GoogleCloudDatapipelinesV1FixedBytesValue extends \Google\Model
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

class GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment extends \Google\Collection
{
  /** @var string[] */
  public $additionalExperiments;
  /** @var string[] */
  public $additionalUserLabels;
  /** @var bool */
  public $enableStreamingEngine;
  /** @var string */
  public $flexrsGoal;
  /** @var string */
  public $ipConfiguration;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $machineType;
  /** @var int */
  public $maxWorkers;
  /** @var string */
  public $network;
  /** @var int */
  public $numWorkers;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $subnetwork;
  /** @var string */
  public $tempLocation;
  /** @var string */
  public $workerRegion;
  /** @var string */
  public $workerZone;
  /** @var string */
  public $zone;
  protected $collection_key = 'additionalExperiments';
  /** @param string[] */
  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }
  /** @return string[] */
  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }
  /** @param string[] */
  public function setAdditionalUserLabels($additionalUserLabels)
  {
    $this->additionalUserLabels = $additionalUserLabels;
  }
  /** @return string[] */
  public function getAdditionalUserLabels()
  {
    return $this->additionalUserLabels;
  }
  /** @param bool */
  public function setEnableStreamingEngine($enableStreamingEngine)
  {
    $this->enableStreamingEngine = $enableStreamingEngine;
  }
  /** @return bool */
  public function getEnableStreamingEngine()
  {
    return $this->enableStreamingEngine;
  }
  /** @param string */
  public function setFlexrsGoal($flexrsGoal)
  {
    $this->flexrsGoal = $flexrsGoal;
  }
  /** @return string */
  public function getFlexrsGoal()
  {
    return $this->flexrsGoal;
  }
  /** @param string */
  public function setIpConfiguration($ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return string */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param int */
  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }
  /** @return int */
  public function getMaxWorkers()
  {
    return $this->maxWorkers;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param int */
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  /** @return int */
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string */
  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
  }
  /** @return string */
  public function getTempLocation()
  {
    return $this->tempLocation;
  }
  /** @param string */
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  /** @return string */
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  /** @param string */
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  /** @return string */
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class GoogleCloudDatapipelinesV1IterableValue extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1FieldValue[] */
  public $elements;
  protected $collection_key = 'elements';
  protected $elementsType = GoogleCloudDatapipelinesV1FieldValue::class;
  protected $elementsDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1FieldValue[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return GoogleCloudDatapipelinesV1FieldValue[] */
  public function getElements()
  {
    return $this->elements;
  }
}

class GoogleCloudDatapipelinesV1Job extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDatapipelinesV1DataflowJobDetails */
  public $dataflowJobDetails;
  /** @var string */
  public $endTime;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var GoogleRpcStatus */
  public $status;
  protected $dataflowJobDetailsType = GoogleCloudDatapipelinesV1DataflowJobDetails::class;
  protected $dataflowJobDetailsDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
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
  /** @param GoogleCloudDatapipelinesV1DataflowJobDetails */
  public function setDataflowJobDetails(GoogleCloudDatapipelinesV1DataflowJobDetails $dataflowJobDetails)
  {
    $this->dataflowJobDetails = $dataflowJobDetails;
  }
  /** @return GoogleCloudDatapipelinesV1DataflowJobDetails */
  public function getDataflowJobDetails()
  {
    return $this->dataflowJobDetails;
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
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter extends \Google\Model
{
  /** @var string */
  public $containerSpecGcsPath;
  /** @var GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment */
  public $environment;
  /** @var string */
  public $jobName;
  /** @var string[] */
  public $launchOptions;
  /** @var string[] */
  public $parameters;
  /** @var string[] */
  public $transformNameMappings;
  /** @var bool */
  public $update;
  protected $environmentType = GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment::class;
  protected $environmentDataType = '';
  /** @param string */
  public function setContainerSpecGcsPath($containerSpecGcsPath)
  {
    $this->containerSpecGcsPath = $containerSpecGcsPath;
  }
  /** @return string */
  public function getContainerSpecGcsPath()
  {
    return $this->containerSpecGcsPath;
  }
  /** @param GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment */
  public function setEnvironment(GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment $environment)
  {
    $this->environment = $environment;
  }
  /** @return GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setJobName($jobName)
  {
    $this->jobName = $jobName;
  }
  /** @return string */
  public function getJobName()
  {
    return $this->jobName;
  }
  /** @param string[] */
  public function setLaunchOptions($launchOptions)
  {
    $this->launchOptions = $launchOptions;
  }
  /** @return string[] */
  public function getLaunchOptions()
  {
    return $this->launchOptions;
  }
  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string[] */
  public function setTransformNameMappings($transformNameMappings)
  {
    $this->transformNameMappings = $transformNameMappings;
  }
  /** @return string[] */
  public function getTransformNameMappings()
  {
    return $this->transformNameMappings;
  }
  /** @param bool */
  public function setUpdate($update)
  {
    $this->update = $update;
  }
  /** @return bool */
  public function getUpdate()
  {
    return $this->update;
  }
}

class GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter */
  public $launchParameter;
  /** @var string */
  public $location;
  /** @var string */
  public $projectId;
  /** @var bool */
  public $validateOnly;
  protected $launchParameterType = GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter::class;
  protected $launchParameterDataType = '';
  /** @param GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter */
  public function setLaunchParameter(GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter $launchParameter)
  {
    $this->launchParameter = $launchParameter;
  }
  /** @return GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter */
  public function getLaunchParameter()
  {
    return $this->launchParameter;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class GoogleCloudDatapipelinesV1LaunchTemplateParameters extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1RuntimeEnvironment */
  public $environment;
  /** @var string */
  public $jobName;
  /** @var string[] */
  public $parameters;
  /** @var string[] */
  public $transformNameMapping;
  /** @var bool */
  public $update;
  protected $environmentType = GoogleCloudDatapipelinesV1RuntimeEnvironment::class;
  protected $environmentDataType = '';
  /** @param GoogleCloudDatapipelinesV1RuntimeEnvironment */
  public function setEnvironment(GoogleCloudDatapipelinesV1RuntimeEnvironment $environment)
  {
    $this->environment = $environment;
  }
  /** @return GoogleCloudDatapipelinesV1RuntimeEnvironment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setJobName($jobName)
  {
    $this->jobName = $jobName;
  }
  /** @return string */
  public function getJobName()
  {
    return $this->jobName;
  }
  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string[] */
  public function setTransformNameMapping($transformNameMapping)
  {
    $this->transformNameMapping = $transformNameMapping;
  }
  /** @return string[] */
  public function getTransformNameMapping()
  {
    return $this->transformNameMapping;
  }
  /** @param bool */
  public function setUpdate($update)
  {
    $this->update = $update;
  }
  /** @return bool */
  public function getUpdate()
  {
    return $this->update;
  }
}

class GoogleCloudDatapipelinesV1LaunchTemplateRequest extends \Google\Model
{
  /** @var string */
  public $gcsPath;
  /** @var GoogleCloudDatapipelinesV1LaunchTemplateParameters */
  public $launchParameters;
  /** @var string */
  public $location;
  /** @var string */
  public $projectId;
  /** @var bool */
  public $validateOnly;
  protected $launchParametersType = GoogleCloudDatapipelinesV1LaunchTemplateParameters::class;
  protected $launchParametersDataType = '';
  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
  /** @param GoogleCloudDatapipelinesV1LaunchTemplateParameters */
  public function setLaunchParameters(GoogleCloudDatapipelinesV1LaunchTemplateParameters $launchParameters)
  {
    $this->launchParameters = $launchParameters;
  }
  /** @return GoogleCloudDatapipelinesV1LaunchTemplateParameters */
  public function getLaunchParameters()
  {
    return $this->launchParameters;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class GoogleCloudDatapipelinesV1ListJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = GoogleCloudDatapipelinesV1Job::class;
  protected $jobsDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return GoogleCloudDatapipelinesV1Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class GoogleCloudDatapipelinesV1ListPipelinesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDatapipelinesV1Pipeline[] */
  public $pipelines;
  protected $collection_key = 'pipelines';
  protected $pipelinesType = GoogleCloudDatapipelinesV1Pipeline::class;
  protected $pipelinesDataType = 'array';
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
  /** @param GoogleCloudDatapipelinesV1Pipeline[] */
  public function setPipelines($pipelines)
  {
    $this->pipelines = $pipelines;
  }
  /** @return GoogleCloudDatapipelinesV1Pipeline[] */
  public function getPipelines()
  {
    return $this->pipelines;
  }
}

class GoogleCloudDatapipelinesV1LogicalType extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1LogicalTypeEnumerationType */
  public $enumerationType;
  /** @var GoogleCloudDatapipelinesV1LogicalTypeFixedBytes */
  public $fixedBytes;
  protected $enumerationTypeType = GoogleCloudDatapipelinesV1LogicalTypeEnumerationType::class;
  protected $enumerationTypeDataType = '';
  protected $fixedBytesType = GoogleCloudDatapipelinesV1LogicalTypeFixedBytes::class;
  protected $fixedBytesDataType = '';
  /** @param GoogleCloudDatapipelinesV1LogicalTypeEnumerationType */
  public function setEnumerationType(GoogleCloudDatapipelinesV1LogicalTypeEnumerationType $enumerationType)
  {
    $this->enumerationType = $enumerationType;
  }
  /** @return GoogleCloudDatapipelinesV1LogicalTypeEnumerationType */
  public function getEnumerationType()
  {
    return $this->enumerationType;
  }
  /** @param GoogleCloudDatapipelinesV1LogicalTypeFixedBytes */
  public function setFixedBytes(GoogleCloudDatapipelinesV1LogicalTypeFixedBytes $fixedBytes)
  {
    $this->fixedBytes = $fixedBytes;
  }
  /** @return GoogleCloudDatapipelinesV1LogicalTypeFixedBytes */
  public function getFixedBytes()
  {
    return $this->fixedBytes;
  }
}

class GoogleCloudDatapipelinesV1LogicalTypeEnumerationType extends \Google\Collection
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

class GoogleCloudDatapipelinesV1LogicalTypeFixedBytes extends \Google\Model
{
  /** @var int */
  public $sizeBytes;

  /** @param int */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return int */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
}

class GoogleCloudDatapipelinesV1MapType extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1FieldType */
  public $mapKeyType;
  /** @var GoogleCloudDatapipelinesV1FieldType */
  public $mapValueType;
  protected $mapKeyTypeType = GoogleCloudDatapipelinesV1FieldType::class;
  protected $mapKeyTypeDataType = '';
  protected $mapValueTypeType = GoogleCloudDatapipelinesV1FieldType::class;
  protected $mapValueTypeDataType = '';
  /** @param GoogleCloudDatapipelinesV1FieldType */
  public function setMapKeyType(GoogleCloudDatapipelinesV1FieldType $mapKeyType)
  {
    $this->mapKeyType = $mapKeyType;
  }
  /** @return GoogleCloudDatapipelinesV1FieldType */
  public function getMapKeyType()
  {
    return $this->mapKeyType;
  }
  /** @param GoogleCloudDatapipelinesV1FieldType */
  public function setMapValueType(GoogleCloudDatapipelinesV1FieldType $mapValueType)
  {
    $this->mapValueType = $mapValueType;
  }
  /** @return GoogleCloudDatapipelinesV1FieldType */
  public function getMapValueType()
  {
    return $this->mapValueType;
  }
}

class GoogleCloudDatapipelinesV1MapValue extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1MapValueEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = GoogleCloudDatapipelinesV1MapValueEntry::class;
  protected $entriesDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1MapValueEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return GoogleCloudDatapipelinesV1MapValueEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class GoogleCloudDatapipelinesV1MapValueEntry extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1FieldValue */
  public $key;
  /** @var GoogleCloudDatapipelinesV1FieldValue */
  public $value;
  protected $keyType = GoogleCloudDatapipelinesV1FieldValue::class;
  protected $keyDataType = '';
  protected $valueType = GoogleCloudDatapipelinesV1FieldValue::class;
  protected $valueDataType = '';
  /** @param GoogleCloudDatapipelinesV1FieldValue */
  public function setKey(GoogleCloudDatapipelinesV1FieldValue $key)
  {
    $this->key = $key;
  }
  /** @return GoogleCloudDatapipelinesV1FieldValue */
  public function getKey()
  {
    return $this->key;
  }
  /** @param GoogleCloudDatapipelinesV1FieldValue */
  public function setValue(GoogleCloudDatapipelinesV1FieldValue $value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudDatapipelinesV1FieldValue */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDatapipelinesV1Pipeline extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var int */
  public $jobCount;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $name;
  /** @var string[] */
  public $pipelineSources;
  /** @var GoogleCloudDatapipelinesV1ScheduleSpec */
  public $scheduleInfo;
  /** @var string */
  public $schedulerServiceAccountEmail;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var GoogleCloudDatapipelinesV1Workload */
  public $workload;
  protected $scheduleInfoType = GoogleCloudDatapipelinesV1ScheduleSpec::class;
  protected $scheduleInfoDataType = '';
  protected $workloadType = GoogleCloudDatapipelinesV1Workload::class;
  protected $workloadDataType = '';
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
  /** @param int */
  public function setJobCount($jobCount)
  {
    $this->jobCount = $jobCount;
  }
  /** @return int */
  public function getJobCount()
  {
    return $this->jobCount;
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
  public function setPipelineSources($pipelineSources)
  {
    $this->pipelineSources = $pipelineSources;
  }
  /** @return string[] */
  public function getPipelineSources()
  {
    return $this->pipelineSources;
  }
  /** @param GoogleCloudDatapipelinesV1ScheduleSpec */
  public function setScheduleInfo(GoogleCloudDatapipelinesV1ScheduleSpec $scheduleInfo)
  {
    $this->scheduleInfo = $scheduleInfo;
  }
  /** @return GoogleCloudDatapipelinesV1ScheduleSpec */
  public function getScheduleInfo()
  {
    return $this->scheduleInfo;
  }
  /** @param string */
  public function setSchedulerServiceAccountEmail($schedulerServiceAccountEmail)
  {
    $this->schedulerServiceAccountEmail = $schedulerServiceAccountEmail;
  }
  /** @return string */
  public function getSchedulerServiceAccountEmail()
  {
    return $this->schedulerServiceAccountEmail;
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
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param GoogleCloudDatapipelinesV1Workload */
  public function setWorkload(GoogleCloudDatapipelinesV1Workload $workload)
  {
    $this->workload = $workload;
  }
  /** @return GoogleCloudDatapipelinesV1Workload */
  public function getWorkload()
  {
    return $this->workload;
  }
}

class GoogleCloudDatapipelinesV1RawSchemaInfo extends \Google\Model
{
  /** @var string */
  public $rawSchema;
  /** @var string */
  public $type;

  /** @param string */
  public function setRawSchema($rawSchema)
  {
    $this->rawSchema = $rawSchema;
  }
  /** @return string */
  public function getRawSchema()
  {
    return $this->rawSchema;
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

class GoogleCloudDatapipelinesV1Row extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1SchemaSource */
  public $schema;
  /** @var GoogleCloudDatapipelinesV1FieldValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $schemaType = GoogleCloudDatapipelinesV1SchemaSource::class;
  protected $schemaDataType = '';
  protected $valuesType = GoogleCloudDatapipelinesV1FieldValue::class;
  protected $valuesDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1SchemaSource */
  public function setSchema(GoogleCloudDatapipelinesV1SchemaSource $schema)
  {
    $this->schema = $schema;
  }
  /** @return GoogleCloudDatapipelinesV1SchemaSource */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param GoogleCloudDatapipelinesV1FieldValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudDatapipelinesV1FieldValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudDatapipelinesV1RunPipelineRequest extends \Google\Model
{
}

class GoogleCloudDatapipelinesV1RunPipelineResponse extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1Job */
  public $job;
  protected $jobType = GoogleCloudDatapipelinesV1Job::class;
  protected $jobDataType = '';
  /** @param GoogleCloudDatapipelinesV1Job */
  public function setJob(GoogleCloudDatapipelinesV1Job $job)
  {
    $this->job = $job;
  }
  /** @return GoogleCloudDatapipelinesV1Job */
  public function getJob()
  {
    return $this->job;
  }
}

class GoogleCloudDatapipelinesV1RuntimeEnvironment extends \Google\Collection
{
  /** @var string[] */
  public $additionalExperiments;
  /** @var string[] */
  public $additionalUserLabels;
  /** @var bool */
  public $bypassTempDirValidation;
  /** @var bool */
  public $enableStreamingEngine;
  /** @var string */
  public $ipConfiguration;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $machineType;
  /** @var int */
  public $maxWorkers;
  /** @var string */
  public $network;
  /** @var int */
  public $numWorkers;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $subnetwork;
  /** @var string */
  public $tempLocation;
  /** @var string */
  public $workerRegion;
  /** @var string */
  public $workerZone;
  /** @var string */
  public $zone;
  protected $collection_key = 'additionalExperiments';
  /** @param string[] */
  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }
  /** @return string[] */
  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }
  /** @param string[] */
  public function setAdditionalUserLabels($additionalUserLabels)
  {
    $this->additionalUserLabels = $additionalUserLabels;
  }
  /** @return string[] */
  public function getAdditionalUserLabels()
  {
    return $this->additionalUserLabels;
  }
  /** @param bool */
  public function setBypassTempDirValidation($bypassTempDirValidation)
  {
    $this->bypassTempDirValidation = $bypassTempDirValidation;
  }
  /** @return bool */
  public function getBypassTempDirValidation()
  {
    return $this->bypassTempDirValidation;
  }
  /** @param bool */
  public function setEnableStreamingEngine($enableStreamingEngine)
  {
    $this->enableStreamingEngine = $enableStreamingEngine;
  }
  /** @return bool */
  public function getEnableStreamingEngine()
  {
    return $this->enableStreamingEngine;
  }
  /** @param string */
  public function setIpConfiguration($ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return string */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param int */
  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }
  /** @return int */
  public function getMaxWorkers()
  {
    return $this->maxWorkers;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param int */
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  /** @return int */
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string */
  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
  }
  /** @return string */
  public function getTempLocation()
  {
    return $this->tempLocation;
  }
  /** @param string */
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  /** @return string */
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  /** @param string */
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  /** @return string */
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class GoogleCloudDatapipelinesV1ScheduleSpec extends \Google\Model
{
  /** @var string */
  public $nextJobTime;
  /** @var string */
  public $schedule;
  /** @var string */
  public $timeZone;

  /** @param string */
  public function setNextJobTime($nextJobTime)
  {
    $this->nextJobTime = $nextJobTime;
  }
  /** @return string */
  public function getNextJobTime()
  {
    return $this->nextJobTime;
  }
  /** @param string */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
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

class GoogleCloudDatapipelinesV1Schema extends \Google\Collection
{
  /** @var GoogleCloudDatapipelinesV1Field[] */
  public $fields;
  /** @var string */
  public $referenceId;
  protected $collection_key = 'fields';
  protected $fieldsType = GoogleCloudDatapipelinesV1Field::class;
  protected $fieldsDataType = 'array';
  /** @param GoogleCloudDatapipelinesV1Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDatapipelinesV1Field[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setReferenceId($referenceId)
  {
    $this->referenceId = $referenceId;
  }
  /** @return string */
  public function getReferenceId()
  {
    return $this->referenceId;
  }
}

class GoogleCloudDatapipelinesV1SchemaSource extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1Schema */
  public $localSchema;
  /** @var string */
  public $referenceId;
  protected $localSchemaType = GoogleCloudDatapipelinesV1Schema::class;
  protected $localSchemaDataType = '';
  /** @param GoogleCloudDatapipelinesV1Schema */
  public function setLocalSchema(GoogleCloudDatapipelinesV1Schema $localSchema)
  {
    $this->localSchema = $localSchema;
  }
  /** @return GoogleCloudDatapipelinesV1Schema */
  public function getLocalSchema()
  {
    return $this->localSchema;
  }
  /** @param string */
  public function setReferenceId($referenceId)
  {
    $this->referenceId = $referenceId;
  }
  /** @return string */
  public function getReferenceId()
  {
    return $this->referenceId;
  }
}

class GoogleCloudDatapipelinesV1SdkVersion extends \Google\Model
{
  /** @var string */
  public $sdkSupportStatus;
  /** @var string */
  public $version;
  /** @var string */
  public $versionDisplayName;

  /** @param string */
  public function setSdkSupportStatus($sdkSupportStatus)
  {
    $this->sdkSupportStatus = $sdkSupportStatus;
  }
  /** @return string */
  public function getSdkSupportStatus()
  {
    return $this->sdkSupportStatus;
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
  /** @param string */
  public function setVersionDisplayName($versionDisplayName)
  {
    $this->versionDisplayName = $versionDisplayName;
  }
  /** @return string */
  public function getVersionDisplayName()
  {
    return $this->versionDisplayName;
  }
}

class GoogleCloudDatapipelinesV1StopPipelineRequest extends \Google\Model
{
}

class GoogleCloudDatapipelinesV1TransformDescription extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudDatapipelinesV1Schema */
  public $options;
  /** @var string */
  public $uniformResourceName;
  protected $optionsType = GoogleCloudDatapipelinesV1Schema::class;
  protected $optionsDataType = '';
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
  /** @param GoogleCloudDatapipelinesV1Schema */
  public function setOptions(GoogleCloudDatapipelinesV1Schema $options)
  {
    $this->options = $options;
  }
  /** @return GoogleCloudDatapipelinesV1Schema */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param string */
  public function setUniformResourceName($uniformResourceName)
  {
    $this->uniformResourceName = $uniformResourceName;
  }
  /** @return string */
  public function getUniformResourceName()
  {
    return $this->uniformResourceName;
  }
}

class GoogleCloudDatapipelinesV1Workload extends \Google\Model
{
  /** @var GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest */
  public $dataflowFlexTemplateRequest;
  /** @var GoogleCloudDatapipelinesV1LaunchTemplateRequest */
  public $dataflowLaunchTemplateRequest;
  protected $dataflowFlexTemplateRequestType = GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest::class;
  protected $dataflowFlexTemplateRequestDataType = '';
  protected $dataflowLaunchTemplateRequestType = GoogleCloudDatapipelinesV1LaunchTemplateRequest::class;
  protected $dataflowLaunchTemplateRequestDataType = '';
  /** @param GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest */
  public function setDataflowFlexTemplateRequest(GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest $dataflowFlexTemplateRequest)
  {
    $this->dataflowFlexTemplateRequest = $dataflowFlexTemplateRequest;
  }
  /** @return GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest */
  public function getDataflowFlexTemplateRequest()
  {
    return $this->dataflowFlexTemplateRequest;
  }
  /** @param GoogleCloudDatapipelinesV1LaunchTemplateRequest */
  public function setDataflowLaunchTemplateRequest(GoogleCloudDatapipelinesV1LaunchTemplateRequest $dataflowLaunchTemplateRequest)
  {
    $this->dataflowLaunchTemplateRequest = $dataflowLaunchTemplateRequest;
  }
  /** @return GoogleCloudDatapipelinesV1LaunchTemplateRequest */
  public function getDataflowLaunchTemplateRequest()
  {
    return $this->dataflowLaunchTemplateRequest;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleRpcStatus extends \Google\Collection
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

class GoogleTypeDateTime extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $month;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;
  /** @var GoogleTypeTimeZone */
  public $timeZone;
  /** @var string */
  public $utcOffset;
  /** @var int */
  public $year;
  protected $timeZoneType = GoogleTypeTimeZone::class;
  protected $timeZoneDataType = '';
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
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
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
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
  /** @param GoogleTypeTimeZone */
  public function setTimeZone(GoogleTypeTimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return GoogleTypeTimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /** @return string */
  public function getUtcOffset()
  {
    return $this->utcOffset;
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

class GoogleTypeDecimal extends \Google\Model
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

class GoogleTypeTimeZone extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $version;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatapipelinesV1ArrayValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ArrayValue');
class_alias(GoogleCloudDatapipelinesV1AtomicValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1AtomicValue');
class_alias(GoogleCloudDatapipelinesV1BatchGetTransformDescriptionsResponse::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1BatchGetTransformDescriptionsResponse');
class_alias(GoogleCloudDatapipelinesV1ComputeSchemaRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ComputeSchemaRequest');
class_alias(GoogleCloudDatapipelinesV1ConfiguredTransform::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ConfiguredTransform');
class_alias(GoogleCloudDatapipelinesV1DataflowJobDetails::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1DataflowJobDetails');
class_alias(GoogleCloudDatapipelinesV1EnumerationValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1EnumerationValue');
class_alias(GoogleCloudDatapipelinesV1Field::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Field');
class_alias(GoogleCloudDatapipelinesV1FieldType::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1FieldType');
class_alias(GoogleCloudDatapipelinesV1FieldValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1FieldValue');
class_alias(GoogleCloudDatapipelinesV1FixedBytesValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1FixedBytesValue');
class_alias(GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1FlexTemplateRuntimeEnvironment');
class_alias(GoogleCloudDatapipelinesV1IterableValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1IterableValue');
class_alias(GoogleCloudDatapipelinesV1Job::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Job');
class_alias(GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter');
class_alias(GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest');
class_alias(GoogleCloudDatapipelinesV1LaunchTemplateParameters::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LaunchTemplateParameters');
class_alias(GoogleCloudDatapipelinesV1LaunchTemplateRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LaunchTemplateRequest');
class_alias(GoogleCloudDatapipelinesV1ListJobsResponse::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ListJobsResponse');
class_alias(GoogleCloudDatapipelinesV1ListPipelinesResponse::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ListPipelinesResponse');
class_alias(GoogleCloudDatapipelinesV1LogicalType::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LogicalType');
class_alias(GoogleCloudDatapipelinesV1LogicalTypeEnumerationType::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LogicalTypeEnumerationType');
class_alias(GoogleCloudDatapipelinesV1LogicalTypeFixedBytes::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LogicalTypeFixedBytes');
class_alias(GoogleCloudDatapipelinesV1MapType::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1MapType');
class_alias(GoogleCloudDatapipelinesV1MapValue::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1MapValue');
class_alias(GoogleCloudDatapipelinesV1MapValueEntry::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1MapValueEntry');
class_alias(GoogleCloudDatapipelinesV1Pipeline::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Pipeline');
class_alias(GoogleCloudDatapipelinesV1RawSchemaInfo::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1RawSchemaInfo');
class_alias(GoogleCloudDatapipelinesV1Row::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Row');
class_alias(GoogleCloudDatapipelinesV1RunPipelineRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1RunPipelineRequest');
class_alias(GoogleCloudDatapipelinesV1RunPipelineResponse::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1RunPipelineResponse');
class_alias(GoogleCloudDatapipelinesV1RuntimeEnvironment::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1RuntimeEnvironment');
class_alias(GoogleCloudDatapipelinesV1ScheduleSpec::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1ScheduleSpec');
class_alias(GoogleCloudDatapipelinesV1Schema::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Schema');
class_alias(GoogleCloudDatapipelinesV1SchemaSource::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1SchemaSource');
class_alias(GoogleCloudDatapipelinesV1SdkVersion::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1SdkVersion');
class_alias(GoogleCloudDatapipelinesV1StopPipelineRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1StopPipelineRequest');
class_alias(GoogleCloudDatapipelinesV1TransformDescription::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1TransformDescription');
class_alias(GoogleCloudDatapipelinesV1Workload::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1Workload');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Datapipelines_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Datapipelines_GoogleRpcStatus');
class_alias(GoogleTypeDateTime::class, 'Google_Service_Datapipelines_GoogleTypeDateTime');
class_alias(GoogleTypeDecimal::class, 'Google_Service_Datapipelines_GoogleTypeDecimal');
class_alias(GoogleTypeTimeZone::class, 'Google_Service_Datapipelines_GoogleTypeTimeZone');
