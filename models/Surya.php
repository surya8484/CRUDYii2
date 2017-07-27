<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surya".
 *
 * @property string $firstname
 * @property string $lastname
 * @property integer $phone
 * @property string $email
 */
class Surya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'phone', 'email'], 'required'],
            [['phone'], 'integer'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
