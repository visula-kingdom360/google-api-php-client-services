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

namespace Google\Service\Slides;

class AffineTransform extends \Google\Model
{
  public $scaleX;
  public $scaleY;
  public $shearX;
  public $shearY;
  public $translateX;
  public $translateY;
  /** @var string */
  public $unit;

  public function setScaleX($scaleX)
  {
    $this->scaleX = $scaleX;
  }
  public function getScaleX()
  {
    return $this->scaleX;
  }
  public function setScaleY($scaleY)
  {
    $this->scaleY = $scaleY;
  }
  public function getScaleY()
  {
    return $this->scaleY;
  }
  public function setShearX($shearX)
  {
    $this->shearX = $shearX;
  }
  public function getShearX()
  {
    return $this->shearX;
  }
  public function setShearY($shearY)
  {
    $this->shearY = $shearY;
  }
  public function getShearY()
  {
    return $this->shearY;
  }
  public function setTranslateX($translateX)
  {
    $this->translateX = $translateX;
  }
  public function getTranslateX()
  {
    return $this->translateX;
  }
  public function setTranslateY($translateY)
  {
    $this->translateY = $translateY;
  }
  public function getTranslateY()
  {
    return $this->translateY;
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

class AutoText extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var TextStyle */
  public $style;
  /** @var string */
  public $type;
  protected $styleType = TextStyle::class;
  protected $styleDataType = '';
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
  /** @param TextStyle */
  public function setStyle(TextStyle $style)
  {
    $this->style = $style;
  }
  /** @return TextStyle */
  public function getStyle()
  {
    return $this->style;
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

class Autofit extends \Google\Model
{
  /** @var string */
  public $autofitType;
  /** @var float */
  public $fontScale;
  /** @var float */
  public $lineSpacingReduction;

  /** @param string */
  public function setAutofitType($autofitType)
  {
    $this->autofitType = $autofitType;
  }
  /** @return string */
  public function getAutofitType()
  {
    return $this->autofitType;
  }
  /** @param float */
  public function setFontScale($fontScale)
  {
    $this->fontScale = $fontScale;
  }
  /** @return float */
  public function getFontScale()
  {
    return $this->fontScale;
  }
  /** @param float */
  public function setLineSpacingReduction($lineSpacingReduction)
  {
    $this->lineSpacingReduction = $lineSpacingReduction;
  }
  /** @return float */
  public function getLineSpacingReduction()
  {
    return $this->lineSpacingReduction;
  }
}

class BatchUpdatePresentationRequest extends \Google\Collection
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

class BatchUpdatePresentationResponse extends \Google\Collection
{
  /** @var string */
  public $presentationId;
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
  public function setPresentationId($presentationId)
  {
    $this->presentationId = $presentationId;
  }
  /** @return string */
  public function getPresentationId()
  {
    return $this->presentationId;
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

class Bullet extends \Google\Model
{
  /** @var TextStyle */
  public $bulletStyle;
  /** @var string */
  public $glyph;
  /** @var string */
  public $listId;
  /** @var int */
  public $nestingLevel;
  protected $bulletStyleType = TextStyle::class;
  protected $bulletStyleDataType = '';
  /** @param TextStyle */
  public function setBulletStyle(TextStyle $bulletStyle)
  {
    $this->bulletStyle = $bulletStyle;
  }
  /** @return TextStyle */
  public function getBulletStyle()
  {
    return $this->bulletStyle;
  }
  /** @param string */
  public function setGlyph($glyph)
  {
    $this->glyph = $glyph;
  }
  /** @return string */
  public function getGlyph()
  {
    return $this->glyph;
  }
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
}

class ColorScheme extends \Google\Collection
{
  /** @var ThemeColorPair[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = ThemeColorPair::class;
  protected $colorsDataType = 'array';
  /** @param ThemeColorPair[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return ThemeColorPair[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class ColorStop extends \Google\Model
{
  /** @var float */
  public $alpha;
  /** @var OpaqueColor */
  public $color;
  /** @var float */
  public $position;
  protected $colorType = OpaqueColor::class;
  protected $colorDataType = '';
  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param OpaqueColor */
  public function setColor(OpaqueColor $color)
  {
    $this->color = $color;
  }
  /** @return OpaqueColor */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return float */
  public function getPosition()
  {
    return $this->position;
  }
}

class CreateImageRequest extends \Google\Model
{
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $objectId;
  /** @var string */
  public $url;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
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

class CreateImageResponse extends \Google\Model
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

class CreateLineRequest extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $lineCategory;
  /** @var string */
  public $objectId;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
  }
  /** @param string */
  public function setLineCategory($lineCategory)
  {
    $this->lineCategory = $lineCategory;
  }
  /** @return string */
  public function getLineCategory()
  {
    return $this->lineCategory;
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
}

class CreateLineResponse extends \Google\Model
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

class CreateParagraphBulletsRequest extends \Google\Model
{
  /** @var string */
  public $bulletPreset;
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $objectId;
  /** @var Range */
  public $textRange;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  protected $textRangeType = Range::class;
  protected $textRangeDataType = '';
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
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
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
  /** @param Range */
  public function setTextRange(Range $textRange)
  {
    $this->textRange = $textRange;
  }
  /** @return Range */
  public function getTextRange()
  {
    return $this->textRange;
  }
}

class CreateShapeRequest extends \Google\Model
{
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $objectId;
  /** @var string */
  public $shapeType;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
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
  /** @param string */
  public function setShapeType($shapeType)
  {
    $this->shapeType = $shapeType;
  }
  /** @return string */
  public function getShapeType()
  {
    return $this->shapeType;
  }
}

class CreateShapeResponse extends \Google\Model
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

class CreateSheetsChartRequest extends \Google\Model
{
  /** @var int */
  public $chartId;
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $linkingMode;
  /** @var string */
  public $objectId;
  /** @var string */
  public $spreadsheetId;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
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
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
  }
  /** @param string */
  public function setLinkingMode($linkingMode)
  {
    $this->linkingMode = $linkingMode;
  }
  /** @return string */
  public function getLinkingMode()
  {
    return $this->linkingMode;
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

class CreateSheetsChartResponse extends \Google\Model
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

class CreateSlideRequest extends \Google\Collection
{
  /** @var int */
  public $insertionIndex;
  /** @var string */
  public $objectId;
  /** @var LayoutPlaceholderIdMapping[] */
  public $placeholderIdMappings;
  /** @var LayoutReference */
  public $slideLayoutReference;
  protected $collection_key = 'placeholderIdMappings';
  protected $placeholderIdMappingsType = LayoutPlaceholderIdMapping::class;
  protected $placeholderIdMappingsDataType = 'array';
  protected $slideLayoutReferenceType = LayoutReference::class;
  protected $slideLayoutReferenceDataType = '';
  /** @param int */
  public function setInsertionIndex($insertionIndex)
  {
    $this->insertionIndex = $insertionIndex;
  }
  /** @return int */
  public function getInsertionIndex()
  {
    return $this->insertionIndex;
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
  /** @param LayoutPlaceholderIdMapping[] */
  public function setPlaceholderIdMappings($placeholderIdMappings)
  {
    $this->placeholderIdMappings = $placeholderIdMappings;
  }
  /** @return LayoutPlaceholderIdMapping[] */
  public function getPlaceholderIdMappings()
  {
    return $this->placeholderIdMappings;
  }
  /** @param LayoutReference */
  public function setSlideLayoutReference(LayoutReference $slideLayoutReference)
  {
    $this->slideLayoutReference = $slideLayoutReference;
  }
  /** @return LayoutReference */
  public function getSlideLayoutReference()
  {
    return $this->slideLayoutReference;
  }
}

class CreateSlideResponse extends \Google\Model
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

class CreateTableRequest extends \Google\Model
{
  /** @var int */
  public $columns;
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $objectId;
  /** @var int */
  public $rows;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
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
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
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

class CreateTableResponse extends \Google\Model
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

class CreateVideoRequest extends \Google\Model
{
  /** @var PageElementProperties */
  public $elementProperties;
  /** @var string */
  public $id;
  /** @var string */
  public $objectId;
  /** @var string */
  public $source;
  protected $elementPropertiesType = PageElementProperties::class;
  protected $elementPropertiesDataType = '';
  /** @param PageElementProperties */
  public function setElementProperties(PageElementProperties $elementProperties)
  {
    $this->elementProperties = $elementProperties;
  }
  /** @return PageElementProperties */
  public function getElementProperties()
  {
    return $this->elementProperties;
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
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class CreateVideoResponse extends \Google\Model
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

class CropProperties extends \Google\Model
{
  /** @var float */
  public $angle;
  /** @var float */
  public $bottomOffset;
  /** @var float */
  public $leftOffset;
  /** @var float */
  public $rightOffset;
  /** @var float */
  public $topOffset;

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
  public function setBottomOffset($bottomOffset)
  {
    $this->bottomOffset = $bottomOffset;
  }
  /** @return float */
  public function getBottomOffset()
  {
    return $this->bottomOffset;
  }
  /** @param float */
  public function setLeftOffset($leftOffset)
  {
    $this->leftOffset = $leftOffset;
  }
  /** @return float */
  public function getLeftOffset()
  {
    return $this->leftOffset;
  }
  /** @param float */
  public function setRightOffset($rightOffset)
  {
    $this->rightOffset = $rightOffset;
  }
  /** @return float */
  public function getRightOffset()
  {
    return $this->rightOffset;
  }
  /** @param float */
  public function setTopOffset($topOffset)
  {
    $this->topOffset = $topOffset;
  }
  /** @return float */
  public function getTopOffset()
  {
    return $this->topOffset;
  }
}

class DeleteObjectRequest extends \Google\Model
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

class DeleteParagraphBulletsRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $objectId;
  /** @var Range */
  public $textRange;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  protected $textRangeType = Range::class;
  protected $textRangeDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
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
  /** @param Range */
  public function setTextRange(Range $textRange)
  {
    $this->textRange = $textRange;
  }
  /** @return Range */
  public function getTextRange()
  {
    return $this->textRange;
  }
}

class DeleteTableColumnRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $tableObjectId;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
  /** @param string */
  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
  /** @return string */
  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }
}

class DeleteTableRowRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $tableObjectId;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
  /** @param string */
  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
  /** @return string */
  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }
}

class DeleteTextRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $objectId;
  /** @var Range */
  public $textRange;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  protected $textRangeType = Range::class;
  protected $textRangeDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
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
  /** @param Range */
  public function setTextRange(Range $textRange)
  {
    $this->textRange = $textRange;
  }
  /** @return Range */
  public function getTextRange()
  {
    return $this->textRange;
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

class DuplicateObjectRequest extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var string[] */
  public $objectIds;

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

class DuplicateObjectResponse extends \Google\Model
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

class Group extends \Google\Collection
{
  /** @var PageElement[] */
  public $children;
  protected $collection_key = 'children';
  protected $childrenType = PageElement::class;
  protected $childrenDataType = 'array';
  /** @param PageElement[] */
  public function setChildren($children)
  {
    $this->children = $children;
  }
  /** @return PageElement[] */
  public function getChildren()
  {
    return $this->children;
  }
}

class GroupObjectsRequest extends \Google\Collection
{
  /** @var string[] */
  public $childrenObjectIds;
  /** @var string */
  public $groupObjectId;
  protected $collection_key = 'childrenObjectIds';
  /** @param string[] */
  public function setChildrenObjectIds($childrenObjectIds)
  {
    $this->childrenObjectIds = $childrenObjectIds;
  }
  /** @return string[] */
  public function getChildrenObjectIds()
  {
    return $this->childrenObjectIds;
  }
  /** @param string */
  public function setGroupObjectId($groupObjectId)
  {
    $this->groupObjectId = $groupObjectId;
  }
  /** @return string */
  public function getGroupObjectId()
  {
    return $this->groupObjectId;
  }
}

class GroupObjectsResponse extends \Google\Model
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

class Image extends \Google\Model
{
  /** @var string */
  public $contentUrl;
  /** @var ImageProperties */
  public $imageProperties;
  /** @var Placeholder */
  public $placeholder;
  /** @var string */
  public $sourceUrl;
  protected $imagePropertiesType = ImageProperties::class;
  protected $imagePropertiesDataType = '';
  protected $placeholderType = Placeholder::class;
  protected $placeholderDataType = '';
  /** @param string */
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
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
  /** @param Placeholder */
  public function setPlaceholder(Placeholder $placeholder)
  {
    $this->placeholder = $placeholder;
  }
  /** @return Placeholder */
  public function getPlaceholder()
  {
    return $this->placeholder;
  }
  /** @param string */
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  /** @return string */
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class ImageProperties extends \Google\Model
{
  /** @var float */
  public $brightness;
  /** @var float */
  public $contrast;
  /** @var CropProperties */
  public $cropProperties;
  /** @var Link */
  public $link;
  /** @var Outline */
  public $outline;
  /** @var Recolor */
  public $recolor;
  /** @var Shadow */
  public $shadow;
  /** @var float */
  public $transparency;
  protected $cropPropertiesType = CropProperties::class;
  protected $cropPropertiesDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $outlineType = Outline::class;
  protected $outlineDataType = '';
  protected $recolorType = Recolor::class;
  protected $recolorDataType = '';
  protected $shadowType = Shadow::class;
  protected $shadowDataType = '';
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
  /** @param Outline */
  public function setOutline(Outline $outline)
  {
    $this->outline = $outline;
  }
  /** @return Outline */
  public function getOutline()
  {
    return $this->outline;
  }
  /** @param Recolor */
  public function setRecolor(Recolor $recolor)
  {
    $this->recolor = $recolor;
  }
  /** @return Recolor */
  public function getRecolor()
  {
    return $this->recolor;
  }
  /** @param Shadow */
  public function setShadow(Shadow $shadow)
  {
    $this->shadow = $shadow;
  }
  /** @return Shadow */
  public function getShadow()
  {
    return $this->shadow;
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

class InsertTableColumnsRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var bool */
  public $insertRight;
  /** @var int */
  public $number;
  /** @var string */
  public $tableObjectId;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param string */
  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
  /** @return string */
  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }
}

class InsertTableRowsRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var bool */
  public $insertBelow;
  /** @var int */
  public $number;
  /** @var string */
  public $tableObjectId;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param string */
  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
  /** @return string */
  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }
}

class InsertTextRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var int */
  public $insertionIndex;
  /** @var string */
  public $objectId;
  /** @var string */
  public $text;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
  /** @param int */
  public function setInsertionIndex($insertionIndex)
  {
    $this->insertionIndex = $insertionIndex;
  }
  /** @return int */
  public function getInsertionIndex()
  {
    return $this->insertionIndex;
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

class LayoutPlaceholderIdMapping extends \Google\Model
{
  /** @var Placeholder */
  public $layoutPlaceholder;
  /** @var string */
  public $layoutPlaceholderObjectId;
  /** @var string */
  public $objectId;
  protected $layoutPlaceholderType = Placeholder::class;
  protected $layoutPlaceholderDataType = '';
  /** @param Placeholder */
  public function setLayoutPlaceholder(Placeholder $layoutPlaceholder)
  {
    $this->layoutPlaceholder = $layoutPlaceholder;
  }
  /** @return Placeholder */
  public function getLayoutPlaceholder()
  {
    return $this->layoutPlaceholder;
  }
  /** @param string */
  public function setLayoutPlaceholderObjectId($layoutPlaceholderObjectId)
  {
    $this->layoutPlaceholderObjectId = $layoutPlaceholderObjectId;
  }
  /** @return string */
  public function getLayoutPlaceholderObjectId()
  {
    return $this->layoutPlaceholderObjectId;
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
}

class LayoutProperties extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $masterObjectId;
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
  /** @param string */
  public function setMasterObjectId($masterObjectId)
  {
    $this->masterObjectId = $masterObjectId;
  }
  /** @return string */
  public function getMasterObjectId()
  {
    return $this->masterObjectId;
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

class LayoutReference extends \Google\Model
{
  /** @var string */
  public $layoutId;
  /** @var string */
  public $predefinedLayout;

  /** @param string */
  public function setLayoutId($layoutId)
  {
    $this->layoutId = $layoutId;
  }
  /** @return string */
  public function getLayoutId()
  {
    return $this->layoutId;
  }
  /** @param string */
  public function setPredefinedLayout($predefinedLayout)
  {
    $this->predefinedLayout = $predefinedLayout;
  }
  /** @return string */
  public function getPredefinedLayout()
  {
    return $this->predefinedLayout;
  }
}

class Line extends \Google\Model
{
  /** @var string */
  public $lineCategory;
  /** @var LineProperties */
  public $lineProperties;
  /** @var string */
  public $lineType;
  protected $linePropertiesType = LineProperties::class;
  protected $linePropertiesDataType = '';
  /** @param string */
  public function setLineCategory($lineCategory)
  {
    $this->lineCategory = $lineCategory;
  }
  /** @return string */
  public function getLineCategory()
  {
    return $this->lineCategory;
  }
  /** @param LineProperties */
  public function setLineProperties(LineProperties $lineProperties)
  {
    $this->lineProperties = $lineProperties;
  }
  /** @return LineProperties */
  public function getLineProperties()
  {
    return $this->lineProperties;
  }
  /** @param string */
  public function setLineType($lineType)
  {
    $this->lineType = $lineType;
  }
  /** @return string */
  public function getLineType()
  {
    return $this->lineType;
  }
}

class LineConnection extends \Google\Model
{
  /** @var string */
  public $connectedObjectId;
  /** @var int */
  public $connectionSiteIndex;

  /** @param string */
  public function setConnectedObjectId($connectedObjectId)
  {
    $this->connectedObjectId = $connectedObjectId;
  }
  /** @return string */
  public function getConnectedObjectId()
  {
    return $this->connectedObjectId;
  }
  /** @param int */
  public function setConnectionSiteIndex($connectionSiteIndex)
  {
    $this->connectionSiteIndex = $connectionSiteIndex;
  }
  /** @return int */
  public function getConnectionSiteIndex()
  {
    return $this->connectionSiteIndex;
  }
}

class LineFill extends \Google\Model
{
  /** @var SolidFill */
  public $solidFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
}

class LineProperties extends \Google\Model
{
  /** @var string */
  public $dashStyle;
  /** @var string */
  public $endArrow;
  /** @var LineConnection */
  public $endConnection;
  /** @var LineFill */
  public $lineFill;
  /** @var Link */
  public $link;
  /** @var string */
  public $startArrow;
  /** @var LineConnection */
  public $startConnection;
  /** @var Dimension */
  public $weight;
  protected $endConnectionType = LineConnection::class;
  protected $endConnectionDataType = '';
  protected $lineFillType = LineFill::class;
  protected $lineFillDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $startConnectionType = LineConnection::class;
  protected $startConnectionDataType = '';
  protected $weightType = Dimension::class;
  protected $weightDataType = '';
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
  public function setEndArrow($endArrow)
  {
    $this->endArrow = $endArrow;
  }
  /** @return string */
  public function getEndArrow()
  {
    return $this->endArrow;
  }
  /** @param LineConnection */
  public function setEndConnection(LineConnection $endConnection)
  {
    $this->endConnection = $endConnection;
  }
  /** @return LineConnection */
  public function getEndConnection()
  {
    return $this->endConnection;
  }
  /** @param LineFill */
  public function setLineFill(LineFill $lineFill)
  {
    $this->lineFill = $lineFill;
  }
  /** @return LineFill */
  public function getLineFill()
  {
    return $this->lineFill;
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
  /** @param string */
  public function setStartArrow($startArrow)
  {
    $this->startArrow = $startArrow;
  }
  /** @return string */
  public function getStartArrow()
  {
    return $this->startArrow;
  }
  /** @param LineConnection */
  public function setStartConnection(LineConnection $startConnection)
  {
    $this->startConnection = $startConnection;
  }
  /** @return LineConnection */
  public function getStartConnection()
  {
    return $this->startConnection;
  }
  /** @param Dimension */
  public function setWeight(Dimension $weight)
  {
    $this->weight = $weight;
  }
  /** @return Dimension */
  public function getWeight()
  {
    return $this->weight;
  }
}

class Link extends \Google\Model
{
  /** @var string */
  public $pageObjectId;
  /** @var string */
  public $relativeLink;
  /** @var int */
  public $slideIndex;
  /** @var string */
  public $url;

  /** @param string */
  public function setPageObjectId($pageObjectId)
  {
    $this->pageObjectId = $pageObjectId;
  }
  /** @return string */
  public function getPageObjectId()
  {
    return $this->pageObjectId;
  }
  /** @param string */
  public function setRelativeLink($relativeLink)
  {
    $this->relativeLink = $relativeLink;
  }
  /** @return string */
  public function getRelativeLink()
  {
    return $this->relativeLink;
  }
  /** @param int */
  public function setSlideIndex($slideIndex)
  {
    $this->slideIndex = $slideIndex;
  }
  /** @return int */
  public function getSlideIndex()
  {
    return $this->slideIndex;
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

class MasterProperties extends \Google\Model
{
  /** @var string */
  public $displayName;

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
}

class MergeTableCellsRequest extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var TableRange */
  public $tableRange;
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
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

class NestingLevel extends \Google\Model
{
  /** @var TextStyle */
  public $bulletStyle;
  protected $bulletStyleType = TextStyle::class;
  protected $bulletStyleDataType = '';
  /** @param TextStyle */
  public function setBulletStyle(TextStyle $bulletStyle)
  {
    $this->bulletStyle = $bulletStyle;
  }
  /** @return TextStyle */
  public function getBulletStyle()
  {
    return $this->bulletStyle;
  }
}

class NotesProperties extends \Google\Model
{
  /** @var string */
  public $speakerNotesObjectId;

  /** @param string */
  public function setSpeakerNotesObjectId($speakerNotesObjectId)
  {
    $this->speakerNotesObjectId = $speakerNotesObjectId;
  }
  /** @return string */
  public function getSpeakerNotesObjectId()
  {
    return $this->speakerNotesObjectId;
  }
}

class OpaqueColor extends \Google\Model
{
  /** @var RgbColor */
  public $rgbColor;
  /** @var string */
  public $themeColor;
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
  /** @param string */
  public function setThemeColor($themeColor)
  {
    $this->themeColor = $themeColor;
  }
  /** @return string */
  public function getThemeColor()
  {
    return $this->themeColor;
  }
}

class OptionalColor extends \Google\Model
{
  /** @var OpaqueColor */
  public $opaqueColor;
  protected $opaqueColorType = OpaqueColor::class;
  protected $opaqueColorDataType = '';
  /** @param OpaqueColor */
  public function setOpaqueColor(OpaqueColor $opaqueColor)
  {
    $this->opaqueColor = $opaqueColor;
  }
  /** @return OpaqueColor */
  public function getOpaqueColor()
  {
    return $this->opaqueColor;
  }
}

class Outline extends \Google\Model
{
  /** @var string */
  public $dashStyle;
  /** @var OutlineFill */
  public $outlineFill;
  /** @var string */
  public $propertyState;
  /** @var Dimension */
  public $weight;
  protected $outlineFillType = OutlineFill::class;
  protected $outlineFillDataType = '';
  protected $weightType = Dimension::class;
  protected $weightDataType = '';
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
  /** @param OutlineFill */
  public function setOutlineFill(OutlineFill $outlineFill)
  {
    $this->outlineFill = $outlineFill;
  }
  /** @return OutlineFill */
  public function getOutlineFill()
  {
    return $this->outlineFill;
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
  public function setWeight(Dimension $weight)
  {
    $this->weight = $weight;
  }
  /** @return Dimension */
  public function getWeight()
  {
    return $this->weight;
  }
}

class OutlineFill extends \Google\Model
{
  /** @var SolidFill */
  public $solidFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
}

class Page extends \Google\Collection
{
  /** @var LayoutProperties */
  public $layoutProperties;
  /** @var MasterProperties */
  public $masterProperties;
  /** @var NotesProperties */
  public $notesProperties;
  /** @var string */
  public $objectId;
  /** @var PageElement[] */
  public $pageElements;
  /** @var PageProperties */
  public $pageProperties;
  /** @var string */
  public $pageType;
  /** @var string */
  public $revisionId;
  /** @var SlideProperties */
  public $slideProperties;
  protected $collection_key = 'pageElements';
  protected $layoutPropertiesType = LayoutProperties::class;
  protected $layoutPropertiesDataType = '';
  protected $masterPropertiesType = MasterProperties::class;
  protected $masterPropertiesDataType = '';
  protected $notesPropertiesType = NotesProperties::class;
  protected $notesPropertiesDataType = '';
  protected $pageElementsType = PageElement::class;
  protected $pageElementsDataType = 'array';
  protected $pagePropertiesType = PageProperties::class;
  protected $pagePropertiesDataType = '';
  protected $slidePropertiesType = SlideProperties::class;
  protected $slidePropertiesDataType = '';
  /** @param LayoutProperties */
  public function setLayoutProperties(LayoutProperties $layoutProperties)
  {
    $this->layoutProperties = $layoutProperties;
  }
  /** @return LayoutProperties */
  public function getLayoutProperties()
  {
    return $this->layoutProperties;
  }
  /** @param MasterProperties */
  public function setMasterProperties(MasterProperties $masterProperties)
  {
    $this->masterProperties = $masterProperties;
  }
  /** @return MasterProperties */
  public function getMasterProperties()
  {
    return $this->masterProperties;
  }
  /** @param NotesProperties */
  public function setNotesProperties(NotesProperties $notesProperties)
  {
    $this->notesProperties = $notesProperties;
  }
  /** @return NotesProperties */
  public function getNotesProperties()
  {
    return $this->notesProperties;
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
  /** @param PageElement[] */
  public function setPageElements($pageElements)
  {
    $this->pageElements = $pageElements;
  }
  /** @return PageElement[] */
  public function getPageElements()
  {
    return $this->pageElements;
  }
  /** @param PageProperties */
  public function setPageProperties(PageProperties $pageProperties)
  {
    $this->pageProperties = $pageProperties;
  }
  /** @return PageProperties */
  public function getPageProperties()
  {
    return $this->pageProperties;
  }
  /** @param string */
  public function setPageType($pageType)
  {
    $this->pageType = $pageType;
  }
  /** @return string */
  public function getPageType()
  {
    return $this->pageType;
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
  /** @param SlideProperties */
  public function setSlideProperties(SlideProperties $slideProperties)
  {
    $this->slideProperties = $slideProperties;
  }
  /** @return SlideProperties */
  public function getSlideProperties()
  {
    return $this->slideProperties;
  }
}

class PageBackgroundFill extends \Google\Model
{
  /** @var string */
  public $propertyState;
  /** @var SolidFill */
  public $solidFill;
  /** @var StretchedPictureFill */
  public $stretchedPictureFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
  protected $stretchedPictureFillType = StretchedPictureFill::class;
  protected $stretchedPictureFillDataType = '';
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
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
  /** @param StretchedPictureFill */
  public function setStretchedPictureFill(StretchedPictureFill $stretchedPictureFill)
  {
    $this->stretchedPictureFill = $stretchedPictureFill;
  }
  /** @return StretchedPictureFill */
  public function getStretchedPictureFill()
  {
    return $this->stretchedPictureFill;
  }
}

class PageElement extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var Group */
  public $elementGroup;
  /** @var Image */
  public $image;
  /** @var Line */
  public $line;
  /** @var string */
  public $objectId;
  /** @var Shape */
  public $shape;
  /** @var SheetsChart */
  public $sheetsChart;
  /** @var Size */
  public $size;
  /** @var Table */
  public $table;
  /** @var string */
  public $title;
  /** @var AffineTransform */
  public $transform;
  /** @var Video */
  public $video;
  /** @var WordArt */
  public $wordArt;
  protected $elementGroupType = Group::class;
  protected $elementGroupDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $lineType = Line::class;
  protected $lineDataType = '';
  protected $shapeType = Shape::class;
  protected $shapeDataType = '';
  protected $sheetsChartType = SheetsChart::class;
  protected $sheetsChartDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  protected $tableType = Table::class;
  protected $tableDataType = '';
  protected $transformType = AffineTransform::class;
  protected $transformDataType = '';
  protected $videoType = Video::class;
  protected $videoDataType = '';
  protected $wordArtType = WordArt::class;
  protected $wordArtDataType = '';
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
  /** @param Group */
  public function setElementGroup(Group $elementGroup)
  {
    $this->elementGroup = $elementGroup;
  }
  /** @return Group */
  public function getElementGroup()
  {
    return $this->elementGroup;
  }
  /** @param Image */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /** @return Image */
  public function getImage()
  {
    return $this->image;
  }
  /** @param Line */
  public function setLine(Line $line)
  {
    $this->line = $line;
  }
  /** @return Line */
  public function getLine()
  {
    return $this->line;
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
  /** @param Shape */
  public function setShape(Shape $shape)
  {
    $this->shape = $shape;
  }
  /** @return Shape */
  public function getShape()
  {
    return $this->shape;
  }
  /** @param SheetsChart */
  public function setSheetsChart(SheetsChart $sheetsChart)
  {
    $this->sheetsChart = $sheetsChart;
  }
  /** @return SheetsChart */
  public function getSheetsChart()
  {
    return $this->sheetsChart;
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
  /** @param AffineTransform */
  public function setTransform(AffineTransform $transform)
  {
    $this->transform = $transform;
  }
  /** @return AffineTransform */
  public function getTransform()
  {
    return $this->transform;
  }
  /** @param Video */
  public function setVideo(Video $video)
  {
    $this->video = $video;
  }
  /** @return Video */
  public function getVideo()
  {
    return $this->video;
  }
  /** @param WordArt */
  public function setWordArt(WordArt $wordArt)
  {
    $this->wordArt = $wordArt;
  }
  /** @return WordArt */
  public function getWordArt()
  {
    return $this->wordArt;
  }
}

class PageElementProperties extends \Google\Model
{
  /** @var string */
  public $pageObjectId;
  /** @var Size */
  public $size;
  /** @var AffineTransform */
  public $transform;
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  protected $transformType = AffineTransform::class;
  protected $transformDataType = '';
  /** @param string */
  public function setPageObjectId($pageObjectId)
  {
    $this->pageObjectId = $pageObjectId;
  }
  /** @return string */
  public function getPageObjectId()
  {
    return $this->pageObjectId;
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
  /** @param AffineTransform */
  public function setTransform(AffineTransform $transform)
  {
    $this->transform = $transform;
  }
  /** @return AffineTransform */
  public function getTransform()
  {
    return $this->transform;
  }
}

class PageProperties extends \Google\Model
{
  /** @var ColorScheme */
  public $colorScheme;
  /** @var PageBackgroundFill */
  public $pageBackgroundFill;
  protected $colorSchemeType = ColorScheme::class;
  protected $colorSchemeDataType = '';
  protected $pageBackgroundFillType = PageBackgroundFill::class;
  protected $pageBackgroundFillDataType = '';
  /** @param ColorScheme */
  public function setColorScheme(ColorScheme $colorScheme)
  {
    $this->colorScheme = $colorScheme;
  }
  /** @return ColorScheme */
  public function getColorScheme()
  {
    return $this->colorScheme;
  }
  /** @param PageBackgroundFill */
  public function setPageBackgroundFill(PageBackgroundFill $pageBackgroundFill)
  {
    $this->pageBackgroundFill = $pageBackgroundFill;
  }
  /** @return PageBackgroundFill */
  public function getPageBackgroundFill()
  {
    return $this->pageBackgroundFill;
  }
}

class ParagraphMarker extends \Google\Model
{
  /** @var Bullet */
  public $bullet;
  /** @var ParagraphStyle */
  public $style;
  protected $bulletType = Bullet::class;
  protected $bulletDataType = '';
  protected $styleType = ParagraphStyle::class;
  protected $styleDataType = '';
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
  /** @param ParagraphStyle */
  public function setStyle(ParagraphStyle $style)
  {
    $this->style = $style;
  }
  /** @return ParagraphStyle */
  public function getStyle()
  {
    return $this->style;
  }
}

class ParagraphStyle extends \Google\Model
{
  /** @var string */
  public $alignment;
  /** @var string */
  public $direction;
  /** @var Dimension */
  public $indentEnd;
  /** @var Dimension */
  public $indentFirstLine;
  /** @var Dimension */
  public $indentStart;
  /** @var float */
  public $lineSpacing;
  /** @var Dimension */
  public $spaceAbove;
  /** @var Dimension */
  public $spaceBelow;
  /** @var string */
  public $spacingMode;
  protected $indentEndType = Dimension::class;
  protected $indentEndDataType = '';
  protected $indentFirstLineType = Dimension::class;
  protected $indentFirstLineDataType = '';
  protected $indentStartType = Dimension::class;
  protected $indentStartDataType = '';
  protected $spaceAboveType = Dimension::class;
  protected $spaceAboveDataType = '';
  protected $spaceBelowType = Dimension::class;
  protected $spaceBelowDataType = '';
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
}

class Placeholder extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var string */
  public $parentObjectId;
  /** @var string */
  public $type;

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
  public function setParentObjectId($parentObjectId)
  {
    $this->parentObjectId = $parentObjectId;
  }
  /** @return string */
  public function getParentObjectId()
  {
    return $this->parentObjectId;
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

class Presentation extends \Google\Collection
{
  /** @var Page[] */
  public $layouts;
  /** @var string */
  public $locale;
  /** @var Page[] */
  public $masters;
  /** @var Page */
  public $notesMaster;
  /** @var Size */
  public $pageSize;
  /** @var string */
  public $presentationId;
  /** @var string */
  public $revisionId;
  /** @var Page[] */
  public $slides;
  /** @var string */
  public $title;
  protected $collection_key = 'slides';
  protected $layoutsType = Page::class;
  protected $layoutsDataType = 'array';
  protected $mastersType = Page::class;
  protected $mastersDataType = 'array';
  protected $notesMasterType = Page::class;
  protected $notesMasterDataType = '';
  protected $pageSizeType = Size::class;
  protected $pageSizeDataType = '';
  protected $slidesType = Page::class;
  protected $slidesDataType = 'array';
  /** @param Page[] */
  public function setLayouts($layouts)
  {
    $this->layouts = $layouts;
  }
  /** @return Page[] */
  public function getLayouts()
  {
    return $this->layouts;
  }
  /** @param string */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param Page[] */
  public function setMasters($masters)
  {
    $this->masters = $masters;
  }
  /** @return Page[] */
  public function getMasters()
  {
    return $this->masters;
  }
  /** @param Page */
  public function setNotesMaster(Page $notesMaster)
  {
    $this->notesMaster = $notesMaster;
  }
  /** @return Page */
  public function getNotesMaster()
  {
    return $this->notesMaster;
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
  /** @param string */
  public function setPresentationId($presentationId)
  {
    $this->presentationId = $presentationId;
  }
  /** @return string */
  public function getPresentationId()
  {
    return $this->presentationId;
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
  /** @param Page[] */
  public function setSlides($slides)
  {
    $this->slides = $slides;
  }
  /** @return Page[] */
  public function getSlides()
  {
    return $this->slides;
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

class Range extends \Google\Model
{
  /** @var int */
  public $endIndex;
  /** @var int */
  public $startIndex;
  /** @var string */
  public $type;

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

class Recolor extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var ColorStop[] */
  public $recolorStops;
  protected $collection_key = 'recolorStops';
  protected $recolorStopsType = ColorStop::class;
  protected $recolorStopsDataType = 'array';
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
  /** @param ColorStop[] */
  public function setRecolorStops($recolorStops)
  {
    $this->recolorStops = $recolorStops;
  }
  /** @return ColorStop[] */
  public function getRecolorStops()
  {
    return $this->recolorStops;
  }
}

class RefreshSheetsChartRequest extends \Google\Model
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

class ReplaceAllShapesWithImageRequest extends \Google\Collection
{
  /** @var SubstringMatchCriteria */
  public $containsText;
  /** @var string */
  public $imageReplaceMethod;
  /** @var string */
  public $imageUrl;
  /** @var string[] */
  public $pageObjectIds;
  /** @var string */
  public $replaceMethod;
  protected $collection_key = 'pageObjectIds';
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
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /** @return string */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /** @param string[] */
  public function setPageObjectIds($pageObjectIds)
  {
    $this->pageObjectIds = $pageObjectIds;
  }
  /** @return string[] */
  public function getPageObjectIds()
  {
    return $this->pageObjectIds;
  }
  /** @param string */
  public function setReplaceMethod($replaceMethod)
  {
    $this->replaceMethod = $replaceMethod;
  }
  /** @return string */
  public function getReplaceMethod()
  {
    return $this->replaceMethod;
  }
}

class ReplaceAllShapesWithImageResponse extends \Google\Model
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

class ReplaceAllShapesWithSheetsChartRequest extends \Google\Collection
{
  /** @var int */
  public $chartId;
  /** @var SubstringMatchCriteria */
  public $containsText;
  /** @var string */
  public $linkingMode;
  /** @var string[] */
  public $pageObjectIds;
  /** @var string */
  public $spreadsheetId;
  protected $collection_key = 'pageObjectIds';
  protected $containsTextType = SubstringMatchCriteria::class;
  protected $containsTextDataType = '';
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
  public function setLinkingMode($linkingMode)
  {
    $this->linkingMode = $linkingMode;
  }
  /** @return string */
  public function getLinkingMode()
  {
    return $this->linkingMode;
  }
  /** @param string[] */
  public function setPageObjectIds($pageObjectIds)
  {
    $this->pageObjectIds = $pageObjectIds;
  }
  /** @return string[] */
  public function getPageObjectIds()
  {
    return $this->pageObjectIds;
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

class ReplaceAllShapesWithSheetsChartResponse extends \Google\Model
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

class ReplaceAllTextRequest extends \Google\Collection
{
  /** @var SubstringMatchCriteria */
  public $containsText;
  /** @var string[] */
  public $pageObjectIds;
  /** @var string */
  public $replaceText;
  protected $collection_key = 'pageObjectIds';
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
  /** @param string[] */
  public function setPageObjectIds($pageObjectIds)
  {
    $this->pageObjectIds = $pageObjectIds;
  }
  /** @return string[] */
  public function getPageObjectIds()
  {
    return $this->pageObjectIds;
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
  public $url;

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

class Request extends \Google\Model
{
  /** @var CreateImageRequest */
  public $createImage;
  /** @var CreateLineRequest */
  public $createLine;
  /** @var CreateParagraphBulletsRequest */
  public $createParagraphBullets;
  /** @var CreateShapeRequest */
  public $createShape;
  /** @var CreateSheetsChartRequest */
  public $createSheetsChart;
  /** @var CreateSlideRequest */
  public $createSlide;
  /** @var CreateTableRequest */
  public $createTable;
  /** @var CreateVideoRequest */
  public $createVideo;
  /** @var DeleteObjectRequest */
  public $deleteObject;
  /** @var DeleteParagraphBulletsRequest */
  public $deleteParagraphBullets;
  /** @var DeleteTableColumnRequest */
  public $deleteTableColumn;
  /** @var DeleteTableRowRequest */
  public $deleteTableRow;
  /** @var DeleteTextRequest */
  public $deleteText;
  /** @var DuplicateObjectRequest */
  public $duplicateObject;
  /** @var GroupObjectsRequest */
  public $groupObjects;
  /** @var InsertTableColumnsRequest */
  public $insertTableColumns;
  /** @var InsertTableRowsRequest */
  public $insertTableRows;
  /** @var InsertTextRequest */
  public $insertText;
  /** @var MergeTableCellsRequest */
  public $mergeTableCells;
  /** @var RefreshSheetsChartRequest */
  public $refreshSheetsChart;
  /** @var ReplaceAllShapesWithImageRequest */
  public $replaceAllShapesWithImage;
  /** @var ReplaceAllShapesWithSheetsChartRequest */
  public $replaceAllShapesWithSheetsChart;
  /** @var ReplaceAllTextRequest */
  public $replaceAllText;
  /** @var ReplaceImageRequest */
  public $replaceImage;
  /** @var RerouteLineRequest */
  public $rerouteLine;
  /** @var UngroupObjectsRequest */
  public $ungroupObjects;
  /** @var UnmergeTableCellsRequest */
  public $unmergeTableCells;
  /** @var UpdateImagePropertiesRequest */
  public $updateImageProperties;
  /** @var UpdateLineCategoryRequest */
  public $updateLineCategory;
  /** @var UpdateLinePropertiesRequest */
  public $updateLineProperties;
  /** @var UpdatePageElementAltTextRequest */
  public $updatePageElementAltText;
  /** @var UpdatePageElementTransformRequest */
  public $updatePageElementTransform;
  /** @var UpdatePageElementsZOrderRequest */
  public $updatePageElementsZOrder;
  /** @var UpdatePagePropertiesRequest */
  public $updatePageProperties;
  /** @var UpdateParagraphStyleRequest */
  public $updateParagraphStyle;
  /** @var UpdateShapePropertiesRequest */
  public $updateShapeProperties;
  /** @var UpdateSlidePropertiesRequest */
  public $updateSlideProperties;
  /** @var UpdateSlidesPositionRequest */
  public $updateSlidesPosition;
  /** @var UpdateTableBorderPropertiesRequest */
  public $updateTableBorderProperties;
  /** @var UpdateTableCellPropertiesRequest */
  public $updateTableCellProperties;
  /** @var UpdateTableColumnPropertiesRequest */
  public $updateTableColumnProperties;
  /** @var UpdateTableRowPropertiesRequest */
  public $updateTableRowProperties;
  /** @var UpdateTextStyleRequest */
  public $updateTextStyle;
  /** @var UpdateVideoPropertiesRequest */
  public $updateVideoProperties;
  protected $createImageType = CreateImageRequest::class;
  protected $createImageDataType = '';
  protected $createLineType = CreateLineRequest::class;
  protected $createLineDataType = '';
  protected $createParagraphBulletsType = CreateParagraphBulletsRequest::class;
  protected $createParagraphBulletsDataType = '';
  protected $createShapeType = CreateShapeRequest::class;
  protected $createShapeDataType = '';
  protected $createSheetsChartType = CreateSheetsChartRequest::class;
  protected $createSheetsChartDataType = '';
  protected $createSlideType = CreateSlideRequest::class;
  protected $createSlideDataType = '';
  protected $createTableType = CreateTableRequest::class;
  protected $createTableDataType = '';
  protected $createVideoType = CreateVideoRequest::class;
  protected $createVideoDataType = '';
  protected $deleteObjectType = DeleteObjectRequest::class;
  protected $deleteObjectDataType = '';
  protected $deleteParagraphBulletsType = DeleteParagraphBulletsRequest::class;
  protected $deleteParagraphBulletsDataType = '';
  protected $deleteTableColumnType = DeleteTableColumnRequest::class;
  protected $deleteTableColumnDataType = '';
  protected $deleteTableRowType = DeleteTableRowRequest::class;
  protected $deleteTableRowDataType = '';
  protected $deleteTextType = DeleteTextRequest::class;
  protected $deleteTextDataType = '';
  protected $duplicateObjectType = DuplicateObjectRequest::class;
  protected $duplicateObjectDataType = '';
  protected $groupObjectsType = GroupObjectsRequest::class;
  protected $groupObjectsDataType = '';
  protected $insertTableColumnsType = InsertTableColumnsRequest::class;
  protected $insertTableColumnsDataType = '';
  protected $insertTableRowsType = InsertTableRowsRequest::class;
  protected $insertTableRowsDataType = '';
  protected $insertTextType = InsertTextRequest::class;
  protected $insertTextDataType = '';
  protected $mergeTableCellsType = MergeTableCellsRequest::class;
  protected $mergeTableCellsDataType = '';
  protected $refreshSheetsChartType = RefreshSheetsChartRequest::class;
  protected $refreshSheetsChartDataType = '';
  protected $replaceAllShapesWithImageType = ReplaceAllShapesWithImageRequest::class;
  protected $replaceAllShapesWithImageDataType = '';
  protected $replaceAllShapesWithSheetsChartType = ReplaceAllShapesWithSheetsChartRequest::class;
  protected $replaceAllShapesWithSheetsChartDataType = '';
  protected $replaceAllTextType = ReplaceAllTextRequest::class;
  protected $replaceAllTextDataType = '';
  protected $replaceImageType = ReplaceImageRequest::class;
  protected $replaceImageDataType = '';
  protected $rerouteLineType = RerouteLineRequest::class;
  protected $rerouteLineDataType = '';
  protected $ungroupObjectsType = UngroupObjectsRequest::class;
  protected $ungroupObjectsDataType = '';
  protected $unmergeTableCellsType = UnmergeTableCellsRequest::class;
  protected $unmergeTableCellsDataType = '';
  protected $updateImagePropertiesType = UpdateImagePropertiesRequest::class;
  protected $updateImagePropertiesDataType = '';
  protected $updateLineCategoryType = UpdateLineCategoryRequest::class;
  protected $updateLineCategoryDataType = '';
  protected $updateLinePropertiesType = UpdateLinePropertiesRequest::class;
  protected $updateLinePropertiesDataType = '';
  protected $updatePageElementAltTextType = UpdatePageElementAltTextRequest::class;
  protected $updatePageElementAltTextDataType = '';
  protected $updatePageElementTransformType = UpdatePageElementTransformRequest::class;
  protected $updatePageElementTransformDataType = '';
  protected $updatePageElementsZOrderType = UpdatePageElementsZOrderRequest::class;
  protected $updatePageElementsZOrderDataType = '';
  protected $updatePagePropertiesType = UpdatePagePropertiesRequest::class;
  protected $updatePagePropertiesDataType = '';
  protected $updateParagraphStyleType = UpdateParagraphStyleRequest::class;
  protected $updateParagraphStyleDataType = '';
  protected $updateShapePropertiesType = UpdateShapePropertiesRequest::class;
  protected $updateShapePropertiesDataType = '';
  protected $updateSlidePropertiesType = UpdateSlidePropertiesRequest::class;
  protected $updateSlidePropertiesDataType = '';
  protected $updateSlidesPositionType = UpdateSlidesPositionRequest::class;
  protected $updateSlidesPositionDataType = '';
  protected $updateTableBorderPropertiesType = UpdateTableBorderPropertiesRequest::class;
  protected $updateTableBorderPropertiesDataType = '';
  protected $updateTableCellPropertiesType = UpdateTableCellPropertiesRequest::class;
  protected $updateTableCellPropertiesDataType = '';
  protected $updateTableColumnPropertiesType = UpdateTableColumnPropertiesRequest::class;
  protected $updateTableColumnPropertiesDataType = '';
  protected $updateTableRowPropertiesType = UpdateTableRowPropertiesRequest::class;
  protected $updateTableRowPropertiesDataType = '';
  protected $updateTextStyleType = UpdateTextStyleRequest::class;
  protected $updateTextStyleDataType = '';
  protected $updateVideoPropertiesType = UpdateVideoPropertiesRequest::class;
  protected $updateVideoPropertiesDataType = '';
  /** @param CreateImageRequest */
  public function setCreateImage(CreateImageRequest $createImage)
  {
    $this->createImage = $createImage;
  }
  /** @return CreateImageRequest */
  public function getCreateImage()
  {
    return $this->createImage;
  }
  /** @param CreateLineRequest */
  public function setCreateLine(CreateLineRequest $createLine)
  {
    $this->createLine = $createLine;
  }
  /** @return CreateLineRequest */
  public function getCreateLine()
  {
    return $this->createLine;
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
  /** @param CreateShapeRequest */
  public function setCreateShape(CreateShapeRequest $createShape)
  {
    $this->createShape = $createShape;
  }
  /** @return CreateShapeRequest */
  public function getCreateShape()
  {
    return $this->createShape;
  }
  /** @param CreateSheetsChartRequest */
  public function setCreateSheetsChart(CreateSheetsChartRequest $createSheetsChart)
  {
    $this->createSheetsChart = $createSheetsChart;
  }
  /** @return CreateSheetsChartRequest */
  public function getCreateSheetsChart()
  {
    return $this->createSheetsChart;
  }
  /** @param CreateSlideRequest */
  public function setCreateSlide(CreateSlideRequest $createSlide)
  {
    $this->createSlide = $createSlide;
  }
  /** @return CreateSlideRequest */
  public function getCreateSlide()
  {
    return $this->createSlide;
  }
  /** @param CreateTableRequest */
  public function setCreateTable(CreateTableRequest $createTable)
  {
    $this->createTable = $createTable;
  }
  /** @return CreateTableRequest */
  public function getCreateTable()
  {
    return $this->createTable;
  }
  /** @param CreateVideoRequest */
  public function setCreateVideo(CreateVideoRequest $createVideo)
  {
    $this->createVideo = $createVideo;
  }
  /** @return CreateVideoRequest */
  public function getCreateVideo()
  {
    return $this->createVideo;
  }
  /** @param DeleteObjectRequest */
  public function setDeleteObject(DeleteObjectRequest $deleteObject)
  {
    $this->deleteObject = $deleteObject;
  }
  /** @return DeleteObjectRequest */
  public function getDeleteObject()
  {
    return $this->deleteObject;
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
  /** @param DeleteTextRequest */
  public function setDeleteText(DeleteTextRequest $deleteText)
  {
    $this->deleteText = $deleteText;
  }
  /** @return DeleteTextRequest */
  public function getDeleteText()
  {
    return $this->deleteText;
  }
  /** @param DuplicateObjectRequest */
  public function setDuplicateObject(DuplicateObjectRequest $duplicateObject)
  {
    $this->duplicateObject = $duplicateObject;
  }
  /** @return DuplicateObjectRequest */
  public function getDuplicateObject()
  {
    return $this->duplicateObject;
  }
  /** @param GroupObjectsRequest */
  public function setGroupObjects(GroupObjectsRequest $groupObjects)
  {
    $this->groupObjects = $groupObjects;
  }
  /** @return GroupObjectsRequest */
  public function getGroupObjects()
  {
    return $this->groupObjects;
  }
  /** @param InsertTableColumnsRequest */
  public function setInsertTableColumns(InsertTableColumnsRequest $insertTableColumns)
  {
    $this->insertTableColumns = $insertTableColumns;
  }
  /** @return InsertTableColumnsRequest */
  public function getInsertTableColumns()
  {
    return $this->insertTableColumns;
  }
  /** @param InsertTableRowsRequest */
  public function setInsertTableRows(InsertTableRowsRequest $insertTableRows)
  {
    $this->insertTableRows = $insertTableRows;
  }
  /** @return InsertTableRowsRequest */
  public function getInsertTableRows()
  {
    return $this->insertTableRows;
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
  /** @param RefreshSheetsChartRequest */
  public function setRefreshSheetsChart(RefreshSheetsChartRequest $refreshSheetsChart)
  {
    $this->refreshSheetsChart = $refreshSheetsChart;
  }
  /** @return RefreshSheetsChartRequest */
  public function getRefreshSheetsChart()
  {
    return $this->refreshSheetsChart;
  }
  /** @param ReplaceAllShapesWithImageRequest */
  public function setReplaceAllShapesWithImage(ReplaceAllShapesWithImageRequest $replaceAllShapesWithImage)
  {
    $this->replaceAllShapesWithImage = $replaceAllShapesWithImage;
  }
  /** @return ReplaceAllShapesWithImageRequest */
  public function getReplaceAllShapesWithImage()
  {
    return $this->replaceAllShapesWithImage;
  }
  /** @param ReplaceAllShapesWithSheetsChartRequest */
  public function setReplaceAllShapesWithSheetsChart(ReplaceAllShapesWithSheetsChartRequest $replaceAllShapesWithSheetsChart)
  {
    $this->replaceAllShapesWithSheetsChart = $replaceAllShapesWithSheetsChart;
  }
  /** @return ReplaceAllShapesWithSheetsChartRequest */
  public function getReplaceAllShapesWithSheetsChart()
  {
    return $this->replaceAllShapesWithSheetsChart;
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
  /** @param RerouteLineRequest */
  public function setRerouteLine(RerouteLineRequest $rerouteLine)
  {
    $this->rerouteLine = $rerouteLine;
  }
  /** @return RerouteLineRequest */
  public function getRerouteLine()
  {
    return $this->rerouteLine;
  }
  /** @param UngroupObjectsRequest */
  public function setUngroupObjects(UngroupObjectsRequest $ungroupObjects)
  {
    $this->ungroupObjects = $ungroupObjects;
  }
  /** @return UngroupObjectsRequest */
  public function getUngroupObjects()
  {
    return $this->ungroupObjects;
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
  /** @param UpdateImagePropertiesRequest */
  public function setUpdateImageProperties(UpdateImagePropertiesRequest $updateImageProperties)
  {
    $this->updateImageProperties = $updateImageProperties;
  }
  /** @return UpdateImagePropertiesRequest */
  public function getUpdateImageProperties()
  {
    return $this->updateImageProperties;
  }
  /** @param UpdateLineCategoryRequest */
  public function setUpdateLineCategory(UpdateLineCategoryRequest $updateLineCategory)
  {
    $this->updateLineCategory = $updateLineCategory;
  }
  /** @return UpdateLineCategoryRequest */
  public function getUpdateLineCategory()
  {
    return $this->updateLineCategory;
  }
  /** @param UpdateLinePropertiesRequest */
  public function setUpdateLineProperties(UpdateLinePropertiesRequest $updateLineProperties)
  {
    $this->updateLineProperties = $updateLineProperties;
  }
  /** @return UpdateLinePropertiesRequest */
  public function getUpdateLineProperties()
  {
    return $this->updateLineProperties;
  }
  /** @param UpdatePageElementAltTextRequest */
  public function setUpdatePageElementAltText(UpdatePageElementAltTextRequest $updatePageElementAltText)
  {
    $this->updatePageElementAltText = $updatePageElementAltText;
  }
  /** @return UpdatePageElementAltTextRequest */
  public function getUpdatePageElementAltText()
  {
    return $this->updatePageElementAltText;
  }
  /** @param UpdatePageElementTransformRequest */
  public function setUpdatePageElementTransform(UpdatePageElementTransformRequest $updatePageElementTransform)
  {
    $this->updatePageElementTransform = $updatePageElementTransform;
  }
  /** @return UpdatePageElementTransformRequest */
  public function getUpdatePageElementTransform()
  {
    return $this->updatePageElementTransform;
  }
  /** @param UpdatePageElementsZOrderRequest */
  public function setUpdatePageElementsZOrder(UpdatePageElementsZOrderRequest $updatePageElementsZOrder)
  {
    $this->updatePageElementsZOrder = $updatePageElementsZOrder;
  }
  /** @return UpdatePageElementsZOrderRequest */
  public function getUpdatePageElementsZOrder()
  {
    return $this->updatePageElementsZOrder;
  }
  /** @param UpdatePagePropertiesRequest */
  public function setUpdatePageProperties(UpdatePagePropertiesRequest $updatePageProperties)
  {
    $this->updatePageProperties = $updatePageProperties;
  }
  /** @return UpdatePagePropertiesRequest */
  public function getUpdatePageProperties()
  {
    return $this->updatePageProperties;
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
  /** @param UpdateShapePropertiesRequest */
  public function setUpdateShapeProperties(UpdateShapePropertiesRequest $updateShapeProperties)
  {
    $this->updateShapeProperties = $updateShapeProperties;
  }
  /** @return UpdateShapePropertiesRequest */
  public function getUpdateShapeProperties()
  {
    return $this->updateShapeProperties;
  }
  /** @param UpdateSlidePropertiesRequest */
  public function setUpdateSlideProperties(UpdateSlidePropertiesRequest $updateSlideProperties)
  {
    $this->updateSlideProperties = $updateSlideProperties;
  }
  /** @return UpdateSlidePropertiesRequest */
  public function getUpdateSlideProperties()
  {
    return $this->updateSlideProperties;
  }
  /** @param UpdateSlidesPositionRequest */
  public function setUpdateSlidesPosition(UpdateSlidesPositionRequest $updateSlidesPosition)
  {
    $this->updateSlidesPosition = $updateSlidesPosition;
  }
  /** @return UpdateSlidesPositionRequest */
  public function getUpdateSlidesPosition()
  {
    return $this->updateSlidesPosition;
  }
  /** @param UpdateTableBorderPropertiesRequest */
  public function setUpdateTableBorderProperties(UpdateTableBorderPropertiesRequest $updateTableBorderProperties)
  {
    $this->updateTableBorderProperties = $updateTableBorderProperties;
  }
  /** @return UpdateTableBorderPropertiesRequest */
  public function getUpdateTableBorderProperties()
  {
    return $this->updateTableBorderProperties;
  }
  /** @param UpdateTableCellPropertiesRequest */
  public function setUpdateTableCellProperties(UpdateTableCellPropertiesRequest $updateTableCellProperties)
  {
    $this->updateTableCellProperties = $updateTableCellProperties;
  }
  /** @return UpdateTableCellPropertiesRequest */
  public function getUpdateTableCellProperties()
  {
    return $this->updateTableCellProperties;
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
  /** @param UpdateTableRowPropertiesRequest */
  public function setUpdateTableRowProperties(UpdateTableRowPropertiesRequest $updateTableRowProperties)
  {
    $this->updateTableRowProperties = $updateTableRowProperties;
  }
  /** @return UpdateTableRowPropertiesRequest */
  public function getUpdateTableRowProperties()
  {
    return $this->updateTableRowProperties;
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
  /** @param UpdateVideoPropertiesRequest */
  public function setUpdateVideoProperties(UpdateVideoPropertiesRequest $updateVideoProperties)
  {
    $this->updateVideoProperties = $updateVideoProperties;
  }
  /** @return UpdateVideoPropertiesRequest */
  public function getUpdateVideoProperties()
  {
    return $this->updateVideoProperties;
  }
}

class RerouteLineRequest extends \Google\Model
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

class Response extends \Google\Model
{
  /** @var CreateImageResponse */
  public $createImage;
  /** @var CreateLineResponse */
  public $createLine;
  /** @var CreateShapeResponse */
  public $createShape;
  /** @var CreateSheetsChartResponse */
  public $createSheetsChart;
  /** @var CreateSlideResponse */
  public $createSlide;
  /** @var CreateTableResponse */
  public $createTable;
  /** @var CreateVideoResponse */
  public $createVideo;
  /** @var DuplicateObjectResponse */
  public $duplicateObject;
  /** @var GroupObjectsResponse */
  public $groupObjects;
  /** @var ReplaceAllShapesWithImageResponse */
  public $replaceAllShapesWithImage;
  /** @var ReplaceAllShapesWithSheetsChartResponse */
  public $replaceAllShapesWithSheetsChart;
  /** @var ReplaceAllTextResponse */
  public $replaceAllText;
  protected $createImageType = CreateImageResponse::class;
  protected $createImageDataType = '';
  protected $createLineType = CreateLineResponse::class;
  protected $createLineDataType = '';
  protected $createShapeType = CreateShapeResponse::class;
  protected $createShapeDataType = '';
  protected $createSheetsChartType = CreateSheetsChartResponse::class;
  protected $createSheetsChartDataType = '';
  protected $createSlideType = CreateSlideResponse::class;
  protected $createSlideDataType = '';
  protected $createTableType = CreateTableResponse::class;
  protected $createTableDataType = '';
  protected $createVideoType = CreateVideoResponse::class;
  protected $createVideoDataType = '';
  protected $duplicateObjectType = DuplicateObjectResponse::class;
  protected $duplicateObjectDataType = '';
  protected $groupObjectsType = GroupObjectsResponse::class;
  protected $groupObjectsDataType = '';
  protected $replaceAllShapesWithImageType = ReplaceAllShapesWithImageResponse::class;
  protected $replaceAllShapesWithImageDataType = '';
  protected $replaceAllShapesWithSheetsChartType = ReplaceAllShapesWithSheetsChartResponse::class;
  protected $replaceAllShapesWithSheetsChartDataType = '';
  protected $replaceAllTextType = ReplaceAllTextResponse::class;
  protected $replaceAllTextDataType = '';
  /** @param CreateImageResponse */
  public function setCreateImage(CreateImageResponse $createImage)
  {
    $this->createImage = $createImage;
  }
  /** @return CreateImageResponse */
  public function getCreateImage()
  {
    return $this->createImage;
  }
  /** @param CreateLineResponse */
  public function setCreateLine(CreateLineResponse $createLine)
  {
    $this->createLine = $createLine;
  }
  /** @return CreateLineResponse */
  public function getCreateLine()
  {
    return $this->createLine;
  }
  /** @param CreateShapeResponse */
  public function setCreateShape(CreateShapeResponse $createShape)
  {
    $this->createShape = $createShape;
  }
  /** @return CreateShapeResponse */
  public function getCreateShape()
  {
    return $this->createShape;
  }
  /** @param CreateSheetsChartResponse */
  public function setCreateSheetsChart(CreateSheetsChartResponse $createSheetsChart)
  {
    $this->createSheetsChart = $createSheetsChart;
  }
  /** @return CreateSheetsChartResponse */
  public function getCreateSheetsChart()
  {
    return $this->createSheetsChart;
  }
  /** @param CreateSlideResponse */
  public function setCreateSlide(CreateSlideResponse $createSlide)
  {
    $this->createSlide = $createSlide;
  }
  /** @return CreateSlideResponse */
  public function getCreateSlide()
  {
    return $this->createSlide;
  }
  /** @param CreateTableResponse */
  public function setCreateTable(CreateTableResponse $createTable)
  {
    $this->createTable = $createTable;
  }
  /** @return CreateTableResponse */
  public function getCreateTable()
  {
    return $this->createTable;
  }
  /** @param CreateVideoResponse */
  public function setCreateVideo(CreateVideoResponse $createVideo)
  {
    $this->createVideo = $createVideo;
  }
  /** @return CreateVideoResponse */
  public function getCreateVideo()
  {
    return $this->createVideo;
  }
  /** @param DuplicateObjectResponse */
  public function setDuplicateObject(DuplicateObjectResponse $duplicateObject)
  {
    $this->duplicateObject = $duplicateObject;
  }
  /** @return DuplicateObjectResponse */
  public function getDuplicateObject()
  {
    return $this->duplicateObject;
  }
  /** @param GroupObjectsResponse */
  public function setGroupObjects(GroupObjectsResponse $groupObjects)
  {
    $this->groupObjects = $groupObjects;
  }
  /** @return GroupObjectsResponse */
  public function getGroupObjects()
  {
    return $this->groupObjects;
  }
  /** @param ReplaceAllShapesWithImageResponse */
  public function setReplaceAllShapesWithImage(ReplaceAllShapesWithImageResponse $replaceAllShapesWithImage)
  {
    $this->replaceAllShapesWithImage = $replaceAllShapesWithImage;
  }
  /** @return ReplaceAllShapesWithImageResponse */
  public function getReplaceAllShapesWithImage()
  {
    return $this->replaceAllShapesWithImage;
  }
  /** @param ReplaceAllShapesWithSheetsChartResponse */
  public function setReplaceAllShapesWithSheetsChart(ReplaceAllShapesWithSheetsChartResponse $replaceAllShapesWithSheetsChart)
  {
    $this->replaceAllShapesWithSheetsChart = $replaceAllShapesWithSheetsChart;
  }
  /** @return ReplaceAllShapesWithSheetsChartResponse */
  public function getReplaceAllShapesWithSheetsChart()
  {
    return $this->replaceAllShapesWithSheetsChart;
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

class Shadow extends \Google\Model
{
  /** @var string */
  public $alignment;
  /** @var float */
  public $alpha;
  /** @var Dimension */
  public $blurRadius;
  /** @var OpaqueColor */
  public $color;
  /** @var string */
  public $propertyState;
  /** @var bool */
  public $rotateWithShape;
  /** @var AffineTransform */
  public $transform;
  /** @var string */
  public $type;
  protected $blurRadiusType = Dimension::class;
  protected $blurRadiusDataType = '';
  protected $colorType = OpaqueColor::class;
  protected $colorDataType = '';
  protected $transformType = AffineTransform::class;
  protected $transformDataType = '';
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
  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param Dimension */
  public function setBlurRadius(Dimension $blurRadius)
  {
    $this->blurRadius = $blurRadius;
  }
  /** @return Dimension */
  public function getBlurRadius()
  {
    return $this->blurRadius;
  }
  /** @param OpaqueColor */
  public function setColor(OpaqueColor $color)
  {
    $this->color = $color;
  }
  /** @return OpaqueColor */
  public function getColor()
  {
    return $this->color;
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
  /** @param bool */
  public function setRotateWithShape($rotateWithShape)
  {
    $this->rotateWithShape = $rotateWithShape;
  }
  /** @return bool */
  public function getRotateWithShape()
  {
    return $this->rotateWithShape;
  }
  /** @param AffineTransform */
  public function setTransform(AffineTransform $transform)
  {
    $this->transform = $transform;
  }
  /** @return AffineTransform */
  public function getTransform()
  {
    return $this->transform;
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

class Shape extends \Google\Model
{
  /** @var Placeholder */
  public $placeholder;
  /** @var ShapeProperties */
  public $shapeProperties;
  /** @var string */
  public $shapeType;
  /** @var TextContent */
  public $text;
  protected $placeholderType = Placeholder::class;
  protected $placeholderDataType = '';
  protected $shapePropertiesType = ShapeProperties::class;
  protected $shapePropertiesDataType = '';
  protected $textType = TextContent::class;
  protected $textDataType = '';
  /** @param Placeholder */
  public function setPlaceholder(Placeholder $placeholder)
  {
    $this->placeholder = $placeholder;
  }
  /** @return Placeholder */
  public function getPlaceholder()
  {
    return $this->placeholder;
  }
  /** @param ShapeProperties */
  public function setShapeProperties(ShapeProperties $shapeProperties)
  {
    $this->shapeProperties = $shapeProperties;
  }
  /** @return ShapeProperties */
  public function getShapeProperties()
  {
    return $this->shapeProperties;
  }
  /** @param string */
  public function setShapeType($shapeType)
  {
    $this->shapeType = $shapeType;
  }
  /** @return string */
  public function getShapeType()
  {
    return $this->shapeType;
  }
  /** @param TextContent */
  public function setText(TextContent $text)
  {
    $this->text = $text;
  }
  /** @return TextContent */
  public function getText()
  {
    return $this->text;
  }
}

class ShapeBackgroundFill extends \Google\Model
{
  /** @var string */
  public $propertyState;
  /** @var SolidFill */
  public $solidFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
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
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
}

class ShapeProperties extends \Google\Model
{
  /** @var Autofit */
  public $autofit;
  /** @var string */
  public $contentAlignment;
  /** @var Link */
  public $link;
  /** @var Outline */
  public $outline;
  /** @var Shadow */
  public $shadow;
  /** @var ShapeBackgroundFill */
  public $shapeBackgroundFill;
  protected $autofitType = Autofit::class;
  protected $autofitDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $outlineType = Outline::class;
  protected $outlineDataType = '';
  protected $shadowType = Shadow::class;
  protected $shadowDataType = '';
  protected $shapeBackgroundFillType = ShapeBackgroundFill::class;
  protected $shapeBackgroundFillDataType = '';
  /** @param Autofit */
  public function setAutofit(Autofit $autofit)
  {
    $this->autofit = $autofit;
  }
  /** @return Autofit */
  public function getAutofit()
  {
    return $this->autofit;
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
  /** @param Outline */
  public function setOutline(Outline $outline)
  {
    $this->outline = $outline;
  }
  /** @return Outline */
  public function getOutline()
  {
    return $this->outline;
  }
  /** @param Shadow */
  public function setShadow(Shadow $shadow)
  {
    $this->shadow = $shadow;
  }
  /** @return Shadow */
  public function getShadow()
  {
    return $this->shadow;
  }
  /** @param ShapeBackgroundFill */
  public function setShapeBackgroundFill(ShapeBackgroundFill $shapeBackgroundFill)
  {
    $this->shapeBackgroundFill = $shapeBackgroundFill;
  }
  /** @return ShapeBackgroundFill */
  public function getShapeBackgroundFill()
  {
    return $this->shapeBackgroundFill;
  }
}

class SheetsChart extends \Google\Model
{
  /** @var int */
  public $chartId;
  /** @var string */
  public $contentUrl;
  /** @var SheetsChartProperties */
  public $sheetsChartProperties;
  /** @var string */
  public $spreadsheetId;
  protected $sheetsChartPropertiesType = SheetsChartProperties::class;
  protected $sheetsChartPropertiesDataType = '';
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
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
  }
  /** @param SheetsChartProperties */
  public function setSheetsChartProperties(SheetsChartProperties $sheetsChartProperties)
  {
    $this->sheetsChartProperties = $sheetsChartProperties;
  }
  /** @return SheetsChartProperties */
  public function getSheetsChartProperties()
  {
    return $this->sheetsChartProperties;
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

class SheetsChartProperties extends \Google\Model
{
  /** @var ImageProperties */
  public $chartImageProperties;
  protected $chartImagePropertiesType = ImageProperties::class;
  protected $chartImagePropertiesDataType = '';
  /** @param ImageProperties */
  public function setChartImageProperties(ImageProperties $chartImageProperties)
  {
    $this->chartImageProperties = $chartImageProperties;
  }
  /** @return ImageProperties */
  public function getChartImageProperties()
  {
    return $this->chartImageProperties;
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

class SlideProperties extends \Google\Model
{
  /** @var bool */
  public $isSkipped;
  /** @var string */
  public $layoutObjectId;
  /** @var string */
  public $masterObjectId;
  /** @var Page */
  public $notesPage;
  protected $notesPageType = Page::class;
  protected $notesPageDataType = '';
  /** @param bool */
  public function setIsSkipped($isSkipped)
  {
    $this->isSkipped = $isSkipped;
  }
  /** @return bool */
  public function getIsSkipped()
  {
    return $this->isSkipped;
  }
  /** @param string */
  public function setLayoutObjectId($layoutObjectId)
  {
    $this->layoutObjectId = $layoutObjectId;
  }
  /** @return string */
  public function getLayoutObjectId()
  {
    return $this->layoutObjectId;
  }
  /** @param string */
  public function setMasterObjectId($masterObjectId)
  {
    $this->masterObjectId = $masterObjectId;
  }
  /** @return string */
  public function getMasterObjectId()
  {
    return $this->masterObjectId;
  }
  /** @param Page */
  public function setNotesPage(Page $notesPage)
  {
    $this->notesPage = $notesPage;
  }
  /** @return Page */
  public function getNotesPage()
  {
    return $this->notesPage;
  }
}

class SlidesList extends \Google\Model
{
  /** @var string */
  public $listId;
  /** @var NestingLevel[] */
  public $nestingLevel;
  protected $nestingLevelType = NestingLevel::class;
  protected $nestingLevelDataType = 'map';
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
  /** @param NestingLevel[] */
  public function setNestingLevel($nestingLevel)
  {
    $this->nestingLevel = $nestingLevel;
  }
  /** @return NestingLevel[] */
  public function getNestingLevel()
  {
    return $this->nestingLevel;
  }
}

class SolidFill extends \Google\Model
{
  /** @var float */
  public $alpha;
  /** @var OpaqueColor */
  public $color;
  protected $colorType = OpaqueColor::class;
  protected $colorDataType = '';
  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param OpaqueColor */
  public function setColor(OpaqueColor $color)
  {
    $this->color = $color;
  }
  /** @return OpaqueColor */
  public function getColor()
  {
    return $this->color;
  }
}

class StretchedPictureFill extends \Google\Model
{
  /** @var string */
  public $contentUrl;
  /** @var Size */
  public $size;
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  /** @param string */
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
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

class Table extends \Google\Collection
{
  /** @var int */
  public $columns;
  /** @var TableBorderRow[] */
  public $horizontalBorderRows;
  /** @var int */
  public $rows;
  /** @var TableColumnProperties[] */
  public $tableColumns;
  /** @var TableRow[] */
  public $tableRows;
  /** @var TableBorderRow[] */
  public $verticalBorderRows;
  protected $collection_key = 'verticalBorderRows';
  protected $horizontalBorderRowsType = TableBorderRow::class;
  protected $horizontalBorderRowsDataType = 'array';
  protected $tableColumnsType = TableColumnProperties::class;
  protected $tableColumnsDataType = 'array';
  protected $tableRowsType = TableRow::class;
  protected $tableRowsDataType = 'array';
  protected $verticalBorderRowsType = TableBorderRow::class;
  protected $verticalBorderRowsDataType = 'array';
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
  /** @param TableBorderRow[] */
  public function setHorizontalBorderRows($horizontalBorderRows)
  {
    $this->horizontalBorderRows = $horizontalBorderRows;
  }
  /** @return TableBorderRow[] */
  public function getHorizontalBorderRows()
  {
    return $this->horizontalBorderRows;
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
  /** @param TableColumnProperties[] */
  public function setTableColumns($tableColumns)
  {
    $this->tableColumns = $tableColumns;
  }
  /** @return TableColumnProperties[] */
  public function getTableColumns()
  {
    return $this->tableColumns;
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
  /** @param TableBorderRow[] */
  public function setVerticalBorderRows($verticalBorderRows)
  {
    $this->verticalBorderRows = $verticalBorderRows;
  }
  /** @return TableBorderRow[] */
  public function getVerticalBorderRows()
  {
    return $this->verticalBorderRows;
  }
}

class TableBorderCell extends \Google\Model
{
  /** @var TableCellLocation */
  public $location;
  /** @var TableBorderProperties */
  public $tableBorderProperties;
  protected $locationType = TableCellLocation::class;
  protected $locationDataType = '';
  protected $tableBorderPropertiesType = TableBorderProperties::class;
  protected $tableBorderPropertiesDataType = '';
  /** @param TableCellLocation */
  public function setLocation(TableCellLocation $location)
  {
    $this->location = $location;
  }
  /** @return TableCellLocation */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param TableBorderProperties */
  public function setTableBorderProperties(TableBorderProperties $tableBorderProperties)
  {
    $this->tableBorderProperties = $tableBorderProperties;
  }
  /** @return TableBorderProperties */
  public function getTableBorderProperties()
  {
    return $this->tableBorderProperties;
  }
}

class TableBorderFill extends \Google\Model
{
  /** @var SolidFill */
  public $solidFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
}

class TableBorderProperties extends \Google\Model
{
  /** @var string */
  public $dashStyle;
  /** @var TableBorderFill */
  public $tableBorderFill;
  /** @var Dimension */
  public $weight;
  protected $tableBorderFillType = TableBorderFill::class;
  protected $tableBorderFillDataType = '';
  protected $weightType = Dimension::class;
  protected $weightDataType = '';
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
  /** @param TableBorderFill */
  public function setTableBorderFill(TableBorderFill $tableBorderFill)
  {
    $this->tableBorderFill = $tableBorderFill;
  }
  /** @return TableBorderFill */
  public function getTableBorderFill()
  {
    return $this->tableBorderFill;
  }
  /** @param Dimension */
  public function setWeight(Dimension $weight)
  {
    $this->weight = $weight;
  }
  /** @return Dimension */
  public function getWeight()
  {
    return $this->weight;
  }
}

class TableBorderRow extends \Google\Collection
{
  /** @var TableBorderCell[] */
  public $tableBorderCells;
  protected $collection_key = 'tableBorderCells';
  protected $tableBorderCellsType = TableBorderCell::class;
  protected $tableBorderCellsDataType = 'array';
  /** @param TableBorderCell[] */
  public function setTableBorderCells($tableBorderCells)
  {
    $this->tableBorderCells = $tableBorderCells;
  }
  /** @return TableBorderCell[] */
  public function getTableBorderCells()
  {
    return $this->tableBorderCells;
  }
}

class TableCell extends \Google\Model
{
  /** @var int */
  public $columnSpan;
  /** @var TableCellLocation */
  public $location;
  /** @var int */
  public $rowSpan;
  /** @var TableCellProperties */
  public $tableCellProperties;
  /** @var TextContent */
  public $text;
  protected $locationType = TableCellLocation::class;
  protected $locationDataType = '';
  protected $tableCellPropertiesType = TableCellProperties::class;
  protected $tableCellPropertiesDataType = '';
  protected $textType = TextContent::class;
  protected $textDataType = '';
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
  /** @param TableCellLocation */
  public function setLocation(TableCellLocation $location)
  {
    $this->location = $location;
  }
  /** @return TableCellLocation */
  public function getLocation()
  {
    return $this->location;
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
  /** @param TableCellProperties */
  public function setTableCellProperties(TableCellProperties $tableCellProperties)
  {
    $this->tableCellProperties = $tableCellProperties;
  }
  /** @return TableCellProperties */
  public function getTableCellProperties()
  {
    return $this->tableCellProperties;
  }
  /** @param TextContent */
  public function setText(TextContent $text)
  {
    $this->text = $text;
  }
  /** @return TextContent */
  public function getText()
  {
    return $this->text;
  }
}

class TableCellBackgroundFill extends \Google\Model
{
  /** @var string */
  public $propertyState;
  /** @var SolidFill */
  public $solidFill;
  protected $solidFillType = SolidFill::class;
  protected $solidFillDataType = '';
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
  /** @param SolidFill */
  public function setSolidFill(SolidFill $solidFill)
  {
    $this->solidFill = $solidFill;
  }
  /** @return SolidFill */
  public function getSolidFill()
  {
    return $this->solidFill;
  }
}

class TableCellLocation extends \Google\Model
{
  /** @var int */
  public $columnIndex;
  /** @var int */
  public $rowIndex;

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
}

class TableCellProperties extends \Google\Model
{
  /** @var string */
  public $contentAlignment;
  /** @var TableCellBackgroundFill */
  public $tableCellBackgroundFill;
  protected $tableCellBackgroundFillType = TableCellBackgroundFill::class;
  protected $tableCellBackgroundFillDataType = '';
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
  /** @param TableCellBackgroundFill */
  public function setTableCellBackgroundFill(TableCellBackgroundFill $tableCellBackgroundFill)
  {
    $this->tableCellBackgroundFill = $tableCellBackgroundFill;
  }
  /** @return TableCellBackgroundFill */
  public function getTableCellBackgroundFill()
  {
    return $this->tableCellBackgroundFill;
  }
}

class TableColumnProperties extends \Google\Model
{
  /** @var Dimension */
  public $columnWidth;
  protected $columnWidthType = Dimension::class;
  protected $columnWidthDataType = '';
  /** @param Dimension */
  public function setColumnWidth(Dimension $columnWidth)
  {
    $this->columnWidth = $columnWidth;
  }
  /** @return Dimension */
  public function getColumnWidth()
  {
    return $this->columnWidth;
  }
}

class TableRange extends \Google\Model
{
  /** @var int */
  public $columnSpan;
  /** @var TableCellLocation */
  public $location;
  /** @var int */
  public $rowSpan;
  protected $locationType = TableCellLocation::class;
  protected $locationDataType = '';
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
  /** @param TableCellLocation */
  public function setLocation(TableCellLocation $location)
  {
    $this->location = $location;
  }
  /** @return TableCellLocation */
  public function getLocation()
  {
    return $this->location;
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

class TableRow extends \Google\Collection
{
  /** @var Dimension */
  public $rowHeight;
  /** @var TableCell[] */
  public $tableCells;
  /** @var TableRowProperties */
  public $tableRowProperties;
  protected $collection_key = 'tableCells';
  protected $rowHeightType = Dimension::class;
  protected $rowHeightDataType = '';
  protected $tableCellsType = TableCell::class;
  protected $tableCellsDataType = 'array';
  protected $tableRowPropertiesType = TableRowProperties::class;
  protected $tableRowPropertiesDataType = '';
  /** @param Dimension */
  public function setRowHeight(Dimension $rowHeight)
  {
    $this->rowHeight = $rowHeight;
  }
  /** @return Dimension */
  public function getRowHeight()
  {
    return $this->rowHeight;
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
  /** @param TableRowProperties */
  public function setTableRowProperties(TableRowProperties $tableRowProperties)
  {
    $this->tableRowProperties = $tableRowProperties;
  }
  /** @return TableRowProperties */
  public function getTableRowProperties()
  {
    return $this->tableRowProperties;
  }
}

class TableRowProperties extends \Google\Model
{
  /** @var Dimension */
  public $minRowHeight;
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
}

class TextContent extends \Google\Collection
{
  /** @var SlidesList[] */
  public $lists;
  /** @var TextElement[] */
  public $textElements;
  protected $collection_key = 'textElements';
  protected $listsType = SlidesList::class;
  protected $listsDataType = 'map';
  protected $textElementsType = TextElement::class;
  protected $textElementsDataType = 'array';
  /** @param SlidesList[] */
  public function setLists($lists)
  {
    $this->lists = $lists;
  }
  /** @return SlidesList[] */
  public function getLists()
  {
    return $this->lists;
  }
  /** @param TextElement[] */
  public function setTextElements($textElements)
  {
    $this->textElements = $textElements;
  }
  /** @return TextElement[] */
  public function getTextElements()
  {
    return $this->textElements;
  }
}

class TextElement extends \Google\Model
{
  /** @var AutoText */
  public $autoText;
  /** @var int */
  public $endIndex;
  /** @var ParagraphMarker */
  public $paragraphMarker;
  /** @var int */
  public $startIndex;
  /** @var TextRun */
  public $textRun;
  protected $autoTextType = AutoText::class;
  protected $autoTextDataType = '';
  protected $paragraphMarkerType = ParagraphMarker::class;
  protected $paragraphMarkerDataType = '';
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
  /** @param ParagraphMarker */
  public function setParagraphMarker(ParagraphMarker $paragraphMarker)
  {
    $this->paragraphMarker = $paragraphMarker;
  }
  /** @return ParagraphMarker */
  public function getParagraphMarker()
  {
    return $this->paragraphMarker;
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

class TextRun extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var TextStyle */
  public $style;
  protected $styleType = TextStyle::class;
  protected $styleDataType = '';
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
  /** @param TextStyle */
  public function setStyle(TextStyle $style)
  {
    $this->style = $style;
  }
  /** @return TextStyle */
  public function getStyle()
  {
    return $this->style;
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
  /** @var string */
  public $fontFamily;
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

class ThemeColorPair extends \Google\Model
{
  /** @var RgbColor */
  public $color;
  /** @var string */
  public $type;
  protected $colorType = RgbColor::class;
  protected $colorDataType = '';
  /** @param RgbColor */
  public function setColor(RgbColor $color)
  {
    $this->color = $color;
  }
  /** @return RgbColor */
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
}

class Thumbnail extends \Google\Model
{
  /** @var string */
  public $contentUrl;
  /** @var int */
  public $height;
  /** @var int */
  public $width;

  /** @param string */
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class UngroupObjectsRequest extends \Google\Collection
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

class UnmergeTableCellsRequest extends \Google\Model
{
  /** @var string */
  public $objectId;
  /** @var TableRange */
  public $tableRange;
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
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

class UpdateImagePropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var ImageProperties */
  public $imageProperties;
  /** @var string */
  public $objectId;
  protected $imagePropertiesType = ImageProperties::class;
  protected $imagePropertiesDataType = '';
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

class UpdateLineCategoryRequest extends \Google\Model
{
  /** @var string */
  public $lineCategory;
  /** @var string */
  public $objectId;

  /** @param string */
  public function setLineCategory($lineCategory)
  {
    $this->lineCategory = $lineCategory;
  }
  /** @return string */
  public function getLineCategory()
  {
    return $this->lineCategory;
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
}

class UpdateLinePropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var LineProperties */
  public $lineProperties;
  /** @var string */
  public $objectId;
  protected $linePropertiesType = LineProperties::class;
  protected $linePropertiesDataType = '';
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
  /** @param LineProperties */
  public function setLineProperties(LineProperties $lineProperties)
  {
    $this->lineProperties = $lineProperties;
  }
  /** @return LineProperties */
  public function getLineProperties()
  {
    return $this->lineProperties;
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
}

class UpdatePageElementAltTextRequest extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $objectId;
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
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
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

class UpdatePageElementTransformRequest extends \Google\Model
{
  /** @var string */
  public $applyMode;
  /** @var string */
  public $objectId;
  /** @var AffineTransform */
  public $transform;
  protected $transformType = AffineTransform::class;
  protected $transformDataType = '';
  /** @param string */
  public function setApplyMode($applyMode)
  {
    $this->applyMode = $applyMode;
  }
  /** @return string */
  public function getApplyMode()
  {
    return $this->applyMode;
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
  /** @param AffineTransform */
  public function setTransform(AffineTransform $transform)
  {
    $this->transform = $transform;
  }
  /** @return AffineTransform */
  public function getTransform()
  {
    return $this->transform;
  }
}

class UpdatePageElementsZOrderRequest extends \Google\Collection
{
  /** @var string */
  public $operation;
  /** @var string[] */
  public $pageElementObjectIds;
  protected $collection_key = 'pageElementObjectIds';
  /** @param string */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param string[] */
  public function setPageElementObjectIds($pageElementObjectIds)
  {
    $this->pageElementObjectIds = $pageElementObjectIds;
  }
  /** @return string[] */
  public function getPageElementObjectIds()
  {
    return $this->pageElementObjectIds;
  }
}

class UpdatePagePropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var PageProperties */
  public $pageProperties;
  protected $pagePropertiesType = PageProperties::class;
  protected $pagePropertiesDataType = '';
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
  /** @param PageProperties */
  public function setPageProperties(PageProperties $pageProperties)
  {
    $this->pageProperties = $pageProperties;
  }
  /** @return PageProperties */
  public function getPageProperties()
  {
    return $this->pageProperties;
  }
}

class UpdateParagraphStyleRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var ParagraphStyle */
  public $style;
  /** @var Range */
  public $textRange;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  protected $styleType = ParagraphStyle::class;
  protected $styleDataType = '';
  protected $textRangeType = Range::class;
  protected $textRangeDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
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
  /** @param ParagraphStyle */
  public function setStyle(ParagraphStyle $style)
  {
    $this->style = $style;
  }
  /** @return ParagraphStyle */
  public function getStyle()
  {
    return $this->style;
  }
  /** @param Range */
  public function setTextRange(Range $textRange)
  {
    $this->textRange = $textRange;
  }
  /** @return Range */
  public function getTextRange()
  {
    return $this->textRange;
  }
}

class UpdateShapePropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var ShapeProperties */
  public $shapeProperties;
  protected $shapePropertiesType = ShapeProperties::class;
  protected $shapePropertiesDataType = '';
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
  /** @param ShapeProperties */
  public function setShapeProperties(ShapeProperties $shapeProperties)
  {
    $this->shapeProperties = $shapeProperties;
  }
  /** @return ShapeProperties */
  public function getShapeProperties()
  {
    return $this->shapeProperties;
  }
}

class UpdateSlidePropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var SlideProperties */
  public $slideProperties;
  protected $slidePropertiesType = SlideProperties::class;
  protected $slidePropertiesDataType = '';
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
  /** @param SlideProperties */
  public function setSlideProperties(SlideProperties $slideProperties)
  {
    $this->slideProperties = $slideProperties;
  }
  /** @return SlideProperties */
  public function getSlideProperties()
  {
    return $this->slideProperties;
  }
}

class UpdateSlidesPositionRequest extends \Google\Collection
{
  /** @var int */
  public $insertionIndex;
  /** @var string[] */
  public $slideObjectIds;
  protected $collection_key = 'slideObjectIds';
  /** @param int */
  public function setInsertionIndex($insertionIndex)
  {
    $this->insertionIndex = $insertionIndex;
  }
  /** @return int */
  public function getInsertionIndex()
  {
    return $this->insertionIndex;
  }
  /** @param string[] */
  public function setSlideObjectIds($slideObjectIds)
  {
    $this->slideObjectIds = $slideObjectIds;
  }
  /** @return string[] */
  public function getSlideObjectIds()
  {
    return $this->slideObjectIds;
  }
}

class UpdateTableBorderPropertiesRequest extends \Google\Model
{
  /** @var string */
  public $borderPosition;
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var TableBorderProperties */
  public $tableBorderProperties;
  /** @var TableRange */
  public $tableRange;
  protected $tableBorderPropertiesType = TableBorderProperties::class;
  protected $tableBorderPropertiesDataType = '';
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
  /** @param string */
  public function setBorderPosition($borderPosition)
  {
    $this->borderPosition = $borderPosition;
  }
  /** @return string */
  public function getBorderPosition()
  {
    return $this->borderPosition;
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
  /** @param TableBorderProperties */
  public function setTableBorderProperties(TableBorderProperties $tableBorderProperties)
  {
    $this->tableBorderProperties = $tableBorderProperties;
  }
  /** @return TableBorderProperties */
  public function getTableBorderProperties()
  {
    return $this->tableBorderProperties;
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
}

class UpdateTableCellPropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var TableCellProperties */
  public $tableCellProperties;
  /** @var TableRange */
  public $tableRange;
  protected $tableCellPropertiesType = TableCellProperties::class;
  protected $tableCellPropertiesDataType = '';
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
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
  /** @param TableCellProperties */
  public function setTableCellProperties(TableCellProperties $tableCellProperties)
  {
    $this->tableCellProperties = $tableCellProperties;
  }
  /** @return TableCellProperties */
  public function getTableCellProperties()
  {
    return $this->tableCellProperties;
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
}

class UpdateTableColumnPropertiesRequest extends \Google\Collection
{
  /** @var int[] */
  public $columnIndices;
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var TableColumnProperties */
  public $tableColumnProperties;
  protected $collection_key = 'columnIndices';
  protected $tableColumnPropertiesType = TableColumnProperties::class;
  protected $tableColumnPropertiesDataType = '';
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
}

class UpdateTableRowPropertiesRequest extends \Google\Collection
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var int[] */
  public $rowIndices;
  /** @var TableRowProperties */
  public $tableRowProperties;
  protected $collection_key = 'rowIndices';
  protected $tableRowPropertiesType = TableRowProperties::class;
  protected $tableRowPropertiesDataType = '';
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
  /** @param TableRowProperties */
  public function setTableRowProperties(TableRowProperties $tableRowProperties)
  {
    $this->tableRowProperties = $tableRowProperties;
  }
  /** @return TableRowProperties */
  public function getTableRowProperties()
  {
    return $this->tableRowProperties;
  }
}

class UpdateTextStyleRequest extends \Google\Model
{
  /** @var TableCellLocation */
  public $cellLocation;
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var TextStyle */
  public $style;
  /** @var Range */
  public $textRange;
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  protected $styleType = TextStyle::class;
  protected $styleDataType = '';
  protected $textRangeType = Range::class;
  protected $textRangeDataType = '';
  /** @param TableCellLocation */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /** @return TableCellLocation */
  public function getCellLocation()
  {
    return $this->cellLocation;
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
  /** @param TextStyle */
  public function setStyle(TextStyle $style)
  {
    $this->style = $style;
  }
  /** @return TextStyle */
  public function getStyle()
  {
    return $this->style;
  }
  /** @param Range */
  public function setTextRange(Range $textRange)
  {
    $this->textRange = $textRange;
  }
  /** @return Range */
  public function getTextRange()
  {
    return $this->textRange;
  }
}

class UpdateVideoPropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var string */
  public $objectId;
  /** @var VideoProperties */
  public $videoProperties;
  protected $videoPropertiesType = VideoProperties::class;
  protected $videoPropertiesDataType = '';
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
  /** @param VideoProperties */
  public function setVideoProperties(VideoProperties $videoProperties)
  {
    $this->videoProperties = $videoProperties;
  }
  /** @return VideoProperties */
  public function getVideoProperties()
  {
    return $this->videoProperties;
  }
}

class Video extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $source;
  /** @var string */
  public $url;
  /** @var VideoProperties */
  public $videoProperties;
  protected $videoPropertiesType = VideoProperties::class;
  protected $videoPropertiesDataType = '';
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
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
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
  /** @param VideoProperties */
  public function setVideoProperties(VideoProperties $videoProperties)
  {
    $this->videoProperties = $videoProperties;
  }
  /** @return VideoProperties */
  public function getVideoProperties()
  {
    return $this->videoProperties;
  }
}

class VideoProperties extends \Google\Model
{
  /** @var bool */
  public $autoPlay;
  /** @var string */
  public $end;
  /** @var bool */
  public $mute;
  /** @var Outline */
  public $outline;
  /** @var string */
  public $start;
  protected $outlineType = Outline::class;
  protected $outlineDataType = '';
  /** @param bool */
  public function setAutoPlay($autoPlay)
  {
    $this->autoPlay = $autoPlay;
  }
  /** @return bool */
  public function getAutoPlay()
  {
    return $this->autoPlay;
  }
  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param bool */
  public function setMute($mute)
  {
    $this->mute = $mute;
  }
  /** @return bool */
  public function getMute()
  {
    return $this->mute;
  }
  /** @param Outline */
  public function setOutline(Outline $outline)
  {
    $this->outline = $outline;
  }
  /** @return Outline */
  public function getOutline()
  {
    return $this->outline;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
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

class WordArt extends \Google\Model
{
  /** @var string */
  public $renderedText;

  /** @param string */
  public function setRenderedText($renderedText)
  {
    $this->renderedText = $renderedText;
  }
  /** @return string */
  public function getRenderedText()
  {
    return $this->renderedText;
  }
}

class WriteControl extends \Google\Model
{
  /** @var string */
  public $requiredRevisionId;

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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AffineTransform::class, 'Google_Service_Slides_AffineTransform');
class_alias(AutoText::class, 'Google_Service_Slides_AutoText');
class_alias(Autofit::class, 'Google_Service_Slides_Autofit');
class_alias(BatchUpdatePresentationRequest::class, 'Google_Service_Slides_BatchUpdatePresentationRequest');
class_alias(BatchUpdatePresentationResponse::class, 'Google_Service_Slides_BatchUpdatePresentationResponse');
class_alias(Bullet::class, 'Google_Service_Slides_Bullet');
class_alias(ColorScheme::class, 'Google_Service_Slides_ColorScheme');
class_alias(ColorStop::class, 'Google_Service_Slides_ColorStop');
class_alias(CreateImageRequest::class, 'Google_Service_Slides_CreateImageRequest');
class_alias(CreateImageResponse::class, 'Google_Service_Slides_CreateImageResponse');
class_alias(CreateLineRequest::class, 'Google_Service_Slides_CreateLineRequest');
class_alias(CreateLineResponse::class, 'Google_Service_Slides_CreateLineResponse');
class_alias(CreateParagraphBulletsRequest::class, 'Google_Service_Slides_CreateParagraphBulletsRequest');
class_alias(CreateShapeRequest::class, 'Google_Service_Slides_CreateShapeRequest');
class_alias(CreateShapeResponse::class, 'Google_Service_Slides_CreateShapeResponse');
class_alias(CreateSheetsChartRequest::class, 'Google_Service_Slides_CreateSheetsChartRequest');
class_alias(CreateSheetsChartResponse::class, 'Google_Service_Slides_CreateSheetsChartResponse');
class_alias(CreateSlideRequest::class, 'Google_Service_Slides_CreateSlideRequest');
class_alias(CreateSlideResponse::class, 'Google_Service_Slides_CreateSlideResponse');
class_alias(CreateTableRequest::class, 'Google_Service_Slides_CreateTableRequest');
class_alias(CreateTableResponse::class, 'Google_Service_Slides_CreateTableResponse');
class_alias(CreateVideoRequest::class, 'Google_Service_Slides_CreateVideoRequest');
class_alias(CreateVideoResponse::class, 'Google_Service_Slides_CreateVideoResponse');
class_alias(CropProperties::class, 'Google_Service_Slides_CropProperties');
class_alias(DeleteObjectRequest::class, 'Google_Service_Slides_DeleteObjectRequest');
class_alias(DeleteParagraphBulletsRequest::class, 'Google_Service_Slides_DeleteParagraphBulletsRequest');
class_alias(DeleteTableColumnRequest::class, 'Google_Service_Slides_DeleteTableColumnRequest');
class_alias(DeleteTableRowRequest::class, 'Google_Service_Slides_DeleteTableRowRequest');
class_alias(DeleteTextRequest::class, 'Google_Service_Slides_DeleteTextRequest');
class_alias(Dimension::class, 'Google_Service_Slides_Dimension');
class_alias(DuplicateObjectRequest::class, 'Google_Service_Slides_DuplicateObjectRequest');
class_alias(DuplicateObjectResponse::class, 'Google_Service_Slides_DuplicateObjectResponse');
class_alias(Group::class, 'Google_Service_Slides_Group');
class_alias(GroupObjectsRequest::class, 'Google_Service_Slides_GroupObjectsRequest');
class_alias(GroupObjectsResponse::class, 'Google_Service_Slides_GroupObjectsResponse');
class_alias(Image::class, 'Google_Service_Slides_Image');
class_alias(ImageProperties::class, 'Google_Service_Slides_ImageProperties');
class_alias(InsertTableColumnsRequest::class, 'Google_Service_Slides_InsertTableColumnsRequest');
class_alias(InsertTableRowsRequest::class, 'Google_Service_Slides_InsertTableRowsRequest');
class_alias(InsertTextRequest::class, 'Google_Service_Slides_InsertTextRequest');
class_alias(LayoutPlaceholderIdMapping::class, 'Google_Service_Slides_LayoutPlaceholderIdMapping');
class_alias(LayoutProperties::class, 'Google_Service_Slides_LayoutProperties');
class_alias(LayoutReference::class, 'Google_Service_Slides_LayoutReference');
class_alias(Line::class, 'Google_Service_Slides_Line');
class_alias(LineConnection::class, 'Google_Service_Slides_LineConnection');
class_alias(LineFill::class, 'Google_Service_Slides_LineFill');
class_alias(LineProperties::class, 'Google_Service_Slides_LineProperties');
class_alias(Link::class, 'Google_Service_Slides_Link');
class_alias(MasterProperties::class, 'Google_Service_Slides_MasterProperties');
class_alias(MergeTableCellsRequest::class, 'Google_Service_Slides_MergeTableCellsRequest');
class_alias(NestingLevel::class, 'Google_Service_Slides_NestingLevel');
class_alias(NotesProperties::class, 'Google_Service_Slides_NotesProperties');
class_alias(OpaqueColor::class, 'Google_Service_Slides_OpaqueColor');
class_alias(OptionalColor::class, 'Google_Service_Slides_OptionalColor');
class_alias(Outline::class, 'Google_Service_Slides_Outline');
class_alias(OutlineFill::class, 'Google_Service_Slides_OutlineFill');
class_alias(Page::class, 'Google_Service_Slides_Page');
class_alias(PageBackgroundFill::class, 'Google_Service_Slides_PageBackgroundFill');
class_alias(PageElement::class, 'Google_Service_Slides_PageElement');
class_alias(PageElementProperties::class, 'Google_Service_Slides_PageElementProperties');
class_alias(PageProperties::class, 'Google_Service_Slides_PageProperties');
class_alias(ParagraphMarker::class, 'Google_Service_Slides_ParagraphMarker');
class_alias(ParagraphStyle::class, 'Google_Service_Slides_ParagraphStyle');
class_alias(Placeholder::class, 'Google_Service_Slides_Placeholder');
class_alias(Presentation::class, 'Google_Service_Slides_Presentation');
class_alias(Range::class, 'Google_Service_Slides_Range');
class_alias(Recolor::class, 'Google_Service_Slides_Recolor');
class_alias(RefreshSheetsChartRequest::class, 'Google_Service_Slides_RefreshSheetsChartRequest');
class_alias(ReplaceAllShapesWithImageRequest::class, 'Google_Service_Slides_ReplaceAllShapesWithImageRequest');
class_alias(ReplaceAllShapesWithImageResponse::class, 'Google_Service_Slides_ReplaceAllShapesWithImageResponse');
class_alias(ReplaceAllShapesWithSheetsChartRequest::class, 'Google_Service_Slides_ReplaceAllShapesWithSheetsChartRequest');
class_alias(ReplaceAllShapesWithSheetsChartResponse::class, 'Google_Service_Slides_ReplaceAllShapesWithSheetsChartResponse');
class_alias(ReplaceAllTextRequest::class, 'Google_Service_Slides_ReplaceAllTextRequest');
class_alias(ReplaceAllTextResponse::class, 'Google_Service_Slides_ReplaceAllTextResponse');
class_alias(ReplaceImageRequest::class, 'Google_Service_Slides_ReplaceImageRequest');
class_alias(Request::class, 'Google_Service_Slides_Request');
class_alias(RerouteLineRequest::class, 'Google_Service_Slides_RerouteLineRequest');
class_alias(Response::class, 'Google_Service_Slides_Response');
class_alias(RgbColor::class, 'Google_Service_Slides_RgbColor');
class_alias(Shadow::class, 'Google_Service_Slides_Shadow');
class_alias(Shape::class, 'Google_Service_Slides_Shape');
class_alias(ShapeBackgroundFill::class, 'Google_Service_Slides_ShapeBackgroundFill');
class_alias(ShapeProperties::class, 'Google_Service_Slides_ShapeProperties');
class_alias(SheetsChart::class, 'Google_Service_Slides_SheetsChart');
class_alias(SheetsChartProperties::class, 'Google_Service_Slides_SheetsChartProperties');
class_alias(Size::class, 'Google_Service_Slides_Size');
class_alias(SlideProperties::class, 'Google_Service_Slides_SlideProperties');
class_alias(SlidesList::class, 'Google_Service_Slides_SlidesList');
class_alias(SolidFill::class, 'Google_Service_Slides_SolidFill');
class_alias(StretchedPictureFill::class, 'Google_Service_Slides_StretchedPictureFill');
class_alias(SubstringMatchCriteria::class, 'Google_Service_Slides_SubstringMatchCriteria');
class_alias(Table::class, 'Google_Service_Slides_Table');
class_alias(TableBorderCell::class, 'Google_Service_Slides_TableBorderCell');
class_alias(TableBorderFill::class, 'Google_Service_Slides_TableBorderFill');
class_alias(TableBorderProperties::class, 'Google_Service_Slides_TableBorderProperties');
class_alias(TableBorderRow::class, 'Google_Service_Slides_TableBorderRow');
class_alias(TableCell::class, 'Google_Service_Slides_TableCell');
class_alias(TableCellBackgroundFill::class, 'Google_Service_Slides_TableCellBackgroundFill');
class_alias(TableCellLocation::class, 'Google_Service_Slides_TableCellLocation');
class_alias(TableCellProperties::class, 'Google_Service_Slides_TableCellProperties');
class_alias(TableColumnProperties::class, 'Google_Service_Slides_TableColumnProperties');
class_alias(TableRange::class, 'Google_Service_Slides_TableRange');
class_alias(TableRow::class, 'Google_Service_Slides_TableRow');
class_alias(TableRowProperties::class, 'Google_Service_Slides_TableRowProperties');
class_alias(TextContent::class, 'Google_Service_Slides_TextContent');
class_alias(TextElement::class, 'Google_Service_Slides_TextElement');
class_alias(TextRun::class, 'Google_Service_Slides_TextRun');
class_alias(TextStyle::class, 'Google_Service_Slides_TextStyle');
class_alias(ThemeColorPair::class, 'Google_Service_Slides_ThemeColorPair');
class_alias(Thumbnail::class, 'Google_Service_Slides_Thumbnail');
class_alias(UngroupObjectsRequest::class, 'Google_Service_Slides_UngroupObjectsRequest');
class_alias(UnmergeTableCellsRequest::class, 'Google_Service_Slides_UnmergeTableCellsRequest');
class_alias(UpdateImagePropertiesRequest::class, 'Google_Service_Slides_UpdateImagePropertiesRequest');
class_alias(UpdateLineCategoryRequest::class, 'Google_Service_Slides_UpdateLineCategoryRequest');
class_alias(UpdateLinePropertiesRequest::class, 'Google_Service_Slides_UpdateLinePropertiesRequest');
class_alias(UpdatePageElementAltTextRequest::class, 'Google_Service_Slides_UpdatePageElementAltTextRequest');
class_alias(UpdatePageElementTransformRequest::class, 'Google_Service_Slides_UpdatePageElementTransformRequest');
class_alias(UpdatePageElementsZOrderRequest::class, 'Google_Service_Slides_UpdatePageElementsZOrderRequest');
class_alias(UpdatePagePropertiesRequest::class, 'Google_Service_Slides_UpdatePagePropertiesRequest');
class_alias(UpdateParagraphStyleRequest::class, 'Google_Service_Slides_UpdateParagraphStyleRequest');
class_alias(UpdateShapePropertiesRequest::class, 'Google_Service_Slides_UpdateShapePropertiesRequest');
class_alias(UpdateSlidePropertiesRequest::class, 'Google_Service_Slides_UpdateSlidePropertiesRequest');
class_alias(UpdateSlidesPositionRequest::class, 'Google_Service_Slides_UpdateSlidesPositionRequest');
class_alias(UpdateTableBorderPropertiesRequest::class, 'Google_Service_Slides_UpdateTableBorderPropertiesRequest');
class_alias(UpdateTableCellPropertiesRequest::class, 'Google_Service_Slides_UpdateTableCellPropertiesRequest');
class_alias(UpdateTableColumnPropertiesRequest::class, 'Google_Service_Slides_UpdateTableColumnPropertiesRequest');
class_alias(UpdateTableRowPropertiesRequest::class, 'Google_Service_Slides_UpdateTableRowPropertiesRequest');
class_alias(UpdateTextStyleRequest::class, 'Google_Service_Slides_UpdateTextStyleRequest');
class_alias(UpdateVideoPropertiesRequest::class, 'Google_Service_Slides_UpdateVideoPropertiesRequest');
class_alias(Video::class, 'Google_Service_Slides_Video');
class_alias(VideoProperties::class, 'Google_Service_Slides_VideoProperties');
class_alias(WeightedFontFamily::class, 'Google_Service_Slides_WeightedFontFamily');
class_alias(WordArt::class, 'Google_Service_Slides_WordArt');
class_alias(WriteControl::class, 'Google_Service_Slides_WriteControl');
