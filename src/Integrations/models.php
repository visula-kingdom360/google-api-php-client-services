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

namespace Google\Service\Integrations;

class CrmlogErrorCode extends \Google\Model
{
  /** @var string */
  public $commonErrorCode;

  /** @param string */
  public function setCommonErrorCode($commonErrorCode)
  {
    $this->commonErrorCode = $commonErrorCode;
  }
  /** @return string */
  public function getCommonErrorCode()
  {
    return $this->commonErrorCode;
  }
}

class EnterpriseCrmCardsCellValue extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  public $doubleValue;
  /** @var GoogleProtobufEmpty */
  public $empty;
  /** @var string */
  public $longValue;
  /** @var string */
  public $stringValue;
  protected $emptyType = GoogleProtobufEmpty::class;
  protected $emptyDataType = '';
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
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param GoogleProtobufEmpty */
  public function setEmpty(GoogleProtobufEmpty $empty)
  {
    $this->empty = $empty;
  }
  /** @return GoogleProtobufEmpty */
  public function getEmpty()
  {
    return $this->empty;
  }
  /** @param string */
  public function setLongValue($longValue)
  {
    $this->longValue = $longValue;
  }
  /** @return string */
  public function getLongValue()
  {
    return $this->longValue;
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

class EnterpriseCrmCardsRow extends \Google\Collection
{
  /** @var EnterpriseCrmCardsCellValue[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = EnterpriseCrmCardsCellValue::class;
  protected $cellsDataType = 'array';
  /** @param EnterpriseCrmCardsCellValue[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return EnterpriseCrmCardsCellValue[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class EnterpriseCrmCardsTabularData extends \Google\Collection
{
  /** @var string[] */
  public $headers;
  /** @var EnterpriseCrmCardsRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = EnterpriseCrmCardsRow::class;
  protected $rowsDataType = 'array';
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param EnterpriseCrmCardsRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return EnterpriseCrmCardsRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class EnterpriseCrmCardsTemplatesAplosSeriesData extends \Google\Collection
{
  /** @var EnterpriseCrmCardsTemplatesAplosSeriesDataRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = EnterpriseCrmCardsTemplatesAplosSeriesDataRow::class;
  protected $rowsDataType = 'array';
  /** @param EnterpriseCrmCardsTemplatesAplosSeriesDataRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return EnterpriseCrmCardsTemplatesAplosSeriesDataRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class EnterpriseCrmCardsTemplatesAplosSeriesDataRow extends \Google\Model
{
  /** @var EnterpriseCrmCardsCellValue */
  public $x;
  /** @var EnterpriseCrmCardsCellValue */
  public $y;
  protected $xType = EnterpriseCrmCardsCellValue::class;
  protected $xDataType = '';
  protected $yType = EnterpriseCrmCardsCellValue::class;
  protected $yDataType = '';
  /** @param EnterpriseCrmCardsCellValue */
  public function setX(EnterpriseCrmCardsCellValue $x)
  {
    $this->x = $x;
  }
  /** @return EnterpriseCrmCardsCellValue */
  public function getX()
  {
    return $this->x;
  }
  /** @param EnterpriseCrmCardsCellValue */
  public function setY(EnterpriseCrmCardsCellValue $y)
  {
    $this->y = $y;
  }
  /** @return EnterpriseCrmCardsCellValue */
  public function getY()
  {
    return $this->y;
  }
}

class EnterpriseCrmCardsTemplatesAplosSeriesListData extends \Google\Collection
{
  /** @var EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries[] */
  public $series;
  protected $collection_key = 'series';
  protected $seriesType = EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries::class;
  protected $seriesDataType = 'array';
  /** @param EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries[] */
  public function setSeries($series)
  {
    $this->series = $series;
  }
  /** @return EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries[] */
  public function getSeries()
  {
    return $this->series;
  }
}

class EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries extends \Google\Model
{
  /** @var EnterpriseCrmCardsTemplatesAplosSeriesData */
  public $data;
  /** @var string */
  public $name;
  protected $dataType = EnterpriseCrmCardsTemplatesAplosSeriesData::class;
  protected $dataDataType = '';
  /** @param EnterpriseCrmCardsTemplatesAplosSeriesData */
  public function setData(EnterpriseCrmCardsTemplatesAplosSeriesData $data)
  {
    $this->data = $data;
  }
  /** @return EnterpriseCrmCardsTemplatesAplosSeriesData */
  public function getData()
  {
    return $this->data;
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

class EnterpriseCrmEventbusAuthconfigAuthConfigTaskParam extends \Google\Collection
{
  /** @var string[] */
  public $allowedCredentialTypes;
  /** @var bool */
  public $allowedServiceAccountInContext;
  /** @var string */
  public $authConfigId;
  /** @var string */
  public $scope;
  /** @var bool */
  public $useServiceAccountInContext;
  protected $collection_key = 'allowedCredentialTypes';
  /** @param string[] */
  public function setAllowedCredentialTypes($allowedCredentialTypes)
  {
    $this->allowedCredentialTypes = $allowedCredentialTypes;
  }
  /** @return string[] */
  public function getAllowedCredentialTypes()
  {
    return $this->allowedCredentialTypes;
  }
  /** @param bool */
  public function setAllowedServiceAccountInContext($allowedServiceAccountInContext)
  {
    $this->allowedServiceAccountInContext = $allowedServiceAccountInContext;
  }
  /** @return bool */
  public function getAllowedServiceAccountInContext()
  {
    return $this->allowedServiceAccountInContext;
  }
  /** @param string */
  public function setAuthConfigId($authConfigId)
  {
    $this->authConfigId = $authConfigId;
  }
  /** @return string */
  public function getAuthConfigId()
  {
    return $this->authConfigId;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param bool */
  public function setUseServiceAccountInContext($useServiceAccountInContext)
  {
    $this->useServiceAccountInContext = $useServiceAccountInContext;
  }
  /** @return bool */
  public function getUseServiceAccountInContext()
  {
    return $this->useServiceAccountInContext;
  }
}

class EnterpriseCrmEventbusProtoAddress extends \Google\Collection
{
  /** @var string */
  public $email;
  /** @var string */
  public $name;
  /** @var EnterpriseCrmEventbusProtoToken[] */
  public $tokens;
  protected $collection_key = 'tokens';
  protected $tokensType = EnterpriseCrmEventbusProtoToken::class;
  protected $tokensDataType = 'array';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param EnterpriseCrmEventbusProtoToken[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return EnterpriseCrmEventbusProtoToken[] */
  public function getTokens()
  {
    return $this->tokens;
  }
}

class EnterpriseCrmEventbusProtoAttributes extends \Google\Collection
{
  /** @var string */
  public $dataType;
  /** @var EnterpriseCrmEventbusProtoValueType */
  public $defaultValue;
  /** @var bool */
  public $isRequired;
  /** @var bool */
  public $isSearchable;
  /** @var EnterpriseCrmEventbusProtoLogSettings */
  public $logSettings;
  /** @var string */
  public $searchable;
  /** @var string[] */
  public $taskVisibility;
  protected $collection_key = 'taskVisibility';
  protected $defaultValueType = EnterpriseCrmEventbusProtoValueType::class;
  protected $defaultValueDataType = '';
  protected $logSettingsType = EnterpriseCrmEventbusProtoLogSettings::class;
  protected $logSettingsDataType = '';
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
  /** @param EnterpriseCrmEventbusProtoValueType */
  public function setDefaultValue(EnterpriseCrmEventbusProtoValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return EnterpriseCrmEventbusProtoValueType */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  /** @param bool */
  public function setIsSearchable($isSearchable)
  {
    $this->isSearchable = $isSearchable;
  }
  /** @return bool */
  public function getIsSearchable()
  {
    return $this->isSearchable;
  }
  /** @param EnterpriseCrmEventbusProtoLogSettings */
  public function setLogSettings(EnterpriseCrmEventbusProtoLogSettings $logSettings)
  {
    $this->logSettings = $logSettings;
  }
  /** @return EnterpriseCrmEventbusProtoLogSettings */
  public function getLogSettings()
  {
    return $this->logSettings;
  }
  /** @param string */
  public function setSearchable($searchable)
  {
    $this->searchable = $searchable;
  }
  /** @return string */
  public function getSearchable()
  {
    return $this->searchable;
  }
  /** @param string[] */
  public function setTaskVisibility($taskVisibility)
  {
    $this->taskVisibility = $taskVisibility;
  }
  /** @return string[] */
  public function getTaskVisibility()
  {
    return $this->taskVisibility;
  }
}

class EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList extends \Google\Collection
{
  /** @var string[] */
  public $enumStrings;
  /** @var string */
  public $filterType;
  protected $collection_key = 'enumStrings';
  /** @param string[] */
  public function setEnumStrings($enumStrings)
  {
    $this->enumStrings = $enumStrings;
  }
  /** @return string[] */
  public function getEnumStrings()
  {
    return $this->enumStrings;
  }
  /** @param string */
  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }
  /** @return string */
  public function getFilterType()
  {
    return $this->filterType;
  }
}

class EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue extends \Google\Model
{
  /** @var string */
  public $absolute;
  /** @var int */
  public $percentage;

  /** @param string */
  public function setAbsolute($absolute)
  {
    $this->absolute = $absolute;
  }
  /** @return string */
  public function getAbsolute()
  {
    return $this->absolute;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class EnterpriseCrmEventbusProtoBaseFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoBaseValue extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoFunction */
  public $baseFunction;
  /** @var EnterpriseCrmEventbusProtoParameterValueType */
  public $literalValue;
  /** @var string */
  public $referenceValue;
  protected $baseFunctionType = EnterpriseCrmEventbusProtoFunction::class;
  protected $baseFunctionDataType = '';
  protected $literalValueType = EnterpriseCrmEventbusProtoParameterValueType::class;
  protected $literalValueDataType = '';
  /** @param EnterpriseCrmEventbusProtoFunction */
  public function setBaseFunction(EnterpriseCrmEventbusProtoFunction $baseFunction)
  {
    $this->baseFunction = $baseFunction;
  }
  /** @return EnterpriseCrmEventbusProtoFunction */
  public function getBaseFunction()
  {
    return $this->baseFunction;
  }
  /** @param EnterpriseCrmEventbusProtoParameterValueType */
  public function setLiteralValue(EnterpriseCrmEventbusProtoParameterValueType $literalValue)
  {
    $this->literalValue = $literalValue;
  }
  /** @return EnterpriseCrmEventbusProtoParameterValueType */
  public function getLiteralValue()
  {
    return $this->literalValue;
  }
  /** @param string */
  public function setReferenceValue($referenceValue)
  {
    $this->referenceValue = $referenceValue;
  }
  /** @return string */
  public function getReferenceValue()
  {
    return $this->referenceValue;
  }
}

class EnterpriseCrmEventbusProtoBooleanArrayFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoBooleanFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoBooleanParameterArray extends \Google\Collection
{
  /** @var bool[] */
  public $booleanValues;
  protected $collection_key = 'booleanValues';
  /** @param bool[] */
  public function setBooleanValues($booleanValues)
  {
    $this->booleanValues = $booleanValues;
  }
  /** @return bool[] */
  public function getBooleanValues()
  {
    return $this->booleanValues;
  }
}

class EnterpriseCrmEventbusProtoBuganizerNotification extends \Google\Model
{
  /** @var string */
  public $assigneeEmailAddress;
  /** @var string */
  public $componentId;
  /** @var string */
  public $templateId;
  /** @var string */
  public $title;

  /** @param string */
  public function setAssigneeEmailAddress($assigneeEmailAddress)
  {
    $this->assigneeEmailAddress = $assigneeEmailAddress;
  }
  /** @return string */
  public function getAssigneeEmailAddress()
  {
    return $this->assigneeEmailAddress;
  }
  /** @param string */
  public function setComponentId($componentId)
  {
    $this->componentId = $componentId;
  }
  /** @return string */
  public function getComponentId()
  {
    return $this->componentId;
  }
  /** @param string */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /** @return string */
  public function getTemplateId()
  {
    return $this->templateId;
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

class EnterpriseCrmEventbusProtoCloudSchedulerConfig extends \Google\Model
{
  /** @var string */
  public $cronTab;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $location;
  /** @var string */
  public $serviceAccountEmail;

  /** @param string */
  public function setCronTab($cronTab)
  {
    $this->cronTab = $cronTab;
  }
  /** @return string */
  public function getCronTab()
  {
    return $this->cronTab;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
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
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
}

class EnterpriseCrmEventbusProtoCombinedCondition extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoCondition[] */
  public $conditions;
  protected $collection_key = 'conditions';
  protected $conditionsType = EnterpriseCrmEventbusProtoCondition::class;
  protected $conditionsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoCondition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return EnterpriseCrmEventbusProtoCondition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
}

class EnterpriseCrmEventbusProtoCondition extends \Google\Model
{
  /** @var string */
  public $eventPropertyKey;
  /** @var string */
  public $operator;
  /** @var EnterpriseCrmEventbusProtoValueType */
  public $value;
  protected $valueType = EnterpriseCrmEventbusProtoValueType::class;
  protected $valueDataType = '';
  /** @param string */
  public function setEventPropertyKey($eventPropertyKey)
  {
    $this->eventPropertyKey = $eventPropertyKey;
  }
  /** @return string */
  public function getEventPropertyKey()
  {
    return $this->eventPropertyKey;
  }
  /** @param string */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
  }
  /** @param EnterpriseCrmEventbusProtoValueType */
  public function setValue(EnterpriseCrmEventbusProtoValueType $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmEventbusProtoValueType */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmEventbusProtoConditionResult extends \Google\Model
{
  /** @var string */
  public $currentTaskNumber;
  /** @var string */
  public $nextTaskNumber;
  /** @var bool */
  public $result;

  /** @param string */
  public function setCurrentTaskNumber($currentTaskNumber)
  {
    $this->currentTaskNumber = $currentTaskNumber;
  }
  /** @return string */
  public function getCurrentTaskNumber()
  {
    return $this->currentTaskNumber;
  }
  /** @param string */
  public function setNextTaskNumber($nextTaskNumber)
  {
    $this->nextTaskNumber = $nextTaskNumber;
  }
  /** @return string */
  public function getNextTaskNumber()
  {
    return $this->nextTaskNumber;
  }
  /** @param bool */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return bool */
  public function getResult()
  {
    return $this->result;
  }
}

class EnterpriseCrmEventbusProtoConnectorsConnection extends \Google\Model
{
  /** @var string */
  public $connectionName;
  /** @var string */
  public $connectorVersion;
  /** @var string */
  public $serviceName;

  /** @param string */
  public function setConnectionName($connectionName)
  {
    $this->connectionName = $connectionName;
  }
  /** @return string */
  public function getConnectionName()
  {
    return $this->connectionName;
  }
  /** @param string */
  public function setConnectorVersion($connectorVersion)
  {
    $this->connectorVersion = $connectorVersion;
  }
  /** @return string */
  public function getConnectorVersion()
  {
    return $this->connectorVersion;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
}

class EnterpriseCrmEventbusProtoConnectorsGenericConnectorTaskConfig extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoConnectorsConnection */
  public $connection;
  /** @var string */
  public $operation;
  protected $connectionType = EnterpriseCrmEventbusProtoConnectorsConnection::class;
  protected $connectionDataType = '';
  /** @param EnterpriseCrmEventbusProtoConnectorsConnection */
  public function setConnection(EnterpriseCrmEventbusProtoConnectorsConnection $connection)
  {
    $this->connection = $connection;
  }
  /** @return EnterpriseCrmEventbusProtoConnectorsConnection */
  public function getConnection()
  {
    return $this->connection;
  }
  /** @param string */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
  }
}

class EnterpriseCrmEventbusProtoCoordinate extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class EnterpriseCrmEventbusProtoCustomSuspensionRequest extends \Google\Model
{
  /** @var GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest */
  public $postToQueueWithTriggerIdRequest;
  /** @var string */
  public $suspensionInfoEventParameterKey;
  protected $postToQueueWithTriggerIdRequestType = GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest::class;
  protected $postToQueueWithTriggerIdRequestDataType = '';
  /** @param GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest */
  public function setPostToQueueWithTriggerIdRequest(GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest $postToQueueWithTriggerIdRequest)
  {
    $this->postToQueueWithTriggerIdRequest = $postToQueueWithTriggerIdRequest;
  }
  /** @return GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest */
  public function getPostToQueueWithTriggerIdRequest()
  {
    return $this->postToQueueWithTriggerIdRequest;
  }
  /** @param string */
  public function setSuspensionInfoEventParameterKey($suspensionInfoEventParameterKey)
  {
    $this->suspensionInfoEventParameterKey = $suspensionInfoEventParameterKey;
  }
  /** @return string */
  public function getSuspensionInfoEventParameterKey()
  {
    return $this->suspensionInfoEventParameterKey;
  }
}

class EnterpriseCrmEventbusProtoDoubleArray extends \Google\Collection
{
  public $values;
  protected $collection_key = 'values';
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class EnterpriseCrmEventbusProtoDoubleArrayFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoDoubleFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoDoubleParameterArray extends \Google\Collection
{
  public $doubleValues;
  protected $collection_key = 'doubleValues';
  public function setDoubleValues($doubleValues)
  {
    $this->doubleValues = $doubleValues;
  }
  public function getDoubleValues()
  {
    return $this->doubleValues;
  }
}

class EnterpriseCrmEventbusProtoErrorDetail extends \Google\Model
{
  /** @var CrmlogErrorCode */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $severity;
  /** @var int */
  public $taskNumber;
  protected $errorCodeType = CrmlogErrorCode::class;
  protected $errorCodeDataType = '';
  /** @param CrmlogErrorCode */
  public function setErrorCode(CrmlogErrorCode $errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return CrmlogErrorCode */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param int */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return int */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class EnterpriseCrmEventbusProtoEventBusProperties extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoPropertyEntry[] */
  public $properties;
  protected $collection_key = 'properties';
  protected $propertiesType = EnterpriseCrmEventbusProtoPropertyEntry::class;
  protected $propertiesDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoPropertyEntry[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return EnterpriseCrmEventbusProtoPropertyEntry[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class EnterpriseCrmEventbusProtoEventExecutionDetails extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public $eventAttemptStats;
  /** @var EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public $eventExecutionSnapshot;
  /** @var string */
  public $eventExecutionState;
  /** @var int */
  public $eventRetriesFromBeginningCount;
  /** @var string */
  public $logFilePath;
  /** @var string */
  public $networkAddress;
  /** @var string */
  public $nextExecutionTime;
  /** @var int */
  public $ryeLockUnheldCount;
  protected $collection_key = 'eventExecutionSnapshot';
  protected $eventAttemptStatsType = EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats::class;
  protected $eventAttemptStatsDataType = 'array';
  protected $eventExecutionSnapshotType = EnterpriseCrmEventbusProtoEventExecutionSnapshot::class;
  protected $eventExecutionSnapshotDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public function setEventAttemptStats($eventAttemptStats)
  {
    $this->eventAttemptStats = $eventAttemptStats;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public function getEventAttemptStats()
  {
    return $this->eventAttemptStats;
  }
  /** @param EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public function setEventExecutionSnapshot($eventExecutionSnapshot)
  {
    $this->eventExecutionSnapshot = $eventExecutionSnapshot;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public function getEventExecutionSnapshot()
  {
    return $this->eventExecutionSnapshot;
  }
  /** @param string */
  public function setEventExecutionState($eventExecutionState)
  {
    $this->eventExecutionState = $eventExecutionState;
  }
  /** @return string */
  public function getEventExecutionState()
  {
    return $this->eventExecutionState;
  }
  /** @param int */
  public function setEventRetriesFromBeginningCount($eventRetriesFromBeginningCount)
  {
    $this->eventRetriesFromBeginningCount = $eventRetriesFromBeginningCount;
  }
  /** @return int */
  public function getEventRetriesFromBeginningCount()
  {
    return $this->eventRetriesFromBeginningCount;
  }
  /** @param string */
  public function setLogFilePath($logFilePath)
  {
    $this->logFilePath = $logFilePath;
  }
  /** @return string */
  public function getLogFilePath()
  {
    return $this->logFilePath;
  }
  /** @param string */
  public function setNetworkAddress($networkAddress)
  {
    $this->networkAddress = $networkAddress;
  }
  /** @return string */
  public function getNetworkAddress()
  {
    return $this->networkAddress;
  }
  /** @param string */
  public function setNextExecutionTime($nextExecutionTime)
  {
    $this->nextExecutionTime = $nextExecutionTime;
  }
  /** @return string */
  public function getNextExecutionTime()
  {
    return $this->nextExecutionTime;
  }
  /** @param int */
  public function setRyeLockUnheldCount($ryeLockUnheldCount)
  {
    $this->ryeLockUnheldCount = $ryeLockUnheldCount;
  }
  /** @return int */
  public function getRyeLockUnheldCount()
  {
    return $this->ryeLockUnheldCount;
  }
}

class EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats extends \Google\Model
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

class EnterpriseCrmEventbusProtoEventExecutionSnapshot extends \Google\Collection
{
  /** @var string */
  public $checkpointTaskNumber;
  /** @var EnterpriseCrmEventbusProtoConditionResult[] */
  public $conditionResults;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $diffParams;
  /** @var string */
  public $eventExecutionInfoId;
  /** @var string */
  public $eventExecutionSnapshotId;
  /** @var EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public $eventExecutionSnapshotMetadata;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $eventParams;
  /** @var bool */
  public $exceedMaxSize;
  /** @var string */
  public $snapshotTime;
  /** @var EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public $taskExecutionDetails;
  /** @var string */
  public $taskName;
  protected $collection_key = 'taskExecutionDetails';
  protected $conditionResultsType = EnterpriseCrmEventbusProtoConditionResult::class;
  protected $conditionResultsDataType = 'array';
  protected $diffParamsType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $diffParamsDataType = '';
  protected $eventExecutionSnapshotMetadataType = EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata::class;
  protected $eventExecutionSnapshotMetadataDataType = '';
  protected $eventParamsType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $eventParamsDataType = '';
  protected $taskExecutionDetailsType = EnterpriseCrmEventbusProtoTaskExecutionDetails::class;
  protected $taskExecutionDetailsDataType = 'array';
  /** @param string */
  public function setCheckpointTaskNumber($checkpointTaskNumber)
  {
    $this->checkpointTaskNumber = $checkpointTaskNumber;
  }
  /** @return string */
  public function getCheckpointTaskNumber()
  {
    return $this->checkpointTaskNumber;
  }
  /** @param EnterpriseCrmEventbusProtoConditionResult[] */
  public function setConditionResults($conditionResults)
  {
    $this->conditionResults = $conditionResults;
  }
  /** @return EnterpriseCrmEventbusProtoConditionResult[] */
  public function getConditionResults()
  {
    return $this->conditionResults;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setDiffParams(EnterpriseCrmEventbusProtoEventParameters $diffParams)
  {
    $this->diffParams = $diffParams;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getDiffParams()
  {
    return $this->diffParams;
  }
  /** @param string */
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
  /** @param string */
  public function setEventExecutionSnapshotId($eventExecutionSnapshotId)
  {
    $this->eventExecutionSnapshotId = $eventExecutionSnapshotId;
  }
  /** @return string */
  public function getEventExecutionSnapshotId()
  {
    return $this->eventExecutionSnapshotId;
  }
  /** @param EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public function setEventExecutionSnapshotMetadata(EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata $eventExecutionSnapshotMetadata)
  {
    $this->eventExecutionSnapshotMetadata = $eventExecutionSnapshotMetadata;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public function getEventExecutionSnapshotMetadata()
  {
    return $this->eventExecutionSnapshotMetadata;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setEventParams(EnterpriseCrmEventbusProtoEventParameters $eventParams)
  {
    $this->eventParams = $eventParams;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getEventParams()
  {
    return $this->eventParams;
  }
  /** @param bool */
  public function setExceedMaxSize($exceedMaxSize)
  {
    $this->exceedMaxSize = $exceedMaxSize;
  }
  /** @return bool */
  public function getExceedMaxSize()
  {
    return $this->exceedMaxSize;
  }
  /** @param string */
  public function setSnapshotTime($snapshotTime)
  {
    $this->snapshotTime = $snapshotTime;
  }
  /** @return string */
  public function getSnapshotTime()
  {
    return $this->snapshotTime;
  }
  /** @param EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public function setTaskExecutionDetails($taskExecutionDetails)
  {
    $this->taskExecutionDetails = $taskExecutionDetails;
  }
  /** @return EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public function getTaskExecutionDetails()
  {
    return $this->taskExecutionDetails;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
}

class EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata extends \Google\Model
{
  /** @var int */
  public $eventAttemptNum;
  /** @var int */
  public $taskAttemptNum;
  /** @var string */
  public $taskName;
  /** @var string */
  public $taskNumber;

  /** @param int */
  public function setEventAttemptNum($eventAttemptNum)
  {
    $this->eventAttemptNum = $eventAttemptNum;
  }
  /** @return int */
  public function getEventAttemptNum()
  {
    return $this->eventAttemptNum;
  }
  /** @param int */
  public function setTaskAttemptNum($taskAttemptNum)
  {
    $this->taskAttemptNum = $taskAttemptNum;
  }
  /** @return int */
  public function getTaskAttemptNum()
  {
    return $this->taskAttemptNum;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class EnterpriseCrmEventbusProtoEventParameters extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoParameterEntry[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = EnterpriseCrmEventbusProtoParameterEntry::class;
  protected $parametersDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoParameterEntry[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoParameterEntry[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class EnterpriseCrmEventbusProtoExecutionTraceInfo extends \Google\Model
{
  /** @var string */
  public $parentEventExecutionInfoId;
  /** @var string */
  public $traceId;

  /** @param string */
  public function setParentEventExecutionInfoId($parentEventExecutionInfoId)
  {
    $this->parentEventExecutionInfoId = $parentEventExecutionInfoId;
  }
  /** @return string */
  public function getParentEventExecutionInfoId()
  {
    return $this->parentEventExecutionInfoId;
  }
  /** @param string */
  public function setTraceId($traceId)
  {
    $this->traceId = $traceId;
  }
  /** @return string */
  public function getTraceId()
  {
    return $this->traceId;
  }
}

class EnterpriseCrmEventbusProtoExternalTraffic extends \Google\Model
{
  /** @var string */
  public $gcpProjectId;
  /** @var string */
  public $gcpProjectNumber;
  /** @var string */
  public $location;
  /** @var string */
  public $source;

  /** @param string */
  public function setGcpProjectId($gcpProjectId)
  {
    $this->gcpProjectId = $gcpProjectId;
  }
  /** @return string */
  public function getGcpProjectId()
  {
    return $this->gcpProjectId;
  }
  /** @param string */
  public function setGcpProjectNumber($gcpProjectNumber)
  {
    $this->gcpProjectNumber = $gcpProjectNumber;
  }
  /** @return string */
  public function getGcpProjectNumber()
  {
    return $this->gcpProjectNumber;
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
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class EnterpriseCrmEventbusProtoFailurePolicy extends \Google\Model
{
  /** @var string */
  public $intervalInSeconds;
  /** @var int */
  public $maxNumRetries;
  /** @var string */
  public $retryStrategy;

  /** @param string */
  public function setIntervalInSeconds($intervalInSeconds)
  {
    $this->intervalInSeconds = $intervalInSeconds;
  }
  /** @return string */
  public function getIntervalInSeconds()
  {
    return $this->intervalInSeconds;
  }
  /** @param int */
  public function setMaxNumRetries($maxNumRetries)
  {
    $this->maxNumRetries = $maxNumRetries;
  }
  /** @return int */
  public function getMaxNumRetries()
  {
    return $this->maxNumRetries;
  }
  /** @param string */
  public function setRetryStrategy($retryStrategy)
  {
    $this->retryStrategy = $retryStrategy;
  }
  /** @return string */
  public function getRetryStrategy()
  {
    return $this->retryStrategy;
  }
}

class EnterpriseCrmEventbusProtoField extends \Google\Model
{
  /** @var string */
  public $cardinality;
  /** @var EnterpriseCrmEventbusProtoParameterValueType */
  public $defaultValue;
  /** @var string */
  public $fieldType;
  /** @var string */
  public $protoDefPath;
  /** @var string */
  public $referenceKey;
  /** @var EnterpriseCrmEventbusProtoTransformExpression */
  public $transformExpression;
  protected $defaultValueType = EnterpriseCrmEventbusProtoParameterValueType::class;
  protected $defaultValueDataType = '';
  protected $transformExpressionType = EnterpriseCrmEventbusProtoTransformExpression::class;
  protected $transformExpressionDataType = '';
  /** @param string */
  public function setCardinality($cardinality)
  {
    $this->cardinality = $cardinality;
  }
  /** @return string */
  public function getCardinality()
  {
    return $this->cardinality;
  }
  /** @param EnterpriseCrmEventbusProtoParameterValueType */
  public function setDefaultValue(EnterpriseCrmEventbusProtoParameterValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return EnterpriseCrmEventbusProtoParameterValueType */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param string */
  public function setFieldType($fieldType)
  {
    $this->fieldType = $fieldType;
  }
  /** @return string */
  public function getFieldType()
  {
    return $this->fieldType;
  }
  /** @param string */
  public function setProtoDefPath($protoDefPath)
  {
    $this->protoDefPath = $protoDefPath;
  }
  /** @return string */
  public function getProtoDefPath()
  {
    return $this->protoDefPath;
  }
  /** @param string */
  public function setReferenceKey($referenceKey)
  {
    $this->referenceKey = $referenceKey;
  }
  /** @return string */
  public function getReferenceKey()
  {
    return $this->referenceKey;
  }
  /** @param EnterpriseCrmEventbusProtoTransformExpression */
  public function setTransformExpression(EnterpriseCrmEventbusProtoTransformExpression $transformExpression)
  {
    $this->transformExpression = $transformExpression;
  }
  /** @return EnterpriseCrmEventbusProtoTransformExpression */
  public function getTransformExpression()
  {
    return $this->transformExpression;
  }
}

class EnterpriseCrmEventbusProtoFieldMappingConfig extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoMappedField[] */
  public $mappedFields;
  protected $collection_key = 'mappedFields';
  protected $mappedFieldsType = EnterpriseCrmEventbusProtoMappedField::class;
  protected $mappedFieldsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoMappedField[] */
  public function setMappedFields($mappedFields)
  {
    $this->mappedFields = $mappedFields;
  }
  /** @return EnterpriseCrmEventbusProtoMappedField[] */
  public function getMappedFields()
  {
    return $this->mappedFields;
  }
}

class EnterpriseCrmEventbusProtoFunction extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoFunctionType */
  public $functionType;
  /** @var EnterpriseCrmEventbusProtoTransformExpression[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $functionTypeType = EnterpriseCrmEventbusProtoFunctionType::class;
  protected $functionTypeDataType = '';
  protected $parametersType = EnterpriseCrmEventbusProtoTransformExpression::class;
  protected $parametersDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoFunctionType */
  public function setFunctionType(EnterpriseCrmEventbusProtoFunctionType $functionType)
  {
    $this->functionType = $functionType;
  }
  /** @return EnterpriseCrmEventbusProtoFunctionType */
  public function getFunctionType()
  {
    return $this->functionType;
  }
  /** @param EnterpriseCrmEventbusProtoTransformExpression[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoTransformExpression[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class EnterpriseCrmEventbusProtoFunctionType extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoBaseFunction */
  public $baseFunction;
  /** @var EnterpriseCrmEventbusProtoBooleanArrayFunction */
  public $booleanArrayFunction;
  /** @var EnterpriseCrmEventbusProtoBooleanFunction */
  public $booleanFunction;
  /** @var EnterpriseCrmEventbusProtoDoubleArrayFunction */
  public $doubleArrayFunction;
  /** @var EnterpriseCrmEventbusProtoDoubleFunction */
  public $doubleFunction;
  /** @var EnterpriseCrmEventbusProtoIntArrayFunction */
  public $intArrayFunction;
  /** @var EnterpriseCrmEventbusProtoIntFunction */
  public $intFunction;
  /** @var EnterpriseCrmEventbusProtoJsonFunction */
  public $jsonFunction;
  /** @var EnterpriseCrmEventbusProtoProtoArrayFunction */
  public $protoArrayFunction;
  /** @var EnterpriseCrmEventbusProtoProtoFunction */
  public $protoFunction;
  /** @var EnterpriseCrmEventbusProtoStringArrayFunction */
  public $stringArrayFunction;
  /** @var EnterpriseCrmEventbusProtoStringFunction */
  public $stringFunction;
  protected $baseFunctionType = EnterpriseCrmEventbusProtoBaseFunction::class;
  protected $baseFunctionDataType = '';
  protected $booleanArrayFunctionType = EnterpriseCrmEventbusProtoBooleanArrayFunction::class;
  protected $booleanArrayFunctionDataType = '';
  protected $booleanFunctionType = EnterpriseCrmEventbusProtoBooleanFunction::class;
  protected $booleanFunctionDataType = '';
  protected $doubleArrayFunctionType = EnterpriseCrmEventbusProtoDoubleArrayFunction::class;
  protected $doubleArrayFunctionDataType = '';
  protected $doubleFunctionType = EnterpriseCrmEventbusProtoDoubleFunction::class;
  protected $doubleFunctionDataType = '';
  protected $intArrayFunctionType = EnterpriseCrmEventbusProtoIntArrayFunction::class;
  protected $intArrayFunctionDataType = '';
  protected $intFunctionType = EnterpriseCrmEventbusProtoIntFunction::class;
  protected $intFunctionDataType = '';
  protected $jsonFunctionType = EnterpriseCrmEventbusProtoJsonFunction::class;
  protected $jsonFunctionDataType = '';
  protected $protoArrayFunctionType = EnterpriseCrmEventbusProtoProtoArrayFunction::class;
  protected $protoArrayFunctionDataType = '';
  protected $protoFunctionType = EnterpriseCrmEventbusProtoProtoFunction::class;
  protected $protoFunctionDataType = '';
  protected $stringArrayFunctionType = EnterpriseCrmEventbusProtoStringArrayFunction::class;
  protected $stringArrayFunctionDataType = '';
  protected $stringFunctionType = EnterpriseCrmEventbusProtoStringFunction::class;
  protected $stringFunctionDataType = '';
  /** @param EnterpriseCrmEventbusProtoBaseFunction */
  public function setBaseFunction(EnterpriseCrmEventbusProtoBaseFunction $baseFunction)
  {
    $this->baseFunction = $baseFunction;
  }
  /** @return EnterpriseCrmEventbusProtoBaseFunction */
  public function getBaseFunction()
  {
    return $this->baseFunction;
  }
  /** @param EnterpriseCrmEventbusProtoBooleanArrayFunction */
  public function setBooleanArrayFunction(EnterpriseCrmEventbusProtoBooleanArrayFunction $booleanArrayFunction)
  {
    $this->booleanArrayFunction = $booleanArrayFunction;
  }
  /** @return EnterpriseCrmEventbusProtoBooleanArrayFunction */
  public function getBooleanArrayFunction()
  {
    return $this->booleanArrayFunction;
  }
  /** @param EnterpriseCrmEventbusProtoBooleanFunction */
  public function setBooleanFunction(EnterpriseCrmEventbusProtoBooleanFunction $booleanFunction)
  {
    $this->booleanFunction = $booleanFunction;
  }
  /** @return EnterpriseCrmEventbusProtoBooleanFunction */
  public function getBooleanFunction()
  {
    return $this->booleanFunction;
  }
  /** @param EnterpriseCrmEventbusProtoDoubleArrayFunction */
  public function setDoubleArrayFunction(EnterpriseCrmEventbusProtoDoubleArrayFunction $doubleArrayFunction)
  {
    $this->doubleArrayFunction = $doubleArrayFunction;
  }
  /** @return EnterpriseCrmEventbusProtoDoubleArrayFunction */
  public function getDoubleArrayFunction()
  {
    return $this->doubleArrayFunction;
  }
  /** @param EnterpriseCrmEventbusProtoDoubleFunction */
  public function setDoubleFunction(EnterpriseCrmEventbusProtoDoubleFunction $doubleFunction)
  {
    $this->doubleFunction = $doubleFunction;
  }
  /** @return EnterpriseCrmEventbusProtoDoubleFunction */
  public function getDoubleFunction()
  {
    return $this->doubleFunction;
  }
  /** @param EnterpriseCrmEventbusProtoIntArrayFunction */
  public function setIntArrayFunction(EnterpriseCrmEventbusProtoIntArrayFunction $intArrayFunction)
  {
    $this->intArrayFunction = $intArrayFunction;
  }
  /** @return EnterpriseCrmEventbusProtoIntArrayFunction */
  public function getIntArrayFunction()
  {
    return $this->intArrayFunction;
  }
  /** @param EnterpriseCrmEventbusProtoIntFunction */
  public function setIntFunction(EnterpriseCrmEventbusProtoIntFunction $intFunction)
  {
    $this->intFunction = $intFunction;
  }
  /** @return EnterpriseCrmEventbusProtoIntFunction */
  public function getIntFunction()
  {
    return $this->intFunction;
  }
  /** @param EnterpriseCrmEventbusProtoJsonFunction */
  public function setJsonFunction(EnterpriseCrmEventbusProtoJsonFunction $jsonFunction)
  {
    $this->jsonFunction = $jsonFunction;
  }
  /** @return EnterpriseCrmEventbusProtoJsonFunction */
  public function getJsonFunction()
  {
    return $this->jsonFunction;
  }
  /** @param EnterpriseCrmEventbusProtoProtoArrayFunction */
  public function setProtoArrayFunction(EnterpriseCrmEventbusProtoProtoArrayFunction $protoArrayFunction)
  {
    $this->protoArrayFunction = $protoArrayFunction;
  }
  /** @return EnterpriseCrmEventbusProtoProtoArrayFunction */
  public function getProtoArrayFunction()
  {
    return $this->protoArrayFunction;
  }
  /** @param EnterpriseCrmEventbusProtoProtoFunction */
  public function setProtoFunction(EnterpriseCrmEventbusProtoProtoFunction $protoFunction)
  {
    $this->protoFunction = $protoFunction;
  }
  /** @return EnterpriseCrmEventbusProtoProtoFunction */
  public function getProtoFunction()
  {
    return $this->protoFunction;
  }
  /** @param EnterpriseCrmEventbusProtoStringArrayFunction */
  public function setStringArrayFunction(EnterpriseCrmEventbusProtoStringArrayFunction $stringArrayFunction)
  {
    $this->stringArrayFunction = $stringArrayFunction;
  }
  /** @return EnterpriseCrmEventbusProtoStringArrayFunction */
  public function getStringArrayFunction()
  {
    return $this->stringArrayFunction;
  }
  /** @param EnterpriseCrmEventbusProtoStringFunction */
  public function setStringFunction(EnterpriseCrmEventbusProtoStringFunction $stringFunction)
  {
    $this->stringFunction = $stringFunction;
  }
  /** @return EnterpriseCrmEventbusProtoStringFunction */
  public function getStringFunction()
  {
    return $this->stringFunction;
  }
}

class EnterpriseCrmEventbusProtoIntArray extends \Google\Collection
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

class EnterpriseCrmEventbusProtoIntArrayFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoIntFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoIntParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $intValues;
  protected $collection_key = 'intValues';
  /** @param string[] */
  public function setIntValues($intValues)
  {
    $this->intValues = $intValues;
  }
  /** @return string[] */
  public function getIntValues()
  {
    return $this->intValues;
  }
}

class EnterpriseCrmEventbusProtoJsonFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoLogSettings extends \Google\Model
{
  /** @var string */
  public $logFieldName;
  /** @var EnterpriseCrmLoggingGwsSanitizeOptions */
  public $sanitizeOptions;
  /** @var string */
  public $seedPeriod;
  /** @var string */
  public $seedScope;
  /** @var EnterpriseCrmLoggingGwsFieldLimits */
  public $shorteningLimits;
  protected $sanitizeOptionsType = EnterpriseCrmLoggingGwsSanitizeOptions::class;
  protected $sanitizeOptionsDataType = '';
  protected $shorteningLimitsType = EnterpriseCrmLoggingGwsFieldLimits::class;
  protected $shorteningLimitsDataType = '';
  /** @param string */
  public function setLogFieldName($logFieldName)
  {
    $this->logFieldName = $logFieldName;
  }
  /** @return string */
  public function getLogFieldName()
  {
    return $this->logFieldName;
  }
  /** @param EnterpriseCrmLoggingGwsSanitizeOptions */
  public function setSanitizeOptions(EnterpriseCrmLoggingGwsSanitizeOptions $sanitizeOptions)
  {
    $this->sanitizeOptions = $sanitizeOptions;
  }
  /** @return EnterpriseCrmLoggingGwsSanitizeOptions */
  public function getSanitizeOptions()
  {
    return $this->sanitizeOptions;
  }
  /** @param string */
  public function setSeedPeriod($seedPeriod)
  {
    $this->seedPeriod = $seedPeriod;
  }
  /** @return string */
  public function getSeedPeriod()
  {
    return $this->seedPeriod;
  }
  /** @param string */
  public function setSeedScope($seedScope)
  {
    $this->seedScope = $seedScope;
  }
  /** @return string */
  public function getSeedScope()
  {
    return $this->seedScope;
  }
  /** @param EnterpriseCrmLoggingGwsFieldLimits */
  public function setShorteningLimits(EnterpriseCrmLoggingGwsFieldLimits $shorteningLimits)
  {
    $this->shorteningLimits = $shorteningLimits;
  }
  /** @return EnterpriseCrmLoggingGwsFieldLimits */
  public function getShorteningLimits()
  {
    return $this->shorteningLimits;
  }
}

class EnterpriseCrmEventbusProtoLoopMetadata extends \Google\Model
{
  /** @var string */
  public $currentIterationCount;
  /** @var string */
  public $currentIterationDetail;
  /** @var string */
  public $errorMsg;
  /** @var string */
  public $failureLocation;

  /** @param string */
  public function setCurrentIterationCount($currentIterationCount)
  {
    $this->currentIterationCount = $currentIterationCount;
  }
  /** @return string */
  public function getCurrentIterationCount()
  {
    return $this->currentIterationCount;
  }
  /** @param string */
  public function setCurrentIterationDetail($currentIterationDetail)
  {
    $this->currentIterationDetail = $currentIterationDetail;
  }
  /** @return string */
  public function getCurrentIterationDetail()
  {
    return $this->currentIterationDetail;
  }
  /** @param string */
  public function setErrorMsg($errorMsg)
  {
    $this->errorMsg = $errorMsg;
  }
  /** @return string */
  public function getErrorMsg()
  {
    return $this->errorMsg;
  }
  /** @param string */
  public function setFailureLocation($failureLocation)
  {
    $this->failureLocation = $failureLocation;
  }
  /** @return string */
  public function getFailureLocation()
  {
    return $this->failureLocation;
  }
}

class EnterpriseCrmEventbusProtoMappedField extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoField */
  public $inputField;
  /** @var EnterpriseCrmEventbusProtoField */
  public $outputField;
  protected $inputFieldType = EnterpriseCrmEventbusProtoField::class;
  protected $inputFieldDataType = '';
  protected $outputFieldType = EnterpriseCrmEventbusProtoField::class;
  protected $outputFieldDataType = '';
  /** @param EnterpriseCrmEventbusProtoField */
  public function setInputField(EnterpriseCrmEventbusProtoField $inputField)
  {
    $this->inputField = $inputField;
  }
  /** @return EnterpriseCrmEventbusProtoField */
  public function getInputField()
  {
    return $this->inputField;
  }
  /** @param EnterpriseCrmEventbusProtoField */
  public function setOutputField(EnterpriseCrmEventbusProtoField $outputField)
  {
    $this->outputField = $outputField;
  }
  /** @return EnterpriseCrmEventbusProtoField */
  public function getOutputField()
  {
    return $this->outputField;
  }
}

class EnterpriseCrmEventbusProtoNextTask extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoCombinedCondition[] */
  public $combinedConditions;
  /** @var string */
  public $condition;
  /** @var string */
  public $description;
  /** @var string */
  public $label;
  /** @var string */
  public $taskConfigId;
  /** @var string */
  public $taskNumber;
  protected $collection_key = 'combinedConditions';
  protected $combinedConditionsType = EnterpriseCrmEventbusProtoCombinedCondition::class;
  protected $combinedConditionsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoCombinedCondition[] */
  public function setCombinedConditions($combinedConditions)
  {
    $this->combinedConditions = $combinedConditions;
  }
  /** @return EnterpriseCrmEventbusProtoCombinedCondition[] */
  public function getCombinedConditions()
  {
    return $this->combinedConditions;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  public function setTaskConfigId($taskConfigId)
  {
    $this->taskConfigId = $taskConfigId;
  }
  /** @return string */
  public function getTaskConfigId()
  {
    return $this->taskConfigId;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class EnterpriseCrmEventbusProtoNextTeardownTask extends \Google\Model
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

class EnterpriseCrmEventbusProtoNodeIdentifier extends \Google\Model
{
  /** @var string */
  public $elementIdentifier;
  /** @var string */
  public $elementType;

  /** @param string */
  public function setElementIdentifier($elementIdentifier)
  {
    $this->elementIdentifier = $elementIdentifier;
  }
  /** @return string */
  public function getElementIdentifier()
  {
    return $this->elementIdentifier;
  }
  /** @param string */
  public function setElementType($elementType)
  {
    $this->elementType = $elementType;
  }
  /** @return string */
  public function getElementType()
  {
    return $this->elementType;
  }
}

class EnterpriseCrmEventbusProtoNotification extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoBuganizerNotification */
  public $buganizerNotification;
  /** @var EnterpriseCrmEventbusProtoAddress */
  public $emailAddress;
  /** @var string */
  public $escalatorQueue;
  /** @var string */
  public $pubsubTopic;
  /** @var EnterpriseCrmEventbusProtoCustomSuspensionRequest */
  public $request;
  protected $buganizerNotificationType = EnterpriseCrmEventbusProtoBuganizerNotification::class;
  protected $buganizerNotificationDataType = '';
  protected $emailAddressType = EnterpriseCrmEventbusProtoAddress::class;
  protected $emailAddressDataType = '';
  protected $requestType = EnterpriseCrmEventbusProtoCustomSuspensionRequest::class;
  protected $requestDataType = '';
  /** @param EnterpriseCrmEventbusProtoBuganizerNotification */
  public function setBuganizerNotification(EnterpriseCrmEventbusProtoBuganizerNotification $buganizerNotification)
  {
    $this->buganizerNotification = $buganizerNotification;
  }
  /** @return EnterpriseCrmEventbusProtoBuganizerNotification */
  public function getBuganizerNotification()
  {
    return $this->buganizerNotification;
  }
  /** @param EnterpriseCrmEventbusProtoAddress */
  public function setEmailAddress(EnterpriseCrmEventbusProtoAddress $emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return EnterpriseCrmEventbusProtoAddress */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /** @param string */
  public function setEscalatorQueue($escalatorQueue)
  {
    $this->escalatorQueue = $escalatorQueue;
  }
  /** @return string */
  public function getEscalatorQueue()
  {
    return $this->escalatorQueue;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param EnterpriseCrmEventbusProtoCustomSuspensionRequest */
  public function setRequest(EnterpriseCrmEventbusProtoCustomSuspensionRequest $request)
  {
    $this->request = $request;
  }
  /** @return EnterpriseCrmEventbusProtoCustomSuspensionRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class EnterpriseCrmEventbusProtoParamSpecEntryConfig extends \Google\Model
{
  /** @var string */
  public $descriptivePhrase;
  /** @var string */
  public $helpText;
  /** @var bool */
  public $hideDefaultValue;
  /** @var string */
  public $inputDisplayOption;
  /** @var bool */
  public $isHidden;
  /** @var string */
  public $label;
  /** @var string */
  public $parameterNameOption;
  /** @var string */
  public $subSectionLabel;
  /** @var string */
  public $uiPlaceholderText;

  /** @param string */
  public function setDescriptivePhrase($descriptivePhrase)
  {
    $this->descriptivePhrase = $descriptivePhrase;
  }
  /** @return string */
  public function getDescriptivePhrase()
  {
    return $this->descriptivePhrase;
  }
  /** @param string */
  public function setHelpText($helpText)
  {
    $this->helpText = $helpText;
  }
  /** @return string */
  public function getHelpText()
  {
    return $this->helpText;
  }
  /** @param bool */
  public function setHideDefaultValue($hideDefaultValue)
  {
    $this->hideDefaultValue = $hideDefaultValue;
  }
  /** @return bool */
  public function getHideDefaultValue()
  {
    return $this->hideDefaultValue;
  }
  /** @param string */
  public function setInputDisplayOption($inputDisplayOption)
  {
    $this->inputDisplayOption = $inputDisplayOption;
  }
  /** @return string */
  public function getInputDisplayOption()
  {
    return $this->inputDisplayOption;
  }
  /** @param bool */
  public function setIsHidden($isHidden)
  {
    $this->isHidden = $isHidden;
  }
  /** @return bool */
  public function getIsHidden()
  {
    return $this->isHidden;
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
  public function setParameterNameOption($parameterNameOption)
  {
    $this->parameterNameOption = $parameterNameOption;
  }
  /** @return string */
  public function getParameterNameOption()
  {
    return $this->parameterNameOption;
  }
  /** @param string */
  public function setSubSectionLabel($subSectionLabel)
  {
    $this->subSectionLabel = $subSectionLabel;
  }
  /** @return string */
  public function getSubSectionLabel()
  {
    return $this->subSectionLabel;
  }
  /** @param string */
  public function setUiPlaceholderText($uiPlaceholderText)
  {
    $this->uiPlaceholderText = $uiPlaceholderText;
  }
  /** @return string */
  public function getUiPlaceholderText()
  {
    return $this->uiPlaceholderText;
  }
}

class EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition extends \Google\Model
{
  /** @var string */
  public $fullName;
  /** @var string */
  public $path;

  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
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

class EnterpriseCrmEventbusProtoParamSpecEntryValidationRule extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange */
  public $doubleRange;
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange */
  public $intRange;
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex */
  public $stringRegex;
  protected $doubleRangeType = EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange::class;
  protected $doubleRangeDataType = '';
  protected $intRangeType = EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange::class;
  protected $intRangeDataType = '';
  protected $stringRegexType = EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex::class;
  protected $stringRegexDataType = '';
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange */
  public function setDoubleRange(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange $doubleRange)
  {
    $this->doubleRange = $doubleRange;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange */
  public function getDoubleRange()
  {
    return $this->doubleRange;
  }
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange */
  public function setIntRange(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange $intRange)
  {
    $this->intRange = $intRange;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange */
  public function getIntRange()
  {
    return $this->intRange;
  }
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex */
  public function setStringRegex(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex $stringRegex)
  {
    $this->stringRegex = $stringRegex;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex */
  public function getStringRegex()
  {
    return $this->stringRegex;
  }
}

class EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange extends \Google\Model
{
  public $max;
  public $min;

  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange extends \Google\Model
{
  /** @var string */
  public $max;
  /** @var string */
  public $min;

  /** @param string */
  public function setMax($max)
  {
    $this->max = $max;
  }
  /** @return string */
  public function getMax()
  {
    return $this->max;
  }
  /** @param string */
  public function setMin($min)
  {
    $this->min = $min;
  }
  /** @return string */
  public function getMin()
  {
    return $this->min;
  }
}

class EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex extends \Google\Model
{
  /** @var bool */
  public $exclusive;
  /** @var string */
  public $regex;

  /** @param bool */
  public function setExclusive($exclusive)
  {
    $this->exclusive = $exclusive;
  }
  /** @return bool */
  public function getExclusive()
  {
    return $this->exclusive;
  }
  /** @param string */
  public function setRegex($regex)
  {
    $this->regex = $regex;
  }
  /** @return string */
  public function getRegex()
  {
    return $this->regex;
  }
}

class EnterpriseCrmEventbusProtoParameterEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var EnterpriseCrmEventbusProtoParameterValueType */
  public $value;
  protected $valueType = EnterpriseCrmEventbusProtoParameterValueType::class;
  protected $valueDataType = '';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmEventbusProtoParameterValueType */
  public function setValue(EnterpriseCrmEventbusProtoParameterValueType $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmEventbusProtoParameterValueType */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmEventbusProtoParameterMap extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoParameterMapEntry[] */
  public $entries;
  /** @var string */
  public $keyType;
  /** @var string */
  public $valueType;
  protected $collection_key = 'entries';
  protected $entriesType = EnterpriseCrmEventbusProtoParameterMapEntry::class;
  protected $entriesDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoParameterMapEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return EnterpriseCrmEventbusProtoParameterMapEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
  /** @param string */
  public function setKeyType($keyType)
  {
    $this->keyType = $keyType;
  }
  /** @return string */
  public function getKeyType()
  {
    return $this->keyType;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class EnterpriseCrmEventbusProtoParameterMapEntry extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoParameterMapField */
  public $key;
  /** @var EnterpriseCrmEventbusProtoParameterMapField */
  public $value;
  protected $keyType = EnterpriseCrmEventbusProtoParameterMapField::class;
  protected $keyDataType = '';
  protected $valueType = EnterpriseCrmEventbusProtoParameterMapField::class;
  protected $valueDataType = '';
  /** @param EnterpriseCrmEventbusProtoParameterMapField */
  public function setKey(EnterpriseCrmEventbusProtoParameterMapField $key)
  {
    $this->key = $key;
  }
  /** @return EnterpriseCrmEventbusProtoParameterMapField */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmEventbusProtoParameterMapField */
  public function setValue(EnterpriseCrmEventbusProtoParameterMapField $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmEventbusProtoParameterMapField */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmEventbusProtoParameterMapField extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoParameterValueType */
  public $literalValue;
  /** @var string */
  public $referenceKey;
  protected $literalValueType = EnterpriseCrmEventbusProtoParameterValueType::class;
  protected $literalValueDataType = '';
  /** @param EnterpriseCrmEventbusProtoParameterValueType */
  public function setLiteralValue(EnterpriseCrmEventbusProtoParameterValueType $literalValue)
  {
    $this->literalValue = $literalValue;
  }
  /** @return EnterpriseCrmEventbusProtoParameterValueType */
  public function getLiteralValue()
  {
    return $this->literalValue;
  }
  /** @param string */
  public function setReferenceKey($referenceKey)
  {
    $this->referenceKey = $referenceKey;
  }
  /** @return string */
  public function getReferenceKey()
  {
    return $this->referenceKey;
  }
}

class EnterpriseCrmEventbusProtoParameterValueType extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoBooleanParameterArray */
  public $booleanArray;
  /** @var bool */
  public $booleanValue;
  /** @var EnterpriseCrmEventbusProtoDoubleParameterArray */
  public $doubleArray;
  public $doubleValue;
  /** @var EnterpriseCrmEventbusProtoIntParameterArray */
  public $intArray;
  /** @var string */
  public $intValue;
  /** @var EnterpriseCrmEventbusProtoProtoParameterArray */
  public $protoArray;
  /** @var array[] */
  public $protoValue;
  /** @var EnterpriseCrmEventbusProtoSerializedObjectParameter */
  public $serializedObjectValue;
  /** @var EnterpriseCrmEventbusProtoStringParameterArray */
  public $stringArray;
  /** @var string */
  public $stringValue;
  protected $booleanArrayType = EnterpriseCrmEventbusProtoBooleanParameterArray::class;
  protected $booleanArrayDataType = '';
  protected $doubleArrayType = EnterpriseCrmEventbusProtoDoubleParameterArray::class;
  protected $doubleArrayDataType = '';
  protected $intArrayType = EnterpriseCrmEventbusProtoIntParameterArray::class;
  protected $intArrayDataType = '';
  protected $protoArrayType = EnterpriseCrmEventbusProtoProtoParameterArray::class;
  protected $protoArrayDataType = '';
  protected $serializedObjectValueType = EnterpriseCrmEventbusProtoSerializedObjectParameter::class;
  protected $serializedObjectValueDataType = '';
  protected $stringArrayType = EnterpriseCrmEventbusProtoStringParameterArray::class;
  protected $stringArrayDataType = '';
  /** @param EnterpriseCrmEventbusProtoBooleanParameterArray */
  public function setBooleanArray(EnterpriseCrmEventbusProtoBooleanParameterArray $booleanArray)
  {
    $this->booleanArray = $booleanArray;
  }
  /** @return EnterpriseCrmEventbusProtoBooleanParameterArray */
  public function getBooleanArray()
  {
    return $this->booleanArray;
  }
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
  /** @param EnterpriseCrmEventbusProtoDoubleParameterArray */
  public function setDoubleArray(EnterpriseCrmEventbusProtoDoubleParameterArray $doubleArray)
  {
    $this->doubleArray = $doubleArray;
  }
  /** @return EnterpriseCrmEventbusProtoDoubleParameterArray */
  public function getDoubleArray()
  {
    return $this->doubleArray;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param EnterpriseCrmEventbusProtoIntParameterArray */
  public function setIntArray(EnterpriseCrmEventbusProtoIntParameterArray $intArray)
  {
    $this->intArray = $intArray;
  }
  /** @return EnterpriseCrmEventbusProtoIntParameterArray */
  public function getIntArray()
  {
    return $this->intArray;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param EnterpriseCrmEventbusProtoProtoParameterArray */
  public function setProtoArray(EnterpriseCrmEventbusProtoProtoParameterArray $protoArray)
  {
    $this->protoArray = $protoArray;
  }
  /** @return EnterpriseCrmEventbusProtoProtoParameterArray */
  public function getProtoArray()
  {
    return $this->protoArray;
  }
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param EnterpriseCrmEventbusProtoSerializedObjectParameter */
  public function setSerializedObjectValue(EnterpriseCrmEventbusProtoSerializedObjectParameter $serializedObjectValue)
  {
    $this->serializedObjectValue = $serializedObjectValue;
  }
  /** @return EnterpriseCrmEventbusProtoSerializedObjectParameter */
  public function getSerializedObjectValue()
  {
    return $this->serializedObjectValue;
  }
  /** @param EnterpriseCrmEventbusProtoStringParameterArray */
  public function setStringArray(EnterpriseCrmEventbusProtoStringParameterArray $stringArray)
  {
    $this->stringArray = $stringArray;
  }
  /** @return EnterpriseCrmEventbusProtoStringParameterArray */
  public function getStringArray()
  {
    return $this->stringArray;
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

class EnterpriseCrmEventbusProtoPropertyEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var EnterpriseCrmEventbusProtoValueType */
  public $value;
  protected $valueType = EnterpriseCrmEventbusProtoValueType::class;
  protected $valueDataType = '';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmEventbusProtoValueType */
  public function setValue(EnterpriseCrmEventbusProtoValueType $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmEventbusProtoValueType */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmEventbusProtoProtoArrayFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoProtoFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoProtoParameterArray extends \Google\Collection
{
  /** @var array[] */
  public $protoValues;
  protected $collection_key = 'protoValues';
  /** @param array[] */
  public function setProtoValues($protoValues)
  {
    $this->protoValues = $protoValues;
  }
  /** @return array[] */
  public function getProtoValues()
  {
    return $this->protoValues;
  }
}

class EnterpriseCrmEventbusProtoScatterResponse extends \Google\Collection
{
  /** @var string */
  public $errorMsg;
  /** @var string[] */
  public $executionIds;
  /** @var bool */
  public $isSuccessful;
  /** @var EnterpriseCrmEventbusProtoParameterEntry[] */
  public $responseParams;
  /** @var EnterpriseCrmEventbusProtoParameterValueType */
  public $scatterElement;
  protected $collection_key = 'responseParams';
  protected $responseParamsType = EnterpriseCrmEventbusProtoParameterEntry::class;
  protected $responseParamsDataType = 'array';
  protected $scatterElementType = EnterpriseCrmEventbusProtoParameterValueType::class;
  protected $scatterElementDataType = '';
  /** @param string */
  public function setErrorMsg($errorMsg)
  {
    $this->errorMsg = $errorMsg;
  }
  /** @return string */
  public function getErrorMsg()
  {
    return $this->errorMsg;
  }
  /** @param string[] */
  public function setExecutionIds($executionIds)
  {
    $this->executionIds = $executionIds;
  }
  /** @return string[] */
  public function getExecutionIds()
  {
    return $this->executionIds;
  }
  /** @param bool */
  public function setIsSuccessful($isSuccessful)
  {
    $this->isSuccessful = $isSuccessful;
  }
  /** @return bool */
  public function getIsSuccessful()
  {
    return $this->isSuccessful;
  }
  /** @param EnterpriseCrmEventbusProtoParameterEntry[] */
  public function setResponseParams($responseParams)
  {
    $this->responseParams = $responseParams;
  }
  /** @return EnterpriseCrmEventbusProtoParameterEntry[] */
  public function getResponseParams()
  {
    return $this->responseParams;
  }
  /** @param EnterpriseCrmEventbusProtoParameterValueType */
  public function setScatterElement(EnterpriseCrmEventbusProtoParameterValueType $scatterElement)
  {
    $this->scatterElement = $scatterElement;
  }
  /** @return EnterpriseCrmEventbusProtoParameterValueType */
  public function getScatterElement()
  {
    return $this->scatterElement;
  }
}

class EnterpriseCrmEventbusProtoSerializedObjectParameter extends \Google\Model
{
  /** @var string */
  public $objectValue;

  /** @param string */
  public function setObjectValue($objectValue)
  {
    $this->objectValue = $objectValue;
  }
  /** @return string */
  public function getObjectValue()
  {
    return $this->objectValue;
  }
}

class EnterpriseCrmEventbusProtoStringArray extends \Google\Collection
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

class EnterpriseCrmEventbusProtoStringArrayFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoStringFunction extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class EnterpriseCrmEventbusProtoStringParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $stringValues;
  protected $collection_key = 'stringValues';
  /** @param string[] */
  public function setStringValues($stringValues)
  {
    $this->stringValues = $stringValues;
  }
  /** @return string[] */
  public function getStringValues()
  {
    return $this->stringValues;
  }
}

class EnterpriseCrmEventbusProtoSuccessPolicy extends \Google\Model
{
  /** @var string */
  public $finalState;

  /** @param string */
  public function setFinalState($finalState)
  {
    $this->finalState = $finalState;
  }
  /** @return string */
  public function getFinalState()
  {
    return $this->finalState;
  }
}

class EnterpriseCrmEventbusProtoSuspensionAuthPermissions extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public $gaiaIdentity;
  /** @var EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public $googleGroup;
  /** @var string */
  public $loasRole;
  /** @var string */
  public $mdbGroup;
  protected $gaiaIdentityType = EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity::class;
  protected $gaiaIdentityDataType = '';
  protected $googleGroupType = EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity::class;
  protected $googleGroupDataType = '';
  /** @param EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public function setGaiaIdentity(EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity $gaiaIdentity)
  {
    $this->gaiaIdentity = $gaiaIdentity;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public function getGaiaIdentity()
  {
    return $this->gaiaIdentity;
  }
  /** @param EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public function setGoogleGroup(EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity $googleGroup)
  {
    $this->googleGroup = $googleGroup;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity */
  public function getGoogleGroup()
  {
    return $this->googleGroup;
  }
  /** @param string */
  public function setLoasRole($loasRole)
  {
    $this->loasRole = $loasRole;
  }
  /** @return string */
  public function getLoasRole()
  {
    return $this->loasRole;
  }
  /** @param string */
  public function setMdbGroup($mdbGroup)
  {
    $this->mdbGroup = $mdbGroup;
  }
  /** @return string */
  public function getMdbGroup()
  {
    return $this->mdbGroup;
  }
}

class EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity extends \Google\Model
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $gaiaId;

  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /** @param string */
  public function setGaiaId($gaiaId)
  {
    $this->gaiaId = $gaiaId;
  }
  /** @return string */
  public function getGaiaId()
  {
    return $this->gaiaId;
  }
}

class EnterpriseCrmEventbusProtoSuspensionConfig extends \Google\Collection
{
  /** @var string */
  public $customMessage;
  /** @var EnterpriseCrmEventbusProtoNotification[] */
  public $notifications;
  /** @var EnterpriseCrmEventbusProtoSuspensionExpiration */
  public $suspensionExpiration;
  /** @var EnterpriseCrmEventbusProtoSuspensionAuthPermissions[] */
  public $whoMayResolve;
  protected $collection_key = 'whoMayResolve';
  protected $notificationsType = EnterpriseCrmEventbusProtoNotification::class;
  protected $notificationsDataType = 'array';
  protected $suspensionExpirationType = EnterpriseCrmEventbusProtoSuspensionExpiration::class;
  protected $suspensionExpirationDataType = '';
  protected $whoMayResolveType = EnterpriseCrmEventbusProtoSuspensionAuthPermissions::class;
  protected $whoMayResolveDataType = 'array';
  /** @param string */
  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }
  /** @return string */
  public function getCustomMessage()
  {
    return $this->customMessage;
  }
  /** @param EnterpriseCrmEventbusProtoNotification[] */
  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }
  /** @return EnterpriseCrmEventbusProtoNotification[] */
  public function getNotifications()
  {
    return $this->notifications;
  }
  /** @param EnterpriseCrmEventbusProtoSuspensionExpiration */
  public function setSuspensionExpiration(EnterpriseCrmEventbusProtoSuspensionExpiration $suspensionExpiration)
  {
    $this->suspensionExpiration = $suspensionExpiration;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionExpiration */
  public function getSuspensionExpiration()
  {
    return $this->suspensionExpiration;
  }
  /** @param EnterpriseCrmEventbusProtoSuspensionAuthPermissions[] */
  public function setWhoMayResolve($whoMayResolve)
  {
    $this->whoMayResolve = $whoMayResolve;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionAuthPermissions[] */
  public function getWhoMayResolve()
  {
    return $this->whoMayResolve;
  }
}

class EnterpriseCrmEventbusProtoSuspensionExpiration extends \Google\Model
{
  /** @var int */
  public $expireAfterMs;
  /** @var bool */
  public $liftWhenExpired;
  /** @var int */
  public $remindAfterMs;

  /** @param int */
  public function setExpireAfterMs($expireAfterMs)
  {
    $this->expireAfterMs = $expireAfterMs;
  }
  /** @return int */
  public function getExpireAfterMs()
  {
    return $this->expireAfterMs;
  }
  /** @param bool */
  public function setLiftWhenExpired($liftWhenExpired)
  {
    $this->liftWhenExpired = $liftWhenExpired;
  }
  /** @return bool */
  public function getLiftWhenExpired()
  {
    return $this->liftWhenExpired;
  }
  /** @param int */
  public function setRemindAfterMs($remindAfterMs)
  {
    $this->remindAfterMs = $remindAfterMs;
  }
  /** @return int */
  public function getRemindAfterMs()
  {
    return $this->remindAfterMs;
  }
}

class EnterpriseCrmEventbusProtoSuspensionResolutionInfo extends \Google\Model
{
  /** @var EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit */
  public $audit;
  /** @var string */
  public $createdTimestamp;
  /** @var string */
  public $eventExecutionInfoId;
  /** @var EnterpriseCrmEventbusProtoExternalTraffic */
  public $externalTraffic;
  /** @var string */
  public $lastModifiedTimestamp;
  /** @var string */
  public $product;
  /** @var string */
  public $status;
  /** @var EnterpriseCrmEventbusProtoSuspensionConfig */
  public $suspensionConfig;
  /** @var string */
  public $suspensionId;
  /** @var string */
  public $taskNumber;
  /** @var string */
  public $workflowName;
  protected $auditType = EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit::class;
  protected $auditDataType = '';
  protected $externalTrafficType = EnterpriseCrmEventbusProtoExternalTraffic::class;
  protected $externalTrafficDataType = '';
  protected $suspensionConfigType = EnterpriseCrmEventbusProtoSuspensionConfig::class;
  protected $suspensionConfigDataType = '';
  /** @param EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit */
  public function setAudit(EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit $audit)
  {
    $this->audit = $audit;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit */
  public function getAudit()
  {
    return $this->audit;
  }
  /** @param string */
  public function setCreatedTimestamp($createdTimestamp)
  {
    $this->createdTimestamp = $createdTimestamp;
  }
  /** @return string */
  public function getCreatedTimestamp()
  {
    return $this->createdTimestamp;
  }
  /** @param string */
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
  /** @param EnterpriseCrmEventbusProtoExternalTraffic */
  public function setExternalTraffic(EnterpriseCrmEventbusProtoExternalTraffic $externalTraffic)
  {
    $this->externalTraffic = $externalTraffic;
  }
  /** @return EnterpriseCrmEventbusProtoExternalTraffic */
  public function getExternalTraffic()
  {
    return $this->externalTraffic;
  }
  /** @param string */
  public function setLastModifiedTimestamp($lastModifiedTimestamp)
  {
    $this->lastModifiedTimestamp = $lastModifiedTimestamp;
  }
  /** @return string */
  public function getLastModifiedTimestamp()
  {
    return $this->lastModifiedTimestamp;
  }
  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
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
  /** @param EnterpriseCrmEventbusProtoSuspensionConfig */
  public function setSuspensionConfig(EnterpriseCrmEventbusProtoSuspensionConfig $suspensionConfig)
  {
    $this->suspensionConfig = $suspensionConfig;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionConfig */
  public function getSuspensionConfig()
  {
    return $this->suspensionConfig;
  }
  /** @param string */
  public function setSuspensionId($suspensionId)
  {
    $this->suspensionId = $suspensionId;
  }
  /** @return string */
  public function getSuspensionId()
  {
    return $this->suspensionId;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
  /** @param string */
  public function setWorkflowName($workflowName)
  {
    $this->workflowName = $workflowName;
  }
  /** @return string */
  public function getWorkflowName()
  {
    return $this->workflowName;
  }
}

class EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit extends \Google\Model
{
  /** @var string */
  public $resolvedBy;
  /** @var string */
  public $timestamp;

  /** @param string */
  public function setResolvedBy($resolvedBy)
  {
    $this->resolvedBy = $resolvedBy;
  }
  /** @return string */
  public function getResolvedBy()
  {
    return $this->resolvedBy;
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

class EnterpriseCrmEventbusProtoTaskAlertConfig extends \Google\Model
{
  /** @var string */
  public $aggregationPeriod;
  /** @var bool */
  public $alertDisabled;
  /** @var string */
  public $alertName;
  /** @var string */
  public $clientId;
  /** @var string */
  public $durationThresholdMs;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public $errorEnumList;
  /** @var string */
  public $metricType;
  /** @var int */
  public $numAggregationPeriods;
  /** @var bool */
  public $onlyFinalAttempt;
  /** @var string */
  public $playbookUrl;
  /** @var string */
  public $thresholdType;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public $thresholdValue;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public $warningEnumList;
  protected $errorEnumListType = EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList::class;
  protected $errorEnumListDataType = '';
  protected $thresholdValueType = EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue::class;
  protected $thresholdValueDataType = '';
  protected $warningEnumListType = EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList::class;
  protected $warningEnumListDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param bool */
  public function setAlertDisabled($alertDisabled)
  {
    $this->alertDisabled = $alertDisabled;
  }
  /** @return bool */
  public function getAlertDisabled()
  {
    return $this->alertDisabled;
  }
  /** @param string */
  public function setAlertName($alertName)
  {
    $this->alertName = $alertName;
  }
  /** @return string */
  public function getAlertName()
  {
    return $this->alertName;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setDurationThresholdMs($durationThresholdMs)
  {
    $this->durationThresholdMs = $durationThresholdMs;
  }
  /** @return string */
  public function getDurationThresholdMs()
  {
    return $this->durationThresholdMs;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function setErrorEnumList(EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList $errorEnumList)
  {
    $this->errorEnumList = $errorEnumList;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function getErrorEnumList()
  {
    return $this->errorEnumList;
  }
  /** @param string */
  public function setMetricType($metricType)
  {
    $this->metricType = $metricType;
  }
  /** @return string */
  public function getMetricType()
  {
    return $this->metricType;
  }
  /** @param int */
  public function setNumAggregationPeriods($numAggregationPeriods)
  {
    $this->numAggregationPeriods = $numAggregationPeriods;
  }
  /** @return int */
  public function getNumAggregationPeriods()
  {
    return $this->numAggregationPeriods;
  }
  /** @param bool */
  public function setOnlyFinalAttempt($onlyFinalAttempt)
  {
    $this->onlyFinalAttempt = $onlyFinalAttempt;
  }
  /** @return bool */
  public function getOnlyFinalAttempt()
  {
    return $this->onlyFinalAttempt;
  }
  /** @param string */
  public function setPlaybookUrl($playbookUrl)
  {
    $this->playbookUrl = $playbookUrl;
  }
  /** @return string */
  public function getPlaybookUrl()
  {
    return $this->playbookUrl;
  }
  /** @param string */
  public function setThresholdType($thresholdType)
  {
    $this->thresholdType = $thresholdType;
  }
  /** @return string */
  public function getThresholdType()
  {
    return $this->thresholdType;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public function setThresholdValue(EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue $thresholdValue)
  {
    $this->thresholdValue = $thresholdValue;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public function getThresholdValue()
  {
    return $this->thresholdValue;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function setWarningEnumList(EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList $warningEnumList)
  {
    $this->warningEnumList = $warningEnumList;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function getWarningEnumList()
  {
    return $this->warningEnumList;
  }
}

class EnterpriseCrmEventbusProtoTaskExecutionDetails extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats[] */
  public $taskAttemptStats;
  /** @var string */
  public $taskExecutionState;
  /** @var string */
  public $taskNumber;
  protected $collection_key = 'taskAttemptStats';
  protected $taskAttemptStatsType = EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats::class;
  protected $taskAttemptStatsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats[] */
  public function setTaskAttemptStats($taskAttemptStats)
  {
    $this->taskAttemptStats = $taskAttemptStats;
  }
  /** @return EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats[] */
  public function getTaskAttemptStats()
  {
    return $this->taskAttemptStats;
  }
  /** @param string */
  public function setTaskExecutionState($taskExecutionState)
  {
    $this->taskExecutionState = $taskExecutionState;
  }
  /** @return string */
  public function getTaskExecutionState()
  {
    return $this->taskExecutionState;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats extends \Google\Model
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

class EnterpriseCrmEventbusProtoTaskMetadata extends \Google\Collection
{
  /** @var string */
  public $activeTaskName;
  /** @var EnterpriseCrmEventbusProtoTaskMetadataAdmin[] */
  public $admins;
  /** @var string */
  public $category;
  /** @var string */
  public $codeSearchLink;
  /** @var string */
  public $defaultJsonValidationOption;
  /** @var string */
  public $defaultSpec;
  /** @var string */
  public $description;
  /** @var string */
  public $descriptiveName;
  /** @var string */
  public $docMarkdown;
  /** @var string */
  public $externalCategory;
  /** @var int */
  public $externalCategorySequence;
  /** @var string */
  public $externalDocHtml;
  /** @var string */
  public $externalDocLink;
  /** @var string */
  public $externalDocMarkdown;
  /** @var string */
  public $g3DocLink;
  /** @var string */
  public $iconLink;
  /** @var bool */
  public $isDeprecated;
  /** @var string */
  public $name;
  /** @var string */
  public $standaloneExternalDocHtml;
  /** @var string */
  public $status;
  /** @var string */
  public $system;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $adminsType = EnterpriseCrmEventbusProtoTaskMetadataAdmin::class;
  protected $adminsDataType = 'array';
  /** @param string */
  public function setActiveTaskName($activeTaskName)
  {
    $this->activeTaskName = $activeTaskName;
  }
  /** @return string */
  public function getActiveTaskName()
  {
    return $this->activeTaskName;
  }
  /** @param EnterpriseCrmEventbusProtoTaskMetadataAdmin[] */
  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  /** @return EnterpriseCrmEventbusProtoTaskMetadataAdmin[] */
  public function getAdmins()
  {
    return $this->admins;
  }
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string */
  public function setCodeSearchLink($codeSearchLink)
  {
    $this->codeSearchLink = $codeSearchLink;
  }
  /** @return string */
  public function getCodeSearchLink()
  {
    return $this->codeSearchLink;
  }
  /** @param string */
  public function setDefaultJsonValidationOption($defaultJsonValidationOption)
  {
    $this->defaultJsonValidationOption = $defaultJsonValidationOption;
  }
  /** @return string */
  public function getDefaultJsonValidationOption()
  {
    return $this->defaultJsonValidationOption;
  }
  /** @param string */
  public function setDefaultSpec($defaultSpec)
  {
    $this->defaultSpec = $defaultSpec;
  }
  /** @return string */
  public function getDefaultSpec()
  {
    return $this->defaultSpec;
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
  public function setDescriptiveName($descriptiveName)
  {
    $this->descriptiveName = $descriptiveName;
  }
  /** @return string */
  public function getDescriptiveName()
  {
    return $this->descriptiveName;
  }
  /** @param string */
  public function setDocMarkdown($docMarkdown)
  {
    $this->docMarkdown = $docMarkdown;
  }
  /** @return string */
  public function getDocMarkdown()
  {
    return $this->docMarkdown;
  }
  /** @param string */
  public function setExternalCategory($externalCategory)
  {
    $this->externalCategory = $externalCategory;
  }
  /** @return string */
  public function getExternalCategory()
  {
    return $this->externalCategory;
  }
  /** @param int */
  public function setExternalCategorySequence($externalCategorySequence)
  {
    $this->externalCategorySequence = $externalCategorySequence;
  }
  /** @return int */
  public function getExternalCategorySequence()
  {
    return $this->externalCategorySequence;
  }
  /** @param string */
  public function setExternalDocHtml($externalDocHtml)
  {
    $this->externalDocHtml = $externalDocHtml;
  }
  /** @return string */
  public function getExternalDocHtml()
  {
    return $this->externalDocHtml;
  }
  /** @param string */
  public function setExternalDocLink($externalDocLink)
  {
    $this->externalDocLink = $externalDocLink;
  }
  /** @return string */
  public function getExternalDocLink()
  {
    return $this->externalDocLink;
  }
  /** @param string */
  public function setExternalDocMarkdown($externalDocMarkdown)
  {
    $this->externalDocMarkdown = $externalDocMarkdown;
  }
  /** @return string */
  public function getExternalDocMarkdown()
  {
    return $this->externalDocMarkdown;
  }
  /** @param string */
  public function setG3DocLink($g3DocLink)
  {
    $this->g3DocLink = $g3DocLink;
  }
  /** @return string */
  public function getG3DocLink()
  {
    return $this->g3DocLink;
  }
  /** @param string */
  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }
  /** @return string */
  public function getIconLink()
  {
    return $this->iconLink;
  }
  /** @param bool */
  public function setIsDeprecated($isDeprecated)
  {
    $this->isDeprecated = $isDeprecated;
  }
  /** @return bool */
  public function getIsDeprecated()
  {
    return $this->isDeprecated;
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
  public function setStandaloneExternalDocHtml($standaloneExternalDocHtml)
  {
    $this->standaloneExternalDocHtml = $standaloneExternalDocHtml;
  }
  /** @return string */
  public function getStandaloneExternalDocHtml()
  {
    return $this->standaloneExternalDocHtml;
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
  public function setSystem($system)
  {
    $this->system = $system;
  }
  /** @return string */
  public function getSystem()
  {
    return $this->system;
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

class EnterpriseCrmEventbusProtoTaskMetadataAdmin extends \Google\Model
{
  /** @var string */
  public $googleGroupEmail;
  /** @var string */
  public $userEmail;

  /** @param string */
  public function setGoogleGroupEmail($googleGroupEmail)
  {
    $this->googleGroupEmail = $googleGroupEmail;
  }
  /** @return string */
  public function getGoogleGroupEmail()
  {
    return $this->googleGroupEmail;
  }
  /** @param string */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /** @return string */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class EnterpriseCrmEventbusProtoTaskUiConfig extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoTaskUiModuleConfig[] */
  public $taskUiModuleConfigs;
  protected $collection_key = 'taskUiModuleConfigs';
  protected $taskUiModuleConfigsType = EnterpriseCrmEventbusProtoTaskUiModuleConfig::class;
  protected $taskUiModuleConfigsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoTaskUiModuleConfig[] */
  public function setTaskUiModuleConfigs($taskUiModuleConfigs)
  {
    $this->taskUiModuleConfigs = $taskUiModuleConfigs;
  }
  /** @return EnterpriseCrmEventbusProtoTaskUiModuleConfig[] */
  public function getTaskUiModuleConfigs()
  {
    return $this->taskUiModuleConfigs;
  }
}

class EnterpriseCrmEventbusProtoTaskUiModuleConfig extends \Google\Model
{
  /** @var string */
  public $moduleId;

  /** @param string */
  public function setModuleId($moduleId)
  {
    $this->moduleId = $moduleId;
  }
  /** @return string */
  public function getModuleId()
  {
    return $this->moduleId;
  }
}

class EnterpriseCrmEventbusProtoTeardown extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoTeardownTaskConfig[] */
  public $teardownTaskConfigs;
  protected $collection_key = 'teardownTaskConfigs';
  protected $teardownTaskConfigsType = EnterpriseCrmEventbusProtoTeardownTaskConfig::class;
  protected $teardownTaskConfigsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoTeardownTaskConfig[] */
  public function setTeardownTaskConfigs($teardownTaskConfigs)
  {
    $this->teardownTaskConfigs = $teardownTaskConfigs;
  }
  /** @return EnterpriseCrmEventbusProtoTeardownTaskConfig[] */
  public function getTeardownTaskConfigs()
  {
    return $this->teardownTaskConfigs;
  }
}

class EnterpriseCrmEventbusProtoTeardownTaskConfig extends \Google\Model
{
  /** @var string */
  public $creatorEmail;
  /** @var string */
  public $name;
  /** @var EnterpriseCrmEventbusProtoNextTeardownTask */
  public $nextTeardownTask;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $parameters;
  /** @var EnterpriseCrmEventbusProtoEventBusProperties */
  public $properties;
  /** @var string */
  public $teardownTaskImplementationClassName;
  protected $nextTeardownTaskType = EnterpriseCrmEventbusProtoNextTeardownTask::class;
  protected $nextTeardownTaskDataType = '';
  protected $parametersType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  protected $propertiesType = EnterpriseCrmEventbusProtoEventBusProperties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  /** @return string */
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
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
  /** @param EnterpriseCrmEventbusProtoNextTeardownTask */
  public function setNextTeardownTask(EnterpriseCrmEventbusProtoNextTeardownTask $nextTeardownTask)
  {
    $this->nextTeardownTask = $nextTeardownTask;
  }
  /** @return EnterpriseCrmEventbusProtoNextTeardownTask */
  public function getNextTeardownTask()
  {
    return $this->nextTeardownTask;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param EnterpriseCrmEventbusProtoEventBusProperties */
  public function setProperties(EnterpriseCrmEventbusProtoEventBusProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return EnterpriseCrmEventbusProtoEventBusProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setTeardownTaskImplementationClassName($teardownTaskImplementationClassName)
  {
    $this->teardownTaskImplementationClassName = $teardownTaskImplementationClassName;
  }
  /** @return string */
  public function getTeardownTaskImplementationClassName()
  {
    return $this->teardownTaskImplementationClassName;
  }
}

class EnterpriseCrmEventbusProtoToken extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class EnterpriseCrmEventbusProtoTransformExpression extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoBaseValue */
  public $initialValue;
  /** @var EnterpriseCrmEventbusProtoFunction[] */
  public $transformationFunctions;
  protected $collection_key = 'transformationFunctions';
  protected $initialValueType = EnterpriseCrmEventbusProtoBaseValue::class;
  protected $initialValueDataType = '';
  protected $transformationFunctionsType = EnterpriseCrmEventbusProtoFunction::class;
  protected $transformationFunctionsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoBaseValue */
  public function setInitialValue(EnterpriseCrmEventbusProtoBaseValue $initialValue)
  {
    $this->initialValue = $initialValue;
  }
  /** @return EnterpriseCrmEventbusProtoBaseValue */
  public function getInitialValue()
  {
    return $this->initialValue;
  }
  /** @param EnterpriseCrmEventbusProtoFunction[] */
  public function setTransformationFunctions($transformationFunctions)
  {
    $this->transformationFunctions = $transformationFunctions;
  }
  /** @return EnterpriseCrmEventbusProtoFunction[] */
  public function getTransformationFunctions()
  {
    return $this->transformationFunctions;
  }
}

class EnterpriseCrmEventbusProtoTriggerCriteria extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $parameters;
  /** @var string */
  public $triggerCriteriaTaskImplementationClassName;
  protected $parametersType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setTriggerCriteriaTaskImplementationClassName($triggerCriteriaTaskImplementationClassName)
  {
    $this->triggerCriteriaTaskImplementationClassName = $triggerCriteriaTaskImplementationClassName;
  }
  /** @return string */
  public function getTriggerCriteriaTaskImplementationClassName()
  {
    return $this->triggerCriteriaTaskImplementationClassName;
  }
}

class EnterpriseCrmEventbusProtoValueType extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var EnterpriseCrmEventbusProtoDoubleArray */
  public $doubleArray;
  public $doubleValue;
  /** @var EnterpriseCrmEventbusProtoIntArray */
  public $intArray;
  /** @var string */
  public $intValue;
  /** @var array[] */
  public $protoValue;
  /** @var EnterpriseCrmEventbusProtoStringArray */
  public $stringArray;
  /** @var string */
  public $stringValue;
  protected $doubleArrayType = EnterpriseCrmEventbusProtoDoubleArray::class;
  protected $doubleArrayDataType = '';
  protected $intArrayType = EnterpriseCrmEventbusProtoIntArray::class;
  protected $intArrayDataType = '';
  protected $stringArrayType = EnterpriseCrmEventbusProtoStringArray::class;
  protected $stringArrayDataType = '';
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
  /** @param EnterpriseCrmEventbusProtoDoubleArray */
  public function setDoubleArray(EnterpriseCrmEventbusProtoDoubleArray $doubleArray)
  {
    $this->doubleArray = $doubleArray;
  }
  /** @return EnterpriseCrmEventbusProtoDoubleArray */
  public function getDoubleArray()
  {
    return $this->doubleArray;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param EnterpriseCrmEventbusProtoIntArray */
  public function setIntArray(EnterpriseCrmEventbusProtoIntArray $intArray)
  {
    $this->intArray = $intArray;
  }
  /** @return EnterpriseCrmEventbusProtoIntArray */
  public function getIntArray()
  {
    return $this->intArray;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param EnterpriseCrmEventbusProtoStringArray */
  public function setStringArray(EnterpriseCrmEventbusProtoStringArray $stringArray)
  {
    $this->stringArray = $stringArray;
  }
  /** @return EnterpriseCrmEventbusProtoStringArray */
  public function getStringArray()
  {
    return $this->stringArray;
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

class EnterpriseCrmEventbusProtoWorkflowAlertConfig extends \Google\Model
{
  /** @var string */
  public $aggregationPeriod;
  /** @var bool */
  public $alertDisabled;
  /** @var string */
  public $alertName;
  /** @var string */
  public $clientId;
  /** @var string */
  public $durationThresholdMs;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public $errorEnumList;
  /** @var string */
  public $metricType;
  /** @var int */
  public $numAggregationPeriods;
  /** @var bool */
  public $onlyFinalAttempt;
  /** @var string */
  public $playbookUrl;
  /** @var string */
  public $thresholdType;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public $thresholdValue;
  /** @var EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public $warningEnumList;
  protected $errorEnumListType = EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList::class;
  protected $errorEnumListDataType = '';
  protected $thresholdValueType = EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue::class;
  protected $thresholdValueDataType = '';
  protected $warningEnumListType = EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList::class;
  protected $warningEnumListDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param bool */
  public function setAlertDisabled($alertDisabled)
  {
    $this->alertDisabled = $alertDisabled;
  }
  /** @return bool */
  public function getAlertDisabled()
  {
    return $this->alertDisabled;
  }
  /** @param string */
  public function setAlertName($alertName)
  {
    $this->alertName = $alertName;
  }
  /** @return string */
  public function getAlertName()
  {
    return $this->alertName;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setDurationThresholdMs($durationThresholdMs)
  {
    $this->durationThresholdMs = $durationThresholdMs;
  }
  /** @return string */
  public function getDurationThresholdMs()
  {
    return $this->durationThresholdMs;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function setErrorEnumList(EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList $errorEnumList)
  {
    $this->errorEnumList = $errorEnumList;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function getErrorEnumList()
  {
    return $this->errorEnumList;
  }
  /** @param string */
  public function setMetricType($metricType)
  {
    $this->metricType = $metricType;
  }
  /** @return string */
  public function getMetricType()
  {
    return $this->metricType;
  }
  /** @param int */
  public function setNumAggregationPeriods($numAggregationPeriods)
  {
    $this->numAggregationPeriods = $numAggregationPeriods;
  }
  /** @return int */
  public function getNumAggregationPeriods()
  {
    return $this->numAggregationPeriods;
  }
  /** @param bool */
  public function setOnlyFinalAttempt($onlyFinalAttempt)
  {
    $this->onlyFinalAttempt = $onlyFinalAttempt;
  }
  /** @return bool */
  public function getOnlyFinalAttempt()
  {
    return $this->onlyFinalAttempt;
  }
  /** @param string */
  public function setPlaybookUrl($playbookUrl)
  {
    $this->playbookUrl = $playbookUrl;
  }
  /** @return string */
  public function getPlaybookUrl()
  {
    return $this->playbookUrl;
  }
  /** @param string */
  public function setThresholdType($thresholdType)
  {
    $this->thresholdType = $thresholdType;
  }
  /** @return string */
  public function getThresholdType()
  {
    return $this->thresholdType;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public function setThresholdValue(EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue $thresholdValue)
  {
    $this->thresholdValue = $thresholdValue;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue */
  public function getThresholdValue()
  {
    return $this->thresholdValue;
  }
  /** @param EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function setWarningEnumList(EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList $warningEnumList)
  {
    $this->warningEnumList = $warningEnumList;
  }
  /** @return EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList */
  public function getWarningEnumList()
  {
    return $this->warningEnumList;
  }
}

class EnterpriseCrmEventbusStats extends \Google\Model
{
  /** @var EnterpriseCrmEventbusStatsDimensions */
  public $dimensions;
  public $durationInSeconds;
  public $errorRate;
  public $qps;
  public $warningRate;
  protected $dimensionsType = EnterpriseCrmEventbusStatsDimensions::class;
  protected $dimensionsDataType = '';
  /** @param EnterpriseCrmEventbusStatsDimensions */
  public function setDimensions(EnterpriseCrmEventbusStatsDimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return EnterpriseCrmEventbusStatsDimensions */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setDurationInSeconds($durationInSeconds)
  {
    $this->durationInSeconds = $durationInSeconds;
  }
  public function getDurationInSeconds()
  {
    return $this->durationInSeconds;
  }
  public function setErrorRate($errorRate)
  {
    $this->errorRate = $errorRate;
  }
  public function getErrorRate()
  {
    return $this->errorRate;
  }
  public function setQps($qps)
  {
    $this->qps = $qps;
  }
  public function getQps()
  {
    return $this->qps;
  }
  public function setWarningRate($warningRate)
  {
    $this->warningRate = $warningRate;
  }
  public function getWarningRate()
  {
    return $this->warningRate;
  }
}

class EnterpriseCrmEventbusStatsDimensions extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $enumFilterType;
  /** @var string */
  public $errorEnumString;
  /** @var string */
  public $retryAttempt;
  /** @var string */
  public $taskName;
  /** @var string */
  public $taskNumber;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $warningEnumString;
  /** @var string */
  public $workflowId;
  /** @var string */
  public $workflowName;

  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setEnumFilterType($enumFilterType)
  {
    $this->enumFilterType = $enumFilterType;
  }
  /** @return string */
  public function getEnumFilterType()
  {
    return $this->enumFilterType;
  }
  /** @param string */
  public function setErrorEnumString($errorEnumString)
  {
    $this->errorEnumString = $errorEnumString;
  }
  /** @return string */
  public function getErrorEnumString()
  {
    return $this->errorEnumString;
  }
  /** @param string */
  public function setRetryAttempt($retryAttempt)
  {
    $this->retryAttempt = $retryAttempt;
  }
  /** @return string */
  public function getRetryAttempt()
  {
    return $this->retryAttempt;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /** @param string */
  public function setWarningEnumString($warningEnumString)
  {
    $this->warningEnumString = $warningEnumString;
  }
  /** @return string */
  public function getWarningEnumString()
  {
    return $this->warningEnumString;
  }
  /** @param string */
  public function setWorkflowId($workflowId)
  {
    $this->workflowId = $workflowId;
  }
  /** @return string */
  public function getWorkflowId()
  {
    return $this->workflowId;
  }
  /** @param string */
  public function setWorkflowName($workflowName)
  {
    $this->workflowName = $workflowName;
  }
  /** @return string */
  public function getWorkflowName()
  {
    return $this->workflowName;
  }
}

class EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray extends \Google\Collection
{
  /** @var bool[] */
  public $booleanValues;
  protected $collection_key = 'booleanValues';
  /** @param bool[] */
  public function setBooleanValues($booleanValues)
  {
    $this->booleanValues = $booleanValues;
  }
  /** @return bool[] */
  public function getBooleanValues()
  {
    return $this->booleanValues;
  }
}

class EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray extends \Google\Collection
{
  public $doubleValues;
  protected $collection_key = 'doubleValues';
  public function setDoubleValues($doubleValues)
  {
    $this->doubleValues = $doubleValues;
  }
  public function getDoubleValues()
  {
    return $this->doubleValues;
  }
}

class EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public $eventAttemptStats;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot[] */
  public $eventExecutionSnapshot;
  /** @var string */
  public $eventExecutionState;
  /** @var int */
  public $eventRetriesFromBeginningCount;
  /** @var string */
  public $logFilePath;
  /** @var string */
  public $networkAddress;
  /** @var string */
  public $nextExecutionTime;
  /** @var int */
  public $ryeLockUnheldCount;
  protected $collection_key = 'eventExecutionSnapshot';
  protected $eventAttemptStatsType = EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats::class;
  protected $eventAttemptStatsDataType = 'array';
  protected $eventExecutionSnapshotType = EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot::class;
  protected $eventExecutionSnapshotDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public function setEventAttemptStats($eventAttemptStats)
  {
    $this->eventAttemptStats = $eventAttemptStats;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats[] */
  public function getEventAttemptStats()
  {
    return $this->eventAttemptStats;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot[] */
  public function setEventExecutionSnapshot($eventExecutionSnapshot)
  {
    $this->eventExecutionSnapshot = $eventExecutionSnapshot;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot[] */
  public function getEventExecutionSnapshot()
  {
    return $this->eventExecutionSnapshot;
  }
  /** @param string */
  public function setEventExecutionState($eventExecutionState)
  {
    $this->eventExecutionState = $eventExecutionState;
  }
  /** @return string */
  public function getEventExecutionState()
  {
    return $this->eventExecutionState;
  }
  /** @param int */
  public function setEventRetriesFromBeginningCount($eventRetriesFromBeginningCount)
  {
    $this->eventRetriesFromBeginningCount = $eventRetriesFromBeginningCount;
  }
  /** @return int */
  public function getEventRetriesFromBeginningCount()
  {
    return $this->eventRetriesFromBeginningCount;
  }
  /** @param string */
  public function setLogFilePath($logFilePath)
  {
    $this->logFilePath = $logFilePath;
  }
  /** @return string */
  public function getLogFilePath()
  {
    return $this->logFilePath;
  }
  /** @param string */
  public function setNetworkAddress($networkAddress)
  {
    $this->networkAddress = $networkAddress;
  }
  /** @return string */
  public function getNetworkAddress()
  {
    return $this->networkAddress;
  }
  /** @param string */
  public function setNextExecutionTime($nextExecutionTime)
  {
    $this->nextExecutionTime = $nextExecutionTime;
  }
  /** @return string */
  public function getNextExecutionTime()
  {
    return $this->nextExecutionTime;
  }
  /** @param int */
  public function setRyeLockUnheldCount($ryeLockUnheldCount)
  {
    $this->ryeLockUnheldCount = $ryeLockUnheldCount;
  }
  /** @return int */
  public function getRyeLockUnheldCount()
  {
    return $this->ryeLockUnheldCount;
  }
}

class EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo extends \Google\Collection
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $createTime;
  /** @var CrmlogErrorCode */
  public $errorCode;
  /** @var EnterpriseCrmEventbusProtoErrorDetail[] */
  public $errors;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails */
  public $eventExecutionDetails;
  /** @var string */
  public $eventExecutionInfoId;
  /** @var EnterpriseCrmEventbusProtoExecutionTraceInfo */
  public $executionTraceInfo;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $postMethod;
  /** @var string */
  public $product;
  /** @var string */
  public $requestId;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $requestParams;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $responseParams;
  /** @var string */
  public $snapshotNumber;
  /** @var string */
  public $tenant;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $workflowId;
  /** @var string */
  public $workflowName;
  /** @var string */
  public $workflowRetryBackoffIntervalSeconds;
  protected $collection_key = 'errors';
  protected $errorCodeType = CrmlogErrorCode::class;
  protected $errorCodeDataType = '';
  protected $errorsType = EnterpriseCrmEventbusProtoErrorDetail::class;
  protected $errorsDataType = 'array';
  protected $eventExecutionDetailsType = EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails::class;
  protected $eventExecutionDetailsDataType = '';
  protected $executionTraceInfoType = EnterpriseCrmEventbusProtoExecutionTraceInfo::class;
  protected $executionTraceInfoDataType = '';
  protected $requestParamsType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $requestParamsDataType = '';
  protected $responseParamsType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $responseParamsDataType = '';
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
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
  /** @param CrmlogErrorCode */
  public function setErrorCode(CrmlogErrorCode $errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return CrmlogErrorCode */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param EnterpriseCrmEventbusProtoErrorDetail[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return EnterpriseCrmEventbusProtoErrorDetail[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails */
  public function setEventExecutionDetails(EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails $eventExecutionDetails)
  {
    $this->eventExecutionDetails = $eventExecutionDetails;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails */
  public function getEventExecutionDetails()
  {
    return $this->eventExecutionDetails;
  }
  /** @param string */
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
  /** @param EnterpriseCrmEventbusProtoExecutionTraceInfo */
  public function setExecutionTraceInfo(EnterpriseCrmEventbusProtoExecutionTraceInfo $executionTraceInfo)
  {
    $this->executionTraceInfo = $executionTraceInfo;
  }
  /** @return EnterpriseCrmEventbusProtoExecutionTraceInfo */
  public function getExecutionTraceInfo()
  {
    return $this->executionTraceInfo;
  }
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /** @param string */
  public function setPostMethod($postMethod)
  {
    $this->postMethod = $postMethod;
  }
  /** @return string */
  public function getPostMethod()
  {
    return $this->postMethod;
  }
  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setRequestParams(EnterpriseCrmFrontendsEventbusProtoEventParameters $requestParams)
  {
    $this->requestParams = $requestParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getRequestParams()
  {
    return $this->requestParams;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setResponseParams(EnterpriseCrmFrontendsEventbusProtoEventParameters $responseParams)
  {
    $this->responseParams = $responseParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getResponseParams()
  {
    return $this->responseParams;
  }
  /** @param string */
  public function setSnapshotNumber($snapshotNumber)
  {
    $this->snapshotNumber = $snapshotNumber;
  }
  /** @return string */
  public function getSnapshotNumber()
  {
    return $this->snapshotNumber;
  }
  /** @param string */
  public function setTenant($tenant)
  {
    $this->tenant = $tenant;
  }
  /** @return string */
  public function getTenant()
  {
    return $this->tenant;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /** @param string */
  public function setWorkflowId($workflowId)
  {
    $this->workflowId = $workflowId;
  }
  /** @return string */
  public function getWorkflowId()
  {
    return $this->workflowId;
  }
  /** @param string */
  public function setWorkflowName($workflowName)
  {
    $this->workflowName = $workflowName;
  }
  /** @return string */
  public function getWorkflowName()
  {
    return $this->workflowName;
  }
  /** @param string */
  public function setWorkflowRetryBackoffIntervalSeconds($workflowRetryBackoffIntervalSeconds)
  {
    $this->workflowRetryBackoffIntervalSeconds = $workflowRetryBackoffIntervalSeconds;
  }
  /** @return string */
  public function getWorkflowRetryBackoffIntervalSeconds()
  {
    return $this->workflowRetryBackoffIntervalSeconds;
  }
}

class EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot extends \Google\Collection
{
  /** @var string */
  public $checkpointTaskNumber;
  /** @var EnterpriseCrmEventbusProtoConditionResult[] */
  public $conditionResults;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $diffParams;
  /** @var string */
  public $eventExecutionInfoId;
  /** @var string */
  public $eventExecutionSnapshotId;
  /** @var EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public $eventExecutionSnapshotMetadata;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $eventParams;
  /** @var string */
  public $snapshotTime;
  /** @var EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public $taskExecutionDetails;
  /** @var string */
  public $taskName;
  protected $collection_key = 'taskExecutionDetails';
  protected $conditionResultsType = EnterpriseCrmEventbusProtoConditionResult::class;
  protected $conditionResultsDataType = 'array';
  protected $diffParamsType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $diffParamsDataType = '';
  protected $eventExecutionSnapshotMetadataType = EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata::class;
  protected $eventExecutionSnapshotMetadataDataType = '';
  protected $eventParamsType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $eventParamsDataType = '';
  protected $taskExecutionDetailsType = EnterpriseCrmEventbusProtoTaskExecutionDetails::class;
  protected $taskExecutionDetailsDataType = 'array';
  /** @param string */
  public function setCheckpointTaskNumber($checkpointTaskNumber)
  {
    $this->checkpointTaskNumber = $checkpointTaskNumber;
  }
  /** @return string */
  public function getCheckpointTaskNumber()
  {
    return $this->checkpointTaskNumber;
  }
  /** @param EnterpriseCrmEventbusProtoConditionResult[] */
  public function setConditionResults($conditionResults)
  {
    $this->conditionResults = $conditionResults;
  }
  /** @return EnterpriseCrmEventbusProtoConditionResult[] */
  public function getConditionResults()
  {
    return $this->conditionResults;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setDiffParams(EnterpriseCrmFrontendsEventbusProtoEventParameters $diffParams)
  {
    $this->diffParams = $diffParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getDiffParams()
  {
    return $this->diffParams;
  }
  /** @param string */
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
  /** @param string */
  public function setEventExecutionSnapshotId($eventExecutionSnapshotId)
  {
    $this->eventExecutionSnapshotId = $eventExecutionSnapshotId;
  }
  /** @return string */
  public function getEventExecutionSnapshotId()
  {
    return $this->eventExecutionSnapshotId;
  }
  /** @param EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public function setEventExecutionSnapshotMetadata(EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata $eventExecutionSnapshotMetadata)
  {
    $this->eventExecutionSnapshotMetadata = $eventExecutionSnapshotMetadata;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata */
  public function getEventExecutionSnapshotMetadata()
  {
    return $this->eventExecutionSnapshotMetadata;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setEventParams(EnterpriseCrmFrontendsEventbusProtoEventParameters $eventParams)
  {
    $this->eventParams = $eventParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getEventParams()
  {
    return $this->eventParams;
  }
  /** @param string */
  public function setSnapshotTime($snapshotTime)
  {
    $this->snapshotTime = $snapshotTime;
  }
  /** @return string */
  public function getSnapshotTime()
  {
    return $this->snapshotTime;
  }
  /** @param EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public function setTaskExecutionDetails($taskExecutionDetails)
  {
    $this->taskExecutionDetails = $taskExecutionDetails;
  }
  /** @return EnterpriseCrmEventbusProtoTaskExecutionDetails[] */
  public function getTaskExecutionDetails()
  {
    return $this->taskExecutionDetails;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
}

class EnterpriseCrmFrontendsEventbusProtoEventParameters extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $parametersDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class EnterpriseCrmFrontendsEventbusProtoIntParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $intValues;
  protected $collection_key = 'intValues';
  /** @param string[] */
  public function setIntValues($intValues)
  {
    $this->intValues = $intValues;
  }
  /** @return string[] */
  public function getIntValues()
  {
    return $this->intValues;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParamSpecEntry extends \Google\Model
{
  /** @var string */
  public $className;
  /** @var string */
  public $collectionElementClassName;
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryConfig */
  public $config;
  /** @var string */
  public $dataType;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public $defaultValue;
  /** @var bool */
  public $isDeprecated;
  /** @var bool */
  public $isOutput;
  /** @var string */
  public $jsonSchema;
  /** @var string */
  public $key;
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition */
  public $protoDef;
  /** @var bool */
  public $required;
  /** @var EnterpriseCrmEventbusProtoParamSpecEntryValidationRule */
  public $validationRule;
  protected $configType = EnterpriseCrmEventbusProtoParamSpecEntryConfig::class;
  protected $configDataType = '';
  protected $defaultValueType = EnterpriseCrmFrontendsEventbusProtoParameterValueType::class;
  protected $defaultValueDataType = '';
  protected $protoDefType = EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition::class;
  protected $protoDefDataType = '';
  protected $validationRuleType = EnterpriseCrmEventbusProtoParamSpecEntryValidationRule::class;
  protected $validationRuleDataType = '';
  /** @param string */
  public function setClassName($className)
  {
    $this->className = $className;
  }
  /** @return string */
  public function getClassName()
  {
    return $this->className;
  }
  /** @param string */
  public function setCollectionElementClassName($collectionElementClassName)
  {
    $this->collectionElementClassName = $collectionElementClassName;
  }
  /** @return string */
  public function getCollectionElementClassName()
  {
    return $this->collectionElementClassName;
  }
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryConfig */
  public function setConfig(EnterpriseCrmEventbusProtoParamSpecEntryConfig $config)
  {
    $this->config = $config;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryConfig */
  public function getConfig()
  {
    return $this->config;
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
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function setDefaultValue(EnterpriseCrmFrontendsEventbusProtoParameterValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param bool */
  public function setIsDeprecated($isDeprecated)
  {
    $this->isDeprecated = $isDeprecated;
  }
  /** @return bool */
  public function getIsDeprecated()
  {
    return $this->isDeprecated;
  }
  /** @param bool */
  public function setIsOutput($isOutput)
  {
    $this->isOutput = $isOutput;
  }
  /** @return bool */
  public function getIsOutput()
  {
    return $this->isOutput;
  }
  /** @param string */
  public function setJsonSchema($jsonSchema)
  {
    $this->jsonSchema = $jsonSchema;
  }
  /** @return string */
  public function getJsonSchema()
  {
    return $this->jsonSchema;
  }
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition */
  public function setProtoDef(EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition $protoDef)
  {
    $this->protoDef = $protoDef;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition */
  public function getProtoDef()
  {
    return $this->protoDef;
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
  /** @param EnterpriseCrmEventbusProtoParamSpecEntryValidationRule */
  public function setValidationRule(EnterpriseCrmEventbusProtoParamSpecEntryValidationRule $validationRule)
  {
    $this->validationRule = $validationRule;
  }
  /** @return EnterpriseCrmEventbusProtoParamSpecEntryValidationRule */
  public function getValidationRule()
  {
    return $this->validationRule;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoParamSpecEntry[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoParamSpecEntry::class;
  protected $parametersDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoParamSpecEntry[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParamSpecEntry[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParameterEntry extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var string */
  public $key;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public $value;
  protected $valueType = EnterpriseCrmFrontendsEventbusProtoParameterValueType::class;
  protected $valueDataType = '';
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
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function setValue(EnterpriseCrmFrontendsEventbusProtoParameterValueType $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParameterMap extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterMapEntry[] */
  public $entries;
  /** @var string */
  public $keyType;
  /** @var string */
  public $valueType;
  protected $collection_key = 'entries';
  protected $entriesType = EnterpriseCrmFrontendsEventbusProtoParameterMapEntry::class;
  protected $entriesDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterMapEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterMapEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
  /** @param string */
  public function setKeyType($keyType)
  {
    $this->keyType = $keyType;
  }
  /** @return string */
  public function getKeyType()
  {
    return $this->keyType;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParameterMapEntry extends \Google\Model
{
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public $key;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public $value;
  protected $keyType = EnterpriseCrmFrontendsEventbusProtoParameterMapField::class;
  protected $keyDataType = '';
  protected $valueType = EnterpriseCrmFrontendsEventbusProtoParameterMapField::class;
  protected $valueDataType = '';
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public function setKey(EnterpriseCrmFrontendsEventbusProtoParameterMapField $key)
  {
    $this->key = $key;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public function getKey()
  {
    return $this->key;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public function setValue(EnterpriseCrmFrontendsEventbusProtoParameterMapField $value)
  {
    $this->value = $value;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterMapField */
  public function getValue()
  {
    return $this->value;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParameterMapField extends \Google\Model
{
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public $literalValue;
  /** @var string */
  public $referenceKey;
  protected $literalValueType = EnterpriseCrmFrontendsEventbusProtoParameterValueType::class;
  protected $literalValueDataType = '';
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function setLiteralValue(EnterpriseCrmFrontendsEventbusProtoParameterValueType $literalValue)
  {
    $this->literalValue = $literalValue;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function getLiteralValue()
  {
    return $this->literalValue;
  }
  /** @param string */
  public function setReferenceKey($referenceKey)
  {
    $this->referenceKey = $referenceKey;
  }
  /** @return string */
  public function getReferenceKey()
  {
    return $this->referenceKey;
  }
}

class EnterpriseCrmFrontendsEventbusProtoParameterValueType extends \Google\Model
{
  /** @var EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray */
  public $booleanArray;
  /** @var bool */
  public $booleanValue;
  /** @var EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray */
  public $doubleArray;
  public $doubleValue;
  /** @var EnterpriseCrmFrontendsEventbusProtoIntParameterArray */
  public $intArray;
  /** @var string */
  public $intValue;
  /** @var string */
  public $jsonValue;
  /** @var EnterpriseCrmFrontendsEventbusProtoProtoParameterArray */
  public $protoArray;
  /** @var array[] */
  public $protoValue;
  /** @var EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter */
  public $serializedObjectValue;
  /** @var EnterpriseCrmFrontendsEventbusProtoStringParameterArray */
  public $stringArray;
  /** @var string */
  public $stringValue;
  protected $booleanArrayType = EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray::class;
  protected $booleanArrayDataType = '';
  protected $doubleArrayType = EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray::class;
  protected $doubleArrayDataType = '';
  protected $intArrayType = EnterpriseCrmFrontendsEventbusProtoIntParameterArray::class;
  protected $intArrayDataType = '';
  protected $protoArrayType = EnterpriseCrmFrontendsEventbusProtoProtoParameterArray::class;
  protected $protoArrayDataType = '';
  protected $serializedObjectValueType = EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter::class;
  protected $serializedObjectValueDataType = '';
  protected $stringArrayType = EnterpriseCrmFrontendsEventbusProtoStringParameterArray::class;
  protected $stringArrayDataType = '';
  /** @param EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray */
  public function setBooleanArray(EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray $booleanArray)
  {
    $this->booleanArray = $booleanArray;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray */
  public function getBooleanArray()
  {
    return $this->booleanArray;
  }
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
  /** @param EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray */
  public function setDoubleArray(EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray $doubleArray)
  {
    $this->doubleArray = $doubleArray;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray */
  public function getDoubleArray()
  {
    return $this->doubleArray;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoIntParameterArray */
  public function setIntArray(EnterpriseCrmFrontendsEventbusProtoIntParameterArray $intArray)
  {
    $this->intArray = $intArray;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoIntParameterArray */
  public function getIntArray()
  {
    return $this->intArray;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param string */
  public function setJsonValue($jsonValue)
  {
    $this->jsonValue = $jsonValue;
  }
  /** @return string */
  public function getJsonValue()
  {
    return $this->jsonValue;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoProtoParameterArray */
  public function setProtoArray(EnterpriseCrmFrontendsEventbusProtoProtoParameterArray $protoArray)
  {
    $this->protoArray = $protoArray;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoProtoParameterArray */
  public function getProtoArray()
  {
    return $this->protoArray;
  }
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter */
  public function setSerializedObjectValue(EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter $serializedObjectValue)
  {
    $this->serializedObjectValue = $serializedObjectValue;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter */
  public function getSerializedObjectValue()
  {
    return $this->serializedObjectValue;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoStringParameterArray */
  public function setStringArray(EnterpriseCrmFrontendsEventbusProtoStringParameterArray $stringArray)
  {
    $this->stringArray = $stringArray;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoStringParameterArray */
  public function getStringArray()
  {
    return $this->stringArray;
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

class EnterpriseCrmFrontendsEventbusProtoProtoParameterArray extends \Google\Collection
{
  /** @var array[] */
  public $protoValues;
  protected $collection_key = 'protoValues';
  /** @param array[] */
  public function setProtoValues($protoValues)
  {
    $this->protoValues = $protoValues;
  }
  /** @return array[] */
  public function getProtoValues()
  {
    return $this->protoValues;
  }
}

class EnterpriseCrmFrontendsEventbusProtoRollbackStrategy extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $parameters;
  /** @var string */
  public $rollbackTaskImplementationClassName;
  /** @var string[] */
  public $taskNumbersToRollback;
  protected $collection_key = 'taskNumbersToRollback';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmFrontendsEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setRollbackTaskImplementationClassName($rollbackTaskImplementationClassName)
  {
    $this->rollbackTaskImplementationClassName = $rollbackTaskImplementationClassName;
  }
  /** @return string */
  public function getRollbackTaskImplementationClassName()
  {
    return $this->rollbackTaskImplementationClassName;
  }
  /** @param string[] */
  public function setTaskNumbersToRollback($taskNumbersToRollback)
  {
    $this->taskNumbersToRollback = $taskNumbersToRollback;
  }
  /** @return string[] */
  public function getTaskNumbersToRollback()
  {
    return $this->taskNumbersToRollback;
  }
}

class EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter extends \Google\Model
{
  /** @var string */
  public $objectValue;

  /** @param string */
  public function setObjectValue($objectValue)
  {
    $this->objectValue = $objectValue;
  }
  /** @return string */
  public function getObjectValue()
  {
    return $this->objectValue;
  }
}

class EnterpriseCrmFrontendsEventbusProtoStringParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $stringValues;
  protected $collection_key = 'stringValues';
  /** @param string[] */
  public function setStringValues($stringValues)
  {
    $this->stringValues = $stringValues;
  }
  /** @return string[] */
  public function getStringValues()
  {
    return $this->stringValues;
  }
}

class EnterpriseCrmFrontendsEventbusProtoTaskConfig extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoTaskAlertConfig[] */
  public $alertConfigs;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorEmail;
  /** @var string */
  public $description;
  /** @var bool */
  public $disableStrictTypeValidation;
  /** @var EnterpriseCrmEventbusProtoFailurePolicy */
  public $failurePolicy;
  /** @var int */
  public $incomingEdgeCount;
  /** @var string */
  public $jsonValidationOption;
  /** @var string */
  public $label;
  /** @var string */
  public $lastModifiedTime;
  /** @var EnterpriseCrmEventbusProtoNextTask[] */
  public $nextTasks;
  /** @var string */
  public $nextTasksExecutionPolicy;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $parameters;
  /** @var EnterpriseCrmEventbusProtoCoordinate */
  public $position;
  /** @var string */
  public $precondition;
  /** @var string */
  public $preconditionLabel;
  /** @var EnterpriseCrmFrontendsEventbusProtoRollbackStrategy */
  public $rollbackStrategy;
  /** @var EnterpriseCrmEventbusProtoSuccessPolicy */
  public $successPolicy;
  /** @var EnterpriseCrmEventbusProtoFailurePolicy */
  public $synchronousCallFailurePolicy;
  /** @var EnterpriseCrmFrontendsEventbusProtoTaskEntity */
  public $taskEntity;
  /** @var string */
  public $taskExecutionStrategy;
  /** @var string */
  public $taskName;
  /** @var string */
  public $taskNumber;
  /** @var string */
  public $taskSpec;
  /** @var string */
  public $taskTemplateName;
  /** @var string */
  public $taskType;
  protected $collection_key = 'nextTasks';
  protected $alertConfigsType = EnterpriseCrmEventbusProtoTaskAlertConfig::class;
  protected $alertConfigsDataType = 'array';
  protected $failurePolicyType = EnterpriseCrmEventbusProtoFailurePolicy::class;
  protected $failurePolicyDataType = '';
  protected $nextTasksType = EnterpriseCrmEventbusProtoNextTask::class;
  protected $nextTasksDataType = 'array';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $parametersDataType = 'map';
  protected $positionType = EnterpriseCrmEventbusProtoCoordinate::class;
  protected $positionDataType = '';
  protected $rollbackStrategyType = EnterpriseCrmFrontendsEventbusProtoRollbackStrategy::class;
  protected $rollbackStrategyDataType = '';
  protected $successPolicyType = EnterpriseCrmEventbusProtoSuccessPolicy::class;
  protected $successPolicyDataType = '';
  protected $synchronousCallFailurePolicyType = EnterpriseCrmEventbusProtoFailurePolicy::class;
  protected $synchronousCallFailurePolicyDataType = '';
  protected $taskEntityType = EnterpriseCrmFrontendsEventbusProtoTaskEntity::class;
  protected $taskEntityDataType = '';
  /** @param EnterpriseCrmEventbusProtoTaskAlertConfig[] */
  public function setAlertConfigs($alertConfigs)
  {
    $this->alertConfigs = $alertConfigs;
  }
  /** @return EnterpriseCrmEventbusProtoTaskAlertConfig[] */
  public function getAlertConfigs()
  {
    return $this->alertConfigs;
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
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  /** @return string */
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
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
  /** @param bool */
  public function setDisableStrictTypeValidation($disableStrictTypeValidation)
  {
    $this->disableStrictTypeValidation = $disableStrictTypeValidation;
  }
  /** @return bool */
  public function getDisableStrictTypeValidation()
  {
    return $this->disableStrictTypeValidation;
  }
  /** @param EnterpriseCrmEventbusProtoFailurePolicy */
  public function setFailurePolicy(EnterpriseCrmEventbusProtoFailurePolicy $failurePolicy)
  {
    $this->failurePolicy = $failurePolicy;
  }
  /** @return EnterpriseCrmEventbusProtoFailurePolicy */
  public function getFailurePolicy()
  {
    return $this->failurePolicy;
  }
  /** @param int */
  public function setIncomingEdgeCount($incomingEdgeCount)
  {
    $this->incomingEdgeCount = $incomingEdgeCount;
  }
  /** @return int */
  public function getIncomingEdgeCount()
  {
    return $this->incomingEdgeCount;
  }
  /** @param string */
  public function setJsonValidationOption($jsonValidationOption)
  {
    $this->jsonValidationOption = $jsonValidationOption;
  }
  /** @return string */
  public function getJsonValidationOption()
  {
    return $this->jsonValidationOption;
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
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /** @param EnterpriseCrmEventbusProtoNextTask[] */
  public function setNextTasks($nextTasks)
  {
    $this->nextTasks = $nextTasks;
  }
  /** @return EnterpriseCrmEventbusProtoNextTask[] */
  public function getNextTasks()
  {
    return $this->nextTasks;
  }
  /** @param string */
  public function setNextTasksExecutionPolicy($nextTasksExecutionPolicy)
  {
    $this->nextTasksExecutionPolicy = $nextTasksExecutionPolicy;
  }
  /** @return string */
  public function getNextTasksExecutionPolicy()
  {
    return $this->nextTasksExecutionPolicy;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param EnterpriseCrmEventbusProtoCoordinate */
  public function setPosition(EnterpriseCrmEventbusProtoCoordinate $position)
  {
    $this->position = $position;
  }
  /** @return EnterpriseCrmEventbusProtoCoordinate */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setPrecondition($precondition)
  {
    $this->precondition = $precondition;
  }
  /** @return string */
  public function getPrecondition()
  {
    return $this->precondition;
  }
  /** @param string */
  public function setPreconditionLabel($preconditionLabel)
  {
    $this->preconditionLabel = $preconditionLabel;
  }
  /** @return string */
  public function getPreconditionLabel()
  {
    return $this->preconditionLabel;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoRollbackStrategy */
  public function setRollbackStrategy(EnterpriseCrmFrontendsEventbusProtoRollbackStrategy $rollbackStrategy)
  {
    $this->rollbackStrategy = $rollbackStrategy;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoRollbackStrategy */
  public function getRollbackStrategy()
  {
    return $this->rollbackStrategy;
  }
  /** @param EnterpriseCrmEventbusProtoSuccessPolicy */
  public function setSuccessPolicy(EnterpriseCrmEventbusProtoSuccessPolicy $successPolicy)
  {
    $this->successPolicy = $successPolicy;
  }
  /** @return EnterpriseCrmEventbusProtoSuccessPolicy */
  public function getSuccessPolicy()
  {
    return $this->successPolicy;
  }
  /** @param EnterpriseCrmEventbusProtoFailurePolicy */
  public function setSynchronousCallFailurePolicy(EnterpriseCrmEventbusProtoFailurePolicy $synchronousCallFailurePolicy)
  {
    $this->synchronousCallFailurePolicy = $synchronousCallFailurePolicy;
  }
  /** @return EnterpriseCrmEventbusProtoFailurePolicy */
  public function getSynchronousCallFailurePolicy()
  {
    return $this->synchronousCallFailurePolicy;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoTaskEntity */
  public function setTaskEntity(EnterpriseCrmFrontendsEventbusProtoTaskEntity $taskEntity)
  {
    $this->taskEntity = $taskEntity;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTaskEntity */
  public function getTaskEntity()
  {
    return $this->taskEntity;
  }
  /** @param string */
  public function setTaskExecutionStrategy($taskExecutionStrategy)
  {
    $this->taskExecutionStrategy = $taskExecutionStrategy;
  }
  /** @return string */
  public function getTaskExecutionStrategy()
  {
    return $this->taskExecutionStrategy;
  }
  /** @param string */
  public function setTaskName($taskName)
  {
    $this->taskName = $taskName;
  }
  /** @return string */
  public function getTaskName()
  {
    return $this->taskName;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
  /** @param string */
  public function setTaskSpec($taskSpec)
  {
    $this->taskSpec = $taskSpec;
  }
  /** @return string */
  public function getTaskSpec()
  {
    return $this->taskSpec;
  }
  /** @param string */
  public function setTaskTemplateName($taskTemplateName)
  {
    $this->taskTemplateName = $taskTemplateName;
  }
  /** @return string */
  public function getTaskTemplateName()
  {
    return $this->taskTemplateName;
  }
  /** @param string */
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  /** @return string */
  public function getTaskType()
  {
    return $this->taskType;
  }
}

class EnterpriseCrmFrontendsEventbusProtoTaskEntity extends \Google\Model
{
  /** @var bool */
  public $disabledForVpcSc;
  /** @var EnterpriseCrmEventbusProtoTaskMetadata */
  public $metadata;
  /** @var EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage */
  public $paramSpecs;
  /** @var EnterpriseCrmEventbusStats */
  public $stats;
  /** @var string */
  public $taskType;
  /** @var EnterpriseCrmEventbusProtoTaskUiConfig */
  public $uiConfig;
  protected $metadataType = EnterpriseCrmEventbusProtoTaskMetadata::class;
  protected $metadataDataType = '';
  protected $paramSpecsType = EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage::class;
  protected $paramSpecsDataType = '';
  protected $statsType = EnterpriseCrmEventbusStats::class;
  protected $statsDataType = '';
  protected $uiConfigType = EnterpriseCrmEventbusProtoTaskUiConfig::class;
  protected $uiConfigDataType = '';
  /** @param bool */
  public function setDisabledForVpcSc($disabledForVpcSc)
  {
    $this->disabledForVpcSc = $disabledForVpcSc;
  }
  /** @return bool */
  public function getDisabledForVpcSc()
  {
    return $this->disabledForVpcSc;
  }
  /** @param EnterpriseCrmEventbusProtoTaskMetadata */
  public function setMetadata(EnterpriseCrmEventbusProtoTaskMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return EnterpriseCrmEventbusProtoTaskMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage */
  public function setParamSpecs(EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage $paramSpecs)
  {
    $this->paramSpecs = $paramSpecs;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage */
  public function getParamSpecs()
  {
    return $this->paramSpecs;
  }
  /** @param EnterpriseCrmEventbusStats */
  public function setStats(EnterpriseCrmEventbusStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return EnterpriseCrmEventbusStats */
  public function getStats()
  {
    return $this->stats;
  }
  /** @param string */
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  /** @return string */
  public function getTaskType()
  {
    return $this->taskType;
  }
  /** @param EnterpriseCrmEventbusProtoTaskUiConfig */
  public function setUiConfig(EnterpriseCrmEventbusProtoTaskUiConfig $uiConfig)
  {
    $this->uiConfig = $uiConfig;
  }
  /** @return EnterpriseCrmEventbusProtoTaskUiConfig */
  public function getUiConfig()
  {
    return $this->uiConfig;
  }
}

class EnterpriseCrmFrontendsEventbusProtoTriggerConfig extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoWorkflowAlertConfig[] */
  public $alertConfig;
  /** @var EnterpriseCrmEventbusProtoCloudSchedulerConfig */
  public $cloudSchedulerConfig;
  /** @var string */
  public $description;
  /** @var string[] */
  public $enabledClients;
  /** @var string */
  public $label;
  /** @var string */
  public $nextTasksExecutionPolicy;
  /** @var bool */
  public $pauseWorkflowExecutions;
  /** @var EnterpriseCrmEventbusProtoCoordinate */
  public $position;
  /** @var string[] */
  public $properties;
  /** @var EnterpriseCrmEventbusProtoNextTask[] */
  public $startTasks;
  /** @var EnterpriseCrmEventbusProtoTriggerCriteria */
  public $triggerCriteria;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $triggerNumber;
  /** @var string */
  public $triggerType;
  protected $collection_key = 'startTasks';
  protected $alertConfigType = EnterpriseCrmEventbusProtoWorkflowAlertConfig::class;
  protected $alertConfigDataType = 'array';
  protected $cloudSchedulerConfigType = EnterpriseCrmEventbusProtoCloudSchedulerConfig::class;
  protected $cloudSchedulerConfigDataType = '';
  protected $positionType = EnterpriseCrmEventbusProtoCoordinate::class;
  protected $positionDataType = '';
  protected $startTasksType = EnterpriseCrmEventbusProtoNextTask::class;
  protected $startTasksDataType = 'array';
  protected $triggerCriteriaType = EnterpriseCrmEventbusProtoTriggerCriteria::class;
  protected $triggerCriteriaDataType = '';
  /** @param EnterpriseCrmEventbusProtoWorkflowAlertConfig[] */
  public function setAlertConfig($alertConfig)
  {
    $this->alertConfig = $alertConfig;
  }
  /** @return EnterpriseCrmEventbusProtoWorkflowAlertConfig[] */
  public function getAlertConfig()
  {
    return $this->alertConfig;
  }
  /** @param EnterpriseCrmEventbusProtoCloudSchedulerConfig */
  public function setCloudSchedulerConfig(EnterpriseCrmEventbusProtoCloudSchedulerConfig $cloudSchedulerConfig)
  {
    $this->cloudSchedulerConfig = $cloudSchedulerConfig;
  }
  /** @return EnterpriseCrmEventbusProtoCloudSchedulerConfig */
  public function getCloudSchedulerConfig()
  {
    return $this->cloudSchedulerConfig;
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
  public function setEnabledClients($enabledClients)
  {
    $this->enabledClients = $enabledClients;
  }
  /** @return string[] */
  public function getEnabledClients()
  {
    return $this->enabledClients;
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
  public function setNextTasksExecutionPolicy($nextTasksExecutionPolicy)
  {
    $this->nextTasksExecutionPolicy = $nextTasksExecutionPolicy;
  }
  /** @return string */
  public function getNextTasksExecutionPolicy()
  {
    return $this->nextTasksExecutionPolicy;
  }
  /** @param bool */
  public function setPauseWorkflowExecutions($pauseWorkflowExecutions)
  {
    $this->pauseWorkflowExecutions = $pauseWorkflowExecutions;
  }
  /** @return bool */
  public function getPauseWorkflowExecutions()
  {
    return $this->pauseWorkflowExecutions;
  }
  /** @param EnterpriseCrmEventbusProtoCoordinate */
  public function setPosition(EnterpriseCrmEventbusProtoCoordinate $position)
  {
    $this->position = $position;
  }
  /** @return EnterpriseCrmEventbusProtoCoordinate */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param EnterpriseCrmEventbusProtoNextTask[] */
  public function setStartTasks($startTasks)
  {
    $this->startTasks = $startTasks;
  }
  /** @return EnterpriseCrmEventbusProtoNextTask[] */
  public function getStartTasks()
  {
    return $this->startTasks;
  }
  /** @param EnterpriseCrmEventbusProtoTriggerCriteria */
  public function setTriggerCriteria(EnterpriseCrmEventbusProtoTriggerCriteria $triggerCriteria)
  {
    $this->triggerCriteria = $triggerCriteria;
  }
  /** @return EnterpriseCrmEventbusProtoTriggerCriteria */
  public function getTriggerCriteria()
  {
    return $this->triggerCriteria;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /** @param string */
  public function setTriggerNumber($triggerNumber)
  {
    $this->triggerNumber = $triggerNumber;
  }
  /** @return string */
  public function getTriggerNumber()
  {
    return $this->triggerNumber;
  }
  /** @param string */
  public function setTriggerType($triggerType)
  {
    $this->triggerType = $triggerType;
  }
  /** @return string */
  public function getTriggerType()
  {
    return $this->triggerType;
  }
}

class EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoAttributes */
  public $attributes;
  /** @var EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public $children;
  /** @var string */
  public $dataType;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public $defaultValue;
  /** @var string */
  public $inOutType;
  /** @var bool */
  public $isTransient;
  /** @var string */
  public $jsonSchema;
  /** @var string */
  public $key;
  /** @var string */
  public $name;
  /** @var EnterpriseCrmEventbusProtoNodeIdentifier */
  public $producedBy;
  /** @var string */
  public $producer;
  /** @var string */
  public $protoDefName;
  /** @var string */
  public $protoDefPath;
  protected $collection_key = 'children';
  protected $attributesType = EnterpriseCrmEventbusProtoAttributes::class;
  protected $attributesDataType = '';
  protected $childrenType = EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry::class;
  protected $childrenDataType = 'array';
  protected $defaultValueType = EnterpriseCrmFrontendsEventbusProtoParameterValueType::class;
  protected $defaultValueDataType = '';
  protected $producedByType = EnterpriseCrmEventbusProtoNodeIdentifier::class;
  protected $producedByDataType = '';
  /** @param EnterpriseCrmEventbusProtoAttributes */
  public function setAttributes(EnterpriseCrmEventbusProtoAttributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return EnterpriseCrmEventbusProtoAttributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public function setChildren($children)
  {
    $this->children = $children;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public function getChildren()
  {
    return $this->children;
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
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function setDefaultValue(EnterpriseCrmFrontendsEventbusProtoParameterValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterValueType */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param string */
  public function setInOutType($inOutType)
  {
    $this->inOutType = $inOutType;
  }
  /** @return string */
  public function getInOutType()
  {
    return $this->inOutType;
  }
  /** @param bool */
  public function setIsTransient($isTransient)
  {
    $this->isTransient = $isTransient;
  }
  /** @return bool */
  public function getIsTransient()
  {
    return $this->isTransient;
  }
  /** @param string */
  public function setJsonSchema($jsonSchema)
  {
    $this->jsonSchema = $jsonSchema;
  }
  /** @return string */
  public function getJsonSchema()
  {
    return $this->jsonSchema;
  }
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
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
  /** @param EnterpriseCrmEventbusProtoNodeIdentifier */
  public function setProducedBy(EnterpriseCrmEventbusProtoNodeIdentifier $producedBy)
  {
    $this->producedBy = $producedBy;
  }
  /** @return EnterpriseCrmEventbusProtoNodeIdentifier */
  public function getProducedBy()
  {
    return $this->producedBy;
  }
  /** @param string */
  public function setProducer($producer)
  {
    $this->producer = $producer;
  }
  /** @return string */
  public function getProducer()
  {
    return $this->producer;
  }
  /** @param string */
  public function setProtoDefName($protoDefName)
  {
    $this->protoDefName = $protoDefName;
  }
  /** @return string */
  public function getProtoDefName()
  {
    return $this->protoDefName;
  }
  /** @param string */
  public function setProtoDefPath($protoDefPath)
  {
    $this->protoDefPath = $protoDefPath;
  }
  /** @return string */
  public function getProtoDefPath()
  {
    return $this->protoDefPath;
  }
}

class EnterpriseCrmFrontendsEventbusProtoWorkflowParameters extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry::class;
  protected $parametersDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class EnterpriseCrmLoggingGwsFieldLimits extends \Google\Collection
{
  /** @var string */
  public $logAction;
  /** @var string[] */
  public $logType;
  /** @var int */
  public $maxArraySize;
  /** @var int */
  public $maxStringLength;
  /** @var string */
  public $shortenerType;
  protected $collection_key = 'logType';
  /** @param string */
  public function setLogAction($logAction)
  {
    $this->logAction = $logAction;
  }
  /** @return string */
  public function getLogAction()
  {
    return $this->logAction;
  }
  /** @param string[] */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string[] */
  public function getLogType()
  {
    return $this->logType;
  }
  /** @param int */
  public function setMaxArraySize($maxArraySize)
  {
    $this->maxArraySize = $maxArraySize;
  }
  /** @return int */
  public function getMaxArraySize()
  {
    return $this->maxArraySize;
  }
  /** @param int */
  public function setMaxStringLength($maxStringLength)
  {
    $this->maxStringLength = $maxStringLength;
  }
  /** @return int */
  public function getMaxStringLength()
  {
    return $this->maxStringLength;
  }
  /** @param string */
  public function setShortenerType($shortenerType)
  {
    $this->shortenerType = $shortenerType;
  }
  /** @return string */
  public function getShortenerType()
  {
    return $this->shortenerType;
  }
}

class EnterpriseCrmLoggingGwsSanitizeOptions extends \Google\Collection
{
  /** @var bool */
  public $isAlreadySanitized;
  /** @var string[] */
  public $logType;
  /** @var string */
  public $privacy;
  /** @var string */
  public $sanitizeType;
  protected $collection_key = 'logType';
  /** @param bool */
  public function setIsAlreadySanitized($isAlreadySanitized)
  {
    $this->isAlreadySanitized = $isAlreadySanitized;
  }
  /** @return bool */
  public function getIsAlreadySanitized()
  {
    return $this->isAlreadySanitized;
  }
  /** @param string[] */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string[] */
  public function getLogType()
  {
    return $this->logType;
  }
  /** @param string */
  public function setPrivacy($privacy)
  {
    $this->privacy = $privacy;
  }
  /** @return string */
  public function getPrivacy()
  {
    return $this->privacy;
  }
  /** @param string */
  public function setSanitizeType($sanitizeType)
  {
    $this->sanitizeType = $sanitizeType;
  }
  /** @return string */
  public function getSanitizeType()
  {
    return $this->sanitizeType;
  }
}

class GoogleCloudConnectorsV1AuthConfig extends \Google\Collection
{
  /** @var GoogleCloudConnectorsV1ConfigVariable[] */
  public $additionalVariables;
  /** @var string */
  public $authType;
  /** @var GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials */
  public $oauth2ClientCredentials;
  /** @var GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer */
  public $oauth2JwtBearer;
  /** @var GoogleCloudConnectorsV1AuthConfigSshPublicKey */
  public $sshPublicKey;
  /** @var GoogleCloudConnectorsV1AuthConfigUserPassword */
  public $userPassword;
  protected $collection_key = 'additionalVariables';
  protected $additionalVariablesType = GoogleCloudConnectorsV1ConfigVariable::class;
  protected $additionalVariablesDataType = 'array';
  protected $oauth2ClientCredentialsType = GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials::class;
  protected $oauth2ClientCredentialsDataType = '';
  protected $oauth2JwtBearerType = GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer::class;
  protected $oauth2JwtBearerDataType = '';
  protected $sshPublicKeyType = GoogleCloudConnectorsV1AuthConfigSshPublicKey::class;
  protected $sshPublicKeyDataType = '';
  protected $userPasswordType = GoogleCloudConnectorsV1AuthConfigUserPassword::class;
  protected $userPasswordDataType = '';
  /** @param GoogleCloudConnectorsV1ConfigVariable[] */
  public function setAdditionalVariables($additionalVariables)
  {
    $this->additionalVariables = $additionalVariables;
  }
  /** @return GoogleCloudConnectorsV1ConfigVariable[] */
  public function getAdditionalVariables()
  {
    return $this->additionalVariables;
  }
  /** @param string */
  public function setAuthType($authType)
  {
    $this->authType = $authType;
  }
  /** @return string */
  public function getAuthType()
  {
    return $this->authType;
  }
  /** @param GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials */
  public function setOauth2ClientCredentials(GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials $oauth2ClientCredentials)
  {
    $this->oauth2ClientCredentials = $oauth2ClientCredentials;
  }
  /** @return GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials */
  public function getOauth2ClientCredentials()
  {
    return $this->oauth2ClientCredentials;
  }
  /** @param GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer */
  public function setOauth2JwtBearer(GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer $oauth2JwtBearer)
  {
    $this->oauth2JwtBearer = $oauth2JwtBearer;
  }
  /** @return GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer */
  public function getOauth2JwtBearer()
  {
    return $this->oauth2JwtBearer;
  }
  /** @param GoogleCloudConnectorsV1AuthConfigSshPublicKey */
  public function setSshPublicKey(GoogleCloudConnectorsV1AuthConfigSshPublicKey $sshPublicKey)
  {
    $this->sshPublicKey = $sshPublicKey;
  }
  /** @return GoogleCloudConnectorsV1AuthConfigSshPublicKey */
  public function getSshPublicKey()
  {
    return $this->sshPublicKey;
  }
  /** @param GoogleCloudConnectorsV1AuthConfigUserPassword */
  public function setUserPassword(GoogleCloudConnectorsV1AuthConfigUserPassword $userPassword)
  {
    $this->userPassword = $userPassword;
  }
  /** @return GoogleCloudConnectorsV1AuthConfigUserPassword */
  public function getUserPassword()
  {
    return $this->userPassword;
  }
}

class GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var GoogleCloudConnectorsV1Secret */
  public $clientSecret;
  protected $clientSecretType = GoogleCloudConnectorsV1Secret::class;
  protected $clientSecretDataType = '';
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param GoogleCloudConnectorsV1Secret */
  public function setClientSecret(GoogleCloudConnectorsV1Secret $clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
}

class GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer extends \Google\Model
{
  /** @var GoogleCloudConnectorsV1Secret */
  public $clientKey;
  /** @var GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims */
  public $jwtClaims;
  protected $clientKeyType = GoogleCloudConnectorsV1Secret::class;
  protected $clientKeyDataType = '';
  protected $jwtClaimsType = GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims::class;
  protected $jwtClaimsDataType = '';
  /** @param GoogleCloudConnectorsV1Secret */
  public function setClientKey(GoogleCloudConnectorsV1Secret $clientKey)
  {
    $this->clientKey = $clientKey;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getClientKey()
  {
    return $this->clientKey;
  }
  /** @param GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims */
  public function setJwtClaims(GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims $jwtClaims)
  {
    $this->jwtClaims = $jwtClaims;
  }
  /** @return GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims */
  public function getJwtClaims()
  {
    return $this->jwtClaims;
  }
}

class GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims extends \Google\Model
{
  /** @var string */
  public $audience;
  /** @var string */
  public $issuer;
  /** @var string */
  public $subject;

  /** @param string */
  public function setAudience($audience)
  {
    $this->audience = $audience;
  }
  /** @return string */
  public function getAudience()
  {
    return $this->audience;
  }
  /** @param string */
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /** @return string */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
}

class GoogleCloudConnectorsV1AuthConfigSshPublicKey extends \Google\Model
{
  /** @var string */
  public $certType;
  /** @var GoogleCloudConnectorsV1Secret */
  public $sshClientCert;
  /** @var GoogleCloudConnectorsV1Secret */
  public $sshClientCertPass;
  /** @var string */
  public $username;
  protected $sshClientCertType = GoogleCloudConnectorsV1Secret::class;
  protected $sshClientCertDataType = '';
  protected $sshClientCertPassType = GoogleCloudConnectorsV1Secret::class;
  protected $sshClientCertPassDataType = '';
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
  /** @param GoogleCloudConnectorsV1Secret */
  public function setSshClientCert(GoogleCloudConnectorsV1Secret $sshClientCert)
  {
    $this->sshClientCert = $sshClientCert;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getSshClientCert()
  {
    return $this->sshClientCert;
  }
  /** @param GoogleCloudConnectorsV1Secret */
  public function setSshClientCertPass(GoogleCloudConnectorsV1Secret $sshClientCertPass)
  {
    $this->sshClientCertPass = $sshClientCertPass;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getSshClientCertPass()
  {
    return $this->sshClientCertPass;
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

class GoogleCloudConnectorsV1AuthConfigUserPassword extends \Google\Model
{
  /** @var GoogleCloudConnectorsV1Secret */
  public $password;
  /** @var string */
  public $username;
  protected $passwordType = GoogleCloudConnectorsV1Secret::class;
  protected $passwordDataType = '';
  /** @param GoogleCloudConnectorsV1Secret */
  public function setPassword(GoogleCloudConnectorsV1Secret $password)
  {
    $this->password = $password;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getPassword()
  {
    return $this->password;
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

class GoogleCloudConnectorsV1ConfigVariable extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $intValue;
  /** @var string */
  public $key;
  /** @var GoogleCloudConnectorsV1Secret */
  public $secretValue;
  /** @var string */
  public $stringValue;
  protected $secretValueType = GoogleCloudConnectorsV1Secret::class;
  protected $secretValueDataType = '';
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
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param GoogleCloudConnectorsV1Secret */
  public function setSecretValue(GoogleCloudConnectorsV1Secret $secretValue)
  {
    $this->secretValue = $secretValue;
  }
  /** @return GoogleCloudConnectorsV1Secret */
  public function getSecretValue()
  {
    return $this->secretValue;
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

class GoogleCloudConnectorsV1Connection extends \Google\Collection
{
  /** @var GoogleCloudConnectorsV1AuthConfig */
  public $authConfig;
  /** @var GoogleCloudConnectorsV1ConfigVariable[] */
  public $configVariables;
  /** @var string */
  public $connectorVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var GoogleCloudConnectorsV1DestinationConfig[] */
  public $destinationConfigs;
  /** @var string */
  public $envoyImageLocation;
  /** @var string */
  public $imageLocation;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudConnectorsV1LockConfig */
  public $lockConfig;
  /** @var string */
  public $name;
  /** @var GoogleCloudConnectorsV1NodeConfig */
  public $nodeConfig;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $serviceDirectory;
  /** @var GoogleCloudConnectorsV1ConnectionStatus */
  public $status;
  /** @var bool */
  public $suspended;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'destinationConfigs';
  protected $authConfigType = GoogleCloudConnectorsV1AuthConfig::class;
  protected $authConfigDataType = '';
  protected $configVariablesType = GoogleCloudConnectorsV1ConfigVariable::class;
  protected $configVariablesDataType = 'array';
  protected $destinationConfigsType = GoogleCloudConnectorsV1DestinationConfig::class;
  protected $destinationConfigsDataType = 'array';
  protected $lockConfigType = GoogleCloudConnectorsV1LockConfig::class;
  protected $lockConfigDataType = '';
  protected $nodeConfigType = GoogleCloudConnectorsV1NodeConfig::class;
  protected $nodeConfigDataType = '';
  protected $statusType = GoogleCloudConnectorsV1ConnectionStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudConnectorsV1AuthConfig */
  public function setAuthConfig(GoogleCloudConnectorsV1AuthConfig $authConfig)
  {
    $this->authConfig = $authConfig;
  }
  /** @return GoogleCloudConnectorsV1AuthConfig */
  public function getAuthConfig()
  {
    return $this->authConfig;
  }
  /** @param GoogleCloudConnectorsV1ConfigVariable[] */
  public function setConfigVariables($configVariables)
  {
    $this->configVariables = $configVariables;
  }
  /** @return GoogleCloudConnectorsV1ConfigVariable[] */
  public function getConfigVariables()
  {
    return $this->configVariables;
  }
  /** @param string */
  public function setConnectorVersion($connectorVersion)
  {
    $this->connectorVersion = $connectorVersion;
  }
  /** @return string */
  public function getConnectorVersion()
  {
    return $this->connectorVersion;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param GoogleCloudConnectorsV1DestinationConfig[] */
  public function setDestinationConfigs($destinationConfigs)
  {
    $this->destinationConfigs = $destinationConfigs;
  }
  /** @return GoogleCloudConnectorsV1DestinationConfig[] */
  public function getDestinationConfigs()
  {
    return $this->destinationConfigs;
  }
  /** @param string */
  public function setEnvoyImageLocation($envoyImageLocation)
  {
    $this->envoyImageLocation = $envoyImageLocation;
  }
  /** @return string */
  public function getEnvoyImageLocation()
  {
    return $this->envoyImageLocation;
  }
  /** @param string */
  public function setImageLocation($imageLocation)
  {
    $this->imageLocation = $imageLocation;
  }
  /** @return string */
  public function getImageLocation()
  {
    return $this->imageLocation;
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
  /** @param GoogleCloudConnectorsV1LockConfig */
  public function setLockConfig(GoogleCloudConnectorsV1LockConfig $lockConfig)
  {
    $this->lockConfig = $lockConfig;
  }
  /** @return GoogleCloudConnectorsV1LockConfig */
  public function getLockConfig()
  {
    return $this->lockConfig;
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
  /** @param GoogleCloudConnectorsV1NodeConfig */
  public function setNodeConfig(GoogleCloudConnectorsV1NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /** @return GoogleCloudConnectorsV1NodeConfig */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param string */
  public function setServiceDirectory($serviceDirectory)
  {
    $this->serviceDirectory = $serviceDirectory;
  }
  /** @return string */
  public function getServiceDirectory()
  {
    return $this->serviceDirectory;
  }
  /** @param GoogleCloudConnectorsV1ConnectionStatus */
  public function setStatus(GoogleCloudConnectorsV1ConnectionStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleCloudConnectorsV1ConnectionStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param bool */
  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }
  /** @return bool */
  public function getSuspended()
  {
    return $this->suspended;
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

class GoogleCloudConnectorsV1ConnectionStatus extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $state;
  /** @var string */
  public $status;

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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class GoogleCloudConnectorsV1Destination extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var int */
  public $port;
  /** @var string */
  public $serviceAttachment;

  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
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
  public function setServiceAttachment($serviceAttachment)
  {
    $this->serviceAttachment = $serviceAttachment;
  }
  /** @return string */
  public function getServiceAttachment()
  {
    return $this->serviceAttachment;
  }
}

class GoogleCloudConnectorsV1DestinationConfig extends \Google\Collection
{
  /** @var GoogleCloudConnectorsV1Destination[] */
  public $destinations;
  /** @var string */
  public $key;
  protected $collection_key = 'destinations';
  protected $destinationsType = GoogleCloudConnectorsV1Destination::class;
  protected $destinationsDataType = 'array';
  /** @param GoogleCloudConnectorsV1Destination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return GoogleCloudConnectorsV1Destination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
}

class GoogleCloudConnectorsV1LockConfig extends \Google\Model
{
  /** @var bool */
  public $locked;
  /** @var string */
  public $reason;

  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
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

class GoogleCloudConnectorsV1NodeConfig extends \Google\Model
{
  /** @var int */
  public $maxNodeCount;
  /** @var int */
  public $minNodeCount;

  /** @param int */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /** @return int */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
  /** @param int */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /** @return int */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
}

class GoogleCloudConnectorsV1Secret extends \Google\Model
{
  /** @var string */
  public $secretVersion;

  /** @param string */
  public function setSecretVersion($secretVersion)
  {
    $this->secretVersion = $secretVersion;
  }
  /** @return string */
  public function getSecretVersion()
  {
    return $this->secretVersion;
  }
}

class GoogleCloudIntegrationsV1alphaAccessToken extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $accessTokenExpireTime;
  /** @var string */
  public $refreshToken;
  /** @var string */
  public $refreshTokenExpireTime;
  /** @var string */
  public $tokenType;

  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param string */
  public function setAccessTokenExpireTime($accessTokenExpireTime)
  {
    $this->accessTokenExpireTime = $accessTokenExpireTime;
  }
  /** @return string */
  public function getAccessTokenExpireTime()
  {
    return $this->accessTokenExpireTime;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
  /** @param string */
  public function setRefreshTokenExpireTime($refreshTokenExpireTime)
  {
    $this->refreshTokenExpireTime = $refreshTokenExpireTime;
  }
  /** @return string */
  public function getRefreshTokenExpireTime()
  {
    return $this->refreshTokenExpireTime;
  }
  /** @param string */
  public function setTokenType($tokenType)
  {
    $this->tokenType = $tokenType;
  }
  /** @return string */
  public function getTokenType()
  {
    return $this->tokenType;
  }
}

class GoogleCloudIntegrationsV1alphaArchiveBundleRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaArchiveBundleResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaAttemptStats extends \Google\Model
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

class GoogleCloudIntegrationsV1alphaAuthConfig extends \Google\Collection
{
  /** @var string */
  public $certificateId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorEmail;
  /** @var string */
  public $credentialType;
  /** @var GoogleCloudIntegrationsV1alphaCredential */
  public $decryptedCredential;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $encryptedCredential;
  /** @var string[] */
  public $expiryNotificationDuration;
  /** @var string */
  public $lastModifierEmail;
  /** @var string */
  public $name;
  /** @var string */
  public $overrideValidTime;
  /** @var string */
  public $reason;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $validTime;
  /** @var string */
  public $visibility;
  protected $collection_key = 'expiryNotificationDuration';
  protected $decryptedCredentialType = GoogleCloudIntegrationsV1alphaCredential::class;
  protected $decryptedCredentialDataType = '';
  /** @param string */
  public function setCertificateId($certificateId)
  {
    $this->certificateId = $certificateId;
  }
  /** @return string */
  public function getCertificateId()
  {
    return $this->certificateId;
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
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  /** @return string */
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  /** @param string */
  public function setCredentialType($credentialType)
  {
    $this->credentialType = $credentialType;
  }
  /** @return string */
  public function getCredentialType()
  {
    return $this->credentialType;
  }
  /** @param GoogleCloudIntegrationsV1alphaCredential */
  public function setDecryptedCredential(GoogleCloudIntegrationsV1alphaCredential $decryptedCredential)
  {
    $this->decryptedCredential = $decryptedCredential;
  }
  /** @return GoogleCloudIntegrationsV1alphaCredential */
  public function getDecryptedCredential()
  {
    return $this->decryptedCredential;
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
  public function setEncryptedCredential($encryptedCredential)
  {
    $this->encryptedCredential = $encryptedCredential;
  }
  /** @return string */
  public function getEncryptedCredential()
  {
    return $this->encryptedCredential;
  }
  /** @param string[] */
  public function setExpiryNotificationDuration($expiryNotificationDuration)
  {
    $this->expiryNotificationDuration = $expiryNotificationDuration;
  }
  /** @return string[] */
  public function getExpiryNotificationDuration()
  {
    return $this->expiryNotificationDuration;
  }
  /** @param string */
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  /** @return string */
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
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
  public function setOverrideValidTime($overrideValidTime)
  {
    $this->overrideValidTime = $overrideValidTime;
  }
  /** @return string */
  public function getOverrideValidTime()
  {
    return $this->overrideValidTime;
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
  /** @param string */
  public function setValidTime($validTime)
  {
    $this->validTime = $validTime;
  }
  /** @return string */
  public function getValidTime()
  {
    return $this->validTime;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class GoogleCloudIntegrationsV1alphaAuthToken extends \Google\Model
{
  /** @var string */
  public $token;
  /** @var string */
  public $type;

  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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

class GoogleCloudIntegrationsV1alphaBooleanParameterArray extends \Google\Collection
{
  /** @var bool[] */
  public $booleanValues;
  protected $collection_key = 'booleanValues';
  /** @param bool[] */
  public function setBooleanValues($booleanValues)
  {
    $this->booleanValues = $booleanValues;
  }
  /** @return bool[] */
  public function getBooleanValues()
  {
    return $this->booleanValues;
  }
}

class GoogleCloudIntegrationsV1alphaCancelExecutionRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaCancelExecutionResponse extends \Google\Model
{
  /** @var bool */
  public $isCanceled;

  /** @param bool */
  public function setIsCanceled($isCanceled)
  {
    $this->isCanceled = $isCanceled;
  }
  /** @return bool */
  public function getIsCanceled()
  {
    return $this->isCanceled;
  }
}

class GoogleCloudIntegrationsV1alphaCertificate extends \Google\Model
{
  /** @var string */
  public $certificateStatus;
  /** @var string */
  public $credentialId;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudIntegrationsV1alphaClientCertificate */
  public $rawCertificate;
  /** @var string */
  public $requestorId;
  /** @var string */
  public $validEndTime;
  /** @var string */
  public $validStartTime;
  protected $rawCertificateType = GoogleCloudIntegrationsV1alphaClientCertificate::class;
  protected $rawCertificateDataType = '';
  /** @param string */
  public function setCertificateStatus($certificateStatus)
  {
    $this->certificateStatus = $certificateStatus;
  }
  /** @return string */
  public function getCertificateStatus()
  {
    return $this->certificateStatus;
  }
  /** @param string */
  public function setCredentialId($credentialId)
  {
    $this->credentialId = $credentialId;
  }
  /** @return string */
  public function getCredentialId()
  {
    return $this->credentialId;
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
  /** @param GoogleCloudIntegrationsV1alphaClientCertificate */
  public function setRawCertificate(GoogleCloudIntegrationsV1alphaClientCertificate $rawCertificate)
  {
    $this->rawCertificate = $rawCertificate;
  }
  /** @return GoogleCloudIntegrationsV1alphaClientCertificate */
  public function getRawCertificate()
  {
    return $this->rawCertificate;
  }
  /** @param string */
  public function setRequestorId($requestorId)
  {
    $this->requestorId = $requestorId;
  }
  /** @return string */
  public function getRequestorId()
  {
    return $this->requestorId;
  }
  /** @param string */
  public function setValidEndTime($validEndTime)
  {
    $this->validEndTime = $validEndTime;
  }
  /** @return string */
  public function getValidEndTime()
  {
    return $this->validEndTime;
  }
  /** @param string */
  public function setValidStartTime($validStartTime)
  {
    $this->validStartTime = $validStartTime;
  }
  /** @return string */
  public function getValidStartTime()
  {
    return $this->validStartTime;
  }
}

class GoogleCloudIntegrationsV1alphaClientCertificate extends \Google\Model
{
  /** @var string */
  public $encryptedPrivateKey;
  /** @var string */
  public $passphrase;
  /** @var string */
  public $sslCertificate;

  /** @param string */
  public function setEncryptedPrivateKey($encryptedPrivateKey)
  {
    $this->encryptedPrivateKey = $encryptedPrivateKey;
  }
  /** @return string */
  public function getEncryptedPrivateKey()
  {
    return $this->encryptedPrivateKey;
  }
  /** @param string */
  public function setPassphrase($passphrase)
  {
    $this->passphrase = $passphrase;
  }
  /** @return string */
  public function getPassphrase()
  {
    return $this->passphrase;
  }
  /** @param string */
  public function setSslCertificate($sslCertificate)
  {
    $this->sslCertificate = $sslCertificate;
  }
  /** @return string */
  public function getSslCertificate()
  {
    return $this->sslCertificate;
  }
}

class GoogleCloudIntegrationsV1alphaCloudSchedulerConfig extends \Google\Model
{
  /** @var string */
  public $cronTab;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $location;
  /** @var string */
  public $serviceAccountEmail;

  /** @param string */
  public function setCronTab($cronTab)
  {
    $this->cronTab = $cronTab;
  }
  /** @return string */
  public function getCronTab()
  {
    return $this->cronTab;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
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
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
}

class GoogleCloudIntegrationsV1alphaConnectionSchemaMetadata extends \Google\Collection
{
  /** @var string[] */
  public $actions;
  /** @var string[] */
  public $entities;
  protected $collection_key = 'entities';
  /** @param string[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return string[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param string[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return string[] */
  public function getEntities()
  {
    return $this->entities;
  }
}

class GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectRequest extends \Google\Model
{
  /** @var string */
  public $appsScriptProject;
  /** @var string */
  public $authConfigId;

  /** @param string */
  public function setAppsScriptProject($appsScriptProject)
  {
    $this->appsScriptProject = $appsScriptProject;
  }
  /** @return string */
  public function getAppsScriptProject()
  {
    return $this->appsScriptProject;
  }
  /** @param string */
  public function setAuthConfigId($authConfigId)
  {
    $this->authConfigId = $authConfigId;
  }
  /** @return string */
  public function getAuthConfigId()
  {
    return $this->authConfigId;
  }
}

class GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectResponse extends \Google\Model
{
  /** @var string */
  public $projectId;

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

class GoogleCloudIntegrationsV1alphaCreateBundleRequest extends \Google\Collection
{
  /** @var string */
  public $bundleId;
  /** @var string[] */
  public $integrations;
  /** @var string */
  public $secondaryCustomerOrgId;
  protected $collection_key = 'integrations';
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
  /** @param string[] */
  public function setIntegrations($integrations)
  {
    $this->integrations = $integrations;
  }
  /** @return string[] */
  public function getIntegrations()
  {
    return $this->integrations;
  }
  /** @param string */
  public function setSecondaryCustomerOrgId($secondaryCustomerOrgId)
  {
    $this->secondaryCustomerOrgId = $secondaryCustomerOrgId;
  }
  /** @return string */
  public function getSecondaryCustomerOrgId()
  {
    return $this->secondaryCustomerOrgId;
  }
}

class GoogleCloudIntegrationsV1alphaCreateBundleResponse extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public $config;
  /** @var string */
  public $triggerId;
  protected $configType = GoogleCloudIntegrationsV1alphaIntegrationBundleConfig::class;
  protected $configDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function setConfig(GoogleCloudIntegrationsV1alphaIntegrationBundleConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
}

class GoogleCloudIntegrationsV1alphaCredential extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaAuthToken */
  public $authToken;
  /** @var string */
  public $credentialType;
  /** @var GoogleCloudIntegrationsV1alphaJwt */
  public $jwt;
  /** @var GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode */
  public $oauth2AuthorizationCode;
  /** @var GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials */
  public $oauth2ClientCredentials;
  /** @var GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials */
  public $oauth2ResourceOwnerCredentials;
  /** @var GoogleCloudIntegrationsV1alphaOidcToken */
  public $oidcToken;
  /** @var GoogleCloudIntegrationsV1alphaServiceAccountCredentials */
  public $serviceAccountCredentials;
  /** @var GoogleCloudIntegrationsV1alphaUsernameAndPassword */
  public $usernameAndPassword;
  protected $authTokenType = GoogleCloudIntegrationsV1alphaAuthToken::class;
  protected $authTokenDataType = '';
  protected $jwtType = GoogleCloudIntegrationsV1alphaJwt::class;
  protected $jwtDataType = '';
  protected $oauth2AuthorizationCodeType = GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode::class;
  protected $oauth2AuthorizationCodeDataType = '';
  protected $oauth2ClientCredentialsType = GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials::class;
  protected $oauth2ClientCredentialsDataType = '';
  protected $oauth2ResourceOwnerCredentialsType = GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials::class;
  protected $oauth2ResourceOwnerCredentialsDataType = '';
  protected $oidcTokenType = GoogleCloudIntegrationsV1alphaOidcToken::class;
  protected $oidcTokenDataType = '';
  protected $serviceAccountCredentialsType = GoogleCloudIntegrationsV1alphaServiceAccountCredentials::class;
  protected $serviceAccountCredentialsDataType = '';
  protected $usernameAndPasswordType = GoogleCloudIntegrationsV1alphaUsernameAndPassword::class;
  protected $usernameAndPasswordDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaAuthToken */
  public function setAuthToken(GoogleCloudIntegrationsV1alphaAuthToken $authToken)
  {
    $this->authToken = $authToken;
  }
  /** @return GoogleCloudIntegrationsV1alphaAuthToken */
  public function getAuthToken()
  {
    return $this->authToken;
  }
  /** @param string */
  public function setCredentialType($credentialType)
  {
    $this->credentialType = $credentialType;
  }
  /** @return string */
  public function getCredentialType()
  {
    return $this->credentialType;
  }
  /** @param GoogleCloudIntegrationsV1alphaJwt */
  public function setJwt(GoogleCloudIntegrationsV1alphaJwt $jwt)
  {
    $this->jwt = $jwt;
  }
  /** @return GoogleCloudIntegrationsV1alphaJwt */
  public function getJwt()
  {
    return $this->jwt;
  }
  /** @param GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode */
  public function setOauth2AuthorizationCode(GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode $oauth2AuthorizationCode)
  {
    $this->oauth2AuthorizationCode = $oauth2AuthorizationCode;
  }
  /** @return GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode */
  public function getOauth2AuthorizationCode()
  {
    return $this->oauth2AuthorizationCode;
  }
  /** @param GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials */
  public function setOauth2ClientCredentials(GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials $oauth2ClientCredentials)
  {
    $this->oauth2ClientCredentials = $oauth2ClientCredentials;
  }
  /** @return GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials */
  public function getOauth2ClientCredentials()
  {
    return $this->oauth2ClientCredentials;
  }
  /** @param GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials */
  public function setOauth2ResourceOwnerCredentials(GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials $oauth2ResourceOwnerCredentials)
  {
    $this->oauth2ResourceOwnerCredentials = $oauth2ResourceOwnerCredentials;
  }
  /** @return GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials */
  public function getOauth2ResourceOwnerCredentials()
  {
    return $this->oauth2ResourceOwnerCredentials;
  }
  /** @param GoogleCloudIntegrationsV1alphaOidcToken */
  public function setOidcToken(GoogleCloudIntegrationsV1alphaOidcToken $oidcToken)
  {
    $this->oidcToken = $oidcToken;
  }
  /** @return GoogleCloudIntegrationsV1alphaOidcToken */
  public function getOidcToken()
  {
    return $this->oidcToken;
  }
  /** @param GoogleCloudIntegrationsV1alphaServiceAccountCredentials */
  public function setServiceAccountCredentials(GoogleCloudIntegrationsV1alphaServiceAccountCredentials $serviceAccountCredentials)
  {
    $this->serviceAccountCredentials = $serviceAccountCredentials;
  }
  /** @return GoogleCloudIntegrationsV1alphaServiceAccountCredentials */
  public function getServiceAccountCredentials()
  {
    return $this->serviceAccountCredentials;
  }
  /** @param GoogleCloudIntegrationsV1alphaUsernameAndPassword */
  public function setUsernameAndPassword(GoogleCloudIntegrationsV1alphaUsernameAndPassword $usernameAndPassword)
  {
    $this->usernameAndPassword = $usernameAndPassword;
  }
  /** @return GoogleCloudIntegrationsV1alphaUsernameAndPassword */
  public function getUsernameAndPassword()
  {
    return $this->usernameAndPassword;
  }
}

class GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaDoubleParameterArray extends \Google\Collection
{
  public $doubleValues;
  protected $collection_key = 'doubleValues';
  public function setDoubleValues($doubleValues)
  {
    $this->doubleValues = $doubleValues;
  }
  public function getDoubleValues()
  {
    return $this->doubleValues;
  }
}

class GoogleCloudIntegrationsV1alphaDownloadIntegrationVersionResponse extends \Google\Model
{
  /** @var string */
  public $content;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
}

class GoogleCloudIntegrationsV1alphaEnumerateConnectorPlatformRegionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $regions;
  protected $collection_key = 'regions';
  /** @param string[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return string[] */
  public function getRegions()
  {
    return $this->regions;
  }
}

class GoogleCloudIntegrationsV1alphaEventParameter extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var GoogleCloudIntegrationsV1alphaValueType */
  public $value;
  protected $valueType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $valueDataType = '';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param GoogleCloudIntegrationsV1alphaValueType */
  public function setValue(GoogleCloudIntegrationsV1alphaValueType $value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudIntegrationsV1alphaExecuteIntegrationsRequest extends \Google\Collection
{
  /** @var bool */
  public $doNotPropagateError;
  /** @var string */
  public $executionId;
  /** @var GoogleCloudIntegrationsV1alphaValueType[] */
  public $inputParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $parameterEntries;
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $parameters;
  /** @var string */
  public $requestId;
  /** @var string */
  public $triggerId;
  protected $collection_key = 'parameterEntries';
  protected $inputParametersType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $inputParametersDataType = 'map';
  protected $parameterEntriesType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $parameterEntriesDataType = 'array';
  protected $parametersType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  /** @param bool */
  public function setDoNotPropagateError($doNotPropagateError)
  {
    $this->doNotPropagateError = $doNotPropagateError;
  }
  /** @return bool */
  public function getDoNotPropagateError()
  {
    return $this->doNotPropagateError;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param GoogleCloudIntegrationsV1alphaValueType[] */
  public function setInputParameters($inputParameters)
  {
    $this->inputParameters = $inputParameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType[] */
  public function getInputParameters()
  {
    return $this->inputParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setParameterEntries($parameterEntries)
  {
    $this->parameterEntries = $parameterEntries;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getParameterEntries()
  {
    return $this->parameterEntries;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmFrontendsEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
}

class GoogleCloudIntegrationsV1alphaExecuteIntegrationsResponse extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public $eventParameters;
  /** @var bool */
  public $executionFailed;
  /** @var string */
  public $executionId;
  /** @var array[] */
  public $outputParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $parameterEntries;
  protected $collection_key = 'parameterEntries';
  protected $eventParametersType = EnterpriseCrmFrontendsEventbusProtoEventParameters::class;
  protected $eventParametersDataType = '';
  protected $parameterEntriesType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $parameterEntriesDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function setEventParameters(EnterpriseCrmFrontendsEventbusProtoEventParameters $eventParameters)
  {
    $this->eventParameters = $eventParameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventParameters */
  public function getEventParameters()
  {
    return $this->eventParameters;
  }
  /** @param bool */
  public function setExecutionFailed($executionFailed)
  {
    $this->executionFailed = $executionFailed;
  }
  /** @return bool */
  public function getExecutionFailed()
  {
    return $this->executionFailed;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param array[] */
  public function setOutputParameters($outputParameters)
  {
    $this->outputParameters = $outputParameters;
  }
  /** @return array[] */
  public function getOutputParameters()
  {
    return $this->outputParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setParameterEntries($parameterEntries)
  {
    $this->parameterEntries = $parameterEntries;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getParameterEntries()
  {
    return $this->parameterEntries;
  }
}

class GoogleCloudIntegrationsV1alphaExecution extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudIntegrationsV1alphaExecution[] */
  public $directSubExecutions;
  /** @var EnterpriseCrmEventbusProtoEventExecutionDetails */
  public $eventExecutionDetails;
  /** @var GoogleCloudIntegrationsV1alphaExecutionDetails */
  public $executionDetails;
  /** @var string */
  public $executionMethod;
  /** @var string */
  public $name;
  /** @var GoogleCloudIntegrationsV1alphaValueType[] */
  public $requestParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $requestParams;
  /** @var GoogleCloudIntegrationsV1alphaValueType[] */
  public $responseParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $responseParams;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'responseParams';
  protected $directSubExecutionsType = GoogleCloudIntegrationsV1alphaExecution::class;
  protected $directSubExecutionsDataType = 'array';
  protected $eventExecutionDetailsType = EnterpriseCrmEventbusProtoEventExecutionDetails::class;
  protected $eventExecutionDetailsDataType = '';
  protected $executionDetailsType = GoogleCloudIntegrationsV1alphaExecutionDetails::class;
  protected $executionDetailsDataType = '';
  protected $requestParametersType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $requestParametersDataType = 'map';
  protected $requestParamsType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $requestParamsDataType = 'array';
  protected $responseParametersType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $responseParametersDataType = 'map';
  protected $responseParamsType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $responseParamsDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaExecution[] */
  public function setDirectSubExecutions($directSubExecutions)
  {
    $this->directSubExecutions = $directSubExecutions;
  }
  /** @return GoogleCloudIntegrationsV1alphaExecution[] */
  public function getDirectSubExecutions()
  {
    return $this->directSubExecutions;
  }
  /** @param EnterpriseCrmEventbusProtoEventExecutionDetails */
  public function setEventExecutionDetails(EnterpriseCrmEventbusProtoEventExecutionDetails $eventExecutionDetails)
  {
    $this->eventExecutionDetails = $eventExecutionDetails;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionDetails */
  public function getEventExecutionDetails()
  {
    return $this->eventExecutionDetails;
  }
  /** @param GoogleCloudIntegrationsV1alphaExecutionDetails */
  public function setExecutionDetails(GoogleCloudIntegrationsV1alphaExecutionDetails $executionDetails)
  {
    $this->executionDetails = $executionDetails;
  }
  /** @return GoogleCloudIntegrationsV1alphaExecutionDetails */
  public function getExecutionDetails()
  {
    return $this->executionDetails;
  }
  /** @param string */
  public function setExecutionMethod($executionMethod)
  {
    $this->executionMethod = $executionMethod;
  }
  /** @return string */
  public function getExecutionMethod()
  {
    return $this->executionMethod;
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
  /** @param GoogleCloudIntegrationsV1alphaValueType[] */
  public function setRequestParameters($requestParameters)
  {
    $this->requestParameters = $requestParameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType[] */
  public function getRequestParameters()
  {
    return $this->requestParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setRequestParams($requestParams)
  {
    $this->requestParams = $requestParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getRequestParams()
  {
    return $this->requestParams;
  }
  /** @param GoogleCloudIntegrationsV1alphaValueType[] */
  public function setResponseParameters($responseParameters)
  {
    $this->responseParameters = $responseParameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType[] */
  public function getResponseParameters()
  {
    return $this->responseParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setResponseParams($responseParams)
  {
    $this->responseParams = $responseParams;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getResponseParams()
  {
    return $this->responseParams;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
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

class GoogleCloudIntegrationsV1alphaExecutionDetails extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public $attemptStats;
  /** @var GoogleCloudIntegrationsV1alphaExecutionSnapshot[] */
  public $executionSnapshots;
  /** @var string */
  public $state;
  protected $collection_key = 'executionSnapshots';
  protected $attemptStatsType = GoogleCloudIntegrationsV1alphaAttemptStats::class;
  protected $attemptStatsDataType = 'array';
  protected $executionSnapshotsType = GoogleCloudIntegrationsV1alphaExecutionSnapshot::class;
  protected $executionSnapshotsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public function setAttemptStats($attemptStats)
  {
    $this->attemptStats = $attemptStats;
  }
  /** @return GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public function getAttemptStats()
  {
    return $this->attemptStats;
  }
  /** @param GoogleCloudIntegrationsV1alphaExecutionSnapshot[] */
  public function setExecutionSnapshots($executionSnapshots)
  {
    $this->executionSnapshots = $executionSnapshots;
  }
  /** @return GoogleCloudIntegrationsV1alphaExecutionSnapshot[] */
  public function getExecutionSnapshots()
  {
    return $this->executionSnapshots;
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

class GoogleCloudIntegrationsV1alphaExecutionSnapshot extends \Google\Collection
{
  /** @var string */
  public $checkpointTaskNumber;
  /** @var GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata */
  public $executionSnapshotMetadata;
  /** @var GoogleCloudIntegrationsV1alphaValueType[] */
  public $params;
  /** @var GoogleCloudIntegrationsV1alphaTaskExecutionDetails[] */
  public $taskExecutionDetails;
  protected $collection_key = 'taskExecutionDetails';
  protected $executionSnapshotMetadataType = GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata::class;
  protected $executionSnapshotMetadataDataType = '';
  protected $paramsType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $paramsDataType = 'map';
  protected $taskExecutionDetailsType = GoogleCloudIntegrationsV1alphaTaskExecutionDetails::class;
  protected $taskExecutionDetailsDataType = 'array';
  /** @param string */
  public function setCheckpointTaskNumber($checkpointTaskNumber)
  {
    $this->checkpointTaskNumber = $checkpointTaskNumber;
  }
  /** @return string */
  public function getCheckpointTaskNumber()
  {
    return $this->checkpointTaskNumber;
  }
  /** @param GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata */
  public function setExecutionSnapshotMetadata(GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata $executionSnapshotMetadata)
  {
    $this->executionSnapshotMetadata = $executionSnapshotMetadata;
  }
  /** @return GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata */
  public function getExecutionSnapshotMetadata()
  {
    return $this->executionSnapshotMetadata;
  }
  /** @param GoogleCloudIntegrationsV1alphaValueType[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param GoogleCloudIntegrationsV1alphaTaskExecutionDetails[] */
  public function setTaskExecutionDetails($taskExecutionDetails)
  {
    $this->taskExecutionDetails = $taskExecutionDetails;
  }
  /** @return GoogleCloudIntegrationsV1alphaTaskExecutionDetails[] */
  public function getTaskExecutionDetails()
  {
    return $this->taskExecutionDetails;
  }
}

class GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata extends \Google\Model
{
  /** @var int */
  public $executionAttempt;
  /** @var string */
  public $task;
  /** @var int */
  public $taskAttempt;
  /** @var string */
  public $taskNumber;

  /** @param int */
  public function setExecutionAttempt($executionAttempt)
  {
    $this->executionAttempt = $executionAttempt;
  }
  /** @return int */
  public function getExecutionAttempt()
  {
    return $this->executionAttempt;
  }
  /** @param string */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /** @return string */
  public function getTask()
  {
    return $this->task;
  }
  /** @param int */
  public function setTaskAttempt($taskAttempt)
  {
    $this->taskAttempt = $taskAttempt;
  }
  /** @return int */
  public function getTaskAttempt()
  {
    return $this->taskAttempt;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class GoogleCloudIntegrationsV1alphaFailurePolicy extends \Google\Model
{
  /** @var string */
  public $intervalTime;
  /** @var int */
  public $maxRetries;
  /** @var string */
  public $retryStrategy;

  /** @param string */
  public function setIntervalTime($intervalTime)
  {
    $this->intervalTime = $intervalTime;
  }
  /** @return string */
  public function getIntervalTime()
  {
    return $this->intervalTime;
  }
  /** @param int */
  public function setMaxRetries($maxRetries)
  {
    $this->maxRetries = $maxRetries;
  }
  /** @return int */
  public function getMaxRetries()
  {
    return $this->maxRetries;
  }
  /** @param string */
  public function setRetryStrategy($retryStrategy)
  {
    $this->retryStrategy = $retryStrategy;
  }
  /** @return string */
  public function getRetryStrategy()
  {
    return $this->retryStrategy;
  }
}

class GoogleCloudIntegrationsV1alphaGenerateTokenResponse extends \Google\Model
{
  /** @var string */
  public $message;

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

class GoogleCloudIntegrationsV1alphaGetBundleResponse extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public $config;
  protected $configType = GoogleCloudIntegrationsV1alphaIntegrationBundleConfig::class;
  protected $configDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function setConfig(GoogleCloudIntegrationsV1alphaIntegrationBundleConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class GoogleCloudIntegrationsV1alphaIntParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $intValues;
  protected $collection_key = 'intValues';
  /** @param string[] */
  public function setIntValues($intValues)
  {
    $this->intValues = $intValues;
  }
  /** @return string[] */
  public function getIntValues()
  {
    return $this->intValues;
  }
}

class GoogleCloudIntegrationsV1alphaIntegration extends \Google\Model
{
  /** @var bool */
  public $active;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
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

class GoogleCloudIntegrationsV1alphaIntegrationAlertConfig extends \Google\Model
{
  /** @var string */
  public $aggregationPeriod;
  /** @var int */
  public $alertThreshold;
  /** @var bool */
  public $disableAlert;
  /** @var string */
  public $displayName;
  /** @var string */
  public $durationThreshold;
  /** @var string */
  public $metricType;
  /** @var bool */
  public $onlyFinalAttempt;
  /** @var string */
  public $thresholdType;
  /** @var GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue */
  public $thresholdValue;
  protected $thresholdValueType = GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue::class;
  protected $thresholdValueDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param int */
  public function setAlertThreshold($alertThreshold)
  {
    $this->alertThreshold = $alertThreshold;
  }
  /** @return int */
  public function getAlertThreshold()
  {
    return $this->alertThreshold;
  }
  /** @param bool */
  public function setDisableAlert($disableAlert)
  {
    $this->disableAlert = $disableAlert;
  }
  /** @return bool */
  public function getDisableAlert()
  {
    return $this->disableAlert;
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
  public function setDurationThreshold($durationThreshold)
  {
    $this->durationThreshold = $durationThreshold;
  }
  /** @return string */
  public function getDurationThreshold()
  {
    return $this->durationThreshold;
  }
  /** @param string */
  public function setMetricType($metricType)
  {
    $this->metricType = $metricType;
  }
  /** @return string */
  public function getMetricType()
  {
    return $this->metricType;
  }
  /** @param bool */
  public function setOnlyFinalAttempt($onlyFinalAttempt)
  {
    $this->onlyFinalAttempt = $onlyFinalAttempt;
  }
  /** @return bool */
  public function getOnlyFinalAttempt()
  {
    return $this->onlyFinalAttempt;
  }
  /** @param string */
  public function setThresholdType($thresholdType)
  {
    $this->thresholdType = $thresholdType;
  }
  /** @return string */
  public function getThresholdType()
  {
    return $this->thresholdType;
  }
  /** @param GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue */
  public function setThresholdValue(GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue $thresholdValue)
  {
    $this->thresholdValue = $thresholdValue;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue */
  public function getThresholdValue()
  {
    return $this->thresholdValue;
  }
}

class GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue extends \Google\Model
{
  /** @var string */
  public $absolute;
  /** @var int */
  public $percentage;

  /** @param string */
  public function setAbsolute($absolute)
  {
    $this->absolute = $absolute;
  }
  /** @return string */
  public function getAbsolute()
  {
    return $this->absolute;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class GoogleCloudIntegrationsV1alphaIntegrationBundleConfig extends \Google\Collection
{
  /** @var string[] */
  public $integrations;
  /** @var string */
  public $serviceAccount;
  protected $collection_key = 'integrations';
  /** @param string[] */
  public function setIntegrations($integrations)
  {
    $this->integrations = $integrations;
  }
  /** @return string[] */
  public function getIntegrations()
  {
    return $this->integrations;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudIntegrationsV1alphaIntegrationParameter extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var GoogleCloudIntegrationsV1alphaValueType */
  public $defaultValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $inputOutputType;
  /** @var bool */
  public $isTransient;
  /** @var string */
  public $jsonSchema;
  /** @var string */
  public $key;
  /** @var string */
  public $producer;
  /** @var bool */
  public $searchable;
  protected $defaultValueType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $defaultValueDataType = '';
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
  /** @param GoogleCloudIntegrationsV1alphaValueType */
  public function setDefaultValue(GoogleCloudIntegrationsV1alphaValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  public function setInputOutputType($inputOutputType)
  {
    $this->inputOutputType = $inputOutputType;
  }
  /** @return string */
  public function getInputOutputType()
  {
    return $this->inputOutputType;
  }
  /** @param bool */
  public function setIsTransient($isTransient)
  {
    $this->isTransient = $isTransient;
  }
  /** @return bool */
  public function getIsTransient()
  {
    return $this->isTransient;
  }
  /** @param string */
  public function setJsonSchema($jsonSchema)
  {
    $this->jsonSchema = $jsonSchema;
  }
  /** @return string */
  public function getJsonSchema()
  {
    return $this->jsonSchema;
  }
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param string */
  public function setProducer($producer)
  {
    $this->producer = $producer;
  }
  /** @return string */
  public function getProducer()
  {
    return $this->producer;
  }
  /** @param bool */
  public function setSearchable($searchable)
  {
    $this->searchable = $searchable;
  }
  /** @return bool */
  public function getSearchable()
  {
    return $this->searchable;
  }
}

class GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $databasePersistencePolicy;
  /** @var string */
  public $description;
  /** @var string */
  public $lastModifierEmail;
  /** @var string */
  public $name;
  /** @var string */
  public $parentIntegrationVersionId;
  /** @var string */
  public $snapshotNumber;
  /** @var string */
  public $status;
  /** @var EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public $taskConfigs;
  /** @var EnterpriseCrmEventbusProtoTeardown */
  public $teardown;
  /** @var EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public $templateParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public $triggerConfigs;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userLabel;
  protected $collection_key = 'triggerConfigs';
  protected $taskConfigsType = EnterpriseCrmFrontendsEventbusProtoTaskConfig::class;
  protected $taskConfigsDataType = 'array';
  protected $teardownType = EnterpriseCrmEventbusProtoTeardown::class;
  protected $teardownDataType = '';
  protected $templateParametersType = EnterpriseCrmFrontendsEventbusProtoWorkflowParameters::class;
  protected $templateParametersDataType = '';
  protected $triggerConfigsType = EnterpriseCrmFrontendsEventbusProtoTriggerConfig::class;
  protected $triggerConfigsDataType = 'array';
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
  public function setDatabasePersistencePolicy($databasePersistencePolicy)
  {
    $this->databasePersistencePolicy = $databasePersistencePolicy;
  }
  /** @return string */
  public function getDatabasePersistencePolicy()
  {
    return $this->databasePersistencePolicy;
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
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  /** @return string */
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
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
  public function setParentIntegrationVersionId($parentIntegrationVersionId)
  {
    $this->parentIntegrationVersionId = $parentIntegrationVersionId;
  }
  /** @return string */
  public function getParentIntegrationVersionId()
  {
    return $this->parentIntegrationVersionId;
  }
  /** @param string */
  public function setSnapshotNumber($snapshotNumber)
  {
    $this->snapshotNumber = $snapshotNumber;
  }
  /** @return string */
  public function getSnapshotNumber()
  {
    return $this->snapshotNumber;
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
  /** @param EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public function setTaskConfigs($taskConfigs)
  {
    $this->taskConfigs = $taskConfigs;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public function getTaskConfigs()
  {
    return $this->taskConfigs;
  }
  /** @param EnterpriseCrmEventbusProtoTeardown */
  public function setTeardown(EnterpriseCrmEventbusProtoTeardown $teardown)
  {
    $this->teardown = $teardown;
  }
  /** @return EnterpriseCrmEventbusProtoTeardown */
  public function getTeardown()
  {
    return $this->teardown;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public function setTemplateParameters(EnterpriseCrmFrontendsEventbusProtoWorkflowParameters $templateParameters)
  {
    $this->templateParameters = $templateParameters;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public function getTemplateParameters()
  {
    return $this->templateParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public function setTriggerConfigs($triggerConfigs)
  {
    $this->triggerConfigs = $triggerConfigs;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public function getTriggerConfigs()
  {
    return $this->triggerConfigs;
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
  public function setUserLabel($userLabel)
  {
    $this->userLabel = $userLabel;
  }
  /** @return string */
  public function getUserLabel()
  {
    return $this->userLabel;
  }
}

class GoogleCloudIntegrationsV1alphaIntegrationVersion extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $databasePersistencePolicy;
  /** @var string */
  public $description;
  /** @var GoogleCloudIntegrationsV1alphaIntegrationParameter[] */
  public $integrationParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public $integrationParametersInternal;
  /** @var string */
  public $lastModifierEmail;
  /** @var string */
  public $lockHolder;
  /** @var string */
  public $name;
  /** @var string */
  public $origin;
  /** @var string */
  public $parentTemplateId;
  /** @var string */
  public $snapshotNumber;
  /** @var string */
  public $state;
  /** @var string */
  public $status;
  /** @var GoogleCloudIntegrationsV1alphaTaskConfig[] */
  public $taskConfigs;
  /** @var EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public $taskConfigsInternal;
  /** @var EnterpriseCrmEventbusProtoTeardown */
  public $teardown;
  /** @var GoogleCloudIntegrationsV1alphaTriggerConfig[] */
  public $triggerConfigs;
  /** @var EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public $triggerConfigsInternal;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userLabel;
  protected $collection_key = 'triggerConfigsInternal';
  protected $integrationParametersType = GoogleCloudIntegrationsV1alphaIntegrationParameter::class;
  protected $integrationParametersDataType = 'array';
  protected $integrationParametersInternalType = EnterpriseCrmFrontendsEventbusProtoWorkflowParameters::class;
  protected $integrationParametersInternalDataType = '';
  protected $taskConfigsType = GoogleCloudIntegrationsV1alphaTaskConfig::class;
  protected $taskConfigsDataType = 'array';
  protected $taskConfigsInternalType = EnterpriseCrmFrontendsEventbusProtoTaskConfig::class;
  protected $taskConfigsInternalDataType = 'array';
  protected $teardownType = EnterpriseCrmEventbusProtoTeardown::class;
  protected $teardownDataType = '';
  protected $triggerConfigsType = GoogleCloudIntegrationsV1alphaTriggerConfig::class;
  protected $triggerConfigsDataType = 'array';
  protected $triggerConfigsInternalType = EnterpriseCrmFrontendsEventbusProtoTriggerConfig::class;
  protected $triggerConfigsInternalDataType = 'array';
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
  public function setDatabasePersistencePolicy($databasePersistencePolicy)
  {
    $this->databasePersistencePolicy = $databasePersistencePolicy;
  }
  /** @return string */
  public function getDatabasePersistencePolicy()
  {
    return $this->databasePersistencePolicy;
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
  /** @param GoogleCloudIntegrationsV1alphaIntegrationParameter[] */
  public function setIntegrationParameters($integrationParameters)
  {
    $this->integrationParameters = $integrationParameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationParameter[] */
  public function getIntegrationParameters()
  {
    return $this->integrationParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public function setIntegrationParametersInternal(EnterpriseCrmFrontendsEventbusProtoWorkflowParameters $integrationParametersInternal)
  {
    $this->integrationParametersInternal = $integrationParametersInternal;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoWorkflowParameters */
  public function getIntegrationParametersInternal()
  {
    return $this->integrationParametersInternal;
  }
  /** @param string */
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  /** @return string */
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  /** @param string */
  public function setLockHolder($lockHolder)
  {
    $this->lockHolder = $lockHolder;
  }
  /** @return string */
  public function getLockHolder()
  {
    return $this->lockHolder;
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
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
  }
  /** @param string */
  public function setParentTemplateId($parentTemplateId)
  {
    $this->parentTemplateId = $parentTemplateId;
  }
  /** @return string */
  public function getParentTemplateId()
  {
    return $this->parentTemplateId;
  }
  /** @param string */
  public function setSnapshotNumber($snapshotNumber)
  {
    $this->snapshotNumber = $snapshotNumber;
  }
  /** @return string */
  public function getSnapshotNumber()
  {
    return $this->snapshotNumber;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GoogleCloudIntegrationsV1alphaTaskConfig[] */
  public function setTaskConfigs($taskConfigs)
  {
    $this->taskConfigs = $taskConfigs;
  }
  /** @return GoogleCloudIntegrationsV1alphaTaskConfig[] */
  public function getTaskConfigs()
  {
    return $this->taskConfigs;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public function setTaskConfigsInternal($taskConfigsInternal)
  {
    $this->taskConfigsInternal = $taskConfigsInternal;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTaskConfig[] */
  public function getTaskConfigsInternal()
  {
    return $this->taskConfigsInternal;
  }
  /** @param EnterpriseCrmEventbusProtoTeardown */
  public function setTeardown(EnterpriseCrmEventbusProtoTeardown $teardown)
  {
    $this->teardown = $teardown;
  }
  /** @return EnterpriseCrmEventbusProtoTeardown */
  public function getTeardown()
  {
    return $this->teardown;
  }
  /** @param GoogleCloudIntegrationsV1alphaTriggerConfig[] */
  public function setTriggerConfigs($triggerConfigs)
  {
    $this->triggerConfigs = $triggerConfigs;
  }
  /** @return GoogleCloudIntegrationsV1alphaTriggerConfig[] */
  public function getTriggerConfigs()
  {
    return $this->triggerConfigs;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public function setTriggerConfigsInternal($triggerConfigsInternal)
  {
    $this->triggerConfigsInternal = $triggerConfigsInternal;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTriggerConfig[] */
  public function getTriggerConfigsInternal()
  {
    return $this->triggerConfigsInternal;
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
  public function setUserLabel($userLabel)
  {
    $this->userLabel = $userLabel;
  }
  /** @return string */
  public function getUserLabel()
  {
    return $this->userLabel;
  }
}

class GoogleCloudIntegrationsV1alphaJwt extends \Google\Model
{
  /** @var string */
  public $jwt;
  /** @var string */
  public $jwtHeader;
  /** @var string */
  public $jwtPayload;
  /** @var string */
  public $secret;

  /** @param string */
  public function setJwt($jwt)
  {
    $this->jwt = $jwt;
  }
  /** @return string */
  public function getJwt()
  {
    return $this->jwt;
  }
  /** @param string */
  public function setJwtHeader($jwtHeader)
  {
    $this->jwtHeader = $jwtHeader;
  }
  /** @return string */
  public function getJwtHeader()
  {
    return $this->jwtHeader;
  }
  /** @param string */
  public function setJwtPayload($jwtPayload)
  {
    $this->jwtPayload = $jwtPayload;
  }
  /** @return string */
  public function getJwtPayload()
  {
    return $this->jwtPayload;
  }
  /** @param string */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
  }
}

class GoogleCloudIntegrationsV1alphaLiftSuspensionRequest extends \Google\Model
{
  /** @var string */
  public $suspensionResult;

  /** @param string */
  public function setSuspensionResult($suspensionResult)
  {
    $this->suspensionResult = $suspensionResult;
  }
  /** @return string */
  public function getSuspensionResult()
  {
    return $this->suspensionResult;
  }
}

class GoogleCloudIntegrationsV1alphaLiftSuspensionResponse extends \Google\Model
{
  /** @var string */
  public $eventExecutionInfoId;

  /** @param string */
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
}

class GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectRequest extends \Google\Model
{
  /** @var string */
  public $scriptId;

  /** @param string */
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
  }
}

class GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectResponse extends \Google\Model
{
  /** @var string */
  public $scriptId;

  /** @param string */
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
  }
}

class GoogleCloudIntegrationsV1alphaListAuthConfigsResponse extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaAuthConfig[] */
  public $authConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'authConfigs';
  protected $authConfigsType = GoogleCloudIntegrationsV1alphaAuthConfig::class;
  protected $authConfigsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaAuthConfig[] */
  public function setAuthConfigs($authConfigs)
  {
    $this->authConfigs = $authConfigs;
  }
  /** @return GoogleCloudIntegrationsV1alphaAuthConfig[] */
  public function getAuthConfigs()
  {
    return $this->authConfigs;
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

class GoogleCloudIntegrationsV1alphaListCertificatesResponse extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaCertificate[] */
  public $certificates;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'certificates';
  protected $certificatesType = GoogleCloudIntegrationsV1alphaCertificate::class;
  protected $certificatesDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaCertificate[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return GoogleCloudIntegrationsV1alphaCertificate[] */
  public function getCertificates()
  {
    return $this->certificates;
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

class GoogleCloudIntegrationsV1alphaListConnectionsResponse extends \Google\Collection
{
  /** @var GoogleCloudConnectorsV1Connection[] */
  public $connections;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'connections';
  protected $connectionsType = GoogleCloudConnectorsV1Connection::class;
  protected $connectionsDataType = 'array';
  /** @param GoogleCloudConnectorsV1Connection[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return GoogleCloudConnectorsV1Connection[] */
  public function getConnections()
  {
    return $this->connections;
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

class GoogleCloudIntegrationsV1alphaListExecutionSnapshotsResponse extends \Google\Collection
{
  /** @var EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public $executionSnapshots;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'executionSnapshots';
  protected $executionSnapshotsType = EnterpriseCrmEventbusProtoEventExecutionSnapshot::class;
  protected $executionSnapshotsDataType = 'array';
  /** @param EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public function setExecutionSnapshots($executionSnapshots)
  {
    $this->executionSnapshots = $executionSnapshots;
  }
  /** @return EnterpriseCrmEventbusProtoEventExecutionSnapshot[] */
  public function getExecutionSnapshots()
  {
    return $this->executionSnapshots;
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

class GoogleCloudIntegrationsV1alphaListExecutionsResponse extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo[] */
  public $executionInfos;
  /** @var GoogleCloudIntegrationsV1alphaExecution[] */
  public $executions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'executions';
  protected $executionInfosType = EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo::class;
  protected $executionInfosDataType = 'array';
  protected $executionsType = GoogleCloudIntegrationsV1alphaExecution::class;
  protected $executionsDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo[] */
  public function setExecutionInfos($executionInfos)
  {
    $this->executionInfos = $executionInfos;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo[] */
  public function getExecutionInfos()
  {
    return $this->executionInfos;
  }
  /** @param GoogleCloudIntegrationsV1alphaExecution[] */
  public function setExecutions($executions)
  {
    $this->executions = $executions;
  }
  /** @return GoogleCloudIntegrationsV1alphaExecution[] */
  public function getExecutions()
  {
    return $this->executions;
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

class GoogleCloudIntegrationsV1alphaListIntegrationTemplateVersionsResponse extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion[] */
  public $integrationTemplateVersions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'integrationTemplateVersions';
  protected $integrationTemplateVersionsType = GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion::class;
  protected $integrationTemplateVersionsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion[] */
  public function setIntegrationTemplateVersions($integrationTemplateVersions)
  {
    $this->integrationTemplateVersions = $integrationTemplateVersions;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion[] */
  public function getIntegrationTemplateVersions()
  {
    return $this->integrationTemplateVersions;
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

class GoogleCloudIntegrationsV1alphaListIntegrationVersionsResponse extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationVersion[] */
  public $integrationVersions;
  /** @var string */
  public $nextPageToken;
  /** @var bool */
  public $noPermission;
  protected $collection_key = 'integrationVersions';
  protected $integrationVersionsType = GoogleCloudIntegrationsV1alphaIntegrationVersion::class;
  protected $integrationVersionsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationVersion[] */
  public function setIntegrationVersions($integrationVersions)
  {
    $this->integrationVersions = $integrationVersions;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationVersion[] */
  public function getIntegrationVersions()
  {
    return $this->integrationVersions;
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
  /** @param bool */
  public function setNoPermission($noPermission)
  {
    $this->noPermission = $noPermission;
  }
  /** @return bool */
  public function getNoPermission()
  {
    return $this->noPermission;
  }
}

class GoogleCloudIntegrationsV1alphaListIntegrationsResponse extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaIntegration[] */
  public $integrations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'integrations';
  protected $integrationsType = GoogleCloudIntegrationsV1alphaIntegration::class;
  protected $integrationsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaIntegration[] */
  public function setIntegrations($integrations)
  {
    $this->integrations = $integrations;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegration[] */
  public function getIntegrations()
  {
    return $this->integrations;
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

class GoogleCloudIntegrationsV1alphaListRuntimeActionSchemasResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudIntegrationsV1alphaRuntimeActionSchema[] */
  public $runtimeActionSchemas;
  protected $collection_key = 'runtimeActionSchemas';
  protected $runtimeActionSchemasType = GoogleCloudIntegrationsV1alphaRuntimeActionSchema::class;
  protected $runtimeActionSchemasDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaRuntimeActionSchema[] */
  public function setRuntimeActionSchemas($runtimeActionSchemas)
  {
    $this->runtimeActionSchemas = $runtimeActionSchemas;
  }
  /** @return GoogleCloudIntegrationsV1alphaRuntimeActionSchema[] */
  public function getRuntimeActionSchemas()
  {
    return $this->runtimeActionSchemas;
  }
}

class GoogleCloudIntegrationsV1alphaListRuntimeEntitySchemasResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudIntegrationsV1alphaRuntimeEntitySchema[] */
  public $runtimeEntitySchemas;
  protected $collection_key = 'runtimeEntitySchemas';
  protected $runtimeEntitySchemasType = GoogleCloudIntegrationsV1alphaRuntimeEntitySchema::class;
  protected $runtimeEntitySchemasDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaRuntimeEntitySchema[] */
  public function setRuntimeEntitySchemas($runtimeEntitySchemas)
  {
    $this->runtimeEntitySchemas = $runtimeEntitySchemas;
  }
  /** @return GoogleCloudIntegrationsV1alphaRuntimeEntitySchema[] */
  public function getRuntimeEntitySchemas()
  {
    return $this->runtimeEntitySchemas;
  }
}

class GoogleCloudIntegrationsV1alphaListSfdcChannelsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudIntegrationsV1alphaSfdcChannel[] */
  public $sfdcChannels;
  protected $collection_key = 'sfdcChannels';
  protected $sfdcChannelsType = GoogleCloudIntegrationsV1alphaSfdcChannel::class;
  protected $sfdcChannelsDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaSfdcChannel[] */
  public function setSfdcChannels($sfdcChannels)
  {
    $this->sfdcChannels = $sfdcChannels;
  }
  /** @return GoogleCloudIntegrationsV1alphaSfdcChannel[] */
  public function getSfdcChannels()
  {
    return $this->sfdcChannels;
  }
}

class GoogleCloudIntegrationsV1alphaListSfdcInstancesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudIntegrationsV1alphaSfdcInstance[] */
  public $sfdcInstances;
  protected $collection_key = 'sfdcInstances';
  protected $sfdcInstancesType = GoogleCloudIntegrationsV1alphaSfdcInstance::class;
  protected $sfdcInstancesDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaSfdcInstance[] */
  public function setSfdcInstances($sfdcInstances)
  {
    $this->sfdcInstances = $sfdcInstances;
  }
  /** @return GoogleCloudIntegrationsV1alphaSfdcInstance[] */
  public function getSfdcInstances()
  {
    return $this->sfdcInstances;
  }
}

class GoogleCloudIntegrationsV1alphaListSuspensionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudIntegrationsV1alphaSuspension[] */
  public $suspensions;
  protected $collection_key = 'suspensions';
  protected $suspensionsType = GoogleCloudIntegrationsV1alphaSuspension::class;
  protected $suspensionsDataType = 'array';
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
  /** @param GoogleCloudIntegrationsV1alphaSuspension[] */
  public function setSuspensions($suspensions)
  {
    $this->suspensions = $suspensions;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuspension[] */
  public function getSuspensions()
  {
    return $this->suspensions;
  }
}

class GoogleCloudIntegrationsV1alphaListTaskEntitiesResponse extends \Google\Collection
{
  /** @var EnterpriseCrmFrontendsEventbusProtoTaskEntity[] */
  public $taskEntities;
  protected $collection_key = 'taskEntities';
  protected $taskEntitiesType = EnterpriseCrmFrontendsEventbusProtoTaskEntity::class;
  protected $taskEntitiesDataType = 'array';
  /** @param EnterpriseCrmFrontendsEventbusProtoTaskEntity[] */
  public function setTaskEntities($taskEntities)
  {
    $this->taskEntities = $taskEntities;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoTaskEntity[] */
  public function getTaskEntities()
  {
    return $this->taskEntities;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequest extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery */
  public $mashQuery;
  /** @var bool */
  public $metricFieldTable;
  /** @var string */
  public $outputPeriod;
  /** @var string */
  public $responseTemplate;
  protected $mashQueryType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery::class;
  protected $mashQueryDataType = '';
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery */
  public function setMashQuery(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery $mashQuery)
  {
    $this->mashQuery = $mashQuery;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery */
  public function getMashQuery()
  {
    return $this->mashQuery;
  }
  /** @param bool */
  public function setMetricFieldTable($metricFieldTable)
  {
    $this->metricFieldTable = $metricFieldTable;
  }
  /** @return bool */
  public function getMetricFieldTable()
  {
    return $this->metricFieldTable;
  }
  /** @param string */
  public function setOutputPeriod($outputPeriod)
  {
    $this->outputPeriod = $outputPeriod;
  }
  /** @return string */
  public function getOutputPeriod()
  {
    return $this->outputPeriod;
  }
  /** @param string */
  public function setResponseTemplate($responseTemplate)
  {
    $this->responseTemplate = $responseTemplate;
  }
  /** @return string */
  public function getResponseTemplate()
  {
    return $this->responseTemplate;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy extends \Google\Collection
{
  /** @var string[] */
  public $fields;
  /** @var string */
  public $reducer;
  protected $collection_key = 'fields';
  /** @param string[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setReducer($reducer)
  {
    $this->reducer = $reducer;
  }
  /** @return string */
  public function getReducer()
  {
    return $this->reducer;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public $firstQuery;
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode */
  public $operationMode;
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public $secondQuery;
  protected $firstQueryType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent::class;
  protected $firstQueryDataType = '';
  protected $operationModeType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode::class;
  protected $operationModeDataType = '';
  protected $secondQueryType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent::class;
  protected $secondQueryDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public function setFirstQuery(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent $firstQuery)
  {
    $this->firstQuery = $firstQuery;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public function getFirstQuery()
  {
    return $this->firstQuery;
  }
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode */
  public function setOperationMode(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode $operationMode)
  {
    $this->operationMode = $operationMode;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode */
  public function getOperationMode()
  {
    return $this->operationMode;
  }
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public function setSecondQuery(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent $secondQuery)
  {
    $this->secondQuery = $secondQuery;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent */
  public function getSecondQuery()
  {
    return $this->secondQuery;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent extends \Google\Collection
{
  /** @var string */
  public $borgTaskMetric;
  /** @var string[] */
  public $dataFilters;
  /** @var string[] */
  public $fetchFilters;
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy */
  public $groupBy;
  /** @var string */
  public $pointOperation;
  /** @var string */
  public $timeDelta;
  protected $collection_key = 'fetchFilters';
  protected $groupByType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy::class;
  protected $groupByDataType = '';
  /** @param string */
  public function setBorgTaskMetric($borgTaskMetric)
  {
    $this->borgTaskMetric = $borgTaskMetric;
  }
  /** @return string */
  public function getBorgTaskMetric()
  {
    return $this->borgTaskMetric;
  }
  /** @param string[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return string[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param string[] */
  public function setFetchFilters($fetchFilters)
  {
    $this->fetchFilters = $fetchFilters;
  }
  /** @return string[] */
  public function getFetchFilters()
  {
    return $this->fetchFilters;
  }
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy */
  public function setGroupBy(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy $groupBy)
  {
    $this->groupBy = $groupBy;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy */
  public function getGroupBy()
  {
    return $this->groupBy;
  }
  /** @param string */
  public function setPointOperation($pointOperation)
  {
    $this->pointOperation = $pointOperation;
  }
  /** @return string */
  public function getPointOperation()
  {
    return $this->pointOperation;
  }
  /** @param string */
  public function setTimeDelta($timeDelta)
  {
    $this->timeDelta = $timeDelta;
  }
  /** @return string */
  public function getTimeDelta()
  {
    return $this->timeDelta;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig */
  public $joinConfig;
  /** @var string */
  public $operationType;
  /** @var GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig */
  public $unionConfig;
  protected $joinConfigType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig::class;
  protected $joinConfigDataType = '';
  protected $unionConfigType = GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig::class;
  protected $unionConfigDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig */
  public function setJoinConfig(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig $joinConfig)
  {
    $this->joinConfig = $joinConfig;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig */
  public function getJoinConfig()
  {
    return $this->joinConfig;
  }
  /** @param string */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig */
  public function setUnionConfig(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig $unionConfig)
  {
    $this->unionConfig = $unionConfig;
  }
  /** @return GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig */
  public function getUnionConfig()
  {
    return $this->unionConfig;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig extends \Google\Model
{
  /** @var string */
  public $reducer;

  /** @param string */
  public function setReducer($reducer)
  {
    $this->reducer = $reducer;
  }
  /** @return string */
  public function getReducer()
  {
    return $this->reducer;
  }
}

class GoogleCloudIntegrationsV1alphaMonitorExecutionStatsResponse extends \Google\Model
{
  /** @var EnterpriseCrmCardsTemplatesAplosSeriesListData */
  public $aplosSeriesListData;
  /** @var EnterpriseCrmCardsTabularData */
  public $tableData;
  protected $aplosSeriesListDataType = EnterpriseCrmCardsTemplatesAplosSeriesListData::class;
  protected $aplosSeriesListDataDataType = '';
  protected $tableDataType = EnterpriseCrmCardsTabularData::class;
  protected $tableDataDataType = '';
  /** @param EnterpriseCrmCardsTemplatesAplosSeriesListData */
  public function setAplosSeriesListData(EnterpriseCrmCardsTemplatesAplosSeriesListData $aplosSeriesListData)
  {
    $this->aplosSeriesListData = $aplosSeriesListData;
  }
  /** @return EnterpriseCrmCardsTemplatesAplosSeriesListData */
  public function getAplosSeriesListData()
  {
    return $this->aplosSeriesListData;
  }
  /** @param EnterpriseCrmCardsTabularData */
  public function setTableData(EnterpriseCrmCardsTabularData $tableData)
  {
    $this->tableData = $tableData;
  }
  /** @return EnterpriseCrmCardsTabularData */
  public function getTableData()
  {
    return $this->tableData;
  }
}

class GoogleCloudIntegrationsV1alphaNextTask extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $taskConfigId;
  /** @var string */
  public $taskId;

  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  public function setTaskConfigId($taskConfigId)
  {
    $this->taskConfigId = $taskConfigId;
  }
  /** @return string */
  public function getTaskConfigId()
  {
    return $this->taskConfigId;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

class GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaAccessToken */
  public $accessToken;
  /** @var bool */
  public $applyReauthPolicy;
  /** @var string */
  public $authCode;
  /** @var string */
  public $authEndpoint;
  /** @var GoogleCloudIntegrationsV1alphaParameterMap */
  public $authParams;
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientSecret;
  /** @var string */
  public $requestType;
  /** @var string */
  public $scope;
  /** @var string */
  public $tokenEndpoint;
  /** @var GoogleCloudIntegrationsV1alphaParameterMap */
  public $tokenParams;
  protected $accessTokenType = GoogleCloudIntegrationsV1alphaAccessToken::class;
  protected $accessTokenDataType = '';
  protected $authParamsType = GoogleCloudIntegrationsV1alphaParameterMap::class;
  protected $authParamsDataType = '';
  protected $tokenParamsType = GoogleCloudIntegrationsV1alphaParameterMap::class;
  protected $tokenParamsDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaAccessToken */
  public function setAccessToken(GoogleCloudIntegrationsV1alphaAccessToken $accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return GoogleCloudIntegrationsV1alphaAccessToken */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param bool */
  public function setApplyReauthPolicy($applyReauthPolicy)
  {
    $this->applyReauthPolicy = $applyReauthPolicy;
  }
  /** @return bool */
  public function getApplyReauthPolicy()
  {
    return $this->applyReauthPolicy;
  }
  /** @param string */
  public function setAuthCode($authCode)
  {
    $this->authCode = $authCode;
  }
  /** @return string */
  public function getAuthCode()
  {
    return $this->authCode;
  }
  /** @param string */
  public function setAuthEndpoint($authEndpoint)
  {
    $this->authEndpoint = $authEndpoint;
  }
  /** @return string */
  public function getAuthEndpoint()
  {
    return $this->authEndpoint;
  }
  /** @param GoogleCloudIntegrationsV1alphaParameterMap */
  public function setAuthParams(GoogleCloudIntegrationsV1alphaParameterMap $authParams)
  {
    $this->authParams = $authParams;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMap */
  public function getAuthParams()
  {
    return $this->authParams;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return string */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /** @param string */
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  /** @return string */
  public function getRequestType()
  {
    return $this->requestType;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setTokenEndpoint($tokenEndpoint)
  {
    $this->tokenEndpoint = $tokenEndpoint;
  }
  /** @return string */
  public function getTokenEndpoint()
  {
    return $this->tokenEndpoint;
  }
  /** @param GoogleCloudIntegrationsV1alphaParameterMap */
  public function setTokenParams(GoogleCloudIntegrationsV1alphaParameterMap $tokenParams)
  {
    $this->tokenParams = $tokenParams;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMap */
  public function getTokenParams()
  {
    return $this->tokenParams;
  }
}

class GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaAccessToken */
  public $accessToken;
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientSecret;
  /** @var string */
  public $requestType;
  /** @var string */
  public $scope;
  /** @var string */
  public $tokenEndpoint;
  /** @var GoogleCloudIntegrationsV1alphaParameterMap */
  public $tokenParams;
  protected $accessTokenType = GoogleCloudIntegrationsV1alphaAccessToken::class;
  protected $accessTokenDataType = '';
  protected $tokenParamsType = GoogleCloudIntegrationsV1alphaParameterMap::class;
  protected $tokenParamsDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaAccessToken */
  public function setAccessToken(GoogleCloudIntegrationsV1alphaAccessToken $accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return GoogleCloudIntegrationsV1alphaAccessToken */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return string */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /** @param string */
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  /** @return string */
  public function getRequestType()
  {
    return $this->requestType;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setTokenEndpoint($tokenEndpoint)
  {
    $this->tokenEndpoint = $tokenEndpoint;
  }
  /** @return string */
  public function getTokenEndpoint()
  {
    return $this->tokenEndpoint;
  }
  /** @param GoogleCloudIntegrationsV1alphaParameterMap */
  public function setTokenParams(GoogleCloudIntegrationsV1alphaParameterMap $tokenParams)
  {
    $this->tokenParams = $tokenParams;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMap */
  public function getTokenParams()
  {
    return $this->tokenParams;
  }
}

class GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaAccessToken */
  public $accessToken;
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientSecret;
  /** @var string */
  public $password;
  /** @var string */
  public $requestType;
  /** @var string */
  public $scope;
  /** @var string */
  public $tokenEndpoint;
  /** @var GoogleCloudIntegrationsV1alphaParameterMap */
  public $tokenParams;
  /** @var string */
  public $username;
  protected $accessTokenType = GoogleCloudIntegrationsV1alphaAccessToken::class;
  protected $accessTokenDataType = '';
  protected $tokenParamsType = GoogleCloudIntegrationsV1alphaParameterMap::class;
  protected $tokenParamsDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaAccessToken */
  public function setAccessToken(GoogleCloudIntegrationsV1alphaAccessToken $accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return GoogleCloudIntegrationsV1alphaAccessToken */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return string */
  public function getClientSecret()
  {
    return $this->clientSecret;
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
  /** @param string */
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  /** @return string */
  public function getRequestType()
  {
    return $this->requestType;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setTokenEndpoint($tokenEndpoint)
  {
    $this->tokenEndpoint = $tokenEndpoint;
  }
  /** @return string */
  public function getTokenEndpoint()
  {
    return $this->tokenEndpoint;
  }
  /** @param GoogleCloudIntegrationsV1alphaParameterMap */
  public function setTokenParams(GoogleCloudIntegrationsV1alphaParameterMap $tokenParams)
  {
    $this->tokenParams = $tokenParams;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMap */
  public function getTokenParams()
  {
    return $this->tokenParams;
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

class GoogleCloudIntegrationsV1alphaOidcToken extends \Google\Model
{
  /** @var string */
  public $audience;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $token;
  /** @var string */
  public $tokenExpireTime;

  /** @param string */
  public function setAudience($audience)
  {
    $this->audience = $audience;
  }
  /** @return string */
  public function getAudience()
  {
    return $this->audience;
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
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
  /** @param string */
  public function setTokenExpireTime($tokenExpireTime)
  {
    $this->tokenExpireTime = $tokenExpireTime;
  }
  /** @return string */
  public function getTokenExpireTime()
  {
    return $this->tokenExpireTime;
  }
}

class GoogleCloudIntegrationsV1alphaParameterMap extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaParameterMapEntry[] */
  public $entries;
  /** @var string */
  public $keyType;
  /** @var string */
  public $valueType;
  protected $collection_key = 'entries';
  protected $entriesType = GoogleCloudIntegrationsV1alphaParameterMapEntry::class;
  protected $entriesDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaParameterMapEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMapEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
  /** @param string */
  public function setKeyType($keyType)
  {
    $this->keyType = $keyType;
  }
  /** @return string */
  public function getKeyType()
  {
    return $this->keyType;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class GoogleCloudIntegrationsV1alphaParameterMapEntry extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaParameterMapField */
  public $key;
  /** @var GoogleCloudIntegrationsV1alphaParameterMapField */
  public $value;
  protected $keyType = GoogleCloudIntegrationsV1alphaParameterMapField::class;
  protected $keyDataType = '';
  protected $valueType = GoogleCloudIntegrationsV1alphaParameterMapField::class;
  protected $valueDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaParameterMapField */
  public function setKey(GoogleCloudIntegrationsV1alphaParameterMapField $key)
  {
    $this->key = $key;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMapField */
  public function getKey()
  {
    return $this->key;
  }
  /** @param GoogleCloudIntegrationsV1alphaParameterMapField */
  public function setValue(GoogleCloudIntegrationsV1alphaParameterMapField $value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudIntegrationsV1alphaParameterMapField */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudIntegrationsV1alphaParameterMapField extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaValueType */
  public $literalValue;
  /** @var string */
  public $referenceKey;
  protected $literalValueType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $literalValueDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaValueType */
  public function setLiteralValue(GoogleCloudIntegrationsV1alphaValueType $literalValue)
  {
    $this->literalValue = $literalValue;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType */
  public function getLiteralValue()
  {
    return $this->literalValue;
  }
  /** @param string */
  public function setReferenceKey($referenceKey)
  {
    $this->referenceKey = $referenceKey;
  }
  /** @return string */
  public function getReferenceKey()
  {
    return $this->referenceKey;
  }
}

class GoogleCloudIntegrationsV1alphaPublishIntegrationVersionRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaPublishIntegrationVersionResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaResolveSuspensionRequest extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaSuspension */
  public $suspension;
  protected $suspensionType = GoogleCloudIntegrationsV1alphaSuspension::class;
  protected $suspensionDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaSuspension */
  public function setSuspension(GoogleCloudIntegrationsV1alphaSuspension $suspension)
  {
    $this->suspension = $suspension;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuspension */
  public function getSuspension()
  {
    return $this->suspension;
  }
}

class GoogleCloudIntegrationsV1alphaResolveSuspensionResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaRuntimeActionSchema extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $inputSchema;
  /** @var string */
  public $outputSchema;

  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setInputSchema($inputSchema)
  {
    $this->inputSchema = $inputSchema;
  }
  /** @return string */
  public function getInputSchema()
  {
    return $this->inputSchema;
  }
  /** @param string */
  public function setOutputSchema($outputSchema)
  {
    $this->outputSchema = $outputSchema;
  }
  /** @return string */
  public function getOutputSchema()
  {
    return $this->outputSchema;
  }
}

class GoogleCloudIntegrationsV1alphaRuntimeEntitySchema extends \Google\Model
{
  /** @var string */
  public $arrayFieldSchema;
  /** @var string */
  public $entity;
  /** @var string */
  public $fieldSchema;

  /** @param string */
  public function setArrayFieldSchema($arrayFieldSchema)
  {
    $this->arrayFieldSchema = $arrayFieldSchema;
  }
  /** @return string */
  public function getArrayFieldSchema()
  {
    return $this->arrayFieldSchema;
  }
  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setFieldSchema($fieldSchema)
  {
    $this->fieldSchema = $fieldSchema;
  }
  /** @return string */
  public function getFieldSchema()
  {
    return $this->fieldSchema;
  }
}

class GoogleCloudIntegrationsV1alphaScheduleIntegrationsRequest extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaValueType[] */
  public $inputParameters;
  /** @var EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public $parameterEntries;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $parameters;
  /** @var string */
  public $requestId;
  /** @var string */
  public $scheduleTime;
  /** @var string */
  public $triggerId;
  protected $collection_key = 'parameterEntries';
  protected $inputParametersType = GoogleCloudIntegrationsV1alphaValueType::class;
  protected $inputParametersDataType = 'map';
  protected $parameterEntriesType = EnterpriseCrmFrontendsEventbusProtoParameterEntry::class;
  protected $parameterEntriesDataType = 'array';
  protected $parametersType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaValueType[] */
  public function setInputParameters($inputParameters)
  {
    $this->inputParameters = $inputParameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaValueType[] */
  public function getInputParameters()
  {
    return $this->inputParameters;
  }
  /** @param EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function setParameterEntries($parameterEntries)
  {
    $this->parameterEntries = $parameterEntries;
  }
  /** @return EnterpriseCrmFrontendsEventbusProtoParameterEntry[] */
  public function getParameterEntries()
  {
    return $this->parameterEntries;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setScheduleTime($scheduleTime)
  {
    $this->scheduleTime = $scheduleTime;
  }
  /** @return string */
  public function getScheduleTime()
  {
    return $this->scheduleTime;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
}

class GoogleCloudIntegrationsV1alphaScheduleIntegrationsResponse extends \Google\Collection
{
  /** @var string[] */
  public $executionInfoIds;
  protected $collection_key = 'executionInfoIds';
  /** @param string[] */
  public function setExecutionInfoIds($executionInfoIds)
  {
    $this->executionInfoIds = $executionInfoIds;
  }
  /** @return string[] */
  public function getExecutionInfoIds()
  {
    return $this->executionInfoIds;
  }
}

class GoogleCloudIntegrationsV1alphaServiceAccountCredentials extends \Google\Model
{
  /** @var string */
  public $scope;
  /** @var string */
  public $serviceAccount;

  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudIntegrationsV1alphaSfdcChannel extends \Google\Model
{
  /** @var string */
  public $channelTopic;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isActive;
  /** @var string */
  public $lastReplayId;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setChannelTopic($channelTopic)
  {
    $this->channelTopic = $channelTopic;
  }
  /** @return string */
  public function getChannelTopic()
  {
    return $this->channelTopic;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  /** @param bool */
  public function setIsActive($isActive)
  {
    $this->isActive = $isActive;
  }
  /** @return bool */
  public function getIsActive()
  {
    return $this->isActive;
  }
  /** @param string */
  public function setLastReplayId($lastReplayId)
  {
    $this->lastReplayId = $lastReplayId;
  }
  /** @return string */
  public function getLastReplayId()
  {
    return $this->lastReplayId;
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

class GoogleCloudIntegrationsV1alphaSfdcInstance extends \Google\Collection
{
  /** @var string[] */
  public $authConfigId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAuthority;
  /** @var string */
  public $sfdcOrgId;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'authConfigId';
  /** @param string[] */
  public function setAuthConfigId($authConfigId)
  {
    $this->authConfigId = $authConfigId;
  }
  /** @return string[] */
  public function getAuthConfigId()
  {
    return $this->authConfigId;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setServiceAuthority($serviceAuthority)
  {
    $this->serviceAuthority = $serviceAuthority;
  }
  /** @return string */
  public function getServiceAuthority()
  {
    return $this->serviceAuthority;
  }
  /** @param string */
  public function setSfdcOrgId($sfdcOrgId)
  {
    $this->sfdcOrgId = $sfdcOrgId;
  }
  /** @return string */
  public function getSfdcOrgId()
  {
    return $this->sfdcOrgId;
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

class GoogleCloudIntegrationsV1alphaStringParameterArray extends \Google\Collection
{
  /** @var string[] */
  public $stringValues;
  protected $collection_key = 'stringValues';
  /** @param string[] */
  public function setStringValues($stringValues)
  {
    $this->stringValues = $stringValues;
  }
  /** @return string[] */
  public function getStringValues()
  {
    return $this->stringValues;
  }
}

class GoogleCloudIntegrationsV1alphaSuccessPolicy extends \Google\Model
{
  /** @var string */
  public $finalState;

  /** @param string */
  public function setFinalState($finalState)
  {
    $this->finalState = $finalState;
  }
  /** @return string */
  public function getFinalState()
  {
    return $this->finalState;
  }
}

class GoogleCloudIntegrationsV1alphaSuspension extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig */
  public $approvalConfig;
  /** @var GoogleCloudIntegrationsV1alphaSuspensionAudit */
  public $audit;
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventExecutionInfoId;
  /** @var string */
  public $integration;
  /** @var string */
  public $lastModifyTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var EnterpriseCrmEventbusProtoSuspensionConfig */
  public $suspensionConfig;
  /** @var string */
  public $taskId;
  protected $approvalConfigType = GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig::class;
  protected $approvalConfigDataType = '';
  protected $auditType = GoogleCloudIntegrationsV1alphaSuspensionAudit::class;
  protected $auditDataType = '';
  protected $suspensionConfigType = EnterpriseCrmEventbusProtoSuspensionConfig::class;
  protected $suspensionConfigDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig */
  public function setApprovalConfig(GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig $approvalConfig)
  {
    $this->approvalConfig = $approvalConfig;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig */
  public function getApprovalConfig()
  {
    return $this->approvalConfig;
  }
  /** @param GoogleCloudIntegrationsV1alphaSuspensionAudit */
  public function setAudit(GoogleCloudIntegrationsV1alphaSuspensionAudit $audit)
  {
    $this->audit = $audit;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuspensionAudit */
  public function getAudit()
  {
    return $this->audit;
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
  public function setEventExecutionInfoId($eventExecutionInfoId)
  {
    $this->eventExecutionInfoId = $eventExecutionInfoId;
  }
  /** @return string */
  public function getEventExecutionInfoId()
  {
    return $this->eventExecutionInfoId;
  }
  /** @param string */
  public function setIntegration($integration)
  {
    $this->integration = $integration;
  }
  /** @return string */
  public function getIntegration()
  {
    return $this->integration;
  }
  /** @param string */
  public function setLastModifyTime($lastModifyTime)
  {
    $this->lastModifyTime = $lastModifyTime;
  }
  /** @return string */
  public function getLastModifyTime()
  {
    return $this->lastModifyTime;
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
  /** @param EnterpriseCrmEventbusProtoSuspensionConfig */
  public function setSuspensionConfig(EnterpriseCrmEventbusProtoSuspensionConfig $suspensionConfig)
  {
    $this->suspensionConfig = $suspensionConfig;
  }
  /** @return EnterpriseCrmEventbusProtoSuspensionConfig */
  public function getSuspensionConfig()
  {
    return $this->suspensionConfig;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

class GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig extends \Google\Collection
{
  /** @var string */
  public $customMessage;
  /** @var string[] */
  public $emailAddresses;
  /** @var GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration */
  public $expiration;
  protected $collection_key = 'emailAddresses';
  protected $expirationType = GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration::class;
  protected $expirationDataType = '';
  /** @param string */
  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }
  /** @return string */
  public function getCustomMessage()
  {
    return $this->customMessage;
  }
  /** @param string[] */
  public function setEmailAddresses($emailAddresses)
  {
    $this->emailAddresses = $emailAddresses;
  }
  /** @return string[] */
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
  }
  /** @param GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration */
  public function setExpiration(GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration $expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration */
  public function getExpiration()
  {
    return $this->expiration;
  }
}

class GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration extends \Google\Model
{
  /** @var string */
  public $expireTime;
  /** @var bool */
  public $liftWhenExpired;
  /** @var string */
  public $remindTime;

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
  /** @param bool */
  public function setLiftWhenExpired($liftWhenExpired)
  {
    $this->liftWhenExpired = $liftWhenExpired;
  }
  /** @return bool */
  public function getLiftWhenExpired()
  {
    return $this->liftWhenExpired;
  }
  /** @param string */
  public function setRemindTime($remindTime)
  {
    $this->remindTime = $remindTime;
  }
  /** @return string */
  public function getRemindTime()
  {
    return $this->remindTime;
  }
}

class GoogleCloudIntegrationsV1alphaSuspensionAudit extends \Google\Model
{
  /** @var string */
  public $resolveTime;
  /** @var string */
  public $resolver;

  /** @param string */
  public function setResolveTime($resolveTime)
  {
    $this->resolveTime = $resolveTime;
  }
  /** @return string */
  public function getResolveTime()
  {
    return $this->resolveTime;
  }
  /** @param string */
  public function setResolver($resolver)
  {
    $this->resolver = $resolver;
  }
  /** @return string */
  public function getResolver()
  {
    return $this->resolver;
  }
}

class GoogleCloudIntegrationsV1alphaTakeoverEditLockRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaTakeoverEditLockResponse extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public $integrationVersion;
  protected $integrationVersionType = GoogleCloudIntegrationsV1alphaIntegrationVersion::class;
  protected $integrationVersionDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public function setIntegrationVersion(GoogleCloudIntegrationsV1alphaIntegrationVersion $integrationVersion)
  {
    $this->integrationVersion = $integrationVersion;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public function getIntegrationVersion()
  {
    return $this->integrationVersion;
  }
}

class GoogleCloudIntegrationsV1alphaTaskConfig extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudIntegrationsV1alphaFailurePolicy */
  public $failurePolicy;
  /** @var string */
  public $jsonValidationOption;
  /** @var GoogleCloudIntegrationsV1alphaNextTask[] */
  public $nextTasks;
  /** @var string */
  public $nextTasksExecutionPolicy;
  /** @var GoogleCloudIntegrationsV1alphaEventParameter[] */
  public $parameters;
  /** @var GoogleCloudIntegrationsV1alphaSuccessPolicy */
  public $successPolicy;
  /** @var GoogleCloudIntegrationsV1alphaFailurePolicy */
  public $synchronousCallFailurePolicy;
  /** @var string */
  public $task;
  /** @var string */
  public $taskExecutionStrategy;
  /** @var string */
  public $taskId;
  /** @var string */
  public $taskTemplate;
  protected $collection_key = 'nextTasks';
  protected $failurePolicyType = GoogleCloudIntegrationsV1alphaFailurePolicy::class;
  protected $failurePolicyDataType = '';
  protected $nextTasksType = GoogleCloudIntegrationsV1alphaNextTask::class;
  protected $nextTasksDataType = 'array';
  protected $parametersType = GoogleCloudIntegrationsV1alphaEventParameter::class;
  protected $parametersDataType = 'map';
  protected $successPolicyType = GoogleCloudIntegrationsV1alphaSuccessPolicy::class;
  protected $successPolicyDataType = '';
  protected $synchronousCallFailurePolicyType = GoogleCloudIntegrationsV1alphaFailurePolicy::class;
  protected $synchronousCallFailurePolicyDataType = '';
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
  /** @param GoogleCloudIntegrationsV1alphaFailurePolicy */
  public function setFailurePolicy(GoogleCloudIntegrationsV1alphaFailurePolicy $failurePolicy)
  {
    $this->failurePolicy = $failurePolicy;
  }
  /** @return GoogleCloudIntegrationsV1alphaFailurePolicy */
  public function getFailurePolicy()
  {
    return $this->failurePolicy;
  }
  /** @param string */
  public function setJsonValidationOption($jsonValidationOption)
  {
    $this->jsonValidationOption = $jsonValidationOption;
  }
  /** @return string */
  public function getJsonValidationOption()
  {
    return $this->jsonValidationOption;
  }
  /** @param GoogleCloudIntegrationsV1alphaNextTask[] */
  public function setNextTasks($nextTasks)
  {
    $this->nextTasks = $nextTasks;
  }
  /** @return GoogleCloudIntegrationsV1alphaNextTask[] */
  public function getNextTasks()
  {
    return $this->nextTasks;
  }
  /** @param string */
  public function setNextTasksExecutionPolicy($nextTasksExecutionPolicy)
  {
    $this->nextTasksExecutionPolicy = $nextTasksExecutionPolicy;
  }
  /** @return string */
  public function getNextTasksExecutionPolicy()
  {
    return $this->nextTasksExecutionPolicy;
  }
  /** @param GoogleCloudIntegrationsV1alphaEventParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudIntegrationsV1alphaEventParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param GoogleCloudIntegrationsV1alphaSuccessPolicy */
  public function setSuccessPolicy(GoogleCloudIntegrationsV1alphaSuccessPolicy $successPolicy)
  {
    $this->successPolicy = $successPolicy;
  }
  /** @return GoogleCloudIntegrationsV1alphaSuccessPolicy */
  public function getSuccessPolicy()
  {
    return $this->successPolicy;
  }
  /** @param GoogleCloudIntegrationsV1alphaFailurePolicy */
  public function setSynchronousCallFailurePolicy(GoogleCloudIntegrationsV1alphaFailurePolicy $synchronousCallFailurePolicy)
  {
    $this->synchronousCallFailurePolicy = $synchronousCallFailurePolicy;
  }
  /** @return GoogleCloudIntegrationsV1alphaFailurePolicy */
  public function getSynchronousCallFailurePolicy()
  {
    return $this->synchronousCallFailurePolicy;
  }
  /** @param string */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /** @return string */
  public function getTask()
  {
    return $this->task;
  }
  /** @param string */
  public function setTaskExecutionStrategy($taskExecutionStrategy)
  {
    $this->taskExecutionStrategy = $taskExecutionStrategy;
  }
  /** @return string */
  public function getTaskExecutionStrategy()
  {
    return $this->taskExecutionStrategy;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
  /** @param string */
  public function setTaskTemplate($taskTemplate)
  {
    $this->taskTemplate = $taskTemplate;
  }
  /** @return string */
  public function getTaskTemplate()
  {
    return $this->taskTemplate;
  }
}

class GoogleCloudIntegrationsV1alphaTaskExecutionDetails extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public $taskAttemptStats;
  /** @var string */
  public $taskExecutionState;
  /** @var string */
  public $taskNumber;
  protected $collection_key = 'taskAttemptStats';
  protected $taskAttemptStatsType = GoogleCloudIntegrationsV1alphaAttemptStats::class;
  protected $taskAttemptStatsDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public function setTaskAttemptStats($taskAttemptStats)
  {
    $this->taskAttemptStats = $taskAttemptStats;
  }
  /** @return GoogleCloudIntegrationsV1alphaAttemptStats[] */
  public function getTaskAttemptStats()
  {
    return $this->taskAttemptStats;
  }
  /** @param string */
  public function setTaskExecutionState($taskExecutionState)
  {
    $this->taskExecutionState = $taskExecutionState;
  }
  /** @return string */
  public function getTaskExecutionState()
  {
    return $this->taskExecutionState;
  }
  /** @param string */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /** @return string */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

class GoogleCloudIntegrationsV1alphaTriggerConfig extends \Google\Collection
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationAlertConfig[] */
  public $alertConfig;
  /** @var GoogleCloudIntegrationsV1alphaCloudSchedulerConfig */
  public $cloudSchedulerConfig;
  /** @var string */
  public $description;
  /** @var string */
  public $label;
  /** @var string */
  public $nextTasksExecutionPolicy;
  /** @var string[] */
  public $properties;
  /** @var GoogleCloudIntegrationsV1alphaNextTask[] */
  public $startTasks;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $triggerNumber;
  /** @var string */
  public $triggerType;
  protected $collection_key = 'startTasks';
  protected $alertConfigType = GoogleCloudIntegrationsV1alphaIntegrationAlertConfig::class;
  protected $alertConfigDataType = 'array';
  protected $cloudSchedulerConfigType = GoogleCloudIntegrationsV1alphaCloudSchedulerConfig::class;
  protected $cloudSchedulerConfigDataType = '';
  protected $startTasksType = GoogleCloudIntegrationsV1alphaNextTask::class;
  protected $startTasksDataType = 'array';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationAlertConfig[] */
  public function setAlertConfig($alertConfig)
  {
    $this->alertConfig = $alertConfig;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationAlertConfig[] */
  public function getAlertConfig()
  {
    return $this->alertConfig;
  }
  /** @param GoogleCloudIntegrationsV1alphaCloudSchedulerConfig */
  public function setCloudSchedulerConfig(GoogleCloudIntegrationsV1alphaCloudSchedulerConfig $cloudSchedulerConfig)
  {
    $this->cloudSchedulerConfig = $cloudSchedulerConfig;
  }
  /** @return GoogleCloudIntegrationsV1alphaCloudSchedulerConfig */
  public function getCloudSchedulerConfig()
  {
    return $this->cloudSchedulerConfig;
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
  public function setNextTasksExecutionPolicy($nextTasksExecutionPolicy)
  {
    $this->nextTasksExecutionPolicy = $nextTasksExecutionPolicy;
  }
  /** @return string */
  public function getNextTasksExecutionPolicy()
  {
    return $this->nextTasksExecutionPolicy;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param GoogleCloudIntegrationsV1alphaNextTask[] */
  public function setStartTasks($startTasks)
  {
    $this->startTasks = $startTasks;
  }
  /** @return GoogleCloudIntegrationsV1alphaNextTask[] */
  public function getStartTasks()
  {
    return $this->startTasks;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /** @param string */
  public function setTriggerNumber($triggerNumber)
  {
    $this->triggerNumber = $triggerNumber;
  }
  /** @return string */
  public function getTriggerNumber()
  {
    return $this->triggerNumber;
  }
  /** @param string */
  public function setTriggerType($triggerType)
  {
    $this->triggerType = $triggerType;
  }
  /** @return string */
  public function getTriggerType()
  {
    return $this->triggerType;
  }
}

class GoogleCloudIntegrationsV1alphaUpdateBundleRequest extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public $config;
  protected $configType = GoogleCloudIntegrationsV1alphaIntegrationBundleConfig::class;
  protected $configDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function setConfig(GoogleCloudIntegrationsV1alphaIntegrationBundleConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class GoogleCloudIntegrationsV1alphaUpdateBundleResponse extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public $config;
  protected $configType = GoogleCloudIntegrationsV1alphaIntegrationBundleConfig::class;
  protected $configDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function setConfig(GoogleCloudIntegrationsV1alphaIntegrationBundleConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationBundleConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class GoogleCloudIntegrationsV1alphaUploadIntegrationVersionRequest extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $fileFormat;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setFileFormat($fileFormat)
  {
    $this->fileFormat = $fileFormat;
  }
  /** @return string */
  public function getFileFormat()
  {
    return $this->fileFormat;
  }
}

class GoogleCloudIntegrationsV1alphaUploadIntegrationVersionResponse extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public $integrationVersion;
  protected $integrationVersionType = GoogleCloudIntegrationsV1alphaIntegrationVersion::class;
  protected $integrationVersionDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public function setIntegrationVersion(GoogleCloudIntegrationsV1alphaIntegrationVersion $integrationVersion)
  {
    $this->integrationVersion = $integrationVersion;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntegrationVersion */
  public function getIntegrationVersion()
  {
    return $this->integrationVersion;
  }
}

class GoogleCloudIntegrationsV1alphaUsernameAndPassword extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var string */
  public $username;

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

class GoogleCloudIntegrationsV1alphaValidateIntegrationVersionRequest extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaValidateIntegrationVersionResponse extends \Google\Model
{
}

class GoogleCloudIntegrationsV1alphaValueType extends \Google\Model
{
  /** @var GoogleCloudIntegrationsV1alphaBooleanParameterArray */
  public $booleanArray;
  /** @var bool */
  public $booleanValue;
  /** @var GoogleCloudIntegrationsV1alphaDoubleParameterArray */
  public $doubleArray;
  public $doubleValue;
  /** @var GoogleCloudIntegrationsV1alphaIntParameterArray */
  public $intArray;
  /** @var string */
  public $intValue;
  /** @var string */
  public $jsonValue;
  /** @var GoogleCloudIntegrationsV1alphaStringParameterArray */
  public $stringArray;
  /** @var string */
  public $stringValue;
  protected $booleanArrayType = GoogleCloudIntegrationsV1alphaBooleanParameterArray::class;
  protected $booleanArrayDataType = '';
  protected $doubleArrayType = GoogleCloudIntegrationsV1alphaDoubleParameterArray::class;
  protected $doubleArrayDataType = '';
  protected $intArrayType = GoogleCloudIntegrationsV1alphaIntParameterArray::class;
  protected $intArrayDataType = '';
  protected $stringArrayType = GoogleCloudIntegrationsV1alphaStringParameterArray::class;
  protected $stringArrayDataType = '';
  /** @param GoogleCloudIntegrationsV1alphaBooleanParameterArray */
  public function setBooleanArray(GoogleCloudIntegrationsV1alphaBooleanParameterArray $booleanArray)
  {
    $this->booleanArray = $booleanArray;
  }
  /** @return GoogleCloudIntegrationsV1alphaBooleanParameterArray */
  public function getBooleanArray()
  {
    return $this->booleanArray;
  }
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
  /** @param GoogleCloudIntegrationsV1alphaDoubleParameterArray */
  public function setDoubleArray(GoogleCloudIntegrationsV1alphaDoubleParameterArray $doubleArray)
  {
    $this->doubleArray = $doubleArray;
  }
  /** @return GoogleCloudIntegrationsV1alphaDoubleParameterArray */
  public function getDoubleArray()
  {
    return $this->doubleArray;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param GoogleCloudIntegrationsV1alphaIntParameterArray */
  public function setIntArray(GoogleCloudIntegrationsV1alphaIntParameterArray $intArray)
  {
    $this->intArray = $intArray;
  }
  /** @return GoogleCloudIntegrationsV1alphaIntParameterArray */
  public function getIntArray()
  {
    return $this->intArray;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param string */
  public function setJsonValue($jsonValue)
  {
    $this->jsonValue = $jsonValue;
  }
  /** @return string */
  public function getJsonValue()
  {
    return $this->jsonValue;
  }
  /** @param GoogleCloudIntegrationsV1alphaStringParameterArray */
  public function setStringArray(GoogleCloudIntegrationsV1alphaStringParameterArray $stringArray)
  {
    $this->stringArray = $stringArray;
  }
  /** @return GoogleCloudIntegrationsV1alphaStringParameterArray */
  public function getStringArray()
  {
    return $this->stringArray;
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

class GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var bool */
  public $ignoreErrorIfNoActiveWorkflow;
  /** @var EnterpriseCrmEventbusProtoEventParameters */
  public $parameters;
  /** @var string */
  public $priority;
  /** @var string */
  public $requestId;
  /** @var string */
  public $scheduledTime;
  /** @var bool */
  public $testMode;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $workflowName;
  protected $parametersType = EnterpriseCrmEventbusProtoEventParameters::class;
  protected $parametersDataType = '';
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param bool */
  public function setIgnoreErrorIfNoActiveWorkflow($ignoreErrorIfNoActiveWorkflow)
  {
    $this->ignoreErrorIfNoActiveWorkflow = $ignoreErrorIfNoActiveWorkflow;
  }
  /** @return bool */
  public function getIgnoreErrorIfNoActiveWorkflow()
  {
    return $this->ignoreErrorIfNoActiveWorkflow;
  }
  /** @param EnterpriseCrmEventbusProtoEventParameters */
  public function setParameters(EnterpriseCrmEventbusProtoEventParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return EnterpriseCrmEventbusProtoEventParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setScheduledTime($scheduledTime)
  {
    $this->scheduledTime = $scheduledTime;
  }
  /** @return string */
  public function getScheduledTime()
  {
    return $this->scheduledTime;
  }
  /** @param bool */
  public function setTestMode($testMode)
  {
    $this->testMode = $testMode;
  }
  /** @return bool */
  public function getTestMode()
  {
    return $this->testMode;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /** @param string */
  public function setWorkflowName($workflowName)
  {
    $this->workflowName = $workflowName;
  }
  /** @return string */
  public function getWorkflowName()
  {
    return $this->workflowName;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CrmlogErrorCode::class, 'Google_Service_Integrations_CrmlogErrorCode');
class_alias(EnterpriseCrmCardsCellValue::class, 'Google_Service_Integrations_EnterpriseCrmCardsCellValue');
class_alias(EnterpriseCrmCardsRow::class, 'Google_Service_Integrations_EnterpriseCrmCardsRow');
class_alias(EnterpriseCrmCardsTabularData::class, 'Google_Service_Integrations_EnterpriseCrmCardsTabularData');
class_alias(EnterpriseCrmCardsTemplatesAplosSeriesData::class, 'Google_Service_Integrations_EnterpriseCrmCardsTemplatesAplosSeriesData');
class_alias(EnterpriseCrmCardsTemplatesAplosSeriesDataRow::class, 'Google_Service_Integrations_EnterpriseCrmCardsTemplatesAplosSeriesDataRow');
class_alias(EnterpriseCrmCardsTemplatesAplosSeriesListData::class, 'Google_Service_Integrations_EnterpriseCrmCardsTemplatesAplosSeriesListData');
class_alias(EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries::class, 'Google_Service_Integrations_EnterpriseCrmCardsTemplatesAplosSeriesListDataSeries');
class_alias(EnterpriseCrmEventbusAuthconfigAuthConfigTaskParam::class, 'Google_Service_Integrations_EnterpriseCrmEventbusAuthconfigAuthConfigTaskParam');
class_alias(EnterpriseCrmEventbusProtoAddress::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoAddress');
class_alias(EnterpriseCrmEventbusProtoAttributes::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoAttributes');
class_alias(EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBaseAlertConfigErrorEnumList');
class_alias(EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBaseAlertConfigThresholdValue');
class_alias(EnterpriseCrmEventbusProtoBaseFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBaseFunction');
class_alias(EnterpriseCrmEventbusProtoBaseValue::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBaseValue');
class_alias(EnterpriseCrmEventbusProtoBooleanArrayFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBooleanArrayFunction');
class_alias(EnterpriseCrmEventbusProtoBooleanFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBooleanFunction');
class_alias(EnterpriseCrmEventbusProtoBooleanParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBooleanParameterArray');
class_alias(EnterpriseCrmEventbusProtoBuganizerNotification::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoBuganizerNotification');
class_alias(EnterpriseCrmEventbusProtoCloudSchedulerConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoCloudSchedulerConfig');
class_alias(EnterpriseCrmEventbusProtoCombinedCondition::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoCombinedCondition');
class_alias(EnterpriseCrmEventbusProtoCondition::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoCondition');
class_alias(EnterpriseCrmEventbusProtoConditionResult::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoConditionResult');
class_alias(EnterpriseCrmEventbusProtoConnectorsConnection::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoConnectorsConnection');
class_alias(EnterpriseCrmEventbusProtoConnectorsGenericConnectorTaskConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoConnectorsGenericConnectorTaskConfig');
class_alias(EnterpriseCrmEventbusProtoCoordinate::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoCoordinate');
class_alias(EnterpriseCrmEventbusProtoCustomSuspensionRequest::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoCustomSuspensionRequest');
class_alias(EnterpriseCrmEventbusProtoDoubleArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoDoubleArray');
class_alias(EnterpriseCrmEventbusProtoDoubleArrayFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoDoubleArrayFunction');
class_alias(EnterpriseCrmEventbusProtoDoubleFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoDoubleFunction');
class_alias(EnterpriseCrmEventbusProtoDoubleParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoDoubleParameterArray');
class_alias(EnterpriseCrmEventbusProtoErrorDetail::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoErrorDetail');
class_alias(EnterpriseCrmEventbusProtoEventBusProperties::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventBusProperties');
class_alias(EnterpriseCrmEventbusProtoEventExecutionDetails::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventExecutionDetails');
class_alias(EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventExecutionDetailsEventAttemptStats');
class_alias(EnterpriseCrmEventbusProtoEventExecutionSnapshot::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventExecutionSnapshot');
class_alias(EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventExecutionSnapshotEventExecutionSnapshotMetadata');
class_alias(EnterpriseCrmEventbusProtoEventParameters::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoEventParameters');
class_alias(EnterpriseCrmEventbusProtoExecutionTraceInfo::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoExecutionTraceInfo');
class_alias(EnterpriseCrmEventbusProtoExternalTraffic::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoExternalTraffic');
class_alias(EnterpriseCrmEventbusProtoFailurePolicy::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoFailurePolicy');
class_alias(EnterpriseCrmEventbusProtoField::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoField');
class_alias(EnterpriseCrmEventbusProtoFieldMappingConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoFieldMappingConfig');
class_alias(EnterpriseCrmEventbusProtoFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoFunction');
class_alias(EnterpriseCrmEventbusProtoFunctionType::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoFunctionType');
class_alias(EnterpriseCrmEventbusProtoIntArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoIntArray');
class_alias(EnterpriseCrmEventbusProtoIntArrayFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoIntArrayFunction');
class_alias(EnterpriseCrmEventbusProtoIntFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoIntFunction');
class_alias(EnterpriseCrmEventbusProtoIntParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoIntParameterArray');
class_alias(EnterpriseCrmEventbusProtoJsonFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoJsonFunction');
class_alias(EnterpriseCrmEventbusProtoLogSettings::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoLogSettings');
class_alias(EnterpriseCrmEventbusProtoLoopMetadata::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoLoopMetadata');
class_alias(EnterpriseCrmEventbusProtoMappedField::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoMappedField');
class_alias(EnterpriseCrmEventbusProtoNextTask::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoNextTask');
class_alias(EnterpriseCrmEventbusProtoNextTeardownTask::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoNextTeardownTask');
class_alias(EnterpriseCrmEventbusProtoNodeIdentifier::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoNodeIdentifier');
class_alias(EnterpriseCrmEventbusProtoNotification::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoNotification');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryConfig');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryProtoDefinition');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryValidationRule::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryValidationRule');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleDoubleRange');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleIntRange');
class_alias(EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParamSpecEntryValidationRuleStringRegex');
class_alias(EnterpriseCrmEventbusProtoParameterEntry::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParameterEntry');
class_alias(EnterpriseCrmEventbusProtoParameterMap::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParameterMap');
class_alias(EnterpriseCrmEventbusProtoParameterMapEntry::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParameterMapEntry');
class_alias(EnterpriseCrmEventbusProtoParameterMapField::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParameterMapField');
class_alias(EnterpriseCrmEventbusProtoParameterValueType::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoParameterValueType');
class_alias(EnterpriseCrmEventbusProtoPropertyEntry::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoPropertyEntry');
class_alias(EnterpriseCrmEventbusProtoProtoArrayFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoProtoArrayFunction');
class_alias(EnterpriseCrmEventbusProtoProtoFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoProtoFunction');
class_alias(EnterpriseCrmEventbusProtoProtoParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoProtoParameterArray');
class_alias(EnterpriseCrmEventbusProtoScatterResponse::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoScatterResponse');
class_alias(EnterpriseCrmEventbusProtoSerializedObjectParameter::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSerializedObjectParameter');
class_alias(EnterpriseCrmEventbusProtoStringArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoStringArray');
class_alias(EnterpriseCrmEventbusProtoStringArrayFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoStringArrayFunction');
class_alias(EnterpriseCrmEventbusProtoStringFunction::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoStringFunction');
class_alias(EnterpriseCrmEventbusProtoStringParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoStringParameterArray');
class_alias(EnterpriseCrmEventbusProtoSuccessPolicy::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuccessPolicy');
class_alias(EnterpriseCrmEventbusProtoSuspensionAuthPermissions::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionAuthPermissions');
class_alias(EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionAuthPermissionsGaiaIdentity');
class_alias(EnterpriseCrmEventbusProtoSuspensionConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionConfig');
class_alias(EnterpriseCrmEventbusProtoSuspensionExpiration::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionExpiration');
class_alias(EnterpriseCrmEventbusProtoSuspensionResolutionInfo::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionResolutionInfo');
class_alias(EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoSuspensionResolutionInfoAudit');
class_alias(EnterpriseCrmEventbusProtoTaskAlertConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskAlertConfig');
class_alias(EnterpriseCrmEventbusProtoTaskExecutionDetails::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskExecutionDetails');
class_alias(EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskExecutionDetailsTaskAttemptStats');
class_alias(EnterpriseCrmEventbusProtoTaskMetadata::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskMetadata');
class_alias(EnterpriseCrmEventbusProtoTaskMetadataAdmin::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskMetadataAdmin');
class_alias(EnterpriseCrmEventbusProtoTaskUiConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskUiConfig');
class_alias(EnterpriseCrmEventbusProtoTaskUiModuleConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTaskUiModuleConfig');
class_alias(EnterpriseCrmEventbusProtoTeardown::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTeardown');
class_alias(EnterpriseCrmEventbusProtoTeardownTaskConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTeardownTaskConfig');
class_alias(EnterpriseCrmEventbusProtoToken::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoToken');
class_alias(EnterpriseCrmEventbusProtoTransformExpression::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTransformExpression');
class_alias(EnterpriseCrmEventbusProtoTriggerCriteria::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoTriggerCriteria');
class_alias(EnterpriseCrmEventbusProtoValueType::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoValueType');
class_alias(EnterpriseCrmEventbusProtoWorkflowAlertConfig::class, 'Google_Service_Integrations_EnterpriseCrmEventbusProtoWorkflowAlertConfig');
class_alias(EnterpriseCrmEventbusStats::class, 'Google_Service_Integrations_EnterpriseCrmEventbusStats');
class_alias(EnterpriseCrmEventbusStatsDimensions::class, 'Google_Service_Integrations_EnterpriseCrmEventbusStatsDimensions');
class_alias(EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoBooleanParameterArray');
class_alias(EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoDoubleParameterArray');
class_alias(EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoEventExecutionDetails');
class_alias(EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoEventExecutionInfo');
class_alias(EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoEventExecutionSnapshot');
class_alias(EnterpriseCrmFrontendsEventbusProtoEventParameters::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoEventParameters');
class_alias(EnterpriseCrmFrontendsEventbusProtoIntParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoIntParameterArray');
class_alias(EnterpriseCrmFrontendsEventbusProtoParamSpecEntry::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParamSpecEntry');
class_alias(EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParamSpecsMessage');
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterEntry::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterEntry');
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterMap::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterMap');
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterMapEntry::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterMapEntry');
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterMapField::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterMapField');
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterValueType::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterValueType');
class_alias(EnterpriseCrmFrontendsEventbusProtoProtoParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoProtoParameterArray');
class_alias(EnterpriseCrmFrontendsEventbusProtoRollbackStrategy::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoRollbackStrategy');
class_alias(EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoSerializedObjectParameter');
class_alias(EnterpriseCrmFrontendsEventbusProtoStringParameterArray::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoStringParameterArray');
class_alias(EnterpriseCrmFrontendsEventbusProtoTaskConfig::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoTaskConfig');
class_alias(EnterpriseCrmFrontendsEventbusProtoTaskEntity::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoTaskEntity');
class_alias(EnterpriseCrmFrontendsEventbusProtoTriggerConfig::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoTriggerConfig');
class_alias(EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoWorkflowParameterEntry');
class_alias(EnterpriseCrmFrontendsEventbusProtoWorkflowParameters::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoWorkflowParameters');
class_alias(EnterpriseCrmLoggingGwsFieldLimits::class, 'Google_Service_Integrations_EnterpriseCrmLoggingGwsFieldLimits');
class_alias(EnterpriseCrmLoggingGwsSanitizeOptions::class, 'Google_Service_Integrations_EnterpriseCrmLoggingGwsSanitizeOptions');
class_alias(GoogleCloudConnectorsV1AuthConfig::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfig');
class_alias(GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfigOauth2ClientCredentials');
class_alias(GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfigOauth2JwtBearer');
class_alias(GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfigOauth2JwtBearerJwtClaims');
class_alias(GoogleCloudConnectorsV1AuthConfigSshPublicKey::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfigSshPublicKey');
class_alias(GoogleCloudConnectorsV1AuthConfigUserPassword::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AuthConfigUserPassword');
class_alias(GoogleCloudConnectorsV1ConfigVariable::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1ConfigVariable');
class_alias(GoogleCloudConnectorsV1Connection::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1Connection');
class_alias(GoogleCloudConnectorsV1ConnectionStatus::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1ConnectionStatus');
class_alias(GoogleCloudConnectorsV1Destination::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1Destination');
class_alias(GoogleCloudConnectorsV1DestinationConfig::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1DestinationConfig');
class_alias(GoogleCloudConnectorsV1LockConfig::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1LockConfig');
class_alias(GoogleCloudConnectorsV1NodeConfig::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1NodeConfig');
class_alias(GoogleCloudConnectorsV1Secret::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1Secret');
class_alias(GoogleCloudIntegrationsV1alphaAccessToken::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaAccessToken');
class_alias(GoogleCloudIntegrationsV1alphaArchiveBundleRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaArchiveBundleRequest');
class_alias(GoogleCloudIntegrationsV1alphaArchiveBundleResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaArchiveBundleResponse');
class_alias(GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionRequest');
class_alias(GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaArchiveIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaAttemptStats::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaAttemptStats');
class_alias(GoogleCloudIntegrationsV1alphaAuthConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaAuthConfig');
class_alias(GoogleCloudIntegrationsV1alphaAuthToken::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaAuthToken');
class_alias(GoogleCloudIntegrationsV1alphaBooleanParameterArray::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaBooleanParameterArray');
class_alias(GoogleCloudIntegrationsV1alphaCancelExecutionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCancelExecutionRequest');
class_alias(GoogleCloudIntegrationsV1alphaCancelExecutionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCancelExecutionResponse');
class_alias(GoogleCloudIntegrationsV1alphaCertificate::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCertificate');
class_alias(GoogleCloudIntegrationsV1alphaClientCertificate::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaClientCertificate');
class_alias(GoogleCloudIntegrationsV1alphaCloudSchedulerConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCloudSchedulerConfig');
class_alias(GoogleCloudIntegrationsV1alphaConnectionSchemaMetadata::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaConnectionSchemaMetadata');
class_alias(GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectRequest');
class_alias(GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCreateAppsScriptProjectResponse');
class_alias(GoogleCloudIntegrationsV1alphaCreateBundleRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCreateBundleRequest');
class_alias(GoogleCloudIntegrationsV1alphaCreateBundleResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCreateBundleResponse');
class_alias(GoogleCloudIntegrationsV1alphaCredential::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaCredential');
class_alias(GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionRequest');
class_alias(GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaDeactivateIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaDoubleParameterArray::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaDoubleParameterArray');
class_alias(GoogleCloudIntegrationsV1alphaDownloadIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaDownloadIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaEnumerateConnectorPlatformRegionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaEnumerateConnectorPlatformRegionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaEventParameter::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaEventParameter');
class_alias(GoogleCloudIntegrationsV1alphaExecuteIntegrationsRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecuteIntegrationsRequest');
class_alias(GoogleCloudIntegrationsV1alphaExecuteIntegrationsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecuteIntegrationsResponse');
class_alias(GoogleCloudIntegrationsV1alphaExecution::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecution');
class_alias(GoogleCloudIntegrationsV1alphaExecutionDetails::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecutionDetails');
class_alias(GoogleCloudIntegrationsV1alphaExecutionSnapshot::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecutionSnapshot');
class_alias(GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaExecutionSnapshotExecutionSnapshotMetadata');
class_alias(GoogleCloudIntegrationsV1alphaFailurePolicy::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaFailurePolicy');
class_alias(GoogleCloudIntegrationsV1alphaGenerateTokenResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaGenerateTokenResponse');
class_alias(GoogleCloudIntegrationsV1alphaGetBundleResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaGetBundleResponse');
class_alias(GoogleCloudIntegrationsV1alphaIntParameterArray::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntParameterArray');
class_alias(GoogleCloudIntegrationsV1alphaIntegration::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegration');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationAlertConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationAlertConfig');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationAlertConfigThresholdValue');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationBundleConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationBundleConfig');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationParameter::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationParameter');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationTemplateVersion');
class_alias(GoogleCloudIntegrationsV1alphaIntegrationVersion::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaIntegrationVersion');
class_alias(GoogleCloudIntegrationsV1alphaJwt::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaJwt');
class_alias(GoogleCloudIntegrationsV1alphaLiftSuspensionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaLiftSuspensionRequest');
class_alias(GoogleCloudIntegrationsV1alphaLiftSuspensionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaLiftSuspensionResponse');
class_alias(GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectRequest');
class_alias(GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaLinkAppsScriptProjectResponse');
class_alias(GoogleCloudIntegrationsV1alphaListAuthConfigsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListAuthConfigsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListCertificatesResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListCertificatesResponse');
class_alias(GoogleCloudIntegrationsV1alphaListConnectionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListConnectionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListExecutionSnapshotsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListExecutionSnapshotsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListExecutionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListExecutionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListIntegrationTemplateVersionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListIntegrationTemplateVersionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListIntegrationVersionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListIntegrationVersionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListIntegrationsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListIntegrationsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListRuntimeActionSchemasResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListRuntimeActionSchemasResponse');
class_alias(GoogleCloudIntegrationsV1alphaListRuntimeEntitySchemasResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListRuntimeEntitySchemasResponse');
class_alias(GoogleCloudIntegrationsV1alphaListSfdcChannelsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListSfdcChannelsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListSfdcInstancesResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListSfdcInstancesResponse');
class_alias(GoogleCloudIntegrationsV1alphaListSuspensionsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListSuspensionsResponse');
class_alias(GoogleCloudIntegrationsV1alphaListTaskEntitiesResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaListTaskEntitiesResponse');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequest');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestGroupBy');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQuery');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryComponent');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationMode');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeJoinConfig');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsRequestMashQueryOperationModeUnionConfig');
class_alias(GoogleCloudIntegrationsV1alphaMonitorExecutionStatsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaMonitorExecutionStatsResponse');
class_alias(GoogleCloudIntegrationsV1alphaNextTask::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaNextTask');
class_alias(GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaOAuth2AuthorizationCode');
class_alias(GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaOAuth2ClientCredentials');
class_alias(GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaOAuth2ResourceOwnerCredentials');
class_alias(GoogleCloudIntegrationsV1alphaOidcToken::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaOidcToken');
class_alias(GoogleCloudIntegrationsV1alphaParameterMap::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaParameterMap');
class_alias(GoogleCloudIntegrationsV1alphaParameterMapEntry::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaParameterMapEntry');
class_alias(GoogleCloudIntegrationsV1alphaParameterMapField::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaParameterMapField');
class_alias(GoogleCloudIntegrationsV1alphaPublishIntegrationVersionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaPublishIntegrationVersionRequest');
class_alias(GoogleCloudIntegrationsV1alphaPublishIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaPublishIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaResolveSuspensionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaResolveSuspensionRequest');
class_alias(GoogleCloudIntegrationsV1alphaResolveSuspensionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaResolveSuspensionResponse');
class_alias(GoogleCloudIntegrationsV1alphaRuntimeActionSchema::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaRuntimeActionSchema');
class_alias(GoogleCloudIntegrationsV1alphaRuntimeEntitySchema::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaRuntimeEntitySchema');
class_alias(GoogleCloudIntegrationsV1alphaScheduleIntegrationsRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaScheduleIntegrationsRequest');
class_alias(GoogleCloudIntegrationsV1alphaScheduleIntegrationsResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaScheduleIntegrationsResponse');
class_alias(GoogleCloudIntegrationsV1alphaServiceAccountCredentials::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaServiceAccountCredentials');
class_alias(GoogleCloudIntegrationsV1alphaSfdcChannel::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSfdcChannel');
class_alias(GoogleCloudIntegrationsV1alphaSfdcInstance::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSfdcInstance');
class_alias(GoogleCloudIntegrationsV1alphaStringParameterArray::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaStringParameterArray');
class_alias(GoogleCloudIntegrationsV1alphaSuccessPolicy::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSuccessPolicy');
class_alias(GoogleCloudIntegrationsV1alphaSuspension::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSuspension');
class_alias(GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSuspensionApprovalConfig');
class_alias(GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSuspensionApprovalExpiration');
class_alias(GoogleCloudIntegrationsV1alphaSuspensionAudit::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaSuspensionAudit');
class_alias(GoogleCloudIntegrationsV1alphaTakeoverEditLockRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaTakeoverEditLockRequest');
class_alias(GoogleCloudIntegrationsV1alphaTakeoverEditLockResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaTakeoverEditLockResponse');
class_alias(GoogleCloudIntegrationsV1alphaTaskConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaTaskConfig');
class_alias(GoogleCloudIntegrationsV1alphaTaskExecutionDetails::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaTaskExecutionDetails');
class_alias(GoogleCloudIntegrationsV1alphaTriggerConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaTriggerConfig');
class_alias(GoogleCloudIntegrationsV1alphaUpdateBundleRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaUpdateBundleRequest');
class_alias(GoogleCloudIntegrationsV1alphaUpdateBundleResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaUpdateBundleResponse');
class_alias(GoogleCloudIntegrationsV1alphaUploadIntegrationVersionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaUploadIntegrationVersionRequest');
class_alias(GoogleCloudIntegrationsV1alphaUploadIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaUploadIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaUsernameAndPassword::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaUsernameAndPassword');
class_alias(GoogleCloudIntegrationsV1alphaValidateIntegrationVersionRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaValidateIntegrationVersionRequest');
class_alias(GoogleCloudIntegrationsV1alphaValidateIntegrationVersionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaValidateIntegrationVersionResponse');
class_alias(GoogleCloudIntegrationsV1alphaValueType::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaValueType');
class_alias(GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest::class, 'Google_Service_Integrations_GoogleInternalCloudCrmEventbusV3PostToQueueWithTriggerIdRequest');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Integrations_GoogleProtobufEmpty');
