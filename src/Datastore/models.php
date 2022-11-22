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

namespace Google\Service\Datastore;

class Aggregation extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var Count */
  public $count;
  protected $countType = Count::class;
  protected $countDataType = '';
  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
  }
  /** @param Count */
  public function setCount(Count $count)
  {
    $this->count = $count;
  }
  /** @return Count */
  public function getCount()
  {
    return $this->count;
  }
}

class AggregationQuery extends \Google\Collection
{
  /** @var Aggregation[] */
  public $aggregations;
  /** @var Query */
  public $nestedQuery;
  protected $collection_key = 'aggregations';
  protected $aggregationsType = Aggregation::class;
  protected $aggregationsDataType = 'array';
  protected $nestedQueryType = Query::class;
  protected $nestedQueryDataType = '';
  /** @param Aggregation[] */
  public function setAggregations($aggregations)
  {
    $this->aggregations = $aggregations;
  }
  /** @return Aggregation[] */
  public function getAggregations()
  {
    return $this->aggregations;
  }
  /** @param Query */
  public function setNestedQuery(Query $nestedQuery)
  {
    $this->nestedQuery = $nestedQuery;
  }
  /** @return Query */
  public function getNestedQuery()
  {
    return $this->nestedQuery;
  }
}

class AggregationResult extends \Google\Model
{
  /** @var Value[] */
  public $aggregateProperties;
  protected $aggregatePropertiesType = Value::class;
  protected $aggregatePropertiesDataType = 'map';
  /** @param Value[] */
  public function setAggregateProperties($aggregateProperties)
  {
    $this->aggregateProperties = $aggregateProperties;
  }
  /** @return Value[] */
  public function getAggregateProperties()
  {
    return $this->aggregateProperties;
  }
}

