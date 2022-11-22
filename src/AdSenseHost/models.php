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

namespace Google\Service\AdSenseHost;

class Account extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $status;

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

class Accounts extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Account[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Account::class;
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
  /** @param Account[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Account[] */
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

class AdClient extends \Google\Model
{
  /** @var bool */
  public $arcOptIn;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $productCode;
  /** @var bool */
  public $supportsReporting;

  /** @param bool */
  public function setArcOptIn($arcOptIn)
  {
    $this->arcOptIn = $arcOptIn;
  }
  /** @return bool */
  public function getArcOptIn()
  {
    return $this->arcOptIn;
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
  public function setProductCode($productCode)
  {
    $this->productCode = $productCode;
  }
  /** @return string */
  public function getProductCode()
  {
    return $this->productCode;
  }
  /** @param bool */
  public function setSupportsReporting($supportsReporting)
  {
    $this->supportsReporting = $supportsReporting;
  }
  /** @return bool */
  public function getSupportsReporting()
  {
    return $this->supportsReporting;
  }
}

class AdClients extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var AdClient[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = AdClient::class;
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
  /** @param AdClient[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AdClient[] */
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

class AdCode extends \Google\Model
{
  /** @var string */
  public $adCode;
  /** @var string */
  public $kind;

  /** @param string */
  public function setAdCode($adCode)
  {
    $this->adCode = $adCode;
  }
  /** @return string */
  public function getAdCode()
  {
    return $this->adCode;
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

class AdStyle extends \Google\Model
{
  /** @var AdStyleColors */
  public $colors;
  /** @var string */
  public $corners;
  /** @var AdStyleFont */
  public $font;
  /** @var string */
  public $kind;
  protected $colorsType = AdStyleColors::class;
  protected $colorsDataType = '';
  protected $fontType = AdStyleFont::class;
  protected $fontDataType = '';
  /** @param AdStyleColors */
  public function setColors(AdStyleColors $colors)
  {
    $this->colors = $colors;
  }
  /** @return AdStyleColors */
  public function getColors()
  {
    return $this->colors;
  }
  /** @param string */
  public function setCorners($corners)
  {
    $this->corners = $corners;
  }
  /** @return string */
  public function getCorners()
  {
    return $this->corners;
  }
  /** @param AdStyleFont */
  public function setFont(AdStyleFont $font)
  {
    $this->font = $font;
  }
  /** @return AdStyleFont */
  public function getFont()
  {
    return $this->font;
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

class AdStyleColors extends \Google\Model
{
  /** @var string */
  public $background;
  /** @var string */
  public $border;
  /** @var string */
  public $text;
  /** @var string */
  public $title;
  /** @var string */
  public $url;

  /** @param string */
  public function setBackground($background)
  {
    $this->background = $background;
  }
  /** @return string */
  public function getBackground()
  {
    return $this->background;
  }
  /** @param string */
  public function setBorder($border)
  {
    $this->border = $border;
  }
  /** @return string */
  public function getBorder()
  {
    return $this->border;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
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

class AdStyleFont extends \Google\Model
{
  /** @var string */
  public $family;
  /** @var string */
  public $size;

  /** @param string */
  public function setFamily($family)
  {
    $this->family = $family;
  }
  /** @return string */
  public function getFamily()
  {
    return $this->family;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
}

class AdUnit extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var AdUnitContentAdsSettings */
  public $contentAdsSettings;
  /** @var AdStyle */
  public $customStyle;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var AdUnitMobileContentAdsSettings */
  public $mobileContentAdsSettings;
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  protected $contentAdsSettingsType = AdUnitContentAdsSettings::class;
  protected $contentAdsSettingsDataType = '';
  protected $customStyleType = AdStyle::class;
  protected $customStyleDataType = '';
  protected $mobileContentAdsSettingsType = AdUnitMobileContentAdsSettings::class;
  protected $mobileContentAdsSettingsDataType = '';
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param AdUnitContentAdsSettings */
  public function setContentAdsSettings(AdUnitContentAdsSettings $contentAdsSettings)
  {
    $this->contentAdsSettings = $contentAdsSettings;
  }
  /** @return AdUnitContentAdsSettings */
  public function getContentAdsSettings()
  {
    return $this->contentAdsSettings;
  }
  /** @param AdStyle */
  public function setCustomStyle(AdStyle $customStyle)
  {
    $this->customStyle = $customStyle;
  }
  /** @return AdStyle */
  public function getCustomStyle()
  {
    return $this->customStyle;
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
  /** @param AdUnitMobileContentAdsSettings */
  public function setMobileContentAdsSettings(AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
  {
    $this->mobileContentAdsSettings = $mobileContentAdsSettings;
  }
  /** @return AdUnitMobileContentAdsSettings */
  public function getMobileContentAdsSettings()
  {
    return $this->mobileContentAdsSettings;
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

class AdUnitContentAdsSettings extends \Google\Model
{
  /** @var AdUnitContentAdsSettingsBackupOption */
  public $backupOption;
  /** @var string */
  public $size;
  /** @var string */
  public $type;
  protected $backupOptionType = AdUnitContentAdsSettingsBackupOption::class;
  protected $backupOptionDataType = '';
  /** @param AdUnitContentAdsSettingsBackupOption */
  public function setBackupOption(AdUnitContentAdsSettingsBackupOption $backupOption)
  {
    $this->backupOption = $backupOption;
  }
  /** @return AdUnitContentAdsSettingsBackupOption */
  public function getBackupOption()
  {
    return $this->backupOption;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class AdUnitContentAdsSettingsBackupOption extends \Google\Model
{
  /** @var string */
  public $color;
  /** @var string */
  public $type;
  /** @var string */
  public $url;

  /** @param string */
  public function setColor($color)
  {
    $this->color = $color;
  }
  /** @return string */
  public function getColor()
  {
    return $this->color;
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

class AdUnitMobileContentAdsSettings extends \Google\Model
{
  /** @var string */
  public $markupLanguage;
  /** @var string */
  public $scriptingLanguage;
  /** @var string */
  public $size;
  /** @var string */
  public $type;

  /** @param string */
  public function setMarkupLanguage($markupLanguage)
  {
    $this->markupLanguage = $markupLanguage;
  }
  /** @return string */
  public function getMarkupLanguage()
  {
    return $this->markupLanguage;
  }
  /** @param string */
  public function setScriptingLanguage($scriptingLanguage)
  {
    $this->scriptingLanguage = $scriptingLanguage;
  }
  /** @return string */
  public function getScriptingLanguage()
  {
    return $this->scriptingLanguage;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class AdUnits extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var AdUnit[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = AdUnit::class;
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
  /** @param AdUnit[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AdUnit[] */
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

class AssociationSession extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $productCodes;
  /** @var string */
  public $redirectUrl;
  /** @var string */
  public $status;
  /** @var string */
  public $userLocale;
  /** @var string */
  public $websiteLocale;
  /** @var string */
  public $websiteUrl;
  protected $collection_key = 'productCodes';
  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
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
  /** @param string[] */
  public function setProductCodes($productCodes)
  {
    $this->productCodes = $productCodes;
  }
  /** @return string[] */
  public function getProductCodes()
  {
    return $this->productCodes;
  }
  /** @param string */
  public function setRedirectUrl($redirectUrl)
  {
    $this->redirectUrl = $redirectUrl;
  }
  /** @return string */
  public function getRedirectUrl()
  {
    return $this->redirectUrl;
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
  public function setUserLocale($userLocale)
  {
    $this->userLocale = $userLocale;
  }
  /** @return string */
  public function getUserLocale()
  {
    return $this->userLocale;
  }
  /** @param string */
  public function setWebsiteLocale($websiteLocale)
  {
    $this->websiteLocale = $websiteLocale;
  }
  /** @return string */
  public function getWebsiteLocale()
  {
    return $this->websiteLocale;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class CustomChannel extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
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

class CustomChannels extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var CustomChannel[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = CustomChannel::class;
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
  /** @param CustomChannel[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CustomChannel[] */
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

class Report extends \Google\Collection
{
  /** @var string[] */
  public $averages;
  /** @var ReportHeaders[] */
  public $headers;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $rows;
  /** @var string */
  public $totalMatchedRows;
  /** @var string[] */
  public $totals;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $headersType = ReportHeaders::class;
  protected $headersDataType = 'array';
  /** @param string[] */
  public function setAverages($averages)
  {
    $this->averages = $averages;
  }
  /** @return string[] */
  public function getAverages()
  {
    return $this->averages;
  }
  /** @param ReportHeaders[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return ReportHeaders[] */
  public function getHeaders()
  {
    return $this->headers;
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
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return string[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setTotalMatchedRows($totalMatchedRows)
  {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  /** @return string */
  public function getTotalMatchedRows()
  {
    return $this->totalMatchedRows;
  }
  /** @param string[] */
  public function setTotals($totals)
  {
    $this->totals = $totals;
  }
  /** @return string[] */
  public function getTotals()
  {
    return $this->totals;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class ReportHeaders extends \Google\Model
{
  /** @var string */
  public $currency;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
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

class UrlChannel extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $urlPattern;

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
  public function setUrlPattern($urlPattern)
  {
    $this->urlPattern = $urlPattern;
  }
  /** @return string */
  public function getUrlPattern()
  {
    return $this->urlPattern;
  }
}

class UrlChannels extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var UrlChannel[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = UrlChannel::class;
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
  /** @param UrlChannel[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return UrlChannel[] */
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_AdSenseHost_Account');
class_alias(Accounts::class, 'Google_Service_AdSenseHost_Accounts');
class_alias(AdClient::class, 'Google_Service_AdSenseHost_AdClient');
class_alias(AdClients::class, 'Google_Service_AdSenseHost_AdClients');
class_alias(AdCode::class, 'Google_Service_AdSenseHost_AdCode');
class_alias(AdStyle::class, 'Google_Service_AdSenseHost_AdStyle');
class_alias(AdStyleColors::class, 'Google_Service_AdSenseHost_AdStyleColors');
class_alias(AdStyleFont::class, 'Google_Service_AdSenseHost_AdStyleFont');
class_alias(AdUnit::class, 'Google_Service_AdSenseHost_AdUnit');
class_alias(AdUnitContentAdsSettings::class, 'Google_Service_AdSenseHost_AdUnitContentAdsSettings');
class_alias(AdUnitContentAdsSettingsBackupOption::class, 'Google_Service_AdSenseHost_AdUnitContentAdsSettingsBackupOption');
class_alias(AdUnitMobileContentAdsSettings::class, 'Google_Service_AdSenseHost_AdUnitMobileContentAdsSettings');
class_alias(AdUnits::class, 'Google_Service_AdSenseHost_AdUnits');
class_alias(AssociationSession::class, 'Google_Service_AdSenseHost_AssociationSession');
class_alias(CustomChannel::class, 'Google_Service_AdSenseHost_CustomChannel');
class_alias(CustomChannels::class, 'Google_Service_AdSenseHost_CustomChannels');
class_alias(Report::class, 'Google_Service_AdSenseHost_Report');
class_alias(ReportHeaders::class, 'Google_Service_AdSenseHost_ReportHeaders');
class_alias(UrlChannel::class, 'Google_Service_AdSenseHost_UrlChannel');
class_alias(UrlChannels::class, 'Google_Service_AdSenseHost_UrlChannels');
