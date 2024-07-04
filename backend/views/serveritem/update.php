<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Serveritem */

$this->params['breadcrumbs'] = [
    ['label' => yii::t('app', 'Serveritem'), 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Update') . yii::t('app', 'Serveritem')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
