<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-23 15:13
 */

namespace backend\controllers;

use yii;
use backend\models\Recruit;
use backend\models\search\RecruitSearch;
use backend\actions\CreateAction;
use backend\actions\UpdateAction;
use backend\actions\IndexAction;
use backend\actions\ViewAction;
use backend\actions\DeleteAction;
use backend\actions\SortAction;

class RecruitController extends \yii\web\Controller
{

    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::className(),
                'data' => function(){
                    $searchModel = new RecruitSearch();
                    $dataProvider = $searchModel->search(yii::$app->getRequest()->getQueryParams());
                    return [
                        'dataProvider' => $dataProvider,
                        'searchModel' => $searchModel,
                    ];
                }
            ],
            'create' => [
                'class' => CreateAction::className(),
                'modelClass' => Recruit::className(),
                'scenario' => 'app',
            ],
            'update' => [
                'class' => UpdateAction::className(),
                'modelClass' => Recruit::className(),
                'scenario' => 'app',
            ],
            'view-layer' => [
                'class' => ViewAction::className(),
                'modelClass' => Recruit::className(),
            ],
            'delete' => [
                'class' => DeleteAction::className(),
                'modelClass' => Recruit::className(),
            ],
            'sort' => [
                'class' => SortAction::className(),
                'modelClass' => Recruit::className(),
                'scenario' => 'app',
            ],
        ];
    }

}
