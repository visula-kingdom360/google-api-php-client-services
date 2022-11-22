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

namespace Google\Service\Docs;

class AutoText extends \Google\Collection
{
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  /** @var string */
  public $type;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
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

class Background extends \Google\Model
{
  /** @var OptionalColor */
  public $color;
  protected $colorType = OptionalColor::class;
  protected $colorDataType = '';
  /** @param OptionalColor */
  public function setColor(OptionalColor $color)
  {
    $this->color = $color;
  }
  /** @return OptionalColor */
  public function getColor()
  {
    return $this->color;
  }
}

class BackgroundSuggestionState extends \Google\Model
{
  /** @var bool */
  public $backgroundColorSuggested;

  /** @param bool */
  public function setBackgroundColorSuggested($backgroundColorSuggested)
  {
    $this->backgroundColorSuggested = $backgroundColorSuggested;
  }
  /** @return bool */
  public function getBackgroundColorSuggested()
  {
    return $this->backgroundColorSuggested;
  }
}

class BatchUpdateDocumentRequest extends \Google\Collection
{
  /** @var Request[] */
  public $requests;
  /** @var WriteControl */
  public $writeControl;
  protected $collection_key = 'requests';
  protected $requestsType = Request::class;
  protected $requestsDataType = 'array';
  protected $writeControlType = WriteControl::class;
  protected $writeControlDataType = '';
  /** @param Request[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return Request[] */
  public function getRequests()
  {
    return $this->requests;
  }
  /** @param WriteControl */
  public function setWriteControl(WriteControl $writeControl)
  {
    $this->writeControl = $writeControl;
  }
  /** @return WriteControl */
  public function getWriteControl()
  {
    return $this->writeControl;
  }
}

class BatchUpdateDocumentResponse extends \Google\Collection
{
  /** @var string */
  public $documentId;
  /** @var Response[] */
  public $replies;
  /** @var WriteControl */
  public $writeControl;
  protected $collection_key = 'replies';
  protected $repliesType = Response::class;
  protected $repliesDataType = 'array';
  protected $writeControlType = WriteControl::class;
  protected $writeControlDataType = '';
  /** @param string */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return string */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /** @param Response[] */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /** @return Response[] */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param WriteControl */
  public function setWriteControl(WriteControl $writeControl)
  {
    $this->writeControl = $writeControl;
  }
  /** @return WriteControl */
  public function getWriteControl()
  {
    return $this->writeControl;
  }
}

class Body extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  protected $collection_key = 'content';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
}

