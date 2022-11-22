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

namespace Google\Service\Pubsub;

class AcknowledgeRequest extends \Google\Collection
{
  /** @var string[] */
  public $ackIds;
  protected $collection_key = 'ackIds';
  /** @param string[] */
  public function setAckIds($ackIds)
  {
    $this->ackIds = $ackIds;
  }
  /** @return string[] */
  public function getAckIds()
  {
    return $this->ackIds;
  }
}

class BigQueryConfig extends \Google\Model
{
  /** @var bool */
  public $dropUnknownFields;
  /** @var string */
  public $state;
  /** @var string */
  public $table;
  /** @var bool */
  public $useTopicSchema;
  /** @var bool */
  public $writeMetadata;

  /** @param bool */
  public function setDropUnknownFields($dropUnknownFields)
  {
    $this->dropUnknownFields = $dropUnknownFields;
  }
  /** @return bool */
  public function getDropUnknownFields()
  {
    return $this->dropUnknownFields;
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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
  /** @param bool */
  public function setUseTopicSchema($useTopicSchema)
  {
    $this->useTopicSchema = $useTopicSchema;
  }
  /** @return bool */
  public function getUseTopicSchema()
  {
    return $this->useTopicSchema;
  }
  /** @param bool */
  public function setWriteMetadata($writeMetadata)
  {
    $this->writeMetadata = $writeMetadata;
  }
  /** @return bool */
  public function getWriteMetadata()
  {
    return $this->writeMetadata;
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

class CreateSnapshotRequest extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $subscription;

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
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return string */
  public function getSubscription()
  {
    return $this->subscription;
  }
}

class DeadLetterPolicy extends \Google\Model
{
  /** @var string */
  public $deadLetterTopic;
  /** @var int */
  public $maxDeliveryAttempts;

  /** @param string */
  public function setDeadLetterTopic($deadLetterTopic)
  {
    $this->deadLetterTopic = $deadLetterTopic;
  }
  /** @return string */
  public function getDeadLetterTopic()
  {
    return $this->deadLetterTopic;
  }
  /** @param int */
  public function setMaxDeliveryAttempts($maxDeliveryAttempts)
  {
    $this->maxDeliveryAttempts = $maxDeliveryAttempts;
  }
  /** @return int */
  public function getMaxDeliveryAttempts()
  {
    return $this->maxDeliveryAttempts;
  }
}

class DetachSubscriptionResponse extends \Google\Model
{
}

class ExpirationPolicy extends \Google\Model
{
  /** @var string */
  public $ttl;

  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
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

class ListSchemasResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Schema[] */
  public $schemas;
  protected $collection_key = 'schemas';
  protected $schemasType = Schema::class;
  protected $schemasDataType = 'array';
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
  /** @param Schema[] */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /** @return Schema[] */
  public function getSchemas()
  {
    return $this->schemas;
  }
}

class ListSnapshotsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Snapshot[] */
  public $snapshots;
  protected $collection_key = 'snapshots';
  protected $snapshotsType = Snapshot::class;
  protected $snapshotsDataType = 'array';
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
  /** @param Snapshot[] */
  public function setSnapshots($snapshots)
  {
    $this->snapshots = $snapshots;
  }
  /** @return Snapshot[] */
  public function getSnapshots()
  {
    return $this->snapshots;
  }
}

class ListSubscriptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Subscription[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
  protected $subscriptionsType = Subscription::class;
  protected $subscriptionsDataType = 'array';
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
  /** @param Subscription[] */
  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }
  /** @return Subscription[] */
  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}

class ListTopicSnapshotsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $snapshots;
  protected $collection_key = 'snapshots';
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
  public function setSnapshots($snapshots)
  {
    $this->snapshots = $snapshots;
  }
  /** @return string[] */
  public function getSnapshots()
  {
    return $this->snapshots;
  }
}

class ListTopicSubscriptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
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
  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }
  /** @return string[] */
  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}

class ListTopicsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Topic[] */
  public $topics;
  protected $collection_key = 'topics';
  protected $topicsType = Topic::class;
  protected $topicsDataType = 'array';
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
  /** @param Topic[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return Topic[] */
  public function getTopics()
  {
    return $this->topics;
  }
}

