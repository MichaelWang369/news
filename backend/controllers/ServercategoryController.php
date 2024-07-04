<?php

namespace backend\controllers;

use Yii;
use backend\models\search\ServercategorySearch;
use common\models\Servercategory;
use backend\actions\CreateAction;
use backend\actions\UpdateAction;
use backend\actions\IndexAction;
use backend\actions\DeleteAction;
use backend\actions\SortAction;
/**
 * ServercategoryController implements the CRUD actions for Servercategory model.
 */
class ServercategoryController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::className(),
                'data' => function(){
                    
                        $searchModel = new ServercategorySearch();
                        $dataProvider = $searchModel->search(yii::$app->getRequest()->getQueryParams());
                        return [
                            'dataProvider' => $dataProvider,
                            'searchModel' => $searchModel,
                        ];
                    
                }
            ],
            'create' => [
                'class' => CreateAction::className(),
                'modelClass' => Servercategory::className(),
            ],
            'update' => [
                'class' => UpdateAction::className(),
                'modelClass' => Servercategory::className(),
            ],
            'delete' => [
                'class' => DeleteAction::className(),
                'modelClass' => Servercategory::className(),
            ],
            'sort' => [
                'class' => SortAction::className(),
                'modelClass' => Servercategory::className(),
            ],
        ];
    }
}
