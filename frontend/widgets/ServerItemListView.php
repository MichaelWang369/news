<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-06-19 00:21
 */

namespace frontend\widgets;

use yii;
use common\models\Serveritem;

class ServerItemListView extends \yii\base\widget
{

    public $category;
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {

        $items = Serveritem::find()->where(['category'=>$this->category])->orderBy('sort ASC, id ASC')->limit(7)->all();
        return $this->render('servers', ['items'=>$items]);

    }

}
