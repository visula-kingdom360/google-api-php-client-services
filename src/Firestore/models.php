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

namespace Google\Service\Firestore;

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

class AggregationResult extends \Google\Model
{
  /** @var Value[] */
  public $aggregateFields;
  protected $aggregateFieldsType = Value::class;
  protected $aggregateFieldsDataType = 'map';
  /** @param Value[] */
  public function setAggregateFields($aggregateFields)
  {
    $this->aggregateFields = $aggregateFields;
  }
  /** @return Value[] */
  public function getAggregateFields()
  {
    return $this->aggregateFields;
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

class BatchGetDocumentsRequest extends \Google\Collection
{
  /** @var string[] */
  public $documents;
  /** @var DocumentMask */
  public $mask;
  /** @var TransactionOptions */
  public $newTransaction;
  /** @var string */
  public $readTime;
  /** @var string */
  public $transaction;
  protected $collection_key = 'documents';
  protected $maskType = DocumentMask::class;
  protected $maskDataType = '';
  protected $newTransactionType = TransactionOptions::class;
  protected $newTransactionDataType = '';
  /** @param string[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return string[] */
  public function getDocuments()
  {
    return $this->documents;
  }
  /** @param DocumentMask */
  public function setMask(DocumentMask $mask)
  {
    $this->mask = $mask;
  }
  /** @return DocumentMask */
  public function getMask()
  {
    return $this->mask;
  }
  /** @param TransactionOptions */
  public function setNewTransaction(TransactionOptions $newTransaction)
  {
    $this->newTransaction = $newTransaction;
  }
  /** @return TransactionOptions */
  public function getNewTransaction()
  {
    return $this->newTransaction;
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

class BatchGetDocumentsResponse extends \Google\Model
{
  /** @var Document */
  public $found;
  /** @var string */
  public $missing;
  /** @var string */
  public $readTime;
  /** @var string */
  public $transaction;
  protected $foundType = Document::class;
  protected $foundDataType = '';
  /** @param Document */
  public function setFound(Document $found)
  {
    $this->found = $found;
  }
  /** @return Document */
  public function getFound()
  {
    return $this->found;
  }
  /** @param string */
  public function setMissing($missing)
  {
    $this->missing = $missing;
  }
  /** @return string */
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

class BatchWriteRequest extends \Google\Collection
{
  /** @var string[] */
  public $labels;
  /** @var Write[] */
  public $writes;
  protected $collection_key = 'writes';
  protected $writesType = Write::class;
  protected $writesDataType = 'array';
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
  /** @param Write[] */
  public function setWrites($writes)
  {
    $this->writes = $writes;
  }
  /** @return Write[] */
  public function getWrites()
  {
    return $this->writes;
  }
}

class BatchWriteResponse extends \Google\Collection
{
  /** @var Status[] */
  public $status;
  /** @var WriteResult[] */
  public $writeResults;
  protected $collection_key = 'writeResults';
  protected $statusType = Status::class;
  protected $statusDataType = 'array';
  protected $writeResultsType = WriteResult::class;
  protected $writeResultsDataType = 'array';
  /** @param Status[] */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return Status[] */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param WriteResult[] */
  public function setWriteResults($writeResults)
  {
    $this->writeResults = $writeResults;
  }
  /** @return WriteResult[] */
  public function getWriteResults()
  {
    return $this->writeResults;
  }
}

class BeginTransactionRequest extends \Google\Model
{
  /** @var TransactionOptions */
  public $options;
  protected $optionsType = TransactionOptions::class;
  protected $optionsDataType = '';
  /** @param TransactionOptions */
  public function setOptions(TransactionOptions $options)
  {
    $this->options = $options;
  }
  /** @return TransactionOptions */
  public function getOptions()
  {
    return $this->options;
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

class CollectionSelector extends \Google\Model
{
  /** @var bool */
  public $allDescendants;
  /** @var string */
  public $collectionId;

  /** @param bool */
  public function setAllDescendants($allDescendants)
  {
    $this->allDescendants = $allDescendants;
  }
  /** @return bool */
  public function getAllDescendants()
  {
    return $this->allDescendants;
  }
  /** @param string */
  public function setCollectionId($collectionId)
  {
    $this->collectionId = $collectionId;
  }
  /** @return string */
  public function getCollectionId()
  {
    return $this->collectionId;
  }
}

class CommitRequest extends \Google\Collection
{
  /** @var string */
  public $transaction;
  /** @var Write[] */
  public $writes;
  protected $collection_key = 'writes';
  protected $writesType = Write::class;
  protected $writesDataType = 'array';
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
  /** @param Write[] */
  public function setWrites($writes)
  {
    $this->writes = $writes;
  }
  /** @return Write[] */
  public function getWrites()
  {
    return $this->writes;
  }
}

class CommitResponse extends \Google\Collection
{
  /** @var string */
  public $commitTime;
  /** @var WriteResult[] */
  public $writeResults;
  protected $collection_key = 'writeResults';
  protected $writeResultsType = WriteResult::class;
  protected $writeResultsDataType = 'array';
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
  /** @param WriteResult[] */
  public function setWriteResults($writeResults)
  {
    $this->writeResults = $writeResults;
  }
  /** @return WriteResult[] */
  public function getWriteResults()
  {
    return $this->writeResults;
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

class Cursor extends \Google\Collection
{
  /** @var bool */
  public $before;
  /** @var Value[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Value::class;
  protected $valuesDataType = 'array';
  /** @param bool */
  public function setBefore($before)
  {
    $this->before = $before;
  }
  /** @return bool */
  public function getBefore()
  {
    return $this->before;
  }
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

class Document extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var Value[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $fieldsType = Value::class;
  protected $fieldsDataType = 'map';
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
  /** @param Value[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Value[] */
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

class DocumentChange extends \Google\Collection
{
  /** @var Document */
  public $document;
  /** @var int[] */
  public $removedTargetIds;
  /** @var int[] */
  public $targetIds;
  protected $collection_key = 'targetIds';
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param int[] */
  public function setRemovedTargetIds($removedTargetIds)
  {
    $this->removedTargetIds = $removedTargetIds;
  }
  /** @return int[] */
  public function getRemovedTargetIds()
  {
    return $this->removedTargetIds;
  }
  /** @param int[] */
  public function setTargetIds($targetIds)
  {
    $this->targetIds = $targetIds;
  }
  /** @return int[] */
  public function getTargetIds()
  {
    return $this->targetIds;
  }
}

class DocumentDelete extends \Google\Collection
{
  /** @var string */
  public $document;
  /** @var string */
  public $readTime;
  /** @var int[] */
  public $removedTargetIds;
  protected $collection_key = 'removedTargetIds';
  /** @param string */
  public function setDocument($document)
  {
    $this->document = $document;
  }
  /** @return string */
  public function getDocument()
  {
    return $this->document;
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
  /** @param int[] */
  public function setRemovedTargetIds($removedTargetIds)
  {
    $this->removedTargetIds = $removedTargetIds;
  }
  /** @return int[] */
  public function getRemovedTargetIds()
  {
    return $this->removedTargetIds;
  }
}

class DocumentMask extends \Google\Collection
{
  /** @var string[] */
  public $fieldPaths;
  protected $collection_key = 'fieldPaths';
  /** @param string[] */
  public function setFieldPaths($fieldPaths)
  {
    $this->fieldPaths = $fieldPaths;
  }
  /** @return string[] */
  public function getFieldPaths()
  {
    return $this->fieldPaths;
  }
}

class DocumentRemove extends \Google\Collection
{
  /** @var string */
  public $document;
  /** @var string */
  public $readTime;
  /** @var int[] */
  public $removedTargetIds;
  protected $collection_key = 'removedTargetIds';
  /** @param string */
  public function setDocument($document)
  {
    $this->document = $document;
  }
  /** @return string */
  public function getDocument()
  {
    return $this->document;
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
  /** @param int[] */
  public function setRemovedTargetIds($removedTargetIds)
  {
    $this->removedTargetIds = $removedTargetIds;
  }
  /** @return int[] */
  public function getRemovedTargetIds()
  {
    return $this->removedTargetIds;
  }
}

class DocumentTransform extends \Google\Collection
{
  /** @var string */
  public $document;
  /** @var FieldTransform[] */
  public $fieldTransforms;
  protected $collection_key = 'fieldTransforms';
  protected $fieldTransformsType = FieldTransform::class;
  protected $fieldTransformsDataType = 'array';
  /** @param string */
  public function setDocument($document)
  {
    $this->document = $document;
  }
  /** @return string */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param FieldTransform[] */
  public function setFieldTransforms($fieldTransforms)
  {
    $this->fieldTransforms = $fieldTransforms;
  }
  /** @return FieldTransform[] */
  public function getFieldTransforms()
  {
    return $this->fieldTransforms;
  }
}

class DocumentsTarget extends \Google\Collection
{
  /** @var string[] */
  public $documents;
  protected $collection_key = 'documents';
  /** @param string[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return string[] */
  public function getDocuments()
  {
    return $this->documents;
  }
}

class ExistenceFilter extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var int */
  public $targetId;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param int */
  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  /** @return int */
  public function getTargetId()
  {
    return $this->targetId;
  }
}

class FieldFilter extends \Google\Model
{
  /** @var FieldReference */
  public $field;
  /** @var string */
  public $op;
  /** @var Value */
  public $value;
  protected $fieldType = FieldReference::class;
  protected $fieldDataType = '';
  protected $valueType = Value::class;
  protected $valueDataType = '';
  /** @param FieldReference */
  public function setField(FieldReference $field)
  {
    $this->field = $field;
  }
  /** @return FieldReference */
  public function getField()
  {
    return $this->field;
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

class FieldReference extends \Google\Model
{
  /** @var string */
  public $fieldPath;

  /** @param string */
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  /** @return string */
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
}

class FieldTransform extends \Google\Model
{
  /** @var ArrayValue */
  public $appendMissingElements;
  /** @var string */
  public $fieldPath;
  /** @var Value */
  public $increment;
  /** @var Value */
  public $maximum;
  /** @var Value */
  public $minimum;
  /** @var ArrayValue */
  public $removeAllFromArray;
  /** @var string */
  public $setToServerValue;
  protected $appendMissingElementsType = ArrayValue::class;
  protected $appendMissingElementsDataType = '';
  protected $incrementType = Value::class;
  protected $incrementDataType = '';
  protected $maximumType = Value::class;
  protected $maximumDataType = '';
  protected $minimumType = Value::class;
  protected $minimumDataType = '';
  protected $removeAllFromArrayType = ArrayValue::class;
  protected $removeAllFromArrayDataType = '';
  /** @param ArrayValue */
  public function setAppendMissingElements(ArrayValue $appendMissingElements)
  {
    $this->appendMissingElements = $appendMissingElements;
  }
  /** @return ArrayValue */
  public function getAppendMissingElements()
  {
    return $this->appendMissingElements;
  }
  /** @param string */
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  /** @return string */
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
  /** @param Value */
  public function setIncrement(Value $increment)
  {
    $this->increment = $increment;
  }
  /** @return Value */
  public function getIncrement()
  {
    return $this->increment;
  }
  /** @param Value */
  public function setMaximum(Value $maximum)
  {
    $this->maximum = $maximum;
  }
  /** @return Value */
  public function getMaximum()
  {
    return $this->maximum;
  }
  /** @param Value */
  public function setMinimum(Value $minimum)
  {
    $this->minimum = $minimum;
  }
  /** @return Value */
  public function getMinimum()
  {
    return $this->minimum;
  }
  /** @param ArrayValue */
  public function setRemoveAllFromArray(ArrayValue $removeAllFromArray)
  {
    $this->removeAllFromArray = $removeAllFromArray;
  }
  /** @return ArrayValue */
  public function getRemoveAllFromArray()
  {
    return $this->removeAllFromArray;
  }
  /** @param string */
  public function setSetToServerValue($setToServerValue)
  {
    $this->setToServerValue = $setToServerValue;
  }
  /** @return string */
  public function getSetToServerValue()
  {
    return $this->setToServerValue;
  }
}

class Filter extends \Google\Model
{
  /** @var CompositeFilter */
  public $compositeFilter;
  /** @var FieldFilter */
  public $fieldFilter;
  /** @var UnaryFilter */
  public $unaryFilter;
  protected $compositeFilterType = CompositeFilter::class;
  protected $compositeFilterDataType = '';
  protected $fieldFilterType = FieldFilter::class;
  protected $fieldFilterDataType = '';
  protected $unaryFilterType = UnaryFilter::class;
  protected $unaryFilterDataType = '';
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
  /** @param FieldFilter */
  public function setFieldFilter(FieldFilter $fieldFilter)
  {
    $this->fieldFilter = $fieldFilter;
  }
  /** @return FieldFilter */
  public function getFieldFilter()
  {
    return $this->fieldFilter;
  }
  /** @param UnaryFilter */
  public function setUnaryFilter(UnaryFilter $unaryFilter)
  {
    $this->unaryFilter = $unaryFilter;
  }
  /** @return UnaryFilter */
  public function getUnaryFilter()
  {
    return $this->unaryFilter;
  }
}

class FirestoreEmpty extends \Google\Model
{
}

class FirestoreReadOnly extends \Google\Model
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

class GoogleFirestoreAdminV1Database extends \Google\Model
{
  /** @var string */
  public $appEngineIntegrationMode;
  /** @var string */
  public $concurrencyMode;
  /** @var string */
  public $etag;
  /** @var string */
  public $keyPrefix;
  /** @var string */
  public $locationId;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

  /** @param string */
  public function setAppEngineIntegrationMode($appEngineIntegrationMode)
  {
    $this->appEngineIntegrationMode = $appEngineIntegrationMode;
  }
  /** @return string */
  public function getAppEngineIntegrationMode()
  {
    return $this->appEngineIntegrationMode;
  }
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
  public function setKeyPrefix($keyPrefix)
  {
    $this->keyPrefix = $keyPrefix;
  }
  /** @return string */
  public function getKeyPrefix()
  {
    return $this->keyPrefix;
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

class GoogleFirestoreAdminV1ExportDocumentsMetadata extends \Google\Collection
{
  /** @var string[] */
  public $collectionIds;
  /** @var string */
  public $endTime;
  /** @var string */
  public $operationState;
  /** @var string */
  public $outputUriPrefix;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressDocuments;
  /** @var string */
  public $startTime;
  protected $collection_key = 'collectionIds';
  protected $progressBytesType = GoogleFirestoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressDocumentsType = GoogleFirestoreAdminV1Progress::class;
  protected $progressDocumentsDataType = '';
  /** @param string[] */
  public function setCollectionIds($collectionIds)
  {
    $this->collectionIds = $collectionIds;
  }
  /** @return string[] */
  public function getCollectionIds()
  {
    return $this->collectionIds;
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
  public function setOperationState($operationState)
  {
    $this->operationState = $operationState;
  }
  /** @return string */
  public function getOperationState()
  {
    return $this->operationState;
  }
  /** @param string */
  public function setOutputUriPrefix($outputUriPrefix)
  {
    $this->outputUriPrefix = $outputUriPrefix;
  }
  /** @return string */
  public function getOutputUriPrefix()
  {
    return $this->outputUriPrefix;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressBytes(GoogleFirestoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressDocuments(GoogleFirestoreAdminV1Progress $progressDocuments)
  {
    $this->progressDocuments = $progressDocuments;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressDocuments()
  {
    return $this->progressDocuments;
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

class GoogleFirestoreAdminV1ExportDocumentsRequest extends \Google\Collection
{
  /** @var string[] */
  public $collectionIds;
  /** @var string[] */
  public $namespaceIds;
  /** @var string */
  public $outputUriPrefix;
  protected $collection_key = 'namespaceIds';
  /** @param string[] */
  public function setCollectionIds($collectionIds)
  {
    $this->collectionIds = $collectionIds;
  }
  /** @return string[] */
  public function getCollectionIds()
  {
    return $this->collectionIds;
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
  /** @param string */
  public function setOutputUriPrefix($outputUriPrefix)
  {
    $this->outputUriPrefix = $outputUriPrefix;
  }
  /** @return string */
  public function getOutputUriPrefix()
  {
    return $this->outputUriPrefix;
  }
}

class GoogleFirestoreAdminV1ExportDocumentsResponse extends \Google\Model
{
  /** @var string */
  public $outputUriPrefix;

  /** @param string */
  public function setOutputUriPrefix($outputUriPrefix)
  {
    $this->outputUriPrefix = $outputUriPrefix;
  }
  /** @return string */
  public function getOutputUriPrefix()
  {
    return $this->outputUriPrefix;
  }
}

class GoogleFirestoreAdminV1Field extends \Google\Model
{
  /** @var GoogleFirestoreAdminV1IndexConfig */
  public $indexConfig;
  /** @var string */
  public $name;
  /** @var GoogleFirestoreAdminV1TtlConfig */
  public $ttlConfig;
  protected $indexConfigType = GoogleFirestoreAdminV1IndexConfig::class;
  protected $indexConfigDataType = '';
  protected $ttlConfigType = GoogleFirestoreAdminV1TtlConfig::class;
  protected $ttlConfigDataType = '';
  /** @param GoogleFirestoreAdminV1IndexConfig */
  public function setIndexConfig(GoogleFirestoreAdminV1IndexConfig $indexConfig)
  {
    $this->indexConfig = $indexConfig;
  }
  /** @return GoogleFirestoreAdminV1IndexConfig */
  public function getIndexConfig()
  {
    return $this->indexConfig;
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
  /** @param GoogleFirestoreAdminV1TtlConfig */
  public function setTtlConfig(GoogleFirestoreAdminV1TtlConfig $ttlConfig)
  {
    $this->ttlConfig = $ttlConfig;
  }
  /** @return GoogleFirestoreAdminV1TtlConfig */
  public function getTtlConfig()
  {
    return $this->ttlConfig;
  }
}

class GoogleFirestoreAdminV1FieldOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $field;
  /** @var GoogleFirestoreAdminV1IndexConfigDelta[] */
  public $indexConfigDeltas;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressDocuments;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var GoogleFirestoreAdminV1TtlConfigDelta */
  public $ttlConfigDelta;
  protected $collection_key = 'indexConfigDeltas';
  protected $indexConfigDeltasType = GoogleFirestoreAdminV1IndexConfigDelta::class;
  protected $indexConfigDeltasDataType = 'array';
  protected $progressBytesType = GoogleFirestoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressDocumentsType = GoogleFirestoreAdminV1Progress::class;
  protected $progressDocumentsDataType = '';
  protected $ttlConfigDeltaType = GoogleFirestoreAdminV1TtlConfigDelta::class;
  protected $ttlConfigDeltaDataType = '';
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
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param GoogleFirestoreAdminV1IndexConfigDelta[] */
  public function setIndexConfigDeltas($indexConfigDeltas)
  {
    $this->indexConfigDeltas = $indexConfigDeltas;
  }
  /** @return GoogleFirestoreAdminV1IndexConfigDelta[] */
  public function getIndexConfigDeltas()
  {
    return $this->indexConfigDeltas;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressBytes(GoogleFirestoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressDocuments(GoogleFirestoreAdminV1Progress $progressDocuments)
  {
    $this->progressDocuments = $progressDocuments;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressDocuments()
  {
    return $this->progressDocuments;
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
  /** @param GoogleFirestoreAdminV1TtlConfigDelta */
  public function setTtlConfigDelta(GoogleFirestoreAdminV1TtlConfigDelta $ttlConfigDelta)
  {
    $this->ttlConfigDelta = $ttlConfigDelta;
  }
  /** @return GoogleFirestoreAdminV1TtlConfigDelta */
  public function getTtlConfigDelta()
  {
    return $this->ttlConfigDelta;
  }
}

class GoogleFirestoreAdminV1ImportDocumentsMetadata extends \Google\Collection
{
  /** @var string[] */
  public $collectionIds;
  /** @var string */
  public $endTime;
  /** @var string */
  public $inputUriPrefix;
  /** @var string */
  public $operationState;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressDocuments;
  /** @var string */
  public $startTime;
  protected $collection_key = 'collectionIds';
  protected $progressBytesType = GoogleFirestoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressDocumentsType = GoogleFirestoreAdminV1Progress::class;
  protected $progressDocumentsDataType = '';
  /** @param string[] */
  public function setCollectionIds($collectionIds)
  {
    $this->collectionIds = $collectionIds;
  }
  /** @return string[] */
  public function getCollectionIds()
  {
    return $this->collectionIds;
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
  public function setInputUriPrefix($inputUriPrefix)
  {
    $this->inputUriPrefix = $inputUriPrefix;
  }
  /** @return string */
  public function getInputUriPrefix()
  {
    return $this->inputUriPrefix;
  }
  /** @param string */
  public function setOperationState($operationState)
  {
    $this->operationState = $operationState;
  }
  /** @return string */
  public function getOperationState()
  {
    return $this->operationState;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressBytes(GoogleFirestoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressDocuments(GoogleFirestoreAdminV1Progress $progressDocuments)
  {
    $this->progressDocuments = $progressDocuments;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressDocuments()
  {
    return $this->progressDocuments;
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

class GoogleFirestoreAdminV1ImportDocumentsRequest extends \Google\Collection
{
  /** @var string[] */
  public $collectionIds;
  /** @var string */
  public $inputUriPrefix;
  /** @var string[] */
  public $namespaceIds;
  protected $collection_key = 'namespaceIds';
  /** @param string[] */
  public function setCollectionIds($collectionIds)
  {
    $this->collectionIds = $collectionIds;
  }
  /** @return string[] */
  public function getCollectionIds()
  {
    return $this->collectionIds;
  }
  /** @param string */
  public function setInputUriPrefix($inputUriPrefix)
  {
    $this->inputUriPrefix = $inputUriPrefix;
  }
  /** @return string */
  public function getInputUriPrefix()
  {
    return $this->inputUriPrefix;
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

class GoogleFirestoreAdminV1Index extends \Google\Collection
{
  /** @var string */
  public $apiScope;
  /** @var GoogleFirestoreAdminV1IndexField[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string */
  public $queryScope;
  /** @var string */
  public $state;
  protected $collection_key = 'fields';
  protected $fieldsType = GoogleFirestoreAdminV1IndexField::class;
  protected $fieldsDataType = 'array';
  /** @param string */
  public function setApiScope($apiScope)
  {
    $this->apiScope = $apiScope;
  }
  /** @return string */
  public function getApiScope()
  {
    return $this->apiScope;
  }
  /** @param GoogleFirestoreAdminV1IndexField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleFirestoreAdminV1IndexField[] */
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
  public function setQueryScope($queryScope)
  {
    $this->queryScope = $queryScope;
  }
  /** @return string */
  public function getQueryScope()
  {
    return $this->queryScope;
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

class GoogleFirestoreAdminV1IndexConfig extends \Google\Collection
{
  /** @var string */
  public $ancestorField;
  /** @var GoogleFirestoreAdminV1Index[] */
  public $indexes;
  /** @var bool */
  public $reverting;
  /** @var bool */
  public $usesAncestorConfig;
  protected $collection_key = 'indexes';
  protected $indexesType = GoogleFirestoreAdminV1Index::class;
  protected $indexesDataType = 'array';
  /** @param string */
  public function setAncestorField($ancestorField)
  {
    $this->ancestorField = $ancestorField;
  }
  /** @return string */
  public function getAncestorField()
  {
    return $this->ancestorField;
  }
  /** @param GoogleFirestoreAdminV1Index[] */
  public function setIndexes($indexes)
  {
    $this->indexes = $indexes;
  }
  /** @return GoogleFirestoreAdminV1Index[] */
  public function getIndexes()
  {
    return $this->indexes;
  }
  /** @param bool */
  public function setReverting($reverting)
  {
    $this->reverting = $reverting;
  }
  /** @return bool */
  public function getReverting()
  {
    return $this->reverting;
  }
  /** @param bool */
  public function setUsesAncestorConfig($usesAncestorConfig)
  {
    $this->usesAncestorConfig = $usesAncestorConfig;
  }
  /** @return bool */
  public function getUsesAncestorConfig()
  {
    return $this->usesAncestorConfig;
  }
}

class GoogleFirestoreAdminV1IndexConfigDelta extends \Google\Model
{
  /** @var string */
  public $changeType;
  /** @var GoogleFirestoreAdminV1Index */
  public $index;
  protected $indexType = GoogleFirestoreAdminV1Index::class;
  protected $indexDataType = '';
  /** @param string */
  public function setChangeType($changeType)
  {
    $this->changeType = $changeType;
  }
  /** @return string */
  public function getChangeType()
  {
    return $this->changeType;
  }
  /** @param GoogleFirestoreAdminV1Index */
  public function setIndex(GoogleFirestoreAdminV1Index $index)
  {
    $this->index = $index;
  }
  /** @return GoogleFirestoreAdminV1Index */
  public function getIndex()
  {
    return $this->index;
  }
}

class GoogleFirestoreAdminV1IndexField extends \Google\Model
{
  /** @var string */
  public $arrayConfig;
  /** @var string */
  public $fieldPath;
  /** @var string */
  public $order;

  /** @param string */
  public function setArrayConfig($arrayConfig)
  {
    $this->arrayConfig = $arrayConfig;
  }
  /** @return string */
  public function getArrayConfig()
  {
    return $this->arrayConfig;
  }
  /** @param string */
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  /** @return string */
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
  /** @param string */
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return string */
  public function getOrder()
  {
    return $this->order;
  }
}

class GoogleFirestoreAdminV1IndexOperationMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $index;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressBytes;
  /** @var GoogleFirestoreAdminV1Progress */
  public $progressDocuments;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  protected $progressBytesType = GoogleFirestoreAdminV1Progress::class;
  protected $progressBytesDataType = '';
  protected $progressDocumentsType = GoogleFirestoreAdminV1Progress::class;
  protected $progressDocumentsDataType = '';
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
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressBytes(GoogleFirestoreAdminV1Progress $progressBytes)
  {
    $this->progressBytes = $progressBytes;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressBytes()
  {
    return $this->progressBytes;
  }
  /** @param GoogleFirestoreAdminV1Progress */
  public function setProgressDocuments(GoogleFirestoreAdminV1Progress $progressDocuments)
  {
    $this->progressDocuments = $progressDocuments;
  }
  /** @return GoogleFirestoreAdminV1Progress */
  public function getProgressDocuments()
  {
    return $this->progressDocuments;
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

class GoogleFirestoreAdminV1ListDatabasesResponse extends \Google\Collection
{
  /** @var GoogleFirestoreAdminV1Database[] */
  public $databases;
  protected $collection_key = 'databases';
  protected $databasesType = GoogleFirestoreAdminV1Database::class;
  protected $databasesDataType = 'array';
  /** @param GoogleFirestoreAdminV1Database[] */
  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }
  /** @return GoogleFirestoreAdminV1Database[] */
  public function getDatabases()
  {
    return $this->databases;
  }
}

class GoogleFirestoreAdminV1ListFieldsResponse extends \Google\Collection
{
  /** @var GoogleFirestoreAdminV1Field[] */
  public $fields;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'fields';
  protected $fieldsType = GoogleFirestoreAdminV1Field::class;
  protected $fieldsDataType = 'array';
  /** @param GoogleFirestoreAdminV1Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleFirestoreAdminV1Field[] */
  public function getFields()
  {
    return $this->fields;
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

class GoogleFirestoreAdminV1ListIndexesResponse extends \Google\Collection
{
  /** @var GoogleFirestoreAdminV1Index[] */
  public $indexes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'indexes';
  protected $indexesType = GoogleFirestoreAdminV1Index::class;
  protected $indexesDataType = 'array';
  /** @param GoogleFirestoreAdminV1Index[] */
  public function setIndexes($indexes)
  {
    $this->indexes = $indexes;
  }
  /** @return GoogleFirestoreAdminV1Index[] */
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

class GoogleFirestoreAdminV1LocationMetadata extends \Google\Model
{
}

class GoogleFirestoreAdminV1Progress extends \Google\Model
{
  /** @var string */
  public $completedWork;
  /** @var string */
  public $estimatedWork;

  /** @param string */
  public function setCompletedWork($completedWork)
  {
    $this->completedWork = $completedWork;
  }
  /** @return string */
  public function getCompletedWork()
  {
    return $this->completedWork;
  }
  /** @param string */
  public function setEstimatedWork($estimatedWork)
  {
    $this->estimatedWork = $estimatedWork;
  }
  /** @return string */
  public function getEstimatedWork()
  {
    return $this->estimatedWork;
  }
}

class GoogleFirestoreAdminV1TtlConfig extends \Google\Model
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

class GoogleFirestoreAdminV1TtlConfigDelta extends \Google\Model
{
  /** @var string */
  public $changeType;

  /** @param string */
  public function setChangeType($changeType)
  {
    $this->changeType = $changeType;
  }
  /** @return string */
  public function getChangeType()
  {
    return $this->changeType;
  }
}

class GoogleFirestoreAdminV1UpdateDatabaseMetadata extends \Google\Model
{
}

class GoogleLongrunningCancelOperationRequest extends \Google\Model
{
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

class ListCollectionIdsRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $readTime;

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

class ListCollectionIdsResponse extends \Google\Collection
{
  /** @var string[] */
  public $collectionIds;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'collectionIds';
  /** @param string[] */
  public function setCollectionIds($collectionIds)
  {
    $this->collectionIds = $collectionIds;
  }
  /** @return string[] */
  public function getCollectionIds()
  {
    return $this->collectionIds;
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

class ListDocumentsResponse extends \Google\Collection
{
  /** @var Document[] */
  public $documents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'documents';
  protected $documentsType = Document::class;
  protected $documentsDataType = 'array';
  /** @param Document[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return Document[] */
  public function getDocuments()
  {
    return $this->documents;
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

class ListenRequest extends \Google\Model
{
  /** @var Target */
  public $addTarget;
  /** @var string[] */
  public $labels;
  /** @var int */
  public $removeTarget;
  protected $addTargetType = Target::class;
  protected $addTargetDataType = '';
  /** @param Target */
  public function setAddTarget(Target $addTarget)
  {
    $this->addTarget = $addTarget;
  }
  /** @return Target */
  public function getAddTarget()
  {
    return $this->addTarget;
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
  /** @param int */
  public function setRemoveTarget($removeTarget)
  {
    $this->removeTarget = $removeTarget;
  }
  /** @return int */
  public function getRemoveTarget()
  {
    return $this->removeTarget;
  }
}

class ListenResponse extends \Google\Model
{
  /** @var DocumentChange */
  public $documentChange;
  /** @var DocumentDelete */
  public $documentDelete;
  /** @var DocumentRemove */
  public $documentRemove;
  /** @var ExistenceFilter */
  public $filter;
  /** @var TargetChange */
  public $targetChange;
  protected $documentChangeType = DocumentChange::class;
  protected $documentChangeDataType = '';
  protected $documentDeleteType = DocumentDelete::class;
  protected $documentDeleteDataType = '';
  protected $documentRemoveType = DocumentRemove::class;
  protected $documentRemoveDataType = '';
  protected $filterType = ExistenceFilter::class;
  protected $filterDataType = '';
  protected $targetChangeType = TargetChange::class;
  protected $targetChangeDataType = '';
  /** @param DocumentChange */
  public function setDocumentChange(DocumentChange $documentChange)
  {
    $this->documentChange = $documentChange;
  }
  /** @return DocumentChange */
  public function getDocumentChange()
  {
    return $this->documentChange;
  }
  /** @param DocumentDelete */
  public function setDocumentDelete(DocumentDelete $documentDelete)
  {
    $this->documentDelete = $documentDelete;
  }
  /** @return DocumentDelete */
  public function getDocumentDelete()
  {
    return $this->documentDelete;
  }
  /** @param DocumentRemove */
  public function setDocumentRemove(DocumentRemove $documentRemove)
  {
    $this->documentRemove = $documentRemove;
  }
  /** @return DocumentRemove */
  public function getDocumentRemove()
  {
    return $this->documentRemove;
  }
  /** @param ExistenceFilter */
  public function setFilter(ExistenceFilter $filter)
  {
    $this->filter = $filter;
  }
  /** @return ExistenceFilter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param TargetChange */
  public function setTargetChange(TargetChange $targetChange)
  {
    $this->targetChange = $targetChange;
  }
  /** @return TargetChange */
  public function getTargetChange()
  {
    return $this->targetChange;
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

class MapValue extends \Google\Model
{
  /** @var Value[] */
  public $fields;
  protected $fieldsType = Value::class;
  protected $fieldsDataType = 'map';
  /** @param Value[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Value[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class Order extends \Google\Model
{
  /** @var string */
  public $direction;
  /** @var FieldReference */
  public $field;
  protected $fieldType = FieldReference::class;
  protected $fieldDataType = '';
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
  /** @param FieldReference */
  public function setField(FieldReference $field)
  {
    $this->field = $field;
  }
  /** @return FieldReference */
  public function getField()
  {
    return $this->field;
  }
}

class PartitionQueryRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $partitionCount;
  /** @var string */
  public $readTime;
  /** @var StructuredQuery */
  public $structuredQuery;
  protected $structuredQueryType = StructuredQuery::class;
  protected $structuredQueryDataType = '';
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
  public function setPartitionCount($partitionCount)
  {
    $this->partitionCount = $partitionCount;
  }
  /** @return string */
  public function getPartitionCount()
  {
    return $this->partitionCount;
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
  /** @param StructuredQuery */
  public function setStructuredQuery(StructuredQuery $structuredQuery)
  {
    $this->structuredQuery = $structuredQuery;
  }
  /** @return StructuredQuery */
  public function getStructuredQuery()
  {
    return $this->structuredQuery;
  }
}

class PartitionQueryResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Cursor[] */
  public $partitions;
  protected $collection_key = 'partitions';
  protected $partitionsType = Cursor::class;
  protected $partitionsDataType = 'array';
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
  /** @param Cursor[] */
  public function setPartitions($partitions)
  {
    $this->partitions = $partitions;
  }
  /** @return Cursor[] */
  public function getPartitions()
  {
    return $this->partitions;
  }
}

class Precondition extends \Google\Model
{
  /** @var bool */
  public $exists;
  /** @var string */
  public $updateTime;

  /** @param bool */
  public function setExists($exists)
  {
    $this->exists = $exists;
  }
  /** @return bool */
  public function getExists()
  {
    return $this->exists;
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

class Projection extends \Google\Collection
{
  /** @var FieldReference[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = FieldReference::class;
  protected $fieldsDataType = 'array';
  /** @param FieldReference[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return FieldReference[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class QueryTarget extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var StructuredQuery */
  public $structuredQuery;
  protected $structuredQueryType = StructuredQuery::class;
  protected $structuredQueryDataType = '';
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
  /** @param StructuredQuery */
  public function setStructuredQuery(StructuredQuery $structuredQuery)
  {
    $this->structuredQuery = $structuredQuery;
  }
  /** @return StructuredQuery */
  public function getStructuredQuery()
  {
    return $this->structuredQuery;
  }
}

class ReadWrite extends \Google\Model
{
  /** @var string */
  public $retryTransaction;

  /** @param string */
  public function setRetryTransaction($retryTransaction)
  {
    $this->retryTransaction = $retryTransaction;
  }
  /** @return string */
  public function getRetryTransaction()
  {
    return $this->retryTransaction;
  }
}

class RollbackRequest extends \Google\Model
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

class RunAggregationQueryRequest extends \Google\Model
{
  /** @var TransactionOptions */
  public $newTransaction;
  /** @var string */
  public $readTime;
  /** @var StructuredAggregationQuery */
  public $structuredAggregationQuery;
  /** @var string */
  public $transaction;
  protected $newTransactionType = TransactionOptions::class;
  protected $newTransactionDataType = '';
  protected $structuredAggregationQueryType = StructuredAggregationQuery::class;
  protected $structuredAggregationQueryDataType = '';
  /** @param TransactionOptions */
  public function setNewTransaction(TransactionOptions $newTransaction)
  {
    $this->newTransaction = $newTransaction;
  }
  /** @return TransactionOptions */
  public function getNewTransaction()
  {
    return $this->newTransaction;
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
  /** @param StructuredAggregationQuery */
  public function setStructuredAggregationQuery(StructuredAggregationQuery $structuredAggregationQuery)
  {
    $this->structuredAggregationQuery = $structuredAggregationQuery;
  }
  /** @return StructuredAggregationQuery */
  public function getStructuredAggregationQuery()
  {
    return $this->structuredAggregationQuery;
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

class RunAggregationQueryResponse extends \Google\Model
{
  /** @var string */
  public $readTime;
  /** @var AggregationResult */
  public $result;
  /** @var string */
  public $transaction;
  protected $resultType = AggregationResult::class;
  protected $resultDataType = '';
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
  /** @param AggregationResult */
  public function setResult(AggregationResult $result)
  {
    $this->result = $result;
  }
  /** @return AggregationResult */
  public function getResult()
  {
    return $this->result;
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

class RunQueryRequest extends \Google\Model
{
  /** @var TransactionOptions */
  public $newTransaction;
  /** @var string */
  public $readTime;
  /** @var StructuredQuery */
  public $structuredQuery;
  /** @var string */
  public $transaction;
  protected $newTransactionType = TransactionOptions::class;
  protected $newTransactionDataType = '';
  protected $structuredQueryType = StructuredQuery::class;
  protected $structuredQueryDataType = '';
  /** @param TransactionOptions */
  public function setNewTransaction(TransactionOptions $newTransaction)
  {
    $this->newTransaction = $newTransaction;
  }
  /** @return TransactionOptions */
  public function getNewTransaction()
  {
    return $this->newTransaction;
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
  /** @param StructuredQuery */
  public function setStructuredQuery(StructuredQuery $structuredQuery)
  {
    $this->structuredQuery = $structuredQuery;
  }
  /** @return StructuredQuery */
  public function getStructuredQuery()
  {
    return $this->structuredQuery;
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

class RunQueryResponse extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var bool */
  public $done;
  /** @var string */
  public $readTime;
  /** @var int */
  public $skippedResults;
  /** @var string */
  public $transaction;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
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

class StructuredAggregationQuery extends \Google\Collection
{
  /** @var Aggregation[] */
  public $aggregations;
  /** @var StructuredQuery */
  public $structuredQuery;
  protected $collection_key = 'aggregations';
  protected $aggregationsType = Aggregation::class;
  protected $aggregationsDataType = 'array';
  protected $structuredQueryType = StructuredQuery::class;
  protected $structuredQueryDataType = '';
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
  /** @param StructuredQuery */
  public function setStructuredQuery(StructuredQuery $structuredQuery)
  {
    $this->structuredQuery = $structuredQuery;
  }
  /** @return StructuredQuery */
  public function getStructuredQuery()
  {
    return $this->structuredQuery;
  }
}

class StructuredQuery extends \Google\Collection
{
  /** @var Cursor */
  public $endAt;
  /** @var CollectionSelector[] */
  public $from;
  /** @var int */
  public $limit;
  /** @var int */
  public $offset;
  /** @var Order[] */
  public $orderBy;
  /** @var Projection */
  public $select;
  /** @var Cursor */
  public $startAt;
  /** @var Filter */
  public $where;
  protected $collection_key = 'orderBy';
  protected $endAtType = Cursor::class;
  protected $endAtDataType = '';
  protected $fromType = CollectionSelector::class;
  protected $fromDataType = 'array';
  protected $orderByType = Order::class;
  protected $orderByDataType = 'array';
  protected $selectType = Projection::class;
  protected $selectDataType = '';
  protected $startAtType = Cursor::class;
  protected $startAtDataType = '';
  protected $whereType = Filter::class;
  protected $whereDataType = '';
  /** @param Cursor */
  public function setEndAt(Cursor $endAt)
  {
    $this->endAt = $endAt;
  }
  /** @return Cursor */
  public function getEndAt()
  {
    return $this->endAt;
  }
  /** @param CollectionSelector[] */
  public function setFrom($from)
  {
    $this->from = $from;
  }
  /** @return CollectionSelector[] */
  public function getFrom()
  {
    return $this->from;
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
  /** @param Order[] */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return Order[] */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /** @param Projection */
  public function setSelect(Projection $select)
  {
    $this->select = $select;
  }
  /** @return Projection */
  public function getSelect()
  {
    return $this->select;
  }
  /** @param Cursor */
  public function setStartAt(Cursor $startAt)
  {
    $this->startAt = $startAt;
  }
  /** @return Cursor */
  public function getStartAt()
  {
    return $this->startAt;
  }
  /** @param Filter */
  public function setWhere(Filter $where)
  {
    $this->where = $where;
  }
  /** @return Filter */
  public function getWhere()
  {
    return $this->where;
  }
}

class Target extends \Google\Model
{
  /** @var DocumentsTarget */
  public $documents;
  /** @var bool */
  public $once;
  /** @var QueryTarget */
  public $query;
  /** @var string */
  public $readTime;
  /** @var string */
  public $resumeToken;
  /** @var int */
  public $targetId;
  protected $documentsType = DocumentsTarget::class;
  protected $documentsDataType = '';
  protected $queryType = QueryTarget::class;
  protected $queryDataType = '';
  /** @param DocumentsTarget */
  public function setDocuments(DocumentsTarget $documents)
  {
    $this->documents = $documents;
  }
  /** @return DocumentsTarget */
  public function getDocuments()
  {
    return $this->documents;
  }
  /** @param bool */
  public function setOnce($once)
  {
    $this->once = $once;
  }
  /** @return bool */
  public function getOnce()
  {
    return $this->once;
  }
  /** @param QueryTarget */
  public function setQuery(QueryTarget $query)
  {
    $this->query = $query;
  }
  /** @return QueryTarget */
  public function getQuery()
  {
    return $this->query;
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
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /** @return string */
  public function getResumeToken()
  {
    return $this->resumeToken;
  }
  /** @param int */
  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  /** @return int */
  public function getTargetId()
  {
    return $this->targetId;
  }
}

class TargetChange extends \Google\Collection
{
  /** @var Status */
  public $cause;
  /** @var string */
  public $readTime;
  /** @var string */
  public $resumeToken;
  /** @var string */
  public $targetChangeType;
  /** @var int[] */
  public $targetIds;
  protected $collection_key = 'targetIds';
  protected $causeType = Status::class;
  protected $causeDataType = '';
  /** @param Status */
  public function setCause(Status $cause)
  {
    $this->cause = $cause;
  }
  /** @return Status */
  public function getCause()
  {
    return $this->cause;
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
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /** @return string */
  public function getResumeToken()
  {
    return $this->resumeToken;
  }
  /** @param string */
  public function setTargetChangeType($targetChangeType)
  {
    $this->targetChangeType = $targetChangeType;
  }
  /** @return string */
  public function getTargetChangeType()
  {
    return $this->targetChangeType;
  }
  /** @param int[] */
  public function setTargetIds($targetIds)
  {
    $this->targetIds = $targetIds;
  }
  /** @return int[] */
  public function getTargetIds()
  {
    return $this->targetIds;
  }
}

class TransactionOptions extends \Google\Model
{
  /** @var FirestoreReadOnly */
  public $readOnly;
  /** @var ReadWrite */
  public $readWrite;
  protected $readOnlyType = FirestoreReadOnly::class;
  protected $readOnlyDataType = '';
  protected $readWriteType = ReadWrite::class;
  protected $readWriteDataType = '';
  /** @param FirestoreReadOnly */
  public function setReadOnly(FirestoreReadOnly $readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return FirestoreReadOnly */
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

class UnaryFilter extends \Google\Model
{
  /** @var FieldReference */
  public $field;
  /** @var string */
  public $op;
  protected $fieldType = FieldReference::class;
  protected $fieldDataType = '';
  /** @param FieldReference */
  public function setField(FieldReference $field)
  {
    $this->field = $field;
  }
  /** @return FieldReference */
  public function getField()
  {
    return $this->field;
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

class Value extends \Google\Model
{
  /** @var ArrayValue */
  public $arrayValue;
  /** @var bool */
  public $booleanValue;
  /** @var string */
  public $bytesValue;
  public $doubleValue;
  /** @var LatLng */
  public $geoPointValue;
  /** @var string */
  public $integerValue;
  /** @var MapValue */
  public $mapValue;
  /** @var string */
  public $nullValue;
  /** @var string */
  public $referenceValue;
  /** @var string */
  public $stringValue;
  /** @var string */
  public $timestampValue;
  protected $arrayValueType = ArrayValue::class;
  protected $arrayValueDataType = '';
  protected $geoPointValueType = LatLng::class;
  protected $geoPointValueDataType = '';
  protected $mapValueType = MapValue::class;
  protected $mapValueDataType = '';
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
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
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
  /** @param MapValue */
  public function setMapValue(MapValue $mapValue)
  {
    $this->mapValue = $mapValue;
  }
  /** @return MapValue */
  public function getMapValue()
  {
    return $this->mapValue;
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
  public function setReferenceValue($referenceValue)
  {
    $this->referenceValue = $referenceValue;
  }
  /** @return string */
  public function getReferenceValue()
  {
    return $this->referenceValue;
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

class Write extends \Google\Collection
{
  /** @var Precondition */
  public $currentDocument;
  /** @var string */
  public $delete;
  /** @var DocumentTransform */
  public $transform;
  /** @var Document */
  public $update;
  /** @var DocumentMask */
  public $updateMask;
  /** @var FieldTransform[] */
  public $updateTransforms;
  protected $collection_key = 'updateTransforms';
  protected $currentDocumentType = Precondition::class;
  protected $currentDocumentDataType = '';
  protected $transformType = DocumentTransform::class;
  protected $transformDataType = '';
  protected $updateType = Document::class;
  protected $updateDataType = '';
  protected $updateMaskType = DocumentMask::class;
  protected $updateMaskDataType = '';
  protected $updateTransformsType = FieldTransform::class;
  protected $updateTransformsDataType = 'array';
  /** @param Precondition */
  public function setCurrentDocument(Precondition $currentDocument)
  {
    $this->currentDocument = $currentDocument;
  }
  /** @return Precondition */
  public function getCurrentDocument()
  {
    return $this->currentDocument;
  }
  /** @param string */
  public function setDelete($delete)
  {
    $this->delete = $delete;
  }
  /** @return string */
  public function getDelete()
  {
    return $this->delete;
  }
  /** @param DocumentTransform */
  public function setTransform(DocumentTransform $transform)
  {
    $this->transform = $transform;
  }
  /** @return DocumentTransform */
  public function getTransform()
  {
    return $this->transform;
  }
  /** @param Document */
  public function setUpdate(Document $update)
  {
    $this->update = $update;
  }
  /** @return Document */
  public function getUpdate()
  {
    return $this->update;
  }
  /** @param DocumentMask */
  public function setUpdateMask(DocumentMask $updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return DocumentMask */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
  /** @param FieldTransform[] */
  public function setUpdateTransforms($updateTransforms)
  {
    $this->updateTransforms = $updateTransforms;
  }
  /** @return FieldTransform[] */
  public function getUpdateTransforms()
  {
    return $this->updateTransforms;
  }
}

class WriteRequest extends \Google\Collection
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $streamId;
  /** @var string */
  public $streamToken;
  /** @var Write[] */
  public $writes;
  protected $collection_key = 'writes';
  protected $writesType = Write::class;
  protected $writesDataType = 'array';
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
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /** @return string */
  public function getStreamId()
  {
    return $this->streamId;
  }
  /** @param string */
  public function setStreamToken($streamToken)
  {
    $this->streamToken = $streamToken;
  }
  /** @return string */
  public function getStreamToken()
  {
    return $this->streamToken;
  }
  /** @param Write[] */
  public function setWrites($writes)
  {
    $this->writes = $writes;
  }
  /** @return Write[] */
  public function getWrites()
  {
    return $this->writes;
  }
}

class WriteResponse extends \Google\Collection
{
  /** @var string */
  public $commitTime;
  /** @var string */
  public $streamId;
  /** @var string */
  public $streamToken;
  /** @var WriteResult[] */
  public $writeResults;
  protected $collection_key = 'writeResults';
  protected $writeResultsType = WriteResult::class;
  protected $writeResultsDataType = 'array';
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
  /** @param string */
  public function setStreamToken($streamToken)
  {
    $this->streamToken = $streamToken;
  }
  /** @return string */
  public function getStreamToken()
  {
    return $this->streamToken;
  }
  /** @param WriteResult[] */
  public function setWriteResults($writeResults)
  {
    $this->writeResults = $writeResults;
  }
  /** @return WriteResult[] */
  public function getWriteResults()
  {
    return $this->writeResults;
  }
}

class WriteResult extends \Google\Collection
{
  /** @var Value[] */
  public $transformResults;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'transformResults';
  protected $transformResultsType = Value::class;
  protected $transformResultsDataType = 'array';
  /** @param Value[] */
  public function setTransformResults($transformResults)
  {
    $this->transformResults = $transformResults;
  }
  /** @return Value[] */
  public function getTransformResults()
  {
    return $this->transformResults;
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
class_alias(Aggregation::class, 'Google_Service_Firestore_Aggregation');
class_alias(AggregationResult::class, 'Google_Service_Firestore_AggregationResult');
class_alias(ArrayValue::class, 'Google_Service_Firestore_ArrayValue');
class_alias(BatchGetDocumentsRequest::class, 'Google_Service_Firestore_BatchGetDocumentsRequest');
class_alias(BatchGetDocumentsResponse::class, 'Google_Service_Firestore_BatchGetDocumentsResponse');
class_alias(BatchWriteRequest::class, 'Google_Service_Firestore_BatchWriteRequest');
class_alias(BatchWriteResponse::class, 'Google_Service_Firestore_BatchWriteResponse');
class_alias(BeginTransactionRequest::class, 'Google_Service_Firestore_BeginTransactionRequest');
class_alias(BeginTransactionResponse::class, 'Google_Service_Firestore_BeginTransactionResponse');
class_alias(CollectionSelector::class, 'Google_Service_Firestore_CollectionSelector');
class_alias(CommitRequest::class, 'Google_Service_Firestore_CommitRequest');
class_alias(CommitResponse::class, 'Google_Service_Firestore_CommitResponse');
class_alias(CompositeFilter::class, 'Google_Service_Firestore_CompositeFilter');
class_alias(Count::class, 'Google_Service_Firestore_Count');
class_alias(Cursor::class, 'Google_Service_Firestore_Cursor');
class_alias(Document::class, 'Google_Service_Firestore_Document');
class_alias(DocumentChange::class, 'Google_Service_Firestore_DocumentChange');
class_alias(DocumentDelete::class, 'Google_Service_Firestore_DocumentDelete');
class_alias(DocumentMask::class, 'Google_Service_Firestore_DocumentMask');
class_alias(DocumentRemove::class, 'Google_Service_Firestore_DocumentRemove');
class_alias(DocumentTransform::class, 'Google_Service_Firestore_DocumentTransform');
class_alias(DocumentsTarget::class, 'Google_Service_Firestore_DocumentsTarget');
class_alias(ExistenceFilter::class, 'Google_Service_Firestore_ExistenceFilter');
class_alias(FieldFilter::class, 'Google_Service_Firestore_FieldFilter');
class_alias(FieldReference::class, 'Google_Service_Firestore_FieldReference');
class_alias(FieldTransform::class, 'Google_Service_Firestore_FieldTransform');
class_alias(Filter::class, 'Google_Service_Firestore_Filter');
class_alias(FirestoreEmpty::class, 'Google_Service_Firestore_FirestoreEmpty');
class_alias(FirestoreReadOnly::class, 'Google_Service_Firestore_FirestoreReadOnly');
class_alias(GoogleFirestoreAdminV1Database::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1Database');
class_alias(GoogleFirestoreAdminV1ExportDocumentsMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ExportDocumentsMetadata');
class_alias(GoogleFirestoreAdminV1ExportDocumentsRequest::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ExportDocumentsRequest');
class_alias(GoogleFirestoreAdminV1ExportDocumentsResponse::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ExportDocumentsResponse');
class_alias(GoogleFirestoreAdminV1Field::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1Field');
class_alias(GoogleFirestoreAdminV1FieldOperationMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1FieldOperationMetadata');
class_alias(GoogleFirestoreAdminV1ImportDocumentsMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ImportDocumentsMetadata');
class_alias(GoogleFirestoreAdminV1ImportDocumentsRequest::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ImportDocumentsRequest');
class_alias(GoogleFirestoreAdminV1Index::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1Index');
class_alias(GoogleFirestoreAdminV1IndexConfig::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfig');
class_alias(GoogleFirestoreAdminV1IndexConfigDelta::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfigDelta');
class_alias(GoogleFirestoreAdminV1IndexField::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1IndexField');
class_alias(GoogleFirestoreAdminV1IndexOperationMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1IndexOperationMetadata');
class_alias(GoogleFirestoreAdminV1ListDatabasesResponse::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ListDatabasesResponse');
class_alias(GoogleFirestoreAdminV1ListFieldsResponse::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ListFieldsResponse');
class_alias(GoogleFirestoreAdminV1ListIndexesResponse::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ListIndexesResponse');
class_alias(GoogleFirestoreAdminV1LocationMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1LocationMetadata');
class_alias(GoogleFirestoreAdminV1Progress::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1Progress');
class_alias(GoogleFirestoreAdminV1TtlConfig::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1TtlConfig');
class_alias(GoogleFirestoreAdminV1TtlConfigDelta::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1TtlConfigDelta');
class_alias(GoogleFirestoreAdminV1UpdateDatabaseMetadata::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1UpdateDatabaseMetadata');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_Firestore_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Firestore_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Firestore_GoogleLongrunningOperation');
class_alias(LatLng::class, 'Google_Service_Firestore_LatLng');
class_alias(ListCollectionIdsRequest::class, 'Google_Service_Firestore_ListCollectionIdsRequest');
class_alias(ListCollectionIdsResponse::class, 'Google_Service_Firestore_ListCollectionIdsResponse');
class_alias(ListDocumentsResponse::class, 'Google_Service_Firestore_ListDocumentsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Firestore_ListLocationsResponse');
class_alias(ListenRequest::class, 'Google_Service_Firestore_ListenRequest');
class_alias(ListenResponse::class, 'Google_Service_Firestore_ListenResponse');
class_alias(Location::class, 'Google_Service_Firestore_Location');
class_alias(MapValue::class, 'Google_Service_Firestore_MapValue');
class_alias(Order::class, 'Google_Service_Firestore_Order');
class_alias(PartitionQueryRequest::class, 'Google_Service_Firestore_PartitionQueryRequest');
class_alias(PartitionQueryResponse::class, 'Google_Service_Firestore_PartitionQueryResponse');
class_alias(Precondition::class, 'Google_Service_Firestore_Precondition');
class_alias(Projection::class, 'Google_Service_Firestore_Projection');
class_alias(QueryTarget::class, 'Google_Service_Firestore_QueryTarget');
class_alias(ReadWrite::class, 'Google_Service_Firestore_ReadWrite');
class_alias(RollbackRequest::class, 'Google_Service_Firestore_RollbackRequest');
class_alias(RunAggregationQueryRequest::class, 'Google_Service_Firestore_RunAggregationQueryRequest');
class_alias(RunAggregationQueryResponse::class, 'Google_Service_Firestore_RunAggregationQueryResponse');
class_alias(RunQueryRequest::class, 'Google_Service_Firestore_RunQueryRequest');
class_alias(RunQueryResponse::class, 'Google_Service_Firestore_RunQueryResponse');
class_alias(Status::class, 'Google_Service_Firestore_Status');
class_alias(StructuredAggregationQuery::class, 'Google_Service_Firestore_StructuredAggregationQuery');
class_alias(StructuredQuery::class, 'Google_Service_Firestore_StructuredQuery');
class_alias(Target::class, 'Google_Service_Firestore_Target');
class_alias(TargetChange::class, 'Google_Service_Firestore_TargetChange');
class_alias(TransactionOptions::class, 'Google_Service_Firestore_TransactionOptions');
class_alias(UnaryFilter::class, 'Google_Service_Firestore_UnaryFilter');
class_alias(Value::class, 'Google_Service_Firestore_Value');
class_alias(Write::class, 'Google_Service_Firestore_Write');
class_alias(WriteRequest::class, 'Google_Service_Firestore_WriteRequest');
class_alias(WriteResponse::class, 'Google_Service_Firestore_WriteResponse');
class_alias(WriteResult::class, 'Google_Service_Firestore_WriteResult');