class MessageStoragePolicy extends \Google\Collection
{
  /** @var string[] */
  public $allowedPersistenceRegions;
  protected $collection_key = 'allowedPersistenceRegions';
  /** @param string[] */
  public function setAllowedPersistenceRegions($allowedPersistenceRegions)
  {
    $this->allowedPersistenceRegions = $allowedPersistenceRegions;
  }
  /** @return string[] */
  public function getAllowedPersistenceRegions()
  {
    return $this->allowedPersistenceRegions;
  }
}

class ModifyAckDeadlineRequest extends \Google\Collection
{
  /** @var int */
  public $ackDeadlineSeconds;
  /** @var string[] */
  public $ackIds;
  protected $collection_key = 'ackIds';
  /** @param int */
  public function setAckDeadlineSeconds($ackDeadlineSeconds)
  {
    $this->ackDeadlineSeconds = $ackDeadlineSeconds;
  }
  /** @return int */
  public function getAckDeadlineSeconds()
  {
    return $this->ackDeadlineSeconds;
  }
  /** @param string[] */
  public function setAckIds($ackIds)
  {
    $this->ackIds = $ackIds;
  }
  /** @return string[] */
  public function getAckIds()
  {
    return $this->ackIds;
  }
}

class ModifyPushConfigRequest extends \Google\Model
{
  /** @var PushConfig */
  public $pushConfig;
  protected $pushConfigType = PushConfig::class;
  protected $pushConfigDataType = '';
  /** @param PushConfig */
  public function setPushConfig(PushConfig $pushConfig)
  {
    $this->pushConfig = $pushConfig;
  }
  /** @return PushConfig */
  public function getPushConfig()
  {
    return $this->pushConfig;
  }
}

class OidcToken extends \Google\Model
{
  /** @var string */
  public $audience;
  /** @var string */
  public $serviceAccountEmail;

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

class PublishRequest extends \Google\Collection
{
  /** @var PubsubMessage[] */
  public $messages;
  protected $collection_key = 'messages';
  protected $messagesType = PubsubMessage::class;
  protected $messagesDataType = 'array';
  /** @param PubsubMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return PubsubMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
}

class PublishResponse extends \Google\Collection
{
  /** @var string[] */
  public $messageIds;
  protected $collection_key = 'messageIds';
  /** @param string[] */
  public function setMessageIds($messageIds)
  {
    $this->messageIds = $messageIds;
  }
  /** @return string[] */
  public function getMessageIds()
  {
    return $this->messageIds;
  }
}

class PubsubEmpty extends \Google\Model
{
}

class PubsubMessage extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $data;
  /** @var string */
  public $messageId;
  /** @var string */
  public $orderingKey;
  /** @var string */
  public $publishTime;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setOrderingKey($orderingKey)
  {
    $this->orderingKey = $orderingKey;
  }
  /** @return string */
  public function getOrderingKey()
  {
    return $this->orderingKey;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
}

class PullRequest extends \Google\Model
{
  /** @var int */
  public $maxMessages;
  /** @var bool */
  public $returnImmediately;

  /** @param int */
  public function setMaxMessages($maxMessages)
  {
    $this->maxMessages = $maxMessages;
  }
  /** @return int */
  public function getMaxMessages()
  {
    return $this->maxMessages;
  }
  /** @param bool */
  public function setReturnImmediately($returnImmediately)
  {
    $this->returnImmediately = $returnImmediately;
  }
  /** @return bool */
  public function getReturnImmediately()
  {
    return $this->returnImmediately;
  }
}

class PullResponse extends \Google\Collection
{
  /** @var ReceivedMessage[] */
  public $receivedMessages;
  protected $collection_key = 'receivedMessages';
  protected $receivedMessagesType = ReceivedMessage::class;
  protected $receivedMessagesDataType = 'array';
  /** @param ReceivedMessage[] */
  public function setReceivedMessages($receivedMessages)
  {
    $this->receivedMessages = $receivedMessages;
  }
  /** @return ReceivedMessage[] */
  public function getReceivedMessages()
  {
    return $this->receivedMessages;
  }
}

class PushConfig extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var OidcToken */
  public $oidcToken;
  /** @var string */
  public $pushEndpoint;
  protected $oidcTokenType = OidcToken::class;
  protected $oidcTokenDataType = '';
  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param OidcToken */
  public function setOidcToken(OidcToken $oidcToken)
  {
    $this->oidcToken = $oidcToken;
  }
  /** @return OidcToken */
  public function getOidcToken()
  {
    return $this->oidcToken;
  }
  /** @param string */
  public function setPushEndpoint($pushEndpoint)
  {
    $this->pushEndpoint = $pushEndpoint;
  }
  /** @return string */
  public function getPushEndpoint()
  {
    return $this->pushEndpoint;
  }
}

