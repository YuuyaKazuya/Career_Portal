<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property int|null $age
 * @property string|null $ic_number
 * @property string|null $dob
 * @property string|null $pob
 * @property string|null $gender
 * @property string|null $race
 * @property string|null $race_other
 * @property string|null $religion
 * @property string|null $religion_other
 * @property string|null $address
 * @property string|null $address1
 * @property string|null $poscode
 * @property string|null $city
 * @property string|null $state
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $marital_status
 * @property string|null $marital_status_other
 * @property string|null $date
 * @property string|null $job
 * @property string|null $job_type
 * @property float|null $salary
 * @property string|null $license
 * @property string|null $license_other
 * @property string|null $university
 * @property string|null $course
 * @property string|null $education_level
 * @property string|null $graduate
 * @property string|null $company
 * @property string|null $position
 * @property string|null $period
 * @property string|null $reason
 * @property string|null $skills
 * @property string|null $malay_writing
 * @property string|null $malay_speaking
 * @property string|null $english_writing
 * @property string|null $english_speaking
 * @property string|null $training
 * @property string|null $project
 * @property \yii\web\UploadedFile|null $imageFile
 * @property \yii\web\UploadedFile|null $resume
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $file;
    public $imageFile;
    public $resumeFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
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
            [['education_level'], 'required', 'message' => 'Education Level is required !!'],
            [['university'], 'required', 'message' => 'University is required !!'],
            [['course'], 'required', 'message' => 'Course is required !!'],
            [['gender'], 'required', 'message' => 'Gender is required !!'],
            [['email'], 'required', 'message' => 'Email is required !!'],
            [['phone'], 'required', 'message' => 'Phone is required !!'],
            [['address', 'address1'], 'required', 'message' => 'Address is required !!'],
            [['poscode'], 'required', 'message' => 'Postcode is required !!'],
            [['city'], 'required', 'message' => 'City is required !!'],
            [['state'], 'required', 'message' => 'State is required !!'],
            [['dob', 'date', 'graduate'], 'required', 'message' => 'Date is required !!'],
            [['pob'], 'required', 'message' => 'Place of Birth is required !!'],
            [['job'], 'required', 'message' => 'Job Position is required !!'],
            [['job_type'], 'required', 'message' => 'Job type is required !!'],
            [['salary'], 'required', 'message' => 'Desired salary is required !!'],
            [['skills'], 'required', 'message' => 'List of skill is required !!'],

            [['marital_status', 'marital_status_other'], 'safe'],
            [['license', 'license_other', 'proficiency'], 'safe'],
            [['race', 'race_other', 'religion', 'religion_other'], 'safe'],
            [['age'], 'integer'],
            [['date', 'graduate', 'dob'], 'safe'],
            [['malay_writing', 'malay_speaking', 'english_writing', 'english_speaking'], 'safe'],
            [['salary'], 'number', 'message' => 'This field must be a number !!'],
            [['image', 'resume'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, pdf, doc, docx'],
            [['imageFile', 'resumeFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, pdf, doc, docx'],
            [['reason', 'skills', 'training', 'project', 'resume'], 'string'],
            [['name', 'address','address1', 'company'], 'string', 'max' => 255],
            [['poscode'], 'string', 'max' => 10],
            [['city', 'state', 'position', 'email', 'gender', 'university', 'course', 'education_level', 'job'], 'string', 'max' => 100],
            [['phone', 'ic_number'], 'string', 'max' => 20],
            [['marital_status', 'marital_status_other', 'license', 'license_other', 'job_type', 'period', 'pob'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'ic_number' => 'IC Number',
            'dob' => 'Date of Birth',
            'pob' => 'Place of Birth',
            'gender' => 'Gender',
            'race' => 'Race',
            'race_other' => 'Race Other',
            'religion' => 'Religion',
            'religion_other' => 'Religion Other',
            'address' => 'Address',
            'address1' => 'Address',
            'poscode' => 'Poscode',
            'city' => 'City',
            'state' => 'State',
            'email' => 'Email',
            'phone' => 'Phone',
            'marital_status' => 'Marital Status',
            'marital_status_other' => 'Marital Status Other',
            'date' => 'Date',
            'job' => 'Job',
            'job_type' => 'Job Type',
            'salary' => 'Salary',
            'license' => 'License',
            'license_other' => 'License Other',
            'university' => 'University',
            'course' => 'Course',
            'education_level' => 'Education Level',
            'graduate' => 'Graduate',
            'company' => 'Company',
            'position' => 'Position',
            'period' => 'Period',
            'reason' => 'Reason',
            'skills' => 'Skills',
            'malay_writing' => 'Malay Writing',
            'malay_speaking' => 'Malay Speaking',
            'english_writing' => 'English Writing',
            'english_speaking' => 'English Speaking',
            'training' => 'Training',
            'project' => 'Project',
            'image' => 'Image',
            'resume' => 'Resume',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (empty($this->image) && $this->isNewRecord === false) {
                $this->image = $this->getOldAttribute('image');
            }

            if (empty($this->resume) && $this->isNewRecord === false) {
                $this->resume = $this->getOldAttribute('resume');
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
        return $this->hasOne(Users::className(), ['id' => 'gender']);
    }

    public function getType0()
    {
        return $this->hasOne(Users::className(), ['id' => 'gender']);
    }

    public function getstate0()
    {
        return $this->hasOne(States::className(), ['id' => 'state']);
    }

    public function getjobType0(){
        return $this->hasOne(JobTypes::className(), ['id'=> 'job_type']);
    }

    public function getjob0(){
        return $this->hasOne(Portal::className(), ['id'=> 'job']);
    }

    public function geteducation0()
    {
        return $this->hasOne(Educations::className(), ['id' => 'education_level']);
    }
}
