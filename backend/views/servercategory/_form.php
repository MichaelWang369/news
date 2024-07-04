<?php

use backend\widgets\ActiveForm;
use common\models\Servercategory;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Servercategory */
/* @var $form backend\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <?= $this->render('/widgets/_ibox-title') ?>
            <div class="ibox-content">
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'form-horizontal'
                    ]
                ]); ?>
                <div class="hr-line-dashed"></div>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        <div class="hr-line-dashed"></div>
                    
                    <?= $form->field($model, 'parent_id')
                    ->label(yii::t('app', 'Parent Id'))
                    ->dropDownList(Servercategory::getCategoriesName()) ?>
                        <div class="hr-line-dashed"></div>


                        <?= $form->defaultButtons() ?>
                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
