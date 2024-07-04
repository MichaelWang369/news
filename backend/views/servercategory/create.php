<?php

use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Servercategory */

$this->params['breadcrumbs'] = [
    ['label' => yii::t('app', 'Servercategory'), 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Create') . yii::t('app', 'Servercategory')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>

