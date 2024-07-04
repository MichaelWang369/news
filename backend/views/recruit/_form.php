<?php
/**
 * Created at: 2016-03-23 15:49
 */

/**
 * @var $this yii\web\View
 * @var $model backend\models\Article
 */
use backend\widgets\ActiveForm;
use common\libs\Constants;
use common\widgets\JsBlock;
use backend\widgets\Ueditor;

$this->title = "Recruit";
?>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <?= $this->render('/widgets/_ibox-title') ?>
            <div class="ibox-content">
                <div class="row form-body form-horizontal m-t">
                    <div class="col-md-12 droppable sortable ui-droppable ui-sortable" style="display: none;">
                    </div>
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'enctype' => 'multipart/form-data',
                            'class' => 'form-horizontal'
                        ]
                    ]); ?>

                    <!--left start-->
                    <div class="col-md-12 droppable sortable ui-droppable ui-sortable" style="">
                        <?= $form->field($model, 'title')->textInput(); ?>
                        <?= $form->field($model, 'price')->textInput(); ?>
                        <?= $form->field($model, 'belongs')->textInput(); ?>
                        <?= $form->field($model, 'years', [
                                        'size' => 10,
                                        'labelOptions' => ['class' => 'col-sm-2 control-label']
                                    ])->dropDownList(\Yii::$app->params['years']); ?>
                        <?= $form->field($model, 'address')->textInput(); ?>
                        <?= $form->field($model, 'request')->widget(Ueditor::className()) ?>
                        <?= $form->field($model, 'sort')->textInput(); ?>

                        <?= $form->defaultButtons(['size' => 12]) ?>
                    </div>
                    <!--left stop -->

            
                    <?php $form = ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php JsBlock::begin()?>
    <script>
        $(document).ready(function () {
            $("select#article-visibility").change(function () {
                if( $(this).val() == <?=Constants::ARTICLE_VISIBILITY_SECRET?> ){
                    $("div.field-article-password").removeClass('hide');
                }else{
                    $("div.field-article-password").addClass('hide');
                }
            })
        })
    </script>
<?php JsBlock::end()?>
