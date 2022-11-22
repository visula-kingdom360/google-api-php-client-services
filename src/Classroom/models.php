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

namespace Google\Service\Classroom;

class Announcement extends \Google\Collection
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $assigneeMode;
  /** @var string */
  public $courseId;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $creatorUserId;
  /** @var string */
  public $id;
  /** @var IndividualStudentsOptions */
  public $individualStudentsOptions;
  /** @var Material[] */
  public $materials;
  /** @var string */
  public $scheduledTime;
  /** @var string */
  public $state;
  /** @var string */
  public $text;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'materials';
  protected $individualStudentsOptionsType = IndividualStudentsOptions::class;
  protected $individualStudentsOptionsDataType = '';
  protected $materialsType = Material::class;
  protected $materialsDataType = 'array';
  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
  }
  /** @param string */
  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }
  /** @return string */
  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return string */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
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
  /** @param IndividualStudentsOptions */
  public function setIndividualStudentsOptions(IndividualStudentsOptions $individualStudentsOptions)
  {
    $this->individualStudentsOptions = $individualStudentsOptions;
  }
  /** @return IndividualStudentsOptions */
  public function getIndividualStudentsOptions()
  {
    return $this->individualStudentsOptions;
  }
  /** @param Material[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return Material[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param string */
  public function setScheduledTime($scheduledTime)
  {
    $this->scheduledTime = $scheduledTime;
  }
  /** @return string */
  public function getScheduledTime()
  {
    return $this->scheduledTime;
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

class Assignment extends \Google\Model
{
  /** @var DriveFolder */
  public $studentWorkFolder;
  protected $studentWorkFolderType = DriveFolder::class;
  protected $studentWorkFolderDataType = '';
  /** @param DriveFolder */
  public function setStudentWorkFolder(DriveFolder $studentWorkFolder)
  {
    $this->studentWorkFolder = $studentWorkFolder;
  }
  /** @return DriveFolder */
  public function getStudentWorkFolder()
  {
    return $this->studentWorkFolder;
  }
}

class AssignmentSubmission extends \Google\Collection
{
  /** @var Attachment[] */
  public $attachments;
  protected $collection_key = 'attachments';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  /** @param Attachment[] */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /** @return Attachment[] */
  public function getAttachments()
  {
    return $this->attachments;
  }
}

class Attachment extends \Google\Model
{
  /** @var DriveFile */
  public $driveFile;
  /** @var Form */
  public $form;
  /** @var Link */
  public $link;
  /** @var YouTubeVideo */
  public $youTubeVideo;
  protected $driveFileType = DriveFile::class;
  protected $driveFileDataType = '';
  protected $formType = Form::class;
  protected $formDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $youTubeVideoType = YouTubeVideo::class;
  protected $youTubeVideoDataType = '';
  /** @param DriveFile */
  public function setDriveFile(DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return DriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param Form */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /** @return Form */
  public function getForm()
  {
    return $this->form;
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
  /** @param YouTubeVideo */
  public function setYouTubeVideo(YouTubeVideo $youTubeVideo)
  {
    $this->youTubeVideo = $youTubeVideo;
  }
  /** @return YouTubeVideo */
  public function getYouTubeVideo()
  {
    return $this->youTubeVideo;
  }
}

class ClassroomEmpty extends \Google\Model
{
}

class CloudPubsubTopic extends \Google\Model
{
  /** @var string */
  public $topicName;

  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Course extends \Google\Collection
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $calendarId;
  /** @var string */
  public $courseGroupEmail;
  /** @var CourseMaterialSet[] */
  public $courseMaterialSets;
  /** @var string */
  public $courseState;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var string */
  public $descriptionHeading;
  /** @var string */
  public $enrollmentCode;
  /** @var GradebookSettings */
  public $gradebookSettings;
  /** @var bool */
  public $guardiansEnabled;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $ownerId;
  /** @var string */
  public $room;
  /** @var string */
  public $section;
  /** @var DriveFolder */
  public $teacherFolder;
  /** @var string */
  public $teacherGroupEmail;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'courseMaterialSets';
  protected $courseMaterialSetsType = CourseMaterialSet::class;
  protected $courseMaterialSetsDataType = 'array';
  protected $gradebookSettingsType = GradebookSettings::class;
  protected $gradebookSettingsDataType = '';
  protected $teacherFolderType = DriveFolder::class;
  protected $teacherFolderDataType = '';
  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
  }
  /** @param string */
  public function setCalendarId($calendarId)
  {
    $this->calendarId = $calendarId;
  }
  /** @return string */
  public function getCalendarId()
  {
    return $this->calendarId;
  }
  /** @param string */
  public function setCourseGroupEmail($courseGroupEmail)
  {
    $this->courseGroupEmail = $courseGroupEmail;
  }
  /** @return string */
  public function getCourseGroupEmail()
  {
    return $this->courseGroupEmail;
  }
  /** @param CourseMaterialSet[] */
  public function setCourseMaterialSets($courseMaterialSets)
  {
    $this->courseMaterialSets = $courseMaterialSets;
  }
  /** @return CourseMaterialSet[] */
  public function getCourseMaterialSets()
  {
    return $this->courseMaterialSets;
  }
  /** @param string */
  public function setCourseState($courseState)
  {
    $this->courseState = $courseState;
  }
  /** @return string */
  public function getCourseState()
  {
    return $this->courseState;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
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
  public function setDescriptionHeading($descriptionHeading)
  {
    $this->descriptionHeading = $descriptionHeading;
  }
  /** @return string */
  public function getDescriptionHeading()
  {
    return $this->descriptionHeading;
  }
  /** @param string */
  public function setEnrollmentCode($enrollmentCode)
  {
    $this->enrollmentCode = $enrollmentCode;
  }
  /** @return string */
  public function getEnrollmentCode()
  {
    return $this->enrollmentCode;
  }
  /** @param GradebookSettings */
  public function setGradebookSettings(GradebookSettings $gradebookSettings)
  {
    $this->gradebookSettings = $gradebookSettings;
  }
  /** @return GradebookSettings */
  public function getGradebookSettings()
  {
    return $this->gradebookSettings;
  }
  /** @param bool */
  public function setGuardiansEnabled($guardiansEnabled)
  {
    $this->guardiansEnabled = $guardiansEnabled;
  }
  /** @return bool */
  public function getGuardiansEnabled()
  {
    return $this->guardiansEnabled;
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
  /** @param string */
  public function setOwnerId($ownerId)
  {
    $this->ownerId = $ownerId;
  }
  /** @return string */
  public function getOwnerId()
  {
    return $this->ownerId;
  }
  /** @param string */
  public function setRoom($room)
  {
    $this->room = $room;
  }
  /** @return string */
  public function getRoom()
  {
    return $this->room;
  }
  /** @param string */
  public function setSection($section)
  {
    $this->section = $section;
  }
  /** @return string */
  public function getSection()
  {
    return $this->section;
  }
  /** @param DriveFolder */
  public function setTeacherFolder(DriveFolder $teacherFolder)
  {
    $this->teacherFolder = $teacherFolder;
  }
  /** @return DriveFolder */
  public function getTeacherFolder()
  {
    return $this->teacherFolder;
  }
  /** @param string */
  public function setTeacherGroupEmail($teacherGroupEmail)
  {
    $this->teacherGroupEmail = $teacherGroupEmail;
  }
  /** @return string */
  public function getTeacherGroupEmail()
  {
    return $this->teacherGroupEmail;
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

class CourseAlias extends \Google\Model
{
  /** @var string */
  public $alias;

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
}

class CourseMaterial extends \Google\Model
{
  /** @var DriveFile */
  public $driveFile;
  /** @var Form */
  public $form;
  /** @var Link */
  public $link;
  /** @var YouTubeVideo */
  public $youTubeVideo;
  protected $driveFileType = DriveFile::class;
  protected $driveFileDataType = '';
  protected $formType = Form::class;
  protected $formDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $youTubeVideoType = YouTubeVideo::class;
  protected $youTubeVideoDataType = '';
  /** @param DriveFile */
  public function setDriveFile(DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return DriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param Form */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /** @return Form */
  public function getForm()
  {
    return $this->form;
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
  /** @param YouTubeVideo */
  public function setYouTubeVideo(YouTubeVideo $youTubeVideo)
  {
    $this->youTubeVideo = $youTubeVideo;
  }
  /** @return YouTubeVideo */
  public function getYouTubeVideo()
  {
    return $this->youTubeVideo;
  }
}

class CourseMaterialSet extends \Google\Collection
{
  /** @var CourseMaterial[] */
  public $materials;
  /** @var string */
  public $title;
  protected $collection_key = 'materials';
  protected $materialsType = CourseMaterial::class;
  protected $materialsDataType = 'array';
  /** @param CourseMaterial[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return CourseMaterial[] */
  public function getMaterials()
  {
    return $this->materials;
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

class CourseRosterChangesInfo extends \Google\Model
{
  /** @var string */
  public $courseId;

  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
}

class CourseWork extends \Google\Collection
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $assigneeMode;
  /** @var Assignment */
  public $assignment;
  /** @var bool */
  public $associatedWithDeveloper;
  /** @var string */
  public $courseId;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $creatorUserId;
  /** @var string */
  public $description;
  /** @var Date */
  public $dueDate;
  /** @var TimeOfDay */
  public $dueTime;
  /** @var GradeCategory */
  public $gradeCategory;
  /** @var string */
  public $id;
  /** @var IndividualStudentsOptions */
  public $individualStudentsOptions;
  /** @var Material[] */
  public $materials;
  public $maxPoints;
  /** @var MultipleChoiceQuestion */
  public $multipleChoiceQuestion;
  /** @var string */
  public $scheduledTime;
  /** @var string */
  public $state;
  /** @var string */
  public $submissionModificationMode;
  /** @var string */
  public $title;
  /** @var string */
  public $topicId;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $workType;
  protected $collection_key = 'materials';
  protected $assignmentType = Assignment::class;
  protected $assignmentDataType = '';
  protected $dueDateType = Date::class;
  protected $dueDateDataType = '';
  protected $dueTimeType = TimeOfDay::class;
  protected $dueTimeDataType = '';
  protected $gradeCategoryType = GradeCategory::class;
  protected $gradeCategoryDataType = '';
  protected $individualStudentsOptionsType = IndividualStudentsOptions::class;
  protected $individualStudentsOptionsDataType = '';
  protected $materialsType = Material::class;
  protected $materialsDataType = 'array';
  protected $multipleChoiceQuestionType = MultipleChoiceQuestion::class;
  protected $multipleChoiceQuestionDataType = '';
  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
  }
  /** @param string */
  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }
  /** @return string */
  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }
  /** @param Assignment */
  public function setAssignment(Assignment $assignment)
  {
    $this->assignment = $assignment;
  }
  /** @return Assignment */
  public function getAssignment()
  {
    return $this->assignment;
  }
  /** @param bool */
  public function setAssociatedWithDeveloper($associatedWithDeveloper)
  {
    $this->associatedWithDeveloper = $associatedWithDeveloper;
  }
  /** @return bool */
  public function getAssociatedWithDeveloper()
  {
    return $this->associatedWithDeveloper;
  }
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return string */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
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
  /** @param Date */
  public function setDueDate(Date $dueDate)
  {
    $this->dueDate = $dueDate;
  }
  /** @return Date */
  public function getDueDate()
  {
    return $this->dueDate;
  }
  /** @param TimeOfDay */
  public function setDueTime(TimeOfDay $dueTime)
  {
    $this->dueTime = $dueTime;
  }
  /** @return TimeOfDay */
  public function getDueTime()
  {
    return $this->dueTime;
  }
  /** @param GradeCategory */
  public function setGradeCategory(GradeCategory $gradeCategory)
  {
    $this->gradeCategory = $gradeCategory;
  }
  /** @return GradeCategory */
  public function getGradeCategory()
  {
    return $this->gradeCategory;
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
  /** @param IndividualStudentsOptions */
  public function setIndividualStudentsOptions(IndividualStudentsOptions $individualStudentsOptions)
  {
    $this->individualStudentsOptions = $individualStudentsOptions;
  }
  /** @return IndividualStudentsOptions */
  public function getIndividualStudentsOptions()
  {
    return $this->individualStudentsOptions;
  }
  /** @param Material[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return Material[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  public function setMaxPoints($maxPoints)
  {
    $this->maxPoints = $maxPoints;
  }
  public function getMaxPoints()
  {
    return $this->maxPoints;
  }
  /** @param MultipleChoiceQuestion */
  public function setMultipleChoiceQuestion(MultipleChoiceQuestion $multipleChoiceQuestion)
  {
    $this->multipleChoiceQuestion = $multipleChoiceQuestion;
  }
  /** @return MultipleChoiceQuestion */
  public function getMultipleChoiceQuestion()
  {
    return $this->multipleChoiceQuestion;
  }
  /** @param string */
  public function setScheduledTime($scheduledTime)
  {
    $this->scheduledTime = $scheduledTime;
  }
  /** @return string */
  public function getScheduledTime()
  {
    return $this->scheduledTime;
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
  public function setSubmissionModificationMode($submissionModificationMode)
  {
    $this->submissionModificationMode = $submissionModificationMode;
  }
  /** @return string */
  public function getSubmissionModificationMode()
  {
    return $this->submissionModificationMode;
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
  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
  }
  /** @return string */
  public function getTopicId()
  {
    return $this->topicId;
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
  public function setWorkType($workType)
  {
    $this->workType = $workType;
  }
  /** @return string */
  public function getWorkType()
  {
    return $this->workType;
  }
}

class CourseWorkChangesInfo extends \Google\Model
{
  /** @var string */
  public $courseId;

  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
}

class CourseWorkMaterial extends \Google\Collection
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $assigneeMode;
  /** @var string */
  public $courseId;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $creatorUserId;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var IndividualStudentsOptions */
  public $individualStudentsOptions;
  /** @var Material[] */
  public $materials;
  /** @var string */
  public $scheduledTime;
  /** @var string */
  public $state;
  /** @var string */
  public $title;
  /** @var string */
  public $topicId;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'materials';
  protected $individualStudentsOptionsType = IndividualStudentsOptions::class;
  protected $individualStudentsOptionsDataType = '';
  protected $materialsType = Material::class;
  protected $materialsDataType = 'array';
  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
  }
  /** @param string */
  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }
  /** @return string */
  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /** @return string */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
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
  /** @param IndividualStudentsOptions */
  public function setIndividualStudentsOptions(IndividualStudentsOptions $individualStudentsOptions)
  {
    $this->individualStudentsOptions = $individualStudentsOptions;
  }
  /** @return IndividualStudentsOptions */
  public function getIndividualStudentsOptions()
  {
    return $this->individualStudentsOptions;
  }
  /** @param Material[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return Material[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param string */
  public function setScheduledTime($scheduledTime)
  {
    $this->scheduledTime = $scheduledTime;
  }
  /** @return string */
  public function getScheduledTime()
  {
    return $this->scheduledTime;
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
  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
  }
  /** @return string */
  public function getTopicId()
  {
    return $this->topicId;
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

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class DriveFile extends \Google\Model
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $id;
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $title;

  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
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
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
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

class DriveFolder extends \Google\Model
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $id;
  /** @var string */
  public $title;

  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
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

class Feed extends \Google\Model
{
  /** @var CourseRosterChangesInfo */
  public $courseRosterChangesInfo;
  /** @var CourseWorkChangesInfo */
  public $courseWorkChangesInfo;
  /** @var string */
  public $feedType;
  protected $courseRosterChangesInfoType = CourseRosterChangesInfo::class;
  protected $courseRosterChangesInfoDataType = '';
  protected $courseWorkChangesInfoType = CourseWorkChangesInfo::class;
  protected $courseWorkChangesInfoDataType = '';
  /** @param CourseRosterChangesInfo */
  public function setCourseRosterChangesInfo(CourseRosterChangesInfo $courseRosterChangesInfo)
  {
    $this->courseRosterChangesInfo = $courseRosterChangesInfo;
  }
  /** @return CourseRosterChangesInfo */
  public function getCourseRosterChangesInfo()
  {
    return $this->courseRosterChangesInfo;
  }
  /** @param CourseWorkChangesInfo */
  public function setCourseWorkChangesInfo(CourseWorkChangesInfo $courseWorkChangesInfo)
  {
    $this->courseWorkChangesInfo = $courseWorkChangesInfo;
  }
  /** @return CourseWorkChangesInfo */
  public function getCourseWorkChangesInfo()
  {
    return $this->courseWorkChangesInfo;
  }
  /** @param string */
  public function setFeedType($feedType)
  {
    $this->feedType = $feedType;
  }
  /** @return string */
  public function getFeedType()
  {
    return $this->feedType;
  }
}

class Form extends \Google\Model
{
  /** @var string */
  public $formUrl;
  /** @var string */
  public $responseUrl;
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $title;

  /** @param string */
  public function setFormUrl($formUrl)
  {
    $this->formUrl = $formUrl;
  }
  /** @return string */
  public function getFormUrl()
  {
    return $this->formUrl;
  }
  /** @param string */
  public function setResponseUrl($responseUrl)
  {
    $this->responseUrl = $responseUrl;
  }
  /** @return string */
  public function getResponseUrl()
  {
    return $this->responseUrl;
  }
  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
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

class GlobalPermission extends \Google\Model
{
  /** @var string */
  public $permission;

  /** @param string */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
  }
}

class GradeCategory extends \Google\Model
{
  /** @var int */
  public $defaultGradeDenominator;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var int */
  public $weight;

  /** @param int */
  public function setDefaultGradeDenominator($defaultGradeDenominator)
  {
    $this->defaultGradeDenominator = $defaultGradeDenominator;
  }
  /** @return int */
  public function getDefaultGradeDenominator()
  {
    return $this->defaultGradeDenominator;
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

class GradeHistory extends \Google\Model
{
  /** @var string */
  public $actorUserId;
  /** @var string */
  public $gradeChangeType;
  /** @var string */
  public $gradeTimestamp;
  public $maxPoints;
  public $pointsEarned;

  /** @param string */
  public function setActorUserId($actorUserId)
  {
    $this->actorUserId = $actorUserId;
  }
  /** @return string */
  public function getActorUserId()
  {
    return $this->actorUserId;
  }
  /** @param string */
  public function setGradeChangeType($gradeChangeType)
  {
    $this->gradeChangeType = $gradeChangeType;
  }
  /** @return string */
  public function getGradeChangeType()
  {
    return $this->gradeChangeType;
  }
  /** @param string */
  public function setGradeTimestamp($gradeTimestamp)
  {
    $this->gradeTimestamp = $gradeTimestamp;
  }
  /** @return string */
  public function getGradeTimestamp()
  {
    return $this->gradeTimestamp;
  }
  public function setMaxPoints($maxPoints)
  {
    $this->maxPoints = $maxPoints;
  }
  public function getMaxPoints()
  {
    return $this->maxPoints;
  }
  public function setPointsEarned($pointsEarned)
  {
    $this->pointsEarned = $pointsEarned;
  }
  public function getPointsEarned()
  {
    return $this->pointsEarned;
  }
}

class GradebookSettings extends \Google\Collection
{
  /** @var string */
  public $calculationType;
  /** @var string */
  public $displaySetting;
  /** @var GradeCategory[] */
  public $gradeCategories;
  protected $collection_key = 'gradeCategories';
  protected $gradeCategoriesType = GradeCategory::class;
  protected $gradeCategoriesDataType = 'array';
  /** @param string */
  public function setCalculationType($calculationType)
  {
    $this->calculationType = $calculationType;
  }
  /** @return string */
  public function getCalculationType()
  {
    return $this->calculationType;
  }
  /** @param string */
  public function setDisplaySetting($displaySetting)
  {
    $this->displaySetting = $displaySetting;
  }
  /** @return string */
  public function getDisplaySetting()
  {
    return $this->displaySetting;
  }
  /** @param GradeCategory[] */
  public function setGradeCategories($gradeCategories)
  {
    $this->gradeCategories = $gradeCategories;
  }
  /** @return GradeCategory[] */
  public function getGradeCategories()
  {
    return $this->gradeCategories;
  }
}

class Guardian extends \Google\Model
{
  /** @var string */
  public $guardianId;
  /** @var UserProfile */
  public $guardianProfile;
  /** @var string */
  public $invitedEmailAddress;
  /** @var string */
  public $studentId;
  protected $guardianProfileType = UserProfile::class;
  protected $guardianProfileDataType = '';
  /** @param string */
  public function setGuardianId($guardianId)
  {
    $this->guardianId = $guardianId;
  }
  /** @return string */
  public function getGuardianId()
  {
    return $this->guardianId;
  }
  /** @param UserProfile */
  public function setGuardianProfile(UserProfile $guardianProfile)
  {
    $this->guardianProfile = $guardianProfile;
  }
  /** @return UserProfile */
  public function getGuardianProfile()
  {
    return $this->guardianProfile;
  }
  /** @param string */
  public function setInvitedEmailAddress($invitedEmailAddress)
  {
    $this->invitedEmailAddress = $invitedEmailAddress;
  }
  /** @return string */
  public function getInvitedEmailAddress()
  {
    return $this->invitedEmailAddress;
  }
  /** @param string */
  public function setStudentId($studentId)
  {
    $this->studentId = $studentId;
  }
  /** @return string */
  public function getStudentId()
  {
    return $this->studentId;
  }
}

class GuardianInvitation extends \Google\Model
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $invitationId;
  /** @var string */
  public $invitedEmailAddress;
  /** @var string */
  public $state;
  /** @var string */
  public $studentId;

  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }
  /** @return string */
  public function getInvitationId()
  {
    return $this->invitationId;
  }
  /** @param string */
  public function setInvitedEmailAddress($invitedEmailAddress)
  {
    $this->invitedEmailAddress = $invitedEmailAddress;
  }
  /** @return string */
  public function getInvitedEmailAddress()
  {
    return $this->invitedEmailAddress;
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
  public function setStudentId($studentId)
  {
    $this->studentId = $studentId;
  }
  /** @return string */
  public function getStudentId()
  {
    return $this->studentId;
  }
}

class IndividualStudentsOptions extends \Google\Collection
{
  /** @var string[] */
  public $studentIds;
  protected $collection_key = 'studentIds';
  /** @param string[] */
  public function setStudentIds($studentIds)
  {
    $this->studentIds = $studentIds;
  }
  /** @return string[] */
  public function getStudentIds()
  {
    return $this->studentIds;
  }
}

class Invitation extends \Google\Model
{
  /** @var string */
  public $courseId;
  /** @var string */
  public $id;
  /** @var string */
  public $role;
  /** @var string */
  public $userId;

  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
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

class Link extends \Google\Model
{
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $url;

  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
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

class ListAnnouncementsResponse extends \Google\Collection
{
  /** @var Announcement[] */
  public $announcements;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'announcements';
  protected $announcementsType = Announcement::class;
  protected $announcementsDataType = 'array';
  /** @param Announcement[] */
  public function setAnnouncements($announcements)
  {
    $this->announcements = $announcements;
  }
  /** @return Announcement[] */
  public function getAnnouncements()
  {
    return $this->announcements;
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

class ListCourseAliasesResponse extends \Google\Collection
{
  /** @var CourseAlias[] */
  public $aliases;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'aliases';
  protected $aliasesType = CourseAlias::class;
  protected $aliasesDataType = 'array';
  /** @param CourseAlias[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return CourseAlias[] */
  public function getAliases()
  {
    return $this->aliases;
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

class ListCourseWorkMaterialResponse extends \Google\Collection
{
  /** @var CourseWorkMaterial[] */
  public $courseWorkMaterial;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'courseWorkMaterial';
  protected $courseWorkMaterialType = CourseWorkMaterial::class;
  protected $courseWorkMaterialDataType = 'array';
  /** @param CourseWorkMaterial[] */
  public function setCourseWorkMaterial($courseWorkMaterial)
  {
    $this->courseWorkMaterial = $courseWorkMaterial;
  }
  /** @return CourseWorkMaterial[] */
  public function getCourseWorkMaterial()
  {
    return $this->courseWorkMaterial;
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

class ListCourseWorkResponse extends \Google\Collection
{
  /** @var CourseWork[] */
  public $courseWork;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'courseWork';
  protected $courseWorkType = CourseWork::class;
  protected $courseWorkDataType = 'array';
  /** @param CourseWork[] */
  public function setCourseWork($courseWork)
  {
    $this->courseWork = $courseWork;
  }
  /** @return CourseWork[] */
  public function getCourseWork()
  {
    return $this->courseWork;
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

class ListCoursesResponse extends \Google\Collection
{
  /** @var Course[] */
  public $courses;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'courses';
  protected $coursesType = Course::class;
  protected $coursesDataType = 'array';
  /** @param Course[] */
  public function setCourses($courses)
  {
    $this->courses = $courses;
  }
  /** @return Course[] */
  public function getCourses()
  {
    return $this->courses;
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

class ListGuardianInvitationsResponse extends \Google\Collection
{
  /** @var GuardianInvitation[] */
  public $guardianInvitations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'guardianInvitations';
  protected $guardianInvitationsType = GuardianInvitation::class;
  protected $guardianInvitationsDataType = 'array';
  /** @param GuardianInvitation[] */
  public function setGuardianInvitations($guardianInvitations)
  {
    $this->guardianInvitations = $guardianInvitations;
  }
  /** @return GuardianInvitation[] */
  public function getGuardianInvitations()
  {
    return $this->guardianInvitations;
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

class ListGuardiansResponse extends \Google\Collection
{
  /** @var Guardian[] */
  public $guardians;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'guardians';
  protected $guardiansType = Guardian::class;
  protected $guardiansDataType = 'array';
  /** @param Guardian[] */
  public function setGuardians($guardians)
  {
    $this->guardians = $guardians;
  }
  /** @return Guardian[] */
  public function getGuardians()
  {
    return $this->guardians;
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

class ListInvitationsResponse extends \Google\Collection
{
  /** @var Invitation[] */
  public $invitations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'invitations';
  protected $invitationsType = Invitation::class;
  protected $invitationsDataType = 'array';
  /** @param Invitation[] */
  public function setInvitations($invitations)
  {
    $this->invitations = $invitations;
  }
  /** @return Invitation[] */
  public function getInvitations()
  {
    return $this->invitations;
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

class ListStudentSubmissionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var StudentSubmission[] */
  public $studentSubmissions;
  protected $collection_key = 'studentSubmissions';
  protected $studentSubmissionsType = StudentSubmission::class;
  protected $studentSubmissionsDataType = 'array';
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
  /** @param StudentSubmission[] */
  public function setStudentSubmissions($studentSubmissions)
  {
    $this->studentSubmissions = $studentSubmissions;
  }
  /** @return StudentSubmission[] */
  public function getStudentSubmissions()
  {
    return $this->studentSubmissions;
  }
}

class ListStudentsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Student[] */
  public $students;
  protected $collection_key = 'students';
  protected $studentsType = Student::class;
  protected $studentsDataType = 'array';
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
  /** @param Student[] */
  public function setStudents($students)
  {
    $this->students = $students;
  }
  /** @return Student[] */
  public function getStudents()
  {
    return $this->students;
  }
}

class ListTeachersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Teacher[] */
  public $teachers;
  protected $collection_key = 'teachers';
  protected $teachersType = Teacher::class;
  protected $teachersDataType = 'array';
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
  /** @param Teacher[] */
  public function setTeachers($teachers)
  {
    $this->teachers = $teachers;
  }
  /** @return Teacher[] */
  public function getTeachers()
  {
    return $this->teachers;
  }
}

class ListTopicResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Topic[] */
  public $topic;
  protected $collection_key = 'topic';
  protected $topicType = Topic::class;
  protected $topicDataType = 'array';
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
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return Topic[] */
  public function getTopic()
  {
    return $this->topic;
  }
}

class Material extends \Google\Model
{
  /** @var SharedDriveFile */
  public $driveFile;
  /** @var Form */
  public $form;
  /** @var Link */
  public $link;
  /** @var YouTubeVideo */
  public $youtubeVideo;
  protected $driveFileType = SharedDriveFile::class;
  protected $driveFileDataType = '';
  protected $formType = Form::class;
  protected $formDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  protected $youtubeVideoType = YouTubeVideo::class;
  protected $youtubeVideoDataType = '';
  /** @param SharedDriveFile */
  public function setDriveFile(SharedDriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return SharedDriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param Form */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /** @return Form */
  public function getForm()
  {
    return $this->form;
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
  /** @param YouTubeVideo */
  public function setYoutubeVideo(YouTubeVideo $youtubeVideo)
  {
    $this->youtubeVideo = $youtubeVideo;
  }
  /** @return YouTubeVideo */
  public function getYoutubeVideo()
  {
    return $this->youtubeVideo;
  }
}

class ModifyAnnouncementAssigneesRequest extends \Google\Model
{
  /** @var string */
  public $assigneeMode;
  /** @var ModifyIndividualStudentsOptions */
  public $modifyIndividualStudentsOptions;
  protected $modifyIndividualStudentsOptionsType = ModifyIndividualStudentsOptions::class;
  protected $modifyIndividualStudentsOptionsDataType = '';
  /** @param string */
  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }
  /** @return string */
  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }
  /** @param ModifyIndividualStudentsOptions */
  public function setModifyIndividualStudentsOptions(ModifyIndividualStudentsOptions $modifyIndividualStudentsOptions)
  {
    $this->modifyIndividualStudentsOptions = $modifyIndividualStudentsOptions;
  }
  /** @return ModifyIndividualStudentsOptions */
  public function getModifyIndividualStudentsOptions()
  {
    return $this->modifyIndividualStudentsOptions;
  }
}

class ModifyAttachmentsRequest extends \Google\Collection
{
  /** @var Attachment[] */
  public $addAttachments;
  protected $collection_key = 'addAttachments';
  protected $addAttachmentsType = Attachment::class;
  protected $addAttachmentsDataType = 'array';
  /** @param Attachment[] */
  public function setAddAttachments($addAttachments)
  {
    $this->addAttachments = $addAttachments;
  }
  /** @return Attachment[] */
  public function getAddAttachments()
  {
    return $this->addAttachments;
  }
}

class ModifyCourseWorkAssigneesRequest extends \Google\Model
{
  /** @var string */
  public $assigneeMode;
  /** @var ModifyIndividualStudentsOptions */
  public $modifyIndividualStudentsOptions;
  protected $modifyIndividualStudentsOptionsType = ModifyIndividualStudentsOptions::class;
  protected $modifyIndividualStudentsOptionsDataType = '';
  /** @param string */
  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }
  /** @return string */
  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }
  /** @param ModifyIndividualStudentsOptions */
  public function setModifyIndividualStudentsOptions(ModifyIndividualStudentsOptions $modifyIndividualStudentsOptions)
  {
    $this->modifyIndividualStudentsOptions = $modifyIndividualStudentsOptions;
  }
  /** @return ModifyIndividualStudentsOptions */
  public function getModifyIndividualStudentsOptions()
  {
    return $this->modifyIndividualStudentsOptions;
  }
}

class ModifyIndividualStudentsOptions extends \Google\Collection
{
  /** @var string[] */
  public $addStudentIds;
  /** @var string[] */
  public $removeStudentIds;
  protected $collection_key = 'removeStudentIds';
  /** @param string[] */
  public function setAddStudentIds($addStudentIds)
  {
    $this->addStudentIds = $addStudentIds;
  }
  /** @return string[] */
  public function getAddStudentIds()
  {
    return $this->addStudentIds;
  }
  /** @param string[] */
  public function setRemoveStudentIds($removeStudentIds)
  {
    $this->removeStudentIds = $removeStudentIds;
  }
  /** @return string[] */
  public function getRemoveStudentIds()
  {
    return $this->removeStudentIds;
  }
}

class MultipleChoiceQuestion extends \Google\Collection
{
  /** @var string[] */
  public $choices;
  protected $collection_key = 'choices';
  /** @param string[] */
  public function setChoices($choices)
  {
    $this->choices = $choices;
  }
  /** @return string[] */
  public function getChoices()
  {
    return $this->choices;
  }
}

class MultipleChoiceSubmission extends \Google\Model
{
  /** @var string */
  public $answer;

  /** @param string */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /** @return string */
  public function getAnswer()
  {
    return $this->answer;
  }
}

class Name extends \Google\Model
{
  /** @var string */
  public $familyName;
  /** @var string */
  public $fullName;
  /** @var string */
  public $givenName;

  /** @param string */
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /** @return string */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
  /** @return string */
  public function getGivenName()
  {
    return $this->givenName;
  }
}

class ReclaimStudentSubmissionRequest extends \Google\Model
{
}

class Registration extends \Google\Model
{
  /** @var CloudPubsubTopic */
  public $cloudPubsubTopic;
  /** @var string */
  public $expiryTime;
  /** @var Feed */
  public $feed;
  /** @var string */
  public $registrationId;
  protected $cloudPubsubTopicType = CloudPubsubTopic::class;
  protected $cloudPubsubTopicDataType = '';
  protected $feedType = Feed::class;
  protected $feedDataType = '';
  /** @param CloudPubsubTopic */
  public function setCloudPubsubTopic(CloudPubsubTopic $cloudPubsubTopic)
  {
    $this->cloudPubsubTopic = $cloudPubsubTopic;
  }
  /** @return CloudPubsubTopic */
  public function getCloudPubsubTopic()
  {
    return $this->cloudPubsubTopic;
  }
  /** @param string */
  public function setExpiryTime($expiryTime)
  {
    $this->expiryTime = $expiryTime;
  }
  /** @return string */
  public function getExpiryTime()
  {
    return $this->expiryTime;
  }
  /** @param Feed */
  public function setFeed(Feed $feed)
  {
    $this->feed = $feed;
  }
  /** @return Feed */
  public function getFeed()
  {
    return $this->feed;
  }
  /** @param string */
  public function setRegistrationId($registrationId)
  {
    $this->registrationId = $registrationId;
  }
  /** @return string */
  public function getRegistrationId()
  {
    return $this->registrationId;
  }
}

class ReturnStudentSubmissionRequest extends \Google\Model
{
}

class SharedDriveFile extends \Google\Model
{
  /** @var DriveFile */
  public $driveFile;
  /** @var string */
  public $shareMode;
  protected $driveFileType = DriveFile::class;
  protected $driveFileDataType = '';
  /** @param DriveFile */
  public function setDriveFile(DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  /** @return DriveFile */
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  /** @param string */
  public function setShareMode($shareMode)
  {
    $this->shareMode = $shareMode;
  }
  /** @return string */
  public function getShareMode()
  {
    return $this->shareMode;
  }
}

class ShortAnswerSubmission extends \Google\Model
{
  /** @var string */
  public $answer;

  /** @param string */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /** @return string */
  public function getAnswer()
  {
    return $this->answer;
  }
}

class StateHistory extends \Google\Model
{
  /** @var string */
  public $actorUserId;
  /** @var string */
  public $state;
  /** @var string */
  public $stateTimestamp;

  /** @param string */
  public function setActorUserId($actorUserId)
  {
    $this->actorUserId = $actorUserId;
  }
  /** @return string */
  public function getActorUserId()
  {
    return $this->actorUserId;
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
  public function setStateTimestamp($stateTimestamp)
  {
    $this->stateTimestamp = $stateTimestamp;
  }
  /** @return string */
  public function getStateTimestamp()
  {
    return $this->stateTimestamp;
  }
}

class Student extends \Google\Model
{
  /** @var string */
  public $courseId;
  /** @var UserProfile */
  public $profile;
  /** @var DriveFolder */
  public $studentWorkFolder;
  /** @var string */
  public $userId;
  protected $profileType = UserProfile::class;
  protected $profileDataType = '';
  protected $studentWorkFolderType = DriveFolder::class;
  protected $studentWorkFolderDataType = '';
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param UserProfile */
  public function setProfile(UserProfile $profile)
  {
    $this->profile = $profile;
  }
  /** @return UserProfile */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param DriveFolder */
  public function setStudentWorkFolder(DriveFolder $studentWorkFolder)
  {
    $this->studentWorkFolder = $studentWorkFolder;
  }
  /** @return DriveFolder */
  public function getStudentWorkFolder()
  {
    return $this->studentWorkFolder;
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

class StudentSubmission extends \Google\Collection
{
  /** @var string */
  public $alternateLink;
  public $assignedGrade;
  /** @var AssignmentSubmission */
  public $assignmentSubmission;
  /** @var bool */
  public $associatedWithDeveloper;
  /** @var string */
  public $courseId;
  /** @var string */
  public $courseWorkId;
  /** @var string */
  public $courseWorkType;
  /** @var string */
  public $creationTime;
  public $draftGrade;
  /** @var string */
  public $id;
  /** @var bool */
  public $late;
  /** @var MultipleChoiceSubmission */
  public $multipleChoiceSubmission;
  /** @var ShortAnswerSubmission */
  public $shortAnswerSubmission;
  /** @var string */
  public $state;
  /** @var SubmissionHistory[] */
  public $submissionHistory;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userId;
  protected $collection_key = 'submissionHistory';
  protected $assignmentSubmissionType = AssignmentSubmission::class;
  protected $assignmentSubmissionDataType = '';
  protected $multipleChoiceSubmissionType = MultipleChoiceSubmission::class;
  protected $multipleChoiceSubmissionDataType = '';
  protected $shortAnswerSubmissionType = ShortAnswerSubmission::class;
  protected $shortAnswerSubmissionDataType = '';
  protected $submissionHistoryType = SubmissionHistory::class;
  protected $submissionHistoryDataType = 'array';
  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
  }
  public function setAssignedGrade($assignedGrade)
  {
    $this->assignedGrade = $assignedGrade;
  }
  public function getAssignedGrade()
  {
    return $this->assignedGrade;
  }
  /** @param AssignmentSubmission */
  public function setAssignmentSubmission(AssignmentSubmission $assignmentSubmission)
  {
    $this->assignmentSubmission = $assignmentSubmission;
  }
  /** @return AssignmentSubmission */
  public function getAssignmentSubmission()
  {
    return $this->assignmentSubmission;
  }
  /** @param bool */
  public function setAssociatedWithDeveloper($associatedWithDeveloper)
  {
    $this->associatedWithDeveloper = $associatedWithDeveloper;
  }
  /** @return bool */
  public function getAssociatedWithDeveloper()
  {
    return $this->associatedWithDeveloper;
  }
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param string */
  public function setCourseWorkId($courseWorkId)
  {
    $this->courseWorkId = $courseWorkId;
  }
  /** @return string */
  public function getCourseWorkId()
  {
    return $this->courseWorkId;
  }
  /** @param string */
  public function setCourseWorkType($courseWorkType)
  {
    $this->courseWorkType = $courseWorkType;
  }
  /** @return string */
  public function getCourseWorkType()
  {
    return $this->courseWorkType;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setDraftGrade($draftGrade)
  {
    $this->draftGrade = $draftGrade;
  }
  public function getDraftGrade()
  {
    return $this->draftGrade;
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
  /** @param bool */
  public function setLate($late)
  {
    $this->late = $late;
  }
  /** @return bool */
  public function getLate()
  {
    return $this->late;
  }
  /** @param MultipleChoiceSubmission */
  public function setMultipleChoiceSubmission(MultipleChoiceSubmission $multipleChoiceSubmission)
  {
    $this->multipleChoiceSubmission = $multipleChoiceSubmission;
  }
  /** @return MultipleChoiceSubmission */
  public function getMultipleChoiceSubmission()
  {
    return $this->multipleChoiceSubmission;
  }
  /** @param ShortAnswerSubmission */
  public function setShortAnswerSubmission(ShortAnswerSubmission $shortAnswerSubmission)
  {
    $this->shortAnswerSubmission = $shortAnswerSubmission;
  }
  /** @return ShortAnswerSubmission */
  public function getShortAnswerSubmission()
  {
    return $this->shortAnswerSubmission;
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
  /** @param SubmissionHistory[] */
  public function setSubmissionHistory($submissionHistory)
  {
    $this->submissionHistory = $submissionHistory;
  }
  /** @return SubmissionHistory[] */
  public function getSubmissionHistory()
  {
    return $this->submissionHistory;
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

class SubmissionHistory extends \Google\Model
{
  /** @var GradeHistory */
  public $gradeHistory;
  /** @var StateHistory */
  public $stateHistory;
  protected $gradeHistoryType = GradeHistory::class;
  protected $gradeHistoryDataType = '';
  protected $stateHistoryType = StateHistory::class;
  protected $stateHistoryDataType = '';
  /** @param GradeHistory */
  public function setGradeHistory(GradeHistory $gradeHistory)
  {
    $this->gradeHistory = $gradeHistory;
  }
  /** @return GradeHistory */
  public function getGradeHistory()
  {
    return $this->gradeHistory;
  }
  /** @param StateHistory */
  public function setStateHistory(StateHistory $stateHistory)
  {
    $this->stateHistory = $stateHistory;
  }
  /** @return StateHistory */
  public function getStateHistory()
  {
    return $this->stateHistory;
  }
}

class Teacher extends \Google\Model
{
  /** @var string */
  public $courseId;
  /** @var UserProfile */
  public $profile;
  /** @var string */
  public $userId;
  protected $profileType = UserProfile::class;
  protected $profileDataType = '';
  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
  }
  /** @param UserProfile */
  public function setProfile(UserProfile $profile)
  {
    $this->profile = $profile;
  }
  /** @return UserProfile */
  public function getProfile()
  {
    return $this->profile;
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

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Topic extends \Google\Model
{
  /** @var string */
  public $courseId;
  /** @var string */
  public $name;
  /** @var string */
  public $topicId;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }
  /** @return string */
  public function getCourseId()
  {
    return $this->courseId;
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
  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
  }
  /** @return string */
  public function getTopicId()
  {
    return $this->topicId;
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

class TurnInStudentSubmissionRequest extends \Google\Model
{
}

class UserProfile extends \Google\Collection
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $id;
  /** @var Name */
  public $name;
  /** @var GlobalPermission[] */
  public $permissions;
  /** @var string */
  public $photoUrl;
  /** @var bool */
  public $verifiedTeacher;
  protected $collection_key = 'permissions';
  protected $nameType = Name::class;
  protected $nameDataType = '';
  protected $permissionsType = GlobalPermission::class;
  protected $permissionsDataType = 'array';
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
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
  /** @param Name */
  public function setName(Name $name)
  {
    $this->name = $name;
  }
  /** @return Name */
  public function getName()
  {
    return $this->name;
  }
  /** @param GlobalPermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return GlobalPermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param bool */
  public function setVerifiedTeacher($verifiedTeacher)
  {
    $this->verifiedTeacher = $verifiedTeacher;
  }
  /** @return bool */
  public function getVerifiedTeacher()
  {
    return $this->verifiedTeacher;
  }
}

class YouTubeVideo extends \Google\Model
{
  /** @var string */
  public $alternateLink;
  /** @var string */
  public $id;
  /** @var string */
  public $thumbnailUrl;
  /** @var string */
  public $title;

  /** @param string */
  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }
  /** @return string */
  public function getAlternateLink()
  {
    return $this->alternateLink;
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
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Announcement::class, 'Google_Service_Classroom_Announcement');
class_alias(Assignment::class, 'Google_Service_Classroom_Assignment');
class_alias(AssignmentSubmission::class, 'Google_Service_Classroom_AssignmentSubmission');
class_alias(Attachment::class, 'Google_Service_Classroom_Attachment');
class_alias(ClassroomEmpty::class, 'Google_Service_Classroom_ClassroomEmpty');
class_alias(CloudPubsubTopic::class, 'Google_Service_Classroom_CloudPubsubTopic');
class_alias(Course::class, 'Google_Service_Classroom_Course');
class_alias(CourseAlias::class, 'Google_Service_Classroom_CourseAlias');
class_alias(CourseMaterial::class, 'Google_Service_Classroom_CourseMaterial');
class_alias(CourseMaterialSet::class, 'Google_Service_Classroom_CourseMaterialSet');
class_alias(CourseRosterChangesInfo::class, 'Google_Service_Classroom_CourseRosterChangesInfo');
class_alias(CourseWork::class, 'Google_Service_Classroom_CourseWork');
class_alias(CourseWorkChangesInfo::class, 'Google_Service_Classroom_CourseWorkChangesInfo');
class_alias(CourseWorkMaterial::class, 'Google_Service_Classroom_CourseWorkMaterial');
class_alias(Date::class, 'Google_Service_Classroom_Date');
class_alias(DriveFile::class, 'Google_Service_Classroom_DriveFile');
class_alias(DriveFolder::class, 'Google_Service_Classroom_DriveFolder');
class_alias(Feed::class, 'Google_Service_Classroom_Feed');
class_alias(Form::class, 'Google_Service_Classroom_Form');
class_alias(GlobalPermission::class, 'Google_Service_Classroom_GlobalPermission');
class_alias(GradeCategory::class, 'Google_Service_Classroom_GradeCategory');
class_alias(GradeHistory::class, 'Google_Service_Classroom_GradeHistory');
class_alias(GradebookSettings::class, 'Google_Service_Classroom_GradebookSettings');
class_alias(Guardian::class, 'Google_Service_Classroom_Guardian');
class_alias(GuardianInvitation::class, 'Google_Service_Classroom_GuardianInvitation');
class_alias(IndividualStudentsOptions::class, 'Google_Service_Classroom_IndividualStudentsOptions');
class_alias(Invitation::class, 'Google_Service_Classroom_Invitation');
class_alias(Link::class, 'Google_Service_Classroom_Link');
class_alias(ListAnnouncementsResponse::class, 'Google_Service_Classroom_ListAnnouncementsResponse');
class_alias(ListCourseAliasesResponse::class, 'Google_Service_Classroom_ListCourseAliasesResponse');
class_alias(ListCourseWorkMaterialResponse::class, 'Google_Service_Classroom_ListCourseWorkMaterialResponse');
class_alias(ListCourseWorkResponse::class, 'Google_Service_Classroom_ListCourseWorkResponse');
class_alias(ListCoursesResponse::class, 'Google_Service_Classroom_ListCoursesResponse');
class_alias(ListGuardianInvitationsResponse::class, 'Google_Service_Classroom_ListGuardianInvitationsResponse');
class_alias(ListGuardiansResponse::class, 'Google_Service_Classroom_ListGuardiansResponse');
class_alias(ListInvitationsResponse::class, 'Google_Service_Classroom_ListInvitationsResponse');
class_alias(ListStudentSubmissionsResponse::class, 'Google_Service_Classroom_ListStudentSubmissionsResponse');
class_alias(ListStudentsResponse::class, 'Google_Service_Classroom_ListStudentsResponse');
class_alias(ListTeachersResponse::class, 'Google_Service_Classroom_ListTeachersResponse');
class_alias(ListTopicResponse::class, 'Google_Service_Classroom_ListTopicResponse');
class_alias(Material::class, 'Google_Service_Classroom_Material');
class_alias(ModifyAnnouncementAssigneesRequest::class, 'Google_Service_Classroom_ModifyAnnouncementAssigneesRequest');
class_alias(ModifyAttachmentsRequest::class, 'Google_Service_Classroom_ModifyAttachmentsRequest');
class_alias(ModifyCourseWorkAssigneesRequest::class, 'Google_Service_Classroom_ModifyCourseWorkAssigneesRequest');
class_alias(ModifyIndividualStudentsOptions::class, 'Google_Service_Classroom_ModifyIndividualStudentsOptions');
class_alias(MultipleChoiceQuestion::class, 'Google_Service_Classroom_MultipleChoiceQuestion');
class_alias(MultipleChoiceSubmission::class, 'Google_Service_Classroom_MultipleChoiceSubmission');
class_alias(Name::class, 'Google_Service_Classroom_Name');
class_alias(ReclaimStudentSubmissionRequest::class, 'Google_Service_Classroom_ReclaimStudentSubmissionRequest');
class_alias(Registration::class, 'Google_Service_Classroom_Registration');
class_alias(ReturnStudentSubmissionRequest::class, 'Google_Service_Classroom_ReturnStudentSubmissionRequest');
class_alias(SharedDriveFile::class, 'Google_Service_Classroom_SharedDriveFile');
class_alias(ShortAnswerSubmission::class, 'Google_Service_Classroom_ShortAnswerSubmission');
class_alias(StateHistory::class, 'Google_Service_Classroom_StateHistory');
class_alias(Student::class, 'Google_Service_Classroom_Student');
class_alias(StudentSubmission::class, 'Google_Service_Classroom_StudentSubmission');
class_alias(SubmissionHistory::class, 'Google_Service_Classroom_SubmissionHistory');
class_alias(Teacher::class, 'Google_Service_Classroom_Teacher');
class_alias(TimeOfDay::class, 'Google_Service_Classroom_TimeOfDay');
class_alias(Topic::class, 'Google_Service_Classroom_Topic');
class_alias(TurnInStudentSubmissionRequest::class, 'Google_Service_Classroom_TurnInStudentSubmissionRequest');
class_alias(UserProfile::class, 'Google_Service_Classroom_UserProfile');
class_alias(YouTubeVideo::class, 'Google_Service_Classroom_YouTubeVideo');
