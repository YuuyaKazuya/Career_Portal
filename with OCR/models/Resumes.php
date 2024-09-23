<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\base\Model;

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

class Resumes extends Model
{
    /**
     * @var UploadedFile
     */
    public $resumeFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resumes';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'education'], 'required'],
            ['email', 'email'],
            [['experience', 'skills'], 'string'],
            [['phone'], 'match', 'pattern' => '/^[0-9\-]+$/', 'message' => 'Phone number can only contain digits and dashes.'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
            'education' => 'Educational Background',
            'experience' => 'Work Experience',
            'skills' => 'Skills',
        ];
    }

    
}
