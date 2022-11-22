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

namespace Google\Service\Connectors;

class Action extends \Google\Collection
{
  /** @var InputParameter[] */
  public $inputParameters;
  /** @var string */
  public $name;
  /** @var ResultMetadata[] */
  public $resultMetadata;
  protected $collection_key = 'resultMetadata';
  protected $inputParametersType = InputParameter::class;
  protected $inputParametersDataType = 'array';
  protected $resultMetadataType = ResultMetadata::class;
  protected $resultMetadataDataType = 'array';
  /** @param InputParameter[] */
  public function setInputParameters($inputParameters)
  {
    $this->inputParameters = $inputParameters;
  }
  /** @return InputParameter[] */
  public function getInputParameters()
  {
    return $this->inputParameters;
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
  /** @param ResultMetadata[] */
  public function setResultMetadata($resultMetadata)
  {
    $this->resultMetadata = $resultMetadata;
  }
  /** @return ResultMetadata[] */
  public function getResultMetadata()
  {
    return $this->resultMetadata;
  }
}

class ConnectorsEmpty extends \Google\Model
{
}

class Entity extends \Google\Model
{
  /** @var array[] */
  public $fields;
  /** @var string */
  public $name;

  /** @param array[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return array[] */
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
}

class EntityType extends \Google\Collection
{
  /** @var Field[] */
  public $fields;
  /** @var string */
  public $name;
  protected $collection_key = 'fields';
  protected $fieldsType = Field::class;
  protected $fieldsDataType = 'array';
  /** @param Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Field[] */
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
}

class ExecuteActionRequest extends \Google\Model
{
  /** @var array[] */
  public $parameters;

  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class ExecuteActionResponse extends \Google\Collection
{
  /** @var array[] */
  public $results;
  protected $collection_key = 'results';
  /** @param array[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return array[] */
  public function getResults()
  {
    return $this->results;
  }
}

class ExecuteSqlQueryRequest extends \Google\Model
{
  /** @var Query */
  public $query;
  protected $queryType = Query::class;
  protected $queryDataType = '';
  /** @param Query */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /** @return Query */
  public function getQuery()
  {
    return $this->query;
  }
}

class ExecuteSqlQueryResponse extends \Google\Collection
{
  /** @var array[] */
  public $results;
  protected $collection_key = 'results';
  /** @param array[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return array[] */
  public function getResults()
  {
    return $this->results;
  }
}

class Field extends \Google\Model
{
  /** @var array[] */
  public $additionalDetails;
  /** @var string */
  public $dataType;
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var bool */
  public $key;
  /** @var string */
  public $name;
  /** @var bool */
  public $nullable;
  /** @var Reference */
  public $reference;
  protected $referenceType = Reference::class;
  protected $referenceDataType = '';
  /** @param array[] */
  public function setAdditionalDetails($additionalDetails)
  {
    $this->additionalDetails = $additionalDetails;
  }
  /** @return array[] */
  public function getAdditionalDetails()
  {
    return $this->additionalDetails;
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
  /** @param array */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return array */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return bool */
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
  /** @param Reference */
  public function setReference(Reference $reference)
  {
    $this->reference = $reference;
  }
  /** @return Reference */
  public function getReference()
  {
    return $this->reference;
  }
}

class InputParameter extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var bool */
  public $nullable;

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
  /** @param array */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return array */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
}

class ListActionsResponse extends \Google\Collection
{
  /** @var Action[] */
  public $actions;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unsupportedActionNames;
  protected $collection_key = 'unsupportedActionNames';
  protected $actionsType = Action::class;
  protected $actionsDataType = 'array';
  /** @param Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return Action[] */
  public function getActions()
  {
    return $this->actions;
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
  public function setUnsupportedActionNames($unsupportedActionNames)
  {
    $this->unsupportedActionNames = $unsupportedActionNames;
  }
  /** @return string[] */
  public function getUnsupportedActionNames()
  {
    return $this->unsupportedActionNames;
  }
}

class ListEntitiesResponse extends \Google\Collection
{
  /** @var Entity[] */
  public $entities;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entities';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
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

class ListEntityTypesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var EntityType[] */
  public $types;
  /** @var string[] */
  public $unsupportedTypeNames;
  protected $collection_key = 'unsupportedTypeNames';
  protected $typesType = EntityType::class;
  protected $typesDataType = 'array';
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
  /** @param EntityType[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return EntityType[] */
  public function getTypes()
  {
    return $this->types;
  }
  /** @param string[] */
  public function setUnsupportedTypeNames($unsupportedTypeNames)
  {
    $this->unsupportedTypeNames = $unsupportedTypeNames;
  }
  /** @return string[] */
  public function getUnsupportedTypeNames()
  {
    return $this->unsupportedTypeNames;
  }
}

class Query extends \Google\Model
{
  /** @var string */
  public $query;

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
}

class Reference extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class ResultMetadata extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var string */
  public $description;
  /** @var string */
  public $name;

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
}

class UpdateEntitiesWithConditionsResponse extends \Google\Model
{
  /** @var array[] */
  public $response;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Action::class, 'Google_Service_Connectors_Action');
class_alias(ConnectorsEmpty::class, 'Google_Service_Connectors_ConnectorsEmpty');
class_alias(Entity::class, 'Google_Service_Connectors_Entity');
class_alias(EntityType::class, 'Google_Service_Connectors_EntityType');
class_alias(ExecuteActionRequest::class, 'Google_Service_Connectors_ExecuteActionRequest');
class_alias(ExecuteActionResponse::class, 'Google_Service_Connectors_ExecuteActionResponse');
class_alias(ExecuteSqlQueryRequest::class, 'Google_Service_Connectors_ExecuteSqlQueryRequest');
class_alias(ExecuteSqlQueryResponse::class, 'Google_Service_Connectors_ExecuteSqlQueryResponse');
class_alias(Field::class, 'Google_Service_Connectors_Field');
class_alias(InputParameter::class, 'Google_Service_Connectors_InputParameter');
class_alias(ListActionsResponse::class, 'Google_Service_Connectors_ListActionsResponse');
class_alias(ListEntitiesResponse::class, 'Google_Service_Connectors_ListEntitiesResponse');
class_alias(ListEntityTypesResponse::class, 'Google_Service_Connectors_ListEntityTypesResponse');
class_alias(Query::class, 'Google_Service_Connectors_Query');
class_alias(Reference::class, 'Google_Service_Connectors_Reference');
class_alias(ResultMetadata::class, 'Google_Service_Connectors_ResultMetadata');
class_alias(UpdateEntitiesWithConditionsResponse::class, 'Google_Service_Connectors_UpdateEntitiesWithConditionsResponse');
