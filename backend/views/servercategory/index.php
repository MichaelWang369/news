<?php

use backend\widgets\Bar;
use backend\grid\CheckboxColumn;
use backend\grid\ActionColumn;
use backend\grid\GridView;
use backend\grid\DateColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ServercategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Servercategories');
$this->params['breadcrumbs'][] = Yii::t('app', 'Servercategories');
?>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <?= $this->render('/widgets/_ibox-title') ?>
            <div class="ibox-content">
                <?= Bar::widget() ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => CheckboxColumn::className()],

                        'name',
                        'parent_id',
                        [
                            'class' => DateColumn::className(),
                            'attribute' => 'created_at',
                        ],

                         ['class' => ActionColumn::className(),
                        'template' => '{update} {delete}',
                            
                     ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