class ReceivedMessage extends \Google\Model
{
  /** @var string */
  public $ackId;
  /** @var int */
  public $deliveryAttempt;
  /** @var PubsubMessage */
  public $message;
  protected $messageType = PubsubMessage::class;
  protected $messageDataType = '';
  /** @param string */
  public function setAckId($ackId)
  {
    $this->ackId = $ackId;
  }
  /** @return string */
  public function getAckId()
  {
    return $this->ackId;
  }
  /** @param int */
  public function setDeliveryAttempt($deliveryAttempt)
  {
    $this->deliveryAttempt = $deliveryAttempt;
  }
  /** @return int */
  public function getDeliveryAttempt()
  {
    return $this->deliveryAttempt;
  }
  /** @param PubsubMessage */
  public function setMessage(PubsubMessage $message)
  {
    $this->message = $message;
  }
  /** @return PubsubMessage */
  public function getMessage()
  {
    return $this->message;
  }
}

class RetryPolicy extends \Google\Model
{
  /** @var string */
  public $maximumBackoff;
  /** @var string */
  public $minimumBackoff;

  /** @param string */
  public function setMaximumBackoff($maximumBackoff)
  {
    $this->maximumBackoff = $maximumBackoff;
  }
  /** @return string */
  public function getMaximumBackoff()
  {
    return $this->maximumBackoff;
  }
  /** @param string */
  public function setMinimumBackoff($minimumBackoff)
  {
    $this->minimumBackoff = $minimumBackoff;
  }
  /** @return string */
  public function getMinimumBackoff()
  {
    return $this->minimumBackoff;
  }
}

class Schema extends \Google\Model
{
  /** @var string */
  public $definition;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $type;

