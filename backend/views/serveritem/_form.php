<?php

use backend\widgets\ActiveForm;
use common\models\Servercategory;

/* @var $this yii\web\View */
/* @var $model common\models\Serveritem */
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

                        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                        <div class="hr-line-dashed"></div>
                        <?= $form->field($model, 'range')->textInput(['maxlength' => true]) ?>
                        <div class="hr-line-dashed"></div>

                        <?= $form->field($model, 'category')
                        ->label(yii::t('app', 'Category'))
                        ->dropDownList(Servercategory::getCategoriesName()) ?>
                        <div class="hr-line-dashed"></div>

                        <?= $form->field($model, 'desciption')->textarea(['rows' => 6]) ?>
                        <div class="hr-line-dashed"></div>

                        <?= $form->field($model, 'sort')->textInput(); ?>
                        <div class="hr-line-dashed"></div>

                        <?= $form->field($model, 'thumb')->imgInput(['style' => 'max-width:200px;max-height:200px']); ?>
                        <div class="hr-line-dashed"></div>

                        <?= $form->defaultButtons() ?>
                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
