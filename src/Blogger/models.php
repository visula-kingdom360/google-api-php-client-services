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

namespace Google\Service\Blogger;

class Blog extends \Google\Model
{
  /** @var string */
  public $customMetaData;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var BlogLocale */
  public $locale;
  /** @var string */
  public $name;
  /** @var BlogPages */
  public $pages;
  /** @var BlogPosts */
  public $posts;
  /** @var string */
  public $published;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $updated;
  /** @var string */
  public $url;
  protected $localeType = BlogLocale::class;
  protected $localeDataType = '';
  protected $pagesType = BlogPages::class;
  protected $pagesDataType = '';
  protected $postsType = BlogPosts::class;
  protected $postsDataType = '';
  /** @param string */
  public function setCustomMetaData($customMetaData)
  {
    $this->customMetaData = $customMetaData;
  }
  /** @return string */
  public function getCustomMetaData()
  {
    return $this->customMetaData;
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
  /** @param BlogLocale */
  public function setLocale(BlogLocale $locale)
  {
    $this->locale = $locale;
  }
  /** @return BlogLocale */
  public function getLocale()
  {
    return $this->locale;
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
  /** @param BlogPages */
  public function setPages(BlogPages $pages)
  {
    $this->pages = $pages;
  }
  /** @return BlogPages */
  public function getPages()
  {
    return $this->pages;
  }
  /** @param BlogPosts */
  public function setPosts(BlogPosts $posts)
  {
    $this->posts = $posts;
  }
  /** @return BlogPosts */
  public function getPosts()
  {
    return $this->posts;
  }
  /** @param string */
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /** @return string */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class BlogList extends \Google\Collection
{
  /** @var BlogUserInfo[] */
  public $blogUserInfos;
  /** @var Blog[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $blogUserInfosType = BlogUserInfo::class;
  protected $blogUserInfosDataType = 'array';
  protected $itemsType = Blog::class;
  protected $itemsDataType = 'array';
  /** @param BlogUserInfo[] */
  public function setBlogUserInfos($blogUserInfos)
  {
    $this->blogUserInfos = $blogUserInfos;
  }
  /** @return BlogUserInfo[] */
  public function getBlogUserInfos()
  {
    return $this->blogUserInfos;
  }
  /** @param Blog[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Blog[] */
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

class BlogLocale extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $language;
  /** @var string */
  public $variant;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
  /** @return string */
  public function getVariant()
  {
    return $this->variant;
  }
}

class BlogPages extends \Google\Model
{
  /** @var string */
  public $selfLink;
  /** @var int */
  public $totalItems;

  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class BlogPerUserInfo extends \Google\Model
{
  /** @var string */
  public $blogId;
  /** @var bool */
  public $hasAdminAccess;
  /** @var string */
  public $kind;
  /** @var string */
  public $photosAlbumKey;
  /** @var string */
  public $role;
  /** @var string */
  public $userId;

  /** @param string */
  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }
  /** @return string */
  public function getBlogId()
  {
    return $this->blogId;
  }
  /** @param bool */
  public function setHasAdminAccess($hasAdminAccess)
  {
    $this->hasAdminAccess = $hasAdminAccess;
  }
  /** @return bool */
  public function getHasAdminAccess()
  {
    return $this->hasAdminAccess;
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
  public function setPhotosAlbumKey($photosAlbumKey)
  {
    $this->photosAlbumKey = $photosAlbumKey;
  }
  /** @return string */
  public function getPhotosAlbumKey()
  {
    return $this->photosAlbumKey;
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
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class BlogPosts extends \Google\Collection
{
  /** @var Post[] */
  public $items;
  /** @var string */
  public $selfLink;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = Post::class;
  protected $itemsDataType = 'array';
  /** @param Post[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Post[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class BlogUserInfo extends \Google\Model
{
  /** @var Blog */
  public $blog;
  /** @var BlogPerUserInfo */
  public $blogUserInfo;
  /** @var string */
  public $kind;
  protected $internal_gapi_mappings = [
        "blogUserInfo" => "blog_user_info",
  ];
  protected $blogType = Blog::class;
  protected $blogDataType = '';
  protected $blogUserInfoType = BlogPerUserInfo::class;
  protected $blogUserInfoDataType = '';
  /** @param Blog */
  public function setBlog(Blog $blog)
  {
    $this->blog = $blog;
  }
  /** @return Blog */
  public function getBlog()
  {
    return $this->blog;
  }
  /** @param BlogPerUserInfo */
  public function setBlogUserInfo(BlogPerUserInfo $blogUserInfo)
  {
    $this->blogUserInfo = $blogUserInfo;
  }
  /** @return BlogPerUserInfo */
  public function getBlogUserInfo()
  {
    return $this->blogUserInfo;
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

class Comment extends \Google\Model
{
  /** @var CommentAuthor */
  public $author;
  /** @var CommentBlog */
  public $blog;
  /** @var string */
  public $content;
  /** @var string */
  public $id;
  /** @var CommentInReplyTo */
  public $inReplyTo;
  /** @var string */
  public $kind;
  /** @var CommentPost */
  public $post;
  /** @var string */
  public $published;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $updated;
  protected $authorType = CommentAuthor::class;
  protected $authorDataType = '';
  protected $blogType = CommentBlog::class;
  protected $blogDataType = '';
  protected $inReplyToType = CommentInReplyTo::class;
  protected $inReplyToDataType = '';
  protected $postType = CommentPost::class;
  protected $postDataType = '';
  /** @param CommentAuthor */
  public function setAuthor(CommentAuthor $author)
  {
    $this->author = $author;
  }
  /** @return CommentAuthor */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param CommentBlog */
  public function setBlog(CommentBlog $blog)
  {
    $this->blog = $blog;
  }
  /** @return CommentBlog */
  public function getBlog()
  {
    return $this->blog;
  }
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param CommentInReplyTo */
  public function setInReplyTo(CommentInReplyTo $inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }
  /** @return CommentInReplyTo */
  public function getInReplyTo()
  {
    return $this->inReplyTo;
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
  /** @param CommentPost */
  public function setPost(CommentPost $post)
  {
    $this->post = $post;
  }
  /** @return CommentPost */
  public function getPost()
  {
    return $this->post;
  }
  /** @param string */
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /** @return string */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class CommentAuthor extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var CommentAuthorImage */
  public $image;
  /** @var string */
  public $url;
  protected $imageType = CommentAuthorImage::class;
  protected $imageDataType = '';
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param CommentAuthorImage */
  public function setImage(CommentAuthorImage $image)
  {
    $this->image = $image;
  }
  /** @return CommentAuthorImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class CommentAuthorImage extends \Google\Model
{
  /** @var string */
  public $url;

  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class CommentBlog extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class CommentInReplyTo extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class CommentList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Comment[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $prevPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Comment::class;
  protected $itemsDataType = 'array';
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
  /** @param Comment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Comment[] */
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
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
}

class CommentPost extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class Page extends \Google\Model
{
  /** @var PageAuthor */
  public $author;
  /** @var PageBlog */
  public $blog;
  /** @var string */
  public $content;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $published;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $title;
  /** @var string */
  public $trashed;
  /** @var string */
  public $updated;
  /** @var string */
  public $url;
  protected $authorType = PageAuthor::class;
  protected $authorDataType = '';
  protected $blogType = PageBlog::class;
  protected $blogDataType = '';
  /** @param PageAuthor */
  public function setAuthor(PageAuthor $author)
  {
    $this->author = $author;
  }
  /** @return PageAuthor */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param PageBlog */
  public function setBlog(PageBlog $blog)
  {
    $this->blog = $blog;
  }
  /** @return PageBlog */
  public function getBlog()
  {
    return $this->blog;
  }
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
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /** @return string */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }
  /** @return string */
  public function getTrashed()
  {
    return $this->trashed;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PageAuthor extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var PageAuthorImage */
  public $image;
  /** @var string */
  public $url;
  protected $imageType = PageAuthorImage::class;
  protected $imageDataType = '';
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param PageAuthorImage */
  public function setImage(PageAuthorImage $image)
  {
    $this->image = $image;
  }
  /** @return PageAuthorImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PageAuthorImage extends \Google\Model
{
  /** @var string */
  public $url;

  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PageBlog extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class PageList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Page[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Page::class;
  protected $itemsDataType = 'array';
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
  /** @param Page[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Page[] */
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

class Pageviews extends \Google\Collection
{
  /** @var string */
  public $blogId;
  /** @var PageviewsCounts[] */
  public $counts;
  /** @var string */
  public $kind;
  protected $collection_key = 'counts';
  protected $countsType = PageviewsCounts::class;
  protected $countsDataType = 'array';
  /** @param string */
  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }
  /** @return string */
  public function getBlogId()
  {
    return $this->blogId;
  }
  /** @param PageviewsCounts[] */
  public function setCounts($counts)
  {
    $this->counts = $counts;
  }
  /** @return PageviewsCounts[] */
  public function getCounts()
  {
    return $this->counts;
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

class PageviewsCounts extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $timeRange;

  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setTimeRange($timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return string */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Post extends \Google\Collection
{
  /** @var PostAuthor */
  public $author;
  /** @var PostBlog */
  public $blog;
  /** @var string */
  public $content;
  /** @var string */
  public $customMetaData;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var PostImages[] */
  public $images;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var PostLocation */
  public $location;
  /** @var string */
  public $published;
  /** @var string */
  public $readerComments;
  /** @var PostReplies */
  public $replies;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $title;
  /** @var string */
  public $titleLink;
  /** @var string */
  public $trashed;
  /** @var string */
  public $updated;
  /** @var string */
  public $url;
  protected $collection_key = 'labels';
  protected $authorType = PostAuthor::class;
  protected $authorDataType = '';
  protected $blogType = PostBlog::class;
  protected $blogDataType = '';
  protected $imagesType = PostImages::class;
  protected $imagesDataType = 'array';
  protected $locationType = PostLocation::class;
  protected $locationDataType = '';
  protected $repliesType = PostReplies::class;
  protected $repliesDataType = '';
  /** @param PostAuthor */
  public function setAuthor(PostAuthor $author)
  {
    $this->author = $author;
  }
  /** @return PostAuthor */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param PostBlog */
  public function setBlog(PostBlog $blog)
  {
    $this->blog = $blog;
  }
  /** @return PostBlog */
  public function getBlog()
  {
    return $this->blog;
  }
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
  public function setCustomMetaData($customMetaData)
  {
    $this->customMetaData = $customMetaData;
  }
  /** @return string */
  public function getCustomMetaData()
  {
    return $this->customMetaData;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param PostImages[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return PostImages[] */
  public function getImages()
  {
    return $this->images;
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
  /** @param PostLocation */
  public function setLocation(PostLocation $location)
  {
    $this->location = $location;
  }
  /** @return PostLocation */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /** @return string */
  public function getPublished()
  {
    return $this->published;
  }
  /** @param string */
  public function setReaderComments($readerComments)
  {
    $this->readerComments = $readerComments;
  }
  /** @return string */
  public function getReaderComments()
  {
    return $this->readerComments;
  }
  /** @param PostReplies */
  public function setReplies(PostReplies $replies)
  {
    $this->replies = $replies;
  }
  /** @return PostReplies */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setTitleLink($titleLink)
  {
    $this->titleLink = $titleLink;
  }
  /** @return string */
  public function getTitleLink()
  {
    return $this->titleLink;
  }
  /** @param string */
  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }
  /** @return string */
  public function getTrashed()
  {
    return $this->trashed;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PostAuthor extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var PostAuthorImage */
  public $image;
  /** @var string */
  public $url;
  protected $imageType = PostAuthorImage::class;
  protected $imageDataType = '';
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param PostAuthorImage */
  public function setImage(PostAuthorImage $image)
  {
    $this->image = $image;
  }
  /** @return PostAuthorImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PostAuthorImage extends \Google\Model
{
  /** @var string */
  public $url;

  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PostBlog extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class PostImages extends \Google\Model
{
  /** @var string */
  public $url;

  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class PostList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Post[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $prevPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Post::class;
  protected $itemsDataType = 'array';
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
  /** @param Post[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Post[] */
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
  /** @param string */
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
  /** @return string */
  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
}

class PostLocation extends \Google\Model
{
  public $lat;
  public $lng;
  /** @var string */
  public $name;
  /** @var string */
  public $span;

  public function setLat($lat)
  {
    $this->lat = $lat;
  }
  public function getLat()
  {
    return $this->lat;
  }
  public function setLng($lng)
  {
    $this->lng = $lng;
  }
  public function getLng()
  {
    return $this->lng;
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
  public function setSpan($span)
  {
    $this->span = $span;
  }
  /** @return string */
  public function getSpan()
  {
    return $this->span;
  }
}

class PostPerUserInfo extends \Google\Model
{
  /** @var string */
  public $blogId;
  /** @var bool */
  public $hasEditAccess;
  /** @var string */
  public $kind;
  /** @var string */
  public $postId;
  /** @var string */
  public $userId;

  /** @param string */
  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }
  /** @return string */
  public function getBlogId()
  {
    return $this->blogId;
  }
  /** @param bool */
  public function setHasEditAccess($hasEditAccess)
  {
    $this->hasEditAccess = $hasEditAccess;
  }
  /** @return bool */
  public function getHasEditAccess()
  {
    return $this->hasEditAccess;
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
  public function setPostId($postId)
  {
    $this->postId = $postId;
  }
  /** @return string */
  public function getPostId()
  {
    return $this->postId;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class PostReplies extends \Google\Collection
{
  /** @var Comment[] */
  public $items;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $totalItems;
  protected $collection_key = 'items';
  protected $itemsType = Comment::class;
  protected $itemsDataType = 'array';
  /** @param Comment[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Comment[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return string */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class PostUserInfo extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var Post */
  public $post;
  /** @var PostPerUserInfo */
  public $postUserInfo;
  protected $internal_gapi_mappings = [
        "postUserInfo" => "post_user_info",
  ];
  protected $postType = Post::class;
  protected $postDataType = '';
  protected $postUserInfoType = PostPerUserInfo::class;
  protected $postUserInfoDataType = '';
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
  /** @param Post */
  public function setPost(Post $post)
  {
    $this->post = $post;
  }
  /** @return Post */
  public function getPost()
  {
    return $this->post;
  }
  /** @param PostPerUserInfo */
  public function setPostUserInfo(PostPerUserInfo $postUserInfo)
  {
    $this->postUserInfo = $postUserInfo;
  }
  /** @return PostPerUserInfo */
  public function getPostUserInfo()
  {
    return $this->postUserInfo;
  }
}

class PostUserInfosList extends \Google\Collection
{
  /** @var PostUserInfo[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = PostUserInfo::class;
  protected $itemsDataType = 'array';
  /** @param PostUserInfo[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return PostUserInfo[] */
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

class User extends \Google\Model
{
  /** @var string */
  public $about;
  /** @var UserBlogs */
  public $blogs;
  /** @var string */
  public $created;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var UserLocale */
  public $locale;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $url;
  protected $blogsType = UserBlogs::class;
  protected $blogsDataType = '';
  protected $localeType = UserLocale::class;
  protected $localeDataType = '';
  /** @param string */
  public function setAbout($about)
  {
    $this->about = $about;
  }
  /** @return string */
  public function getAbout()
  {
    return $this->about;
  }
  /** @param UserBlogs */
  public function setBlogs(UserBlogs $blogs)
  {
    $this->blogs = $blogs;
  }
  /** @return UserBlogs */
  public function getBlogs()
  {
    return $this->blogs;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  /** @param UserLocale */
  public function setLocale(UserLocale $locale)
  {
    $this->locale = $locale;
  }
  /** @return UserLocale */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class UserBlogs extends \Google\Model
{
  /** @var string */
  public $selfLink;

  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class UserLocale extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $language;
  /** @var string */
  public $variant;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
  /** @return string */
  public function getVariant()
  {
    return $this->variant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Blog::class, 'Google_Service_Blogger_Blog');
class_alias(BlogList::class, 'Google_Service_Blogger_BlogList');
class_alias(BlogLocale::class, 'Google_Service_Blogger_BlogLocale');
class_alias(BlogPages::class, 'Google_Service_Blogger_BlogPages');
class_alias(BlogPerUserInfo::class, 'Google_Service_Blogger_BlogPerUserInfo');
class_alias(BlogPosts::class, 'Google_Service_Blogger_BlogPosts');
class_alias(BlogUserInfo::class, 'Google_Service_Blogger_BlogUserInfo');
class_alias(Comment::class, 'Google_Service_Blogger_Comment');
class_alias(CommentAuthor::class, 'Google_Service_Blogger_CommentAuthor');
class_alias(CommentAuthorImage::class, 'Google_Service_Blogger_CommentAuthorImage');
class_alias(CommentBlog::class, 'Google_Service_Blogger_CommentBlog');
class_alias(CommentInReplyTo::class, 'Google_Service_Blogger_CommentInReplyTo');
class_alias(CommentList::class, 'Google_Service_Blogger_CommentList');
class_alias(CommentPost::class, 'Google_Service_Blogger_CommentPost');
class_alias(Page::class, 'Google_Service_Blogger_Page');
class_alias(PageAuthor::class, 'Google_Service_Blogger_PageAuthor');
class_alias(PageAuthorImage::class, 'Google_Service_Blogger_PageAuthorImage');
class_alias(PageBlog::class, 'Google_Service_Blogger_PageBlog');
class_alias(PageList::class, 'Google_Service_Blogger_PageList');
class_alias(Pageviews::class, 'Google_Service_Blogger_Pageviews');
class_alias(PageviewsCounts::class, 'Google_Service_Blogger_PageviewsCounts');
class_alias(Post::class, 'Google_Service_Blogger_Post');
class_alias(PostAuthor::class, 'Google_Service_Blogger_PostAuthor');
class_alias(PostAuthorImage::class, 'Google_Service_Blogger_PostAuthorImage');
class_alias(PostBlog::class, 'Google_Service_Blogger_PostBlog');
class_alias(PostImages::class, 'Google_Service_Blogger_PostImages');
class_alias(PostList::class, 'Google_Service_Blogger_PostList');
class_alias(PostLocation::class, 'Google_Service_Blogger_PostLocation');
class_alias(PostPerUserInfo::class, 'Google_Service_Blogger_PostPerUserInfo');
class_alias(PostReplies::class, 'Google_Service_Blogger_PostReplies');
class_alias(PostUserInfo::class, 'Google_Service_Blogger_PostUserInfo');
class_alias(PostUserInfosList::class, 'Google_Service_Blogger_PostUserInfosList');
class_alias(User::class, 'Google_Service_Blogger_User');
class_alias(UserBlogs::class, 'Google_Service_Blogger_UserBlogs');
class_alias(UserLocale::class, 'Google_Service_Blogger_UserLocale');
