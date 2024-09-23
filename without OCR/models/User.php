<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $designation
 * @property string $password_hash
 * @property string $auth_key
 * @property string $role
 */

class User extends ActiveRecord implements IdentityInterface
{
    public $plainPassword; // Used for form input and not saved directly

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'plainPassword','role'], 'required'],
            [['username', 'email', 'plainPassword'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'designation'], 'string', 'max' => 50],
            ['email', 'email'],
            [['auth_key', 'phone'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            ['plainPassword', 'safe'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'designation' => 'Designation',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'role' => 'Role',
        ];
    }

    public function getuserRole0(){
        return $this->hasOne(UserRole::className(), ['id'=> 'role']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (!empty($this->plainPassword)) {
                // Generate a hashed version of the plain password and store it in password_hash
                $this->password_hash = Yii::$app->security->generatePasswordHash($this->plainPassword);
            }
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key; // Ensure this matches your database column
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey; // Ensure this matches your database column
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

}

