<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $education
 * @property string|null $experience
 * @property string|null $skills
 * @property \yii\web\UploadedFile|null $resumeFile
 * 
 */

class ResumeData extends ActiveRecord
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
        return 'resume_data'; // Replace with your actual table name
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            ['email', 'email'],
            [['phone'], 'match', 'pattern' => '/^[0-9\-]+$/', 'message' => 'Phone number can only contain digits and dashes.'],
            ['education', 'string'],
            ['experience', 'string'],
            ['skills', 'string'],
            ['resumeFile', 'file', 'extensions' => 'pdf, doc, docx'],
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

