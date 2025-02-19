<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-23 15:47
 */
use yii\helpers\Url;

/**
 * @var $model backend\models\Article
 */
$this->params['breadcrumbs'] = [
    ['label' => yii::t('app', 'Recruit'), 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Create') . yii::t('app', 'Recruit')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]);
