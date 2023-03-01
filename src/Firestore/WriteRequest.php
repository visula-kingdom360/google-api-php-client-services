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

class WriteRequest extends \Google\Collection
{
  protected $collection_key = 'writes';
  /**
   * @var string[]
   */
  public $labels = [];
  /**
   * @var string
   */
  public $streamId;
  /**
   * @var string
   */
  public $streamToken;
  protected $writesType = Write::class;
  protected $writesDataType = 'array';
  public $writes = [];

  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /**
   * @return string
   */
  public function getStreamId()
  {
    return $this->streamId;
  }
  /**
   * @param string
   */
  public function setStreamToken($streamToken)
  {
    $this->streamToken = $streamToken;
  }
  /**
   * @return string
   */
  public function getStreamToken()
  {
    return $this->streamToken;
  }
  /**
   * @param Write[]
   */
  public function setWrites($writes)
  {
    $this->writes = $writes;
  }
  /**
   * @return Write[]
   */
  public function getWrites()
  {
    return $this->writes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WriteRequest::class, 'Google_Service_Firestore_WriteRequest');