class Bullet extends \Google\Model
{
  /** @var string */
  public $listId;
  /** @var int */
  public $nestingLevel;
  /** @var TextStyle */
  public $textStyle;
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setListId($listId)
  {
    $this->listId = $listId;
  }
  /** @return string */
  public function getListId()
  {
    return $this->listId;
  }
  /** @param int */
  public function setNestingLevel($nestingLevel)
  {
    $this->nestingLevel = $nestingLevel;
  }
  /** @return int */
  public function getNestingLevel()
  {
    return $this->nestingLevel;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class BulletSuggestionState extends \Google\Model
{
  /** @var bool */
  public $listIdSuggested;
  /** @var bool */
  public $nestingLevelSuggested;
  /** @var TextStyleSuggestionState */
  public $textStyleSuggestionState;
  protected $textStyleSuggestionStateType = TextStyleSuggestionState::class;
  protected $textStyleSuggestionStateDataType = '';
  /** @param bool */
  public function setListIdSuggested($listIdSuggested)
  {
    $this->listIdSuggested = $listIdSuggested;
  }
  /** @return bool */
  public function getListIdSuggested()
  {
    return $this->listIdSuggested;
  }
  /** @param bool */
  public function setNestingLevelSuggested($nestingLevelSuggested)
  {
    $this->nestingLevelSuggested = $nestingLevelSuggested;
  }
  /** @return bool */
  public function getNestingLevelSuggested()
  {
    return $this->nestingLevelSuggested;
  }
  /** @param TextStyleSuggestionState */
  public function setTextStyleSuggestionState(TextStyleSuggestionState $textStyleSuggestionState)
  {
    $this->textStyleSuggestionState = $textStyleSuggestionState;
  }
  /** @return TextStyleSuggestionState */
  public function getTextStyleSuggestionState()
  {
    return $this->textStyleSuggestionState;
  }
}

class Color extends \Google\Model
{
  /** @var RgbColor */
  public $rgbColor;
  protected $rgbColorType = RgbColor::class;
  protected $rgbColorDataType = '';
  /** @param RgbColor */
  public function setRgbColor(RgbColor $rgbColor)
  {
    $this->rgbColor = $rgbColor;
  }
  /** @return RgbColor */
  public function getRgbColor()
  {
    return $this->rgbColor;
  }
}

class ColumnBreak extends \Google\Collection
{
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class CreateFooterRequest extends \Google\Model
{
  /** @var Location */
  public $sectionBreakLocation;
  /** @var string */
  public $type;
  protected $sectionBreakLocationType = Location::class;
  protected $sectionBreakLocationDataType = '';
  /** @param Location */
  public function setSectionBreakLocation(Location $sectionBreakLocation)
  {
    $this->sectionBreakLocation = $sectionBreakLocation;
  }
  /** @return Location */
  public function getSectionBreakLocation()
  {
    return $this->sectionBreakLocation;
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

class CreateFooterResponse extends \Google\Model
{
  /** @var string */
  public $footerId;

  /** @param string */
  public function setFooterId($footerId)
  {
    $this->footerId = $footerId;
  }
  /** @return string */
  public function getFooterId()
  {
    return $this->footerId;
  }
}

class CreateFootnoteRequest extends \Google\Model
{
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
}

class CreateFootnoteResponse extends \Google\Model
{
  /** @var string */
  public $footnoteId;

  /** @param string */
  public function setFootnoteId($footnoteId)
  {
    $this->footnoteId = $footnoteId;
  }
  /** @return string */
  public function getFootnoteId()
  {
    return $this->footnoteId;
  }
}

class CreateHeaderRequest extends \Google\Model
{
  /** @var Location */
  public $sectionBreakLocation;
  /** @var string */
  public $type;
  protected $sectionBreakLocationType = Location::class;
  protected $sectionBreakLocationDataType = '';
  /** @param Location */
  public function setSectionBreakLocation(Location $sectionBreakLocation)
  {
    $this->sectionBreakLocation = $sectionBreakLocation;
  }
  /** @return Location */
  public function getSectionBreakLocation()
  {
    return $this->sectionBreakLocation;
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

class CreateHeaderResponse extends \Google\Model
{
  /** @var string */
  public $headerId;

  /** @param string */
  public function setHeaderId($headerId)
  {
    $this->headerId = $headerId;
  }
  /** @return string */
  public function getHeaderId()
  {
    return $this->headerId;
  }
}

class CreateNamedRangeRequest extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var Range */
  public $range;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
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
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
}

class CreateNamedRangeResponse extends \Google\Model
{
  /** @var string */
  public $namedRangeId;

  /** @param string */
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
}

class CreateParagraphBulletsRequest extends \Google\Model
{
  /** @var string */
  public $bulletPreset;
  /** @var Range */
  public $range;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setBulletPreset($bulletPreset)
  {
    $this->bulletPreset = $bulletPreset;
  }
  /** @return string */
  public function getBulletPreset()
  {
    return $this->bulletPreset;
  }
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
}

class CropProperties extends \Google\Model
{
  /** @var float */
  public $angle;
  /** @var float */
  public $offsetBottom;
  /** @var float */
  public $offsetLeft;
  /** @var float */
  public $offsetRight;
  /** @var float */
  public $offsetTop;

  /** @param float */
  public function setAngle($angle)
  {
    $this->angle = $angle;
  }
  /** @return float */
  public function getAngle()
  {
    return $this->angle;
  }
  /** @param float */
  public function setOffsetBottom($offsetBottom)
  {
    $this->offsetBottom = $offsetBottom;
  }
  /** @return float */
  public function getOffsetBottom()
  {
    return $this->offsetBottom;
  }
  /** @param float */
  public function setOffsetLeft($offsetLeft)
  {
    $this->offsetLeft = $offsetLeft;
  }
  /** @return float */
  public function getOffsetLeft()
  {
    return $this->offsetLeft;
  }
  /** @param float */
  public function setOffsetRight($offsetRight)
  {
    $this->offsetRight = $offsetRight;
  }
  /** @return float */
  public function getOffsetRight()
  {
    return $this->offsetRight;
  }
  /** @param float */
  public function setOffsetTop($offsetTop)
  {
    $this->offsetTop = $offsetTop;
  }
  /** @return float */
  public function getOffsetTop()
  {
    return $this->offsetTop;
  }
}

class CropPropertiesSuggestionState extends \Google\Model
{
  /** @var bool */
  public $angleSuggested;
  /** @var bool */
  public $offsetBottomSuggested;
  /** @var bool */
  public $offsetLeftSuggested;
  /** @var bool */
  public $offsetRightSuggested;
  /** @var bool */
  public $offsetTopSuggested;

  /** @param bool */
  public function setAngleSuggested($angleSuggested)
  {
    $this->angleSuggested = $angleSuggested;
  }
  /** @return bool */
  public function getAngleSuggested()
  {
    return $this->angleSuggested;
  }
  /** @param bool */
  public function setOffsetBottomSuggested($offsetBottomSuggested)
  {
    $this->offsetBottomSuggested = $offsetBottomSuggested;
  }
  /** @return bool */
  public function getOffsetBottomSuggested()
  {
    return $this->offsetBottomSuggested;
  }
  /** @param bool */
  public function setOffsetLeftSuggested($offsetLeftSuggested)
  {
    $this->offsetLeftSuggested = $offsetLeftSuggested;
  }
  /** @return bool */
  public function getOffsetLeftSuggested()
  {
    return $this->offsetLeftSuggested;
  }
  /** @param bool */
  public function setOffsetRightSuggested($offsetRightSuggested)
  {
    $this->offsetRightSuggested = $offsetRightSuggested;
  }
  /** @return bool */
  public function getOffsetRightSuggested()
  {
    return $this->offsetRightSuggested;
  }
  /** @param bool */
  public function setOffsetTopSuggested($offsetTopSuggested)
  {
    $this->offsetTopSuggested = $offsetTopSuggested;
  }
  /** @return bool */
  public function getOffsetTopSuggested()
  {
    return $this->offsetTopSuggested;
  }
}

class DeleteContentRangeRequest extends \Google\Model
{
  /** @var Range */
  public $range;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
}

class DeleteFooterRequest extends \Google\Model
{
  /** @var string */
  public $footerId;

  /** @param string */
  public function setFooterId($footerId)
  {
    $this->footerId = $footerId;
  }
  /** @return string */
  public function getFooterId()
  {
    return $this->footerId;
  }
}

class DeleteHeaderRequest extends \Google\Model
{
  /** @var string */
  public $headerId;

  /** @param string */
  public function setHeaderId($headerId)
  {
    $this->headerId = $headerId;
  }
  /** @return string */
  public function getHeaderId()
  {
    return $this->headerId;
  }
}

class DeleteNamedRangeRequest extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $namedRangeId;

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
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
}

class DeleteParagraphBulletsRequest extends \Google\Model
{
  /** @var Range */
  public $range;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
}

class DeletePositionedObjectRequest extends \Google\Model
{
  /** @var string */
  public $objectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class DeleteTableColumnRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $tableCellLocation;
  protected $tableCellLocationType = TableCellLocation::class;
  protected $tableCellLocationDataType = '';
  /** @param TableCellLocation */
  public function setTableCellLocation(TableCellLocation $tableCellLocation)
  {
    $this->tableCellLocation = $tableCellLocation;
  }
  /** @return TableCellLocation */
  public function getTableCellLocation()
  {
    return $this->tableCellLocation;
  }
}

class DeleteTableRowRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $tableCellLocation;
  protected $tableCellLocationType = TableCellLocation::class;
  protected $tableCellLocationDataType = '';
  /** @param TableCellLocation */
  public function setTableCellLocation(TableCellLocation $tableCellLocation)
  {
    $this->tableCellLocation = $tableCellLocation;
  }
  /** @return TableCellLocation */
  public function getTableCellLocation()
  {
    return $this->tableCellLocation;
  }
}

class Dimension extends \Google\Model
{
  public $magnitude;
  /** @var string */
  public $unit;

  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  public function getMagnitude()
  {
    return $this->magnitude;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class DocsList extends \Google\Collection
{
  /** @var ListProperties */
  public $listProperties;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string */
  public $suggestedInsertionId;
  /** @var SuggestedListProperties[] */
  public $suggestedListPropertiesChanges;
  protected $collection_key = 'suggestedDeletionIds';
  protected $listPropertiesType = ListProperties::class;
  protected $listPropertiesDataType = '';
  protected $suggestedListPropertiesChangesType = SuggestedListProperties::class;
  protected $suggestedListPropertiesChangesDataType = 'map';
  /** @param ListProperties */
  public function setListProperties(ListProperties $listProperties)
  {
    $this->listProperties = $listProperties;
  }
  /** @return ListProperties */
  public function getListProperties()
  {
    return $this->listProperties;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string */
  public function setSuggestedInsertionId($suggestedInsertionId)
  {
    $this->suggestedInsertionId = $suggestedInsertionId;
  }
  /** @return string */
  public function getSuggestedInsertionId()
  {
    return $this->suggestedInsertionId;
  }
  /** @param SuggestedListProperties[] */
  public function setSuggestedListPropertiesChanges($suggestedListPropertiesChanges)
  {
    $this->suggestedListPropertiesChanges = $suggestedListPropertiesChanges;
  }
  /** @return SuggestedListProperties[] */
  public function getSuggestedListPropertiesChanges()
  {
    return $this->suggestedListPropertiesChanges;
  }
}

class Document extends \Google\Model
{
  /** @var Body */
  public $body;
  /** @var string */
  public $documentId;
  /** @var DocumentStyle */
  public $documentStyle;
  /** @var Footer[] */
  public $footers;
  /** @var Footnote[] */
  public $footnotes;
  /** @var Header[] */
  public $headers;
  /** @var InlineObject[] */
  public $inlineObjects;
  /** @var DocsList[] */
  public $lists;
  /** @var NamedRanges[] */
  public $namedRanges;
  /** @var NamedStyles */
  public $namedStyles;
  /** @var PositionedObject[] */
  public $positionedObjects;
  /** @var string */
  public $revisionId;
  /** @var SuggestedDocumentStyle[] */
  public $suggestedDocumentStyleChanges;
  /** @var SuggestedNamedStyles[] */
  public $suggestedNamedStylesChanges;
  /** @var string */
  public $suggestionsViewMode;
  /** @var string */
  public $title;
  protected $bodyType = Body::class;
  protected $bodyDataType = '';
  protected $documentStyleType = DocumentStyle::class;
  protected $documentStyleDataType = '';
  protected $footersType = Footer::class;
  protected $footersDataType = 'map';
  protected $footnotesType = Footnote::class;
  protected $footnotesDataType = 'map';
  protected $headersType = Header::class;
  protected $headersDataType = 'map';
  protected $inlineObjectsType = InlineObject::class;
  protected $inlineObjectsDataType = 'map';
  protected $listsType = DocsList::class;
  protected $listsDataType = 'map';
  protected $namedRangesType = NamedRanges::class;
  protected $namedRangesDataType = 'map';
  protected $namedStylesType = NamedStyles::class;
  protected $namedStylesDataType = '';
  protected $positionedObjectsType = PositionedObject::class;
  protected $positionedObjectsDataType = 'map';
  protected $suggestedDocumentStyleChangesType = SuggestedDocumentStyle::class;
  protected $suggestedDocumentStyleChangesDataType = 'map';
  protected $suggestedNamedStylesChangesType = SuggestedNamedStyles::class;
  protected $suggestedNamedStylesChangesDataType = 'map';
  /** @param Body */
  public function setBody(Body $body)
  {
    $this->body = $body;
  }
  /** @return Body */
  public function getBody()
  {
    return $this->body;
  }
  /** @param string */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return string */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /** @param DocumentStyle */
  public function setDocumentStyle(DocumentStyle $documentStyle)
  {
    $this->documentStyle = $documentStyle;
  }
  /** @return DocumentStyle */
  public function getDocumentStyle()
  {
    return $this->documentStyle;
  }
  /** @param Footer[] */
  public function setFooters($footers)
  {
    $this->footers = $footers;
  }
  /** @return Footer[] */
  public function getFooters()
  {
    return $this->footers;
  }
  /** @param Footnote[] */
  public function setFootnotes($footnotes)
  {
    $this->footnotes = $footnotes;
  }
  /** @return Footnote[] */
  public function getFootnotes()
  {
    return $this->footnotes;
  }
  /** @param Header[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return Header[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param InlineObject[] */
  public function setInlineObjects($inlineObjects)
  {
    $this->inlineObjects = $inlineObjects;
  }
  /** @return InlineObject[] */
  public function getInlineObjects()
  {
    return $this->inlineObjects;
  }
  /** @param DocsList[] */
  public function setLists($lists)
  {
    $this->lists = $lists;
  }
  /** @return DocsList[] */
  public function getLists()
  {
    return $this->lists;
  }
  /** @param NamedRanges[] */
  public function setNamedRanges($namedRanges)
  {
    $this->namedRanges = $namedRanges;
  }
  /** @return NamedRanges[] */
  public function getNamedRanges()
  {
    return $this->namedRanges;
  }
  /** @param NamedStyles */
  public function setNamedStyles(NamedStyles $namedStyles)
  {
    $this->namedStyles = $namedStyles;
  }
  /** @return NamedStyles */
  public function getNamedStyles()
  {
    return $this->namedStyles;
  }
  /** @param PositionedObject[] */
  public function setPositionedObjects($positionedObjects)
  {
    $this->positionedObjects = $positionedObjects;
  }
  /** @return PositionedObject[] */
  public function getPositionedObjects()
  {
    return $this->positionedObjects;
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
  /** @param SuggestedDocumentStyle[] */
  public function setSuggestedDocumentStyleChanges($suggestedDocumentStyleChanges)
  {
    $this->suggestedDocumentStyleChanges = $suggestedDocumentStyleChanges;
  }
  /** @return SuggestedDocumentStyle[] */
  public function getSuggestedDocumentStyleChanges()
  {
    return $this->suggestedDocumentStyleChanges;
  }
  /** @param SuggestedNamedStyles[] */
  public function setSuggestedNamedStylesChanges($suggestedNamedStylesChanges)
  {
    $this->suggestedNamedStylesChanges = $suggestedNamedStylesChanges;
  }
  /** @return SuggestedNamedStyles[] */
  public function getSuggestedNamedStylesChanges()
  {
    return $this->suggestedNamedStylesChanges;
  }
  /** @param string */
  public function setSuggestionsViewMode($suggestionsViewMode)
  {
    $this->suggestionsViewMode = $suggestionsViewMode;
  }
  /** @return string */
  public function getSuggestionsViewMode()
  {
    return $this->suggestionsViewMode;
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

class DocumentStyle extends \Google\Model
{
  /** @var Background */
  public $background;
  /** @var string */
  public $defaultFooterId;
  /** @var string */
  public $defaultHeaderId;
  /** @var string */
  public $evenPageFooterId;
  /** @var string */
  public $evenPageHeaderId;
  /** @var string */
  public $firstPageFooterId;
  /** @var string */
  public $firstPageHeaderId;
  /** @var Dimension */
  public $marginBottom;
  /** @var Dimension */
  public $marginFooter;
  /** @var Dimension */
  public $marginHeader;
  /** @var Dimension */
  public $marginLeft;
  /** @var Dimension */
  public $marginRight;
  /** @var Dimension */
  public $marginTop;
  /** @var int */
  public $pageNumberStart;
  /** @var Size */
  public $pageSize;
  /** @var bool */
  public $useCustomHeaderFooterMargins;
  /** @var bool */
  public $useEvenPageHeaderFooter;
  /** @var bool */
  public $useFirstPageHeaderFooter;
  protected $backgroundType = Background::class;
  protected $backgroundDataType = '';
  protected $marginBottomType = Dimension::class;
  protected $marginBottomDataType = '';
  protected $marginFooterType = Dimension::class;
  protected $marginFooterDataType = '';
  protected $marginHeaderType = Dimension::class;
  protected $marginHeaderDataType = '';
  protected $marginLeftType = Dimension::class;
  protected $marginLeftDataType = '';
  protected $marginRightType = Dimension::class;
  protected $marginRightDataType = '';
  protected $marginTopType = Dimension::class;
  protected $marginTopDataType = '';
  protected $pageSizeType = Size::class;
  protected $pageSizeDataType = '';
  /** @param Background */
  public function setBackground(Background $background)
  {
    $this->background = $background;
  }
  /** @return Background */
  public function getBackground()
  {
    return $this->background;
  }
  /** @param string */
  public function setDefaultFooterId($defaultFooterId)
  {
    $this->defaultFooterId = $defaultFooterId;
  }
  /** @return string */
  public function getDefaultFooterId()
  {
    return $this->defaultFooterId;
  }
  /** @param string */
  public function setDefaultHeaderId($defaultHeaderId)
  {
    $this->defaultHeaderId = $defaultHeaderId;
  }
  /** @return string */
  public function getDefaultHeaderId()
  {
    return $this->defaultHeaderId;
  }
  /** @param string */
  public function setEvenPageFooterId($evenPageFooterId)
  {
    $this->evenPageFooterId = $evenPageFooterId;
  }
  /** @return string */
  public function getEvenPageFooterId()
  {
    return $this->evenPageFooterId;
  }
  /** @param string */
  public function setEvenPageHeaderId($evenPageHeaderId)
  {
    $this->evenPageHeaderId = $evenPageHeaderId;
  }
  /** @return string */
  public function getEvenPageHeaderId()
  {
    return $this->evenPageHeaderId;
  }
  /** @param string */
  public function setFirstPageFooterId($firstPageFooterId)
  {
    $this->firstPageFooterId = $firstPageFooterId;
  }
  /** @return string */
  public function getFirstPageFooterId()
  {
    return $this->firstPageFooterId;
  }
  /** @param string */
  public function setFirstPageHeaderId($firstPageHeaderId)
  {
    $this->firstPageHeaderId = $firstPageHeaderId;
  }
  /** @return string */
  public function getFirstPageHeaderId()
  {
    return $this->firstPageHeaderId;
  }
  /** @param Dimension */
  public function setMarginBottom(Dimension $marginBottom)
  {
    $this->marginBottom = $marginBottom;
  }
  /** @return Dimension */
  public function getMarginBottom()
  {
    return $this->marginBottom;
  }
  /** @param Dimension */
  public function setMarginFooter(Dimension $marginFooter)
  {
    $this->marginFooter = $marginFooter;
  }
  /** @return Dimension */
  public function getMarginFooter()
  {
    return $this->marginFooter;
  }
  /** @param Dimension */
  public function setMarginHeader(Dimension $marginHeader)
  {
    $this->marginHeader = $marginHeader;
  }
  /** @return Dimension */
  public function getMarginHeader()
  {
    return $this->marginHeader;
  }
  /** @param Dimension */
  public function setMarginLeft(Dimension $marginLeft)
  {
    $this->marginLeft = $marginLeft;
  }
  /** @return Dimension */
  public function getMarginLeft()
  {
    return $this->marginLeft;
  }
  /** @param Dimension */
  public function setMarginRight(Dimension $marginRight)
  {
    $this->marginRight = $marginRight;
  }
  /** @return Dimension */
  public function getMarginRight()
  {
    return $this->marginRight;
  }
  /** @param Dimension */
  public function setMarginTop(Dimension $marginTop)
  {
    $this->marginTop = $marginTop;
  }
  /** @return Dimension */
  public function getMarginTop()
  {
    return $this->marginTop;
  }
  /** @param int */
  public function setPageNumberStart($pageNumberStart)
  {
    $this->pageNumberStart = $pageNumberStart;
  }
  /** @return int */
  public function getPageNumberStart()
  {
    return $this->pageNumberStart;
  }
  /** @param Size */
  public function setPageSize(Size $pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return Size */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param bool */
  public function setUseCustomHeaderFooterMargins($useCustomHeaderFooterMargins)
  {
    $this->useCustomHeaderFooterMargins = $useCustomHeaderFooterMargins;
  }
  /** @return bool */
  public function getUseCustomHeaderFooterMargins()
  {
    return $this->useCustomHeaderFooterMargins;
  }
  /** @param bool */
  public function setUseEvenPageHeaderFooter($useEvenPageHeaderFooter)
  {
    $this->useEvenPageHeaderFooter = $useEvenPageHeaderFooter;
  }
  /** @return bool */
  public function getUseEvenPageHeaderFooter()
  {
    return $this->useEvenPageHeaderFooter;
  }
  /** @param bool */
  public function setUseFirstPageHeaderFooter($useFirstPageHeaderFooter)
  {
    $this->useFirstPageHeaderFooter = $useFirstPageHeaderFooter;
  }
  /** @return bool */
  public function getUseFirstPageHeaderFooter()
  {
    return $this->useFirstPageHeaderFooter;
  }
}

class DocumentStyleSuggestionState extends \Google\Model
{
  /** @var BackgroundSuggestionState */
  public $backgroundSuggestionState;
  /** @var bool */
  public $defaultFooterIdSuggested;
  /** @var bool */
  public $defaultHeaderIdSuggested;
  /** @var bool */
  public $evenPageFooterIdSuggested;
  /** @var bool */
  public $evenPageHeaderIdSuggested;
  /** @var bool */
  public $firstPageFooterIdSuggested;
  /** @var bool */
  public $firstPageHeaderIdSuggested;
  /** @var bool */
  public $marginBottomSuggested;
  /** @var bool */
  public $marginFooterSuggested;
  /** @var bool */
  public $marginHeaderSuggested;
  /** @var bool */
  public $marginLeftSuggested;
  /** @var bool */
  public $marginRightSuggested;
  /** @var bool */
  public $marginTopSuggested;
  /** @var bool */
  public $pageNumberStartSuggested;
  /** @var SizeSuggestionState */
  public $pageSizeSuggestionState;
  /** @var bool */
  public $useCustomHeaderFooterMarginsSuggested;
  /** @var bool */
  public $useEvenPageHeaderFooterSuggested;
  /** @var bool */
  public $useFirstPageHeaderFooterSuggested;
  protected $backgroundSuggestionStateType = BackgroundSuggestionState::class;
  protected $backgroundSuggestionStateDataType = '';
  protected $pageSizeSuggestionStateType = SizeSuggestionState::class;
  protected $pageSizeSuggestionStateDataType = '';
  /** @param BackgroundSuggestionState */
  public function setBackgroundSuggestionState(BackgroundSuggestionState $backgroundSuggestionState)
  {
    $this->backgroundSuggestionState = $backgroundSuggestionState;
  }
  /** @return BackgroundSuggestionState */
  public function getBackgroundSuggestionState()
  {
    return $this->backgroundSuggestionState;
  }
  /** @param bool */
  public function setDefaultFooterIdSuggested($defaultFooterIdSuggested)
  {
    $this->defaultFooterIdSuggested = $defaultFooterIdSuggested;
  }
  /** @return bool */
  public function getDefaultFooterIdSuggested()
  {
    return $this->defaultFooterIdSuggested;
  }
  /** @param bool */
  public function setDefaultHeaderIdSuggested($defaultHeaderIdSuggested)
  {
    $this->defaultHeaderIdSuggested = $defaultHeaderIdSuggested;
  }
  /** @return bool */
  public function getDefaultHeaderIdSuggested()
  {
    return $this->defaultHeaderIdSuggested;
  }
  /** @param bool */
  public function setEvenPageFooterIdSuggested($evenPageFooterIdSuggested)
  {
    $this->evenPageFooterIdSuggested = $evenPageFooterIdSuggested;
  }
  /** @return bool */
  public function getEvenPageFooterIdSuggested()
  {
    return $this->evenPageFooterIdSuggested;
  }
  /** @param bool */
  public function setEvenPageHeaderIdSuggested($evenPageHeaderIdSuggested)
  {
    $this->evenPageHeaderIdSuggested = $evenPageHeaderIdSuggested;
  }
  /** @return bool */
  public function getEvenPageHeaderIdSuggested()
  {
    return $this->evenPageHeaderIdSuggested;
  }
  /** @param bool */
  public function setFirstPageFooterIdSuggested($firstPageFooterIdSuggested)
  {
    $this->firstPageFooterIdSuggested = $firstPageFooterIdSuggested;
  }
  /** @return bool */
  public function getFirstPageFooterIdSuggested()
  {
    return $this->firstPageFooterIdSuggested;
  }
  /** @param bool */
  public function setFirstPageHeaderIdSuggested($firstPageHeaderIdSuggested)
  {
    $this->firstPageHeaderIdSuggested = $firstPageHeaderIdSuggested;
  }
  /** @return bool */
  public function getFirstPageHeaderIdSuggested()
  {
    return $this->firstPageHeaderIdSuggested;
  }
  /** @param bool */
  public function setMarginBottomSuggested($marginBottomSuggested)
  {
    $this->marginBottomSuggested = $marginBottomSuggested;
  }
  /** @return bool */
  public function getMarginBottomSuggested()
  {
    return $this->marginBottomSuggested;
  }
  /** @param bool */
  public function setMarginFooterSuggested($marginFooterSuggested)
  {
    $this->marginFooterSuggested = $marginFooterSuggested;
  }
  /** @return bool */
  public function getMarginFooterSuggested()
  {
    return $this->marginFooterSuggested;
  }
  /** @param bool */
  public function setMarginHeaderSuggested($marginHeaderSuggested)
  {
    $this->marginHeaderSuggested = $marginHeaderSuggested;
  }
  /** @return bool */
  public function getMarginHeaderSuggested()
  {
    return $this->marginHeaderSuggested;
  }
  /** @param bool */
  public function setMarginLeftSuggested($marginLeftSuggested)
  {
    $this->marginLeftSuggested = $marginLeftSuggested;
  }
  /** @return bool */
  public function getMarginLeftSuggested()
  {
    return $this->marginLeftSuggested;
  }
  /** @param bool */
  public function setMarginRightSuggested($marginRightSuggested)
  {
    $this->marginRightSuggested = $marginRightSuggested;
  }
  /** @return bool */
  public function getMarginRightSuggested()
  {
    return $this->marginRightSuggested;
  }
  /** @param bool */
  public function setMarginTopSuggested($marginTopSuggested)
  {
    $this->marginTopSuggested = $marginTopSuggested;
  }
  /** @return bool */
  public function getMarginTopSuggested()
  {
    return $this->marginTopSuggested;
  }
  /** @param bool */
  public function setPageNumberStartSuggested($pageNumberStartSuggested)
  {
    $this->pageNumberStartSuggested = $pageNumberStartSuggested;
  }
  /** @return bool */
  public function getPageNumberStartSuggested()
  {
    return $this->pageNumberStartSuggested;
  }
  /** @param SizeSuggestionState */
  public function setPageSizeSuggestionState(SizeSuggestionState $pageSizeSuggestionState)
  {
    $this->pageSizeSuggestionState = $pageSizeSuggestionState;
  }
  /** @return SizeSuggestionState */
  public function getPageSizeSuggestionState()
  {
    return $this->pageSizeSuggestionState;
  }
  /** @param bool */
  public function setUseCustomHeaderFooterMarginsSuggested($useCustomHeaderFooterMarginsSuggested)
  {
    $this->useCustomHeaderFooterMarginsSuggested = $useCustomHeaderFooterMarginsSuggested;
  }
  /** @return bool */
  public function getUseCustomHeaderFooterMarginsSuggested()
  {
    return $this->useCustomHeaderFooterMarginsSuggested;
  }
  /** @param bool */
  public function setUseEvenPageHeaderFooterSuggested($useEvenPageHeaderFooterSuggested)
  {
    $this->useEvenPageHeaderFooterSuggested = $useEvenPageHeaderFooterSuggested;
  }
  /** @return bool */
  public function getUseEvenPageHeaderFooterSuggested()
  {
    return $this->useEvenPageHeaderFooterSuggested;
  }
  /** @param bool */
  public function setUseFirstPageHeaderFooterSuggested($useFirstPageHeaderFooterSuggested)
  {
    $this->useFirstPageHeaderFooterSuggested = $useFirstPageHeaderFooterSuggested;
  }
  /** @return bool */
  public function getUseFirstPageHeaderFooterSuggested()
  {
    return $this->useFirstPageHeaderFooterSuggested;
  }
}

class EmbeddedDrawingProperties extends \Google\Model
{
}

class EmbeddedDrawingPropertiesSuggestionState extends \Google\Model
{
}

class EmbeddedObject extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var EmbeddedDrawingProperties */
  public $embeddedDrawingProperties;
  /** @var EmbeddedObjectBorder */
  public $embeddedObjectBorder;
  /** @var ImageProperties */
  public $imageProperties;
  /** @var LinkedContentReference */
  public $linkedContentReference;
  /** @var Dimension */
  public $marginBottom;
  /** @var Dimension */
  public $marginLeft;
  /** @var Dimension */
  public $marginRight;
  /** @var Dimension */
  public $marginTop;
  /** @var Size */
  public $size;
  /** @var string */
  public $title;
  protected $embeddedDrawingPropertiesType = EmbeddedDrawingProperties::class;
  protected $embeddedDrawingPropertiesDataType = '';
  protected $embeddedObjectBorderType = EmbeddedObjectBorder::class;
  protected $embeddedObjectBorderDataType = '';
  protected $imagePropertiesType = ImageProperties::class;
  protected $imagePropertiesDataType = '';
  protected $linkedContentReferenceType = LinkedContentReference::class;
  protected $linkedContentReferenceDataType = '';
  protected $marginBottomType = Dimension::class;
  protected $marginBottomDataType = '';
  protected $marginLeftType = Dimension::class;
  protected $marginLeftDataType = '';
  protected $marginRightType = Dimension::class;
  protected $marginRightDataType = '';
  protected $marginTopType = Dimension::class;
  protected $marginTopDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
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
  /** @param EmbeddedDrawingProperties */
  public function setEmbeddedDrawingProperties(EmbeddedDrawingProperties $embeddedDrawingProperties)
  {
    $this->embeddedDrawingProperties = $embeddedDrawingProperties;
  }
  /** @return EmbeddedDrawingProperties */
  public function getEmbeddedDrawingProperties()
  {
    return $this->embeddedDrawingProperties;
  }
  /** @param EmbeddedObjectBorder */
  public function setEmbeddedObjectBorder(EmbeddedObjectBorder $embeddedObjectBorder)
  {
    $this->embeddedObjectBorder = $embeddedObjectBorder;
  }
  /** @return EmbeddedObjectBorder */
  public function getEmbeddedObjectBorder()
  {
    return $this->embeddedObjectBorder;
  }
  /** @param ImageProperties */
  public function setImageProperties(ImageProperties $imageProperties)
  {
    $this->imageProperties = $imageProperties;
  }
  /** @return ImageProperties */
  public function getImageProperties()
  {
    return $this->imageProperties;
  }
  /** @param LinkedContentReference */
  public function setLinkedContentReference(LinkedContentReference $linkedContentReference)
  {
    $this->linkedContentReference = $linkedContentReference;
  }
  /** @return LinkedContentReference */
  public function getLinkedContentReference()
  {
    return $this->linkedContentReference;
  }
  /** @param Dimension */
  public function setMarginBottom(Dimension $marginBottom)
  {
    $this->marginBottom = $marginBottom;
  }
  /** @return Dimension */
  public function getMarginBottom()
  {
    return $this->marginBottom;
  }
  /** @param Dimension */
  public function setMarginLeft(Dimension $marginLeft)
  {
    $this->marginLeft = $marginLeft;
  }
  /** @return Dimension */
  public function getMarginLeft()
  {
    return $this->marginLeft;
  }
  /** @param Dimension */
  public function setMarginRight(Dimension $marginRight)
  {
    $this->marginRight = $marginRight;
  }
  /** @return Dimension */
  public function getMarginRight()
  {
    return $this->marginRight;
  }
  /** @param Dimension */
  public function setMarginTop(Dimension $marginTop)
  {
    $this->marginTop = $marginTop;
  }
  /** @return Dimension */
  public function getMarginTop()
  {
    return $this->marginTop;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
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

class EmbeddedObjectBorder extends \Google\Model
{
  /** @var OptionalColor */
  public $color;
  /** @var string */
  public $dashStyle;
  /** @var string */
  public $propertyState;
  /** @var Dimension */
  public $width;
  protected $colorType = OptionalColor::class;
  protected $colorDataType = '';
  protected $widthType = Dimension::class;
  protected $widthDataType = '';
  /** @param OptionalColor */
  public function setColor(OptionalColor $color)
  {
    $this->color = $color;
  }
  /** @return OptionalColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setDashStyle($dashStyle)
  {
    $this->dashStyle = $dashStyle;
  }
  /** @return string */
  public function getDashStyle()
  {
    return $this->dashStyle;
  }
  /** @param string */
  public function setPropertyState($propertyState)
  {
    $this->propertyState = $propertyState;
  }
  /** @return string */
  public function getPropertyState()
  {
    return $this->propertyState;
  }
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
}

class EmbeddedObjectBorderSuggestionState extends \Google\Model
{
  /** @var bool */
  public $colorSuggested;
  /** @var bool */
  public $dashStyleSuggested;
  /** @var bool */
  public $propertyStateSuggested;
  /** @var bool */
  public $widthSuggested;

  /** @param bool */
  public function setColorSuggested($colorSuggested)
  {
    $this->colorSuggested = $colorSuggested;
  }
  /** @return bool */
  public function getColorSuggested()
  {
    return $this->colorSuggested;
  }
  /** @param bool */
  public function setDashStyleSuggested($dashStyleSuggested)
  {
    $this->dashStyleSuggested = $dashStyleSuggested;
  }
  /** @return bool */
  public function getDashStyleSuggested()
  {
    return $this->dashStyleSuggested;
  }
  /** @param bool */
  public function setPropertyStateSuggested($propertyStateSuggested)
  {
    $this->propertyStateSuggested = $propertyStateSuggested;
  }
  /** @return bool */
  public function getPropertyStateSuggested()
  {
    return $this->propertyStateSuggested;
  }
  /** @param bool */
  public function setWidthSuggested($widthSuggested)
  {
    $this->widthSuggested = $widthSuggested;
  }
  /** @return bool */
  public function getWidthSuggested()
  {
    return $this->widthSuggested;
  }
}

class EmbeddedObjectSuggestionState extends \Google\Model
{
  /** @var bool */
  public $descriptionSuggested;
  /** @var EmbeddedDrawingPropertiesSuggestionState */
  public $embeddedDrawingPropertiesSuggestionState;
  /** @var EmbeddedObjectBorderSuggestionState */
  public $embeddedObjectBorderSuggestionState;
  /** @var ImagePropertiesSuggestionState */
  public $imagePropertiesSuggestionState;
  /** @var LinkedContentReferenceSuggestionState */
  public $linkedContentReferenceSuggestionState;
  /** @var bool */
  public $marginBottomSuggested;
  /** @var bool */
  public $marginLeftSuggested;
  /** @var bool */
  public $marginRightSuggested;
  /** @var bool */
  public $marginTopSuggested;
  /** @var SizeSuggestionState */
  public $sizeSuggestionState;
  /** @var bool */
  public $titleSuggested;
  protected $embeddedDrawingPropertiesSuggestionStateType = EmbeddedDrawingPropertiesSuggestionState::class;
  protected $embeddedDrawingPropertiesSuggestionStateDataType = '';
  protected $embeddedObjectBorderSuggestionStateType = EmbeddedObjectBorderSuggestionState::class;
  protected $embeddedObjectBorderSuggestionStateDataType = '';
  protected $imagePropertiesSuggestionStateType = ImagePropertiesSuggestionState::class;
  protected $imagePropertiesSuggestionStateDataType = '';
  protected $linkedContentReferenceSuggestionStateType = LinkedContentReferenceSuggestionState::class;
  protected $linkedContentReferenceSuggestionStateDataType = '';
  protected $sizeSuggestionStateType = SizeSuggestionState::class;
  protected $sizeSuggestionStateDataType = '';
  /** @param bool */
  public function setDescriptionSuggested($descriptionSuggested)
  {
    $this->descriptionSuggested = $descriptionSuggested;
  }
  /** @return bool */
  public function getDescriptionSuggested()
  {
    return $this->descriptionSuggested;
  }
  /** @param EmbeddedDrawingPropertiesSuggestionState */
  public function setEmbeddedDrawingPropertiesSuggestionState(EmbeddedDrawingPropertiesSuggestionState $embeddedDrawingPropertiesSuggestionState)
  {
    $this->embeddedDrawingPropertiesSuggestionState = $embeddedDrawingPropertiesSuggestionState;
  }
  /** @return EmbeddedDrawingPropertiesSuggestionState */
  public function getEmbeddedDrawingPropertiesSuggestionState()
  {
    return $this->embeddedDrawingPropertiesSuggestionState;
  }
  /** @param EmbeddedObjectBorderSuggestionState */
  public function setEmbeddedObjectBorderSuggestionState(EmbeddedObjectBorderSuggestionState $embeddedObjectBorderSuggestionState)
  {
    $this->embeddedObjectBorderSuggestionState = $embeddedObjectBorderSuggestionState;
  }
  /** @return EmbeddedObjectBorderSuggestionState */
  public function getEmbeddedObjectBorderSuggestionState()
  {
    return $this->embeddedObjectBorderSuggestionState;
  }
  /** @param ImagePropertiesSuggestionState */
  public function setImagePropertiesSuggestionState(ImagePropertiesSuggestionState $imagePropertiesSuggestionState)
  {
    $this->imagePropertiesSuggestionState = $imagePropertiesSuggestionState;
  }
  /** @return ImagePropertiesSuggestionState */
  public function getImagePropertiesSuggestionState()
  {
    return $this->imagePropertiesSuggestionState;
  }
  /** @param LinkedContentReferenceSuggestionState */
  public function setLinkedContentReferenceSuggestionState(LinkedContentReferenceSuggestionState $linkedContentReferenceSuggestionState)
  {
    $this->linkedContentReferenceSuggestionState = $linkedContentReferenceSuggestionState;
  }
  /** @return LinkedContentReferenceSuggestionState */
  public function getLinkedContentReferenceSuggestionState()
  {
    return $this->linkedContentReferenceSuggestionState;
  }
  /** @param bool */
  public function setMarginBottomSuggested($marginBottomSuggested)
  {
    $this->marginBottomSuggested = $marginBottomSuggested;
  }
  /** @return bool */
  public function getMarginBottomSuggested()
  {
    return $this->marginBottomSuggested;
  }
  /** @param bool */
  public function setMarginLeftSuggested($marginLeftSuggested)
  {
    $this->marginLeftSuggested = $marginLeftSuggested;
  }
  /** @return bool */
  public function getMarginLeftSuggested()
  {
    return $this->marginLeftSuggested;
  }
  /** @param bool */
  public function setMarginRightSuggested($marginRightSuggested)
  {
    $this->marginRightSuggested = $marginRightSuggested;
  }
  /** @return bool */
  public function getMarginRightSuggested()
  {
    return $this->marginRightSuggested;
  }
  /** @param bool */
  public function setMarginTopSuggested($marginTopSuggested)
  {
    $this->marginTopSuggested = $marginTopSuggested;
  }
  /** @return bool */
  public function getMarginTopSuggested()
  {
    return $this->marginTopSuggested;
  }
  /** @param SizeSuggestionState */
  public function setSizeSuggestionState(SizeSuggestionState $sizeSuggestionState)
  {
    $this->sizeSuggestionState = $sizeSuggestionState;
  }
  /** @return SizeSuggestionState */
  public function getSizeSuggestionState()
  {
    return $this->sizeSuggestionState;
  }
  /** @param bool */
  public function setTitleSuggested($titleSuggested)
  {
    $this->titleSuggested = $titleSuggested;
  }
  /** @return bool */
  public function getTitleSuggested()
  {
    return $this->titleSuggested;
  }
}

class EndOfSegmentLocation extends \Google\Model
{
  /** @var string */
  public $segmentId;

  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
  }
}

class Equation extends \Google\Collection
{
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  protected $collection_key = 'suggestedInsertionIds';
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
}

class Footer extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  /** @var string */
  public $footerId;
  protected $collection_key = 'content';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setFooterId($footerId)
  {
    $this->footerId = $footerId;
  }
  /** @return string */
  public function getFooterId()
  {
    return $this->footerId;
  }
}

class Footnote extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  /** @var string */
  public $footnoteId;
  protected $collection_key = 'content';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setFootnoteId($footnoteId)
  {
    $this->footnoteId = $footnoteId;
  }
  /** @return string */
  public function getFootnoteId()
  {
    return $this->footnoteId;
  }
}

class FootnoteReference extends \Google\Collection
{
  /** @var string */
  public $footnoteId;
  /** @var string */
  public $footnoteNumber;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setFootnoteId($footnoteId)
  {
    $this->footnoteId = $footnoteId;
  }
  /** @return string */
  public function getFootnoteId()
  {
    return $this->footnoteId;
  }
  /** @param string */
  public function setFootnoteNumber($footnoteNumber)
  {
    $this->footnoteNumber = $footnoteNumber;
  }
  /** @return string */
  public function getFootnoteNumber()
  {
    return $this->footnoteNumber;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class Header extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  /** @var string */
  public $headerId;
  protected $collection_key = 'content';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setHeaderId($headerId)
  {
    $this->headerId = $headerId;
  }
  /** @return string */
  public function getHeaderId()
  {
    return $this->headerId;
  }
}

class HorizontalRule extends \Google\Collection
{
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class ImageProperties extends \Google\Model
{
  /** @var float */
  public $angle;
  /** @var float */
  public $brightness;
  /** @var string */
  public $contentUri;
  /** @var float */
  public $contrast;
  /** @var CropProperties */
  public $cropProperties;
  /** @var string */
  public $sourceUri;
  /** @var float */
  public $transparency;
  protected $cropPropertiesType = CropProperties::class;
  protected $cropPropertiesDataType = '';
  /** @param float */
  public function setAngle($angle)
  {
    $this->angle = $angle;
  }
  /** @return float */
  public function getAngle()
  {
    return $this->angle;
  }
  /** @param float */
  public function setBrightness($brightness)
  {
    $this->brightness = $brightness;
  }
  /** @return float */
  public function getBrightness()
  {
    return $this->brightness;
  }
  /** @param string */
  public function setContentUri($contentUri)
  {
    $this->contentUri = $contentUri;
  }
  /** @return string */
  public function getContentUri()
  {
    return $this->contentUri;
  }
  /** @param float */
  public function setContrast($contrast)
  {
    $this->contrast = $contrast;
  }
  /** @return float */
  public function getContrast()
  {
    return $this->contrast;
  }
  /** @param CropProperties */
  public function setCropProperties(CropProperties $cropProperties)
  {
    $this->cropProperties = $cropProperties;
  }
  /** @return CropProperties */
  public function getCropProperties()
  {
    return $this->cropProperties;
  }
  /** @param string */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /** @return string */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
  /** @param float */
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  /** @return float */
  public function getTransparency()
  {
    return $this->transparency;
  }
}

class ImagePropertiesSuggestionState extends \Google\Model
{
  /** @var bool */
  public $angleSuggested;
  /** @var bool */
  public $brightnessSuggested;
  /** @var bool */
  public $contentUriSuggested;
  /** @var bool */
  public $contrastSuggested;
  /** @var CropPropertiesSuggestionState */
  public $cropPropertiesSuggestionState;
  /** @var bool */
  public $sourceUriSuggested;
  /** @var bool */
  public $transparencySuggested;
  protected $cropPropertiesSuggestionStateType = CropPropertiesSuggestionState::class;
  protected $cropPropertiesSuggestionStateDataType = '';
  /** @param bool */
  public function setAngleSuggested($angleSuggested)
  {
    $this->angleSuggested = $angleSuggested;
  }
  /** @return bool */
  public function getAngleSuggested()
  {
    return $this->angleSuggested;
  }
  /** @param bool */
  public function setBrightnessSuggested($brightnessSuggested)
  {
    $this->brightnessSuggested = $brightnessSuggested;
  }
  /** @return bool */
  public function getBrightnessSuggested()
  {
    return $this->brightnessSuggested;
  }
  /** @param bool */
  public function setContentUriSuggested($contentUriSuggested)
  {
    $this->contentUriSuggested = $contentUriSuggested;
  }
  /** @return bool */
  public function getContentUriSuggested()
  {
    return $this->contentUriSuggested;
  }
  /** @param bool */
  public function setContrastSuggested($contrastSuggested)
  {
    $this->contrastSuggested = $contrastSuggested;
  }
  /** @return bool */
  public function getContrastSuggested()
  {
    return $this->contrastSuggested;
  }
  /** @param CropPropertiesSuggestionState */
  public function setCropPropertiesSuggestionState(CropPropertiesSuggestionState $cropPropertiesSuggestionState)
  {
    $this->cropPropertiesSuggestionState = $cropPropertiesSuggestionState;
  }
  /** @return CropPropertiesSuggestionState */
  public function getCropPropertiesSuggestionState()
  {
    return $this->cropPropertiesSuggestionState;
  }
  /** @param bool */
  public function setSourceUriSuggested($sourceUriSuggested)
  {
    $this->sourceUriSuggested = $sourceUriSuggested;
  }
  /** @return bool */
  public function getSourceUriSuggested()
  {
    return $this->sourceUriSuggested;
  }
  /** @param bool */
  public function setTransparencySuggested($transparencySuggested)
  {
    $this->transparencySuggested = $transparencySuggested;
  }
  /** @return bool */
  public function getTransparencySuggested()
  {
    return $this->transparencySuggested;
  }
}

class InlineObject extends \Google\Collection
{
  /** @var InlineObjectProperties */
  public $inlineObjectProperties;
  /** @var string */
  public $objectId;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var SuggestedInlineObjectProperties[] */
  public $suggestedInlineObjectPropertiesChanges;
  /** @var string */
  public $suggestedInsertionId;
  protected $collection_key = 'suggestedDeletionIds';
  protected $inlineObjectPropertiesType = InlineObjectProperties::class;
  protected $inlineObjectPropertiesDataType = '';
  protected $suggestedInlineObjectPropertiesChangesType = SuggestedInlineObjectProperties::class;
  protected $suggestedInlineObjectPropertiesChangesDataType = 'map';
  /** @param InlineObjectProperties */
  public function setInlineObjectProperties(InlineObjectProperties $inlineObjectProperties)
  {
    $this->inlineObjectProperties = $inlineObjectProperties;
  }
  /** @return InlineObjectProperties */
  public function getInlineObjectProperties()
  {
    return $this->inlineObjectProperties;
  }
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param SuggestedInlineObjectProperties[] */
  public function setSuggestedInlineObjectPropertiesChanges($suggestedInlineObjectPropertiesChanges)
  {
    $this->suggestedInlineObjectPropertiesChanges = $suggestedInlineObjectPropertiesChanges;
  }
  /** @return SuggestedInlineObjectProperties[] */
  public function getSuggestedInlineObjectPropertiesChanges()
  {
    return $this->suggestedInlineObjectPropertiesChanges;
  }
  /** @param string */
  public function setSuggestedInsertionId($suggestedInsertionId)
  {
    $this->suggestedInsertionId = $suggestedInsertionId;
  }
  /** @return string */
  public function getSuggestedInsertionId()
  {
    return $this->suggestedInsertionId;
  }
}

class InlineObjectElement extends \Google\Collection
{
  /** @var string */
  public $inlineObjectId;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setInlineObjectId($inlineObjectId)
  {
    $this->inlineObjectId = $inlineObjectId;
  }
  /** @return string */
  public function getInlineObjectId()
  {
    return $this->inlineObjectId;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class InlineObjectProperties extends \Google\Model
{
  /** @var EmbeddedObject */
  public $embeddedObject;
  protected $embeddedObjectType = EmbeddedObject::class;
  protected $embeddedObjectDataType = '';
  /** @param EmbeddedObject */
  public function setEmbeddedObject(EmbeddedObject $embeddedObject)
  {
    $this->embeddedObject = $embeddedObject;
  }
  /** @return EmbeddedObject */
  public function getEmbeddedObject()
  {
    return $this->embeddedObject;
  }
}

class InlineObjectPropertiesSuggestionState extends \Google\Model
{
  /** @var EmbeddedObjectSuggestionState */
  public $embeddedObjectSuggestionState;
  protected $embeddedObjectSuggestionStateType = EmbeddedObjectSuggestionState::class;
  protected $embeddedObjectSuggestionStateDataType = '';
  /** @param EmbeddedObjectSuggestionState */
  public function setEmbeddedObjectSuggestionState(EmbeddedObjectSuggestionState $embeddedObjectSuggestionState)
  {
    $this->embeddedObjectSuggestionState = $embeddedObjectSuggestionState;
  }
  /** @return EmbeddedObjectSuggestionState */
  public function getEmbeddedObjectSuggestionState()
  {
    return $this->embeddedObjectSuggestionState;
  }
}

class InsertInlineImageRequest extends \Google\Model
{
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  /** @var Size */
  public $objectSize;
  /** @var string */
  public $uri;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  protected $objectSizeType = Size::class;
  protected $objectSizeDataType = '';
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param Size */
  public function setObjectSize(Size $objectSize)
  {
    $this->objectSize = $objectSize;
  }
  /** @return Size */
  public function getObjectSize()
  {
    return $this->objectSize;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class InsertInlineImageResponse extends \Google\Model
{
  /** @var string */
  public $objectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class InsertInlineSheetsChartResponse extends \Google\Model
{
  /** @var string */
  public $objectId;

  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class InsertPageBreakRequest extends \Google\Model
{
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
}

class InsertSectionBreakRequest extends \Google\Model
{
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  /** @var string */
  public $sectionType;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
}

class InsertTableColumnRequest extends \Google\Model
{
  /** @var bool */
  public $insertRight;
  /** @var TableCellLocation */
  public $tableCellLocation;
  protected $tableCellLocationType = TableCellLocation::class;
  protected $tableCellLocationDataType = '';
  /** @param bool */
  public function setInsertRight($insertRight)
  {
    $this->insertRight = $insertRight;
  }
  /** @return bool */
  public function getInsertRight()
  {
    return $this->insertRight;
  }
  /** @param TableCellLocation */
  public function setTableCellLocation(TableCellLocation $tableCellLocation)
  {
    $this->tableCellLocation = $tableCellLocation;
  }
  /** @return TableCellLocation */
  public function getTableCellLocation()
  {
    return $this->tableCellLocation;
  }
}

class InsertTableRequest extends \Google\Model
{
  /** @var int */
  public $columns;
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  /** @var int */
  public $rows;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param int */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return int */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param int */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return int */
  public function getRows()
  {
    return $this->rows;
  }
}

class InsertTableRowRequest extends \Google\Model
{
  /** @var bool */
  public $insertBelow;
  /** @var TableCellLocation */
  public $tableCellLocation;
  protected $tableCellLocationType = TableCellLocation::class;
  protected $tableCellLocationDataType = '';
  /** @param bool */
  public function setInsertBelow($insertBelow)
  {
    $this->insertBelow = $insertBelow;
  }
  /** @return bool */
  public function getInsertBelow()
  {
    return $this->insertBelow;
  }
  /** @param TableCellLocation */
  public function setTableCellLocation(TableCellLocation $tableCellLocation)
  {
    $this->tableCellLocation = $tableCellLocation;
  }
  /** @return TableCellLocation */
  public function getTableCellLocation()
  {
    return $this->tableCellLocation;
  }
}

class InsertTextRequest extends \Google\Model
{
  /** @var EndOfSegmentLocation */
  public $endOfSegmentLocation;
  /** @var Location */
  public $location;
  /** @var string */
  public $text;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param EndOfSegmentLocation */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /** @return EndOfSegmentLocation */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
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
}

class Link extends \Google\Model
{
  /** @var string */
  public $bookmarkId;
  /** @var string */
  public $headingId;
  /** @var string */
  public $url;

  /** @param string */
  public function setBookmarkId($bookmarkId)
  {
    $this->bookmarkId = $bookmarkId;
  }
  /** @return string */
  public function getBookmarkId()
  {
    return $this->bookmarkId;
  }
  /** @param string */
  public function setHeadingId($headingId)
  {
    $this->headingId = $headingId;
  }
  /** @return string */
  public function getHeadingId()
  {
    return $this->headingId;
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

class LinkedContentReference extends \Google\Model
{
  /** @var SheetsChartReference */
  public $sheetsChartReference;
  protected $sheetsChartReferenceType = SheetsChartReference::class;
  protected $sheetsChartReferenceDataType = '';
  /** @param SheetsChartReference */
  public function setSheetsChartReference(SheetsChartReference $sheetsChartReference)
  {
    $this->sheetsChartReference = $sheetsChartReference;
  }
  /** @return SheetsChartReference */
  public function getSheetsChartReference()
  {
    return $this->sheetsChartReference;
  }
}

class LinkedContentReferenceSuggestionState extends \Google\Model
{
  /** @var SheetsChartReferenceSuggestionState */
  public $sheetsChartReferenceSuggestionState;
  protected $sheetsChartReferenceSuggestionStateType = SheetsChartReferenceSuggestionState::class;
  protected $sheetsChartReferenceSuggestionStateDataType = '';
  /** @param SheetsChartReferenceSuggestionState */
  public function setSheetsChartReferenceSuggestionState(SheetsChartReferenceSuggestionState $sheetsChartReferenceSuggestionState)
  {
    $this->sheetsChartReferenceSuggestionState = $sheetsChartReferenceSuggestionState;
  }
  /** @return SheetsChartReferenceSuggestionState */
  public function getSheetsChartReferenceSuggestionState()
  {
    return $this->sheetsChartReferenceSuggestionState;
  }
}

class ListProperties extends \Google\Collection
{
  /** @var NestingLevel[] */
  public $nestingLevels;
  protected $collection_key = 'nestingLevels';
  protected $nestingLevelsType = NestingLevel::class;
  protected $nestingLevelsDataType = 'array';
  /** @param NestingLevel[] */
  public function setNestingLevels($nestingLevels)
  {
    $this->nestingLevels = $nestingLevels;
  }
  /** @return NestingLevel[] */
  public function getNestingLevels()
  {
    return $this->nestingLevels;
  }
}

class ListPropertiesSuggestionState extends \Google\Collection
{
  /** @var NestingLevelSuggestionState[] */
  public $nestingLevelsSuggestionStates;
  protected $collection_key = 'nestingLevelsSuggestionStates';
  protected $nestingLevelsSuggestionStatesType = NestingLevelSuggestionState::class;
  protected $nestingLevelsSuggestionStatesDataType = 'array';
  /** @param NestingLevelSuggestionState[] */
  public function setNestingLevelsSuggestionStates($nestingLevelsSuggestionStates)
  {
    $this->nestingLevelsSuggestionStates = $nestingLevelsSuggestionStates;
  }
  /** @return NestingLevelSuggestionState[] */
  public function getNestingLevelsSuggestionStates()
  {
    return $this->nestingLevelsSuggestionStates;
  }
}

class Location extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var string */
  public $segmentId;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
  }
}

class MergeTableCellsRequest extends \Google\Model
{
  /** @var TableRange */
  public $tableRange;
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
  /** @param TableRange */
  public function setTableRange(TableRange $tableRange)
  {
    $this->tableRange = $tableRange;
  }
  /** @return TableRange */
  public function getTableRange()
  {
    return $this->tableRange;
  }
}

class NamedRange extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $namedRangeId;
  /** @var Range[] */
  public $ranges;
  protected $collection_key = 'ranges';
  protected $rangesType = Range::class;
  protected $rangesDataType = 'array';
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
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param Range[] */
  public function setRanges($ranges)
  {
    $this->ranges = $ranges;
  }
  /** @return Range[] */
  public function getRanges()
  {
    return $this->ranges;
  }
}

class NamedRanges extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var NamedRange[] */
  public $namedRanges;
  protected $collection_key = 'namedRanges';
  protected $namedRangesType = NamedRange::class;
  protected $namedRangesDataType = 'array';
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
  /** @param NamedRange[] */
  public function setNamedRanges($namedRanges)
  {
    $this->namedRanges = $namedRanges;
  }
  /** @return NamedRange[] */
  public function getNamedRanges()
  {
    return $this->namedRanges;
  }
}

class NamedStyle extends \Google\Model
{
  /** @var string */
  public $namedStyleType;
  /** @var ParagraphStyle */
  public $paragraphStyle;
  /** @var TextStyle */
  public $textStyle;
  protected $paragraphStyleType = ParagraphStyle::class;
  protected $paragraphStyleDataType = '';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setNamedStyleType($namedStyleType)
  {
    $this->namedStyleType = $namedStyleType;
  }
  /** @return string */
  public function getNamedStyleType()
  {
    return $this->namedStyleType;
  }
  /** @param ParagraphStyle */
  public function setParagraphStyle(ParagraphStyle $paragraphStyle)
  {
    $this->paragraphStyle = $paragraphStyle;
  }
  /** @return ParagraphStyle */
  public function getParagraphStyle()
  {
    return $this->paragraphStyle;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class NamedStyleSuggestionState extends \Google\Model
{
  /** @var string */
  public $namedStyleType;
  /** @var ParagraphStyleSuggestionState */
  public $paragraphStyleSuggestionState;
  /** @var TextStyleSuggestionState */
  public $textStyleSuggestionState;
  protected $paragraphStyleSuggestionStateType = ParagraphStyleSuggestionState::class;
  protected $paragraphStyleSuggestionStateDataType = '';
  protected $textStyleSuggestionStateType = TextStyleSuggestionState::class;
  protected $textStyleSuggestionStateDataType = '';
  /** @param string */
  public function setNamedStyleType($namedStyleType)
  {
    $this->namedStyleType = $namedStyleType;
  }
  /** @return string */
  public function getNamedStyleType()
  {
    return $this->namedStyleType;
  }
  /** @param ParagraphStyleSuggestionState */
  public function setParagraphStyleSuggestionState(ParagraphStyleSuggestionState $paragraphStyleSuggestionState)
  {
    $this->paragraphStyleSuggestionState = $paragraphStyleSuggestionState;
  }
  /** @return ParagraphStyleSuggestionState */
  public function getParagraphStyleSuggestionState()
  {
    return $this->paragraphStyleSuggestionState;
  }
  /** @param TextStyleSuggestionState */
  public function setTextStyleSuggestionState(TextStyleSuggestionState $textStyleSuggestionState)
  {
    $this->textStyleSuggestionState = $textStyleSuggestionState;
  }
  /** @return TextStyleSuggestionState */
  public function getTextStyleSuggestionState()
  {
    return $this->textStyleSuggestionState;
  }
}

class NamedStyles extends \Google\Collection
{
  /** @var NamedStyle[] */
  public $styles;
  protected $collection_key = 'styles';
  protected $stylesType = NamedStyle::class;
  protected $stylesDataType = 'array';
  /** @param NamedStyle[] */
  public function setStyles($styles)
  {
    $this->styles = $styles;
  }
  /** @return NamedStyle[] */
  public function getStyles()
  {
    return $this->styles;
  }
}

class NamedStylesSuggestionState extends \Google\Collection
{
  /** @var NamedStyleSuggestionState[] */
  public $stylesSuggestionStates;
  protected $collection_key = 'stylesSuggestionStates';
  protected $stylesSuggestionStatesType = NamedStyleSuggestionState::class;
  protected $stylesSuggestionStatesDataType = 'array';
  /** @param NamedStyleSuggestionState[] */
  public function setStylesSuggestionStates($stylesSuggestionStates)
  {
    $this->stylesSuggestionStates = $stylesSuggestionStates;
  }
  /** @return NamedStyleSuggestionState[] */
  public function getStylesSuggestionStates()
  {
    return $this->stylesSuggestionStates;
  }
}

class NestingLevel extends \Google\Model
{
  /** @var string */
  public $bulletAlignment;
  /** @var string */
  public $glyphFormat;
  /** @var string */
  public $glyphSymbol;
  /** @var string */
  public $glyphType;
  /** @var Dimension */
  public $indentFirstLine;
  /** @var Dimension */
  public $indentStart;
  /** @var int */
  public $startNumber;
  /** @var TextStyle */
  public $textStyle;
  protected $indentFirstLineType = Dimension::class;
  protected $indentFirstLineDataType = '';
  protected $indentStartType = Dimension::class;
  protected $indentStartDataType = '';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setBulletAlignment($bulletAlignment)
  {
    $this->bulletAlignment = $bulletAlignment;
  }
  /** @return string */
  public function getBulletAlignment()
  {
    return $this->bulletAlignment;
  }
  /** @param string */
  public function setGlyphFormat($glyphFormat)
  {
    $this->glyphFormat = $glyphFormat;
  }
  /** @return string */
  public function getGlyphFormat()
  {
    return $this->glyphFormat;
  }
  /** @param string */
  public function setGlyphSymbol($glyphSymbol)
  {
    $this->glyphSymbol = $glyphSymbol;
  }
  /** @return string */
  public function getGlyphSymbol()
  {
    return $this->glyphSymbol;
  }
  /** @param string */
  public function setGlyphType($glyphType)
  {
    $this->glyphType = $glyphType;
  }
  /** @return string */
  public function getGlyphType()
  {
    return $this->glyphType;
  }
  /** @param Dimension */
  public function setIndentFirstLine(Dimension $indentFirstLine)
  {
    $this->indentFirstLine = $indentFirstLine;
  }
  /** @return Dimension */
  public function getIndentFirstLine()
  {
    return $this->indentFirstLine;
  }
  /** @param Dimension */
  public function setIndentStart(Dimension $indentStart)
  {
    $this->indentStart = $indentStart;
  }
  /** @return Dimension */
  public function getIndentStart()
  {
    return $this->indentStart;
  }
  /** @param int */
  public function setStartNumber($startNumber)
  {
    $this->startNumber = $startNumber;
  }
  /** @return int */
  public function getStartNumber()
  {
    return $this->startNumber;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class NestingLevelSuggestionState extends \Google\Model
{
  /** @var bool */
  public $bulletAlignmentSuggested;
  /** @var bool */
  public $glyphFormatSuggested;
  /** @var bool */
  public $glyphSymbolSuggested;
  /** @var bool */
  public $glyphTypeSuggested;
  /** @var bool */
  public $indentFirstLineSuggested;
  /** @var bool */
  public $indentStartSuggested;
  /** @var bool */
  public $startNumberSuggested;
  /** @var TextStyleSuggestionState */
  public $textStyleSuggestionState;
  protected $textStyleSuggestionStateType = TextStyleSuggestionState::class;
  protected $textStyleSuggestionStateDataType = '';
  /** @param bool */
  public function setBulletAlignmentSuggested($bulletAlignmentSuggested)
  {
    $this->bulletAlignmentSuggested = $bulletAlignmentSuggested;
  }
  /** @return bool */
  public function getBulletAlignmentSuggested()
  {
    return $this->bulletAlignmentSuggested;
  }
  /** @param bool */
  public function setGlyphFormatSuggested($glyphFormatSuggested)
  {
    $this->glyphFormatSuggested = $glyphFormatSuggested;
  }
  /** @return bool */
  public function getGlyphFormatSuggested()
  {
    return $this->glyphFormatSuggested;
  }
  /** @param bool */
  public function setGlyphSymbolSuggested($glyphSymbolSuggested)
  {
    $this->glyphSymbolSuggested = $glyphSymbolSuggested;
  }
  /** @return bool */
  public function getGlyphSymbolSuggested()
  {
    return $this->glyphSymbolSuggested;
  }
  /** @param bool */
  public function setGlyphTypeSuggested($glyphTypeSuggested)
  {
    $this->glyphTypeSuggested = $glyphTypeSuggested;
  }
  /** @return bool */
  public function getGlyphTypeSuggested()
  {
    return $this->glyphTypeSuggested;
  }
  /** @param bool */
  public function setIndentFirstLineSuggested($indentFirstLineSuggested)
  {
    $this->indentFirstLineSuggested = $indentFirstLineSuggested;
  }
  /** @return bool */
  public function getIndentFirstLineSuggested()
  {
    return $this->indentFirstLineSuggested;
  }
  /** @param bool */
  public function setIndentStartSuggested($indentStartSuggested)
  {
    $this->indentStartSuggested = $indentStartSuggested;
  }
  /** @return bool */
  public function getIndentStartSuggested()
  {
    return $this->indentStartSuggested;
  }
  /** @param bool */
  public function setStartNumberSuggested($startNumberSuggested)
  {
    $this->startNumberSuggested = $startNumberSuggested;
  }
  /** @return bool */
  public function getStartNumberSuggested()
  {
    return $this->startNumberSuggested;
  }
  /** @param TextStyleSuggestionState */
  public function setTextStyleSuggestionState(TextStyleSuggestionState $textStyleSuggestionState)
  {
    $this->textStyleSuggestionState = $textStyleSuggestionState;
  }
  /** @return TextStyleSuggestionState */
  public function getTextStyleSuggestionState()
  {
    return $this->textStyleSuggestionState;
  }
}

class ObjectReferences extends \Google\Collection
{
  /** @var string[] */
  public $objectIds;
  protected $collection_key = 'objectIds';
  /** @param string[] */
  public function setObjectIds($objectIds)
  {
    $this->objectIds = $objectIds;
  }
  /** @return string[] */
  public function getObjectIds()
  {
    return $this->objectIds;
  }
}

class OptionalColor extends \Google\Model
{
  /** @var Color */
  public $color;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
}

class PageBreak extends \Google\Collection
{
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class Paragraph extends \Google\Collection
{
  /** @var Bullet */
  public $bullet;
  /** @var ParagraphElement[] */
  public $elements;
  /** @var ParagraphStyle */
  public $paragraphStyle;
  /** @var string[] */
  public $positionedObjectIds;
  /** @var SuggestedBullet[] */
  public $suggestedBulletChanges;
  /** @var SuggestedParagraphStyle[] */
  public $suggestedParagraphStyleChanges;
  /** @var ObjectReferences[] */
  public $suggestedPositionedObjectIds;
  protected $collection_key = 'positionedObjectIds';
  protected $bulletType = Bullet::class;
  protected $bulletDataType = '';
  protected $elementsType = ParagraphElement::class;
  protected $elementsDataType = 'array';
  protected $paragraphStyleType = ParagraphStyle::class;
  protected $paragraphStyleDataType = '';
  protected $suggestedBulletChangesType = SuggestedBullet::class;
  protected $suggestedBulletChangesDataType = 'map';
  protected $suggestedParagraphStyleChangesType = SuggestedParagraphStyle::class;
  protected $suggestedParagraphStyleChangesDataType = 'map';
  protected $suggestedPositionedObjectIdsType = ObjectReferences::class;
  protected $suggestedPositionedObjectIdsDataType = 'map';
  /** @param Bullet */
  public function setBullet(Bullet $bullet)
  {
    $this->bullet = $bullet;
  }
  /** @return Bullet */
  public function getBullet()
  {
    return $this->bullet;
  }
  /** @param ParagraphElement[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return ParagraphElement[] */
  public function getElements()
  {
    return $this->elements;
  }
  /** @param ParagraphStyle */
  public function setParagraphStyle(ParagraphStyle $paragraphStyle)
  {
    $this->paragraphStyle = $paragraphStyle;
  }
  /** @return ParagraphStyle */
  public function getParagraphStyle()
  {
    return $this->paragraphStyle;
  }
  /** @param string[] */
  public function setPositionedObjectIds($positionedObjectIds)
  {
    $this->positionedObjectIds = $positionedObjectIds;
  }
  /** @return string[] */
  public function getPositionedObjectIds()
  {
    return $this->positionedObjectIds;
  }
  /** @param SuggestedBullet[] */
  public function setSuggestedBulletChanges($suggestedBulletChanges)
  {
    $this->suggestedBulletChanges = $suggestedBulletChanges;
  }
  /** @return SuggestedBullet[] */
  public function getSuggestedBulletChanges()
  {
    return $this->suggestedBulletChanges;
  }
  /** @param SuggestedParagraphStyle[] */
  public function setSuggestedParagraphStyleChanges($suggestedParagraphStyleChanges)
  {
    $this->suggestedParagraphStyleChanges = $suggestedParagraphStyleChanges;
  }
  /** @return SuggestedParagraphStyle[] */
  public function getSuggestedParagraphStyleChanges()
  {
    return $this->suggestedParagraphStyleChanges;
  }
  /** @param ObjectReferences[] */
  public function setSuggestedPositionedObjectIds($suggestedPositionedObjectIds)
  {
    $this->suggestedPositionedObjectIds = $suggestedPositionedObjectIds;
  }
  /** @return ObjectReferences[] */
  public function getSuggestedPositionedObjectIds()
  {
    return $this->suggestedPositionedObjectIds;
  }
}

class ParagraphBorder extends \Google\Model
{
  /** @var OptionalColor */
  public $color;
  /** @var string */
  public $dashStyle;
  /** @var Dimension */
  public $padding;
  /** @var Dimension */
  public $width;
  protected $colorType = OptionalColor::class;
  protected $colorDataType = '';
  protected $paddingType = Dimension::class;
  protected $paddingDataType = '';
  protected $widthType = Dimension::class;
  protected $widthDataType = '';
  /** @param OptionalColor */
  public function setColor(OptionalColor $color)
  {
    $this->color = $color;
  }
  /** @return OptionalColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setDashStyle($dashStyle)
  {
    $this->dashStyle = $dashStyle;
  }
  /** @return string */
  public function getDashStyle()
  {
    return $this->dashStyle;
  }
  /** @param Dimension */
  public function setPadding(Dimension $padding)
  {
    $this->padding = $padding;
  }
  /** @return Dimension */
  public function getPadding()
  {
    return $this->padding;
  }
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
}

class ParagraphElement extends \Google\Model
{
  /** @var AutoText */
  public $autoText;
  /** @var ColumnBreak */
  public $columnBreak;
  /** @var int */
  public $endIndex;
  /** @var Equation */
  public $equation;
  /** @var FootnoteReference */
  public $footnoteReference;
  /** @var HorizontalRule */
  public $horizontalRule;
  /** @var InlineObjectElement */
  public $inlineObjectElement;
  /** @var PageBreak */
  public $pageBreak;
  /** @var Person */
  public $person;
  /** @var RichLink */
  public $richLink;
  /** @var int */
  public $startIndex;
  /** @var TextRun */
  public $textRun;
  protected $autoTextType = AutoText::class;
  protected $autoTextDataType = '';
  protected $columnBreakType = ColumnBreak::class;
  protected $columnBreakDataType = '';
  protected $equationType = Equation::class;
  protected $equationDataType = '';
  protected $footnoteReferenceType = FootnoteReference::class;
  protected $footnoteReferenceDataType = '';
  protected $horizontalRuleType = HorizontalRule::class;
  protected $horizontalRuleDataType = '';
  protected $inlineObjectElementType = InlineObjectElement::class;
  protected $inlineObjectElementDataType = '';
  protected $pageBreakType = PageBreak::class;
  protected $pageBreakDataType = '';
  protected $personType = Person::class;
  protected $personDataType = '';
  protected $richLinkType = RichLink::class;
  protected $richLinkDataType = '';
  protected $textRunType = TextRun::class;
  protected $textRunDataType = '';
  /** @param AutoText */
  public function setAutoText(AutoText $autoText)
  {
    $this->autoText = $autoText;
  }
  /** @return AutoText */
  public function getAutoText()
  {
    return $this->autoText;
  }
  /** @param ColumnBreak */
  public function setColumnBreak(ColumnBreak $columnBreak)
  {
    $this->columnBreak = $columnBreak;
  }
  /** @return ColumnBreak */
  public function getColumnBreak()
  {
    return $this->columnBreak;
  }
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param Equation */
  public function setEquation(Equation $equation)
  {
    $this->equation = $equation;
  }
  /** @return Equation */
  public function getEquation()
  {
    return $this->equation;
  }
  /** @param FootnoteReference */
  public function setFootnoteReference(FootnoteReference $footnoteReference)
  {
    $this->footnoteReference = $footnoteReference;
  }
  /** @return FootnoteReference */
  public function getFootnoteReference()
  {
    return $this->footnoteReference;
  }
  /** @param HorizontalRule */
  public function setHorizontalRule(HorizontalRule $horizontalRule)
  {
    $this->horizontalRule = $horizontalRule;
  }
  /** @return HorizontalRule */
  public function getHorizontalRule()
  {
    return $this->horizontalRule;
  }
  /** @param InlineObjectElement */
  public function setInlineObjectElement(InlineObjectElement $inlineObjectElement)
  {
    $this->inlineObjectElement = $inlineObjectElement;
  }
  /** @return InlineObjectElement */
  public function getInlineObjectElement()
  {
    return $this->inlineObjectElement;
  }
  /** @param PageBreak */
  public function setPageBreak(PageBreak $pageBreak)
  {
    $this->pageBreak = $pageBreak;
  }
  /** @return PageBreak */
  public function getPageBreak()
  {
    return $this->pageBreak;
  }
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
  /** @param RichLink */
  public function setRichLink(RichLink $richLink)
  {
    $this->richLink = $richLink;
  }
  /** @return RichLink */
  public function getRichLink()
  {
    return $this->richLink;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param TextRun */
  public function setTextRun(TextRun $textRun)
  {
    $this->textRun = $textRun;
  }
  /** @return TextRun */
  public function getTextRun()
  {
    return $this->textRun;
  }
}

class ParagraphStyle extends \Google\Collection
{
  /** @var string */
  public $alignment;
  /** @var bool */
  public $avoidWidowAndOrphan;
  /** @var ParagraphBorder */
  public $borderBetween;
  /** @var ParagraphBorder */
  public $borderBottom;
  /** @var ParagraphBorder */
  public $borderLeft;
  /** @var ParagraphBorder */
  public $borderRight;
  /** @var ParagraphBorder */
  public $borderTop;
  /** @var string */
  public $direction;
  /** @var string */
  public $headingId;
  /** @var Dimension */
  public $indentEnd;
  /** @var Dimension */
  public $indentFirstLine;
  /** @var Dimension */
  public $indentStart;
  /** @var bool */
  public $keepLinesTogether;
  /** @var bool */
  public $keepWithNext;
  /** @var float */
  public $lineSpacing;
  /** @var string */
  public $namedStyleType;
  /** @var bool */
  public $pageBreakBefore;
  /** @var Shading */
  public $shading;
  /** @var Dimension */
  public $spaceAbove;
  /** @var Dimension */
  public $spaceBelow;
  /** @var string */
  public $spacingMode;
  /** @var TabStop[] */
  public $tabStops;
  protected $collection_key = 'tabStops';
  protected $borderBetweenType = ParagraphBorder::class;
  protected $borderBetweenDataType = '';
  protected $borderBottomType = ParagraphBorder::class;
  protected $borderBottomDataType = '';
  protected $borderLeftType = ParagraphBorder::class;
  protected $borderLeftDataType = '';
  protected $borderRightType = ParagraphBorder::class;
  protected $borderRightDataType = '';
  protected $borderTopType = ParagraphBorder::class;
  protected $borderTopDataType = '';
  protected $indentEndType = Dimension::class;
  protected $indentEndDataType = '';
  protected $indentFirstLineType = Dimension::class;
  protected $indentFirstLineDataType = '';
  protected $indentStartType = Dimension::class;
  protected $indentStartDataType = '';
  protected $shadingType = Shading::class;
  protected $shadingDataType = '';
  protected $spaceAboveType = Dimension::class;
  protected $spaceAboveDataType = '';
  protected $spaceBelowType = Dimension::class;
  protected $spaceBelowDataType = '';
  protected $tabStopsType = TabStop::class;
  protected $tabStopsDataType = 'array';
  /** @param string */
  public function setAlignment($alignment)
  {
    $this->alignment = $alignment;
  }
  /** @return string */
  public function getAlignment()
  {
    return $this->alignment;
  }
  /** @param bool */
  public function setAvoidWidowAndOrphan($avoidWidowAndOrphan)
  {
    $this->avoidWidowAndOrphan = $avoidWidowAndOrphan;
  }
  /** @return bool */
  public function getAvoidWidowAndOrphan()
  {
    return $this->avoidWidowAndOrphan;
  }
  /** @param ParagraphBorder */
  public function setBorderBetween(ParagraphBorder $borderBetween)
  {
    $this->borderBetween = $borderBetween;
  }
  /** @return ParagraphBorder */
  public function getBorderBetween()
  {
    return $this->borderBetween;
  }
  /** @param ParagraphBorder */
  public function setBorderBottom(ParagraphBorder $borderBottom)
  {
    $this->borderBottom = $borderBottom;
  }
  /** @return ParagraphBorder */
  public function getBorderBottom()
  {
    return $this->borderBottom;
  }
  /** @param ParagraphBorder */
  public function setBorderLeft(ParagraphBorder $borderLeft)
  {
    $this->borderLeft = $borderLeft;
  }
  /** @return ParagraphBorder */
  public function getBorderLeft()
  {
    return $this->borderLeft;
  }
  /** @param ParagraphBorder */
  public function setBorderRight(ParagraphBorder $borderRight)
  {
    $this->borderRight = $borderRight;
  }
  /** @return ParagraphBorder */
  public function getBorderRight()
  {
    return $this->borderRight;
  }
  /** @param ParagraphBorder */
  public function setBorderTop(ParagraphBorder $borderTop)
  {
    $this->borderTop = $borderTop;
  }
  /** @return ParagraphBorder */
  public function getBorderTop()
  {
    return $this->borderTop;
  }
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
  public function setHeadingId($headingId)
  {
    $this->headingId = $headingId;
  }
  /** @return string */
  public function getHeadingId()
  {
    return $this->headingId;
  }
  /** @param Dimension */
  public function setIndentEnd(Dimension $indentEnd)
  {
    $this->indentEnd = $indentEnd;
  }
  /** @return Dimension */
  public function getIndentEnd()
  {
    return $this->indentEnd;
  }
  /** @param Dimension */
  public function setIndentFirstLine(Dimension $indentFirstLine)
  {
    $this->indentFirstLine = $indentFirstLine;
  }
  /** @return Dimension */
  public function getIndentFirstLine()
  {
    return $this->indentFirstLine;
  }
  /** @param Dimension */
  public function setIndentStart(Dimension $indentStart)
  {
    $this->indentStart = $indentStart;
  }
  /** @return Dimension */
  public function getIndentStart()
  {
    return $this->indentStart;
  }
  /** @param bool */
  public function setKeepLinesTogether($keepLinesTogether)
  {
    $this->keepLinesTogether = $keepLinesTogether;
  }
  /** @return bool */
  public function getKeepLinesTogether()
  {
    return $this->keepLinesTogether;
  }
  /** @param bool */
  public function setKeepWithNext($keepWithNext)
  {
    $this->keepWithNext = $keepWithNext;
  }
  /** @return bool */
  public function getKeepWithNext()
  {
    return $this->keepWithNext;
  }
  /** @param float */
  public function setLineSpacing($lineSpacing)
  {
    $this->lineSpacing = $lineSpacing;
  }
  /** @return float */
  public function getLineSpacing()
  {
    return $this->lineSpacing;
  }
  /** @param string */
  public function setNamedStyleType($namedStyleType)
  {
    $this->namedStyleType = $namedStyleType;
  }
  /** @return string */
  public function getNamedStyleType()
  {
    return $this->namedStyleType;
  }
  /** @param bool */
  public function setPageBreakBefore($pageBreakBefore)
  {
    $this->pageBreakBefore = $pageBreakBefore;
  }
  /** @return bool */
  public function getPageBreakBefore()
  {
    return $this->pageBreakBefore;
  }
  /** @param Shading */
  public function setShading(Shading $shading)
  {
    $this->shading = $shading;
  }
  /** @return Shading */
  public function getShading()
  {
    return $this->shading;
  }
  /** @param Dimension */
  public function setSpaceAbove(Dimension $spaceAbove)
  {
    $this->spaceAbove = $spaceAbove;
  }
  /** @return Dimension */
  public function getSpaceAbove()
  {
    return $this->spaceAbove;
  }
  /** @param Dimension */
  public function setSpaceBelow(Dimension $spaceBelow)
  {
    $this->spaceBelow = $spaceBelow;
  }
  /** @return Dimension */
  public function getSpaceBelow()
  {
    return $this->spaceBelow;
  }
  /** @param string */
  public function setSpacingMode($spacingMode)
  {
    $this->spacingMode = $spacingMode;
  }
  /** @return string */
  public function getSpacingMode()
  {
    return $this->spacingMode;
  }
  /** @param TabStop[] */
  public function setTabStops($tabStops)
  {
    $this->tabStops = $tabStops;
  }
  /** @return TabStop[] */
  public function getTabStops()
  {
    return $this->tabStops;
  }
}

class ParagraphStyleSuggestionState extends \Google\Model
{
  /** @var bool */
  public $alignmentSuggested;
  /** @var bool */
  public $avoidWidowAndOrphanSuggested;
  /** @var bool */
  public $borderBetweenSuggested;
  /** @var bool */
  public $borderBottomSuggested;
  /** @var bool */
  public $borderLeftSuggested;
  /** @var bool */
  public $borderRightSuggested;
  /** @var bool */
  public $borderTopSuggested;
  /** @var bool */
  public $directionSuggested;
  /** @var bool */
  public $headingIdSuggested;
  /** @var bool */
  public $indentEndSuggested;
  /** @var bool */
  public $indentFirstLineSuggested;
  /** @var bool */
  public $indentStartSuggested;
  /** @var bool */
  public $keepLinesTogetherSuggested;
  /** @var bool */
  public $keepWithNextSuggested;
  /** @var bool */
  public $lineSpacingSuggested;
  /** @var bool */
  public $namedStyleTypeSuggested;
  /** @var bool */
  public $pageBreakBeforeSuggested;
  /** @var ShadingSuggestionState */
  public $shadingSuggestionState;
  /** @var bool */
  public $spaceAboveSuggested;
  /** @var bool */
  public $spaceBelowSuggested;
  /** @var bool */
  public $spacingModeSuggested;
  protected $shadingSuggestionStateType = ShadingSuggestionState::class;
  protected $shadingSuggestionStateDataType = '';
  /** @param bool */
  public function setAlignmentSuggested($alignmentSuggested)
  {
    $this->alignmentSuggested = $alignmentSuggested;
  }
  /** @return bool */
  public function getAlignmentSuggested()
  {
    return $this->alignmentSuggested;
  }
  /** @param bool */
  public function setAvoidWidowAndOrphanSuggested($avoidWidowAndOrphanSuggested)
  {
    $this->avoidWidowAndOrphanSuggested = $avoidWidowAndOrphanSuggested;
  }
  /** @return bool */
  public function getAvoidWidowAndOrphanSuggested()
  {
    return $this->avoidWidowAndOrphanSuggested;
  }
  /** @param bool */
  public function setBorderBetweenSuggested($borderBetweenSuggested)
  {
    $this->borderBetweenSuggested = $borderBetweenSuggested;
  }
  /** @return bool */
  public function getBorderBetweenSuggested()
  {
    return $this->borderBetweenSuggested;
  }
  /** @param bool */
  public function setBorderBottomSuggested($borderBottomSuggested)
  {
    $this->borderBottomSuggested = $borderBottomSuggested;
  }
  /** @return bool */
  public function getBorderBottomSuggested()
  {
    return $this->borderBottomSuggested;
  }
  /** @param bool */
  public function setBorderLeftSuggested($borderLeftSuggested)
  {
    $this->borderLeftSuggested = $borderLeftSuggested;
  }
  /** @return bool */
  public function getBorderLeftSuggested()
  {
    return $this->borderLeftSuggested;
  }
  /** @param bool */
  public function setBorderRightSuggested($borderRightSuggested)
  {
    $this->borderRightSuggested = $borderRightSuggested;
  }
  /** @return bool */
  public function getBorderRightSuggested()
  {
    return $this->borderRightSuggested;
  }
  /** @param bool */
  public function setBorderTopSuggested($borderTopSuggested)
  {
    $this->borderTopSuggested = $borderTopSuggested;
  }
  /** @return bool */
  public function getBorderTopSuggested()
  {
    return $this->borderTopSuggested;
  }
  /** @param bool */
  public function setDirectionSuggested($directionSuggested)
  {
    $this->directionSuggested = $directionSuggested;
  }
  /** @return bool */
  public function getDirectionSuggested()
  {
    return $this->directionSuggested;
  }
  /** @param bool */
  public function setHeadingIdSuggested($headingIdSuggested)
  {
    $this->headingIdSuggested = $headingIdSuggested;
  }
  /** @return bool */
  public function getHeadingIdSuggested()
  {
    return $this->headingIdSuggested;
  }
  /** @param bool */
  public function setIndentEndSuggested($indentEndSuggested)
  {
    $this->indentEndSuggested = $indentEndSuggested;
  }
  /** @return bool */
  public function getIndentEndSuggested()
  {
    return $this->indentEndSuggested;
  }
  /** @param bool */
  public function setIndentFirstLineSuggested($indentFirstLineSuggested)
  {
    $this->indentFirstLineSuggested = $indentFirstLineSuggested;
  }
  /** @return bool */
  public function getIndentFirstLineSuggested()
  {
    return $this->indentFirstLineSuggested;
  }
  /** @param bool */
  public function setIndentStartSuggested($indentStartSuggested)
  {
    $this->indentStartSuggested = $indentStartSuggested;
  }
  /** @return bool */
  public function getIndentStartSuggested()
  {
    return $this->indentStartSuggested;
  }
  /** @param bool */
  public function setKeepLinesTogetherSuggested($keepLinesTogetherSuggested)
  {
    $this->keepLinesTogetherSuggested = $keepLinesTogetherSuggested;
  }
  /** @return bool */
  public function getKeepLinesTogetherSuggested()
  {
    return $this->keepLinesTogetherSuggested;
  }
  /** @param bool */
  public function setKeepWithNextSuggested($keepWithNextSuggested)
  {
    $this->keepWithNextSuggested = $keepWithNextSuggested;
  }
  /** @return bool */
  public function getKeepWithNextSuggested()
  {
    return $this->keepWithNextSuggested;
  }
  /** @param bool */
  public function setLineSpacingSuggested($lineSpacingSuggested)
  {
    $this->lineSpacingSuggested = $lineSpacingSuggested;
  }
  /** @return bool */
  public function getLineSpacingSuggested()
  {
    return $this->lineSpacingSuggested;
  }
  /** @param bool */
  public function setNamedStyleTypeSuggested($namedStyleTypeSuggested)
  {
    $this->namedStyleTypeSuggested = $namedStyleTypeSuggested;
  }
  /** @return bool */
  public function getNamedStyleTypeSuggested()
  {
    return $this->namedStyleTypeSuggested;
  }
  /** @param bool */
  public function setPageBreakBeforeSuggested($pageBreakBeforeSuggested)
  {
    $this->pageBreakBeforeSuggested = $pageBreakBeforeSuggested;
  }
  /** @return bool */
  public function getPageBreakBeforeSuggested()
  {
    return $this->pageBreakBeforeSuggested;
  }
  /** @param ShadingSuggestionState */
  public function setShadingSuggestionState(ShadingSuggestionState $shadingSuggestionState)
  {
    $this->shadingSuggestionState = $shadingSuggestionState;
  }
  /** @return ShadingSuggestionState */
  public function getShadingSuggestionState()
  {
    return $this->shadingSuggestionState;
  }
  /** @param bool */
  public function setSpaceAboveSuggested($spaceAboveSuggested)
  {
    $this->spaceAboveSuggested = $spaceAboveSuggested;
  }
  /** @return bool */
  public function getSpaceAboveSuggested()
  {
    return $this->spaceAboveSuggested;
  }
  /** @param bool */
  public function setSpaceBelowSuggested($spaceBelowSuggested)
  {
    $this->spaceBelowSuggested = $spaceBelowSuggested;
  }
  /** @return bool */
  public function getSpaceBelowSuggested()
  {
    return $this->spaceBelowSuggested;
  }
  /** @param bool */
  public function setSpacingModeSuggested($spacingModeSuggested)
  {
    $this->spacingModeSuggested = $spacingModeSuggested;
  }
  /** @return bool */
  public function getSpacingModeSuggested()
  {
    return $this->spacingModeSuggested;
  }
}

class Person extends \Google\Collection
{
  /** @var string */
  public $personId;
  /** @var PersonProperties */
  public $personProperties;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $personPropertiesType = PersonProperties::class;
  protected $personPropertiesDataType = '';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setPersonId($personId)
  {
    $this->personId = $personId;
  }
  /** @return string */
  public function getPersonId()
  {
    return $this->personId;
  }
  /** @param PersonProperties */
  public function setPersonProperties(PersonProperties $personProperties)
  {
    $this->personProperties = $personProperties;
  }
  /** @return PersonProperties */
  public function getPersonProperties()
  {
    return $this->personProperties;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class PersonProperties extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $name;

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
}

class PinTableHeaderRowsRequest extends \Google\Model
{
  /** @var int */
  public $pinnedHeaderRowsCount;
  /** @var Location */
  public $tableStartLocation;
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';
  /** @param int */
  public function setPinnedHeaderRowsCount($pinnedHeaderRowsCount)
  {
    $this->pinnedHeaderRowsCount = $pinnedHeaderRowsCount;
  }
  /** @return int */
  public function getPinnedHeaderRowsCount()
  {
    return $this->pinnedHeaderRowsCount;
  }
  /** @param Location */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /** @return Location */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

class PositionedObject extends \Google\Collection
{
  /** @var string */
  public $objectId;
  /** @var PositionedObjectProperties */
  public $positionedObjectProperties;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string */
  public $suggestedInsertionId;
  /** @var SuggestedPositionedObjectProperties[] */
  public $suggestedPositionedObjectPropertiesChanges;
  protected $collection_key = 'suggestedDeletionIds';
  protected $positionedObjectPropertiesType = PositionedObjectProperties::class;
  protected $positionedObjectPropertiesDataType = '';
  protected $suggestedPositionedObjectPropertiesChangesType = SuggestedPositionedObjectProperties::class;
  protected $suggestedPositionedObjectPropertiesChangesDataType = 'map';
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param PositionedObjectProperties */
  public function setPositionedObjectProperties(PositionedObjectProperties $positionedObjectProperties)
  {
    $this->positionedObjectProperties = $positionedObjectProperties;
  }
  /** @return PositionedObjectProperties */
  public function getPositionedObjectProperties()
  {
    return $this->positionedObjectProperties;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string */
  public function setSuggestedInsertionId($suggestedInsertionId)
  {
    $this->suggestedInsertionId = $suggestedInsertionId;
  }
  /** @return string */
  public function getSuggestedInsertionId()
  {
    return $this->suggestedInsertionId;
  }
  /** @param SuggestedPositionedObjectProperties[] */
  public function setSuggestedPositionedObjectPropertiesChanges($suggestedPositionedObjectPropertiesChanges)
  {
    $this->suggestedPositionedObjectPropertiesChanges = $suggestedPositionedObjectPropertiesChanges;
  }
  /** @return SuggestedPositionedObjectProperties[] */
  public function getSuggestedPositionedObjectPropertiesChanges()
  {
    return $this->suggestedPositionedObjectPropertiesChanges;
  }
}

class PositionedObjectPositioning extends \Google\Model
{
  /** @var string */
  public $layout;
  /** @var Dimension */
  public $leftOffset;
  /** @var Dimension */
  public $topOffset;
  protected $leftOffsetType = Dimension::class;
  protected $leftOffsetDataType = '';
  protected $topOffsetType = Dimension::class;
  protected $topOffsetDataType = '';
  /** @param string */
  public function setLayout($layout)
  {
    $this->layout = $layout;
  }
  /** @return string */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param Dimension */
  public function setLeftOffset(Dimension $leftOffset)
  {
    $this->leftOffset = $leftOffset;
  }
  /** @return Dimension */
  public function getLeftOffset()
  {
    return $this->leftOffset;
  }
  /** @param Dimension */
  public function setTopOffset(Dimension $topOffset)
  {
    $this->topOffset = $topOffset;
  }
  /** @return Dimension */
  public function getTopOffset()
  {
    return $this->topOffset;
  }
}

class PositionedObjectPositioningSuggestionState extends \Google\Model
{
  /** @var bool */
  public $layoutSuggested;
  /** @var bool */
  public $leftOffsetSuggested;
  /** @var bool */
  public $topOffsetSuggested;

  /** @param bool */
  public function setLayoutSuggested($layoutSuggested)
  {
    $this->layoutSuggested = $layoutSuggested;
  }
  /** @return bool */
  public function getLayoutSuggested()
  {
    return $this->layoutSuggested;
  }
  /** @param bool */
  public function setLeftOffsetSuggested($leftOffsetSuggested)
  {
    $this->leftOffsetSuggested = $leftOffsetSuggested;
  }
  /** @return bool */
  public function getLeftOffsetSuggested()
  {
    return $this->leftOffsetSuggested;
  }
  /** @param bool */
  public function setTopOffsetSuggested($topOffsetSuggested)
  {
    $this->topOffsetSuggested = $topOffsetSuggested;
  }
  /** @return bool */
  public function getTopOffsetSuggested()
  {
    return $this->topOffsetSuggested;
  }
}

class PositionedObjectProperties extends \Google\Model
{
  /** @var EmbeddedObject */
  public $embeddedObject;
  /** @var PositionedObjectPositioning */
  public $positioning;
  protected $embeddedObjectType = EmbeddedObject::class;
  protected $embeddedObjectDataType = '';
  protected $positioningType = PositionedObjectPositioning::class;
  protected $positioningDataType = '';
  /** @param EmbeddedObject */
  public function setEmbeddedObject(EmbeddedObject $embeddedObject)
  {
    $this->embeddedObject = $embeddedObject;
  }
  /** @return EmbeddedObject */
  public function getEmbeddedObject()
  {
    return $this->embeddedObject;
  }
  /** @param PositionedObjectPositioning */
  public function setPositioning(PositionedObjectPositioning $positioning)
  {
    $this->positioning = $positioning;
  }
  /** @return PositionedObjectPositioning */
  public function getPositioning()
  {
    return $this->positioning;
  }
}

class PositionedObjectPropertiesSuggestionState extends \Google\Model
{
  /** @var EmbeddedObjectSuggestionState */
  public $embeddedObjectSuggestionState;
  /** @var PositionedObjectPositioningSuggestionState */
  public $positioningSuggestionState;
  protected $embeddedObjectSuggestionStateType = EmbeddedObjectSuggestionState::class;
  protected $embeddedObjectSuggestionStateDataType = '';
  protected $positioningSuggestionStateType = PositionedObjectPositioningSuggestionState::class;
  protected $positioningSuggestionStateDataType = '';
  /** @param EmbeddedObjectSuggestionState */
  public function setEmbeddedObjectSuggestionState(EmbeddedObjectSuggestionState $embeddedObjectSuggestionState)
  {
    $this->embeddedObjectSuggestionState = $embeddedObjectSuggestionState;
  }
  /** @return EmbeddedObjectSuggestionState */
  public function getEmbeddedObjectSuggestionState()
  {
    return $this->embeddedObjectSuggestionState;
  }
  /** @param PositionedObjectPositioningSuggestionState */
  public function setPositioningSuggestionState(PositionedObjectPositioningSuggestionState $positioningSuggestionState)
  {
    $this->positioningSuggestionState = $positioningSuggestionState;
  }
  /** @return PositionedObjectPositioningSuggestionState */
  public function getPositioningSuggestionState()
  {
    return $this->positioningSuggestionState;
  }
}

class Range extends \Google\Model
{
  /** @var int */
  public $endIndex;
  /** @var string */
  public $segmentId;
  /** @var int */
  public $startIndex;

  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
}

class ReplaceAllTextRequest extends \Google\Model
{
  /** @var SubstringMatchCriteria */
  public $containsText;
  /** @var string */
  public $replaceText;
  protected $containsTextType = SubstringMatchCriteria::class;
  protected $containsTextDataType = '';
  /** @param SubstringMatchCriteria */
  public function setContainsText(SubstringMatchCriteria $containsText)
  {
    $this->containsText = $containsText;
  }
  /** @return SubstringMatchCriteria */
  public function getContainsText()
  {
    return $this->containsText;
  }
  /** @param string */
  public function setReplaceText($replaceText)
  {
    $this->replaceText = $replaceText;
  }
  /** @return string */
  public function getReplaceText()
  {
    return $this->replaceText;
  }
}

class ReplaceAllTextResponse extends \Google\Model
{
  /** @var int */
  public $occurrencesChanged;

  /** @param int */
  public function setOccurrencesChanged($occurrencesChanged)
  {
    $this->occurrencesChanged = $occurrencesChanged;
  }
  /** @return int */
  public function getOccurrencesChanged()
  {
    return $this->occurrencesChanged;
  }
}

class ReplaceImageRequest extends \Google\Model
{
  /** @var string */
  public $imageObjectId;
  /** @var string */
  public $imageReplaceMethod;
  /** @var string */
  public $uri;

  /** @param string */
  public function setImageObjectId($imageObjectId)
  {
    $this->imageObjectId = $imageObjectId;
  }
  /** @return string */
  public function getImageObjectId()
  {
    return $this->imageObjectId;
  }
  /** @param string */
  public function setImageReplaceMethod($imageReplaceMethod)
  {
    $this->imageReplaceMethod = $imageReplaceMethod;
  }
  /** @return string */
  public function getImageReplaceMethod()
  {
    return $this->imageReplaceMethod;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class ReplaceNamedRangeContentRequest extends \Google\Model
{
  /** @var string */
  public $namedRangeId;
  /** @var string */
  public $namedRangeName;
  /** @var string */
  public $text;

  /** @param string */
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param string */
  public function setNamedRangeName($namedRangeName)
  {
    $this->namedRangeName = $namedRangeName;
  }
  /** @return string */
  public function getNamedRangeName()
  {
    return $this->namedRangeName;
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
}

class Request extends \Google\Model
{
  /** @var CreateFooterRequest */
  public $createFooter;
  /** @var CreateFootnoteRequest */
  public $createFootnote;
  /** @var CreateHeaderRequest */
  public $createHeader;
  /** @var CreateNamedRangeRequest */
  public $createNamedRange;
  /** @var CreateParagraphBulletsRequest */
  public $createParagraphBullets;
  /** @var DeleteContentRangeRequest */
  public $deleteContentRange;
  /** @var DeleteFooterRequest */
  public $deleteFooter;
  /** @var DeleteHeaderRequest */
  public $deleteHeader;
  /** @var DeleteNamedRangeRequest */
  public $deleteNamedRange;
  /** @var DeleteParagraphBulletsRequest */
  public $deleteParagraphBullets;
  /** @var DeletePositionedObjectRequest */
  public $deletePositionedObject;
  /** @var DeleteTableColumnRequest */
  public $deleteTableColumn;
  /** @var DeleteTableRowRequest */
  public $deleteTableRow;
  /** @var InsertInlineImageRequest */
  public $insertInlineImage;
  /** @var InsertPageBreakRequest */
  public $insertPageBreak;
  /** @var InsertSectionBreakRequest */
  public $insertSectionBreak;
  /** @var InsertTableRequest */
  public $insertTable;
  /** @var InsertTableColumnRequest */
  public $insertTableColumn;
  /** @var InsertTableRowRequest */
  public $insertTableRow;
  /** @var InsertTextRequest */
  public $insertText;
  /** @var MergeTableCellsRequest */
  public $mergeTableCells;
  /** @var PinTableHeaderRowsRequest */
  public $pinTableHeaderRows;
  /** @var ReplaceAllTextRequest */
  public $replaceAllText;
  /** @var ReplaceImageRequest */
  public $replaceImage;
  /** @var ReplaceNamedRangeContentRequest */
  public $replaceNamedRangeContent;
  /** @var UnmergeTableCellsRequest */
  public $unmergeTableCells;
  /** @var UpdateDocumentStyleRequest */
  public $updateDocumentStyle;
  /** @var UpdateParagraphStyleRequest */
  public $updateParagraphStyle;
  /** @var UpdateSectionStyleRequest */
  public $updateSectionStyle;
  /** @var UpdateTableCellStyleRequest */
  public $updateTableCellStyle;
  /** @var UpdateTableColumnPropertiesRequest */
  public $updateTableColumnProperties;
  /** @var UpdateTableRowStyleRequest */
  public $updateTableRowStyle;
  /** @var UpdateTextStyleRequest */
  public $updateTextStyle;
  protected $createFooterType = CreateFooterRequest::class;
  protected $createFooterDataType = '';
  protected $createFootnoteType = CreateFootnoteRequest::class;
  protected $createFootnoteDataType = '';
  protected $createHeaderType = CreateHeaderRequest::class;
  protected $createHeaderDataType = '';
  protected $createNamedRangeType = CreateNamedRangeRequest::class;
  protected $createNamedRangeDataType = '';
  protected $createParagraphBulletsType = CreateParagraphBulletsRequest::class;
  protected $createParagraphBulletsDataType = '';
  protected $deleteContentRangeType = DeleteContentRangeRequest::class;
  protected $deleteContentRangeDataType = '';
  protected $deleteFooterType = DeleteFooterRequest::class;
  protected $deleteFooterDataType = '';
  protected $deleteHeaderType = DeleteHeaderRequest::class;
  protected $deleteHeaderDataType = '';
  protected $deleteNamedRangeType = DeleteNamedRangeRequest::class;
  protected $deleteNamedRangeDataType = '';
  protected $deleteParagraphBulletsType = DeleteParagraphBulletsRequest::class;
  protected $deleteParagraphBulletsDataType = '';
  protected $deletePositionedObjectType = DeletePositionedObjectRequest::class;
  protected $deletePositionedObjectDataType = '';
  protected $deleteTableColumnType = DeleteTableColumnRequest::class;
  protected $deleteTableColumnDataType = '';
  protected $deleteTableRowType = DeleteTableRowRequest::class;
  protected $deleteTableRowDataType = '';
  protected $insertInlineImageType = InsertInlineImageRequest::class;
  protected $insertInlineImageDataType = '';
  protected $insertPageBreakType = InsertPageBreakRequest::class;
  protected $insertPageBreakDataType = '';
  protected $insertSectionBreakType = InsertSectionBreakRequest::class;
  protected $insertSectionBreakDataType = '';
  protected $insertTableType = InsertTableRequest::class;
  protected $insertTableDataType = '';
  protected $insertTableColumnType = InsertTableColumnRequest::class;
  protected $insertTableColumnDataType = '';
  protected $insertTableRowType = InsertTableRowRequest::class;
  protected $insertTableRowDataType = '';
  protected $insertTextType = InsertTextRequest::class;
  protected $insertTextDataType = '';
  protected $mergeTableCellsType = MergeTableCellsRequest::class;
  protected $mergeTableCellsDataType = '';
  protected $pinTableHeaderRowsType = PinTableHeaderRowsRequest::class;
  protected $pinTableHeaderRowsDataType = '';
  protected $replaceAllTextType = ReplaceAllTextRequest::class;
  protected $replaceAllTextDataType = '';
  protected $replaceImageType = ReplaceImageRequest::class;
  protected $replaceImageDataType = '';
  protected $replaceNamedRangeContentType = ReplaceNamedRangeContentRequest::class;
  protected $replaceNamedRangeContentDataType = '';
  protected $unmergeTableCellsType = UnmergeTableCellsRequest::class;
  protected $unmergeTableCellsDataType = '';
  protected $updateDocumentStyleType = UpdateDocumentStyleRequest::class;
  protected $updateDocumentStyleDataType = '';
  protected $updateParagraphStyleType = UpdateParagraphStyleRequest::class;
  protected $updateParagraphStyleDataType = '';
  protected $updateSectionStyleType = UpdateSectionStyleRequest::class;
  protected $updateSectionStyleDataType = '';
  protected $updateTableCellStyleType = UpdateTableCellStyleRequest::class;
  protected $updateTableCellStyleDataType = '';
  protected $updateTableColumnPropertiesType = UpdateTableColumnPropertiesRequest::class;
  protected $updateTableColumnPropertiesDataType = '';
  protected $updateTableRowStyleType = UpdateTableRowStyleRequest::class;
  protected $updateTableRowStyleDataType = '';
  protected $updateTextStyleType = UpdateTextStyleRequest::class;
  protected $updateTextStyleDataType = '';
  /** @param CreateFooterRequest */
  public function setCreateFooter(CreateFooterRequest $createFooter)
  {
    $this->createFooter = $createFooter;
  }
  /** @return CreateFooterRequest */
  public function getCreateFooter()
  {
    return $this->createFooter;
  }
  /** @param CreateFootnoteRequest */
  public function setCreateFootnote(CreateFootnoteRequest $createFootnote)
  {
    $this->createFootnote = $createFootnote;
  }
  /** @return CreateFootnoteRequest */
  public function getCreateFootnote()
  {
    return $this->createFootnote;
  }
  /** @param CreateHeaderRequest */
  public function setCreateHeader(CreateHeaderRequest $createHeader)
  {
    $this->createHeader = $createHeader;
  }
  /** @return CreateHeaderRequest */
  public function getCreateHeader()
  {
    return $this->createHeader;
  }
  /** @param CreateNamedRangeRequest */
  public function setCreateNamedRange(CreateNamedRangeRequest $createNamedRange)
  {
    $this->createNamedRange = $createNamedRange;
  }
  /** @return CreateNamedRangeRequest */
  public function getCreateNamedRange()
  {
    return $this->createNamedRange;
  }
  /** @param CreateParagraphBulletsRequest */
  public function setCreateParagraphBullets(CreateParagraphBulletsRequest $createParagraphBullets)
  {
    $this->createParagraphBullets = $createParagraphBullets;
  }
  /** @return CreateParagraphBulletsRequest */
  public function getCreateParagraphBullets()
  {
    return $this->createParagraphBullets;
  }
  /** @param DeleteContentRangeRequest */
  public function setDeleteContentRange(DeleteContentRangeRequest $deleteContentRange)
  {
    $this->deleteContentRange = $deleteContentRange;
  }
  /** @return DeleteContentRangeRequest */
  public function getDeleteContentRange()
  {
    return $this->deleteContentRange;
  }
  /** @param DeleteFooterRequest */
  public function setDeleteFooter(DeleteFooterRequest $deleteFooter)
  {
    $this->deleteFooter = $deleteFooter;
  }
  /** @return DeleteFooterRequest */
  public function getDeleteFooter()
  {
    return $this->deleteFooter;
  }
  /** @param DeleteHeaderRequest */
  public function setDeleteHeader(DeleteHeaderRequest $deleteHeader)
  {
    $this->deleteHeader = $deleteHeader;
  }
  /** @return DeleteHeaderRequest */
  public function getDeleteHeader()
  {
    return $this->deleteHeader;
  }
  /** @param DeleteNamedRangeRequest */
  public function setDeleteNamedRange(DeleteNamedRangeRequest $deleteNamedRange)
  {
    $this->deleteNamedRange = $deleteNamedRange;
  }
  /** @return DeleteNamedRangeRequest */
  public function getDeleteNamedRange()
  {
    return $this->deleteNamedRange;
  }
  /** @param DeleteParagraphBulletsRequest */
  public function setDeleteParagraphBullets(DeleteParagraphBulletsRequest $deleteParagraphBullets)
  {
    $this->deleteParagraphBullets = $deleteParagraphBullets;
  }
  /** @return DeleteParagraphBulletsRequest */
  public function getDeleteParagraphBullets()
  {
    return $this->deleteParagraphBullets;
  }
  /** @param DeletePositionedObjectRequest */
  public function setDeletePositionedObject(DeletePositionedObjectRequest $deletePositionedObject)
  {
    $this->deletePositionedObject = $deletePositionedObject;
  }
  /** @return DeletePositionedObjectRequest */
  public function getDeletePositionedObject()
  {
    return $this->deletePositionedObject;
  }
  /** @param DeleteTableColumnRequest */
  public function setDeleteTableColumn(DeleteTableColumnRequest $deleteTableColumn)
  {
    $this->deleteTableColumn = $deleteTableColumn;
  }
  /** @return DeleteTableColumnRequest */
  public function getDeleteTableColumn()
  {
    return $this->deleteTableColumn;
  }
  /** @param DeleteTableRowRequest */
  public function setDeleteTableRow(DeleteTableRowRequest $deleteTableRow)
  {
    $this->deleteTableRow = $deleteTableRow;
  }
  /** @return DeleteTableRowRequest */
  public function getDeleteTableRow()
  {
    return $this->deleteTableRow;
  }
  /** @param InsertInlineImageRequest */
  public function setInsertInlineImage(InsertInlineImageRequest $insertInlineImage)
  {
    $this->insertInlineImage = $insertInlineImage;
  }
  /** @return InsertInlineImageRequest */
  public function getInsertInlineImage()
  {
    return $this->insertInlineImage;
  }
  /** @param InsertPageBreakRequest */
  public function setInsertPageBreak(InsertPageBreakRequest $insertPageBreak)
  {
    $this->insertPageBreak = $insertPageBreak;
  }
  /** @return InsertPageBreakRequest */
  public function getInsertPageBreak()
  {
    return $this->insertPageBreak;
  }
  /** @param InsertSectionBreakRequest */
  public function setInsertSectionBreak(InsertSectionBreakRequest $insertSectionBreak)
  {
    $this->insertSectionBreak = $insertSectionBreak;
  }
  /** @return InsertSectionBreakRequest */
  public function getInsertSectionBreak()
  {
    return $this->insertSectionBreak;
  }
  /** @param InsertTableRequest */
  public function setInsertTable(InsertTableRequest $insertTable)
  {
    $this->insertTable = $insertTable;
  }
  /** @return InsertTableRequest */
  public function getInsertTable()
  {
    return $this->insertTable;
  }
  /** @param InsertTableColumnRequest */
  public function setInsertTableColumn(InsertTableColumnRequest $insertTableColumn)
  {
    $this->insertTableColumn = $insertTableColumn;
  }
  /** @return InsertTableColumnRequest */
  public function getInsertTableColumn()
  {
    return $this->insertTableColumn;
  }
  /** @param InsertTableRowRequest */
  public function setInsertTableRow(InsertTableRowRequest $insertTableRow)
  {
    $this->insertTableRow = $insertTableRow;
  }
  /** @return InsertTableRowRequest */
  public function getInsertTableRow()
  {
    return $this->insertTableRow;
  }
  /** @param InsertTextRequest */
  public function setInsertText(InsertTextRequest $insertText)
  {
    $this->insertText = $insertText;
  }
  /** @return InsertTextRequest */
  public function getInsertText()
  {
    return $this->insertText;
  }
  /** @param MergeTableCellsRequest */
  public function setMergeTableCells(MergeTableCellsRequest $mergeTableCells)
  {
    $this->mergeTableCells = $mergeTableCells;
  }
  /** @return MergeTableCellsRequest */
  public function getMergeTableCells()
  {
    return $this->mergeTableCells;
  }
  /** @param PinTableHeaderRowsRequest */
  public function setPinTableHeaderRows(PinTableHeaderRowsRequest $pinTableHeaderRows)
  {
    $this->pinTableHeaderRows = $pinTableHeaderRows;
  }
  /** @return PinTableHeaderRowsRequest */
  public function getPinTableHeaderRows()
  {
    return $this->pinTableHeaderRows;
  }
  /** @param ReplaceAllTextRequest */
  public function setReplaceAllText(ReplaceAllTextRequest $replaceAllText)
  {
    $this->replaceAllText = $replaceAllText;
  }
  /** @return ReplaceAllTextRequest */
  public function getReplaceAllText()
  {
    return $this->replaceAllText;
  }
  /** @param ReplaceImageRequest */
  public function setReplaceImage(ReplaceImageRequest $replaceImage)
  {
    $this->replaceImage = $replaceImage;
  }
  /** @return ReplaceImageRequest */
  public function getReplaceImage()
  {
    return $this->replaceImage;
  }
  /** @param ReplaceNamedRangeContentRequest */
  public function setReplaceNamedRangeContent(ReplaceNamedRangeContentRequest $replaceNamedRangeContent)
  {
    $this->replaceNamedRangeContent = $replaceNamedRangeContent;
  }
  /** @return ReplaceNamedRangeContentRequest */
  public function getReplaceNamedRangeContent()
  {
    return $this->replaceNamedRangeContent;
  }
  /** @param UnmergeTableCellsRequest */
  public function setUnmergeTableCells(UnmergeTableCellsRequest $unmergeTableCells)
  {
    $this->unmergeTableCells = $unmergeTableCells;
  }
  /** @return UnmergeTableCellsRequest */
  public function getUnmergeTableCells()
  {
    return $this->unmergeTableCells;
  }
  /** @param UpdateDocumentStyleRequest */
  public function setUpdateDocumentStyle(UpdateDocumentStyleRequest $updateDocumentStyle)
  {
    $this->updateDocumentStyle = $updateDocumentStyle;
  }
  /** @return UpdateDocumentStyleRequest */
  public function getUpdateDocumentStyle()
  {
    return $this->updateDocumentStyle;
  }
  /** @param UpdateParagraphStyleRequest */
  public function setUpdateParagraphStyle(UpdateParagraphStyleRequest $updateParagraphStyle)
  {
    $this->updateParagraphStyle = $updateParagraphStyle;
  }
  /** @return UpdateParagraphStyleRequest */
  public function getUpdateParagraphStyle()
  {
    return $this->updateParagraphStyle;
  }
  /** @param UpdateSectionStyleRequest */
  public function setUpdateSectionStyle(UpdateSectionStyleRequest $updateSectionStyle)
  {
    $this->updateSectionStyle = $updateSectionStyle;
  }
  /** @return UpdateSectionStyleRequest */
  public function getUpdateSectionStyle()
  {
    return $this->updateSectionStyle;
  }
  /** @param UpdateTableCellStyleRequest */
  public function setUpdateTableCellStyle(UpdateTableCellStyleRequest $updateTableCellStyle)
  {
    $this->updateTableCellStyle = $updateTableCellStyle;
  }
  /** @return UpdateTableCellStyleRequest */
  public function getUpdateTableCellStyle()
  {
    return $this->updateTableCellStyle;
  }
  /** @param UpdateTableColumnPropertiesRequest */
  public function setUpdateTableColumnProperties(UpdateTableColumnPropertiesRequest $updateTableColumnProperties)
  {
    $this->updateTableColumnProperties = $updateTableColumnProperties;
  }
  /** @return UpdateTableColumnPropertiesRequest */
  public function getUpdateTableColumnProperties()
  {
    return $this->updateTableColumnProperties;
  }
  /** @param UpdateTableRowStyleRequest */
  public function setUpdateTableRowStyle(UpdateTableRowStyleRequest $updateTableRowStyle)
  {
    $this->updateTableRowStyle = $updateTableRowStyle;
  }
  /** @return UpdateTableRowStyleRequest */
  public function getUpdateTableRowStyle()
  {
    return $this->updateTableRowStyle;
  }
  /** @param UpdateTextStyleRequest */
  public function setUpdateTextStyle(UpdateTextStyleRequest $updateTextStyle)
  {
    $this->updateTextStyle = $updateTextStyle;
  }
  /** @return UpdateTextStyleRequest */
  public function getUpdateTextStyle()
  {
    return $this->updateTextStyle;
  }
}

class Response extends \Google\Model
{
  /** @var CreateFooterResponse */
  public $createFooter;
  /** @var CreateFootnoteResponse */
  public $createFootnote;
  /** @var CreateHeaderResponse */
  public $createHeader;
  /** @var CreateNamedRangeResponse */
  public $createNamedRange;
  /** @var InsertInlineImageResponse */
  public $insertInlineImage;
  /** @var InsertInlineSheetsChartResponse */
  public $insertInlineSheetsChart;
  /** @var ReplaceAllTextResponse */
  public $replaceAllText;
  protected $createFooterType = CreateFooterResponse::class;
  protected $createFooterDataType = '';
  protected $createFootnoteType = CreateFootnoteResponse::class;
  protected $createFootnoteDataType = '';
  protected $createHeaderType = CreateHeaderResponse::class;
  protected $createHeaderDataType = '';
  protected $createNamedRangeType = CreateNamedRangeResponse::class;
  protected $createNamedRangeDataType = '';
  protected $insertInlineImageType = InsertInlineImageResponse::class;
  protected $insertInlineImageDataType = '';
  protected $insertInlineSheetsChartType = InsertInlineSheetsChartResponse::class;
  protected $insertInlineSheetsChartDataType = '';
  protected $replaceAllTextType = ReplaceAllTextResponse::class;
  protected $replaceAllTextDataType = '';
  /** @param CreateFooterResponse */
  public function setCreateFooter(CreateFooterResponse $createFooter)
  {
    $this->createFooter = $createFooter;
  }
  /** @return CreateFooterResponse */
  public function getCreateFooter()
  {
    return $this->createFooter;
  }
  /** @param CreateFootnoteResponse */
  public function setCreateFootnote(CreateFootnoteResponse $createFootnote)
  {
    $this->createFootnote = $createFootnote;
  }
  /** @return CreateFootnoteResponse */
  public function getCreateFootnote()
  {
    return $this->createFootnote;
  }
  /** @param CreateHeaderResponse */
  public function setCreateHeader(CreateHeaderResponse $createHeader)
  {
    $this->createHeader = $createHeader;
  }
  /** @return CreateHeaderResponse */
  public function getCreateHeader()
  {
    return $this->createHeader;
  }
  /** @param CreateNamedRangeResponse */
  public function setCreateNamedRange(CreateNamedRangeResponse $createNamedRange)
  {
    $this->createNamedRange = $createNamedRange;
  }
  /** @return CreateNamedRangeResponse */
  public function getCreateNamedRange()
  {
    return $this->createNamedRange;
  }
  /** @param InsertInlineImageResponse */
  public function setInsertInlineImage(InsertInlineImageResponse $insertInlineImage)
  {
    $this->insertInlineImage = $insertInlineImage;
  }
  /** @return InsertInlineImageResponse */
  public function getInsertInlineImage()
  {
    return $this->insertInlineImage;
  }
  /** @param InsertInlineSheetsChartResponse */
  public function setInsertInlineSheetsChart(InsertInlineSheetsChartResponse $insertInlineSheetsChart)
  {
    $this->insertInlineSheetsChart = $insertInlineSheetsChart;
  }
  /** @return InsertInlineSheetsChartResponse */
  public function getInsertInlineSheetsChart()
  {
    return $this->insertInlineSheetsChart;
  }
  /** @param ReplaceAllTextResponse */
  public function setReplaceAllText(ReplaceAllTextResponse $replaceAllText)
  {
    $this->replaceAllText = $replaceAllText;
  }
  /** @return ReplaceAllTextResponse */
  public function getReplaceAllText()
  {
    return $this->replaceAllText;
  }
}

class RgbColor extends \Google\Model
{
  /** @var float */
  public $blue;
  /** @var float */
  public $green;
  /** @var float */
  public $red;

  /** @param float */
  public function setBlue($blue)
  {
    $this->blue = $blue;
  }
  /** @return float */
  public function getBlue()
  {
    return $this->blue;
  }
  /** @param float */
  public function setGreen($green)
  {
    $this->green = $green;
  }
  /** @return float */
  public function getGreen()
  {
    return $this->green;
  }
  /** @param float */
  public function setRed($red)
  {
    $this->red = $red;
  }
  /** @return float */
  public function getRed()
  {
    return $this->red;
  }
}

class RichLink extends \Google\Collection
{
  /** @var string */
  public $richLinkId;
  /** @var RichLinkProperties */
  public $richLinkProperties;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $richLinkPropertiesType = RichLinkProperties::class;
  protected $richLinkPropertiesDataType = '';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setRichLinkId($richLinkId)
  {
    $this->richLinkId = $richLinkId;
  }
  /** @return string */
  public function getRichLinkId()
  {
    return $this->richLinkId;
  }
  /** @param RichLinkProperties */
  public function setRichLinkProperties(RichLinkProperties $richLinkProperties)
  {
    $this->richLinkProperties = $richLinkProperties;
  }
  /** @return RichLinkProperties */
  public function getRichLinkProperties()
  {
    return $this->richLinkProperties;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class RichLinkProperties extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $title;
  /** @var string */
  public $uri;

  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class SectionBreak extends \Google\Collection
{
  /** @var SectionStyle */
  public $sectionStyle;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  protected $collection_key = 'suggestedInsertionIds';
  protected $sectionStyleType = SectionStyle::class;
  protected $sectionStyleDataType = '';
  /** @param SectionStyle */
  public function setSectionStyle(SectionStyle $sectionStyle)
  {
    $this->sectionStyle = $sectionStyle;
  }
  /** @return SectionStyle */
  public function getSectionStyle()
  {
    return $this->sectionStyle;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
}

class SectionColumnProperties extends \Google\Model
{
  /** @var Dimension */
  public $paddingEnd;
  /** @var Dimension */
  public $width;
  protected $paddingEndType = Dimension::class;
  protected $paddingEndDataType = '';
  protected $widthType = Dimension::class;
  protected $widthDataType = '';
  /** @param Dimension */
  public function setPaddingEnd(Dimension $paddingEnd)
  {
    $this->paddingEnd = $paddingEnd;
  }
  /** @return Dimension */
  public function getPaddingEnd()
  {
    return $this->paddingEnd;
  }
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
}

class SectionStyle extends \Google\Collection
{
  /** @var SectionColumnProperties[] */
  public $columnProperties;
  /** @var string */
  public $columnSeparatorStyle;
  /** @var string */
  public $contentDirection;
  /** @var string */
  public $defaultFooterId;
  /** @var string */
  public $defaultHeaderId;
  /** @var string */
  public $evenPageFooterId;
  /** @var string */
  public $evenPageHeaderId;
  /** @var string */
  public $firstPageFooterId;
  /** @var string */
  public $firstPageHeaderId;
  /** @var Dimension */
  public $marginBottom;
  /** @var Dimension */
  public $marginFooter;
  /** @var Dimension */
  public $marginHeader;
  /** @var Dimension */
  public $marginLeft;
  /** @var Dimension */
  public $marginRight;
  /** @var Dimension */
  public $marginTop;
  /** @var int */
  public $pageNumberStart;
  /** @var string */
  public $sectionType;
  /** @var bool */
  public $useFirstPageHeaderFooter;
  protected $collection_key = 'columnProperties';
  protected $columnPropertiesType = SectionColumnProperties::class;
  protected $columnPropertiesDataType = 'array';
  protected $marginBottomType = Dimension::class;
  protected $marginBottomDataType = '';
  protected $marginFooterType = Dimension::class;
  protected $marginFooterDataType = '';
  protected $marginHeaderType = Dimension::class;
  protected $marginHeaderDataType = '';
  protected $marginLeftType = Dimension::class;
  protected $marginLeftDataType = '';
  protected $marginRightType = Dimension::class;
  protected $marginRightDataType = '';
  protected $marginTopType = Dimension::class;
  protected $marginTopDataType = '';
  /** @param SectionColumnProperties[] */
  public function setColumnProperties($columnProperties)
  {
    $this->columnProperties = $columnProperties;
  }
  /** @return SectionColumnProperties[] */
  public function getColumnProperties()
  {
    return $this->columnProperties;
  }
  /** @param string */
  public function setColumnSeparatorStyle($columnSeparatorStyle)
  {
    $this->columnSeparatorStyle = $columnSeparatorStyle;
  }
  /** @return string */
  public function getColumnSeparatorStyle()
  {
    return $this->columnSeparatorStyle;
  }
  /** @param string */
  public function setContentDirection($contentDirection)
  {
    $this->contentDirection = $contentDirection;
  }
  /** @return string */
  public function getContentDirection()
  {
    return $this->contentDirection;
  }
  /** @param string */
  public function setDefaultFooterId($defaultFooterId)
  {
    $this->defaultFooterId = $defaultFooterId;
  }
  /** @return string */
  public function getDefaultFooterId()
  {
    return $this->defaultFooterId;
  }
  /** @param string */
  public function setDefaultHeaderId($defaultHeaderId)
  {
    $this->defaultHeaderId = $defaultHeaderId;
  }
  /** @return string */
  public function getDefaultHeaderId()
  {
    return $this->defaultHeaderId;
  }
  /** @param string */
  public function setEvenPageFooterId($evenPageFooterId)
  {
    $this->evenPageFooterId = $evenPageFooterId;
  }
  /** @return string */
  public function getEvenPageFooterId()
  {
    return $this->evenPageFooterId;
  }
  /** @param string */
  public function setEvenPageHeaderId($evenPageHeaderId)
  {
    $this->evenPageHeaderId = $evenPageHeaderId;
  }
  /** @return string */
  public function getEvenPageHeaderId()
  {
    return $this->evenPageHeaderId;
  }
  /** @param string */
  public function setFirstPageFooterId($firstPageFooterId)
  {
    $this->firstPageFooterId = $firstPageFooterId;
  }
  /** @return string */
  public function getFirstPageFooterId()
  {
    return $this->firstPageFooterId;
  }
  /** @param string */
  public function setFirstPageHeaderId($firstPageHeaderId)
  {
    $this->firstPageHeaderId = $firstPageHeaderId;
  }
  /** @return string */
  public function getFirstPageHeaderId()
  {
    return $this->firstPageHeaderId;
  }
  /** @param Dimension */
  public function setMarginBottom(Dimension $marginBottom)
  {
    $this->marginBottom = $marginBottom;
  }
  /** @return Dimension */
  public function getMarginBottom()
  {
    return $this->marginBottom;
  }
  /** @param Dimension */
  public function setMarginFooter(Dimension $marginFooter)
  {
    $this->marginFooter = $marginFooter;
  }
  /** @return Dimension */
  public function getMarginFooter()
  {
    return $this->marginFooter;
  }
  /** @param Dimension */
  public function setMarginHeader(Dimension $marginHeader)
  {
    $this->marginHeader = $marginHeader;
  }
  /** @return Dimension */
  public function getMarginHeader()
  {
    return $this->marginHeader;
  }
  /** @param Dimension */
  public function setMarginLeft(Dimension $marginLeft)
  {
    $this->marginLeft = $marginLeft;
  }
  /** @return Dimension */
  public function getMarginLeft()
  {
    return $this->marginLeft;
  }
  /** @param Dimension */
  public function setMarginRight(Dimension $marginRight)
  {
    $this->marginRight = $marginRight;
  }
  /** @return Dimension */
  public function getMarginRight()
  {
    return $this->marginRight;
  }
  /** @param Dimension */
  public function setMarginTop(Dimension $marginTop)
  {
    $this->marginTop = $marginTop;
  }
  /** @return Dimension */
  public function getMarginTop()
  {
    return $this->marginTop;
  }
  /** @param int */
  public function setPageNumberStart($pageNumberStart)
  {
    $this->pageNumberStart = $pageNumberStart;
  }
  /** @return int */
  public function getPageNumberStart()
  {
    return $this->pageNumberStart;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
  /** @param bool */
  public function setUseFirstPageHeaderFooter($useFirstPageHeaderFooter)
  {
    $this->useFirstPageHeaderFooter = $useFirstPageHeaderFooter;
  }
  /** @return bool */
  public function getUseFirstPageHeaderFooter()
  {
    return $this->useFirstPageHeaderFooter;
  }
}

class Shading extends \Google\Model
{
  /** @var OptionalColor */
  public $backgroundColor;
  protected $backgroundColorType = OptionalColor::class;
  protected $backgroundColorDataType = '';
  /** @param OptionalColor */
  public function setBackgroundColor(OptionalColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return OptionalColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
}

class ShadingSuggestionState extends \Google\Model
{
  /** @var bool */
  public $backgroundColorSuggested;

  /** @param bool */
  public function setBackgroundColorSuggested($backgroundColorSuggested)
  {
    $this->backgroundColorSuggested = $backgroundColorSuggested;
  }
  /** @return bool */
  public function getBackgroundColorSuggested()
  {
    return $this->backgroundColorSuggested;
  }
}

class SheetsChartReference extends \Google\Model
{
  /** @var int */
  public $chartId;
  /** @var string */
  public $spreadsheetId;

  /** @param int */
  public function setChartId($chartId)
  {
    $this->chartId = $chartId;
  }
  /** @return int */
  public function getChartId()
  {
    return $this->chartId;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
}

class SheetsChartReferenceSuggestionState extends \Google\Model
{
  /** @var bool */
  public $chartIdSuggested;
  /** @var bool */
  public $spreadsheetIdSuggested;

  /** @param bool */
  public function setChartIdSuggested($chartIdSuggested)
  {
    $this->chartIdSuggested = $chartIdSuggested;
  }
  /** @return bool */
  public function getChartIdSuggested()
  {
    return $this->chartIdSuggested;
  }
  /** @param bool */
  public function setSpreadsheetIdSuggested($spreadsheetIdSuggested)
  {
    $this->spreadsheetIdSuggested = $spreadsheetIdSuggested;
  }
  /** @return bool */
  public function getSpreadsheetIdSuggested()
  {
    return $this->spreadsheetIdSuggested;
  }
}

class Size extends \Google\Model
{
  /** @var Dimension */
  public $height;
  /** @var Dimension */
  public $width;
  protected $heightType = Dimension::class;
  protected $heightDataType = '';
  protected $widthType = Dimension::class;
  protected $widthDataType = '';
  /** @param Dimension */
  public function setHeight(Dimension $height)
  {
    $this->height = $height;
  }
  /** @return Dimension */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
}

class SizeSuggestionState extends \Google\Model
{
  /** @var bool */
  public $heightSuggested;
  /** @var bool */
  public $widthSuggested;

  /** @param bool */
  public function setHeightSuggested($heightSuggested)
  {
    $this->heightSuggested = $heightSuggested;
  }
  /** @return bool */
  public function getHeightSuggested()
  {
    return $this->heightSuggested;
  }
  /** @param bool */
  public function setWidthSuggested($widthSuggested)
  {
    $this->widthSuggested = $widthSuggested;
  }
  /** @return bool */
  public function getWidthSuggested()
  {
    return $this->widthSuggested;
  }
}

class StructuralElement extends \Google\Model
{
  /** @var int */
  public $endIndex;
  /** @var Paragraph */
  public $paragraph;
  /** @var SectionBreak */
  public $sectionBreak;
  /** @var int */
  public $startIndex;
  /** @var Table */
  public $table;
  /** @var TableOfContents */
  public $tableOfContents;
  protected $paragraphType = Paragraph::class;
  protected $paragraphDataType = '';
  protected $sectionBreakType = SectionBreak::class;
  protected $sectionBreakDataType = '';
  protected $tableType = Table::class;
  protected $tableDataType = '';
  protected $tableOfContentsType = TableOfContents::class;
  protected $tableOfContentsDataType = '';
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param Paragraph */
  public function setParagraph(Paragraph $paragraph)
  {
    $this->paragraph = $paragraph;
  }
  /** @return Paragraph */
  public function getParagraph()
  {
    return $this->paragraph;
  }
  /** @param SectionBreak */
  public function setSectionBreak(SectionBreak $sectionBreak)
  {
    $this->sectionBreak = $sectionBreak;
  }
  /** @return SectionBreak */
  public function getSectionBreak()
  {
    return $this->sectionBreak;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param Table */
  public function setTable(Table $table)
  {
    $this->table = $table;
  }
  /** @return Table */
  public function getTable()
  {
    return $this->table;
  }
  /** @param TableOfContents */
  public function setTableOfContents(TableOfContents $tableOfContents)
  {
    $this->tableOfContents = $tableOfContents;
  }
  /** @return TableOfContents */
  public function getTableOfContents()
  {
    return $this->tableOfContents;
  }
}

class SubstringMatchCriteria extends \Google\Model
{
  /** @var bool */
  public $matchCase;
  /** @var string */
  public $text;

  /** @param bool */
  public function setMatchCase($matchCase)
  {
    $this->matchCase = $matchCase;
  }
  /** @return bool */
  public function getMatchCase()
  {
    return $this->matchCase;
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
}

class SuggestedBullet extends \Google\Model
{
  /** @var Bullet */
  public $bullet;
  /** @var BulletSuggestionState */
  public $bulletSuggestionState;
  protected $bulletType = Bullet::class;
  protected $bulletDataType = '';
  protected $bulletSuggestionStateType = BulletSuggestionState::class;
  protected $bulletSuggestionStateDataType = '';
  /** @param Bullet */
  public function setBullet(Bullet $bullet)
  {
    $this->bullet = $bullet;
  }
  /** @return Bullet */
  public function getBullet()
  {
    return $this->bullet;
  }
  /** @param BulletSuggestionState */
  public function setBulletSuggestionState(BulletSuggestionState $bulletSuggestionState)
  {
    $this->bulletSuggestionState = $bulletSuggestionState;
  }
  /** @return BulletSuggestionState */
  public function getBulletSuggestionState()
  {
    return $this->bulletSuggestionState;
  }
}

class SuggestedDocumentStyle extends \Google\Model
{
  /** @var DocumentStyle */
  public $documentStyle;
  /** @var DocumentStyleSuggestionState */
  public $documentStyleSuggestionState;
  protected $documentStyleType = DocumentStyle::class;
  protected $documentStyleDataType = '';
  protected $documentStyleSuggestionStateType = DocumentStyleSuggestionState::class;
  protected $documentStyleSuggestionStateDataType = '';
  /** @param DocumentStyle */
  public function setDocumentStyle(DocumentStyle $documentStyle)
  {
    $this->documentStyle = $documentStyle;
  }
  /** @return DocumentStyle */
  public function getDocumentStyle()
  {
    return $this->documentStyle;
  }
  /** @param DocumentStyleSuggestionState */
  public function setDocumentStyleSuggestionState(DocumentStyleSuggestionState $documentStyleSuggestionState)
  {
    $this->documentStyleSuggestionState = $documentStyleSuggestionState;
  }
  /** @return DocumentStyleSuggestionState */
  public function getDocumentStyleSuggestionState()
  {
    return $this->documentStyleSuggestionState;
  }
}

class SuggestedInlineObjectProperties extends \Google\Model
{
  /** @var InlineObjectProperties */
  public $inlineObjectProperties;
  /** @var InlineObjectPropertiesSuggestionState */
  public $inlineObjectPropertiesSuggestionState;
  protected $inlineObjectPropertiesType = InlineObjectProperties::class;
  protected $inlineObjectPropertiesDataType = '';
  protected $inlineObjectPropertiesSuggestionStateType = InlineObjectPropertiesSuggestionState::class;
  protected $inlineObjectPropertiesSuggestionStateDataType = '';
  /** @param InlineObjectProperties */
  public function setInlineObjectProperties(InlineObjectProperties $inlineObjectProperties)
  {
    $this->inlineObjectProperties = $inlineObjectProperties;
  }
  /** @return InlineObjectProperties */
  public function getInlineObjectProperties()
  {
    return $this->inlineObjectProperties;
  }
  /** @param InlineObjectPropertiesSuggestionState */
  public function setInlineObjectPropertiesSuggestionState(InlineObjectPropertiesSuggestionState $inlineObjectPropertiesSuggestionState)
  {
    $this->inlineObjectPropertiesSuggestionState = $inlineObjectPropertiesSuggestionState;
  }
  /** @return InlineObjectPropertiesSuggestionState */
  public function getInlineObjectPropertiesSuggestionState()
  {
    return $this->inlineObjectPropertiesSuggestionState;
  }
}

class SuggestedListProperties extends \Google\Model
{
  /** @var ListProperties */
  public $listProperties;
  /** @var ListPropertiesSuggestionState */
  public $listPropertiesSuggestionState;
  protected $listPropertiesType = ListProperties::class;
  protected $listPropertiesDataType = '';
  protected $listPropertiesSuggestionStateType = ListPropertiesSuggestionState::class;
  protected $listPropertiesSuggestionStateDataType = '';
  /** @param ListProperties */
  public function setListProperties(ListProperties $listProperties)
  {
    $this->listProperties = $listProperties;
  }
  /** @return ListProperties */
  public function getListProperties()
  {
    return $this->listProperties;
  }
  /** @param ListPropertiesSuggestionState */
  public function setListPropertiesSuggestionState(ListPropertiesSuggestionState $listPropertiesSuggestionState)
  {
    $this->listPropertiesSuggestionState = $listPropertiesSuggestionState;
  }
  /** @return ListPropertiesSuggestionState */
  public function getListPropertiesSuggestionState()
  {
    return $this->listPropertiesSuggestionState;
  }
}

class SuggestedNamedStyles extends \Google\Model
{
  /** @var NamedStyles */
  public $namedStyles;
  /** @var NamedStylesSuggestionState */
  public $namedStylesSuggestionState;
  protected $namedStylesType = NamedStyles::class;
  protected $namedStylesDataType = '';
  protected $namedStylesSuggestionStateType = NamedStylesSuggestionState::class;
  protected $namedStylesSuggestionStateDataType = '';
  /** @param NamedStyles */
  public function setNamedStyles(NamedStyles $namedStyles)
  {
    $this->namedStyles = $namedStyles;
  }
  /** @return NamedStyles */
  public function getNamedStyles()
  {
    return $this->namedStyles;
  }
  /** @param NamedStylesSuggestionState */
  public function setNamedStylesSuggestionState(NamedStylesSuggestionState $namedStylesSuggestionState)
  {
    $this->namedStylesSuggestionState = $namedStylesSuggestionState;
  }
  /** @return NamedStylesSuggestionState */
  public function getNamedStylesSuggestionState()
  {
    return $this->namedStylesSuggestionState;
  }
}

class SuggestedParagraphStyle extends \Google\Model
{
  /** @var ParagraphStyle */
  public $paragraphStyle;
  /** @var ParagraphStyleSuggestionState */
  public $paragraphStyleSuggestionState;
  protected $paragraphStyleType = ParagraphStyle::class;
  protected $paragraphStyleDataType = '';
  protected $paragraphStyleSuggestionStateType = ParagraphStyleSuggestionState::class;
  protected $paragraphStyleSuggestionStateDataType = '';
  /** @param ParagraphStyle */
  public function setParagraphStyle(ParagraphStyle $paragraphStyle)
  {
    $this->paragraphStyle = $paragraphStyle;
  }
  /** @return ParagraphStyle */
  public function getParagraphStyle()
  {
    return $this->paragraphStyle;
  }
  /** @param ParagraphStyleSuggestionState */
  public function setParagraphStyleSuggestionState(ParagraphStyleSuggestionState $paragraphStyleSuggestionState)
  {
    $this->paragraphStyleSuggestionState = $paragraphStyleSuggestionState;
  }
  /** @return ParagraphStyleSuggestionState */
  public function getParagraphStyleSuggestionState()
  {
    return $this->paragraphStyleSuggestionState;
  }
}

class SuggestedPositionedObjectProperties extends \Google\Model
{
  /** @var PositionedObjectProperties */
  public $positionedObjectProperties;
  /** @var PositionedObjectPropertiesSuggestionState */
  public $positionedObjectPropertiesSuggestionState;
  protected $positionedObjectPropertiesType = PositionedObjectProperties::class;
  protected $positionedObjectPropertiesDataType = '';
  protected $positionedObjectPropertiesSuggestionStateType = PositionedObjectPropertiesSuggestionState::class;
  protected $positionedObjectPropertiesSuggestionStateDataType = '';
  /** @param PositionedObjectProperties */
  public function setPositionedObjectProperties(PositionedObjectProperties $positionedObjectProperties)
  {
    $this->positionedObjectProperties = $positionedObjectProperties;
  }
  /** @return PositionedObjectProperties */
  public function getPositionedObjectProperties()
  {
    return $this->positionedObjectProperties;
  }
  /** @param PositionedObjectPropertiesSuggestionState */
  public function setPositionedObjectPropertiesSuggestionState(PositionedObjectPropertiesSuggestionState $positionedObjectPropertiesSuggestionState)
  {
    $this->positionedObjectPropertiesSuggestionState = $positionedObjectPropertiesSuggestionState;
  }
  /** @return PositionedObjectPropertiesSuggestionState */
  public function getPositionedObjectPropertiesSuggestionState()
  {
    return $this->positionedObjectPropertiesSuggestionState;
  }
}

class SuggestedTableCellStyle extends \Google\Model
{
  /** @var TableCellStyle */
  public $tableCellStyle;
  /** @var TableCellStyleSuggestionState */
  public $tableCellStyleSuggestionState;
  protected $tableCellStyleType = TableCellStyle::class;
  protected $tableCellStyleDataType = '';
  protected $tableCellStyleSuggestionStateType = TableCellStyleSuggestionState::class;
  protected $tableCellStyleSuggestionStateDataType = '';
  /** @param TableCellStyle */
  public function setTableCellStyle(TableCellStyle $tableCellStyle)
  {
    $this->tableCellStyle = $tableCellStyle;
  }
  /** @return TableCellStyle */
  public function getTableCellStyle()
  {
    return $this->tableCellStyle;
  }
  /** @param TableCellStyleSuggestionState */
  public function setTableCellStyleSuggestionState(TableCellStyleSuggestionState $tableCellStyleSuggestionState)
  {
    $this->tableCellStyleSuggestionState = $tableCellStyleSuggestionState;
  }
  /** @return TableCellStyleSuggestionState */
  public function getTableCellStyleSuggestionState()
  {
    return $this->tableCellStyleSuggestionState;
  }
}

class SuggestedTableRowStyle extends \Google\Model
{
  /** @var TableRowStyle */
  public $tableRowStyle;
  /** @var TableRowStyleSuggestionState */
  public $tableRowStyleSuggestionState;
  protected $tableRowStyleType = TableRowStyle::class;
  protected $tableRowStyleDataType = '';
  protected $tableRowStyleSuggestionStateType = TableRowStyleSuggestionState::class;
  protected $tableRowStyleSuggestionStateDataType = '';
  /** @param TableRowStyle */
  public function setTableRowStyle(TableRowStyle $tableRowStyle)
  {
    $this->tableRowStyle = $tableRowStyle;
  }
  /** @return TableRowStyle */
  public function getTableRowStyle()
  {
    return $this->tableRowStyle;
  }
  /** @param TableRowStyleSuggestionState */
  public function setTableRowStyleSuggestionState(TableRowStyleSuggestionState $tableRowStyleSuggestionState)
  {
    $this->tableRowStyleSuggestionState = $tableRowStyleSuggestionState;
  }
  /** @return TableRowStyleSuggestionState */
  public function getTableRowStyleSuggestionState()
  {
    return $this->tableRowStyleSuggestionState;
  }
}

class SuggestedTextStyle extends \Google\Model
{
  /** @var TextStyle */
  public $textStyle;
  /** @var TextStyleSuggestionState */
  public $textStyleSuggestionState;
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  protected $textStyleSuggestionStateType = TextStyleSuggestionState::class;
  protected $textStyleSuggestionStateDataType = '';
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
  /** @param TextStyleSuggestionState */
  public function setTextStyleSuggestionState(TextStyleSuggestionState $textStyleSuggestionState)
  {
    $this->textStyleSuggestionState = $textStyleSuggestionState;
  }
  /** @return TextStyleSuggestionState */
  public function getTextStyleSuggestionState()
  {
    return $this->textStyleSuggestionState;
  }
}

class TabStop extends \Google\Model
{
  /** @var string */
  public $alignment;
  /** @var Dimension */
  public $offset;
  protected $offsetType = Dimension::class;
  protected $offsetDataType = '';
  /** @param string */
  public function setAlignment($alignment)
  {
    $this->alignment = $alignment;
  }
  /** @return string */
  public function getAlignment()
  {
    return $this->alignment;
  }
  /** @param Dimension */
  public function setOffset(Dimension $offset)
  {
    $this->offset = $offset;
  }
  /** @return Dimension */
  public function getOffset()
  {
    return $this->offset;
  }
}

class Table extends \Google\Collection
{
  /** @var int */
  public $columns;
  /** @var int */
  public $rows;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var TableRow[] */
  public $tableRows;
  /** @var TableStyle */
  public $tableStyle;
  protected $collection_key = 'tableRows';
  protected $tableRowsType = TableRow::class;
  protected $tableRowsDataType = 'array';
  protected $tableStyleType = TableStyle::class;
  protected $tableStyleDataType = '';
  /** @param int */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return int */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param int */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return int */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param TableRow[] */
  public function setTableRows($tableRows)
  {
    $this->tableRows = $tableRows;
  }
  /** @return TableRow[] */
  public function getTableRows()
  {
    return $this->tableRows;
  }
  /** @param TableStyle */
  public function setTableStyle(TableStyle $tableStyle)
  {
    $this->tableStyle = $tableStyle;
  }
  /** @return TableStyle */
  public function getTableStyle()
  {
    return $this->tableStyle;
  }
}

class TableCell extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  /** @var int */
  public $endIndex;
  /** @var int */
  public $startIndex;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTableCellStyle[] */
  public $suggestedTableCellStyleChanges;
  /** @var TableCellStyle */
  public $tableCellStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  protected $suggestedTableCellStyleChangesType = SuggestedTableCellStyle::class;
  protected $suggestedTableCellStyleChangesDataType = 'map';
  protected $tableCellStyleType = TableCellStyle::class;
  protected $tableCellStyleDataType = '';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTableCellStyle[] */
  public function setSuggestedTableCellStyleChanges($suggestedTableCellStyleChanges)
  {
    $this->suggestedTableCellStyleChanges = $suggestedTableCellStyleChanges;
  }
  /** @return SuggestedTableCellStyle[] */
  public function getSuggestedTableCellStyleChanges()
  {
    return $this->suggestedTableCellStyleChanges;
  }
  /** @param TableCellStyle */
  public function setTableCellStyle(TableCellStyle $tableCellStyle)
  {
    $this->tableCellStyle = $tableCellStyle;
  }
  /** @return TableCellStyle */
  public function getTableCellStyle()
  {
    return $this->tableCellStyle;
  }
}

class TableCellBorder extends \Google\Model
{
  /** @var OptionalColor */
  public $color;
  /** @var string */
  public $dashStyle;
  /** @var Dimension */
  public $width;
  protected $colorType = OptionalColor::class;
  protected $colorDataType = '';
  protected $widthType = Dimension::class;
  protected $widthDataType = '';
  /** @param OptionalColor */
  public function setColor(OptionalColor $color)
  {
    $this->color = $color;
  }
  /** @return OptionalColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setDashStyle($dashStyle)
  {
    $this->dashStyle = $dashStyle;
  }
  /** @return string */
  public function getDashStyle()
  {
    return $this->dashStyle;
  }
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
}

class TableCellLocation extends \Google\Model
{
  /** @var int */
  public $columnIndex;
  /** @var int */
  public $rowIndex;
  /** @var Location */
  public $tableStartLocation;
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';
  /** @param int */
  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  /** @return int */
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /** @param int */
  public function setRowIndex($rowIndex)
  {
    $this->rowIndex = $rowIndex;
  }
  /** @return int */
  public function getRowIndex()
  {
    return $this->rowIndex;
  }
  /** @param Location */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /** @return Location */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

class TableCellStyle extends \Google\Model
{
  /** @var OptionalColor */
  public $backgroundColor;
  /** @var TableCellBorder */
  public $borderBottom;
  /** @var TableCellBorder */
  public $borderLeft;
  /** @var TableCellBorder */
  public $borderRight;
  /** @var TableCellBorder */
  public $borderTop;
  /** @var int */
  public $columnSpan;
  /** @var string */
  public $contentAlignment;
  /** @var Dimension */
  public $paddingBottom;
  /** @var Dimension */
  public $paddingLeft;
  /** @var Dimension */
  public $paddingRight;
  /** @var Dimension */
  public $paddingTop;
  /** @var int */
  public $rowSpan;
  protected $backgroundColorType = OptionalColor::class;
  protected $backgroundColorDataType = '';
  protected $borderBottomType = TableCellBorder::class;
  protected $borderBottomDataType = '';
  protected $borderLeftType = TableCellBorder::class;
  protected $borderLeftDataType = '';
  protected $borderRightType = TableCellBorder::class;
  protected $borderRightDataType = '';
  protected $borderTopType = TableCellBorder::class;
  protected $borderTopDataType = '';
  protected $paddingBottomType = Dimension::class;
  protected $paddingBottomDataType = '';
  protected $paddingLeftType = Dimension::class;
  protected $paddingLeftDataType = '';
  protected $paddingRightType = Dimension::class;
  protected $paddingRightDataType = '';
  protected $paddingTopType = Dimension::class;
  protected $paddingTopDataType = '';
  /** @param OptionalColor */
  public function setBackgroundColor(OptionalColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return OptionalColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param TableCellBorder */
  public function setBorderBottom(TableCellBorder $borderBottom)
  {
    $this->borderBottom = $borderBottom;
  }
  /** @return TableCellBorder */
  public function getBorderBottom()
  {
    return $this->borderBottom;
  }
  /** @param TableCellBorder */
  public function setBorderLeft(TableCellBorder $borderLeft)
  {
    $this->borderLeft = $borderLeft;
  }
  /** @return TableCellBorder */
  public function getBorderLeft()
  {
    return $this->borderLeft;
  }
  /** @param TableCellBorder */
  public function setBorderRight(TableCellBorder $borderRight)
  {
    $this->borderRight = $borderRight;
  }
  /** @return TableCellBorder */
  public function getBorderRight()
  {
    return $this->borderRight;
  }
  /** @param TableCellBorder */
  public function setBorderTop(TableCellBorder $borderTop)
  {
    $this->borderTop = $borderTop;
  }
  /** @return TableCellBorder */
  public function getBorderTop()
  {
    return $this->borderTop;
  }
  /** @param int */
  public function setColumnSpan($columnSpan)
  {
    $this->columnSpan = $columnSpan;
  }
  /** @return int */
  public function getColumnSpan()
  {
    return $this->columnSpan;
  }
  /** @param string */
  public function setContentAlignment($contentAlignment)
  {
    $this->contentAlignment = $contentAlignment;
  }
  /** @return string */
  public function getContentAlignment()
  {
    return $this->contentAlignment;
  }
  /** @param Dimension */
  public function setPaddingBottom(Dimension $paddingBottom)
  {
    $this->paddingBottom = $paddingBottom;
  }
  /** @return Dimension */
  public function getPaddingBottom()
  {
    return $this->paddingBottom;
  }
  /** @param Dimension */
  public function setPaddingLeft(Dimension $paddingLeft)
  {
    $this->paddingLeft = $paddingLeft;
  }
  /** @return Dimension */
  public function getPaddingLeft()
  {
    return $this->paddingLeft;
  }
  /** @param Dimension */
  public function setPaddingRight(Dimension $paddingRight)
  {
    $this->paddingRight = $paddingRight;
  }
  /** @return Dimension */
  public function getPaddingRight()
  {
    return $this->paddingRight;
  }
  /** @param Dimension */
  public function setPaddingTop(Dimension $paddingTop)
  {
    $this->paddingTop = $paddingTop;
  }
  /** @return Dimension */
  public function getPaddingTop()
  {
    return $this->paddingTop;
  }
  /** @param int */
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  /** @return int */
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
}

class TableCellStyleSuggestionState extends \Google\Model
{
  /** @var bool */
  public $backgroundColorSuggested;
  /** @var bool */
  public $borderBottomSuggested;
  /** @var bool */
  public $borderLeftSuggested;
  /** @var bool */
  public $borderRightSuggested;
  /** @var bool */
  public $borderTopSuggested;
  /** @var bool */
  public $columnSpanSuggested;
  /** @var bool */
  public $contentAlignmentSuggested;
  /** @var bool */
  public $paddingBottomSuggested;
  /** @var bool */
  public $paddingLeftSuggested;
  /** @var bool */
  public $paddingRightSuggested;
  /** @var bool */
  public $paddingTopSuggested;
  /** @var bool */
  public $rowSpanSuggested;

  /** @param bool */
  public function setBackgroundColorSuggested($backgroundColorSuggested)
  {
    $this->backgroundColorSuggested = $backgroundColorSuggested;
  }
  /** @return bool */
  public function getBackgroundColorSuggested()
  {
    return $this->backgroundColorSuggested;
  }
  /** @param bool */
  public function setBorderBottomSuggested($borderBottomSuggested)
  {
    $this->borderBottomSuggested = $borderBottomSuggested;
  }
  /** @return bool */
  public function getBorderBottomSuggested()
  {
    return $this->borderBottomSuggested;
  }
  /** @param bool */
  public function setBorderLeftSuggested($borderLeftSuggested)
  {
    $this->borderLeftSuggested = $borderLeftSuggested;
  }
  /** @return bool */
  public function getBorderLeftSuggested()
  {
    return $this->borderLeftSuggested;
  }
  /** @param bool */
  public function setBorderRightSuggested($borderRightSuggested)
  {
    $this->borderRightSuggested = $borderRightSuggested;
  }
  /** @return bool */
  public function getBorderRightSuggested()
  {
    return $this->borderRightSuggested;
  }
  /** @param bool */
  public function setBorderTopSuggested($borderTopSuggested)
  {
    $this->borderTopSuggested = $borderTopSuggested;
  }
  /** @return bool */
  public function getBorderTopSuggested()
  {
    return $this->borderTopSuggested;
  }
  /** @param bool */
  public function setColumnSpanSuggested($columnSpanSuggested)
  {
    $this->columnSpanSuggested = $columnSpanSuggested;
  }
  /** @return bool */
  public function getColumnSpanSuggested()
  {
    return $this->columnSpanSuggested;
  }
  /** @param bool */
  public function setContentAlignmentSuggested($contentAlignmentSuggested)
  {
    $this->contentAlignmentSuggested = $contentAlignmentSuggested;
  }
  /** @return bool */
  public function getContentAlignmentSuggested()
  {
    return $this->contentAlignmentSuggested;
  }
  /** @param bool */
  public function setPaddingBottomSuggested($paddingBottomSuggested)
  {
    $this->paddingBottomSuggested = $paddingBottomSuggested;
  }
  /** @return bool */
  public function getPaddingBottomSuggested()
  {
    return $this->paddingBottomSuggested;
  }
  /** @param bool */
  public function setPaddingLeftSuggested($paddingLeftSuggested)
  {
    $this->paddingLeftSuggested = $paddingLeftSuggested;
  }
  /** @return bool */
  public function getPaddingLeftSuggested()
  {
    return $this->paddingLeftSuggested;
  }
  /** @param bool */
  public function setPaddingRightSuggested($paddingRightSuggested)
  {
    $this->paddingRightSuggested = $paddingRightSuggested;
  }
  /** @return bool */
  public function getPaddingRightSuggested()
  {
    return $this->paddingRightSuggested;
  }
  /** @param bool */
  public function setPaddingTopSuggested($paddingTopSuggested)
  {
    $this->paddingTopSuggested = $paddingTopSuggested;
  }
  /** @return bool */
  public function getPaddingTopSuggested()
  {
    return $this->paddingTopSuggested;
  }
  /** @param bool */
  public function setRowSpanSuggested($rowSpanSuggested)
  {
    $this->rowSpanSuggested = $rowSpanSuggested;
  }
  /** @return bool */
  public function getRowSpanSuggested()
  {
    return $this->rowSpanSuggested;
  }
}

class TableColumnProperties extends \Google\Model
{
  /** @var Dimension */
  public $width;
  /** @var string */
  public $widthType;
  protected $widthDataType = '';
  /** @param Dimension */
  public function setWidth(Dimension $width)
  {
    $this->width = $width;
  }
  /** @return Dimension */
  public function getWidth()
  {
    return $this->width;
  }
  /** @param string */
  public function setWidthType($widthType)
  {
    $this->widthType = $widthType;
  }
  /** @return string */
  public function getWidthType()
  {
    return $this->widthType;
  }
}

class TableOfContents extends \Google\Collection
{
  /** @var StructuralElement[] */
  public $content;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  protected $collection_key = 'suggestedInsertionIds';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /** @param StructuralElement[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return StructuralElement[] */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
}

class TableRange extends \Google\Model
{
  /** @var int */
  public $columnSpan;
  /** @var int */
  public $rowSpan;
  /** @var TableCellLocation */
  public $tableCellLocation;
  protected $tableCellLocationType = TableCellLocation::class;
  protected $tableCellLocationDataType = '';
  /** @param int */
  public function setColumnSpan($columnSpan)
  {
    $this->columnSpan = $columnSpan;
  }
  /** @return int */
  public function getColumnSpan()
  {
    return $this->columnSpan;
  }
  /** @param int */
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  /** @return int */
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
  /** @param TableCellLocation */
  public function setTableCellLocation(TableCellLocation $tableCellLocation)
  {
    $this->tableCellLocation = $tableCellLocation;
  }
  /** @return TableCellLocation */
  public function getTableCellLocation()
  {
    return $this->tableCellLocation;
  }
}

class TableRow extends \Google\Collection
{
  /** @var int */
  public $endIndex;
  /** @var int */
  public $startIndex;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTableRowStyle[] */
  public $suggestedTableRowStyleChanges;
  /** @var TableCell[] */
  public $tableCells;
  /** @var TableRowStyle */
  public $tableRowStyle;
  protected $collection_key = 'tableCells';
  protected $suggestedTableRowStyleChangesType = SuggestedTableRowStyle::class;
  protected $suggestedTableRowStyleChangesDataType = 'map';
  protected $tableCellsType = TableCell::class;
  protected $tableCellsDataType = 'array';
  protected $tableRowStyleType = TableRowStyle::class;
  protected $tableRowStyleDataType = '';
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTableRowStyle[] */
  public function setSuggestedTableRowStyleChanges($suggestedTableRowStyleChanges)
  {
    $this->suggestedTableRowStyleChanges = $suggestedTableRowStyleChanges;
  }
  /** @return SuggestedTableRowStyle[] */
  public function getSuggestedTableRowStyleChanges()
  {
    return $this->suggestedTableRowStyleChanges;
  }
  /** @param TableCell[] */
  public function setTableCells($tableCells)
  {
    $this->tableCells = $tableCells;
  }
  /** @return TableCell[] */
  public function getTableCells()
  {
    return $this->tableCells;
  }
  /** @param TableRowStyle */
  public function setTableRowStyle(TableRowStyle $tableRowStyle)
  {
    $this->tableRowStyle = $tableRowStyle;
  }
  /** @return TableRowStyle */
  public function getTableRowStyle()
  {
    return $this->tableRowStyle;
  }
}

class TableRowStyle extends \Google\Model
{
  /** @var Dimension */
  public $minRowHeight;
  /** @var bool */
  public $preventOverflow;
  /** @var bool */
  public $tableHeader;
  protected $minRowHeightType = Dimension::class;
  protected $minRowHeightDataType = '';
  /** @param Dimension */
  public function setMinRowHeight(Dimension $minRowHeight)
  {
    $this->minRowHeight = $minRowHeight;
  }
  /** @return Dimension */
  public function getMinRowHeight()
  {
    return $this->minRowHeight;
  }
  /** @param bool */
  public function setPreventOverflow($preventOverflow)
  {
    $this->preventOverflow = $preventOverflow;
  }
  /** @return bool */
  public function getPreventOverflow()
  {
    return $this->preventOverflow;
  }
  /** @param bool */
  public function setTableHeader($tableHeader)
  {
    $this->tableHeader = $tableHeader;
  }
  /** @return bool */
  public function getTableHeader()
  {
    return $this->tableHeader;
  }
}

class TableRowStyleSuggestionState extends \Google\Model
{
  /** @var bool */
  public $minRowHeightSuggested;

  /** @param bool */
  public function setMinRowHeightSuggested($minRowHeightSuggested)
  {
    $this->minRowHeightSuggested = $minRowHeightSuggested;
  }
  /** @return bool */
  public function getMinRowHeightSuggested()
  {
    return $this->minRowHeightSuggested;
  }
}

class TableStyle extends \Google\Collection
{
  /** @var TableColumnProperties[] */
  public $tableColumnProperties;
  protected $collection_key = 'tableColumnProperties';
  protected $tableColumnPropertiesType = TableColumnProperties::class;
  protected $tableColumnPropertiesDataType = 'array';
  /** @param TableColumnProperties[] */
  public function setTableColumnProperties($tableColumnProperties)
  {
    $this->tableColumnProperties = $tableColumnProperties;
  }
  /** @return TableColumnProperties[] */
  public function getTableColumnProperties()
  {
    return $this->tableColumnProperties;
  }
}

class TextRun extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var string[] */
  public $suggestedDeletionIds;
  /** @var string[] */
  public $suggestedInsertionIds;
  /** @var SuggestedTextStyle[] */
  public $suggestedTextStyleChanges;
  /** @var TextStyle */
  public $textStyle;
  protected $collection_key = 'suggestedInsertionIds';
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
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
  /** @param string[] */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /** @return string[] */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /** @param string[] */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /** @return string[] */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /** @param SuggestedTextStyle[] */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /** @return SuggestedTextStyle[] */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class TextStyle extends \Google\Model
{
  /** @var OptionalColor */
  public $backgroundColor;
  /** @var string */
  public $baselineOffset;
  /** @var bool */
  public $bold;
  /** @var Dimension */
  public $fontSize;
  /** @var OptionalColor */
  public $foregroundColor;
  /** @var bool */
  public $italic;
  /** @var Link */
  public $link;
  /** @var bool */
  public $smallCaps;
  /** @var bool */
  public $strikethrough;
  /** @var bool */
  public $underline;
  /** @var WeightedFontFamily */
  public $weightedFontFamily;
  protected $backgroundColorType = OptionalColor::class;
  protected $backgroundColorDataType = '';
  protected $fontSizeType = Dimension::class;
  protected $fontSizeDataType = '';
  protected $foregroundColorType = OptionalColor::class;
  protected $foregroundColorDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $weightedFontFamilyType = WeightedFontFamily::class;
  protected $weightedFontFamilyDataType = '';
  /** @param OptionalColor */
  public function setBackgroundColor(OptionalColor $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return OptionalColor */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param string */
  public function setBaselineOffset($baselineOffset)
  {
    $this->baselineOffset = $baselineOffset;
  }
  /** @return string */
  public function getBaselineOffset()
  {
    return $this->baselineOffset;
  }
  /** @param bool */
  public function setBold($bold)
  {
    $this->bold = $bold;
  }
  /** @return bool */
  public function getBold()
  {
    return $this->bold;
  }
  /** @param Dimension */
  public function setFontSize(Dimension $fontSize)
  {
    $this->fontSize = $fontSize;
  }
  /** @return Dimension */
  public function getFontSize()
  {
    return $this->fontSize;
  }
  /** @param OptionalColor */
  public function setForegroundColor(OptionalColor $foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }
  /** @return OptionalColor */
  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }
  /** @param bool */
  public function setItalic($italic)
  {
    $this->italic = $italic;
  }
  /** @return bool */
  public function getItalic()
  {
    return $this->italic;
  }
  /** @param Link */
  public function setLink(Link $link)
  {
    $this->link = $link;
  }
  /** @return Link */
  public function getLink()
  {
    return $this->link;
  }
  /** @param bool */
  public function setSmallCaps($smallCaps)
  {
    $this->smallCaps = $smallCaps;
  }
  /** @return bool */
  public function getSmallCaps()
  {
    return $this->smallCaps;
  }
  /** @param bool */
  public function setStrikethrough($strikethrough)
  {
    $this->strikethrough = $strikethrough;
  }
  /** @return bool */
  public function getStrikethrough()
  {
    return $this->strikethrough;
  }
  /** @param bool */
  public function setUnderline($underline)
  {
    $this->underline = $underline;
  }
  /** @return bool */
  public function getUnderline()
  {
    return $this->underline;
  }
  /** @param WeightedFontFamily */
  public function setWeightedFontFamily(WeightedFontFamily $weightedFontFamily)
  {
    $this->weightedFontFamily = $weightedFontFamily;
  }
  /** @return WeightedFontFamily */
  public function getWeightedFontFamily()
  {
    return $this->weightedFontFamily;
  }
}

class TextStyleSuggestionState extends \Google\Model
{
  /** @var bool */
  public $backgroundColorSuggested;
  /** @var bool */
  public $baselineOffsetSuggested;
  /** @var bool */
  public $boldSuggested;
  /** @var bool */
  public $fontSizeSuggested;
  /** @var bool */
  public $foregroundColorSuggested;
  /** @var bool */
  public $italicSuggested;
  /** @var bool */
  public $linkSuggested;
  /** @var bool */
  public $smallCapsSuggested;
  /** @var bool */
  public $strikethroughSuggested;
  /** @var bool */
  public $underlineSuggested;
  /** @var bool */
  public $weightedFontFamilySuggested;

  /** @param bool */
  public function setBackgroundColorSuggested($backgroundColorSuggested)
  {
    $this->backgroundColorSuggested = $backgroundColorSuggested;
  }
  /** @return bool */
  public function getBackgroundColorSuggested()
  {
    return $this->backgroundColorSuggested;
  }
  /** @param bool */
  public function setBaselineOffsetSuggested($baselineOffsetSuggested)
  {
    $this->baselineOffsetSuggested = $baselineOffsetSuggested;
  }
  /** @return bool */
  public function getBaselineOffsetSuggested()
  {
    return $this->baselineOffsetSuggested;
  }
  /** @param bool */
  public function setBoldSuggested($boldSuggested)
  {
    $this->boldSuggested = $boldSuggested;
  }
  /** @return bool */
  public function getBoldSuggested()
  {
    return $this->boldSuggested;
  }
  /** @param bool */
  public function setFontSizeSuggested($fontSizeSuggested)
  {
    $this->fontSizeSuggested = $fontSizeSuggested;
  }
  /** @return bool */
  public function getFontSizeSuggested()
  {
    return $this->fontSizeSuggested;
  }
  /** @param bool */
  public function setForegroundColorSuggested($foregroundColorSuggested)
  {
    $this->foregroundColorSuggested = $foregroundColorSuggested;
  }
  /** @return bool */
  public function getForegroundColorSuggested()
  {
    return $this->foregroundColorSuggested;
  }
  /** @param bool */
  public function setItalicSuggested($italicSuggested)
  {
    $this->italicSuggested = $italicSuggested;
  }
  /** @return bool */
  public function getItalicSuggested()
  {
    return $this->italicSuggested;
  }
  /** @param bool */
  public function setLinkSuggested($linkSuggested)
  {
    $this->linkSuggested = $linkSuggested;
  }
  /** @return bool */
  public function getLinkSuggested()
  {
    return $this->linkSuggested;
  }
  /** @param bool */
  public function setSmallCapsSuggested($smallCapsSuggested)
  {
    $this->smallCapsSuggested = $smallCapsSuggested;
  }
  /** @return bool */
  public function getSmallCapsSuggested()
  {
    return $this->smallCapsSuggested;
  }
  /** @param bool */
  public function setStrikethroughSuggested($strikethroughSuggested)
  {
    $this->strikethroughSuggested = $strikethroughSuggested;
  }
  /** @return bool */
  public function getStrikethroughSuggested()
  {
    return $this->strikethroughSuggested;
  }
  /** @param bool */
  public function setUnderlineSuggested($underlineSuggested)
  {
    $this->underlineSuggested = $underlineSuggested;
  }
  /** @return bool */
  public function getUnderlineSuggested()
  {
    return $this->underlineSuggested;
  }
  /** @param bool */
  public function setWeightedFontFamilySuggested($weightedFontFamilySuggested)
  {
    $this->weightedFontFamilySuggested = $weightedFontFamilySuggested;
  }
  /** @return bool */
  public function getWeightedFontFamilySuggested()
  {
    return $this->weightedFontFamilySuggested;
  }
}

class UnmergeTableCellsRequest extends \Google\Model
{
  /** @var TableRange */
  public $tableRange;
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
  /** @param TableRange */
  public function setTableRange(TableRange $tableRange)
  {
    $this->tableRange = $tableRange;
  }
  /** @return TableRange */
  public function getTableRange()
  {
    return $this->tableRange;
  }
}

class UpdateDocumentStyleRequest extends \Google\Model
{
  /** @var DocumentStyle */
  public $documentStyle;
  /** @var string */
  public $fields;
  protected $documentStyleType = DocumentStyle::class;
  protected $documentStyleDataType = '';
  /** @param DocumentStyle */
  public function setDocumentStyle(DocumentStyle $documentStyle)
  {
    $this->documentStyle = $documentStyle;
  }
  /** @return DocumentStyle */
  public function getDocumentStyle()
  {
    return $this->documentStyle;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateParagraphStyleRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var ParagraphStyle */
  public $paragraphStyle;
  /** @var Range */
  public $range;
  protected $paragraphStyleType = ParagraphStyle::class;
  protected $paragraphStyleDataType = '';
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param ParagraphStyle */
  public function setParagraphStyle(ParagraphStyle $paragraphStyle)
  {
    $this->paragraphStyle = $paragraphStyle;
  }
  /** @return ParagraphStyle */
  public function getParagraphStyle()
  {
    return $this->paragraphStyle;
  }
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
}

class UpdateSectionStyleRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var Range */
  public $range;
  /** @var SectionStyle */
  public $sectionStyle;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  protected $sectionStyleType = SectionStyle::class;
  protected $sectionStyleDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
  /** @param SectionStyle */
  public function setSectionStyle(SectionStyle $sectionStyle)
  {
    $this->sectionStyle = $sectionStyle;
  }
  /** @return SectionStyle */
  public function getSectionStyle()
  {
    return $this->sectionStyle;
  }
}

class UpdateTableCellStyleRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var TableCellStyle */
  public $tableCellStyle;
  /** @var TableRange */
  public $tableRange;
  /** @var Location */
  public $tableStartLocation;
  protected $tableCellStyleType = TableCellStyle::class;
  protected $tableCellStyleDataType = '';
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param TableCellStyle */
  public function setTableCellStyle(TableCellStyle $tableCellStyle)
  {
    $this->tableCellStyle = $tableCellStyle;
  }
  /** @return TableCellStyle */
  public function getTableCellStyle()
  {
    return $this->tableCellStyle;
  }
  /** @param TableRange */
  public function setTableRange(TableRange $tableRange)
  {
    $this->tableRange = $tableRange;
  }
  /** @return TableRange */
  public function getTableRange()
  {
    return $this->tableRange;
  }
  /** @param Location */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /** @return Location */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

class UpdateTableColumnPropertiesRequest extends \Google\Collection
{
  /** @var int[] */
  public $columnIndices;
  /** @var string */
  public $fields;
  /** @var TableColumnProperties */
  public $tableColumnProperties;
  /** @var Location */
  public $tableStartLocation;
  protected $collection_key = 'columnIndices';
  protected $tableColumnPropertiesType = TableColumnProperties::class;
  protected $tableColumnPropertiesDataType = '';
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';
  /** @param int[] */
  public function setColumnIndices($columnIndices)
  {
    $this->columnIndices = $columnIndices;
  }
  /** @return int[] */
  public function getColumnIndices()
  {
    return $this->columnIndices;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param TableColumnProperties */
  public function setTableColumnProperties(TableColumnProperties $tableColumnProperties)
  {
    $this->tableColumnProperties = $tableColumnProperties;
  }
  /** @return TableColumnProperties */
  public function getTableColumnProperties()
  {
    return $this->tableColumnProperties;
  }
  /** @param Location */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /** @return Location */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

class UpdateTableRowStyleRequest extends \Google\Collection
{
  /** @var string */
  public $fields;
  /** @var int[] */
  public $rowIndices;
  /** @var TableRowStyle */
  public $tableRowStyle;
  /** @var Location */
  public $tableStartLocation;
  protected $collection_key = 'rowIndices';
  protected $tableRowStyleType = TableRowStyle::class;
  protected $tableRowStyleDataType = '';
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param int[] */
  public function setRowIndices($rowIndices)
  {
    $this->rowIndices = $rowIndices;
  }
  /** @return int[] */
  public function getRowIndices()
  {
    return $this->rowIndices;
  }
  /** @param TableRowStyle */
  public function setTableRowStyle(TableRowStyle $tableRowStyle)
  {
    $this->tableRowStyle = $tableRowStyle;
  }
  /** @return TableRowStyle */
  public function getTableRowStyle()
  {
    return $this->tableRowStyle;
  }
  /** @param Location */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /** @return Location */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

class UpdateTextStyleRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var Range */
  public $range;
  /** @var TextStyle */
  public $textStyle;
  protected $rangeType = Range::class;
  protected $rangeDataType = '';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param Range */
  public function setRange(Range $range)
  {
    $this->range = $range;
  }
  /** @return Range */
  public function getRange()
  {
    return $this->range;
  }
  /** @param TextStyle */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /** @return TextStyle */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

class WeightedFontFamily extends \Google\Model
{
  /** @var string */
  public $fontFamily;
  /** @var int */
  public $weight;

  /** @param string */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /** @return string */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /** @param int */
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  /** @return int */
  public function getWeight()
  {
    return $this->weight;
  }
}

class WriteControl extends \Google\Model
{
  /** @var string */
  public $requiredRevisionId;
  /** @var string */
  public $targetRevisionId;

  /** @param string */
  public function setRequiredRevisionId($requiredRevisionId)
  {
    $this->requiredRevisionId = $requiredRevisionId;
  }
  /** @return string */
  public function getRequiredRevisionId()
  {
    return $this->requiredRevisionId;
  }
  /** @param string */
  public function setTargetRevisionId($targetRevisionId)
  {
    $this->targetRevisionId = $targetRevisionId;
  }
  /** @return string */
  public function getTargetRevisionId()
  {
    return $this->targetRevisionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoText::class, 'Google_Service_Docs_AutoText');
class_alias(Background::class, 'Google_Service_Docs_Background');
class_alias(BackgroundSuggestionState::class, 'Google_Service_Docs_BackgroundSuggestionState');
class_alias(BatchUpdateDocumentRequest::class, 'Google_Service_Docs_BatchUpdateDocumentRequest');
class_alias(BatchUpdateDocumentResponse::class, 'Google_Service_Docs_BatchUpdateDocumentResponse');
class_alias(Body::class, 'Google_Service_Docs_Body');
class_alias(Bullet::class, 'Google_Service_Docs_Bullet');
class_alias(BulletSuggestionState::class, 'Google_Service_Docs_BulletSuggestionState');
class_alias(Color::class, 'Google_Service_Docs_Color');
class_alias(ColumnBreak::class, 'Google_Service_Docs_ColumnBreak');
class_alias(CreateFooterRequest::class, 'Google_Service_Docs_CreateFooterRequest');
class_alias(CreateFooterResponse::class, 'Google_Service_Docs_CreateFooterResponse');
class_alias(CreateFootnoteRequest::class, 'Google_Service_Docs_CreateFootnoteRequest');
class_alias(CreateFootnoteResponse::class, 'Google_Service_Docs_CreateFootnoteResponse');
class_alias(CreateHeaderRequest::class, 'Google_Service_Docs_CreateHeaderRequest');
class_alias(CreateHeaderResponse::class, 'Google_Service_Docs_CreateHeaderResponse');
class_alias(CreateNamedRangeRequest::class, 'Google_Service_Docs_CreateNamedRangeRequest');
class_alias(CreateNamedRangeResponse::class, 'Google_Service_Docs_CreateNamedRangeResponse');
class_alias(CreateParagraphBulletsRequest::class, 'Google_Service_Docs_CreateParagraphBulletsRequest');
class_alias(CropProperties::class, 'Google_Service_Docs_CropProperties');
class_alias(CropPropertiesSuggestionState::class, 'Google_Service_Docs_CropPropertiesSuggestionState');
class_alias(DeleteContentRangeRequest::class, 'Google_Service_Docs_DeleteContentRangeRequest');
class_alias(DeleteFooterRequest::class, 'Google_Service_Docs_DeleteFooterRequest');
class_alias(DeleteHeaderRequest::class, 'Google_Service_Docs_DeleteHeaderRequest');
class_alias(DeleteNamedRangeRequest::class, 'Google_Service_Docs_DeleteNamedRangeRequest');
class_alias(DeleteParagraphBulletsRequest::class, 'Google_Service_Docs_DeleteParagraphBulletsRequest');
class_alias(DeletePositionedObjectRequest::class, 'Google_Service_Docs_DeletePositionedObjectRequest');
class_alias(DeleteTableColumnRequest::class, 'Google_Service_Docs_DeleteTableColumnRequest');
class_alias(DeleteTableRowRequest::class, 'Google_Service_Docs_DeleteTableRowRequest');
class_alias(Dimension::class, 'Google_Service_Docs_Dimension');
class_alias(DocsList::class, 'Google_Service_Docs_DocsList');
class_alias(Document::class, 'Google_Service_Docs_Document');
class_alias(DocumentStyle::class, 'Google_Service_Docs_DocumentStyle');
class_alias(DocumentStyleSuggestionState::class, 'Google_Service_Docs_DocumentStyleSuggestionState');
class_alias(EmbeddedDrawingProperties::class, 'Google_Service_Docs_EmbeddedDrawingProperties');
class_alias(EmbeddedDrawingPropertiesSuggestionState::class, 'Google_Service_Docs_EmbeddedDrawingPropertiesSuggestionState');
class_alias(EmbeddedObject::class, 'Google_Service_Docs_EmbeddedObject');
class_alias(EmbeddedObjectBorder::class, 'Google_Service_Docs_EmbeddedObjectBorder');
class_alias(EmbeddedObjectBorderSuggestionState::class, 'Google_Service_Docs_EmbeddedObjectBorderSuggestionState');
class_alias(EmbeddedObjectSuggestionState::class, 'Google_Service_Docs_EmbeddedObjectSuggestionState');
class_alias(EndOfSegmentLocation::class, 'Google_Service_Docs_EndOfSegmentLocation');
class_alias(Equation::class, 'Google_Service_Docs_Equation');
class_alias(Footer::class, 'Google_Service_Docs_Footer');
class_alias(Footnote::class, 'Google_Service_Docs_Footnote');
class_alias(FootnoteReference::class, 'Google_Service_Docs_FootnoteReference');
class_alias(Header::class, 'Google_Service_Docs_Header');
class_alias(HorizontalRule::class, 'Google_Service_Docs_HorizontalRule');
class_alias(ImageProperties::class, 'Google_Service_Docs_ImageProperties');
class_alias(ImagePropertiesSuggestionState::class, 'Google_Service_Docs_ImagePropertiesSuggestionState');
class_alias(InlineObject::class, 'Google_Service_Docs_InlineObject');
class_alias(InlineObjectElement::class, 'Google_Service_Docs_InlineObjectElement');
class_alias(InlineObjectProperties::class, 'Google_Service_Docs_InlineObjectProperties');
class_alias(InlineObjectPropertiesSuggestionState::class, 'Google_Service_Docs_InlineObjectPropertiesSuggestionState');
class_alias(InsertInlineImageRequest::class, 'Google_Service_Docs_InsertInlineImageRequest');
class_alias(InsertInlineImageResponse::class, 'Google_Service_Docs_InsertInlineImageResponse');
class_alias(InsertInlineSheetsChartResponse::class, 'Google_Service_Docs_InsertInlineSheetsChartResponse');
class_alias(InsertPageBreakRequest::class, 'Google_Service_Docs_InsertPageBreakRequest');
class_alias(InsertSectionBreakRequest::class, 'Google_Service_Docs_InsertSectionBreakRequest');
class_alias(InsertTableColumnRequest::class, 'Google_Service_Docs_InsertTableColumnRequest');
class_alias(InsertTableRequest::class, 'Google_Service_Docs_InsertTableRequest');
class_alias(InsertTableRowRequest::class, 'Google_Service_Docs_InsertTableRowRequest');
class_alias(InsertTextRequest::class, 'Google_Service_Docs_InsertTextRequest');
class_alias(Link::class, 'Google_Service_Docs_Link');
class_alias(LinkedContentReference::class, 'Google_Service_Docs_LinkedContentReference');
class_alias(LinkedContentReferenceSuggestionState::class, 'Google_Service_Docs_LinkedContentReferenceSuggestionState');
class_alias(ListProperties::class, 'Google_Service_Docs_ListProperties');
class_alias(ListPropertiesSuggestionState::class, 'Google_Service_Docs_ListPropertiesSuggestionState');
class_alias(Location::class, 'Google_Service_Docs_Location');
class_alias(MergeTableCellsRequest::class, 'Google_Service_Docs_MergeTableCellsRequest');
class_alias(NamedRange::class, 'Google_Service_Docs_NamedRange');
class_alias(NamedRanges::class, 'Google_Service_Docs_NamedRanges');
class_alias(NamedStyle::class, 'Google_Service_Docs_NamedStyle');
class_alias(NamedStyleSuggestionState::class, 'Google_Service_Docs_NamedStyleSuggestionState');
class_alias(NamedStyles::class, 'Google_Service_Docs_NamedStyles');
class_alias(NamedStylesSuggestionState::class, 'Google_Service_Docs_NamedStylesSuggestionState');
class_alias(NestingLevel::class, 'Google_Service_Docs_NestingLevel');
class_alias(NestingLevelSuggestionState::class, 'Google_Service_Docs_NestingLevelSuggestionState');
class_alias(ObjectReferences::class, 'Google_Service_Docs_ObjectReferences');
class_alias(OptionalColor::class, 'Google_Service_Docs_OptionalColor');
class_alias(PageBreak::class, 'Google_Service_Docs_PageBreak');
class_alias(Paragraph::class, 'Google_Service_Docs_Paragraph');
class_alias(ParagraphBorder::class, 'Google_Service_Docs_ParagraphBorder');
class_alias(ParagraphElement::class, 'Google_Service_Docs_ParagraphElement');
class_alias(ParagraphStyle::class, 'Google_Service_Docs_ParagraphStyle');
class_alias(ParagraphStyleSuggestionState::class, 'Google_Service_Docs_ParagraphStyleSuggestionState');
class_alias(Person::class, 'Google_Service_Docs_Person');
class_alias(PersonProperties::class, 'Google_Service_Docs_PersonProperties');
class_alias(PinTableHeaderRowsRequest::class, 'Google_Service_Docs_PinTableHeaderRowsRequest');
class_alias(PositionedObject::class, 'Google_Service_Docs_PositionedObject');
class_alias(PositionedObjectPositioning::class, 'Google_Service_Docs_PositionedObjectPositioning');
class_alias(PositionedObjectPositioningSuggestionState::class, 'Google_Service_Docs_PositionedObjectPositioningSuggestionState');
class_alias(PositionedObjectProperties::class, 'Google_Service_Docs_PositionedObjectProperties');
class_alias(PositionedObjectPropertiesSuggestionState::class, 'Google_Service_Docs_PositionedObjectPropertiesSuggestionState');
class_alias(Range::class, 'Google_Service_Docs_Range');
class_alias(ReplaceAllTextRequest::class, 'Google_Service_Docs_ReplaceAllTextRequest');
class_alias(ReplaceAllTextResponse::class, 'Google_Service_Docs_ReplaceAllTextResponse');
class_alias(ReplaceImageRequest::class, 'Google_Service_Docs_ReplaceImageRequest');
class_alias(ReplaceNamedRangeContentRequest::class, 'Google_Service_Docs_ReplaceNamedRangeContentRequest');
class_alias(Request::class, 'Google_Service_Docs_Request');
class_alias(Response::class, 'Google_Service_Docs_Response');
class_alias(RgbColor::class, 'Google_Service_Docs_RgbColor');
class_alias(RichLink::class, 'Google_Service_Docs_RichLink');
class_alias(RichLinkProperties::class, 'Google_Service_Docs_RichLinkProperties');
class_alias(SectionBreak::class, 'Google_Service_Docs_SectionBreak');
class_alias(SectionColumnProperties::class, 'Google_Service_Docs_SectionColumnProperties');
class_alias(SectionStyle::class, 'Google_Service_Docs_SectionStyle');
class_alias(Shading::class, 'Google_Service_Docs_Shading');
class_alias(ShadingSuggestionState::class, 'Google_Service_Docs_ShadingSuggestionState');
class_alias(SheetsChartReference::class, 'Google_Service_Docs_SheetsChartReference');
class_alias(SheetsChartReferenceSuggestionState::class, 'Google_Service_Docs_SheetsChartReferenceSuggestionState');
class_alias(Size::class, 'Google_Service_Docs_Size');
class_alias(SizeSuggestionState::class, 'Google_Service_Docs_SizeSuggestionState');
class_alias(StructuralElement::class, 'Google_Service_Docs_StructuralElement');
class_alias(SubstringMatchCriteria::class, 'Google_Service_Docs_SubstringMatchCriteria');
class_alias(SuggestedBullet::class, 'Google_Service_Docs_SuggestedBullet');
class_alias(SuggestedDocumentStyle::class, 'Google_Service_Docs_SuggestedDocumentStyle');
class_alias(SuggestedInlineObjectProperties::class, 'Google_Service_Docs_SuggestedInlineObjectProperties');
class_alias(SuggestedListProperties::class, 'Google_Service_Docs_SuggestedListProperties');
class_alias(SuggestedNamedStyles::class, 'Google_Service_Docs_SuggestedNamedStyles');
class_alias(SuggestedParagraphStyle::class, 'Google_Service_Docs_SuggestedParagraphStyle');
class_alias(SuggestedPositionedObjectProperties::class, 'Google_Service_Docs_SuggestedPositionedObjectProperties');
class_alias(SuggestedTableCellStyle::class, 'Google_Service_Docs_SuggestedTableCellStyle');
class_alias(SuggestedTableRowStyle::class, 'Google_Service_Docs_SuggestedTableRowStyle');
class_alias(SuggestedTextStyle::class, 'Google_Service_Docs_SuggestedTextStyle');
class_alias(TabStop::class, 'Google_Service_Docs_TabStop');
class_alias(Table::class, 'Google_Service_Docs_Table');
class_alias(TableCell::class, 'Google_Service_Docs_TableCell');
class_alias(TableCellBorder::class, 'Google_Service_Docs_TableCellBorder');
class_alias(TableCellLocation::class, 'Google_Service_Docs_TableCellLocation');
class_alias(TableCellStyle::class, 'Google_Service_Docs_TableCellStyle');
class_alias(TableCellStyleSuggestionState::class, 'Google_Service_Docs_TableCellStyleSuggestionState');
class_alias(TableColumnProperties::class, 'Google_Service_Docs_TableColumnProperties');
class_alias(TableOfContents::class, 'Google_Service_Docs_TableOfContents');
class_alias(TableRange::class, 'Google_Service_Docs_TableRange');
class_alias(TableRow::class, 'Google_Service_Docs_TableRow');
class_alias(TableRowStyle::class, 'Google_Service_Docs_TableRowStyle');
class_alias(TableRowStyleSuggestionState::class, 'Google_Service_Docs_TableRowStyleSuggestionState');
class_alias(TableStyle::class, 'Google_Service_Docs_TableStyle');
class_alias(TextRun::class, 'Google_Service_Docs_TextRun');
class_alias(TextStyle::class, 'Google_Service_Docs_TextStyle');
class_alias(TextStyleSuggestionState::class, 'Google_Service_Docs_TextStyleSuggestionState');
class_alias(UnmergeTableCellsRequest::class, 'Google_Service_Docs_UnmergeTableCellsRequest');
class_alias(UpdateDocumentStyleRequest::class, 'Google_Service_Docs_UpdateDocumentStyleRequest');
class_alias(UpdateParagraphStyleRequest::class, 'Google_Service_Docs_UpdateParagraphStyleRequest');
class_alias(UpdateSectionStyleRequest::class, 'Google_Service_Docs_UpdateSectionStyleRequest');
class_alias(UpdateTableCellStyleRequest::class, 'Google_Service_Docs_UpdateTableCellStyleRequest');
class_alias(UpdateTableColumnPropertiesRequest::class, 'Google_Service_Docs_UpdateTableColumnPropertiesRequest');
class_alias(UpdateTableRowStyleRequest::class, 'Google_Service_Docs_UpdateTableRowStyleRequest');
class_alias(UpdateTextStyleRequest::class, 'Google_Service_Docs_UpdateTextStyleRequest');
class_alias(WeightedFontFamily::class, 'Google_Service_Docs_WeightedFontFamily');
class_alias(WriteControl::class, 'Google_Service_Docs_WriteControl');
