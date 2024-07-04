<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2017-03-15 21:16
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use frontend\widgets\MenuView;
AppAsset::register($this);
AppAsset::addCss($this,"/css/animate.min.css");
AppAsset::addScript($this,"/js/wow.js");
AppAsset::addScript($this,"/js/main.js");
AppAsset::addScript($this,"/js/owl.carousel.js");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="/js/html5.js"></script>
    <![endif]-->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php !isset($this->metaTags['keywords']) && $this->registerMetaTag(['name' => 'keywords', 'content' => yii::$app->feehi->seo_keywords], 'keywords');?>
    <?php !isset($this->metaTags['description']) && $this->registerMetaTag(['name' => 'description', 'content' => yii::$app->feehi->seo_description], 'description');?>
    <meta charset="<?= yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<?php $this->beginBody() ?> 
<body>
  <!-------------------------------------- 头部开始 -------------------------------------->
    <div class="header">
        <div class="wrap">
            <div class="logo">
               <a href="<?php echo Yii::$app->homeUrl;?>"><img src="<?= Yii::$app->feehi->logo; ?>"></a>
            </div>

            <div class="nav">
 <?= MenuView::widget() ?>
             
                <div class="clear"></div>
            </div>
            <div class="nav_wap"></div>
            <div class="clear"></div>
        </div>
    </div>
    <!-------------------------------------- 头部结束 -------------------------------------->
    <!-------------------------------------- 内容开始 -------------------------------------->
    <div class="mainer <?php echo isset($class)? $class : ''; ?>">


        <?php  echo $content; ?>

    <!-------------------------------------- 内容结束 -------------------------------------->
    <!-------------------------------------- 尾部开始 -------------------------------------->
    <div class="footer" style="background:url(/images/banner/ft.png) no-repeat center center; background-size:cover;">
        <div class="wrap">
            <div class="left">
                <h3>西安某管理有限公司</h3>
<?= MenuView::widget([
    'template' => "<p>{lis}<p>",
    'liTemplate'=> "<a href='{url}' target='{target}' >{title}</a>",
    'separea' => '/'
]); ?>

                <!--<p><a href="http://demo..com/www/121demo-134/index.html#">公司首页</a>/<a href="http://demo..com/www/121demo-134/index.html#">关于我们</a>/<a href="http://demo..com/www/121demo-134/index.html#">产品服务</a>/<a href="http://demo..com/www/121demo-134/index.html#">联系我们</a>/<a href="http://demo..com/www/121demo-134/index.html#">新闻动态</a></p>-->
            </div>
            <div class="right">
                <h3>客服热线：<span><?= Yii::$app->feehi->telphone; ?></span></h3>
                <p>版权所有 © 2017 - 2019 西安某管理有限公司</p> 
                <p><a href="http://www.miitbeian.gov.cn" style='color:#FFFFFF'><?= Yii::$app->feehi->putRecord; ?></a></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-------------------------------------- 尾部结束 -------------------------------------->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
