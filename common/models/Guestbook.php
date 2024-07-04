<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property int $id
 * @property string $tel
 * @property string $email
 * @property string $request
 * @property int $created_at
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request'], 'string'],
            [['created_at'], 'integer'],
            ['tel','match','pattern'=>'/^[1][34578][0-9]{9}$/'],
            ['tel', 'unique',  'message' => '手机号已被使用'],
            ['email','email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'tel' => Yii::t('frontend','Your Phone'),
            'email' => Yii::t('frontend', 'Your Email'),
            'request' => Yii::t('frontend', 'Your Request'),
            'created_at' => Yii::t('frontend', 'Created At'),
        ];
    }
}
