<?php
namespace backend\models;
use common\helpers\Util;

class Serveritem extends \common\models\Serveritem
{

    
    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        Util::handleModelSingleFileUpload($this, 'thumb', $insert, '@thumb', ['thumbSizes'=>self::$thumbSizes]);
        return parent::beforeSave($insert);
    }

}
