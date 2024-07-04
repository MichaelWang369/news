<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('frontend','Contact us');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrap" style='margin-top:50px;'>
  <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"> 
    <h3><?= Yii::t('frontend','Contact us')?></h3>
                <label></label>
                <span>Contact us</span>
            </div>
                <div class="contact_l">
                    <div class="web">
                        <div class="tit">
                            <h3>Contact us</h3>
                            <span></span>
                        </div>
                        <div class="text"><p><?= Yii::$app->feehi->contanct_info; ?></p>
                        </div>
                    </div>
                </div>
                <div class="contact_r">
                    <div class="contact_address">
                        <ul>
                            <li>
                                <span class="sp1"></span>
                                <h4><?= Yii::t('frontend','Address')?></h4>
                                <div class="text">
                                    <div class="cell">
                                        <p><?= Yii::$app->feehi->address; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="sp2"></span>
                                <h4><?= Yii::t('frontend','Telphone')?></h4>
                                <div class="text">
                                    <div class="cell">
                                        <p><?= Yii::$app->feehi->telphone; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="sp3"></span>
                                <h4><?= Yii::t('frontend','Email')?></h4>
                                <div class="text">
                                    <div class="cell">
                                        <p><?= Yii::$app->feehi->email; ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="contact_lxfs">
     <?php $form = ActiveForm::begin([
                        'options' => [
                            'enctype' => 'multipart/form-data',
                            'class' => 'form-horizontal'
                        ]
                    ]); ?>
                        <div class="tit">
                            <h3><?= Yii::t('frontend','Your contact')?><?php if($success) echo '已经提交，我们将为尽快联系您！'; ?> <?= Html::submitButton(Yii::t('frontend','Submit'), ['class' => 'contact-button']) ?></h3>
                        </div>
                        <div class="ly_box">
                            <div class="ly_list ly_list1 flt">
                                <div class="ly_inp">
                                    <?= $form->field($model, 'tel')->textInput()->input('tel', ['placeholder' => Yii::t('frontend','Your Phone')])->label(false); ?>
                                </div>
                            </div>
                            <div class="ly_list ly_list1 frt">
                                <div class="ly_inp">
                                    <?= $form->field($model, 'email')->textInput()->input('email', ['placeholder' => Yii::t('frontend','Your Email')])->label(false);; ?>

                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="ly_list">
                                <div class="ly_textarea">
                                    <?= $form->field($model, 'request')->textarea()->label(false);; ?>
                                </div>
                            </div>
                        </div>
                    <?php $form = ActiveForm::end() ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
