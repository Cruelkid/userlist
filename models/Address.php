<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addresses".
 *
 * @property int $id
 * @property int $user_id
 * @property int $post_code
 * @property int $country
 * @property string $city
 * @property string $street
 * @property string $home_number
 * @property string $apartment_number
 *
 * @property User $user
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'post_code', 'country', 'city', 'street', 'home_number', 'apartment_number'], 'required'],
            [['user_id', 'post_code', 'country'], 'integer'],
            [['city', 'street', 'home_number', 'apartment_number'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'post_code' => 'Post Code',
            'country' => 'Country',
            'city' => 'City',
            'street' => 'Street',
            'home_number' => 'Home Number',
            'apartment_number' => 'Apartment Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
