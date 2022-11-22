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

namespace Google\Service\Libraryagent;

class GoogleExampleLibraryagentV1Book extends \Google\Model
{
  /** @var string */
  public $author;
  /** @var string */
  public $name;
  /** @var bool */
  public $read;
  /** @var string */
  public $title;

  /** @param string */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /** @return string */
  public function getAuthor()
  {
    return $this->author;
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
  public function setRead($read)
  {
    $this->read = $read;
  }
  /** @return bool */
  public function getRead()
  {
    return $this->read;
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

class GoogleExampleLibraryagentV1ListBooksResponse extends \Google\Collection
{
  /** @var GoogleExampleLibraryagentV1Book[] */
  public $books;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'books';
  protected $booksType = GoogleExampleLibraryagentV1Book::class;
  protected $booksDataType = 'array';
  /** @param GoogleExampleLibraryagentV1Book[] */
  public function setBooks($books)
  {
    $this->books = $books;
  }
  /** @return GoogleExampleLibraryagentV1Book[] */
  public function getBooks()
  {
    return $this->books;
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

class GoogleExampleLibraryagentV1ListShelvesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleExampleLibraryagentV1Shelf[] */
  public $shelves;
  protected $collection_key = 'shelves';
  protected $shelvesType = GoogleExampleLibraryagentV1Shelf::class;
  protected $shelvesDataType = 'array';
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
  /** @param GoogleExampleLibraryagentV1Shelf[] */
  public function setShelves($shelves)
  {
    $this->shelves = $shelves;
  }
  /** @return GoogleExampleLibraryagentV1Shelf[] */
  public function getShelves()
  {
    return $this->shelves;
  }
}

class GoogleExampleLibraryagentV1Shelf extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $theme;

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
  public function setTheme($theme)
  {
    $this->theme = $theme;
  }
  /** @return string */
  public function getTheme()
  {
    return $this->theme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleExampleLibraryagentV1Book::class, 'Google_Service_Libraryagent_GoogleExampleLibraryagentV1Book');
class_alias(GoogleExampleLibraryagentV1ListBooksResponse::class, 'Google_Service_Libraryagent_GoogleExampleLibraryagentV1ListBooksResponse');
class_alias(GoogleExampleLibraryagentV1ListShelvesResponse::class, 'Google_Service_Libraryagent_GoogleExampleLibraryagentV1ListShelvesResponse');
class_alias(GoogleExampleLibraryagentV1Shelf::class, 'Google_Service_Libraryagent_GoogleExampleLibraryagentV1Shelf');
