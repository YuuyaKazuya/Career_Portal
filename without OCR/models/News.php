<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "News".
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property string|null $author
 * @property \yii\web\UploadedFile|null $imageFile
 * @property string $content
 * @property string|null $category
 * @property string|null $source
 */
class News extends \yii\db\ActiveRecord
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
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'date', 'content'], 'required'],
            [['id'], 'integer'],
            [['date'], 'safe'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
            [['content'], 'string'],
            [['title', 'author', 'source'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 50],
            [['id'], 'unique'],
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
            'date' => 'Date',
            'author' => 'Author',
            'imageFile' => 'ImageFile',
            'content' => 'Content',
            'category' => 'Category',
            'source' => 'Source',
        ];
    }
    public function getCategory0(){
        return $this->hasOne(Categories::className(), ['category_id'=> 'category']);
    }
}