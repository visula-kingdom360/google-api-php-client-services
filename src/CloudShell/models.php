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

namespace Google\Service\CloudShell;

class AddPublicKeyMetadata extends \Google\Model
{
}

class AddPublicKeyRequest extends \Google\Model
{
  /** @var string */
  public $key;

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

class AddPublicKeyResponse extends \Google\Model
{
  /** @var string */
  public $key;

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

class AuthorizeEnvironmentMetadata extends \Google\Model
{
}

class AuthorizeEnvironmentRequest extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $idToken;

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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
}

class AuthorizeEnvironmentResponse extends \Google\Model
{
}

class CancelOperationRequest extends \Google\Model
{
}

class CloudshellEmpty extends \Google\Model
{
}

class CreateEnvironmentMetadata extends \Google\Model
{
}

class DeleteEnvironmentMetadata extends \Google\Model
{
}

class Environment extends \Google\Collection
{
  /** @var string */
  public $dockerImage;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string[] */
  public $publicKeys;
  /** @var string */
  public $sshHost;
  /** @var int */
  public $sshPort;
  /** @var string */
  public $sshUsername;
  /** @var string */
  public $state;
  /** @var string */
  public $webHost;
  protected $collection_key = 'publicKeys';
  /** @param string */
  public function setDockerImage($dockerImage)
  {
    $this->dockerImage = $dockerImage;
  }
  /** @return string */
  public function getDockerImage()
  {
    return $this->dockerImage;
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
  /** @param string[] */
  public function setPublicKeys($publicKeys)
  {
    $this->publicKeys = $publicKeys;
  }
  /** @return string[] */
  public function getPublicKeys()
  {
    return $this->publicKeys;
  }
  /** @param string */
  public function setSshHost($sshHost)
  {
    $this->sshHost = $sshHost;
  }
  /** @return string */
  public function getSshHost()
  {
    return $this->sshHost;
  }
  /** @param int */
  public function setSshPort($sshPort)
  {
    $this->sshPort = $sshPort;
  }
  /** @return int */
  public function getSshPort()
  {
    return $this->sshPort;
  }
  /** @param string */
  public function setSshUsername($sshUsername)
  {
    $this->sshUsername = $sshUsername;
  }
  /** @return string */
  public function getSshUsername()
  {
    return $this->sshUsername;
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
  public function setWebHost($webHost)
  {
    $this->webHost = $webHost;
  }
  /** @return string */
  public function getWebHost()
  {
    return $this->webHost;
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

class RemovePublicKeyMetadata extends \Google\Model
{
}

class RemovePublicKeyRequest extends \Google\Model
{
  /** @var string */
  public $key;

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

class RemovePublicKeyResponse extends \Google\Model
{
}

class StartEnvironmentMetadata extends \Google\Model
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

class StartEnvironmentRequest extends \Google\Collection
{
  /** @var string */
  public $accessToken;
  /** @var string[] */
  public $publicKeys;
  protected $collection_key = 'publicKeys';
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
  /** @param string[] */
  public function setPublicKeys($publicKeys)
  {
    $this->publicKeys = $publicKeys;
  }
  /** @return string[] */
  public function getPublicKeys()
  {
    return $this->publicKeys;
  }
}

class StartEnvironmentResponse extends \Google\Model
{
  /** @var Environment */
  public $environment;
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  /** @param Environment */
  public function setEnvironment(Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment */
  public function getEnvironment()
  {
    return $this->environment;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddPublicKeyMetadata::class, 'Google_Service_CloudShell_AddPublicKeyMetadata');
class_alias(AddPublicKeyRequest::class, 'Google_Service_CloudShell_AddPublicKeyRequest');
class_alias(AddPublicKeyResponse::class, 'Google_Service_CloudShell_AddPublicKeyResponse');
class_alias(AuthorizeEnvironmentMetadata::class, 'Google_Service_CloudShell_AuthorizeEnvironmentMetadata');
class_alias(AuthorizeEnvironmentRequest::class, 'Google_Service_CloudShell_AuthorizeEnvironmentRequest');
class_alias(AuthorizeEnvironmentResponse::class, 'Google_Service_CloudShell_AuthorizeEnvironmentResponse');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudShell_CancelOperationRequest');
class_alias(CloudshellEmpty::class, 'Google_Service_CloudShell_CloudshellEmpty');
class_alias(CreateEnvironmentMetadata::class, 'Google_Service_CloudShell_CreateEnvironmentMetadata');
class_alias(DeleteEnvironmentMetadata::class, 'Google_Service_CloudShell_DeleteEnvironmentMetadata');
class_alias(Environment::class, 'Google_Service_CloudShell_Environment');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudShell_ListOperationsResponse');
class_alias(Operation::class, 'Google_Service_CloudShell_Operation');
class_alias(RemovePublicKeyMetadata::class, 'Google_Service_CloudShell_RemovePublicKeyMetadata');
class_alias(RemovePublicKeyRequest::class, 'Google_Service_CloudShell_RemovePublicKeyRequest');
class_alias(RemovePublicKeyResponse::class, 'Google_Service_CloudShell_RemovePublicKeyResponse');
class_alias(StartEnvironmentMetadata::class, 'Google_Service_CloudShell_StartEnvironmentMetadata');
class_alias(StartEnvironmentRequest::class, 'Google_Service_CloudShell_StartEnvironmentRequest');
class_alias(StartEnvironmentResponse::class, 'Google_Service_CloudShell_StartEnvironmentResponse');
class_alias(Status::class, 'Google_Service_CloudShell_Status');
