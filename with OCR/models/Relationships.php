<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relationship".
 *
 * @property int $id
 * @property string $relationship_name
 */
class Relationships extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relationship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['relationship_name'], 'required'],
            [['relationship_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'relationship_name' => 'Relationship Name',
        ];
    }
}
