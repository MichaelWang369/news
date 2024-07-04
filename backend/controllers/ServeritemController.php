<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-23 15:13
 */

namespace backend\controllers;

use yii;
use backend\models\Serveritem;
use backend\models\search\ServeritemSearch;
use backend\actions\CreateAction;
use backend\actions\UpdateAction;
use backend\actions\IndexAction;
use backend\actions\ViewAction;
use backend\actions\DeleteAction;
use backend\actions\SortAction;

class ServeritemController extends \yii\web\Controller
{

    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::className(),
                'data' => function(){
                    $searchModel = new ServeritemSearch();
                    $dataProvider = $searchModel->search(yii::$app->getRequest()->getQueryParams());
                    return [
                        'dataProvider' => $dataProvider,
                        'searchModel' => $searchModel,
                    ];
                }
            ],
            'create' => [
                'class' => CreateAction::className(),
                'modelClass' => Serveritem::className(),
                'scenario' => 'app',
            ],
            'update' => [
                'class' => UpdateAction::className(),
                'modelClass' => Serveritem::className(),
                'scenario' => 'app',
            ],
            'view-layer' => [
                'class' => ViewAction::className(),
                'modelClass' => Serveritem::className(),
            ],
            'delete' => [
                'class' => DeleteAction::className(),
                'modelClass' => Serveritem::className(),
            ],
            'sort' => [
                'class' => SortAction::className(),
                'modelClass' => Serveritem::className(),
                'scenario' => 'app',
            ],
        ];
    }

}
