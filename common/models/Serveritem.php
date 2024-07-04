<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "serveritem".
 *
 * @property int $id
 * @property string $name
 * @property string $summery
 * @property string $desciption
 * @property string $remark
 * @property int $created_at
 * @property int $updated_at
 */
class Serveritem extends \yii\db\ActiveRecord
{

    
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
   /**
     * 需要截取的文章缩略图尺寸
     */
    public static $thumbSizes = [
        ["w"=>500, "h"=>300],//首页文章列表
        ["w"=>168, "h"=>112],//精选导读
        ["w"=>185, "h"=>110],//文章详情下边图片推荐
        ["w"=>125, "h"=>86],//热门推荐
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serveritem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'created_at', 'updated_at', 'price', 'sort', 'category'], 'integer'],
            [['summery', 'desciption', 'remark', 'range'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'name' => Yii::t('app', 'Name'),
            'summery' => Yii::t('app', 'Summery'),
            'range' => Yii::t('app', 'Range'),
            'sort' => Yii::t('app', 'Sort'),
            'price' => Yii::t('app', 'Item Price'),
            'desciption' => Yii::t('app', 'Desciption'),
            'remark' => Yii::t('app', 'Remark'),
            'thumb' => Yii::t('app', 'Thumb'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function scenarios()
    {
        return [
            'backend' => [
                'name',
                'price',
                'summery',
                'desciption',
                'thumb',
                'category',
                'range',
                'sort',
                'created_at',
                'updated_at',
            ],
             'app' => [
                'name',
                'price',
                'summery',
                'desciption',
                'thumb',
                'category',
                'range',
                'sort',
                'created_at',
                'updated_at',
            ],
        ];
    }
}