class AggregationResultBatch extends \Google\Collection
{
  /** @var AggregationResult[] */
  public $aggregationResults;
  /** @var string */
  public $moreResults;
  /** @var string */
  public $readTime;
  protected $collection_key = 'aggregationResults';
  protected $aggregationResultsType = AggregationResult::class;
  protected $aggregationResultsDataType = 'array';
  /** @param AggregationResult[] */
  public function setAggregationResults($aggregationResults)
  {
    $this->aggregationResults = $aggregationResults;
  }
  /** @return AggregationResult[] */
  public function getAggregationResults()
  {
    return $this->aggregationResults;
  }
  /** @param string */
  public function setMoreResults($moreResults)
  {
    $this->moreResults = $moreResults;
  }
  /** @return string */
  public function getMoreResults()
  {
    return $this->moreResults;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class AllocateIdsRequest extends \Google\Collection
{
  /** @var string */
  public $databaseId;
  /** @var Key[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $keysType = Key::class;
  protected $keysDataType = 'array';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return Key[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class AllocateIdsResponse extends \Google\Collection
{
  /** @var Key[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $keysType = Key::class;
  protected $keysDataType = 'array';
  /** @param Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return Key[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class ArrayValue extends \Google\Collection
{
  /** @var Value[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Value::class;
  protected $valuesDataType = 'array';
  /** @param Value[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return Value[] */
  public function getValues()
  {
    return $this->values;
  }
}

class BeginTransactionRequest extends \Google\Model
{
  /** @var string */
  public $databaseId;
  /** @var TransactionOptions */
  public $transactionOptions;
  protected $transactionOptionsType = TransactionOptions::class;
  protected $transactionOptionsDataType = '';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param TransactionOptions */
  public function setTransactionOptions(TransactionOptions $transactionOptions)
  {
    $this->transactionOptions = $transactionOptions;
  }
  /** @return TransactionOptions */
  public function getTransactionOptions()
  {
    return $this->transactionOptions;
  }
}

class BeginTransactionResponse extends \Google\Model
{
  /** @var string */
  public $transaction;

  /** @param string */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return string */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class CommitRequest extends \Google\Collection
{
  /** @var string */
  public $databaseId;
  /** @var string */
  public $mode;
  /** @var Mutation[] */
  public $mutations;
  /** @var string */
  public $transaction;
  protected $collection_key = 'mutations';
  protected $mutationsType = Mutation::class;
  protected $mutationsDataType = 'array';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
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
  /** @param Mutation[] */
  public function setMutations($mutations)
  {
    $this->mutations = $mutations;
  }
  /** @return Mutation[] */
  public function getMutations()
  {
    return $this->mutations;
  }
  /** @param string */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return string */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class CommitResponse extends \Google\Collection
{
  /** @var string */
  public $commitTime;
  /** @var int */
  public $indexUpdates;
  /** @var MutationResult[] */
  public $mutationResults;
  protected $collection_key = 'mutationResults';
  protected $mutationResultsType = MutationResult::class;
  protected $mutationResultsDataType = 'array';
  /** @param string */
  public function setCommitTime($commitTime)
  {
    $this->commitTime = $commitTime;
  }
  /** @return string */
  public function getCommitTime()
  {
    return $this->commitTime;
  }
  /** @param int */
  public function setIndexUpdates($indexUpdates)
  {
    $this->indexUpdates = $indexUpdates;
  }
  /** @return int */
  public function getIndexUpdates()
  {
    return $this->indexUpdates;
  }
  /** @param MutationResult[] */
  public function setMutationResults($mutationResults)
  {
    $this->mutationResults = $mutationResults;
  }
  /** @return MutationResult[] */
  public function getMutationResults()
  {
    return $this->mutationResults;
  }
}

class CompositeFilter extends \Google\Collection
{
  /** @var Filter[] */
  public $filters;
  /** @var string */
  public $op;
  protected $collection_key = 'filters';
  protected $filtersType = Filter::class;
  protected $filtersDataType = 'array';
  /** @param Filter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return Filter[] */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string */
  public function setOp($op)
  {
    $this->op = $op;
  }
  /** @return string */
  public function getOp()
  {
    return $this->op;
  }
}

class Count extends \Google\Model
{
  /** @var string */
  public $upTo;

  /** @param string */
  public function setUpTo($upTo)
  {
    $this->upTo = $upTo;
  }
  /** @return string */
  public function getUpTo()
  {
    return $this->upTo;
  }
}

class DatastoreEmpty extends \Google\Model
{
}

class DatastoreReadOnly extends \Google\Model
{
  /** @var string */
  public $readTime;

  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class Entity extends \Google\Model
{
  /** @var Key */
  public $key;
  /** @var Value[] */
  public $properties;
  protected $keyType = Key::class;
  protected $keyDataType = '';
  protected $propertiesType = Value::class;
  protected $propertiesDataType = 'map';
  /** @param Key */
  public function setKey(Key $key)
  {
    $this->key = $key;
  }
  /** @return Key */
  public function getKey()
  {
    return $this->key;
  }
  /** @param Value[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return Value[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class EntityResult extends \Google\Model
{
  /** @var string */
  public $cursor;
  /** @var Entity */
  public $entity;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;
  protected $entityType = Entity::class;
  protected $entityDataType = '';
  /** @param string */
  public function setCursor($cursor)
  {
    $this->cursor = $cursor;
  }
  /** @return string */
  public function getCursor()
  {
    return $this->cursor;
  }
  /** @param Entity */
  public function setEntity(Entity $entity)
  {
    $this->entity = $entity;
  }
  /** @return Entity */
  public function getEntity()
  {
    return $this->entity;
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

class Filter extends \Google\Model
{
  /** @var CompositeFilter */
  public $compositeFilter;
  /** @var PropertyFilter */
  public $propertyFilter;
  protected $compositeFilterType = CompositeFilter::class;
  protected $compositeFilterDataType = '';
  protected $propertyFilterType = PropertyFilter::class;
  protected $propertyFilterDataType = '';
  /** @param CompositeFilter */
  public function setCompositeFilter(CompositeFilter $compositeFilter)
  {
    $this->compositeFilter = $compositeFilter;
  }
  /** @return CompositeFilter */
  public function getCompositeFilter()
  {
    return $this->compositeFilter;
  }
  /** @param PropertyFilter */
  public function setPropertyFilter(PropertyFilter $propertyFilter)
  {
    $this->propertyFilter = $propertyFilter;
  }
  /** @return PropertyFilter */
  public function getPropertyFilter()
  {
    return $this->propertyFilter;
  }
}

class GoogleDatastoreAdminV1CommonMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $operationType;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
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

class GoogleDatastoreAdminV1DatastoreFirestoreMigrationMetadata extends \Google\Model
{
  /** @var string */
  public $migrationState;
  /** @var string */
  public $migrationStep;

  /** @param string */
  public function setMigrationState($migrationState)
  {
    $this->migrationState = $migrationState;
  }
  /** @return string */
  public function getMigrationState()
  {
    return $this->migrationState;
  }
  /** @param string */
  public function setMigrationStep($migrationStep)
  {
    $this->migrationStep = $migrationStep;
  }
  /** @return string */
  public function getMigrationStep()
  {
    return $this->migrationStep;
  }
}

class GoogleDatastoreAdminV1EntityFilter extends \Google\Collection
{
  /** @var string[] */
  public $kinds;
  /** @var string[] */
  public $namespaceIds;
  protected $collection_key = 'namespaceIds';
  /** @param string[] */
  public function setKinds($kinds)
  {
    $this->kinds = $kinds;
  }
  /** @return string[] */
  public function getKinds()
  {
    return $this->kinds;
  }
  /** @param string[] */
  public function setNamespaceIds($namespaceIds)
  {
    $this->namespaceIds = $namespaceIds;
  }
  /** @return string[] */
  public function getNamespaceIds()
  {
    return $this->namespaceIds;
  }
}

class GoogleDatastoreAdminV1ExportEntitiesMetadata extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1CommonMetadata */
  public $common;
  /** @var GoogleDatastoreAdminV1EntityFilter */
  public $entityFilter;
  /** @var string */
  public $outputUrlPrefix;
  /** @var GoogleDatastoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleDatastoreAdminV1Progress */
  public $progressEntities;
  protected $commonType = GoogleDatastoreAdminV1CommonMetadata::class;
  protected $commonDataType = '';
  protected $entityFilterType = GoogleDatastoreAdminV1EntityFilter::class;
  protected $entityFilterDataType = '';
  protected $progressBytesType = GoogleDatastoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressEntitiesType = GoogleDatastoreAdminV1Progress::class;
  protected $progressEntitiesDataType = '';
  /** @param GoogleDatastoreAdminV1CommonMetadata */
  public function setCommon(GoogleDatastoreAdminV1CommonMetadata $common)
  {
    $this->common = $common;
  }
  /** @return GoogleDatastoreAdminV1CommonMetadata */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param GoogleDatastoreAdminV1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }
  /** @param string */
  public function setOutputUrlPrefix($outputUrlPrefix)
  {
    $this->outputUrlPrefix = $outputUrlPrefix;
  }
  /** @return string */
  public function getOutputUrlPrefix()
  {
    return $this->outputUrlPrefix;
  }
  /** @param GoogleDatastoreAdminV1Progress */
  public function setProgressBytes(GoogleDatastoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleDatastoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleDatastoreAdminV1Progress */
  public function setProgressEntities(GoogleDatastoreAdminV1Progress $progressEntities)
  {
    $this->progressEntities = $progressEntities;
  }
  /** @return GoogleDatastoreAdminV1Progress */
  public function getProgressEntities()
  {
    return $this->progressEntities;
  }
}

class GoogleDatastoreAdminV1ExportEntitiesRequest extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1EntityFilter */
  public $entityFilter;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $outputUrlPrefix;
  protected $entityFilterType = GoogleDatastoreAdminV1EntityFilter::class;
  protected $entityFilterDataType = '';
  /** @param GoogleDatastoreAdminV1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
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
  public function setOutputUrlPrefix($outputUrlPrefix)
  {
    $this->outputUrlPrefix = $outputUrlPrefix;
  }
  /** @return string */
  public function getOutputUrlPrefix()
  {
    return $this->outputUrlPrefix;
  }
}

class GoogleDatastoreAdminV1ExportEntitiesResponse extends \Google\Model
{
  /** @var string */
  public $outputUrl;

  /** @param string */
  public function setOutputUrl($outputUrl)
  {
    $this->outputUrl = $outputUrl;
  }
  /** @return string */
  public function getOutputUrl()
  {
    return $this->outputUrl;
  }
}

class GoogleDatastoreAdminV1ImportEntitiesMetadata extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1CommonMetadata */
  public $common;
  /** @var GoogleDatastoreAdminV1EntityFilter */
  public $entityFilter;
  /** @var string */
  public $inputUrl;
  /** @var GoogleDatastoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleDatastoreAdminV1Progress */
  public $progressEntities;
  protected $commonType = GoogleDatastoreAdminV1CommonMetadata::class;
  protected $commonDataType = '';
  protected $entityFilterType = GoogleDatastoreAdminV1EntityFilter::class;
  protected $entityFilterDataType = '';
  protected $progressBytesType = GoogleDatastoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressEntitiesType = GoogleDatastoreAdminV1Progress::class;
  protected $progressEntitiesDataType = '';
  /** @param GoogleDatastoreAdminV1CommonMetadata */
  public function setCommon(GoogleDatastoreAdminV1CommonMetadata $common)
  {
    $this->common = $common;
  }
  /** @return GoogleDatastoreAdminV1CommonMetadata */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param GoogleDatastoreAdminV1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }
  /** @param string */
  public function setInputUrl($inputUrl)
  {
    $this->inputUrl = $inputUrl;
  }
  /** @return string */
  public function getInputUrl()
  {
    return $this->inputUrl;
  }
  /** @param GoogleDatastoreAdminV1Progress */
  public function setProgressBytes(GoogleDatastoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleDatastoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleDatastoreAdminV1Progress */
  public function setProgressEntities(GoogleDatastoreAdminV1Progress $progressEntities)
  {
    $this->progressEntities = $progressEntities;
  }
  /** @return GoogleDatastoreAdminV1Progress */
  public function getProgressEntities()
  {
    return $this->progressEntities;
  }
}

class GoogleDatastoreAdminV1ImportEntitiesRequest extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1EntityFilter */
  public $entityFilter;
  /** @var string */
  public $inputUrl;
  /** @var string[] */
  public $labels;
  protected $entityFilterType = GoogleDatastoreAdminV1EntityFilter::class;
  protected $entityFilterDataType = '';
  /** @param GoogleDatastoreAdminV1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }
  /** @param string */
  public function setInputUrl($inputUrl)
  {
    $this->inputUrl = $inputUrl;
  }
  /** @return string */
  public function getInputUrl()
  {
    return $this->inputUrl;
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
}

class GoogleDatastoreAdminV1Index extends \Google\Collection
{
  /** @var string */
  public $ancestor;
  /** @var string */
  public $indexId;
  /** @var string */
  public $kind;
  /** @var string */
  public $projectId;
  /** @var GoogleDatastoreAdminV1IndexedProperty[] */
  public $properties;
  /** @var string */
  public $state;
  protected $collection_key = 'properties';
  protected $propertiesType = GoogleDatastoreAdminV1IndexedProperty::class;
  protected $propertiesDataType = 'array';
  /** @param string */
  public function setAncestor($ancestor)
  {
    $this->ancestor = $ancestor;
  }
  /** @return string */
  public function getAncestor()
  {
    return $this->ancestor;
  }
  /** @param string */
  public function setIndexId($indexId)
  {
    $this->indexId = $indexId;
  }
  /** @return string */
  public function getIndexId()
  {
    return $this->indexId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param GoogleDatastoreAdminV1IndexedProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleDatastoreAdminV1IndexedProperty[] */
  public function getProperties()
  {
    return $this->properties;
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

class GoogleDatastoreAdminV1IndexOperationMetadata extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1CommonMetadata */
  public $common;
  /** @var string */
  public $indexId;
  /** @var GoogleDatastoreAdminV1Progress */
  public $progressEntities;
  protected $commonType = GoogleDatastoreAdminV1CommonMetadata::class;
  protected $commonDataType = '';
  protected $progressEntitiesType = GoogleDatastoreAdminV1Progress::class;
  protected $progressEntitiesDataType = '';
  /** @param GoogleDatastoreAdminV1CommonMetadata */
  public function setCommon(GoogleDatastoreAdminV1CommonMetadata $common)
  {
    $this->common = $common;
  }
  /** @return GoogleDatastoreAdminV1CommonMetadata */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param string */
  public function setIndexId($indexId)
  {
    $this->indexId = $indexId;
  }
  /** @return string */
  public function getIndexId()
  {
    return $this->indexId;
  }
  /** @param GoogleDatastoreAdminV1Progress */
  public function setProgressEntities(GoogleDatastoreAdminV1Progress $progressEntities)
  {
    $this->progressEntities = $progressEntities;
  }
  /** @return GoogleDatastoreAdminV1Progress */
  public function getProgressEntities()
  {
    return $this->progressEntities;
  }
}

class GoogleDatastoreAdminV1IndexedProperty extends \Google\Model
{
  /** @var string */
  public $direction;
  /** @var string */
  public $name;

  /** @param string */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /** @return string */
  public function getDirection()
  {
    return $this->direction;
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

class GoogleDatastoreAdminV1ListIndexesResponse extends \Google\Collection
{
  /** @var GoogleDatastoreAdminV1Index[] */
  public $indexes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'indexes';
  protected $indexesType = GoogleDatastoreAdminV1Index::class;
  protected $indexesDataType = 'array';
  /** @param GoogleDatastoreAdminV1Index[] */
  public function setIndexes($indexes)
  {
    $this->indexes = $indexes;
  }
  /** @return GoogleDatastoreAdminV1Index[] */
  public function getIndexes()
  {
    return $this->indexes;
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

class GoogleDatastoreAdminV1MigrationProgressEvent extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1PrepareStepDetails */
  public $prepareStepDetails;
  /** @var GoogleDatastoreAdminV1RedirectWritesStepDetails */
  public $redirectWritesStepDetails;
  /** @var string */
  public $step;
  protected $prepareStepDetailsType = GoogleDatastoreAdminV1PrepareStepDetails::class;
  protected $prepareStepDetailsDataType = '';
  protected $redirectWritesStepDetailsType = GoogleDatastoreAdminV1RedirectWritesStepDetails::class;
  protected $redirectWritesStepDetailsDataType = '';
  /** @param GoogleDatastoreAdminV1PrepareStepDetails */
  public function setPrepareStepDetails(GoogleDatastoreAdminV1PrepareStepDetails $prepareStepDetails)
  {
    $this->prepareStepDetails = $prepareStepDetails;
  }
  /** @return GoogleDatastoreAdminV1PrepareStepDetails */
  public function getPrepareStepDetails()
  {
    return $this->prepareStepDetails;
  }
  /** @param GoogleDatastoreAdminV1RedirectWritesStepDetails */
  public function setRedirectWritesStepDetails(GoogleDatastoreAdminV1RedirectWritesStepDetails $redirectWritesStepDetails)
  {
    $this->redirectWritesStepDetails = $redirectWritesStepDetails;
  }
  /** @return GoogleDatastoreAdminV1RedirectWritesStepDetails */
  public function getRedirectWritesStepDetails()
  {
    return $this->redirectWritesStepDetails;
  }
  /** @param string */
  public function setStep($step)
  {
    $this->step = $step;
  }
  /** @return string */
  public function getStep()
  {
    return $this->step;
  }
}

class GoogleDatastoreAdminV1MigrationStateEvent extends \Google\Model
{
  /** @var string */
  public $state;

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

class GoogleDatastoreAdminV1PrepareStepDetails extends \Google\Model
{
  /** @var string */
  public $concurrencyMode;

  /** @param string */
  public function setConcurrencyMode($concurrencyMode)
  {
    $this->concurrencyMode = $concurrencyMode;
  }
  /** @return string */
  public function getConcurrencyMode()
  {
    return $this->concurrencyMode;
  }
}

class GoogleDatastoreAdminV1Progress extends \Google\Model
{
  /** @var string */
  public $workCompleted;
  /** @var string */
  public $workEstimated;

  /** @param string */
  public function setWorkCompleted($workCompleted)
  {
    $this->workCompleted = $workCompleted;
  }
  /** @return string */
  public function getWorkCompleted()
  {
    return $this->workCompleted;
  }
  /** @param string */
  public function setWorkEstimated($workEstimated)
  {
    $this->workEstimated = $workEstimated;
  }
  /** @return string */
  public function getWorkEstimated()
  {
    return $this->workEstimated;
  }
}

class GoogleDatastoreAdminV1RedirectWritesStepDetails extends \Google\Model
{
  /** @var string */
  public $concurrencyMode;

  /** @param string */
  public function setConcurrencyMode($concurrencyMode)
  {
    $this->concurrencyMode = $concurrencyMode;
  }
  /** @return string */
  public function getConcurrencyMode()
  {
    return $this->concurrencyMode;
  }
}

class GoogleDatastoreAdminV1beta1CommonMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $operationType;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
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

class GoogleDatastoreAdminV1beta1EntityFilter extends \Google\Collection
{
  /** @var string[] */
  public $kinds;
  /** @var string[] */
  public $namespaceIds;
  protected $collection_key = 'namespaceIds';
  /** @param string[] */
  public function setKinds($kinds)
  {
    $this->kinds = $kinds;
  }
  /** @return string[] */
  public function getKinds()
  {
    return $this->kinds;
  }
  /** @param string[] */
  public function setNamespaceIds($namespaceIds)
  {
    $this->namespaceIds = $namespaceIds;
  }
  /** @return string[] */
  public function getNamespaceIds()
  {
    return $this->namespaceIds;
  }
}

class GoogleDatastoreAdminV1beta1ExportEntitiesMetadata extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1beta1CommonMetadata */
  public $common;
  /** @var GoogleDatastoreAdminV1beta1EntityFilter */
  public $entityFilter;
  /** @var string */
  public $outputUrlPrefix;
  /** @var GoogleDatastoreAdminV1beta1Progress */
  public $progressBytes;
  /** @var GoogleDatastoreAdminV1beta1Progress */
  public $progressEntities;
  protected $commonType = GoogleDatastoreAdminV1beta1CommonMetadata::class;
  protected $commonDataType = '';
  protected $entityFilterType = GoogleDatastoreAdminV1beta1EntityFilter::class;
  protected $entityFilterDataType = '';
  protected $progressBytesType = GoogleDatastoreAdminV1beta1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressEntitiesType = GoogleDatastoreAdminV1beta1Progress::class;
  protected $progressEntitiesDataType = '';
  /** @param GoogleDatastoreAdminV1beta1CommonMetadata */
  public function setCommon(GoogleDatastoreAdminV1beta1CommonMetadata $common)
  {
    $this->common = $common;
  }
  /** @return GoogleDatastoreAdminV1beta1CommonMetadata */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param GoogleDatastoreAdminV1beta1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1beta1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1beta1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }
  /** @param string */
  public function setOutputUrlPrefix($outputUrlPrefix)
  {
    $this->outputUrlPrefix = $outputUrlPrefix;
  }
  /** @return string */
  public function getOutputUrlPrefix()
  {
    return $this->outputUrlPrefix;
  }
  /** @param GoogleDatastoreAdminV1beta1Progress */
  public function setProgressBytes(GoogleDatastoreAdminV1beta1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleDatastoreAdminV1beta1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleDatastoreAdminV1beta1Progress */
  public function setProgressEntities(GoogleDatastoreAdminV1beta1Progress $progressEntities)
  {
    $this->progressEntities = $progressEntities;
  }
  /** @return GoogleDatastoreAdminV1beta1Progress */
  public function getProgressEntities()
  {
    return $this->progressEntities;
  }
}

class GoogleDatastoreAdminV1beta1ExportEntitiesResponse extends \Google\Model
{
  /** @var string */
  public $outputUrl;

  /** @param string */
  public function setOutputUrl($outputUrl)
  {
    $this->outputUrl = $outputUrl;
  }
  /** @return string */
  public function getOutputUrl()
  {
    return $this->outputUrl;
  }
}

class GoogleDatastoreAdminV1beta1ImportEntitiesMetadata extends \Google\Model
{
  /** @var GoogleDatastoreAdminV1beta1CommonMetadata */
  public $common;
  /** @var GoogleDatastoreAdminV1beta1EntityFilter */
  public $entityFilter;
  /** @var string */
  public $inputUrl;
  /** @var GoogleDatastoreAdminV1beta1Progress */
  public $progressBytes;
  /** @var GoogleDatastoreAdminV1beta1Progress */
  public $progressEntities;
  protected $commonType = GoogleDatastoreAdminV1beta1CommonMetadata::class;
  protected $commonDataType = '';
  protected $entityFilterType = GoogleDatastoreAdminV1beta1EntityFilter::class;
  protected $entityFilterDataType = '';
  protected $progressBytesType = GoogleDatastoreAdminV1beta1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressEntitiesType = GoogleDatastoreAdminV1beta1Progress::class;
  protected $progressEntitiesDataType = '';
  /** @param GoogleDatastoreAdminV1beta1CommonMetadata */
  public function setCommon(GoogleDatastoreAdminV1beta1CommonMetadata $common)
  {
    $this->common = $common;
  }
  /** @return GoogleDatastoreAdminV1beta1CommonMetadata */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param GoogleDatastoreAdminV1beta1EntityFilter */
  public function setEntityFilter(GoogleDatastoreAdminV1beta1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /** @return GoogleDatastoreAdminV1beta1EntityFilter */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }
  /** @param string */
  public function setInputUrl($inputUrl)
  {
    $this->inputUrl = $inputUrl;
  }
  /** @return string */
  public function getInputUrl()
  {
    return $this->inputUrl;
  }
  /** @param GoogleDatastoreAdminV1beta1Progress */
  public function setProgressBytes(GoogleDatastoreAdminV1beta1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleDatastoreAdminV1beta1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleDatastoreAdminV1beta1Progress */
  public function setProgressEntities(GoogleDatastoreAdminV1beta1Progress $progressEntities)
  {
    $this->progressEntities = $progressEntities;
  }
  /** @return GoogleDatastoreAdminV1beta1Progress */
  public function getProgressEntities()
  {
    return $this->progressEntities;
  }
}

class GoogleDatastoreAdminV1beta1Progress extends \Google\Model
{
  /** @var string */
  public $workCompleted;
  /** @var string */
  public $workEstimated;

  /** @param string */
  public function setWorkCompleted($workCompleted)
  {
    $this->workCompleted = $workCompleted;
  }
  /** @return string */
  public function getWorkCompleted()
  {
    return $this->workCompleted;
  }
  /** @param string */
  public function setWorkEstimated($workEstimated)
  {
    $this->workEstimated = $workEstimated;
  }
  /** @return string */
  public function getWorkEstimated()
  {
    return $this->workEstimated;
  }
}

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
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

class GqlQuery extends \Google\Collection
{
  /** @var bool */
  public $allowLiterals;
  /** @var GqlQueryParameter[] */
  public $namedBindings;
  /** @var GqlQueryParameter[] */
  public $positionalBindings;
  /** @var string */
  public $queryString;
  protected $collection_key = 'positionalBindings';
  protected $namedBindingsType = GqlQueryParameter::class;
  protected $namedBindingsDataType = 'map';
  protected $positionalBindingsType = GqlQueryParameter::class;
  protected $positionalBindingsDataType = 'array';
  /** @param bool */
  public function setAllowLiterals($allowLiterals)
  {
    $this->allowLiterals = $allowLiterals;
  }
  /** @return bool */
  public function getAllowLiterals()
  {
    return $this->allowLiterals;
  }
  /** @param GqlQueryParameter[] */
  public function setNamedBindings($namedBindings)
  {
    $this->namedBindings = $namedBindings;
  }
  /** @return GqlQueryParameter[] */
  public function getNamedBindings()
  {
    return $this->namedBindings;
  }
  /** @param GqlQueryParameter[] */
  public function setPositionalBindings($positionalBindings)
  {
    $this->positionalBindings = $positionalBindings;
  }
  /** @return GqlQueryParameter[] */
  public function getPositionalBindings()
  {
    return $this->positionalBindings;
  }
  /** @param string */
  public function setQueryString($queryString)
  {
    $this->queryString = $queryString;
  }
  /** @return string */
  public function getQueryString()
  {
    return $this->queryString;
  }
}

class GqlQueryParameter extends \Google\Model
{
  /** @var string */
  public $cursor;
  /** @var Value */
  public $value;
  protected $valueType = Value::class;
  protected $valueDataType = '';
  /** @param string */
  public function setCursor($cursor)
  {
    $this->cursor = $cursor;
  }
  /** @return string */
  public function getCursor()
  {
    return $this->cursor;
  }
  /** @param Value */
  public function setValue(Value $value)
  {
    $this->value = $value;
  }
  /** @return Value */
  public function getValue()
  {
    return $this->value;
  }
}

class Key extends \Google\Collection
{
  /** @var PartitionId */
  public $partitionId;
  /** @var PathElement[] */
  public $path;
  protected $collection_key = 'path';
  protected $partitionIdType = PartitionId::class;
  protected $partitionIdDataType = '';
  protected $pathType = PathElement::class;
  protected $pathDataType = 'array';
  /** @param PartitionId */
  public function setPartitionId(PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /** @return PartitionId */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
  /** @param PathElement[] */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return PathElement[] */
  public function getPath()
  {
    return $this->path;
  }
}

class KindExpression extends \Google\Model
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

class LatLng extends \Google\Model
{
  public $latitude;
  public $longitude;

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class LookupRequest extends \Google\Collection
{
  /** @var string */
  public $databaseId;
  /** @var Key[] */
  public $keys;
  /** @var ReadOptions */
  public $readOptions;
  protected $collection_key = 'keys';
  protected $keysType = Key::class;
  protected $keysDataType = 'array';
  protected $readOptionsType = ReadOptions::class;
  protected $readOptionsDataType = '';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return Key[] */
  public function getKeys()
  {
    return $this->keys;
  }
  /** @param ReadOptions */
  public function setReadOptions(ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }
  /** @return ReadOptions */
  public function getReadOptions()
  {
    return $this->readOptions;
  }
}

class LookupResponse extends \Google\Collection
{
  /** @var Key[] */
  public $deferred;
  /** @var EntityResult[] */
  public $found;
  /** @var EntityResult[] */
  public $missing;
  /** @var string */
  public $readTime;
  protected $collection_key = 'missing';
  protected $deferredType = Key::class;
  protected $deferredDataType = 'array';
  protected $foundType = EntityResult::class;
  protected $foundDataType = 'array';
  protected $missingType = EntityResult::class;
  protected $missingDataType = 'array';
  /** @param Key[] */
  public function setDeferred($deferred)
  {
    $this->deferred = $deferred;
  }
  /** @return Key[] */
  public function getDeferred()
  {
    return $this->deferred;
  }
  /** @param EntityResult[] */
  public function setFound($found)
  {
    $this->found = $found;
  }
  /** @return EntityResult[] */
  public function getFound()
  {
    return $this->found;
  }
  /** @param EntityResult[] */
  public function setMissing($missing)
  {
    $this->missing = $missing;
  }
  /** @return EntityResult[] */
  public function getMissing()
  {
    return $this->missing;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class Mutation extends \Google\Model
{
  /** @var string */
  public $baseVersion;
  /** @var Key */
  public $delete;
  /** @var Entity */
  public $insert;
  /** @var Entity */
  public $update;
  /** @var string */
  public $updateTime;
  /** @var Entity */
  public $upsert;
  protected $deleteType = Key::class;
  protected $deleteDataType = '';
  protected $insertType = Entity::class;
  protected $insertDataType = '';
  protected $updateType = Entity::class;
  protected $updateDataType = '';
  protected $upsertType = Entity::class;
  protected $upsertDataType = '';
  /** @param string */
  public function setBaseVersion($baseVersion)
  {
    $this->baseVersion = $baseVersion;
  }
  /** @return string */
  public function getBaseVersion()
  {
    return $this->baseVersion;
  }
  /** @param Key */
  public function setDelete(Key $delete)
  {
    $this->delete = $delete;
  }
  /** @return Key */
  public function getDelete()
  {
    return $this->delete;
  }
  /** @param Entity */
  public function setInsert(Entity $insert)
  {
    $this->insert = $insert;
  }
  /** @return Entity */
  public function getInsert()
  {
    return $this->insert;
  }
  /** @param Entity */
  public function setUpdate(Entity $update)
  {
    $this->update = $update;
  }
  /** @return Entity */
  public function getUpdate()
  {
    return $this->update;
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
  /** @param Entity */
  public function setUpsert(Entity $upsert)
  {
    $this->upsert = $upsert;
  }
  /** @return Entity */
  public function getUpsert()
  {
    return $this->upsert;
  }
}

class MutationResult extends \Google\Model
{
  /** @var bool */
  public $conflictDetected;
  /** @var Key */
  public $key;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;
  protected $keyType = Key::class;
  protected $keyDataType = '';
  /** @param bool */
  public function setConflictDetected($conflictDetected)
  {
    $this->conflictDetected = $conflictDetected;
  }
  /** @return bool */
  public function getConflictDetected()
  {
    return $this->conflictDetected;
  }
  /** @param Key */
  public function setKey(Key $key)
  {
    $this->key = $key;
  }
  /** @return Key */
  public function getKey()
  {
    return $this->key;
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

class PartitionId extends \Google\Model
{
  /** @var string */
  public $databaseId;
  /** @var string */
  public $namespaceId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param string */
  public function setNamespaceId($namespaceId)
  {
    $this->namespaceId = $namespaceId;
  }
  /** @return string */
  public function getNamespaceId()
  {
    return $this->namespaceId;
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

class PathElement extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
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

class Projection extends \Google\Model
{
  /** @var PropertyReference */
  public $property;
  protected $propertyType = PropertyReference::class;
  protected $propertyDataType = '';
  /** @param PropertyReference */
  public function setProperty(PropertyReference $property)
  {
    $this->property = $property;
  }
  /** @return PropertyReference */
  public function getProperty()
  {
    return $this->property;
  }
}

class PropertyFilter extends \Google\Model
{
  /** @var string */
  public $op;
  /** @var PropertyReference */
  public $property;
  /** @var Value */
  public $value;
  protected $propertyType = PropertyReference::class;
  protected $propertyDataType = '';
  protected $valueType = Value::class;
  protected $valueDataType = '';
  /** @param string */
  public function setOp($op)
  {
    $this->op = $op;
  }
  /** @return string */
  public function getOp()
  {
    return $this->op;
  }
  /** @param PropertyReference */
  public function setProperty(PropertyReference $property)
  {
    $this->property = $property;
  }
  /** @return PropertyReference */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param Value */
  public function setValue(Value $value)
  {
    $this->value = $value;
  }
  /** @return Value */
  public function getValue()
  {
    return $this->value;
  }
}

class PropertyOrder extends \Google\Model
{
  /** @var string */
  public $direction;
  /** @var PropertyReference */
  public $property;
  protected $propertyType = PropertyReference::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /** @return string */
  public function getDirection()
  {
    return $this->direction;
  }
  /** @param PropertyReference */
  public function setProperty(PropertyReference $property)
  {
    $this->property = $property;
  }
  /** @return PropertyReference */
  public function getProperty()
  {
    return $this->property;
  }
}

class PropertyReference extends \Google\Model
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

class Query extends \Google\Collection
{
  /** @var PropertyReference[] */
  public $distinctOn;
  /** @var string */
  public $endCursor;
  /** @var Filter */
  public $filter;
  /** @var KindExpression[] */
  public $kind;
  /** @var int */
  public $limit;
  /** @var int */
  public $offset;
  /** @var PropertyOrder[] */
  public $order;
  /** @var Projection[] */
  public $projection;
  /** @var string */
  public $startCursor;
  protected $collection_key = 'projection';
  protected $distinctOnType = PropertyReference::class;
  protected $distinctOnDataType = 'array';
  protected $filterType = Filter::class;
  protected $filterDataType = '';
  protected $kindType = KindExpression::class;
  protected $kindDataType = 'array';
  protected $orderType = PropertyOrder::class;
  protected $orderDataType = 'array';
  protected $projectionType = Projection::class;
  protected $projectionDataType = 'array';
  /** @param PropertyReference[] */
  public function setDistinctOn($distinctOn)
  {
    $this->distinctOn = $distinctOn;
  }
  /** @return PropertyReference[] */
  public function getDistinctOn()
  {
    return $this->distinctOn;
  }
  /** @param string */
  public function setEndCursor($endCursor)
  {
    $this->endCursor = $endCursor;
  }
  /** @return string */
  public function getEndCursor()
  {
    return $this->endCursor;
  }
  /** @param Filter */
  public function setFilter(Filter $filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param KindExpression[] */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return KindExpression[] */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param int */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return int */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param int */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return int */
  public function getOffset()
  {
    return $this->offset;
  }
  /** @param PropertyOrder[] */
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return PropertyOrder[] */
  public function getOrder()
  {
    return $this->order;
  }
  /** @param Projection[] */
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  /** @return Projection[] */
  public function getProjection()
  {
    return $this->projection;
  }
  /** @param string */
  public function setStartCursor($startCursor)
  {
    $this->startCursor = $startCursor;
  }
  /** @return string */
  public function getStartCursor()
  {
    return $this->startCursor;
  }
}

class QueryResultBatch extends \Google\Collection
{
  /** @var string */
  public $endCursor;
  /** @var string */
  public $entityResultType;
  /** @var EntityResult[] */
  public $entityResults;
  /** @var string */
  public $moreResults;
  /** @var string */
  public $readTime;
  /** @var string */
  public $skippedCursor;
  /** @var int */
  public $skippedResults;
  /** @var string */
  public $snapshotVersion;
  protected $collection_key = 'entityResults';
  protected $entityResultsType = EntityResult::class;
  protected $entityResultsDataType = 'array';
  /** @param string */
  public function setEndCursor($endCursor)
  {
    $this->endCursor = $endCursor;
  }
  /** @return string */
  public function getEndCursor()
  {
    return $this->endCursor;
  }
  /** @param string */
  public function setEntityResultType($entityResultType)
  {
    $this->entityResultType = $entityResultType;
  }
  /** @return string */
  public function getEntityResultType()
  {
    return $this->entityResultType;
  }
  /** @param EntityResult[] */
  public function setEntityResults($entityResults)
  {
    $this->entityResults = $entityResults;
  }
  /** @return EntityResult[] */
  public function getEntityResults()
  {
    return $this->entityResults;
  }
  /** @param string */
  public function setMoreResults($moreResults)
  {
    $this->moreResults = $moreResults;
  }
  /** @return string */
  public function getMoreResults()
  {
    return $this->moreResults;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param string */
  public function setSkippedCursor($skippedCursor)
  {
    $this->skippedCursor = $skippedCursor;
  }
  /** @return string */
  public function getSkippedCursor()
  {
    return $this->skippedCursor;
  }
  /** @param int */
  public function setSkippedResults($skippedResults)
  {
    $this->skippedResults = $skippedResults;
  }
  /** @return int */
  public function getSkippedResults()
  {
    return $this->skippedResults;
  }
  /** @param string */
  public function setSnapshotVersion($snapshotVersion)
  {
    $this->snapshotVersion = $snapshotVersion;
  }
  /** @return string */
  public function getSnapshotVersion()
  {
    return $this->snapshotVersion;
  }
}

class ReadOptions extends \Google\Model
{
  /** @var string */
  public $readConsistency;
  /** @var string */
  public $readTime;
  /** @var string */
  public $transaction;

  /** @param string */
  public function setReadConsistency($readConsistency)
  {
    $this->readConsistency = $readConsistency;
  }
  /** @return string */
  public function getReadConsistency()
  {
    return $this->readConsistency;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param string */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return string */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class ReadWrite extends \Google\Model
{
  /** @var string */
  public $previousTransaction;

  /** @param string */
  public function setPreviousTransaction($previousTransaction)
  {
    $this->previousTransaction = $previousTransaction;
  }
  /** @return string */
  public function getPreviousTransaction()
  {
    return $this->previousTransaction;
  }
}

class ReserveIdsRequest extends \Google\Collection
{
  /** @var string */
  public $databaseId;
  /** @var Key[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $keysType = Key::class;
  protected $keysDataType = 'array';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return Key[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class ReserveIdsResponse extends \Google\Model
{
}

class RollbackRequest extends \Google\Model
{
  /** @var string */
  public $databaseId;
  /** @var string */
  public $transaction;

  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param string */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return string */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class RollbackResponse extends \Google\Model
{
}

class RunAggregationQueryRequest extends \Google\Model
{
  /** @var AggregationQuery */
  public $aggregationQuery;
  /** @var string */
  public $databaseId;
  /** @var GqlQuery */
  public $gqlQuery;
  /** @var PartitionId */
  public $partitionId;
  /** @var ReadOptions */
  public $readOptions;
  protected $aggregationQueryType = AggregationQuery::class;
  protected $aggregationQueryDataType = '';
  protected $gqlQueryType = GqlQuery::class;
  protected $gqlQueryDataType = '';
  protected $partitionIdType = PartitionId::class;
  protected $partitionIdDataType = '';
  protected $readOptionsType = ReadOptions::class;
  protected $readOptionsDataType = '';
  /** @param AggregationQuery */
  public function setAggregationQuery(AggregationQuery $aggregationQuery)
  {
    $this->aggregationQuery = $aggregationQuery;
  }
  /** @return AggregationQuery */
  public function getAggregationQuery()
  {
    return $this->aggregationQuery;
  }
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param GqlQuery */
  public function setGqlQuery(GqlQuery $gqlQuery)
  {
    $this->gqlQuery = $gqlQuery;
  }
  /** @return GqlQuery */
  public function getGqlQuery()
  {
    return $this->gqlQuery;
  }
  /** @param PartitionId */
  public function setPartitionId(PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /** @return PartitionId */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
  /** @param ReadOptions */
  public function setReadOptions(ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }
  /** @return ReadOptions */
  public function getReadOptions()
  {
    return $this->readOptions;
  }
}

class RunAggregationQueryResponse extends \Google\Model
{
  /** @var AggregationResultBatch */
  public $batch;
  /** @var AggregationQuery */
  public $query;
  protected $batchType = AggregationResultBatch::class;
  protected $batchDataType = '';
  protected $queryType = AggregationQuery::class;
  protected $queryDataType = '';
  /** @param AggregationResultBatch */
  public function setBatch(AggregationResultBatch $batch)
  {
    $this->batch = $batch;
  }
  /** @return AggregationResultBatch */
  public function getBatch()
  {
    return $this->batch;
  }
  /** @param AggregationQuery */
  public function setQuery(AggregationQuery $query)
  {
    $this->query = $query;
  }
  /** @return AggregationQuery */
  public function getQuery()
  {
    return $this->query;
  }
}

class RunQueryRequest extends \Google\Model
{
  /** @var string */
  public $databaseId;
  /** @var GqlQuery */
  public $gqlQuery;
  /** @var PartitionId */
  public $partitionId;
  /** @var Query */
  public $query;
  /** @var ReadOptions */
  public $readOptions;
  protected $gqlQueryType = GqlQuery::class;
  protected $gqlQueryDataType = '';
  protected $partitionIdType = PartitionId::class;
  protected $partitionIdDataType = '';
  protected $queryType = Query::class;
  protected $queryDataType = '';
  protected $readOptionsType = ReadOptions::class;
  protected $readOptionsDataType = '';
  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param GqlQuery */
  public function setGqlQuery(GqlQuery $gqlQuery)
  {
    $this->gqlQuery = $gqlQuery;
  }
  /** @return GqlQuery */
  public function getGqlQuery()
  {
    return $this->gqlQuery;
  }
  /** @param PartitionId */
  public function setPartitionId(PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /** @return PartitionId */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
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
  /** @param ReadOptions */
  public function setReadOptions(ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }
  /** @return ReadOptions */
  public function getReadOptions()
  {
    return $this->readOptions;
  }
}

class RunQueryResponse extends \Google\Model
{
  /** @var QueryResultBatch */
  public $batch;
  /** @var Query */
  public $query;
  protected $batchType = QueryResultBatch::class;
  protected $batchDataType = '';
  protected $queryType = Query::class;
  protected $queryDataType = '';
  /** @param QueryResultBatch */
  public function setBatch(QueryResultBatch $batch)
  {
    $this->batch = $batch;
  }
  /** @return QueryResultBatch */
  public function getBatch()
  {
    return $this->batch;
  }
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

class TransactionOptions extends \Google\Model
{
  /** @var DatastoreReadOnly */
  public $readOnly;
  /** @var ReadWrite */
  public $readWrite;
  protected $readOnlyType = DatastoreReadOnly::class;
  protected $readOnlyDataType = '';
  protected $readWriteType = ReadWrite::class;
  protected $readWriteDataType = '';
  /** @param DatastoreReadOnly */
  public function setReadOnly(DatastoreReadOnly $readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return DatastoreReadOnly */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /** @param ReadWrite */
  public function setReadWrite(ReadWrite $readWrite)
  {
    $this->readWrite = $readWrite;
  }
  /** @return ReadWrite */
  public function getReadWrite()
  {
    return $this->readWrite;
  }
}

class Value extends \Google\Model
{
  /** @var ArrayValue */
  public $arrayValue;
  /** @var string */
  public $blobValue;
  /** @var bool */
  public $booleanValue;
  public $doubleValue;
  /** @var Entity */
  public $entityValue;
  /** @var bool */
  public $excludeFromIndexes;
  /** @var LatLng */
  public $geoPointValue;
  /** @var string */
  public $integerValue;
  /** @var Key */
  public $keyValue;
  /** @var int */
  public $meaning;
  /** @var string */
  public $nullValue;
  /** @var string */
  public $stringValue;
  /** @var string */
  public $timestampValue;
  protected $arrayValueType = ArrayValue::class;
  protected $arrayValueDataType = '';
  protected $entityValueType = Entity::class;
  protected $entityValueDataType = '';
  protected $geoPointValueType = LatLng::class;
  protected $geoPointValueDataType = '';
  protected $keyValueType = Key::class;
  protected $keyValueDataType = '';
  /** @param ArrayValue */
  public function setArrayValue(ArrayValue $arrayValue)
  {
    $this->arrayValue = $arrayValue;
  }
  /** @return ArrayValue */
  public function getArrayValue()
  {
    return $this->arrayValue;
  }
  /** @param string */
  public function setBlobValue($blobValue)
  {
    $this->blobValue = $blobValue;
  }
  /** @return string */
  public function getBlobValue()
  {
    return $this->blobValue;
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
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param Entity */
  public function setEntityValue(Entity $entityValue)
  {
    $this->entityValue = $entityValue;
  }
  /** @return Entity */
  public function getEntityValue()
  {
    return $this->entityValue;
  }
  /** @param bool */
  public function setExcludeFromIndexes($excludeFromIndexes)
  {
    $this->excludeFromIndexes = $excludeFromIndexes;
  }
  /** @return bool */
  public function getExcludeFromIndexes()
  {
    return $this->excludeFromIndexes;
  }
  /** @param LatLng */
  public function setGeoPointValue(LatLng $geoPointValue)
  {
    $this->geoPointValue = $geoPointValue;
  }
  /** @return LatLng */
  public function getGeoPointValue()
  {
    return $this->geoPointValue;
  }
  /** @param string */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return string */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param Key */
  public function setKeyValue(Key $keyValue)
  {
    $this->keyValue = $keyValue;
  }
  /** @return Key */
  public function getKeyValue()
  {
    return $this->keyValue;
  }
  /** @param int */
  public function setMeaning($meaning)
  {
    $this->meaning = $meaning;
  }
  /** @return int */
  public function getMeaning()
  {
    return $this->meaning;
  }
  /** @param string */
  public function setNullValue($nullValue)
  {
    $this->nullValue = $nullValue;
  }
  /** @return string */
  public function getNullValue()
  {
    return $this->nullValue;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Aggregation::class, 'Google_Service_Datastore_Aggregation');
class_alias(AggregationQuery::class, 'Google_Service_Datastore_AggregationQuery');
class_alias(AggregationResult::class, 'Google_Service_Datastore_AggregationResult');
class_alias(AggregationResultBatch::class, 'Google_Service_Datastore_AggregationResultBatch');
class_alias(AllocateIdsRequest::class, 'Google_Service_Datastore_AllocateIdsRequest');
class_alias(AllocateIdsResponse::class, 'Google_Service_Datastore_AllocateIdsResponse');
class_alias(ArrayValue::class, 'Google_Service_Datastore_ArrayValue');
class_alias(BeginTransactionRequest::class, 'Google_Service_Datastore_BeginTransactionRequest');
class_alias(BeginTransactionResponse::class, 'Google_Service_Datastore_BeginTransactionResponse');
class_alias(CommitRequest::class, 'Google_Service_Datastore_CommitRequest');
class_alias(CommitResponse::class, 'Google_Service_Datastore_CommitResponse');
class_alias(CompositeFilter::class, 'Google_Service_Datastore_CompositeFilter');
class_alias(Count::class, 'Google_Service_Datastore_Count');
class_alias(DatastoreEmpty::class, 'Google_Service_Datastore_DatastoreEmpty');
class_alias(DatastoreReadOnly::class, 'Google_Service_Datastore_DatastoreReadOnly');
class_alias(Entity::class, 'Google_Service_Datastore_Entity');
class_alias(EntityResult::class, 'Google_Service_Datastore_EntityResult');
class_alias(Filter::class, 'Google_Service_Datastore_Filter');
class_alias(GoogleDatastoreAdminV1CommonMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1CommonMetadata');
class_alias(GoogleDatastoreAdminV1DatastoreFirestoreMigrationMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1DatastoreFirestoreMigrationMetadata');
class_alias(GoogleDatastoreAdminV1EntityFilter::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1EntityFilter');
class_alias(GoogleDatastoreAdminV1ExportEntitiesMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ExportEntitiesMetadata');
class_alias(GoogleDatastoreAdminV1ExportEntitiesRequest::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ExportEntitiesRequest');
class_alias(GoogleDatastoreAdminV1ExportEntitiesResponse::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ExportEntitiesResponse');
class_alias(GoogleDatastoreAdminV1ImportEntitiesMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ImportEntitiesMetadata');
class_alias(GoogleDatastoreAdminV1ImportEntitiesRequest::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ImportEntitiesRequest');
class_alias(GoogleDatastoreAdminV1Index::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1Index');
class_alias(GoogleDatastoreAdminV1IndexOperationMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1IndexOperationMetadata');
class_alias(GoogleDatastoreAdminV1IndexedProperty::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1IndexedProperty');
class_alias(GoogleDatastoreAdminV1ListIndexesResponse::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1ListIndexesResponse');
class_alias(GoogleDatastoreAdminV1MigrationProgressEvent::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1MigrationProgressEvent');
class_alias(GoogleDatastoreAdminV1MigrationStateEvent::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1MigrationStateEvent');
class_alias(GoogleDatastoreAdminV1PrepareStepDetails::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1PrepareStepDetails');
class_alias(GoogleDatastoreAdminV1Progress::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1Progress');
class_alias(GoogleDatastoreAdminV1RedirectWritesStepDetails::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1RedirectWritesStepDetails');
class_alias(GoogleDatastoreAdminV1beta1CommonMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1CommonMetadata');
class_alias(GoogleDatastoreAdminV1beta1EntityFilter::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1EntityFilter');
class_alias(GoogleDatastoreAdminV1beta1ExportEntitiesMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1ExportEntitiesMetadata');
class_alias(GoogleDatastoreAdminV1beta1ExportEntitiesResponse::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1ExportEntitiesResponse');
class_alias(GoogleDatastoreAdminV1beta1ImportEntitiesMetadata::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1ImportEntitiesMetadata');
class_alias(GoogleDatastoreAdminV1beta1Progress::class, 'Google_Service_Datastore_GoogleDatastoreAdminV1beta1Progress');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Datastore_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Datastore_GoogleLongrunningOperation');
class_alias(GqlQuery::class, 'Google_Service_Datastore_GqlQuery');
class_alias(GqlQueryParameter::class, 'Google_Service_Datastore_GqlQueryParameter');
class_alias(Key::class, 'Google_Service_Datastore_Key');
class_alias(KindExpression::class, 'Google_Service_Datastore_KindExpression');
class_alias(LatLng::class, 'Google_Service_Datastore_LatLng');
class_alias(LookupRequest::class, 'Google_Service_Datastore_LookupRequest');
class_alias(LookupResponse::class, 'Google_Service_Datastore_LookupResponse');
class_alias(Mutation::class, 'Google_Service_Datastore_Mutation');
class_alias(MutationResult::class, 'Google_Service_Datastore_MutationResult');
class_alias(PartitionId::class, 'Google_Service_Datastore_PartitionId');
class_alias(PathElement::class, 'Google_Service_Datastore_PathElement');
class_alias(Projection::class, 'Google_Service_Datastore_Projection');
class_alias(PropertyFilter::class, 'Google_Service_Datastore_PropertyFilter');
class_alias(PropertyOrder::class, 'Google_Service_Datastore_PropertyOrder');
class_alias(PropertyReference::class, 'Google_Service_Datastore_PropertyReference');
class_alias(Query::class, 'Google_Service_Datastore_Query');
class_alias(QueryResultBatch::class, 'Google_Service_Datastore_QueryResultBatch');
class_alias(ReadOptions::class, 'Google_Service_Datastore_ReadOptions');
class_alias(ReadWrite::class, 'Google_Service_Datastore_ReadWrite');
class_alias(ReserveIdsRequest::class, 'Google_Service_Datastore_ReserveIdsRequest');
class_alias(ReserveIdsResponse::class, 'Google_Service_Datastore_ReserveIdsResponse');
class_alias(RollbackRequest::class, 'Google_Service_Datastore_RollbackRequest');
class_alias(RollbackResponse::class, 'Google_Service_Datastore_RollbackResponse');
class_alias(RunAggregationQueryRequest::class, 'Google_Service_Datastore_RunAggregationQueryRequest');
class_alias(RunAggregationQueryResponse::class, 'Google_Service_Datastore_RunAggregationQueryResponse');
class_alias(RunQueryRequest::class, 'Google_Service_Datastore_RunQueryRequest');
class_alias(RunQueryResponse::class, 'Google_Service_Datastore_RunQueryResponse');
class_alias(Status::class, 'Google_Service_Datastore_Status');
class_alias(TransactionOptions::class, 'Google_Service_Datastore_TransactionOptions');
class_alias(Value::class, 'Google_Service_Datastore_Value');