  /** @param string */
  public function setDefinition($definition)
  {
    $this->definition = $definition;
  }
  /** @return string */
  public function getDefinition()
  {
    return $this->definition;
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
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
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

class SchemaSettings extends \Google\Model
{
  /** @var string */
  public $encoding;
  /** @var string */
  public $firstRevisionId;
  /** @var string */
  public $lastRevisionId;
  /** @var string */
  public $schema;

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
  /** @param string */
  public function setFirstRevisionId($firstRevisionId)
  {
    $this->firstRevisionId = $firstRevisionId;
  }
  /** @return string */
  public function getFirstRevisionId()
  {
    return $this->firstRevisionId;
  }
  /** @param string */
  public function setLastRevisionId($lastRevisionId)
  {
    $this->lastRevisionId = $lastRevisionId;
  }
  /** @return string */
  public function getLastRevisionId()
  {
    return $this->lastRevisionId;
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

class SeekRequest extends \Google\Model
{
  /** @var string */
  public $snapshot;
  /** @var string */
  public $time;

  /** @param string */
  public function setSnapshot($snapshot)
  {
    $this->snapshot = $snapshot;
  }
  /** @return string */
  public function getSnapshot()
  {
    return $this->snapshot;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class SeekResponse extends \Google\Model
{
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

class Snapshot extends \Google\Model
{
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $topic;

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
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

class Subscription extends \Google\Model
{
  /** @var int */
  public $ackDeadlineSeconds;
  /** @var BigQueryConfig */
  public $bigqueryConfig;
  /** @var DeadLetterPolicy */
  public $deadLetterPolicy;
  /** @var bool */
  public $detached;
  /** @var bool */
  public $enableExactlyOnceDelivery;
  /** @var bool */
  public $enableMessageOrdering;
  /** @var ExpirationPolicy */
  public $expirationPolicy;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $messageRetentionDuration;
  /** @var string */
  public $name;
  /** @var PushConfig */
  public $pushConfig;
  /** @var bool */
  public $retainAckedMessages;
  /** @var RetryPolicy */
  public $retryPolicy;
  /** @var string */
  public $state;
  /** @var string */
  public $topic;
  /** @var string */
  public $topicMessageRetentionDuration;
  protected $bigqueryConfigType = BigQueryConfig::class;
  protected $bigqueryConfigDataType = '';
  protected $deadLetterPolicyType = DeadLetterPolicy::class;
  protected $deadLetterPolicyDataType = '';
  protected $expirationPolicyType = ExpirationPolicy::class;
  protected $expirationPolicyDataType = '';
  protected $pushConfigType = PushConfig::class;
  protected $pushConfigDataType = '';
  protected $retryPolicyType = RetryPolicy::class;
  protected $retryPolicyDataType = '';
  /** @param int */
  public function setAckDeadlineSeconds($ackDeadlineSeconds)
  {
    $this->ackDeadlineSeconds = $ackDeadlineSeconds;
  }
  /** @return int */
  public function getAckDeadlineSeconds()
  {
    return $this->ackDeadlineSeconds;
  }
  /** @param BigQueryConfig */
  public function setBigqueryConfig(BigQueryConfig $bigqueryConfig)
  {
    $this->bigqueryConfig = $bigqueryConfig;
  }
  /** @return BigQueryConfig */
  public function getBigqueryConfig()
  {
    return $this->bigqueryConfig;
  }
  /** @param DeadLetterPolicy */
  public function setDeadLetterPolicy(DeadLetterPolicy $deadLetterPolicy)
  {
    $this->deadLetterPolicy = $deadLetterPolicy;
  }
  /** @return DeadLetterPolicy */
  public function getDeadLetterPolicy()
  {
    return $this->deadLetterPolicy;
  }
  /** @param bool */
  public function setDetached($detached)
  {
    $this->detached = $detached;
  }
  /** @return bool */
  public function getDetached()
  {
    return $this->detached;
  }
  /** @param bool */
  public function setEnableExactlyOnceDelivery($enableExactlyOnceDelivery)
  {
    $this->enableExactlyOnceDelivery = $enableExactlyOnceDelivery;
  }
  /** @return bool */
  public function getEnableExactlyOnceDelivery()
  {
    return $this->enableExactlyOnceDelivery;
  }
  /** @param bool */
  public function setEnableMessageOrdering($enableMessageOrdering)
  {
    $this->enableMessageOrdering = $enableMessageOrdering;
  }
  /** @return bool */
  public function getEnableMessageOrdering()
  {
    return $this->enableMessageOrdering;
  }
  /** @param ExpirationPolicy */
  public function setExpirationPolicy(ExpirationPolicy $expirationPolicy)
  {
    $this->expirationPolicy = $expirationPolicy;
  }
  /** @return ExpirationPolicy */
  public function getExpirationPolicy()
  {
    return $this->expirationPolicy;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
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
  public function setMessageRetentionDuration($messageRetentionDuration)
  {
    $this->messageRetentionDuration = $messageRetentionDuration;
  }
  /** @return string */
  public function getMessageRetentionDuration()
  {
    return $this->messageRetentionDuration;
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
  /** @param PushConfig */
  public function setPushConfig(PushConfig $pushConfig)
  {
    $this->pushConfig = $pushConfig;
  }
  /** @return PushConfig */
  public function getPushConfig()
  {
    return $this->pushConfig;
  }
  /** @param bool */
  public function setRetainAckedMessages($retainAckedMessages)
  {
    $this->retainAckedMessages = $retainAckedMessages;
  }
  /** @return bool */
  public function getRetainAckedMessages()
  {
    return $this->retainAckedMessages;
  }
  /** @param RetryPolicy */
  public function setRetryPolicy(RetryPolicy $retryPolicy)
  {
    $this->retryPolicy = $retryPolicy;
  }
  /** @return RetryPolicy */
  public function getRetryPolicy()
  {
    return $this->retryPolicy;
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
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
  /** @param string */
  public function setTopicMessageRetentionDuration($topicMessageRetentionDuration)
  {
    $this->topicMessageRetentionDuration = $topicMessageRetentionDuration;
  }
  /** @return string */
  public function getTopicMessageRetentionDuration()
  {
    return $this->topicMessageRetentionDuration;
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

class Topic extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $messageRetentionDuration;
  /** @var MessageStoragePolicy */
  public $messageStoragePolicy;
  /** @var string */
  public $name;
  /** @var bool */
  public $satisfiesPzs;
  /** @var SchemaSettings */
  public $schemaSettings;
  protected $messageStoragePolicyType = MessageStoragePolicy::class;
  protected $messageStoragePolicyDataType = '';
  protected $schemaSettingsType = SchemaSettings::class;
  protected $schemaSettingsDataType = '';
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
  /** @param string */
  public function setMessageRetentionDuration($messageRetentionDuration)
  {
    $this->messageRetentionDuration = $messageRetentionDuration;
  }
  /** @return string */
  public function getMessageRetentionDuration()
  {
    return $this->messageRetentionDuration;
  }
  /** @param MessageStoragePolicy */
  public function setMessageStoragePolicy(MessageStoragePolicy $messageStoragePolicy)
  {
    $this->messageStoragePolicy = $messageStoragePolicy;
  }
  /** @return MessageStoragePolicy */
  public function getMessageStoragePolicy()
  {
    return $this->messageStoragePolicy;
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
  /** @param SchemaSettings */
  public function setSchemaSettings(SchemaSettings $schemaSettings)
  {
    $this->schemaSettings = $schemaSettings;
  }
  /** @return SchemaSettings */
  public function getSchemaSettings()
  {
    return $this->schemaSettings;
  }
}

class UpdateSnapshotRequest extends \Google\Model
{
  /** @var Snapshot */
  public $snapshot;
  /** @var string */
  public $updateMask;
  protected $snapshotType = Snapshot::class;
  protected $snapshotDataType = '';
  /** @param Snapshot */
  public function setSnapshot(Snapshot $snapshot)
  {
    $this->snapshot = $snapshot;
  }
  /** @return Snapshot */
  public function getSnapshot()
  {
    return $this->snapshot;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class UpdateSubscriptionRequest extends \Google\Model
{
  /** @var Subscription */
  public $subscription;
  /** @var string */
  public $updateMask;
  protected $subscriptionType = Subscription::class;
  protected $subscriptionDataType = '';
  /** @param Subscription */
  public function setSubscription(Subscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return Subscription */
  public function getSubscription()
  {
    return $this->subscription;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class UpdateTopicRequest extends \Google\Model
{
  /** @var Topic */
  public $topic;
  /** @var string */
  public $updateMask;
  protected $topicType = Topic::class;
  protected $topicDataType = '';
  /** @param Topic */
  public function setTopic(Topic $topic)
  {
    $this->topic = $topic;
  }
  /** @return Topic */
  public function getTopic()
  {
    return $this->topic;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class ValidateMessageRequest extends \Google\Model
{
  /** @var string */
  public $encoding;
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var Schema */
  public $schema;
  protected $schemaType = Schema::class;
  protected $schemaDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param Schema */
  public function setSchema(Schema $schema)
  {
    $this->schema = $schema;
  }
  /** @return Schema */
  public function getSchema()
  {
    return $this->schema;
  }
}

class ValidateMessageResponse extends \Google\Model
{
}

class ValidateSchemaRequest extends \Google\Model
{
  /** @var Schema */
  public $schema;
  protected $schemaType = Schema::class;
  protected $schemaDataType = '';
  /** @param Schema */
  public function setSchema(Schema $schema)
  {
    $this->schema = $schema;
  }
  /** @return Schema */
  public function getSchema()
  {
    return $this->schema;
  }
}

class ValidateSchemaResponse extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcknowledgeRequest::class, 'Google_Service_Pubsub_AcknowledgeRequest');
class_alias(BigQueryConfig::class, 'Google_Service_Pubsub_BigQueryConfig');
class_alias(Binding::class, 'Google_Service_Pubsub_Binding');
class_alias(CreateSnapshotRequest::class, 'Google_Service_Pubsub_CreateSnapshotRequest');
class_alias(DeadLetterPolicy::class, 'Google_Service_Pubsub_DeadLetterPolicy');
class_alias(DetachSubscriptionResponse::class, 'Google_Service_Pubsub_DetachSubscriptionResponse');
class_alias(ExpirationPolicy::class, 'Google_Service_Pubsub_ExpirationPolicy');
class_alias(Expr::class, 'Google_Service_Pubsub_Expr');
class_alias(ListSchemasResponse::class, 'Google_Service_Pubsub_ListSchemasResponse');
class_alias(ListSnapshotsResponse::class, 'Google_Service_Pubsub_ListSnapshotsResponse');
class_alias(ListSubscriptionsResponse::class, 'Google_Service_Pubsub_ListSubscriptionsResponse');
class_alias(ListTopicSnapshotsResponse::class, 'Google_Service_Pubsub_ListTopicSnapshotsResponse');
class_alias(ListTopicSubscriptionsResponse::class, 'Google_Service_Pubsub_ListTopicSubscriptionsResponse');
class_alias(ListTopicsResponse::class, 'Google_Service_Pubsub_ListTopicsResponse');
class_alias(MessageStoragePolicy::class, 'Google_Service_Pubsub_MessageStoragePolicy');
class_alias(ModifyAckDeadlineRequest::class, 'Google_Service_Pubsub_ModifyAckDeadlineRequest');
class_alias(ModifyPushConfigRequest::class, 'Google_Service_Pubsub_ModifyPushConfigRequest');
class_alias(OidcToken::class, 'Google_Service_Pubsub_OidcToken');
class_alias(Policy::class, 'Google_Service_Pubsub_Policy');
class_alias(PublishRequest::class, 'Google_Service_Pubsub_PublishRequest');
class_alias(PublishResponse::class, 'Google_Service_Pubsub_PublishResponse');
class_alias(PubsubEmpty::class, 'Google_Service_Pubsub_PubsubEmpty');
class_alias(PubsubMessage::class, 'Google_Service_Pubsub_PubsubMessage');
class_alias(PullRequest::class, 'Google_Service_Pubsub_PullRequest');
class_alias(PullResponse::class, 'Google_Service_Pubsub_PullResponse');
class_alias(PushConfig::class, 'Google_Service_Pubsub_PushConfig');
class_alias(ReceivedMessage::class, 'Google_Service_Pubsub_ReceivedMessage');
class_alias(RetryPolicy::class, 'Google_Service_Pubsub_RetryPolicy');
class_alias(Schema::class, 'Google_Service_Pubsub_Schema');
class_alias(SchemaSettings::class, 'Google_Service_Pubsub_SchemaSettings');
class_alias(SeekRequest::class, 'Google_Service_Pubsub_SeekRequest');
class_alias(SeekResponse::class, 'Google_Service_Pubsub_SeekResponse');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Pubsub_SetIamPolicyRequest');
class_alias(Snapshot::class, 'Google_Service_Pubsub_Snapshot');
class_alias(Subscription::class, 'Google_Service_Pubsub_Subscription');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Pubsub_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Pubsub_TestIamPermissionsResponse');
class_alias(Topic::class, 'Google_Service_Pubsub_Topic');
class_alias(UpdateSnapshotRequest::class, 'Google_Service_Pubsub_UpdateSnapshotRequest');
class_alias(UpdateSubscriptionRequest::class, 'Google_Service_Pubsub_UpdateSubscriptionRequest');
class_alias(UpdateTopicRequest::class, 'Google_Service_Pubsub_UpdateTopicRequest');
class_alias(ValidateMessageRequest::class, 'Google_Service_Pubsub_ValidateMessageRequest');
class_alias(ValidateMessageResponse::class, 'Google_Service_Pubsub_ValidateMessageResponse');
class_alias(ValidateSchemaRequest::class, 'Google_Service_Pubsub_ValidateSchemaRequest');
class_alias(ValidateSchemaResponse::class, 'Google_Service_Pubsub_ValidateSchemaResponse');
