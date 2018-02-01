<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $created_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'first_name', 'last_name', 'gender', 'created_at'], 'required'],
            [['login'], 'string', 'min' => 4],
            [['password'], 'string', 'min' => 6],
            [['created_at'], 'safe'],
            [['login', 'first_name', 'last_name', 'gender'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'created_at' => 'Created At',
        ];
    }
}
