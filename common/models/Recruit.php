<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "recruit".
 *
 * @property int $id
 * @property string $title
 * @property string $price
 * @property string $years
 * @property string $request
 * @property string $sort
 * @property string $belongs
 * @property string $address
 * @property int $created_at
 * @property int $updated_at
 * @property int $expire_at
 */
class Recruit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recruit';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'expire_at','sort'], 'integer'],
            [['request'], 'string'],
            [['title', 'price', 'years', 'belongs', 'address'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'price' => Yii::t('app', 'Price'),
            'years' => Yii::t('app', 'Years'),
            'thumb' => Yii::t('app', 'Thumb'),
            'request' => Yii::t('app', 'Request'),
            'belongs' => Yii::t('app', 'Belongs'),
            'address' => Yii::t('app', 'Address'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'expire_at' => Yii::t('app', 'Expire At'),
            'sort' => Yii::t('app', 'Sort'),
        ];
    }
        /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return [
            'app' => [
                'title',
                'price',
                'years',
                'request',
                'thumb',
                'belongs',
                'address',
                'sort',
                'created_at',
                'expire_at',
                'updated_at',
            ],
            'frontend' => [
                'title',
                'price',
                'years',
                'request',
                'thumb',
                'belongs',
                'address',
                'sort',
                'created_at',
                'expire_at',
                'updated_at',
            ],
        ];
    }

}
