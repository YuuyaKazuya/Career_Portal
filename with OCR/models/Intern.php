<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\db\ActiveRecord;
use app\components\UpperCaseBehavior;

/**
 * This is the model class for table "interns".
 *
 * @property int $id
 * @property int|null $ic_number
 * @property int|null $age
 * @property int|null $pa_contact
 * @property int|null $emergency_contact
 * @property int|null $poscode
 * @property string|null $name
 * @property string|null $status
 * @property string|null $dob
 * @property string|null $guardian
 * @property string|null $relationship
 * @property string|null $pa
 * @property string|null $pa_email
 * @property string|null $position
 * @property string|null $gender
 * @property string|null $email
 * @property string|null $phone_number
 * @property string|null $education_level
 * @property string|null $university
 * @property string|null $course
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $city
 * @property string|null $state
 * @property string|null $start_date
 * @property string|null $end_date
 * @property \yii\web\UploadedFile|null $imageFile
 * @property \yii\web\UploadedFile|null $university_letter
 * @property \yii\web\UploadedFile|null $resume
 * @property \yii\web\UploadedFile|null $cover_letter
 */
class Intern extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $file;
    public $imageFile;
    public $resumeFile;
    public $coverFile;
    public $universityFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'interns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Name is required !!'],
            [['age'], 'required', 'message' => 'Age is required !!'],
            [['ic_number'], 'required', 'message' => 'IC Number is required !!'],
            [['ic_number'], 'validateIcFormat'],
            [['status'], 'required', 'message' => 'status is required !!'],
            [['relationship'], 'required', 'message' => 'relationship is required !!'],
            [['guardian'], 'required', 'message' => 'Emergency Contact is required !!'],
            [['emergency_contact'], 'required', 'message' => 'Emergency Phone is required !!'],
            [['education_level'], 'required', 'message' => 'Education Level is required !!'],
            [['course'], 'required', 'message' => 'Course is required !!'],
            [['gender'], 'required', 'message' => 'Gender is required !!'],
            [['email'], 'required', 'message' => 'Email is required !!'],
            [['phone'], 'required', 'message' => 'Phone is required !!'],
            [['pa'], 'required', 'message' => 'Academic Advisor is required !!'],
            [['pa_contact'], 'required', 'message' => 'Academic Advisor Contact is required !!'],
            [['pa_email'], 'required', 'message' => 'Academic Advisor Email is required !!'],
            [['position'], 'required', 'message' => 'Academic Advisor Position is required !!'],
            [['university'], 'required', 'message' => 'University is required !!'],
            [['address1', 'address2'], 'required', 'message' => 'Address is required !!'],
            [['poscode'], 'required', 'message' => 'Postcode is required !!'],
            [['city'], 'required', 'message' => 'City is required !!'],
            [['state'], 'required', 'message' => 'State is required !!'],
            [['start_date', 'end_date', 'dob'], 'required', 'message' => 'Date is required !!'],

            [['phone', 'emergency_contact', 'pa_contact'], 'match', 'pattern' => '/^[0-9\-]+$/', 'message' => 'Phone number can only contain digits and dashes.'],

            [['image', 'resume', 'cover_letter', 'university_letter'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, pdf, doc, docx'],
            [['imageFile', 'resumeFile', 'coverFile', 'universityFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, pdf, doc, docx'],
            [['start_date', 'end_date', 'dob'], 'safe'], // Allows dates to be null
            [['name', 'city', 'state', 'gender', 'relationship', 'pa_email', 'status', 'education_level','ic_number'], 'string', 'max' => 50],
            [['email', 'university', 'course', 'address1', 'address2', 'pa', 'guardian', 'position'], 'string', 'max' => 100],
            [['poscode'], 'number', 'message' => 'Must be a number !!'],
            [['age'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'ic_number' => 'IC Number',
            'dob' => 'Date of Birth',
            'age' => 'Age',
            'status' => 'status',
            'guardian' => 'Guardian',
            'relationship' => 'Relationship',
            'emergency_contact' => 'Emergency Contact',
            'pa' => 'PA',
            'position' => 'Position',
            'pa_contact' => 'PA Contact',
            'pa_email' => 'PA Email',
            'gender' => 'Gender',
            'email' => 'Email',
            'phone' => 'Phone',
            'education_level' => 'Education Level',
            'university' => 'University',
            'course' => 'Course',
            'address1' => 'Address 1',
            'address2' => 'Address 2',
            'city' => 'City',
            'state' => 'State',
            'poscode' => 'Poscode',
            'university_letter' => 'University Letter',
            'resume' => 'Resume',
            'cover_letter' => 'Cover Letter',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (empty($this->image) && $this->isNewRecord === false) {
                $this->image = $this->getOldAttribute('image');
            }

            if (empty($this->university_letter) && $this->isNewRecord === false) {
                $this->university_letter = $this->getOldAttribute('university_letter');
            }

            if (empty($this->resume) && $this->isNewRecord === false) {
                $this->resume = $this->getOldAttribute('resume');
            }

            if (empty($this->cover_letter) && $this->isNewRecord === false) {
                $this->cover_letter = $this->getOldAttribute('cover_letter');
            }

            return true;
        }
        return false;
    }

    public function validateIcFormat($attribute, $params)
    {
        if (!preg_match('/^\d{6}-\d{2}-\d{4}$/', $this->$attribute)) {
            $this->addError($attribute, 'IC Number must be in the format YYMMDD-XX-YYYY.');
        }
    }

    public function getgender0()
    {
        return $this->hasOne(Genders::className(), ['id' => 'gender']);
    }

    public function getstate0()
    {
        return $this->hasOne(States::className(), ['id' => 'state']);
    }

    public function getstatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    public function getrelay0()
    {
        return $this->hasOne(Relationships::className(), ['id' => 'relationship']);
    }

    public function geteducation0()
    {
        return $this->hasOne(Educations::className(), ['id' => 'education_level']);
    }
}
