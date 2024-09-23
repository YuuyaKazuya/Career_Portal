<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $level_name
 */
class Educations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_name'], 'required'],
            [['level_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_name' => 'Level Name',
        ];
    }
}
