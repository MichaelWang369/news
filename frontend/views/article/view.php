<?php


use frontend\widgets\ArticleListView;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;
use common\widgets\JsBlock;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $model->title;

$this->registerMetaTag(['name' => 'keywords', 'content' => $model->seo_keywords], 'keywords');
$this->registerMetaTag(['name' => 'description', 'content' => $model->seo_description], 'description');
$this->registerMetaTag(['name' => 'tags', 'content' => call_user_func(function()use($model) {
    $tags = '';
    foreach ($model->articleTags as $tag) {
        $tags .= $tag->value . ',';
    }
    return rtrim($tags, ',');
    }
)], 'tags');
$this->registerMetaTag(['property' => 'article:author', 'content' => $model->author_name]);
$categoryName = $model->category ? $model->category->name : Yii::t('app', 'uncategoried');
?>
<div class="div_pos">
    <div class="wrap">
        目前位置：<a href="<?php echo Yii::$app->homeUrl;?>">公司首页</a> &gt; <a href="<?php echo Yii::$app->urlManager->createUrl('article/index'); ?>">新闻动态</a> &gt; <a href="#">新闻详情页</a>
        <span><a href="#"></a></span>
    </div> 
</div>
<div class="details">
    <div class="wrap">
        <div class="details_tit">
        <h2 class="wow fadeInUp animated animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><?php echo $model->title; ?></h2>
            <p class="wow fadeInUp animated animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">文章来源：西户殡仪馆     &nbsp;  &nbsp;  &nbsp;  &nbsp;     发布时间：<?php echo date('Y-m-d',$model->created_at) ?></p>
        </div>
        <div class="text wow fadeInUp animated animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <p style="text-indent:2em;"> 
</p>
<div id="MyContent">
    <?php echo $model->articleContent->content; ?>
</div>
        </div>

        <div class="details_cur wow fadeInUp animated" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
            <?php if($prev){?><span class="flt"><a href="<?php echo Yii::$app->urlManager->createUrl(['article/view','id'=>$prev->id]); ?>">上一篇：<?php echo $prev->title; ?></a></span><?php }?>
            <?php if($next){?><span class="frt"><a href="<?php echo Yii::$app->urlManager->createUrl(['article/view','id'=>$next->id]); ?>">下一篇：<?php echo $next->title; ?></a></span><?php }?>
        </div>
    </div>    
</div>

