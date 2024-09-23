<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "portal".
 *
 * @property int $id
 * @property string $title
 * @property \yii\web\UploadedFile|null $imageFile
 * @property string $job_type
 * @property string|null $responsibilities
 * @property string|null $description
 * @property string|null $benefit
 * @property string|null $location
 * @property string|null $schedule
 * @property float|null $min_salary
 * @property float|null $max_salary
 */
 
class Portal extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile
     */
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['title', 'required', 'message' => 'Title is required !!'],
            ['job_type', 'required', 'message' => 'Job type is required !!'],
            ['location', 'required', 'message' => 'Location is required !!'],
            ['schedule', 'required', 'message' => 'Schedule is required !!'],
            ['min_salary', 'required', 'message' => 'Minimum salary is required !!'],
            ['max_salary', 'required', 'message' => 'Maximum salary is required !!'],

            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
            [['responsibilities', 'description', 'benefit'], 'string'],
            [['min_salary', 'max_salary'], 'number', 'message' => 'This field must be a number !!'],
            ['min_salary', 'compare', 'compareAttribute' => 'max_salary', 'operator' => '<', 'message' => 'Min Salary must be less than Max Salary !!'],
            ['max_salary', 'compare', 'compareAttribute' => 'min_salary', 'operator' => '>', 'message' => 'Max Salary must be more than Min Salary !!'],
            [['title', 'location', 'schedule'], 'string', 'max' => 100], 
            [['job_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'imageFile' => 'Image File',
            'job_type' => 'Job Type',
            'responsibilities' => 'Responsibilities',
            'description' => 'Description',
            'benefit' => 'Benefit',
            'location' => 'Location',
            'schedule' => 'Schedule',
            'min_salary' => 'Min Salary',
            'max_salary' => 'Max Salary',
        ];
    }

    public function getjobType0(){
        return $this->hasOne(JobTypes::className(), ['id'=> 'job_type']);
    }

}
